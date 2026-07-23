@extends('tools.tool-master')
@section('title')
{{_(' Notice of EGM for Increase in Authorised Share Capital
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
            <h1 class="hero-title"> <span> Notice of EGM for Increase in Authorised Share Capital
</span></h1>
            <p class="hero-subtitle">
                Generate a certified Notice of EGM for Increase in Authorised Share Capital
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
            <h2 class="form-title">Enter EGM & Capital Details</h2>
            <p class="form-description">
                Fill in the details below to generate a Notice of Extraordinary General Meeting for Increase in Authorised Share Capital.
            </p>
        </div>

        <form id="egmForm" method="POST" action="{{ route('br.egm.authorised.capital') }}">
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
                    <label class="form-label">Meeting Venue <span class="required">*</span></label>
                    <input type="text" name="venue" class="form-control" placeholder="Complete address of meeting venue" required>
                </div>

                <!-- Existing Authorised Capital -->
                <div class="form-group full-width">
                    <label class="form-label">Existing Authorised Capital (Number) <span class="required">*</span></label>
                    <input type="text" name="existing_capital_number" class="form-control" placeholder="e.g., 1000000" required>
                </div>
                <div class="form-group full-width">
                    <label class="form-label">Existing Authorised Capital (In Words) <span class="required">*</span></label>
                    <input type="text" name="existing_capital_words" class="form-control" placeholder="e.g., Ten Lakh Rupees" required>
                </div>
                <div class="form-row">
                    <div class="form-group">
                        <label class="form-label">Existing Number of Equity Shares <span class="required">*</span></label>
                        <input type="text" name="existing_shares" class="form-control" placeholder="e.g., 100000" required>
                    </div>
                    <div class="form-group">
                        <label class="form-label">Existing Face Value (₹) <span class="required">*</span></label>
                        <input type="text" name="existing_face_value" class="form-control" placeholder="e.g., 10" required>
                    </div>
                </div>

                <!-- Proposed Authorised Capital -->
                <div class="form-group full-width">
                    <label class="form-label">Proposed Authorised Capital (Number) <span class="required">*</span></label>
                    <input type="text" name="proposed_capital_number" class="form-control" placeholder="e.g., 2000000" required>
                </div>
                <div class="form-group full-width">
                    <label class="form-label">Proposed Authorised Capital (In Words) <span class="required">*</span></label>
                    <input type="text" name="proposed_capital_words" class="form-control" placeholder="e.g., Twenty Lakh Rupees" required>
                </div>
                <div class="form-row">
                    <div class="form-group">
                        <label class="form-label">Proposed Number of Equity Shares <span class="required">*</span></label>
                        <input type="text" name="proposed_shares" class="form-control" placeholder="e.g., 200000" required>
                    </div>
                    <div class="form-group">
                        <label class="form-label">Proposed Face Value (₹) <span class="required">*</span></label>
                        <input type="text" name="proposed_face_value" class="form-control" placeholder="e.g., 10" required>
                    </div>
                </div>

                <!-- Additional Shares -->
                <div class="form-row">
                    <div class="form-group">
                        <label class="form-label">Additional Shares Created (Number) <span class="required">*</span></label>
                        <input type="text" name="additional_shares_number" class="form-control" placeholder="e.g., 100000" required>
                    </div>
                    <div class="form-group">
                        <label class="form-label">Additional Shares (In Words) <span class="required">*</span></label>
                        <input type="text" name="additional_shares_words" class="form-control" placeholder="e.g., One Lakh" required>
                    </div>
                </div>
                <div class="form-group full-width">
                    <label class="form-label">Reason for Increase <span class="required">*</span></label>
                    <textarea name="reason" class="form-control" rows="3" placeholder="e.g., Business expansion / Working capital requirements / Investment opportunities" required></textarea>
                </div>

                <!-- Signatory Details -->
                <div class="form-row">
                    <div class="form-group">
                        <label class="form-label">Signatory Name <span class="required">*</span></label>
                        <input type="text" name="signatory_name" class="form-control" placeholder="Name of Director/Company Secretary" required>
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
                        <p class="preview-subtitle">Notice of EGM for Increase in Authorised Share Capital</p>
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
                    <h2 class="certificate-doc-title" style="font-size:18px; margin-bottom:10px;">NOTICE OF EXTRAORDINARY GENERAL MEETING</h2>
                </div>

                <div class="certificate-body">
                    <!-- Company details -->
                    <p style="font-weight:bold; margin-bottom:4px;"><span id="previewCompanyName">________________</span></p>
                    <p>CIN: <span id="previewCIN">________________</span></p>
                    <p>Registered Office: <span id="previewRegOffice">________________</span></p>

                    <p style="margin-top:16px;">NOTICE is hereby given that an Extraordinary General Meeting (EGM) of the Members of the Company will be held as per the following details:</p>

                    <p><strong>Day & Date:</strong> <span id="previewMeetingDate">________________</span></p>
                    <p><strong>Time:</strong> <span id="previewMeetingTime">________________</span></p>
                    <p><strong>Venue:</strong> <span id="previewVenue">________________</span></p>

                    <p>to transact the following business:</p>
                    <p><strong>SPECIAL BUSINESS:</strong></p>
                    <p><strong>Item No. 1: Increase in Authorised Share Capital of the Company</strong></p>
                    <p>To consider and, if thought fit, to pass the following resolution as an Ordinary Resolution:</p>

                    <p style="margin-left:20px;">
                        "RESOLVED THAT pursuant to the provisions of Sections 13, 61, and 64 and other applicable provisions, if any, of the Companies Act, 2013 read with the Companies (Share Capital and Debentures) Rules, 2014 (including any statutory modification(s) or re-enactment(s) thereof for the time being in force), and subject to the provisions of the Memorandum and Articles of Association of the Company, the consent of the Members be and is hereby accorded to increase the Authorised Share Capital of the Company from:
                    </p>
                    <p style="margin-left:40px;">
                        Existing Authorised Share Capital: Rs. <span id="previewExistingCapitalNumber">________________</span>/-<br>
                        (Rupees <span id="previewExistingCapitalWords">________________</span> only)<br>
                        divided into <span id="previewExistingShares">________________</span> (<span id="previewExistingSharesWords">________________</span>) Equity Shares of Rs. <span id="previewExistingFaceValue">________________</span>/- each
                    </p>
                    <p style="margin-left:40px;">
                        TO<br>
                        Proposed Authorised Share Capital: Rs. <span id="previewProposedCapitalNumber">________________</span>/-<br>
                        (Rupees <span id="previewProposedCapitalWords">________________</span> only)<br>
                        divided into <span id="previewProposedShares">________________</span> (<span id="previewProposedSharesWords">________________</span>) Equity Shares of Rs. <span id="previewProposedFaceValue">________________</span>/- each
                    </p>
                    <p style="margin-left:40px;">
                        by creation of additional <span id="previewAdditionalSharesNumber">________________</span> (<span id="previewAdditionalSharesWords">________________</span>) Equity Shares of Rs. <span id="previewAdditionalFaceValue">________________</span>/- each, ranking pari passu in all respects with the existing Equity Shares of the Company.
                    </p>
                    <p style="margin-left:20px;">
                        RESOLVED FURTHER THAT pursuant to the aforesaid increase in the Authorised Share Capital, Clause V (Capital Clause) of the Memorandum of Association of the Company be and is hereby substituted with the following new Clause V:
                    </p>
                    <p style="margin-left:40px;">
                        "V. The Authorised Share Capital of the Company is Rs. <span id="previewProposedCapitalNumberClause">________________</span>/- (Rupees <span id="previewProposedCapitalWordsClause">________________</span> only) divided into <span id="previewProposedSharesClause">________________</span> (<span id="previewProposedSharesWordsClause">________________</span>) Equity Shares of Rs. <span id="previewProposedFaceValueClause">________________</span>/- each."
                    </p>
                    <p style="margin-left:20px;">
                        RESOLVED FURTHER THAT any Director or Company Secretary of the Company be and is hereby authorised to file Form SH-7 and other necessary forms, applications, and documents with the Registrar of Companies, and to do all such acts, deeds, matters, and things as may be necessary, proper, or expedient to give effect to this resolution."
                    </p>

                    <p><strong>EXPLANATORY STATEMENT PURSUANT TO SECTION 102 OF THE COMPANIES ACT, 2013</strong></p>
                    <p><strong>Item No. 1:</strong></p>
                    <p>The Company proposes to increase its Authorised Share Capital to meet its future business requirements and expansion plans. The existing Authorised Share Capital of the Company is Rs. <span id="previewExistingCapitalNumberExpl">________________</span>/- divided into <span id="previewExistingSharesExpl">________________</span> Equity Shares of Rs. <span id="previewExistingFaceValueExpl">________________</span>/- each.</p>
                    <p>It is proposed to increase the Authorised Share Capital to Rs. <span id="previewProposedCapitalNumberExpl">________________</span>/- divided into <span id="previewProposedSharesExpl">________________</span> Equity Shares of Rs. <span id="previewProposedFaceValueExpl">________________</span>/- each, by creation of additional <span id="previewAdditionalSharesNumberExpl">________________</span> Equity Shares of Rs. <span id="previewAdditionalFaceValueExpl">________________</span>/- each.</p>
                    <p><strong>Reason for increase:</strong> <span id="previewReason">________________</span></p>
                    <p>The Board recommends the Ordinary Resolution as set out in Item No. 1 of this Notice for approval by the Members.</p>

                    <p><strong>Notes:</strong></p>
                    <p>1. A member entitled to attend and vote at the meeting is entitled to appoint a proxy to attend and vote instead of himself/herself. A proxy need not be a member of the Company.</p>
                    <p>2. The instrument of proxy, duly completed and signed, must be deposited at the Registered Office of the Company not less than 48 hours before the commencement of the meeting.</p>
                    <p>3. Members are requested to bring their copy of the Notice to the meeting.</p>

                    <p><strong>By Order of the Board</strong></p>
                    <p>For <span id="previewCompanyNameFooter">________________</span></p>
                    <p><strong>Signature:</strong> _________________________</p>
                    <p><strong>Name:</strong> <span id="previewSignatoryName">________________</span></p>
                    <p><strong>Designation:</strong> <span id="previewSignatoryDesignation">________________</span></p>
                    <p><strong>Place:</strong> <span id="previewPlace">________________</span></p>
                    <p><strong>Date:</strong> <span id="previewNoticeDate">________________</span></p>
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
            <h2 class="info-title">Notice of EGM for Increase in Authorised Share Capital</h2>
            <p class="info-subtitle">
                Standard Notice Format for Extraordinary General Meeting (EGM)
            </p>
        </div>

        <!-- Introduction -->
        <div class="info-content">
            <h3 class="info-subheading">Introduction</h3>
            <p class="info-text">
                A Notice of Extraordinary General Meeting (EGM) for Increase in Authorised Share Capital is a formal communication sent to all shareholders of a company informing them about an upcoming general meeting convened to consider and approve the increase in the company's authorised share capital. Under the Companies Act, 2013, any increase in authorised share capital requires the approval of shareholders through a resolution passed at a general meeting.
            </p>
            <p class="info-text">
                The notice must be sent to all shareholders at least twenty-one clear days before the date of the meeting (or a shorter period if consented to by shareholders holding at least 95% of voting rights). It includes details such as the existing authorised capital, proposed new authorised capital, number and type of additional shares to be created, the proposed amendment to Clause V (Capital Clause) of the Memorandum of Association, and the explanatory statement stating the reasons for the proposed increase. Following approval, Form SH-7 must be filed with the Registrar of Companies.
            </p>
        </div>

        <!-- Benefits -->
        <div class="info-content">
            <h3 class="info-subheading">Benefits of Using a Standard Format</h3>
            <p class="info-text">
                Utilising a professionally drafted notice format ensures that all statutory requirements for convening an EGM are properly addressed. A ready-to-use template saves valuable time in meeting preparation, reduces the risk of procedural errors, and provides a consistent framework for communicating with shareholders. Standardised formats facilitate proper documentation and ensure compliance with corporate governance requirements.
            </p>
        </div>

        <!-- Relevance -->
        <div class="info-content">
            <h3 class="info-subheading">Relevance to Capital Structure Changes</h3>
            <p class="info-text">
                Following Company Registration, the authorised capital is fixed as per the Memorandum of Association. As the company grows and requires additional funding through fresh share issuance, the authorised capital may need to be increased. This increase must be within the limits permitted by the Articles of Association. After obtaining shareholder approval, Form SH-7 must be filed with the Registrar of Companies. Companies should also ensure their GST Registration and other statutory registrations are updated if there are any changes consequent to the capital restructuring.
            </p>
        </div>

        <!-- Sample Format -->
        <div class="format-section">
            <h3 class="format-title">Notice of EGM – Sample Format</h3>

            <p class="format-text">________________________<br>
            (Name of the Company)<br>
            CIN: ________________________<br>
            Registered Office: ________________________</p>

            <p class="format-text"><strong>NOTICE OF EXTRAORDINARY GENERAL MEETING</strong></p>

            <p class="format-text">
                NOTICE is hereby given that an Extraordinary General Meeting (EGM) of the Members of the Company will be held as per the following details:
            </p>

            <ul class="format-list">
                <li>Day & Date: ________________________</li>
                <li>Time: ________________________</li>
                <li>Venue: ________________________</li>
            </ul>

            <p class="format-text"><strong>to transact the following business:</strong></p>
            <p class="format-text"><strong>SPECIAL BUSINESS:</strong></p>

            <p class="format-text"><strong>Item No. 1: Increase in Authorised Share Capital of the Company</strong></p>
            <p class="format-text">
                To consider and, if thought fit, to pass the following resolution as an Ordinary Resolution:
            </p>

            <p class="format-text">
                "RESOLVED THAT pursuant to Sections 13, 61, 64 and other applicable provisions of the Companies Act, 2013 and the Companies (Share Capital and Debentures) Rules, 2014, and subject to the Memorandum and Articles of Association of the Company, the consent of the Members be and is hereby accorded to increase the Authorised Share Capital of the Company from:
            </p>

            <ul class="format-list">
                <li>Existing Authorised Share Capital: Rs. ________________________/- (Rupees ________________________ only) divided into ________________________ Equity Shares of Rs. ________________________/- each</li>
                <li>TO</li>
                <li>Proposed Authorised Share Capital: Rs. ________________________/- (Rupees ________________________ only) divided into ________________________ Equity Shares of Rs. ________________________/- each, by creation of additional ________________________ Equity Shares of Rs. ________________________/- each, ranking pari passu in all respects with existing Equity Shares.</li>
            </ul>

            <p class="format-text">
                RESOLVED FURTHER THAT Clause V (Capital Clause) of the Memorandum of Association be substituted as follows:
            </p>
            <p class="format-text">
                "V. The Authorised Share Capital of the Company is Rs. ________________________/- (Rupees ________________________ only) divided into ________________________ Equity Shares of Rs. ________________________/- each."
            </p>

            <p class="format-text">
                RESOLVED FURTHER THAT any Director or Company Secretary of the Company be and is hereby authorised to file Form SH-7 and all necessary documents with the Registrar of Companies to give effect to this resolution."
            </p>

            <h4 class="format-subheading">EXPLANATORY STATEMENT PURSUANT TO SECTION 102</h4>
            <p class="format-text">
                Item No. 1: The Company proposes to increase its Authorised Share Capital to meet future business requirements and expansion plans. Existing Authorised Share Capital: Rs. ________________________/- divided into ________________________ Equity Shares of Rs. ________________________/- each. Proposed increase: Rs. ________________________/- divided into ________________________ Equity Shares of Rs. ________________________/- each, by creation of additional ________________________ Equity Shares of Rs. ________________________/- each.
            </p>
            <p class="format-text">Reason for increase: ________________________ (e.g., Business expansion / Working capital requirements / Investment opportunities)</p>

            <h4 class="format-subheading">Notes:</h4>
            <ol class="format-list">
                <li>A member entitled to attend and vote may appoint a proxy. A proxy need not be a member of the Company.</li>
                <li>The instrument of proxy must be deposited at the Registered Office at least 48 hours before the meeting.</li>
                <li>Members are requested to bring their copy of the Notice to the meeting.</li>
            </ol>

            <p class="format-text">
                By Order of the Board<br>
                For ________________________ (Name of the Company)<br>
                Signature: __________________________<br>
                Name: __________________________<br>
                Designation: __________________________ (Director / Company Secretary)<br>
                Place: __________________________<br>
                Date: __________________________
            </p>
        </div>

        <!-- FAQ -->
        <div class="faq-section">
            <h3 class="faq-title">Frequently Asked Questions</h3>

            <div class="faq-item">
                <h4 class="faq-question">1. Are details mentioned in the EGM notice the same as the members' resolution?</h4>
                <p class="faq-answer">
                    Yes, the core details regarding the increase in authorised share capital in the EGM notice are the same as in the resolution passed by members. The notice contains the proposed resolution which, when approved, becomes the members' resolution.
                </p>
            </div>

            <div class="faq-item">
                <h4 class="faq-question">2. Is the signature of all directors mandatory?</h4>
                <p class="faq-answer">
                    No, only a single authorised person (Director or Company Secretary) signs the notice. The notice is issued 'By Order of the Board'.
                </p>
            </div>

            <div class="faq-item">
                <h4 class="faq-question">3. Should the EGM notice be on company letterhead?</h4>
                <p class="faq-answer">
                    Yes, issuing the notice on official letterhead ensures authenticity, compliance with statutory requirements, and proper corporate records.
                </p>
            </div>

            <div class="faq-item">
                <h4 class="faq-question">4. Does the notice need professional certification?</h4>
                <p class="faq-answer">
                    No, the notice itself is signed by a Director or Company Secretary. However, Form SH-7 filed after approval requires certification by a practising professional.
                </p>
            </div>

            <div class="faq-item">
                <h4 class="faq-question">5. Is the EGM notice mandatory for MCA Form SH-7?</h4>
                <p class="faq-answer">
                    Yes, the notice along with the resolution passed forms part of attachments required when filing Form SH-7 with the Registrar of Companies.
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
    const form = document.getElementById('egmForm');

    // Set default dates
    const today = new Date().toISOString().slice(0,10);
    const meetingDateInput = form.querySelector('[name="meeting_date"]');
    const noticeDateInput = form.querySelector('[name="notice_date"]');
    if (meetingDateInput && !meetingDateInput.value) meetingDateInput.value = today;
    if (noticeDateInput && !noticeDateInput.value) noticeDateInput.value = today;

    // Default meeting time
    const meetingTimeInput = form.querySelector('[name="meeting_time"]');
    if (meetingTimeInput && !meetingTimeInput.value) meetingTimeInput.value = "11:00";

    // Helper to format date
    function formatDate(dateString) {
        if (!dateString) return '________________';
        const date = new Date(dateString);
        return date.toLocaleDateString('en-IN', { day: '2-digit', month: 'long', year: 'numeric' });
    }

    // Function to get the number in words from the numeric field (we'll just display the entered words)
    function updatePreview() {
        const companyName = form.querySelector('[name="company_name"]').value || '________________';
        const cin = form.querySelector('[name="cin"]').value || '________________';
        const regOffice = form.querySelector('[name="registered_office"]').value || '________________';
        const meetingDateRaw = form.querySelector('[name="meeting_date"]').value;
        const meetingDate = meetingDateRaw ? formatDate(meetingDateRaw) : '________________';
        const meetingTime = form.querySelector('[name="meeting_time"]').value || '________________';
        const venue = form.querySelector('[name="venue"]').value || '________________';

        const existingCapitalNumber = form.querySelector('[name="existing_capital_number"]').value || '________________';
        const existingCapitalWords = form.querySelector('[name="existing_capital_words"]').value || '________________';
        const existingShares = form.querySelector('[name="existing_shares"]').value || '________________';
        const existingFaceValue = form.querySelector('[name="existing_face_value"]').value || '________________';

        const proposedCapitalNumber = form.querySelector('[name="proposed_capital_number"]').value || '________________';
        const proposedCapitalWords = form.querySelector('[name="proposed_capital_words"]').value || '________________';
        const proposedShares = form.querySelector('[name="proposed_shares"]').value || '________________';
        const proposedFaceValue = form.querySelector('[name="proposed_face_value"]').value || '________________';

        const additionalSharesNumber = form.querySelector('[name="additional_shares_number"]').value || '________________';
        const additionalSharesWords = form.querySelector('[name="additional_shares_words"]').value || '________________';
        const additionalFaceValue = form.querySelector('[name="proposed_face_value"]').value || '________________'; // same as proposed face value

        const reason = form.querySelector('[name="reason"]').value || '________________';

        const signatoryName = form.querySelector('[name="signatory_name"]').value || '________________';
        const signatoryDesignation = form.querySelector('[name="signatory_designation"]').value || '________________';
        const place = form.querySelector('[name="place"]').value || '________________';
        const noticeDateRaw = form.querySelector('[name="notice_date"]').value;
        const noticeDate = noticeDateRaw ? formatDate(noticeDateRaw) : '________________';

        // Helper to get the words for number of shares (we'll use same as numeric field for simplicity; user can enter manually)
        const existingSharesWords = form.querySelector('[name="existing_shares_words"]') ? form.querySelector('[name="existing_shares_words"]').value : existingShares;
        const proposedSharesWords = form.querySelector('[name="proposed_shares_words"]') ? form.querySelector('[name="proposed_shares_words"]').value : proposedShares;

        // Update DOM
        document.getElementById('previewCompanyName').textContent = companyName;
        document.getElementById('previewCIN').textContent = cin;
        document.getElementById('previewRegOffice').textContent = regOffice;
        document.getElementById('previewMeetingDate').textContent = meetingDate;
        document.getElementById('previewMeetingTime').textContent = meetingTime;
        document.getElementById('previewVenue').textContent = venue;

        document.getElementById('previewExistingCapitalNumber').textContent = existingCapitalNumber;
        document.getElementById('previewExistingCapitalWords').textContent = existingCapitalWords;
        document.getElementById('previewExistingShares').textContent = existingShares;
        document.getElementById('previewExistingSharesWords').textContent = existingSharesWords;
        document.getElementById('previewExistingFaceValue').textContent = existingFaceValue;

        document.getElementById('previewProposedCapitalNumber').textContent = proposedCapitalNumber;
        document.getElementById('previewProposedCapitalWords').textContent = proposedCapitalWords;
        document.getElementById('previewProposedShares').textContent = proposedShares;
        document.getElementById('previewProposedSharesWords').textContent = proposedSharesWords;
        document.getElementById('previewProposedFaceValue').textContent = proposedFaceValue;

        document.getElementById('previewAdditionalSharesNumber').textContent = additionalSharesNumber;
        document.getElementById('previewAdditionalSharesWords').textContent = additionalSharesWords;
        document.getElementById('previewAdditionalFaceValue').textContent = additionalFaceValue;

        // Clause duplication
        document.getElementById('previewProposedCapitalNumberClause').textContent = proposedCapitalNumber;
        document.getElementById('previewProposedCapitalWordsClause').textContent = proposedCapitalWords;
        document.getElementById('previewProposedSharesClause').textContent = proposedShares;
        document.getElementById('previewProposedSharesWordsClause').textContent = proposedSharesWords;
        document.getElementById('previewProposedFaceValueClause').textContent = proposedFaceValue;

        // Explanatory statement
        document.getElementById('previewExistingCapitalNumberExpl').textContent = existingCapitalNumber;
        document.getElementById('previewExistingSharesExpl').textContent = existingShares;
        document.getElementById('previewExistingFaceValueExpl').textContent = existingFaceValue;
        document.getElementById('previewProposedCapitalNumberExpl').textContent = proposedCapitalNumber;
        document.getElementById('previewProposedSharesExpl').textContent = proposedShares;
        document.getElementById('previewProposedFaceValueExpl').textContent = proposedFaceValue;
        document.getElementById('previewAdditionalSharesNumberExpl').textContent = additionalSharesNumber;
        document.getElementById('previewAdditionalFaceValueExpl').textContent = additionalFaceValue;
        document.getElementById('previewReason').textContent = reason;

        document.getElementById('previewCompanyNameFooter').textContent = companyName;
        document.getElementById('previewSignatoryName').textContent = signatoryName;
        document.getElementById('previewSignatoryDesignation').textContent = signatoryDesignation;
        document.getElementById('previewPlace').textContent = place;
        document.getElementById('previewNoticeDate').textContent = noticeDate;

        updateStepIndicator();
    }

    function updateStepIndicator() {
        const steps = document.querySelectorAll('.step-dot');
        const requiredInputs = form.querySelectorAll('input[required], textarea[required]');
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

    // Attach event listeners to all inputs
    const inputs = form.querySelectorAll('input, textarea, select');
    inputs.forEach(input => input.addEventListener('input', updatePreview));
    updatePreview();

  
});
</script>

@endsection
