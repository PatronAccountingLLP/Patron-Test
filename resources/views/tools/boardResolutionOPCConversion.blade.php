@extends('tools.tool-master')
@section('title')
{{_('Board Resolution for  Conversion of One Person Company (OPC) into Private Limited Company')}}
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
            <h1 class="hero-title">Board Resolution for  <span> Conversion of One Person Company (OPC) into Private Limited Company</span></h1>
            <p class="hero-subtitle">
                Generate a certified Board Resolution for   Conversion of One Person Company (OPC) into Private Limited Company in under 60 seconds.
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
            <h2 class="form-title">Enter OPC & Conversion Details</h2>
            <p class="form-description">
                Fill in the details below to generate a Board Resolution for Conversion of OPC into Private Limited Company.
            </p>
        </div>

        <form id="opcConversionForm" method="POST" action="{{route('br.opc.conversion') }}">
            @csrf

            <div class="form-grid">
                <div class="form-group full-width">
                    <label class="form-label">Company Name (OPC) <span class="required">*</span></label>
                    <input type="text" name="company_name" class="form-control" placeholder="Enter OPC company name" required>
                </div>

                <div class="form-row">
                    <div class="form-group">
                        <label class="form-label">CIN <span class="required">*</span></label>
                        <input type="text" name="cin" class="form-control" placeholder="Enter CIN" required>
                    </div>

                    <div class="form-group">
                        <label class="form-label">Email ID <span class="required">*</span></label>
                        <input type="email" name="email" class="form-control" placeholder="Enter email" required>
                    </div>
                </div>

                <div class="form-group full-width">
                    <label class="form-label">Registered Office Address <span class="required">*</span></label>
                    <textarea name="registered_office" class="form-control" placeholder="Enter registered office address" required></textarea>
                </div>

                <div class="form-row">
                    <div class="form-group">
                        <label class="form-label">Date of Meeting <span class="required">*</span></label>
                        <input type="date" name="meeting_date" class="form-control" required>
                    </div>

                    <div class="form-group">
                        <label class="form-label">Time of Meeting <span class="required">*</span></label>
                        <input type="time" name="meeting_time" class="form-control" required>
                    </div>
                </div>

                <!-- Authorisation Details -->
                <div class="form-group full-width">
                    <label class="form-label" style="font-weight:600;color:#333;border-bottom:1px solid #eee;padding-bottom:8px;margin-bottom:12px;">Authorisation Details</label>
                </div>

                <div class="form-row">
                    <div class="form-group">
                        <label class="form-label">Director Name <span class="required">*</span></label>
                        <input type="text" name="director_name" class="form-control" placeholder="Director name" required>
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
                    <label class="form-label">DIN <span class="required">*</span></label>
                    <input type="text" name="din" class="form-control" placeholder="Enter DIN Number" required>
                </div>

                <div class="form-row">
                    <div class="form-group">
                        <label class="form-label">Place <span class="required">*</span></label>
                        <input type="text" name="place" class="form-control" placeholder="City / Place" required>
                    </div>

                    <div class="form-group">
                        <label class="form-label">Date <span class="required">*</span></label>
                        <input type="date" name="resolution_date" class="form-control" required>
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
                        <p class="preview-subtitle">Board Resolution for Conversion of OPC</p>
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
                        <strong id="prevCompanyName">________________</strong> (OPC)<br>
                        CIN: <strong id="prevCIN">________________</strong>
                    </p>

                    <p class="certificate-paragraph">
                        Date of Meeting: <strong id="prevMeetingDate">__________</strong> at
                        <strong id="prevMeetingTime">__________</strong> Hours at the Registered Office of the Company.
                    </p>

                    <p class="certificate-paragraph">
                        <strong>SUBJECT:</strong> Conversion of One Person Company into Private Limited Company
                    </p>

                    <p class="certificate-paragraph">
                        <strong>RESOLVED THAT</strong> pursuant to the provisions of Section 18 and other applicable provisions of the Companies Act, 2013 read with the Companies (Incorporation) Rules, 2014, the consent of the Board be and is hereby accorded to convert the Company from a One Person Company (OPC) into a Private Limited Company.
                    </p>

                    <p class="certificate-paragraph">
                        <strong>RESOLVED FURTHER THAT</strong> the Memorandum of Association and Articles of Association of the Company be amended to reflect the conversion.
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
            <h2 class="info-title">Board Resolution for Conversion of One Person Company (OPC) into Private Limited Company</h2>
            <p class="info-subtitle">
                Corporate Restructuring Documentation for Indian Companies
            </p>
        </div>

        <!-- Introduction -->
        <div class="info-content">
            <h3 class="info-subheading">Introduction</h3>

            <p class="info-text">
                A Board Resolution for Conversion of One Person Company (OPC) into Private Limited
                Company is a formal corporate document that records the Director's consent to convert
                the existing OPC structure into a Private Limited Company. Under the Companies Act,
                2013, an OPC may voluntarily convert itself into a Private Limited Company or may be
                mandatorily required to convert upon exceeding prescribed thresholds of paid-up
                capital or average annual turnover. The conversion process requires board approval
                and subsequent shareholder consent.
            </p>

            <p class="info-text">
                This resolution formally records the decision to convert and authorises the
                director(s) to file necessary applications and e-Forms with the Registrar of
                Companies. The conversion involves amendment of the Memorandum of Association and
                Articles of Association to reflect the new company structure, including changes to
                the minimum number of members and directors. Once converted, the Private Limited
                Company must maintain at least two directors and two shareholders as per statutory
                requirements.
            </p>

            <!-- Benefits -->
            <h3 class="info-subheading">Benefits of Using a Standard Format</h3>

            <p class="info-text">
                Utilising a professionally drafted board resolution format ensures that all statutory
                requirements under the Companies Act, 2013 are properly addressed. A ready-to-use
                template saves valuable time during the conversion process, reduces the risk of
                procedural errors, and provides a consistent framework for documenting the Board's
                decision.
            </p>

            <p class="info-text">
                Standardised formats help ensure compliance with ROC filing requirements and
                facilitate smoother processing of conversion applications.
            </p>

            <!-- Relevance -->
            <h3 class="info-subheading">Relevance to Company Registration</h3>

            <p class="info-text">
                The conversion of an OPC into a Private Limited Company is a significant corporate
                restructuring. Following the initial Company Registration as an OPC, businesses may
                outgrow the single-member structure or wish to bring in additional investors and
                partners. The conversion process requires filing specific forms with the ROC,
                amending constitutional documents, and complying with applicable provisions.
            </p>

            <p class="info-text">
                Post-conversion, the company must update its GST Registration and other statutory
                registrations to reflect the change in company type.
            </p>
        </div>

        <!-- Sample Format -->
        <div class="format-section">
            <h3 class="format-title">
                Board Resolution for Conversion of OPC into Private Limited Company – Sample Format
            </h3>

            <p class="format-text">
                <strong>Company Name:</strong> __________________________________________ (OPC)
            </p>

            <p class="format-text">
                <strong>CIN:</strong> _______________________________________
            </p>

            <p class="format-text">
                <strong>Registered Office:</strong> _______________________________________
            </p>

            <p class="format-text">
                <strong>Email:</strong> _______________________________________
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
                <strong>SUBJECT: CONVERSION OF ONE PERSON COMPANY INTO PRIVATE LIMITED COMPANY</strong>
            </p>

            <p class="format-text">
                <strong>"RESOLVED THAT</strong> pursuant to the provisions of Section 18 and other applicable provisions of the Companies Act, 2013 read with the Companies (Incorporation) Rules, 2014 (as amended from time to time), and subject to the approval of the Registrar of Companies and the shareholders of the Company, the consent of the Board of Directors be and is hereby accorded to convert the Company from a One Person Company (OPC) into a Private Limited Company.
            </p>

            <p class="format-text">
                <strong>RESOLVED FURTHER THAT</strong> the Memorandum of Association and Articles of Association of the Company be amended to reflect the conversion from One Person Company to Private Limited Company, including all necessary changes to comply with the requirements applicable to a Private Limited Company under the Companies Act, 2013.
            </p>

            <p class="format-text">
                <strong>RESOLVED FURTHER THAT</strong> any Director of the Company be and is hereby authorised and empowered to:
            </p>

            <ul class="format-list">
                <li>File Form INC-6 (Application for Conversion of OPC into Private/Public Company) and all other necessary e-Forms with the Registrar of Companies;</li>
                <li>Obtain necessary approvals from the Registrar of Companies and other statutory authorities;</li>
                <li>Execute and submit amended Memorandum of Association and Articles of Association;</li>
                <li>Make necessary applications for change of name (if required) and other consequential changes;</li>
                <li>Do all such acts, deeds, matters, and things as may be necessary, proper, or expedient for giving effect to this resolution and to complete the conversion process."</li>
            </ul>

            <p class="format-text">
                <strong>CERTIFIED TRUE COPY</strong>
            </p>

            <p class="format-text">
                For ________________________________________
            </p>

            <p class="format-text">
                (Name of the Company)
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
        </div>

        <!-- FAQ -->
        <div class="faq-section">
            <h3 class="faq-title">Frequently Asked Questions</h3>

            <div class="faq-item">
                <h4 class="faq-question">
                    1. Is the board resolution format for conversion of OPC into Private Limited Company different for different companies?
                </h4>
                <p class="faq-answer">
                    No, the basic structure and legal content of the board resolution remains the same
                    for all OPCs seeking conversion. However, company-specific details such as company
                    name, CIN, registered office address, date of meeting, and names of directors will
                    differ. The resolution must reference Section 18 of the Companies Act, 2013 and
                    authorise filing of Form INC-6 with the ROC.
                </p>
            </div>

            <div class="faq-item">
                <h4 class="faq-question">
                    2. Is the format for conversion of OPC into Private Limited Company to be on company letterhead?
                </h4>
                <p class="faq-answer">
                    While there is no strict legal requirement mandating the use of company letterhead,
                    it is standard corporate practice to present board resolutions on official
                    letterhead. Using letterhead adds authenticity to the document and facilitates easy
                    identification by the Registrar of Companies, banks, and other stakeholders. It
                    creates a professional appearance and aids in document verification.
                </p>
            </div>

            <div class="faq-item">
                <h4 class="faq-question">
                    3. Who can be considered as an authorized signatory for the board resolution for conversion of OPC into Private Limited Company?
                </h4>
                <p class="faq-answer">
                    In an OPC, the sole director is typically the authorised signatory for the board
                    resolution. The resolution authorises this director (or directors, if additional
                    directors have been appointed) to file Form INC-6 and other necessary forms with
                    the ROC, execute amended constitutional documents, and complete all procedural
                    requirements for the conversion process.
                </p>
            </div>

            <div class="faq-item">
                <h4 class="faq-question">
                    4. Is the signature of all directors mandatory on Board resolution format for conversion of OPC into Private Limited Company?
                </h4>
                <p class="faq-answer">
                    An OPC typically has only one director (though it may have more). The resolution
                    is passed by the director(s) present at a duly convened meeting with quorum. The
                    certified true copy may be signed by the sole director or any authorised director.
                    It is not mandatory for all directors (if more than one) to sign the certified
                    copy of the resolution.
                </p>
            </div>

            <div class="faq-item">
                <h4 class="faq-question">
                    5. Does the Board Resolution format for conversion of OPC into Private Limited Company need to be certified by a professional?
                </h4>
                <p class="faq-answer">
                    There is no statutory requirement for the board resolution to be certified by an
                    external professional. The certified true copy may be signed by the director(s)
                    of the company. However, for filing Form INC-6 with the ROC, certification by a
                    practising Company Secretary may be required as per the form requirements. It is
                    advisable to engage a professional for ensuring proper compliance.
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

    const form = document.getElementById('opcConversionForm');
    const downloadPdfBtn = document.getElementById('downloadPdfBtn');
    const alertContainer = document.getElementById('alertContainer');

    // Set default date
    const today = new Date().toISOString().split('T')[0];
    const dateInput = form.querySelector('[name="meeting_date"]');
    const resolutionDateInput = form.querySelector('[name="resolution_date"]');
    if (dateInput) {
        dateInput.value = today;
    }
    if (resolutionDateInput) {
        resolutionDateInput.value = today;
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
        const meetingTime = form.querySelector('[name="meeting_time"]').value || '__________';
        const place = form.querySelector('[name="place"]').value || '________________';
        const resolutionDate = form.querySelector('[name="resolution_date"]').value;

        // Update preview text
        const elCompanyName = document.getElementById('prevCompanyName');
        const elCIN = document.getElementById('prevCIN');
        const elMeetingDate = document.getElementById('prevMeetingDate');
        const elMeetingTime = document.getElementById('prevMeetingTime');
        const elFooterCompanyName = document.getElementById('footerCompanyName');
        const elFooterPlace = document.getElementById('footerPlace');
        const elFooterDate = document.getElementById('footerDate');

        if (elCompanyName) elCompanyName.textContent = companyName;
        if (elCIN) elCIN.textContent = cin;
        if (elFooterCompanyName) elFooterCompanyName.textContent = companyName;
        if (elFooterPlace) elFooterPlace.textContent = place;

        if (meetingDate && elMeetingDate) {
            const formattedDate = new Date(meetingDate).toLocaleDateString('en-IN', {
                day: '2-digit',
                month: 'long',
                year: 'numeric'
            });
            elMeetingDate.textContent = formattedDate;
        } else if (elMeetingDate) {
            elMeetingDate.textContent = '__________';
        }

        if (meetingTime && elMeetingTime) {
            elMeetingTime.textContent = meetingTime;
        }

        if (resolutionDate && elFooterDate) {
            const formattedResDate = new Date(resolutionDate).toLocaleDateString('en-IN', {
                day: '2-digit',
                month: 'long',
                year: 'numeric'
            });
            elFooterDate.textContent = formattedResDate;
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
