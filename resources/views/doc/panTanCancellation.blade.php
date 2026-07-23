<div style="margin-top:40px;padding:32px;border:1px solid #E5E5E5;">

    <p><strong>Date:</strong> {{ $formatted_letter_date }}</p>

    <p>To,</p>
    <p>The Income Tax Officer,</p>
    <p>Income Tax Department,</p>
    <p>{{ $tax_jurisdiction }}</p>

    <p><strong>Subject: Request for Cancellation/Surrender of PAN and TAN</strong></p>
    <p>Reference: Strike Off Order dated {{ $formatted_strike_off_date }} passed by Registrar of Companies, {{ $roc_jurisdiction }}</p>

    <p>Respected Sir/Madam,</p>

    <p>We, <strong>{{ $entity_name }}</strong> ({{ $entity_type }}), hereby request you to cancel/surrender the following tax identification numbers allotted to our organisation:</p>

    <p><strong>PAN:</strong> {{ $pan }}</p>
    <p><strong>TAN:</strong> {{ $tan }}</p>

    <p>We wish to inform you that our {{ $entity_type }} has been struck off from the Register of {{ $entity_type == 'Company' ? 'Companies' : 'LLPs' }} by the Registrar of Companies, {{ $roc_jurisdiction }} vide Order dated {{ $formatted_strike_off_date }}. The {{ $entity_type }} has ceased to exist as a legal entity.</p>

    <p>The reasons for closure include:</p>
   <p> {{ $reason }}</p>

    <p>We confirm that:</p>
    @foreach($confirmations as $confirmation)
    <p>{{ $confirmation }}</p>
    @endforeach
    @if(empty($confirmations))
    <p>No confirmations selected.</p>
    @endif

    <p>In view of the above, we kindly request you to cancel/surrender the PAN and TAN of our organisation and update your records accordingly.</p>

    <p><strong>Enclosures:</strong></p>
    @foreach($enclosures as $enclosure)
    <p>{{ $enclosure }}</p>
    @endforeach
    @if(empty($enclosures))
    <p>No enclosures specified.</p>
    @endif

    <p>Thanking you,</p>
    <p>Yours faithfully,</p>

    <div style="margin-top:20px;">
        <p>For <strong>{{ $entity_name }}</strong></p>
        <p>(Name of {{ $entity_type }})</p>
        <p><strong>Signature:</strong> _________________________</p>
        <p><strong>Name:</strong> {{ $signatory_name }}</p>
        <p><strong>Designation:</strong> {{ $signatory_designation }}</p>
        <p><strong>DIN/DPIN:</strong> {{ $din_dpin }}</p>
        <p><strong>Place:</strong> {{ $place }}</p>
        <p><strong>Date:</strong> {{ $formatted_letter_date }}</p>
    </div>

</div>