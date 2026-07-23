# UltraMsg WhatsApp Integration - Troubleshooting

## ❌ CURRENT ISSUE IDENTIFIED

### Error Message from Log:
```
"Your instance has been Stopped due to non-payment. you can activate this instance by extending your subscription. Payment information updates every 5 minutes."
```

### What This Means:
Your UltraMsg instance **`instance7298`** has been **STOPPED** because the subscription needs to be renewed or paid.

---

## ✅ SOLUTION: How to Fix

### Step 1: Activate Your UltraMsg Account

1. **Login to UltraMsg Dashboard**
   - Go to: https://ultramsg.com/
   - Login with your credentials

2. **Check Subscription Status**
   - Navigate to your instance dashboard
   - Look for **instance7298** or your active instance
   - Check if it says "Stopped" or "Inactive"

3. **Extend/Activate Subscription**
   - Click on "Extend Subscription" or "Activate"
   - Choose a plan (Free or Paid)
   - Complete the payment/activation process

4. **Connect WhatsApp Number**
   - Make sure your WhatsApp number **7834998131** is connected
   - Scan QR code if required
   - Verify the connection status shows "Connected"

5. **Get Correct Credentials**
   - Copy your **Instance ID** (e.g., instance7298)
   - Copy your **Token** (the long alphanumeric string)

---

### Step 2: Update Your .env File

Open your `.env` file and update these values with correct ones:

```env
# UltraMsg WhatsApp API Configuration
ULTRAMSG_INSTANCE_ID=your_actual_instance_id
ULTRAMSG_TOKEN=your_actual_token_from_dashboard
```

**Current values (may need updating):**
```env
ULTRAMSG_INSTANCE_ID=instance7298
ULTRAMSG_TOKEN=jfdkcnvvjiewoeriutfjkddreirgjfbnvmnkgjf
```

---

### Step 3: Clear Configuration Cache

Run these commands in your terminal:

```bash
php artisan config:clear
php artisan cache:clear
```

---

### Step 4: Test the Integration

1. Go to your NOC registration form
2. Fill all required fields
3. Enter WhatsApp number: **8709774419** (or your test number)
4. Click "Generate Certificate"
5. Check if document is received on WhatsApp

---

## 📊 Understanding the Flow

### Current Working Flow:
```
User Submits Form
        ↓
System Generates PDF
        ↓
PDF Saved: storage/app/public/temp/NOC_Certificate_*.pdf
        ↓
UltraMsg API Called
        ↓
❌ ERROR: Instance Stopped (Payment Issue)
        ↓
Document NOT sent
```

### Expected Working Flow (After Fix):
```
User Submits Form
        ↓
System Generates PDF
        ↓
PDF Saved: storage/app/public/temp/NOC_Certificate_*.pdf
        ↓
UltraMsg API Called
        ↓
✅ SUCCESS: Document Sent
        ↓
User receives PDF on WhatsApp from 7834998131
```

---

## 🔍 How to Check Logs

### View Recent Logs:
```bash
# Windows PowerShell
Get-Content storage\logs\laravel.log -Tail 50

# OR view the whole file
notepad storage\logs\laravel.log
```

### Look for These Messages:

**✅ Success Indicators:**
```
"WhatsApp document sent via UltraMsg: {"id":"message123","status":"sent"}"
```

**❌ Error Indicators:**
```
"UltraMsg cURL Error: ..."
"UltraMsg API error: ..."
"instance has been Stopped"
```

---

## 📝 Test Case Details

### Test Performed:
- **Date:** November 4, 2025
- **WhatsApp Number:** 8709774419
- **Property Owner:** Hanae Gates
- **Business Name:** Madeline Pearso...
- **PDF URL:** http://127.0.0.1:8000/storage/temp/NOC_Certificate_*.pdf

### Result:
❌ **FAILED** - Instance stopped due to non-payment

---

## 🔧 Alternative Solutions (If UltraMsg Doesn't Work)

### Option 1: Use Free UltraMsg Plan
- Sign up for free plan (limited messages)
- No payment required
- Good for testing

### Option 2: Switch to Different Provider
If you can't activate UltraMsg, consider these alternatives:

1. **Twilio** (Free $15 credit)
   - https://www.twilio.com/

2. **Meta WhatsApp Cloud API** (1000 free messages/month)
   - https://developers.facebook.com/docs/whatsapp

3. **WATI** (Free tier available)
   - https://www.wati.io/

---

## 📱 WhatsApp Number Format

### Current Format Used:
```
User enters: 8709774419
System converts to: +918709774419
```

### Supported Formats:
- ✅ `+918709774419` (International format)
- ✅ `918709774419` (With country code)
- ✅ `8709774419` (10-digit Indian number - auto-converted)

---

## 🛠️ API Configuration Details

### Current Configuration:
```php
// UltraMsg API Endpoint
https://api.ultramsg.com/{instance_id}/messages/document

// Method: POST
// Content-Type: application/x-www-form-urlencoded

// Parameters:
- token: Your UltraMsg token
- to: +918709774419 (Recipient's WhatsApp number)
- filename: NOC_Certificate_*.pdf
- document: Full URL to PDF file
- caption: Message text with details
- priority: 10
```

### Expected Response (Success):
```json
{
  "id": "message_id_123",
  "status": "sent"
}
```

### Current Response (Error):
```json
{
  "error": "Your instance has been Stopped due to non-payment..."
}
```

---

## ✅ Checklist Before Testing

- [ ] UltraMsg account is active
- [ ] Subscription is paid/extended
- [ ] Instance shows "Connected" status
- [ ] WhatsApp number 7834998131 is connected
- [ ] Token and Instance ID are correct in .env
- [ ] Configuration cache is cleared
- [ ] Laravel logs directory is writable
- [ ] Storage directory is writable
- [ ] PDF is being generated successfully
- [ ] Internet connection is active

---

## 📞 Support Contacts

### UltraMsg Support
- Website: https://ultramsg.com/
- Documentation: https://docs.ultramsg.com/
- Support: Check dashboard for support options

### Laravel Application Support
- Check logs: `storage/logs/laravel.log`
- Enable debug: Set `APP_DEBUG=true` in .env
- Contact development team

---

## 🎯 Next Steps

1. **Immediate Action Required:**
   - ✅ Activate/Renew UltraMsg subscription
   - ✅ Get correct Instance ID and Token
   - ✅ Update .env file
   - ✅ Clear cache

2. **Test Again:**
   - Fill NOC form
   - Use WhatsApp number: 8709774419
   - Verify document received

3. **Monitor:**
   - Check logs for success message
   - Verify PDF is accessible at URL
   - Confirm WhatsApp delivery

---

## 📌 Important Notes

1. **Payment Updates:**
   - UltraMsg checks payment status every 5 minutes
   - After payment, wait 5-10 minutes before testing

2. **Instance Status:**
   - Must show "Connected" in dashboard
   - WhatsApp number must be active
   - QR code must be scanned if required

3. **URL Accessibility:**
   - PDF URL must be publicly accessible
   - If testing locally, UltraMsg might not access localhost
   - Consider using ngrok or deploy to server

4. **File Size Limits:**
   - Check UltraMsg's document size limits
   - Current NOC PDF is small (should be fine)
   - Consider compression for large documents

---

**Last Updated:** November 4, 2025  
**Status:** ❌ Awaiting UltraMsg Account Activation  
**Action Required:** Activate subscription and update credentials
