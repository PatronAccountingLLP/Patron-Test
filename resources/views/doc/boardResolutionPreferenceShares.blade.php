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
        <strong>SUBJECT: ISSUE AND ALLOTMENT OF PREFERENCE SHARES ON PRIVATE PLACEMENT BASIS</strong>
    </p>

    <p style="font-size:14px;line-height:1.8;margin-bottom:16px;">
<strong>"RESOLVED THAT</strong> pursuant to the provisions of Sections 23, 42, 55, and 62 of the Companies Act, 2013 read with the Companies (Share Capital and Debentures) Rules, 2014, the Companies (Prospectus and Allotment of Securities) Rules, 2014, and such other applicable laws and rules (including any statutory modification or re-enactment thereof for the time being in force), and in accordance with the Memorandum and Articles of Association of the Company, the consent of the Board of Directors be and is hereby accorded to issue and allot fully paid-up Preference Shares of the Company as detailed below:
    </p>

    <p style="font-size:14px;line-height:1.8;margin-bottom:8px;">
        <strong>Number of Preference Shares:</strong> {{ $share_number }} ({{ $share_number_words }})
    </p>

    <p style="font-size:14px;line-height:1.8;margin-bottom:8px;">
        <strong>Face Value per Share:</strong> Rs. {{ $face_value }}/-
    </p>

    <p style="font-size:14px;line-height:1.8;margin-bottom:8px;">
        <strong>Dividend Rate:</strong> {{ $dividend_rate }}% per annum
    </p>

    <p style="font-size:14px;line-height:1.8;margin-bottom:8px;">
        <strong>Tenure:</strong> {{ $tenure }} years from the date of allotment
    </p>

    <p style="font-size:14px;line-height:1.8;margin-bottom:16px;">
        <strong>Type:</strong> {{ $share_type }}
    </p>

    <p style="font-size:14px;line-height:1.8;margin-bottom:16px;">
        The Preference Shares shall be allotted to the following persons:
    </p>

    <table style="width:100%;border-collapse:collapse;margin-bottom:16px;">
        <thead>
            <tr>
                <th style="border:1px solid #000;padding:8px;text-align:center;">Sr. No.</th>
                <th style="border:1px solid #000;padding:8px;text-align:center;">Name of Allottee</th>
                <th style="border:1px solid #000;padding:8px;text-align:center;">No. of Preference Shares</th>
                <th style="border:1px solid #000;padding:8px;text-align:center;">Amount (Rs.)</th>
                <th style="border:1px solid #000;padding:8px;text-align:center;">Dividend Rate (p.a.)</th>
                <th style="border:1px solid #000;padding:8px;text-align:center;">Tenure</th>
            </tr>
        </thead>
        <tbody>
            @foreach($allottees as $index => $allottee)
            <tr>
                <td style="border:1px solid #000;padding:8px;text-align:center;">{{ $index + 1 }}</td>
                <td style="border:1px solid #000;padding:8px;">{{ $allottee['name'] }}</td>
                <td style="border:1px solid #000;padding:8px;text-align:center;">{{ $allottee['shares'] }}</td>
                <td style="border:1px solid #000;padding:8px;text-align:right;">{{ $allottee['amount'] }}</td>
                <td style="border:1px solid #000;padding:8px;text-align:center;">{{ $allottee['dividend'] }}%</td>
                <td style="border:1px solid #000;padding:8px;text-align:center;">{{ $allottee['tenure'] }}</td>
            </tr>
            @endforeach
            <tr>
                <td style="border:1px solid #000;padding:8px;text-align:center;" colspan="2"><strong>Total</strong></td>
                <td style="border:1px solid #000;padding:8px;text-align:center;"><strong>{{ $share_number }}</strong></td>
                <td style="border:1px solid #000;padding:8px;text-align:right;"></td>
                <td style="border:1px solid #000;padding:8px;text-align:center;"></td>
                <td style="border:1px solid #000;padding:8px;text-align:center;"></td>
            </tr>
        </tbody>
    </table>

    <p style="font-size:14px;line-height:1.8;margin-bottom:16px;">
<strong>RESOLVED FURTHER THAT</strong> any Director of the Company be and is hereby authorised to sign and file Form PAS-3 (Return of Allotment) with the Registrar of Companies within the prescribed time.
    </p>

    <p style="font-size:14px;line-height:1.8;margin-bottom:16px;">
        <strong>RESOLVED FURTHER THAT</strong> the share certificates in respect of the aforesaid Preference Shares be issued to the respective allottees under the Common Seal of the Company (if applicable) and under the signatures of the Directors of the Company.
    </p>

    <p style="font-size:14px;line-height:1.8;margin-bottom:16px;">
        <strong>RESOLVED FURTHER THAT</strong> any Director of the Company be and is hereby authorised to:
    </p>

    <ul style="font-size:14px;line-height:1.8;margin-bottom:16px;margin-left:20px;">
        <li>Make necessary entries in the Register of Members and other statutory registers;</li>
        <li>Execute all documents, agreements, and writings as may be required;</li>
        <li>File requisite e-forms with the Registrar of Companies within the prescribed time;</li>
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