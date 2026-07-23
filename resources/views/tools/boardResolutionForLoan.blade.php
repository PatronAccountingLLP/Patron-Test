@extends('tools.tool-master')
@section('title')
{{_('Board Resolution for Loan from Bank')}}
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
            <h1 class="hero-title">Board Resolution for <span>Loan from Bank</span></h1>
            <p class="hero-subtitle">
                Generate a certified Board Resolution for Loan from Bank in under 60 seconds.
            </p>
        </div>
    </div>

    <!-- Main Container -->
    <div class="download-format-container">
        <div class="alert-wrapper" id="alertContainer"></div>

<!-- Form and Live Preview section-->
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
            <h2 class="form-title">Enter Company & Loan Details</h2>
            <p class="form-description">
                Fill in the details below to generate a Board Resolution for Loan from Bank.
            </p>
        </div>

        <form id="loanResolutionForm" method="POST" action="{{ route('br.loan') }}">
            @csrf

            <div class="form-grid">
                <div class="form-group full-width">
                    <label class="form-label">Company Name <span class="required">*</span></label>
                    <input type="text" name="business_name" class="form-control" placeholder="Enter company name" required>
                </div>
                
                <div class="form-group full-width">
                    <label class="form-label">CIN <span class="required">*</span></label>
                    <input type="text" name="cin" class="form-control" placeholder="Enter CIN" required>
                </div>
                
                <div class="form-group full-width">
                    <label class="form-label">Registered Office Address <span class="required">*</span></label>
                    <textarea name="register_address" class="form-control" placeholder="Enter registered office address" required></textarea>
                </div>

                <div class="form-row">
                    <div class="form-group">
                        <label class="form-label">Meeting Date <span class="required">*</span></label>
                        <input type="date" name="meeting_date" class="form-control" required>
                    </div>

                    <div class="form-group">
                        <label class="form-label">Meeting Time <span class="required">*</span></label>
                        <input type="time" name="meeting_time" class="form-control" required>
                    </div>
                </div>

                <div class="form-group full-width">
                    <label class="form-label">Loan Amount <span class="required">*</span></label>
                    <input type="text" name="loan_amount" class="form-control" placeholder="Enter loan amount in Rupees" required>
                </div>

                <div class="form-row">
                    <div class="form-group">
                        <label class="form-label">Bank Name <span class="required">*</span></label>
                        <input type="text" name="bank_name" class="form-control" placeholder="Bank name" required>
                    </div>

                    <div class="form-group">
                        <label class="form-label">Bank Branch <span class="required">*</span></label>
                        <input type="text" name="bank_branch" class="form-control" placeholder="Branch name" required>
                    </div>
                </div>
                
                <div class="form-group full-width">
                    <label class="form-label">Branch Address <span class="required">*</span></label>
                    <input type="text" name="branch_address" class="form-control" placeholder="Enter branch address" required>
                </div>

                <div class="form-group full-width">
                    <label class="form-label">Purpose of Loan <span class="required">*</span></label>
                    <textarea name="loan_purpose" class="form-control" placeholder="Enter purpose of the loan" required></textarea>
                </div>

                <div class="form-row">
                    <div class="form-group">
                        <label class="form-label">Sanction Letter Date <span class="required">*</span></label>
                        <input type="date" name="sanction_date" class="form-control" required>
                    </div>

                    <div class="form-group">
                        <label class="form-label">Repayment Period <span class="required">*</span></label>
                        <input type="text" name="repayment_period" class="form-control" placeholder="e.g., 5 years" required>
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-group">
                        <label class="form-label">Interest Rate (% per annum) <span class="required">*</span></label>
                        <input type="text" name="interest_rate" class="form-control" placeholder="e.g., 10.5%" required>
                    </div>

                    <div class="form-group">
                        <label class="form-label">Authorised Director Name <span class="required">*</span></label>
                        <input type="text" name="authorized_person_name" class="form-control" placeholder="Director name" required>
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-group">
                        <label class="form-label">DIN Number <span class="required">*</span></label>
                        <input type="text" name="din" class="form-control" placeholder="Enter DIN Number" required>
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
                                <option value="Chief Financial Officer">Chief Financial Officer</option>
                            </select>
                        </div>
                    </div>
                </div>

                <div class="form-group full-width">
                    <label class="form-label">Property for Mortgage (if any)</label>
                    <textarea name="mortgage_property" class="form-control" placeholder="Property address for equitable mortgage"></textarea>
                </div>

                <div class="form-row">
                    <div class="form-group">
                        <label class="form-label">Property Area</label>
                        <input type="text" name="property_area" class="form-control" placeholder="Area in sq. ft./sq. mts.">
                    </div>

                    <div class="form-group">
                        <label class="form-label">Place <span class="required">*</span></label>
                        <input type="text" name="state" class="form-control" placeholder="City / Place" required>
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
                        <p class="preview-subtitle">Board Resolution for Loan from Bank</p>
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
                    <p class="certificate-company-info">
                        Company Name: <strong id="prevBusinessName">________________</strong><br>
                        CIN: <strong id="prevCin">________________</strong><br>
                        Registered Office: <strong id="prevRegisterAddress">________________</strong>
                    </p>

                    <p class="certificate-paragraph">
                        Date of Meeting: <strong id="prevMeetingDate">__________</strong><br>
                        Time: <strong id="prevMeetingTime">__________</strong> (Hours)<br>
                        Venue: Registered Office of the Company
                    </p>

                    <p class="certificate-paragraph">
                        <strong>SUBJECT: OBTAINING LOAN/CREDIT FACILITY FROM BANK AGAINST SECURITIES</strong>
                    </p>

                    <p class="certificate-paragraph">
                        The Chairman informed the Board that the Company requires financial assistance from a bank to meet its business requirements. The Board discussed the proposal and the terms of the sanction letter/loan agreement placed before it, and passed the following resolutions:
                    </p>

                    <p class="certificate-paragraph">
                        <strong>"RESOLVED THAT</strong> the Company do hereby obtain and avail financial assistance/credit facility of an amount not exceeding Rs. <strong id="prevLoanAmount">________________</strong> from:
                    </p>

                    <p class="certificate-paragraph">
                        Bank Name: <strong id="prevBankName">________________</strong><br>
                        Branch: <strong id="prevBankBranch">________________</strong><br>
                        Branch Address: <strong id="prevBranchAddress">________________</strong>
                    </p>

                    <p class="certificate-paragraph">
                        in order to meet the <strong id="prevLoanPurpose">________________</strong>, and such loan/credit facility shall be obtained on such terms and conditions as specified or contained in the Sanction Letter/Loan Agreement dated <strong id="prevSanctionDate">________________</strong> which has been placed before the Board for approval.
                    </p>

                    <p class="certificate-paragraph">
                        <strong>RESOLVED FURTHER THAT</strong> the consent and approval of the Board be and is hereby accorded to the Company to borrow the aforesaid funds on such terms and conditions as mentioned in the Sanction Letter/Loan Agreement dated <strong id="prevSanctionDate2">________________</strong>, including:
                    </p>

                    <p class="certificate-paragraph">
                        • Loan Repayment Period: <strong id="prevRepaymentPeriod">________________</strong><br>
                        • Rate of Interest: <strong id="prevInterestRate">________________</strong> % per annum on the outstanding balance<br>
                        • Other terms as specified in the Sanction Letter/Loan Agreement
                    </p>

                    <p class="certificate-paragraph">
                        <strong>RESOLVED FURTHER THAT</strong> the Board of Directors of the Company be and are hereby authorised to:
                    </p>

                    <p class="certificate-paragraph">
                        • Hypothecate the items/assets which are purchased out of the loan funds in favour of the Bank;<br>
                        • Pledge fixed deposits or other securities of the Company with the Bank as collateral security;<br>
                        • Deposit the title deeds of the property of the Company situated at <strong id="prevMortgageProperty">________________</strong> admeasuring an area of <strong id="prevPropertyArea">________________</strong> to create an equitable mortgage thereon as collateral security in favour of the Bank for the loan amount so borrowed, if required;<br>
                        • Create charge over the assets of the Company and file Form CHG-1 with the Registrar of Companies within the prescribed time.
                    </p>

                    <p class="certificate-paragraph">
                        <strong>RESOLVED FURTHER THAT</strong> Mr./Ms. <strong id="prevAuthPerson">________________</strong>, holding DIN: <strong id="prevDin">________________</strong>, <strong id="prevDesignation">Director</strong> of the Company, be and is hereby severally authorised in relation to the said facility to act on behalf of the Company to:
                    </p>

                    <p class="certificate-paragraph">
                        • Sign and execute the requisite documents, loan agreements, sanction letters, deeds, undertakings, indemnities, and any other documents as may be required by the Bank;<br>
                        • Execute mortgage deeds, hypothecation agreements, and other security documents under the Common Seal of the Company (wherever required) in terms of the Articles of Association of the Company;<br>
                        • Operate the loan account and draw funds from the sanctioned facility;<br>
                        • Represent the Company before the Bank and other authorities in connection with the loan facility;<br>
                        • Do all such acts, deeds, matters, and things as may be necessary, proper, or expedient for giving effect to this resolution."
                    </p>

                    <div class="certificate-signature">
                        <p class="signature-label">For <strong id="footerCompanyName">________________</strong></p>
                        <div class="signature-line"></div>
                        <p class="signature-details">
                            Signature: _________________________<br>
                            Name: <strong id="footerAuthPerson">________________</strong><br>
                            Designation: <strong id="footerDesignation">________________</strong><br>
                            DIN: <strong id="footerDin">________________</strong>
                        </p>
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

<!--End Form and Preview Section-->



<div class="info-section">
    <div class="info-card">

        <!-- Header -->
        <div class="info-header">
            <span class="info-header-badge">Professional Format Guide</span>
            <h2 class="info-title">Board Resolution for Loan from Bank</h2>
            <p class="info-subtitle">
                Professional Format Guide for Indian Companies
            </p>
        </div>

        <!-- Introduction -->
        <div class="info-content">
            <h3 class="info-subheading">Introduction</h3>

            <p class="info-text">
                A Board Resolution for Loan from Bank is a formal corporate document that records
                the Board of Directors' decision to avail credit facilities or loans from banks
                or financial institutions. Under the Companies Act, 2013, when a company proposes
                to borrow funds against securities, fixed deposits, or other collateral, prior
                approval of the Board of Directors is mandatory.
            </p>

            <p class="info-text">
                This resolution authorises the company to enter into loan agreements, accept
                sanction terms, create security over company assets, and designate authorised
                signatories for loan-related documentation. Banks typically require a certified
                copy of this resolution before disbursing funds.
            </p>

            <!-- Benefits -->
            <h3 class="info-subheading">Benefits of Using a Standard Format</h3>

            <p class="info-text">
                Utilising a professionally drafted board resolution format ensures all statutory
                requirements under the Companies Act, 2013 and banking documentation standards
                are properly addressed. A ready-to-use template saves valuable time, reduces
                procedural errors, and provides a consistent framework for documenting the Board's
                approval for borrowings.
            </p>

            <p class="info-text">
                Standardised formats meet bank documentation requirements and facilitate smoother
                loan disbursement.
            </p>

            <!-- Relevance -->
            <h3 class="info-subheading">Relevance to Corporate Finance</h3>

            <p class="info-text">
                Availing loans from banks is a common corporate finance activity. Following
                Company Registration, businesses often require working capital, term loans, or
                overdraft facilities to fund operations and growth. The board resolution serves
                as formal authorisation to the bank confirming that the borrowing has been duly
                approved by the Board.
            </p>

            <p class="info-text">
                If the loan exceeds prescribed thresholds, companies must comply with borrowing
                limits under Section 180(1)(c) of the Companies Act, 2013, which may require
                shareholder approval.
            </p>
        </div>

        <!-- Sample Format -->
        <div class="format-section">
            <h3 class="format-title">
                Board Resolution for Loan from Bank – Sample Format
            </h3>

            <p class="format-note">
                <em>[To be printed on Company Letterhead]</em>
            </p>

            <p class="format-text"><strong>Company Name:</strong> _______________________________________</p>
            <p class="format-text"><strong>CIN:</strong> _______________________________________</p>
            <p class="format-text"><strong>Registered Office:</strong> _______________________________________</p>

            <p class="format-text">
                <strong>CERTIFIED TRUE COPY OF THE BOARD RESOLUTION</strong>
            </p>

            <p class="format-text">
                Passed at the Meeting of the Board of Directors of the Company<br>
                <strong>Date of Meeting:</strong> __.__.______ &nbsp;&nbsp;
                <strong>Time:</strong> ______ (Hours)<br>
                <strong>Venue:</strong> Registered Office of the Company
            </p>

            <p class="format-text">
                <strong>SUBJECT:</strong> Obtaining Loan/Credit Facility from Bank Against Securities
            </p>

            <p class="format-text">
                The Chairman informed the Board that the Company requires financial assistance
                from a bank to meet its business requirements. The Board discussed the proposal
                and the terms of the sanction letter/loan agreement placed before it, and passed
                the following resolutions:
            </p>

            <p class="format-text">
                <strong>RESOLVED THAT</strong> the Company do hereby obtain and avail financial
                assistance/credit facility of an amount not exceeding Rs. ________________________/- 
                (Rupees ________________________ Only) from:<br>
                Bank Name: ________________________<br>
                Branch: ________________________<br>
                Branch Address: ________________________<br>
                in order to meet the ________________________ (purpose/requirements of the company),
                on terms and conditions specified in the Sanction Letter/Loan Agreement dated
                ________________________.
            </p>

            <p class="format-text">
                <strong>RESOLVED FURTHER THAT</strong> the consent and approval of the Board be
                and is hereby accorded to borrow the aforesaid funds on such terms, including:<br>
                • Loan Repayment Period: ________________________<br>
                • Rate of Interest: ________________________ % per annum<br>
                • Other terms as specified in the Sanction Letter/Loan Agreement
            </p>

            <p class="format-text">
                <strong>RESOLVED FURTHER THAT</strong> the Board of Directors of the Company be
                and are hereby authorised to:<br>
                • Hypothecate items/assets purchased out of the loan funds in favour of the Bank;<br>
                • Pledge fixed deposits or other securities of the Company as collateral;<br>
                • Deposit title deeds of Company property at ________________________ admeasuring
                  ________________________ to create equitable mortgage if required;<br>
                • Create charge over the Company's assets and file Form CHG-1 with the ROC.
            </p>

            <p class="format-text">
                <strong>RESOLVED FURTHER THAT</strong> Mr./Ms. ________________________ (Name),
                holding DIN: ________________________, Director of the Company, be and is hereby
                authorised to:<br>
                • Sign and execute loan agreements, sanction letters, deeds, undertakings, and other
                  documents;<br>
                • Execute mortgage deeds, hypothecation agreements, and other security documents under
                  the Common Seal of the Company;<br>
                • Operate the loan account and draw funds;<br>
                • Represent the Company before the Bank and authorities;<br>
                • Do all acts necessary to give effect to this resolution.
            </p>

            <p class="format-text"><strong>CERTIFIED TRUE COPY</strong></p>
            <p class="format-text">For ________________________________________ (Company Name)</p>

            <p class="format-text"><strong>Signature:</strong> __________________________</p>
            <p class="format-text"><strong>Name:</strong> __________________________</p>
            <p class="format-text"><strong>Designation:</strong> __________________________</p>
            <p class="format-text"><strong>DIN:</strong> __________________________</p>
            <p class="format-text"><strong>Date:</strong> __________________________</p>
            <p class="format-text"><strong>Place:</strong> __________________________</p>
        </div>

        <!-- FAQ -->
        <div class="faq-section">
            <h3 class="faq-title">Frequently Asked Questions</h3>

            <div class="faq-item">
                <h4 class="faq-question">
                    1. Can a board resolution for loan from bank be passed without convening a board meeting?
                </h4>
                <p class="faq-answer">
                    Generally, the resolution should be passed at a duly convened board meeting.
                    Some Articles of Association allow passing by circulation, but banks usually
                    prefer resolutions from physical or video conference meetings.
                </p>
            </div>

            <div class="faq-item">
                <h4 class="faq-question">
                    2. Who can be considered as an authorized signatory?
                </h4>
                <p class="faq-answer">
                    Any director may be designated as an authorised signatory. In some cases,
                    the company secretary or CFO may also be authorised to sign loan-related
                    documents on behalf of the company.
                </p>
            </div>

            <div class="faq-item">
                <h4 class="faq-question">
                    3. Is the signature of all directors mandatory?
                </h4>
                <p class="faq-answer">
                    No. The resolution is passed by a majority of directors present and voting.
                    The certified true copy may be signed by an authorised director or company secretary.
                </p>
            </div>

            <div class="faq-item">
                <h4 class="faq-question">
                    4. Does this resolution need professional certification?
                </h4>
                <p class="faq-answer">
                    There is no statutory requirement for certification by an external professional,
                    but some banks may request notarisation or additional verification.
                </p>
            </div>

            <div class="faq-item">
                <h4 class="faq-question">
                    5. Is the resolution required to be on company letterhead?
                </h4>
                <p class="faq-answer">
                    While not mandatory, standard corporate practice and banks generally expect
                    board resolutions on official company letterhead for authenticity.
                </p>
            </div>

            <div class="faq-item">
                <h4 class="faq-question">
                    6. Which resolution is required for loan from bank?
                </h4>
                <p class="faq-answer">
                    A board resolution passed at a duly convened meeting of the Board of Directors
                    is required. For loans exceeding limits under Section 180(1)(c), shareholder
                    approval via a special resolution may also be needed.
                </p>
            </div>
        </div>

    </div>
</div>



    </div>
</div>

<!-- Start the Js section -->

<!-- Start the Js section -->
<script>
document.addEventListener('DOMContentLoaded', function () {
    const form = document.getElementById('loanResolutionForm');
    const downloadPdfBtn = document.getElementById('downloadPdfBtn');
    
    // Set default dates
    const today = new Date().toISOString().split('T')[0];
    const meetingDateInput = form.querySelector('[name="meeting_date"]');
    const sanctionDateInput = form.querySelector('[name="sanction_date"]');
    
    if (meetingDateInput) {
        meetingDateInput.value = today;
    }
    if (sanctionDateInput) {
        sanctionDateInput.value = today;
    }
    
    // Set default time
    const now = new Date();
    const currentTime = now.getHours().toString().padStart(2, '0') + ':' + now.getMinutes().toString().padStart(2, '0');
    const meetingTimeInput = form.querySelector('[name="meeting_time"]');
    if (meetingTimeInput) {
        meetingTimeInput.value = currentTime;
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
        // Get form values
        const companyName = form.querySelector('[name="business_name"]').value || '________________';
        const cin = form.querySelector('[name="cin"]').value || '________________';
        const officeAddress = form.querySelector('[name="register_address"]').value || '________________';
        const meetingDate = form.querySelector('[name="meeting_date"]').value;
        const meetingTime = form.querySelector('[name="meeting_time"]').value || '__________';
        const loanAmount = form.querySelector('[name="loan_amount"]').value || '________________';
        const bankName = form.querySelector('[name="bank_name"]').value || '________________';
        const bankBranch = form.querySelector('[name="bank_branch"]').value || '________________';
        const branchAddress = form.querySelector('[name="branch_address"]').value || '________________';
        const loanPurpose = form.querySelector('[name="loan_purpose"]').value || '________________';
        const sanctionDate = form.querySelector('[name="sanction_date"]').value;
        const repaymentPeriod = form.querySelector('[name="repayment_period"]').value || '________________';
        const interestRate = form.querySelector('[name="interest_rate"]').value || '________________';
        const directorName = form.querySelector('[name="authorized_person_name"]').value || '________________';
        const din = form.querySelector('[name="din"]').value || '________________';
        const designation = form.querySelector('[name="designation"]').value || 'Director';
        const mortgageProperty = form.querySelector('[name="mortgage_property"]').value || '________________';
        const propertyArea = form.querySelector('[name="property_area"]').value || '________________';
        const place = form.querySelector('[name="state"]').value || '________________';

        // Update preview elements
        const elements = {
            'prevBusinessName': companyName,
            'prevCin': cin,
            'prevRegisterAddress': officeAddress,
            'prevMeetingDate': meetingDate ? formatDate(meetingDate) : '__________',
            'prevMeetingTime': meetingTime,
            'prevLoanAmount': loanAmount,
            'prevBankName': bankName,
            'prevBankBranch': bankBranch,
            'prevBranchAddress': branchAddress,
            'prevLoanPurpose': loanPurpose,
            'prevSanctionDate': sanctionDate ? formatDate(sanctionDate) : '________________',
            'prevSanctionDate2': sanctionDate ? formatDate(sanctionDate) : '________________',
            'prevRepaymentPeriod': repaymentPeriod,
            'prevInterestRate': interestRate,
            'prevMortgageProperty': mortgageProperty,
            'prevPropertyArea': propertyArea,
            'prevAuthPerson': directorName,
            'prevDin': din,
            'prevDesignation': designation,
            'footerCompanyName': companyName,
            'footerAuthPerson': directorName,
            'footerDesignation': designation,
            'footerDin': din,
            'footerPlace': place,
            'footerDate': meetingDate ? formatDate(meetingDate) : '________________'
        };

        // Update all elements
        Object.keys(elements).forEach(id => {
            const element = document.getElementById(id);
            if (element) {
                element.textContent = elements[id];
            }
        });

        updateStepIndicator();
    }

    function formatDate(dateString) {
        const date = new Date(dateString);
        return date.toLocaleDateString('en-IN', {
            day: '2-digit',
            month: '2-digit',
            year: 'numeric'
        }).replace(/\//g, '.');
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
<!--End Js Section -->

@endsection
