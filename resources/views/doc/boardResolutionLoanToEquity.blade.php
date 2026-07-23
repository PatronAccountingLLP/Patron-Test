<div style="padding:32px;border:1px solid #ddd;">

    <p style="margin-bottom:12px;">
        <strong>{{ $company_name }}</strong>
    </p>

    <p style="margin-bottom:12px;">
        <strong>CIN:</strong> {{ $cin }}
    </p>

    <p style="margin-bottom:12px;">
        {{ $registered_office }}
    </p>

    <p style="margin-bottom:12px;">
        <strong>Email:</strong> {{ $email }}
    </p>

    <p style="margin-bottom:16px;">
        <strong>CERTIFIED TRUE COPY OF THE BOARD RESOLUTION</strong>
    </p>

    <p style="margin-bottom:16px;">
        Passed at the Meeting of the Board of Directors held on
        <strong>{{ $formattedMeetingDate }}</strong>
        at the Registered Office of the Company.
    </p>

    <p style="margin-bottom:16px;">
        <strong>Subject: Conversion of Loan into Equity Shares</strong>
    </p>

    <p style="margin-bottom:16px;">
        RESOLVED THAT pursuant to the loan agreement dated
        <strong>{{ $formattedLoanDate }}</strong> for Rs.
        <strong>{{ $loan_amount }}</strong>, carrying interest at
        <strong>{{ $interest_rate }}%</strong>, and as per mutual consent dated
        <strong>{{ $formattedConvDate }}</strong>, the Board hereby approves
        conversion of the outstanding loan into equity shares.
    </p>

    <p style="margin-bottom:16px;text-align:justify;">RESOLVED FURTHER THAT pursuant to Section 62 of the Companies Act, 2013,<strong>{{ $equity_shares }}</strong> equity shares of face value Rs. <strong>{{ $face_value }}</strong> each at issue price Rs.<strong>{{ $issue_price }}</strong> (including premium of Rs. <strong>{{ $premium }}</strong>) be issued in full satisfaction of the loan.
    </p>

    <p style="margin-bottom:16px;">RESOLVED FURTHER THAT the equity shares so issued shall rank pari passu in all respects with the existing equity shares of the Company.
    </p>

    <p style="margin-bottom:24px;">RESOLVED FURTHER THAT any Director or the Company Secretary of the Company be and is hereby authorised to sign, execute and file the requisite e-forms with the Registrar of Companies and to do all such acts, deeds and things as may be necessary to give effect to the above resolution.
    </p>

    <p style="margin-bottom:16px;">
 For <strong>{{ $company_name }}</strong>
    </p>

    <p style="margin-bottom:8px;">
<strong>Signature:</strong> _______________________
    </p>

    <p style="margin-bottom:8px;">
<strong>Name:</strong> {{ $director_name }}
    </p>

    <p style="margin-bottom:8px;">
<strong>Designation:</strong> Director
    </p>

    <p style="margin-bottom:0;">
<strong>DIN:</strong> {{ $din }}
    </p>

</div>
