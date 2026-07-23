<div style="margin-top:40px;padding:32px;border:1px solid #E5E5E5;">

    <h2 style="text-align:center; margin-bottom:20px;">NO OBJECTION CERTIFICATE</h2>
    <p style="text-align:center; margin-bottom:30px;">For GST Registration</p>

    <p><strong>TO WHOMSOEVER IT MAY CONCERN</strong></p>

    <p><strong>Subject: No Objection Certificate for use of premises as Principal Place of Business for GST Registration</strong></p>

    <p>I, <strong>{{ $owner_name }}{{ $owner_father ? ', Son/Daughter of ' . $owner_father : '' }}</strong>, having PAN: <strong>{{ $owner_pan }}</strong>, hereby declare that I am the lawful owner of the following property:</p>

    <p><strong>Property Address:</strong> {{ $property_address }}</p>

    <p>I hereby confirm that I have "No Objection" and give my full consent for using the above-mentioned address as the Principal Place of Business for GST Registration to:</p>

    <p><strong>Name of Business/Company/LLP:</strong> {{ $business_name }}</p>
    <p><strong>Authorised Person:</strong> {{ $authorised_person }}</p>

    <p>The above-named entity is hereby permitted to use the referred address as its Principal Place of Business for the purpose of GST Registration and for dealings with statutory authorities in the course of its business.</p>

    <p>I declare that I am the <strong>{{ $relationship }}</strong> and the above premises have been provided to the business entity <strong>{{ $consideration }}</strong>.</p>

    <p>This NOC does not confer any ownership title or proprietary rights over the property in favour of the business entity. The business entity shall comply with all statutory requirements and local regulations. Any defaults towards statutory compliances are the sole responsibility of the business entity.</p>

    <p>A copy of <strong>{{ $proof_document }}</strong> in my name is attached herewith as proof of ownership/address.</p>

    <p><strong>Enclosures:</strong></p>
    <p>1. Copy of ownership proof / utility bill in owner's name</p>
    <p>2. Copy of PAN Card of property owner</p>
    @if($additional_enclosures)
    <p>3. {{ $additional_enclosures }}</p>
    @endif

    <p>Yours faithfully,</p>

    <p><strong>Signature:</strong> _________________________</p>
    <p><strong>Name of Property Owner:</strong> {{ $owner_name }}</p>
    <p><strong>PAN:</strong> {{ $owner_pan }}</p>
    <p><strong>Contact Number:</strong> {{ $owner_contact ?: '________________' }}</p>
    <p><strong>Place:</strong> {{ $place }}</p>
    <p><strong>Date:</strong> {{ $formatted_date }}</p>

</div>