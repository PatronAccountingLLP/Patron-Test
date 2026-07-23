@extends('tools.tool-master')
@section('title')
{{_('Board Resolution for Sitting Fees to Directors')}}
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
            <h1 class="hero-title">Board Resolution for <span> Sitting Fees to Directors</span></h1>
            <p class="hero-subtitle">
                Generate a certified Board Resolution for Sitting Fees to Directors in under 60 seconds.
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
            <h2 class="form-title">Enter Company &amp; Sitting Fees Details</h2>
            <p class="form-description">
                Fill in the details below to generate a Board Resolution for Sitting Fees to Directors.
            </p>
        </div>

        <form id="sittingFeesForm" method="POST" action="{{route('br.sitting.fees') }}">
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

                <!-- Financial Year -->
                <div class="form-group full-width">
                    <label class="form-label">Financial Year <span class="required">*</span></label>
                    <input type="text" name="financial_year" class="form-control" placeholder="e.g., 2024-25" required>
                </div>

                <!-- Sitting Fees Option -->
                <div class="form-group full-width">
                    <h4 style="margin-bottom: 10px; color: #333; border-bottom: 1px solid #eee; padding-bottom: 8px;">Sitting Fees Option</h4>
                </div>

                <div class="form-group full-width">
                    <label class="form-label">Select Sitting Fees Type <span class="required">*</span></label>
                    <div class="select-wrapper">
                        <select name="sitting_fees_type" id="sittingFeesType" class="form-control form-select" required>
                            <option value="">Select option</option>
                            <option value="no_fees">Option A: No Sitting Fees Payable</option>
                            <option value="fees_payable">Option B: Sitting Fees Payable</option>
                        </select>
                    </div>
                </div>

                <!-- Fees Amount Section (shown only when Option B is selected) -->
                <div id="feesAmountSection" style="display: none;">
                    <div class="form-group full-width">
                        <h4 style="margin-bottom: 10px; color: #333; border-bottom: 1px solid #eee; padding-bottom: 8px;">Sitting Fees Amount</h4>
                    </div>

                    <div class="form-row">
                        <div class="form-group">
                            <label class="form-label">Board Meeting Fees (Rs.)</label>
                            <input type="number" name="board_meeting_fees" id="boardMeetingFees" class="form-control" placeholder="Enter amount" min="0">
                        </div>

                        <div class="form-group">
                            <label class="form-label">Committee Meeting Fees (Rs.)</label>
                            <input type="number" name="committee_meeting_fees" id="committeeMeetingFees" class="form-control" placeholder="Enter amount" min="0">
                        </div>
                    </div>
                </div>

                <!-- Certifying Director Details -->
                <div class="form-group full-width">
                    <h4 style="margin-bottom: 10px; color: #333; border-bottom: 1px solid #eee; padding-bottom: 8px;">Certifying Director Details</h4>
                </div>

                <div class="form-row">
                    <div class="form-group">
                        <label class="form-label">Director Name <span class="required">*</span></label>
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
                        <p class="preview-subtitle">Board Resolution for Sitting Fees to Directors</p>
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
                        <strong>SUBJECT: SITTING FEES TO DIRECTORS</strong>
                    </p>

                    <p class="certificate-paragraph">
                        <strong>Financial Year:</strong> <span id="prevFinancialYear">________________</span>
                    </p>

                    <p class="certificate-paragraph" id="prevFeesDecision">
                        <strong>RESOLVED THAT</strong> pursuant to Section 197 of the Companies Act, 2013...
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
            <h2 class="info-title">Board Resolution for Sitting Fees to Directors</h2>
            <p class="info-subtitle">
                Professional Format Guide for Indian Companies
            </p>
        </div>

        <!-- Introduction -->
        <div class="info-content">
            <h3 class="info-subheading">Introduction</h3>

            <p class="info-text">
                A Board Resolution for Sitting Fees to Directors is a formal corporate document 
                that records the Board of Directors' decision regarding the payment or waiver of 
                sitting fees to directors for attending board meetings and committee meetings. 
                Under Section 197 of the Companies Act, 2013, a company may pay sitting fees to 
                directors for attending meetings of the Board or its committees, subject to such 
                sum as may be prescribed under the rules. The Board must formally approve the 
                sitting fees policy for each financial year.
            </p>

            <p class="info-text">
                This resolution specifies the applicable financial year, the amount of sitting 
                fees payable (or confirms that no sitting fees shall be paid), and authorises 
                designated persons to implement the decision. The document is essential for 
                maintaining proper corporate governance records and ensuring compliance with 
                statutory provisions regarding director remuneration. It is commonly required 
                during the commencement of each financial year when companies review and approve 
                their director compensation policies.
            </p>

            <!-- Benefits -->
            <h3 class="info-subheading">Benefits of Using a Standard Format</h3>

            <p class="info-text">
                Utilising a professionally drafted board resolution format ensures that all 
                statutory requirements under the Companies Act, 2013 are properly addressed. A 
                ready-to-use template saves valuable time during board meetings, reduces the risk 
                of procedural errors, and provides a consistent framework that captures essential 
                details including the applicable financial year, fee structure, and proper 
                authorisation. Standardised formats help maintain uniform documentation across 
                financial years.
            </p>

            <!-- Relevance -->
            <h3 class="info-subheading">Relevance to Corporate Governance</h3>

            <p class="info-text">
                Director remuneration is an important aspect of corporate governance. Following 
                Company Registration, businesses need to establish policies for compensating 
                directors for their time and expertise. The sitting fees resolution forms part 
                of the company's director remuneration framework and must be documented 
                appropriately. The resolution should be passed at the beginning of each financial 
                year and details of sitting fees paid should be disclosed in the company's annual 
                report as required under the Companies Act.
            </p>
        </div>

        <!-- Sample Format -->
        <div class="format-section">
            <h3 class="format-title">
                Board Resolution for Sitting Fees to Directors – Sample Format
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
                <strong>SUBJECT: SITTING FEES TO DIRECTORS</strong>
            </p>

            <p class="format-text">
                <strong>Option A: Where No Sitting Fees are Payable</strong>
            </p>

            <p class="format-text">
                "RESOLVED THAT pursuant to the provisions of the Articles of Association of the 
                Company and Section 197 of the Companies Act, 2013 read with rules made thereunder, 
                the consent of the Board of Directors be and is hereby accorded that no sitting 
                fees shall be payable to the Directors for attending Board Meetings or Committee 
                Meetings during the Financial Year ______________ (e.g., 2024-25)."
            </p>

            <p class="format-text">
                <strong>Option B: Where Sitting Fees are Payable</strong>
            </p>

            <p class="format-text">
                "RESOLVED THAT pursuant to the provisions of the Articles of Association of the 
                Company and Section 197 of the Companies Act, 2013 read with the Companies 
                (Appointment and Remuneration of Managerial Personnel) Rules, 2014 and other 
                applicable rules, the consent of the Board of Directors be and is hereby accorded 
                to pay sitting fees to the Directors for attending Board Meetings and Committee 
                Meetings during the Financial Year ______________ as follows:
            </p>

            <p class="format-text">
                • For attending each Board Meeting: Rs. ____________/- (Rupees ____________ Only)
            </p>

            <p class="format-text">
                • For attending each Committee Meeting: Rs. ____________/- (Rupees ____________ Only)
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
                    1. Who can be considered as an authorized signatory for the board resolution for sitting fees to directors?
                </h4>
                <p class="faq-answer">
                    Any director present at the board meeting or the company secretary (if appointed) 
                    may be authorised to sign the certified true copy of the resolution. The Board 
                    typically designates one or more directors or the company secretary to implement 
                    the sitting fees policy, make accounting entries, and ensure timely payment of 
                    fees to directors as approved.
                </p>
            </div>

            <div class="faq-item">
                <h4 class="faq-question">
                    2. Is the signature of all directors mandatory on the board resolution format for sitting fees to directors?
                </h4>
                <p class="faq-answer">
                    No, signatures of all directors are not mandatory. The resolution is passed by 
                    a majority of directors present and voting at a duly convened board meeting 
                    where quorum is present. The certified true copy may be signed by a single 
                    authorised director or the company secretary. The minutes should record the 
                    names of directors present and the voting details for proper documentation.
                </p>
            </div>

            <div class="faq-item">
                <h4 class="faq-question">
                    3. Which resolution is required for sitting fees to directors?
                </h4>
                <p class="faq-answer">
                    A board resolution is required for determining sitting fees payable to directors. 
                    The resolution should reference Section 197 of the Companies Act, 2013, the 
                    company's Articles of Association, and applicable rules. The sitting fees must 
                    not exceed the limits prescribed under the Companies (Appointment and Remuneration 
                    of Managerial Personnel) Rules, 2014 for meetings of the Board or committees.
                </p>
            </div>

            <div class="faq-item">
                <h4 class="faq-question">
                    4. Does the Board Resolution format for sitting fees to directors need to be certified by a professional?
                </h4>
                <p class="faq-answer">
                    There is no statutory requirement for the board resolution to be certified by 
                    an external professional. The certified true copy may be signed by any director 
                    or the company secretary of the company. The resolution forms part of the 
                    company's internal records and does not require filing with the Registrar of 
                    Companies, though details of sitting fees paid must be disclosed in the annual report.
                </p>
            </div>

            <div class="faq-item">
                <h4 class="faq-question">
                    5. Can a board resolution for sitting fees to directors be passed without convening a board meeting?
                </h4>
                <p class="faq-answer">
                    While the Companies Act permits certain resolutions to be passed by circulation, 
                    matters relating to director remuneration including sitting fees are typically 
                    decided at duly convened board meetings to ensure proper deliberation. A 
                    resolution passed by circulation is valid if approved by a majority of directors 
                    entitled to vote. However, standard practice is to consider such matters at 
                    regular board meetings.
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

    const form = document.getElementById('sittingFeesForm');
    const downloadPdfBtn = document.getElementById('downloadPdfBtn');
    const alertContainer = document.getElementById('alertContainer');
    const sittingFeesType = document.getElementById('sittingFeesType');
    const feesAmountSection = document.getElementById('feesAmountSection');
    const boardMeetingFees = document.getElementById('boardMeetingFees');
    const committeeMeetingFees = document.getElementById('committeeMeetingFees');

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

    // Toggle fees amount section based on selection
    sittingFeesType.addEventListener('change', function() {
        if (this.value === 'fees_payable') {
            feesAmountSection.style.display = 'block';
            boardMeetingFees.setAttribute('required', 'required');
            committeeMeetingFees.setAttribute('required', 'required');
        } else {
            feesAmountSection.style.display = 'none';
            boardMeetingFees.removeAttribute('required');
            committeeMeetingFees.removeAttribute('required');
            boardMeetingFees.value = '';
            committeeMeetingFees.value = '';
        }
        updatePreview();
    });

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
        const financialYear = form.querySelector('[name="financial_year"]').value || '________________';
        const feesType = form.querySelector('[name="sitting_fees_type"]').value;
        const boardFees = form.querySelector('[name="board_meeting_fees"]').value;
        const committeeFees = form.querySelector('[name="committee_meeting_fees"]').value;
        const place = form.querySelector('[name="place"]').value || '________________';
        const resolutionDate = form.querySelector('[name="resolution_date"]').value;

        // Update preview text
        const elCompanyName = document.getElementById('prevCompanyName');
        const elCIN = document.getElementById('prevCIN');
        const elMeetingDate = document.getElementById('prevMeetingDate');
        const elMeetingTime = document.getElementById('prevMeetingTime');
        const elFinancialYear = document.getElementById('prevFinancialYear');
        const elFeesDecision = document.getElementById('prevFeesDecision');
        const elFooterCompanyName = document.getElementById('footerCompanyName');
        const elFooterPlace = document.getElementById('footerPlace');
        const elFooterDate = document.getElementById('footerDate');

        if (elCompanyName) elCompanyName.textContent = companyName;
        if (elCIN) elCIN.textContent = cin;
        if (elFinancialYear) elFinancialYear.textContent = financialYear;
        if (elFooterCompanyName) elFooterCompanyName.textContent = companyName;
        if (elFooterPlace) elFooterPlace.textContent = place;

        // Update fees decision text
        if (elFeesDecision) {
            if (feesType === 'no_fees') {
                elFeesDecision.innerHTML = '<strong>RESOLVED THAT</strong> no sitting fees shall be payable to the Directors for attending Board Meetings or Committee Meetings during the Financial Year ' + financialYear + '.';
            } else if (feesType === 'fees_payable') {
                let feesText = '<strong>RESOLVED THAT</strong> sitting fees be paid to Directors for FY ' + financialYear + ':';
                if (boardFees) {
                    feesText += '<br>• Board Meeting: Rs. ' + parseInt(boardFees).toLocaleString('en-IN') + '/-';
                }
                if (committeeFees) {
                    feesText += '<br>• Committee Meeting: Rs. ' + parseInt(committeeFees).toLocaleString('en-IN') + '/-';
                }
                elFeesDecision.innerHTML = feesText;
            } else {
                elFeesDecision.innerHTML = '<strong>RESOLVED THAT</strong> pursuant to Section 197 of the Companies Act, 2013...';
            }
        }

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
