@extends('tools.tool-master')
@section('title')
{{_('Board Resolution for  Increase in Authorised Share Capital')}}
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
            <h1 class="hero-title"> Board Resolution for  <span> Increase in Authorised Share Capital</span></h1>
            <p class="hero-subtitle">
                Generate a certified Board Resolution for  Increase in Authorised Share Capital in under 60 seconds.
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
            <h2 class="form-title">Enter Company & Share Capital Details</h2>
            <p class="form-description">
                Fill in the details below to generate a Board Resolution for Increase in Authorised Share Capital.
            </p>
        </div>

        <form id="increaseCapitalForm" method="POST" action="{{route('br.authorised.capital.increase') }}">
            @csrf

            <div class="form-grid">
                <!-- Company Details Section -->
                <div class="form-group full-width">
                    <label class="form-label" style="font-weight:600;color:#333;border-bottom:1px solid #eee;padding-bottom:8px;margin-bottom:12px;">Company Details</label>
                </div>

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

                <!-- Existing Authorised Share Capital Section -->
                <div class="form-group full-width">
                    <label class="form-label" style="font-weight:600;color:#333;border-bottom:1px solid #eee;padding-bottom:8px;margin-bottom:12px;">Existing Authorised Share Capital</label>
                </div>

                <div class="form-row">
                    <div class="form-group">
                        <label class="form-label">Existing Capital Amount (Rs.) <span class="required">*</span></label>
                        <input type="text" name="existing_capital_amount" class="form-control" placeholder="e.g., 10,00,000" required>
                    </div>

                    <div class="form-group">
                        <label class="form-label">Amount in Words <span class="required">*</span></label>
                        <input type="text" name="existing_capital_words" class="form-control" placeholder="e.g., Ten Lakhs" required>
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-group">
                        <label class="form-label">Number of Existing Shares <span class="required">*</span></label>
                        <input type="text" name="existing_shares_number" class="form-control" placeholder="e.g., 1,00,000" required>
                    </div>

                    <div class="form-group">
                        <label class="form-label">Number in Words <span class="required">*</span></label>
                        <input type="text" name="existing_shares_words" class="form-control" placeholder="e.g., One Lakh" required>
                    </div>
                </div>

                <div class="form-group full-width">
                    <label class="form-label">Face Value per Share (Rs.) <span class="required">*</span></label>
                    <input type="text" name="face_value" class="form-control" placeholder="e.g., 10" required>
                </div>

                <!-- Proposed Authorised Share Capital Section -->
                <div class="form-group full-width">
                    <label class="form-label" style="font-weight:600;color:#333;border-bottom:1px solid #eee;padding-bottom:8px;margin-bottom:12px;">Proposed Authorised Share Capital</label>
                </div>

                <div class="form-row">
                    <div class="form-group">
                        <label class="form-label">Proposed Capital Amount (Rs.) <span class="required">*</span></label>
                        <input type="text" name="proposed_capital_amount" class="form-control" placeholder="e.g., 50,00,000" required>
                    </div>

                    <div class="form-group">
                        <label class="form-label">Amount in Words <span class="required">*</span></label>
                        <input type="text" name="proposed_capital_words" class="form-control" placeholder="e.g., Fifty Lakhs" required>
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-group">
                        <label class="form-label">Number of Proposed Shares <span class="required">*</span></label>
                        <input type="text" name="proposed_shares_number" class="form-control" placeholder="e.g., 5,00,000" required>
                    </div>

                    <div class="form-group">
                        <label class="form-label">Number in Words <span class="required">*</span></label>
                        <input type="text" name="proposed_shares_words" class="form-control" placeholder="e.g., Five Lakhs" required>
                    </div>
                </div>

                <!-- Additional Shares Section -->
                <div class="form-group full-width">
                    <label class="form-label" style="font-weight:600;color:#333;border-bottom:1px solid #eee;padding-bottom:8px;margin-bottom:12px;">Additional Shares to be Created</label>
                </div>

                <div class="form-row">
                    <div class="form-group">
                        <label class="form-label">Number of Additional Shares <span class="required">*</span></label>
                        <input type="text" name="additional_shares_number" class="form-control" placeholder="e.g., 4,00,000" required>
                    </div>

                    <div class="form-group">
                        <label class="form-label">Number in Words <span class="required">*</span></label>
                        <input type="text" name="additional_shares_words" class="form-control" placeholder="e.g., Four Lakhs" required>
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
                        <p class="preview-subtitle">Board Resolution for Increase in Authorised Share Capital</p>
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
                        <strong>SUBJECT:</strong> Increase in Authorised Share Capital of the Company
                    </p>

                    <p class="certificate-paragraph">
                        <strong>RESOLVED THAT</strong> the Authorised Share Capital be increased from Rs. <strong id="prevExistingCapital">________</strong>/- to Rs. <strong id="prevProposedCapital">________</strong>/- by creation of additional <strong id="prevAdditionalShares">________</strong> Equity Shares of Rs. <strong id="prevFaceValue">____</strong>/- each.
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
                        <span class="footer-item-label">Director</span>
                        <span class="footer-item-value" id="footerDirectorName">________________</span>
                    </div>
                    <div class="footer-item">
                        <span class="footer-item-label">DIN</span>
                        <span class="footer-item-value" id="footerDIN">________________</span>
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
            <h2 class="info-title">Board Resolution for Increase in Authorised Share Capital</h2>
            <p class="info-subtitle">
                Corporate Finance Documentation for Indian Companies
            </p>
        </div>

        <!-- Introduction -->
        <div class="info-content">
            <h3 class="info-subheading">Introduction</h3>

            <p class="info-text">
                A Board Resolution for Increase in Authorised Share Capital is a formal corporate
                document that records the Board of Directors' decision to increase the company's
                authorised share capital. Under the Companies Act, 2013, when a company proposes to
                increase its authorised share capital, prior board approval must be obtained before
                seeking approval from the members in a general meeting. The authorised share capital
                represents the maximum amount of share capital that a company is authorised to issue
                to shareholders as stated in its Memorandum of Association.
            </p>

            <p class="info-text">
                Companies may need to increase their authorised share capital for various reasons
                including raising additional funds through fresh issue of shares, accommodating new
                investors, facilitating business expansion, or complying with statutory requirements.
                The board resolution specifies the existing authorised share capital, the proposed
                increased authorised share capital, the number of additional shares to be created,
                and the consequential amendment to the capital clause (Clause V) of the Memorandum
                of Association. This resolution is subject to shareholder approval and must be filed
                with the Registrar of Companies.
            </p>

            <!-- Benefits -->
            <h3 class="info-subheading">Benefits of Using a Standard Format</h3>

            <p class="info-text">
                Utilising a professionally drafted board resolution format ensures that all statutory
                requirements under the Companies Act, 2013 and the Companies (Share Capital and
                Debentures) Rules, 2014 are properly addressed. A ready-to-use template saves
                valuable time during board meetings, reduces the risk of procedural errors, and
                provides a consistent framework for documenting the Board's decision on capital
                restructuring.
            </p>

            <p class="info-text">
                Standardised formats facilitate smoother ROC filings.
            </p>

            <!-- Relevance -->
            <h3 class="info-subheading">Relevance to Corporate Compliance</h3>

            <p class="info-text">
                Increase in authorised share capital is a significant corporate restructuring
                activity. Following Company Registration, businesses may need to enhance their
                capital base to fund growth, accommodate new shareholders, or meet regulatory
                requirements. After the board resolution is passed, an ordinary resolution or
                special resolution (as applicable) must be passed at the general meeting.
            </p>

            <p class="info-text">
                Form SH-7 must be filed with the ROC within thirty days of the general meeting
                along with prescribed fees and stamp duty on increased capital. Companies should
                also ensure compliance with any applicable GST Registration requirements if the
                capital increase affects business operations.
            </p>
        </div>

        <!-- Sample Format -->
        <div class="format-section">
            <h3 class="format-title">
                Board Resolution for Increase in Authorised Share Capital – Sample Format
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
                <strong>SUBJECT: INCREASE IN AUTHORISED SHARE CAPITAL OF THE COMPANY</strong>
            </p>

            <p class="format-text">
                The Chairman informed the Board that in view of the company's business expansion plans and requirement to raise additional funds, it is proposed to increase the Authorised Share Capital of the Company. The Board discussed the matter in detail and passed the following resolutions:
            </p>

            <p class="format-text">
                <strong>"RESOLVED THAT</strong> pursuant to the provisions of Section 13(1) read with Section 61 and Section 64 of the Companies Act, 2013 (including any statutory modification or re-enactment thereof for the time being in force) and the rules framed thereunder, and subject to the approval of members of the Company in General Meeting and subject to such other approvals as may be required, the Board of Directors hereby approves the proposal to increase the Authorised Share Capital of the Company from:
            </p>

            <p class="format-text">
                <strong>Existing Authorised Share Capital:</strong>
            </p>

            <p class="format-text">
                Rs. ________________________/- (Rupees ________________________ Only) divided into ________________________ (________________________) Equity Shares of Rs. ________________________/- each
            </p>

            <p class="format-text">
                <strong>To:</strong>
            </p>

            <p class="format-text">
                <strong>Proposed Authorised Share Capital:</strong>
            </p>

            <p class="format-text">
                Rs. ________________________/- (Rupees ________________________ Only) divided into ________________________ (________________________) Equity Shares of Rs. ________________________/- each
            </p>

            <p class="format-text">
                by creation of additional ________________________ (________________________) Equity Shares of Rs. ________________________/- each, ranking pari passu in all respects with the existing Equity Shares of the Company.
            </p>

            <p class="format-text">
                <strong>RESOLVED FURTHER THAT</strong> pursuant to the provisions of Section 13, 61 and 64 of the Companies Act, 2013 (including any statutory modification or re-enactment thereof for the time being in force) and the rules framed thereunder, and subject to the approval of members of the Company in General Meeting, the existing Clause V (Capital Clause) of the Memorandum of Association of the Company be and is hereby substituted with the following new Clause V:
            </p>

            <p class="format-text">
                "Clause V: The Authorised Share Capital of the Company is Rs. ________________________/- (Rupees ________________________ Only) divided into ________________________ (________________________) Equity Shares of Rs. ________________________/- each."
            </p>

            <p class="format-text">
                <strong>RESOLVED FURTHER THAT</strong> the above resolutions are subject to the approval of the members of the Company in General Meeting by way of Ordinary Resolution / Special Resolution, as may be required.
            </p>

            <p class="format-text">
                <strong>RESOLVED FURTHER THAT</strong> any Director of the Company be and is hereby authorised to:
            </p>

            <ul class="format-list">
                <li>Convene General Meeting of the members to seek approval for the proposed increase in Authorised Share Capital;</li>
                <li>File Form SH-7 and other requisite forms with the Registrar of Companies within the prescribed time;</li>
                <li>Pay the prescribed fees and stamp duty on the increased Authorised Share Capital;</li>
                <li>Execute and file the amended Memorandum of Association with the ROC;</li>
                <li>Do all such acts, deeds, matters, and things as may be necessary, proper, or expedient for giving effect to this resolution."</li>
            </ul>

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
        </div>

        <!-- FAQ -->
        <div class="faq-section">
            <h3 class="faq-title">Frequently Asked Questions</h3>

            <div class="faq-item">
                <h4 class="faq-question">
                    1. Are details mentioned in the board resolution format for increase in authorised share capital the same as the special resolution format of members?
                </h4>
                <p class="faq-answer">
                    Yes, the core details such as existing authorised share capital, proposed
                    authorised share capital, number of additional shares to be created, and the
                    amended Clause V of the Memorandum of Association remain substantially similar
                    in both documents. The primary difference is that the board resolution records
                    the Board's approval, while the special resolution records approval by
                    shareholders at a general meeting with the requisite majority.
                </p>
            </div>

            <div class="faq-item">
                <h4 class="faq-question">
                    2. Is the signature of all directors mandatory on the Board resolution format for increase in authorised share capital?
                </h4>
                <p class="faq-answer">
                    No, signatures of all directors are not mandatory. The resolution is passed by a
                    majority of directors present and voting at a duly convened board meeting where
                    quorum is present. The certified true copy may be signed by a single authorised
                    director or the company secretary. The minutes record which directors were
                    present and the voting details.
                </p>
            </div>

            <div class="faq-item">
                <h4 class="faq-question">
                    3. Should the Board resolution for increase in authorised share capital be on company letterhead?
                </h4>
                <p class="faq-answer">
                    While there is no strict statutory requirement mandating the use of company
                    letterhead, it is standard corporate practice to prepare board resolutions on
                    the company's official letterhead. Using letterhead enhances authenticity,
                    provides verification of the document's origin, and is generally expected by
                    banks, financial institutions, and the Registrar of Companies for official
                    filings.
                </p>
            </div>

            <div class="faq-item">
                <h4 class="faq-question">
                    4. Does the Board Resolution format for increase in authorised share capital need to be certified by a professional?
                </h4>
                <p class="faq-answer">
                    There is no statutory requirement for the board resolution to be certified by an
                    external professional. The certified true copy may be signed by any director or
                    the company secretary. However, for filing Form SH-7 with the ROC, certification
                    by a practising Chartered Accountant, Company Secretary, or Cost Accountant may
                    be required as per form-specific requirements.
                </p>
            </div>

            <div class="faq-item">
                <h4 class="faq-question">
                    5. Is the board resolution format for increase in authorised share capital mandatory to be attached to the MCA form?
                </h4>
                <p class="faq-answer">
                    Yes, a certified copy of the board resolution is typically required as an
                    attachment when filing Form SH-7 (Notice to Registrar of any alteration of share
                    capital) with the Ministry of Corporate Affairs. Along with the board resolution,
                    other documents such as the special/ordinary resolution passed by members,
                    altered MOA, and proof of stamp duty payment must be submitted as part of the
                    filing.
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

    const form = document.getElementById('increaseCapitalForm');
    const downloadPdfBtn = document.getElementById('downloadPdfBtn');
    const alertContainer = document.getElementById('alertContainer');

    // Set default date
    const today = new Date().toISOString().split('T')[0];
    const dateInput = form.querySelector('[name="meeting_date"]');
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
        const companyName = form.querySelector('[name="company_name"]').value || '________________';
        const cin = form.querySelector('[name="cin"]').value || '________________';
        const meetingDate = form.querySelector('[name="meeting_date"]').value;
        const meetingTime = form.querySelector('[name="meeting_time"]').value || '__________';
        const existingCapital = form.querySelector('[name="existing_capital_amount"]').value || '________';
        const proposedCapital = form.querySelector('[name="proposed_capital_amount"]').value || '________';
        const additionalShares = form.querySelector('[name="additional_shares_number"]').value || '________';
        const faceValue = form.querySelector('[name="face_value"]').value || '____';
        const directorName = form.querySelector('[name="director_name"]').value || '________________';
        const din = form.querySelector('[name="din"]').value || '________________';

        // Update preview text
        const elCompanyName = document.getElementById('prevCompanyName');
        const elCIN = document.getElementById('prevCIN');
        const elMeetingDate = document.getElementById('prevMeetingDate');
        const elMeetingTime = document.getElementById('prevMeetingTime');
        const elExistingCapital = document.getElementById('prevExistingCapital');
        const elProposedCapital = document.getElementById('prevProposedCapital');
        const elAdditionalShares = document.getElementById('prevAdditionalShares');
        const elFaceValue = document.getElementById('prevFaceValue');
        const elFooterCompanyName = document.getElementById('footerCompanyName');
        const elFooterDirectorName = document.getElementById('footerDirectorName');
        const elFooterDIN = document.getElementById('footerDIN');

        if (elCompanyName) elCompanyName.textContent = companyName;
        if (elCIN) elCIN.textContent = cin;
        if (elExistingCapital) elExistingCapital.textContent = existingCapital;
        if (elProposedCapital) elProposedCapital.textContent = proposedCapital;
        if (elAdditionalShares) elAdditionalShares.textContent = additionalShares;
        if (elFaceValue) elFaceValue.textContent = faceValue;
        if (elFooterCompanyName) elFooterCompanyName.textContent = companyName;
        if (elFooterDirectorName) elFooterDirectorName.textContent = directorName;
        if (elFooterDIN) elFooterDIN.textContent = din;

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
