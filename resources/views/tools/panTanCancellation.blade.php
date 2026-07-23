@extends('tools.tool-master')
@section('title')
{{_(' PAN and TAN Cancellation Request Letter')}}
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
            <h1 class="hero-title"> <span> PAN and TAN Cancellation Request Letter</span></h1>
            <p class="hero-subtitle">
                Generate a certified PAN and TAN Cancellation Request Letter in under 60 seconds.
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
            <h2 class="form-title">Enter PAN & TAN Cancellation Details</h2>
            <p class="form-description">
                Fill in the details below to generate a PAN and TAN Cancellation Request Letter.
            </p>
        </div>

        <form id="cancellationForm" method="POST" action="{{ route('br.pan.tan.cancel') }}">
            @csrf

            <div class="form-grid">
                <!-- Entity Details -->
                <div class="form-group full-width">
                    <label class="form-label">Entity Name (Company/LLP) <span class="required">*</span></label>
                    <input type="text" name="entity_name" class="form-control" placeholder="Enter name" required>
                </div>
                <div class="form-row">
                    <div class="form-group">
                        <label class="form-label">PAN <span class="required">*</span></label>
                        <input type="text" name="pan" class="form-control" placeholder="e.g., AAACB1234E" required>
                    </div>
                    <div class="form-group">
                        <label class="form-label">TAN <span class="required">*</span></label>
                        <input type="text" name="tan" class="form-control" placeholder="e.g., MUM12345E" required>
                    </div>
                </div>
                <div class="form-group full-width">
                    <label class="form-label">Entity Type <span class="required">*</span></label>
                    <div class="select-wrapper">
                        <select name="entity_type" class="form-control form-select" required>
                            <option value="">Select type</option>
                            <option value="Company">Company</option>
                            <option value="LLP">LLP</option>
                        </select>
                    </div>
                </div>

                <!-- Strike Off Details -->
                <div class="form-group full-width">
                    <label class="form-label">ROC Jurisdiction (e.g., Mumbai, Delhi) <span class="required">*</span></label>
                    <input type="text" name="roc_jurisdiction" class="form-control" placeholder="e.g., Mumbai" required>
                </div>
                <div class="form-row">
                    <div class="form-group">
                        <label class="form-label">Strike Off Order Date <span class="required">*</span></label>
                        <input type="date" name="strike_off_date" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label class="form-label">Income Tax Jurisdiction/Ward <span class="required">*</span></label>
                        <input type="text" name="tax_jurisdiction" class="form-control" placeholder="e.g., Ward 1, Mumbai" required>
                    </div>
                </div>
                <div class="form-group full-width">
                    <label class="form-label">Reason for Closure <span class="required">*</span></label>
                    <div class="select-wrapper">
                        <select name="reason" class="form-control form-select" required>
                            <option value="">Select reason</option>
                            <option value="Non-commencement of business">Non-commencement of business</option>
                            <option value="Cessation of business operations">Cessation of business operations</option>
                            <option value="Financial difficulties">Financial difficulties</option>
                            <option value="Personal reasons">Personal reasons</option>
                            <option value="Other reasons">Other reasons</option>
                        </select>
                    </div>
                </div>
                <div class="form-group full-width" id="otherReasonDiv" style="display:none;">
                    <label class="form-label">Please specify <span class="required">*</span></label>
                    <input type="text" name="other_reason" class="form-control" placeholder="Enter reason">
                </div>

                <!-- Confirmation Checkboxes -->
                <div class="form-group full-width">
                    <label class="form-label">Confirmations</label>
                    <div class="checkbox-group">
                        <label><input type="checkbox" name="confirm_legal" value="1"> All legal proceedings for closure/strike off have been duly completed</label>
                        <label><input type="checkbox" name="confirm_business" value="1"> The entity is no longer carrying on any business or operations</label>
                        <label><input type="checkbox" name="confirm_returns" value="1"> All pending income tax returns have been filed (if applicable)</label>
                        <label><input type="checkbox" name="confirm_dues" value="1"> There are no outstanding tax dues or pending assessments (if applicable)</label>
                    </div>
                </div>

                <!-- Enclosures -->
                <div class="form-group full-width">
                    <label class="form-label">Enclosures (Optional)</label>
                    <div class="checkbox-group">
                        <label><input type="checkbox" name="enclose_strike_order" value="1"> Copy of Strike Off Order from Registrar of Companies</label>
                        <label><input type="checkbox" name="enclose_pan" value="1"> Copy of PAN Card</label>
                        <label><input type="checkbox" name="enclose_tan" value="1"> Copy of TAN Allotment Letter</label>
                        <label><input type="checkbox" name="enclose_other" value="1"> Other relevant documents</label>
                        <input type="text" name="enclose_other_text" class="form-control" placeholder="Specify other documents" style="margin-top:5px;">
                    </div>
                </div>

                <!-- Signatory Details -->
                <div class="form-row">
                    <div class="form-group">
                        <label class="form-label">Signatory Name <span class="required">*</span></label>
                        <input type="text" name="signatory_name" class="form-control" placeholder="Enter name" required>
                    </div>
                    <div class="form-group">
                        <label class="form-label">Designation <span class="required">*</span></label>
                        <div class="select-wrapper">
                            <select name="signatory_designation" class="form-control form-select" required>
                                <option value="">Select</option>
                                <option value="Director">Director</option>
                                <option value="Designated Partner">Designated Partner</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group">
                        <label class="form-label">DIN / DPIN <span class="required">*</span></label>
                        <input type="text" name="din_dpin" class="form-control" placeholder="Enter DIN/DPIN" required>
                    </div>
                    <div class="form-group">
                        <label class="form-label">Place <span class="required">*</span></label>
                        <input type="text" name="place" class="form-control" placeholder="City / Place" required>
                    </div>
                </div>
                <div class="form-group full-width">
                    <label class="form-label">Date of Letter <span class="required">*</span></label>
                    <input type="date" name="letter_date" class="form-control" required>
                </div>
            </div>

            <button type="submit" class="btn-submit" id="downloadPdfBtn">
                <span class="btn-text">Generate & Download Letter</span>
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
                        <p class="preview-subtitle">PAN and TAN Cancellation Request Letter</p>
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
                    <h2 class="certificate-doc-title">PAN AND TAN CANCELLATION REQUEST LETTER</h2>
                </div>

                <div class="certificate-body">
                    <p><strong>Date:</strong> <span id="previewLetterDate">________________</span></p>

                    <p>To,<br>
                    The Income Tax Officer,<br>
                    Income Tax Department,<br>
                    <span id="previewTaxJurisdiction">________________</span></p>

                    <p><strong>Subject: Request for Cancellation/Surrender of PAN and TAN</strong><br>
                    Reference: Strike Off Order dated <span id="previewStrikeOffDate">________________</span> passed by Registrar of Companies, <span id="previewROCJurisdiction">________________</span></p>

                    <p>Respected Sir/Madam,</p>

                    <p>We, <strong><span id="previewEntityName">________________</span></strong> (<span id="previewEntityType">Company/LLP</span>), hereby request you to cancel/surrender the following tax identification numbers allotted to our organisation:</p>

                    <p><strong>PAN:</strong> <span id="previewPAN">________________</span><br>
                    <strong>TAN:</strong> <span id="previewTAN">________________</span></p>

                    <p>We wish to inform you that our <span id="previewEntityType2">company/LLP</span> has been struck off from the Register of <span id="previewEntityType3">Companies/LLPs</span> by the Registrar of Companies, <span id="previewROCJurisdiction2">________________</span> vide Order dated <span id="previewStrikeOffDate2">________________</span>. The <span id="previewEntityType4">company/LLP</span> has ceased to exist as a legal entity.</p>

                    <p>The reasons for closure include:<br>
                    <span id="previewReason">________________</span></p>

                    <p>We confirm that:</p>
                    <div id="previewConfirmations"></div>

                    <p>In view of the above, we kindly request you to cancel/surrender the PAN and TAN of our organisation and update your records accordingly.</p>

                    <p><strong>Enclosures:</strong></p>
                    <div id="previewEnclosures"></div>

                    <p>Thanking you,<br>
                    Yours faithfully,</p>

                    <div class="certificate-signature">
                        <p>For <strong><span id="previewEntityNameFooter">________________</span></strong><br>
                        (Name of <span id="previewEntityType5">Company/LLP</span>)</p>
                        <p><strong>Signature:</strong> _________________________<br>
                        <strong>Name:</strong> <span id="previewSignatoryName">________________</span><br>
                        <strong>Designation:</strong> <span id="previewSignatoryDesignation">________________</span><br>
                        <strong>DIN/DPIN:</strong> <span id="previewDinDpin">________________</span><br>
                        <strong>Place:</strong> <span id="previewPlace">________________</span><br>
                        <strong>Date:</strong> <span id="previewDateFooter">________________</span></p>
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
            <span class="info-header-badge">Professional Format Guide</span>
            <h2 class="info-title">PAN and TAN Cancellation Request Letter</h2>
            <p class="info-subtitle">
                Standard Template for Requesting Cancellation/Surrender of PAN and TAN after Company/LLP Strike Off
            </p>
        </div>

        <!-- Introduction -->
        <div class="info-content">
            <h3 class="info-subheading">Introduction</h3>
            <p class="info-text">
                A PAN and TAN Cancellation Request Letter is a formal communication addressed to the Income Tax Department requesting the surrender or cancellation of a company's or LLP's Permanent Account Number (PAN) and Tax Deduction and Collection Account Number (TAN). When a company or LLP is struck off from the Register of Companies or Register of LLPs, the entity ceases to exist as a legal person. Since the PAN and TAN were issued to that entity for income tax purposes, these tax identification numbers must be surrendered to the Income Tax authorities.
            </p>
            <p class="info-text">
                This request letter is typically submitted after the company or LLP has been formally struck off by the Registrar of Companies. The letter explains the reason for closure, confirms that all legal proceedings for shutdown have been completed, and requests cancellation of both PAN and TAN. It must be signed by an authorised person such as a Director (in case of a company) or Designated Partner (in case of an LLP). The letter should include the entity's name, PAN, TAN, and details of the signatory.
            </p>
        </div>

        <!-- Benefits -->
        <div class="info-content">
            <h3 class="info-subheading">Benefits of Using a Standard Format</h3>
            <p class="info-text">
                Utilising a professionally drafted request letter format ensures that all essential information required by the Income Tax Department is properly included. A ready-to-use template saves valuable time during the post-closure compliance process, reduces the risk of omissions or errors, and provides a consistent framework for communicating with tax authorities. Standardised formats facilitate smoother processing of the cancellation request.
            </p>
        </div>

        <!-- Relevance -->
        <div class="info-content">
            <h3 class="info-subheading">Relevance to Company and LLP Closure</h3>
            <p class="info-text">
                After completing Company Registration or LLP registration, entities are allotted PAN and TAN for tax compliance purposes. When the entity is struck off, all statutory registrations including GST Registration should be cancelled before or along with the strike off process. The PAN and TAN cancellation is typically done after receiving the strike off order from the Registrar of Companies. This ensures that the defunct entity's tax identifiers are not misused and prevents future compliance issues with the Income Tax Department.
            </p>
        </div>

        <!-- Sample Request Letter -->
        <div class="format-section">
            <h3 class="format-title">PAN and TAN Cancellation Request Letter – Sample Format</h3>

            <p class="format-text">
                [TO BE PRINTED ON COMPANY/LLP LETTERHEAD]<br>
                Date: ________________________<br>
                To,<br>
                The Income Tax Officer,<br>
                Income Tax Department,<br>
                ________________________ (Jurisdiction/Ward)
            </p>

            <p class="format-text">
                Subject: Request for Cancellation/Surrender of PAN and TAN<br>
                Reference: Strike Off Order dated ________________________ passed by Registrar of Companies, ________________________
            </p>

            <p class="format-text">
                Respected Sir/Madam,<br>
                We, ________________________ (Name of Company/LLP), hereby request you to cancel/surrender the following tax identification numbers allotted to our organisation:<br>
                PAN: ________________________<br>
                TAN: ________________________
            </p>

            <p class="format-text">
                We wish to inform you that our company/LLP has been struck off from the Register of Companies/LLPs by the Registrar of Companies, ________________________ (Jurisdiction) vide Order dated ________________________. The company/LLP has ceased to exist as a legal entity.
            </p>

            <p class="format-text">
                The reasons for closure include:<br>
                ________________________ (e.g., Non-commencement of business / Cessation of business operations / Financial difficulties / Personal reasons / Other reasons)
            </p>

            <p class="format-text">
                We confirm that:<br>
                1. All legal proceedings for the closure/strike off of the company/LLP have been duly completed.<br>
                2. The company/LLP is no longer carrying on any business or operations.<br>
                3. All pending income tax returns have been filed (if applicable).<br>
                4. There are no outstanding tax dues or pending assessments (if applicable).
            </p>

            <p class="format-text">
                In view of the above, we kindly request you to cancel/surrender the PAN and TAN of our organisation and update your records accordingly.
            </p>

            <p class="format-text">
                Enclosures:<br>
                1. Copy of Strike Off Order from Registrar of Companies<br>
                2. Copy of PAN Card<br>
                3. Copy of TAN Allotment Letter<br>
                4. Any other relevant documents
            </p>

            <p class="format-text">
                Thanking you,<br>
                Yours faithfully,<br>
                For ________________________<br>
                (Name of Company/LLP)<br>
                Signature: ________________________<br>
                Name: ________________________<br>
                Designation: ________________________ (Director/Designated Partner)<br>
                DIN/DPIN: ________________________<br>
                Place: ________________________<br>
                Date: ________________________
            </p>
        </div>

        <!-- FAQ -->
        <div class="faq-section">
            <h3 class="faq-title">Frequently Asked Questions</h3>

            <div class="faq-item">
                <h4 class="faq-question">1. How to write a PAN card cancellation request letter?</h4>
                <p class="faq-answer">
                    A PAN card cancellation request letter should be addressed to the Income Tax Officer of the relevant jurisdiction. It must include the entity name, PAN and TAN numbers, reference to the strike off order with date, reason for closure, confirmation statements, and signature of an authorised person (Director or Designated Partner). The letter should be printed on company letterhead.
                </p>
            </div>

            <div class="faq-item">
                <h4 class="faq-question">2. How to cancel a PAN card at the strike-off company?</h4>
                <p class="faq-answer">
                    After a company is struck off, submit the PAN cancellation request letter to the jurisdictional Income Tax Officer along with a copy of the strike off order from the Registrar of Companies, copy of PAN card, and other relevant documents. The letter should be signed by a former Director. The Income Tax Department will process the cancellation and update their records.
                </p>
            </div>

            <div class="faq-item">
                <h4 class="faq-question">3. What are the details required in the PAN card cancellation request letter format?</h4>
                <p class="faq-answer">
                    The PAN card cancellation request letter should include: date, addressee (Income Tax Officer with jurisdiction), entity name, PAN and TAN numbers, reference to strike off order with date, reason for closure, confirmation that all legal proceedings are complete, enclosure list (strike off order, PAN copy, TAN allotment letter), and signature block with name, designation, DIN/DPIN, place, and date.
                </p>
            </div>

            <div class="faq-item">
                <h4 class="faq-question">4. How much is the cancellation fee for PAN card cancellation?</h4>
                <p class="faq-answer">
                    There is no prescribed fee for cancellation or surrender of PAN or TAN. The request for cancellation is submitted free of cost to the jurisdictional Income Tax Officer. However, if any tax dues or penalties are outstanding against the entity, those must be cleared before or along with the cancellation request. Check with the Income Tax Department for any updated requirements.
                </p>
            </div>

        </div>

    </div>
</div>
    </div>
</div>
<!-- JavaScript for live preview and conditional fields -->
<script>
document.addEventListener('DOMContentLoaded', function () {
    const form = document.getElementById('cancellationForm');

    // Set default date
    const today = new Date().toISOString().slice(0,10);
    const letterDateInput = form.querySelector('[name="letter_date"]');
    const strikeOffDateInput = form.querySelector('[name="strike_off_date"]');
    if (letterDateInput && !letterDateInput.value) letterDateInput.value = today;
    if (strikeOffDateInput && !strikeOffDateInput.value) strikeOffDateInput.value = today;

    // Show/hide other reason field
    const reasonSelect = form.querySelector('[name="reason"]');
    const otherReasonDiv = document.getElementById('otherReasonDiv');
    const otherReasonInput = form.querySelector('[name="other_reason"]');
    reasonSelect.addEventListener('change', function() {
        if (reasonSelect.value === 'Other reasons') {
            otherReasonDiv.style.display = 'block';
            otherReasonInput.required = true;
        } else {
            otherReasonDiv.style.display = 'none';
            otherReasonInput.required = false;
            otherReasonInput.value = '';
        }
        updatePreview();
    });

    function formatDate(dateString) {
        if (!dateString) return '________________';
        const date = new Date(dateString);
        return date.toLocaleDateString('en-IN', { day: '2-digit', month: 'long', year: 'numeric' });
    }

    function updatePreview() {
        const entityName = form.querySelector('[name="entity_name"]').value || '________________';
        const pan = form.querySelector('[name="pan"]').value || '________________';
        const tan = form.querySelector('[name="tan"]').value || '________________';
        const entityType = form.querySelector('[name="entity_type"]').value || 'Company/LLP';
        const rocJurisdiction = form.querySelector('[name="roc_jurisdiction"]').value || '________________';
        const strikeOffDateRaw = form.querySelector('[name="strike_off_date"]').value;
        const strikeOffDate = strikeOffDateRaw ? formatDate(strikeOffDateRaw) : '________________';
        const taxJurisdiction = form.querySelector('[name="tax_jurisdiction"]').value || '________________';
        let reason = form.querySelector('[name="reason"]').value;
        if (reason === 'Other reasons') {
            const otherReason = form.querySelector('[name="other_reason"]').value;
            if (otherReason) reason = otherReason;
            else reason = 'Other reasons';
        }
        const letterDateRaw = form.querySelector('[name="letter_date"]').value;
        const letterDate = letterDateRaw ? formatDate(letterDateRaw) : '________________';
        const signatoryName = form.querySelector('[name="signatory_name"]').value || '________________';
        const signatoryDesignation = form.querySelector('[name="signatory_designation"]').value || '________________';
        const dinDpin = form.querySelector('[name="din_dpin"]').value || '________________';
        const place = form.querySelector('[name="place"]').value || '________________';

        // Confirmations
        const confirmLegal = form.querySelector('[name="confirm_legal"]').checked;
        const confirmBusiness = form.querySelector('[name="confirm_business"]').checked;
        const confirmReturns = form.querySelector('[name="confirm_returns"]').checked;
        const confirmDues = form.querySelector('[name="confirm_dues"]').checked;

        // Enclosures
        const encloseStrike = form.querySelector('[name="enclose_strike_order"]').checked;
        const enclosePan = form.querySelector('[name="enclose_pan"]').checked;
        const encloseTan = form.querySelector('[name="enclose_tan"]').checked;
        const encloseOther = form.querySelector('[name="enclose_other"]').checked;
        const otherText = form.querySelector('[name="enclose_other_text"]').value;

        // Update DOM elements
        document.getElementById('previewLetterDate').textContent = letterDate;
        document.getElementById('previewTaxJurisdiction').textContent = taxJurisdiction;
        document.getElementById('previewStrikeOffDate').textContent = strikeOffDate;
        document.getElementById('previewROCJurisdiction').textContent = rocJurisdiction;
        document.getElementById('previewEntityName').textContent = entityName;
        document.getElementById('previewEntityType').textContent = entityType;
        document.getElementById('previewPAN').textContent = pan;
        document.getElementById('previewTAN').textContent = tan;
        document.getElementById('previewEntityType2').textContent = entityType;
        document.getElementById('previewEntityType3').textContent = entityType === 'Company' ? 'Companies' : 'LLPs';
        document.getElementById('previewROCJurisdiction2').textContent = rocJurisdiction;
        document.getElementById('previewStrikeOffDate2').textContent = strikeOffDate;
        document.getElementById('previewEntityType4').textContent = entityType;
        document.getElementById('previewReason').textContent = reason || '________________';
        document.getElementById('previewEntityNameFooter').textContent = entityName;
        document.getElementById('previewEntityType5').textContent = entityType;
        document.getElementById('previewSignatoryName').textContent = signatoryName;
        document.getElementById('previewSignatoryDesignation').textContent = signatoryDesignation;
        document.getElementById('previewDinDpin').textContent = dinDpin;
        document.getElementById('previewPlace').textContent = place;
        document.getElementById('previewDateFooter').textContent = letterDate;

        // Confirmations list
        const confirmDiv = document.getElementById('previewConfirmations');
        confirmDiv.innerHTML = '';
        const confirmItems = [];
        if (confirmLegal) confirmItems.push('1. All legal proceedings for the closure/strike off have been duly completed.');
        if (confirmBusiness) confirmItems.push('2. The entity is no longer carrying on any business or operations.');
        if (confirmReturns) confirmItems.push('3. All pending income tax returns have been filed (if applicable).');
        if (confirmDues) confirmItems.push('4. There are no outstanding tax dues or pending assessments (if applicable).');
        if (confirmItems.length === 0) {
            confirmDiv.innerHTML = '<p>No confirmations selected.</p>';
        } else {
            confirmItems.forEach(item => {
                const p = document.createElement('p');
                p.textContent = item;
                confirmDiv.appendChild(p);
            });
        }

        // Enclosures list
        const enclDiv = document.getElementById('previewEnclosures');
        enclDiv.innerHTML = '';
        const enclItems = [];
        if (encloseStrike) enclItems.push('1. Copy of Strike Off Order from Registrar of Companies');
        if (enclosePan) enclItems.push('2. Copy of PAN Card');
        if (encloseTan) enclItems.push('3. Copy of TAN Allotment Letter');
        if (encloseOther && otherText.trim()) enclItems.push(`4. ${otherText.trim()}`);
        else if (encloseOther) enclItems.push('4. Other relevant documents');
        if (enclItems.length === 0) {
            enclDiv.innerHTML = '<p>No enclosures specified.</p>';
        } else {
            enclItems.forEach(item => {
                const p = document.createElement('p');
                p.textContent = item;
                enclDiv.appendChild(p);
            });
        }

        updateStepIndicator();
    }

    function updateStepIndicator() {
        const steps = document.querySelectorAll('.step-dot');
        const requiredInputs = form.querySelectorAll('input[required], select[required], textarea[required]');
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
    const inputs = form.querySelectorAll('input, textarea, select');
    inputs.forEach(input => input.addEventListener('input', updatePreview));
    inputs.forEach(input => input.addEventListener('change', updatePreview));
    updatePreview();


});
</script>
@endsection
