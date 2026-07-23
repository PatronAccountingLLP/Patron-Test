@extends('tools.tool-master')
@section('title')
{{_('Board Resolution for Change of Company Name')}}
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
            <h1 class="hero-title">Board Resolution for <span> Change of Company Name</span></h1>
            <p class="hero-subtitle">
                Generate a certified Board Resolution for Change of Company Name in under 60 seconds.
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
            <h2 class="form-title">Enter Company &amp; Name Change Details</h2>
            <p class="form-description">
                Fill in the details below to generate a Board Resolution for Change of Company Name.
            </p>
        </div>

        <form id="changeCompanyNameForm" method="POST" action="{{route('br.change.company.name') }}">
            @csrf

            <div class="form-grid">
                <div class="form-group full-width">
                    <label class="form-label">Existing Company Name <span class="required">*</span></label>
                    <input type="text" name="existing_company_name" class="form-control" placeholder="Enter current company name" required>
                </div>
                
                <div class="form-group full-width">
                    <label class="form-label">CIN <span class="required">*</span></label>
                    <input type="text" name="cin" class="form-control" placeholder="Enter CIN" required>
                </div>
                
                <div class="form-group full-width">
                    <label class="form-label">Registered Office Address <span class="required">*</span></label>
                    <textarea name="registered_office" class="form-control" placeholder="Enter registered office address" required></textarea>
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

                <!-- Name Change Details -->
                <div class="form-group full-width">
                    <h4 style="margin-bottom: 10px; color: #333; border-bottom: 1px solid #eee; padding-bottom: 8px;">Proposed Name Change</h4>
                </div>

                <div class="form-group full-width">
                    <label class="form-label">Proposed New Company Name <span class="required">*</span></label>
                    <input type="text" name="proposed_company_name" class="form-control" placeholder="Enter proposed new company name" required>
                </div>

                <!-- Certifying Director Details -->
                <div class="form-group full-width">
                    <h4 style="margin-bottom: 10px; color: #333; border-bottom: 1px solid #eee; padding-bottom: 8px;">Certifying Director Details</h4>
                </div>

                <div class="form-row">
                    <div class="form-group">
                        <label class="form-label">Director Name <span class="required">*</span></label>
                        <input type="text" name="director_name" class="form-control" placeholder="Enter director name" required>
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

                <div class="form-row">
                    <div class="form-group">
                        <label class="form-label">DIN <span class="required">*</span></label>
                        <input type="text" name="din" class="form-control" placeholder="Enter DIN" required>
                    </div>

                    <div class="form-group">
                        <label class="form-label">Place <span class="required">*</span></label>
                        <input type="text" name="place" class="form-control" placeholder="City / Place" required>
                    </div>
                </div>
                
                <div class="form-group full-width">
                    <label class="form-label">Resolution Date <span class="required">*</span></label>
                    <input type="date" name="resolution_date" class="form-control" required>
                </div>
            </div>

            <button type="submit" class="btn-submit" id="downloadPdfBtn">
                <span class="btn-text">Generate &amp; Download Resolution</span>
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
                        <p class="preview-subtitle">Board Resolution for Change of Company Name</p>
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
                        <strong id="prevExistingName">________________</strong>
                    </p>
                    
                    <p class="certificate-paragraph">
                        CIN: <strong id="prevCIN">________________</strong>
                    </p>

                    <p class="certificate-paragraph">
                        <strong>Date of Meeting:</strong> <span id="prevMeetingDate">__________</span>
                    </p>
                    
                    <p class="certificate-paragraph">
                        <strong>Time:</strong> <span id="prevMeetingTime">__________</span>
                    </p>

                    <p class="certificate-paragraph">
                        <strong>SUBJECT: CHANGE OF COMPANY NAME</strong>
                    </p>

                    <p class="certificate-paragraph">
                        <strong>RESOLVED THAT</strong> pursuant to Section 13 of the Companies Act, 2013, 
                        consent be accorded to change the name of the Company from:
                    </p>

                    <p class="certificate-paragraph">
                        <strong>Existing Name:</strong> <span id="prevCurrentName">________________</span>
                    </p>
                    
                    <p class="certificate-paragraph" style="text-align: center;">
                        <strong>to</strong>
                    </p>

                    <p class="certificate-paragraph">
                        <strong>Proposed New Name:</strong> <span id="prevNewName">________________</span>
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
            <h2 class="info-title">Board Resolution for Change of Company Name</h2>
            <p class="info-subtitle">
                Professional Format Guide for Indian Companies
            </p>
        </div>

        <!-- Introduction -->
        <div class="info-content">
            <h3 class="info-subheading">Introduction</h3>

            <p class="info-text">
                A Board Resolution for Change of Company Name is a formal corporate document that 
                records the Board of Directors' consent to change the existing name of the company 
                to a new name. Under Section 13 of the Companies Act, 2013, a company may change 
                its name by passing a special resolution and obtaining approval from the Registrar 
                of Companies. Prior to seeking shareholder approval, the Board must first pass a 
                resolution recommending the name change.
            </p>

            <p class="info-text">
                This resolution specifies the existing company name, the proposed new name, and 
                authorises amendments to the Name Clause (Clause 1) of the Memorandum of Association. 
                The document is essential for filing the name change application with the Registrar 
                of Companies and forms part of the documentation required for obtaining the new 
                Certificate of Incorporation. It is commonly required when companies rebrand, merge, 
                restructure, or wish to better reflect their current business activities.
            </p>

            <!-- Benefits -->
            <h3 class="info-subheading">Benefits of Using a Standard Format</h3>

            <p class="info-text">
                Utilising a professionally drafted board resolution format ensures that all statutory 
                requirements under the Companies Act, 2013 are properly addressed. A ready-to-use 
                template saves valuable time during board meetings, reduces the risk of procedural 
                errors, and provides a consistent framework that captures the essential details 
                including existing name, proposed name, and required amendments to the Memorandum 
                of Association. Standardised formats facilitate smoother ROC processing.
            </p>

            <!-- Relevance -->
            <h3 class="info-subheading">Relevance to Company Compliance</h3>

            <p class="info-text">
                Changing a company name is a significant corporate action with multiple compliance 
                implications. Following the name change approval by the ROC and issuance of the new 
                Certificate of Incorporation, the company must update its records with various 
                authorities including banks, GST Registration (amendment to registration), Income 
                Tax department, and other statutory bodies. All documents, letterheads, signage, 
                and contracts should be updated to reflect the new company name.
            </p>
        </div>

        <!-- Sample Format -->
        <div class="format-section">
            <h3 class="format-title">
                Board Resolution for Change of Company Name – Sample Format
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
                <strong>SUBJECT: CHANGE OF COMPANY NAME AND AMENDMENT TO MEMORANDUM OF ASSOCIATION</strong>
            </p>

            <p class="format-text">
                "RESOLVED THAT pursuant to the provisions of Section 13 and other applicable provisions 
                of the Companies Act, 2013 and rules framed thereunder (including any statutory 
                modification(s) or re-enactment thereof for the time being in force), and subject to 
                the approval of the members of the Company by way of special resolution and the approval 
                of the Registrar of Companies, the consent of the Board of Directors be and is hereby 
                accorded to change the name of the Company from:
            </p>

            <p class="format-text">
                <strong>Existing Name:</strong> __________________________________________
            </p>

            <p class="format-text" style="text-align: center;">
                to
            </p>

            <p class="format-text">
                <strong>Proposed New Name:</strong> __________________________________________
            </p>

            <p class="format-text">
                RESOLVED FURTHER THAT upon approval of the name change by the Registrar of Companies, 
                Clause 1 (Name Clause) of the Memorandum of Association of the Company be and is hereby 
                amended and substituted with the following:
            </p>

            <p class="format-text">
                "The name of the Company is __________________________________________ (New Name of the Company)."
            </p>

            <p class="format-text">
                RESOLVED FURTHER THAT any Director of the Company be and is hereby authorised, on behalf 
                of the Company, to do all such acts, deeds, matters, and things as may be necessary, 
                proper, or desirable to give effect to this resolution..."
            </p>

            <p class="format-text">
                For ________________________________________ (Name of the Company)
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
                    1. What is the board resolution format for changing the name?
                </h4>
                <p class="faq-answer">
                    The board resolution format should reference Section 13 of the Companies Act, 2013 
                    and include the existing company name, proposed new name, approval for amendment to 
                    Clause 1 (Name Clause) of the Memorandum of Association, and authorisation for 
                    directors to file necessary applications with the ROC. The resolution is subject 
                    to shareholder approval by special resolution and ROC approval.
                </p>
            </div>

            <div class="faq-item">
                <h4 class="faq-question">
                    2. How to write a board resolution for changing the Name?
                </h4>
                <p class="faq-answer">
                    Begin with company details and meeting particulars. State that pursuant to Section 13, 
                    the Board recommends changing the company name from the existing name to the proposed 
                    new name, subject to shareholder and ROC approval. Include a clause for amendment to 
                    the MOA Name Clause. Authorise directors to file forms, convene EGM for special 
                    resolution, and execute necessary documents.
                </p>
            </div>

            <div class="faq-item">
                <h4 class="faq-question">
                    3. Is the signature of all members mandatory on the board resolution format for the name change?
                </h4>
                <p class="faq-answer">
                    No, signatures of all directors are not mandatory on the board resolution. The 
                    resolution is passed by a majority of directors present and voting at a duly convened 
                    board meeting where quorum is present. The certified true copy may be signed by a 
                    single authorised director or the company secretary. Note that the name change also 
                    requires a special resolution from shareholders at a general meeting.
                </p>
            </div>

            <div class="faq-item">
                <h4 class="faq-question">
                    4. Does the Board Resolution for name change need to be certified by a professional?
                </h4>
                <p class="faq-answer">
                    There is no statutory requirement for the board resolution to be certified by an 
                    external professional. The certified true copy may be signed by any director or the 
                    company secretary of the company. However, for filing forms with the ROC (such as 
                    Form INC-24 for name change), a practising professional such as a Chartered Accountant, 
                    Company Secretary, or Cost Accountant may be required to certify.
                </p>
            </div>

            <div class="faq-item">
                <h4 class="faq-question">
                    5. Is the Board resolution for the name change to be on entity letterhead?
                </h4>
                <p class="faq-answer">
                    While there is no strict legal requirement mandating the use of company letterhead, 
                    it is considered standard corporate practice and adds authenticity to the document. 
                    Using official letterhead facilitates easy identification and verification by the 
                    Registrar of Companies and other stakeholders. Most companies maintain all board 
                    resolutions on official letterhead as part of good corporate governance practices.
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

    const form = document.getElementById('changeCompanyNameForm');
    const downloadPdfBtn = document.getElementById('downloadPdfBtn');
    const alertContainer = document.getElementById('alertContainer');

    // Set default date
    const today = new Date().toISOString().split('T')[0];
    const dateInputs = form.querySelectorAll('[type="date"]');
    dateInputs.forEach(input => {
        if (!input.value) {
            input.value = today;
        }
    });

    // Set default time
    const timeInput = form.querySelector('[name="meeting_time"]');
    if (timeInput && !timeInput.value) {
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
        const existingName = form.querySelector('[name="existing_company_name"]').value || '________________';
        const cin = form.querySelector('[name="cin"]').value || '________________';
        const meetingDate = form.querySelector('[name="meeting_date"]').value;
        const meetingTime = form.querySelector('[name="meeting_time"]').value;
        const proposedName = form.querySelector('[name="proposed_company_name"]').value || '________________';
        const place = form.querySelector('[name="place"]').value || '________________';
        const resolutionDate = form.querySelector('[name="resolution_date"]').value;

        // Update preview text
        const elExistingName = document.getElementById('prevExistingName');
        const elCIN = document.getElementById('prevCIN');
        const elMeetingDate = document.getElementById('prevMeetingDate');
        const elMeetingTime = document.getElementById('prevMeetingTime');
        const elCurrentName = document.getElementById('prevCurrentName');
        const elNewName = document.getElementById('prevNewName');
        const elFooterCompanyName = document.getElementById('footerCompanyName');
        const elFooterPlace = document.getElementById('footerPlace');
        const elFooterDate = document.getElementById('footerDate');

        if (elExistingName) elExistingName.textContent = existingName;
        if (elCIN) elCIN.textContent = cin;
        if (elCurrentName) elCurrentName.textContent = existingName;
        if (elNewName) elNewName.textContent = proposedName;
        if (elFooterCompanyName) elFooterCompanyName.textContent = existingName;
        if (elFooterPlace) elFooterPlace.textContent = place;

        if (meetingDate && elMeetingDate) {
            const formattedMeetingDate = new Date(meetingDate).toLocaleDateString('en-IN', {
                day: '2-digit',
                month: 'long',
                year: 'numeric'
            });
            elMeetingDate.textContent = formattedMeetingDate;
        } else if (elMeetingDate) {
            elMeetingDate.textContent = '__________';
        }

        if (meetingTime && elMeetingTime) {
            const [hours, minutes] = meetingTime.split(':');
            const hour = parseInt(hours);
            const ampm = hour >= 12 ? 'PM' : 'AM';
            const hour12 = hour % 12 || 12;
            elMeetingTime.textContent = `${hour12}:${minutes} ${ampm}`;
        } else if (elMeetingTime) {
            elMeetingTime.textContent = '__________';
        }

        if (resolutionDate && elFooterDate) {
            const formattedDate = new Date(resolutionDate).toLocaleDateString('en-IN', {
                day: '2-digit',
                month: 'long',
                year: 'numeric'
            });
            elFooterDate.textContent = formattedDate;
        } else if (elFooterDate) {
            elFooterDate.textContent = '________________';
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
