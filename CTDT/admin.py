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

admin.site.register(Post)

@admin.action(description="Mark selected stories as published")
def make_published(modeladmin, request, queryset):
    queryset.update(status="p")

# hộp
# admin.site.register(box)
@admin.register(box)
class boxAdmin(admin.ModelAdmin): 
    search_fields = ('title',)
    prepopulated_fields = {'slug': ['title']}

# tiêu chuẩn
# admin.site.register(standard)
@admin.register(standard)
class standardAdmin(admin.ModelAdmin):
    list_display = ('title','view_criterion_link',) 
    search_fields = ('title',)
    ordering = ('title',)
    prepopulated_fields = {'slug': ['title']}
    
    def view_criterion_link(self, obj):
        count = obj.criterion_set.count()
        url = (
            reverse("admin:CTDT_criterion_changelist")#tên Project_model_linkChange
            + "?"
            + urlencode({"standard__id": f"{obj.id}"})
        )
        return format_html('<a href="{}">{} Tiêu chí</a>', url, count)

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
        js = (['../static/js/custom_admin.js',])  # Đường dẫn file JS
        
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

    view_attests_link.short_description = "Minh chứng"

#admin.site.register(attest)
@admin.register(attest)
# class attestAdmin(admin.ModelAdmin):
class attestAdmin(ImportExportActionModelAdmin, admin.ModelAdmin):
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
    prepopulated_fields = {'slug': ['attest_id','attest_stt']}
    class Media:
        js = ('../static/js/custom_admin.js',)  # Đường dẫn file JS
    
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
    prepopulated_fields = {'slug': ['common_attest_id','common_attest_stt']}
    class Media:
        js = ('../static/js/custom_admin.js',)  # Đường dẫn file JS
    
    @admin.display(description="Mã minh chứng")
    def common_attest_id_name(self, obj):
        if self.model.objects.filter(common_attest_id=obj.common_attest_id, pk__lt=obj.pk).exists():
            return ""
        return f"{obj.common_attest_id}".upper()