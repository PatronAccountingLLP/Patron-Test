<!-- Doc file template -->
<div style="margin-top:40px;padding:32px;border:1px solid #E5E5E5;">

    <p style="font-size:14px;line-height:1.8;margin-bottom:8px;">
        <strong>{{ $parent_company_name }}</strong>
    </p>

    <p style="font-size:14px;line-height:1.8;margin-bottom:8px;">
        <strong>CIN: {{ $parent_cin }}</strong>
    </p>

    <p style="font-size:14px;line-height:1.8;margin-bottom:8px;">
        <strong>Registered Office:</strong> {{ $parent_registered_office }}
    </p>

    <p style="font-size:14px;line-height:1.8;margin-bottom:8px;">
        <strong>Email:</strong> {{ $parent_email }}
    </p>

    <p style="font-size:16px;line-height:1.8;margin-bottom:24px;text-align:center;font-weight:bold;">
        CERTIFIED TRUE COPY OF THE BOARD RESOLUTION
    </p>

    <p style="font-size:14px;line-height:1.8;margin-bottom:16px;text-align:center;">
        Passed at the Meeting of the Board of Directors of the Company
    </p>

<p style="font-size:14px;line-height:1.8;margin-bottom:16px;">
<strong>Date of Meeting:</strong> {{ $formatted_meeting_date }}</p>
<p style="font-size:14px;line-height:1;margin-bottom:16px;">        
<strong>Time:</strong> {{ $meeting_time }} (Hours)</p>
<p style="font-size:14px;line-height:1;margin-bottom:16px;">
<strong>Venue:</strong> Registered Office of the Company
    </p>

    <p style="font-size:14px;line-height:1.8;margin-bottom:16px;font-weight:bold;">
        SUBJECT: INCORPORATION OF A SUBSIDIARY COMPANY
    </p>

    <p style="font-size:14px;line-height:1.8;margin-bottom:16px;">
        <strong>"RESOLVED THAT</strong> Mr./Ms. {{ $auth_person1_name }} (Name) and Mr./Ms. {{ $auth_person2_name }} (Name), {{ $auth_person1_designation }} of the Company, be and are hereby jointly and severally authorised to incorporate a company as a subsidiary of the Company under the provisions of the Companies Act, 2013, with the following particulars:
    </p>

    <p style="font-size:14px;line-height:1.8;margin-bottom:16px;">
<strong>Proposed Name:</strong> {{ $proposed_name }}</p><p style="font-size:14px;line-height:1;margin-bottom:16px;">
(or) <strong>Alternate Name:</strong> {{ $alternate_name ?: '________________' }}</p>
        <p style="font-size:14px;line-height:1;margin-bottom:16px;">
(whichever is made available by the Registrar of Companies)
    </p>

    <p style="font-size:14px;line-height:1.8;margin-bottom:16px;">
<strong>Authorised Capital:</strong> Rs. {{ $authorised_capital_number }} (Rupees {{ $authorised_capital_words }} only)</p>
<p style="font-size:14px;line-height:1;margin-bottom:16px;">        
<strong>Number of Equity Shares:</strong> {{ $equity_shares }}</p>
<p style="font-size:14px;line-height:1;margin-bottom:16px;">
<strong>Face Value per Share:</strong> Rs. {{ $face_value }}
    </p>

    <p style="font-size:14px;line-height:1.8;margin-bottom:16px;">
        <strong>Main Objects of the Subsidiary Company:</strong></p>
        <p style="font-size:14px;line-height:1;">
        1. {{ $main_object1 }}</p>
        <p style="font-size:14px;line-height:1;">
        @if($main_object2)
        2. {{ $main_object2 }}</p><p style="font-size:14px;line-height:1;">
        @endif
        @if($main_object3)
        3. {{ $main_object3 }}
        @endif
    </p>

    <p style="font-size:14px;line-height:1.8;margin-bottom:16px;">
        The Articles of Association of the subsidiary company to be incorporated shall be in pari materia with those of the Company.
    </p>

    <p style="font-size:14px;line-height:1.8;margin-bottom:16px;">
        <strong>RESOLVED FURTHER THAT</strong> Mr./Ms. {{ $auth_person1_name }} (Name) and Mr./Ms. {{ $auth_person2_name }} (Name) be and are hereby jointly and severally authorised to do all acts, deeds, matters, and things necessary in connection with and incidental to the incorporation of the subsidiary aforesaid, including but not limited to:
    </p>

    <ul style="font-size:14px;line-height:1.8;margin-bottom:16px;padding-left:20px;">
        <li>Filing necessary forms, applications, and documents with the Registrar of Companies;</li>
        <li>Signing the Memorandum and Articles of Association of the subsidiary;</li>
        <li>Subscribing to the shares of the subsidiary on behalf of the Company;</li>
        <li>Executing such other documents and doing such other acts as may be required to give effect to this resolution.</li>
    </ul>

    <p style="font-size:14px;line-height:1.8;margin-bottom:24px;margin-to:24px;">">
Certified to be a True Copy
    </p>

    <p style="font-size:14px;line-height:1.8;margin-bottom:8px;">
For <strong>{{ $parent_company_name }}</strong>
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

    <p style="font-size:14px;line-height:1.8;margin-bottom:0;">
<strong>Date:</strong> {{ $formatted_meeting_date }}
    </p>

</div>