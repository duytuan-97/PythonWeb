# Generated by Django 4.2.14 on 2024-08-07 15:35

from django.db import migrations, models


class Migration(migrations.Migration):

    dependencies = [
        ('CTDT', '0002_post_slug'),
    ]

    operations = [
        migrations.AddField(
            model_name='post',
            name='banner',
            field=models.ImageField(blank=True, default='fallback.png', upload_to=''),
        ),
    ]