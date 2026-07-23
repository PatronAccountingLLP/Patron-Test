<div style="margin-top:40px;padding:32px;border:1px solid #E5E5E5;">

    <p style="font-size:14px;line-height:1.8;margin-bottom:8px;"><strong>{{ $company_name }}</strong></p>
    <p style="font-size:14px;line-height:1.8;margin-bottom:8px;"><strong>CIN: {{ $cin }}</strong></p>
    <p style="font-size:14px;line-height:1.8;margin-bottom:8px;"><strong>Registered Office:</strong> {{ $registered_office }}</p>

    <p style="font-size:16px;line-height:1.8;margin-bottom:24px;text-align:center;font-weight:bold;">
        NOTICE OF BOARD MEETING
    </p>

    <p style="font-size:14px;line-height:1.8;margin-bottom:16px;">
        Notice is hereby given that the <strong>{{ $meeting_number }}</strong> Meeting of the Board of Directors of <strong>{{ $company_name }}</strong> will be held as per the following details:
    </p>

    <p style="font-size:14px;line-height:1.8;margin-bottom:4px;"><strong>Day:</strong> {{ $day }}</p>
    <p style="font-size:14px;line-height:1.8;margin-bottom:4px;"><strong>Date:</strong> {{ $formatted_meeting_date }}</p>
    <p style="font-size:14px;line-height:1.8;margin-bottom:4px;"><strong>Time:</strong> {{ $meeting_time }}</p>
    <p style="font-size:14px;line-height:1.8;margin-bottom:16px;"><strong>Venue:</strong> {{ $venue }}</p>

    <p style="font-size:14px;line-height:1.8;margin-bottom:8px;">to consider and, if thought fit, to transact the following business:</p>

    <p style="font-size:14px;line-height:1.8;margin-bottom:8px;"><strong>AGENDA</strong></p>

    @foreach($agenda_items as $index => $item)
    <p style="font-size:14px;line-height:1.8;margin-left:20px;margin-bottom:4px;">{{ $index+1 }}. {{ $item }}</p>
    @endforeach
    <p style="font-size:14px;line-height:1.8;margin-left:20px;margin-bottom:16px;">{{ count($agenda_items)+1 }}. To consider any other matter with the permission of the Chair.</p>

    <p style="font-size:14px;line-height:1.8;margin-bottom:16px;">
        <strong>Note:</strong> Directors desirous of participating through video conferencing may intimate the same to the Company Secretary / Authorised Person in advance.
    </p>

    <p style="font-size:14px;line-height:1.8;margin-bottom:4px;"><strong>Place:</strong> {{ $place }}</p>
    <p style="font-size:14px;line-height:1.8;margin-bottom:16px;"><strong>Date:</strong> {{ $formatted_notice_date }}</p>

    <div style="margin-top:20px;">
        <p style="font-size:14px;line-height:1.8;margin-bottom:8px;">For <strong>{{ $company_name }}</strong></p>
        <p style="font-size:14px;line-height:1.8;margin-bottom:4px;"><strong>Signature:</strong> _________________________</p>
        <p style="font-size:14px;line-height:1.8;margin-bottom:4px;"><strong>Name:</strong> {{ $signatory_name }}</p>
        <p style="font-size:14px;line-height:1.8;margin-bottom:16px;"><strong>Designation:</strong> {{ $signatory_designation }}</p><p>(Company Secretary / Director)</p>
    </div>

    <p style="font-size:14px;line-height:1.8;margin-bottom:8px;"><strong>Enclosure:</strong> Agenda Notes (if any)</p>
    <p style="font-size:14px;line-height:1.8;margin-bottom:0;"><strong>To:</strong> All Directors of the Company</p>

</div>