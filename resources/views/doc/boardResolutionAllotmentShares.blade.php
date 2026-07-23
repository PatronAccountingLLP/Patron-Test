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
        SUBJECT: ALLOTMENT OF SHARES AND INCREASE IN PAID-UP SHARE CAPITAL
    </p>

    <p style="font-size:14px;line-height:1.8;margin-bottom:16px;">
        <strong>"RESOLVED THAT</strong> pursuant to Section 62 and other applicable provisions of the Companies Act, 2013 read with the rules made thereunder (including any statutory modification(s) or re-enactment(s) thereof for the time being in force) and the Articles of Association of the Company, the consent of the Board of Directors be and is hereby accorded for allotment of the following shares:
    </p>

    <p style="font-size:14px;line-height:1.8;margin-bottom:4px;">
        <strong>Number of Shares:</strong> {{ $shares_number }} Equity Shares
    </p>
    <p style="font-size:14px;line-height:1.8;margin-bottom:4px;">
        <strong>Face Value per Share:</strong> Rs. {{ $face_value }}/-
    </p>
    <p style="font-size:14px;line-height:1.8;margin-bottom:16px;">
        <strong>Total Consideration:</strong> Rs. {{ $total_consideration }}/- (Rupees {{ $consideration_words }} only)
    </p>

    <p style="font-size:14px;line-height:1.8;margin-bottom:8px;">
        to the persons named in the list below, which has been approved by the Board and signed by the Chairman for identification:
    </p>

    @if(count($allottees) > 0)
        @foreach($allottees as $index => $allottee)
        <p style="font-size:14px;line-height:1.8;margin-left:20px;margin-bottom:4px;">
            <strong>{{ $index+1 }}.</strong> {{ $allottee['name'] }} – {{ $allottee['shares'] }} {{ $allottee['type'] }} Shares [Distinctive Nos. {{ $allottee['from'] }} to {{ $allottee['to'] }}]
        </p>
        @endforeach
    @else
        <p style="font-size:14px;line-height:1.8;margin-left:20px;">[No allottees entered]</p>
    @endif

    <p style="font-size:14px;line-height:1.8;margin-bottom:16px;">
        <strong>RESOLVED FURTHER THAT</strong> any Director of the Company be and is hereby authorised to file Form PAS-3 (Return of Allotment) with the Registrar of Companies within the prescribed time as per the provisions of the Companies Act, 2013, and to take all necessary steps to implement the above resolution.
    </p>
    <p style="font-size:14px;line-height:1.8;margin-bottom:16px;">
        <strong>RESOLVED FURTHER THAT</strong> Share Certificates in respect of the aforesaid shares be issued to the Allottee(s) under the signatures of at least two Directors of the Company, and countersigned by the Company Secretary (if appointed), as per the provisions of the Companies Act, 2013.
    </p>
    <p style="font-size:14px;line-height:1.8;margin-bottom:16px;">
        <strong>RESOLVED FURTHER THAT</strong> the Register of Members be updated to reflect the new shareholding, and necessary entries be made in other statutory registers as applicable."
    </p>

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
    <p style="font-size:14px;line-height:1.8;margin-bottom:0;">
        <strong>Place:</strong> {{ $place }}
    </p>

</div>