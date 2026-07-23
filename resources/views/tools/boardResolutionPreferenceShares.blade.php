@extends('tools.tool-master')
@section('title')
{{_('Board Resolution for    Issue and Allotment of Preference Shares on Private Placement Basis')}}
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
            <h1 class="hero-title">Board Resolution for  <span>   Issue and Allotment of Preference Shares on Private Placement Basis</span></h1>
            <p class="hero-subtitle">
                Generate a certified Board Resolution for     Issue and Allotment of Preference Shares on Private Placement Basis in under 60 seconds.
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
            <h2 class="form-title">Enter Company & Preference Share Details</h2>
            <p class="form-description">
                Fill in the details below to generate a Board Resolution for Issue and Allotment of Preference Shares on Private Placement Basis.
            </p>
        </div>

        <form id="preferenceSharesForm" method="POST" action="{{route('br.preference.shares') }}">
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

                <!-- Preference Share Details Section -->
                <div class="form-group full-width">
                    <label class="form-label" style="font-weight:600;color:#333;border-bottom:1px solid #eee;padding-bottom:8px;margin-bottom:12px;">Preference Share Details</label>
                </div>

                <div class="form-row">
                    <div class="form-group">
                        <label class="form-label">Number of Preference Shares <span class="required">*</span></label>
                        <input type="number" name="share_number" class="form-control" placeholder="Enter number of shares" required>
                    </div>

                    <div class="form-group">
                        <label class="form-label">Number in Words <span class="required">*</span></label>
                        <input type="text" name="share_number_words" class="form-control" placeholder="Enter number in words" required>
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-group">
                        <label class="form-label">Face Value per Share (Rs.) <span class="required">*</span></label>
                        <input type="text" name="face_value" class="form-control" placeholder="Enter face value" required>
                    </div>

                    <div class="form-group">
                        <label class="form-label">Dividend Rate (% p.a.) <span class="required">*</span></label>
                        <input type="text" name="dividend_rate" class="form-control" placeholder="Enter dividend rate" required>
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-group">
                        <label class="form-label">Tenure (Years) <span class="required">*</span></label>
                        <input type="text" name="tenure" class="form-control" placeholder="Enter tenure in years" required>
                    </div>

                    <div class="form-group">
                        <label class="form-label">Type of Preference Shares <span class="required">*</span></label>
                        <div class="select-wrapper">
                            <select name="share_type" class="form-control form-select" required>
                                <option value="">Select type</option>
                                <option value="Cumulative Redeemable">Cumulative Redeemable</option>
                                <option value="Non-Cumulative Redeemable">Non-Cumulative Redeemable</option>
                                <option value="Cumulative Convertible">Cumulative Convertible</option>
                                <option value="Non-Cumulative Convertible">Non-Cumulative Convertible</option>
                            </select>
                        </div>
                    </div>
                </div>

                <!-- Allottee Details Section -->
                <div class="form-group full-width">
                    <label class="form-label" style="font-weight:600;color:#333;border-bottom:1px solid #eee;padding-bottom:8px;margin-bottom:12px;">Allottee Details</label>
                </div>

                <div class="allottee-section" id="allotteeSection">
                    <div class="allottee-row" data-index="1">
                        <div class="form-row">
                            <div class="form-group">
                                <label class="form-label">Allottee Name <span class="required">*</span></label>
                                <input type="text" name="allottee_name[]" class="form-control" placeholder="Name of Allottee" required>
                            </div>
                            <div class="form-group">
                                <label class="form-label">No. of Shares <span class="required">*</span></label>
                                <input type="number" name="allottee_shares[]" class="form-control" placeholder="Number" required>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group">
                                <label class="form-label">Amount (Rs.) <span class="required">*</span></label>
                                <input type="text" name="allottee_amount[]" class="form-control" placeholder="Amount" required>
                            </div>
                            <div class="form-group">
                                <label class="form-label">Dividend Rate (% p.a.) <span class="required">*</span></label>
                                <input type="text" name="allottee_dividend[]" class="form-control" placeholder="Dividend Rate" required>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group">
                                <label class="form-label">Tenure <span class="required">*</span></label>
                                <input type="text" name="allottee_tenure[]" class="form-control" placeholder="Tenure" required>
                            </div>
                        </div>
                    </div>
                </div>
                <button type="button" class="btn btn-secondary mt-2" id="addAllotteeBtn">+ Add Another Allottee</button>

                <!-- Authorised Signatory Details -->
                <div class="form-group full-width">
                    <label class="form-label" style="font-weight:600;color:#333;border-bottom:1px solid #eee;padding-bottom:8px;margin-bottom:12px;margin-top:16px;">Authorised Signatory Details</label>
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
                        <p class="preview-subtitle">Board Resolution for Issue of Preference Shares</p>
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
                        <strong>SUBJECT:</strong> Issue and Allotment of Preference Shares on Private Placement Basis
                    </p>

                    <p class="certificate-paragraph">
                        <strong>RESOLVED THAT</strong> pursuant to the provisions of Sections 23, 42, 55, and 62 of the Companies Act, 2013, the consent of the Board be and is hereby accorded to issue and allot:
                    </p>

                    <p class="certificate-paragraph">
                        <strong id="prevShareNumber">________________</strong> Preference Shares of Rs. <strong id="prevFaceValue">______</strong>/- each<br>
                        Dividend Rate: <strong id="prevDividendRate">______</strong>% p.a.<br>
                        Tenure: <strong id="prevTenure">______</strong> years<br>
                        Type: <strong id="prevShareType">________________</strong>
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
            <h2 class="info-title">Board Resolution for Issue and Allotment of Preference Shares on Private Placement Basis</h2>
            <p class="info-subtitle">
                Corporate Finance Documentation for Indian Companies
            </p>
        </div>

        <!-- Introduction -->
        <div class="info-content">
            <h3 class="info-subheading">Introduction</h3>

            <p class="info-text">
                A Board Resolution for Issue and Allotment of Preference Shares on Private Placement
                Basis is a formal corporate document that records the Board of Directors' consent to
                issue preference shares to identified investors through the private placement route.
                Under the Companies Act, 2013, companies proposing to issue preference shares on a
                private placement basis must obtain prior board approval. Preference shares carry
                preferential rights over equity shares with respect to dividend payments and capital
                repayment upon winding up.
            </p>

            <p class="info-text">
                This resolution specifies the number of preference shares to be issued, the face
                value per share, the aggregate consideration, the dividend rate, tenure of the
                preference shares, and details of the allottees. The document authorises issuance of
                share certificates under the common seal of the company and filing of Form PAS-3
                (Return of Allotment) with the Registrar of Companies. Private placement of
                preference shares is commonly used by companies seeking to raise capital from select
                investors without the regulatory requirements of a public offer.
            </p>

            <!-- Benefits -->
            <h3 class="info-subheading">Benefits of Using a Standard Format</h3>

            <p class="info-text">
                Utilising a professionally drafted board resolution format ensures that all statutory
                requirements under the Companies Act, 2013 and the Companies (Share Capital and
                Debentures) Rules, 2014 are properly addressed. A ready-to-use template saves
                valuable time during board meetings, reduces the risk of procedural errors, and
                provides a consistent framework capturing allottee information, share particulars,
                dividend rates, and tenure.
            </p>

            <p class="info-text">
                Standardised formats ensure compliance with private placement regulations.
            </p>

            <!-- Relevance -->
            <h3 class="info-subheading">Relevance to Corporate Finance</h3>

            <p class="info-text">
                Issue of preference shares is a significant corporate finance activity. Following
                Company Registration, businesses may raise capital through various instruments
                including equity shares, preference shares, and debentures. Preference shares offer
                a middle ground between debt and equity, providing fixed returns to investors while
                not diluting voting control.
            </p>

            <p class="info-text">
                Companies must comply with provisions relating to private placement offers, ROC
                filing requirements, and maintenance of statutory registers. Post-allotment,
                companies should ensure their records are updated across all statutory registrations.
            </p>
        </div>

        <!-- Sample Format -->
        <div class="format-section">
            <h3 class="format-title">
                Board Resolution for Issue and Allotment of Preference Shares on Private Placement Basis – Sample Format
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
                <strong>SUBJECT: ISSUE AND ALLOTMENT OF PREFERENCE SHARES ON PRIVATE PLACEMENT BASIS</strong>
            </p>

            <p class="format-text">
                <strong>"RESOLVED THAT</strong> pursuant to the provisions of Sections 23, 42, 55, and 62 of the Companies Act, 2013 read with the Companies (Share Capital and Debentures) Rules, 2014, the Companies (Prospectus and Allotment of Securities) Rules, 2014, and such other applicable laws and rules (including any statutory modification or re-enactment thereof for the time being in force), and in accordance with the Memorandum and Articles of Association of the Company, the consent of the Board of Directors be and is hereby accorded to issue and allot fully paid-up Preference Shares of the Company as detailed below:
            </p>

            <p class="format-text">
                <strong>Number of Preference Shares:</strong> ____________ (________________ in words)
            </p>

            <p class="format-text">
                <strong>Face Value per Share:</strong> Rs. ____________/-
            </p>

            <p class="format-text">
                <strong>Dividend Rate:</strong> ____________% per annum
            </p>

            <p class="format-text">
                <strong>Tenure:</strong> ____________ years from the date of allotment
            </p>

            <p class="format-text">
                <strong>Type:</strong> Cumulative/Non-Cumulative, Redeemable/Convertible (specify)
            </p>

            <p class="format-text">
                The Preference Shares shall be allotted to the following persons:
            </p>

            <table class="format-table" style="width:100%;border-collapse:collapse;margin:16px 0;">
                <thead>
                    <tr>
                        <th style="border:1px solid #ccc;padding:8px;">Sr. No.</th>
                        <th style="border:1px solid #ccc;padding:8px;">Name of Allottee</th>
                        <th style="border:1px solid #ccc;padding:8px;">No. of Preference Shares</th>
                        <th style="border:1px solid #ccc;padding:8px;">Amount (Rs.)</th>
                        <th style="border:1px solid #ccc;padding:8px;">Dividend Rate (p.a.)</th>
                        <th style="border:1px solid #ccc;padding:8px;">Tenure</th>
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
                        <td style="border:1px solid #ccc;padding:8px;" colspan="2"><strong>Total</strong></td>
                        <td style="border:1px solid #ccc;padding:8px;"></td>
                        <td style="border:1px solid #ccc;padding:8px;"></td>
                        <td style="border:1px solid #ccc;padding:8px;"></td>
                        <td style="border:1px solid #ccc;padding:8px;"></td>
                    </tr>
                </tbody>
            </table>

            <p class="format-text">
                <strong>RESOLVED FURTHER THAT</strong> any Director of the Company be and is hereby authorised to sign and file Form PAS-3 (Return of Allotment) with the Registrar of Companies within the prescribed time.
            </p>

            <p class="format-text">
                <strong>RESOLVED FURTHER THAT</strong> the share certificates in respect of the aforesaid Preference Shares be issued to the respective allottees under the Common Seal of the Company (if applicable) and under the signatures of the Directors of the Company.
            </p>

            <p class="format-text">
                <strong>RESOLVED FURTHER THAT</strong> any Director of the Company be and is hereby authorised to:
            </p>

            <ul class="format-list">
                <li>Make necessary entries in the Register of Members and other statutory registers;</li>
                <li>Execute all documents, agreements, and writings as may be required;</li>
                <li>File requisite e-forms with the Registrar of Companies within the prescribed time;</li>
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
                    1. Can a board resolution for issue and allotment of Preference Shares on Private Placement basis be passed without a physical or virtual board meeting?
                </h4>
                <p class="faq-answer">
                    While the Companies Act permits certain resolutions to be passed by circulation,
                    matters involving securities issuance typically require deliberation at a duly
                    convened board meeting. If the Articles of Association permit written resolutions
                    for such matters, it may be possible. However, standard practice recommends
                    conducting a proper board meeting for thorough discussion of share allotment
                    terms and compliance requirements.
                </p>
            </div>

            <div class="faq-item">
                <h4 class="faq-question">
                    2. Who can be considered as an authorized signatory for the board resolution for issue and allotment of Preference Shares on Private Placement basis?
                </h4>
                <p class="faq-answer">
                    Any director present at the board meeting or the company secretary (if appointed)
                    may be authorised to sign the certified true copy of the resolution. The Board
                    typically designates directors to file Form PAS-3 with the ROC, issue share
                    certificates, make entries in the Register of Members, and represent the company
                    in all matters related to the allotment.
                </p>
            </div>

            <div class="faq-item">
                <h4 class="faq-question">
                    3. Are there any specific requirements for the format of the board resolution for issue and allotment of Preference Shares on Private Placement basis?
                </h4>
                <p class="faq-answer">
                    The resolution should reference Sections 23, 42, 55, and 62 of the Companies Act,
                    2013 and the relevant rules. It must specify the number of preference shares, face
                    value, dividend rate, tenure, type (cumulative/non-cumulative, redeemable/
                    convertible), and complete allottee details. The resolution should authorise Form
                    PAS-3 filing, share certificate issuance, and statutory register entries.
                </p>
            </div>

            <div class="faq-item">
                <h4 class="faq-question">
                    4. Does the Board Resolution for issue and allotment of Preference Shares on Private Placement basis need to be certified by a professional?
                </h4>
                <p class="faq-answer">
                    There is no statutory requirement for the board resolution to be certified by an
                    external professional. The certified true copy may be signed by any director or
                    the company secretary. However, for filing Form PAS-3 with the ROC, certification
                    by a practising Chartered Accountant, Company Secretary, or Cost Accountant may
                    be required as per form-specific requirements.
                </p>
            </div>

            <div class="faq-item">
                <h4 class="faq-question">
                    5. Can a board resolution for issue and allotment of Preference Shares on Private Placement basis be passed without convening a board meeting?
                </h4>
                <p class="faq-answer">
                    Securities issuance matters typically require deliberation at a duly convened
                    board meeting. While the Articles of Association may permit certain resolutions
                    by circulation, it is advisable to conduct a proper board meeting for matters
                    involving share allotment to ensure thorough discussion, due consideration of
                    terms, and proper recording in the minutes of the meeting.
                </p>
            </div>

            <div class="faq-item">
                <h4 class="faq-question">
                    6. Who can certify a board resolution for issue and allotment of Preference Shares on Private Placement basis?
                </h4>
                <p class="faq-answer">
                    Any director of the company or the company secretary (if appointed) may certify
                    the board resolution. The person certifying should have been present at the
                    meeting or have access to the minutes. The certified true copy confirms that the
                    resolution was duly passed at a validly convened board meeting and accurately
                    reflects the decisions recorded in the minutes.
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

    const form = document.getElementById('preferenceSharesForm');
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
                    <label class="form-label">No. of Shares <span class="required">*</span></label>
                    <input type="number" name="allottee_shares[]" class="form-control" placeholder="Number" required>
                </div>
            </div>
            <div class="form-row">
                <div class="form-group">
                    <label class="form-label">Amount (Rs.) <span class="required">*</span></label>
                    <input type="text" name="allottee_amount[]" class="form-control" placeholder="Amount" required>
                </div>
                <div class="form-group">
                    <label class="form-label">Dividend Rate (% p.a.) <span class="required">*</span></label>
                    <input type="text" name="allottee_dividend[]" class="form-control" placeholder="Dividend Rate" required>
                </div>
            </div>
            <div class="form-row">
                <div class="form-group">
                    <label class="form-label">Tenure <span class="required">*</span></label>
                    <input type="text" name="allottee_tenure[]" class="form-control" placeholder="Tenure" required>
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
        const shareNumber = form.querySelector('[name="share_number"]').value || '________________';
        const faceValue = form.querySelector('[name="face_value"]').value || '______';
        const dividendRate = form.querySelector('[name="dividend_rate"]').value || '______';
        const tenure = form.querySelector('[name="tenure"]').value || '______';
        const shareType = form.querySelector('[name="share_type"]').value || '________________';
        const directorName = form.querySelector('[name="director_name"]').value || '________________';
        const din = form.querySelector('[name="din"]').value || '________________';

        // Update preview text
        const elCompanyName = document.getElementById('prevCompanyName');
        const elCIN = document.getElementById('prevCIN');
        const elMeetingDate = document.getElementById('prevMeetingDate');
        const elMeetingTime = document.getElementById('prevMeetingTime');
        const elShareNumber = document.getElementById('prevShareNumber');
        const elFaceValue = document.getElementById('prevFaceValue');
        const elDividendRate = document.getElementById('prevDividendRate');
        const elTenure = document.getElementById('prevTenure');
        const elShareType = document.getElementById('prevShareType');
        const elFooterCompanyName = document.getElementById('footerCompanyName');
        const elFooterDirectorName = document.getElementById('footerDirectorName');
        const elFooterDIN = document.getElementById('footerDIN');

        if (elCompanyName) elCompanyName.textContent = companyName;
        if (elCIN) elCIN.textContent = cin;
        if (elShareNumber) elShareNumber.textContent = shareNumber;
        if (elFaceValue) elFaceValue.textContent = faceValue;
        if (elDividendRate) elDividendRate.textContent = dividendRate;
        if (elTenure) elTenure.textContent = tenure;
        if (elShareType) elShareType.textContent = shareType;
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
