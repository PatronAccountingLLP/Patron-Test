<!-- Doc file template -->
<div style="margin-top:40px;padding:32px;border:1px solid #E5E5E5;">

    <p style="font-size:14px;line-height:1.8;margin-bottom:8px;">
        <strong>Date:</strong> {{ $formatted_letter_date }}
    </p>

    <p style="font-size:14px;line-height:1.8;margin-bottom:8px;">
        To,   </p>
       <p> The Board of Directors,</p>
       <p> <strong>{{ $company_name }}</strong></p>
      <p>  <strong>CIN:</strong> {{ $cin }}</p>
      <p>  <strong>Registered Office:</strong> {{ $registered_office }}</p>
 

    <p style="font-size:14px;line-height:1.8;margin:8px; 0px">
        <strong>Subject: Resignation from the position of Statutory Auditor</strong>
    </p>

    <p style="font-size:14px;line-height:1.8;margin-bottom:16px;">
        Dear Sir/Madam,
    </p>

    <p style="font-size:14px;line-height:1.8;margin-bottom:16px;">
        We write to formally notify you of our decision to resign from the position of Statutory Auditor of the Company. {{ $reason }}
    </p>

    <p style="font-size:14px;line-height:1.8;margin-bottom:16px;">
        Accordingly, we hereby tender our resignation as Statutory Auditors of the Company with effect from the date of this letter, i.e., <strong>{{ $formatted_resignation_date }}</strong>.
    </p>

    <p style="font-size:14px;line-height:1.8;margin-bottom:16px;">
        We request you to kindly accept this resignation and treat this letter as formal notice of our cessation as Statutory Auditors of the Company. We confirm that we have no objection to the appointment of any other Chartered Accountant or firm of Chartered Accountants as Statutory Auditors of your Company in our place.
    </p>

    <p style="font-size:14px;line-height:1.8;margin-bottom:16px;">
        We further confirm that there are no circumstances connected with our resignation which we consider should be brought to the notice of the members or creditors of the Company, except for the reason stated above.
    </p>

    <p style="font-size:14px;line-height:1.8;margin-bottom:16px;">
        We request you to file the requisite forms with the Registrar of Companies intimating our resignation within the prescribed time limit as required under the Companies Act, 2013.
    </p>

    <p style="font-size:14px;line-height:1.8;margin-bottom:16px;">
        Thanking you,
        Yours faithfully,
    </p>

    <div style="margin-top:20px;">
        <p style="font-size:14px;line-height:1.8;margin-bottom:8px;">
            For <strong>{{ $firm_name }}</strong>
            Chartered Accountants
            Firm Registration Number (FRN): {{ $frn }}
        </p>
        <p style="font-size:14px;line-height:1.8;margin-bottom:8px;">
            <strong>Signature:</strong> _________________________
            <strong>Name of Partner/Proprietor:</strong> {{ $partner_name }}
            <strong>Membership Number:</strong> {{ $membership_no }}
            <strong>UDIN (if applicable):</strong> {{ $udin ?: 'Not provided' }}
            <strong>Contact Number:</strong> {{ $contact }}
            <strong>Email:</strong> {{ $email }}
            <strong>Date:</strong> {{ $formatted_letter_date }}
            <strong>Place:</strong> {{ $place }}
        </p>
    </div>

</div>