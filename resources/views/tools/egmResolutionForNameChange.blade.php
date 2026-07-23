@extends('tools.tool-master')
@section('title')
{{_('EGM Resolution for Change of Name of Company')}}
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
            <h1 class="hero-title">EGM Resolution for <span>Change of Name of Company</span></h1>
            <p class="hero-subtitle">
                Generate a certified EGM Resolution for Change of Name of Company in under 60 seconds.
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
            <h2 class="form-title">Enter Company & Name Change Details</h2>
            <p class="form-description">
                Fill in the details below to generate an EGM Resolution for Change of Name of Company.
            </p>
        </div>

        <form id="nameChangeForm" method="POST" action="{{ route('egm.name.change') }}">
            @csrf

            <div class="form-grid">
                <!-- Company Details Section -->
                <div class="section-header">
                    <h3>Company Details</h3>
                </div>
                
                <div class="form-group full-width">
                    <label class="form-label">Current Company Name <span class="required">*</span></label>
                    <input type="text" name="company_name" class="form-control" placeholder="Enter current company name" required>
                </div>
                
                <div class="form-group full-width">
                    <label class="form-label">CIN (Corporate Identification Number) <span class="required">*</span></label>
                    <input type="text" name="cin" class="form-control" placeholder="Enter CIN" required>
                </div>
                
                <div class="form-group full-width">
                    <label class="form-label">Registered Office Address <span class="required">*</span></label>
                    <textarea name="registered_office" class="form-control" placeholder="Enter registered office address" required></textarea>
                </div>
                
                <!-- Meeting Details Section -->
                <div class="section-header">
                    <h3>EGM Meeting Details</h3>
                </div>
                
                <div class="form-row">
                    <div class="form-group">
                        <label class="form-label">EGM Date <span class="required">*</span></label>
                        <input type="date" name="meeting_date" class="form-control" required>
                    </div>

                    <div class="form-group">
                        <label class="form-label">Meeting Time <span class="required">*</span></label>
                        <input type="time" name="meeting_time" class="form-control" required>
                    </div>
                </div>
                
                <div class="form-group full-width">
                    <label class="form-label">Meeting Venue <span class="required">*</span></label>
                    <input type="text" name="meeting_venue" class="form-control" value="Registered Office of the Company" required>
                </div>
                
                <!-- Name Change Details Section -->
                <div class="section-header">
                    <h3>Name Change Details</h3>
                </div>
                
                <div class="form-group full-width">
                    <label class="form-label">Existing Name <span class="required">*</span></label>
                    <input type="text" name="existing_name" class="form-control" placeholder="Current name exactly as in Certificate of Incorporation" required>
                    <small class="form-help-text">Must match exactly with current Certificate of Incorporation</small>
                </div>
                
                <div class="form-group full-width">
                    <label class="form-label">Proposed New Name <span class="required">*</span></label>
                    <input type="text" name="proposed_new_name" class="form-control" placeholder="Enter proposed new company name" required>
                    <small class="form-help-text">Subject to approval by Central Registration Centre (CRC)</small>
                </div>
                
                <div class="form-group full-width">
                    <label class="form-label">Reason for Name Change</label>
                    <div class="radio-group vertical">
                        <label class="radio-label">
                            <input type="radio" name="change_reason" value="rebranding" checked>
                            <span class="radio-text">
                                <strong>Rebranding</strong><br>
                                <small>Change to reflect new brand identity</small>
                            </span>
                        </label>
                        <label class="radio-label">
                            <input type="radio" name="change_reason" value="business_diversification">
                            <span class="radio-text">
                                <strong>Business Diversification</strong><br>
                                <small>Change due to expansion into new business areas</small>
                            </span>
                        </label>
                        <label class="radio-label">
                            <input type="radio" name="change_reason" value="merger_acquisition">
                            <span class="radio-text">
                                <strong>Merger/Acquisition</strong><br>
                                <small>Change following merger or acquisition</small>
                            </span>
                        </label>
                        <label class="radio-label">
                            <input type="radio" name="change_reason" value="other">
                            <span class="radio-text">
                                <strong>Other Reason</strong><br>
                                <small>Any other valid reason for name change</small>
                            </span>
                        </label>
                    </div>
                </div>
                
                <!-- Authorized Signatory Section -->
                <div class="section-header">
                    <h3>Authorized Signatory Details</h3>
                </div>
                
                <div class="form-row">
                    <div class="form-group">
                        <label class="form-label">Authorized Director Name <span class="required">*</span></label>
                        <input type="text" name="authorized_director" class="form-control" placeholder="Enter authorized director name" required>
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
                    <label class="form-label">DIN (Director Identification Number) <span class="required">*</span></label>
                    <input type="text" name="din" class="form-control" placeholder="Enter DIN" required>
                </div>
                
                <!-- Additional Information -->
                <div class="section-header">
                    <h3>Additional Information</h3>
                </div>
                
                <div class="form-group full-width">
                    <label class="form-label">Place <span class="required">*</span></label>
                    <input type="text" name="place" class="form-control" placeholder="City / Place" required>
                </div>
                
                <div class="form-group full-width">
                    <label class="form-label">Date of Resolution <span class="required">*</span></label>
                    <input type="date" name="resolution_date" class="form-control" required>
                </div>
                
                <!-- Compliance Information -->
                <div class="form-group full-width">
                    <div class="compliance-info">
                        <p><strong>Important Notes:</strong></p>
                        <ul>
                            <li>Name availability must be checked through RUN (Reserve Unique Name) service</li>
                            <li>Form INC-24 must be filed with Central Registration Centre (CRC)</li>
                            <li>Fresh Certificate of Incorporation will be issued with new name</li>
                            <li>All statutory registrations must be updated after name change</li>
                        </ul>
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
                        <p class="preview-subtitle">EGM Resolution for Change of Name of Company</p>
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
                    <h2 class="certificate-doc-title">CERTIFIED TRUE COPY OF THE SPECIAL RESOLUTION</h2>
                    <p class="certificate-doc-subtitle">
                        Passed at the Extraordinary General Meeting (EGM) of the Members of the Company
                    </p>
                </div>

                <div class="certificate-body">
                    <div class="company-details">
                        <p><strong id="prevCompanyName">________________</strong></p>
                        <p><strong>CIN: </strong><span id="prevCin">________________</span></p>
                        <p><strong>Registered Office: </strong><span id="prevRegisteredOffice">________________</span></p>
                    </div>
                    
                    <p class="certificate-paragraph">
                        <strong>CERTIFIED TRUE COPY OF THE SPECIAL RESOLUTION</strong>
                    </p>
                    
                    <p class="certificate-paragraph">
                        Passed at the Extraordinary General Meeting (EGM) of the Members of the Company<br>
                        <strong>Date of Meeting: </strong><span id="prevMeetingDate">__.__.______</span><br>
                        <strong>Time: </strong><span id="prevMeetingTime">______</span> (Hours)<br>
                        <strong>Venue: </strong><span id="prevMeetingVenue">Registered Office of the Company at ________________</span>
                    </p>
                    
                    <p class="certificate-paragraph">
                        <strong>SUBJECT: CHANGE OF NAME OF THE COMPANY</strong>
                    </p>
                    
                    <p class="certificate-paragraph">
                        <strong>"RESOLVED THAT</strong> pursuant to the provisions of Section 13 and Section 14 read with Section 4(4) and other applicable provisions, if any, of the Companies Act, 2013 (including any statutory modification or amendment thereto or re-enactment thereof for the time being in force) and the Companies (Incorporation) Rules, 2014, and subject to the approval of the Registrar of Companies, Central Registration Centre (CRC), Ministry of Corporate Affairs, or any other authority as may be necessary, the approval of the Members be and is hereby accorded to change the existing name of the Company from:
                    </p>
                    
                    <div class="name-change-box">
                        <p><strong>Existing Name:</strong> "<span id="prevExistingName">________________________</span>"</p>
                        <p><strong>To</strong></p>
                        <p><strong>Proposed New Name:</strong> "<span id="prevProposedName">________________________</span>"</p>
                        <p><em>or any other name as may be approved by the Central Registration Centre (CRC), Ministry of Corporate Affairs.</em></p>
                    </div>
                    
                    <p class="certificate-paragraph">
                        <strong>RESOLVED FURTHER THAT</strong> consequent upon the change of name of the Company, the Memorandum of Association of the Company be and is hereby altered by substituting the existing Clause I (Name Clause) with the following new Clause I:
                    </p>
                    
                    <div class="clause-box">
                        <p><strong>"Clause I:</strong> The name of the Company shall be <strong><span id="prevClauseName">________________________</span></strong> (New Name of the Company)."</p>
                    </div>
                    
                    <p class="certificate-paragraph">
                        <strong>RESOLVED FURTHER THAT</strong> consequent upon the change of name of the Company, the Articles of Association of the Company be and is hereby altered by substituting all references to the existing name of the Company with the new name as approved:
                    </p>
                    
                    <div class="articles-box">
                        <p><strong>Existing Name:</strong> "<span id="prevArticlesExistingName">________________________</span>"</p>
                        <p><strong>New Name:</strong> "<span id="prevArticlesNewName">________________________</span>"</p>
                    </div>
                    
                    <p class="certificate-paragraph">
                        <strong>RESOLVED FURTHER THAT</strong> the Board of Directors of the Company be and are hereby authorised to:
                    </p>
                    
                    <ul class="resolution-list">
                        <li>Make necessary application in Form INC-24 for obtaining approval to the change of name from the Registrar of Companies, Central Registration Centre (CRC);</li>
                        <li>Apply for fresh name reservation through RUN (Reserve Unique Name) service, if required;</li>
                        <li>File amended Memorandum of Association and Articles of Association with the ROC;</li>
                        <li>Obtain fresh Certificate of Incorporation reflecting the new name of the Company;</li>
                        <li>Update the company name with all statutory authorities, banks, and other stakeholders;</li>
                        <li>Do all such acts, deeds, matters, and things as may be necessary, proper, or expedient to give effect to this resolution."</li>
                    </ul>
                    
                    <div class="signature-section">
                        <p>For <strong id="footerCompanyName">________________</strong></p>
                        <div class="signature-line">
                            <p><strong>Signature:</strong> _________________________</p>
                        </div>
                        <p><strong>Name:</strong> <span id="footerDirectorName">________________</span></p>
                        <p><strong>Designation:</strong> <span id="footerDesignation">________________</span></p>
                        <p><strong>DIN:</strong> <span id="footerDin">________________</span></p>
                        <p><strong>Place:</strong> <span id="footerPlace">________________</span></p>
                        <p><strong>Date:</strong> <span id="footerDate">__.__.______</span></p>
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
            <h2 class="info-title">EGM Resolution for Change of Name of Company</h2>
            <p class="info-subtitle">
                Professional Format Guide under Companies Act, 2013
            </p>
        </div>

        <!-- Introduction -->
        <div class="info-content">
            <h3 class="info-subheading">Introduction</h3>

            <p class="info-text">
                An EGM Resolution for Change of Name of Company is a formal corporate document that
                records the shareholders' decision to change the existing name of the company to a
                new name. Under Section 13 of the Companies Act, 2013, changing a company’s name
                requires approval of the shareholders through a special resolution passed at an
                Extraordinary General Meeting (EGM) or Annual General Meeting, followed by approval
                from the Registrar of Companies through the Central Registration Centre (CRC) of the
                Ministry of Corporate Affairs.
            </p>

            <p class="info-text">
                Companies may change their names for reasons such as rebranding, business
                diversification, merger or acquisition, or to reflect a change in business focus.
                The EGM resolution specifies the existing company name, proposed new name (subject
                to CRC approval), and authorises consequential amendments to the Memorandum of
                Association and Articles of Association. Prior to the EGM, the Board of Directors
                must pass a board resolution recommending the name change to shareholders.
            </p>

            <!-- Benefits -->
            <h3 class="info-subheading">Benefits of Using a Standard Format</h3>

            <p class="info-text">
                Utilising a professionally drafted EGM resolution format ensures that all statutory
                requirements under the Companies Act, 2013 and the Companies (Incorporation) Rules,
                2014 are properly addressed. A ready-to-use template saves time, reduces the risk of
                procedural errors, and provides a consistent framework for documenting shareholder
                approval.
            </p>

            <p class="info-text">
                Standardised formats facilitate smoother ROC filings and quicker approvals from the
                Central Registration Centre (CRC).
            </p>

            <!-- Relevance -->
            <h3 class="info-subheading">Relevance to Corporate Compliance</h3>

            <p class="info-text">
                Change of company name is a significant corporate event affecting the legal
                identity of the company. After Company Registration, any name change must follow
                the prescribed procedure including name availability check, board and shareholder
                approvals, and ROC filings.
            </p>

            <p class="info-text">
                Once approved, the company must update its name in all statutory records, bank
                accounts, GST Registration certificates, and other regulatory registrations. Form
                INC-24 must be filed with the Registrar of Companies for name change approval.
            </p>
        </div>

        <!-- Sample Format -->
        <div class="format-section">
            <h3 class="format-title">
                EGM Resolution for Change of Name of Company – Sample Format
            </h3>

            <p class="format-note">
                <em>[To be printed on Company Letterhead]</em>
            </p>

            <p class="format-text">
                <strong>Company Name:</strong> _______________________________
            </p>

            <p class="format-text">
                <strong>CIN:</strong> _______________________________
            </p>

            <p class="format-text">
                <strong>Registered Office:</strong> _______________________________
            </p>

            <p class="format-text">
                <strong>CERTIFIED TRUE COPY OF THE SPECIAL RESOLUTION</strong>
            </p>

            <p class="format-text">
                Passed at the Extraordinary General Meeting (EGM) of the Members of the Company
            </p>

            <p class="format-text">
                <strong>Date of Meeting:</strong> __.__.______ &nbsp;&nbsp;
                <strong>Time:</strong> ______ (Hours)
            </p>

            <p class="format-text">
                <strong>Venue:</strong> Registered Office of the Company at ________________________
            </p>

            <p class="format-text">
                <strong>Subject:</strong> Change of Name of the Company
            </p>

            <p class="format-text">
                <strong>RESOLVED THAT</strong> pursuant to the provisions of Section 13 and Section
                14 read with Section 4(4) and other applicable provisions of the Companies Act, 2013
                and the Companies (Incorporation) Rules, 2014, and subject to the approval of the
                Registrar of Companies, Central Registration Centre (CRC), the consent of the
                Members be and is hereby accorded to change the existing name of the Company from:
            </p>

            <p class="format-text">
                <strong>Existing Name:</strong> "________________________"
            </p>

            <p class="format-text">
                <strong>To</strong>
            </p>

            <p class="format-text">
                <strong>Proposed New Name:</strong> "________________________"
            </p>

            <p class="format-text">
                or any other name as may be approved by the Central Registration Centre (CRC),
                Ministry of Corporate Affairs.
            </p>

            <p class="format-text">
                <strong>RESOLVED FURTHER THAT</strong> upon approval of the name change, the
                Memorandum of Association of the Company be altered by substituting the existing
                Clause I (Name Clause) with the following:
            </p>

            <p class="format-text">
                "Clause I: The name of the Company shall be ________________________."
            </p>

            <p class="format-text">
                <strong>RESOLVED FURTHER THAT</strong> the Articles of Association of the Company be
                altered by substituting all references of the existing name with the new name as
                approved by the Registrar of Companies.
            </p>

            <p class="format-text">
                <strong>RESOLVED FURTHER THAT</strong> the Board of Directors be and are hereby
                authorised to file Form INC-24, apply for name reservation through RUN service if
                required, file amended MOA and AOA, obtain a fresh Certificate of Incorporation, and
                update the company name with all statutory authorities, banks, and stakeholders.
            </p>

            <p class="format-text">
                <strong>CERTIFIED TRUE COPY</strong>
            </p>

            <p class="format-text">
                For _______________________________ (Company Name)
            </p>

            <p class="format-text">
                <strong>Signature:</strong> _______________________________
            </p>

            <p class="format-text">
                <strong>Name:</strong> _______________________________
            </p>

            <p class="format-text">
                <strong>Designation:</strong> _______________________________
            </p>

            <p class="format-text">
                <strong>DIN:</strong> _______________________________
            </p>

            <p class="format-text">
                <strong>Date:</strong> _______________________________
            </p>

            <p class="format-text">
                <strong>Place:</strong> _______________________________
            </p>
        </div>

        <!-- FAQ -->
        <div class="faq-section">
            <h3 class="faq-title">Frequently Asked Questions</h3>

            <div class="faq-item">
                <h4 class="faq-question">
                    1. What is the EGM resolution format for changing the name of the company?
                </h4>
                <p class="faq-answer">
                    It is a special resolution passed by shareholders approving the change of
                    company name, referencing Sections 13 and 14 of the Companies Act, 2013,
                    amendments to MOA and AOA, and authorising filing of Form INC-24 with ROC.
                </p>
            </div>

            <div class="faq-item">
                <h4 class="faq-question">
                    2. How to write an EGM resolution for change of company name?
                </h4>
                <p class="faq-answer">
                    Include company details, meeting particulars, existing and proposed new name,
                    statutory references, amendments to MOA and AOA, and authorisation to directors
                    for ROC filings and obtaining a fresh Certificate of Incorporation.
                </p>
            </div>

            <div class="faq-item">
                <h4 class="faq-question">
                    3. Is the signature of all directors mandatory?
                </h4>
                <p class="faq-answer">
                    No. The resolution is passed by shareholders and the certified true copy may be
                    signed by one authorised director or the company secretary.
                </p>
            </div>

            <div class="faq-item">
                <h4 class="faq-question">
                    4. Is professional certification mandatory?
                </h4>
                <p class="faq-answer">
                    There is no statutory requirement for certification of the resolution itself.
                    However, Form INC-24 may require certification by a practising professional.
                </p>
            </div>

            <div class="faq-item">
                <h4 class="faq-question">
                    5. Should the EGM resolution be on company letterhead?
                </h4>
                <p class="faq-answer">
                    While not legally mandatory, preparing the resolution on company letterhead is
                    standard practice and recommended for ROC filings and official documentation.
                </p>
            </div>
        </div>

    </div>
</div>



    </div>
</div>

<!-- Start the Js section -->
 
<!--End Js Section -->

<!-- JavaScript Section -->
<script>
document.addEventListener('DOMContentLoaded', function () {
    const form = document.getElementById('nameChangeForm');
    const downloadPdfBtn = document.getElementById('downloadPdfBtn');
    
    // Set default dates
    const today = new Date();
    const meetingDateInput = form.querySelector('[name="meeting_date"]');
    const resolutionDateInput = form.querySelector('[name="resolution_date"]');
    
    if (meetingDateInput) {
        meetingDateInput.value = today.toISOString().split('T')[0];
    }
    
    if (resolutionDateInput) {
        resolutionDateInput.value = today.toISOString().split('T')[0];
    }
    
    // Set default time
    const timeInput = form.querySelector('[name="meeting_time"]');
    if (timeInput) {
        timeInput.value = '11:00';
    }
    
    // Set default venue
    const venueInput = form.querySelector('[name="meeting_venue"]');
    if (venueInput) {
        venueInput.value = 'Registered Office of the Company';
    }
    
    // Auto-fill existing name from company name
    const companyNameInput = form.querySelector('[name="company_name"]');
    const existingNameInput = form.querySelector('[name="existing_name"]');
    
    companyNameInput.addEventListener('blur', function() {
        if (companyNameInput.value && !existingNameInput.value) {
            existingNameInput.value = companyNameInput.value.trim();
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
        // Get form values
        const companyName = form.querySelector('[name="company_name"]').value || '________________';
        const cin = form.querySelector('[name="cin"]').value || '________________';
        const registeredOffice = form.querySelector('[name="registered_office"]').value || '________________';
        const meetingDate = form.querySelector('[name="meeting_date"]').value;
        const meetingTime = form.querySelector('[name="meeting_time"]').value || '______';
        const meetingVenue = form.querySelector('[name="meeting_venue"]').value || 'Registered Office of the Company at ________________';
        const existingName = form.querySelector('[name="existing_name"]').value || '________________________';
        const proposedName = form.querySelector('[name="proposed_new_name"]').value || '________________________';
        const authorizedDirector = form.querySelector('[name="authorized_director"]').value || '________________';
        const designation = form.querySelector('[name="designation"]').value || '________________';
        const din = form.querySelector('[name="din"]').value || '________________';
        const place = form.querySelector('[name="place"]').value || '________________';
        const resolutionDate = form.querySelector('[name="resolution_date"]').value;

        // Update preview elements
        const updateElement = (id, text) => {
            const el = document.getElementById(id);
            if (el) el.textContent = text;
        };

        updateElement('prevCompanyName', companyName);
        updateElement('prevCin', cin);
        updateElement('prevRegisteredOffice', registeredOffice);
        updateElement('prevMeetingVenue', meetingVenue);
        updateElement('prevExistingName', existingName);
        updateElement('prevProposedName', proposedName);
        updateElement('prevClauseName', proposedName);
        updateElement('prevArticlesExistingName', existingName);
        updateElement('prevArticlesNewName', proposedName);
        updateElement('footerCompanyName', companyName);
        updateElement('footerDirectorName', authorizedDirector);
        updateElement('footerDesignation', designation);
        updateElement('footerDin', din);
        updateElement('footerPlace', place);

        // Format dates
        if (meetingDate) {
            const formattedMeetingDate = new Date(meetingDate).toLocaleDateString('en-IN', {
                day: '2-digit',
                month: '2-digit',
                year: 'numeric'
            }).replace(/\//g, '.');
            updateElement('prevMeetingDate', formattedMeetingDate);
        } else {
            updateElement('prevMeetingDate', '__.__.______');
        }

        if (resolutionDate) {
            const formattedResolutionDate = new Date(resolutionDate).toLocaleDateString('en-IN', {
                day: '2-digit',
                month: '2-digit',
                year: 'numeric'
            }).replace(/\//g, '.');
            updateElement('footerDate', formattedResolutionDate);
        } else {
            updateElement('footerDate', '__.__.______');
        }

        if (meetingTime) {
            updateElement('prevMeetingTime', meetingTime);
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
@endsection
