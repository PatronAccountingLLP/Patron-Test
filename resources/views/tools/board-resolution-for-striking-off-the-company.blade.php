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
            <h1 class="hero-title">Board Resolution for <span> Striking Off the Company</span></h1>
            <p class="hero-subtitle">
                Generate a certified Board Resolution for Striking Off the Company in under 60 seconds.
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
            <h2 class="form-title">Enter Company & Strike Off Details</h2>
            <p class="form-description">
                Fill in the details below to generate a Board Resolution for Striking Off the Company.
            </p>
        </div>

        <form id="strikeOffForm" method="POST" action="{{route('br.strike.off') }}">
            @csrf

            <div class="form-grid">
                <!-- Company Details -->
                <div class="form-group full-width">
                    <label class="form-label">Company Name <span class="required">*</span></label>
                    <input type="text" name="business_name" class="form-control" placeholder="Enter company name" required>
                </div>
                <div class="form-group full-width">
                    <label class="form-label">CIN <span class="required">*</span></label>
                    <input type="text" name="cin" class="form-control" placeholder="Enter CIN" required>
                </div>
                <div class="form-group full-width">
                    <label class="form-label">Registered Office Address <span class="required">*</span></label>
                    <textarea name="register_address" class="form-control" placeholder="Enter registered office address" required></textarea>
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

                <!-- Director for Application (Resolution 1) -->
                <div class="form-group full-width">
                    <h3 class="section-title">Director Details for Application</h3>
                </div>
                <div class="form-group full-width">
                    <label class="form-label">Director Name for STK-2 Application <span class="required">*</span></label>
                    <input type="text" name="application_director_name" class="form-control" placeholder="Enter director name" required>
                </div>
                <div class="form-group full-width">
                    <label class="form-label">Director DIN for Application <span class="required">*</span></label>
                    <input type="text" name="application_director_din" class="form-control" placeholder="Enter DIN" required>
                </div>

                <!-- Director for Authorization (Resolution 2) -->
                <div class="form-group full-width">
                    <label class="form-label">Director Name for Authorization <span class="required">*</span></label>
                    <input type="text" name="authorization_director_name" class="form-control" placeholder="Enter director name" required>
                </div>

                <!-- Authorized Signatory for Footer -->
                <div class="form-group full-width">
                    <h3 class="section-title">Authorized Signatory Details</h3>
                </div>
                <div class="form-row">
                    <div class="form-group">
                        <label class="form-label">Authorized Person Name <span class="required">*</span></label>
                        <input type="text" name="authorized_person_name" class="form-control" placeholder="Enter name" required>
                    </div>
                    <div class="form-group">
                        <label class="form-label">Designation <span class="required">*</span></label>
                        <div class="select-wrapper">
                            <select name="owner_director_partner" class="form-control form-select" required>
                                <option value="">Select designation</option>
                                <option value="Director">Director</option>
                                <option value="Managing Director">Managing Director</option>
                                <option value="Whole-Time Director">Whole-Time Director</option>
                                <option value="Chairperson">Chairperson</option>
                                <option value="Company Secretary">Company Secretary</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="form-group full-width">
                    <label class="form-label">DIN Number <span class="required">*</span></label>
                    <input type="text" name="din" class="form-control" placeholder="Enter DIN Number" required>
                </div>
                
                <!-- Place and Date -->
                <div class="form-row">
                    <div class="form-group">
                        <label class="form-label">Place <span class="required">*</span></label>
                        <input type="text" name="state" class="form-control" placeholder="City / Place" required>
                    </div>
                    <div class="form-group">
                        <label class="form-label">Resolution Date <span class="required">*</span></label>
                        <input type="date" name="resolution_sign_date" class="form-control" required>
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
                        <p class="preview-subtitle">Board Resolution for Striking Off the Company</p>
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
                    <p class="certificate-paragraph">
                        <strong id="prevBusinessName">________________</strong><br>
                        <strong>CIN: </strong><span id="prevCin">________________</span><br>
                        <strong>Registered Office Address: </strong><span id="prevAddress">________________</span>
                    </p>

                    <p class="certificate-paragraph">
                        <strong>CERTIFIED TRUE COPY OF THE BOARD RESOLUTION</strong><br>
                        Passed at the Meeting of the Board of Directors of the Company held on 
                        <strong id="prevMeetingDate">__________</strong> at 
                        <strong id="prevMeetingTime">__________</strong> at the Registered Office of the Company at 
                        <strong id="prevMeetingAddress">________________</strong>
                    </p>

                    <p class="certificate-paragraph" style="text-align: center;">
                        <strong>APPLICATION FOR STRIKING OFF THE NAME OF THE COMPANY FROM THE REGISTER OF COMPANIES</strong>
                    </p>

                    <p class="certificate-paragraph">
                        <strong>RESOLVED THAT</strong> the consent of the Board of Directors of the Company be and is hereby accorded to make an application to the Registrar of Companies, under the provisions of Section 248 of the Companies Act, 2013, and the rules framed thereunder, for striking off the name of the Company from the Register of Companies maintained by the Registrar.
                    </p>

                    <p class="certificate-paragraph">
                        <strong>RESOLVED FURTHER THAT</strong> Mr./Ms. 
                        <strong id="prevAppDirectorName">________________</strong>, Director of the Company (DIN: 
                        <strong id="prevAppDirectorDIN">________________</strong>), be and is hereby requested to make the application in Form STK-2 and to furnish necessary affidavits and indemnity bond as required under Section 248 of the Companies Act, 2013, as per the draft of the same placed before the meeting and duly initialled by the Chairperson for the purpose of identification, in order to effect the striking off of the Company's name from the Register of Companies.
                    </p>

                    <p class="certificate-paragraph">
                        <strong>RESOLVED FURTHER THAT</strong> Mr./Ms. 
                        <strong id="prevAuthDirectorName">________________</strong>, Director of the Company, be and is hereby authorised to sign, execute, and submit all necessary documents, declarations, and undertakings, to provide any information, clarifications, or explanations as may be required by the Registrar of Companies or any other authority, and to do all such acts, deeds, matters, and things as may be necessary, proper, or expedient to give effect to the above resolutions.
                    </p>

                    <p class="certificate-paragraph">
                        <strong>Certified to be True</strong>
                    </p>

                    <div class="certificate-signature">
                        <p class="signature-label">For <strong id="footerCompanyName">________________</strong></p>
                        <p class="signature-label">Signature: _________________________</p>
                        <p class="signature-label">Name: <strong id="footerAuthName">________________</strong></p>
                        <p class="signature-label">Designation: <strong id="footerAuthDesignation">________________</strong></p>
                        <p class="signature-label">DIN: <strong id="footerDIN">________________</strong></p>
                    </div>
                </div>

                <div class="certificate-footer">
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
            <h2 class="info-title">Board Resolution for Striking Off the Company</h2>
            <p class="info-subtitle">
                Professional Format Guide for Indian Companies
            </p>
        </div>

        <!-- Introduction -->
        <div class="info-content">
            <h3 class="info-subheading">Introduction</h3>
            <p class="info-text">
                A Board Resolution for Striking Off the Company is a formal corporate document that records the decision of the Board of Directors to voluntarily remove the company's name from the Register of Companies maintained by the Registrar of Companies. Under the Companies Act, 2013, a company that has not commenced business operations within one year of incorporation, or has ceased to carry on business for two consecutive financial years, may apply for voluntary strike off.
            </p>
            <p class="info-text">
                This resolution is required when the promoters or directors decide to close a company that is no longer operational or viable. The voluntary strike off procedure provides a simpler and more cost-effective alternative to formal winding up proceedings. The application for strike off is filed through Form STK-2 with the ROC and requires board approval along with shareholders' consent through a special resolution.
            </p>
            <p class="info-text">
                The resolution formally authorises a director to file the necessary application, execute affidavits and indemnity bonds, and complete all procedural requirements for removing the company from the register. Companies must ensure all statutory dues, including taxes and employee liabilities, are cleared before applying for strike off.
            </p>

            <!-- Benefits -->
            <h3 class="info-subheading">Benefits of Using a Standard Format</h3>
            <p class="info-text">
                Utilising a professionally drafted board resolution format ensures that all statutory requirements under the Companies Act, 2013 are comprehensively addressed. A standardised template reduces the likelihood of rejection by the ROC due to procedural errors, maintains consistency in corporate documentation, and facilitates smooth processing of the strike off application. This approach helps companies navigate the closure process efficiently while ensuring proper documentation of the board's decision.
            </p>

            <!-- Relevance -->
            <h3 class="info-subheading">Relevance to Company Closure Compliance</h3>
            <p class="info-text">
                The voluntary strike off procedure is governed by the provisions of the Companies Act, 2013 and requires careful compliance with multiple statutory requirements. Companies that completed their Company Registration but never commenced business, or those that have become dormant, can use this procedure to formally close their corporate existence. 
            </p>
            <p class="info-text">
                Before applying for strike off, companies must file all pending annual returns and financial statements, clear any outstanding tax liabilities including GST, and obtain necessary clearances. The GST Registration of the company must also be cancelled as part of the closure process. The board resolution serves as the foundational document authorising the strike off application and the execution of all related declarations and undertakings.
            </p>
        </div>

        <!-- Sample Format -->
        <div class="format-section">
            <h3 class="format-title">
                Board Resolution for Striking Off the Company – Sample Format
            </h3>

            <p class="format-text">
                <strong>Company Name:</strong> ___________________________
            </p>
            <p class="format-text">
                <strong>CIN:</strong> ___________________________
            </p>
            <p class="format-text">
                <strong>Registered Office Address:</strong> ___________________________
            </p>
            <p class="format-text">
                <strong>CERTIFIED TRUE COPY OF THE BOARD RESOLUTION</strong>
            </p>
            <p class="format-text">
                Passed at the Meeting of the Board of Directors of the Company held on _______________ (Date) at _______________ (Time) at the Registered Office of the Company at _______________ (Address)
            </p>
            <p class="format-text">
                <strong>APPLICATION FOR STRIKING OFF THE NAME OF THE COMPANY FROM THE REGISTER OF COMPANIES</strong>
            </p>
            <p class="format-text">
                RESOLVED THAT the consent of the Board of Directors of the Company be and is hereby accorded to make an application to the Registrar of Companies, under the provisions of Section 248 of the Companies Act, 2013, and the rules framed thereunder, for striking off the name of the Company from the Register of Companies maintained by the Registrar.
            </p>
            <p class="format-text">
                RESOLVED FURTHER THAT Mr./Ms. _______________ (Name), Director of the Company (DIN: _______________), be and is hereby requested to make the application in Form STK-2 and to furnish necessary affidavits and indemnity bond as required under Section 248 of the Companies Act, 2013, as per the draft of the same placed before the meeting and duly initialled by the Chairperson for the purpose of identification, in order to effect the striking off of the Company's name from the Register of Companies.
            </p>
            <p class="format-text">
                RESOLVED FURTHER THAT Mr./Ms. _______________ (Name), Director of the Company, be and is hereby authorised to sign, execute, and submit all necessary documents, declarations, and undertakings, to provide any information, clarifications, or explanations as may be required by the Registrar of Companies or any other authority, and to do all such acts, deeds, matters, and things as may be necessary, proper, or expedient to give effect to the above resolutions.
            </p>
            <p class="format-text">
                Certified to be True
            </p>
            <p class="format-text">
                For ___________________________ (Company Name)
            </p>
            <p class="format-text">
                <strong>Signature:</strong> ___________________________
            </p>
            <p class="format-text">
                <strong>Name:</strong> ___________________________
            </p>
            <p class="format-text">
                <strong>Designation:</strong> ___________________________
            </p>
            <p class="format-text">
                <strong>DIN:</strong> ___________________________
            </p>
            <p class="format-text">
                <strong>Date:</strong> ___________________________
            </p>
            <p class="format-text">
                <strong>Place:</strong> ___________________________
            </p>
        </div>

        <!-- FAQ -->
        <div class="faq-section">
            <h3 class="faq-title">Frequently Asked Questions</h3>

            <div class="faq-item">
                <h4 class="faq-question">
                    1. Are details mentioned in the board resolution format for striking off the company the same as the special resolution format of members?
                </h4>
                <p class="faq-answer">
                    Yes, the essential details regarding the company, the purpose of striking off, and the authorisation provisions are largely similar in both the board resolution and the special resolution of members. The board resolution is passed by directors, while the special resolution is passed by shareholders at a general meeting requiring 75% majority approval. Both documents are required for the strike off application.
                </p>
            </div>

            <div class="faq-item">
                <h4 class="faq-question">
                    2. Is the signature of all directors mandatory on the Board resolution format for striking off the company?
                </h4>
                <p class="faq-answer">
                    No, only one authorised signature (Chairperson or director) on the certified true copy is required. The resolution must be passed with the requisite quorum at a duly convened board meeting.
                </p>
            </div>

            <div class="faq-item">
                <h4 class="faq-question">
                    3. Should the Board resolution for striking off the company be on company letterhead?
                </h4>
                <p class="faq-answer">
                    Yes, using the official company letterhead adds authenticity and professionalism. It should include company name, CIN, registered office address, and contact details.
                </p>
            </div>

            <div class="faq-item">
                <h4 class="faq-question">
                    4. Does the Board Resolution format for striking off the company need to be certified by a professional?
                </h4>
                <p class="faq-answer">
                    Certification is not mandatory for the board resolution itself. However, Form STK-2 may require certification by a practising professional (CS, CA, or CMA) depending on the company's paid-up capital and turnover.
                </p>
            </div>

            <div class="faq-item">
                <h4 class="faq-question">
                    5. Is the board resolution format for striking off the company mandatory to be attached to the MCA form?
                </h4>
                <p class="faq-answer">
                    Yes, it is a mandatory attachment to Form STK-2 along with the special resolution of members, affidavit from directors, indemnity bond, statement of accounts not older than 30 days, and other specified documents. The ROC will not process the application without the complete set.
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
    const form = document.getElementById('strikeOffForm');
    const downloadPdfBtn = document.getElementById('downloadPdfBtn');
    
    // Set default dates
    const today = new Date().toISOString().split('T')[0];
    const meetingDateInput = form.querySelector('[name="meeting_date"]');
    const resolutionDateInput = form.querySelector('[name="resolution_sign_date"]');
    const timeInput = form.querySelector('[name="meeting_time"]');
    
    if (meetingDateInput) {
        meetingDateInput.value = today;
    }
    if (resolutionDateInput) {
        resolutionDateInput.value = today;
    }
    if (timeInput) {
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
        // Company Details
        const companyName = form.querySelector('[name="business_name"]').value || '________________';
        const cin = form.querySelector('[name="cin"]').value || '________________';
        const officeAddress = form.querySelector('[name="register_address"]').value || '________________';
        
        // Meeting Details
        const meetingDate = form.querySelector('[name="meeting_date"]').value;
        const meetingTime = form.querySelector('[name="meeting_time"]').value || '11:00 AM';
        
        // Director Details
        const appDirectorName = form.querySelector('[name="application_director_name"]').value || '________________';
        const appDirectorDIN = form.querySelector('[name="application_director_din"]').value || '________________';
        const authDirectorName = form.querySelector('[name="authorization_director_name"]').value || '________________';
        
        // Authorized Signatory
        const authPerson = form.querySelector('[name="authorized_person_name"]').value || '________________';
        const designation = form.querySelector('[name="owner_director_partner"]').value || '________________';
        const din = form.querySelector('[name="din"]').value || '________________';
        const place = form.querySelector('[name="state"]').value || '________________';
        const resolutionDate = form.querySelector('[name="resolution_sign_date"]').value;

        // Update preview elements
        document.getElementById('prevBusinessName').textContent = companyName;
        document.getElementById('footerCompanyName').textContent = companyName;
        document.getElementById('prevCin').textContent = cin;
        document.getElementById('prevAddress').textContent = officeAddress;
        document.getElementById('prevMeetingAddress').textContent = officeAddress;
        
        // Format and update dates
        if (meetingDate) {
            const formattedMeetingDate = new Date(meetingDate).toLocaleDateString('en-IN', {
                day: '2-digit',
                month: 'long',
                year: 'numeric'
            });
            document.getElementById('prevMeetingDate').textContent = formattedMeetingDate;
        } else {
            document.getElementById('prevMeetingDate').textContent = '__________';
        }
        
        document.getElementById('prevMeetingTime').textContent = meetingTime;
        
        // Director details
        document.getElementById('prevAppDirectorName').textContent = appDirectorName;
        document.getElementById('prevAppDirectorDIN').textContent = appDirectorDIN;
        document.getElementById('prevAuthDirectorName').textContent = authDirectorName;
        
        // Footer details
        document.getElementById('footerAuthName').textContent = authPerson;
        document.getElementById('footerAuthDesignation').textContent = designation;
        document.getElementById('footerDIN').textContent = din;
        document.getElementById('footerPlace').textContent = place;

        if (resolutionDate) {
            const formattedResDate = new Date(resolutionDate).toLocaleDateString('en-IN', {
                day: '2-digit',
                month: 'long',
                year: 'numeric'
            });
            document.getElementById('footerDate').textContent = formattedResDate;
        } else {
            document.getElementById('footerDate').textContent = '________________';
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
