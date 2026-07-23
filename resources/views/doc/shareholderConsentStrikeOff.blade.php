<div style="margin-top:40px;padding:32px;border:1px solid #E5E5E5;">

    <p><strong>Date:</strong> {{ $formatted_consent_date }}</p>

    <p>To,</p>
    <p>The Board of Directors,</p>
    <p><strong>{{ $company_name }}</strong></p>
    <p><strong>CIN:</strong> {{ $cin }}</p>
    <p><strong>Registered Office:</strong> {{ $registered_office }}</p>

    <p><strong>Subject: Consent for Making Application for Strike Off of the Company</strong></p>

    <p>Dear Sir/Madam,</p>

    <p>I, <strong>{{ $shareholder_name }}</strong>, Son/Daughter of <strong>{{ $parent_name }}</strong>, holding <strong>{{ $shares_number }}</strong> ({{ $shares_words }}) Equity Shares of Rs. <strong>{{ $face_value }}</strong>/‑ each, aggregating to Rs. <strong>{{ $total_value }}</strong>/‑ in <strong>{{ $company_name }}</strong>, hereby give my consent to make an application to the Registrar of Companies, <strong>{{ $roc_jurisdiction }}</strong> under Section 248(2) of the Companies Act, 2013 for removal of the name of the Company from the Register of Companies.</p>

    <p>I confirm that:</p>
    <p>1. I am aware that upon striking off, the Company shall be dissolved and its name shall be removed from the Register of Companies.</p>
    <p>2. I have no objection to the Company being struck off from the Register of Companies.</p>
    <p>3. I understand that I shall not have any claim against the Company or its assets after the striking off.</p>
    <p>4. This consent is given voluntarily and without any coercion.</p>

    <p>Thanking you,</p>

    <div style="margin-top:20px;">
        <p><strong>Signature:</strong> _________________________</p>
        <p><strong>Name:</strong> {{ $shareholder_name }}</p>
        <p><strong>Address:</strong> {{ $shareholder_address }}</p>
        <p><strong>PAN:</strong> {{ $shareholder_pan }}</p>
        <p>(Shareholder)</p>

        @if($witness_name)
        <div style="margin-top:16px;">
            <p><strong>Witness:</strong></p>
            <p>Signature: _________________________</p>
            <p>Name: {{ $witness_name }}</p>
            <p>Address: {{ $witness_address ?: '________________' }}</p>
        </div>
        @endif
    </div>

</div>