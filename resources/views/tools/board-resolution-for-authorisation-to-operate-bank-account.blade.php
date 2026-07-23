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
            <h1 class="hero-title">Board Resolution for <span> Authorisation to Operate Bank Account</span></h1>
            <p class="hero-subtitle">
                Generate a certified Board Resolution for Authorisation to Operate Bank Account in under 60 seconds.
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
            <h2 class="form-title">Enter Company & Bank Authorisation Details</h2>
            <p class="form-description">
                Fill in the details below to generate a Board Resolution for Authorisation to Operate Bank Account.
            </p>
        </div>

        <form id="bankAuthorizationForm" method="POST" action="{{route('br.bank.authorization') }}">
            @csrf

            <div class="form-grid">
                <!-- Company Details -->
                <div class="form-group full-width">
                    <label class="form-label">Company Name <span class="required">*</span></label>
                    <input type="text" name="business_name" class="form-control" placeholder="Enter company name" required>
                </div>
                <div class="form-group full-width">
                    <label class="form-label">CIN <span class="required">*</span></label>
                    <input type="text" name="cin" class="form-control" placeholder="Enter CIN" required>
                </div>
                <div class="form-group full-width">
                    <label class="form-label">Registered Office <span class="required">*</span></label>
                    <textarea name="register_address" class="form-control" placeholder="Enter registered office address" required></textarea>
                </div>
                <div class="form-group full-width">
                    <label class="form-label">Email <span class="required">*</span></label>
                    <input type="email" name="company_email" class="form-control" placeholder="Enter company email" required>
                </div>

                <!-- Meeting Details -->
                <div class="form-group full-width">
                    <h3 class="section-title">Meeting Details</h3>
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

                <!-- Bank Account Details -->
                <div class="form-group full-width">
                    <h3 class="section-title">Bank Account Details</h3>
                </div>
                <div class="form-group full-width">
                    <label class="form-label">Bank Name <span class="required">*</span></label>
                    <input type="text" name="bank_name" class="form-control" placeholder="Enter bank name" required>
                </div>
                <div class="form-group full-width">
                    <label class="form-label">Branch Name <span class="required">*</span></label>
                    <input type="text" name="branch_name" class="form-control" placeholder="Enter branch name" required>
                </div>
                <div class="form-group full-width">
                    <label class="form-label">Branch Address <span class="required">*</span></label>
                    <textarea name="branch_address" class="form-control" placeholder="Enter complete branch address" required></textarea>
                </div>

                <!-- Authorized Signatory for Bank Account -->
                <div class="form-group full-width">
                    <h3 class="section-title">Authorized Signatory for Bank Account</h3>
                </div>
                <div class="form-group full-width">
                    <label class="form-label">Authorized Signatory Name <span class="required">*</span></label>
                    <input type="text" name="authorized_signatory_name" class="form-control" placeholder="Enter full name" required>
                </div>
                <div class="form-group full-width">
                    <label class="form-label">Authorized Signatory Designation <span class="required">*</span></label>
                    <div class="select-wrapper">
                        <select name="authorized_signatory_designation" class="form-control form-select" required>
                            <option value="">Select designation</option>
                            <option value="Director">Director</option>
                            <option value="Managing Director">Managing Director</option>
                            <option value="Whole-Time Director">Whole-Time Director</option>
                            <option value="Company Secretary">Company Secretary</option>
                            <option value="Chief Financial Officer">Chief Financial Officer</option>
                            <option value="Finance Manager">Finance Manager</option>
                            <option value="Authorized Signatory">Authorized Signatory</option>
                        </select>
                    </div>
                </div>

                <!-- Authorized Signatory for Resolution -->
                <div class="form-group full-width">
                    <h3 class="section-title">Authorized Signatory for Resolution</h3>
                </div>
                <div class="form-row">
                    <div class="form-group">
                        <label class="form-label">Authorized Person Name <span class="required">*</span></label>
                        <input type="text" name="authorized_person_name" class="form-control" placeholder="Enter name" required>
                    </div>
                    <div class="form-group">
                        <label class="form-label">Designation <span class="required">*</span></label>
                        <div class="select-wrapper">
                            <select name="owner_director_partner" class="form-control form-select" required>
                                <option value="">Select designation</option>
                                <option value="Director">Director</option>
                                <option value="Managing Director">Managing Director</option>
                                <option value="Whole-Time Director">Whole-Time Director</option>
                                <option value="Chairperson">Chairperson</option>
                                <option value="Company Secretary">Company Secretary</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="form-group full-width">
                    <label class="form-label">DIN Number <span class="required">*</span></label>
                    <input type="text" name="din" class="form-control" placeholder="Enter DIN Number" required>
                </div>
                
                <!-- Place and Date -->
                <div class="form-row">
                    <div class="form-group">
                        <label class="form-label">Place <span class="required">*</span></label>
                        <input type="text" name="state" class="form-control" placeholder="City / Place" required>
                    </div>
                    <div class="form-group">
                        <label class="form-label">Resolution Date <span class="required">*</span></label>
                        <input type="date" name="resolution_sign_date" class="form-control" required>
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
                        <p class="preview-subtitle">Board Resolution for Authorisation to Operate Bank Account</p>
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
                    <p class="certificate-paragraph">
                        <strong id="prevBusinessName">________________</strong><br>
                        <strong>CIN: </strong><span id="prevCin">________________</span><br>
                        <strong>Registered Office: </strong><span id="prevAddress">________________</span><br>
                        <strong>Email: </strong><span id="prevEmail">________________</span>
                    </p>

                    <p class="certificate-paragraph" style="text-align: center;">
                        <strong>CERTIFIED TRUE COPY OF THE BOARD RESOLUTION</strong><br>
                        Passed at the Meeting of the Board of Directors of the Company<br>
                        Date of Meeting: <strong id="prevMeetingDate">__.__.______</strong><br>
                        Time: <strong id="prevMeetingTime">______</strong> (Hours)<br>
                        Venue: Registered Office of the Company
                    </p>

                    <p class="certificate-paragraph" style="text-align: center;">
                        <strong>SUBJECT: AUTHORISATION TO OPERATE BANK ACCOUNT AND INTERNET BANKING FACILITIES</strong>
                    </p>

                    <p class="certificate-paragraph">
                        <strong>"RESOLVED THAT</strong> a Current Account of the Company maintained in the name of M/s. 
                        <strong id="prevCompanyName2">________________</strong> with 
                        <strong id="prevBankName">__________</strong> (Name of the Bank), 
                        <strong id="prevBranchName">__________</strong> Branch, 
                        <strong id="prevBranchAddress">________________</strong> (Address of the Branch), be operated by the authorised signatory as specified herein, and the said Bank be instructed to honour all cheques, promissory notes, bills of exchange, and other negotiable instruments drawn, accepted, endorsed, or made on behalf of the Company.
                    </p>

                    <p class="certificate-paragraph">
                        <strong>RESOLVED FURTHER THAT</strong> Mr./Ms. 
                        <strong id="prevAuthSignatoryName">__________</strong> (Name of Authorised Signatory), 
                        <strong id="prevAuthSignatoryDesignation">__________</strong> (Designation), be and is hereby authorised to:
                    </p>

                    <ul class="certificate-list">
                        <li>Sign and execute all documents, forms, and declarations required for operating the bank account;</li>
                        <li>Operate the account including through internet banking and other digital channels;</li>
                        <li>Give instructions to the Bank relating to the said account, whether the account is in credit or overdrawn;</li>
                        <li>Accept receipts for money, deeds, securities, documents, or any indemnities on behalf of the Company.</li>
                    </ul>

                    <p class="certificate-paragraph">
                        <strong>RESOLVED FURTHER THAT</strong> the authority conferred upon the said authorised signatory shall remain valid and effective until revoked by the Board of Directors or until such person ceases to hold office with the Company, whichever occurs earlier.
                    </p>

                    <p class="certificate-paragraph">
                        <strong>RESOLVED FURTHER THAT</strong> consent be and is hereby accorded to furnish the specimen signature of Mr./Ms. 
                        <strong id="prevAuthSignatoryName2">__________</strong> (Name of Authorised Signatory) along with a certified true copy of this resolution to the said Bank for their records and necessary action.
                    </p>

                    <p class="certificate-paragraph">
                        <strong>RESOLVED FURTHER THAT</strong> any Director of the Company be and is hereby authorised to perform all such acts, deeds, matters, and things as may be necessary or expedient to give effect to the above resolutions."
                    </p>

                    <div class="certificate-signature">
                        <p class="signature-label">For <strong id="footerCompanyName">________________</strong></p>
                        <p class="signature-label">Signature: _________________________</p>
                        <p class="signature-label">Name: <strong id="footerAuthName">________________</strong></p>
                        <p class="signature-label">Designation: <strong id="footerAuthDesignation">________________</strong></p>
                        <p class="signature-label">DIN: <strong id="footerDIN">________________</strong></p>
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
            <h2 class="info-title">Board Resolution for Authorisation to Operate Bank Account</h2>
            <p class="info-subtitle">
                Professional Format Guide for Indian Companies
            </p>
        </div>

        <!-- Introduction -->
        <div class="info-content">
            <h3 class="info-subheading">Introduction</h3>

            <p class="info-text">
                A Board Resolution for Authorisation to Operate a Bank Account is a formal corporate
                document that empowers designated individuals to conduct banking transactions on
                behalf of the company. Under the Companies Act, 2013, companies are required to
                maintain proper authorisation records for all persons permitted to operate the
                company’s bank accounts.
            </p>

            <p class="info-text">
                This resolution identifies the authorised signatories and defines the scope of their
                banking powers, including cheque signing, fund transfers, internet banking
                operations, and execution of banking documents. It is essential for banks to verify
                the authority of individuals handling the company’s financial transactions and is
                commonly required when adding or changing signatories or enabling digital banking
                facilities.
            </p>

            <!-- Benefits -->
            <h3 class="info-subheading">Benefits of Using a Standard Format</h3>

            <p class="info-text">
                A professionally structured board resolution format ensures consistency with
                statutory requirements and banking norms. Using a ready-to-use template minimises
                drafting errors, saves administrative time, and ensures that all essential details
                are captured accurately.
            </p>

            <p class="info-text">
                Standardised formats also facilitate quicker processing by banks and reduce the risk
                of rejection due to incomplete or improper wording.
            </p>

            <!-- Relevance -->
            <h3 class="info-subheading">Relevance to Company Registration and Compliance</h3>

            <p class="info-text">
                After company registration, establishing banking facilities is one of the first
                operational requirements. The board resolution for authorisation to operate a bank
                account forms part of post-incorporation compliance documentation.
            </p>

            <p class="info-text">
                Banks require this resolution along with incorporation documents, PAN, and GST
                Registration Certificate (where applicable) before activating account operations.
                Maintaining such resolutions also supports statutory audits and reflects sound
                corporate governance practices.
            </p>
        </div>

        <!-- Sample Format -->
        <div class="format-section">
            <h3 class="format-title">
                Board Resolution for Authorisation to Operate Bank Account – Sample Format
            </h3>

            <p class="format-text"><strong>Company Name:</strong> ___________________________</p>
            <p class="format-text"><strong>CIN:</strong> ___________________________</p>
            <p class="format-text"><strong>Registered Office:</strong> ___________________________</p>
            <p class="format-text"><strong>Email:</strong> ___________________________</p>

            <p class="format-text">
                <strong>CERTIFIED TRUE COPY OF THE BOARD RESOLUTION</strong>
            </p>

            <p class="format-text">
                Passed at the Meeting of the Board of Directors of the Company
            </p>

            <p class="format-text"><strong>Date of Meeting:</strong> __.__.______</p>
            <p class="format-text"><strong>Time:</strong> ______ (Hours)</p>
            <p class="format-text"><strong>Venue:</strong> Registered Office of the Company</p>

            <p class="format-text">
                <strong>SUBJECT:</strong> AUTHORISATION TO OPERATE BANK ACCOUNT AND INTERNET BANKING
                FACILITIES
            </p>

            <p class="format-text">
                <strong>RESOLVED THAT</strong> the Current Account of the Company maintained with
                __________ (Name of the Bank), __________ Branch, be operated by the authorised
                signatory and that the Bank be instructed to honour all cheques, negotiable
                instruments, and banking instructions issued on behalf of the Company.
            </p>

            <p class="format-text">
                <strong>RESOLVED FURTHER THAT</strong> Mr./Ms. __________ (Name), __________
                (Designation), be and is hereby authorised to sign and execute all documents required
                for operating the bank account, operate the account including internet banking,
                issue instructions to the bank, and accept receipts, documents, or securities on
                behalf of the Company.
            </p>

            <p class="format-text">
                <strong>RESOLVED FURTHER THAT</strong> the authority conferred shall remain valid until
                revoked by the Board or until the authorised signatory ceases to hold office,
                whichever is earlier.
            </p>

            <p class="format-text">
                <strong>RESOLVED FURTHER THAT</strong> the specimen signature of the authorised
                signatory along with a certified true copy of this resolution be furnished to the
                Bank for its records.
            </p>

            <p class="format-text">
                <strong>RESOLVED FURTHER THAT</strong> any Director of the Company be authorised to do
                all such acts and deeds as may be necessary to give effect to this resolution.
            </p>

            <p class="format-text">
                For ___________________________ (Name of the Company)
            </p>

            <p class="format-text"><strong>Signature:</strong> ___________________________</p>
            <p class="format-text"><strong>Name:</strong> ___________________________</p>
            <p class="format-text"><strong>Designation:</strong> ___________________________</p>
            <p class="format-text"><strong>DIN:</strong> ___________________________</p>
        </div>

        <!-- FAQ -->
        <div class="faq-section">
            <h3 class="faq-title">Frequently Asked Questions</h3>

            <div class="faq-item">
                <h4 class="faq-question">
                    1. Can the resolution be passed without a board meeting?
                </h4>
                <p class="faq-answer">
                    Yes, if permitted by the Articles of Association, resolutions may be passed by
                    circulation with unanimous consent. However, banks generally prefer resolutions
                    passed at a duly convened board meeting.
                </p>
            </div>

            <div class="faq-item">
                <h4 class="faq-question">
                    2. Who can be appointed as an authorised signatory?
                </h4>
                <p class="faq-answer">
                    Any director, key managerial personnel, or authorised employee may be appointed
                    based on operational needs, subject to board approval.
                </p>
            </div>

            <div class="faq-item">
                <h4 class="faq-question">
                    3. Are there specific wording requirements?
                </h4>
                <p class="faq-answer">
                    The resolution should clearly specify bank details, authorised signatory details,
                    and the scope of powers. Banks may prescribe additional clauses.
                </p>
            </div>

            <div class="faq-item">
                <h4 class="faq-question">
                    4. Is professional certification mandatory?
                </h4>
                <p class="faq-answer">
                    Professional certification is not mandatory under law, but banks may require the
                    resolution to be certified by a director, company secretary, or practising
                    professional.
                </p>
            </div>

            <div class="faq-item">
                <h4 class="faq-question">
                    5. Who can certify the resolution to the bank?
                </h4>
                <p class="faq-answer">
                    Any director or the company secretary may certify the resolution as a true copy,
                    subject to bank requirements.
                </p>
            </div>

            <div class="faq-item">
                <h4 class="faq-question">
                    6. Is submission of the resolution to the bank mandatory?
                </h4>
                <p class="faq-answer">
                    Yes. Banks require a certified copy of the board resolution as part of KYC and
                    account operation documentation.
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
    const form = document.getElementById('bankAuthorizationForm');
    const downloadPdfBtn = document.getElementById('downloadPdfBtn');
    
    // Set default dates
    const today = new Date().toISOString().split('T')[0];
    const meetingDateInput = form.querySelector('[name="meeting_date"]');
    const resolutionDateInput = form.querySelector('[name="resolution_sign_date"]');
    const timeInput = form.querySelector('[name="meeting_time"]');
    
    if (meetingDateInput) {
        meetingDateInput.value = today;
    }
    if (resolutionDateInput) {
        resolutionDateInput.value = today;
    }
    if (timeInput) {
        timeInput.value = '11:00';
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
        const companyName = form.querySelector('[name="business_name"]').value || '________________';
        const cin = form.querySelector('[name="cin"]').value || '________________';
        const officeAddress = form.querySelector('[name="register_address"]').value || '________________';
        const email = form.querySelector('[name="company_email"]').value || '________________';
        
        // Meeting Details
        const meetingDate = form.querySelector('[name="meeting_date"]').value;
        const meetingTime = form.querySelector('[name="meeting_time"]').value || '11:00';
        
        // Bank Details
        const bankName = form.querySelector('[name="bank_name"]').value || '__________';
        const branchName = form.querySelector('[name="branch_name"]').value || '__________';
        const branchAddress = form.querySelector('[name="branch_address"]').value || '________________';
        
        // Authorized Signatory for Bank Account
        const authSignatoryName = form.querySelector('[name="authorized_signatory_name"]').value || '__________';
        const authSignatoryDesignation = form.querySelector('[name="authorized_signatory_designation"]').value || '__________';
        
        // Authorized Signatory for Resolution
        const authPerson = form.querySelector('[name="authorized_person_name"]').value || '________________';
        const designation = form.querySelector('[name="owner_director_partner"]').value || '________________';
        const din = form.querySelector('[name="din"]').value || '________________';
        const place = form.querySelector('[name="state"]').value || '________________';
        const resolutionDate = form.querySelector('[name="resolution_sign_date"]').value;

        // Update preview elements
        document.getElementById('prevBusinessName').textContent = companyName;
        document.getElementById('prevCompanyName2').textContent = companyName;
        document.getElementById('footerCompanyName').textContent = companyName;
        document.getElementById('prevCin').textContent = cin;
        document.getElementById('prevAddress').textContent = officeAddress;
        document.getElementById('prevEmail').textContent = email;
        
        // Format and update dates
        if (meetingDate) {
            const formattedMeetingDate = new Date(meetingDate).toLocaleDateString('en-IN', {
                day: '2-digit',
                month: '2-digit',
                year: 'numeric'
            }).replace(/\//g, '.');
            document.getElementById('prevMeetingDate').textContent = formattedMeetingDate;
        } else {
            document.getElementById('prevMeetingDate').textContent = '__.__.______';
        }
        
        document.getElementById('prevMeetingTime').textContent = meetingTime;
        
        // Bank details
        document.getElementById('prevBankName').textContent = bankName;
        document.getElementById('prevBranchName').textContent = branchName;
        document.getElementById('prevBranchAddress').textContent = branchAddress;
        
        // Authorized signatory details
        document.getElementById('prevAuthSignatoryName').textContent = authSignatoryName;
        document.getElementById('prevAuthSignatoryName2').textContent = authSignatoryName;
        document.getElementById('prevAuthSignatoryDesignation').textContent = authSignatoryDesignation;
        
        // Footer details
        document.getElementById('footerAuthName').textContent = authPerson;
        document.getElementById('footerAuthDesignation').textContent = designation;
        document.getElementById('footerDIN').textContent = din;
        document.getElementById('footerPlace').textContent = place;

        if (resolutionDate) {
            const formattedResDate = new Date(resolutionDate).toLocaleDateString('en-IN', {
                day: '2-digit',
                month: 'long',
                year: 'numeric'
            });
            document.getElementById('footerDate').textContent = formattedResDate;
        } else {
            document.getElementById('footerDate').textContent = '________________';
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
