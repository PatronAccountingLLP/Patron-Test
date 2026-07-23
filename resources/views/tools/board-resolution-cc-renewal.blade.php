@extends('tools.tool-master')
@section('title')
{{_('Board Resolution for Renewal of Cash Credit (CC) Limit')}}
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
            <h1 class="hero-title">
    Board Resolution for <span>Renewal of Cash Credit (CC) Limit</span>
</h1>
<p class="hero-subtitle">
    Generate a certified Board Resolution for renewal of Cash Credit / Overdraft facility in under 60 seconds.
</p>
        </div>
    </div>

    <!-- Main Container -->
    <div class="download-format-container">
        <div class="alert-wrapper" id="alertContainer"></div>

        <div class="download-format-grid">
            <!-- Form Section -->
            <div class="form-card">
                <div class="form-header">
                    <div class="form-step-indicator">
                        <span class="step-dot active"></span>
                        <span class="step-dot"></span>
                        <span class="step-dot"></span>
                    </div>
                    <h2 class="form-title">Enter Renewal of Cash Credit (CC) Limit</h2>
                    <p class="form-description">
                        <!--Fill in the details below to generate a Board Resolution for Sale of Property.-->
                    </p>
                </div>

<form method="POST" action="{{ route('br.cc.renewal') }}">
@csrf

<div class="form-grid">

    <div class="form-group full-width">
        <label class="form-label">Company Name *</label>
        <input type="text" name="company_name" class="form-control" required>
    </div>

    <div class="form-group full-width">
        <label class="form-label">CIN *</label>
        <input type="text" name="cin" class="form-control" required>
    </div>

    <div class="form-group full-width">
        <label class="form-label">Registered Office Address *</label>
        <textarea name="registered_office" class="form-control" required></textarea>
    </div>

    <div class="form-group full-width">
        <label class="form-label">Email</label>
        <input type="email" name="email" class="form-control">
    </div>

    <div class="form-row">
        <div class="form-group">
            <label class="form-label">Bank Name *</label>
            <input type="text" name="bank_name" class="form-control" required>
        </div>

        <div class="form-group">
            <label class="form-label">Branch Name *</label>
            <input type="text" name="branch_name" class="form-control" required>
        </div>
    </div>

    <div class="form-row">
        <div class="form-group">
            <label class="form-label">CC Limit Amount (₹) *</label>
            <input type="text" name="cc_amount" class="form-control" required>
        </div>

        <div class="form-group">
            <label class="form-label">Amount in Words *</label>
            <input type="text" name="cc_amount_words" class="form-control" required>
        </div>
    </div>

    <div class="form-row">
        <div class="form-group">
            <label class="form-label">Authorised Person *</label>
            <input type="text" name="authorized_person" class="form-control" required>
        </div>

        <div class="form-group">
            <label class="form-label">Designation *</label>
            <input type="text" name="designation" class="form-control" required>
        </div>
    </div>

    <div class="form-row">
        <div class="form-group">
            <label class="form-label">DIN *</label>
            <input type="text" name="din" class="form-control" required>
        </div>

        <div class="form-group">
            <label class="form-label">Resolution Date *</label>
            <input type="date" name="resolution_date" class="form-control" required>
        </div>
    </div>

    <div class="form-group full-width">
        <label class="form-label">Place *</label>
        <input type="text" name="place" class="form-control" required>
    </div>

</div>

<button type="submit" class="btn-submit">
    Generate & Download Resolution
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
                                <p class="preview-subtitle">Board Resolution for Sale of Property</p>
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
        Renewal of Cash Credit / Overdraft Facility
    </p>
</div>

<div class="certificate-body">
    <p class="certificate-paragraph">
        A meeting of the Board of Directors of
        <strong id="prevCompany">________________</strong>
        was duly convened and held on
        <strong id="prevDate">__________</strong>
        at the Registered Office of the Company.
    </p>

    <p class="certificate-paragraph">
        <strong>RESOLVED THAT</strong> the Board hereby accords its consent to
        request <strong id="prevBank">__________</strong>,
        <strong id="prevBranch">__________</strong> to renew the existing Cash
        Credit / Overdraft facility to the extent of
        Rs. <strong id="prevAmount">__________</strong>.
    </p>

    <p class="certificate-paragraph">
        <strong>RESOLVED FURTHER THAT</strong> Mr./Ms.
        <strong id="prevAuth">__________</strong>,
        <strong id="prevDesig">__________</strong>,
        holding DIN <strong id="prevDin">__________</strong>,
        be authorised to execute all documents and
        create or modify charge in favour of the Bank.
    </p>

    <p class="certificate-paragraph">
        <strong>RESOLVED FURTHER THAT</strong> the authorised person be empowered
        to digitally sign and file e-forms with MCA
        under the Companies Act, 2013.
    </p>
</div>

<div class="certificate-footer">
    <div class="footer-item">
        <span class="footer-item-label">For Company</span>
        <span class="footer-item-value" id="prevCompanyFooter">________________</span>
    </div>
    <div class="footer-item">
        <span class="footer-item-label">Place</span>
        <span class="footer-item-value" id="prevPlace">________________</span>
    </div>
    <div class="footer-item">
        <span class="footer-item-label">Date</span>
        <span class="footer-item-value" id="prevDateFooter">________________</span>
    </div>
</div>

                    </div>
                </div>
            </div>
        </div>

        <!-- Info Section -->
<div class="info-section">
    <div class="info-card">
        <div class="info-header">
            <span class="info-header-badge">Learn More</span>
            <h2 class="info-title">
                What is a Board Resolution for Renewal of Cash Credit (CC) Limit?
            </h2>
            <p class="info-subtitle">
                Professional Format Guide for Indian Companies
            </p>
        </div>

        <div class="info-content">
            <p class="info-text">
                A Board Resolution for Renewal of Cash Credit (CC) Limit is a formal corporate
                document that records the decision of a company’s Board of Directors to renew or
                extend an existing cash credit or overdraft facility with a bank. Cash credit
                facilities are generally sanctioned for a limited period, usually one year, and
                require periodic renewal to continue availing working capital finance.
            </p>

            <p class="info-text">
                Under the Companies Act, 2013, decisions relating to borrowing arrangements must
                be approved by the Board through a validly passed resolution. Banks require this
                resolution as part of their renewal documentation to ensure that the borrowing
                has been duly authorised by the company.
            </p>

            <p class="info-text">
                Finance managers, company secretaries, and directors handling banking
                relationships regularly prepare this resolution. It also authorises designated
                individuals to execute renewal documents, create or modify charges, and operate
                the cash credit or overdraft account.
            </p>
        </div>

        <div class="format-section">
            <h3 class="format-title">
                Board Resolution for Renewal of Cash Credit (CC) Limit – Sample Format
            </h3>

            <p class="format-text">[To be printed on Company Letterhead]</p>

            <p class="format-text">Company Name: _______________________________</p>
            <p class="format-text">CIN: _______________________________</p>
            <p class="format-text">Registered Office Address: _______________________________</p>
            <p class="format-text">Email: _______________________________</p>

            <p class="format-text">
                <strong>CERTIFIED TRUE COPY OF THE BOARD RESOLUTION</strong>
            </p>

            <p class="format-text">
                Passed at the Meeting of the Board of Directors held on __________ (Date)
                at __________ (Time) at the Registered Office of the Company.
            </p>

            <p class="format-text">
                <strong>Subject:</strong> Renewal of Cash Credit / Overdraft Facility
            </p>

            <p class="format-text">
                <strong>RESOLVED THAT</strong> the consent of the Board of Directors be and
                is hereby accorded to request __________ (Name of Bank),
                __________ (Branch Name) to renew the existing Cash Credit /
                Overdraft facility to the extent of Rs. __________ (Rupees
                __________ only).
            </p>

            <p class="format-text">
                <strong>RESOLVED FURTHER THAT</strong> Mr./Ms. __________ (Name),
                __________ (Designation), holding DIN __________, be and is hereby
                authorised to execute all documents and create or modify charge
                as required by the Bank.
            </p>

            <p class="format-text">
                <strong>RESOLVED FURTHER THAT</strong> the authorised person be
                empowered to digitally sign and file the requisite e-forms with
                the Ministry of Corporate Affairs under the Companies Act, 2013.
            </p>

            <p class="format-text">
                For and on behalf of __________ (Company Name)<br><br>
                Signature: _______________________________<br>
                Name: _______________________________<br>
                Designation: _______________________________<br>
                DIN: _______________________________<br>
                Date: _______________________________<br>
                Place: _______________________________
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
                Who can be considered an authorised signatory for renewal of CC limit?
            </h4>
            <p class="faq-answer">
                Any director, managing director, or key managerial personnel
                specifically authorised by the Board can act as the authorised
                signatory. The person’s name, designation, and DIN must be clearly
                mentioned in the resolution.
            </p>
        </div>

        <div class="faq-item">
            <h4 class="faq-question">
                Is signature of all directors mandatory?
            </h4>
            <p class="faq-answer">
                No. The resolution must be passed with the requisite quorum at a
                Board Meeting. A certified true copy is generally signed by the
                Chairperson or an authorised director.
            </p>
        </div>

        <div class="faq-item">
            <h4 class="faq-question">
                Which resolution is required for renewal of CC limit?
            </h4>
            <p class="faq-answer">
                A Board Resolution passed at a duly convened Board Meeting is
                required. If borrowing exceeds limits under Section 180(1)(c),
                a Special Resolution may also be required.
            </p>
        </div>

        <div class="faq-item">
            <h4 class="faq-question">
                Is professional certification mandatory?
            </h4>
            <p class="faq-answer">
                Professional certification is not legally mandatory, but some
                banks may require a certified copy by a Company Secretary or
                Chartered Accountant.
            </p>
        </div>

        <div class="faq-item">
            <h4 class="faq-question">
                Can the resolution be passed without a Board Meeting?
            </h4>
            <p class="faq-answer">
                Yes. Under Section 175 of the Companies Act, 2013, a resolution
                may be passed by circulation, subject to bank acceptance.
            </p>
        </div>
    </div>
</div>

    </div>
</div>
<script>
document.addEventListener('input', function () {

    bindText('prevCompany', 'company_name');
    bindText('prevCompanyFooter', 'company_name');
    bindText('prevBank', 'bank_name');
    bindText('prevBranch', 'branch_name');
    bindText('prevAmount', 'cc_amount');
    bindText('prevAuth', 'authorized_person');
    bindText('prevDesig', 'designation');
    bindText('prevDin', 'din');
    bindText('prevPlace', 'place');

    bindDate('prevDate', 'resolution_date');
    bindDate('prevDateFooter', 'resolution_date');
});

function bindText(id, field) {
    const input = document.querySelector(`[name="${field}"]`);
    document.getElementById(id).textContent =
        input && input.value ? input.value : '________________';
}

function bindDate(id, field) {
    const input = document.querySelector(`[name="${field}"]`);
    document.getElementById(id).textContent =
        input && input.value ? input.value : '__________';
}
</script>


@endsection
