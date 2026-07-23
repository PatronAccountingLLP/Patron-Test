# WhatsApp Integration Guide - Free Options

This guide explains how to integrate WhatsApp messaging for sending NOC certificates to users. All options listed are **FREE** or have substantial free tiers.

---

## Option 1: CallMeBot API (100% FREE - Easiest)

### ✅ Pros:
- Completely free forever
- No registration needed
- No credit card required
- Instant setup

### ❌ Cons:
- Each user must authorize the bot first
- Works only for individual numbers
- Not suitable for mass messaging

### Setup Steps:

1. **User Side** (One-time setup per WhatsApp number):
   - Add this number to WhatsApp contacts: **+34 644 44 93 81**
   - Send this message to that number: `I allow callmebot to send me messages`
   - Bot will reply with your personal API key
   - Save this API key

2. **Developer Side** (Your setup):
   - Add to `.env` file:
     ```env
     CALLMEBOT_API_KEY=your_api_key_here
     ```
   
3. **Uncomment the code** in `FrontendController.php` (lines marked with OPTION 1)

4. **Test it**: Fill the NOC form and check if you receive WhatsApp message

### API Documentation:
https://www.callmebot.com/blog/free-api-whatsapp-messages/

---

## Option 2: Twilio WhatsApp API (FREE Trial $15 Credit)

### ✅ Pros:
- Professional solution
- Easy to implement
- Good documentation
- $15 free trial credit (~700 messages)

### ❌ Cons:
- Requires Twilio account
- Need credit card for verification (not charged)
- Recipients must opt-in via sandbox

### Setup Steps:

1. **Create Twilio Account**:
   - Go to: https://www.twilio.com/try-twilio
   - Sign up (free trial, no charges)
   - Get $15 credit

2. **Setup WhatsApp Sandbox**:
   - Go to Console → Messaging → Try it out → Send a WhatsApp message
   - Follow instructions to join sandbox (send code from your WhatsApp)
   - Note your sandbox number

3. **Get API Credentials**:
   - Account SID: Found in dashboard
   - Auth Token: Found in dashboard
   - WhatsApp From Number: Your sandbox number (starts with +1 415...)

4. **Install Twilio SDK**:
   ```bash
   composer require twilio/sdk
   ```

5. **Add to `.env` file**:
   ```env
   TWILIO_SID=your_account_sid
   TWILIO_AUTH_TOKEN=your_auth_token
   TWILIO_WHATSAPP_FROM=+14155238886
   ```

6. **Uncomment the code** in `FrontendController.php` (lines marked with OPTION 2)

7. **Test it**: Recipient must first join sandbox by sending the code

### API Documentation:
https://www.twilio.com/docs/whatsapp/quickstart/php

---

## Option 3: Meta WhatsApp Cloud API (1000 FREE messages/month)

### ✅ Pros:
- Official WhatsApp API
- 1000 free conversations per month (forever)
- Professional and scalable
- No sandbox restrictions

### ❌ Cons:
- Complex setup process
- Requires Facebook Business account
- Needs app review for production
- More configuration needed

### Setup Steps:

1. **Create Facebook Developer Account**:
   - Go to: https://developers.facebook.com
   - Create account and verify

2. **Create Facebook Business Account**:
   - Go to: https://business.facebook.com
   - Create business account

3. **Create WhatsApp Business App**:
   - Go to Facebook Developer Dashboard
   - Create New App → Business Type
   - Add WhatsApp product

4. **Setup WhatsApp**:
   - Add phone number (can use test number first)
   - Get access token from dashboard
   - Get Phone Number ID

5. **Add to `.env` file**:
   ```env
   WHATSAPP_ACCESS_TOKEN=your_access_token
   WHATSAPP_PHONE_NUMBER_ID=your_phone_number_id
   ```

6. **Uncomment the code** in `FrontendController.php` (lines marked with OPTION 3)

7. **Test with Test Numbers**:
   - Add test numbers in dashboard
   - Send messages to test numbers
   - Verify messages received

8. **Go Live** (Optional):
   - Submit app for review
   - Get approved
   - Use with any phone number

### API Documentation:
https://developers.facebook.com/docs/whatsapp/cloud-api/get-started

---

## Recommended Choice by Use Case:

### For Testing/Personal Use:
→ **CallMeBot API** (Easiest, 100% free)

### For Small Business (< 700 messages):
→ **Twilio** (Professional, easy setup, $15 credit)

### For Production/Large Scale:
→ **Meta WhatsApp Cloud API** (1000 free/month, scalable)

---

## Current Implementation Status:

✅ Database schema ready (whatsapp_number column added)
✅ Frontend form with WhatsApp popup implemented
✅ Backend validation and storage working
✅ Code structure prepared for all 3 options
⏳ Waiting for API credentials to activate

---

## Quick Start (Choose One):

### Activate CallMeBot (Fastest - 2 minutes):
1. Add +34 644 44 93 81 to WhatsApp
2. Send: "I allow callmebot to send me messages"
3. Copy API key received
4. Add to .env: `CALLMEBOT_API_KEY=your_key`
5. Uncomment OPTION 1 code in FrontendController.php

### Activate Twilio (Easy - 10 minutes):
1. Sign up at twilio.com
2. Get sandbox WhatsApp number
3. Copy Account SID and Auth Token
4. Run: `composer require twilio/sdk`
5. Add credentials to .env
6. Uncomment OPTION 2 code in FrontendController.php

### Activate Meta Cloud API (Professional - 30 minutes):
1. Create Facebook Developer account
2. Create Facebook Business account
3. Create WhatsApp Business App
4. Get Access Token and Phone Number ID
5. Add credentials to .env
6. Uncomment OPTION 3 code in FrontendController.php

---

## Testing:

After activating any option:

1. Go to NOC Certificate form
2. Fill all details
3. Click "Download your document"
4. Enter WhatsApp number in popup
5. Click "Send Document"
6. Check WhatsApp for notification message
7. Check `storage/logs/laravel.log` for API responses

---

## Need Help?

Check logs at: `storage/logs/laravel.log`

All WhatsApp API calls are logged with full details for debugging.
