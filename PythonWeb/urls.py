"""
URL configuration for PythonWeb project.

The `urlpatterns` list routes URLs to views. For more information please see:
    https://docs.djangoproject.com/en/4.2/topics/http/urls/
Examples:
Function views
    1. Add an import:  from my_app import views
    2. Add a URL to urlpatterns:  path('', views.home, name='home')
Class-based views
    1. Add an import:  from other_app.views import Home
    2. Add a URL to urlpatterns:  path('', Home.as_view(), name='home')
Including another URLconf
    1. Import the include() function: from django.urls import include, path
    2. Add a URL to urlpatterns:  path('blog/', include('blog.urls'))
"""
from django.contrib import admin
from django.urls import path, include

from django.views.generic import TemplateView
from CTDT import views

urlpatterns = [
    
    # url(r'^admin/preferences/$', TemplateView.as_view(template_name='admin/preferences/preferences.html')),
    
    path('admin/CTDT/import_word', views.import_word, name='import_word'),
    path('admin/test', views.upload_file, name='upload_file'),
    # path('admin/test', TemplateView.as_view(template_name='admin/test/test.html')),
    path('admin/', admin.site.urls),
    path('', include('CTDT.urls')),
    path('CTDT/', include('CTDT.urls')),
    path('users/', include('users.urls')),
    
]

#code đổi titles trang admin
admin.site.site_header = "Django administration 123"
admin.site.site_title = "Browser Title"
admin.site.index_title = "Quản lý chương trình đào tạo"

# code thiết lập đường dẫn media
from django.conf.urls.static import static
from django.conf import settings

urlpatterns += static(settings.MEDIA_URL, document_root=settings.MEDIA_ROOT)
