@extends('tools.tool-master')
@section('title')
{{_('Board Resolution of Designated Partner in LLP')}}
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
            <h1 class="hero-title">Board Resolution for <span> Appointment of Designated Partner in LLP</span></h1>
            <p class="hero-subtitle">
                Generate a certified Board Resolution for Appointment of Designated Partner in LLP in under 60 seconds.
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
                Fill in the details below to generate a Resolution for Appointment of Designated Partner in LLP.
            </p>
        </div>

        <form id="llpDesignatedPartnerForm" method="POST" action="{{route('br.llp.designated.partner') }}">
            @csrf

            <div class="form-grid">
                <!-- LLP Details -->
                <div class="form-group full-width">
                    <label class="form-label">LLP Name <span class="required">*</span></label>
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
                <div class="form-group full-width">
                    <label class="form-label">Email <span class="required">*</span></label>
                    <input type="email" name="company_email" class="form-control" placeholder="Enter LLP email" required>
                </div>

                <!-- Meeting Details -->
                <div class="form-row">
                    <div class="form-group">
                        <label class="form-label">Meeting Date <span class="required">*</span></label>
                        <input type="date" name="meeting_date" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label class="form-label">Meeting Time <span class="required">*</span></label>
                        <input type="time" name="meeting_time" class="form-control" required>
                    </div>
                </div>

                <!-- LLP Agreement Details -->
                <div class="form-group full-width">
                    <h3 class="section-title">LLP Agreement Details</h3>
                </div>
                <div class="form-row">
                    <div class="form-group">
                        <label class="form-label">LLP Agreement Date <span class="required">*</span></label>
                        <input type="date" name="llp_agreement_date" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label class="form-label">Supplemental Agreement Date</label>
                        <input type="date" name="supplemental_agreement_date" class="form-control">
                    </div>
                </div>

                <!-- New Designated Partner Details -->
                <div class="form-group full-width">
                    <h3 class="section-title">New Designated Partner Details</h3>
                </div>
                <div class="form-group full-width">
                    <label class="form-label">New Designated Partner Name <span class="required">*</span></label>
                    <input type="text" name="new_dp_name" class="form-control" placeholder="Enter full name" required>
                </div>
                <div class="form-row">
                    <div class="form-group">
                        <label class="form-label">DPIN <span class="required">*</span></label>
                        <input type="text" name="new_dp_dpin" class="form-control" placeholder="Enter DPIN" required>
                    </div>
                    <div class="form-group">
                        <label class="form-label">Effective Date <span class="required">*</span></label>
                        <input type="date" name="effective_date" class="form-control" required>
                    </div>
                </div>

                <!-- Authorized Designated Partner for Signing -->
                <div class="form-group full-width">
                    <h3 class="section-title">Authorized Designated Partner Details</h3>
                </div>
                <div class="form-group full-width">
                    <label class="form-label">Authorized Designated Partner Name <span class="required">*</span></label>
                    <input type="text" name="authorized_dp_name" class="form-control" placeholder="Enter name" required>
                </div>
                <div class="form-group full-width">
                    <label class="form-label">DPIN of Authorized Designated Partner <span class="required">*</span></label>
                    <input type="text" name="authorized_dp_dpin" class="form-control" placeholder="Enter DPIN" required>
                </div>
                
                <!-- Place and Date -->
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
                        <p class="preview-subtitle">Resolution for Appointment of Designated Partner in LLP</p>
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
                    <h2 class="certificate-doc-title">CERTIFIED TRUE COPY OF THE RESOLUTION</h2>
                    <p class="certificate-doc-subtitle">
                        Passed by the Designated Partners of the LLP
                    </p>
                </div>

                <div class="certificate-body">
                    <p class="certificate-paragraph">
                        <strong id="prevLlpName">________________</strong><br>
                        <strong>LLPIN: </strong><span id="prevLlpIn">________________</span><br>
                        <strong>Registered Office Address: </strong><span id="prevAddress">________________</span><br>
                        <strong>Email: </strong><span id="prevEmail">________________</span>
                    </p>

                    <p class="certificate-paragraph">
                        <strong>CERTIFIED TRUE COPY OF THE RESOLUTION</strong><br>
                        Passed by the Designated Partners of 
                        <strong id="prevLlpName2">________________</strong> LLP<br>
                        at the Meeting held on 
                        <strong id="prevMeetingDate">__________</strong> at 
                        <strong id="prevMeetingTime">__________</strong><br>
                        at the Registered Office of the LLP
                    </p>

                    <p class="certificate-paragraph" style="text-align: center;">
                        <strong>APPOINTMENT OF DESIGNATED PARTNER</strong>
                    </p>

                    <p class="certificate-paragraph">
                        <strong>RESOLVED THAT</strong> pursuant to the provisions of Section 7 of the Limited Liability Partnership Act, 2008, read with the LLP Rules, 2009, and other applicable provisions, if any, of the Limited Liability Partnership Act, 2008, and the LLP Agreement dated 
                        <strong id="prevLlpaDate">__________</strong> and Supplemental Agreement dated 
                        <strong id="prevSupplementalDate">__________</strong>, Mr./Ms. 
                        <strong id="prevNewDpName">________________</strong> (DPIN: 
                        <strong id="prevNewDpDpin">________________</strong>), with the consent of the remaining Designated Partner(s) of the LLP, be and is hereby appointed as Designated Partner of the LLP with effect from 
                        <strong id="prevEffectiveDate">__________</strong>.
                    </p>

                    <p class="certificate-paragraph">
                        <strong>RESOLVED FURTHER THAT</strong> the LLP Agreement be amended accordingly through a Supplemental Deed to give effect to the above resolution and to incorporate the details of the newly appointed Designated Partner.
                    </p>

                    <p class="certificate-paragraph">
                        <strong>RESOLVED FURTHER THAT</strong> any Designated Partner of the LLP be and is hereby authorised to sign necessary documents and forms, file Form 3 (Information with regard to LLP Agreement and changes) and Form 4 (Notice of appointment, cessation, and change in particulars of Designated Partner/Partner) with the Registrar of Companies, and to do all such acts, deeds, matters, and things as may be necessary, proper, or expedient to give effect to the above resolutions.
                    </p>

                    <div class="certificate-signature">
                        <p class="signature-label">For <strong id="footerLlpName">________________</strong> LLP</p>
                        <p class="signature-label">Signature: _________________________</p>
                        <p class="signature-label">Name: <strong id="footerAuthName">________________</strong></p>
                        <p class="signature-label">Designation: Designated Partner</p>
                        <p class="signature-label">DPIN: <strong id="footerDpin">________________</strong></p>
                    </div>
                </div>

                <div class="certificate-footer">
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
            <h2 class="info-title">Resolution for Appointment of Designated Partner in LLP</h2>
            <p class="info-subtitle">
                Professional Format Guide for Indian LLPs
            </p>
        </div>

        <!-- Introduction -->
        <div class="info-content">
            <h3 class="info-subheading">Introduction</h3>

            <p class="info-text">
                A Resolution for Appointment of Designated Partner is a formal document passed by the
                existing Designated Partners of a Limited Liability Partnership (LLP) to appoint a new
                Designated Partner. Under the Limited Liability Partnership Act, 2008, every LLP is
                required to have at least two Designated Partners, with at least one being a resident
                of India. Designated Partners are responsible for statutory compliance and regulatory
                filings with the Registrar of Companies.
            </p>

            <p class="info-text">
                This resolution is required when an LLP appoints a new Designated Partner due to
                business expansion, succession planning, regulatory requirements, or replacement of
                an outgoing Designated Partner. The resolution records the consent of existing
                Designated Partners and authorises the filing of prescribed forms with the MCA. The
                appointment becomes effective upon filing the required forms along with supporting
                documents such as consent of the incoming partner, supplemental deed, and DPIN proof.
            </p>

            <!-- Benefits -->
            <h3 class="info-subheading">Benefits of Using a Standard Format</h3>

            <p class="info-text">
                Utilising a professionally drafted resolution format ensures compliance with all
                statutory requirements under the LLP Act, 2008. A standardised template reduces
                procedural errors, ensures consistency in LLP records, and facilitates smooth
                processing of the appointment with the Registrar.
            </p>

            <p class="info-text">
                This approach supports timely compliance and helps LLPs manage partner appointments
                efficiently while maintaining proper documentation of decisions.
            </p>

            <!-- Relevance -->
            <h3 class="info-subheading">Relevance to LLP Compliance</h3>

            <p class="info-text">
                Appointment of Designated Partners is a core governance requirement for LLPs. For
                newly registered LLPs, maintaining the prescribed number of Designated Partners is
                essential for statutory compliance under the LLP Act.
            </p>

            <p class="info-text">
                Designated Partners are responsible for filing annual returns, statements of accounts,
                and other statutory forms with the MCA. Any change must also be updated during GST
                Registration or amendments. This resolution acts as the foundational authorisation
                document for filing Forms 3 and 4 with regulatory authorities.
            </p>
        </div>

        <!-- Sample Format -->
        <div class="format-section">
            <h3 class="format-title">
                Resolution for Appointment of Designated Partner in LLP – Sample Format
            </h3>

            <p class="format-note">
                <em>[To be printed on LLP Letterhead]</em>
            </p>

            <p class="format-text"><strong>LLP Name:</strong> ___________________________</p>
            <p class="format-text"><strong>LLPIN:</strong> ___________________________</p>
            <p class="format-text"><strong>Registered Office Address:</strong> ___________________________</p>
            <p class="format-text"><strong>Email:</strong> ___________________________</p>

            <p class="format-text">
                <strong>CERTIFIED TRUE COPY OF THE RESOLUTION</strong>
            </p>

            <p class="format-text">
                Passed by the Designated Partners of __________ LLP at the Meeting held on
                __________ (Date) at __________ (Time) at the Registered Office of the LLP
            </p>

            <p class="format-text">
                <strong>APPOINTMENT OF DESIGNATED PARTNER</strong>
            </p>

            <p class="format-text">
                <strong>RESOLVED THAT</strong> pursuant to the provisions of Section 7 of the Limited
                Liability Partnership Act, 2008 read with the LLP Rules, 2009 and the LLP Agreement
                dated __________ and Supplemental Agreement dated __________, Mr./Ms. __________
                (DPIN: __________), with the consent of the remaining Designated Partner(s), be and is
                hereby appointed as Designated Partner of the LLP with effect from __________ (Date).
            </p>

            <p class="format-text">
                <strong>RESOLVED FURTHER THAT</strong> the LLP Agreement be amended accordingly through
                a Supplemental Deed to incorporate the details of the newly appointed Designated
                Partner.
            </p>

            <p class="format-text">
                <strong>RESOLVED FURTHER THAT</strong> any Designated Partner of the LLP be and is hereby
                authorised to sign and file Form 3 and Form 4 with the Registrar of Companies and to do
                all such acts, deeds, matters, and things as may be necessary to give effect to this
                resolution.
            </p>

            <p class="format-text">For __________ LLP</p>

            <p class="format-text"><strong>Signature:</strong> ___________________________</p>
            <p class="format-text"><strong>Name:</strong> ___________________________</p>
            <p class="format-text"><strong>Designation:</strong> Designated Partner</p>
            <p class="format-text"><strong>DPIN:</strong> ___________________________</p>
        </div>

        <!-- FAQ -->
        <div class="faq-section">
            <h3 class="faq-title">Frequently Asked Questions</h3>

            <div class="faq-item">
                <h4 class="faq-question">
                    1. Who can sign the resolution for appointment of a Designated Partner?
                </h4>
                <p class="faq-answer">
                    Existing Designated Partners of the LLP are authorised to sign the resolution.
                    Any Designated Partner with a valid DPIN may certify the resolution as a true copy.
                </p>
            </div>

            <div class="faq-item">
                <h4 class="faq-question">
                    2. Is signature of all partners mandatory?
                </h4>
                <p class="faq-answer">
                    No. Consent is required as per the LLP Agreement. The certified copy is usually
                    signed by an authorised Designated Partner.
                </p>
            </div>

            <div class="faq-item">
                <h4 class="faq-question">
                    3. Which resolution is required for appointment of Designated Partner?
                </h4>
                <p class="faq-answer">
                    A resolution passed by the existing Designated Partners of the LLP in accordance
                    with the LLP Agreement is required.
                </p>
            </div>

            <div class="faq-item">
                <h4 class="faq-question">
                    4. Is professional certification mandatory?
                </h4>
                <p class="faq-answer">
                    The resolution itself does not mandatorily require professional certification.
                    However, Forms 3 and 4 may require certification by a practising professional in
                    certain cases.
                </p>
            </div>

            <div class="faq-item">
                <h4 class="faq-question">
                    5. Can the resolution be passed without a meeting?
                </h4>
                <p class="faq-answer">
                    Yes. Subject to the LLP Agreement, the resolution may be passed by circulation
                    without convening a formal meeting, provided required consent is obtained.
                </p>
            </div>

            <div class="faq-item">
                <h4 class="faq-question">
                    6. Which form is filed for appointment of Designated Partner?
                </h4>
                <p class="faq-answer">
                    Form 4 is filed for appointment of the Designated Partner. Form 3 is filed if the
                    LLP Agreement is amended.
                </p>
            </div>

            <div class="faq-item">
                <h4 class="faq-question">
                    7. What documents are filed along with Forms 3 and 4?
                </h4>
                <p class="faq-answer">
                    Documents include the resolution, consent letter (Form 9), supplemental deed,
                    DPIN proof, identity and address proof of the incoming Designated Partner, and
                    the LLP Agreement.
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
    const form = document.getElementById('llpDesignatedPartnerForm');
    const downloadPdfBtn = document.getElementById('downloadPdfBtn');
    
    // Set default dates
    const today = new Date().toISOString().split('T')[0];
    const meetingDateInput = form.querySelector('[name="meeting_date"]');
    const llpAgreementDateInput = form.querySelector('[name="llp_agreement_date"]');
    const effectiveDateInput = form.querySelector('[name="effective_date"]');
    const resolutionDateInput = form.querySelector('[name="resolution_sign_date"]');
    const timeInput = form.querySelector('[name="meeting_time"]');
    
    if (meetingDateInput) {
        meetingDateInput.value = today;
    }
    if (llpAgreementDateInput) {
        llpAgreementDateInput.value = today;
    }
    if (effectiveDateInput) {
        effectiveDateInput.value = today;
    }
    if (resolutionDateInput) {
        resolutionDateInput.value = today;
    }
    if (timeInput) {
        timeInput.value = '11:00';
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
        // LLP Details
        const llpName = form.querySelector('[name="llp_name"]').value || '________________';
        const llpin = form.querySelector('[name="llpin"]').value || '________________';
        const officeAddress = form.querySelector('[name="register_address"]').value || '________________';
        const email = form.querySelector('[name="company_email"]').value || '________________';
        
        // Meeting Details
        const meetingDate = form.querySelector('[name="meeting_date"]').value;
        const meetingTime = form.querySelector('[name="meeting_time"]').value || '11:00 AM';
        
        // LLP Agreement Details
        const llpAgreementDate = form.querySelector('[name="llp_agreement_date"]').value;
        const supplementalDate = form.querySelector('[name="supplemental_agreement_date"]').value;
        
        // New Designated Partner Details
        const newDpName = form.querySelector('[name="new_dp_name"]').value || '________________';
        const newDpDpin = form.querySelector('[name="new_dp_dpin"]').value || '________________';
        const effectiveDate = form.querySelector('[name="effective_date"]').value;
        
        // Authorized Designated Partner
        const authDpName = form.querySelector('[name="authorized_dp_name"]').value || '________________';
        const authDpDpin = form.querySelector('[name="authorized_dp_dpin"]').value || '________________';
        const place = form.querySelector('[name="state"]').value || '________________';
        const resolutionDate = form.querySelector('[name="resolution_sign_date"]').value;

        // Update preview elements
        document.getElementById('prevLlpName').textContent = llpName;
        document.getElementById('prevLlpName2').textContent = llpName;
        document.getElementById('footerLlpName').textContent = llpName;
        document.getElementById('prevLlpIn').textContent = llpin;
        document.getElementById('prevAddress').textContent = officeAddress;
        document.getElementById('prevEmail').textContent = email;
        
        // Format and update dates
        if (meetingDate) {
            const formattedMeetingDate = new Date(meetingDate).toLocaleDateString('en-IN', {
                day: '2-digit',
                month: 'long',
                year: 'numeric'
            });
            document.getElementById('prevMeetingDate').textContent = formattedMeetingDate;
        } else {
            document.getElementById('prevMeetingDate').textContent = '__________';
        }
        
        if (llpAgreementDate) {
            const formattedLlpaDate = new Date(llpAgreementDate).toLocaleDateString('en-IN', {
                day: '2-digit',
                month: 'long',
                year: 'numeric'
            });
            document.getElementById('prevLlpaDate').textContent = formattedLlpaDate;
        } else {
            document.getElementById('prevLlpaDate').textContent = '__________';
        }
        
        if (supplementalDate) {
            const formattedSupplementalDate = new Date(supplementalDate).toLocaleDateString('en-IN', {
                day: '2-digit',
                month: 'long',
                year: 'numeric'
            });
            document.getElementById('prevSupplementalDate').textContent = formattedSupplementalDate;
        } else {
            document.getElementById('prevSupplementalDate').textContent = '__________';
        }
        
        if (effectiveDate) {
            const formattedEffectiveDate = new Date(effectiveDate).toLocaleDateString('en-IN', {
                day: '2-digit',
                month: 'long',
                year: 'numeric'
            });
            document.getElementById('prevEffectiveDate').textContent = formattedEffectiveDate;
        } else {
            document.getElementById('prevEffectiveDate').textContent = '__________';
        }
        
        document.getElementById('prevMeetingTime').textContent = meetingTime;
        document.getElementById('prevNewDpName').textContent = newDpName;
        document.getElementById('prevNewDpDpin').textContent = newDpDpin;
        
        // Footer details
        document.getElementById('footerAuthName').textContent = authDpName;
        document.getElementById('footerDpin').textContent = authDpDpin;
        document.getElementById('footerPlace').textContent = place;

        if (resolutionDate) {
            const formattedResDate = new Date(resolutionDate).toLocaleDateString('en-IN', {
                day: '2-digit',
                month: 'long',
                year: 'numeric'
            });
            document.getElementById('footerDate').textContent = formattedResDate;
        } else {
            document.getElementById('footerDate').textContent = '________________';
        }

        updateStepIndicator();
    }

    function updateStepIndicator() {
        const steps = document.querySelectorAll('.step-dot');
        const requiredInputs = form.querySelectorAll('input[required], textarea[required]');
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
