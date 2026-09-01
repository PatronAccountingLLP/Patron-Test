
@extends('layouts.service-app')

<!-- External Dependencies (loaded by master layout in production) -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Barlow:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,400&family=DM+Sans:opsz,wght@9..40,400;9..40,500;9..40,600;9..40,700&display=swap" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

@section('meta')
    <title>PF Return Filing in Mumbai - ECR, UAN & Due Date</title>
    <meta name="description" content="CA-assisted PF return filing in Mumbai. Monthly ECR, annual Form 3A/6A, EPFO compliance. Serving BKC, Powai, Andheri MIDC employers. Call +91 945 945 6700.">
    <link rel="canonical" href="/pf-return/mumbai">
    <meta name="robots" content="index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1">
    <meta property="og:title" content="PF Return Filing in Mumbai - ECR, UAN & Due Date">
    <meta property="og:description" content="CA-assisted PF return filing in Mumbai. Monthly ECR, annual Form 3A/6A, EPFO compliance. Serving BKC, Powai, Andheri MIDC employers. Call +91 945 945 6700.">
    <meta property="og:url" content="/pf-return/mumbai">
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="Patron Accounting">
    <meta property="og:image" content="https://www.patronaccounting.com/images/og-default-square.png">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="1200">
    <meta property="og:image:type" content="image/png">
    <meta property="og:image:secure_url" content="https://www.patronaccounting.com/images/og-default-square.png">
    <meta property="og:image:alt" content="Patron Accounting - partner you can rely on">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="PF Return Filing in Mumbai - ECR, UAN & Due Date">
    <meta name="twitter:description" content="CA-assisted PF return filing in Mumbai. Monthly ECR, annual Form 3A/6A, EPFO compliance. Serving BKC, Powai, Andheri MIDC employers. Call +91 945 945 6700.">
    <meta name="twitter:image" content="https://www.patronaccounting.com/images/og-default-square.png">
@endsection

@section('schema')
    <script type="application/ld+json">{
  "@context": "https://schema.org",
  "@graph": [
    {
      "@type": "Service",
      "name": "PF Return Filing in Mumbai - ECR, UAN & Due Date",
      "description": "CA-assisted PF return filing in Mumbai. Monthly ECR, annual Form 3A/6A, EPFO compliance. Serving BKC, Powai, Andheri MIDC employers. Call +91 945 945 6700.",
      "url": "https://www.patronaccounting.com/pf-return/mumbai",
      "serviceType": "PF Return Filing in Mumbai - ECR, UAN & Due Date",
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
          "name": "Pf Returns",
          "item": "https://www.patronaccounting.com/pf-return"
        },
        {
          "@type": "ListItem",
          "position": 3,
          "name": "PF Return Filing in Mumbai - ECR, UAN & Due Date",
          "item": "https://www.patronaccounting.com/pf-return/mumbai"
        }
      ]
    },
    {
      "@type": "FAQPage",
      "mainEntity": [
        {
          "@type": "Question",
          "name": "Which EPFO office handles PF returns in Mumbai?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "PF returns ECR are filed online on the EPFO Unified Portal. The EPFO Regional Office at Bandra Kurla Complex BKC Mumbai 400051 is the jurisdictional office for Mumbai establishments. Sub-Regional Offices at Thane and Navi Mumbai handle those areas. Audits inspections and penalty proceedings are conducted by the Regional Office. Patron Marine Lines office coordinates with EPFO BKC for all Mumbai clients."
          }
        },
        {
          "@type": "Question",
          "name": "What is the due date for monthly PF return?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "The monthly ECR must be filed on the EPFO Unified Portal by the 15th of the month following the wage month. For example ECR for March wages is due by 15 April. Under the revamped ECR system September 2025 onwards the return and payment are separate steps but both must be completed by the 15th. Late filing attracts 12 percent interest and 5 to 25 percent damages."
          }
        },
        {
          "@type": "Question",
          "name": "What is the employer and employee PF contribution?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Both employer and employee contribute 12 percent of basic wages plus dearness allowance. The employee entire 12 percent goes to EPF. The employer 12 percent is split as 3.67 percent to EPF and 8.33 percent to EPS capped at Rs 15,000 wage base. Additionally the employer pays 0.50 percent admin charges and 0.50 percent EDLI. Total employer cost is approximately 13 percent of EPF wages."
          }
        },
        {
          "@type": "Question",
          "name": "What is the penalty for late PF filing in Mumbai?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Late PF contribution attracts Section 7Q interest at 12 percent per annum on the delayed amount and Section 14B damages ranging from 5 to 25 percent of arrears based on delay period. Under Section 14(2A) persistent defaulters can face imprisonment of up to 1 year. The revamped ECR system automatically calculates interest and damages for delayed payments."
          }
        },
        {
          "@type": "Question",
          "name": "Is PF mandatory for all employees in Mumbai?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "PF is mandatory for all employees earning basic plus DA up to Rs 15,000 per month in establishments with 20 or more employees. Employees earning above Rs 15,000 at joining may be excluded unless they opt in. Once a member they continue contributing even above Rs 15,000. Many Mumbai IT companies at Powai contribute on actual salary as a voluntary benefit."
          }
        },
        {
          "@type": "Question",
          "name": "What is the revamped ECR system?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "The EPFO launched a revamped ECR system effective from wage month September 2025. Key changes include separation of return filing from payment as a two-step process, system-based validations detecting errors before submission, automatic interest and damage calculation, pension contribution checks for retirement-age employees, and limited scope for post-submission revisions."
          }
        },
        {
          "@type": "Question",
          "name": "What is the annual PF return and when is it due?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "The annual PF return comprises Form 3A which is employee-wise annual contribution statement and Form 6A which is consolidated establishment-level annual statement. It is due by 30 April for the preceding financial year. The annual return consolidates all 12 monthly ECRs and is verified by EPFO during audits."
          }
        },
        {
          "@type": "Question",
          "name": "Can Mumbai employers with fewer than 20 employees register for PF?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Yes while PF registration is mandatory for establishments with 20 or more employees smaller establishments can voluntarily register under the EPF Act. Once registered all provisions including monthly ECR filing contribution deposit and penalty rules apply equally. Many Mumbai startups at Powai and Lower Parel with 10 to 15 employees voluntarily register to attract talent."
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
                        PF Return Filing in Mumbai: Monthly ECR, Annual Compliance, Zero Penalties
                    </h1>

                    <div class="expert-attribution-box">
                        <span class="eab-check"><svg width="16" height="16" viewBox="0 0 24 24" fill="currentColor"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg></span>
                        <span class="eab-title">Reviewed by CA and CS Team, Patron Accounting LLP</span>
                        <span class="eab-meta">
                            <span>ICAI & ICSI Registered</span><span class="eab-sep">|</span>
                            <span>15+ Years Experience</span><span class="eab-sep">|</span>
                            <span>Last Updated: <span id="lastUpdated">24 March 2026</span></span>
                        </span>
                        <a href="#" class="eab-link">Verify Credentials &rarr;</a>
                    </div>

                    <div class="mb-4">
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Monthly ECR:</span> Due by 15th of following month on EPFO Unified Portal. Revamped ECR system (Sep 2025): separated return from payment, stricter validations</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Annual Return:</span> Form 3A (employee-wise) + Form 6A (consolidated) by 30 April. Reconciled with 12 months of monthly ECR data</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Contribution:</span> 12% Employee + 12% Employer (3.67% EPF + 8.33% EPS) + 0.50% admin + 0.50% EDLI. Total employer cost ~13%</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Penalty:</span> Section 7Q: 12% p.a. interest on delayed contributions. Section 14B: 5-25% damages based on delay period. Auto-calculated under revamped ECR</p>
                        </div>
                    </div>

                    <p class="mb-4 fw-bold" style="color: var(--blue); font-size: 15px;">Visit our Mumbai office or get started online - trusted by 10,000+ businesses across India</p>

                    <div class="hero-cta">
                        <a href="tel:+919459456700" class="btn-video text-decoration-none">
                            <span class="play-circle"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="width:14px;height:14px;color:#fff"><path d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/></svg></span>
                            Call +91 945 945 6700
                        </a>
                        <a href="mailto:sales@patronaccounting.com?subject=PF%20Returns%20Mumbai&body=Hello%20Patron%2C%0A%0AI%20need%20PF%20filing.%0A%0AThank%20you." class="btn-sample text-decoration-none">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="width:18px;height:18px;"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,12 2,6"/></svg>
                            Email Us
                        </a>
                        <a href="https://wa.me/919459456700?text=Hi%2C%20I%20need%20PF%20return%20filing%20in%20Mumbai.%20Please%20share%20details." target="_blank" class="btn-sample text-decoration-none">
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
                                            'service'  => 'PF Returns',
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
            <a href="#what-section" class="toc-btn">What Are PF Returns</a>
            <a href="#who-section" class="toc-btn">Who Files</a>
            <a href="#services-section" class="toc-btn">Services</a>
            <a href="#procedure-section" class="toc-btn">Process</a>
            <a href="#documents-section" class="toc-btn">Documents</a>
            <a href="#challenges-section" class="toc-btn">Challenges</a>
            <a href="#fees-section" class="toc-btn">Costs</a>
            <a href="#timeline-section" class="toc-btn">Timeline</a>
            <a href="#benefits-section" class="toc-btn">Why Patron</a>
            <a href="#comparison-section" class="toc-btn">Contribution</a>
            <a href="#faq-section" class="toc-btn">FAQs</a>
        </div>
        <button class="toc-arrow right" id="tocRight">&#10095;</button>
    </div>
</div>

<!-- SECTION 2: OVERVIEW / INTRO + TL;DR -->
<section class="content-section" id="overview-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">PF Return Filing in Mumbai: Complete Overview</h2>
            <div class="content-text">
                <div class="highlight-box" style="margin-bottom:20px;">
                    <p><strong>&#128204; TL;DR - PF Returns Services at a Glance</strong></p>
                    <p>Monthly ECR by 15th on EPFO Unified Portal. Annual Form 3A + 6A by 30 April. 12% employee + 12% employer (3.67% EPF + 8.33% EPS). Revamped ECR (Sep 2025): separated return/payment, stricter validations. Section 7Q: 12% p.a. interest. Section 14B: 5-25% damages. EPFO Regional Office BKC. 20+ employees = mandatory. 50% CTC wage rule under new code.</p>
                </div>
                <p>Mumbai is India's largest private sector employment hub and top PF contributor city. EPFO Regional Office at BKC processes ECRs from thousands of establishments - BKC BFSI, Powai IT, Andheri MIDC, hospitality, retail across the city.</p>
                <div class="table-responsive-wrapper" style="margin-top:20px;">
                <table>
                    <thead><tr><th>Parameter</th><th>Detail</th></tr></thead>
                    <tbody>
                        <tr><td>Monthly ECR</td><td>By 15th of following month on Unified Portal</td></tr>
                        <tr><td>Annual Return</td><td>Form 3A + 6A by 30 April</td></tr>
                        <tr><td>Employee Contribution</td><td>12% of basic + DA (entire to EPF)</td></tr>
                        <tr><td>Employer Contribution</td><td>3.67% EPF + 8.33% EPS + 0.50% admin + 0.50% EDLI</td></tr>
                        <tr><td>Interest (Late)</td><td>Section 7Q: 12% p.a. on delayed amount</td></tr>
                        <tr><td>Damages (Late)</td><td>Section 14B: 5-25% of arrears by delay period</td></tr>
                        <tr><td>EPFO Office</td><td>Regional Office BKC, Mumbai 400051</td></tr>
                    </tbody>
                </table>
                </div>
                <p</p>
                <p>Patron's Marine Lines office handles end-to-end PF compliance. Related: <a href="/pf-registration">PF registration</a>, <a href="/payroll-services">payroll services</a>, <a href="/esic-calculation-and-compliance-services">ESIC compliance</a>, <a href="#">gratuity compliance</a>.</p>
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
                <h2 class="section-title">What Are PF Returns?</h2>
                <div class="content-text what-is-definition">
                    
                    <p>PF returns are periodic filings by EPFO-registered employers on the Unified Portal reporting employee-wise wages, PF contributions deducted, and employer contributions deposited, enabling EPFO to credit each employee's provident fund account.</p>
                    <p>Monthly ECR: text file with UAN, wages, contributions. Revamped ECR (Sep 2025): separated return from payment, stricter validations, auto-calculated interest/damages. Annual: Form 3A + 6A by 30 April.</p>
                    <p>Filed on <a href="https://www.epfindia.gov.in" target="_blank" rel="noopener">EPFO portal</a>. EPFO Regional Office BKC oversees Mumbai. Related: <a href="/pf-registration">PF registration</a>, <a href="/payroll-services">payroll</a>.</p>

                </div>
                <div class="highlight-box" style="margin-top:20px;">
                    <p><strong>Key Terms for PF Returns:</strong></p>
                    <ul>
                        <li><strong>ECR:</strong> Monthly Electronic Challan-cum-Return. Employee-wise UAN, wages, contributions. By 15th. Revamped Sep 2025: two-step return + payment.</li>
                        <li><strong>12% + 12%:</strong> Employee 12% to EPF. Employer 3.67% EPF + 8.33% EPS (capped Rs 15K). Plus admin 0.50% + EDLI 0.50%. Total employer ~13%.</li>
                        <li><strong>Section 7Q:</strong> 12% p.a. interest on delayed contributions. Auto-calculated. Non-negotiable. From due date until payment.</li>
                        <li><strong>Section 14B:</strong> 5-25% damages on arrears. 5% up to 2 months, escalating to 25% beyond 6 months. In addition to S.7Q interest.</li>
                        <li><strong>Revamped ECR (Sep 2025):</strong> Separated return/payment. Stricter validations. Pension checks. Limited revisions. Pre-upload validation critical.</li>
                        <li><strong>50% CTC Rule:</strong> Social Security Code 2020 (21 Nov 2025). Wages >= 50% of CTC for PF base. Increases contributions for low-basic structures.</li>
                    </ul>

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
                            <text x="100" y="170" font-size="10" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial, sans-serif">PF Returns</text>
                        </svg>
                    </div>
                    <div class="illustration-badge">
                        <span>ECR</span>
                        <strong>Filed</strong>
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
            <h2 class="section-title">Who Must File PF Returns in Mumbai?</h2>
            <div class="content-text">
                
                <p><strong>BFSI (BKC, Nariman Point):</strong> Largest PF volumes. 2,000-10,000+ employee ECRs monthly. Complex salary structures. EPFO BKC jurisdiction. <a href="/payroll-services">Payroll services</a>.</p>
                <p><strong>IT/ITES (Powai, Andheri):</strong> High attrition = frequent UAN generation and exits. Many contribute on actual salary (above Rs 15K). Revamped ECR strictness critical. <a href="/pf-registration">PF registration</a>.</p>
                <p><strong>Manufacturing (Andheri MIDC, Thane-Belapur):</strong> Factory workers covered since 20+ employees. Monthly ECR from attendance + payroll. EPFO Sub-Regional Office Thane. <a href="/esic-calculation-and-compliance-services">ESIC compliance</a>.</p>
                <p><strong>Hospitality + BPO (Bandra, Andheri, Goregaon):</strong> Seasonal workforce variations. Shift-based overtime capture. High attrition UAN management. <a href="#">Gratuity compliance</a>.</p>
                <p><strong>Any Establishment (20+ Employees):</strong> Retail, education, healthcare, NGOs, professional firms. Voluntary for smaller. Startups at Powai voluntarily register. <a href="/private-limited-company-compliance">Company compliance</a>.</p>

            </div>
            </div>
        </div>
    </div>
</section>

<!-- SECTION 5: OUR SERVICES -->
<section class="content-section" id="services-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">PF Return Filing Services</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Service</th><th>What We Do</th></tr></thead>
                    <tbody>
                        <tr><td>Monthly ECR Filing</td><td>Employee-wise ECR preparation: UAN, wages, EPF/EPS/EDLI. Text file in EPFO format. Upload by 12th (3-day buffer). Pre-upload validation prevents rejection. BKC BFSI bulk processing for 1,000-5,000+ employees</td></tr>
                        <tr><td>Contribution Payment</td><td>Challan generation from approved ECR. Payment via authorised banks (SBI, HDFC, ICICI). Separated from return under revamped ECR. Patron processes by 14th - 1 day buffer before 15th deadline</td></tr>
                        <tr><td>Annual Return (3A + 6A)</td><td>Form 3A: employee-wise annual statement. Form 6A: consolidated establishment statement. 12 months ECR reconciled with payroll before submission by 30 April</td></tr>
                        <tr><td>UAN/KYC Management</td><td>UAN generation for new employees within 3 days of joining. Aadhaar, PAN, bank account seeding. KYC verification mandatory before ECR processing. Weekly exit date updates</td></tr>
                        <tr><td>Revamped ECR Compliance</td><td>Adapted to Sep 2025 system: separated return-payment workflow, enhanced validations, pension checks. Pre-aligned data formats for all Mumbai clients. Zero ECR rejection rate</td></tr>
                        <tr><td>Wage Restructuring Advisory</td><td>Social Security Code 2020: wages >= 50% of CTC. Impact analysis on PF contributions, take-home pay. CTC restructuring for Mumbai employers with 30-40% basic structures</td></tr>
                        <tr><td>EPFO Audit Support</td><td>Representation during EPFO audits and inspections at BKC Regional Office. Record preparation, contribution reconciliation, assessment order response, penalty proceedings</td></tr>
                        <tr><td>Multi-PF Code Management</td><td>For Mumbai groups with separate PF codes per subsidiary/branch. Individual ECR per code. Form 13 transfer processing. Cross-code data coordination</td></tr>

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
            <h2 class="section-title">PF Return Filing Process in Mumbai</h2>
            <p class="section-subtitle" style="text-align:left;max-width:100%;">Our 6-step process covers complete PF compliance from employee master maintenance through payroll compilation, ECR upload, challan generation, payment, to annual return filing.</p>
        </header>
        <div class="steps-container">
            <div class="step-card">
    <div class="step-content">
        <span class="step-badge">Step 1</span>
        <h3 class="step-title">Maintain Updated Employee Master</h3>
        <p class="step-description">Ensure all employees have active UANs with Aadhaar, PAN, bank seeded and verified. Update new joiners (UAN in 3 days), exits (date of exit), salary revisions before ECR. Revamped ECR rejects unverified KYC. Patron processes UAN registrations within 3 days of joining.</p>
        <div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>UANs active</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>KYC seeded</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Exits updated</span></div>
    </div>
    <div class="step-visual">
        <div class="step-illustration">
            <div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="20" y="8" width="80" height="70" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><text x="60" y="28" font-size="5" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">UAN MASTER</text><line x1="30" y1="35" x2="90" y2="35" stroke="#F5A623" stroke-width="1.5"/><text x="60" y="50" font-size="5" fill="#E8712C" font-weight="600" text-anchor="middle" font-family="Arial">KYC Seeded</text><text x="60" y="65" font-size="5" fill="#14365F" font-weight="500" text-anchor="middle" font-family="Arial">Exits Updated</text></svg></div>
            <span class="illustration-label">Master Ready</span>
            <span class="step-number-large">01</span>
        </div>
    </div>
</div>
<div class="step-card">
    <div class="step-content">
        <span class="step-badge">Step 2</span>
        <h3 class="step-title">Compile Monthly Payroll Data for ECR</h3>
        <p class="step-description">Extract employee-wise: UAN, name, gross wages, EPF wages (basic + DA), EPF contribution (employee 12%), EPF (employer 3.67%), EPS (employer 8.33%), EDLI wages. Determine Rs 15,000 ceiling applicability. Patron integrates with Tally, Zoho, greytHR, custom systems.</p>
        <div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Wages extracted</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>EPF/EPS split</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Ceiling checked</span></div>
    </div>
    <div class="step-visual">
        <div class="step-illustration">
            <div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="15" y="8" width="90" height="70" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><text x="60" y="25" font-size="5" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">PAYROLL</text><text x="60" y="42" font-size="5" fill="#10B981" font-weight="600" text-anchor="middle" font-family="Arial">Wages Extracted</text><text x="60" y="55" font-size="5" fill="#F5A623" font-weight="500" text-anchor="middle" font-family="Arial">EPF/EPS Split</text><text x="60" y="68" font-size="5" fill="#14365F" font-weight="500" text-anchor="middle" font-family="Arial">Rs 15K Ceiling</text></svg></div>
            <span class="illustration-label">Data Compiled</span>
            <span class="step-number-large">02</span>
        </div>
    </div>
</div>
<div class="step-card">
    <div class="step-content">
        <span class="step-badge">Step 3</span>
        <h3 class="step-title">Prepare and Upload ECR on Unified Portal</h3>
        <p class="step-description">Login to unifiedportal-emp.epfindia.gov.in. Upload ECR text file. Revamped system validates UAN status, wage consistency, pension eligibility. Fix flagged errors, re-upload. Patron uploads by 12th - 3-day buffer before 15th deadline.</p>
        <div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>ECR uploaded</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Validations passed</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>3-day buffer</span></div>
    </div>
    <div class="step-visual">
        <div class="step-illustration">
            <div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="15" y="8" width="90" height="70" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><text x="60" y="25" font-size="5" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">UPLOAD ECR</text><text x="60" y="42" font-size="5" fill="#E8712C" font-weight="600" text-anchor="middle" font-family="Arial">By 12th Monthly</text><text x="60" y="55" font-size="5" fill="#F5A623" font-weight="500" text-anchor="middle" font-family="Arial">Validated</text><text x="60" y="68" font-size="5" fill="#14365F" font-weight="500" text-anchor="middle" font-family="Arial">Errors Fixed</text></svg></div>
            <span class="illustration-label">ECR Filed</span>
            <span class="step-number-large">03</span>
        </div>
    </div>
</div>
<div class="step-card">
    <div class="step-content">
        <span class="step-badge">Step 4</span>
        <h3 class="step-title">Approve ECR and Generate Challan</h3>
        <p class="step-description">Portal generates contribution summary. Review and approve. Under revamped system, challan generated separately after return approval. Select payment mode. Patron generates challans by 13th for Mumbai clients.</p>
        <div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Summary reviewed</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>ECR approved</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Challan generated</span></div>
    </div>
    <div class="step-visual">
        <div class="step-illustration">
            <div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="15" y="8" width="90" height="70" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><text x="60" y="25" font-size="5" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">CHALLAN</text><text x="60" y="42" font-size="5" fill="#10B981" font-weight="600" text-anchor="middle" font-family="Arial">Generated</text><text x="60" y="55" font-size="5" fill="#F5A623" font-weight="500" text-anchor="middle" font-family="Arial">Return Approved</text><text x="60" y="68" font-size="5" fill="#14365F" font-weight="500" text-anchor="middle" font-family="Arial">Two-Step System</text></svg></div>
            <span class="illustration-label">Challan Ready</span>
            <span class="step-number-large">04</span>
        </div>
    </div>
</div>
<div class="step-card">
    <div class="step-content">
        <span class="step-badge">Step 5</span>
        <h3 class="step-title">Make Payment Through Authorised Bank</h3>
        <p class="step-description">Pay total PF (employee + employer + admin + EDLI) via EPFO payment gateway using SBI, HDFC, ICICI, PNB internet banking. Must complete by 15th. Revamped ECR auto-calculates interest/damages for any delay. Patron processes by 14th.</p>
        <div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Payment completed</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Receipt saved</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Zero delay</span></div>
    </div>
    <div class="step-visual">
        <div class="step-illustration">
            <div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="15" y="8" width="90" height="70" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><text x="60" y="25" font-size="5" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">PAY</text><text x="60" y="42" font-size="5" fill="#E8712C" font-weight="600" text-anchor="middle" font-family="Arial">By 14th Monthly</text><text x="60" y="55" font-size="5" fill="#10B981" font-weight="500" text-anchor="middle" font-family="Arial">Bank Gateway</text><text x="60" y="68" font-size="5" fill="#14365F" font-weight="500" text-anchor="middle" font-family="Arial">Zero Delay</text></svg></div>
            <span class="illustration-label">Paid</span>
            <span class="step-number-large">05</span>
        </div>
    </div>
</div>
<div class="step-card">
    <div class="step-content">
        <span class="step-badge">Step 6</span>
        <h3 class="step-title">File Annual Return (Form 3A + 6A) by 30 April</h3>
        <p class="step-description">Form 3A: employee-wise annual contributions. Form 6A: consolidated establishment statement. 12 months ECR reconciled with payroll. Download, populate, verify, upload. Patron reconciles before submission for Mumbai clients.</p>
        <div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>12 months reconciled</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>3A + 6A submitted</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Audit-ready</span></div>
    </div>
    <div class="step-visual">
        <div class="step-illustration">
            <div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="25" y="5" width="70" height="75" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><circle cx="60" cy="30" r="14" fill="#E8F5E9" stroke="#10B981" stroke-width="1.5"/><path d="M52 30l6 6 10-10" stroke="#10B981" stroke-width="2.5" stroke-linecap="round"/><text x="60" y="58" font-size="5" fill="#10B981" font-weight="700" text-anchor="middle" font-family="Arial">ANNUAL FILED</text><text x="60" y="70" font-size="4" fill="#14365F" font-weight="600" text-anchor="middle" font-family="Arial">3A + 6A by Apr</text></svg></div>
            <span class="illustration-label">Annual Filed</span>
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
            <h2 class="section-title">Documents Required for PF Return Filing</h2>
            <div class="content-text">
                
                <ul><li><strong>Establishment Registration:</strong> EPFO establishment code, registered address, authorised signatory credentials.</li><li><strong>Employee Master:</strong> UAN, name, joining date, exit date, Aadhaar, PAN, bank account for each employee.</li><li><strong>Monthly Payroll Data:</strong> Employee-wise gross wages, basic + DA, EPF wages, contribution amounts.</li><li><strong>ECR Text File:</strong> EPFO-prescribed format with specific column structure from payroll.</li><li><strong>Bank Account:</strong> Employer's authorised bank linked to EPFO payment gateway.</li><li><strong>KYC for New Employees:</strong> Aadhaar, PAN, cancelled cheque for UAN seeding.</li><li><strong>Previous Month ECR:</strong> For reconciliation and adjustment verification.</li></ul>
                <div class="highlight-box" style="margin-top:16px;">
                    <p><strong>Mumbai Tip:</strong> Employees transferred between BKC head office and branch offices at Thane/Navi Mumbai must have UAN linked to correct establishment code. Same employer = no change. Different PF code (subsidiary/branch) = Form 13 transfer request. Patron tracks inter-establishment transfers for Mumbai-headquartered companies.</p>
                </div>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 9: CHALLENGES -->
<section class="content-section" id="challenges-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Common PF Return Challenges in Mumbai</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Challenge</th><th>Impact</th><th>How Patron Accounting Solves It</th></tr></thead>
                    <tbody>
                        <tr><td>Revamped ECR Adaptation</td><td>Sep 2025 system: separated return/payment, stricter validations, pension checks. Previously tolerated minor errors now trigger rejection. Two-step workflow unfamiliar</td><td>Pre-aligned data formats. Pre-upload validation on all ECR files. Pension contribution checks built into payroll. Zero rejection rate for Patron Mumbai clients</td></tr>
                        <tr><td>High-Volume BKC BFSI ECR</td><td>2,000-10,000+ employee ECRs. Single data error (wrong UAN, wage mismatch) can reject entire file. Revamped system stricter on backend checks</td><td>Bulk ECR processing with automated validation. Error detection before upload. Row-level verification for BFSI clients. 3-day buffer for error resolution</td></tr>
                        <tr><td>Frequent Joiners/Leavers (IT)</td><td>Powai IT: 50-100+ monthly hires and exits. UAN generation, KYC seeding, exit dates must complete before ECR. Aadhaar delays block processing</td><td>UAN generation within 3 days. KYC seeding within 7 days. Weekly exit processing. Employee master always current before ECR upload</td></tr>
                        <tr><td>50% CTC Wage Restructuring</td><td>Social Security Code: wages >= 50% CTC. Basic at 30-40% = PF contribution increases significantly. Rs 1L CTC employee: Rs 3,600/month additional employer cost</td><td>Complete CTC restructuring advisory. Impact modelling on PF, ESI, gratuity, take-home. Phased implementation guidance for Mumbai employers</td></tr>
                        <tr><td>Multiple PF Codes</td><td>Mumbai groups with separate codes per subsidiary/branch. Individual ECR per code. Employee transfers need Form 13. Cross-code coordination challenge</td><td>Individual ECR per PF code managed. Form 13 transfers processed. Cross-code employee tracking. Consolidated compliance dashboard</td></tr>

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
            <h2 class="section-title">PF Return Filing Costs</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Fee Component</th><th>Amount</th></tr></thead>
                    <tbody>
                        <tr><td>ECR Filing (Govt)</td><td>Nil</td></tr>
                        <tr><td>Employee Contribution</td><td>12% of basic + DA</td></tr>
                        <tr><td>Employer (EPF + EPS + Admin + EDLI)</td><td>~13% of basic + DA</td></tr>
                        <tr><td>Late Interest (S.7Q)</td><td>12% p.a.</td></tr>
                        <tr><td>Damages (S.14B)</td><td>5-25% of arrears</td></tr>
                        <tr><td>Patron: Monthly ECR</td><td>Starting Rs 2,000/month</td></tr>
                        <tr><td>Patron: Payroll + PF Bundle</td><td>Starting Rs 4,000/month</td></tr>

                    </tbody>
                </table>
                </div>
                <p style="margin-top:16px;font-size:13px;color:var(--text-muted);font-style:italic;">All fees and charges listed are indicative only and do not constitute a binding offer. Final amounts may vary depending on the volume of work and the complexity involved.</p>
                <p style="margin-top:16px;">Professional service charges for drafting, filing, and representation are separate from the statutory fees. The exact fee depends on the complexity of the case, disputed amount, and number of hearings required. Contact us for a detailed quote.</p>
                <p style="margin-top:16px;"><strong>Get a free PF Returns consultation - <a href="tel:+919459456700">Call +91 945 945 6700</a> or <a href="https://wa.me/919459456700?text=Hi%2C%20I%20need%20PF%20compliance%20in%20Mumbai.%20Please%20help." target="_blank">WhatsApp us</a>. No-obligation assessment.</strong></p>
            </div>
        </div>
    </div>
</section>

<!-- SECTION 11: TIMELINE -->
<section class="content-section" id="timeline-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">PF Return Filing Timeline</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Stage</th><th>Estimated Timeline</th></tr></thead>
                    <tbody>
                        <tr><td>UAN Generation</td><td>Within 3 days of joining</td></tr>
                        <tr><td>KYC Seeding</td><td>Within 7 days of UAN</td></tr>
                        <tr><td>Monthly ECR Upload</td><td>By 15th of following month</td></tr>
                        <tr><td>Monthly Payment</td><td>By 15th of following month</td></tr>
                        <tr><td>Exit Date Update</td><td>Before month-end of exit</td></tr>
                        <tr><td>Annual Return (3A + 6A)</td><td>30 April</td></tr>
                        <tr><td>Patron Buffer</td><td>ECR by 12th | Payment by 14th</td></tr>

                    </tbody>
                </table>
                </div>
                <div class="highlight-box" style="margin-top:16px;">
                    
                    <p><strong>Note:</strong> The 15th deadline is non-negotiable - EPFO does not grant blanket extensions. Rs 10 lakh monthly liability delayed 1 month = Rs 10,000 interest + Rs 50,000-2,50,000 damages. Revamped ECR auto-calculates penalties. Persistent defaults = Section 14(2A) prosecution (1 year imprisonment). Patron files ECR by 12th, pays by 14th - zero-delay for Mumbai clients.</p>

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
            <h2 class="section-title">Why Choose Patron for PF Returns in Mumbai</h2>
        </div>
        <div class="features-grid">
            <article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><h3>Revamped ECR Expertise</h3><p>Processing ECR under new system since Sep 2025. Separated return-payment, pre-upload validation, pension checks. Zero ECR rejections for Mumbai clients.</p></article>
            <article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2"><path d="M12 2L2 7l10 5 10-5-10-5zM2 17l10 5 10-5M2 12l10 5 10-5"/></svg></div><h3>Payroll-Integrated PF</h3><p>ECR generated directly from payroll output. Wages, contributions flow seamlessly. No manual data entry errors. Integrates with Tally, Zoho, greytHR.</p></article>
            <article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2"><rect x="2" y="3" width="20" height="14" rx="2"/><path d="M8 21h8M12 17v4"/></svg></div><h3>EPFO BKC Coordination</h3><p>Coordination with Regional Office at BKC for audits, inspections, damage assessments, penalty proceedings. Familiarity with BKC processing patterns.</p></article>
            <article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2"><circle cx="12" cy="12" r="10"/><path d="M12 6v6l4 2"/></svg></div><h3>3-Day Filing Buffer</h3><p>ECR by 12th, payment by 14th. Zero-penalty compliance. 10,000+ businesses, 4.9 rating, 15+ years, 4 offices across India.</p></article>
        </div>
    </div>
</section>

<!-- SECTION 12A: SOCIAL PROOF -->
<section class="content-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Trusted by Employers Across Mumbai</h2>
            <div class="content-text">
                
                <p><strong>Trust Banner:</strong> 10,000+ Businesses Served | 4.9 Google Rating | 50,000+ Documents Filed | 15+ Years</p>
                <p>Offices in Pune, Mumbai, Delhi, and Gurugram. Payroll-integrated PF compliance. Revamped ECR expertise for employers of all sizes.</p>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 13: SELF-FILING vs PROFESSIONAL COMPARISON -->
<section class="content-section" id="comparison-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">PF Contribution Breakup</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Component</th><th>Employee (%)</th><th>Employer (%)</th></tr></thead>
                    <tbody>
                        <tr><td>EPF (Provident Fund)</td><td>12%</td><td>3.67%</td></tr>
                        <tr><td>EPS (Pension Scheme)</td><td>Nil</td><td>8.33% (capped Rs 15K wage)</td></tr>
                        <tr><td>Admin Charges</td><td>Nil</td><td>0.50% (min Rs 500/month)</td></tr>
                        <tr><td>EDLI (Insurance)</td><td>Nil</td><td>0.50%</td></tr>
                        <tr><td>EDLI Admin</td><td>Nil</td><td>Nil (waived)</td></tr>
                        <tr><td><strong>Total</strong></td><td><strong>12%</strong></td><td><strong>~13%</strong></td></tr>

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
                
                <p>Mumbai employers filing PF returns often need:</p>
                <ul><li><a href="/pf-registration">PF Registration</a> - New establishment registration.</li>
                    <li><a href="/payroll-services">Payroll Services</a> - Monthly payroll processing.</li>
                    <li><a href="/esic-calculation-and-compliance-services">ESIC Compliance</a> - Employee insurance.</li>
                    <li><a href="#">Professional Tax</a> - Maharashtra PT.</li>
                    <li><a href="#">Gratuity Compliance</a> - Gratuity calculation.</li>
                    <li><a href="/accounting-services">Accounting Services</a> - Books and financials.</li></ul>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 15A: LEGAL FRAMEWORK -->
<section class="content-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Legal Framework for PF Returns</h2>
            <div class="content-text">
                
                <p><strong>EPF Act, 1952:</strong></p>
                <ul><li>S.2(A): 20+ employees. S.6: 12%+12% contribution. S.7Q: 12% p.a. interest. S.14B: 5-25% damages. S.14(2A): Prosecution up to 1 year.</li></ul>
                <p style="margin-top:16px;"><strong>Rates:</strong></p>
                <ul><li>Employee 12% to EPF. Employer 3.67% EPF + 8.33% EPS (Rs 15K cap). Admin 0.50% (min Rs 500). EDLI 0.50%. Total ~25% of wages.</li></ul>
                <p style="margin-top:16px;"><strong>Social Security Code 2020 (21 Nov 2025):</strong></p>
                <ul><li>Wages >= 50% CTC. Fixed-term PF from day one. Unified wage definition.</li></ul>
                <p style="margin-top:16px;"><strong>Mumbai:</strong> EPFO Regional Office BKC 400051. <a href="https://www.epfindia.gov.in" target="_blank" rel="noopener">EPFO India</a></p>

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
                    <h2 class="faq-expanded__title">FAQs: PF Returns in Mumbai</h2>
                    <p class="faq-expanded__lead">Get answers about EPFO office, ECR due date, contribution rates, late penalties, mandatory coverage, revamped ECR system, annual return, and voluntary registration for Mumbai employers.</p>
                    @include('partials.bigin-form', [
                        'variant'  => 'compact',
                        'service'  => 'PF Returns',
                        'city'     => 'Mumbai',
                    ])
                </aside>
                <div class="faq-expanded__list">
                    <div class="faq-expanded__item" id="faq-1">
                        <h3 class="faq-expanded__q">Which EPFO office handles PF returns in Mumbai?</h3>
                        <div class="faq-expanded__a"><p>PF returns ECR are filed online on the EPFO Unified Portal. The EPFO Regional Office at Bandra Kurla Complex BKC Mumbai 400051 is the jurisdictional office for Mumbai establishments. Sub-Regional Offices at Thane and Navi Mumbai handle those areas. Audits inspections and penalty proceedings are conducted by the Regional Office. Patron Marine Lines office coordinates with EPFO BKC for all Mumbai clients.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-2">
                        <h3 class="faq-expanded__q">What is the due date for monthly PF return?</h3>
                        <div class="faq-expanded__a"><p>The monthly ECR must be filed on the EPFO Unified Portal by the 15th of the month following the wage month. For example ECR for March wages is due by 15 April. Under the revamped ECR system September 2025 onwards the return and payment are separate steps but both must be completed by the 15th. Late filing attracts 12 percent interest and 5 to 25 percent damages.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-3">
                        <h3 class="faq-expanded__q">What is the employer and employee PF contribution?</h3>
                        <div class="faq-expanded__a"><p>Both employer and employee contribute 12 percent of basic wages plus dearness allowance. The employee entire 12 percent goes to EPF. The employer 12 percent is split as 3.67 percent to EPF and 8.33 percent to EPS capped at Rs 15,000 wage base. Additionally the employer pays 0.50 percent admin charges and 0.50 percent EDLI. Total employer cost is approximately 13 percent of EPF wages.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-4">
                        <h3 class="faq-expanded__q">What is the penalty for late PF filing in Mumbai?</h3>
                        <div class="faq-expanded__a"><p>Late PF contribution attracts Section 7Q interest at 12 percent per annum on the delayed amount and Section 14B damages ranging from 5 to 25 percent of arrears based on delay period. Under Section 14(2A) persistent defaulters can face imprisonment of up to 1 year. The revamped ECR system automatically calculates interest and damages for delayed payments.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-5">
                        <h3 class="faq-expanded__q">Is PF mandatory for all employees in Mumbai?</h3>
                        <div class="faq-expanded__a"><p>PF is mandatory for all employees earning basic plus DA up to Rs 15,000 per month in establishments with 20 or more employees. Employees earning above Rs 15,000 at joining may be excluded unless they opt in. Once a member they continue contributing even above Rs 15,000. Many Mumbai IT companies at Powai contribute on actual salary as a voluntary benefit.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-6">
                        <h3 class="faq-expanded__q">What is the revamped ECR system?</h3>
                        <div class="faq-expanded__a"><p>The EPFO launched a revamped ECR system effective from wage month September 2025. Key changes include separation of return filing from payment as a two-step process, system-based validations detecting errors before submission, automatic interest and damage calculation, pension contribution checks for retirement-age employees, and limited scope for post-submission revisions.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-7">
                        <h3 class="faq-expanded__q">What is the annual PF return and when is it due?</h3>
                        <div class="faq-expanded__a"><p>The annual PF return comprises Form 3A which is employee-wise annual contribution statement and Form 6A which is consolidated establishment-level annual statement. It is due by 30 April for the preceding financial year. The annual return consolidates all 12 monthly ECRs and is verified by EPFO during audits.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-8">
                        <h3 class="faq-expanded__q">Can Mumbai employers with fewer than 20 employees register for PF?</h3>
                        <div class="faq-expanded__a"><p>Yes while PF registration is mandatory for establishments with 20 or more employees smaller establishments can voluntarily register under the EPF Act. Once registered all provisions including monthly ECR filing contribution deposit and penalty rules apply equally. Many Mumbai startups at Powai and Lower Parel with 10 to 15 employees voluntarily register to attract talent.</p></div>
                    </div>
                </div>
            </div>


            <!-- Quick Answers -->
            <div class="highlight-box" style="margin-top:32px;">
                <p><strong>Quick Answers</strong></p>
                <p><strong>PF return kab file karna hota hai?</strong> Monthly ECR 15th tak next month mein EPFO Unified Portal pe. Annual return (3A + 6A) 30 April tak. Late filing pe 12% interest + 5-25% damages.</p>
                <p><strong>Kitna contribute karte hain?</strong> Employee 12% + Employer 12% (3.67% EPF + 8.33% EPS). Plus admin 0.50% + EDLI 0.50%. Total employer ~13%.</p>
                <p><strong>EPFO office kahan hai Mumbai mein?</strong> Regional Office BKC, Mumbai 400051. Sub-Regional Offices Thane/Navi Mumbai. ECR online file hota hai.</p>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 18: URGENCY CTA -->
<section class="content-section" style="background: var(--orange-lighter) !important; border-left: 4px solid var(--orange);">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">The 15th Is Non-Negotiable - File Every Month</h2>
            <div class="content-text">
                
                <p>EPFO does not grant blanket extensions. Rs 10 lakh monthly PF delayed 1 month = Rs 10,000 interest + Rs 50,000-2,50,000 damages. Revamped ECR auto-calculates penalties. Persistent defaults = Section 14(2A) prosecution (1 year imprisonment). Social Security Code 2020 has expanded the contribution base (50% CTC) making amounts higher. EPFO BKC actively audits Mumbai employers.</p>
                <p style="margin-top:16px;"><strong>Get started - <a href="tel:+919459456700">Call +91 945 945 6700</a> or <a href="https://wa.me/919459456700?text=Hi%2C%20I%20need%20PF%20return%20filing%20in%20Mumbai." target="_blank">WhatsApp us</a>.</strong></p>

            </div>
        </div>
    </div>
</section>

<!-- CONCLUSION + CTA BLOCK (Dark) -->
<section class="content-section" style="background: var(--blue) !important;">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title" style="color:#FFFFFF !important;">File by the 12th - Pay by the 14th - Zero Penalties</h2>
            <div class="content-text" style="text-align:left;">
                
                <p style="color:rgba(255,255,255,0.9);">PF return filing in Mumbai is a monthly obligation for every EPFO-registered employer. ECR by 15th, annual 3A+6A by 30 April. 12%+12% contribution. Revamped ECR (Sep 2025) demands stricter accuracy. Section 7Q interest + Section 14B damages auto-calculated.</p>
                <p style="color:rgba(255,255,255,0.9);">BKC BFSI bulk ECR, Powai IT high-attrition UAN management, MIDC factory compliance, 50% CTC wage restructuring - Mumbai's PF landscape requires integrated payroll-PF processing.</p>
                <p style="color:rgba(255,255,255,0.9);">Patron provides payroll-integrated ECR with pre-upload validation, 3-day filing buffer, annual return reconciliation, UAN/KYC management, and EPFO BKC coordination from Marine Lines. 10,000+ businesses, 4.9 rating, 15+ years.</p>

            </div>
            <div style="display:flex;gap:14px;flex-wrap:wrap;margin-top:24px;">
                <a href="tel:+919459456700" style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:var(--orange);color:#fff;border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#128222; Call +91 945 945 6700</a>
                <a href="https://wa.me/919459456700?text=Hi%2C%20I%20need%20PF%20compliance%20in%20Mumbai.%20Please%20help." target="_blank" style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:#25D366;color:#fff;border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#128172; WhatsApp Us</a>
                <a href="mailto:sales@patronaccounting.com?subject=PF%20Returns%20Mumbai&body=Hello%20Patron%2C%0A%0AI%20need%20PF%20return%20filing%20in%20Mumbai.%0A%0APlease%20help.%0A%0AThank%20you." style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:transparent;color:#fff;border:2px solid rgba(255,255,255,0.3);border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#9993;&#65039; Email Us</a>
            </div>
            <p style="color:rgba(255,255,255,0.7);font-size:13px;margin-top:16px;">Book a Free Consultation - No Obligation.</p>
        </div>
    </div>
</section>

<!-- GSTAT STATE BENCH CITY PAGES (32 Pages) -->
<section class="content-section" style="padding:48px 32px;background:var(--gray-50);">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title" style="text-align:center;margin-bottom:12px;">PF Return Filing Across India</h2>
            <p style="text-align:center;color:var(--text-muted);font-size:15px;margin-bottom:40px;">Patron Accounting provides PF return filing services in major cities across India.</p>
            <div class="pa-city-block" style="margin-bottom:40px;">
                <div class="pa-block-title">Available Cities</div>
                <div class="pa-block-sub">PF and payroll compliance</div>
                <div class="pa-city-grid">
                    <a href="/pf-returns/pune" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Pune</div><div class="pa-card-sub">Maharashtra</div></div></a>
                    <div class="pa-city-card" style="opacity:0.6; pointer-events:none; border:2px solid var(--orange); position:relative;"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Mumbai</div><div class="pa-card-sub">Maharashtra</div></div><span style="position:absolute; top:6px; right:8px; font-size:10px; color:var(--orange); font-weight:700; text-transform:uppercase; letter-spacing:0.5px;">You're here</span></div>
                    <a href="/pf-returns/delhi" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Delhi</div><div class="pa-card-sub">Delhi NCR</div></div></a>
                    <a href="#" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Gurugram</div><div class="pa-card-sub">Haryana</div></div></a>
                </div>
            </div>
            <div class="pa-city-block">
                <div class="pa-block-title">Related Services in Mumbai</div>
                <div class="pa-block-sub">Payroll and statutory compliance</div>
                <div class="pa-cross-grid">
                    <a href="/pf-registration" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">PF Registration</div><div class="pa-card-sub">India</div></div></a>
                    <a href="/payroll-services" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Payroll Services</div><div class="pa-card-sub">India</div></div></a>
                    <a href="/esic-calculation-and-compliance-services" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">ESIC Compliance</div><div class="pa-card-sub">India</div></div></a>
                    <a href="#" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Professional Tax</div><div class="pa-card-sub">Maharashtra</div></div></a>
                    <a href="#" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Gratuity Compliance</div><div class="pa-card-sub">India</div></div></a>
                    <a href="/accounting-services" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Accounting Services</div><div class="pa-card-sub">India</div></div></a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- CONTENT FRESHNESS FOOTER -->
<section class="content-section" style="padding:32px;">
    <div class="content-container">
        <div class="text-content" style="font-size:13px;color:var(--text-muted);">
            <p><strong>Content Created:</strong> 24 March 2026 &nbsp;|&nbsp; <strong>Last Updated:</strong> <span id="lastUpdatedFooter">24 March 2026</span> &nbsp;|&nbsp; <strong>Next Review:</strong> 24 June 2026 &nbsp;|&nbsp; <strong>Reviewed By:</strong> CA &amp; CS Team, Patron Accounting LLP</p>
            <p>This page covers PF return filing in Mumbai. Content reviewed quarterly (Freshness Tier 1) as EPFO circulars, ECR system updates, and Social Security Code rules evolve.</p>
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

<script>
// BF-1: Set last updated date dynamically
(function() {
    var opts = { day: 'numeric', month: 'long', year: 'numeric' };
    var dateStr = new Date().toLocaleDateString('en-IN', opts);
    var el1 = document.getElementById('lastUpdated');

    if (el1) el1.textContent = dateStr;
    var el2 = document.getElementById('lastUpdatedFooter');
    if (el2) el2.textContent = dateStr;
})();
</script>

<!-- External JS Dependencies (loaded by master layout in production) -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
@endsection
