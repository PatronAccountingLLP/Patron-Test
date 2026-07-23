<!-- Doc file template -->
<div style="margin-top:40px;padding:32px;border:1px solid #E5E5E5;">

    <h2 style="text-align:center; margin-bottom:20px;">TRADEMARK REGISTRATION GUIDE</h2>
    <p style="text-align:center; margin-bottom:30px;"><strong>Class 9 – Downloadable Podcasts</strong></p>

    <!-- Introduction -->
    <p style="font-size:14px;line-height:1.8;margin-bottom:16px;">
        Trademark registration is a fundamental requirement for businesses seeking to establish and protect their brand identity in competitive markets. Under the Nice Classification system, which is an internationally recognised framework for categorising goods and services, trademarks are organised into 45 distinct classes. Trademark Class 9 encompasses a broad range of scientific, technological, and electronic goods, including downloadable digital content such as podcasts.
    </p>
    <p style="font-size:14px;line-height:1.8;margin-bottom:16px;">
        Registering a trademark under Class 9 for downloadable podcasts enables content creators, media companies, and digital publishers to secure exclusive rights over their brand name, logo, or distinctive mark associated with their podcast content. This registration is essential for preventing unauthorised use of the brand, building consumer trust, and establishing legal recourse against infringement.
    </p>

    <!-- Applicant Details -->
    <p style="font-size:14px;line-height:1.8;margin-bottom:16px;">
        <strong>Applicant Details</strong><br>
        Name: {{ $applicant_name }}<br>
        PAN: {{ $pan }}<br>
        Category: {{ $applicant_category }}<br>
        Business Type: {{ $business_type }}<br>
        Address: {{ $address }}<br>
        GST (if any): {{ $gst ?: 'Not applicable' }}<br>
        MSME/Udyam: {{ $msme ?: 'Not applicable' }}
    </p>

    <!-- Trademark Details -->
    <p style="font-size:14px;line-height:1.8;margin-bottom:16px;">
        <strong>Trademark Details</strong><br>
        Trademark Name/Logo: {{ $trademark_name }}<br>
        Class: {{ $trademark_class }}<br>
        Goods Description: {{ $goods_description }}<br>
        Additional Specification: {{ $additional_spec ?: 'None' }}
    </p>

    <!-- Documents Required -->
    <p style="font-size:14px;line-height:1.8;margin-bottom:16px;">
        <strong>Documents Required for Registration</strong><br>
        • Trademark or Logo design (in JPEG format)<br>
        • PAN Card of the applicant<br>
        • Identity and address proof of the applicant<br>
        • Form TM-48 (Power of Attorney, if filing through an agent)<br>
        • Certificate of Incorporation or Partnership Deed (for companies, LLPs, or partnerships)<br>
        • GST Registration Certificate (if applicable)<br>
        • MSME/Udyam Registration Certificate (for fee concession eligibility)<br>
        • Proof of business activity (invoices, agreements, or website details)<br>
        @if($attachments)
        • Additional documents as listed by applicant: {{ $attachments }}
        @endif
    </p>

    <!-- Government Fee Structure -->
    <p style="font-size:14px;line-height:1.8;margin-bottom:16px;">
        <strong>Government Fee Structure</strong><br>
        {{ $fee_info }}
    </p>

    <!-- Key Benefits -->
    <p style="font-size:14px;line-height:1.8;margin-bottom:16px;">
        <strong>Key Benefits of Trademark Registration</strong><br>
        • Establishes exclusive legal rights over the brand name or logo for downloadable podcast content<br>
        • Provides legal recourse against infringement and unauthorised use<br>
        • Builds consumer trust and brand recognition in the digital content marketplace<br>
        • Enables international protection through the Madrid Protocol in member countries<br>
        • Creates a valuable intellectual property asset that can be licensed or assigned
    </p>

    <!-- FAQs -->
    <p style="font-size:14px;line-height:1.8;margin-bottom:16px;">
        <strong>Frequently Asked Questions</strong><br>
        1. <strong>How do I choose a trademark class?</strong> – Review the Nice Classification system. Downloadable digital content such as podcasts falls under Class 9.<br>
        2. <strong>What is Nice Classification Class 9?</strong> – Class 9 covers scientific, nautical, surveying, photographic, cinematographic, optical, weighing, measuring, and signalling apparatus and instruments, including computers, software, electronic publications, audio and video equipment, downloadable media files, mobile applications, and downloadable podcasts.<br>
        3. <strong>Is trademark registration free?</strong> – No, government fees apply based on applicant category and filing mode.<br>
        4. <strong>Is it compulsory to register a trademark?</strong> – No, but registration provides significant legal advantages.<br>
        5. <strong>Under which trademark class do downloadable podcasts fall?</strong> – Class 9.
    </p>

    <!-- Certification / Authorisation -->
    <div style="margin-top:30px;">
        <p style="font-size:14px;line-height:1.8;margin-bottom:8px;"><strong>Prepared by / Authorised Representative</strong></p>
        <p style="font-size:14px;line-height:1.8;margin-bottom:8px;">
            <strong>Name:</strong> {{ $signatory_name }}<br>
            <strong>Designation:</strong> {{ $designation }}<br>
            <strong>ID (DIN/PAN):</strong> {{ $signatory_id }}<br>
            <strong>Place:</strong> {{ $place }}<br>
            <strong>Date:</strong> {{ $formatted_date }}
        </p>
        <p style="font-size:14px;line-height:1.8;margin-top:10px;">
            <strong>Signature:</strong> _________________________
        </p>
    </div>

</div>