@extends('tools.tool-master')
@section('title')
{{_('Notice of EGM for Strike Off of Company')}}
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
            <h1 class="hero-title">Notice of EGM for <span> Strike Off of Company</span></h1>
            <p class="hero-subtitle">
                Generate a certified Notice of EGM for Strike Off of Company in under 60 seconds.
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
            <h2 class="form-title">Enter Company & EGM Notice Details</h2>
            <p class="form-description">
                Fill in the details below to generate a Notice of EGM for Strike Off of Company.
            </p>
        </div>

        <form id="egmNoticeStrikeOffForm" method="POST" action="{{ route('egm.notice.strike.off') }}">
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
                        <label class="form-label">Meeting Date <span class="required">*</span></label>
                        <input type="date" name="meeting_date" class="form-control" required>
                    </div>

                    <div class="form-group">
                        <label class="form-label">Meeting Day <span class="required">*</span></label>
                        <div class="select-wrapper">
                            <select name="meeting_day" class="form-control form-select" required>
                                <option value="">Select day</option>
                                <option value="Monday">Monday</option>
                                <option value="Tuesday">Tuesday</option>
                                <option value="Wednesday">Wednesday</option>
                                <option value="Thursday">Thursday</option>
                                <option value="Friday">Friday</option>
                                <option value="Saturday">Saturday</option>
                                <option value="Sunday">Sunday</option>
                            </select>
                        </div>
                    </div>
                </div>
                
                <div class="form-row">
                    <div class="form-group">
                        <label class="form-label">Meeting Time <span class="required">*</span></label>
                        <input type="time" name="meeting_time" class="form-control" required>
                    </div>

                    <div class="form-group">
                        <label class="form-label">Notice Date <span class="required">*</span></label>
                        <input type="date" name="notice_date" class="form-control" required>
                        <small class="form-help-text">Must be at least 21 clear days before meeting</small>
                    </div>
                </div>
                
                <div class="form-group full-width">
                    <label class="form-label">Meeting Venue <span class="required">*</span></label>
                    <input type="text" name="meeting_venue" class="form-control" value="Registered Office of the Company" required>
                </div>
                
                <!-- Strike Off Details Section -->
                <div class="section-header">
                    <h3>Strike Off Details</h3>
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
                        <label class="notice-radio-label">
                            <input type="radio" name="strike_off_reason" value="not_commenced_business">
                            <span class="radio-text">
                                <strong>Not Commenced Business</strong><br>
                                <small>Company has not commenced business within one year of incorporation</small>
                            </span>
                        </label>
                        <label class="notice-radio-label">
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
                
                <div class="form-group full-width">
                    <label class="form-label">Additional Explanatory Details (Optional)</label>
                    <textarea name="additional_explanation" class="form-control" placeholder="Any additional information for explanatory statement" rows="3"></textarea>
                </div>
                
                <!-- Authorized Signatory Section -->
                <div class="section-header">
                    <h3>Authorized Signatory Details</h3>
                </div>
                
                <div class="form-row">
                    <div class="form-group">
                        <label class="form-label">Authorized Director Name <span class="required">*</span></label>
                        <input type="text" name="authorized_director" class="form-control" placeholder="Enter authorized director name" required>
                    </div>

                    <div class="form-group">
                        <label class="form-label">Designation <span class="required">*</span></label>
                        <div class="select-wrapper">
                            <select name="designation" class="form-control form-select" required>
                                <option value="">Select designation</option>
                                <option value="Director">Director</option>
                                <option value="Managing Director">Managing Director</option>
                                <option value="Company Secretary">Company Secretary</option>
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
                
                <!-- Compliance Checklist -->
                <div class="form-group full-width">
                    <div class="compliance-checklist">
                        <p><strong>Pre-conditions for Strike Off (Section 248):</strong></p>
                        <div class="checklist-item">
                            <input type="checkbox" name="compliance_1" id="compliance_1" required>
                            <label for="compliance_1">All pending returns filed with ROC</label>
                        </div>
                        <div class="checklist-item">
                            <input type="checkbox" name="compliance_2" id="compliance_2" required>
                            <label for="compliance_2">GST Registration cancelled (if registered)</label>
                        </div>
                        <div class="checklist-item">
                            <input type="checkbox" name="compliance_3" id="compliance_3" required>
                            <label for="compliance_3">Income tax returns filed and assessments completed</label>
                        </div>
                        <div class="checklist-item">
                            <input type="checkbox" name="compliance_4" id="compliance_4" required>
                            <label for="compliance_4">Bank accounts closed</label>
                        </div>
                        <div class="checklist-item">
                            <input type="checkbox" name="compliance_5" id="compliance_5" required>
                            <label for="compliance_5">No assets or liabilities (or settled)</label>
                        </div>
                        <small class="form-help-text">These are essential requirements for filing Form STK-2 with ROC</small>
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
                        <p class="preview-subtitle">Notice of EGM for Strike Off of Company</p>
                    </div>
                </div>
                <div class="live-badge">
                    <span class="live-dot"></span>
                    Live Preview
                </div>
            </div>

            <div class="certificate-preview">
                <div class="certificate-watermark">PREVIEW</div>

                <div class="notice-header">
                    <h2 class="notice-title">NOTICE OF EXTRAORDINARY GENERAL MEETING</h2>
                </div>

                <div class="notice-body">
                    <p class="notice-paragraph">
                        NOTICE is hereby given that an Extraordinary General Meeting (EGM) of the Members of 
                        <strong id="prevCompanyName">________________________</strong> (Name of the Company) 
                        will be held as follows:
                    </p>
                    
                    <div class="meeting-details">
                        <p><strong>Date:</strong> <span id="prevMeetingDate">________________________</span></p>
                        <p><strong>Day:</strong> <span id="prevMeetingDay">________________________</span></p>
                        <p><strong>Time:</strong> <span id="prevMeetingTime">________________________</span></p>
                        <p><strong>Venue:</strong> <span id="prevMeetingVenue">Registered Office of the Company at ________________________</span></p>
                    </div>
                    
                    <p class="notice-paragraph">
                        to transact the following business:
                    </p>
                    
                    <div class="agenda-item">
                        <p class="agenda-title">
                            <strong>ITEM NO. 1: CLOSURE OF COMPANY AND FILING FORM STK-2 WITH THE REGISTRAR OF COMPANIES FOR STRIKING OFF THE NAME OF THE COMPANY FROM THE REGISTER OF COMPANIES</strong>
                        </p>
                        <p class="agenda-description">
                            To consider and, if thought fit, to pass with or without modification(s), the following resolution as a Special Resolution:
                        </p>
                        
                        <div class="resolution-box">
                            <p><strong>"RESOLVED THAT</strong> considering that <span id="prevStrikeOffReasonText">the Company has not been carrying on any business or operations for a period of more than two immediately preceding financial years</span>, and in accordance with the provisions of Section 248 of the Companies Act, 2013 read with the Companies (Removal of Names of Companies from the Register of Companies) Rules, 2016 (including any statutory modification or re-enactment thereof for the time being in force), the consent of the Members of the Company be and is hereby accorded to the Board of Directors to make an application in Form STK-2 to the Registrar of Companies for striking off the name of the Company:</p>
                            
                            <div class="company-strike-details">
                                <p><strong>Company Name:</strong> <span id="prevStrikeCompanyName">________________________</span></p>
                                <p><strong>CIN:</strong> <span id="prevStrikeCin">________________________</span></p>
                            </div>
                            
                            <p><strong>RESOLVED FURTHER THAT</strong> the Board of Directors of the Company be and are hereby authorised to do all such acts, deeds, matters, and things as may be required under the provisions of the Companies Act, 2013 and the rules made thereunder, including but not limited to executing indemnity bonds, affidavits, and other documents required for the strike-off process."</p>
                        </div>
                    </div>
                    
                    <div class="notes-section">
                        <p class="notes-title"><strong>NOTES:</strong></p>
                        <ol class="notes-list">
                            <li>A Member entitled to attend and vote at the meeting is entitled to appoint a proxy to attend and vote instead of himself/herself. A proxy need not be a Member of the Company. The instrument of proxy, in order to be effective, should be deposited at the Registered Office of the Company not later than forty-eight (48) hours before the commencement of the meeting.</li>
                            <li>Corporate Members intending to send their authorised representatives to attend the meeting are requested to send a certified copy of the Board Resolution authorising their representative to attend and vote on their behalf at the meeting.</li>
                            <li>An Explanatory Statement pursuant to Section 102 of the Companies Act, 2013 relating to the business to be transacted at the meeting is annexed hereto.</li>
                        </ol>
                    </div>
                    
                    <div class="signature-section">
                        <p>For and on behalf of the Board of Directors</p>
                        <p>For <strong id="footerCompanyName">________________________</strong></p>
                        <p><strong>(Name of the Company)</strong></p>
                        <div class="signature-line">
                            <p><strong>Signature:</strong> _________________________</p>
                        </div>
                        <p><strong>Name:</strong> <span id="footerDirectorName">________________________</span></p>
                        <p><strong>Designation:</strong> <span id="footerDesignation">________________________</span></p>
                        <p><strong>DIN:</strong> <span id="footerDin">________________________</span></p>
                        <p><strong>Date:</strong> <span id="footerDate">________________________</span></p>
                        <p><strong>Place:</strong> <span id="footerPlace">________________________</span></p>
                    </div>
                    
                    <div class="explanatory-header">
                        <h3>EXPLANATORY STATEMENT</h3>
                        <p><em>(Pursuant to Section 102 of the Companies Act, 2013)</em></p>
                    </div>
                    
                    <div class="explanatory-body">
                        <p>The following Explanatory Statement, pursuant to Section 102 of the Companies Act, 2013, sets out all material facts relating to the business mentioned under Item No. 1 of the accompanying Notice:</p>
                        
                        <div class="explanatory-item">
                            <p class="item-title"><strong>Item No. 1:</strong></p>
                            <p><span id="prevExplanatoryText">The Company has not been carrying on any business operations for more than two immediately preceding financial years. Even in the earlier years, the Company could not achieve the desired business results. Further, the Company continues to incur annual compliance costs without any corresponding business activity.</span></p>
                            
                            <p id="prevAdditionalExplanation"></p>
                            
                            <p>In view of the above circumstances, it is proposed to strike off the name of the Company from the Register of Companies maintained by the Registrar of Companies.</p>
                            
                            <p>As per the requirements of the Companies Act, 2013 and the Companies (Removal of Names of Companies from the Register of Companies) Rules, 2016, the Board of Directors recommends the Special Resolution as set out in Item No. 1 of the Notice for approval of the Members.</p>
                            
                            <p>None of the Directors, Key Managerial Personnel, or any of their relatives are, in any way, concerned or interested, financially or otherwise, in passing of the said resolution except to the extent of their interest as shareholders of the Company.</p>
                        </div>
                    </div>
                    
                    <div class="explanatory-signature">
                        <p>For and on behalf of the Board of Directors</p>
                        <p>For <strong id="footerCompanyName2">________________________</strong></p>
                        <p><strong>(Name of the Company)</strong></p>
                        <div class="signature-line">
                            <p><strong>Signature:</strong> _________________________</p>
                        </div>
                        <p><strong>Name:</strong> <span id="footerDirectorName2">________________________</span></p>
                        <p><strong>Designation:</strong> <span id="footerDesignation2">________________________</span></p>
                        <p><strong>DIN:</strong> <span id="footerDin2">________________________</span></p>
                        <p><strong>Date:</strong> <span id="footerDate2">________________________</span></p>
                        <p><strong>Place:</strong> <span id="footerPlace2">________________________</span></p>
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
            <h2 class="info-title">Notice of EGM for Strike Off of Company</h2>
            <p class="info-subtitle">
                Professional Format Guide under Companies Act, 2013
            </p>
        </div>

        <!-- Introduction -->
        <div class="info-content">
            <h3 class="info-subheading">Introduction</h3>

            <p class="info-text">
                A Notice of Extraordinary General Meeting (EGM) for Strike Off of Company is a formal
                communication issued to shareholders convening a meeting to seek their approval for
                voluntary removal of the company’s name from the Register of Companies. Under
                Section 248 of the Companies Act, 2013 and the Companies (Removal of Names of
                Companies from the Register of Companies) Rules, 2016, a company that has not carried
                on any business or operations for two or more immediately preceding financial years,
                or has not commenced business within one year of incorporation, may apply for
                voluntary strike-off.
            </p>

            <p class="info-text">
                Prior to filing Form STK-2 with the Registrar of Companies, shareholder approval
                through a special resolution is mandatory. The notice of EGM must be sent to all
                members at least twenty-one clear days before the meeting, specifying the date,
                time, venue, and agenda. It must include the proposed special resolution and an
                explanatory statement setting out all material facts relating to the business to be
                transacted.
            </p>

            <!-- Benefits -->
            <h3 class="info-subheading">Benefits of Using a Standard Format</h3>

            <p class="info-text">
                Utilising a professionally drafted EGM notice format ensures compliance with all
                statutory requirements under the Companies Act, 2013 and the Companies (Removal of
                Names of Companies from the Register of Companies) Rules, 2016. A standard template
                saves time, reduces procedural errors, and provides a consistent framework for
                convening shareholder meetings.
            </p>

            <p class="info-text">
                Standardised formats facilitate smoother compliance and ensure shareholders receive
                clear and complete information regarding the proposed strike-off.
            </p>

            <!-- Relevance -->
            <h3 class="info-subheading">Relevance to Company Closure</h3>

            <p class="info-text">
                The EGM notice is an essential component of the voluntary strike-off procedure.
                After Company Registration, if a company becomes defunct, has not commenced
                business, or remains inoperative for more than two financial years, the directors
                may initiate closure proceedings.
            </p>

            <p class="info-text">
                Before filing Form STK-2, companies must complete all statutory obligations such as
                filing pending returns, cancelling GST Registration (if applicable), settling
                income tax matters, and closing bank accounts. The EGM provides the formal platform
                for shareholders to approve the company’s removal from the register.
            </p>
        </div>

        <!-- Sample Format -->
        <div class="format-section">
            <h3 class="format-title">
                Notice of EGM for Strike Off of Company – Sample Format
            </h3>

            <p class="format-note">
                <em>[To be printed on Company Letterhead]</em>
            </p>

            <p class="format-text">
                <strong>NOTICE OF EXTRAORDINARY GENERAL MEETING</strong>
            </p>

            <p class="format-text">
                NOTICE is hereby given that an Extraordinary General Meeting (EGM) of the Members
                of ________________________ (Name of the Company) will be held as follows:
            </p>

            <p class="format-text">
                <strong>Date:</strong> ________________________
            </p>

            <p class="format-text">
                <strong>Day:</strong> ________________________
            </p>

            <p class="format-text">
                <strong>Time:</strong> ________________________
            </p>

            <p class="format-text">
                <strong>Venue:</strong> Registered Office of the Company at
                ________________________
            </p>

            <p class="format-text">
                to transact the following business:
            </p>

            <p class="format-text">
                <strong>ITEM NO. 1:</strong> Closure of Company and Filing Form STK-2 with the
                Registrar of Companies for Striking Off the Name of the Company from the Register
                of Companies
            </p>

            <p class="format-text">
                To consider and, if thought fit, to pass with or without modification(s), the
                following resolution as a Special Resolution:
            </p>

            <p class="format-text">
                <strong>RESOLVED THAT</strong> considering that the Company has not been carrying on
                any business or operations for more than two immediately preceding financial years,
                and pursuant to Section 248 of the Companies Act, 2013 read with the Companies
                (Removal of Names of Companies from the Register of Companies) Rules, 2016, the
                consent of the Members be and is hereby accorded to the Board of Directors to make
                an application in Form STK-2 to the Registrar of Companies for striking off the name
                of the Company:
            </p>

            <p class="format-text">
                <strong>Company Name:</strong> ________________________
            </p>

            <p class="format-text">
                <strong>CIN:</strong> ________________________
            </p>

            <p class="format-text">
                <strong>RESOLVED FURTHER THAT</strong> the Board of Directors be and are hereby
                authorised to execute indemnity bonds, affidavits, and all other documents and to
                do all such acts, deeds, and things as may be required for the strike-off process.
            </p>

            <p class="format-text">
                <strong>NOTES:</strong>
            </p>

            <p class="format-text">
                1. A Member entitled to attend and vote is entitled to appoint a proxy. A proxy need
                not be a Member of the Company and must be deposited at the Registered Office not
                later than 48 hours before the meeting.
            </p>

            <p class="format-text">
                2. Corporate Members are requested to send a certified copy of the Board Resolution
                authorising their representative to attend and vote.
            </p>

            <p class="format-text">
                3. An Explanatory Statement pursuant to Section 102 of the Companies Act, 2013 is
                annexed hereto.
            </p>

            <p class="format-text">
                For and on behalf of the Board of Directors
            </p>

            <p class="format-text">
                For ________________________ (Name of the Company)
            </p>

            <p class="format-text">
                <strong>Signature:</strong> __________________________
            </p>

            <p class="format-text">
                <strong>Name:</strong> __________________________
            </p>

            <p class="format-text">
                <strong>Designation:</strong> __________________________
            </p>

            <p class="format-text">
                <strong>DIN:</strong> __________________________
            </p>

            <p class="format-text">
                <strong>Date:</strong> __________________________
            </p>

            <p class="format-text">
                <strong>Place:</strong> __________________________
            </p>

            <p class="format-text">
                <strong>EXPLANATORY STATEMENT</strong><br>
                (Pursuant to Section 102 of the Companies Act, 2013)
            </p>

            <p class="format-text">
                The Company has not been carrying on any business operations for more than two
                immediately preceding financial years and continues to incur compliance costs
                without business activity. In view of this, it is proposed to strike off the name
                of the Company from the Register of Companies. The Board recommends the Special
                Resolution for approval of the Members.
            </p>

            <p class="format-text">
                None of the Directors, Key Managerial Personnel, or their relatives are concerned
                or interested in the resolution except as shareholders of the Company.
            </p>
        </div>

        <!-- FAQ -->
        <div class="faq-section">
            <h3 class="faq-title">Frequently Asked Questions</h3>

            <div class="faq-item">
                <h4 class="faq-question">
                    1. Are details in the EGM notice format the same as the special resolution?
                </h4>
                <p class="faq-answer">
                    Yes. The EGM notice contains the proposed special resolution text that
                    shareholders vote upon. The same resolution is later recorded in the meeting
                    minutes.
                </p>
            </div>

            <div class="faq-item">
                <h4 class="faq-question">
                    2. Is the signature of all directors mandatory?
                </h4>
                <p class="faq-answer">
                    No. The EGM notice is usually signed by one authorised director or the company
                    secretary on behalf of the Board.
                </p>
            </div>

            <div class="faq-item">
                <h4 class="faq-question">
                    3. Should the EGM notice be on company letterhead?
                </h4>
                <p class="faq-answer">
                    While not mandatory, issuing the notice on company letterhead is standard
                    corporate practice and recommended for authenticity.
                </p>
            </div>

            <div class="faq-item">
                <h4 class="faq-question">
                    4. Is professional certification required for the EGM notice?
                </h4>
                <p class="faq-answer">
                    No statutory requirement exists for certification of the EGM notice. However,
                    professional certification may be required while filing Form STK-2.
                </p>
            </div>

            <div class="faq-item">
                <h4 class="faq-question">
                    5. Is the EGM notice mandatory to be attached with Form STK-2?
                </h4>
                <p class="faq-answer">
                    Yes. A copy of the EGM notice along with the special resolution and other
                    prescribed documents is generally required to be attached with Form STK-2.
                </p>
            </div>
        </div>

    </div>
</div>



    </div>
</div>


<!-- JavaScript Section -->
<script>
document.addEventListener('DOMContentLoaded', function () {
    const form = document.getElementById('egmNoticeStrikeOffForm');
    const downloadPdfBtn = document.getElementById('downloadPdfBtn');
    
    // Set default dates
    const today = new Date();
    const meetingDateInput = form.querySelector('[name="meeting_date"]');
    const noticeDateInput = form.querySelector('[name="notice_date"]');
    
    if (meetingDateInput) {
        const meetingDate = new Date();
        meetingDate.setDate(meetingDate.getDate() + 22); // 21 clear days + 1
        meetingDateInput.value = meetingDate.toISOString().split('T')[0];
        updateDayOfWeek(meetingDateInput);
    }
    
    if (noticeDateInput) {
        noticeDateInput.value = today.toISOString().split('T')[0];
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
    
    // Update day of week when date changes
    meetingDateInput.addEventListener('change', function() {
        updateDayOfWeek(this);
    });
    
    function updateDayOfWeek(dateInput) {
        if (dateInput.value) {
            const date = new Date(dateInput.value);
            const days = ['Sunday', 'Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday'];
            const dayName = days[date.getDay()];
            
            const daySelect = form.querySelector('[name="meeting_day"]');
            if (daySelect) {
                daySelect.value = dayName;
            }
        }
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
        const companyName = form.querySelector('[name="company_name"]').value || '________________________';
        const cin = form.querySelector('[name="cin"]').value || '________________________';
        const meetingDate = form.querySelector('[name="meeting_date"]').value;
        const meetingDay = form.querySelector('[name="meeting_day"]').value || '________________________';
        const meetingTime = form.querySelector('[name="meeting_time"]').value || '________________________';
        const meetingVenue = form.querySelector('[name="meeting_venue"]').value || 'Registered Office of the Company at ________________________';
        const noticeDate = form.querySelector('[name="notice_date"]').value;
        const authorizedDirector = form.querySelector('[name="authorized_director"]').value || '________________________';
        const designation = form.querySelector('[name="designation"]').value || '________________________';
        const din = form.querySelector('[name="din"]').value || '________________________';
        const place = form.querySelector('[name="place"]').value || '________________________';
        const strikeOffReason = form.querySelector('input[name="strike_off_reason"]:checked').value;
        const lastFinancialYear = form.querySelector('[name="last_financial_year"]').value || '';
        const additionalExplanation = form.querySelector('[name="additional_explanation"]').value || '';

        // Update preview elements
        const updateElement = (id, text) => {
            const el = document.getElementById(id);
            if (el) el.textContent = text;
        };

        updateElement('prevCompanyName', companyName);
        updateElement('prevStrikeCompanyName', companyName);
        updateElement('prevStrikeCin', cin);
        updateElement('prevMeetingDay', meetingDay);
        updateElement('prevMeetingVenue', meetingVenue);
        updateElement('footerCompanyName', companyName);
        updateElement('footerCompanyName2', companyName);
        updateElement('footerDirectorName', authorizedDirector);
        updateElement('footerDirectorName2', authorizedDirector);
        updateElement('footerDesignation', designation);
        updateElement('footerDesignation2', designation);
        updateElement('footerDin', din);
        updateElement('footerDin2', din);
        updateElement('footerPlace', place);
        updateElement('footerPlace2', place);

        // Update strike off reason text
        const reasonElement = document.getElementById('prevStrikeOffReasonText');
        if (reasonElement) {
            let reasonText = '';
            switch (strikeOffReason) {
                case 'not_carried_business':
                    if (lastFinancialYear) {
                        reasonText = `the Company has not been carrying on any business or operations since ${lastFinancialYear} (for a period of more than two immediately preceding financial years)`;
                    } else {
                        reasonText = 'the Company has not been carrying on any business or operations for a period of more than two immediately preceding financial years';
                    }
                    break;
                case 'not_commenced_business':
                    reasonText = 'the Company has not commenced business within one year of incorporation';
                    break;
                case 'defunct_inoperative':
                    reasonText = 'the Company has become defunct/inoperative';
                    break;
                default:
                    reasonText = 'the Company has not been carrying on any business or operations for a period of more than two immediately preceding financial years';
            }
            reasonElement.textContent = reasonText;
            
            // Update explanatory text
            let explanatoryText = '';
            switch (strikeOffReason) {
                case 'not_carried_business':
                    if (lastFinancialYear) {
                        explanatoryText = `The Company has not been carrying on any business operations since ${lastFinancialYear}. Even in the earlier years, the Company could not achieve the desired business results. Further, the Company continues to incur annual compliance costs without any corresponding business activity.`;
                    } else {
                        explanatoryText = 'The Company has not been carrying on any business operations for more than two immediately preceding financial years. Even in the earlier years, the Company could not achieve the desired business results. Further, the Company continues to incur annual compliance costs without any corresponding business activity.';
                    }
                    break;
                case 'not_commenced_business':
                    explanatoryText = 'The Company has not commenced business operations within one year of its incorporation. Further, the Company continues to incur annual compliance costs without any corresponding business activity.';
                    break;
                case 'defunct_inoperative':
                    explanatoryText = 'The Company has become defunct/inoperative and has not been carrying on any business operations. Further, the Company continues to incur annual compliance costs without any corresponding business activity.';
                    break;
            }
            updateElement('prevExplanatoryText', explanatoryText);
        }

        // Update additional explanation
        const additionalElement = document.getElementById('prevAdditionalExplanation');
        if (additionalElement) {
            if (additionalExplanation) {
                additionalElement.innerHTML = `<p>${additionalExplanation}</p>`;
            } else {
                additionalElement.innerHTML = '';
            }
        }

        // Format dates
        if (meetingDate) {
            const formattedMeetingDate = new Date(meetingDate).toLocaleDateString('en-IN', {
                day: '2-digit',
                month: 'long',
                year: 'numeric'
            });
            updateElement('prevMeetingDate', formattedMeetingDate);
        } else {
            updateElement('prevMeetingDate', '________________________');
        }

        if (meetingTime) {
            const timeParts = meetingTime.split(':');
            const hours = parseInt(timeParts[0]);
            const minutes = timeParts[1];
            const ampm = hours >= 12 ? 'PM' : 'AM';
            const formattedHours = hours % 12 || 12;
            updateElement('prevMeetingTime', `${formattedHours}:${minutes} ${ampm}`);
        }

        if (noticeDate) {
            const formattedNoticeDate = new Date(noticeDate).toLocaleDateString('en-IN', {
                day: '2-digit',
                month: 'long',
                year: 'numeric'
            });
            updateElement('footerDate', formattedNoticeDate);
            updateElement('footerDate2', formattedNoticeDate);
        } else {
            updateElement('footerDate', '________________________');
            updateElement('footerDate2', '________________________');
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
<!--End Form and Preview Section-->


@endsection
