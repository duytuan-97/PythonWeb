from django.urls import path
from . import views

app_name = 'posts'

urlpatterns = [
   # path('', views.index),
   # path('', views.posts_list_test, name="list"),
   path('dashboard_test', views.dashboard_test, name="dashboard_test"),
   path('posts_list_test', views.posts_list_test, name="list_test"),
   path('posts_new_test', views.posts_new_test, name="new_test"),
   path('<slug:slug>', views.post_page, name="page"),
   #xử lý file
   # path('upload/', views.upload_file, name='upload_file'),
   path('', views.upload_file, name='upload_file'),
]
