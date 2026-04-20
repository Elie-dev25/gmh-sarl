# ============================================================
# Install SonarScanner CLI on Windows
# Run this script in PowerShell as regular user
# ============================================================

$ErrorActionPreference = "Stop"

# Configuration
$version = "6.2.1.4610"
$installDir = "C:\sonar-scanner"
$zipUrl = "https://binaries.sonarsource.com/Distribution/sonar-scanner-cli/sonar-scanner-cli-$version-windows-x64.zip"
$zipPath = "$env:TEMP\sonar-scanner.zip"
$extractedDir = "$installDir\sonar-scanner-$version-windows-x64"
$binDir = "$extractedDir\bin"

Write-Host "==============================================" -ForegroundColor Cyan
Write-Host "  SonarScanner CLI Installation" -ForegroundColor Cyan
Write-Host "==============================================" -ForegroundColor Cyan

# Create install directory
if (!(Test-Path $installDir)) {
    Write-Host "`n[1/4] Creating directory: $installDir" -ForegroundColor Yellow
    New-Item -ItemType Directory -Path $installDir -Force | Out-Null
} else {
    Write-Host "`n[1/4] Directory exists: $installDir" -ForegroundColor Green
}

# Download
Write-Host "`n[2/4] Downloading SonarScanner $version..." -ForegroundColor Yellow
Write-Host "      From: $zipUrl"
Invoke-WebRequest -Uri $zipUrl -OutFile $zipPath -UseBasicParsing
Write-Host "      Downloaded to: $zipPath" -ForegroundColor Green

# Extract
Write-Host "`n[3/4] Extracting archive..." -ForegroundColor Yellow
Expand-Archive -Path $zipPath -DestinationPath $installDir -Force
Remove-Item $zipPath
Write-Host "      Extracted to: $extractedDir" -ForegroundColor Green

# Add to PATH
Write-Host "`n[4/4] Adding to user PATH..." -ForegroundColor Yellow
$currentPath = [Environment]::GetEnvironmentVariable("Path", "User")

if ($currentPath -notlike "*$binDir*") {
    $newPath = if ([string]::IsNullOrEmpty($currentPath)) { $binDir } else { "$currentPath;$binDir" }
    [Environment]::SetEnvironmentVariable("Path", $newPath, "User")
    Write-Host "      Added to PATH: $binDir" -ForegroundColor Green
} else {
    Write-Host "      Already in PATH" -ForegroundColor Green
}

Write-Host "`n==============================================" -ForegroundColor Cyan
Write-Host "  Installation Complete!" -ForegroundColor Green
Write-Host "==============================================" -ForegroundColor Cyan
Write-Host "`nIMPORTANT: Close and reopen PowerShell, then run:" -ForegroundColor Yellow
Write-Host "  sonar-scanner --version" -ForegroundColor White
Write-Host ""
