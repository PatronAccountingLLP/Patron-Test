@extends('tools.tool-master')
@section('title')
{{_(' Notice of Board Meeting')}}
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
            <h1 class="hero-title"> <span> Notice of Board Meeting</span></h1>
            <p class="hero-subtitle">
                Generate a certified Notice of Board Meeting in under 60 seconds.
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
            <h2 class="form-title">Enter Board Meeting Details</h2>
            <p class="form-description">
                Fill in the details below to generate a Notice of Board Meeting.
            </p>
        </div>

        <form id="boardMeetingNoticeForm" method="POST" action="{{ route('br.board.notice') }}">
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

                <!-- Meeting Details -->
                <div class="form-group full-width">
                    <label class="form-label">Meeting Number (e.g., First, Second, Quarterly) <span class="required">*</span></label>
                    <input type="text" name="meeting_number" class="form-control" placeholder="e.g., First, Second, Quarterly" required>
                </div>
                <div class="form-row">
                    <div class="form-group">
                        <label class="form-label">Day <span class="required">*</span></label>
                        <input type="text" name="day" class="form-control" placeholder="e.g., Monday" required>
                    </div>
                    <div class="form-group">
                        <label class="form-label">Date <span class="required">*</span></label>
                        <input type="date" name="meeting_date" class="form-control" required>
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group">
                        <label class="form-label">Time <span class="required">*</span></label>
                        <input type="text" name="meeting_time" class="form-control" placeholder="e.g., 11:00 A.M." required>
                    </div>
                    <div class="form-group">
                        <label class="form-label">Venue <span class="required">*</span></label>
                        <input type="text" name="venue" class="form-control" placeholder="Full address" required>
                    </div>
                </div>

                <!-- Agenda Items -->
                <div class="form-group full-width">
                    <label class="form-label">Agenda Items (one per line) <span class="required">*</span></label>
                    <textarea name="agenda_items" class="form-control" rows="8" placeholder="1. To consider the adoption of the registered office&#10;2. To appoint first auditors&#10;3. To open bank accounts&#10;4. To authorize issue of share certificates" required></textarea>
                </div>

                <!-- Signatory Details -->
                <div class="form-row">
                    <div class="form-group">
                        <label class="form-label">Signatory Name <span class="required">*</span></label>
                        <input type="text" name="signatory_name" class="form-control" placeholder="Enter name" required>
                    </div>
                    <div class="form-group">
                        <label class="form-label">Designation <span class="required">*</span></label>
                        <div class="select-wrapper">
                            <select name="signatory_designation" class="form-control form-select" required>
                                <option value="">Select designation</option>
                                <option value="Company Secretary">Company Secretary</option>
                                <option value="Director">Director</option>
                                <option value="Managing Director">Managing Director</option>
                            </select>
                        </div>
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-group">
                        <label class="form-label">Place of Issue <span class="required">*</span></label>
                        <input type="text" name="place" class="form-control" placeholder="City / Place" required>
                    </div>
                    <div class="form-group">
                        <label class="form-label">Date of Notice <span class="required">*</span></label>
                        <input type="date" name="notice_date" class="form-control" required>
                    </div>
                </div>
            </div>

            <button type="submit" class="btn-submit" id="downloadPdfBtn">
                <span class="btn-text">Generate & Download Notice</span>
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
                        <p class="preview-subtitle">Notice of Board Meeting</p>
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
                    <h2 class="certificate-doc-title">NOTICE OF BOARD MEETING</h2>
                </div>

                <div class="certificate-body">
                    <div class="company-details">
                        <p><strong id="previewCompanyName">________________</strong></p>
                        <p><strong>CIN: </strong><span id="previewCIN">________________</span></p>
                        <p><strong>Registered Office: </strong><span id="previewRegOffice">________________</span></p>
                    </div>

                    <p>Notice is hereby given that the <strong><span id="previewMeetingNumber">________________</span></strong> Meeting of the Board of Directors of <strong><span id="previewCompanyNameNotice">________________</span></strong> will be held as per the following details:</p>

                    <p><strong>Day:</strong> <span id="previewDay">________________</span><br>
                    <strong>Date:</strong> <span id="previewMeetingDate">________________</span><br>
                    <strong>Time:</strong> <span id="previewMeetingTime">________________</span><br>
                    <strong>Venue:</strong> <span id="previewVenue">________________</span></p>

                    <p>to consider and, if thought fit, to transact the following business:</p>

                    <p><strong>AGENDA</strong></p>
                    <div id="previewAgendaList"></div>
                    <p>4. To consider any other matter with the permission of the Chair.</p>

                    <p><strong>Note:</strong> Directors desirous of participating through video conferencing may intimate the same to the Company Secretary / Authorised Person in advance.</p>

                    <p><strong>Place:</strong> <span id="previewPlace">________________</span><br>
                    <strong>Date:</strong> <span id="previewNoticeDate">________________</span></p>

                    <div class="certificate-signature">
                        <p>For <strong><span id="previewCompanyNameFooter">________________</span></strong></p>
                        <p><strong>Signature:</strong> _________________________<br>
                        <strong>Name:</strong> <span id="previewSignatoryName">________________</span><br>
                        <strong>Designation:</strong> <span id="previewDesignation">________________</span><br>
                        (Company Secretary / Director)</p>
                    </div>

                    <p><strong>Enclosure:</strong> Agenda Notes (if any)</p>
                    <p><strong>To:</strong> All Directors of the Company</p>
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
      <h2 class="info-title">Notice of Board Meeting</h2>
      <p class="info-subtitle">
        Formal notice template for informing directors of an upcoming Board Meeting under the Companies Act, 2013.
      </p>
    </div>

    <!-- Introduction -->
    <div class="info-content">
      <h3 class="info-subheading">Introduction</h3>
      <p class="info-text">
        A Notice of Board Meeting is a formal communication issued to all directors informing them about an upcoming meeting of the Board of Directors. Proper notice ensures the meeting is validly constituted and any resolutions passed are legally binding. Under the Companies Act, 2013, notice must generally be sent at least seven days before the meeting and clearly state the day, date, time, venue, and agenda items.
      </p>
    </div>

    <!-- Benefits -->
    <div class="info-content">
      <h3 class="info-subheading">Benefits of Using a Standard Format</h3>
      <p class="info-text">
        Using a professionally drafted notice format saves time, reduces procedural errors, ensures compliance with the Companies Act, and provides a consistent framework for corporate communication. Standardised notices also help maintain proper records for regulatory inspections or audits.
      </p>
    </div>

    <!-- Relevance -->
    <div class="info-content">
      <h3 class="info-subheading">Relevance to Corporate Governance</h3>
      <p class="info-text">
        Companies must conduct board meetings at prescribed intervals after incorporation. The first board meeting must be held within thirty days. Notices ensure directors are informed in advance about important matters such as share allotment, approval of financial statements, appointment of auditors, and GST compliance issues. Minutes of meetings are statutory records.
      </p>
    </div>

    <!-- Sample Format -->
    <div class="format-section">
      <h3 class="format-title">Notice of Board Meeting – Sample Format</h3>

      <p class="format-text">
        [TO BE PRINTED ON COMPANY LETTERHEAD] <br>
        ________________________ <br>
        (Name of the Company) <br>
        CIN: ________________________ <br>
        Registered Office: ________________________
      </p>

      <h4 class="format-subtitle">NOTICE OF BOARD MEETING</h4>

      <p class="format-text">
        Notice is hereby given that the ________________________ (e.g., First / Second / Third / Quarterly) Meeting of the Board of Directors of ________________________ (Name of the Company) will be held as per the following details:
      </p>

      <p class="format-text">
        Day: ________________________ (e.g., Monday / Tuesday) <br>
        Date: ________________________ (Date in words, e.g., Twenty-Fifth day of December, Two Thousand Twenty-Four) <br>
        Time: ________________________ (e.g., 11:00 A.M.) <br>
        Venue: ________________________ (Full address of meeting venue)
      </p>

      <h4 class="format-subtitle">AGENDA</h4>
      <ol class="format-list">
        <li>________________________ (Agenda Item 1)</li>
        <li>________________________ (Agenda Item 2)</li>
        <li>________________________ (Agenda Item 3)</li>
        <li>To consider any other matter with the permission of the Chair.</li>
      </ol>

      <p class="format-text">
        Note: Directors desirous of participating through video conferencing may intimate the same to the Company Secretary / Authorised Person in advance.
      </p>

      <p class="format-text">
        Place: ________________________ <br>
        Date: ________________________ <br><br>
        For ________________________________________ <br>
        (Name of the Company) <br>
        Signature: __________________________ <br>
        Name: __________________________ <br>
        Designation: __________________________ <br>
        (Company Secretary / Director)
      </p>

      <p class="format-text">
        Enclosure: Agenda Notes (if any) <br>
        To: All Directors of the Company
      </p>
    </div>

    <!-- FAQ -->
    <div class="faq-section">
      <h3 class="faq-title">Frequently Asked Questions</h3>

      <div class="faq-item">
        <h4 class="faq-question">1. How do you write a notice of a board meeting?</h4>
        <p class="faq-answer">
          A notice should be on company letterhead and include the meeting number, company name and CIN, day, date, time, venue, agenda items, and signature of the Company Secretary or Director. It must be sent at least seven days before the meeting.
        </p>
      </div>

      <div class="faq-item">
        <h4 class="faq-question">2. What is the format of a notice of meeting?</h4>
        <p class="faq-answer">
          The format includes: company letterhead, title "Notice of Board Meeting," meeting details (day, date, time, venue), numbered agenda items, place and date of issuing notice, signature block of the authorised signatory, and addressee "All Directors."
        </p>
      </div>

      <div class="faq-item">
        <h4 class="faq-question">3. How do you write a proper notice?</h4>
        <p class="faq-answer">
          A proper notice should be clear, complete, professional, provide full meeting details, list agenda items, ensure at least seven days’ notice, include signature of authorised person, and be dispatched to all directors at their registered addresses.
        </p>
      </div>

      <div class="faq-item">
        <h4 class="faq-question">4. Is the signature of all directors mandatory on notice of board meeting?</h4>
        <p class="faq-answer">
          No, only a single authorised person (Company Secretary or Director) needs to sign the notice. Directors’ signatures are not required on the notice itself.
        </p>
      </div>

      <div class="faq-item">
        <h4 class="faq-question">5. Is the notice of the board meeting to be on company letterhead?</h4>
        <p class="faq-answer">
          Yes, it is standard practice to use the company’s official letterhead to provide authenticity and proper corporate documentation.
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
    const form = document.getElementById('boardMeetingNoticeForm');

    // Set default dates
    const today = new Date().toISOString().slice(0,10);
    const meetingDateInput = form.querySelector('[name="meeting_date"]');
    const noticeDateInput = form.querySelector('[name="notice_date"]');
    if (meetingDateInput && !meetingDateInput.value) meetingDateInput.value = today;
    if (noticeDateInput && !noticeDateInput.value) noticeDateInput.value = today;

    function formatDate(dateString) {
        if (!dateString) return '________________';
        const date = new Date(dateString);
        return date.toLocaleDateString('en-IN', { day: 'numeric', month: 'long', year: 'numeric' });
    }

    function updatePreview() {
        const companyName = form.querySelector('[name="company_name"]').value || '________________';
        const cin = form.querySelector('[name="cin"]').value || '________________';
        const regOffice = form.querySelector('[name="registered_office"]').value || '________________';
        const meetingNumber = form.querySelector('[name="meeting_number"]').value || '________________';
        const day = form.querySelector('[name="day"]').value || '________________';
        const meetingDateRaw = form.querySelector('[name="meeting_date"]').value;
        const meetingDate = meetingDateRaw ? formatDate(meetingDateRaw) : '________________';
        const meetingTime = form.querySelector('[name="meeting_time"]').value || '________________';
        const venue = form.querySelector('[name="venue"]').value || '________________';
        const agendaText = form.querySelector('[name="agenda_items"]').value;
        const place = form.querySelector('[name="place"]').value || '________________';
        const noticeDateRaw = form.querySelector('[name="notice_date"]').value;
        const noticeDate = noticeDateRaw ? formatDate(noticeDateRaw) : '________________';
        const signatoryName = form.querySelector('[name="signatory_name"]').value || '________________';
        const designation = form.querySelector('[name="signatory_designation"]').value || '________________';

        // Update basic fields
        document.getElementById('previewCompanyName').textContent = companyName;
        document.getElementById('previewCIN').textContent = cin;
        document.getElementById('previewRegOffice').textContent = regOffice;
        document.getElementById('previewMeetingNumber').textContent = meetingNumber;
        document.getElementById('previewCompanyNameNotice').textContent = companyName;
        document.getElementById('previewDay').textContent = day;
        document.getElementById('previewMeetingDate').textContent = meetingDate;
        document.getElementById('previewMeetingTime').textContent = meetingTime;
        document.getElementById('previewVenue').textContent = venue;
        document.getElementById('previewPlace').textContent = place;
        document.getElementById('previewNoticeDate').textContent = noticeDate;
        document.getElementById('previewCompanyNameFooter').textContent = companyName;
        document.getElementById('previewSignatoryName').textContent = signatoryName;
        document.getElementById('previewDesignation').textContent = designation;

        // Build agenda list
        const agendaListDiv = document.getElementById('previewAgendaList');
        agendaListDiv.innerHTML = '';
        if (agendaText.trim()) {
            const lines = agendaText.split('\n').filter(line => line.trim() !== '');
            lines.forEach((line, idx) => {
                const p = document.createElement('p');
                p.style.marginBottom = '4px';
                p.textContent = `${idx+1}. ${line.trim()}`;
                agendaListDiv.appendChild(p);
            });
        } else {
            const p = document.createElement('p');
            p.textContent = '1. ________________';
            agendaListDiv.appendChild(p);
        }

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
