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

    <p style="font-size:16px;line-height:1.8;margin-bottom:16px;text-align:center;">
        <strong>CERTIFIED TRUE COPY OF THE BOARD RESOLUTION</strong>
    </p>

    <p style="font-size:14px;line-height:1.8;margin-bottom:16px;text-align:center;">
        Passed at the Meeting of the Board of Directors of the Company
    </p>

    <p style="font-size:14px;line-height:1.8;margin-bottom:16px;">
        <strong>Date of Meeting:</strong> {{ $formattedMeetingDate }}
    </p>

    <p style="font-size:14px;line-height:1.8;margin-bottom:16px;">
        <strong>Time:</strong> {{ $meeting_time }} Hours
    </p>

    <p style="font-size:14px;line-height:1.8;margin-bottom:16px;">
        <strong>Venue:</strong> Registered Office of the Company
    </p>

    <p style="font-size:14px;line-height:1.8;margin-bottom:16px;">
        <strong>SUBJECT: RESIGNATION OF DIRECTOR FROM THE BOARD OF DIRECTORS</strong>
    </p>

    <p style="font-size:14px;line-height:1.8;margin-bottom:16px;">
The Chairman informed the Board that a letter of resignation has been received from the following Director expressing his/her intention to resign from the directorship of the Company:
    </p>

    <p style="font-size:14px;line-height:1.8;margin-bottom:8px;">
        <strong>Name of Director:</strong> {{ $resigning_director_name }}
    </p>

    <p style="font-size:14px;line-height:1.8;margin-bottom:8px;">
        <strong>DIN:</strong> {{ $resigning_director_din }}
    </p>

    <p style="font-size:14px;line-height:1.8;margin-bottom:8px;">
        <strong>Designation:</strong> {{ $resigning_director_designation }}
    </p>

    <p style="font-size:14px;line-height:1.8;margin-bottom:16px;">
        <strong>Date of Resignation:</strong> {{ $formattedResignationDate }}
    </p>

    <p style="font-size:14px;line-height:1.8;margin-bottom:16px;">
<strong>"RESOLVED THAT</strong> pursuant to Section 168 of the Companies Act, 2013 read with the Companies (Appointment and Qualification of Directors) Rules, 2014 and other applicable provisions of the Companies Act, 2013 (including any statutory modification or re-enactment thereof for the time being in force), the resignation of Mr./Ms. <strong>{{ $resigning_director_name }}</strong>, holding DIN: <strong>{{ $resigning_director_din }}</strong>, as {{ $resigning_director_designation }} of the Company, be and is hereby accepted with effect from <strong>{{ $formattedResignationDate }}</strong>.
    </p>

    <p style="font-size:14px;line-height:1.8;margin-bottom:16px;">
<strong>RESOLVED FURTHER THAT</strong> the Board places on record its appreciation for the valuable services rendered by Mr./Ms. <strong>{{ $resigning_director_name }}</strong> during his/her tenure as {{ $resigning_director_designation }} of the Company.
    </p>

    <p style="font-size:14px;line-height:1.8;margin-bottom:16px;">
<strong>RESOLVED FURTHER THAT</strong> any Director of the Company be and is hereby authorised to:
    </p>

    <ul style="font-size:14px;line-height:1.8;margin-bottom:28px;margin-left:20px;">
        <li>File Form DIR-12 (Particulars of appointment of Directors and the Key Managerial Personnel and the changes among them) with the Registrar of Companies within the prescribed time;</li>
        <li>Make necessary entries in the Register of Directors and Key Managerial Personnel;</li>
        <li>Update the records of banks, statutory authorities, and other stakeholders as required;</li>
        <li>Do all such acts, deeds, matters, and things as may be necessary, proper, or expedient for giving effect to this resolution."</li>
    </ul>


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

    <p style="font-size:14px;line-height:1.8;margin-bottom:0;">
        <strong>DIN:</strong> {{ $din }}
    </p>

</div>