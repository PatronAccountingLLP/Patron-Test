@extends('tools.tool-master')
@section('title')
{{_(' Ordinary Resolution for Increase in Authorised Share Capital')}}
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
            <h1 class="hero-title"> <span> Ordinary Resolution for Increase in Authorised Share Capital</span></h1>
            <p class="hero-subtitle">
                Generate a certified Ordinary Resolution for Increase in Authorised Share Capital in under 60 seconds.
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
            <h2 class="form-title">Enter Share Capital Details</h2>
            <p class="form-description">
                Fill in the details below to generate an Ordinary Resolution for Increase in Authorised Share Capital.
            </p>
        </div>

        <form id="authorisedCapitalForm" method="POST" action="{{ route('br.authorised.capital') }}">
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

                <!-- Meeting Details -->
                <div class="form-row">
                    <div class="form-group">
                        <label class="form-label">Meeting Date <span class="required">*</span></label>
                        <input type="date" name="meeting_date" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label class="form-label">Meeting Time <span class="required">*</span></label>
                        <input type="time" name="meeting_time" class="form-control" required placeholder="HH:MM">
                    </div>
                </div>

                <!-- Existing Capital Details -->
                <div class="form-group full-width">
                    <label class="form-label">Existing Authorised Capital (in numbers) <span class="required">*</span></label>
                    <input type="text" name="existing_capital_number" class="form-control" placeholder="e.g., 1000000" required>
                </div>
                <div class="form-group full-width">
                    <label class="form-label">Existing Authorised Capital (in words) <span class="required">*</span></label>
                    <input type="text" name="existing_capital_words" class="form-control" placeholder="e.g., Ten Lakh Rupees" required>
                </div>
                <div class="form-row">
                    <div class="form-group">
                        <label class="form-label">Existing Number of Equity Shares <span class="required">*</span></label>
                        <input type="text" name="existing_shares" class="form-control" placeholder="e.g., 100000" required>
                    </div>
                    <div class="form-group">
                        <label class="form-label">Existing Face Value per Share (₹) <span class="required">*</span></label>
                        <input type="text" name="existing_face_value" class="form-control" placeholder="e.g., 10" required>
                    </div>
                </div>

                <!-- New Capital Details -->
                <div class="form-group full-width">
                    <label class="form-label">New Authorised Capital (in numbers) <span class="required">*</span></label>
                    <input type="text" name="new_capital_number" class="form-control" placeholder="e.g., 2000000" required>
                </div>
                <div class="form-group full-width">
                    <label class="form-label">New Authorised Capital (in words) <span class="required">*</span></label>
                    <input type="text" name="new_capital_words" class="form-control" placeholder="e.g., Twenty Lakh Rupees" required>
                </div>
                <div class="form-row">
                    <div class="form-group">
                        <label class="form-label">New Number of Equity Shares <span class="required">*</span></label>
                        <input type="text" name="new_shares" class="form-control" placeholder="e.g., 200000" required>
                    </div>
                    <div class="form-group">
                        <label class="form-label">New Face Value per Share (₹) <span class="required">*</span></label>
                        <input type="text" name="new_face_value" class="form-control" placeholder="e.g., 10" required>
                    </div>
                </div>

                <!-- Additional Shares Created -->
                <div class="form-row">
                    <div class="form-group">
                        <label class="form-label">Additional Shares Created (Number) <span class="required">*</span></label>
                        <input type="text" name="additional_shares" class="form-control" placeholder="e.g., 100000" required>
                    </div>
                    <div class="form-group">
                        <label class="form-label">Additional Shares Face Value (₹) <span class="required">*</span></label>
                        <input type="text" name="additional_face_value" class="form-control" placeholder="e.g., 10" required>
                    </div>
                </div>

                <!-- Signatory Details -->
                <div class="form-row">
                    <div class="form-group">
                        <label class="form-label">Signatory Name <span class="required">*</span></label>
                        <input type="text" name="signatory_name" class="form-control" placeholder="Enter signatory name" required>
                    </div>
                    <div class="form-group">
                        <label class="form-label">Signatory Designation <span class="required">*</span></label>
                        <div class="select-wrapper">
                            <select name="signatory_designation" class="form-control form-select" required>
                                <option value="">Select designation</option>
                                <option value="Director">Director</option>
                                <option value="Company Secretary">Company Secretary</option>
                                <option value="Managing Director">Managing Director</option>
                                <option value="Chairperson">Chairperson</option>
                            </select>
                        </div>
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-group">
                        <label class="form-label">DIN (if applicable)</label>
                        <input type="text" name="signatory_din" class="form-control" placeholder="Enter DIN (if any)">
                    </div>
                    <div class="form-group">
                        <label class="form-label">Place <span class="required">*</span></label>
                        <input type="text" name="place" class="form-control" placeholder="City / Place" required>
                    </div>
                </div>
            </div>

            <button type="submit" class="btn-submit" id="downloadPdfBtn">
                <span class="btn-text">Generate & Download Resolution</span>
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
                        <p class="preview-subtitle">Ordinary Resolution for Increase in Authorised Share Capital</p>
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
                    <h2 class="certificate-doc-title">CERTIFIED TRUE COPY OF THE ORDINARY RESOLUTION</h2>
                    <p class="certificate-doc-subtitle">
                        Passed at the General Meeting of the Members held on
                    </p>
                </div>

                <div class="certificate-body">
                    <div class="company-details">
                        <p><strong id="prevCompanyName">________________</strong></p>
                        <p><strong>CIN: </strong><span id="prevCIN">________________</span></p>
                        <p><strong>Registered Office: </strong><span id="prevOfficeAddress">________________</span></p>
                    </div>

                    <p class="certificate-paragraph">
                        <strong>Date of Meeting: </strong><span id="prevMeetingDate">__________</span><br>
                        <strong>Time: </strong><span id="prevMeetingTime">______</span> (Hours)<br>
                        <strong>Venue: </strong>Registered Office of the Company
                    </p>

                    <p class="certificate-paragraph">
                        <strong>SUBJECT: INCREASE IN THE AUTHORISED SHARE CAPITAL</strong>
                    </p>

                    <p class="certificate-paragraph">
                        <strong>"RESOLVED THAT</strong> pursuant to the provisions of Section 13(1) read with Sections 61 and 64 and other applicable provisions, if any, of the Companies Act, 2013 (including any statutory modification or re-enactment thereof) and the rules framed thereunder, the approval of the shareholders be and is hereby accorded to increase the Authorised Share Capital of the Company from the existing Rs. <strong><span id="prevExistingCapitalNum">________________</span></strong>/‑ (Rupees <strong><span id="prevExistingCapitalWords">________________</span></strong> only) divided into <strong><span id="prevExistingShares">________________</span></strong> Equity Shares of Rs. <strong><span id="prevExistingFaceValue">________________</span></strong>/‑ each to Rs. <strong><span id="prevNewCapitalNum">________________</span></strong>/‑ (Rupees <strong><span id="prevNewCapitalWords">________________</span></strong> only) divided into <strong><span id="prevNewShares">________________</span></strong> Equity Shares of Rs. <strong><span id="prevNewFaceValue">________________</span></strong>/‑ each, by creation of additional <strong><span id="prevAdditionalShares">________________</span></strong> Equity Shares of Rs. <strong><span id="prevAdditionalFaceValue">________________</span></strong>/‑ each, ranking pari passu in all respects with the existing Equity Shares of the Company."
                    </p>

                    <p class="certificate-paragraph">
                        <strong>"RESOLVED FURTHER THAT</strong> pursuant to the provisions of Sections 13, 61, and 64 and other applicable provisions of the Companies Act, 2013 (including any statutory modification or re-enactment thereof) and the rules framed thereunder, the consent of the Members of the Company be and is hereby accorded to substitute the existing Clause V of the Memorandum of Association with the following new Clause V:"
                    </p>

                    <p class="certificate-paragraph" style="font-style:italic; margin-left:20px;">
                        'The Authorised Share Capital of the Company is Rs. <strong><span id="prevNewCapitalNumClause">________________</span></strong>/‑ (Rupees <strong><span id="prevNewCapitalWordsClause">________________</span></strong> only) divided into <strong><span id="prevNewSharesClause">________________</span></strong> Equity Shares of Rs. <strong><span id="prevNewFaceValueClause">________________</span></strong>/‑ each.'
                    </p>

                    <p class="certificate-paragraph">
                        <strong>"RESOLVED FURTHER THAT</strong> the Board of Directors of the Company be and is hereby authorised to take all necessary steps to implement the above resolutions, including filing of requisite forms with the Registrar of Companies and to do all such acts, deeds, matters, and things as may be necessary, proper, or expedient to give effect to this resolution."
                    </p>

                    <div class="certificate-signature">
                        <p>For <strong id="footerCompanyName">________________</strong></p>
                        <p><strong>Signature:</strong> _________________________<br>
                        <strong>Name:</strong> <span id="footerSignatoryName">________________</span><br>
                        <strong>Designation:</strong> <span id="footerDesignation">________________</span><br>
                        <strong>DIN (if applicable):</strong> <span id="footerDIN">________________</span><br>
                        <strong>Date:</strong> <span id="footerDate">________________</span><br>
                        <strong>Place:</strong> <span id="footerPlace">________________</span></p>
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
            <span class="info-header-badge">Corporate Resolution Format</span>
            <h2 class="info-title">Ordinary Resolution for Increase in Authorised Share Capital</h2>
            <p class="info-subtitle">
                Standard Shareholder Approval Format under Companies Act, 2013
            </p>
        </div>

        <!-- Introduction -->
        <div class="info-content">
            <h3 class="info-subheading">Introduction</h3>

            <p class="info-text">
                An Ordinary Resolution for Increase in Authorised Share Capital is a formal corporate document passed by the shareholders of a company to approve the enhancement of its authorised capital limit. Under the Companies Act, 2013, a company may require additional capital for business expansion, acquisition of assets, repayment of liabilities, or other strategic purposes. Before such an increase can take effect, it must first be approved by the Board of Directors and subsequently ratified by the members through an ordinary resolution in a general meeting.
            </p>

            <p class="info-text">
                This resolution is commonly required during filings with the Ministry of Corporate Affairs (MCA), particularly when submitting Form SH-7 for alteration of share capital. It is also essential for updating the Memorandum of Association (MOA) to reflect the revised capital structure. Promoters, directors, company secretaries, and legal professionals involved in corporate restructuring or capital-raising activities regularly utilise this document to ensure compliance with statutory requirements.
            </p>

            <!-- Benefits -->
            <h3 class="info-subheading">Benefits of Using a Standard Format</h3>

            <p class="info-text">
                Adopting a professionally drafted, ready-to-use resolution format ensures consistency with regulatory expectations and reduces the likelihood of procedural errors. A standardised template saves considerable time during documentation, allows for quick customisation based on specific company requirements, and supports seamless compliance with MCA filing procedures.
            </p>

            <!-- Relevance -->
            <h3 class="info-subheading">Relevance to Company Registration and GST Compliance</h3>

            <p class="info-text">
                Companies undergoing structural changes to their authorised share capital should ensure that all related statutory registrations remain updated. Where an increase in capital affects the company's registered particulars, corresponding amendments may be required in GST Registration records.
            </p>

            <p class="info-text">
                Similarly, entities in the process of Company Registration or those restructuring their capital base should maintain accurate documentation to avoid compliance discrepancies during verification or audit.
            </p>
        </div>

        <!-- Sample Format -->
        <div class="format-section">
            <h3 class="format-title">
                Ordinary Resolution for Increase in Authorised Share Capital – Sample Format
            </h3>

            <p class="format-text">
                <strong>Company Name:</strong> _______________________________________
            </p>

            <p class="format-text">
                <strong>CIN:</strong> _______________________________________
            </p>

            <p class="format-text">
                <strong>Registered Office Address:</strong> _______________________________________
            </p>

            <p class="format-text">
                <strong>CERTIFIED TRUE COPY OF THE ORDINARY RESOLUTION</strong>
            </p>

            <p class="format-text">
                Passed at the General Meeting of the Members held on ________ (Date) at ________ (Time) at the Registered Office of the Company
            </p>

            <p class="format-text">
                <strong>SUBJECT: INCREASE IN THE AUTHORISED SHARE CAPITAL</strong>
            </p>

            <p class="format-text">
                "RESOLVED THAT pursuant to the provisions of Section 13(1) read with Sections 61 and 64 and other applicable provisions, if any, of the Companies Act, 2013 (including any statutory modification or re-enactment thereof) and the rules framed thereunder, the approval of the shareholders be and is hereby accorded to increase the Authorised Share Capital of the Company from the existing Rs. _______________/- (Rupees _______________ only) divided into _______________ Equity Shares of Rs. _______________/- each to Rs. _______________/- (Rupees _______________ only) divided into _______________ Equity Shares of Rs. _______________/- each, by creation of additional _______________ Equity Shares of Rs. _______________/- each, ranking pari passu in all respects with the existing Equity Shares of the Company."
            </p>

            <p class="format-text">
                "RESOLVED FURTHER THAT pursuant to the provisions of Sections 13, 61, and 64 and other applicable provisions of the Companies Act, 2013 (including any statutory modification or re-enactment thereof) and the rules framed thereunder, the consent of the Members of the Company be and is hereby accorded to substitute the existing Clause V of the Memorandum of Association with the following new Clause V:
            </p>

            <p class="format-text">
                'The Authorised Share Capital of the Company is Rs. _______________/- (Rupees _______________ only) divided into _______________ Equity Shares of Rs. _______________/- each.'
            </p>

            <p class="format-text">
                "RESOLVED FURTHER THAT the Board of Directors of the Company be and is hereby authorised to take all necessary steps to implement the above resolutions, including filing of requisite forms with the Registrar of Companies and to do all such acts, deeds, matters, and things as may be necessary, proper, or expedient to give effect to this resolution."
            </p>

            <p class="format-text">
                For _________________________________ (Company Name)
            </p>

            <p class="format-text">
                <strong>Signature:</strong> _______________________________________
            </p>

            <p class="format-text">
                <strong>Name:</strong> _______________________________________
            </p>

            <p class="format-text">
                <strong>Designation:</strong> _______________________________________
            </p>

            <p class="format-text">
                <strong>DIN (if applicable):</strong> _______________________________________
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
                    1. Are details mentioned in the ordinary resolution format for increase in authorised share capital the same as the board resolution format?
                </h4>
                <p class="faq-answer">
                    While both documents address the increase in authorised share capital, they serve distinct purposes. The board resolution records the decision of the directors to recommend the increase, whereas the ordinary resolution captures the approval granted by shareholders in a general meeting. The substantive particulars regarding capital figures and amendments to the MOA remain consistent across both documents, though the approving authority differs.
                </p>
            </div>

            <div class="faq-item">
                <h4 class="faq-question">
                    2. Is the signature of all directors mandatory on the ordinary resolution format for increase in authorised share capital?
                </h4>
                <p class="faq-answer">
                    No, the signature of all directors is not mandatory on an ordinary resolution. The resolution is passed by shareholders, not directors. Typically, the Chairperson of the meeting or an authorised signatory signs the certified true copy of the resolution on behalf of the company.
                </p>
            </div>

            <div class="faq-item">
                <h4 class="faq-question">
                    3. Should the Ordinary Resolution for increase in authorised share capital be on company letterhead?
                </h4>
                <p class="faq-answer">
                    While there is no strict statutory requirement mandating the use of company letterhead, it is considered a best practice for authenticity and professional presentation. Using official letterhead lends credibility to the document and facilitates verification by regulatory authorities, banks, and other stakeholders.
                </p>
            </div>

            <div class="faq-item">
                <h4 class="faq-question">
                    4. Does the Ordinary Resolution format for increase in authorised share capital need to be certified by a professional?
                </h4>
                <p class="faq-answer">
                    Professional certification is not universally mandated for all ordinary resolutions. However, when submitting the resolution to the Registrar of Companies through MCA forms, a practising Company Secretary may be required to certify certain documents.
                </p>
            </div>

            <div class="faq-item">
                <h4 class="faq-question">
                    5. Is the Ordinary Resolution format for increase in authorised share capital mandatory to be attached to the MCA form?
                </h4>
                <p class="faq-answer">
                    Yes, when filing Form SH-7 with the Ministry of Corporate Affairs for alteration of share capital, a certified copy of the ordinary resolution approving the increase must be attached as a mandatory supporting document.
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
    const form = document.getElementById('authorisedCapitalForm');
    const downloadPdfBtn = document.getElementById('downloadPdfBtn');

    // Set default date
    const today = new Date().toISOString().split('T')[0];
    const meetingDateInput = form.querySelector('[name="meeting_date"]');
    if (meetingDateInput) meetingDateInput.value = today;

    // Set default time (11:00 AM)
    const timeInput = form.querySelector('[name="meeting_time"]');
    if (timeInput && !timeInput.value) timeInput.value = "11:00";

    // Auto-calculate additional shares
    const existingShares = form.querySelector('[name="existing_shares"]');
    const newShares = form.querySelector('[name="new_shares"]');
    const additionalShares = form.querySelector('[name="additional_shares"]');
    const existingFace = form.querySelector('[name="existing_face_value"]');
    const newFace = form.querySelector('[name="new_face_value"]');
    const additionalFace = form.querySelector('[name="additional_face_value"]');

    function calculateAdditional() {
        if (existingShares.value && newShares.value) {
            const existing = parseInt(existingShares.value) || 0;
            const newVal = parseInt(newShares.value) || 0;
            additionalShares.value = newVal - existing;
        }
        if (existingFace.value && newFace.value) {
            // Usually face value remains same, but we can still compute difference if needed
            const existingF = parseFloat(existingFace.value) || 0;
            const newF = parseFloat(newFace.value) || 0;
            if (newF !== existingF) additionalFace.value = newF;
            else additionalFace.value = newF;
        }
        updatePreview();
    }

    existingShares.addEventListener('input', calculateAdditional);
    newShares.addEventListener('input', calculateAdditional);
    existingFace.addEventListener('input', calculateAdditional);
    newFace.addEventListener('input', calculateAdditional);

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
        const officeAddress = form.querySelector('[name="registered_office"]').value || '________________';

        // Meeting details
        const meetingDate = form.querySelector('[name="meeting_date"]').value;
        const meetingTime = form.querySelector('[name="meeting_time"]').value || '______';

        // Existing capital
        const existingCapitalNum = form.querySelector('[name="existing_capital_number"]').value || '________________';
        const existingCapitalWords = form.querySelector('[name="existing_capital_words"]').value || '________________';
        const existingSharesVal = form.querySelector('[name="existing_shares"]').value || '________________';
        const existingFaceVal = form.querySelector('[name="existing_face_value"]').value || '________________';

        // New capital
        const newCapitalNum = form.querySelector('[name="new_capital_number"]').value || '________________';
        const newCapitalWords = form.querySelector('[name="new_capital_words"]').value || '________________';
        const newSharesVal = form.querySelector('[name="new_shares"]').value || '________________';
        const newFaceVal = form.querySelector('[name="new_face_value"]').value || '________________';

        // Additional shares
        const additionalSharesVal = form.querySelector('[name="additional_shares"]').value || '________________';
        const additionalFaceVal = form.querySelector('[name="additional_face_value"]').value || '________________';

        // Signatory
        const signatoryName = form.querySelector('[name="signatory_name"]').value || '________________';
        const designation = form.querySelector('[name="signatory_designation"]').value || '________________';
        const din = form.querySelector('[name="signatory_din"]').value || '________________';
        const place = form.querySelector('[name="place"]').value || '________________';

        // Format date
        const formattedDate = meetingDate ? formatDate(meetingDate) : '________________';

        // Update DOM
        document.getElementById('prevCompanyName').textContent = companyName;
        document.getElementById('prevCIN').textContent = cin;
        document.getElementById('prevOfficeAddress').textContent = officeAddress;
        document.getElementById('prevMeetingDate').textContent = formattedDate;
        document.getElementById('prevMeetingTime').textContent = meetingTime;

        document.getElementById('prevExistingCapitalNum').textContent = existingCapitalNum;
        document.getElementById('prevExistingCapitalWords').textContent = existingCapitalWords;
        document.getElementById('prevExistingShares').textContent = existingSharesVal;
        document.getElementById('prevExistingFaceValue').textContent = existingFaceVal;

        document.getElementById('prevNewCapitalNum').textContent = newCapitalNum;
        document.getElementById('prevNewCapitalWords').textContent = newCapitalWords;
        document.getElementById('prevNewShares').textContent = newSharesVal;
        document.getElementById('prevNewFaceValue').textContent = newFaceVal;

        document.getElementById('prevAdditionalShares').textContent = additionalSharesVal;
        document.getElementById('prevAdditionalFaceValue').textContent = additionalFaceVal;

        // Clause duplication
        document.getElementById('prevNewCapitalNumClause').textContent = newCapitalNum;
        document.getElementById('prevNewCapitalWordsClause').textContent = newCapitalWords;
        document.getElementById('prevNewSharesClause').textContent = newSharesVal;
        document.getElementById('prevNewFaceValueClause').textContent = newFaceVal;

        document.getElementById('footerCompanyName').textContent = companyName;
        document.getElementById('footerSignatoryName').textContent = signatoryName;
        document.getElementById('footerDesignation').textContent = designation;
        document.getElementById('footerDIN').textContent = din;
        document.getElementById('footerDate').textContent = formattedDate;
        document.getElementById('footerPlace').textContent = place;

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
