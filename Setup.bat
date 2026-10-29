@echo off
setlocal
cd /d "%~dp0"

where php >nul 2>nul
if errorlevel 1 if exist "C:\xampp\php\php.exe" set "PATH=C:\xampp\php;%PATH%"
where php >nul 2>nul
if errorlevel 1 (
    echo PHP was not found. Install PHP 8.2 or later, or add XAMPP PHP to PATH.
    goto failed
)

where composer >nul 2>nul
if errorlevel 1 (
    echo Composer was not found. Install Composer for Windows and reopen this script.
    goto failed
)

if not exist ".env" copy /Y ".env.example" ".env" >nul

echo Installing the Laravel framework and dependencies.
echo This step requires a working connection to Packagist and GitHub.
call composer install --prefer-dist
if errorlevel 1 goto failed

php artisan config:clear
if errorlevel 1 goto failed
findstr /R /C:"^APP_KEY=base64:" ".env" >nul
if errorlevel 1 (
    php artisan key:generate
    if errorlevel 1 goto failed
)

php artisan route:list
if errorlevel 1 goto failed
php artisan view:cache
if errorlevel 1 goto failed

echo.
echo Setup finished. Double-click Start-POS.bat to start SwiftPOS.
pause
exit /b 0

:failed
echo.
echo Setup could not finish. Read the error above.
echo For curl error 28, use a working network and run Setup.bat again.
echo Keep the project files; a retry can resume dependency installation.
pause
exit /b 1
