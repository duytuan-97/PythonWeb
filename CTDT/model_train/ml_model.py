import pickle
import os
MODEL_PATH = os.path.join(os.path.dirname(__file__), 'model_trained.pkl')

def train_model():
    """
    Hàm này chạy quá trình train mô hình dự đoán.
    Sau khi train, lưu mô hình mới vào MODEL_PATH.
    """
    # Ví dụ: giả lập quá trình train
    # model = train_your_model(...)
    model = "This is a dummy model ..............."  # Thay bằng mô hình thực tế của bạn

    # Lưu mô hình vào file
    with open(MODEL_PATH, 'wb') as f:
        pickle.dump(model, f)
    return model