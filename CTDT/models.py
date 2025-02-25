import shutil
from django.db import models
import os
from django.utils.translation import gettext_lazy as _
from easy_thumbnails.files import get_thumbnailer
from django.core.exceptions import ValidationError


#uploadfile
class UploadedFile(models.Model):
    file = models.FileField(upload_to='media/')
    uploaded_at = models.DateTimeField(auto_now_add=True)


# Create your models here.
class Post(models.Model):
    title = models.CharField(max_length=100)
    body = models.TextField()
    slug = models.SlugField(max_length=50)
    date = models.DateTimeField(auto_now_add=True)
    banner = models.ImageField(default='fallback.jpeg', blank=True)
    # có thể sử dụng SlugField
    
    # phương thức có thể gọi trên model, hiển thị dữ liệu title
    def __str__(self):
        return self.title

#Model Hộp
class box(models.Model):
    id = models.CharField(max_length=20, primary_key=True)
    title = models.CharField(max_length=250, verbose_name="Hộp")
    slug = models.SlugField(max_length=150)
    location = models.CharField(max_length=250, verbose_name="Vị trí")
    created_on = models.DateTimeField(auto_now_add=True, verbose_name="Ngày tạo")
    updated_on = models.DateTimeField(auto_now=True, verbose_name="Ngày cập nhật")
    
    # phương thức có thể gọi trên model, hiển thị dữ liệu title
    def __str__(self):
        return 'Hộp ' + self.title
    class Meta:
        verbose_name = "Hộp"  # Tên hiển thị số ít
        verbose_name_plural = "Các hộp"  # Tên hiển thị số nhiều

#Model Tiêu Chuẩn 
class standard(models.Model):
    id = models.AutoField(primary_key=True)
    title = models.CharField(max_length=250, verbose_name="Tiêu chuẩn")
    slug = models.SlugField(max_length=150)
    created_on = models.DateTimeField(auto_now_add=True, verbose_name="Ngày tạo")
    updated_on = models.DateTimeField(auto_now=True, verbose_name="Ngày cập nhật")
    # phương thức có thể gọi trên model, hiển thị dữ liệu title
    def __str__(self):
        return self.title
    class Meta:
        verbose_name = "Tiêu chuẩn"
        verbose_name_plural = "Các tiêu chuẩn"

#Model Tiêu Chí 
class criterion(models.Model):
    id = models.CharField(max_length=20, primary_key=True)
    title = models.CharField(max_length=250, verbose_name="Tiêu chí")
    slug = models.SlugField(max_length=150)
    standard = models.ForeignKey(standard, verbose_name="Tiêu chuẩn", on_delete=models.CASCADE)
    created_on = models.DateTimeField(auto_now_add=True, verbose_name="Ngày tạo")
    updated_on = models.DateTimeField(auto_now=True, verbose_name="Ngày cập nhật")
    
    # phương thức có thể gọi trên model, hiển thị dữ liệu title
    def __str__(self):
        return self.title
    class Meta:
        verbose_name = "Tiêu chí"
        verbose_name_plural = "Các tiêu chí"
    
class common_attest(models.Model):
    common_attest_id = models.CharField(max_length=100, primary_key=True)
    common_attest_stt = models.CharField(max_length=10, verbose_name="STT")
    
    title = models.CharField(max_length=250, verbose_name="Minh chứng")
    body = models.TextField(verbose_name="Nội dung")
    performer = models.TextField(verbose_name="Nơi ban hành")
    note = models.TextField(null=True, blank=True, verbose_name="Ghi chú")
    slug = models.SlugField(max_length=150)
    # image = models.ImageField(default='fallback.jpeg', blank=True, verbose_name="Hình")
    criterion = models.ForeignKey(criterion, on_delete=models.CASCADE, verbose_name="Tiêu chí")
    box = models.ForeignKey(box, on_delete=models.CASCADE, verbose_name="Hộp")
    created_on = models.DateTimeField(auto_now_add=True, verbose_name="Ngày tạo")
    updated_on = models.DateTimeField(auto_now=True, verbose_name="Ngày cập nhật")
    
    def __str__(self):
        return self.title
    class Meta:
        constraints = [
            models.UniqueConstraint(fields=['common_attest_id', 'common_attest_stt'], name='unique_common_attest_id_common_attest_stt')
        ]
        verbose_name = "Minh chứng dùng chung"
        verbose_name_plural = "Các minh chứng dùng chung"
    
    def clean(self):
        """
        Kiểm tra xem có tồn tại một bản ghi attest (chưa liên kết với common_attest)
        """

        duplicate = attest.objects.filter(
            common_attest__isnull=True,  # chỉ kiểm tra các attest chưa liên kết với common_attest
            attest_id=self.common_attest_id,
            attest_stt=self.common_attest_stt
        ).exists()

        if duplicate:
            raise ValidationError(
                "Có minh chứng độc lập đã tồn tại với thông tin này. Vui lòng kiểm tra lại."
            )

    def save(self, *args, **kwargs):
        self.clean()  # Kiểm tra trước khi lưu
        super().save(*args, **kwargs)
    
    def delete(self, *args, **kwargs):
        """Xóa tất cả ảnh liên quan trước khi xóa Attest"""
        for photo in self.photos.all():
            photo.delete()  # Gọi delete của Photo để xóa file ảnh
        super().delete(*args, **kwargs)  # Xóa object Attest khỏi database

def photo_upload_to(instance, filename):
    """
    Tạo đường dẫn upload ảnh : 'attest/slug-cua-attest/filename'
    """
    # Nếu đã có trường slug, sử dụng nó, nếu chưa có có thể tạo tạm từ title
    folder = instance.show.slug  
    return os.path.join('attest', folder, filename)
class PhotoCommonAttest(models.Model):
    show = models.ForeignKey(
        common_attest, on_delete=models.CASCADE, related_name="photos"
    )
    photo = models.ImageField(upload_to=photo_upload_to, blank=True, verbose_name="Hình")
    
    def __str__(self):
            return _("Đối tượng ảnh '{photo}'").format(photo=self.photo)
    
    verbose_name = "Hình ảnh"
    verbose_name_plural = "Các hình ảnh"
    
    def delete(self, *args, **kwargs):
        """Xóa file ảnh thực tế trước khi xóa object"""
        if self.photo:
            thumbnailURL = "./"+get_thumbnailer(self.photo)['small'].url
            if os.path.isfile(thumbnailURL):
                os.remove(thumbnailURL)  # Xóa file ảnh khỏi hệ thống
            if os.path.isfile(self.photo.path):
                os.remove(self.photo.path)  # Xóa file ảnh khỏi hệ thống
            folder = os.path.dirname(self.photo.path)
            if not os.listdir(folder):
                shutil.rmtree(folder)
            
        super().delete(*args, **kwargs)  # Xóa object khỏi database

#Model Minh chứng 
class attest(models.Model):
    # id = models.CharField(max_length=20, primary_key=True)
    # add 2 fields
    attest_id = models.CharField(max_length=100)
    attest_stt = models.CharField(max_length=10, verbose_name="STT")
    
    title = models.CharField(max_length=250, verbose_name="Minh chứng")
    body = models.TextField(verbose_name="Nội dung")
    performer = models.TextField(verbose_name="Nơi ban hành")
    note = models.TextField(null=True, blank=True, verbose_name="Ghi chú")
    slug = models.SlugField(max_length=150)
    # image = models.ImageField(default='fallback.jpeg', blank=True, verbose_name="Hình")
    criterion = models.ForeignKey(criterion, on_delete=models.CASCADE, verbose_name="Tiêu chí")
    box = models.ForeignKey(box, on_delete=models.CASCADE, verbose_name="Hộp")
    created_on = models.DateTimeField(auto_now_add=True, verbose_name="Ngày tạo")
    updated_on = models.DateTimeField(auto_now=True, verbose_name="Ngày cập nhật")
    
    common_attest = models.ForeignKey(common_attest, on_delete=models.SET_NULL, null=True, blank=True, verbose_name="Minh chứng dùng chung")
    is_common = models.BooleanField(default=False, verbose_name="Là minh chứng dùng chung")
    
    def clean(self):
        """Kiểm tra xem minh chứng có bị trùng không"""
        if not self.common_attest:
            # Kiểm tra trùng cho attest độc lập
            exists = attest.objects.filter(
                attest_id=self.attest_id, 
                attest_stt=self.attest_stt
            ).exclude(pk=self.pk).exists()
            if exists:
                raise ValidationError("Minh chứng đã tồn tại trong minh chứng dùng chung.")
    
    def save(self, *args, **kwargs):
        if not self.pk:  # Nếu chưa có primary key, lưu trước
            super().save(*args, **kwargs)
        # Nếu có liên kết với common_attest, sao chép dữ liệu từ đó
        if self.common_attest:
            common = self.common_attest
            self.attest_id = common.common_attest_id
            self.attest_stt = common.common_attest_stt
            self.title = common.title
            self.body = common.body
            self.performer = common.performer
            # self.note = common.note
            self.slug = common.slug
            # self.image = common.image
            self.criterion = common.criterion
            self.box = common.box
            self.is_common = True
            
            # Xóa ảnh cũ trong PhotoAttest trước khi sao chép ảnh mới từ PhotoCommonAttest
            self.photos.all().delete()

            # Sao chép ảnh từ PhotoCommonAttest sang PhotoAttest
            for photo_common in common.photos.all():
                PhotoAttest.objects.create(show=self, photo=photo_common.photo)

        self.clean()
        super().save(*args, **kwargs)
    
    # phương thức có thể gọi trên model, hiển thị dữ liệu title
    def __str__(self):
        return self.title
    class Meta:
        constraints = [
            models.UniqueConstraint(fields=['attest_id', 'attest_stt'], name='unique_attest_id_attest_stt')
        ]
        verbose_name = "Minh chứng"
        verbose_name_plural = "Các minh chứng"
    
    def delete(self, *args, **kwargs):
        """Xóa tất cả ảnh liên quan trước khi xóa Attest"""
        if not self.is_common:
            for photo in self.photos.all():
                photo.delete()  # Gọi delete của Photo để xóa file ảnh
        else:
            # Với attest dùng chung, chỉ xóa dữ liệu trong database.
            # Gọi delete() trên QuerySet sẽ không gọi phương thức delete() của từng object,
            # do đó file ảnh sẽ không bị xóa.
            self.photos.all().delete()
        super().delete(*args, **kwargs)  # Xóa object Attest khỏi database

class PhotoAttest(models.Model):
    show = models.ForeignKey(
        attest, on_delete=models.CASCADE, related_name="photos"
    )
    photo = models.ImageField(upload_to=photo_upload_to, blank=True, verbose_name="Hình")
    
    def delete(self, *args, **kwargs):
        """Xóa file ảnh thực tế trước khi xóa object"""
        
        if self.photo:
            thumbnailURL = "./"+get_thumbnailer(self.photo)['small'].url
            if os.path.isfile(thumbnailURL):
                os.remove(thumbnailURL)  # Xóa file ảnh khỏi hệ thống
            if os.path.isfile(self.photo.path):
                os.remove(self.photo.path)  # Xóa file ảnh khỏi hệ thống
            folder = os.path.dirname(self.photo.path)
            if not os.listdir(folder):
                shutil.rmtree(folder)
                
            
        super().delete(*args, **kwargs)  # Xóa object khỏi database
    def __str__(self):
            return _("Đối tượng ảnh '{photo}'").format(photo=self.photo)
    
    verbose_name = "Hình ảnh"
    verbose_name_plural = "Các hình ảnh"