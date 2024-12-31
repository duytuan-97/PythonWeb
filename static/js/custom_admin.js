// document.addEventListener('DOMContentLoaded', function () {
//     const rows = document.querySelectorAll('tbody tr'); // Lấy tất cả các hàng trong bảng
//     const colorMap = {}; // Lưu thông tin về mã minh chứng và màu tương ứng
//     let currentColorIndex = 0;
//     const colors = ['#f0f8ff', '#fffacd']; // Danh sách màu

//     rows.forEach((row) => {
//         const attestCell = row.querySelector('.field-attest_id_name'); // Lấy cột "Mã minh chứng"
//         if (attestCell) {
//             const attestId = attestCell.textContent.trim(); // Lấy giá trị "Mã minh chứng"
//             if (attestId) {
//                 // Nếu mã minh chứng chưa có màu, gán màu mới
//                 if (!colorMap[attestId]) {
//                     colorMap[attestId] = colors[currentColorIndex];
//                     currentColorIndex = (currentColorIndex + 1) % colors.length; // Chuyển sang màu tiếp theo
//                 }
//                 // Áp dụng màu cho tất cả các hàng có cùng mã minh chứng
//                 row.style.backgroundColor = colorMap[attestId];
//             }
//         }
//     });
// });

document.addEventListener('DOMContentLoaded', function () {
    const rows = document.querySelectorAll('tbody tr'); // Lấy tất cả các hàng trong bảng
    const colorMap = {}; // Lưu thông tin về mã minh chứng và màu tương ứng
    let currentColorIndex = 0;
    const colors = ['#f0f8ff', '#fffacd']; // Danh sách màu
    let lastColor = null; // Lưu màu của hàng cuối cùng có giá trị "attest_id_name"

    rows.forEach((row, index) => {
        const attestCell = row.querySelector('.field-attest_id_name'); // Lấy cột "Mã minh chứng"
        const criterionCell = row.querySelector('.field-standard_name'); // Lấy cột "Mã tiêu chuẩn"
        if (attestCell) {
            const attestId = attestCell.textContent.trim(); // Lấy giá trị "Mã minh chứng"

            if (attestId) {
                // Nếu mã minh chứng chưa có màu, gán màu mới
                if (!colorMap[attestId]) {
                    colorMap[attestId] = colors[currentColorIndex];
                    currentColorIndex = (currentColorIndex + 1) % colors.length; // Chuyển sang màu tiếp theo
                }
                // Áp dụng màu cho hàng hiện tại
                row.style.backgroundColor = colorMap[attestId];
                lastColor = colorMap[attestId]; // Cập nhật màu cuối cùng
            } else if (lastColor) {
                // Nếu "attest_id_name" trống, áp dụng màu của hàng trước đó
                row.style.backgroundColor = lastColor;
            }
        }

        if (criterionCell) {
            const criterionId = criterionCell.textContent.trim(); // Lấy giá trị "Mã minh chứng"

            if (criterionId) {
                // Nếu mã minh chứng chưa có màu, gán màu mới
                if (!colorMap[criterionId]) {
                    colorMap[criterionId] = colors[currentColorIndex];
                    currentColorIndex = (currentColorIndex + 1) % colors.length; // Chuyển sang màu tiếp theo
                }
                // Áp dụng màu cho hàng hiện tại
                row.style.backgroundColor = colorMap[criterionId];
                lastColor = colorMap[criterionId]; // Cập nhật màu cuối cùng
            } else if (lastColor) {
                // Nếu "attest_id_name" trống, áp dụng màu của hàng trước đó
                row.style.backgroundColor = lastColor;
            }
        }
    });
});

document.addEventListener("DOMContentLoaded", function () {
    // Tìm phần tử <li> chứa nút "Thêm vào Minh chứng"
    const addLinkLi = document.querySelector("ul.object-tools li a.addlink[href='/admin/CTDT/attest/add/']");
    
    if (addLinkLi) {
        const newLi = document.createElement("li");// Tạo một thẻ <li> mới
        const newLink = document.createElement("a");// Tạo một thẻ <a> mới cho nút
        newLink.href = "../import_word"; // Đường dẫn đến chức năng Import
        newLink.className = "addlink"; // Giữ nguyên style class của nút cũ
        newLink.textContent = "Import Minh chứng"; // Nội dung nút

        newLi.appendChild(newLink);// Thêm thẻ <a> vào <li>

        addLinkLi.parentElement.insertAdjacentElement("afterend", newLi);// Chèn <li> mới sau <li> cũ
    }
});

// document.addEventListener("DOMContentLoaded", function () {
//     // Lấy tất cả các hàng trong bảng
//     const rows = document.querySelectorAll("table tbody tr");

//     // Duyệt qua từng hàng
//     rows.forEach((row, index) => {
//         const currentCell = row.querySelector("td.attest_id_name"); // Thay 'attest_id_name' bằng class hoặc selector phù hợp với cột trong Django Admin
        
//         if (currentCell) {
//             const currentValue = currentCell.textContent.trim();

//             // Nếu giá trị là rỗng, lấy màu từ hàng trên nó
//             if (currentValue === "" && index > 0) {
//                 const previousRow = rows[index - 1];
//                 const previousCell = previousRow.querySelector("td.attest_id_name");
//                 if (previousCell) {
//                     // Lấy màu từ hàng trên
//                     const previousColor = window.getComputedStyle(previousCell).backgroundColor;
//                     currentCell.style.backgroundColor = previousColor;
//                 }
//             }
//         }
//     });
// });
