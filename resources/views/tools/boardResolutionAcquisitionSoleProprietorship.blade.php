@extends('tools.tool-master')
@section('title')
{{_('Board Resolution for Acquisition of Sole Proprietorship Business')}}
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
            <h1 class="hero-title">Board Resolution for  <span>Acquisition of Sole Proprietorship Business</span></h1>
            <p class="hero-subtitle">
                Generate a certified Board Resolution for  Acquisition of Sole Proprietorship Business in under 60 seconds.
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
            <h2 class="form-title">Enter Company & Acquisition Details</h2>
            <p class="form-description">
                Fill in the details below to generate a Board Resolution for Acquisition of Sole Proprietorship Business.
            </p>
        </div>

        <form id="acquisitionForm" method="POST" action="{{route('br.acquisition.sole.proprietorship') }}">
            @csrf

            <div class="form-grid">
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
                        <label class="form-label">Email ID <span class="required">*</span></label>
                        <input type="email" name="email" class="form-control" placeholder="Enter email" required>
                    </div>
                </div>

                <div class="form-group full-width">
                    <label class="form-label">Registered Office Address <span class="required">*</span></label>
                    <textarea name="registered_office" class="form-control" placeholder="Enter registered office address" required></textarea>
                </div>

                <div class="form-row">
                    <div class="form-group">
                        <label class="form-label">Date of Meeting <span class="required">*</span></label>
                        <input type="date" name="meeting_date" class="form-control" required>
                    </div>

                    <div class="form-group">
                        <label class="form-label">Time of Meeting <span class="required">*</span></label>
                        <input type="time" name="meeting_time" class="form-control" required>
                    </div>
                </div>

                <!-- Sole Proprietorship Details Section -->
                <div class="form-group full-width">
                    <label class="form-label" style="font-weight:600;color:#333;border-bottom:1px solid #eee;padding-bottom:8px;margin-bottom:12px;">Sole Proprietorship Details (To be Acquired)</label>
                </div>

                <div class="form-group full-width">
                    <label class="form-label">Name of Sole Proprietorship Firm <span class="required">*</span></label>
                    <input type="text" name="proprietorship_name" class="form-control" placeholder="Enter sole proprietorship firm name (e.g., M/s. ABC Enterprises)" required>
                </div>

                <div class="form-group full-width">
                    <label class="form-label">Office Address of Sole Proprietorship <span class="required">*</span></label>
                    <textarea name="proprietorship_address" class="form-control" placeholder="Enter complete office address of sole proprietorship firm" required></textarea>
                </div>

                <div class="form-row">
                    <div class="form-group">
                        <label class="form-label">Purchase Consideration (Rs.) <span class="required">*</span></label>
                        <input type="text" name="purchase_consideration" class="form-control" placeholder="Enter amount" required>
                    </div>

                    <div class="form-group">
                        <label class="form-label">Amount in Words <span class="required">*</span></label>
                        <input type="text" name="amount_in_words" class="form-control" placeholder="Enter amount in words" required>
                    </div>
                </div>

                <!-- Authorisation Details -->
                <div class="form-group full-width">
                    <label class="form-label" style="font-weight:600;color:#333;border-bottom:1px solid #eee;padding-bottom:8px;margin-bottom:12px;">Authorisation Details</label>
                </div>

                <div class="form-row">
                    <div class="form-group">
                        <label class="form-label">Authorised Director Name <span class="required">*</span></label>
                        <input type="text" name="director_name" class="form-control" placeholder="Director name" required>
                    </div>

                    <div class="form-group">
                        <label class="form-label">Designation <span class="required">*</span></label>
                        <div class="select-wrapper">
                            <select name="designation" class="form-control form-select" required>
                                <option value="">Select designation</option>
                                <option value="Director">Director</option>
                                <option value="Managing Director">Managing Director</option>
                                <option value="Whole-Time Director">Whole-Time Director</option>
                                <option value="Company Secretary">Company Secretary</option>
                            </select>
                        </div>
                    </div>
                </div>

                <div class="form-group full-width">
                    <label class="form-label">DIN <span class="required">*</span></label>
                    <input type="text" name="din" class="form-control" placeholder="Enter DIN Number" required>
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
                        <p class="preview-subtitle">Board Resolution for Acquisition of Sole Proprietorship</p>
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
                    <h2 class="certificate-doc-title">CERTIFIED TRUE COPY OF THE BOARD RESOLUTION</h2>
                    <p class="certificate-doc-subtitle">
                        Passed at the Meeting of the Board of Directors
                    </p>
                </div>

                <div class="certificate-body">
                    <p class="certificate-paragraph">
                        <strong id="prevCompanyName">________________</strong><br>
                        CIN: <strong id="prevCIN">________________</strong>
                    </p>

                    <p class="certificate-paragraph">
                        Date of Meeting: <strong id="prevMeetingDate">__________</strong> at
                        <strong id="prevMeetingTime">__________</strong> Hours at the Registered Office of the Company.
                    </p>

                    <p class="certificate-paragraph">
                        <strong>SUBJECT:</strong> Acquisition of Sole Proprietorship Business
                    </p>

                    <p class="certificate-paragraph">
                        <strong>RESOLVED THAT</strong> the consent of the Board be and is hereby accorded to acquire/purchase the business of:
                    </p>

                    <p class="certificate-paragraph">
                        <strong id="prevProprietorshipName">M/s. ________________</strong><br>
                        having its office at: <strong id="prevProprietorshipAddress">________________</strong>
                    </p>

                    <p class="certificate-paragraph">
                        on a going concern basis, together with all its assets, liabilities, and goodwill, at a purchase consideration of Rs. <strong id="prevPurchaseConsideration">____________</strong>/-
                    </p>

                    <div class="certificate-signature">
                        <p class="signature-label">Signature</p>
                        <div class="signature-line"></div>
                    </div>
                </div>

                <div class="certificate-footer">
                    <div class="footer-item">
                        <span class="footer-item-label">For Company</span>
                        <span class="footer-item-value" id="footerCompanyName">________________</span>
                    </div>
                    <div class="footer-item">
                        <span class="footer-item-label">Director</span>
                        <span class="footer-item-value" id="footerDirectorName">________________</span>
                    </div>
                    <div class="footer-item">
                        <span class="footer-item-label">DIN</span>
                        <span class="footer-item-value" id="footerDIN">________________</span>
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
            <h2 class="info-title">Board Resolution for Acquisition of Sole Proprietorship Business</h2>
            <p class="info-subtitle">
                Corporate Restructuring Documentation for Indian Companies
            </p>
        </div>

        <!-- Introduction -->
        <div class="info-content">
            <h3 class="info-subheading">Introduction</h3>

            <p class="info-text">
                A Board Resolution for Acquisition of Sole Proprietorship Business is a formal
                corporate document that records the Board of Directors' consent to acquire or
                purchase an existing sole proprietorship business on a going concern basis. Under
                the Companies Act, 2013, when a company proposes to acquire a business along with
                its assets, liabilities, and goodwill, the Board must formally approve such
                acquisition. The resolution serves as documentary evidence of the Board's decision
                and authorises the execution of necessary agreements.
            </p>

            <p class="info-text">
                This resolution specifies the name and address of the sole proprietorship firm being
                acquired, the purchase consideration, and confirms that the acquisition is on a
                going concern basis including all assets, liabilities, and goodwill. The document
                also approves the draft acquisition agreement and authorises directors to execute
                all necessary documents. Such acquisitions may require additional approvals from
                shareholders, banks, or other authorities depending on the nature of the transaction
                and the company's Articles of Association.
            </p>

            <!-- Benefits -->
            <h3 class="info-subheading">Benefits of Using a Standard Format</h3>

            <p class="info-text">
                Utilising a professionally drafted board resolution format ensures that all essential
                elements required for business acquisition are properly documented. A ready-to-use
                template saves valuable time during board meetings, reduces the risk of procedural
                errors, and provides a consistent framework that captures essential details including
                the business name, office address, purchase consideration, and scope of assets being
                acquired.
            </p>

            <p class="info-text">
                Standardised formats ensure proper corporate governance compliance.
            </p>

            <!-- Relevance -->
            <h3 class="info-subheading">Relevance to Business Restructuring</h3>

            <p class="info-text">
                Business acquisition is a significant corporate transaction. Following Company
                Registration, companies may grow through organic expansion or by acquiring existing
                businesses. When acquiring a sole proprietorship, the company takes over all aspects
                of the business including its customer relationships, inventory, receivables, and
                liabilities.
            </p>

            <p class="info-text">
                Post-acquisition, the company may need to update its GST Registration to reflect any
                changes in business activities or obtain fresh registrations where applicable. Proper
                documentation ensures smooth transition of business operations.
            </p>
        </div>

        <!-- Sample Format -->
        <div class="format-section">
            <h3 class="format-title">
                Board Resolution for Acquisition of Sole Proprietorship Business – Sample Format
            </h3>

            <p class="format-text">
                <strong>Company Name:</strong> _______________________________________
            </p>

            <p class="format-text">
                <strong>CIN:</strong> _______________________________________
            </p>

            <p class="format-text">
                <strong>Registered Office:</strong> _______________________________________
            </p>

            <p class="format-text">
                <strong>Email:</strong> _______________________________________
            </p>

            <p class="format-text">
                <strong>CERTIFIED TRUE COPY OF THE BOARD RESOLUTION</strong>
            </p>

            <p class="format-text">
                Passed at the Meeting of the Board of Directors of the Company
            </p>

            <p class="format-text">
                <strong>Date of Meeting:</strong> __.__.______
            </p>

            <p class="format-text">
                <strong>Time:</strong> ______ (Hours)
            </p>

            <p class="format-text">
                <strong>Venue:</strong> Registered Office of the Company
            </p>

            <p class="format-text">
                <strong>SUBJECT: ACQUISITION OF SOLE PROPRIETORSHIP BUSINESS</strong>
            </p>

            <p class="format-text">
                The Chairman placed before the Board the proposal to acquire/purchase the business of M/s. __________________________________________ (Name of Sole Proprietorship Firm) on a going concern basis, together with all its assets, liabilities, and goodwill. The Board, after detailed discussion and deliberation, gave its approval by passing the following resolution unanimously:
            </p>

            <p class="format-text">
                <strong>"RESOLVED THAT</strong> pursuant to the applicable provisions of the Companies Act, 2013 read with the rules made thereunder (including any statutory modification, amendment, or re-enactment thereof for the time being in force), and subject to the approval of the members of the Company, banks, and/or any other authority as may be required under the Companies Act or any other applicable law, the consent of the Board of Directors be and is hereby accorded to acquire/purchase the business of:
            </p>

            <p class="format-text">
                M/s. __________________________________________ (Name of Sole Proprietorship Firm)
            </p>

            <p class="format-text">
                (a sole proprietorship firm having its office at:
            </p>

            <p class="format-text">
                __________________________________________ (Complete Office Address))
            </p>

            <p class="format-text">
                on a going concern basis, together with all its assets, liabilities, and goodwill, at a purchase consideration of Rs. ____________/- (Rupees __________________________________________ Only).
            </p>

            <p class="format-text">
                <strong>RESOLVED FURTHER THAT</strong> the draft Acquisition Agreement to be executed between the Company and M/s. __________________________________________ (Name of Sole Proprietorship Firm), as placed before the Board, be and is hereby approved.
            </p>

            <p class="format-text">
                <strong>RESOLVED FURTHER THAT</strong> any Director of the Company, severally or jointly, be and is hereby authorised to:
            </p>

            <ul class="format-list">
                <li>Execute the Acquisition Agreement and all related documents;</li>
                <li>Take possession of all assets and records of the acquired business;</li>
                <li>Obtain necessary approvals from regulatory authorities, banks, and other stakeholders;</li>
                <li>Make necessary filings with the Registrar of Companies and other statutory authorities;</li>
                <li>Do all such acts, deeds, matters, and things as may be necessary, proper, or expedient for giving effect to this resolution."</li>
            </ul>

            <p class="format-text">
                For ________________________________________
            </p>

            <p class="format-text">
                (Name of the Company)
            </p>

            <p class="format-text">
                <strong>Signature:</strong> __________________________
            </p>

            <p class="format-text">
                <strong>Name:</strong> __________________________
            </p>

            <p class="format-text">
                <strong>Designation:</strong> __________________________
            </p>

            <p class="format-text">
                <strong>DIN:</strong> __________________________
            </p>
        </div>

        <!-- FAQ -->
        <div class="faq-section">
            <h3 class="faq-title">Frequently Asked Questions</h3>

            <div class="faq-item">
                <h4 class="faq-question">
                    1. Can a board resolution for the acquisition of sole proprietorship business be passed without a physical or virtual board meeting?
                </h4>
                <p class="faq-answer">
                    While the Companies Act permits certain resolutions to be passed by circulation,
                    significant matters like business acquisition typically require deliberation at a
                    duly convened board meeting. If the company's Articles of Association permit
                    written resolutions for such matters, it may be possible. However, standard
                    practice recommends conducting a proper board meeting for thorough discussion
                    and due diligence.
                </p>
            </div>

            <div class="faq-item">
                <h4 class="faq-question">
                    2. Who can be considered as an authorized signatory for the board resolution for the acquisition of sole proprietorship business?
                </h4>
                <p class="faq-answer">
                    Any director present at the board meeting or the company secretary (if appointed)
                    may be authorised to sign the certified true copy of the resolution. The Board
                    typically designates one or more directors to execute the acquisition agreement,
                    take possession of assets, obtain necessary approvals from banks and regulators,
                    and represent the company in all matters related to the acquisition.
                </p>
            </div>

            <div class="faq-item">
                <h4 class="faq-question">
                    3. Are there any specific requirements for the content and wording of the board resolution for the acquisition of sole proprietorship business?
                </h4>
                <p class="faq-answer">
                    The resolution should clearly specify the name and address of the sole
                    proprietorship being acquired, the purchase consideration, and confirm that the
                    acquisition is on a going concern basis including assets, liabilities, and
                    goodwill. It should reference applicable provisions of the Companies Act, 2013,
                    approve the draft acquisition agreement, and include authorisation for directors
                    to execute necessary documents and filings.
                </p>
            </div>

            <div class="faq-item">
                <h4 class="faq-question">
                    4. Does the Board Resolution for the acquisition of sole proprietorship business need to be certified by a professional?
                </h4>
                <p class="faq-answer">
                    There is no statutory requirement for the board resolution to be certified by an
                    external professional. The certified true copy may be signed by any director or
                    the company secretary. However, for submission to banks, lenders, or other third
                    parties, additional attestation or notarisation may be requested depending on
                    their specific documentation requirements.
                </p>
            </div>

            <div class="faq-item">
                <h4 class="faq-question">
                    5. Can a board resolution for the acquisition of sole proprietorship business be passed without convening a board meeting?
                </h4>
                <p class="faq-answer">
                    Business acquisition is a significant corporate decision that typically requires
                    deliberation at a duly convened board meeting. While the Articles of Association
                    may permit certain resolutions by circulation, it is advisable to conduct a proper
                    board meeting for such material transactions. This allows for comprehensive
                    discussion, due diligence review, and proper record of the Board's decision-making
                    process.
                </p>
            </div>

            <div class="faq-item">
                <h4 class="faq-question">
                    6. Who can certify a board resolution for the acquisition of sole proprietorship business to the bank?
                </h4>
                <p class="faq-answer">
                    Any director of the company or the company secretary (if appointed) may certify
                    the board resolution for submission to banks. The person certifying should have
                    been present at the meeting or have access to the minutes. Banks may have specific
                    format requirements or request additional documentation such as specimen signatures
                    of authorised signatories, proof of identity, or notarised copies.
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

    const form = document.getElementById('acquisitionForm');
    const downloadPdfBtn = document.getElementById('downloadPdfBtn');
    const alertContainer = document.getElementById('alertContainer');

    // Set default date
    const today = new Date().toISOString().split('T')[0];
    const dateInput = form.querySelector('[name="meeting_date"]');
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
        const companyName = form.querySelector('[name="company_name"]').value || '________________';
        const cin = form.querySelector('[name="cin"]').value || '________________';
        const meetingDate = form.querySelector('[name="meeting_date"]').value;
        const meetingTime = form.querySelector('[name="meeting_time"]').value || '__________';
        const proprietorshipName = form.querySelector('[name="proprietorship_name"]').value || 'M/s. ________________';
        const proprietorshipAddress = form.querySelector('[name="proprietorship_address"]').value || '________________';
        const purchaseConsideration = form.querySelector('[name="purchase_consideration"]').value || '____________';
        const directorName = form.querySelector('[name="director_name"]').value || '________________';
        const din = form.querySelector('[name="din"]').value || '________________';

        // Update preview text
        const elCompanyName = document.getElementById('prevCompanyName');
        const elCIN = document.getElementById('prevCIN');
        const elMeetingDate = document.getElementById('prevMeetingDate');
        const elMeetingTime = document.getElementById('prevMeetingTime');
        const elProprietorshipName = document.getElementById('prevProprietorshipName');
        const elProprietorshipAddress = document.getElementById('prevProprietorshipAddress');
        const elPurchaseConsideration = document.getElementById('prevPurchaseConsideration');
        const elFooterCompanyName = document.getElementById('footerCompanyName');
        const elFooterDirectorName = document.getElementById('footerDirectorName');
        const elFooterDIN = document.getElementById('footerDIN');

        if (elCompanyName) elCompanyName.textContent = companyName;
        if (elCIN) elCIN.textContent = cin;
        if (elProprietorshipName) elProprietorshipName.textContent = proprietorshipName;
        if (elProprietorshipAddress) elProprietorshipAddress.textContent = proprietorshipAddress;
        if (elPurchaseConsideration) elPurchaseConsideration.textContent = purchaseConsideration;
        if (elFooterCompanyName) elFooterCompanyName.textContent = companyName;
        if (elFooterDirectorName) elFooterDirectorName.textContent = directorName;
        if (elFooterDIN) elFooterDIN.textContent = din;

        if (meetingDate && elMeetingDate) {
            const formattedDate = new Date(meetingDate).toLocaleDateString('en-IN', {
                day: '2-digit',
                month: 'long',
                year: 'numeric'
            });
            elMeetingDate.textContent = formattedDate;
        } else if (elMeetingDate) {
            elMeetingDate.textContent = '__________';
        }

        if (meetingTime && elMeetingTime) {
            elMeetingTime.textContent = meetingTime;
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
