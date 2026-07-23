# UltraMsg WhatsApp API Setup Guide

## Overview
This application now uses **UltraMsg API** to send WhatsApp messages with PDF documents (NOC certificates) to users.

## Configuration

### 1. Environment Variables
The following variables have been added to your `.env` file:

```env
# UltraMsg WhatsApp API Configuration
# Instance ID and Token from your UltraMsg account
# From WhatsApp Number: 7834998131
ULTRAMSG_INSTANCE_ID=instance7298
ULTRAMSG_TOKEN=jfdkcnvvjiewoeriutfjkddreirgjfbnvmnkgjf
```

### 2. From Number
- **WhatsApp Number**: `7834998131`
- This number must be configured in your UltraMsg dashboard
- Make sure this number is verified and active in UltraMsg

### 3. API Endpoint
The application uses the UltraMsg document endpoint:
```
https://api.ultramsg.com/{instance_id}/messages/document
```

## How It Works

### 1. User Flow
1. User fills the NOC registration form on the website
2. User enters their WhatsApp number in the popup modal
3. User clicks "Generate Certificate"
4. System generates PDF certificate
5. PDF is saved temporarily in `storage/app/public/temp/`
6. System sends the PDF document to user's WhatsApp via UltraMsg API
7. User receives the document on WhatsApp from number `7834998131`

### 2. Technical Flow
The `sendWhatsAppDocument()` method in `FrontendController.php`:
- Formats the phone number (adds +91 for India)
- Creates a professional message with document details
- Prepares parameters for UltraMsg API
- Sends document using cURL request
- Logs success/failure for debugging

### 3. Message Format
Users receive:
```
✅ *NOC Certificate Generated Successfully!*

Dear *[Owner Name]*,

Your NOC Certificate for *[Business Name]* has been generated.

📄 *Document Details:*
• Property Owner: [Name]
• Business Name: [Business]
• Generated On: [Date & Time]

📥 *Download Your Document:*
[PDF URL]

⏰ Note: This link will expire in 24 hours.

Thank you for using our service!
- *Bizfoc Team*
```

## API Parameters

### Document Send Parameters
```php
$params = array(
    'token' => 'your_ultramsg_token',
    'to' => '+919876543210',        // User's WhatsApp number
    'filename' => 'document.pdf',    // PDF filename
    'document' => 'https://...',     // Full URL to PDF
    'caption' => 'Message text',     // Message caption
    'priority' => '10',              // Message priority
);
```

## Important Notes

### 1. Phone Number Format
- User enters: `9876543210`
- System converts to: `+919876543210`
- Make sure country code is correct for your region

### 2. PDF Storage
- PDFs are stored in: `storage/app/public/temp/`
- Make sure this directory is writable
- Consider setting up auto-cleanup for old PDFs

### 3. PDF URL
- Must be publicly accessible
- URL format: `https://yourdomain.com/storage/temp/filename.pdf`
- Make sure `storage/app/public` is symlinked

### 4. Error Handling
All errors are logged in Laravel log files:
- Check: `storage/logs/laravel.log`
- Look for: "UltraMsg API error" or "WhatsApp send error"

## Testing

### Test the Integration
1. Go to your NOC registration page
2. Fill the form with test data
3. Enter a test WhatsApp number (make sure it's active)
4. Submit the form
5. Check if you receive the document on WhatsApp

### Verify Configuration
```bash
# Check if .env is loaded correctly
php artisan config:clear
php artisan cache:clear
```

### Check Logs
```bash
# View latest logs
tail -f storage/logs/laravel.log
```

## Troubleshooting

### 1. Document Not Received
**Check:**
- Is the WhatsApp number correct?
- Is the UltraMsg token valid?
- Is the instance ID correct?
- Is the sender number (7834998131) active in UltraMsg?
- Check Laravel logs for errors

### 2. PDF Not Generated
**Check:**
- Is the temp directory writable?
- Are all required fields filled in the form?
- Check Laravel logs for PDF generation errors

### 3. cURL Errors
**Check:**
- Is your server's firewall blocking outgoing requests?
- Is SSL verification working? (we've disabled it for now)
- Try increasing CURLOPT_TIMEOUT if requests are timing out

### 4. Invalid Token
**Solution:**
- Log in to your UltraMsg account
- Go to API settings
- Copy the correct token
- Update ULTRAMSG_TOKEN in .env file
- Run: `php artisan config:clear`

## API Rate Limits
- Check your UltraMsg plan for message limits
- Free plans typically have daily/monthly limits
- Monitor your usage in UltraMsg dashboard

## Security Best Practices

1. **Never expose your token**
   - Keep .env file secure
   - Don't commit .env to git
   - Use different tokens for production/staging

2. **Validate phone numbers**
   - Current validation ensures 10-digit numbers
   - Consider adding more robust validation

3. **Clean up temp files**
   - Set up a cron job to delete old PDFs
   - Consider moving to a more secure storage solution

## Alternative Sending Methods

If you want to send just text (not document):
```php
// Use messages/chat endpoint instead of messages/document
$params = array(
    'token' => $token,
    'to' => $formattedPhone,
    'body' => $message,
    'priority' => '10',
);

curl_setopt($curl, CURLOPT_URL, "https://api.ultramsg.com/{$instanceId}/messages/chat");
```

## Support

### UltraMsg Resources
- Dashboard: https://ultramsg.com/
- API Documentation: https://docs.ultramsg.com/
- Support: Contact UltraMsg support team

### Application Support
- Check Laravel logs: `storage/logs/laravel.log`
- Enable debug mode in .env: `APP_DEBUG=true`
- Contact your development team

## Future Enhancements

1. **Queue Processing**
   - Move WhatsApp sending to a queue
   - Prevents timeout issues
   - Better user experience

2. **Webhook Integration**
   - Set up webhooks to receive delivery status
   - Track message delivery/read status

3. **Template Messages**
   - Use WhatsApp Business templates
   - Better formatting options
   - Pre-approved message formats

4. **Multiple Languages**
   - Send messages in user's preferred language
   - Dynamic message templates

## Changes Made

### Files Modified
1. **app/Http/Controllers/FrontendController.php**
   - Replaced CallMeBot API with UltraMsg API
   - Updated `sendWhatsAppDocument()` method
   - Now sends actual PDF document instead of just download link

2. **.env**
   - Removed: `CALLMEBOT_API_KEY`
   - Added: `ULTRAMSG_INSTANCE_ID` and `ULTRAMSG_TOKEN`
   - Updated comments with new setup instructions

### Key Differences from CallMeBot

| Feature | CallMeBot | UltraMsg |
|---------|-----------|----------|
| Message Type | Text only | Text + Documents |
| Setup | User authorization required | API token only |
| Document Sending | Link only | Direct document |
| API Method | GET request | POST request |
| Configuration | Simple | Instance-based |

---

**Last Updated:** November 4, 2025  
**Version:** 1.0  
**From Number:** 7834998131
