@extends('tools.tool-master')
@section('title')
{{_('Form-9: Consent to Act as Designated Partner')}}
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
            <h1 class="hero-title">Board Resolution for  <span> Consent to Act as Designated Partner</span></h1>
            <p class="hero-subtitle">
                Generate a certified Form-9: Consent to Act as Designated Partner in under 60 seconds.
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
            <h2 class="form-title">Enter LLP & Designated Partner Details</h2>
            <p class="form-description">
                Fill in the details below to generate Form-9: Consent to Act as Designated Partner.
            </p>
        </div>

        <form id="form9ConsentForm" method="POST" action="{{route('form9.designated.partner') }}">
            @csrf

            <div class="form-grid">
                <!-- LLP Details Section -->
                <div class="form-group full-width">
                    <label class="form-label" style="font-weight:600;color:#333;border-bottom:1px solid #eee;padding-bottom:8px;margin-bottom:12px;">LLP Details</label>
                </div>

                <div class="form-group full-width">
                    <label class="form-label">LLP Name <span class="required">*</span></label>
                    <input type="text" name="llp_name" class="form-control" placeholder="Enter LLP name" required>
                </div>

                <div class="form-group full-width">
                    <label class="form-label">Registered Office Address <span class="required">*</span></label>
                    <textarea name="registered_office" class="form-control" placeholder="Enter registered office address" rows="2" required></textarea>
                </div>

                <!-- Designated Partner Details Section -->
                <div class="form-group full-width">
                    <label class="form-label" style="font-weight:600;color:#333;border-bottom:1px solid #eee;padding-bottom:8px;margin-bottom:12px;">Designated Partner Details</label>
                </div>

                <div class="form-group full-width">
                    <label class="form-label">DPIN (Designated Partner Identification Number) <span class="required">*</span></label>
                    <input type="text" name="dpin" class="form-control" placeholder="Enter DPIN" required>
                </div>

                <div class="form-group full-width">
                    <label class="form-label">Full Name (as per PAN) <span class="required">*</span></label>
                    <input type="text" name="full_name" class="form-control" placeholder="Enter full name as per PAN" required>
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

                <div class="form-group full-width">
                    <label class="form-label">Residential Address <span class="required">*</span></label>
                    <textarea name="residential_address" class="form-control" placeholder="Enter complete residential address" rows="2" required></textarea>
                </div>

                <div class="form-row">
                    <div class="form-group">
                        <label class="form-label">Email Address <span class="required">*</span></label>
                        <input type="email" name="email" class="form-control" placeholder="Enter email address" required>
                    </div>

                    <div class="form-group">
                        <label class="form-label">Mobile Number <span class="required">*</span></label>
                        <input type="text" name="mobile" class="form-control" placeholder="Enter mobile number" required>
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-group">
                        <label class="form-label">Date of Birth <span class="required">*</span></label>
                        <input type="date" name="dob" class="form-control" required>
                    </div>

                    <div class="form-group">
                        <label class="form-label">Income Tax PAN <span class="required">*</span></label>
                        <input type="text" name="pan" class="form-control" placeholder="Enter PAN" required>
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-group">
                        <label class="form-label">Occupation <span class="required">*</span></label>
                        <input type="text" name="occupation" class="form-control" placeholder="Enter occupation" required>
                    </div>

                    <div class="form-group">
                        <label class="form-label">Nationality <span class="required">*</span></label>
                        <input type="text" name="nationality" class="form-control" placeholder="Enter nationality" value="Indian" required>
                    </div>
                </div>

                <div class="form-group full-width">
                    <label class="form-label">Number of Companies in which Managing Director/CEO/WTD/Secretary/CFO/Manager <span class="required">*</span></label>
                    <input type="text" name="directorships" class="form-control" placeholder="Enter number or NIL" required>
                </div>

                <div class="form-group full-width">
                    <label class="form-label">Professional Membership No. & Certificate of Practice No. (if any) <span class="required">*</span></label>
                    <input type="text" name="membership_no" class="form-control" placeholder="Enter membership details or NIL" required>
                </div>

                <div class="form-row">
                    <div class="form-group">
                        <label class="form-label">Place <span class="required">*</span></label>
                        <input type="text" name="place" class="form-control" placeholder="City / Place" required>
                    </div>

                    <div class="form-group">
                        <label class="form-label">Date <span class="required">*</span></label>
                        <input type="date" name="consent_date" class="form-control" required>
                    </div>
                </div>
            </div>

            <button type="submit" class="btn-submit" id="downloadPdfBtn">
                <span class="btn-text">Generate & Download Form-9</span>
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
                        <p class="preview-subtitle">Form-9: Consent to Act as Designated Partner</p>
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
                    <h2 class="certificate-doc-title">FORM-9</h2>
                    <p class="certificate-doc-subtitle">
                        Consent to Act as Designated Partner
                    </p>
                </div>

                <div class="certificate-body">
                    <p class="certificate-paragraph">
                        <strong>To,</strong><br>
                        LLP Name: <strong id="prevLLPName">________________</strong>
                    </p>

                    <p class="certificate-paragraph">
                        I, <strong id="prevFullName">________________</strong>,
                        <strong id="prevRelationType">Son/Daughter/Wife of</strong>
                        <strong id="prevRelationName">________________</strong>,
                        hereby give my consent to act as Designated Partner of the above-named Limited Liability Partnership.
                    </p>

                    <p class="certificate-paragraph">
                        <strong>DPIN:</strong> <span id="prevDPIN">________________</span><br>
                        <strong>PAN:</strong> <span id="prevPAN">________________</span><br>
                        <strong>Email:</strong> <span id="prevEmail">________________</span><br>
                        <strong>Mobile:</strong> <span id="prevMobile">________________</span>
                    </p>

                    <p class="certificate-paragraph">
                        I hereby declare that I satisfy all conditions and requirements for being eligible to act as a designated partner.
                    </p>

                    <div class="certificate-signature">
                        <p class="signature-label">Signature</p>
                        <div class="signature-line"></div>
                    </div>
                </div>

                <div class="certificate-footer">
                    <div class="footer-item">
                        <span class="footer-item-label">Name</span>
                        <span class="footer-item-value" id="footerName">________________</span>
                    </div>
                    <div class="footer-item">
                        <span class="footer-item-label">Place</span>
                        <span class="footer-item-value" id="footerPlace">________________</span>
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
            <h2 class="info-title">Form-9: Consent to Act as Designated Partner</h2>
            <p class="info-subtitle">
                LLP Statutory Documentation for Indian Limited Liability Partnerships
            </p>
        </div>

        <!-- Introduction -->
        <div class="info-content">
            <h3 class="info-subheading">Introduction</h3>

            <p class="info-text">
                Form-9 (Consent to Act as Designated Partner) is a statutory document required under
                the Limited Liability Partnership Act, 2008 and the LLP Rules. When a Limited
                Liability Partnership is being incorporated or when a new designated partner is
                being appointed, each person proposed to be appointed as a designated partner must
                submit their written consent in this prescribed format. The form serves as a formal
                declaration that the individual agrees to act as a designated partner and confirms
                their eligibility under the Act.
            </p>

            <p class="info-text">
                This document captures essential particulars of the proposed designated partner
                including their Designated Partner Identification Number (DPIN), full name, father's
                name, residential address, contact details, date of birth, PAN, occupation, and
                nationality. The form also requires disclosure of directorships or key managerial
                positions held in other companies and professional membership details if applicable.
                Form-9 must be submitted along with LLP Registration documents to the Registrar of
                Companies.
            </p>

            <!-- Benefits -->
            <h3 class="info-subheading">Benefits of Using a Standard Format</h3>

            <p class="info-text">
                Utilising a professionally drafted Form-9 format ensures that all mandatory
                particulars required under the LLP Rules are properly captured. A ready-to-use
                template saves valuable time during LLP incorporation or designated partner
                appointment, reduces the risk of procedural errors, and provides a consistent
                framework for documenting the consent.
            </p>

            <p class="info-text">
                Standardised formats facilitate smoother ROC filings and help avoid rejection due
                to incomplete information.
            </p>

            <!-- Relevance -->
            <h3 class="info-subheading">Relevance to LLP Registration</h3>

            <p class="info-text">
                Form-9 is a mandatory document during LLP Registration. Every designated partner
                must submit this consent before the LLP can be incorporated. A designated partner
                holds significant responsibilities including compliance with the LLP Act, filing
                of annual returns, and maintenance of statutory records.
            </p>

            <p class="info-text">
                Post-incorporation, the LLP may need to obtain GST Registration and other business
                registrations where designated partner details may be required. Ensuring accurate
                information in Form-9 helps maintain consistency across all statutory filings.
            </p>
        </div>

        <!-- Sample Format -->
        <div class="format-section">
            <h3 class="format-title">
                Form-9: Consent to Act as Designated Partner – Sample Format
            </h3>

            <p class="format-text" style="text-align:center;">
                <strong>FORM-9</strong>
            </p>

            <p class="format-text" style="text-align:center;">
                [Pursuant to Rule 7 and Rule 10(8) of the LLP Rules]
            </p>

            <p class="format-text" style="text-align:center;">
                <strong>Consent to Act as Designated Partner</strong>
            </p>

            <p class="format-text">
                <strong>To,</strong>
            </p>

            <p class="format-text">
                <strong>LLP Name:</strong> __________________________________________ (Under Incorporation/Existing)
            </p>

            <p class="format-text">
                <strong>Registered Office Address:</strong> __________________________________________
            </p>

            <p class="format-text">
                Dear Sir/Madam,
            </p>

            <p class="format-text">
                I, __________________________________________ (Full Name), Son/Daughter/Wife of __________________________________________, hereby give my consent to act as Designated Partner of the above-named Limited Liability Partnership, pursuant to the provisions of Rule 7 and Rule 10(8) of the Limited Liability Partnership Rules, 2009, and certify that I am not disqualified from becoming a Designated Partner under the Limited Liability Partnership Act, 2008.
            </p>

            <p class="format-text">
                <strong>My particulars are as follows:</strong>
            </p>

            <table class="format-table" style="width:100%;border-collapse:collapse;margin:16px 0;">
                <tbody>
                    <tr>
                        <td style="border:1px solid #ccc;padding:8px;width:10%;">1</td>
                        <td style="border:1px solid #ccc;padding:8px;width:50%;">Designated Partner Identification Number (DPIN)</td>
                        <td style="border:1px solid #ccc;padding:8px;width:40%;"></td>
                    </tr>
                    <tr>
                        <td style="border:1px solid #ccc;padding:8px;">2</td>
                        <td style="border:1px solid #ccc;padding:8px;">Full Name (as per PAN)</td>
                        <td style="border:1px solid #ccc;padding:8px;"></td>
                    </tr>
                    <tr>
                        <td style="border:1px solid #ccc;padding:8px;">3</td>
                        <td style="border:1px solid #ccc;padding:8px;">Father's/Husband's Name</td>
                        <td style="border:1px solid #ccc;padding:8px;"></td>
                    </tr>
                    <tr>
                        <td style="border:1px solid #ccc;padding:8px;">4</td>
                        <td style="border:1px solid #ccc;padding:8px;">Residential Address</td>
                        <td style="border:1px solid #ccc;padding:8px;"></td>
                    </tr>
                    <tr>
                        <td style="border:1px solid #ccc;padding:8px;">5</td>
                        <td style="border:1px solid #ccc;padding:8px;">Email Address</td>
                        <td style="border:1px solid #ccc;padding:8px;"></td>
                    </tr>
                    <tr>
                        <td style="border:1px solid #ccc;padding:8px;">6</td>
                        <td style="border:1px solid #ccc;padding:8px;">Mobile Number</td>
                        <td style="border:1px solid #ccc;padding:8px;"></td>
                    </tr>
                    <tr>
                        <td style="border:1px solid #ccc;padding:8px;">7</td>
                        <td style="border:1px solid #ccc;padding:8px;">Date of Birth</td>
                        <td style="border:1px solid #ccc;padding:8px;"></td>
                    </tr>
                    <tr>
                        <td style="border:1px solid #ccc;padding:8px;">8</td>
                        <td style="border:1px solid #ccc;padding:8px;">Income Tax PAN</td>
                        <td style="border:1px solid #ccc;padding:8px;"></td>
                    </tr>
                    <tr>
                        <td style="border:1px solid #ccc;padding:8px;">9</td>
                        <td style="border:1px solid #ccc;padding:8px;">Occupation</td>
                        <td style="border:1px solid #ccc;padding:8px;"></td>
                    </tr>
                    <tr>
                        <td style="border:1px solid #ccc;padding:8px;">10</td>
                        <td style="border:1px solid #ccc;padding:8px;">Nationality</td>
                        <td style="border:1px solid #ccc;padding:8px;"></td>
                    </tr>
                    <tr>
                        <td style="border:1px solid #ccc;padding:8px;">11</td>
                        <td style="border:1px solid #ccc;padding:8px;">Number of companies in which I am a Managing Director, CEO, Whole Time Director, Secretary, CFO, or Manager</td>
                        <td style="border:1px solid #ccc;padding:8px;"></td>
                    </tr>
                    <tr>
                        <td style="border:1px solid #ccc;padding:8px;">12</td>
                        <td style="border:1px solid #ccc;padding:8px;">Membership No. and Certificate of Practice No. (if member of any professional institute). State NIL if none.</td>
                        <td style="border:1px solid #ccc;padding:8px;"></td>
                    </tr>
                </tbody>
            </table>

            <p class="format-text">
                I hereby declare that I satisfy all conditions and requirements for being eligible to act as a designated partner and that I have not been disqualified from acting as a designated partner under the Limited Liability Partnership Act, 2008.
            </p>

            <p class="format-text">
                <strong>Date:</strong> __________________________
            </p>

            <p class="format-text">
                <strong>Place:</strong> __________________________
            </p>

            <p class="format-text">
                <strong>Signature:</strong> __________________________
            </p>

            <p class="format-text">
                (Name of Designated Partner)
            </p>
        </div>

        <!-- FAQ -->
        <div class="faq-section">
            <h3 class="faq-title">Frequently Asked Questions</h3>

            <div class="faq-item">
                <h4 class="faq-question">
                    1. How to prepare Form-9 (Consent to Act as Designated Partner)?
                </h4>
                <p class="faq-answer">
                    To prepare Form-9, the following details are required: DPIN (Designated Partner
                    Identification Number), full name as per PAN, father's/husband's name, complete
                    residential address, email address, mobile number, date of birth, income tax PAN,
                    occupation, nationality, number of directorships/key managerial positions held in
                    other companies, and professional membership details if applicable. The form must
                    be signed by the proposed designated partner.
                </p>
            </div>

            <div class="faq-item">
                <h4 class="faq-question">
                    2. Does the format for Form-9 (Consent to Act as Designated Partner) need to be certified by a professional?
                </h4>
                <p class="faq-answer">
                    There is no statutory requirement for Form-9 to be certified by an external
                    professional. The form is a self-declaration by the proposed designated partner
                    and must be signed by the individual giving consent. However, during LLP
                    incorporation, a practising professional (CA, CS, or Cost Accountant) may be
                    required to certify the incorporation documents as a whole.
                </p>
            </div>

            <div class="faq-item">
                <h4 class="faq-question">
                    3. Is the signature of all designated partners mandatory on Form-9 (Consent to Act as Designated Partner)?
                </h4>
                <p class="faq-answer">
                    No, Form-9 is an individual consent document. Each proposed designated partner
                    must submit their own separate Form-9 signed only by themselves. During LLP
                    Registration, separate Form-9 must be obtained from each person who is to be
                    appointed as a designated partner. The forms are then attached collectively with
                    the incorporation documents.
                </p>
            </div>

            <div class="faq-item">
                <h4 class="faq-question">
                    4. Is the Form-9 (Consent to Act as Designated Partner) to be on company letterhead?
                </h4>
                <p class="faq-answer">
                    No, Form-9 is not required to be on company letterhead. Since the LLP may be under
                    incorporation at the time of submission, letterhead may not exist. The form is a
                    personal consent document from the proposed designated partner and should be
                    submitted on plain paper in the prescribed format. It serves as an individual
                    declaration of consent and eligibility.
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

    const form = document.getElementById('form9ConsentForm');
    const downloadPdfBtn = document.getElementById('downloadPdfBtn');
    const alertContainer = document.getElementById('alertContainer');

    // Set default date
    const today = new Date().toISOString().split('T')[0];
    const consentDateInput = form.querySelector('[name="consent_date"]');
    if (consentDateInput) {
        consentDateInput.value = today;
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
        const llpName = form.querySelector('[name="llp_name"]').value || '________________';
        const fullName = form.querySelector('[name="full_name"]').value || '________________';
        const relationType = form.querySelector('[name="relation_type"]').value || 'Son/Daughter/Wife of';
        const relationName = form.querySelector('[name="relation_name"]').value || '________________';
        const dpin = form.querySelector('[name="dpin"]').value || '________________';
        const pan = form.querySelector('[name="pan"]').value || '________________';
        const email = form.querySelector('[name="email"]').value || '________________';
        const mobile = form.querySelector('[name="mobile"]').value || '________________';
        const place = form.querySelector('[name="place"]').value || '________________';
        const consentDate = form.querySelector('[name="consent_date"]').value;

        // Update preview text
        const elLLPName = document.getElementById('prevLLPName');
        const elFullName = document.getElementById('prevFullName');
        const elRelationType = document.getElementById('prevRelationType');
        const elRelationName = document.getElementById('prevRelationName');
        const elDPIN = document.getElementById('prevDPIN');
        const elPAN = document.getElementById('prevPAN');
        const elEmail = document.getElementById('prevEmail');
        const elMobile = document.getElementById('prevMobile');
        const elFooterName = document.getElementById('footerName');
        const elFooterPlace = document.getElementById('footerPlace');
        const elFooterDate = document.getElementById('footerDate');

        if (elLLPName) elLLPName.textContent = llpName;
        if (elFullName) elFullName.textContent = fullName;
        if (elRelationType) elRelationType.textContent = relationType;
        if (elRelationName) elRelationName.textContent = relationName;
        if (elDPIN) elDPIN.textContent = dpin;
        if (elPAN) elPAN.textContent = pan;
        if (elEmail) elEmail.textContent = email;
        if (elMobile) elMobile.textContent = mobile;
        if (elFooterName) elFooterName.textContent = fullName;
        if (elFooterPlace) elFooterPlace.textContent = place;

        if (consentDate && elFooterDate) {
            const formattedDate = new Date(consentDate).toLocaleDateString('en-IN', {
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
