@extends('tools.tool-master')
@section('title')
{{_('No Objection Certificate (NOC) from Landlord for Company Registration')}}
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
            <h1 class="hero-title"> <span>No Objection Certificate (NOC) from Landlord for Company Registration</span></h1>
            <p class="hero-subtitle">
                Generate a certified No Objection Certificate (NOC) from Landlord for Company Registration in under 60 seconds.
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
            <h2 class="form-title">Enter Property Owner & Company Details</h2>
            <p class="form-description">
                Fill in the details below to generate a No Objection Certificate (NOC) from Landlord for Company Registration.
            </p>
        </div>

        <form id="nocLandlordForm" method="POST" action="{{route('noc.landlord') }}">
            @csrf

            <div class="form-grid">
                <div class="form-group full-width">
                    <label class="form-label">Name of Property Owner <span class="required">*</span></label>
                    <input type="text" name="property_owner_name" class="form-control" placeholder="Enter property owner's full name" required>
                </div>

                <div class="form-row">
                    <div class="form-group">
                        <label class="form-label">Relation Type <span class="required">*</span></label>
                        <div class="select-wrapper">
                            <select name="relation_type" class="form-control form-select" required>
                                <option value="">Select relation</option>
                                <option value="Son of">Son of</option>
                                <option value="Daughter of">Daughter of</option>
                                <option value="Wife of">Wife of</option>
                            </select>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="form-label">Father's/Husband's Name <span class="required">*</span></label>
                        <input type="text" name="relation_name" class="form-control" placeholder="Enter father's/husband's name" required>
                    </div>
                </div>

                <div class="form-group full-width">
                    <label class="form-label">Property Owner's Residential Address <span class="required">*</span></label>
                    <textarea name="owner_address" class="form-control" placeholder="Enter complete address including City, State, and PIN Code" required></textarea>
                </div>

                <div class="form-group full-width">
                    <label class="form-label">Address of Rented Premises <span class="required">*</span></label>
                    <textarea name="rented_premises_address" class="form-control" placeholder="Enter complete address including Building Name/Number, Street, Locality, City, State, and PIN Code" required></textarea>
                </div>

                <div class="form-group full-width">
                    <label class="form-label">Name(s) of Director(s)/Designated Partner(s) <span class="required">*</span></label>
                    <input type="text" name="directors_names" class="form-control" placeholder="Enter name(s) of Director(s)/Designated Partner(s)" required>
                </div>

                <div class="form-row">
                    <div class="form-group">
                        <label class="form-label">Proposed Company/LLP Name <span class="required">*</span></label>
                        <input type="text" name="company_name" class="form-control" placeholder="Enter proposed company/LLP name" required>
                    </div>

                    <div class="form-group">
                        <label class="form-label">Entity Type <span class="required">*</span></label>
                        <div class="select-wrapper">
                            <select name="entity_type" class="form-control form-select" required>
                                <option value="">Select entity type</option>
                                <option value="Company">Company</option>
                                <option value="LLP">LLP</option>
                            </select>
                        </div>
                    </div>
                </div>

                <div class="form-group full-width">
                    <label class="form-label">Contact Number <span class="required">*</span></label>
                    <input type="text" name="contact_no" class="form-control" placeholder="Enter contact number" required>
                </div>

                <div class="form-row">
                    <div class="form-group">
                        <label class="form-label">Place <span class="required">*</span></label>
                        <input type="text" name="place" class="form-control" placeholder="City / Place" required>
                    </div>

                    <div class="form-group">
                        <label class="form-label">Date <span class="required">*</span></label>
                        <input type="date" name="noc_date" class="form-control" required>
                    </div>
                </div>
            </div>

            <button type="submit" class="btn-submit" id="downloadPdfBtn">
                <span class="btn-text">Generate & Download NOC</span>
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
                        <p class="preview-subtitle">NOC from Landlord for Company Registration</p>
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
                    <h2 class="certificate-doc-title">NO OBJECTION CERTIFICATE</h2>
                    <p class="certificate-doc-subtitle">
                        TO WHOMSOEVER IT MAY CONCERN
                    </p>
                </div>

                <div class="certificate-body">
                    <p class="certificate-paragraph">
                        I, <strong id="prevOwnerName">________________</strong>,
                        <strong id="prevRelationType">Son/Daughter/Wife of</strong>
                        <strong id="prevRelationName">________________</strong>,
                        Resident of <strong id="prevOwnerAddress">________________</strong>,
                        being the lawful owner of the property situated at:
                    </p>

                    <p class="certificate-paragraph">
                        <strong id="prevRentedAddress">________________</strong>
                    </p>

                    <p class="certificate-paragraph">
                        do hereby grant permission and have no objection to:
                        <strong id="prevDirectors">________________</strong>
                        who are the proposed Director(s)/Designated Partner(s) of:
                        <strong id="prevCompanyName">________________</strong>
                        (<strong id="prevEntityType">Company/LLP</strong>) (Under Incorporation)
                    </p>

                    <p class="certificate-paragraph">
                        for operating and conducting their business from the above-mentioned address
                        and using the said premises as the Registered Office of the
                        <strong id="prevEntityType2">Company/LLP</strong> for all official and business purposes.
                    </p>

                    <p class="certificate-paragraph">
                        I hereby clarify that this permission is limited to permissive use of the premises
                        as office space only and does not involve the transfer of any legal rights,
                        title, or interest in the property.
                    </p>

                    <div class="certificate-signature">
                        <p class="signature-label">Signature of Property Owner</p>
                        <div class="signature-line"></div>
                    </div>
                </div>

                <div class="certificate-footer">
                    <div class="footer-item">
                        <span class="footer-item-label">Name</span>
                        <span class="footer-item-value" id="footerOwnerName">________________</span>
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
            <h2 class="info-title">No Objection Certificate (NOC) from Landlord for Company Registration</h2>
            <p class="info-subtitle">
                Mandatory Document for Company and LLP Registration in India
            </p>
        </div>

        <!-- Introduction -->
        <div class="info-content">
            <h3 class="info-subheading">Introduction</h3>

            <p class="info-text">
                A No Objection Certificate (NOC) from Landlord for Company Registration is a formal
                document wherein the property owner grants permission to use their premises as the
                registered office of a company or LLP under incorporation. This certificate is a
                mandatory requirement when filing incorporation documents with the Ministry of
                Corporate Affairs (MCA). The NOC serves as proof of address and confirms that the
                property owner has no objection to the proposed company conducting business
                operations from the specified premises.
            </p>

            <p class="info-text">
                This document specifies the property owner's details, complete address of the
                premises, name of the proposed company, and names of the directors or designated
                partners. The NOC clarifies that only permissive use of the premises is granted for
                office purposes, without transfer of any legal rights in the property. It is required
                for Company Registration and LLP Registration when the registered office premises
                are not owned by the proposed entity or its promoters.
            </p>

            <!-- Benefits -->
            <h3 class="info-subheading">Benefits of Using a Standard Format</h3>

            <p class="info-text">
                Utilising a professionally drafted NOC format ensures that all essential elements
                required by the MCA are properly included. A ready-to-use template saves valuable
                time during the incorporation process, reduces the risk of rejection due to
                incomplete documentation, and provides a consistent framework that captures the
                property address, owner details, company information, and scope of permission
                granted.
            </p>

            <p class="info-text">
                Standardised formats facilitate smoother processing of incorporation applications.
            </p>

            <!-- Relevance -->
            <h3 class="info-subheading">Relevance to Company and LLP Registration</h3>

            <p class="info-text">
                The NOC from the landlord is one of the essential documents required during Company
                Registration or LLP Registration. It must be submitted along with the rent agreement
                or utility bill as proof of registered office address. The NOC should be on a stamp
                paper or plain paper depending on state requirements, and must be signed by the
                property owner.
            </p>

            <p class="info-text">
                Some states may require the NOC to be notarised for additional verification.
                Following registration, the company must also update its registered office address
                for GST Registration and other statutory registrations.
            </p>
        </div>

        <!-- Sample Format -->
        <div class="format-section">
            <h3 class="format-title">
                No Objection Certificate from Landlord – Sample Format
            </h3>

            <p class="format-text">
                <strong>TO WHOMSOEVER IT MAY CONCERN</strong>
            </p>

            <p class="format-text">
                I, __________________________________________ (Name of Property Owner),
            </p>

            <p class="format-text">
                Son/Daughter/Wife of __________________________________________ (Father's/Husband's Name),
            </p>

            <p class="format-text">
                Resident of __________________________________________ (Complete Address of Property Owner including City, State, and PIN Code),
            </p>

            <p class="format-text">
                being the lawful owner of the property situated at:
            </p>

            <p class="format-text">
                __________________________________________ (Complete Address of the Rented Premises including Building Name/Number, Street, Locality, City, State, and PIN Code)
            </p>

            <p class="format-text">
                do hereby grant permission and have no objection to:
            </p>

            <p class="format-text">
                __________________________________________ (Name(s) of Director(s)/Designated Partner(s))
            </p>

            <p class="format-text">
                who are the proposed Director(s)/Designated Partner(s) of:
            </p>

            <p class="format-text">
                __________________________________________ (Approved/Proposed Company/LLP Name) (Under Incorporation)
            </p>

            <p class="format-text">
                for operating and conducting their business from the above-mentioned address and using the said premises as the Registered Office of the Company/LLP for all official and business purposes.
            </p>

            <p class="format-text">
                I hereby clarify that this permission is limited to permissive use of the premises as office space only and does not involve the transfer of any legal rights, title, or interest in the property to the Company/LLP or its Directors/Partners.
            </p>

            <p class="format-text">
                I further state that I have no objection if the above-named Company/LLP (under incorporation) uses the said address as their Registered Office for all statutory, regulatory, and business correspondence purposes.
            </p>

            <p class="format-text">
                ____________________________________
            </p>

            <p class="format-text">
                <strong>(Signature of Property Owner)</strong>
            </p>

            <p class="format-text">
                <strong>Name:</strong> ____________________________________
            </p>

            <p class="format-text">
                <strong>Address:</strong> ____________________________________
            </p>

            <p class="format-text">
                <strong>Contact No.:</strong> ____________________________________
            </p>

            <p class="format-text">
                <strong>Date:</strong> ____________________________________
            </p>

            <p class="format-text">
                <strong>Place:</strong> ____________________________________
            </p>
        </div>

        <!-- FAQ -->
        <div class="faq-section">
            <h3 class="faq-title">Frequently Asked Questions</h3>

            <div class="faq-item">
                <h4 class="faq-question">
                    1. How to get or write a Rent NOC format for company registration?
                </h4>
                <p class="faq-answer">
                    The NOC should include the property owner's full name, father's/husband's name,
                    residential address, complete address of the premises being offered, name of the
                    proposed company or LLP, names of directors or designated partners, and a clear
                    statement granting permission to use the premises as registered office. The
                    document must be signed and dated by the property owner.
                </p>
            </div>

            <div class="faq-item">
                <h4 class="faq-question">
                    2. Is it necessary to have the landlord's signature on the rent NOC?
                </h4>
                <p class="faq-answer">
                    Yes, the landlord's signature is mandatory on the rent NOC. The document is a
                    declaration by the property owner granting permission, and without the owner's
                    signature, it has no legal validity. The signature confirms that the property
                    owner has consented to the use of their premises as the registered office of
                    the company or LLP under incorporation.
                </p>
            </div>

            <div class="faq-item">
                <h4 class="faq-question">
                    3. What is NOC for company registration?
                </h4>
                <p class="faq-answer">
                    An NOC (No Objection Certificate) for company registration is a written consent
                    from the property owner permitting the use of their premises as the registered
                    office of a company or LLP. It is submitted to the MCA along with incorporation
                    documents as proof that the proposed entity has a legitimate place of business.
                    The NOC confirms the owner's approval without transferring any property rights.
                </p>
            </div>

            <div class="faq-item">
                <h4 class="faq-question">
                    4. Where do you need to get the company NOC notarised?
                </h4>
                <p class="faq-answer">
                    Notarisation requirements for the NOC vary by state. Some states require the NOC
                    to be notarised by a Notary Public for it to be accepted by the Registrar of
                    Companies. The notarisation can be done at any notary office. It is advisable
                    to check with the local ROC or a professional regarding specific state
                    requirements before filing the incorporation documents.
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

    const form = document.getElementById('nocLandlordForm');
    const downloadPdfBtn = document.getElementById('downloadPdfBtn');
    const alertContainer = document.getElementById('alertContainer');

    // Set default date
    const today = new Date().toISOString().split('T')[0];
    const dateInput = form.querySelector('[name="noc_date"]');
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
        const ownerName = form.querySelector('[name="property_owner_name"]').value || '________________';
        const relationType = form.querySelector('[name="relation_type"]').value || 'Son/Daughter/Wife of';
        const relationName = form.querySelector('[name="relation_name"]').value || '________________';
        const ownerAddress = form.querySelector('[name="owner_address"]').value || '________________';
        const rentedAddress = form.querySelector('[name="rented_premises_address"]').value || '________________';
        const directorsNames = form.querySelector('[name="directors_names"]').value || '________________';
        const companyName = form.querySelector('[name="company_name"]').value || '________________';
        const entityType = form.querySelector('[name="entity_type"]').value || 'Company/LLP';
        const place = form.querySelector('[name="place"]').value || '________________';
        const nocDate = form.querySelector('[name="noc_date"]').value;

        // Update preview text
        const elOwnerName = document.getElementById('prevOwnerName');
        const elRelationType = document.getElementById('prevRelationType');
        const elRelationName = document.getElementById('prevRelationName');
        const elOwnerAddress = document.getElementById('prevOwnerAddress');
        const elRentedAddress = document.getElementById('prevRentedAddress');
        const elDirectors = document.getElementById('prevDirectors');
        const elCompanyName = document.getElementById('prevCompanyName');
        const elEntityType = document.getElementById('prevEntityType');
        const elEntityType2 = document.getElementById('prevEntityType2');
        const elFooterOwnerName = document.getElementById('footerOwnerName');
        const elFooterPlace = document.getElementById('footerPlace');
        const elFooterDate = document.getElementById('footerDate');

        if (elOwnerName) elOwnerName.textContent = ownerName;
        if (elRelationType) elRelationType.textContent = relationType;
        if (elRelationName) elRelationName.textContent = relationName;
        if (elOwnerAddress) elOwnerAddress.textContent = ownerAddress;
        if (elRentedAddress) elRentedAddress.textContent = rentedAddress;
        if (elDirectors) elDirectors.textContent = directorsNames;
        if (elCompanyName) elCompanyName.textContent = companyName;
        if (elEntityType) elEntityType.textContent = entityType;
        if (elEntityType2) elEntityType2.textContent = entityType;
        if (elFooterOwnerName) elFooterOwnerName.textContent = ownerName;
        if (elFooterPlace) elFooterPlace.textContent = place;

        if (nocDate && elFooterDate) {
            const formattedDate = new Date(nocDate).toLocaleDateString('en-IN', {
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
