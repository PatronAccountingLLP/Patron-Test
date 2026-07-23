<div style="margin-top:40px;padding:32px;border:1px solid #E5E5E5;">

    <p style="font-size:12px;line-height:1.2;margin-bottom:8px;">
        <strong>{{ $company_name }}</strong>
    </p>

    <p style="font-size:12px;line-height:1.2;margin-bottom:8px;">
        <strong>CIN:</strong> {{ $cin }}
    </p>

    <p style="font-size:12px;line-height:1.2;margin-bottom:16px;">
        {{ $registered_office }}
    </p>

    <p style="font-size:12px;line-height:1.2;margin-bottom:16px;text-align:center;">
        <strong>CERTIFIED TRUE COPY OF THE BOARD RESOLUTION</strong>
    </p>

    <p style="font-size:12px;line-height:1.2;margin-bottom:16px;">Passed at the Meeting of the Board of Directors of the Company held on <strong>{{ $resolutionDate }}</strong> at the Registered Office of the Company.
    </p>

    <p style="font-size:12px;line-height:1.2;margin-bottom:16px;">
        <strong>Subject:</strong> Obtaining Loan / Credit Facility from Bank
    </p>

    <p style="font-size:12px;line-height:1.2;margin-bottom:16px; text-align:justify;">
<strong>RESOLVED THAT</strong> pursuant to the provisions of Section 179 and other applicable provisions of the Companies Act, 2013, the consent of the Board be and is hereby accorded to obtain and avail financial assistance / credit facility of an amount not exceeding <strong>₹ {{ $loan_amount }}</strong> from <strong>{{ $bank_name }}</strong> @if(!empty($branch_name)), {{ $branch_name }} Branch @endif for the purpose of <strong>{{ $loan_purpose }}</strong> on such terms and conditions as may be approved by the Board.
    </p>

    <p style="font-size:12px;line-height:1.2;margin-bottom:16px; text-align:justify;">
<strong>RESOLVED FURTHER THAT</strong> the Company be and is hereby authorised to execute all necessary loan agreements, deeds, undertakings, security documents and writings as may be required by the Bank, including creation of charge or mortgage on the assets of the Company.
    </p>

    <p style="font-size:12px;line-height:1.2;margin-bottom:16px; text-align:justify;">
<strong>RESOLVED FURTHER THAT</strong> Mr./Ms. <strong>{{ $authorized_director }}</strong>, <strong>{{ $designation }}</strong> of the Company, holding DIN <strong>{{ $din }}</strong>, be and is hereby authorised to sign, execute and submit all applications, agreements, documents and writings and to do all such acts, deeds and things as may be necessary to give effect to this resolution.
    </p>

    <p style="font-size:12px;line-height:1.2;margin-bottom:16px;">
        Certified to be True
    </p>

    <p style="font-size:12px;line-height:1.2;margin-bottom:24px;">
        For <strong>{{ $company_name }}</strong>
    </p>

    <p style="font-size:12px;line-height:1.2;margin-bottom:8px;">
        <strong>Signature:</strong> _________________________
    </p>

    <p style="font-size:12px;line-height:1.2;margin-bottom:8px;">
        <strong>Name:</strong> {{ $authorized_director }}
    </p>

    <p style="font-size:12px;line-height:1.2;margin-bottom:8px;">
        <strong>Designation:</strong> {{ $designation }}
    </p>

    <p style="font-size:12px;line-height:1.2;margin-bottom:8px;">
        <strong>DIN:</strong> {{ $din }}
    </p>

    <p style="font-size:12px;line-height:1.2;margin-bottom:8px;">
        <strong>Place:</strong> {{ $place }}
    </p>

    <p style="font-size:12px;line-height:1.2;margin-bottom:0;">
        <strong>Date:</strong> {{ $resolutionDate }}
    </p>

</div>
