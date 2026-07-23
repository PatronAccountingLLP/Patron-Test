@extends('tools.tool-master')
@section('title')
{{_('Board Resolution of Private Limited Company into LLP')}}
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
            <h1 class="hero-title">Board Resolution for Conversion of   <span> Private Limited Company into LLP</span></h1>
            <p class="hero-subtitle">
                Generate a certified Board Resolution for Conversion of Private Limited Company into LLP in under 60 seconds.
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
            <h2 class="form-title">Enter Company &amp; Conversion Details</h2>
            <p class="form-description">
                Fill in the details below to generate a Board Resolution for Conversion of Private Limited Company into LLP.
            </p>
        </div>

        <form id="conversionToLLPForm" method="POST" action="{{route('br.conversion.llp') }}">
            @csrf

            <div class="form-grid">
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

                <div class="form-group full-width">
                    <label class="form-label">Email ID <span class="required">*</span></label>
                    <input type="email" name="email" class="form-control" placeholder="Enter company email" required>
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
                    <label class="form-label">Proposed LLP Name <span class="required">*</span></label>
                    <input type="text" name="proposed_llp_name" class="form-control" placeholder="e.g., ABC Consultants LLP" required>
                </div>

                <div class="form-row">
                    <div class="form-group">
                        <label class="form-label">Director Name (Certifying) <span class="required">*</span></label>
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
                        <p class="preview-subtitle">Board Resolution for Conversion into LLP</p>
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
                        <strong id="prevCompanyName">________________</strong>
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
                        <strong>SUBJECT: CONVERSION OF PRIVATE LIMITED COMPANY INTO LLP</strong>
                    </p>

                    <p class="certificate-paragraph">
                        <strong>RESOLVED THAT</strong> the consent of the Board be accorded to convert 
                        the Company into a Limited Liability Partnership.
                    </p>

                    <p class="certificate-paragraph">
                        <strong>Proposed Name of LLP:</strong> M/s <span id="prevLLPName">________________</span>
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
            <h2 class="info-title">Board Resolution for Conversion of Private Limited Company into LLP</h2>
            <p class="info-subtitle">
                Professional Format Guide for Indian Companies
            </p>
        </div>

        <!-- Introduction -->
        <div class="info-content">
            <h3 class="info-subheading">Introduction</h3>

            <p class="info-text">
                A Board Resolution for Conversion of Private Limited Company into LLP is a formal 
                corporate document that records the Board of Directors' consent to convert the 
                existing private limited company into a Limited Liability Partnership. Under the 
                Limited Liability Partnership Act, 2008, and the Companies Act, 2013, a private 
                limited company may convert itself into an LLP subject to compliance with prescribed 
                conditions and procedures. Prior board approval is mandatory before seeking 
                shareholder consent for such conversion.
            </p>

            <p class="info-text">
                This resolution specifies the proposed LLP name, confirms the transfer of all assets, 
                liabilities, property, rights, privileges, and obligations from the company to the 
                LLP, and authorises designated representatives to complete the conversion formalities. 
                The document is essential for filing the conversion application with the Registrar 
                of Companies and forms part of the documentation required under the LLP Rules, 2009. 
                It is commonly used when businesses seek the operational flexibility and compliance 
                simplicity offered by the LLP structure.
            </p>

            <!-- Benefits -->
            <h3 class="info-subheading">Benefits of Using a Standard Format</h3>

            <p class="info-text">
                Utilising a professionally drafted board resolution format ensures that all statutory 
                requirements under both the Companies Act, 2013 and the LLP Act, 2008 are properly 
                addressed. A ready-to-use template saves valuable time during board meetings, reduces 
                the risk of procedural errors, and provides a consistent framework that captures 
                essential conversion details including asset transfer provisions and authorisation 
                scope. Standardised formats facilitate smoother ROC processing.
            </p>

            <!-- Relevance -->
            <h3 class="info-subheading">Relevance to Business Restructuring</h3>

            <p class="info-text">
                Converting a private limited company into an LLP is a significant business 
                restructuring decision. Following successful conversion, the LLP will need to update 
                its registrations with various authorities, including obtaining fresh GST Registration 
                as the entity type changes from a company to an LLP. The converted LLP inherits all 
                rights and obligations of the erstwhile company, and partners should ensure all 
                statutory compliances are updated to reflect the new business structure.
            </p>
        </div>

        <!-- Sample Format -->
        <div class="format-section">
            <h3 class="format-title">
                Board Resolution for Conversion of Private Limited Company into LLP – Sample Format
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
                <strong>SUBJECT: CONVERSION OF PRIVATE LIMITED COMPANY INTO LIMITED LIABILITY PARTNERSHIP (LLP)</strong>
            </p>

            <p class="format-text">
                "RESOLVED THAT pursuant to the applicable provisions of the Companies Act, 2013 
                read with the Companies (Authorised to Register) Rules, 2014, and Section 56 read 
                with Section 58 and Schedule III of the Limited Liability Partnership Act, 2008 
                and the LLP Rules, 2009, and subject to the approval of the shareholders of the 
                Company and such other approvals as may be required, the consent of the Board of 
                Directors be and is hereby accorded to convert the Company into a Limited Liability 
                Partnership.
            </p>

            <p class="format-text">
                <strong>Proposed Name of LLP:</strong> M/s __________________________________________
            </p>

            <p class="format-text">
                Upon such conversion taking effect:
            </p>

            <p class="format-text">
                • All assets, liabilities, and property of the Company shall stand transferred to and vested in the LLP;
            </p>

            <p class="format-text">
                • All rights, privileges, obligations, and interests of the Company shall become the rights, privileges, obligations, and interests of the LLP;
            </p>

            <p class="format-text">
                • All contracts, agreements, and arrangements subsisting immediately before the conversion shall continue in full force and effect against or in favour of the LLP;
            </p>

            <p class="format-text">
                • The shareholders of the Company shall become partners of the LLP in accordance with the LLP Agreement.
            </p>

            <p class="format-text">
                RESOLVED FURTHER THAT any Director of the Company be and is hereby empowered and 
                authorised to take all necessary steps in relation to the above conversion..."
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
        </div>

        <!-- FAQ -->
        <div class="faq-section">
            <h3 class="faq-title">Frequently Asked Questions</h3>

            <div class="faq-item">
                <h4 class="faq-question">
                    1. Is the board resolution format for conversion of private limited company into LLP different for different companies?
                </h4>
                <p class="faq-answer">
                    No, the basic structure and legal content of the board resolution format remains 
                    the same for all private limited companies seeking conversion into LLP. However, 
                    the specific details such as company name, CIN, proposed LLP name, and authorised 
                    signatories will vary for each company. The resolution must reference the 
                    applicable provisions of both the Companies Act, 2013 and the LLP Act, 2008.
                </p>
            </div>

            <div class="faq-item">
                <h4 class="faq-question">
                    2. Is the format for conversion of private limited company into LLP to be on company letterhead?
                </h4>
                <p class="faq-answer">
                    While there is no strict legal requirement mandating the use of company letterhead, 
                    it is considered standard corporate practice and adds authenticity to the document. 
                    Using official letterhead facilitates easy identification and verification by the 
                    Registrar of Companies and other stakeholders. Most companies maintain all board 
                    resolutions on official letterhead as part of good corporate governance practices.
                </p>
            </div>

            <div class="faq-item">
                <h4 class="faq-question">
                    3. Who can be considered as an authorized signatory for the board resolution for conversion of private limited company into LLP?
                </h4>
                <p class="faq-answer">
                    Any director present at the board meeting or the company secretary (if appointed) 
                    may be authorised to sign the certified true copy of the resolution. The Board 
                    typically designates one or more directors through the resolution itself to execute 
                    all conversion-related documents, file necessary forms with the ROC, and represent 
                    the company before regulatory authorities during the conversion process.
                </p>
            </div>

            <div class="faq-item">
                <h4 class="faq-question">
                    4. Is the signature of all directors mandatory on Board resolution format for conversion of private limited company into LLP?
                </h4>
                <p class="faq-answer">
                    No, signatures of all directors are not mandatory. The resolution is passed by a 
                    majority of directors present and voting at a duly convened board meeting where 
                    quorum is present. The certified true copy may be signed by a single authorised 
                    director or the company secretary. The minutes should record the names of directors 
                    present, those who voted in favour, and any abstentions or dissents.
                </p>
            </div>

            <div class="faq-item">
                <h4 class="faq-question">
                    5. Does the Board Resolution format for conversion of private limited company into LLP need to be certified by a professional?
                </h4>
                <p class="faq-answer">
                    There is no statutory requirement for the board resolution to be certified by an 
                    external professional. The certified true copy may be signed by any director or 
                    the company secretary of the company. However, for filing conversion forms with 
                    the Registrar of Companies, a practising professional such as a Chartered 
                    Accountant, Company Secretary, or Cost Accountant may be required to certify 
                    certain forms.
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

    const form = document.getElementById('conversionToLLPForm');
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
        const companyName = form.querySelector('[name="company_name"]').value || '________________';
        const cin = form.querySelector('[name="cin"]').value || '________________';
        const meetingDate = form.querySelector('[name="meeting_date"]').value;
        const meetingTime = form.querySelector('[name="meeting_time"]').value;
        const proposedLLPName = form.querySelector('[name="proposed_llp_name"]').value || '________________';
        const place = form.querySelector('[name="place"]').value || '________________';
        const resolutionDate = form.querySelector('[name="resolution_date"]').value;

        // Update preview text
        const elCompanyName = document.getElementById('prevCompanyName');
        const elCIN = document.getElementById('prevCIN');
        const elMeetingDate = document.getElementById('prevMeetingDate');
        const elMeetingTime = document.getElementById('prevMeetingTime');
        const elLLPName = document.getElementById('prevLLPName');
        const elFooterCompanyName = document.getElementById('footerCompanyName');
        const elFooterPlace = document.getElementById('footerPlace');
        const elFooterDate = document.getElementById('footerDate');

        if (elCompanyName) elCompanyName.textContent = companyName;
        if (elCIN) elCIN.textContent = cin;
        if (elLLPName) elLLPName.textContent = proposedLLPName;
        if (elFooterCompanyName) elFooterCompanyName.textContent = companyName;
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
