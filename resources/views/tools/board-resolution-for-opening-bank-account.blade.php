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
            <h1 class="hero-title">Board Resolution for <span> Opening a Bank Account</span></h1>
            <p class="hero-subtitle">
                Generate a certified Board Resolution for Opening a Bank Account in under 60 seconds.
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
            <h2 class="form-title">Enter Company & Bank Account Details</h2>
            <p class="form-description">
                Fill in the details below to generate a Board Resolution for Opening a Bank Account.
            </p>
        </div>

        <form id="bankAccountForm" method="POST" action="{{route('br.bank.account') }}">
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
                    <label class="form-label">Registered Office Address <span class="required">*</span></label>
                    <textarea name="register_address" class="form-control" placeholder="Enter registered office address" required></textarea>
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

                <!-- Bank Details -->
                <div class="form-group full-width">
                    <h3 class="section-title">Bank Account Details</h3>
                </div>
                <div class="form-group full-width">
                    <label class="form-label">Bank Name <span class="required">*</span></label>
                    <input type="text" name="bank_name" class="form-control" placeholder="Enter bank name" required>
                </div>
                <div class="form-row">
                    <div class="form-group">
                        <label class="form-label">Branch Name <span class="required">*</span></label>
                        <input type="text" name="branch_name" class="form-control" placeholder="Enter branch name" required>
                    </div>
                    <div class="form-group">
                        <label class="form-label">City/Location <span class="required">*</span></label>
                        <input type="text" name="bank_city" class="form-control" placeholder="Enter city" required>
                    </div>
                </div>

                <!-- Authorized Signatories for Account Operation -->
                <div class="form-group full-width">
                    <h3 class="section-title">Authorized Signatories for Bank Account</h3>
                </div>
                <div class="form-group full-width">
                    <label class="form-label">Authorized Person 1 Name <span class="required">*</span></label>
                    <input type="text" name="authorized_person1_name" class="form-control" placeholder="Enter full name" required>
                </div>
                <div class="form-group full-width">
                    <label class="form-label">Authorized Person 1 Designation <span class="required">*</span></label>
                    <div class="select-wrapper">
                        <select name="authorized_person1_designation" class="form-control form-select" required>
                            <option value="">Select designation</option>
                            <option value="Director">Director</option>
                            <option value="Managing Director">Managing Director</option>
                            <option value="Whole-Time Director">Whole-Time Director</option>
                            <option value="Company Secretary">Company Secretary</option>
                            <option value="Chief Financial Officer">Chief Financial Officer</option>
                        </select>
                    </div>
                </div>
                
                <div class="form-group full-width">
                    <label class="form-label">Authorized Person 2 Name <span class="required">*</span></label>
                    <input type="text" name="authorized_person2_name" class="form-control" placeholder="Enter full name" required>
                </div>
                <div class="form-group full-width">
                    <label class="form-label">Authorized Person 2 Designation <span class="required">*</span></label>
                    <div class="select-wrapper">
                        <select name="authorized_person2_designation" class="form-control form-select" required>
                            <option value="">Select designation</option>
                            <option value="Director">Director</option>
                            <option value="Managing Director">Managing Director</option>
                            <option value="Whole-Time Director">Whole-Time Director</option>
                            <option value="Company Secretary">Company Secretary</option>
                            <option value="Chief Financial Officer">Chief Financial Officer</option>
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
                        <p class="preview-subtitle">Board Resolution for Opening a Bank Account</p>
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
                    <h2 class="certificate-doc-title">CERTIFIED TRUE COPY OF THE RESOLUTION</h2>
                    <p class="certificate-doc-subtitle">
                        Passed at the Meeting of the Board of Directors of the Company
                    </p>
                </div>

                <div class="certificate-body">
                    <p class="certificate-paragraph" style="text-align: center;">
                        <strong>CERTIFIED TRUE COPY OF THE RESOLUTION</strong><br>
                        Passed at the Meeting of the Board of Directors of the Company<br>
                        Date of Meeting: <strong id="prevMeetingDate">__.__.______</strong><br>
                        Time: <strong id="prevMeetingTime">______</strong> (Hours)<br>
                        Venue: Registered Office of the Company
                    </p>

                    <p class="certificate-paragraph" style="text-align: center;">
                        <strong>SUBJECT: OPENING OF BANK ACCOUNT IN THE NAME OF THE COMPANY</strong>
                    </p>

                    <p class="certificate-paragraph">
                        <strong>"RESOLVED THAT</strong> pursuant to Section 42 and other applicable provisions of the Companies Act, 2013, and the rules framed thereunder (including any statutory modifications or re-enactments thereof for the time being in force), the approval of the Board of Directors be and is hereby accorded for the opening of a bank account with 
                        <strong id="prevBankName">__________</strong> (Name of Scheduled Bank) at 
                        <strong id="prevBranchName">__________</strong> Branch, 
                        <strong id="prevBankCity">__________</strong> (City/Location), for the purpose of receiving share application money, securities, adjusting amounts received towards allotment of securities, or otherwise for refund of share application money received from applicants under a Private Placement Offer of securities.
                    </p>

                    <p class="certificate-paragraph">
                        <strong>RESOLVED FURTHER THAT</strong> the monies received on account of share applications shall be utilised only for the following purposes:
                    </p>

                    <ul class="certificate-list">
                        <li>Adjustment against allotment of securities; or</li>
                        <li>Repayment of application money where the company is unable to allot securities.</li>
                    </ul>

                    <p class="certificate-paragraph">
                        <strong>RESOLVED FURTHER THAT</strong> Mr./Ms. 
                        <strong id="prevAuthPerson1Name">__________</strong> (Name), 
                        <strong id="prevAuthPerson1Designation">__________</strong> (Designation), and Mr./Ms. 
                        <strong id="prevAuthPerson2Name">__________</strong> (Name), 
                        <strong id="prevAuthPerson2Designation">__________</strong> (Designation) of the Company be and are hereby jointly and/or severally authorised to:
                    </p>

                    <ul class="certificate-list">
                        <li>Apply to the aforesaid bank for opening the said account;</li>
                        <li>Sign and execute all necessary application forms, agreements, and declarations;</li>
                        <li>Submit all requisite documents and papers as may be required by the bank; and</li>
                        <li>Perform all such acts, deeds, and things as may be necessary or expedient to give effect to this resolution."</li>
                    </ul>

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
            <h2 class="info-title">Board Resolution for Opening a Bank Account</h2>
            <p class="info-subtitle">
                Professional Format Guide for Indian Companies
            </p>
        </div>

        <!-- Introduction -->
        <div class="info-content">
            <h3 class="info-subheading">Introduction</h3>

            <p class="info-text">
                A Board Resolution for Opening a Bank Account is a formal document that records the
                decision of a company's Board of Directors to authorise the opening of a bank account
                in the name of the company. Under the Companies Act, 2013, every company must maintain
                a separate bank account for conducting its financial transactions. This resolution
                specifies the bank, branch, purpose of the account, and the authorised signatories.
            </p>

            <p class="info-text">
                This document is essential for statutory compliance and is commonly required during
                company registration, GST registration, and other regulatory filings. Banks require
                this resolution to verify that the Board has formally approved the opening of the
                account and to identify the persons authorised to operate it.
            </p>

            <!-- Benefits -->
            <h3 class="info-subheading">Benefits of Using a Standard Format</h3>

            <p class="info-text">
                Using a professionally drafted board resolution format saves time and ensures accuracy
                in documentation. A standardised template minimises the risk of errors, omissions, or
                non-compliance with legal requirements while maintaining the legal validity of the
                document.
            </p>

            <p class="info-text">
                It provides a reliable framework that can be customised as per banking requirements
                without compromising statutory compliance.
            </p>

            <!-- Relevance -->
            <h3 class="info-subheading">Relevance to Company and GST Registration</h3>

            <p class="info-text">
                Opening a company bank account is a key post-incorporation compliance requirement.
                After obtaining the Certificate of Incorporation, companies must file Form INC-20A
                within 180 days, declaring receipt of subscribed capital in a bank account held in
                the company’s name.
            </p>

            <p class="info-text">
                Similarly, during GST registration, proof of a business bank account may be required.
                Having a properly drafted board resolution and operational bank account ensures
                smoother compliance with registration and regulatory processes.
            </p>
        </div>

        <!-- Sample Format -->
        <div class="format-section">
            <h3 class="format-title">
                Board Resolution for Opening a Bank Account – Sample Format
            </h3>

            <p class="format-text">
                <strong>CERTIFIED TRUE COPY OF THE RESOLUTION</strong>
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
                <strong>SUBJECT:</strong> OPENING OF BANK ACCOUNT IN THE NAME OF THE COMPANY
            </p>

            <p class="format-text">
                <strong>RESOLVED THAT</strong> pursuant to Section 42 and other applicable provisions
                of the Companies Act, 2013 and the rules made thereunder, the consent of the Board of
                Directors be and is hereby accorded for opening a bank account with __________ (Name
                of Scheduled Bank) at __________ Branch, __________ (City/Location), for the purpose
                of receiving share application money, adjusting amounts towards allotment of
                securities, or refund of application money under private placement.
            </p>

            <p class="format-text">
                <strong>RESOLVED FURTHER THAT</strong> the monies received on account of share
                applications shall be utilised only for:
            </p>

            <p class="format-text">
                • Adjustment against allotment of securities; or
            </p>

            <p class="format-text">
                • Repayment of application money where securities cannot be allotted.
            </p>

            <p class="format-text">
                <strong>RESOLVED FURTHER THAT</strong> Mr./Ms. __________ (Name), __________
                (Designation), and Mr./Ms. __________ (Name), __________ (Designation), be and are
                hereby jointly and/or severally authorised to apply for opening the said bank account,
                sign all necessary forms and agreements, submit required documents, and perform all
                acts necessary to give effect to this resolution.
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
                    1. Can a Private Limited Company have more than one bank account?
                </h4>
                <p class="faq-answer">
                    Yes. A company can maintain multiple bank accounts for operational purposes such
                    as payroll, vendor payments, or investment receipts. Each account generally
                    requires a separate board resolution.
                </p>
            </div>

            <div class="faq-item">
                <h4 class="faq-question">
                    2. How does opening a bank account help in filing Form INC-20A?
                </h4>
                <p class="faq-answer">
                    Form INC-20A requires proof that subscribed share capital has been received in the
                    company’s bank account. A bank statement serves as evidence for this filing.
                </p>
            </div>

            <div class="faq-item">
                <h4 class="faq-question">
                    3. What documents are required to open a company bank account?
                </h4>
                <p class="faq-answer">
                    Documents include Certificate of Incorporation, MOA and AOA, Board Resolution,
                    PAN of the company, identity and address proof of directors, and authorised
                    signatory details. Banks may request additional documents.
                </p>
            </div>

            <div class="faq-item">
                <h4 class="faq-question">
                    4. How many directors are required to pass the resolution?
                </h4>
                <p class="faq-answer">
                    The quorum is one-third of the total strength or two directors, whichever is
                    higher, as per the Companies Act, 2013, subject to the Articles of Association.
                </p>
            </div>

            <div class="faq-item">
                <h4 class="faq-question">
                    5. Can a director withdraw money from the company bank account?
                </h4>
                <p class="faq-answer">
                    Only directors authorised through a board resolution can operate the bank
                    account. Unauthorised withdrawals may attract legal consequences.
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
    const form = document.getElementById('bankAccountForm');
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
        
        // Meeting Details
        const meetingDate = form.querySelector('[name="meeting_date"]').value;
        const meetingTime = form.querySelector('[name="meeting_time"]').value || '11:00';
        
        // Bank Details
        const bankName = form.querySelector('[name="bank_name"]').value || '__________';
        const branchName = form.querySelector('[name="branch_name"]').value || '__________';
        const bankCity = form.querySelector('[name="bank_city"]').value || '__________';
        
        // Authorized Persons for Account
        const authPerson1Name = form.querySelector('[name="authorized_person1_name"]').value || '__________';
        const authPerson1Designation = form.querySelector('[name="authorized_person1_designation"]').value || '__________';
        const authPerson2Name = form.querySelector('[name="authorized_person2_name"]').value || '__________';
        const authPerson2Designation = form.querySelector('[name="authorized_person2_designation"]').value || '__________';
        
        // Authorized Signatory
        const authPerson = form.querySelector('[name="authorized_person_name"]').value || '________________';
        const designation = form.querySelector('[name="owner_director_partner"]').value || '________________';
        const din = form.querySelector('[name="din"]').value || '________________';
        const place = form.querySelector('[name="state"]').value || '________________';
        const resolutionDate = form.querySelector('[name="resolution_sign_date"]').value;

        // Update preview elements
        document.getElementById('footerCompanyName').textContent = companyName;
        
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
        document.getElementById('prevBankCity').textContent = bankCity;
        
        // Authorized persons details
        document.getElementById('prevAuthPerson1Name').textContent = authPerson1Name;
        document.getElementById('prevAuthPerson1Designation').textContent = authPerson1Designation;
        document.getElementById('prevAuthPerson2Name').textContent = authPerson2Name;
        document.getElementById('prevAuthPerson2Designation').textContent = authPerson2Designation;
        
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
