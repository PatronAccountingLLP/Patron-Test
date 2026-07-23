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
            <h1 class="hero-title">Board Resolution for <span> Increase in Paid Up Share Capital</span></h1>
            <p class="hero-subtitle">
                Generate a certifiedBoard Resolution for Increase in Paid Up Share Capital in under 60 seconds.
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
            <h2 class="form-title">Enter Company & Share Capital Details</h2>
            <p class="form-description">
                Fill in the details below to generate a Board Resolution for Increase in Paid Up Share Capital.
            </p>
        </div>

        <form id="shareCapitalForm" method="POST" action="{{route('br.sharecapital') }}">
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
                    <textarea name="registered_office" class="form-control" placeholder="Enter registered office address" required></textarea>
                </div>

                <!-- Meeting Details -->
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

                <!-- Share Details -->
                <div class="form-row">
                    <div class="form-group">
                        <label class="form-label">Number of Equity Shares <span class="required">*</span></label>
                        <input type="text" name="number_of_shares" class="form-control" placeholder="e.g., 100000" required>
                    </div>
                    <div class="form-group">
                        <label class="form-label">Face Value per Share (₹) <span class="required">*</span></label>
                        <input type="text" name="face_value" class="form-control" placeholder="e.g., 10" required>
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-group">
                        <label class="form-label">Aggregate Nominal Value (Numbers) <span class="required">*</span></label>
                        <input type="text" name="aggregate_value_number" class="form-control" placeholder="e.g., 1000000" required>
                    </div>
                    <div class="form-group">
                        <label class="form-label">Aggregate Nominal Value (In Words) <span class="required">*</span></label>
                        <input type="text" name="aggregate_value_words" class="form-control" placeholder="e.g., Ten Lakh Rupees" required>
                    </div>
                </div>

                <!-- Terms and Conditions -->
                <div class="form-group full-width">
                    <label class="form-label">Record Date <span class="required">*</span></label>
                    <input type="date" name="record_date" class="form-control" required>
                </div>

                <div class="form-group full-width">
                    <label class="form-label">Offer Validity Period (Days) <span class="required">*</span></label>
                    <div class="select-wrapper">
                        <select name="offer_period" class="form-control form-select" required>
                            <option value="">Select period</option>
                            <option value="15">15 days</option>
                            <option value="30">30 days</option>
                            <option value="45">45 days</option>
                            <option value="60">60 days</option>
                        </select>
                    </div>
                </div>

                <!-- Signatory Details -->
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
                                <option value="Managing Director">Managing Director</option>
                                <option value="Company Secretary">Company Secretary</option>
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
                        <p class="preview-subtitle">Board Resolution for Increase in Paid Up Share Capital</p>
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
                    </div>

                    <p class="certificate-paragraph">
                        <strong>Date of Meeting: </strong><span id="prevMeetingDate">__________</span><br>
                        <strong>Time: </strong><span id="prevMeetingTime">______</span> (Hours)<br>
                        <strong>Venue: </strong>Registered Office of the Company
                    </p>

                    <p class="certificate-paragraph">
                        <strong>SUBJECT: INCREASE IN PAID UP SHARE CAPITAL BY WAY OF RIGHTS ISSUE</strong>
                    </p>

                    <p class="certificate-paragraph">
                        The Chairman informed the Board about the requirement for additional capital to meet the business needs of the Company. After thorough deliberation, the Board decided to proceed with a further allotment of shares by way of Rights Issue to the existing members of the Company. The following resolution was passed unanimously:
                    </p>

                    <p class="certificate-paragraph">
                        <strong>"RESOLVED THAT</strong> pursuant to the provisions of Section 62 of the Companies Act, 2013 read with the Companies (Share Capital and Debentures) Rules, 2014 and other applicable provisions (including any statutory modification(s) or re-enactment thereof for the time being in force), and subject to the approval of the members of the Company, the Board hereby approves the issue and allotment of:
                    </p>

                    <p class="certificate-paragraph">
                        <strong>Number of Equity Shares: </strong><span id="prevNumberOfShares">________________</span><br>
                        <strong>Face Value per Share: </strong>Rs. <span id="prevFaceValue">________________</span><br>
                        <strong>Aggregate Nominal Value: </strong>Rs. <span id="prevAggregateNumber">________________</span> (Rupees <span id="prevAggregateWords">________________</span> only)
                    </p>

                    <p class="certificate-paragraph">
                        (hereinafter referred to as "New Shares"), such issue to be made on the following terms and conditions:
                    </p>

                    <ol class="certificate-list" style="list-style-type: decimal; padding-left: 20px;">
                        <li>The issue of shares shall be made in proportion to the total equity shares held by each member as on the record date, being <strong id="prevRecordDate">________________</strong>.</li>
                        <li>The offer to members shall be made by way of a Letter of Offer indicating the number of shares held by each member, the number of shares to which each member is entitled as rights shares, the price per share, and the total amount payable if the offer is accepted in full.</li>
                        <li>The offer shall remain valid for a maximum period of <strong id="prevOfferPeriod">________________</strong> days from the date of opening of the offer, and shall include the right for the person to whom the offer is made to renounce the shares offered in favour of any other person.</li>
                        <li>Upon expiry of the offer period or upon receipt of earlier intimation from any person declining to accept the shares offered, the Board of Directors shall be authorised to dispose of the unsubscribed portion of the New Shares in such manner as they consider most beneficial to the Company.</li>
                        <li>The equity shares so issued shall, upon allotment, rank pari passu with the existing equity shares of the Company in all respects, including voting rights, and shall be entitled to dividend, if any, proportionately for the year of allotment.</li>
                        <li>Share certificates shall be issued to the allottees within the time prescribed under the Companies Act, 2013.</li>
                    </ol>

                    <p class="certificate-paragraph">
                        <strong>RESOLVED FURTHER THAT</strong> any Director of the Company be and is hereby authorised to take all necessary steps to implement the above resolution, finalise and issue the Letter of Offer, execute all documents, and take all actions in connection with the further issue and allotment of shares to the members and others, as applicable.
                    </p>

                    <div class="certificate-signature">
                        <p>Certified to be a True Copy</p>
                        <p>For <strong id="footerCompanyName">________________</strong><br>
                        (Name of the Company)</p>
                        <p><strong>Signature:</strong> _________________________
                        <br><strong>Name:</strong> <span id="footerSignatoryName">________________</span>
                        <br><strong>Designation:</strong> <span id="footerDesignation">________________</span>
                        <br><strong>DIN:</strong> <span id="footerDIN">________________</span>
                        <br><strong>Date:</strong> <span id="footerDate">________________</span>
                        <br><strong>Place:</strong> <span id="footerPlace">________________</span></p>
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
            <h2 class="info-title">Board Resolution for Increase in Paid Up Share Capital</h2>
            <p class="info-subtitle">
                Comprehensive Guide for Capital Expansion & Regulatory Compliance
            </p>
        </div>

        <!-- Introduction -->
        <div class="info-content">
            <h3 class="info-subheading">Introduction</h3>

            <p class="info-text">
                A Board Resolution for Increase in Paid Up Share Capital is a formal corporate document
                that records the Board of Directors' consent to issue additional shares, thereby increasing
                the company's paid-up capital. Under the Companies Act, 2013, a company may increase its
                paid-up share capital through rights issue to existing members, private placement, or
                other permissible modes. Prior board approval is mandatory before seeking shareholder
                consent for such capital increase.
            </p>

            <p class="info-text">
                This resolution specifies the number of shares to be issued, their nominal value,
                terms of issue, and authorises designated representatives to implement the allotment
                process. It is essential for regulatory filings with the Registrar of Companies and
                forms part of the documentation required for Form PAS-3 (Return of Allotment).
            </p>

            <!-- Benefits -->
            <h3 class="info-subheading">Benefits of Using a Standard Format</h3>

            <p class="info-text">
                A professionally drafted board resolution ensures all statutory requirements under
                the Companies Act, 2013 and related rules are properly addressed. A ready-to-use
                template saves time, reduces procedural errors, and provides a comprehensive
                framework covering issue terms, renunciation rights, and disposal of unsubscribed shares.
            </p>

            <p class="info-text">
                Standardised formats also facilitate smoother ROC filings and compliance tracking.
            </p>

            <!-- Relevance -->
            <h3 class="info-subheading">Relevance to Corporate Compliance</h3>

            <p class="info-text">
                Increasing paid-up share capital is a significant corporate decision with multiple
                compliance implications. The board resolution forms the foundation for subsequent
                shareholder approval and ROC filings. After allotment, Form PAS-3 must be filed
                within 30 days, and share certificates issued within the prescribed timeline.
            </p>
        </div>

        <!-- Sample Format -->
        <div class="format-section">
            <h3 class="format-title">
                Board Resolution for Increase in Paid Up Share Capital – Sample Format
            </h3>

            <p class="format-text"><strong>Company Name:</strong> _______________________________</p>
            <p class="format-text"><strong>CIN:</strong> _______________________________</p>
            <p class="format-text"><strong>Registered Office:</strong> _______________________________</p>

            <p class="format-text"><strong>CERTIFIED TRUE COPY OF THE BOARD RESOLUTION</strong></p>

            <p class="format-text">
                Passed at the Meeting of the Board of Directors of the Company on
                __________ (Date) at __________ (Time) at the Registered Office of the Company.
            </p>

            <p class="format-text">
                <strong>SUBJECT:</strong> Increase in Paid Up Share Capital by Way of Rights Issue
            </p>

            <p class="format-text">
                The Board resolved to proceed with a further allotment of shares by way of Rights Issue
                to existing members. The resolution was passed unanimously as follows:
            </p>

            <p class="format-text">
                <strong>RESOLVED THAT</strong> pursuant to Section 62 of the Companies Act, 2013 read with
                Companies (Share Capital and Debentures) Rules, 2014 and other applicable provisions,
                and subject to members’ approval, the Board approves the issue and allotment of:
            </p>

            <p class="format-text"><strong>Number of Equity Shares:</strong> _______________________________</p>
            <p class="format-text"><strong>Face Value per Share:</strong> Rs. _______________________________</p>
            <p class="format-text"><strong>Aggregate Nominal Value:</strong> Rs. _______________________________ (Rupees _______________________________ only)</p>

            <p class="format-text">Terms and Conditions:</p>
            <ol class="format-list">
                <li>The issue shall be made in proportion to equity shares held by each member as on the record date, __________.</li>
                <li>A Letter of Offer shall indicate the number of shares held, rights shares entitled, price per share, and total payable if accepted.</li>
                <li>The offer remains valid for fifteen (15) days and includes renunciation rights.</li>
                <li>Board is authorised to dispose of unsubscribed shares as deemed beneficial to the Company.</li>
                <li>Shares issued shall rank pari passu with existing equity shares, including dividend and voting rights.</li>
                <li>Share certificates shall be issued to allottees within the time prescribed under the Companies Act, 2013.</li>
            </ol>

            <p class="format-text">
                <strong>RESOLVED FURTHER THAT</strong> any Director is authorised to take necessary steps
                to implement this resolution, finalise the Letter of Offer, execute documents, and act in
                connection with the issue and allotment.
            </p>

            <p class="format-text">
                For ________________________________________ (Name of the Company)
            </p>

            <p class="format-text"><strong>Signature:</strong> _______________________________</p>
            <p class="format-text"><strong>Name:</strong> _______________________________</p>
            <p class="format-text"><strong>Designation:</strong> _______________________________</p>
            <p class="format-text"><strong>DIN:</strong> _______________________________</p>
            <p class="format-text"><strong>Date:</strong> _______________________________</p>
            <p class="format-text"><strong>Place:</strong> _______________________________</p>
        </div>

        <!-- FAQ -->
        <div class="faq-section">
            <h3 class="faq-title">Frequently Asked Questions</h3>

            <div class="faq-item">
                <h4 class="faq-question">
                    1. Are details the same as in the shareholder special resolution?
                </h4>
                <p class="faq-answer">
                    Yes, core details like number of shares, face value, and terms are similar. The difference
                    is the approving authority: board resolution records directors’ recommendation, while
                    the shareholder resolution records members’ approval.
                </p>
            </div>

            <div class="faq-item">
                <h4 class="faq-question">
                    2. Is signature of all directors mandatory?
                </h4>
                <p class="faq-answer">
                    No. Passed by majority of directors present. Certified true copy can be signed by an
                    authorised director or company secretary. Minutes should record attendees and voting.
                </p>
            </div>

            <div class="faq-item">
                <h4 class="faq-question">
                    3. Should it be on company letterhead?
                </h4>
                <p class="faq-answer">
                    Not legally required, but considered good practice. Letterhead adds authenticity and
                    aids verification by regulators, auditors, banks, and stakeholders.
                </p>
            </div>

            <div class="faq-item">
                <h4 class="faq-question">
                    4. Does it need to be certified by a professional?
                </h4>
                <p class="faq-answer">
                    No statutory requirement. However, Form PAS-3 filing may require certification by a
                    practising professional such as Company Secretary, CA, or Cost Accountant.
                </p>
            </div>

            <div class="faq-item">
                <h4 class="faq-question">
                    5. Is it mandatory to attach the board resolution to MCA Form PAS-3?
                </h4>
                <p class="faq-answer">
                    Yes. The board resolution is a mandatory attachment along with shareholder approval,
                    list of allottees, consideration details, and valuation report (if applicable). The form
                    must be filed within 30 days of allotment.
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

    const form = document.getElementById('shareCapitalForm');
    const downloadPdfBtn = document.getElementById('downloadPdfBtn');

    // Set default date
    const today = new Date().toISOString().split('T')[0];
    const meetingDateInput = form.querySelector('[name="meeting_date"]');
    const recordDateInput = form.querySelector('[name="record_date"]');
    
    if (meetingDateInput) {
        meetingDateInput.value = today;
    }
    
    if (recordDateInput) {
        // Set record date to 7 days from today by default
        const recordDate = new Date();
        recordDate.setDate(recordDate.getDate() + 7);
        recordDateInput.value = recordDate.toISOString().split('T')[0];
    }

    // Set default time (11:00 AM)
    const timeInput = form.querySelector('[name="meeting_time"]');
    if (timeInput && !timeInput.value) {
        timeInput.value = "11:00";
    }

    // Set default offer period (15 days)
    const offerPeriodSelect = form.querySelector('[name="offer_period"]');
    if (offerPeriodSelect) {
        offerPeriodSelect.value = "15";
    }

    // Auto-calculate aggregate value based on shares and face value
    const sharesInput = form.querySelector('[name="number_of_shares"]');
    const faceValueInput = form.querySelector('[name="face_value"]');
    const aggregateNumberInput = form.querySelector('[name="aggregate_value_number"]');
    
    function calculateAggregateValue() {
        if (sharesInput.value && faceValueInput.value) {
            const shares = parseInt(sharesInput.value.replace(/,/g, '')) || 0;
            const faceValue = parseInt(faceValueInput.value.replace(/,/g, '')) || 0;
            const aggregateValue = shares * faceValue;
            
            if (aggregateNumberInput) {
                aggregateNumberInput.value = aggregateValue.toLocaleString('en-IN');
            }
            
            // Update preview
            updatePreview();
        }
    }
    
    if (sharesInput && faceValueInput && aggregateNumberInput) {
        sharesInput.addEventListener('input', calculateAggregateValue);
        faceValueInput.addEventListener('input', calculateAggregateValue);
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
        // Company Details
        const companyName = form.querySelector('[name="company_name"]').value || '________________';
        const cin = form.querySelector('[name="cin"]').value || '________________';
        const officeAddress = form.querySelector('[name="registered_office"]').value || '________________';
        
        // Meeting Details
        const meetingDate = form.querySelector('[name="meeting_date"]').value;
        const meetingTime = form.querySelector('[name="meeting_time"]').value || '______';
        
        // Share Details
        const numberOfShares = form.querySelector('[name="number_of_shares"]').value || '________________';
        const faceValue = form.querySelector('[name="face_value"]').value || '________________';
        const aggregateNumber = form.querySelector('[name="aggregate_value_number"]').value || '________________';
        const aggregateWords = form.querySelector('[name="aggregate_value_words"]').value || '________________';
        
        // Terms
        const recordDate = form.querySelector('[name="record_date"]').value;
        const offerPeriod = form.querySelector('[name="offer_period"]').value || '15';
        
        // Signatory Details
        const signatoryName = form.querySelector('[name="signatory_name"]').value || '________________';
        const designation = form.querySelector('[name="signatory_designation"]').value || '________________';
        const signatoryDIN = form.querySelector('[name="signatory_din"]').value || '________________';
        const place = form.querySelector('[name="place"]').value || '________________';

        // Update preview text
        document.getElementById('prevCompanyName').textContent = companyName;
        document.getElementById('prevCIN').textContent = cin;
        document.getElementById('prevOfficeAddress').textContent = officeAddress;
        document.getElementById('prevMeetingDate').textContent = meetingDate ? formatDate(meetingDate) : '__________';
        document.getElementById('prevMeetingTime').textContent = meetingTime;
        
        document.getElementById('prevNumberOfShares').textContent = numberOfShares;
        document.getElementById('prevFaceValue').textContent = faceValue;
        document.getElementById('prevAggregateNumber').textContent = aggregateNumber;
        document.getElementById('prevAggregateWords').textContent = aggregateWords;
        document.getElementById('prevRecordDate').textContent = recordDate ? formatDate(recordDate) : '__________';
        document.getElementById('prevOfferPeriod').textContent = offerPeriod;
        
        document.getElementById('footerCompanyName').textContent = companyName;
        document.getElementById('footerSignatoryName').textContent = signatoryName;
        document.getElementById('footerDesignation').textContent = designation;
        document.getElementById('footerDIN').textContent = signatoryDIN;
        document.getElementById('footerPlace').textContent = place;

        if (meetingDate) {
            document.getElementById('footerDate').textContent = formatDate(meetingDate);
        } else {
            document.getElementById('footerDate').textContent = '________________';
        }

        updateStepIndicator();
    }

    function formatDate(dateString) {
        const date = new Date(dateString);
        return date.toLocaleDateString('en-IN', {
            day: '2-digit',
            month: 'long',
            year: 'numeric'
        });
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
        e.preventDefault();
        
        const submitBtn = document.getElementById('downloadPdfBtn');
        const btnText = submitBtn.querySelector('.btn-text');
        const spinner = submitBtn.querySelector('.spinner');
        
        btnText.textContent = 'Generating Document...';
        spinner.classList.remove('d-none');
        submitBtn.disabled = true;
        
        // Submit the form
        this.submit();
    });
});
</script>
<!--End Js Section -->

@endsection
