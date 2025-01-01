# Generated by Django 4.2.14 on 2025-01-01 04:08

from django.db import migrations, models
import django.db.models.deletion


class Migration(migrations.Migration):

    dependencies = [
        ('CTDT', '0006_alter_attest_options_alter_box_options_and_more'),
    ]

    operations = [
        migrations.AddField(
            model_name='attest',
            name='is_common',
            field=models.BooleanField(default=False, verbose_name='Là minh chứng dùng chung'),
        ),
        migrations.AlterField(
            model_name='box',
            name='id',
            field=models.CharField(max_length=20, primary_key=True, serialize=False),
        ),
        migrations.CreateModel(
            name='common_attest',
            fields=[
                ('id', models.BigAutoField(auto_created=True, primary_key=True, serialize=False, verbose_name='ID')),
                ('common_attest_id', models.CharField(max_length=100)),
                ('common_attest_stt', models.CharField(max_length=10, verbose_name='STT')),
                ('title', models.CharField(max_length=250, verbose_name='Minh chứng')),
                ('body', models.TextField(verbose_name='Nội dung')),
                ('performer', models.TextField(verbose_name='Nơi ban hành')),
                ('note', models.TextField(blank=True, null=True, verbose_name='Ghi chú')),
                ('slug', models.SlugField(max_length=150)),
                ('image', models.ImageField(blank=True, default='fallback.jpeg', upload_to='', verbose_name='Hình')),
                ('created_on', models.DateTimeField(auto_now_add=True, verbose_name='Ngày tạo')),
                ('box', models.ForeignKey(on_delete=django.db.models.deletion.CASCADE, to='CTDT.box', verbose_name='Hộp')),
            ],
            options={
                'verbose_name': 'Minh chứng dùng chung',
                'verbose_name_plural': 'Các minh chứng dùng chung',
            },
        ),
        migrations.AddField(
            model_name='attest',
            name='common_attest',
            field=models.ForeignKey(blank=True, null=True, on_delete=django.db.models.deletion.SET_NULL, to='CTDT.common_attest', verbose_name='Minh chứng dùng chung'),
        ),
        migrations.AddConstraint(
            model_name='common_attest',
            constraint=models.UniqueConstraint(fields=('common_attest_id', 'common_attest_stt'), name='unique_common_attest_id_common_attest_stt'),
        ),
    ]