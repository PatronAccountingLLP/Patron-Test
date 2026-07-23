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
        <strong>SUBJECT: APPOINTMENT OF AUTHORISED SIGNATORY</strong>
    </p>

    <p style="font-size:14px;line-height:1.8;margin-bottom:16px;">
        <strong>"RESOLVED THAT</strong> Mr./Ms. <strong>{{ $authorised_signatory_name }}</strong>, having Permanent Account Number (PAN) <strong>{{ $authorised_signatory_pan }}</strong>, be and is hereby authorised to sign, execute, and submit all necessary papers, letters, applications, forms, returns, and documents on behalf of the Company in connection with:
    </p>

    <p style="font-size:14px;line-height:1.8;margin-bottom:16px;">
        <strong>{{ $authority_purpose }}</strong>
    </p>

    <p style="font-size:14px;line-height:1.8;margin-bottom:16px;">
        The authorised signatory shall have the power to:
    </p>

    <ul style="font-size:14px;line-height:1.8;margin-bottom:16px;margin-left:20px;">
        <li>Sign and submit applications, forms, and returns;</li>
        <li>Receive and respond to notices, communications, and correspondence;</li>
        <li>Attend hearings and represent the Company before the relevant authorities;</li>
        <li>Execute such other documents and perform such other acts as may be necessary in connection with the above matter.</li>
    </ul>

    <p style="font-size:14px;line-height:1.8;margin-bottom:16px;">
        All acts done and documents executed by the said authorised signatory shall be binding on the Company, and this authorisation shall remain valid until the same is revoked by giving written notice thereof.
    </p>

    <p style="font-size:14px;line-height:1.8;margin-bottom:16px;">
        <strong>RESOLVED FURTHER THAT</strong> a copy of this resolution, duly certified as true by a Director or authorised signatory of the Company, be furnished to <strong>{{ $authority_department }}</strong> and such other parties as may be required from time to time in connection with the above matter."
    </p>

    <p style="font-size:14px;line-height:1.8;margin-bottom:24px;">
        <strong>CERTIFIED TRUE COPY</strong>
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