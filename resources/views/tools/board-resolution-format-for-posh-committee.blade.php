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
            <h1 class="hero-title">Board Resolution for <span>Constitution of Internal Committee (POSH)</span></h1>
            <p class="hero-subtitle">
                Generate a certified Board Resolution for Constitution of Internal Committee (POSH) in under 60 seconds.
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
            <h2 class="form-title">Enter Company & Committee Details</h2>
            <p class="form-description">
                Fill in the details below to generate a Board Resolution for Constitution of Internal Committee (POSH).
            </p>
        </div>

        <form id="poshCommitteeForm" method="POST" action="{{route('br.posh') }}">
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
                
                <!-- Committee Members -->
                <div class="form-group full-width">
                    <h3 class="section-title">Internal Committee Members</h3>
                </div>
                
                <!-- Presiding Officer -->
                <div class="form-group full-width">
                    <label class="form-label">Presiding Officer Name <span class="required">*</span></label>
                    <input type="text" name="presiding_officer_name" class="form-control" placeholder="Enter presiding officer name" required>
                </div>
                <div class="form-row">
                    <div class="form-group">
                        <label class="form-label">Presiding Officer Designation <span class="required">*</span></label>
                        <input type="text" name="presiding_officer_designation" class="form-control" placeholder="Designation" required>
                    </div>
                    <div class="form-group">
                        <label class="form-label">Contact Number <span class="required">*</span></label>
                        <input type="text" name="presiding_officer_contact" class="form-control" placeholder="Contact number" required>
                    </div>
                </div>
                
                <!-- Internal Member 1 -->
                <div class="form-group full-width">
                    <label class="form-label">Internal Member 1 Name <span class="required">*</span></label>
                    <input type="text" name="internal_member1_name" class="form-control" placeholder="Enter internal member name" required>
                </div>
                <div class="form-row">
                    <div class="form-group">
                        <label class="form-label">Internal Member 1 Designation <span class="required">*</span></label>
                        <input type="text" name="internal_member1_designation" class="form-control" placeholder="Designation" required>
                    </div>
                    <div class="form-group">
                        <label class="form-label">Contact Number <span class="required">*</span></label>
                        <input type="text" name="internal_member1_contact" class="form-control" placeholder="Contact number" required>
                    </div>
                </div>
                
                <!-- Internal Member 2 -->
                <div class="form-group full-width">
                    <label class="form-label">Internal Member 2 Name <span class="required">*</span></label>
                    <input type="text" name="internal_member2_name" class="form-control" placeholder="Enter internal member name" required>
                </div>
                <div class="form-row">
                    <div class="form-group">
                        <label class="form-label">Internal Member 2 Designation <span class="required">*</span></label>
                        <input type="text" name="internal_member2_designation" class="form-control" placeholder="Designation" required>
                    </div>
                    <div class="form-group">
                        <label class="form-label">Contact Number <span class="required">*</span></label>
                        <input type="text" name="internal_member2_contact" class="form-control" placeholder="Contact number" required>
                    </div>
                </div>
                
                <!-- External Member -->
                <div class="form-group full-width">
                    <label class="form-label">External Member Name <span class="required">*</span></label>
                    <input type="text" name="external_member_name" class="form-control" placeholder="Enter external member name" required>
                </div>
                <div class="form-row">
                    <div class="form-group">
                        <label class="form-label">External Member Designation <span class="required">*</span></label>
                        <input type="text" name="external_member_designation" class="form-control" placeholder="Designation" required>
                    </div>
                    <div class="form-group">
                        <label class="form-label">Contact Number <span class="required">*</span></label>
                        <input type="text" name="external_member_contact" class="form-control" placeholder="Contact number" required>
                    </div>
                </div>
                
                <!-- Authorized Signatory -->
                <div class="form-group full-width">
                    <h3 class="section-title">Authorized Signatory Details</h3>
                </div>
                <div class="form-row">
                    <div class="form-group">
                        <label class="form-label">Authorized Director Name <span class="required">*</span></label>
                        <input type="text" name="authorized_person_name" class="form-control" placeholder="Director name" required>
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
                        <p class="preview-subtitle">Board Resolution for Constitution of Internal Committee (POSH)</p>
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

                    <p class="certificate-paragraph">
                        <strong>CONSTITUTION OF INTERNAL COMMITTEE UNDER THE POSH ACT, 2013</strong>
                    </p>

                    <p class="certificate-paragraph">
                        <strong>RESOLVED THAT</strong> pursuant to the provisions of Section 4 of The Sexual Harassment of Women at Workplace (Prevention, Prohibition and Redressal) Act, 2013, and the rules framed thereunder, the approval of the Board of Directors of the Company be and is hereby accorded for the constitution/reconstitution of an Internal Committee to provide protection against sexual harassment of women at the workplace and for the prevention and redressal of complaints of sexual harassment and for matters connected therewith or incidental thereto.
                    </p>

                    <p class="certificate-paragraph">
                        <strong>RESOLVED FURTHER THAT</strong> the Internal Committee shall comprise of the following members, with Mr./Ms. 
                        <strong id="prevPresidingOfficer">________________</strong> being nominated as the Presiding Officer of the Committee:
                    </p>

                    <table class="committee-table">
                        <thead>
                            <tr>
                                <th>S. No.</th>
                                <th>Name</th>
                                <th>Designation/Role</th>
                                <th>Contact No.</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td id="prevPOFull">________________</td>
                                <td id="prevPODesignation">________________</td>
                                <td id="prevPOContact">________________</td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td id="prevIM1Name">________________</td>
                                <td id="prevIM1Designation">________________</td>
                                <td id="prevIM1Contact">________________</td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td id="prevIM2Name">________________</td>
                                <td id="prevIM2Designation">________________</td>
                                <td id="prevIM2Contact">________________</td>
                            </tr>
                            <tr>
                                <td>4</td>
                                <td id="prevEMName">________________</td>
                                <td id="prevEMDesignation">________________</td>
                                <td id="prevEMContact">________________</td>
                            </tr>
                        </tbody>
                    </table>

                    <p class="certificate-paragraph">
                        <strong>RESOLVED FURTHER THAT</strong> the Internal Committee shall function, hear, and redress complaints in accordance with and subject to the provisions of The Sexual Harassment of Women at Workplace (Prevention, Prohibition and Redressal) Act, 2013, and the rules framed thereunder.
                    </p>

                    <p class="certificate-paragraph">
                        <strong>RESOLVED FURTHER THAT</strong> Mr./Ms. 
                        <strong id="prevAuthPerson">________________</strong>, 
                        <strong id="prevDesignation">________________</strong> of the Company, be and is hereby authorised to take all such steps as may be necessary, proper, or expedient to give effect to this resolution, including executing, signing, and filing necessary documents and e-forms with the Registrar of Companies or any other statutory authority as may be required.
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
            <h2 class="info-title">Board Resolution for Constitution of Internal Committee (POSH)</h2>
            <p class="info-subtitle">
                Professional Format Guide for Indian Companies
            </p>
        </div>

        <!-- Introduction -->
        <div class="info-content">
            <h3 class="info-subheading">Introduction</h3>

            <p class="info-text">
                A Board Resolution for Constitution of Internal Committee under the Sexual Harassment of Women at Workplace (Prevention, Prohibition and Redressal) Act, 2013 (POSH Act) is a formal corporate document that records the decision of the Board of Directors to establish or reconstitute an Internal Committee (IC) for the prevention and redressal of sexual harassment complaints at the workplace.
            </p>

            <p class="info-text">
                Under the POSH Act, every employer with ten or more employees is mandatorily required to constitute an Internal Committee at each workplace. This committee is responsible for receiving complaints, conducting inquiries, and recommending appropriate action in cases of sexual harassment. The resolution formally records the composition of the committee, including the Presiding Officer (senior woman employee), internal members, and an external member familiar with workplace sexual harassment issues.
            </p>

            <!-- Benefits -->
            <h3 class="info-subheading">Benefits of Using a Standard Format</h3>

            <p class="info-text">
                Utilising a professionally drafted board resolution format ensures all statutory requirements under the POSH Act are addressed. A standardised template reduces omissions, maintains consistency in corporate documentation, and demonstrates the organisation's commitment to providing a safe workplace.
            </p>

            <p class="info-text">
                This approach supports timely compliance and helps organisations maintain proper records for statutory audits and inspections.
            </p>

            <!-- Relevance -->
            <h3 class="info-subheading">Relevance to Workplace Compliance</h3>

            <p class="info-text">
                Constituting an Internal Committee is mandatory under the POSH Act for organisations with ten or more employees. Non-compliance can lead to penalties and reputational risk. For new companies, establishing an Internal Committee should be prioritised as part of initial compliance requirements. The POSH Act applies to all business entities, including private limited companies, LLPs, and other organisations.
            </p>
        </div>

        <!-- Sample Format -->
        <div class="format-section">
            <h3 class="format-title">
                Board Resolution for Constitution of Internal Committee (POSH) – Sample Format
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
                <strong>CONSTITUTION OF INTERNAL COMMITTEE UNDER THE POSH ACT, 2013</strong>
            </p>

            <p class="format-text">
                RESOLVED THAT pursuant to Section 4 of The Sexual Harassment of Women at Workplace (Prevention, Prohibition and Redressal) Act, 2013, and the rules framed thereunder, the approval of the Board of Directors of the Company be and is hereby accorded for the constitution/reconstitution of an Internal Committee to provide protection against sexual harassment of women at the workplace and for the prevention and redressal of complaints.
            </p>

            <p class="format-text">
                RESOLVED FURTHER THAT the Internal Committee shall comprise of the following members, with Mr./Ms. _______________ being nominated as the Presiding Officer:
            </p>

            <p class="format-text">
                S. No. | Name | Designation/Role | Contact No.<br>
                1 | _______________ (Presiding Officer) | _______________ | _______________<br>
                2 | _______________ (Internal Member) | _______________ | _______________<br>
                3 | _______________ (Internal Member) | _______________ | _______________<br>
                4 | _______________ (External Member) | _______________ | _______________
            </p>

            <p class="format-text">
                RESOLVED FURTHER THAT the Internal Committee shall function, hear, and redress complaints in accordance with the POSH Act, 2013, and its rules.
            </p>

            <p class="format-text">
                RESOLVED FURTHER THAT Mr./Ms. _______________, Director of the Company, be and is hereby authorised to take all necessary steps to give effect to this resolution, including executing, signing, and filing required documents and e-forms with statutory authorities.
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
                    1. Is the signature of all directors mandatory on the Board Resolution for POSH?
                </h4>
                <p class="faq-answer">
                    No, only one authorised director or the Chairperson signs the certified true copy. The resolution must be passed with requisite quorum.
                </p>
            </div>

            <div class="faq-item">
                <h4 class="faq-question">
                    2. Which resolution is required for constitution of Internal Committee (POSH)?
                </h4>
                <p class="faq-answer">
                    An ordinary resolution by the Board of Directors is sufficient. Shareholder approval or special resolution is not required.
                </p>
            </div>

            <div class="faq-item">
                <h4 class="faq-question">
                    3. Does the Board Resolution need professional certification?
                </h4>
                <p class="faq-answer">
                    Certification by a Company Secretary or Chartered Accountant is not mandatory, but may be used for additional authenticity.
                </p>
            </div>

            <div class="faq-item">
                <h4 class="faq-question">
                    4. Which act governs the constitution of the Internal Committee (POSH)?
                </h4>
                <p class="faq-answer">
                    The Sexual Harassment of Women at Workplace (Prevention, Prohibition and Redressal) Act, 2013 governs the constitution and functioning of the Internal Committee.
                </p>
            </div>

            <div class="faq-item">
                <h4 class="faq-question">
                    5. Who is the authorised signatory for certifying the board resolution?
                </h4>
                <p class="faq-answer">
                    Typically, a Director of the company or the Company Secretary signs and certifies the resolution as a true copy.
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
    const form = document.getElementById('poshCommitteeForm');
    const downloadPdfBtn = document.getElementById('downloadPdfBtn');
    
    // Set default date
    const today = new Date().toISOString().split('T')[0];
    const dateInput = form.querySelector('[name="meeting_date"]');
    const resolutionDateInput = form.querySelector('[name="resolution_sign_date"]');
    if (dateInput) {
        dateInput.value = today;
    }
    if (resolutionDateInput) {
        resolutionDateInput.value = today;
    }

    // Set default time to 11:00 AM
    const timeInput = form.querySelector('[name="meeting_time"]');
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
        
        // Committee Members
        const presidingOfficer = form.querySelector('[name="presiding_officer_name"]').value || '________________';
        const poDesignation = form.querySelector('[name="presiding_officer_designation"]').value || '________________';
        const poContact = form.querySelector('[name="presiding_officer_contact"]').value || '________________';
        
        const im1Name = form.querySelector('[name="internal_member1_name"]').value || '________________';
        const im1Designation = form.querySelector('[name="internal_member1_designation"]').value || '________________';
        const im1Contact = form.querySelector('[name="internal_member1_contact"]').value || '________________';
        
        const im2Name = form.querySelector('[name="internal_member2_name"]').value || '________________';
        const im2Designation = form.querySelector('[name="internal_member2_designation"]').value || '________________';
        const im2Contact = form.querySelector('[name="internal_member2_contact"]').value || '________________';
        
        const emName = form.querySelector('[name="external_member_name"]').value || '________________';
        const emDesignation = form.querySelector('[name="external_member_designation"]').value || '________________';
        const emContact = form.querySelector('[name="external_member_contact"]').value || '________________';
        
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
        document.getElementById('prevEmail').textContent = email;
        
        if (meetingDate) {
            const formattedDate = new Date(meetingDate).toLocaleDateString('en-IN', {
                day: '2-digit',
                month: 'long',
                year: 'numeric'
            });
            document.getElementById('prevMeetingDate').textContent = formattedDate;
        } else {
            document.getElementById('prevMeetingDate').textContent = '__________';
        }
        
        document.getElementById('prevMeetingTime').textContent = meetingTime;
        document.getElementById('prevMeetingAddress').textContent = officeAddress;
        
        // Committee Members
        document.getElementById('prevPresidingOfficer').textContent = presidingOfficer;
        document.getElementById('prevPOFull').textContent = presidingOfficer;
        document.getElementById('prevPODesignation').textContent = poDesignation;
        document.getElementById('prevPOContact').textContent = poContact;
        
        document.getElementById('prevIM1Name').textContent = im1Name;
        document.getElementById('prevIM1Designation').textContent = im1Designation;
        document.getElementById('prevIM1Contact').textContent = im1Contact;
        
        document.getElementById('prevIM2Name').textContent = im2Name;
        document.getElementById('prevIM2Designation').textContent = im2Designation;
        document.getElementById('prevIM2Contact').textContent = im2Contact;
        
        document.getElementById('prevEMName').textContent = emName;
        document.getElementById('prevEMDesignation').textContent = emDesignation;
        document.getElementById('prevEMContact').textContent = emContact;
        
        // Authorized Signatory
        document.getElementById('prevAuthPerson').textContent = authPerson;
        document.getElementById('prevDesignation').textContent = designation;
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
<!--End Js Section -->

@endsection
