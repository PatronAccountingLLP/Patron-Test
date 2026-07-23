<div style="margin-top:40px;padding:32px;border:1px solid #E5E5E5;">

    <p style="font-size:16px;line-height:1.8;margin-bottom:20px;text-align:center;">
        <strong>SUBSCRIBER SHEET</strong>
    </p>

    <p style="font-size:14px;line-height:1.8;margin-bottom:16px;text-align:center;">
        <strong>{{ $llp_name }} LLP</strong>
    </p>

    <p style="font-size:14px;line-height:1.8;margin-bottom:16px;">
        We, the several partners whose names are subscribed below, are desirous of being formed into a Limited Liability Partnership for carrying on a lawful business with a view to earn profit and have entered or agreed to enter into a LLP Agreement in writing.
    </p>

    <p style="font-size:14px;line-height:1.8;margin-bottom:16px;">
        We respectively agree to contribute money or other property or other benefit or to perform services for the LLP in accordance with the LLP Agreement, the particulars of which are stated against our respective names.
    </p>

    <p style="font-size:14px;line-height:1.8;margin-bottom:20px;">
        We hereby give our consent to become a Partner / Designated Partner of the LLP pursuant to Section 7(4) / Section 25(3)(c) of the Limited Liability Partnership Act, 2008.
    </p>

    <!-- Partner Details Table -->
    <table style="width:100%;border-collapse:collapse;margin-bottom:20px;font-size:14px;">
        <thead>
            <tr style="background-color:#f5f5f5;">
                <th style="border:1px solid #ddd;padding:10px;text-align:left;">Name of Partner / Designated Partner</th>
                <th style="border:1px solid #ddd;padding:10px;text-align:center;">Designation</th>
                <th style="border:1px solid #ddd;padding:10px;text-align:center;">Signature</th>
                <th style="border:1px solid #ddd;padding:10px;text-align:left;">Witness Details</th>
                <th style="border:1px solid #ddd;padding:10px;text-align:center;">Witness Signature</th>
            </tr>
        </thead>
        <tbody>
            <!-- Partner 1 -->
            <tr>
                <td style="border:1px solid #ddd;padding:10px;vertical-align:top;">
                    <p><strong>Name:</strong> {{ $partner1_name }}</p>
                    <p><strong>Father's Name:</strong> {{ $partner1_father_name }}</p>
                    <p><strong>Address:</strong>{{ $partner1_address }}</p>
                </td>
                <td style="border:1px solid #ddd;padding:10px;text-align:center;vertical-align:middle;">
                    {{ $partner1_designation }}
                </td>
                <td style="border:1px solid #ddd;padding:30px;text-align:center;vertical-align:middle;">
                    
                    _________________
                </td>
                <td style="border:1px solid #ddd;padding:10px;vertical-align:top;" >
                   <p> <strong>Name:</strong> {{ $witness_name }}</p>
                    <p><strong>Profession:</strong> {{ $witness_profession }}</p>
                   <p> <strong>M. No.:</strong> {{ $witness_membership_no }}</p>
                    <strong>Address:</strong>{{ $witness_address }}
                </td>
                <td style="border:1px solid #ddd;padding:30px;text-align:center;vertical-align:middle;">
                    
                    _________________
                </td>
            </tr>
            <!-- Partner 2 -->
            <tr>
                <td style="border:1px solid #ddd;padding:10px;vertical-align:top;">
                    <p><strong>Name:</strong> {{ $partner2_name }}</p>
                   <p> <strong>Father's Name:</strong> {{ $partner2_father_name }}</p>
                    <p><strong>Address:</strong>{{ $partner2_address }}</p>
                </td>
                <td style="border:1px solid #ddd;padding:10px;text-align:center;vertical-align:middle;">
                    {{ $partner2_designation }}
                </td>
                <td style="border:1px solid #ddd;padding:30px;text-align:center;vertical-align:middle;">
                    
                    _________________
                </td>
                 <td style="border:1px solid #ddd;padding:10px;vertical-align:top;" >
                   <p> <strong>Name:</strong> {{ $witness_name }}</p>
                    <p><strong>Profession:</strong> {{ $witness_profession }}</p>
                   <p> <strong>M. No.:</strong> {{ $witness_membership_no }}</p>
                    <strong>Address:</strong>{{ $witness_address }}
                </td>
                <td style="border:1px solid #ddd;padding:30px;text-align:center;vertical-align:middle;" >
                    
                    _________________
                </td>
            </tr>
        </tbody>
    </table>

    <p style="font-size:14px;line-height:1.8;margin-bottom:8px;">
        <strong>Date:</strong> {{ $formattedDate }}
    </p>

    <p style="font-size:14px;line-height:1.8;margin-bottom:0;">
        <strong>Place:</strong> {{ $place }}
    </p>

</div>