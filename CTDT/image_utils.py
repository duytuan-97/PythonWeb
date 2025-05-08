import os
import json
import faiss
import numpy as np
import torch
import clip
from PIL import Image
from django.conf import settings
from collections import OrderedDict


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

# def remove_image_from_index(image_path):
#     global index, labels, image_paths
#     if image_path in image_paths:
#         idx = image_paths.index(image_path)
#         del labels[idx]
#         del image_paths[idx]
        
#         new_index = faiss.IndexFlatL2(512)
#         for path in image_paths:
#             image = preprocess(Image.open(path)).unsqueeze(0).to(device)
#             with torch.no_grad():
#                 vector = model.encode_image(image).cpu().numpy()
#             new_index.add(vector)
        
#         index = new_index
#         save_index()

def remove_image_from_index(image_path):
    global index, labels, image_paths
    if image_path in image_paths:
        idx = image_paths.index(image_path)
        del labels[idx]
        del image_paths[idx]
        
        new_index = faiss.IndexFlatL2(512)
        for path in image_paths:
            if os.path.exists(path):  # ✅ Thêm kiểm tra này
                try:
                    image = preprocess(Image.open(path)).unsqueeze(0).to(device)
                    with torch.no_grad():
                        vector = model.encode_image(image).cpu().numpy()
                    new_index.add(vector)
                except Exception as e:
                    print(f"⚠️ Lỗi xử lý ảnh {path}: {e}")
            else:
                print(f"⚠️ File không tồn tại, bỏ qua: {path}")
        
        index = new_index
        save_index()

# def search_similar_images(image_path, threshold=0.7):
#     load_index()
#     similar_images = []
#     image = preprocess(Image.open(image_path)).unsqueeze(0).to(device)
#     with torch.no_grad():
#         vector = model.encode_image(image).cpu().numpy()
    
#     if not labels:  # Kiểm tra nếu labels rỗng
#         print("⚠️ Không có dữ liệu trong labels.json, không thể tìm kiếm.")
#         return similar_images
#     else:
#         distances, indices = index.search(vector, len(labels))
#     # distances, indices = index.search(vector, len(labels))
    
#     # for i, idx in enumerate(indices[0]):
#     #     if distances[0][i] < threshold:
#     #         similar_images.append((labels[idx], image_paths[idx], distances[0][i]))
#     for i, idx in enumerate(indices[0]):
#         if idx < len(labels) and idx < len(image_paths):
#             if distances[0][i] < threshold:
#                 similar_images.append((labels[idx], image_paths[idx], distances[0][i]))
#         else:
#             print(f"⚠️ Lỗi: idx={idx} vượt quá labels/image_paths. Tổng số labels={len(labels)}.")
    
#     return similar_images

def search_similar_images(image_path, threshold=0.7):
    load_index()
    similar_images = []
    image = preprocess(Image.open(image_path)).unsqueeze(0).to(device)
    with torch.no_grad():
        vector = model.encode_image(image).cpu().numpy()

    if not labels or not image_paths or index.ntotal == 0:
        print("⚠️ Không có dữ liệu trong index hoặc labels, không thể tìm kiếm.")
        return similar_images

    distances, indices = index.search(vector, len(labels))

    for i, idx in enumerate(indices[0]):
        if idx < len(labels) and idx < len(image_paths):
            if distances[0][i] < threshold:
                similar_images.append((labels[idx], image_paths[idx], distances[0][i]))
        else:
            print(f"⚠️ Lỗi: idx={idx} vượt quá giới hạn. labels={len(labels)}, image_paths={len(image_paths)}")

    return similar_images




# Hàm kiểm tra và chỉ thêm nếu không trùng

def check_and_add_image(image_path, label, threshold=0.7):
    similar_images = search_similar_images(image_path, threshold)
    if similar_images:
        print("⚠️ Ảnh đã tồn tại:", similar_images)
        return False
    add_image_to_index(image_path, label)
    return True

def clean_index():
    global index, labels, image_paths
    print("🧹 Đang dọn dẹp index...")

    # Sử dụng OrderedDict để loại bỏ các đường dẫn trùng lặp, giữ lại lần xuất hiện đầu tiên
    unique_paths = list(OrderedDict.fromkeys(image_paths))
    unique_labels = [labels[image_paths.index(path)] for path in unique_paths if path in image_paths]

    valid_labels = []
    valid_paths = []
    valid_vectors = []

    # Kiểm tra từng ảnh
    for label, path in zip(unique_labels, unique_paths):
        if os.path.exists(path):
            try:
                # Mở và xử lý ảnh
                image = preprocess(Image.open(path)).unsqueeze(0).to(device)
                with torch.no_grad():
                    vector = model.encode_image(image).cpu().numpy()
                valid_labels.append(label)
                valid_paths.append(path)
                valid_vectors.append(vector)
                print(f"✅ Ảnh hợp lệ: {path}")
            except Exception as e:
                print(f"⚠️ Lỗi xử lý ảnh {path}: {e}")
        else:
            print(f"⚠️ File không tồn tại, bỏ qua: {path}")

    # Tạo index mới
    index = faiss.IndexFlatL2(512)
    if valid_vectors:
        index.add(np.vstack(valid_vectors))
    else:
        print("⚠️ Không có ảnh hợp lệ để thêm vào index.")

    # Cập nhật danh sách toàn cục
    labels = valid_labels
    image_paths = valid_paths
    save_index()
    print(f"✅ Dọn dẹp xong. Còn lại {len(labels)} ảnh.")

# Load index khi khởi động
load_index()
clean_index()