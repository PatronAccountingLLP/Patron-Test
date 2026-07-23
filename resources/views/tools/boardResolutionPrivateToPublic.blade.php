@extends('tools.tool-master')
@section('title')
{{_(' Board Resolution for Conversion of Private Company into Public Company
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
            <h1 class="hero-title"> <span> Board Resolution for Conversion of Private Company into Public Company
</span></h1>
            <p class="hero-subtitle">
                Generate a certified Board Resolution for Conversion of Private Company into Public Company
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
            <h2 class="form-title">Enter Conversion Details</h2>
            <p class="form-description">
                Fill in the details below to generate a Board Resolution for Conversion of Private Company into Public Company.
            </p>
        </div>

        <form id="conversionForm" method="POST" action="{{ route('br.conversion.private.to.public') }}">
            @csrf

            <div class="form-grid">
                <!-- Company Details -->
                <div class="form-group full-width">
                    <label class="form-label">Company Name (Existing) <span class="required">*</span></label>
                    <input type="text" name="company_name" class="form-control" placeholder="e.g., ABC Private Limited" required>
                </div>
                <div class="form-group full-width">
                    <label class="form-label">CIN <span class="required">*</span></label>
                    <input type="text" name="cin" class="form-control" placeholder="Enter CIN" required>
                </div>
                <div class="form-group full-width">
                    <label class="form-label">Registered Office Address <span class="required">*</span></label>
                    <textarea name="registered_office" class="form-control" placeholder="Enter complete address" required></textarea>
                </div>
                <div class="form-group full-width">
                    <label class="form-label">Company Email <span class="required">*</span></label>
                    <input type="email" name="email" class="form-control" placeholder="Enter company email" required>
                </div>

                <!-- Meeting Details -->
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

                <!-- Director Details -->
                <div class="form-group full-width">
                    <label class="form-label">Name of Director <span class="required">*</span></label>
                    <input type="text" name="director_name" class="form-control" placeholder="Enter director name" required>
                </div>

                <!-- Proposed Name -->
                <div class="form-group full-width">
                    <label class="form-label">Proposed New Name (without "Private") <span class="required">*</span></label>
                    <input type="text" name="proposed_name" class="form-control" placeholder="e.g., ABC Limited" required>
                </div>

                <!-- Signatory Details -->
                <div class="form-row">
                    <div class="form-group">
                        <label class="form-label">Signatory Name <span class="required">*</span></label>
                        <input type="text" name="signatory_name" class="form-control" placeholder="Enter name" required>
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
                        <label class="form-label">DIN <span class="required">*</span></label>
                        <input type="text" name="din" class="form-control" placeholder="Enter DIN" required>
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
                        <p class="preview-subtitle">Board Resolution for Conversion of Private Company into Public Company</p>
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
                        <p><strong id="previewCompanyName">________________</strong></p>
                        <p><strong>CIN: </strong><span id="previewCIN">________________</span></p>
                        <p><strong>Registered Office: </strong><span id="previewRegOffice">________________</span></p>
                        <p><strong>Email: </strong><span id="previewEmail">________________</span></p>
                    </div>

                    <p class="certificate-paragraph">
                        <strong>Date of Meeting: </strong><span id="previewMeetingDate">__________</span><br>
                        <strong>Time: </strong><span id="previewMeetingTime">______</span> (Hours)<br>
                        <strong>Venue: </strong>Registered Office of the Company at <span id="previewRegOfficeVenue">________________</span>
                    </p>

                    <p class="certificate-paragraph">
                        <strong>SUBJECT: CONVERSION OF PRIVATE LIMITED COMPANY INTO PUBLIC LIMITED COMPANY</strong>
                    </p>

                    <p class="certificate-paragraph">
                        The Director, Mr./Ms. <strong><span id="previewDirectorName">________________</span></strong>, informed the Board that for better management of the company's business operations, expansion of business activities, access to capital markets, and to enable a wider shareholding base, it is proposed to convert the Company from a Private Limited Company to a Public Limited Company.
                    </p>

                    <p class="certificate-paragraph">
                        <strong>"RESOLVED THAT</strong> pursuant to the provisions of Section 14 of the Companies Act, 2013 read with the rules made thereunder, and any other applicable provisions as amended from time to time, subject to such approvals and permissions from appropriate authorities and subject to the approval of the members/shareholders of the Company at a General Meeting by way of passing a Special Resolution, the consent of the Board of Directors of the Company be and is hereby accorded to convert this Company from a Private Limited Company to a Public Limited Company.
                    </p>

                    <p class="certificate-paragraph">
                        <strong>RESOLVED FURTHER THAT</strong> the name of the Company be and is hereby proposed to be changed from:<br>
                        <strong>Existing Name:</strong> <span id="previewExistingName">________________</span><br>
                        <strong>Proposed Name:</strong> <span id="previewProposedName">________________</span><br>
                        by removing the word "Private" from the existing name of the Company.
                    </p>

                    <p class="certificate-paragraph">
                        <strong>RESOLVED FURTHER THAT</strong> the word "Private" be and is hereby proposed to be deleted from the name of the Company wherever appearing in the Memorandum of Association and Articles of Association of the Company, subject to the approval of the members at the General Meeting.
                    </p>

                    <p class="certificate-paragraph">
                        <strong>RESOLVED FURTHER THAT</strong> the Articles of Association of the Company be and are hereby proposed to be altered to remove the restrictions applicable to a Private Limited Company and to include provisions applicable to a Public Limited Company, subject to the approval of the members at the General Meeting.
                    </p>

                    <p class="certificate-paragraph">
                        <strong>RESOLVED FURTHER THAT</strong> any Director of the Company be and is hereby authorised to:
                    </p>
                    <ul class="certificate-list">
                        <li>Convene the General Meeting of the members for passing the Special Resolution;</li>
                        <li>File all necessary forms, applications, and documents with the Registrar of Companies;</li>
                        <li>Make necessary amendments to the Memorandum and Articles of Association;</li>
                        <li>Apply for fresh Certificate of Incorporation consequent to conversion;</li>
                        <li>Do all such acts, deeds, matters, and things as may be necessary, proper, or expedient to give effect to this resolution."
                        </li>
                    </ul>

                    <div class="certificate-signature">
                        <p><strong>CERTIFIED TO BE TRUE</strong></p>
                        <p>For <strong id="footerCompanyName">________________</strong><br>
                        (Name of the Company)</p>
                        <p><strong>Signature:</strong> _________________________<br>
                        <strong>Name:</strong> <span id="footerSignatoryName">________________</span><br>
                        <strong>Designation:</strong> <span id="footerDesignation">________________</span><br>
                        <strong>DIN:</strong> <span id="footerDIN">________________</span></p>
                    </div>
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
            <h2 class="info-title">Board Resolution for Conversion of Private Company into Public Company</h2>
            <p class="info-subtitle">
                Standard Board Resolution Template for Corporate Conversion
            </p>
        </div>

        <!-- Introduction -->
        <div class="info-content">
            <h3 class="info-subheading">Introduction</h3>
            <p class="info-text">
                A Board Resolution for Conversion of Private Company into Public Company is a formal corporate document that records the Board of Directors' decision to initiate the process of converting a private limited company into a public limited company. Under Section 14 of the Companies Act, 2013, a private company may convert itself into a public company by altering its Articles of Association with the approval of the members through a special resolution. This conversion enables the company to offer shares to the public, access capital markets, and expand its shareholder base.
            </p>
            <p class="info-text">
                The conversion process requires the Board to first pass a resolution recommending the conversion, followed by a special resolution passed by shareholders at a general meeting. The company must then alter its Memorandum and Articles of Association, change its name by removing the word 'Private', and file the necessary forms with the Registrar of Companies. The Board resolution authorises the directors to take all necessary steps including filing applications, making alterations to constitutional documents, and complying with the requirements applicable to public companies.
            </p>
        </div>

        <!-- Benefits -->
        <div class="info-content">
            <h3 class="info-subheading">Benefits of Using a Standard Format</h3>
            <p class="info-text">
                Utilising a professionally drafted board resolution format ensures that all statutory requirements under the Companies Act, 2013 are properly addressed. A ready-to-use template saves valuable time during the conversion process, reduces the risk of procedural errors, and provides a consistent framework for documenting Board decisions. Standardised formats facilitate smoother ROC filings and ensure proper compliance with conversion requirements.
            </p>
        </div>

        <!-- Relevance -->
        <div class="info-content">
            <h3 class="info-subheading">Relevance to Corporate Restructuring</h3>
            <p class="info-text">
                Following Company Registration as a private limited company, businesses may choose to convert to a public company as they grow and require access to public capital markets. The conversion process involves multiple filings with the Registrar of Companies and compliance with stricter governance norms applicable to public companies. If the company has GST Registration, the change in company status and name must be updated in GST records through amendment applications. The conversion also triggers additional compliance requirements including appointment of independent directors and formation of various committees.
            </p>
        </div>

        <!-- Sample Board Resolution Format -->
        <div class="format-section">
            <h3 class="format-title">Board Resolution for Conversion of Private Company into Public Company – Sample Format</h3>

            <p class="format-text">
                Company Name: _______________________________________ <br>
                CIN: _______________________________________ <br>
                Registered Office: _______________________________________ <br>
                Email: _______________________________________
            </p>

            <p class="format-text">
                CERTIFIED TRUE COPY OF THE BOARD RESOLUTION<br>
                Passed at the Meeting of the Board of Directors of the Company<br>
                Date of Meeting: _______________________ <br>
                Time: _______________________ <br>
                Venue: Registered Office of the Company at _______________________
            </p>

            <p class="format-text">
                SUBJECT: CONVERSION OF PRIVATE LIMITED COMPANY INTO PUBLIC LIMITED COMPANY
            </p>

            <p class="format-text">
                The Director, Mr./Ms. ________________________ (Name of Director), informed the Board that for better management of the company's business operations, expansion of business activities, access to capital markets, and to enable a wider shareholding base, it is proposed to convert the Company from a Private Limited Company to a Public Limited Company.
            </p>

            <p class="format-text">
                "RESOLVED THAT pursuant to the provisions of Section 14 of the Companies Act, 2013 read with the rules made thereunder, and any other applicable provisions as amended from time to time, subject to such approvals and permissions from appropriate authorities and subject to the approval of the members/shareholders of the Company at a General Meeting by way of passing a Special Resolution, the consent of the Board of Directors of the Company be and is hereby accorded to convert this Company from a Private Limited Company to a Public Limited Company.
            </p>

            <p class="format-text">
                RESOLVED FURTHER THAT the name of the Company be and is hereby proposed to be changed from:<br>
                Existing Name: ________________________ Private Limited<br>
                Proposed Name: ________________________ Limited<br>
                by removing the word "Private" from the existing name of the Company.
            </p>

            <p class="format-text">
                RESOLVED FURTHER THAT the word "Private" be and is hereby proposed to be deleted from the name of the Company wherever appearing in the Memorandum of Association and Articles of Association of the Company, subject to the approval of the members at the General Meeting.
            </p>

            <p class="format-text">
                RESOLVED FURTHER THAT the Articles of Association of the Company be and are hereby proposed to be altered to remove the restrictions applicable to a Private Limited Company and to include provisions applicable to a Public Limited Company, subject to the approval of the members at the General Meeting.
            </p>

            <p class="format-text">
                RESOLVED FURTHER THAT any Director of the Company be and is hereby authorised to:<br>
                1. Convene the General Meeting of the members for passing the Special Resolution;<br>
                2. File all necessary forms, applications, and documents with the Registrar of Companies;<br>
                3. Make necessary amendments to the Memorandum and Articles of Association;<br>
                4. Apply for fresh Certificate of Incorporation consequent to conversion;<br>
                5. Do all such acts, deeds, matters, and things as may be necessary, proper, or expedient to give effect to this resolution."
            </p>

            <p class="format-text">
                CERTIFIED TO BE TRUE<br>
                For ________________________________________<br>
                (Name of the Company)<br>
                Signature: __________________________<br>
                Name: __________________________<br>
                Designation: __________________________<br>
                DIN: __________________________
            </p>
        </div>

        <!-- FAQ -->
        <div class="faq-section">
            <h3 class="faq-title">Frequently Asked Questions</h3>

            <div class="faq-item">
                <h4 class="faq-question">1. Is the board resolution format for the conversion of private limited company into public company different for different companies?</h4>
                <p class="faq-answer">
                    No, the board resolution format for conversion of a private limited company into a public company is generally the same for all companies. However, the specific details such as company name, CIN, registered office address, proposed new name, and director details will vary based on the individual company. The essential legal framework and resolution structure remain consistent across all conversions.
                </p>
            </div>

            <div class="faq-item">
                <h4 class="faq-question">2. Is the format for the conversion of private limited company into public company to be on company letterhead?</h4>
                <p class="faq-answer">
                    While there is no strict statutory requirement, it is standard corporate practice and highly recommended to issue the board resolution on the company's official letterhead. The letterhead provides authenticity, includes essential company details (name, CIN, registered office), and demonstrates formal corporate documentation. It is particularly important for resolutions submitted to ROC and other regulatory authorities.
                </p>
            </div>

            <div class="faq-item">
                <h4 class="faq-question">3. Who can be considered as an authorized signatory for the board resolution for the conversion of private limited company into public company?</h4>
                <p class="faq-answer">
                    Any director of the company can be designated as an authorised signatory for the board resolution for conversion. The authorised signatory signs the certified true copy and is empowered to file forms with ROC, convene general meetings, execute amendments to constitutional documents, and perform other necessary acts to give effect to the resolution.
                </p>
            </div>

            <div class="faq-item">
                <h4 class="faq-question">4. Is the signature of all directors mandatory on Board resolution format for the conversion of private limited company into public company?</h4>
                <p class="faq-answer">
                    No, signatures of all directors are not mandatory on the board resolution for conversion. The resolution is passed by a majority of directors present and voting at a duly convened board meeting where quorum is present. The certified true copy may be signed by a single authorised director. The minutes of the meeting record the directors present and voting details.
                </p>
            </div>

            <div class="faq-item">
                <h4 class="faq-question">5. Does the Board Resolution format for the conversion of private limited company into public company need to be certified by a professional?</h4>
                <p class="faq-answer">
                    The board resolution itself does not require certification by an external professional. Any director can sign the certified true copy of the resolution. If the company has a Company Secretary, they may also certify the document. However, certain forms filed with ROC for the conversion process may require certification by a practising Company Secretary or Chartered Accountant.
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
    const form = document.getElementById('conversionForm');

    // Set default date to today
    const today = new Date().toISOString().slice(0,10);
    const meetingDateInput = form.querySelector('[name="meeting_date"]');
    if (meetingDateInput && !meetingDateInput.value) meetingDateInput.value = today;

    // Default meeting time (11:00 AM)
    const meetingTimeInput = form.querySelector('[name="meeting_time"]');
    if (meetingTimeInput && !meetingTimeInput.value) meetingTimeInput.value = "11:00";

    function formatDate(dateString) {
        if (!dateString) return '__________';
        const date = new Date(dateString);
        return date.toLocaleDateString('en-IN', { day: '2-digit', month: 'long', year: 'numeric' });
    }

    function updatePreview() {
        const companyName = form.querySelector('[name="company_name"]').value || '________________';
        const cin = form.querySelector('[name="cin"]').value || '________________';
        const regOffice = form.querySelector('[name="registered_office"]').value || '________________';
        const email = form.querySelector('[name="email"]').value || '________________';
        const meetingDateRaw = form.querySelector('[name="meeting_date"]').value;
        const meetingDate = meetingDateRaw ? formatDate(meetingDateRaw) : '__________';
        const meetingTime = form.querySelector('[name="meeting_time"]').value || '______';
        const directorName = form.querySelector('[name="director_name"]').value || '________________';
        const proposedName = form.querySelector('[name="proposed_name"]').value || '________________';
        const signatoryName = form.querySelector('[name="signatory_name"]').value || '________________';
        const designation = form.querySelector('[name="signatory_designation"]').value || '________________';
        const din = form.querySelector('[name="din"]').value || '________________';
        const place = form.querySelector('[name="place"]').value || '________________';

        document.getElementById('previewCompanyName').textContent = companyName;
        document.getElementById('previewCIN').textContent = cin;
        document.getElementById('previewRegOffice').textContent = regOffice;
        document.getElementById('previewEmail').textContent = email;
        document.getElementById('previewMeetingDate').textContent = meetingDate;
        document.getElementById('previewMeetingTime').textContent = meetingTime;
        document.getElementById('previewRegOfficeVenue').textContent = regOffice;
        document.getElementById('previewDirectorName').textContent = directorName;
        document.getElementById('previewExistingName').textContent = companyName;
        document.getElementById('previewProposedName').textContent = proposedName;
        document.getElementById('footerCompanyName').textContent = companyName;
        document.getElementById('footerSignatoryName').textContent = signatoryName;
        document.getElementById('footerDesignation').textContent = designation;
        document.getElementById('footerDIN').textContent = din;

        updateStepIndicator();
    }

    function updateStepIndicator() {
        const steps = document.querySelectorAll('.step-dot');
        const requiredInputs = form.querySelectorAll('input[required], textarea[required], select[required]');
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

    // Attach event listeners
    const inputs = form.querySelectorAll('input, textarea, select');
    inputs.forEach(input => input.addEventListener('input', updatePreview));
    updatePreview();

});
</script>


@endsection
