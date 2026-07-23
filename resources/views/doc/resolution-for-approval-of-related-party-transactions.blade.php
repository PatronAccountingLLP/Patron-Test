<div style="margin-top:40px;padding:32px;border:1px solid #E5E5E5;">

    <p style="font-size:14px;line-height:1.8;margin-bottom:8px;">
        <strong>{{ $company_name }}</strong>
    </p>

    <p style="font-size:14px;line-height:1.8;margin-bottom:8px;">
        <strong>CIN: {{ $cin }}</strong>
    </p>

    <p style="font-size:14px;line-height:1.8;margin-bottom:16px;">
        <strong>Registered Office: </strong>{{ $registered_office }}
    </p>

    <p style="font-size:14px;line-height:1.8;margin-bottom:16px;text-align:center;">
        <strong>CERTIFIED TRUE COPY OF THE BOARD RESOLUTION</strong></p>
    <p style="font-size:14px;line-height:1.8;margin-bottom:16px;text-align:center;">        
        Passed at the Meeting of the Board of Directors of the Company</p>
<p style="font-size:14px;line-height:1.8;margin-bottom:16px;">Date of Meeting: <strong>{{ $formatted_meeting_date }}</strong></p>
<p style="font-size:14px;line-height:1.8;margin-bottom:16px;">Time: <strong>{{ $meeting_time }}</strong> (Hours)</p>
<p style="font-size:14px;line-height:1.8;margin-bottom:16px;">Venue: <strong>{{ $meeting_venue }}</strong>
    </p>

    <p style="font-size:14px;line-height:1.8;margin-bottom:16px;text-align:center;">
        <strong>SUBJECT: APPROVAL OF CONTRACT/ARRANGEMENT WITH RELATED PARTY</strong>
    </p>

    <p style="font-size:14px;line-height:1.8;margin-bottom:8px;">
<strong>"RESOLVED THAT</strong> pursuant to the provisions of Section 188 read with Rule 15 of the Companies (Meetings of Board and its Powers) Rules, 2014, and other applicable provisions of the Companies Act, 2013 and rules framed thereunder (including any statutory modification(s) or re-enactment thereof for the time being in force),
    </p>

    @if($shareholder_approval_required && $shareholder_resolution_type)
    <p style="font-size:14px;line-height:1.8;margin-bottom:8px;">
<em>subject to the approval of the members of the Company by way of <strong>{{ $shareholder_resolution_type }}</strong></em>
    </p>
    @endif

    <p style="font-size:14px;line-height:1.8;margin-bottom:8px;">
 the consent of the Board of Directors be and is hereby accorded to enter into a contract/arrangement with:
    </p>

    <div style="margin-left: 20px; margin-bottom: 16px;">
        <p style="font-size:14px;line-height:1.8;margin-bottom:4px;"><strong>Name of Related Party: </strong>{{ $related_party_name }}</p>
        <p style="font-size:14px;line-height:1.8;margin-bottom:4px;"><strong>Nature of Relationship: </strong>{{ $relationship_nature }}</p>
        <p style="font-size:14px;line-height:1.8;margin-bottom:8px;"><strong>Nature of Transaction: </strong>{{ $transaction_nature }}</p>
    </div>

    <p style="font-size:14px;line-height:1.8;margin-bottom:16px;">
        A copy of the proposed contract/arrangement has been placed before the meeting and initialled by the Chairman for identification purposes. The material terms and particulars are as set out in the agenda enclosed with the notice of this meeting.
    </p>

    <p style="font-size:14px;line-height:1.8;margin-bottom:8px;">
<strong>RESOLVED FURTHER THAT</strong> pursuant to the provisions of Section 189 read with Rule 16 of the Companies (Meetings of Board and its Powers) Rules, 2014, and other applicable provisions of the Companies Act, 2013 and rules framed thereunder, Mr./Ms. <strong>{{ $register_authorized_name }}</strong> [Name], <strong>{{ $register_authorized_designation }}</strong> [Designation] of the Company be and is hereby authorised to:
    </p>

    <ul style="font-size:14px;line-height:1.8;margin-bottom:16px;padding-left:20px;">
        <li>Make the necessary entries in the Register of Contracts or Arrangements in which Directors are Interested;</li>
        <li>Authenticate the register and maintain proper records as required under the Act;</li>
        <li>Execute all documents, deeds, and writings and perform all such acts as may be necessary to give effect to this resolution.</li>
    </ul>

    <p style="font-size:14px;line-height:1.8;margin-bottom:16px;">
        <strong>Certified to be a True Copy</strong>
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