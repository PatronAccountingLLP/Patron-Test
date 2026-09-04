
@extends('layouts.service-app')

<!-- External Dependencies (loaded by master layout in production) -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Barlow:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,400&family=DM+Sans:opsz,wght@9..40,400;9..40,500;9..40,600;9..40,700&display=swap" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

@section('meta')
    <title>NGO & Non-Profit Accounting Mumbai - Bookkeeping & Audit</title>
    <meta name="description" content="CA-led NGO and non-profit accounting in Mumbai. 12A/80G compliance, FCRA FC-4, Charity Commissioner IX-C, trust audit, CSR fund tracking. Call +91 945 945 6700.">
    <link rel="canonical" href="https://www.patronaccounting.com/ngo-accounting-services/mumbai">
    <meta name="robots" content="index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1">
    <meta property="og:title" content="NGO & Non-Profit Accounting Mumbai - Bookkeeping & Audit">
    <meta property="og:description" content="CA-led NGO and non-profit accounting in Mumbai. 12A/80G compliance, FCRA FC-4, Charity Commissioner IX-C, trust audit, CSR fund tracking. Call +91 945 945 6700.">
    <meta property="og:url" content="https://www.patronaccounting.com/ngo-accounting-services/mumbai">
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="Patron Accounting">
    <meta property="og:image" content="https://www.patronaccounting.com/images/og-default-square.png">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="1200">
    <meta property="og:image:type" content="image/png">
    <meta property="og:image:secure_url" content="https://www.patronaccounting.com/images/og-default-square.png">
    <meta property="og:image:alt" content="Patron Accounting - partner you can rely on">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="NGO & Non-Profit Accounting Mumbai - Bookkeeping & Audit">
    <meta name="twitter:description" content="CA-led NGO and non-profit accounting in Mumbai. 12A/80G compliance, FCRA FC-4, Charity Commissioner IX-C, trust audit, CSR fund tracking. Call +91 945 945 6700.">
    <meta name="twitter:image" content="https://www.patronaccounting.com/images/og-default-square.png">
@endsection

@section('schema')
    <script type="application/ld+json">{
  "@context": "https://schema.org",
  "@graph": [
    {
      "@type": "Service",
      "name": "NGO & Non-Profit Accounting Mumbai - Bookkeeping & Audit",
      "description": "CA-led NGO and non-profit accounting in Mumbai. 12A/80G compliance, FCRA FC-4, Charity Commissioner IX-C, trust audit, CSR fund tracking. Call +91 945 945 6700.",
      "url": "https://www.patronaccounting.com/ngo-accounting-services/mumbai",
      "serviceType": "NGO & Non-Profit Accounting Mumbai - Bookkeeping & Audit",
      "areaServed": {
        "@type": "City",
        "name": "Mumbai",
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
        "url": "https://www.patronaccounting.com/ngo-accounting-services/mumbai",
        "price": "8000"
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
          "name": "NGO Accounting and Compliance Services",
          "item": "https://www.patronaccounting.com/ngo-and-non-profit-accounting-services"
        },
        {
          "@type": "ListItem",
          "position": 3,
          "name": "NGO & Non-Profit Accounting Mumbai - Bookkeeping & Audit",
          "item": "https://www.patronaccounting.com/ngo-accounting-services/mumbai"
        }
      ]
    },
    {
      "@type": "FAQPage",
      "mainEntity": [
        {
          "@type": "Question",
          "name": "What accounting is required for NGOs in Mumbai?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Accrual-based books, annual CA audit (mandatory S.33 Maharashtra Public Trusts Act for trusts), Schedule IX-C with Charity Commissioner, ITR-7 with Form 10B/10BB for 12A/80G entities, and FC-4 with MHA if receiving foreign funds. R&P, I&E, Balance Sheet are standard financial statements."
          }
        },
        {
          "@type": "Question",
          "name": "Is audit mandatory for trusts registered under 12A?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Yes. Mandatory under two provisions: S.33 Maharashtra Public Trusts Act (all public trusts regardless of income) and Income Tax Act (Form 10B/10BB for 12A entities). CA auditor required. Report filed with both Charity Commissioner (IX-C) and Income Tax (with ITR-7)."
          }
        },
        {
          "@type": "Question",
          "name": "How much does NGO accounting cost in Mumbai?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Small trust/society (domestic): Rs 8,000-15,000/month. Medium with 12A/80G: Rs 15,000-30,000. Section 8 company: Rs 20,000-45,000. FCRA NGO: Rs 25,000-60,000. Large multi-donor international NGO: Rs 50,000-2,00,000."
          }
        },
        {
          "@type": "Question",
          "name": "What is Schedule IX-C filing with Charity Commissioner?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Prescribed format under Maharashtra Public Trusts Rules for annual accounts. Balance sheet + I&E + CA audit report. 2019 amendment added IX-D (PAN, 12A number, ITR details for preceding 3 years by auditor). Filed online at charity.maharashtra.gov.in within 6 months of 31 March."
          }
        },
        {
          "@type": "Question",
          "name": "How does FCRA accounting work for Mumbai NGOs?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Separate books for foreign contributions. All foreign funds via designated SBI (New Delhi). Admin expenses ≤ 20% of foreign receipts. FC-4 annually by 30 June, even nil. CA declaration accompanies. Patron maintains parallel FCRA books and monitors 20% cap monthly."
          }
        },
        {
          "@type": "Question",
          "name": "Can an NGO receive CSR funds without 80G registration?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "CSR-1 registration (not 80G) is mandatory for CSR funds under S.135 Companies Act. But most Mumbai corporates prefer 80G-registered NGOs for shareholders' tax benefit. NITI Aayog DARPAN also practically required. Patron handles CSR-1, DARPAN, and 80G registration together."
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
                        NGO and Non-Profit Accounting Services in Mumbai: CA-Led Compliance for Trusts, Societies, and Section 8 Companies
                    </h1>

                    <div class="expert-attribution-box">
                        <span class="eab-check"><svg width="16" height="16" viewBox="0 0 24 24" fill="currentColor"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg></span>
                        <span class="eab-title">Reviewed by CA and CS Team, Patron Accounting LLP</span>
                        <span class="eab-meta">
                            <span>ICAI & ICSI Registered</span><span class="eab-sep">|</span>
                            <span>15+ Years Experience</span><span class="eab-sep">|</span>
                            <span>Last Updated: <span id="lastUpdated">20 March 2026</span></span>
                        </span>
                        <a href="#" class="eab-link">Verify Credentials &rarr;</a>
                    </div>

                    <div class="mb-4">
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Documents:</span> Trust deed / Society registration / Section 8 COI, 12A/80G certificates, PAN/TAN, FCRA registration, bank statements</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Fees:</span> Starting from Rs 8,000/month for small trusts and societies</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Eligibility:</span> Public trusts, registered societies, Section 8 companies, FCRA-registered NGOs, CSR-funded organisations in Mumbai</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Timeline:</span> Onboarding 5-7 days; monthly books by 10th; audit-ready by September</p>
                        </div>
                    </div>

                    <p class="mb-4 fw-bold" style="color: var(--blue); font-size: 15px;">10,000+ Businesses Served | 4.9 Google Rating | From Rs 8,000/month</p>

                    <div class="hero-cta">
                        <a href="tel:+919459456700" class="btn-video text-decoration-none">
                            <span class="play-circle"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="width:14px;height:14px;color:#fff"><path d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/></svg></span>
                            Call +91 945 945 6700
                        </a>
                        <a href="mailto:sales@patronaccounting.com" class="btn-sample text-decoration-none">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="width:18px;height:18px;"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,12 2,6"/></svg>
                            Email Us
                        </a>
                        <a href="https://wa.me/919459456700?text=Hello%2C%20I%20just%20visited%20your%20NGO%20Accounting%20Mumbai%20page.%20I%20would%20like%20to%20know%20more%20about%20it." target="_blank" class="btn-sample text-decoration-none" rel="noopener">
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

                    <iframe name='hidden208810000001209168Frame' id='hidden208810000001209168Frame' style='display:none;' src='about:blank'></iframe>

                                        @include('partials.bigin-form', [
                                            'variant' => 'bare',
                                            'service'  => 'NGO Accounting in Mumbai',
                                            'city'     => 'Mumbai',
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
    'ctaText'    => 'CA-led NGO accounting with 12A/80G, FCRA FC-4, Charity Commissioner IX-C, fund tracking, and CSR compliance for Mumbai non-profits.',
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
            <a href="#overview-section" class="toc-btn">Overview</a><a href="#what-section" class="toc-btn">What Is It</a><a href="#who-section" class="toc-btn">Who Needs It</a><a href="#services-section" class="toc-btn">Services</a><a href="#procedure-section" class="toc-btn">Process</a><a href="#documents-section" class="toc-btn">Documents</a><a href="#challenges-section" class="toc-btn">Challenges</a><a href="#fees-section" class="toc-btn">Fees</a><a href="#timeline-section" class="toc-btn">Timeline</a><a href="#benefits-section" class="toc-btn">Why Patron</a><a href="#comparison-section" class="toc-btn">By Entity Type</a><a href="#faq-section" class="toc-btn">FAQs</a>
        </div>
        <button class="toc-arrow right" id="tocRight">&#10095;</button>
    </div>
</div>

<!-- SECTION 2: OVERVIEW / INTRO + TL;DR -->
<section class="content-section" id="overview-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">NGO Non-Profit Accounting in Mumbai - Overview</h2>
            <div class="content-text">
                <div class="highlight-box" style="margin-bottom:20px;">
                    <p><strong>&#128204; TL;DR - NGO Accounting in Mumbai Services at a Glance</strong></p>
                    <p>NGO accounting covers <strong>Maharashtra Public Trusts Act S.33 audit</strong> with <strong>Schedule IX-C</strong> to Charity Commissioner, <strong>12A/80G ITR-7 Form 10B/10BB</strong>, <strong>FCRA FC-4</strong> (20% admin cap), donor/grant management, <strong>CSR fund</strong> accounting, and Section 8 compliance. Post-2025: 10-year 12A/80G renewal for small trusts.</p><div class="table-responsive-wrapper" style="margin-top:16px;"><table><thead><tr><th>Parameter</th><th>Detail</th></tr></thead><tbody><tr><td>Governing Acts</td><td>Maharashtra Public Trusts Act 1950; IT Act (S.12A, 80G); FCRA 2010; Companies Act (S.8)</td></tr><tr><td>Applicable To</td><td>Public trusts, societies, Section 8 companies, FCRA NGOs, CSR recipients</td></tr><tr><td>Timeline</td><td>10BD by 31 May; FC-4 by 30 Jun; Form 10B by 30 Sep; ITR-7 by 31 Oct; IX-C within 6 months</td></tr><tr><td>Cost From</td><td>Rs 8,000/month (small trust/society)</td></tr><tr><td>Penalty</td><td>Late ITR-7: Rs 5,000; 12A non-renewal: loss of exemption; FCRA: suspension</td></tr><tr><td>Authority</td><td>Charity Commissioner Mumbai; CIT(Exemptions); RoC Mumbai; MHA (FCRA)</td></tr></tbody></table></div></p>
                </div>
                <p>Mumbai is India's largest NGO hub. Thousands of trusts, societies, Section 8 companies across education, healthcare, poverty alleviation. Major donors and CSR departments operate from <strong>Nariman Point, BKC, Colaba</strong>. <strong>Charity Commissioner Mumbai</strong> requires annual S.33 audit + IX-C. <strong>CIT(Exemptions)</strong> processes 12A/80G. FCRA NGOs file FC-4 by 30 June. Learn more about <a href="#">NGO Accounting across India</a>.</p>
                <p>Patron's Marine Lines office handles Charity Commissioner, CIT(Exemptions), RoC Mumbai, and MHA filings. Also see <a href="/ngo-registration">NGO Registration</a> and <a href="/accounting-services/mumbai">Accounting Services in Mumbai</a>.</p>
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
                <h2 class="section-title">What Is NGO / Non-Profit Accounting</h2>
                <div class="content-text what-is-definition">
                    
                    <p>Specialised financial management of trusts, societies, and Section 8 companies - covering <strong>fund accounting</strong> (restricted vs unrestricted), <strong>statutory audit</strong> under Maharashtra Public Trusts Act, <strong>12A/80G ITR-7 Form 10B/10BB</strong>, <strong>FCRA FC-4</strong> (20% admin cap), and <strong>grant utilisation</strong> reporting. Unlike commercial accounting, NGO accounting tracks how funds are utilised toward charitable objects.</p><p>Mumbai NGOs face a unique regulatory matrix. A public trust must: maintain accrual books, get CA audit (S.33), file <strong>Schedule IX-C</strong> with Charity Commissioner, file <strong>ITR-7 + Form 10B/10BB</strong> for 12A/80G, file <strong>Form 10BD</strong> (donation statement by 31 May), and if FCRA: file <strong>FC-4</strong> by 30 June. Section 8 companies add AOC-4 + MGT-7 with RoC Mumbai. Missing any deadline = loss of exemption, donor trust, FCRA suspension, or surcharge orders.</p>

                </div>
                <div class="highlight-box" style="margin-top:20px;">
                    <p><strong>Key Terms for NGO Accounting in Mumbai:</strong></p>
                    <p><strong>12A/80G:</strong> 12A = NGO income exempt. 80G = donors get tax deduction. Post-2025: 10-year renewal for small trusts (&lt; Rs 5 Cr income). Form 10A new, Form 10AB renewal.</p><p><strong>Schedule IX-C:</strong> Annual accounts filed with Charity Commissioner Mumbai. Balance sheet + I&amp;E + audit report. Within 6 months of 31 March. IX-D added 2019 for auditor.</p><p><strong>FCRA FC-4:</strong> Annual return by 30 June. Foreign receipts + utilisation. 20% admin cap. Designated SBI account. Even nil receipts must file.</p><p><strong>85% Application:</strong> 12A NGOs must apply 85% of income toward charitable objects. Or accumulate with Form 10 for up to 5 years.</p><p><strong>Form 10B/10BB:</strong> 10B for income ≤ Rs 5 Cr. 10BB for larger. Filed by 30 Sep with ITR-7.</p>

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
                            <text x="100" y="170" font-size="10" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial, sans-serif">NGO Accounting in Mumbai</text>
                        </svg>
                    </div>
                    <div class="illustration-badge">
                        <span>12A/80G + FCRA + IX-C</span>
                        <strong>NGO Accounting</strong>
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
            <h2 class="section-title">Who Needs NGO Accounting in Mumbai</h2>
            <div class="content-text">
                
                <p><strong>Public Charitable Trusts:</strong> Education, healthcare, religious, community welfare. Charity Commissioner S.33 audit. Schedule IX-C. 12A/80G compliance. Property register.</p><p><strong>Registered Societies:</strong> Membership-based, professional, cultural. AGM. Annual report to Registrar. 12A/80G ITR-7. Maharashtra Societies Registration renewal every 5 years.</p><p><strong>Section 8 Companies (RoC Mumbai):</strong> Highest governance. Companies Act (AOC-4, MGT-7, board meetings) + ITR-7 + Form 10B. Preferred by corporate CSR donors and international agencies.</p><p><strong>FCRA-Registered NGOs:</strong> Separate FCRA books. Designated SBI account. FC-4 by 30 June. 20% admin cap. Rs 15 lakh domestic prerequisite. 5-year renewal.</p><p><strong>CSR Fund Recipients:</strong> CSR-1 registration. NITI Aayog DARPAN. Utilisation reports for Mumbai corporates: Tata, Reliance, Godrej, Mahindra.</p><p><strong>Religious Trusts and Temples:</strong> Offering management. Temple accounting. Charity Commissioner compliance under Maharashtra Public Trusts Act.</p>

            </div>
            </div>
        </div>
    </div>
</section>

<!-- SECTION 5: OUR SERVICES -->
<section class="content-section" id="services-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">NGO Non-Profit Accounting Services Included</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Service</th><th>What We Do</th></tr></thead>
                    <tbody>
                        <tr><td>12A/80G Compliance and Renewal</td><td>Registration and renewal with CIT(Exemptions) Mumbai. Form 10A (new), 10AB (renewal). Post-2025: 10-year for small trusts. Filed 6 months before expiry. DARPAN maintained.</td></tr><tr><td>Maharashtra Public Trusts Act</td><td>S.33 CA audit. Accounts balanced 31 March. Schedule IX-C filed with Charity Commissioner Mumbai within 6 months. IX-D for auditor. Property register. Change reports. Online portal.</td></tr><tr><td>FCRA Accounting and FC-4</td><td>Separate books for foreign contributions. Designated SBI account. 20% admin cap monitored monthly. FC-4 by 30 June (even nil). FCRA renewal every 5 years. Utilisation certificates.</td></tr><tr><td>ITR-7 and Form 10B/10BB</td><td>Annual ITR-7 for trusts, societies, Section 8. Form 10B (≤ Rs 5 Cr) or 10BB (larger). Form 10BD (donation statement) by 31 May. 85% application rule verified.</td></tr><tr><td>Fund Accounting and Donor Management</td><td>Donor-wise tracking: restricted, unrestricted, corpus. Grant utilisation per donor. R&amp;P, I&amp;E, Balance Sheet per ICAI Technical Guide. Budget vs actual.</td></tr><tr><td>CSR Fund Accounting</td><td>CSR-1 registration with MCA. NITI Aayog DARPAN. Utilisation reports for corporate donors. Impact reporting for CSR committees.</td></tr><tr><td>Section 8 Company Compliance</td><td>Companies Act: AGM, board meetings (4/year), AOC-4, MGT-7 with RoC Mumbai. Statutory audit. Director KYC. Plus 12A/80G and FCRA as applicable.</td></tr><tr><td>NGO Payroll and TDS</td><td>Staff salary. TDS S.192. PF/ESI. Volunteer stipend accounting. PTRC Maharashtra PT Act. TDS returns 24Q/26Q quarterly.</td></tr>

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
            <h2 class="section-title">6-Step NGO Accounting Process in Mumbai</h2>
            <p class="section-subtitle" style="text-align:left;max-width:100%;">Walk-in at Patron's Marine Lines office. Files with Charity Commissioner Mumbai, CIT(Exemptions), RoC Mumbai, and MHA.</p>
        </header>
        <div class="steps-container">
            <div class="step-card"><div class="step-content"><span class="step-badge">Step 1</span><h3 class="step-title">Entity Assessment and Compliance Mapping</h3><p class="step-description">CA reviews trust deed/society bylaws/Section 8 MOA-AOA. Registration verified: Charity Commissioner, Registrar of Societies, RoC Mumbai. 12A/80G, FCRA, CSR-1, DARPAN status confirmed. Compliance calendar created. Walk-in Marine Lines.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Compliance mapped</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Calendar created</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="15" y="5" width="90" height="70" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><line x1="30" y1="22" x2="85" y2="22" stroke="#F5A623" stroke-width="2.5" stroke-linecap="round"/><line x1="30" y1="35" x2="78" y2="35" stroke="#14365F" stroke-width="1.5" opacity="0.3"/><circle cx="85" cy="55" r="8" fill="#E8F5E9" stroke="#25D366" stroke-width="1"/><path d="M81 55l3 3 5-5" stroke="#25D366" stroke-width="1.5" stroke-linecap="round"/></svg></div><span class="illustration-label">Assessed</span><span class="step-number-large">01</span></div></div></div>
<div class="step-card"><div class="step-content"><span class="step-badge">Step 2</span><h3 class="step-title">Accounting System Setup</h3><p class="step-description">Fund accounting configured: programme-wise, donor-wise, restricted/unrestricted. FCRA books separately maintained. Receipt categories: domestic donations, foreign, CSR, grants, membership, interest. Expenses per charitable objects.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Fund accounting live</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>FCRA books separate</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="15" y="5" width="90" height="70" rx="6" fill="#E8F5E9" stroke="#25D366" stroke-width="1.5"/><text x="60" y="22" font-size="5" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">Configured</text><rect x="25" y="30" width="70" height="18" rx="3" fill="#fff" stroke="#25D366" stroke-width="1"/><text x="60" y="42" font-size="5" fill="#14365F" text-anchor="middle" font-family="Arial">Fund + Donor + FCRA</text><text x="60" y="62" font-size="5" fill="#25D366" font-weight="600" text-anchor="middle" font-family="Arial">System Live</text></svg></div><span class="illustration-label">Configured</span><span class="step-number-large">02</span></div></div></div>
<div class="step-card"><div class="step-content"><span class="step-badge">Step 3</span><h3 class="step-title">Monthly Bookkeeping and Donor Tracking</h3><p class="step-description">Donation receipts with 80G details. Foreign contributions in FCRA books with SBI reconciliation. Grant expenditure vs approved budgets. Programme-wise allocation. Salary + TDS. Bank reconciliation. Monthly fund position MIS.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Donors tracked</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Funds reconciled</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="15" y="5" width="90" height="70" rx="6" fill="#FFF3E0" stroke="#F5A623" stroke-width="1.5"/><text x="60" y="22" font-size="5" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">Monthly Books</text><rect x="25" y="30" width="70" height="18" rx="3" fill="#fff" stroke="#F5A623" stroke-width="1"/><text x="60" y="42" font-size="5" fill="#14365F" text-anchor="middle" font-family="Arial">Donors + Grants + FCRA</text><text x="60" y="62" font-size="5" fill="#F5A623" font-weight="600" text-anchor="middle" font-family="Arial">Fund Position Ready</text></svg></div><span class="illustration-label">Tracked</span><span class="step-number-large">03</span></div></div></div>
<div class="step-card"><div class="step-content"><span class="step-badge">Step 4</span><h3 class="step-title">Statutory Filings (Rolling)</h3><p class="step-description">Form 10BD by 31 May. FC-4 by 30 June. TDS quarterly. PTRC monthly. GST if applicable. Section 8 board minutes quarterly. AGM within 6 months of year-end.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>10BD filed</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>FC-4 submitted</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="15" y="5" width="90" height="70" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><text x="60" y="22" font-size="5" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">Statutory Filed</text><rect x="25" y="30" width="70" height="18" rx="3" fill="#E8F5E9" stroke="#25D366" stroke-width="1"/><text x="60" y="42" font-size="5" fill="#14365F" text-anchor="middle" font-family="Arial">10BD + FC-4 + TDS + AGM</text><text x="60" y="62" font-size="5" fill="#14365F" font-weight="600" text-anchor="middle" font-family="Arial">All Deadlines Met</text></svg></div><span class="illustration-label">Filed</span><span class="step-number-large">04</span></div></div></div>
<div class="step-card"><div class="step-content"><span class="step-badge">Step 5</span><h3 class="step-title">Annual Audit and Reporting</h3><p class="step-description">Accounts balanced 31 March. CA audit. R&amp;P, I&amp;E, Balance Sheet. Form 10B/10BB by 30 Sep. Schedule IX-C with Charity Commissioner Mumbai. IX-D by auditor. ITR-7 by 31 Oct. Annual report for donors and board.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Audit complete</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>IX-C + ITR-7 filed</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="15" y="5" width="90" height="70" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><rect x="25" y="15" width="70" height="10" rx="3" fill="#25D366" opacity="0.15"/><text x="60" y="23" font-size="5" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">Audited</text><text x="60" y="42" font-size="5" fill="#14365F" font-weight="600" text-anchor="middle" font-family="Arial">IX-C + 10B + ITR-7</text><text x="60" y="58" font-size="4" fill="#14365F" text-anchor="middle" font-family="Arial">85% Application Verified</text></svg></div><span class="illustration-label">Audited</span><span class="step-number-large">05</span></div></div></div>
<div class="step-card"><div class="step-content"><span class="step-badge">Step 6</span><h3 class="step-title">Renewal and Strategic Compliance</h3><p class="step-description">12A/80G renewal tracked: filed 6 months before expiry. FCRA renewal every 5 years. DARPAN updated annually. CSR-1 maintained. Charity Commissioner property register + change reports. CA advisory on 85% application and corpus management.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Renewals tracked</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Compliance current</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="15" y="5" width="90" height="70" rx="6" fill="#E8F5E9" stroke="#25D366" stroke-width="1.5"/><text x="60" y="22" font-size="6" fill="#14365F" font-weight="800" text-anchor="middle" font-family="Arial">Compliant</text><rect x="25" y="30" width="70" height="15" rx="3" fill="#fff" stroke="#25D366" stroke-width="1"/><text x="60" y="40" font-size="5" fill="#14365F" text-anchor="middle" font-family="Arial">12A + 80G + FCRA Renewed</text><text x="60" y="62" font-size="5" fill="#25D366" font-weight="600" text-anchor="middle" font-family="Arial">Multi-Year Secure</text></svg></div><span class="illustration-label">Renewed</span><span class="step-number-large">06</span></div></div></div>


        </div>
    </div>
</section>

<!-- SECTION 8: DOCUMENTS REQUIRED -->
<section class="content-section" id="documents-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Documents Required for NGO Accounting</h2>
            <div class="content-text">
                
                <ul><li>Trust Deed / Society Registration / Section 8 COI+MOA+AOA</li><li>12A/80G Certificates</li><li>FCRA Registration (if applicable)</li><li>PAN and TAN</li><li>Charity Commissioner Registration Number</li><li>Bank Statements (all accounts + FCRA designated SBI)</li><li>Previous Year Audit Reports + Donor Records + Grant Agreements</li><li>Staff Employment Records + Previous ITR-7</li></ul><div class="highlight-box" style="margin-top:20px;"><p><strong>Mumbai-Specific:</strong> Charity Commissioner E-registration number. Previous year IX-C. NITI Aayog DARPAN unique ID. CSR-1 registration. For Section 8: RoC Mumbai CIN + MCA filings.</p></div>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 9: CHALLENGES -->
<section class="content-section" id="challenges-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Common NGO Accounting Challenges in Mumbai</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Challenge</th><th>Impact</th><th>How Patron Accounting Solves It</th></tr></thead>
                    <tbody>
                        <tr><td>Multi-Authority Compliance Overlap</td><td>Simultaneous filing: Charity Commissioner (IX-C), CIT(Exemptions) (ITR-7, 10B), MHA (FC-4), NITI Aayog (DARPAN). Missing one triggers cascading consequences: late ITR-7 risks 12A revocation, late IX-C = inquiry, late FC-4 = FCRA suspension.</td><td>Patron maintains compliance calendar with advance reminders. All filings tracked on centralised dashboard. Zero missed deadlines.</td></tr><tr><td>FCRA 20% Admin Cost Cap</td><td>Administrative expenses cannot exceed 20% of foreign contributions. Salary splits between FCRA and domestic programmes. Shared costs (rent, utilities) need documented allocation methodology. Non-compliance = MHA show-cause.</td><td>Monthly 20% cap monitoring. Cost allocation methodology documented. FCRA vs domestic expense split maintained. CA declaration prepared.</td></tr><tr><td>85% Application of Income Rule</td><td>12A NGOs must apply 85% of income toward charitable objects. Large corpus donations or year-end grants make 85% difficult. Incorrect corpus vs non-corpus treatment triggers CIT(Exemptions) demand notices.</td><td>Monthly application tracking. Corpus vs non-corpus classified at receipt. Form 10 filed for accumulation if needed. Advisory on spending timing.</td></tr><tr><td>Donor Reporting and Grant Utilisation</td><td>International donors, Indian CSR corporates, government agencies each require different formats. 5-10 concurrent grants need programme-wise, donor-wise, period-wise reports reconciling with audited financials.</td><td>Multi-donor fund tracking system. Programme-wise and donor-wise reports. Grant utilisation certificates. Budget vs actual per project.</td></tr><tr><td>Schedule IX-C Online Filing</td><td>charity.maharashtra.gov.in portal: technical glitches, format requirements, IX-D addition (2019 amendment). Filing difficulties without dedicated compliance support.</td><td>Patron handles full IX-C online submission. IX-D prepared by auditor. Format compliance verified before upload.</td></tr>

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
            <h2 class="section-title">NGO Accounting Fees in Mumbai - 2026</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Fee Component</th><th>Amount</th></tr></thead>
                    <tbody>
                        <tr><td>Small Trust / Society (Domestic Only)</td><td>Rs 8,000 - Rs 15,000/month (5-7 days onboarding)</td></tr><tr><td>Medium Trust with 12A/80G</td><td>Rs 15,000 - Rs 30,000/month (7 days)</td></tr><tr><td>Section 8 Company</td><td>Rs 20,000 - Rs 45,000/month (7-10 days)</td></tr><tr><td>FCRA-Registered NGO</td><td>Rs 25,000 - Rs 60,000/month (7-10 days)</td></tr><tr><td>Large Multi-Donor International NGO</td><td>Rs 50,000 - Rs 2,00,000/month (10-15 days)</td></tr>

                    </tbody>
                </table>
                </div>
                <p style="margin-top:16px;font-size:13px;color:var(--text-muted);font-style:italic;">All fees and charges listed are indicative only and do not constitute a binding offer. Final amounts may vary depending on the volume of work and the complexity involved.</p>
                <p style="margin-top:16px;">Professional service charges for drafting, filing, and representation are separate from the statutory fees. The exact fee depends on the complexity of the case, disputed amount, and number of hearings required. Contact us for a detailed quote.</p>
                <p style="margin-top:16px;"><strong>Get a free NGO Accounting in Mumbai consultation - <a href="tel:+919459456700">Call +91 945 945 6700</a> or <a href="https://wa.me/919459456700?text=Hello%2C%20I%20just%20visited%20your%20NGO%20Accounting%20Mumbai%20page.%20I%20would%20like%20to%20know%20more%20about%20it." target="_blank" rel="noopener">WhatsApp us</a>. No-obligation assessment.</strong></p>
            </div>
        </div>
    </div>
</section>

<!-- SECTION 11: TIMELINE -->
<section class="content-section" id="timeline-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">NGO Accounting Timeline</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Stage</th><th>Estimated Timeline</th></tr></thead>
                    <tbody>
                        <tr><td>Onboarding + Assessment</td><td>5-7 days (Marine Lines Mumbai)</td></tr><tr><td>Accounts Balanced</td><td>31 March (year-end)</td></tr><tr><td>Form 10BD (80G Donations)</td><td>By 31 May</td></tr><tr><td>FCRA FC-4</td><td>By 30 June (even nil receipts)</td></tr><tr><td>Form 10B/10BB Audit Report</td><td>By 30 September</td></tr><tr><td>Schedule IX-C (Charity Commissioner)</td><td>Within 6 months of 31 March</td></tr><tr><td>ITR-7</td><td>By 31 October</td></tr>

                    </tbody>
                </table>
                </div>
                <div class="highlight-box" style="margin-top:16px;">
                    
                    <p><strong>Critical:</strong> Late ITR-7 = Rs 5,000 penalty. 12A/80G non-renewal = total loss of tax exemption. FCRA FC-4 missed = show-cause → suspension → no foreign donations. Charity Commissioner IX-C delay = inquiry + surcharge. 10BD not filed by 31 May = 80G donors cannot claim deduction.</p>

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
            <h2 class="section-title">Why Choose Patron for NGO Accounting in Mumbai</h2>
        </div>
        <div class="features-grid"><article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><h3 class="feature-title">Marine Lines Office</h3><p class="feature-text">Walk-in for NGO trustees and directors from Nariman Point, BKC, Colaba, Andheri, Fort. Face-to-face compliance reviews and audit discussions.</p></article><article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4"/></svg></div><h3 class="feature-title">12A + 80G + FCRA + IX-C</h3><p class="feature-text">All four compliance streams managed from one desk. No other Mumbai CA bundles Charity Commissioner, CIT(Exemptions), MHA, and RoC filings together.</p></article><article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg></div><h3 class="feature-title">Multi-Donor Fund Tracking</h3><p class="feature-text">Programme-wise, donor-wise, restricted/unrestricted. Grant utilisation reports per donor format. FCRA 20% cap monitored monthly. 85% application tracked.</p></article><article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><path d="M12 6v6l4 2"/></svg></div><h3 class="feature-title">10,000+ Businesses</h3><p class="feature-text">Including public trusts, societies, Section 8 companies, FCRA NGOs, and CSR recipients across Mumbai. 15+ years. 4.9 Google rating.</p></article></div>
    </div>
</section>

<!-- SECTION 12A: SOCIAL PROOF -->
<section class="content-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Trusted by 10,000+ Businesses Across India</h2>
            <div class="content-text">
                
                <p><strong>10,000+ Businesses | 4.9 Google Rating | 50,000+ Docs Filed | 15+ Years</strong></p><p>Including public trusts, registered societies, Section 8 companies, FCRA NGOs, and CSR recipients across Mumbai. Offices in Pune, Mumbai, Delhi, Gurugram.</p>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 13: SELF-FILING vs PROFESSIONAL COMPARISON -->
<section class="content-section" id="comparison-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Accounting by NGO Entity Type in Mumbai</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Entity Type</th><th>Accounting Obligation</th><th>Mumbai Note</th></tr></thead>
                    <tbody>
                        <tr><td>Public Charitable Trust</td><td>S.33 audit, IX-C to Charity Commissioner, ITR-7, Form 10B/10BB, 12A/80G</td><td>Maharashtra Public Trusts Act 1950; property register mandatory; IX-D for auditor</td></tr><tr><td>Registered Society</td><td>AGM, annual report to Registrar, ITR-7, Form 10B/10BB, 12A/80G</td><td>Maharashtra Societies Registration; renewal every 5 years</td></tr><tr><td>Section 8 Company</td><td>Companies Act (AOC-4, MGT-7, board meetings) + ITR-7 + Form 10B + 12A/80G</td><td>RoC Mumbai; highest governance; preferred by corporate CSR</td></tr><tr><td>FCRA-Registered NGO</td><td>All above + separate FCRA books + FC-4 by 30 June + 20% admin cap + SBI account</td><td>MHA; 5-year renewal; Rs 15 lakh domestic prerequisite</td></tr><tr><td>CSR Recipient</td><td>CSR-1 + NITI Aayog DARPAN + utilisation reports + impact documentation</td><td>Mumbai corporates: Tata, Reliance, Godrej, Mahindra</td></tr>

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
            <h2 class="section-title">Related Accounting and Compliance Services</h2>
            <div class="content-text">
                
                <ul><li><a href="#">NGO Accounting in India</a></li><li><a href="/ngo-registration">NGO Registration</a></li><li><a href="/accounting-services/mumbai">Accounting Services in Mumbai</a></li><li><a href="/statutory-audit/mumbai">Statutory Audit in Mumbai</a></li><li><a href="/tds-return-filing-24q">TDS Return Filing</a></li><li><a href="/internal-audit">Internal Audit</a></li></ul>

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
                
                <p><strong>Maharashtra Public Trusts Act 1950:</strong> S.33: annual CA audit. Accounts balanced 31 March. Schedule IX-C (BS + I&amp;E + audit report) with Charity Commissioner within 6 months. IX-D (2019): auditor submits PAN, 12A number, ITR details. Property register. Online at charity.maharashtra.gov.in.</p><p><strong>Income Tax (NGO):</strong> S.12A/12AB: tax exemption. S.80G: donor deduction. Form 10B (≤ Rs 5 Cr) / 10BB (larger). ITR-7. 85% application rule. Form 10 for accumulation. Form 10BD by 31 May. Post-2025: 10-year renewal small trusts; 5 years others.</p><p><strong>FCRA 2010:</strong> Designated SBI (New Delhi). 20% admin cap. FC-4 by 30 June (even nil). 5-year renewal. Rs 15L domestic prerequisite. Separate books. CA declaration.</p><p><strong>Portals:</strong> <a href="https://charity.maharashtra.gov.in" target="_blank" rel="noopener">Charity Commissioner</a> | <a href="https://incometaxindia.gov.in" target="_blank" rel="noopener">Income Tax</a> | <a href="https://fcraonline.nic.in" target="_blank" rel="noopener">FCRA Online</a></p>

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
                    <h2 class="faq-expanded__title">FAQs - NGO Accounting in Mumbai</h2>
                    <p class="faq-expanded__lead">Answers to common questions. Call +91 945 945 6700.</p>
                    @include('partials.bigin-form', [
                        'variant'  => 'compact',
                        'service'  => 'NGO Accounting in Mumbai',
                        'city'     => 'Mumbai',
                    ])
                </aside>
                <div class="faq-expanded__list">
                    <div class="faq-expanded__item" id="faq-1">
                        <h3 class="faq-expanded__q">What accounting is required for NGOs in Mumbai?</h3>
                        <div class="faq-expanded__a"><p>Accrual-based books, annual CA audit (mandatory S.33 Maharashtra Public Trusts Act for trusts), Schedule IX-C with Charity Commissioner, ITR-7 with Form 10B/10BB for 12A/80G entities, and FC-4 with MHA if receiving foreign funds. R&P, I&E, Balance Sheet are standard financial statements.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-2">
                        <h3 class="faq-expanded__q">Is audit mandatory for trusts registered under 12A?</h3>
                        <div class="faq-expanded__a"><p>Yes. Mandatory under two provisions: S.33 Maharashtra Public Trusts Act (all public trusts regardless of income) and Income Tax Act (Form 10B/10BB for 12A entities). CA auditor required. Report filed with both Charity Commissioner (IX-C) and Income Tax (with ITR-7).</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-3">
                        <h3 class="faq-expanded__q">How much does NGO accounting cost in Mumbai?</h3>
                        <div class="faq-expanded__a"><p>Small trust/society (domestic): Rs 8,000-15,000/month. Medium with 12A/80G: Rs 15,000-30,000. Section 8 company: Rs 20,000-45,000. FCRA NGO: Rs 25,000-60,000. Large multi-donor international NGO: Rs 50,000-2,00,000.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-4">
                        <h3 class="faq-expanded__q">What is Schedule IX-C filing with Charity Commissioner?</h3>
                        <div class="faq-expanded__a"><p>Prescribed format under Maharashtra Public Trusts Rules for annual accounts. Balance sheet + I&E + CA audit report. 2019 amendment added IX-D (PAN, 12A number, ITR details for preceding 3 years by auditor). Filed online at charity.maharashtra.gov.in within 6 months of 31 March.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-5">
                        <h3 class="faq-expanded__q">How does FCRA accounting work for Mumbai NGOs?</h3>
                        <div class="faq-expanded__a"><p>Separate books for foreign contributions. All foreign funds via designated SBI (New Delhi). Admin expenses ≤ 20% of foreign receipts. FC-4 annually by 30 June, even nil. CA declaration accompanies. Patron maintains parallel FCRA books and monitors 20% cap monthly.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-6">
                        <h3 class="faq-expanded__q">Can an NGO receive CSR funds without 80G registration?</h3>
                        <div class="faq-expanded__a"><p>CSR-1 registration (not 80G) is mandatory for CSR funds under S.135 Companies Act. But most Mumbai corporates prefer 80G-registered NGOs for shareholders' tax benefit. NITI Aayog DARPAN also practically required. Patron handles CSR-1, DARPAN, and 80G registration together.</p></div>
                    </div>
                </div>
            </div>


            <!-- Quick Answers -->
            <div class="highlight-box" style="margin-top:32px;">
                <p><strong>Quick Answers</strong></p>
                <p><strong>NGO ka audit kab hona chahiye?</strong> 31 March ko accounts balance karo, 6 mahine ke andar Charity Commissioner ko IX-C file karo, 30 September tak Form 10B/10BB ready, ITR-7 31 October tak.</p><p><strong>12A aur 80G mein kya fark hai?</strong> 12A se NGO ka income tax exempt. 80G se donors ko tax deduction milta hai. Dono saath Form 10A se register karte hain.</p><p><strong>FCRA wale NGO ko alag books?</strong> Haan - foreign funds ke liye alag books mandatory. SBI designated account. Admin cost 20% se zyada nahi ho sakta.</p>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 18: URGENCY CTA -->
<section class="content-section" style="background: var(--orange-lighter) !important; border-left: 4px solid var(--orange);">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">12A Non-Renewal = Total Loss of Tax Exemption. Start Today.</h2>
            <div class="content-text">
                
                <p>Late ITR-7: Rs 5,000 + interest. 12A/80G non-renewal: all surplus taxable. FCRA FC-4 missed: show-cause → suspension → no foreign donations. Charity Commissioner IX-C delay: inquiry + surcharge. 10BD not filed by 31 May: 80G donors can't claim deduction. CSR corporates stop funding non-compliant NGOs.</p><p><strong>Patron onboards in 5-7 days. <a href="tel:+919459456700">Call +91 945 945 6700</a> or <a href="https://wa.me/919459456700?text=Hello%2C%20I%20just%20visited%20your%20NGO%20Accounting%20Mumbai%20page.%20I%20would%20like%20to%20know%20more%20about%20it." target="_blank" rel="noopener">WhatsApp us</a>. From Rs 8,000/month.</strong></p>

            </div>
        </div>
    </div>
</section>

<!-- CONCLUSION + CTA BLOCK (Dark) -->
<section class="content-section" style="background: var(--blue) !important;">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title" style="color:#FFFFFF !important;">Your NGO, Compliant Across Every Authority</h2>
            <div class="content-text" style="text-align:left;">
                
                <p style="color:rgba(255,255,255,0.85);">NGO accounting in Mumbai ensures compliance with Maharashtra Public Trusts Act (Charity Commissioner IX-C), Income Tax (12A/80G, ITR-7, Form 10B), FCRA (FC-4, 20% cap), and Companies Act (Section 8). For trusts, societies, FCRA NGOs, and CSR recipients across Nariman Point, BKC, Colaba, Andheri.</p><p style="color:rgba(255,255,255,0.85);">Patron Accounting, Marine Lines, Mumbai. Multi-authority compliance from one desk. 15+ years, 10,000+ businesses, 4.9 Google rating.</p>

            </div>
            <div style="display:flex;gap:14px;flex-wrap:wrap;margin-top:24px;">
                <a href="tel:+919459456700" style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:var(--orange);color:#fff;border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#128222; Call +91 945 945 6700</a>
                <a href="https://wa.me/919459456700?text=Hello%2C%20I%20just%20visited%20your%20NGO%20Accounting%20Mumbai%20page.%20I%20would%20like%20to%20know%20more%20about%20it." target="_blank" style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:#25D366;color:#fff;border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;" rel="noopener">&#128172; WhatsApp Us</a>
                <a href="mailto:sales@patronaccounting.com?subject=Enquiry%20for%20NGO%20Accounting%20Mumbai&body=Hello%2C%20I%20just%20visited%20your%20NGO%20Accounting%20Mumbai%20page.%20I%20would%20like%20to%20know%20more%20about%20it.%0A%0AThank%20you." style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:transparent;color:#fff;border:2px solid rgba(255,255,255,0.3);border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#9993;&#65039; Email Us</a>
            </div>
            <p style="color:rgba(255,255,255,0.7);font-size:13px;margin-top:16px;">Book a Free Consultation - No Obligation.</p>
        </div>
    </div>
</section>

<!-- GSTAT STATE BENCH CITY PAGES (32 Pages) -->
<section class="content-section" style="padding:48px 32px;background:var(--gray-50);">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title" style="text-align:center;margin-bottom:12px;">NGO Accounting Across India</h2>
            <p style="text-align:center;color:var(--text-muted);font-size:15px;margin-bottom:40px;">Patron offers CA-led NGO accounting in 8 major cities.</p>
       
            <div class="pa-city-block" style="margin-bottom:40px;"><div class="pa-city-grid"><a href="#" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Pune</div><div class="pa-card-sub">Maharashtra</div></div></a><div class="pa-city-card" style="opacity:0.6; pointer-events:none; border:2px solid var(--orange); position:relative;"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Mumbai</div><div class="pa-card-sub">Maharashtra</div></div><span style="position:absolute; top:6px; right:8px; font-size:10px; color:var(--orange); font-weight:700; text-transform:uppercase; letter-spacing:0.5px;">You're here</span></div><a href="#" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Delhi</div><div class="pa-card-sub">Delhi NCR</div></div></a><a href="#" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Gurugram</div><div class="pa-card-sub">Haryana</div></div></a><a href="#" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Bangalore</div><div class="pa-card-sub">Karnataka</div></div></a><a href="#" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Hyderabad</div><div class="pa-card-sub">Telangana</div></div></a><a href="#" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Chennai</div><div class="pa-card-sub">Tamil Nadu</div></div></a><a href="#" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Kolkata</div><div class="pa-card-sub">West Bengal</div></div></a></div></div><div class="pa-city-block"><div class="pa-block-title">Related Services in Mumbai</div><div class="pa-block-sub">NGO compliance and accounting</div><div class="pa-cross-grid"><a href="/ngo-registration" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">NGO Registration</div><div class="pa-card-sub">India</div></div></a><a href="/accounting-services/mumbai" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Accounting Services</div><div class="pa-card-sub">Mumbai</div></div></a><a href="/statutory-audit/mumbai" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Statutory Audit</div><div class="pa-card-sub">Mumbai</div></div></a><a href="/tds-return-filing-24q" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">TDS Returns</div><div class="pa-card-sub">India</div></div></a><a href="/internal-audit" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Internal Audit</div><div class="pa-card-sub">India</div></div></a><a href="/payroll-services" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Payroll Services</div><div class="pa-card-sub">India</div></div></a></div></div>
        </div>
    </div>
</section>

<!-- CONTENT FRESHNESS FOOTER -->
<section class="content-section" style="padding:32px;">
    <div class="content-container">
        <div class="text-content" style="font-size:13px;color:var(--text-muted);">
            <p><strong>Content Created:</strong> 20 March 2026 &nbsp;|&nbsp; <strong>Last Updated:</strong> <span id="lastUpdatedFooter">20 March 2026</span> &nbsp;|&nbsp; <strong>Next Review:</strong> 20 June 2026 &nbsp;|&nbsp; <strong>Reviewed By:</strong> CA &amp; CS Team, Patron Accounting LLP</p>
            <p>This page is reviewed quarterly (Freshness Tier 1) to reflect 12A/80G renewal rule changes, FCRA amendments, Charity Commissioner portal updates, and CSR compliance evolution. Next review: June 2026.</p>
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






<!-- ============================================
     CONSULTATION FORM — Country Dropdown + Validation + Bigin Integration
     ============================================ -->


<!-- Bigin WebForm Script (handles form POST to Bigin servers) -->

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
