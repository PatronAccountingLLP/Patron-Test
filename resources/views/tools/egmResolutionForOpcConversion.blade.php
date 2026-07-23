@extends('tools.tool-master')
@section('title')
{{_('EGM Resolution for Conversion of OPC into Private Limited Company')}}
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
            <h1 class="hero-title">EGM Resolution for Conversion of <span>OPC into Private Limited Company</span></h1>
            <p class="hero-subtitle">
                Generate a certified EGM Resolution for Conversion of OPC into Private Limited Company in under 60 seconds.
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
            <h2 class="form-title">Enter Company & Resolution Details</h2>
            <p class="form-description">
                Fill in the details below to generate an EGM Resolution for Conversion of OPC into Private Limited Company.
            </p>
        </div>

        <form id="opcConversionForm" method="POST" action="{{ route('egm.opc.conversion') }}">
            @csrf

            <div class="form-grid">
                <!-- Company Details Section -->
                <div class="section-header">
                    <h3>Company Details</h3>
                </div>
                
                <div class="form-group full-width">
                    <label class="form-label">Current Company Name (OPC) <span class="required">*</span></label>
                    <input type="text" name="company_name" class="form-control" placeholder="Enter current OPC company name" required>
                </div>
                
                <div class="form-group full-width">
                    <label class="form-label">CIN (Corporate Identification Number) <span class="required">*</span></label>
                    <input type="text" name="cin" class="form-control" placeholder="Enter CIN" required>
                </div>
                
                <div class="form-group full-width">
                    <label class="form-label">Registered Office Address <span class="required">*</span></label>
                    <textarea name="registered_office" class="form-control" placeholder="Enter registered office address" required></textarea>
                </div>
                
                <div class="form-group full-width">
                    <label class="form-label">Company Email <span class="required">*</span></label>
                    <input type="email" name="company_email" class="form-control" placeholder="Enter company email" required>
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
                
                <!-- Conversion Details Section -->
                <div class="section-header">
                    <h3>Conversion Details</h3>
                </div>
                
                <div class="form-group full-width">
                    <label class="form-label">Existing Name (OPC) <span class="required">*</span></label>
                    <input type="text" name="existing_opc_name" class="form-control" placeholder="e.g., ABC Traders (OPC) Private Limited" required>
                    <small class="form-help-text">Enter the current name exactly as it appears in Certificate of Incorporation</small>
                </div>
                
                <div class="form-group full-width">
                    <label class="form-label">Proposed New Name (Private Limited) <span class="required">*</span></label>
                    <input type="text" name="proposed_private_name" class="form-control" placeholder="e.g., ABC Traders Private Limited" required>
                    <small class="form-help-text">Remove '(OPC)' from the name. Subject to ROC approval</small>
                </div>
                
                <!-- Authorized Signatory Section -->
                <div class="section-header">
                    <h3>Authorized Signatory Details</h3>
                </div>
                
                <div class="form-row">
                    <div class="form-group">
                        <label class="form-label">Director/Member Name <span class="required">*</span></label>
                        <input type="text" name="authorized_director" class="form-control" placeholder="Enter director/member name" required>
                    </div>

                    <div class="form-group">
                        <label class="form-label">Designation <span class="required">*</span></label>
                        <div class="select-wrapper">
                            <select name="designation" class="form-control form-select" required>
                                <option value="">Select designation</option>
                                <option value="Director">Director</option>
                                <option value="Sole Director and Member">Sole Director and Member</option>
                                <option value="Managing Director">Managing Director</option>
                            </select>
                        </div>
                    </div>
                </div>
                
                <div class="form-group full-width">
                    <label class="form-label">DIN (Director Identification Number) <span class="required">*</span></label>
                    <input type="text" name="din" class="form-control" placeholder="Enter DIN" required>
                </div>
                
                <div class="form-group full-width">
                    <label class="form-label">Place <span class="required">*</span></label>
                    <input type="text" name="place" class="form-control" placeholder="City / Place" required>
                </div>
                
                <!-- Conversion Reason (Optional) -->
                <div class="form-group full-width">
                    <label class="form-label">Reason for Conversion (Optional)</label>
                    <div class="radio-group">
                        <label class="radio-label">
                            <input type="radio" name="conversion_reason" value="voluntary" checked>
                            <span class="radio-text">Voluntary Conversion</span>
                        </label>
                        <label class="radio-label">
                            <input type="radio" name="conversion_reason" value="mandatory">
                            <span class="radio-text">Mandatory Conversion (Exceeded thresholds)</span>
                        </label>
                    </div>
                    <small class="form-help-text">Mandatory if paid-up capital > ₹50 lakhs OR turnover > ₹2 crores</small>
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
                        <p class="preview-subtitle">EGM Resolution for Conversion of OPC into Private Limited Company</p>
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
                        <p><strong>Email: </strong><span id="prevEmail">________________</span></p>
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
                        <strong>SUBJECT: CONVERSION OF ONE PERSON COMPANY INTO PRIVATE LIMITED COMPANY</strong>
                    </p>
                    
                    <p class="certificate-paragraph">
                        <strong>"RESOLVED THAT</strong> pursuant to the provisions of Section 18 read with Section 13 and Section 14 and other applicable provisions, if any, of the Companies Act, 2013 (including any statutory modification or amendment thereto or re-enactment thereof for the time being in force) and the Companies (Incorporation) Rules, 2014, and subject to the approval of the Registrar of Companies or any other authority as may be necessary, the consent of the Member(s) be and is hereby accorded for the conversion of the Company from a One Person Company (OPC) into a Private Limited Company.
                    </p>
                    
                    <p class="certificate-paragraph">
                        <strong>RESOLVED FURTHER THAT</strong> consequent upon the conversion of the Company into a Private Limited Company, Clause I (Name Clause) of the Memorandum of Association of the Company be and is hereby altered by substituting the existing clause with the following new clause:
                    </p>
                    
                    <div class="clause-box">
                        <p><strong>Existing Name:</strong> "<span id="prevExistingName">________________________ (OPC) Private Limited</span>"</p>
                        <p><strong>To be substituted with:</strong></p>
                        <p><strong>New Name:</strong> "<span id="prevProposedName">________________________ Private Limited</span>"</p>
                        <p><em>or such other name as may be approved by the Registrar of Companies.</em></p>
                    </div>
                    
                    <p class="certificate-paragraph">
                        <strong>RESOLVED FURTHER THAT</strong> consequent upon the conversion of the Company into a Private Limited Company, the Articles of Association of the Company be and are hereby altered in the manner following:
                    </p>
                    
                    <ul class="resolution-list">
                        <li>The name of the Company wherever appearing in the Articles of Association be changed from the existing name to the new name as approved;</li>
                        <li>All clauses specific to One Person Company be suitably amended or deleted as required for a Private Limited Company;</li>
                        <li>All other consequential amendments necessary for the conversion be made in accordance with the Companies Act, 2013.</li>
                    </ul>
                    
                    <p class="certificate-paragraph">
                        <strong>RESOLVED FURTHER THAT</strong> the Board of Directors of the Company be and are hereby authorised to:
                    </p>
                    
                    <ul class="resolution-list">
                        <li>Make necessary application in Form INC-6 for obtaining approval for the conversion from the Registrar of Companies;</li>
                        <li>File amended Memorandum of Association and Articles of Association with the ROC;</li>
                        <li>Appoint additional director(s) and allot shares to new member(s) as required for a Private Limited Company;</li>
                        <li>Obtain fresh Certificate of Incorporation reflecting the conversion;</li>
                        <li>Update the company details with all statutory authorities, banks, and other stakeholders;</li>
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
            <h2 class="info-title">EGM Resolution for Conversion of OPC into Private Limited Company</h2>
            <p class="info-subtitle">
                Professional Format Guide for Indian Companies
            </p>
        </div>

        <!-- Introduction -->
        <div class="info-content">
            <h3 class="info-subheading">Introduction</h3>

            <p class="info-text">
                An EGM Resolution for Conversion of OPC into Private Limited Company is a formal
                corporate document that records the member’s approval for converting a One Person
                Company (OPC) into a Private Limited Company. Under Section 18 of the Companies Act,
                2013 read with Sections 13 and 14 and the Companies (Incorporation) Rules, 2014, an
                OPC may voluntarily convert itself into a Private Limited Company by passing a
                special resolution and filing the prescribed forms with the Registrar of Companies.
            </p>

            <p class="info-text">
                Conversion becomes mandatory when the OPC exceeds the prescribed paid-up share
                capital threshold (currently Rs. 50 lakhs) or average annual turnover threshold
                (currently Rs. 2 crores) during the immediately preceding three consecutive
                financial years. The EGM resolution authorises the conversion, approves amendments
                to the Memorandum of Association and Articles of Association, and empowers the Board
                to file Form INC-6 with the ROC. After conversion, the company must have a minimum of
                two directors and two shareholders.
            </p>

            <!-- Benefits -->
            <h3 class="info-subheading">Benefits of Using a Standard Format</h3>

            <p class="info-text">
                Using a professionally drafted EGM resolution format ensures that all statutory
                requirements under the Companies Act, 2013 and the Companies (Incorporation) Rules,
                2014 are properly complied with. A ready-to-use template saves time during the
                conversion process and reduces the risk of procedural or compliance-related
                errors.
            </p>

            <p class="info-text">
                Standardised formats also ensure consistency in documentation and facilitate
                smoother ROC filings and approval processes.
            </p>

            <!-- Relevance -->
            <h3 class="info-subheading">Relevance to Business Transition</h3>

            <p class="info-text">
                Conversion from an OPC to a Private Limited Company represents a significant
                business transition that alters the company’s legal structure and governance
                framework. Businesses may choose to convert upon growth or when they intend to
                induct additional shareholders and directors.
            </p>

            <p class="info-text">
                Post conversion, the company must update statutory registrations including GST,
                bank accounts, and other regulatory records to reflect the new company name and
                structure. Filing of Form INC-6 with the ROC is mandatory for completing the
                conversion process.
            </p>
        </div>

        <!-- Sample Format -->
        <div class="format-section">
            <h3 class="format-title">
                EGM Resolution for Conversion of OPC into Private Limited Company – Sample Format
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
                <strong>Email:</strong> _______________________________
            </p>

            <p class="format-text">
                <strong>CERTIFIED TRUE COPY OF THE SPECIAL RESOLUTION</strong>
            </p>

            <p class="format-text">
                Passed at the Extraordinary General Meeting (EGM) of the Members of the Company
                held on __.__.______ at ______ (Hours) at the Registered Office of the Company
                situated at ________________________
            </p>

            <p class="format-text">
                <strong>SUBJECT:</strong> Conversion of One Person Company into Private Limited Company
            </p>

            <p class="format-text">
                <strong>RESOLVED THAT</strong> pursuant to the provisions of Section 18 read with
                Sections 13 and 14 and other applicable provisions of the Companies Act, 2013 and
                the Companies (Incorporation) Rules, 2014, and subject to the approval of the
                Registrar of Companies or any other authority, the consent of the Member(s) be and
                is hereby accorded for the conversion of the Company from a One Person Company
                (OPC) into a Private Limited Company.
            </p>

            <p class="format-text">
                <strong>RESOLVED FURTHER THAT</strong> consequent upon the conversion, Clause I
                (Name Clause) of the Memorandum of Association be and is hereby altered by
                substituting the existing name with the following:
            </p>

            <p class="format-text">
                <strong>Existing Name:</strong> "________________________ (OPC) Private Limited"<br>
                <strong>New Name:</strong> "________________________ Private Limited" or such other
                name as may be approved by the Registrar of Companies.
            </p>

            <p class="format-text">
                <strong>RESOLVED FURTHER THAT</strong> the Articles of Association of the Company be
                and are hereby altered to remove clauses specific to One Person Company and to
                incorporate provisions applicable to a Private Limited Company in accordance with
                the Companies Act, 2013.
            </p>

            <p class="format-text">
                <strong>RESOLVED FURTHER THAT</strong> the Board of Directors be and is hereby
                authorised to file Form INC-6, submit amended Memorandum and Articles of
                Association, appoint additional directors, allot shares to new members, obtain a
                fresh Certificate of Incorporation, update statutory records, and do all acts and
                deeds necessary to give effect to this resolution.
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
        </div>

        <!-- FAQ -->
        <div class="faq-section">
            <h3 class="faq-title">Frequently Asked Questions</h3>

            <div class="faq-item">
                <h4 class="faq-question">
                    1. Is the EGM resolution format different for different companies?
                </h4>
                <p class="faq-answer">
                    No. The format remains largely the same for all companies. Only company-specific
                    details such as name, CIN, registered office, and proposed name will vary.
                </p>
            </div>

            <div class="faq-item">
                <h4 class="faq-question">
                    2. Is using company letterhead mandatory?
                </h4>
                <p class="faq-answer">
                    While not legally mandatory, preparing the resolution on company letterhead is
                    recommended as standard corporate practice and is generally expected for ROC
                    filings.
                </p>
            </div>

            <div class="faq-item">
                <h4 class="faq-question">
                    3. Who is the authorised signatory in an OPC?
                </h4>
                <p class="faq-answer">
                    In an OPC, the sole director who is also the sole member acts as the authorised
                    signatory for the EGM resolution.
                </p>
            </div>

            <div class="faq-item">
                <h4 class="faq-question">
                    4. Is the signature of all directors mandatory?
                </h4>
                <p class="faq-answer">
                    No. The certified true copy of the resolution may be signed by the sole director
                    or any authorised director.
                </p>
            </div>

            <div class="faq-item">
                <h4 class="faq-question">
                    5. Is professional certification required?
                </h4>
                <p class="faq-answer">
                    Professional certification is not mandatory for the resolution itself.
                    However, Form INC-6 filing may require certification by a practising
                    professional as per ROC requirements.
                </p>
            </div>
        </div>

    </div>
</div>


    </div>
</div>

<!-- JavaScript Section -->
<script>
document.addEventListener('DOMContentLoaded', function () {
    const form = document.getElementById('opcConversionForm');
    const downloadPdfBtn = document.getElementById('downloadPdfBtn');
    
    // Set default dates
    const today = new Date();
    const meetingDateInput = form.querySelector('[name="meeting_date"]');
    
    if (meetingDateInput) {
        meetingDateInput.value = today.toISOString().split('T')[0];
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

    // Auto-fill existing OPC name from company name
    const companyNameInput = form.querySelector('[name="company_name"]');
    const existingNameInput = form.querySelector('[name="existing_opc_name"]');
    const proposedNameInput = form.querySelector('[name="proposed_private_name"]');
    
    companyNameInput.addEventListener('blur', function() {
        if (companyNameInput.value && !existingNameInput.value) {
            existingNameInput.value = companyNameInput.value.trim() + ' (OPC) Private Limited';
        }
        if (companyNameInput.value && !proposedNameInput.value) {
            proposedNameInput.value = companyNameInput.value.trim() + ' Private Limited';
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
        const companyEmail = form.querySelector('[name="company_email"]').value || '________________';
        const meetingDate = form.querySelector('[name="meeting_date"]').value;
        const meetingTime = form.querySelector('[name="meeting_time"]').value || '______';
        const meetingVenue = form.querySelector('[name="meeting_venue"]').value || 'Registered Office of the Company at ________________';
        const existingName = form.querySelector('[name="existing_opc_name"]').value || '________________________ (OPC) Private Limited';
        const proposedName = form.querySelector('[name="proposed_private_name"]').value || '________________________ Private Limited';
        const place = form.querySelector('[name="place"]').value || '________________';
        const directorName = form.querySelector('[name="authorized_director"]').value || '________________';
        const designation = form.querySelector('[name="designation"]').value || '________________';
        const din = form.querySelector('[name="din"]').value || '________________';

        // Update preview elements
        const updateElement = (id, text) => {
            const el = document.getElementById(id);
            if (el) el.textContent = text;
        };

        updateElement('prevCompanyName', companyName);
        updateElement('prevCin', cin);
        updateElement('prevRegisteredOffice', registeredOffice);
        updateElement('prevEmail', companyEmail);
        updateElement('prevMeetingVenue', meetingVenue);
        updateElement('prevExistingName', existingName);
        updateElement('prevProposedName', proposedName);
        updateElement('footerCompanyName', companyName);
        updateElement('footerDirectorName', directorName);
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
            updateElement('footerDate', formattedMeetingDate);
        } else {
            updateElement('prevMeetingDate', '__.__.______');
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

<!--End JavaScript Section -->
@endsection
