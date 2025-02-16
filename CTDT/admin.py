from django import forms
from django.contrib import admin

# from CTDT import forms

# Register your models here.
from .models import Post
from .models import box
from .models import standard
from .models import criterion
from .models import attest
from .models import common_attest

from django_admin_listfilter_dropdown.filters import DropdownFilter, RelatedDropdownFilter, ChoiceDropdownFilter

from import_export.admin import ImportExportActionModelAdmin

from django.utils.html import format_html
from django.urls import reverse
from django.utils.http import urlencode

from django.http import HttpResponse
from docx import Document
from docx.shared import Pt
from docx.enum.text import WD_ALIGN_PARAGRAPH
from docx.oxml import OxmlElement

from collections import defaultdict

from django.utils.html import format_html

from django.urls import path

from django.conf import settings
from django.contrib.auth import get_user_model
from django.core.mail import send_mail
from .notifications import EmailNotification
from django.contrib.admin.widgets import AdminTextInputWidget 

from django.utils.text import slugify


admin.site.register(Post)

User = get_user_model()

@admin.action(description="Mark selected stories as published")
def make_published(modeladmin, request, queryset):
    queryset.update(status="p")

# hộp
# admin.site.register(box)
@admin.register(box)
class boxAdmin(admin.ModelAdmin): 
    search_fields = ('title',)
    # prepopulated_fields = {'slug': ['title']}

    class Media:
        js = (['../static/js/custom_admin.js', 'https://cdnjs.cloudflare.com/ajax/libs/speakingurl/14.0.1/speakingurl.min.js'])  # Đường dẫn file JS

    def save_model(self, request, obj, form, change):
        super().save_model(request, obj, form, change)  # 🔹 Đảm bảo obj đã được lưu trước khi lấy pk
        if change :
            action_type = "Cập nhật hộp"
        else :
            action_type = "Thêm mới hộp"
        admin_url = request.build_absolute_uri(reverse('admin:CTDT_box_change', args=[obj.pk]))
        # EmailNotification.send_box_email(request, [obj], action_type, admin_url)

    def delete_model(self, request, obj):
        # EmailNotification.send_box_email(request, [obj], "Xóa hộp", "Delete")
        super().delete_model(request, obj)
    
    def delete_queryset(self, request, queryset):
        # EmailNotification.send_box_email(request, queryset, "Xóa hộp", "Delete")
        super().delete_queryset(request, queryset)
        
# tiêu chuẩn
# admin.site.register(standard)
@admin.register(standard)
class standardAdmin(admin.ModelAdmin):
    list_display = ('title','view_criterion_link',) 
    search_fields = ('title',)
    ordering = ('title',)
    # prepopulated_fields = {'slug': ['title']}
    
    class Media:
        js = (['../static/js/custom_admin.js', 'https://cdnjs.cloudflare.com/ajax/libs/speakingurl/14.0.1/speakingurl.min.js'])  # Đường dẫn file JS
        
    
    def view_criterion_link(self, obj):
        count = obj.criterion_set.count()
        url = (
            reverse("admin:CTDT_criterion_changelist")#tên Project_model_linkChange
            + "?"
            + urlencode({"standard__id": f"{obj.id}"})
        )
        return format_html('<a href="{}">{} Tiêu chí</a>', url, count)
    
    def save_model(self, request, obj, form, change):
        super().save_model(request, obj, form, change)  # 🔹 Đảm bảo obj đã được lưu trước khi lấy pk
        if change :
            action_type = "Cập nhật tiêu chuẩn"
            obj.slug = slugify(obj.title)  # Cập nhật lại slug từ title
        else :
            action_type = "Thêm mới tiêu chuẩn"
        admin_url = request.build_absolute_uri(reverse('admin:CTDT_standard_change', args=[obj.pk]))
        super().save_model(request, obj, form, change)
        # EmailNotification.send_standard_email(request, [obj], action_type, admin_url)

    def delete_model(self, request, obj):
        # EmailNotification.send_standard_email(request, [obj], "Xóa tiêu chuẩn", "Delete")
        super().delete_model(request, obj)
    
    def delete_queryset(self, request, queryset):
        # EmailNotification.send_standard_email(request, queryset, "Xóa tiêu chuẩn", "Delete")
        super().delete_queryset(request, queryset)

    view_criterion_link.short_description = "Tiêu chí"
    
    
# tiêu chí
#admin.site.register(criterion)
@admin.register(criterion)
class criterionAdmin(admin.ModelAdmin):   
    list_display = ('standard_name','title', 'view_attests_link',)
    list_display_links = ('title',)
    ordering = ('standard','title',)
    list_filter = (
        #'standard',
        # for ordinary fields
        #('standard', DropdownFilter),
        # for choice fields
        #('standard', ChoiceDropdownFilter),
        # for related fields
        ('standard', RelatedDropdownFilter),
    )
    
    class Media:
        js = (['https://code.jquery.com/jquery-3.6.0.min.js','../static/js/custom_admin.js', 'https://cdnjs.cloudflare.com/ajax/libs/speakingurl/14.0.1/speakingurl.min.js'])  # Đường dẫn file JS
        
    search_fields = ('title',)
    prepopulated_fields = {'slug': ['title']}
    
    @admin.display(description="Tiêu chuẩn")
    def standard_name(self, obj):
        if self.model.objects.filter(standard_id=obj.standard, pk__lt=obj.pk).exists():
            return ""
        return f"{obj.standard}".upper()
    
    def view_attests_link(self, obj):
        count = obj.attest_set.count()
        url = (
            reverse("admin:CTDT_attest_changelist")#tên Project_model_linkChange
            + "?"
            + urlencode({"criterion__id": f"{obj.id}"})
        )
        return format_html('<a href="{}">{}</a>', url, count)
    
    def save_model(self, request, obj, form, change):
        super().save_model(request, obj, form, change)  # 🔹 Đảm bảo obj đã được lưu trước khi lấy pk
        if change :
            action_type = "Cập nhật tiêu chí"
        else :
            action_type = "Thêm mới tiêu chí"
        admin_url = request.build_absolute_uri(reverse('admin:CTDT_criterion_change', args=[obj.pk]))
        # EmailNotification.send_criterion_email(request, [obj], action_type, admin_url)

    def delete_model(self, request, obj):
        # EmailNotification.send_criterion_email(request, [obj], "Xóa tiêu chí", "Delete")
        super().delete_model(request, obj)
    
    def delete_queryset(self, request, queryset):
        # EmailNotification.send_criterion_email(request, queryset, "Xóa tiêu chí", "Delete")
        super().delete_queryset(request, queryset)

    view_attests_link.short_description = "Minh chứng"

class AttestForm(forms.ModelForm):
    class Meta:
        model = attest
        fields = "__all__"

    def clean(self):
        cleaned_data = super().clean()
        common_attest = cleaned_data.get("common_attest")

        if common_attest:
            # Sao chép giá trị từ common_attest
            cleaned_data["title"] = common_attest.title
            cleaned_data["body"] = common_attest.body
            # Thêm các trường khác nếu cần
        return cleaned_data
#admin.site.register(attest)
@admin.register(attest)
# class attestAdmin(admin.ModelAdmin):
class attestAdmin(ImportExportActionModelAdmin, admin.ModelAdmin):
    form = AttestForm
    list_display = ('criterion_name', 'attest_id_name','attest_stt', 'title', 'body', 'performer')
    list_display_links = ('title',)
    list_filter = (
        #'criterion',
        # for ordinary fields
        #('criterion', DropdownFilter),
        # for choice fields
        #('criterion', ChoiceDropdownFilter),
        # for related fields
        ('criterion', RelatedDropdownFilter),
    )
    
    ordering = ( 'attest_id','attest_stt')
    search_fields = ('title', 'performer')
    # prepopulated_fields = {'slug': ['attest_id','attest_stt']}
    
    # def get_readonly_fields(self, request, obj=None):
    #     """
    #     Làm cho tất cả các trường readonly nếu đây là minh chứng dùng chung.
    #     """
    #     if obj and obj.common_attest is not None:  # Nếu có liên kết với common_attest
    #         # Lấy danh sách các trường có trong form
    #         form_fields = [field.name for field in self.model._meta.fields]
    #         # Loại bỏ các trường không được quản lý bởi form
    #         readonly_fields = [field for field in form_fields if field in self.form.declared_fields]
    #         return readonly_fields
    #     return super().get_readonly_fields(request, obj)
    def get_form(self, request, obj=None, **kwargs):
        form = super().get_form(request, obj, **kwargs)
        # if obj:
        #     if obj.common_attest is not None:  # Nếu là minh chứng dùng chung
        #         for field_name in form.base_fields:
        #             form.base_fields[field_name].disabled = True  # Vô hiệu hóa trường
        # else:
        #     form.base_fields['is_common'].disabled = True
        if obj:
            if obj.common_attest is not None:  # Nếu là minh chứng dùng chung
                for field_name in form.base_fields:
                    form.base_fields[field_name].disabled = True  # Vô hiệu hóa trường
            else:
                form.base_fields['common_attest'].disabled = True
                form.base_fields['is_common'].disabled = True
        # else:
        #     form.base_fields['is_common'].disabled = True
        return form
    
    def render_change_form(self, request, context, add=False, change=False, form_url="", obj=None):
        if obj and obj.common_attest is not None:  # Nếu là minh chứng dùng chung
            context['show_save'] = False  # Ẩn nút lưu
            context['show_save_and_continue'] = False
            context['show_save_and_add_another'] = False
        else:
            context['show_save'] = True
            context['show_save_and_continue'] = True
            context['show_save_and_add_another'] = True
        return super().render_change_form(request, context, add, change, form_url, obj)
    
    # Gửi log
    
    def save_model(self, request, obj, form, change):
        super().save_model(request, obj, form, change)  # 🔹 Đảm bảo obj đã được lưu trước khi lấy pk
        if change :
            action_type = "Cập nhật minh chứng"
        else :
            action_type = "Thêm mới minh chứng"
        admin_url = request.build_absolute_uri(reverse('admin:CTDT_attest_change', args=[obj.pk]))
        
        if not change and obj.common_attest : 
            # obj.is_common = bool(obj.common_attest)  # Gán True nếu common_attest có giá trị
            common_attest_data = obj.common_attest
            obj.attest_id = common_attest_data.common_attest_id
            obj.attest_stt = common_attest_data.common_attest_stt
            obj.title = common_attest_data.title
            obj.body = common_attest_data.body
            obj.performer = common_attest_data.performer
            obj.note = "DC"
            obj.slug = common_attest_data.slug
            obj.image = common_attest_data.image
            # obj.criterion = common_attest_data.criterion
            obj.box = common_attest_data.box
            obj.is_common = True
            
        else:
            obj.is_common = False
        
        # EmailNotification.send_attest_email(request, [obj], action_type, admin_url)
        # EmailNotification.send_attest_email(request, [obj], action_type)
        super().save_model(request, obj, form, change)
    
    def delete_model(self, request, obj):
        """ Gửi email khi xóa """
        # EmailNotification.send_attest_email(request, [obj], "Xóa minh chứng", "Delete")
        # EmailNotification.send_attest_email(request, [obj], "Xóa minh chứng")
        super().delete_model(request, obj)
    
    def delete_queryset(self, request, queryset):
        """ Gửi email chứa danh sách attest bị xóa trước khi xóa """

        # EmailNotification.send_attest_email(request, queryset, "Xóa minh chứng", "Delete")
        # EmailNotification.send_attest_email(request, queryset, "Xóa minh chứng")
        
        # Gọi phương thức mặc định để xóa các attest
        super().delete_queryset(request, queryset)
    
    class Media:
        js = ('../static/js/custom_admin.js', 'https://cdnjs.cloudflare.com/ajax/libs/speakingurl/14.0.1/speakingurl.min.js')  # Đường dẫn file JS
        css = {
            'all': ('../static/css/custom_admin.css',)
        }
    @admin.display(description="Tiêu chí")
    def criterion_name(self, obj):
        if self.model.objects.filter(criterion=obj.criterion, pk__lt=obj.pk).exists():
            return ""
        # return f"{obj.criterion} {obj.title}".upper()
        return f"{obj.criterion}"
    @admin.display(description="Mã minh chứng")
    def attest_id_name(self, obj):
        if self.model.objects.filter(attest_id=obj.attest_id, pk__lt=obj.pk).exists():
            return ""
        return f"{obj.attest_id}".upper()
    
    #  # Thêm đường dẫn cho action nhập file Word
    # def get_urls(self):
    #     urls = super().get_urls()
    #     custom_urls = [
    #         path('import-word/', self.import_word, name='import_word'),
    #     ]
    #     return custom_urls + urls
    
    # # Giao diện tải file Word
    # def import_word(self, request):
    #     from django.template.response import TemplateResponse
    #     from django.core.files.uploadedfile import UploadedFile

    #     if request.method == "POST" and request.FILES.get('word_file'):
    #         word_file = request.FILES['word_file']
    #         if isinstance(word_file, UploadedFile):
    #             self.handle_uploaded_word(word_file)
    #             self.message_user(request, "File Word đã được xử lý.")
    #             return HttpResponse(".")
    #     return TemplateResponse(request, "admin/import_word.html", context={})
    
    
    actions = ['export_to_word']
    def export_to_word(self, request, queryset):

        # Tạo file Word mới
        document = Document()

        # Thêm tiêu đề chính
        title = document.add_paragraph("DANH MỤC MINH CHỨNG")
        title.alignment = WD_ALIGN_PARAGRAPH.CENTER
        title.runs[0].font.size = Pt(14)
        title.runs[0].bold = True

        # Tạo bảng với 5 cột
        table = document.add_table(rows=1, cols=5)
        table.style = 'Table Grid'

        # Định nghĩa header
        hdr_cells = table.rows[0].cells
        hdr_cells[0].text = 'Tiêu chí'
        hdr_cells[1].text = 'STT (trong tiêu chí)'
        hdr_cells[2].text = 'Mã minh chứng'
        hdr_cells[3].text = 'Tên minh chứng'
        hdr_cells[4].text = 'Nơi ban hành...'

        # Biến theo dõi tiêu chuẩn và tiêu chí hiện tại
        current_standard = None
        current_criterion = None
        current_attest_id = None
        merge_criterion_cell = None
        merge_attest_cell = None
        merge_stt_cell = None
        stt_within_criterion = 0

        # Sắp xếp dữ liệu theo tiêu chuẩn và tiêu chí
        sorted_queryset = queryset.order_by('criterion__standard', 'criterion', 'attest_id')

        for obj in sorted_queryset:
            # Kiểm tra tiêu chuẩn (standard)
            if obj.criterion.standard != current_standard:
                # Nếu tiêu chuẩn thay đổi, thêm dòng tiêu chuẩn mới
                current_standard = obj.criterion.standard
                row_cells = table.add_row().cells
                row_cells[0].merge(row_cells[4])  # Gộp tất cả các cột
                row_cells[0].text = f"Tiêu chuẩn: {current_standard.title}"
                row_cells[0].paragraphs[0].runs[0].bold = True

            # Kiểm tra tiêu chí (criterion)
            if obj.criterion != current_criterion:
                # Nếu tiêu chí thay đổi, gộp ô tiêu chí trước đó (nếu có)
                if merge_criterion_cell is not None:
                    merge_criterion_cell.merge(row_cells[0])
                current_criterion = obj.criterion
                merge_criterion_cell = None
                stt_within_criterion = 0  # Đặt lại bộ đếm STT

            # Kiểm tra mã minh chứng (attest_id)
            if obj.attest_id != current_attest_id:
                # Nếu mã minh chứng thay đổi, gộp ô minh chứng trước đó (nếu có)
                if merge_attest_cell is not None:
                    merge_attest_cell.merge(row_cells[2])
                if merge_stt_cell is not None:
                    merge_stt_cell.merge(row_cells[1])
                current_attest_id = obj.attest_id
                merge_attest_cell = None
                merge_stt_cell = None
                stt_within_criterion += 1

            # Thêm dòng chi tiết
            row_cells = table.add_row().cells

            # Gán giá trị cho cột "Tiêu chí"
            if current_criterion == obj.criterion and merge_criterion_cell is None:
                merge_criterion_cell = row_cells[0]
                row_cells[0].text = str(obj.criterion)
            else:
                row_cells[0].text = ''

            # Gán giá trị cho cột "STT trong tiêu chí"
            if current_attest_id == obj.attest_id and merge_stt_cell is None:
                merge_stt_cell = row_cells[1]
                row_cells[1].text = str(stt_within_criterion)
            else:
                row_cells[1].text = ''

            # Gán giá trị cho cột "Mã minh chứng"
            if current_attest_id == obj.attest_id and merge_attest_cell is None:
                merge_attest_cell = row_cells[2]
                row_cells[2].text = obj.attest_id
            else:
                row_cells[2].text = ''

            # Gán giá trị cho các cột khác
            row_cells[3].text = obj.title  # Tên minh chứng
            row_cells[4].text = obj.performer  # Nơi ban hành

        # Gộp ô cuối cùng nếu còn dư
        if merge_criterion_cell is not None:
            merge_criterion_cell.merge(row_cells[0])
        if merge_attest_cell is not None:
            merge_attest_cell.merge(row_cells[2])
        if merge_stt_cell is not None:
            merge_stt_cell.merge(row_cells[1])

        # Lưu tài liệu vào HTTP response
        response = HttpResponse(
            content_type='application/vnd.openxmlformats-officedocument.wordprocessingml.document'
        )
        response['Content-Disposition'] = 'attachment; filename="DanhMucMinhChung.docx"'
        document.save(response)
        return response

@admin.register(common_attest)
class common_attestAdmin(ImportExportActionModelAdmin, admin.ModelAdmin):
    list_display = ('common_attest_id_name','common_attest_stt', 'title', 'body', 'performer')
    list_display_links = ('title',)
    # list_filter = (
    #     #'criterion',
    #     # for ordinary fields
    #     #('criterion', DropdownFilter),
    #     # for choice fields
    #     #('criterion', ChoiceDropdownFilter),
    #     # for related fields
    #     ('criterion', RelatedDropdownFilter),
    # )
    
    ordering = ( 'common_attest_id','common_attest_stt')
    search_fields = ('title', 'performer')
    # prepopulated_fields = {
    #     'slug': ['common_attest_id','common_attest_stt'],
    #     # 'common_attest_id':['box','criterion'],
    # }
    
    class Media:
        js = ('../static/js/custom_admin.js', 'https://cdnjs.cloudflare.com/ajax/libs/speakingurl/14.0.1/speakingurl.min.js')  # Đường dẫn file JS
    
    def save_model(self, request, obj, form, change):
        """
        Ghi đè save_model cập nhật tất cả các attest liên kết với common_attest.
        """
        super().save_model(request, obj, form, change)  # 🔹 Đảm bảo obj đã được lưu trước khi lấy pk
        if change :
            action_type = "Cập nhật minh chứng dùng chung"
        else :
            action_type = "Thêm mới minh chứng dùng chung"
        admin_url = request.build_absolute_uri(reverse('admin:CTDT_common_attest_change', args=[obj.pk]))
        
        super().save_model(request, obj, form, change)
        # Tìm tất cả các attest liên quan tới common_attest hiện tại
        related_attests = attest.objects.filter(common_attest=obj)
        # Cập nhật các trường trong attest liên quan nếu cần
        for attest_instance in related_attests:
            attest_instance.title = obj.title  # Đồng bộ trường `title`
            attest_instance.body = obj.body  
            attest_instance.performer = obj.performer  
            attest_instance.note = obj.note  
            attest_instance.slug = obj.slug  
            attest_instance.image = obj.image  
            attest_instance.criterion = obj.criterion  
            attest_instance.box = obj.box  
            attest_instance.save()  # Lưu thay đổi cho từng instance
        
        # EmailNotification.send_common_attest_email(request, [obj], action_type, admin_url)
    @admin.display(description="Mã minh chứng")
    
    def common_attest_id_name(self, obj):
        if self.model.objects.filter(common_attest_id=obj.common_attest_id, pk__lt=obj.pk).exists():
            return ""
        return f"{obj.common_attest_id}".upper()

    def delete_model(self, request, obj):
        """ Gửi email khi xóa """
        # EmailNotification.send_common_attest_email(request, [obj], "Xóa minh chứng dùng chung", "Delete")
        super().delete_model(request, obj)
    
    def delete_queryset(self, request, queryset):
        """ Gửi email chứa danh sách attest bị xóa trước khi xóa """
        # EmailNotification.send_common_attest_email(request, queryset, "Xóa minh chứng dùng chung", "Delete")
        # Gọi phương thức mặc định để xóa các attest
        super().delete_queryset(request, queryset)

# chưa cập nhật được slug , ẩn trường slug khi chỉnh sửa, thêm mới, cập nhật trường trong tiêu chí ==> xong

# Không gửi mail cho ad khi thao tác với database, cần tạo mới 1 table lưu các thông tin chỉnh sửa của người dùng 
# đến khi nào người dùng gửi thông báo cho admin thì sẽ lấy hết thông tin trong bảng đó gửi cho admin