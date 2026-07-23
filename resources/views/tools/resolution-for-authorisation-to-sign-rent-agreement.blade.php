@extends('tools.tool-master')
@section('title')
{{_('Board Resolution for Authorisation to Sign Rent Agreement')}}
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
            <h1 class="hero-title">Board Resolution for <span>Authorisation to Sign Rent Agreement</span></h1>
            <p class="hero-subtitle">
                <!--Generate a certified Board Resolution for obtaining loan or credit facility from a Bank.-->
            </p>
        </div>
    </div>

    <!-- Main Container -->
    <div class="download-format-container">
        <div class="alert-wrapper" id="alertContainer"></div>

        <div class="download-format-grid">

            <!-- FORM SECTION -->
            <div class="form-card">
                <div class="form-header">
                    <div class="form-step-indicator">
                        <span class="step-dot active"></span>
                        <span class="step-dot"></span>
                        <span class="step-dot"></span>
                    </div>
                    <h2 class="form-title">Board Resolution for Authorisation to Sign Rent Agreement
</h2>
                    <p class="form-description">
                        <!--Fill the details below to generate Board Resolution for Loan from Bank.-->
                    </p>
                </div>

               <form method="POST" action="{{ route('br.rent') }}" id="rentResolutionForm">
@csrf

<div class="form-grid">

    <div class="form-group full-width">
        <label class="form-label">Company Name *</label>
        <input type="text" name="company_name" class="form-control" required>
    </div>

    <div class="form-group full-width">
        <label class="form-label">CIN *</label>
        <input type="text" name="cin" class="form-control" required>
    </div>

    <div class="form-group full-width">
        <label class="form-label">Registered Office Address *</label>
        <textarea name="registered_office" class="form-control" required></textarea>
    </div>

    <div class="form-group full-width">
        <label class="form-label">Email ID</label>
        <input type="email" name="email" class="form-control">
    </div>

    <div class="form-group full-width">
        <label class="form-label">Leased Premises Address *</label>
        <textarea name="leased_address" class="form-control" required></textarea>
    </div>

    <div class="form-row">
        <div class="form-group">
            <label class="form-label">Monthly Rent (₹) *</label>
            <input type="text" name="monthly_rent" class="form-control" required>
        </div>

        <div class="form-group">
            <label class="form-label">Rent in Words</label>
            <input type="text" name="rent_words" class="form-control">
        </div>
    </div>

    <div class="form-row">
        <div class="form-group">
            <label class="form-label">Authorised Person Name *</label>
            <input type="text" name="authorized_person" class="form-control" required>
        </div>

        <div class="form-group">
            <label class="form-label">Designation *</label>
            <input type="text" name="designation" class="form-control" required>
        </div>
    </div>

    <div class="form-row">
        <div class="form-group">
            <label class="form-label">DIN (if applicable)</label>
            <input type="text" name="din" class="form-control">
        </div>

        <div class="form-group">
            <label class="form-label">Place *</label>
            <input type="text" name="place" class="form-control" required>
        </div>
    </div>

    <div class="form-group full-width">
        <label class="form-label">Resolution Date *</label>
        <input type="date" name="resolution_date" class="form-control" required>
    </div>

    <button type="submit" class="btn-submit">
        Generate & Download Resolution
    </button>

</div>
</form>

            </div>

            <!-- PREVIEW SECTION -->
    <div class="preview-card">
        <div class="preview-wrapper">

    <h3 class="preview-header">
        CERTIFIED TRUE COPY OF THE BOARD RESOLUTION
    </h3>

    <p>
        Passed at the Meeting of the Board of Directors held on
        <strong id="prevDate">__________</strong>
        at the Registered Office of the Company.
    </p>

    <p><strong>Subject:</strong> Authorisation to Execute Rent / Lease Agreement</p>

    <p>
        Mr./Ms. <strong id="prevPerson">__________</strong>, Director of the Company,
        apprised the Board that the Company proposes to take suitable office premises
        on lease for effective functioning.
    </p>

    <p>
        <strong>RESOLVED THAT</strong> the consent of the Board be and is hereby accorded
        to take on lease the office premises situated at
        <strong id="prevLease">__________</strong>
        at a monthly rent of Rs.
        <strong id="prevRent">__________</strong>.
    </p>

    <p>
        <strong>RESOLVED FURTHER THAT</strong> Mr./Ms.
        <strong id="prevPerson2">__________</strong>,
        <strong id="prevDesignation">__________</strong>,
        holding DIN <strong id="prevDIN">__________</strong>,
        be authorised to negotiate, sign and execute the rent/lease agreement and all
        related documents on behalf of the Company.
    </p>

    <p><strong>Place:</strong> <span id="prevPlace">__________</span></p>
    <p><strong>Date:</strong> <span id="prevFooterDate">__________</span></p>

</div>
    </div>        



        </div>
<div class="info-section">
    <div class="info-card">

        <!-- Header -->
        <div class="info-header">
            <span class="info-header-badge">Professional Format Guide</span>
            <h2 class="info-title">Board Resolution for Authorisation to Sign Rent Agreement</h2>
            <p class="info-subtitle">
                Professional Format Guide for Indian Companies
            </p>
        </div>

        <!-- Introduction -->
        <div class="info-content">
            <h3 class="info-subheading">Introduction</h3>

            <p class="info-text">
                A Board Resolution for Authorisation to Sign Rent Agreement is a formal corporate
                document that empowers a designated individual to execute lease or rental agreements
                on behalf of a company. Under the Companies Act, 2013, a company being an artificial
                legal entity cannot sign documents by itself and must act through authorised
                representatives. This resolution formally records the Board's decision to delegate
                signing authority for property lease transactions.
            </p>

            <p class="info-text">
                This document is commonly required when entering into commercial lease agreements,
                registering rental premises with statutory authorities, or submitting tenancy-related
                documentation for business licences and permits. Company secretaries, directors, and
                administrative professionals handling real estate matters regularly prepare this
                resolution. It serves as proof of authorisation for landlords, registrars, and
                regulatory bodies, ensuring that the rental agreement is legally binding on the
                company.
            </p>

            <!-- Benefits -->
            <h3 class="info-subheading">Benefits of Using a Standard Format</h3>

            <p class="info-text">
                Utilising a pre-drafted Board Resolution format ensures uniformity in corporate
                documentation and minimises the likelihood of omissions or procedural errors.
                A standardised template enables swift preparation, helps maintain compliance with
                corporate governance requirements, and provides clarity on the scope of authority
                granted.
            </p>

            <p class="info-text">
                This approach streamlines administrative processes and supports professional
                documentation practices across organisations.
            </p>

            <!-- Relevance -->
            <h3 class="info-subheading">Relevance to Business Registrations</h3>

            <p class="info-text">
                When establishing a new business, securing office premises is often among the
                initial requirements following Company Registration. The registered office address
                must be intimated to the Registrar of Companies, and proof of occupancy such as a
                rent agreement is typically required.
            </p>

            <p class="info-text">
                Similarly, for GST Registration, businesses must furnish address proof of their
                principal place of business, which frequently includes a valid rent agreement along
                with authorisation documents. Having a properly executed Board Resolution ensures
                seamless compliance during such registration processes.
            </p>
        </div>

        <!-- Sample Format -->
        <div class="format-section">
            <h3 class="format-title">
                Board Resolution for Authorisation to Sign Rent Agreement – Sample Format
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
                <strong>Registered Office Address:</strong> _______________________________
            </p>

            <p class="format-text">
                <strong>Email ID:</strong> _______________________________
            </p>

            <p class="format-text">
                <strong>CERTIFIED TRUE COPY OF THE BOARD RESOLUTION</strong>
            </p>

            <p class="format-text">
                Passed at the Meeting of the Board of Directors held on
                __________ (Date) at __________ (Time) at the Registered Office of the Company
                situated at __________ (Address)
            </p>

            <p class="format-text">
                <strong>Subject:</strong> Authorisation to Execute Rent / Lease Agreement
            </p>

            <p class="format-text">
                Mr./Ms. __________ (Name of Director), Director of the Company, apprised the Board
                that for the effective functioning and operational requirements of the business,
                the Company proposes to take suitable office premises on lease. The draft lease/rent
                agreement for the proposed premises has been placed before the Board for
                consideration.
            </p>

            <p class="format-text">
                After due deliberation and consideration of the terms and conditions of the
                proposed lease arrangement, the Board passed the following resolutions:
            </p>

            <p class="format-text">
                <strong>RESOLVED THAT</strong> the consent of the Board of Directors be and is hereby
                accorded to take on lease the office premises situated at
                __________ (Complete Address of Leased Premises) at a monthly rent of
                Rs. __________ (Rupees __________ only), on such terms and conditions as contained
                in the draft rent/lease agreement placed before the Board.
            </p>

            <p class="format-text">
                <strong>RESOLVED FURTHER THAT</strong> Mr./Ms. __________ (Name),
                __________ (Designation), holding DIN: __________ (if applicable), be and is hereby
                authorised to represent the Company and to negotiate, finalise, sign, and execute
                the rent/lease agreement and all related documents, deeds, undertakings, and
                correspondence on behalf of the Company, and to take all necessary actions as may be
                required to give effect to this resolution.
            </p>

            <p class="format-text">
                <strong>CERTIFIED TRUE COPY</strong>
            </p>

            <p class="format-text">
                For __________ (Company Name)
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
                    1. Which resolution is required for authorisation to sign a rent agreement?
                </h4>
                <p class="faq-answer">
                    A Board Resolution passed at a duly convened meeting of the Board of Directors
                    is required to authorise an individual to sign a rent agreement on behalf of the
                    company. This resolution delegates the signing authority to a specific person
                    and serves as formal evidence that the company has approved the lease
                    transaction.
                </p>
            </div>

            <div class="faq-item">
                <h4 class="faq-question">
                    2. Can a Board Resolution be passed without convening a Board Meeting?
                </h4>
                <p class="faq-answer">
                    Yes, under Section 175 of the Companies Act, 2013, a resolution may be passed by
                    circulation instead of at a Board Meeting, provided it is approved by a
                    majority of directors entitled to vote. For routine authorisations like
                    signing rent agreements, a circular resolution is generally permissible.
                </p>
            </div>

            <div class="faq-item">
                <h4 class="faq-question">
                    3. Who can be an authorised signatory?
                </h4>
                <p class="faq-answer">
                    An authorised signatory can be any director, key managerial personnel, or any
                    other officer of the company designated by the Board. Their name, designation,
                    and DIN (for directors) must be clearly stated in the resolution.
                </p>
            </div>

            <div class="faq-item">
                <h4 class="faq-question">
                    4. Is the signature of all directors mandatory?
                </h4>
                <p class="faq-answer">
                    No. The resolution must be passed with the requisite quorum present, and a
                    certified true copy is typically signed by the Chairperson or an authorised
                    director.
                </p>
            </div>

            <div class="faq-item">
                <h4 class="faq-question">
                    5. Is professional certification mandatory?
                </h4>
                <p class="faq-answer">
                    Professional certification by a Company Secretary or Chartered Accountant is
                    not legally mandatory. However, some landlords or authorities may request a
                    professionally certified copy for additional verification.
                </p>
            </div>
        </div>

    </div>
</div>


    </div>
</div>
<script>
document.addEventListener('input', function () {

    set('prevPerson', val('authorized_person'));
    set('prevPerson2', val('authorized_person'));
    set('prevDesignation', val('designation'));
    set('prevDIN', val('din'));
    set('prevLease', val('leased_address'));
    set('prevRent', val('monthly_rent'));
    set('prevPlace', val('place'));

    const date = val('resolution_date');
    set('prevDate', format(date));
    set('prevFooterDate', format(date));
});

function val(name){
    const el = document.querySelector(`[name="${name}"]`);
    return el && el.value ? el.value : '__________';
}

function set(id, value){
    const el = document.getElementById(id);
    if(el) el.textContent = value;
}

function format(date){
    if(!date) return '__________';
    return new Date(date).toLocaleDateString('en-IN',{
        day:'2-digit', month:'long', year:'numeric'
    });
}
</script>




@endsection
