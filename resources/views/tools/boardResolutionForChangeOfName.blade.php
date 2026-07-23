@extends('tools.tool-master')
@section('title')
{{_(' Board Resolution for Change of Name of Company')}}
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
            <h1 class="hero-title"> <span> Board Resolution for Change of Name of Company</span></h1>
            <p class="hero-subtitle">
                Generate a certified Board Resolution for Change of Name of Company in under 60 seconds.
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
            <h2 class="form-title">Enter Company & Name Change Details</h2>
            <p class="form-description">
                Fill in the details below to generate a Board Resolution for Change of Name of Company.
            </p>
        </div>

        <form id="changeNameForm" method="POST" action="{{route('br.changename') }}">
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

                <!-- Name Details -->
                <div class="form-group full-width">
                    <label class="form-label">Existing Company Name <span class="required">*</span></label>
                    <input type="text" name="existing_name" class="form-control" placeholder="Enter existing name" required>
                </div>
                <div class="form-group full-width">
                    <label class="form-label">Proposed New Company Name <span class="required">*</span></label>
                    <input type="text" name="proposed_name" class="form-control" placeholder="Enter proposed new name" required>
                </div>

                <!-- Signatory Details -->
                <div class="form-row">
                    <div class="form-group">
                        <label class="form-label">Signatory Name <span class="required">*</span></label>
                        <input type="text" name="signatory_name" class="form-control" placeholder="Enter signatory name" required>
                    </div>
                    <div class="form-group">
                        <label class="form-label">Designation <span class="required">*</span></label>
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
                        <p class="preview-subtitle">Board Resolution for Change of Name of Company</p>
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
                        <strong>Venue: </strong>Registered Office of the Company at <span id="prevOfficeAddressVenue">________________</span>
                    </p>

                    <p class="certificate-paragraph">
                        <strong>SUBJECT: CHANGE OF NAME OF THE COMPANY</strong>
                    </p>

                    <p class="certificate-paragraph">
                        <strong>"RESOLVED THAT</strong> pursuant to the provisions of Section 13 and other applicable provisions of the Companies Act, 2013 and the rules framed thereunder (including any statutory modification or re-enactment thereof for the time being in force), and subject to the approval of the Registrar of Companies and/or any other competent authority as may be required, and subject further to the approval of the members of the Company by way of special resolution, the consent of the Board of Directors be and is hereby accorded to change the existing name of the Company from <strong>"<span id="prevExistingName">________________</span>"</strong> to <strong>"<span id="prevProposedName">________________</span>"</strong>, or such other name as may be approved by the Registrar of Companies."
                    </p>

                    <p class="certificate-paragraph">
                        <strong>"RESOLVED FURTHER THAT</strong> any Director of the Company, either individually or jointly, be and is hereby authorised to make the necessary application for obtaining approval for the change of name from the Registrar of Companies or any other authority as may be required, and to sign, execute, and submit all such forms, documents, applications, and papers as may be necessary or expedient for the purpose of giving effect to the aforesaid resolution."
                    </p>

                    <p class="certificate-paragraph">
                        <strong>"RESOLVED FURTHER THAT</strong> upon receipt of approval from the Registrar of Companies, the Directors be and are hereby authorised to convene an Extraordinary General Meeting or seek approval through postal ballot to obtain the consent of the members by way of special resolution for the change of name of the Company."
                    </p>

                    <p class="certificate-paragraph">
                        <strong>"RESOLVED FURTHER THAT</strong> the Board of Directors be and is hereby authorised to do all such acts, deeds, matters, and things as may be necessary, proper, or expedient to give effect to the above resolutions and to comply with all statutory and regulatory requirements in connection therewith."
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
            <h2 class="info-title">Board Resolution for Change of Name of Company</h2>
            <p class="info-subtitle">
                Professional Format Guide for Indian Companies
            </p>
        </div>

        <!-- Introduction -->
        <div class="info-content">
            <h3 class="info-subheading">Introduction</h3>

            <p class="info-text">
                A Board Resolution for Change of Name of Company is a formal corporate document that records the decision of the Board of Directors to initiate the process of changing the company's existing name. Under the Companies Act, 2013, a company may change its name for various strategic, commercial, or branding reasons. However, this change requires a structured approval process that begins with the Board of Directors passing a resolution to recommend the name change and subsequently seeking approval from the shareholders through a special resolution.
            </p>

            <p class="info-text">
                This board resolution serves as the foundational document that authorises the company to file an application with the Registrar of Companies (ROC) for approval of the proposed new name. The resolution must be filed with the Ministry of Corporate Affairs (MCA) along with the prescribed forms. Directors, company secretaries, and compliance officers involved in corporate restructuring or rebranding exercises commonly require this document to ensure procedural compliance with statutory requirements.
            </p>

            <!-- Benefits -->
            <h3 class="info-subheading">Benefits of Using a Standard Format</h3>

            <p class="info-text">
                Utilising a professionally drafted board resolution format ensures that all essential elements required by the Companies Act are accurately captured. A standardised template minimises the risk of procedural errors, expedites the documentation process, and facilitates smooth filing with the Registrar of Companies. This approach supports timely compliance and reduces the likelihood of rejection or queries from regulatory authorities.
            </p>

            <!-- Relevance -->
            <h3 class="info-subheading">Relevance to Company Registration Records</h3>

            <p class="info-text">
                A change in company name requires updating all statutory records maintained with the MCA. Once the new name is approved and the amended Certificate of Incorporation is issued, the company must update its records across all regulatory filings, including GST Registration certificates, bank accounts, contracts, and other legal documents.
            </p>

            <p class="info-text">
                The company's letterhead, signage, and official correspondence must also reflect the new name. Ensuring accuracy in the board resolution is essential to avoid discrepancies in subsequent filings and registrations.
            </p>
        </div>

        <!-- Sample Format -->
        <div class="format-section">
            <h3 class="format-title">
                Board Resolution for Change of Name of Company - Sample Format
            </h3>

            <p class="format-text">
                <strong>Company Name:</strong> _______________________________________
            </p>

            <p class="format-text">
                <strong>CIN:</strong> _______________________________________
            </p>

            <p class="format-text">
                <strong>Registered Office Address:</strong> _______________________________________
            </p>

            <p class="format-text">
                <strong>CERTIFIED TRUE COPY OF THE BOARD RESOLUTION</strong>
            </p>

            <p class="format-text">
                Passed at the Meeting of the Board of Directors held on ________ (Date) at ________ (Time) at the Registered Office of the Company at ________ (Address)
            </p>

            <p class="format-text">
                <strong>SUBJECT:</strong> CHANGE OF NAME OF THE COMPANY
            </p>

            <p class="format-text">
                "RESOLVED THAT pursuant to the provisions of Section 13 and other applicable provisions of the Companies Act, 2013 and the rules framed thereunder (including any statutory modification or re-enactment thereof for the time being in force), and subject to the approval of the Registrar of Companies and/or any other competent authority as may be required, and subject further to the approval of the members of the Company by way of special resolution, the consent of the Board of Directors be and is hereby accorded to change the existing name of the Company from "_______________________________________" (Existing Name of the Company) to "_______________________________________" (Proposed Name of the Company), or such other name as may be approved by the Registrar of Companies."
            </p>

            <p class="format-text">
                "RESOLVED FURTHER THAT any Director of the Company, either individually or jointly, be and is hereby authorised to make the necessary application for obtaining approval for the change of name from the Registrar of Companies or any other authority as may be required, and to sign, execute, and submit all such forms, documents, applications, and papers as may be necessary or expedient for the purpose of giving effect to the aforesaid resolution."
            </p>

            <p class="format-text">
                "RESOLVED FURTHER THAT upon receipt of approval from the Registrar of Companies, the Directors be and are hereby authorised to convene an Extraordinary General Meeting or seek approval through postal ballot to obtain the consent of the members by way of special resolution for the change of name of the Company."
            </p>

            <p class="format-text">
                "RESOLVED FURTHER THAT the Board of Directors be and is hereby authorised to do all such acts, deeds, matters, and things as may be necessary, proper, or expedient to give effect to the above resolutions and to comply with all statutory and regulatory requirements in connection therewith."
            </p>

            <p class="format-text">
                For _________________________________ (Company Name)
            </p>

            <p class="format-text">
                <strong>Signature:</strong> _______________________________________
            </p>

            <p class="format-text">
                <strong>Name:</strong> _______________________________________
            </p>

            <p class="format-text">
                <strong>Designation:</strong> _______________________________________
            </p>

            <p class="format-text">
                <strong>DIN:</strong> _______________________________________
            </p>

            <p class="format-text">
                <strong>Date:</strong> _______________________________________
            </p>

            <p class="format-text">
                <strong>Place:</strong> _______________________________________
            </p>
        </div>

        <!-- FAQ -->
        <div class="faq-section">
            <h3 class="faq-title">Frequently Asked Questions</h3>

            <div class="faq-item">
                <h4 class="faq-question">
                    1. What is the board resolution format for changing the name of the company?
                </h4>
                <p class="faq-answer">
                    A board resolution for changing the company name is a formal document recording the Board of Directors' decision to initiate the name change process. It typically includes the existing company name, proposed new name, reference to applicable provisions of the Companies Act 2013, authorisation for directors to file necessary applications with the Registrar of Companies, and the signature of an authorised signatory with their DIN and designation.
                </p>
            </div>

            <div class="faq-item">
                <h4 class="faq-question">
                    2. How to write a board resolution for changing the name of the company?
                </h4>
                <p class="faq-answer">
                    To draft a board resolution for name change, begin with the company details including name, CIN, and registered address. State the date, time, and venue of the board meeting. Include resolution clauses that reference Section 13 of the Companies Act, 2013, specify both the existing and proposed names, and authorise directors to file applications with the ROC. Conclude with the signature block containing the authorised signatory's name, designation, and DIN.
                </p>
            </div>

            <div class="faq-item">
                <h4 class="faq-question">
                    3. Is the signature of all directors mandatory on the board resolution for name change?
                </h4>
                <p class="faq-answer">
                    No, the signature of all directors is not mandatory on the board resolution. The resolution must be signed by an authorised signatory, typically the Chairperson of the meeting or a director authorised by the Board. However, the minutes of the board meeting should record the attendance and consent of directors who participated in the meeting and approved the resolution.
                </p>
            </div>

            <div class="faq-item">
                <h4 class="faq-question">
                    4. Does the board resolution for change of name need to be certified by a professional?
                </h4>
                <p class="faq-answer">
                    When filing the board resolution with the Registrar of Companies through the MCA portal, certain forms may require certification by a practising professional such as a Company Secretary, Chartered Accountant, or Cost Accountant. The requirement for professional certification depends on the specific form being filed and the applicable rules. It is advisable to consult with a qualified professional to determine the certification requirements for your specific filing.
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

    const form = document.getElementById('changeNameForm');
    const downloadPdfBtn = document.getElementById('downloadPdfBtn');

    // Set default date
    const today = new Date().toISOString().split('T')[0];
    const meetingDateInput = form.querySelector('[name="meeting_date"]');
    if (meetingDateInput) {
        meetingDateInput.value = today;
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
        // Company Details
        const companyName = form.querySelector('[name="company_name"]').value || '________________';
        const cin = form.querySelector('[name="cin"]').value || '________________';
        const officeAddress = form.querySelector('[name="registered_office"]').value || '________________';
        
        // Meeting Details
        const meetingDate = form.querySelector('[name="meeting_date"]').value;
        const meetingTime = form.querySelector('[name="meeting_time"]').value || '______';
        
        // Name Details
        const existingName = form.querySelector('[name="existing_name"]').value || '________________';
        const proposedName = form.querySelector('[name="proposed_name"]').value || '________________';
        
        // Signatory Details
        const signatoryName = form.querySelector('[name="signatory_name"]').value || '________________';
        const designation = form.querySelector('[name="signatory_designation"]').value || '________________';
        const signatoryDIN = form.querySelector('[name="signatory_din"]').value || '________________';
        const place = form.querySelector('[name="place"]').value || '________________';

        // Update preview text
        document.getElementById('prevCompanyName').textContent = companyName;
        document.getElementById('prevCIN').textContent = cin;
        document.getElementById('prevOfficeAddress').textContent = officeAddress;
        document.getElementById('prevOfficeAddressVenue').textContent = officeAddress;
        document.getElementById('prevMeetingDate').textContent = meetingDate ? formatDate(meetingDate) : '__________';
        document.getElementById('prevMeetingTime').textContent = meetingTime;
        
        document.getElementById('prevExistingName').textContent = existingName;
        document.getElementById('prevProposedName').textContent = proposedName;
        
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
 
});
</script>
<!--End Js Section -->

@endsection
