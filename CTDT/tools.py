import os
import pandas as pd

from docx import Document

def read_word_table(file_path):
   

    doc = Document(file_path)
    tables = doc.tables
    table = tables[0]
    data = []
    for row in table.rows[1:]:
        cells = row.cells
        # num_cols = len(cells)

        # Giả sử các cột trong bảng tương ứng với các key trong bộ dữ liệu của bạn
        # Bạn có thể điều chỉnh danh sách keys cho phù hợp
        keys = ['Tiêu chí', 'STT', 'Mã minh chứng', 'Tên minh chứng','Số, ngày ban hành, hoặc thời điểm khảo sát, điều tra, phỏng vấn, quan sát,…','Nơi ban hành hoặc nhóm, cá nhân thực hiện','Ghi chú']

        row_data = {}
        for i, cell in enumerate(cells):
            if i < len(keys):
                row_data[keys[i]] = cell.text.strip()
            else:
                # Xử lý trường hợp số cột trong bảng lớn hơn số lượng keys
                # Ví dụ: thêm một key mặc định hoặc bỏ qua cột
                row_data['extra_column'] = cell.text.strip()

        data.append(row_data)

    return data

# # Ví dụ sử dụng hàm
# file_path = './Documents/Traning/123.docx'  # Thay thế bằng đường dẫn đến file Word của bạn
# data_read_word = read_word_table(file_path)

# print(data_read_word)

def process_file(file_path):
    # Dữ liệu đầu vào
    data = read_word_table(file_path)

    df = pd.DataFrame(data)

    # Loại bỏ ký tự "\xa0" khỏi tất cả các cột
    df = df.applymap(lambda x: x.replace('\xa0', '') if isinstance(x, str) else x)

    # Bước 1: Phát hiện và xác định các thư mục lớn nhất (các tiêu chuẩn)
    def is_standard_folder(row):
        return row['Tiêu chí'].startswith('Tiêu chuẩn')

    standard_folders = df[df.apply(is_standard_folder, axis=1)]
    df = df[~df.apply(is_standard_folder, axis=1)]

    # Bước 2: Tạo cấu trúc thư mục phân cấp
    structured_data = {}

    for _, row in standard_folders.iterrows():
        standard_name = row['Tiêu chí'].strip()
        structured_data[standard_name] = {}

    for _, row in df.iterrows():
        criteria = row['Tiêu chí'].strip()
        evidence_code = row['Mã minh chứng'].strip()

        # Kiểm tra tiêu chí khớp với tiêu chuẩn nào
        for standard_name in structured_data.keys():
            standard_number = standard_name.split()[2]
            criteria_number = criteria.split()[2]

            if criteria_number.startswith(standard_number):
                if criteria not in structured_data[standard_name]:
                    structured_data[standard_name][criteria] = {}

                if evidence_code not in structured_data[standard_name][criteria]:
                    structured_data[standard_name][criteria][evidence_code] = []

                structured_data[standard_name][criteria][evidence_code].append({
                    'Tên minh chứng': row['Tên minh chứng'].strip(),
                    'Số, ngày ban hành': row['Số, ngày ban hành, hoặc thời điểm khảo sát, điều tra, phỏng vấn, quan sát,…'].strip(),
                    'Nơi ban hành': row['Nơi ban hành hoặc nhóm, cá nhân thực hiện'].strip(),
                    'Ghi chú': row['Ghi chú'].strip()
                })
                break  # Ngăn chặn việc kiểm tra thêm các tiêu chuẩn khác

    # Bước 3: Xuất dữ liệu ra cấu trúc thư mục
    output_path = 'media'

    if not os.path.exists(output_path):
        os.makedirs(output_path)

    for standard, criteria_data in structured_data.items():
        standard_path = os.path.join(output_path, standard)
        os.makedirs(standard_path, exist_ok=True)
        
        for criteria, evidence_data in criteria_data.items():
            criteria_path = os.path.join(standard_path, criteria)
            os.makedirs(criteria_path, exist_ok=True)
            
            for evidence_code, evidences in evidence_data.items():
                evidence_file_path = os.path.join(criteria_path, f'{evidence_code}.txt')
                with open(evidence_file_path, 'w', encoding='utf-8') as f:
                    for evidence in evidences:
                        f.write(f"Tên minh chứng: {evidence['Tên minh chứng']}\n")
                        f.write(f"Số, ngày ban hành: {evidence['Số, ngày ban hành']}\n")
                        f.write(f"Nơi ban hành: {evidence['Nơi ban hành']}\n")
                        f.write(f"Ghi chú: {evidence['Ghi chú']}\n\n")