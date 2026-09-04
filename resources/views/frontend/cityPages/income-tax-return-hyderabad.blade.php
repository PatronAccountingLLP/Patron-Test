@extends('layouts.service-app')
@push('styles')
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Barlow:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,400&family=DM+Sans:opsz,wght@9..40,400;9..40,500;9..40,600;9..40,700&display=swap" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
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
@include('partials.page-css', ['file' => 'css/site.css'])
@endpush

@section('meta')
    <title>Income Tax Return Filing in Hyderabad – ITR Forms &amp; Due</title>
    <meta name="description" content="CA-managed ITR filing in Hyderabad. Old vs new regime, HRA 50% metro, ESOP/RSU, capital gains. Due 31 July 2026. Call +91 945 945 6700.">
    <link rel="canonical" href="/income-tax-return/hyderabad">
    <meta name="robots" content="index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1">
    <meta property="og:title" content="Income Tax Return Filing in Hyderabad – ITR Forms &amp; Due">
    <meta property="og:description" content="CA-managed ITR filing Hyderabad. Regime analysis, HRA 50%, ESOP. Due 31 July 2026. Call +91 945 945 6700.">
    <meta property="og:url" content="/income-tax-return/hyderabad">
    <meta property="og:type" content="website"><meta property="og:site_name" content="Patron Accounting">
    <meta property="og:image" content="https://www.patronaccounting.com/images/og-default-square.png">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="1200">
    <meta property="og:image:type" content="image/png">
    <meta property="og:image:secure_url" content="https://www.patronaccounting.com/images/og-default-square.png">
    <meta property="og:image:alt" content="Patron Accounting - partner you can rely on">
    <meta name="twitter:card" content="summary_large_image"><meta name="twitter:title" content="Income Tax Return Filing in Hyderabad – ITR Forms &amp; Due">
    <meta name="twitter:description" content="ITR filing Hyderabad. Old vs new regime. HRA 50%. Due 31 Jul 2026. Call +91 945 945 6700.">
    <meta name="twitter:image" content="https://www.patronaccounting.com/images/og-default-square.png">
@endsection
@section('schema')
    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@graph": [
        {
          "@type": "Service",
          "name": "ITR Filing in Hyderabad",
          "description": "CA-managed ITR filing in Hyderabad. Old vs new regime, HRA 50% metro, ESOP/RSU, capital gains. Due 31 July 2026. Call +91 945 945 6700.",
          "url": "https://www.patronaccounting.com/income-tax-return/hyderabad",
          "serviceType": "ITR Filing in Hyderabad",
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
            "url": "https://www.patronaccounting.com/income-tax-return/hyderabad",
            "price": "1499"
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
              "name": "Income Tax Return",
              "item": "https://www.patronaccounting.com/income-tax-return"
            },
            {
              "@type": "ListItem",
              "position": 3,
              "name": "ITR Filing Hyderabad",
              "item": "https://www.patronaccounting.com/income-tax-return/hyderabad"
            }
          ]
        },
        {
          "@type": "FAQPage",
          "mainEntity": [
            {
              "@type": "Question",
              "name": "How to file ITR in Hyderabad?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "Collect Form 16. Verify 26AS/AIS. Select regime. Compute tax. File on incometax.gov.in. Verify via Aadhaar OTP. Due 31 July 2026."
              }
            },
            {
              "@type": "Question",
              "name": "What is ITR due date FY 2025-26?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "31 July 2026 salaried. 31 August non-audit business. 31 October audit. 31 December belated. 31 March revised."
              }
            },
            {
              "@type": "Question",
              "name": "Which ITR form to use?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "ITR-1 salary up to 50L. ITR-2 capital gains. ITR-3 business. ITR-4 presumptive. ITR-5 LLP. ITR-6 company. ITR-7 trust."
              }
            },
            {
              "@type": "Question",
              "name": "What is late filing penalty?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "Rs 5,000 if income above 5L. Rs 1,000 below. Plus 1% monthly interest on unpaid tax. Cannot carry forward losses."
              }
            },
            {
              "@type": "Question",
              "name": "Is HRA 50% for Hyderabad?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "Yes Hyderabad is metro. Old regime HRA at 50% of basic salary vs 40% for non-metro. Significant tax saving."
              }
            },
            {
              "@type": "Question",
              "name": "What is IT Act 2025 transition?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "FY 2025-26 ITR still under IT Act 1961. New IT Act 2025 from Tax Year 2026-27. New forms and section numbers."
              }
            },
            {
              "@type": "Question",
              "name": "Do NRIs file ITR?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "Yes if Indian income exceeds exemption. Rental income property sale bank interest. DTAA benefits available."
              }
            },
            {
              "@type": "Question",
              "name": "Old vs new regime?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "HITEC City employees with HRA 80C NPS often save 10K-50K in old regime. Minimal deductions prefer new regime. CA computes both."
              }
            }
          ]
        }
      ]
    }
</script>

@endsection

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
                        ITR Filing in Hyderabad: CA-Managed Income Tax Return for Every Taxpayer
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
                            <p class="mb-0 text-dark benefit-paragraph"><span>Due Date::</span> 31 July 2026 (ITR-1/2) | 31 Aug 2026 (ITR-3/4) | 31 Oct 2026 (audit)</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Forms::</span> ITR-1 (Sahaj) to ITR-7 based on income type and taxpayer category</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Regime::</span> New tax regime default (115BAC) | Old regime opt-out available</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Transition::</span> IT Act 1961 for AY 2026-27 | IT Act 2025 from Tax Year 2026-27</p>
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
                        <a href="https://wa.me/919459456700?text=Hello%2C%20I%20just%20visited%20your%20ITR%20Filing%20page.%20I%20would%20like%20to%20know%20more%20about%20it." target="_blank" class="btn-sample text-decoration-none" rel="noopener">
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
                                            'service'  => 'Income Tax Return',
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
    'ctaText'    => 'Hyderabad taxpayers trust Patron for ITR filing, regime optimisation, and IT notice protection.',
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
<a href="#what-section" class="toc-btn">What Is ITR</a>
<a href="#who-section" class="toc-btn">Who Files</a>
<a href="#services-section" class="toc-btn">Services</a>
<a href="#procedure-section" class="toc-btn">Process</a>
<a href="#documents-section" class="toc-btn">Documents</a>
<a href="#challenges-section" class="toc-btn">Challenges</a>
<a href="#fees-section" class="toc-btn">Fees</a>
<a href="#timeline-section" class="toc-btn">Due Dates</a>
<a href="#benefits-section" class="toc-btn">Why Patron</a>
<a href="#comparison-section" class="toc-btn">Old vs New Regime</a>
<a href="#faq-section" class="toc-btn">FAQs</a>
        </div>
        <button class="toc-arrow right" id="tocRight">&#10095;</button>
    </div>
</div>

<!-- SECTION 2: OVERVIEW / INTRO + TL;DR -->
<section class="content-section" id="overview-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">ITR Filing in Hyderabad: Overview</h2>
            <div class="content-text">
                <div class="highlight-box" style="margin-bottom:20px;">
                    <p><strong>&#128204; TL;DR - Income Tax Return Services at a Glance</strong></p>
                    <p>ITR filing in Hyderabad for FY 2025-26 (AY 2026-27) is governed by the Income Tax Act, 1961 with due date 31 July 2026 for salaried individuals (ITR-1/2) and 31 August 2026 for non-audit business (ITR-3/4). New tax regime under Section 115BAC is default - lower rates with fewer deductions. Old regime (with 80C, 80D, HRA) available by opt-out. Hyderabad qualifies as metro for 50% HRA exemption under old regime. Filed on incometax.gov.in.</p>
                </div>
                <p>Hyderabad's diverse taxpayer base includes 15 lakh+ IT professionals (Form 16, HRA 50% metro, ESOP), freelancers (44ADA), business owners (44AD), property sellers with capital gains, NRIs with rental income, companies (ITR-6), LLPs (ITR-5), and trusts (ITR-7). Learn more about <a href="/income-tax-return">Income Tax Return Filing across India</a>.</p>
                <p>2026 marks a critical transition: FY 2025-26 ITR is under IT Act 1961, but from Tax Year 2026-27, IT Act 2025 takes effect. Patron's CA handles all categories - from simple salary to ESOP/RSU, NRI income, and business returns. Same CA manages accounting, <a href="/gst-registration/hyderabad">GST</a>, and <a href="/payroll-services/hyderabad">payroll</a>.</p>
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
                <h2 class="section-title">What Is ITR Filing?</h2>
                <div class="content-text what-is-definition">
                    
                    <p>ITR filing is the mandatory annual process of declaring total income, claiming deductions, computing tax liability, and reporting tax already paid (TDS, advance tax) to the Income Tax Department via the e-filing portal.</p>
<p>Every individual, HUF, firm, LLP, company, or trust exceeding the basic exemption limit must file ITR. The correct form (ITR-1 through ITR-7) depends on income sources and taxpayer category.</p>
<p>For Hyderabad taxpayers: collect Form 16, verify Form 26AS/AIS, compute income under chosen regime, claim deductions (if old regime), compute tax, and file on incometax.gov.in. Patron handles regime selection, 26AS reconciliation, computation, filing, and verification.</p>

                </div>
                <div class="highlight-box" style="margin-top:20px;">
                    <p><strong>Key Terms for Income Tax Return:</strong></p>
                    <ul>
<li><strong>ITR-1 (Sahaj):</strong> Salary + 1 house property + other sources ≤ Rs 50 lakh</li>
<li><strong>ITR-2:</strong> Salary + capital gains or multiple properties</li>
<li><strong>Section 115BAC:</strong> New tax regime (default) with lower rates</li>
<li><strong>HRA 50%:</strong> Hyderabad is metro - 50% of basic for HRA exemption in old regime</li>
<li><strong>Form 26AS:</strong> Tax credit statement showing all TDS, advance tax, refunds</li>
<li><strong>AIS:</strong> Annual Information Statement with high-value transactions</li>
<li><strong>Section 234F:</strong> Late filing fee - Rs 5,000 (income > Rs 5L)</li>
<li><strong>IT Act 2025:</strong> New Act effective from Tax Year 2026-27 onwards</li>
</ul>

                </div>
            </div>
            <div class="column-image">
                <div class="illustration-placeholder">
                    <div class="illustration-icon" style="max-width:240px;">
                        <svg viewBox="0 0 200 180" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <!-- ITR/Tax illustration -->
                            <rect x="30" y="35" width="140" height="95" rx="8" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/>
                            <!-- ITR form -->
                            <rect x="50" y="45" width="100" height="65" rx="6" fill="#fff" stroke="#14365F" stroke-width="1.5"/>
                            <rect x="50" y="45" width="100" height="16" rx="6" fill="#14365F"/>
                            <text x="100" y="57" font-size="8" fill="#fff" font-weight="700" text-anchor="middle" font-family="Arial, sans-serif">ITR</text>
                            <!-- Income lines -->
                            <text x="60" y="74" font-size="5" fill="#14365F" font-weight="600" font-family="Arial, sans-serif">Salary</text>
                            <text x="60" y="84" font-size="5" fill="#14365F" font-weight="600" font-family="Arial, sans-serif">Cap Gains</text>
                            <text x="60" y="94" font-size="5" fill="#14365F" font-weight="600" font-family="Arial, sans-serif">Business</text>
                            <!-- Tax amount -->
                            <text x="130" y="94" font-size="8" fill="#E8712C" font-weight="700" text-anchor="middle" font-family="Arial, sans-serif">TAX</text>
                            <!-- Check -->
                            <circle cx="140" cy="74" r="10" fill="#E8F5E9" stroke="#25D366" stroke-width="1"/>
                            <path d="M136 74l3 3 5-5" stroke="#25D366" stroke-width="1.5" stroke-linecap="round"/>
                            <!-- Tag -->
                            <rect x="30" y="112" width="55" height="14" rx="4" fill="#FFF3E0" stroke="#F5A623" stroke-width="1"/>
                            <text x="57" y="122" font-size="6" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial, sans-serif">DUE 31 JUL 2026</text>
                            <!-- Label -->
                            <text x="100" y="150" font-size="8" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial, sans-serif">Income Tax Return</text>
                        </svg>
                    </div>
                    <div class="illustration-badge">
                        <span>IT Act, 1961</span>
                        <strong>Income Tax Return</strong>
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
            <h2 class="section-title">Who Needs ITR Filing in Hyderabad?</h2>
            <div class="content-text">
                
                <p><strong>Salaried IT Professionals (HITEC City):</strong> 15 lakh+ employees with Form 16. HRA 50% metro, NPS, ESOP/RSU taxation, multiple employer Form 16s. ITR-1 or ITR-2 with capital gains.</p>
<p><strong>Freelancers and Consultants (Gachibowli):</strong> Presumptive 44ADA (ITR-4) if receipts ≤ Rs 75 lakh. Regular ITR-3 for higher income. TDS on 194J verified against 26AS.</p>
<p><strong>Business Owners (Secunderabad/Old City):</strong> Presumptive 44AD (ITR-4) if turnover ≤ Rs 3 crore. Regular ITR-3 for higher. GST turnover reconciled with ITR.</p>
<p><strong>Property Sellers (Capital Gains):</strong> Hyderabad real estate LTCG/STCG. Section 54/54F exemptions. TDS 194-IA (1%). ITR-2 required.</p>
<p><strong>NRIs with Hyderabad Income:</strong> Rental income, capital gains, bank interest. DTAA benefits. Patron handles NRI ITR with country-specific optimisation.</p>
<p><strong>Companies, LLPs, and Trusts:</strong> ITR-6 (companies, 31 Oct), ITR-5 (LLPs), ITR-7 (trusts/NGOs). Statutory audit required. Patron manages audit + ITR.</p>

            </div>
            </div>
        </div>
    </div>
</section>

<!-- SECTION 5: OUR SERVICES -->
<section class="content-section" id="services-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">ITR Filing Services Included</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Service</th><th>What We Do</th></tr></thead>
                    <tbody>
                        <tr><td>Regime Analysis (Old vs New)</td><td>CA compares tax under both regimes with your actual Hyderabad income: salary, HRA 50%, 80C, 80D, NPS, home loan</td></tr>
<tr><td>Form 26AS / AIS Verification</td><td>All TDS credits, advance tax, high-value transactions verified. Mismatches resolved before filing</td></tr>
<tr><td>Income Computation and Tax</td><td>All income heads computed: salary, house property, capital gains, business, other. Deductions applied. Tax calculated</td></tr>
<tr><td>ITR Form Selection and Filing</td><td>Correct form (ITR-1 to ITR-7) selected. Filed on incometax.gov.in. Verified via Aadhaar OTP/DSC</td></tr>
<tr><td>Refund Tracking</td><td>Excess TDS refund tracked from filing to bank credit. Re-issue requested if needed</td></tr>
<tr><td>Tax Planning for Next Year</td><td>Advance tax, investment declarations, regime selection for upcoming year to minimise 234B/C interest</td></tr>
<tr><td>Revised / Updated Return</td><td>Errors corrected via revised return (by 31 Mar 2027). Updated return (ITR-U) within 4 years</td></tr>
<tr><td>IT Notice Response</td><td>143(1)/143(2) notices responded. Representation before CIT Hyderabad / ITAT if required</td></tr>

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
            <h2 class="section-title">ITR Filing Process in Hyderabad</h2>
            <p class="section-subtitle" style="text-align:left;max-width:100%;">From Form 16 collection to regime analysis, 26AS verification, computation, filing, and refund tracking - here's how Patron files your Hyderabad ITR.</p>
        </header>
        <div class="steps-container">
            <div class="step-card"><div class="step-content"><span class="step-badge">Step 1</span><h3 class="step-title">Collect Documents and Form 16</h3><p class="step-description">Form 16 from employer, Form 16A, 26AS/AIS from IT portal, bank interest certificates, investment proofs (80C/80D/NPS), home loan certificate, rent receipts, capital gains details, business P&L. For NRIs: DTAA details.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> All documents collected</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> 26AS downloaded</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="15" y="5" width="90" height="70" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><text x="60" y="22" font-size="6" fill="#E8712C" font-weight="700" text-anchor="middle" font-family="Arial, sans-serif">FORM 16</text><line x1="30" y1="32" x2="90" y2="32" stroke="#F5A623" stroke-width="2" stroke-linecap="round"/><line x1="30" y1="45" x2="80" y2="45" stroke="#14365F" stroke-width="1.5" opacity="0.3"/><line x1="30" y1="58" x2="75" y2="58" stroke="#14365F" stroke-width="1.5" opacity="0.3"/></svg></div><span class="illustration-label">Documents Ready</span><span class="step-number-large">01</span></div></div></div>
<div class="step-card"><div class="step-content"><span class="step-badge">Step 2</span><h3 class="step-title">Analyse Old vs New Tax Regime</h3><p class="step-description">CA computes tax under both regimes with actual numbers. HITEC City employee with HRA 50% + 80C + NPS: old regime may save Rs 20,000-40,000. Minimal deductions: new regime cheaper. Side-by-side comparison provided.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Both regimes computed</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Optimal selected</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="15" y="10" width="40" height="55" rx="5" fill="#FFF3E0" stroke="#F5A623" stroke-width="1"/><text x="35" y="32" font-size="5" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial, sans-serif">OLD</text><text x="35" y="45" font-size="5" fill="#14365F" font-weight="600" text-anchor="middle" font-family="Arial, sans-serif">HRA+80C</text><rect x="65" y="10" width="40" height="55" rx="5" fill="#E8F5E9" stroke="#25D366" stroke-width="1"/><text x="85" y="32" font-size="5" fill="#25D366" font-weight="700" text-anchor="middle" font-family="Arial, sans-serif">NEW</text><text x="85" y="45" font-size="5" fill="#14365F" font-weight="600" text-anchor="middle" font-family="Arial, sans-serif">115BAC</text></svg></div><span class="illustration-label">Regime Selected</span><span class="step-number-large">02</span></div></div></div>
<div class="step-card"><div class="step-content"><span class="step-badge">Step 3</span><h3 class="step-title">Verify Form 26AS and AIS</h3><p class="step-description">All TDS credits, advance tax, high-value transactions cross-verified. Mismatches from job changes, multiple Form 16s, unreported bank interest identified and resolved before filing.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> 26AS verified</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> AIS matched</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="20" y="10" width="80" height="55" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><text x="60" y="28" font-size="6" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial, sans-serif">26AS</text><text x="60" y="42" font-size="6" fill="#14365F" font-weight="600" text-anchor="middle" font-family="Arial, sans-serif">AIS</text><circle cx="85" cy="60" r="12" fill="#E8F5E9" stroke="#25D366" stroke-width="1.5"/><path d="M80 60l3 3 7-7" stroke="#25D366" stroke-width="2" stroke-linecap="round"/></svg></div><span class="illustration-label">Data Verified</span><span class="step-number-large">03</span></div></div></div>
<div class="step-card"><div class="step-content"><span class="step-badge">Step 4</span><h3 class="step-title">Compute Income, Deductions, and Tax</h3><p class="step-description">All heads: salary (after Rs 75K standard deduction), house property, capital gains (STCG/LTCG), business, other sources. Deductions per chosen regime. Tax with surcharge and 4% cess. TDS credited.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> All heads computed</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Tax optimised</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="20" y="10" width="80" height="55" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><text x="60" y="26" font-size="5" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial, sans-serif">SALARY</text><text x="60" y="38" font-size="5" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial, sans-serif">CAPITAL GAINS</text><text x="60" y="50" font-size="5" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial, sans-serif">BUSINESS</text><text x="60" y="62" font-size="5" fill="#E8712C" font-weight="700" text-anchor="middle" font-family="Arial, sans-serif">TAX COMPUTED</text></svg></div><span class="illustration-label">Tax Computed</span><span class="step-number-large">04</span></div></div></div>
<div class="step-card"><div class="step-content"><span class="step-badge">Step 5</span><h3 class="step-title">File ITR on incometax.gov.in</h3><p class="step-description">Correct form selected. All schedules completed. Return submitted and verified via Aadhaar OTP or DSC. Acknowledgement generated with ITR-V number.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Filed on time</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Aadhaar verified</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="15" y="10" width="90" height="55" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><rect x="15" y="10" width="90" height="16" rx="6" fill="#14365F"/><text x="60" y="22" font-size="7" fill="#fff" font-weight="700" text-anchor="middle" font-family="Arial, sans-serif">ITR FILED</text><text x="60" y="42" font-size="6" fill="#E8712C" font-weight="700" text-anchor="middle" font-family="Arial, sans-serif">ITR-V</text><text x="60" y="55" font-size="5" fill="#14365F" font-weight="600" text-anchor="middle" font-family="Arial, sans-serif">VERIFIED</text></svg></div><span class="illustration-label">ITR Filed</span><span class="step-number-large">05</span></div></div></div>
<div class="step-card"><div class="step-content"><span class="step-badge">Step 6</span><h3 class="step-title">Track Refund / Resolve Notices</h3><p class="step-description">Refund tracked (20-45 days). 143(1) intimation verified. Scrutiny notices (143(2)) responded. CA represents before CIT Hyderabad or ITAT if required.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Refund tracked</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Notices handled</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="20" y="10" width="80" height="55" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><text x="60" y="28" font-size="6" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial, sans-serif">REFUND</text><text x="60" y="42" font-size="6" fill="#25D366" font-weight="700" text-anchor="middle" font-family="Arial, sans-serif">TRACKED</text><text x="60" y="56" font-size="5" fill="#14365F" font-weight="600" text-anchor="middle" font-family="Arial, sans-serif">NOTICES HANDLED</text></svg></div><span class="illustration-label">Fully Compliant</span><span class="step-number-large">06</span></div></div></div>


        </div>
    </div>
</section>

<!-- SECTION 8: DOCUMENTS REQUIRED -->
<section class="content-section" id="documents-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Documents Required</h2>
            <div class="content-text">
                
                <ul>
<li><strong>Form 16:</strong> From Hyderabad employer (salary TDS certificate)</li>
<li><strong>Form 16A:</strong> TDS on non-salary payments (interest, professional fees)</li>
<li><strong>Form 26AS / AIS:</strong> Downloaded from IT portal for TDS/transaction verification</li>
<li><strong>Investment Proofs:</strong> 80C (PPF, ELSS, LIC), 80D (health insurance), NPS, home loan certificate</li>
<li><strong>Rent Receipts:</strong> For HRA exemption (50% metro rate for Hyderabad)</li>
<li><strong>Capital Gains:</strong> Property sale deed, stock/MF statements, cost of acquisition</li>
<li><strong>Business P&L:</strong> For ITR-3/4 filers (income and expense details)</li>
</ul>
<div class="highlight-box" style="margin-top:16px;"><p><strong>Hyderabad-Specific Tip:</strong> HITEC City employees changing jobs mid-year receive two Form 16s. Both must be consolidated for accurate ITR. TDS may be insufficient if the new employer doesn't account for previous salary. Patron reconciles multiple Form 16s and ensures correct tax computation.</p></div>

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
                        <tr><td>Wrong Regime Selected</td><td>HITEC City employees lose Rs 10K-50K by choosing wrong regime</td><td>Patron computes both regimes with actual numbers and recommends optimal</td></tr>
<tr><td>ESOP/RSU Reporting Errors</td><td>Microsoft/Google/Amazon employees with complex perquisite + capital gains</td><td>Patron computes perquisite value, capital gains at sale correctly</td></tr>
<tr><td>26AS/AIS Mismatch</td><td>Job changes, unreported bank interest, multiple TDS sources</td><td>Patron reconciles 26AS/AIS completely before filing</td></tr>
<tr><td>Capital Gains Not Reported</td><td>Property sales and stock transactions missed = IT notices</td><td>Patron captures all capital gains with Section 54/54F exemptions</td></tr>
<tr><td>Late Filing Penalty</td><td>Rs 5,000 fee + 1%/month interest + loss carry-forward denied</td><td>Patron ensures timely filing before all due dates</td></tr>

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
            <h2 class="section-title">ITR Filing Fees in Hyderabad</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Fee Component</th><th>Amount</th></tr></thead>
                    <tbody>
                        <tr><td>ITR-1 (Salary, simple)</td><td>NIL govt fee | Patron Rs 1,499-2,499</td></tr>
<tr><td>ITR-2 (Salary + Capital Gains)</td><td>NIL | Patron Rs 2,999-4,999</td></tr>
<tr><td>ITR-3 (Business/Professional)</td><td>NIL | Patron Rs 3,999-7,999</td></tr>
<tr><td>ITR-4 (Presumptive)</td><td>NIL | Patron Rs 1,999-3,999</td></tr>
<tr><td>ITR-5 (LLP/Firm)</td><td>NIL | Patron Rs 4,999-7,999</td></tr>
<tr><td>ITR-6 (Company)</td><td>NIL | Patron Rs 7,999-14,999</td></tr>
<tr><td>ITR-7 (Trust/NGO)</td><td>NIL | Patron Rs 4,999-7,999</td></tr>
<tr><td>NRI ITR</td><td>NIL | Patron Rs 4,999-9,999</td></tr>
<tr><td>Patron Accounting Professional Fees</td><td>Starting from INR 1,499 (Exl GST and Govt. Charges)</td></tr>

                    </tbody>
                </table>
                </div>
                <p style="margin-top:16px;font-size:13px;color:var(--text-muted);font-style:italic;">All fees and charges listed are indicative only and do not constitute a binding offer. Final amounts may vary depending on the volume of work and the complexity involved.</p>
                <p style="margin-top:16px;">Professional service charges for drafting, filing, and representation are separate from the statutory fees. The exact fee depends on the complexity of the case, disputed amount, and number of hearings required. Contact us for a detailed quote.</p>
                <p style="margin-top:16px;"><strong>Get a free Income Tax Return consultation - <a href="tel:+919459456700">Call +91 945 945 6700</a> or <a href="https://wa.me/919459456700?text=Hello%2C%20I%20just%20visited%20your%20ITR%20Filing%20page.%20I%20would%20like%20to%20know%20more%20about%20it." target="_blank" rel="noopener">WhatsApp us</a>. No-obligation assessment.</strong></p>
            </div>
        </div>
    </div>
</section>

<!-- SECTION 11: TIMELINE -->
<section class="content-section" id="timeline-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">ITR Filing Timeline FY 2025-26</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Stage</th><th>Estimated Timeline</th></tr></thead>
                    <tbody>
                        <tr><td>Salaried / Individual (no audit)</td><td>31 July 2026 (ITR-1 / ITR-2)</td></tr>
<tr><td>Non-audit business/professional</td><td>31 August 2026 (ITR-3 / ITR-4)</td></tr>
<tr><td>Audit cases (companies)</td><td>31 October 2026 (ITR-6 / ITR-5)</td></tr>
<tr><td>Transfer pricing cases</td><td>30 November 2026 (ITR-6)</td></tr>
<tr><td>Belated return</td><td>31 December 2026 (any form)</td></tr>
<tr><td>Revised return</td><td>31 March 2027 (correction of original)</td></tr>
<tr><td>Updated return (ITR-U)</td><td>Within 4 years from end of AY</td></tr>

                    </tbody>
                </table>
                </div>
                <div class="highlight-box" style="margin-top:16px;">
                    
                    <p><strong>Hyderabad Processing Note (Group B):</strong> ITR filing is entirely online on incometax.gov.in. No physical visit to any IT office. Patron handles all filing, verification, refund tracking, and notice response remotely.</p>

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
            <h2 class="section-title">Why Choose Patron for ITR in Hyderabad?</h2>
        </div>
        <div class="features-grid">
<article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg></div><h3>CA-Led Regime Optimisation</h3><p>Detailed computation with actual Hyderabad income. For most HITEC City employees with HRA + 80C + NPS, old regime saves Rs 10,000-50,000.</p></article>
<article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M14 2H6a2 2 0 00-2 2v16a2 2 0 002 2h12a2 2 0 002-2V8z"/><path d="M14 2v6h6"/></svg></div><h3>ESOP/RSU Expertise</h3><p>HITEC City tech employees at Microsoft, Google, Amazon have complex ESOP/RSU. Patron computes perquisite and capital gains correctly.</p></article>
<article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="2" y="3" width="20" height="14" rx="2"/><path d="M8 21h8M12 17v4"/></svg></div><h3>4-Office Authority</h3><p>Offices in Pune, Mumbai, Delhi, Gurugram. Multi-source income with salary in Hyderabad and rental elsewhere gets unified filing.</p></article>
<article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><path d="M12 6v6l4 2"/></svg></div><h3>IT Notice Protection</h3><p>If CIT Hyderabad or ITAT issues notices post-filing, Patron's CA responds and represents. Accurate filing minimises risk.</p></article>
</div>
    </div>
</section>

<!-- SECTION 12A: SOCIAL PROOF -->
<section class="content-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Trusted by Hyderabad Taxpayers</h2>
            <div class="content-text">
                
                <p><strong>10,000+ Businesses Served | 4.9 Google Rating | 50,000+ Documents Filed | 15+ Years</strong></p>
<blockquote style="border-left:4px solid var(--orange);padding:16px 20px;background:var(--orange-lighter);border-radius:0 var(--radius-md) var(--radius-md) 0;margin:20px 0;"><p style="font-style:italic;color:var(--text-primary);margin-bottom:8px;">"Patron saved me Rs 35,000 by correctly computing old vs new regime with HRA at 50% metro rate. They also handled my ESOP taxation correctly. Best CA experience in Hyderabad."</p><p style="font-weight:700;color:var(--blue);margin:0;">- IT Professional, HITEC City</p></blockquote>
<p>With offices in Pune, Mumbai, Delhi, and Gurugram, Patron serves Hyderabad through a digital-first CA team.</p>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 13: SELF-FILING vs PROFESSIONAL COMPARISON -->
<section class="content-section" id="comparison-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Old vs New Tax Regime - Hyderabad Guide</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Feature</th><th>New Regime (115BAC)</th><th>Old Regime (Opt-Out)</th></tr></thead>
                    <tbody>
                        <tr><td>Tax Rates</td><td>Lower (0% to 4L, 5% 4-8L, 10% 8-12L, 15% 12-16L, 20% 16-20L, 25% 20-24L, 30% above 24L)</td><td>Higher with deductions (0% to 2.5L, 5%, 20%, 30%)</td></tr>
<tr><td>Standard Deduction</td><td>Rs 75,000</td><td>Rs 50,000</td></tr>
<tr><td>HRA</td><td>NOT available</td><td>Available (50% basic for Hyderabad metro)</td></tr>
<tr><td>80C</td><td>NOT available</td><td>Up to Rs 1.5L (PPF, ELSS, LIC)</td></tr>
<tr><td>80D</td><td>NOT available</td><td>Up to Rs 25K/50K (health insurance)</td></tr>
<tr><td>NPS 80CCD(2)</td><td>Available (employer)</td><td>Available</td></tr>
<tr><td>Rebate 87A</td><td>Full rebate up to Rs 12L income</td><td>Up to Rs 5L income</td></tr>
<tr><td>Best For Hyderabad</td><td>Minimal deductions, no HRA, income < 12L</td><td>HRA + 80C + 80D + NPS + home loan employees</td></tr>

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
<li><a href="/income-tax-return">Income Tax Return in India</a> - National ITR filing</li>


<li><a href="/gst-registration/hyderabad">GST Registration in Hyderabad</a> - Tax compliance</li>
<li><a href="/payroll-services/hyderabad">Payroll Services in Hyderabad</a> - Salary + TDS</li>
<li><a href="/private-limited-company-registration/hyderabad">Pvt Ltd Registration in Hyderabad</a> - Company formation</li>
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
<li>Income Tax Act, 1961 (for FY 2025-26 / AY 2026-27)</li>
<li>Income Tax Act, 2025 (from Tax Year 2026-27 onwards)</li>
<li>Section 115BAC (new regime default)</li>
<li>Section 139 (return filing and due dates)</li>
<li>Form 26AS / AIS / TIS (tax credit and transaction verification)</li>
<li>ITR-1 to ITR-7 (forms by income type)</li>
<li>Hyderabad = metro for 50% HRA (Section 10(13A) old regime)</li>
</ul>
<p><strong>Penalties:</strong> Late fee Rs 5,000/Rs 1,000 (234F) | Interest 1%/month (234A/B/C) | Cannot carry forward losses | Prosecution for wilful non-filing (276CC)</p>
<p><strong>Authority:</strong> <a href="https://www.incometax.gov.in" target="_blank" rel="noopener">e-Filing Portal</a> | CIT Hyderabad | ITAT Hyderabad</p>

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
                    <h2 class="faq-expanded__title">FAQs - ITR Filing in Hyderabad</h2>
                    <p class="faq-expanded__lead">Common questions about ITR due dates, forms, old vs new regime, HRA 50%, ESOP, NRI filing, and IT Act 2025 transition.</p>
                    @include('partials.bigin-form', [
                        'variant'  => 'compact',
                        'service'  => 'Income Tax Return',
                        'city'     => 'Hyderabad',
                    ])
                </aside>
                <div class="faq-expanded__list">
                    <div class="faq-expanded__item" id="faq-1">
                        <h3 class="faq-expanded__q">How to file ITR in Hyderabad?</h3>
                        <div class="faq-expanded__a"><p>Collect Form 16 and proofs. Verify 26AS/AIS. Select regime based on CA analysis. Compute income and tax. File correct form on incometax.gov.in. Verify via Aadhaar OTP. Due 31 July 2026 for salaried.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-2">
                        <h3 class="faq-expanded__q">What is ITR due date FY 2025-26?</h3>
                        <div class="faq-expanded__a"><p>31 July 2026 for salaried (ITR-1/2). 31 August for non-audit business (ITR-3/4). 31 October for audit cases. 31 December belated. 31 March revised. Late fee Rs 5,000.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-3">
                        <h3 class="faq-expanded__q">Which ITR form should I use?</h3>
                        <div class="faq-expanded__a"><p>ITR-1: Salary + 1 house ≤ Rs 50L. ITR-2: Salary + capital gains. ITR-3: Business (regular). ITR-4: Presumptive. ITR-5: LLP. ITR-6: Company. ITR-7: Trust/NGO. Patron selects based on your income.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-4">
                        <h3 class="faq-expanded__q">What is late filing penalty?</h3>
                        <div class="faq-expanded__a"><p>Rs 5,000 (income > Rs 5L) or Rs 1,000 under Section 234F. Plus 1%/month interest on unpaid tax. Cannot carry forward capital/business losses. Patron ensures timely filing.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-5">
                        <h3 class="faq-expanded__q">Is HRA 50% for Hyderabad?</h3>
                        <div class="faq-expanded__a"><p>Yes. Hyderabad is metro. Under old regime, HRA exemption at 50% of basic salary (vs 40% non-metro). Computed as minimum of: actual HRA, 50% basic, or rent minus 10% basic.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-6">
                        <h3 class="faq-expanded__q">What is IT Act 2025 transition?</h3>
                        <div class="faq-expanded__a"><p>FY 2025-26 ITR (filed July 2026) still under IT Act 1961. New IT Act 2025 applies from Tax Year 2026-27. New forms and section numbers. Patron manages both transition regimes.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-7">
                        <h3 class="faq-expanded__q">Do NRIs file ITR in Hyderabad?</h3>
                        <div class="faq-expanded__a"><p>Yes if Indian income exceeds exemption: rental income, capital gains from property, bank interest. TDS claimed as credit. DTAA benefits for avoiding double taxation. Patron handles NRI ITR.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-8">
                        <h3 class="faq-expanded__q">How to choose old vs new regime?</h3>
                        <div class="faq-expanded__a"><p>Compare total tax with actual deductions. HITEC City employees with HRA 50% + Rs 1.5L 80C + 80D + NPS: old regime often saves Rs 10K-50K. Minimal deductions: new regime better. Patron provides side-by-side.</p></div>
                    </div>
                </div>
            </div>


            <!-- Quick Answers -->
            <div class="highlight-box" style="margin-top:32px;">
                <p><strong>Quick Answers</strong></p>
                <p><strong>Hyderabad mein ITR kab file karna hai?</strong> Salaried: 31 July 2026. Business (non-audit): 31 August 2026. Audit cases: 31 October. Late filing par Rs 5,000 penalty.</p>
<p><strong>Old ya new regime?</strong> HRA + 80C + NPS claim karte ho toh old regime better. Minimal deductions ho toh new regime. Patron dono calculate karke batata hai.</p>
<p><strong>HRA 50% milta hai?</strong> Haan. Hyderabad metro city hai - old regime mein HRA 50% basic salary se calculate hoti hai.</p>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 18: URGENCY CTA -->
<section class="content-section" style="background: var(--orange-lighter) !important; border-left: 4px solid var(--orange);">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Don't Wait - File Your ITR Today</h2>
            <div class="content-text">
                
                <p>ITR for FY 2025-26 is due 31 July 2026 (salaried) and 31 August 2026 (business). Late filing attracts Rs 5,000 penalty plus 1% monthly interest. Losses cannot be carried forward. Wrong regime selection costs Rs 10,000-50,000. Start your ITR preparation now with Patron's CA.</p>

            </div>
        </div>
    </div>
</section>

<!-- CONCLUSION + CTA BLOCK (Dark) -->
<section class="content-section" style="background: var(--blue) !important;">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title" style="color:#FFFFFF !important;">Get Started with ITR Filing in Hyderabad</h2>
            <div class="content-text" style="text-align:left;">
                
                <p style="color:rgba(255,255,255,0.9);font-size:16px;line-height:1.7;">ITR filing in Hyderabad covers every taxpayer - from HITEC City IT professionals with HRA 50% and ESOP taxation, to freelancers, business owners, property sellers, NRIs, companies, and trusts. With the IT Act 2025 transition and regime complexity, CA-managed filing ensures maximum savings.</p>
<p style="color:rgba(255,255,255,0.9);font-size:16px;line-height:1.7;">Patron Accounting serves Hyderabad taxpayers through a digital-first CA team backed by offices in Pune, Mumbai, Delhi, and Gurugram. Your CA handles regime analysis, 26AS reconciliation, computation, filing, refund tracking, and IT notice response.</p>
<p style="color:rgba(255,255,255,0.9);font-size:16px;line-height:1.7;">Patron Accounting LLP has served 10,000+ businesses, filed 50,000+ documents, and maintained a 4.9 Google rating across 15+ years of chartered accountancy practice.</p>

            </div>
            <div style="display:flex;gap:14px;flex-wrap:wrap;margin-top:24px;">
                <a href="tel:+919459456700" style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:var(--orange);color:#fff;border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#128222; Call +91 945 945 6700</a>
                <a href="https://wa.me/919459456700?text=Hello%2C%20I%20just%20visited%20your%20ITR%20Filing%20page.%20I%20would%20like%20to%20know%20more%20about%20it." target="_blank" style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:#25D366;color:#fff;border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;" rel="noopener">&#128172; WhatsApp Us</a>
                <a href="mailto:sales@patronaccounting.com?subject=Enquiry%20for%20ITR%20Filing&body=Hello%2C%20I%20just%20visited%20your%20ITR%20Filing%20page.%20I%20would%20like%20to%20know%20more%20about%20it.%0A%0AThank%20you." style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:transparent;color:#fff;border:2px solid rgba(255,255,255,0.3);border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#9993;&#65039; Email Us</a>
            </div>
            <p style="color:rgba(255,255,255,0.7);font-size:13px;margin-top:16px;">Book a Free Consultation - No Obligation.</p>
        </div>
    </div>
</section>

<!-- GSTAT STATE BENCH CITY PAGES (32 Pages) -->
<section class="content-section" style="padding:48px 32px;background:var(--gray-50);">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title" style="text-align:center;margin-bottom:12px;">ITR Filing Across India</h2>
            <p style="text-align:center;color:var(--text-muted);font-size:15px;margin-bottom:40px;">CA-managed income tax return filing in 8 cities. Select your city.</p>
        
            <div class="pa-city-block" style="margin-bottom:40px;"><div class="pa-city-grid"><a href="/income-tax-return/pune" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Pune</div><div class="pa-card-sub">Maharashtra</div></div></a>
<a href="/income-tax-return/mumbai" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Mumbai</div><div class="pa-card-sub">Maharashtra</div></div></a>
<a href="/income-tax-return/delhi" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Delhi</div><div class="pa-card-sub">Delhi NCR</div></div></a>
<a href="/income-tax-return-filing/gurugram" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Gurugram</div><div class="pa-card-sub">Haryana</div></div></a>
<a href="/income-tax-return/bangalore" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Bangalore</div><div class="pa-card-sub">Karnataka</div></div></a>
<div class="pa-city-card" style="opacity:0.6;pointer-events:none;border:2px solid var(--orange);position:relative;"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Hyderabad</div><div class="pa-card-sub">Telangana</div></div><span style="position:absolute;top:6px;right:8px;font-size:10px;color:var(--orange);font-weight:700;text-transform:uppercase;letter-spacing:0.5px;">You're here</span></div>
<a href="/income-tax-return/chennai" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Chennai</div><div class="pa-card-sub">Tamil Nadu</div></div></a>
<a href="/income-tax-return/kolkata" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Kolkata</div><div class="pa-card-sub">West Bengal</div></div></a>
</div></div>
<div class="pa-city-block"><div class="pa-block-title">Related Services in Hyderabad</div><div class="pa-block-sub">End-to-end tax compliance and accounting</div><div class="pa-cross-grid"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Accounting Services</div><div class="pa-card-sub">Hyderabad</div></div>
<a href="/gst-registration/hyderabad" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">GST Registration</div><div class="pa-card-sub">Hyderabad</div></div></a>
<a href="/payroll-services/hyderabad" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Payroll Services</div><div class="pa-card-sub">Hyderabad</div></div></a>
<a href="/private-limited-company-registration/hyderabad" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Pvt Ltd Registration</div><div class="pa-card-sub">Hyderabad</div></div></a>
<a href="/tan-registration/hyderabad" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">TAN Registration</div><div class="pa-card-sub">Hyderabad</div></div></a>
<a href="/pan-registration/hyderabad" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">PAN Registration</div><div class="pa-card-sub">Hyderabad</div></div></a>
</div></div>
        </div>
    </div>
</section>

<!-- CONTENT FRESHNESS FOOTER -->
<section class="content-section" style="padding:32px;">
    <div class="content-container">
        <div class="text-content" style="font-size:13px;color:var(--text-muted);">
            <p><strong>Content Created:</strong> 08 April 2026 &nbsp;|&nbsp; <strong>Last Updated:</strong> <span id="lastUpdatedFooter">08 April 2026</span> &nbsp;|&nbsp; <strong>Next Review:</strong> 08 October 2026 &nbsp;|&nbsp; <strong>Reviewed By:</strong> CA &amp; CS Team, Patron Accounting LLP</p>
            <p>This content covers ITR filing in Hyderabad including old vs new regime, HRA 50% metro, ESOP/RSU, capital gains, NRI ITR, IT Act 2025 transition, and all due dates for FY 2025-26. Reviewed semi-annually. Freshness Tier 1.</p>
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

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
@endsection
