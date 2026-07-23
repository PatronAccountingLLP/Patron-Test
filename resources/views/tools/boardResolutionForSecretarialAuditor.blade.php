@extends('tools.tool-master')
@section('title')
{{_('Board Resolution for Appointment of Secretarial Auditor')}}
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
            <h1 class="hero-title">Board Resolution for <span> Appointment of Secretarial Auditor</span></h1>
            <p class="hero-subtitle">
                Generate a certified Board Resolution for Appointment of Secretarial Auditor in under 60 seconds.
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
            <h2 class="form-title">Enter Company &amp; Auditor Details</h2>
            <p class="form-description">
                Fill in the details below to generate a Board Resolution for Appointment of Secretarial Auditor.
            </p>
        </div>

        <form id="secretarialAuditorForm" method="POST" action="{{route('br.secretarial.auditor') }}">
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
                    <label class="form-label">Financial Year <span class="required">*</span></label>
                    <input type="text" name="financial_year" class="form-control" placeholder="e.g., 2024-25" required>
                </div>

                <div class="form-group full-width">
                    <label class="form-label">Name of Secretarial Auditor / Firm <span class="required">*</span></label>
                    <input type="text" name="auditor_name" class="form-control" placeholder="e.g., M/s ABC & Associates" required>
                </div>

                <div class="form-row">
                    <div class="form-group">
                        <label class="form-label">Certificate of Practice (COP) Number <span class="required">*</span></label>
                        <input type="text" name="cop_number" class="form-control" placeholder="Enter COP Number" required>
                    </div>

                    <div class="form-group">
                        <label class="form-label">Place <span class="required">*</span></label>
                        <input type="text" name="place" class="form-control" placeholder="City / Place" required>
                    </div>
                </div>

                <div class="form-group full-width">
                    <label class="form-label">Auditor's Address <span class="required">*</span></label>
                    <textarea name="auditor_address" class="form-control" placeholder="Enter secretarial auditor's office address" required></textarea>
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
                        <label class="form-label">Resolution Date <span class="required">*</span></label>
                        <input type="date" name="resolution_date" class="form-control" required>
                    </div>
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
                        <p class="preview-subtitle">Board Resolution for Appointment of Secretarial Auditor</p>
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
                        <strong>SUBJECT: APPOINTMENT OF SECRETARIAL AUDITOR FOR FY <span id="prevFinancialYear">________</span></strong>
                    </p>

                    <p class="certificate-paragraph">
                        <strong>RESOLVED THAT</strong> pursuant to Section 204 of the Companies Act, 2013, 
                        the consent of the Board be accorded to appoint:
                    </p>

                    <p class="certificate-paragraph">
                        <strong>Secretarial Auditor:</strong> <span id="prevAuditorName">________________</span>
                    </p>
                    
                    <p class="certificate-paragraph">
                        <strong>COP Number:</strong> <span id="prevCOPNumber">________________</span>
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
            <h2 class="info-title">Board Resolution for Appointment of Secretarial Auditor</h2>
            <p class="info-subtitle">
                Professional Format Guide for Indian Companies
            </p>
        </div>

        <!-- Introduction -->
        <div class="info-content">
            <h3 class="info-subheading">Introduction</h3>

            <p class="info-text">
                A Board Resolution for Appointment of Secretarial Auditor is a formal corporate 
                document that records the Board of Directors' consent to appoint a Company Secretary 
                in Practice to conduct the secretarial audit of the company. Under Section 204 of 
                the Companies Act, 2013, certain classes of companies, including listed companies, 
                public companies meeting prescribed thresholds, and private companies meeting 
                specified criteria, are required to obtain a secretarial audit report from a 
                practising Company Secretary.
            </p>

            <p class="info-text">
                This resolution specifies the name and Certificate of Practice (COP) number of the 
                Secretarial Auditor, the financial year for which the appointment is made, remuneration 
                terms, and authorises the auditor to access all necessary records. The document is 
                essential for regulatory compliance and must be maintained as part of the company's 
                statutory records. The Secretarial Audit Report in Form MR-3 is attached to the 
                Board's Report in the annual report.
            </p>

            <!-- Benefits -->
            <h3 class="info-subheading">Benefits of Using a Standard Format</h3>

            <p class="info-text">
                Utilising a professionally drafted board resolution format ensures that all statutory 
                requirements under the Companies Act, 2013 and the Companies (Appointment and 
                Remuneration of Managerial Personnel) Rules, 2014 are properly addressed. A ready-to-use 
                template saves valuable time during board meetings, reduces the risk of procedural 
                errors, and provides a consistent framework covering appointment terms, engagement 
                letter approval, and access to records.
            </p>

            <!-- Relevance -->
            <h3 class="info-subheading">Relevance to Corporate Compliance</h3>

            <p class="info-text">
                The appointment of a Secretarial Auditor is a mandatory annual compliance requirement 
                for eligible companies. Following Company Registration, businesses should assess 
                whether they fall within the prescribed criteria requiring secretarial audit. The 
                Secretarial Auditor examines the company's compliance with corporate laws, secretarial 
                standards, and listing regulations (if applicable). The audit report must be annexed 
                to the Board's Report as per the Companies Act, 2013.
            </p>
        </div>

        <!-- Sample Format -->
        <div class="format-section">
            <h3 class="format-title">
                Board Resolution for Appointment of Secretarial Auditor – Sample Format
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
                <strong>SUBJECT: APPOINTMENT OF SECRETARIAL AUDITOR FOR THE FINANCIAL YEAR __________</strong>
            </p>

            <p class="format-text">
                "RESOLVED THAT pursuant to the provisions of Section 204 of the Companies Act, 2013 
                read with Rule 9 of the Companies (Appointment and Remuneration of Managerial Personnel) 
                Rules, 2014 and other applicable provisions (including any statutory modification(s) 
                or re-enactment thereof for the time being in force), the consent of the Board be 
                and is hereby accorded to appoint:
            </p>

            <p class="format-text">
                <strong>Name of Secretarial Auditor / Firm:</strong> M/s __________________________________________
            </p>

            <p class="format-text">
                <strong>Certificate of Practice (COP) Number:</strong> __________________________________________
            </p>

            <p class="format-text">
                <strong>Address:</strong> __________________________________________
            </p>

            <p class="format-text">
                who have given their consent to act as such, as the Secretarial Auditor of the Company 
                for the Financial Year __________ on such remuneration as may be mutually agreed upon 
                between the Board and the Secretarial Auditor.
            </p>

            <p class="format-text">
                RESOLVED FURTHER THAT the draft engagement letter for the appointment of the aforesaid 
                Secretarial Auditor, as placed before the Board, be and is hereby approved...
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
                    1. What is the format of the Board Resolution for the Appointment of a Secretarial Auditor?
                </h4>
                <p class="faq-answer">
                    The board resolution should reference Section 204 of the Companies Act, 2013 and 
                    the Companies (Appointment and Remuneration of Managerial Personnel) Rules, 2014. 
                    It must contain the Secretarial Auditor's name and COP number, the financial year 
                    of appointment, remuneration terms, approval of engagement letter, grant of access 
                    to records, and authorisation for filing. The resolution should be certified by 
                    an authorised director.
                </p>
            </div>

            <div class="faq-item">
                <h4 class="faq-question">
                    2. Is the signature of all directors mandatory on the Board resolution format for Appointment of a Secretarial Auditor?
                </h4>
                <p class="faq-answer">
                    No, signatures of all directors are not mandatory. The resolution is passed by a 
                    majority of directors present and voting at a duly convened board meeting where 
                    quorum is present. The certified true copy may be signed by a single authorised 
                    director or the company secretary. The minutes should record the names of directors 
                    present and the voting details.
                </p>
            </div>

            <div class="faq-item">
                <h4 class="faq-question">
                    3. Is mentioning the Remuneration amount mandatory in the resolution?
                </h4>
                <p class="faq-answer">
                    No, mentioning the specific remuneration amount is not mandatory in the board 
                    resolution. The resolution may state that remuneration shall be as mutually agreed 
                    between the Board and the Secretarial Auditor, or as may be decided by the Board. 
                    The actual remuneration can be finalised separately and documented in the engagement 
                    letter between the company and the auditor.
                </p>
            </div>

            <div class="faq-item">
                <h4 class="faq-question">
                    4. Can a company secretary be appointed by resolution by certificate?
                </h4>
                <p class="faq-answer">
                    No, a Secretarial Auditor must be appointed by a board resolution passed at a duly 
                    convened board meeting. The appointment cannot be made by a resolution by circulation 
                    for this purpose. The Secretarial Auditor must be a Company Secretary in Practice 
                    holding a valid Certificate of Practice (COP) issued by the Institute of Company 
                    Secretaries of India (ICSI). The auditor must provide written consent to act as such.
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

    const form = document.getElementById('secretarialAuditorForm');
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
        const financialYear = form.querySelector('[name="financial_year"]').value || '________';
        const auditorName = form.querySelector('[name="auditor_name"]').value || '________________';
        const copNumber = form.querySelector('[name="cop_number"]').value || '________________';
        const place = form.querySelector('[name="place"]').value || '________________';
        const resolutionDate = form.querySelector('[name="resolution_date"]').value;

        // Update preview text
        const elCompanyName = document.getElementById('prevCompanyName');
        const elCIN = document.getElementById('prevCIN');
        const elMeetingDate = document.getElementById('prevMeetingDate');
        const elMeetingTime = document.getElementById('prevMeetingTime');
        const elFinancialYear = document.getElementById('prevFinancialYear');
        const elAuditorName = document.getElementById('prevAuditorName');
        const elCOPNumber = document.getElementById('prevCOPNumber');
        const elFooterCompanyName = document.getElementById('footerCompanyName');
        const elFooterPlace = document.getElementById('footerPlace');
        const elFooterDate = document.getElementById('footerDate');

        if (elCompanyName) elCompanyName.textContent = companyName;
        if (elCIN) elCIN.textContent = cin;
        if (elFinancialYear) elFinancialYear.textContent = financialYear;
        if (elAuditorName) elAuditorName.textContent = auditorName;
        if (elCOPNumber) elCOPNumber.textContent = copNumber;
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
