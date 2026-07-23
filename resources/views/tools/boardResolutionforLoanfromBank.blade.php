@extends('tools.tool-master')
@section('title')
{{_('Board Resolution for Loan from Bank')}}
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
            <h1 class="hero-title">Board Resolution for <span>Loan from Bank</span></h1>
            <p class="hero-subtitle">
                Generate a certified Board Resolution for obtaining loan or credit facility from a Bank.
            </p>
        </div>
    </div>

    <!-- Main Container -->
    <div class="download-format-container">
        <div class="alert-wrapper" id="alertContainer"></div>

        <div class="download-format-grid">

            <!-- FORM SECTION -->
            <div class="form-card">
                <div class="form-header">
                    <div class="form-step-indicator">
                        <span class="step-dot active"></span>
                        <span class="step-dot"></span>
                        <span class="step-dot"></span>
                    </div>
                    <h2 class="form-title">Enter Company & Loan Details</h2>
                    <p class="form-description">
                        Fill the details below to generate Board Resolution for Loan from Bank.
                    </p>
                </div>

                <form id="loanResolutionForm" method="POST" action="{{ route('br.loan') }}">
                    @csrf

                    <div class="form-grid">

                        <div class="form-group full-width">
                            <label class="form-label">Company Name <span class="required">*</span></label>
                            <input type="text" name="business_name" class="form-control" required>
                        </div>

                        <div class="form-group full-width">
                            <label class="form-label">CIN <span class="required">*</span></label>
                            <input type="text" name="cin" class="form-control" required>
                        </div>

                        <div class="form-group full-width">
                            <label class="form-label">Registered Office Address <span class="required">*</span></label>
                            <textarea name="register_address" class="form-control" required></textarea>
                        </div>

                        <div class="form-row">
                            <div class="form-group">
                                <label class="form-label">Bank Name <span class="required">*</span></label>
                                <input type="text" name="bank_name" class="form-control" required>
                            </div>

                            <div class="form-group">
                                <label class="form-label">Branch Name</label>
                                <input type="text" name="branch_name" class="form-control">
                            </div>
                        </div>

                        <div class="form-group full-width">
                            <label class="form-label">Branch Address</label>
                            <input type="text" name="branch_address" class="form-control">
                        </div>

                        <div class="form-row">
                            <div class="form-group">
                                <label class="form-label">Loan Amount (₹) <span class="required">*</span></label>
                                <input type="text" name="loan_amount" class="form-control" required>
                            </div>

                            <div class="form-group">
                                <label class="form-label">Purpose of Loan <span class="required">*</span></label>
                                <input type="text" name="loan_purpose" class="form-control" required>
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="form-group">
                                <label class="form-label">Interest Rate (%)</label>
                                <input type="text" name="interest_rate" class="form-control">
                            </div>

                            <div class="form-group">
                                <label class="form-label">Repayment Period</label>
                                <input type="text" name="repayment_period" class="form-control">
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="form-group">
                                <label class="form-label">Authorised Director Name <span class="required">*</span></label>
                                <input type="text" name="authorized_person_name" class="form-control" required>
                            </div>

                            <div class="form-group">
                                <label class="form-label">Designation <span class="required">*</span></label>
                                <select name="designation" class="form-control form-select" required>
                                    <option value="">Select</option>
                                    <option>Director</option>
                                    <option>Managing Director</option>
                                    <option>Whole-Time Director</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="form-group">
                                <label class="form-label">DIN Number <span class="required">*</span></label>
                                <input type="text" name="din" class="form-control" required>
                            </div>

                            <div class="form-group">
                                <label class="form-label">Place <span class="required">*</span></label>
                                <input type="text" name="place" class="form-control" required>
                            </div>
                        </div>

                        <div class="form-group full-width">
                            <label class="form-label">Resolution Date <span class="required">*</span></label>
                            <input type="date" name="resolution_date" class="form-control" required>
                        </div>

                    </div>

                    <button type="submit" class="btn-submit">
                        <span class="btn-text">Generate & Download Resolution</span>
                    </button>
                </form>
            </div>

            <!-- PREVIEW SECTION -->
<div class="preview-card">
 <div class="preview-wrapper">
        <div class="certificate-watermark">PREVIEW</div>

    <div class="certificate-doc-header">
        <h2 class="certificate-doc-title">
            CERTIFIED TRUE COPY OF THE BOARD RESOLUTION
        </h2>
        <p class="certificate-doc-subtitle">
            Passed at the Meeting of the Board of Directors
        </p>
    </div>

    <div class="certificate-body">

        <p class="certificate-paragraph">
            Passed at the Meeting of the Board of Directors of
            <strong id="prevCompany">________________</strong>
            held on <strong id="prevDate">________________</strong>
            at the Registered Office of the Company situated at
            <strong id="prevAddress">________________</strong>.
        </p>

        <p class="certificate-paragraph">
            <strong>Subject:</strong> Obtaining Loan / Credit Facility from Bank
        </p>

        <p class="certificate-paragraph">
            <strong>RESOLVED THAT</strong> pursuant to the provisions of Section 179 and
            other applicable provisions of the Companies Act, 2013, the consent of the
            Board be and is hereby accorded to obtain and avail financial assistance /
            credit facility of an amount not exceeding
            <strong id="prevAmount">________________</strong>
            from <strong id="prevBank">________________</strong>
            to meet the <strong id="prevPurpose">________________</strong>
            of the Company on such terms and conditions as approved by the Board.
        </p>

        <p class="certificate-paragraph">
            <strong>RESOLVED FURTHER THAT</strong> the Company be authorised to execute all
            necessary loan agreements, deeds, undertakings and security documents as
            required by the Bank, including creation of charge or mortgage in favour of
            the Bank.
        </p>

        <p class="certificate-paragraph">
            <strong>RESOLVED FURTHER THAT</strong> Mr./Ms.
            <strong id="prevDirector">________________</strong>,
            <strong id="prevDesignation">Director</strong> of the Company, holding DIN
            <strong id="prevDIN">________________</strong>, be and is hereby authorised
            to sign, execute and submit all documents and to do all acts, deeds and things
            necessary to give effect to this resolution.
        </p>

        <div class="certificate-footer">
            <div class="footer-item">
                <span class="footer-item-label">Place</span>
                <span class="footer-item-value" id="prevPlace">________________</span>
            </div>
            <div class="footer-item">
                <span class="footer-item-label">Date</span>
                <span class="footer-item-value" id="prevFooterDate">________________</span>
            </div>
        </div>

    </div>
 </div>
</div>

        </div>
<div class="info-section">
    <div class="info-card">
        <div class="info-header">
            <span class="info-header-badge">Learn More</span>
            <h2 class="info-title">What is a Board Resolution for Loan from Bank?</h2>
            <p class="info-subtitle">
                Professional Format Guide for Indian Companies
            </p>
        </div>

        <div class="info-content">
            <p class="info-text">
                A Board Resolution for obtaining a loan from a bank is a formal corporate document
                that records the decision of a company's Board of Directors to avail credit or
                financial assistance from a banking institution. Under the Companies Act, 2013,
                any borrowing by a company must be sanctioned by its Board through a properly
                passed resolution.
            </p>

            <p class="info-text">
                This resolution is required during the loan application process, opening or
                modification of bank accounts, execution of loan agreements, and creation of
                security or mortgage in favour of the lender. It serves as documentary evidence
                of the Board’s authorisation.
            </p>

            <p class="info-text">
                Using a standardised Board Resolution format ensures statutory compliance,
                professional documentation, and faster processing of loan applications by
                banks and financial institutions.
            </p>
        </div>

        <div class="format-section">
            <h3 class="format-title">Board Resolution for Loan from Bank – Sample Format</h3>

            <p class="format-text">
                [To be printed on Company Letterhead]
            </p>

            <p class="format-text">
                Company Name: _______________________________
            </p>

            <p class="format-text">
                CIN: _______________________________
            </p>

            <p class="format-text">
                Registered Office Address: _______________________________
            </p>

            <p class="format-text">
                <strong>CERTIFIED TRUE COPY OF THE BOARD RESOLUTION</strong>
            </p>

            <p class="format-text">
                Passed at the Meeting of the Board of Directors held on __________ (Date)
                at __________ (Time) at the Registered Office of the Company.
            </p>

            <p class="format-text">
                <strong>Subject:</strong> Obtaining Loan / Credit Facility from Bank
            </p>

            <p class="format-text">
                <strong>RESOLVED THAT</strong> pursuant to the provisions of Section 179 and
                other applicable provisions of the Companies Act, 2013, the consent of the
                Board be and is hereby accorded to obtain and avail financial assistance /
                credit facility of an amount not exceeding Rs. __________ from
                __________ (Name of Bank), __________ (Branch Name), on such terms and
                conditions as approved by the Board.
            </p>

            <p class="format-text">
                <strong>RESOLVED FURTHER THAT</strong> the Company be authorised to execute
                all necessary loan documents, agreements, deeds, undertakings and security
                documents as required by the Bank, including creation of charge or mortgage
                in favour of the Bank.
            </p>

            <p class="format-text">
                <strong>RESOLVED FURTHER THAT</strong> Mr./Ms. _________________________,
                Director of the Company, holding DIN _________________________, be and is
                hereby authorised to sign, execute and submit all documents and to do all
                acts, deeds and things necessary to give effect to this resolution.
            </p>

            <p class="format-text">
                Certified to be True<br><br>
                For _________________________ (Company Name)<br><br>
                <strong>Signature:</strong> _________________________<br>
                <strong>Name:</strong> _________________________<br>
                <strong>Designation:</strong> _________________________<br>
                <strong>DIN:</strong> _________________________<br>
                <strong>Place:</strong> _________________________<br>
                <strong>Date:</strong> _________________________
            </p>
        </div>

    </div>
</div>


        <!-- INFO + SAMPLE + FAQ (already matched earlier) -->
    <div class="faq-section">
    <div class="info-header">
        <h2 class="info-title">Frequently Asked Questions</h2>
    </div>

    <div class="faq-grid">

        <div class="faq-item">
            <h4 class="faq-question">
                Is the signature of all directors mandatory on the Board Resolution for loan from bank?
            </h4>
            <p class="faq-answer">
                No. The signatures of all directors are not mandatory. The resolution must be
                passed with the requisite quorum as per the Companies Act, 2013 and the Articles
                of Association of the Company. A certified true copy signed by the Chairperson
                of the meeting or an authorised director is generally accepted by banks.
            </p>
        </div>

        <div class="faq-item">
            <h4 class="faq-question">
                Does the Board Resolution for loan from bank need to be certified by a professional?
            </h4>
            <p class="faq-answer">
                Professional certification by a practising Company Secretary or Chartered Accountant
                is not legally mandatory. However, many banks prefer or require a professionally
                certified copy as part of their internal due diligence process. It is advisable
                to check the specific requirements of the lending bank.
            </p>
        </div>

        <div class="faq-item">
            <h4 class="faq-question">
                Should the Board Resolution for loan from bank be printed on company letterhead?
            </h4>
            <p class="faq-answer">
                Yes. It is standard practice and generally expected that the Board Resolution
                be printed on the company’s official letterhead. This helps banks verify the
                company’s identity and ensures authenticity of the document.
            </p>
        </div>

        <div class="faq-item">
            <h4 class="faq-question">
                Who can be considered an authorised signatory for the Board Resolution?
            </h4>
            <p class="faq-answer">
                An authorised signatory is typically a director or key managerial personnel
                who has been specifically authorised by the Board through the same or a separate
                resolution. If the authorised signatory is a director, a valid DIN must be mentioned
                in the resolution.
            </p>
        </div>

        <div class="faq-item">
            <h4 class="faq-question">
                Which type of resolution is required for obtaining a loan from a bank?
            </h4>
            <p class="faq-answer">
                A Board Resolution passed in a duly convened Board Meeting is required under
                Section 179 of the Companies Act, 2013. If the proposed borrowing exceeds the
                limits specified under Section 180(1)(c), an additional Special Resolution
                of shareholders in a General Meeting is also required.
            </p>
        </div>

    </div>
</div>

    </div>
</div>
<script>
document.addEventListener('DOMContentLoaded', function () {

    const form = document.getElementById('loanResolutionForm');

    // Set default date to today
    const dateInput = form.querySelector('[name="resolution_date"]');
    if (dateInput) {
        dateInput.value = new Date().toISOString().split('T')[0];
    }

    // Attach listeners
    const inputs = form.querySelectorAll('input, textarea, select');
    inputs.forEach(input => {
        input.addEventListener('input', updatePreview);
        input.addEventListener('change', updatePreview);
    });

    // Initial preview render
    updatePreview();

    function updatePreview() {

        const companyName = getValue('business_name');
        const address     = getValue('register_address');
        const bankName    = getValue('bank_name');
        const amount      = getValue('loan_amount');
        const purpose     = getValue('loan_purpose');
        const director    = getValue('authorized_person_name');
        const designation = getValue('designation', 'Director');
        const din         = getValue('din');
        const place       = getValue('place');
        const date        = getFormattedDate(getValue('resolution_date'));

        // Update preview elements
        setText('prevCompany', companyName);
        setText('prevAddress', address);
        setText('prevBank', bankName);
        setText('prevAmount', amount);
        setText('prevPurpose', purpose);
        setText('prevDirector', director);
        setText('prevDesignation', designation);
        setText('prevDIN', din);
        setText('prevPlace', place);
        setText('prevDate', date);
        setText('prevFooterDate', date);
    }

    // Helper functions
    function getValue(name, fallback = '________________') {
        const el = form.querySelector(`[name="${name}"]`);
        return el && el.value.trim() !== '' ? el.value.trim() : fallback;
    }

    function setText(id, value) {
        const el = document.getElementById(id);
        if (el) el.textContent = value;
    }

    function getFormattedDate(dateValue) {
        if (!dateValue || dateValue === '________________') {
            return '________________';
        }
        const dateObj = new Date(dateValue);
        return dateObj.toLocaleDateString('en-IN', {
            day: '2-digit',
            month: 'long',
            year: 'numeric'
        });
    }

});
</script>



@endsection
