document.addEventListener("DOMContentLoaded", function () {
    console.log("⏳ Đang khởi tạo bảng object permission cho user...");

    const tableWrappers = document.querySelectorAll('.user-object-perm-table table');

    if (!tableWrappers.length) {
        console.warn("❗ Không tìm thấy bảng inline object permission nào.");
        return;
    }

    tableWrappers.forEach(function (table) {
        // Debug cấu trúc bảng
        console.log("Cấu trúc bảng:", table.outerHTML);
        const headers = table.querySelectorAll('thead tr th');
        console.log("Số cột trong thead:", headers.length);
        const rows = table.querySelectorAll('tbody tr');
        rows.forEach((row, index) => {
            const cells = row.querySelectorAll('td');
            console.log(`Hàng ${index + 1}: ${cells.length} ô`);
        });

        // Xóa dòng add-row
        const addRow = table.querySelector('tr.add-row');
        if (addRow) {
            addRow.remove();
        }

        // Kiểm tra số hàng hợp lệ
        const tbodyRows = table.querySelectorAll('tbody tr:not(.add-row)');
        if (tbodyRows.length === 0) {
            console.warn("Bảng không có dữ liệu, không khởi tạo DataTables.");
            return;
        }

        // Sửa số ô nếu cần
        table.querySelectorAll('tbody tr').forEach(function (row) {
            const cells = row.querySelectorAll('td');
            if (cells.length !== headers.length) {
                console.warn("Hàng không hợp lệ, sẽ xóa:", row);
                row.remove();
            }
        });

        // Đổi tên tiêu đề cột
        if (headers.length === 4) {
            headers[0].textContent = "";
            headers[1].textContent = "Loại nội dung";
            headers[2].textContent = "ID đối tượng";
            headers[3].textContent = "Quyền";
        } else {
            console.warn("⚠️ Số lượng cột không đúng. Không thể đổi tên.");
        }

        // Kiểm tra jQuery và DataTables
        if (typeof jQuery === 'undefined') {
            console.error("❌ jQuery chưa được load.");
        } else if (typeof $.fn.dataTable === 'undefined') {
            console.error("❌ DataTables chưa được attach vào jQuery.");
        } else {
            console.log("✅ DataTables cho user đã sẵn sàng.");
            $(table).DataTable({
                pageLength: 5,
                lengthChange: false,
                searching: true,
                paging: true,
                ordering: false,
                info: true,
                language: {
                    search: "Tìm kiếm:",
                    paginate: {
                        first: "Đầu",
                        last: "Cuối",
                        next: "›",
                        previous: "‹"
                    },
                    info: "Hiển thị _START_ đến _END_ của _TOTAL_ mục",
                    emptyTable: "Không có dữ liệu"
                },
                initComplete: function () {
                    this.api().rows('.add-row').remove().draw();
                }
            });
        }
    });
});