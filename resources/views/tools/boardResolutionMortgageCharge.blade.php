@extends('tools.tool-master')
@section('title')
{{_('Board Resolution for   Authorize Mortgage and Creation of Charge')}}
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
            <h1 class="hero-title">Board Resolution for  <span>  Authorize Mortgage and Creation of Charge</span></h1>
            <p class="hero-subtitle">
                Generate a certified Board Resolution for    Authorize Mortgage and Creation of Charge in under 60 seconds.
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
            <h2 class="form-title">Enter Company & Charge Details</h2>
            <p class="form-description">
                Fill in the details below to generate a Board Resolution to Authorize Mortgage and Creation of Charge.
            </p>
        </div>

        <form id="mortgageChargeForm" method="POST" action="{{route('br.mortgage.charge') }}">
            @csrf

            <div class="form-grid">
                <div class="form-group full-width">
                    <label class="form-label">Company Name <span class="required">*</span></label>
                    <input type="text" name="company_name" class="form-control" placeholder="Enter company name" required>
                </div>

                <div class="form-row">
                    <div class="form-group">
                        <label class="form-label">CIN <span class="required">*</span></label>
                        <input type="text" name="cin" class="form-control" placeholder="Enter CIN" required>
                    </div>

                    <div class="form-group">
                        <label class="form-label">Email ID <span class="required">*</span></label>
                        <input type="email" name="email" class="form-control" placeholder="Enter email" required>
                    </div>
                </div>

                <div class="form-group full-width">
                    <label class="form-label">Registered Office Address <span class="required">*</span></label>
                    <textarea name="registered_office" class="form-control" placeholder="Enter registered office address" required></textarea>
                </div>

                <div class="form-row">
                    <div class="form-group">
                        <label class="form-label">Date of Meeting <span class="required">*</span></label>
                        <input type="date" name="meeting_date" class="form-control" required>
                    </div>

                    <div class="form-group">
                        <label class="form-label">Time of Meeting <span class="required">*</span></label>
                        <input type="time" name="meeting_time" class="form-control" required>
                    </div>
                </div>

                <!-- Authorised Signatory Details -->
                <div class="form-group full-width">
                    <label class="form-label" style="font-weight:600;color:#333;border-bottom:1px solid #eee;padding-bottom:8px;margin-bottom:12px;">Authorised Signatory Details</label>
                </div>

                <div class="form-row">
                    <div class="form-group">
                        <label class="form-label">Authorised Director Name <span class="required">*</span></label>
                        <input type="text" name="director_name" class="form-control" placeholder="Director name" required>
                    </div>

                    <div class="form-group">
                        <label class="form-label">Designation <span class="required">*</span></label>
                        <div class="select-wrapper">
                            <select name="designation" class="form-control form-select" required>
                                <option value="">Select designation</option>
                                <option value="Director">Director</option>
                                <option value="Managing Director">Managing Director</option>
                                <option value="Whole-Time Director">Whole-Time Director</option>
                                <option value="Company Secretary">Company Secretary</option>
                            </select>
                        </div>
                    </div>
                </div>

                <div class="form-group full-width">
                    <label class="form-label">DIN <span class="required">*</span></label>
                    <input type="text" name="din" class="form-control" placeholder="Enter DIN Number" required>
                </div>

                <div class="form-row">
                    <div class="form-group">
                        <label class="form-label">Place <span class="required">*</span></label>
                        <input type="text" name="place" class="form-control" placeholder="City / Place" required>
                    </div>

                    <div class="form-group">
                        <label class="form-label">Date <span class="required">*</span></label>
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
                        <p class="preview-subtitle">Board Resolution for Mortgage and Creation of Charge</p>
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
                        <strong id="prevCompanyName">________________</strong><br>
                        CIN: <strong id="prevCIN">________________</strong>
                    </p>

                    <p class="certificate-paragraph">
                        Date of Meeting: <strong id="prevMeetingDate">__________</strong> at
                        <strong id="prevMeetingTime">__________</strong> Hours at the Registered Office of the Company.
                    </p>

                    <p class="certificate-paragraph">
                        <strong>SUBJECT:</strong> Authorization to Mortgage, Charge, and Create Security Over Company Assets
                    </p>

                    <p class="certificate-paragraph">
                        <strong>RESOLVED THAT</strong> pursuant to the provisions of Section 180(1)(a) of the Companies Act, 2013, the consent of the Board be and is hereby accorded for creation of charge/mortgage/pledge/hypothecation/security on all or any of the moveable and/or immovable properties of the Company, whether tangible or intangible, present and future assets.
                    </p>

                    <p class="certificate-paragraph">
                        <strong>RESOLVED FURTHER THAT</strong> any Director of the Company be and is hereby authorised to execute loan agreements, security documents, and file Form CHG-1 with the ROC.
                    </p>

                    <div class="certificate-signature">
                        <p class="signature-label">Signature</p>
                        <div class="signature-line"></div>
                    </div>
                </div>

                <div class="certificate-footer">
                    <div class="footer-item">
                        <span class="footer-item-label">For Company</span>
                        <span class="footer-item-value" id="footerCompanyName">________________</span>
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
<!--End Form and Preview Section-->

<div class="info-section">
    <div class="info-card">

        <!-- Header -->
        <div class="info-header">
            <span class="info-header-badge">Professional Format Guide</span>
            <h2 class="info-title">Board Resolution to Authorize Mortgage and Creation of Charge</h2>
            <p class="info-subtitle">
                Corporate Finance Documentation for Indian Companies
            </p>
        </div>

        <!-- Introduction -->
        <div class="info-content">
            <h3 class="info-subheading">Introduction</h3>

            <p class="info-text">
                A Board Resolution to Authorize Mortgage and Creation of Charge is a formal corporate
                document that records the Board of Directors' consent to create security over the
                company's assets for borrowings. Under the Companies Act, 2013, when a company
                intends to mortgage, pledge, hypothecate, or create any charge over its moveable or
                immovable properties to secure loans from financial institutions or banks, prior
                board approval is mandatory. This resolution forms an essential part of the
                documentation required by lenders before disbursement of funds.
            </p>

            <p class="info-text">
                This resolution specifies the nature and extent of charge to be created, the assets
                to be encumbered (including present and future assets), the name of the lending
                institution(s), and the purpose of borrowing. The document authorises directors to
                execute security documents, loan agreements, and other related instruments. Companies
                must also file Form CHG-1 (for creation of charge other than debentures) or Form
                CHG-9 (for modification of charge) with the Registrar of Companies within the
                prescribed time to register the charge.
            </p>

            <!-- Benefits -->
            <h3 class="info-subheading">Benefits of Using a Standard Format</h3>

            <p class="info-text">
                Utilising a professionally drafted board resolution format ensures that all statutory
                requirements under the Companies Act, 2013 and the Companies (Meetings of Board and
                its Powers) Rules, 2014 are properly addressed. A ready-to-use template saves
                valuable time during loan processing, reduces the risk of procedural errors, and
                provides a consistent framework that meets the documentation requirements of banks
                and financial institutions.
            </p>

            <!-- Relevance -->
            <h3 class="info-subheading">Relevance to Corporate Finance</h3>

            <p class="info-text">
                Creation of charge is a significant corporate finance activity. Following Company
                Registration, businesses may require working capital facilities, term loans, or other
                credit arrangements from banks and financial institutions. The creation of security
                over company assets is a standard requirement for such borrowings.
            </p>

            <p class="info-text">
                The company must ensure that the charge is registered with the ROC within thirty days
                of creation. Proper documentation ensures compliance with statutory requirements and
                facilitates smooth disbursement of sanctioned facilities.
            </p>
        </div>

        <!-- Sample Format -->
        <div class="format-section">
            <h3 class="format-title">
                Board Resolution to Authorize Mortgage and Creation of Charge – Sample Format
            </h3>

            <p class="format-text">
                <strong>Company Name:</strong> _______________________________________
            </p>

            <p class="format-text">
                <strong>CIN:</strong> _______________________________________
            </p>

            <p class="format-text">
                <strong>Registered Office:</strong> _______________________________________
            </p>

            <p class="format-text">
                <strong>Email:</strong> _______________________________________
            </p>

            <p class="format-text">
                <strong>CERTIFIED TRUE COPY OF THE BOARD RESOLUTION</strong>
            </p>

            <p class="format-text">
                Passed at the Meeting of the Board of Directors of the Company
            </p>

            <p class="format-text">
                <strong>Date of Meeting:</strong> __.__.______
            </p>

            <p class="format-text">
                <strong>Time:</strong> ______ (Hours)
            </p>

            <p class="format-text">
                <strong>Venue:</strong> Registered Office of the Company
            </p>

            <p class="format-text">
                <strong>SUBJECT: AUTHORIZATION TO MORTGAGE, CHARGE, AND CREATE SECURITY OVER COMPANY ASSETS</strong>
            </p>

            <p class="format-text">
                The Chairman informed the Board that the Company proposes to avail credit facilities from banks/financial institutions to fund its business operations and expansion plans. The Company intends to optimize its capital structure while maintaining adequate liquidity for operations. The Board discussed the matter in detail and passed the following resolution unanimously:
            </p>

            <p class="format-text">
                <strong>"RESOLVED THAT</strong> pursuant to the provisions of Section 180(1)(a) of the Companies Act, 2013 read with the Companies (Meetings of Board and its Powers) Rules, 2014 (including any statutory modification or re-enactment thereof for the time being in force), and subject to approval of the members of the Company and the Articles of Association of the Company, and subject to such other approvals as may be required under the Companies Act or any other applicable law, the consent of the Board of Directors be and is hereby accorded for creation of charge/mortgage/pledge/hypothecation/security, in such form and manner and with such ranking, at such time, and on such terms as the Board may determine, on all or any of the:
            </p>

            <ul class="format-list">
                <li>Moveable and/or immovable properties of the Company, whether tangible or intangible;</li>
                <li>Present and future assets of the Company;</li>
                <li>Whole or any part of the undertaking(s) of the Company;</li>
            </ul>

            <p class="format-text">
                in favour of banks, financial institutions, lenders, agents, and/or trustees, for securing borrowings availed or to be availed by the Company by way of term loans (in foreign currency and/or Indian rupees), working capital facilities, and/or any other credit facilities sanctioned or to be sanctioned by banks/financial institutions to the Company, in terms of loan agreements or other documents containing such terms, conditions, and covenants in respect of enforcement of security as may be stipulated and agreed between the Company and the respective lenders from time to time, subject to the borrowing limits approved under Section 180(1)(c) of the Companies Act, 2013.
            </p>

            <p class="format-text">
                <strong>RESOLVED FURTHER THAT</strong> any Director of the Company, severally or jointly, be and is hereby authorised to:
            </p>

            <ul class="format-list">
                <li>Finalise, settle, and execute loan agreements, security documents, deeds of mortgage, hypothecation agreements, and all related documents;</li>
                <li>File Form CHG-1 or other applicable forms with the Registrar of Companies for registration of charge within the prescribed time;</li>
                <li>Negotiate and agree upon the terms and conditions of borrowings and creation of security;</li>
                <li>Represent the Company before banks, financial institutions, and regulatory authorities;</li>
                <li>Do all such acts, deeds, matters, and things as may be necessary, proper, or expedient for giving effect to this resolution and to settle any question, difficulty, or doubt that may arise in regard to creating mortgages/charges as aforesaid."</li>
            </ul>

            <p class="format-text">
                <strong>CERTIFIED TRUE COPY</strong>
            </p>

            <p class="format-text">
                For ________________________________________
            </p>

            <p class="format-text">
                (Name of the Company)
            </p>

            <p class="format-text">
                <strong>Signature:</strong> __________________________
            </p>

            <p class="format-text">
                <strong>Name:</strong> __________________________
            </p>

            <p class="format-text">
                <strong>Designation:</strong> __________________________
            </p>

            <p class="format-text">
                <strong>DIN:</strong> __________________________
            </p>

            <p class="format-text">
                <strong>Date:</strong> __________________________
            </p>

            <p class="format-text">
                <strong>Place:</strong> __________________________
            </p>
        </div>

        <!-- FAQ -->
        <div class="faq-section">
            <h3 class="faq-title">Frequently Asked Questions</h3>

            <div class="faq-item">
                <h4 class="faq-question">
                    1. Is the signature of all directors mandatory on the board resolution to authorize mortgage and creation of charge?
                </h4>
                <p class="faq-answer">
                    No, signatures of all directors are not mandatory. The resolution is passed by a
                    majority of directors present and voting at a duly convened board meeting where
                    quorum is present. The certified true copy may be signed by a single authorised
                    director or the company secretary. Banks may have their own format requirements
                    which should be verified beforehand.
                </p>
            </div>

            <div class="faq-item">
                <h4 class="faq-question">
                    2. Does the Board Resolution to authorize mortgage and creation of charge need to be certified by a professional?
                </h4>
                <p class="faq-answer">
                    There is no statutory requirement for the board resolution to be certified by an
                    external professional. The certified true copy may be signed by any director or
                    the company secretary. However, banks and financial institutions may request
                    additional certification or attestation as per their internal documentation
                    requirements. Some lenders may require notarisation of the resolution.
                </p>
            </div>

            <div class="faq-item">
                <h4 class="faq-question">
                    3. Is the Board resolution to authorize mortgage and creation of charge to be on company letterhead?
                </h4>
                <p class="faq-answer">
                    While there is no strict legal requirement mandating the use of company letterhead,
                    it is standard corporate practice and is typically expected by banks and financial
                    institutions. Using official letterhead adds authenticity to the document,
                    facilitates easy identification and verification, and presents a professional
                    appearance. Most lenders require the resolution on letterhead.
                </p>
            </div>

            <div class="faq-item">
                <h4 class="faq-question">
                    4. Who can be considered as an authorized signatory for the board resolution to authorize mortgage and creation of charge?
                </h4>
                <p class="faq-answer">
                    Any director present at the board meeting or the company secretary (if appointed)
                    may be authorised to sign the certified true copy of the resolution. The Board
                    typically designates one or more directors to execute loan agreements, security
                    documents, file Form CHG-1 with the ROC, and represent the company before banks
                    and financial institutions.
                </p>
            </div>

            <div class="faq-item">
                <h4 class="faq-question">
                    5. Which resolution is required for the board resolution to authorize mortgage and creation of charge?
                </h4>
                <p class="faq-answer">
                    A board resolution is required to authorize the creation of charge over company
                    assets. The resolution should reference Section 180(1)(a) of the Companies Act,
                    2013 and must be subject to shareholder approval through a special resolution in
                    general meeting. The board resolution serves as initial approval, while the
                    special resolution provides the requisite member consent for disposal or
                    encumbrance of substantial assets.
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

    const form = document.getElementById('mortgageChargeForm');
    const downloadPdfBtn = document.getElementById('downloadPdfBtn');
    const alertContainer = document.getElementById('alertContainer');

    // Set default date
    const today = new Date().toISOString().split('T')[0];
    const dateInput = form.querySelector('[name="meeting_date"]');
    const resolutionDateInput = form.querySelector('[name="resolution_date"]');
    if (dateInput) {
        dateInput.value = today;
    }
    if (resolutionDateInput) {
        resolutionDateInput.value = today;
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
        const companyName = form.querySelector('[name="company_name"]').value || '________________';
        const cin = form.querySelector('[name="cin"]').value || '________________';
        const meetingDate = form.querySelector('[name="meeting_date"]').value;
        const meetingTime = form.querySelector('[name="meeting_time"]').value || '__________';
        const place = form.querySelector('[name="place"]').value || '________________';
        const resolutionDate = form.querySelector('[name="resolution_date"]').value;

        // Update preview text
        const elCompanyName = document.getElementById('prevCompanyName');
        const elCIN = document.getElementById('prevCIN');
        const elMeetingDate = document.getElementById('prevMeetingDate');
        const elMeetingTime = document.getElementById('prevMeetingTime');
        const elFooterCompanyName = document.getElementById('footerCompanyName');
        const elFooterPlace = document.getElementById('footerPlace');
        const elFooterDate = document.getElementById('footerDate');

        if (elCompanyName) elCompanyName.textContent = companyName;
        if (elCIN) elCIN.textContent = cin;
        if (elFooterCompanyName) elFooterCompanyName.textContent = companyName;
        if (elFooterPlace) elFooterPlace.textContent = place;

        if (meetingDate && elMeetingDate) {
            const formattedDate = new Date(meetingDate).toLocaleDateString('en-IN', {
                day: '2-digit',
                month: 'long',
                year: 'numeric'
            });
            elMeetingDate.textContent = formattedDate;
        } else if (elMeetingDate) {
            elMeetingDate.textContent = '__________';
        }

        if (meetingTime && elMeetingTime) {
            elMeetingTime.textContent = meetingTime;
        }

        if (resolutionDate && elFooterDate) {
            const formattedResDate = new Date(resolutionDate).toLocaleDateString('en-IN', {
                day: '2-digit',
                month: 'long',
                year: 'numeric'
            });
            elFooterDate.textContent = formattedResDate;
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
<!--End Js Section -->


@endsection
