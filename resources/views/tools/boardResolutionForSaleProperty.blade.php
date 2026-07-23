@extends('tools.tool-master')
@section('title')
{{_('Board Resolution for Sale of Property')}}
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
            <h1 class="hero-title">Board Resolution for <span>Sale of Property</span></h1>
            <p class="hero-subtitle">
                Generate a certified Board Resolution authorising sale of company property in under 60 seconds.
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
                    <h2 class="form-title">Enter Company & Resolution Details</h2>
                    <p class="form-description">
                        Fill in the details below to generate a Board Resolution for Sale of Property.
                    </p>
                </div>

                <form id="propertyRegistrationForm" method="POST" action="{{route('br.property') }}">
                    @csrf

                    <div class="form-grid">
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

                        <div class="form-row">
                            <div class="form-group">
                                <label class="form-label">Authorised Director <span class="required">*</span></label>
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
                                    </select>
                                </div>
                            </div>
                        </div>
                        
                         <div class="form-row">
                            <div class="form-group">
                                <label class="form-label">Minimum Sale Price <span class="required">*</span></label>
                                <input type="text" name="minimum_sale" class="form-control" placeholder="Minimum Sale" required>
                            </div>

                            <div class="form-group">
                                <label class="form-label">Survey No <span class="required">*</span></label>
                                <input type="text" name="survey_no" class="form-control" required placeholder="Survey Number">
                            </div>
                        </div>
                        
                        <div class="form-row">
                            <div class="form-group">
                                <label class="form-label">Property Address <span class="required">*</span></label>
                                <input type="text" name="property_address" class="form-control" placeholder="Property Address" required>
                            </div>

                            <div class="form-group">
                                <label class="form-label">Property Area <span class="required">*</span></label>
                                <input type="text" name="property_area" class="form-control" required placeholder="Property Area">
                            </div>
                        </div>
                          <div class="form-row">
                            <div class="form-group">
                                <label class="form-label">Din Number <span class="required">*</span></label>
                                <input type="text" name="din" class="form-control" placeholder="Enter Din Number" required>
                            </div>

                            <div class="form-group">
                                <label class="form-label">Maximum Price <span class="required">*</span></label>
                                <input type="text" name="maximum_price" class="form-control" required placeholder="Maximum Price">
                            </div>
                        </div>
                        <!-- <div class="form-group full-width">-->
                        <!--    <label class="form-label">DIN Number <span class="required">*</span></label>-->
                        <!--    <input type="text" name="din" class="form-control" placeholder="Enter DIN Number" required>-->
                        <!--</div>-->
                  
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
                            <h2 class="certificate-doc-title">CERTIFIED TRUE COPY OF THE BOARD RESOLUTION</h2>
                            <p class="certificate-doc-subtitle">
                                Passed at the Meeting of the Board of Directors
                            </p>
                        </div>

                        <div class="certificate-body">
                            <p class="certificate-paragraph">
                                A meeting of the Board of Directors of
                                <strong id="prevBusinessName">________________</strong>
                                was duly convened and held on
                                <strong id="footerDate">__________</strong>
                                at the Registered Office of the Company.
                            </p>

                            <p class="certificate-paragraph">
                                <strong>RESOLVED THAT</strong> Mr./Ms.
                                <strong id="prevAuthPerson">________________</strong>,
                                <strong id="prevDesignation">Director</strong> of the Company,
                                be and is hereby authorised to negotiate, finalise and determine
                                the most advantageous price for sale of the Company’s immovable property
                                situated at <strong id="prevAddress">________________</strong>.
                            </p>

                            <p class="certificate-paragraph">
                                RESOLVED FURTHER THAT the authorised Director be empowered
                                to sign, execute and present the Agreement for Sale, Sale Deed
                                and all other necessary documents before the Registrar or
                                Sub-Registrar of Assurances.
                            </p>

                            <p class="certificate-paragraph">
                                RESOLVED FURTHER THAT the Director is authorised to engage an Advocate
                                and incur necessary expenses in connection with the said sale.
                            </p>

                            <div class="certificate-signature">
                                <p class="signature-label">Signature</p>
                                <div class="signature-line"></div>
                            </div>
                        </div>

                        <div class="certificate-footer">
                            <div class="footer-item">
                                <span class="footer-item-label">For Company</span>
                                <span class="footer-item-value" id="footerOwnerName">________________</span>
                            </div>
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

        <!-- Info Section -->
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



        <!-- FAQ Section -->
        <div class="faq-section">
            <div class="info-header">
                <h2 class="info-title">Frequently Asked Questions</h2>
            </div>

            <div class="faq-grid">
                <div class="faq-item">
                    <h4 class="faq-question">Is signature of all directors mandatory?</h4>
                    <p class="faq-answer">
                        No. A certified copy signed by one authorised director is sufficient.
                    </p>
                </div>

                <div class="faq-item">
                    <h4 class="faq-question">Is professional certification required?</h4>
                    <p class="faq-answer">
                        Professional certification is not mandatory under Companies Act, 2013.
                    </p>
                </div>

                <div class="faq-item">
                    <h4 class="faq-question">Should it be on company letterhead?</h4>
                    <p class="faq-answer">
                        Yes, it is advisable to prepare the resolution on official letterhead.
                    </p>
                </div>

                <div class="faq-item">
                    <h4 class="faq-question">Who can be authorised signatory?</h4>
                    <p class="faq-answer">
                        Any director authorised by the Board can sign the resolution.
                    </p>
                </div>

                <div class="faq-item">
                    <h4 class="faq-question">Is shareholder approval required?</h4>
                    <p class="faq-answer">
                        If substantial assets are involved, shareholder approval under
                        Section 180(1)(a) may be required.
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
document.addEventListener('DOMContentLoaded', function () {

    const form = document.getElementById('propertyRegistrationForm');
    const downloadPdfBtn = document.getElementById('downloadPdfBtn');
    const alertContainer = document.getElementById('alertContainer');

    // Set default date
    const today = new Date().toISOString().split('T')[0];
    const dateInput = form.querySelector('[name="resolution_sign_date"]');
    if (dateInput) {
        dateInput.value = today;
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
        const companyName = form.querySelector('[name="business_name"]').value || '________________';
        const officeAddress = form.querySelector('[name="register_address"]').value || '________________';
        const directorName = form.querySelector('[name="authorized_person_name"]').value || '________________';
        const designation = form.querySelector('[name="owner_director_partner"]').value || 'Director';
        const place = form.querySelector('[name="state"]').value || '________________';
        const resolutionDate = form.querySelector('[name="resolution_sign_date"]').value;

        // Update preview text
        const elCompany = document.getElementById('prevBusinessName');
        const elAddress = document.getElementById('prevAddress');
        const elDirector = document.getElementById('prevAuthPerson');
        const elDesignation = document.getElementById('prevDesignation');
        const elFooterCompany = document.getElementById('footerOwnerName');
        const elFooterPlace = document.getElementById('footerPlace');
        const elFooterDate = document.getElementById('footerDate');

        if (elCompany) elCompany.textContent = companyName;
        if (elAddress) elAddress.textContent = officeAddress;
        if (elDirector) elDirector.textContent = directorName;
        if (elDesignation) elDesignation.textContent = designation;
        if (elFooterCompany) elFooterCompany.textContent = companyName;
        if (elFooterPlace) elFooterPlace.textContent = place;

        if (resolutionDate && elFooterDate) {
            const formattedDate = new Date(resolutionDate).toLocaleDateString('en-IN', {
                day: '2-digit',
                month: 'long',
                year: 'numeric'
            });
            elFooterDate.textContent = formattedDate;
        } else if (elFooterDate) {
            elFooterDate.textContent = '________________';
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

@endsection
