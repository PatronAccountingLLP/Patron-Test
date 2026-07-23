<div style="margin-top:40px;padding:32px;border:1px solid #E5E5E5;">

    <p style="font-weight:bold; margin-bottom:4px;">{{ $company_name }}</p>
    <p>CIN: {{ $cin }}</p>
    <p>Registered Office: {{ $registered_office }}</p>

    <p style="margin-top:16px; font-weight:bold;">NOTICE OF EXTRAORDINARY GENERAL MEETING</p>

    <p>NOTICE is hereby given that an Extraordinary General Meeting (EGM) of the Members of the Company will be held as per the following details:</p>

    <p><strong>Day & Date:</strong> {{ $formatted_meeting_date }}</p>
    <p><strong>Time:</strong> {{ $meeting_time }}</p>
    <p><strong>Venue:</strong> {{ $venue }}</p>

    <p>to transact the following business:</p>
    <p><strong>SPECIAL BUSINESS:</strong></p>
    <p><strong>Item No. 1: Increase in Authorised Share Capital of the Company</strong></p>
    <p>To consider and, if thought fit, to pass the following resolution as an Ordinary Resolution:</p>

    <p style="margin-left:20px;">
        "RESOLVED THAT pursuant to the provisions of Sections 13, 61, and 64 and other applicable provisions, if any, of the Companies Act, 2013 read with the Companies (Share Capital and Debentures) Rules, 2014 (including any statutory modification(s) or re-enactment(s) thereof for the time being in force), and subject to the provisions of the Memorandum and Articles of Association of the Company, the consent of the Members be and is hereby accorded to increase the Authorised Share Capital of the Company from:
    </p>
    <div style="margin-left:40px;">
       <p> Existing Authorised Share Capital: Rs. {{ $existing_capital_number }}/-</p>
       <p> (Rupees {{ $existing_capital_words }} only)</p>
        divided into {{ $existing_shares }} ({{ $existing_shares_words }}) Equity Shares of Rs. {{ $existing_face_value }}/- each
    </div>
    <div style="margin-left:40px;">
        <p>TO</p>
       <p> Proposed Authorised Share Capital: Rs. {{ $proposed_capital_number }}/-</p>
       <p> (Rupees {{ $proposed_capital_words }} only)</p>
        divided into {{ $proposed_shares }} ({{ $proposed_shares_words }}) Equity Shares of Rs. {{ $proposed_face_value }}/- each
    </div>
    <p style="margin-left:40px;">
        by creation of additional {{ $additional_shares_number }} ({{ $additional_shares_words }}) Equity Shares of Rs. {{ $additional_face_value }}/- each, ranking pari passu in all respects with the existing Equity Shares of the Company.
    </p>
    <p style="margin-left:20px;">
        RESOLVED FURTHER THAT pursuant to the aforesaid increase in the Authorised Share Capital, Clause V (Capital Clause) of the Memorandum of Association of the Company be and is hereby substituted with the following new Clause V:
    </p>
    <p style="margin-left:40px;">
        "V. The Authorised Share Capital of the Company is Rs. {{ $proposed_capital_number }}/- (Rupees {{ $proposed_capital_words }} only) divided into {{ $proposed_shares }} ({{ $proposed_shares_words }}) Equity Shares of Rs. {{ $proposed_face_value }}/- each."
    </p>
    <p style="margin-left:20px;">
        RESOLVED FURTHER THAT any Director or Company Secretary of the Company be and is hereby authorised to file Form SH-7 and other necessary forms, applications, and documents with the Registrar of Companies, and to do all such acts, deeds, matters, and things as may be necessary, proper, or expedient to give effect to this resolution."
    </p>

    <p><strong>EXPLANATORY STATEMENT PURSUANT TO SECTION 102 OF THE COMPANIES ACT, 2013</strong></p>
    <p><strong>Item No. 1:</strong></p>
    <p>The Company proposes to increase its Authorised Share Capital to meet its future business requirements and expansion plans. The existing Authorised Share Capital of the Company is Rs. {{ $existing_capital_number }}/- divided into {{ $existing_shares }} Equity Shares of Rs. {{ $existing_face_value }}/- each.</p>
    <p>It is proposed to increase the Authorised Share Capital to Rs. {{ $proposed_capital_number }}/- divided into {{ $proposed_shares }} Equity Shares of Rs. {{ $proposed_face_value }}/- each, by creation of additional {{ $additional_shares_number }} Equity Shares of Rs. {{ $additional_face_value }}/- each.</p>
    <p><strong>Reason for increase:</strong> {{ $reason }}</p>
    <p>The Board recommends the Ordinary Resolution as set out in Item No. 1 of this Notice for approval by the Members.</p>

    <p><strong>Notes:</strong></p>
    <p>1. A member entitled to attend and vote at the meeting is entitled to appoint a proxy to attend and vote instead of himself/herself. A proxy need not be a member of the Company.</p>
    <p>2. The instrument of proxy, duly completed and signed, must be deposited at the Registered Office of the Company not less than 48 hours before the commencement of the meeting.</p>
    <p>3. Members are requested to bring their copy of the Notice to the meeting.</p>

    <p><strong>By Order of the Board</strong></p>
    <p>For {{ $company_name }}</p>
    <p><strong>Signature:</strong> _________________________</p>
    <p><strong>Name:</strong> {{ $signatory_name }}</p>
    <p><strong>Designation:</strong> {{ $signatory_designation }}</p>
    <p><strong>Place:</strong> {{ $place }}</p>
    <p><strong>Date:</strong> {{ $formatted_notice_date }}</p>

</div>