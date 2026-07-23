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
            <h1 class="hero-title">Board Resolution for <span> Approval of Related Party Transactions</span></h1>
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

        <form id="relatedPartyForm" method="POST" action="{{route('br.related.party') }}">
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
                <div class="form-group full-width">
                    <label class="form-label">Venue <span class="required">*</span></label>
                    <input type="text" name="meeting_venue" class="form-control" placeholder="Enter meeting venue" required>
                </div>

                <!-- Shareholder Approval Required -->
                <div class="form-group full-width">
                    <h3 class="section-title">Shareholder Approval Requirements</h3>
                </div>
                <div class="form-group full-width">
                    <div class="checkbox-group">
                        <input type="checkbox" id="shareholder_approval" name="shareholder_approval" value="1">
                        <label for="shareholder_approval">Shareholder approval required?</label>
                    </div>
                </div>
                <div class="form-group full-width" id="approval_type_container" style="display: none;">
                    <label class="form-label">Type of Shareholder Resolution <span class="required">*</span></label>
                    <div class="select-wrapper">
                        <select name="shareholder_resolution_type" class="form-control form-select">
                            <option value="">Select resolution type</option>
                            <option value="ordinary resolution">Ordinary Resolution</option>
                            <option value="special resolution">Special Resolution</option>
                        </select>
                    </div>
                </div>

                <!-- Related Party Transaction Details -->
                <div class="form-group full-width">
                    <h3 class="section-title">Related Party Transaction Details</h3>
                </div>
                <div class="form-group full-width">
                    <label class="form-label">Name of Related Party <span class="required">*</span></label>
                    <input type="text" name="related_party_name" class="form-control" placeholder="Enter related party name" required>
                </div>
                <div class="form-group full-width">
                    <label class="form-label">Nature of Relationship <span class="required">*</span></label>
                    <textarea name="relationship_nature" class="form-control" placeholder="Describe the nature of relationship" required></textarea>
                </div>
                <div class="form-group full-width">
                    <label class="form-label">Nature of Transaction <span class="required">*</span></label>
                    <textarea name="transaction_nature" class="form-control" placeholder="Describe the nature of transaction" required></textarea>
                </div>

                <!-- Authorized Person for Register Maintenance -->
                <div class="form-group full-width">
                    <h3 class="section-title">Authorized Person for Register Maintenance</h3>
                </div>
                <div class="form-row">
                    <div class="form-group">
                        <label class="form-label">Authorized Person Name <span class="required">*</span></label>
                        <input type="text" name="register_authorized_name" class="form-control" placeholder="Enter name" required>
                    </div>
                    <div class="form-group">
                        <label class="form-label">Designation <span class="required">*</span></label>
                        <div class="select-wrapper">
                            <select name="register_authorized_designation" class="form-control form-select" required>
                                <option value="">Select designation</option>
                                <option value="Director">Director</option>
                                <option value="Company Secretary">Company Secretary</option>
                                <option value="Chief Financial Officer">Chief Financial Officer</option>
                                <option value="Compliance Officer">Compliance Officer</option>
                            </select>
                        </div>
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
                    <p class="certificate-paragraph">
                        <strong id="prevBusinessName">________________</strong><br>
                        <strong>CIN: </strong><span id="prevCin">________________</span><br>
                        <strong>Registered Office: </strong><span id="prevAddress">________________</span>
                    </p>

                    <p class="certificate-paragraph" style="text-align: center;">
                        <strong>CERTIFIED TRUE COPY OF THE BOARD RESOLUTION</strong><br>
                        Passed at the Meeting of the Board of Directors of the Company<br>
                        Date of Meeting: <strong id="prevMeetingDate">__.__.______</strong><br>
                        Time: <strong id="prevMeetingTime">______</strong> (Hours)<br>
                        Venue: <strong id="prevMeetingVenue">________________</strong>
                    </p>

                    <p class="certificate-paragraph" style="text-align: center;">
                        <strong>SUBJECT: APPROVAL OF CONTRACT/ARRANGEMENT WITH RELATED PARTY</strong>
                    </p>

                    <p class="certificate-paragraph">
                        <strong>"RESOLVED THAT</strong> pursuant to the provisions of Section 188 read with Rule 15 of the Companies (Meetings of Board and its Powers) Rules, 2014, and other applicable provisions of the Companies Act, 2013 and rules framed thereunder (including any statutory modification(s) or re-enactment thereof for the time being in force),
                    </p>

                    <p class="certificate-paragraph" id="prevShareholderApprovalText" style="display: none;">
                        <em>subject to the approval of the members of the Company by way of <strong id="prevResolutionType">________________</strong></em>
                    </p>

                    <p class="certificate-paragraph">
                        the consent of the Board of Directors be and is hereby accorded to enter into a contract/arrangement with:
                    </p>

                    <div class="certificate-details">
                        <p><strong>Name of Related Party: </strong><span id="prevRelatedParty">________________</span></p>
                        <p><strong>Nature of Relationship: </strong><span id="prevRelationship">________________</span></p>
                        <p><strong>Nature of Transaction: </strong><span id="prevTransaction">________________</span></p>
                    </div>

                    <p class="certificate-paragraph">
                        A copy of the proposed contract/arrangement has been placed before the meeting and initialled by the Chairman for identification purposes. The material terms and particulars are as set out in the agenda enclosed with the notice of this meeting.
                    </p>

                    <p class="certificate-paragraph">
                        <strong>RESOLVED FURTHER THAT</strong> pursuant to the provisions of Section 189 read with Rule 16 of the Companies (Meetings of Board and its Powers) Rules, 2014, and other applicable provisions of the Companies Act, 2013 and rules framed thereunder, Mr./Ms. 
                        <strong id="prevRegisterAuthName">__________</strong> [Name], 
                        <strong id="prevRegisterAuthDesignation">__________</strong> [Designation] of the Company be and is hereby authorised to:
                    </p>

                    <ul class="certificate-list">
                        <li>Make the necessary entries in the Register of Contracts or Arrangements in which Directors are Interested;</li>
                        <li>Authenticate the register and maintain proper records as required under the Act;</li>
                        <li>Execute all documents, deeds, and writings and perform all such acts as may be necessary to give effect to this resolution.</li>
                    </ul>

                    <p class="certificate-paragraph">
                        <strong>Certified to be a True Copy</strong>
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
            <h2 class="info-title">Board Resolution for Approval of Related Party Transactions</h2>
            <p class="info-subtitle">
                Professional Format Guide for Indian Companies
            </p>
        </div>

        <!-- Introduction -->
        <div class="info-content">
            <h3 class="info-subheading">Introduction</h3>

            <p class="info-text">
                A Board Resolution for Approval of Related Party Transactions is a formal corporate
                document that records the consent of the Board of Directors before the company
                enters into any contract or arrangement with a related party. Under the Companies
                Act, 2013, prior board approval is mandatory to ensure transparency, prevent
                conflicts of interest, and safeguard stakeholder interests.
            </p>

            <p class="info-text">
                Related parties include directors, key managerial personnel, their relatives, and
                entities in which they exercise significant influence or control. This resolution
                is essential for statutory compliance and is commonly reviewed during audits,
                regulatory filings, and disclosures in financial statements.
            </p>

            <!-- Benefits -->
            <h3 class="info-subheading">Benefits of Using a Standard Format</h3>

            <p class="info-text">
                Adopting a professionally drafted board resolution format ensures compliance with
                statutory requirements and reduces the likelihood of procedural errors. A
                standardised template saves time during board meetings and ensures that all legally
                mandated particulars are properly documented.
            </p>

            <p class="info-text">
                This approach minimises documentation gaps and facilitates smooth regulatory review
                during statutory audits or inspections.
            </p>

            <!-- Relevance -->
            <h3 class="info-subheading">Relevance to Statutory Compliance</h3>

            <p class="info-text">
                Proper documentation of related party transactions is a key component of ongoing
                compliance obligations. Companies registered under the Companies Act, 2013 must
                maintain accurate records for statutory audit purposes and annual return filings.
            </p>

            <p class="info-text">
                Where transaction values exceed prescribed thresholds, shareholder approval may
                also be required. Maintaining properly drafted board resolutions supports broader
                compliance requirements and reinforces sound corporate governance practices.
            </p>
        </div>

        <!-- Sample Format -->
        <div class="format-section">
            <h3 class="format-title">
                Board Resolution for Approval of Related Party Transactions – Sample Format
            </h3>

            <p class="format-text"><strong>Company Name:</strong> ___________________________</p>
            <p class="format-text"><strong>CIN:</strong> ___________________________</p>
            <p class="format-text"><strong>Registered Office:</strong> ___________________________</p>

            <p class="format-text">
                <strong>CERTIFIED TRUE COPY OF THE BOARD RESOLUTION</strong>
            </p>

            <p class="format-text">
                Passed at the Meeting of the Board of Directors of the Company
            </p>

            <p class="format-text"><strong>Date of Meeting:</strong> __.__.______</p>
            <p class="format-text"><strong>Time:</strong> ______ (Hours)</p>
            <p class="format-text"><strong>Venue:</strong> ___________________________</p>

            <p class="format-text">
                <strong>SUBJECT:</strong> APPROVAL OF CONTRACT / ARRANGEMENT WITH RELATED PARTY
            </p>

            <p class="format-text">
                <strong>RESOLVED THAT</strong> pursuant to the provisions of Section 188 read with
                Rule 15 of the Companies (Meetings of Board and its Powers) Rules, 2014, and other
                applicable provisions of the Companies Act, 2013 (including any statutory
                modifications or re-enactments thereof), the consent of the Board be and is hereby
                accorded to enter into a contract/arrangement with the related party as detailed
                below:
            </p>

            <p class="format-text"><strong>Name of Related Party:</strong> ___________________________</p>
            <p class="format-text"><strong>Nature of Relationship:</strong> ___________________________</p>
            <p class="format-text"><strong>Nature of Transaction:</strong> ___________________________</p>

            <p class="format-text">
                A copy of the proposed contract/arrangement has been placed before the meeting and
                initialled by the Chairman for identification. The material terms and particulars
                are as set out in the agenda enclosed with the notice of the meeting.
            </p>

            <p class="format-text">
                <strong>RESOLVED FURTHER THAT</strong> pursuant to Section 189 read with Rule 16 of
                the Companies (Meetings of Board and its Powers) Rules, 2014, Mr./Ms. __________
                (Name), __________ (Designation) be and is hereby authorised to make necessary
                entries in the Register of Contracts or Arrangements in which Directors are
                Interested and to maintain the same in compliance with the Act.
            </p>

            <p class="format-text">
                <strong>RESOLVED FURTHER THAT</strong> the authorised person be empowered to execute
                all documents and perform such acts as may be required to give effect to this
                resolution.
            </p>

            <p class="format-text">
                Certified to be a True Copy
            </p>

            <p class="format-text">
                For ___________________________ (Name of the Company)
            </p>

            <p class="format-text"><strong>Signature:</strong> ___________________________</p>
            <p class="format-text"><strong>Name:</strong> ___________________________</p>
            <p class="format-text"><strong>Designation:</strong> ___________________________</p>
            <p class="format-text"><strong>DIN:</strong> ___________________________</p>
            <p class="format-text"><strong>Date:</strong> ___________________________</p>
            <p class="format-text"><strong>Place:</strong> ___________________________</p>
        </div>

        <!-- FAQ -->
        <div class="faq-section">
            <h3 class="faq-title">Frequently Asked Questions</h3>

            <div class="faq-item">
                <h4 class="faq-question">
                    1. Is the signature of all directors mandatory?
                </h4>
                <p class="faq-answer">
                    No. The resolution is passed by a majority of directors present at the meeting.
                    Interested directors must abstain from voting. A certified copy may be signed
                    by an authorised director or the company secretary.
                </p>
            </div>

            <div class="faq-item">
                <h4 class="faq-question">
                    2. Does the resolution require professional certification?
                </h4>
                <p class="faq-answer">
                    Professional certification is not mandatory. However, certification by a
                    practising professional may be requested by auditors, banks, or regulators.
                </p>
            </div>

            <div class="faq-item">
                <h4 class="faq-question">
                    3. Should the resolution be printed on company letterhead?
                </h4>
                <p class="faq-answer">
                    While not legally mandatory, using company letterhead is considered good
                    corporate practice and helps with authenticity and audit verification.
                </p>
            </div>

            <div class="faq-item">
                <h4 class="faq-question">
                    4. Who can sign the certified copy?
                </h4>
                <p class="faq-answer">
                    Any authorised director or the company secretary may sign the certified copy.
                    Typically, the Chairman of the meeting signs board resolutions.
                </p>
            </div>

            <div class="faq-item">
                <h4 class="faq-question">
                    5. Is shareholder approval also required?
                </h4>
                <p class="faq-answer">
                    Shareholder approval is required only when transaction values exceed prescribed
                    thresholds or fall under specified categories, subject to the Companies Act
                    and SEBI regulations where applicable.
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
    const form = document.getElementById('relatedPartyForm');
    const downloadPdfBtn = document.getElementById('downloadPdfBtn');
    const shareholderApprovalCheckbox = document.getElementById('shareholder_approval');
    const approvalTypeContainer = document.getElementById('approval_type_container');
    
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

    // Toggle shareholder approval fields
    shareholderApprovalCheckbox.addEventListener('change', function() {
        if (this.checked) {
            approvalTypeContainer.style.display = 'block';
            approvalTypeContainer.querySelector('select').required = true;
        } else {
            approvalTypeContainer.style.display = 'none';
            approvalTypeContainer.querySelector('select').required = false;
        }
        updatePreview();
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
        // Company Details
        const companyName = form.querySelector('[name="business_name"]').value || '________________';
        const cin = form.querySelector('[name="cin"]').value || '________________';
        const officeAddress = form.querySelector('[name="register_address"]').value || '________________';
        
        // Meeting Details
        const meetingDate = form.querySelector('[name="meeting_date"]').value;
        const meetingTime = form.querySelector('[name="meeting_time"]').value || '11:00';
        const meetingVenue = form.querySelector('[name="meeting_venue"]').value || '________________';
        
        // Shareholder Approval
        const shareholderApproval = shareholderApprovalCheckbox.checked;
        const resolutionType = form.querySelector('[name="shareholder_resolution_type"]').value || '';
        
        // Related Party Transaction Details
        const relatedParty = form.querySelector('[name="related_party_name"]').value || '________________';
        const relationship = form.querySelector('[name="relationship_nature"]').value || '________________';
        const transaction = form.querySelector('[name="transaction_nature"]').value || '________________';
        
        // Register Authorized Person
        const registerAuthName = form.querySelector('[name="register_authorized_name"]').value || '__________';
        const registerAuthDesignation = form.querySelector('[name="register_authorized_designation"]').value || '__________';
        
        // Authorized Signatory
        const authPerson = form.querySelector('[name="authorized_person_name"]').value || '________________';
        const designation = form.querySelector('[name="owner_director_partner"]').value || '________________';
        const din = form.querySelector('[name="din"]').value || '________________';
        const place = form.querySelector('[name="state"]').value || '________________';
        const resolutionDate = form.querySelector('[name="resolution_sign_date"]').value;

        // Update preview elements
        document.getElementById('prevBusinessName').textContent = companyName;
        document.getElementById('footerCompanyName').textContent = companyName;
        document.getElementById('prevCin').textContent = cin;
        document.getElementById('prevAddress').textContent = officeAddress;
        document.getElementById('prevMeetingVenue').textContent = meetingVenue;
        
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
        
        // Shareholder approval text
        const shareholderApprovalText = document.getElementById('prevShareholderApprovalText');
        const resolutionTypeElement = document.getElementById('prevResolutionType');
        
        if (shareholderApproval && resolutionType) {
            shareholderApprovalText.style.display = 'block';
            resolutionTypeElement.textContent = resolutionType;
        } else {
            shareholderApprovalText.style.display = 'none';
        }
        
        // Related party details
        document.getElementById('prevRelatedParty').textContent = relatedParty;
        document.getElementById('prevRelationship').textContent = relationship;
        document.getElementById('prevTransaction').textContent = transaction;
        
        // Register authorized person
        document.getElementById('prevRegisterAuthName').textContent = registerAuthName;
        document.getElementById('prevRegisterAuthDesignation').textContent = registerAuthDesignation;
        
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
