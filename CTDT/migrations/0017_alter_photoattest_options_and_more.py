# Generated by Django 4.2.14 on 2025-02-20 16:30

import CTDT.models
from django.db import migrations, models


class Migration(migrations.Migration):

    dependencies = [
        ('CTDT', '0016_rename_showphoto_photoattest_and_more'),
    ]

    operations = [
        migrations.AlterModelOptions(
            name='photoattest',
            options={},
        ),
        migrations.AlterModelOptions(
            name='photocommonattest',
            options={},
        ),
        migrations.AlterField(
            model_name='photoattest',
            name='photo',
            field=models.ImageField(blank=True, upload_to=CTDT.models.photo_upload_to, verbose_name='Hình'),
        ),
        migrations.AlterField(
            model_name='photocommonattest',
            name='photo',
            field=models.ImageField(blank=True, upload_to=CTDT.models.photo_upload_to, verbose_name='Hình'),
        ),
    ]
