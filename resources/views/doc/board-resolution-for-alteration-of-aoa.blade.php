<div style="margin-top:40px;padding:32px;border:1px solid #E5E5E5;">

    <p style="font-size:14px;line-height:1.8;margin-bottom:8px;">
        <strong>{{ $company_name }}</strong>
    </p>

    <p style="font-size:14px;line-height:1.8;margin-bottom:8px;">
        <strong>CIN: {{ $cin }}</strong>
    </p>

    <p style="font-size:14px;line-height:1.8;margin-bottom:8px;">
        <strong>Registered Office Address: </strong>{{ $registered_office }}
    </p>

    <p style="font-size:14px;line-height:1.8;margin-bottom:8px;">
        <strong>Email: {{ $company_email }}</strong>
    </p>

    <p style="font-size:14px;line-height:1.8;margin-bottom:16px;text-align:center;">
        <strong>CERTIFIED TRUE COPY OF THE BOARD RESOLUTION</strong>
    </p>

    <p style="font-size:14px;line-height:1.8;margin-bottom:16px;">
        Passed at the Meeting of the Board of Directors of the Company held on 
        <strong>{{ $formatted_meeting_date }}</strong> at 
        <strong>{{ $meeting_time }}</strong> at the Registered Office of the Company at 
        <strong>{{ $registered_office }}</strong>
    </p>

    <p style="font-size:14px;line-height:1.8;margin-bottom:16px;text-align:center;">
        <strong>ALTERATION OF ARTICLES OF ASSOCIATION</strong>
    </p>

    <p style="font-size:14px;line-height:1.8;margin-bottom:16px;">
        <strong>RESOLVED THAT</strong> pursuant to the provisions of Section 14 and all other applicable provisions, if any, of the Companies Act, 2013 and the rules made thereunder (including any statutory modification(s), amendment, or re-enactment thereof for the time being in force), the consent of the Board of Directors of the Company be and is hereby accorded, subject to the approval of members of the Company at a duly convened General Meeting by way of Special Resolution, to adopt a new set of altered Articles of Association in place of the existing Articles of Association of the Company, with the following amendments:
    </p>

    <div style="margin-left: 30px; margin-bottom: 16px;">
        @foreach($amendments_array as $index => $amendment)
            <p style="font-size:14px;line-height:1.8;margin-bottom:8px;">
                {{ $index + 1 }}. {{ $amendment }}
            </p>
        @endforeach
    </div>

    <p style="font-size:14px;line-height:1.8;margin-bottom:16px;">
        <strong>RESOLVED FURTHER THAT</strong> Mr./Ms. 
        <strong>{{ $authorized_person_name_1 }}</strong>, 
        <strong>{{ $authorized_designation_1 }}</strong> and Mr./Ms. 
        <strong>{{ $authorized_person_name_2 }}</strong>, 
        <strong>{{ $authorized_designation_2 }}</strong> of the Company be and are hereby severally authorised to convene an Extraordinary General Meeting of the members, to file the necessary e-forms including Form MGT-14 with the Registrar of Companies, and to do all such acts, deeds, matters, and things as may be necessary, proper, or expedient to give effect to the above resolution.
    </p>

    <p style="font-size:14px;line-height:1.8;margin-bottom:16px;">
        For <strong>{{ $company_name }}</strong>
    </p>

    <div style="margin-bottom: 16px;">
        <p style="font-size:14px;line-height:1.8;margin-bottom:4px;"><strong>Authorised Signatory 1:</strong></p>
        <p style="font-size:14px;line-height:1.8;margin-bottom:4px;"><strong>Signature:</strong> _________________________</p>
        <p style="font-size:14px;line-height:1.8;margin-bottom:4px;"><strong>Name:</strong> {{ $authorized_person_name_1 }}</p>
        <p style="font-size:14px;line-height:1.8;margin-bottom:4px;"><strong>Designation:</strong> {{ $authorized_designation_1 }}</p>
        <p style="font-size:14px;line-height:1.8;margin-bottom:4px;"><strong>DIN:</strong> {{ $din_1 }}</p>
        <p style="font-size:14px;line-height:1.8;margin-bottom:8px;"><strong>Address:</strong> {{ $address_1 }}</p>
    </div>

    <div style="margin-bottom: 16px;">
        <p style="font-size:14px;line-height:1.8;margin-bottom:4px;"><strong>Authorised Signatory 2:</strong></p>
        <p style="font-size:14px;line-height:1.8;margin-bottom:4px;"><strong>Signature:</strong> _________________________</p>
        <p style="font-size:14px;line-height:1.8;margin-bottom:4px;"><strong>Name:</strong> {{ $authorized_person_name_2 }}</p>
        <p style="font-size:14px;line-height:1.8;margin-bottom:4px;"><strong>Designation:</strong> {{ $authorized_designation_2 }}</p>
        <p style="font-size:14px;line-height:1.8;margin-bottom:4px;"><strong>DIN:</strong> {{ $din_2 }}</p>
        <p style="font-size:14px;line-height:1.8;margin-bottom:8px;"><strong>Address:</strong> {{ $address_2 }}</p>
    </div>

    <p style="font-size:14px;line-height:1.8;margin-bottom:8px;">
        <strong>Place:</strong> {{ $place }}
    </p>

    <p style="font-size:14px;line-height:1.8;margin-bottom:0;">
        <strong>Date:</strong> {{ $formatted_resolution_date }}
    </p>

</div>