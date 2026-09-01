
@extends('layouts.service-app')

<!-- External Dependencies (loaded by master layout in production) -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Barlow:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,400&family=DM+Sans:opsz,wght@9..40,400;9..40,500;9..40,600;9..40,700&display=swap" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

@section('meta')
    <title>Internal Audit in Pune - Scope, IFC, Risk & Reporting</title>
    <meta name="description" content="CA-led internal audit services in Pune. Risk-based audit, COSO framework, IFC assessment, Section 138 compliance. Serving Chakan, Hinjewadi companies. Call +91 945 945 6700.">
    <link rel="canonical" href="/internal-audit/pune">
    <meta name="robots" content="index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1">
    <meta property="og:title" content="Internal Audit in Pune - Scope, IFC, Risk & Reporting">
    <meta property="og:description" content="CA-led internal audit services in Pune. Risk-based audit, COSO framework, IFC assessment, Section 138 compliance. Serving Chakan, Hinjewadi companies. Call +91 945 945 6700.">
    <meta property="og:url" content="/internal-audit/pune">
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="Patron Accounting">
    <meta property="og:image" content="https://www.patronaccounting.com/images/og-default-square.png">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="1200">
    <meta property="og:image:type" content="image/png">
    <meta property="og:image:secure_url" content="https://www.patronaccounting.com/images/og-default-square.png">
    <meta property="og:image:alt" content="Patron Accounting - partner you can rely on">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Internal Audit in Pune - Scope, IFC, Risk & Reporting">
    <meta name="twitter:description" content="CA-led internal audit services in Pune. Risk-based audit, COSO framework, IFC assessment, Section 138 compliance. Serving Chakan, Hinjewadi companies. Call +91 945 945 6700.">
    <meta name="twitter:image" content="https://www.patronaccounting.com/images/og-default-square.png">
@endsection

@section('schema')
    <script type="application/ld+json">{
  "@context": "https://schema.org",
  "@graph": [
    {
      "@type": "Service",
      "name": "Internal Audit Services in Pune",
      "description": "CA-led internal audit services in Pune. Risk-based audit, COSO framework, IFC assessment, Section 138 compliance. Serving Chakan, Hinjewadi companies. Call +91 945 945 6700.",
      "url": "https://www.patronaccounting.com/internal-audit/pune",
      "serviceType": "Internal Audit Services in Pune",
      "areaServed": {
        "@type": "City",
        "name": "Pune",
        "containedInPlace": {
          "@type": "State",
          "name": "Maharashtra"
        }
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
        "url": "https://www.patronaccounting.com/internal-audit/pune",
        "priceSpecification": {
          "@type": "PriceSpecification",
          "minPrice": "25",
          "maxPrice": "200",
          "priceCurrency": "INR"
        }
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
          "name": "Internal Audit Service in India",
          "item": "https://www.patronaccounting.com/internal-audit"
        },
        {
          "@type": "ListItem",
          "position": 3,
          "name": "Internal Audit Services in Pune",
          "item": "https://www.patronaccounting.com/internal-audit/pune"
        }
      ]
    },
    {
      "@type": "FAQPage",
      "mainEntity": [
        {
          "@type": "Question",
          "name": "Is internal audit mandatory for my company?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Internal audit is mandatory under Section 138 for all listed companies, unlisted public companies with paid-up capital Rs 50 crore+ OR turnover Rs 200 crore+ OR loans Rs 100 crore+ OR deposits Rs 25 crore+, and private companies with turnover Rs 200 crore+ OR loans Rs 100 crore+. If your Pune company meets ANY ONE threshold, internal audit is mandatory. Below thresholds, it is voluntary but recommended."
          }
        },
        {
          "@type": "Question",
          "name": "How much does internal audit cost in Pune?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Fees range from Rs 49,999 for voluntary MSME audits to Rs 4,99,999+ for listed companies. A typical Section 138 mandatory engagement for a single-location Pune private company costs Rs 99,999 to Rs 2,99,999 per year, covering quarterly audits, IFC assessment, management letter, and remediation tracking. Scoping call is free."
          }
        },
        {
          "@type": "Question",
          "name": "What is the difference between internal audit and statutory audit?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Internal audit evaluates controls, risk management, and operational efficiency, reporting to management and Board. Statutory audit expresses an opinion on financial statements, reporting to shareholders. Internal audit is continuous (quarterly), covers operations beyond financial statements. Statutory audit is annual. Both required for prescribed companies."
          }
        },
        {
          "@type": "Question",
          "name": "Who can be appointed as an internal auditor?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Under Section 138, the internal auditor can be a CA, Cost Accountant (CMA), or other qualified professional as decided by the Board. Can be an employee or external firm. However, CANNOT be the same person or firm conducting statutory audit. Appointment by Board resolution."
          }
        },
        {
          "@type": "Question",
          "name": "What does an internal audit cover?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Financial controls (journal entries, bank reconciliation, AP/AR), operational processes (procurement, inventory, production, sales), IT controls (access, change management, backup), compliance (Companies Act, GST, Income Tax, labour laws), and fraud risk (vendor kickbacks, inventory theft). Scope determined by risk assessment and Audit Committee approval."
          }
        },
        {
          "@type": "Question",
          "name": "What are Internal Financial Controls (IFC)?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "IFC are policies and procedures for orderly business conduct, safeguarding assets, preventing frauds and errors, accuracy of accounting records, and timely financial information. Under Section 134(5), the Board must state IFC adequacy. Under CARO 2020, the statutory auditor reports on IFC. Internal audit findings are the primary input for both assessments."
          }
        },
        {
          "@type": "Question",
          "name": "How often should internal audit be conducted?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Best practice is quarterly. High-risk areas (procurement, inventory, IT access) audited every quarter. Medium-risk (compliance, HR/payroll) semi-annually. Low-risk (fixed assets, insurance) annually. Audit Committee reviews reports at each quarterly meeting. Patron conducts four cycles per year for most Pune clients."
          }
        },
        {
          "@type": "Question",
          "name": "What happens if my company does not conduct internal audit when mandatory?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Non-compliance with Section 138 attracts Rs 10,000 penalty under Section 450. For repeated default, Section 451 imposes Rs 10,000 plus Rs 1,000 per day of continuing default. Officers in default are personally liable. Additionally, the statutory auditor must report the gap under CARO 2020. Quick Answers Internal audit mandatory hai kya mere company ke liye? Agar listed company hai to haan. Private company mein turnover Rs 200 Cr se zyada ya loans Rs 100 Cr se zyada ho to mandatory hai Section 138 ke under. Niche ho to voluntary. Internal audit aur statutory audit mein kya fark hai? Internal audit management ke liye hai - controls, risks, operations check karta hai. Statutory audit shareholders ke liye hai - financial statements pe opinion deta hai. Dono alag hain. Internal audit kitne mein hota hai? MSME ke liye Rs 49,999 se shuru. Section 138 mandatory ke liye Rs 99,999 se Rs 2,99,999. Large manufacturing ke liye Rs 4,99,999+."
          }
        }
      ]
    }
  ]
}</script>
@endsection

@include('partials.page-css', ['file' => 'css/site.css'])
<style>
/* Amount column — right-align only on tables with .table-amount class */
        .table-amount td:last-child { color: var(--text-secondary); font-size: 14px; font-weight: 500; }
/* ============================================
           EXPERT ATTRIBUTION BOX (E-E-A-T) — Plan 3.1
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
           TOC NAVIGATION — Plan 2.2
           ============================================ */
        .toc-section {
            background: var(--gray-50); border-bottom: 1px solid var(--gray-200);
            padding: 20px 0; position: sticky; top: 100px; z-index: 50;
        }
/* Process Evidence Screenshot — Plan 3.2 */
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
                        Internal Audit Services in Pune: Risk-Based Audit for Manufacturing, IT, and Growing Companies
                    </h1>

                    <div class="expert-attribution-box">
                        <span class="eab-check"><svg width="16" height="16" viewBox="0 0 24 24" fill="currentColor"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg></span>
                        <span class="eab-title">Reviewed by CA and CS Team, Patron Accounting LLP</span>
                        <span class="eab-meta">
                            <span>ICAI & ICSI Registered</span><span class="eab-sep">|</span>
                            <span>15+ Years Experience</span><span class="eab-sep">|</span>
                            <span>Last Updated: <span id="lastUpdated">13 March 2026</span></span>
                        </span>
                        <a href="#" class="eab-link">Verify Credentials &rarr;</a>
                    </div>

                    <div class="mb-4">
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Applicability:</span> Mandatory under Section 138 for listed cos, unlisted public (Rs 50Cr capital/Rs 200Cr turnover/Rs 100Cr loans/Rs 25Cr deposits), private (Rs 200Cr turnover/Rs 100Cr loans). Voluntary for all others.</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Framework:</span> COSO Internal Controls + IIA International Professional Practices Framework (IPPF) + risk-based audit methodology</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Coverage:</span> Financial controls, operational efficiency, procurement, inventory, IT general controls, compliance, fraud risk, revenue recognition</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Deliverable:</span> Management letter with prioritised findings (Critical/High/Medium/Low), root cause analysis, corrective action plan, quarterly follow-up</p>
                        </div>
                    </div>

                    <p class="mb-4 fw-bold" style="color: var(--blue); font-size: 15px;">10,000+ Businesses Served | 4.9 Google Rating | Visit our Pune office or get started online</p>

                    <div class="hero-cta">
                        <a href="tel:+919459456700" class="btn-video text-decoration-none">
                            <span class="play-circle"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="width:14px;height:14px;color:#fff"><path d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/></svg></span>
                            Call +91 945 945 6700
                        </a>
                        <a href="mailto:sales@patronaccounting.com" class="btn-sample text-decoration-none">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="width:18px;height:18px;"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,12 2,6"/></svg>
                            Email Us
                        </a>
                        <a href="https://wa.me/919459456700?text=Hi%2C%20I%20need%20internal%20audit%20services%20in%20Pune.%20Please%20call%20me." target="_blank" class="btn-sample text-decoration-none">
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
                                            'service'  => 'Internal Audit Services in Pune',
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
    'ctaText'    => 'CA-led risk-based internal audit with COSO framework and quarterly remediation tracking for Pune companies.',
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
            <a href="#overview-section" class="toc-btn">Overview</a><a href="#what-section" class="toc-btn">What Is IA</a><a href="#who-section" class="toc-btn">Who Needs It</a><a href="#services-section" class="toc-btn">Services</a><a href="#procedure-section" class="toc-btn">Process</a><a href="#documents-section" class="toc-btn">Documents</a><a href="#challenges-section" class="toc-btn">Challenges</a><a href="#fees-section" class="toc-btn">Fees</a><a href="#timeline-section" class="toc-btn">Timeline</a><a href="#benefits-section" class="toc-btn">Why Patron</a><a href="#comparison-section" class="toc-btn">IA vs Statutory</a><a href="#faq-section" class="toc-btn">FAQs</a>
        </div>
        <button class="toc-arrow right" id="tocRight">&#10095;</button>
    </div>
</div>

<!-- SECTION 2: OVERVIEW / INTRO + TL;DR -->
<section class="content-section" id="overview-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Internal Audit Services in Pune - Overview</h2>
            <div class="content-text">
                <div class="highlight-box" style="margin-bottom:20px;">
                    <p><strong>&#128204; TL;DR - Internal Audit Services in Pune Services at a Glance</strong></p>
                    <p>Internal audit is an independent, objective assurance and consulting activity that evaluates an organisation's internal controls, risk management, and governance processes. Under Section 138 of the Companies Act, 2013, it is mandatory for listed companies, unlisted public companies meeting specified thresholds, and private companies with turnover above Rs 200 crore or loans above Rs 100 crore.</p><div class="table-responsive-wrapper" style="margin-top:16px;"><table><thead><tr><th>Company Type</th><th>Threshold (Any ONE triggers applicability)</th><th>Mandatory?</th></tr></thead><tbody><tr><td>Listed Company</td><td>No threshold - ALL listed companies</td><td>Yes</td></tr><tr><td>Unlisted Public Company</td><td>Paid-up capital Rs 50 Cr+ OR Turnover Rs 200 Cr+ OR Loans Rs 100 Cr+ OR Deposits Rs 25 Cr+</td><td>Yes (any one)</td></tr><tr><td>Private Company</td><td>Turnover Rs 200 Cr+ OR Loans Rs 100 Cr+</td><td>Yes (any one)</td></tr><tr><td>Private Company (default in filing)</td><td>Default in filing financial statements (S137) OR Annual return (S92)</td><td>Yes</td></tr><tr><td>Below Thresholds (Voluntary)</td><td>Any company, LLP, or MSME seeking better controls</td><td>Voluntary but recommended</td></tr></tbody></table></div></p>
                </div>
                <p>Pune is home to one of India's densest manufacturing corridors. Auto component companies in Chakan, Talegaon, and Pimpri-Chinchwad operate complex supply chains. Engineering and pharmaceutical units in MIDC Bhosari manage procurement, batch production, and quality testing. IT companies in Hinjewadi and Kharadi handle project revenue recognition and IT general controls. For all these Pune businesses, internal audit identifies control weaknesses before the statutory auditor arrives or a fraud occurs. Learn more about <a href="/internal-audit">Internal Audit Services across India</a>.</p>
                <p>Patron Accounting delivers internal audit services from our Pune office at RTC Silver, Wagholi - using a risk-based methodology aligned with the COSO Internal Controls framework and IIA IPPF standards. Every audit produces a management letter with prioritised findings and quarterly remediation tracking. After the internal audit, your <a href="/statutory-audit">Statutory Audit</a> and <a href="/accounting-services">Accounting Services</a> compliance will be significantly strengthened.</p>
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
                <h2 class="section-title">What Is Internal Audit</h2>
                <div class="content-text what-is-definition">
                    
                    <p>Internal audit is an independent, objective assurance and consulting activity designed to add value and improve an organisation's operations by evaluating the effectiveness of risk management, internal controls, and governance processes under the COSO framework and IIA standards.</p><p>Unlike statutory audit (which expresses an opinion on financial statements for shareholders), internal audit serves management and the Board by examining operational processes, financial controls, compliance adherence, and fraud risks across the entire business. Findings are reported to management through a management letter and to the Board/Audit Committee for governance oversight.</p><p>Under Section 138 of the Companies Act, 2013, prescribed classes of companies must appoint an internal auditor - a Chartered Accountant, Cost Accountant, or other qualified professional approved by the Board. The internal auditor cannot be the same person or firm conducting the statutory audit. Internal audit also feeds directly into the Internal Financial Controls (IFC) assessment under Section 134(5) - the Board must state in its report whether adequate IFC systems are in place and operating effectively.</p>

                </div>
                <div class="highlight-box" style="margin-top:20px;">
                    <p><strong>Key Terms for Internal Audit Services in Pune:</strong></p>
                    <p><strong>COSO Framework:</strong> Committee of Sponsoring Organisations Internal Controls Integrated Framework - five components: Control Environment, Risk Assessment, Control Activities, Information & Communication, Monitoring.</p><p><strong>Section 138:</strong> Companies Act 2013 provision mandating internal audit for prescribed classes of companies.</p><p><strong>IFC:</strong> Internal Financial Controls - policies and procedures for orderly business, safeguarding assets, fraud prevention, and accurate financial records. Board must report IFC adequacy under Section 134(5).</p><p><strong>ITGC:</strong> IT General Controls - access management, change management, backup/recovery, cybersecurity controls audited for IT companies.</p><p><strong>Management Letter:</strong> Primary deliverable of internal audit containing findings classified as Critical/High/Medium/Low with root cause analysis and corrective action plans.</p>

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
                            <text x="100" y="170" font-size="10" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial, sans-serif">Internal Audit Services in Pune</text>
                        </svg>
                    </div>
                    <div class="illustration-badge">
                        <span>COSO + IIA</span>
                        <strong>Risk-Based Audit</strong>
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
            <h2 class="section-title">Who Needs Internal Audit in Pune</h2>
            <div class="content-text">
                
                <p><strong>Auto Component Manufacturers (Chakan, Talegaon, Pimpri-Chinchwad):</strong> Complex supply chains with hundreds of vendors, lakhs of SKUs, multi-stage production. Internal audit covers procurement-to-payment, inventory cycle counts, production yield, scrap controls. Many cross Section 138 thresholds for turnover or borrowings.</p><p><strong>IT and SaaS Companies (Hinjewadi, Kharadi):</strong> ITGC audit - access management, change management, backup, cybersecurity. Revenue recognition under Ind AS 115, project accounting, bench cost analysis. Companies preparing for SOC 2 or investor due diligence benefit from documented controls.</p><p><strong>Pharmaceutical Companies (MIDC Bhosari, Hadapsar):</strong> Raw material procurement, batch production records, quality system controls, deviation tracking, CAPA closure, GMP compliance. Identifies control gaps before FDA or CDSCO inspections.</p><p><strong>Private Companies Approaching Section 138 Thresholds:</strong> Companies crossing Rs 200 crore turnover or Rs 100 crore loans without realising internal audit has become mandatory. Non-compliance penalty: Rs 10,000 + Rs 1,000/day. Patron monitors client thresholds annually.</p><p><strong>Growing MSMEs and Startups:</strong> Voluntary internal audit for investor readiness, bank loan compliance, process improvement, and fraud prevention. Strengthens controls and provides governance structure expected by investors and lenders.</p>

            </div>
            </div>
        </div>
    </div>
</section>

<!-- SECTION 5: OUR SERVICES -->
<section class="content-section" id="services-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">11 Internal Audit Services Included in Pune</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Service</th><th>What We Do</th></tr></thead>
                    <tbody>
                        <tr><td>Risk-Based Audit Planning</td><td>Enterprise risk assessment using COSO framework. Risk-rated audit universe mapped to Pune's industry-specific risks. Annual audit plan approved by Audit Committee/Board.</td></tr><tr><td>Financial Controls Audit</td><td>Journal entries, period-end close, bank reconciliation, revenue recognition, expense authorisation, fixed asset verification. Directly feeds IFC assessment.</td></tr><tr><td>Procurement and Vendor Payment Audit</td><td>End-to-end procurement-to-payment cycle - purchase requisition, vendor selection, price comparison, goods receipt, invoice matching, payment authorisation.</td></tr><tr><td>Inventory and Warehouse Audit</td><td>Physical verification, cycle count accuracy, slow-moving stock, inventory valuation (AS-2/Ind AS-2), scrap accounting, warehouse controls.</td></tr><tr><td>Production and Yield Audit</td><td>Production planning vs actual, yield variance, material consumption, machine utilisation, downtime, rejection rates, quality deviation tracking.</td></tr><tr><td>IT General Controls (ITGC) Audit</td><td>Access management, change management, SDLC, backup/recovery, cybersecurity. Critical for Hinjewadi IT companies pursuing SOC 2 or ISO 27001.</td></tr><tr><td>Revenue Recognition Audit</td><td>Ind AS 115 testing for IT project companies (percentage of completion) and manufacturers (bill-and-hold, consignment, export revenue).</td></tr><tr><td>Compliance Audit</td><td>Companies Act, GST, Income Tax, Factories Act, PTRC/PTEC (Maharashtra), labour laws (PF, ESI), industry-specific regulations.</td></tr><tr><td>Fraud Risk Assessment</td><td>Vendor kickbacks, inventory theft, payroll ghost employees, expense fraud, revenue manipulation. Based on COSO Fraud Risk Management Guide.</td></tr><tr><td>IFC Assessment</td><td>Design and operating effectiveness of Internal Financial Controls per Section 134(5) and CARO 2020 Clause 3(xiv).</td></tr><tr><td>Management Letter + Remediation Tracking</td><td>Findings classified Critical/High/Medium/Low, root cause analysis, corrective action plans with deadlines, quarterly follow-up until closure.</td></tr>

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
            <h2 class="section-title">6-Step Internal Audit Process in Pune</h2>
            <p class="section-subtitle" style="text-align:left;max-width:100%;">Patron conducts fieldwork on-site at Pune premises - manufacturing plants in Chakan, MIDC Bhosari; offices in Hinjewadi, Kharadi. Walk-in consultations available for Section 138 applicability assessment and audit scoping at our RTC Silver, Wagholi office.</p>
        </header>
        <div class="steps-container">
            <div class="step-card"><div class="step-content"><span class="step-badge">Step 1</span><h3 class="step-title">Understand Business and Assess Risk</h3><p class="step-description">Patron's CA team begins with a thorough understanding of the Pune company's operations, industry, supply chain, IT systems, and regulatory environment. Enterprise risk assessment using COSO framework identifies risks across financial, operational, compliance, and strategic areas. For Chakan manufacturers: supply chain disruption, inventory theft, vendor kickback. For Hinjewadi IT: revenue misstatement, data breach, access control failure.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>COSO risk map</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Industry risks identified</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="15" y="5" width="90" height="70" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><rect x="25" y="15" width="70" height="12" rx="3" fill="#FF6B6B" opacity="0.2"/><text x="60" y="24" font-size="5" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">HIGH RISK</text><rect x="25" y="32" width="55" height="12" rx="3" fill="#FFA726" opacity="0.2"/><text x="52" y="41" font-size="5" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">MEDIUM</text><rect x="25" y="49" width="40" height="12" rx="3" fill="#66BB6A" opacity="0.2"/><text x="45" y="58" font-size="5" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">LOW</text></svg></div><span class="illustration-label">Risk Mapped</span><span class="step-number-large">01</span></div></div></div>
<div class="step-card"><div class="step-content"><span class="step-badge">Step 2</span><h3 class="step-title">Develop Risk-Rated Audit Plan</h3><p class="step-description">Risk-rated audit universe - all auditable areas mapped to risk levels. High-risk areas audited quarterly, medium semi-annually, low annually. Annual internal audit plan presented to Audit Committee or Board for approval with scope, methodology, timing, and resources.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Audit universe ready</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Board-approved plan</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="15" y="5" width="90" height="70" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><text x="60" y="22" font-size="7" fill="#14365F" font-weight="800" text-anchor="middle" font-family="Arial">Audit Plan</text><line x1="25" y1="30" x2="95" y2="30" stroke="#F5A623" stroke-width="2"/><rect x="25" y="36" width="22" height="10" rx="2" fill="#FF6B6B" opacity="0.15"/><text x="36" y="43" font-size="4" fill="#14365F" text-anchor="middle" font-family="Arial">Q1</text><rect x="50" y="36" width="22" height="10" rx="2" fill="#FFA726" opacity="0.15"/><text x="61" y="43" font-size="4" fill="#14365F" text-anchor="middle" font-family="Arial">Q2</text><rect x="75" y="36" width="18" height="10" rx="2" fill="#66BB6A" opacity="0.15"/><text x="84" y="43" font-size="4" fill="#14365F" text-anchor="middle" font-family="Arial">Q3</text></svg></div><span class="illustration-label">Plan Approved</span><span class="step-number-large">02</span></div></div></div>
<div class="step-card"><div class="step-content"><span class="step-badge">Step 3</span><h3 class="step-title">Execute Audit Fieldwork</h3><p class="step-description">Industry-specific audit programmes for Pune businesses. Manufacturing: procurement walkthrough, inventory cycle count, production yield, scrap review. IT: ITGC testing, revenue recognition, project accounting. Pharma: batch records, quality deviations, CAPA closure. Test both design and operating effectiveness through walkthroughs, sample testing, data analytics, and physical verification.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>On-site fieldwork</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Controls tested</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="20" y="10" width="80" height="60" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><circle cx="40" cy="35" r="10" fill="#FFF3E0" stroke="#F5A623" stroke-width="1"/><text x="40" y="38" font-size="5" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">Test</text><circle cx="70" cy="35" r="10" fill="#E8F5E9" stroke="#25D366" stroke-width="1"/><text x="70" y="38" font-size="5" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">Verify</text><rect x="30" y="52" width="50" height="10" rx="3" fill="#14365F" opacity="0.08"/><text x="55" y="60" font-size="5" fill="#14365F" font-weight="600" text-anchor="middle" font-family="Arial">Fieldwork</text></svg></div><span class="illustration-label">Tested</span><span class="step-number-large">03</span></div></div></div>
<div class="step-card"><div class="step-content"><span class="step-badge">Step 4</span><h3 class="step-title">Identify Findings and Root Cause</h3><p class="step-description">Document all control gaps, process deviations, and non-compliance. Each finding analysed for root cause (people, process, technology, policy), quantified for risk impact (financial, operational, reputational, regulatory), and classified as Critical, High, Medium, or Low. Findings discussed with process owners before finalisation.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Root cause analysed</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Risk-classified</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="15" y="5" width="90" height="70" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><rect x="25" y="15" width="60" height="12" rx="3" fill="#FF6B6B" opacity="0.3"/><text x="55" y="24" font-size="5" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">CRITICAL</text><rect x="25" y="30" width="45" height="12" rx="3" fill="#FFA726" opacity="0.25"/><text x="47" y="39" font-size="5" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">HIGH</text><rect x="25" y="45" width="35" height="12" rx="3" fill="#FFD54F" opacity="0.25"/><text x="42" y="54" font-size="5" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">MEDIUM</text><rect x="25" y="60" width="25" height="8" rx="2" fill="#66BB6A" opacity="0.2"/><text x="37" y="67" font-size="4" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">LOW</text></svg></div><span class="illustration-label">Classified</span><span class="step-number-large">04</span></div></div></div>
<div class="step-card"><div class="step-content"><span class="step-badge">Step 5</span><h3 class="step-title">Issue Management Letter</h3><p class="step-description">Formal management letter to Board/Audit Committee: executive summary, audit scope, detailed findings with risk classification, root cause analysis, management response, corrective action plan with deadlines and responsible owners, overall control environment assessment. This is the primary deliverable of the internal audit engagement.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Board-ready report</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Action plans set</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="15" y="5" width="90" height="70" rx="6" fill="#E8F5E9" stroke="#25D366" stroke-width="1.5"/><text x="60" y="22" font-size="7" fill="#14365F" font-weight="800" text-anchor="middle" font-family="Arial">Mgmt Letter</text><line x1="25" y1="30" x2="95" y2="30" stroke="#25D366" stroke-width="1.5"/><line x1="30" y1="40" x2="85" y2="40" stroke="#14365F" stroke-width="1" opacity="0.2"/><line x1="30" y1="50" x2="78" y2="50" stroke="#14365F" stroke-width="1" opacity="0.2"/><line x1="30" y1="60" x2="72" y2="60" stroke="#14365F" stroke-width="1" opacity="0.2"/></svg></div><span class="illustration-label">Issued</span><span class="step-number-large">05</span></div></div></div>
<div class="step-card"><div class="step-content"><span class="step-badge">Step 6</span><h3 class="step-title">Track Remediation Quarterly</h3><p class="step-description">Quarterly follow-up on all open findings - verify corrective actions implemented, test effectiveness of remediation, update findings tracker. Status reports presented to Audit Committee/Board at each meeting. Critical and High findings escalated until closed. Continuous follow-up ensures lasting improvements, not just reports.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Quarterly tracking</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Findings closed</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="5" y="10" width="35" height="30" rx="3" fill="#E8F5E9" stroke="#25D366" stroke-width="1"/><text x="22" y="28" font-size="5" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">Q1</text><rect x="45" y="10" width="30" height="30" rx="3" fill="#FFF3E0" stroke="#F5A623" stroke-width="1"/><text x="60" y="28" font-size="5" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">Q2</text><rect x="80" y="10" width="35" height="30" rx="3" fill="#F0F4F8" stroke="#14365F" stroke-width="1"/><text x="98" y="28" font-size="5" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">Q3</text><rect x="20" y="50" width="80" height="20" rx="3" fill="#14365F" opacity="0.06"/><text x="60" y="63" font-size="5" fill="#14365F" font-weight="600" text-anchor="middle" font-family="Arial">All Findings Closed</text></svg></div><span class="illustration-label">Remediated</span><span class="step-number-large">06</span></div></div></div>


        </div>
    </div>
</section>

<!-- SECTION 8: DOCUMENTS REQUIRED -->
<section class="content-section" id="documents-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Documents and Information Required for Internal Audit in Pune</h2>
            <div class="content-text">
                
                <ul><li>Board resolution appointing the internal auditor (or engagement letter for voluntary audit)</li><li>Prior year financial statements (audited) and current year trial balance</li><li>Organisation chart and list of key process owners</li><li>Chart of accounts and accounting policies</li><li>ERP/accounting system access (Tally, SAP, Zoho Books, Oracle) for data extraction and testing</li><li>Previous internal audit reports and management responses (if any)</li><li>Statutory audit report, CARO report, and auditor management letter</li><li>Standard operating procedures (SOPs) for key processes</li><li>Bank statements, bank reconciliation, and loan agreements</li><li>Vendor master list, purchase orders, goods receipt notes, vendor payment records</li><li>Inventory records, stock registers, cycle count reports, scrap/rejection records</li><li>IT system architecture, access control matrix, change management logs, backup logs</li><li>Compliance register (GST returns, TDS returns, PF/ESI challans, Factories Act, Maharashtra PT)</li></ul><div class="highlight-box" style="margin-top:20px;"><p><strong>Pune-Specific Tip:</strong> For Chakan and MIDC Bhosari manufacturers, physical verification of inventory is critical. Patron conducts surprise stock counts at the plant, reconciles physical quantities with book records, and tests WIP and finished goods valuation. For Hinjewadi IT companies, Patron extracts ERP data using analytics tools to test 100% of transactions rather than sampling.</p></div>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 9: CHALLENGES -->
<section class="content-section" id="challenges-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">5 Common Internal Audit Challenges in Pune</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Challenge</th><th>Impact</th><th>How Patron Accounting Solves It</th></tr></thead>
                    <tbody>
                        <tr><td>No Audit Trail in Accounting System</td><td>Tally ERP without audit trail enabled - changes to entries cannot be tracked, post-facto manipulation undetectable</td><td>Check audit trail enablement as first step. Report non-compliance as Critical finding.</td></tr><tr><td>Weak Segregation of Duties in Procurement</td><td>Same person raises PO, receives goods, and authorises payment - classic fraud risk (vendor kickback, fictitious vendors)</td><td>Test segregation across procurement-to-payment cycle. Recommend control redesign or compensating controls.</td></tr><tr><td>Inventory Discrepancies and Scrap Leakage</td><td>Physical stock vs book records mismatch. Scrap sold without documentation - leakage in Chakan/Pimpri-Chinchwad plants</td><td>Surprise physical verification, discrepancy reconciliation, scrap disposal controls testing. Often highest-ROI finding.</td></tr><tr><td>IT Access Controls Not Reviewed After Employee Exit</td><td>Former employees retain system access (ERP, cloud, email, code repository) - high-risk gap in Hinjewadi IT companies</td><td>Test joiner-mover-leaver process against active directory records. Flag stale access as High finding.</td></tr><tr><td>Companies Crossing Section 138 Thresholds Unaware</td><td>Growing Pune private companies cross Rs 200 Cr turnover or Rs 100 Cr loans without realising internal audit is mandatory. Penalty: Rs 10,000 + Rs 1,000/day.</td><td>Monitor client financial thresholds annually. Proactively trigger internal audit engagement when applicability arises.</td></tr>

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
            <h2 class="section-title">Internal Audit Fees in Pune - 2026 Indicative Ranges</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Fee Component</th><th>Amount</th></tr></thead>
                    <tbody>
                        <tr><td>MSME / Startup (voluntary, single location)</td><td>Rs 49,999 - Rs 99,999/year (4 quarterly audits + management letter)</td></tr><tr><td>Private Company (Section 138 mandatory, single location)</td><td>Rs 99,999 - Rs 2,99,999/year (COSO risk assessment + quarterly audit + IFC)</td></tr><tr><td>Manufacturing (multi-plant, Chakan/MIDC)</td><td>Rs 1,99,999 - Rs 4,99,999/year (plant-level audit + inventory + production)</td></tr><tr><td>IT Company (Hinjewadi/Kharadi, 100+ employees)</td><td>Rs 1,49,999 - Rs 3,99,999/year (ITGC + revenue + project accounting + IFC)</td></tr><tr><td>Listed Company / Large Unlisted</td><td>Rs 4,99,999+/year (full-scope, multi-location, CARO coordination)</td></tr><tr><td>IFC Assessment (standalone)</td><td>Rs 99,999 - Rs 2,99,999 (design + operating effectiveness testing)</td></tr><tr><td>Patron Accounting Professional Fees</td><td>Starting from INR 49,999 (Exl GST and Govt. Charges)</td></tr>

                    </tbody>
                </table>
                </div>
                <p style="margin-top:16px;font-size:13px;color:var(--text-muted);font-style:italic;">All fees and charges listed are indicative only and do not constitute a binding offer. Final amounts may vary depending on the volume of work and the complexity involved.</p>
                <p style="margin-top:16px;">Professional service charges for drafting, filing, and representation are separate from the statutory fees. The exact fee depends on the complexity of the case, disputed amount, and number of hearings required. Contact us for a detailed quote.</p>
                <p style="margin-top:16px;"><strong>Get a free Internal Audit Services in Pune consultation - <a href="tel:+919459456700">Call +91 945 945 6700</a> or <a href="https://wa.me/919459456700?text=Hi%2C%20I%20need%20internal%20audit%20services%20in%20Pune.%20Please%20call%20me." target="_blank">WhatsApp us</a>. No-obligation assessment.</strong></p>
            </div>
        </div>
    </div>
</section>

<!-- SECTION 11: TIMELINE -->
<section class="content-section" id="timeline-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Internal Audit Timeline in Pune</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Stage</th><th>Estimated Timeline</th></tr></thead>
                    <tbody>
                        <tr><td>Engagement Setup + Board Resolution</td><td>Week 1</td></tr><tr><td>Enterprise Risk Assessment (Year 1)</td><td>Weeks 2-3</td></tr><tr><td>Annual Audit Plan Approval</td><td>Week 4</td></tr><tr><td>Q1 Audit Fieldwork</td><td>Weeks 5-8</td></tr><tr><td>Q1 Management Letter</td><td>Week 9</td></tr><tr><td>Q2/Q3/Q4 Audit Cycles</td><td>Ongoing (quarterly)</td></tr><tr><td>Remediation Follow-Up</td><td>Quarterly</td></tr><tr><td>Year-End IFC Assessment</td><td>Year-end (design + operating effectiveness)</td></tr>

                    </tbody>
                </table>
                </div>
                <div class="highlight-box" style="margin-top:16px;">
                    
                    <p><strong>Note:</strong> Patron's turnaround: Risk assessment completed within 2 weeks. Quarterly fieldwork within 3-4 weeks. Management letter within 1 week of fieldwork. Remediation tracked quarterly. Audit Committee presentation slides prepared for every reporting cycle. First-year setup includes COSO risk mapping; subsequent years are faster.</p>

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
            <h2 class="section-title">Why Choose Patron for Internal Audit in Pune</h2>
        </div>
        <div class="features-grid"><article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><h3 class="feature-title">On-Site Fieldwork Across Pune</h3><p class="feature-text">Patron conducts fieldwork at Pune manufacturing plants, IT offices, and corporate HQs - from Chakan and MIDC Bhosari to Hinjewadi and Kharadi. We understand Pune's industries because we audit them.</p></article><article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/></svg></div><h3 class="feature-title">Industry-Specific Audit Programmes</h3><p class="feature-text">Sector-specific programmes for auto manufacturing (procurement, inventory, scrap), IT companies (ITGC, access, revenue recognition), and pharma (batch records, quality controls, GMP). Not generic checklists.</p></article><article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg></div><h3 class="feature-title">COSO Framework + IFC Coordination</h3><p class="feature-text">Risk-based internal audit using COSO framework. Findings feed IFC assessment under Section 134(5). Coordination with statutory auditor ensures CARO 2020 reporting on IFC is consistent.</p></article><article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><path d="M12 6v6l4 2"/></svg></div><h3 class="feature-title">Remediation Tracking Until Closure</h3><p class="feature-text">Quarterly follow-up on all open findings. Status reports to Audit Committee. Critical and High escalated until closed. The result is measurable improvement in the control environment, not just reports.</p></article></div>
    </div>
</section>

<!-- SECTION 12A: SOCIAL PROOF -->
<section class="content-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Trusted by 10,000+ Businesses Across India</h2>
            <div class="content-text">
                
                <p><strong>10,000+ Businesses Served | 4.9 Google Rating | 50,000+ Docs Filed | 15+ Years</strong></p><p>Trusted by Hyundai, Asian Paints, Bridgestone and businesses across India. With offices in Pune, Mumbai, Delhi, and Gurugram, Patron serves Pune companies with national CA practice strength and local industrial audit expertise.</p>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 13: SELF-FILING vs PROFESSIONAL COMPARISON -->
<section class="content-section" id="comparison-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Internal Audit vs Statutory Audit - Key Differences</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Parameter</th><th>Internal Audit</th><th>Statutory Audit</th></tr></thead>
                    <tbody>
                        <tr><td>Objective</td><td>Improve controls, reduce risk, enhance efficiency</td><td>Express opinion on financial statements</td></tr><tr><td>Appointed By</td><td>Board of Directors</td><td>Shareholders at AGM</td></tr><tr><td>Reports To</td><td>Management / Audit Committee / Board</td><td>Shareholders</td></tr><tr><td>Scope</td><td>Operational, financial, compliance, IT, fraud</td><td>Financial statements and related disclosures</td></tr><tr><td>Frequency</td><td>Quarterly / ongoing</td><td>Annual</td></tr><tr><td>Legal Basis</td><td>Section 138 (Companies Act 2013)</td><td>Section 143 (Companies Act 2013)</td></tr><tr><td>Deliverable</td><td>Management letter with corrective actions</td><td>Audit report with opinion</td></tr>

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
            <h2 class="section-title">Related Audit and Compliance Services</h2>
            <div class="content-text">
                
                <ul><li><a href="/internal-audit">Internal Audit Services in India</a> - Our national internal audit practice</li><li><a href="/statutory-audit">Statutory Audit</a> - Annual audit under Section 143 of Companies Act</li><li><a href="/accounting-services">Accounting Services</a> - Complete accounting and bookkeeping</li><li><a href="/income-tax-return">Income Tax Return Filing</a> - Annual ITR compliance</li><li><a href="/gst-returns">GST Return Filing</a> - Monthly and annual GST compliance</li><li><a href="/payroll-services">Payroll Services</a> - Payroll processing and labour law compliance</li></ul><p>Internal audit and statutory audit are complementary but independent. Internal audit serves management by improving controls. Statutory audit serves shareholders by expressing an opinion on financial statements. Both are mandatory for prescribed companies under the Companies Act, 2013.</p>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 15A: LEGAL FRAMEWORK -->
<section class="content-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Legal and Compliance Framework for Internal Audit</h2>
            <div class="content-text">
                
                <p><strong>Governing Provisions:</strong></p><ul><li>Section 138 of Companies Act, 2013 - Mandates internal audit for prescribed classes</li><li>Rule 13 of Companies (Accounts) Rules, 2014 - Applicability thresholds</li><li>Section 134(5) - Directors' Responsibility Statement on IFC adequacy</li><li>CARO 2020 Clause 3(xiv) - Statutory auditor report on internal audit system and IFC</li><li>COSO Internal Controls - Integrated Framework (2013) - Five components</li><li>IIA International Professional Practices Framework (IPPF)</li><li>Standards on Internal Audit (SIA) issued by ICAI</li></ul><p><strong>Penalty:</strong> Section 450 - Rs 10,000 default penalty. Section 451 - Rs 10,000 + Rs 1,000/day continuing default. Officers in default personally liable.</p><p><strong>Key Portal:</strong> <a href="https://www.mca.gov.in" target="_blank" rel="noopener">MCA (mca.gov.in)</a> - Ministry of Corporate Affairs</p>

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
                    <h2 class="faq-expanded__title">FAQs - Internal Audit Services in Pune</h2>
                    <p class="faq-expanded__lead">Answers to common questions about internal audit in Pune. Call +91 945 945 6700.</p>
                    @include('partials.bigin-form', [
                        'variant'  => 'compact',
                        'service'  => 'Internal Audit Services in Pune',
                        'city'     => 'Pune',
                    ])
                </aside>
                <div class="faq-expanded__list">
                    <div class="faq-expanded__item" id="faq-1">
                        <h3 class="faq-expanded__q">Is internal audit mandatory for my company?</h3>
                        <div class="faq-expanded__a"><p>Internal audit is mandatory under Section 138 for all listed companies, unlisted public companies with paid-up capital Rs 50 crore+ OR turnover Rs 200 crore+ OR loans Rs 100 crore+ OR deposits Rs 25 crore+, and private companies with turnover Rs 200 crore+ OR loans Rs 100 crore+. If your Pune company meets ANY ONE threshold, internal audit is mandatory. Below thresholds, it is voluntary but recommended.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-2">
                        <h3 class="faq-expanded__q">How much does internal audit cost in Pune?</h3>
                        <div class="faq-expanded__a"><p>Fees range from Rs 49,999 for voluntary MSME audits to Rs 4,99,999+ for listed companies. A typical Section 138 mandatory engagement for a single-location Pune private company costs Rs 99,999 to Rs 2,99,999 per year, covering quarterly audits, IFC assessment, management letter, and remediation tracking. Scoping call is free.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-3">
                        <h3 class="faq-expanded__q">What is the difference between internal audit and statutory audit?</h3>
                        <div class="faq-expanded__a"><p>Internal audit evaluates controls, risk management, and operational efficiency, reporting to management and Board. Statutory audit expresses an opinion on financial statements, reporting to shareholders. Internal audit is continuous (quarterly), covers operations beyond financial statements. Statutory audit is annual. Both required for prescribed companies.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-4">
                        <h3 class="faq-expanded__q">Who can be appointed as an internal auditor?</h3>
                        <div class="faq-expanded__a"><p>Under Section 138, the internal auditor can be a CA, Cost Accountant (CMA), or other qualified professional as decided by the Board. Can be an employee or external firm. However, CANNOT be the same person or firm conducting statutory audit. Appointment by Board resolution.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-5">
                        <h3 class="faq-expanded__q">What does an internal audit cover?</h3>
                        <div class="faq-expanded__a"><p>Financial controls (journal entries, bank reconciliation, AP/AR), operational processes (procurement, inventory, production, sales), IT controls (access, change management, backup), compliance (Companies Act, GST, Income Tax, labour laws), and fraud risk (vendor kickbacks, inventory theft). Scope determined by risk assessment and Audit Committee approval.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-6">
                        <h3 class="faq-expanded__q">What are Internal Financial Controls (IFC)?</h3>
                        <div class="faq-expanded__a"><p>IFC are policies and procedures for orderly business conduct, safeguarding assets, preventing frauds and errors, accuracy of accounting records, and timely financial information. Under Section 134(5), the Board must state IFC adequacy. Under CARO 2020, the statutory auditor reports on IFC. Internal audit findings are the primary input for both assessments.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-7">
                        <h3 class="faq-expanded__q">How often should internal audit be conducted?</h3>
                        <div class="faq-expanded__a"><p>Best practice is quarterly. High-risk areas (procurement, inventory, IT access) audited every quarter. Medium-risk (compliance, HR/payroll) semi-annually. Low-risk (fixed assets, insurance) annually. Audit Committee reviews reports at each quarterly meeting. Patron conducts four cycles per year for most Pune clients.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-8">
                        <h3 class="faq-expanded__q">What happens if my company does not conduct internal audit when mandatory?</h3>
                        <div class="faq-expanded__a"><p>Non-compliance with Section 138 attracts Rs 10,000 penalty under Section 450. For repeated default, Section 451 imposes Rs 10,000 plus Rs 1,000 per day of continuing default. Officers in default are personally liable. Additionally, the statutory auditor must report the gap under CARO 2020.</p></div>
                    </div>
                </div>
            </div>


            <!-- Quick Answers -->
            <div class="highlight-box" style="margin-top:32px;">
                <p><strong>Quick Answers</strong></p>
                <p><strong>Internal audit mandatory hai kya mere company ke liye?</strong> Agar listed company hai to haan. Private company mein turnover Rs 200 Cr se zyada ya loans Rs 100 Cr se zyada ho to mandatory hai Section 138 ke under. Niche ho to voluntary.</p><p><strong>Internal audit aur statutory audit mein kya fark hai?</strong> Internal audit management ke liye hai - controls, risks, operations check karta hai. Statutory audit shareholders ke liye hai - financial statements pe opinion deta hai. Dono alag hain.</p><p><strong>Internal audit kitne mein hota hai?</strong> MSME ke liye Rs 49,999 se shuru. Section 138 mandatory ke liye Rs 99,999 se Rs 2,99,999. Large manufacturing ke liye Rs 4,99,999+.</p>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 18: URGENCY CTA -->
<section class="content-section" style="background: var(--orange-lighter) !important; border-left: 4px solid var(--orange);">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Section 138 Non-Compliance Penalty: Rs 1,000 Per Day</h2>
            <div class="content-text">
                
                <p>If your Pune company meets Section 138 thresholds and does not have an internal auditor appointed, the penalty clock is ticking at Rs 1,000 per day. Beyond penalty: the statutory auditor will report the gap under CARO 2020, IFC cannot be assessed adequately, fraud risks remain undetected, and process inefficiencies drain margins. For Pune manufacturers, a single undetected vendor fraud can cost more than years of internal audit fees.</p><p><strong>Internal audit is the lowest-cost insurance against financial loss. <a href="tel:+919459456700">Call +91 945 945 6700</a> or <a href="https://wa.me/919459456700?text=Hi%2C%20I%20need%20internal%20audit%20in%20Pune." target="_blank">WhatsApp us</a>.</strong></p>

            </div>
        </div>
    </div>
</section>

<!-- CONCLUSION + CTA BLOCK (Dark) -->
<section class="content-section" style="background: var(--blue) !important;">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title" style="color:#FFFFFF !important;">Get Risk-Based Internal Audit for Your Pune Company</h2>
            <div class="content-text" style="text-align:left;">
                
                <p style="color:rgba(255,255,255,0.85);">Internal audit services in Pune cover the complete assurance spectrum - from Section 138 compliance for companies meeting statutory thresholds to voluntary risk-based audits for growing MSMEs, spanning Chakan auto component manufacturers, Hinjewadi IT companies, MIDC Bhosari pharma units, and businesses across the city.</p><p style="color:rgba(255,255,255,0.85);">Patron Accounting's Pune office at RTC Silver, Wagholi delivers COSO-framework risk-based internal audit with sector-specific programmes for manufacturing, IT, and services - producing management letters with prioritised findings and quarterly remediation tracking. With 10,000+ businesses served and a CA team experienced in Pune's industrial ecosystem, Patron transforms internal audit from a compliance checkbox into a measurable control improvement programme.</p>

            </div>
            <div style="display:flex;gap:14px;flex-wrap:wrap;margin-top:24px;">
                <a href="tel:+919459456700" style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:var(--orange);color:#fff;border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#128222; Call +91 945 945 6700</a>
                <a href="https://wa.me/919459456700?text=Hi%2C%20I%20need%20internal%20audit%20services%20in%20Pune.%20Please%20call%20me." target="_blank" style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:#25D366;color:#fff;border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#128172; WhatsApp Us</a>
                <a href="mailto:sales@patronaccounting.com?subject=Enquiry%20for%20Internal%20Audit%20Pune&body=Hello%20Patron%20Accounting%20Team%2C%0A%0AI%20need%20internal%20audit%20services%20in%20Pune.%0A%0APlease%20get%20in%20touch.%0A%0AThank%20you." style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:transparent;color:#fff;border:2px solid rgba(255,255,255,0.3);border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#9993;&#65039; Email Us</a>
            </div>
            <p style="color:rgba(255,255,255,0.7);font-size:13px;margin-top:16px;">Book a Free Consultation - No Obligation.</p>
        </div>
    </div>
</section>

<!-- GSTAT STATE BENCH CITY PAGES (32 Pages) -->
<section class="content-section" style="padding:48px 32px;background:var(--gray-50);">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title" style="text-align:center;margin-bottom:12px;">Internal Audit Services Across India</h2>
            <p style="text-align:center;color:var(--text-muted);font-size:15px;margin-bottom:40px;">Patron offers internal audit services in 8 major cities. Select your city below.</p>
         
            <div class="pa-city-block" style="margin-bottom:40px;"><div class="pa-city-grid"><div class="pa-city-card" style="opacity:0.6; pointer-events:none; border:2px solid var(--orange); position:relative;"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Pune</div><div class="pa-card-sub">Maharashtra</div></div><span style="position:absolute; top:6px; right:8px; font-size:10px; color:var(--orange); font-weight:700; text-transform:uppercase; letter-spacing:0.5px;">You're here</span></div><a href="/internal-audit/mumbai" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Mumbai</div><div class="pa-card-sub">Maharashtra</div></div></a><a href="/internal-audit/delhi" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Delhi</div><div class="pa-card-sub">Delhi NCR</div></div></a><a href="/internal-audit/gurugram" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Gurugram</div><div class="pa-card-sub">Haryana</div></div></a><a href="/internal-audit/bangalore" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Bangalore</div><div class="pa-card-sub">Karnataka</div></div></a><a href="/internal-audit/hyderabad" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Hyderabad</div><div class="pa-card-sub">Telangana</div></div></a><a href="/internal-audit/chennai" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Chennai</div><div class="pa-card-sub">Tamil Nadu</div></div></a><a href="/internal-audit/kolkata" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Kolkata</div><div class="pa-card-sub">West Bengal</div></div></a></div></div><div class="pa-city-block"><div class="pa-block-title">Related Services in Pune</div><div class="pa-block-sub">End-to-end audit and compliance</div><div class="pa-cross-grid"><a href="/accounting-services/pune" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Accounting Services</div><div class="pa-card-sub">Pune</div></div></a><a href="/gst-registration/pune" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">GST Registration</div><div class="pa-card-sub">Pune</div></div></a><a href="/payroll-services/pune" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Payroll Services</div><div class="pa-card-sub">Pune</div></div></a><a href="/private-limited-company-registration/pune" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Pvt Ltd Registration</div><div class="pa-card-sub">Pune</div></div></a><a href="/startup-registration/pune" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Startup Registration</div><div class="pa-card-sub">Pune</div></div></a><a href="/trademark-registration/pune" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Trademark Registration</div><div class="pa-card-sub">Pune</div></div></a></div></div>
        </div>
    </div>
</section>

<!-- CONTENT FRESHNESS FOOTER -->
<section class="content-section" style="padding:32px;">
    <div class="content-container">
        <div class="text-content" style="font-size:13px;color:var(--text-muted);">
            <p><strong>Content Created:</strong> 13 March 2026 &nbsp;|&nbsp; <strong>Last Updated:</strong> <span id="lastUpdatedFooter">13 March 2026</span> &nbsp;|&nbsp; <strong>Next Review:</strong> 13 September 2026 &nbsp;|&nbsp; <strong>Reviewed By:</strong> CA &amp; CS Team, Patron Accounting LLP</p>
            <p>This page is reviewed semi-annually (Freshness Tier 2) to reflect Companies Act amendments, CARO updates, COSO framework changes, and Section 138 threshold revisions. The next scheduled review is September 2026.</p>
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
