@extends('tools.tool-master')
@section('title')
{{_(' Application for Closure of LLP (Designated Partners Resolution)')}}
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
            <h1 class="hero-title"> <span> Application for Closure of LLP (Designated Partners Resolution)</span></h1>
            <p class="hero-subtitle">
                Generate a certified Application for Closure of LLP (Designated Partners Resolution) in under 60 seconds.
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
            <h2 class="form-title">Enter LLP Closure Details</h2>
            <p class="form-description">
                Fill in the details below to generate a Designated Partners' Resolution for Closure of LLP.
            </p>
        </div>

        <form id="llpClosureForm" method="POST" action="{{ route('br.llp.closure') }}">
            @csrf

            <div class="form-grid">
                <!-- LLP Details -->
                <div class="form-group full-width">
                    <label class="form-label">LLP Name <span class="required">*</span></label>
                    <input type="text" name="llp_name" class="form-control" placeholder="Enter LLP name" required>
                </div>
                <div class="form-group full-width">
                    <label class="form-label">LLPIN <span class="required">*</span></label>
                    <input type="text" name="llpin" class="form-control" placeholder="e.g., AAA-1234" required>
                </div>
                <div class="form-group full-width">
                    <label class="form-label">Registered Office Address <span class="required">*</span></label>
                    <textarea name="registered_office" class="form-control" placeholder="Complete address" required></textarea>
                </div>
                <div class="form-group full-width">
                    <label class="form-label">Email <span class="required">*</span></label>
                    <input type="email" name="email" class="form-control" placeholder="Enter email" required>
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

                <!-- ROC Jurisdiction -->
                <div class="form-group full-width">
                    <label class="form-label">ROC Jurisdiction <span class="required">*</span></label>
                    <input type="text" name="roc_jurisdiction" class="form-control" placeholder="e.g., Mumbai, Delhi" required>
                </div>

                <!-- Designated Partners (up to 5) -->
                <div class="form-group full-width">
                    <label class="form-label">Designated Partners <span class="required">*</span></label>
                    <div id="partnersContainer">
                        <div class="partner-row" data-index="0">
                            <div class="form-row">
                                <div class="form-group"><input type="text" name="partner1_name" class="form-control" placeholder="Full Name" required></div>
                                <div class="form-group"><input type="text" name="partner1_dpin" class="form-control" placeholder="DPIN" required></div>
                            </div>
                        </div>
                        <div class="partner-row" data-index="1">
                            <div class="form-row">
                                <div class="form-group"><input type="text" name="partner2_name" class="form-control" placeholder="Full Name" required></div>
                                <div class="form-group"><input type="text" name="partner2_dpin" class="form-control" placeholder="DPIN" required></div>
                            </div>
                        </div>
                        <div class="partner-row" data-index="2">
                            <div class="form-row">
                                <div class="form-group"><input type="text" name="partner3_name" class="form-control" placeholder="Full Name (Optional)"></div>
                                <div class="form-group"><input type="text" name="partner3_dpin" class="form-control" placeholder="DPIN (Optional)"></div>
                            </div>
                        </div>
                        <div class="partner-row" data-index="3">
                            <div class="form-row">
                                <div class="form-group"><input type="text" name="partner4_name" class="form-control" placeholder="Full Name (Optional)"></div>
                                <div class="form-group"><input type="text" name="partner4_dpin" class="form-control" placeholder="DPIN (Optional)"></div>
                            </div>
                        </div>
                        <div class="partner-row" data-index="4">
                            <div class="form-row">
                                <div class="form-group"><input type="text" name="partner5_name" class="form-control" placeholder="Full Name (Optional)"></div>
                                <div class="form-group"><input type="text" name="partner5_dpin" class="form-control" placeholder="DPIN (Optional)"></div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Place and Date -->
                <div class="form-row">
                    <div class="form-group">
                        <label class="form-label">Place <span class="required">*</span></label>
                        <input type="text" name="place" class="form-control" placeholder="City / Place" required>
                    </div>
                    <div class="form-group">
                        <label class="form-label">Resolution Date <span class="required">*</span></label>
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
                        <p class="preview-subtitle">Designated Partners' Resolution for Closure of LLP</p>
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
                    <h2 class="certificate-doc-title">CERTIFIED TRUE COPY OF THE RESOLUTION</h2>
                    <p class="certificate-doc-subtitle">
                        Passed by the Designated Partners of the LLP
                    </p>
                </div>

                <div class="certificate-body">
                    <div class="company-details">
                        <p><strong id="previewLLPName">________________</strong></p>
                        <p><strong>LLPIN: </strong><span id="previewLLPIN">________________</span></p>
                        <p><strong>Registered Office: </strong><span id="previewRegOffice">________________</span></p>
                        <p><strong>Email: </strong><span id="previewEmail">________________</span></p>
                    </div>

                    <p class="certificate-paragraph">
                        <strong>Date of Meeting: </strong><span id="previewMeetingDate">__________</span><br>
                        <strong>Time: </strong><span id="previewMeetingTime">______</span> (Hours)<br>
                        <strong>Venue: </strong>Registered Office of the LLP at <span id="previewRegOfficeVenue">________________</span>
                    </p>

                    <p class="certificate-paragraph">
                        <strong>SUBJECT: APPLICATION FOR CLOSURE / STRIKE OFF OF LLP</strong>
                    </p>

                    <p class="certificate-paragraph">
                        <strong>"RESOLVED THAT</strong> pursuant to the relevant provisions of the Limited Liability Partnership Act, 2008 read with the rules made thereunder and in accordance with the LLP Agreement, the consent of all Designated Partners be and is hereby accorded to make an application to the Registrar of Companies, <strong><span id="previewROCJurisdiction">________________</span></strong> for striking off the name of <strong><span id="previewLLPNameResolve">________________</span></strong> LLP (LLPIN: <strong><span id="previewLLPINResolve">________________</span></strong>) from the Register of Limited Liability Partnerships.
                    </p>

                    <p class="certificate-paragraph">
                        <strong>RESOLVED FURTHER THAT</strong> any of the Designated Partners of the LLP be and is hereby authorised, severally and jointly, on behalf of the LLP to:
                    </p>
                    <ul class="certificate-list">
                        <li>Sign and submit Form 24 (Application for striking off the name of LLP) to the Registrar of Companies through the MCA portal;</li>
                        <li>Execute all documents, papers, applications, and forms whether electronically or physically as may be required;</li>
                        <li>Make any modifications, alterations, or amendments as may be required by the Registrar of Companies;</li>
                        <li>Correspond and communicate with the Registrar of Companies and other authorities on behalf of the LLP;</li>
                        <li>Do all such acts, deeds, matters, and things as may be necessary, proper, or expedient to give effect to this resolution."
                        </li>
                    </ul>

                    <p class="certificate-paragraph">
                        <strong>CONFIRMATION:</strong> We, the undersigned Designated Partners, confirm that the LLP has no liabilities, no assets, and no pending legal proceedings as on the date of this resolution.
                    </p>

                    <p class="certificate-paragraph">
                        <strong>SIGNATURES OF DESIGNATED PARTNERS</strong>
                    </p>

                    <div id="previewSignatures"></div>

                    <p><strong>Place:</strong> <span id="previewPlace">________________</span></p>
                    <p><strong>Date:</strong> <span id="previewResolutionDate">________________</span></p>
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
            <h2 class="info-title">Application for Closure of LLP (Designated Partners Resolution)</h2>
            <p class="info-subtitle">
                Professional Format Guide for Indian Companies
            </p>
        </div>

        <!-- Introduction -->
        <div class="info-content">
            <h3 class="info-subheading">Introduction</h3>

            <p class="info-text">
                A Application for Closure of LLP (Designated Partners Resolution) is a formal written communication through which a Chartered Accountant firm or individual auditor notifies a company of their intention to relinquish the position of Statutory Auditor. Under the Companies Act, 2013, the appointment and resignation of statutory auditors are governed by specific procedural requirements to ensure transparency and proper corporate governance. When a statutory auditor decides to resign, whether due to professional commitments, conflict of interest, or other reasons, a properly drafted resignation letter becomes essential documentation.
            </p>

            <p class="info-text">
                This document is required for updating records with the Registrar of Companies and initiating the process of appointing a successor auditor. The resignation must be communicated to the company in writing, and the company is obligated to file the necessary forms with the Ministry of Corporate Affairs (MCA) within the prescribed timeline. Company directors, company secretaries, and practising Chartered Accountants regularly utilise this document for maintaining statutory compliance and ensuring smooth transition of audit responsibilities.
            </p>

            <!-- Benefits -->
            <h3 class="info-subheading">Benefits of Using a Standard Format</h3>

            <p class="info-text">
                Utilising a professionally structured resignation letter format ensures that all essential details required under corporate law are accurately captured. A standardised template minimises the risk of omitting critical information, expedites the documentation process, and facilitates seamless compliance with MCA filing requirements. This approach supports proper handover procedures and maintains transparency in corporate audit arrangements.
            </p>

            <!-- Relevance -->
            <h3 class="info-subheading">Relevance to Corporate Compliance</h3>

            <p class="info-text">
                The resignation of a statutory auditor triggers several compliance obligations for the company. The Board of Directors must acknowledge the resignation and initiate steps to appoint a new auditor to fill the casual vacancy. Where the company is registered under GST, continuity of audit arrangements is important for timely completion of financial statements and GST reconciliations.
            </p>

            <p class="info-text">
                Additionally, companies that underwent Company Registration recently should ensure that auditor transitions are managed smoothly to avoid gaps in statutory compliance during formative years of operation.
            </p>
        </div>

        <!-- Sample Format -->
        <div class="format-section">
            <h3 class="format-title">
                Application for Closure of LLP (Designated Partners Resolution) - Sample Format
            </h3>

            <p class="format-text">
                <strong>Date:</strong> _______________________________________
            </p>

            <p class="format-text">
                To,
            </p>

            <p class="format-text">
                The Board of Directors,
            </p>

            <p class="format-text">
                _______________________________________ Private Limited
            </p>

            <p class="format-text">
                (Company Name)
            </p>

            <p class="format-text">
                <strong>CIN:</strong> _______________________________________
            </p>

            <p class="format-text">
                <strong>Registered Office:</strong> _______________________________________
            </p>

            <p class="format-text">
                <strong>Subject:</strong> Resignation from the position of Statutory Auditor
            </p>

            <p class="format-text">
                Dear Sir/Madam,
            </p>

            <p class="format-text">
                We write to formally notify you of our decision to resign from the position of Statutory Auditor of the Company. Due to our pre-occupation with other professional assignments and commitments, we find ourselves unable to devote adequate time and attention to the audit affairs of your Company.
            </p>

            <p class="format-text">
                Accordingly, we hereby tender our resignation as Statutory Auditors of the Company with effect from the date of this letter, i.e., _______________________________________ (Date of Resignation).
            </p>

            <p class="format-text">
                We request you to kindly accept this resignation and treat this letter as formal notice of our cessation as Statutory Auditors of the Company. We confirm that we have no objection to the appointment of any other Chartered Accountant or firm of Chartered Accountants as Statutory Auditors of your Company in our place.
            </p>

            <p class="format-text">
                We further confirm that there are no circumstances connected with our resignation which we consider should be brought to the notice of the members or creditors of the Company, except for the reason stated above.
            </p>

            <p class="format-text">
                We request you to file the requisite forms with the Registrar of Companies intimating our resignation within the prescribed time limit as required under the Companies Act, 2013.
            </p>

            <p class="format-text">
                Thanking you,
            </p>

            <p class="format-text">
                Yours faithfully,
            </p>

            <p class="format-text">
                For _______________________________________
            </p>

            <p class="format-text">
                (Name of the Chartered Accountant Firm)
            </p>

            <p class="format-text">
                Chartered Accountants
            </p>

            <p class="format-text">
                <strong>Firm Registration Number (FRN):</strong> _______________________________________
            </p>

            <p class="format-text">
                <strong>Signature:</strong> _______________________________________
            </p>

            <p class="format-text">
                <strong>Name of Partner/Proprietor:</strong> _______________________________________
            </p>

            <p class="format-text">
                <strong>Membership Number:</strong> _______________________________________
            </p>

            <p class="format-text">
                <strong>UDIN (if applicable):</strong> _______________________________________
            </p>

            <p class="format-text">
                <strong>Contact Number:</strong> _______________________________________
            </p>

            <p class="format-text">
                <strong>Email:</strong> _______________________________________
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
                    1. Who can be considered as an authorised signatory for the resignation letter of the Statutory Auditor?
                </h4>
                <p class="faq-answer">
                    The authorised signatory for the resignation letter is the Statutory Auditor themselves, typically a partner or proprietor of the Chartered Accountant firm holding the audit appointment. The letter should be signed by the individual whose name appears in the appointment letter or by an authorised partner of the audit firm. The signatory must include their membership number as issued by the Institute of Chartered Accountants of India (ICAI).
                </p>
            </div>

            <div class="faq-item">
                <h4 class="faq-question">
                    2. Is the signature of all directors mandatory on the resignation letter of the Statutory Auditor?
                </h4>
                <p class="faq-answer">
                    No, the resignation letter is submitted by the Statutory Auditor to the company, not by the directors. The letter should be signed by the resigning auditor. However, the Board of Directors must acknowledge receipt of the resignation and pass a board resolution noting the resignation. The company then files the necessary intimation with the Registrar of Companies.
                </p>
            </div>

            <div class="faq-item">
                <h4 class="faq-question">
                    3. What are the details contained in the resignation letter of a statutory auditor?
                </h4>
                <p class="faq-answer">
                    A resignation letter of a statutory auditor should contain the name and address of the auditor or audit firm, Firm Registration Number (FRN), the name and CIN of the company, the effective date of resignation, the reason for resignation, a statement regarding any circumstances that should be brought to the notice of members or creditors, and the signature with membership number and contact details of the resigning auditor.
                </p>
            </div>

            <div class="faq-item">
                <h4 class="faq-question">
                    4. Does the resignation letter of the Statutory Auditor need to be certified by a professional?
                </h4>
                <p class="faq-answer">
                    The resignation letter itself does not require certification by another professional as it is a communication from the resigning auditor. However, the auditor must file Form ADT-3 with the Registrar of Companies within 30 days of resignation, providing reasons for the resignation. The company must also file Form ADT-1 for appointment of a new auditor. These filings may require certification by a practising professional depending on the specific circumstances.
                </p>
            </div>

        </div>

    </div>
</div>

    </div>
</div>

<!-- JavaScript -->
<script>
document.addEventListener('DOMContentLoaded', function () {
    const form = document.getElementById('llpClosureForm');

    // Set default dates
    const today = new Date().toISOString().slice(0,10);
    const meetingDateInput = form.querySelector('[name="meeting_date"]');
    const resolutionDateInput = form.querySelector('[name="resolution_date"]');
    if (meetingDateInput && !meetingDateInput.value) meetingDateInput.value = today;
    if (resolutionDateInput && !resolutionDateInput.value) resolutionDateInput.value = today;

    // Default meeting time (11:00 AM)
    const meetingTimeInput = form.querySelector('[name="meeting_time"]');
    if (meetingTimeInput && !meetingTimeInput.value) meetingTimeInput.value = "11:00";

    function formatDate(dateString) {
        if (!dateString) return '__________';
        const date = new Date(dateString);
        return date.toLocaleDateString('en-IN', { day: '2-digit', month: 'long', year: 'numeric' });
    }

    function getPartners() {
        const partners = [];
        for (let i = 1; i <= 5; i++) {
            const nameInput = form.querySelector(`[name="partner${i}_name"]`);
            const dpinInput = form.querySelector(`[name="partner${i}_dpin"]`);
            if (nameInput && nameInput.value.trim() !== '') {
                partners.push({
                    name: nameInput.value.trim(),
                    dpin: dpinInput ? dpinInput.value.trim() : ''
                });
            }
        }
        return partners;
    }

    function updatePreview() {
        const llpName = form.querySelector('[name="llp_name"]').value || '________________';
        const llpin = form.querySelector('[name="llpin"]').value || '________________';
        const regOffice = form.querySelector('[name="registered_office"]').value || '________________';
        const email = form.querySelector('[name="email"]').value || '________________';
        const meetingDateRaw = form.querySelector('[name="meeting_date"]').value;
        const meetingDate = meetingDateRaw ? formatDate(meetingDateRaw) : '__________';
        const meetingTime = form.querySelector('[name="meeting_time"]').value || '______';
        const rocJurisdiction = form.querySelector('[name="roc_jurisdiction"]').value || '________________';
        const place = form.querySelector('[name="place"]').value || '________________';
        const resolutionDateRaw = form.querySelector('[name="resolution_date"]').value;
        const resolutionDate = resolutionDateRaw ? formatDate(resolutionDateRaw) : '________________';

        const partners = getPartners();

        // Update basic fields
        document.getElementById('previewLLPName').textContent = llpName;
        document.getElementById('previewLLPIN').textContent = llpin;
        document.getElementById('previewRegOffice').textContent = regOffice;
        document.getElementById('previewEmail').textContent = email;
        document.getElementById('previewMeetingDate').textContent = meetingDate;
        document.getElementById('previewMeetingTime').textContent = meetingTime;
        document.getElementById('previewRegOfficeVenue').textContent = regOffice;
        document.getElementById('previewROCJurisdiction').textContent = rocJurisdiction;
        document.getElementById('previewLLPNameResolve').textContent = llpName;
        document.getElementById('previewLLPINResolve').textContent = llpin;
        document.getElementById('previewPlace').textContent = place;
        document.getElementById('previewResolutionDate').textContent = resolutionDate;

        // Build signatures block
        const sigDiv = document.getElementById('previewSignatures');
        sigDiv.innerHTML = '';
        if (partners.length === 0) {
            const p = document.createElement('p');
            p.textContent = 'No partners added.';
            sigDiv.appendChild(p);
        } else {
            partners.forEach((partner, idx) => {
                const nameP = document.createElement('p');
                nameP.innerHTML = `<strong>Designated Partner ${idx+1}:</strong>`;
                sigDiv.appendChild(nameP);
                const sigP = document.createElement('p');
                sigP.innerHTML = `Signature: _________________________`;
                sigDiv.appendChild(sigP);
                const nameLine = document.createElement('p');
                nameLine.innerHTML = `Name: ${partner.name}`;
                sigDiv.appendChild(nameLine);
                const desigP = document.createElement('p');
                desigP.innerHTML = `Designation: Designated Partner`;
                sigDiv.appendChild(desigP);
                const dpinP = document.createElement('p');
                dpinP.innerHTML = `DPIN: ${partner.dpin}`;
                sigDiv.appendChild(dpinP);
                const space = document.createElement('p');
                space.innerHTML = '&nbsp;';
                sigDiv.appendChild(space);
            });
        }

        updateStepIndicator();
    }

    function updateStepIndicator() {
        const steps = document.querySelectorAll('.step-dot');
        const requiredInputs = form.querySelectorAll('input[required], textarea[required]');
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
    const inputs = form.querySelectorAll('input, textarea');
    inputs.forEach(input => input.addEventListener('input', updatePreview));
    inputs.forEach(input => input.addEventListener('change', updatePreview));
    updatePreview();

  
});
</script>


@endsection
