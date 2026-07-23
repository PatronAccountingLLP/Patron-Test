@extends('tools.tool-master')
@section('title')
{{_('Board Resolution for Issue and Allotment of Non-Convertible Debentures on Private Placement Basis')}}
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
            <h1 class="hero-title">Board Resolution for  <span>Issue and Allotment of Non-Convertible Debentures on Private Placement Basis</span></h1>
            <p class="hero-subtitle">
                Generate a certified Board Resolution for  Issue and Allotment of Non-Convertible Debentures on Private Placement Basis in under 60 seconds.
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
            <h2 class="form-title">Enter Company & NCD Details</h2>
            <p class="form-description">
                Fill in the details below to generate a Board Resolution for Issue and Allotment of Non-Convertible Debentures on Private Placement Basis.
            </p>
        </div>

        <form id="ncdIssueForm" method="POST" action="{{route('br.ncd.issue') }}">
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

                <div class="form-row">
                    <div class="form-group">
                        <label class="form-label">Number of NCDs <span class="required">*</span></label>
                        <input type="number" name="ncd_number" class="form-control" placeholder="Enter number of NCDs" required>
                    </div>

                    <div class="form-group">
                        <label class="form-label">Face Value per NCD (Rs.) <span class="required">*</span></label>
                        <input type="text" name="face_value" class="form-control" placeholder="Enter face value" required>
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-group">
                        <label class="form-label">Total Consideration (Rs.) <span class="required">*</span></label>
                        <input type="text" name="total_consideration" class="form-control" placeholder="Enter total amount" required>
                    </div>

                    <div class="form-group">
                        <label class="form-label">Interest Rate (% p.a.) <span class="required">*</span></label>
                        <input type="text" name="interest_rate" class="form-control" placeholder="Enter interest rate" required>
                    </div>
                </div>

                <div class="form-group full-width">
                    <label class="form-label">Tenure (Years) <span class="required">*</span></label>
                    <input type="text" name="tenure" class="form-control" placeholder="Enter tenure in years" required>
                </div>

                <!-- Allottee Details Section -->
                <div class="form-group full-width">
                    <label class="form-label">Allottee Details</label>
                    <div class="allottee-section" id="allotteeSection">
                        <div class="allottee-row" data-index="1">
                            <div class="form-row">
                                <div class="form-group">
                                    <label class="form-label">Allottee Name <span class="required">*</span></label>
                                    <input type="text" name="allottee_name[]" class="form-control" placeholder="Name of Allottee" required>
                                </div>
                                <div class="form-group">
                                    <label class="form-label">No. of NCDs <span class="required">*</span></label>
                                    <input type="number" name="allottee_ncds[]" class="form-control" placeholder="Number" required>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group">
                                    <label class="form-label">Amount (Rs.) <span class="required">*</span></label>
                                    <input type="text" name="allottee_amount[]" class="form-control" placeholder="Amount" required>
                                </div>
                                <div class="form-group">
                                    <label class="form-label">Tenure <span class="required">*</span></label>
                                    <input type="text" name="allottee_tenure[]" class="form-control" placeholder="Tenure" required>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group">
                                    <label class="form-label">Interest Rate (% p.a.) <span class="required">*</span></label>
                                    <input type="text" name="allottee_interest[]" class="form-control" placeholder="Interest Rate" required>
                                </div>
                            </div>
                        </div>
                    </div>
                    <button type="button" class="btn btn-secondary mt-2" id="addAllotteeBtn">+ Add Another Allottee</button>
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
                        <p class="preview-subtitle">Board Resolution for Issue of NCDs</p>
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
                        <strong>SUBJECT:</strong> Issue and Allotment of Non-Convertible Debentures on Private Placement Basis
                    </p>

                    <p class="certificate-paragraph">
                        <strong>RESOLVED THAT</strong> pursuant to the provisions of Sections 23, 42, 71 and other applicable provisions of the Companies Act, 2013, the consent of the Board be and is hereby accorded to issue and allot
                        <strong id="prevNCDNumber">________________</strong> Non-Convertible Debentures (NCDs) having a face value of Rs.
                        <strong id="prevFaceValue">________________</strong>/- each, aggregating to Rs.
                        <strong id="prevTotalConsideration">________________</strong>/-, bearing interest at
                        <strong id="prevInterestRate">______</strong>% p.a. for a tenure of
                        <strong id="prevTenure">______</strong> years.
                    </p>

                    <p class="certificate-paragraph">
                        <strong>RESOLVED FURTHER THAT</strong> Debenture Certificates be issued in favour of the respective allottees under the Common Seal of the Company.
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
            <h2 class="info-title">Board Resolution for Issue and Allotment of Non-Convertible Debentures on Private Placement Basis</h2>
            <p class="info-subtitle">
                Corporate Finance Documentation for Indian Companies
            </p>
        </div>

        <!-- Introduction -->
        <div class="info-content">
            <h3 class="info-subheading">Introduction</h3>

            <p class="info-text">
                A Board Resolution for Issue and Allotment of Non-Convertible Debentures (NCDs) on
                Private Placement Basis is a formal corporate document that records the Board of
                Directors' consent to raise debt capital by issuing NCDs to identified investors.
                Under the Companies Act, 2013 and the rules made thereunder, companies proposing to
                issue debentures on a private placement basis must obtain prior board approval. NCDs
                are debt instruments that cannot be converted into equity shares and provide fixed
                returns to investors in the form of interest.
            </p>

            <p class="info-text">
                This resolution specifies the number of NCDs to be issued, face value per debenture,
                aggregate consideration, interest rate, tenure, and details of identified allottees.
                The document authorises the issuance of debenture certificates under the company's
                common seal. It is essential documentation for compliance with private placement
                provisions and is commonly required when companies seek to raise funds through debt
                instruments from a select group of investors rather than through public offerings.
            </p>

            <!-- Benefits -->
            <h3 class="info-subheading">Benefits of Using a Standard Format</h3>

            <p class="info-text">
                Utilising a professionally drafted board resolution format ensures that all statutory
                requirements under the Companies Act, 2013 and relevant rules are properly addressed.
                A ready-to-use template saves valuable time during board meetings, reduces the risk
                of procedural errors, and provides a consistent framework that captures essential
                details including allottee information, NCD particulars, interest rates, and tenure.
            </p>

            <p class="info-text">
                Standardised formats ensure compliance with private placement regulations.
            </p>

            <!-- Relevance -->
            <h3 class="info-subheading">Relevance to Corporate Finance</h3>

            <p class="info-text">
                The issuance of NCDs is a significant corporate finance activity. Following Company
                Registration, businesses may choose to raise capital through debt instruments such as
                NCDs as an alternative to equity dilution or bank borrowings. The private placement
                route allows companies to approach identified investors directly.
            </p>

            <p class="info-text">
                Companies must comply with provisions relating to creation of debenture redemption
                reserve, appointment of debenture trustees (where applicable), and filing
                requirements with the Registrar of Companies.
            </p>
        </div>

        <!-- Sample Format -->
        <div class="format-section">
            <h3 class="format-title">
                Board Resolution for Issue and Allotment of NCDs – Sample Format
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
                <strong>SUBJECT: ISSUE AND ALLOTMENT OF NON-CONVERTIBLE DEBENTURES ON PRIVATE PLACEMENT BASIS</strong>
            </p>

            <p class="format-text">
                <strong>"RESOLVED THAT</strong> pursuant to the provisions of Sections 23, 42, 71 and other applicable provisions of the Companies Act, 2013 (as amended from time to time) read with the rules made thereunder, including the Companies (Prospectus and Allotment of Securities) Rules, 2014 and the Companies (Share Capital and Debentures) Rules, 2014 (as amended from time to time), and subject to the Articles of Association of the Company, the consent of the Board of Directors be and is hereby accorded to issue and allot ____________ (Number) Non-Convertible Debentures (NCDs) having a face value of Rs. ____________/- (Rupees ____________ Only) each, aggregating to a total consideration of Rs. ____________/- (Rupees ____________ Only) on a private placement basis, bearing interest at the rate of ______% per annum for a tenure of ______ (____) years, to the following identified persons:
            </p>

            <table class="format-table" style="width:100%;border-collapse:collapse;margin:16px 0;">
                <thead>
                    <tr>
                        <th style="border:1px solid #ccc;padding:8px;">Sr. No.</th>
                        <th style="border:1px solid #ccc;padding:8px;">Name of Allottee</th>
                        <th style="border:1px solid #ccc;padding:8px;">No. of NCDs</th>
                        <th style="border:1px solid #ccc;padding:8px;">Amount (Rs.)</th>
                        <th style="border:1px solid #ccc;padding:8px;">Tenure</th>
                        <th style="border:1px solid #ccc;padding:8px;">Interest Rate (p.a.)</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td style="border:1px solid #ccc;padding:8px;">1</td>
                        <td style="border:1px solid #ccc;padding:8px;"></td>
                        <td style="border:1px solid #ccc;padding:8px;"></td>
                        <td style="border:1px solid #ccc;padding:8px;"></td>
                        <td style="border:1px solid #ccc;padding:8px;"></td>
                        <td style="border:1px solid #ccc;padding:8px;"></td>
                    </tr>
                    <tr>
                        <td style="border:1px solid #ccc;padding:8px;">2</td>
                        <td style="border:1px solid #ccc;padding:8px;"></td>
                        <td style="border:1px solid #ccc;padding:8px;"></td>
                        <td style="border:1px solid #ccc;padding:8px;"></td>
                        <td style="border:1px solid #ccc;padding:8px;"></td>
                        <td style="border:1px solid #ccc;padding:8px;"></td>
                    </tr>
                    <tr>
                        <td style="border:1px solid #ccc;padding:8px;" colspan="2"><strong>TOTAL</strong></td>
                        <td style="border:1px solid #ccc;padding:8px;"></td>
                        <td style="border:1px solid #ccc;padding:8px;"></td>
                        <td style="border:1px solid #ccc;padding:8px;"></td>
                        <td style="border:1px solid #ccc;padding:8px;"></td>
                    </tr>
                </tbody>
            </table>

            <p class="format-text">
                <strong>RESOLVED FURTHER THAT</strong> the issue and allotment of the above-mentioned NCDs shall be made in accordance with the applicable provisions of the Companies Act, 2013 and the rules made thereunder.
            </p>

            <p class="format-text">
                <strong>RESOLVED FURTHER THAT</strong> Debenture Certificates representing the above-mentioned NCDs be issued in favour of the respective allottees, and such Debenture Certificates be signed by the Directors of the Company and countersigned by the authorised signatory under the Common Seal of the Company (if applicable).
            </p>

            <p class="format-text">
                <strong>RESOLVED FURTHER THAT</strong> any Director or the Company Secretary of the Company be and is hereby authorised to do all such acts, deeds, matters, and things, and to execute all such documents, instruments, and writings as may be necessary to give effect to these resolutions, including but not limited to:
            </p>

            <ul class="format-list">
                <li>Filing of Form PAS-3 (Return of Allotment) with the Registrar of Companies;</li>
                <li>Creating necessary entries in the Register of Debenture Holders;</li>
                <li>Making entries in the books of accounts of the Company;</li>
                <li>Executing any other documents as may be required to complete the allotment."</li>
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
                    1. Can a board resolution for issue and allotment of NCDs on Private Placement basis be passed without a physical or virtual board meeting?
                </h4>
                <p class="faq-answer">
                    Generally, matters involving issue of securities require deliberation at a duly
                    convened board meeting. However, if the company's Articles of Association permit
                    resolutions to be passed by circulation, directors may consider matters without a
                    physical or virtual meeting. For significant matters like NCD issuance, it is
                    advisable to convene a proper board meeting for thorough discussion and compliance.
                </p>
            </div>

            <div class="faq-item">
                <h4 class="faq-question">
                    2. Who can be considered as an authorized signatory for the board resolution for issue and allotment of NCDs on Private Placement basis?
                </h4>
                <p class="faq-answer">
                    Any director present at the board meeting or the company secretary (if appointed)
                    may be authorised to sign the certified true copy of the resolution. The Board
                    typically designates one or more directors to execute documents related to the NCD
                    issuance, file required forms with the ROC, issue debenture certificates, and
                    represent the company before regulatory authorities.
                </p>
            </div>

            <div class="faq-item">
                <h4 class="faq-question">
                    3. Are there any specific requirements for the format of the board resolution for issue and allotment of NCDs on Private Placement basis?
                </h4>
                <p class="faq-answer">
                    The resolution should reference the applicable sections of the Companies Act, 2013
                    (Sections 23, 42, 71) and relevant rules. It must specify the number of NCDs, face
                    value, aggregate consideration, interest rate, tenure, and details of allottees.
                    The resolution should also authorise issuance of debenture certificates, filing of
                    Form PAS-3, and entries in the Register of Debenture Holders.
                </p>
            </div>

            <div class="faq-item">
                <h4 class="faq-question">
                    4. Does the Board Resolution for issue and allotment of NCDs on Private Placement basis need to be certified by a professional?
                </h4>
                <p class="faq-answer">
                    There is no statutory requirement for the board resolution to be certified by an
                    external professional. The certified true copy may be signed by any director or
                    the company secretary. However, for filing Form PAS-3 with the ROC, a practising
                    Chartered Accountant, Company Secretary, or Cost Accountant may be required to
                    certify the form.
                </p>
            </div>

            <div class="faq-item">
                <h4 class="faq-question">
                    5. Can a board resolution for issue and allotment of NCDs on Private Placement basis be passed without convening a board meeting?
                </h4>
                <p class="faq-answer">
                    While the Companies Act permits certain resolutions to be passed by circulation,
                    matters involving issuance of securities are typically considered at duly convened
                    board meetings. The Articles of Association should be consulted to determine if
                    resolution by circulation is permitted for such matters. Standard practice
                    recommends conducting a proper board meeting for NCD issuances.
                </p>
            </div>

            <div class="faq-item">
                <h4 class="faq-question">
                    6. Who can certify a board resolution for issue and allotment of NCDs on Private Placement basis?
                </h4>
                <p class="faq-answer">
                    The certified true copy of the board resolution may be signed by any director of
                    the company or the company secretary (if appointed). The person certifying should
                    have been present at the meeting or have access to the minutes. For statutory
                    filings, additional certification by a practising professional may be required as
                    per form-specific requirements.
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

    const form = document.getElementById('ncdIssueForm');
    const downloadPdfBtn = document.getElementById('downloadPdfBtn');
    const alertContainer = document.getElementById('alertContainer');
    let allotteeIndex = 1;

    // Set default date
    const today = new Date().toISOString().split('T')[0];
    const dateInput = form.querySelector('[name="meeting_date"]');
    if (dateInput) {
        dateInput.value = today;
    }

    // Add Allottee functionality
    document.getElementById('addAllotteeBtn').addEventListener('click', function() {
        allotteeIndex++;
        const allotteeSection = document.getElementById('allotteeSection');
        const newAllottee = document.createElement('div');
        newAllottee.className = 'allottee-row';
        newAllottee.setAttribute('data-index', allotteeIndex);
        newAllottee.innerHTML = `
            <hr style="margin: 15px 0;">
            <div class="form-row">
                <div class="form-group">
                    <label class="form-label">Allottee Name <span class="required">*</span></label>
                    <input type="text" name="allottee_name[]" class="form-control" placeholder="Name of Allottee" required>
                </div>
                <div class="form-group">
                    <label class="form-label">No. of NCDs <span class="required">*</span></label>
                    <input type="number" name="allottee_ncds[]" class="form-control" placeholder="Number" required>
                </div>
            </div>
            <div class="form-row">
                <div class="form-group">
                    <label class="form-label">Amount (Rs.) <span class="required">*</span></label>
                    <input type="text" name="allottee_amount[]" class="form-control" placeholder="Amount" required>
                </div>
                <div class="form-group">
                    <label class="form-label">Tenure <span class="required">*</span></label>
                    <input type="text" name="allottee_tenure[]" class="form-control" placeholder="Tenure" required>
                </div>
            </div>
            <div class="form-row">
                <div class="form-group">
                    <label class="form-label">Interest Rate (% p.a.) <span class="required">*</span></label>
                    <input type="text" name="allottee_interest[]" class="form-control" placeholder="Interest Rate" required>
                </div>
                <div class="form-group" style="display: flex; align-items: flex-end;">
                    <button type="button" class="btn btn-danger remove-allottee-btn">Remove</button>
                </div>
            </div>
        `;
        allotteeSection.appendChild(newAllottee);

        // Add event listeners to new inputs
        newAllottee.querySelectorAll('input').forEach(input => {
            input.addEventListener('input', updatePreview);
            input.addEventListener('change', updatePreview);
        });

        // Remove functionality
        newAllottee.querySelector('.remove-allottee-btn').addEventListener('click', function() {
            newAllottee.remove();
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
        const companyName = form.querySelector('[name="company_name"]').value || '________________';
        const cin = form.querySelector('[name="cin"]').value || '________________';
        const meetingDate = form.querySelector('[name="meeting_date"]').value;
        const meetingTime = form.querySelector('[name="meeting_time"]').value || '__________';
        const ncdNumber = form.querySelector('[name="ncd_number"]').value || '________________';
        const faceValue = form.querySelector('[name="face_value"]').value || '________________';
        const totalConsideration = form.querySelector('[name="total_consideration"]').value || '________________';
        const interestRate = form.querySelector('[name="interest_rate"]').value || '______';
        const tenure = form.querySelector('[name="tenure"]').value || '______';
        const directorName = form.querySelector('[name="director_name"]').value || '________________';
        const din = form.querySelector('[name="din"]').value || '________________';

        // Update preview text
        const elCompanyName = document.getElementById('prevCompanyName');
        const elCIN = document.getElementById('prevCIN');
        const elMeetingDate = document.getElementById('prevMeetingDate');
        const elMeetingTime = document.getElementById('prevMeetingTime');
        const elNCDNumber = document.getElementById('prevNCDNumber');
        const elFaceValue = document.getElementById('prevFaceValue');
        const elTotalConsideration = document.getElementById('prevTotalConsideration');
        const elInterestRate = document.getElementById('prevInterestRate');
        const elTenure = document.getElementById('prevTenure');
        const elFooterCompanyName = document.getElementById('footerCompanyName');
        const elFooterDirectorName = document.getElementById('footerDirectorName');
        const elFooterDIN = document.getElementById('footerDIN');

        if (elCompanyName) elCompanyName.textContent = companyName;
        if (elCIN) elCIN.textContent = cin;
        if (elNCDNumber) elNCDNumber.textContent = ncdNumber;
        if (elFaceValue) elFaceValue.textContent = faceValue;
        if (elTotalConsideration) elTotalConsideration.textContent = totalConsideration;
        if (elInterestRate) elInterestRate.textContent = interestRate;
        if (elTenure) elTenure.textContent = tenure;
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
