# Your CPA Expert - Automation Push Script
# This script commits and pushes all changes to your GitHub repository.

$repoUrl = "https://github.com/ffcu-pinellas/yourcpaexpert.com.git"

Write-Host "--- Your CPA Expert: Git Push Automation ---" -ForegroundColor Cyan

# 1. Initialize Git if not already done
if (!(Test-Path .git)) {
    Write-Host "Initializing Git repository..."
    git init
    git remote add origin $repoUrl
}

# 2. Stage all changes
Write-Host "Staging changes..."
git add .

# 3. Commit
$commitMsg = Read-Host "Enter commit message (default: 'Finalizing World-Class CPA Portal')"
if ([string]::IsNullOrWhiteSpace($commitMsg)) {
    $commitMsg = "Finalizing World-Class CPA Portal"
}

git commit -m $commitMsg

# 4. Push to Main
Write-Host "Pushing to GitHub..." -ForegroundColor Yellow
git branch -M main
git push -u origin main

Write-Host "--- Done! Your code is now on GitHub ---" -ForegroundColor Green
Write-Host "Next step: Log into Hostinger hPanel > Git > Deploy from GitHub."
