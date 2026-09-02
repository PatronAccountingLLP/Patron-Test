
@extends('layouts.service-app')

<!-- External Dependencies (loaded by master layout in production) -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Barlow:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,400&family=DM+Sans:opsz,wght@9..40,400;9..40,500;9..40,600;9..40,700&display=swap" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

@section('meta')
    <title>LLP Partner Change Delhi NCR – Form 3, Form 4 &amp; ROC</title>
    <meta name="description" content="LLP partner change in Delhi. Addition or cessation. Form 4 + Form 3 within 30 days. DPIN. Consent. Supplementary deed. Penalty Rs 100/day. Call +91 945 945 6700.">
    <link rel="canonical" href="/llp-partner-change/delhi">
    <meta name="robots" content="index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1">
    <meta property="og:title" content="LLP Partner Change Delhi NCR – Form 3, Form 4 &amp; ROC">
    <meta property="og:description" content="LLP partner change in Delhi. Addition or cessation. Form 4 + Form 3 within 30 days. DPIN. Consent. Supplementary deed. Penalty Rs 100/day. Call +91 945 945 6700.">
    <meta property="og:url" content="/llp-partner-change/delhi">
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="Patron Accounting">
    <meta property="og:image" content="https://www.patronaccounting.com/images/og-default-square.png">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="1200">
    <meta property="og:image:type" content="image/png">
    <meta property="og:image:secure_url" content="https://www.patronaccounting.com/images/og-default-square.png">
    <meta property="og:image:alt" content="Patron Accounting - partner you can rely on">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="LLP Partner Change Delhi NCR – Form 3, Form 4 &amp; ROC">
    <meta name="twitter:description" content="LLP partner change in Delhi. Addition or cessation. Form 4 + Form 3 within 30 days. DPIN. Consent. Supplementary deed. Penalty Rs 100/day. Call +91 945 945 6700.">
    <meta name="twitter:image" content="https://www.patronaccounting.com/images/og-default-square.png">
@endsection

@section('schema')
    <script type="application/ld+json">{
  "@context": "https://schema.org",
  "@graph": [
    {
      "@type": "Service",
      "name": "LLP Partner Change in Delhi",
      "description": "LLP partner change in Delhi. Addition or cessation. Form 4 + Form 3 within 30 days. DPIN. Consent. Supplementary deed. Penalty Rs 100/day. Call +91 945 945 6700.",
      "url": "https://www.patronaccounting.com/llp-partner-change/delhi",
      "serviceType": "LLP Partner Change in Delhi",
      "areaServed": {
        "@type": "City",
        "name": "Delhi"
      },
      "provider": {
        "@type": "Organization",
        "name": "Patron Accounting LLP",
        "url": "https://www.patronaccounting.com/",
        "logo": "https://www.patronaccounting.com/images/site-logo.svg"
      },
      "offers": {
        "@type": "Offer",
        "priceCurrency": "INR",
        "availability": "https://schema.org/InStock",
        "url": "https://www.patronaccounting.com/llp-partner-change/delhi",
        "price": "4999"
      }
    },
    {
      "@type": "BreadcrumbList",
      "itemListElement": [
        {
          "@type": "ListItem",
          "position": 1,
          "name": "Home",
          "item": "https://www.patronaccounting.com/"
        },
        {
          "@type": "ListItem",
          "position": 2,
          "name": "LLP Partner Change",
          "item": "https://www.patronaccounting.com/llp-partner-change"
        },
        {
          "@type": "ListItem",
          "position": 3,
          "name": "LLP Partner Change in Delhi",
          "item": "https://www.patronaccounting.com/llp-partner-change/delhi"
        }
      ]
    },
    {
      "@type": "FAQPage",
      "mainEntity": [
        {
          "@type": "Question",
          "name": "What forms needed for adding partner to Delhi LLP?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Form 4 and Form 3 as linked forms within 30 days. Form 6 consent attached. New partner needs DPIN DIN and DSC. Supplementary deed on stamp paper."
          }
        },
        {
          "@type": "Question",
          "name": "Can partner be removed from Delhi LLP?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Only if LLP Agreement expressly provides. First Schedule default does not allow majority expulsion. Without agreement clause removal needs consent of all partners."
          }
        },
        {
          "@type": "Question",
          "name": "What does exiting partner receive?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Under Section 24 amount equal to capital contribution unless agreement specifies otherwise. May include undistributed profits and goodwill."
          }
        },
        {
          "@type": "Question",
          "name": "Minimum partners required in Delhi LLP?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Minimum 2 partners. Minimum 2 designated partners. At least 1 designated partner must be Indian resident 182 days. 6 months to replace if below 2 DPs."
          }
        }
      ]
    }
  ]
}</script>

@endsection

@include('partials.page-css', ['file' => 'css/site.css'])
<style>
/* Amount column - right-align only on tables with .table-amount class */
        .table-amount td:last-child { color: var(--text-secondary); font-size: 14px; font-weight: 500; }
/* ============================================
           EXPERT ATTRIBUTION BOX (E-E-A-T) - Plan 3.1
           ============================================ */
        .expert-attribution-box {
            background: #F9F9F9;
            border: 1px solid var(--gray-200);
            border-radius: var(--radius-md);
            padding: 12px 20px;
            display: flex;
            align-items: center;
            gap: 10px;
            flex-wrap: wrap;
            margin-bottom: 24px;
        }
/* ============================================
           TOC NAVIGATION - Plan 2.2
           ============================================ */
        .toc-section {
            background: var(--gray-50); border-bottom: 1px solid var(--gray-200);
            padding: 20px 0; position: sticky; top: 100px; z-index: 50;
        }
/* Process Evidence Screenshot - Plan 3.2 */
        .process-screenshot-details { margin-top: 14px; }
</style>

@section('content')
<main>




<!-- HERO SECTION -->
<section class="py-5" style="background: linear-gradient(180deg, var(--cream) 0%, var(--white) 100%);">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-8">
                <div class="pe-lg-5">
                    <div class="hero-badge">
                        <svg viewBox="0 0 24 24" fill="currentColor"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                        Trusted by 10,000+ Businesses
                    </div>

                    <h1 class="display-5 fw-bold text-dark mb-4 private-registration-heading">
                        LLP Partner Change in Delhi: Addition, Cessation, Designation, and Form 4 Filing
                    </h1>

                    <div class="expert-attribution-box">
                        <span class="eab-check"><svg width="16" height="16" viewBox="0 0 24 24" fill="currentColor"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg></span>
                        <span class="eab-title">Reviewed by CA and CS Team, Patron Accounting LLP</span>
                        <span class="eab-meta">
                            <span>ICAI & ICSI Registered</span><span class="eab-sep">|</span>
                            <span>15+ Years Experience</span><span class="eab-sep">|</span>
                            <span>Last Updated: <span id="lastUpdated">07 April 2026</span></span>
                        </span>
                        <a href="#" class="eab-link">Verify Credentials &rarr;</a>
                    </div>

                    <div class="mb-4">
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Addition:</span> New partner joins | DPIN/DIN required | Consent (Form 6) | Contribution and profit share agreed</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Cessation:</span> Partner exits (resignation, retirement, death, removal) | Capital returned per S.24</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Form 4 + Form 3:</span> Filed as linked forms within 30 days | Supplementary LLP Agreement on stamp paper</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Minimums:</span> At least 2 designated partners at all times | At least 1 must be Indian resident (182 days)</p>
                        </div>
                    </div>

                    <p class="mb-4 fw-bold" style="color: var(--blue); font-size: 15px;">10,000+ Businesses Served | 4.9 Google Rating | 15+ Years of Practice</p>

                    <div class="hero-cta">
                        <a href="tel:+919459456700" class="btn-video text-decoration-none">
                            <span class="play-circle"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="width:14px;height:14px;color:#fff"><path d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/></svg></span>
                            Call +91 945 945 6700
                        </a>
                        <a href="mailto:sales@patronaccounting.com?subject=Enquiry%20for%20LLP%20Partner%20Change%20in%20Delhi%20Services&body=Hello%20Patron%20Accounting%20Team%2C%0A%0AI%20am%20interested%20in%20your%20LLP%20Partner%20Change%20in%20Delhi%20services.%0A%0AThank%20you." class="btn-sample text-decoration-none">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="width:18px;height:18px;"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,12 2,6"/></svg>
                            Email Us
                        </a>
                        <a href="https://wa.me/919459456700?text=Hi%2C%20I%20need%20help%20with%20LLP%20Partner%20Change%20in%20Delhi.%20Please%20call%20me." target="_blank" class="btn-sample text-decoration-none" rel="noopener">
                            <svg viewBox="0 0 24 24" fill="currentColor" style="width:18px;height:18px;color:#25D366"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347z"/></svg>
                            WhatsApp Us
                        </a>
                    </div>

                    <div class="trust-section">
                        <div class="trust-row">
                            <div class="trust-item">
                                <div class="trust-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 14l9-5-9-5-9 5 9 5z"/><path d="M12 14l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14z"/></svg></div>
                                <div class="trust-text"><strong>15+ Years</strong>Industry Experience</div>
                            </div>
                            <div class="trust-item">
                                <div class="trust-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/></svg></div>
                                <div class="trust-text"><strong>CA & CS</strong>Certified Experts</div>
                            </div>
                        </div>
                        <div class="google-rating">
                            <div class="rating-content">
                                <div class="rating-stars">
                                    <svg viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg>
                                    <svg viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg>
                                    <svg viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg>
                                    <svg viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg>
                                    <svg viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg>
                                    <span class="rating-score">4.9</span>
                                </div>
                                <span class="rating-count">Based on 500+ reviews</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="form-card" id="consultationFormCard">
                    <div class="form-header">
                        <h2 class="form-title">Get Free Consultation</h2>
                        <p class="form-subtitle">Talk to a CA/CS expert today</p>
                    </div>


                                        @include('partials.bigin-form', [
                                            'variant' => 'bare',
                                            'service'  => 'LLP Partner Change in Delhi',
                                            'city'     => 'Delhi',
                                        ])

                    <p class="form-response-note">Our team will get back to you shortly. No spam.</p>

                    <div class="form-footer">
                        <span class="form-footer-item">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"></path></svg>
                            100% Secure
                        </span>
                        <span class="form-footer-item">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M5 13l4 4L19 7"></path></svg>
                            No Spam
                        </span>
                        <span class="form-footer-item">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"></circle><path d="M12 6v6l4 2"></path></svg>
                            Quick Response
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- TESTIMONIALS -->
@include('partials.testimonials', [
    'heading'    => 'Real Stories from Real People',
    'lead'       => 'Hear how teams across industries use Patron to save time, cut costs, & stay in control.',
    'ctaTitle'   => 'Join 10,000+ Satisfied Businesses',
    'ctaText'    => 'From LLP partner changes to full compliance - hear how Patron helps Delhi businesses stay compliant.',
])

<!-- STATS BAR -->
<div class="stats-bar">
    <div class="stats-container">
        <div class="stat-item">
            <div class="stat-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M17 21v-2a4 4 0 00-4-4H5a4 4 0 00-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M23 21v-2a4 4 0 00-3-3.87M16 3.13a4 4 0 010 7.75"/></svg></div>
            <div class="stat-content"><span class="stat-value">10,000+</span><span class="stat-label">Businesses Served</span><span class="stat-desc">GST compliance and litigation support across India.</span></div>
        </div>
        <div class="stat-item">
            <div class="stat-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="2" y="3" width="20" height="14" rx="2"/><path d="M8 21h8M12 17v4"/></svg></div>
            <div class="stat-content"><span class="stat-value">15+</span><span class="stat-label">Years Experience</span><span class="stat-desc">Deep expertise in IP registration, GST &amp; business compliance.</span></div>
        </div>
        <div class="stat-item">
            <div class="stat-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M14 2H6a2 2 0 00-2 2v16a2 2 0 002 2h12a2 2 0 002-2V8z"/><path d="M14 2v6h6M16 13H8M16 17H8"/></svg></div>
            <div class="stat-content"><span class="stat-value">50,000+</span><span class="stat-label">Documents Filed</span><span class="stat-desc">Returns, appeals, and filings handled accurately.</span></div>
        </div>
        <div class="stat-item">
            <div class="stat-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="8" r="7"/><path d="M8.21 13.89L7 23l5-3 5 3-1.21-9.12"/></svg></div>
            <div class="stat-content"><span class="stat-value">4.9&#9733;</span><span class="stat-label">Client Rating</span><span class="stat-desc">Trusted by entrepreneurs, startups, and growing businesses.</span></div>
        </div>
        <div class="certifications">
            <div class="cert-item"><svg viewBox="0 0 24 24" fill="none" stroke="#10B981" stroke-width="2"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg>ISO Certified<span class="cert-desc">Professional standards and documented processes.</span></div>
            <div class="cert-item"><svg viewBox="0 0 24 24" fill="none" stroke="#3B82F6" stroke-width="2"><rect x="3" y="11" width="18" height="11" rx="2"/><path d="M7 11V7a5 5 0 0110 0v4"/></svg>SSL Secure<span class="cert-desc">Your financial and business data is fully protected.</span></div>
        </div>
    </div>
</div>

<!-- TOC NAVIGATION -->
<div class="toc-section">
    <div class="toc-container">
        <button class="toc-arrow left" id="tocLeft">&#10094;</button>
        <div class="toc-wrapper" id="tocWrapper">
            <a href="#overview-section" class="toc-btn active">Overview</a>
            <a href="#what-section" class="toc-btn">What Is It</a>
            <a href="#who-section" class="toc-btn">Who Needs It</a>
            <a href="#services-section" class="toc-btn">Services</a>
            <a href="#procedure-section" class="toc-btn">Process</a>
            <a href="#documents-section" class="toc-btn">Documents</a>
            <a href="#challenges-section" class="toc-btn">Challenges</a>
            <a href="#fees-section" class="toc-btn">Fees</a>
            <a href="#timeline-section" class="toc-btn">Timeline</a>
            <a href="#benefits-section" class="toc-btn">Why Patron</a>
            <a href="#comparison-section" class="toc-btn">Comparison</a>
            <a href="#faq-section" class="toc-btn">FAQs</a>
        </div>
        <button class="toc-arrow right" id="tocRight">&#10095;</button>
    </div>
</div>

<!-- SECTION 2: OVERVIEW / INTRO + TL;DR -->
<section class="content-section" id="overview-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">LLP Partner Change for Delhi LLPs</h2>
            <div class="content-text">
                <div class="highlight-box" style="margin-bottom:20px;">
                    <p><strong>&#128204; TL;DR - LLP Partner Change in Delhi Services at a Glance</strong></p>
                    <p>LLP partner change covers five scenarios: (1) Addition of a new partner, (2) Cessation of an existing partner (resignation/retirement/death/removal), (3) Change in designation (partner to designated partner or vice versa), (4) Change in partner's name or address, and (5) Change in nominee of a body corporate partner. Under Section 25 of the LLP Act, every change must be intimated to the ROC within 30 days via Form 4. Simultaneously, the LLP Agreement must be amended via Supplementary Deed and filed via Form 3 (linked with Form 4). For new partners: obtain DPIN/DIN, written consent (Form 6), agree on contribution and profit share, execute supplementary deed. For exiting partners: follow LLP Agreement procedure (or 30-day notice if agreement is silent), settle capital account per S.24. Minimum requirements: at least 2 designated partners at all times, at least 1 must be an Indian resident (182 days). Late filing: Rs 100/day penalty per form, no cap. Non-compliance penalty: Rs 2,000-25,000 per S.25. Patron manages all partner change scenarios for Delhi LLPs from our Rohini office.</p>
                </div>
                <p><div class="table-responsive-wrapper"><table><thead><tr><th>Change Type</th><th>What Happens</th><th>Forms Required</th></tr></thead><tbody>
<tr><td>Partner Addition</td><td>New person joins the LLP as partner/designated partner</td><td>Form 4 + Form 3 (linked) + Form 6 (consent)</td></tr>
<tr><td>Partner Cessation</td><td>Existing partner exits (resignation, retirement, death, removal)</td><td>Form 4 + Form 3 (linked)</td></tr>
<tr><td>Change in Designation</td><td>Partner becomes designated partner or vice versa</td><td>Form 4 + Form 3 (linked)</td></tr>
<tr><td>Change in Name/Address</td><td>Partner's personal name or residential address changes</td><td>Form 4 (+ Form 3 if agreement updated)</td></tr>
<tr><td>Change in Nominee</td><td>Body corporate partner changes its nominee individual</td><td>Form 4</td></tr>
</tbody></table></div></p>
                <p><div class="table-responsive-wrapper"><table><thead><tr><th>Parameter</th><th>Partner</th><th>Designated Partner</th></tr></thead><tbody>
<tr><td>Accountability</td><td>Liable for own acts and omissions</td><td>Additionally responsible for LLP compliance and operations</td></tr>
<tr><td>Signing Authority</td><td>Cannot sign MCA forms</td><td>Signs all MCA forms (DSC required)</td></tr>
<tr><td>DPIN/DIN</td><td>Required</td><td>Required</td></tr>
<tr><td>Minimum Count</td><td>No statutory minimum (but LLP needs min 2 partners)</td><td>Minimum 2 at all times</td></tr>
<tr><td>Residency</td><td>No requirement</td><td>At least 1 must be Indian resident (182 days)</td></tr>
<tr><td>Penal Liability</td><td>Personal liability for own defaults</td><td>Penal liability for LLP's compliance defaults</td></tr>
</tbody></table></div>
<p>Delhi LLPs frequently change partners: professional firms (CA, law, consulting) admitting new partners as talent grows, startups adding investor-partners, firms retiring senior partners, LLPs removing non-performing partners, and designated partner changes when signing authority needs to shift. Each scenario has specific documentation and filing requirements. Using the wrong form or missing the 30-day window creates penalties and incomplete MCA records.</p>
<p>Patron Accounting's Delhi office in Rohini handles the complete partner change: DPIN/DIN application, consent collection, supplementary deed drafting, Form 4 + Form 3 linked filing, capital settlement, and post-change compliance. Integrated with <a href="/llp-partner-change">LLP Partner Change across India</a>, <a href="/llp-incorporation">LLP Registration</a>, <a href="/llp-agreement-change">LLP Agreement Change</a>, and <a href="/pvt-llp-compliance">LLP Compliance</a>.</p></p>
                <p>Content is reviewed quarterly for accuracy.</p>
            </div>
        </div>
    </div>
</section>

<!-- SECTION 3: WHAT IS GSTAT APPEAL FILING -->
<section class="content-section" id="what-section">
    <div class="content-container">
        <div class="two-column">
            <div class="column-content">
                <h2 class="section-title">What is LLP Partner Change in Delhi?</h2>
                <div class="content-text what-is-definition">
                    
                    <p>LLP partner change refers to any modification in the partnership structure of a Limited Liability Partnership registered in Delhi. This includes adding a new partner, removing an existing partner (cessation), changing a partner's designation (partner to designated partner or vice versa), updating a partner's personal details, or changing the nominee of a body corporate partner.</p>
<p>Under <strong>Section 25 of the LLP Act, 2008</strong>, every such change must be notified to the Registrar of Companies (ROC Delhi) within 30 days via <strong>Form 4</strong>. When the change affects the LLP Agreement - which it almost always does for additions and cessations - the amended agreement must be filed via <strong>Form 3</strong>, linked with Form 4.</p>
<p>Delhi hosts a significant concentration of professional LLPs (chartered accountants, lawyers, consultants), startup LLPs in Connaught Place and Saket, and trading LLPs across Chandni Chowk and Karol Bagh. Partner changes are routine as these businesses grow, restructure, or transition leadership. The ROC Delhi (with offices covering Delhi I and Delhi II jurisdictions) processes these filings.</p>
<p>Patron Accounting manages all five types of partner changes for Delhi LLPs from our office in Rohini, ensuring linked Form 4 + Form 3 filing within 7 days, proper supplementary deed execution on Delhi stamp paper, and maintenance of minimum designated partner requirements.</p>

                </div>
                <div class="highlight-box" style="margin-top:20px;">
                    <p><strong>Key Terms for LLP Partner Change in Delhi:</strong></p>
                    <p><strong>DPIN/DIN:</strong> Designated Partner Identification Number / Director Identification Number - required for every partner in an LLP. Applied via DIR-3.</p>
<p><strong>Form 4:</strong> Notice of change in partners filed with ROC within 30 days of the change event.</p>
<p><strong>Form 3:</strong> Filing of updated/supplementary LLP Agreement with ROC. Filed as linked form with Form 4 when agreement is amended.</p>
<p><strong>Form 6:</strong> Consent of incoming partner - attached to Form 4 for partner addition.</p>
<p><strong>Section 24:</strong> Governs cessation of partner interest and capital settlement on exit.</p>
<p><strong>Section 25:</strong> Mandatory notification to ROC for all partner changes within 30 days.</p>
<p><strong>Designated Partner:</strong> Partner responsible for LLP compliance and operations. Minimum 2 required, at least 1 must be Indian resident (182 days).</p>

                </div>
            </div>
            <div class="column-image">
                <div class="illustration-placeholder">
                    <div class="illustration-icon" style="max-width:240px;">
                        <svg viewBox="0 0 200 180" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <!-- Building / Tribunal -->
                            <rect x="40" y="50" width="120" height="100" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/>
                            <!-- Roof / Pediment -->
                            <path d="M30 52L100 15L170 52" stroke="#14365F" stroke-width="2" fill="#E8EDF4"/>
                            <!-- Columns -->
                            <rect x="55" y="60" width="8" height="80" rx="2" fill="#D4DCE8" stroke="#14365F" stroke-width="0.8"/>
                            <rect x="80" y="60" width="8" height="80" rx="2" fill="#D4DCE8" stroke="#14365F" stroke-width="0.8"/>
                            <rect x="112" y="60" width="8" height="80" rx="2" fill="#D4DCE8" stroke="#14365F" stroke-width="0.8"/>
                            <rect x="137" y="60" width="8" height="80" rx="2" fill="#D4DCE8" stroke="#14365F" stroke-width="0.8"/>
                            <!-- Door -->
                            <rect x="88" y="105" width="24" height="35" rx="12" fill="#14365F" opacity="0.15" stroke="#14365F" stroke-width="1"/>
                            <!-- Scale of Justice icon -->
                            <circle cx="100" cy="78" r="14" fill="#FFF3E0" stroke="#F5A623" stroke-width="1.2"/>
                            <line x1="100" y1="70" x2="100" y2="86" stroke="#14365F" stroke-width="1.5"/>
                            <line x1="90" y1="76" x2="110" y2="76" stroke="#14365F" stroke-width="1.5"/>
                            <path d="M90 76L87 83H93Z" fill="#E8712C" opacity="0.6"/>
                            <path d="M110 76L107 83H113Z" fill="#E8712C" opacity="0.6"/>
                            <!-- Green check badge -->
                            <circle cx="152" cy="42" r="18" fill="#E8F5E9" stroke="#25D366" stroke-width="1.5"/>
                            <path d="M144 42l5 5 10-10" stroke="#25D366" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"/>
                            <!-- APL-05 tag -->
                            <rect x="30" y="120" width="42" height="18" rx="4" fill="#FFF3E0" stroke="#F5A623" stroke-width="1"/>
                            <text x="51" y="132.5" font-size="8" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial, sans-serif">APL-05</text>
                            <!-- Label -->
                            <text x="100" y="170" font-size="10" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial, sans-serif">LLP Partner Change in Delhi</text>
                        </svg>
                    </div>
                    <div class="illustration-badge">
                        <span>Professional Service</span>
                        <strong>LLP Partner Change Delhi</strong>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- SECTION 4: WHO CAN FILE -->
<section class="content-section" id="who-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Who Needs LLP Partner Change Services in Delhi?</h2>
            <div class="content-text">
                
                <ul>
<li><strong>Professional LLPs (CA, Law, Consulting)</strong> - admitting new partners as the firm grows, retiring senior partners, or changing designated partners for signing authority</li>
<li><strong>Startup LLPs</strong> - adding investor-partners who contribute capital in exchange for profit share, or removing co-founders who exit the venture</li>
<li><strong>Trading and Manufacturing LLPs</strong> - restructuring partnership when business needs change, adding family members, or removing inactive partners</li>
<li><strong>LLPs with Foreign Partners</strong> - adding foreign nationals or foreign companies as partners with proper documentation (passport, apostilled documents, DPIN)</li>
<li><strong>LLPs Changing Designated Partners</strong> - when the current designated partner resigns, retires, or when signing authority needs to shift to a different partner</li>
<li><strong>LLPs Below Minimum Partner Count</strong> - when partner cessation reduces count below the statutory minimum of 2 partners or 2 designated partners</li>
<li><strong>LLPs Updating Partner Details</strong> - when a partner changes name (marriage, legal change) or residential address</li>
</ul>

            </div>
            </div>
        </div>
    </div>
</section>

<!-- SECTION 5: OUR SERVICES -->
<section class="content-section" id="services-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">LLP Partner Change Services - What Patron Handles for Delhi LLPs</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Service</th><th>What We Do</th></tr></thead>
                    <tbody>
                        <tr><td>DPIN/DIN for New Partner</td><td>DSC procurement, DIR-3 application for DPIN/DIN. Passport-based DPIN for foreign partners. Existing DIN holders can use their DIN directly.</td></tr>
<tr><td>Consent and Documentation</td><td>Collect Form 6 (consent), PAN, ID proof, address proof, photo, DSC for new partner. Resignation letter and settlement terms for exiting partner.</td></tr>
<tr><td>Partner Meeting and Resolution</td><td>Convene meeting, pass resolution for addition/cessation, agree contribution and profit sharing, record minutes, all partners sign.</td></tr>
<tr><td>Supplementary LLP Agreement</td><td>Draft deed reflecting partner change - new/exiting partner details, updated contribution table, revised profit ratios. Execute on Delhi stamp paper. Notarise.</td></tr>
<tr><td>Form 4 + Form 3 (Linked Filing)</td><td>File within 30 days as linked forms on MCA V3 portal. Consent, proof of cessation, supplementary deed attached. Designated partner DSC + CA/CS/CMA certification.</td></tr>
<tr><td>Capital Settlement (Cessation)</td><td>Calculate capital account balance, ensure contribution returned per S.24 and LLP Agreement terms. Coordinate bank transfers. Update books.</td></tr>
<tr><td>Minimum Partner Check</td><td>Verify minimum 2 designated partners remain after cessation, at least 1 Indian resident. Initiate replacement appointment if below minimum.</td></tr>
<tr><td>Post-Change Updates</td><td>Update internal register, bank signatories, PAN/TAN (if needed), GST authorised signatory, Form 11 (next annual return).</td></tr>
<tr><td>Bundled Services</td><td>Partner change integrated with <a href="/pvt-llp-compliance">LLP Compliance</a>, <a href="/llp-incorporation">LLP Registration</a>, and <a href="/accounting-services">Accounting Services</a>.</td></tr>

                    </tbody>
                </table>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- SECTION 7: 7-STEP PROCESS -->
<section class="steps-section" id="procedure-section">
    <div class="section-container">
        <header class="section-header" style="text-align:center;margin-bottom:48px;">
            <span class="section-eyebrow">Our Process</span>
            <h2 class="section-title">6-Step LLP Partner Change Process for Delhi LLPs</h2>
            <p class="section-subtitle" style="text-align:left;max-width:100%;">Patron Accounting manages the complete partner change - from agreement review to post-change compliance - for all Delhi LLPs within 7-15 working days.</p>
        </header>
        <div class="steps-container">
            <div class="step-card">
    <div class="step-content">
        <span class="step-badge">Step 1</span>
        <h3 class="step-title">Review LLP Agreement</h3>
        <p class="step-description">Check existing agreement for provisions on partner admission, exit, retirement, removal, consent mechanism (unanimous or majority), notice period for resignation, and capital settlement. If agreement is silent: First Schedule defaults apply.</p>
        <div class="step-highlights">
            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Admission provisions</span>
            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Exit/removal clauses</span>
            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Default rules advisory</span>
        </div>
    </div>
    <div class="step-visual">
        <div class="step-illustration">
            <div class="illustration-icon">
                <svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <rect x="15" y="10" width="90" height="65" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/>
                    <line x1="30" y1="28" x2="90" y2="28" stroke="#F5A623" stroke-width="3" stroke-linecap="round"/>
                    <line x1="30" y1="42" x2="80" y2="42" stroke="#14365F" stroke-width="2" stroke-linecap="round" opacity="0.3"/>
                    <line x1="30" y1="54" x2="70" y2="54" stroke="#14365F" stroke-width="2" stroke-linecap="round" opacity="0.3"/>
                    <circle cx="85" cy="65" r="14" fill="#E8F5E9" stroke="#25D366" stroke-width="1.5"/>
                    <path d="M79 65l4 4 8-8" stroke="#25D366" stroke-width="2" stroke-linecap="round"/>
                </svg>
            </div>
            <span class="illustration-label">Agreement Review</span>
            <span class="step-number-large">01</span>
        </div>
    </div>
</div>
<div class="step-card">
    <div class="step-content">
        <span class="step-badge">Step 2</span>
        <h3 class="step-title">Obtain DPIN/DIN and Consent</h3>
        <p class="step-description">For addition: obtain DSC, apply for DPIN/DIN via DIR-3 if not already held. Collect PAN, Aadhaar (Indian), passport (foreign), address proof, photo, written consent (Form 6). For cessation: written resignation or death certificate or removal resolution.</p>
        <div class="step-highlights">
            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>DPIN/DIN application</span>
            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Form 6 consent</span>
            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Document collection</span>
        </div>
    </div>
    <div class="step-visual">
        <div class="step-illustration">
            <div class="illustration-icon">
                <svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <circle cx="60" cy="35" r="20" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/>
                    <circle cx="60" cy="30" r="8" fill="#D4DCE8" stroke="#14365F" stroke-width="1"/>
                    <path d="M45 52c0-8.284 6.716-15 15-15s15 6.716 15 15" stroke="#14365F" stroke-width="1.5" fill="none"/>
                    <rect x="75" y="55" width="30" height="25" rx="4" fill="#FFF3E0" stroke="#F5A623" stroke-width="1"/>
                    <path d="M82 65l4 4 8-8" stroke="#F5A623" stroke-width="2" stroke-linecap="round"/>
                </svg>
            </div>
            <span class="illustration-label">Identity Verified</span>
            <span class="step-number-large">02</span>
        </div>
    </div>
</div>
<div class="step-card">
    <div class="step-content">
        <span class="step-badge">Step 3</span>
        <h3 class="step-title">Partner Meeting and Resolution</h3>
        <p class="step-description">Hold partner meeting. Pass resolution approving addition/cessation, specifying contribution (if any), profit sharing post-change, capital settlement terms (for cessation), and authorising designated partner to file with ROC. Record minutes. All partners sign.</p>
        <div class="step-highlights">
            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Resolution passed</span>
            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Minutes recorded</span>
        </div>
    </div>
    <div class="step-visual">
        <div class="step-illustration">
            <div class="illustration-icon">
                <svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <circle cx="35" cy="40" r="12" fill="#D4DCE8" stroke="#14365F" stroke-width="1"/>
                    <circle cx="60" cy="35" r="12" fill="#D4DCE8" stroke="#14365F" stroke-width="1"/>
                    <circle cx="85" cy="40" r="12" fill="#D4DCE8" stroke="#14365F" stroke-width="1"/>
                    <rect x="25" y="60" width="70" height="25" rx="4" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/>
                    <line x1="35" y1="70" x2="85" y2="70" stroke="#F5A623" stroke-width="2" stroke-linecap="round"/>
                    <line x1="35" y1="78" x2="75" y2="78" stroke="#14365F" stroke-width="1.5" stroke-linecap="round" opacity="0.3"/>
                </svg>
            </div>
            <span class="illustration-label">Resolution Approved</span>
            <span class="step-number-large">03</span>
        </div>
    </div>
</div>
<div class="step-card">
    <div class="step-content">
        <span class="step-badge">Step 4</span>
        <h3 class="step-title">Execute Supplementary LLP Agreement</h3>
        <p class="step-description">Draft supplementary deed reflecting new/exiting partner details, updated contribution table, revised profit sharing ratio, updated management clauses. Execute on Delhi stamp paper (Rs 100-500+). All partners (including incoming) sign. Notarise.</p>
        <div class="step-highlights">
            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Custom deed drafted</span>
            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Delhi stamp paper</span>
            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Notarised</span>
        </div>
    </div>
    <div class="step-visual">
        <div class="step-illustration">
            <div class="illustration-icon">
                <svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <rect x="20" y="10" width="80" height="60" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/>
                    <line x1="35" y1="28" x2="85" y2="28" stroke="#F5A623" stroke-width="3" stroke-linecap="round"/>
                    <line x1="35" y1="40" x2="75" y2="40" stroke="#14365F" stroke-width="2" stroke-linecap="round" opacity="0.3"/>
                    <line x1="35" y1="50" x2="65" y2="50" stroke="#14365F" stroke-width="2" stroke-linecap="round" opacity="0.3"/>
                    <circle cx="85" cy="75" r="15" fill="#FFF3E0" stroke="#F5A623" stroke-width="1.5"/>
                    <text x="85" y="80" font-size="12" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">&#9998;</text>
                </svg>
            </div>
            <span class="illustration-label">Deed Executed</span>
            <span class="step-number-large">04</span>
        </div>
    </div>
</div>
<div class="step-card">
    <div class="step-content">
        <span class="step-badge">Step 5</span>
        <h3 class="step-title">File Form 4 + Form 3 (Linked)</h3>
        <p class="step-description">Within 30 days of the change: file Form 4 (partner change notice) and Form 3 (agreement update) as linked forms on MCA V3. Attach consent, proof of cessation, supplementary deed. Designated partner DSC + professional certification (CA/CS/CMA). Patron files within 7 days.</p>
        <div class="step-highlights">
            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Linked filing</span>
            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>CA/CS certified</span>
            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Filed in 7 days</span>
        </div>
    </div>
    <div class="step-visual">
        <div class="step-illustration">
            <div class="illustration-icon">
                <svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <rect x="15" y="15" width="40" height="50" rx="4" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/>
                    <rect x="65" y="15" width="40" height="50" rx="4" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/>
                    <line x1="55" y1="40" x2="65" y2="40" stroke="#F5A623" stroke-width="2"/>
                    <text x="35" y="35" font-size="8" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">Form 4</text>
                    <text x="85" y="35" font-size="8" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">Form 3</text>
                    <path d="M60 70l-8 15h16z" fill="#E8F5E9" stroke="#25D366" stroke-width="1.5"/>
                    <path d="M56 80l3 3 6-6" stroke="#25D366" stroke-width="1.5" stroke-linecap="round"/>
                </svg>
            </div>
            <span class="illustration-label">Forms Filed</span>
            <span class="step-number-large">05</span>
        </div>
    </div>
</div>
<div class="step-card">
    <div class="step-content">
        <span class="step-badge">Step 6</span>
        <h3 class="step-title">Post-Change Compliance</h3>
        <p class="step-description">Update internal register. Add/remove bank signatories. Update GST authorised signatory (if designated partner changed). Reflect in next Form 11 (Annual Return). Ensure capital settlement payment to exiting partner. Verify minimum designated partner count.</p>
        <div class="step-highlights">
            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Bank updated</span>
            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>GST updated</span>
            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Capital settled</span>
        </div>
    </div>
    <div class="step-visual">
        <div class="step-illustration">
            <div class="illustration-icon">
                <svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <circle cx="60" cy="45" r="30" fill="#E8F5E9" stroke="#25D366" stroke-width="2"/>
                    <path d="M45 45l10 10 20-20" stroke="#25D366" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
            </div>
            <span class="illustration-label">All Complete</span>
            <span class="step-number-large">06</span>
        </div>
    </div>
</div>

        </div>
    </div>
</section>

<!-- SECTION 8: DOCUMENTS REQUIRED -->
<section class="content-section" id="documents-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Forms and Documents Required for LLP Partner Change in Delhi</h2>
            <div class="content-text">
                
                <div class="table-responsive-wrapper"><table>
<thead><tr><th>Form/Document</th><th>Purpose</th><th>Filed By</th><th>Deadline</th></tr></thead>
<tbody>
<tr><td>Form 4</td><td>Notice of partner change to ROC</td><td>LLP (designated partner DSC)</td><td>Within 30 days</td></tr>
<tr><td>Form 3 (linked)</td><td>Updated LLP Agreement</td><td>LLP (designated partner DSC)</td><td>Within 30 days (linked with Form 4)</td></tr>
<tr><td>Form 6</td><td>Consent of incoming partner</td><td>New partner</td><td>Attached to Form 4</td></tr>
<tr><td>Supplementary LLP Agreement</td><td>Amendment reflecting partner change</td><td>All partners sign</td><td>Before Form 3 filing</td></tr>
<tr><td>Partner Resolution</td><td>Minutes approving the change</td><td>All partners</td><td>Before Form 4 filing</td></tr>
<tr><td>DIR-3 (if DPIN needed)</td><td>DPIN application for new partner</td><td>New partner</td><td>Before Form 4 filing</td></tr>
</tbody></table></div>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 9: CHALLENGES -->
<section class="content-section" id="challenges-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Common Challenges for LLP Partner Change in Delhi</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Challenge</th><th>Impact</th><th>How Patron Accounting Solves It</th></tr></thead>
                    <tbody>
                        <tr><td>Partner Removal Without Agreement Clause</td><td>First Schedule default does not allow majority expulsion - requires consent of all partners including the one being removed</td><td>Patron reviews the LLP Agreement before advising on removal mechanisms and alternative approaches</td></tr>
<tr><td>Below Minimum Designated Partners</td><td>If cessation reduces designated partners below 2, LLP cannot file forms on MCA portal after 6 months</td><td>Patron ensures replacement is initiated simultaneously with cessation - no compliance gap</td></tr>
<tr><td>Unlinked Form 4 and Form 3</td><td>Filing separately causes MCA portal blocks and processing failures</td><td>Patron always files Form 4 + Form 3 as linked forms for Delhi LLPs</td></tr>
<tr><td>Capital Settlement Disputes</td><td>Disputes arise when profits are undistributed, assets are illiquid, or agreement doesn't specify settlement terms</td><td>Patron advises Delhi LLPs on clear capital settlement clauses during the change process</td></tr>
<tr><td>Foreign Partner Documentation</td><td>Passport (notarised/apostilled), overseas address proof, DPIN with foreign docs required</td><td>Patron handles complete foreign partner additions with proper documentation for Delhi LLPs</td></tr>

                    </tbody>
                </table>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- SECTION 10: FEES -->
<section class="content-section" id="fees-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Fees for LLP Partner Change in Delhi 2026</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Fee Component</th><th>Amount</th></tr></thead>
                    <tbody>
                        <tr><td>Patron Accounting Professional Fees</td><td class="table-amount">Starting from INR 2,499 (Exl GST and Govt. Charges)</td></tr>
<tr><td>Partner Addition (Form 4 + Form 3)</td><td class="table-amount">From Rs 4,999 + Govt fees</td></tr>
<tr><td>Partner Cessation (Form 4 + Form 3)</td><td class="table-amount">From Rs 4,999 + Govt fees</td></tr>
<tr><td>Partner Addition + Cessation (Simultaneous)</td><td class="table-amount">From Rs 7,999 + Govt fees</td></tr>
<tr><td>Change in Designation</td><td class="table-amount">From Rs 3,999 + Govt fees</td></tr>
<tr><td>Change in Partner Name/Address (Form 4)</td><td class="table-amount">From Rs 1,999 + Govt fees</td></tr>
<tr><td>DPIN/DIN Application (New Partner)</td><td class="table-amount">From Rs 1,999</td></tr>
<tr><td>DSC for New Partner</td><td class="table-amount">From Rs 1,499</td></tr>
<tr><td>Supplementary LLP Agreement + Notarisation</td><td class="table-amount">Included (Delhi stamp duty at actuals)</td></tr>
<tr><td>Capital Settlement Advisory (Cessation)</td><td class="table-amount">Included</td></tr>
<tr><td>Post-Change: Bank Signatory + GST Update</td><td class="table-amount">Included</td></tr>
<tr><td>Foreign Partner Addition (with documentation)</td><td class="table-amount">From Rs 7,999</td></tr>

                    </tbody>
                </table>
                </div>
                <p style="margin-top:16px;font-size:13px;color:var(--text-muted);font-style:italic;">All fees and charges listed are indicative only and do not constitute a binding offer. Final amounts may vary depending on the volume of work and the complexity involved.</p>
                <p style="margin-top:16px;">Professional service charges for drafting, filing, and representation are separate from the statutory fees. The exact fee depends on the complexity of the case, disputed amount, and number of hearings required. Contact us for a detailed quote.</p>
                <p style="margin-top:16px;"><strong>Get a free LLP Partner Change in Delhi consultation - <a href="tel:+919459456700">Call +91 945 945 6700</a> or <a href="https://wa.me/919459456700?text=Hi%2C%20I%20need%20help%20with%20LLP%20Partner%20Change%20in%20Delhi.%20Please%20call%20me." target="_blank" rel="noopener">WhatsApp us</a>. No-obligation assessment.</strong></p>
            </div>
        </div>
    </div>
</section>

<!-- SECTION 11: TIMELINE -->
<section class="content-section" id="timeline-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Timeline for LLP Partner Change in Delhi</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Stage</th><th>Estimated Timeline</th></tr></thead>
                    <tbody>
                        <tr><td>Agreement Review and Advisory</td><td>1-2 working days</td></tr>
<tr><td>DPIN/DIN Application (if needed)</td><td>3-5 working days</td></tr>
<tr><td>Consent Collection and Documentation</td><td>1-2 working days</td></tr>
<tr><td>Partner Meeting and Resolution</td><td>1 working day</td></tr>
<tr><td>Supplementary Deed Drafting and Execution</td><td>2-3 working days</td></tr>
<tr><td>Form 4 + Form 3 Linked Filing</td><td>1-2 working days</td></tr>
<tr><td>ROC Processing</td><td>2-5 working days</td></tr>
<tr><td>Post-Change Updates (Bank, GST, etc.)</td><td>2-3 working days</td></tr>

                    </tbody>
                </table>
                </div>
                <div class="highlight-box" style="margin-top:16px;">
                    
                    <p><strong>Total Timeline:</strong> Standard partner addition/cessation: 7-15 working days. With DPIN application for new partner: 10-20 working days. Patron files Form 4 + Form 3 within 7 days of receiving all documents.</p>

                </div>
            </div>
        </div>
    </div>
</section>

<!-- SECTION 12: BENEFITS -->
<section class="why-choose-section" id="benefits-section">
    <div class="section-container">
        <div style="text-align:center;margin-bottom:48px;">
            <div class="section-eyebrow"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg> Key Benefits</div>
            <h2 class="section-title">Why Choose Patron for LLP Partner Change in Delhi</h2>
        </div>
        <div class="features-grid">
<article class="feature-card"><div class="feature-icon" style="background:var(--orange-light);"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:24px;height:24px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><h3>All 5 Scenarios Handled</h3><p>Addition, cessation, designation change, name/address change, and nominee change. Patron identifies the exact scenario, determines the correct forms and linked filings, and executes the complete process for Delhi LLPs.</p></article>
<article class="feature-card"><div class="feature-icon" style="background:var(--orange-light);"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:24px;height:24px;"><path d="M13.828 10.172a4 4 0 00-5.656 0l-4 4a4 4 0 105.656 5.656l1.102-1.101"/><path d="M10.172 13.828a4 4 0 005.656 0l4-4a4 4 0 00-5.656-5.656l-1.1 1.1"/></svg></div><h3>Linked Form Filing</h3><p>Form 4 + Form 3 filed simultaneously as linked forms. No portal blocks. No incomplete records. Patron's MCA V3 expertise ensures smooth processing for Delhi LLPs.</p></article>
<article class="feature-card"><div class="feature-icon" style="background:var(--orange-light);"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:24px;height:24px;"><path d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2"/></svg></div><h3>Agreement Review Before Action</h3><p>Before any partner change: Patron reviews the existing LLP Agreement for admission, exit, and removal provisions. Prevents surprises like unanimous consent requirements or missing removal clauses.</p></article>
<article class="feature-card"><div class="feature-icon" style="background:var(--orange-light);"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:24px;height:24px;"><path d="M17 21v-2a4 4 0 00-4-4H5a4 4 0 00-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M23 21v-2a4 4 0 00-3-3.87"/><path d="M16 3.13a4 4 0 010 7.75"/></svg></div><h3>Simultaneous Replacement</h3><p>When a cessation reduces partner count below minimum: Patron initiates replacement appointment simultaneously. No compliance gap. Minimum designated partner count maintained at all times.</p></article>
</div>
    </div>
</section>

<!-- SECTION 12A: SOCIAL PROOF -->
<section class="content-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Trusted by 10,000+ Businesses Across India</h2>
            <div class="content-text">
                
                <p><strong>10,000+ Businesses Served | 4.9 Google Rating | 50,000+ Documents Filed | 15+ Years</strong></p>
<blockquote style="border-left:4px solid var(--orange);padding:16px 20px;margin:20px 0;background:var(--orange-lighter);border-radius:0 8px 8px 0;">
<p>"Delhi professional LLP - senior partner retiring, 2 new partners joining simultaneously. Patron applied for both DPINs, drafted comprehensive supplementary deed covering exit settlement + new contributions + revised profit tiers, filed Form 4 + Form 3 linked in 10 days, updated bank signatories and GST. Seamless transition, zero gap."</p>
<p><strong>- Managing Partner, Delhi LLP</strong></p>
</blockquote>
<p><strong>4-Office Signal:</strong> Pune, Mumbai, Delhi, and Gurugram.</p>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 13: SELF-FILING vs PROFESSIONAL COMPARISON -->
<section class="content-section" id="comparison-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Self-Filing vs Patron Accounting for LLP Partner Change in Delhi</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Parameter</th><th>Self-Filing</th><th>Patron Accounting</th></tr></thead>
                    <tbody>
                        <tr><td>Agreement Review</td><td>Often skipped - leads to surprises</td><td>Thorough review before any action</td></tr>
<tr><td>DPIN/DIN Application</td><td>DIY on MCA portal - errors common</td><td>Professional application with correct documentation</td></tr>
<tr><td>Supplementary Deed</td><td>Generic template - may miss key clauses</td><td>Custom-drafted for Delhi LLPs on proper stamp paper</td></tr>
<tr><td>Form 4 + Form 3 Linking</td><td>Frequently filed separately - causes portal blocks</td><td>Always filed as linked forms - zero rejections</td></tr>
<tr><td>Capital Settlement</td><td>Often disputed without proper documentation</td><td>Clear terms documented and executed</td></tr>
<tr><td>Minimum Partner Check</td><td>Often overlooked - compliance gap</td><td>Simultaneous replacement if needed</td></tr>
<tr><td>Timeline</td><td>30-60 days (with errors and resubmissions)</td><td>7-15 working days</td></tr>
<tr><td>Post-Change Compliance</td><td>Bank, GST updates often delayed</td><td>All updates completed within 3 working days</td></tr>

                    </tbody>
                </table>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- SECTION 14: RELATED SERVICES -->
<section class="content-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Related Services for Delhi LLPs</h2>
            <div class="content-text">
                
                <p>Patron Accounting provides end-to-end support for Delhi LLPs beyond partner changes:</p>
<ul>
<li><a href="/llp-partner-change">LLP Partner Change in India</a> - National-level partner change services for LLPs across all states</li>
<li><a href="/llp-agreement-change">LLP Agreement Change</a> - Amend LLP Agreement clauses beyond partner changes (business activity, registered office, profit sharing)</li>
<li><a href="/llp-incorporation">LLP Registration</a> - New LLP incorporation with DPIN, DSC, agreement drafting, and MCA filing</li>
<li><a href="/pvt-llp-compliance">LLP Compliance</a> - Annual compliance (Form 8 + Form 11), tax audit, and statutory filings</li>
<li><a href="/llp-contribution-change">LLP Contribution Change</a> - Modify partner contributions without changing partners</li>
<li><a href="/legal-drafting">Legal Drafting Service</a> - Supplementary deeds, partnership deeds, and legal documentation</li>
</ul>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 15A: LEGAL FRAMEWORK -->
<section class="content-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Legal Framework for LLP Partner Change in Delhi</h2>
            <div class="content-text">
                
                <p><strong>Section 24, LLP Act 2008:</strong> Governs cessation of partner interest. On cessation, partner entitled to receive amount equal to their capital contribution unless otherwise specified in the LLP Agreement.</p>
<p><strong>Section 25(1):</strong> Every partner must intimate the LLP within 15 days of any change in name or address.</p>
<p><strong>Section 25(2):</strong> LLP must file notice with ROC within 30 days of any person becoming a partner, ceasing to be a partner, or any change in partner's name/address.</p>
<p><strong>Section 25(3):</strong> Notice for incoming partner must contain consent statement signed by the new partner.</p>
<p><strong>Section 25(4) - Penalty:</strong> LLP and every designated partner liable to pay Rs 2,000-25,000 for non-compliance with Section 25.</p>
<p><strong>Rule 22, LLP Rules 2009:</strong> Prescribes Form 4 for partner changes. Must be filed within 30 days. Certified by practising CA/CS/CMA.</p>
<p><strong>Section 7:</strong> Minimum 2 designated partners required. At least 1 must be an Indian resident (stayed in India 182+ days in the preceding year).</p>
<p><strong>First Schedule:</strong> Default rules - majority of partners CANNOT expel a partner unless LLP Agreement expressly provides for removal. Without agreement provision, removal requires consent of all partners.</p>
<p><strong>Source:</strong> <a href="https://mca.gov.in" target="_blank" rel="noopener">Ministry of Corporate Affairs (mca.gov.in)</a>, LLP Act 2008, LLP Rules 2009</p>

            </div>
        </div>
    </div>
</section>

<!-- FAQ SECTION -->
<section id="faq-section" class="content-section" style="background-color: #ffffff;">
    <div class="content-container">
        <div class="text-content">
            <div class="faq-expanded">
                <aside class="faq-expanded__aside">
                    <h2 class="faq-expanded__title">Frequently Asked Questions - LLP Partner Change in Delhi</h2>
                    <p class="faq-expanded__lead">Expert answers to common questions about LLP partner addition, cessation, and Form 4 filing for Delhi LLPs.</p>
                    @include('partials.bigin-form', [
                        'variant'  => 'compact',
                        'service'  => 'LLP Partner Change in Delhi',
                        'city'     => 'Delhi',
                    ])
                </aside>
                <div class="faq-expanded__list">
                    <div class="faq-expanded__item" id="faq-1">
                        <h3 class="faq-expanded__q">What forms are needed for adding a new partner to a Delhi LLP?</h3>
                        <div class="faq-expanded__a"><p>Form 4 (notice of partner change) and Form 3 (updated LLP Agreement) must be filed as linked forms within 30 days. Form 6 (consent of new partner) is attached to Form 4. Before filing: the new partner needs DPIN/DIN and DSC. The supplementary LLP Agreement reflecting the new partner's contribution, profit share, and rights must be executed on stamp paper. Patron manages the complete process for Delhi LLPs.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-2">
                        <h3 class="faq-expanded__q">Can a partner be removed from an LLP in Delhi?</h3>
                        <div class="faq-expanded__a"><p>Only if the LLP Agreement expressly provides for partner removal. Under the First Schedule (default rules), the majority of partners CANNOT expel a partner. If the agreement is silent: removal requires consent of all partners including the partner being removed. Patron reviews the agreement before advising on removal for Delhi LLPs.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-3">
                        <h3 class="faq-expanded__q">What is the minimum number of partners required in a Delhi LLP?</h3>
                        <div class="faq-expanded__a"><p>An LLP must have at least 2 partners at all times. At least 2 must be designated partners. At least 1 designated partner must be an Indian resident (stayed in India 182+ days). If designated partner count drops below 2: the LLP has 6 months to appoint a replacement. Patron monitors minimums for Delhi LLPs.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-4">
                        <h3 class="faq-expanded__q">What does an exiting partner receive from a Delhi LLP?</h3>
                        <div class="faq-expanded__a"><p>Under Section 24: an exiting partner is entitled to receive an amount equal to their capital contribution, unless the LLP Agreement specifies different terms (e.g., share of goodwill, retention period). Settlement may include capital contribution, undistributed profits, and agreed goodwill. Patron advises Delhi LLPs on clear settlement terms.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-5">
                        <h3 class="faq-expanded__q">Can a foreign national become an LLP partner in Delhi?</h3>
                        <div class="faq-expanded__a"><p>Yes. The LLP Act allows foreign nationals and foreign companies to become partners. No citizenship or residency restriction for partners. However, at least 1 designated partner must be an Indian resident (182 days). Foreign partner needs passport (notarised/apostilled), overseas address proof, and DPIN application. Patron handles foreign partner additions for Delhi LLPs.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-6">
                        <h3 class="faq-expanded__q">What is the penalty for late filing of LLP partner change?</h3>
                        <div class="faq-expanded__a"><p>Late Form 4 or Form 3: Rs 100/day per form with no cap. Both forms delayed by 90 days = Rs 18,000 total. Additionally, S.25(4) prescribes Rs 2,000-25,000 on the LLP and every designated partner for not filing within 30 days. Patron files within 7 days for Delhi LLPs.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-7">
                        <h3 class="faq-expanded__q">Do Form 4 and Form 3 need to be linked for Delhi LLPs?</h3>
                        <div class="faq-expanded__a"><p>Yes, when the partner change affects the LLP Agreement (addition or cessation almost always does). Filing separately causes MCA portal validation failures. For designation-only or name/address changes, Form 4 can be filed independently. Patron determines the correct approach for each Delhi LLP scenario.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-8">
                        <h3 class="faq-expanded__q">How much does LLP partner change cost in Delhi?</h3>
                        <div class="faq-expanded__a"><p>Patron: partner addition from Rs 4,999 (includes DPIN check, consent, deed, Form 4 + Form 3 linked). Partner cessation from Rs 4,999. Simultaneous addition + cessation from Rs 7,999. Designation change from Rs 3,999. All plus Delhi stamp duty and government filing fees. Call +91 945 945 6700.</p></div>
                    </div>
                </div>
            </div>


            <!-- Quick Answers -->
            <div class="highlight-box" style="margin-top:32px;">
                <p><strong>Quick Answers</strong></p>
                <p><strong>Naya partner add karna hai - kya karein?</strong> DPIN/DIN lo -> consent (Form 6) -> partners ki meeting -> supplementary deed stamp paper par -> Form 4 + Form 3 linked file karo 30 din mein. Patron 7 din mein file karta hai.</p>
<p><strong>Partner ko nikaal sakte hain?</strong> Sirf tab jab LLP Agreement mein removal clause ho. Default mein majority se nahi nikal sakte. Agreement check karo pehle.</p>
<p><strong>Minimum kitne partners chahiye?</strong> Minimum 2 partners, 2 designated partners, 1 designated partner Indian resident (182 din).</p>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 18: URGENCY CTA -->
<section class="content-section" style="background: var(--orange-lighter) !important; border-left: 4px solid var(--orange);">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Don't Delay Your LLP Partner Change Filing</h2>
            <div class="content-text">
                
                <p>LLP partner changes must be filed within 30 days via linked Form 4 + Form 3. Late filing attracts <strong>Rs 100/day per form (no cap)</strong> plus Section 25 penalty of Rs 2,000-25,000. If designated partner count drops below 2, the LLP has 6 months to appoint a replacement, after which all MCA filings are blocked.</p>
<p>Partner changes without proper agreement amendment create incomplete records and enforcement risk. Delhi LLPs planning partner additions or exits should initiate the legal process immediately.</p>
<p><strong>Contact Patron's Delhi office for immediate partner change compliance: <a href="tel:+919459456700">Call +91 945 945 6700</a> or <a href="https://wa.me/919459456700?text=Hi%2C%20I%20need%20help%20with%20LLP%20Partner%20Change%20in%20Delhi." target="_blank" rel="noopener">WhatsApp us</a>.</strong></p>

            </div>
        </div>
    </div>
</section>

<!-- CONCLUSION + CTA BLOCK (Dark) -->
<section class="content-section" style="background: var(--blue) !important;">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title" style="color:#FFFFFF !important;">Get Expert LLP Partner Change Services in Delhi</h2>
            <div class="content-text" style="text-align:left;">
                
                <p style="color:rgba(255,255,255,0.9);">LLP partner change for Delhi LLPs encompasses five scenarios - addition, cessation, designation change, name/address change, and nominee change - each requiring Form 4 with the ROC within 30 days, plus Form 3 for LLP Agreement update (filed as linked forms). New partners need DPIN/DIN and written consent. Exiting partners receive their capital contribution per S.24. Minimum 2 designated partners and 1 Indian resident must be maintained at all times.</p>
<p style="color:rgba(255,255,255,0.9);">Patron Accounting manages the complete LLP partner change from our Delhi office in Rohini - DPIN/DIN application, consent collection, supplementary deed drafting, Form 4 + Form 3 linked filing within 7 days, capital settlement, and post-change compliance. 15+ years, 10,000+ businesses, offices in Pune, Mumbai, Delhi, and Gurugram.</p>

            </div>
            <div style="display:flex;gap:14px;flex-wrap:wrap;margin-top:24px;">
                <a href="tel:+919459456700" style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:var(--orange);color:#fff;border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#128222; Call +91 945 945 6700</a>
                <a href="https://wa.me/919459456700?text=Hi%2C%20I%20need%20help%20with%20LLP%20Partner%20Change%20in%20Delhi.%20Please%20call%20me." target="_blank" style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:#25D366;color:#fff;border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;" rel="noopener">&#128172; WhatsApp Us</a>
                <a href="mailto:sales@patronaccounting.com?subject=Enquiry%20for%20LLP%20Partner%20Change%20in%20Delhi%20Services&body=Hello%20Patron%20Accounting%20Team%2C%0A%0AI%20am%20interested%20in%20your%20LLP%20Partner%20Change%20in%20Delhi%20services%20and%20would%20like%20to%20know%20more.%0A%0APlease%20get%20in%20touch%20with%20me%20at%20your%20earliest%20convenience.%0A%0AThank%20you." style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:transparent;color:#fff;border:2px solid rgba(255,255,255,0.3);border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#9993;&#65039; Email Us</a>
            </div>
            <p style="color:rgba(255,255,255,0.7);font-size:13px;margin-top:16px;">Book a Free Consultation - No Obligation.</p>
        </div>
    </div>
</section>

<!-- GSTAT STATE BENCH CITY PAGES (32 Pages) -->
<section class="content-section" style="padding:48px 32px;background:var(--gray-50);">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title" style="text-align:center;margin-bottom:12px;">LLP Partner Change Services Across India</h2>
            <p style="text-align:center;color:var(--text-muted);font-size:15px;margin-bottom:40px;">Patron Accounting provides LLP partner change services in major cities. Select your city below.</p>
      
            <div class="pa-city-block" style="margin-bottom:40px;">
                    <div class="pa-city-grid">
                        <a href="/llp-partner-change/pune" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Pune</div><div class="pa-card-sub">Maharashtra</div></div></a>
                        <a href="/llp-partner-change/mumbai" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Mumbai</div><div class="pa-card-sub">Maharashtra</div></div></a>
                        <div class="pa-city-card" style="opacity:0.6; pointer-events:none; border:2px solid var(--orange); position:relative;"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Delhi</div><div class="pa-card-sub">Delhi NCR</div></div><span style="position:absolute; top:6px; right:8px; font-size:10px; color:var(--orange); font-weight:700; text-transform:uppercase; letter-spacing:0.5px;">You're here</span></div>
                        <a href="/llp-partner-change/gurugram" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Gurugram</div><div class="pa-card-sub">Haryana</div></div></a>
                    </div>
                </div>
                <div class="pa-city-block">
                    <div class="pa-block-title">Related Services</div>
                    <div class="pa-block-sub">End-to-end support for LLP Partner Change in Delhi</div>
                    <div class="pa-cross-grid">
                        <a href="/llp-agreement-change/delhi" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">LLP Agreement Change</div><div class="pa-card-sub">Delhi</div></div></a>
                        <a href="/llp-incorporation/delhi" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">LLP Registration</div><div class="pa-card-sub">Delhi</div></div></a>
                        <a href="/pvt-llp-compliance/delhi" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">LLP Compliance</div><div class="pa-card-sub">Delhi</div></div></a>
                        <a href="/llp-contribution-change/delhi" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">LLP Contribution Change</div><div class="pa-card-sub">Delhi</div></div></a>
                        <a href="/private-limited-company-registration/delhi" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Private Limited Company Registration</div><div class="pa-card-sub">Delhi</div></div></a>
                        <a href="/convert-llp-to-private-limited-company/delhi" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">LLP to Pvt Ltd Conversion</div><div class="pa-card-sub">Delhi</div></div></a>
                    </div>
                </div>
        </div>
    </div>
</section>

<!-- CONTENT FRESHNESS FOOTER -->
<section class="content-section" style="padding:32px;">
    <div class="content-container">
        <div class="text-content" style="font-size:13px;color:var(--text-muted);">
            <p><strong>Content Created:</strong> 07 April 2026 &nbsp;|&nbsp; <strong>Last Updated:</strong> <span id="lastUpdatedFooter">07 April 2026</span> &nbsp;|&nbsp; <strong>Next Review:</strong> 07 April 2027 &nbsp;|&nbsp; <strong>Reviewed By:</strong> CA &amp; CS Team, Patron Accounting LLP</p>
            <p>This page covers LLP partner change services in Delhi including partner addition, cessation, designation change, Form 4 and Form 3 filing, DPIN/DIN application, supplementary LLP Agreement, and capital settlement. Content is reviewed annually and updated when LLP Act regulations or MCA filing procedures change.</p>
        </div>
    </div>
</section>

<!-- STICKY WHATSAPP BAR -->
{{--
<div class="wa-sticky-bar" id="waBar">
    <div class="wa-sticky-bar-content">
        <div class="wa-sticky-bar-icon">
            <svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z"/></svg>
        </div>
        <span class="wa-sticky-bar-text"><strong>Join 5,000+ business owners.</strong> Get compliance due date alerts on WhatsApp.</span>
        <a href="https://wa.me/919459456700?text=Hi%2C%20please%20add%20me%20to%20your%20compliance%20due%20date%20reminders%20on%20WhatsApp." target="_blank" rel="noopener" class="wa-sticky-bar-btn">
            <span>Join Free &rarr;</span>
        </a>
        <button class="wa-sticky-bar-close" id="waBarClose" aria-label="Close">&times;</button>
    </div>
</div> 
--}}
@include('layouts.itr-season-strip')

</main>






<script>

</script>

<script>
// TOC scroll arrows
const tocWrapper = document.getElementById('tocWrapper');
document.getElementById('tocLeft').addEventListener('click', function() { tocWrapper.scrollBy({ left: -200, behavior: 'smooth' }); });
document.getElementById('tocRight').addEventListener('click', function() { tocWrapper.scrollBy({ left: 200, behavior: 'smooth' }); });

// TOC active state on scroll — only tracks sections that have a matching TOC
// button, keeps the active pill scrolled into view, and stays correct at the
// very bottom of the page.
(function () {
    var tocBtns = Array.prototype.slice.call(document.querySelectorAll('.toc-btn'));
    var wrapper = document.getElementById('tocWrapper');
    if (!tocBtns.length) return;
    var entries = tocBtns.map(function (btn) {
        var id = (btn.getAttribute('href') || '').replace('#', '');
        return { btn: btn, section: document.getElementById(id) };
    }).filter(function (e) { return e.section; });
    if (!entries.length) return;
    var OFFSET = 200;
    var ticking = false;
    function setActive(entry) {
        tocBtns.forEach(function (b) { b.classList.remove('active'); });
        if (!entry) return;
        entry.btn.classList.add('active');
        if (wrapper) {
            var left = entry.btn.offsetLeft;
            var right = left + entry.btn.offsetWidth;
            if (left < wrapper.scrollLeft) {
                wrapper.scrollTo({ left: left - 16, behavior: 'smooth' });
            } else if (right > wrapper.scrollLeft + wrapper.clientWidth) {
                wrapper.scrollTo({ left: right - wrapper.clientWidth + 16, behavior: 'smooth' });
            }
        }
    }
    function onScroll() {
        ticking = false;
        var y = window.pageYOffset + OFFSET;
        var active = entries[0];
        for (var i = 0; i < entries.length; i++) {
            if (entries[i].section.offsetTop <= y) { active = entries[i]; }
        }
        if ((window.innerHeight + window.pageYOffset) >= (document.documentElement.scrollHeight - 2)) {
            active = entries[entries.length - 1];
        }
        setActive(active);
    }
    window.addEventListener('scroll', function () {
        if (!ticking) { window.requestAnimationFrame(onScroll); ticking = true; }
    }, { passive: true });
    window.addEventListener('resize', onScroll);
    onScroll();
})();
</script>

<!-- WhatsApp Sticky Bar Script -->
<script>
(function() {
    var waBar = document.getElementById('waBar');
    var waClose = document.getElementById('waBarClose');
    var dismissed = false;

    // Initially hidden, show after scrolling 300px
    waBar.classList.add('hidden');

    window.addEventListener('scroll', function() {
        if (dismissed) return;
        if (window.scrollY > 300) {
            waBar.classList.remove('hidden');
        } else {
            waBar.classList.add('hidden');
        }
    });

    // Close button
    waClose.addEventListener('click', function() {
        dismissed = true;
        waBar.classList.add('hidden');
        // Remember dismissal for this session
        try { sessionStorage.setItem('wa_bar_dismissed', '1'); } catch(e) {}
    });

    // Check if already dismissed this session
    try {
        if (sessionStorage.getItem('wa_bar_dismissed') === '1') {
            dismissed = true;
            waBar.classList.add('hidden');
            waBar.style.display = 'none';
        }
    } catch(e) {}
})();
</script>

<!-- External JS Dependencies (loaded by master layout in production) -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
@endsection
