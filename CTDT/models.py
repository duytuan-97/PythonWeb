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