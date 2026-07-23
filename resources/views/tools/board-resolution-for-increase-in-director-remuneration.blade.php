@extends('tools.tool-master')
@section('title')
{{_('Board Resolution for Increase in Director Remuneration')}}
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
            <h1 class="hero-title">Board Resolution for <span>Increase in Director Remuneration</span></h1>
            <p class="hero-subtitle">
                Generate a certified Board Resolution for director remuneration increment in under 60 seconds.
            </p>
        </div>
    </div>

    <!-- Main Container -->
    <div class="download-format-container">
        <div class="alert-wrapper" id="alertContainer"></div>

        <div class="download-format-grid">
            <!-- Form Section -->
            <div class="form-card">
                <div class="form-header">
                    <div class="form-step-indicator">
                        <span class="step-dot active"></span>
                    </div>
                    <h2 class="form-title">Enter Company & Director Details</h2>
                    <p class="form-description">
                        Fill in the details below to generate the Board Resolution.
                    </p>
                </div>

              <form id="directorRemunerationForm" method="POST" action="{{ route('br.director.remuneration') }}">
    @csrf
    <div class="form-grid">

        <!-- Company Details -->
        <div class="form-group full-width">
            <label class="form-label">Company Name <span class="required">*</span></label>
            <input type="text" name="company_name" class="form-control" placeholder="Enter company name" required>
        </div>

        <div class="form-group full-width">
            <label class="form-label">CIN</label>
            <input type="text" name="cin" class="form-control" placeholder="Enter CIN">
        </div>

        <div class="form-group full-width">
            <label class="form-label">Registered Office Address</label>
            <textarea name="registered_office" class="form-control" placeholder="Enter registered office address"></textarea>
        </div>

        <div class="form-group full-width">
            <label class="form-label">Email</label>
            <input type="email" name="email" class="form-control" placeholder="Enter email">
        </div>

        <!-- Director Details -->
        <div class="form-row">
            <div class="form-group">
                <label class="form-label">Director Name <span class="required">*</span></label>
                <input type="text" name="director_name" class="form-control" placeholder="Enter director name" required>
            </div>

            <div class="form-group">
                <label class="form-label">Director DIN <span class="required">*</span></label>
                <input type="text" name="director_din" class="form-control" placeholder="Enter DIN" required>
            </div>
        </div>

        <div class="form-group full-width">
            <label class="form-label">Director Designation <span class="required">*</span></label>
            <input type="text" name="director_desig" class="form-control" placeholder="Enter designation" required>
        </div>

        <!-- Authorised Person -->
        <div class="form-row">
            <div class="form-group">
                <label class="form-label">Authorised Person <span class="required">*</span></label>
                <input type="text" name="authorized_person" class="form-control" placeholder="Enter authorised person" required>
            </div>

            <div class="form-group">
                <label class="form-label">Authorised Person Designation <span class="required">*</span></label>
                <input type="text" name="authorized_desig" class="form-control" placeholder="Enter designation" required>
            </div>
        </div>

        <!-- Remuneration Details -->
        <div class="form-row">
            <div class="form-group">
                <label class="form-label">Basic Salary (per month)</label>
                <input type="text" name="basic_salary" class="form-control" placeholder="Enter basic salary">
            </div>

            <div class="form-group">
                <label class="form-label">Effective Date of Salary</label>
                <input type="date" name="basic_salary_effective" class="form-control">
            </div>
        </div>

        <div class="form-row">
            <div class="form-group">
                <label class="form-label">Commission (%)</label>
                <input type="text" name="commission_percent" class="form-control" placeholder="Enter commission percent">
            </div>

            <div class="form-group">
                <label class="form-label">Financial Year (Commission Effective)</label>
                <input type="text" name="commission_fy" class="form-control" placeholder="Enter FY for commission">
            </div>
        </div>

        <div class="form-group full-width">
            <label class="form-label">House Rent Allowance / Accommodation</label>
            <input type="text" name="hra" class="form-control" placeholder="Enter HRA or accommodation details">
        </div>

        <div class="form-group full-width">
            <label class="form-label">Medical Benefits</label>
            <input type="text" name="medical" class="form-control" placeholder="Enter medical benefits details">
        </div>

        <div class="form-group full-width">
            <label class="form-label">Leave Travel Allowance</label>
            <input type="text" name="lta" class="form-control" placeholder="Enter LTA details">
        </div>

        <div class="form-group full-width">
            <label class="form-label">Provident Fund & Gratuity</label>
            <input type="text" name="pf_gratuity" class="form-control" placeholder="Enter PF & Gratuity details">
        </div>

        <div class="form-group full-width">
            <label class="form-label">Vehicle & Communication</label>
            <input type="text" name="vehicle" class="form-control" placeholder="Enter vehicle & communication details">
        </div>

        <div class="form-group full-width">
            <label class="form-label">Other Perquisites</label>
            <input type="text" name="other_perquisites" class="form-control" placeholder="Enter other perquisites">
        </div>

        <!-- Resolution Details -->
        <div class="form-row">
            <div class="form-group">
                <label class="form-label">Place <span class="required">*</span></label>
                <input type="text" name="place" class="form-control" placeholder="Enter place" required>
            </div>

            <div class="form-group">
                <label class="form-label">Resolution Date <span class="required">*</span></label>
                <input type="date" name="resolution_date" class="form-control" required>
            </div>
        </div>

    </div>

    <button type="submit" class="btn-submit" id="downloadDocBtn">
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
                    <div class="certificate-preview" id="previewCertificate">
                        <div class="certificate-watermark">PREVIEW</div>

                        <div class="certificate-doc-header">
                            <h2 class="certificate-doc-title">CERTIFIED TRUE COPY OF THE BOARD RESOLUTION</h2>
                            <p class="certificate-doc-subtitle">Passed at the Meeting of the Board of Directors</p>
                        </div>

                        <div class="certificate-body">
                            <p><strong id="prevCompanyName">________________</strong></p>
                            <p>CIN: <span id="prevCIN">________________</span></p>
                            <p id="prevRegisteredOffice">________________</p>
                            <p>Email: <span id="prevEmail">________________</span></p>

                            <p>Subject: Revision of Remuneration of <strong id="prevDirectorName">________________</strong>, DIN: <span id="prevDirectorDIN">________________</span>, <span id="prevDirectorDesig">________________</span></p>

                            <p>
                                RESOLVED THAT the Board approves the revised remuneration of <strong id="prevDirectorName2">________________</strong> as per the entered details.
                            </p>

                            <ul>
                                <li>Basic Salary: Rs. <span id="prevBasicSalary">________________</span> from <span id="prevBasicSalaryEff">________________</span></li>
                                <li>Commission: <span id="prevCommission">________________</span>% effective from FY <span id="prevCommissionFY">________________</span></li>
                                <li>HRA/Accommodation: <span id="prevHRA">________________</span></li>
                                <li>Medical: <span id="prevMedical">________________</span></li>
                                <li>LTA: <span id="prevLTA">________________</span></li>
                                <li>PF & Gratuity: <span id="prevPF">________________</span></li>
                                <li>Vehicle & Communication: <span id="prevVehicle">________________</span></li>
                                <li>Other Perquisites: <span id="prevOther">________________</span></li>
                            </ul>

                            <p>For and on behalf of <strong id="prevCompanyName2">________________</strong></p>
                            <p>Authorized Signatory: <strong id="prevAuthorizedPerson">________________</strong>, <span id="prevAuthorizedDesig">________________</span></p>
                            <p>Place: <span id="prevPlace">________________</span></p>
                            <p>Date: <span id="prevResolutionDate">________________</span></p>
                        </div>
                    </div>
                </div>
            </div>

            </div>
            <div class="info-section">
    <div class="info-card">
        <div class="info-header">
            <span class="info-header-badge">Learn More</span>
            <h2 class="info-title">
                What is a Board Resolution for Increase in Director Remuneration?
            </h2>
            <p class="info-subtitle">
                Professional Format Guide for Indian Companies
            </p>
        </div>

        <div class="info-content">
            <p class="info-text">
                A Board Resolution for Increase in Director Remuneration is a formal corporate
                document that records the decision of a company's Board of Directors to revise
                the compensation payable to a director, managing director, or whole-time director.
            </p>

            <p class="info-text">
                Under Section 197 of the Companies Act, 2013, managerial remuneration is subject
                to statutory limits and must be approved through proper corporate procedures. The
                total remuneration payable to all directors cannot exceed eleven per cent of the
                net profits of the company, with specific sub-limits applicable to different
                categories of directors.
            </p>

            <p class="info-text">
                This resolution serves as statutory evidence of Board approval and ensures
                compliance with Schedule V of the Companies Act, 2013. It is essential during
                annual compensation reviews, performance-based increments, or restructuring
                of remuneration packages.
            </p>
        </div>

        <div class="format-section">
            <h3 class="format-title">
                Board Resolution for Increase in Director Remuneration – Sample Format
            </h3>

            <p class="format-text">[To be printed on Company Letterhead]</p>

            <p class="format-text">Company Name: _______________________________</p>
            <p class="format-text">CIN: _______________________________</p>
            <p class="format-text">Registered Office Address: _______________________________</p>
            <p class="format-text">Email: _______________________________</p>

            <p class="format-text">
                <strong>CERTIFIED TRUE COPY OF THE BOARD RESOLUTION</strong>
            </p>

            <p class="format-text">
                Passed at the Meeting of the Board of Directors held on __________ (Date)
                at __________ (Time) at the Registered Office of the Company.
            </p>

            <p class="format-text">
                <strong>Subject:</strong> Revision of Remuneration of Mr./Ms. __________ (Name),
                DIN: __________, __________ (Designation) of the Company
            </p>

            <p class="format-text">
                <strong>RESOLVED THAT</strong> pursuant to Section 197 read with Part I and
                Section I of Part II of Schedule V of the Companies Act, 2013, approval of
                the Board be and is hereby accorded for payment of revised remuneration to
                Mr./Ms. __________ (Name), holding DIN: __________, __________ (Designation)
                of the Company on the following terms and conditions:
            </p>

            <ul class="format-text">
                <li>Basic Salary: Rs. __________ per month with effect from __________</li>
                <li>Commission: Not exceeding __________% of net profits in FY __________</li>
                <li>House Rent Allowance/Accommodation: As per Company policy</li>
                <li>Medical Benefits: Reimbursement as per Company rules, ceiling Rs. __________ per annum</li>
                <li>Leave Travel Allowance: As per Company policy</li>
                <li>Provident Fund & Gratuity: As applicable</li>
                <li>Vehicle & Communication: Company car and mobile facilities for official use</li>
                <li>Other Perquisites: As determined by the Board subject to Section 197 ceiling</li>
            </ul>

            <p class="format-text">
                <strong>RESOLVED FURTHER THAT</strong> in the event of absence or inadequacy
                of profits in any financial year, the remuneration shall not exceed limits under
                Section II of Part II of Schedule V.
            </p>

            <p class="format-text">
                <strong>RESOLVED FURTHER THAT</strong> the Board is authorised to vary, alter,
                or modify the terms of remuneration within statutory limits.
            </p>

            <p class="format-text">
                <strong>RESOLVED FURTHER THAT</strong> Mr./Ms. __________ (Name),
                __________ (Designation), be authorised to do all acts to give effect to this
                resolution including filing forms with Registrar of Companies.
            </p>

            <p class="format-text">
                For and on behalf of __________ (Company Name)<br><br>
                Signature: _______________________________<br>
                Name: _______________________________<br>
                Designation: _______________________________<br>
                DIN: _______________________________<br>
                Date: _______________________________<br>
                Place: _______________________________
            </p>
        </div>
    </div>
</div>
<div class="faq-section">
    <div class="info-header">
        <h2 class="info-title">Frequently Asked Questions</h2>
    </div>

    <div class="faq-grid">
        <div class="faq-item">
            <h4 class="faq-question">
                Who can be an authorised signatory for the resolution?
            </h4>
            <p class="faq-answer">
                Usually the Chairperson, Company Secretary, or another director not interested
                in the resolution.
            </p>
        </div>

        <div class="faq-item">
            <h4 class="faq-question">
                Is signature of all directors mandatory?
            </h4>
            <p class="faq-answer">
                No. Only the Chairperson or an authorised director certifies the true copy.
            </p>
        </div>

        <div class="faq-item">
            <h4 class="faq-question">
                Which resolution is required for increase in director remuneration?
            </h4>
            <p class="faq-answer">
                A Board Resolution under Section 197 & Schedule V; Special Resolution if limits exceed statutory cap.
            </p>
        </div>

        <div class="faq-item">
            <h4 class="faq-question">
                Does it need professional certification?
            </h4>
            <p class="faq-answer">
                Not mandatory, but may be required by banks or ROC.
            </p>
        </div>

        <div class="faq-item">
            <h4 class="faq-question">
                Can it be passed without convening a Board Meeting?
            </h4>
            <p class="faq-answer">
                Generally passed at a Board Meeting; circulation resolution may apply for routine approvals.
            </p>
        </div>
    </div>
</div>

        </div>
<script>
document.addEventListener('DOMContentLoaded', function() {
    const form = document.getElementById('directorRemunerationForm');

    const updatePreview = () => {
        const get = (name) => form.querySelector(`[name=${name}]`).value || '________________';
        
        document.getElementById('prevCompanyName').innerText = get('company_name');
        document.getElementById('prevCompanyName2').innerText = get('company_name');
        document.getElementById('prevCIN').innerText = get('cin');
        document.getElementById('prevRegisteredOffice').innerText = get('registered_office');
        document.getElementById('prevEmail').innerText = get('email');

        document.getElementById('prevDirectorName').innerText = get('director_name');
        document.getElementById('prevDirectorName2').innerText = get('director_name');
        document.getElementById('prevDirectorDIN').innerText = get('director_din');
        document.getElementById('prevDirectorDesig').innerText = get('director_desig');

        document.getElementById('prevBasicSalary').innerText = get('basic_salary');
        document.getElementById('prevBasicSalaryEff').innerText = get('basic_salary_effective');
        document.getElementById('prevCommission').innerText = get('commission_percent');
        document.getElementById('prevCommissionFY').innerText = get('commission_fy');
        document.getElementById('prevHRA').innerText = get('hra');
        document.getElementById('prevMedical').innerText = get('medical');
        document.getElementById('prevLTA').innerText = get('lta');
        document.getElementById('prevPF').innerText = get('pf_gratuity');
        document.getElementById('prevVehicle').innerText = get('vehicle');
        document.getElementById('prevOther').innerText = get('other_perquisites');

        document.getElementById('prevAuthorizedPerson').innerText = get('authorized_person');
        document.getElementById('prevAuthorizedDesig').innerText = get('authorized_desig');
        document.getElementById('prevPlace').innerText = get('place');
        document.getElementById('prevResolutionDate').innerText = get('resolution_date');
    }

    form.addEventListener('input', updatePreview);
});
</script>



@endsection
