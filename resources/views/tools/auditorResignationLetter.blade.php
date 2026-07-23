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
            <h2 class="form-title">Enter Resignation Details</h2>
            <p class="form-description">
                Fill in the details below to generate a Statutory Auditor Resignation Letter.
            </p>
        </div>

        <form id="auditorResignationForm" method="POST" action="{{ route('br.auditor.resignation') }}">
            @csrf

            <div class="form-grid">
                <!-- Company Details -->
                <div class="form-group full-width">
                    <label class="form-label">Company Name <span class="required">*</span></label>
                    <input type="text" name="company_name" class="form-control" placeholder="Enter company name" required>
                </div>
                <div class="form-group full-width">
                    <label class="form-label">CIN <span class="required">*</span></label>
                    <input type="text" name="cin" class="form-control" placeholder="Enter CIN" required>
                </div>
                <div class="form-group full-width">
                    <label class="form-label">Registered Office Address <span class="required">*</span></label>
                    <textarea name="registered_office" class="form-control" placeholder="Enter registered office address" required></textarea>
                </div>

                <!-- Resignation Dates -->
                <div class="form-row">
                    <div class="form-group">
                        <label class="form-label">Letter Date <span class="required">*</span></label>
                        <input type="date" name="letter_date" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label class="form-label">Resignation Effective Date <span class="required">*</span></label>
                        <input type="date" name="resignation_date" class="form-control" required>
                    </div>
                </div>

                <!-- Reason for Resignation (Optional) -->
                <div class="form-group full-width">
                    <label class="form-label">Reason for Resignation (Optional)</label>
                    <textarea name="reason" class="form-control" rows="2" placeholder="e.g., Due to pre-occupation with other professional assignments and commitments...">Due to our pre-occupation with other professional assignments and commitments, we find ourselves unable to devote adequate time and attention to the audit affairs of your Company.</textarea>
                </div>

                <!-- Auditor Details -->
                <div class="form-group full-width">
                    <label class="form-label">Auditor Firm Name <span class="required">*</span></label>
                    <input type="text" name="firm_name" class="form-control" placeholder="e.g., M/s. ABC & Associates" required>
                </div>
                <div class="form-group full-width">
                    <label class="form-label">Firm Registration Number (FRN) <span class="required">*</span></label>
                    <input type="text" name="frn" class="form-control" placeholder="Enter FRN" required>
                </div>

                <div class="form-row">
                    <div class="form-group">
                        <label class="form-label">Partner/Proprietor Name <span class="required">*</span></label>
                        <input type="text" name="partner_name" class="form-control" placeholder="Enter name" required>
                    </div>
                    <div class="form-group">
                        <label class="form-label">Membership Number <span class="required">*</span></label>
                        <input type="text" name="membership_no" class="form-control" placeholder="ICAI Membership No." required>
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-group">
                        <label class="form-label">UDIN (Optional)</label>
                        <input type="text" name="udin" class="form-control" placeholder="Enter UDIN if applicable">
                    </div>
                    <div class="form-group">
                        <label class="form-label">Contact Number <span class="required">*</span></label>
                        <input type="text" name="contact" class="form-control" placeholder="Phone / Mobile" required>
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-group">
                        <label class="form-label">Email <span class="required">*</span></label>
                        <input type="email" name="email" class="form-control" placeholder="Email address" required>
                    </div>
                    <div class="form-group">
                        <label class="form-label">Place <span class="required">*</span></label>
                        <input type="text" name="place" class="form-control" placeholder="City / Place" required>
                    </div>
                </div>
            </div>

            <button type="submit" class="btn-submit" id="downloadPdfBtn">
                <span class="btn-text">Generate & Download Resignation Letter</span>
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
                        <p class="preview-subtitle">Resignation Letter of Statutory Auditor</p>
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
                    <h2 class="certificate-doc-title">RESIGNATION LETTER OF STATUTORY AUDITOR</h2>
                </div>

                <div class="certificate-body">
                    <p class="certificate-paragraph">
                        <strong>Date:</strong> <span id="previewLetterDate">________________</span>
                    </p>

                    <p class="certificate-paragraph">
                        To,<br>
                        The Board of Directors,<br>
                        <strong id="previewCompanyName">________________</strong><br>
                        <strong>CIN:</strong> <span id="previewCIN">________________</span><br>
                        <strong>Registered Office:</strong> <span id="previewRegOffice">________________</span>
                    </p>

                    <p class="certificate-paragraph">
                        <strong>Subject: Resignation from the position of Statutory Auditor</strong>
                    </p>

                    <p class="certificate-paragraph">
                        Dear Sir/Madam,
                    </p>

                    <p class="certificate-paragraph">
                        We write to formally notify you of our decision to resign from the position of Statutory Auditor of the Company. <span id="previewReason">________________</span>
                    </p>

                    <p class="certificate-paragraph">
                        Accordingly, we hereby tender our resignation as Statutory Auditors of the Company with effect from the date of this letter, i.e., <strong id="previewResignationDate">________________</strong>.
                    </p>

                    <p class="certificate-paragraph">
                        We request you to kindly accept this resignation and treat this letter as formal notice of our cessation as Statutory Auditors of the Company. We confirm that we have no objection to the appointment of any other Chartered Accountant or firm of Chartered Accountants as Statutory Auditors of your Company in our place.
                    </p>

                    <p class="certificate-paragraph">
                        We further confirm that there are no circumstances connected with our resignation which we consider should be brought to the notice of the members or creditors of the Company, except for the reason stated above.
                    </p>

                    <p class="certificate-paragraph">
                        We request you to file the requisite forms with the Registrar of Companies intimating our resignation within the prescribed time limit as required under the Companies Act, 2013.
                    </p>

                    <p class="certificate-paragraph">
                        Thanking you,<br>
                        Yours faithfully,
                    </p>

                    <div class="certificate-signature">
                        <p>For <strong id="previewFirmName">________________</strong><br>
                        Chartered Accountants<br>
                        Firm Registration Number (FRN): <span id="previewFRN">________________</span></p>
                        <p><strong>Signature:</strong> _________________________<br>
                        <strong>Name of Partner/Proprietor:</strong> <span id="previewPartnerName">________________</span><br>
                        <strong>Membership Number:</strong> <span id="previewMembership">________________</span><br>
                        <strong>UDIN (if applicable):</strong> <span id="previewUDIN">________________</span><br>
                        <strong>Contact Number:</strong> <span id="previewContact">________________</span><br>
                        <strong>Email:</strong> <span id="previewEmail">________________</span><br>
                        <strong>Date:</strong> <span id="previewLetterDateFooter">________________</span><br>
                        <strong>Place:</strong> <span id="previewPlace">________________</span></p>
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
            <span class="info-header-badge">Professional Format Guide</span>
            <h2 class="info-title">Resignation Letter of Statutory Auditor</h2>
            <p class="info-subtitle">
                Professional Format Guide for Indian Companies
            </p>
        </div>

        <!-- Introduction -->
        <div class="info-content">
            <h3 class="info-subheading">Introduction</h3>

            <p class="info-text">
                A Resignation Letter of Statutory Auditor is a formal written communication through which a Chartered Accountant firm or individual auditor notifies a company of their intention to relinquish the position of Statutory Auditor. Under the Companies Act, 2013, the appointment and resignation of statutory auditors are governed by specific procedural requirements to ensure transparency and proper corporate governance. When a statutory auditor decides to resign, whether due to professional commitments, conflict of interest, or other reasons, a properly drafted resignation letter becomes essential documentation.
            </p>

            <p class="info-text">
                This document is required for updating records with the Registrar of Companies and initiating the process of appointing a successor auditor. The resignation must be communicated to the company in writing, and the company is obligated to file the necessary forms with the Ministry of Corporate Affairs (MCA) within the prescribed timeline. Company directors, company secretaries, and practising Chartered Accountants regularly utilise this document for maintaining statutory compliance and ensuring smooth transition of audit responsibilities.
            </p>

            <!-- Benefits -->
            <h3 class="info-subheading">Benefits of Using a Standard Format</h3>

            <p class="info-text">
                Utilising a professionally structured resignation letter format ensures that all essential details required under corporate law are accurately captured. A standardised template minimises the risk of omitting critical information, expedites the documentation process, and facilitates seamless compliance with MCA filing requirements. This approach supports proper handover procedures and maintains transparency in corporate audit arrangements.
            </p>

            <!-- Relevance -->
            <h3 class="info-subheading">Relevance to Corporate Compliance</h3>

            <p class="info-text">
                The resignation of a statutory auditor triggers several compliance obligations for the company. The Board of Directors must acknowledge the resignation and initiate steps to appoint a new auditor to fill the casual vacancy. Where the company is registered under GST, continuity of audit arrangements is important for timely completion of financial statements and GST reconciliations.
            </p>

            <p class="info-text">
                Additionally, companies that underwent Company Registration recently should ensure that auditor transitions are managed smoothly to avoid gaps in statutory compliance during formative years of operation.
            </p>
        </div>

        <!-- Sample Format -->
        <div class="format-section">
            <h3 class="format-title">
                Resignation Letter of Statutory Auditor - Sample Format
            </h3>

            <p class="format-text">
                <strong>Date:</strong> _______________________________________
            </p>

            <p class="format-text">
                To,
            </p>

            <p class="format-text">
                The Board of Directors,
            </p>

            <p class="format-text">
                _______________________________________ Private Limited
            </p>

            <p class="format-text">
                (Company Name)
            </p>

            <p class="format-text">
                <strong>CIN:</strong> _______________________________________
            </p>

            <p class="format-text">
                <strong>Registered Office:</strong> _______________________________________
            </p>

            <p class="format-text">
                <strong>Subject:</strong> Resignation from the position of Statutory Auditor
            </p>

            <p class="format-text">
                Dear Sir/Madam,
            </p>

            <p class="format-text">
                We write to formally notify you of our decision to resign from the position of Statutory Auditor of the Company. Due to our pre-occupation with other professional assignments and commitments, we find ourselves unable to devote adequate time and attention to the audit affairs of your Company.
            </p>

            <p class="format-text">
                Accordingly, we hereby tender our resignation as Statutory Auditors of the Company with effect from the date of this letter, i.e., _______________________________________ (Date of Resignation).
            </p>

            <p class="format-text">
                We request you to kindly accept this resignation and treat this letter as formal notice of our cessation as Statutory Auditors of the Company. We confirm that we have no objection to the appointment of any other Chartered Accountant or firm of Chartered Accountants as Statutory Auditors of your Company in our place.
            </p>

            <p class="format-text">
                We further confirm that there are no circumstances connected with our resignation which we consider should be brought to the notice of the members or creditors of the Company, except for the reason stated above.
            </p>

            <p class="format-text">
                We request you to file the requisite forms with the Registrar of Companies intimating our resignation within the prescribed time limit as required under the Companies Act, 2013.
            </p>

            <p class="format-text">
                Thanking you,
            </p>

            <p class="format-text">
                Yours faithfully,
            </p>

            <p class="format-text">
                For _______________________________________
            </p>

            <p class="format-text">
                (Name of the Chartered Accountant Firm)
            </p>

            <p class="format-text">
                Chartered Accountants
            </p>

            <p class="format-text">
                <strong>Firm Registration Number (FRN):</strong> _______________________________________
            </p>

            <p class="format-text">
                <strong>Signature:</strong> _______________________________________
            </p>

            <p class="format-text">
                <strong>Name of Partner/Proprietor:</strong> _______________________________________
            </p>

            <p class="format-text">
                <strong>Membership Number:</strong> _______________________________________
            </p>

            <p class="format-text">
                <strong>UDIN (if applicable):</strong> _______________________________________
            </p>

            <p class="format-text">
                <strong>Contact Number:</strong> _______________________________________
            </p>

            <p class="format-text">
                <strong>Email:</strong> _______________________________________
            </p>

            <p class="format-text">
                <strong>Date:</strong> _______________________________________
            </p>

            <p class="format-text">
                <strong>Place:</strong> _______________________________________
            </p>
        </div>

        <!-- FAQ -->
        <div class="faq-section">
            <h3 class="faq-title">Frequently Asked Questions</h3>

            <div class="faq-item">
                <h4 class="faq-question">
                    1. Who can be considered as an authorised signatory for the resignation letter of the Statutory Auditor?
                </h4>
                <p class="faq-answer">
                    The authorised signatory for the resignation letter is the Statutory Auditor themselves, typically a partner or proprietor of the Chartered Accountant firm holding the audit appointment. The letter should be signed by the individual whose name appears in the appointment letter or by an authorised partner of the audit firm. The signatory must include their membership number as issued by the Institute of Chartered Accountants of India (ICAI).
                </p>
            </div>

            <div class="faq-item">
                <h4 class="faq-question">
                    2. Is the signature of all directors mandatory on the resignation letter of the Statutory Auditor?
                </h4>
                <p class="faq-answer">
                    No, the resignation letter is submitted by the Statutory Auditor to the company, not by the directors. The letter should be signed by the resigning auditor. However, the Board of Directors must acknowledge receipt of the resignation and pass a board resolution noting the resignation. The company then files the necessary intimation with the Registrar of Companies.
                </p>
            </div>

            <div class="faq-item">
                <h4 class="faq-question">
                    3. What are the details contained in the resignation letter of a statutory auditor?
                </h4>
                <p class="faq-answer">
                    A resignation letter of a statutory auditor should contain the name and address of the auditor or audit firm, Firm Registration Number (FRN), the name and CIN of the company, the effective date of resignation, the reason for resignation, a statement regarding any circumstances that should be brought to the notice of members or creditors, and the signature with membership number and contact details of the resigning auditor.
                </p>
            </div>

            <div class="faq-item">
                <h4 class="faq-question">
                    4. Does the resignation letter of the Statutory Auditor need to be certified by a professional?
                </h4>
                <p class="faq-answer">
                    The resignation letter itself does not require certification by another professional as it is a communication from the resigning auditor. However, the auditor must file Form ADT-3 with the Registrar of Companies within 30 days of resignation, providing reasons for the resignation. The company must also file Form ADT-1 for appointment of a new auditor. These filings may require certification by a practising professional depending on the specific circumstances.
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
    const form = document.getElementById('auditorResignationForm');
    const downloadPdfBtn = document.getElementById('downloadPdfBtn');

    // Set default dates
    const today = new Date().toISOString().split('T')[0];
    const letterDateInput = form.querySelector('[name="letter_date"]');
    const resignationDateInput = form.querySelector('[name="resignation_date"]');
    if (letterDateInput) letterDateInput.value = today;
    if (resignationDateInput) resignationDateInput.value = today;

    // Inputs for live preview
    const inputs = form.querySelectorAll('input, textarea, select');
    inputs.forEach(input => {
        input.addEventListener('input', updatePreview);
        input.addEventListener('change', updatePreview);
    });

    function updatePreview() {
        // Company details
        const companyName = form.querySelector('[name="company_name"]').value || '________________';
        const cin = form.querySelector('[name="cin"]').value || '________________';
        const regOffice = form.querySelector('[name="registered_office"]').value || '________________';

        // Dates
        const letterDate = form.querySelector('[name="letter_date"]').value;
        const resignationDate = form.querySelector('[name="resignation_date"]').value;

        // Reason
        const reason = form.querySelector('[name="reason"]').value || 'Due to our pre-occupation with other professional assignments and commitments, we find ourselves unable to devote adequate time and attention to the audit affairs of your Company.';

        // Auditor details
        const firmName = form.querySelector('[name="firm_name"]').value || '________________';
        const frn = form.querySelector('[name="frn"]').value || '________________';
        const partnerName = form.querySelector('[name="partner_name"]').value || '________________';
        const membershipNo = form.querySelector('[name="membership_no"]').value || '________________';
        const udin = form.querySelector('[name="udin"]').value || 'Not provided';
        const contact = form.querySelector('[name="contact"]').value || '________________';
        const email = form.querySelector('[name="email"]').value || '________________';
        const place = form.querySelector('[name="place"]').value || '________________';

        // Format dates
        const formattedLetterDate = letterDate ? formatDate(letterDate) : '________________';
        const formattedResignationDate = resignationDate ? formatDate(resignationDate) : '________________';

        // Update DOM
        document.getElementById('previewLetterDate').textContent = formattedLetterDate;
        document.getElementById('previewCompanyName').textContent = companyName;
        document.getElementById('previewCIN').textContent = cin;
        document.getElementById('previewRegOffice').textContent = regOffice;
        document.getElementById('previewReason').textContent = reason;
        document.getElementById('previewResignationDate').textContent = formattedResignationDate;

        document.getElementById('previewFirmName').textContent = firmName;
        document.getElementById('previewFRN').textContent = frn;
        document.getElementById('previewPartnerName').textContent = partnerName;
        document.getElementById('previewMembership').textContent = membershipNo;
        document.getElementById('previewUDIN').textContent = udin;
        document.getElementById('previewContact').textContent = contact;
        document.getElementById('previewEmail').textContent = email;
        document.getElementById('previewPlace').textContent = place;

        // Footer date
        document.getElementById('previewLetterDateFooter').textContent = formattedLetterDate;

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
