@extends('tools.tool-master')
@section('title')
{{_('Special Resolution for Strike Off of Company')}}
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
            <h1 class="hero-title">Special Resolution <span>Strike Off of Company</span></h1>
            <p class="hero-subtitle">
                Generate a certified Special Resolution for Strike Off of Company in under 60 seconds.
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
            <h2 class="form-title">Enter Company & Strike Off Details</h2>
            <p class="form-description">
                Fill in the details below to generate a Special Resolution for Strike Off of Company.
            </p>
        </div>

        <form id="strikeOffForm" method="POST" action="{{ route('special.strike.off') }}">
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
                
                <!-- Meeting Details Section -->
                <div class="section-header">
                    <h3>EGM Meeting Details</h3>
                </div>
                
                <div class="form-row">
                    <div class="form-group">
                        <label class="form-label">EGM Date <span class="required">*</span></label>
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
                
                <!-- Strike Off Reason Section -->
                <div class="section-header">
                    <h3>Strike Off Reason</h3>
                </div>
                
                <div class="form-group full-width">
                    <label class="form-label">Reason for Strike Off <span class="required">*</span></label>
                    <div class="radio-group vertical">
                        <label class="radio-label">
                            <input type="radio" name="strike_off_reason" value="not_carried_business" checked>
                            <span class="radio-text">
                                <strong>Not Carried Business</strong><br>
                                <small>Company has not carried on any business or operations for more than two immediately preceding financial years</small>
                            </span>
                        </label>
                        <label class="radio-label">
                            <input type="radio" name="strike_off_reason" value="not_commenced_business">
                            <span class="radio-text">
                                <strong>Not Commenced Business</strong><br>
                                <small>Company has not commenced business within one year of incorporation</small>
                            </span>
                        </label>
                        <label class="radio-label">
                            <input type="radio" name="strike_off_reason" value="defunct_inoperative">
                            <span class="radio-text">
                                <strong>Defunct/Inoperative</strong><br>
                                <small>Company has become defunct or inoperative for other valid reasons</small>
                            </span>
                        </label>
                    </div>
                </div>
                
                <div class="form-group full-width">
                    <label class="form-label">Last Financial Year of Business Operations (if applicable)</label>
                    <input type="text" name="last_financial_year" class="form-control" placeholder="e.g., FY 2021-2022">
                </div>
                
                <!-- Authorized Director Section -->
                <div class="section-header">
                    <h3>Authorized Director Details</h3>
                </div>
                
                <div class="form-row">
                    <div class="form-group">
                        <label class="form-label">Director Name <span class="required">*</span></label>
                        <div class="name-title-group">
                            <div class="select-wrapper" style="flex: 0 0 80px; margin-right: 10px;">
                                <select name="director_title" class="form-control form-select">
                                    <option value="Mr.">Mr.</option>
                                    <option value="Ms.">Ms.</option>
                                    <option value="Mrs.">Mrs.</option>
                                    <option value="Dr.">Dr.</option>
                                </select>
                            </div>
                            <input type="text" name="authorized_director" class="form-control" placeholder="Enter director name" required style="flex: 1;">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="form-label">Designation <span class="required">*</span></label>
                        <div class="select-wrapper">
                            <select name="designation" class="form-control form-select" required>
                                <option value="">Select designation</option>
                                <option value="Director">Director</option>
                                <option value="Managing Director">Managing Director</option>
                                <option value="Whole-Time Director">Whole-Time Director</option>
                            </select>
                        </div>
                    </div>
                </div>
                
                <div class="form-group full-width">
                    <label class="form-label">DIN (Director Identification Number) <span class="required">*</span></label>
                    <input type="text" name="din" class="form-control" placeholder="Enter DIN" required>
                </div>
                
                <!-- Additional Information -->
                <div class="section-header">
                    <h3>Additional Information</h3>
                </div>
                
                <div class="form-group full-width">
                    <label class="form-label">Place <span class="required">*</span></label>
                    <input type="text" name="place" class="form-control" placeholder="City / Place" required>
                </div>
                
                <div class="form-group full-width">
                    <label class="form-label">Date of Resolution <span class="required">*</span></label>
                    <input type="date" name="resolution_date" class="form-control" required>
                </div>
                
                <!-- Compliance Checklist -->
                <div class="form-group full-width">
                    <div class="compliance-checklist">
                        <p><strong>Pre-conditions for Strike Off (Section 248):</strong></p>
                        <div class="checklist-item">
                            <input type="checkbox" name="compliance_1" id="compliance_1">
                            <label for="compliance_1">All pending returns filed with ROC</label>
                        </div>
                        <div class="checklist-item">
                            <input type="checkbox" name="compliance_2" id="compliance_2">
                            <label for="compliance_2">GST Registration cancelled (if registered)</label>
                        </div>
                        <div class="checklist-item">
                            <input type="checkbox" name="compliance_3" id="compliance_3">
                            <label for="compliance_3">Income tax returns filed and assessments completed</label>
                        </div>
                        <div class="checklist-item">
                            <input type="checkbox" name="compliance_4" id="compliance_4">
                            <label for="compliance_4">Bank accounts closed</label>
                        </div>
                        <div class="checklist-item">
                            <input type="checkbox" name="compliance_5" id="compliance_5">
                            <label for="compliance_5">No assets or liabilities (or settled)</label>
                        </div>
                        <small class="form-help-text">These are essential requirements for filing Form STK-2 with ROC</small>
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
                        <p class="preview-subtitle">Special Resolution for Strike Off of Company</p>
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
                    <h2 class="certificate-doc-title">CERTIFIED TRUE COPY OF THE SPECIAL RESOLUTION</h2>
                    <p class="certificate-doc-subtitle">
                        Passed at the Extraordinary General Meeting (EGM) of the Members of the Company
                    </p>
                </div>

                <div class="certificate-body">
                    <div class="company-details">
                        <p><strong id="prevCompanyName">________________</strong></p>
                        <p><strong>CIN: </strong><span id="prevCin">________________</span></p>
                        <p><strong>Registered Office: </strong><span id="prevRegisteredOffice">________________</span></p>
                    </div>
                    
                    <p class="certificate-paragraph">
                        <strong>CERTIFIED TRUE COPY OF THE SPECIAL RESOLUTION</strong>
                    </p>
                    
                    <p class="certificate-paragraph">
                        Passed at the Extraordinary General Meeting (EGM) of the Members of the Company<br>
                        <strong>Date of Meeting: </strong><span id="prevMeetingDate">__.__.______</span><br>
                        <strong>Time: </strong><span id="prevMeetingTime">______</span> (Hours)<br>
                        <strong>Venue: </strong><span id="prevMeetingVenue">Registered Office of the Company at ________________</span>
                    </p>
                    
                    <p class="certificate-paragraph">
                        <strong>SUBJECT: APPLICATION FOR STRIKE OFF THE NAME OF THE COMPANY UNDER SECTION 248 OF THE COMPANIES ACT, 2013</strong>
                    </p>
                    
                    <p class="certificate-paragraph">
                        <strong>"RESOLVED THAT</strong> pursuant to the provisions of Section 248(2) of the Companies Act, 2013 read with the Companies (Removal of Names of Companies from the Register of Companies) Rules, 2016 (including any statutory modification or amendment thereto or re-enactment thereof for the time being in force), <span id="prevStrikeOffReason">and considering that the Company has not been carrying on any business or operations for a period of more than two immediately preceding financial years</span>, the consent of the Members of the Company be and is hereby accorded to the Board of Directors to make an application in Form STK-2 to the Registrar of Companies for striking off the name of the Company:
                    </p>
                    
                    <div class="strike-off-details">
                        <p><strong>Company Name: </strong><span id="prevStrikeCompanyName">________________________</span></p>
                        <p><strong>CIN: </strong><span id="prevStrikeCin">________________________</span></p>
                        <p>from the Register of Companies maintained by the Registrar of Companies.</p>
                    </div>
                    
                    <p class="certificate-paragraph">
                        <strong>RESOLVED FURTHER THAT</strong> the Board of Directors of the Company be and are hereby authorised to:
                    </p>
                    
                    <ul class="resolution-list">
                        <li>Execute indemnity bonds, affidavits, and declarations as required for the strike-off application;</li>
                        <li>File Form STK-2 and other requisite forms with the Registrar of Companies;</li>
                        <li>Provide any information, clarifications, or explanations as may be required by the Registrar of Companies;</li>
                        <li>Settle all liabilities and distribute any remaining assets in accordance with applicable laws;</li>
                        <li>Do all such acts, deeds, matters, and things as may be necessary, proper, or expedient under the provisions of the Companies Act, 2013 and the rules made thereunder to give effect to this resolution.</li>
                    </ul>
                    
                    <p class="certificate-paragraph">
                        <strong>RESOLVED FURTHER THAT</strong> <span id="prevDirectorTitle">Mr.</span> <strong id="prevDirectorName">________________________</strong> (Name), holding DIN: <strong id="prevDirectorDin">________________________</strong>, Director of the Company, be and is hereby specifically authorised to make the application for strike-off, sign and execute all necessary documents, provide any information or clarifications, and to do all such acts and deeds as may be required under the Companies Act, 2013 and the rules made thereunder to implement the above resolutions.
                    </p>
                    
                    <p class="certificate-paragraph">
                        <strong>RESOLVED FURTHER THAT</strong> a certified copy of this resolution be filed with the Registrar of Companies along with Form STK-2 and other requisite documents."
                    </p>
                    
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
            <h2 class="info-title">Special Resolution for Strike Off of Company</h2>
            <p class="info-subtitle">
                Professional Format Guide under Companies Act, 2013
            </p>
        </div>

        <!-- Introduction -->
        <div class="info-content">
            <h3 class="info-subheading">Introduction</h3>

            <p class="info-text">
                A Special Resolution for Strike Off of Company is a formal corporate document that
                records the shareholders' approval for voluntary removal of the company's name from
                the Register of Companies maintained by the Registrar of Companies. Under Section
                248 of the Companies Act, 2013 and the Companies (Removal of Names of Companies from
                the Register of Companies) Rules, 2016, a company that has not carried on any business
                or operations for two or more immediately preceding financial years, or has not
                commenced business within one year of incorporation, may apply for voluntary
                strike-off.
            </p>

            <p class="info-text">
                The special resolution is passed by shareholders at an Extraordinary General
                Meeting (EGM) or through postal ballot, authorising the Board of Directors to file
                Form STK-2 with the Registrar of Companies. This resolution grants consent for the
                company's closure and empowers directors to execute indemnity bonds, affidavits,
                declarations, and other documents required for the strike-off process. The
                resolution must be passed with a majority of not less than three-fourths of the
                members entitled to vote.
            </p>

            <!-- Benefits -->
            <h3 class="info-subheading">Benefits of Using a Standard Format</h3>

            <p class="info-text">
                Utilising a professionally drafted special resolution format ensures that all
                statutory requirements under the Companies Act, 2013 and the Companies (Removal of
                Names of Companies from the Register of Companies) Rules, 2016 are duly complied
                with. A standard template saves time, reduces procedural errors, and provides a
                consistent structure for documenting shareholder approval.
            </p>

            <p class="info-text">
                Standardised formats also facilitate smoother filings with the Registrar of
                Companies and help ensure regulatory compliance during the company closure
                process.
            </p>

            <!-- Relevance -->
            <h3 class="info-subheading">Relevance to Company Closure</h3>

            <p class="info-text">
                The special resolution is a critical component of the voluntary strike-off
                procedure. After Company Registration, if a company becomes defunct, has not
                commenced business, or remains inoperative for more than two financial years, the
                directors may initiate closure proceedings subject to shareholder approval.
            </p>

            <p class="info-text">
                Before filing Form STK-2, companies must ensure all statutory compliances are
                completed, including filing pending ROC returns, cancellation of GST Registration
                (if applicable), completion of income tax filings, and closure of bank accounts.
                The special resolution provides the formal shareholder mandate for dissolution.
            </p>
        </div>

        <!-- Sample Format -->
        <div class="format-section">
            <h3 class="format-title">
                Special Resolution for Strike Off of Company – Sample Format
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
                <strong>CERTIFIED TRUE COPY OF THE SPECIAL RESOLUTION</strong>
            </p>

            <p class="format-text">
                Passed at the Extraordinary General Meeting (EGM) of the Members of the Company
            </p>

            <p class="format-text">
                <strong>Date of Meeting:</strong> __.__.______ &nbsp;&nbsp;
                <strong>Time:</strong> ______ (Hours)
            </p>

            <p class="format-text">
                <strong>Venue:</strong> Registered Office of the Company at ________________________
            </p>

            <p class="format-text">
                <strong>Subject:</strong> Application for Strike Off the Name of the Company under
                Section 248 of the Companies Act, 2013
            </p>

            <p class="format-text">
                <strong>RESOLVED THAT</strong> pursuant to the provisions of Section 248(2) of the
                Companies Act, 2013 read with the Companies (Removal of Names of Companies from the
                Register of Companies) Rules, 2016, and considering that the Company has not been
                carrying on any business or operations for more than two immediately preceding
                financial years, the consent of the Members be and is hereby accorded to the Board
                of Directors to make an application in Form STK-2 to the Registrar of Companies for
                striking off the name of the Company from the Register of Companies.
            </p>

            <p class="format-text">
                <strong>RESOLVED FURTHER THAT</strong> the Board of Directors be and are hereby
                authorised to execute indemnity bonds, affidavits, declarations, file Form STK-2,
                submit information or clarifications as required, settle liabilities, distribute
                remaining assets, and do all such acts, deeds, and things as may be necessary to
                give effect to this resolution.
            </p>

            <p class="format-text">
                <strong>RESOLVED FURTHER THAT</strong> Mr./Ms. ________________________ (Name),
                holding DIN: ________________________, Director of the Company, be and is hereby
                authorised to sign, execute, and submit all documents and applications necessary
                for implementing the above resolutions.
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
                    1. Are details mentioned in the special resolution format for striking off the
                    company the same as the board resolution format?
                </h4>
                <p class="faq-answer">
                    Yes, the core details remain similar in both resolutions. Both reference Section
                    248 of the Companies Act, 2013 and authorise directors to file Form STK-2. The
                    difference lies in approval authority—board resolution reflects director
                    approval, while special resolution reflects shareholder approval.
                </p>
            </div>

            <div class="faq-item">
                <h4 class="faq-question">
                    2. Is the signature of all directors mandatory on the special resolution?
                </h4>
                <p class="faq-answer">
                    No. The special resolution is passed by shareholders, and a certified true copy
                    may be signed by one authorised director or the company secretary.
                </p>
            </div>

            <div class="faq-item">
                <h4 class="faq-question">
                    3. Should the special resolution be prepared on company letterhead?
                </h4>
                <p class="faq-answer">
                    While not statutorily mandatory, using the company letterhead is a standard
                    corporate practice and is generally expected for ROC filings.
                </p>
            </div>

            <div class="faq-item">
                <h4 class="faq-question">
                    4. Does the special resolution require professional certification?
                </h4>
                <p class="faq-answer">
                    No statutory requirement exists for professional certification of the special
                    resolution itself. However, Form STK-2 may require certification by a
                    practising professional as per MCA requirements.
                </p>
            </div>

            <div class="faq-item">
                <h4 class="faq-question">
                    5. Is attaching the special resolution mandatory with Form STK-2?
                </h4>
                <p class="faq-answer">
                    Yes, a certified copy of the special resolution is mandatory when filing Form
                    STK-2, along with indemnity bonds, affidavits, statements of accounts, and other
                    prescribed documents.
                </p>
            </div>
        </div>

    </div>
</div>



    </div>
</div>

<!-- Start the Js section -->

<!-- JavaScript Section -->
<script>
document.addEventListener('DOMContentLoaded', function () {
    const form = document.getElementById('strikeOffForm');
    const downloadPdfBtn = document.getElementById('downloadPdfBtn');
    
    // Set default dates
    const today = new Date();
    const meetingDateInput = form.querySelector('[name="meeting_date"]');
    const resolutionDateInput = form.querySelector('[name="resolution_date"]');
    
    if (meetingDateInput) {
        meetingDateInput.value = today.toISOString().split('T')[0];
    }
    
    if (resolutionDateInput) {
        resolutionDateInput.value = today.toISOString().split('T')[0];
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

    // Inputs for live preview
    const inputs = form.querySelectorAll('input, textarea, select');
    inputs.forEach(input => {
        input.addEventListener('input', updatePreview);
        input.addEventListener('change', updatePreview);
    });

    // Initial preview
    updatePreview();

    function updatePreview() {
        // Get form values
        const companyName = form.querySelector('[name="company_name"]').value || '________________';
        const cin = form.querySelector('[name="cin"]').value || '________________';
        const registeredOffice = form.querySelector('[name="registered_office"]').value || '________________';
        const meetingDate = form.querySelector('[name="meeting_date"]').value;
        const meetingTime = form.querySelector('[name="meeting_time"]').value || '______';
        const meetingVenue = form.querySelector('[name="meeting_venue"]').value || 'Registered Office of the Company at ________________';
        const directorTitle = form.querySelector('[name="director_title"]').value || 'Mr.';
        const directorName = form.querySelector('[name="authorized_director"]').value || '________________________';
        const din = form.querySelector('[name="din"]').value || '________________________';
        const designation = form.querySelector('[name="designation"]').value || '________________';
        const place = form.querySelector('[name="place"]').value || '________________';
        const resolutionDate = form.querySelector('[name="resolution_date"]').value;
        const strikeOffReason = form.querySelector('input[name="strike_off_reason"]:checked').value;
        const lastFinancialYear = form.querySelector('[name="last_financial_year"]').value || '';

        // Update preview elements
        const updateElement = (id, text) => {
            const el = document.getElementById(id);
            if (el) el.textContent = text;
        };

        updateElement('prevCompanyName', companyName);
        updateElement('prevCin', cin);
        updateElement('prevRegisteredOffice', registeredOffice);
        updateElement('prevMeetingVenue', meetingVenue);
        updateElement('prevStrikeCompanyName', companyName);
        updateElement('prevStrikeCin', cin);
        updateElement('prevDirectorTitle', directorTitle);
        updateElement('prevDirectorName', directorName);
        updateElement('prevDirectorDin', din);
        updateElement('footerCompanyName', companyName);
        updateElement('footerDirectorName', directorName);
        updateElement('footerDesignation', designation);
        updateElement('footerDin', din);
        updateElement('footerPlace', place);

        // Update strike off reason text
        const reasonElement = document.getElementById('prevStrikeOffReason');
        if (reasonElement) {
            let reasonText = '';
            switch (strikeOffReason) {
                case 'not_carried_business':
                    if (lastFinancialYear) {
                        reasonText = `and considering that the Company has not been carrying on any business or operations since ${lastFinancialYear} (for a period of more than two immediately preceding financial years)`;
                    } else {
                        reasonText = 'and considering that the Company has not been carrying on any business or operations for a period of more than two immediately preceding financial years';
                    }
                    break;
                case 'not_commenced_business':
                    reasonText = 'and considering that the Company has not commenced business within one year of incorporation';
                    break;
                case 'defunct_inoperative':
                    reasonText = 'and considering that the Company has become defunct/inoperative';
                    break;
                default:
                    reasonText = 'and considering that the Company has not been carrying on any business or operations for a period of more than two immediately preceding financial years';
            }
            reasonElement.textContent = reasonText;
        }

        // Format dates
        if (meetingDate) {
            const formattedMeetingDate = new Date(meetingDate).toLocaleDateString('en-IN', {
                day: '2-digit',
                month: '2-digit',
                year: 'numeric'
            }).replace(/\//g, '.');
            updateElement('prevMeetingDate', formattedMeetingDate);
        } else {
            updateElement('prevMeetingDate', '__.__.______');
        }

        if (resolutionDate) {
            const formattedResolutionDate = new Date(resolutionDate).toLocaleDateString('en-IN', {
                day: '2-digit',
                month: '2-digit',
                year: 'numeric'
            }).replace(/\//g, '.');
            updateElement('footerDate', formattedResolutionDate);
        } else {
            updateElement('footerDate', '__.__.______');
        }

        if (meetingTime) {
            updateElement('prevMeetingTime', meetingTime);
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
        
        // Validate compliance checklist
        const complianceCheckboxes = form.querySelectorAll('.compliance-checklist input[type="checkbox"]');
        let allChecked = true;
        
        complianceCheckboxes.forEach(checkbox => {
            if (!checkbox.checked) {
                allChecked = false;
            }
        });
        
        if (!allChecked) {
            e.preventDefault();
            alert('Please confirm all compliance requirements before proceeding with strike-off.');
            return false;
        }
        
        btnText.textContent = 'Generating Document...';
        spinner.classList.remove('d-none');
        submitBtn.disabled = true;
    });
});
</script>

<!--End Js Section -->

@endsection
