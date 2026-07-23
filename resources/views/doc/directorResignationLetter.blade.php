<!-- Doc file template (no <br> tags) -->
<div style="margin-top:40px;padding:32px;border:1px solid #E5E5E5;">

    <h2 style="text-align:center; margin-bottom:20px;">COMPANY DIRECTOR RESIGNATION LETTER</h2>

    <p style="font-size:14px;line-height:1.8;margin-bottom:8px;">To,</p>
    <p style="font-size:14px;line-height:1.8;margin-bottom:4px;">The Board of Directors,</p>
    <p style="font-size:14px;line-height:1.8;margin-bottom:4px;"><strong>{{ $company_name }}</strong></p>
    <p style="font-size:14px;line-height:1.8;margin-bottom:16px;"><strong>{{ $registered_office }}</strong></p>

    <p style="font-size:14px;line-height:1.8;margin-bottom:8px;">
        <strong>Subject: Resignation from the position of Director</strong>
    </p>

    <p style="font-size:14px;line-height:1.8;margin-bottom:8px;">Dear Members of the Board,</p>

    <p style="font-size:14px;line-height:1.8;margin-bottom:16px;">
        I write to formally notify you of my decision to resign from the position of Director of the Company. After careful consideration of my personal and professional commitments, I have concluded that I am unable to continue discharging my duties and responsibilities as a Director of the Company.
    </p>

    @if($reason)
    <p style="font-size:14px;line-height:1.8;margin-bottom:16px;">
        <strong>Reason for resignation:</strong> {{ $reason }}
    </p>
    @endif

    <p style="font-size:14px;line-height:1.8;margin-bottom:16px;">
        I hereby tender my resignation from the Board of Directors with effect from <strong>{{ $formatted_effective_date }}</strong>. I request you to kindly accept this resignation and initiate the necessary formalities for updating the records with the Registrar of Companies.
    </p>

    <p style="font-size:14px;line-height:1.8;margin-bottom:16px;">
        I express my sincere gratitude for the opportunity to have served on the Board and contributed to the growth and governance of the Company. I remain available to assist with any transition-related matters to ensure continuity of operations.
    </p>

    <p style="font-size:14px;line-height:1.8;margin-bottom:8px;">Thanking you,</p>
    <p style="font-size:14px;line-height:1.8;margin-bottom:16px;">Yours faithfully,</p>

    <div style="margin-top:20px;">
        <p style="font-size:14px;line-height:1.8;margin-bottom:4px;"><strong>Signature:</strong> _________________________</p>
        <p style="font-size:14px;line-height:1.8;margin-bottom:4px;"><strong>Name:</strong> {{ $director_name }}</p>
        <p style="font-size:14px;line-height:1.8;margin-bottom:4px;"><strong>Director Identification Number (DIN):</strong> {{ $din }}</p>
        <p style="font-size:14px;line-height:1.8;margin-bottom:4px;"><strong>Date:</strong> {{ $formatted_letter_date }}</p>
        <p style="font-size:14px;line-height:1.8;margin-bottom:0;"><strong>Place:</strong> {{ $place }}</p>
    </div>

</div>