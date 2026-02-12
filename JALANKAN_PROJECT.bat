@echo off
echo ==========================================
echo    STARTUP PROJECT SMK GITA KIRTTI
echo ==========================================
echo.
echo 1. Pastikan XAMPP Control Panel sudah dibuka.
echo 2. Pastikan module Apache dan MySQL sudah di-start (berwarna hijau).
echo.
echo Sedang menyiapkan server PHP...
echo.
cd /d "%~dp0"
d:\xampp\php\php.exe -S localhost:8000
pause
