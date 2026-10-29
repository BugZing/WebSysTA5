@echo off
setlocal
cd /d "%~dp0"

where php >nul 2>nul
if errorlevel 1 if exist "C:\xampp\php\php.exe" set "PATH=C:\xampp\php;%PATH%"
where php >nul 2>nul
if errorlevel 1 (
    echo PHP was not found. Add PHP 8.2 or later to PATH.
    pause
    exit /b 1
)

if not exist "vendor\autoload.php" (
    echo Laravel dependencies are missing. Run Setup.bat first on a working connection.
    echo This source ZIP does not include the vendor folder.
    pause
    exit /b 1
)

if not exist ".env" copy /Y ".env.example" ".env" >nul
php artisan config:clear
if errorlevel 1 goto failed
findstr /R /C:"^APP_KEY=base64:" ".env" >nul
if errorlevel 1 (
    php artisan key:generate
    if errorlevel 1 goto failed
)

echo.
echo Open http://127.0.0.1:8000 in your browser.
echo Keep this window open. Press Ctrl+C to stop the server.
php artisan serve --host=127.0.0.1 --port=8000
if errorlevel 1 goto failed
exit /b 0

:failed
echo.
echo The server could not start. Read the error above.
pause
exit /b 1
