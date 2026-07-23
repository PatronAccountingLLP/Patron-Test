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
            <h1 class="hero-title">Board Resolution for <span> Approval of Financial Statements</span></h1>
            <p class="hero-subtitle">
                Generate a certified Board Resolution for Approval of Financial Statements in under 60 seconds.
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
            <h2 class="form-title">Enter Company & Financial Statement Details</h2>
            <p class="form-description">
                Fill in the details below to generate a Board Resolution for Approval of Financial Statements.
            </p>
        </div>

        <form id="financialStatementsForm" method="POST" action="{{route('br.financial.statements') }}">
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

                <!-- Financial Year Details -->
                <div class="form-group full-width">
                    <h3 class="section-title">Financial Year Details</h3>
                </div>
                <div class="form-group full-width">
                    <label class="form-label">Financial Year Ended <span class="required">*</span></label>
                    <input type="date" name="financial_year_end" class="form-control" required>
                </div>

                <!-- Directors Authorized to Sign Financial Statements -->
                <div class="form-group full-width">
                    <h3 class="section-title">Directors Authorized to Sign Financial Statements</h3>
                </div>
                <div class="form-group full-width">
                    <label class="form-label">Director 1 Name <span class="required">*</span></label>
                    <input type="text" name="director1_name" class="form-control" placeholder="Enter director name" required>
                </div>
                <div class="form-group full-width">
                    <label class="form-label">Director 1 DIN <span class="required">*</span></label>
                    <input type="text" name="director1_din" class="form-control" placeholder="Enter DIN" required>
                </div>
                
                <div class="form-group full-width">
                    <label class="form-label">Director 2 Name <span class="required">*</span></label>
                    <input type="text" name="director2_name" class="form-control" placeholder="Enter director name" required>
                </div>
                <div class="form-group full-width">
                    <label class="form-label">Director 2 DIN <span class="required">*</span></label>
                    <input type="text" name="director2_din" class="form-control" placeholder="Enter DIN" required>
                </div>

                <!-- Authorized Signatory for Resolution -->
                <div class="form-group full-width">
                    <h3 class="section-title">Authorized Signatory for Resolution</h3>
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
                        <p class="preview-subtitle">Board Resolution for Approval of Financial Statements</p>
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
                        <strong id="prevFinancialYearTitle">APPROVAL OF FINANCIAL STATEMENTS FOR THE FINANCIAL YEAR ________________</strong>
                    </p>

                    <p class="certificate-paragraph">
                        <strong>RESOLVED THAT</strong> pursuant to the provisions of Section 134 of the Companies Act, 2013, read with the Companies (Accounts) Rules, 2014, and other applicable provisions, if any, (including any statutory modifications, amendments, or re-enactments thereto for the time being in force), the Financial Statements of the Company for the financial year ended 
                        <strong id="prevFinancialYearEnd">__________</strong>, comprising the Balance Sheet as at 
                        <strong id="prevBalanceSheetDate">__________</strong>, the Statement of Profit and Loss, the Cash Flow Statement, the Statement of Changes in Equity for the year ended on that date, and the Notes forming part thereof, together with the Board's Report and the draft Auditor's Report placed before the Board, be and are hereby considered, approved, and taken on record.
                    </p>

                    <p class="certificate-paragraph">
                        <strong>RESOLVED FURTHER THAT</strong> Mr./Ms. 
                        <strong id="prevDirector1Name">________________</strong>, Director (DIN: 
                        <strong id="prevDirector1DIN">________________</strong>) and Mr./Ms. 
                        <strong id="prevDirector2Name">________________</strong>, Director (DIN: 
                        <strong id="prevDirector2DIN">________________</strong>), be and are hereby authorised to sign the Financial Statements and the Board's Report on behalf of the Board of Directors, and to forward the same along with the Annual Report to the shareholders of the Company for the financial year ended 
                        <strong id="prevFinancialYearEnd2">__________</strong>.
                    </p>

                    <p class="certificate-paragraph">
                        <strong>RESOLVED FURTHER THAT</strong> any Director of the Company, either severally or jointly, be and is hereby authorised to sign the requisite e-forms including Form AOC-4 and Form MGT-7, and to file the same with the Registrar of Companies within the prescribed time, and to do all such acts, deeds, matters, and things as may be necessary, proper, or expedient to give effect to the above resolutions.
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
            <h2 class="info-title">Board Resolution for Approval of Financial Statements</h2>
            <p class="info-subtitle">
                Professional Format Guide for Indian Companies
            </p>
        </div>

        <!-- Introduction -->
        <div class="info-content">
            <h3 class="info-subheading">Introduction</h3>

            <p class="info-text">
                A Board Resolution for Approval of Financial Statements is a formal corporate document
                that records the decision of the Board of Directors to approve the company’s annual
                financial statements before they are presented to shareholders and filed with
                regulatory authorities. Under the Companies Act, 2013, directors are primarily
                responsible for ensuring that the financial statements present a true and fair view
                of the company’s financial position.
            </p>

            <p class="info-text">
                This resolution is required annually for every company registered under the Companies
                Act, 2013. The financial statements, including the Balance Sheet, Statement of Profit
                and Loss, Cash Flow Statement, Statement of Changes in Equity, and notes to accounts,
                along with the Board’s Report and Auditor’s Report, must be placed before the Board
                for approval. The approved statements are laid before shareholders at the AGM and
                filed with the Registrar of Companies through Form AOC-4.
            </p>

            <!-- Benefits -->
            <h3 class="info-subheading">Benefits of Using a Standard Format</h3>

            <p class="info-text">
                Utilising a professionally drafted board resolution format ensures compliance with
                all statutory requirements under the Companies Act, 2013. A standardised template
                reduces procedural errors, maintains consistency in corporate documentation, and
                facilitates smooth processing of annual filings with the Registrar of Companies.
            </p>

            <p class="info-text">
                This approach supports timely compliance and helps companies meet statutory deadlines
                for filing financial statements and annual returns.
            </p>

            <!-- Relevance -->
            <h3 class="info-subheading">Relevance to Annual Compliance</h3>

            <p class="info-text">
                Approval of financial statements is a mandatory annual compliance requirement for all
                companies. Companies must file their financial statements with the ROC within the
                prescribed timelines after completion of Company Registration.
            </p>

            <p class="info-text">
                The Board’s approval forms the basis for the AGM agenda and subsequent regulatory
                filings. The financial statements are also used for income tax filings, loan
                applications, GST annual returns, and stakeholder assessments. The resolution ensures
                proper authorisation and accountability for the disclosed financial information.
            </p>
        </div>

        <!-- Sample Format -->
        <div class="format-section">
            <h3 class="format-title">
                Board Resolution for Approval of Financial Statements – Sample Format
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
                <strong>APPROVAL OF FINANCIAL STATEMENTS FOR THE FINANCIAL YEAR __________</strong>
            </p>

            <p class="format-text">
                <strong>RESOLVED THAT</strong> pursuant to the provisions of Section 134 of the
                Companies Act, 2013 read with the Companies (Accounts) Rules, 2014 and other applicable
                provisions, the Financial Statements of the Company for the financial year ended
                __________, comprising the Balance Sheet, Statement of Profit and Loss, Cash Flow
                Statement, Statement of Changes in Equity and Notes thereto, together with the
                Board’s Report and draft Auditor’s Report placed before the Board, be and are hereby
                approved and taken on record.
            </p>

            <p class="format-text">
                <strong>RESOLVED FURTHER THAT</strong> Mr./Ms. __________ (Name), Director (DIN:
                __________) and Mr./Ms. __________ (Name), Director (DIN: __________), be and are
                hereby authorised to sign the Financial Statements and the Board’s Report on behalf
                of the Board and forward the same to the shareholders for the relevant financial year.
            </p>

            <p class="format-text">
                <strong>RESOLVED FURTHER THAT</strong> any Director of the Company be and is hereby
                authorised to sign and file the requisite e-forms including Form AOC-4 and Form MGT-7
                with the Registrar of Companies and to do all acts and deeds necessary to give effect
                to this resolution.
            </p>

            <p class="format-text">For __________ (Company Name)</p>

            <p class="format-text"><strong>Signature:</strong> ___________________________</p>
            <p class="format-text"><strong>Name:</strong> ___________________________</p>
            <p class="format-text"><strong>Designation:</strong> ___________________________</p>
            <p class="format-text"><strong>DIN:</strong> ___________________________</p>
        </div>

        <!-- FAQ -->
        <div class="faq-section">
            <h3 class="faq-title">Frequently Asked Questions</h3>

            <div class="faq-item">
                <h4 class="faq-question">
                    1. What is the board resolution for approval of financial statements?
                </h4>
                <p class="faq-answer">
                    It is a formal resolution passed by the Board approving the company’s annual
                    financial statements under Section 134 of the Companies Act, 2013 before they are
                    presented to shareholders.
                </p>
            </div>

            <div class="faq-item">
                <h4 class="faq-question">
                    2. How is a board resolution for approval of financial statements drafted?
                </h4>
                <p class="faq-answer">
                    It includes company details, meeting particulars, approval of financial
                    statements, authorisation to sign documents, and authority to file ROC forms.
                </p>
            </div>

            <div class="faq-item">
                <h4 class="faq-question">
                    3. Is signature of all directors mandatory?
                </h4>
                <p class="faq-answer">
                    No. The resolution is passed with requisite quorum and the certified copy is
                    signed by the Chairperson or an authorised director.
                </p>
            </div>

            <div class="faq-item">
                <h4 class="faq-question">
                    4. Is professional certification required?
                </h4>
                <p class="faq-answer">
                    The resolution itself does not require certification, but Form AOC-4 may require
                    certification by a practising professional in certain cases.
                </p>
            </div>

            <div class="faq-item">
                <h4 class="faq-question">
                    5. Who approves the financial statements?
                </h4>
                <p class="faq-answer">
                    The Board of Directors approves the financial statements at a duly convened board
                    meeting before they are placed before shareholders at the AGM.
                </p>
            </div>

            <div class="faq-item">
                <h4 class="faq-question">
                    6. Is the board resolution format same as shareholder resolution?
                </h4>
                <p class="faq-answer">
                    No. The board resolution approves and recommends the financial statements, while
                    the shareholders’ resolution adopts the audited financial statements at the AGM.
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
    const form = document.getElementById('financialStatementsForm');
    const downloadPdfBtn = document.getElementById('downloadPdfBtn');
    
    // Set default dates
    const today = new Date().toISOString().split('T')[0];
    const meetingDateInput = form.querySelector('[name="meeting_date"]');
    const financialYearEndInput = form.querySelector('[name="financial_year_end"]');
    const resolutionDateInput = form.querySelector('[name="resolution_sign_date"]');
    const timeInput = form.querySelector('[name="meeting_time"]');
    
    // Set financial year end to previous year's March 31st by default
    const currentYear = new Date().getFullYear();
    const defaultFinancialYearEnd = `${currentYear-1}-03-31`;
    
    if (meetingDateInput) {
        meetingDateInput.value = today;
    }
    if (financialYearEndInput) {
        financialYearEndInput.value = defaultFinancialYearEnd;
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
        
        // Financial Year Details
        const financialYearEnd = form.querySelector('[name="financial_year_end"]').value;
        
        // Directors Details
        const director1Name = form.querySelector('[name="director1_name"]').value || '________________';
        const director1DIN = form.querySelector('[name="director1_din"]').value || '________________';
        const director2Name = form.querySelector('[name="director2_name"]').value || '________________';
        const director2DIN = form.querySelector('[name="director2_din"]').value || '________________';
        
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
        
        if (financialYearEnd) {
            const formattedFinancialYearEnd = new Date(financialYearEnd).toLocaleDateString('en-IN', {
                day: '2-digit',
                month: 'long',
                year: 'numeric'
            });
            
            // Extract financial year (e.g., 2022-2023)
            const yearEnd = new Date(financialYearEnd).getFullYear();
            const yearStart = yearEnd - 1;
            const financialYearText = `${yearStart}-${yearEnd}`;
            
            document.getElementById('prevFinancialYearEnd').textContent = formattedFinancialYearEnd;
            document.getElementById('prevFinancialYearEnd2').textContent = formattedFinancialYearEnd;
            document.getElementById('prevBalanceSheetDate').textContent = formattedFinancialYearEnd;
            document.getElementById('prevFinancialYearTitle').textContent = `APPROVAL OF FINANCIAL STATEMENTS FOR THE FINANCIAL YEAR ${financialYearText}`;
        } else {
            document.getElementById('prevFinancialYearEnd').textContent = '__________';
            document.getElementById('prevFinancialYearEnd2').textContent = '__________';
            document.getElementById('prevBalanceSheetDate').textContent = '__________';
            document.getElementById('prevFinancialYearTitle').textContent = 'APPROVAL OF FINANCIAL STATEMENTS FOR THE FINANCIAL YEAR ________________';
        }
        
        document.getElementById('prevMeetingTime').textContent = meetingTime;
        
        // Directors details
        document.getElementById('prevDirector1Name').textContent = director1Name;
        document.getElementById('prevDirector1DIN').textContent = director1DIN;
        document.getElementById('prevDirector2Name').textContent = director2Name;
        document.getElementById('prevDirector2DIN').textContent = director2DIN;
        
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
