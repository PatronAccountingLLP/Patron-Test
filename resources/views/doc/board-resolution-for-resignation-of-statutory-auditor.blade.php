<div style="margin-top:40px;padding:32px;border:1px solid #E5E5E5;">

    <p style="font-size:14px;line-height:1.2;margin-bottom:8px;">
<strong>{{ $company_name }}</strong>
    </p>

    <p style="font-size:14px;line-height:1.2;margin-bottom:8px;">
<strong>CIN: {{ $cin }}</strong>
    </p>

    <p style="font-size:14px;line-height:1.2;margin-bottom:8px;">
<strong>Registered Office Address: </strong>{{ $registered_office }}
    </p>

    <p style="font-size:14px;line-height:1.2;margin-bottom:8px;">
<strong>Email: {{ $company_email }}</strong>
    </p>

    <p style="font-size:14px;line-height:1.2;margin-bottom:16px;text-align:center;">
        <strong>CERTIFIED TRUE COPY OF THE BOARD RESOLUTION</strong>
    </p>

<p style="font-size:14px;line-height:1.2;margin-bottom:16px;">Passed at the Meeting of the Board of Directors of the Company held on <strong>{{ $formatted_meeting_date }}</strong> at <strong>{{ $meeting_time }}</strong> at the Registered Office of the Company at <strong>{{ $registered_office }}</strong>
    </p>

    <p style="font-size:14px;line-height:1.2;margin-bottom:16px;text-align:center;">
        <strong>RESIGNATION OF STATUTORY AUDITOR</strong>
    </p>

    <p style="font-size:14px;line-height:1.2;margin-bottom:16px; text-align:justify;">
<strong>RESOLVED THAT</strong> pursuant to the provisions of Section 140 of the Companies Act, 2013, read with The Companies (Audit and Auditors) Rules, 2014, and other applicable provisions of the Act (including any statutory modification, amendment, or re-enactment thereof for the time being in force), the resignation of the existing Statutory Auditor, M/s. <strong>{{ $auditor_firm_name }}</strong>, Chartered Accountants, bearing Firm Registration Number (FRN) <strong>{{ $firm_registration_number }}</strong>, as tendered vide their letter dated <strong>{{ $formatted_resignation_date }}</strong>, be and is hereby accepted and taken on record with effect from <strong>{{ $formatted_effective_date }}</strong>.
    </p>

    <p style="font-size:14px;line-height:1.2;margin-bottom:16px; text-align:justify;">
<strong>RESOLVED FURTHER THAT</strong> any Director or the Company Secretary of the Company be and is hereby authorised to file the requisite e-forms with the Registrar of Companies within the stipulated time, and to do all such acts, deeds, matters, and things as may be necessary, expedient, or desirable to give effect to this resolution.
    </p>

    <p style="font-size:14px;line-height:1.2;margin-bottom:16px;">
 <strong>For {{ $company_name }}</strong>
    </p>

    <p style="font-size:14px;line-height:1.2;margin-bottom:8px;">
<strong>Signature:</strong> _________________________
    </p>

    <p style="font-size:14px;line-height:1.2;margin-bottom:8px;">
<strong>Name:</strong> {{ $authorized_person_name }}
    </p>

    <p style="font-size:14px;line-height:1.2;margin-bottom:8px;">
<strong>Designation:</strong> {{ $authorized_designation }}
    </p>

    <p style="font-size:14px;line-height:1.2;margin-bottom:8px;">
<strong>DIN:</strong> {{ $din }}
    </p>

    <p style="font-size:14px;line-height:1.2;margin-bottom:8px;">
<strong>Place:</strong> {{ $place }}
    </p>

    <p style="font-size:14px;line-height:1.2;margin-bottom:0;">
<strong>Date:</strong> {{ $formatted_resolution_date }}
    </p>

</div>