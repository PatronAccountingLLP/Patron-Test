@extends('tools.tool-master')
@section('title')
{{_(' Indemnity Bond for Closure of LLP')}}
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
            <h1 class="hero-title">  <span> Indemnity Bond for Closure of LLP</span></h1>
            <p class="hero-subtitle">
                Generate a certified  Indemnity Bond for Closure of LLP in under 60 seconds.
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
                Fill in the details below to generate Indemnity Bond for Closure of LLP.
            </p>
        </div>

        <form id="llpClosureIndemnityForm" method="POST" action="{{route('indemnity.llp.closure') }}">
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

                <!-- LLP Details Section -->
                <div class="form-group full-width">
                    <label class="form-label" style="font-weight:600;color:#333;border-bottom:1px solid #eee;padding-bottom:8px;margin-bottom:12px;">LLP Details</label>
                </div>

                <div class="form-group full-width">
                    <label class="form-label">LLP Name <span class="required">*</span></label>
                    <input type="text" name="llp_name" class="form-control" placeholder="Enter LLP name" required>
                </div>

                <div class="form-row">
                    <div class="form-group">
                        <label class="form-label">LLPIN <span class="required">*</span></label>
                        <input type="text" name="llpin" class="form-control" placeholder="Enter LLPIN" required>
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

                <div class="form-row">
                    <div class="form-group">
                        <label class="form-label">Affidavit Date <span class="required">*</span></label>
                        <input type="date" name="affidavit_date" class="form-control" required>
                    </div>

                    <div class="form-group">
                        <label class="form-label">Inoperative Since Date <span class="required">*</span></label>
                        <input type="date" name="inoperative_date" class="form-control" required>
                    </div>
                </div>

                <!-- Designated Partner 1 Details -->
                <div class="form-group full-width">
                    <label class="form-label" style="font-weight:600;color:#333;border-bottom:1px solid #eee;padding-bottom:8px;margin-bottom:12px;">Designated Partner 1 Details</label>
                </div>

                <div class="form-row">
                    <div class="form-group">
                        <label class="form-label">Full Name <span class="required">*</span></label>
                        <input type="text" name="dp1_name" class="form-control" placeholder="Enter full name" required>
                    </div>

                    <div class="form-group">
                        <label class="form-label">Relation Type <span class="required">*</span></label>
                        <div class="select-wrapper">
                            <select name="dp1_relation_type" class="form-control form-select" required>
                                <option value="">Select relation</option>
                                <option value="Son of">Son of</option>
                                <option value="Daughter of">Daughter of</option>
                                <option value="Wife of">Wife of</option>
                            </select>
                        </div>
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-group">
                        <label class="form-label">Father's/Husband's Name <span class="required">*</span></label>
                        <input type="text" name="dp1_relation_name" class="form-control" placeholder="Enter father's/husband's name" required>
                    </div>

                    <div class="form-group">
                        <label class="form-label">DPIN <span class="required">*</span></label>
                        <input type="text" name="dp1_dpin" class="form-control" placeholder="Enter DPIN" required>
                    </div>
                </div>

                <div class="form-group full-width">
                    <label class="form-label">Address <span class="required">*</span></label>
                    <textarea name="dp1_address" class="form-control" placeholder="Enter complete address" required></textarea>
                </div>

                <!-- Designated Partner 2 Details -->
                <div class="form-group full-width">
                    <label class="form-label" style="font-weight:600;color:#333;border-bottom:1px solid #eee;padding-bottom:8px;margin-bottom:12px;">Designated Partner 2 Details</label>
                </div>

                <div class="form-row">
                    <div class="form-group">
                        <label class="form-label">Full Name <span class="required">*</span></label>
                        <input type="text" name="dp2_name" class="form-control" placeholder="Enter full name" required>
                    </div>

                    <div class="form-group">
                        <label class="form-label">Relation Type <span class="required">*</span></label>
                        <div class="select-wrapper">
                            <select name="dp2_relation_type" class="form-control form-select" required>
                                <option value="">Select relation</option>
                                <option value="Son of">Son of</option>
                                <option value="Daughter of">Daughter of</option>
                                <option value="Wife of">Wife of</option>
                            </select>
                        </div>
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-group">
                        <label class="form-label">Father's/Husband's Name <span class="required">*</span></label>
                        <input type="text" name="dp2_relation_name" class="form-control" placeholder="Enter father's/husband's name" required>
                    </div>

                    <div class="form-group">
                        <label class="form-label">DPIN <span class="required">*</span></label>
                        <input type="text" name="dp2_dpin" class="form-control" placeholder="Enter DPIN" required>
                    </div>
                </div>

                <div class="form-group full-width">
                    <label class="form-label">Address <span class="required">*</span></label>
                    <textarea name="dp2_address" class="form-control" placeholder="Enter complete address" required></textarea>
                </div>

                <!-- Witness 1 Details -->
                <div class="form-group full-width">
                    <label class="form-label" style="font-weight:600;color:#333;border-bottom:1px solid #eee;padding-bottom:8px;margin-bottom:12px;">Witness 1 Details</label>
                </div>

                <div class="form-row">
                    <div class="form-group">
                        <label class="form-label">Name <span class="required">*</span></label>
                        <input type="text" name="witness1_name" class="form-control" placeholder="Enter name" required>
                    </div>

                    <div class="form-group">
                        <label class="form-label">Father's Name <span class="required">*</span></label>
                        <input type="text" name="witness1_father" class="form-control" placeholder="Enter father's name" required>
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-group">
                        <label class="form-label">Address <span class="required">*</span></label>
                        <input type="text" name="witness1_address" class="form-control" placeholder="Enter address" required>
                    </div>

                    <div class="form-group">
                        <label class="form-label">Occupation <span class="required">*</span></label>
                        <input type="text" name="witness1_occupation" class="form-control" placeholder="Enter occupation" required>
                    </div>
                </div>

                <!-- Witness 2 Details -->
                <div class="form-group full-width">
                    <label class="form-label" style="font-weight:600;color:#333;border-bottom:1px solid #eee;padding-bottom:8px;margin-bottom:12px;">Witness 2 Details</label>
                </div>

                <div class="form-row">
                    <div class="form-group">
                        <label class="form-label">Name <span class="required">*</span></label>
                        <input type="text" name="witness2_name" class="form-control" placeholder="Enter name" required>
                    </div>

                    <div class="form-group">
                        <label class="form-label">Father's Name <span class="required">*</span></label>
                        <input type="text" name="witness2_father" class="form-control" placeholder="Enter father's name" required>
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-group">
                        <label class="form-label">Address <span class="required">*</span></label>
                        <input type="text" name="witness2_address" class="form-control" placeholder="Enter address" required>
                    </div>

                    <div class="form-group">
                        <label class="form-label">Occupation <span class="required">*</span></label>
                        <input type="text" name="witness2_occupation" class="form-control" placeholder="Enter occupation" required>
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-group">
                        <label class="form-label">Place <span class="required">*</span></label>
                        <input type="text" name="place" class="form-control" placeholder="City / Place" required>
                    </div>

                    <div class="form-group">
                        <label class="form-label">Date <span class="required">*</span></label>
                        <input type="date" name="bond_date" class="form-control" required>
                    </div>
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
                        <p class="preview-subtitle">Indemnity Bond for Closure of LLP</p>
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
                    <h2 class="certificate-doc-title">INDEMNITY BOND</h2>
                    <p class="certificate-doc-subtitle">
                        For Closure of Limited Liability Partnership
                    </p>
                </div>

                <div class="certificate-body">
                    <p class="certificate-paragraph">
                        To,<br>
                        The Registrar of Companies,<br>
                        <strong id="prevROC">________________</strong>
                    </p>

                    <p class="certificate-paragraph">
                        We, the Designated Partner(s) of:<br>
                        LLP Name: <strong id="prevLLPName">________________</strong><br>
                        LLPIN: <strong id="prevLLPIN">________________</strong>
                    </p>

                    <p class="certificate-paragraph">
                        <strong>Designated Partner 1:</strong> <span id="prevDP1Name">________________</span><br>
                        DPIN: <span id="prevDP1DPIN">________________</span>
                    </p>

                    <p class="certificate-paragraph">
                        <strong>Designated Partner 2:</strong> <span id="prevDP2Name">________________</span><br>
                        DPIN: <span id="prevDP2DPIN">________________</span>
                    </p>

                    <p class="certificate-paragraph">
                        We undertake to pay and settle all lawful claims arising after the striking off of the name of the LLP.
                    </p>

                    <div class="certificate-signature">
                        <p class="signature-label">Signatures</p>
                        <div class="signature-line"></div>
                    </div>
                </div>

                <div class="certificate-footer">
                    <div class="footer-item">
                        <span class="footer-item-label">LLP</span>
                        <span class="footer-item-value" id="footerLLPName">________________</span>
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
            <h2 class="info-title">Indemnity Bond for Closure of LLP</h2>
            <p class="info-subtitle">
                LLP Strike-Off Documentation for Indian Limited Liability Partnerships
            </p>
        </div>

        <!-- Introduction -->
        <div class="info-content">
            <h3 class="info-subheading">Introduction</h3>

            <p class="info-text">
                An Indemnity Bond for Closure of LLP is a statutory document executed by the
                designated partners when applying for voluntary strike-off of a Limited Liability
                Partnership from the Register of LLPs. Under the Limited Liability Partnership Act,
                2008 and the LLP Rules, when designated partners apply for removal of an LLP's name
                through Form 24 (Application for Striking Off), they must execute an indemnity bond
                undertaking personal responsibility for any claims or liabilities that may arise
                after the LLP's name has been struck off.
            </p>

            <p class="info-text">
                This bond serves as a legal guarantee wherein the designated partners acknowledge
                that the LLP has been inoperative, has no assets or liabilities, and is not
                intending to carry on any business or commercial activity. The indemnity bond
                protects creditors and any other persons who may have legitimate claims against the
                LLP. The document must be executed on appropriate stamp paper, sworn before a
                Notary Public, and witnessed by two independent persons. This indemnity bond is
                submitted along with Form 24 and other requisite documents to the Registrar of
                Companies.
            </p>

            <!-- Benefits -->
            <h3 class="info-subheading">Benefits of Using a Standard Format</h3>

            <p class="info-text">
                Utilising a professionally drafted indemnity bond format ensures that all statutory
                requirements under the Limited Liability Partnership Act, 2008 and the LLP Rules
                are properly addressed. A ready-to-use template saves valuable time during the LLP
                closure process, reduces the risk of procedural errors, and provides a consistent
                framework for documenting the designated partners' indemnification undertaking.
            </p>

            <p class="info-text">
                Standardised formats facilitate smoother ROC filings and help avoid rejection due
                to incomplete documentation.
            </p>

            <!-- Relevance -->
            <h3 class="info-subheading">Relevance to LLP Closure</h3>

            <p class="info-text">
                The indemnity bond is an essential component of the LLP strike-off procedure. After
                LLP Registration, if an LLP becomes defunct or has remained inoperative since
                incorporation, the designated partners may apply for voluntary removal of the LLP's
                name from the register.
            </p>

            <p class="info-text">
                Prior to filing, LLPs must ensure that all statutory obligations including GST
                Registration cancellation (if registered), income tax filings, and closure of bank
                accounts have been completed. The indemnity bond ensures that designated partners
                remain accountable for any undisclosed liabilities even after the LLP ceases to
                exist.
            </p>
        </div>

        <!-- Sample Format -->
        <div class="format-section">
            <h3 class="format-title">
                Indemnity Bond for Closure of LLP – Sample Format
            </h3>

            <p class="format-text" style="text-align:center;">
                <strong>INDEMNITY BOND</strong>
            </p>

            <p class="format-text">
                <strong>To,</strong>
            </p>

            <p class="format-text">
                The Registrar of Companies,<br>
                __________________________________________ (Name of ROC Office)
            </p>

            <p class="format-text">
                <strong>We, the Designated Partner(s) of:</strong>
            </p>

            <p class="format-text">
                <strong>LLP Name:</strong> __________________________________________
            </p>

            <p class="format-text">
                <strong>LLPIN:</strong> __________________________________________
            </p>

            <p class="format-text">
                <strong>Date of Incorporation:</strong> __________________________________________
            </p>

            <p class="format-text">
                <strong>Registered Office Address:</strong> __________________________________________
            </p>

            <p class="format-text">
                incorporated under the Limited Liability Partnership Act, 2008, do hereby solemnly declare that:
            </p>

            <p class="format-text">
                <strong>1.</strong> We, the undersigned, are Designated Partners of the above-named LLP:
            </p>

            <p class="format-text" style="margin-left:20px;">
                (a) Name: __________________________ Son/Daughter of __________________________<br>
                &nbsp;&nbsp;&nbsp;&nbsp;DPIN: __________________________
            </p>

            <p class="format-text" style="margin-left:20px;">
                (b) Name: __________________________ Son/Daughter of __________________________<br>
                &nbsp;&nbsp;&nbsp;&nbsp;DPIN: __________________________
            </p>

            <p class="format-text">
                <strong>2.</strong> We have made affidavits dated __________________________, duly sworn before a Notary Public, affirming that the LLP has no assets and no liabilities as on the date of this application.
            </p>

            <p class="format-text">
                <strong>3.</strong> The LLP has been inoperative since __________________________ / has not carried on business since its incorporation, and the LLP does not intend to carry on any business or commercial activity. Accordingly, the LLP is defunct, and we request the Registrar of Companies to strike off the name of the LLP from the Register of LLPs in terms of the Limited Liability Partnership Act, 2008 and the rules made thereunder.
            </p>

            <p class="format-text">
                <strong>4.</strong> In view of the above, we do hereby undertake and indemnify in writing:
            </p>

            <p class="format-text" style="margin-left:20px;">
                (a) To pay and settle all lawful claims arising in future after the striking off of the name of the LLP from the Register of LLPs;
            </p>

            <p class="format-text" style="margin-left:20px;">
                (b) To indemnify any person for any losses that may arise pursuant to the striking off of the name of the LLP;
            </p>

            <p class="format-text" style="margin-left:20px;">
                (c) To settle all lawful claims and liabilities which have not come to our notice up to this stage, and if any such claim arises or is observed even after the name of the LLP has been struck off.
            </p>

            <p class="format-text">
                <strong>Designated Partner 1:</strong><br>
                Signature: __________________________<br>
                Name: __________________________<br>
                DPIN: __________________________<br>
                Designation: Designated Partner<br>
                Address: __________________________
            </p>

            <p class="format-text">
                <strong>Designated Partner 2:</strong><br>
                Signature: __________________________<br>
                Name: __________________________<br>
                DPIN: __________________________<br>
                Designation: Designated Partner<br>
                Address: __________________________
            </p>

            <p class="format-text">
                <strong>Date:</strong> __________________________
            </p>

            <p class="format-text">
                <strong>Place:</strong> __________________________
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
                Occupation: __________________________
            </p>

            <p class="format-text">
                <strong>Witness 2:</strong><br>
                Signature: __________________________<br>
                Name: __________________________<br>
                Father's Name: __________________________<br>
                Address: __________________________<br>
                Occupation: __________________________
            </p>
        </div>

        <!-- FAQ -->
        <div class="faq-section">
            <h3 class="faq-title">Frequently Asked Questions</h3>

            <div class="faq-item">
                <h4 class="faq-question">
                    1. Why is the indemnity bond for closure of LLP prepared?
                </h4>
                <p class="faq-answer">
                    The indemnity bond for closure of LLP is prepared to provide legal and financial
                    protection to creditors and any persons who may have legitimate claims against
                    the LLP. By executing this bond, designated partners undertake personal
                    responsibility to pay and settle all lawful claims that may arise after the
                    LLP's name has been struck off from the register. It serves as a safeguard
                    ensuring accountability for undisclosed liabilities.
                </p>
            </div>

            <div class="faq-item">
                <h4 class="faq-question">
                    2. What is the format for the preparation of an indemnity bond for the closure of LLP?
                </h4>
                <p class="faq-answer">
                    The indemnity bond format should include: name and address of the Registrar of
                    Companies, LLP name and LLPIN, date of incorporation, registered office address,
                    names and DPINs of all designated partners, declaration confirming nil assets
                    and liabilities, confirmation of inoperative status, date from which the LLP has
                    been inactive, indemnity undertaking clauses, signatures of all designated
                    partners with their addresses, date and place of execution, and signatures of
                    two witnesses with their complete particulars.
                </p>
            </div>

            <div class="faq-item">
                <h4 class="faq-question">
                    3. What are the documents required to attach with LLP Form 24 (application for LLP strike off) for closure of LLP?
                </h4>
                <p class="faq-answer">
                    The following documents are typically required to be attached with LLP Form 24
                    for strike-off: Indemnity Bond executed by all designated partners on appropriate
                    stamp paper, Affidavit confirming nil assets and liabilities sworn before a
                    Notary Public, Statement of Account (not older than thirty days), ITR
                    Acknowledgement of the LLP (if filed), Statement of Assets and Liabilities, and
                    Authority Letter for filing the strike-off application. Additional documents may
                    be required based on ROC requirements.
                </p>
            </div>

            <div class="faq-item">
                <h4 class="faq-question">
                    4. Where can I download the ROC board resolution formats?
                </h4>
                <p class="faq-answer">
                    ROC board resolution formats and other statutory document templates can be
                    downloaded from professional service provider websites that offer ready-to-use
                    legal and compliance formats. These templates are designed to meet the
                    requirements of the Companies Act, 2013, the Limited Liability Partnership Act,
                    2008, and the rules made thereunder. Ensure that the formats are updated and
                    compliant with the latest statutory requirements before use.
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

    const form = document.getElementById('llpClosureIndemnityForm');
    const downloadPdfBtn = document.getElementById('downloadPdfBtn');
    const alertContainer = document.getElementById('alertContainer');

    // Set default date
    const today = new Date().toISOString().split('T')[0];
    const dateInputs = ['bond_date', 'affidavit_date'];
    dateInputs.forEach(name => {
        const input = form.querySelector(`[name="${name}"]`);
        if (input) {
            input.value = today;
        }
    });

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
        const llpName = form.querySelector('[name="llp_name"]').value || '________________';
        const llpin = form.querySelector('[name="llpin"]').value || '________________';
        const dp1Name = form.querySelector('[name="dp1_name"]').value || '________________';
        const dp1Dpin = form.querySelector('[name="dp1_dpin"]').value || '________________';
        const dp2Name = form.querySelector('[name="dp2_name"]').value || '________________';
        const dp2Dpin = form.querySelector('[name="dp2_dpin"]').value || '________________';
        const place = form.querySelector('[name="place"]').value || '________________';
        const bondDate = form.querySelector('[name="bond_date"]').value;

        // Update preview text
        const elROC = document.getElementById('prevROC');
        const elLLPName = document.getElementById('prevLLPName');
        const elLLPIN = document.getElementById('prevLLPIN');
        const elDP1Name = document.getElementById('prevDP1Name');
        const elDP1DPIN = document.getElementById('prevDP1DPIN');
        const elDP2Name = document.getElementById('prevDP2Name');
        const elDP2DPIN = document.getElementById('prevDP2DPIN');
        const elFooterLLPName = document.getElementById('footerLLPName');
        const elFooterPlace = document.getElementById('footerPlace');
        const elFooterDate = document.getElementById('footerDate');

        if (elROC) elROC.textContent = rocOffice;
        if (elLLPName) elLLPName.textContent = llpName;
        if (elLLPIN) elLLPIN.textContent = llpin;
        if (elDP1Name) elDP1Name.textContent = dp1Name;
        if (elDP1DPIN) elDP1DPIN.textContent = dp1Dpin;
        if (elDP2Name) elDP2Name.textContent = dp2Name;
        if (elDP2DPIN) elDP2DPIN.textContent = dp2Dpin;
        if (elFooterLLPName) elFooterLLPName.textContent = llpName;
        if (elFooterPlace) elFooterPlace.textContent = place;

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
