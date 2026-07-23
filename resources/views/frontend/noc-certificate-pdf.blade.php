<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>No Objection Certificate</title>
    <style>
        body {
            font-family: 'DejaVu Sans', sans-serif;
            font-size: 14px;
            line-height: 1.8;
            color: #000;
            margin: 40px;
        }
        .certificate-container {
            border: 2px solid #000;
            padding: 40px;
            background: #fff;
        }
        .certificate-header {
            text-align: center;
            margin-bottom: 30px;
            border-bottom: 2px solid #000;
            padding-bottom: 15px;
        }
        .certificate-title {
            font-size: 18px;
            font-weight: bold;
            text-decoration: underline;
            margin-bottom: 10px;
        }
        .certificate-subtitle {
            font-size: 14px;
            font-weight: bold;
            text-align: left;
            margin-top: 20px;
            margin-bottom: 20px;
        }
        .certificate-content {
            text-align: justify;
            margin-bottom: 60px;
        }
        .certificate-content p {
            margin-bottom: 20px;
        }
        .signature-section {
            margin-top: 100px;
            border-top: 1px solid #ccc;
            padding-top: 20px;
        }
        .signature-row {
            display: table;
            width: 100%;
            margin-top: 10px;
        }
        .signature-item {
            display: table-cell;
            width: 33.33%;
            vertical-align: top;
        }
        .signature-label {
            font-weight: bold;
            margin-bottom: 5px;
        }
        .signature-value {
            color: #333;
        }
        strong {
            font-weight: bold;
        }
    </style>
</head>
<body>
    <div class="certificate-container">
        <div class="certificate-header">
            <div class="certificate-title">TO WHOMSOEVER IT MAY CONCERN</div>
        </div>

        <div class="certificate-subtitle"><strong>Sub:</strong> No Objection Certificate</div>

        <div class="certificate-content">
            <p>I, <strong>{{ $data['property_owner_name'] }}</strong> owner of the property situated at <strong>{{ $data['property_address'] }}</strong>, hereby declare and confirm that I have owned the said property, also providing the latest <strong>{{ $data['bill_type'] }}</strong> issued by the {{ $data['state'] }} state. I give my consent to business named <strong>{{ $data['business_name'] }}</strong> where my {{ $data['relation'] }} named <strong>{{ $data['authorized_person_name'] }}</strong> acting as {{ $data['owner_director_partner'] }} to use this premises for the office purposes.</p>

            <p>I hereby convey that I have no objection for {{ $data['authorized_person_name'] }} getting GST Registration Number on my premises for business named {{ $data['business_name'] }}. I hereby declare that I have given this No Objection Certificate with my free consent.</p>

            <p><strong>Signature:</strong></p>
        </div>

        <div class="signature-section">
            <div class="signature-row">
                <div class="signature-item">
                    <div class="signature-label">Name of Owner:</div>
                    <div class="signature-value">{{ $data['property_owner_name'] }}</div>
                </div>
                <div class="signature-item">
                    <div class="signature-label">Place:</div>
                    <div class="signature-value">{{ $data['state'] }}</div>
                </div>
                <div class="signature-item">
                    <div class="signature-label">Date:</div>
                    <div class="signature-value">{{ $formatted_date }}</div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
