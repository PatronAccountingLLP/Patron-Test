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
            <h1 class="hero-title">Board Resolution for <span> Alteration of Articles of Association</span></h1>
            <p class="hero-subtitle">
                Generate a certified Board Resolution for Alteration of Articles of Association in under 60 seconds.
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
            <h2 class="form-title">Enter Company & AOA Alteration Details</h2>
            <p class="form-description">
                Fill in the details below to generate a Board Resolution for Alteration of Articles of Association.
            </p>
        </div>

        <form id="aoaAlterationForm" method="POST" action="{{route('br.aoa.alteration') }}">
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

                <!-- Amendments Section -->
                <div class="form-group full-width">
                    <h3 class="section-title">Amendments to Articles of Association</h3>
                    <p class="form-description" style="font-size: 12px; color: #666; margin-bottom: 10px;">
                        List the specific amendments to be made (one per line). Example:<br>
                        1. Article 5: Increase in authorized share capital from Rs. 10,00,000 to Rs. 50,00,000<br>
                        2. Article 12: Modification of quorum requirements for board meetings
                    </p>
                </div>
                <div class="form-group full-width">
                    <label class="form-label">List of Amendments <span class="required">*</span></label>
                    <textarea name="amendments" class="form-control" placeholder="Enter amendments (one per line)" rows="5" required></textarea>
                </div>

                <!-- Authorized Signatory 1 -->
                <div class="form-group full-width">
                    <h3 class="section-title">Authorized Signatory 1 Details</h3>
                </div>
                <div class="form-row">
                    <div class="form-group">
                        <label class="form-label">Name <span class="required">*</span></label>
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
                <div class="form-row">
                    <div class="form-group">
                        <label class="form-label">DIN Number <span class="required">*</span></label>
                        <input type="text" name="din" class="form-control" placeholder="Enter DIN Number" required>
                    </div>
                    <div class="form-group">
                        <label class="form-label">Address <span class="required">*</span></label>
                        <input type="text" name="address_1" class="form-control" placeholder="Enter address" required>
                    </div>
                </div>

                <!-- Authorized Signatory 2 -->
                <div class="form-group full-width">
                    <h3 class="section-title">Authorized Signatory 2 Details</h3>
                </div>
                <div class="form-row">
                    <div class="form-group">
                        <label class="form-label">Name <span class="required">*</span></label>
                        <input type="text" name="authorized_person_name_2" class="form-control" placeholder="Enter name" required>
                    </div>
                    <div class="form-group">
                        <label class="form-label">Designation <span class="required">*</span></label>
                        <div class="select-wrapper">
                            <select name="designation_2" class="form-control form-select" required>
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
                <div class="form-row">
                    <div class="form-group">
                        <label class="form-label">DIN Number <span class="required">*</span></label>
                        <input type="text" name="din_2" class="form-control" placeholder="Enter DIN Number" required>
                    </div>
                    <div class="form-group">
                        <label class="form-label">Address <span class="required">*</span></label>
                        <input type="text" name="address_2" class="form-control" placeholder="Enter address" required>
                    </div>
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
                        <p class="preview-subtitle">Board Resolution for Alteration of Articles of Association</p>
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
                        <strong>ALTERATION OF ARTICLES OF ASSOCIATION</strong>
                    </p>

                    <p class="certificate-paragraph">
                        <strong>RESOLVED THAT</strong> pursuant to the provisions of Section 14 and all other applicable provisions, if any, of the Companies Act, 2013 and the rules made thereunder (including any statutory modification(s), amendment, or re-enactment thereof for the time being in force), the consent of the Board of Directors of the Company be and is hereby accorded, subject to the approval of members of the Company at a duly convened General Meeting by way of Special Resolution, to adopt a new set of altered Articles of Association in place of the existing Articles of Association of the Company, with the following amendments:
                    </p>

                    <div class="amendments-list" id="prevAmendments">
                        <p>1. ________________</p>
                        <p>2. ________________</p>
                        <p>3. ________________</p>
                    </div>

                    <p class="certificate-paragraph">
                        <strong>RESOLVED FURTHER THAT</strong> Mr./Ms. 
                        <strong id="prevAuthPerson1">________________</strong>, 
                        <strong id="prevDesignation1">________________</strong> and Mr./Ms. 
                        <strong id="prevAuthPerson2">________________</strong>, 
                        <strong id="prevDesignation2">________________</strong> of the Company be and are hereby severally authorised to convene an Extraordinary General Meeting of the members, to file the necessary e-forms including Form MGT-14 with the Registrar of Companies, and to do all such acts, deeds, matters, and things as may be necessary, proper, or expedient to give effect to the above resolution.
                    </p>

                    <div class="certificate-signature">
                        <p class="signature-label">For <strong id="footerCompanyName">________________</strong></p>
                        <p style="margin-top: 20px;"><strong>Authorised Signatory 1:</strong></p>
                        <p class="signature-label">Signature: _________________________</p>
                        <p class="signature-label">Name: <strong id="footerAuthName1">________________</strong></p>
                        <p class="signature-label">Designation: <strong id="footerDesignation1">________________</strong></p>
                        <p class="signature-label">DIN: <strong id="footerDIN1">________________</strong></p>
                        <p class="signature-label">Address: <strong id="footerAddress1">________________</strong></p>
                        
                        <p style="margin-top: 20px;"><strong>Authorised Signatory 2:</strong></p>
                        <p class="signature-label">Signature: _________________________</p>
                        <p class="signature-label">Name: <strong id="footerAuthName2">________________</strong></p>
                        <p class="signature-label">Designation: <strong id="footerDesignation2">________________</strong></p>
                        <p class="signature-label">DIN: <strong id="footerDIN2">________________</strong></p>
                        <p class="signature-label">Address: <strong id="footerAddress2">________________</strong></p>
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
            <h2 class="info-title">Board Resolution for Alteration of Articles of Association</h2>
            <p class="info-subtitle">
                Professional Format Guide for Indian Companies
            </p>
        </div>

        <!-- Introduction -->
        <div class="info-content">
            <h3 class="info-subheading">Introduction</h3>

            <p class="info-text">
                A Board Resolution for Alteration of Articles of Association (AOA) is a formal corporate
                document that records the decision of the Board of Directors to propose amendments to
                the company's Articles of Association. The Articles of Association govern the internal
                management and administration of a company, including rules relating to share capital,
                rights of shareholders, conduct of meetings, powers of directors, dividend distribution,
                and other operational matters.
            </p>

            <p class="info-text">
                Under the Companies Act, 2013, a company may alter its Articles of Association to align
                with changing business requirements, regulatory updates, or operational restructuring.
                The alteration process requires a board resolution recommending the changes, followed
                by approval from shareholders through a special resolution passed at a general meeting.
                Common reasons for AOA alteration include changes in share transfer restrictions,
                director appointment procedures, borrowing powers, statutory compliance, or internal
                governance restructuring.
            </p>

            <!-- Benefits -->
            <h3 class="info-subheading">Benefits of Using a Standard Format</h3>

            <p class="info-text">
                Utilising a professionally drafted board resolution format ensures that all statutory
                requirements under the Companies Act, 2013 are comprehensively addressed. A standardised
                template reduces the likelihood of procedural errors, maintains consistency in corporate
                documentation, and facilitates smooth processing with the Registrar of Companies.
            </p>

            <p class="info-text">
                This approach supports timely compliance and helps companies manage the amendment
                process efficiently while ensuring proper documentation of the board’s recommendation.
            </p>

            <!-- Relevance -->
            <h3 class="info-subheading">Relevance to Company Governance</h3>

            <p class="info-text">
                The Articles of Association form a fundamental part of a company’s constitutional
                documents established during Company Registration. As business needs evolve, companies
                may need to modify these articles to accommodate operational changes, regulatory updates,
                or revised shareholder arrangements.
            </p>

            <p class="info-text">
                The alteration of AOA requires compliance with procedures prescribed under the
                Companies Act, 2013, including board approval, shareholder consent through a special
                resolution, and filing of Form MGT-14 with the Registrar of Companies within 30 days.
                The board resolution acts as the initiating document that authorises these actions.
            </p>
        </div>

        <!-- Sample Format -->
        <div class="format-section">
            <h3 class="format-title">
                Board Resolution for Alteration of Articles of Association – Sample Format
            </h3>

            <p class="format-note">
                <em>[To be printed on Company Letterhead]</em>
            </p>

            <p class="format-text"><strong>Company Name:</strong> ___________________________</p>
            <p class="format-text"><strong>CIN:</strong> ___________________________</p>
            <p class="format-text"><strong>Registered Office Address:</strong> ___________________________</p>
            <p class="format-text"><strong>Email:</strong> ___________________________</p>

            <p class="format-text">
                <strong>CERTIFIED TRUE COPY OF THE BOARD RESOLUTION</strong>
            </p>

            <p class="format-text">
                Passed at the Meeting of the Board of Directors of the Company held on
                __________ (Date) at __________ (Time) at the Registered Office of the Company
                at __________ (Address)
            </p>

            <p class="format-text">
                <strong>ALTERATION OF ARTICLES OF ASSOCIATION</strong>
            </p>

            <p class="format-text">
                <strong>RESOLVED THAT</strong> pursuant to the provisions of Section 14 and all other
                applicable provisions of the Companies Act, 2013 and the rules made thereunder,
                the consent of the Board of Directors be and is hereby accorded, subject to the approval
                of the members of the Company by way of Special Resolution, to adopt a new set of altered
                Articles of Association in place of the existing Articles of Association of the Company
                with the following amendments:
            </p>

            <p class="format-text">1. ________________________________________________</p>
            <p class="format-text">2. ________________________________________________</p>
            <p class="format-text">3. ________________________________________________</p>

            <p class="format-text">
                <strong>RESOLVED FURTHER THAT</strong> Mr./Ms. __________ (Name), __________ (Designation)
                and Mr./Ms. __________ (Name), __________ (Designation) be and are hereby severally
                authorised to convene an Extraordinary General Meeting, file necessary e-forms including
                Form MGT-14 with the Registrar of Companies, and do all such acts, deeds, and things as
                may be required to give effect to this resolution.
            </p>

            <p class="format-text">For __________ (Company Name)</p>

            <p class="format-text"><strong>Authorised Signatory 1:</strong></p>
            <p class="format-text"><strong>Signature:</strong> ___________________________</p>
            <p class="format-text"><strong>Name:</strong> ___________________________</p>
            <p class="format-text"><strong>Designation:</strong> ___________________________</p>
            <p class="format-text"><strong>DIN:</strong> ___________________________</p>
            <p class="format-text"><strong>Address:</strong> ___________________________</p>

            <p class="format-text"><strong>Authorised Signatory 2:</strong></p>
            <p class="format-text"><strong>Signature:</strong> ___________________________</p>
            <p class="format-text"><strong>Name:</strong> ___________________________</p>
            <p class="format-text"><strong>Designation:</strong> ___________________________</p>
            <p class="format-text"><strong>DIN:</strong> ___________________________</p>
            <p class="format-text"><strong>Address:</strong> ___________________________</p>
        </div>

        <!-- FAQ -->
        <div class="faq-section">
            <h3 class="faq-title">Frequently Asked Questions</h3>

            <div class="faq-item">
                <h4 class="faq-question">
                    1. Are details in the board resolution same as the special resolution?
                </h4>
                <p class="faq-answer">
                    The essential details are largely similar; however, the board resolution recommends
                    the changes, while the special resolution passed by shareholders formally approves
                    the alteration with a 75% majority.
                </p>
            </div>

            <div class="faq-item">
                <h4 class="faq-question">
                    2. Is the signature of all directors mandatory?
                </h4>
                <p class="faq-answer">
                    No. The resolution must be passed with the requisite quorum, and the certified true
                    copy is usually signed by the Chairperson or authorised directors.
                </p>
            </div>

            <div class="faq-item">
                <h4 class="faq-question">
                    3. Is professional certification required?
                </h4>
                <p class="faq-answer">
                    Certification of the board resolution itself is not mandatory. However, Form MGT-14
                    may require certification by a practising professional depending on the company’s
                    category.
                </p>
            </div>

            <div class="faq-item">
                <h4 class="faq-question">
                    4. Is the board resolution mandatory to attach with MCA filings?
                </h4>
                <p class="faq-answer">
                    The special resolution and altered Articles are mandatory attachments. The board
                    resolution is maintained as part of internal corporate records.
                </p>
            </div>

            <div class="faq-item">
                <h4 class="faq-question">
                    5. What is the format for alteration of AOA?
                </h4>
                <p class="faq-answer">
                    The process involves a board resolution recommending the changes and a special
                    resolution approved by shareholders, followed by filing Form MGT-14 within 30 days.
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
    const form = document.getElementById('aoaAlterationForm');
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
        const email = form.querySelector('[name="company_email"]').value || '________________';
        
        // Meeting Details
        const meetingDate = form.querySelector('[name="meeting_date"]').value;
        const meetingTime = form.querySelector('[name="meeting_time"]').value || '11:00 AM';
        
        // Amendments
        const amendmentsText = form.querySelector('[name="amendments"]').value || '';
        
        // Authorized Signatory 1
        const authPerson1 = form.querySelector('[name="authorized_person_name"]').value || '________________';
        const designation1 = form.querySelector('[name="owner_director_partner"]').value || '________________';
        const din1 = form.querySelector('[name="din"]').value || '________________';
        const address1 = form.querySelector('[name="address_1"]').value || '________________';
        
        // Authorized Signatory 2
        const authPerson2 = form.querySelector('[name="authorized_person_name_2"]').value || '________________';
        const designation2 = form.querySelector('[name="designation_2"]').value || '________________';
        const din2 = form.querySelector('[name="din_2"]').value || '________________';
        const address2 = form.querySelector('[name="address_2"]').value || '________________';
        
        const place = form.querySelector('[name="state"]').value || '________________';
        const resolutionDate = form.querySelector('[name="resolution_sign_date"]').value;

        // Update preview elements
        document.getElementById('prevBusinessName').textContent = companyName;
        document.getElementById('footerCompanyName').textContent = companyName;
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
        
        document.getElementById('prevMeetingTime').textContent = meetingTime;
        
        // Update amendments list
        const amendmentsList = document.getElementById('prevAmendments');
        if (amendmentsText.trim()) {
            const amendments = amendmentsText.split('\n').filter(line => line.trim() !== '');
            amendmentsList.innerHTML = '';
            amendments.forEach((amendment, index) => {
                if (index < 10) { // Limit to 10 amendments for preview
                    const p = document.createElement('p');
                    p.textContent = `${index + 1}. ${amendment.trim()}`;
                    amendmentsList.appendChild(p);
                }
            });
            // Add empty lines if less than 3 amendments
            for (let i = amendments.length; i < 3; i++) {
                const p = document.createElement('p');
                p.textContent = `${i + 1}. ________________`;
                amendmentsList.appendChild(p);
            }
        } else {
            amendmentsList.innerHTML = `
                <p>1. ________________</p>
                <p>2. ________________</p>
                <p>3. ________________</p>
            `;
        }
        
        // Authorized persons details
        document.getElementById('prevAuthPerson1').textContent = authPerson1;
        document.getElementById('prevDesignation1').textContent = designation1;
        document.getElementById('prevAuthPerson2').textContent = authPerson2;
        document.getElementById('prevDesignation2').textContent = designation2;
        
        // Footer details
        document.getElementById('footerAuthName1').textContent = authPerson1;
        document.getElementById('footerDesignation1').textContent = designation1;
        document.getElementById('footerDIN1').textContent = din1;
        document.getElementById('footerAddress1').textContent = address1;
        
        document.getElementById('footerAuthName2').textContent = authPerson2;
        document.getElementById('footerDesignation2').textContent = designation2;
        document.getElementById('footerDIN2').textContent = din2;
        document.getElementById('footerAddress2').textContent = address2;
        
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
