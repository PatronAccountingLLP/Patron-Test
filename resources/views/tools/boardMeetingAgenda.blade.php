@extends('tools.tool-master')
@section('title')
{{_(' Board Meeting Agenda for Private Limited Company
')}}
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
            <h1 class="hero-title"> <span> Board Meeting Agenda for Private Limited Company
</span></h1>
            <p class="hero-subtitle">
                Generate a certified Board Meeting Agenda for Private Limited Company
 in under 60 seconds.
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
            <h2 class="form-title">Enter Board Meeting Agenda Details</h2>
            <p class="form-description">
                Fill in the details below to generate a Board Meeting Agenda for your Private Limited Company.
            </p>
        </div>

        <form id="boardAgendaForm" method="POST" action="{{ route('br.board.agenda') }}">
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
                    <textarea name="registered_office" class="form-control" placeholder="Enter complete address" required></textarea>
                </div>

                <!-- Meeting Details -->
                <div class="form-row">
                    <div class="form-group">
                        <label class="form-label">Meeting Day & Date <span class="required">*</span></label>
                        <input type="date" name="meeting_date" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label class="form-label">Meeting Time <span class="required">*</span></label>
                        <input type="time" name="meeting_time" class="form-control" required>
                    </div>
                </div>
                <div class="form-group full-width">
                    <label class="form-label">Venue <span class="required">*</span></label>
                    <input type="text" name="venue" class="form-control" placeholder="Meeting venue address" required>
                </div>
                <div class="form-group full-width">
                    <label class="form-label">Mode of Meeting <span class="required">*</span></label>
                    <div class="select-wrapper">
                        <select name="mode" class="form-control form-select" required>
                            <option value="">Select mode</option>
                            <option value="Physical">Physical</option>
                            <option value="Video Conferencing">Video Conferencing</option>
                            <option value="Other Audio-Visual Means">Other Audio-Visual Means</option>
                        </select>
                    </div>
                </div>

                <!-- Agenda Items (textarea with default items) -->
                <div class="form-group full-width">
                    <label class="form-label">Agenda Items (one per line) <span class="required">*</span></label>
                    <textarea name="agenda_items" class="form-control" rows="15" required>
1. To elect the Chairperson of the meeting (if required)
2. To grant leave of absence to directors, if any
3. To authorise a person to record the proceedings of the Board Meeting
4. To authorise a Director to certify and circulate copies of Board Minutes
5. To approve the Minutes of the preceding Board Meeting held on ____________
6. To approve resolutions passed by circulation since the last meeting (if any)
7. To take note of the Certificate of Incorporation issued by the Registrar of Companies
8. To take note of the Memorandum and Articles of Association of the Company
9. To confirm the situation of the Registered Office of the Company
10. To confirm/note the appointment of the First Directors of the Company
11. To read and record the notices of disclosure of interest given by Directors (Form MBP-1)
12. To fix the Financial Year of the Company
13. To consider and appoint the First Auditors of the Company
14. To adopt the Common Seal of the Company (if applicable)
15. To note the opening of Bank Account with ____________ (Bank Name)
16. To authorise preparation and execution of documents for post-incorporation compliances
17. To authorise issue of Share Certificates to the Subscribers of Memorandum
18. To approve and reimburse Pre-Incorporation/Preliminary Expenses
19. To authorise a Director to maintain Books and Registers at the Registered Office
20. To note the Letterhead of the Company as per statutory requirements
21. To consider appointment of ____________ as Additional Director (if applicable)
22. To discuss any other matter with the permission of the Chair
                    </textarea>
                </div>

                <!-- Signatory Details -->
                <div class="form-row">
                    <div class="form-group">
                        <label class="form-label">Signatory Name <span class="required">*</span></label>
                        <input type="text" name="signatory_name" class="form-control" placeholder="Name of Director / Company Secretary" required>
                    </div>
                    <div class="form-group">
                        <label class="form-label">Designation <span class="required">*</span></label>
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
                        <label class="form-label">Place <span class="required">*</span></label>
                        <input type="text" name="place" class="form-control" placeholder="City / Place" required>
                    </div>
                    <div class="form-group">
                        <label class="form-label">Date of Agenda <span class="required">*</span></label>
                        <input type="date" name="agenda_date" class="form-control" required>
                    </div>
                </div>
            </div>

            <button type="submit" class="btn-submit" id="downloadPdfBtn">
                <span class="btn-text">Generate & Download Agenda</span>
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
                        <p class="preview-subtitle">Board Meeting Agenda</p>
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
                    <h2 class="certificate-doc-title">AGENDA</h2>
                    <p class="certificate-doc-subtitle">
                        FOR THE MEETING OF THE BOARD OF DIRECTORS
                    </p>
                </div>

                <div class="certificate-body">
                    <!-- Company details -->
                    <p style="font-weight:bold; margin-bottom:4px;"><span id="previewCompanyName">________________</span></p>
                    <p>CIN: <span id="previewCIN">________________</span></p>
                    <p>Registered Office: <span id="previewRegOffice">________________</span></p>

                    <p style="margin-top:16px;">AGENDA</p>
                    <p>FOR THE MEETING OF THE BOARD OF DIRECTORS</p>
                    <p>of <span id="previewCompanyName2">________________</span></p>

                    <p><strong>Day & Date:</strong> <span id="previewMeetingDate">________________</span></p>
                    <p><strong>Time:</strong> <span id="previewMeetingTime">________________</span></p>
                    <p><strong>Venue:</strong> <span id="previewVenue">________________</span></p>
                    <p><strong>Mode of Meeting:</strong> <span id="previewMode">________________</span></p>

                    <p><strong>S.No.</strong> &nbsp;&nbsp; <strong>Agenda Items</strong></p>
                    <div id="previewAgendaList"></div>

                    <p><strong>Date of Next Board Meeting:</strong> To be decided at the meeting</p>

                    <p>For <span id="previewCompanyNameFooter">________________</span></p>
                    <p><span id="previewSignatoryName">________________</span><br><span id="previewDesignation">________________</span></p>
                    <p><strong>Date:</strong> <span id="previewAgendaDate">________________</span></p>
                </div>
            </div>
        </div>
    </div>
</div>



<div class="info-section">
    <div class="info-card">

        <!-- Header -->
        <div class="info-header">
            <span class="info-header-badge">Professional Format Guide</span>
            <h2 class="info-title">Board Meeting Agenda – Private Limited Company</h2>
            <p class="info-subtitle">
                Standard Agenda Template for Board of Directors Meeting
            </p>
        </div>

        <!-- Introduction -->
        <div class="info-content">
            <h3 class="info-subheading">Introduction</h3>
            <p class="info-text">
                A Board Meeting Agenda is a structured document outlining the topics, matters, and items to be discussed during a meeting of the Board of Directors. Under the Companies Act, 2013, private limited companies are required to hold board meetings at regular intervals. A well-prepared agenda ensures meetings are efficient, statutory and business matters are addressed, and directors can prepare in advance.
            </p>
        </div>

        <!-- Benefits -->
        <div class="info-content">
            <h3 class="info-subheading">Benefits of Using a Standard Format</h3>
            <p class="info-text">
                Using a professionally drafted agenda ensures all necessary items are included and statutory requirements are met. It saves preparation time, reduces risk of omitting important matters, and provides a consistent framework for effective board meetings.
            </p>
        </div>

        <!-- Relevance -->
        <div class="info-content">
            <h3 class="info-subheading">Relevance to Corporate Compliance</h3>
            <p class="info-text">
                Newly incorporated private limited companies must hold their first board meeting within 30 days of incorporation. Key agenda items include adoption of registered office, appointment of auditors, opening bank accounts, authorising share certificate issuance, and GST registration if applicable.
            </p>
        </div>

        <!-- Sample Agenda Format -->
        <div class="format-section">
            <h3 class="format-title">Board Meeting Agenda – Sample Format</h3>

            <p class="format-text">
                [TO BE PRINTED ON COMPANY LETTERHEAD]<br>
                ________________________<br>
                (Name of the Company)<br>
                CIN: ________________________<br>
                Registered Office: ________________________
            </p>

            <p class="format-text">
                <strong>AGENDA</strong><br>
                <strong>FOR THE MEETING OF THE BOARD OF DIRECTORS</strong><br>
                of ________________________ (Company Name)<br>
                Day & Date: ________________________<br>
                Time: ________________________<br>
                Venue: ________________________<br>
                Mode of Meeting: ________________________ (Physical / Video Conferencing / Audio-Visual)
            </p>

            <table class="format-table">
                <thead>
                    <tr>
                        <th>S.No.</th>
                        <th>Agenda Items</th>
                    </tr>
                </thead>
                <tbody>
                    <tr><td>1</td><td>To elect the Chairperson of the meeting (if required)</td></tr>
                    <tr><td>2</td><td>To grant leave of absence to directors, if any</td></tr>
                    <tr><td>3</td><td>To authorise a person to record the proceedings of the Board Meeting</td></tr>
                    <tr><td>4</td><td>To authorise a Director to certify and circulate copies of Board Minutes</td></tr>
                    <tr><td>5</td><td>To approve the Minutes of the preceding Board Meeting held on ____________</td></tr>
                    <tr><td>6</td><td>To approve resolutions passed by circulation since the last meeting (if any)</td></tr>
                    <tr><td>7</td><td>To take note of the Certificate of Incorporation issued by the Registrar of Companies</td></tr>
                    <tr><td>8</td><td>To take note of the Memorandum and Articles of Association of the Company</td></tr>
                    <tr><td>9</td><td>To confirm the situation of the Registered Office of the Company</td></tr>
                    <tr><td>10</td><td>To confirm/note the appointment of the First Directors of the Company</td></tr>
                    <tr><td>11</td><td>To read and record the notices of disclosure of interest given by Directors (Form MBP-1)</td></tr>
                    <tr><td>12</td><td>To fix the Financial Year of the Company</td></tr>
                    <tr><td>13</td><td>To consider and appoint the First Auditors of the Company</td></tr>
                    <tr><td>14</td><td>To adopt the Common Seal of the Company (if applicable)</td></tr>
                    <tr><td>15</td><td>To note the opening of Bank Account with ____________ (Bank Name)</td></tr>
                    <tr><td>16</td><td>To authorise preparation and execution of documents for post-incorporation compliances</td></tr>
                    <tr><td>17</td><td>To authorise issue of Share Certificates to the Subscribers of Memorandum</td></tr>
                    <tr><td>18</td><td>To approve and reimburse Pre-Incorporation/Preliminary Expenses</td></tr>
                    <tr><td>19</td><td>To authorise a Director to maintain Books and Registers at the Registered Office</td></tr>
                    <tr><td>20</td><td>To note the Letterhead of the Company as per statutory requirements</td></tr>
                    <tr><td>21</td><td>To consider appointment of ____________ as Additional Director (if applicable)</td></tr>
                    <tr><td>22</td><td>To discuss any other matter with the permission of the Chair</td></tr>
                </tbody>
            </table>

            <p class="format-text">
                Date of Next Board Meeting: To be decided at the meeting<br>
                For ________________________ (Company Name)<br>
                ________________________<br>
                Name of Director / Company Secretary<br>
                Date: ________________________
            </p>
        </div>

        <!-- FAQ -->
        <div class="faq-section">
            <h3 class="faq-title">Frequently Asked Questions</h3>

            <div class="faq-item">
                <h4 class="faq-question">1. Who sets the agenda for the board meeting?</h4>
                <p class="faq-answer">
                    The agenda is prepared by the Company Secretary in consultation with the Chairperson or Managing Director. Directors can also request inclusion of items. The agenda is circulated with the notice of the meeting.
                </p>
            </div>

            <div class="faq-item">
                <h4 class="faq-question">2. What is the format for a meeting agenda?</h4>
                <p class="faq-answer">
                    It should include company name, CIN, registered office, day, date, time, venue, mode of meeting, serial-wise agenda items, and space for noting the next meeting date. Letterhead and authorised signature are required.
                </p>
            </div>

            <div class="faq-item">
                <h4 class="faq-question">3. How to create an effective board meeting agenda?</h4>
                <p class="faq-answer">
                    List items clearly in logical order. Start with routine matters (e.g., previous minutes), followed by substantive business items in priority. Include sufficient detail for preparation and circulate with adequate notice.
                </p>
            </div>

            <div class="faq-item">
                <h4 class="faq-question">4. Should the agenda be on company letterhead?</h4>
                <p class="faq-answer">
                    Yes, using official letterhead ensures authenticity, statutory compliance, and proper corporate documentation.
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
    const form = document.getElementById('boardAgendaForm');

    // Set default dates
    const today = new Date().toISOString().slice(0,10);
    const meetingDateInput = form.querySelector('[name="meeting_date"]');
    const agendaDateInput = form.querySelector('[name="agenda_date"]');
    if (meetingDateInput && !meetingDateInput.value) meetingDateInput.value = today;
    if (agendaDateInput && !agendaDateInput.value) agendaDateInput.value = today;

    // Default meeting time
    const meetingTimeInput = form.querySelector('[name="meeting_time"]');
    if (meetingTimeInput && !meetingTimeInput.value) meetingTimeInput.value = "11:00";

    // Helper to format date
    function formatDate(dateString) {
        if (!dateString) return '________________';
        const date = new Date(dateString);
        return date.toLocaleDateString('en-IN', { day: '2-digit', month: 'long', year: 'numeric' });
    }

    function updatePreview() {
        const companyName = form.querySelector('[name="company_name"]').value || '________________';
        const cin = form.querySelector('[name="cin"]').value || '________________';
        const regOffice = form.querySelector('[name="registered_office"]').value || '________________';
        const meetingDateRaw = form.querySelector('[name="meeting_date"]').value;
        const meetingDate = meetingDateRaw ? formatDate(meetingDateRaw) : '________________';
        const meetingTime = form.querySelector('[name="meeting_time"]').value || '________________';
        const venue = form.querySelector('[name="venue"]').value || '________________';
        const mode = form.querySelector('[name="mode"]').value || '________________';

        const agendaText = form.querySelector('[name="agenda_items"]').value;
        let agendaItems = [];
        if (agendaText) {
            agendaItems = agendaText.split('\n').filter(line => line.trim() !== '');
        }

        const signatoryName = form.querySelector('[name="signatory_name"]').value || '________________';
        const designation = form.querySelector('[name="signatory_designation"]').value || '________________';
        const agendaDateRaw = form.querySelector('[name="agenda_date"]').value;
        const agendaDate = agendaDateRaw ? formatDate(agendaDateRaw) : '________________';

        // Update basic fields
        document.getElementById('previewCompanyName').textContent = companyName;
        document.getElementById('previewCIN').textContent = cin;
        document.getElementById('previewRegOffice').textContent = regOffice;
        document.getElementById('previewCompanyName2').textContent = companyName;
        document.getElementById('previewMeetingDate').textContent = meetingDate;
        document.getElementById('previewMeetingTime').textContent = meetingTime;
        document.getElementById('previewVenue').textContent = venue;
        document.getElementById('previewMode').textContent = mode;
        document.getElementById('previewCompanyNameFooter').textContent = companyName;
        document.getElementById('previewSignatoryName').textContent = signatoryName;
        document.getElementById('previewDesignation').textContent = designation;
        document.getElementById('previewAgendaDate').textContent = agendaDate;

        // Build agenda list
        const agendaListDiv = document.getElementById('previewAgendaList');
        agendaListDiv.innerHTML = '';
        agendaItems.forEach((item, idx) => {
            const itemP = document.createElement('p');
            itemP.style.marginBottom = '4px';
            itemP.innerHTML = `${idx+1}. ${item}`;
            agendaListDiv.appendChild(itemP);
        });
        if (agendaItems.length === 0) {
            const emptyP = document.createElement('p');
            emptyP.textContent = 'No agenda items entered.';
            agendaListDiv.appendChild(emptyP);
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
