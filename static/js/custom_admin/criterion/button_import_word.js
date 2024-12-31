document.addEventListener("DOMContentLoaded", function () {
    // Tìm phần tử <li> chứa nút "Thêm vào Minh chứng"
    const addLinkLi = document.querySelector("ul.object-tools li a.addlink[href='/admin/CTDT/attest/add/']");
    
    if (addLinkLi) {
        // Tạo một thẻ <li> mới
        const newLi = document.createElement("li");

        // Tạo một thẻ <a> mới cho nút
        const newLink = document.createElement("a");
        newLink.href = "/Templates/admin/import_word.html"; // Đường dẫn đến chức năng Import
        newLink.className = "addlink"; // Giữ nguyên style class của nút cũ
        newLink.textContent = "Import Minh chứng"; // Nội dung nút

        // Thêm thẻ <a> vào <li>
        newLi.appendChild(newLink);

        // Chèn <li> mới sau <li> cũ
        addLinkLi.parentElement.insertAdjacentElement("afterend", newLi);
    }
});
