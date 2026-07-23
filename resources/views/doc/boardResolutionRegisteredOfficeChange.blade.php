<div style="margin-top:40px;padding:32px;border:1px solid #E5E5E5;">

    <p style="font-size:14px;line-height:1.8;margin-bottom:16px;">
        <strong>{{ $company_name }}</strong>
    </p>

    <p style="font-size:14px;line-height:1.8;margin-bottom:16px;">
        <strong>CIN:</strong> {{ $cin }}
    </p>

    <p style="font-size:14px;line-height:1.8;margin-bottom:16px;">
        <strong>Current Registered Office:</strong> {{ $old_address }}
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
        <strong>SUBJECT: CHANGE OF REGISTERED OFFICE OF THE COMPANY WITHIN THE SAME CITY/TOWN/VILLAGE UNDER THE SAME ROC JURISDICTION</strong>
    </p>

    <p style="font-size:14px;line-height:1.8;margin-bottom:16px;">
        The Chairman informed the Board that due to business requirements, it is proposed to shift the Registered Office of the Company to a new location within the same city/town/village, under the jurisdiction of the same Registrar of Companies. The Board discussed the matter and passed the following resolution unanimously:
    </p>

    <p style="font-size:14px;line-height:1.8;margin-bottom:16px;">
        <strong>"RESOLVED THAT</strong> pursuant to the provisions of Section 12 of the Companies Act, 2013 (including any statutory modification or re-enactment thereof for the time being in force) read with the rules made thereunder, and subject to the approval of shareholders in General Meeting (if required) and subject to such other approvals and consents as may be necessary, the Registered Office of the Company be and is hereby shifted from:
    </p>

    <p style="font-size:14px;line-height:1.8;margin-bottom:8px;">
        <strong>Old Registered Office Address:</strong>
    </p>

    <p style="font-size:14px;line-height:1.8;margin-bottom:16px;">
        {{ $old_address }}
    </p>

    <p style="font-size:14px;line-height:1.8;margin-bottom:8px;">
        <strong>To:</strong>
    </p>

    <p style="font-size:14px;line-height:1.8;margin-bottom:8px;">
        <strong>New Registered Office Address:</strong>
    </p>

    <p style="font-size:14px;line-height:1.8;margin-bottom:16px;">
        {{ $new_address }}
    </p>

    <p style="font-size:14px;line-height:1.8;margin-bottom:16px;">
        with effect from <strong>{{ $formattedEffectiveDate }}</strong>.
    </p>

    <p style="font-size:14px;line-height:1.8;margin-bottom:16px;">
        <strong>RESOLVED FURTHER THAT</strong> any Director of the Company be and is hereby authorised to:
    </p>

    <ul style="font-size:14px;line-height:1.8;margin-bottom:16px;margin-left:20px;">
        <li>File Form INC-22 (Verification of Registered Office) with the Registrar of Companies within the prescribed time;</li>
        <li>Submit verification of the new registered office address along with supporting documents;</li>
        <li>Update the registered office address with banks, statutory authorities, and other stakeholders;</li>
        <li>Make necessary changes to the company's letterhead, signage, and official stationery;</li>
        <li>Do all such acts, deeds, matters, and things as may be necessary, proper, or expedient for giving effect to this resolution."</li>
    </ul>

    <p style="font-size:14px;line-height:1.8;margin-bottom:40px;">
        &nbsp;
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

    <p style="font-size:14px;line-height:1.8;margin-bottom:0;">
        <strong>DIN:</strong> {{ $din }}
    </p>

</div>