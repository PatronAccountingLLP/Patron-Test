# CallMeBot WhatsApp Setup - Quick Guide

## 🚀 5-Minute Setup (100% FREE)

CallMeBot is now activated! Follow these simple steps to get your API key:

---

## Step 1: Add Bot to WhatsApp (1 minute)

1. Open WhatsApp on your phone
2. Add this number to your contacts: **+34 644 44 93 81**
3. Save contact name as: **CallMeBot** (or any name you like)

---

## Step 2: Get Your API Key (2 minutes)

1. Open WhatsApp chat with **+34 644 44 93 81**
2. Send exactly this message:
   ```
   I allow callmebot to send me messages
   ```
3. Wait a few seconds
4. Bot will reply with your personal API key (looks like: `123456`)
5. **COPY THIS API KEY** - you'll need it in the next step

---

## Step 3: Configure Your Application (1 minute)

1. Open file: `.env` (in your project root folder)
2. Find this line:
   ```
   CALLMEBOT_API_KEY=
   ```
3. Paste your API key after the `=` sign:
   ```
   CALLMEBOT_API_KEY=123456
   ```
4. Save the file

---

## Step 4: Test It! (1 minute)

1. Open your website: http://127.0.0.1:8000
2. Go to the NOC Certificate page
3. Fill in the form details
4. Click "Download your document"
5. Enter your WhatsApp number (10 digits)
6. Click "Send Document"
7. Check your WhatsApp - you should receive a notification message! 📱✅

---

## ✅ What You'll Receive on WhatsApp:

When someone downloads an NOC certificate, they'll get this message:

```
✅ NOC Certificate Generated Successfully!

Dear [Owner Name],

Your NOC Certificate for [Business Name] has been generated and downloaded.

Document Details:
• Property Owner: [Name]
• Business Name: [Company]
• Generated On: [Date & Time]

Thank you for using our service!
- Bizfoc Team
```

---

## 🔍 Troubleshooting:

### "Message not received on WhatsApp"
- ✓ Check if CALLMEBOT_API_KEY is set in .env
- ✓ Verify the API key is correct (no spaces)
- ✓ Make sure you authorized the bot (sent the message)
- ✓ Check phone number format (should be +91 + 10 digits)
- ✓ Check logs: `storage/logs/laravel.log`

### "API key not working"
- ✓ Add bot number again: +34 644 44 93 81
- ✓ Send authorization message again
- ✓ Get new API key
- ✓ Update .env file

### "How to check if it's working?"
- ✓ Check `storage/logs/laravel.log` file
- ✓ Look for: "WhatsApp sent via CallMeBot"
- ✓ It will show API response

---

## 📋 Important Notes:

1. **API Key is Personal**: Each WhatsApp number needs its own API key
2. **Free Forever**: CallMeBot is 100% free with no limits
3. **No Registration**: No email, no credit card needed
4. **Instant**: Messages are sent immediately
5. **Safe**: Your data is not stored by CallMeBot

---

## 🎯 Current Status:

✅ CallMeBot code is activated
✅ Environment variable is ready
✅ Message template is configured
✅ Logging is enabled
⏳ Waiting for you to add API key

---

## 📞 Contact Bot Number:

**WhatsApp:** +34 644 44 93 81

Save this number in your contacts and send the authorization message!

---

## Need Different WhatsApp Service?

If CallMeBot doesn't work for you, check `WHATSAPP_INTEGRATION_GUIDE.md` for:
- Twilio ($15 free credit)
- Meta WhatsApp Cloud API (1000 free messages/month)

---

**Happy Messaging! 🎉**
