# Generated by Django 4.2.14 on 2025-01-14 15:16

from django.db import migrations, models
import django.db.models.deletion


class Migration(migrations.Migration):

    dependencies = [
        ('CTDT', '0011_remove_attest_common_attest'),
    ]

    operations = [
        migrations.AddField(
            model_name='attest',
            name='common_attest',
            field=models.ForeignKey(blank=True, null=True, on_delete=django.db.models.deletion.SET_NULL, to='CTDT.common_attest', verbose_name='Minh chứng dùng chung'),
        ),
    ]
