@extends('tools.tool-master')
@section('title')
{{_(' Board Resolution for Allotment of Shares by Increase in Paid-up Share Capital
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
            <h1 class="hero-title"> <span> Board Resolution for Allotment of Shares by Increase in Paid-up Share Capital
</span></h1>
            <p class="hero-subtitle">
                Generate a certified Board Resolution for Allotment of Shares by Increase in Paid-up Share Capital
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
            <h2 class="form-title">Enter Share Allotment Details</h2>
            <p class="form-description">
                Fill in the details below to generate a Board Resolution for Allotment of Shares by Increase in Paid-up Share Capital.
            </p>
        </div>

        <form id="allotmentForm" method="POST" action="{{ route('br.allotment.shares') }}">
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

                <!-- Share Details -->
                <div class="form-group full-width">
                    <label class="form-label">Number of Shares Allotted <span class="required">*</span></label>
                    <input type="text" name="shares_number" class="form-control" placeholder="e.g., 10000" required>
                </div>
                <div class="form-row">
                    <div class="form-group">
                        <label class="form-label">Face Value per Share (₹) <span class="required">*</span></label>
                        <input type="text" name="face_value" class="form-control" placeholder="e.g., 10" required>
                    </div>
                    <div class="form-group">
                        <label class="form-label">Total Consideration (₹) <span class="required">*</span></label>
                        <input type="text" name="total_consideration" class="form-control" placeholder="e.g., 100000" required>
                    </div>
                </div>
                <div class="form-group full-width">
                    <label class="form-label">Total Consideration (In Words) <span class="required">*</span></label>
                    <input type="text" name="consideration_words" class="form-control" placeholder="e.g., One Lakh Rupees" required>
                </div>

                <!-- Allottees Table -->
                <div class="form-group full-width">
                    <label class="form-label">Allottees <span class="required">*</span></label>
                    <div id="allotteesContainer">
                        <div class="allottee-row" data-index="0">
                            <div class="form-row">
                                <div class="form-group"><input type="text" name="allottees[0][name]" class="form-control" placeholder="Name of Allottee" required></div>
                                <div class="form-group"><input type="text" name="allottees[0][shares]" class="form-control" placeholder="No. of Shares" required></div>
                                <div class="form-group"><input type="text" name="allottees[0][type]" class="form-control" placeholder="Type (Equity/Preference)" value="Equity" required></div>
                                <div class="form-group"><input type="text" name="allottees[0][distinctive_from]" class="form-control" placeholder="Distinctive No. From" required></div>
                                <div class="form-group"><input type="text" name="allottees[0][distinctive_to]" class="form-control" placeholder="Distinctive No. To" required></div>
                                <div class="form-group"><button type="button" class="remove-row-btn" style="display:none;">✖</button></div>
                            </div>
                        </div>
                    </div>
                    <button type="button" class="btn-secondary" id="addAllotteeBtn" style="margin-top:10px;">+ Add Allottee</button>
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
                        <p class="preview-subtitle">Board Resolution for Allotment of Shares</p>
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
                        <strong>Date of Meeting: </strong><span id="previewMeetingDate">__________</span>
                    </p>
                    <p class="certificate-paragraph">
                        <strong>Time: </strong><span id="previewMeetingTime">______</span> (Hours)
                    </p>
                    <p class="certificate-paragraph">
                        <strong>Venue: </strong>Registered Office of the Company at <span id="previewRegOfficeVenue">________________</span>
                    </p>

                    <p class="certificate-paragraph">
                        <strong>SUBJECT: ALLOTMENT OF SHARES AND INCREASE IN PAID-UP SHARE CAPITAL</strong>
                    </p>

                    <p class="certificate-paragraph">
                        <strong>"RESOLVED THAT</strong> pursuant to Section 62 and other applicable provisions of the Companies Act, 2013 read with the rules made thereunder (including any statutory modification(s) or re-enactment(s) thereof for the time being in force) and the Articles of Association of the Company, the consent of the Board of Directors be and is hereby accorded for allotment of the following shares:
                    </p>
                    <p class="certificate-paragraph">
                        <strong>Number of Shares:</strong> <span id="previewSharesNumber">________________</span> Equity Shares<br>
                        <strong>Face Value per Share:</strong> Rs. <span id="previewFaceValue">________________</span>/-
                    </p>
                    <p class="certificate-paragraph">
                        <strong>Total Consideration:</strong> Rs. <span id="previewConsiderationNumber">________________</span>/- (Rupees <span id="previewConsiderationWords">________________</span> only)
                    </p>
                    <p class="certificate-paragraph">
                        to the persons named in the list below, which has been approved by the Board and signed by the Chairman for identification:
                    </p>

                    <div id="previewAllotteesTable" style="margin-bottom:16px;"></div>

                    <p class="certificate-paragraph">
                        <strong>RESOLVED FURTHER THAT</strong> any Director of the Company be and is hereby authorised to file Form PAS-3 (Return of Allotment) with the Registrar of Companies within the prescribed time as per the provisions of the Companies Act, 2013, and to take all necessary steps to implement the above resolution.
                    </p>
                    <p class="certificate-paragraph">
                        <strong>RESOLVED FURTHER THAT</strong> Share Certificates in respect of the aforesaid shares be issued to the Allottee(s) under the signatures of at least two Directors of the Company, and countersigned by the Company Secretary (if appointed), as per the provisions of the Companies Act, 2013.
                    </p>
                    <p class="certificate-paragraph">
                        <strong>RESOLVED FURTHER THAT</strong> the Register of Members be updated to reflect the new shareholding, and necessary entries be made in other statutory registers as applicable."
                    </p>

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


<style>
.allottee-row {
    margin-bottom: 10px;
}
.allottee-row .form-row {
    display: flex;
    gap: 10px;
    align-items: flex-start;
}
.allottee-row .form-group {
    flex: 1;
}
.remove-row-btn {
    background: #dc3545;
    color: white;
    border: none;
    border-radius: 4px;
    cursor: pointer;
    padding: 8px 12px;
    margin-top: 5px;
}
.btn-secondary {
    background: #6c757d;
    color: white;
    border: none;
    padding: 8px 16px;
    border-radius: 6px;
    cursor: pointer;
}
.btn-secondary:hover {
    background: #5a6268;
}
</style>
<div class="info-section">
    <div class="info-card">

        <!-- Header -->
        <div class="info-header">
            <span class="info-header-badge">Professional Format Guide</span>
            <h2 class="info-title">Board Resolution for Allotment of Shares by Increase in Paid-up Share Capital</h2>
            <p class="info-subtitle">
                Standard Board Resolution Template for Share Allotment
            </p>
        </div>

        <!-- Introduction -->
        <div class="info-content">
            <h3 class="info-subheading">Introduction</h3>
            <p class="info-text">
                A Board Resolution for Allotment of Shares by Increase in Paid-up Share Capital is a formal corporate document that records the Board of Directors' decision to allot shares to new or existing shareholders, thereby increasing the paid-up capital of the company. Under the Companies Act, 2013, a company may issue and allot shares within its authorised share capital to raise funds for business expansion, working capital requirements, or other corporate purposes. The Board must pass a resolution approving the allotment after receiving the subscription money and necessary documentation from the allottees.
            </p>
            <p class="info-text">
                The resolution specifies the names of allottees, number of shares allotted to each, face value per share, type of shares (equity or preference), distinctive numbers of shares, and the total consideration received. Following the allotment, the company must file Form PAS-3 (Return of Allotment) with the Registrar of Companies within thirty days of the allotment. Share certificates must be issued to allottees within two months of allotment. The Register of Members must also be updated to reflect the new shareholding pattern.
            </p>
        </div>

        <!-- Benefits -->
        <div class="info-content">
            <h3 class="info-subheading">Benefits of Using a Standard Format</h3>
            <p class="info-text">
                Utilising a professionally drafted board resolution format ensures that all statutory requirements under the Companies Act, 2013 are properly addressed. A ready-to-use template saves valuable time during the share allotment process, reduces the risk of procedural errors, and provides a consistent framework for documenting Board decisions. Standardised formats facilitate smoother ROC filings and ensure compliance with regulatory requirements.
            </p>
        </div>

        <!-- Relevance -->
        <div class="info-content">
            <h3 class="info-subheading">Relevance to Capital Structure Changes</h3>
            <p class="info-text">
                Following Company Registration, companies often need to raise additional capital through fresh share allotment. Any increase in paid-up capital must be properly recorded and intimated to the Registrar of Companies through Form PAS-3 (Return of Allotment) and Form SH-7 (Notice of alteration of share capital) if applicable. If the company has GST Registration, increased capital and expanded business operations may impact GST compliance requirements. The allotment must be made only within the authorised capital or after obtaining necessary approvals for increasing authorised capital.
            </p>
        </div>

        <!-- Sample Board Resolution Format -->
        <div class="format-section">
            <h3 class="format-title">Board Resolution for Allotment of Shares by Increase in Paid-up Share Capital – Sample Format</h3>

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
                SUBJECT: ALLOTMENT OF SHARES AND INCREASE IN PAID-UP SHARE CAPITAL
            </p>

            <p class="format-text">
                "RESOLVED THAT pursuant to Section 62 and other applicable provisions of the Companies Act, 2013 read with the rules made thereunder (including any statutory modification(s) or re-enactment(s) thereof for the time being in force) and the Articles of Association of the Company, the consent of the Board of Directors be and is hereby accorded for allotment of the following shares:
            </p>

            <p class="format-text">
                Number of Shares: ________________________ Equity Shares<br>
                Face Value per Share: Rs. ________________________/-<br>
                Total Consideration: Rs. ________________________/- (Rupees ________________________ only)<br>
                to the persons named in the list below, which has been approved by the Board and signed by the Chairman for identification:
            </p>

            <table class="format-table">
                <thead>
                    <tr>
                        <th>Name of Allottee</th>
                        <th>No. of Shares Allotted</th>
                        <th>Type of Share</th>
                        <th>Distinctive No.</th>
                    </tr>
                </thead>
                <tbody>
                    <tr><td>________________________</td><td>________________________</td><td>________________________</td><td>________________________</td></tr>
                    <tr><td>________________________</td><td>________________________</td><td>________________________</td><td>________________________</td></tr>
                    <tr><td>________________________</td><td>________________________</td><td>________________________</td><td>________________________</td></tr>
                </tbody>
            </table>

            <p class="format-text">
                RESOLVED FURTHER THAT any Director of the Company be and is hereby authorised to file Form PAS-3 (Return of Allotment) with the Registrar of Companies within the prescribed time as per the provisions of the Companies Act, 2013, and to take all necessary steps to implement the above resolution.<br>
                RESOLVED FURTHER THAT Share Certificates in respect of the aforesaid shares be issued to the Allottee(s) under the signatures of at least two Directors of the Company, and countersigned by the Company Secretary (if appointed), as per the provisions of the Companies Act, 2013.<br>
                RESOLVED FURTHER THAT the Register of Members be updated to reflect the new shareholding, and necessary entries be made in other statutory registers as applicable."
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
                <h4 class="faq-question">1. What is the format of Board Resolution for allotment of shares by increase in paid-up share capital?</h4>
                <p class="faq-answer">
                    The format includes: company details (name, CIN, registered office), meeting particulars (date, time, venue), reference to Section 62 and Articles of Association, allotment details table (name of allottee, number of shares, type of share, distinctive numbers), face value, total consideration, authorisation for filing Form PAS-3, share certificate issuance, and signature block with director's name, designation, and DIN.
                </p>
            </div>

            <div class="faq-item">
                <h4 class="faq-question">2. Is the signature of all directors mandatory on the Board Resolution for allotment of shares?</h4>
                <p class="faq-answer">
                    No, signatures of all directors are not mandatory. The resolution is passed by a majority of directors present and voting at a duly convened board meeting where quorum is present. The certified true copy may be signed by a single authorised director. The minutes of the meeting record directors who were present and voting details.
                </p>
            </div>

            <div class="faq-item">
                <h4 class="faq-question">3. Should the Board Resolution for allotment of shares be on company letterhead?</h4>
                <p class="faq-answer">
                    While not a strict statutory requirement, it is standard corporate practice to issue board resolutions on company letterhead. The letterhead provides authenticity, includes company details (name, CIN, registered office), and demonstrates formal corporate documentation. This is especially important for resolutions submitted to ROC, banks, and other regulatory authorities.
                </p>
            </div>

            <div class="faq-item">
                <h4 class="faq-question">4. Does the Board Resolution for allotment of shares need to be certified by a professional?</h4>
                <p class="faq-answer">
                    The board resolution itself does not require certification by an external professional. Any director can sign the certified true copy. However, Form PAS-3 (Return of Allotment) filed with ROC may require certification by a practising Chartered Accountant, Company Secretary, or Cost Accountant depending on the company type and form requirements.
                </p>
            </div>

            <div class="faq-item">
                <h4 class="faq-question">5. Who can be considered as an authorized signatory for the Board Resolution for allotment of shares?</h4>
                <p class="faq-answer">
                    Any director of the company can be designated as an authorised signatory for the board resolution for allotment of shares. The authorised signatory signs the certified true copy and is empowered to file Form PAS-3 with ROC, update statutory registers, issue share certificates, and execute other documents necessary to give effect to the resolution.
                </p>
            </div>

        </div>

    </div>
</div>

    </div>
</div>

<!-- JavaScript for dynamic rows and live preview -->
<script>
document.addEventListener('DOMContentLoaded', function () {
    const form = document.getElementById('allotmentForm');

    // Set default date
    const today = new Date().toISOString().slice(0,10);
    const meetingDateInput = form.querySelector('[name="meeting_date"]');
    if (meetingDateInput && !meetingDateInput.value) meetingDateInput.value = today;

    const meetingTimeInput = form.querySelector('[name="meeting_time"]');
    if (meetingTimeInput && !meetingTimeInput.value) meetingTimeInput.value = "11:00";

    function formatDate(dateString) {
        if (!dateString) return '__________';
        const date = new Date(dateString);
        return date.toLocaleDateString('en-IN', { day: '2-digit', month: 'long', year: 'numeric' });
    }

    // Helper to get all allottees from form
    function getAllottees() {
        const rows = document.querySelectorAll('.allottee-row');
        const allottees = [];
        rows.forEach(row => {
            const name = row.querySelector('input[name*="[name]"]')?.value || '';
            const shares = row.querySelector('input[name*="[shares]"]')?.value || '';
            const type = row.querySelector('input[name*="[type]"]')?.value || '';
            const from = row.querySelector('input[name*="[distinctive_from]"]')?.value || '';
            const to = row.querySelector('input[name*="[distinctive_to]"]')?.value || '';
            if (name.trim() !== '') {
                allottees.push({ name, shares, type, from, to });
            }
        });
        return allottees;
    }

    function updatePreview() {
        // Company details
        const companyName = form.querySelector('[name="company_name"]').value || '________________';
        const cin = form.querySelector('[name="cin"]').value || '________________';
        const regOffice = form.querySelector('[name="registered_office"]').value || '________________';
        const email = form.querySelector('[name="email"]').value || '________________';

        // Meeting
        const meetingDateRaw = form.querySelector('[name="meeting_date"]').value;
        const meetingDate = meetingDateRaw ? formatDate(meetingDateRaw) : '__________';
        const meetingTime = form.querySelector('[name="meeting_time"]').value || '______';

        // Share details
        const sharesNumber = form.querySelector('[name="shares_number"]').value || '________________';
        const faceValue = form.querySelector('[name="face_value"]').value || '________________';
        const totalConsideration = form.querySelector('[name="total_consideration"]').value || '________________';
        const considerationWords = form.querySelector('[name="consideration_words"]').value || '________________';

        // Signatory
        const signatoryName = form.querySelector('[name="signatory_name"]').value || '________________';
        const designation = form.querySelector('[name="signatory_designation"]').value || '________________';
        const din = form.querySelector('[name="din"]').value || '________________';
        const place = form.querySelector('[name="place"]').value || '________________';

        // Update basic fields
        document.getElementById('previewCompanyName').textContent = companyName;
        document.getElementById('previewCIN').textContent = cin;
        document.getElementById('previewRegOffice').textContent = regOffice;
        document.getElementById('previewEmail').textContent = email;
        document.getElementById('previewMeetingDate').textContent = meetingDate;
        document.getElementById('previewMeetingTime').textContent = meetingTime;
        document.getElementById('previewRegOfficeVenue').textContent = regOffice;
        document.getElementById('previewSharesNumber').textContent = sharesNumber;
        document.getElementById('previewFaceValue').textContent = faceValue;
        document.getElementById('previewConsiderationNumber').textContent = totalConsideration;
        document.getElementById('previewConsiderationWords').textContent = considerationWords;
        document.getElementById('footerCompanyName').textContent = companyName;
        document.getElementById('footerSignatoryName').textContent = signatoryName;
        document.getElementById('footerDesignation').textContent = designation;
        document.getElementById('footerDIN').textContent = din;

        // Build allottees table preview
        const allottees = getAllottees();
        const tableDiv = document.getElementById('previewAllotteesTable');
        tableDiv.innerHTML = '';
        if (allottees.length === 0) {
            const p = document.createElement('p');
            p.textContent = 'No allottees entered.';
            p.style.marginBottom = '8px';
            tableDiv.appendChild(p);
        } else {
            // Create simple representation: each allottee as a paragraph
            allottees.forEach((a, idx) => {
                const p = document.createElement('p');
                p.style.marginBottom = '4px';
                p.style.marginLeft = '20px';
                p.innerHTML = `<strong>${idx+1}.</strong> ${a.name} – ${a.shares} shares (${a.type}) [Distinctive Nos. ${a.from} to ${a.to}]`;
                tableDiv.appendChild(p);
            });
        }

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

    // Dynamic rows handling
    let rowIndex = 1;
    const container = document.getElementById('allotteesContainer');
    document.getElementById('addAllotteeBtn').addEventListener('click', function() {
        const newRow = document.createElement('div');
        newRow.className = 'allottee-row';
        newRow.setAttribute('data-index', rowIndex);
        newRow.innerHTML = `
            <div class="form-row">
                <div class="form-group"><input type="text" name="allottees[${rowIndex}][name]" class="form-control" placeholder="Name of Allottee" required></div>
                <div class="form-group"><input type="text" name="allottees[${rowIndex}][shares]" class="form-control" placeholder="No. of Shares" required></div>
                <div class="form-group"><input type="text" name="allottees[${rowIndex}][type]" class="form-control" placeholder="Type (Equity/Preference)" value="Equity" required></div>
                <div class="form-group"><input type="text" name="allottees[${rowIndex}][distinctive_from]" class="form-control" placeholder="Distinctive No. From" required></div>
                <div class="form-group"><input type="text" name="allottees[${rowIndex}][distinctive_to]" class="form-control" placeholder="Distinctive No. To" required></div>
                <div class="form-group"><button type="button" class="remove-row-btn">✖</button></div>
            </div>
        `;
        // Add remove button functionality
        const removeBtn = newRow.querySelector('.remove-row-btn');
        removeBtn.addEventListener('click', () => newRow.remove());
        // Add input listeners
        const inputs = newRow.querySelectorAll('input');
        inputs.forEach(inp => inp.addEventListener('input', updatePreview));
        container.appendChild(newRow);
        rowIndex++;
    });

    // Remove button for existing rows (if any)
    document.querySelectorAll('.remove-row-btn').forEach(btn => {
        btn.addEventListener('click', function(e) {
            const row = btn.closest('.allottee-row');
            row.remove();
            updatePreview();
        });
    });

    // Attach event listeners to all inputs
    const inputs = form.querySelectorAll('input, textarea, select');
    inputs.forEach(input => input.addEventListener('input', updatePreview));

    // Also listen for changes in dynamically added rows (delegation)
    container.addEventListener('input', function(e) {
        if (e.target.matches('input')) updatePreview();
    });

    updatePreview();

 
});
</script>

@endsection
