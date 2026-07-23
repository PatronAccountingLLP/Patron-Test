@extends('tools.tool-master')
@section('title')
{{_('Board Resolution for Change in Registered Office of a Company')}}
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
            <h1 class="hero-title">Board Resolution for  <span>Change in Registered Office of a Company</span></h1>
            <p class="hero-subtitle">
                Generate a certified Board Resolution for  Change in Registered Office of a Company in under 60 seconds.
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
            <h2 class="form-title">Enter Company & Address Details</h2>
            <p class="form-description">
                Fill in the details below to generate a Board Resolution for Change in Registered Office of a Company.
            </p>
        </div>

        <form id="registeredOfficeChangeForm" method="POST" action="{{route('br.registered.office.change') }}">
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

                <!-- Old Registered Office Address -->
                <div class="form-group full-width">
                    <label class="form-label" style="font-weight:600;color:#333;border-bottom:1px solid #eee;padding-bottom:8px;margin-bottom:12px;">Old Registered Office Address</label>
                </div>

                <div class="form-group full-width">
                    <label class="form-label">Current Registered Office Address <span class="required">*</span></label>
                    <textarea name="old_address" class="form-control" placeholder="Enter complete current registered office address" rows="3" required></textarea>
                </div>

                <!-- New Registered Office Address -->
                <div class="form-group full-width">
                    <label class="form-label" style="font-weight:600;color:#333;border-bottom:1px solid #eee;padding-bottom:8px;margin-bottom:12px;">New Registered Office Address</label>
                </div>

                <div class="form-group full-width">
                    <label class="form-label">New Registered Office Address <span class="required">*</span></label>
                    <textarea name="new_address" class="form-control" placeholder="Enter complete new registered office address" rows="3" required></textarea>
                </div>

                <div class="form-group full-width">
                    <label class="form-label">Effective Date of Change <span class="required">*</span></label>
                    <input type="date" name="effective_date" class="form-control" required>
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
                        <p class="preview-subtitle">Board Resolution for Change in Registered Office</p>
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
                        <strong>SUBJECT:</strong> Change of Registered Office of the Company
                    </p>

                    <p class="certificate-paragraph">
                        <strong>RESOLVED THAT</strong> pursuant to the provisions of Section 12 of the Companies Act, 2013, the Registered Office of the Company be and is hereby shifted from:
                    </p>

                    <p class="certificate-paragraph">
                        <strong>Old Address:</strong> <span id="prevOldAddress">________________</span>
                    </p>

                    <p class="certificate-paragraph">
                        <strong>To New Address:</strong> <span id="prevNewAddress">________________</span>
                    </p>

                    <p class="certificate-paragraph">
                        with effect from <strong id="prevEffectiveDate">________________</strong>.
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
            <h2 class="info-title">Board Resolution for Change in Registered Office of a Company</h2>
            <p class="info-subtitle">
                Statutory Compliance Documentation for Indian Companies
            </p>
        </div>

        <!-- Introduction -->
        <div class="info-content">
            <h3 class="info-subheading">Introduction</h3>

            <p class="info-text">
                A Board Resolution for Change in Registered Office is a formal corporate document
                that records the Board of Directors' decision to relocate the company's registered
                office to a new address. Under the Companies Act, 2013, every company must have a
                registered office where all official communications and notices can be addressed.
                Companies may need to change their registered office due to business expansion,
                operational efficiency, cost optimisation, or strategic relocation.
            </p>

            <p class="info-text">
                The procedure and regulatory requirements for change of registered office vary
                depending on the nature of the shift. A change within the same city, town, or
                village under the same ROC jurisdiction requires board approval and filing of Form
                INC-22. A change from one ROC jurisdiction to another within the same state requires
                a special resolution. A change from one state to another requires approval from the
                Central Government or Regional Director. This document covers the format for change
                within the same local limits.
            </p>

            <!-- Benefits -->
            <h3 class="info-subheading">Benefits of Using a Standard Format</h3>

            <p class="info-text">
                Utilising a professionally drafted board resolution format ensures that all statutory
                requirements under the Companies Act, 2013 and the relevant rules are properly
                addressed. A ready-to-use template saves valuable time during the compliance process,
                reduces the risk of procedural errors, and provides a consistent framework for
                documenting the Board's decision to shift the registered office.
            </p>

            <p class="info-text">
                Standardised formats facilitate smoother ROC filings.
            </p>

            <!-- Relevance -->
            <h3 class="info-subheading">Relevance to Statutory Compliance</h3>

            <p class="info-text">
                Change of registered office is a significant administrative event that must be
                properly documented and filed with regulatory authorities. Following Company
                Registration, the registered office address serves as the official address for all
                statutory communications.
            </p>

            <p class="info-text">
                After changing the registered office, companies must update their address with all
                statutory authorities including GST Registration, bank accounts, and other regulatory
                registrations. Form INC-22 must be filed with the ROC within the prescribed time
                along with proof of the new address.
            </p>
        </div>

        <!-- Sample Format -->
        <div class="format-section">
            <h3 class="format-title">
                Board Resolution for Change in Registered Office – Sample Format
            </h3>

            <p class="format-text">
                <strong>Company Name:</strong> _______________________________________
            </p>

            <p class="format-text">
                <strong>CIN:</strong> _______________________________________
            </p>

            <p class="format-text">
                <strong>Current Registered Office:</strong> _______________________________________
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
                <strong>SUBJECT: CHANGE OF REGISTERED OFFICE OF THE COMPANY WITHIN THE SAME CITY/TOWN/VILLAGE UNDER THE SAME ROC JURISDICTION</strong>
            </p>

            <p class="format-text">
                The Chairman informed the Board that due to business requirements, it is proposed to shift the Registered Office of the Company to a new location within the same city/town/village, under the jurisdiction of the same Registrar of Companies. The Board discussed the matter and passed the following resolution unanimously:
            </p>

            <p class="format-text">
                <strong>"RESOLVED THAT</strong> pursuant to the provisions of Section 12 of the Companies Act, 2013 (including any statutory modification or re-enactment thereof for the time being in force) read with the rules made thereunder, and subject to the approval of shareholders in General Meeting (if required) and subject to such other approvals and consents as may be necessary, the Registered Office of the Company be and is hereby shifted from:
            </p>

            <p class="format-text">
                <strong>Old Registered Office Address:</strong>
            </p>

            <p class="format-text">
                _____________________________________________________________________
            </p>

            <p class="format-text">
                <strong>To:</strong>
            </p>

            <p class="format-text">
                <strong>New Registered Office Address:</strong>
            </p>

            <p class="format-text">
                _____________________________________________________________________
            </p>

            <p class="format-text">
                with effect from __________________ (Date).
            </p>

            <p class="format-text">
                <strong>RESOLVED FURTHER THAT</strong> any Director of the Company be and is hereby authorised to:
            </p>

            <ul class="format-list">
                <li>File Form INC-22 (Verification of Registered Office) with the Registrar of Companies within the prescribed time;</li>
                <li>Submit verification of the new registered office address along with supporting documents;</li>
                <li>Update the registered office address with banks, statutory authorities, and other stakeholders;</li>
                <li>Make necessary changes to the company's letterhead, signage, and official stationery;</li>
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
                    1. Are details mentioned in the board resolution format for registered office change the same as the special resolution format of members?
                </h4>
                <p class="faq-answer">
                    Yes, the core details such as old and new registered office addresses, effective
                    date, and authorisation clauses remain substantially similar in both documents.
                    The primary difference is that the board resolution records the Board's approval,
                    while the special resolution records approval by shareholders at a general
                    meeting. Both documents reference Section 12 of the Companies Act, 2013.
                </p>
            </div>

            <div class="faq-item">
                <h4 class="faq-question">
                    2. Is the signature of all directors mandatory on the Board resolution format for change in the registered office?
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
                    3. What are the details contained in the format of the board resolution to change the registered office?
                </h4>
                <p class="faq-answer">
                    The board resolution should contain company name and CIN, complete old registered
                    office address, complete new registered office address, effective date of change,
                    reference to Section 12 of the Companies Act, 2013, authorisation to file Form
                    INC-22 with ROC, authorisation to update address with banks and statutory
                    authorities, and signature of an authorised director with DIN.
                </p>
            </div>

            <div class="faq-item">
                <h4 class="faq-question">
                    4. Does the Board Resolution format for change in a registered office need to be certified by a professional?
                </h4>
                <p class="faq-answer">
                    There is no statutory requirement for the board resolution to be certified by an
                    external professional. The certified true copy may be signed by any director or
                    the company secretary. However, for filing Form INC-22 with the ROC, certification
                    by a practising Chartered Accountant, Company Secretary, or Cost Accountant may
                    be required as per form-specific requirements.
                </p>
            </div>

            <div class="faq-item">
                <h4 class="faq-question">
                    5. Is the board resolution format for registered office change from one state to another the same as change within the city/state?
                </h4>
                <p class="faq-answer">
                    No, the format and procedure differ significantly. Change within the same city
                    under same ROC requires only board resolution and Form INC-22. Change to another
                    state requires a special resolution, confirmation from the Regional Director or
                    Central Government, filing of Form INC-23, and publication of notice to creditors.
                    Additional compliance requirements apply for inter-state transfers.
                </p>
            </div>

            <div class="faq-item">
                <h4 class="faq-question">
                    6. Is the board resolution format for registered office change mandatory to be attached to the MCA form?
                </h4>
                <p class="faq-answer">
                    Yes, a certified copy of the board resolution is typically required as an
                    attachment when filing Form INC-22 with the Ministry of Corporate Affairs. Along
                    with the board resolution, other documents such as proof of new address (utility
                    bill or property documents), NOC from landlord (if applicable), and verification
                    of registered office must be submitted as part of the filing.
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

    const form = document.getElementById('registeredOfficeChangeForm');
    const downloadPdfBtn = document.getElementById('downloadPdfBtn');
    const alertContainer = document.getElementById('alertContainer');

    // Set default date
    const today = new Date().toISOString().split('T')[0];
    const dateInput = form.querySelector('[name="meeting_date"]');
    const effectiveDateInput = form.querySelector('[name="effective_date"]');
    if (dateInput) {
        dateInput.value = today;
    }
    if (effectiveDateInput) {
        effectiveDateInput.value = today;
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
        const oldAddress = form.querySelector('[name="old_address"]').value || '________________';
        const newAddress = form.querySelector('[name="new_address"]').value || '________________';
        const effectiveDate = form.querySelector('[name="effective_date"]').value;
        const directorName = form.querySelector('[name="director_name"]').value || '________________';
        const din = form.querySelector('[name="din"]').value || '________________';

        // Update preview text
        const elCompanyName = document.getElementById('prevCompanyName');
        const elCIN = document.getElementById('prevCIN');
        const elMeetingDate = document.getElementById('prevMeetingDate');
        const elMeetingTime = document.getElementById('prevMeetingTime');
        const elOldAddress = document.getElementById('prevOldAddress');
        const elNewAddress = document.getElementById('prevNewAddress');
        const elEffectiveDate = document.getElementById('prevEffectiveDate');
        const elFooterCompanyName = document.getElementById('footerCompanyName');
        const elFooterDirectorName = document.getElementById('footerDirectorName');
        const elFooterDIN = document.getElementById('footerDIN');

        if (elCompanyName) elCompanyName.textContent = companyName;
        if (elCIN) elCIN.textContent = cin;
        if (elOldAddress) elOldAddress.textContent = oldAddress;
        if (elNewAddress) elNewAddress.textContent = newAddress;
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

        if (effectiveDate && elEffectiveDate) {
            const formattedEffectiveDate = new Date(effectiveDate).toLocaleDateString('en-IN', {
                day: '2-digit',
                month: 'long',
                year: 'numeric'
            });
            elEffectiveDate.textContent = formattedEffectiveDate;
        } else if (elEffectiveDate) {
            elEffectiveDate.textContent = '________________';
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
