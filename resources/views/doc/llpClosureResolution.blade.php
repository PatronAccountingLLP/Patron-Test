<div style="margin-top:40px;padding:32px;border:1px solid #E5E5E5;">

    <p style="font-size:14px;line-height:1.8;margin-bottom:8px;"><strong>{{ $llp_name }}</strong></p>
    <p style="font-size:14px;line-height:1.8;margin-bottom:8px;"><strong>LLPIN: {{ $llpin }}</strong></p>
    <p style="font-size:14px;line-height:1.8;margin-bottom:8px;"><strong>Registered Office:</strong> {{ $registered_office }}</p>
    <p style="font-size:14px;line-height:1.8;margin-bottom:8px;"><strong>Email:</strong> {{ $email }}</p>

    <p style="font-size:16px;line-height:1.8;margin-bottom:24px;text-align:center;font-weight:bold;">
        CERTIFIED TRUE COPY OF THE RESOLUTION
    </p>

    <p style="font-size:14px;line-height:1.8;margin-bottom:16px;text-align:center;">
        Passed by the Designated Partners of the LLP
    </p>

    <p style="font-size:14px;line-height:1.8;margin-bottom:4px;">
        <strong>Date of Meeting:</strong> {{ $formatted_meeting_date }}
    </p>
    <p style="font-size:14px;line-height:1.8;margin-bottom:4px;">
        <strong>Time:</strong> {{ $meeting_time }} (Hours)
    </p>
    <p style="font-size:14px;line-height:1.8;margin-bottom:16px;">
        <strong>Venue:</strong> Registered Office of the LLP at {{ $registered_office }}
    </p>

    <p style="font-size:14px;line-height:1.8;margin-bottom:16px;font-weight:bold;">
        SUBJECT: APPLICATION FOR CLOSURE / STRIKE OFF OF LLP
    </p>

    <p style="font-size:14px;line-height:1.8;margin-bottom:16px;">
        <strong>"RESOLVED THAT</strong> pursuant to the relevant provisions of the Limited Liability Partnership Act, 2008 read with the rules made thereunder and in accordance with the LLP Agreement, the consent of all Designated Partners be and is hereby accorded to make an application to the Registrar of Companies, <strong>{{ $roc_jurisdiction }}</strong> for striking off the name of <strong>{{ $llp_name }}</strong> LLP (LLPIN: <strong>{{ $llpin }}</strong>) from the Register of Limited Liability Partnerships.
    </p>

    <p style="font-size:14px;line-height:1.8;margin-bottom:16px;">
        <strong>RESOLVED FURTHER THAT</strong> any of the Designated Partners of the LLP be and is hereby authorised, severally and jointly, on behalf of the LLP to:
    </p>
    <p style="font-size:14px;line-height:1.8;margin-left:20px;margin-bottom:4px;">1. Sign and submit Form 24 (Application for striking off the name of LLP) to the Registrar of Companies through the MCA portal;</p>
    <p style="font-size:14px;line-height:1.8;margin-left:20px;margin-bottom:4px;">2. Execute all documents, papers, applications, and forms whether electronically or physically as may be required;</p>
    <p style="font-size:14px;line-height:1.8;margin-left:20px;margin-bottom:4px;">3. Make any modifications, alterations, or amendments as may be required by the Registrar of Companies;</p>
    <p style="font-size:14px;line-height:1.8;margin-left:20px;margin-bottom:4px;">4. Correspond and communicate with the Registrar of Companies and other authorities on behalf of the LLP;</p>
    <p style="font-size:14px;line-height:1.8;margin-left:20px;margin-bottom:16px;">5. Do all such acts, deeds, matters, and things as may be necessary, proper, or expedient to give effect to this resolution."</p>

    <p style="font-size:14px;line-height:1.8;margin-bottom:16px;">
        <strong>CONFIRMATION:</strong> We, the undersigned Designated Partners, confirm that the LLP has no liabilities, no assets, and no pending legal proceedings as on the date of this resolution.
    </p>

    <p style="font-size:14px;line-height:1.8;margin-bottom:16px;">
        <strong>SIGNATURES OF DESIGNATED PARTNERS</strong>
    </p>

    @forelse($partners as $index => $partner)
    <p style="font-size:14px;line-height:1.8;margin-bottom:4px;"><strong>Designated Partner {{ $index+1 }}:</strong></p>
    <p style="font-size:14px;line-height:1.8;margin-bottom:4px;">Signature: _________________________</p>
    <p style="font-size:14px;line-height:1.8;margin-bottom:4px;">Name: {{ $partner['name'] }}</p>
    <p style="font-size:14px;line-height:1.8;margin-bottom:4px;">Designation: Designated Partner</p>
    <p style="font-size:14px;line-height:1.8;margin-bottom:16px;">DPIN: {{ $partner['dpin'] }}</p>
    @empty
    <p style="font-size:14px;line-height:1.8;">No partners added.</p>
    @endforelse

    <p style="font-size:14px;line-height:1.8;margin-bottom:4px;"><strong>Place:</strong> {{ $place }}</p>
    <p style="font-size:14px;line-height:1.8;margin-bottom:0;"><strong>Date:</strong> {{ $formatted_resolution_date }}</p>

</div>