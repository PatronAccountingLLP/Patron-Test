@extends('tools.tool-master')
@section('title')
{{_(' Company Director Resignation Letter')}}
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
            <h1 class="hero-title"> <span> Company Director Resignation Letter</span></h1>
            <p class="hero-subtitle">
                Generate a certified Company Director Resignation Letter in under 60 seconds.
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
            <h2 class="form-title">Enter Director Resignation Details</h2>
            <p class="form-description">
                Fill in the details below to generate a Company Director Resignation Letter.
            </p>
        </div>

        <form id="directorResignationForm" method="POST" action="{{ route('br.director.resignation') }}">
            @csrf

            <div class="form-grid">
                <!-- Company Details -->
                <div class="form-group full-width">
                    <label class="form-label">Company Name <span class="required">*</span></label>
                    <input type="text" name="company_name" class="form-control" placeholder="Enter company name" required>
                </div>
                <div class="form-group full-width">
                    <label class="form-label">Registered Office Address <span class="required">*</span></label>
                    <textarea name="registered_office" class="form-control" placeholder="Enter complete address" required></textarea>
                </div>

                <!-- Director Details -->
                <div class="form-row">
                    <div class="form-group">
                        <label class="form-label">Director's Name <span class="required">*</span></label>
                        <input type="text" name="director_name" class="form-control" placeholder="Enter full name" required>
                    </div>
                    <div class="form-group">
                        <label class="form-label">DIN (Director Identification Number) <span class="required">*</span></label>
                        <input type="text" name="din" class="form-control" placeholder="Enter DIN" required>
                    </div>
                </div>

                <!-- Resignation Details -->
                <div class="form-row">
                    <div class="form-group">
                        <label class="form-label">Resignation Effective Date <span class="required">*</span></label>
                        <input type="date" name="effective_date" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label class="form-label">Letter Date <span class="required">*</span></label>
                        <input type="date" name="letter_date" class="form-control" required>
                    </div>
                </div>
                <div class="form-group full-width">
                    <label class="form-label">Reason for Resignation (Optional)</label>
                    <textarea name="reason" class="form-control" rows="2" placeholder="e.g., Personal commitments, new professional opportunity, relocation, etc."></textarea>
                </div>

                <!-- Signatory Details (same as director) -->
                <div class="form-group full-width">
                    <label class="form-label">Place (for signing) <span class="required">*</span></label>
                    <input type="text" name="place" class="form-control" placeholder="City / Place" required>
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
                        <p class="preview-subtitle">Company Director Resignation Letter</p>
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
                    <h2 class="certificate-doc-title">COMPANY DIRECTOR RESIGNATION LETTER</h2>
                </div>

                <div class="certificate-body">
                    <p class="certificate-paragraph">
                        To,<br>
                        The Board of Directors,<br>
                        <strong id="previewCompanyName">________________</strong><br>
                        <strong id="previewRegOffice">________________</strong>
                    </p>

                    <p class="certificate-paragraph">
                        <strong>Subject: Resignation from the position of Director</strong>
                    </p>

                    <p class="certificate-paragraph">
                        Dear Members of the Board,
                    </p>

                    <p class="certificate-paragraph">
                        I write to formally notify you of my decision to resign from the position of Director of the Company. After careful consideration of my personal and professional commitments, I have concluded that I am unable to continue discharging my duties and responsibilities as a Director of the Company.
                    </p>

                    <p class="certificate-paragraph" id="reasonParagraph" style="display:none;">
                        <strong>Reason for resignation:</strong> <span id="previewReason"></span>
                    </p>

                    <p class="certificate-paragraph">
                        I hereby tender my resignation from the Board of Directors with effect from <strong id="previewEffectiveDate">________________</strong>. I request you to kindly accept this resignation and initiate the necessary formalities for updating the records with the Registrar of Companies.
                    </p>

                    <p class="certificate-paragraph">
                        I express my sincere gratitude for the opportunity to have served on the Board and contributed to the growth and governance of the Company. I remain available to assist with any transition-related matters to ensure continuity of operations.
                    </p>

                    <p class="certificate-paragraph">
                        Thanking you,<br>
                        Yours faithfully,
                    </p>

                    <div class="certificate-signature">
                        <p><strong>Signature:</strong> _________________________<br>
                        <strong>Name:</strong> <span id="previewDirectorName">________________</span><br>
                        <strong>Director Identification Number (DIN):</strong> <span id="previewDIN">________________</span><br>
                        <strong>Date:</strong> <span id="previewLetterDate">________________</span><br>
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
            <span class="info-header-badge">Corporate Compliance Document</span>
            <h2 class="info-title">Company Director Resignation Letter</h2>
            <p class="info-subtitle">
                Standard Format for Indian Companies
            </p>
        </div>

        <!-- Introduction -->
        <div class="info-content">
            <h3 class="info-subheading">Introduction</h3>

            <p class="info-text">
                A Company Director Resignation Letter is a formal written communication through which a director of a company notifies the Board of Directors of their intention to relinquish their position. Under Indian corporate law, directors hold fiduciary responsibilities and play a pivotal role in shaping company policies, making strategic decisions, and ensuring regulatory compliance. When a director decides to step down, whether due to personal circumstances, professional commitments, or other reasons, a properly drafted resignation letter becomes essential documentation.
            </p>

            <p class="info-text">
                This document is mandatory for companies registered under the Companies Act, 2013, as it initiates the formal process of updating directorship records with the Ministry of Corporate Affairs (MCA). The resignation letter must be submitted to the company, which is then required to file the necessary forms with the Registrar of Companies within the prescribed timeline. Directors, company secretaries, and compliance professionals regularly require this document for maintaining accurate statutory records.
            </p>

            <!-- Benefits -->
            <h3 class="info-subheading">Benefits of Using a Standard Format</h3>

            <p class="info-text">
                Utilising a professionally structured resignation letter format ensures that all essential details are captured accurately and presented in a manner consistent with corporate governance standards. A ready-to-use template minimises the risk of omitting critical information, expedites the documentation process, and facilitates smooth compliance with MCA filing requirements.
            </p>

            <!-- Relevance -->
            <h3 class="info-subheading">Relevance to Company Registration and Compliance</h3>

            <p class="info-text">
                Changes in directorship are integral to maintaining accurate company records. When a director resigns, the company must update its filings with the Registrar of Companies, which may also necessitate amendments to documents originally submitted during Company Registration.
            </p>

            <p class="info-text">
                Additionally, if the resigning director was an authorised signatory for GST Registration or other statutory registrations, the company should ensure that alternative signatories are designated and relevant records are updated to avoid compliance gaps.
            </p>
        </div>

        <!-- Sample Format -->
        <div class="format-section">
            <h3 class="format-title">
                Company Director Resignation Letter - Sample Format
            </h3>

            <p class="format-text">
                To,
            </p>

            <p class="format-text">
                The Board of Directors,
            </p>

            <p class="format-text">
                __________________________________ (Company Name)
            </p>

            <p class="format-text">
                __________________________________ (Registered Office Address)
            </p>

            <p class="format-text">
                __________________________________ (City, State, PIN Code)
            </p>

            <p class="format-text">
                <strong>Subject: Resignation from the position of Director</strong>
            </p>

            <p class="format-text">
                Dear Members of the Board,
            </p>

            <p class="format-text">
                I write to formally notify you of my decision to resign from the position of Director of the Company. After careful consideration of my personal and professional commitments, I have concluded that I am unable to continue discharging my duties and responsibilities as a Director of the Company.
            </p>

            <p class="format-text">
                I hereby tender my resignation from the Board of Directors with effect from _________________ (Date). I request you to kindly accept this resignation and initiate the necessary formalities for updating the records with the Registrar of Companies.
            </p>

            <p class="format-text">
                I express my sincere gratitude for the opportunity to have served on the Board and contributed to the growth and governance of the Company. I remain available to assist with any transition-related matters to ensure continuity of operations.
            </p>

            <p class="format-text">
                Thanking you,
            </p>

            <p class="format-text">
                Yours faithfully,
            </p>

            <p class="format-text">
                <strong>Signature:</strong> _______________________________________
            </p>

            <p class="format-text">
                <strong>Name:</strong> _______________________________________
            </p>

            <p class="format-text">
                <strong>Director Identification Number (DIN):</strong> _______________________________________
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
                    1. What should a Company Director Resignation Letter contain?
                </h4>
                <p class="faq-answer">
                    A comprehensive director resignation letter should include the name of the director, the company name and registered address, the effective date of resignation, the reason for resignation (which may be stated briefly or as personal reasons), and the signature of the resigning director along with their Director Identification Number (DIN), date, and place of signing.
                </p>
            </div>

            <div class="faq-item">
                <h4 class="faq-question">
                    2. What is the time limit for processing a company director's resignation?
                </h4>
                <p class="faq-answer">
                    Under the Companies Act, 2013, a director's resignation becomes effective from the date specified in the resignation letter or the date on which the company receives the notice, whichever is later. The company is required to file Form DIR-12 with the Registrar of Companies within 30 days from the date on which the resignation becomes effective to update the records.
                </p>
            </div>

            <div class="faq-item">
                <h4 class="faq-question">
                    3. What are common reasons for resignation of a director in a private limited company?
                </h4>
                <p class="faq-answer">
                    Directors may resign for various reasons including personal or health-related circumstances, pursuit of other professional opportunities, relocation to a different city or country, disagreements with the Board on strategic matters, retirement, or inability to devote adequate time due to other commitments. The resignation letter may state the reason briefly or simply cite personal reasons.
                </p>
            </div>

            <div class="faq-item">
                <h4 class="faq-question">
                    4. Can a company director's resignation letter be rejected?
                </h4>
                <p class="faq-answer">
                    Generally, a director has the right to resign from their position, and the Board cannot reject a valid resignation. However, the resignation becomes effective only from the date specified or the date of receipt by the company, whichever is later. The company must acknowledge the resignation and proceed with the necessary filings. In certain circumstances, such as pending legal proceedings, a director may face restrictions on resigning.
                </p>
            </div>

            <div class="faq-item">
                <h4 class="faq-question">
                    5. How should the company director's resignation letter be delivered?
                </h4>
                <p class="faq-answer">
                    The resignation letter should be addressed to the Board of Directors and delivered to the registered office of the company. It is advisable to send the letter through a documented method such as registered post with acknowledgement due, speed post, or courier with proof of delivery. The director may also hand-deliver the letter and obtain a written acknowledgement from an authorised company representative.
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
    const form = document.getElementById('directorResignationForm');
    const downloadPdfBtn = document.getElementById('downloadPdfBtn');

    // Set default dates to today
    const today = new Date().toISOString().split('T')[0];
    const effectiveDateInput = form.querySelector('[name="effective_date"]');
    const letterDateInput = form.querySelector('[name="letter_date"]');
    if (effectiveDateInput) effectiveDateInput.value = today;
    if (letterDateInput) letterDateInput.value = today;

    // Inputs for live preview
    const inputs = form.querySelectorAll('input, textarea');
    inputs.forEach(input => {
        input.addEventListener('input', updatePreview);
        input.addEventListener('change', updatePreview);
    });

    function updatePreview() {
        const companyName = form.querySelector('[name="company_name"]').value || '________________';
        const regOffice = form.querySelector('[name="registered_office"]').value || '________________';
        const directorName = form.querySelector('[name="director_name"]').value || '________________';
        const din = form.querySelector('[name="din"]').value || '________________';
        const effectiveDate = form.querySelector('[name="effective_date"]').value;
        const letterDate = form.querySelector('[name="letter_date"]').value;
        const reason = form.querySelector('[name="reason"]').value.trim();
        const place = form.querySelector('[name="place"]').value || '________________';

        const formattedEffectiveDate = effectiveDate ? formatDate(effectiveDate) : '________________';
        const formattedLetterDate = letterDate ? formatDate(letterDate) : '________________';

        document.getElementById('previewCompanyName').textContent = companyName;
        document.getElementById('previewRegOffice').textContent = regOffice;
        document.getElementById('previewDirectorName').textContent = directorName;
        document.getElementById('previewDIN').textContent = din;
        document.getElementById('previewEffectiveDate').textContent = formattedEffectiveDate;
        document.getElementById('previewLetterDate').textContent = formattedLetterDate;
        document.getElementById('previewPlace').textContent = place;

        const reasonPara = document.getElementById('reasonParagraph');
        const reasonSpan = document.getElementById('previewReason');
        if (reason) {
            reasonSpan.textContent = reason;
            reasonPara.style.display = 'block';
        } else {
            reasonPara.style.display = 'none';
        }

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
        const requiredInputs = form.querySelectorAll('input[required]');
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
