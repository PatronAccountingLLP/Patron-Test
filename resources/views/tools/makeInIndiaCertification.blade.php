@extends('tools.tool-master')
@section('title')
{{_(' Self-Certification under Make in India')}}
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
            <h1 class="hero-title"> <span> Self-Certification under Make in India</span></h1>
            <p class="hero-subtitle">
                Generate a certified Self-Certification under Make in India in under 60 seconds.
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
            <h2 class="form-title">Enter Make in India Certification Details</h2>
            <p class="form-description">
                Fill in the details below to generate a Self‑Certification under Make in India Order.
            </p>
        </div>

        <form id="makeInIndiaForm" method="POST" action="{{ route('br.makeinindia') }}">
            @csrf

            <div class="form-grid">
                <!-- Bidder Details -->
                <div class="form-group full-width">
                    <label class="form-label">Name of Bidder/Company <span class="required">*</span></label>
                    <input type="text" name="company_name" class="form-control" placeholder="Enter company name" required>
                </div>

                <div class="form-group full-width">
                    <label class="form-label">GeM Bid No. / Tender No. <span class="required">*</span></label>
                    <input type="text" name="bid_no" class="form-control" placeholder="Enter bid or tender number" required>
                </div>

                <div class="form-row">
                    <div class="form-group">
                        <label class="form-label">Local Content Percentage (%) <span class="required">*</span></label>
                        <input type="number" name="local_content_percent" class="form-control" placeholder="e.g., 50" step="any" required>
                    </div>
                    <div class="form-group">
                        <label class="form-label">Place (for certification) <span class="required">*</span></label>
                        <input type="text" name="place" class="form-control" placeholder="City / Place" required>
                    </div>
                </div>

                <!-- Local Value Addition Table (3 rows) -->
                <div class="form-group full-width">
                    <label class="form-label">Local Value Addition Details <span class="required">*</span></label>
                    <div class="local-addition-table">
                        <div class="table-row header-row">
                            <div class="table-cell">S.No.</div>
                            <div class="table-cell">Manufacturing/Service Location Address</div>
                            <div class="table-cell">Nature of Value Addition</div>
                            <div class="table-cell">Percentage Contribution (%)</div>
                        </div>
                        <div class="table-row">
                            <div class="table-cell">1</div>
                            <div class="table-cell"><input type="text" name="location1" class="form-control" placeholder="Address" required></div>
                            <div class="table-cell"><input type="text" name="nature1" class="form-control" placeholder="Nature" required></div>
                            <div class="table-cell"><input type="text" name="percent1" class="form-control" placeholder="%" required></div>
                        </div>
                        <div class="table-row">
                            <div class="table-cell">2</div>
                            <div class="table-cell"><input type="text" name="location2" class="form-control" placeholder="Address"></div>
                            <div class="table-cell"><input type="text" name="nature2" class="form-control" placeholder="Nature"></div>
                            <div class="table-cell"><input type="text" name="percent2" class="form-control" placeholder="%"></div>
                        </div>
                        <div class="table-row">
                            <div class="table-cell">3</div>
                            <div class="table-cell"><input type="text" name="location3" class="form-control" placeholder="Address"></div>
                            <div class="table-cell"><input type="text" name="nature3" class="form-control" placeholder="Nature"></div>
                            <div class="table-cell"><input type="text" name="percent3" class="form-control" placeholder="%"></div>
                        </div>
                    </div>
                </div>

                <!-- Authorised Signatory -->
                <div class="form-row">
                    <div class="form-group">
                        <label class="form-label">Authorised Signatory Name <span class="required">*</span></label>
                        <input type="text" name="signatory_name" class="form-control" placeholder="Enter name" required>
                    </div>
                    <div class="form-group">
                        <label class="form-label">Designation <span class="required">*</span></label>
                        <input type="text" name="designation" class="form-control" placeholder="e.g., Director, Proprietor" required>
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-group">
                        <label class="form-label">Date of Certification <span class="required">*</span></label>
                        <input type="date" name="cert_date" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label class="form-label">Company Seal/Stamp (Optional)</label>
                        <input type="text" name="seal" class="form-control" placeholder="If applicable">
                    </div>
                </div>
            </div>

            <button type="submit" class="btn-submit" id="downloadPdfBtn">
                <span class="btn-text">Generate & Download Certificate</span>
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
                        <p class="preview-subtitle">Self-Certification under Make in India Order</p>
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
                    <h2 class="certificate-doc-title">CERTIFICATE</h2>
                    <p class="certificate-doc-subtitle">
                        (As per Public Procurement (Preference to Make in India) Order and its amendments)
                    </p>
                </div>

                <div class="certificate-body">
                    <p class="certificate-paragraph">
                        In compliance with the Government of India Public Procurement (Preference to Make in India) Order and its subsequent amendments, we hereby certify that we, M/s <strong id="previewCompany">________________</strong>, are a Local Supplier meeting the requirement of minimum local content as defined under the said Order.
                    </p>

                    <p class="certificate-paragraph">
                        We confirm that the local content in the goods/services offered against GeM Bid No./Tender No.: <strong id="previewBidNo">________________</strong> is <strong id="previewLocalPercent">__________</strong>% (percentage of local content), which meets or exceeds the minimum local content requirement prescribed for this procurement.
                    </p>

                    <p class="certificate-paragraph">
                        <strong>Details of Location(s) at which Local Value Addition is Made:</strong>
                    </p>
                    <div class="preview-table">
                        <div class="table-row header-row">
                            <div class="table-cell">S.No.</div>
                            <div class="table-cell">Manufacturing/Service Location Address</div>
                            <div class="table-cell">Nature of Value Addition</div>
                            <div class="table-cell">Percentage Contribution</div>
                        </div>
                        <div class="table-row">
                            <div class="table-cell">1</div>
                            <div class="table-cell" id="previewLoc1">________________</div>
                            <div class="table-cell" id="previewNature1">________________</div>
                            <div class="table-cell" id="previewPerc1">________________</div>
                        </div>
                        <div class="table-row">
                            <div class="table-cell">2</div>
                            <div class="table-cell" id="previewLoc2">________________</div>
                            <div class="table-cell" id="previewNature2">________________</div>
                            <div class="table-cell" id="previewPerc2">________________</div>
                        </div>
                        <div class="table-row">
                            <div class="table-cell">3</div>
                            <div class="table-cell" id="previewLoc3">________________</div>
                            <div class="table-cell" id="previewNature3">________________</div>
                            <div class="table-cell" id="previewPerc3">________________</div>
                        </div>
                    </div>

                    <p class="certificate-paragraph">
                        We understand and acknowledge that false declarations shall constitute a breach of the Code of Integrity under Rule 175(1)(i)(h) of the General Financial Rules, for which a bidder or its successors may be debarred for up to two years as per Rule 151(iii) of the General Financial Rules, along with such other actions as may be permissible under law.
                    </p>

                    <p class="certificate-paragraph">
                        We hereby declare that the information provided above is true and correct to the best of our knowledge and belief, and we accept full responsibility for the accuracy of this self-certification.
                    </p>

                    <div class="certificate-signature">
                        <p>For <strong id="footerCompany">________________</strong></p>
                        <p><strong>Signature:</strong> _________________________<br>
                        <strong>Name of Authorised Signatory:</strong> <span id="previewSignatoryName">________________</span><br>
                        <strong>Designation:</strong> <span id="previewDesignation">________________</span><br>
                        <strong>Company Seal/Stamp:</strong> <span id="previewSeal">________________</span><br>
                        <strong>Date:</strong> <span id="previewDate">________________</span><br>
                        <strong>Place:</strong> <span id="previewPlace">________________</span></p>
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
            <span class="info-header-badge">Public Procurement (Preference to Make in India) Order</span>
            <h2 class="info-title">Self-Certification under Make in India</h2>
            <p class="info-subtitle">
                Official Declaration Format for Government Procurement
            </p>
        </div>

        <!-- Introduction -->
        <div class="info-content">
            <h3 class="info-subheading">Introduction</h3>

            <p class="info-text">
                The Self-Certification under Make in India is a mandatory declaration required from suppliers participating in government procurement processes under the Public Procurement (Preference to Make in India) Order. This certification confirms that the bidder qualifies as a "local supplier" by meeting the prescribed minimum local content requirements for the goods or services being procured. The Government of India has implemented this policy to promote domestic manufacturing and encourage indigenous production.
            </p>

            <p class="info-text">
                This certificate is essential for businesses participating in tenders floated through the Government e-Marketplace (GeM) portal and other government procurement channels. Suppliers, manufacturers, and vendors bidding for government contracts must submit this self-certification to claim purchase preference or demonstrate eligibility under the Make in India policy. The certification includes details of local value addition, manufacturing location, and an acknowledgement of the consequences of false declarations under the General Financial Rules.
            </p>

            <!-- Benefits -->
            <h3 class="info-subheading">Benefits of Using a Standard Format</h3>

            <p class="info-text">
                Utilising a professionally structured self-certification format ensures that all mandatory declarations required under the Public Procurement Order are accurately captured. A standardised template reduces the risk of non-compliance or bid rejection, expedites the documentation process, and demonstrates the bidder's understanding of procurement regulations. This approach supports successful participation in government tenders and maintains credibility with procuring authorities.
            </p>

            <!-- Relevance -->
            <h3 class="info-subheading">Relevance to Business Registrations</h3>

            <p class="info-text">
                Businesses participating in government procurement are typically required to have completed Company Registration and possess a valid GST Registration. The GST Registration certificate is often requested as supporting documentation to verify the legal status and tax compliance of the bidding entity.
            </p>

            <p class="info-text">
                Entities without proper business registration may face challenges in demonstrating their eligibility as local suppliers under the Make in India framework. Ensuring all foundational registrations are in place is essential before participating in government tenders.
            </p>
        </div>

        <!-- Sample Format -->
        <div class="format-section">
            <h3 class="format-title">
                Self-Certification under Make in India Order - Sample Format
            </h3>

            <p class="format-text">
                <em>(As per Public Procurement (Preference to Make in India) Order and its amendments)</em>
            </p>

            <p class="format-text"><strong>CERTIFICATE</strong></p>

            <p class="format-text">
                In compliance with the Government of India Public Procurement (Preference to Make in India) Order and its subsequent amendments, we hereby certify that we, M/s _______________________________________ (Name of the Bidder/Company), are a Local Supplier meeting the requirement of minimum local content as defined under the said Order.
            </p>

            <p class="format-text">
                We confirm that the local content in the goods/services offered against GeM Bid No./Tender No.: _______________________________________ is __________ % (percentage of local content), which meets or exceeds the minimum local content requirement prescribed for this procurement.
            </p>

            <p class="format-text">
                <strong>Details of Location(s) at which Local Value Addition is Made:</strong>
            </p>

            <p class="format-text">
                S.No. &nbsp;&nbsp;&nbsp; Manufacturing/Service Location Address &nbsp;&nbsp;&nbsp; Nature of Value Addition &nbsp;&nbsp;&nbsp; Percentage Contribution
            </p>

            <p class="format-text">1.</p>
            <p class="format-text">2.</p>
            <p class="format-text">3.</p>

            <p class="format-text">
                We understand and acknowledge that false declarations shall constitute a breach of the Code of Integrity under Rule 175(1)(i)(h) of the General Financial Rules, for which a bidder or its successors may be debarred for up to two years as per Rule 151(iii) of the General Financial Rules, along with such other actions as may be permissible under law.
            </p>

            <p class="format-text">
                We hereby declare that the information provided above is true and correct to the best of our knowledge and belief, and we accept full responsibility for the accuracy of this self-certification.
            </p>

            <p class="format-text">
                For _________________________________ (Name of Bidder/Company)
            </p>

            <p class="format-text">
                <strong>Signature:</strong> _______________________________________
            </p>

            <p class="format-text">
                <strong>Name of Authorised Signatory:</strong> _______________________________________
            </p>

            <p class="format-text">
                <strong>Designation:</strong> _______________________________________
            </p>

            <p class="format-text">
                <strong>Company Seal/Stamp:</strong> _______________________________________
            </p>

            <p class="format-text">
                <strong>Date:</strong> _______________________________________
            </p>

            <p class="format-text">
                <strong>Place:</strong> _______________________________________
            </p>
        </div>

        <!-- FAQ -->
        <div class="faq-section">
            <h3 class="faq-title">Frequently Asked Questions</h3>

            <div class="faq-item">
                <h4 class="faq-question">
                    1. What is the Make in India Self-Certification?
                </h4>
                <p class="faq-answer">
                    The Make in India Self-Certification is a declaration submitted by bidders participating in government procurement to confirm their status as a "local supplier" under the Public Procurement (Preference to Make in India) Order. It certifies that the goods or services offered meet the prescribed minimum local content requirements, enabling the bidder to claim purchase preference in government tenders floated through GeM and other procurement channels.
                </p>
            </div>

            <div class="faq-item">
                <h4 class="faq-question">
                    2. Who is required to submit the Make in India Self-Certification?
                </h4>
                <p class="faq-answer">
                    All bidders participating in government procurement who wish to claim purchase preference as a local supplier under the Make in India policy must submit this self-certification. This includes manufacturers, suppliers, and service providers bidding for contracts through the Government e-Marketplace (GeM) portal or other government tender processes where the Public Procurement Order applies.
                </p>
            </div>

            <div class="faq-item">
                <h4 class="faq-question">
                    3. What are the consequences of submitting a false Make in India Self-Certification?
                </h4>
                <p class="faq-answer">
                    Submitting a false declaration constitutes a breach of the Code of Integrity under the General Financial Rules. The consequences may include debarment of the bidder or its successors from participating in government procurement for up to two years, along with other legal actions permissible under law. Additionally, any contract awarded based on false certification may be terminated, and the bidder may be blacklisted.
                </p>
            </div>

            <div class="faq-item">
                <h4 class="faq-question">
                    4. What is the minimum local content requirement under the Make in India Order?
                </h4>
                <p class="faq-answer">
                    The minimum local content requirement varies depending on the category of goods or services being procured. The specific percentage is notified by the concerned ministry or department for each procurement category. Bidders must verify the applicable local content threshold mentioned in the tender document or GeM bid specifications and ensure their products or services meet or exceed this requirement before submitting the self-certification.
                </p>
            </div>

            <div class="faq-item">
                <h4 class="faq-question">
                    5. Is verification of the Make in India Self-Certification conducted?
                </h4>
                <p class="faq-answer">
                    Yes, procuring entities reserve the right to verify the claims made in the self-certification. Verification may be conducted at any stage of the procurement process or during contract execution. Bidders may be required to provide supporting documentation such as manufacturing invoices, purchase records, or third-party certification to substantiate their local content claims. Non-compliance upon verification may result in penalties.
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
    const form = document.getElementById('makeInIndiaForm');
    const downloadPdfBtn = document.getElementById('downloadPdfBtn');

    // Set default date
    const today = new Date().toISOString().split('T')[0];
    const certDateInput = form.querySelector('[name="cert_date"]');
    if (certDateInput) certDateInput.value = today;

    // Inputs for live preview
    const inputs = form.querySelectorAll('input, textarea, select');
    inputs.forEach(input => {
        input.addEventListener('input', updatePreview);
        input.addEventListener('change', updatePreview);
    });

    function updatePreview() {
        // Basic fields
        const company = form.querySelector('[name="company_name"]').value || '________________';
        const bidNo = form.querySelector('[name="bid_no"]').value || '________________';
        const localPercent = form.querySelector('[name="local_content_percent"]').value || '__________';
        const place = form.querySelector('[name="place"]').value || '________________';
        const signatory = form.querySelector('[name="signatory_name"]').value || '________________';
        const designation = form.querySelector('[name="designation"]').value || '________________';
        const seal = form.querySelector('[name="seal"]').value || 'Not Provided';
        const certDate = form.querySelector('[name="cert_date"]').value;

        // Table rows (up to 3)
        const loc1 = form.querySelector('[name="location1"]').value || '________________';
        const nature1 = form.querySelector('[name="nature1"]').value || '________________';
        const perc1 = form.querySelector('[name="percent1"]').value || '________________';

        const loc2 = form.querySelector('[name="location2"]').value || '';
        const nature2 = form.querySelector('[name="nature2"]').value || '';
        const perc2 = form.querySelector('[name="percent2"]').value || '';

        const loc3 = form.querySelector('[name="location3"]').value || '';
        const nature3 = form.querySelector('[name="nature3"]').value || '';
        const perc3 = form.querySelector('[name="percent3"]').value || '';

        // Update preview fields
        document.getElementById('previewCompany').textContent = company;
        document.getElementById('previewBidNo').textContent = bidNo;
        document.getElementById('previewLocalPercent').textContent = localPercent;
        document.getElementById('footerCompany').textContent = company;
        document.getElementById('previewSignatoryName').textContent = signatory;
        document.getElementById('previewDesignation').textContent = designation;
        document.getElementById('previewSeal').textContent = seal;
        document.getElementById('previewPlace').textContent = place;

        if (certDate) {
            const formattedDate = new Date(certDate).toLocaleDateString('en-IN', {
                day: '2-digit',
                month: 'long',
                year: 'numeric'
            });
            document.getElementById('previewDate').textContent = formattedDate;
        } else {
            document.getElementById('previewDate').textContent = '________________';
        }

        // Row 1 (always required)
        document.getElementById('previewLoc1').textContent = loc1;
        document.getElementById('previewNature1').textContent = nature1;
        document.getElementById('previewPerc1').textContent = perc1;

        // Row 2 (optional)
        const row2Loc = document.getElementById('previewLoc2');
        const row2Nature = document.getElementById('previewNature2');
        const row2Perc = document.getElementById('previewPerc2');
        if (loc2 || nature2 || perc2) {
            row2Loc.textContent = loc2 || '________________';
            row2Nature.textContent = nature2 || '________________';
            row2Perc.textContent = perc2 || '________________';
        } else {
            row2Loc.textContent = '________________';
            row2Nature.textContent = '________________';
            row2Perc.textContent = '________________';
        }

        // Row 3 (optional)
        const row3Loc = document.getElementById('previewLoc3');
        const row3Nature = document.getElementById('previewNature3');
        const row3Perc = document.getElementById('previewPerc3');
        if (loc3 || nature3 || perc3) {
            row3Loc.textContent = loc3 || '________________';
            row3Nature.textContent = nature3 || '________________';
            row3Perc.textContent = perc3 || '________________';
        } else {
            row3Loc.textContent = '________________';
            row3Nature.textContent = '________________';
            row3Perc.textContent = '________________';
        }

        updateStepIndicator();
    }

    function updateStepIndicator() {
        const steps = document.querySelectorAll('.step-dot');
        const requiredInputs = form.querySelectorAll('input[required]');
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

    // Initial preview
    updatePreview();

});
</script>
<!--End Js Section -->

@endsection
