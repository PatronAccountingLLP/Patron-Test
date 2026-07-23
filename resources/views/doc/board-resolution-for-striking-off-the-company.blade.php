<div style="margin-top:40px;padding:32px;border:1px solid #E5E5E5;">

    <p style="font-size:14px;line-height:1;margin-bottom:8px;">
        <strong>{{ $company_name }}</strong>
    </p>

    <p style="font-size:14px;line-height:1;margin-bottom:8px;">
        <strong>CIN: {{ $cin }}</strong>
    </p>

    <p style="font-size:14px;line-height:1;margin-bottom:16px;">
        <strong>Registered Office Address: </strong>{{ $registered_office }}
    </p>

    <p style="font-size:14px;line-height:1.2;margin-bottom:16px;text-align:center;">
        <strong>CERTIFIED TRUE COPY OF THE BOARD RESOLUTION</strong>
    </p>

    <p style="font-size:14px;line-height:1.2;margin-bottom:16px;">Passed at the Meeting of the Board of Directors of the Company held on <strong>{{ $formatted_meeting_date }}</strong> at <strong>{{ $meeting_time }}</strong> at the Registered Office of the Company at <strong>{{ $registered_office }}</strong>
    </p>

    <p style="font-size:14px;line-height:1.2;margin-bottom:16px;text-align:center;">
        <strong>APPLICATION FOR STRIKING OFF THE NAME OF THE COMPANY FROM THE REGISTER OF COMPANIES</strong>
    </p>

    <p style="font-size:14px;line-height:1.2;margin-bottom:16px; text-align:justify;">
<strong>RESOLVED THAT</strong> the consent of the Board of Directors of the Company be and is hereby accorded to make an application to the Registrar of Companies, under the provisions of Section 248 of the Companies Act, 2013, and the rules framed thereunder, for striking off the name of the Company from the Register of Companies maintained by the Registrar.
    </p>

    <p style="font-size:14px;line-height:1.2;margin-bottom:16px; text-align:justify;">
<strong>RESOLVED FURTHER THAT</strong> Mr./Ms.<strong> {{ $application_director_name }}</strong>, Director of the Company (DIN: <strong>{{ $application_director_din }}</strong>), be and is hereby requested to make the application in Form STK-2 and to furnish necessary affidavits and indemnity bond as required under Section 248 of the Companies Act, 2013, as per the draft of the same placed before the meeting and duly initialled by the Chairperson for the purpose of identification, in order to effect the striking off of the Company's name from the Register of Companies.
    </p>

    <p style="font-size:14px;line-height:1.2;margin-bottom:16px; text-align:justify;">
<strong>RESOLVED FURTHER THAT</strong> Mr./Ms. <strong>{{ $authorization_director_name }}</strong>, Director of the Company, be and is hereby authorised to sign, execute, and submit all necessary documents, declarations, and undertakings, to provide any information, clarifications, or explanations as may be required by the Registrar of Companies or any other authority, and to do all such acts, deeds, matters, and things as may be necessary, proper, or expedient to give effect to the above resolutions.
    </p>

    <p style="font-size:14px;line-height:1.2;margin-bottom:16px;">
<strong><i>Certified to be True</i></strong>
    </p>

    <p style="font-size:14px;line-height:1;margin-bottom:16px;">
 <strong>For {{ $company_name }}</strong>
    </p>

    <p style="font-size:14px;line-height:1;margin-bottom:8px;">
<strong>Signature:</strong> _________________________
    </p>

    <p style="font-size:14px;line-height:1;margin-bottom:8px;">
<strong>Name:</strong> {{ $authorized_person_name }}
    </p>

    <p style="font-size:14px;line-height:1;margin-bottom:8px;">
<strong>Designation:</strong> {{ $authorized_designation }}
    </p>

    <p style="font-size:14px;line-height:1;margin-bottom:8px;">
<strong>DIN:</strong> {{ $din }}
    </p>

    <p style="font-size:14px;line-height:1;margin-bottom:8px;">
<strong>Place:</strong> {{ $place }}
    </p>

    <p style="font-size:14px;line-height:1;margin-bottom:0;">
<strong>Date:</strong> {{ $formatted_resolution_date }}
    </p>

</div>