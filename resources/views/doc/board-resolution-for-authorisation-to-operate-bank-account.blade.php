<div style="margin-top:40px;padding:32px;border:1px solid #E5E5E5;">

    <p style="font-size:14px;line-height:1.8;margin-bottom:8px;">
        <strong>{{ $company_name }}</strong>
    </p>

    <p style="font-size:14px;line-height:1.8;margin-bottom:8px;">
        <strong>CIN: {{ $cin }}</strong>
    </p>

    <p style="font-size:14px;line-height:1.8;margin-bottom:8px;">
        <strong>Registered Office: </strong>{{ $registered_office }}
    </p>

    <p style="font-size:14px;line-height:1.8;margin-bottom:16px;">
        <strong>Email: {{ $company_email }}</strong>
    </p>

    <p style="font-size:14px;line-height:1.8;margin-bottom:16px;text-align:center;">
        <strong>CERTIFIED TRUE COPY OF THE BOARD RESOLUTION</strong></p>
    <p style="font-size:14px;line-height:1.8;margin-bottom:16px;text-align:center;">        
        Passed at the Meeting of the Board of Directors of the Company</p>
<p style="font-size:14px;line-height:1.8;margin-bottom:16px;"> Date of Meeting: <strong>{{ $formatted_meeting_date }}</strong></p>
    <p style="font-size:14px;line-height:1.8;margin-bottom:16px;">
Time: <strong>{{ $meeting_time }}</strong> (Hours)</p>
          <p style="font-size:14px;line-height:1.8;margin-bottom:16px;">
Venue: Registered Office of the Company
    </p>

    <p style="font-size:14px;line-height:1.8;margin-bottom:16px;text-align:center;">
        <strong>SUBJECT: AUTHORISATION TO OPERATE BANK ACCOUNT AND INTERNET BANKING FACILITIES</strong>
    </p>

    <p style="font-size:14px;line-height:1.8;margin-bottom:16px;">
<strong>"RESOLVED THAT</strong> a Current Account of the Company maintained in the name of M/s. <strong>{{ $company_name }}</strong> with <strong>{{ $bank_name }}</strong> (Name of the Bank), <strong>{{ $branch_name }}</strong> Branch, <strong>{{ $branch_address }}</strong> (Address of the Branch), be operated by the authorised signatory as specified herein, and the said Bank be instructed to honour all cheques, promissory notes, bills of exchange, and other negotiable instruments drawn, accepted, endorsed, or made on behalf of the Company.
    </p>

    <p style="font-size:14px;line-height:1.8;margin-bottom:8px;">
<strong>RESOLVED FURTHER THAT</strong> Mr./Ms.<strong>{{ $authorized_signatory_name }}</strong> (Name of Authorised Signatory), <strong>{{ $authorized_signatory_designation }}</strong> (Designation), be and is hereby authorised to:
    </p>

    <ul style="font-size:14px;line-height:1.8;margin-bottom:16px;padding-left:20px;">
        <li>Sign and execute all documents, forms, and declarations required for operating the bank account;</li>
        <li>Operate the account including through internet banking and other digital channels;</li>
        <li>Give instructions to the Bank relating to the said account, whether the account is in credit or overdrawn;</li>
        <li>Accept receipts for money, deeds, securities, documents, or any indemnities on behalf of the Company.</li>
    </ul>

    <p style="font-size:14px;line-height:1.8;margin-bottom:16px;">
        <strong>RESOLVED FURTHER THAT</strong> the authority conferred upon the said authorised signatory shall remain valid and effective until revoked by the Board of Directors or until such person ceases to hold office with the Company, whichever occurs earlier.
    </p>

    <p style="font-size:14px;line-height:1.8;margin-bottom:16px;">
        <strong>RESOLVED FURTHER THAT</strong> consent be and is hereby accorded to furnish the specimen signature of Mr./Ms. 
        <strong>{{ $authorized_signatory_name }}</strong> (Name of Authorised Signatory) along with a certified true copy of this resolution to the said Bank for their records and necessary action.
    </p>

    <p style="font-size:14px;line-height:1.8;margin-bottom:16px;">
        <strong>RESOLVED FURTHER THAT</strong> any Director of the Company be and is hereby authorised to perform all such acts, deeds, matters, and things as may be necessary or expedient to give effect to the above resolutions."
    </p>

    <p style="font-size:14px;line-height:1.8;margin-bottom:16px;">
        For <strong>{{ $company_name }}</strong>
    </p>

    <p style="font-size:14px;line-height:1.8;margin-bottom:8px;">
        <strong>Signature:</strong> _________________________
    </p>

    <p style="font-size:14px;line-height:1.8;margin-bottom:8px;">
        <strong>Name:</strong> {{ $authorized_person_name }}
    </p>

    <p style="font-size:14px;line-height:1.8;margin-bottom:8px;">
        <strong>Designation:</strong> {{ $authorized_designation }}
    </p>

    <p style="font-size:14px;line-height:1.8;margin-bottom:8px;">
        <strong>DIN:</strong> {{ $din }}
    </p>

    <p style="font-size:14px;line-height:1.8;margin-bottom:8px;">
        <strong>Place:</strong> {{ $place }}
    </p>

    <p style="font-size:14px;line-height:1.8;margin-bottom:0;">
        <strong>Date:</strong> {{ $formatted_resolution_date }}
    </p>

</div>