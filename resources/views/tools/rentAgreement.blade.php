@extends('tools.tool-master')
@section('title')
{{_(' Rent Agreement for Renting Space to Private Limited Company')}}
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
            <h1 class="hero-title"> <span> Rent Agreement for Renting Space to Private Limited Company</span></h1>
            <p class="hero-subtitle">
                Generate a certified Rent Agreement for Renting Space to Private Limited Company in under 60 seconds.
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
            <h2 class="form-title">Enter Rent Agreement Details</h2>
            <p class="form-description">
                Fill in the details below to generate a Rent Agreement for a Private Limited Company.
            </p>
        </div>

        <form id="rentAgreementForm" method="POST" action="{{ route('br.rent.agreement') }}">
            @csrf

            <div class="form-grid">
                <!-- Lessor Details -->
                <div class="form-group full-width">
                    <label class="form-label">Lessor Name <span class="required">*</span></label>
                    <input type="text" name="lessor_name" class="form-control" placeholder="Enter owner's name" required>
                </div>
                <div class="form-group full-width">
                    <label class="form-label">Lessor Address <span class="required">*</span></label>
                    <textarea name="lessor_address" class="form-control" placeholder="Enter complete address" required></textarea>
                </div>

                <!-- Lessee (Company) Details -->
                <div class="form-group full-width">
                    <label class="form-label">Company Name <span class="required">*</span></label>
                    <input type="text" name="company_name" class="form-control" placeholder="Enter company name" required>
                </div>
                <div class="form-group full-width">
                    <label class="form-label">Director Name <span class="required">*</span></label>
                    <input type="text" name="director_name" class="form-control" placeholder="Enter director name" required>
                </div>

                <!-- Property Details -->
                <div class="form-group full-width">
                    <label class="form-label">Premises Address <span class="required">*</span></label>
                    <textarea name="premises_address" class="form-control" placeholder="Complete address including city, state, PIN" required></textarea>
                </div>

                <!-- Agreement Dates -->
                <div class="form-row">
                    <div class="form-group">
                        <label class="form-label">Agreement Date <span class="required">*</span></label>
                        <input type="date" name="agreement_date" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label class="form-label">Commencement Date <span class="required">*</span></label>
                        <input type="date" name="commencement_date" class="form-control" required>
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group">
                        <label class="form-label">Term Duration (months/years) <span class="required">*</span></label>
                        <input type="text" name="term_duration" class="form-control" placeholder="e.g., 12 months / 1 year" required>
                    </div>
                    <div class="form-group">
                        <label class="form-label">Expiry Date <span class="required">*</span></label>
                        <input type="date" name="expiry_date" class="form-control" required>
                    </div>
                </div>

                <!-- Financial Details -->
                <div class="form-row">
                    <div class="form-group">
                        <label class="form-label">Monthly Rent (₹) <span class="required">*</span></label>
                        <input type="text" name="rent_amount" class="form-control" placeholder="e.g., 25000" required>
                    </div>
                    <div class="form-group">
                        <label class="form-label">Rent in Words <span class="required">*</span></label>
                        <input type="text" name="rent_words" class="form-control" placeholder="e.g., Twenty Five Thousand" required>
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group">
                        <label class="form-label">Security Deposit (₹) <span class="required">*</span></label>
                        <input type="text" name="deposit_amount" class="form-control" placeholder="e.g., 100000" required>
                    </div>
                    <div class="form-group">
                        <label class="form-label">Deposit in Words <span class="required">*</span></label>
                        <input type="text" name="deposit_words" class="form-control" placeholder="e.g., One Lakh" required>
                    </div>
                </div>
                <div class="form-group full-width">
                    <label class="form-label">Rent Payable Date (Day of month) <span class="required">*</span></label>
                    <input type="text" name="payable_day" class="form-control" placeholder="e.g., 5th day" required>
                </div>

                <!-- Termination Notice -->
                <div class="form-group full-width">
                    <label class="form-label">Notice Period for Termination <span class="required">*</span></label>
                    <input type="text" name="notice_period" class="form-control" placeholder="e.g., 30 days / 3 months" required>
                </div>

                <!-- Jurisdiction -->
                <div class="form-group full-width">
                    <label class="form-label">Jurisdiction City <span class="required">*</span></label>
                    <input type="text" name="jurisdiction" class="form-control" placeholder="City for legal jurisdiction" required>
                </div>

                <!-- Signatories -->
                <div class="form-row">
                    <div class="form-group">
                        <label class="form-label">Lessor Signatory Name <span class="required">*</span></label>
                        <input type="text" name="lessor_signatory" class="form-control" placeholder="Name of lessor" required>
                    </div>
                    <div class="form-group">
                        <label class="form-label">Company Authorised Signatory Name <span class="required">*</span></label>
                        <input type="text" name="company_signatory" class="form-control" placeholder="Name of director/authorised person" required>
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group">
                        <label class="form-label">Company Signatory Designation <span class="required">*</span></label>
                        <input type="text" name="signatory_designation" class="form-control" placeholder="e.g., Director" required>
                    </div>
                    <div class="form-group">
                        <label class="form-label">Place of Execution <span class="required">*</span></label>
                        <input type="text" name="place" class="form-control" placeholder="City" required>
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group">
                        <label class="form-label">Witness 1 Name</label>
                        <input type="text" name="witness1_name" class="form-control" placeholder="Optional">
                    </div>
                    <div class="form-group">
                        <label class="form-label">Witness 1 Address</label>
                        <input type="text" name="witness1_address" class="form-control" placeholder="Optional">
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group">
                        <label class="form-label">Witness 2 Name</label>
                        <input type="text" name="witness2_name" class="form-control" placeholder="Optional">
                    </div>
                    <div class="form-group">
                        <label class="form-label">Witness 2 Address</label>
                        <input type="text" name="witness2_address" class="form-control" placeholder="Optional">
                    </div>
                </div>
            </div>

            <button type="submit" class="btn-submit" id="downloadPdfBtn">
                <span class="btn-text">Generate & Download Agreement</span>
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
                        <p class="preview-subtitle">Rent Agreement for Private Limited Company</p>
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
                    <h2 class="certificate-doc-title">RENT AGREEMENT</h2>
                </div>

                <div class="certificate-body">
                    <p class="certificate-paragraph">
                        This Rent Agreement is executed on this <strong id="previewAgreementDay">_______</strong> day of <strong id="previewAgreementMonth">_______</strong> <strong id="previewAgreementYear">_______</strong> at <strong id="previewPlace">________________</strong>.
                    </p>

                    <p class="certificate-paragraph">
                        <strong>BETWEEN</strong><br>
                        Mr./Ms. <strong id="previewLessorName">________________</strong>, residing at <strong id="previewLessorAddress">________________</strong>, hereinafter referred to as the <strong>"LESSOR"</strong> (which expression shall, unless repugnant to the context or meaning thereof, include his/her heirs, executors, administrators, legal representatives, and assigns) of the FIRST PART;
                    </p>

                    <p class="certificate-paragraph">
                        <strong>AND</strong><br>
                        <strong id="previewCompanyName">________________</strong>, a Private Limited Company incorporated under the Companies Act, 2013, having its registered office at <strong id="previewRegisteredOffice">________________</strong>, represented by its Director Mr./Ms. <strong id="previewDirectorName">________________</strong>, hereinafter referred to as the <strong>"LESSEE"</strong> (which expression shall, unless repugnant to the context or meaning thereof, include its successors and permitted assigns) of the SECOND PART.
                    </p>

                    <p class="certificate-paragraph">
                        <strong>WHEREAS</strong><br>
                        The Lessor is the absolute owner and in lawful possession of the premises situated at:<br>
                        <strong id="previewPremisesAddress">________________</strong>
                    </p>

                    <p class="certificate-paragraph">
                        <strong>AND WHEREAS</strong> the Lessee has approached the Lessor with a request to permit the use of the said premises as the registered office of the Company, and the Lessor has agreed to the same on the terms and conditions set forth herein.
                    </p>

                    <p class="certificate-paragraph">
                        <strong>NOW THEREFORE, THIS AGREEMENT WITNESSETH AS FOLLOWS:</strong>
                    </p>

                    <p class="certificate-paragraph">
                        1. <strong>TERM:</strong> The Lessor hereby grants to the Lessee the right to use the above-mentioned premises as the registered office of the Company for a period of <strong id="previewTermDuration">________________</strong> commencing from <strong id="previewCommencementDate">________________</strong> to <strong id="previewExpiryDate">________________</strong>, unless terminated earlier in accordance with the terms hereof.
                    </p>

                    <p class="certificate-paragraph">
                        2. <strong>RENT:</strong> The Lessee shall pay to the Lessor a monthly rent of Rs. <strong id="previewRentAmount">________________</strong>/‑ (Rupees <strong id="previewRentWords">________________</strong> only), payable on or before the <strong id="previewPayableDay">________________</strong> of each calendar month.
                    </p>

                    <p class="certificate-paragraph">
                        3. <strong>SECURITY DEPOSIT:</strong> The Lessee has paid to the Lessor a sum of Rs. <strong id="previewDepositAmount">________________</strong>/‑ (Rupees <strong id="previewDepositWords">________________</strong> only) as security deposit, which shall be refundable at the time of termination of this Agreement, subject to deductions for any outstanding dues or damages, if any.
                    </p>

                    <p class="certificate-paragraph">
                        4. <strong>PURPOSE:</strong> The premises shall be used solely for the purpose of registering and operating the registered office of the Lessee Company. The Lessee shall not use the premises for any unlawful or prohibited activities.
                    </p>

                    <p class="certificate-paragraph">
                        5. <strong>MAINTENANCE:</strong> The Lessee shall maintain the premises in good condition and shall be responsible for any damages caused during the period of occupancy, fair wear and tear excepted.
                    </p>

                    <p class="certificate-paragraph">
                        6. <strong>TERMINATION:</strong> Either party may terminate this Agreement by providing <strong id="previewNoticePeriod">________________</strong> written notice to the other party. Upon termination, the Lessee shall vacate the premises and update its registered office records with the Registrar of Companies.
                    </p>

                    <p class="certificate-paragraph">
                        7. <strong>STATUTORY COMPLIANCE:</strong> The Lessor consents to the Lessee using the address of the premises for all statutory registrations, including but not limited to registration with the Ministry of Corporate Affairs, Goods and Services Tax authorities, and other regulatory bodies as may be required.
                    </p>

                    <p class="certificate-paragraph">
                        8. <strong>JURISDICTION:</strong> Any disputes arising out of or in connection with this Agreement shall be subject to the exclusive jurisdiction of the courts at <strong id="previewJurisdiction">________________</strong>.
                    </p>

                    <p class="certificate-paragraph">
                        <strong>IN WITNESS WHEREOF</strong>, the parties hereto have set their hands on the day and year first above written.
                    </p>

                    <div class="certificate-signature">
                        <p><strong>LESSOR:</strong><br>
                        Signature: _________________________<br>
                        Name: <strong id="previewLessorSignatory">________________</strong><br>
                        Date: <strong id="previewLessorDate">________________</strong><br>
                        Place: <strong id="previewPlaceSign">________________</strong></p>

                        <p><strong>LESSEE:</strong><br>
                        For and on behalf of <strong id="previewCompanySignatoryName">________________</strong><br>
                        Signature: _________________________<br>
                        Name of Authorised Signatory: <strong id="previewCompanySignatory">________________</strong><br>
                        Designation: <strong id="previewSignatoryDesignation">________________</strong><br>
                        Date: <strong id="previewCompanyDate">________________</strong><br>
                        Place: <strong id="previewCompanyPlace">________________</strong></p>

                        <p><strong>WITNESSES:</strong><br>
                        1. Signature: _________________ Name: <span id="previewWitness1Name">________________</span> Address: <span id="previewWitness1Address">________________</span><br>
                        2. Signature: _________________ Name: <span id="previewWitness2Name">________________</span> Address: <span id="previewWitness2Address">________________</span></p>
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
            <span class="info-header-badge">Professional Legal Format Guide</span>
            <h2 class="info-title">Rent Agreement for Renting Space to Private Limited Company</h2>
            <p class="info-subtitle">
                Standard Format for Company Registration and Compliance
            </p>
        </div>

        <!-- Introduction -->
        <div class="info-content">
            <h3 class="info-subheading">Introduction</h3>

            <p class="info-text">
                A Rent Agreement for Renting Space to a Private Limited Company is a formal legal document that establishes the terms under which a property owner permits a company to use their premises as the company's registered office or place of business. Under Indian corporate law, every company incorporated under the Companies Act, 2013, must designate a registered office address at the time of incorporation. This address serves as the official location for all statutory communications from the Ministry of Corporate Affairs (MCA) and other regulatory authorities.
            </p>

            <p class="info-text">
                Since newly incorporated companies typically do not own property at the time of registration, they often operate from rented premises owned by shareholders, directors, or third parties. This rent agreement serves as documentary evidence of the company's lawful right to occupy the premises and is a mandatory attachment when filing for Company Registration with the Registrar of Companies. The document is also relevant for obtaining GST Registration, bank account opening, and other statutory and commercial purposes.
            </p>

            <!-- Benefits -->
            <h3 class="info-subheading">Benefits of Using a Standard Format</h3>

            <p class="info-text">
                Adopting a professionally structured rent agreement format ensures that all essential clauses and particulars are captured accurately, reducing the risk of rejection during regulatory filings. A ready-to-use template expedites the documentation process, maintains consistency with MCA requirements, and provides clarity to both the property owner and the company regarding their respective rights and obligations.
            </p>

            <!-- Relevance -->
            <h3 class="info-subheading">Relevance to Company Registration</h3>

            <p class="info-text">
                During the Company Registration process, applicants are required to submit proof of the registered office address. A duly executed rent agreement, accompanied by a No Objection Certificate from the property owner, serves as valid documentation for this purpose.
            </p>

            <p class="info-text">
                The registered office address declared at the time of incorporation is published in the MCA database and must be printed on the company's letterhead, invoices, and official correspondence. Ensuring accuracy in this document is essential to avoid compliance issues in subsequent filings.
            </p>
        </div>

        <!-- Sample Format -->
        <div class="format-section">
            <h3 class="format-title">
                Rent Agreement for Private Limited Company - Sample Format
            </h3>

            <p class="format-text"><strong>RENT AGREEMENT</strong></p>

            <p class="format-text">
                This Rent Agreement is executed on this _______ day of _______ 20___ at _______________________________________ (City/Place).
            </p>

            <p class="format-text"><strong>BETWEEN</strong></p>

            <p class="format-text">
                Mr./Ms. _______________________________________ (Name of Owner), residing at _______________________________________ (Complete Address of Owner), hereinafter referred to as the "LESSOR" (which expression shall, unless repugnant to the context or meaning thereof, include his/her heirs, executors, administrators, legal representatives, and assigns) of the FIRST PART;
            </p>

            <p class="format-text"><strong>AND</strong></p>

            <p class="format-text">
                _______________________________________ (Company Name), a Private Limited Company incorporated under the Companies Act, 2013, having its registered office at _______________________________________ (Registered Company Address), represented by its Director Mr./Ms. _______________________________________ (Director Name), hereinafter referred to as the "LESSEE" (which expression shall, unless repugnant to the context or meaning thereof, include its successors and permitted assigns) of the SECOND PART.
            </p>

            <p class="format-text"><strong>WHEREAS</strong></p>

            <p class="format-text">
                The Lessor is the absolute owner and in lawful possession of the premises situated at:
            </p>

            <p class="format-text">_______________________________________</p>
            <p class="format-text">_______________________________________</p>
            <p class="format-text">_______________________________________ (Complete Address including City, State, and PIN Code)</p>

            <p class="format-text">
                AND WHEREAS the Lessee has approached the Lessor with a request to permit the use of the said premises as the registered office of the Company, and the Lessor has agreed to the same on the terms and conditions set forth herein.
            </p>

            <p class="format-text"><strong>NOW THEREFORE, THIS AGREEMENT WITNESSETH AS FOLLOWS:</strong></p>

            <p class="format-text">1. TERM: The Lessor hereby grants to the Lessee the right to use the above-mentioned premises as the registered office of the Company for a period of _______ months/years commencing from _______ (Date) to _______ (Date), unless terminated earlier in accordance with the terms hereof.</p>

            <p class="format-text">2. RENT: The Lessee shall pay to the Lessor a monthly rent of Rs. _______/- (Rupees _______ only), payable on or before the _______ day of each calendar month.</p>

            <p class="format-text">3. SECURITY DEPOSIT: The Lessee has paid to the Lessor a sum of Rs. _______/- (Rupees _______ only) as security deposit, which shall be refundable at the time of termination of this Agreement, subject to deductions for any outstanding dues or damages, if any.</p>

            <p class="format-text">4. PURPOSE: The premises shall be used solely for the purpose of registering and operating the registered office of the Lessee Company. The Lessee shall not use the premises for any unlawful or prohibited activities.</p>

            <p class="format-text">5. MAINTENANCE: The Lessee shall maintain the premises in good condition and shall be responsible for any damages caused during the period of occupancy, fair wear and tear excepted.</p>

            <p class="format-text">6. TERMINATION: Either party may terminate this Agreement by providing _______ days/months written notice to the other party. Upon termination, the Lessee shall vacate the premises and update its registered office records with the Registrar of Companies.</p>

            <p class="format-text">7. STATUTORY COMPLIANCE: The Lessor consents to the Lessee using the address of the premises for all statutory registrations, including but not limited to registration with the Ministry of Corporate Affairs, Goods and Services Tax authorities, and other regulatory bodies as may be required.</p>

            <p class="format-text">8. JURISDICTION: Any disputes arising out of or in connection with this Agreement shall be subject to the exclusive jurisdiction of the courts at _______ (City).</p>

            <p class="format-text"><strong>IN WITNESS WHEREOF</strong>, the parties hereto have set their hands on the day and year first above written.</p>

            <p class="format-text"><strong>LESSOR:</strong></p>
            <p class="format-text">Signature: _______________________________________</p>
            <p class="format-text">Name: _______________________________________</p>
            <p class="format-text">Date: _______________________________________</p>
            <p class="format-text">Place: _______________________________________</p>

            <p class="format-text"><strong>LESSEE:</strong></p>
            <p class="format-text">For and on behalf of _______________________________________ (Company Name)</p>
            <p class="format-text">Signature: _______________________________________</p>
            <p class="format-text">Name of Authorised Signatory: _______________________________________</p>
            <p class="format-text">Designation: _______________________________________</p>
            <p class="format-text">Date: _______________________________________</p>
            <p class="format-text">Place: _______________________________________</p>

            <p class="format-text"><strong>WITNESSES:</strong></p>
            <p class="format-text">1. Signature: _________________ Name: _________________ Address: _________________</p>
            <p class="format-text">2. Signature: _________________ Name: _________________ Address: _________________</p>
        </div>

        <!-- FAQ -->
        <div class="faq-section">
            <h3 class="faq-title">Frequently Asked Questions</h3>

            <div class="faq-item">
                <h4 class="faq-question">1. Is a rent agreement mandatory for Company Registration?</h4>
                <p class="faq-answer">
                    Yes, when a company intends to use rented premises as its registered office, a rent agreement is required as proof of the company's right to occupy the premises. This document must be submitted to the Registrar of Companies along with the incorporation application. If the premises are owned by a director or shareholder, alternative documentation such as a utility bill and No Objection Certificate may be accepted.
                </p>
            </div>

            <div class="faq-item">
                <h4 class="faq-question">2. Does the rent agreement need to be registered or notarised?</h4>
                <p class="faq-answer">
                    For the purpose of Company Registration with the MCA, a notarised rent agreement is generally acceptable. However, as per the Registration Act, 1908, lease agreements exceeding 11 months should ideally be registered with the Sub-Registrar. While the MCA may accept unregistered agreements for incorporation, it is advisable to comply with local registration requirements for legal enforceability.
                </p>
            </div>

            <div class="faq-item">
                <h4 class="faq-question">3. Can a residential property be used as a registered office?</h4>
                <p class="faq-answer">
                    Yes, a residential property can be used as the registered office of a private limited company, provided the owner gives consent through a No Objection Certificate. The property should be capable of receiving official correspondence and maintaining statutory records. However, companies should verify local municipal regulations and housing society rules, as some areas may have restrictions on commercial use of residential premises.
                </p>
            </div>

            <div class="faq-item">
                <h4 class="faq-question">4. What is the validity period of a rent agreement for company registration?</h4>
                <p class="faq-answer">
                    There is no prescribed minimum validity period for a rent agreement used in company registration. However, it is prudent to execute an agreement for at least 11 months to one year to ensure continuity. If the agreement expires, the company must either renew the agreement or change its registered office address by filing the requisite forms with the Registrar of Companies.
                </p>
            </div>

            <div class="faq-item">
                <h4 class="faq-question">5. Is a No Objection Certificate required along with the rent agreement?</h4>
                <p class="faq-answer">
                    Yes, a No Objection Certificate (NOC) from the property owner is typically required in addition to the rent agreement. The NOC confirms the owner's consent for the company to use the premises as its registered office and for all statutory purposes. Both documents together serve as valid proof of the registered office address during company incorporation and subsequent filings with regulatory authorities.
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
    const form = document.getElementById('rentAgreementForm');
    const downloadPdfBtn = document.getElementById('downloadPdfBtn');

    // Set default date to today
    const today = new Date().toISOString().split('T')[0];
    const agreementDateInput = form.querySelector('[name="agreement_date"]');
    const commencementDateInput = form.querySelector('[name="commencement_date"]');
    if (agreementDateInput) agreementDateInput.value = today;
    if (commencementDateInput) commencementDateInput.value = today;

    // Default expiry date = 1 year from today
    const expiryDateInput = form.querySelector('[name="expiry_date"]');
    if (expiryDateInput && !expiryDateInput.value) {
        const oneYearLater = new Date();
        oneYearLater.setFullYear(oneYearLater.getFullYear() + 1);
        expiryDateInput.value = oneYearLater.toISOString().split('T')[0];
    }

    // Inputs for live preview
    const inputs = form.querySelectorAll('input, textarea');
    inputs.forEach(input => {
        input.addEventListener('input', updatePreview);
        input.addEventListener('change', updatePreview);
    });

    function updatePreview() {
        // Collect all values
        const lessorName = form.querySelector('[name="lessor_name"]').value || '________________';
        const lessorAddress = form.querySelector('[name="lessor_address"]').value || '________________';
        const companyName = form.querySelector('[name="company_name"]').value || '________________';
        const directorName = form.querySelector('[name="director_name"]').value || '________________';
        const premisesAddress = form.querySelector('[name="premises_address"]').value || '________________';
        const agreementDate = form.querySelector('[name="agreement_date"]').value;
        const commencementDate = form.querySelector('[name="commencement_date"]').value;
        const expiryDate = form.querySelector('[name="expiry_date"]').value;
        const termDuration = form.querySelector('[name="term_duration"]').value || '________________';
        const rentAmount = form.querySelector('[name="rent_amount"]').value || '________________';
        const rentWords = form.querySelector('[name="rent_words"]').value || '________________';
        const depositAmount = form.querySelector('[name="deposit_amount"]').value || '________________';
        const depositWords = form.querySelector('[name="deposit_words"]').value || '________________';
        const payableDay = form.querySelector('[name="payable_day"]').value || '________________';
        const noticePeriod = form.querySelector('[name="notice_period"]').value || '________________';
        const jurisdiction = form.querySelector('[name="jurisdiction"]').value || '________________';
        const lessorSignatory = form.querySelector('[name="lessor_signatory"]').value || '________________';
        const companySignatory = form.querySelector('[name="company_signatory"]').value || '________________';
        const signatoryDesignation = form.querySelector('[name="signatory_designation"]').value || '________________';
        const place = form.querySelector('[name="place"]').value || '________________';
        const witness1Name = form.querySelector('[name="witness1_name"]').value || '________________';
        const witness1Address = form.querySelector('[name="witness1_address"]').value || '________________';
        const witness2Name = form.querySelector('[name="witness2_name"]').value || '________________';
        const witness2Address = form.querySelector('[name="witness2_address"]').value || '________________';

        // Format dates
        const formattedAgreement = agreementDate ? formatDateComponents(agreementDate) : { day: '_______', month: '_______', year: '_______' };
        const formattedCommencement = commencementDate ? formatDate(commencementDate) : '________________';
        const formattedExpiry = expiryDate ? formatDate(expiryDate) : '________________';
        const formattedLessorDate = agreementDate ? formatDate(agreementDate) : '________________';
        const formattedCompanyDate = agreementDate ? formatDate(agreementDate) : '________________';

        // Update preview elements
        document.getElementById('previewAgreementDay').textContent = formattedAgreement.day;
        document.getElementById('previewAgreementMonth').textContent = formattedAgreement.month;
        document.getElementById('previewAgreementYear').textContent = formattedAgreement.year;
        document.getElementById('previewPlace').textContent = place;
        document.getElementById('previewLessorName').textContent = lessorName;
        document.getElementById('previewLessorAddress').textContent = lessorAddress;
        document.getElementById('previewCompanyName').textContent = companyName;
        document.getElementById('previewRegisteredOffice').textContent = premisesAddress;
        document.getElementById('previewDirectorName').textContent = directorName;
        document.getElementById('previewPremisesAddress').textContent = premisesAddress;
        document.getElementById('previewTermDuration').textContent = termDuration;
        document.getElementById('previewCommencementDate').textContent = formattedCommencement;
        document.getElementById('previewExpiryDate').textContent = formattedExpiry;
        document.getElementById('previewRentAmount').textContent = rentAmount;
        document.getElementById('previewRentWords').textContent = rentWords;
        document.getElementById('previewDepositAmount').textContent = depositAmount;
        document.getElementById('previewDepositWords').textContent = depositWords;
        document.getElementById('previewPayableDay').textContent = payableDay;
        document.getElementById('previewNoticePeriod').textContent = noticePeriod;
        document.getElementById('previewJurisdiction').textContent = jurisdiction;
        document.getElementById('previewLessorSignatory').textContent = lessorSignatory;
        document.getElementById('previewLessorDate').textContent = formattedLessorDate;
        document.getElementById('previewPlaceSign').textContent = place;
        document.getElementById('previewCompanySignatoryName').textContent = companyName;
        document.getElementById('previewCompanySignatory').textContent = companySignatory;
        document.getElementById('previewSignatoryDesignation').textContent = signatoryDesignation;
        document.getElementById('previewCompanyDate').textContent = formattedCompanyDate;
        document.getElementById('previewCompanyPlace').textContent = place;
        document.getElementById('previewWitness1Name').textContent = witness1Name;
        document.getElementById('previewWitness1Address').textContent = witness1Address;
        document.getElementById('previewWitness2Name').textContent = witness2Name;
        document.getElementById('previewWitness2Address').textContent = witness2Address;

        updateStepIndicator();
    }

    function formatDate(dateString) {
        const date = new Date(dateString);
        return date.toLocaleDateString('en-IN', { day: '2-digit', month: 'long', year: 'numeric' });
    }

    function formatDateComponents(dateString) {
        const date = new Date(dateString);
        return {
            day: date.getDate(),
            month: date.toLocaleDateString('en-IN', { month: 'long' }),
            year: date.getFullYear()
        };
    }

    function updateStepIndicator() {
        const steps = document.querySelectorAll('.step-dot');
        const requiredInputs = form.querySelectorAll('input[required]');
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

    // Initial preview
    updatePreview();
});
</script>
<!--End Js Section -->

@endsection
