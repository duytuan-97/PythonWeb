import os

from django.db.models.signals import pre_save, post_delete
from django.dispatch import receiver

from .models import PDFScanFile
from .models import PDFCommonAttestFile

#Xóa file cũ khi thay PDF mới
@receiver(pre_save, sender=PDFScanFile)
def delete_old_pdfscanfile(sender, instance, **kwargs):

    if not instance.pk:
        return

    try:
        old_instance = sender.objects.get(pk=instance.pk)
    except sender.DoesNotExist:
        return

    if old_instance.file and old_instance.file != instance.file:

        old_file_path = old_instance.file.path

        if os.path.isfile(old_file_path):
            os.remove(old_file_path)

            print(f"🗑️ Đã xóa PDF cũ: {old_file_path}")
    if instance.file:

        file_path = instance.file.path

        folder = os.path.dirname(file_path)
        if os.path.exists(folder) and not os.listdir(folder):
            os.rmdir(folder)

            print(f"🧹 Đã xóa thư mục rỗng: {folder}") 

#Xóa file khi xóa record
@receiver(post_delete, sender=PDFScanFile)
def delete_pdfscanfile(sender, instance, **kwargs):

    if instance.file:

        file_path = instance.file.path

        if os.path.isfile(file_path):
            os.remove(file_path)

            print(f"🗑️ Đã xóa PDF: {file_path}")
        
        folder = os.path.dirname(file_path)
        if os.path.exists(folder) and not os.listdir(folder):
            os.rmdir(folder)

            print(f"🧹 Đã xóa thư mục rỗng: {folder}") 

#Khi sửa file PDF dùng chung, xóa file cũ
@receiver(pre_save, sender=PDFCommonAttestFile)
def delete_old_common_pdf(sender, instance, **kwargs):

    if not instance.pk:
        return

    try:
        old_instance = sender.objects.get(pk=instance.pk)
    except sender.DoesNotExist:
        return

    if old_instance.file and old_instance.file != instance.file:

        old_file_path = old_instance.file.path

        if os.path.isfile(old_file_path):
            os.remove(old_file_path)

            print(f"🗑️ Đã xóa PDF dùng chung cũ: {old_file_path}")
    if instance.file:

        file_path = instance.file.path

        folder = os.path.dirname(file_path)
        if os.path.exists(folder) and not os.listdir(folder):
            os.rmdir(folder)

            print(f"🧹 Đã xóa thư mục rỗng: {folder}") 

#Khi xóa record PDF dùng chung, xóa file
@receiver(post_delete, sender=PDFCommonAttestFile)
def delete_common_pdf(sender, instance, **kwargs):

    if instance.file:

        file_path = instance.file.path

        if os.path.isfile(file_path):
            os.remove(file_path)

            print(f"🗑️ Đã xóa PDF dùng chung: {file_path}")
        
        folder = os.path.dirname(file_path)
        if os.path.exists(folder) and not os.listdir(folder):
            os.rmdir(folder)

            print(f"🧹 Đã xóa thư mục rỗng: {folder}")      
    


