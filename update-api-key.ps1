# Update CallMeBot API Key
# Run this after you get your API key from CallMeBot

param(
    [Parameter(Mandatory=$true)]
    [string]$ApiKey
)

Write-Host "=================================" -ForegroundColor Cyan
Write-Host "Updating CallMeBot API Key..." -ForegroundColor Cyan
Write-Host "=================================" -ForegroundColor Cyan
Write-Host ""

# Update .env file
$envFile = ".env"
$content = Get-Content $envFile

# Replace the API key
$updated = $content -replace "CALLMEBOT_API_KEY=.*", "CALLMEBOT_API_KEY=$ApiKey"
$updated | Set-Content $envFile

Write-Host "✅ API Key updated successfully!" -ForegroundColor Green
Write-Host ""
Write-Host "New API Key: $ApiKey" -ForegroundColor Yellow
Write-Host ""
Write-Host "Testing WhatsApp connection..." -ForegroundColor Cyan
Write-Host ""

# Test the connection
php artisan whatsapp:test 7834998131

Write-Host ""
Write-Host "=================================" -ForegroundColor Cyan
