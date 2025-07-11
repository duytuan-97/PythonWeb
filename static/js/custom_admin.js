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

document.addEventListener("DOMContentLoaded", function() {
    let errorNote = document.querySelector(".errornote");
    if (errorNote) {
        errorNote.innerText = "Vui lòng sửa các lỗi bên dưới.";
    }
});

document.addEventListener('DOMContentLoaded', function () {
    console.log("Field not found.............................................................................");
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



//khi thêm minh chứng dùng chung
document.addEventListener("DOMContentLoaded", function () {

    var isCommonElem = document.getElementById("id_is_common");
    if(isCommonElem) {
        console.log("isCommonElem.checked:", isCommonElem.checked);
        // Kiểm tra nếu giá trị là "true"
        if(isCommonElem.checked === true) {
            // Lấy tất cả các checkbox trong các ô có class "delete"
            document.querySelectorAll("td.delete input[type='checkbox']").forEach(function(checkbox) {
                // Ẩn checkbox thông qua style, hoặc thay đổi attribute hidden
                checkbox.style.display = "none";
                // checkbox.setAttribute("hidden", "hidden");
            });
            console.log("Ẩn checkbox vì id_is_common là checked.");

        }
    }

    const commonAttestField = document.querySelector("#id_common_attest");
    // commonAttestField.value = "";
    console.log(commonAttestField);

    const fieldsToToggle = [
        "#id_attest_id",
        "#id_attest_stt",
        "#id_title",
        "#id_body",
        "#id_performer",
        "#id_slug",
        "#id_box",
    ];
    const attest_idField = document.querySelector("#id_attest_id");
    // const photos_idField = document.querySelector("#id_photos");
    const attest_sttField = document.querySelector("#id_attest_stt");
    const performerField = document.querySelector("#id_performer");
    const slugField = document.querySelector("#id_slug");
    const NoteField = document.querySelector("#id_note");
    const boxField = document.querySelector("#id_box");

    const titleField = document.querySelector("#id_title");
    const bodyField = document.querySelector("#id_body");
    const is_commonField = document.querySelector("#id_is_common");
    const common_Field = document.querySelector(".field-is_common");
    attest_ctiretion = null;

    const currentURL = window.location.href;
    console.log(currentURL);

    if (currentURL.includes('/attest/add/')) {
        
        common_Field.style.display = "none";//ẩn trường
    }
    

    //slug change
    (function($) {
        $(document).ready(function() {
            function update_Slug() {
                console.log("Đã chạy vào cập nhật slug");
                setTimeout(function() { 
                    let id_attest = $("#id_attest_id").val();
                    let stt_attest = $("#id_attest_stt").val();
                    let id_common_attest = $("#id_common_attest_id").val();
                    let stt_common_attest = $("#id_common_attest_stt").val();
                    let title_box = $("#id_title").val();
                    if (id_attest && stt_attest) {
                        $("#id_slug").val(getSlug(id_attest) + "-" + getSlug(stt_attest));
                        console.log(getSlug(id_attest) + "-" + getSlug(stt_attest));
                    }else if(id_common_attest && stt_common_attest){
                        $("#id_slug").val(getSlug(id_common_attest) + "-" + getSlug(stt_common_attest));
                        console.log(getSlug(id_common_attest) + "-" + getSlug(stt_common_attest));
                    }else{
                        let Title = $("#id_title").val();
                        $("#id_slug").val(getSlug(Title));
                    }
                    if(currentURL.includes('/CTDT/box/')) $("#id_id").val(title_box)
                }, 10);
            }
            
            $("#id_attest_id, #id_attest_stt").on("keyup change", update_Slug);
            $("#id_common_attest_id, #id_common_attest_stt").on("keyup change", update_Slug);
            if (currentURL.includes('/CTDT/criterion/') || currentURL.includes('/CTDT/standard/')) {
                $("#id_title").on("keyup change", update_Slug);

                
            }else if(currentURL.includes('/CTDT/box/')){ 
                $("#id_title").on("keyup change", update_Slug);

                $("#id_id").attr("readonly", "readonly");
            }

            $("#id_slug").attr("readonly", "readonly");
        });
    })(django.jQuery);

    function toggleFields(disable) {

        fieldsToToggle.forEach((selector) => {
            const field = document.querySelector(selector);
            
            if (field) {
                // field.readOnly  = true; // Bật/tắt trường "#id_note","#id_criterion",
                if (disable && commonAttestField) {
                    
                    
                    field.readOnly  = false; // tắt trường "#id_note","#id_criterion",
                    // if (commonAttestField) {
                    commonAttestField.addEventListener("change", async function () {
                    const commonAttestId = commonAttestField.value;
                        if (commonAttestId) {

                            // Gửi yêu cầu lấy dữ liệu từ server
                            const response = await fetch(`/get_common_attest_data/${commonAttestId}/`);
                            const data = await response.json();
                            console.log("Data:..............................");
                            // console.log(data);
                            console.log(data);
                            // console.log(data.image);

                            if (response.ok) {
                                field.readOnly  = true; // Bật/tắt trường "#id_note","#id_criterion",
                                // Điền dữ liệu vào các trường
                                attest_idField.value = data.common_attest_id || "";
                                attest_sttField.value = data.common_attest_stt || "";
                                performerField.value = data.performer || "";
                                slugField.value = data.slug || "";
                                // imageField.value = data.image || "";
                                boxField.value = data.box || "";
                                titleField.value = data.title || "";
                                bodyField.value = data.body || "";
                                NoteField.value = "DC" || "";
                                is_commonField.value = true || false;

                                attest_ctiretion = data.criterion || "";

                                    

                            } else {
                                console.error("Error fetching data:", data.message);
                            }
                        } else {
                            // Xóa dữ liệu nếu không chọn
                            // titleField.value = "";
                            // bodyField.value = "";
                            NoteField.value = "";
                            field.value = ""; // Xóa giá trị nếu disable
                            is_commonField.value = false;
                            
                        }
                    });
                // }
                }else{
                    field.readOnly  = false; // Bật/tắt trường "#id_note","#id_criterion",
                }
            }
            // else{
            //     field.readOnly  = false;
            // }
        });
    }

    (function($) {
        $(document).ready(function() {
            const currentURL = window.location.href;
            const isAdd = currentURL.includes('/attest/add/');
            const isChange = currentURL.includes('/attest/') && currentURL.includes('/change/');
            const commonAttestField = $("#id_common_attest");
    
            // const attestIDField = $("#id_attest_id");
            

            // if (currentURL.includes("/attest/") && attestIDField.prop("readonly")) {
            //     // Tạm thời bỏ readonly để JS sửa được
            //     attestIDField.prop("readonly", false);
            //     attestIDField.attr("data-js-controlled", "true");
            //     attestIDField.css("background-color", "#f0f0f0"); // Cho người dùng biết ô này không sửa tay
            //     attestIDField.on("keydown", function(e) {
            //         // Ngăn người dùng gõ tay vào
            //         e.preventDefault();
            //     });
            // }

            function clearValidationErrors() {
                $(".errornote, .errorlist").remove();
                $(".errors").removeClass("errors");
                $("input, select, textarea").each(function () {
                    $(this).removeAttr("style").removeClass("error");
                });
            }
    
            function getLastNumberFromID(id) {
                if (id && id.startsWith("H") && id.split(".").length >= 3) {
                    let parts = id.split(".");
                    return parts[parts.length - 1];
                }
                return "";
            }
    
            function updateAttestID(keepLastNumber = false) {
                // const hasPhotos = photoThumbnails.length > 0;
                let id_box = $("#id_box").val();
                let id_criterion = $("#id_criterion").val();
                let current_id = $("#id_attest_id").val();
                let last = getLastNumberFromID(current_id);
    
                // if(hasPhotos){
                //     alert("Để thay đổi ID cần xóa hết hình ảnh!");
                // }else 
                if (id_box && id_criterion && !commonAttestField.val()) {
                    let new_id = "H" + id_box + "." + id_criterion;
                    if (keepLastNumber && last) {
                        new_id += "." + last;

                    } else {
                        new_id += ".";
                    }
                    $("#id_attest_id").val(new_id);
                }
            }
    
            function validateAttestID(event) {
                let attestIDField = $("#id_attest_id");
                let noteField = $("#id_note");
                let attestID = $("#id_attest_id").val();
                let note = $("#id_note").val();
    
                if (attestID.endsWith(".")) {
                    alert("Vui lòng nhập thêm số thứ tự vào cuối Attest ID !!!");
                    attestIDField.css("border", "2px solid red");
                    event.preventDefault();
                } else if (note.endsWith("DC")) {
                    alert("Vui lòng hiệu chỉnh lại ghi chú !!!");
                    noteField.css("border", "2px solid red");
                    event.preventDefault();
                }
            }
    
            // Áp dụng sự kiện theo trang
            if ((isAdd || isChange) && !commonAttestField.val()) {
                $("#id_box, #id_criterion").on("keyup change", function() {
                    updateAttestID(keepLastNumber = isChange);
                });
            }
            if(isChange){
                const attestIDField = document.getElementById("id_attest_id");
                if (attestIDField) {
                    attestIDField.setAttribute("readonly", true);
                    attestIDField.style.backgroundColor = "#eee";
                }
            }
    
            $("input[type='submit']").on("click", validateAttestID);
            $("#id_common_attest").on("keyup change", clearValidationErrors);
    
            // Xử lý logic khi chọn common_attest
            $("#id_common_attest").on("change", function() {
                var newValue = $(this).val();
                if (newValue) {
                    $("#id_box, #id_criterion").off("keyup change", updateAttestID);
    
                    $("#id_criterion").on("blur", function() {
                        var attestCriterion = $(this).val();
                        if (attestCriterion === attest_ctiretion) {
                            alert("Criterion của attest phải khác với Criterion của common_attest!");
                            $(this).css("border", "2px solid red");
                        } else {
                            $(this).css("border", "");
                        }
                    });
                } else {
                    // Nếu không dùng common_attest thì gắn lại sự kiện cập nhật ID
                    $("#id_box, #id_criterion").on("keyup change", function() {
                        updateAttestID(keepLastNumber = isChange);
                    });
                }
            });
        });
    })(django.jQuery);
    

    // if (currentURL.includes('/attest/add/') && !commonAttestField.value) {
    //     (function($) {
    //         $(document).ready(function() {
        
    //             function clearValidationErrors() {
    //                 // 🔹 Xóa toàn bộ thông báo lỗi của Django Admin
    //                 $(".errornote").remove();
    //                 $(".errorlist").remove();  // Xóa danh sách lỗi
    //                 $(".errors").removeClass("errors");  // Xóa class lỗi khỏi input
                
    //                 // 🔹 Xóa toàn bộ CSS lỗi của tất cả các input
    //                 $("input, select, textarea").each(function () {
    //                     $(this).removeAttr("style"); // Xóa toàn bộ style inline
    //                     $(this).removeClass("error"); // Xóa class lỗi nếu có
    //                 });
    //             }
                

    //             function updateAttestID() {
    //                 let id_box = $("#id_box").val();
    //                 let id_criterion = $("#id_criterion").val();
    //                 console.log("Tìm thấy phần tử id_box!", id_box);
    //                 console.log("Tìm thấy phần tử id_criterion!", id_criterion);
    //                 if (id_box && id_criterion) {
    //                     $("#id_attest_id").val("H" + id_box + "." + id_criterion + ".");
    //                     console.log("H" + id_box + "." + id_criterion );
    //                 }
    //             }
    
    //             function validateAttestID(event) {
    //                 let attestIDField = $("#id_attest_id");
    //                 let noteField = $("#id_note");
    //                 let attestID = $("#id_attest_id").val();
    //                 let note = $("#id_note").val();
    //                 if (attestID.endsWith(".")) {
    //                     alert("Vui lòng nhập thêm số thứ tự vào cuối Attest ID !!!");
    //                     attestIDField.css("border", "2px solid red");  // 🔹 Tô viền đỏ
    //                     event.preventDefault();  // Ngăn không cho lưu
    //                 }else if (note.endsWith("DC")) {
    //                     alert("Vui lòng hiệu chỉnh lại ghi chú !!!");
    //                     noteField.css("border", "2px solid red");  // 🔹 Tô viền đỏ
    //                     event.preventDefault();  // Ngăn không cho lưu
    //                 }
                    
    //             }
        
    //             // $("#id_box, #id_criterion").on("keyup change", updateAttestID);

    //             console.log("_______common_attest value:", $("#id_common_attest").val());
    //             if (!$("#id_common_attest").val()) {
    //                 $("#id_box, #id_criterion").on("keyup change", updateAttestID);
    //             }
    //             $("input[type='submit']").on("click", validateAttestID);
    //             $("#id_common_attest").on("keyup change", clearValidationErrors);

    //             $("#id_common_attest").on("change", function() {
    //                 var newValue = $(this).val();
    //                 console.log("common_attest thay đổi:", newValue);
    //                 if (newValue) {

    //                     // console.log("11111 Ẩn checkbox..............!");
    //                     // document.querySelectorAll("td.delete input[type='checkbox']").forEach(function(checkbox) {
    //                     //     // Ẩn checkbox thông qua style, hoặc thay đổi attribute hidden
    //                     //     console.log("Ẩn checkbox..............!");
    //                     //     checkbox.style.display = "none";
    //                     //     // checkbox.setAttribute("hidden", "hidden");
    //                     // });

                        

    //                     // Nếu có giá trị, gỡ bỏ sự kiện cho id_box, id_criterion
    //                     $("#id_box, #id_criterion").off("keyup change", updateAttestID);

    //                     $("#id_criterion").on("blur", function() {
    //                         // Nếu đã chọn common_attest
                            
    //                         var attestCriterion = $(this).val();
                            
    //                         // var commonCriterion = $("#id_common_criterion").val(); // giá trị này cần đảm bảo được render trên giao diện, hoặc bạn có thể truyền qua data attribute
    //                         if (attestCriterion === attest_ctiretion) {
    //                             alert("Criterion của attest phải khác với Criterion của common_attest!");
    //                             $(this).css("border", "2px solid red");
    //                             // Bạn có thể xóa hoặc focus lại vào input để yêu cầu nhập lại
    //                         } else {
    //                             $(this).css("border", "");
    //                         }
    //                     });

    //                 } else {
    //                     // Nếu rỗng, gắn lại sự kiện
    //                     $("#id_box, #id_criterion").on("keyup change", updateAttestID);
    //                 }
    //             });
    //         });
    //     })(django.jQuery);
    // }
    // Lắng nghe sự kiện thay đổi trên trường common_attest
    if (commonAttestField) {

        console.log("Tìm thấy phần tử select!");
        // Ẩn các checkbox Với attest kế thừa common_attest
        
        

        commonAttestField.addEventListener("change", function () {
            if (commonAttestField.value) {
                
                document.getElementById("id_photos").addEventListener("click", function(event) {
                    event.preventDefault(); // Ngăn chặn hộp thoại file mở lên
                });

                document.getElementById("id_box").addEventListener("mousedown", function(e) {
                    e.preventDefault();
                });
                
                toggleFields(true); // Vô hiệu hoá các trường
            } else {
                document.getElementById("id_box").addEventListener("mousedown", function(e) {
                });
                toggleFields(false);
            }
        });
        
    }

    toggleFields(true);

    if (currentURL.includes('/common_attest/')) {
        (function($) {
            $(document).ready(function() {
                function clearValidationErrors() {
                    $(".errornote, .errorlist").remove();
                    $(".errors").removeClass("errors");
                    $("input, select, textarea").each(function () {
                        $(this).removeAttr("style").removeClass("error");
                    });
                }
        
                function getLastNumberFromID(id) {
                    if (id && id.startsWith("H") && id.split(".").length >= 3) {
                        let parts = id.split(".");
                        return parts[parts.length - 1]; // Lấy phần số cuối
                    }
                    return "";  // fallback
                }
        
                function updateCommonAttestID(keepLastNumber = false) {
                    let id_box = $("#id_box").val();
                    let id_criterion = $("#id_criterion").val();
                    let current_id = $("#id_common_attest_id").val();
                    let last = getLastNumberFromID(current_id);
        
                    if (id_box && id_criterion) {
                        let new_id = "H" + id_box + "." + id_criterion;
                        if (keepLastNumber && last) {
                            new_id += "." + last;
                        } else {
                            new_id += ".";  // Dành cho trang add
                        }
                        $("#id_common_attest_id").val(new_id);
                    }
                }
        
                function validateCommonAttestID(event) {
                    let common_attestID = $("#id_common_attest_id").val();
                    if (common_attestID.endsWith(".")) {
                        alert("Vui lòng nhập thêm số thứ tự vào cuối Attest ID !!!");
                        event.preventDefault();
                    }
                }

                function makeSelectReadOnly(selectElementId) {
                    const selectEl = document.getElementById(selectElementId);
                    if (!selectEl) return;
                
                    const hiddenInput = document.createElement("input");
                    hiddenInput.type = "hidden";
                    hiddenInput.name = selectEl.name;
                    hiddenInput.value = selectEl.value;
                
                    selectEl.parentNode.appendChild(hiddenInput);
                    selectEl.disabled = true;
                    selectEl.style.backgroundColor = "#eee";
                }
        
                // Phân biệt add và change
                let currentURL = window.location.href;
                let isAdd = currentURL.includes('/common_attest/add/');
                let isChange = currentURL.includes('/common_attest/') && currentURL.includes('/change/');
        
                if (isAdd || isChange) {
                    $("#id_box, #id_criterion").on("keyup change", function() {
                        updateCommonAttestID(keepLastNumber = isChange);
                    });
        
                    $("input[type='submit']").on("click", validateCommonAttestID);
                    $("#id_box, #id_criterion").on("keyup change", clearValidationErrors);
                }
                if(isChange){
                    makeSelectReadOnly("id_common_attest_id");
                    makeSelectReadOnly("id_box");
                    makeSelectReadOnly("id_criterion");
                }
            });
        })(django.jQuery);
        
    }

    // if (currentURL.includes('/common_attest/add/')) {
    //     (function($) {
    //         $(document).ready(function() {

    //             // alert("Vui lòng nhập thêm số thứ tự vào cuối Attest ID !!!");
    //             function clearValidationErrors() {
    //                 // 🔹 Xóa toàn bộ thông báo lỗi của Django Admin
    //                 $(".errornote").remove();
    //                 $(".errorlist").remove();  // Xóa danh sách lỗi
    //                 $(".errors").removeClass("errors");  // Xóa class lỗi khỏi input
                
    //                 // 🔹 Xóa toàn bộ CSS lỗi của tất cả các input
    //                 $("input, select, textarea").each(function () {
    //                     $(this).removeAttr("style"); // Xóa toàn bộ style inline
    //                     $(this).removeClass("error"); // Xóa class lỗi nếu có
    //                 });
    //             }
                

    //             function updateCommonAttestID() {
    //                 let id_box = $("#id_box").val();
    //                 let id_criterion = $("#id_criterion").val();
    //                 // console.log("Tìm thấy phần tử id_box!", id_box);
    //                 // console.log("Tìm thấy phần tử id_criterion!", id_criterion);
    //                 if (id_box && id_criterion) {
    //                     $("#id_common_attest_id").val("H" + id_box + "." + id_criterion + ".");
    //                     console.log("H" + id_box + "." + id_criterion );
    //                 }
    //             }
    
    //             function validateCommonAttestID(event) {
    //                 let common_attestID = $("#id_common_attest_id").val();
    //                 if (common_attestID.endsWith(".")) {
    //                     alert("Vui lòng nhập thêm số thứ tự vào cuối Attest ID !!!");
    //                     event.preventDefault();  // Ngăn không cho lưu
    //                 }
    //             }
        
    //             $("#id_box, #id_criterion").on("keyup change", updateCommonAttestID);
    //             $("input[type='submit']").on("click", validateCommonAttestID);
    //             $("#id_box").on("keyup change", clearValidationErrors);
    //             $("#id_criterion").on("keyup change", clearValidationErrors);
    //         });
    //     })(django.jQuery);
    // }
    // else if(currentURL.includes('/common_attest/') && currentURL.includes('/change/'))
    // {
    //     (function($) {
    //         $(document).ready(function() {

    //             // alert("Vui lòng nhập thêm số thứ tự vào cuối Attest ID !!!");
    //             function clearValidationErrors() {
    //                 // 🔹 Xóa toàn bộ thông báo lỗi của Django Admin
    //                 $(".errornote").remove();
    //                 $(".errorlist").remove();  // Xóa danh sách lỗi
    //                 $(".errors").removeClass("errors");  // Xóa class lỗi khỏi input
                
    //                 // 🔹 Xóa toàn bộ CSS lỗi của tất cả các input
    //                 $("input, select, textarea").each(function () {
    //                     $(this).removeAttr("style"); // Xóa toàn bộ style inline
    //                     $(this).removeClass("error"); // Xóa class lỗi nếu có
    //                 });
    //             }
                

    //             function updateCommonAttestID() {
    //                 let id_box = $("#id_box").val();
    //                 let id_criterion = $("#id_criterion").val();
    //                 // console.log("Tìm thấy phần tử id_box!", id_box);
    //                 // console.log("Tìm thấy phần tử id_criterion!", id_criterion);
    //                 if (id_box && id_criterion) {
    //                     $("#id_common_attest_id").val("H" + id_box + "." + id_criterion + ".");
    //                     console.log("H" + id_box + "." + id_criterion );
    //                 }
    //             }
    
    //             function validateCommonAttestID(event) {
    //                 let common_attestID = $("#id_common_attest_id").val();
    //                 if (common_attestID.endsWith(".")) {
    //                     alert("Vui lòng nhập thêm số thứ tự vào cuối Attest ID !!!");
    //                     event.preventDefault();  // Ngăn không cho lưu
    //                 }
    //             }
        
    //             $("#id_box, #id_criterion").on("keyup change", updateCommonAttestID);
    //             $("input[type='submit']").on("click", validateCommonAttestID);
    //             $("#id_box").on("keyup change", clearValidationErrors);
    //             $("#id_criterion").on("keyup change", clearValidationErrors);
    //         });
    //     })(django.jQuery);

    // }


    
    
});


