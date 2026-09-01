
@extends('layouts.service-app')

<!-- External Dependencies (loaded by master layout in production) -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Barlow:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,400&family=DM+Sans:opsz,wght@9..40,400;9..40,500;9..40,600;9..40,700&display=swap" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

@section('meta')
    <title>Secretarial Audit in Pune - MR-3, Section 204 & Report</title>
    <meta name="description" content="CS-assisted secretarial audit in Pune. Section 204, Form MR-3, SEBI LODR 24A, peer-reviewed PCS, listed companies, material subsidiaries. Serving Kharadi, Hinjewadi companies. Call +91 945 945 6700.">
    <link rel="canonical" href="/secretarial-audit/pune">
    <meta name="robots" content="index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1">
    <meta property="og:title" content="Secretarial Audit in Pune - MR-3, Section 204 & Report">
    <meta property="og:description" content="CS-assisted secretarial audit in Pune. Section 204, Form MR-3, SEBI LODR 24A, peer-reviewed PCS, listed companies, material subsidiaries. Serving Kharadi, Hinjewadi companies. Call +91 945 945 6700.">
    <meta property="og:url" content="/secretarial-audit/pune">
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="Patron Accounting">
    <meta property="og:image" content="https://www.patronaccounting.com/images/og-default-square.png">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="1200">
    <meta property="og:image:type" content="image/png">
    <meta property="og:image:secure_url" content="https://www.patronaccounting.com/images/og-default-square.png">
    <meta property="og:image:alt" content="Patron Accounting - partner you can rely on">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Secretarial Audit in Pune - MR-3, Section 204 & Report">
    <meta name="twitter:description" content="CS-assisted secretarial audit in Pune. Section 204, Form MR-3, SEBI LODR 24A, peer-reviewed PCS, listed companies, material subsidiaries. Serving Kharadi, Hinjewadi companies. Call +91 945 945 6700.">
    <meta name="twitter:image" content="https://www.patronaccounting.com/images/og-default-square.png">
@endsection

@section('schema')
    <script type="application/ld+json">{
  "@context": "https://schema.org",
  "@graph": [
    {
      "@type": "Service",
      "name": "Secretarial Audit in Pune - MR-3, Section 204 & Report",
      "description": "CS-assisted secretarial audit in Pune. Section 204, Form MR-3, SEBI LODR 24A, peer-reviewed PCS, listed companies, material subsidiaries. Serving Kharadi, Hinjewadi companies. Call +91 945 945 6700.",
      "url": "https://www.patronaccounting.com/secretarial-audit/pune",
      "serviceType": "Secretarial Audit in Pune - MR-3, Section 204 & Report",
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
        "url": "https://www.patronaccounting.com/secretarial-audit/pune",
        "priceSpecification": {
          "@type": "PriceSpecification",
          "minPrice": "1",
          "maxPrice": "250",
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
          "name": "Secretarial Audit - MR-3 Report, Process & Companies Act",
          "item": "https://www.patronaccounting.com/secretarial-audit"
        },
        {
          "@type": "ListItem",
          "position": 3,
          "name": "Secretarial Audit in Pune - MR-3, Section 204 & Report",
          "item": "https://www.patronaccounting.com/secretarial-audit/pune"
        }
      ]
    },
    {
      "@type": "FAQPage",
      "mainEntity": [
        {
          "@type": "Question",
          "name": "What is secretarial audit?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "A compliance audit conducted by a Practicing Company Secretary under Section 204 examining whether a company has complied with all applicable laws, maintained proper records, followed board processes and adhered to governance standards. Report in Form MR-3 annexed with Board's Report. Covers Companies Act, SEBI (listed), FEMA/RBI, Secretarial Standards, industry-specific and general laws. Focuses on non-financial compliance unlike statutory audit."
          }
        },
        {
          "@type": "Question",
          "name": "Which companies need secretarial audit?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Mandatory for: all listed companies (BSE/NSE), public companies with paid-up capital >= Rs 50 crore, public companies with turnover >= Rs 250 crore, companies with borrowings >= Rs 100 crore from banks/PFIs at any point during FY, and material unlisted subsidiaries of listed entities (income/net worth > 10% of consolidated). Growing Pune companies can voluntarily opt for governance enhancement."
          }
        },
        {
          "@type": "Question",
          "name": "Who can conduct a secretarial audit?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Only a Practicing Company Secretary holding Certificate of Practice from ICSI. Internal CS, CAs and cost accountants cannot conduct it. For listed entities (post April 2025), PCS must be peer-reviewed, holding valid Peer Review Certificate from ICSI. Must satisfy independence criteria. Patron coordinates with peer-reviewed PCS for all Pune secretarial audits."
          }
        },
        {
          "@type": "Question",
          "name": "What is the penalty for non-compliance?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Under Section 204(4), fine of Rs 1 lakh to Rs 5 lakh for company and every officer in default. For listed entities, additional SEBI penalties for non-submission of Secretarial Compliance Report under Regulation 24A. Post April 2025, non-compliance with peer review, rotation and AGM requirements also attracts regulatory action."
          }
        },
        {
          "@type": "Question",
          "name": "What is the SEBI Secretarial Compliance Report?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Separate report under SEBI LODR Regulation 24A for listed entities and material subsidiaries. Covers compliance with all SEBI Regulations and circulars during the FY. Filed with BSE/NSE within 60 days of FY-end (by 30 May) in XBRL format. Must be signed by secretarial auditor or peer-reviewed PCS. In addition to Form MR-3."
          }
        },
        {
          "@type": "Question",
          "name": "Is secretarial audit different from statutory audit?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Yes, fundamentally. Statutory audit (S.139, by CA) examines financial statement accuracy. Secretarial audit (S.204, by PCS) examines compliance with laws, governance processes and regulatory filings. Both mandatory for prescribed companies. Both part of Annual Report. Patron's integrated CA + CS team provides both from single Pune service point."
          }
        },
        {
          "@type": "Question",
          "name": "What changed after April 2025 for listed companies?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "SEBI LODR Third Amendment 2024 introduced: only peer-reviewed PCS can be appointed, 5-year rotation for individual / 2 consecutive terms of 5 years for firms, AGM approval required for appointment/reappointment/removal, non-audit service restrictions with Board approval, vacancy filling within 3 months, and resignation disclosure requirements."
          }
        },
        {
          "@type": "Question",
          "name": "What is Form MR-3?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Prescribed format for Secretarial Audit Report under Rule 9. Addressed to members. Includes compliance verification for each applicable law, specific qualifications (non-compliance), observations (areas for improvement), and recommendations. Signed by PCS, submitted to Board, annexed with Board's Report under S.134(3). Directors must explain every qualification."
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
                        Secretarial Audit Service in Pune: Expert CS-Assisted Compliance & Reporting
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
                            <p class="mb-0 text-dark benefit-paragraph"><span>Section 204:</span> Mandatory for listed companies, prescribed public companies (paid-up >= Rs 50 Cr / turnover >= Rs 250 Cr), borrowings >= Rs 100 Cr</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Form MR-3:</span> Secretarial Audit Report by Practicing Company Secretary (PCS); annexed with Board's Report</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>SEBI LODR 2025:</span> Peer-reviewed PCS mandatory; 5-year individual / 2x5-year firm rotation; AGM approval for appointment</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Penalty:</span> Rs 1 lakh to Rs 5 lakh for company and every officer in default + SEBI penalties for listed entities</p>
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
                        <a href="https://wa.me/919459456700?text=Hi%2C%20I%20need%20secretarial%20audit%20services%20in%20Pune.%20Please%20share%20details." target="_blank" class="btn-sample text-decoration-none">
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
                                            'service'  => 'Secretarial Audit in Pune',
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
            <a href="#overview-section" class="toc-btn active">Overview</a><a href="#what-section" class="toc-btn">What Is It</a><a href="#who-section" class="toc-btn">Who Needs It</a><a href="#services-section" class="toc-btn">Services</a><a href="#procedure-section" class="toc-btn">Process</a><a href="#documents-section" class="toc-btn">Documents</a><a href="#challenges-section" class="toc-btn">Common Issues</a><a href="#fees-section" class="toc-btn">Fees</a><a href="#timeline-section" class="toc-btn">Calendar</a><a href="#benefits-section" class="toc-btn">Why Patron</a><a href="#comparison-section" class="toc-btn">Sec vs Stat Audit</a><a href="#faq-section" class="toc-btn">FAQs</a>
        </div>
        <button class="toc-arrow right" id="tocRight">&#10095;</button>
    </div>
</div>

<!-- SECTION 2: OVERVIEW / INTRO + TL;DR -->
<section class="content-section" id="overview-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Secretarial Audit Service in Pune - Overview</h2>
            <div class="content-text">
                <div class="highlight-box" style="margin-bottom:20px;">
                    <p><strong>&#128204; TL;DR - Secretarial Audit in Pune Services at a Glance</strong></p>
                    <p>Secretarial audit under Section 204 is a compliance audit by a Practicing Company Secretary (PCS) examining adherence to all applicable laws, rules, regulations and Secretarial Standards. Form MR-3 report annexed with Board's Report. Mandatory for: all listed companies, public companies (paid-up >= Rs 50 Cr / turnover >= Rs 250 Cr), companies with borrowings >= Rs 100 Cr. Post April 2025 SEBI amendments: peer-reviewed PCS mandatory, 5-year rotation, AGM approval. Penalty: Rs 1-5 lakh for company and officers + SEBI penalties for listed entities.</p>
                </div>
                <p>Pune has a significant secretarial audit market. BSE/NSE listed companies in Kharadi, Hinjewadi and Magarpatta. Material unlisted subsidiaries in Rajiv Gandhi Infotech Park and EON Free Zone. Large public companies in Pimpri-Chinchwad. ICSI Pune Chapter is the local CS professional body. Related: <a href="/statutory-audit">Statutory Audit</a> and <a href="/fdi-compliance/pune">FDI Compliance in Pune</a>.</p>
                <p>ROC Pune at Shivajinagar processes MCA filings. SEBI Compliance Report filed with BSE/NSE within 60 days. All filing on <a href="https://www.mca.gov.in" target="_blank" rel="noopener">mca.gov.in</a>. Related: <a href="/appointment-of-auditor/pune">Appointment of Auditor in Pune</a> and <a href="#">Company Registration in Pune</a>.</p>
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
                <h2 class="section-title">What Is Secretarial Audit?</h2>
                <div class="content-text what-is-definition">
                    
                    <p>A <strong>compliance audit of non-financial aspects</strong> by a PCS under Section 204 read with Rule 9. Scope: Companies Act 2013, SEBI Regulations (LODR, PIT, SAST for listed), FEMA/RBI, Secretarial Standards SS-1/SS-2, industry-specific laws and general laws. Examines statutory registers, minutes, share capital, managerial remuneration, RPT, CSR, SBO and all regulatory filings.</p><p>PCS issues Form MR-3 with qualifications and recommendations. Annexed with Board's Report under S.134(3). Board must explain every qualification. Provides independent compliance assurance protecting directors from personal liability. Related: <a href="#">Income Tax Returns in Pune</a> and <a href="/payroll-services/pune">Payroll Services in Pune</a>.</p>

                </div>
                <div class="highlight-box" style="margin-top:20px;">
                    <p><strong>Key Terms for Secretarial Audit in Pune:</strong></p>
                    <ul><li><strong>Section 204:</strong> Mandates secretarial audit for listed + prescribed companies. Form MR-3. PCS only. Penalty Rs 1-5 lakh.</li><li><strong>Form MR-3:</strong> Secretarial Audit Report format. Qualifications, observations, recommendations. Annexed with Board Report.</li><li><strong>SEBI LODR Reg 24A:</strong> Listed + material subsidiaries. Compliance Report to exchanges within 60 days in XBRL.</li><li><strong>Post April 2025:</strong> Peer-reviewed PCS mandatory; 5yr rotation; AGM approval; non-audit restrictions.</li><li><strong>SS-1 / SS-2:</strong> Secretarial Standards for Board Meetings and General Meetings. Mandatory under S.118(10).</li><li><strong>Material Subsidiary:</strong> Income/net worth > 10% of listed parent consolidated. Same audit requirements.</li></ul>

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
                            <!-- SEC tag -->
                            <rect x="30" y="120" width="42" height="18" rx="4" fill="#FFF3E0" stroke="#F5A623" stroke-width="1"/>
                            <text x="51" y="132.5" font-size="8" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial, sans-serif">SEC</text>
                            <!-- Label -->
                            <text x="100" y="170" font-size="10" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial, sans-serif">Secretarial Audit in Pune</text>
                        </svg>
                    </div>
                    <div class="illustration-badge">
                        <span>S.204 + Form MR-3</span>
                        <strong>PCS | SEBI 24A | Compliance</strong>
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
            <h2 class="section-title">Who Needs Secretarial Audit in Pune?</h2>
            <div class="content-text">
                
                <p><strong>BSE/NSE Listed Companies (Kharadi, Hinjewadi, Magarpatta):</strong> Mandatory under S.204 + SEBI LODR Reg 24A. Post April 2025: peer-reviewed PCS, AGM approval, 5-year rotation. Related: <a href="/legal-drafting/pune">Legal Drafting in Pune</a>.</p><p><strong>Material Unlisted Subsidiaries (Rajiv Gandhi, EON Kharadi):</strong> Income/net worth > 10% of listed parent consolidated. Same SEBI requirements. IT and manufacturing subsidiaries in Pune. Related: <a href="/private-limited-company-registration/pune">Pvt Ltd Registration in Pune</a>.</p><p><strong>Large Public + High-Borrowing Companies (Pimpri-Chinchwad, Hadapsar):</strong> Paid-up >= Rs 50 Cr or turnover >= Rs 250 Cr. Borrowings >= Rs 100 Cr at any point during FY. Related: <a href="/gst-registration/pune">GST Registration in Pune</a> and <a href="/accounting-services">Accounting Services</a>.</p><p><strong>Growing Companies (Voluntary Audit):</strong> Private companies approaching thresholds. Governance enhancement, investor readiness, pre-listing preparation. Proactive compliance demonstration.</p>

            </div>
            </div>
        </div>
    </div>
</section>

<!-- SECTION 5: OUR SERVICES -->
<section class="content-section" id="services-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Secretarial Audit Services in Pune</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Service</th><th>What We Do</th></tr></thead>
                    <tbody>
                        <tr><td>Full Secretarial Audit (Form MR-3)</td><td>Comprehensive review: Companies Act, SEBI (listed), FEMA/RBI, SS-1/SS-2, industry-specific and general laws. Report in MR-3 with qualifications, observations, recommendations. Annexed with Board Report.</td></tr><tr><td>SEBI Secretarial Compliance Report (Reg 24A)</td><td>Annual compliance report for listed entities covering all SEBI Regulations and circulars. XBRL format, filed with BSE/NSE within 60 days of FY-end. Signed by peer-reviewed PCS. Related: <a href="/fdi-compliance/pune">FDI Compliance in Pune</a>.</td></tr><tr><td>Remediation Advisory + Board Report Drafting</td><td>Identifying non-compliance gaps during audit. Corrective measures before MR-3 finalization. Drafting Board's response to MR-3 qualifications under S.204(3). Minimizing qualifications.</td></tr><tr><td>PCS Appointment Coordination (Listed)</td><td>Identifying peer-reviewed PCS, managing Audit Committee recommendation, Board approval, AGM resolution, rotation tracking per SEBI LODR 2024/2025 amendments.</td></tr><tr><td>Voluntary Audit + Annual Compliance</td><td>For companies not mandatorily covered. Governance enhancement, investor readiness, pre-listing. Annual compliance management including secretarial audit + MCA filings + governance advisory. Related: <a href="/statutory-audit">Statutory Audit</a>.</td></tr>

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
            <h2 class="section-title">Secretarial Audit Process in Pune</h2>
            <p class="section-subtitle" style="text-align:left;max-width:100%;">Our Pune CS+CA team manages the complete secretarial audit - from PCS appointment through MR-3 to SEBI compliance report filing.</p>
        </header>
        <div class="steps-container">
            <div class="step-card"><div class="step-content"><span class="step-badge">Step 1</span><h3 class="step-title">Determine Applicability and Appoint PCS</h3><p class="step-description">Verify category: listed, prescribed public (Rs 50Cr/Rs 250Cr), borrowings >= Rs 100 Cr, material subsidiary, or voluntary. For listed (post April 2025): PCS must be peer-reviewed (ICSI Peer Review Certificate), not beyond rotation limit (5yr individual / 2x5yr firm), appointed with Audit Committee recommendation and AGM approval. Non-listed: Board Resolution. PCS provides consent and eligibility certificate. Patron coordinates appointment for all Pune companies.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Applicability verified</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>PCS appointed with proper approvals</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="20" y="8" width="80" height="60" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><text x="60" y="22" font-size="5" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">Applicability</text><text x="60" y="38" font-size="6" fill="#E8712C" font-weight="600" text-anchor="middle" font-family="Arial">PCS</text><text x="60" y="52" font-size="5" fill="#14365F" font-weight="600" text-anchor="middle" font-family="Arial">Peer Review</text><text x="60" y="78" font-size="6" fill="#14365F" font-weight="600" text-anchor="middle" font-family="Arial">Appoint</text></svg></div><span class="illustration-label">Appointed</span><span class="step-number-large">01</span></div></div></div>
<div class="step-card"><div class="step-content"><span class="step-badge">Step 2</span><h3 class="step-title">Planning and Preliminary Review</h3><p class="step-description">PCS develops audit plan: scope of applicable laws (Companies Act, SEBI, FEMA, industry-specific), period, documents to examine, key compliance areas and timeline. Preliminary review assesses internal controls, compliance framework and high-risk areas. For Pune IT companies (Hinjewadi/Kharadi) with FDI: FEMA review is critical. For manufacturing (Pimpri-Chinchwad): labour law and environmental compliance. Patron prepares detailed plan tailored to each company.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Audit plan developed</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>High-risk areas identified</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="15" y="5" width="90" height="70" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><text x="60" y="20" font-size="5" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">Audit Plan</text><text x="60" y="36" font-size="5" fill="#E8712C" font-weight="600" text-anchor="middle" font-family="Arial">Laws Scope</text><text x="60" y="50" font-size="5" fill="#14365F" font-weight="600" text-anchor="middle" font-family="Arial">Risk Areas</text><text x="60" y="85" font-size="6" fill="#14365F" font-weight="600" text-anchor="middle" font-family="Arial">Plan + Review</text></svg></div><span class="illustration-label">Planned</span><span class="step-number-large">02</span></div></div></div>
<div class="step-card"><div class="step-content"><span class="step-badge">Step 3</span><h3 class="step-title">Document Review and Compliance Verification</h3><p class="step-description">PCS examines: MOA/AOA/shareholder agreements, statutory registers, minutes of Board/committee/general meetings, MCA filings (AOC-4, MGT-7, ADT-1, DIR-12, MGT-14), share capital transactions, managerial remuneration, RPT approvals, CSR spending, SS-1/SS-2 compliance, SEBI filings (listed), FEMA/RBI filings (if applicable), and industry-specific law compliance. Third-party verification includes MCA portal, stock exchange filings and RBI FIRMS portal.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>All documents examined</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Cross-verified with regulatory portals</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="15" y="5" width="90" height="70" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><text x="60" y="18" font-size="5" fill="#14365F" font-weight="600" text-anchor="middle" font-family="Arial">MOA Registers</text><text x="60" y="32" font-size="5" fill="#E8712C" font-weight="600" text-anchor="middle" font-family="Arial">Minutes MCA</text><text x="60" y="46" font-size="5" fill="#14365F" font-weight="600" text-anchor="middle" font-family="Arial">SEBI FEMA</text><text x="60" y="60" font-size="5" fill="#E8712C" font-weight="600" text-anchor="middle" font-family="Arial">SS-1 SS-2</text><text x="60" y="85" font-size="6" fill="#14365F" font-weight="600" text-anchor="middle" font-family="Arial">Verify Docs</text></svg></div><span class="illustration-label">Verified</span><span class="step-number-large">03</span></div></div></div>
<div class="step-card"><div class="step-content"><span class="step-badge">Step 4</span><h3 class="step-title">Management Discussion and Clarification</h3><p class="step-description">PCS presents preliminary findings to management (CS/KMP/Directors): non-compliance identified, missing documents, procedural gaps, governance concerns. Management provides explanations, additional documents or undertakes corrective action. Remediation before MR-3 finalization is critical - many Pune companies use this window to clear pending MCA filings, rectify defects or complete delayed processes. Patron advises on remediation strategies to minimize qualifications.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Findings discussed with management</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Remediation actions initiated</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="20" y="8" width="80" height="60" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><text x="60" y="22" font-size="5" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">Findings</text><text x="60" y="38" font-size="6" fill="#E8712C" font-weight="600" text-anchor="middle" font-family="Arial">Discuss</text><text x="60" y="52" font-size="5" fill="#14365F" font-weight="600" text-anchor="middle" font-family="Arial">Remediate</text><text x="60" y="78" font-size="6" fill="#14365F" font-weight="600" text-anchor="middle" font-family="Arial">Mgmt Review</text></svg></div><span class="illustration-label">Discussed</span><span class="step-number-large">04</span></div></div></div>
<div class="step-card"><div class="step-content"><span class="step-badge">Step 5</span><h3 class="step-title">Prepare and Issue Form MR-3</h3><p class="step-description">PCS prepares Secretarial Audit Report in Form MR-3: compliance statement for each applicable law, qualifications (non-compliances), observations (areas for improvement), recommendations. Signed and dated by PCS. For listed: enhanced MR-3 covering SEBI. Submitted to Board, annexed with Board's Report under S.134(3). Board must explain every qualification. Patron prepares MR-3 and drafts Board's response for all Pune companies.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Form MR-3 issued with qualifications</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Board Report explanation drafted</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="20" y="8" width="80" height="60" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><text x="60" y="22" font-size="7" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">MR-3</text><text x="60" y="40" font-size="5" fill="#E8712C" font-weight="600" text-anchor="middle" font-family="Arial">Qualifications</text><text x="60" y="55" font-size="5" fill="#14365F" font-weight="600" text-anchor="middle" font-family="Arial">Board Report</text><text x="60" y="78" font-size="6" fill="#14365F" font-weight="600" text-anchor="middle" font-family="Arial">Issue Report</text></svg></div><span class="illustration-label">Reported</span><span class="step-number-large">05</span></div></div></div>
<div class="step-card"><div class="step-content"><span class="step-badge">Step 6</span><h3 class="step-title">File SEBI Compliance Report + Post-Audit Follow-Up</h3><p class="step-description">Listed companies: file Annual Secretarial Compliance Report with BSE/NSE within 60 days of FY-end in XBRL, signed by peer-reviewed PCS. Covers all SEBI Regulations and circulars. All companies: post-audit follow-up to ensure remediation of qualifications, implementation of recommendations, and strengthening of compliance systems. Patron tracks remediation and prepares for next year's cycle.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>SEBI report filed within 60 days</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Remediation tracked to completion</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="25" y="10" width="70" height="50" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><circle cx="60" cy="30" r="12" fill="#E8F5E9" stroke="#25D366" stroke-width="2"/><path d="M55 30l4 4 8-8" stroke="#25D366" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"/><text x="60" y="78" font-size="6" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">SEBI + Follow-Up</text></svg></div><span class="illustration-label">Complete</span><span class="step-number-large">06</span></div></div></div>


        </div>
    </div>
</section>

<!-- SECTION 8: DOCUMENTS REQUIRED -->
<section class="content-section" id="documents-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Documents Reviewed During Secretarial Audit</h2>
            <div class="content-text">
                
                <ul><li><strong>MOA, AOA, Shareholder Agreements:</strong> Constitutional documents; amendments during the year.</li><li><strong>Minutes:</strong> Board meetings (SS-1), committee meetings (Audit/NRC/CSR), general meetings (SS-2).</li><li><strong>Statutory Registers:</strong> Members, Directors/KMP, Charges, RPT, SBO, Loans & Investments.</li><li><strong>MCA Filings:</strong> AOC-4, MGT-7/7A, ADT-1, DIR-12, MGT-14, CHG-1, BEN-2, DPT-3.</li><li><strong>Share Capital Records:</strong> Allotment, transfer, PAS-3, SH-7, buyback records.</li><li><strong>SEBI Filings (Listed):</strong> LODR disclosures, corporate governance report, insider trading SDD, SAST.</li><li><strong>FEMA/RBI Filings:</strong> FC-GPR, FC-TRS, FLA return, Entity Master, ECB (if applicable).</li><li><strong>Labour Law Records:</strong> PF/ESIC returns, Shops & Establishment, factory license.</li></ul><div class="highlight-box" style="margin-top:16px;"><p><strong>Pune-specific tip:</strong> For Pune IT companies in Hinjewadi and Kharadi with foreign investment, the FEMA compliance review is critical. PCS verifies FC-GPR filings, FLA returns, Entity Master updates and pricing compliance. Many Pune startups with VC funding discover FEMA non-compliance during the secretarial audit process.</p></div>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 9: CHALLENGES -->
<section class="content-section" id="challenges-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Common Secretarial Audit Issues in Pune</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Challenge</th><th>Impact</th><th>How Patron Accounting Solves It</th></tr></thead>
                    <tbody>
                        <tr><td>Delayed MCA Filings</td><td>AOC-4 or MGT-7 filed late. Most common MR-3 qualification for Pune companies.</td><td>Patron identifies delays during fieldwork and clears pending filings before MR-3 finalization</td></tr><tr><td>Secretarial Standards Non-Compliance</td><td>SS-1/SS-2: notice not 7 days, minutes not within 30 days, AGM notice not 21 days</td><td>Patron reviews SS compliance point-by-point and advises on procedural improvements</td></tr><tr><td>RPT Approval Gaps</td><td>S.188 / SEBI Reg 23: related party transactions executed without Audit Committee / shareholder approval</td><td>Patron identifies RPT gaps and advises on retrospective ratification where possible</td></tr><tr><td>FEMA Non-Compliance (FDI Companies)</td><td>FC-GPR not filed within 30 days, FLA return missed, Entity Master not updated</td><td>Patron coordinates FEMA remediation with RBI for Pune IT companies with foreign investment</td></tr>

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
            <h2 class="section-title">Secretarial Audit Fees in Pune</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Fee Component</th><th>Amount</th></tr></thead>
                    <tbody>
                        <tr><td>Full Secretarial Audit (Listed)</td><td>Patron Rs 50,000-2,00,000</td></tr><tr><td>Secretarial Audit (Unlisted Public)</td><td>Patron Rs 25,000-75,000</td></tr><tr><td>Secretarial Audit (Borrowings >= Rs 100 Cr)</td><td>Patron Rs 25,000-75,000</td></tr><tr><td>SEBI Compliance Report (Reg 24A)</td><td>Patron Rs 15,000-50,000</td></tr><tr><td>Material Unlisted Subsidiary Audit</td><td>Patron Rs 25,000-75,000</td></tr><tr><td>Voluntary Secretarial Audit</td><td>Patron Rs 15,000-50,000</td></tr><tr><td>Remediation Advisory</td><td>Patron Rs 10,000-30,000</td></tr><tr><td>Annual Compliance Management</td><td>Patron Rs 50,000-2,00,000/year</td></tr>

                    </tbody>
                </table>
                </div>
                <p style="margin-top:16px;font-size:13px;color:var(--text-muted);font-style:italic;">All fees and charges listed are indicative only and do not constitute a binding offer. Final amounts may vary depending on the volume of work and the complexity involved.</p>
                <p style="margin-top:16px;">Professional service charges for drafting, filing, and representation are separate from the statutory fees. The exact fee depends on the complexity of the case, disputed amount, and number of hearings required. Contact us for a detailed quote.</p>
                <p style="margin-top:16px;"><strong>Get a free Secretarial Audit in Pune consultation - <a href="tel:+919459456700">Call +91 945 945 6700</a> or <a href="https://wa.me/919459456700?text=Hi%2C%20I%20need%20secretarial%20audit%20services%20in%20Pune.%20Please%20share%20details." target="_blank">WhatsApp us</a>. No-obligation assessment.</strong></p>
            </div>
        </div>
    </div>
</section>

<!-- SECTION 11: TIMELINE -->
<section class="content-section" id="timeline-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Secretarial Audit Compliance Calendar</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Stage</th><th>Estimated Timeline</th></tr></thead>
                    <tbody>
                        <tr><td>Appoint Secretarial Auditor</td><td>Beginning of FY / before AGM</td></tr><tr><td>AGM Approval (Listed post April 2025)</td><td>At AGM</td></tr><tr><td>Secretarial Audit Fieldwork</td><td>Q4 FY + first 2 months of next FY</td></tr><tr><td>Form MR-3 Submission to Board</td><td>Before Board Report finalization</td></tr><tr><td>Board Report (with MR-3)</td><td>Before AGM</td></tr><tr><td>AGM (Annual Report with MR-3)</td><td>Within 6 months of FY close (September)</td></tr><tr><td>SEBI Compliance Report</td><td>Within 60 days of FY-end (30 May)</td></tr><tr><td>Annual Report Filing (AOC-4/MGT-7)</td><td>Within 30/60 days of AGM</td></tr>

                    </tbody>
                </table>
                </div>
                <div class="highlight-box" style="margin-top:16px;">
                    
                    <p><strong>Key deadlines:</strong> SEBI Compliance Report by 30 May (60 days from FY-end). AGM by September. MR-3 ready before Board Report finalization. Post April 2025: listed companies must have peer-reviewed PCS appointed with AGM approval. ROC Pune at Shivajinagar. ICSI Pune Chapter. BSE/NSE for listed. Patron manages the complete audit cycle from RTC Silver, Wagholi.</p>

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
            <h2 class="section-title">Why Choose Patron for Secretarial Audit in Pune?</h2>
        </div>
        <div class="features-grid"><article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><h3 class="feature-title">CS + CA Integrated Practice</h3><p class="feature-text">Combined CA and CS team provides both statutory and secretarial audit from single Pune service point. Consistency and comprehensive compliance coverage.</p></article><article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M13 2L3 14h9l-1 8 10-12h-9l1-8z"/></svg></div><h3 class="feature-title">SEBI LODR 2024/2025 Expertise</h3><p class="feature-text">Fully updated on Third Amendment: peer-reviewed PCS, 5-year rotation, AGM approval, non-audit restrictions, enhanced Compliance Report requirements.</p></article><article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><h3 class="feature-title">Remediation-First Approach</h3><p class="feature-text">Identifies non-compliance during fieldwork and advises corrective measures before MR-3 finalization. Minimizes qualifications and strengthens governance.</p></article><article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M14 2H6a2 2 0 00-2 2v16a2 2 0 002 2h12a2 2 0 002-2V8z"/><path d="M14 2v6h6M16 13H8M16 17H8"/></svg></div><h3 class="feature-title">Multi-Law Coverage</h3><p class="feature-text">Companies Act + SEBI + FEMA/RBI + Labour Laws + Industry-Specific + Secretarial Standards. Single-window compliance assurance for Pune companies.</p></article></div>
    </div>
</section>

<!-- SECTION 12A: SOCIAL PROOF -->
<section class="content-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Trusted by 10,000+ Businesses Across India</h2>
            <div class="content-text">
                
                <p><strong>10,000+ Businesses | 4.9 Google Rating | 50,000+ Docs Filed | 15+ Years</strong></p><blockquote style="border-left:3px solid var(--orange);padding-left:16px;margin:16px 0;font-style:italic;color:var(--text-secondary);">"Our trademark was filed and registered within the timeline Patron promised. Professional, reliable, and hassle-free service." - D2C Brand, Pune</blockquote><p>With offices in Pune, Mumbai, Delhi and Gurugram, Patron serves companies across India.</p>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 13: SELF-FILING vs PROFESSIONAL COMPARISON -->
<section class="content-section" id="comparison-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Secretarial Audit vs Statutory Audit</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Parameter</th><th>Secretarial Audit</th><th>Statutory (Financial) Audit</th></tr></thead>
                    <tbody>
                        <tr><td>Section</td><td>204 (Companies Act)</td><td>139 (Companies Act)</td></tr><tr><td>Conducted By</td><td>Practicing Company Secretary (PCS)</td><td>Practicing Chartered Accountant (CA)</td></tr><tr><td>Scope</td><td>Compliance with all applicable laws</td><td>Accuracy of financial statements</td></tr><tr><td>Report Format</td><td>Form MR-3</td><td>Audit Report per SA standards</td></tr><tr><td>Annexed With</td><td>Board's Report</td><td>Financial Statements</td></tr><tr><td>Applicability</td><td>Listed + prescribed public + Rs 100 Cr borrowings</td><td>All companies</td></tr><tr><td>SEBI Additional</td><td>Secretarial Compliance Report (Reg 24A)</td><td>Limited Review (Reg 33)</td></tr>

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
                
                <p>For Pune companies needing related compliance:</p><ul><li><a href="/statutory-audit">Statutory Audit</a></li><li><a href="/private-limited-company-registration/pune">Pvt Ltd Registration in Pune</a></li><li><a href="/fdi-compliance/pune">FDI Compliance in Pune</a></li><li><a href="/gst-registration/pune">GST Registration in Pune</a></li><li><a href="/legal-drafting/pune">Legal Drafting in Pune</a></li><li><a href="/accounting-services">Accounting Services</a></li></ul>

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
                
                <p><strong>Section 204:</strong> Listed + prescribed class must annex Form MR-3 with Board Report. PCS only. Company must assist. Board explains qualifications. Penalty Rs 1-5 lakh.</p><p><strong>Rule 9:</strong> Prescribed class: paid-up >= Rs 50 Cr, turnover >= Rs 250 Cr, borrowings from banks/PFIs >= Rs 100 Cr.</p><p><strong>SEBI LODR Reg 24A:</strong> Listed + material subsidiaries. Compliance Report within 60 days in XBRL. Peer-reviewed PCS.</p><p><strong>SEBI LODR Third Amendment 2024 (April 2025):</strong> Peer-reviewed PCS mandatory. 5yr/2x5yr rotation. AGM approval. Non-audit restrictions. Vacancy within 3 months.</p><p><strong>SS-1/SS-2:</strong> Mandatory under S.118(10). Board Meetings and General Meetings procedures.</p><p><strong>S.134(3):</strong> Board Report includes MR-3 and explanation of every qualification.</p><p><strong>ROC Pune:</strong> Shivajinagar. ICSI Pune Chapter. BSE/NSE for listed. <a href="https://www.mca.gov.in" target="_blank" rel="noopener">mca.gov.in</a>.</p>

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
                    <h2 class="faq-expanded__title">FAQs - Secretarial Audit Service in Pune</h2>
                    <p class="faq-expanded__lead">Find answers to the most common questions about secretarial audit in Pune.</p>
                    @include('partials.bigin-form', [
                        'variant'  => 'compact',
                        'service'  => 'Secretarial Audit in Pune',
                        'city'     => 'Pune',
                    ])
                </aside>
                <div class="faq-expanded__list">
                    <div class="faq-expanded__item" id="faq-1">
                        <h3 class="faq-expanded__q">What is secretarial audit?</h3>
                        <div class="faq-expanded__a"><p>A compliance audit conducted by a Practicing Company Secretary under Section 204 examining whether a company has complied with all applicable laws, maintained proper records, followed board processes and adhered to governance standards. Report in Form MR-3 annexed with Board's Report. Covers Companies Act, SEBI (listed), FEMA/RBI, Secretarial Standards, industry-specific and general laws. Focuses on non-financial compliance unlike statutory audit.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-2">
                        <h3 class="faq-expanded__q">Which companies need secretarial audit?</h3>
                        <div class="faq-expanded__a"><p>Mandatory for: all listed companies (BSE/NSE), public companies with paid-up capital >= Rs 50 crore, public companies with turnover >= Rs 250 crore, companies with borrowings >= Rs 100 crore from banks/PFIs at any point during FY, and material unlisted subsidiaries of listed entities (income/net worth > 10% of consolidated). Growing Pune companies can voluntarily opt for governance enhancement.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-3">
                        <h3 class="faq-expanded__q">Who can conduct a secretarial audit?</h3>
                        <div class="faq-expanded__a"><p>Only a Practicing Company Secretary holding Certificate of Practice from ICSI. Internal CS, CAs and cost accountants cannot conduct it. For listed entities (post April 2025), PCS must be peer-reviewed, holding valid Peer Review Certificate from ICSI. Must satisfy independence criteria. Patron coordinates with peer-reviewed PCS for all Pune secretarial audits.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-4">
                        <h3 class="faq-expanded__q">What is the penalty for non-compliance?</h3>
                        <div class="faq-expanded__a"><p>Under Section 204(4), fine of Rs 1 lakh to Rs 5 lakh for company and every officer in default. For listed entities, additional SEBI penalties for non-submission of Secretarial Compliance Report under Regulation 24A. Post April 2025, non-compliance with peer review, rotation and AGM requirements also attracts regulatory action.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-5">
                        <h3 class="faq-expanded__q">What is the SEBI Secretarial Compliance Report?</h3>
                        <div class="faq-expanded__a"><p>Separate report under SEBI LODR Regulation 24A for listed entities and material subsidiaries. Covers compliance with all SEBI Regulations and circulars during the FY. Filed with BSE/NSE within 60 days of FY-end (by 30 May) in XBRL format. Must be signed by secretarial auditor or peer-reviewed PCS. In addition to Form MR-3.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-6">
                        <h3 class="faq-expanded__q">Is secretarial audit different from statutory audit?</h3>
                        <div class="faq-expanded__a"><p>Yes, fundamentally. Statutory audit (S.139, by CA) examines financial statement accuracy. Secretarial audit (S.204, by PCS) examines compliance with laws, governance processes and regulatory filings. Both mandatory for prescribed companies. Both part of Annual Report. Patron's integrated CA + CS team provides both from single Pune service point.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-7">
                        <h3 class="faq-expanded__q">What changed after April 2025 for listed companies?</h3>
                        <div class="faq-expanded__a"><p>SEBI LODR Third Amendment 2024 introduced: only peer-reviewed PCS can be appointed, 5-year rotation for individual / 2 consecutive terms of 5 years for firms, AGM approval required for appointment/reappointment/removal, non-audit service restrictions with Board approval, vacancy filling within 3 months, and resignation disclosure requirements.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-8">
                        <h3 class="faq-expanded__q">What is Form MR-3?</h3>
                        <div class="faq-expanded__a"><p>Prescribed format for Secretarial Audit Report under Rule 9. Addressed to members. Includes compliance verification for each applicable law, specific qualifications (non-compliance), observations (areas for improvement), and recommendations. Signed by PCS, submitted to Board, annexed with Board's Report under S.134(3). Directors must explain every qualification.</p></div>
                    </div>
                </div>
            </div>


            <!-- Quick Answers -->
            <div class="highlight-box" style="margin-top:32px;">
                <p><strong>Quick Answers</strong></p>
                <p><strong>Secretarial audit kya hai?</strong> PCS (Company Secretary) dwara Section 204 ke under compliance audit. Companies Act, SEBI, FEMA, Secretarial Standards sab check hota hai. Form MR-3 mein report Board Report ke saath attach hogi. Penalty: Rs 1-5 lakh.</p><p><strong>Kisko zaruri hai?</strong> Listed companies, public companies (Rs 50 Cr paid-up / Rs 250 Cr turnover), Rs 100 Cr borrowings waali companies, listed ke material subsidiaries.</p><p><strong>April 2025 ke baad kya badla?</strong> Peer-reviewed PCS mandatory, 5-year rotation, AGM approval zaruri.</p>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 18: URGENCY CTA -->
<section class="content-section" style="background: var(--orange-lighter) !important; border-left: 4px solid var(--orange);">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">SEBI Compliance Report Due by 30 May - Secretarial Audit Must Start Now</h2>
            <div class="content-text">
                
                <p>Listed entities must file SEBI Secretarial Compliance Report within <strong>60 days of FY-end (30 May)</strong>. Form MR-3 must be ready before Board Report finalization (before AGM by September). Post April 2025: companies without <strong>peer-reviewed PCS</strong> or <strong>AGM approval</strong> are already non-compliant. <strong>5-year rotation</strong> means Pune companies with same auditor since 2020 must plan transition. MR-3 qualifications are visible in Annual Report - directly impact corporate reputation. Penalty Rs 1-5 lakh per year of non-compliance.</p><p><strong>Start your secretarial audit now - <a href="tel:+919459456700">Call +91 945 945 6700</a> or <a href="https://wa.me/919459456700?text=Hi%2C%20I%20need%20secretarial%20audit%20services%20in%20Pune.%20Please%20share%20details." target="_blank">WhatsApp us</a>. Free consultation.</strong></p>

            </div>
        </div>
    </div>
</section>

<!-- CONCLUSION + CTA BLOCK (Dark) -->
<section class="content-section" style="background: var(--blue) !important;">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title" style="color:#FFFFFF !important;">Secretarial Audit in Pune - Compliant, Governed, Protected</h2>
            <div class="content-text" style="text-align:left;">
                
                <p style="color:rgba(255,255,255,0.85);font-size:16px;line-height:1.7;">Secretarial audit is a critical governance function for Pune's listed companies, large public companies, material subsidiaries and high-borrowing entities. The SEBI LODR 2024/2025 amendments have elevated requirements for listed entities with mandatory peer-reviewed PCS, rotation and AGM approval.</p><p style="color:rgba(255,255,255,0.85);font-size:16px;line-height:1.7;">Patron Accounting's Pune office at RTC Silver, Wagholi provides end-to-end secretarial audit - PCS appointment, comprehensive compliance review, remediation advisory, Form MR-3, Board Report drafting and SEBI Compliance Report filing. Integrated CA + CS team delivers both statutory and secretarial audits from a single point.</p><p style="color:rgba(255,255,255,0.85);font-size:16px;line-height:1.7;">With 15+ years experience, 10,000+ businesses served and a 4.9 Google rating, Patron serves companies across Pune, Mumbai, Delhi and Gurugram.</p>

            </div>
            <div style="display:flex;gap:14px;flex-wrap:wrap;margin-top:24px;">
                <a href="tel:+919459456700" style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:var(--orange);color:#fff;border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#128222; Call +91 945 945 6700</a>
                <a href="https://wa.me/919459456700?text=Hi%2C%20I%20need%20secretarial%20audit%20services%20in%20Pune.%20Please%20share%20details." target="_blank" style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:#25D366;color:#fff;border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#128172; WhatsApp Us</a>
                <a href="mailto:sales@patronaccounting.com?subject=Enquiry%20for%20Secretarial%20Audit%20in%20Pune&body=Hello%20Patron%20Team%2C%0A%0AI%20need%20secretarial%20audit%20services%20in%20Pune.%0A%0AThank%20you." style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:transparent;color:#fff;border:2px solid rgba(255,255,255,0.3);border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#9993;&#65039; Email Us</a>
            </div>
            <p style="color:rgba(255,255,255,0.7);font-size:13px;margin-top:16px;">Book a Free Consultation - No Obligation.</p>
        </div>
    </div>
</section>

<!-- GSTAT STATE BENCH CITY PAGES (32 Pages) -->
<section class="content-section" style="padding:48px 32px;background:var(--gray-50);">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title" style="text-align:center;margin-bottom:12px;">Secretarial Audit Across India</h2>
            <p style="text-align:center;color:var(--text-muted);font-size:15px;margin-bottom:40px;">Expert secretarial audit services in all major cities</p>
     
            <div class="pa-city-block" style="margin-bottom:40px;"><div class="pa-city-grid"><div class="pa-city-card" style="opacity:0.6;pointer-events:none;border:2px solid var(--orange);position:relative;"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Pune</div><div class="pa-card-sub">Maharashtra</div></div><span style="position:absolute;top:6px;right:8px;font-size:10px;color:var(--orange);font-weight:700;text-transform:uppercase;letter-spacing:0.5px;">You're here</span></div><a href="/secretarial-audit/mumbai" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Mumbai</div><div class="pa-card-sub">Maharashtra</div></div></a><a href="/secretarial-audit/delhi" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Delhi</div><div class="pa-card-sub">Delhi NCR</div></div></a><a href="/secretarial-audit/gurugram" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Gurugram</div><div class="pa-card-sub">Haryana</div></div></a><a href="#" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Bangalore</div><div class="pa-card-sub">Karnataka</div></div></a><a href="#" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Hyderabad</div><div class="pa-card-sub">Telangana</div></div></a><a href="#" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Chennai</div><div class="pa-card-sub">Tamil Nadu</div></div></a><a href="#" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Kolkata</div><div class="pa-card-sub">West Bengal</div></div></a></div></div><div class="pa-city-block"><div class="pa-block-title">Related Services in Pune</div><div class="pa-block-sub">End-to-end corporate compliance in Pune</div><div class="pa-cross-grid"><a href="/statutory-audit" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Statutory Audit</div><div class="pa-card-sub">India</div></div></a><a href="/fdi-compliance/pune" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">FDI Compliance</div><div class="pa-card-sub">Pune</div></div></a><a href="#" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Annual ROC Filing</div><div class="pa-card-sub">Pune</div></div></a><a href="/gst-registration/pune" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">GST Registration</div><div class="pa-card-sub">Pune</div></div></a><a href="/legal-drafting/pune" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Legal Drafting</div><div class="pa-card-sub">Pune</div></div></a><a href="/startup-registration/pune" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Startup Registration</div><div class="pa-card-sub">Pune</div></div></a></div></div>
        </div>
    </div>
</section>

<!-- CONTENT FRESHNESS FOOTER -->
<section class="content-section" style="padding:32px;">
    <div class="content-container">
        <div class="text-content" style="font-size:13px;color:var(--text-muted);">
            <p><strong>Content Created:</strong> 23 March 2026 &nbsp;|&nbsp; <strong>Last Updated:</strong> <span id="lastUpdatedFooter">23 March 2026</span> &nbsp;|&nbsp; <strong>Next Review:</strong> 23 September 2026 &nbsp;|&nbsp; <strong>Reviewed By:</strong> CA &amp; CS Team, Patron Accounting LLP</p>
            <p>This page is reviewed semi-annually to reflect SEBI LODR amendments, Companies Act changes, ICSI Secretarial Standards updates and MCA form changes. Last review: March 2026. Next review: September 2026.</p>
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
