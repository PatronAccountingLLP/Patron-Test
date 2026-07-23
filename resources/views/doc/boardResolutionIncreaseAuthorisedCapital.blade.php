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

    <p style="font-size:16px;line-height:1.8;margin-bottom:16px;text-align:center;">
        <strong>CERTIFIED TRUE COPY OF THE BOARD RESOLUTION</strong>
    </p>

    <p style="font-size:14px;line-height:1.8;margin-bottom:16px;text-align:center;">
        Passed at the Meeting of the Board of Directors of the Company
    </p>

    <p style="font-size:14px;line-height:1.8;margin-bottom:16px;">
        <strong>Date of Meeting:</strong> {{ $formattedMeetingDate }}
    </p>

    <p style="font-size:14px;line-height:1.8;margin-bottom:16px;">
        <strong>Time:</strong> {{ $meeting_time }} Hours
    </p>

    <p style="font-size:14px;line-height:1.8;margin-bottom:16px;">
        <strong>Venue:</strong> Registered Office of the Company
    </p>

    <p style="font-size:14px;line-height:1.8;margin-bottom:16px;">
        <strong>SUBJECT: INCREASE IN AUTHORISED SHARE CAPITAL OF THE COMPANY</strong>
    </p>

    <p style="font-size:14px;line-height:1.8;margin-bottom:16px;">
        The Chairman informed the Board that in view of the company's business expansion plans and requirement to raise additional funds, it is proposed to increase the Authorised Share Capital of the Company. The Board discussed the matter in detail and passed the following resolutions:
    </p>

    <p style="font-size:14px;line-height:1.8;margin-bottom:16px;">
        <strong>"RESOLVED THAT</strong> pursuant to the provisions of Section 13(1) read with Section 61 and Section 64 of the Companies Act, 2013 (including any statutory modification or re-enactment thereof for the time being in force) and the rules framed thereunder, and subject to the approval of members of the Company in General Meeting and subject to such other approvals as may be required, the Board of Directors hereby approves the proposal to increase the Authorised Share Capital of the Company from:
    </p>

    <p style="font-size:14px;line-height:1.8;margin-bottom:8px;">
        <strong>Existing Authorised Share Capital:</strong>
    </p>

    <p style="font-size:14px;line-height:1.8;margin-bottom:16px;">
        Rs. {{ $existing_capital_amount }}/- (Rupees {{ $existing_capital_words }} Only) divided into {{ $existing_shares_number }} ({{ $existing_shares_words }}) Equity Shares of Rs. {{ $face_value }}/- each
    </p>

    <p style="font-size:14px;line-height:1.8;margin-bottom:8px;">
        <strong>To:</strong>
    </p>

    <p style="font-size:14px;line-height:1.8;margin-bottom:8px;">
        <strong>Proposed Authorised Share Capital:</strong>
    </p>

    <p style="font-size:14px;line-height:1.8;margin-bottom:16px;">
        Rs. {{ $proposed_capital_amount }}/- (Rupees {{ $proposed_capital_words }} Only) divided into {{ $proposed_shares_number }} ({{ $proposed_shares_words }}) Equity Shares of Rs. {{ $face_value }}/- each
    </p>

    <p style="font-size:14px;line-height:1.8;margin-bottom:16px;">
        by creation of additional {{ $additional_shares_number }} ({{ $additional_shares_words }}) Equity Shares of Rs. {{ $face_value }}/- each, ranking pari passu in all respects with the existing Equity Shares of the Company.
    </p>

    <p style="font-size:14px;line-height:1.8;margin-bottom:16px;">
        <strong>RESOLVED FURTHER THAT</strong> pursuant to the provisions of Section 13, 61 and 64 of the Companies Act, 2013 (including any statutory modification or re-enactment thereof for the time being in force) and the rules framed thereunder, and subject to the approval of members of the Company in General Meeting, the existing Clause V (Capital Clause) of the Memorandum of Association of the Company be and is hereby substituted with the following new Clause V:
    </p>

    <p style="font-size:14px;line-height:1.8;margin-bottom:16px;padding-left:20px;border-left:3px solid #333;">
        <strong>"Clause V:</strong> The Authorised Share Capital of the Company is Rs. {{ $proposed_capital_amount }}/- (Rupees {{ $proposed_capital_words }} Only) divided into {{ $proposed_shares_number }} ({{ $proposed_shares_words }}) Equity Shares of Rs. {{ $face_value }}/- each."
    </p>

    <p style="font-size:14px;line-height:1.8;margin-bottom:16px;">
        <strong>RESOLVED FURTHER THAT</strong> the above resolutions are subject to the approval of the members of the Company in General Meeting by way of Ordinary Resolution / Special Resolution, as may be required.
    </p>

    <p style="font-size:14px;line-height:1.8;margin-bottom:16px;">
        <strong>RESOLVED FURTHER THAT</strong> any Director of the Company be and is hereby authorised to:
    </p>

    <ul style="font-size:14px;line-height:1.8;margin-bottom:16px;margin-left:20px;">
        <li>Convene General Meeting of the members to seek approval for the proposed increase in Authorised Share Capital;</li>
        <li>File Form SH-7 and other requisite forms with the Registrar of Companies within the prescribed time;</li>
        <li>Pay the prescribed fees and stamp duty on the increased Authorised Share Capital;</li>
        <li>Execute and file the amended Memorandum of Association with the ROC;</li>
        <li>Do all such acts, deeds, matters, and things as may be necessary, proper, or expedient for giving effect to this resolution."</li>
    </ul>

    <p style="font-size:14px;line-height:1.8;margin-bottom:40px;">
        &nbsp;
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

    <p style="font-size:14px;line-height:1.8;margin-bottom:0;">
        <strong>DIN:</strong> {{ $din }}
    </p>

</div>