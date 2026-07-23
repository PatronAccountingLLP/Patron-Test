@extends('tools.tool-master')
@section('title')
{{_(' Shareholder Consent Application for Striking Off Company')}}
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
            <h1 class="hero-title"> <span> Shareholder Consent Application for Striking Off Company</span></h1>
            <p class="hero-subtitle">
                Generate a certified Shareholder Consent Application for Striking Off Company in under 60 seconds.
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
            <h2 class="form-title">Enter Shareholder Consent Details</h2>
            <p class="form-description">
                Fill in the details below to generate a Shareholder Consent Application for Striking Off Company.
            </p>
        </div>

        <form id="consentForm" method="POST" action="{{ route('br.shareholder.consent') }}">
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
                    <textarea name="registered_office" class="form-control" placeholder="Complete address" required></textarea>
                </div>

                <!-- ROC Jurisdiction -->
                <div class="form-group full-width">
                    <label class="form-label">ROC Jurisdiction <span class="required">*</span></label>
                    <input type="text" name="roc_jurisdiction" class="form-control" placeholder="e.g., Mumbai, Delhi" required>
                </div>

                <!-- Shareholder Details -->
                <div class="form-group full-width">
                    <label class="form-label">Shareholder's Full Name <span class="required">*</span></label>
                    <input type="text" name="shareholder_name" class="form-control" placeholder="Enter name" required>
                </div>
                <div class="form-group full-width">
                    <label class="form-label">Father's/Mother's Name <span class="required">*</span></label>
                    <input type="text" name="parent_name" class="form-control" placeholder="Enter father's/mother's name" required>
                </div>
                <div class="form-group full-width">
                    <label class="form-label">Shareholder's Address <span class="required">*</span></label>
                    <textarea name="shareholder_address" class="form-control" placeholder="Complete address" required></textarea>
                </div>
                <div class="form-group full-width">
                    <label class="form-label">PAN of Shareholder <span class="required">*</span></label>
                    <input type="text" name="shareholder_pan" class="form-control" placeholder="Enter PAN" required>
                </div>

                <!-- Shareholding Details -->
                <div class="form-row">
                    <div class="form-group">
                        <label class="form-label">Number of Shares <span class="required">*</span></label>
                        <input type="text" name="shares_number" class="form-control" placeholder="e.g., 1000" required>
                    </div>
                    <div class="form-group">
                        <label class="form-label">Shares in Words <span class="required">*</span></label>
                        <input type="text" name="shares_words" class="form-control" placeholder="e.g., One Thousand" required>
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group">
                        <label class="form-label">Face Value per Share (₹) <span class="required">*</span></label>
                        <input type="text" name="face_value" class="form-control" placeholder="e.g., 10" required>
                    </div>
                    <div class="form-group">
                        <label class="form-label">Total Value (₹) <span class="required">*</span></label>
                        <input type="text" name="total_value" class="form-control" placeholder="e.g., 10000" required>
                    </div>
                </div>

                <!-- Date -->
                <div class="form-group full-width">
                    <label class="form-label">Date of Consent <span class="required">*</span></label>
                    <input type="date" name="consent_date" class="form-control" required>
                </div>

                <!-- Witness (Optional) -->
                <div class="form-group full-width">
                    <label class="form-label">Witness (Optional)</label>
                    <div class="form-row">
                        <div class="form-group"><input type="text" name="witness_name" class="form-control" placeholder="Witness Name"></div>
                        <div class="form-group"><input type="text" name="witness_address" class="form-control" placeholder="Witness Address"></div>
                    </div>
                </div>
            </div>

            <button type="submit" class="btn-submit" id="downloadPdfBtn">
                <span class="btn-text">Generate & Download Consent</span>
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
                        <p class="preview-subtitle">Shareholder Consent Application for Striking Off Company</p>
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
                    <h2 class="certificate-doc-title">SHAREHOLDER CONSENT APPLICATION</h2>
                    <p class="certificate-doc-subtitle">
                        For Striking Off of Company
                    </p>
                </div>

                <div class="certificate-body">
                    <p><strong>Date:</strong> <span id="previewConsentDate">________________</span></p>

                    <p>To,<br>
                    The Board of Directors,<br>
                    <span id="previewCompanyName">________________</span><br>
                    <strong>CIN:</strong> <span id="previewCIN">________________</span><br>
                    <strong>Registered Office:</strong> <span id="previewRegOffice">________________</span></p>

                    <p><strong>Subject: Consent for Making Application for Strike Off of the Company</strong></p>

                    <p>Dear Sir/Madam,</p>

                    <p>I, <strong><span id="previewShareholderName">________________</span></strong>, Son/Daughter of <strong><span id="previewParentName">________________</span></strong>, holding <strong><span id="previewSharesNumber">________________</span></strong> (<span id="previewSharesWords">________________</span>) Equity Shares of Rs. <span id="previewFaceValue">________________</span>/‑ each, aggregating to Rs. <span id="previewTotalValue">________________</span>/‑ in <strong><span id="previewCompanyName2">________________</span></strong>, hereby give my consent to make an application to the Registrar of Companies, <strong><span id="previewROCJurisdiction">________________</span></strong> under Section 248(2) of the Companies Act, 2013 for removal of the name of the Company from the Register of Companies.</p>

                    <p>I confirm that:</p>
                    <p>1. I am aware that upon striking off, the Company shall be dissolved and its name shall be removed from the Register of Companies.</p>
                    <p>2. I have no objection to the Company being struck off from the Register of Companies.</p>
                    <p>3. I understand that I shall not have any claim against the Company or its assets after the striking off.</p>
                    <p>4. This consent is given voluntarily and without any coercion.</p>

                    <p>Thanking you,</p>

                    <div class="certificate-signature">
                        <p><strong>Signature:</strong> _________________________</p>
                        <p><strong>Name:</strong> <span id="previewShareholderNameSig">________________</span></p>
                        <p><strong>Address:</strong> <span id="previewShareholderAddress">________________</span></p>
                        <p><strong>PAN:</strong> <span id="previewShareholderPAN">________________</span></p>
                        <p>(Shareholder)</p>
                        <div id="previewWitness" style="margin-top:16px;"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="info-section">
    <div class="info-card">

        <!-- Header -->
        <div class="info-header">
            <span class="info-header-badge">Compliance Template</span>
            <h2 class="info-title">Shareholder Consent Application for Striking Off Company</h2>
            <p class="info-subtitle">
                Standard Template for Individual Shareholders to Provide Consent for Voluntary Strike Off under Section 248 of Companies Act, 2013
            </p>
        </div>

        <!-- Introduction -->
        <div class="info-content">
            <h3 class="info-subheading">Introduction</h3>
            <p class="info-text">
                A Shareholder Consent Application for Striking Off Company is a formal document through which individual shareholders provide their consent to the company's application for voluntary removal of its name from the Register of Companies maintained by the Registrar of Companies (ROC). Under Section 248 of the Companies Act, 2013, a company may apply for strike off if it has not commenced business within one year of incorporation, or has not been carrying on any business or operations for a period of two immediately preceding financial years.
            </p>
            <p class="info-text">
                The consent of all shareholders is a mandatory requirement for filing the strike off application (Form STK-2) with the ROC. Each shareholder must individually provide written consent confirming their agreement to the company's closure. This document records the shareholder's details including their name, father's/mother's name, residential address, and the number of shares held in the company. The consent letter is addressed to the Board of Directors and forms part of the documentation required for the strike off process under the Fast Track Exit (FTE) Scheme.
            </p>
        </div>

        <!-- Benefits -->
        <div class="info-content">
            <h3 class="info-subheading">Benefits of Using a Standard Format</h3>
            <p class="info-text">
                Utilising a professionally drafted shareholder consent format ensures that all statutory requirements under Section 248 of the Companies Act, 2013 are properly addressed. A ready-to-use template saves valuable time during the strike off process, reduces the risk of procedural errors, and provides a consistent framework for obtaining and documenting shareholder consent. Standardised formats facilitate smoother ROC filings and demonstrate proper compliance.
            </p>
        </div>

        <!-- Relevance -->
        <div class="info-content">
            <h3 class="info-subheading">Relevance to Company Closure</h3>
            <p class="info-text">
                Before initiating the strike off process, companies should ensure that all statutory registrations including GST Registration have been properly cancelled and final returns filed. Companies incorporated but never commenced business, or those that have become defunct, may apply under the Fast Track Exit Scheme. Following Company Registration, if the company did not commence operations or wishes to close, obtaining shareholder consent is the first step in the voluntary strike off process. The company must have no liabilities, no assets, and no pending legal proceedings.
            </p>
        </div>

        <!-- Sample Format -->
        <div class="format-section">
            <h3 class="format-title">Shareholder Consent Application – Sample Format</h3>

            <p class="format-text">
                Date: ________________________ <br>
                To, <br>
                The Board of Directors, <br>
                ________________________ Private Limited / Limited <br>
                (Name of the Company) <br>
                CIN: ________________________ <br>
                Registered Office: ________________________
            </p>

            <p class="format-text">
                Subject: Consent for Making Application for Strike Off of the Company
            </p>

            <p class="format-text">
                Dear Sir/Madam,
            </p>

            <p class="format-text">
                I, ________________________ (Name of the Shareholder), Son/Daughter of ________________________ (Father's/Mother's Name), holding ________________________ (Number of Shares in words and figures) Equity Shares of Rs. ________________________/- (Face Value) each, aggregating to Rs. ________________________/- (Total Value) in ________________________ (Name of the Company), hereby give my consent to make an application to the Registrar of Companies, ________________________ (Jurisdiction) under Section 248(2) of the Companies Act, 2013 for removal of the name of the Company from the Register of Companies.
            </p>

            <p class="format-text">
                I confirm that: <br>
                1. I am aware that upon striking off, the Company shall be dissolved and its name shall be removed from the Register of Companies. <br>
                2. I have no objection to the Company being struck off from the Register of Companies. <br>
                3. I understand that I shall not have any claim against the Company or its assets after the striking off. <br>
                4. This consent is given voluntarily and without any coercion.
            </p>

            <p class="format-text">
                Thanking you,
            </p>

            <p class="format-text">
                Signature: ________________________ <br>
                Name: ________________________ <br>
                Address: ________________________ <br>
                ________________________ <br>
                PAN: ________________________ <br>
                (Shareholder)
            </p>

            <p class="format-text">
                Witness (Optional): <br>
                Signature: ________________________ <br>
                Name: ________________________ <br>
                Address: ________________________
            </p>
        </div>

        <!-- FAQ -->
        <div class="faq-section">
            <h3 class="faq-title">Frequently Asked Questions</h3>

            <div class="faq-item">
                <h4 class="faq-question">1. What is the format of Application for obtaining the consent of the shareholders for striking off the company?</h4>
                <p class="faq-answer">
                    The format for shareholder consent for strike off includes: date of the application, name and address of the Board of Directors, company name and CIN, shareholder's full name, father's/mother's name, residential address, number and value of shares held, reference to Section 248(2) of the Companies Act, 2013, confirmation statements, and signature of the shareholder.
                </p>
            </div>

            <div class="faq-item">
                <h4 class="faq-question">2. Should the Application for obtaining the consent of the shareholders for striking off the company be on company letterhead?</h4>
                <p class="faq-answer">
                    No, the shareholder consent application is not required to be on company letterhead. This is a personal consent letter from individual shareholders addressed to the Board of Directors. It should be on plain paper and signed by the respective shareholder. The shareholder provides this letter independently to express their consent for the strike off.
                </p>
            </div>

            <div class="faq-item">
                <h4 class="faq-question">3. Does the Application for obtaining the consent of the shareholders for striking off the company need to be certified by a professional?</h4>
                <p class="faq-answer">
                    No, the shareholder consent application does not require certification by an external professional. The letter is simply signed by the shareholder themselves. However, the overall strike off application (Form STK-2) filed with the ROC may require certification by a practising Chartered Accountant, Company Secretary, or Cost Accountant as per form requirements.
                </p>
            </div>

            <div class="faq-item">
                <h4 class="faq-question">4. Who can be considered as an authorized signatory for the Application for obtaining the consent of the shareholders for striking off the company?</h4>
                <p class="faq-answer">
                    Each shareholder must personally sign their own consent application. There is no concept of an authorised signatory for this document as it is an individual consent. If a shareholder is a body corporate, the authorised representative of that body corporate (as per board resolution) can sign. For joint shareholders, all joint holders should provide consent or the first-named holder with proper authorisation.
                </p>
            </div>

        </div>

    </div>
</div>
    </div>
</div>

<!-- JavaScript for live preview -->
<script>
document.addEventListener('DOMContentLoaded', function () {
    const form = document.getElementById('consentForm');

    // Set default date
    const today = new Date().toISOString().slice(0,10);
    const consentDateInput = form.querySelector('[name="consent_date"]');
    if (consentDateInput && !consentDateInput.value) consentDateInput.value = today;

    function formatDate(dateString) {
        if (!dateString) return '________________';
        const date = new Date(dateString);
        return date.toLocaleDateString('en-IN', { day: '2-digit', month: 'long', year: 'numeric' });
    }

    function updatePreview() {
        const companyName = form.querySelector('[name="company_name"]').value || '________________';
        const cin = form.querySelector('[name="cin"]').value || '________________';
        const regOffice = form.querySelector('[name="registered_office"]').value || '________________';
        const rocJurisdiction = form.querySelector('[name="roc_jurisdiction"]').value || '________________';
        const shareholderName = form.querySelector('[name="shareholder_name"]').value || '________________';
        const parentName = form.querySelector('[name="parent_name"]').value || '________________';
        const shareholderAddress = form.querySelector('[name="shareholder_address"]').value || '________________';
        const shareholderPan = form.querySelector('[name="shareholder_pan"]').value || '________________';
        const sharesNumber = form.querySelector('[name="shares_number"]').value || '________________';
        const sharesWords = form.querySelector('[name="shares_words"]').value || '________________';
        const faceValue = form.querySelector('[name="face_value"]').value || '________________';
        const totalValue = form.querySelector('[name="total_value"]').value || '________________';
        const consentDateRaw = form.querySelector('[name="consent_date"]').value;
        const consentDate = consentDateRaw ? formatDate(consentDateRaw) : '________________';

        const witnessName = form.querySelector('[name="witness_name"]').value;
        const witnessAddress = form.querySelector('[name="witness_address"]').value;

        // Update preview fields
        document.getElementById('previewConsentDate').textContent = consentDate;
        document.getElementById('previewCompanyName').textContent = companyName;
        document.getElementById('previewCIN').textContent = cin;
        document.getElementById('previewRegOffice').textContent = regOffice;
        document.getElementById('previewShareholderName').textContent = shareholderName;
        document.getElementById('previewParentName').textContent = parentName;
        document.getElementById('previewSharesNumber').textContent = sharesNumber;
        document.getElementById('previewSharesWords').textContent = sharesWords;
        document.getElementById('previewFaceValue').textContent = faceValue;
        document.getElementById('previewTotalValue').textContent = totalValue;
        document.getElementById('previewCompanyName2').textContent = companyName;
        document.getElementById('previewROCJurisdiction').textContent = rocJurisdiction;
        document.getElementById('previewShareholderNameSig').textContent = shareholderName;
        document.getElementById('previewShareholderAddress').textContent = shareholderAddress;
        document.getElementById('previewShareholderPAN').textContent = shareholderPan;

        // Witness block
        const witnessDiv = document.getElementById('previewWitness');
        if (witnessName && witnessName.trim() !== '') {
            witnessDiv.innerHTML = `
                <p><strong>Witness:</strong></p>
                <p>Signature: _________________________</p>
                <p>Name: ${witnessName}</p>
                <p>Address: ${witnessAddress || '________________'}</p>
            `;
        } else {
            witnessDiv.innerHTML = '';
        }

        updateStepIndicator();
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

    // Attach event listeners
    const inputs = form.querySelectorAll('input, textarea');
    inputs.forEach(input => input.addEventListener('input', updatePreview));
    updatePreview();

 
});
</script>

@endsection
