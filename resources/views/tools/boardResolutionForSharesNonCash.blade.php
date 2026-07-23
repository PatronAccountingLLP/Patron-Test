@extends('tools.tool-master')
@section('title')
{{_('Board Resolution for Issuance of Shares for Non-Cash Consideration')}}
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
            <h1 class="hero-title">Board Resolution for Issuance <span>of Shares for Non-Cash Consideration</span></h1>
            <p class="hero-subtitle">
                Generate a certified Board Resolution for Issuance of Shares for Non-Cash Consideration in under 60 seconds.
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
            <h2 class="form-title">Enter Company & Share Issuance Details</h2>
            <p class="form-description">
                Fill in the details below to generate a Board Resolution for Issuance of Shares for Non-Cash Consideration.
            </p>
        </div>

        <form id="shareIssuanceForm" method="POST" action="{{ route('br.shares.noncash') }}">
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
                    <h3>Board Meeting Details</h3>
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
                
                <div class="form-group full-width">
                    <label class="form-label">Meeting Venue <span class="required">*</span></label>
                    <input type="text" name="meeting_venue" class="form-control" value="Registered Office of the Company" required>
                </div>
                
                <!-- Transferor/Allottee Details Section -->
                <div class="section-header">
                    <h3>Transferor/Allottee Details</h3>
                </div>
                
                <div class="form-group full-width">
                    <label class="form-label">Name of Proprietor/Transferor <span class="required">*</span></label>
                    <input type="text" name="transferor_name" class="form-control" placeholder="Enter proprietor/transferor name" required>
                </div>
                
                <div class="form-group full-width">
                    <label class="form-label">Name of Proprietorship/Business <span class="required">*</span></label>
                    <input type="text" name="business_name" class="form-control" placeholder="Enter business name being acquired" required>
                </div>
                
                <div class="form-group full-width">
                    <label class="form-label">Nature of Business <span class="required">*</span></label>
                    <input type="text" name="business_nature" class="form-control" placeholder="e.g., Trading, Manufacturing, Services, etc." required>
                </div>
                
                <!-- Allottee Personal Details -->
                <div class="section-header">
                    <h3>Allottee Personal Details</h3>
                </div>
                
                <div class="form-group full-width">
                    <label class="form-label">Name of Allottee <span class="required">*</span></label>
                    <input type="text" name="allottee_name" class="form-control" placeholder="Enter allottee name" required>
                </div>
                
                <div class="form-group full-width">
                    <label class="form-label">PAN (Permanent Account Number) <span class="required">*</span></label>
                    <input type="text" name="pan" class="form-control" placeholder="Enter PAN" required>
                    <small class="form-help-text">As per Income Tax records</small>
                </div>
                
                <div class="form-group full-width">
                    <label class="form-label">Address <span class="required">*</span></label>
                    <textarea name="allottee_address" class="form-control" placeholder="Enter allottee address" required></textarea>
                </div>
                
                <!-- Share Issuance Details Section -->
                <div class="section-header">
                    <h3>Share Issuance Details</h3>
                </div>
                
                <div class="form-row">
                    <div class="form-group">
                        <label class="form-label">Number of Equity Shares <span class="required">*</span></label>
                        <input type="number" name="share_quantity" class="form-control" placeholder="e.g., 1000" min="1" required>
                    </div>

                    <div class="form-group">
                        <label class="form-label">Face Value per Share (₹) <span class="required">*</span></label>
                        <input type="number" name="face_value" class="form-control" placeholder="e.g., 10" min="1" required>
                        <small class="form-help-text">Usually ₹10 or ₹100</small>
                    </div>
                </div>
                
                <div class="form-group full-width">
                    <label class="form-label">Total Consideration Value (₹) <span class="required">*</span></label>
                    <input type="number" name="total_value" class="form-control" placeholder="Total value in rupees" min="1" required>
                    <small class="form-help-text">Value of business/assets being acquired</small>
                </div>
                
                <div class="form-group full-width">
                    <label class="form-label">Registered Valuer Name <span class="required">*</span></label>
                    <input type="text" name="valuer_name" class="form-control" placeholder="Enter registered valuer name" required>
                    <small class="form-help-text">Must be a Registered Valuer as per Companies Act</small>
                </div>
                
                <div class="form-group full-width">
                    <label class="form-label">Consideration Type <span class="required">*</span></label>
                    <div class="radio-group vertical">
                        <label class="radio-label">
                            <input type="radio" name="consideration_type" value="business_acquisition" checked>
                            <span class="radio-text">
                                <strong>Business Acquisition</strong><br>
                                <small>Acquisition of proprietorship/partnership business</small>
                            </span>
                        </label>
                        <label class="radio-label">
                            <input type="radio" name="consideration_type" value="asset_acquisition">
                            <span class="radio-text">
                                <strong>Asset Acquisition</strong><br>
                                <small>Acquisition of specific assets/property</small>
                            </span>
                        </label>
                        <label class="radio-label">
                            <input type="radio" name="consideration_type" value="debt_settlement">
                            <span class="radio-text">
                                <strong>Debt Settlement</strong><br>
                                <small>Settlement of outstanding debts/liabilities</small>
                            </span>
                        </label>
                        <label class="radio-label">
                            <input type="radio" name="consideration_type" value="other">
                            <span class="radio-text">
                                <strong>Other Non-Cash Consideration</strong><br>
                                <small>Any other non-cash consideration</small>
                            </span>
                        </label>
                    </div>
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
                                <option value="Whole-Time Director">Whole-Time Director</option>
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
                
                <div class="form-group full-width">
                    <label class="form-label">Date of Resolution <span class="required">*</span></label>
                    <input type="date" name="resolution_date" class="form-control" required>
                </div>
                
                <!-- Legal Compliance Notes -->
                <div class="form-group full-width">
                    <div class="legal-notes">
                        <p><strong>Important Legal Requirements:</strong></p>
                        <ul>
                            <li>Valuation report from Registered Valuer is mandatory</li>
                            <li>Shareholder approval through Special Resolution required</li>
                            <li>Form PAS-3 must be filed with ROC within 30 days of allotment</li>
                            <li>Shares must rank pari passu with existing shares</li>
                        </ul>
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
                        <p class="preview-subtitle">Board Resolution for Issuance of Shares for Non-Cash Consideration</p>
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
                        <p><strong>CIN: </strong><span id="prevCin">________________</span></p>
                        <p><strong>Registered Office: </strong><span id="prevRegisteredOffice">________________</span></p>
                    </div>
                    
                    <p class="certificate-paragraph">
                        Passed at the Meeting of the Board of Directors of the Company<br>
                        <strong>Date of Meeting: </strong><span id="prevMeetingDate">__.__.______</span><br>
                        <strong>Time: </strong><span id="prevMeetingTime">______</span> (Hours)<br>
                        <strong>Venue: </strong><span id="prevMeetingVenue">Registered Office of the Company</span>
                    </p>
                    
                    <p class="certificate-paragraph">
                        <strong>SUBJECT: ISSUANCE OF SHARES PURSUANT TO ACQUISITION OF BUSINESS FOR CONSIDERATION OTHER THAN CASH</strong>
                    </p>
                    
                    <p class="certificate-paragraph">
                        The Chairman placed before the Board the proposal to create, offer for subscription, and to issue and allot Equity Shares to the proprietor/transferor in respect of the acquisition of business/assets for consideration other than cash. The Board discussed the proposal in detail and passed the following resolutions unanimously:
                    </p>
                    
                    <div class="business-details">
                        <p><strong>Details of the Business Being Acquired:</strong></p>
                        <p><strong>Name of the Proprietor/Transferor:</strong> <span id="prevTransferorName">________________________</span></p>
                        <p><strong>Name of the Proprietorship/Business:</strong> <span id="prevBusinessName">________________________</span></p>
                        <p><strong>Nature of Business:</strong> <span id="prevBusinessNature">________________________</span></p>
                    </div>
                    
                    <p class="certificate-paragraph">
                        <strong>"RESOLVED THAT</strong> pursuant to the provisions of Section 42 and Section 62(1)(c) of the Companies Act, 2013 read with the Companies (Share Capital and Debentures) Rules, 2014 and the Companies (Prospectus and Allotment of Securities) Rules, 2014 (including any statutory modification or amendment thereto or re-enactment thereof for the time being in force), and subject to the approval of the members of the Company by way of Special Resolution and the Articles of Association of the Company, and subject to such other approvals as may be required under the Companies Act, 2013 or any other applicable law, consent of the Board of Directors of the Company be and is hereby accorded to create, offer for subscription, and to issue and allot:
                    </p>
                    
                    <div class="share-details">
                        <p><strong>Number of Equity Shares:</strong> <span id="prevShareQuantity">________________________</span> (<span id="prevShareQuantityWords">________________________</span> in words)</p>
                        <p><strong>Face Value per Share:</strong> Rs. <span id="prevFaceValue">________________________</span>/-</p>
                        <p><strong>Total Consideration Value:</strong> Rs. <span id="prevTotalValue">________________________</span>/- (Rupees <span id="prevTotalValueWords">________________________ Only</span>)</p>
                        <p>to the following person:</p>
                        <p><strong>Name of the Allottee:</strong> <span id="prevAllotteeName">________________________</span></p>
                        <p><strong>PAN:</strong> <span id="prevPan">________________________</span></p>
                        <p><strong>Address:</strong> <span id="prevAllotteeAddress">________________________</span></p>
                        <p>in respect of the acquisition of the proprietorship business namely <strong><span id="prevAcquisitionBusiness">________________________</span></strong> (Name of Business) for consideration other than cash.</p>
                    </div>
                    
                    <p class="certificate-paragraph">
                        <strong>RESOLVED FURTHER THAT</strong> all the Equity Shares to be issued and allotted pursuant to this resolution shall rank pari passu in all respects with the existing Equity Shares of the Company, including rights to dividend, voting rights, and other entitlements.
                    </p>
                    
                    <p class="certificate-paragraph">
                        <strong>RESOLVED FURTHER THAT</strong> the valuation report obtained from <strong><span id="prevValuerName">________________________</span></strong> (Name of Registered Valuer), a Registered Valuer, for determining the value of the business/assets being acquired and the consideration payable therefor, be and is hereby noted and approved.
                    </p>
                    
                    <p class="certificate-paragraph">
                        <strong>RESOLVED FURTHER THAT</strong> any Director of the Company be and is hereby authorised to:
                    </p>
                    
                    <ul class="resolution-list">
                        <li>Issue and allot the said Equity Shares to the allottee;</li>
                        <li>Convene General Meeting of members to seek approval for the proposed issue and allotment;</li>
                        <li>Execute the Business Transfer Agreement and other necessary documents;</li>
                        <li>File Form PAS-3 (Return of Allotment) and other requisite forms with the Registrar of Companies;</li>
                        <li>Make necessary entries in the Register of Members and other statutory registers;</li>
                        <li>Do all such acts, deeds, matters, and things as may be necessary, proper, or expedient to give effect to this resolution, with power to settle any question, difficulty, or doubt that may arise in regard to such issue and/or allotment."</li>
                    </ul>
                    
                    <div class="certification-section">
                        <p><strong>Certified to be True</strong></p>
                    </div>
                    
                    <div class="signature-section">
                        <p>For <strong id="footerCompanyName">________________</strong></p>
                        <p><strong>(Name of the Company)</strong></p>
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
            <h2 class="info-title">Board Resolution for Issuance of Shares for Non-Cash Consideration</h2>
            <p class="info-subtitle">
                Professional Format Guide for Indian Companies
            </p>
        </div>

        <!-- Introduction -->
        <div class="info-content">
            <h3 class="info-subheading">Introduction</h3>

            <p class="info-text">
                A Board Resolution for Issuance of Shares for Non-Cash Consideration is a formal
                corporate document that records the decision of the Board of Directors to issue
                and allot equity shares in exchange for consideration other than cash. Under the
                Companies Act, 2013, when a company proposes to issue shares for non-cash
                consideration such as acquisition of a business, property, assets, or settlement
                of debts, prior approval of the Board of Directors is mandatory.
            </p>

            <p class="info-text">
                This resolution authorises the company to create, offer for subscription, and
                allot shares to the transferor in lieu of cash payment. It specifies key details
                including the number of shares, face value, name of the allottee, nature of the
                business or assets being acquired, and confirms that the shares shall rank pari
                passu with existing shares. The resolution is subject to shareholder approval
                and must be filed with the Registrar of Companies.
            </p>

            <!-- Benefits -->
            <h3 class="info-subheading">Benefits of Using a Standard Format</h3>

            <p class="info-text">
                Utilising a professionally drafted board resolution format ensures that all
                statutory requirements under the Companies Act, 2013 and related rules are
                properly addressed. A standardised template saves time during business
                acquisition transactions and reduces the risk of procedural or compliance
                errors.
            </p>

            <p class="info-text">
                It also facilitates smoother ROC filings, ensures consistency in corporate
                documentation, and supports compliance with private placement norms and
                valuation requirements.
            </p>

            <!-- Relevance -->
            <h3 class="info-subheading">Relevance to Corporate Transactions</h3>

            <p class="info-text">
                Issuance of shares for non-cash consideration is a significant corporate
                transaction commonly used during acquisitions and restructuring. After Company
                Registration, businesses often expand by acquiring proprietorship firms,
                partnership businesses, or specific assets without immediate cash outflow.
            </p>

            <p class="info-text">
                Following the board resolution, shareholder approval through a special
                resolution under Section 62(1)(c) of the Companies Act, 2013 is generally required.
                Form PAS-3 must be filed with the Registrar of Companies for return of allotment.
            </p>
        </div>

        <!-- Sample Format -->
        <div class="format-section">
            <h3 class="format-title">
                Board Resolution for Issuance of Shares for Non-Cash Consideration – Sample Format
            </h3>

            <p class="format-note">
                <em>[To be printed on Company Letterhead]</em>
            </p>

            <p class="format-text"><strong>Company Name:</strong> _______________________________</p>
            <p class="format-text"><strong>CIN:</strong> _______________________________</p>
            <p class="format-text"><strong>Registered Office:</strong> _______________________________</p>

            <p class="format-text">
                <strong>CERTIFIED TRUE COPY OF THE BOARD RESOLUTION</strong>
            </p>

            <p class="format-text">
                Passed at the Meeting of the Board of Directors of the Company<br>
                <strong>Date:</strong> __.__.______ &nbsp;&nbsp;
                <strong>Time:</strong> ______ (Hours)<br>
                <strong>Venue:</strong> Registered Office of the Company
            </p>

            <p class="format-text">
                <strong>SUBJECT:</strong> Issuance of Shares Pursuant to Acquisition of Business
                for Consideration Other Than Cash
            </p>

            <p class="format-text">
                The Chairman placed before the Board the proposal to create, offer for
                subscription, and to issue and allot Equity Shares in respect of the acquisition
                of business/assets for consideration other than cash. After detailed discussion,
                the Board passed the following resolutions unanimously:
            </p>

            <p class="format-text"><strong>Details of the Business Being Acquired:</strong></p>
            <p class="format-text">Name of the Proprietor/Transferor: ________________________</p>
            <p class="format-text">Name of the Proprietorship/Business: ________________________</p>
            <p class="format-text">Nature of Business: ________________________</p>

            <p class="format-text">
                <strong>RESOLVED THAT</strong> pursuant to the provisions of Section 42 and Section
                62(1)(c) of the Companies Act, 2013 read with applicable rules and subject to the
                approval of members by way of Special Resolution, consent of the Board be and is
                hereby accorded to create, offer for subscription, and issue and allot:
            </p>

            <p class="format-text">Number of Equity Shares: ________________________</p>
            <p class="format-text">Face Value per Share: Rs. ________________________/-</p>
            <p class="format-text">Total Consideration Value: Rs. ________________________/-</p>

            <p class="format-text">
                to the allottee ________________________ in consideration of acquisition of the
                business for consideration other than cash.
            </p>

            <p class="format-text">
                <strong>RESOLVED FURTHER THAT</strong> the equity shares so issued shall rank pari
                passu in all respects with the existing equity shares of the Company.
            </p>

            <p class="format-text">
                <strong>RESOLVED FURTHER THAT</strong> any Director of the Company be and is hereby
                authorised to issue and allot shares, convene general meetings, execute necessary
                agreements, file Form PAS-3 with the ROC, and do all acts necessary to give effect
                to this resolution.
            </p>

            <p class="format-text"><strong>CERTIFIED TRUE COPY</strong></p>
            <p class="format-text">For ________________________ (Company Name)</p>

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
                    1. Is the signature of all directors mandatory?
                </h4>
                <p class="faq-answer">
                    No. The resolution is passed by a majority of directors present and voting
                    at a duly convened Board Meeting. A certified true copy may be signed by an
                    authorised director or company secretary.
                </p>
            </div>

            <div class="faq-item">
                <h4 class="faq-question">
                    2. Does this resolution require professional certification?
                </h4>
                <p class="faq-answer">
                    Professional certification is not mandatory. However, certification may be
                    required while filing Form PAS-3 with the ROC as per applicable rules.
                </p>
            </div>

            <div class="faq-item">
                <h4 class="faq-question">
                    3. Is company letterhead mandatory?
                </h4>
                <p class="faq-answer">
                    Though not mandatory, it is standard corporate practice to prepare board
                    resolutions on company letterhead for authenticity and acceptance by
                    authorities.
                </p>
            </div>

            <div class="faq-item">
                <h4 class="faq-question">
                    4. Who can be an authorised signatory?
                </h4>
                <p class="faq-answer">
                    Any director or the company secretary can act as the authorised signatory
                    for certifying and executing documents related to the resolution.
                </p>
            </div>

            <div class="faq-item">
                <h4 class="faq-question">
                    5. Which approvals are required?
                </h4>
                <p class="faq-answer">
                    A Board Resolution followed by a Special Resolution of shareholders under
                    Section 62(1)(c) of the Companies Act, 2013 is required for issuance of shares
                    for non-cash consideration.
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
    const form = document.getElementById('shareIssuanceForm');
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
    
    // Auto-calculate total value based on share quantity and face value
    const shareQuantityInput = form.querySelector('[name="share_quantity"]');
    const faceValueInput = form.querySelector('[name="face_value"]');
    const totalValueInput = form.querySelector('[name="total_value"]');
    
    function calculateTotalValue() {
        const quantity = parseInt(shareQuantityInput.value) || 0;
        const faceValue = parseInt(faceValueInput.value) || 0;
        const totalValue = quantity * faceValue;
        
        if (quantity > 0 && faceValue > 0) {
            totalValueInput.value = totalValue;
        }
    }
    
    shareQuantityInput.addEventListener('input', calculateTotalValue);
    faceValueInput.addEventListener('input', calculateTotalValue);
    
    // Auto-fill allottee name from transferor name
    const transferorNameInput = form.querySelector('[name="transferor_name"]');
    const allotteeNameInput = form.querySelector('[name="allottee_name"]');
    
    transferorNameInput.addEventListener('blur', function() {
        if (transferorNameInput.value && !allotteeNameInput.value) {
            allotteeNameInput.value = transferorNameInput.value.trim();
        }
    });

    // Inputs for live preview
    const inputs = form.querySelectorAll('input, textarea, select');
    inputs.forEach(input => {
        input.addEventListener('input', updatePreview);
        input.addEventListener('change', updatePreview);
    });

    // Initial preview
    updatePreview();

    // Function to convert numbers to words
    function numberToWords(num) {
        const ones = ['', 'One', 'Two', 'Three', 'Four', 'Five', 'Six', 'Seven', 'Eight', 'Nine', 'Ten', 
                     'Eleven', 'Twelve', 'Thirteen', 'Fourteen', 'Fifteen', 'Sixteen', 'Seventeen', 'Eighteen', 'Nineteen'];
        const tens = ['', '', 'Twenty', 'Thirty', 'Forty', 'Fifty', 'Sixty', 'Seventy', 'Eighty', 'Ninety'];
        
        if (num === 0) return 'Zero';
        
        function convertLessThanThousand(n) {
            if (n === 0) return '';
            
            if (n < 20) {
                return ones[n];
            } else if (n < 100) {
                return tens[Math.floor(n / 10)] + (n % 10 !== 0 ? ' ' + ones[n % 10] : '');
            } else {
                return ones[Math.floor(n / 100)] + ' Hundred' + (n % 100 !== 0 ? ' ' + convertLessThanThousand(n % 100) : '');
            }
        }
        
        // For larger numbers, you would expand this function
        // For now, handling up to 999,999
        if (num < 1000) {
            return convertLessThanThousand(num);
        } else if (num < 100000) {
            return convertLessThanThousand(Math.floor(num / 1000)) + ' Thousand' + (num % 1000 !== 0 ? ' ' + convertLessThanThousand(num % 1000) : '');
        } else if (num < 10000000) {
            return convertLessThanThousand(Math.floor(num / 100000)) + ' Lakh' + (num % 100000 !== 0 ? ' ' + numberToWords(num % 100000) : '');
        } else {
            return convertLessThanThousand(Math.floor(num / 10000000)) + ' Crore' + (num % 10000000 !== 0 ? ' ' + numberToWords(num % 10000000) : '');
        }
    }
    
    // Function to convert currency to words
    function amountToWords(amount) {
        const rupees = Math.floor(amount);
        const paise = Math.round((amount - rupees) * 100);
        
        let words = numberToWords(rupees) + ' Rupees';
        
        if (paise > 0) {
            words += ' and ' + numberToWords(paise) + ' Paise';
        }
        
        return words + ' Only';
    }

    function updatePreview() {
        // Get form values
        const companyName = form.querySelector('[name="company_name"]').value || '________________';
        const cin = form.querySelector('[name="cin"]').value || '________________';
        const registeredOffice = form.querySelector('[name="registered_office"]').value || '________________';
        const meetingDate = form.querySelector('[name="meeting_date"]').value;
        const meetingTime = form.querySelector('[name="meeting_time"]').value || '______';
        const meetingVenue = form.querySelector('[name="meeting_venue"]').value || 'Registered Office of the Company';
        const transferorName = form.querySelector('[name="transferor_name"]').value || '________________________';
        const businessName = form.querySelector('[name="business_name"]').value || '________________________';
        const businessNature = form.querySelector('[name="business_nature"]').value || '________________________';
        const allotteeName = form.querySelector('[name="allottee_name"]').value || '________________________';
        const pan = form.querySelector('[name="pan"]').value || '________________________';
        const allotteeAddress = form.querySelector('[name="allottee_address"]').value || '________________________';
        const shareQuantity = parseInt(form.querySelector('[name="share_quantity"]').value) || 0;
        const faceValue = parseInt(form.querySelector('[name="face_value"]').value) || 0;
        const totalValue = parseInt(form.querySelector('[name="total_value"]').value) || 0;
        const valuerName = form.querySelector('[name="valuer_name"]').value || '________________________';
        const authorizedDirector = form.querySelector('[name="authorized_director"]').value || '________________';
        const designation = form.querySelector('[name="designation"]').value || '________________';
        const din = form.querySelector('[name="din"]').value || '________________';
        const place = form.querySelector('[name="place"]').value || '________________';
        const resolutionDate = form.querySelector('[name="resolution_date"]').value;

        // Update preview elements
        const updateElement = (id, text) => {
            const el = document.getElementById(id);
            if (el) el.textContent = text;
        };

        updateElement('prevCompanyName', companyName);
        updateElement('prevCin', cin);
        updateElement('prevRegisteredOffice', registeredOffice);
        updateElement('prevMeetingVenue', meetingVenue);
        updateElement('prevTransferorName', transferorName);
        updateElement('prevBusinessName', businessName);
        updateElement('prevBusinessNature', businessNature);
        updateElement('prevAllotteeName', allotteeName);
        updateElement('prevPan', pan);
        updateElement('prevAllotteeAddress', allotteeAddress);
        updateElement('prevValuerName', valuerName);
        updateElement('prevAcquisitionBusiness', businessName);
        updateElement('footerCompanyName', companyName);
        updateElement('footerDirectorName', authorizedDirector);
        updateElement('footerDesignation', designation);
        updateElement('footerDin', din);
        updateElement('footerPlace', place);

        // Update share details
        if (shareQuantity > 0) {
            updateElement('prevShareQuantity', shareQuantity.toLocaleString());
            updateElement('prevShareQuantityWords', numberToWords(shareQuantity));
        } else {
            updateElement('prevShareQuantity', '________________________');
            updateElement('prevShareQuantityWords', '________________________');
        }
        
        if (faceValue > 0) {
            updateElement('prevFaceValue', faceValue.toLocaleString());
        } else {
            updateElement('prevFaceValue', '________________________');
        }
        
        if (totalValue > 0) {
            updateElement('prevTotalValue', totalValue.toLocaleString());
            updateElement('prevTotalValueWords', amountToWords(totalValue));
        } else {
            updateElement('prevTotalValue', '________________________');
            updateElement('prevTotalValueWords', '________________________ Only');
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
    
});
</script>
<!--End Js Section -->

@endsection
