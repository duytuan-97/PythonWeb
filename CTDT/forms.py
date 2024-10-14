from django import forms
from .models import UploadedFile

class UploadFileForm(forms.ModelForm):
    class Meta:
        model = UploadedFile
        fields = ['file']

class FileUploadForm(forms.Form):
    file = forms.FileField()