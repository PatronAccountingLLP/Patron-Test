@extends('tools.tool-master')
@section('title')
{{_(' Board Resolution for Approval of Related Party Transactions')}}
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
            <h1 class="hero-title"> <span> Board Resolution for Approval of Related Party Transactions</span></h1>
            <p class="hero-subtitle">
                Generate a certified Board Resolution for Approval of Related Party Transactions in under 60 seconds.
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
            <h2 class="form-title">Enter Company & Related Party Transaction Details</h2>
            <p class="form-description">
                Fill in the details below to generate a Board Resolution for Approval of Related Party Transactions.
            </p>
        </div>

        <form id="rptForm" method="POST" action="{{route('br.rpt') }}">
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

                <!-- Related Party Details -->
                <div class="form-group full-width">
                    <label class="form-label">Name of Related Party <span class="required">*</span></label>
                    <input type="text" name="related_party_name" class="form-control" placeholder="Enter name" required>
                </div>
                <div class="form-group full-width">
                    <label class="form-label">Nature of Relationship <span class="required">*</span></label>
                    <input type="text" name="nature_of_relationship" class="form-control" placeholder="e.g., Director, Relative, Subsidiary" required>
                </div>
                <div class="form-group full-width">
                    <label class="form-label">Nature of Transaction <span class="required">*</span></label>
                    <input type="text" name="nature_of_transaction" class="form-control" placeholder="e.g., Sale of goods, Loan, Service contract" required>
                </div>

                <div class="form-row">
                    <div class="form-group">
                        <label class="form-label">Transaction Value (Numbers) <span class="required">*</span></label>
                        <input type="text" name="transaction_value_number" class="form-control" placeholder="e.g., 1000000" required>
                    </div>
                    <div class="form-group">
                        <label class="form-label">Transaction Value (In Words) <span class="required">*</span></label>
                        <input type="text" name="transaction_value_words" class="form-control" placeholder="e.g., Ten Lakh Rupees" required>
                    </div>
                </div>

                <div class="form-group full-width">
                    <label class="form-label">Duration/Period <span class="required">*</span></label>
                    <input type="text" name="duration" class="form-control" placeholder="e.g., FY 2024-25, One year from date" required>
                </div>

                <!-- Authorised Person -->
                <div class="form-row">
                    <div class="form-group">
                        <label class="form-label">Authorised Person Name <span class="required">*</span></label>
                        <input type="text" name="authorized_name" class="form-control" placeholder="Enter name" required>
                    </div>
                    <div class="form-group">
                        <label class="form-label">Authorised Person Designation <span class="required">*</span></label>
                        <div class="select-wrapper">
                            <select name="authorized_designation" class="form-control form-select" required>
                                <option value="">Select designation</option>
                                <option value="Director">Director</option>
                                <option value="Managing Director">Managing Director</option>
                                <option value="Company Secretary">Company Secretary</option>
                            </select>
                        </div>
                    </div>
                </div>

                <!-- Interested Directors (Optional) -->
                <div class="form-group full-width">
                    <label class="form-label">Interested Director(s) (who abstained from voting) - Optional</label>
                    <input type="text" name="interested_directors" class="form-control" placeholder="e.g., Mr. A, Mr. B (if any)">
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
                                <option value="Managing Director">Managing Director</option>
                                <option value="Company Secretary">Company Secretary</option>
                            </select>
                        </div>
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-group">
                        <label class="form-label">Signatory DIN <span class="required">*</span></label>
                        <input type="text" name="signatory_din" class="form-control" placeholder="Enter signatory DIN" required>
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
                        <p class="preview-subtitle">Board Resolution for Approval of Related Party Transactions</p>
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
                        Passed at the Meeting of the Board of Directors of the Company
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
                        <strong>Venue: </strong>Registered Office of the Company at <span id="prevOfficeAddressVenue">________________</span>
                    </p>

                    <p class="certificate-paragraph">
                        <strong>SUBJECT: APPROVAL OF RELATED PARTY TRANSACTION</strong>
                    </p>

                    <p class="certificate-paragraph">
                        <strong>Details of the Related Party Transaction:</strong><br>
                        <strong>Name of the Related Party: </strong><span id="prevRelatedPartyName">________________</span><br>
                        <strong>Nature of Relationship: </strong><span id="prevNatureRelationship">________________</span><br>
                        <strong>Nature of Transaction: </strong><span id="prevNatureTransaction">________________</span><br>
                        <strong>Value of Transaction: </strong>Rs. <span id="prevTransactionValueNumber">________________</span> (Rupees <span id="prevTransactionValueWords">________________</span> only)
                    </p>

                    <p class="certificate-paragraph">
                        <strong>"RESOLVED THAT</strong> pursuant to the provisions of Section 188 and other applicable provisions of the Companies Act, 2013 read with Rule 15 of the Companies (Meetings of Board and its Powers) Rules, 2014, and the applicable provisions of the SEBI (Listing Obligations and Disclosure Requirements) Regulations, 2015 (if applicable), and subject to such other approvals as may be required, the consent of the Board of Directors be and is hereby accorded to enter into the following transaction with <strong><span id="prevRelatedPartyNameResolve">________________</span></strong>, being a related party within the meaning of Section 2(76) of the Companies Act, 2013:
                    </p>

                    <p class="certificate-paragraph">
                        <strong>Nature of Transaction: </strong><span id="prevNatureTransactionResolve">________________</span><br>
                        <strong>Maximum Value: </strong>Rs. <span id="prevTransactionValueNumberResolve">________________</span> (Rupees <span id="prevTransactionValueWordsResolve">________________</span> only)<br>
                        <strong>Duration/Period: </strong><span id="prevDuration">________________</span>
                    </p>

                    <p class="certificate-paragraph">
                        <strong>"RESOLVED FURTHER THAT</strong> the Board hereby confirms that the aforesaid transaction is at arm's length and in the ordinary course of business of the Company."
                    </p>

                    <p class="certificate-paragraph">
                        <strong>"RESOLVED FURTHER THAT</strong> <strong><span id="prevAuthorizedName">________________</span></strong>, <span id="prevAuthorizedDesignation">________________</span> of the Company, be and is hereby authorised to execute all necessary agreements, documents, and instruments, and to do all such acts, deeds, matters, and things as may be necessary, proper, or expedient to give effect to the aforesaid resolution."
                    </p>

                    <p class="certificate-paragraph">
                        <strong>"RESOLVED FURTHER THAT</strong> the particulars of this related party transaction shall be entered in the Register of Contracts maintained under Section 189 of the Companies Act, 2013, and disclosed in the Board's Report as required under the applicable provisions of law."
                    </p>

                    <p class="certificate-paragraph" id="interestedNote">
                        <strong>Note:</strong> The following Director(s), being interested in the above transaction, abstained from voting on this resolution: <span id="prevInterestedDirectors">________________</span>
                    </p>

                    <div class="certificate-signature">
                        <p>For <strong id="footerCompanyName">________________</strong></p>
                        <p><strong>Signature:</strong> _________________________
                        <br><strong>Name:</strong> <span id="footerSignatoryName">________________</span>
                        <br><strong>Designation:</strong> <span id="footerDesignation">________________</span>
                        <br><strong>DIN:</strong> <span id="footerDIN">________________</span>
                        <br><strong>Date:</strong> <span id="footerDate">________________</span>
                        <br><strong>Place:</strong> <span id="footerPlace">________________</span></p>
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
            <h2 class="info-title">Board Resolution for Approval of Related Party Transactions</h2>
            <p class="info-subtitle">
                Professional Format Guide for Indian Companies
            </p>
        </div>

        <!-- Introduction -->
        <div class="info-content">
            <h3 class="info-subheading">Introduction</h3>

            <p class="info-text">
                A Board Resolution for Approval of Related Party Transactions is a formal corporate document that records the decision of the Board of Directors to authorise transactions between the company and its related parties. Under the Companies Act, 2013, related party transactions require prior approval from the Board of Directors to ensure transparency, prevent conflicts of interest, and protect the interests of the company and its stakeholders. Related parties typically include directors, key managerial personnel, their relatives, and entities in which they hold significant influence.
            </p>

            <p class="info-text">
                This resolution is essential for maintaining corporate governance standards and ensuring compliance with statutory disclosure requirements. Companies are required to document all related party transactions and, in certain cases, obtain prior approval from the Audit Committee or shareholders. Directors, company secretaries, compliance officers, and auditors regularly require this document for statutory filings, audit documentation, and regulatory compliance purposes.
            </p>

            <!-- Benefits -->
            <h3 class="info-subheading">Benefits of Using a Standard Format</h3>

            <p class="info-text">
                Adopting a professionally structured board resolution format ensures that all essential elements required under the Companies Act are accurately captured. A standardised template reduces the risk of procedural errors, expedites the documentation process, and facilitates seamless compliance with audit and regulatory requirements. This approach supports transparency in corporate dealings and maintains proper records for statutory filings.
            </p>

            <!-- Relevance -->
            <h3 class="info-subheading">Relevance to Corporate Compliance</h3>

            <p class="info-text">
                Related party transactions have significant implications for financial reporting and statutory compliance. Companies must maintain detailed records of all such transactions, which are subject to disclosure in the annual financial statements and Directors' Report. Where the company is registered under GST, transactions with related parties may also have implications for GST valuation rules, requiring careful documentation.
            </p>

            <p class="info-text">
                Proper board resolutions help establish an audit trail and demonstrate compliance with corporate governance norms during regulatory reviews and statutory audits.
            </p>
        </div>

        <!-- Sample Format -->
        <div class="format-section">
            <h3 class="format-title">
                Board Resolution for Approval of Related Party Transactions - Sample Format
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
                <strong>CERTIFIED TRUE COPY OF THE BOARD RESOLUTION</strong>
            </p>

            <p class="format-text">
                Passed at the Meeting of the Board of Directors held on ________ (Date) at ________ (Time) at the Registered Office of the Company at ________ (Address)
            </p>

            <p class="format-text">
                <strong>SUBJECT:</strong> APPROVAL OF RELATED PARTY TRANSACTION
            </p>

            <p class="format-text">
                <strong>Details of the Related Party Transaction:</strong>
            </p>

            <p class="format-text">
                Name of the Related Party: _______________________________________
            </p>

            <p class="format-text">
                Nature of Relationship: _______________________________________
            </p>

            <p class="format-text">
                Nature of Transaction: _______________________________________
            </p>

            <p class="format-text">
                Value of Transaction: Rs. _______________________________________
            </p>

            <p class="format-text">
                (Rupees _______________________________________ only)
            </p>

            <p class="format-text">
                "RESOLVED THAT pursuant to the provisions of Section 188 and other applicable provisions of the Companies Act, 2013 read with Rule 15 of the Companies (Meetings of Board and its Powers) Rules, 2014, and the applicable provisions of the SEBI (Listing Obligations and Disclosure Requirements) Regulations, 2015 (if applicable), and subject to such other approvals as may be required, the consent of the Board of Directors be and is hereby accorded to enter into the following transaction with _______________________________________ (Name of Related Party), being a related party within the meaning of Section 2(76) of the Companies Act, 2013:
            </p>

            <p class="format-text">
                Nature of Transaction: _______________________________________
            </p>

            <p class="format-text">
                Maximum Value: Rs. _______________________________________ (Rupees _______________________________________ only)
            </p>

            <p class="format-text">
                Duration/Period: _______________________________________
            </p>

            <p class="format-text">
                "RESOLVED FURTHER THAT the Board hereby confirms that the aforesaid transaction is at arm's length and in the ordinary course of business of the Company."
            </p>

            <p class="format-text">
                "RESOLVED FURTHER THAT _______________________________________ (Name of Authorised Person), _______________________________________ (Designation) of the Company, be and is hereby authorised to execute all necessary agreements, documents, and instruments, and to do all such acts, deeds, matters, and things as may be necessary, proper, or expedient to give effect to the aforesaid resolution."
            </p>

            <p class="format-text">
                "RESOLVED FURTHER THAT the particulars of this related party transaction shall be entered in the Register of Contracts maintained under Section 189 of the Companies Act, 2013, and disclosed in the Board's Report as required under the applicable provisions of law."
            </p>

            <p class="format-text">
                <strong>Note:</strong> The following Director(s), being interested in the above transaction, abstained from voting on this resolution: _______________________________________
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
                <strong>DIN:</strong> _______________________________________
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
                    1. Is the signature of all directors mandatory on the board resolution for approval of related party transactions?
                </h4>
                <p class="faq-answer">
                    No, the signatures of all directors are not mandatory on the board resolution for approval of related party transactions. The resolution should be signed by an authorised signatory, typically the Chairperson of the meeting or a director authorised by the Board. However, directors who have an interest in the transaction must abstain from voting, and this should be recorded in the minutes.
                </p>
            </div>

            <div class="faq-item">
                <h4 class="faq-question">
                    2. Does the board resolution for approval of related party transactions need to be certified by a professional?
                </h4>
                <p class="faq-answer">
                    Professional certification may be required when filing certain forms with the Registrar of Companies or when the resolution is used for external purposes such as banking or contractual documentation. A practising Company Secretary, Chartered Accountant, or Cost Accountant may be required to certify the resolution depending on the specific regulatory or institutional requirements. It is advisable to consult with a qualified professional for your specific use case.
                </p>
            </div>

            <div class="faq-item">
                <h4 class="faq-question">
                    3. Is the board resolution for approval of related party transactions to be on company letterhead?
                </h4>
                <p class="faq-answer">
                    While there is no strict statutory requirement mandating the use of company letterhead, it is considered best practice for authenticity and professional presentation. Using official letterhead lends credibility to the document and facilitates verification by auditors, regulatory authorities, and third parties such as banks or contracting parties who may require the resolution for their records.
                </p>
            </div>

            <div class="faq-item">
                <h4 class="faq-question">
                    4. Who can be considered as an authorised signatory for the board resolution for approval of related party transactions?
                </h4>
                <p class="faq-answer">
                    An authorised signatory for the board resolution is typically the Chairperson of the board meeting or any director expressly authorised by the Board to sign the certified true copy. The Company Secretary, if appointed, may also sign the resolution. The authorised signatory should possess a valid Director Identification Number (DIN) if they are a director, and their credentials should be clearly mentioned in the signature block.
                </p>
            </div>

            <div class="faq-item">
                <h4 class="faq-question">
                    5. Which resolution is required for the board resolution for approval of related party transactions?
                </h4>
                <p class="faq-answer">
                    For most related party transactions that are in the ordinary course of business and at arm's length, a board resolution passed by a simple majority of disinterested directors is sufficient. However, certain material transactions or those not in the ordinary course of business may require approval by way of an ordinary resolution from shareholders. Listed companies have additional requirements under SEBI regulations, which may mandate shareholder approval for transactions exceeding specified thresholds.
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

    const form = document.getElementById('rptForm');
    const downloadPdfBtn = document.getElementById('downloadPdfBtn');

    // Set default date
    const today = new Date().toISOString().split('T')[0];
    const meetingDateInput = form.querySelector('[name="meeting_date"]');
    if (meetingDateInput) {
        meetingDateInput.value = today;
    }

    // Set default time (11:00 AM)
    const timeInput = form.querySelector('[name="meeting_time"]');
    if (timeInput && !timeInput.value) {
        timeInput.value = "11:00";
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
        // Company Details
        const companyName = form.querySelector('[name="company_name"]').value || '________________';
        const cin = form.querySelector('[name="cin"]').value || '________________';
        const officeAddress = form.querySelector('[name="registered_office"]').value || '________________';
        
        // Meeting Details
        const meetingDate = form.querySelector('[name="meeting_date"]').value;
        const meetingTime = form.querySelector('[name="meeting_time"]').value || '______';
        
        // Related Party Details
        const relatedPartyName = form.querySelector('[name="related_party_name"]').value || '________________';
        const natureRelationship = form.querySelector('[name="nature_of_relationship"]').value || '________________';
        const natureTransaction = form.querySelector('[name="nature_of_transaction"]').value || '________________';
        const transactionValueNumber = form.querySelector('[name="transaction_value_number"]').value || '________________';
        const transactionValueWords = form.querySelector('[name="transaction_value_words"]').value || '________________';
        const duration = form.querySelector('[name="duration"]').value || '________________';
        
        // Authorised Person
        const authorizedName = form.querySelector('[name="authorized_name"]').value || '________________';
        const authorizedDesignation = form.querySelector('[name="authorized_designation"]').value || '________________';
        
        // Interested Directors
        const interestedDirectors = form.querySelector('[name="interested_directors"]').value || '________________';
        
        // Signatory Details
        const signatoryName = form.querySelector('[name="signatory_name"]').value || '________________';
        const signatoryDesignation = form.querySelector('[name="signatory_designation"]').value || '________________';
        const signatoryDIN = form.querySelector('[name="signatory_din"]').value || '________________';
        const place = form.querySelector('[name="place"]').value || '________________';

        // Update preview text
        document.getElementById('prevCompanyName').textContent = companyName;
        document.getElementById('prevCIN').textContent = cin;
        document.getElementById('prevOfficeAddress').textContent = officeAddress;
        document.getElementById('prevOfficeAddressVenue').textContent = officeAddress;
        document.getElementById('prevMeetingDate').textContent = meetingDate ? formatDate(meetingDate) : '__________';
        document.getElementById('prevMeetingTime').textContent = meetingTime;
        
        document.getElementById('prevRelatedPartyName').textContent = relatedPartyName;
        document.getElementById('prevNatureRelationship').textContent = natureRelationship;
        document.getElementById('prevNatureTransaction').textContent = natureTransaction;
        document.getElementById('prevTransactionValueNumber').textContent = transactionValueNumber;
        document.getElementById('prevTransactionValueWords').textContent = transactionValueWords;
        
        document.getElementById('prevRelatedPartyNameResolve').textContent = relatedPartyName;
        document.getElementById('prevNatureTransactionResolve').textContent = natureTransaction;
        document.getElementById('prevTransactionValueNumberResolve').textContent = transactionValueNumber;
        document.getElementById('prevTransactionValueWordsResolve').textContent = transactionValueWords;
        document.getElementById('prevDuration').textContent = duration;
        
        document.getElementById('prevAuthorizedName').textContent = authorizedName;
        document.getElementById('prevAuthorizedDesignation').textContent = authorizedDesignation;
        
        const interestedSpan = document.getElementById('prevInterestedDirectors');
        if (interestedSpan) interestedSpan.textContent = interestedDirectors;
        
        document.getElementById('footerCompanyName').textContent = companyName;
        document.getElementById('footerSignatoryName').textContent = signatoryName;
        document.getElementById('footerDesignation').textContent = signatoryDesignation;
        document.getElementById('footerDIN').textContent = signatoryDIN;
        document.getElementById('footerPlace').textContent = place;

        if (meetingDate) {
            document.getElementById('footerDate').textContent = formatDate(meetingDate);
        } else {
            document.getElementById('footerDate').textContent = '________________';
        }

        // Show/hide interested note if field empty
        const interestedNote = document.getElementById('interestedNote');
        if (interestedDirectors === '________________' || interestedDirectors.trim() === '') {
            interestedNote.style.display = 'none';
        } else {
            interestedNote.style.display = 'block';
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
