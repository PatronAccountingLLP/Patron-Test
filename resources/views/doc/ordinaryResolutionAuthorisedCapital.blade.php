<!-- Doc file template (no <br> tags) -->
<div style="margin-top:40px;padding:32px;border:1px solid #E5E5E5;">

    <p style="font-size:14px;line-height:1.8;margin-bottom:8px;"><strong>{{ $company_name }}</strong></p>
    <p style="font-size:14px;line-height:1.8;margin-bottom:4px;"><strong>CIN: {{ $cin }}</strong></p>
    <p style="font-size:14px;line-height:1.8;margin-bottom:4px;"><strong>Registered Office: {{ $registered_office }}</strong></p>

    <p style="font-size:16px;line-height:1.8;margin-bottom:16px;margin-top:24px;text-align:center;font-weight:bold;">
        CERTIFIED TRUE COPY OF THE ORDINARY RESOLUTION
    </p>

    <p style="font-size:14px;line-height:1.8;margin-bottom:16px;text-align:center;">
        Passed at the General Meeting of the Members held on <strong>{{ $formatted_meeting_date }}</strong> at <strong>{{ $meeting_time }}</strong> (Hours) at the Registered Office of the Company
    </p>

    <p style="font-size:14px;line-height:1.8;margin-bottom:16px;font-weight:bold;">
        SUBJECT: INCREASE IN THE AUTHORISED SHARE CAPITAL
    </p>

    <p style="font-size:14px;line-height:1.8;margin-bottom:16px;">
        <strong>"RESOLVED THAT</strong> pursuant to the provisions of Section 13(1) read with Sections 61 and 64 and other applicable provisions, if any, of the Companies Act, 2013 (including any statutory modification or re-enactment thereof) and the rules framed thereunder, the approval of the shareholders be and is hereby accorded to increase the Authorised Share Capital of the Company from the existing Rs. <strong>{{ $existing_capital_number }}</strong>/‑ (Rupees <strong>{{ $existing_capital_words }}</strong> only) divided into <strong>{{ $existing_shares }}</strong> Equity Shares of Rs. <strong>{{ $existing_face_value }}</strong>/‑ each to Rs. <strong>{{ $new_capital_number }}</strong>/‑ (Rupees <strong>{{ $new_capital_words }}</strong> only) divided into <strong>{{ $new_shares }}</strong> Equity Shares of Rs. <strong>{{ $new_face_value }}</strong>/‑ each, by creation of additional <strong>{{ $additional_shares }}</strong> Equity Shares of Rs. <strong>{{ $additional_face_value }}</strong>/‑ each, ranking pari passu in all respects with the existing Equity Shares of the Company."
    </p>

    <p style="font-size:14px;line-height:1.8;margin-bottom:16px;">
        <strong>"RESOLVED FURTHER THAT</strong> pursuant to the provisions of Sections 13, 61, and 64 and other applicable provisions of the Companies Act, 2013 (including any statutory modification or re-enactment thereof) and the rules framed thereunder, the consent of the Members of the Company be and is hereby accorded to substitute the existing Clause V of the Memorandum of Association with the following new Clause V:"
    </p>

    <p style="font-size:14px;line-height:1.8;margin-bottom:16px;font-style:italic;margin-left:20px;">
        'The Authorised Share Capital of the Company is Rs. <strong>{{ $new_capital_number }}</strong>/‑ (Rupees <strong>{{ $new_capital_words }}</strong> only) divided into <strong>{{ $new_shares }}</strong> Equity Shares of Rs. <strong>{{ $new_face_value }}</strong>/‑ each.'
    </p>

    <p style="font-size:14px;line-height:1.8;margin-bottom:16px;">
        <strong>"RESOLVED FURTHER THAT</strong> the Board of Directors of the Company be and is hereby authorised to take all necessary steps to implement the above resolutions, including filing of requisite forms with the Registrar of Companies and to do all such acts, deeds, matters, and things as may be necessary, proper, or expedient to give effect to this resolution."
    </p>

    <div style="margin-top:30px;">
        <p style="font-size:14px;line-height:1.8;margin-bottom:8px;">For <strong>{{ $company_name }}</strong></p>
        <p style="font-size:14px;line-height:1.8;margin-bottom:4px;"><strong>Signature:</strong> _________________________</p>
        <p style="font-size:14px;line-height:1.8;margin-bottom:4px;"><strong>Name:</strong> {{ $signatory_name }}</p>
        <p style="font-size:14px;line-height:1.8;margin-bottom:4px;"><strong>Designation:</strong> {{ $signatory_designation }}</p>
        <p style="font-size:14px;line-height:1.8;margin-bottom:4px;"><strong>DIN (if applicable):</strong> {{ $signatory_din ?: '________________' }}</p>
        <p style="font-size:14px;line-height:1.8;margin-bottom:4px;"><strong>Date:</strong> {{ $formatted_meeting_date }}</p>
        <p style="font-size:14px;line-height:1.8;margin-bottom:0;"><strong>Place:</strong> {{ $place }}</p>
    </div>

</div>