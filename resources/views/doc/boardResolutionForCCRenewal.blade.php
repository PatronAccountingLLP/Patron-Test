<div style="padding:32px;font-size:14px;line-height:1.8;">

<p><strong>{{ $company_name }}</strong></p>
<p>CIN: {{ $cin }}</p>
<p>{{ $registered_office }}</p>
<p>Email: {{ $email }}</p>

<p style="text-align:center;">
<strong>CERTIFIED TRUE COPY OF THE BOARD RESOLUTION</strong>
</p>

<p>
Passed at the Meeting of the Board of Directors held on
<strong>{{ $resolutionDate }}</strong>
at the Registered Office of the Company.
</p>

<p><strong>Subject:</strong> Renewal of Cash Credit / Overdraft Facility</p>

<p>
RESOLVED THAT the consent of the Board of Directors be and is hereby accorded to request <strong>{{ $bank_name }}</strong>, <strong>{{ $branch_name }}</strong> to renew the existing Cash Credit / Overdraft facility to the extent of Rs. <strong>{{ $cc_amount }}</strong> (Rupees {{ $cc_amount_words }} only).
</p>

<p>
RESOLVED FURTHER THAT Mr./Ms.
<strong>{{ $authorized_person }}</strong>,
<strong>{{ $designation }}</strong>,
holding DIN <strong>{{ $din }}</strong>,
be authorised to execute all documents and create or modify charge.
</p>

<p>
RESOLVED FURTHER THAT the authorised person be empowered to digitally sign
and file e-forms with MCA under the Companies Act, 2013.
</p>

<p>
For and on behalf of <strong>{{ $company_name }}</strong>
</p>

<p>Signature: ______________________</p>
<p>Name: {{ $authorized_person }}</p>
<p>Designation: {{ $designation }}</p>
<p>DIN: {{ $din }}</p>
<p>Date: {{ $resolutionDate }}</p>
<p>Place: {{ $place }}</p>

</div>
