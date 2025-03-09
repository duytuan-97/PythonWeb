import os
import json
import faiss
import torch
import clip
from PIL import Image
from django.conf import settings

device = "cpu"
model, preprocess = clip.load("ViT-B/32", device)

index = faiss.IndexFlatL2(512)
labels = []
image_paths = []

INDEX_FILE = os.path.join(settings.MEDIA_ROOT, 'image_vectors.index')
LABEL_FILE = os.path.join(settings.MEDIA_ROOT, 'image_labels.json')
PATH_FILE = os.path.join(settings.MEDIA_ROOT, 'image_paths.json')

def load_index():
    global index, labels, image_paths
    if os.path.exists(INDEX_FILE):
        index = faiss.read_index(INDEX_FILE)
    if os.path.exists(LABEL_FILE):
        with open(LABEL_FILE, "r") as f:
            labels = json.load(f)
    if os.path.exists(PATH_FILE):
        with open(PATH_FILE, "r") as f:
            image_paths = json.load(f)

def save_index():
    faiss.write_index(index, INDEX_FILE)
    with open(LABEL_FILE, "w") as f:
        json.dump(labels, f)
    with open(PATH_FILE, "w") as f:
        json.dump(image_paths, f)

def add_image_to_index(image_path, label):
    global index, labels, image_paths
    try:
        image = preprocess(Image.open(image_path)).unsqueeze(0).to(device)
        with torch.no_grad():
            vector = model.encode_image(image).cpu().numpy()
        index.add(vector)
        labels.append(label)
        image_paths.append(image_path)
        save_index()
    except Exception as e:
        print(f"Lỗi khi thêm ảnh {image_path}: {e}")

def remove_image_from_index(image_path):
    global index, labels, image_paths
    if image_path in image_paths:
        idx = image_paths.index(image_path)
        del labels[idx]
        del image_paths[idx]
        
        new_index = faiss.IndexFlatL2(512)
        for path in image_paths:
            image = preprocess(Image.open(path)).unsqueeze(0).to(device)
            with torch.no_grad():
                vector = model.encode_image(image).cpu().numpy()
            new_index.add(vector)
        
        index = new_index
        save_index()

def search_similar_images(image_path, threshold=0.8):
    image = preprocess(Image.open(image_path)).unsqueeze(0).to(device)
    with torch.no_grad():
        vector = model.encode_image(image).cpu().numpy()
    distances, indices = index.search(vector, len(labels))
    
    similar_images = []
    for i, idx in enumerate(indices[0]):
        if distances[0][i] < threshold:
            similar_images.append((labels[idx], image_paths[idx], distances[0][i]))
    
    return similar_images

# Load index khi khởi động
load_index()