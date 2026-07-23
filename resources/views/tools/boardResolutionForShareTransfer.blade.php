@extends('tools.tool-master')
@section('title')
{{_('Board Resolution for Share Transfer')}}
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
            <h1 class="hero-title">Board Resolution for <span> Share Transfer</span></h1>
            <p class="hero-subtitle">
                Generate a certified Board Resolution for Share Transfer in under 60 seconds.
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
            <h2 class="form-title">Enter Company &amp; Share Transfer Details</h2>
            <p class="form-description">
                Fill in the details below to generate a Board Resolution for Share Transfer.
            </p>
        </div>

        <form id="shareTransferForm" method="POST" action="{{route('br.share.transfer') }}">
            @csrf

            <div class="form-grid">
                <div class="form-group full-width">
                    <label class="form-label">Company Name <span class="required">*</span></label>
                    <input type="text" name="company_name" class="form-control" placeholder="Enter company name" required>
                </div>
                
                <div class="form-group full-width">
                    <label class="form-label">CIN <span class="required">*</span></label>
                    <input type="text" name="cin" class="form-control" placeholder="Enter CIN" required>
                </div>
                
                <div class="form-group full-width">
                    <label class="form-label">Registered Office Address <span class="required">*</span></label>
                    <textarea name="registered_office" class="form-control" placeholder="Enter registered office address" required></textarea>
                </div>

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

                <!-- Transferor Details -->
                <div class="form-group full-width">
                    <h4 style="margin-bottom: 10px; color: #333; border-bottom: 1px solid #eee; padding-bottom: 8px;">Transferor Details (Seller)</h4>
                </div>

                <div class="form-row">
                    <div class="form-group">
                        <label class="form-label">Transferor Name <span class="required">*</span></label>
                        <input type="text" name="transferor_name" class="form-control" placeholder="Enter transferor name" required>
                    </div>

                    <div class="form-group">
                        <label class="form-label">Transferor Folio No. <span class="required">*</span></label>
                        <input type="text" name="transferor_folio" class="form-control" placeholder="Enter folio number" required>
                    </div>
                </div>

                <!-- Transferee Details -->
                <div class="form-group full-width">
                    <h4 style="margin-bottom: 10px; color: #333; border-bottom: 1px solid #eee; padding-bottom: 8px;">Transferee Details (Buyer)</h4>
                </div>

                <div class="form-row">
                    <div class="form-group">
                        <label class="form-label">Transferee Name <span class="required">*</span></label>
                        <input type="text" name="transferee_name" class="form-control" placeholder="Enter transferee name" required>
                    </div>

                    <div class="form-group">
                        <label class="form-label">Transferee Folio No. <span class="required">*</span></label>
                        <input type="text" name="transferee_folio" class="form-control" placeholder="Enter folio number" required>
                    </div>
                </div>

                <!-- Share Details -->
                <div class="form-group full-width">
                    <h4 style="margin-bottom: 10px; color: #333; border-bottom: 1px solid #eee; padding-bottom: 8px;">Share Details</h4>
                </div>

                <div class="form-row">
                    <div class="form-group">
                        <label class="form-label">Number of Shares <span class="required">*</span></label>
                        <input type="number" name="number_of_shares" class="form-control" placeholder="Enter number of shares" min="1" required>
                    </div>

                    <div class="form-group">
                        <label class="form-label">Share Certificate No. <span class="required">*</span></label>
                        <input type="text" name="share_certificate_no" class="form-control" placeholder="Enter certificate number(s)" required>
                    </div>
                </div>

                <!-- Certifying Director Details -->
                <div class="form-group full-width">
                    <h4 style="margin-bottom: 10px; color: #333; border-bottom: 1px solid #eee; padding-bottom: 8px;">Certifying Director Details</h4>
                </div>

                <div class="form-row">
                    <div class="form-group">
                        <label class="form-label">Director Name <span class="required">*</span></label>
                        <input type="text" name="director_name" class="form-control" placeholder="Enter director name" required>
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

                <div class="form-row">
                    <div class="form-group">
                        <label class="form-label">DIN <span class="required">*</span></label>
                        <input type="text" name="din" class="form-control" placeholder="Enter DIN" required>
                    </div>

                    <div class="form-group">
                        <label class="form-label">Place <span class="required">*</span></label>
                        <input type="text" name="place" class="form-control" placeholder="City / Place" required>
                    </div>
                </div>
                
                <div class="form-group full-width">
                    <label class="form-label">Resolution Date <span class="required">*</span></label>
                    <input type="date" name="resolution_date" class="form-control" required>
                </div>
            </div>

            <button type="submit" class="btn-submit" id="downloadPdfBtn">
                <span class="btn-text">Generate &amp; Download Resolution</span>
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
                        <p class="preview-subtitle">Board Resolution for Share Transfer</p>
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
                        <strong id="prevCompanyName">________________</strong>
                    </p>
                    
                    <p class="certificate-paragraph">
                        CIN: <strong id="prevCIN">________________</strong>
                    </p>

                    <p class="certificate-paragraph">
                        <strong>Date of Meeting:</strong> <span id="prevMeetingDate">__________</span>
                    </p>
                    
                    <p class="certificate-paragraph">
                        <strong>Time:</strong> <span id="prevMeetingTime">__________</span>
                    </p>

                    <p class="certificate-paragraph">
                        <strong>SUBJECT: TRANSFER OF EQUITY SHARES</strong>
                    </p>

                    <p class="certificate-paragraph">
                        <strong>RESOLVED THAT</strong> pursuant to Section 56 of the Companies Act, 2013, 
                        consent be accorded to approve the transfer of equity shares:
                    </p>

                    <p class="certificate-paragraph">
                        <strong>Transferor:</strong> <span id="prevTransferor">________________</span>
                    </p>
                    
                    <p class="certificate-paragraph">
                        <strong>Transferee:</strong> <span id="prevTransferee">________________</span>
                    </p>

                    <p class="certificate-paragraph">
                        <strong>No. of Shares:</strong> <span id="prevShares">________________</span>
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
            <h2 class="info-title">Board Resolution for Share Transfer</h2>
            <p class="info-subtitle">
                Professional Format Guide for Indian Companies
            </p>
        </div>

        <!-- Introduction -->
        <div class="info-content">
            <h3 class="info-subheading">Introduction</h3>

            <p class="info-text">
                A Board Resolution for Share Transfer is a formal corporate document that records 
                the Board of Directors' consent to approve the transfer of equity shares from one 
                shareholder (transferor) to another person (transferee). Under the Companies Act, 
                2013, shares of a company are treated as moveable property that can be transferred 
                in the manner provided in the company's Articles of Association. The Board must 
                approve share transfers and authorise the necessary entries in the Register of Members.
            </p>

            <p class="info-text">
                This resolution specifies the details of the transferor and transferee, their 
                respective folio numbers, the number of shares being transferred, and the share 
                certificate numbers. The document authorises directors to make necessary 
                endorsements on the share certificates and update the company's statutory 
                registers. It is essential for maintaining proper records of share ownership and 
                is commonly required when existing shareholders wish to sell or gift their shares 
                to other persons.
            </p>

            <!-- Benefits -->
            <h3 class="info-subheading">Benefits of Using a Standard Format</h3>

            <p class="info-text">
                Utilising a professionally drafted board resolution format ensures that all 
                statutory requirements under the Companies Act, 2013 are properly addressed. A 
                ready-to-use template saves valuable time during board meetings, reduces the risk 
                of procedural errors, and provides a consistent framework that captures essential 
                details including transferor and transferee information, share particulars, and 
                certificate numbers. Standardised formats ensure proper documentation of ownership 
                changes.
            </p>

            <!-- Relevance -->
            <h3 class="info-subheading">Relevance to Company Compliance</h3>

            <p class="info-text">
                Share transfers are a routine but important corporate transaction. Following 
                Company Registration, the company's share capital structure evolves through 
                various transactions including transfers, transmissions, and fresh allotments. 
                Proper documentation of share transfers is essential for maintaining accurate 
                shareholding records, complying with annual return filing requirements, and 
                ensuring that the Register of Members reflects the correct ownership position 
                at all times.
            </p>
        </div>

        <!-- Sample Format -->
        <div class="format-section">
            <h3 class="format-title">
                Board Resolution for Share Transfer – Sample Format
            </h3>

            <p class="format-note">
                <em>[To be printed on Company Letterhead]</em>
            </p>

            <p class="format-text">
                <strong>Company Name:</strong> _______________________________
            </p>

            <p class="format-text">
                <strong>CIN:</strong> _______________________________
            </p>

            <p class="format-text">
                <strong>Registered Office:</strong> _______________________________
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
                <strong>SUBJECT: TRANSFER OF EQUITY SHARES</strong>
            </p>

            <p class="format-text">
                "RESOLVED THAT pursuant to the provisions of Section 56 and other applicable 
                provisions of the Companies Act, 2013 (including any statutory modification(s) 
                or re-enactment thereof for the time being in force), and subject to the Articles 
                of Association of the Company, the consent of the Board of Directors be and is 
                hereby accorded to approve the transfer of equity shares, the details of which 
                are as follows:
            </p>

            <table style="width:100%;border-collapse:collapse;margin:20px 0;font-size:14px;">
                <tr style="background-color:#f5f5f5;">
                    <th style="border:1px solid #ddd;padding:8px;">Transferor</th>
                    <th style="border:1px solid #ddd;padding:8px;">Folio No.</th>
                    <th style="border:1px solid #ddd;padding:8px;">Transferee</th>
                    <th style="border:1px solid #ddd;padding:8px;">Folio No.</th>
                    <th style="border:1px solid #ddd;padding:8px;">No. of Shares</th>
                    <th style="border:1px solid #ddd;padding:8px;">Share Certificate No.</th>
                </tr>
                <tr>
                    <td style="border:1px solid #ddd;padding:8px;"></td>
                    <td style="border:1px solid #ddd;padding:8px;"></td>
                    <td style="border:1px solid #ddd;padding:8px;"></td>
                    <td style="border:1px solid #ddd;padding:8px;"></td>
                    <td style="border:1px solid #ddd;padding:8px;"></td>
                    <td style="border:1px solid #ddd;padding:8px;"></td>
                </tr>
            </table>

            <p class="format-text">
                RESOLVED FURTHER THAT any Director of the Company, jointly or severally, be and 
                is hereby authorised to register the transfer in the Register of Members, make 
                necessary endorsement on the share certificate(s), and issue new share 
                certificate(s) in the name of the transferee..."
            </p>

            <p class="format-text">
                For ________________________________________ (Name of the Company)
            </p>

            <p class="format-text">
                <strong>Signature:</strong> _______________________________
            </p>

            <p class="format-text">
                <strong>Name:</strong> _______________________________
            </p>

            <p class="format-text">
                <strong>Designation:</strong> _______________________________
            </p>

            <p class="format-text">
                <strong>DIN:</strong> _______________________________
            </p>

            <p class="format-text">
                <strong>Date:</strong> _______________________________
            </p>

            <p class="format-text">
                <strong>Place:</strong> _______________________________
            </p>
        </div>

        <!-- FAQ -->
        <div class="faq-section">
            <h3 class="faq-title">Frequently Asked Questions</h3>

            <div class="faq-item">
                <h4 class="faq-question">
                    1. Is the signature of all directors mandatory on the board resolution for share transfer?
                </h4>
                <p class="faq-answer">
                    No, signatures of all directors are not mandatory. The resolution is passed by 
                    a majority of directors present and voting at a duly convened board meeting 
                    where quorum is present. The certified true copy may be signed by a single 
                    authorised director or the company secretary. The minutes should record the 
                    names of directors present and the voting details for proper documentation.
                </p>
            </div>

            <div class="faq-item">
                <h4 class="faq-question">
                    2. Does the Board Resolution for share transfer need to be certified by a professional?
                </h4>
                <p class="faq-answer">
                    There is no statutory requirement for the board resolution to be certified by 
                    an external professional. The certified true copy may be signed by any director 
                    or the company secretary of the company. However, for certain purposes such as 
                    share transfer deed registration or stamp duty matters, additional certification 
                    or attestation may be required by the relevant authorities.
                </p>
            </div>

            <div class="faq-item">
                <h4 class="faq-question">
                    3. Is the Board resolution for share transfer to be on company letterhead?
                </h4>
                <p class="faq-answer">
                    While there is no strict legal requirement mandating the use of company 
                    letterhead, it is considered standard corporate practice and adds authenticity 
                    to the document. Using official letterhead facilitates easy identification and 
                    verification by shareholders, auditors, and regulatory authorities. Most 
                    companies maintain all board resolutions on official letterhead as part of 
                    good corporate governance practices.
                </p>
            </div>

            <div class="faq-item">
                <h4 class="faq-question">
                    4. Who can be considered as an authorized signatory for the board resolution for share transfer?
                </h4>
                <p class="faq-answer">
                    Any director present at the board meeting or the company secretary (if appointed) 
                    may be authorised to sign the certified true copy of the resolution. The 
                    resolution itself typically authorises one or more directors to execute the 
                    transfer by making entries in the Register of Members, endorsing share 
                    certificates, and issuing new certificates to the transferee as required.
                </p>
            </div>

            <div class="faq-item">
                <h4 class="faq-question">
                    5. Which resolution is required for the board resolution for share transfer?
                </h4>
                <p class="faq-answer">
                    A board resolution is required to approve the transfer of shares. The resolution 
                    should reference Section 56 of the Companies Act, 2013 and the company's 
                    Articles of Association. It should specify the details of transferor, transferee, 
                    folio numbers, number of shares, and share certificate numbers. The Board must 
                    also authorise the necessary entries in statutory registers and endorsements 
                    on share certificates.
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

    const form = document.getElementById('shareTransferForm');
    const downloadPdfBtn = document.getElementById('downloadPdfBtn');
    const alertContainer = document.getElementById('alertContainer');

    // Set default date
    const today = new Date().toISOString().split('T')[0];
    const dateInputs = form.querySelectorAll('[type="date"]');
    dateInputs.forEach(input => {
        if (!input.value) {
            input.value = today;
        }
    });

    // Set default time
    const timeInput = form.querySelector('[name="meeting_time"]');
    if (timeInput && !timeInput.value) {
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
        const companyName = form.querySelector('[name="company_name"]').value || '________________';
        const cin = form.querySelector('[name="cin"]').value || '________________';
        const meetingDate = form.querySelector('[name="meeting_date"]').value;
        const meetingTime = form.querySelector('[name="meeting_time"]').value;
        const transferorName = form.querySelector('[name="transferor_name"]').value || '________________';
        const transfereeName = form.querySelector('[name="transferee_name"]').value || '________________';
        const numberOfShares = form.querySelector('[name="number_of_shares"]').value || '________________';
        const place = form.querySelector('[name="place"]').value || '________________';
        const resolutionDate = form.querySelector('[name="resolution_date"]').value;

        // Update preview text
        const elCompanyName = document.getElementById('prevCompanyName');
        const elCIN = document.getElementById('prevCIN');
        const elMeetingDate = document.getElementById('prevMeetingDate');
        const elMeetingTime = document.getElementById('prevMeetingTime');
        const elTransferor = document.getElementById('prevTransferor');
        const elTransferee = document.getElementById('prevTransferee');
        const elShares = document.getElementById('prevShares');
        const elFooterCompanyName = document.getElementById('footerCompanyName');
        const elFooterPlace = document.getElementById('footerPlace');
        const elFooterDate = document.getElementById('footerDate');

        if (elCompanyName) elCompanyName.textContent = companyName;
        if (elCIN) elCIN.textContent = cin;
        if (elTransferor) elTransferor.textContent = transferorName;
        if (elTransferee) elTransferee.textContent = transfereeName;
        if (elShares) elShares.textContent = numberOfShares;
        if (elFooterCompanyName) elFooterCompanyName.textContent = companyName;
        if (elFooterPlace) elFooterPlace.textContent = place;

        if (meetingDate && elMeetingDate) {
            const formattedMeetingDate = new Date(meetingDate).toLocaleDateString('en-IN', {
                day: '2-digit',
                month: 'long',
                year: 'numeric'
            });
            elMeetingDate.textContent = formattedMeetingDate;
        } else if (elMeetingDate) {
            elMeetingDate.textContent = '__________';
        }

        if (meetingTime && elMeetingTime) {
            const [hours, minutes] = meetingTime.split(':');
            const hour = parseInt(hours);
            const ampm = hour >= 12 ? 'PM' : 'AM';
            const hour12 = hour % 12 || 12;
            elMeetingTime.textContent = `${hour12}:${minutes} ${ampm}`;
        } else if (elMeetingTime) {
            elMeetingTime.textContent = '__________';
        }

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
<!--End Js Section -->


@endsection
