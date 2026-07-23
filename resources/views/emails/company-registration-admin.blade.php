<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>New Company Registration Request</title>
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
        .alert {
            background-color: #d4edda;
            border: 1px solid #c3e6cb;
            color: #155724;
            padding: 15px;
            border-radius: 5px;
            margin: 20px 0;
        }
        .client-details {
            background-color: #f8f9fa;
            padding: 20px;
            border-radius: 8px;
            margin: 20px 0;
            border-left: 4px solid #ff6600;
        }
        .footer {
            text-align: center;
            font-size: 14px;
            color: #666;
            border-top: 1px solid #eee;
            padding-top: 20px;
            margin-top: 30px;
        }
        .urgent {
            background-color: #fff3cd;
            border: 1px solid #ffeaa7;
            color: #856404;
            padding: 15px;
            border-radius: 5px;
            margin: 20px 0;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin: 20px 0;
        }
        table, th, td {
            border: 1px solid #ddd;
        }
        th, td {
            padding: 12px;
            text-align: left;
        }
        th {
            background-color: #f8f9fa;
            color: #2c3e50;
            font-weight: bold;
        }
    </style>
</head>
<body>
    <div class="email-container">
        <div class="header">
            <div class="logo">Patron Accounting LLP Admin Panel</div>
            <p style="color: #666; margin: 0;">New Registration Request Alert</p>
        </div>

        <div class="alert">
            <strong>🔔 New Company Registration Request Received!</strong><br>
            A potential client has submitted a company registration inquiry through the website.
        </div>

        <div class="urgent">
            <strong>⏰ Action Required:</strong> Please contact the client within 2-4 hours as per our service commitment.
        </div>

        <div class="client-details">
            <h3 style="margin-top: 0; color: #ff6600;">Client Information</h3>
            
            <table>
                <tr>
                    <th>Field</th>
                    <th>Details</th>
                </tr>
                <tr>
                    <td><strong>Client Name</strong></td>
                    <td>{{ $registrationData['name'] ?? 'Not provided' }}</td>
                </tr>
                <tr>
                    <td><strong>Email Address</strong></td>
                    <td><a href="mailto:{{ $registrationData['email'] }}">{{ $registrationData['email'] }}</a></td>
                </tr>
                <tr>
                    <td><strong>Mobile Number</strong></td>
                    <td><a href="tel:{{ $registrationData['mobile'] }}">{{ $registrationData['mobile'] }}</a></td>
                </tr>
                <tr>
                    <td><strong>Location</strong></td>
                    <td>{{ $registrationData['location'] }}</td>
                </tr>
                <tr>
                    <td><strong>Service Requested</strong></td>
                    <td>Private Limited Company Registration</td>
                </tr>
                <tr>
                    <td><strong>Request Date & Time</strong></td>
                    <td>{{ now()->format('d M Y, h:i A') }}</td>
                </tr>
                <tr>
                    <td><strong>Source</strong></td>
                    <td>Website Registration Form</td>
                </tr>
            </table>
        </div>

        <div style="background-color: #e3f2fd; padding: 20px; border-radius: 8px; margin: 20px 0;">
            <h3 style="margin-top: 0; color: #1976d2;">Recommended Actions:</h3>
            <ul style="margin: 0; padding-left: 20px;">
                <li>📞 <strong>Call the client</strong> within 2-4 hours</li>
                <li>📧 <strong>Send personalized follow-up email</strong> with detailed service information</li>
                <li>📋 <strong>Prepare requirement checklist</strong> for company registration</li>
                <li>💰 <strong>Prepare custom quotation</strong> based on client's location and requirements</li>
                <li>📅 <strong>Schedule consultation meeting</strong> if needed</li>
            </ul>
        </div>

        <div style="background-color: #f3e5f5; padding: 20px; border-radius: 8px; margin: 20px 0;">
            <h3 style="margin-top: 0; color: #7b1fa2;">Quick Contact Options:</h3>
            <p><strong>📞 Direct Call:</strong> <a href="tel:{{ $registrationData['mobile'] }}">{{ $registrationData['mobile'] }}</a></p>
            <p><strong>📧 Email Reply:</strong> <a href="mailto:{{ $registrationData['email'] }}?subject=RE: Company Registration Inquiry - Patron Accounting LLP">Send Email</a></p>
            <p><strong>💬 WhatsApp:</strong> <a href="https://wa.me/91{{ $registrationData['mobile'] }}?text=Hello! Thank you for your interest in company registration with Patron Accounting LLP. I'm reaching out regarding your inquiry.">Send WhatsApp Message</a></p>
        </div>

        <div class="footer">
            <p><strong>Patron Accounting LLP</strong> - Admin Notification System</p>
            <p>Generated on {{ now()->format('d M Y, h:i A') }}</p>
            <p style="font-size: 12px; color: #999;">
                This is an automated admin notification. Please take appropriate action promptly.
            </p>
        </div>
    </div>
</body>
</html>