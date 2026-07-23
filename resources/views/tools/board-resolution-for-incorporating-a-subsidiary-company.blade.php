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
            <h1 class="hero-title">Board Resolution for <span>  Incorporating a Subsidiary Company</span></h1>
            <p class="hero-subtitle">
                Generate a certifiedBoard Resolution for  Incorporating a Subsidiary Company in under 60 seconds.
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
            <h2 class="form-title">Enter Company & Subsidiary Details</h2>
            <p class="form-description">
                Fill in the details below to generate a Board Resolution for Incorporating a Subsidiary Company.
            </p>
        </div>

        <form id="subsidiaryForm" method="POST" action="{{route('br.subsidiary') }}">
            @csrf

            <div class="form-grid">
                <!-- Parent Company Details -->
                <div class="form-group full-width">
                    <label class="form-label">Parent Company Name <span class="required">*</span></label>
                    <input type="text" name="parent_company_name" class="form-control" placeholder="Enter parent company name" required>
                </div>
                <div class="form-group full-width">
                    <label class="form-label">Parent Company CIN <span class="required">*</span></label>
                    <input type="text" name="parent_cin" class="form-control" placeholder="Enter parent company CIN" required>
                </div>
                <div class="form-group full-width">
                    <label class="form-label">Parent Company Registered Office <span class="required">*</span></label>
                    <textarea name="parent_registered_office" class="form-control" placeholder="Enter registered office address" required></textarea>
                </div>
                <div class="form-group full-width">
                    <label class="form-label">Parent Company Email <span class="required">*</span></label>
                    <input type="email" name="parent_email" class="form-control" placeholder="Enter parent company email" required>
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

                <!-- Authorized Person 1 -->
                <div class="form-row">
                    <div class="form-group">
                        <label class="form-label">Authorized Person 1 Name <span class="required">*</span></label>
                        <input type="text" name="auth_person1_name" class="form-control" placeholder="Enter name" required>
                    </div>
                    <div class="form-group">
                        <label class="form-label">Authorized Person 1 Designation <span class="required">*</span></label>
                        <div class="select-wrapper">
                            <select name="auth_person1_designation" class="form-control form-select" required>
                                <option value="">Select designation</option>
                                <option value="Director">Director</option>
                                <option value="Managing Director">Managing Director</option>
                                <option value="Company Secretary">Company Secretary</option>
                            </select>
                        </div>
                    </div>
                </div>

                <!-- Authorized Person 2 -->
                <div class="form-row">
                    <div class="form-group">
                        <label class="form-label">Authorized Person 2 Name <span class="required">*</span></label>
                        <input type="text" name="auth_person2_name" class="form-control" placeholder="Enter name" required>
                    </div>
                    <div class="form-group">
                        <label class="form-label">Authorized Person 2 Designation <span class="required">*</span></label>
                        <div class="select-wrapper">
                            <select name="auth_person2_designation" class="form-control form-select" required>
                                <option value="">Select designation</option>
                                <option value="Director">Director</option>
                                <option value="Managing Director">Managing Director</option>
                                <option value="Company Secretary">Company Secretary</option>
                            </select>
                        </div>
                    </div>
                </div>

                <!-- Subsidiary Details -->
                <div class="form-group full-width">
                    <label class="form-label">Proposed Subsidiary Name <span class="required">*</span></label>
                    <input type="text" name="proposed_name" class="form-control" placeholder="Enter proposed name" required>
                </div>

                <div class="form-group full-width">
                    <label class="form-label">Alternate Subsidiary Name (Optional)</label>
                    <input type="text" name="alternate_name" class="form-control" placeholder="Enter alternate name">
                </div>

                <div class="form-row">
                    <div class="form-group">
                        <label class="form-label">Authorised Capital (Numbers) <span class="required">*</span></label>
                        <input type="text" name="authorised_capital_number" class="form-control" placeholder="e.g., 10000000" required>
                    </div>
                    <div class="form-group">
                        <label class="form-label">Authorised Capital (In Words) <span class="required">*</span></label>
                        <input type="text" name="authorised_capital_words" class="form-control" placeholder="e.g., One Crore Rupees" required>
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-group">
                        <label class="form-label">Number of Equity Shares <span class="required">*</span></label>
                        <input type="text" name="equity_shares" class="form-control" placeholder="e.g., 100000" required>
                    </div>
                    <div class="form-group">
                        <label class="form-label">Face Value per Share (₹) <span class="required">*</span></label>
                        <input type="text" name="face_value" class="form-control" placeholder="e.g., 10" required>
                    </div>
                </div>

                <!-- Main Objects -->
                <div class="form-group full-width">
                    <label class="form-label">Main Object 1 of Subsidiary <span class="required">*</span></label>
                    <input type="text" name="main_object1" class="form-control" placeholder="Enter main object" required>
                </div>
                <div class="form-group full-width">
                    <label class="form-label">Main Object 2 of Subsidiary</label>
                    <input type="text" name="main_object2" class="form-control" placeholder="Enter main object">
                </div>
                <div class="form-group full-width">
                    <label class="form-label">Main Object 3 of Subsidiary</label>
                    <input type="text" name="main_object3" class="form-control" placeholder="Enter main object">
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
                                <option value="Company Secretary">Company Secretary</option>
                                <option value="Managing Director">Managing Director</option>
                            </select>
                        </div>
                    </div>
                </div>

                <div class="form-group full-width">
                    <label class="form-label">Signatory DIN <span class="required">*</span></label>
                    <input type="text" name="signatory_din" class="form-control" placeholder="Enter signatory DIN" required>
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
                        <p class="preview-subtitle">Board Resolution for Incorporating a Subsidiary Company</p>
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
                        <p><strong id="prevParentCompanyName">________________</strong></p>
                        <p><strong>CIN: </strong><span id="prevParentCIN">________________</span></p>
                        <p><strong>Registered Office: </strong><span id="prevParentOffice">________________</span></p>
                        <p><strong>Email: </strong><span id="prevParentEmail">________________</span></p>
                    </div>

                    <p class="certificate-paragraph">
                        <strong>Date of Meeting: </strong><span id="prevMeetingDate">__________</span><br>
                        <strong>Time: </strong><span id="prevMeetingTime">______</span> (Hours)<br>
                        <strong>Venue: </strong><span id="prevMeetingVenue">Registered Office of the Company</span>
                    </p>

                    <p class="certificate-paragraph">
                        <strong>SUBJECT: INCORPORATION OF A SUBSIDIARY COMPANY</strong>
                    </p>

                    <p class="certificate-paragraph">
                        <strong>"RESOLVED THAT</strong> Mr./Ms. <span id="prevAuthPerson1Name">________________</span> (Name) and Mr./Ms. <span id="prevAuthPerson2Name">________________</span> (Name), <span id="prevAuthPerson1Designation">________________</span> of the Company, be and are hereby jointly and severally authorised to incorporate a company as a subsidiary of the Company under the provisions of the Companies Act, 2013, with the following particulars:
                    </p>

                    <p class="certificate-paragraph">
                        <strong>Proposed Name: </strong><span id="prevProposedName">________________</span><br>
                        (or) <strong>Alternate Name: </strong><span id="prevAlternateName">________________</span><br>
                        (whichever is made available by the Registrar of Companies)
                    </p>

                    <p class="certificate-paragraph">
                        <strong>Authorised Capital: </strong>Rs. <span id="prevCapitalNumber">________________</span> (Rupees <span id="prevCapitalWords">________________</span> only)<br>
                        <strong>Number of Equity Shares: </strong><span id="prevEquityShares">________________</span><br>
                        <strong>Face Value per Share: </strong>Rs. <span id="prevFaceValue">________________</span>
                    </p>

                    <p class="certificate-paragraph">
                        <strong>Main Objects of the Subsidiary Company:</strong><br>
                        1. <span id="prevMainObject1">________________</span><br>
                        2. <span id="prevMainObject2">________________</span><br>
                        3. <span id="prevMainObject3">________________</span>
                    </p>

                    <p class="certificate-paragraph">
                        The Articles of Association of the subsidiary company to be incorporated shall be in pari materia with those of the Company.
                    </p>

                    <p class="certificate-paragraph">
                        <strong>RESOLVED FURTHER THAT</strong> Mr./Ms. <span id="prevAuthPerson1NameFull">________________</span> (Name) and Mr./Ms. <span id="prevAuthPerson2NameFull">________________</span> (Name) be and are hereby jointly and severally authorised to do all acts, deeds, matters, and things necessary in connection with and incidental to the incorporation of the subsidiary aforesaid, including but not limited to:
                    </p>

                    <ul class="certificate-list">
                        <li>Filing necessary forms, applications, and documents with the Registrar of Companies;</li>
                        <li>Signing the Memorandum and Articles of Association of the subsidiary;</li>
                        <li>Subscribing to the shares of the subsidiary on behalf of the Company;</li>
                        <li>Executing such other documents and doing such other acts as may be required to give effect to this resolution.</li>
                    </ul>

                    <div class="certificate-signature">
                        <p>Certified to be a True Copy</p>
                        <p>For and on behalf of<br>
                        <strong id="footerParentCompanyName">________________</strong><br>
                        (Name of the Company)</p>
                        <p><strong>Signature:</strong> _________________________
                        <br><strong>Name:</strong> <span id="footerSignatoryName">________________</span>
                        <br><strong>Designation:</strong> <span id="footerDesignation">________________</span>
                        <br><strong>DIN:</strong> <span id="footerDIN">________________</span></p>
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
            <h2 class="info-title">Board Resolution for Incorporating a Subsidiary Company</h2>
            <p class="info-subtitle">
                Professional Format Guide for Company Registration & Expansion
            </p>
        </div>

        <!-- Introduction -->
        <div class="info-content">
            <h3 class="info-subheading">Introduction</h3>

            <p class="info-text">
                A Board Resolution for Incorporating a Subsidiary Company is a formal corporate
                document that records the consent of the Board of Directors to establish a new
                company as a subsidiary of the parent company. Under the Companies Act, 2013,
                a company becomes a subsidiary when the holding company controls more than
                half of its total voting power or controls the composition of its board.
            </p>

            <p class="info-text">
                Prior board approval is mandatory before initiating the incorporation process.
                This resolution authorises designated representatives to proceed with
                incorporation and specifies key details such as the proposed company name,
                authorised capital, share structure, and main objects. It is commonly used by
                companies expanding operations or segregating business activities.
            </p>

            <!-- Benefits -->
            <h3 class="info-subheading">Benefits of Using a Standard Format</h3>

            <p class="info-text">
                Using a professionally drafted board resolution format ensures that all
                statutory requirements are properly documented. A ready-to-use template
                saves time during board meetings, reduces the risk of procedural errors,
                and provides a consistent framework to capture incorporation details.
            </p>

            <p class="info-text">
                Standardised formats also facilitate smoother processing of Company
                Registration applications with the Registrar of Companies.
            </p>

            <!-- Relevance -->
            <h3 class="info-subheading">Relevance to Company Registration</h3>

            <p class="info-text">
                Incorporation of a subsidiary follows the standard Company Registration
                process under the Companies Act, 2013. The board resolution serves as
                documentary evidence that the holding company has formally authorised
                the incorporation.
            </p>

            <p class="info-text">
                During registration, the subsidiary’s Memorandum and Articles of Association,
                director appointments, and registered office details are filed with the ROC.
                Proper documentation of the parent company’s resolution establishes the
                holding–subsidiary relationship from inception.
            </p>
        </div>

        <!-- Sample Format -->
        <div class="format-section">
            <h3 class="format-title">
                Board Resolution for Incorporating a Subsidiary Company – Sample Format
            </h3>

            <p class="format-text"><strong>Company Name:</strong> _______________________________</p>
            <p class="format-text"><strong>CIN:</strong> _______________________________</p>
            <p class="format-text"><strong>Registered Office:</strong> _______________________________</p>
            <p class="format-text"><strong>Email:</strong> _______________________________</p>

            <p class="format-text"><strong>CERTIFIED TRUE COPY OF THE BOARD RESOLUTION</strong></p>

            <p class="format-text">
                Passed at the Meeting of the Board of Directors of the Company held on
                __________ (Date) at __________ (Time) at the Registered Office of the Company.
            </p>

            <p class="format-text">
                <strong>SUBJECT:</strong> Incorporation of a Subsidiary Company
            </p>

            <p class="format-text">
                <strong>RESOLVED THAT</strong> Mr./Ms. _______________________________ and
                Mr./Ms. _______________________________, _______________________________
                (Designation) of the Company, be and are hereby jointly and severally authorised
                to incorporate a company as a subsidiary of the Company under the provisions
                of the Companies Act, 2013 with the following particulars:
            </p>

            <p class="format-text"><strong>Proposed Name:</strong> _______________________________</p>
            <p class="format-text"><strong>Alternate Name:</strong> _______________________________</p>

            <p class="format-text">
                <strong>Authorised Capital:</strong> Rs. _______________________________
                (Rupees _______________________________ only)
            </p>

            <p class="format-text"><strong>Number of Equity Shares:</strong> _______________________________</p>
            <p class="format-text"><strong>Face Value per Share:</strong> Rs. _______________________________</p>

            <p class="format-text"><strong>Main Objects of the Subsidiary Company:</strong></p>
            <p class="format-text">1. _______________________________</p>
            <p class="format-text">2. _______________________________</p>
            <p class="format-text">3. _______________________________</p>

            <p class="format-text">
                The Articles of Association of the subsidiary company shall be in pari materia
                with those of the Company.
            </p>

            <p class="format-text">
                <strong>RESOLVED FURTHER THAT</strong> the authorised representatives be and are
                hereby empowered to file necessary forms with the Registrar of Companies,
                sign the Memorandum and Articles of Association, subscribe to shares on behalf
                of the Company, and do all such acts as may be required to give effect to this
                resolution.
            </p>

            <p class="format-text">
                For and on behalf of _______________________________ (Name of the Company)
            </p>

            <p class="format-text"><strong>Signature:</strong> _______________________________</p>
            <p class="format-text"><strong>Name:</strong> _______________________________</p>
            <p class="format-text"><strong>Designation:</strong> _______________________________</p>
            <p class="format-text"><strong>DIN:</strong> _______________________________</p>
        </div>

        <!-- FAQ -->
        <div class="faq-section">
            <h3 class="faq-title">Frequently Asked Questions</h3>

            <div class="faq-item">
                <h4 class="faq-question">
                    1. Who can sign the board resolution for incorporating a subsidiary company?
                </h4>
                <p class="faq-answer">
                    Any director or the company secretary may sign the certified true copy of
                    the resolution as authorised by the Board.
                </p>
            </div>

            <div class="faq-item">
                <h4 class="faq-question">
                    2. Is the signature of all directors mandatory?
                </h4>
                <p class="faq-answer">
                    No. The resolution is passed by a majority of directors present and voting
                    at a duly convened board meeting. Only an authorised signatory signs the
                    certified copy.
                </p>
            </div>

            <div class="faq-item">
                <h4 class="faq-question">
                    3. Is shareholder approval required for incorporating a subsidiary?
                </h4>
                <p class="faq-answer">
                    Generally, a board resolution is sufficient. However, shareholder approval
                    may be required if mandated by the Articles of Association or if investment
                    limits are exceeded.
                </p>
            </div>

            <div class="faq-item">
                <h4 class="faq-question">
                    4. Can the resolution be passed by circulation?
                </h4>
                <p class="faq-answer">
                    If permitted by the Articles, a resolution by circulation is possible.
                    However, for incorporation of a subsidiary, passing the resolution at a
                    board meeting is considered best practice.
                </p>
            </div>

            <div class="faq-item">
                <h4 class="faq-question">
                    5. Is professional certification mandatory?
                </h4>
                <p class="faq-answer">
                    No statutory professional certification is required for the resolution,
                    though incorporation forms may need certification by a practising
                    professional.
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

    const form = document.getElementById('subsidiaryForm');
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
        // Parent Company Details
        const parentCompanyName = form.querySelector('[name="parent_company_name"]').value || '________________';
        const parentCIN = form.querySelector('[name="parent_cin"]').value || '________________';
        const parentOffice = form.querySelector('[name="parent_registered_office"]').value || '________________';
        const parentEmail = form.querySelector('[name="parent_email"]').value || '________________';
        
        // Meeting Details
        const meetingDate = form.querySelector('[name="meeting_date"]').value;
        const meetingTime = form.querySelector('[name="meeting_time"]').value || '______';
        
        // Authorized Persons
        const authPerson1Name = form.querySelector('[name="auth_person1_name"]').value || '________________';
        const authPerson1Designation = form.querySelector('[name="auth_person1_designation"]').value || '________________';
        const authPerson2Name = form.querySelector('[name="auth_person2_name"]').value || '________________';
        const authPerson2Designation = form.querySelector('[name="auth_person2_designation"]').value || '________________';
        
        // Subsidiary Details
        const proposedName = form.querySelector('[name="proposed_name"]').value || '________________';
        const alternateName = form.querySelector('[name="alternate_name"]').value || '________________';
        const capitalNumber = form.querySelector('[name="authorised_capital_number"]').value || '________________';
        const capitalWords = form.querySelector('[name="authorised_capital_words"]').value || '________________';
        const equityShares = form.querySelector('[name="equity_shares"]').value || '________________';
        const faceValue = form.querySelector('[name="face_value"]').value || '________________';
        
        // Main Objects
        const mainObject1 = form.querySelector('[name="main_object1"]').value || '________________';
        const mainObject2 = form.querySelector('[name="main_object2"]').value || '________________';
        const mainObject3 = form.querySelector('[name="main_object3"]').value || '________________';
        
        // Signatory Details
        const signatoryName = form.querySelector('[name="signatory_name"]').value || '________________';
        const designation = form.querySelector('[name="signatory_designation"]').value || '________________';
        const signatoryDIN = form.querySelector('[name="signatory_din"]').value || '________________';

        // Update preview text
        document.getElementById('prevParentCompanyName').textContent = parentCompanyName;
        document.getElementById('prevParentCIN').textContent = parentCIN;
        document.getElementById('prevParentOffice').textContent = parentOffice;
        document.getElementById('prevParentEmail').textContent = parentEmail;
        document.getElementById('prevMeetingDate').textContent = meetingDate ? formatDate(meetingDate) : '__________';
        document.getElementById('prevMeetingTime').textContent = meetingTime;
        
        document.getElementById('prevAuthPerson1Name').textContent = authPerson1Name;
        document.getElementById('prevAuthPerson2Name').textContent = authPerson2Name;
        document.getElementById('prevAuthPerson1Designation').textContent = authPerson1Designation;
        document.getElementById('prevAuthPerson1NameFull').textContent = authPerson1Name;
        document.getElementById('prevAuthPerson2NameFull').textContent = authPerson2Name;
        
        document.getElementById('prevProposedName').textContent = proposedName;
        document.getElementById('prevAlternateName').textContent = alternateName;
        document.getElementById('prevCapitalNumber').textContent = capitalNumber;
        document.getElementById('prevCapitalWords').textContent = capitalWords;
        document.getElementById('prevEquityShares').textContent = equityShares;
        document.getElementById('prevFaceValue').textContent = faceValue;
        
        document.getElementById('prevMainObject1').textContent = mainObject1;
        document.getElementById('prevMainObject2').textContent = mainObject2;
        document.getElementById('prevMainObject3').textContent = mainObject3;
        
        document.getElementById('footerParentCompanyName').textContent = parentCompanyName;
        document.getElementById('footerSignatoryName').textContent = signatoryName;
        document.getElementById('footerDesignation').textContent = designation;
        document.getElementById('footerDIN').textContent = signatoryDIN;

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

    // Form submission handling
    form.addEventListener('submit', function(e) {
        e.preventDefault();
        
        const submitBtn = document.getElementById('downloadPdfBtn');
        const btnText = submitBtn.querySelector('.btn-text');
        const spinner = submitBtn.querySelector('.spinner');
        
        btnText.textContent = 'Generating Document...';
        spinner.classList.remove('d-none');
        submitBtn.disabled = true;
        
        // Submit the form
        this.submit();
    });
});
</script>
<!--End Js Section -->

@endsection
