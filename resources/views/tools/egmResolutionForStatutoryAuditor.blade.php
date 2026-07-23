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
            <h1 class="hero-title">EGM Resolution for Appointment of  <span> Statutory Auditor</span></h1>
            <p class="hero-subtitle">
                Generate a certified Statutory Auditor in under 60 seconds.
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
            <h2 class="form-title">Enter Company &amp; Resolution Details</h2>
            <p class="form-description">
                Fill in the details below to generate an EGM Resolution for Appointment of Statutory Auditor.
            </p>
        </div>

        <form id="egmAuditorResolutionForm" method="POST" action="{{route('egm.auditor.resolution') }}">
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
                    <label class="form-label">Meeting Venue <span class="required">*</span></label>
                    <input type="text" name="meeting_venue" class="form-control" placeholder="Enter meeting venue" required>
                </div>

                <div class="form-group full-width">
                    <label class="form-label">Name of Auditor / Audit Firm <span class="required">*</span></label>
                    <input type="text" name="auditor_name" class="form-control" placeholder="Enter auditor/firm name" required>
                </div>
                
                <div class="form-row">
                    <div class="form-group">
                        <label class="form-label">Firm Registration Number <span class="required">*</span></label>
                        <input type="text" name="firm_registration_no" class="form-control" placeholder="Enter FRN" required>
                    </div>

                    <div class="form-group">
                        <label class="form-label">Tenure (Years) <span class="required">*</span></label>
                        <div class="select-wrapper">
                            <select name="tenure_years" class="form-control form-select" required>
                                <option value="">Select tenure</option>
                                <option value="1">One (1) Year</option>
                                <option value="2">Two (2) Years</option>
                                <option value="3">Three (3) Years</option>
                                <option value="4">Four (4) Years</option>
                                <option value="5" selected>Five (5) Years</option>
                            </select>
                        </div>
                    </div>
                </div>
                
                <div class="form-group full-width">
                    <label class="form-label">Auditor's Address <span class="required">*</span></label>
                    <textarea name="auditor_address" class="form-control" placeholder="Enter auditor's office address" required></textarea>
                </div>

                <div class="form-row">
                    <div class="form-group">
                        <label class="form-label">Financial Year From <span class="required">*</span></label>
                        <input type="text" name="fy_from" class="form-control" placeholder="e.g., 2024-25" required>
                    </div>

                    <div class="form-group">
                        <label class="form-label">Financial Year To <span class="required">*</span></label>
                        <input type="text" name="fy_to" class="form-control" placeholder="e.g., 2028-29" required>
                    </div>
                </div>
                
                <div class="form-row">
                    <div class="form-group">
                        <label class="form-label">AGM Number (To Conclude) <span class="required">*</span></label>
                        <input type="text" name="agm_conclude" class="form-control" placeholder="e.g., 10th" required>
                    </div>

                    <div class="form-group">
                        <label class="form-label">Appointment Type <span class="required">*</span></label>
                        <div class="select-wrapper">
                            <select name="appointment_type" class="form-control form-select" required>
                                <option value="">Select type</option>
                                <option value="Appointment">Appointment</option>
                                <option value="Re-appointment">Re-appointment</option>
                            </select>
                        </div>
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-group">
                        <label class="form-label">Authorised Signatory Name <span class="required">*</span></label>
                        <input type="text" name="signatory_name" class="form-control" placeholder="Enter signatory name" required>
                    </div>

                    <div class="form-group">
                        <label class="form-label">Designation <span class="required">*</span></label>
                        <div class="select-wrapper">
                            <select name="designation" class="form-control form-select" required>
                                <option value="">Select designation</option>
                                <option value="Director">Director</option>
                                <option value="Managing Director">Managing Director</option>
                                <option value="Company Secretary">Company Secretary</option>
                                <option value="Chairman">Chairman</option>
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
                        <p class="preview-subtitle">EGM Resolution for Appointment of Statutory Auditor</p>
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
                    <h2 class="certificate-doc-title">CERTIFIED TRUE COPY OF THE RESOLUTION</h2>
                    <p class="certificate-doc-subtitle">
                        Passed at the Extraordinary General Meeting (EGM) of the Members
                    </p>
                </div>

                <div class="certificate-body">
                    <p class="certificate-paragraph">
                        <strong id="prevCompanyName">________________</strong><br>
                        CIN: <strong id="prevCIN">________________</strong>
                    </p>

                    <p class="certificate-paragraph">
                        <strong>Date of Meeting:</strong> <span id="prevMeetingDate">__________</span><br>
                        <strong>Time:</strong> <span id="prevMeetingTime">__________</span><br>
                        <strong>Venue:</strong> <span id="prevMeetingVenue">________________</span>
                    </p>

                    <p class="certificate-paragraph">
                        <strong>SUBJECT: APPOINTMENT OF STATUTORY AUDITOR</strong>
                    </p>

                    <p class="certificate-paragraph">
                        <strong>RESOLVED THAT</strong> pursuant to the provisions of Section 139 read with 
                        the Companies (Audit and Auditors) Rules, 2014, the members hereby approve the 
                        <span id="prevAppointmentType">appointment</span> of 
                        <strong id="prevAuditorName">________________</strong> 
                        (FRN: <strong id="prevFRN">________________</strong>) 
                        as the Statutory Auditors of the Company for a term of 
                        <strong id="prevTenure">Five (5)</strong> consecutive years.
                    </p>

                    <p class="certificate-paragraph">
                        <strong>Financial Years Covered:</strong> 
                        FY <span id="prevFYFrom">________</span> to FY <span id="prevFYTo">________</span>
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
            <h2 class="info-title">EGM Resolution for Appointment of Statutory Auditor</h2>
            <p class="info-subtitle">
                Professional Format Guide for Indian Companies
            </p>
        </div>

        <!-- Introduction -->
        <div class="info-content">
            <h3 class="info-subheading">Introduction</h3>

            <p class="info-text">
                An Extraordinary General Meeting (EGM) Resolution for Appointment of Statutory Auditor 
                is a formal document that records shareholders' approval for appointing an auditor 
                outside the regular Annual General Meeting cycle. Under the Companies Act, 2013, 
                while auditor appointments are typically made at the AGM, certain circumstances such 
                as casual vacancy caused by resignation, removal of an auditor, or appointment of 
                the first auditor may necessitate an EGM for this purpose.
            </p>

            <p class="info-text">
                This resolution follows a prior recommendation by the Board of Directors and specifies 
                the auditor's name, firm registration number, tenure, and remuneration terms. The 
                document is essential for regulatory compliance and must be filed with the Registrar 
                of Companies using Form ADT-1 within the prescribed timeline. It is commonly required 
                when filling a casual vacancy, appointing an auditor after removal proceedings, or 
                in cases where the first auditor's appointment needs ratification by members.
            </p>

            <!-- Benefits -->
            <h3 class="info-subheading">Benefits of Using a Standard Format</h3>

            <p class="info-text">
                Utilising a professionally drafted EGM resolution format ensures that all statutory 
                requirements under the Companies Act, 2013 and related rules are properly addressed. 
                A ready-to-use template saves valuable time in preparing meeting documentation, 
                reduces the risk of procedural errors, and provides a consistent framework that 
                captures essential details including tenure and remuneration provisions. Standardised 
                formats also facilitate smoother ROC filings.
            </p>

            <!-- Relevance -->
            <h3 class="info-subheading">Relevance to Statutory Compliance</h3>

            <p class="info-text">
                The appointment of a Statutory Auditor is a mandatory compliance requirement for all 
                companies. Following Company Registration, a company must appoint its first auditor 
                within 30 days of incorporation. If circumstances require an auditor appointment 
                outside the AGM schedule, an EGM must be convened. The resolution, along with the 
                auditor's consent letter (Form ADT-1), must be filed with the Registrar of Companies 
                within 15 days of the appointment.
            </p>
        </div>

        <!-- Sample Format -->
        <div class="format-section">
            <h3 class="format-title">
                EGM Resolution for Appointment of Statutory Auditor – Sample Format
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
                <strong>CERTIFIED TRUE COPY OF THE RESOLUTION</strong>
            </p>

            <p class="format-text">
                Passed at the Extraordinary General Meeting (EGM) of the Members of the Company
            </p>

            <p class="format-text">
                <strong>Date of Meeting:</strong> __.__.______
            </p>

            <p class="format-text">
                <strong>Time:</strong> ______ (Hours)
            </p>

            <p class="format-text">
                <strong>Venue:</strong> _______________________________
            </p>

            <p class="format-text">
                <strong>SUBJECT: APPOINTMENT OF STATUTORY AUDITOR</strong>
            </p>

            <p class="format-text">
                "RESOLVED THAT pursuant to the provisions of Section 139 read with the Companies 
                (Audit and Auditors) Rules, 2014 and other applicable provisions of the Companies 
                Act, 2013 (including any statutory modification(s) or re-enactment thereof for the 
                time being in force), and based on the recommendation of the Board of Directors, 
                the members of the Company hereby approve the appointment / re-appointment of:
            </p>

            <p class="format-text">
                <strong>Name of Auditor / Audit Firm:</strong> _______________________________
            </p>

            <p class="format-text">
                <strong>Firm Registration Number:</strong> _______________________________
            </p>

            <p class="format-text">
                <strong>Address:</strong> _______________________________
            </p>

            <p class="format-text">
                as the Statutory Auditors of the Company, to hold office for a term of:
            </p>

            <p class="format-text">
                <strong>Tenure:</strong> Five (5) consecutive years
            </p>

            <p class="format-text">
                <strong>From:</strong> Conclusion of this Extraordinary General Meeting
            </p>

            <p class="format-text">
                <strong>To:</strong> Conclusion of the __________ Annual General Meeting
            </p>

            <p class="format-text">
                <strong>Financial Years Covered:</strong> FY __________ to FY __________
            </p>

            <p class="format-text">
                at such remuneration plus applicable taxes and reimbursement of out-of-pocket 
                expenses as may be mutually agreed upon between the Statutory Auditors and the 
                Board of Directors of the Company.
            </p>

            <p class="format-text">
                RESOLVED FURTHER THAT all directors of the Company, either severally or jointly, 
                be and are hereby authorised to do all such acts, deeds, matters, and things as 
                may be necessary, proper, or expedient to give effect to this resolution, including 
                but not limited to filing necessary forms with the Registrar of Companies."
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
                    1. What is the format of EGM Resolution for the appointment of an Auditor?
                </h4>
                <p class="faq-answer">
                    The EGM resolution should reference applicable provisions of the Companies Act, 
                    2013, particularly Section 139 and the Companies (Audit and Auditors) Rules, 2014. 
                    It must contain the auditor's name and office address, firm registration number, 
                    tenure of appointment, financial years covered, and remuneration terms. The 
                    resolution should be duly signed by an authorised representative and certified 
                    as a true copy.
                </p>
            </div>

            <div class="faq-item">
                <h4 class="faq-question">
                    2. Is the signature of all directors mandatory on EGM Resolution for the appointment of an Auditor?
                </h4>
                <p class="faq-answer">
                    No, signatures of all directors are not mandatory. The EGM resolution is passed 
                    by the members (shareholders) of the company through an ordinary resolution. The 
                    certified true copy may be signed by a single authorised director, the company 
                    secretary, or the chairman of the meeting. The minutes should record the voting 
                    results, names of proposers and seconders, and attendance details.
                </p>
            </div>

            <div class="faq-item">
                <h4 class="faq-question">
                    3. Which resolution is required for the appointment of the Auditor?
                </h4>
                <p class="faq-answer">
                    An ordinary resolution passed at a general meeting (AGM or EGM, as applicable) 
                    is required for the appointment of a Statutory Auditor. Prior to this, the Board 
                    of Directors must pass a board resolution recommending the appointment. For filling 
                    a casual vacancy caused by resignation, the appointment must be approved by members 
                    within three months from the date of recommendation by the Board.
                </p>
            </div>

            <div class="faq-item">
                <h4 class="faq-question">
                    4. Does the EGM Resolution for the appointment of an Auditor need to be certified by a professional?
                </h4>
                <p class="faq-answer">
                    There is no statutory requirement for the EGM resolution to be certified by an 
                    external professional. The certified true copy may be signed by any director or 
                    the company secretary of the company. However, for filing Form ADT-1 with the 
                    Registrar of Companies to intimate the auditor appointment, a practising professional 
                    such as a Company Secretary, Chartered Accountant, or Cost Accountant may be 
                    required to certify the form.
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

    const form = document.getElementById('egmAuditorResolutionForm');
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
        const meetingVenue = form.querySelector('[name="meeting_venue"]').value || '________________';
        const auditorName = form.querySelector('[name="auditor_name"]').value || '________________';
        const firmRegNo = form.querySelector('[name="firm_registration_no"]').value || '________________';
        const tenureYears = form.querySelector('[name="tenure_years"]').value;
        const fyFrom = form.querySelector('[name="fy_from"]').value || '________';
        const fyTo = form.querySelector('[name="fy_to"]').value || '________';
        const appointmentType = form.querySelector('[name="appointment_type"]').value || 'appointment';
        const place = form.querySelector('[name="place"]').value || '________________';
        const resolutionDate = form.querySelector('[name="resolution_date"]').value;

        // Tenure text mapping
        const tenureText = {
            '1': 'One (1)',
            '2': 'Two (2)',
            '3': 'Three (3)',
            '4': 'Four (4)',
            '5': 'Five (5)'
        };

        // Update preview text
        const elCompanyName = document.getElementById('prevCompanyName');
        const elCIN = document.getElementById('prevCIN');
        const elMeetingDate = document.getElementById('prevMeetingDate');
        const elMeetingTime = document.getElementById('prevMeetingTime');
        const elMeetingVenue = document.getElementById('prevMeetingVenue');
        const elAuditorName = document.getElementById('prevAuditorName');
        const elFRN = document.getElementById('prevFRN');
        const elTenure = document.getElementById('prevTenure');
        const elFYFrom = document.getElementById('prevFYFrom');
        const elFYTo = document.getElementById('prevFYTo');
        const elAppointmentType = document.getElementById('prevAppointmentType');
        const elFooterCompanyName = document.getElementById('footerCompanyName');
        const elFooterPlace = document.getElementById('footerPlace');
        const elFooterDate = document.getElementById('footerDate');

        if (elCompanyName) elCompanyName.textContent = companyName;
        if (elCIN) elCIN.textContent = cin;
        if (elMeetingVenue) elMeetingVenue.textContent = meetingVenue;
        if (elAuditorName) elAuditorName.textContent = auditorName;
        if (elFRN) elFRN.textContent = firmRegNo;
        if (elTenure) elTenure.textContent = tenureText[tenureYears] || 'Five (5)';
        if (elFYFrom) elFYFrom.textContent = fyFrom;
        if (elFYTo) elFYTo.textContent = fyTo;
        if (elAppointmentType) elAppointmentType.textContent = appointmentType.toLowerCase();
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
