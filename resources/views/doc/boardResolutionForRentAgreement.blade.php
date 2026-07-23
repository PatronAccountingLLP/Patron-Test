<div style="padding:32px;border:1px solid #e5e5e5;font-size:14px;line-height:1.8;">

    <p><strong>{{ $company_name }}</strong></p>
    <p><strong>CIN:</strong> {{ $cin }}</p>
    <p>{{ $registered_office }}</p>
    <p>Email ID: {{ $email }}</p>

    <p style="text-align:center;">
        <strong>CERTIFIED TRUE COPY OF THE BOARD RESOLUTION</strong>
    </p>

    <p>
 Passed at the Meeting of the Board of Directors held on <strong>{{ $resolutionDate }}</strong>  at the Registered Office of the Company situated at <strong>{{ $registered_office }}</strong>.
    </p>

    <p><strong>Subject:</strong> Authorisation to Execute Rent / Lease Agreement</p>

    <p>
Mr./Ms. <strong>{{ $authorized_person }}</strong>, Director of the Company, apprised the Board that the Company proposes to take suitable office premises on lease for operational requirements. The draft rent/lease agreement was placed before the Board.
    </p>

    <p>
<strong>RESOLVED THAT</strong> the consent of the Board of Directors be and is hereby accorded to take on lease the office premises situated at <strong>{{ $leased_address }}</strong> at a monthly rent of Rs. <strong>{{ $monthly_rent }}</strong> ({{ $rent_words }} only).
    </p>

    <p>
<strong>RESOLVED FURTHER THAT</strong> Mr./Ms. <strong>{{ $authorized_person }}</strong>,  <strong>{{ $designation }}</strong>, holding DIN <strong>{{ $din }}</strong>, be authorised to represent the Company and to negotiate, finalise, sign and execute the rent/lease agreement and all related documents.
    </p>

    <p><strong><i>CERTIFIED TRUE COPY</i></strong></p>

    <p>For <strong>{{ $company_name }}</strong></p>

    <p><strong>Signature:</strong> __________________________</p>
    <p><strong>Name:</strong> {{ $authorized_person }}</p>
    <p><strong>Designation:</strong> {{ $designation }}</p>
    <p><strong>DIN:</strong> {{ $din }}</p>
    <p><strong>Date:</strong> {{ $resolutionDate }}</p>
    <p><strong>Place:</strong> {{ $place }}</p>

</div>
