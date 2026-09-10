@echo off
title Estoff Car - Servidor Local
REM ============================================================
REM  Estoff Car - inicia o servidor PHP local para testes
REM  Basta dar dois cliques neste arquivo.
REM  O navegador abre sozinho em http://localhost:8000
REM  Para parar: feche esta janela ou aperte Ctrl + C
REM ============================================================

cd /d "%~dp0"

REM Procura o PHP: primeiro no PATH, depois nas pastas mais comuns
set "PHP_EXE="
where php >nul 2>nul && set "PHP_EXE=php"
if not defined PHP_EXE if exist "C:\php\php.exe" set "PHP_EXE=C:\php\php.exe"
if not defined PHP_EXE if exist "C:\xampp\php\php.exe" set "PHP_EXE=C:\xampp\php\php.exe"
if not defined PHP_EXE if exist "C:\laragon\bin\php\php.exe" set "PHP_EXE=C:\laragon\bin\php\php.exe"

if not defined PHP_EXE goto SEM_PHP

echo.
echo   PHP encontrado em: %PHP_EXE%
echo   Servidor: http://localhost:8000
echo   Para parar: feche esta janela ou aperte Ctrl + C
echo.

REM Abre o navegador com 3 segundos de atraso, para dar tempo do servidor subir
start "" /min cmd /c "timeout /t 3 /nobreak >nul & start "" http://localhost:8000"

REM Inicia o servidor (esta linha segura a janela aberta)
"%PHP_EXE%" -S localhost:8000

echo.
echo   O servidor foi encerrado.
pause
exit /b 0

:SEM_PHP
echo.
echo   [ERRO] O PHP nao foi encontrado no computador.
echo   Passo a passo de instalacao no arquivo README.md
echo.
pause
exit /b 1
