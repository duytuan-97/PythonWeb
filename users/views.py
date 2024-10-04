from django.shortcuts import render, redirect

from django.contrib.auth.forms import UserCreationForm, AuthenticationForm
from django.contrib.auth import login, logout
# Create your views here.

def register_view(request):
    if request.method == 'POST':
        form = UserCreationForm(request.POST)
        if form.is_valid():
            # form.save()
            login(request, form.save())#sau khi đky thì chuyển sang trang đăng nhập, khi đã xác thực đăngn nhập thì vào trang list_test
            return redirect("posts:list_test")
    else:
        form = UserCreationForm()
    return render(request, "users/register.html", {'form': form})

def login_view(request):
    if request.method == 'POST':
        form = AuthenticationForm(data=request.POST)
        if form.is_valid():
            #Login Here
            login(request, form.get_user())#sau khi đăng nhập thì có thể đăng nhập admin luôn nếu tài khoản là admin
            #dieu kien next
            if 'next' in request.POST:
                return redirect(request.POST.get('next'))
            else:
                return redirect("posts:list_test")
    else:
        form = AuthenticationForm()
    return render(request, "users/login.html", {'form': form})

def logout_view(request):
    if request.method == 'POST':
        logout(request)
        return redirect("posts:list_test")
    