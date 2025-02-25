from django import forms

from CTDT.model_train.ml_model import predict_image
from .models import PhotoAttest, PhotoCommonAttest, UploadedFile, attest, common_attest

from django.core.validators import validate_image_file_extension
from django.utils.translation import gettext as _

class UploadFileForm(forms.ModelForm):
    class Meta:
        model = UploadedFile
        fields = ['file']

class FileUploadForm(forms.Form):
    file = forms.FileField()
    
class MultipleFileInput(forms.ClearableFileInput):
    allow_multiple_selected = True

class MultipleFileField(forms.FileField):
    def __init__(self, *args, **kwargs):
        kwargs.setdefault("widget", MultipleFileInput())
        super().__init__(*args, **kwargs)

    def clean(self, data, initial=None):
        single_file_clean = super().clean
        if isinstance(data, (list, tuple)):
            result = [single_file_clean(d, initial) for d in data]
        else:
            result = single_file_clean(data, initial)
        return result

class AttestForm(forms.ModelForm):
    class Meta:
        model = attest
        fields = "__all__"

    def __init__(self, *args, **kwargs):
        # Lấy đối tượng request được truyền vào từ admin
        self.request = kwargs.pop('request', None)
        super().__init__(*args, **kwargs)
    
    def clean(self):
        cleaned_data = super().clean()
        common_attest = cleaned_data.get("common_attest")

        if common_attest:
            # Sao chép giá trị từ common_attest
            cleaned_data["title"] = common_attest.title
            cleaned_data["body"] = common_attest.body
            # Thêm các trường khác nếu cần
        return cleaned_data
    
    # photo muntiple
    
    photos = MultipleFileField(label='Hình ảnh', required=False)

    def clean_photos(self):
        """Make sure only images can be uploaded."""
        for upload in self.files.getlist("photos"):
            validate_image_file_extension(upload)
            predict_image(upload, self.request)

    def save_photos(self, show):
        """Process each uploaded image."""
        for upload in self.files.getlist("photos"):
            photo = PhotoAttest(show=show, photo=upload)
            photo.save()

class CommonAttestForm(forms.ModelForm):
    class Meta:
        model = common_attest
        fields = "__all__"
    
    # photo muntiple
    
    photos = MultipleFileField(label='Hình ảnh', required=False)

    def clean_photos(self):
        """Make sure only images can be uploaded."""
        for upload in self.files.getlist("photos"):
            validate_image_file_extension(upload)

    def save_photos(self, show):
        """Process each uploaded image."""
        for upload in self.files.getlist("photos"):
            photo = PhotoCommonAttest(show=show, photo=upload)
            photo.save()


   