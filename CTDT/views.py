from django.shortcuts import render

# Create your views here.
from django.http import HttpResponse, HttpResponseRedirect

from CTDT.models import Post
# Create your views here.
def index(request):
#    response = HttpResponse()
#    response.writelines('<h1>Xin chào</h1>')
#    response.write('Đây là app CTDT')
#    return response
    # return render(request, 'pages/home.html')
    
    # Xu Ly với Database
    # a = Post()
    # a.title = 'First Title'
    # a.body = 'Hello World'
    # a.save()

    # return render(request, 'view/index.html')
    return render(request, 'Pages/dashboard.html')

def dashboard_test(request):

    return render(request, 'Pages/dashboard_test.html')

def posts_list_test(request):
    posts = Post.objects.all().order_by('-date')
    return render(request, 'Pages/posts_list_test.html', {'posts': posts})

def post_page(request, slug):
    post = Post.objects.get(slug=slug)
    return render(request, 'Pages/post_page_test.html', {'post': post})


# xác thực mới vào trang được
from django.contrib.auth.decorators import login_required

@login_required(login_url="/users/login/")#kiểm tra xem người dùng đã đăng nhập chưa, nếu chưa quay lại trang đăng nhập
def posts_new_test(request):
    # return render(request, 'Pages/new_post.html')
    return render(request, 'Pages/posts_new_test.html')
    

#Xử lý File
from .forms import UploadFileForm
from .tools import process_file
from django.contrib import messages
from django.shortcuts import redirect

from .forms import FileUploadForm
import os

# def upload_file(request):
#     if request.method == 'POST':
#         form = UploadFileForm(request.POST, request.FILES)
#         if form.is_valid():
#             file = request.FILES['file']  

#             # Lưu file vào thư mục
#             with open('media/' + file.name, 'wb+') as destination:
#                 for chunk in file.chunks():
#                     destination.write(chunk)

#             # Gọi hàm xử lý file
#             process_file('media/' + file.name)

#             messages.success(request, 'Hành động đã được thực hiện thành công!')
#             return redirect('dashboard_test')
#             # return HttpResponseRedirect('/success/')  # Chuyển hướng đến trang thông báo thành công
#     else:
#         form = UploadFileForm()
#     return render(request, 'upload.html', {'form': form})

def upload_file(request):
    if request.method == 'POST':
        form = FileUploadForm(request.POST, request.FILES)
        if form.is_valid():
            uploaded_file = request.FILES['file']
            file_path = os.path.join('media', uploaded_file.name)
            with open(file_path, 'wb+') as destination:
                for chunk in uploaded_file.chunks():
                    destination.write(chunk)
            result_message = process_file(file_path)
            # # return HttpResponse(result_message)
            messages.success(request, 'Đã tạo thư mục theo cấu trúc thành công!')
            return redirect('posts:upload_file')
    else:
        form = FileUploadForm()

    return render(request, 'Pages/upload.html', {'form': form})