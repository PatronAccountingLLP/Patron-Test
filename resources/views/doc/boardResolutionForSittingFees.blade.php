
<div style="margin-top:40px;padding:32px;border:1px solid #E5E5E5;">

    <p style="font-size:14px;line-height:1.8;margin-bottom:16px;">
        <strong>{{ $company_name }}</strong>
    </p>

    <p style="font-size:14px;line-height:1.8;margin-bottom:16px;">
        <strong>CIN:</strong> {{ $cin }}
    </p>

    <p style="font-size:14px;line-height:1.8;margin-bottom:16px;">
        <strong>Registered Office:</strong> {{ $registered_office }}
    </p>

    <p style="font-size:14px;line-height:1.8;margin-bottom:16px;">
        <strong>Email:</strong> {{ $email }}
    </p>

    <p style="font-size:14px;line-height:1.8;margin-bottom:16px;text-align:center;">
        <strong>CERTIFIED TRUE COPY OF THE BOARD RESOLUTION</strong>
    </p>

    <p style="font-size:14px;line-height:1.8;margin-bottom:16px;">
        Passed at the Meeting of the Board of Directors of the Company
    </p>

    <p style="font-size:14px;line-height:1.8;margin-bottom:8px;">
        <strong>Date of Meeting:</strong> {{ $formattedMeetingDate }}
    </p>

    <p style="font-size:14px;line-height:1.8;margin-bottom:8px;">
        <strong>Time:</strong> {{ $formattedMeetingTime }}
    </p>

    <p style="font-size:14px;line-height:1.8;margin-bottom:16px;">
        <strong>Venue:</strong> Registered Office of the Company
    </p>

    <p style="font-size:14px;line-height:1.8;margin-bottom:16px;">
        <strong>SUBJECT: SITTING FEES TO DIRECTORS</strong>
    </p>

    @if($sitting_fees_type == 'no_fees')
    {{-- Option A: Where No Sitting Fees are Payable --}}
    <p style="font-size:14px;line-height:1.8;margin-bottom:16px;">
        <strong>"RESOLVED THAT</strong> pursuant to the provisions of the Articles of Association of the Company and Section 197 of the Companies Act, 2013 read with rules made thereunder, the consent of the Board of Directors be and is hereby accorded that no sitting fees shall be payable to the Directors for attending Board Meetings or Committee Meetings during the Financial Year <strong>{{ $financial_year }}</strong>."
    </p>

    @else
    {{-- Option B: Where Sitting Fees are Payable --}}
    <p style="font-size:14px;line-height:1.8;margin-bottom:16px;">
        <strong>"RESOLVED THAT</strong> pursuant to the provisions of the Articles of Association of the Company and Section 197 of the Companies Act, 2013 read with the Companies (Appointment and Remuneration of Managerial Personnel) Rules, 2014 and other applicable rules, the consent of the Board of Directors be and is hereby accorded to pay sitting fees to the Directors for attending Board Meetings and Committee Meetings during the Financial Year <strong>{{ $financial_year }}</strong> as follows:
    </p>

    <ul style="font-size:14px;line-height:1.8;margin-bottom:16px;margin-left:20px;">
        <li>For attending each Board Meeting: Rs. {{ number_format($board_meeting_fees) }}/- (Rupees {{ $board_meeting_fees_words ?? '' }} Only)</li>
        <li>For attending each Committee Meeting: Rs. {{ number_format($committee_meeting_fees) }}/- (Rupees {{ $committee_meeting_fees_words ?? '' }} Only)</li>
    </ul>
    @endif

    <p style="font-size:14px;line-height:1.8;margin-bottom:16px;">
        <strong>RESOLVED FURTHER THAT</strong> any Director or the Company Secretary of the Company be and is hereby authorised to do all such acts, deeds, matters, and things as may be considered necessary, desirable, or expedient for the purpose of giving effect to this resolution, including making necessary entries in the books of accounts and ensuring timely payment of sitting fees to the Directors."
    </p>

    <p style="font-size:14px;line-height:1.8;margin-bottom:24px;">
        <strong>Certified to be a True Copy</strong>
    </p>

    <p style="font-size:14px;line-height:1.8;margin-bottom:16px;">
For <strong>{{ $company_name }}</strong>
    </p>

    <p style="font-size:14px;line-height:1.8;margin-bottom:8px;">
        <strong>Signature:</strong> _________________________
    </p>

    <p style="font-size:14px;line-height:1.8;margin-bottom:8px;">
        <strong>Name:</strong> {{ $director_name }}
    </p>

    <p style="font-size:14px;line-height:1.8;margin-bottom:8px;">
        <strong>Designation:</strong> {{ $designation }}
    </p>

    <p style="font-size:14px;line-height:1.8;margin-bottom:8px;">
        <strong>DIN:</strong> {{ $din }}
    </p>

    <p style="font-size:14px;line-height:1.8;margin-bottom:8px;">
        <strong>Date:</strong> {{ $formattedResolutionDate }}
    </p>

    <p style="font-size:14px;line-height:1.8;margin-bottom:0;">
        <strong>Place:</strong> {{ $place }}
    </p>

</div>