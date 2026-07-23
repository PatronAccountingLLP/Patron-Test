@extends('tools.tool-master')
@section('title')
{{_(' Board Resolution for Reimbursement of Pre-Incorporation Expenses
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
            <h1 class="hero-title"> <span> Board Resolution for Reimbursement of Pre-Incorporation Expenses
</span></h1>
            <p class="hero-subtitle">
                Generate a certified Board Resolution for Reimbursement of Pre-Incorporation Expenses
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
            <h2 class="form-title">Enter Pre-Incorporation Expense Details</h2>
            <p class="form-description">
                Fill in the details below to generate a Board Resolution for Reimbursement of Pre-Incorporation Expenses.
            </p>
        </div>

        <form id="preincForm" method="POST" action="{{ route('br.preincorporation') }}">
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

                <!-- Director Presenting -->
                <div class="form-group full-width">
                    <label class="form-label">Name of Director Presenting the Statement <span class="required">*</span></label>
                    <input type="text" name="director_name" class="form-control" placeholder="Enter name" required>
                </div>

                <!-- Expense Details -->
                <div class="form-row">
                    <div class="form-group">
                        <label class="form-label">Total Pre-Incorporation Expenses (₹) <span class="required">*</span></label>
                        <input type="text" name="expense_amount" class="form-control" placeholder="e.g., 50000" required>
                    </div>
                    <div class="form-group">
                        <label class="form-label">Expense Amount (In Words) <span class="required">*</span></label>
                        <input type="text" name="expense_words" class="form-control" placeholder="e.g., Fifty Thousand Rupees" required>
                    </div>
                </div>

                <div class="form-group full-width">
                    <label class="form-label">Statement of Pre-Incorporation Expenses (Optional - provide details)</label>
                    <textarea name="expense_statement" class="form-control" rows="6" placeholder="Date | Nature of Expense | Paid To | Amount | Reference"></textarea>
                    <p class="help-text">Enter each expense on a new line (e.g., 01-04-2025 | ROC Fees | Ministry of Corporate Affairs | 15000 | Receipt #123)</p>
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
                <div class="form-group full-width">
                    <label class="form-label">Resolution Date <span class="required">*</span></label>
                    <input type="date" name="resolution_date" class="form-control" required>
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
                        <p class="preview-subtitle">Board Resolution for Reimbursement of Pre-Incorporation Expenses</p>
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
                        <strong>SUBJECT: REIMBURSEMENT OF PRELIMINARY / PRE-INCORPORATION EXPENSES</strong>
                    </p>

                    <p class="certificate-paragraph">
                        The Director, Mr./Ms. <strong><span id="previewDirectorName">________________</span></strong>, informed the Board that certain expenses were incurred by the promoters before and at the time of incorporation of the Company. Since these expenses were incurred on behalf of the Company for the purpose of its formation and registration, the same are required to be reimbursed to the promoters. A complete statement of all pre-incorporation expenses incurred by the promoters, duly supported by vouchers and receipts, was placed before the Board for consideration and approval.
                    </p>

                    <p class="certificate-paragraph">
                        <strong>"RESOLVED THAT</strong> the pre-incorporation expenses amounting to Rs. <strong><span id="previewExpenseAmount">________________</span></strong>/‑ (Rupees <strong><span id="previewExpenseWords">________________</span></strong> only), as detailed in the statement placed before the Board (Annexure-A), being the expenses incurred by the promoters before and at the time of incorporation of the Company, be and are hereby taken on record and accounted for in the books of the Company under the head 'Preliminary Expenses' or such other appropriate head as may be determined by the auditors.
                    </p>

                    <p class="certificate-paragraph">
                        <strong>RESOLVED FURTHER THAT</strong> the said amount incurred as preliminary/pre-incorporation expenses be and is hereby approved for reimbursement to the promoters as per the details mentioned in the statement.
                    </p>

                    <p class="certificate-paragraph">
                        <strong>RESOLVED FURTHER THAT</strong> any Director of the Company be and is hereby authorised to sign cheques, authorise fund transfers, or make payments by any other mode to reimburse the promoters for the pre-incorporation expenses, and to do all such acts, deeds, matters, and things as may be necessary, proper, or expedient to give effect to this resolution."
                    </p>

                    <div id="expenseStatementPreview"></div>

                    <div class="certificate-signature">
                        <p><strong>CERTIFIED TO BE TRUE</strong></p>
                        <p>For <strong id="footerCompanyName">________________</strong><br>
                        (Name of the Company)</p>
                        <p><strong>Signature:</strong> _________________________<br>
                        <strong>Name:</strong> <span id="footerSignatoryName">________________</span><br>
                        <strong>Designation:</strong> <span id="footerDesignation">________________</span><br>
                        <strong>DIN:</strong> <span id="footerDIN">________________</span><br>
                        <strong>Date:</strong> <span id="footerDate">________________</span><br>
                        <strong>Place:</strong> <span id="footerPlace">________________</span></p>
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
            <h2 class="info-title">Board Resolution for Reimbursement of Pre-Incorporation Expenses</h2>
            <p class="info-subtitle">
                Standard Board Resolution Template for Pre-Incorporation Expense Reimbursement
            </p>
        </div>

        <!-- Introduction -->
        <div class="info-content">
            <h3 class="info-subheading">Introduction</h3>
            <p class="info-text">
                A Board Resolution for Reimbursement of Pre-Incorporation Expenses is a formal corporate document that records the Board of Directors' decision to reimburse promoters for expenses incurred before and during the process of incorporating the company. When promoters establish a new company, they typically incur various expenses such as professional fees for drafting Memorandum and Articles of Association, stamp duty, registration fees, legal consultations, and other preliminary costs. Since these expenses are incurred on behalf of the company before it comes into legal existence, they are classified as pre-incorporation or preliminary expenses.
            </p>
            <p class="info-text">
                Once the company is incorporated and the Board of Directors is constituted, the Board must formally approve the reimbursement of these expenses to the promoters. The resolution authorises the company to take on record the expenses incurred, account for them in the books of the company under the appropriate head (typically as preliminary expenses), and reimburse the promoters. A detailed statement of all pre-incorporation expenses must be placed before the Board for approval. This resolution is typically passed in one of the early board meetings after incorporation.
            </p>
        </div>

        <!-- Benefits -->
        <div class="info-content">
            <h3 class="info-subheading">Benefits of Using a Standard Format</h3>
            <p class="info-text">
                Utilising a professionally drafted board resolution format ensures that all statutory requirements under the Companies Act, 2013 are properly addressed. A ready-to-use template saves valuable time during the post-incorporation compliance process, reduces the risk of procedural errors, and provides a consistent framework for documenting Board decisions. Standardised formats help maintain proper records and ensure correct accounting treatment of preliminary expenses.
            </p>
        </div>

        <!-- Relevance -->
        <div class="info-content">
            <h3 class="info-subheading">Relevance to Post-Incorporation Compliance</h3>
            <p class="info-text">
                Immediately following Company Registration, the newly incorporated company must conduct its first board meeting within thirty days. One of the important matters to be addressed in the early board meetings is the approval and reimbursement of pre-incorporation expenses incurred by promoters. These expenses should be properly documented with supporting invoices and receipts. If the company has obtained GST Registration, any GST paid on eligible pre-incorporation expenses may be claimed as input tax credit subject to applicable provisions.
            </p>
        </div>

        <!-- Sample Board Resolution Format -->
        <div class="format-section">
            <h3 class="format-title">Board Resolution for Reimbursement of Pre-Incorporation Expenses – Sample Format</h3>

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
                SUBJECT: REIMBURSEMENT OF PRELIMINARY / PRE-INCORPORATION EXPENSES
            </p>

            <p class="format-text">
                The Director, Mr./Ms. ________________________ (Name of Director), informed the Board that certain expenses were incurred by the promoters before and at the time of incorporation of the Company. Since these expenses were incurred on behalf of the Company for the purpose of its formation and registration, the same are required to be reimbursed to the promoters. A complete statement of all pre-incorporation expenses incurred by the promoters, duly supported by vouchers and receipts, was placed before the Board for consideration and approval.
            </p>

            <p class="format-text">
                "RESOLVED THAT the pre-incorporation expenses amounting to Rs. ________________________/- (Rupees ________________________ only), as detailed in the statement placed before the Board (Annexure-A), being the expenses incurred by the promoters before and at the time of incorporation of the Company, be and are hereby taken on record and accounted for in the books of the Company under the head 'Preliminary Expenses' or such other appropriate head as may be determined by the auditors.<br>
                RESOLVED FURTHER THAT the said amount incurred as preliminary/pre-incorporation expenses be and is hereby approved for reimbursement to the promoters as per the details mentioned in the statement.<br>
                RESOLVED FURTHER THAT any Director of the Company be and is hereby authorised to sign cheques, authorise fund transfers, or make payments by any other mode to reimburse the promoters for the pre-incorporation expenses, and to do all such acts, deeds, matters, and things as may be necessary, proper, or expedient to give effect to this resolution."
            </p>

            <p class="format-text">
                Annexure-A: Statement of Pre-Incorporation Expenses<br>
                (Attach detailed statement with the following particulars: Date of Expense, Nature of Expense, Paid To, Amount, and Supporting Document Reference)
            </p>

            <p class="format-text">
                CERTIFIED TO BE TRUE<br>
                For ________________________________________<br>
                (Name of the Company)<br>
                Signature: __________________________<br>
                Name: __________________________<br>
                Designation: __________________________<br>
                DIN: __________________________<br>
                Date: __________________________<br>
                Place: __________________________
            </p>
        </div>

        <!-- FAQ -->
        <div class="faq-section">
            <h3 class="faq-title">Frequently Asked Questions</h3>

            <div class="faq-item">
                <h4 class="faq-question">1. How will you pass a resolution for reimbursement of Pre-Incorporation Expenses?</h4>
                <p class="faq-answer">
                    A board resolution for reimbursement of pre-incorporation expenses is passed at a duly convened board meeting where quorum is present. A director presents the statement of expenses to the Board. The resolution is approved by a majority of directors present and voting. The resolution authorises recording the expenses in the books and their reimbursement to the promoters.
                </p>
            </div>

            <div class="faq-item">
                <h4 class="faq-question">2. Is the signature of all directors mandatory on the Board resolution format for reimbursement of Pre-Incorporation Expenses?</h4>
                <p class="faq-answer">
                    No, signatures of all directors are not mandatory on the board resolution for reimbursement of pre-incorporation expenses. The resolution is passed by a majority of directors present and voting at a duly convened board meeting where quorum is present. The certified true copy may be signed by a single authorised director. Minutes record directors present and voting details.
                </p>
            </div>

            <div class="faq-item">
                <h4 class="faq-question">3. Should the Board resolution for reimbursement of Pre-Incorporation Expenses be on company letterhead?</h4>
                <p class="faq-answer">
                    While there is no strict statutory requirement, it is standard corporate practice and highly recommended to issue the board resolution on the company's official letterhead. The letterhead provides authenticity, includes essential company details (name, CIN, registered office, contact information), and demonstrates formal corporate documentation. It enhances credibility for accounting and audit purposes.
                </p>
            </div>

            <div class="faq-item">
                <h4 class="faq-question">4. Does the Board Resolution format for reimbursement of Pre-Incorporation Expenses need to be certified by a professional?</h4>
                <p class="faq-answer">
                    The board resolution itself does not require certification by an external professional. The certified true copy may be signed by any director of the company. If the company has a Company Secretary, they may also certify the resolution. For accounting purposes, the statement of pre-incorporation expenses should be verified and the accounting treatment confirmed by the company's auditors.
                </p>
            </div>

            <div class="faq-item">
                <h4 class="faq-question">5. Who can be considered as an authorized signatory for the board resolution for reimbursement of Pre-Incorporation Expenses?</h4>
                <p class="faq-answer">
                    Any director of the company can be designated as an authorised signatory for the board resolution for reimbursement of pre-incorporation expenses. The authorised signatory signs the certified true copy of the resolution and may also be empowered to sign cheques, authorise fund transfers, and execute other documents necessary for effecting the reimbursement to the promoters.
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
    const form = document.getElementById('preincForm');

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

    function updatePreview() {
        const companyName = form.querySelector('[name="company_name"]').value || '________________';
        const cin = form.querySelector('[name="cin"]').value || '________________';
        const regOffice = form.querySelector('[name="registered_office"]').value || '________________';
        const email = form.querySelector('[name="email"]').value || '________________';
        const meetingDateRaw = form.querySelector('[name="meeting_date"]').value;
        const meetingDate = meetingDateRaw ? formatDate(meetingDateRaw) : '__________';
        const meetingTime = form.querySelector('[name="meeting_time"]').value || '______';
        const directorName = form.querySelector('[name="director_name"]').value || '________________';
        const expenseAmount = form.querySelector('[name="expense_amount"]').value || '________________';
        const expenseWords = form.querySelector('[name="expense_words"]').value || '________________';
        const expenseStatement = form.querySelector('[name="expense_statement"]').value;
        const signatoryName = form.querySelector('[name="signatory_name"]').value || '________________';
        const designation = form.querySelector('[name="signatory_designation"]').value || '________________';
        const din = form.querySelector('[name="din"]').value || '________________';
        const place = form.querySelector('[name="place"]').value || '________________';
        const resolutionDateRaw = form.querySelector('[name="resolution_date"]').value;
        const resolutionDate = resolutionDateRaw ? formatDate(resolutionDateRaw) : '________________';

        // Update basic fields
        document.getElementById('previewCompanyName').textContent = companyName;
        document.getElementById('previewCIN').textContent = cin;
        document.getElementById('previewRegOffice').textContent = regOffice;
        document.getElementById('previewEmail').textContent = email;
        document.getElementById('previewMeetingDate').textContent = meetingDate;
        document.getElementById('previewMeetingTime').textContent = meetingTime;
        document.getElementById('previewRegOfficeVenue').textContent = regOffice;
        document.getElementById('previewDirectorName').textContent = directorName;
        document.getElementById('previewExpenseAmount').textContent = expenseAmount;
        document.getElementById('previewExpenseWords').textContent = expenseWords;
        document.getElementById('footerCompanyName').textContent = companyName;
        document.getElementById('footerSignatoryName').textContent = signatoryName;
        document.getElementById('footerDesignation').textContent = designation;
        document.getElementById('footerDIN').textContent = din;
        document.getElementById('footerDate').textContent = resolutionDate;
        document.getElementById('footerPlace').textContent = place;

        // Build expense statement preview
        const statementDiv = document.getElementById('expenseStatementPreview');
        statementDiv.innerHTML = '';
        if (expenseStatement.trim()) {
            const lines = expenseStatement.split('\n').filter(line => line.trim() !== '');
            if (lines.length > 0) {
                const headerP = document.createElement('p');
                headerP.style.fontSize = '14px';
                headerP.style.lineHeight = '1.8';
                headerP.style.marginBottom = '8px';
                headerP.innerHTML = '<strong>Annexure-A: Statement of Pre-Incorporation Expenses</strong>';
                statementDiv.appendChild(headerP);

                const tableDiv = document.createElement('div');
                tableDiv.style.overflowX = 'auto';
                let tableHtml = '<table style="width:100%; border-collapse:collapse; margin-bottom:16px;"><thead><tr style="background:#f5f5f5;"><th style="border:1px solid #ddd; padding:8px;">Date</th><th style="border:1px solid #ddd; padding:8px;">Nature of Expense</th><th style="border:1px solid #ddd; padding:8px;">Paid To</th><th style="border:1px solid #ddd; padding:8px;">Amount (₹)</th><th style="border:1px solid #ddd; padding:8px;">Reference</th></tr></thead><tbody>';
                lines.forEach(line => {
                    const parts = line.split('|');
                    if (parts.length >= 5) {
                        tableHtml += `<tr>
                            <td style="border:1px solid #ddd; padding:8px;">${parts[0].trim()}</td>
                            <td style="border:1px solid #ddd; padding:8px;">${parts[1].trim()}</td>
                            <td style="border:1px solid #ddd; padding:8px;">${parts[2].trim()}</td>
                            <td style="border:1px solid #ddd; padding:8px;">${parts[3].trim()}</td>
                            <td style="border:1px solid #ddd; padding:8px;">${parts[4].trim()}</td>
                        </tr>`;
                    } else {
                        // If not properly formatted, just show as plain text
                        tableHtml += `<tr><td colspan="5" style="border:1px solid #ddd; padding:8px;">${line}</td></tr>`;
                    }
                });
                tableHtml += '</tbody></table>';
                tableDiv.innerHTML = tableHtml;
                statementDiv.appendChild(tableDiv);
            }
        } else {
            const noteP = document.createElement('p');
            noteP.style.fontSize = '14px';
            noteP.style.lineHeight = '1.8';
            noteP.style.fontStyle = 'italic';
            noteP.textContent = '(Attach detailed statement with Date, Nature of Expense, Paid To, Amount, and Supporting Document Reference)';
            statementDiv.appendChild(noteP);
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

    // Attach event listeners
    const inputs = form.querySelectorAll('input, textarea, select');
    inputs.forEach(input => input.addEventListener('input', updatePreview));
    updatePreview();

});
</script>

@endsection
