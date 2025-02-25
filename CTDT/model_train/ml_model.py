from io import BytesIO
import json
import pickle
import os
from django.contrib import messages as dj_messages

from django.conf import settings
from django.shortcuts import redirect
import tensorflow as tf
print(tf.__version__)

from django.core.exceptions import ValidationError

import numpy as np
import matplotlib.pyplot as plt
from tensorflow.keras.preprocessing import image_dataset_from_directory
from tensorflow.keras.applications import MobileNetV2
from tensorflow.keras.layers import Dense, GlobalAveragePooling2D
from tensorflow.keras.models import Model
from tensorflow.keras.optimizers import Adam

MODEL_PATH = "./CTDT/model_train"
CLASS_PATH = os.path.join(os.path.dirname(__file__), 'class_names.json')
data_dir = os.path.join(settings.MEDIA_ROOT, 'attest')

ALLOWED_EXTENSIONS = {'.jpeg', '.jpg', '.png'}

valid_paths = []
class_names = []

def get_valid_image_paths(base_dir):
    """
    Duyệt qua các thư mục con (slug) của base_dir và chỉ lấy các file ảnh hợp lệ
    (không chứa pattern ".150x150_q85" trong tên file).
    """
    image_paths = []
    # Lấy danh sách các thư mục con (slug)
    slug_folders = [os.path.join(base_dir, slug) for slug in os.listdir(base_dir)
                    if os.path.isdir(os.path.join(base_dir, slug))]
    class_names = slug_folders
    for slug in slug_folders:
        for filename in os.listdir(slug):
            ext = os.path.splitext(filename)[1].lower()
            if ".150x150_q85" in filename:
                continue  # Bỏ qua file thumbnail
            if ext in ALLOWED_EXTENSIONS:
                image_paths.append(os.path.join(slug, filename))
    return image_paths

def check_images_exist(base_dir):
    """
    Kiểm tra xem trong base_dir (ví dụ: media/attest) có tồn tại ít nhất một hình ảnh nào trong các thư mục con (slug) hay không.
    """
    # allowed_extensions = {'.bmp', '.gif', '.jpeg', '.jpg', '.png'}
    # # Lấy danh sách các thư mục slug
    # if not os.path.exists(base_dir):
    #     return False  # Nếu thư mục không tồn tại thì trả về False

    # slug_folders = [os.path.join(base_dir, slug) for slug in os.listdir(base_dir)
    #                 if os.path.isdir(os.path.join(base_dir, slug))]
    
    # # Duyệt từng thư mục slug
    # for slug in slug_folders:
    #     for filename in os.listdir(slug):
    #         ext = os.path.splitext(filename)[1].lower()
    #         if ext in allowed_extensions:
    #             return True  # Tìm thấy ít nhất 1 hình ảnh
    # return False  # Không tìm thấy hình ảnh nào trong tất cả các slug
    
    valid_paths = get_valid_image_paths(data_dir)
    return len(valid_paths) > 0

def load_image(path):
    # Đọc file ảnh từ đường dẫn (đầu vào path ở dạng bytes)
    img_raw = tf.io.read_file(path)
    # Chuyển đổi path sang string sử dụng tf.compat.as_str_any và decode
    path_str = path.numpy().decode('utf-8')
    ext = os.path.splitext(path_str)[1].lower()
    if ext in ['.jpg', '.jpeg']:
        img = tf.image.decode_jpeg(img_raw, channels=3)
    elif ext == '.png':
        img = tf.image.decode_png(img_raw, channels=3)
    img = tf.image.resize(img, [224, 224])
    return img

def load_image_wrapper(path):
    # Sử dụng tf.py_function để chuyển sang hàm Python thuần
    img = tf.py_function(func=load_image, inp=[path], Tout=tf.float32)
    img.set_shape([224, 224, 3])
    return img

def train_model(request):
    """
    Hàm này chạy quá trình train mô hình dự đoán.
    Sau khi train, lưu mô hình mới vào MODEL_PATH.
    """
    # if not request.user.is_superuser:
    #     dj_messages.error(request, "Bạn không phải Admin, không có quyền truy cập chức năng này!")
    #     return redirect('admin:CTDT_attest_changelist')
    
    # # Kiểm tra xem có tồn tại hình ảnh không:
    # valid_paths = get_valid_image_paths(data_dir)
    # if len(valid_paths) <= 0:
    #     dj_messages.error(f"Không tìm thấy hình ảnh nào trong thư mục train. Vui lòng kiểm tra lại dữ liệu!")
    #     return redirect('admin:CTDT_attest_changelist')
    
    
    
    # # train_ds = tf.keras.preprocessing.image_dataset_from_directory(
    # #         valid_paths,
    # #         validation_split=0.2,
    # #         subset="training",
    # #         seed=123,
    # #         image_size=(224, 224),
    # #         batch_size=32
    # #     )

    # # val_ds = tf.keras.preprocessing.image_dataset_from_directory(
    # #     valid_paths,
    # #     validation_split=0.2,
    # #     subset="validation",
    # #     seed=123,
    # #     image_size=(224, 224),
    # #     batch_size=32
    # # )
    
    # # --------------------------------------------------------------
    
    # # Lấy danh sách các file ảnh hợp lệ
    # valid_paths = get_valid_image_paths(data_dir)
    # print(f"Tìm thấy {len(valid_paths)} ảnh hợp lệ để train.")
    
    # # Tạo dataset từ danh sách file ảnh đã lọc
    # ds = tf.data.Dataset.from_tensor_slices(valid_paths)
    # # ds = ds.map(lambda x: load_image(x))
    # ds = ds.map(load_image_wrapper, num_parallel_calls=tf.data.AUTOTUNE)
    
    # # Lấy số lượng ảnh
    # dataset_size = len(valid_paths)
    # batch_size = 32
    # ds = ds.batch(batch_size)
    
    # ds = ds.prefetch(tf.data.AUTOTUNE)
    
    # total_batches = ds.cardinality().numpy()
    # train_batches = int(0.8 * total_batches)
    
    # # Chia dataset thành training và validation (ví dụ: dùng cách random hoặc chia theo tỉ lệ)
    # # Đây chỉ là ví dụ chia theo tỉ lệ nếu bạn muốn: 
    # # Vì dataset từ from_tensor_slices không hỗ trợ trực tiếp validation_split,
    # # bạn có thể chia dataset thủ công sau khi load tất cả dữ liệu.
    # # Ví dụ, chuyển dataset thành list, sau đó chia ra.
    # # images = list(ds.as_numpy_iterator())
    # # Giả sử bạn chia theo tỉ lệ 80-20:
    # # split_index = int(0.8 * len(images))
    # # train_ds = tf.data.Dataset.from_tensor_slices(images[:split_index])
    # # val_ds = tf.data.Dataset.from_tensor_slices(images[split_index:])
    
    # # train_ds = tf.data.Dataset.from_tensor_slices(train_batches)
    # # val_ds = tf.data.Dataset.from_tensor_slices(train_batches)
    # # Sử dụng take() và skip() để chia dataset
    # train_ds = ds.take(train_batches)
    # val_ds = ds.skip(train_batches)
    # # In ra một số thông tin kiểm tra:
    # print("Số batch training:", train_batches)
    # print("Số batch validation:", total_batches - train_batches)
    
    # # --------------------------------------------------------------
    
    # # class_names = train_ds.class_names  # Lấy danh sách tên thư mục (lớp)
    # print("Danh sách mã minh chứng:", class_names)
        
        
        
    # # Tạo model MobileNetV2 (pretrained)
    # base_model = MobileNetV2(input_shape=(224, 224, 3), include_top=False, weights='imagenet')

    # # Đóng băng trọng số của MobileNetV2
    # base_model.trainable = False

    # # Thêm các lớp để phân loại minh chứng
    # x = base_model.output
    # x = GlobalAveragePooling2D()(x)
    # x = Dense(128, activation='relu')(x)
    # # x = Dense(len(class_names), activation='softmax')  # Số lớp = số minh chứng
    # output_layer = Dense(len(class_names), activation='softmax')(x)  # Tầng đầu ra

    # # Tạo model hoàn chỉnh
    # model = Model(inputs=base_model.input, outputs=output_layer)

    # # Compile mô hình
    # model.compile(optimizer=Adam(learning_rate=0.001),
    #             loss='sparse_categorical_crossentropy',
    #             metrics=['accuracy'])

    # # Xem thông tin mô hình
    # print("✅ Model đã khởi tạo thành công!")
    # model.summary()

    # epochs = 10  # Số epoch huấn luyện
    # print(model)
    # print("train")
    # print(train_ds)
    # print("value")
    # print(val_ds)
    # history = model.fit(
    #     train_ds,
    #     validation_data=val_ds,
    #     epochs=epochs
    # )
    # print("history : " + history)
    # # print(train_ds.take(1))
        
    # # Lưu mô hình vào file
    # with open(MODEL_PATH, 'wb') as f:
    #     pickle.dump(model, f)
    # with open(CLASS_PATH, 'wb') as f:
    #     json.dump(class_names, f)
            
    
            
    # # return model
    # dj_messages.success(request, f"Train model thành công. Các lớp: {class_names}")
    
    try:
        train_ds = tf.keras.preprocessing.image_dataset_from_directory(
            data_dir,
            validation_split=0.2,
            subset="training",
            seed=123,
            image_size=(224, 224),
            batch_size=32
        )

        val_ds = tf.keras.preprocessing.image_dataset_from_directory(
            data_dir,
            validation_split=0.2,
            subset="validation",
            seed=123,
            image_size=(224, 224),
            batch_size=32
        )
        
        class_names = train_ds.class_names  # Lấy danh sách tên thư mục (lớp)
        print("Danh sách mã minh chứng:", class_names)

        # # Cấu hình dataset cho performance
        # AUTOTUNE = tf.data.AUTOTUNE
        # train_ds = train_ds.cache().shuffle(1000).prefetch(buffer_size=AUTOTUNE)
        # val_ds = val_ds.cache().prefetch(buffer_size=AUTOTUNE)

        # print("Train dataset:", train_ds)
        # print("Validation dataset:", val_ds)

        # # Lấy danh sách các lớp (class) từ thư mục, đảm bảo thứ tự nhất quán
        # class_names = [slug for slug in os.listdir(data_dir) if os.path.isdir(os.path.join(data_dir, slug))]
        # class_to_index = {name: idx for idx, name in enumerate(class_names)}
        # print("Các class:", class_names)
        
        # Tạo model MobileNetV2 (pretrained)
        base_model = MobileNetV2(input_shape=(224, 224, 3), include_top=False, weights='imagenet')
        base_model.trainable = False

        # Thêm các lớp phân loại
        x = base_model.output
        x = GlobalAveragePooling2D()(x)
        x = Dense(128, activation='relu')(x)
        output_layer = Dense(len(class_names), activation='softmax')(x)

        model = Model(inputs=base_model.input, outputs=output_layer)

        model.compile(optimizer=Adam(learning_rate=0.001),
                    loss='sparse_categorical_crossentropy',
                    metrics=['accuracy'])

        model.summary()

        epochs = 10

        print("Số lượng ảnh huấn luyện:", len(list(train_ds.as_numpy_iterator())))
        print("Số lượng ảnh validation:", len(list(val_ds.as_numpy_iterator())))

        history = model.fit(
            train_ds,
            validation_data=val_ds,
            epochs=epochs
        )
        print('history', history)
        print(train_ds.take(1))
        
        # Lưu mô hình
        model_save_path = os.path.join(MODEL_PATH, "image_classifier.h5")
        # Lưu mô hình
        model.save(model_save_path)
        # Lưu class
        with open(CLASS_PATH, 'w') as f:
            json.dump(class_names, f)
        dj_messages.success(request, f"✅ Train model thành công.")
    except ValueError as e:
        dj_messages.error(request, f"❌ Lỗi khi train model: {str(e)}")
    

    
    # # model.save("image_classifier.h5")
    # # Load lại mô hình
    # # model = tf.keras.models.load_model("image_classifier.h5")
    # model = tf.keras.models.load_model(model_save_path)
    
    # try:
    #     train_ds = tf.keras.preprocessing.image_dataset_from_directory(
    #         data_dir,
    #         validation_split=0.2,
    #         subset="training",
    #         seed=123,
    #         image_size=(224, 224),
    #         batch_size=32
    #     )

    #     val_ds = tf.keras.preprocessing.image_dataset_from_directory(
    #         data_dir,
    #         validation_split=0.2,
    #         subset="validation",
    #         seed=123,
    #         image_size=(224, 224),
    #         batch_size=32
    #     )
    #     class_names = train_ds.class_names  # Lấy danh sách tên thư mục (lớp)
    #     print("Danh sách mã minh chứng:", class_names)
        
        
        
    #     # Tạo model MobileNetV2 (pretrained)
    #     base_model = MobileNetV2(input_shape=(224, 224, 3), include_top=False, weights='imagenet')

    #     # Đóng băng trọng số của MobileNetV2
    #     base_model.trainable = False

    #     # Thêm các lớp để phân loại minh chứng
    #     x = base_model.output
    #     x = GlobalAveragePooling2D()(x)
    #     x = Dense(128, activation='relu')(x)
    #     # x = Dense(len(class_names), activation='softmax')  # Số lớp = số minh chứng
    #     output_layer = Dense(len(class_names), activation='softmax')(x)  # Tầng đầu ra

    #     # Tạo model hoàn chỉnh
    #     model = Model(inputs=base_model.input, outputs=output_layer)

    #     # Compile mô hình
    #     model.compile(optimizer=Adam(learning_rate=0.001),
    #                 loss='sparse_categorical_crossentropy',
    #                 metrics=['accuracy'])

    #     # Xem thông tin mô hình
    #     print("✅ Model đã khởi tạo thành công!")
    #     model.summary()

    #     epochs = 10  # Số epoch huấn luyện
    #     print(model)
    #     print("train")
    #     print(train_ds)
    #     print("value")
    #     print(val_ds)
    #     history = model.fit(
    #         train_ds,
    #         validation_data=val_ds,
    #         epochs=epochs
    #     )
    #     print("history : " + history)
    #     # print(train_ds.take(1))
        
    #     # Lưu mô hình vào file
    #     with open(MODEL_PATH, 'wb') as f:
    #         pickle.dump(model, f)
    #     with open(CLASS_PATH, 'wb') as f:
    #         json.dump(class_names, f)
            
    
            
    #     # return model
    #     dj_messages.success(request, f"Train model thành công. Các lớp: {class_names}")
    # except ValueError as e:
    #     dj_messages.error(request, f"Lỗi khi train model: {str(e)}")
    
    # # Ví dụ: giả lập quá trình train
    # # model = train_your_model(...)
    # model = "This is a dummy model ..............."  # Thay bằng mô hình thực tế của bạn

    # # Lưu mô hình vào file
    # with open(MODEL_PATH, 'wb') as f:
    #     pickle.dump(model, f)
    # return model



def predict_image(image_path, request, threshold = 0.7):
    
    model_save_path = os.path.join(MODEL_PATH, "image_classifier.h5")
    model_test = tf.keras.models.load_model(model_save_path)
    
    
    with open(CLASS_PATH, 'rb') as f:
        class_names = json.load(f)
    
    # with open(MODEL_PATH, 'rb') as f:
    #     model_test = pickle.load(f)
    
    # ================================
    
    # Nếu upload là InMemoryUploadedFile, bạn có thể đọc dữ liệu nhị phân của nó.
    # Đưa file pointer về đầu file nếu cần
    image_name = image_path.name
    image_path.seek(0)
    image_data = image_path.read()
    
    # Sử dụng BytesIO để tạo file-like object từ dữ liệu nhị phân
    image_file = BytesIO(image_data)
    img = tf.keras.preprocessing.image.load_img(image_file, target_size=(224, 224))
    
    
    # ================================
    
    
    # img = tf.keras.preprocessing.image.load_img(image_path, target_size=(224, 224))
    img_array = tf.keras.preprocessing.image.img_to_array(img)
    img_array = tf.expand_dims(img_array, 0)  # Thêm batch dimension

    predictions = model_test.predict(img_array)
    predicted_class = np.argmax(predictions[0])
    confidence = np.max(predictions[0])  # Xác suất lớn nhất
    
    if confidence >= threshold:
        class_names[predicted_class]
        print(f"❌ Hình ảnh này thuộc minh chứng: {class_names[predicted_class]} (Xác suất cao nhất: {confidence:.2f})")
        
        raise ValidationError(f"❌ Hình ảnh '{image_name}' thuộc minh chứng '{class_names[predicted_class]}' nên không được chỉnh sửa hoặc thêm mới.")
        
    else:
        print(f"✅ Hình ảnh này KHÔNG thuộc minh chứng nào! (Xác suất cao nhất: {confidence:.2f})")
        return dj_messages.success(request, f"✅ Hình ảnh này KHÔNG thuộc minh chứng nào! (Xác suất cao nhất: {confidence:.2f})")
        
        
        # return dj_messages.success(request,f"Hình ảnh này thuộc minh chứng: {class_names[predicted_class]}")
# # Kiểm tra một hình ảnh
# image_path = "./Documents/Traning/data/test2.jpg"
# predict_image(image_path)
# #Dựa vào xác suất "confidence" để phân biệt thuộc minh chứng nào


