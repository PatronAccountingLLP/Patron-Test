<div style="margin-top:40px;padding:32px;border:1px solid #E5E5E5;">

    <p style="font-size:14px;line-height:1.2;margin-bottom:8px;">
        <strong>{{ $company_name }}</strong>
    </p>

    <p style="font-size:14px;line-height:1.2;margin-bottom:8px;">
        <strong>CIN: {{ $cin }}</strong>
    </p>

    <p style="font-size:14px;line-height:1.2;margin-bottom:16px;">
        <strong>Registered Office Address: </strong>{{ $registered_office }}
    </p>

    <p style="font-size:14px;line-height:1.2;margin-bottom:16px;text-align:center;">
        <strong>CERTIFIED TRUE COPY OF THE BOARD RESOLUTION</strong>
    </p>

    <p style="font-size:14px;line-height:1.2;margin-bottom:16px;">Passed at the Meeting of the Board of Directors of the Company held on <strong>{{ $formatted_meeting_date }}</strong> at <strong>{{ $meeting_time }}</strong> at the Registered Office of the Company.
    </p>

    <p style="font-size:14px;line-height:1.2;margin-bottom:16px;text-align:center;">
        <strong>AUTHORISATION FOR GST REGISTRATION AND COMPLIANCE</strong>
    </p>

    <p style="font-size:14px;line-height:1.2;margin-bottom:16px;text-align:justify;">
<strong>RESOLVED THAT</strong> Mr./Ms. <strong>{{ $authorized_person_name }}</strong>, <strong>{{ $authorized_designation }}</strong> of the Company, be and is hereby appointed as the Authorised Signatory for the enrolment of the Company on the Goods and Services Tax (GST) System Portal and to sign and submit various documents electronically and/or physically, and to make registrations, communications, representations, 
        modifications, or alterations on behalf of the Company before the Central GST and/or the concerned State GST authorities as and when required.
    </p>

    <p style="font-size:14px;line-height:1.2;margin-bottom:16px;text-align:justify;">
<strong>RESOLVED FURTHER THAT</strong> Mr./Ms. <strong>{{ $authorized_person_name }}</strong>,<strong>{{ $authorized_designation }}</strong> of the Company, be and is hereby authorised to represent the Company and to take necessary actions on all Goods and Services Tax related matters, including but not limited to presenting documents and records on behalf of the Company, liaising and representing the Company for registration 
        purposes, and making any alterations, additions, or corrections to the documents, papers, and forms filed with the GST authorities as and when required.
    </p>

    <p style="font-size:14px;line-height:1.2;margin-bottom:16px;text-align:justify;">
<strong>RESOLVED FURTHER THAT</strong> Mr./Ms. <strong>{{ $authorized_person_name }}</strong>, <strong>{{ $authorized_designation }}</strong> of the Company, be and is hereby authorised on behalf of the Company to sign returns, documents, letters, correspondences, and other papers, and to represent the Company for assessments, appeals, refunds, or any other matters before the Goods and Services Tax authorities as and when required.
    </p>

    <p style="font-size:14px;line-height:1.2;margin-bottom:16px;">
<strong>Certified True Copy</strong>
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