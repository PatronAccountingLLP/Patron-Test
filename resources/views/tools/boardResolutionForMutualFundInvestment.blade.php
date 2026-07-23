@extends('tools.tool-master')
@section('title')
{{_('Board Resolution for Mutual Fund Investment')}}
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
            <h1 class="hero-title">Board Resolution for <span> Mutual Fund Investment</span></h1>
            <p class="hero-subtitle">
                Generate a certified Board Resolution for Mutual Fund Investment in under 60 seconds.
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
            <h2 class="form-title">Enter Company &amp; Investment Details</h2>
            <p class="form-description">
                Fill in the details below to generate a Board Resolution for Mutual Fund Investment.
            </p>
        </div>

        <form id="mutualFundInvestmentForm" method="POST" action="{{route('br.mutual.fund.investment') }}">
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

                <!-- RTA Details -->
                <div class="form-group full-width">
                    <h4 style="margin-bottom: 10px; color: #333; border-bottom: 1px solid #eee; padding-bottom: 8px;">Registrar and Transfer Agent (RTA)</h4>
                </div>

                <div class="form-group full-width">
                    <label class="form-label">Name of RTA <span class="required">*</span></label>
                    <input type="text" name="rta_name" class="form-control" placeholder="e.g., CAMS, KFin Technologies, etc." required>
                </div>

                <!-- Authorised Signatories -->
                <div class="form-group full-width">
                    <h4 style="margin-bottom: 10px; color: #333; border-bottom: 1px solid #eee; padding-bottom: 8px;">Authorised Signatories for Investment Account</h4>
                </div>

                <!-- Signatory 1 -->
                <div class="form-group full-width">
                    <label class="form-label">Signatory 1 - Name <span class="required">*</span></label>
                    <input type="text" name="signatory1_name" class="form-control" placeholder="Enter name" required>
                </div>

                <div class="form-group full-width">
                    <label class="form-label">Signatory 1 - Designation <span class="required">*</span></label>
                    <div class="select-wrapper">
                        <select name="signatory1_designation" class="form-control form-select" required>
                            <option value="">Select designation</option>
                            <option value="Director">Director</option>
                            <option value="Managing Director">Managing Director</option>
                            <option value="Whole-Time Director">Whole-Time Director</option>
                            <option value="Chief Financial Officer">Chief Financial Officer</option>
                            <option value="Company Secretary">Company Secretary</option>
                            <option value="Authorised Signatory">Authorised Signatory</option>
                        </select>
                    </div>
                </div>

                <!-- Signatory 2 -->
                <div class="form-group full-width">
                    <label class="form-label">Signatory 2 - Name</label>
                    <input type="text" name="signatory2_name" class="form-control" placeholder="Enter name (optional)">
                </div>

                <div class="form-group full-width">
                    <label class="form-label">Signatory 2 - Designation</label>
                    <div class="select-wrapper">
                        <select name="signatory2_designation" class="form-control form-select">
                            <option value="">Select designation</option>
                            <option value="Director">Director</option>
                            <option value="Managing Director">Managing Director</option>
                            <option value="Whole-Time Director">Whole-Time Director</option>
                            <option value="Chief Financial Officer">Chief Financial Officer</option>
                            <option value="Company Secretary">Company Secretary</option>
                            <option value="Authorised Signatory">Authorised Signatory</option>
                        </select>
                    </div>
                </div>

                <!-- Signatory 3 -->
                <div class="form-group full-width">
                    <label class="form-label">Signatory 3 - Name</label>
                    <input type="text" name="signatory3_name" class="form-control" placeholder="Enter name (optional)">
                </div>

                <div class="form-group full-width">
                    <label class="form-label">Signatory 3 - Designation</label>
                    <div class="select-wrapper">
                        <select name="signatory3_designation" class="form-control form-select">
                            <option value="">Select designation</option>
                            <option value="Director">Director</option>
                            <option value="Managing Director">Managing Director</option>
                            <option value="Whole-Time Director">Whole-Time Director</option>
                            <option value="Chief Financial Officer">Chief Financial Officer</option>
                            <option value="Company Secretary">Company Secretary</option>
                            <option value="Authorised Signatory">Authorised Signatory</option>
                        </select>
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
                            <select name="director_designation" class="form-control form-select" required>
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
                        <p class="preview-subtitle">Board Resolution for Mutual Fund Investment</p>
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
                        <strong>SUBJECT: INVESTMENT IN MUTUAL FUND SCHEMES</strong>
                    </p>

                    <p class="certificate-paragraph">
                        <strong>RESOLVED THAT</strong> consent be accorded to invest surplus funds 
                        in Mutual Fund Schemes managed by various AMCs.
                    </p>

                    <p class="certificate-paragraph">
                        <strong>RTA Appointed:</strong> <span id="prevRTAName">________________</span>
                    </p>

                    <p class="certificate-paragraph">
                        <strong>Authorised Signatories:</strong>
                    </p>
                    
                    <p class="certificate-paragraph">
                        1. <span id="prevSignatory1">________________</span>
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
            <h2 class="info-title">Board Resolution for Mutual Fund Investment</h2>
            <p class="info-subtitle">
                Professional Format Guide for Indian Companies
            </p>
        </div>

        <!-- Introduction -->
        <div class="info-content">
            <h3 class="info-subheading">Introduction</h3>

            <p class="info-text">
                A Board Resolution for Mutual Fund Investment is a formal corporate document that 
                records the Board of Directors' consent to invest the company's surplus funds in 
                mutual fund schemes. Under the Companies Act, 2013, companies proposing to make 
                investments must obtain prior board approval. This resolution authorises the company 
                to invest in various mutual fund schemes, whether open-ended or close-ended, and to 
                hold units in dematerialised form through depositories.
            </p>

            <p class="info-text">
                This resolution specifies the appointment of Registrar and Transfer Agent (RTA), 
                authorises designated persons to operate the investment account, and records their 
                specimen signatures. The document is essential for opening folios with Asset 
                Management Companies (AMCs), enabling demat holdings through CDSL or NSDL, and 
                executing investment transactions. It is commonly required by mutual fund 
                distributors, AMCs, and depositories as proof of corporate authorisation for investments.
            </p>

            <!-- Benefits -->
            <h3 class="info-subheading">Benefits of Using a Standard Format</h3>

            <p class="info-text">
                Utilising a professionally drafted board resolution format ensures that all 
                authorisation requirements for mutual fund investments are properly documented. A 
                ready-to-use template saves valuable time during board meetings, reduces the risk 
                of procedural errors, and provides a consistent framework that captures essential 
                details including RTA appointment, authorised signatories, and specimen signatures. 
                Standardised formats are readily accepted by AMCs and depositories.
            </p>

            <!-- Relevance -->
            <h3 class="info-subheading">Relevance to Corporate Treasury Management</h3>

            <p class="info-text">
                Investment of surplus funds is a treasury function that requires proper corporate 
                authorisation. Following Company Registration, businesses often accumulate surplus 
                funds that can be deployed in mutual fund schemes for better returns. The board 
                resolution serves as proof of authority when opening investment accounts with AMCs, 
                registering with depositories for demat holdings, and appointing RTAs to manage 
                unit holder records. Proper documentation ensures compliance with corporate 
                governance norms.
            </p>
        </div>

        <!-- Sample Format -->
        <div class="format-section">
            <h3 class="format-title">
                Board Resolution for Mutual Fund Investment – Sample Format
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
                <strong>SUBJECT: INVESTMENT IN MUTUAL FUND SCHEMES</strong>
            </p>

            <p class="format-text">
                "RESOLVED THAT pursuant to the provisions of the Companies Act, 2013 and other 
                applicable laws and regulations, the consent of the Board of Directors be and is 
                hereby accorded to invest the surplus funds of the Company in units of Mutual Fund 
                Schemes managed by various Asset Management Companies (AMCs), including both 
                open-ended and close-ended schemes, and to hold such units in dematerialised form 
                through Central Depository Services (India) Limited (CDSL) and/or National 
                Securities Depository Limited (NSDL).
            </p>

            <p class="format-text">
                RESOLVED FURTHER THAT the Company hereby appoints __________________________________________ 
                (Name of RTA) as the Registrar and Transfer Agent (RTA) for the purpose of maintaining 
                unit holder records, processing transactions, and providing related services...
            </p>

            <p class="format-text">
                <strong>Specimen Signatures of Authorised Signatories:</strong>
            </p>

            <table style="width:100%;border-collapse:collapse;margin:20px 0;font-size:14px;">
                <tr style="background-color:#f5f5f5;">
                    <th style="border:1px solid #ddd;padding:8px;">Sr. No.</th>
                    <th style="border:1px solid #ddd;padding:8px;">Name of Authorised Signatory</th>
                    <th style="border:1px solid #ddd;padding:8px;">Designation</th>
                    <th style="border:1px solid #ddd;padding:8px;">Specimen Signature</th>
                </tr>
                <tr>
                    <td style="border:1px solid #ddd;padding:8px;text-align:center;">1.</td>
                    <td style="border:1px solid #ddd;padding:8px;"></td>
                    <td style="border:1px solid #ddd;padding:8px;"></td>
                    <td style="border:1px solid #ddd;padding:8px;"></td>
                </tr>
                <tr>
                    <td style="border:1px solid #ddd;padding:8px;text-align:center;">2.</td>
                    <td style="border:1px solid #ddd;padding:8px;"></td>
                    <td style="border:1px solid #ddd;padding:8px;"></td>
                    <td style="border:1px solid #ddd;padding:8px;"></td>
                </tr>
                <tr>
                    <td style="border:1px solid #ddd;padding:8px;text-align:center;">3.</td>
                    <td style="border:1px solid #ddd;padding:8px;"></td>
                    <td style="border:1px solid #ddd;padding:8px;"></td>
                    <td style="border:1px solid #ddd;padding:8px;"></td>
                </tr>
            </table>

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
                    1. Can a board resolution for mutual fund investment be passed without convening a board meeting?
                </h4>
                <p class="faq-answer">
                    While the Companies Act permits certain resolutions to be passed by circulation, 
                    investment decisions are typically made at duly convened board meetings to ensure 
                    proper deliberation and consideration of investment options. A resolution passed 
                    by circulation is considered valid as if passed at a board meeting, provided it 
                    is approved by a majority of directors entitled to vote and the process complies 
                    with company's Articles of Association.
                </p>
            </div>

            <div class="faq-item">
                <h4 class="faq-question">
                    2. How to write a board resolution for mutual fund investment?
                </h4>
                <p class="faq-answer">
                    Begin with company details and meeting particulars. State that the Board authorises 
                    investment of surplus funds in mutual fund schemes (open-ended and close-ended) 
                    with holdings in demat form. Include appointment of RTA for maintaining records. 
                    List authorised signatories with their names, designations, and specimen signatures 
                    in a table format. Conclude with signature block of certifying director with DIN.
                </p>
            </div>

            <div class="faq-item">
                <h4 class="faq-question">
                    3. Is the signature of all directors mandatory on the board resolution for mutual fund investment?
                </h4>
                <p class="faq-answer">
                    No, signatures of all directors are not mandatory. The resolution is passed by a 
                    majority of directors present and voting at a duly convened board meeting where 
                    quorum is present. The certified true copy may be signed by a single authorised 
                    director or the company secretary. However, the specimen signatures of all designated 
                    authorised signatories for operating the investment account must be included in 
                    the resolution.
                </p>
            </div>

            <div class="faq-item">
                <h4 class="faq-question">
                    4. Does the Board Resolution for mutual fund investment need to be certified by a professional?
                </h4>
                <p class="faq-answer">
                    There is no statutory requirement for the board resolution to be certified by an 
                    external professional. The certified true copy may be signed by any director or 
                    the company secretary of the company. However, some AMCs or depositories may have 
                    their own documentation requirements and may request additional attestation. It 
                    is advisable to check specific requirements with the concerned AMC or depository.
                </p>
            </div>

            <div class="faq-item">
                <h4 class="faq-question">
                    5. Is the Board resolution for mutual fund investment to be on company letterhead?
                </h4>
                <p class="faq-answer">
                    While there is no strict legal requirement mandating the use of company letterhead, 
                    it is considered standard corporate practice and adds authenticity to the document. 
                    Using official letterhead facilitates easy identification and verification by AMCs, 
                    RTAs, and depositories. Most financial institutions prefer board resolutions on 
                    official company letterhead as part of their KYC and documentation requirements.
                </p>
            </div>

            <div class="faq-item">
                <h4 class="faq-question">
                    6. Which resolution is required for mutual fund investment?
                </h4>
                <p class="faq-answer">
                    A board resolution is required for authorising mutual fund investments by a company. 
                    This resolution should cover approval to invest in mutual fund schemes, appointment 
                    of RTA, designation of authorised signatories to operate the investment account, 
                    and authorisation for demat holdings through CDSL/NSDL. Some companies may also 
                    include investment limits or guidelines in the resolution as per their internal 
                    investment policy.
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

    const form = document.getElementById('mutualFundInvestmentForm');
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
        const rtaName = form.querySelector('[name="rta_name"]').value || '________________';
        const signatory1Name = form.querySelector('[name="signatory1_name"]').value || '________________';
        const signatory1Designation = form.querySelector('[name="signatory1_designation"]').value || '';
        const place = form.querySelector('[name="place"]').value || '________________';
        const resolutionDate = form.querySelector('[name="resolution_date"]').value;

        // Update preview text
        const elCompanyName = document.getElementById('prevCompanyName');
        const elCIN = document.getElementById('prevCIN');
        const elMeetingDate = document.getElementById('prevMeetingDate');
        const elMeetingTime = document.getElementById('prevMeetingTime');
        const elRTAName = document.getElementById('prevRTAName');
        const elSignatory1 = document.getElementById('prevSignatory1');
        const elFooterCompanyName = document.getElementById('footerCompanyName');
        const elFooterPlace = document.getElementById('footerPlace');
        const elFooterDate = document.getElementById('footerDate');

        if (elCompanyName) elCompanyName.textContent = companyName;
        if (elCIN) elCIN.textContent = cin;
        if (elRTAName) elRTAName.textContent = rtaName;
        
        // Format signatory with designation
        if (elSignatory1) {
            let signatoryText = signatory1Name;
            if (signatory1Designation) {
                signatoryText += ' (' + signatory1Designation + ')';
            }
            elSignatory1.textContent = signatoryText;
        }
        
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
