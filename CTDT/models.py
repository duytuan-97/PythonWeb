from django.db import models


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
    
    # phương thức có thể gọi trên model, hiển thị dữ liệu title
    def __str__(self):
        return 'Hộp ' + self.title
    class Meta:
        verbose_name = "Hộp"  # Tên hiển thị số ít
        verbose_name_plural = "Các hộp"  # Tên hiển thị số nhiều

#Model Tiêu Chuẩn 
class standard(models.Model):
    title = models.CharField(max_length=250, verbose_name="Tiêu chuẩn")
    slug = models.SlugField(max_length=150)
    created_on = models.DateTimeField(auto_now_add=True, verbose_name="Ngày tạo")
    
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
    image = models.ImageField(default='fallback.jpeg', blank=True, verbose_name="Hình")
    criterion = models.ForeignKey(criterion, on_delete=models.CASCADE, verbose_name="Tiêu chí")
    box = models.ForeignKey(box, on_delete=models.CASCADE, verbose_name="Hộp")
    created_on = models.DateTimeField(auto_now_add=True, verbose_name="Ngày tạo")
    
    def __str__(self):
        return self.title
    class Meta:
        constraints = [
            models.UniqueConstraint(fields=['common_attest_id', 'common_attest_stt'], name='unique_common_attest_id_common_attest_stt')
        ]
        verbose_name = "Minh chứng dùng chung"
        verbose_name_plural = "Các minh chứng dùng chung"

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
    image = models.ImageField(default='fallback.jpeg', blank=True, verbose_name="Hình")
    criterion = models.ForeignKey(criterion, on_delete=models.CASCADE, verbose_name="Tiêu chí")
    box = models.ForeignKey(box, on_delete=models.CASCADE, verbose_name="Hộp")
    created_on = models.DateTimeField(auto_now_add=True, verbose_name="Ngày tạo")
    
    common_attest = models.ForeignKey(common_attest, on_delete=models.SET_NULL, null=True, blank=True, verbose_name="Minh chứng dùng chung")
    is_common = models.BooleanField(default=False, verbose_name="Là minh chứng dùng chung")
    
    def save(self, *args, **kwargs):
        # Nếu có liên kết với common_attest, sao chép dữ liệu từ đó
        if self.common_attest:
            common = self.common_attest
            self.attest_id = common.common_attest_id
            self.attest_stt = common.common_attest_stt
            self.title = common.title
            self.body = common.body
            self.performer = common.performer
            self.note = common.note
            self.slug = common.slug
            self.image = common.image
            self.criterion = common.criterion
            self.box = common.box
            self.is_common = True

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