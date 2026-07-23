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
        <strong>SUBJECT: ISSUE AND ALLOTMENT OF NON-CONVERTIBLE DEBENTURES ON PRIVATE PLACEMENT BASIS</strong>
    </p>

    <p style="font-size:14px;line-height:1.8;margin-bottom:16px;">
<strong>"RESOLVED THAT</strong> pursuant to the provisions of Sections 23, 42, 71 and other applicable provisions of the Companies Act, 2013 (as amended from time to time) read with the rules made thereunder, including the Companies (Prospectus and Allotment of Securities) Rules, 2014 and the Companies (Share Capital and Debentures) Rules, 2014 (as amended from time to time), and subject to the Articles of Association of the Company, the consent of the Board of Directors be and is hereby accorded to issue and allot <strong>{{ $ncd_number }}</strong> (Number) Non-Convertible Debentures (NCDs) having a face value of Rs. <strong>{{ $face_value }}</strong>/- (Rupees {{ $face_value }} Only) each, aggregating to a total consideration of Rs. <strong>{{ $total_consideration }}</strong>/- (Rupees {{ $total_consideration }} Only) on a private placement basis, bearing interest at the rate of <strong>{{ $interest_rate }}%</strong> per annum for a tenure of <strong>{{ $tenure }}</strong> years, to the following identified persons:
    </p>

    <table style="width:100%;border-collapse:collapse;margin-bottom:16px;">
        <thead>
            <tr>
                <th style="border:1px solid #000;padding:8px;text-align:center;">Sr. No.</th>
                <th style="border:1px solid #000;padding:8px;text-align:center;">Name of Allottee</th>
                <th style="border:1px solid #000;padding:8px;text-align:center;">No. of NCDs</th>
                <th style="border:1px solid #000;padding:8px;text-align:center;">Amount (Rs.)</th>
                <th style="border:1px solid #000;padding:8px;text-align:center;">Tenure</th>
                <th style="border:1px solid #000;padding:8px;text-align:center;">Interest Rate (p.a.)</th>
            </tr>
        </thead>
        <tbody>
            @foreach($allottees as $index => $allottee)
            <tr>
                <td style="border:1px solid #000;padding:8px;text-align:center;">{{ $index + 1 }}</td>
                <td style="border:1px solid #000;padding:8px;">{{ $allottee['name'] }}</td>
                <td style="border:1px solid #000;padding:8px;text-align:center;">{{ $allottee['ncds'] }}</td>
                <td style="border:1px solid #000;padding:8px;text-align:right;">{{ $allottee['amount'] }}</td>
                <td style="border:1px solid #000;padding:8px;text-align:center;">{{ $allottee['tenure'] }}</td>
                <td style="border:1px solid #000;padding:8px;text-align:center;">{{ $allottee['interest'] }}%</td>
            </tr>
            @endforeach
            <tr>
                <td style="border:1px solid #000;padding:8px;text-align:center;" colspan="2"><strong>TOTAL</strong></td>
                <td style="border:1px solid #000;padding:8px;text-align:center;"><strong>{{ $ncd_number }}</strong></td>
                <td style="border:1px solid #000;padding:8px;text-align:right;"><strong>{{ $total_consideration }}</strong></td>
                <td style="border:1px solid #000;padding:8px;text-align:center;"></td>
                <td style="border:1px solid #000;padding:8px;text-align:center;"></td>
            </tr>
        </tbody>
    </table>

    <p style="font-size:14px;line-height:1.8;margin-bottom:16px;">
<strong>RESOLVED FURTHER THAT</strong> the issue and allotment of the above-mentioned NCDs shall be made in accordance with the applicable provisions of the Companies Act, 2013 and the rules made thereunder.
    </p>

    <p style="font-size:14px;line-height:1.8;margin-bottom:16px;">
<strong>RESOLVED FURTHER THAT</strong> Debenture Certificates representing the above-mentioned NCDs be issued in favour of the respective allottees, and such Debenture Certificates be signed by the Directors of the Company and countersigned by the authorised signatory under the Common Seal of the Company (if applicable).
    </p>

    <p style="font-size:14px;line-height:1.8;margin-bottom:16px;">
<strong>RESOLVED FURTHER THAT</strong> any Director or the Company Secretary of the Company be and is hereby authorised to do all such acts, deeds, matters, and things, and to execute all such documents, instruments, and writings as may be necessary to give effect to these resolutions, including but not limited to:
    </p>

    <ul style="font-size:14px;line-height:1.8;margin-bottom:25px;margin-left:20px;">
        <li>Filing of Form PAS-3 (Return of Allotment) with the Registrar of Companies;</li>
        <li>Creating necessary entries in the Register of Debenture Holders;</li>
        <li>Making entries in the books of accounts of the Company;</li>
        <li>Executing any other documents as may be required to complete the allotment."</li>
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