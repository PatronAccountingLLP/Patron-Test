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
            <h1 class="hero-title">Board Resolution for <span>GST Registration</span></h1>
            <p class="hero-subtitle">
                Generate a certified Board Resolution for GST Registration in under 60 seconds.
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
            <h2 class="form-title">Enter Company & Authorisation Details</h2>
            <p class="form-description">
                Fill in the details below to generate a Board Resolution for GST Registration.
            </p>
        </div>

        <form id="gstRegistrationForm" method="POST" action="{{route('br.gst') }}">
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

                <!-- Authorised Signatory Details -->
                <div class="form-row">
                    <div class="form-group">
                        <label class="form-label">Authorised Signatory Name <span class="required">*</span></label>
                        <input type="text" name="authorized_person_name" class="form-control" placeholder="Enter full name" required>
                    </div>
                    <div class="form-group">
                        <label class="form-label">Designation <span class="required">*</span></label>
                        <div class="select-wrapper">
                            <select name="owner_director_partner" class="form-control form-select" required>
                                <option value="">Select designation</option>
                                <option value="Director">Director</option>
                                <option value="Managing Director">Managing Director</option>
                                <option value="Whole-Time Director">Whole-Time Director</option>
                                <option value="Company Secretary">Company Secretary</option>
                                <option value="Chief Financial Officer">Chief Financial Officer</option>
                                <option value="Finance Manager">Finance Manager</option>
                            </select>
                        </div>
                    </div>
                </div>

                <!-- Additional Details -->
                <div class="form-group full-width">
                    <label class="form-label">DIN Number <span class="required">*</span></label>
                    <input type="text" name="din" class="form-control" placeholder="Enter DIN Number" required>
                </div>

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
                        <p class="preview-subtitle">Board Resolution for GST Registration</p>
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
                        <strong>Registered Office Address: </strong><span id="prevAddress">________________</span>
                    </p>

                    <p class="certificate-paragraph">
                        <strong>CERTIFIED TRUE COPY OF THE BOARD RESOLUTION</strong><br>
                        Passed at the Meeting of the Board of Directors of the Company held on 
                        <strong id="prevMeetingDate">__________</strong> at 
                        <strong id="prevMeetingTime">__________</strong> at the Registered Office of the Company.
                    </p>

                    <p class="certificate-paragraph" style="text-align: center;">
                        <strong>AUTHORISATION FOR GST REGISTRATION AND COMPLIANCE</strong>
                    </p>

                    <p class="certificate-paragraph">
                        <strong>RESOLVED THAT</strong> Mr./Ms. 
                        <strong id="prevAuthPerson">________________</strong>,
                        <strong id="prevDesignation">________________</strong> of the Company,
                        be and is hereby appointed as the Authorised Signatory for the enrolment of the Company 
                        on the Goods and Services Tax (GST) System Portal and to sign and submit various documents 
                        electronically and/or physically, and to make registrations, communications, representations, 
                        modifications, or alterations on behalf of the Company before the Central GST and/or the 
                        concerned State GST authorities as and when required.
                    </p>

                    <p class="certificate-paragraph">
                        <strong>RESOLVED FURTHER THAT</strong> Mr./Ms. 
                        <strong id="prevAuthPerson2">________________</strong>,
                        <strong id="prevDesignation2">________________</strong> of the Company,
                        be and is hereby authorised to represent the Company and to take necessary actions on all 
                        Goods and Services Tax related matters, including but not limited to presenting documents 
                        and records on behalf of the Company, liaising and representing the Company for registration 
                        purposes, and making any alterations, additions, or corrections to the documents, papers, 
                        and forms filed with the GST authorities as and when required.
                    </p>

                    <p class="certificate-paragraph">
                        <strong>RESOLVED FURTHER THAT</strong> Mr./Ms. 
                        <strong id="prevAuthPerson3">________________</strong>,
                        <strong id="prevDesignation3">________________</strong> of the Company,
                        be and is hereby authorised on behalf of the Company to sign returns, documents, letters, 
                        correspondences, and other papers, and to represent the Company for assessments, appeals, 
                        refunds, or any other matters before the Goods and Services Tax authorities as and when required.
                    </p>

                    <p class="certificate-paragraph">
                        <strong>Certified True Copy</strong>
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
            <h2 class="info-title">Board Resolution for GST Registration</h2>
            <p class="info-subtitle">
                Professional Format Guide for Indian Companies
            </p>
        </div>

        <!-- Introduction -->
        <div class="info-content">
            <h3 class="info-subheading">Introduction</h3>

            <p class="info-text">
                A Board Resolution for GST Registration is a formal corporate document that authorises a designated person to complete the Goods and Services Tax (GST) registration formalities on behalf of a company. Under the GST regime, every business entity meeting the prescribed turnover threshold or engaged in specified activities is required to obtain GST registration. For companies incorporated under the Companies Act, 2013, the board must formally authorise an individual to act as the authorised signatory for all GST-related matters.
            </p>

            <p class="info-text">
                This resolution is essential when a company applies for new GST registration, adds additional places of business, or needs to designate an authorised signatory for the GST portal. It records the board's decision to appoint a specific person to enrol the company on the GST System Portal, sign and submit documents electronically or physically, file returns, represent the company before Central and State GST authorities, and handle all GST compliance matters. This resolution forms a mandatory supporting document for GST registration applications.
            </p>

            <!-- Benefits -->
            <h3 class="info-subheading">Benefits of Using a Standard Format</h3>

            <p class="info-text">
                Utilising a professionally drafted board resolution format ensures that all requirements of the GST registration process are comprehensively addressed. A standardised template reduces the likelihood of rejection due to incomplete documentation, maintains consistency in corporate records, and expedites the registration process. This supports timely compliance with GST regulations and avoids delays in obtaining GSTIN.
            </p>

            <!-- Relevance -->
            <h3 class="info-subheading">Relevance to GST Compliance</h3>

            <p class="info-text">
                GST Registration is a fundamental compliance requirement for businesses in India. Companies that have recently completed their Company Registration should prioritise obtaining GST registration if their aggregate turnover exceeds the prescribed threshold or if they are engaged in inter-state supplies, e-commerce activities, or other specified business categories. The board resolution appointing an authorised signatory enables the company to operate the GST portal, file returns, claim input tax credit, and ensure ongoing compliance with GST laws.
            </p>
        </div>

        <!-- Sample Format -->
        <div class="format-section">
            <h3 class="format-title">
                Board Resolution for GST Registration – Sample Format
            </h3>

            <p class="format-note">
                <em>[To be printed on Company Letterhead]</em>
            </p>

            <p class="format-text">
                <strong>Company Name:</strong> ___________________________
            </p>

            <p class="format-text">
                <strong>CIN:</strong> ___________________________
            </p>

            <p class="format-text">
                <strong>Registered Office Address:</strong> ___________________________
            </p>

            <p class="format-text">
                <strong>CERTIFIED TRUE COPY OF THE BOARD RESOLUTION</strong>
            </p>

            <p class="format-text">
                Passed at the Meeting of the Board of Directors of the Company held on _______________ (Date) at _______________ (Time) at the Registered Office of the Company
            </p>

            <p class="format-text">
                <strong>AUTHORISATION FOR GST REGISTRATION AND COMPLIANCE</strong>
            </p>

            <p class="format-text">
                RESOLVED THAT Mr./Ms. _______________ (Name), _______________ (Designation) of the Company, be and is hereby appointed as the Authorised Signatory for the enrolment of the Company on the Goods and Services Tax (GST) System Portal and to sign and submit various documents electronically and/or physically, and to make registrations, communications, representations, modifications, or alterations on behalf of the Company before the Central GST and/or the concerned State GST authorities as and when required.
            </p>

            <p class="format-text">
                RESOLVED FURTHER THAT Mr./Ms. _______________ (Name), _______________ (Designation) of the Company, be and is hereby authorised to represent the Company and to take necessary actions on all GST related matters, including presenting documents, liaising with authorities, and making any alterations or corrections to documents and forms filed with GST authorities.
            </p>

            <p class="format-text">
                RESOLVED FURTHER THAT Mr./Ms. _______________ (Name), _______________ (Designation) of the Company, be and is hereby authorised on behalf of the Company to sign returns, documents, letters, correspondences, and other papers, and to represent the Company for assessments, appeals, refunds, or any other matters before GST authorities as required.
            </p>

            <p class="format-text">
                Certified True Copy
            </p>

            <p class="format-text">
                For ___________________________ (Company Name)
            </p>

            <p class="format-text">
                <strong>Signature:</strong> ___________________________
            </p>

            <p class="format-text">
                <strong>Name:</strong> ___________________________
            </p>

            <p class="format-text">
                <strong>Designation:</strong> ___________________________
            </p>

            <p class="format-text">
                <strong>DIN:</strong> ___________________________
            </p>

            <p class="format-text">
                <strong>Date:</strong> ___________________________
            </p>

            <p class="format-text">
                <strong>Place:</strong> ___________________________
            </p>
        </div>

        <!-- FAQ -->
        <div class="faq-section">
            <h3 class="faq-title">Frequently Asked Questions</h3>

            <div class="faq-item">
                <h4 class="faq-question">
                    1. Can a board resolution for GST registration be passed without a physical or virtual board meeting?
                </h4>
                <p class="faq-answer">
                    Yes, if the company's Articles of Association permit, certain resolutions can be passed through circulation. For GST registration authorisation, which is routine, a resolution by circulation may be permissible. Check the company's Articles before proceeding.
                </p>
            </div>

            <div class="faq-item">
                <h4 class="faq-question">
                    2. Who can be considered as an authorized signatory for GST registration?
                </h4>
                <p class="faq-answer">
                    Any director, partner, or authorised person by the board. Typically, a director, Company Secretary, or senior management personnel such as CFO or Finance Manager. The person must have a valid PAN and be capable of GST compliance.
                </p>
            </div>

            <div class="faq-item">
                <h4 class="faq-question">
                    3. Is the Board resolution to be on company letterhead?
                </h4>
                <p class="faq-answer">
                    Strongly recommended. Using letterhead adds authenticity and professionalism. The GST portal expects documents to be submitted on letterhead.
                </p>
            </div>

            <div class="faq-item">
                <h4 class="faq-question">
                    4. Does the Board Resolution need professional certification?
                </h4>
                <p class="faq-answer">
                    Not mandatory. Typically certified by an authorised director or Company Secretary, but professional certification may add credibility.
                </p>
            </div>

            <div class="faq-item">
                <h4 class="faq-question">
                    5. Can a board resolution for GST registration be passed without convening a board meeting?
                </h4>
                <p class="faq-answer">
                    Yes, subject to the company's Articles of Association, resolutions can be passed by circulation. Majority of directors must approve, and records of circulation should be maintained.
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
    const form = document.getElementById('gstRegistrationForm');
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
        
        // Meeting Details
        const meetingDate = form.querySelector('[name="meeting_date"]').value;
        const meetingTime = form.querySelector('[name="meeting_time"]').value || '11:00 AM';
        
        // Authorized Signatory
        const authPerson = form.querySelector('[name="authorized_person_name"]').value || '________________';
        const designation = form.querySelector('[name="owner_director_partner"]').value || '________________';
        const din = form.querySelector('[name="din"]').value || '________________';
        const place = form.querySelector('[name="state"]').value || '________________';
        const resolutionDate = form.querySelector('[name="resolution_sign_date"]').value;

        // Update preview elements
        document.getElementById('prevBusinessName').textContent = companyName;
        document.getElementById('prevCin').textContent = cin;
        document.getElementById('prevAddress').textContent = officeAddress;
        
        if (meetingDate) {
            const formattedDate = new Date(meetingDate).toLocaleDateString('en-IN', {
                day: '2-digit',
                month: 'long',
                year: 'numeric'
            });
            document.getElementById('prevMeetingDate').textContent = formattedDate;
        } else {
            document.getElementById('prevMeetingDate').textContent = '__________';
        }
        
        document.getElementById('prevMeetingTime').textContent = meetingTime;
        
        // Update all three references to authorized person
        document.getElementById('prevAuthPerson').textContent = authPerson;
        document.getElementById('prevAuthPerson2').textContent = authPerson;
        document.getElementById('prevAuthPerson3').textContent = authPerson;
        document.getElementById('prevDesignation').textContent = designation;
        document.getElementById('prevDesignation2').textContent = designation;
        document.getElementById('prevDesignation3').textContent = designation;
        
        // Footer details
        document.getElementById('footerCompanyName').textContent = companyName;
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
