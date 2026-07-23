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
            <h1 class="hero-title">Board Resolution for <span>Resignation of Statutory Auditor</span></h1>
            <p class="hero-subtitle">
                Generate a certified Board Resolution for Resignation of Statutory Auditor in under 60 seconds.
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
            <h2 class="form-title">Enter Company & Auditor Details</h2>
            <p class="form-description">
                Fill in the details below to generate a Board Resolution for Resignation of Statutory Auditor.
            </p>
        </div>

        <form id="auditorResignationForm" method="POST" action="{{route('br.auditor.resignation') }}">
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
                <div class="form-group full-width">
                    <label class="form-label">Email <span class="required">*</span></label>
                    <input type="email" name="company_email" class="form-control" placeholder="Enter company email" required>
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

                <!-- Auditor Details -->
                <div class="form-group full-width">
                    <h3 class="section-title">Statutory Auditor Details</h3>
                </div>
                
                <div class="form-group full-width">
                    <label class="form-label">Auditor Firm Name <span class="required">*</span></label>
                    <input type="text" name="auditor_firm_name" class="form-control" placeholder="Enter auditor firm name" required>
                </div>
                
                <div class="form-row">
                    <div class="form-group">
                        <label class="form-label">Firm Registration Number (FRN) <span class="required">*</span></label>
                        <input type="text" name="firm_registration_number" class="form-control" placeholder="Enter FRN" required>
                    </div>
                    <div class="form-group">
                        <label class="form-label">Resignation Letter Date <span class="required">*</span></label>
                        <input type="date" name="resignation_letter_date" class="form-control" required>
                    </div>
                </div>
                
                <div class="form-group full-width">
                    <label class="form-label">Effective Date of Resignation <span class="required">*</span></label>
                    <input type="date" name="effective_resignation_date" class="form-control" required>
                </div>

                <!-- Authorized Signatory -->
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
                                <option value="Company Secretary">Company Secretary</option>
                                <option value="Chairperson">Chairperson</option>
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
                        <p class="preview-subtitle">Board Resolution for Resignation of Statutory Auditor</p>
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
                        <strong>Registered Office Address: </strong><span id="prevAddress">________________</span><br>
                        <strong>Email: </strong><span id="prevEmail">________________</span>
                    </p>

                    <p class="certificate-paragraph">
                        <strong>CERTIFIED TRUE COPY OF THE BOARD RESOLUTION</strong><br>
                        Passed at the Meeting of the Board of Directors of the Company held on 
                        <strong id="prevMeetingDate">__________</strong> at 
                        <strong id="prevMeetingTime">__________</strong> at the Registered Office of the Company at 
                        <strong id="prevMeetingAddress">________________</strong>
                    </p>

                    <p class="certificate-paragraph" style="text-align: center;">
                        <strong>RESIGNATION OF STATUTORY AUDITOR</strong>
                    </p>

                    <p class="certificate-paragraph">
                        <strong>RESOLVED THAT</strong> pursuant to the provisions of Section 140 of the Companies Act, 2013, read with The Companies (Audit and Auditors) Rules, 2014, and other applicable provisions of the Act (including any statutory modification, amendment, or re-enactment thereof for the time being in force), the resignation of the existing Statutory Auditor, M/s. 
                        <strong id="prevAuditorFirm">________________</strong>, Chartered Accountants, bearing Firm Registration Number (FRN) 
                        <strong id="prevFRN">________________</strong>, as tendered vide their letter dated 
                        <strong id="prevResignationDate">__________</strong>, be and is hereby accepted and taken on record with effect from 
                        <strong id="prevEffectiveDate">__________</strong>.
                    </p>

                    <p class="certificate-paragraph">
                        <strong>RESOLVED FURTHER THAT</strong> any Director or the Company Secretary of the Company be and is hereby authorised to file the requisite e-forms with the Registrar of Companies within the stipulated time, and to do all such acts, deeds, matters, and things as may be necessary, expedient, or desirable to give effect to this resolution.
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
            <h2 class="info-title">Board Resolution for Resignation of Statutory Auditor</h2>
            <p class="info-subtitle">
                Professional Format Guide for Indian Companies
            </p>
        </div>

        <!-- Introduction -->
        <div class="info-content">
            <h3 class="info-subheading">Introduction</h3>

            <p class="info-text">
                A Board Resolution for Resignation of Statutory Auditor is a formal corporate document that records the decision of the Board of Directors to accept the resignation of the company's statutory auditor. Under the Companies Act, 2013, a statutory auditor appointed by the company may resign before the completion of their tenure, and such resignation must be formally accepted and recorded by the Board of Directors.
            </p>

            <p class="info-text">
                This resolution is required when a statutory auditor submits their resignation letter to the company citing any reason for their departure. The resignation triggers compliance obligations for both the auditor and the company. The auditor must file Form ADT-3 with the Registrar of Companies within 30 days of resignation, while the company must file Form ADT-1 for the appointment of a new auditor. The board resolution formally acknowledges the resignation, records the effective date, and authorises the filing of necessary e-forms with the ROC. Companies may also convene a Board Meeting or Extraordinary General Meeting to fill the casual vacancy created by the auditor's resignation.
            </p>

            <!-- Benefits -->
            <h3 class="info-subheading">Benefits of Using a Standard Format</h3>

            <p class="info-text">
                Utilising a professionally drafted board resolution format ensures that all statutory requirements under the Companies Act, 2013 are comprehensively addressed. A standardised template reduces the likelihood of omissions, maintains consistency in corporate documentation, and facilitates timely compliance with ROC filing requirements. This approach helps companies manage the transition smoothly and ensures proper documentation of the auditor change in corporate records.
            </p>

            <!-- Relevance -->
            <h3 class="info-subheading">Relevance to Company Compliance</h3>

            <p class="info-text">
                The resignation of a statutory auditor is a significant corporate event that triggers multiple compliance requirements. Companies must file the necessary forms with the Registrar of Companies within the prescribed timelines to avoid penalties. For newly registered companies, understanding the procedure for handling auditor changes is essential for maintaining statutory compliance. The statutory auditor plays a crucial role in certifying financial statements and ensuring compliance with accounting standards, making proper documentation of their resignation and the appointment of a successor critically important.
            </p>
        </div>

        <!-- Sample Format -->
        <div class="format-section">
            <h3 class="format-title">
                Board Resolution for Resignation of Statutory Auditor – Sample Format
            </h3>

            <p class="format-note">
                <em>[To be printed on Company Letterhead]</em>
            </p>

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
                <strong>Email:</strong> ___________________________
            </p>

            <p class="format-text">
                <strong>CERTIFIED TRUE COPY OF THE BOARD RESOLUTION</strong>
            </p>

            <p class="format-text">
                Passed at the Meeting of the Board of Directors of the Company held on _______________ (Date) at _______________ (Time) at the Registered Office of the Company at _______________ (Address)
            </p>

            <p class="format-text">
                <strong>RESIGNATION OF STATUTORY AUDITOR</strong>
            </p>

            <p class="format-text">
                RESOLVED THAT pursuant to the provisions of Section 140 of the Companies Act, 2013, read with The Companies (Audit and Auditors) Rules, 2014, and other applicable provisions of the Act (including any statutory modification, amendment, or re-enactment thereof), the resignation of the existing Statutory Auditor, M/s. _______________ (Firm Name), Chartered Accountants, bearing Firm Registration Number (FRN) _______________, as tendered vide their letter dated _______________ (Date of Resignation Letter), be and is hereby accepted and taken on record with effect from _______________ (Effective Date of Resignation).
            </p>

            <p class="format-text">
                RESOLVED FURTHER THAT any Director or the Company Secretary of the Company be and is hereby authorised to file the requisite e-forms with the Registrar of Companies within the stipulated time, and to do all such acts, deeds, matters, and things as may be necessary, expedient, or desirable to give effect to this resolution.
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
        </div>

        <!-- FAQ -->
        <div class="faq-section">
            <h3 class="faq-title">Frequently Asked Questions</h3>

            <div class="faq-item">
                <h4 class="faq-question">
                    1. Who can be considered as an authorized signatory for the board resolution for the resignation of the Statutory Auditor?
                </h4>
                <p class="faq-answer">
                    The authorised signatory is typically a Director or the Company Secretary. The Chairperson of the board meeting or any director authorised by the board can sign and certify the resolution as a true copy. The signatory should be someone present at the meeting and authorised to certify corporate documents on behalf of the company.
                </p>
            </div>

            <div class="faq-item">
                <h4 class="faq-question">
                    2. Is the signature of all directors mandatory on the board resolution format for the resignation of the Statutory Auditor?
                </h4>
                <p class="faq-answer">
                    No, the signatures of all directors are not mandatory. The resolution must be passed with the requisite quorum, and the certified true copy is typically signed by the Chairperson or authorised director. Only one authorised signature is required on the certified copy.
                </p>
            </div>

            <div class="faq-item">
                <h4 class="faq-question">
                    3. Which resolution is required for the resignation of the Statutory Auditor?
                </h4>
                <p class="faq-answer">
                    An ordinary resolution passed by the Board of Directors is sufficient for accepting the resignation and taking it on record. If the resignation creates a casual vacancy, the Board must appoint another auditor, which may require approval at a general meeting depending on the Articles of Association.
                </p>
            </div>

            <div class="faq-item">
                <h4 class="faq-question">
                    4. Does the Board Resolution format need professional certification?
                </h4>
                <p class="faq-answer">
                    Certification by a practising professional is not mandatory. Typically, an authorised director or Company Secretary certifies the resolution. E-forms filed with ROC may require professional certification depending on the company category and applicable rules.
                </p>
            </div>

            <div class="faq-item">
                <h4 class="faq-question">
                    5. Can a board resolution for the resignation of the Statutory Auditor be passed without convening a board meeting?
                </h4>
                <p class="faq-answer">
                    While resolutions by circulation are permitted under the Companies Act, 2013, acceptance of an auditor's resignation is generally a significant matter that should be discussed at a properly convened board meeting. Directors can deliberate on the implications and ensure compliance with statutory timelines.
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
    const form = document.getElementById('auditorResignationForm');
    const downloadPdfBtn = document.getElementById('downloadPdfBtn');
    
    // Set default dates
    const today = new Date().toISOString().split('T')[0];
    const meetingDateInput = form.querySelector('[name="meeting_date"]');
    const resignationDateInput = form.querySelector('[name="resignation_letter_date"]');
    const effectiveDateInput = form.querySelector('[name="effective_resignation_date"]');
    const resolutionDateInput = form.querySelector('[name="resolution_sign_date"]');
    const timeInput = form.querySelector('[name="meeting_time"]');
    
    if (meetingDateInput) {
        meetingDateInput.value = today;
    }
    if (resignationDateInput) {
        resignationDateInput.value = today;
    }
    if (effectiveDateInput) {
        effectiveDateInput.value = today;
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
        const email = form.querySelector('[name="company_email"]').value || '________________';
        
        // Meeting Details
        const meetingDate = form.querySelector('[name="meeting_date"]').value;
        const meetingTime = form.querySelector('[name="meeting_time"]').value || '11:00 AM';
        
        // Auditor Details
        const auditorFirm = form.querySelector('[name="auditor_firm_name"]').value || '________________';
        const frn = form.querySelector('[name="firm_registration_number"]').value || '________________';
        const resignationLetterDate = form.querySelector('[name="resignation_letter_date"]').value;
        const effectiveDate = form.querySelector('[name="effective_resignation_date"]').value;
        
        // Authorized Signatory
        const authPerson = form.querySelector('[name="authorized_person_name"]').value || '________________';
        const designation = form.querySelector('[name="owner_director_partner"]').value || '________________';
        const din = form.querySelector('[name="din"]').value || '________________';
        const place = form.querySelector('[name="state"]').value || '________________';
        const resolutionDate = form.querySelector('[name="resolution_sign_date"]').value;

        // Update preview elements
        document.getElementById('prevBusinessName').textContent = companyName;
        document.getElementById('prevCin').textContent = cin;
        document.getElementById('prevAddress').textContent = officeAddress;
        document.getElementById('prevMeetingAddress').textContent = officeAddress;
        document.getElementById('prevEmail').textContent = email;
        
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
        
        if (resignationLetterDate) {
            const formattedResignationDate = new Date(resignationLetterDate).toLocaleDateString('en-IN', {
                day: '2-digit',
                month: 'long',
                year: 'numeric'
            });
            document.getElementById('prevResignationDate').textContent = formattedResignationDate;
        } else {
            document.getElementById('prevResignationDate').textContent = '__________';
        }
        
        if (effectiveDate) {
            const formattedEffectiveDate = new Date(effectiveDate).toLocaleDateString('en-IN', {
                day: '2-digit',
                month: 'long',
                year: 'numeric'
            });
            document.getElementById('prevEffectiveDate').textContent = formattedEffectiveDate;
        } else {
            document.getElementById('prevEffectiveDate').textContent = '__________';
        }
        
        document.getElementById('prevMeetingTime').textContent = meetingTime;
        document.getElementById('prevAuditorFirm').textContent = auditorFirm;
        document.getElementById('prevFRN').textContent = frn;
        
        // Footer details
        document.getElementById('footerCompanyName').textContent = companyName;
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

@endsection
