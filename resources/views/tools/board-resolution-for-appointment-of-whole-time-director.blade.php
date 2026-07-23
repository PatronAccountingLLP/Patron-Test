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
            <h1 class="hero-title">Board Resolution for <span> Appointment of Whole Time Director</span></h1>
            <p class="hero-subtitle">
                Generate a certifiedBoard Resolution for Appointment of Whole Time Director in under 60 seconds.
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
                Fill in the details below to generate a Board Resolution for Appointment of Whole Time Director.
            </p>
        </div>

        <form id="directorAppointmentForm" method="POST" action="{{route('br.wtd') }}">
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
                    <label class="form-label">Company Email <span class="required">*</span></label>
                    <input type="email" name="company_email" class="form-control" placeholder="Enter company email" required>
                </div>

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

                <div class="form-group full-width">
                    <label class="form-label">Meeting Venue <span class="required">*</span></label>
                    <input type="text" name="meeting_venue" class="form-control" placeholder="Enter meeting venue/address" required>
                </div>

                <div class="form-row">
                    <div class="form-group">
                        <label class="form-label">Director's Full Name <span class="required">*</span></label>
                        <input type="text" name="director_name" class="form-control" placeholder="Enter director's full name" required>
                    </div>
                    <div class="form-group">
                        <label class="form-label">Director's DIN <span class="required">*</span></label>
                        <input type="text" name="director_din" class="form-control" placeholder="Enter DIN number" required>
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-group">
                        <label class="form-label">Tenure Period (Years) <span class="required">*</span></label>
                        <div class="select-wrapper">
                            <select name="tenure_years" class="form-control form-select" required>
                                <option value="">Select tenure</option>
                                <option value="1">1 Year</option>
                                <option value="2">2 Years</option>
                                <option value="3">3 Years</option>
                                <option value="4">4 Years</option>
                                <option value="5" selected>5 Years</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="form-label">Tenure Period (In Words) <span class="required">*</span></label>
                        <input type="text" name="tenure_words" class="form-control" placeholder="e.g., Five (5) years" value="Five (5) years" required>
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-group">
                        <label class="form-label">Appointment From Date <span class="required">*</span></label>
                        <input type="date" name="appointment_from" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label class="form-label">Appointment To Date <span class="required">*</span></label>
                        <input type="date" name="appointment_to" class="form-control" required>
                    </div>
                </div>

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

                <div class="form-row">
                    <div class="form-group">
                        <label class="form-label">Signatory DIN <span class="required">*</span></label>
                        <input type="text" name="signatory_din" class="form-control" placeholder="Enter signatory DIN" required>
                    </div>
                    <div class="form-group">
                        <label class="form-label">Place <span class="required">*</span></label>
                        <input type="text" name="place" class="form-control" placeholder="City / Place" required>
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
                        <p class="preview-subtitle">Board Resolution for Appointment of Whole Time Director</p>
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
                        <p><strong id="prevCompanyName">________________</strong></p>
                        <p><strong>CIN: </strong><span id="prevCIN">________________</span></p>
                        <p><strong>Registered Office: </strong><span id="prevOfficeAddress">________________</span></p>
                        <p><strong>Email: </strong><span id="prevEmail">________________</span></p>
                    </div>

                    <p class="certificate-paragraph">
                        <strong>Date of Meeting: </strong><span id="prevMeetingDate">__________</span><br>
                        <strong>Time: </strong><span id="prevMeetingTime">______</span> (Hours)<br>
                        <strong>Venue: </strong><span id="prevMeetingVenue">________________</span>
                    </p>

                    <p class="certificate-paragraph">
                        <strong>SUBJECT: APPOINTMENT OF WHOLE TIME DIRECTOR</strong><br>
                        <strong>Name of Director: </strong><span id="prevDirectorName">________________</span><br>
                        <strong>DIN: </strong><span id="prevDirectorDIN">________________</span>
                    </p>

                    <p class="certificate-paragraph">
                        <strong>"RESOLVED THAT</strong> pursuant to the provisions of Sections 196, 197, and 203 read with Schedule V and other applicable provisions of the Companies Act, 2013 and the Companies (Appointment and Remuneration of Managerial Personnel) Rules, 2014 (including any statutory modification(s) or re-enactment thereof for the time being in force), and in accordance with the Articles of Association of the Company, and subject to the approval of shareholders in the next general meeting and such other approvals as may be required from the Central Government or any other authority, the consent of the Board of Directors be and is hereby accorded for the appointment of:
                    </p>

                    <p class="certificate-paragraph">
                        Mr./Ms. <strong id="prevDirectorNameFull">________________</strong> (DIN: <span id="prevDirectorDINFull">__________</span>)
                    </p>

                    <p class="certificate-paragraph">
                        as Whole Time Director of the Company, whose office shall be liable to determination by retirement by rotation, for a period of:
                    </p>

                    <p class="certificate-paragraph">
                        <strong>Tenure: </strong><span id="prevTenureWords">________________</span><br>
                        <strong>From: </strong><span id="prevFromDate">__________</span><br>
                        <strong>To: </strong><span id="prevToDate">__________</span>
                    </p>

                    <p class="certificate-paragraph">
                        The remuneration for the aforesaid period shall be paid on such terms and conditions as approved by the Nomination and Remuneration Committee in its meeting.
                    </p>

                    <p class="certificate-paragraph">
                        <strong>RESOLVED FURTHER THAT</strong> in the event of loss or inadequacy of profits in any financial year during the tenure of appointment, the Whole Time Director shall be entitled to receive salary, perquisites, and other allowances subject to the ceiling limits specified in Schedule V of the Companies Act, 2013 as amended from time to time, and subject to the approval of the Central Government, if so required, in accordance with the provisions of the Companies Act, 2013.
                    </p>

                    <p class="certificate-paragraph">
                        <strong>RESOLVED FURTHER THAT</strong> any Director or the Company Secretary of the Company be and is hereby authorised to sign and submit the necessary forms, papers, and documents with the Registrar of Companies to give effect to this resolution, and to do all such acts, deeds, and things as may be necessary or expedient in this regard.
                    </p>

                    <div class="certificate-signature">
                        <p>For <strong id="footerCompanyName">________________</strong></p>
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
            <h2 class="info-title">Board Resolution for Appointment of Whole Time Director</h2>
            <p class="info-subtitle">
                Professional Format Guide for Corporate Compliance
            </p>
        </div>

        <!-- Introduction -->
        <div class="info-content">
            <h3 class="info-subheading">Introduction</h3>

            <p class="info-text">
                A Board Resolution for Appointment of Whole Time Director is a formal corporate
                document that records the consent of the Board of Directors to appoint an
                individual as a Whole Time Director of the company. Under the Companies Act,
                2013, prior approval of the Board is mandatory before appointing any person to
                this position.
            </p>

            <p class="info-text">
                A Whole Time Director is in the whole-time employment of the company and is
                entrusted with substantial managerial responsibilities. This resolution must
                be followed by shareholder approval through an ordinary resolution and
                subsequent filing of Form DIR-12 with the Registrar of Companies. The document
                is commonly reviewed during statutory audits and annual compliance checks.
            </p>

            <!-- Benefits -->
            <h3 class="info-subheading">Benefits of Using a Standard Format</h3>

            <p class="info-text">
                Using a professionally drafted board resolution format ensures that all
                statutory requirements under the Companies Act, 2013 are properly addressed.
                A standard template saves time, reduces procedural errors, and ensures
                consistency in documenting key details such as tenure, remuneration, and
                regulatory references.
            </p>

            <p class="info-text">
                Standardised formats also help in smoother processing of ROC filings and
                support efficient corporate governance practices.
            </p>

            <!-- Relevance -->
            <h3 class="info-subheading">Relevance to Corporate Compliance</h3>

            <p class="info-text">
                Appointment of a Whole Time Director triggers multiple compliance
                requirements. After Company Registration, businesses often appoint key
                managerial personnel to manage operations. The board resolution forms part
                of the mandatory documentation for filing Form DIR-12 with the Registrar of
                Companies.
            </p>

            <p class="info-text">
                Proper documentation supports ongoing secretarial compliance and audit
                requirements, ensuring transparency and regulatory adherence.
            </p>
        </div>

        <!-- Sample Format -->
        <div class="format-section">
            <h3 class="format-title">
                Board Resolution for Appointment of Whole Time Director – Sample Format
            </h3>

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
                Passed at the Meeting of the Board of Directors of the Company held on
                __________ (Date) at __________ (Time) at __________ (Venue)
            </p>

            <p class="format-text">
                <strong>SUBJECT:</strong> Appointment of Whole Time Director
            </p>

            <p class="format-text">
                <strong>Name of Director:</strong> _______________________________
            </p>

            <p class="format-text">
                <strong>DIN:</strong> _______________________________
            </p>

            <p class="format-text">
                <strong>RESOLVED THAT</strong> pursuant to the provisions of Sections 196,
                197, and 203 read with Schedule V and other applicable provisions of the
                Companies Act, 2013 and the Companies (Appointment and Remuneration of
                Managerial Personnel) Rules, 2014, and subject to approval of the members
                of the Company, the consent of the Board be and is hereby accorded for the
                appointment of Mr./Ms. _______________________________ (DIN:
                __________) as Whole Time Director of the Company.
            </p>

            <p class="format-text">
                The appointment shall be for a tenure of five (5) years commencing from
                __________ (Date) and ending on __________ (Date), on such terms and
                conditions including remuneration as approved by the Nomination and
                Remuneration Committee.
            </p>

            <p class="format-text">
                <strong>RESOLVED FURTHER THAT</strong> in the event of loss or inadequacy
                of profits during the tenure, the Whole Time Director shall be paid
                remuneration in accordance with the limits specified in Schedule V of the
                Companies Act, 2013, subject to requisite approvals, if any.
            </p>

            <p class="format-text">
                <strong>RESOLVED FURTHER THAT</strong> any Director or the Company
                Secretary of the Company be and is hereby authorised to file Form DIR-12
                and other necessary documents with the Registrar of Companies and to do
                all such acts as may be required to give effect to this resolution.
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
                    1. Who can sign the board resolution for appointment of Whole Time Director?
                </h4>
                <p class="faq-answer">
                    Any director present at the board meeting or the company secretary may
                    sign the certified true copy of the resolution, as authorised by the
                    Board.
                </p>
            </div>

            <div class="faq-item">
                <h4 class="faq-question">
                    2. Is the signature of all directors mandatory?
                </h4>
                <p class="faq-answer">
                    No. The resolution is passed by a majority of directors present and
                    voting at a duly convened board meeting. Only an authorised signatory
                    needs to sign the certified copy.
                </p>
            </div>

            <div class="faq-item">
                <h4 class="faq-question">
                    3. Which resolutions are required for appointment of Whole Time Director?
                </h4>
                <p class="faq-answer">
                    A board resolution is required to recommend the appointment, followed
                    by an ordinary resolution passed by shareholders at a general meeting.
                </p>
            </div>

            <div class="faq-item">
                <h4 class="faq-question">
                    4. Can the resolution be passed by circulation?
                </h4>
                <p class="faq-answer">
                    No. Appointment of a Whole Time Director must be approved at a duly
                    convened board meeting and cannot be passed by circulation.
                </p>
            </div>

            <div class="faq-item">
                <h4 class="faq-question">
                    5. Which ROC form is filed for appointment of Whole Time Director?
                </h4>
                <p class="faq-answer">
                    Form DIR-12 must be filed with the Registrar of Companies within 30
                    days of appointment along with supporting documents.
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

    const form = document.getElementById('directorAppointmentForm');
    const downloadPdfBtn = document.getElementById('downloadPdfBtn');

    // Set default dates
    const today = new Date().toISOString().split('T')[0];
    const meetingDateInput = form.querySelector('[name="meeting_date"]');
    const fromDateInput = form.querySelector('[name="appointment_from"]');
    
    if (meetingDateInput) {
        meetingDateInput.value = today;
    }
    
    if (fromDateInput) {
        fromDateInput.value = today;
    }

    // Set default time (11:00 AM)
    const timeInput = form.querySelector('[name="meeting_time"]');
    if (timeInput && !timeInput.value) {
        timeInput.value = "11:00";
    }

    // Calculate To Date based on tenure
    const tenureYearsSelect = form.querySelector('[name="tenure_years"]');
    const fromDateInputForCalc = form.querySelector('[name="appointment_from"]');
    const toDateInput = form.querySelector('[name="appointment_to"]');
    
    function calculateToDate() {
        if (fromDateInputForCalc.value && tenureYearsSelect.value) {
            const fromDate = new Date(fromDateInputForCalc.value);
            const years = parseInt(tenureYearsSelect.value);
            const toDate = new Date(fromDate);
            toDate.setFullYear(toDate.getFullYear() + years);
            
            // Subtract one day to get the day before the anniversary
            toDate.setDate(toDate.getDate() - 1);
            
            toDateInput.value = toDate.toISOString().split('T')[0];
        }
    }
    
    if (tenureYearsSelect && fromDateInputForCalc && toDateInput) {
        tenureYearsSelect.addEventListener('change', function() {
            calculateToDate();
            updatePreview();
        });
        
        fromDateInputForCalc.addEventListener('change', function() {
            calculateToDate();
            updatePreview();
        });
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
        const officeAddress = form.querySelector('[name="registered_office"]').value || '________________';
        const email = form.querySelector('[name="company_email"]').value || '________________';
        const meetingDate = form.querySelector('[name="meeting_date"]').value;
        const meetingTime = form.querySelector('[name="meeting_time"]').value || '______';
        const meetingVenue = form.querySelector('[name="meeting_venue"]').value || '________________';
        const directorName = form.querySelector('[name="director_name"]').value || '________________';
        const directorDIN = form.querySelector('[name="director_din"]').value || '________________';
        const tenureWords = form.querySelector('[name="tenure_words"]').value || '________________';
        const fromDate = form.querySelector('[name="appointment_from"]').value;
        const toDate = form.querySelector('[name="appointment_to"]').value;
        const signatoryName = form.querySelector('[name="signatory_name"]').value || '________________';
        const designation = form.querySelector('[name="signatory_designation"]').value || '________________';
        const signatoryDIN = form.querySelector('[name="signatory_din"]').value || '________________';
        const place = form.querySelector('[name="place"]').value || '________________';

        // Update preview text
        const elCompany = document.getElementById('prevCompanyName');
        const elCIN = document.getElementById('prevCIN');
        const elOfficeAddress = document.getElementById('prevOfficeAddress');
        const elEmail = document.getElementById('prevEmail');
        const elMeetingDate = document.getElementById('prevMeetingDate');
        const elMeetingTime = document.getElementById('prevMeetingTime');
        const elMeetingVenue = document.getElementById('prevMeetingVenue');
        const elDirectorName = document.getElementById('prevDirectorName');
        const elDirectorDIN = document.getElementById('prevDirectorDIN');
        const elDirectorNameFull = document.getElementById('prevDirectorNameFull');
        const elDirectorDINFull = document.getElementById('prevDirectorDINFull');
        const elTenureWords = document.getElementById('prevTenureWords');
        const elFromDate = document.getElementById('prevFromDate');
        const elToDate = document.getElementById('prevToDate');
        const elFooterCompany = document.getElementById('footerCompanyName');
        const elFooterSignatoryName = document.getElementById('footerSignatoryName');
        const elFooterDesignation = document.getElementById('footerDesignation');
        const elFooterDIN = document.getElementById('footerDIN');

        if (elCompany) elCompany.textContent = companyName;
        if (elCIN) elCIN.textContent = cin;
        if (elOfficeAddress) elOfficeAddress.textContent = officeAddress;
        if (elEmail) elEmail.textContent = email;
        if (elMeetingDate) elMeetingDate.textContent = meetingDate ? formatDate(meetingDate) : '__________';
        if (elMeetingTime) elMeetingTime.textContent = meetingTime;
        if (elMeetingVenue) elMeetingVenue.textContent = meetingVenue;
        if (elDirectorName) elDirectorName.textContent = directorName;
        if (elDirectorDIN) elDirectorDIN.textContent = directorDIN;
        if (elDirectorNameFull) elDirectorNameFull.textContent = directorName;
        if (elDirectorDINFull) elDirectorDINFull.textContent = directorDIN;
        if (elTenureWords) elTenureWords.textContent = tenureWords;
        if (elFromDate) elFromDate.textContent = fromDate ? formatDate(fromDate) : '__________';
        if (elToDate) elToDate.textContent = toDate ? formatDate(toDate) : '__________';
        if (elFooterCompany) elFooterCompany.textContent = companyName;
        if (elFooterSignatoryName) elFooterSignatoryName.textContent = signatoryName;
        if (elFooterDesignation) elFooterDesignation.textContent = designation;
        if (elFooterDIN) elFooterDIN.textContent = signatoryDIN;

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

    // // Form submission handling
    // form.addEventListener('submit', function(e) {
    //     e.preventDefault();
        
    //     const submitBtn = document.getElementById('downloadPdfBtn');
    //     const btnText = submitBtn.querySelector('.btn-text');
    //     const spinner = submitBtn.querySelector('.spinner');
        
    //     btnText.textContent = 'Generating Document...';
    //     spinner.classList.remove('d-none');
    //     submitBtn.disabled = true;
        
    //     // Submit the form
    //     this.submit();
    // });
});
</script>
<!--End Js Section -->
@endsection
