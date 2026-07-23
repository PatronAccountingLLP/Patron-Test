@extends('tools.tool-master')
@section('title')
{{_(' Affidavit for Closure of LLP')}}
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
            <h1 class="hero-title"> <span> Affidavit for Closure of LLP</span></h1>
            <p class="hero-subtitle">
                Generate a certified Affidavit for Closure of LLP in under 60 seconds.
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
            <h2 class="form-title">Enter LLP & Designated Partner Details</h2>
            <p class="form-description">
                Fill in the details below to generate an Affidavit for Closure of LLP.
            </p>
        </div>

        <form id="llpClosureAffidavitForm" method="POST" action="{{route('br.llp.closure.affidavit') }}">
            @csrf

            <div class="form-grid">
                <!-- Designated Partner Details -->
                <div class="form-group full-width">
                    <h3 class="section-title">Designated Partner Details</h3>
                </div>
                <div class="form-group full-width">
                    <label class="form-label">Name of Designated Partner <span class="required">*</span></label>
                    <input type="text" name="designated_partner_name" class="form-control" placeholder="Enter designated partner name" required>
                </div>
                <div class="form-row">
                    <div class="form-group">
                        <label class="form-label">DPIN/DIN <span class="required">*</span></label>
                        <input type="text" name="dpin_din" class="form-control" placeholder="Enter DPIN or DIN" required>
                    </div>
                    <div class="form-group">
                        <label class="form-label">Designation <span class="required">*</span></label>
                        <div class="select-wrapper">
                            <select name="designation" class="form-control form-select" required>
                                <option value="">Select designation</option>
                                <option value="Designated Partner">Designated Partner</option>
                                <option value="Managing Partner">Managing Partner</option>
                                <option value="Partner">Partner</option>
                            </select>
                        </div>
                    </div>
                </div>

                <!-- LLP Details -->
                <div class="form-group full-width">
                    <h3 class="section-title">LLP Details</h3>
                </div>
                <div class="form-group full-width">
                    <label class="form-label">Name of LLP <span class="required">*</span></label>
                    <input type="text" name="llp_name" class="form-control" placeholder="Enter LLP name" required>
                </div>
                <div class="form-group full-width">
                    <label class="form-label">LLPIN <span class="required">*</span></label>
                    <input type="text" name="llpin" class="form-control" placeholder="Enter LLPIN" required>
                </div>
                <div class="form-group full-width">
                    <label class="form-label">Registered Office Address <span class="required">*</span></label>
                    <textarea name="register_address" class="form-control" placeholder="Enter registered office address" required></textarea>
                </div>

                <!-- Inactivity Details -->
                <div class="form-group full-width">
                    <h3 class="section-title">Inactivity Details</h3>
                </div>
                <div class="form-group full-width">
                    <label class="form-label">Date of Inactivity <span class="required">*</span></label>
                    <div class="radio-group">
                        <div class="radio-option">
                            <input type="radio" id="date_of_incorporation" name="inactivity_date_type" value="incorporation" checked>
                            <label for="date_of_incorporation">Date of Incorporation</label>
                        </div>
                        <div class="radio-option">
                            <input type="radio" id="date_of_last_activity" name="inactivity_date_type" value="last_activity">
                            <label for="date_of_last_activity">Date of Last Activity</label>
                        </div>
                    </div>
                </div>
                <div class="form-group full-width">
                    <label class="form-label">Specific Date (if applicable)</label>
                    <input type="date" name="specific_inactivity_date" class="form-control" placeholder="Select specific date">
                </div>

                <!-- Partners' Contribution -->
                <div class="form-group full-width">
                    <h3 class="section-title">Financial Details</h3>
                </div>
                <div class="form-group full-width">
                    <label class="form-label">Residual Partners' Contribution Amount <span class="required">*</span></label>
                    <input type="text" name="residual_amount" class="form-control" placeholder="Enter amount" required>
                </div>

                <!-- Place and Date for Affidavit -->
                <div class="form-row">
                    <div class="form-group">
                        <label class="form-label">Place of Affidavit <span class="required">*</span></label>
                        <input type="text" name="affidavit_place" class="form-control" placeholder="City / Place" required>
                    </div>
                    <div class="form-group">
                        <label class="form-label">Date of Affidavit <span class="required">*</span></label>
                        <input type="date" name="affidavit_date" class="form-control" required>
                    </div>
                </div>

                <!-- Notary Details (for information) -->
                <div class="form-group full-width">
                    <h3 class="section-title">Notary Information</h3>
                    <p class="form-description" style="font-size: 12px; color: #666; margin-bottom: 10px;">
                        Note: This affidavit must be executed on appropriate stamp paper and sworn before a Notary Public or Oath Commissioner.
                    </p>
                </div>
            </div>

            <button type="submit" class="btn-submit" id="downloadPdfBtn">
                <span class="btn-text">Generate & Download Affidavit</span>
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
                        <p class="preview-subtitle">Affidavit for Closure of LLP</p>
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
                    <h2 class="certificate-doc-title">AFFIDAVIT</h2>
                </div>

                <div class="certificate-body" style="font-family: 'Times New Roman', serif;">
                    <p class="certificate-paragraph" style="text-align: center; margin-bottom: 30px;">
                        <strong>AFFIDAVIT</strong>
                    </p>

                    <p class="certificate-paragraph">
                        I, <strong id="prevPartnerName">________________</strong> (Name of Designated Partner), holding DPIN/DIN: 
                        <strong id="prevDPINDIN">________________</strong>, <strong id="prevDesignation">Designated Partner</strong> of 
                        <strong id="prevLLPName">________________</strong> (Name of LLP), bearing LLPIN: 
                        <strong id="prevLLPIN">________________</strong> ("the LLP"), registered under the Limited Liability Partnership Act, 2008, having its registered office at 
                        <strong id="prevAddress">________________</strong>
                    </p>

                    <p class="certificate-paragraph" style="text-align: center; margin: 20px 0;">
                        <strong>do solemnly affirm and state as under:</strong>
                    </p>

                    <ol class="certificate-list" style="padding-left: 20px; margin-bottom: 20px;">
                        <li style="margin-bottom: 10px;">
                            That the LLP has been inactive and no business or commercial activities have been carried out in the name of the LLP since 
                            <strong id="prevInactivityDate">__________</strong> (Date of Incorporation or Date of Last Activity). The LLP does not intend to carry on any business or commercial activity in the future.
                        </li>
                        <li style="margin-bottom: 10px;">
                            That the LLP has no creditors as on the date of this affidavit.
                        </li>
                        <li style="margin-bottom: 10px;">
                            That the LLP does not have any assets and liabilities as on date, except for the residual amount of partners' contribution remaining after meeting ROC fees and compliance expenses, which is approximately Rs. 
                            <strong id="prevResidualAmount">__________</strong>.
                        </li>
                        <li style="margin-bottom: 10px;">
                            That as on date, the LLP does not have any outstanding dues towards Income Tax, Goods and Services Tax, Central Excise, Customs, Banks, Financial Institutions, or any other Central Government, State Government, or local authority.
                        </li>
                        <li style="margin-bottom: 10px;">
                            That no litigation has ever existed or is pending against or involving the LLP as on date.
                        </li>
                        <li style="margin-bottom: 10px;">
                            That in case of any loss, valid claim, or liability arising from any person after the striking off of the name of the LLP from the Register of LLPs, we, the Designated Partners, undertake to indemnify such person for such losses, claims, and liabilities.
                        </li>
                    </ol>

                    <p class="certificate-paragraph">
                        I solemnly state that the contents of this affidavit are true and correct to the best of my knowledge and belief, that it conceals nothing material, and that no part of it is false.
                    </p>

                    <div class="certificate-signature" style="margin-top: 40px;">
                        <p class="signature-label">___________________________</p>
                        <p class="signature-label">(Deponent / Designated Partner)</p>
                        <p class="signature-label">Date: <strong id="prevAffidavitDate">________________</strong></p>
                        <p class="signature-label">Place: <strong id="prevAffidavitPlace">________________</strong></p>
                    </div>

                    <div class="certificate-footer" style="margin-top: 40px; border-top: 1px solid #ddd; padding-top: 20px;">
                        <p class="certificate-paragraph" style="text-align: center; margin-bottom: 20px;">
                            <strong>VERIFICATION</strong>
                        </p>
                        <p class="certificate-paragraph">
                            I, the above-named deponent, do hereby verify that the contents of this affidavit are true and correct to the best of my knowledge and belief, and nothing material has been concealed therefrom.
                        </p>
                        <div class="certificate-signature" style="margin-top: 20px;">
                            <p class="signature-label">___________________________</p>
                            <p class="signature-label">(Deponent / Designated Partner)</p>
                        </div>
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
            <h2 class="info-title">Affidavit for Closure of LLP</h2>
            <p class="info-subtitle">
                Professional Format Guide for LLP Strike Off Compliance
            </p>
        </div>

        <!-- Introduction -->
        <div class="info-content">
            <h3 class="info-subheading">Introduction</h3>

            <p class="info-text">
                An Affidavit for Closure of LLP is a sworn statement executed by the Designated
                Partners of a Limited Liability Partnership declaring that the LLP has remained
                inactive since its incorporation or a specified date and that no business or
                commercial activities have been carried out in its name.
            </p>

            <p class="info-text">
                This affidavit is a mandatory document required while applying for strike off of
                the LLP from the Register of LLPs maintained by the Registrar of Companies. It
                accompanies LLP Form 24 and confirms the absence of creditors, liabilities, pending
                litigation, and statutory dues. The affidavit must be executed on appropriate stamp
                paper and notarised.
            </p>

            <!-- Benefits -->
            <h3 class="info-subheading">Benefits of Using a Standard Format</h3>

            <p class="info-text">
                Using a professionally drafted affidavit format ensures that all statutory
                declarations are accurately captured in line with regulatory requirements. A
                ready-to-use template reduces the risk of omissions or incorrect statements that
                could delay or lead to rejection of the strike off application.
            </p>

            <p class="info-text">
                Standardised formats also enable faster verification by the Registrar and support
                smooth processing of LLP closure applications.
            </p>

            <!-- Relevance -->
            <h3 class="info-subheading">Relevance to LLP Compliance</h3>

            <p class="info-text">
                Closure of an LLP marks the end of its statutory compliance obligations. Prior to
                filing for strike off, all annual filings should be completed and outstanding fees
                paid. The affidavit forms part of a comprehensive closure documentation set along
                with the Indemnity Bond, Statement of Accounts, Income Tax Return acknowledgements,
                and Authorisation Letter.
            </p>

            <p class="info-text">
                Proper closure documentation is important for partners who may later wish to
                incorporate a new LLP or company.
            </p>
        </div>

        <!-- Sample Format -->
        <div class="format-section">
            <h3 class="format-title">
                Affidavit for Closure of LLP – Sample Format
            </h3>

            <p class="format-text"><strong>AFFIDAVIT</strong></p>

            <p class="format-text">
                I, ________________________________ (Name of Designated Partner), holding
                DPIN/DIN: ________________________________, Designated Partner of
                ________________________________ (Name of LLP), bearing LLPIN:
                ________________________________, registered under the Limited Liability
                Partnership Act, 2008, having its registered office at
                ________________________________, do solemnly affirm and state as under:
            </p>

            <p class="format-text">
                1. That the LLP has been inactive and no business or commercial activities have
                been carried out in the name of the LLP since __________ (Date of Incorporation
                or Date of Last Activity). The LLP does not intend to carry on any business in
                the future.
            </p>

            <p class="format-text">
                2. That the LLP has no creditors as on the date of this affidavit.
            </p>

            <p class="format-text">
                3. That the LLP does not have any assets or liabilities as on date, except for
                the residual amount of partners’ contribution remaining after meeting ROC fees
                and compliance expenses.
            </p>

            <p class="format-text">
                4. That the LLP does not have any outstanding dues towards Income Tax, GST,
                Central Excise, Customs, Banks, Financial Institutions, or any other Central or
                State Government authority.
            </p>

            <p class="format-text">
                5. That no litigation has ever existed or is pending against or involving the
                LLP.
            </p>

            <p class="format-text">
                6. That in case of any loss, valid claim, or liability arising after the
                striking off of the LLP, we, the Designated Partners, undertake to indemnify
                the affected person(s).
            </p>

            <p class="format-text">
                I solemnly state that the contents of this affidavit are true and correct to
                the best of my knowledge and belief and nothing material has been concealed.
            </p>

            <p class="format-text">
                ________________________________ <br>
                (Deponent / Designated Partner)
            </p>

            <p class="format-text"><strong>Date:</strong> ________________________________</p>
            <p class="format-text"><strong>Place:</strong> ________________________________</p>

            <p class="format-text"><strong>VERIFICATION</strong></p>

            <p class="format-text">
                I, the above-named deponent, do hereby verify that the contents of this affidavit
                are true and correct to the best of my knowledge and belief and nothing material
                has been concealed therefrom.
            </p>

            <p class="format-text">
                ________________________________ <br>
                (Deponent / Designated Partner)
            </p>
        </div>

        <!-- FAQ -->
        <div class="faq-section">
            <h3 class="faq-title">Frequently Asked Questions</h3>

            <div class="faq-item">
                <h4 class="faq-question">
                    1. Why is the affidavit for closure of LLP prepared?
                </h4>
                <p class="faq-answer">
                    It is prepared to formally declare that the LLP has remained inactive and
                    has no creditors, liabilities, pending litigation, or statutory dues. The
                    affidavit is mandatory for filing LLP Form 24 for voluntary strike off.
                </p>
            </div>

            <div class="faq-item">
                <h4 class="faq-question">
                    2. What is the format for preparation of affidavit for closure of LLP?
                </h4>
                <p class="faq-answer">
                    The affidavit must be executed on non-judicial stamp paper of appropriate
                    value, include details of the Designated Partner and LLP, and be sworn
                    before a Notary Public or Oath Commissioner.
                </p>
            </div>

            <div class="faq-item">
                <h4 class="faq-question">
                    3. What documents are required with LLP Form 24?
                </h4>
                <p class="faq-answer">
                    Documents include the Affidavit, Indemnity Bond, Statement of Accounts,
                    Income Tax Return acknowledgements, and Authorisation Letter signed by all
                    partners.
                </p>
            </div>

            <div class="faq-item">
                <h4 class="faq-question">
                    4. Where can ROC resolution formats be downloaded?
                </h4>
                <p class="faq-answer">
                    Resolution formats are available through professional compliance service
                    providers and platforms offering updated documents compliant with current
                    laws.
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
    const form = document.getElementById('llpClosureAffidavitForm');
    const downloadPdfBtn = document.getElementById('downloadPdfBtn');
    const specificDateInput = form.querySelector('[name="specific_inactivity_date"]');
    
    // Set default dates
    const today = new Date().toISOString().split('T')[0];
    const affidavitDateInput = form.querySelector('[name="affidavit_date"]');
    
    if (affidavitDateInput) {
        affidavitDateInput.value = today;
    }

    // Handle radio button change for inactivity date
    const radioButtons = form.querySelectorAll('input[name="inactivity_date_type"]');
    radioButtons.forEach(radio => {
        radio.addEventListener('change', function() {
            if (this.value === 'last_activity') {
                specificDateInput.required = true;
            } else {
                specificDateInput.required = false;
            }
            updatePreview();
        });
    });

    // Inputs for live preview
    const inputs = form.querySelectorAll('input, textarea, select');
    inputs.forEach(input => {
        input.addEventListener('input', updatePreview);
        input.addEventListener('change', updatePreview);
    });

    // Initial preview
    updatePreview();

    function updatePreview() {
        // Designated Partner Details
        const partnerName = form.querySelector('[name="designated_partner_name"]').value || '________________';
        const dpinDin = form.querySelector('[name="dpin_din"]').value || '________________';
        const designation = form.querySelector('[name="designation"]').value || 'Designated Partner';
        
        // LLP Details
        const llpName = form.querySelector('[name="llp_name"]').value || '________________';
        const llpin = form.querySelector('[name="llpin"]').value || '________________';
        const officeAddress = form.querySelector('[name="register_address"]').value || '________________';
        
        // Inactivity Details
        const inactivityDateType = form.querySelector('input[name="inactivity_date_type"]:checked').value;
        const specificDate = form.querySelector('[name="specific_inactivity_date"]').value;
        
        // Financial Details
        const residualAmount = form.querySelector('[name="residual_amount"]').value || '__________';
        
        // Affidavit Details
        const affidavitPlace = form.querySelector('[name="affidavit_place"]').value || '________________';
        const affidavitDate = form.querySelector('[name="affidavit_date"]').value;

        // Update preview elements
        document.getElementById('prevPartnerName').textContent = partnerName;
        document.getElementById('prevDPINDIN').textContent = dpinDin;
        document.getElementById('prevDesignation').textContent = designation;
        document.getElementById('prevLLPName').textContent = llpName;
        document.getElementById('prevLLPIN').textContent = llpin;
        document.getElementById('prevAddress').textContent = officeAddress;
        
        // Format and update inactivity date
        let inactivityDateText = '';
        if (inactivityDateType === 'incorporation') {
            inactivityDateText = 'Date of Incorporation';
        } else if (inactivityDateType === 'last_activity' && specificDate) {
            const formattedSpecificDate = new Date(specificDate).toLocaleDateString('en-IN', {
                day: '2-digit',
                month: 'long',
                year: 'numeric'
            });
            inactivityDateText = formattedSpecificDate;
        } else if (inactivityDateType === 'last_activity') {
            inactivityDateText = 'Date of Last Activity';
        }
        document.getElementById('prevInactivityDate').textContent = inactivityDateText;
        
        // Financial details
        document.getElementById('prevResidualAmount').textContent = residualAmount;
        
        // Affidavit details
        document.getElementById('prevAffidavitPlace').textContent = affidavitPlace;

        if (affidavitDate) {
            const formattedAffidavitDate = new Date(affidavitDate).toLocaleDateString('en-IN', {
                day: '2-digit',
                month: 'long',
                year: 'numeric'
            });
            document.getElementById('prevAffidavitDate').textContent = formattedAffidavitDate;
        } else {
            document.getElementById('prevAffidavitDate').textContent = '________________';
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
