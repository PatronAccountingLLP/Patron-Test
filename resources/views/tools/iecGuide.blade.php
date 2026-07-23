@extends('tools.tool-master')
@section('title')
{{_(' Resignation Letter of Statutory Auditor')}}
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
            <h1 class="hero-title"> <span> Resignation Letter of Statutory Auditor</span></h1>
            <p class="hero-subtitle">
                Generate a certified Resignation Letter of Statutory Auditor in under 60 seconds.
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
            <h2 class="form-title">Enter IEC Holder Details</h2>
            <p class="form-description">
                Fill in the details below to generate a customised IEC Certificate Download and Print Guide.
            </p>
        </div>

        <form id="iecGuideForm" method="POST" action="{{ route('br.iec.guide') }}">
            @csrf

            <div class="form-grid">
                <!-- Entity Details -->
                <div class="form-group full-width">
                    <label class="form-label">Name of IEC Holder <span class="required">*</span></label>
                    <input type="text" name="holder_name" class="form-control" placeholder="Enter name of individual or entity" required>
                </div>

                <div class="form-group full-width">
                    <label class="form-label">Importer Exporter Code (IEC) <span class="required">*</span></label>
                    <input type="text" name="iec_number" class="form-control" placeholder="10-digit alphanumeric IEC" required>
                </div>

                <div class="form-row">
                    <div class="form-group">
                        <label class="form-label">PAN of IEC Holder <span class="required">*</span></label>
                        <input type="text" name="pan" class="form-control" placeholder="Enter PAN" required>
                    </div>
                    <div class="form-group">
                        <label class="form-label">GST Registration Number (if applicable)</label>
                        <input type="text" name="gst" class="form-control" placeholder="Enter GSTIN">
                    </div>
                </div>

                <div class="form-group full-width">
                    <label class="form-label">Registered Address <span class="required">*</span></label>
                    <textarea name="address" class="form-control" placeholder="Enter complete address" required></textarea>
                </div>

                <div class="form-row">
                    <div class="form-group">
                        <label class="form-label">Bank Account Number (linked to IEC)</label>
                        <input type="text" name="bank_account" class="form-control" placeholder="Enter bank account number">
                    </div>
                    <div class="form-group">
                        <label class="form-label">Bank Name</label>
                        <input type="text" name="bank_name" class="form-control" placeholder="Enter bank name">
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-group">
                        <label class="form-label">Date of Issue of IEC <span class="required">*</span></label>
                        <input type="date" name="issue_date" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label class="form-label">Authorised Signatory Name</label>
                        <input type="text" name="signatory_name" class="form-control" placeholder="Enter name">
                    </div>
                </div>

                <div class="form-group full-width">
                    <label class="form-label">Place (for printing) <span class="required">*</span></label>
                    <input type="text" name="place" class="form-control" placeholder="City / Place" required>
                </div>
            </div>

            <button type="submit" class="btn-submit" id="downloadPdfBtn">
                <span class="btn-text">Generate & Download IEC Guide</span>
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
                        <p class="preview-subtitle">IEC Certificate Download and Print Guide</p>
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
                    <h2 class="certificate-doc-title">IEC CERTIFICATE DOWNLOAD AND PRINT GUIDE</h2>
                    <p class="certificate-doc-subtitle">
                        Directorate General of Foreign Trade (DGFT) Portal Reference
                    </p>
                </div>

                <div class="certificate-body">
                    <!-- Introduction -->
                    <p class="certificate-paragraph">
                        The Importer Exporter Code (IEC) Certificate is a fundamental document for businesses engaged in the import and export of goods and services in India. Issued by the Directorate General of Foreign Trade (DGFT), the IEC is a unique 10-digit alphanumeric identification number that serves as a mandatory prerequisite for conducting international trade. This code remains valid for the lifetime of the entity and must be quoted in all customs and foreign trade documentation.
                    </p>

                    <!-- IEC Certificate Details -->
                    <p class="certificate-paragraph">
                        <strong>IEC Certificate Details for {{ $holder_name ?? '________________' }}</strong><br>
                        IEC Number: <span id="previewIEC">________________</span><br>
                        PAN: <span id="previewPAN">________________</span><br>
                        GST (if applicable): <span id="previewGST">________________</span><br>
                        Address: <span id="previewAddress">________________</span><br>
                        Date of Issue: <span id="previewIssueDate">________________</span><br>
                        Bank Account (linked): <span id="previewBankAccount">________________</span><br>
                        Bank Name: <span id="previewBankName">________________</span><br>
                        Authorised Signatory: <span id="previewSignatory">________________</span>
                    </p>

                    <!-- Understanding IEC Certificate -->
                    <p class="certificate-paragraph">
                        <strong>Understanding the IEC Certificate</strong><br>
                        The IEC Certificate issued by DGFT contains the following key information:
                    </p>
                    <ul class="certificate-list">
                        <li>10-digit Importer Exporter Code (IEC number)</li>
                        <li>Name and address of the IEC holder (individual or entity)</li>
                        <li>Date of issue of the IEC</li>
                        <li>PAN of the IEC holder</li>
                        <li>Bank account details linked to the IEC</li>
                        <li>Authorised signatory details</li>
                    </ul>

                    <!-- Why a Physical Copy is Required -->
                    <p class="certificate-paragraph">
                        <strong>Why a Physical Copy of IEC Certificate is Required</strong><br>
                        A printed copy of the IEC Certificate is commonly required in the following situations:
                    </p>
                    <ul class="certificate-list">
                        <li>Verification by customs authorities during import or export clearance</li>
                        <li>Opening of foreign currency accounts or processing international payments through banks</li>
                        <li>Submission to foreign banks or trade partners as proof of import-export authorisation</li>
                        <li>Maintaining physical records for audit and compliance purposes</li>
                        <li>Backup documentation in case of system unavailability</li>
                    </ul>

                    <!-- Procedure to Download -->
                    <p class="certificate-paragraph">
                        <strong>Procedure to Download IEC Certificate from DGFT Portal</strong><br>
                        Step 1: Access the DGFT Portal – Visit the official DGFT website (dgft.gov.in). Navigate to the top menu bar and locate the Login option at the top right corner of the screen.<br>
                        Step 2: Login to Your IEC Account – Enter your registered login credentials (username and password) along with the CAPTCHA code.<br>
                        Step 3: Navigate to My IEC Section – After successful login, locate and click on the 'My IEC' tab from the dashboard or navigation menu.<br>
                        Step 4: Verify Your Identity – Complete the OTP verification process sent to your registered mobile number or email address.<br>
                        Step 5: Download the IEC Certificate – Click on the 'Print IEC' option. The system will generate your IEC Certificate in PDF format. Save the file to your device for future reference and printing.
                    </p>

                    <!-- Printing -->
                    <p class="certificate-paragraph">
                        <strong>Printing the IEC Certificate</strong><br>
                        Once the IEC Certificate PDF is downloaded to your device, you can print it using any standard printer. It is advisable to print on A4 size paper for official purposes. The printed certificate serves as valid documentation for presentation to customs authorities, banks, and other entities requiring verification of your import-export credentials.
                    </p>

                    <!-- Important Notes -->
                    <p class="certificate-paragraph">
                        <strong>Important Notes</strong><br>
                        • The IEC must be updated annually between April and June each year to maintain its active status<br>
                        • There is no fee for downloading or printing the IEC Certificate from the DGFT portal<br>
                        • Ensure your IEC profile is linked to your GST Registration for seamless verification<br>
                        • Keep multiple copies of the printed certificate for use at different locations or with various authorities
                    </p>

                    <!-- FAQs -->
                    <p class="certificate-paragraph">
                        <strong>Frequently Asked Questions</strong><br>
                        1. <strong>Who issues the IEC Certificate?</strong> – The Directorate General of Foreign Trade (DGFT), Ministry of Commerce and Industry, Government of India.<br>
                        2. <strong>Is it mandatory to link the IEC profile to GST Registration for printing the IEC?</strong> – Yes, linking GST is mandatory for verification and compliance.<br>
                        3. <strong>How long is the IEC valid, and when does it need to be renewed?</strong> – Valid for the lifetime of the entity, but annual updates are required between April and June.<br>
                        4. <strong>Is there any fee for downloading and printing the IEC Certificate from the DGFT website?</strong> – No, it is free of charge.
                    </p>

                    <!-- Placeholder for generated on info -->
                    <div class="certificate-signature">
                        <p>Generated for: <strong id="previewHolderName">________________</strong><br>
                        Place: <span id="previewPlace">________________</span><br>
                        Date: <span id="previewDate">________________</span></p>
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
            <span class="info-header-badge">Directorate General of Foreign Trade (DGFT) Portal Reference</span>
            <h2 class="info-title">IEC Certificate Download and Print Guide</h2>
            <p class="info-subtitle">
                Official Reference for Import Export Code (IEC)
            </p>
        </div>

        <!-- Introduction -->
        <div class="info-content">
            <h3 class="info-subheading">Introduction</h3>

            <p class="info-text">
                The Importer Exporter Code (IEC) Certificate is a fundamental document for businesses engaged in the import and export of goods and services in India. Issued by the Directorate General of Foreign Trade (DGFT), the IEC is a unique 10-digit alphanumeric identification number that serves as a mandatory prerequisite for conducting international trade. This code remains valid for the lifetime of the entity and must be quoted in all customs and foreign trade documentation.
            </p>

            <p class="info-text">
                Businesses frequently require physical copies of their IEC Certificate for presentation to customs authorities, banks processing international trade payments, and foreign banking institutions. This guide provides a comprehensive reference for downloading and printing the IEC Certificate from the DGFT portal. Importers, exporters, customs brokers, and compliance professionals regularly utilise this process for maintaining documentary records and meeting verification requirements.
            </p>

            <!-- Benefits -->
            <h3 class="info-subheading">Benefits of Using a Standard Reference Guide</h3>

            <p class="info-text">
                Maintaining a structured reference guide for IEC certificate download procedures ensures that businesses can quickly access their trade documentation when required. A standardised process reduces the likelihood of errors during verification, supports timely compliance with customs requirements, and provides a reliable backup in case of digital record unavailability or system failures.
            </p>

            <!-- Relevance -->
            <h3 class="info-subheading">Relevance to Business Registrations</h3>

            <p class="info-text">
                The IEC is intrinsically linked to GST Registration, as DGFT requires the IEC profile to be connected with the entity's GST credentials. This integration ensures seamless verification of the business entity across trade and taxation systems. Businesses that have completed Company Registration and are venturing into international trade must obtain an IEC as a subsequent compliance step.
            </p>

            <p class="info-text">
                The IEC Certificate, along with GST registration documents, forms part of the essential documentation required by banks and customs authorities for processing import-export transactions.
            </p>
        </div>

        <!-- Sample Format -->
        <div class="format-section">
            <h3 class="format-title">
                IEC Certificate Download and Print Guide - Sample Format
            </h3>

            <p class="format-text"><strong>Understanding the IEC Certificate</strong></p>

            <p class="format-text">• 10-digit Importer Exporter Code (IEC number)</p>
            <p class="format-text">• Name and address of the IEC holder (individual or entity)</p>
            <p class="format-text">• Date of issue of the IEC</p>
            <p class="format-text">• PAN of the IEC holder</p>
            <p class="format-text">• Bank account details linked to the IEC</p>
            <p class="format-text">• Authorised signatory details</p>

            <p class="format-text"><strong>Why a Physical Copy of IEC Certificate is Required</strong></p>

            <p class="format-text">• Verification by customs authorities during import or export clearance</p>
            <p class="format-text">• Opening of foreign currency accounts or processing international payments through banks</p>
            <p class="format-text">• Submission to foreign banks or trade partners as proof of import-export authorisation</p>
            <p class="format-text">• Maintaining physical records for audit and compliance purposes</p>
            <p class="format-text">• Backup documentation in case of system unavailability</p>

            <p class="format-text"><strong>Procedure to Download IEC Certificate from DGFT Portal</strong></p>

            <p class="format-text">Step 1: Access the DGFT Portal – Visit the official DGFT website (dgft.gov.in) and locate the Login option.</p>
            <p class="format-text">Step 2: Login to Your IEC Account – Enter credentials and complete CAPTCHA. Register if new.</p>
            <p class="format-text">Step 3: Navigate to My IEC Section – Click on 'My IEC' from dashboard.</p>
            <p class="format-text">Step 4: Verify Your Identity – Complete OTP verification.</p>
            <p class="format-text">Step 5: Download the IEC Certificate – Click 'Print IEC' and save PDF.</p>

            <p class="format-text"><strong>Printing the IEC Certificate</strong></p>

            <p class="format-text">
                Once the IEC Certificate PDF is downloaded to your device, you can print it using any standard printer. It is advisable to print on A4 size paper for official purposes. The printed certificate serves as valid documentation for presentation to customs authorities, banks, and other entities requiring verification of your import-export credentials.
            </p>

            <p class="format-text"><strong>Important Notes</strong></p>

            <p class="format-text">• The IEC must be updated annually between April and June each year to maintain its active status</p>
            <p class="format-text">• There is no fee for downloading or printing the IEC Certificate from the DGFT portal</p>
            <p class="format-text">• Ensure your IEC profile is linked to your GST Registration for seamless verification</p>
            <p class="format-text">• Keep multiple copies of the printed certificate for use at different locations or with various authorities</p>
        </div>

        <!-- FAQ -->
        <div class="faq-section">
            <h3 class="faq-title">Frequently Asked Questions</h3>

            <div class="faq-item">
                <h4 class="faq-question">1. Who issues the IEC Certificate?</h4>
                <p class="faq-answer">
                    The IEC Certificate is issued by the Directorate General of Foreign Trade (DGFT), which operates under the Ministry of Commerce and Industry, Government of India. DGFT is the apex authority responsible for formulating and implementing India's foreign trade policy and regulating import-export activities. The IEC is issued digitally through the DGFT online portal.
                </p>
            </div>

            <div class="faq-item">
                <h4 class="faq-question">2. Is it mandatory to link the IEC profile to GST Registration for printing the IEC?</h4>
                <p class="faq-answer">
                    Yes, linking the IEC profile to GST Registration is mandatory. DGFT requires IEC holders to map their GST credentials with their IEC profile as part of the verification and compliance framework. This integration ensures consistency of business details across trade and taxation systems. Without this linkage, certain functionalities on the DGFT portal may be restricted.
                </p>
            </div>

            <div class="faq-item">
                <h4 class="faq-question">3. How long is the IEC valid, and when does it need to be renewed?</h4>
                <p class="faq-answer">
                    The IEC is valid for the lifetime of the entity and does not expire. However, IEC holders are required to update their IEC details annually between April and June each year. This annual update confirms that the business details remain current and accurate. Failure to complete the update within this window may attract a nominal government fee for late compliance.
                </p>
            </div>

            <div class="faq-item">
                <h4 class="faq-question">4. Is there any fee for downloading and printing the IEC Certificate from the DGFT website?</h4>
                <p class="faq-answer">
                    No, there is no fee associated with downloading or printing the IEC Certificate from the DGFT portal. The service is provided free of charge to registered IEC holders. Users can access and download their certificate as many times as required without incurring any additional costs. However, late annual updates may attract a nominal government fee.
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
    const form = document.getElementById('iecGuideForm');
    const downloadPdfBtn = document.getElementById('downloadPdfBtn');

    // Set default date
    const today = new Date().toISOString().split('T')[0];
    const issueDateInput = form.querySelector('[name="issue_date"]');
    if (issueDateInput) issueDateInput.value = today;

    // Inputs for live preview
    const inputs = form.querySelectorAll('input, textarea');
    inputs.forEach(input => {
        input.addEventListener('input', updatePreview);
        input.addEventListener('change', updatePreview);
    });

    function updatePreview() {
        const holderName = form.querySelector('[name="holder_name"]').value || '________________';
        const iecNumber = form.querySelector('[name="iec_number"]').value || '________________';
        const pan = form.querySelector('[name="pan"]').value || '________________';
        const gst = form.querySelector('[name="gst"]').value || 'Not provided';
        const address = form.querySelector('[name="address"]').value || '________________';
        const bankAccount = form.querySelector('[name="bank_account"]').value || 'Not provided';
        const bankName = form.querySelector('[name="bank_name"]').value || 'Not provided';
        const signatory = form.querySelector('[name="signatory_name"]').value || 'Not provided';
        const place = form.querySelector('[name="place"]').value || '________________';
        const issueDate = form.querySelector('[name="issue_date"]').value;

        const formattedIssueDate = issueDate ? formatDate(issueDate) : '________________';

        document.getElementById('previewHolderName').textContent = holderName;
        document.getElementById('previewIEC').textContent = iecNumber;
        document.getElementById('previewPAN').textContent = pan;
        document.getElementById('previewGST').textContent = gst;
        document.getElementById('previewAddress').textContent = address;
        document.getElementById('previewIssueDate').textContent = formattedIssueDate;
        document.getElementById('previewBankAccount').textContent = bankAccount;
        document.getElementById('previewBankName').textContent = bankName;
        document.getElementById('previewSignatory').textContent = signatory;
        document.getElementById('previewPlace').textContent = place;

        const now = new Date();
        const todayDate = formatDate(now.toISOString().split('T')[0]);
        document.getElementById('previewDate').textContent = todayDate;

        updateStepIndicator();
    }

    function formatDate(dateString) {
        const date = new Date(dateString);
        return date.toLocaleDateString('en-IN', {
            day: '2-digit',
            month: 'long',
            year: 'numeric'
        });
    }

    function updateStepIndicator() {
        const steps = document.querySelectorAll('.step-dot');
        const requiredInputs = form.querySelectorAll('input[required], textarea[required]');
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
