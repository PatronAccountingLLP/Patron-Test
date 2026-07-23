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
            <h1 class="hero-title">Board Resolution for Appointment of  <span>  Authorised Signatory</span></h1>
            <p class="hero-subtitle">
                Generate a certified Board Resolution for Appointment of Authorised Auditor in under 60 seconds.
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
                Fill in the details below to generate a Board Resolution for Appointment of Authorised Signatory.
            </p>
        </div>

        <form id="authorisedSignatoryForm" method="POST" action="{{route('br.authorised.signatory') }}">
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
                    <label class="form-label">Name of Authorised Signatory <span class="required">*</span></label>
                    <input type="text" name="authorised_signatory_name" class="form-control" placeholder="Enter name of person to be authorised" required>
                </div>
                
                <div class="form-group full-width">
                    <label class="form-label">PAN of Authorised Signatory <span class="required">*</span></label>
                    <input type="text" name="authorised_signatory_pan" class="form-control" placeholder="Enter PAN (e.g., ABCDE1234F)" maxlength="10" style="text-transform: uppercase;" required>
                </div>

                <div class="form-group full-width">
                    <label class="form-label">Purpose / Scope of Authority <span class="required">*</span></label>
                    <textarea name="authority_purpose" class="form-control" placeholder="e.g., GST Registration and compliance, Income Tax filings, Bank account operations, ROC filings, etc." rows="3" required></textarea>
                </div>

                <div class="form-group full-width">
                    <label class="form-label">Name of Authority / Department <span class="required">*</span></label>
                    <input type="text" name="authority_department" class="form-control" placeholder="e.g., GST Department, Income Tax Department, Bank Name, etc." required>
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
                        <p class="preview-subtitle">Board Resolution for Appointment of Authorised Signatory</p>
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
                        <strong>Date of Meeting:</strong> <span id="prevMeetingDate">__________</span><br>
                        <strong>Time:</strong> <span id="prevMeetingTime">__________</span><br>
                        <strong>Venue:</strong> Registered Office of the Company
                    </p>

                    <p class="certificate-paragraph">
                        <strong>SUBJECT: APPOINTMENT OF AUTHORISED SIGNATORY</strong>
                    </p>

                    <p class="certificate-paragraph">
                        <strong>RESOLVED THAT</strong> Mr./Ms. 
                        <strong id="prevSignatoryName">________________</strong>, 
                        having PAN <strong id="prevSignatoryPAN">________________</strong>, 
                        be and is hereby authorised to sign, execute, and submit all necessary 
                        papers, letters, applications, forms, returns, and documents on behalf 
                        of the Company in connection with:
                    </p>

                    <p class="certificate-paragraph">
                        <em id="prevPurpose">________________</em>
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
            <h2 class="info-title">Board Resolution for Appointment of Authorised Signatory</h2>
            <p class="info-subtitle">
                Professional Format Guide for Indian Companies
            </p>
        </div>

        <!-- Introduction -->
        <div class="info-content">
            <h3 class="info-subheading">Introduction</h3>

            <p class="info-text">
                A Board Resolution for Appointment of Authorised Signatory is a formal corporate 
                document that records the Board of Directors' consent to designate an individual 
                to sign and submit documents on behalf of the company. Under the Companies Act, 2013, 
                companies must obtain board approval before authorising any person to represent the 
                company in dealings with government authorities, banks, regulatory bodies, and other 
                external parties.
            </p>

            <p class="info-text">
                This resolution specifies the name and PAN of the authorised person, the scope of 
                authority granted, and the specific purposes for which the authorisation is valid. 
                The document is commonly required for GST Registration, bank account operations, 
                filing returns with various departments, obtaining licenses, and submitting applications 
                to government authorities. The authorisation remains valid until formally revoked by 
                the Board through a subsequent resolution.
            </p>

            <!-- Benefits -->
            <h3 class="info-subheading">Benefits of Using a Standard Format</h3>

            <p class="info-text">
                Utilising a professionally drafted board resolution format ensures that the 
                authorisation is properly documented and legally valid. A ready-to-use template 
                saves valuable time during board meetings, reduces the risk of omissions in scope 
                definition, and provides a consistent framework that clearly specifies the authorised 
                signatory's powers and limitations. Standardised formats are readily accepted by 
                banks, government departments, and regulatory authorities.
            </p>

            <!-- Relevance -->
            <h3 class="info-subheading">Relevance to Business Registrations</h3>

            <p class="info-text">
                Appointing an authorised signatory is essential for various business operations and 
                registrations. For GST Registration, the authorised signatory is responsible for 
                filing returns, responding to notices, and managing the GST portal on behalf of the 
                company. Similarly, following Company Registration, businesses need designated 
                signatories for banking operations, statutory filings, and correspondence with the 
                Registrar of Companies. This resolution serves as proof of authority when dealing 
                with external agencies.
            </p>
        </div>

        <!-- Sample Format -->
        <div class="format-section">
            <h3 class="format-title">
                Board Resolution for Appointment of Authorised Signatory – Sample Format
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
                <strong>SUBJECT: APPOINTMENT OF AUTHORISED SIGNATORY</strong>
            </p>

            <p class="format-text">
                "RESOLVED THAT Mr./Ms. __________________________________________ (Name of 
                Authorised Signatory), having Permanent Account Number (PAN) 
                __________________________________________, be and is hereby authorised to sign, 
                execute, and submit all necessary papers, letters, applications, forms, returns, 
                and documents on behalf of the Company in connection with:
            </p>

            <p class="format-text">
                __________________________________________ (specify the purpose/service/authority - 
                e.g., GST Registration and compliance, Income Tax filings, Bank account operations, 
                ROC filings, etc.)
            </p>

            <p class="format-text">
                The authorised signatory shall have the power to:
            </p>

            <p class="format-text">
                • Sign and submit applications, forms, and returns;<br>
                • Receive and respond to notices, communications, and correspondence;<br>
                • Attend hearings and represent the Company before the relevant authorities;<br>
                • Execute such other documents and perform such other acts as may be necessary in 
                connection with the above matter.
            </p>

            <p class="format-text">
                All acts done and documents executed by the said authorised signatory shall be 
                binding on the Company, and this authorisation shall remain valid until the same 
                is revoked by giving written notice thereof.
            </p>

            <p class="format-text">
                RESOLVED FURTHER THAT a copy of this resolution, duly certified as true by a 
                Director or authorised signatory of the Company, be furnished to 
                __________________________________________ (Name of Authority/Department) and such 
                other parties as may be required from time to time in connection with the above matter."
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
                    1. What is the board resolution format for the appointment of an authorised signatory?
                </h4>
                <p class="faq-answer">
                    The board resolution format should include the company details, meeting particulars, 
                    the name and PAN of the person being authorised, a clear description of the scope 
                    of authority granted, and the specific purpose for which the authorisation is valid. 
                    It must be signed by an authorised director and certified as a true copy. The 
                    resolution should also specify the validity period or state that it remains in 
                    force until revoked.
                </p>
            </div>

            <div class="faq-item">
                <h4 class="faq-question">
                    2. Is the signature of all directors mandatory on the board resolution format for the appointment of an authorised signatory?
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
                    3. Does the Board Resolution for the appointment of an authorised signatory need to be certified by a professional?
                </h4>
                <p class="faq-answer">
                    There is no statutory requirement for the resolution to be certified by an external 
                    professional. The certified true copy may be signed by any director or the company 
                    secretary of the company. However, certain authorities or banks may request 
                    attestation by a practising professional such as a Company Secretary, Chartered 
                    Accountant, or Notary Public for additional verification purposes.
                </p>
            </div>

            <div class="faq-item">
                <h4 class="faq-question">
                    4. How to write a board resolution for the appointment of an authorised signatory?
                </h4>
                <p class="faq-answer">
                    Begin with company details and meeting particulars. State that pursuant to board 
                    approval, the named individual is authorised to act on behalf of the company. 
                    Clearly specify the scope of authority (what actions they can perform) and the 
                    purpose (which departments, registrations, or services). Include a clause stating 
                    the authorisation remains valid until revoked. Conclude with signature block for 
                    the certifying director.
                </p>
            </div>

            <div class="faq-item">
                <h4 class="faq-question">
                    5. Is the Board resolution for the appointment of an authorised signatory to be on company letterhead?
                </h4>
                <p class="faq-answer">
                    While there is no strict legal requirement mandating the use of company letterhead, 
                    it is considered standard corporate practice and adds authenticity to the document. 
                    Using official letterhead facilitates easy identification and verification by banks, 
                    government departments, and other stakeholders. Most organisations maintain board 
                    resolutions on letterhead as part of good corporate governance practices.
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

    const form = document.getElementById('authorisedSignatoryForm');
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

    // PAN uppercase formatting
    const panInput = form.querySelector('[name="authorised_signatory_pan"]');
    if (panInput) {
        panInput.addEventListener('input', function() {
            this.value = this.value.toUpperCase();
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
        const meetingDate = form.querySelector('[name="meeting_date"]').value;
        const meetingTime = form.querySelector('[name="meeting_time"]').value;
        const signatoryName = form.querySelector('[name="authorised_signatory_name"]').value || '________________';
        const signatoryPAN = form.querySelector('[name="authorised_signatory_pan"]').value || '________________';
        const purpose = form.querySelector('[name="authority_purpose"]').value || '________________';
        const place = form.querySelector('[name="place"]').value || '________________';
        const resolutionDate = form.querySelector('[name="resolution_date"]').value;

        // Update preview text
        const elCompanyName = document.getElementById('prevCompanyName');
        const elCIN = document.getElementById('prevCIN');
        const elMeetingDate = document.getElementById('prevMeetingDate');
        const elMeetingTime = document.getElementById('prevMeetingTime');
        const elSignatoryName = document.getElementById('prevSignatoryName');
        const elSignatoryPAN = document.getElementById('prevSignatoryPAN');
        const elPurpose = document.getElementById('prevPurpose');
        const elFooterCompanyName = document.getElementById('footerCompanyName');
        const elFooterPlace = document.getElementById('footerPlace');
        const elFooterDate = document.getElementById('footerDate');

        if (elCompanyName) elCompanyName.textContent = companyName;
        if (elCIN) elCIN.textContent = cin;
        if (elSignatoryName) elSignatoryName.textContent = signatoryName;
        if (elSignatoryPAN) elSignatoryPAN.textContent = signatoryPAN;
        if (elPurpose) elPurpose.textContent = purpose;
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
