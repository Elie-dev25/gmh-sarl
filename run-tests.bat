@echo off
REM ============================================================
REM Run PHPUnit tests with coverage for SonarQube
REM ============================================================

echo.
echo [1/3] Installing dependencies...
if not exist "vendor" (
    composer install
) else (
    echo     Dependencies already installed.
)

echo.
echo [2/3] Creating coverage directory...
if not exist "coverage" mkdir coverage

echo.
echo [3/3] Running PHPUnit with coverage...
vendor\bin\phpunit --coverage-clover coverage\coverage.xml --coverage-html coverage\html --log-junit coverage\junit.xml

echo.
echo ============================================================
echo Coverage report generated in: coverage\coverage.xml
echo HTML report: coverage\html\index.html
echo.
echo Now run: sonar-scanner
echo ============================================================
pause
