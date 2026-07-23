<div style="margin-top:40px;padding:32px;border:1px solid #E5E5E5;">

    <p style="font-size:14px;line-height:1.8;margin-bottom:8px;"><strong>{{ $company_name }}</strong></p>
    <p style="font-size:14px;line-height:1.8;margin-bottom:8px;"><strong>CIN: {{ $cin }}</strong></p>
    <p style="font-size:14px;line-height:1.8;margin-bottom:8px;"><strong>Registered Office:</strong> {{ $registered_office }}</p>
    <p style="font-size:14px;line-height:1.8;margin-bottom:8px;"><strong>Email:</strong> {{ $email }}</p>

    <p style="font-size:16px;line-height:1.8;margin-bottom:24px;text-align:center;font-weight:bold;">
        CERTIFIED TRUE COPY OF THE BOARD RESOLUTION
    </p>

    <p style="font-size:14px;line-height:1.8;margin-bottom:16px;text-align:center;">
        Passed at the Meeting of the Board of Directors of the Company
    </p>

    <p style="font-size:14px;line-height:1.8;margin-bottom:4px;">
        <strong>Date of Meeting:</strong> {{ $formatted_meeting_date }}
    </p>
    <p style="font-size:14px;line-height:1.8;margin-bottom:4px;">
        <strong>Time:</strong> {{ $meeting_time }} (Hours)
    </p>
    <p style="font-size:14px;line-height:1.8;margin-bottom:16px;">
        <strong>Venue:</strong> Registered Office of the Company at {{ $registered_office }}
    </p>

    <p style="font-size:14px;line-height:1.8;margin-bottom:16px;font-weight:bold;">
        SUBJECT: REIMBURSEMENT OF PRELIMINARY / PRE-INCORPORATION EXPENSES
    </p>

    <p style="font-size:14px;line-height:1.8;margin-bottom:16px;">
        The Director, Mr./Ms. <strong>{{ $director_name }}</strong>, informed the Board that certain expenses were incurred by the promoters before and at the time of incorporation of the Company. Since these expenses were incurred on behalf of the Company for the purpose of its formation and registration, the same are required to be reimbursed to the promoters. A complete statement of all pre-incorporation expenses incurred by the promoters, duly supported by vouchers and receipts, was placed before the Board for consideration and approval.
    </p>

    <p style="font-size:14px;line-height:1.8;margin-bottom:16px;">
        <strong>"RESOLVED THAT</strong> the pre-incorporation expenses amounting to Rs. <strong>{{ $expense_amount }}</strong>/‑ (Rupees <strong>{{ $expense_words }}</strong> only), as detailed in the statement placed before the Board (Annexure-A), being the expenses incurred by the promoters before and at the time of incorporation of the Company, be and are hereby taken on record and accounted for in the books of the Company under the head 'Preliminary Expenses' or such other appropriate head as may be determined by the auditors.
    </p>

    <p style="font-size:14px;line-height:1.8;margin-bottom:16px;">
        <strong>RESOLVED FURTHER THAT</strong> the said amount incurred as preliminary/pre-incorporation expenses be and is hereby approved for reimbursement to the promoters as per the details mentioned in the statement.
    </p>

    <p style="font-size:14px;line-height:1.8;margin-bottom:16px;">
        <strong>RESOLVED FURTHER THAT</strong> any Director of the Company be and is hereby authorised to sign cheques, authorise fund transfers, or make payments by any other mode to reimburse the promoters for the pre-incorporation expenses, and to do all such acts, deeds, matters, and things as may be necessary, proper, or expedient to give effect to this resolution."
    </p>

    @if(!empty($expense_lines))
    <p style="font-size:14px;line-height:1.8;margin-bottom:8px;"><strong>Annexure-A: Statement of Pre-Incorporation Expenses</strong></p>
    <table style="width:100%; border-collapse:collapse; margin-bottom:16px;">
        <thead>
            <tr style="background:#f5f5f5;">
                <th style="border:1px solid #ddd; padding:8px;">Date</th>
                <th style="border:1px solid #ddd; padding:8px;">Nature of Expense</th>
                <th style="border:1px solid #ddd; padding:8px;">Paid To</th>
                <th style="border:1px solid #ddd; padding:8px;">Amount (₹)</th>
                <th style="border:1px solid #ddd; padding:8px;">Reference</th>
            </tr>
        </thead>
        <tbody>
        @foreach($expense_lines as $line)
            @if(isset($line['date']))
            <tr>
                <td style="border:1px solid #ddd; padding:8px;">{{ $line['date'] }}</td>
                <td style="border:1px solid #ddd; padding:8px;">{{ $line['nature'] }}</td>
                <td style="border:1px solid #ddd; padding:8px;">{{ $line['paid_to'] }}</td>
                <td style="border:1px solid #ddd; padding:8px;">{{ $line['amount'] }}</td>
                <td style="border:1px solid #ddd; padding:8px;">{{ $line['reference'] }}</td>
            </tr>
            @else
            <tr>
                <td colspan="5" style="border:1px solid #ddd; padding:8px;">{{ $line['raw'] }}</td>
            </tr>
            @endif
        @endforeach
        </tbody>
    </table>
    @else
    <p style="font-size:14px;line-height:1.8;margin-bottom:16px;">
        <strong>Annexure-A: Statement of Pre-Incorporation Expenses</strong>
        (Attach detailed statement with Date, Nature of Expense, Paid To, Amount, and Supporting Document Reference)
    </p>
    @endif

    <p style="font-size:14px;line-height:1.8;margin-bottom:24px;">
        <strong>CERTIFIED TO BE TRUE</strong>
    </p>

    <p style="font-size:14px;line-height:1.8;margin-bottom:8px;">
        For <strong>{{ $company_name }}</strong>
    </p>
    <p style="font-size:14px;line-height:1.8;margin-bottom:8px;">
        (Name of the Company)
    </p>
    <p style="font-size:14px;line-height:1.8;margin-bottom:8px;">
        <strong>Signature:</strong> _________________________
    </p>
    <p style="font-size:14px;line-height:1.8;margin-bottom:8px;">
        <strong>Name:</strong> {{ $signatory_name }}
    </p>
    <p style="font-size:14px;line-height:1.8;margin-bottom:8px;">
        <strong>Designation:</strong> {{ $signatory_designation }}
    </p>
    <p style="font-size:14px;line-height:1.8;margin-bottom:8px;">
        <strong>DIN:</strong> {{ $din }}
    </p>
    <p style="font-size:14px;line-height:1.8;margin-bottom:8px;">
        <strong>Date:</strong> {{ $formatted_resolution_date }}
    </p>
    <p style="font-size:14px;line-height:1.8;margin-bottom:0;">
        <strong>Place:</strong> {{ $place }}
    </p>

</div>