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

    <p style="font-size:14px;line-height:1.2;margin-bottom:16px; text-align:justify;">Passed at the Meeting of the Board of Directors of <strong>{{ $company_name }}</strong> held on <strong>{{ $formatted_meeting_date }}</strong> at 
        <strong>{{ $meeting_time }}</strong> at the Registered Office of the Company.
    </p>

    <p style="font-size:14px;line-height:1.2;margin-bottom:16px;text-align:center;">
        <strong>NO OBJECTION CERTIFICATE FOR USE OF PREMISES AS REGISTERED OFFICE</strong>
    </p>

    <p style="font-size:14px;line-height:1.2;margin-bottom:16px; text-align:justify;">
The Chairperson informed the Board that <strong>{{ $requesting_company_name }}</strong>, a proposed/existing <strong>{{ $requesting_company_type }}</strong>, has approached the Company seeking permission to use the premises situated at <strong>{{ $premises_address }}</strong> as its registered office address. The Board discussed the request and after due deliberations, the following resolution was passed unanimously:
    </p>

    <p style="font-size:14px;line-height:1.2;margin-bottom:16px; text-align:justify;">
<strong>RESOLVED THAT</strong> the permission of the Board be and is hereby granted to <strong>{{ $requesting_company_name }}</strong> for using the premises situated at <strong>{{ $premises_address }}</strong> as its registered office address.
    </p>

    <p style="font-size:14px;line-height:1.2;margin-bottom:16px; text-align:justify;">
<strong>RESOLVED FURTHER THAT</strong> any Director of the Company be and is hereby severally authorised to provide a copy of utility bill, rent agreement, property documents, and such other documents as address proofs, along with a certified true copy of this resolution to the Registrar of Companies, GST authorities, or any other statutory authority as may be required to give effect to the aforesaid resolution.
    </p>

    <p style="font-size:14px;line-height:1.2;margin-bottom:16px;">
For <strong>{{ $company_name }}</strong>
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