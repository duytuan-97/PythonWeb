from django.contrib.auth import get_user_model
from django.core.mail import send_mail
from django.conf import settings

from django.urls import reverse
from .models import attest

class EmailNotification:
    
    @staticmethod
    def send_standard_email(request, objects, action_type, admin_url):
        User = get_user_model()
        
        if not objects:
            return
        subject = f"{action_type}: "
        message = f"Người dùng {request.user.email} đã thực hiện hành động '{action_type}'.\n\n"
        for obj in objects:
            subject += f"{obj.title}; "
            message += f"Tiêu chuẩn: {obj.title}\n"
            message += f"Ngày cập nhật: {obj.updated_on}\n\n"
            if action_type != "Xóa tiêu chuẩn" :
                message += "\nKiểm tra chi tiết trong hệ thống Admin.\n"
                message += admin_url
            
                html_message = f"""
                <html>
                    <body style="font-family: Arial, sans-serif; color: #333;">
                        <h2 style="color: #0066cc;">{action_type}</h2>
                        <p><b>Người dùng:</b> {request.user.email} đã thực hiện hành động <b>'{action_type}'</b>: <b>{obj.title}</b>.</p>
                        <p><b>Tiêu chuẩn:</b> {obj.title}</p>
                        <p><b>Ngày cập nhật:</b> {obj.updated_on}</p>
                        <br>
                        <a href="{admin_url}" style="display: inline-block; padding: 10px 15px; color: white; background-color: #28a745; text-decoration: none; border-radius: 5px;">
                            🔗 Xem chi tiết
                        </a>
                        <p style="margin-top: 20px; font-size: 12px; color: #777;">Email này được gửi tự động từ hệ thống Django Admin.</p>
                    </body>
                </html>
                """
            else: 
                html_message = None
        
        admin_emails = list(User.objects.filter(is_superuser=True).values_list('email', flat=True))

        recipients = [request.user.email] + admin_emails
        
        send_mail(
            subject,
            message,
            settings.DEFAULT_FROM_EMAIL,
            recipients,
            fail_silently=False,
            html_message=html_message,
        )
    
    def send_criterion_email(request, objects, action_type, admin_url):
        """ Gửi email khi có hành động trên Admin Django """
        User = get_user_model()
        
        if not objects:
            return
        subject = f"{action_type}: "
        message = f"Người dùng {request.user.email} đã thực hiện hành động '{action_type}'.\n\n"
        for obj in objects:
            subject += f"{obj.id}; "
            message += f"ID: {obj.id}\n"
            message += f"Tiêu chí: {obj.title}\n"
            message += f"Tiêu chuẩn: {obj.standard}\n"
            message += f"Ngày cập nhật: {obj.updated_on}\n\n"
            if action_type != "Xóa tiêu chí" :
                message += "\nKiểm tra chi tiết trong hệ thống Admin.\n"
                message += admin_url
            
                html_message = f"""
                <html>
                    <body style="font-family: Arial, sans-serif; color: #333;">
                        <h2 style="color: #0066cc;">{action_type}</h2>
                        <p><b>Người dùng:</b> {request.user.email} đã thực hiện hành động <b>'{action_type}'</b>: <b>{obj.title}</b>.</p>
                        <p><b>ID:</b> {obj.id}</p>
                        <p><b>Tiêu chí:</b> {obj.title}</p>
                        <p><b>Tiêu chuẩn:</b> {obj.standard}</p>
                        <p><b>Ngày cập nhật:</b> {obj.updated_on}</p>
                        <br>
                        <a href="{admin_url}" style="display: inline-block; padding: 10px 15px; color: white; background-color: #28a745; text-decoration: none; border-radius: 5px;">
                            🔗 Xem chi tiết
                        </a>
                        <p style="margin-top: 20px; font-size: 12px; color: #777;">Email này được gửi tự động từ hệ thống Django Admin.</p>
                    </body>
                </html>
                """
            else: 
                html_message = None
        
        admin_emails = list(User.objects.filter(is_superuser=True).values_list('email', flat=True))

        recipients = [request.user.email] + admin_emails
        
        send_mail(
            subject,
            message,
            settings.DEFAULT_FROM_EMAIL,
            recipients,
            fail_silently=False,
            html_message=html_message,
        )
    
    # def send_box_email(request, objects, action_type, admin_url):
    def send_box_email(request, objects, action_type, admin_url):
        """ Gửi email khi có hành động trên Admin Django """
        # Lấy URL admin của đối tượng vừa chỉnh sửa
        User = get_user_model()
        
        if not objects:
            return  # Không có giá trị xóa
        subject = f"{action_type}: "
        message = f"Người dùng {request.user.email} đã thực hiện hành động '{action_type}'.\n\n"
        for obj in objects:
            subject += f"{obj.id}; "
            message += f"ID: {obj.id}\n"
            message += f"Hộp: {obj.title}\n"
            message += f"Vị Trí: {obj.location}\n"
            message += f"Ngày cập nhật: {obj.updated_on}\n\n"
            if action_type != "Xóa hộp" :
                message += "\nKiểm tra chi tiết trong hệ thống Admin.\n"
                message += admin_url
            
                html_message = f"""
                <html>
                    <body style="font-family: Arial, sans-serif; color: #333;">
                        <h2 style="color: #0066cc;">{action_type}</h2>
                        <p><b>Người dùng:</b> {request.user.email} đã thực hiện hành động <b>'{action_type}'</b>: <b>{obj.title}</b>.</p>
                        <p><b>ID:</b> {obj.id}</p>
                        <p><b>Hộp:</b> {obj.title}</p>
                        <p><b>Vị trí:</b> {obj.location}</p>
                        <p><b>Ngày cập nhật:</b> {obj.updated_on}</p>
                        <br>
                        <a href="{admin_url}" style="display: inline-block; padding: 10px 15px; color: white; background-color: #28a745; text-decoration: none; border-radius: 5px;">
                            🔗 Xem chi tiết
                        </a>
                        <p style="margin-top: 20px; font-size: 12px; color: #777;">Email này được gửi tự động từ hệ thống Django Admin.</p>
                    </body>
                </html>
                """
            else: 
                html_message = None
        
        # Lấy danh sách email của admin (superuser)
        admin_emails = list(User.objects.filter(is_superuser=True).values_list('email', flat=True))

        # Danh sách email nhận
        recipients = [request.user.email] + admin_emails

        # Gửi email
        
        send_mail(
            subject,
            message,
            settings.DEFAULT_FROM_EMAIL,  # Lấy email gửi đi từ settings.py
            recipients,
            fail_silently=False,
            html_message=html_message,
        )
    
    def send_attest_email(request, objects, action_type):
        """ Gửi email khi có hành động trên Admin Django """
        # Lấy URL admin của đối tượng vừa chỉnh sửa
        User = get_user_model()
        
        if not objects:
            return  # Không có giá trị xóa
        subject = f"{action_type}: "
        message = f"Người dùng {request.user.email} đã thực hiện hành động '{action_type}'.\n\n"
        if action_type != "Xóa minh chứng" :
            html_message = f"""
            <html>
                <body style="font-family: Arial, sans-serif; color: #333;">
                    <h2 style="color: #0066cc;">{action_type} Minh chứng</h2>
                    <p><b>Người dùng:</b> {request.user.email} đã thực hiện hành động <b>'{action_type}'</b> trên các minh chứng sau:</p>
                    <ul>
            """
        for obj in objects:
            # attest_obj = attest.objects.get(attest_id=obj.attest_id,attest_stt=obj.attest_stt)
            attest_obj = attest.objects.filter(attest_id=obj.attest_id, attest_stt=obj.attest_stt).first()
            admin_url = request.build_absolute_uri(reverse('admin:CTDT_attest_change', args=[attest_obj.id]))
            subject += f"{obj.attest_id}; "
            message += f"ID: {obj.attest_id}\n"
            message += f"STT: {obj.attest_stt}\n"
            message += f"Tên: {obj.title}\n"
            message += f"Nội dung: {obj.body}\n"
            message += f"Nơi ban hành: {obj.performer}\n"
            message += f"Ghi chú: {obj.note}\n"
            # message += f"Hình : {obj.image}\n"
            # Lặp qua các photo liên quan từ PhotoAttest (nếu có)
            photo_urls = []
            for photo in obj.photos.all():
                # Kiểm tra xem file ảnh có URL không (chỉ khi ảnh được upload thành công)
                if photo.photo:
                    photo_urls.append(photo.photo.url)
            if photo_urls:
                message += "Hình:\n" + "\n".join(photo_urls) + "\n"
            
            message += f"Tiêu chí: {obj.criterion}\n"
            message += f"Hộp: {obj.box}\n"
            message += f"Ngày cập nhật: {obj.updated_on}\n\n"
            # if action_type != "Xóa minh chứng dùng chung" :
            #     message += "\nKiểm tra chi tiết trong hệ thống Admin.\n"
            #     message += admin_url
            
            #     html_message = f"""
            #     <html>
            #         <body style="font-family: Arial, sans-serif; color: #333;">
            #             <h2 style="color: #0066cc;">{action_type}</h2>
            #             <p><b>Người dùng:</b> {request.user.email} đã thực hiện hành động <b>'{action_type}'</b>: <b>{obj.title}</b>.</p>
            #             <p><b>ID:</b> {obj.attest_id}</p>
            #             <p><b>STT:</b> {obj.attest_stt}</p>
            #             <p><b>Tên:</b> {obj.title}</p>
            #             <p><b>Nội dung:</b> {obj.body}</p>
            #             <p><b>Nơi ban hành:</b> {obj.performer}</p>
            #             <p><b>Ghi chú:</b> {obj.note}</p>
            #             <p><b>Hình:</b> {obj.image}</p>
            #             <p><b>Tiêu chí:</b> {obj.criterion}</p>
            #             <p><b>Hộp:</b> {obj.box}</p>
            #             <p><b>Ngày cập nhật:</b> {obj.updated_on}</p>
            #             <br>
            #             <a href="{admin_url}" style="display: inline-block; padding: 10px 15px; color: white; background-color: #28a745; text-decoration: none; border-radius: 5px;">
            #                 🔗 Xem chi tiết
            #             </a>
            #             <p style="margin-top: 20px; font-size: 12px; color: #777;">Email này được gửi tự động từ hệ thống Django Admin.</p>
            #         </body>
            #     </html>
            #     """
            # else: 
            #     html_message = None

            if action_type != "Xóa minh chứng" :
                message += "\nKiểm tra chi tiết trong hệ thống Admin.\n"
                message += admin_url
            
                # Tạo HTML message và hiển thị ảnh dưới dạng liên kết hoặc nhúng (nếu mail client hỗ trợ)
                photos_html = ""
                if photo_urls:
                    # Ví dụ: hiển thị dưới dạng danh sách liên kết ảnh
                    photos_html = "<ul>"
                    for url in photo_urls:
                        url = request.build_absolute_uri(url)
                        photos_html += f'<li><img src="{url}" alt="Photo" style="max-width:300px;"></li>'
                    photos_html += "</ul>"
            
                html_message += f"""
                    <li>
                        <p><b>ID:</b> {obj.attest_id}</p>
                        <p><b>STT:</b> {obj.attest_stt}</p>
                        <p><b>Tên:</b> {obj.title}</p>
                        <p><b>Nội dung:</b> {obj.body}</p>
                        <p><b>Nơi ban hành:</b> {obj.performer}</p>
                        <p><b>Ghi chú:</b> {obj.note}</p>
                        <p><b>Tiêu chí:</b> {obj.criterion}</p>
                        <p><b>Hộp:</b> {obj.box}</p>
                        <p><b>Ngày cập nhật:</b> {obj.updated_on}</p>
                        <p><b>Hình ảnh:</b></p>
                        {photos_html}
                        <br>
                        <a href="{admin_url}" style="display: inline-block; padding: 10px 15px; color: white; background-color: #28a745; text-decoration: none; border-radius: 5px;">
                            🔗 Xem chi tiết
                        </a>
                    </li>
                    <hr>
                """
            else: 
                html_message = None
        if action_type != "Xóa minh chứng" :
            html_message += """
                    </ul>
                    <p style="margin-top: 20px; font-size: 12px; color: #777;">Email này được gửi tự động từ hệ thống Django Admin.</p>
                </body>
            </html>
            """
        # Lấy danh sách email của admin (superuser)
        # admin_emails = list(User.objects.filter(is_superuser=True).values_list('email', flat=True))

        # Danh sách email nhận
        # recipients = [request.user.email] + admin_emails
        recipients = [request.user.email] 

        # Gửi email
        
        send_mail(
            subject,
            message,
            settings.DEFAULT_FROM_EMAIL,  # Lấy email gửi đi từ settings.py
            recipients,
            fail_silently=False,
            html_message=html_message,
        )
    def send_common_attest_email(request, objects, action_type, admin_url):
        """ Gửi email khi có hành động trên Admin Django """
        # Lấy URL admin của đối tượng vừa chỉnh sửa
        User = get_user_model()
        
        if not objects:
            return  # Không có giá trị xóa
        subject = f"{action_type}: "
        message = f"Người dùng {request.user.email} đã thực hiện hành động '{action_type}'.\n\n"
        for obj in objects:
            subject += f"{obj.common_attest_id}; "
            message += f"ID: {obj.common_attest_id}\n"
            message += f"STT: {obj.common_attest_stt}\n"
            message += f"Tên: {obj.title}\n"
            message += f"Nội dung: {obj.body}\n"
            message += f"Nơi ban hành: {obj.performer}\n"
            message += f"Ghi chú: {obj.note}\n"
            # message += f"Hình : {obj.image}\n"
            # Lặp qua các photo liên quan từ PhotoAttest (nếu có)
            photo_urls = []
            for photo in obj.photos.all():
                # Kiểm tra xem file ảnh có URL không (chỉ khi ảnh được upload thành công)
                if photo.photo:
                    photo_urls.append(photo.photo.url)
            if photo_urls:
                message += "Hình:\n" + "\n".join(photo_urls) + "\n"
                
            message += f"Tiêu chí: {obj.criterion}\n"
            message += f"Hộp: {obj.box}\n"
            message += f"Ngày cập nhật: {obj.updated_on}\n\n"
            if action_type != "Xóa minh chứng dùng chung" :
                message += "\nKiểm tra chi tiết trong hệ thống Admin.\n"
                message += admin_url
            
                # Tạo HTML message và hiển thị ảnh dưới dạng liên kết hoặc nhúng (nếu mail client hỗ trợ)
                photos_html = ""
                if photo_urls:
                    # Ví dụ: hiển thị dưới dạng danh sách liên kết ảnh
                    photos_html = "<ul>"
                    for url in photo_urls:
                        url = request.build_absolute_uri(url)
                        photos_html += f'<li><img src="{url}" alt="Photo" style="max-width:300px;"></li>'
                    photos_html += "</ul>"
                
                html_message = f"""
                <html>
                    <body style="font-family: Arial, sans-serif; color: #333;">
                        <h2 style="color: #0066cc;">{action_type}</h2>
                        <p><b>Người dùng:</b> {request.user.email} đã thực hiện hành động <b>'{action_type}'</b>: <b>{obj.title}</b>.</p>
                        <p><b>ID:</b> {obj.common_attest_id}</p>
                        <p><b>STT:</b> {obj.common_attest_stt}</p>
                        <p><b>Tên:</b> {obj.title}</p>
                        <p><b>Nội dung:</b> {obj.body}</p>
                        <p><b>Nơi ban hành:</b> {obj.performer}</p>
                        <p><b>Ghi chú:</b> {obj.note}</p>
                        <p><b>Tiêu chí:</b> {obj.criterion}</p>
                        <p><b>Hộp:</b> {obj.box}</p>
                        <p><b>Ngày cập nhật:</b> {obj.updated_on}</p>
                        <p><b>Hình ảnh:</b></p>
                        {photos_html}
                        <br>
                        <a href="{admin_url}" style="display: inline-block; padding: 10px 15px; color: white; background-color: #28a745; text-decoration: none; border-radius: 5px;">
                            🔗 Xem chi tiết
                        </a>
                        <p style="margin-top: 20px; font-size: 12px; color: #777;">Email này được gửi tự động từ hệ thống Django Admin.</p>
                    </body>
                </html>
                """
            else: 
                html_message = None
        
        # Lấy danh sách email của admin (superuser)
        admin_emails = list(User.objects.filter(is_superuser=True).values_list('email', flat=True))

        # Danh sách email nhận
        recipients = [request.user.email] + admin_emails

        # Gửi email
        
        send_mail(
            subject,
            message,
            settings.DEFAULT_FROM_EMAIL,  # Lấy email gửi đi từ settings.py
            recipients,
            fail_silently=False,
            html_message=html_message,
        )
    # def send_email_deleted(self, request, obj, queryset):
    #     if not queryset.exists():
    #         return  # Không có attest nào để xóa
    #     subject = "Xóa Minh Chứng"
    #     message = f"Người dùng {request.user.email} đã thực hiện hành động 'Xóa' trên các minh chứng sau:\n\n"

    #     for obj in queryset:
    #         message += f"- Minh chứng: {obj.title}\n"
    #         message += f"  ID: {obj.attest_id}\n"
    #         message += f"  STT: {obj.attest_stt}\n"
    #         message += f"  Nội dung: {obj.body}\n"
    #         message += f"  Nơi ban hành: {obj.performer}\n"
    #         message += f"  Ghi chú: {obj.note}\n"
    #         message += f"  Hình : {obj.image}\n"
    #         message += f"  Tiêu chí: {obj.criterion}\n"
    #         message += f"  Hộp: {obj.box}\n"
    #         message += f"  Ngày cập nhật: {obj.updated_on}\n\n"

    #     # Lấy danh sách email của admin (superuser)
    #     admin_emails = list(User.objects.filter(is_superuser=True).values_list('email', flat=True))

    #     # Danh sách email nhận
    #     recipients = [request.user.email] + admin_emails
        
    #     send_mail(
    #         subject,
    #         message,
    #         settings.DEFAULT_FROM_EMAIL,  # Lấy email gửi đi từ settings.py
    #         recipients,
    #         fail_silently=False,
    #     )