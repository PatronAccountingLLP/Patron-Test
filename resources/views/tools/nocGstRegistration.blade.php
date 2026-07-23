@extends('tools.tool-master')
@section('title')
{{_(' No Objection Certificate (NOC) for GST Registration
')}}
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
            <h1 class="hero-title"> <span> No Objection Certificate (NOC) for GST Registration
</span></h1>
            <p class="hero-subtitle">
                Generate a certified No Objection Certificate (NOC) for GST Registration
 in under 60 seconds.
            </p>
        </div>
    </div>

    <!-- Main Container -->
    <div class="download-format-container">
        <div class="alert-wrapper" id="alertContainer"></div>
<!-- Form and Live Preview section -->
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
            <h2 class="form-title">Enter NOC Details for GST Registration</h2>
            <p class="form-description">
                Fill in the details below to generate a No Objection Certificate for use of premises as Principal Place of Business.
            </p>
        </div>

        <form id="nocForm" method="POST" action="{{ route('br.noc.gst') }}">
            @csrf

            <div class="form-grid">
                <!-- Property Owner Details -->
                <div class="form-group full-width">
                    <label class="form-label">Owner's Full Name <span class="required">*</span></label>
                    <input type="text" name="owner_name" class="form-control" placeholder="Enter owner's name" required>
                </div>
                <div class="form-row">
                    <div class="form-group">
                        <label class="form-label">Father's Name</label>
                        <input type="text" name="owner_father" class="form-control" placeholder="Enter father's name">
                    </div>
                    <div class="form-group">
                        <label class="form-label">PAN of Owner <span class="required">*</span></label>
                        <input type="text" name="owner_pan" class="form-control" placeholder="Enter PAN" required>
                    </div>
                </div>
                <div class="form-group full-width">
                    <label class="form-label">Owner's Contact Number</label>
                    <input type="text" name="owner_contact" class="form-control" placeholder="Optional">
                </div>

                <!-- Property Details -->
                <div class="form-group full-width">
                    <label class="form-label">Property Address (Full) <span class="required">*</span></label>
                    <textarea name="property_address" class="form-control" placeholder="Complete address with city, state, pin" required></textarea>
                </div>

                <!-- Business Details -->
                <div class="form-group full-width">
                    <label class="form-label">Name of Business/Company/LLP <span class="required">*</span></label>
                    <input type="text" name="business_name" class="form-control" placeholder="Enter entity name" required>
                </div>
                <div class="form-group full-width">
                    <label class="form-label">Authorised Person (Director/Partner/Proprietor) <span class="required">*</span></label>
                    <input type="text" name="authorised_person" class="form-control" placeholder="Enter name" required>
                </div>

                <!-- Relationship & Consideration -->
                <div class="form-group full-width">
                    <label class="form-label">Relationship with Authorised Person/Business <span class="required">*</span></label>
                    <input type="text" name="relationship" class="form-control" placeholder="e.g., Father, Director, Shareholder, Landlord" required>
                </div>
                <div class="form-group full-width">
                    <label class="form-label">Consideration Type <span class="required">*</span></label>
                    <div class="select-wrapper">
                        <select name="consideration" class="form-control form-select" required>
                            <option value="">Select</option>
                            <option value="without any consideration">without any consideration</option>
                            <option value="on rent basis">on rent basis</option>
                        </select>
                    </div>
                </div>

                <!-- Supporting Documents -->
                <div class="form-group full-width">
                    <label class="form-label">Proof Document Name (e.g., Electricity Bill, Sale Deed, etc.) <span class="required">*</span></label>
                    <input type="text" name="proof_document" class="form-control" placeholder="e.g., Electricity Bill" required>
                </div>
                <div class="form-group full-width">
                    <label class="form-label">Additional Enclosures (Optional)</label>
                    <input type="text" name="additional_enclosures" class="form-control" placeholder="e.g., Rent Agreement, No Due Certificate">
                </div>

                <!-- Signatory and Place -->
                <div class="form-row">
                    <div class="form-group">
                        <label class="form-label">Place (City) <span class="required">*</span></label>
                        <input type="text" name="place" class="form-control" placeholder="City" required>
                    </div>
                    <div class="form-group">
                        <label class="form-label">Date <span class="required">*</span></label>
                        <input type="date" name="date" class="form-control" required>
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
                        <p class="preview-subtitle">No Objection Certificate for GST Registration</p>
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
                        For GST Registration
                    </p>
                </div>

                <div class="certificate-body">
                    <p><strong>TO WHOMSOEVER IT MAY CONCERN</strong></p>

                    <p><strong>Subject: No Objection Certificate for use of premises as Principal Place of Business for GST Registration</strong></p>

                    <p>I, <strong><span id="previewOwnerName">________________</span></strong><span id="previewOwnerFather"></span>, having PAN: <strong><span id="previewOwnerPAN">________________</span></strong>, hereby declare that I am the lawful owner of the following property:</p>

                    <p><strong>Property Address:</strong> <span id="previewPropertyAddress">________________</span></p>

                    <p>I hereby confirm that I have "No Objection" and give my full consent for using the above-mentioned address as the Principal Place of Business for GST Registration to:</p>

                    <p><strong>Name of Business/Company/LLP:</strong> <span id="previewBusinessName">________________</span><br>
                    <strong>Authorised Person:</strong> <span id="previewAuthorisedPerson">________________</span></p>

                    <p>The above-named entity is hereby permitted to use the referred address as its Principal Place of Business for the purpose of GST Registration and for dealings with statutory authorities in the course of its business.</p>

                    <p>I declare that I am the <strong><span id="previewRelationship">________________</span></strong> and the above premises have been provided to the business entity <strong><span id="previewConsideration">without any consideration</span></strong>.</p>

                    <p>This NOC does not confer any ownership title or proprietary rights over the property in favour of the business entity. The business entity shall comply with all statutory requirements and local regulations. Any defaults towards statutory compliances are the sole responsibility of the business entity.</p>

                    <p>A copy of <strong><span id="previewProofDocument">________________</span></strong> in my name is attached herewith as proof of ownership/address.</p>

                    <p><strong>Enclosures:</strong><br>
                    1. Copy of ownership proof / utility bill in owner's name<br>
                    2. Copy of PAN Card of property owner<br>
                    <span id="previewAdditionalEnclosures"></span></p>

                    <p>Yours faithfully,</p>

                    <p><strong>Signature:</strong> _________________________<br>
                    <strong>Name of Property Owner:</strong> <span id="previewOwnerNameSig">________________</span><br>
                    <strong>PAN:</strong> <span id="previewOwnerPANSig">________________</span><br>
                    <strong>Contact Number:</strong> <span id="previewOwnerContact">________________</span><br>
                    <strong>Place:</strong> <span id="previewPlace">________________</span><br>
                    <strong>Date:</strong> <span id="previewDate">________________</span></p>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="info-section">
    <div class="info-card">

        <!-- Header -->
        <div class="info-header">
            <span class="info-header-badge">Professional Format Guide</span>
            <h2 class="info-title">No Objection Certificate (NOC) for GST Registration</h2>
            <p class="info-subtitle">
                Standard NOC Template for GST Registration Purposes
            </p>
        </div>

        <!-- Introduction -->
        <div class="info-content">
            <h3 class="info-subheading">Introduction</h3>
            <p class="info-text">
                A No Objection Certificate (NOC) for GST Registration is a formal consent document issued by the owner of a property permitting a business entity to use the premises as its principal place of business for Goods and Services Tax registration purposes. Since a company, LLP, or other business entity is a separate legal entity distinct from its promoters, it requires explicit permission from the property owner to operate from and use the address for GST registration and other statutory purposes.
            </p>
            <p class="info-text">
                This NOC is commonly required when businesses operate from premises owned by directors, partners, shareholders, or their family members rather than from owned or leased commercial properties. The GST authorities require this document as part of the address proof documentation during the registration process. The NOC must include details of the property owner (name, PAN), complete address of the premises, name of the business entity seeking registration, relationship with the entity (if any), and must be accompanied by ownership proof such as property documents or utility bills in the owner's name.
            </p>
        </div>

        <!-- Benefits -->
        <div class="info-content">
            <h3 class="info-subheading">Benefits of Using a Standard Format</h3>
            <p class="info-text">
                Utilising a professionally drafted NOC format ensures that all essential information required by GST authorities is properly included. A ready-to-use template saves valuable time during the registration process, reduces the risk of application rejections due to incomplete documentation, and provides a consistent framework for obtaining property owner consent. Standardised formats facilitate smoother GST Registration processing.
            </p>
        </div>

        <!-- Relevance -->
        <div class="info-content">
            <h3 class="info-subheading">Relevance to Business Registrations</h3>
            <p class="info-text">
                The NOC for GST Registration is a critical document in the GST Registration process when the business operates from premises not owned by the entity itself. Following Company Registration, newly incorporated companies must obtain GST Registration if their turnover exceeds the prescribed threshold or if they engage in inter-state supplies. The NOC serves as valid address proof when combined with ownership documents and utility bills. For proprietorship, partnership, LLP, or company registrations, this document establishes the right to use the premises for business purposes.
            </p>
        </div>

        <!-- Sample NOC Format -->
        <div class="format-section">
            <h3 class="format-title">No Objection Certificate (NOC) for GST Registration – Sample Format</h3>

            <p class="format-text">
                TO WHOMSOEVER IT MAY CONCERN<br>
                Subject: No Objection Certificate for use of premises as Principal Place of Business for GST Registration
            </p>

            <p class="format-text">
                I, ________________________ (Name of Property Owner), Son/Daughter of ________________________, having PAN: ________________________, hereby declare that I am the lawful owner of the following property:<br>
                Property Address: ________________________<br>
                ________________________ (City, State, Pin Code)
            </p>

            <p class="format-text">
                I hereby confirm that I have "No Objection" and give my full consent for using the above-mentioned address as the Principal Place of Business for GST Registration to:<br>
                Name of Business/Company/LLP: ________________________<br>
                Authorised Person: ________________________ (Director/Partner/Proprietor)
            </p>

            <p class="format-text">
                The above-named entity is hereby permitted to use the referred address as its Principal Place of Business for the purpose of GST Registration and for dealings with statutory authorities in the course of its business.
            </p>

            <p class="format-text">
                I declare that I am the ________________________ (Relationship with Authorised Person/Business, e.g., Father/Mother/Director/Shareholder/Landlord) and the above premises have been provided to the business entity without any consideration / on rent basis.<br>
                This NOC does not confer any ownership title or proprietary rights over the property in favour of the business entity. The business entity shall comply with all statutory requirements and local regulations. Any defaults towards statutory compliances are the sole responsibility of the business entity.<br>
                A copy of ________________________ (e.g., Electricity Bill/Property Tax Receipt/Sale Deed/Rent Agreement) in my name is attached herewith as proof of ownership/address.
            </p>

            <p class="format-text">
                Yours faithfully,<br>
                Signature: ________________________<br>
                Name of Property Owner: ________________________<br>
                PAN: ________________________<br>
                Contact Number: ________________________<br>
                Place: ________________________<br>
                Date: ________________________<br>
                Enclosure:<br>
                1. Copy of ownership proof / utility bill in owner's name<br>
                2. Copy of PAN Card of property owner
            </p>
        </div>

        <!-- FAQ -->
        <div class="faq-section">
            <h3 class="faq-title">Frequently Asked Questions</h3>

            <div class="faq-item">
                <h4 class="faq-question">1. Is there any specific format for NOC for GST registration?</h4>
                <p class="faq-answer">
                    There is no prescribed statutory format for the NOC for GST registration mandated by GST authorities. However, the NOC must contain essential details including the property owner's name and PAN, complete address of the premises, name of the business entity, consent statement, relationship declaration, and owner's signature. A standard format helps ensure all required information is included and reduces chances of rejection.
                </p>
            </div>

            <div class="faq-item">
                <h4 class="faq-question">2. Is it necessary to have the landlord's signature on the NOC?</h4>
                <p class="faq-answer">
                    Yes, the signature of the property owner (landlord or owner) is mandatory on the NOC for GST registration. The signature authenticates the consent given by the owner for using the premises. Without the owner's signature, the NOC is considered incomplete and will not be accepted by GST authorities during the registration process.
                </p>
            </div>

            <div class="faq-item">
                <h4 class="faq-question">3. Is it mandatory to have the NOC for GST registration in India?</h4>
                <p class="faq-answer">
                    The NOC is required when the business premises are owned by a person other than the applicant business entity. If the business operates from owned premises, ownership documents suffice. For rented premises, a rent agreement is required. The NOC is specifically needed when operating from premises owned by directors, partners, family members, or others without a formal rental arrangement.
                </p>
            </div>

            <div class="faq-item">
                <h4 class="faq-question">4. Do you need to print NOC for GST registration on stamp paper?</h4>
                <p class="faq-answer">
                    No, the NOC for GST registration does not need to be printed on stamp paper. It can be prepared on plain paper with the property owner's signature. However, the NOC must be accompanied by supporting documents such as utility bills (electricity, water, telephone) or property ownership documents in the owner's name as proof of address and ownership.
                </p>
            </div>

        </div>

    </div>
</div>

    </div>
</div>


<!-- JavaScript for live preview -->
<script>
document.addEventListener('DOMContentLoaded', function () {
    const form = document.getElementById('nocForm');

    // Set default date to today
    const today = new Date().toISOString().slice(0,10);
    const dateInput = form.querySelector('[name="date"]');
    if (dateInput && !dateInput.value) dateInput.value = today;

    function formatDate(dateString) {
        if (!dateString) return '________________';
        const date = new Date(dateString);
        return date.toLocaleDateString('en-IN', { day: '2-digit', month: 'long', year: 'numeric' });
    }

    function updatePreview() {
        // Get values
        const ownerName = form.querySelector('[name="owner_name"]').value || '________________';
        const ownerFather = form.querySelector('[name="owner_father"]').value;
        const ownerPAN = form.querySelector('[name="owner_pan"]').value || '________________';
        const ownerContact = form.querySelector('[name="owner_contact"]').value || '________________';
        const propertyAddress = form.querySelector('[name="property_address"]').value || '________________';
        const businessName = form.querySelector('[name="business_name"]').value || '________________';
        const authorisedPerson = form.querySelector('[name="authorised_person"]').value || '________________';
        const relationship = form.querySelector('[name="relationship"]').value || '________________';
        const consideration = form.querySelector('[name="consideration"]').value || 'without any consideration';
        const proofDocument = form.querySelector('[name="proof_document"]').value || '________________';
        const additionalEnclosures = form.querySelector('[name="additional_enclosures"]').value;
        const place = form.querySelector('[name="place"]').value || '________________';
        const dateRaw = form.querySelector('[name="date"]').value;
        const dateFormatted = dateRaw ? formatDate(dateRaw) : '________________';

        // Update owner name with father if provided
        let ownerNameDisplay = ownerName;
        if (ownerFather && ownerFather.trim() !== '') {
            ownerNameDisplay = `${ownerName}, Son/Daughter of ${ownerFather}`;
        }
        document.getElementById('previewOwnerName').textContent = ownerNameDisplay;
        document.getElementById('previewOwnerPAN').textContent = ownerPAN;
        document.getElementById('previewPropertyAddress').textContent = propertyAddress;
        document.getElementById('previewBusinessName').textContent = businessName;
        document.getElementById('previewAuthorisedPerson').textContent = authorisedPerson;
        document.getElementById('previewRelationship').textContent = relationship;
        document.getElementById('previewConsideration').textContent = consideration;
        document.getElementById('previewProofDocument').textContent = proofDocument;
        document.getElementById('previewOwnerNameSig').textContent = ownerName;
        document.getElementById('previewOwnerPANSig').textContent = ownerPAN;
        document.getElementById('previewOwnerContact').textContent = ownerContact;
        document.getElementById('previewPlace').textContent = place;
        document.getElementById('previewDate').textContent = dateFormatted;

        // Additional enclosures
        const additionalSpan = document.getElementById('previewAdditionalEnclosures');
        if (additionalEnclosures && additionalEnclosures.trim() !== '') {
            additionalSpan.innerHTML = `3. ${additionalEnclosures}`;
        } else {
            additionalSpan.innerHTML = '';
        }

        updateStepIndicator();
    }

    function updateStepIndicator() {
        const steps = document.querySelectorAll('.step-dot');
        const requiredInputs = form.querySelectorAll('input[required], textarea[required], select[required]');
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

    // Attach event listeners
    const inputs = form.querySelectorAll('input, textarea, select');
    inputs.forEach(input => input.addEventListener('input', updatePreview));
    updatePreview();

  
});
</script>

@endsection
