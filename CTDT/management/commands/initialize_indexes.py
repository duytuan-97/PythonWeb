from django.core.management.base import BaseCommand
# from CTDT.image_utils import clean_index, clean_index_pdf, load_index_pdf
from CTDT.models import PDFScanFile, PhotoAttest
from django.conf import settings
import os

class Command(BaseCommand):
    help = 'Initialize and clean indexes for photos and PDFs'

    def handle(self, *args, **kwargs):
        global pdf_paths, labels_pdf, image_paths, labels
        self.stdout.write("Initializing photo index...")
        image_paths = [os.path.join(settings.MEDIA_ROOT, photo.photo.name) for photo in PhotoAttest.objects.all() if photo.photo.name.lower().endswith(('.jpg', '.jpeg', '.png'))]
        labels = [f"photo_{photo.id}" for photo in PhotoAttest.objects.all() if photo.photo.name.lower().endswith(('.jpg', '.jpeg', '.png'))]
        # clean_index()

        self.stdout.write("Initializing PDF index...")
        pdf_paths = [os.path.join(settings.MEDIA_ROOT, pdf_file.file.name) for pdf_file in PDFScanFile.objects.all() if pdf_file.file.name.lower().endswith('.pdf')]
        labels_pdf = [f"{pdf_file.attest.slug}_{pdf_file.file.name}" for pdf_file in PDFScanFile.objects.all() if pdf_file.file.name.lower().endswith('.pdf')]
        # load_index_pdf()
        # clean_index_pdf()

        self.stdout.write(self.style.SUCCESS("Indexes initialized successfully."))