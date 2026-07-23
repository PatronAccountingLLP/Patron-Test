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
            <h1 class="hero-title"> Board Resolution for<span> Approval of ESOP Scheme</span></h1>
            <p class="hero-subtitle">
                Generate a certified Board Resolution for Approval of ESOP Scheme in under 60 seconds.
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
            <h2 class="form-title">Enter Company & ESOP Scheme Details</h2>
            <p class="form-description">
                Fill in the details below to generate a Board Resolution for Approval of Employee Stock Option Plan (ESOP) Scheme.
            </p>
        </div>

        <form id="esopApprovalForm" method="POST" action="{{route('br.esop') }}">
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
                    <label class="form-label">Company Email <span class="required">*</span></label>
                    <input type="email" name="company_email" class="form-control" placeholder="Enter company email" required>
                </div>

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

                <div class="form-group full-width">
                    <label class="form-label">Meeting Venue <span class="required">*</span></label>
                    <input type="text" name="meeting_venue" class="form-control" placeholder="Enter meeting venue/address" required>
                </div>

                <div class="form-group full-width">
                    <label class="form-label">ESOP Scheme Name <span class="required">*</span></label>
                    <input type="text" name="scheme_name" class="form-control" placeholder="Enter ESOP scheme name" required>
                </div>

                <div class="form-row">
                    <div class="form-group">
                        <label class="form-label">Maximum Options (Number) <span class="required">*</span></label>
                        <input type="text" name="max_options_number" class="form-control" placeholder="e.g., 10000" required>
                    </div>
                    <div class="form-group">
                        <label class="form-label">Maximum Options (In Words) <span class="required">*</span></label>
                        <input type="text" name="max_options_words" class="form-control" placeholder="e.g., Ten Thousand" required>
                    </div>
                </div>

                <div class="form-group full-width">
                    <label class="form-label">Option Name <span class="required">*</span></label>
                    <input type="text" name="option_name" class="form-control" placeholder="Enter option name/title" required>
                </div>

                <div class="form-row">
                    <div class="form-group">
                        <label class="form-label">Authorised Signatory Name <span class="required">*</span></label>
                        <input type="text" name="authorized_name" class="form-control" placeholder="Enter signatory name" required>
                    </div>
                    <div class="form-group">
                        <label class="form-label">Designation <span class="required">*</span></label>
                        <div class="select-wrapper">
                            <select name="designation" class="form-control form-select" required>
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
                        <label class="form-label">DIN Number <span class="required">*</span></label>
                        <input type="text" name="din" class="form-control" placeholder="Enter DIN Number" required>
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
                        <p class="preview-subtitle">Board Resolution for Approval of ESOP Scheme</p>
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
                        <p><strong>Email: </strong><span id="prevEmail">________________</span></p>
                    </div>

                    <p class="certificate-paragraph">
                        <strong>Date of Meeting: </strong><span id="prevMeetingDate">__________</span><br>
                        <strong>Time: </strong><span id="prevMeetingTime">______</span> (Hours)<br>
                        <strong>Venue: </strong><span id="prevMeetingVenue">________________</span>
                    </p>

                    <p class="certificate-paragraph">
                        <strong>SUBJECT: APPROVAL OF EMPLOYEE STOCK OPTION PLAN (ESOP) SCHEME</strong>
                    </p>

                    <p class="certificate-paragraph">
                        <strong>"RESOLVED THAT</strong> pursuant to the provisions of Section 62(1)(b) and other applicable provisions, if any, of the Companies Act, 2013 and the Rules framed thereunder, and in accordance with the Memorandum and Articles of Association of the Company (including any statutory amendment, modification, or re-enactment thereof for the time being in force), and subject to such other approvals, permissions, and sanctions as may be necessary, and such conditions and modifications as may be prescribed or imposed by the members in general meeting, the consent of the Board be and is hereby accorded to the formulation and implementation of:
                    </p>

                    <p class="certificate-paragraph">
                        <strong>Scheme Name: </strong>"<span id="prevSchemeName">________________</span>"
                        (hereinafter referred to as "the Scheme")
                    </p>

                    <p class="certificate-paragraph">
                        and to create, grant, offer, issue, and allot from time to time, in one or more tranches, stock options not exceeding:
                    </p>

                    <p class="certificate-paragraph">
                        <strong>Maximum Number of Options: </strong><span id="prevMaxOptionsNumber">__________</span> (<span id="prevMaxOptionsWords">__________</span> in words)<br>
                        <strong>Option Name: </strong><span id="prevOptionName">________________</span>
                    </p>

                    <p class="certificate-paragraph">
                        to or for the benefit of employees and Directors (excluding Independent Directors) of the Company, for such number of stock options, equity shares, and/or equity-linked instruments including any other instruments or securities which could give rise to the issue of equity shares (hereinafter collectively referred to as "Securities") of the Company, at such price and on such terms and conditions as mentioned in the Scheme.
                    </p>

                    <p class="certificate-paragraph">
                        <strong>RESOLVED FURTHER THAT</strong> the new Equity Shares to be issued and allotted by the Company pursuant to the exercise of stock options under the Scheme shall rank pari passu in all respects with the then existing Equity Shares of the Company.
                    </p>

                    <p class="certificate-paragraph">
                        <strong>RESOLVED FURTHER THAT</strong> any Director or the Company Secretary of the Company be and are hereby authorised, jointly and/or severally, to:
                    </p>

                    <ul class="certificate-list">
                        <li>Do all such acts, deeds, matters, and things as may be necessary or expedient for implementing the Scheme;</li>
                        <li>File necessary documents, intimations, and e-forms with regulatory authorities;</li>
                        <li>Settle any questions, difficulties, or doubts that may arise in connection with the ESOP Scheme without requiring further approval from the Board.</li>
                    </ul>

                    <p class="certificate-paragraph">
                        Certified to be a True Copy
                    </p>

                    <div class="certificate-signature">
                        <p>For <strong id="footerCompanyName">________________</strong></p>
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
            <h2 class="info-title">Board Resolution for Approval of ESOP Scheme</h2>
            <p class="info-subtitle">
                Professional Format Guide for Corporate Compliance
            </p>
        </div>

        <!-- Introduction -->
        <div class="info-content">
            <h3 class="info-subheading">Introduction</h3>

            <p class="info-text">
                A Board Resolution for Approval of Employee Stock Option Plan (ESOP) Scheme is a
                formal corporate document that records the consent of the Board of Directors to
                formulate and implement an employee stock option programme. Under the Companies
                Act, 2013, companies proposing to grant stock options to employees and directors
                must obtain prior approval of the Board before launching such schemes.
            </p>

            <p class="info-text">
                ESOPs are a strategic tool for attracting, retaining, and motivating key talent by
                offering an opportunity to participate in the company’s equity. This resolution
                forms the foundation for subsequent shareholder approval and specifies key details
                such as the scheme name, number of options, eligible employees, and authority for
                implementation. It is commonly required during statutory audits and regulatory
                disclosures.
            </p>

            <!-- Benefits -->
            <h3 class="info-subheading">Benefits of Using a Standard Format</h3>

            <p class="info-text">
                Using a professionally drafted board resolution format ensures that all statutory
                requirements are properly documented. A standardised template reduces procedural
                errors, saves time during board meetings, and provides a consistent structure that
                can be customised to suit specific ESOP parameters.
            </p>

            <p class="info-text">
                Standard formats also support smoother regulatory scrutiny and shareholder approval
                processes.
            </p>

            <!-- Relevance -->
            <h3 class="info-subheading">Relevance to Corporate Compliance</h3>

            <p class="info-text">
                Implementation of an ESOP Scheme involves multiple compliance requirements.
                Following board approval, companies must obtain shareholder approval through a
                special resolution and disclose scheme details in the Directors’ Report and
                financial statements.
            </p>

            <p class="info-text">
                For newly incorporated companies, an ESOP scheme can be an effective tool for
                building a committed workforce. Proper documentation of the board resolution
                supports ongoing secretarial, audit, and compliance obligations.
            </p>
        </div>

        <!-- Sample Format -->
        <div class="format-section">
            <h3 class="format-title">
                Board Resolution for Approval of ESOP Scheme – Sample Format
            </h3>

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
                Passed at the Meeting of the Board of Directors of the Company held on
                __________ (Date) at __________ (Time) at __________ (Venue)
            </p>

            <p class="format-text">
                <strong>SUBJECT:</strong> Approval of Employee Stock Option Plan (ESOP) Scheme
            </p>

            <p class="format-text">
                <strong>RESOLVED THAT</strong> pursuant to the provisions of Section 62(1)(b) and
                other applicable provisions of the Companies Act, 2013 and the Rules framed
                thereunder, and in accordance with the Memorandum and Articles of Association of
                the Company, the consent of the Board be and is hereby accorded to formulate and
                implement the following Employee Stock Option Plan:
            </p>

            <p class="format-text">
                <strong>Scheme Name:</strong> “______________________________”
            </p>

            <p class="format-text">
                <strong>Maximum Number of Options:</strong> __________ (__________ in words)
            </p>

            <p class="format-text">
                <strong>Option Name:</strong> _______________________________
            </p>

            <p class="format-text">
                to create, grant, offer, issue, and allot stock options to eligible employees
                and Directors (excluding Independent Directors) of the Company, on such terms
                and conditions as set out in the Scheme.
            </p>

            <p class="format-text">
                <strong>RESOLVED FURTHER THAT</strong> the Equity Shares issued pursuant to the
                exercise of stock options under the Scheme shall rank pari passu in all respects
                with the existing Equity Shares of the Company.
            </p>

            <p class="format-text">
                <strong>RESOLVED FURTHER THAT</strong> any Director or the Company Secretary of
                the Company be and are hereby authorised, jointly and/or severally, to take all
                necessary actions, file required forms and documents, and resolve any matters
                arising in connection with the implementation of the ESOP Scheme.
            </p>

            <p class="format-text">
                <strong>Certified to be a True Copy</strong>
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
                    1. Is the signature of all directors mandatory on the board resolution for ESOP?
                </h4>
                <p class="faq-answer">
                    No. The resolution is passed by a majority of directors present at the board
                    meeting. A certified true copy may be signed by an authorised director or the
                    company secretary.
                </p>
            </div>

            <div class="faq-item">
                <h4 class="faq-question">
                    2. Does the board resolution for ESOP require professional certification?
                </h4>
                <p class="faq-answer">
                    Professional certification is not mandatory. However, certification by a
                    practising Company Secretary may be requested for regulatory filings or
                    third-party verification.
                </p>
            </div>

            <div class="faq-item">
                <h4 class="faq-question">
                    3. Is shareholder approval required after board approval?
                </h4>
                <p class="faq-answer">
                    Yes. After board approval, shareholder approval through a special resolution
                    at a general meeting is mandatory for implementation of the ESOP Scheme.
                </p>
            </div>

            <div class="faq-item">
                <h4 class="faq-question">
                    4. Who can sign the certified copy of the ESOP resolution?
                </h4>
                <p class="faq-answer">
                    Any authorised director or the company secretary may sign the certified true
                    copy of the resolution.
                </p>
            </div>

            <div class="faq-item">
                <h4 class="faq-question">
                    5. Which resolution is required for approval of ESOP Scheme?
                </h4>
                <p class="faq-answer">
                    An ordinary resolution at the board meeting is required initially, followed
                    by a special resolution of shareholders. Listed companies must also comply
                    with applicable SEBI regulations.
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

    const form = document.getElementById('esopApprovalForm');
    const downloadPdfBtn = document.getElementById('downloadPdfBtn');

    // Set default date
    const today = new Date().toISOString().split('T')[0];
    const dateInput = form.querySelector('[name="meeting_date"]');
    if (dateInput) {
        dateInput.value = today;
    }

    // Set default time (11:00 AM)
    const timeInput = form.querySelector('[name="meeting_time"]');
    if (timeInput && !timeInput.value) {
        timeInput.value = "11:00";
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
        const officeAddress = form.querySelector('[name="registered_office"]').value || '________________';
        const email = form.querySelector('[name="company_email"]').value || '________________';
        const meetingDate = form.querySelector('[name="meeting_date"]').value;
        const meetingTime = form.querySelector('[name="meeting_time"]').value || '______';
        const meetingVenue = form.querySelector('[name="meeting_venue"]').value || '________________';
        const schemeName = form.querySelector('[name="scheme_name"]').value || '________________';
        const maxOptionsNumber = form.querySelector('[name="max_options_number"]').value || '__________';
        const maxOptionsWords = form.querySelector('[name="max_options_words"]').value || '__________';
        const optionName = form.querySelector('[name="option_name"]').value || '________________';
        const signatoryName = form.querySelector('[name="authorized_name"]').value || '________________';
        const designation = form.querySelector('[name="designation"]').value || '________________';
        const din = form.querySelector('[name="din"]').value || '________________';
        const place = form.querySelector('[name="place"]').value || '________________';

        // Update preview text
        const elCompany = document.getElementById('prevCompanyName');
        const elCIN = document.getElementById('prevCIN');
        const elOfficeAddress = document.getElementById('prevOfficeAddress');
        const elEmail = document.getElementById('prevEmail');
        const elMeetingDate = document.getElementById('prevMeetingDate');
        const elMeetingTime = document.getElementById('prevMeetingTime');
        const elMeetingVenue = document.getElementById('prevMeetingVenue');
        const elSchemeName = document.getElementById('prevSchemeName');
        const elMaxOptionsNumber = document.getElementById('prevMaxOptionsNumber');
        const elMaxOptionsWords = document.getElementById('prevMaxOptionsWords');
        const elOptionName = document.getElementById('prevOptionName');
        const elFooterCompany = document.getElementById('footerCompanyName');
        const elFooterSignatoryName = document.getElementById('footerSignatoryName');
        const elFooterDesignation = document.getElementById('footerDesignation');
        const elFooterDIN = document.getElementById('footerDIN');
        const elFooterDate = document.getElementById('footerDate');
        const elFooterPlace = document.getElementById('footerPlace');

        if (elCompany) elCompany.textContent = companyName;
        if (elCIN) elCIN.textContent = cin;
        if (elOfficeAddress) elOfficeAddress.textContent = officeAddress;
        if (elEmail) elEmail.textContent = email;
        if (elMeetingDate) elMeetingDate.textContent = meetingDate ? formatDate(meetingDate) : '__________';
        if (elMeetingTime) elMeetingTime.textContent = meetingTime;
        if (elMeetingVenue) elMeetingVenue.textContent = meetingVenue;
        if (elSchemeName) elSchemeName.textContent = schemeName;
        if (elMaxOptionsNumber) elMaxOptionsNumber.textContent = maxOptionsNumber;
        if (elMaxOptionsWords) elMaxOptionsWords.textContent = maxOptionsWords;
        if (elOptionName) elOptionName.textContent = optionName;
        if (elFooterCompany) elFooterCompany.textContent = companyName;
        if (elFooterSignatoryName) elFooterSignatoryName.textContent = signatoryName;
        if (elFooterDesignation) elFooterDesignation.textContent = designation;
        if (elFooterDIN) elFooterDIN.textContent = din;
        if (elFooterPlace) elFooterPlace.textContent = place;

        if (meetingDate && elFooterDate) {
            const formattedDate = new Date(meetingDate).toLocaleDateString('en-IN', {
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

    function formatDate(dateString) {
        const date = new Date(dateString);
        return date.toLocaleDateString('en-IN', {
            day: '2-digit',
            month: '2-digit',
            year: 'numeric'
        }).replace(/\//g, '.');
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
    // form.addEventListener('submit', function(e) {
    //     e.preventDefault();
        
    //     const submitBtn = document.getElementById('downloadPdfBtn');
    //     const btnText = submitBtn.querySelector('.btn-text');
    //     const spinner = submitBtn.querySelector('.spinner');
        
    //     btnText.textContent = 'Generating Document...';
    //     spinner.classList.remove('d-none');
    //     submitBtn.disabled = true;
        
    //     // Submit the form
    //     this.submit();
    // });
});
</script>
<!--End Js Section -->
@endsection
