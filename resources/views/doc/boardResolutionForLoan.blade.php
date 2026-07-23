<div style="margin-top:40px;padding:32px;border:1px solid #E5E5E5;">

    <p style="font-size:14px;line-height:1.8;margin-bottom:16px;">
        <strong>{{ $company_name }}</strong>
    </p>

    <p style="font-size:14px;line-height:1.8;margin-bottom:16px;">
        <strong>CIN: {{ $cin }}</strong>
    </p>

    <p style="font-size:14px;line-height:1.8;margin-bottom:16px;">
        <strong>Registered Office: </strong> {{ $registered_office }}
    </p>

    <p style="font-size:16px;font-weight:bold;text-align:center;line-height:1.8;margin-bottom:24px;">
        CERTIFIED TRUE COPY OF THE BOARD RESOLUTION
        Passed at the Meeting of the Board of Directors of the Company
    </p>

    <p style="font-size:14px;line-height:1.8;margin-bottom:16px;">
        <strong>Date of Meeting:</strong> {{ $formatted_meeting_date }}
        <strong>Time:</strong> {{ $meeting_time }} (Hours)
        <strong>Venue:</strong> Registered Office of the Company
    </p>

    <p style="font-size:14px;font-weight:bold;line-height:1.8;margin-bottom:16px;">
        SUBJECT: OBTAINING LOAN/CREDIT FACILITY FROM BANK AGAINST SECURITIES
    </p>

    <p style="font-size:14px;line-height:1.8;margin-bottom:16px;">
        The Chairman informed the Board that the Company requires financial assistance from a bank to meet its business requirements. The Board discussed the proposal and the terms of the sanction letter/loan agreement placed before it, and passed the following resolutions:
    </p>

    <p style="font-size:14px;line-height:1.8;margin-bottom:16px;">
        <strong>"RESOLVED THAT</strong> the Company do hereby obtain and avail financial assistance/credit facility of an amount not exceeding Rs. <strong>{{ $loan_amount }}/-</strong> from:
    </p>

    <p style="font-size:14px;line-height:1.8;margin-bottom:16px;">
        <strong>Bank Name:</strong> {{ $bank_name }}
        <strong>Branch:</strong> {{ $bank_branch }}
        <strong>Branch Address:</strong> {{ $branch_address }}
    </p>

    <p style="font-size:14px;line-height:1.8;margin-bottom:16px;">
        in order to meet the <strong>{{ $loan_purpose }}</strong>, and such loan/credit facility shall be obtained on such terms and conditions as specified or contained in the Sanction Letter/Loan Agreement dated <strong>{{ $formatted_sanction_date }}</strong> which has been placed before the Board for approval.
    </p>

    <p style="font-size:14px;line-height:1.8;margin-bottom:16px;">
        <strong>RESOLVED FURTHER THAT</strong> the consent and approval of the Board be and is hereby accorded to the Company to borrow the aforesaid funds on such terms and conditions as mentioned in the Sanction Letter/Loan Agreement dated <strong>{{ $formatted_sanction_date }}</strong>, including:
    </p>

    <ul style="font-size:14px;line-height:1.8;margin-bottom:16px;">
        <li> <strong>Loan Repayment Period:</strong> {{ $repayment_period }}</li>
        <li> <strong>Rate of Interest:</strong> {{ $interest_rate }}% per annum on the outstanding balance</li>
        <li> Other terms as specified in the Sanction Letter/Loan Agreement</li>
    </ul>
    <p style="font-size:14px;line-height:1.8;margin-bottom:16px;">
        <strong>RESOLVED FURTHER THAT</strong> the Board of Directors of the Company be and are hereby authorised to:
    </p>

    <ul style="font-size:14px;line-height:1.8;margin-bottom:16px;">
        <li>Hypothecate the items/assets which are purchased out of the loan funds in favour of the Bank;</li>
        <li>Pledge fixed deposits or other securities of the Company with the Bank as collateral security;</li>
        @if($mortgage_property)
        <li>Deposit the title deeds of the property of the Company situated at <strong>{{ $mortgage_property }}</strong> admeasuring an area of <strong>{{ $property_area }}</strong> to create an equitable mortgage thereon as collateral security in favour of the Bank for the loan amount so borrowed, if required;</li>
        @endif
        <li>Create charge over the assets of the Company and file Form CHG-1 with the Registrar of Companies within the prescribed time.</li>
    </ul>

    <p style="font-size:14px;line-height:1.8;margin-bottom:16px;">
        <strong>RESOLVED FURTHER THAT</strong> Mr./Ms. <strong>{{ $authorized_director }}</strong>, holding DIN: <strong>{{ $din }}</strong>, <strong>{{ $designation }}</strong> of the Company, be and is hereby severally authorised in relation to the said facility to act on behalf of the Company to:
    </p>

    <ul style="font-size:14px;line-height:1.8;margin-bottom:16px;">

    <li>Sign and execute the requisite documents, loan agreements, sanction letters, deeds, undertakings, indemnities, and any other documents as may be required by the Bank;</li>
        <li> Execute mortgage deeds, hypothecation agreements, and other security documents under the Common Seal of the Company (wherever required) in terms of the Articles of Association of the Company;</li>
        <li> Operate the loan account and draw funds from the sanctioned facility;</li>
        <li> Represent the Company before the Bank and other authorities in connection with the loan facility;</li>
        <li> Do all such acts, deeds, matters, and things as may be necessary, proper, or expedient for giving effect to this resolution.</li>
    </ul>

    <div style="margin-top:40px;">
        <p style="font-size:14px;line-height:1.8;margin-bottom:8px;">
            <strong>For {{ $company_name }}</strong>
        </p>

        <p style="font-size:14px;line-height:1.8;margin-bottom:8px;">
            <strong>Signature:</strong> _________________________
        </p>

        <p style="font-size:14px;line-height:1.8;margin-bottom:8px;">
            <strong>Name:</strong> {{ $authorized_director }}
        </p>

        <p style="font-size:14px;line-height:1.8;margin-bottom:8px;">
            <strong>Designation:</strong> {{ $designation }}
        </p>

        <p style="font-size:14px;line-height:1.8;margin-bottom:8px;">
            <strong>DIN:</strong> {{ $din }}
        </p>

        <p style="font-size:14px;line-height:1.8;margin-bottom:8px;">
            <strong>Place:</strong> {{ $state }}
        </p>

        <p style="font-size:14px;line-height:1.8;margin-bottom:0;">
            <strong>Date:</strong> {{ $formatted_meeting_date }}
        </p>
    </div>

</div>