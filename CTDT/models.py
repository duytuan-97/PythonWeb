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
    title = models.CharField(max_length=250)
    slug = models.SlugField(max_length=150)
    location = models.CharField(max_length=250)
    created_on = models.DateTimeField(auto_now_add=True)
    
    # phương thức có thể gọi trên model, hiển thị dữ liệu title
    def __str__(self):
        return self.title

#Model Tiêu Chuẩn 
class standard(models.Model):
    title = models.CharField(max_length=250)
    slug = models.SlugField(max_length=150)
    created_on = models.DateTimeField(auto_now_add=True)
    
    # phương thức có thể gọi trên model, hiển thị dữ liệu title
    def __str__(self):
        return self.title

#Model Tiêu Chí 
class criterion(models.Model):
    title = models.CharField(max_length=250)
    slug = models.SlugField(max_length=150)
    standard = models.ForeignKey(standard, on_delete=models.CASCADE)
    created_on = models.DateTimeField(auto_now_add=True)
    
    # phương thức có thể gọi trên model, hiển thị dữ liệu title
    def __str__(self):
        return self.title
    

#Model Minh chứng 
class attest(models.Model):
    id = models.CharField(max_length=20, primary_key=True)
    # add 2 fields
    attest_id = models.CharField(max_length=100)
    attest_stt = models.CharField(max_length=100)
    
    title = models.CharField(max_length=250)
    body = models.TextField()
    performer = models.TextField()
    note = models.TextField(null=True, blank=True)
    slug = models.SlugField(max_length=150)
    image = models.ImageField(default='fallback.jpeg', blank=True)
    criterion = models.ForeignKey(criterion, on_delete=models.CASCADE)
    box = models.ForeignKey(box, on_delete=models.CASCADE)
    created_on = models.DateTimeField(auto_now_add=True)
    
    # phương thức có thể gọi trên model, hiển thị dữ liệu title
    def __str__(self):
        return self.title
    class Meta:
        constraints = [
            models.UniqueConstraint(fields=['attest_id', 'attest_stt'], name='unique_attest_id_attest_stt')
        ]