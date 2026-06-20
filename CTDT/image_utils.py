import os
import json
import faiss
import numpy as np
import torch
import clip
from PIL import Image
from django.conf import settings
from collections import OrderedDict

import fitz  # PyMuPDF
import io



device = "cpu"
model, preprocess = clip.load("ViT-B/32", device)

index = faiss.IndexFlatL2(512)
labels = []
image_paths = []

labels_pdf = []
pdf_paths = []

INDEX_FILE = os.path.join(settings.MEDIA_ROOT, 'image_vectors.index')
LABEL_FILE = os.path.join(settings.MEDIA_ROOT, 'image_labels.json')
PATH_FILE = os.path.join(settings.MEDIA_ROOT, 'image_paths.json')

INDEX_FILE_PDF = os.path.join(settings.MEDIA_ROOT, 'pdf_vectors.index')
LABEL_FILE_PDF = os.path.join(settings.MEDIA_ROOT, 'pdf_labels.json')
PATH_FILE_PDF = os.path.join(settings.MEDIA_ROOT, 'pdf_paths.json')

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
        
def load_index_pdf():
    global index_pdf, labels_pdf, pdf_paths
    if os.path.exists(INDEX_FILE_PDF):
        try:
            index_pdf = faiss.read_index(INDEX_FILE_PDF)
            print(f"✅ Đã tải index PDF từ {INDEX_FILE_PDF}")
        except Exception as e:
            print(f"⚠️ Lỗi khi đọc index PDF {INDEX_FILE_PDF}: {e}")
            index_pdf = faiss.IndexFlatL2(512)
    else:
        print(f"⚠️ File index PDF {INDEX_FILE_PDF} không tồn tại, khởi tạo index rỗng.")
        index_pdf = faiss.IndexFlatL2(512)
    if os.path.exists(LABEL_FILE_PDF):
        with open(LABEL_FILE_PDF, "r") as f:
            labels_pdf = json.load(f)
    else:
        labels_pdf = []
    if os.path.exists(PATH_FILE_PDF):
        with open(PATH_FILE_PDF, "r") as f:
            pdf_paths = json.load(f)
        valid_paths = [path for path in pdf_paths if path.lower().endswith('.pdf')]
        if len(valid_paths) < len(pdf_paths):
            print(f"⚠️ Đã lọc bỏ {len(pdf_paths) - len(valid_paths)} đường dẫn không phải PDF")
            pdf_paths = valid_paths
            valid_labels = [labels_pdf[pdf_paths.index(path)] for path in valid_paths if path in pdf_paths]
            labels_pdf = valid_labels
            save_index_pdf()
    else:
        pdf_paths = []

def save_index_pdf():
    faiss.write_index(index_pdf, INDEX_FILE_PDF)
    with open(LABEL_FILE_PDF, "w") as f:
        json.dump(labels_pdf, f)
    with open(PATH_FILE_PDF, "w") as f:
        json.dump(pdf_paths, f)

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

# ===========================================check pdf

def clean_index_pdf():
    global index_pdf, labels_pdf, pdf_paths
    print("🧹 Đang dọn dẹp index PDF...")
    unique_pdf_paths = list(OrderedDict.fromkeys(pdf_paths))
    unique_pdf_labels = [labels_pdf[pdf_paths.index(path)] for path in unique_pdf_paths if path in pdf_paths]
    valid_labels = []
    valid_paths = []
    valid_vectors = []
    for label, path in zip(unique_pdf_labels, unique_pdf_paths):
        if not path.lower().endswith('.pdf'):
            print(f"⚠️ Đường dẫn không phải PDF, bỏ qua: {path}")
            continue
        if os.path.exists(path):
            try:
                image = extract_first_page_image(path)
                if image:
                    vector = encode_image_pdf(image)
                    if vector is not None:
                        valid_labels.append(label)
                        valid_paths.append(path)
                        valid_vectors.append(vector)
                        print(f"✅ PDF scan hợp lệ: {path}")
                    else:
                        print(f"⚠️ Không thể mã hóa vector cho PDF: {path}")
                else:
                    print(f"⚠️ Không thể trích xuất ảnh từ PDF: {path}")
            except Exception as e:
                print(f"⚠️ Lỗi xử lý PDF {path}: {e}")
        else:
            print(f"⚠️ File PDF không tồn tại, bỏ qua: {path}")
    index_pdf = faiss.IndexFlatL2(512)
    if valid_vectors:
        index_pdf.add(np.vstack(valid_vectors))
    else:
        print("⚠️ Không có PDF hợp lệ để thêm vào index.")
    labels_pdf = valid_labels
    pdf_paths = valid_paths
    save_index_pdf()
    print(f"✅ Dọn dẹp xong. Còn lại {len(labels_pdf)} PDF.")

def encode_image_pdf(pil_image):
    try:
        image = preprocess(pil_image).unsqueeze(0).to(device)
        with torch.no_grad():
            vector = model.encode_image(image).cpu().numpy()
        return vector
    except Exception as e:
        print(f"⚠️ Lỗi mã hoá ảnh CLIP: {e}")
        return None

def extract_first_page_image(pdf_path):
    """
    Trích xuất ảnh trang đầu tiên từ file PDF (scan).
    Trả về ảnh dạng PIL.Image hoặc None nếu lỗi.
    """
    try:
        doc = fitz.open(pdf_path)
        if doc.page_count == 0:
            return None
        page = doc.load_page(0)
        pix = page.get_pixmap(dpi=200)
        img_data = pix.tobytes("png")
        return Image.open(io.BytesIO(img_data)).convert("RGB")
    except Exception as e:
        print(f"⚠️ Lỗi trích xuất ảnh từ PDF {pdf_path}: {e}")
        return None

# def encode_image(pil_image):
#     """
#     Nhận ảnh PIL.Image → trả về vector CLIP dạng numpy.
#     """
#     try:
#         image = preprocess(pil_image).unsqueeze(0).to(device)
#         with torch.no_grad():
#             vector = model.encode_image(image).cpu().numpy()
#         return vector
#     except Exception as e:
#         print(f"⚠️ Lỗi mã hoá ảnh CLIP: {e}")
#         return None

def search_similar_vectors(vector, threshold=0.7):
    load_index_pdf()
    similar_items = []

    if not labels_pdf or not pdf_paths or index_pdf.ntotal == 0:
        print("⚠️ Index trống, không thể tìm kiếm.")
        return similar_items

    distances, indices = index_pdf.search(vector, len(labels_pdf))
    for i, idx in enumerate(indices[0]):
        if idx < len(labels_pdf) and idx < len(pdf_paths):
            if distances[0][i] < threshold:
                similar_items.append((labels_pdf[idx], pdf_paths[idx], distances[0][i]))
        else:
            print(f"⚠️ Lỗi: idx={idx} vượt giới hạn.")
    return similar_items

def add_vector_to_index(vector, label, source_path):
    global index_pdf, labels_pdf, pdf_paths
    if not source_path.lower().endswith('.pdf'):
        print(f"⚠️ Đường dẫn không phải PDF, không thêm: {source_path}")
        return
    index_pdf.add(vector)
    labels_pdf.append(label)
    pdf_paths.append(source_path)
    save_index_pdf()

def remove_pdf_from_index(pdf_path):
    global index_pdf, labels_pdf, pdf_paths
    if pdf_path in pdf_paths:
        idx = pdf_paths.index(pdf_path)
        del labels_pdf[idx]
        del pdf_paths[idx]
        new_index = faiss.IndexFlatL2(512)
        for path in pdf_paths:
            if os.path.exists(path):
                try:
                    image = extract_first_page_image(path)
                    if image:
                        vector = encode_image_pdf(image)
                        if vector is not None:
                            new_index.add(vector)
                except Exception as e:
                    print(f"⚠️ Lỗi khi xử lý PDF {path}: {e}")
        index_pdf = new_index
        save_index_pdf()

def check_and_add_pdf(pdf_path, label, threshold=0.7):
    print("⚠️ chưa add vector index:")
    if not pdf_path.lower().endswith('.pdf'):
        print(f"⚠️ Đường dẫn không phải PDF: {pdf_path}")
        return False
    if not os.path.exists(pdf_path):
        print(f"⚠️ File PDF không tồn tại: {pdf_path}")
        return False
    image = extract_first_page_image(pdf_path)
    if image is None:
        print(f"⚠️ Không thể trích xuất ảnh từ PDF: {pdf_path}")
        return False
    vector = encode_image_pdf(image)
    if vector is None:
        print(f"⚠️ Không thể mã hóa vector cho PDF: {pdf_path}")
        return False
    similar_images = search_similar_vectors(vector, threshold)
    if similar_images:
        print("⚠️ PDF đã tồn tại:", similar_images)
        return False
    print(f"⚠️ chưa add vector index:{pdf_path}")
    add_vector_to_index(vector, label, source_path=pdf_path)
    print("⚠️ Đã add vector index:")
    return True



# # Load index khi khởi động
# load_index()
# clean_index()

# load_index_pdf()
# clean_index_pdf()

