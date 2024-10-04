from django.shortcuts import render

# Create your views here.
from django.http import HttpResponse

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
    