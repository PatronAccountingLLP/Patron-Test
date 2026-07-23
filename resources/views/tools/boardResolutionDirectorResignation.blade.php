@extends('tools.tool-master')
@section('title')
{{_('Board Resolution for  Resignation of Director')}}
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
            <h1 class="hero-title">Board Resolution for  <span> Resignation of Director</span></h1>
            <p class="hero-subtitle">
                Generate a certified Board Resolution for   Resignation of Director in under 60 seconds.
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
            <h2 class="form-title">Enter Company & Director Details</h2>
            <p class="form-description">
                Fill in the details below to generate a Board Resolution for Resignation of Director.
            </p>
        </div>

        <form id="directorResignationForm" method="POST" action="{{route('br.director.resignation') }}">
            @csrf

            <div class="form-grid">
                <div class="form-group full-width">
                    <label class="form-label">Company Name <span class="required">*</span></label>
                    <input type="text" name="company_name" class="form-control" placeholder="Enter company name" required>
                </div>

                <div class="form-row">
                    <div class="form-group">
                        <label class="form-label">CIN <span class="required">*</span></label>
                        <input type="text" name="cin" class="form-control" placeholder="Enter CIN" required>
                    </div>

                    <div class="form-group">
                        <label class="form-label">Email ID <span class="required">*</span></label>
                        <input type="email" name="email" class="form-control" placeholder="Enter email" required>
                    </div>
                </div>

                <div class="form-group full-width">
                    <label class="form-label">Registered Office Address <span class="required">*</span></label>
                    <textarea name="registered_office" class="form-control" placeholder="Enter registered office address" required></textarea>
                </div>

                <div class="form-row">
                    <div class="form-group">
                        <label class="form-label">Date of Meeting <span class="required">*</span></label>
                        <input type="date" name="meeting_date" class="form-control" required>
                    </div>

                    <div class="form-group">
                        <label class="form-label">Time of Meeting <span class="required">*</span></label>
                        <input type="time" name="meeting_time" class="form-control" required>
                    </div>
                </div>

                <!-- Resigning Director Details Section -->
                <div class="form-group full-width">
                    <label class="form-label" style="font-weight:600;color:#333;border-bottom:1px solid #eee;padding-bottom:8px;margin-bottom:12px;">Resigning Director Details</label>
                </div>

                <div class="form-group full-width">
                    <label class="form-label">Name of Resigning Director <span class="required">*</span></label>
                    <input type="text" name="resigning_director_name" class="form-control" placeholder="Enter full name of resigning director" required>
                </div>

                <div class="form-row">
                    <div class="form-group">
                        <label class="form-label">DIN of Resigning Director <span class="required">*</span></label>
                        <input type="text" name="resigning_director_din" class="form-control" placeholder="Enter DIN" required>
                    </div>

                    <div class="form-group">
                        <label class="form-label">Designation <span class="required">*</span></label>
                        <div class="select-wrapper">
                            <select name="resigning_director_designation" class="form-control form-select" required>
                                <option value="">Select designation</option>
                                <option value="Director">Director</option>
                                <option value="Managing Director">Managing Director</option>
                                <option value="Whole-Time Director">Whole-Time Director</option>
                                <option value="Independent Director">Independent Director</option>
                                <option value="Additional Director">Additional Director</option>
                            </select>
                        </div>
                    </div>
                </div>

                <div class="form-group full-width">
                    <label class="form-label">Date of Resignation <span class="required">*</span></label>
                    <input type="date" name="resignation_date" class="form-control" required>
                </div>

                <!-- Authorised Signatory Details -->
                <div class="form-group full-width">
                    <label class="form-label" style="font-weight:600;color:#333;border-bottom:1px solid #eee;padding-bottom:8px;margin-bottom:12px;">Authorised Signatory Details</label>
                </div>

                <div class="form-row">
                    <div class="form-group">
                        <label class="form-label">Authorised Director Name <span class="required">*</span></label>
                        <input type="text" name="director_name" class="form-control" placeholder="Director name" required>
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
                    <label class="form-label">DIN <span class="required">*</span></label>
                    <input type="text" name="din" class="form-control" placeholder="Enter DIN Number" required>
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
                        <p class="preview-subtitle">Board Resolution for Resignation of Director</p>
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
                        <strong id="prevCompanyName">________________</strong><br>
                        CIN: <strong id="prevCIN">________________</strong>
                    </p>

                    <p class="certificate-paragraph">
                        Date of Meeting: <strong id="prevMeetingDate">__________</strong> at
                        <strong id="prevMeetingTime">__________</strong> Hours at the Registered Office of the Company.
                    </p>

                    <p class="certificate-paragraph">
                        <strong>SUBJECT:</strong> Resignation of Director from the Board of Directors
                    </p>

                    <p class="certificate-paragraph">
                        The Chairman informed the Board that a letter of resignation has been received from:
                    </p>

                    <p class="certificate-paragraph">
                        Name: <strong id="prevResigningDirector">________________</strong><br>
                        DIN: <strong id="prevResigningDIN">________________</strong><br>
                        Designation: <strong id="prevResigningDesignation">________________</strong>
                    </p>

                    <p class="certificate-paragraph">
                        <strong>RESOLVED THAT</strong> the resignation of <strong id="prevResigningDirector2">________________</strong>, holding DIN: <strong id="prevResigningDIN2">________________</strong>, be and is hereby accepted with effect from <strong id="prevResignationDate">________________</strong>.
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
                        <span class="footer-item-label">Director</span>
                        <span class="footer-item-value" id="footerDirectorName">________________</span>
                    </div>
                    <div class="footer-item">
                        <span class="footer-item-label">DIN</span>
                        <span class="footer-item-value" id="footerDIN">________________</span>
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
            <h2 class="info-title">Board Resolution for Resignation of Director</h2>
            <p class="info-subtitle">
                Corporate Compliance Documentation for Indian Companies
            </p>
        </div>

        <!-- Introduction -->
        <div class="info-content">
            <h3 class="info-subheading">Introduction</h3>

            <p class="info-text">
                A Board Resolution for Resignation of Director is a formal corporate document that
                records the Board of Directors' acceptance of the resignation tendered by a director.
                Under the Companies Act, 2013, a director may resign from the directorship by
                providing written notice to the company. The Board must formally accept such
                resignation and record the same in the minutes of the board meeting. The resignation
                takes effect from the date specified in the notice or the date on which the notice
                is received by the company, whichever is later.
            </p>

            <p class="info-text">
                This resolution specifies the name and Director Identification Number (DIN) of the
                resigning director, the effective date of resignation, and authorises the filing of
                necessary forms with the Registrar of Companies. The company must file Form DIR-12
                (Particulars of appointment of Directors and the Key Managerial Personnel and the
                changes among them) within thirty days of the change. Additionally, the resigning
                director must file Form DIR-11 (Notice of resignation of a director to the
                Registrar) within thirty days of resignation.
            </p>

            <!-- Benefits -->
            <h3 class="info-subheading">Benefits of Using a Standard Format</h3>

            <p class="info-text">
                Utilising a professionally drafted board resolution format ensures that all statutory
                requirements under the Companies Act, 2013 and the Companies (Appointment and
                Qualification of Directors) Rules, 2014 are properly addressed. A ready-to-use
                template saves valuable time during the compliance process, reduces the risk of
                procedural errors, and provides a consistent framework for documenting the Board's
                acceptance of a director's resignation.
            </p>

            <!-- Relevance -->
            <h3 class="info-subheading">Relevance to Corporate Compliance</h3>

            <p class="info-text">
                Changes in directorship are significant corporate events that must be properly
                documented and filed with regulatory authorities. Following Company Registration,
                the composition of the Board may change due to resignations, appointments, or other
                reasons. Proper documentation ensures compliance with ROC filing requirements and
                maintains accurate statutory records.
            </p>

            <p class="info-text">
                Post-resignation, the company should also update other registrations where director
                details are recorded, such as bank accounts and GST Registration where applicable.
            </p>
        </div>

        <!-- Sample Format -->
        <div class="format-section">
            <h3 class="format-title">
                Board Resolution for Resignation of Director – Sample Format
            </h3>

            <p class="format-text">
                <strong>Company Name:</strong> _______________________________________
            </p>

            <p class="format-text">
                <strong>CIN:</strong> _______________________________________
            </p>

            <p class="format-text">
                <strong>Registered Office:</strong> _______________________________________
            </p>

            <p class="format-text">
                <strong>Email:</strong> _______________________________________
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
                <strong>SUBJECT: RESIGNATION OF DIRECTOR FROM THE BOARD OF DIRECTORS</strong>
            </p>

            <p class="format-text">
                The Chairman informed the Board that a letter of resignation has been received from the following Director expressing his/her intention to resign from the directorship of the Company:
            </p>

            <p class="format-text">
                <strong>Name of Director:</strong> __________________________________________
            </p>

            <p class="format-text">
                <strong>DIN:</strong> __________________________________________
            </p>

            <p class="format-text">
                <strong>Designation:</strong> __________________________________________
            </p>

            <p class="format-text">
                <strong>Date of Resignation:</strong> __________________________________________
            </p>

            <p class="format-text">
                <strong>"RESOLVED THAT</strong> pursuant to Section 168 of the Companies Act, 2013 read with the Companies (Appointment and Qualification of Directors) Rules, 2014 and other applicable provisions of the Companies Act, 2013 (including any statutory modification or re-enactment thereof for the time being in force), the resignation of Mr./Ms. __________________________________________ (Name of the Director), holding DIN: __________________, as Director of the Company, be and is hereby accepted with effect from __________________ (Date of Resignation).
            </p>

            <p class="format-text">
                <strong>RESOLVED FURTHER THAT</strong> the Board places on record its appreciation for the valuable services rendered by Mr./Ms. __________________________________________ during his/her tenure as Director of the Company.
            </p>

            <p class="format-text">
                <strong>RESOLVED FURTHER THAT</strong> any Director of the Company be and is hereby authorised to:
            </p>

            <ul class="format-list">
                <li>File Form DIR-12 (Particulars of appointment of Directors and the Key Managerial Personnel and the changes among them) with the Registrar of Companies within the prescribed time;</li>
                <li>Make necessary entries in the Register of Directors and Key Managerial Personnel;</li>
                <li>Update the records of banks, statutory authorities, and other stakeholders as required;</li>
                <li>Do all such acts, deeds, matters, and things as may be necessary, proper, or expedient for giving effect to this resolution."</li>
            </ul>

            <p class="format-text">
                For ________________________________________
            </p>

            <p class="format-text">
                (Name of the Company)
            </p>

            <p class="format-text">
                <strong>Signature:</strong> __________________________
            </p>

            <p class="format-text">
                <strong>Name:</strong> __________________________
            </p>

            <p class="format-text">
                <strong>Designation:</strong> __________________________
            </p>

            <p class="format-text">
                <strong>DIN:</strong> __________________________
            </p>
        </div>

        <!-- FAQ -->
        <div class="faq-section">
            <h3 class="faq-title">Frequently Asked Questions</h3>

            <div class="faq-item">
                <h4 class="faq-question">
                    1. Who can be considered as an authorized signatory for the board resolution for the resignation of director?
                </h4>
                <p class="faq-answer">
                    Any director present at the board meeting or the company secretary (if appointed)
                    may be considered an authorised signatory for the certified true copy of the board
                    resolution. The Board typically designates any director to file Form DIR-12 with
                    the ROC, update statutory registers, and complete all procedural requirements
                    related to recording the change in directorship.
                </p>
            </div>

            <div class="faq-item">
                <h4 class="faq-question">
                    2. Is the signature of all directors mandatory on the board resolution format for the resignation of director?
                </h4>
                <p class="faq-answer">
                    No, signatures of all directors are not mandatory. The resolution is passed by a
                    majority of directors present and voting at a duly convened board meeting where
                    quorum is present. The certified true copy may be signed by a single authorised
                    director or the company secretary. The resigning director typically does not
                    participate in voting on their own resignation.
                </p>
            </div>

            <div class="faq-item">
                <h4 class="faq-question">
                    3. Which resolution is required for the resignation of the director?
                </h4>
                <p class="faq-answer">
                    A board resolution is required to formally accept and record the resignation of a
                    director. The resolution should reference Section 168 of the Companies Act, 2013,
                    specify the director's name and DIN, the effective date of resignation, and
                    authorise filing of Form DIR-12 with the ROC. The resignation letter from the
                    director forms the basis for passing this resolution.
                </p>
            </div>

            <div class="faq-item">
                <h4 class="faq-question">
                    4. Does the Board Resolution format for the resignation of director need to be certified by a professional?
                </h4>
                <p class="faq-answer">
                    There is no statutory requirement for the board resolution to be certified by an
                    external professional. The certified true copy may be signed by any director or
                    the company secretary. However, for filing Form DIR-12 with the ROC, certification
                    by a practising Chartered Accountant, Company Secretary, or Cost Accountant may be
                    required as per the form's specific requirements.
                </p>
            </div>

            <div class="faq-item">
                <h4 class="faq-question">
                    5. Can a board resolution for resignation of the director be passed without convening a board meeting?
                </h4>
                <p class="faq-answer">
                    While certain matters may be passed by circulation if permitted by the Articles of
                    Association, acceptance of a director's resignation is typically taken up at a
                    duly convened board meeting. This ensures proper deliberation and recording in the
                    minutes. Standard practice recommends conducting a board meeting to formally
                    acknowledge and accept the resignation.
                </p>
            </div>

            <div class="faq-item">
                <h4 class="faq-question">
                    6. What are the documents filed along with the resolution for filing Form DIR-12?
                </h4>
                <p class="faq-answer">
                    The following documents are typically filed along with Form DIR-12: Board
                    Resolution for Resignation of Director, Director's Resignation Letter addressed
                    to the company, Declaration from the Director (if required), and reasons for
                    resignation. Additionally, the resigning director must independently file Form
                    DIR-11 (Notice of resignation of a director to the Registrar) within thirty days
                    of resignation.
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

    const form = document.getElementById('directorResignationForm');
    const downloadPdfBtn = document.getElementById('downloadPdfBtn');
    const alertContainer = document.getElementById('alertContainer');

    // Set default date
    const today = new Date().toISOString().split('T')[0];
    const dateInput = form.querySelector('[name="meeting_date"]');
    const resignationDateInput = form.querySelector('[name="resignation_date"]');
    if (dateInput) {
        dateInput.value = today;
    }
    if (resignationDateInput) {
        resignationDateInput.value = today;
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
        const meetingTime = form.querySelector('[name="meeting_time"]').value || '__________';
        const resigningDirectorName = form.querySelector('[name="resigning_director_name"]').value || '________________';
        const resigningDirectorDIN = form.querySelector('[name="resigning_director_din"]').value || '________________';
        const resigningDirectorDesignation = form.querySelector('[name="resigning_director_designation"]').value || '________________';
        const resignationDate = form.querySelector('[name="resignation_date"]').value;
        const directorName = form.querySelector('[name="director_name"]').value || '________________';
        const din = form.querySelector('[name="din"]').value || '________________';

        // Update preview text
        const elCompanyName = document.getElementById('prevCompanyName');
        const elCIN = document.getElementById('prevCIN');
        const elMeetingDate = document.getElementById('prevMeetingDate');
        const elMeetingTime = document.getElementById('prevMeetingTime');
        const elResigningDirector = document.getElementById('prevResigningDirector');
        const elResigningDIN = document.getElementById('prevResigningDIN');
        const elResigningDesignation = document.getElementById('prevResigningDesignation');
        const elResigningDirector2 = document.getElementById('prevResigningDirector2');
        const elResigningDIN2 = document.getElementById('prevResigningDIN2');
        const elResignationDate = document.getElementById('prevResignationDate');
        const elFooterCompanyName = document.getElementById('footerCompanyName');
        const elFooterDirectorName = document.getElementById('footerDirectorName');
        const elFooterDIN = document.getElementById('footerDIN');

        if (elCompanyName) elCompanyName.textContent = companyName;
        if (elCIN) elCIN.textContent = cin;
        if (elResigningDirector) elResigningDirector.textContent = resigningDirectorName;
        if (elResigningDIN) elResigningDIN.textContent = resigningDirectorDIN;
        if (elResigningDesignation) elResigningDesignation.textContent = resigningDirectorDesignation;
        if (elResigningDirector2) elResigningDirector2.textContent = resigningDirectorName;
        if (elResigningDIN2) elResigningDIN2.textContent = resigningDirectorDIN;
        if (elFooterCompanyName) elFooterCompanyName.textContent = companyName;
        if (elFooterDirectorName) elFooterDirectorName.textContent = directorName;
        if (elFooterDIN) elFooterDIN.textContent = din;

        if (meetingDate && elMeetingDate) {
            const formattedDate = new Date(meetingDate).toLocaleDateString('en-IN', {
                day: '2-digit',
                month: 'long',
                year: 'numeric'
            });
            elMeetingDate.textContent = formattedDate;
        } else if (elMeetingDate) {
            elMeetingDate.textContent = '__________';
        }

        if (meetingTime && elMeetingTime) {
            elMeetingTime.textContent = meetingTime;
        }

        if (resignationDate && elResignationDate) {
            const formattedResignationDate = new Date(resignationDate).toLocaleDateString('en-IN', {
                day: '2-digit',
                month: 'long',
                year: 'numeric'
            });
            elResignationDate.textContent = formattedResignationDate;
        } else if (elResignationDate) {
            elResignationDate.textContent = '________________';
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
