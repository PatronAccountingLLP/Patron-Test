@extends('tools.tool-master')
@section('title')
{{_(' Board Resolution for Appointment of Internal Auditor')}}
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
            <h1 class="hero-title"> <span> Board Resolution for Appointment of Internal Auditor</span></h1>
            <p class="hero-subtitle">
                Generate a certified Board Resolution for Appointment of Internal Auditor in under 60 seconds.
            </p>
        </div>
    </div>

    <!-- Main Container -->
    <div class="download-format-container">
        <div class="alert-wrapper" id="alertContainer"></div>
<!-- Form and Live Preview section -->
<div class="download-format-grid">
    <!-- Form Section -->
    <div class="form-card">
        <div class="form-header">
            <div class="form-step-indicator">
                <span class="step-dot active"></span>
                <span class="step-dot"></span>
                <span class="step-dot"></span>
            </div>
            <h2 class="form-title">Enter Internal Auditor Details</h2>
            <p class="form-description">
                Fill in the details below to generate a Board Resolution for Appointment of Internal Auditor.
            </p>
        </div>

        <form id="internalAuditorForm" method="POST" action="{{ route('br.internal.auditor') }}">
            @csrf

            <div class="form-grid">
                <!-- Company Details -->
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
                    <textarea name="registered_office" class="form-control" placeholder="Complete address" required></textarea>
                </div>
                <div class="form-group full-width">
                    <label class="form-label">Company Email <span class="required">*</span></label>
                    <input type="email" name="email" class="form-control" placeholder="Enter email" required>
                </div>

                <!-- Meeting Details -->
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

                <!-- Internal Auditor Details -->
                <div class="form-group full-width">
                    <label class="form-label">Auditor Name (Firm/Individual) <span class="required">*</span></label>
                    <input type="text" name="auditor_name" class="form-control" placeholder="e.g., M/s. ABC & Co. / Mr. XYZ" required>
                </div>
                <div class="form-row">
                    <div class="form-group">
                        <label class="form-label">Firm Registration Number / Membership Number <span class="required">*</span></label>
                        <input type="text" name="membership_no" class="form-control" placeholder="Enter FRN/Membership No." required>
                    </div>
                    <div class="form-group">
                        <label class="form-label">Professional Qualification <span class="required">*</span></label>
                        <div class="select-wrapper">
                            <select name="qualification" class="form-control form-select" required>
                                <option value="">Select</option>
                                <option value="Chartered Accountant">Chartered Accountant</option>
                                <option value="Cost Accountant">Cost Accountant</option>
                                <option value="Other Professional">Other Professional</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="form-group full-width">
                    <label class="form-label">Office Address of Auditor <span class="required">*</span></label>
                    <textarea name="auditor_address" class="form-control" placeholder="Complete address" required></textarea>
                </div>
                <div class="form-group full-width">
                    <label class="form-label">Financial Year (e.g., 2024-25) <span class="required">*</span></label>
                    <input type="text" name="financial_year" class="form-control" placeholder="e.g., 2024-25" required>
                </div>

                <!-- Signatory Details -->
                <div class="form-row">
                    <div class="form-group">
                        <label class="form-label">Signatory Name <span class="required">*</span></label>
                        <input type="text" name="signatory_name" class="form-control" placeholder="Enter name" required>
                    </div>
                    <div class="form-group">
                        <label class="form-label">Designation <span class="required">*</span></label>
                        <input type="text" name="signatory_designation" class="form-control" placeholder="e.g., Director" required>
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
                        <p class="preview-subtitle">Board Resolution for Appointment of Internal Auditor</p>
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
                        <p><strong id="previewCompanyName">________________</strong></p>
                        <p><strong>CIN: </strong><span id="previewCIN">________________</span></p>
                        <p><strong>Registered Office: </strong><span id="previewRegOffice">________________</span></p>
                        <p><strong>Email: </strong><span id="previewEmail">________________</span></p>
                    </div>

                    <p class="certificate-paragraph">
                        <strong>Date of Meeting: </strong><span id="previewMeetingDate">__________</span><br>
                        <strong>Time: </strong><span id="previewMeetingTime">______</span> (Hours)<br>
                        <strong>Venue: </strong>Registered Office of the Company at <span id="previewRegOfficeVenue">________________</span>
                    </p>

                    <p class="certificate-paragraph">
                        <strong>SUBJECT: APPOINTMENT OF INTERNAL AUDITOR</strong>
                    </p>

                    <p class="certificate-paragraph">
                        <strong>"RESOLVED THAT</strong> pursuant to the provisions of Section 138 of the Companies Act, 2013 read with Rule 13 of the Companies (Accounts) Rules, 2014 (including any statutory modification or amendment thereto or re-enactment thereof for the time being in force), and based on the recommendation of the Audit Committee (if applicable), the consent of the Board of Directors be and is hereby accorded to appoint:
                    </p>

                    <p class="certificate-paragraph">
                        <strong>Name of the Firm/Individual:</strong> <span id="previewAuditorName">________________</span><br>
                        <strong>Firm Registration Number / Membership Number:</strong> <span id="previewMembershipNo">________________</span><br>
                        <strong>Professional Qualification:</strong> <span id="previewQualification">________________</span><br>
                        <strong>Office Address:</strong> <span id="previewAuditorAddress">________________</span>
                    </p>

                    <p class="certificate-paragraph">
                        as the Internal Auditor of the Company for the Financial Year <strong><span id="previewFinancialYear">________________</span></strong>, at a remuneration as may be mutually agreed between the Internal Auditor and the Board of Directors, plus applicable taxes and out-of-pocket expenses.
                    </p>

                    <p class="certificate-paragraph">
                        <strong>RESOLVED FURTHER THAT</strong> the scope, functioning, periodicity, methodology, and reporting of the Internal Audit shall be as determined by the Audit Committee in consultation with the Internal Auditor, or by the Board of Directors in the absence of an Audit Committee.
                    </p>

                    <p class="certificate-paragraph">
                        <strong>RESOLVED FURTHER THAT</strong> any Director of the Company be and is hereby authorised to:
                    </p>
                    <ul class="certificate-list">
                        <li>Issue the letter of appointment to the Internal Auditor specifying the terms and conditions;</li>
                        <li>Execute the engagement letter and any related documents;</li>
                        <li>Provide necessary information, documents, and access to the Internal Auditor for conducting the audit;</li>
                        <li>Do all such acts, deeds, matters, and things as may be necessary, proper, or expedient to give effect to this resolution."
                        </li>
                    </ul>

                    <div class="certificate-signature">
                        <p><strong>CERTIFIED TRUE COPY</strong></p>
                        <p>For <strong id="footerCompanyName">________________</strong><br>
                        (Name of the Company)</p>
                        <p><strong>Signature:</strong> _________________________<br>
                        <strong>Name:</strong> <span id="footerSignatoryName">________________</span><br>
                        <strong>Designation:</strong> Director<br>
                        <strong>DIN:</strong> <span id="footerDIN">________________</span></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="info-section">
  <div class="info-card">

    <!-- Header -->
    <div class="info-header">
      <span class="info-header-badge">Corporate Compliance</span>
      <h2 class="info-title">Board Resolution for Appointment of Internal Auditor</h2>
      <p class="info-subtitle">
        Formal resolution template for appointing a qualified Internal Auditor under Section 138 of the Companies Act, 2013.
      </p>
    </div>

    <!-- Introduction -->
    <div class="info-content">
      <h3 class="info-subheading">Introduction</h3>
      <p class="info-text">
        A Board Resolution for Appointment of Internal Auditor records the Board’s decision to appoint a qualified professional (Chartered Accountant, Cost Accountant, or other prescribed professional) as the Internal Auditor of the company. Certain companies meeting prescribed thresholds under Section 138 of the Companies Act, 2013 are mandated to appoint an Internal Auditor for monitoring internal controls, financial reporting, and operational efficiency.
      </p>
    </div>

    <!-- Benefits -->
    <div class="info-content">
      <h3 class="info-subheading">Benefits of Using a Standard Format</h3>
      <p class="info-text">
        Using a professionally drafted resolution ensures compliance with statutory provisions, reduces procedural errors, saves time, and provides a consistent framework for documenting Board decisions regarding internal audit functions.
      </p>
    </div>

    <!-- Relevance -->
    <div class="info-content">
      <h3 class="info-subheading">Relevance to Corporate Compliance</h3>
      <p class="info-text">
        Companies that meet the prescribed thresholds must appoint an Internal Auditor each financial year. The Internal Auditor reviews internal controls, financial reporting processes, and operational efficiency. For companies with GST Registration, the auditor may also review GST compliance, including input tax credit and return filings. The scope and reporting of the audit are determined by the Audit Committee or the Board.
      </p>
    </div>

    <!-- Sample Format -->
    <div class="format-section">
      <h3 class="format-title">Board Resolution – Sample Format</h3>

      <p class="format-text">
        Company Name: _______________________________________ <br>
        CIN: _______________________________________ <br>
        Registered Office: _______________________________________ <br>
        Email: _______________________________________
      </p>

      <h4 class="format-subtitle">CERTIFIED TRUE COPY OF THE BOARD RESOLUTION</h4>
      <p class="format-text">
        Passed at the Meeting of the Board of Directors of the Company <br>
        Date of Meeting: __.__.______ <br>
        Time: ______ (Hours) <br>
        Venue: Registered Office of the Company at ________________________
      </p>

      <h4 class="format-subtitle">SUBJECT: APPOINTMENT OF INTERNAL AUDITOR</h4>

      <p class="format-text">
        "RESOLVED THAT pursuant to the provisions of Section 138 of the Companies Act, 2013 read with Rule 13 of the Companies (Accounts) Rules, 2014, and based on the recommendation of the Audit Committee (if applicable), the Board of Directors hereby appoints:
      </p>

      <ul class="format-list">
        <li>Name of the Firm/Individual: ________________________</li>
        <li>Firm Registration Number / Membership Number: ________________________</li>
        <li>Professional Qualification: Chartered Accountant / Cost Accountant / Other</li>
        <li>Office Address: ________________________</li>
        <li>Financial Year of Appointment: ________________________ (e.g., 2024-25)</li>
        <li>Remuneration: As mutually agreed between the Internal Auditor and the Board, plus applicable taxes and out-of-pocket expenses</li>
      </ul>

      <p class="format-text">
        RESOLVED FURTHER THAT the scope, methodology, periodicity, and reporting of the Internal Audit shall be as determined by the Audit Committee or the Board in consultation with the Internal Auditor.
      </p>

      <p class="format-text">
        RESOLVED FURTHER THAT any Director of the Company be and is hereby authorised to:
      </p>

      <ul class="format-list">
        <li>Issue the letter of appointment to the Internal Auditor specifying the terms and conditions</li>
        <li>Execute the engagement letter and related documents</li>
        <li>Provide necessary information, documents, and access for conducting the audit</li>
        <li>Do all acts, deeds, matters, and things necessary to give effect to this resolution</li>
      </ul>

      <p class="format-text">
        CERTIFIED TRUE COPY <br>
        For ________________________________________ <br>
        (Name of the Company) <br>
        Signature: __________________________ <br>
        Name: __________________________ <br>
        Designation: Director <br>
        DIN: __________________________
      </p>
    </div>

    <!-- FAQ -->
    <div class="faq-section">
      <h3 class="faq-title">Frequently Asked Questions</h3>

      <div class="faq-item">
        <h4 class="faq-question">1. What is the format of Board Resolution for appointment of Internal Auditor?</h4>
        <p class="faq-answer">
          The format includes reference to Section 138 of the Companies Act, 2013 and Rule 13 of Companies (Accounts) Rules, 2014, the name and membership/registration number of the Internal Auditor, office address, financial year of appointment, remuneration terms, scope of audit, and authorisation to directors for executing related documents.
        </p>
      </div>

      <div class="faq-item">
        <h4 class="faq-question">2. Is the signature of all directors mandatory?</h4>
        <p class="faq-answer">
          No, signatures of all directors are not mandatory. The resolution is passed by majority at a duly convened board meeting where quorum is present. A certified true copy may be signed by a single director.
        </p>
      </div>

      <div class="faq-item">
        <h4 class="faq-question">3. Which resolution is required for appointment of Internal Auditor?</h4>
        <p class="faq-answer">
          A board resolution is required for appointing the Internal Auditor. No shareholders' resolution or ROC filing is needed. Appointment is usually for each financial year based on the Audit Committee’s recommendation.
        </p>
      </div>

      <div class="faq-item">
        <h4 class="faq-question">4. Does the Board Resolution need certification by a professional?</h4>
        <p class="faq-answer">
          No statutory certification is required. The certified true copy can be signed by any director. A Company Secretary may also certify the resolution, but external professional certification is not mandatory.
        </p>
      </div>

    </div>

  </div>
</div>
    </div>
</div>


<!-- JavaScript for live preview -->
<script>
document.addEventListener('DOMContentLoaded', function () {
    const form = document.getElementById('internalAuditorForm');

    // Set default date
    const today = new Date().toISOString().slice(0,10);
    const meetingDateInput = form.querySelector('[name="meeting_date"]');
    if (meetingDateInput && !meetingDateInput.value) meetingDateInput.value = today;

    // Default meeting time (11:00 AM)
    const meetingTimeInput = form.querySelector('[name="meeting_time"]');
    if (meetingTimeInput && !meetingTimeInput.value) meetingTimeInput.value = "11:00";

    function formatDate(dateString) {
        if (!dateString) return '__________';
        const date = new Date(dateString);
        return date.toLocaleDateString('en-IN', { day: '2-digit', month: 'long', year: 'numeric' });
    }

    function updatePreview() {
        const companyName = form.querySelector('[name="company_name"]').value || '________________';
        const cin = form.querySelector('[name="cin"]').value || '________________';
        const regOffice = form.querySelector('[name="registered_office"]').value || '________________';
        const email = form.querySelector('[name="email"]').value || '________________';
        const meetingDateRaw = form.querySelector('[name="meeting_date"]').value;
        const meetingDate = meetingDateRaw ? formatDate(meetingDateRaw) : '__________';
        const meetingTime = form.querySelector('[name="meeting_time"]').value || '______';
        const auditorName = form.querySelector('[name="auditor_name"]').value || '________________';
        const membershipNo = form.querySelector('[name="membership_no"]').value || '________________';
        const qualification = form.querySelector('[name="qualification"]').value || '________________';
        const auditorAddress = form.querySelector('[name="auditor_address"]').value || '________________';
        const financialYear = form.querySelector('[name="financial_year"]').value || '________________';
        const signatoryName = form.querySelector('[name="signatory_name"]').value || '________________';
        const signatoryDesignation = form.querySelector('[name="signatory_designation"]').value || 'Director';
        const din = form.querySelector('[name="din"]').value || '________________';
        const place = form.querySelector('[name="place"]').value || '________________';

        // Update preview fields
        document.getElementById('previewCompanyName').textContent = companyName;
        document.getElementById('previewCIN').textContent = cin;
        document.getElementById('previewRegOffice').textContent = regOffice;
        document.getElementById('previewEmail').textContent = email;
        document.getElementById('previewMeetingDate').textContent = meetingDate;
        document.getElementById('previewMeetingTime').textContent = meetingTime;
        document.getElementById('previewRegOfficeVenue').textContent = regOffice;
        document.getElementById('previewAuditorName').textContent = auditorName;
        document.getElementById('previewMembershipNo').textContent = membershipNo;
        document.getElementById('previewQualification').textContent = qualification;
        document.getElementById('previewAuditorAddress').textContent = auditorAddress;
        document.getElementById('previewFinancialYear').textContent = financialYear;
        document.getElementById('footerCompanyName').textContent = companyName;
        document.getElementById('footerSignatoryName').textContent = signatoryName;
        document.getElementById('footerDIN').textContent = din;

        updateStepIndicator();
    }

    function updateStepIndicator() {
        const steps = document.querySelectorAll('.step-dot');
        const requiredInputs = form.querySelectorAll('input[required], textarea[required], select[required]');
        let filled = 0;
        requiredInputs.forEach(input => {
            if (input.value.trim() !== '') filled++;
        });
        const progress = filled / requiredInputs.length;
        steps.forEach((step, index) => {
            step.classList.remove('active');
            if (index === 0 && progress >= 0) step.classList.add('active');
            if (index === 1 && progress >= 0.5) step.classList.add('active');
            if (index === 2 && progress >= 1) step.classList.add('active');
        });
    }

    // Attach event listeners
    const inputs = form.querySelectorAll('input, textarea, select');
    inputs.forEach(input => input.addEventListener('input', updatePreview));
    updatePreview();

  
});
</script>
@endsection
