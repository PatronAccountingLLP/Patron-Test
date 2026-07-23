@extends('tools.tool-master')
@section('title')
{{_('Board Resolution for Declaration of Dividend')}}
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
            <h1 class="hero-title">Board Resolution for <span> Declaration of Dividend</span></h1>
            <p class="hero-subtitle">
                Generate a certified Board Resolution for Declaration of Dividend in under 60 seconds.
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
            <h2 class="form-title">Enter Company &amp; Dividend Details</h2>
            <p class="form-description">
                Fill in the details below to generate a Board Resolution for Declaration of Dividend.
            </p>
        </div>

        <form id="dividendDeclarationForm" method="POST" action="{{route('br.dividend.declaration') }}">
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

                <!-- Dividend Details -->
                <div class="form-group full-width">
                    <h4 style="margin-bottom: 10px; color: #333; border-bottom: 1px solid #eee; padding-bottom: 8px;">Dividend Details</h4>
                </div>

                <div class="form-group full-width">
                    <label class="form-label">Dividend Type <span class="required">*</span></label>
                    <div class="select-wrapper">
                        <select name="dividend_type" class="form-control form-select" required>
                            <option value="">Select dividend type</option>
                            <option value="Interim">Interim Dividend</option>
                            <option value="Final">Final Dividend</option>
                        </select>
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-group">
                        <label class="form-label">Face Value Per Share (Rs.) <span class="required">*</span></label>
                        <input type="number" name="face_value" class="form-control" placeholder="e.g., 10" min="1" required>
                    </div>

                    <div class="form-group">
                        <label class="form-label">Dividend Rate (%) <span class="required">*</span></label>
                        <input type="number" name="dividend_rate" class="form-control" placeholder="e.g., 100" min="1" required>
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-group">
                        <label class="form-label">Dividend Per Share (Rs.) <span class="required">*</span></label>
                        <input type="number" name="dividend_per_share" class="form-control" placeholder="Enter amount" min="1" step="0.01" required>
                    </div>

                    <div class="form-group">
                        <label class="form-label">Total Dividend Amount (Rs.) <span class="required">*</span></label>
                        <input type="number" name="total_dividend_amount" class="form-control" placeholder="Enter total amount" min="1" required>
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-group">
                        <label class="form-label">Financial Year <span class="required">*</span></label>
                        <input type="text" name="financial_year" class="form-control" placeholder="e.g., 2024-25" required>
                    </div>

                    <div class="form-group">
                        <label class="form-label">Record Date <span class="required">*</span></label>
                        <input type="date" name="record_date" class="form-control" required>
                    </div>
                </div>

                <!-- Bank Account Details -->
                <div class="form-group full-width">
                    <h4 style="margin-bottom: 10px; color: #333; border-bottom: 1px solid #eee; padding-bottom: 8px;">Dividend Bank Account Details</h4>
                </div>

                <div class="form-group full-width">
                    <label class="form-label">Bank Account Number <span class="required">*</span></label>
                    <input type="text" name="bank_account_number" class="form-control" placeholder="Enter dividend account number" required>
                </div>

                <div class="form-row">
                    <div class="form-group">
                        <label class="form-label">Bank Name <span class="required">*</span></label>
                        <input type="text" name="bank_name" class="form-control" placeholder="Enter bank name" required>
                    </div>

                    <div class="form-group">
                        <label class="form-label">Bank Branch <span class="required">*</span></label>
                        <input type="text" name="bank_branch" class="form-control" placeholder="Enter branch name" required>
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
                        <p class="preview-subtitle">Board Resolution for Declaration of Dividend</p>
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
                        <strong>SUBJECT: DECLARATION OF <span id="prevDividendType">INTERIM</span> DIVIDEND</strong>
                    </p>

                    <p class="certificate-paragraph">
                        <strong>RESOLVED THAT</strong> an <span id="prevDividendTypeLower">interim</span> dividend of 
                        Rs. <span id="prevDividendPerShare">____</span>/- per equity share at the rate of 
                        <span id="prevDividendRate">____</span>% on face value of Rs. <span id="prevFaceValue">____</span>/- 
                        be declared for FY <span id="prevFinancialYear">________</span>.
                    </p>

                    <p class="certificate-paragraph">
                        <strong>Record Date:</strong> <span id="prevRecordDate">__________</span>
                    </p>

                    <p class="certificate-paragraph">
                        <strong>Total Dividend:</strong> Rs. <span id="prevTotalDividend">________________</span>/-
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
            <h2 class="info-title">Board Resolution for Declaration of Dividend</h2>
            <p class="info-subtitle">
                Professional Format Guide for Indian Companies
            </p>
        </div>

        <!-- Introduction -->
        <div class="info-content">
            <h3 class="info-subheading">Introduction</h3>

            <p class="info-text">
                A Board Resolution for Declaration of Dividend is a formal corporate document that 
                records the Board of Directors' decision to distribute a portion of the company's 
                profits to its shareholders. Under the Companies Act, 2013, dividends may be declared 
                out of the profits of the company for the current financial year or any previous 
                financial year(s) after providing for depreciation. The Board may declare an interim 
                dividend at any time during the financial year, while the final dividend is recommended 
                by the Board and approved by shareholders at the Annual General Meeting.
            </p>

            <p class="info-text">
                This resolution specifies the dividend amount per share, the dividend rate, the 
                record date for determining eligible shareholders, the financial year to which the 
                dividend relates, and the designated bank account for disbursement. The dividend 
                must be deposited in a separate bank account within five days of declaration and 
                paid to shareholders within thirty days. It is essential documentation for maintaining 
                corporate records and ensuring compliance with statutory provisions regarding 
                distribution of profits.
            </p>

            <!-- Benefits -->
            <h3 class="info-subheading">Benefits of Using a Standard Format</h3>

            <p class="info-text">
                Utilising a professionally drafted board resolution format ensures that all statutory 
                requirements under the Companies Act, 2013 are properly addressed. A ready-to-use 
                template saves valuable time during board meetings, reduces the risk of procedural 
                errors, and provides a consistent framework that captures essential details including 
                dividend rate, record date, bank account for disbursement, and proper authorisation. 
                Standardised formats ensure compliance with dividend payment timelines.
            </p>

            <!-- Relevance -->
            <h3 class="info-subheading">Relevance to Corporate Compliance</h3>

            <p class="info-text">
                Dividend declaration is an important aspect of corporate governance and shareholder 
                relations. Following Company Registration, businesses that generate profits may choose 
                to distribute them to shareholders as dividends. The board resolution forms the basis 
                for dividend payment and must be properly documented. Companies must comply with 
                provisions relating to transfer of unpaid dividends to the Investor Education and 
                Protection Fund (IEPF) if dividends remain unclaimed for the prescribed period.
            </p>
        </div>

        <!-- Sample Format -->
        <div class="format-section">
            <h3 class="format-title">
                Board Resolution for Declaration of Dividend – Sample Format
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
                <strong>SUBJECT: DECLARATION OF INTERIM DIVIDEND</strong>
            </p>

            <p class="format-text">
                The Chairman apprised the Board about the management's recommendation to declare 
                dividend to the members of the Company. After deliberating over the matter, the 
                Board resolved as follows:
            </p>

            <p class="format-text">
                "RESOLVED THAT pursuant to the applicable provisions of the Companies Act, 2013 
                read with the relevant rules made thereunder, an interim dividend of Rs. ____________/- 
                (Rupees ____________ Only) per equity share, at the rate of ______% on each fully 
                paid-up equity share of Rs. ____________/- (Rupees ____________ Only) be and is 
                hereby declared out of the profits of the Company for the Financial Year ____________, 
                payable to those Members whose names appear in the Register of Members as on 
                ____________ (Record Date).
            </p>

            <p class="format-text">
                RESOLVED FURTHER THAT the Dividend Account bearing Account Number __________________________ 
                maintained with __________________________ (Name of the Bank), __________________________ 
                (Bank Branch), be used for the purpose of disbursement of the interim dividend..."
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
                    1. What is the board resolution format for the Declaration of Interim Dividend?
                </h4>
                <p class="faq-answer">
                    The board resolution format for declaring interim dividend should include: reference 
                    to applicable provisions of the Companies Act, 2013; the dividend amount per share; 
                    dividend rate as percentage of face value; the financial year for which dividend is 
                    declared; the record date for determining eligible shareholders; details of the 
                    designated dividend bank account; and authorisation for compliance-related actions 
                    including TDS deduction.
                </p>
            </div>

            <div class="faq-item">
                <h4 class="faq-question">
                    2. How to write a board resolution for the Declaration of Dividend?
                </h4>
                <p class="faq-answer">
                    Begin with company details and meeting particulars. State that pursuant to the 
                    Companies Act, 2013, the Board declares interim dividend of a specified amount per 
                    share at a specified rate on fully paid-up equity shares. Include the record date, 
                    financial year, dividend bank account details, total dividend amount. Authorise 
                    directors to deposit dividend within 5 days, disburse to shareholders within 30 
                    days, deduct TDS, and file necessary intimations.
                </p>
            </div>

            <div class="faq-item">
                <h4 class="faq-question">
                    3. Is the signature of all directors mandatory in the Board resolution format for Declaration of Interim Dividend?
                </h4>
                <p class="faq-answer">
                    No, signatures of all directors are not mandatory. The resolution is passed by a 
                    majority of directors present and voting at a duly convened board meeting where 
                    quorum is present. The certified true copy may be signed by a single authorised 
                    director or the company secretary. The minutes should record the names of directors 
                    present, voting details, and any directors who abstained.
                </p>
            </div>

            <div class="faq-item">
                <h4 class="faq-question">
                    4. Does the Board Resolution for Declaration of Interim Dividend need to be certified by a professional?
                </h4>
                <p class="faq-answer">
                    There is no statutory requirement for the board resolution to be certified by an 
                    external professional. The certified true copy may be signed by any director or 
                    the company secretary of the company. However, listed companies must comply with 
                    SEBI regulations regarding intimation to stock exchanges. The resolution forms 
                    part of the company's statutory records and supports dividend payment documentation.
                </p>
            </div>

            <div class="faq-item">
                <h4 class="faq-question">
                    5. How do you write a Board Resolution for the Declaration of Dividend?
                </h4>
                <p class="faq-answer">
                    The resolution should state the Board's decision to declare dividend, specifying: 
                    dividend amount per share, dividend rate percentage, face value of shares, financial 
                    year, record date for eligibility, designated dividend bank account, total dividend 
                    payout. Include clauses for depositing dividend amount within 5 days, TDS compliance, 
                    authorisation for directors to execute necessary formalities, and providing certified 
                    copies to concerned parties.
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

    const form = document.getElementById('dividendDeclarationForm');
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
        const dividendType = form.querySelector('[name="dividend_type"]').value || 'Interim';
        const faceValue = form.querySelector('[name="face_value"]').value || '____';
        const dividendRate = form.querySelector('[name="dividend_rate"]').value || '____';
        const dividendPerShare = form.querySelector('[name="dividend_per_share"]').value || '____';
        const totalDividendAmount = form.querySelector('[name="total_dividend_amount"]').value || '________________';
        const financialYear = form.querySelector('[name="financial_year"]').value || '________';
        const recordDate = form.querySelector('[name="record_date"]').value;
        const place = form.querySelector('[name="place"]').value || '________________';
        const resolutionDate = form.querySelector('[name="resolution_date"]').value;

        // Update preview text
        const elCompanyName = document.getElementById('prevCompanyName');
        const elCIN = document.getElementById('prevCIN');
        const elMeetingDate = document.getElementById('prevMeetingDate');
        const elMeetingTime = document.getElementById('prevMeetingTime');
        const elDividendType = document.getElementById('prevDividendType');
        const elDividendTypeLower = document.getElementById('prevDividendTypeLower');
        const elFaceValue = document.getElementById('prevFaceValue');
        const elDividendRate = document.getElementById('prevDividendRate');
        const elDividendPerShare = document.getElementById('prevDividendPerShare');
        const elTotalDividend = document.getElementById('prevTotalDividend');
        const elFinancialYear = document.getElementById('prevFinancialYear');
        const elRecordDate = document.getElementById('prevRecordDate');
        const elFooterCompanyName = document.getElementById('footerCompanyName');
        const elFooterPlace = document.getElementById('footerPlace');
        const elFooterDate = document.getElementById('footerDate');

        if (elCompanyName) elCompanyName.textContent = companyName;
        if (elCIN) elCIN.textContent = cin;
        if (elDividendType) elDividendType.textContent = dividendType.toUpperCase();
        if (elDividendTypeLower) elDividendTypeLower.textContent = dividendType.toLowerCase();
        if (elFaceValue) elFaceValue.textContent = faceValue;
        if (elDividendRate) elDividendRate.textContent = dividendRate;
        if (elDividendPerShare) elDividendPerShare.textContent = dividendPerShare;
        if (elTotalDividend) elTotalDividend.textContent = totalDividendAmount ? parseInt(totalDividendAmount).toLocaleString('en-IN') : '________________';
        if (elFinancialYear) elFinancialYear.textContent = financialYear;
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

        if (recordDate && elRecordDate) {
            const formattedRecordDate = new Date(recordDate).toLocaleDateString('en-IN', {
                day: '2-digit',
                month: 'long',
                year: 'numeric'
            });
            elRecordDate.textContent = formattedRecordDate;
        } else if (elRecordDate) {
            elRecordDate.textContent = '__________';
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
