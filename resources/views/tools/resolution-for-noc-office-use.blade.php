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
            <h1 class="hero-title">Board Resolution for <span>No Objection Certificate (NOC)</span></h1>
            <p class="hero-subtitle">
                Generate a certified Board Resolution for No Objection Certificate (NOC) in under 60 seconds.
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
            <h2 class="form-title">Enter Company & NOC Details</h2>
            <p class="form-description">
                Fill in the details below to generate a Board Resolution for No Objection Certificate (NOC).
            </p>
        </div>

        <form id="nocForm" method="POST" action="{{route('br.noc') }}">
            @csrf

            <div class="form-grid">
                <!-- Company Issuing NOC Details -->
                <div class="form-group full-width">
                    <h3 class="section-title">Company Issuing NOC Details</h3>
                </div>
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

                <!-- Requesting Company Details -->
                <div class="form-group full-width">
                    <h3 class="section-title">Requesting Company Details</h3>
                </div>
                <div class="form-group full-width">
                    <label class="form-label">Requesting Company Name <span class="required">*</span></label>
                    <input type="text" name="requesting_company_name" class="form-control" placeholder="Enter requesting company name" required>
                </div>
                <div class="form-group full-width">
                    <label class="form-label">Company Type <span class="required">*</span></label>
                    <div class="select-wrapper">
                        <select name="requesting_company_type" class="form-control form-select" required>
                            <option value="">Select company type</option>
                            <option value="Private Limited Company">Private Limited Company</option>
                            <option value="LLP">Limited Liability Partnership (LLP)</option>
                            <option value="Public Limited Company">Public Limited Company</option>
                            <option value="One Person Company">One Person Company (OPC)</option>
                            <option value="Section 8 Company">Section 8 Company</option>
                        </select>
                    </div>
                </div>
                <div class="form-group full-width">
                    <label class="form-label">Premises Address for Registered Office <span class="required">*</span></label>
                    <textarea name="premises_address" class="form-control" placeholder="Enter complete address of premises" required></textarea>
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
                        <p class="preview-subtitle">Board Resolution for No Objection Certificate (NOC)</p>
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
                        Passed at the Meeting of the Board of Directors of 
                        <strong id="prevCompanyName2">________________</strong> held on 
                        <strong id="prevMeetingDate">__________</strong> at 
                        <strong id="prevMeetingTime">__________</strong> at the Registered Office of the Company.
                    </p>

                    <p class="certificate-paragraph" style="text-align: center;">
                        <strong>NO OBJECTION CERTIFICATE FOR USE OF PREMISES AS REGISTERED OFFICE</strong>
                    </p>

                    <p class="certificate-paragraph">
                        The Chairperson informed the Board that 
                        <strong id="prevRequestingCompany">________________</strong>, a proposed/existing 
                        <strong id="prevCompanyType">________________</strong>, has approached the Company 
                        seeking permission to use the premises situated at 
                        <strong id="prevPremisesAddress">________________</strong> as its registered office address. 
                        The Board discussed the request and after due deliberations, the following resolution was passed unanimously:
                    </p>

                    <p class="certificate-paragraph">
                        <strong>RESOLVED THAT</strong> the permission of the Board be and is hereby granted to 
                        <strong id="prevRequestingCompany2">________________</strong> for using the premises situated at 
                        <strong id="prevPremisesAddress2">________________</strong> as its registered office address.
                    </p>

                    <p class="certificate-paragraph">
                        <strong>RESOLVED FURTHER THAT</strong> any Director of the Company be and is hereby severally authorised to provide a copy of utility bill, rent agreement, property documents, and such other documents as address proofs, along with a certified true copy of this resolution to the Registrar of Companies, GST authorities, or any other statutory authority as may be required to give effect to the aforesaid resolution.
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
            <h2 class="info-title">Board Resolution for No Objection Certificate (NOC)</h2>
            <p class="info-subtitle">
                Professional Format Guide for Indian Companies
            </p>
        </div>

        <!-- Introduction -->
        <div class="info-content">
            <h3 class="info-subheading">Introduction</h3>

            <p class="info-text">
                A Board Resolution for No Objection Certificate (NOC) is a formal corporate document passed by a company that owns or occupies premises, granting permission to another entity to use that premises as its registered office address. This resolution is commonly required when a new company seeks to establish its registered office at premises owned or leased by an existing company, such as a parent company, group entity, or an unrelated third party.
            </p>

            <p class="info-text">
                The Registrar of Companies requires proof of the registered office address during company incorporation and for subsequent changes of address. When the premises are owned or occupied by another company, a No Objection Certificate issued by that company, supported by a board resolution, serves as evidence of permission granted. This document is essential for filing incorporation documents with the ROC, obtaining GST Registration at the premises, and for various licensing and regulatory purposes where proof of business address is required.
            </p>

            <p class="info-text">
                The resolution formally records the board's decision to permit the use of the specified premises and authorises the provision of supporting documents such as utility bills and address proofs.
            </p>

            <!-- Benefits -->
            <h3 class="info-subheading">Benefits of Using a Standard Format</h3>

            <p class="info-text">
                Utilising a professionally drafted board resolution format ensures that all necessary details are captured accurately and comprehensively. A standardised template reduces the likelihood of rejection by the ROC due to incomplete or improperly worded documentation, maintains consistency in corporate records, and expedites the registration process. This approach supports smooth incorporation proceedings and helps avoid delays in obtaining statutory registrations.
            </p>

            <!-- Relevance -->
            <h3 class="info-subheading">Relevance to Company Registration</h3>

            <p class="info-text">
                The No Objection Certificate is a critical document in the Company Registration process. When a new company proposes to use premises belonging to another entity as its registered office, the ROC requires documentary proof that the premises owner has no objection to such use. The board resolution authorising the NOC, along with address proof documents like utility bills or property documents, forms part of the mandatory attachments for company incorporation filings. Similarly, when applying for GST Registration, proof of the principal place of business is required, and a NOC supported by a board resolution serves as valid documentation when the premises are shared or owned by another entity.
            </p>
        </div>

        <!-- Sample Format -->
        <div class="format-section">
            <h3 class="format-title">
                Board Resolution for No Objection Certificate – Sample Format
            </h3>

            <p class="format-note">
                <em>[To be printed on Company Letterhead]</em>
            </p>

            <p class="format-text">
                <strong>Company Name:</strong> ___________________________ (Company issuing the NOC)
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
                Passed at the Meeting of the Board of Directors of _______________ (Company Name) held on _______________ (Date) at _______________ (Time) at the Registered Office of the Company
            </p>

            <p class="format-text">
                <strong>NO OBJECTION CERTIFICATE FOR USE OF PREMISES AS REGISTERED OFFICE</strong>
            </p>

            <p class="format-text">
                The Chairperson informed the Board that _______________ (Name of Proposed/Requesting Company), a proposed/existing Private Limited Company/LLP, has approached the Company seeking permission to use the premises situated at _______________ (Complete Address of Premises) as its registered office address. The Board discussed the request and after due deliberations, the following resolution was passed unanimously:
            </p>

            <p class="format-text">
                RESOLVED THAT the permission of the Board be and is hereby granted to _______________ (Name of Proposed/Requesting Company) for using the premises situated at _______________ (Complete Address of Premises) as its registered office address.
            </p>

            <p class="format-text">
                RESOLVED FURTHER THAT any Director of the Company be and is hereby severally authorised to provide a copy of utility bill, rent agreement, property documents, and such other documents as address proofs, along with a certified true copy of this resolution to the Registrar of Companies, GST authorities, or any other statutory authority as may be required to give effect to the aforesaid resolution.
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
                    1. Does the Board Resolution format for no objection certificate need to be certified by a professional?
                </h4>
                <p class="faq-answer">
                    No, it is typically certified as a true copy by an authorised director of the company issuing the NOC. Some regulatory filings may have additional requirements.
                </p>
            </div>

            <div class="faq-item">
                <h4 class="faq-question">
                    2. Do different companies have different board resolution formats for no objection certificate?
                </h4>
                <p class="faq-answer">
                    While the core content is the same, companies may have slightly different formats based on internal standards and specific terms. Essential elements include identification of parties, premises address, and authorisation for supporting documents.
                </p>
            </div>

            <div class="faq-item">
                <h4 class="faq-question">
                    3. Should the Board resolution for no objection certificate be on company letterhead?
                </h4>
                <p class="faq-answer">
                    Yes, it is strongly recommended to use official company letterhead for authenticity and professionalism. Letterhead should include company name, CIN, registered office address, and contact details.
                </p>
            </div>

            <div class="faq-item">
                <h4 class="faq-question">
                    4. Can a board resolution for no objection certificate be passed without convening a board meeting?
                </h4>
                <p class="faq-answer">
                    Yes, if the company's Articles of Association allow, a resolution may be passed by circulation. It must be circulated to all directors and approved by a majority to be valid.
                </p>
            </div>

            <div class="faq-item">
                <h4 class="faq-question">
                    5. Which resolution is required for no objection certificate?
                </h4>
                <p class="faq-answer">
                    An ordinary resolution passed by the Board of Directors is sufficient to grant a NOC permitting another entity to use the company's premises as its registered office. No shareholder approval is required.
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
    const form = document.getElementById('nocForm');
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
        // Company Details (Issuing NOC)
        const companyName = form.querySelector('[name="business_name"]').value || '________________';
        const cin = form.querySelector('[name="cin"]').value || '________________';
        const officeAddress = form.querySelector('[name="register_address"]').value || '________________';
        
        // Meeting Details
        const meetingDate = form.querySelector('[name="meeting_date"]').value;
        const meetingTime = form.querySelector('[name="meeting_time"]').value || '11:00 AM';
        
        // Requesting Company Details
        const requestingCompany = form.querySelector('[name="requesting_company_name"]').value || '________________';
        const companyType = form.querySelector('[name="requesting_company_type"]').value || '________________';
        const premisesAddress = form.querySelector('[name="premises_address"]').value || '________________';
        
        // Authorized Signatory
        const authPerson = form.querySelector('[name="authorized_person_name"]').value || '________________';
        const designation = form.querySelector('[name="owner_director_partner"]').value || '________________';
        const din = form.querySelector('[name="din"]').value || '________________';
        const place = form.querySelector('[name="state"]').value || '________________';
        const resolutionDate = form.querySelector('[name="resolution_sign_date"]').value;

        // Update preview elements
        document.getElementById('prevBusinessName').textContent = companyName;
        document.getElementById('prevCompanyName2').textContent = companyName;
        document.getElementById('footerCompanyName').textContent = companyName;
        document.getElementById('prevCin').textContent = cin;
        document.getElementById('prevAddress').textContent = officeAddress;
        
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
        
        // Requesting company details
        document.getElementById('prevRequestingCompany').textContent = requestingCompany;
        document.getElementById('prevRequestingCompany2').textContent = requestingCompany;
        document.getElementById('prevCompanyType').textContent = companyType;
        document.getElementById('prevPremisesAddress').textContent = premisesAddress;
        document.getElementById('prevPremisesAddress2').textContent = premisesAddress;
        
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
