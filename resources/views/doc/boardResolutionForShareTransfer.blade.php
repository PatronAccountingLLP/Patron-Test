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
        <strong>SUBJECT: TRANSFER OF EQUITY SHARES</strong>
    </p>

    <p style="font-size:14px;line-height:1.8;margin-bottom:16px;">
 <strong>"RESOLVED THAT</strong> pursuant to the provisions of Section 56 and other applicable provisions of the Companies Act, 2013 (including any statutory modification(s) or re-enactment thereof for the time being in force), and subject to the Articles of Association of the Company, the consent of the Board of Directors be and is hereby accorded to approve the transfer of equity shares, the details of which are as follows:
    </p>

    <table style="width:100%;border-collapse:collapse;margin-bottom:20px;font-size:14px;">
        <thead>
            <tr style="background-color:#f5f5f5;">
                <th style="border:1px solid #ddd;padding:10px;text-align:left;">Transferor</th>
                <th style="border:1px solid #ddd;padding:10px;text-align:center;">Folio No.</th>
                <th style="border:1px solid #ddd;padding:10px;text-align:left;">Transferee</th>
                <th style="border:1px solid #ddd;padding:10px;text-align:center;">Folio No.</th>
                <th style="border:1px solid #ddd;padding:10px;text-align:center;">No. of Shares</th>
                <th style="border:1px solid #ddd;padding:10px;text-align:center;">Share Certificate No.</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td style="border:1px solid #ddd;padding:10px;">{{ $transferor_name }}</td>
                <td style="border:1px solid #ddd;padding:10px;text-align:center;">{{ $transferor_folio }}</td>
                <td style="border:1px solid #ddd;padding:10px;">{{ $transferee_name }}</td>
                <td style="border:1px solid #ddd;padding:10px;text-align:center;">{{ $transferee_folio }}</td>
                <td style="border:1px solid #ddd;padding:10px;text-align:center;">{{ $number_of_shares }}</td>
                <td style="border:1px solid #ddd;padding:10px;text-align:center;">{{ $share_certificate_no }}</td>
            </tr>
        </tbody>
    </table>

    <p style="font-size:14px;line-height:1.8;margin-bottom:8px;">
        <strong>RESOLVED FURTHER THAT</strong> any Director of the Company, jointly or severally, be and is hereby authorised to:
    </p>

    <ul style="font-size:14px;line-height:1.8;margin-bottom:16px;margin-left:20px;">
        <li>Register the transfer in the Register of Members of the Company;</li>
        <li>Enter the name of the transferee in the Register of Members;</li>
        <li>Make necessary endorsement on the reverse of the share certificate(s);</li>
        <li>Issue new share certificate(s) in the name of the transferee (if applicable);</li>
        <li>Do all such acts, deeds, matters, and things as may be necessary to give effect to this resolution."</li>
    </ul>

    <p style="font-size:14px;line-height:1.8;margin-bottom:24px;">
        <strong>Certified to be a True Copy</strong>
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