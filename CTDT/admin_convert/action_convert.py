

import os
from CTDT.models import PhotoAttest, attest


class ActionConvert:
    @staticmethod
    def update_photos(obj):
                related_attests1 = attest.objects.filter(common_attest=obj)

                for attest_instance1 in related_attests1:
                    attest_instance1.photos.all().delete()  # Xóa ảnh cũ
                        
                    for photo_common1 in obj.photos.all():
                        PhotoAttest.objects.create(show=attest_instance1, photo=photo_common1.photo) 
    
    @staticmethod
    def delete_attests(common_attest_obj):
        """Xóa tất cả attest liên quan và ảnh của chúng"""
        related_attests = attest.objects.filter(common_attest=common_attest_obj)

        for attest_instance in related_attests:
            # # Xóa ảnh trong PhotoAttest
            # for photo in attest_instance.photos.all():
            #     if photo.photo and os.path.isfile(photo.photo.path):
            #         os.remove(photo.photo.path)

            # Xóa ảnh trong database
            attest_instance.photos.all().delete()

            # Xóa attest
            attest_instance.delete()