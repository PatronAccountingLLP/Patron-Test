@extends('tools.tool-master')
@section('title')
{{_('Board Resolution for Change of Place of Books of Accounts')}}
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
            <h1 class="hero-title">Board Resolution for <span>Change of Place of Books of Accounts</span></h1>
            <p class="hero-subtitle">
                Generate a certified Board Resolution for Change of Place of Books of Accounts in under 60 seconds.
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
            <h2 class="form-title">Enter Company & Resolution Details</h2>
            <p class="form-description">
                Fill in the details below to generate a Board Resolution for Change of Place of Books of Accounts.
            </p>
        </div>

        <form id="booksOfAccountsForm" method="POST" action="{{ route('br.books.accounts') }}">
            @csrf

            <div class="form-grid">
                <div class="form-group full-width">
                    <label class="form-label">Company Name <span class="required">*</span></label>
                    <input type="text" name="company_name" class="form-control" placeholder="Enter company name" required>
                </div>
                
                <div class="form-group full-width">
                    <label class="form-label">CIN (Corporate Identification Number) <span class="required">*</span></label>
                    <input type="text" name="cin" class="form-control" placeholder="Enter CIN" required>
                </div>
                
                <div class="form-group full-width">
                    <label class="form-label">Registered Office Address <span class="required">*</span></label>
                    <textarea name="registered_office" class="form-control" placeholder="Enter registered office address" required></textarea>
                </div>
                
                <div class="form-group full-width">
                    <label class="form-label">Company Email <span class="required">*</span></label>
                    <input type="email" name="company_email" class="form-control" placeholder="Enter company email" required>
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
                
                <div class="form-group full-width">
                    <label class="form-label">Meeting Venue <span class="required">*</span></label>
                    <input type="text" name="meeting_venue" class="form-control" value="Registered Office of the Company" required>
                </div>
                
                <div class="form-group full-width" style="width: 100%;">
                    <label class="form-label">New Address for Books of Accounts <span class="required">*</span></label>
                    <textarea name="new_books_address" class="form-control" placeholder="Enter complete new address where books will be maintained" required>&nbsp;</textarea>
                    <small class="form-help-text">If this address is in a different city/town from registered office, Form AOC-5 must be filed with ROC within 7 days</small>
                </div>
                
                <div class="form-row">
                    <div class="form-group">
                        <label class="form-label">Effective From Date <span class="required">*</span></label>
                        <input type="date" name="effective_date" class="form-control" required>
                    </div>

                    <div class="form-group">
                        <label class="form-label">Place <span class="required">*</span></label>
                        <input type="text" name="place" class="form-control" placeholder="City / Place" required>
                    </div>
                </div>
                
                <div class="form-row">
                    <div class="form-group">
                        <label class="form-label">Authorised Director Name <span class="required">*</span></label>
                        <input type="text" name="authorized_director" class="form-control" placeholder="Enter director name" required>
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
                    <label class="form-label">DIN (Director Identification Number)</label>
                    <input type="text" name="din" class="form-control" placeholder="Enter DIN (if applicable)">
                    <small class="form-help-text">Required if signatory is a Director</small>
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
                        <p class="preview-subtitle">Board Resolution for Change of Place of Books of Accounts</p>
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
                    <div class="company-details">
                        <p><strong id="prevCompanyName">________________</strong></p>
                        <p><strong>CIN: </strong><span id="prevCin">________________</span></p>
                        <p><strong>Registered Office: </strong><span id="prevRegisteredOffice">________________</span></p>
                        <p><strong>Email: </strong><span id="prevEmail">________________</span></p>
                    </div>
                    
                    <p class="certificate-paragraph">
                        <strong>CERTIFIED TRUE COPY OF THE BOARD RESOLUTION</strong>
                    </p>
                    
                    <p class="certificate-paragraph">
                        Passed at the Meeting of the Board of Directors of the Company<br>
                        <strong>Date of Meeting: </strong><span id="prevMeetingDate">__.__.______</span><br>
                        <strong>Time: </strong><span id="prevMeetingTime">______</span> (Hours)<br>
                        <strong>Venue: </strong><span id="prevMeetingVenue">Registered Office of the Company at ________________</span>
                    </p>
                    
                    <p class="certificate-paragraph">
                        <strong>SUBJECT: CHANGE OF PLACE FOR KEEPING THE BOOKS OF ACCOUNTS</strong>
                    </p>
                    
                    <p class="certificate-paragraph">
                        <strong>"RESOLVED THAT</strong> pursuant to the provisions of Section 128 and other applicable provisions, if any, of the Companies Act, 2013 (including any statutory modification or amendment thereto or re-enactment thereof for the time being in force) and the rules made thereunder, the consent of the Board of Directors of the Company be and is hereby accorded for keeping the Books of Accounts of the Company, required to be maintained under the Companies Act, 2013, at the following address:
                    </p>
                    
                    <div class="address-box">
                        <p><strong>New Address for Books of Accounts:</strong></p>
                        <p id="prevNewAddress">________________________________________________________________________________</p>
                    </div>
                    
                    <p class="certificate-paragraph">
                        with effect from <strong id="prevEffectiveDate">________________</strong>.
                    </p>
                    
                    <p class="certificate-paragraph">
                        <strong>RESOLVED FURTHER THAT</strong> if the new place for keeping the books of accounts is situated in a city, town, or village other than where the registered office of the Company is situated, Form AOC-5 be filed with the Registrar of Companies within the prescribed time to intimate the change in the place of keeping the books of accounts.
                    </p>
                    
                    <p class="certificate-paragraph">
                        <strong>RESOLVED FURTHER THAT</strong> any Director of the Company be and is hereby authorised to:
                    </p>
                    
                    <ul class="resolution-list">
                        <li>Sign, execute, and deliver all necessary documents and forms;</li>
                        <li>File Form AOC-5 and any other requisite e-forms with the Registrar of Companies;</li>
                        <li>Update the records with banks, statutory authorities, and other stakeholders;</li>
                        <li>Do all such acts, deeds, matters, and things as may be necessary, proper, or expedient to give effect to this resolution."
                        </li>
                    </ul>
                    
                    <div class="signature-section">
                        <p>For <strong id="footerCompanyName">________________</strong></p>
                        <div class="signature-line">
                            <p><strong>Signature:</strong> _________________________</p>
                        </div>
                        <p><strong>Name:</strong> <span id="footerDirectorName">________________</span></p>
                        <p><strong>Designation:</strong> <span id="footerDesignation">________________</span></p>
                        <p><strong>DIN:</strong> <span id="footerDin">________________</span></p>
                        <p><strong>Place:</strong> <span id="footerPlace">________________</span></p>
                        <p><strong>Date:</strong> <span id="footerDate">________________</span></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--End Form and Preview Section-->

<!--End JavaScript Section -->



<div class="info-section">
    <div class="info-card">

        <!-- Header -->
        <div class="info-header">
            <span class="info-header-badge">Professional Format Guide</span>
            <h2 class="info-title">Board Resolution for Change of Place of Books of Accounts</h2>
            <p class="info-subtitle">
                Professional Format Guide for Indian Companies
            </p>
        </div>

        <!-- Introduction -->
        <div class="info-content">
            <h3 class="info-subheading">Introduction</h3>

            <p class="info-text">
                A Board Resolution for Change of Place of Books of Accounts is a formal corporate
                document that records the decision of the Board of Directors to change the location
                where the company’s books of accounts and financial records are maintained. Under
                the Companies Act, 2013, every company is required to maintain proper books of
                accounts at its registered office or at such other place in India as may be decided
                by the Board.
            </p>

            <p class="info-text">
                When the Board decides to keep the books of accounts at a place other than the
                registered office, approval through a board resolution is mandatory. The resolution
                must clearly specify the complete address of the new location. If the new place is
                outside the city, town, or village where the registered office is situated, the
                company is required to file Form AOC-5 with the Registrar of Companies within seven
                days of passing the resolution.
            </p>

            <!-- Benefits -->
            <h3 class="info-subheading">Benefits of Using a Standard Format</h3>

            <p class="info-text">
                Using a professionally drafted board resolution format ensures that all statutory
                requirements under the Companies Act, 2013 are properly addressed. A standard format
                saves time, reduces the risk of procedural errors, and provides a clear framework
                for documenting important Board decisions.
            </p>

            <p class="info-text">
                Standardised formats also facilitate smoother ROC filings, ensure proper
                record-keeping, and support consistent corporate compliance practices.
            </p>

            <!-- Relevance -->
            <h3 class="info-subheading">Relevance to Statutory Compliance</h3>

            <p class="info-text">
                After Company Registration, books of accounts must be maintained at the registered
                office unless the Board resolves otherwise. If the books are kept at a different
                location in another city, filing Form AOC-5 with the ROC becomes mandatory.
            </p>

            <p class="info-text">
                Banks, statutory authorities, and other stakeholders may also require a copy of
                this resolution for updating their records. Proper maintenance of books of accounts
                is essential for GST Registration compliance and accurate statutory filings.
            </p>
        </div>

        <!-- Sample Format -->
        <div class="format-section">
            <h3 class="format-title">
                Board Resolution for Change of Place of Books of Accounts – Sample Format
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
                <strong>Email:</strong> _______________________________
            </p>

            <p class="format-text">
                <strong>CERTIFIED TRUE COPY OF THE BOARD RESOLUTION</strong>
            </p>

            <p class="format-text">
                Passed at the Meeting of the Board of Directors of the Company held on
                __.__.______ at ______ (Hours) at the Registered Office of the Company situated at
                ________________________
            </p>

            <p class="format-text">
                <strong>SUBJECT:</strong> Change of Place for Keeping the Books of Accounts
            </p>

            <p class="format-text">
                <strong>RESOLVED THAT</strong> pursuant to the provisions of Section 128 and other
                applicable provisions of the Companies Act, 2013 and the rules made thereunder, the
                consent of the Board of Directors of the Company be and is hereby accorded for
                keeping the Books of Accounts of the Company at the following address:
            </p>

            <p class="format-text">
                <strong>New Address for Books of Accounts:</strong><br>
                ________________________________________________<br>
                ________________________________________________
            </p>

            <p class="format-text">
                with effect from the date of this resolution.
            </p>

            <p class="format-text">
                <strong>RESOLVED FURTHER THAT</strong> if the new place for keeping the books of
                accounts is situated in a city, town, or village other than where the registered
                office of the Company is situated, Form AOC-5 be filed with the Registrar of
                Companies within the prescribed time to intimate the change.
            </p>

            <p class="format-text">
                <strong>RESOLVED FURTHER THAT</strong> any Director of the Company be and is hereby
                authorised to sign, execute, and file Form AOC-5 and other necessary documents,
                update records with banks and statutory authorities, and to do all such acts,
                deeds, and things as may be necessary to give effect to this resolution.
            </p>

            <p class="format-text">
                <strong>CERTIFIED TRUE COPY</strong>
            </p>

            <p class="format-text">
                For _______________________________ (Company Name)
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
        </div>

        <!-- FAQ -->
        <div class="faq-section">
            <h3 class="faq-title">Frequently Asked Questions</h3>

            <div class="faq-item">
                <h4 class="faq-question">
                    1. Can this board resolution be passed without a board meeting?
                </h4>
                <p class="faq-answer">
                    Generally, this resolution should be passed at a duly convened board meeting
                    (physical or virtual). However, if permitted by the Articles of Association,
                    it may be passed by circulation in accordance with the Companies Act, 2013.
                </p>
            </div>

            <div class="faq-item">
                <h4 class="faq-question">
                    2. Who can be an authorised signatory?
                </h4>
                <p class="faq-answer">
                    Any director of the company may be authorised to sign and certify the board
                    resolution. The company secretary, if appointed, may also certify the true
                    copy of the resolution.
                </p>
            </div>

            <div class="faq-item">
                <h4 class="faq-question">
                    3. Is there a prescribed statutory format?
                </h4>
                <p class="faq-answer">
                    No specific statutory format is prescribed. However, the resolution must
                    clearly mention the new address, applicable legal provisions, effective date,
                    and authorisation for necessary filings.
                </p>
            </div>

            <div class="faq-item">
                <h4 class="faq-question">
                    4. Is professional certification mandatory?
                </h4>
                <p class="faq-answer">
                    Professional certification is not mandatory for the resolution itself.
                    However, Form AOC-5 filing may require certification by a practising Chartered
                    Accountant, Company Secretary, or Cost Accountant.
                </p>
            </div>

            <div class="faq-item">
                <h4 class="faq-question">
                    5. Who can certify the resolution for bank purposes?
                </h4>
                <p class="faq-answer">
                    Any director or the company secretary can certify the board resolution for
                    submission to banks. Banks may have additional documentation requirements.
                </p>
            </div>
        </div>

    </div>
</div>

</div>
</div>


<!-- JavaScript Section -->
<script>
document.addEventListener('DOMContentLoaded', function () {
    const form = document.getElementById('booksOfAccountsForm');
    const downloadPdfBtn = document.getElementById('downloadPdfBtn');
    
    // Set default dates
    const today = new Date();
    const meetingDateInput = form.querySelector('[name="meeting_date"]');
    const effectiveDateInput = form.querySelector('[name="effective_date"]');
    
    if (meetingDateInput) {
        meetingDateInput.value = today.toISOString().split('T')[0];
    }
    
    if (effectiveDateInput) {
        effectiveDateInput.value = today.toISOString().split('T')[0];
    }
    
    // Set default time
    const timeInput = form.querySelector('[name="meeting_time"]');
    if (timeInput) {
        timeInput.value = '11:00';
    }
    
    // Set default venue
    const venueInput = form.querySelector('[name="meeting_venue"]');
    if (venueInput) {
        venueInput.value = 'Registered Office of the Company';
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
        // Get form values
        const companyName = form.querySelector('[name="company_name"]').value || '________________';
        const cin = form.querySelector('[name="cin"]').value || '________________';
        const registeredOffice = form.querySelector('[name="registered_office"]').value || '________________';
        const companyEmail = form.querySelector('[name="company_email"]').value || '________________';
        const meetingDate = form.querySelector('[name="meeting_date"]').value;
        const meetingTime = form.querySelector('[name="meeting_time"]').value || '______';
        const meetingVenue = form.querySelector('[name="meeting_venue"]').value || 'Registered Office of the Company at ________________';
        const newAddress = form.querySelector('[name="new_books_address"]').value || '________________________________________________________________________________';
        const effectiveDate = form.querySelector('[name="effective_date"]').value;
        const place = form.querySelector('[name="place"]').value || '________________';
        const directorName = form.querySelector('[name="authorized_director"]').value || '________________';
        const designation = form.querySelector('[name="designation"]').value || '________________';
        const din = form.querySelector('[name="din"]').value || '________________';

        // Update preview elements
        const updateElement = (id, text) => {
            const el = document.getElementById(id);
            if (el) el.textContent = text;
        };

        updateElement('prevCompanyName', companyName);
        updateElement('prevCin', cin);
        updateElement('prevRegisteredOffice', registeredOffice);
        updateElement('prevEmail', companyEmail);
        updateElement('prevMeetingVenue', meetingVenue);
        updateElement('prevNewAddress', newAddress);
        updateElement('footerCompanyName', companyName);
        updateElement('footerDirectorName', directorName);
        updateElement('footerDesignation', designation);
        updateElement('footerDin', din);
        updateElement('footerPlace', place);

        // Format dates
        if (meetingDate) {
            const formattedMeetingDate = new Date(meetingDate).toLocaleDateString('en-IN', {
                day: '2-digit',
                month: '2-digit',
                year: 'numeric'
            }).replace(/\//g, '.');
            updateElement('prevMeetingDate', formattedMeetingDate);
        } else {
            updateElement('prevMeetingDate', '__.__.______');
        }

        if (meetingTime) {
            updateElement('prevMeetingTime', meetingTime);
        }

        if (effectiveDate) {
            const formattedEffectiveDate = new Date(effectiveDate).toLocaleDateString('en-IN', {
                day: '2-digit',
                month: 'long',
                year: 'numeric'
            });
            updateElement('prevEffectiveDate', formattedEffectiveDate);
            updateElement('footerDate', formattedEffectiveDate);
        } else {
            updateElement('prevEffectiveDate', '________________');
            updateElement('footerDate', '________________');
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
    
    // Form submission handling
    form.addEventListener('submit', function(e) {
        const submitBtn = form.querySelector('.btn-submit');
        const spinner = submitBtn.querySelector('.spinner');
        const btnText = submitBtn.querySelector('.btn-text');
        
        btnText.textContent = 'Generating Document...';
        spinner.classList.remove('d-none');
        submitBtn.disabled = true;
    });
});
</script>

@endsection
