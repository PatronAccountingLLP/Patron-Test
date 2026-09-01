@extends('layouts.service-app')
<link rel="preconnect" href="https://fonts.googleapis.com"><link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Barlow:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,400&family=DM+Sans:opsz,wght@9..40,400;9..40,500;9..40,600;9..40,700&display=swap" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
@section('meta')
    <title>Internal Audit in Hyderabad – Scope, IFC, Risk &amp; Reporting</title>
    <meta name="description" content="CA-led internal audit in Hyderabad. Section 138, IFC, risk-based quarterly audit. HITEC City IT, pharma, listed companies. Call +91 945 945 6700.">
    <link rel="canonical" href="/internal-audit/hyderabad">
    <meta name="robots" content="index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1">
    <meta property="og:title" content="Internal Audit in Hyderabad – Scope, IFC, Risk &amp; Reporting">
    <meta property="og:description" content="CA-led internal audit Hyderabad. Section 138, IFC, risk-based. HITEC City, pharma. Call +91 945 945 6700.">
    <meta property="og:url" content="/internal-audit/hyderabad">
    <meta property="og:type" content="website"><meta property="og:site_name" content="Patron Accounting">
    <meta property="og:image" content="https://www.patronaccounting.com/images/og-default-square.png">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="1200">
    <meta property="og:image:type" content="image/png">
    <meta property="og:image:secure_url" content="https://www.patronaccounting.com/images/og-default-square.png">
    <meta property="og:image:alt" content="Patron Accounting - partner you can rely on">
    <meta name="twitter:card" content="summary_large_image"><meta name="twitter:title" content="Internal Audit in Hyderabad – Scope, IFC, Risk &amp; Reporting">
    <meta name="twitter:description" content="Internal audit Hyderabad. Section 138. Risk-based. Call +91 945 945 6700.">
    <meta name="twitter:image" content="https://www.patronaccounting.com/images/og-default-square.png">
@endsection
@section('schema')
    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@graph": [
        {
          "@type": "Service",
          "name": "Internal Audit Services in Hyderabad",
          "description": "CA-led internal audit in Hyderabad. Section 138, IFC, risk-based quarterly audit. HITEC City IT, pharma, listed companies. Call +91 945 945 6700.",
          "url": "https://www.patronaccounting.com/internal-audit/hyderabad",
          "serviceType": "Internal Audit Services in Hyderabad",
          "areaServed": {
            "@type": "City",
            "name": "Hyderabad"
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
            "url": "https://www.patronaccounting.com/internal-audit/hyderabad",
            "price": "15000"
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
              "name": "Internal Audit",
              "item": "https://www.patronaccounting.com/internal-audit"
            },
            {
              "@type": "ListItem",
              "position": 3,
              "name": "Internal Audit Hyderabad",
              "item": "https://www.patronaccounting.com/internal-audit/hyderabad"
            }
          ]
        },
        {
          "@type": "FAQPage",
          "mainEntity": [
            {
              "@type": "Question",
              "name": "Which companies need internal audit?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "All listed companies. Unlisted public with turnover 200 Cr capital 50 Cr loans 100 Cr deposits 25 Cr. Private with turnover 200 Cr or loans 100 Cr."
              }
            },
            {
              "@type": "Question",
              "name": "What is Section 138?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "Companies Act 2013 mandating internal audit for prescribed companies. ILCD thresholds. Audit Committee defines scope. Penalty Section 450."
              }
            },
            {
              "@type": "Question",
              "name": "Who can be internal auditor?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "CA CMA or Board-approved professional. Cannot be statutory auditor per Section 144b. May or may not be employee."
              }
            },
            {
              "@type": "Question",
              "name": "What is penalty?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "Rs 10,000 plus Rs 1,000 per day continuing default under Section 450. Compoundable."
              }
            },
            {
              "@type": "Question",
              "name": "Is it mandatory for private companies?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "Only if turnover 200 Cr or loans 100 Cr. Below thresholds voluntary but recommended for governance."
              }
            },
            {
              "@type": "Question",
              "name": "How often?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "Not prescribed by law. Quarterly recommended as best practice. Audit Committee decides."
              }
            },
            {
              "@type": "Question",
              "name": "What does it cover?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "Financial controls operational processes regulatory compliance risk management fraud prevention IT controls IFC evaluation."
              }
            },
            {
              "@type": "Question",
              "name": "What is IFC?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "Internal Financial Controls under Section 134(5). Board must report adequacy. Internal audit evaluates design and effectiveness."
              }
            }
          ]
        }
      ]
    }
</script>

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
                        Internal Audit Services in Hyderabad: CA-Led Compliance and Risk Assessment
                    </h1>

                    <div class="expert-attribution-box">
                        <span class="eab-check"><svg width="16" height="16" viewBox="0 0 24 24" fill="currentColor"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg></span>
                        <span class="eab-title">Reviewed by CA and CS Team, Patron Accounting LLP</span>
                        <span class="eab-meta">
                            <span>ICAI & ICSI Registered</span><span class="eab-sep">|</span>
                            <span>15+ Years Experience</span><span class="eab-sep">|</span>
                            <span>Last Updated: <span id="lastUpdated">08 April 2026</span></span>
                        </span>
                        <a href="#" class="eab-link">Verify Credentials &rarr;</a>
                    </div>

                    <div class="mb-4">
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Section::</span> 138, Companies Act 2013 + Rule 13 | Mandatory for prescribed classes</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Auditor::</span> CA, CMA, or Board-approved professional | Cannot be statutory auditor</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Thresholds::</span> ILCD: Income Rs 200 Cr | Loan Rs 100 Cr | Capital Rs 50 Cr | Deposits Rs 25 Cr</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Penalty::</span> Rs 10,000 + Rs 1,000/day for continuing non-compliance (Section 450)</p>
                        </div>
                    </div>

                    <p class="mb-4 fw-bold" style="color: var(--blue); font-size: 15px;">10,000+ Businesses Served | 4.9 Google Rating</p>

                    <div class="hero-cta">
                        <a href="tel:+919459456700" class="btn-video text-decoration-none">
                            <span class="play-circle"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="width:14px;height:14px;color:#fff"><path d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/></svg></span>
                            Call +91 945 945 6700
                        </a>
                        <a href="mailto:sales@patronaccounting.com" class="btn-sample text-decoration-none">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="width:18px;height:18px;"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,12 2,6"/></svg>
                            Email Us
                        </a>
                        <a href="https://wa.me/919459456700?text=Hi%2C%20I%20need%20internal%20audit%20services%20in%20Hyderabad.%20Please%20share%20details." target="_blank" class="btn-sample text-decoration-none">
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
                                            'service'  => 'Internal Audit',
                                            'city'     => 'Hyderabad',
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
    'ctaText'    => 'Hyderabad companies trust Patron for internal audit, IFC evaluation, and compliance assurance.',
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
<a href="#what-section" class="toc-btn">What Is Internal Audit</a>
<a href="#who-section" class="toc-btn">Who Needs It</a>
<a href="#services-section" class="toc-btn">Services</a>
<a href="#procedure-section" class="toc-btn">Process</a>
<a href="#documents-section" class="toc-btn">Information Required</a>
<a href="#challenges-section" class="toc-btn">Challenges</a>
<a href="#fees-section" class="toc-btn">Fees</a>
<a href="#timeline-section" class="toc-btn">Audit Calendar</a>
<a href="#benefits-section" class="toc-btn">Why Patron</a>
<a href="#comparison-section" class="toc-btn">Section 138 Guide</a>
<a href="#faq-section" class="toc-btn">FAQs</a>
        </div>
        <button class="toc-arrow right" id="tocRight">&#10095;</button>
    </div>
</div>

<!-- SECTION 2: OVERVIEW / INTRO + TL;DR -->
<section class="content-section" id="overview-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Internal Audit in Hyderabad: Overview</h2>
            <div class="content-text">
                <div class="highlight-box" style="margin-bottom:20px;">
                    <p><strong>&#128204; TL;DR - Internal Audit Services at a Glance</strong></p>
                    <p>Internal audit under Section 138 of the Companies Act, 2013 is mandatory for all listed companies and for unlisted public/private companies meeting ILCD thresholds (turnover ≥ Rs 200 Cr, loans ≥ Rs 100 Cr, capital ≥ Rs 50 Cr, deposits ≥ Rs 25 Cr). The internal auditor must be a CA, CMA, or Board-approved professional (not statutory auditor). Quarterly periodicity recommended. Non-compliance attracts Rs 10,000 + Rs 1,000/day penalty. Even non-mandatory companies benefit from voluntary internal audit.</p>
                </div>
                <p>Hyderabad's growth creates significant internal audit demand. HITEC City IT companies crossing Rs 200 Cr turnover trigger mandatory compliance. Genome Valley pharma with loans above Rs 100 Cr need audit. Listed Hyderabad companies are always covered. Growing MSMEs benefit from voluntary audit. Learn more about <a href="/internal-audit">Internal Audit across India</a>.</p>
                <p>Patron's CA team provides comprehensive internal audit - from Section 138 assessment and appointment to risk-based quarterly fieldwork, IFC evaluation, management reporting, and compliance integration with <a href="/gst-registration/hyderabad">GST</a>, <a href="/income-tax-return/hyderabad">ITR</a>, and accounting.</p>
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
                <h2 class="section-title">What Is Internal Audit?</h2>
                <div class="content-text what-is-definition">
                    
                    <p>Internal audit under Section 138 is an independent assurance function evaluating a company's financial controls, operational efficiency, regulatory compliance, and risk management, conducted by a CA/CMA appointed by the Board.</p>
<p>Scope is determined by the Audit Committee/Board. Covers financial reporting accuracy, process effectiveness, compliance (GST/TDS/ROC/labour), fraud prevention, IT controls, and IFC. Quarterly periodicity recommended.</p>
<p>For Hyderabad, HITEC City IT companies scaling past Rs 200 Cr, pharma manufacturers with Rs 100 Cr+ loans, and all listed companies must comply. Even growing startups benefit from voluntary audit for investor confidence and governance maturity.</p>

                </div>
                <div class="highlight-box" style="margin-top:20px;">
                    <p><strong>Key Terms for Internal Audit:</strong></p>
                    <ul>
<li><strong>Section 138:</strong> Companies Act mandate for internal audit in prescribed companies</li>
<li><strong>ILCD Thresholds:</strong> Income Rs 200 Cr, Loan Rs 100 Cr, Capital Rs 50 Cr, Deposits Rs 25 Cr</li>
<li><strong>IFC:</strong> Internal Financial Controls under Section 134(5) - Board Report requirement</li>
<li><strong>Section 144(b):</strong> Statutory auditor cannot perform internal audit</li>
<li><strong>Section 450:</strong> Penalty Rs 10,000 + Rs 1,000/day for non-compliance</li>
<li><strong>Audit Committee:</strong> Defines scope and methodology under Section 177</li>
<li><strong>Risk-Based Audit:</strong> Prioritises high-risk areas - financial, operational, compliance, IT</li>
<li><strong>Management Letter:</strong> Report with observations, risk ratings, recommendations</li>
</ul>

                </div>
            </div>
            <div class="column-image">
                <div class="illustration-placeholder">
                    <div class="illustration-icon" style="max-width:240px;">
                        <svg viewBox="0 0 200 180" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <!-- Audit/Magnifying glass illustration -->
                            <rect x="30" y="35" width="140" height="95" rx="8" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/>
                            <!-- Magnifying glass -->
                            <circle cx="85" cy="70" r="22" fill="#fff" stroke="#14365F" stroke-width="2"/>
                            <line x1="100" y1="86" x2="118" y2="104" stroke="#14365F" stroke-width="3" stroke-linecap="round"/>
                            <!-- Check inside -->
                            <path d="M75 70l6 6 12-12" stroke="#25D366" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"/>
                            <!-- Document -->
                            <rect x="120" y="45" width="35" height="45" rx="4" fill="#FFF3E0" stroke="#F5A623" stroke-width="1"/>
                            <line x1="126" y1="55" x2="148" y2="55" stroke="#F5A623" stroke-width="1.5" stroke-linecap="round"/>
                            <line x1="126" y1="65" x2="145" y2="65" stroke="#14365F" stroke-width="1" opacity="0.3"/>
                            <line x1="126" y1="75" x2="142" y2="75" stroke="#14365F" stroke-width="1" opacity="0.3"/>
                            <!-- Tag -->
                            <rect x="30" y="112" width="55" height="14" rx="4" fill="#FFF3E0" stroke="#F5A623" stroke-width="1"/>
                            <text x="57" y="122" font-size="6" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial, sans-serif">SECTION 138</text>
                            <!-- Label -->
                            <text x="100" y="150" font-size="9" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial, sans-serif">Internal Audit</text>
                        </svg>
                    </div>
                    <div class="illustration-badge">
                        <span>Section 138</span>
                        <strong>Internal Audit</strong>
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
            <h2 class="section-title">Who Needs Internal Audit in Hyderabad?</h2>
            <div class="content-text">
                
                <p><strong>IT Companies (HITEC City):</strong> Companies crossing Rs 200 Cr turnover trigger Section 138. Focus: SaaS revenue recognition, ESOP accounting, contract compliance, IT controls.</p>
<p><strong>Pharma and Manufacturing (Genome Valley):</strong> Bank loans above Rs 100 Cr need internal audit. Focus: inventory controls, GMP overlap, purchase cycle, capex monitoring.</p>
<p><strong>Listed Companies (BSE/NSE):</strong> All listed companies regardless of thresholds. SEBI LODR + Companies Act. Financial controls, related party, insider trading.</p>
<p><strong>Growing Private Companies:</strong> Approaching Rs 200 Cr turnover or Rs 100 Cr loans. Funded HITEC City startups that scaled rapidly now trigger Section 138. Patron monitors thresholds proactively.</p>
<p><strong>Voluntary Audit (MSMEs/Startups):</strong> Demonstrates governance to investors, identifies revenue leakage, strengthens lending, prepares for mandatory compliance.</p>

            </div>
            </div>
        </div>
    </div>
</section>

<!-- SECTION 5: OUR SERVICES -->
<section class="content-section" id="services-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Internal Audit Services Included</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Service</th><th>What We Do</th></tr></thead>
                    <tbody>
                        <tr><td>Section 138 Applicability Assessment</td><td>CA evaluates ILCD thresholds from preceding FY. Compliance window: 6 months from trigger date</td></tr>
<tr><td>Internal Auditor Appointment</td><td>CA appointed by Board resolution. Audit Committee consulted on scope, periodicity, methodology</td></tr>
<tr><td>Risk Assessment and Audit Planning</td><td>Risk-based plan: financial, operational, compliance, IT risks. High-risk areas prioritised quarterly</td></tr>
<tr><td>Quarterly Audit Execution</td><td>Transaction testing, process walkthroughs, compliance verification. IT: revenue recognition. Pharma: inventory</td></tr>
<tr><td>IFC Evaluation</td><td>Internal Financial Controls assessed for design adequacy and operating effectiveness. Board Report language</td></tr>
<tr><td>Management Letter</td><td>Observations, risk ratings, root cause, recommendations. Presented to Audit Committee/Board</td></tr>
<tr><td>Compliance Audit Integration</td><td>GST ITC matching, TDS compliance, labour law, ROC filing verified within internal audit cycle</td></tr>
<tr><td>Follow-Up and Tracking</td><td>Previous findings tracked. Management actions verified. Recurring issues escalated to Board</td></tr>

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
            <h2 class="section-title">Internal Audit Process in Hyderabad</h2>
            <p class="section-subtitle" style="text-align:left;max-width:100%;">From Section 138 assessment to risk-based quarterly audit, IFC evaluation, and Board reporting - here's how Patron delivers internal audit for your Hyderabad company.</p>
        </header>
        <div class="steps-container">
            <div class="step-card"><div class="step-content"><span class="step-badge">Step 1</span><h3 class="step-title">Applicability Assessment and Board Appointment</h3><p class="step-description">Section 138 assessed using preceding FY ILCD data. Board resolution appoints Patron's CA. Audit Committee consulted. For voluntary audits, engagement letter defines scope.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Section 138 checked</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Board appointed</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="25" y="10" width="70" height="60" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><text x="60" y="28" font-size="6" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial, sans-serif">ILCD</text><text x="60" y="42" font-size="5" fill="#14365F" font-weight="600" text-anchor="middle" font-family="Arial, sans-serif">THRESHOLDS</text><text x="60" y="56" font-size="5" fill="#E8712C" font-weight="600" text-anchor="middle" font-family="Arial, sans-serif">ASSESSED</text></svg></div><span class="illustration-label">Assessment Done</span><span class="step-number-large">01</span></div></div></div>
<div class="step-card"><div class="step-content"><span class="step-badge">Step 2</span><h3 class="step-title">Risk Assessment and Audit Plan</h3><p class="step-description">Risk-based plan: industry (IT/pharma/manufacturing), revenue model, expense patterns, regulatory environment, past issues. High-risk areas identified. Annual plan with quarterly calendar.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Risk-based plan</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Quarterly calendar</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="15" y="5" width="90" height="70" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><text x="60" y="22" font-size="6" fill="#E8712C" font-weight="700" text-anchor="middle" font-family="Arial, sans-serif">RISK MAP</text><line x1="30" y1="32" x2="90" y2="32" stroke="#F5A623" stroke-width="2" stroke-linecap="round"/><text x="35" y="48" font-size="5" fill="#14365F" font-weight="600" font-family="Arial, sans-serif">HIGH</text><rect x="60" y="42" width="30" height="8" rx="2" fill="#E8712C" opacity="0.7"/><text x="35" y="62" font-size="5" fill="#14365F" font-weight="600" font-family="Arial, sans-serif">MED</text><rect x="60" y="56" width="20" height="8" rx="2" fill="#F5A623" opacity="0.7"/></svg></div><span class="illustration-label">Plan Ready</span><span class="step-number-large">02</span></div></div></div>
<div class="step-card"><div class="step-content"><span class="step-badge">Step 3</span><h3 class="step-title">Fieldwork - Transaction Testing</h3><p class="step-description">Sample transactions tested: revenue, purchases, expenses, payroll, compliance. Process walkthroughs documented. Controls tested. IT: revenue cutoff, unbilled revenue. Pharma: inventory, batch tracking.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Transaction testing</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Controls verified</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="20" y="10" width="80" height="55" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><text x="60" y="28" font-size="6" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial, sans-serif">TESTING</text><text x="60" y="42" font-size="6" fill="#14365F" font-weight="600" text-anchor="middle" font-family="Arial, sans-serif">WALKTHROUGHS</text><circle cx="85" cy="60" r="12" fill="#E8F5E9" stroke="#25D366" stroke-width="1.5"/><path d="M80 60l3 3 7-7" stroke="#25D366" stroke-width="2" stroke-linecap="round"/></svg></div><span class="illustration-label">Fieldwork Done</span><span class="step-number-large">03</span></div></div></div>
<div class="step-card"><div class="step-content"><span class="step-badge">Step 4</span><h3 class="step-title">Compliance Verification</h3><p class="step-description">GST return accuracy, TDS deduction/deposit, ROC filings, labour compliance (EPF/ESIC/PT), industry regulations verified. Compliance gaps documented with risk ratings.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Compliance verified</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Gaps identified</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="20" y="10" width="80" height="55" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><text x="60" y="26" font-size="5" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial, sans-serif">GST ✓</text><text x="60" y="38" font-size="5" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial, sans-serif">TDS ✓</text><text x="60" y="50" font-size="5" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial, sans-serif">ROC ✓</text><text x="60" y="62" font-size="5" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial, sans-serif">LABOUR ✓</text></svg></div><span class="illustration-label">Compliance Clear</span><span class="step-number-large">04</span></div></div></div>
<div class="step-card"><div class="step-content"><span class="step-badge">Step 5</span><h3 class="step-title">Management Letter and Board Reporting</h3><p class="step-description">Report with executive summary, observations (risk-rated), root cause, recommendations, management action plans. IFC findings for Board Report. Presented to Audit Committee/Board.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Report delivered</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> IFC documented</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="15" y="10" width="90" height="55" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><rect x="15" y="10" width="90" height="16" rx="6" fill="#14365F"/><text x="60" y="22" font-size="6" fill="#fff" font-weight="700" text-anchor="middle" font-family="Arial, sans-serif">AUDIT REPORT</text><text x="60" y="42" font-size="6" fill="#E8712C" font-weight="700" text-anchor="middle" font-family="Arial, sans-serif">IFC</text><text x="60" y="55" font-size="5" fill="#14365F" font-weight="600" text-anchor="middle" font-family="Arial, sans-serif">BOARD READY</text></svg></div><span class="illustration-label">Board Reported</span><span class="step-number-large">05</span></div></div></div>
<div class="step-card"><div class="step-content"><span class="step-badge">Step 6</span><h3 class="step-title">Follow-Up and Continuous Improvement</h3><p class="step-description">Previous findings tracked. Management actions verified. Recurring issues escalated. Process improvements recommended. Annual plan updated for emerging risks.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Findings tracked</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Improvements driven</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="20" y="10" width="80" height="55" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><text x="60" y="28" font-size="6" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial, sans-serif">FOLLOW-UP</text><text x="60" y="42" font-size="5" fill="#25D366" font-weight="700" text-anchor="middle" font-family="Arial, sans-serif">TRACKED</text><text x="60" y="56" font-size="5" fill="#14365F" font-weight="600" text-anchor="middle" font-family="Arial, sans-serif">IMPROVED</text></svg></div><span class="illustration-label">Cycle Complete</span><span class="step-number-large">06</span></div></div></div>


        </div>
    </div>
</section>

<!-- SECTION 8: DOCUMENTS REQUIRED -->
<section class="content-section" id="documents-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Information Required from Company</h2>
            <div class="content-text">
                
                <ul>
<li><strong>Financial Records:</strong> Trial balance, P&L, balance sheet, bank statements, cash flow, accounting software access</li>
<li><strong>Transaction Samples:</strong> Sales invoices, purchase orders, expense vouchers, payroll registers, journal entries</li>
<li><strong>Compliance Records:</strong> GST returns, TDS challans, EPF/ESIC, ROC filings, contracts/agreements</li>
<li><strong>Process Documentation:</strong> SOP manuals, approval matrices, delegation of authority, IT access logs</li>
<li><strong>Previous Audit Reports:</strong> Statutory audit, prior internal audit findings, management letters</li>
</ul>
<div class="highlight-box" style="margin-top:16px;"><p><strong>Hyderabad-Specific Tip:</strong> HITEC City IT companies using Zoho Books, QuickBooks, or SAP should provide read-only ERP access to the internal audit team. This enables real-time transaction testing and reduces audit disruption. Patron's CA team is proficient in all major accounting platforms.</p></div>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 9: CHALLENGES -->
<section class="content-section" id="challenges-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Common Challenges in Hyderabad</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Challenge</th><th>Impact</th><th>How Patron Accounting Solves It</th></tr></thead>
                    <tbody>
                        <tr><td>Not Aware of Section 138</td><td>Growing companies cross ILCD thresholds unknowingly</td><td>Patron monitors thresholds using financial data and triggers compliance proactively</td></tr>
<tr><td>Checkbox Audit (No Value)</td><td>Generic reports with no actionable findings</td><td>Patron's risk-based approach identifies real issues: leakage, fraud, gaps</td></tr>
<tr><td>Statutory Auditor as Internal Auditor</td><td>Section 144(b) violation</td><td>Patron ensures clean separation between statutory and internal audit</td></tr>
<tr><td>IFC Not Evaluated</td><td>Section 134(5) Board Report requirement missed</td><td>Patron evaluates IFC and provides Board Report disclosure language</td></tr>
<tr><td>GST/TDS Leakages Missed</td><td>Financial-only audits miss tax compliance gaps</td><td>Patron integrates GST ITC matching and TDS compliance into every cycle</td></tr>

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
            <h2 class="section-title">Internal Audit Fees in Hyderabad</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Fee Component</th><th>Amount</th></tr></thead>
                    <tbody>
                        <tr><td>Small Private Company</td><td>Quarterly financial + compliance | Patron Rs 15,000-25,000/quarter</td></tr>
<tr><td>Mid-Size Company (Rs 50-200 Cr)</td><td>Quarterly full-scope | Patron Rs 30,000-60,000/quarter</td></tr>
<tr><td>Large Company (> Rs 200 Cr)</td><td>Full-scope quarterly with IFC | Patron Rs 60,000-1,50,000/quarter</td></tr>
<tr><td>Listed Company</td><td>SEBI LODR + Companies Act + IFC | Patron Rs 1,00,000-3,00,000/quarter</td></tr>
<tr><td>Voluntary (MSME/Startup)</td><td>Annual/semi-annual risk assessment | Patron Rs 25,000-50,000/engagement</td></tr>
<tr><td>NGO/Trust</td><td>Fund utilisation + compliance | Patron Rs 15,000-30,000/engagement</td></tr>

                    </tbody>
                </table>
                </div>
                <p style="margin-top:16px;font-size:13px;color:var(--text-muted);font-style:italic;">All fees and charges listed are indicative only and do not constitute a binding offer. Final amounts may vary depending on the volume of work and the complexity involved.</p>
                <p style="margin-top:16px;">Professional service charges for drafting, filing, and representation are separate from the statutory fees. The exact fee depends on the complexity of the case, disputed amount, and number of hearings required. Contact us for a detailed quote.</p>
                <p style="margin-top:16px;"><strong>Get a free Internal Audit consultation - <a href="tel:+919459456700">Call +91 945 945 6700</a> or <a href="https://wa.me/919459456700?text=Hi%2C%20I%20need%20internal%20audit%20services%20in%20Hyderabad.%20Please%20share%20details." target="_blank">WhatsApp us</a>. No-obligation assessment.</strong></p>
            </div>
        </div>
    </div>
</section>

<!-- SECTION 11: TIMELINE -->
<section class="content-section" id="timeline-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Internal Audit Calendar</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Stage</th><th>Estimated Timeline</th></tr></thead>
                    <tbody>
                        <tr><td>Q1 (April-June)</td><td>Audit report by July-August</td></tr>
<tr><td>Q2 (July-September)</td><td>Report by October-November</td></tr>
<tr><td>Q3 (October-December)</td><td>Report by January-February</td></tr>
<tr><td>Q4 (January-March)</td><td>Report by April-May</td></tr>
<tr><td>Annual Consolidation</td><td>Full year report before AGM</td></tr>
<tr><td>IFC Assessment</td><td>Year-end assessment with Board Report</td></tr>

                    </tbody>
                </table>
                </div>
                <div class="highlight-box" style="margin-top:16px;">
                    
                    <p><strong>Hyderabad Processing Note (Group B):</strong> Internal audit is conducted through a combination of on-site visits to Hyderabad offices and remote audit procedures. Patron's CA team handles all fieldwork, reporting, and Board presentations.</p>

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
            <h2 class="section-title">Why Choose Patron for Internal Audit in Hyderabad?</h2>
        </div>
        <div class="features-grid">
<article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg></div><h3>CA-Led Integrated Assurance</h3><p>Same firm managing accounting, GST, TDS, and ITR. Cross-functional issues identified that siloed auditors miss.</p></article>
<article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M14 2H6a2 2 0 00-2 2v16a2 2 0 002 2h12a2 2 0 002-2V8z"/><path d="M14 2v6h6"/></svg></div><h3>Industry-Specific Expertise</h3><p>IT: SaaS revenue, ESOP. Pharma: inventory, GMP. Trading: purchase-sales, GST. One firm, industry-aware approach.</p></article>
<article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="2" y="3" width="20" height="14" rx="2"/><path d="M8 21h8M12 17v4"/></svg></div><h3>4-Office Authority</h3><p>Offices in Pune, Mumbai, Delhi, Gurugram. Multi-location companies get coordinated internal audit across all sites.</p></article>
<article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><path d="M12 6v6l4 2"/></svg></div><h3>Risk-Based, Not Checkbox</h3><p>Actual business risks identified. Actionable recommendations with root cause, risk ratings, and implementation timelines.</p></article>
</div>
    </div>
</section>

<!-- SECTION 12A: SOCIAL PROOF -->
<section class="content-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Trusted by Hyderabad Companies</h2>
            <div class="content-text">
                
                <p><strong>10,000+ Businesses Served | 4.9 Google Rating | 50,000+ Documents Filed | 15+ Years</strong></p>
<blockquote style="border-left:4px solid var(--orange);padding:16px 20px;background:var(--orange-lighter);border-radius:0 var(--radius-md) var(--radius-md) 0;margin:20px 0;"><p style="font-style:italic;color:var(--text-primary);margin-bottom:8px;">"Patron's internal audit found Rs 12 lakh in GST ITC we had missed. Their quarterly reports are detailed with actionable findings - our Board now looks forward to the internal audit presentation."</p><p style="font-weight:700;color:var(--blue);margin:0;">- CFO, IT Company, HITEC City</p></blockquote>
<p>With offices in Pune, Mumbai, Delhi, and Gurugram, Patron serves Hyderabad through a digital-first CA team.</p>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 13: SELF-FILING vs PROFESSIONAL COMPARISON -->
<section class="content-section" id="comparison-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Section 138 Applicability - Quick Reference</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Company Type</th><th>Threshold</th><th>Mandatory?</th></tr></thead>
                    <tbody>
                        <tr><td>All Listed Companies</td><td>No threshold - always applicable</td><td>YES</td></tr>
<tr><td>Unlisted Public - Turnover</td><td>≥ Rs 200 crore (preceding FY)</td><td>YES</td></tr>
<tr><td>Unlisted Public - Capital</td><td>≥ Rs 50 crore paid-up</td><td>YES</td></tr>
<tr><td>Unlisted Public - Loans</td><td>≥ Rs 100 crore from banks/PFI</td><td>YES</td></tr>
<tr><td>Unlisted Public - Deposits</td><td>≥ Rs 25 crore outstanding</td><td>YES</td></tr>
<tr><td>Private - Turnover</td><td>≥ Rs 200 crore (preceding FY)</td><td>YES</td></tr>
<tr><td>Private - Loans</td><td>≥ Rs 100 crore from banks/PFI</td><td>YES</td></tr>
<tr><td>Below All Thresholds</td><td>Any company</td><td>VOLUNTARY (recommended)</td></tr>
<tr><td colspan="3"><em>ILCD Memory Aid: Income Rs 200 Cr → Loan Rs 100 Cr (half) → Capital Rs 50 Cr (half) → Deposits Rs 25 Cr (half)</em></td></tr>

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
            <h2 class="section-title">Related Services</h2>
            <div class="content-text">
                
                <ul>
<li><a href="/internal-audit">Internal Audit in India</a> - National internal audit services</li>

<li><a href="/gst-registration/hyderabad">GST Registration in Hyderabad</a> - Tax compliance</li>
<li><a href="/private-limited-company-registration/hyderabad">Pvt Ltd Registration in Hyderabad</a> - Company formation</li>
<li><a href="/income-tax-return/hyderabad">Income Tax Return in Hyderabad</a> - ITR filing</li>

</ul>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 15A: LEGAL FRAMEWORK -->
<section class="content-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Legal and Compliance Framework</h2>
            <div class="content-text">
                
                <ul>
<li>Companies Act, 2013 - Section 138 (Internal Audit)</li>
<li>Rule 13, Companies (Accounts) Rules, 2014 (Thresholds)</li>
<li>Section 134(5) - Internal Financial Controls (IFC)</li>
<li>Section 144(b) - Statutory auditor cannot be internal auditor</li>
<li>Section 450 - Penalty Rs 10,000 + Rs 1,000/day</li>
<li>Section 177 - Audit Committee</li>
<li>IIA Standards - Recommended framework</li>
</ul>
<p><strong>Scope Areas:</strong> Financial controls, operational efficiency, compliance (GST/TDS/ROC/labour), risk management, fraud prevention, IT controls, corporate governance, IFC.</p>
<p><strong>Authority:</strong> RoC Hyderabad | CIT Hyderabad (tax interface) | SEBI (listed companies)</p>

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
                    <h2 class="faq-expanded__title">FAQs - Internal Audit in Hyderabad</h2>
                    <p class="faq-expanded__lead">Common questions about Section 138 applicability, ILCD thresholds, IFC, auditor eligibility, and penalty.</p>
                    @include('partials.bigin-form', [
                        'variant'  => 'compact',
                        'service'  => 'Internal Audit',
                        'city'     => 'Hyderabad',
                    ])
                </aside>
                <div class="faq-expanded__list">
                    <div class="faq-expanded__item" id="faq-1">
                        <h3 class="faq-expanded__q">Which companies need internal audit?</h3>
                        <div class="faq-expanded__a"><p>All listed companies. Unlisted public with turnover ≥ Rs 200 Cr, capital ≥ Rs 50 Cr, loans ≥ Rs 100 Cr, or deposits ≥ Rs 25 Cr. Private with turnover ≥ Rs 200 Cr or loans ≥ Rs 100 Cr. Based on preceding FY.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-2">
                        <h3 class="faq-expanded__q">What is Section 138?</h3>
                        <div class="faq-expanded__a"><p>Companies Act 2013 mandate for prescribed companies to appoint internal auditor. Rule 13 defines ILCD thresholds. Audit Committee/Board defines scope. Non-compliance attracts Section 450 penalties.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-3">
                        <h3 class="faq-expanded__q">Who can be internal auditor?</h3>
                        <div class="faq-expanded__a"><p>CA, CMA, or Board-approved professional. May or may not be employee. Statutory auditor CANNOT perform internal audit (Section 144(b)). Patron provides external CA-led internal audit.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-4">
                        <h3 class="faq-expanded__q">What is the penalty?</h3>
                        <div class="faq-expanded__a"><p>Rs 10,000 for company and each defaulting officer under Section 450. If non-compliance continues, Rs 1,000 per day additional. Offence is compoundable. Patron ensures timely compliance.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-5">
                        <h3 class="faq-expanded__q">Is it mandatory for private companies?</h3>
                        <div class="faq-expanded__a"><p>Only if turnover ≥ Rs 200 Cr or loans ≥ Rs 100 Cr from preceding FY. Below thresholds, voluntary but strongly recommended for growing companies and funded startups.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-6">
                        <h3 class="faq-expanded__q">How often should internal audit be done?</h3>
                        <div class="faq-expanded__a"><p>Not prescribed by law. Quarterly recommended as best practice. Audit Committee/Board decides periodicity. Some opt for semi-annual or annual. Patron recommends quarterly above Rs 100 Cr.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-7">
                        <h3 class="faq-expanded__q">What does internal audit cover?</h3>
                        <div class="faq-expanded__a"><p>Financial controls, operational processes, regulatory compliance (GST/TDS/ROC/labour), risk management, fraud prevention, IT controls, IFC evaluation. Scope customised per business.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-8">
                        <h3 class="faq-expanded__q">What is IFC?</h3>
                        <div class="faq-expanded__a"><p>Internal Financial Controls under Section 134(5). Companies must establish adequate controls and report in Board Report. Internal audit evaluates design and effectiveness. Patron provides Board Report language.</p></div>
                    </div>
                </div>
            </div>


            <!-- Quick Answers -->
            <div class="highlight-box" style="margin-top:32px;">
                <p><strong>Quick Answers</strong></p>
                <p><strong>Internal audit kab mandatory hai?</strong> Listed companies hamesha. Private Rs 200 Cr turnover ya Rs 100 Cr loan cross kare toh mandatory. Preceding FY data dekha jaata hai.</p>
<p><strong>Statutory auditor internal audit kar sakta hai?</strong> Nahi. Section 144(b) mana karta hai. Alag auditor chahiye.</p>
<p><strong>Penalty kitni hai?</strong> Rs 10,000 + Rs 1,000/day continuing default. Compoundable.</p>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 18: URGENCY CTA -->
<section class="content-section" style="background: var(--orange-lighter) !important; border-left: 4px solid var(--orange);">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Don't Wait - Start Internal Audit Today</h2>
            <div class="content-text">
                
                <p>If your Hyderabad company crossed ILCD thresholds in the preceding FY, Section 138 compliance is already due. You have 6 months to appoint an internal auditor. Non-compliance attracts Rs 10,000 + Rs 1,000/day. HITEC City IT companies past Rs 200 Cr, pharma with Rs 100 Cr+ loans, and all listed companies must comply. Even below thresholds, voluntary audit demonstrates governance. Start today.</p>

            </div>
        </div>
    </div>
</section>

<!-- CONCLUSION + CTA BLOCK (Dark) -->
<section class="content-section" style="background: var(--blue) !important;">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title" style="color:#FFFFFF !important;">Get Started with Internal Audit in Hyderabad</h2>
            <div class="content-text" style="text-align:left;">
                
                <p style="color:rgba(255,255,255,0.9);font-size:16px;line-height:1.7;">Internal audit in Hyderabad addresses mandatory compliance (Section 138) and voluntary governance. With IT companies scaling, pharma expanding, and listed companies growing, quality internal audit demand is at an all-time high.</p>
<p style="color:rgba(255,255,255,0.9);font-size:16px;line-height:1.7;">Patron Accounting serves Hyderabad through a digital-first CA team backed by offices in Pune, Mumbai, Delhi, and Gurugram. Your CA handles applicability, risk-based planning, quarterly fieldwork, IFC evaluation, and compliance integration.</p>
<p style="color:rgba(255,255,255,0.9);font-size:16px;line-height:1.7;">Patron Accounting LLP has served 10,000+ businesses, filed 50,000+ documents, and maintained a 4.9 Google rating across 15+ years of chartered accountancy practice.</p>

            </div>
            <div style="display:flex;gap:14px;flex-wrap:wrap;margin-top:24px;">
                <a href="tel:+919459456700" style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:var(--orange);color:#fff;border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#128222; Call +91 945 945 6700</a>
                <a href="https://wa.me/919459456700?text=Hi%2C%20I%20need%20internal%20audit%20services%20in%20Hyderabad.%20Please%20share%20details." target="_blank" style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:#25D366;color:#fff;border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#128172; WhatsApp Us</a>
                <a href="mailto:sales@patronaccounting.com?subject=Enquiry%20for%20Internal%20Audit&body=Hello%20Patron%20Team%2C%0AI%20need%20internal%20audit%20services%20in%20Hyderabad.%0AThank%20you." style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:transparent;color:#fff;border:2px solid rgba(255,255,255,0.3);border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#9993;&#65039; Email Us</a>
            </div>
            <p style="color:rgba(255,255,255,0.7);font-size:13px;margin-top:16px;">Book a Free Consultation - No Obligation.</p>
        </div>
    </div>
</section>

<!-- GSTAT STATE BENCH CITY PAGES (32 Pages) -->
<section class="content-section" style="padding:48px 32px;background:var(--gray-50);">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title" style="text-align:center;margin-bottom:12px;">Internal Audit Across India</h2>
            <p style="text-align:center;color:var(--text-muted);font-size:15px;margin-bottom:40px;">CA-led internal audit services in 8 cities. Select your city.</p>
           
            <div class="pa-city-block" style="margin-bottom:40px;"><div class="pa-city-grid"><a href="/internal-audit/pune" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Pune</div><div class="pa-card-sub">Maharashtra</div></div></a>
<a href="/internal-audit/mumbai" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Mumbai</div><div class="pa-card-sub">Maharashtra</div></div></a>
<a href="/internal-audit/delhi" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Delhi</div><div class="pa-card-sub">Delhi NCR</div></div></a>
<a href="/internal-audit/gurugram" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Gurugram</div><div class="pa-card-sub">Haryana</div></div></a>
<a href="/internal-audit/bangalore" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Bangalore</div><div class="pa-card-sub">Karnataka</div></div></a>
<div class="pa-city-card" style="opacity:0.6;pointer-events:none;border:2px solid var(--orange);position:relative;"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Hyderabad</div><div class="pa-card-sub">Telangana</div></div><span style="position:absolute;top:6px;right:8px;font-size:10px;color:var(--orange);font-weight:700;text-transform:uppercase;letter-spacing:0.5px;">You're here</span></div>
<a href="/internal-audit/chennai" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Chennai</div><div class="pa-card-sub">Tamil Nadu</div></div></a>
<a href="/internal-audit/kolkata" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Kolkata</div><div class="pa-card-sub">West Bengal</div></div></a>
</div></div>
<div class="pa-city-block"><div class="pa-block-title">Related Services in Hyderabad</div><div class="pa-block-sub">End-to-end compliance and assurance</div><div class="pa-cross-grid"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Accounting Services</div><div class="pa-card-sub">Hyderabad</div></div>
<a href="/gst-registration/hyderabad" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">GST Registration</div><div class="pa-card-sub">Hyderabad</div></div></a>
<a href="/private-limited-company-registration/hyderabad" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Pvt Ltd Registration</div><div class="pa-card-sub">Hyderabad</div></div></a>
<a href="/income-tax-return/hyderabad" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Income Tax Return</div><div class="pa-card-sub">Hyderabad</div></div></a>
<a href="/tan-registration/hyderabad" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">TAN Registration</div><div class="pa-card-sub">Hyderabad</div></div></a>
<a href="/payroll-services/hyderabad" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Payroll Services</div><div class="pa-card-sub">Hyderabad</div></div></a>
</div></div>
        </div>
    </div>
</section>

<!-- CONTENT FRESHNESS FOOTER -->
<section class="content-section" style="padding:32px;">
    <div class="content-container">
        <div class="text-content" style="font-size:13px;color:var(--text-muted);">
            <p><strong>Content Created:</strong> 08 April 2026 &nbsp;|&nbsp; <strong>Last Updated:</strong> <span id="lastUpdatedFooter">08 April 2026</span> &nbsp;|&nbsp; <strong>Next Review:</strong> 08 October 2026 &nbsp;|&nbsp; <strong>Reviewed By:</strong> CA &amp; CS Team, Patron Accounting LLP</p>
            <p>This content covers internal audit in Hyderabad including Section 138, ILCD thresholds, IFC, risk-based audit, quarterly execution, and compliance integration. Reviewed semi-annually. Freshness Tier 2.</p>
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
