<div style="margin-top:40px;padding:32px;border:1px solid #E5E5E5;">

    <p style="font-size:14px;line-height:1.8;margin-bottom:8px;">
        <strong>{{ $llp_name }}</strong>
    </p>

    <p style="font-size:14px;line-height:1.8;margin-bottom:8px;">
        <strong>LLPIN: {{ $llpin }}</strong>
    </p>

    <p style="font-size:14px;line-height:1.8;margin-bottom:8px;">
        <strong>Registered Office Address: </strong>{{ $registered_office }}
    </p>

    <p style="font-size:14px;line-height:1.8;margin-bottom:16px;">
        <strong>Email: {{ $company_email }}</strong>
    </p>

    <p style="font-size:14px;line-height:1.8;margin-bottom:16px;text-align:center;">
        <strong>CERTIFIED TRUE COPY OF THE RESOLUTION</strong>
    </p>
 <p style="font-size:14px;line-height:1.8;margin-bottom:16px;">
Passed by the Designated Partners of <strong>{{ $llp_name }}</strong> LLP at the Meeting held on <strong>{{$formatted_meeting_date }}</strong> at <strong>{{ $meeting_time }}</strong> at the Registered Office of the LLP
    </p>
   

    <p style="font-size:14px;line-height:1.8;margin-bottom:16px;text-align:center;">
        <strong>APPOINTMENT OF DESIGNATED PARTNER</strong>
    </p>

    <p style="font-size:14px;line-height:1.8;margin-bottom:16px;">
<strong>RESOLVED THAT</strong> pursuant to the provisions of Section 7 of the Limited Liability Partnership Act, 2008, read with the LLP Rules, 2009, and other applicable provisions, if any, of the Limited Liability Partnership Act, 2008, and the LLP Agreement dated <strong>{{ $formatted_llp_agreement_date }}</strong> @if($formatted_supplemental_date) and Supplemental Agreement dated <strong>{{$formatted_supplemental_date }}</strong> @endif, Mr./Ms. <strong>{{ $new_dp_name }}</strong> (DPIN: <strong>{{ $new_dp_dpin }}</strong>), with the consent of the remaining Designated Partner(s) of the LLP, be and is hereby appointed as Designated Partner of the LLP with effect from <strong>{{ $formatted_effective_date }}</strong>.
    </p>

    <p style="font-size:14px;line-height:1.8;margin-bottom:16px;">
        <strong>RESOLVED FURTHER THAT</strong> the LLP Agreement be amended accordingly through a Supplemental Deed to give effect to the above resolution and to incorporate the details of the newly appointed Designated Partner.
    </p>

    <p style="font-size:14px;line-height:1.8;margin-bottom:16px;">
    <strong>RESOLVED FURTHER THAT</strong> any Designated Partner of the LLP be and is hereby authorised to sign necessary documents and forms, file Form 3 (Information with regard to LLP Agreement and changes) and Form 4 (Notice of appointment, cessation, and change in particulars of Designated Partner/Partner) with the Registrar of Companies, and to do all such acts, deeds, matters, and things as may be necessary, proper, or expedient to give effect to the above resolutions.
    </p>
    <p style="font-size:14px;line-height:1.8;margin-bottom:16px;">
        For <strong>{{ $llp_name }}</strong> LLP
    </p>

    <p style="font-size:14px;line-height:1.8;margin-bottom:8px;">
        <strong>Signature:</strong> _________________________
    </p>

    <p style="font-size:14px;line-height:1.8;margin-bottom:8px;">
        <strong>Name:</strong> {{ $authorized_dp_name }}
    </p>

    <p style="font-size:14px;line-height:1.8;margin-bottom:8px;">
        <strong>Designation:</strong> Designated Partner
    </p>

    <p style="font-size:14px;line-height:1.8;margin-bottom:8px;">
        <strong>DPIN:</strong> {{ $authorized_dp_dpin }}
    </p>

    <p style="font-size:14px;line-height:1.8;margin-bottom:8px;">
        <strong>Place:</strong> {{ $place }}
    </p>

    <p style="font-size:14px;line-height:1.8;margin-bottom:0;">
        <strong>Date:</strong> {{ $formatted_resolution_date }}
    </p>


</div>