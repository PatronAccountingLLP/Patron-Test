<div style="margin-top:40px;padding:32px;border:1px solid #E5E5E5;">

    <p style="font-size:14px;line-height:1.8;margin-bottom:16px;">
        <strong>{{ $company_name }}</strong>
    </p>

    <p style="font-size:14px;line-height:1.8;margin-bottom:16px;">
        <strong>CIN:</strong> {{ $cin }}
    </p>

    <p style="font-size:14px;line-height:1.8;margin-bottom:16px;">
        <strong>Registered Office:</strong> {{ $registered_office }}
    </p>

    <p style="font-size:14px;line-height:1.8;margin-bottom:16px;">
        <strong>Email:</strong> {{ $email }}
    </p>

    <p style="font-size:14px;line-height:1.8;margin-bottom:16px;text-align:center;">
        <strong>CERTIFIED TRUE COPY OF THE BOARD RESOLUTION</strong>
    </p>

    <p style="font-size:14px;line-height:1.8;margin-bottom:16px;">
        Passed at the Meeting of the Board of Directors of the Company
    </p>

    <p style="font-size:14px;line-height:1.8;margin-bottom:8px;">
        <strong>Date of Meeting:</strong> {{ $formattedMeetingDate }}
    </p>

    <p style="font-size:14px;line-height:1.8;margin-bottom:8px;">
        <strong>Time:</strong> {{ $formattedMeetingTime }}
    </p>

    <p style="font-size:14px;line-height:1.8;margin-bottom:16px;">
        <strong>Venue:</strong> Registered Office of the Company
    </p>

    <p style="font-size:14px;line-height:1.8;margin-bottom:16px;">
        <strong>SUBJECT: DECLARATION OF {{ strtoupper($dividend_type) }} DIVIDEND</strong>
    </p>

    <p style="font-size:14px;line-height:1.8;margin-bottom:16px;">
        The Chairman apprised the Board about the management's recommendation to declare dividend to the members of the Company. After deliberating over the matter, the Board resolved as follows:
    </p>

    <p style="font-size:14px;line-height:1.8;margin-bottom:16px;">
        <strong>"RESOLVED THAT</strong> pursuant to the applicable provisions of the Companies Act, 2013 read with the relevant rules made thereunder, an {{ strtolower($dividend_type) }} dividend of Rs. {{ number_format($dividend_per_share, 2) }}/- (Rupees {{ $dividend_per_share_words ?? '' }} Only) per equity share, at the rate of {{ $dividend_rate }}% on each fully paid-up equity share of Rs. {{ number_format($face_value) }}/- (Rupees {{ $face_value_words ?? '' }} Only) be and is hereby declared out of the profits of the Company for the Financial Year <strong>{{ $financial_year }}</strong>, payable to those Members whose names appear in the Register of Members as on <strong>{{ $formattedRecordDate }}</strong> (Record Date).
    </p>

    <p style="font-size:14px;line-height:1.8;margin-bottom:16px;">
        <strong>RESOLVED FURTHER THAT</strong> the Dividend Account bearing Account Number <strong>{{ $bank_account_number }}</strong> maintained with <strong>{{ $bank_name }}</strong>, <strong>{{ $bank_branch }}</strong>, be used for the purpose of disbursement of the {{ strtolower($dividend_type) }} dividend, and a sum of Rs. {{ number_format($total_dividend_amount) }}/- (Rupees {{ $total_dividend_amount_words ?? '' }} Only), being the total amount of dividend declared, be deposited in the said account within five (5) days from the date of declaration of the {{ strtolower($dividend_type) }} dividend, in compliance with the provisions of the Companies Act, 2013.
    </p>

    <p style="font-size:14px;line-height:1.8;margin-bottom:8px;">
        <strong>RESOLVED FURTHER THAT</strong> any Director or the Company Secretary of the Company be and is hereby authorised to:
    </p>

    <ul style="font-size:14px;line-height:1.8;margin-bottom:16px;margin-left:20px;">
        <li>Make necessary entries in the books of accounts of the Company;</li>
        <li>Arrange for timely disbursement of dividend to eligible shareholders;</li>
        <li>Deduct and deposit applicable Tax Deducted at Source (TDS) as per Income Tax Act;</li>
        <li>File necessary intimations with the Registrar of Companies and Stock Exchanges (if applicable);</li>
        <li>Do all such acts, deeds, matters, and things as may be necessary to give effect to this resolution."</li>
    </ul>

    <p style="font-size:14px;line-height:1.8;margin-bottom:16px;">
        <strong>RESOLVED FURTHER THAT</strong> a certified copy of this resolution be furnished to any person or authority concerned or interested in the matter."
    </p>

    <p style="font-size:14px;line-height:1.8;margin-bottom:24px;">
        <strong>Certified to be a True Copy</strong>
    </p>

    <p style="font-size:14px;line-height:1.8;margin-bottom:16px;">
For <strong>{{ $company_name }}</strong>
    </p>

    <p style="font-size:14px;line-height:1.8;margin-bottom:8px;">
        <strong>Signature:</strong> _________________________
    </p>

    <p style="font-size:14px;line-height:1.8;margin-bottom:8px;">
        <strong>Name:</strong> {{ $director_name }}
    </p>

    <p style="font-size:14px;line-height:1.8;margin-bottom:8px;">
        <strong>Designation:</strong> {{ $designation }}
    </p>

    <p style="font-size:14px;line-height:1.8;margin-bottom:8px;">
        <strong>DIN:</strong> {{ $din }}
    </p>

    <p style="font-size:14px;line-height:1.8;margin-bottom:8px;">
        <strong>Date:</strong> {{ $formattedResolutionDate }}
    </p>

    <p style="font-size:14px;line-height:1.8;margin-bottom:0;">
        <strong>Place:</strong> {{ $place }}
    </p>

</div>