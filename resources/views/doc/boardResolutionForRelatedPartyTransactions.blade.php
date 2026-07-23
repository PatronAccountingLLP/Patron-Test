<!-- Doc file template -->
<div style="margin-top:40px;padding:32px;border:1px solid #E5E5E5;">

    <p style="font-size:14px;line-height:1.8;margin-bottom:8px;">
        <strong>{{ $company_name }}</strong>
    </p>

    <p style="font-size:14px;line-height:1.8;margin-bottom:8px;">
        <strong>CIN: {{ $cin }}</strong>
    </p>

    <p style="font-size:14px;line-height:1.8;margin-bottom:8px;">
        <strong>Registered Office:</strong> {{ $registered_office }}
    </p>

    <p style="font-size:16px;line-height:1.8;margin-bottom:24px;text-align:center;font-weight:bold;">
        CERTIFIED TRUE COPY OF THE BOARD RESOLUTION
    </p>

    <p style="font-size:14px;line-height:1.8;margin-bottom:16px;text-align:center;">
        Passed at the Meeting of the Board of Directors of the Company
    </p>

    <p style="font-size:14px;line-height:1.8;margin-bottom:16px;">
        <strong>Date of Meeting:</strong> {{ $formatted_meeting_date }}
        <strong>Time:</strong> {{ $meeting_time }} (Hours)
        <strong>Venue:</strong> Registered Office of the Company at {{ $registered_office }}
    </p>

    <p style="font-size:14px;line-height:1.8;margin-bottom:16px;font-weight:bold;">
        SUBJECT: APPROVAL OF RELATED PARTY TRANSACTION
    </p>

    <p style="font-size:14px;line-height:1.8;margin-bottom:16px;">
        <strong>Details of the Related Party Transaction:</strong>
        <strong>Name of the Related Party:</strong> {{ $related_party_name }}
        <strong>Nature of Relationship:</strong> {{ $nature_of_relationship }}
        <strong>Nature of Transaction:</strong> {{ $nature_of_transaction }}
        <strong>Value of Transaction:</strong> Rs. {{ $transaction_value_number }} (Rupees {{ $transaction_value_words }} only)
    </p>

    <p style="font-size:14px;line-height:1.8;margin-bottom:16px;">
        <strong>"RESOLVED THAT</strong> pursuant to the provisions of Section 188 and other applicable provisions of the Companies Act, 2013 read with Rule 15 of the Companies (Meetings of Board and its Powers) Rules, 2014, and the applicable provisions of the SEBI (Listing Obligations and Disclosure Requirements) Regulations, 2015 (if applicable), and subject to such other approvals as may be required, the consent of the Board of Directors be and is hereby accorded to enter into the following transaction with <strong>{{ $related_party_name }}</strong>, being a related party within the meaning of Section 2(76) of the Companies Act, 2013:
    </p>

    <p style="font-size:14px;line-height:1.8;margin-bottom:16px;">
        <strong>Nature of Transaction:</strong> {{ $nature_of_transaction }}
        <strong>Maximum Value:</strong> Rs. {{ $transaction_value_number }} (Rupees {{ $transaction_value_words }} only)
        <strong>Duration/Period:</strong> {{ $duration }}
    </p>

    <p style="font-size:14px;line-height:1.8;margin-bottom:16px;">
        <strong>"RESOLVED FURTHER THAT</strong> the Board hereby confirms that the aforesaid transaction is at arm's length and in the ordinary course of business of the Company."
    </p>

    <p style="font-size:14px;line-height:1.8;margin-bottom:16px;">
        <strong>"RESOLVED FURTHER THAT</strong> <strong>{{ $authorized_name }}</strong>, {{ $authorized_designation }} of the Company, be and is hereby authorised to execute all necessary agreements, documents, and instruments, and to do all such acts, deeds, matters, and things as may be necessary, proper, or expedient to give effect to the aforesaid resolution."
    </p>

    <p style="font-size:14px;line-height:1.8;margin-bottom:16px;">
        <strong>"RESOLVED FURTHER THAT</strong> the particulars of this related party transaction shall be entered in the Register of Contracts maintained under Section 189 of the Companies Act, 2013, and disclosed in the Board's Report as required under the applicable provisions of law."
    </p>

    @if($interested_directors && trim($interested_directors) != '')
    <p style="font-size:14px;line-height:1.8;margin-bottom:16px;">
        <strong>Note:</strong> The following Director(s), being interested in the above transaction, abstained from voting on this resolution: {{ $interested_directors }}
    </p>
    @endif

    <p style="font-size:14px;line-height:1.8;margin-bottom:24px;">
        For <strong>{{ $company_name }}</strong>
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
        <strong>DIN:</strong> {{ $signatory_din }}
    </p>

    <p style="font-size:14px;line-height:1.8;margin-bottom:8px;">
        <strong>Date:</strong> {{ $formatted_meeting_date }}
    </p>

    <p style="font-size:14px;line-height:1.8;margin-bottom:0;">
        <strong>Place:</strong> {{ $place }}
    </p>

</div>