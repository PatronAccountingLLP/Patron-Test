@extends('tools.tool-master')
@section('title')
{{_(' Limited Liability Partnership (LLP) Agreement
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
            <h1 class="hero-title"> <span> Limited Liability Partnership (LLP) Agreement
</span></h1>
            <p class="hero-subtitle">
                Generate a certified Limited Liability Partnership (LLP) Agreement
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
            <h2 class="form-title">Enter LLP Agreement Details</h2>
            <p class="form-description">
                Fill in the details below to generate a comprehensive Limited Liability Partnership Agreement.
            </p>
        </div>

        <form id="llpAgreementForm" method="POST" action="{{ route('br.llp.agreement') }}">
            @csrf

            <div class="form-grid">
                <!-- Agreement Date and Place -->
                <div class="form-row">
                    <div class="form-group">
                        <label class="form-label">Agreement Day <span class="required">*</span></label>
                        <input type="text" name="agreement_day" class="form-control" placeholder="Day" required>
                    </div>
                    <div class="form-group">
                        <label class="form-label">Agreement Month <span class="required">*</span></label>
                        <input type="text" name="agreement_month" class="form-control" placeholder="Month" required>
                    </div>
                    <div class="form-group">
                        <label class="form-label">Agreement Year <span class="required">*</span></label>
                        <input type="text" name="agreement_year" class="form-control" placeholder="Year" required>
                    </div>
                    <div class="form-group">
                        <label class="form-label">Place <span class="required">*</span></label>
                        <input type="text" name="place" class="form-control" placeholder="City" required>
                    </div>
                </div>

                <!-- Partner Details (up to 3 partners) -->
                <div class="form-group full-width">
                    <label class="form-label">Partner 1 Details</label>
                    <div class="partner-details">
                        <div class="form-row">
                            <div class="form-group"><input type="text" name="partner1_name" class="form-control" placeholder="Full Name" required></div>
                            <div class="form-group"><input type="text" name="partner1_father" class="form-control" placeholder="Father's Name" required></div>
                        </div>
                        <div class="form-row">
                            <div class="form-group"><input type="text" name="partner1_age" class="form-control" placeholder="Age" required></div>
                            <div class="form-group"><input type="text" name="partner1_address" class="form-control" placeholder="Residential Address" required></div>
                        </div>
                        <div class="form-row">
                            <div class="form-group"><input type="text" name="partner1_pan" class="form-control" placeholder="PAN" required></div>
                            <div class="form-group"><input type="text" name="partner1_dpin" class="form-control" placeholder="DPIN" required></div>
                        </div>
                        <div class="form-row">
                            <div class="form-group"><input type="text" name="partner1_capital" class="form-control" placeholder="Capital Contribution (₹)" required></div>
                            <div class="form-group"><input type="text" name="partner1_profit_share" class="form-control" placeholder="Profit Share %" required></div>
                        </div>
                    </div>
                </div>

                <div class="form-group full-width">
                    <label class="form-label">Partner 2 Details</label>
                    <div class="partner-details">
                        <div class="form-row">
                            <div class="form-group"><input type="text" name="partner2_name" class="form-control" placeholder="Full Name" required></div>
                            <div class="form-group"><input type="text" name="partner2_father" class="form-control" placeholder="Father's Name" required></div>
                        </div>
                        <div class="form-row">
                            <div class="form-group"><input type="text" name="partner2_age" class="form-control" placeholder="Age" required></div>
                            <div class="form-group"><input type="text" name="partner2_address" class="form-control" placeholder="Residential Address" required></div>
                        </div>
                        <div class="form-row">
                            <div class="form-group"><input type="text" name="partner2_pan" class="form-control" placeholder="PAN" required></div>
                            <div class="form-group"><input type="text" name="partner2_dpin" class="form-control" placeholder="DPIN" required></div>
                        </div>
                        <div class="form-row">
                            <div class="form-group"><input type="text" name="partner2_capital" class="form-control" placeholder="Capital Contribution (₹)" required></div>
                            <div class="form-group"><input type="text" name="partner2_profit_share" class="form-control" placeholder="Profit Share %" required></div>
                        </div>
                    </div>
                </div>

                <div class="form-group full-width">
                    <label class="form-label">Partner 3 Details (Optional)</label>
                    <div class="partner-details">
                        <div class="form-row">
                            <div class="form-group"><input type="text" name="partner3_name" class="form-control" placeholder="Full Name"></div>
                            <div class="form-group"><input type="text" name="partner3_father" class="form-control" placeholder="Father's Name"></div>
                        </div>
                        <div class="form-row">
                            <div class="form-group"><input type="text" name="partner3_age" class="form-control" placeholder="Age"></div>
                            <div class="form-group"><input type="text" name="partner3_address" class="form-control" placeholder="Residential Address"></div>
                        </div>
                        <div class="form-row">
                            <div class="form-group"><input type="text" name="partner3_pan" class="form-control" placeholder="PAN"></div>
                            <div class="form-group"><input type="text" name="partner3_dpin" class="form-control" placeholder="DPIN"></div>
                        </div>
                        <div class="form-row">
                            <div class="form-group"><input type="text" name="partner3_capital" class="form-control" placeholder="Capital Contribution (₹)"></div>
                            <div class="form-group"><input type="text" name="partner3_profit_share" class="form-control" placeholder="Profit Share %"></div>
                        </div>
                    </div>
                </div>

                <!-- LLP Details -->
                <div class="form-group full-width">
                    <label class="form-label">LLP Name <span class="required">*</span></label>
                    <input type="text" name="llp_name" class="form-control" placeholder="e.g., ABC LLP" required>
                </div>
                <div class="form-group full-width">
                    <label class="form-label">LLPIN <span class="required">*</span></label>
                    <input type="text" name="llpin" class="form-control" placeholder="e.g., AAA-1234" required>
                </div>
                <div class="form-group full-width">
                    <label class="form-label">Date of Incorporation <span class="required">*</span></label>
                    <input type="date" name="inc_date" class="form-control" required>
                </div>
                <div class="form-group full-width">
                    <label class="form-label">Registered Office Address <span class="required">*</span></label>
                    <textarea name="reg_office" class="form-control" placeholder="Full address with state and pin" required></textarea>
                </div>

                <!-- Business & Commencement -->
                <div class="form-group full-width">
                    <label class="form-label">Nature of Business <span class="required">*</span></label>
                    <textarea name="business_nature" class="form-control" placeholder="Describe main business activities" required></textarea>
                </div>
                <div class="form-group full-width">
                    <label class="form-label">Date of Commencement <span class="required">*</span></label>
                    <input type="date" name="commencement_date" class="form-control" required>
                </div>

                <!-- Designated Partners -->
                <div class="form-group full-width">
                    <label class="form-label">Designated Partners (Names and DPINs) <span class="required">*</span></label>
                    <textarea name="designated_partners" class="form-control" placeholder="e.g., Mr. A (DPIN: 123456), Mr. B (DPIN: 789012)" required></textarea>
                </div>

                <!-- Notice Period -->
                <div class="form-group full-width">
                    <label class="form-label">Notice Period for Retirement <span class="required">*</span></label>
                    <input type="text" name="notice_period" class="form-control" placeholder="e.g., three months" required>
                </div>

                <!-- Witnesses (Optional) -->
                <div class="form-row">
                    <div class="form-group">
                        <label class="form-label">Witness 1 Name</label>
                        <input type="text" name="witness1_name" class="form-control">
                    </div>
                    <div class="form-group">
                        <label class="form-label">Witness 1 Address</label>
                        <input type="text" name="witness1_address" class="form-control">
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group">
                        <label class="form-label">Witness 2 Name</label>
                        <input type="text" name="witness2_name" class="form-control">
                    </div>
                    <div class="form-group">
                        <label class="form-label">Witness 2 Address</label>
                        <input type="text" name="witness2_address" class="form-control">
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
                        <p class="preview-subtitle">Limited Liability Partnership Agreement</p>
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
                    <h2 class="certificate-doc-title">LIMITED LIABILITY PARTNERSHIP AGREEMENT</h2>
                </div>

                <div class="certificate-body">
                    <p class="certificate-paragraph">
                        This Limited Liability Partnership Agreement is made and executed on this <span id="previewDay">______</span> day of <span id="previewMonth">______</span>, <span id="previewYear">______</span> at <span id="previewPlace">______</span>.
                    </p>

                    <p class="certificate-paragraph"><strong>BETWEEN:</strong></p>
                    <p class="certificate-paragraph" id="partner1Block"></p>
                    <p class="certificate-paragraph" id="partner2Block"></p>
                    <p class="certificate-paragraph" id="partner3Block"></p>

                    <p class="certificate-paragraph"><strong>DETAILS OF THE LLP:</strong></p>
                    <p class="certificate-paragraph"><strong>Name of LLP:</strong> <span id="previewLLPName">________________</span> LLP</p>
                    <p class="certificate-paragraph"><strong>LLPIN:</strong> <span id="previewLLPIN">________________</span></p>
                    <p class="certificate-paragraph"><strong>Date of Incorporation:</strong> <span id="previewIncDate">________________</span></p>
                    <p class="certificate-paragraph"><strong>Registered Office:</strong> <span id="previewRegOffice">________________</span></p>

                    <p class="certificate-paragraph"><strong>WHEREAS:</strong></p>
                    <p class="certificate-paragraph">A. The parties hereto have agreed to carry on the business of <span id="previewBusinessNature">________________</span> and other allied activities as a Limited Liability Partnership under the name and style of '<span id="previewLLPName2">________________</span> LLP'.</p>
                    <p class="certificate-paragraph">B. The LLP was incorporated under the Limited Liability Partnership Act, 2008 on <span id="previewIncDate2">________________</span> and was allotted LLPIN <span id="previewLLPIN2">________________</span>.</p>
                    <p class="certificate-paragraph">C. The parties have agreed to reduce their mutual rights, duties, and obligations into writing in the form of this Agreement.</p>

                    <p class="certificate-paragraph"><strong>NOW THIS AGREEMENT WITNESSETH AS FOLLOWS:</strong></p>
                    <p class="certificate-paragraph">1. <strong>NAME OF THE LLP</strong><br>The name of the Limited Liability Partnership shall be '<span id="previewLLPName3">________________</span> LLP' and shall continue to be so called unless changed in accordance with the provisions of the LLP Act, 2008.</p>
                    <p class="certificate-paragraph">2. <strong>REGISTERED OFFICE</strong><br>The Registered Office of the LLP shall be situated at <span id="previewRegOffice2">________________</span>, or at such other place as may be decided by the Partners from time to time.</p>
                    <p class="certificate-paragraph">3. <strong>NATURE OF BUSINESS</strong><br>The LLP shall carry on the business of <span id="previewBusinessNature2">________________</span> and such other business activities as may be decided by the Partners from time to time, subject to applicable laws and regulations.</p>
                    <p class="certificate-paragraph">4. <strong>COMMENCEMENT AND DURATION</strong><br>The LLP shall be deemed to have commenced business from <span id="previewCommencementDate">________________</span> and shall continue until dissolved in accordance with the provisions of the LLP Act, 2008 and this Agreement.</p>
                    <p class="certificate-paragraph">5. <strong>CAPITAL CONTRIBUTION</strong><br>The initial capital contribution of the Partners shall be as follows:</p>
                    <p class="certificate-paragraph" id="capitalDetails"></p>
                    <p class="certificate-paragraph">The Partners may, by mutual consent, increase or decrease the capital contribution from time to time as may be required for the business of the LLP.</p>
                    <p class="certificate-paragraph">6. <strong>PROFIT AND LOSS SHARING RATIO</strong><br>The net profits or losses of the LLP shall be shared among the Partners in the following ratio:</p>
                    <p class="certificate-paragraph" id="profitShareDetails"></p>
                    <p class="certificate-paragraph">7. <strong>DESIGNATED PARTNERS</strong><br>The following Partners shall be the Designated Partners of the LLP and shall be responsible for compliance with the provisions of the LLP Act, 2008 and Rules made thereunder: <span id="previewDesignatedPartners">________________</span></p>
                    <p class="certificate-paragraph">8. <strong>MANAGEMENT AND DECISION MAKING</strong><br>The management and affairs of the LLP shall be conducted by the Designated Partners. All major decisions affecting the LLP shall be taken by mutual consent of all Partners. Day-to-day operational decisions may be taken by any Designated Partner.</p>
                    <p class="certificate-paragraph">9. <strong>ADMISSION, RETIREMENT, AND CESSATION OF PARTNERS</strong><br>A new Partner may be admitted with the consent of all existing Partners. A Partner may retire from the LLP by giving <span id="previewNoticePeriod">________________</span> notice in writing to the other Partners, subject to settlement of accounts and fulfillment of obligations.</p>
                    <p class="certificate-paragraph">10. <strong>WINDING UP</strong><br>The LLP may be wound up in accordance with the provisions of the LLP Act, 2008 and Rules made thereunder, upon the mutual consent of all Partners or as otherwise provided under law.</p>
                    <p class="certificate-paragraph">11. <strong>GENERAL PROVISIONS</strong><br>a) This Agreement shall be governed by and construed in accordance with the laws of India.<br>b) Any disputes arising out of or in connection with this Agreement shall be resolved through mutual discussion, failing which through arbitration in accordance with the Arbitration and Conciliation Act, 1996.<br>c) This Agreement may be amended only by written consent of all the Partners.</p>

                    <div class="certificate-signature">
                        <p><strong>PARTNERS:</strong></p>
                        <div id="signatureBlocks"></div>
                        <p><strong>WITNESSES:</strong></p>
                        <p id="witness1Block"></p>
                        <p id="witness2Block"></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<style>
.partner-details {
    margin-bottom: 16px;
    border: 1px solid #e0e0e0;
    padding: 12px;
    border-radius: 8px;
    background-color: #fafafa;
}
</style>


<div class="info-section">
    <div class="info-card">

        <!-- Header -->
        <div class="info-header">
            <span class="info-header-badge">Professional Format Guide</span>
            <h2 class="info-title">Limited Liability Partnership (LLP) Agreement</h2>
            <p class="info-subtitle">
                Standard LLP Agreement Format for Partnerships in India
            </p>
        </div>

        <!-- Introduction -->
        <div class="info-content">
            <h3 class="info-subheading">Introduction</h3>

            <p class="info-text">
                A Limited Liability Partnership (LLP) Agreement is the foundational legal document that governs the rights, duties, and obligations of partners in an LLP. Under the Limited Liability Partnership Act, 2008, every LLP incorporated in India is required to execute an LLP Agreement within thirty days of incorporation. This agreement serves as the constitution of the LLP, defining the relationship between the partners and the LLP, as well as among the partners themselves. In the absence of a formal agreement, the provisions of Schedule I to the LLP Act shall apply.
            </p>

            <p class="info-text">
                The LLP Agreement includes essential details such as the name and registered office of the LLP, LLPIN (LLP Identification Number), names and addresses of partners, their capital contributions, profit and loss sharing ratios, roles and responsibilities of designated partners, management structure, decision-making procedures, provisions for admission, retirement or cessation of partners, dispute resolution mechanisms, and winding up provisions. The agreement must be filed with the Registrar of Companies through Form 3 within the prescribed time, along with applicable stamp duty as per state regulations.
            </p>

            <!-- Benefits -->
            <h3 class="info-subheading">Benefits of Using a Standard Format</h3>

            <p class="info-text">
                Utilising a professionally drafted LLP Agreement format ensures that all statutory requirements under the LLP Act, 2008 are properly addressed. A comprehensive template saves valuable time, reduces the risk of omitting critical clauses, and provides a consistent framework for defining partnership terms.
            </p>

            <p class="info-text">
                Standardised formats help ensure smooth functioning of the LLP and minimise potential disputes among partners by clearly documenting all arrangements.
            </p>

            <!-- Relevance -->
            <h3 class="info-subheading">Relevance to LLP Registration and Compliance</h3>

            <p class="info-text">
                Following LLP Registration, executing and filing the LLP Agreement is one of the first mandatory compliances. The agreement must be filed through Form 3 on the MCA portal within thirty days of incorporation. If the LLP intends to carry on business activities attracting GST, obtaining GST Registration is essential, and the LLP Agreement may be required as supporting documentation during the GST registration process. Partners should ensure the agreement comprehensively covers all aspects of the partnership before execution.
            </p>
        </div>

        <!-- Sample Format -->
        <div class="format-section">
            <h3 class="format-title">LLP Agreement – Sample Format</h3>

            <p class="format-text"><strong>LIMITED LIABILITY PARTNERSHIP AGREEMENT</strong></p>
            <p class="format-text">
                This Limited Liability Partnership Agreement is made and executed on this ____________ day of ____________, 20____ at ____________ (Place).
            </p>

            <p class="format-text"><strong>BETWEEN:</strong></p>
            <p class="format-text">
                1. ________________________ (Name of First Partner), Son/Daughter of ________________________, aged ____ years, residing at ________________________ (Address), having PAN ________________________ and DPIN ________________________, hereinafter referred to as the "First Party" / "Designated Partner";
            </p>
            <p class="format-text">
                2. ________________________ (Name of Second Partner), Son/Daughter of ________________________, aged ____ years, residing at ________________________ (Address), having PAN ________________________ and DPIN ________________________, hereinafter referred to as the "Second Party" / "Designated Partner";
            </p>
            <p class="format-text">(Add similar details for additional partners, if any)</p>

            <p class="format-text"><strong>DETAILS OF THE LLP:</strong></p>
            <p class="format-text">Name of LLP: ________________________ LLP</p>
            <p class="format-text">LLPIN: ________________________</p>
            <p class="format-text">Date of Incorporation: ________________________</p>
            <p class="format-text">Registered Office: ________________________ (Address)</p>

            <p class="format-text"><strong>WHEREAS:</strong></p>
            <p class="format-text">
                A. The parties hereto have agreed to carry on the business of ________________________ (Nature of Business) and other allied activities as a Limited Liability Partnership under the name and style of '________________________ LLP'.
            </p>
            <p class="format-text">
                B. The LLP was incorporated under the Limited Liability Partnership Act, 2008 on ________________________ (Date of Incorporation) and was allotted LLPIN ________________________.
            </p>
            <p class="format-text">
                C. The parties have agreed to reduce their mutual rights, duties, and obligations into writing in the form of this Agreement.
            </p>

            <h4 class="format-subheading">Terms and Clauses</h4>
            <ol class="format-list">
                <li><strong>NAME OF THE LLP:</strong> The name of the Limited Liability Partnership shall be '________________________ LLP'.</li>
                <li><strong>REGISTERED OFFICE:</strong> The Registered Office of the LLP shall be situated at ________________________ (Full Address with State and Pin Code).</li>
                <li><strong>NATURE OF BUSINESS:</strong> The LLP shall carry on the business of ________________________ (Description of Main Business Activities).</li>
                <li><strong>COMMENCEMENT AND DURATION:</strong> The LLP shall commence business from ________________________ (Date) and shall continue until dissolved as per law.</li>
                <li><strong>CAPITAL CONTRIBUTION:</strong> Initial capital contributions shall be:
                    <ul>
                        <li>First Partner: Rs. ________________________/-</li>
                        <li>Second Partner: Rs. ________________________/-</li>
                        <li>Total Capital: Rs. ________________________/-</li>
                    </ul>
                </li>
                <li><strong>PROFIT AND LOSS SHARING RATIO:</strong> First Partner: ______%, Second Partner: ______%</li>
                <li><strong>DESIGNATED PARTNERS:</strong> List of Designated Partners responsible for statutory compliance.</li>
                <li><strong>MANAGEMENT AND DECISION MAKING:</strong> Day-to-day management by Designated Partners; major decisions by mutual consent.</li>
                <li><strong>ADMISSION, RETIREMENT, AND CESSATION OF PARTNERS:</strong> Admission with consent of all partners; retirement with ____________ notice.</li>
                <li><strong>WINDING UP:</strong> Winding up as per LLP Act, 2008 and Rules.</li>
                <li><strong>GENERAL PROVISIONS:</strong>
                    <ul>
                        <li>Governed by the laws of India.</li>
                        <li>Disputes resolved by mutual discussion, failing which arbitration.</li>
                        <li>Amendments only by written consent of all partners.</li>
                    </ul>
                </li>
            </ol>

            <p class="format-text"><strong>PARTNERS:</strong></p>
            <p class="format-text">
                1. First Partner<br>
                Signature: ________________________<br>
                Name: ________________________<br>
                DPIN: ________________________
            </p>
            <p class="format-text">
                2. Second Partner<br>
                Signature: ________________________<br>
                Name: ________________________<br>
                DPIN: ________________________
            </p>

            <p class="format-text"><strong>WITNESSES:</strong></p>
            <p class="format-text">
                1. Witness<br>
                Signature: ________________________<br>
                Name: ________________________<br>
                Address: ________________________
            </p>
        </div>

        <!-- FAQ -->
        <div class="faq-section">
            <h3 class="faq-title">Frequently Asked Questions</h3>

            <div class="faq-item">
                <h4 class="faq-question">1. Is it mandatory to have an LLP Agreement?</h4>
                <p class="faq-answer">
                    Yes, every LLP must have an LLP Agreement filed with the Registrar of Companies within thirty days of incorporation. Without it, Schedule I provisions apply by default.
                </p>
            </div>

            <div class="faq-item">
                <h4 class="faq-question">2. Can the LLP Agreement be amended?</h4>
                <p class="faq-answer">
                    Yes, amendments require mutual consent of all partners and must be filed through Form 3 within thirty days of the amendment, subject to stamp duty.
                </p>
            </div>

            <div class="faq-item">
                <h4 class="faq-question">3. Is there any due date to obtain an LLP Agreement?</h4>
                <p class="faq-answer">
                    The LLP Agreement must be filed within thirty days of incorporation. Delay attracts additional fees as per the LLP Act, 2008.
                </p>
            </div>

            <div class="faq-item">
                <h4 class="faq-question">4. What happens if the LLP Agreement is not filed?</h4>
                <p class="faq-answer">
                    Default provisions of Schedule I apply, which may not reflect the actual arrangement, and delay attracts additional fees and possible disputes.
                </p>
            </div>

        </div>

    </div>
</div>
    </div>
</div>


<!-- JavaScript -->
<script>
document.addEventListener('DOMContentLoaded', function () {
    const form = document.getElementById('llpAgreementForm');
    const downloadBtn = document.getElementById('downloadPdfBtn');

    // Set default dates
    const today = new Date();
    const dayInput = form.querySelector('[name="agreement_day"]');
    const monthInput = form.querySelector('[name="agreement_month"]');
    const yearInput = form.querySelector('[name="agreement_year"]');
    if (!dayInput.value) dayInput.value = today.getDate();
    if (!monthInput.value) monthInput.value = today.toLocaleString('default', { month: 'long' });
    if (!yearInput.value) yearInput.value = today.getFullYear();

    const incDateInput = form.querySelector('[name="inc_date"]');
    const commencementInput = form.querySelector('[name="commencement_date"]');
    if (incDateInput && !incDateInput.value) incDateInput.value = today.toISOString().slice(0,10);
    if (commencementInput && !commencementInput.value) commencementInput.value = today.toISOString().slice(0,10);

    // Input event listeners
    const inputs = form.querySelectorAll('input, textarea');
    inputs.forEach(input => input.addEventListener('input', updatePreview));

    function formatDate(dateString) {
        if (!dateString) return '________________';
        const date = new Date(dateString);
        return date.toLocaleDateString('en-IN', { day: '2-digit', month: 'long', year: 'numeric' });
    }

    function updatePreview() {
        // Basic agreement date and place
        const day = form.querySelector('[name="agreement_day"]').value || '______';
        const month = form.querySelector('[name="agreement_month"]').value || '______';
        const year = form.querySelector('[name="agreement_year"]').value || '______';
        const place = form.querySelector('[name="place"]').value || '________________';
        document.getElementById('previewDay').textContent = day;
        document.getElementById('previewMonth').textContent = month;
        document.getElementById('previewYear').textContent = year;
        document.getElementById('previewPlace').textContent = place;

        // Partner 1
        const p1Name = form.querySelector('[name="partner1_name"]').value || '________________';
        const p1Father = form.querySelector('[name="partner1_father"]').value || '________________';
        const p1Age = form.querySelector('[name="partner1_age"]').value || '____';
        const p1Address = form.querySelector('[name="partner1_address"]').value || '________________';
        const p1Pan = form.querySelector('[name="partner1_pan"]').value || '________________';
        const p1Dpin = form.querySelector('[name="partner1_dpin"]').value || '________________';
        const p1Capital = form.querySelector('[name="partner1_capital"]').value || '0';
        const p1Profit = form.querySelector('[name="partner1_profit_share"]').value || '0';

        const p1Block = `1. <strong>${p1Name}</strong>, Son/Daughter of <strong>${p1Father}</strong>, aged ${p1Age} years, residing at ${p1Address}, having PAN ${p1Pan} and DPIN ${p1Dpin}, hereinafter referred to as the "First Party" / "Designated Partner";`;
        document.getElementById('partner1Block').innerHTML = p1Block;

        // Partner 2
        const p2Name = form.querySelector('[name="partner2_name"]').value || '________________';
        const p2Father = form.querySelector('[name="partner2_father"]').value || '________________';
        const p2Age = form.querySelector('[name="partner2_age"]').value || '____';
        const p2Address = form.querySelector('[name="partner2_address"]').value || '________________';
        const p2Pan = form.querySelector('[name="partner2_pan"]').value || '________________';
        const p2Dpin = form.querySelector('[name="partner2_dpin"]').value || '________________';
        const p2Capital = form.querySelector('[name="partner2_capital"]').value || '0';
        const p2Profit = form.querySelector('[name="partner2_profit_share"]').value || '0';

        const p2Block = `2. <strong>${p2Name}</strong>, Son/Daughter of <strong>${p2Father}</strong>, aged ${p2Age} years, residing at ${p2Address}, having PAN ${p2Pan} and DPIN ${p2Dpin}, hereinafter referred to as the "Second Party" / "Designated Partner";`;
        document.getElementById('partner2Block').innerHTML = p2Block;

        // Partner 3 (optional)
        const p3Name = form.querySelector('[name="partner3_name"]').value;
        let p3Block = '';
        if (p3Name && p3Name.trim() !== '') {
            const p3Father = form.querySelector('[name="partner3_father"]').value || '________________';
            const p3Age = form.querySelector('[name="partner3_age"]').value || '____';
            const p3Address = form.querySelector('[name="partner3_address"]').value || '________________';
            const p3Pan = form.querySelector('[name="partner3_pan"]').value || '________________';
            const p3Dpin = form.querySelector('[name="partner3_dpin"]').value || '________________';
            const p3Capital = form.querySelector('[name="partner3_capital"]').value || '0';
            const p3Profit = form.querySelector('[name="partner3_profit_share"]').value || '0';
            p3Block = `3. <strong>${p3Name}</strong>, Son/Daughter of <strong>${p3Father}</strong>, aged ${p3Age} years, residing at ${p3Address}, having PAN ${p3Pan} and DPIN ${p3Dpin}, hereinafter referred to as the "Third Party" / "Partner";`;
        }
        document.getElementById('partner3Block').innerHTML = p3Block;

        // LLP details
        const llpName = form.querySelector('[name="llp_name"]').value || '________________';
        const llpin = form.querySelector('[name="llpin"]').value || '________________';
        const incDate = form.querySelector('[name="inc_date"]').value;
        const formattedIncDate = formatDate(incDate);
        const regOffice = form.querySelector('[name="reg_office"]').value || '________________';
        const businessNature = form.querySelector('[name="business_nature"]').value || '________________';
        const commencementDate = form.querySelector('[name="commencement_date"]').value;
        const formattedCommencement = formatDate(commencementDate);
        const designatedPartners = form.querySelector('[name="designated_partners"]').value || '________________';
        const noticePeriod = form.querySelector('[name="notice_period"]').value || '________________';

        document.getElementById('previewLLPName').textContent = llpName;
        document.getElementById('previewLLPIN').textContent = llpin;
        document.getElementById('previewIncDate').textContent = formattedIncDate;
        document.getElementById('previewRegOffice').textContent = regOffice;
        document.getElementById('previewLLPName2').textContent = llpName;
        document.getElementById('previewIncDate2').textContent = formattedIncDate;
        document.getElementById('previewLLPIN2').textContent = llpin;
        document.getElementById('previewLLPName3').textContent = llpName;
        document.getElementById('previewRegOffice2').textContent = regOffice;
        document.getElementById('previewBusinessNature').textContent = businessNature;
        document.getElementById('previewBusinessNature2').textContent = businessNature;
        document.getElementById('previewCommencementDate').textContent = formattedCommencement;
        document.getElementById('previewDesignatedPartners').textContent = designatedPartners;
        document.getElementById('previewNoticePeriod').textContent = noticePeriod;

        // Capital and profit share details
        let capitalHtml = `<strong>${p1Name}:</strong> Rs. ${p1Capital}/- (Rupees ${p1Capital} only)`;
        capitalHtml += `<br><strong>${p2Name}:</strong> Rs. ${p2Capital}/- (Rupees ${p2Capital} only)`;
        if (p3Name && p3Name.trim() !== '') {
            capitalHtml += `<br><strong>${p3Name}:</strong> Rs. ${p3Capital}/- (Rupees ${p3Capital} only)`;
        }
        const totalCapital = (parseFloat(p1Capital) + parseFloat(p2Capital) + (p3Name ? parseFloat(p3Capital) : 0)).toFixed(2);
        capitalHtml += `<br><strong>Total Capital:</strong> Rs. ${totalCapital}/- (Rupees ${totalCapital} only)`;
        document.getElementById('capitalDetails').innerHTML = capitalHtml;

        let profitHtml = `<strong>${p1Name}:</strong> ${p1Profit}%`;
        profitHtml += `<br><strong>${p2Name}:</strong> ${p2Profit}%`;
        if (p3Name && p3Name.trim() !== '') {
            profitHtml += `<br><strong>${p3Name}:</strong> ${p3Profit}%`;
        }
        document.getElementById('profitShareDetails').innerHTML = profitHtml;

        // Signatures
        let sigHtml = '';
        sigHtml += `<p><strong>1. ${p1Name}</strong><br>Signature: ________________________<br>DPIN: ${p1Dpin}</p>`;
        sigHtml += `<p><strong>2. ${p2Name}</strong><br>Signature: ________________________<br>DPIN: ${p2Dpin}</p>`;
        if (p3Name && p3Name.trim() !== '') {
            sigHtml += `<p><strong>3. ${p3Name}</strong><br>Signature: ________________________<br>DPIN: ${p3Dpin}</p>`;
        }
        document.getElementById('signatureBlocks').innerHTML = sigHtml;

        // Witnesses
        const w1Name = form.querySelector('[name="witness1_name"]').value;
        const w1Addr = form.querySelector('[name="witness1_address"]').value;
        const w2Name = form.querySelector('[name="witness2_name"]').value;
        const w2Addr = form.querySelector('[name="witness2_address"]').value;

        let w1Html = '';
        if (w1Name && w1Name.trim() !== '') {
            w1Html = `<strong>Witness 1:</strong> Signature: _________________ Name: ${w1Name} Address: ${w1Addr || '________________'}`;
        }
        let w2Html = '';
        if (w2Name && w2Name.trim() !== '') {
            w2Html = `<strong>Witness 2:</strong> Signature: _________________ Name: ${w2Name} Address: ${w2Addr || '________________'}`;
        }
        document.getElementById('witness1Block').innerHTML = w1Html;
        document.getElementById('witness2Block').innerHTML = w2Html;

        updateStepIndicator();
    }

    function updateStepIndicator() {
        const steps = document.querySelectorAll('.step-dot');
        const requiredInputs = form.querySelectorAll('input[required], textarea[required]');
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

    updatePreview();

    // Form submission
    form.addEventListener('submit', function(e) {
        e.preventDefault();
        const btn = document.getElementById('downloadPdfBtn');
        btn.querySelector('.btn-text').textContent = 'Generating Agreement...';
        btn.querySelector('.spinner').classList.remove('d-none');
        btn.disabled = true;
        this.submit();
    });
});
</script>
@endsection
