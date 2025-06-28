document.addEventListener("DOMContentLoaded", function () {

    // Ẩn nút "Object permissions" cho các user không phải super admin
    const objectPermissionsLink = document.querySelector("ul.object-tools li a.permissionslink");

    if (objectPermissionsLink) {
        async function checkUser() {
            const response = await fetch('/admin1/check_user', {
                method: 'GET',
                credentials: 'same-origin'
            });

            console.log("response:", {response})
            
            const data = await response.json();
            console.log("data:", data)
            console.log("is_superuser:", data.is_superuser)
            if (!data.is_superuser) {
                objectPermissionsLink.parentElement.style.display = 'none'; // Ẩn nút
                console.log("Đã ẩn nút Object permissions vì không phải super admin.");
            } else {
                console.log("Super admin, giữ nguyên nút Object permissions.");
            }
        }
        checkUser();  // Gọi hàm
        
    }
    
});

