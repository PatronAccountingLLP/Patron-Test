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
            Free Legal Document Generator
        </div>

        <h1 class="hero-title">
            Resignation Letter of <span>Designated Partner in LLP</span>
        </h1>

        <p class="hero-subtitle">
            Generate a professionally drafted resignation letter as per LLP Act, 2008
            in under 60 seconds.
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
                    <span class="step-dot"></span>
                    <span class="step-dot"></span>
                 </div>
    
                <h2 class="form-title">Enter LLP & Partner Details</h2>
                <p class="form-description">
                    Fill the details below to generate the resignation letter.
                </p>
            </div>

    <form id="resignationForm" method="POST" action="{{ route('llp.resignation.download') }}">
        @csrf

        <div class="form-grid">

            <div class="form-group full-width">
                <label class="form-label">LLP Name <span class="required">*</span></label>
                <input type="text" name="llp_name" class="form-control" required>
            </div>

            <div class="form-group full-width">
                <label class="form-label">Registered Office Address <span class="required">*</span></label>
                <textarea name="registered_office" class="form-control" required></textarea>
            </div>

            <div class="form-row">
                <div class="form-group">
                    <label class="form-label">Designated Partner Name <span class="required">*</span></label>
                    <input type="text" name="partner_name" class="form-control" required>
                </div>

                <div class="form-group">
                    <label class="form-label">DPIN <span class="required">*</span></label>
                    <input type="text" name="dpin" class="form-control" required>
                </div>
            </div>

            <div class="form-row">
                <div class="form-group">
                    <label class="form-label">Effective Resignation Date <span class="required">*</span></label>
                    <input type="date" name="resignation_date" class="form-control" required>
                </div>

                <div class="form-group">
                    <label class="form-label">Place <span class="required">*</span></label>
                    <input type="text" name="place" class="form-control" required>
                </div>
            </div>

        </div>

        <button type="submit" class="btn-submit">
            Generate & Download Letter
        </button>
    </form>
</div>


            <!-- Preview Section -->
<div class="preview-card">
    <div class="preview-wrapper">
    <div class="preview-header">
        <h3 class="preview-header">Document Preview</h3>
        <span class="live-badge">Live Preview</span>
    
    </div>
    <div class="certificate-preview">
        <div class="certificate-watermark">PREVIEW</div>

        <h2 class="certificate-doc-title">
            Resignation Letter of Designated Partner in LLP
        </h2>

        <p>
            Date: <strong id="prevDate">__________</strong>
        </p>

        <p>
            To,<br>
            All Partners / Designated Partners<br>
            <strong id="prevLLP">__________________</strong> LLP<br>
            Registered Office Address:
            <strong id="prevOffice">__________________</strong>
        </p>

        <p><strong>Subject:</strong> Resignation from the Position of Designated Partner and Partner</p>

        <p>Dear Sir/Madam,</p>

        <p>
            Due to my prior professional and personal commitments, I find myself unable
            to devote adequate time and attention to the affairs of the LLP. In view of
            the same, I hereby tender my resignation from the position of Designated Partner
            of the LLP with effect from <strong id="prevDate2">__________</strong>.
        </p>

        <p>
            Further, I do not intend to continue as a Partner of the LLP. I hereby confirm
            and declare that no amount is due and payable to me in respect of my share,
            right, title, and interest in the LLP business, including its assets and goodwill.
        </p>

        <p>
            I request you to kindly arrange for the execution of an amendment deed or
            supplementary deed and initiate the necessary filings with the Registrar of Companies.
        </p>

        <p>
            Thanking you,<br>
            Yours faithfully,
        </p>

        <p>
            <strong>Name:</strong> <span id="prevName">__________</span><br>
            <strong>DPIN:</strong> <span id="prevDPIN">__________</span><br>
            <strong>Place:</strong> <span id="prevPlace">__________</span>
        </p>
    </div>
    </div>
</div>

        </div>
<!--Info section-->
<div class="info-section">
    <div class="info-card">

        <!-- Header -->
        <div class="info-header">
            <span class="info-header-badge">Professional Format Guide</span>
            <h2 class="info-title">Resignation Letter of Designated Partner in LLP</h2>
            <p class="info-subtitle">
                Professional Format Guide for Indian LLPs
            </p>
        </div>

        <!-- Introduction -->
        <div class="info-content">
            <h3 class="info-subheading">Introduction</h3>

            <p class="info-text">
                A Resignation Letter of Designated Partner in a Limited Liability Partnership (LLP) is a formal written communication through which a Designated Partner notifies the LLP and its continuing partners of their intention to relinquish their position. This document is an essential component of corporate governance and serves as official evidence of the partner's voluntary exit from the firm.
            </p>

            <p class="info-text">
                Under the LLP Act, 2008, every change in the constitution of an LLP, including the resignation of a Designated Partner, must be intimated to the Registrar of Companies within the prescribed time. The resignation letter forms the basis for initiating the necessary compliance procedures, including filing of Form 4 with the Ministry of Corporate Affairs and executing an amendment or supplementary deed to the LLP Agreement. This document is required by partners who wish to exit an LLP either due to personal reasons, professional commitments, or any other circumstances that prevent them from continuing in the role.
            </p>

            <!-- Benefits -->
            <h3 class="info-subheading">Benefits of Using a Standard Format</h3>

            <p class="info-text">
                Utilising a professionally drafted resignation letter format ensures that all legally relevant details are captured accurately and comprehensively. A standardised template minimises the risk of omissions, maintains consistency in documentation, and facilitates quicker processing of compliance filings. This approach helps both the resigning partner and the LLP to maintain proper records and fulfil regulatory obligations efficiently.
            </p>

            <!-- Relevance -->
            <h3 class="info-subheading">Relevance to LLP Compliance</h3>

            <p class="info-text">
                The resignation of a Designated Partner triggers several compliance requirements under the LLP Act, 2008. The LLP must update its records with the Registrar of Companies and ensure that the minimum requirement of having at least two Designated Partners is maintained. For businesses that are in the process of LLP Registration or are considering restructuring their partnership composition, understanding these documentation requirements is essential. Similarly, if the change in partners affects the LLP's GST Registration details, the LLP must update its GST records accordingly within the stipulated timeframe.
            </p>
        </div>

        <!-- Sample Format -->
        <div class="format-section">
            <h3 class="format-title">
                Resignation Letter of Designated Partner in LLP – Sample Format
            </h3>

            <p class="format-text">
                <strong>Date:</strong> _______________
            </p>

            <p class="format-text">
                <strong>To,</strong><br>
                All Partners / Designated Partners<br>
                M/s ___________________________ LLP<br>
                Registered Office Address: _______________________________________________
            </p>

            <p class="format-text">
                <strong>Subject:</strong> Resignation from the Position of Designated Partner and Partner
            </p>

            <p class="format-text">
                Dear Sir/Madam,
            </p>

            <p class="format-text">
                Due to my prior professional and personal commitments, I find myself unable to devote adequate time and attention to the affairs of the LLP. In view of the same, I hereby tender my resignation from the position of Designated Partner of the LLP with effect from _______________ (Date).
            </p>

            <p class="format-text">
                Further, I do not intend to continue as a Partner of the LLP. I hereby confirm and declare that no amount is due and payable to me in respect of my share, right, title, and interest in the LLP business, including its assets and goodwill. I further confirm that I have no claims whatsoever against the continuing Partners or the LLP in relation to the partnership.
            </p>

            <p class="format-text">
                In this regard, I request you to kindly arrange for the execution of an amendment deed or supplementary deed to give effect to my retirement from the LLP. Please acknowledge receipt of this resignation letter and initiate the necessary filings with the Registrar of Companies at the earliest.
            </p>

            <p class="format-text">
                Thanking you,
            </p>

            <p class="format-text">
                Yours faithfully,
            </p>

            <p class="format-text">
                <strong>Signature:</strong> ___________________________
            </p>

            <p class="format-text">
                <strong>Name:</strong> ___________________________
            </p>

            <p class="format-text">
                <strong>DPIN:</strong> ___________________________
            </p>

            <p class="format-text">
                <strong>Place:</strong> ___________________________
            </p>
        </div>

        <!-- FAQ -->
        <div class="faq-section">
            <h3 class="faq-title">Frequently Asked Questions</h3>

            <div class="faq-item">
                <h4 class="faq-question">
                    1. Is it mandatory to state the reason for resignation in the letter?
                </h4>
                <p class="faq-answer">
                    While the LLP Act, 2008 does not mandate stating the reason for resignation, it is considered good practice to include a brief and professionally worded reason. This provides clarity to the continuing partners and maintains transparency in the LLP's records. However, the resignation remains valid even without specifying a reason, provided it is communicated in writing and acknowledged by the LLP.
                </p>
            </div>

            <div class="faq-item">
                <h4 class="faq-question">
                    2. What are the consequences if the resignation is not formally communicated?
                </h4>
                <p class="faq-answer">
                    If a Designated Partner does not formally communicate their resignation in writing, they continue to remain liable for the LLP's obligations and compliance requirements. The partner's name will remain in MCA records, and they may be held responsible for any non-compliance or defaults by the LLP. Additionally, the LLP cannot file the requisite forms with the Registrar without a formal resignation letter, which may result in penalties for delayed filings.
                </p>
            </div>

            <div class="faq-item">
                <h4 class="faq-question">
                    3. Can the resignation be effective immediately?
                </h4>
                <p class="faq-answer">
                    Yes, a resignation can be effective immediately from the date mentioned in the letter, provided the LLP Agreement does not stipulate a notice period. However, for practical purposes, a reasonable notice period is advisable to allow the LLP to complete compliance formalities, arrange for a replacement Designated Partner if required, and execute the necessary amendment deed. The effective date should be clearly mentioned in the resignation letter.
                </p>
            </div>

            <div class="faq-item">
                <h4 class="faq-question">
                    4. How should the resignation letter be delivered?
                </h4>
                <p class="faq-answer">
                    The resignation letter should be delivered in a manner that provides proof of delivery. It is advisable to send the letter via registered post with acknowledgement due, speed post, or courier with tracking to the LLP's registered office address. Alternatively, the letter can be hand-delivered with an acknowledgement copy signed by an authorised representative of the LLP. Email delivery may be acceptable if followed up with a physical copy and acknowledgement.
                </p>
            </div>

            <div class="faq-item">
                <h4 class="faq-question">
                    5. What happens after the resignation letter is submitted?
                </h4>
                <p class="faq-answer">
                    Upon receipt of the resignation letter, the LLP must initiate several compliance procedures. The LLP is required to file Form 4 (Notice of change in partners or designated partners) with the Registrar of Companies within 30 days of the change. An amendment deed or supplementary deed to the LLP Agreement must be executed to reflect the change in partnership. The LLP must also ensure that it continues to have at least two Designated Partners as required under the LLP Act, 2008.
                </p>
            </div>
        </div>

    </div>
</div>

    </div>
</div>
<script>
document.querySelectorAll('#resignationForm input, textarea').forEach(input => {
    input.addEventListener('input', updatePreview);
});

function updatePreview() {
    document.getElementById('prevLLP').innerText =
        document.querySelector('[name="llp_name"]').value || '__________';

    document.getElementById('prevOffice').innerText =
        document.querySelector('[name="registered_office"]').value || '__________';

    document.getElementById('prevName').innerText =
        document.querySelector('[name="partner_name"]').value || '__________';

    document.getElementById('prevDPIN').innerText =
        document.querySelector('[name="dpin"]').value || '__________';

    document.getElementById('prevPlace').innerText =
        document.querySelector('[name="place"]').value || '__________';

    const date =
        document.querySelector('[name="resignation_date"]').value || '__________';

    document.getElementById('prevDate').innerText = date;
    document.getElementById('prevDate2').innerText = date;
}
</script>


@endsection
