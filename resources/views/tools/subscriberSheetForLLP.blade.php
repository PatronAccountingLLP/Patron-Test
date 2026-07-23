@extends('tools.tool-master')
@section('title')
{{_('Board Resolution of Designated Partner in LLP')}}
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
            <h1 class="hero-title">  <span> Subscriber Sheet for LLP Registration</span></h1>
            <p class="hero-subtitle">
                Generate a certified Subscriber Sheet for LLP Registration in under 60 seconds.
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
            <h2 class="form-title">Enter LLP &amp; Partner Details</h2>
            <p class="form-description">
                Fill in the details below to generate a Subscriber Sheet for LLP Registration.
            </p>
        </div>

        <form id="subscriberSheetForm" method="POST" action="{{route('llp.subscriber.sheet') }}">
            @csrf

            <div class="form-grid">
                <div class="form-group full-width">
                    <label class="form-label">Proposed LLP Name <span class="required">*</span></label>
                    <input type="text" name="llp_name" class="form-control" placeholder="Enter proposed LLP name" required>
                </div>

                <!-- Partner 1 Details -->
                <div class="form-group full-width">
                    <h4 style="margin-bottom: 10px; color: #333; border-bottom: 1px solid #eee; padding-bottom: 8px;">Partner 1 Details (Designated Partner)</h4>
                </div>

                <div class="form-row">
                    <div class="form-group">
                        <label class="form-label">Partner 1 Name <span class="required">*</span></label>
                        <input type="text" name="partner1_name" class="form-control" placeholder="Enter partner name" required>
                    </div>

                    <div class="form-group">
                        <label class="form-label">Father's Name <span class="required">*</span></label>
                        <input type="text" name="partner1_father_name" class="form-control" placeholder="Enter father's name" required>
                    </div>
                </div>

                <div class="form-group full-width">
                    <label class="form-label">Partner 1 Address <span class="required">*</span></label>
                    <textarea name="partner1_address" class="form-control" placeholder="Enter complete address" rows="2" required></textarea>
                </div>

                <div class="form-group full-width">
                    <label class="form-label">Designation <span class="required">*</span></label>
                    <div class="select-wrapper">
                        <select name="partner1_designation" class="form-control form-select" required>
                            <option value="Designated Partner" selected>Designated Partner</option>
                            <option value="Partner">Partner</option>
                        </select>
                    </div>
                </div>

                <!-- Partner 2 Details -->
                <div class="form-group full-width">
                    <h4 style="margin-bottom: 10px; color: #333; border-bottom: 1px solid #eee; padding-bottom: 8px;">Partner 2 Details (Designated Partner)</h4>
                </div>

                <div class="form-row">
                    <div class="form-group">
                        <label class="form-label">Partner 2 Name <span class="required">*</span></label>
                        <input type="text" name="partner2_name" class="form-control" placeholder="Enter partner name" required>
                    </div>

                    <div class="form-group">
                        <label class="form-label">Father's Name <span class="required">*</span></label>
                        <input type="text" name="partner2_father_name" class="form-control" placeholder="Enter father's name" required>
                    </div>
                </div>

                <div class="form-group full-width">
                    <label class="form-label">Partner 2 Address <span class="required">*</span></label>
                    <textarea name="partner2_address" class="form-control" placeholder="Enter complete address" rows="2" required></textarea>
                </div>

                <div class="form-group full-width">
                    <label class="form-label">Designation <span class="required">*</span></label>
                    <div class="select-wrapper">
                        <select name="partner2_designation" class="form-control form-select" required>
                            <option value="Designated Partner" selected>Designated Partner</option>
                            <option value="Partner">Partner</option>
                        </select>
                    </div>
                </div>

                <!-- Witness Details -->
                <div class="form-group full-width">
                    <h4 style="margin-bottom: 10px; color: #333; border-bottom: 1px solid #eee; padding-bottom: 8px;">Witness Details (Practising Professional)</h4>
                </div>

                <div class="form-row">
                    <div class="form-group">
                        <label class="form-label">Witness Name <span class="required">*</span></label>
                        <input type="text" name="witness_name" class="form-control" placeholder="Enter witness name" required>
                    </div>

                    <div class="form-group">
                        <label class="form-label">Profession <span class="required">*</span></label>
                        <div class="select-wrapper">
                            <select name="witness_profession" class="form-control form-select" required>
                                <option value="">Select profession</option>
                                <option value="Chartered Accountant">Chartered Accountant</option>
                                <option value="Company Secretary">Company Secretary</option>
                                <option value="Advocate">Advocate</option>
                            </select>
                        </div>
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-group">
                        <label class="form-label">Membership Number <span class="required">*</span></label>
                        <input type="text" name="witness_membership_no" class="form-control" placeholder="Enter membership/enrolment number" required>
                    </div>

                    <div class="form-group">
                        <label class="form-label">Place <span class="required">*</span></label>
                        <input type="text" name="place" class="form-control" placeholder="City / Place" required>
                    </div>
                </div>

                <div class="form-group full-width">
                    <label class="form-label">Witness Address <span class="required">*</span></label>
                    <textarea name="witness_address" class="form-control" placeholder="Enter witness complete address" rows="2" required></textarea>
                </div>
                
                <div class="form-group full-width">
                    <label class="form-label">Date <span class="required">*</span></label>
                    <input type="date" name="document_date" class="form-control" required>
                </div>
            </div>

            <button type="submit" class="btn-submit" id="downloadPdfBtn">
                <span class="btn-text">Generate &amp; Download Subscriber Sheet</span>
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
                        <p class="preview-subtitle">Subscriber Sheet for LLP Registration</p>
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
                    <h2 class="certificate-doc-title">SUBSCRIBER SHEET</h2>
                    <p class="certificate-doc-subtitle">
                        For LLP Registration
                    </p>
                </div>

                <div class="certificate-body">
                    <p class="certificate-paragraph">
                        <strong>Proposed LLP Name:</strong> <span id="prevLLPName">________________</span>
                    </p>

                    <p class="certificate-paragraph" style="font-size: 12px;">
                        We, the several partners whose names are subscribed below, are desirous of 
                        being formed into a Limited Liability Partnership for carrying on a lawful 
                        business with a view to earn profit...
                    </p>

                    <p class="certificate-paragraph">
                        <strong>Partner 1:</strong><br>
                        Name: <span id="prevPartner1Name">________________</span><br>
                        Father's Name: <span id="prevPartner1Father">________________</span><br>
                        Designation: <span id="prevPartner1Designation">Designated Partner</span>
                    </p>

                    <p class="certificate-paragraph">
                        <strong>Partner 2:</strong><br>
                        Name: <span id="prevPartner2Name">________________</span><br>
                        Father's Name: <span id="prevPartner2Father">________________</span><br>
                        Designation: <span id="prevPartner2Designation">Designated Partner</span>
                    </p>

                    <p class="certificate-paragraph">
                        <strong>Witness:</strong><br>
                        Name: <span id="prevWitnessName">________________</span><br>
                        Profession: <span id="prevWitnessProfession">________________</span><br>
                        M. No.: <span id="prevWitnessMNo">________________</span>
                    </p>

                    <div class="certificate-signature">
                        <p class="signature-label">Signature of Witness</p>
                        <div class="signature-line"></div>
                    </div>
                </div>

                <div class="certificate-footer">
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
            <h2 class="info-title">Subscriber Sheet for LLP Registration</h2>
            <p class="info-subtitle">
                Professional Format Guide for LLP Incorporation in India
            </p>
        </div>

        <!-- Introduction -->
        <div class="info-content">
            <h3 class="info-subheading">Introduction</h3>

            <p class="info-text">
                A Subscriber Sheet is a mandatory document required for the incorporation of a 
                Limited Liability Partnership (LLP) in India. Under the Limited Liability Partnership 
                Act, 2008, the proposed partners must sign the subscriber sheet to indicate their 
                consent to become partners of the LLP and to confirm their capital contribution 
                commitments. This document serves as evidence of ownership and records the initial 
                capital structure of the LLP.
            </p>

            <p class="info-text">
                The subscriber sheet must be witnessed by a practising professional such as a 
                Chartered Accountant, Company Secretary, or Advocate, who attests the signatures 
                of the proposed partners. This document is filed with the Registrar of Companies 
                as part of the LLP incorporation application (Form FiLLiP) and establishes the 
                founding partners' commitment to the partnership. It is an essential component of 
                the LLP registration process.
            </p>

            <!-- Benefits -->
            <h3 class="info-subheading">Benefits of Using a Standard Format</h3>

            <p class="info-text">
                Utilising a professionally drafted subscriber sheet format ensures that all statutory 
                requirements under the LLP Act, 2008 are properly addressed. A ready-to-use template 
                saves valuable time during the incorporation process, reduces the risk of errors 
                that could delay registration, and provides a consistent framework that captures 
                all essential partner and witness details required by the Registrar of Companies.
            </p>

            <!-- Relevance -->
            <h3 class="info-subheading">Relevance to LLP Registration</h3>

            <p class="info-text">
                The subscriber sheet is a critical document in the LLP registration process. It 
                must be prepared carefully and signed by all proposed partners before filing the 
                incorporation application. Along with the LLP Agreement, this document forms the 
                foundation of the partnership structure. Once the LLP is registered, partners may 
                also need to obtain GST Registration if the LLP's turnover exceeds the prescribed 
                threshold or if it engages in inter-state supplies of goods or services.
            </p>
        </div>

        <!-- Sample Format -->
        <div class="format-section">
            <h3 class="format-title">
                Subscriber Sheet for LLP Registration – Sample Format
            </h3>

            <p class="format-text">
                We, the several partners whose names are subscribed below, are desirous of being 
                formed into a Limited Liability Partnership for carrying on a lawful business with 
                a view to earn profit and have entered or agreed to enter into a LLP Agreement in writing.
            </p>

            <p class="format-text">
                We respectively agree to contribute money or other property or other benefit or to 
                perform services for the LLP in accordance with the LLP Agreement, the particulars 
                of which are stated against our respective names.
            </p>

            <p class="format-text">
                We hereby give our consent to become a Partner / Designated Partner of the LLP 
                pursuant to Section 7(4) / Section 25(3)(c) of the Limited Liability Partnership Act, 2008.
            </p>

            <table style="width:100%;border-collapse:collapse;margin:20px 0;font-size:14px;">
                <tr style="background-color:#f5f5f5;">
                    <th style="border:1px solid #ddd;padding:8px;">Name of Partner / Designated Partner</th>
                    <th style="border:1px solid #ddd;padding:8px;">Designation</th>
                    <th style="border:1px solid #ddd;padding:8px;">Signature</th>
                    <th style="border:1px solid #ddd;padding:8px;">Witness Details</th>
                    <th style="border:1px solid #ddd;padding:8px;">Witness Signature</th>
                </tr>
                <tr>
                    <td style="border:1px solid #ddd;padding:8px;">
                        Name: ________________<br>
                        Father's Name: ________________<br>
                        Address: ________________
                    </td>
                    <td style="border:1px solid #ddd;padding:8px;text-align:center;">Designated Partner</td>
                    <td style="border:1px solid #ddd;padding:8px;text-align:center;">_________</td>
                    <td style="border:1px solid #ddd;padding:8px;" rowspan="2">
                        Name: ________________<br>
                        Profession: ________________<br>
                        M. No.: ________________<br>
                        Address: ________________
                    </td>
                    <td style="border:1px solid #ddd;padding:8px;text-align:center;" rowspan="2">_________</td>
                </tr>
                <tr>
                    <td style="border:1px solid #ddd;padding:8px;">
                        Name: ________________<br>
                        Father's Name: ________________<br>
                        Address: ________________
                    </td>
                    <td style="border:1px solid #ddd;padding:8px;text-align:center;">Designated Partner</td>
                    <td style="border:1px solid #ddd;padding:8px;text-align:center;">_________</td>
                </tr>
            </table>

            <p class="format-text">
                <strong>Date:</strong> __.__.______
            </p>

            <p class="format-text">
                <strong>Place:</strong> __________________________
            </p>
        </div>

        <!-- FAQ -->
        <div class="faq-section">
            <h3 class="faq-title">Frequently Asked Questions</h3>

            <div class="faq-item">
                <h4 class="faq-question">
                    1. How to write a Subscriber Sheet for LLP format?
                </h4>
                <p class="faq-answer">
                    The subscriber sheet should begin with the standard declaration stating the 
                    partners' desire to form an LLP for lawful business purposes. It must include 
                    a table with columns for partner names and addresses, designation (Partner or 
                    Designated Partner), partner signatures, witness details with professional 
                    membership number, and witness signature. The document should be dated and 
                    signed by all proposed partners in the presence of a qualified witness.
                </p>
            </div>

            <div class="faq-item">
                <h4 class="faq-question">
                    2. When is Subscriber Sheet for LLP format required?
                </h4>
                <p class="faq-answer">
                    The subscriber sheet is required at the time of LLP incorporation and must be 
                    filed with the Registrar of Companies along with Form FiLLiP (Form for 
                    incorporation of Limited Liability Partnership). It is a mandatory document 
                    that establishes the initial partnership structure and capital contribution 
                    commitments. Without a properly executed subscriber sheet, the LLP incorporation 
                    application cannot be processed.
                </p>
            </div>

            <div class="faq-item">
                <h4 class="faq-question">
                    3. What are the details required in Subscriber Sheet for LLP format?
                </h4>
                <p class="faq-answer">
                    The subscriber sheet must include: names and addresses of all proposed partners, 
                    their designation (Partner or Designated Partner), signatures of each partner, 
                    name and address of the witness (who must be a practising CA, CS, or Advocate), 
                    profession and membership number of the witness, signature of the witness, and 
                    the date and place of execution. The declaration referencing the LLP Act, 2008 
                    must also be included.
                </p>
            </div>

            <div class="faq-item">
                <h4 class="faq-question">
                    4. Who signs the Subscriber Sheet for LLP?
                </h4>
                <p class="faq-answer">
                    All proposed partners of the LLP must sign the subscriber sheet. Each partner's 
                    signature must be witnessed by a practising professional who is either a 
                    Chartered Accountant, Company Secretary, or Advocate holding a valid membership 
                    or enrolment number. The witness attests that the partners have signed the 
                    document in their presence and confirms the authenticity of the signatures for 
                    incorporation purposes.
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

    const form = document.getElementById('subscriberSheetForm');
    const downloadPdfBtn = document.getElementById('downloadPdfBtn');
    const alertContainer = document.getElementById('alertContainer');

    // Set default date
    const today = new Date().toISOString().split('T')[0];
    const dateInput = form.querySelector('[name="document_date"]');
    if (dateInput && !dateInput.value) {
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
        const llpName = form.querySelector('[name="llp_name"]').value || '________________';
        const partner1Name = form.querySelector('[name="partner1_name"]').value || '________________';
        const partner1Father = form.querySelector('[name="partner1_father_name"]').value || '________________';
        const partner1Designation = form.querySelector('[name="partner1_designation"]').value || 'Designated Partner';
        const partner2Name = form.querySelector('[name="partner2_name"]').value || '________________';
        const partner2Father = form.querySelector('[name="partner2_father_name"]').value || '________________';
        const partner2Designation = form.querySelector('[name="partner2_designation"]').value || 'Designated Partner';
        const witnessName = form.querySelector('[name="witness_name"]').value || '________________';
        const witnessProfession = form.querySelector('[name="witness_profession"]').value || '________________';
        const witnessMNo = form.querySelector('[name="witness_membership_no"]').value || '________________';
        const place = form.querySelector('[name="place"]').value || '________________';
        const documentDate = form.querySelector('[name="document_date"]').value;

        // Update preview text
        const elLLPName = document.getElementById('prevLLPName');
        const elPartner1Name = document.getElementById('prevPartner1Name');
        const elPartner1Father = document.getElementById('prevPartner1Father');
        const elPartner1Designation = document.getElementById('prevPartner1Designation');
        const elPartner2Name = document.getElementById('prevPartner2Name');
        const elPartner2Father = document.getElementById('prevPartner2Father');
        const elPartner2Designation = document.getElementById('prevPartner2Designation');
        const elWitnessName = document.getElementById('prevWitnessName');
        const elWitnessProfession = document.getElementById('prevWitnessProfession');
        const elWitnessMNo = document.getElementById('prevWitnessMNo');
        const elFooterPlace = document.getElementById('footerPlace');
        const elFooterDate = document.getElementById('footerDate');

        if (elLLPName) elLLPName.textContent = llpName;
        if (elPartner1Name) elPartner1Name.textContent = partner1Name;
        if (elPartner1Father) elPartner1Father.textContent = partner1Father;
        if (elPartner1Designation) elPartner1Designation.textContent = partner1Designation;
        if (elPartner2Name) elPartner2Name.textContent = partner2Name;
        if (elPartner2Father) elPartner2Father.textContent = partner2Father;
        if (elPartner2Designation) elPartner2Designation.textContent = partner2Designation;
        if (elWitnessName) elWitnessName.textContent = witnessName;
        if (elWitnessProfession) elWitnessProfession.textContent = witnessProfession;
        if (elWitnessMNo) elWitnessMNo.textContent = witnessMNo;
        if (elFooterPlace) elFooterPlace.textContent = place;

        if (documentDate && elFooterDate) {
            const formattedDate = new Date(documentDate).toLocaleDateString('en-IN', {
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
