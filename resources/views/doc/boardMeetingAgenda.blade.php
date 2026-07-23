<div style="margin-top:40px;padding:32px;border:1px solid #E5E5E5;">

    <p style="font-weight:bold; margin-bottom:4px;">{{ $company_name }}</p>
    <p>CIN: {{ $cin }}</p>
    <p>Registered Office: {{ $registered_office }}</p>

    <p style="margin-top:16px; font-weight:bold;">AGENDA</p>
    <p>FOR THE MEETING OF THE BOARD OF DIRECTORS</p>
    <p>of {{ $company_name }}</p>

    <p><strong>Day & Date:</strong> {{ $formatted_meeting_date }}</p>
    <p><strong>Time:</strong> {{ $meeting_time }}</p>
    <p><strong>Venue:</strong> {{ $venue }}</p>
    <p><strong>Mode of Meeting:</strong> {{ $mode }}</p>

    <p><strong>S.No.</strong> &nbsp;&nbsp; <strong>Agenda Items</strong></p>
    @foreach($agenda_items as $index => $item)
    <p>{{ $index+1 }}. {{ $item }}</p>
    @endforeach

    <p><strong>Date of Next Board Meeting:</strong> To be decided at the meeting</p>

    <p>For {{ $company_name }}</p>
    <p>{{ $signatory_name }}</p><p>{{ $signatory_designation }}</p>
    <p><strong>Date:</strong> {{ $formatted_agenda_date }}</p>

</div>