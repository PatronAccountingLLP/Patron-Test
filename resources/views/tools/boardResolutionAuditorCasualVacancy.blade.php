@extends('tools.tool-master')
@section('title')
{{_('Board Resolution for Appointment of Statutory Auditor to Fill Casual Vacancy')}}
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
            <h1 class="hero-title">Board Resolution for  <span>Appointment of Statutory Auditor to Fill Casual Vacancy</span></h1>
            <p class="hero-subtitle">
                Generate a certified Board Resolution for Appointment of Statutory Auditor to Fill Casual Vacancy in under 60 seconds.
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
            <h2 class="form-title">Enter Company & Auditor Details</h2>
            <p class="form-description">
                Fill in the details below to generate a Board Resolution for Appointment of Statutory Auditor to Fill Casual Vacancy.
            </p>
        </div>

        <form id="auditorAppointmentForm" method="POST" action="{{route('br.auditor.casual.vacancy') }}">
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

                <!-- New Auditor Details Section -->
                <div class="form-group full-width">
                    <label class="form-label" style="font-weight:600;color:#333;border-bottom:1px solid #eee;padding-bottom:8px;margin-bottom:12px;">New Auditor Details (To be Appointed)</label>
                </div>

                <div class="form-group full-width">
                    <label class="form-label">Name of New Auditor Firm <span class="required">*</span></label>
                    <input type="text" name="new_auditor_name" class="form-control" placeholder="Enter new auditor firm name (e.g., M/s. ABC & Associates)" required>
                </div>

                <div class="form-group full-width">
                    <label class="form-label">New Auditor Firm Registration Number (FRN) <span class="required">*</span></label>
                    <input type="text" name="new_auditor_frn" class="form-control" placeholder="Enter FRN" required>
                </div>

                <!-- Resigning Auditor Details Section -->
                <div class="form-group full-width">
                    <label class="form-label" style="font-weight:600;color:#333;border-bottom:1px solid #eee;padding-bottom:8px;margin-bottom:12px;">Resigning Auditor Details</label>
                </div>

                <div class="form-group full-width">
                    <label class="form-label">Name of Resigning Auditor Firm <span class="required">*</span></label>
                    <input type="text" name="resigning_auditor_name" class="form-control" placeholder="Enter resigning auditor firm name" required>
                </div>

                <div class="form-group full-width">
                    <label class="form-label">Resigning Auditor Firm Registration Number (FRN) <span class="required">*</span></label>
                    <input type="text" name="resigning_auditor_frn" class="form-control" placeholder="Enter FRN" required>
                </div>

                <!-- Financial Year & Authorisation -->
                <div class="form-group full-width">
                    <label class="form-label">Financial Year <span class="required">*</span></label>
                    <input type="text" name="financial_year" class="form-control" placeholder="Enter financial year (e.g., 2024-25)" required>
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
                        <p class="preview-subtitle">Board Resolution for Appointment of Statutory Auditor</p>
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
                        <strong>SUBJECT:</strong> Appointment of Statutory Auditor to Fill Casual Vacancy
                    </p>

                    <p class="certificate-paragraph">
                        <strong>RESOLVED THAT</strong> pursuant to the provisions of Sections 139, 142 of the Companies Act, 2013, the consent of the Board be and is hereby accorded to appoint:
                    </p>

                    <p class="certificate-paragraph">
                        <strong id="prevNewAuditor">M/s. ________________</strong>, Chartered Accountants,
                        having FRN: <strong id="prevNewFRN">__________</strong>
                        as the Statutory Auditors for FY <strong id="prevFinancialYear">________</strong>
                        to fill the casual vacancy caused by the resignation of:
                    </p>

                    <p class="certificate-paragraph">
                        <strong id="prevResigningAuditor">M/s. ________________</strong>, Chartered Accountants,
                        having FRN: <strong id="prevResigningFRN">__________</strong>
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
            <h2 class="info-title">Board Resolution for Appointment of Statutory Auditor to Fill Casual Vacancy</h2>
            <p class="info-subtitle">
                Statutory Compliance Documentation for Indian Companies
            </p>
        </div>

        <!-- Introduction -->
        <div class="info-content">
            <h3 class="info-subheading">Introduction</h3>

            <p class="info-text">
                A Board Resolution for Appointment of Statutory Auditor to Fill Casual Vacancy is a
                formal corporate document that records the Board of Directors' decision to appoint a
                new statutory auditor when a casual vacancy arises due to the resignation of the
                existing auditor. Under the Companies Act, 2013, when an auditor resigns, a casual
                vacancy is created which must be filled by the Board of Directors within thirty days
                from the date of such vacancy. The auditor so appointed holds office until the
                conclusion of the next Annual General Meeting.
            </p>

            <p class="info-text">
                This resolution specifies the name and Firm Registration Number (FRN) of the newly
                appointed auditor firm, the name of the resigning auditor, the financial year for
                which the appointment is made, and the remuneration terms. The company must obtain a
                written consent and eligibility certificate from the proposed auditor before
                appointment. It is essential documentation for compliance with statutory audit
                requirements and must be filed with the Registrar of Companies.
            </p>

            <!-- Benefits -->
            <h3 class="info-subheading">Benefits of Using a Standard Format</h3>

            <p class="info-text">
                Utilising a professionally drafted board resolution format ensures that all statutory
                requirements under the Companies Act, 2013 and the Companies (Audit and Auditors)
                Rules, 2014 are properly addressed. A ready-to-use template saves valuable time
                during the thirty-day compliance window, reduces the risk of procedural errors, and
                provides a consistent framework that captures essential details including auditor
                credentials, FRN, remuneration terms, and proper authorisation.
            </p>

            <!-- Relevance -->
            <h3 class="info-subheading">Relevance to Statutory Compliance</h3>

            <p class="info-text">
                The appointment of statutory auditors is a critical compliance requirement for all
                companies. Following Company Registration, companies must appoint their first auditor
                within thirty days from incorporation. When a casual vacancy arises due to
                resignation, the Board must act within the prescribed timeline to ensure continuity
                of the audit function.
            </p>

            <p class="info-text">
                The company must file Form ADT-1 with the Registrar of Companies within fifteen days
                of such appointment, along with the board resolution and auditor's consent letter.
            </p>
        </div>

        <!-- Sample Format -->
        <div class="format-section">
            <h3 class="format-title">
                Board Resolution for Appointment of Statutory Auditor to Fill Casual Vacancy – Sample Format
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
                <strong>SUBJECT: APPOINTMENT OF STATUTORY AUDITOR TO FILL CASUAL VACANCY</strong>
            </p>

            <p class="format-text">
                <strong>"RESOLVED THAT</strong> pursuant to the provisions of Sections 139, 142 and other applicable provisions, if any, of the Companies Act, 2013 read with the Companies (Audit and Auditors) Rules, 2014 (as amended from time to time) and any other applicable law for the time being in force (including any statutory modification or re-enactment thereof), the consent of the Board of Directors be and is hereby accorded to appoint:
            </p>

            <p class="format-text">
                M/s. __________________________________________ (Name of the Auditor Firm)
            </p>

            <p class="format-text">
                Chartered Accountants, having Firm Registration Number (FRN): __________
            </p>

            <p class="format-text">
                from whom the written consent and certificate of eligibility pursuant to Section 139 of the Companies Act, 2013 has been received, as the Statutory Auditors of the Company for the Financial Year ____________ to hold office until the conclusion of the next Annual General Meeting of the Company, to fill the casual vacancy caused by the resignation of:
            </p>

            <p class="format-text">
                M/s. __________________________________________ (Name of the Resigning Auditor Firm)
            </p>

            <p class="format-text">
                Chartered Accountants, having Firm Registration Number (FRN): __________
            </p>

            <p class="format-text">
                at such remuneration and out-of-pocket expenses as may be determined by the Board of Directors of the Company.
            </p>

            <p class="format-text">
                <strong>RESOLVED FURTHER THAT</strong> any Director of the Company, severally or jointly, be and is hereby authorised and empowered to:
            </p>

            <ul class="format-list">
                <li>File Form ADT-1 (Notice of Appointment of Auditor) with the Registrar of Companies within the prescribed time;</li>
                <li>Execute engagement letter and other necessary documents with the newly appointed auditors;</li>
                <li>Finalise the remuneration and terms of appointment;</li>
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
                    1. What is the format of the Board Resolution for appointment of Statutory Auditor to fill the casual vacancy?
                </h4>
                <p class="faq-answer">
                    The resolution should reference Sections 139 and 142 of the Companies Act, 2013
                    and the Companies (Audit and Auditors) Rules, 2014. It must specify the name of
                    the newly appointed auditor firm with FRN, the financial year of appointment,
                    tenure until the next AGM, the name of the resigning auditor, and remuneration
                    terms. Authorisation for filing Form ADT-1 should be included.
                </p>
            </div>

            <div class="faq-item">
                <h4 class="faq-question">
                    2. Is the signature of all directors mandatory on the Board resolution format for appointment of Statutory Auditor to fill the casual vacancy?
                </h4>
                <p class="faq-answer">
                    No, signatures of all directors are not mandatory. The resolution is passed by a
                    majority of directors present and voting at a duly convened board meeting where
                    quorum is present. The certified true copy may be signed by a single authorised
                    director or the company secretary. The minutes should record the names of
                    directors present and the voting details.
                </p>
            </div>

            <div class="faq-item">
                <h4 class="faq-question">
                    3. Which resolution is required for the appointment of Statutory Auditor to fill the casual vacancy?
                </h4>
                <p class="faq-answer">
                    A board resolution is required to fill a casual vacancy in the office of auditor
                    caused by resignation. The Board must pass this resolution within thirty days
                    from the date of vacancy. The auditor so appointed holds office until the
                    conclusion of the next Annual General Meeting, where the appointment may be
                    ratified or a new auditor may be appointed by the shareholders.
                </p>
            </div>

            <div class="faq-item">
                <h4 class="faq-question">
                    4. Does the Board Resolution format for appointment of Statutory Auditor to fill the casual vacancy need to be certified by a professional?
                </h4>
                <p class="faq-answer">
                    There is no statutory requirement for the board resolution to be certified by an
                    external professional. The certified true copy may be signed by any director or
                    the company secretary. However, for filing Form ADT-1 with the ROC, the form
                    itself may require certification by a practising Chartered Accountant, Company
                    Secretary, or Cost Accountant as per form-specific requirements.
                </p>
            </div>

            <div class="faq-item">
                <h4 class="faq-question">
                    5. What is the resolution for appointment of statutory auditor to fill the casual vacancy?
                </h4>
                <p class="faq-answer">
                    It is a board resolution passed under Sections 139 and 142 of the Companies Act,
                    2013 to appoint a new statutory auditor when a vacancy arises due to resignation.
                    The resolution must be passed within thirty days of the vacancy, specify the
                    appointed auditor's credentials and FRN, mention the resigning auditor, and
                    include terms of remuneration. Form ADT-1 must be filed within fifteen days.
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

    const form = document.getElementById('auditorAppointmentForm');
    const downloadPdfBtn = document.getElementById('downloadPdfBtn');
    const alertContainer = document.getElementById('alertContainer');

    // Set default date
    const today = new Date().toISOString().split('T')[0];
    const dateInput = form.querySelector('[name="meeting_date"]');
    if (dateInput) {
        dateInput.value = today;
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
        const newAuditorName = form.querySelector('[name="new_auditor_name"]').value || 'M/s. ________________';
        const newAuditorFRN = form.querySelector('[name="new_auditor_frn"]').value || '__________';
        const resigningAuditorName = form.querySelector('[name="resigning_auditor_name"]').value || 'M/s. ________________';
        const resigningAuditorFRN = form.querySelector('[name="resigning_auditor_frn"]').value || '__________';
        const financialYear = form.querySelector('[name="financial_year"]').value || '________';
        const directorName = form.querySelector('[name="director_name"]').value || '________________';
        const din = form.querySelector('[name="din"]').value || '________________';

        // Update preview text
        const elCompanyName = document.getElementById('prevCompanyName');
        const elCIN = document.getElementById('prevCIN');
        const elMeetingDate = document.getElementById('prevMeetingDate');
        const elMeetingTime = document.getElementById('prevMeetingTime');
        const elNewAuditor = document.getElementById('prevNewAuditor');
        const elNewFRN = document.getElementById('prevNewFRN');
        const elResigningAuditor = document.getElementById('prevResigningAuditor');
        const elResigningFRN = document.getElementById('prevResigningFRN');
        const elFinancialYear = document.getElementById('prevFinancialYear');
        const elFooterCompanyName = document.getElementById('footerCompanyName');
        const elFooterDirectorName = document.getElementById('footerDirectorName');
        const elFooterDIN = document.getElementById('footerDIN');

        if (elCompanyName) elCompanyName.textContent = companyName;
        if (elCIN) elCIN.textContent = cin;
        if (elNewAuditor) elNewAuditor.textContent = newAuditorName;
        if (elNewFRN) elNewFRN.textContent = newAuditorFRN;
        if (elResigningAuditor) elResigningAuditor.textContent = resigningAuditorName;
        if (elResigningFRN) elResigningFRN.textContent = resigningAuditorFRN;
        if (elFinancialYear) elFinancialYear.textContent = financialYear;
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
