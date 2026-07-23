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
        <strong>SUBJECT: INVESTMENT IN MUTUAL FUND SCHEMES</strong>
    </p>

    <p style="font-size:14px;line-height:1.8;margin-bottom:16px;">
        <strong>"RESOLVED THAT</strong> pursuant to the provisions of the Companies Act, 2013 and other applicable laws and regulations, the consent of the Board of Directors be and is hereby accorded to invest the surplus funds of the Company in units of Mutual Fund Schemes managed by various Asset Management Companies (AMCs), including both open-ended and close-ended schemes, and to hold such units in dematerialised form through Central Depository Services (India) Limited (CDSL) and/or National Securities Depository Limited (NSDL).
    </p>

    <p style="font-size:14px;line-height:1.8;margin-bottom:16px;">
        <strong>RESOLVED FURTHER THAT</strong> the Company hereby appoints <strong>{{ $rta_name }}</strong> as the Registrar and Transfer Agent (RTA) for the purpose of maintaining unit holder records, processing transactions, and providing related services in connection with the Company's mutual fund investments, upon such terms and conditions as may be mutually agreed.
    </p>

    <p style="font-size:14px;line-height:1.8;margin-bottom:16px;">
        <strong>RESOLVED FURTHER THAT</strong> the following persons be and are hereby authorised, severally or jointly, to operate the investment account(s), execute purchase and redemption requests, sign all necessary documents, and do all such acts and deeds as may be required in connection with the Company's mutual fund investments:
    </p>

    <p style="font-size:14px;line-height:1.8;margin-bottom:8px;">
        <strong>Specimen Signatures of Authorised Signatories:</strong>
    </p>

    <table style="width:100%;border-collapse:collapse;margin-bottom:20px;font-size:14px;">
        <thead>
            <tr style="background-color:#f5f5f5;">
                <th style="border:1px solid #ddd;padding:10px;text-align:center;width:10%;">Sr. No.</th>
                <th style="border:1px solid #ddd;padding:10px;text-align:left;width:30%;">Name of Authorised Signatory</th>
                <th style="border:1px solid #ddd;padding:10px;text-align:left;width:25%;">Designation</th>
                <th style="border:1px solid #ddd;padding:10px;text-align:center;width:35%;">Specimen Signature</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td style="border:1px solid #ddd;padding:10px;text-align:center;">1.</td>
                <td style="border:1px solid #ddd;padding:10px;">{{ $signatory1_name }}</td>
                <td style="border:1px solid #ddd;padding:10px;">{{ $signatory1_designation }}</td>
                <td style="border:1px solid #ddd;padding:10px;text-align:center;height:50px;"></td>
            </tr>
            @if($signatory2_name)
            <tr>
                <td style="border:1px solid #ddd;padding:10px;text-align:center;">2.</td>
                <td style="border:1px solid #ddd;padding:10px;">{{ $signatory2_name }}</td>
                <td style="border:1px solid #ddd;padding:10px;">{{ $signatory2_designation }}</td>
                <td style="border:1px solid #ddd;padding:10px;text-align:center;height:50px;"></td>
            </tr>
            @endif
            @if($signatory3_name)
            <tr>
                <td style="border:1px solid #ddd;padding:10px;text-align:center;">3.</td>
                <td style="border:1px solid #ddd;padding:10px;">{{ $signatory3_name }}</td>
                <td style="border:1px solid #ddd;padding:10px;">{{ $signatory3_designation }}</td>
                <td style="border:1px solid #ddd;padding:10px;text-align:center;height:50px;"></td>
            </tr>
            @endif
        </tbody>
    </table>

    <p style="font-size:14px;line-height:1.8;margin-bottom:24px;">
        The resolution was passed unanimously."
    </p>

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
        <strong>Designation:</strong> {{ $director_designation }}
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