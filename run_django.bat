@echo off
cd /d "%~dp0"

:: Chạy Django server trong một cửa sổ mới
start "Django Server" cmd /k python manage.py runserver

:: Chờ cho đến khi server Django chạy hoàn tất
:wait
timeout /t 2 >nul
netstat -an | find "LISTENING" | find ":8000" >nul
if errorlevel 1 goto wait

:: Khi server đã sẵn sàng, mở trình duyệt
start "" http://127.0.0.1:8000

