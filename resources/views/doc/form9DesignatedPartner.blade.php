<div style="margin-top:40px;padding:32px;border:1px solid #E5E5E5;">

    <p style="font-size:16px;line-height:1.8;margin-bottom:16px;text-align:center;">
        <strong>FORM-9</strong>
    </p>

    <p style="font-size:12px;line-height:1.8;margin-bottom:16px;text-align:center;">
        [Pursuant to Rule 7 and Rule 10(8) of the LLP Rules]
    </p>

    <p style="font-size:14px;line-height:1.8;margin-bottom:24px;text-align:center;">
        <strong>Consent to Act as Designated Partner</strong>
    </p>

    <p style="font-size:14px;line-height:1.8;margin-bottom:16px;">
        <strong>To,</strong>
    </p>

    <p style="font-size:14px;line-height:1.8;margin-bottom:8px;">
        <strong>LLP Name:</strong> {{ $llp_name }} ({{ $llp_status }})
    </p>

    @if($llpin)
    <p style="font-size:14px;line-height:1.8;margin-bottom:8px;">
        <strong>LLPIN:</strong> {{ $llpin }}
    </p>
    @endif

    <p style="font-size:14px;line-height:1.8;margin-bottom:16px;">
        <strong>Registered Office Address:</strong> {{ $registered_office }}
    </p>

    <p style="font-size:14px;line-height:1.8;margin-bottom:16px;">
        Dear Sir/Madam,
    </p>

    <p style="font-size:14px;line-height:1.8;margin-bottom:16px;">
        I, <strong>{{ $full_name }}</strong>, {{ $relation_type }} <strong>{{ $relation_name }}</strong>, hereby give my consent to act as Designated Partner of the above-named Limited Liability Partnership, pursuant to the provisions of Rule 7 and Rule 10(8) of the Limited Liability Partnership Rules, 2009, and certify that I am not disqualified from becoming a Designated Partner under the Limited Liability Partnership Act, 2008.
    </p>

    <p style="font-size:14px;line-height:1.8;margin-bottom:16px;">
        <strong>My particulars are as follows:</strong>
    </p>

    <table style="width:100%;border-collapse:collapse;margin-bottom:16px;">
        <tbody>
            <tr>
                <td style="border:1px solid #000;padding:8px;width:10%;text-align:center;"><strong>1</strong></td>
                <td style="border:1px solid #000;padding:8px;width:50%;"><strong>Designated Partner Identification Number (DPIN)</strong></td>
                <td style="border:1px solid #000;padding:8px;width:40%;">{{ $dpin }}</td>
            </tr>
            <tr>
                <td style="border:1px solid #000;padding:8px;text-align:center;"><strong>2</strong></td>
                <td style="border:1px solid #000;padding:8px;"><strong>Full Name (as per PAN)</strong></td>
                <td style="border:1px solid #000;padding:8px;">{{ $full_name }}</td>
            </tr>
            <tr>
                <td style="border:1px solid #000;padding:8px;text-align:center;"><strong>3</strong></td>
                <td style="border:1px solid #000;padding:8px;"><strong>Father's/Husband's Name</strong></td>
                <td style="border:1px solid #000;padding:8px;">{{ $relation_name }}</td>
            </tr>
            <tr>
                <td style="border:1px solid #000;padding:8px;text-align:center;"><strong>4</strong></td>
                <td style="border:1px solid #000;padding:8px;"><strong>Residential Address</strong></td>
                <td style="border:1px solid #000;padding:8px;">{{ $residential_address }}</td>
            </tr>
            <tr>
                <td style="border:1px solid #000;padding:8px;text-align:center;"><strong>5</strong></td>
                <td style="border:1px solid #000;padding:8px;"><strong>Email Address</strong></td>
                <td style="border:1px solid #000;padding:8px;">{{ $email }}</td>
            </tr>
            <tr>
                <td style="border:1px solid #000;padding:8px;text-align:center;"><strong>6</strong></td>
                <td style="border:1px solid #000;padding:8px;"><strong>Mobile Number</strong></td>
                <td style="border:1px solid #000;padding:8px;">{{ $mobile }}</td>
            </tr>
            <tr>
                <td style="border:1px solid #000;padding:8px;text-align:center;"><strong>7</strong></td>
                <td style="border:1px solid #000;padding:8px;"><strong>Date of Birth</strong></td>
                <td style="border:1px solid #000;padding:8px;">{{ $formattedDOB }}</td>
            </tr>
            <tr>
                <td style="border:1px solid #000;padding:8px;text-align:center;"><strong>8</strong></td>
                <td style="border:1px solid #000;padding:8px;"><strong>Income Tax PAN</strong></td>
                <td style="border:1px solid #000;padding:8px;">{{ $pan }}</td>
            </tr>
            <tr>
                <td style="border:1px solid #000;padding:8px;text-align:center;"><strong>9</strong></td>
                <td style="border:1px solid #000;padding:8px;"><strong>Occupation</strong></td>
                <td style="border:1px solid #000;padding:8px;">{{ $occupation }}</td>
            </tr>
            <tr>
                <td style="border:1px solid #000;padding:8px;text-align:center;"><strong>10</strong></td>
                <td style="border:1px solid #000;padding:8px;"><strong>Nationality</strong></td>
                <td style="border:1px solid #000;padding:8px;">{{ $nationality }}</td>
            </tr>
            <tr>
                <td style="border:1px solid #000;padding:8px;text-align:center;"><strong>11</strong></td>
                <td style="border:1px solid #000;padding:8px;"><strong>Number of companies in which I am a Managing Director, CEO, Whole Time Director, Secretary, CFO, or Manager</strong></td>
                <td style="border:1px solid #000;padding:8px;">{{ $no_of_companies }}</td>
            </tr>
            <tr>
                <td style="border:1px solid #000;padding:8px;text-align:center;"><strong>12</strong></td>
                <td style="border:1px solid #000;padding:8px;"><strong>Membership No. and Certificate of Practice No. (if member of any professional institute). State NIL if none.</strong></td>
                <td style="border:1px solid #000;padding:8px;">{{ $membership_no }}</td>
            </tr>
        </tbody>
    </table>

    <p style="font-size:14px;line-height:1.8;margin-bottom:16px;">
        I hereby declare that I satisfy all conditions and requirements for being eligible to act as a designated partner and that I have not been disqualified from acting as a designated partner under the Limited Liability Partnership Act, 2008.
    </p>

    <p style="font-size:14px;line-height:1.8;margin-bottom:40px;">
        &nbsp;
    </p>

    <p style="font-size:14px;line-height:1.8;margin-bottom:8px;">
<strong>Date:</strong> {{ $formattedConsentDate }}
    </p>

    <p style="font-size:14px;line-height:1.8;margin-bottom:16px;">
        <strong>Place:</strong> {{ $place }}
    </p>

    <p style="font-size:14px;line-height:1.8;margin-bottom:8px;">
        <strong>Signature:</strong> _________________________
    </p>

    <p style="font-size:14px;line-height:1.8;margin-bottom:0;">
        <strong>({{ $full_name }})</strong>
        
    </p>
    <p>(Name of Designated Partner)</p>

</div>