<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Company Registration Confirmation</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            line-height: 1.6;
            color: #333;
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
            background-color: #f9f9f9;
        }
        .email-container {
            background: white;
            border-radius: 10px;
            padding: 30px;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
        }
        .header {
            text-align: center;
            border-bottom: 3px solid #ff6600;
            padding-bottom: 20px;
            margin-bottom: 30px;
        }
        .logo {
            color: #ff6600;
            font-size: 28px;
            font-weight: bold;
            margin-bottom: 10px;
        }
        .title {
            color: #2c3e50;
            font-size: 24px;
            margin-bottom: 20px;
        }
        .content {
            margin-bottom: 30px;
        }
        .highlight {
            background-color: #fff3e0;
            padding: 15px;
            border-left: 4px solid #ff6600;
            margin: 20px 0;
        }
        .contact-info {
            background-color: #f8f9fa;
            padding: 20px;
            border-radius: 8px;
            margin: 20px 0;
        }
        .footer {
            text-align: center;
            font-size: 14px;
            color: #666;
            border-top: 1px solid #eee;
            padding-top: 20px;
            margin-top: 30px;
        }
        .btn {
            display: inline-block;
            background-color: #ff6600;
            color: white;
            padding: 12px 24px;
            text-decoration: none;
            border-radius: 5px;
            margin: 10px 0;
        }
    </style>
</head>
<body>
    <div class="email-container">
        <div class="header">
            <div class="logo">Patron Accounting LLP</div>
            <p style="color: #666; margin: 0;">Your Premier Accounting Partner</p>
        </div>

        <h1 class="title">Thank You for Your Interest!</h1>

        <div class="content">
            <p>Dear {{ $registrationData['name'] ?? 'Valued Client' }},</p>

            <p>Thank you for your interest in registering your Private Limited Company with <strong>Patron Accounting LLP</strong>. We have received your inquiry and our expert team will get in touch with you shortly.</p>

            <div class="highlight">
                <h3 style="margin-top: 0; color: #ff6600;">Your Inquiry Details:</h3>
                <p><strong>Name:</strong> {{ $registrationData['name'] ?? 'Not provided' }}</p>
                <p><strong>Email:</strong> {{ $registrationData['email'] }}</p>
                <p><strong>Mobile:</strong> {{ $registrationData['mobile'] }}</p>
                <p><strong>Location:</strong> {{ $registrationData['location'] }}</p>
                <p><strong>Service:</strong> Private Limited Company Registration</p>
            </div>

            <h3 style="color: #2c3e50;">What happens next?</h3>
            <ul>
                <li>Our business registration expert will contact you within 2-4 hours</li>
                <li>We'll discuss your specific requirements and provide a customized solution</li>
                <li>Complete documentation support and filing assistance</li>
                <li>Post-incorporation compliance and banking support</li>
            </ul>

            <div class="contact-info">
                <h3 style="margin-top: 0; color: #ff6600;">Need Immediate Assistance?</h3>
                <p><strong>Call us directly:</strong> <a href="tel:+919459456700">+91 945 945 6700</a></p>
                <p><strong>Email:</strong> <a href="mailto:info@sequelzone.com">info@sequelzone.com</a></p>
                <p><strong>Business Hours:</strong> Monday to Saturday, 9:00 AM - 7:00 PM</p>
            </div>

            <h3 style="color: #2c3e50;">Why Choose Patron Accounting LLP?</h3>
            <ul>
                <li>✅ Expert assistance & filing in just 2 days</li>
                <li>✅ Affordable, transparent pricing starting at ₹999</li>
                <li>✅ Complete compliance handling & post-incorporation support</li>
                <li>✅ 1000+ happy clients with 99% success rate</li>
                <li>✅ 24/7 customer support</li>
            </ul>
        </div>

        <div class="footer">
            <p>This is an automated confirmation email. Please do not reply to this email.</p>
            <p>© {{ date('Y') }} Patron Accounting LLP. All rights reserved.</p>
            <p style="font-size: 12px; color: #999;">
                Your business success is our priority. We're here to help you grow!
            </p>
        </div>
    </div>
</body>
</html>