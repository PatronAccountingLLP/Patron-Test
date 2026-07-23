@extends('tools.tool-master')
@section('title')
{{_('Board Resolution for converting loan into equity shares')}}
@endsection

@section('content')

<div class="download-format-body">

    <!-- Hero Section -->
    <div class="download-format-banner">
        <div class="hero-content">
            <div class="hero-badge">Free Document Generator</div>
            <h1 class="hero-title">
                Board Resolution for <span>Conversion of Loan into Equity</span>
            </h1>
            <p class="hero-subtitle">
                Generate a certified Board Resolution for converting loan into equity shares.
            </p>
        </div>
    </div>

    <div class="download-format-container">
        <div class="download-format-grid">

            <!-- Form -->
          <!-- Form Section -->
<div class="form-card">
    <div class="form-header">
        <div class="form-step-indicator">
            <span class="step-dot active"></span>
            <span class="step-dot"></span>
            <span class="step-dot"></span>
        </div>
        <h2 class="form-title">Enter Company & Loan Conversion Details</h2>
        <p class="form-description">
            Fill in the details below to generate a Board Resolution for Conversion of Loan into Equity.
        </p>
    </div>

    <form id="loanConversionForm" method="POST" action="{{ route('br.loan.equity.download') }}">
        @csrf

        <div class="form-grid">

            <!-- Company Name -->
            <div class="form-group full-width">
                <label class="form-label">Company Name <span class="required">*</span></label>
                <input type="text" name="company_name" class="form-control"
                       placeholder="Enter company name" required>
            </div>

            <!-- CIN -->
            <div class="form-group full-width">
                <label class="form-label">CIN <span class="required">*</span></label>
                <input type="text" name="cin" class="form-control"
                       placeholder="Enter CIN" required>
            </div>

            <!-- Registered Office -->
            <div class="form-group full-width">
                <label class="form-label">Registered Office Address <span class="required">*</span></label>
                <textarea name="registered_office" class="form-control"
                          placeholder="Enter registered office address" required></textarea>
            </div>

            <!-- Email & Meeting Date -->
            <div class="form-row">
                <div class="form-group">
                    <label class="form-label">Email <span class="required">*</span></label>
                    <input type="email" name="email" class="form-control"
                           placeholder="Enter company email" required>
                </div>

                <div class="form-group">
                    <label class="form-label">Board Meeting Date <span class="required">*</span></label>
                    <input type="date" name="meeting_date" class="form-control" required>
                </div>
            </div>

            <!-- Loan Date & Amount -->
            <div class="form-row">
                <div class="form-group">
                    <label class="form-label">Loan Agreement Date <span class="required">*</span></label>
                    <input type="date" name="loan_date" class="form-control" required>
                </div>

                <div class="form-group">
                    <label class="form-label">Loan Amount (Rs.) <span class="required">*</span></label>
                    <input type="text" name="loan_amount" class="form-control"
                           placeholder="Enter loan amount" required>
                </div>
            </div>

            <!-- Interest & Conversion Date -->
            <div class="form-row">
                <div class="form-group">
                    <label class="form-label">Interest Rate (%) <span class="required">*</span></label>
                    <input type="text" name="interest_rate" class="form-control"
                           placeholder="e.g. 10%" required>
                </div>

                <div class="form-group">
                    <label class="form-label">Conversion Date <span class="required">*</span></label>
                    <input type="date" name="conversion_date" class="form-control" required>
                </div>
            </div>

            <!-- Share Details -->
            <div class="form-row">
                <div class="form-group">
                    <label class="form-label">Number of Equity Shares <span class="required">*</span></label>
                    <input type="text" name="equity_shares" class="form-control"
                           placeholder="No. of shares" required>
                </div>

                <div class="form-group">
                    <label class="form-label">Face Value per Share (Rs.) <span class="required">*</span></label>
                    <input type="text" name="face_value" class="form-control"
                           placeholder="Face value" required>
                </div>
            </div>

            <!-- Issue Price & Premium -->
            <div class="form-row">
                <div class="form-group">
                    <label class="form-label">Issue Price per Share (Rs.) <span class="required">*</span></label>
                    <input type="text" name="issue_price" class="form-control"
                           placeholder="Issue price" required>
                </div>

                <div class="form-group">
                    <label class="form-label">Premium per Share (Rs.) <span class="required">*</span></label>
                    <input type="text" name="premium" class="form-control"
                           placeholder="Premium amount" required>
                </div>
            </div>

            <!-- Director & DIN -->
            <div class="form-row">
                <div class="form-group">
                    <label class="form-label">Authorised Director <span class="required">*</span></label>
                    <input type="text" name="director_name" class="form-control"
                           placeholder="Director name" required>
                </div>

                <div class="form-group">
                    <label class="form-label">DIN <span class="required">*</span></label>
                    <input type="text" name="din" class="form-control"
                           placeholder="Enter DIN" required>
                </div>
            </div>

        </div>

        <button type="submit" class="btn-submit">
            <span class="btn-text">Generate & Download Resolution</span>
        </button>
    </form>
</div>

            <!-- Preview Section -->
<div class="preview-card">
    <div class="preview-wrapper">
        <div class="preview-header">
            <div class="preview-title-group">
                <div>
                    <h3 class="preview-title">Document Preview</h3>
                    <p class="preview-subtitle">
                        Board Resolution for Conversion of Loan into Equity
                    </p>
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
                <h2 class="certificate-doc-title">
                    CERTIFIED TRUE COPY OF THE BOARD RESOLUTION
                </h2>
                <p class="certificate-doc-subtitle">
                    Conversion of Loan into Equity Shares
                </p>
            </div>

            <div class="certificate-body">
                <p class="certificate-paragraph">
                    A meeting of the Board of Directors of
                    <strong id="prevCompanyName">________________</strong>
                    was held on
                    <strong id="prevMeetingDate">__________</strong>
                    at the Registered Office of the Company.
                </p>

                <p class="certificate-paragraph">
                    <strong>RESOLVED THAT</strong> pursuant to the loan agreement
                    dated <strong id="prevLoanDate">__________</strong>
                    for an amount of Rs.
                    <strong id="prevLoanAmount">__________</strong>
                    carrying interest at
                    <strong id="prevInterest">__________%</strong>,
                    the Board hereby approves the conversion of the said loan
                    into equity shares of the Company.
                </p>

                <p class="certificate-paragraph">
                    <strong>RESOLVED FURTHER THAT</strong> pursuant to Section 62
                    of the Companies Act, 2013,
                    <strong id="prevEquityShares">__________</strong>
                    equity shares of face value Rs.
                    <strong id="prevFaceValue">__________</strong>
                    each at an issue price of Rs.
                    <strong id="prevIssuePrice">__________</strong>
                    (including premium of Rs.
                    <strong id="prevPremium">__________</strong>)
                    be issued in full satisfaction of the outstanding loan.
                </p>

                <p class="certificate-paragraph">
                    <strong>RESOLVED FURTHER THAT</strong>
                    the equity shares so issued shall rank pari passu
                    with existing equity shares of the Company.
                </p>

                <p class="certificate-paragraph">
                    <strong>RESOLVED FURTHER THAT</strong>
                    any Director or the Company Secretary be authorised
                    to file necessary forms with the Registrar of Companies
                    and do all acts required to give effect to this resolution.
                </p>
            </div>

            <div class="certificate-footer">
                <div class="footer-item">
                    <span class="footer-item-label">For</span>
                    <span class="footer-item-value" id="footerCompany">
                        ____________________
                    </span>
                </div>

                <div class="footer-item">
                    <span class="footer-item-label">Authorised Signatory</span>
                    <span class="footer-item-value" id="footerDirector">
                        ____________________
                    </span>
                </div>

                <div class="footer-item">
                    <span class="footer-item-label">DIN</span>
                    <span class="footer-item-value" id="footerDin">
                        ____________________
                    </span>
                </div>
            </div>
        </div>
    </div>
</div>

        </div>
        
    <!-- Info Section -->
<div class="info-section">
    <div class="info-card">

        <!-- Header -->
        <div class="info-header">
            <span class="info-header-badge">Learn More</span>
            <h2 class="info-title">
                What is a Board Resolution for Conversion of Loan into Equity?
            </h2>
            <p class="info-subtitle">
                Introduction, Benefits, Compliance & Sample Format
            </p>
        </div>

        <!-- Introduction -->
        <div class="info-content">
            <p class="info-text">
                A Board Resolution for Conversion of Loan into Equity is a formal
                corporate document that records the decision of the Board of Directors
                to convert an outstanding loan, typically from directors or promoters,
                into equity shares of the company.
            </p>

            <p class="info-text">
                This resolution is essential under the Companies Act, 2013, as it
                authorises the allotment of shares in lieu of cash repayment and
                ensures that the transaction is properly documented for statutory
                and regulatory compliance.
            </p>

            <p class="info-text">
                This document is required when a company wishes to restructure its
                debt by issuing equity shares instead of repaying the principal and
                interest in cash. It is commonly used in situations involving
                promoter loans, inter-corporate deposits, or loans from directors
                where the terms allow for optional or mandatory conversion into equity.
            </p>

            <p class="info-text">
                The resolution serves as a legal record of the Board’s approval and
                is essential for filing with the Registrar of Companies (ROC) and
                for maintaining accurate corporate records.
            </p>
        </div>

        <!-- Benefits -->
        <div class="info-content">
            <h3 class="format-title">Benefits of Using a Standard Format</h3>

            <p class="info-text">
                Using a professionally drafted, ready-to-use Board Resolution format
                helps companies maintain consistency in corporate documentation.
            </p>

            <p class="info-text">
                A standardised template reduces the risk of errors, ensures all
                legally required details are captured, and saves significant time
                during the drafting process.
            </p>

            <p class="info-text">
                This approach supports compliance with the Companies Act, 2013 and
                facilitates smooth filing with regulatory authorities.
            </p>
        </div>

        <!-- Compliance -->
        <div class="info-content">
            <h3 class="format-title">Relevance to Company Compliance</h3>

            <p class="info-text">
                The conversion of loan into equity is a significant corporate action
                that affects the company’s capital structure.
            </p>

            <p class="info-text">
                For companies seeking to formalise their shareholding or restructure
                promoter contributions, this resolution forms part of the broader
                compliance framework.
            </p>

            <p class="info-text">
                Companies that are already registered should ensure that all
                capital-related transactions, including loan conversions, are
                properly documented and filed with the Registrar of Companies.
            </p>

            <p class="info-text">
                For businesses planning to incorporate or seeking GST Registration,
                understanding such compliance requirements at an early stage helps
                establish robust corporate governance practices from the outset.
            </p>
        </div>

        <!-- Sample Format -->
        <div class="format-section">
            <h3 class="format-title">
                Board Resolution for Conversion of Loan into Equity – Sample Format
            </h3>

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
                Email: _______________________________
            </p>

            <p class="format-text">
                <strong>CERTIFIED TRUE COPY OF THE BOARD RESOLUTION</strong>
            </p>

            <p class="format-text">
                Passed at the Meeting of the Board of Directors held on
                ____________ (Date) at ____________ (Time) at the Registered
                Office of the Company.
            </p>

            <p class="format-text">
                <strong>Subject:</strong> Conversion of Loan into Equity Shares
            </p>

            <p class="format-text">
                The Chairman of the meeting apprised the Board that the company
                has, from time to time, obtained loans from its director(s),
                subject to mutually agreed terms and conditions.
            </p>

            <p class="format-text">
                <strong>RESOLVED THAT</strong> pursuant to the loan agreement
                entered into between the company and its director(s) on
                ____________ (Date) for an amount of Rs. ____________,
                wherein an option was granted for conversion of the loan into
                equity shares, the Board hereby approves the conversion of the
                said loan into equity shares of the Company.
            </p>

            <p class="format-text">
                <strong>RESOLVED FURTHER THAT</strong> pursuant to Section 62
                and other applicable provisions of the Companies Act, 2013,
                the consent of the Board be and is hereby accorded for the
                issue and allotment of equity shares in full satisfaction
                of the outstanding loan.
            </p>

            <p class="format-text">
                <strong>RESOLVED FURTHER THAT</strong> the equity shares so
                issued shall rank pari passu in all respects with the
                existing equity shares of the Company.
            </p>

            <p class="format-text">
                <strong>RESOLVED FURTHER THAT</strong> any Director or the
                Company Secretary of the Company be authorised to sign,
                execute and file necessary forms with the Registrar of
                Companies and to do all such acts as may be required to
                give effect to this resolution.
            </p>

            <p class="format-text">
                Certified to be True<br><br>
                For _________________________ (Company Name)<br><br>
                <strong>Signature:</strong> _________________________<br>
                <strong>Name:</strong> _________________________<br>
                <strong>Designation:</strong> _________________________<br>
                <strong>DIN:</strong> _________________________
            </p>
        </div>

    </div>
</div>
    
        <!-- FAQ Section -->
<div class="faq-section">
    <div class="info-header">
        <h2 class="info-title">Frequently Asked Questions</h2>
    </div>

    <div class="faq-grid">

        <div class="faq-item">
            <h4 class="faq-question">
                Are the details in the Board Resolution the same as the Special Resolution?
            </h4>
            <p class="faq-answer">
                The key details such as loan amount, conversion terms and number
                of shares are generally consistent. However, the Board Resolution
                records the Board’s approval, while the Special Resolution records
                shareholder approval.
            </p>
        </div>

        <div class="faq-item">
            <h4 class="faq-question">
                Is the signature of all directors mandatory?
            </h4>
            <p class="faq-answer">
                No. The resolution is usually signed by the Chairperson or an
                authorised director and certified as a true copy.
            </p>
        </div>

        <div class="faq-item">
            <h4 class="faq-question">
                What details are included in the resolution format?
            </h4>
            <p class="faq-answer">
                It includes company details, loan agreement date, loan amount,
                interest rate, number of equity shares, issue price, confirmation
                of pari passu ranking, and authorised signatory details.
            </p>
        </div>

        <div class="faq-item">
            <h4 class="faq-question">
                Is professional certification mandatory?
            </h4>
            <p class="faq-answer">
                Professional certification is not mandatory for the resolution
                itself, but may be required while filing MCA forms with the ROC.
            </p>
        </div>

        <div class="faq-item">
            <h4 class="faq-question">
                Is the Board Resolution mandatory for MCA filing?
            </h4>
            <p class="faq-answer">
                Yes. The Board Resolution approving conversion of loan into equity
                is a mandatory attachment for forms such as PAS-3.
            </p>
        </div>

    </div>
</div>

    </div>
</div>
<script>
document.addEventListener('DOMContentLoaded', function () {

    const form = document.querySelector('form');
    const stepDots = document.querySelectorAll('.step-dot');

    /* -----------------------------
       Set Default Dates (Today)
    ----------------------------- */
    const today = new Date().toISOString().split('T')[0];
    ['meeting_date', 'loan_date', 'conversion_date'].forEach(name => {
        const el = form.querySelector(`[name="${name}"]`);
        if (el && !el.value) el.value = today;
    });

    /* -----------------------------
       Attach Live Preview Events
    ----------------------------- */
    const inputs = form.querySelectorAll('input, textarea, select');
    inputs.forEach(input => {
        input.addEventListener('input', updatePreview);
        input.addEventListener('change', updatePreview);
    });

    updatePreview();

    /* -----------------------------
       Update Preview Function
    ----------------------------- */
    function updatePreview() {

        const get = (name, fallback = '________________') => {
            const el = form.querySelector(`[name="${name}"]`);
            return el && el.value.trim() !== '' ? el.value : fallback;
        };

        const formatDate = (value) => {
            if (!value) return '__________';
            return new Date(value).toLocaleDateString('en-IN', {
                day: '2-digit',
                month: 'long',
                year: 'numeric'
            });
        };

        /* -----------------------------
           Fetch Values
        ----------------------------- */
        const companyName   = get('company_name');
        const meetingDate   = formatDate(get('meeting_date', ''));
        const loanDate      = formatDate(get('loan_date', ''));
        const loanAmount    = get('loan_amount');
        const interestRate  = get('interest_rate');
        const shares        = get('equity_shares');
        const faceValue     = get('face_value');
        const issuePrice    = get('issue_price');
        const premium       = get('premium');
        const directorName  = get('director_name');
        const din            = get('din');

        /* -----------------------------
           Inject into Preview
        ----------------------------- */
        setText('prevCompanyName', companyName);
        setText('prevMeetingDate', meetingDate);
        setText('prevLoanDate', loanDate);
        setText('prevLoanAmount', loanAmount);
        setText('prevInterest', interestRate);
        setText('prevEquityShares', shares);
        setText('prevFaceValue', faceValue);
        setText('prevIssuePrice', issuePrice);
        setText('prevPremium', premium);

        setText('footerCompany', companyName);
        setText('footerDirector', directorName);
        setText('footerDin', din);

        updateStepIndicator();
    }

    /* -----------------------------
       Helper: Set Text Safely
    ----------------------------- */
    function setText(id, value) {
        const el = document.getElementById(id);
        if (el) el.textContent = value;
    }

    /* -----------------------------
       Step Progress Indicator
    ----------------------------- */
    function updateStepIndicator() {
        if (!stepDots.length) return;

        const required = form.querySelectorAll('input[required]');
        let filled = 0;

        required.forEach(input => {
            if (input.value.trim() !== '') filled++;
        });

        const progress = filled / required.length;

        stepDots.forEach((dot, index) => {
            dot.classList.remove('active');

            if (index === 0 && progress > 0) dot.classList.add('active');
            if (index === 1 && progress >= 0.5) dot.classList.add('active');
            if (index === 2 && progress === 1) dot.classList.add('active');
        });
    }

});
</script>


@endsection
