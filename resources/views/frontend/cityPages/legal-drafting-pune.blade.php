

@extends('layouts.service-app')

<!-- External Dependencies (loaded by master layout in production) -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Barlow:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,400&family=DM+Sans:opsz,wght@9..40,400;9..40,500;9..40,600;9..40,700&display=swap" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

@section('meta')
    <title>Legal Drafting Services in Pune – Contracts &amp; Agreements</title>
    <meta name="description" content="CA/CS-assisted legal drafting in Pune. Agreements, contracts, MOA, AOA, SHA, NDA, ESOP, partnership deed, lease, MOU. Maharashtra stamp duty advisory. Serving Hinjewadi, Kharadi, Baner. Call +91 945 945 6700.">
    <link rel="canonical" href="/legal-drafting/pune">
    <meta name="robots" content="index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1">
    <meta property="og:title" content="Legal Drafting Services in Pune – Contracts &amp; Agreements">
    <meta property="og:description" content="CA/CS-assisted legal drafting in Pune. Agreements, contracts, MOA, AOA, SHA, NDA, ESOP, partnership deed, lease, MOU. Maharashtra stamp duty advisory. Serving Hinjewadi, Kharadi, Baner. Call +91 945 945 6700.">
    <meta property="og:url" content="/legal-drafting/pune">
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="Patron Accounting">
    <meta property="og:image" content="https://www.patronaccounting.com/images/og-default-square.png">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="1200">
    <meta property="og:image:type" content="image/png">
    <meta property="og:image:secure_url" content="https://www.patronaccounting.com/images/og-default-square.png">
    <meta property="og:image:alt" content="Patron Accounting - partner you can rely on">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Legal Drafting Services in Pune – Contracts &amp; Agreements">
    <meta name="twitter:description" content="CA/CS-assisted legal drafting in Pune. Agreements, contracts, MOA, AOA, SHA, NDA, ESOP, partnership deed, lease, MOU. Maharashtra stamp duty advisory. Serving Hinjewadi, Kharadi, Baner. Call +91 945 945 6700.">
    <meta name="twitter:image" content="https://www.patronaccounting.com/images/og-default-square.png">
@endsection

@section('schema')
    <script type="application/ld+json">{
  "@context": "https://schema.org",
  "@graph": [
    {
      "@type": "Service",
      "name": "Legal Drafting Service in Pune",
      "description": "CA/CS-assisted legal drafting in Pune. Agreements, contracts, MOA, AOA, SHA, NDA, ESOP, partnership deed, lease, MOU. Maharashtra stamp duty advisory. Serving Hinjewadi, Kharadi, Baner. Call +91 945 945 6700.",
      "url": "https://www.patronaccounting.com/legal-drafting/pune",
      "serviceType": "Legal Drafting Service in Pune",
      "areaServed": {
        "@type": "City",
        "name": "Pune"
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
        "url": "https://www.patronaccounting.com/legal-drafting/pune"
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
          "name": "Legal Drafting Service",
          "item": "https://www.patronaccounting.com/legal-drafting"
        },
        {
          "@type": "ListItem",
          "position": 3,
          "name": "Legal Drafting Service in Pune",
          "item": "https://www.patronaccounting.com/legal-drafting/pune"
        }
      ]
    },
    {
      "@type": "FAQPage",
      "mainEntity": [
        {
          "@type": "Question",
          "name": "What types of agreements can Patron draft for Pune businesses?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Patron drafts corporate documents like MOA AOA SHA ESOP and Board Resolutions, commercial contracts like NDA MSA SLA and Vendor Agreements, investment documents like Term Sheets and SSPA, property documents like Lease and Sale Deeds, and partnership LLP JV documents. All with Maharashtra stamp duty compliance and registration coordination."
          }
        },
        {
          "@type": "Question",
          "name": "How much does legal drafting cost in Pune?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "NDA and employment agreements start at Rs 3,000-8,000. SHA and ESOP range from Rs 15,000-50,000. Lease agreements start at Rs 3,000-10,000. Sale deeds range from Rs 8,000-25,000. Annual drafting retainers start at Rs 50,000 per year. Maharashtra stamp duty and registration charges are additional."
          }
        },
        {
          "@type": "Question",
          "name": "What is the stamp duty for agreements in Maharashtra?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Maharashtra stamp duty varies by document type under the Maharashtra Stamp Act 1958. Leave-and-licence at 0.25% of total rent. Sale deeds at 5-6% of property value plus 1% registration. Shareholders agreements at Rs 100-500. Partnership deeds at Rs 500. Payable via e-stamping on IGR Maharashtra or franking."
          }
        },
        {
          "@type": "Question",
          "name": "Which agreements need registration in Pune?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Sale deeds are mandatory. Leases exceeding 11 months are mandatory. All leave-and-licence agreements in Maharashtra are mandatory regardless of duration under Maharashtra Rent Control Act. Gift deeds of immovable property are mandatory. Partnership deeds are recommended. SHA NDA and service agreements need stamp duty but not registration."
          }
        }
      ]
    }
  ]
}</script>
@endsection

@include('partials.page-css', ['file' => 'css/site.css'])
<style>
/* Amount column  -  right-align only on tables with .table-amount class */
        .table-amount td:last-child { color: var(--text-secondary); font-size: 14px; font-weight: 500; }
/* ============================================
           EXPERT ATTRIBUTION BOX (E-E-A-T)  -  Plan 3.1
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
           TOC NAVIGATION  -  Plan 2.2
           ============================================ */
        .toc-section {
            background: var(--gray-50); border-bottom: 1px solid var(--gray-200);
            padding: 20px 0; position: sticky; top: 100px; z-index: 50;
        }
/* Process Evidence Screenshot  -  Plan 3.2 */
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
                        Legal Drafting Service in Pune - Expert CA/CS-Assisted Agreements & Contracts
                    </h1>

                    <div class="expert-attribution-box">
                        <span class="eab-check"><svg width="16" height="16" viewBox="0 0 24 24" fill="currentColor"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg></span>
                        <span class="eab-title">Reviewed by CA and CS Team, Patron Accounting LLP</span>
                        <span class="eab-meta">
                            <span>ICAI & ICSI Registered</span><span class="eab-sep">|</span>
                            <span>15+ Years Experience</span><span class="eab-sep">|</span>
                            <span>Last Updated: <span id="lastUpdated">23 March 2026</span></span>
                        </span>
                        <a href="#" class="eab-link">Verify Credentials &rarr;</a>
                    </div>

                    <div class="mb-4">
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Corporate Documents:</span> MOA, AOA, Board Resolutions, Shareholders Agreement, ESOP Scheme</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Commercial Agreements:</span> NDA, Service Agreement, MSA/SLA, Vendor Contract, Franchise Agreement</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Property Documents:</span> Lease/Leave-and-Licence, Sale Deed, Agreement to Sell, MOU</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Stamp Duty:</span> Maharashtra Stamp Act compliant; e-stamping via IGR Maharashtra; franking advisory</p>
                        </div>
                    </div>

                    <p class="mb-4 fw-bold" style="color: var(--blue); font-size: 15px;">10,000+ Businesses Served | 4.9 Google Rating | 50,000+ Documents Filed | 15+ Years</p>

                    <div class="hero-cta">
                        <a href="tel:+919459456700" class="btn-video text-decoration-none">
                            <span class="play-circle"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="width:14px;height:14px;color:#fff"><path d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/></svg></span>
                            Call +91 945 945 6700
                        </a>
                        <a href="mailto:sales@patronaccounting.com" class="btn-sample text-decoration-none">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="width:18px;height:18px;"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,12 2,6"/></svg>
                            Email Us
                        </a>
                        <a href="https://wa.me/919459456700?text=Hello%2C%20I%20just%20visited%20your%20Legal%20Drafting%20in%20Pune%20page.%20I%20would%20like%20to%20know%20more%20about%20it." target="_blank" class="btn-sample text-decoration-none" rel="noopener">
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
                                            'service'  => 'Legal Drafting Service in Pune',
                                            'city'     => 'Pune',
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
    'ctaText'    => 'From VC-funded startups to property investors, Pune businesses trust Patron for legal drafting and agreement execution.',
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
            <a href="#what-section" class="toc-btn">What is Legal Drafting</a>
            <a href="#who-section" class="toc-btn">Who Needs It</a>
            <a href="#services-section" class="toc-btn">Services</a>
            <a href="#process-section" class="toc-btn">Process</a>
            <a href="#documents-section" class="toc-btn">Documents</a>
            <a href="#fees-section" class="toc-btn">Fees</a>
            <a href="#timeline-section" class="toc-btn">Registration Guide</a>
            <a href="#benefits-section" class="toc-btn">Why Patron</a>
            <a href="#comparison-section" class="toc-btn">Patron vs Local</a>
            <a href="#faq-section" class="toc-btn">FAQs</a>
        </div>
        <button class="toc-arrow right" id="tocRight">&#10095;</button>
    </div>
</div>

<!-- SECTION 2: OVERVIEW / INTRO + TL;DR -->
<section class="content-section" id="overview-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Legal Drafting Service in Pune - Overview</h2>
            <div class="content-text">
                <div class="highlight-box" style="margin-bottom:20px;">
                    <p><strong>&#128204; TL;DR - Legal Drafting Service in Pune Services at a Glance</strong></p>
                    <p>Legal drafting is the professional preparation of legally binding documents - agreements, contracts, deeds, and corporate instruments - that protect rights, define obligations, and ensure enforceability. Every document executed in Pune must comply with the Indian Contract Act, 1872, the Companies Act, 2013, the Maharashtra Stamp Act, 1958, and the Indian Registration Act, 1908. A poorly drafted agreement with ambiguous clauses, missing essential terms, or inadequate stamp duty can be unenforceable in court and expose parties to financial and legal risk.</p>
                </div>
                <p>Pune's diverse business ecosystem creates unique legal drafting requirements. <strong>IT/SaaS startups in Hinjewadi and Baner</strong> need SHA, ESOP schemes, term sheets, and NDA for VC funding rounds. <strong>IT services companies in Kharadi and Magarpatta</strong> require MSA, SLA, and SaaS licensing contracts. <strong>Manufacturing companies in Pimpri-Chinchwad</strong> need JV agreements, vendor contracts, and supply agreements. <strong>Property investors across Baner, Wakad, and Kharadi</strong> require lease, leave-and-licence, and sale deeds. Learn more about <a href="/legal-drafting">Legal Drafting Service across India</a>.</p>
                <p>The <strong>Sub-Registrar offices in Pune</strong> handle property document registration. <strong>ROC Pune</strong> at Shivajinagar handles corporate filings. <strong>IGR Maharashtra</strong> (igrmaharashtra.gov.in) is the portal for e-stamping and leave-and-licence registration. After document drafting, businesses benefit from <a href="/statutory-audit">Statutory Audit</a> and <a href="/accounting-services">Accounting Services</a>.</p>
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
                <h2 class="section-title">What Is Legal Drafting Service</h2>
                <div class="content-text what-is-definition">
                    
                    <p>Legal drafting service is the professional preparation of legally binding documents by qualified <strong>Chartered Accountants (CA)</strong>, <strong>Company Secretaries (CS)</strong>, and <strong>Advocates</strong> who ensure every clause is precise, enforceable, and compliant with applicable laws. Unlike template-based document generation, professional legal drafting involves understanding the commercial intent, identifying risk areas, incorporating protective clauses (indemnity, limitation of liability, force majeure, dispute resolution), and ensuring compliance with the <strong>Indian Contract Act, 1872</strong>, the <strong>Companies Act, 2013</strong>, the <strong>Maharashtra Stamp Act, 1958</strong>, and sector-specific regulations.</p>
<p>The scope covers three broad categories: <strong>corporate documents</strong> (MOA, AOA, Board Resolutions, SHA, ESOP Schemes), <strong>commercial agreements</strong> (NDAs, Service Agreements, MSA/SLA, Vendor Contracts, Franchise Agreements), and <strong>property documents</strong> (Lease Agreements, Leave-and-Licence, Sale Deeds, Agreement to Sell).</p>
<p>For Pune businesses, legal drafting is an <strong>ongoing corporate function</strong>. Every funding round triggers SHA amendments and ESOP updates. Every new client engagement requires an MSA/SLA. Every office lease requires a leave-and-licence registered with the Pune Sub-Registrar. Patron provides this as a continuous legal drafting service from its Pune office.</p>

                </div>
                <div class="highlight-box" style="margin-top:20px;">
                    <p><strong>Key Terms for Legal Drafting Service in Pune:</strong></p>
                    <p><strong>Maharashtra Stamp Act, 1958:</strong> Governs stamp duty on all instruments executed in Maharashtra. Insufficiently stamped documents are inadmissible as evidence (Section 34). Penalty: up to 10x deficiency.</p>
<p><strong>SHA (Shareholders Agreement):</strong> Private contract between shareholders defining equity, governance, transfer restrictions, and exit. Must be mirrored in AOA for enforceability.</p>
<p><strong>Leave-and-Licence:</strong> Tenancy agreement under Maharashtra Rent Control Act, 1999. Mandatory registration regardless of duration. Stamp duty: 0.25% of total rent.</p>
<p><strong>MSA/SLA:</strong> Master Service Agreement and Service Level Agreement for IT/SaaS engagements. Covers scope, SLA metrics, IP, data protection, and liability.</p>
<p><strong>ESOP (Section 62(1)(b)):</strong> Employee Stock Option Plan under Companies Act. Must be approved by special resolution with 1-year vesting gap.</p>

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
                            <text x="100" y="170" font-size="10" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial, sans-serif">Legal Drafting Service in Pune</text>
                        </svg>
                    </div>
                    <div class="illustration-badge">
                        <span>Documents</span>
                        <strong>1-7 Day Turnaround</strong>
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
            <h2 class="section-title">Who Needs Legal Drafting in Pune</h2>
            <div class="content-text">
                
                <p><strong>VC-Funded Startups (Hinjewadi, Baner, Koregaon Park)</strong> - Every funding round requires Term Sheet, SHA, SSPA, ESOP Scheme, Deed of Adherence, and Board Resolutions. Pune startups raising from US/Singapore VCs need SHA clauses aligned with AOA, anti-dilution, drag-along/tag-along, and FEMA-compliant pricing. See <a href="/private-limited-company-registration/pune">Pvt Ltd Company Registration in Pune</a>.</p>
<p><strong>IT Services & SaaS Companies (Kharadi, Magarpatta)</strong> - Global client engagements require MSA, SLA, SaaS Subscription Agreements, DPA, NDA, and Consultancy Agreements addressing IP ownership, data protection, and cross-border dispute resolution.</p>
<p><strong>Manufacturing & Industrial Companies (Pimpri-Chinchwad, Chakan MIDC)</strong> - Require JV Agreements, Technology Transfer Agreements, Vendor/Supplier Contracts, Distribution Agreements, and Employment Contracts with quality, delivery, and penalty clauses.</p>
<p><strong>Property Investors & Developers (Baner, Wakad, Kharadi)</strong> - Need Lease, Leave-and-Licence (mandatory Maharashtra registration), Sale Deeds, Agreement to Sell, MOU, and Development Agreements with <strong>Maharashtra stamp duty</strong> compliance.</p>
<p><strong>Partnerships, LLPs & Joint Ventures</strong> - Require Partnership Deeds, LLP Agreements, JV Agreements, MOU/LOI, and Dissolution Deeds. See <a href="/llp-incorporation">LLP Registration</a>.</p>

            </div>
            </div>
        </div>
    </div>
</section>

<!-- SECTION 5: OUR SERVICES -->
<section class="content-section" id="services-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Legal Drafting Services in Pune</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Service</th><th>What We Do</th></tr></thead>
                    <tbody>
                        <tr><td>Shareholders Agreement (SHA)</td><td>Complete SHA with equity/vesting, governance, reserved matters, share transfer, anti-dilution, drag-along/tag-along, exit mechanisms. AOA alignment via MGT-14</td></tr>
<tr><td>ESOP Scheme & Grant Letters</td><td>Companies Act Section 62(1)(b) compliant ESOP; trust structure; grant letters; exercise notices; vesting schedules</td></tr>
<tr><td>NDA / Non-Disclosure Agreement</td><td>Mutual and unilateral NDAs; confidential information definition; permitted disclosures; term; breach remedies; non-solicitation</td></tr>
<tr><td>Master Service Agreement (MSA) & SLA</td><td>IT/SaaS industry standard; scope; SLA metrics; payment; IP ownership; data protection; limitation of liability; termination</td></tr>
<tr><td>Lease / Leave-and-Licence Agreements</td><td>Maharashtra Rent Control Act compliant; stamp duty 0.25% for L&L; mandatory registration with Sub-Registrar Pune; 11-month and long-term</td></tr>
<tr><td>Sale Deed / Agreement to Sell</td><td>Property transactions; Maharashtra stamp duty (5-6% Pune); registration with Sub-Registrar; title verification clauses</td></tr>
<tr><td>Partnership Deed / LLP Agreement</td><td>Indian Partnership Act 1932 / LLP Act 2008 compliant; capital, profit sharing, management, exit, dissolution</td></tr>
<tr><td>Board Resolutions & Minutes</td><td>All board and shareholder resolutions; AGM/EGM notices; minutes; MGT-14 filing for special resolutions with ROC Pune</td></tr>

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
            <h2 class="section-title">Legal Drafting Process in Pune</h2>
            <p class="section-subtitle" style="text-align:left;max-width:100%;">6-step guide for legal drafting with Patron Accounting</p>
        </header>
        <div class="steps-container">
            <div class="step-card"><div class="step-content"><span class="step-badge">Step 1</span><h3 class="step-title">Requirement Analysis and Scope Definition</h3><p class="step-description">Patron's CA/CS team meets with the Pune client to understand the commercial intent, parties involved, risk areas, and desired outcomes. For a SHA, this means understanding the cap table, investor rights, and governance. For a lease, this means property, rent, deposit, and duration. The team identifies applicable laws, stamp duty implications, and registration requirements. A clear scope document is shared before drafting begins.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Commercial Intent Mapped</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Laws Identified</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="15" y="5" width="90" height="70" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><circle cx="60" cy="35" r="15" fill="#FEF4EE" stroke="#E8712C" stroke-width="1.5"/><text x="60" y="39" text-anchor="middle" fill="#E8712C" font-size="8" font-weight="bold">SCOPE</text></svg></div><span class="illustration-label">Scope Defined</span><span class="step-number-large">01</span></div></div></div>
<div class="step-card"><div class="step-content"><span class="step-badge">Step 2</span><h3 class="step-title">First Draft Preparation</h3><p class="step-description">The CA/CS/legal team prepares the first draft incorporating all essential clauses, protective provisions, and compliance requirements. Simple documents (NDA, Board Resolution, employment agreement) are completed within 1-2 working days. Complex documents (SHA, JV Agreement, SPA, ESOP Scheme) take 3-7 working days. Every clause is drafted to be precise and unambiguous - avoiding vague terms that cause contractual disputes.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>1-2 Days (Simple)</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>3-7 Days (Complex)</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="20" y="8" width="80" height="55" rx="4" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><rect x="30" y="18" width="60" height="8" rx="2" fill="#FEF4EE" stroke="#E8712C" stroke-width="1"/><rect x="30" y="32" width="60" height="8" rx="2" fill="#FEF4EE" stroke="#E8712C" stroke-width="1"/><rect x="30" y="46" width="30" height="8" rx="2" fill="#E8712C"/></svg></div><span class="illustration-label">Draft Ready</span><span class="step-number-large">02</span></div></div></div>
<div class="step-card"><div class="step-content"><span class="step-badge">Step 3</span><h3 class="step-title">Client Review and Negotiation Support</h3><p class="step-description">The draft is shared for review. For multi-party agreements (SHA, JV), Patron supports the negotiation process, incorporating feedback from each side. For investment agreements, Patron coordinates between the Pune startup and investor counsel. 2-3 rounds of revision are standard for complex documents. The team ensures negotiated changes do not create internal inconsistencies or enforceability issues.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Multi-Party Negotiation</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>2-3 Revision Rounds</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="10" y="15" width="45" height="55" rx="4" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><rect x="65" y="15" width="45" height="55" rx="4" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><path d="M55 42h10" stroke="#E8712C" stroke-width="2" stroke-linecap="round"/><path d="M60 37v10" stroke="#E8712C" stroke-width="2" stroke-linecap="round"/></svg></div><span class="illustration-label">Terms Agreed</span><span class="step-number-large">03</span></div></div></div>
<div class="step-card"><div class="step-content"><span class="step-badge">Step 4</span><h3 class="step-title">Maharashtra Stamp Duty and E-Stamping</h3><p class="step-description">Once finalized, Patron advises on applicable Maharashtra stamp duty under the Maharashtra Stamp Act, 1958. Stamp duty is payable via e-stamping through IGR Maharashtra (igrmaharashtra.gov.in) or franking at authorized centres. Leave-and-licence: 0.25% of total rent. Sale deeds: 5-6% (Pune) + 1% registration. Commercial agreements: Rs 100-500. Insufficiently stamped documents are inadmissible as evidence in court.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Exact Duty Calculated</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>E-Stamping Coordinated</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="20" y="10" width="80" height="65" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><circle cx="60" cy="35" r="12" fill="#FEF4EE" stroke="#E8712C" stroke-width="1.5"/><text x="60" y="39" text-anchor="middle" fill="#E8712C" font-size="10" font-weight="bold">Rs</text><rect x="30" y="55" width="60" height="10" rx="3" fill="#10B981" opacity="0.15"/></svg></div><span class="illustration-label">Properly Stamped</span><span class="step-number-large">04</span></div></div></div>
<div class="step-card"><div class="step-content"><span class="step-badge">Step 5</span><h3 class="step-title">Execution, Witnessing, and Registration</h3><p class="step-description">Document is printed on stamp paper and signed by all parties with two witnesses. For documents requiring mandatory registration (property sale deeds, leases > 11 months, leave-and-licence under Maharashtra Rent Control Act), Patron coordinates registration at the Sub-Registrar office, Pune. Leave-and-licence can be registered online through IGR Maharashtra. Corporate documents (MGT-14) are filed with ROC Pune on MCA V3.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Witnesses Signed</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Registration Completed</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="20" y="15" width="80" height="55" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><circle cx="60" cy="42" r="18" fill="#FEF4EE" stroke="#10B981" stroke-width="2"/><path d="M52 42l5 5 11-11" stroke="#10B981" stroke-width="2.5" stroke-linecap="round"/></svg></div><span class="illustration-label">Legally Executed</span><span class="step-number-large">05</span></div></div></div>
<div class="step-card"><div class="step-content"><span class="step-badge">Step 6</span><h3 class="step-title">Document Storage and Ongoing Maintenance</h3><p class="step-description">Patron provides complete digital and physical sets of executed documents. For corporate clients, documents are maintained in statutory register format. SHA/ESOP/investment agreements are updated with each subsequent funding round. Lease agreements are renewed before expiry. Board resolutions are drafted for every corporate action throughout the year. Patron provides this as a continuous legal drafting retainer from its Pune office.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Digital + Physical Copies</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Annual Retainer Available</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M60 10L95 30V55C95 75 60 90 60 90S25 75 25 55V30L60 10Z" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><path d="M48 50l8 8 16-16" stroke="#10B981" stroke-width="3" stroke-linecap="round"/></svg></div><span class="illustration-label">Fully Maintained</span><span class="step-number-large">06</span></div></div></div>

        </div>
    </div>
</section>

<!-- SECTION 8: DOCUMENTS REQUIRED -->
<section class="content-section" id="documents-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Documents Required for Legal Drafting in Pune</h2>
            <div class="content-text">
                
                <p><strong>PAN Cards and ID Proofs:</strong> Of all parties to the agreement; mandatory for KYC and registration.</p>
<p><strong>Certificate of Incorporation / Partnership Registration:</strong> Establishing legal existence of the entity.</p>
<p><strong>MOA & AOA (for SHA/corporate documents):</strong> Existing constitutional documents for alignment.</p>
<p><strong>Board Resolution:</strong> Authorizing execution of the agreement on behalf of the company.</p>
<p><strong>Valuation Certificate:</strong> For SHA/SPA/ESOP (share pricing; SEBI MB or CA valuation).</p>
<p><strong>Property Documents:</strong> Title deed, property tax receipt, encumbrance certificate (for lease/sale).</p>
<p><strong>Stamp Paper / E-Stamp Certificate:</strong> Appropriate denomination per Maharashtra Stamp Act.</p>
<div class="highlight-box" style="margin-top:16px;"><p><strong>Pune-Specific Tip:</strong> For leave-and-licence agreements in Pune, the IGR Maharashtra online registration system requires Aadhaar-linked e-signature of landlord and tenant, property Card/7-12 extract, and passport-size photographs. Patron coordinates the complete online registration process for all Pune clients.</p></div>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 9: CHALLENGES -->
<section class="content-section" id="challenges-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Common Legal Drafting Challenges in Pune</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Challenge</th><th>Impact</th><th>How Patron Accounting Solves It</th></tr></thead>
                    <tbody>
                        <tr><td>Ambiguous Clauses Leading to Disputes</td><td>Using vague terms like "reasonable efforts" or "as soon as practicable" without precise definitions; frequent in Pune court cases</td><td>Every clause drafted with defined terms, specific timelines, and measurable obligations; zero ambiguity policy</td></tr>
<tr><td>SHA-AOA Misalignment</td><td>Pune startups have SHA contradicting AOA; under Indian law, SHA clauses not reflected in AOA may not be enforceable</td><td>Key SHA provisions (board composition, reserved matters, transfer restrictions) mirrored in AOA via MGT-14 with ROC Pune</td></tr>
<tr><td>Insufficient Maharashtra Stamp Duty</td><td>Documents on insufficient stamp paper are inadmissible as evidence; penalty up to 10x the deficient amount</td><td>Exact stamp duty calculation per current Maharashtra schedule; e-stamping coordination via IGR Maharashtra</td></tr>
<tr><td>Non-Registration of Mandatory Documents</td><td>Unregistered leave-and-licence agreements not admissible; landlord faces penalties under Maharashtra Rent Control Act</td><td>Mandatory registration coordination with Sub-Registrar Pune or online IGR for all required documents</td></tr>
<tr><td>ESOP Drafting Non-Compliance</td><td>IT companies failing to comply with Section 62(1)(b) and Rule 12; schemes challenged by employees and attract ROC penalties</td><td>Fully compliant ESOP scheme with special resolution, 1-year vesting gap, and Companies (Share Capital) Rules adherence</td></tr>

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
            <h2 class="section-title">Legal Drafting Fees in Pune</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Fee Component</th><th>Amount</th></tr></thead>
                    <tbody>
                        <tr><td>Patron Accounting Professional Fees (Legal Drafting)</td><td>Starting from INR 999/mo (Exl GST and Govt. Charges)</td></tr>
<tr><td>NDA / Non-Disclosure Agreement</td><td>Rs 3,000 - Rs 8,000 (1-2 days)</td></tr>
<tr><td>Employment / Consultancy Agreement</td><td>Rs 5,000 - Rs 12,000 (1-3 days)</td></tr>
<tr><td>Shareholders Agreement (SHA)</td><td>Rs 15,000 - Rs 50,000 (5-7 days)</td></tr>
<tr><td>ESOP Scheme + Grant Letters</td><td>Rs 15,000 - Rs 40,000 (5-7 days)</td></tr>
<tr><td>Master Service Agreement (MSA)</td><td>Rs 10,000 - Rs 30,000 (3-5 days)</td></tr>
<tr><td>Lease / Leave-and-Licence</td><td>Rs 3,000 - Rs 10,000 (1-3 days)</td></tr>
<tr><td>Sale Deed / Agreement to Sell</td><td>Rs 8,000 - Rs 25,000 (3-5 days)</td></tr>
<tr><td>Annual Drafting Retainer</td><td>Rs 50,000 - Rs 2,00,000/year (ongoing)</td></tr>
<tr><td>Additional Costs</td><td>Maharashtra stamp duty + Sub-Registrar fees + MCA filing fees (varies by document type and value)</td></tr>

                    </tbody>
                </table>
                </div>
                <p style="margin-top:16px;font-size:13px;color:var(--text-muted);font-style:italic;">All fees and charges listed are indicative only and do not constitute a binding offer. Final amounts may vary depending on the volume of work and the complexity involved.</p>
                <p style="margin-top:16px;">Professional service charges for drafting, filing, and representation are separate from the statutory fees. The exact fee depends on the complexity of the case, disputed amount, and number of hearings required. Contact us for a detailed quote.</p>
                <p style="margin-top:16px;"><strong>Get a free Legal Drafting Service in Pune consultation - <a href="tel:+919459456700">Call +91 945 945 6700</a> or <a href="https://wa.me/919459456700?text=Hello%2C%20I%20just%20visited%20your%20Legal%20Drafting%20in%20Pune%20page.%20I%20would%20like%20to%20know%20more%20about%20it." target="_blank" rel="noopener">WhatsApp us</a>. No-obligation assessment.</strong></p>
            </div>
        </div>
    </div>
</section>

<!-- SECTION 11: TIMELINE -->
<section class="content-section" id="timeline-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Document Registration Matrix for Pune</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Stage</th><th>Estimated Timeline</th></tr></thead>
                    <tbody>
                        <tr><td>Sale Deed</td><td>Mandatory registration | Sub-Registrar, Pune | Within 4 months of execution</td></tr>
<tr><td>Leave-and-Licence</td><td>Mandatory (Maharashtra) | IGR Maharashtra online / Sub-Registrar | Before occupancy</td></tr>
<tr><td>Lease (> 11 months)</td><td>Mandatory registration | Sub-Registrar, Pune | Within 4 months</td></tr>
<tr><td>Partnership Deed</td><td>Recommended | Registrar of Firms, Pune | Within 1 year</td></tr>
<tr><td>SHA / NDA / Service Agreement</td><td>Not required (private) | N/A | Stamp duty mandatory</td></tr>
<tr><td>MOA/AOA Amendment</td><td>MCA Filing | ROC Pune via MCA V3 | MGT-14 within 30 days of SR</td></tr>

                    </tbody>
                </table>
                </div>
                <div class="highlight-box" style="margin-top:16px;">
                    
                    <p><strong>Pune Processing Note:</strong> The Sub-Registrar offices in Pune (Shivajinagar, Haveli, Kothrud, Hadapsar, etc.) handle property document registration. ROC Pune at Shivajinagar handles Companies Act filings. IGR Maharashtra (igrmaharashtra.gov.in) is the portal for e-stamping and leave-and-licence online registration. All documents executed in Pune must bear proper Maharashtra stamp duty - payable via e-stamping or franking. Insufficiently stamped documents carry a penalty of up to 10x the deficient amount and are inadmissible as evidence in court.</p>

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
            <h2 class="section-title">Why Choose Patron for Legal Drafting in Pune</h2>
        </div>
        <div class="features-grid"><article class="feature-card"><div class="feature-icon-wrap"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:24px;height:24px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><h3>Pune Office at Wagholi</h3><p>Serving startups, IT companies, manufacturers, and property investors across Hinjewadi, Kharadi, Baner, Wakad, Magarpatta, Pimpri-Chinchwad, and all Pune localities.</p></article><article class="feature-card"><div class="feature-icon-wrap"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:24px;height:24px;"><path d="M14 2H6a2 2 0 00-2 2v16a2 2 0 002 2h12a2 2 0 002-2V8z"/><path d="M14 2v6h6M16 13H8M16 17H8"/></svg></div><h3>3-Layer Expertise</h3><p>Startup documents (SHA/ESOP/term sheets) + IT commercial contracts (MSA/SLA/NDA/SaaS) + Property documents (lease/sale deed) - all from a single Pune service point.</p></article><article class="feature-card"><div class="feature-icon-wrap"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:24px;height:24px;"><circle cx="12" cy="12" r="10"/><path d="M12 6v6l4 2"/></svg></div><h3>Maharashtra Stamp Duty Integration</h3><p>Exact stamp duty calculation per current Maharashtra schedule. E-stamping coordination via IGR Maharashtra. Every document properly stamped and registered where required.</p></article><article class="feature-card"><div class="feature-icon-wrap"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:24px;height:24px;"><path d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/></svg></div><h3>SHA-AOA Alignment</h3><p>Key SHA provisions are mirrored in AOA amendments filed via MGT-14 with ROC Pune - preventing enforceability gaps that many local firms overlook.</p></article></div>
    </div>
</section>

<!-- SECTION 12A: SOCIAL PROOF -->
<section class="content-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Trusted by Pune Businesses</h2>
            <div class="content-text">
                
                <p><strong>10,000+ Businesses | 4.9 Google Rating | 50,000+ Docs Filed | 15+ Years</strong></p>
<p>Trusted by Hyundai, Asian Paints, Bridgestone, and 10,000+ businesses across India. With offices in Pune, Mumbai, Delhi, and Gurugram, Patron has drafted SHAs for seed through Series C rounds, MSAs for global IT engagements, and lease agreements for commercial properties across Pune.</p>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 13: SELF-FILING vs PROFESSIONAL COMPARISON -->
<section class="content-section" id="comparison-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Patron vs Local CS/CA Firms in Pune</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Factor</th><th>Patron Accounting</th><th>Typical Local Consultant</th></tr></thead>
                    <tbody>
                        <tr><td>Document Range</td><td>Corporate + Commercial + Property</td><td>Limited to basic agreements</td></tr>
<tr><td>SHA/ESOP Expertise</td><td>VC-standard with AOA alignment</td><td>Template-based</td></tr>
<tr><td>MSA/SLA for IT</td><td>Industry-standard for global clients</td><td>Not offered</td></tr>
<tr><td>Maharashtra Stamp Duty</td><td>Calculated per schedule + e-stamping coordination</td><td>Client manages</td></tr>
<tr><td>Registration Support</td><td>Sub-Registrar + IGR online + ROC Pune</td><td>Client registers separately</td></tr>
<tr><td>Annual Retainer</td><td>Continuous drafting throughout year</td><td>Per-document only</td></tr>

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
            <h2 class="section-title">Related Services for Pune Businesses</h2>
            <div class="content-text">
                
                <p>Pune businesses needing legal drafting often require complementary services:</p>
<ul style="list-style:disc;padding-left:20px;"><li style="margin-bottom:12px;padding:8px 0;"><a href="/legal-drafting" style="font-weight:600;">Legal Drafting Service in India</a> - National legal drafting services</li><li style="margin-bottom:12px;padding:8px 0;"><a href="/private-limited-company-registration/pune">Pvt Ltd Company Registration in Pune</a> - New company incorporation with MOA/AOA</li><li style="margin-bottom:12px;padding:8px 0;"><a href="/fdi-compliance">FDI Compliance</a> - FEMA-compliant investment documentation</li><li style="margin-bottom:12px;padding:8px 0;"><a href="/accounting-services">Accounting Services</a> - Year-round financial compliance</li></ul>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 15A: LEGAL FRAMEWORK -->
<section class="content-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Legal and Compliance Framework for Legal Drafting</h2>
            <div class="content-text">
                
                <p><strong>Indian Contract Act, 1872:</strong> Governs enforceability. Sections 10-30 define essentials: free consent, lawful consideration, lawful object, competence of parties.</p>
<p><strong>Companies Act, 2013:</strong> MOA (Section 4), AOA (Section 5), Board Resolutions (Section 179), Special Resolutions (Section 114), ESOP (Section 62(1)(b)), MGT-14 (Section 117).</p>
<p><strong>Maharashtra Stamp Act, 1958:</strong> Schedule I specifies duty for each document type. Section 34: insufficiently stamped = inadmissible. Section 39: penalty up to 10x deficiency.</p>
<p><strong>Indian Registration Act, 1908:</strong> Section 17: mandatory registration for sale deeds, leases > 1 year. Section 49: unregistered documents inadmissible for immovable property.</p>
<p><strong>Maharashtra Rent Control Act, 1999:</strong> Section 55: mandatory registration of all tenancy and leave-and-licence agreements. Landlord responsibility. Fine for non-registration.</p>
<p><strong>IT Act, 2000:</strong> Data protection obligations for IT/SaaS agreements. Section 43A (reasonable security practices).</p>
<p><strong>Portal:</strong> <a href="https://igrmaharashtra.gov.in" target="_blank" rel="noopener">IGR Maharashtra</a> | <a href="https://www.mca.gov.in" target="_blank" rel="noopener">MCA V3</a></p>
<p><strong>Authorities:</strong> Sub-Registrar offices, Pune (property registration). ROC Pune, Shivajinagar (corporate filings).</p>

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
                    <h2 class="faq-expanded__title">FAQs - Legal Drafting Service in Pune</h2>
                    <p class="faq-expanded__lead">Common questions about legal drafting, agreement types, stamp duty, registration, and fees in Pune</p>
                    @include('partials.bigin-form', [
                        'variant'  => 'compact',
                        'service'  => 'Legal Drafting Service in Pune',
                        'city'     => 'Pune',
                    ])
                </aside>
                <div class="faq-expanded__list">
                    <div class="faq-expanded__item" id="faq-1">
                        <h3 class="faq-expanded__q">What types of agreements can Patron draft for Pune businesses?</h3>
                        <div class="faq-expanded__a"><p>Patron's CA/CS team drafts corporate documents (MOA, AOA, SHA, ESOP, Board Resolutions), commercial contracts (NDA, MSA, SLA, Vendor Agreements, Franchise Agreements), investment documents (Term Sheet, SSPA, Convertible Note), property documents (Lease, Leave-and-Licence, Sale Deed), and partnership/LLP documents (Partnership Deed, LLP Agreement, JV Agreement). All with Maharashtra stamp duty compliance.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-2">
                        <h3 class="faq-expanded__q">How much does legal drafting cost in Pune?</h3>
                        <div class="faq-expanded__a"><p>Fees vary by complexity: NDA/employment agreements start at Rs 3,000-8,000 (1-2 days). SHA/ESOP/JV range from Rs 15,000-50,000 (5-7 days). Lease/leave-and-licence start at Rs 3,000-10,000 (1-3 days). Sale deeds range from Rs 8,000-25,000 (3-5 days). Annual retainers start at Rs 50,000/year. Maharashtra stamp duty and registration charges are additional.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-3">
                        <h3 class="faq-expanded__q">What is the stamp duty for agreements in Maharashtra?</h3>
                        <div class="faq-expanded__a"><p>Maharashtra stamp duty varies under the Maharashtra Stamp Act, 1958: leave-and-licence at 0.25% of total rent for the agreement period, sale deeds at 5-6% of property value (plus 1% registration), shareholders agreements at Rs 100-500, partnership deeds at Rs 500, and most commercial agreements at Rs 100-500. Payable via e-stamping on IGR Maharashtra or franking.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-4">
                        <h3 class="faq-expanded__q">Which agreements need registration in Pune?</h3>
                        <div class="faq-expanded__a"><p>Under the Indian Registration Act and Maharashtra Rent Control Act: all sale deeds (mandatory), leases exceeding 11 months (mandatory), leave-and-licence agreements (mandatory in Maharashtra regardless of duration), and gift deeds of immovable property. Partnership deeds are recommended. SHA, NDA, and service agreements need stamp duty but not registration.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-5">
                        <h3 class="faq-expanded__q">What is the difference between a SHA and AOA?</h3>
                        <div class="faq-expanded__a"><p>The SHA is a private contract between shareholders defining equity, governance, and exit. The AOA is a public statutory document filed with ROC. Under Indian law, if SHA contradicts AOA, the AOA generally prevails. Patron ensures key SHA provisions are mirrored in the AOA via amendment (special resolution + MGT-14 with ROC Pune) to maximize enforceability.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-6">
                        <h3 class="faq-expanded__q">Can legal drafting be done online from Pune?</h3>
                        <div class="faq-expanded__a"><p>Yes. Patron handles the complete process remotely: requirement discussion via video call, drafts shared digitally, e-stamping through IGR Maharashtra. Leave-and-licence can be registered online through the IGR portal. Corporate filings (MGT-14) are electronic via MCA V3. Only property sale deeds require physical presence at the Sub-Registrar office, Pune.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-7">
                        <h3 class="faq-expanded__q">How long does it take to draft a shareholders agreement?</h3>
                        <div class="faq-expanded__a"><p>A standard SHA for a Pune startup with 2-3 shareholders and a single investor typically takes 5-7 working days for the first draft, plus 2-3 rounds of revision over an additional 5-10 days. Complex SHAs with multiple investor classes and detailed reserved matters can take 2-4 weeks. Patron offers expedited drafting for urgent funding round closings.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-8">
                        <h3 class="faq-expanded__q">Does Patron handle ongoing corporate drafting?</h3>
                        <div class="faq-expanded__a"><p>Yes. Patron offers an annual legal drafting retainer covering Board Resolutions, AGM/EGM notices, minutes, shareholder resolutions, employment agreements, NDA renewals, lease renewals, vendor contract updates, and amendments. Includes priority turnaround, dedicated CA/CS contact, and proactive compliance reminders for document renewals.</p></div>
                    </div>
                </div>
            </div>


            <!-- Quick Answers -->
            <div class="highlight-box" style="margin-top:32px;">
                <p><strong>Quick Answers</strong></p>
                <p><strong>What is legal drafting service?</strong> Professional preparation of legally binding agreements, contracts, deeds, and corporate documents by qualified CA/CS/advocates. Ensures enforceability, protective clauses, stamp duty compliance, and registration where required.</p>
<p><strong>Pune mein legal drafting service kaise lein?</strong> Patron Accounting se contact karein: agreement type, parties, aur commercial terms batayein. 1-7 din mein draft milega. Maharashtra stamp duty calculation aur Sub-Registrar registration Patron handle karega. Call +91 945 945 6700.</p>
<p><strong>What is stamp duty?</strong> Tax payable under Maharashtra Stamp Act 1958 on legal documents. Without proper stamp duty, documents are inadmissible as court evidence. Varies by document type.</p>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 18: URGENCY CTA -->
<section class="content-section" style="background: var(--orange-lighter) !important; border-left: 4px solid var(--orange);">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Get Your Agreements Drafted by Expert CA/CS</h2>
            <div class="content-text">
                
                <p>Every business transaction without a properly drafted agreement is an <strong>unprotected liability</strong>. Pune's District Court sees thousands of cases from ambiguous agreements. <strong>Maharashtra stamp duty deficiency</strong> carries a penalty of up to <strong>10 times</strong> the shortfall. Leave-and-licence agreements must be registered regardless of duration.</p>
<p><strong>SHAs not mirrored in AOA are potentially unenforceable. ESOP schemes without Section 62(1)(b) compliance can be challenged. Sale deeds must be registered within 4 months. For VC-funded startups closing funding rounds, the SHA/SSPA/ESOP suite must be finalized before the investor's wire.</strong></p>

            </div>
        </div>
    </div>
</section>

<!-- CONCLUSION + CTA BLOCK (Dark) -->
<section class="content-section" style="background: var(--blue) !important;">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title" style="color:#FFFFFF !important;">Get Expert Legal Drafting Service in Pune</h2>
            <div class="content-text" style="text-align:left;">
                
                <p style="color:rgba(255,255,255,0.9);font-size:16px;line-height:1.8;">Legal drafting service in Pune covers the complete spectrum of business documentation - from corporate documents (MOA, AOA, SHA, ESOP) for startups in Hinjewadi and Baner, to commercial contracts (MSA, SLA, NDA) for IT companies in Kharadi and Magarpatta, to property documents (lease, sale deeds) for investors across Pune.</p>
<p style="color:rgba(255,255,255,0.9);font-size:16px;line-height:1.8;">Patron Accounting's Pune office at RTC Silver, Wagholi provides end-to-end legal drafting covering requirement analysis, professional drafting by CA/CS, Maharashtra stamp duty calculation and e-stamping, Sub-Registrar registration, and ROC Pune filings.</p>
<p style="color:rgba(255,255,255,0.9);font-size:16px;line-height:1.8;">With 15+ years of experience, 10,000+ businesses served, and a 4.9 Google rating, Patron Accounting LLP is a trusted CA and CS firm for legal drafting across Pune, Mumbai, Delhi, and Gurugram.</p>

            </div>
            <div style="display:flex;gap:14px;flex-wrap:wrap;margin-top:24px;">
                <a href="tel:+919459456700" style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:var(--orange);color:#fff;border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#128222; Call +91 945 945 6700</a>
                <a href="https://wa.me/919459456700?text=Hello%2C%20I%20just%20visited%20your%20Legal%20Drafting%20in%20Pune%20page.%20I%20would%20like%20to%20know%20more%20about%20it." target="_blank" style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:#25D366;color:#fff;border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;" rel="noopener">&#128172; WhatsApp Us</a>
                <a href="mailto:sales@patronaccounting.com?subject=Enquiry%20for%20Legal%20Drafting%20in%20Pune&body=Hello%2C%20I%20just%20visited%20your%20Legal%20Drafting%20in%20Pune%20page.%20I%20would%20like%20to%20know%20more%20about%20it.%0A%0AThank%20you." style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:transparent;color:#fff;border:2px solid rgba(255,255,255,0.3);border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#9993;&#65039; Email Us</a>
            </div>
            <p style="color:rgba(255,255,255,0.7);font-size:13px;margin-top:16px;">Book a Free Consultation - No Obligation.</p>
        </div>
    </div>
</section>

<!-- GSTAT STATE BENCH CITY PAGES (32 Pages) -->
<section class="content-section" style="padding:48px 32px;background:var(--gray-50);">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title" style="text-align:center;margin-bottom:12px;">Legal Drafting Services Across India</h2>
            <p style="text-align:center;color:var(--text-muted);font-size:15px;margin-bottom:40px;">Patron Accounting provides legal drafting services in 4 major cities.</p>
        
            <div class="pa-city-block" style="margin-bottom:40px;"><div class="pa-city-grid">
        <div class="pa-city-card" style="opacity:0.6; pointer-events:none; border:2px solid var(--orange); position:relative;"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Pune</div><div class="pa-card-sub">Maharashtra</div></div><span style="position:absolute; top:6px; right:8px; font-size:10px; color:var(--orange); font-weight:700; text-transform:uppercase; letter-spacing:0.5px;">You're here</span></div>
        <a href="/legal-drafting/mumbai" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Mumbai</div><div class="pa-card-sub">Maharashtra</div></div></a>
        <a href="/legal-drafting/delhi" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Delhi</div><div class="pa-card-sub">Delhi NCR</div></div></a>
        <a href="/legal-drafting/gurugram" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Gurugram</div><div class="pa-card-sub">Haryana</div></div></a>
    </div></div>
<div class="pa-city-block"><div class="pa-block-title">Related Services</div><div class="pa-block-sub">End-to-end legal and compliance for Pune businesses</div><div class="pa-cross-grid">
        <a href="/gst-registration/pune" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">GST Registration</div><div class="pa-card-sub">Pune</div></div></a>
        <a href="/private-limited-company-registration/pune" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Pvt Ltd Company Registration</div><div class="pa-card-sub">Pune</div></div></a>
        <a href="/startup-registration/pune" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Startup Registration</div><div class="pa-card-sub">Pune</div></div></a>
        <a href="/trademark-registration/pune" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Trademark Registration</div><div class="pa-card-sub">Pune</div></div></a>
        <a href="/llp-incorporation/pune" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">LLP Registration</div><div class="pa-card-sub">Pune</div></div></a>
    </div></div>
        </div>
    </div>
</section>

<!-- CONTENT FRESHNESS FOOTER -->
<section class="content-section" style="padding:32px;">
    <div class="content-container">
        <div class="text-content" style="font-size:13px;color:var(--text-muted);">
            <p><strong>Content Created:</strong> 23 March 2026 &nbsp;|&nbsp; <strong>Last Updated:</strong> <span id="lastUpdatedFooter">23 March 2026</span> &nbsp;|&nbsp; <strong>Next Review:</strong> September 2026 &nbsp;|&nbsp; <strong>Reviewed By:</strong> CA &amp; CS Team, Patron Accounting LLP</p>
            <p>This page on Legal Drafting Service in Pune is reviewed semi-annually. Content covers Indian Contract Act 1872, Companies Act 2013, Maharashtra Stamp Act 1958, Indian Registration Act 1908, Maharashtra Rent Control Act 1999, SHA/ESOP/MSA/SLA/NDA drafting, Maharashtra stamp duty rates, IGR Maharashtra e-stamping, Sub-Registrar Pune registration, and ROC Pune corporate filings. Freshness Tier 2.</p>
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
