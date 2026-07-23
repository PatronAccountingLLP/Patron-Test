@extends('tools.tool-master')
@section('title')
{{_('Board Resolution for Appointment of Additional Director')}}
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
            <h1 class="hero-title">Board Resolution for <span> Appointment of Additional Director</span></h1>
            <p class="hero-subtitle">
                Generate a certified Board Resolution for Appointment of Additional Director in under 60 seconds.
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
                <h2 class="form-title">Enter Company &amp; Director Details</h2>
                <p class="form-description">
                    Fill in the details below to generate a Board Resolution for Appointment of Additional Director.
                </p>
            </div>
    
            <form id="additionalDirectorForm" method="POST" action="{{route('br.additional.director') }}">
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
    
                    <!-- Additional Director Details -->
                    <div class="form-group full-width">
                        <h4 style="margin-bottom: 10px; color: #333; border-bottom: 1px solid #eee; padding-bottom: 8px;">Additional Director Details</h4>
                    </div>
    
                    <div class="form-group full-width">
                        <label class="form-label">Name of Additional Director <span class="required">*</span></label>
                        <input type="text" name="additional_director_name" class="form-control" placeholder="Enter director's full name" required>
                    </div>
    
                    <div class="form-row">
                        <div class="form-group">
                            <label class="form-label">Director Identification Number (DIN) <span class="required">*</span></label>
                            <input type="text" name="additional_director_din" class="form-control" placeholder="Enter DIN" required>
                        </div>
    
                        <div class="form-group">
                            <label class="form-label">Date of Appointment <span class="required">*</span></label>
                            <input type="date" name="appointment_date" class="form-control" required>
                        </div>
                    </div>
    
                    <div class="form-group full-width">
                        <label class="form-label">Director's Address <span class="required">*</span></label>
                        <textarea name="additional_director_address" class="form-control" placeholder="Enter director's residential address" required></textarea>
                    </div>
    
                    <!-- Certifying Director Details -->
                    <div class="form-group full-width">
                        <h4 style="margin-bottom: 10px; color: #333; border-bottom: 1px solid #eee; padding-bottom: 8px;">Certifying Director Details</h4>
                    </div>
    
                    <div class="form-row">
                        <div class="form-group">
                            <label class="form-label">Director Name <span class="required">*</span></label>
                            <input type="text" name="certifying_director_name" class="form-control" placeholder="Enter director name" required>
                        </div>
    
                        <div class="form-group">
                            <label class="form-label">Designation <span class="required">*</span></label>
                            <div class="select-wrapper">
                                <select name="certifying_director_designation" class="form-control form-select" required>
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
                            <input type="text" name="certifying_director_din" class="form-control" placeholder="Enter DIN" required>
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
                            <p class="preview-subtitle">Board Resolution for Appointment of Additional Director</p>
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
                            <strong>SUBJECT: APPOINTMENT OF ADDITIONAL DIRECTOR</strong>
                        </p>
    
                        <p class="certificate-paragraph">
                            <strong>RESOLVED THAT</strong> pursuant to Section 161(1) of the Companies Act, 2013, 
                            consent be accorded to appoint:
                        </p>
    
                        <p class="certificate-paragraph">
                            <strong>Name:</strong> Mr./Ms. <span id="prevDirectorName">________________</span>
                        </p>
                        
                        <p class="certificate-paragraph">
                            <strong>DIN:</strong> <span id="prevDirectorDIN">________________</span>
                        </p>
    
                        <p class="certificate-paragraph">
                            as an Additional Director w.e.f. <span id="prevAppointmentDate">__________</span>
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
                <h2 class="info-title">Board Resolution for Appointment of Additional Director</h2>
                <p class="info-subtitle">
                    Professional Format Guide for Indian Companies
                </p>
            </div>
    
            <!-- Introduction -->
            <div class="info-content">
                <h3 class="info-subheading">Introduction</h3>
    
                <p class="info-text">
                    A Board Resolution for Appointment of Additional Director is a formal corporate 
                    document that records the Board of Directors' consent to appoint an Additional 
                    Director to the Board. Under Section 161(1) of the Companies Act, 2013, the Board 
                    may appoint an Additional Director who holds office until the next Annual General 
                    Meeting or the last date on which the AGM should have been held, whichever is 
                    earlier. This provision enables companies to strengthen their Board composition 
                    between AGMs without requiring immediate shareholder approval.
                </p>
    
                <p class="info-text">
                    This resolution specifies the director's name, Director Identification Number (DIN), 
                    date of appointment, and terms of engagement. The appointment must be intimated to 
                    the Registrar of Companies by filing Form DIR-12 within the prescribed timeline. 
                    Supporting documents include the director's consent in Form DIR-2, declaration of 
                    non-disqualification, and the board resolution. This document is essential for 
                    maintaining proper corporate records and regulatory compliance.
                </p>
    
                <!-- Benefits -->
                <h3 class="info-subheading">Benefits of Using a Standard Format</h3>
    
                <p class="info-text">
                    Utilising a professionally drafted board resolution format ensures that all statutory 
                    requirements under the Companies Act, 2013 and the Companies (Appointment and 
                    Qualification of Directors) Rules, 2014 are properly addressed. A ready-to-use 
                    template saves valuable time during board meetings, reduces the risk of procedural 
                    errors, and provides a consistent framework that captures essential details including 
                    DIN, appointment date, and tenure provisions.
                </p>
    
                <!-- Relevance -->
                <h3 class="info-subheading">Relevance to Company Compliance</h3>
    
                <p class="info-text">
                    Director appointments are a fundamental aspect of corporate governance. Following 
                    Company Registration, businesses must ensure their Board composition meets the 
                    minimum requirements under the Companies Act. The appointment of an Additional 
                    Director enables companies to bring in expertise or fill vacancies promptly. Form 
                    DIR-12 must be filed with the ROC within 30 days of the appointment, along with 
                    the board resolution, director's consent, and other supporting documents.
                </p>
            </div>
    
            <!-- Sample Format -->
            <div class="format-section">
                <h3 class="format-title">
                    Board Resolution for Appointment of Additional Director – Sample Format
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
                    <strong>SUBJECT: APPOINTMENT OF ADDITIONAL DIRECTOR</strong>
                </p>
    
                <p class="format-text">
                    "RESOLVED THAT pursuant to the provisions of Section 161(1) of the Companies Act, 
                    2013 read with Rules 8, 9 and 14 of the Companies (Appointment and Qualification 
                    of Directors) Rules, 2014 and other applicable provisions of the Companies Act, 
                    2013 (including any statutory modification(s) or re-enactment thereof for the time 
                    being in force), and in accordance with the Articles of Association of the Company, 
                    the consent of the Board of Directors be and is hereby accorded to appoint:
                </p>
    
                <p class="format-text">
                    <strong>Name:</strong> Mr./Ms. __________________________________________
                </p>
    
                <p class="format-text">
                    <strong>Director Identification Number (DIN):</strong> __________________________________________
                </p>
    
                <p class="format-text">
                    <strong>Address:</strong> __________________________________________
                </p>
    
                <p class="format-text">
                    as an Additional Director on the Board of Directors of the Company with effect 
                    from __.__.______ (Date of Appointment), on such terms and conditions as may be 
                    agreed upon between the parties from time to time.
                </p>
    
                <p class="format-text">
                    RESOLVED FURTHER THAT pursuant to Section 161(1) of the Companies Act, 2013, the 
                    said Additional Director shall hold office until the next Annual General Meeting 
                    of the Company or the last date on which the Annual General Meeting should have 
                    been held, whichever is earlier.
                </p>
    
                <p class="format-text">
                    RESOLVED FURTHER THAT any Director of the Company be and is hereby authorised to 
                    do all such acts, deeds, matters, and things as may be necessary, proper, or 
                    desirable to give effect to this resolution, including but not limited to signing 
                    and filing the necessary e-Forms (including Form DIR-12) with the Registrar of 
                    Companies, and executing all necessary documents, applications, and returns."
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
                        1. Who can be considered as an authorized signatory for the board resolution for the appointment of directors?
                    </h4>
                    <p class="faq-answer">
                        Any director present at the board meeting or the company secretary (if appointed) 
                        may be authorised to sign the certified true copy of the resolution. The Board 
                        typically designates one or more directors through the resolution itself to execute 
                        all appointment-related documents, file necessary forms with the ROC, and represent 
                        the company in matters relating to the director appointment.
                    </p>
                </div>
    
                <div class="faq-item">
                    <h4 class="faq-question">
                        2. Is the signature of all directors mandatory on the board resolution format for the appointment of directors?
                    </h4>
                    <p class="faq-answer">
                        No, signatures of all directors are not mandatory. The resolution is passed by a 
                        majority of directors present and voting at a duly convened board meeting where 
                        quorum is present. The certified true copy may be signed by a single authorised 
                        director or the company secretary. The minutes should record the names of directors 
                        present, those who voted in favour, and any abstentions.
                    </p>
                </div>
    
                <div class="faq-item">
                    <h4 class="faq-question">
                        3. Which resolution is required for the appointment of directors?
                    </h4>
                    <p class="faq-answer">
                        For appointment of an Additional Director, a board resolution is required. For 
                        appointment of a regular director at the general meeting, an ordinary resolution 
                        from shareholders is needed. For appointment of independent directors in listed 
                        companies or certain public companies, a special resolution may be required. The 
                        type of resolution depends on the category of director and the provisions of the 
                        Articles of Association.
                    </p>
                </div>
    
                <div class="faq-item">
                    <h4 class="faq-question">
                        4. Does the Board Resolution format for the appointment of directors need to be certified by a professional?
                    </h4>
                    <p class="faq-answer">
                        There is no statutory requirement for the board resolution to be certified by an 
                        external professional. The certified true copy may be signed by any director or 
                        the company secretary of the company. However, for filing Form DIR-12 with the 
                        ROC, a practising professional such as a Chartered Accountant, Company Secretary, 
                        or Cost Accountant may be required to certify the form.
                    </p>
                </div>
    
                <div class="faq-item">
                    <h4 class="faq-question">
                        5. Can a board resolution for the appointment of directors be passed without convening a board meeting?
                    </h4>
                    <p class="faq-answer">
                        Appointment of directors is generally considered a significant matter that should 
                        be transacted at a duly convened board meeting. While the Companies Act permits 
                        certain resolutions to be passed by circulation, appointment of Additional Directors 
                        is typically done at board meetings to ensure proper deliberation. The company's 
                        Articles of Association should be consulted for specific provisions on passing 
                        resolutions by circulation.
                    </p>
                </div>
    
                <div class="faq-item">
                    <h4 class="faq-question">
                        6. Which form needs to be filed for the appointment of the Directors?
                    </h4>
                    <p class="faq-answer">
                        Form DIR-12 (Particulars of appointment of Directors and the Key Managerial 
                        Personnel and the changes among them) must be filed with the Registrar of Companies 
                        within 30 days from the date of appointment. This form is applicable for all 
                        director appointments, resignations, and changes in Key Managerial Personnel as 
                        required under the Companies Act, 2013.
                    </p>
                </div>
    
                <div class="faq-item">
                    <h4 class="faq-question">
                        7. What are the documents filed along with the resolution for filing Form DIR-12?
                    </h4>
                    <p class="faq-answer">
                        The documents typically filed along with Form DIR-12 include: Board Resolution 
                        for appointment of the director, Form DIR-2 (Consent to act as Director), 
                        Declaration by the director regarding non-disqualification, proof of identity 
                        and address of the director, and an appointment letter (if applicable). For 
                        certain appointments, additional documents such as the director's educational 
                        qualifications or experience certificates may be required.
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

    const form = document.getElementById('additionalDirectorForm');
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
        const directorName = form.querySelector('[name="additional_director_name"]').value || '________________';
        const directorDIN = form.querySelector('[name="additional_director_din"]').value || '________________';
        const appointmentDate = form.querySelector('[name="appointment_date"]').value;
        const place = form.querySelector('[name="place"]').value || '________________';
        const resolutionDate = form.querySelector('[name="resolution_date"]').value;

        // Update preview text
        const elCompanyName = document.getElementById('prevCompanyName');
        const elCIN = document.getElementById('prevCIN');
        const elMeetingDate = document.getElementById('prevMeetingDate');
        const elMeetingTime = document.getElementById('prevMeetingTime');
        const elDirectorName = document.getElementById('prevDirectorName');
        const elDirectorDIN = document.getElementById('prevDirectorDIN');
        const elAppointmentDate = document.getElementById('prevAppointmentDate');
        const elFooterCompanyName = document.getElementById('footerCompanyName');
        const elFooterPlace = document.getElementById('footerPlace');
        const elFooterDate = document.getElementById('footerDate');

        if (elCompanyName) elCompanyName.textContent = companyName;
        if (elCIN) elCIN.textContent = cin;
        if (elDirectorName) elDirectorName.textContent = directorName;
        if (elDirectorDIN) elDirectorDIN.textContent = directorDIN;
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

        if (appointmentDate && elAppointmentDate) {
            const formattedAppointmentDate = new Date(appointmentDate).toLocaleDateString('en-IN', {
                day: '2-digit',
                month: 'long',
                year: 'numeric'
            });
            elAppointmentDate.textContent = formattedAppointmentDate;
        } else if (elAppointmentDate) {
            elAppointmentDate.textContent = '__________';
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
