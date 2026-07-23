# Company Registration Email Setup

## Overview
The company registration form now includes complete email functionality with:
- Client confirmation emails
- Admin notification emails
- Form validation with Laravel Request classes
- Professional email templates
- Error handling and success messages

## Files Created/Modified

### 1. Form Request Validation
**File**: `app/Http/Requests/CompanyRegistrationRequest.php`
- Validates email, mobile, and location fields
- Custom error messages
- Phone number regex validation

### 2. Mailable Class
**File**: `app/Mail/CompanyRegistrationMail.php`
- Handles both confirmation and admin notification emails
- Dynamic subject lines based on email type
- Uses separate email templates

### 3. Email Templates
**Files**: 
- `resources/views/emails/company-registration-confirmation.blade.php`
- `resources/views/emails/company-registration-admin.blade.php`

Professional HTML email templates with:
- Responsive design
- Company branding
- Styled buttons and contact information
- Client details display

### 4. Controller Method
**File**: `app/Http/Controllers/FrontendController.php`
- `handleRegistration()` method processes form submission
- Sends confirmation email to client
- Sends notification email to admin
- Error handling and logging
- Success/error message redirection

### 5. Routes
**File**: `routes/web.php`
- POST route for form submission
- Email preview routes for development

### 6. Frontend Form
**File**: `resources/views/frontend/index.blade.php`
- Updated form action to use Laravel route
- Added CSRF protection
- Form validation error display
- Success/error alert messages
- Input field validation classes with old() values

## Configuration

### Environment Variables (.env)
```env
# Mail Configuration
MAIL_MAILER=smtp
MAIL_HOST=mailpit                    # For development
MAIL_PORT=1025                       # For development
MAIL_USERNAME=null
MAIL_PASSWORD=null
MAIL_ENCRYPTION=null
MAIL_FROM_ADDRESS="info@sequelzone.com"
MAIL_FROM_NAME="SequelZone Accounting LLP"

# Admin email for receiving notifications
ADMIN_EMAIL="admin@sequelzone.com"
```

### Production Mail Settings

#### For Gmail SMTP:
```env
MAIL_MAILER=smtp
MAIL_HOST=smtp.gmail.com
MAIL_PORT=587
MAIL_USERNAME=your-email@gmail.com
MAIL_PASSWORD=your-app-password
MAIL_ENCRYPTION=tls
```

#### For Other SMTP Providers:
- **Mailgun**: Update host, port, and credentials
- **SendGrid**: Use SMTP settings from SendGrid
- **AWS SES**: Configure AWS SES SMTP settings

## Testing

### Development Testing
1. Make sure Mailpit is running (comes with Laravel Sail)
2. Visit: `http://127.0.0.1:8000` 
3. Fill out the registration form
4. Check Mailpit dashboard: `http://localhost:8025`

### Email Preview (Development Only)
- Confirmation Email: `http://127.0.0.1:8000/email-preview/confirmation`
- Admin Email: `http://127.0.0.1:8000/email-preview/admin`

## Features

### Client Experience
- Immediate confirmation email with inquiry details
- Professional branded template
- Contact information for follow-up
- Service benefits and next steps

### Admin Notifications
- Detailed client information
- Contact details with clickable links
- Request timestamp
- WhatsApp quick contact option
- Recommended action items

### Form Validation
- Email format validation
- 10-digit mobile number validation
- Required field validation
- Real-time error display
- Old input retention on validation errors

### Error Handling
- Email sending failures are logged
- Graceful fallback messages
- Form data preservation
- User-friendly error messages

## Security Notes
- CSRF protection enabled
- Input validation and sanitization
- Email rate limiting (can be added)
- Secure email headers

## Customization

### Email Templates
Both email templates can be customized by editing:
- `resources/views/emails/company-registration-confirmation.blade.php`
- `resources/views/emails/company-registration-admin.blade.php`

### Validation Rules
Modify validation rules in:
- `app/Http/Requests/CompanyRegistrationRequest.php`

### Success/Error Messages
Update messages in:
- `app/Http/Controllers/FrontendController.php` (controller messages)
- `resources/views/frontend/index.blade.php` (display templates)

## Production Deployment

1. Update `.env` with production mail settings
2. Remove email preview routes from `routes/web.php`
3. Test email delivery thoroughly
4. Configure proper admin email addresses
5. Set up email monitoring and logging
6. Consider implementing queue-based email sending for better performance

## Commands

### Clear Config Cache (after .env changes):
```bash
php artisan config:clear
```

### Test Email Configuration:
```bash
php artisan tinker
Mail::raw('Test email', function ($message) {
    $message->to('test@example.com')->subject('Test');
});
```

## Troubleshooting

### Common Issues:
1. **Emails not sending**: Check mail configuration in `.env`
2. **Gmail authentication**: Use app passwords, not regular passwords
3. **Mailpit not receiving**: Ensure Mailpit is running on correct port
4. **Validation errors**: Check form field names match validation rules
5. **CSRF errors**: Ensure `@csrf` is present in form

### Logs:
Check Laravel logs for email errors:
```bash
tail -f storage/logs/laravel.log
```