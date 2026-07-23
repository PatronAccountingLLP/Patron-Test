@extends('tools.tool-master')
@section('title')
{{_(' Indemnity Bond by Director (Form STK-3)')}}
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
            <h1 class="hero-title">  <span> Indemnity Bond by Director (Form STK-3)</span></h1>
            <p class="hero-subtitle">
                Generate a certified  Indemnity Bond by Director (Form STK-3) in under 60 seconds.
            </p>
        </div>
    </div>

    <!-- Main Container -->
    <div class="download-format-container">
        <div class="alert-wrapper" id="alertContainer"></div>
<!-- Form and Live Preview section-->
<div class="download-format-grid">
    <!-- Form Section -->
    <div class="form-card">
        <div class="form-header">
            <div class="form-step-indicator">
                <span class="step-dot active"></span>
                <span class="step-dot"></span>
                <span class="step-dot"></span>
            </div>
            <h2 class="form-title">Enter Company & Director Details</h2>
            <p class="form-description">
                Fill in the details below to generate Indemnity Bond by Director (Form STK-3).
            </p>
        </div>

        <form id="stk3IndemnityForm" method="POST" action="{{route('form.stk3.indemnity') }}">
            @csrf

            <div class="form-grid">
                <!-- ROC Details Section -->
                <div class="form-group full-width">
                    <label class="form-label" style="font-weight:600;color:#333;border-bottom:1px solid #eee;padding-bottom:8px;margin-bottom:12px;">Registrar of Companies Details</label>
                </div>

                <div class="form-group full-width">
                    <label class="form-label">Name of ROC Office <span class="required">*</span></label>
                    <input type="text" name="roc_office" class="form-control" placeholder="e.g., ROC Delhi, ROC Mumbai, etc." required>
                </div>

                <!-- Company Details Section -->
                <div class="form-group full-width">
                    <label class="form-label" style="font-weight:600;color:#333;border-bottom:1px solid #eee;padding-bottom:8px;margin-bottom:12px;">Company Details</label>
                </div>

                <div class="form-group full-width">
                    <label class="form-label">Company Name <span class="required">*</span></label>
                    <input type="text" name="company_name" class="form-control" placeholder="Enter company name" required>
                </div>

                <div class="form-row">
                    <div class="form-group">
                        <label class="form-label">CIN <span class="required">*</span></label>
                        <input type="text" name="cin" class="form-control" placeholder="Enter CIN" required>
                    </div>

                    <div class="form-group">
                        <label class="form-label">Date of Incorporation <span class="required">*</span></label>
                        <input type="date" name="incorporation_date" class="form-control" required>
                    </div>
                </div>

                <div class="form-group full-width">
                    <label class="form-label">Registered Office Address <span class="required">*</span></label>
                    <textarea name="registered_office" class="form-control" placeholder="Enter registered office address" required></textarea>
                </div>

                <!-- Director Details Section -->
                <div class="form-group full-width">
                    <label class="form-label" style="font-weight:600;color:#333;border-bottom:1px solid #eee;padding-bottom:8px;margin-bottom:12px;">Director Details</label>
                </div>

                <div class="form-group full-width">
                    <label class="form-label">Director's Full Name <span class="required">*</span></label>
                    <input type="text" name="director_name" class="form-control" placeholder="Enter full name of director" required>
                </div>

                <div class="form-row">
                    <div class="form-group">
                        <label class="form-label">Relation Type <span class="required">*</span></label>
                        <div class="select-wrapper">
                            <select name="relation_type" class="form-control form-select" required>
                                <option value="">Select relation</option>
                                <option value="Son of">Son of</option>
                                <option value="Daughter of">Daughter of</option>
                                <option value="Wife of">Wife of</option>
                            </select>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="form-label">Father's/Husband's Name <span class="required">*</span></label>
                        <input type="text" name="relation_name" class="form-control" placeholder="Enter father's/husband's name" required>
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-group">
                        <label class="form-label">DIN <span class="required">*</span></label>
                        <input type="text" name="din" class="form-control" placeholder="Enter DIN" required>
                    </div>

                    <div class="form-group">
                        <label class="form-label">Company Status <span class="required">*</span></label>
                        <div class="select-wrapper">
                            <select name="company_status" class="form-control form-select" required>
                                <option value="">Select status</option>
                                <option value="inoperative since incorporation">Inoperative since incorporation</option>
                                <option value="has not carried on business for two preceding financial years">Not carried business for 2 financial years</option>
                            </select>
                        </div>
                    </div>
                </div>

                <div class="form-group full-width">
                    <label class="form-label">Director's Address <span class="required">*</span></label>
                    <textarea name="director_address" class="form-control" placeholder="Enter director's complete address" required></textarea>
                </div>

                <!-- Witness 1 Details -->
                <div class="form-group full-width">
                    <label class="form-label" style="font-weight:600;color:#333;border-bottom:1px solid #eee;padding-bottom:8px;margin-bottom:12px;">Witness 1 Details</label>
                </div>

                <div class="form-row">
                    <div class="form-group">
                        <label class="form-label">Witness 1 Name <span class="required">*</span></label>
                        <input type="text" name="witness1_name" class="form-control" placeholder="Enter name" required>
                    </div>

                    <div class="form-group">
                        <label class="form-label">Witness 1 Father's Name <span class="required">*</span></label>
                        <input type="text" name="witness1_father" class="form-control" placeholder="Enter father's name" required>
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-group">
                        <label class="form-label">Witness 1 Address <span class="required">*</span></label>
                        <input type="text" name="witness1_address" class="form-control" placeholder="Enter address" required>
                    </div>

                    <div class="form-group">
                        <label class="form-label">Witness 1 City <span class="required">*</span></label>
                        <input type="text" name="witness1_city" class="form-control" placeholder="Enter city" required>
                    </div>
                </div>

                <div class="form-group full-width">
                    <label class="form-label">Witness 1 Occupation <span class="required">*</span></label>
                    <input type="text" name="witness1_occupation" class="form-control" placeholder="Enter occupation" required>
                </div>

                <!-- Witness 2 Details -->
                <div class="form-group full-width">
                    <label class="form-label" style="font-weight:600;color:#333;border-bottom:1px solid #eee;padding-bottom:8px;margin-bottom:12px;">Witness 2 Details</label>
                </div>

                <div class="form-row">
                    <div class="form-group">
                        <label class="form-label">Witness 2 Name <span class="required">*</span></label>
                        <input type="text" name="witness2_name" class="form-control" placeholder="Enter name" required>
                    </div>

                    <div class="form-group">
                        <label class="form-label">Witness 2 Father's Name <span class="required">*</span></label>
                        <input type="text" name="witness2_father" class="form-control" placeholder="Enter father's name" required>
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-group">
                        <label class="form-label">Witness 2 Address <span class="required">*</span></label>
                        <input type="text" name="witness2_address" class="form-control" placeholder="Enter address" required>
                    </div>

                    <div class="form-group">
                        <label class="form-label">Witness 2 City <span class="required">*</span></label>
                        <input type="text" name="witness2_city" class="form-control" placeholder="Enter city" required>
                    </div>
                </div>

                <div class="form-group full-width">
                    <label class="form-label">Witness 2 Occupation <span class="required">*</span></label>
                    <input type="text" name="witness2_occupation" class="form-control" placeholder="Enter occupation" required>
                </div>

                <div class="form-group full-width">
                    <label class="form-label">Date <span class="required">*</span></label>
                    <input type="date" name="bond_date" class="form-control" required>
                </div>
            </div>

            <button type="submit" class="btn-submit" id="downloadPdfBtn">
                <span class="btn-text">Generate & Download Indemnity Bond</span>
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
                        <p class="preview-subtitle">Indemnity Bond by Director (Form STK-3)</p>
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
                    <h2 class="certificate-doc-title">FORM NO. STK-3</h2>
                    <p class="certificate-doc-subtitle">
                        INDEMNITY BOND
                    </p>
                </div>

                <div class="certificate-body">
                    <p class="certificate-paragraph">
                        To,<br>
                        The Registrar of Companies,<br>
                        <strong id="prevROC">________________</strong>
                    </p>

                    <p class="certificate-paragraph">
                        I, <strong id="prevDirectorName">________________</strong>,
                        <span id="prevRelationType">Son/Daughter/Wife of</span>
                        <strong id="prevRelationName">________________</strong>,
                        being a Director of M/s. <strong id="prevCompanyName">________________</strong>,
                        having CIN: <strong id="prevCIN">________________</strong>
                    </p>

                    <p class="certificate-paragraph">
                        I hereby undertake to indemnify all claimants for all lawful claims against the Company arising after the striking off of the name of the Company.
                    </p>

                    <div class="certificate-signature">
                        <p class="signature-label">Signature</p>
                        <div class="signature-line"></div>
                    </div>
                </div>

                <div class="certificate-footer">
                    <div class="footer-item">
                        <span class="footer-item-label">Director</span>
                        <span class="footer-item-value" id="footerDirectorName">________________</span>
                    </div>
                    <div class="footer-item">
                        <span class="footer-item-label">DIN</span>
                        <span class="footer-item-value" id="footerDIN">________________</span>
                    </div>
                    <div class="footer-item">
                        <span class="footer-item-label">Date</span>
                        <span class="footer-item-value" id="footerDate">________________</span>
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
            <h2 class="info-title">Indemnity Bond by Director (Form STK-3)</h2>
            <p class="info-subtitle">
                Company Strike-Off Documentation for Indian Companies
            </p>
        </div>

        <!-- Introduction -->
        <div class="info-content">
            <h3 class="info-subheading">Introduction</h3>

            <p class="info-text">
                An Indemnity Bond by Director (Form STK-3) is a statutory document required during
                the strike-off or removal of a company's name from the Register of Companies. Under
                the Companies (Removal of Names of Companies from the Register of Companies) Rules,
                2016, when directors apply for voluntary strike-off of a defunct company under
                Section 248 of the Companies Act, 2013, they must execute an indemnity bond
                undertaking to compensate any person who may suffer loss or damage due to the
                striking off of the company.
            </p>

            <p class="info-text">
                This bond serves as a legal guarantee wherein the director acknowledges personal
                responsibility for any lawful claims, liabilities, or losses that may arise against
                the company after its name has been struck off. The indemnity bond protects
                creditors, stakeholders, and any other persons who may have legitimate claims
                against the company. Form STK-3 must be executed on appropriate stamp paper and
                witnessed by two persons. This document is submitted along with Form STK-2
                (Application for Removal of Name of Company) to the Registrar of Companies.
            </p>

            <!-- Benefits -->
            <h3 class="info-subheading">Benefits of Using a Standard Format</h3>

            <p class="info-text">
                Utilising a professionally drafted indemnity bond format ensures that all statutory
                requirements under the Companies (Removal of Names of Companies from the Register
                of Companies) Rules, 2016 are properly addressed. A ready-to-use template saves
                valuable time during the company closure process, reduces the risk of procedural
                errors, and provides a consistent framework for documenting the director's
                indemnification undertaking.
            </p>

            <p class="info-text">
                Standardised formats facilitate smoother ROC filings.
            </p>

            <!-- Relevance -->
            <h3 class="info-subheading">Relevance to Company Closure</h3>

            <p class="info-text">
                The indemnity bond is an essential component of the company strike-off procedure.
                After Company Registration, if a company becomes defunct or has remained inoperative
                since incorporation, the directors may apply for voluntary removal of the company's
                name from the register.
            </p>

            <p class="info-text">
                Prior to filing, companies must ensure that all statutory obligations including
                final GST Registration cancellation, income tax filings, and closure of bank
                accounts have been completed. The indemnity bond ensures that directors remain
                accountable for any undisclosed liabilities even after the company ceases to exist.
            </p>
        </div>

        <!-- Sample Format -->
        <div class="format-section">
            <h3 class="format-title">
                Indemnity Bond by Director (Form STK-3) – Sample Format
            </h3>

            <p class="format-text" style="text-align:center;">
                <strong>FORM NO. STK-3</strong>
            </p>

            <p class="format-text" style="text-align:center;">
                <strong>INDEMNITY BOND</strong>
            </p>

            <p class="format-text" style="text-align:center;">
                [Pursuant to clause (i) of sub-rule (3) of Rule 4 of the Companies (Removal of Names of Companies from the Register of Companies) Rules, 2016]
            </p>

            <p class="format-text">
                <strong>To,</strong>
            </p>

            <p class="format-text">
                The Registrar of Companies,<br>
                __________________________________________ (Name of ROC Office)
            </p>

            <p class="format-text">
                <strong>1. Declaration:</strong>
            </p>

            <p class="format-text">
                I, __________________________________________ (Full Name of Director), Son/Daughter/Wife of __________________________________________, being a Director of M/s. __________________________________________ (Name of Company), incorporated on __________________________________________ (Date of Incorporation) under the Companies Act, 2013 having CIN: __________________________________________ and having its registered office at __________________________________________, do hereby solemnly declare that:
            </p>

            <p class="format-text" style="margin-left:20px;">
                (a) I am a Director of the above-named Company holding DIN: __________________________;
            </p>

            <p class="format-text" style="margin-left:20px;">
                (b) I have made an affidavit confirming that the Company has no assets or liabilities as on the date of this application;
            </p>

            <p class="format-text" style="margin-left:20px;">
                (c) The Company has been inoperative since its incorporation / has not carried on business for a period of two immediately preceding financial years and has not made any application for obtaining dormant status under Section 455 of the Companies Act, 2013. Accordingly, the Company is defunct and I request the Registrar of Companies to strike off the name of the Company from the Register of Companies under Section 248 of the Companies Act, 2013.
            </p>

            <p class="format-text">
                <strong>2. Indemnity Undertaking:</strong>
            </p>

            <p class="format-text">
                I do hereby undertake and covenant to indemnify and keep indemnified:
            </p>

            <p class="format-text" style="margin-left:20px;">
                (a) All claimants for all lawful claims against the Company arising in future after the striking off of the name of the Company from the Register of Companies;
            </p>

            <p class="format-text" style="margin-left:20px;">
                (b) Any person for any losses that may arise pursuant to the striking off of the name of the Company;
            </p>

            <p class="format-text" style="margin-left:20px;">
                (c) All claimants for all lawful claims and liabilities which have not come to my notice up to this stage, and if any such claim arises or is observed even after the name of the Company has been struck off in terms of Section 248 of the Companies Act, 2013.
            </p>

            <p class="format-text">
                <strong>Signature:</strong> __________________________
            </p>

            <p class="format-text">
                <strong>Name:</strong> __________________________
            </p>

            <p class="format-text">
                <strong>Designation:</strong> Director
            </p>

            <p class="format-text">
                <strong>DIN:</strong> __________________________
            </p>

            <p class="format-text">
                <strong>Address:</strong> __________________________
            </p>

            <p class="format-text">
                <strong>Date:</strong> __________________________
            </p>

            <p class="format-text">
                <strong>WITNESSES:</strong>
            </p>

            <p class="format-text">
                <strong>Witness 1:</strong><br>
                Signature: __________________________<br>
                Name: __________________________<br>
                Father's Name: __________________________<br>
                Address: __________________________<br>
                City: __________________________<br>
                Occupation: __________________________
            </p>

            <p class="format-text">
                <strong>Witness 2:</strong><br>
                Signature: __________________________<br>
                Name: __________________________<br>
                Father's Name: __________________________<br>
                Address: __________________________<br>
                City: __________________________<br>
                Occupation: __________________________
            </p>
        </div>

        <!-- FAQ -->
        <div class="faq-section">
            <h3 class="faq-title">Frequently Asked Questions</h3>

            <div class="faq-item">
                <h4 class="faq-question">
                    1. What is indemnity bond STK-3 at the time of company strike-off?
                </h4>
                <p class="faq-answer">
                    The Indemnity Bond in Form STK-3 is a legal undertaking executed by directors at
                    the time of voluntary strike-off of a company under Section 248 of the Companies
                    Act, 2013. By signing this bond, directors acknowledge personal responsibility to
                    compensate any person who may incur loss or suffer damage due to the striking off
                    of the company's name from the register. It protects creditors and stakeholders
                    against undisclosed liabilities.
                </p>
            </div>

            <div class="faq-item">
                <h4 class="faq-question">
                    2. How to write an indemnity bond STK-3?
                </h4>
                <p class="faq-answer">
                    To prepare Form STK-3, include the following details: name of the Registrar of
                    Companies, full name and DIN of the director executing the bond, name and CIN of
                    the company, date of incorporation, registered office address, declaration
                    confirming nil assets and liabilities, confirmation that the company is defunct
                    or inoperative, indemnity undertaking clauses, director's signature with date,
                    and signatures of two witnesses with their complete particulars.
                </p>
            </div>

            <div class="faq-item">
                <h4 class="faq-question">
                    3. What is the value of STK-3 stamp paper?
                </h4>
                <p class="faq-answer">
                    The stamp duty for indemnity bonds varies from state to state as stamp duty is a
                    state subject in India. The stamp paper value for Form STK-3 typically ranges
                    from Rs. 100 to Rs. 500 depending on the state where it is executed. It is
                    advisable to verify the applicable stamp duty with the local Sub-Registrar's
                    office or a legal professional in your jurisdiction before execution.
                </p>
            </div>

            <div class="faq-item">
                <h4 class="faq-question">
                    4. Who needs to submit the Indemnity Bond in Form STK-3?
                </h4>
                <p class="faq-answer">
                    All directors of the company applying for voluntary strike-off must submit the
                    Indemnity Bond in Form STK-3. Each director is required to execute a separate
                    indemnity bond or a joint bond may be executed by all directors together. The
                    bond must be duly signed by the directors and witnessed by two independent
                    persons. Form STK-3 is submitted along with Form STK-2 and other required
                    documents to the Registrar of Companies.
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

    const form = document.getElementById('stk3IndemnityForm');
    const downloadPdfBtn = document.getElementById('downloadPdfBtn');
    const alertContainer = document.getElementById('alertContainer');

    // Set default date
    const today = new Date().toISOString().split('T')[0];
    const dateInput = form.querySelector('[name="bond_date"]');
    if (dateInput) {
        dateInput.value = today;
    }

    // Inputs for live preview
    const inputs = form.querySelectorAll('input, textarea, select');
    inputs.forEach(input => {
        input.addEventListener('input', updatePreview);
        input.addEventListener('change', updatePreview);
    });

    // Initial preview
    updatePreview();

    function updatePreview() {
        const rocOffice = form.querySelector('[name="roc_office"]').value || '________________';
        const companyName = form.querySelector('[name="company_name"]').value || '________________';
        const cin = form.querySelector('[name="cin"]').value || '________________';
        const directorName = form.querySelector('[name="director_name"]').value || '________________';
        const relationType = form.querySelector('[name="relation_type"]').value || 'Son/Daughter/Wife of';
        const relationName = form.querySelector('[name="relation_name"]').value || '________________';
        const din = form.querySelector('[name="din"]').value || '________________';
        const bondDate = form.querySelector('[name="bond_date"]').value;

        // Update preview text
        const elROC = document.getElementById('prevROC');
        const elCompanyName = document.getElementById('prevCompanyName');
        const elCIN = document.getElementById('prevCIN');
        const elDirectorName = document.getElementById('prevDirectorName');
        const elRelationType = document.getElementById('prevRelationType');
        const elRelationName = document.getElementById('prevRelationName');
        const elFooterDirectorName = document.getElementById('footerDirectorName');
        const elFooterDIN = document.getElementById('footerDIN');
        const elFooterDate = document.getElementById('footerDate');

        if (elROC) elROC.textContent = rocOffice;
        if (elCompanyName) elCompanyName.textContent = companyName;
        if (elCIN) elCIN.textContent = cin;
        if (elDirectorName) elDirectorName.textContent = directorName;
        if (elRelationType) elRelationType.textContent = relationType;
        if (elRelationName) elRelationName.textContent = relationName;
        if (elFooterDirectorName) elFooterDirectorName.textContent = directorName;
        if (elFooterDIN) elFooterDIN.textContent = din;

        if (bondDate && elFooterDate) {
            const formattedDate = new Date(bondDate).toLocaleDateString('en-IN', {
                day: '2-digit',
                month: 'long',
                year: 'numeric'
            });
            elFooterDate.textContent = formattedDate;
        } else if (elFooterDate) {
            elFooterDate.textContent = '________________';
        }

        updateStepIndicator();
    }

    function updateStepIndicator() {
        const steps = document.querySelectorAll('.step-dot');
        const requiredInputs = form.querySelectorAll('input[required], textarea[required], select[required]');
        let filled = 0;

        requiredInputs.forEach(input => {
            if (input.value.trim() !== '') {
                filled++;
            }
        });

        const progress = filled / requiredInputs.length;

        steps.forEach((step, index) => {
            step.classList.remove('active');

            if (index === 0 && progress >= 0) step.classList.add('active');
            if (index === 1 && progress >= 0.5) step.classList.add('active');
            if (index === 2 && progress >= 1) step.classList.add('active');
        });
    }

});
</script>
<!--End Js Section -->

@endsection
