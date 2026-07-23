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
            <h1 class="hero-title">Board Resolution for <span>Sale of Property</span></h1>
            <p class="hero-subtitle">
                Generate a certified Board Resolution authorising sale of company property in under 60 seconds.
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
            <h2 class="form-title">Enter Company & Director Details</h2>
            <p class="form-description">
                Fill in the details below to generate a Board Resolution for Appointment of Independent Director.
            </p>
        </div>

        <form id="independentDirectorForm" method="POST" action="{{ route('br.independent.director') }}">
            @csrf

            <div class="form-grid">
                <!-- Company Details Section -->
                <div class="section-header">
                    <h3>Company Details</h3>
                </div>
                
                <div class="form-group full-width">
                    <label class="form-label">Company Name <span class="required">*</span></label>
                    <input type="text" name="company_name" class="form-control" placeholder="Enter company name" required>
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
                    <h3>Board Meeting Details</h3>
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
                    <input type="text" name="meeting_venue" class="form-control" value="Registered Office of the Company" required>
                </div>
                
                <!-- Independent Director Details Section -->
                <div class="section-header">
                    <h3>Independent Director Details</h3>
                </div>
                
                <div class="form-group full-width">
                    <label class="form-label">Independent Director Name <span class="required">*</span></label>
                    <div class="name-title-group">
                        <div class="select-wrapper" style="flex: 0 0 80px; margin-right: 10px;">
                            <select name="director_title" class="form-control form-select">
                                <option value="Mr.">Mr.</option>
                                <option value="Ms.">Ms.</option>
                                <option value="Mrs.">Mrs.</option>
                                <option value="Dr.">Dr.</option>
                            </select>
                        </div>
                        <input type="text" name="independent_director_name" class="form-control" placeholder="Enter full name" required style="flex: 1;">
                    </div>
                </div>
                
                <div class="form-group full-width">
                    <label class="form-label">DIN (Director Identification Number) <span class="required">*</span></label>
                    <input type="text" name="director_din" class="form-control" placeholder="Enter DIN of independent director" required>
                    <small class="form-help-text">Director Identification Number as issued by MCA</small>
                </div>
                
                <div class="form-group full-width">
                    <label class="form-label">Professional Qualifications <span class="required">*</span></label>
                    <input type="text" name="professional_qualifications" class="form-control" placeholder="e.g., CA, CS, MBA, LLB, etc." required>
                    <small class="form-help-text">Qualifications that meet independent director criteria</small>
                </div>
                
                <div class="form-group full-width">
                    <label class="form-label">Area of Expertise <span class="required">*</span></label>
                    <input type="text" name="area_of_expertise" class="form-control" placeholder="e.g., Finance, Legal, Marketing, Corporate Governance" required>
                </div>
                
                <!-- Appointment Details Section -->
                <div class="section-header">
                    <h3>Appointment Details</h3>
                </div>
                
                <div class="form-row">
                    <div class="form-group">
                        <label class="form-label">Commencement Date <span class="required">*</span></label>
                        <input type="date" name="commencement_date" class="form-control" required>
                    </div>

                    <div class="form-group">
                        <label class="form-label">Term Duration <span class="required">*</span></label>
                        <div class="select-wrapper">
                            <select name="term_duration" class="form-control form-select" required>
                                <option value="5">Five (5) years</option>
                                <option value="3">Three (3) years</option>
                                <option value="1">One (1) year</option>
                            </select>
                        </div>
                    </div>
                </div>
                
                <div class="form-group full-width">
                    <label class="form-label">Notice from Member under Section 160 <span class="required">*</span></label>
                    <div class="radio-group">
                        <label class="radio-label">
                            <input type="radio" name="section_160_notice" value="received" checked>
                            <span class="radio-text">Received</span>
                        </label>
                        <label class="radio-label">
                            <input type="radio" name="section_160_notice" value="not_received">
                            <span class="radio-text">Not Received</span>
                        </label>
                    </div>
                    <small class="form-help-text">Notice from a member proposing the candidature under Section 160 of Companies Act</small>
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
                    <label class="form-label">Authorized Director DIN <span class="required">*</span></label>
                    <input type="text" name="authorized_din" class="form-control" placeholder="Enter authorized director's DIN" required>
                </div>
                
                <div class="form-group full-width">
                    <label class="form-label">Place <span class="required">*</span></label>
                    <input type="text" name="place" class="form-control" placeholder="City / Place" required>
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
                        <p class="preview-subtitle">Board Resolution for Appointment of Independent Director</p>
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
                        <p><strong>CIN: </strong><span id="prevCin">________________</span></p>
                        <p><strong>Registered Office: </strong><span id="prevRegisteredOffice">________________</span></p>
                        <p><strong>Email: </strong><span id="prevEmail">________________</span></p>
                    </div>
                    
                    <p class="certificate-paragraph">
                        <strong>CERTIFIED TRUE COPY OF THE BOARD RESOLUTION</strong>
                    </p>
                    
                    <p class="certificate-paragraph">
                        Passed at the Meeting of the Board of Directors of the Company<br>
                        <strong>Date of Meeting: </strong><span id="prevMeetingDate">__.__.______</span><br>
                        <strong>Time: </strong><span id="prevMeetingTime">______</span> (Hours)<br>
                        <strong>Venue: </strong><span id="prevMeetingVenue">Registered Office of the Company at ________________</span>
                    </p>
                    
                    <p class="certificate-paragraph">
                        <strong>SUBJECT: APPOINTMENT OF INDEPENDENT DIRECTOR</strong>
                    </p>
                    
                    <p class="certificate-paragraph">
                        <strong>"RESOLVED THAT</strong> pursuant to the provisions of Sections 149, 150, 152 read with Schedule IV and other applicable provisions, if any, of the Companies Act, 2013 ("the Act") and the Companies (Appointment and Qualification of Directors) Rules, 2014 (including any statutory modification(s) or re-enactment(s) thereof, for the time being in force), and subject to the approval of the Members of the Company at the ensuing General Meeting:
                    </p>
                    
                    <div class="director-details-box">
                        <p><strong>Name of Director: </strong><span id="prevDirectorName">________________________</span></p>
                        <p><strong>DIN: </strong><span id="prevDirectorDin">________________________</span></p>
                        <p>who meets the criteria for independence as provided in Section 149(6) of the Act and who has submitted a declaration to that effect, and in respect of whom the Company <span id="prevSection160Notice">has received a notice in writing under Section 160 of the Act from a member proposing his/her candidature</span> for the office of Director, be and is hereby appointed as a Non-Executive Independent Director of the Company, not liable to retire by rotation, and to hold office for a term of:</p>
                    </div>
                    
                    <div class="term-box">
                        <p><strong>Term: </strong><span id="prevTermDuration">Five (5) consecutive years</span></p>
                        <p><strong>Commencement Date: </strong><span id="prevCommencementDate">________________________</span></p>
                        <p><strong>End Date: </strong><span id="prevEndDate">________________________</span></p>
                    </div>
                    
                    <p class="certificate-paragraph">
                        <strong>RESOLVED FURTHER THAT</strong> the terms and conditions of appointment of the Independent Director shall be in accordance with Schedule IV of the Companies Act, 2013 and the letter of appointment issued to the Independent Director, which shall be open for inspection by members at the Registered Office of the Company during normal business hours.
                    </p>
                    
                    <p class="certificate-paragraph">
                        <strong>RESOLVED FURTHER THAT</strong> any Director or the Company Secretary of the Company be and is hereby authorised to:
                    </p>
                    
                    <ul class="resolution-list">
                        <li>File Form DIR-12 (Particulars of appointment of Directors and the Key Managerial Personnel and the changes among them) with the Registrar of Companies within the prescribed time;</li>
                        <li>Make necessary entries in the Register of Directors and Key Managerial Personnel and their Shareholding;</li>
                        <li>Issue the letter of appointment to the Independent Director in accordance with Schedule IV;</li>
                        <li>Convene the General Meeting for seeking approval of members for the appointment;</li>
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
            <h2 class="info-title">Board Resolution for Appointment of Independent Director</h2>
            <p class="info-subtitle">
                Professional Format Guide for Indian Companies
            </p>
        </div>

        <!-- Introduction -->
        <div class="info-content">
            <h3 class="info-subheading">Introduction</h3>

            <p class="info-text">
                A Board Resolution for Appointment of Independent Director is a formal corporate
                document that records the decision of the Board of Directors to appoint an
                Independent Director to the Board of the Company. Under Section 149 of the
                Companies Act, 2013 read with Schedule IV and the Companies (Appointment and
                Qualification of Directors) Rules, 2014, certain classes of companies are required
                to appoint Independent Directors.
            </p>

            <p class="info-text">
                Independent Directors play a vital role in corporate governance by providing
                objective judgement, independent oversight, and professional expertise. The board
                resolution records the director’s name and DIN, confirms eligibility and
                independence under the Act, acknowledges receipt of notice under Section 160, and
                specifies the tenure of appointment, which is generally five consecutive years.
                Independent Directors are not liable to retire by rotation. Form DIR-12 must be
                filed with the Registrar of Companies to record the appointment.
            </p>

            <!-- Benefits -->
            <h3 class="info-subheading">Benefits of Using a Standard Format</h3>

            <p class="info-text">
                Using a professionally drafted board resolution format ensures compliance with
                the Companies Act, 2013, Schedule IV, and the Companies (Appointment and
                Qualification of Directors) Rules, 2014. A standard template saves time, reduces
                the likelihood of procedural errors, and ensures consistency in corporate
                documentation.
            </p>

            <p class="info-text">
                Standardised formats also facilitate smoother ROC filings and proper maintenance
                of statutory records related to director appointments.
            </p>

            <!-- Relevance -->
            <h3 class="info-subheading">Relevance to Corporate Governance</h3>

            <p class="info-text">
                Appointment of Independent Directors is a key corporate governance requirement.
                Companies that meet the prescribed thresholds must appoint Independent Directors
                within stipulated timelines. Prior to appointment, companies must verify the
                candidate’s eligibility, qualifications, integrity, and absence of
                disqualifications under the Act.
            </p>

            <p class="info-text">
                Form DIR-12 must be filed with the Registrar of Companies within thirty days of
                appointment along with the Independent Director’s consent in Form DIR-2 and
                declaration of independence.
            </p>
        </div>

        <!-- Sample Format -->
        <div class="format-section">
            <h3 class="format-title">
                Board Resolution for Appointment of Independent Director – Sample Format
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
                Passed at the Meeting of the Board of Directors of the Company held on
                __.__.______ at ______ (Hours) at the Registered Office of the Company situated at
                ________________________
            </p>

            <p class="format-text">
                <strong>SUBJECT:</strong> Appointment of Independent Director
            </p>

            <p class="format-text">
                <strong>RESOLVED THAT</strong> pursuant to the provisions of Sections 149, 150 and
                152 read with Schedule IV and other applicable provisions of the Companies Act,
                2013 and the Companies (Appointment and Qualification of Directors) Rules, 2014,
                and subject to the approval of the Members of the Company:
            </p>

            <p class="format-text">
                <strong>Name of Director:</strong> ________________________<br>
                <strong>DIN:</strong> ________________________
            </p>

            <p class="format-text">
                who meets the criteria of independence under Section 149(6) of the Act and who has
                submitted the required declaration and in respect of whom the Company has
                received a notice under Section 160 of the Act, be and is hereby appointed as a
                Non-Executive Independent Director of the Company, not liable to retire by
                rotation, for a term of:
            </p>

            <p class="format-text">
                <strong>Term:</strong> Five (5) consecutive years<br>
                <strong>Commencement Date:</strong> ________________________<br>
                <strong>End Date:</strong> ________________________
            </p>

            <p class="format-text">
                <strong>RESOLVED FURTHER THAT</strong> the terms and conditions of appointment shall
                be in accordance with Schedule IV of the Companies Act, 2013 and the letter of
                appointment issued to the Independent Director.
            </p>

            <p class="format-text">
                <strong>RESOLVED FURTHER THAT</strong> any Director or the Company Secretary be and
                is hereby authorised to file Form DIR-12 with the Registrar of Companies, issue
                the letter of appointment, make statutory entries, convene the General Meeting
                for member approval, and do all such acts as may be necessary to give effect to
                this resolution.
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
                    1. Who can be an authorised signatory for this board resolution?
                </h4>
                <p class="faq-answer">
                    Any director or the company secretary of the company can certify and sign the
                    board resolution for appointment of an independent director.
                </p>
            </div>

            <div class="faq-item">
                <h4 class="faq-question">
                    2. Is the signature of all directors mandatory?
                </h4>
                <p class="faq-answer">
                    No. The resolution is passed by majority at a duly convened board meeting, and
                    the certified true copy may be signed by a single authorised director or the
                    company secretary.
                </p>
            </div>

            <div class="faq-item">
                <h4 class="faq-question">
                    3. Which resolution is required for appointment of an independent director?
                </h4>
                <p class="faq-answer">
                    A board resolution is required to recommend the appointment, followed by an
                    ordinary resolution of shareholders at the General Meeting for approval.
                </p>
            </div>

            <div class="faq-item">
                <h4 class="faq-question">
                    4. Is professional certification mandatory?
                </h4>
                <p class="faq-answer">
                    Professional certification is not mandatory for the board resolution itself.
                    However, Form DIR-12 filing may require certification by a practising
                    professional.
                </p>
            </div>

            <div class="faq-item">
                <h4 class="faq-question">
                    5. Can this resolution be passed without a board meeting?
                </h4>
                <p class="faq-answer">
                    No. Appointment of directors must be approved at a duly convened board meeting
                    and cannot be passed by circulation.
                </p>
            </div>

            <div class="faq-item">
                <h4 class="faq-question">
                    6. Which form is required to be filed?
                </h4>
                <p class="faq-answer">
                    Form DIR-12 must be filed with the Registrar of Companies within thirty days of
                    appointment along with Form DIR-2 and declaration of independence.
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
    const form = document.getElementById('independentDirectorForm');
    const downloadPdfBtn = document.getElementById('downloadPdfBtn');
    
    // Set default dates
    const today = new Date();
    const meetingDateInput = form.querySelector('[name="meeting_date"]');
    const commencementDateInput = form.querySelector('[name="commencement_date"]');
    
    if (meetingDateInput) {
        meetingDateInput.value = today.toISOString().split('T')[0];
    }
    
    if (commencementDateInput) {
        commencementDateInput.value = today.toISOString().split('T')[0];
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

    // Calculate end date based on term duration
    const termSelect = form.querySelector('[name="term_duration"]');
    const commencementDate = form.querySelector('[name="commencement_date"]');
    
    function calculateEndDate() {
        const commencement = commencementDate.value;
        const termYears = parseInt(termSelect.value);
        
        if (commencement && termYears) {
            const startDate = new Date(commencement);
            const endDate = new Date(startDate);
            endDate.setFullYear(startDate.getFullYear() + termYears);
            endDate.setDate(endDate.getDate() - 1); // One day before anniversary
            
            // Format date for display in preview
            const formattedEndDate = endDate.toLocaleDateString('en-IN', {
                day: '2-digit',
                month: 'long',
                year: 'numeric'
            });
            
            // Update preview
            const endDateElement = document.getElementById('prevEndDate');
            if (endDateElement) {
                endDateElement.textContent = formattedEndDate;
            }
        }
    }
    
    termSelect.addEventListener('change', calculateEndDate);
    commencementDate.addEventListener('change', calculateEndDate);

    // Inputs for live preview
    const inputs = form.querySelectorAll('input, textarea, select');
    inputs.forEach(input => {
        input.addEventListener('input', updatePreview);
        input.addEventListener('change', updatePreview);
    });

    // Initial preview
    updatePreview();
    calculateEndDate();

    function updatePreview() {
        // Get form values
        const companyName = form.querySelector('[name="company_name"]').value || '________________';
        const cin = form.querySelector('[name="cin"]').value || '________________';
        const registeredOffice = form.querySelector('[name="registered_office"]').value || '________________';
        const companyEmail = form.querySelector('[name="company_email"]').value || '________________';
        const meetingDate = form.querySelector('[name="meeting_date"]').value;
        const meetingTime = form.querySelector('[name="meeting_time"]').value || '______';
        const meetingVenue = form.querySelector('[name="meeting_venue"]').value || 'Registered Office of the Company at ________________';
        const directorTitle = form.querySelector('[name="director_title"]').value || 'Mr.';
        const directorName = form.querySelector('[name="independent_director_name"]').value || '________________________';
        const directorDin = form.querySelector('[name="director_din"]').value || '________________________';
        const commencementDateVal = form.querySelector('[name="commencement_date"]').value;
        const termDuration = form.querySelector('[name="term_duration"]').value;
        const section160Notice = form.querySelector('input[name="section_160_notice"]:checked').value;
        const place = form.querySelector('[name="place"]').value || '________________';
        const authorizedDirector = form.querySelector('[name="authorized_director"]').value || '________________';
        const designation = form.querySelector('[name="designation"]').value || '________________';
        const authorizedDin = form.querySelector('[name="authorized_din"]').value || '________________';

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
        updateElement('prevDirectorName', directorTitle + ' ' + directorName);
        updateElement('prevDirectorDin', directorDin);
        updateElement('footerCompanyName', companyName);
        updateElement('footerDirectorName', authorizedDirector);
        updateElement('footerDesignation', designation);
        updateElement('footerDin', authorizedDin);
        updateElement('footerPlace', place);

        // Update term duration text
        let termText = '';
        if (termDuration === '5') termText = 'Five (5) consecutive years';
        else if (termDuration === '3') termText = 'Three (3) consecutive years';
        else if (termDuration === '1') termText = 'One (1) consecutive year';
        updateElement('prevTermDuration', termText);

        // Update Section 160 notice text
        const section160Element = document.getElementById('prevSection160Notice');
        if (section160Element) {
            if (section160Notice === 'received') {
                section160Element.textContent = 'has received a notice in writing under Section 160 of the Act from a member proposing his/her candidature';
            } else {
                section160Element.textContent = 'has not received a notice in writing under Section 160 of the Act';
            }
        }

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

        if (commencementDateVal) {
            const formattedCommencementDate = new Date(commencementDateVal).toLocaleDateString('en-IN', {
                day: '2-digit',
                month: 'long',
                year: 'numeric'
            });
            updateElement('prevCommencementDate', formattedCommencementDate);
        } else {
            updateElement('prevCommencementDate', '________________________');
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
    
    // Form submission handling
    form.addEventListener('submit', function(e) {
        const submitBtn = form.querySelector('.btn-submit');
        const spinner = submitBtn.querySelector('.spinner');
        const btnText = submitBtn.querySelector('.btn-text');
        
        btnText.textContent = 'Generating Document...';
        spinner.classList.remove('d-none');
        submitBtn.disabled = true;
    });
});
</script>


@endsection
