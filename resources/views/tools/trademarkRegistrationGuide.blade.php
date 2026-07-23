@extends('tools.tool-master')
@section('title')
{{_(' Affidavit for Closure of LLP')}}
@endsection

@section('content')
<div class="download-format-body">
    <!-- Hero Section -->
    <div class="download-format-banner">
        <div class="hero-content">
            <div class="hero-badge">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                    <path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/>
                </svg>
                Free Document Generator
            </div>
            <h1 class="hero-title"> <span> Affidavit for Closure of LLP</span></h1>
            <p class="hero-subtitle">
                Generate a certified Affidavit for Closure of LLP in under 60 seconds.
            </p>
        </div>
    </div>

    <!-- Main Container -->
    <div class="download-format-container">
        <div class="alert-wrapper" id="alertContainer"></div>

<!-- Form and Live Preview section -->
<div class="download-format-grid">
    <!-- Form Section -->
    <div class="form-card">
        <div class="form-header">
            <div class="form-step-indicator">
                <span class="step-dot active"></span>
                <span class="step-dot"></span>
                <span class="step-dot"></span>
            </div>
            <h2 class="form-title">Enter Trademark & Applicant Details</h2>
            <p class="form-description">
                Fill in the details below to generate a customised Trademark Class 9 Registration Guide and Reference Document.
            </p>
        </div>

        <form id="trademarkForm" method="POST" action="{{ route('br.trademark') }}">
            @csrf

            <div class="form-grid">
                <!-- Applicant Details -->
                <div class="form-group full-width">
                    <label class="form-label">Applicant / Business Name <span class="required">*</span></label>
                    <input type="text" name="applicant_name" class="form-control" placeholder="Enter name" required>
                </div>

                <div class="form-group full-width">
                    <label class="form-label">PAN Card Number <span class="required">*</span></label>
                    <input type="text" name="pan" class="form-control" placeholder="Enter PAN" required>
                </div>

                <div class="form-row">
                    <div class="form-group">
                        <label class="form-label">Applicant Category <span class="required">*</span></label>
                        <div class="select-wrapper">
                            <select name="applicant_category" class="form-control form-select" required>
                                <option value="">Select category</option>
                                <option value="individual">Individual</option>
                                <option value="startup">Startup</option>
                                <option value="small">Small Enterprise</option>
                                <option value="other">Other (Company, Trust, Partnership, etc.)</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="form-label">Business Type <span class="required">*</span></label>
                        <div class="select-wrapper">
                            <select name="business_type" class="form-control form-select" required>
                                <option value="">Select type</option>
                                <option value="proprietorship">Proprietorship</option>
                                <option value="partnership">Partnership</option>
                                <option value="llp">LLP</option>
                                <option value="private_limited">Private Limited Company</option>
                                <option value="public_limited">Public Limited Company</option>
                                <option value="trust">Trust</option>
                                <option value="society">Society</option>
                            </select>
                        </div>
                    </div>
                </div>

                <div class="form-group full-width">
                    <label class="form-label">Address (Registered / Business) <span class="required">*</span></label>
                    <textarea name="address" class="form-control" placeholder="Enter full address" required></textarea>
                </div>

                <div class="form-row">
                    <div class="form-group">
                        <label class="form-label">GST Registration Number (if applicable)</label>
                        <input type="text" name="gst" class="form-control" placeholder="Enter GSTIN">
                    </div>
                    <div class="form-group">
                        <label class="form-label">MSME / Udyam Registration Number (if any)</label>
                        <input type="text" name="msme" class="form-control" placeholder="Enter MSME/Udyam No.">
                    </div>
                </div>

                <!-- Trademark Details -->
                <div class="form-group full-width">
                    <label class="form-label">Trademark Name / Logo Description <span class="required">*</span></label>
                    <input type="text" name="trademark_name" class="form-control" placeholder="e.g., MY PODCAST, LOGO XYZ" required>
                </div>

                <div class="form-row">
                    <div class="form-group">
                        <label class="form-label">Trademark Class <span class="required">*</span></label>
                        <input type="text" name="trademark_class" class="form-control" value="Class 9" readonly>
                    </div>
                    <div class="form-group">
                        <label class="form-label">Goods Description <span class="required">*</span></label>
                        <input type="text" name="goods_description" class="form-control" value="Downloadable podcasts" required>
                    </div>
                </div>

                <div class="form-group full-width">
                    <label class="form-label">Additional Specification (Optional)</label>
                    <input type="text" name="additional_spec" class="form-control" placeholder="e.g., downloadable audio and video podcasts in the field of business, technology, etc.">
                </div>

                <!-- Supporting Documents -->
                <div class="form-group full-width">
                    <label class="form-label">Attachments to be filed (List)</label>
                    <textarea name="attachments" class="form-control" placeholder="List documents you plan to attach (e.g., Trademark logo, PAN, Certificate of Incorporation, etc.)" rows="2"></textarea>
                </div>

                <!-- Signatory / Authorised Person -->
                <div class="form-row">
                    <div class="form-group">
                        <label class="form-label">Authorised Signatory Name <span class="required">*</span></label>
                        <input type="text" name="signatory_name" class="form-control" placeholder="Enter name" required>
                    </div>
                    <div class="form-group">
                        <label class="form-label">Designation <span class="required">*</span></label>
                        <input type="text" name="designation" class="form-control" placeholder="e.g., Director, Partner, Proprietor" required>
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-group">
                        <label class="form-label">DIN / PAN of Signatory (if applicable)</label>
                        <input type="text" name="signatory_id" class="form-control" placeholder="Enter DIN or PAN">
                    </div>
                    <div class="form-group">
                        <label class="form-label">Place <span class="required">*</span></label>
                        <input type="text" name="place" class="form-control" placeholder="City / Place" required>
                    </div>
                </div>

                <div class="form-group full-width">
                    <label class="form-label">Date <span class="required">*</span></label>
                    <input type="date" name="date" class="form-control" required>
                </div>
            </div>

            <button type="submit" class="btn-submit" id="downloadPdfBtn">
                <span class="btn-text">Generate & Download Guide</span>
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" class="btn-icon">
                    <path d="M21 15v4a2 2 0 01-2 2H5a2 2 0 01-2-2v-4M7 10l5 5 5-5M12 15V3"/>
                </svg>
                <div class="spinner d-none"></div>
            </button>
        </form>
    </div>

    <!-- Preview Section -->
    <div class="preview-card">
        <div class="preview-wrapper">
            <div class="preview-header">
                <div class="preview-title-group">
                    <div class="preview-icon">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <path d="M14 2H6a2 2 0 00-2 2v16a2 2 0 002 2h12a2 2 0 002-2V8z"/>
                        </svg>
                    </div>
                    <div>
                        <h3 class="preview-title">Document Preview</h3>
                        <p class="preview-subtitle">Trademark Class 9 Registration Guide & Reference Document</p>
                    </div>
                </div>
                <div class="live-badge">
                    <span class="live-dot"></span>
                    Live Preview
                </div>
            </div>

            <div class="certificate-preview">
                <div class="certificate-watermark">PREVIEW</div>

                <div class="certificate-doc-header">
                    <h2 class="certificate-doc-title">TRADEMARK REGISTRATION GUIDE</h2>
                    <p class="certificate-doc-subtitle">
                        Class 9 – Downloadable Podcasts
                    </p>
                </div>

                <div class="certificate-body">
                    <!-- Introduction -->
                    <p class="certificate-paragraph">
                        Trademark registration is a fundamental requirement for businesses seeking to establish and protect their brand identity in competitive markets. Under the Nice Classification system, which is an internationally recognised framework for categorising goods and services, trademarks are organised into 45 distinct classes. Trademark Class 9 encompasses a broad range of scientific, technological, and electronic goods, including downloadable digital content such as podcasts.
                    </p>
                    <p class="certificate-paragraph">
                        Registering a trademark under Class 9 for downloadable podcasts enables content creators, media companies, and digital publishers to secure exclusive rights over their brand name, logo, or distinctive mark associated with their podcast content. This registration is essential for preventing unauthorised use of the brand, building consumer trust, and establishing legal recourse against infringement.
                    </p>

                    <!-- Applicant Details -->
                    <p class="certificate-paragraph">
                        <strong>Applicant Details</strong><br>
                        Name: <span id="previewApplicantName">________________</span><br>
                        PAN: <span id="previewPAN">________________</span><br>
                        Category: <span id="previewCategory">________________</span><br>
                        Business Type: <span id="previewBusinessType">________________</span><br>
                        Address: <span id="previewAddress">________________</span><br>
                        GST (if any): <span id="previewGST">________________</span><br>
                        MSME/Udyam: <span id="previewMSME">________________</span>
                    </p>

                    <!-- Trademark Details -->
                    <p class="certificate-paragraph">
                        <strong>Trademark Details</strong><br>
                        Trademark Name/Logo: <span id="previewTrademarkName">________________</span><br>
                        Class: <span id="previewClass">Class 9</span><br>
                        Goods Description: <span id="previewGoods">Downloadable podcasts</span><br>
                        Additional Specification: <span id="previewAdditionalSpec">________________</span>
                    </p>

                    <!-- Documents Required -->
                    <p class="certificate-paragraph">
                        <strong>Documents Required for Registration</strong><br>
                        • Trademark or Logo design (in JPEG format)<br>
                        • PAN Card of the applicant<br>
                        • Identity and address proof of the applicant<br>
                        • Form TM-48 (Power of Attorney, if filing through an agent)<br>
                        • Certificate of Incorporation or Partnership Deed (for companies, LLPs, or partnerships)<br>
                        • GST Registration Certificate (if applicable)<br>
                        • MSME/Udyam Registration Certificate (for fee concession eligibility)<br>
                        • Proof of business activity (invoices, agreements, or website details)<br>
                        <span id="previewAttachments" class="preview-attachments"></span>
                    </p>

                    <!-- Government Fee Structure -->
                    <p class="certificate-paragraph">
                        <strong>Government Fee Structure</strong><br>
                        <span id="previewFeeInfo">________________</span>
                    </p>

                    <!-- Key Benefits -->
                    <p class="certificate-paragraph">
                        <strong>Key Benefits of Trademark Registration</strong><br>
                        • Establishes exclusive legal rights over the brand name or logo for downloadable podcast content<br>
                        • Provides legal recourse against infringement and unauthorised use<br>
                        • Builds consumer trust and brand recognition in the digital content marketplace<br>
                        • Enables international protection through the Madrid Protocol in member countries<br>
                        • Creates a valuable intellectual property asset that can be licensed or assigned
                    </p>

                    <!-- FAQs -->
                    <p class="certificate-paragraph">
                        <strong>Frequently Asked Questions</strong><br>
                        1. <strong>How do I choose a trademark class?</strong> – Review the Nice Classification system. Downloadable digital content such as podcasts falls under Class 9.<br>
                        2. <strong>What is Nice Classification Class 9?</strong> – Class 9 covers scientific, nautical, surveying, photographic, cinematographic, optical, weighing, measuring, and signalling apparatus and instruments, including computers, software, electronic publications, audio and video equipment, downloadable media files, mobile applications, and downloadable podcasts.<br>
                        3. <strong>Is trademark registration free?</strong> – No, government fees apply based on applicant category and filing mode.<br>
                        4. <strong>Is it compulsory to register a trademark?</strong> – No, but registration provides significant legal advantages.<br>
                        5. <strong>Under which trademark class do downloadable podcasts fall?</strong> – Class 9.
                    </p>

                    <!-- Certification / Authorisation -->
                    <div class="certificate-signature">
                        <p>Prepared by / Authorised Representative</p>
                        <p><strong>Name:</strong> <span id="previewSignatoryName">________________</span><br>
                        <strong>Designation:</strong> <span id="previewDesignation">________________</strong><br>
                        <strong>ID (DIN/PAN):</strong> <span id="previewSignatoryID">________________</span><br>
                        <strong>Place:</strong> <span id="previewPlace">________________</span><br>
                        <strong>Date:</strong> <span id="previewDate">________________</span></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--End Form and Preview Section-->



<div class="info-section">
    <div class="info-card">

        <!-- Header -->
        <div class="info-header">
            <span class="info-header-badge">Registration Guide and Reference Document</span>
            <h2 class="info-title">Trademark Class 9 - Downloadable Podcasts</h2>
            <p class="info-subtitle">
                Professional Guide for Trademark Registration
            </p>
        </div>

        <!-- Introduction -->
        <div class="info-content">
            <h3 class="info-subheading">Introduction</h3>

            <p class="info-text">
                Trademark registration is a fundamental requirement for businesses seeking to establish and protect their brand identity in competitive markets. Under the Nice Classification system, which is an internationally recognised framework for categorising goods and services, trademarks are organised into 45 distinct classes. Trademark Class 9 encompasses a broad range of scientific, technological, and electronic goods, including downloadable digital content such as podcasts.
            </p>

            <p class="info-text">
                Registering a trademark under Class 9 for downloadable podcasts enables content creators, media companies, and digital publishers to secure exclusive rights over their brand name, logo, or distinctive mark associated with their podcast content. This registration is essential for preventing unauthorised use of the brand, building consumer trust, and establishing legal recourse against infringement. Entrepreneurs, media professionals, and businesses operating in the digital content space commonly require this registration to protect their intellectual property.
            </p>

            <!-- Benefits -->
            <h3 class="info-subheading">Benefits of Using a Standard Reference Format</h3>

            <p class="info-text">
                Utilising a structured reference document for trademark registration helps applicants understand the classification system, prepare accurate applications, and avoid common errors that may lead to rejection. A well-organised guide supports compliance with procedural requirements, reduces processing delays, and ensures that the correct class is selected for the goods or services being registered.
            </p>

            <!-- Relevance -->
            <h3 class="info-subheading">Relevance to Business Registrations</h3>

            <p class="info-text">
                Trademark registration is often pursued alongside or following Company Registration, as newly incorporated entities seek to protect their brand identity from the outset. Additionally, businesses registered under GST may find it beneficial to secure trademark protection to strengthen their market position and brand credibility. While trademark registration is handled by the Trade Marks Registry under the Controller General of Patents, Designs and Trade Marks, the underlying business structure established through company incorporation forms the foundation for brand ownership.
            </p>

            <!-- Understanding Class -->
            <h3 class="info-subheading">Understanding Trademark Class 9</h3>

            <p class="info-text">
                Trademark Class 9 is one of the 45 classes under the Nice Classification (NCL), which is the international system used for categorising goods and services in trademark applications. This class specifically covers scientific, nautical, surveying, photographic, cinematographic, optical, weighing, measuring, signalling, checking, life-saving, and teaching apparatus and instruments. It also includes apparatus for recording, transmission, or reproduction of sound or images, magnetic data carriers, recording discs, and downloadable digital content.
            </p>

            <p class="info-text">
                Key products covered under Class 9 include: computers and computer software, electronic publications, downloadable media files, mobile applications, scientific instruments, cameras, audio and video equipment, data processing equipment, and notably, downloadable podcasts and other digital audio content.
            </p>
        </div>

        <!-- Classification Reference -->
        <div class="format-section">
            <h3 class="format-title">Classification Reference</h3>

            <p class="format-text">
                <strong>Class:</strong> 9
            </p>

            <p class="format-text">
                <strong>Product/Service:</strong> Downloadable Podcasts
            </p>
        </div>

        <!-- Sample / Process -->
        <div class="format-section">
            <h3 class="format-title">
                Trademark Class 9 for Downloadable Podcasts - Sample Format
            </h3>

            <p class="format-text"><strong>Registration Process Overview</strong></p>

            <p class="format-text">Step 1: Verify that the product or service falls within the scope of Trademark Class 9. Downloadable podcasts are specifically listed under this class.</p>
            <p class="format-text">Step 2: Conduct a trademark search to ensure that the proposed mark is not already registered or pending registration by another party.</p>
            <p class="format-text">Step 3: Prepare and file the trademark application (Form TM-A) with the Trade Marks Registry, providing accurate details of the mark, applicant, and goods/services.</p>
            <p class="format-text">Step 4: Pay the prescribed government fees according to the applicant category (individual/startup or other entity).</p>
            <p class="format-text">Step 5: Upon examination and publication, if no opposition is received, the trademark certificate is issued by the Registry.</p>

            <p class="format-text"><strong>Documents Required for Registration</strong></p>

            <p class="format-text">• Trademark or Logo design (in JPEG format)</p>
            <p class="format-text">• PAN Card of the applicant</p>
            <p class="format-text">• Identity and address proof of the applicant</p>
            <p class="format-text">• Form TM-48 (Power of Attorney, if filing through an agent)</p>
            <p class="format-text">• Certificate of Incorporation or Partnership Deed (for companies, LLPs, or partnerships)</p>
            <p class="format-text">• GST Registration Certificate (if applicable)</p>
            <p class="format-text">• MSME/Udyam Registration Certificate (for fee concession eligibility)</p>
            <p class="format-text">• Proof of business activity (invoices, agreements, or website details)</p>

            <p class="format-text"><strong>Government Fee Structure</strong></p>

            <p class="format-text">Individuals, Startups, and Small Enterprises – Online Fee: Rs. 4,500/- | Offline Fee: Rs. 5,000/-</p>
            <p class="format-text">Other Entities (Companies, Trusts, Partnerships) – Online Fee: Rs. 9,000/- | Offline Fee: Rs. 10,000/-</p>

            <p class="format-text">
                <em>Note: Fees are per class. Professional service charges, if any, are additional.</em>
            </p>

            <p class="format-text"><strong>Key Benefits of Trademark Registration</strong></p>

            <p class="format-text">• Establishes exclusive legal rights over the brand name or logo for downloadable podcast content</p>
            <p class="format-text">• Provides legal recourse against infringement and unauthorised use</p>
            <p class="format-text">• Builds consumer trust and brand recognition in the digital content marketplace</p>
            <p class="format-text">• Enables international protection through the Madrid Protocol in member countries</p>
            <p class="format-text">• Creates a valuable intellectual property asset that can be licensed or assigned</p>
        </div>

        <!-- FAQ -->
        <div class="faq-section">
            <h3 class="faq-title">Frequently Asked Questions</h3>

            <div class="faq-item">
                <h4 class="faq-question">1. How do I choose a trademark class?</h4>
                <p class="faq-answer">
                    Selecting the appropriate trademark class requires identifying the specific goods or services associated with your brand. Review the Nice Classification system, which categorises all goods and services into 45 classes. For products, classes 1 to 34 apply, while services fall under classes 35 to 45. Downloadable digital content such as podcasts falls under Class 9. It is advisable to conduct a thorough assessment of your business activities to ensure comprehensive protection.
                </p>
            </div>

            <div class="faq-item">
                <h4 class="faq-question">2. What is Nice Classification Class 9?</h4>
                <p class="faq-answer">
                    Nice Classification Class 9 is a category under the international trademark classification system that covers scientific, nautical, surveying, photographic, cinematographic, optical, weighing, measuring, and signalling apparatus and instruments. It also includes computers, software, electronic publications, audio and video equipment, downloadable media files, mobile applications, and downloadable podcasts. This class is particularly relevant for technology companies, digital content creators, and media businesses.
                </p>
            </div>

            <div class="faq-item">
                <h4 class="faq-question">3. Is trademark registration free?</h4>
                <p class="faq-answer">
                    No, trademark registration is not free. The government prescribes fees based on the applicant category and the mode of filing. Individuals, startups, and small enterprises benefit from reduced fees when filing online. Other entities such as companies and partnerships pay higher fees. Additionally, if you engage a trademark attorney or agent for assistance, their professional charges will apply separately. The current fee structure should be verified from the official Trade Marks Registry website.
                </p>
            </div>

            <div class="faq-item">
                <h4 class="faq-question">4. Is it compulsory to register a trademark?</h4>
                <p class="faq-answer">
                    Trademark registration is not legally mandatory in India. However, registration provides significant advantages including statutory protection, exclusive rights to use the mark, and the ability to take legal action against infringers. Unregistered trademarks may still have common law protection based on use, but proving ownership and preventing infringement becomes considerably more difficult without formal registration.
                </p>
            </div>

            <div class="faq-item">
                <h4 class="faq-question">5. Under which trademark class do downloadable podcasts fall?</h4>
                <p class="faq-answer">
                    Downloadable podcasts are classified under Trademark Class 9 of the Nice Classification system. This class encompasses a wide range of electronic and digital goods, including downloadable audio and video content, software, mobile applications, and electronic publications. When filing a trademark application for a podcast brand, applicants should specify Class 9 and include an accurate description of the goods, such as "downloadable audio podcasts" or similar terminology.
                </p>
            </div>

        </div>

    </div>
</div>
    </div>
</div>

<!-- Start the Js section -->
<script>
document.addEventListener('DOMContentLoaded', function () {
    const form = document.getElementById('trademarkForm');
    const downloadPdfBtn = document.getElementById('downloadPdfBtn');

    // Set default date
    const today = new Date().toISOString().split('T')[0];
    const dateInput = form.querySelector('[name="date"]');
    if (dateInput) dateInput.value = today;

    // Inputs for live preview
    const inputs = form.querySelectorAll('input, textarea, select');
    inputs.forEach(input => {
        input.addEventListener('input', updatePreview);
        input.addEventListener('change', updatePreview);
    });

    function updatePreview() {
        // Applicant details
        const applicantName = form.querySelector('[name="applicant_name"]').value || '________________';
        const pan = form.querySelector('[name="pan"]').value || '________________';
        const category = form.querySelector('[name="applicant_category"] option:checked')?.text || '________________';
        const businessType = form.querySelector('[name="business_type"] option:checked')?.text || '________________';
        const address = form.querySelector('[name="address"]').value || '________________';
        const gst = form.querySelector('[name="gst"]').value || '________________';
        const msme = form.querySelector('[name="msme"]').value || '________________';

        // Trademark details
        const trademarkName = form.querySelector('[name="trademark_name"]').value || '________________';
        const trademarkClass = form.querySelector('[name="trademark_class"]').value || 'Class 9';
        const goodsDesc = form.querySelector('[name="goods_description"]').value || 'Downloadable podcasts';
        const additionalSpec = form.querySelector('[name="additional_spec"]').value || '________________';
        const attachments = form.querySelector('[name="attachments"]').value || '';

        // Signatory details
        const signatoryName = form.querySelector('[name="signatory_name"]').value || '________________';
        const designation = form.querySelector('[name="designation"]').value || '________________';
        const signatoryId = form.querySelector('[name="signatory_id"]').value || '________________';
        const place = form.querySelector('[name="place"]').value || '________________';
        const docDate = form.querySelector('[name="date"]').value;

        // Fee calculation
        const categoryValue = form.querySelector('[name="applicant_category"]').value;
        let feeInfo = '';
        if (categoryValue === 'individual' || categoryValue === 'startup' || categoryValue === 'small') {
            feeInfo = 'For Individuals, Startups, and Small Enterprises: Rs. 4,500/- (Online) or Rs. 5,000/- (Offline)';
        } else {
            feeInfo = 'For Other Entities (Companies, Trusts, Partnerships): Rs. 9,000/- (Online) or Rs. 10,000/- (Offline)';
        }

        // Update DOM
        document.getElementById('previewApplicantName').textContent = applicantName;
        document.getElementById('previewPAN').textContent = pan;
        document.getElementById('previewCategory').textContent = category;
        document.getElementById('previewBusinessType').textContent = businessType;
        document.getElementById('previewAddress').textContent = address;
        document.getElementById('previewGST').textContent = gst;
        document.getElementById('previewMSME').textContent = msme;

        document.getElementById('previewTrademarkName').textContent = trademarkName;
        document.getElementById('previewClass').textContent = trademarkClass;
        document.getElementById('previewGoods').textContent = goodsDesc;
        document.getElementById('previewAdditionalSpec').textContent = additionalSpec;

        const attachmentsSpan = document.getElementById('previewAttachments');
        if (attachments.trim()) {
            attachmentsSpan.innerHTML = '<br>• Additional documents as listed by applicant: ' + attachments;
        } else {
            attachmentsSpan.innerHTML = '';
        }

        document.getElementById('previewFeeInfo').textContent = feeInfo;

        document.getElementById('previewSignatoryName').textContent = signatoryName;
        document.getElementById('previewDesignation').textContent = designation;
        document.getElementById('previewSignatoryID').textContent = signatoryId;
        document.getElementById('previewPlace').textContent = place;
        if (docDate) {
            const formattedDate = new Date(docDate).toLocaleDateString('en-IN', { day: '2-digit', month: 'long', year: 'numeric' });
            document.getElementById('previewDate').textContent = formattedDate;
        } else {
            document.getElementById('previewDate').textContent = '________________';
        }

        updateStepIndicator();
    }

    function updateStepIndicator() {
        const steps = document.querySelectorAll('.step-dot');
        const requiredInputs = form.querySelectorAll('input[required], textarea[required], select[required]');
        let filled = 0;

        requiredInputs.forEach(input => {
            if (input.value.trim() !== '') filled++;
        });

        const progress = filled / requiredInputs.length;

        steps.forEach((step, index) => {
            step.classList.remove('active');
            if (index === 0 && progress >= 0) step.classList.add('active');
            if (index === 1 && progress >= 0.5) step.classList.add('active');
            if (index === 2 && progress >= 1) step.classList.add('active');
        });
    }

    // Initial preview
    updatePreview();

});
</script>
<!--End Js Section -->
@endsection
