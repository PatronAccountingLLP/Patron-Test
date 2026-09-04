
@extends('layouts.service-app')

<!-- External Dependencies (loaded by master layout in production) -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Barlow:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,400&family=DM+Sans:opsz,wght@9..40,400;9..40,500;9..40,600;9..40,700&display=swap" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

@section('meta')
    <title>Income Tax Return in Delhi - ITR Forms, Process & Dates</title>
    <meta name="description" content="CA-assisted ITR filing in Delhi. Income tax return for salaried, business, freelancers and NRIs. New and old regime. Serving CP, Rohini, Okhla. Call +91 945 945 6700.">
    <link rel="canonical" href="/income-tax-return/delhi">
    <meta name="robots" content="index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1">
    <meta property="og:title" content="Income Tax Return in Delhi - ITR Forms, Process & Dates">
    <meta property="og:description" content="CA-assisted ITR filing in Delhi. Income tax return for salaried, business, freelancers and NRIs. New and old regime. Serving CP, Rohini, Okhla. Call +91 945 945 6700.">
    <meta property="og:url" content="/income-tax-return/delhi">
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="Patron Accounting">
    <meta property="og:image" content="https://www.patronaccounting.com/images/og-default-square.png">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="1200">
    <meta property="og:image:type" content="image/png">
    <meta property="og:image:secure_url" content="https://www.patronaccounting.com/images/og-default-square.png">
    <meta property="og:image:alt" content="Patron Accounting - partner you can rely on">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Income Tax Return in Delhi - ITR Forms, Process & Dates">
    <meta name="twitter:description" content="CA-assisted ITR filing in Delhi. Income tax return for salaried, business, freelancers and NRIs. New and old regime. Serving CP, Rohini, Okhla. Call +91 945 945 6700.">
    <meta name="twitter:image" content="https://www.patronaccounting.com/images/og-default-square.png">
@endsection

@section('schema')
    <script type="application/ld+json">{
  "@context": "https://schema.org",
  "@graph": [
    {
      "@type": "Service",
      "name": "ITR Filing in Delhi | Income Tax Return",
      "description": "CA-assisted ITR filing in Delhi. Income tax return for salaried, business, freelancers and NRIs. New and old regime. Serving CP, Rohini, Okhla. Call +91 945 945 6700.",
      "url": "https://www.patronaccounting.com/income-tax-return/delhi",
      "serviceType": "ITR Filing in Delhi | Income Tax Return",
      "areaServed": {
        "@type": "City",
        "name": "Delhi",
        "containedInPlace": {
          "@type": "State",
          "name": "Delhi"
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
        "url": "https://www.patronaccounting.com/income-tax-return/delhi",
        "price": "999"
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
          "name": "ITR Filing: CA-Assisted ITR Services",
          "item": "https://www.patronaccounting.com/income-tax-return"
        },
        {
          "@type": "ListItem",
          "position": 3,
          "name": "ITR Filing in Delhi | Income Tax Return",
          "item": "https://www.patronaccounting.com/income-tax-return/delhi"
        }
      ]
    },
    {
      "@type": "FAQPage",
      "mainEntity": [
        {
          "@type": "Question",
          "name": "How to file ITR in Delhi?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Log into incometax.gov.in using PAN. Select ITR form and AY 2026-27. Fill income details from Form 16, bank statements and investment proofs. Verify against Form 26AS and AIS. Submit and e-verify via Aadhaar OTP within 30 days. Patron's Delhi office in Rohini handles the entire process."
          }
        },
        {
          "@type": "Question",
          "name": "What is the last date for ITR filing for FY 2025-26?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "ITR-1 and ITR-2: 31 July 2026. ITR-3 and ITR-4 (non-audit): 31 August 2026 (extended per Budget 2026). Tax audit cases: 31 October 2026 (audit report by 30 September). Belated return: 31 December 2026 with Rs 5,000 late fee. Revised return: 31 March 2027."
          }
        },
        {
          "@type": "Question",
          "name": "Which ITR form should I use?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "ITR-1 for salaried with income up to Rs 50 lakh (no capital gains). ITR-2 for capital gains, multiple properties or income above Rs 50 lakh. ITR-3 for business income. ITR-4 for presumptive taxation. ITR-5 for firms/LLPs. ITR-6 for companies. Patron determines the correct form for your Delhi income profile."
          }
        },
        {
          "@type": "Question",
          "name": "What is the penalty for late ITR filing?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Late fee under Section 234F: Rs 5,000 (income above Rs 5 lakh), Rs 1,000 (income up to Rs 5 lakh). Interest under Section 234A at 1% per month on unpaid tax. Losses except house property loss cannot be carried forward in belated returns."
          }
        },
        {
          "@type": "Question",
          "name": "Do I need a CA for ITR filing?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "A CA is not legally required for individual ITR (except tax audit cases). However, for Delhi taxpayers with multiple income sources, complex capital gains, AIS discrepancies, business income or NRI status, CA-assisted filing significantly reduces error risk, notice probability and tax liability."
          }
        },
        {
          "@type": "Question",
          "name": "How to check ITR refund status?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Log into incometax.gov.in, go to e-File then Income Tax Returns then View Filed Returns. Processing status and refund amount are displayed. Refunds are typically credited within 20-45 days of e-verification. Ensure correct bank account is pre-validated on the portal. Quick Answers ITR filing kya hai? ITR filing mein aap apni saal bhar ki income IT Department ko declare karte ho incometax.gov.in portal pe. PAN se login, sahi ITR form choose karo, income-deductions bharo, submit karo aur Aadhaar OTP se verify karo. ITR-1/ITR-2 ki last date 31 July 2026 hai. ITR-3/ITR-4 ke liye 31 August 2026 (extended). Late filing pe Rs 5,000 penalty lagti hai. Naya tax regime kya hai? New tax regime default hai. Rs 12 lakh tak income tax-free hai. Lekin 80C, 80D, HRA, home loan jaise deductions nahi milte. Old regime mein deductions mil sakte hain. Dono mein jo kam tax aaye woh choose karo. Patron dono calculate karke best option batata hai. Delhi mein IT office kahan hai? Delhi mein Income Tax offices hain: E2 Civic Centre (New Delhi), CR Building (IP Estate, New Delhi-110002), Aayakar Bhawan (New Delhi-110092). Online sab kuch incometax.gov.in pe hota hai. Helpline: 1800 103 0025."
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
                        ITR Filing in Delhi: CA-Assisted Income Tax Return for Salaried, Business, Freelancers and NRIs
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
                            <p class="mb-0 text-dark benefit-paragraph"><span>Documents:</span> PAN, Aadhaar, Form 16, Form 26AS/AIS, bank statements, investment proofs, capital gains statements, rental income details</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Fees:</span> Patron fee from Rs 999 (salaried ITR-1) | No government fee for e-filing</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Eligibility:</span> All individuals, HUFs, firms, LLPs, companies and trusts with taxable income or mandatory filing requirement</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Timeline:</span> ITR-1/ITR-2: 31 July 2026 | ITR-3/ITR-4 (non-audit): 31 August 2026 | Audit cases: 31 October 2026</p>
                        </div>
                    </div>

                    <p class="mb-4 fw-bold" style="color: var(--blue); font-size: 15px;">10,000+ Businesses Served | 4.9 Google Rating | Trusted by Delhi taxpayers across CP, Rohini, Okhla and Chandni Chowk</p>

                    <div class="hero-cta">
                        <a href="tel:+919459456700" class="btn-video text-decoration-none">
                            <span class="play-circle"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="width:14px;height:14px;color:#fff"><path d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/></svg></span>
                            Call +91 945 945 6700
                        </a>
                        <a href="mailto:sales@patronaccounting.com" class="btn-sample text-decoration-none">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="width:18px;height:18px;"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,12 2,6"/></svg>
                            Email Us
                        </a>
                        <a href="https://wa.me/919459456700?text=Hello%2C%20I%20just%20visited%20your%20ITR%20Filing%20in%20Delhi%20page.%20I%20would%20like%20to%20know%20more%20about%20it." target="_blank" class="btn-sample text-decoration-none" rel="noopener">
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
                                            'service'  => 'ITR Filing in Delhi',
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
    'ctaText'    => 'Get expert CA-assisted ITR filing in Delhi with AIS reconciliation, regime optimisation and 12-month notice support.',
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
            <a href="#who-section" class="toc-btn">Who Needs It</a>
            <a href="#services-section" class="toc-btn">Services</a>
            <a href="#procedure-section" class="toc-btn">Process</a>
            <a href="#documents-section" class="toc-btn">Documents</a>
            <a href="#challenges-section" class="toc-btn">Challenges</a>
            <a href="#fees-section" class="toc-btn">Fees</a>
            <a href="#timeline-section" class="toc-btn">Timeline</a>
            <a href="#benefits-section" class="toc-btn">Why Patron</a>
            <a href="#comparison-section" class="toc-btn">ITR Forms</a>
            <a href="#faq-section" class="toc-btn">FAQs</a>
        </div>
        <button class="toc-arrow right" id="tocRight">&#10095;</button>
    </div>
</div>

<!-- SECTION 2: OVERVIEW / INTRO + TL;DR -->
<section class="content-section" id="overview-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">ITR Filing in Delhi - Overview</h2>
            <div class="content-text">
                <div class="highlight-box" style="margin-bottom:20px;">
                    <p><strong>&#128204; TL;DR - ITR Filing in Delhi Services at a Glance</strong></p>
                    <p>Income Tax Return (ITR) filing is a mandatory annual compliance for individuals, HUFs, firms and companies whose income exceeds the basic exemption limit. Returns for FY 2025-26 (AY 2026-27) are filed electronically on the e-filing portal (incometax.gov.in). The Income Tax Act, 2025 replaces the Income Tax Act, 1961 effective 1 April 2026. The new tax regime is the default: income up to Rs 12 lakh is tax-free for individuals. ITR-1 and ITR-2 are due by 31 July 2026. ITR-3 and ITR-4 (non-audit) have been extended to 31 August 2026 per Budget 2026. Late filing attracts Rs 5,000 penalty (income above Rs 5 lakh) or Rs 1,000 (income up to Rs 5 lakh) plus interest under Sections 234A, 234B and 234C. Delhi is one of India's largest taxpayer bases with IT offices at E2 Civic Centre, CR Building (IP Estate) and Aayakar Bhawan.</p>
                </div>
                <p>Delhi has one of the highest taxpayer densities in India. The city's diverse income landscape includes lakhs of salaried professionals working in Central Government offices, corporate headquarters in Connaught Place and Aerocity, business owners in Chandni Chowk, Okhla Industrial Area and Karol Bagh, freelancers and consultants in Nehru Place and South Delhi, NRIs with Delhi property and investments, and high-net-worth individuals with complex capital gains portfolios. Learn more about <a href="/income-tax-return">Income Tax Return filing across India</a>.</p>
                <p>The Delhi CCA (Chief Commissioner Area) encompasses multiple PCIT and CIT charges covering the entire NCT of Delhi, with key Income Tax offices at E2 Civic Centre, CR Building IP Estate and Aayakar Bhawan. The Income Tax Act, 2025 - replacing the IT Act, 1961 effective 1 April 2026 - introduces simplified language and the new 'Tax Year' concept. Delhi taxpayers also benefit from integrated <a href="/gst-registration">GST Registration</a> and <a href="/accounting-services">Accounting Services</a> from the same CA team.</p>
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
                    
                    <p>Income Tax Return (ITR) filing is the process of declaring your total income from all sources, the tax liability computed thereon, the taxes already paid (TDS, advance tax, self-assessment tax) and the refund or balance tax payable - to the Income Tax Department through a prescribed form.</p>
                    <p>The return is filed electronically on the e-filing portal (incometax.gov.in) using the applicable ITR form (ITR-1 through ITR-7 based on income type and entity category). The Income Tax Act, 2025 - effective from 1 April 2026 and replacing the IT Act, 1961 - governs all income tax provisions. The new tax regime is the default for individuals - taxable income up to Rs 12 lakh is effectively tax-free. Taxpayers can opt for the old regime if deductions under Sections 80C, 80D, HRA and others make it more beneficial.</p>
                    <p>For Delhi's diverse taxpayer base - where a salaried professional in Connaught Place earning Rs 15 lakh uses ITR-1, a freelance consultant in Nehru Place earning Rs 25 lakh needs ITR-3, a Chandni Chowk trader using presumptive taxation files ITR-4, and an Okhla manufacturer with turnover above Rs 1 crore requires ITR-3 with tax audit - correct form selection, regime choice and timely filing are critical to avoid penalties, demand notices and loss of carry-forward benefits.</p>

                </div>
                <div class="highlight-box" style="margin-top:20px;">
                    <p><strong>Key Terms for ITR Filing in Delhi:</strong></p>
                    <p><strong>ITR:</strong> Income Tax Return - annual declaration of income, tax liability and taxes paid filed electronically on incometax.gov.in.</p>
                    <p><strong>AIS:</strong> Annual Information Statement - captures all financial transactions reported by banks, mutual funds, registrars and other entities. Must be reconciled before ITR filing.</p>
                    <p><strong>Form 26AS:</strong> Tax Credit Statement showing TDS/TCS credits, advance tax and self-assessment tax payments.</p>
                    <p><strong>New Tax Regime:</strong> Default regime since FY 2023-24. Income up to Rs 12 lakh tax-free. Most deductions and exemptions not available.</p>
                    <p><strong>Section 234F:</strong> Late filing fee - Rs 5,000 (income > Rs 5 lakh) or Rs 1,000 (income <= Rs 5 lakh).</p>
                    <p><strong>E-Verification:</strong> Mandatory authentication of filed ITR within 30 days via Aadhaar OTP, net banking or DSC. Without this, ITR is treated as not filed.</p>
                    <p><strong>IT Act 2025:</strong> New Income Tax Act replacing IT Act, 1961, effective 1 April 2026. Introduces 'Tax Year' concept and simplified provisions.</p>

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
                            <text x="100" y="170" font-size="10" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial, sans-serif">ITR Filing in Delhi</text>
                        </svg>
                    </div>
                    <div class="illustration-badge">
                        <span>IT Act 2025</span>
                        <strong>ITR Filed & Verified</strong>
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
            <h2 class="section-title">Who Needs ITR Filing in Delhi?</h2>
            <div class="content-text">
                
                <p><strong>Salaried Individuals:</strong> Salaried individuals in Delhi earning above the basic exemption limit - Central Government employees in CGO Complex, corporate professionals in Connaught Place and Aerocity, IT and finance professionals commuting to Gurugram and Noida, defence personnel, doctors and all employees whose Form 16 shows tax deducted. Even if TDS covers full tax liability, filing is mandatory if gross income exceeds the threshold.</p>
                <p><strong>Business Owners and Traders:</strong> Delhi business owners - from Chandni Chowk wholesalers and Sadar Bazar retailers to Okhla manufacturers and Karol Bagh showroom owners - must file ITR declaring business income. Firms with turnover above Rs 1 crore need tax audit under Section 44AB. The extended ITR-3/ITR-4 deadline of 31 August 2026 benefits Delhi's large trader and professional community.</p>
                <p><strong>Freelancers and Professionals:</strong> Delhi freelancers, consultants and professionals - including CAs, lawyers, doctors, architects, IT consultants and content creators in Nehru Place, Connaught Place and Rohini - must file ITR-3 or ITR-4 (presumptive under Section 44ADA for receipts up to Rs 75 lakh). For company formation, explore <a href="/private-limited-company-registration">Private Limited Company Registration</a>.</p>
                <p><strong>NRIs with Delhi Income:</strong> NRIs with rental income from Delhi properties, capital gains from property sale, interest from Indian banks or business income must file ITR declaring all Indian-source income. Delhi's booming real estate market creates significant capital gains exposure for NRI property owners.</p>
                <p><strong>Companies and LLPs:</strong> Companies and LLPs registered in Delhi must file ITR-6 (companies) or ITR-5 (LLPs) regardless of profit or loss. Tax audit compliance, transfer pricing for international transactions and MAT/AMT computations add complexity.</p>

            </div>
            </div>
        </div>
    </div>
</section>

<!-- SECTION 5: OUR SERVICES -->
<section class="content-section" id="services-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Services Included in ITR Filing in Delhi</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Service</th><th>What We Do</th></tr></thead>
                    <tbody>
                        <tr><td>Form 26AS and AIS Reconciliation</td><td>Download and reconciliation of Form 26AS and AIS from e-filing portal. Mismatch identification and resolution before filing - the most effective measure to prevent automated demand notices from the Delhi CCA jurisdiction.</td></tr>
                        <tr><td>ITR Form Selection</td><td>Correct form selection from ITR-1 through ITR-7 based on income type, entity category and turnover. Wrong form selection leads to defective return notices. Patron determines the right form for your specific situation.</td></tr>
                        <tr><td>New vs Old Regime Optimisation</td><td>Comparative computation under both regimes accounting for all deductions (80C, 80D, HRA, LTA, home loan, NPS) under old regime versus flat slab benefit under new regime. Optimal regime recommended before filing.</td></tr>
                        <tr><td>Tax Computation and Return Preparation</td><td>Income computation under all five heads - salary, house property, business, capital gains and other sources. Set-off and carry-forward of losses. Deductions, exemptions and tax liability finalisation.</td></tr>
                        <tr><td>E-Filing and E-Verification</td><td>Return filed on incometax.gov.in and e-verified via Aadhaar OTP, net banking or DSC. E-verification completed immediately - must be done within 30 days or return is invalid.</td></tr>
                        <tr><td>Refund Tracking and Notice Response</td><td>Post-filing refund monitoring, Section 143(1) intimation handling, demand notice response and scrutiny communication management for Delhi CCA jurisdiction taxpayers.</td></tr>
                        <tr><td>Revised and Updated Return</td><td>Revised return (due 31 March 2027) or Updated return (ITR-U, within 48 months) for error correction. Integrated with <a href="/gst-registration/delhi">GST Registration in Delhi</a> and <a href="/accounting-services/delhi">Accounting Services</a>.</td></tr>
                        <tr><td>Integrated Tax Compliance Bundle</td><td>Same CA team handles ITR, GST returns, TDS returns, advance tax computation, accounting, tax audit and all business compliance - single partner for complete Delhi tax management.</td></tr>

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
            <h2 class="section-title">How ITR Filing Works in Delhi</h2>
            <p class="section-subtitle" style="text-align:left;max-width:100%;">End-to-end ITR filing for Delhi taxpayers - from document collection and AIS reconciliation through regime optimisation and e-filing to refund tracking. ITR is filed 100% online at incometax.gov.in. Patron's Delhi office in Rohini handles all filings for all Delhi zones.</p>
        </header>
        <div class="steps-container">
            <div class="step-card"><div class="step-content"><span class="step-badge">Step 1</span><h3 class="step-title">Gather Documents and Download AIS/Form 26AS</h3><p class="step-description">Patron collects all income documents: Form 16, Form 16A/B/C, bank statements, investment proofs, property details, capital gains statements. Simultaneously, Form 26AS and AIS are downloaded from the e-filing portal and reconciled with actual income data. Any discrepancies identified and addressed before filing.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>AIS reconciled</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Mismatches resolved</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="15" y="5" width="90" height="70" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><line x1="30" y1="25" x2="90" y2="25" stroke="#F5A623" stroke-width="3" stroke-linecap="round"/><line x1="30" y1="40" x2="80" y2="40" stroke="#14365F" stroke-width="2" opacity="0.3"/><line x1="30" y1="52" x2="70" y2="52" stroke="#14365F" stroke-width="2" opacity="0.3"/><rect x="70" y="55" width="30" height="15" rx="3" fill="#E8F5E9" stroke="#10B981" stroke-width="1"/></svg></div><span class="illustration-label">Docs Gathered</span><span class="step-number-large">01</span></div></div></div>
<div class="step-card"><div class="step-content"><span class="step-badge">Step 2</span><h3 class="step-title">Determine Correct ITR Form and Tax Regime</h3><p class="step-description">Based on income sources, entity type and turnover, Patron determines the applicable ITR form: ITR-1 for salaried up to Rs 50 lakh, ITR-2 for capital gains/foreign assets, ITR-3 for business income, ITR-4 for presumptive, ITR-5/6 for firms/companies. Comparative new-vs-old regime computation run to recommend the optimal choice.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Correct form selected</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Best regime identified</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="20" y="10" width="35" height="55" rx="4" fill="#FFF3E0" stroke="#F5A623" stroke-width="1"/><text x="37" y="42" font-size="11" fill="#14365F" text-anchor="middle" font-family="Arial" font-weight="bold">New</text><rect x="65" y="10" width="35" height="55" rx="4" fill="#E8F5E9" stroke="#10B981" stroke-width="1"/><text x="82" y="42" font-size="11" fill="#14365F" text-anchor="middle" font-family="Arial" font-weight="bold">Old</text><path d="M55 35h10" stroke="#14365F" stroke-width="2"/><text x="60" y="80" font-size="10" fill="#E8712C" text-anchor="middle" font-family="Arial" font-weight="bold">vs</text></svg></div><span class="illustration-label">Regime Compared</span><span class="step-number-large">02</span></div></div></div>
<div class="step-card"><div class="step-content"><span class="step-badge">Step 3</span><h3 class="step-title">Compute Income, Deductions and Tax Liability</h3><p class="step-description">Income computed under all five heads: salary, house property, business/profession, capital gains and other sources. Deductions under Chapter VI-A applied (old regime). Set-off and carry-forward of losses computed. Tax liability including surcharge, cess and credit for TDS, advance tax finalised.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>All heads computed</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Tax optimised</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="20" y="10" width="80" height="60" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><rect x="30" y="22" width="60" height="8" rx="2" fill="#E8712C" opacity="0.4"/><rect x="30" y="35" width="45" height="8" rx="2" fill="#F5A623" opacity="0.4"/><rect x="30" y="48" width="30" height="8" rx="2" fill="#10B981" opacity="0.4"/><line x1="30" y1="62" x2="90" y2="62" stroke="#14365F" stroke-width="1.5"/><text x="60" y="82" font-size="10" fill="#14365F" text-anchor="middle" font-family="Arial" font-weight="bold">Total Tax</text></svg></div><span class="illustration-label">Tax Computed</span><span class="step-number-large">03</span></div></div></div>
<div class="step-card"><div class="step-content"><span class="step-badge">Step 4</span><h3 class="step-title">Prepare and File Return on E-Filing Portal</h3><p class="step-description">Return prepared in applicable ITR form with all schedules. Patron logs into incometax.gov.in, selects the correct form and AY, enters all income, deduction and tax details, validates and submits electronically. ITR acknowledgement (ITR-V) generated immediately with unique filing reference number.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>ITR submitted</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Acknowledgement received</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="20" y="10" width="80" height="55" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><rect x="30" y="20" width="60" height="8" rx="2" fill="#E8712C" opacity="0.3"/><rect x="30" y="35" width="40" height="6" rx="2" fill="#14365F" opacity="0.15"/><path d="M60 65L55 75L65 75Z" fill="#10B981"/><rect x="50" y="75" width="20" height="5" rx="2" fill="#10B981" opacity="0.5"/></svg></div><span class="illustration-label">ITR Filed</span><span class="step-number-large">04</span></div></div></div>
<div class="step-card"><div class="step-content"><span class="step-badge">Step 5</span><h3 class="step-title">E-Verify the Return Within 30 Days</h3><p class="step-description">E-verification completed immediately via Aadhaar OTP (most common), net banking, bank account validation or DSC. Without e-verification within 30 days, the return is treated as not filed. The verified ITR-V acknowledgement is saved for the taxpayer's records.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Aadhaar OTP verified</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>ITR-V confirmed</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="25" y="15" width="70" height="50" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><circle cx="60" cy="35" r="15" fill="#E8F5E9" stroke="#10B981" stroke-width="1.5"/><path d="M53 35l5 5 10-10" stroke="#10B981" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"/><rect x="35" y="72" width="50" height="12" rx="4" fill="#FFF3E0" stroke="#F5A623" stroke-width="1"/></svg></div><span class="illustration-label">Verified</span><span class="step-number-large">05</span></div></div></div>
<div class="step-card"><div class="step-content"><span class="step-badge">Step 6</span><h3 class="step-title">Monitor Refund and Respond to Notices</h3><p class="step-description">Post-filing, Patron monitors refund status on portal. Refunds typically processed within 20-45 days of e-verification. If the IT Department issues any communication - Section 143(1) intimation, demand notice, defective return notice - Patron handles the response within prescribed deadlines for Delhi CCA jurisdiction taxpayers.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Refund tracked</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Notices handled</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="25" y="15" width="70" height="50" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><path d="M35 40 Q60 20 85 40" stroke="#10B981" stroke-width="2" fill="none"/><circle cx="35" cy="40" r="4" fill="#10B981"/><circle cx="60" cy="28" r="4" fill="#F5A623"/><circle cx="85" cy="40" r="4" fill="#10B981"/><rect x="30" y="72" width="60" height="15" rx="4" fill="#E8F5E9" stroke="#10B981" stroke-width="1"/></svg></div><span class="illustration-label">Refund Received</span><span class="step-number-large">06</span></div></div></div>

        </div>
    </div>
</section>

<!-- SECTION 8: DOCUMENTS REQUIRED -->
<section class="content-section" id="documents-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Documents Required for ITR Filing in Delhi</h2>
            <div class="content-text">
                
                <ul>
                    <li><strong>PAN and Aadhaar:</strong> Mandatory. PAN is the user ID for e-filing. Aadhaar must be linked with PAN (Section 139AA). Aadhaar OTP used for e-verification.</li>
                    <li><strong>Form 16 (Salaried):</strong> TDS certificate from employer showing salary income, deductions and tax deducted. Delhi government employees and corporate professionals receive Form 16 by 15 June.</li>
                    <li><strong>Form 26AS and AIS:</strong> Downloaded from e-filing portal. Form 26AS shows all TDS credits. AIS shows high-value transactions, property purchases, mutual fund investments and interest. Reconciliation is critical.</li>
                    <li><strong>Bank Statements:</strong> All bank accounts held during the year. Interest earned on savings/FD/RD, dividend income, cash deposits above Rs 10 lakh reported in AIS must match ITR.</li>
                    <li><strong>Investment Proofs (Old Regime):</strong> Section 80C (PPF, ELSS, LIC, EPF, tuition fees, home loan principal), Section 80D (health insurance), Section 80E (education loan), Section 80G (donations), NPS contribution.</li>
                    <li><strong>Capital Gains Statements:</strong> Mutual fund redemption/switch statements, share trading P&L from brokers, property sale deed (for Delhi property capital gains), crypto transaction records.</li>
                    <li><strong>Rental Income Details:</strong> Rent receipts, tenant PAN (if rent exceeds Rs 1 lakh/month), property tax paid receipts, home loan interest certificate for each Delhi property.</li>
                    <li><strong>Business/Profession Documents:</strong> Books of accounts, P&L statement, balance sheet, GST returns, invoices. Tax audit report if turnover exceeds prescribed limits.</li>
                </ul>
                <div class="highlight-box" style="margin-top:16px;">
                    <p><strong>Delhi-specific tip:</strong> Delhi property owners with multiple flats - a common profile given Delhi's real estate market - must report rental income from all properties. Only one property can be declared as self-occupied (or two from AY 2020-21). Deemed rental income applies to vacant properties. Patron computes optimal self-occupied property allocation for Delhi multi-property owners.</p>
                </div>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 9: CHALLENGES -->
<section class="content-section" id="challenges-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Common Challenges in ITR Filing in Delhi</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Challenge</th><th>Impact</th><th>How Patron Accounting Solves It</th></tr></thead>
                    <tbody>
                        <tr><td>AIS Mismatch Causing Demand Notices</td><td>Automated demand notices generated if ITR does not match AIS data on property, mutual funds, shares and bank deposits</td><td>Patron reconciles every AIS entry with actual income before filing</td></tr>
                        <tr><td>Wrong ITR Form Selection</td><td>Salaried individuals with capital gains or rental income filing ITR-1 instead of ITR-2/ITR-3 - defective return notice issued</td><td>Patron ensures the correct form based on complete income analysis</td></tr>
                        <tr><td>New vs Old Regime Confusion</td><td>Filing under wrong regime without comparative analysis - excess tax paid or benefits lost</td><td>Patron runs both computations before filing and recommends the optimal regime</td></tr>
                        <tr><td>Delhi Property Capital Gains</td><td>Incorrect computation of indexation, Section 54/54F exemptions and TDS under Section 194-IA</td><td>Patron handles complete Delhi property capital gains computation with exemption claims</td></tr>

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
            <h2 class="section-title">ITR Filing Fees in Delhi</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Fee Component</th><th>Amount</th></tr></thead>
                    <tbody>
                        <tr><td>ITR-1 (SAHAJ) - Salaried individuals</td><td class="table-amount">Starting from INR 499 (Exl GST and Govt. Charges) | Due: 31 July 2026</td></tr>
                        <tr><td>ITR-2 - Capital gains, multiple properties, foreign assets</td><td class="table-amount">Rs 1,999 | Due: 31 July 2026</td></tr>
                        <tr><td>ITR-3 (Non-Audit) - Business/profession income</td><td class="table-amount">Rs 2,999 | Due: 31 August 2026</td></tr>
                        <tr><td>ITR-4 (SUGAM) - Presumptive taxation</td><td class="table-amount">Rs 1,499 | Due: 31 August 2026</td></tr>
                        <tr><td>ITR-3 with Tax Audit - Business with audit requirement</td><td class="table-amount">Rs 7,999 | Due: 31 October 2026</td></tr>
                        <tr><td>ITR-5 (Partnership/LLP)</td><td class="table-amount">Rs 4,999 | Due: 31 July / 31 Oct 2026</td></tr>
                        <tr><td>ITR-6 (Company)</td><td class="table-amount">Rs 7,999 | Due: 31 October 2026</td></tr>
                        <tr><td>Revised/Updated Return</td><td class="table-amount">Rs 999 onwards | Due: 31 Mar 2027 / 48 months</td></tr>

                    </tbody>
                </table>
                </div>
                <p style="margin-top:16px;font-size:13px;color:var(--text-muted);font-style:italic;">All fees and charges listed are indicative only and do not constitute a binding offer. Final amounts may vary depending on the volume of work and the complexity involved.</p>
                <p style="margin-top:16px;">Professional service charges for drafting, filing, and representation are separate from the statutory fees. The exact fee depends on the complexity of the case, disputed amount, and number of hearings required. Contact us for a detailed quote.</p>
                <p style="margin-top:16px;"><strong>Get a free ITR Filing in Delhi consultation - <a href="tel:+919459456700">Call +91 945 945 6700</a> or <a href="https://wa.me/919459456700?text=Hello%2C%20I%20just%20visited%20your%20ITR%20Filing%20in%20Delhi%20page.%20I%20would%20like%20to%20know%20more%20about%20it." target="_blank" rel="noopener">WhatsApp us</a>. No-obligation assessment.</strong></p>
            </div>
        </div>
    </div>
</section>

<!-- SECTION 11: TIMELINE -->
<section class="content-section" id="timeline-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Timeline for ITR Filing in Delhi</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Stage</th><th>Estimated Timeline</th></tr></thead>
                    <tbody>
                        <tr><td>Document Collection</td><td>1-3 days - Form 16, bank statements, investment proofs, AIS</td></tr>
                        <tr><td>Form 26AS/AIS Reconciliation</td><td>1 day - Mismatch identification and resolution</td></tr>
                        <tr><td>Regime Comparison and Form Selection</td><td>Same day - New vs old regime computation</td></tr>
                        <tr><td>Return Preparation</td><td>1-2 days - All schedules completed</td></tr>
                        <tr><td>E-Filing on Portal</td><td>30 minutes - Submission and acknowledgement</td></tr>
                        <tr><td>E-Verification</td><td>Immediate - Aadhaar OTP / net banking</td></tr>
                        <tr><td>Refund Processing</td><td>20-45 days - Post e-verification by IT Department</td></tr>
                        <tr><td>Total (Patron Service)</td><td>3-5 working days - Document collection to e-verification</td></tr>

                    </tbody>
                </table>
                </div>
                <div class="highlight-box" style="margin-top:16px;">
                    
                    <p><strong>Delhi Processing Note:</strong> ITR is filed 100% online at incometax.gov.in. Delhi taxpayers fall under the Delhi CCA jurisdiction with multiple PCIT/CIT charges. Key IT offices: E2 Civic Centre (New Delhi), CR Building (IP Estate, New Delhi-110002), Aayakar Bhawan (New Delhi-110092). Helpline: 1800 103 0025. Patron's Delhi office in Rohini handles all ITR filings, e-verification and notice responses for all Delhi zones.</p>

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
            <h2 class="section-title">Why Choose Patron Accounting for ITR Filing in Delhi</h2>
        </div>
        <div class="features-grid">
            <article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><h3>Delhi Office at Rohini</h3><p>Walk-in consultations for salaried professionals, business owners, freelancers and NRIs. Document collection, regime analysis, return preparation and e-filing handled on-site. Serving all Delhi zones.</p></article>
            <article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><h3>IT Act 2025 Transition Expertise</h3><p>The new Income Tax Act 2025 effective 1 April 2026 introduces significant changes. Patron guides Delhi taxpayers through the transition - new Tax Year concept, rationalised sections and extended deadlines.</p></article>
            <article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg></div><h3>AIS Reconciliation and Notice Prevention</h3><p>Patron meticulously reconciles every AIS entry before filing - the single most effective measure to prevent automated demand notices from the Delhi CCA jurisdiction. Included in all ITR packages.</p></article>
            <article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2"><path d="M14 2H6a2 2 0 00-2 2v16a2 2 0 002 2h12a2 2 0 002-2V8z"/><path d="M14 2v6h6M16 13H8M16 17H8"/></svg></div><h3>Integrated Tax Compliance</h3><p>Same CA team handles ITR, GST returns, TDS returns, advance tax planning, tax audit, accounting and all business compliance. Single partner for complete year-round Delhi tax management.</p></article>
        </div>
    </div>
</section>

<!-- SECTION 12A: SOCIAL PROOF -->
<section class="content-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Trusted by 10,000+ Businesses Across India</h2>
            <div class="content-text">
                
                <p><strong>10,000+ Businesses | 4.9 Google Rating | 50,000+ Docs Filed | 15+ Years</strong></p>
                <p>With offices in Pune, Mumbai, Delhi and Gurugram, Patron serves Delhi taxpayers with both in-person and online ITR filing support. Our Delhi CA team at Rohini has filed thousands of returns for salaried professionals, business owners, freelancers, NRIs and companies across all Delhi zones.</p>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 13: SELF-FILING vs PROFESSIONAL COMPARISON -->
<section class="content-section" id="comparison-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">ITR Forms - Which Form to Use</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>ITR Form</th><th>Who Should File</th><th>Due Date (FY 2025-26)</th></tr></thead>
                    <tbody>
                        <tr><td>ITR-1 (SAHAJ)</td><td>Resident individuals: salary + one house property + other sources. Total income up to Rs 50 lakh. No capital gains, no foreign assets, no business income.</td><td>31 July 2026</td></tr>
                        <tr><td>ITR-2</td><td>Individuals/HUFs with capital gains, multiple properties, foreign assets, income above Rs 50 lakh, or income not eligible for ITR-1. No business income.</td><td>31 July 2026</td></tr>
                        <tr><td>ITR-3</td><td>Individuals/HUFs with business or professional income (non-presumptive). Also if turnover exceeds presumptive limits. Includes tax audit cases.</td><td>31 Aug 2026 (non-audit) | 31 Oct 2026 (audit)</td></tr>
                        <tr><td>ITR-4 (SUGAM)</td><td>Presumptive taxation: business (44AD, turnover up to Rs 3 crore with conditions) or profession (44ADA, receipts up to Rs 75 lakh). Income up to Rs 50 lakh.</td><td>31 August 2026</td></tr>
                        <tr><td>ITR-5</td><td>Partnership firms, LLPs, AOPs, BOIs. Regardless of profit or loss.</td><td>31 July (non-audit) | 31 Oct (audit)</td></tr>
                        <tr><td>ITR-6</td><td>Companies (other than Section 11 exempt). Mandatory regardless of income.</td><td>31 October 2026</td></tr>
                        <tr><td>ITR-7</td><td>Trusts, political parties, institutions, universities. Section 139(4A)/(4B)/(4C)/(4D).</td><td>31 October 2026</td></tr>

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
            <h2 class="section-title">Related Services for Delhi Taxpayers</h2>
            <div class="content-text">
                
                <ul>
                    <li><a href="/income-tax-return">Income Tax Return Filing in India</a> - Parent service covering all ITR filing across India</li>
                    <li><a href="/gst-registration">GST Registration</a> - GST compliance for Delhi businesses with turnover above threshold</li>
                    <li><a href="/accounting-services">Accounting Services</a> - Integrated accounting and bookkeeping for Delhi businesses</li>
                    <li><a href="/tax-planning-services">Tax Planning</a> - Year-round tax planning and advance tax advisory for Delhi taxpayers</li>
                    <li><a href="/tds-return">TDS Return Filing</a> - TDS return filing for Delhi businesses deducting tax at source</li>
                    <li><a href="/tax-audit">Tax Audit Service</a> - Section 44AB tax audit for Delhi businesses exceeding turnover limits</li>
                </ul>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 15A: LEGAL FRAMEWORK -->
<section class="content-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Legal and Compliance Framework for ITR Filing</h2>
            <div class="content-text">
                
                <p><strong>Income Tax Act, 2025:</strong> Replaces the IT Act, 1961 effective 1 April 2026. Introduces simplified language, unified 'Tax Year' concept, rationalised provisions and removal of redundant sections. Governs all income tax obligations including return filing, assessment, penalties and appeals.</p>
                <p><strong>Section 139(1) - Mandatory Return Filing:</strong> Specifies who must file ITR and prescribes due dates. Individuals with income above basic exemption, companies and firms (regardless of income) must file. Non-filing can trigger Section 148 notices.</p>
                <p><strong>Section 234F - Late Filing Fee:</strong> Rs 5,000 penalty if return filed after due date (income above Rs 5 lakh). Rs 1,000 for income up to Rs 5 lakh. Applies to all belated returns.</p>
                <p><strong>Sections 234A, 234B, 234C - Interest:</strong> 234A: 1% per month on unpaid tax from due date. 234B: 1% per month if advance tax less than 90% of assessed tax. 234C: 1% per quarter for short advance tax instalments.</p>
                <p><strong>New Tax Regime (Default):</strong> Income up to Rs 12 lakh tax-free. Standard deduction Rs 75,000 for salaried. Most deductions not available. Opt-out to old regime available annually (non-business) or once in lifetime (business - Form 10-IEA). E-filing portal: <a href="https://incometax.gov.in/" target="_blank" rel="noopener">incometax.gov.in</a>.</p>
                <p><strong>Section 44AB - Tax Audit:</strong> Mandatory for business turnover above Rs 1 crore (Rs 10 crore if cash below 5%) or professional receipts above Rs 50 lakh. Audit report due 30 September 2026. ITR due 31 October 2026.</p>
                <p><strong>AIS and Form 26AS:</strong> Annual Information Statement captures all financial transactions. Form 26AS shows TDS/TCS credits. Both must be reconciled before filing to prevent demand notices.</p>
                <p><strong>Delhi CCA Jurisdiction:</strong> Chief Commissioner of Income Tax - Delhi region. Multiple PCIT/CIT charges covering all Delhi localities. Offices at E2 Civic Centre, CR Building IP Estate and Aayakar Bhawan.</p>

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
                    <h2 class="faq-expanded__title">FAQs - ITR Filing in Delhi</h2>
                    <p class="faq-expanded__lead">Common questions about income tax return filing for Delhi taxpayers answered by our CA team</p>
                    @include('partials.bigin-form', [
                        'variant'  => 'compact',
                        'service'  => 'ITR Filing in Delhi',
                        'city'     => 'Delhi',
                    ])
                </aside>
                <div class="faq-expanded__list">
                    <div class="faq-expanded__item" id="faq-1">
                        <h3 class="faq-expanded__q">How to file ITR in Delhi?</h3>
                        <div class="faq-expanded__a"><p>Log into incometax.gov.in using PAN. Select ITR form and AY 2026-27. Fill income details from Form 16, bank statements and investment proofs. Verify against Form 26AS and AIS. Submit and e-verify via Aadhaar OTP within 30 days. Patron's Delhi office in Rohini handles the entire process.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-2">
                        <h3 class="faq-expanded__q">What is the last date for ITR filing for FY 2025-26?</h3>
                        <div class="faq-expanded__a"><p>ITR-1 and ITR-2: 31 July 2026. ITR-3 and ITR-4 (non-audit): 31 August 2026 (extended per Budget 2026). Tax audit cases: 31 October 2026 (audit report by 30 September). Belated return: 31 December 2026 with Rs 5,000 late fee. Revised return: 31 March 2027.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-3">
                        <h3 class="faq-expanded__q">Which ITR form should I use?</h3>
                        <div class="faq-expanded__a"><p>ITR-1 for salaried with income up to Rs 50 lakh (no capital gains). ITR-2 for capital gains, multiple properties or income above Rs 50 lakh. ITR-3 for business income. ITR-4 for presumptive taxation. ITR-5 for firms/LLPs. ITR-6 for companies. Patron determines the correct form for your Delhi income profile.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-4">
                        <h3 class="faq-expanded__q">What is the penalty for late ITR filing?</h3>
                        <div class="faq-expanded__a"><p>Late fee under Section 234F: Rs 5,000 (income above Rs 5 lakh), Rs 1,000 (income up to Rs 5 lakh). Interest under Section 234A at 1% per month on unpaid tax. Losses except house property loss cannot be carried forward in belated returns.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-5">
                        <h3 class="faq-expanded__q">Do I need a CA for ITR filing?</h3>
                        <div class="faq-expanded__a"><p>A CA is not legally required for individual ITR (except tax audit cases). However, for Delhi taxpayers with multiple income sources, complex capital gains, AIS discrepancies, business income or NRI status, CA-assisted filing significantly reduces error risk, notice probability and tax liability.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-6">
                        <h3 class="faq-expanded__q">How to check ITR refund status?</h3>
                        <div class="faq-expanded__a"><p>Log into incometax.gov.in, go to e-File then Income Tax Returns then View Filed Returns. Processing status and refund amount are displayed. Refunds are typically credited within 20-45 days of e-verification. Ensure correct bank account is pre-validated on the portal.</p></div>
                    </div>
                </div>
            </div>


            <!-- Quick Answers -->
            <div class="highlight-box" style="margin-top:32px;">
                <p><strong>Quick Answers</strong></p>
                <p><strong>ITR filing kya hai?</strong> ITR filing mein aap apni saal bhar ki income IT Department ko declare karte ho incometax.gov.in portal pe. PAN se login, sahi ITR form choose karo, income-deductions bharo, submit karo aur Aadhaar OTP se verify karo. ITR-1/ITR-2 ki last date 31 July 2026 hai. ITR-3/ITR-4 ke liye 31 August 2026 (extended). Late filing pe Rs 5,000 penalty lagti hai.</p>
                <p><strong>Naya tax regime kya hai?</strong> New tax regime default hai. Rs 12 lakh tak income tax-free hai. Lekin 80C, 80D, HRA, home loan jaise deductions nahi milte. Old regime mein deductions mil sakte hain. Dono mein jo kam tax aaye woh choose karo. Patron dono calculate karke best option batata hai.</p>
                <p><strong>Delhi mein IT office kahan hai?</strong> Delhi mein Income Tax offices hain: E2 Civic Centre (New Delhi), CR Building (IP Estate, New Delhi-110002), Aayakar Bhawan (New Delhi-110092). Online sab kuch incometax.gov.in pe hota hai. Helpline: 1800 103 0025.</p>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 18: URGENCY CTA -->
<section class="content-section" style="background: var(--orange-lighter) !important; border-left: 4px solid var(--orange);">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Don't Miss the Deadline - File Your Delhi ITR Now</h2>
            <div class="content-text">
                
                <p>The ITR filing deadline is non-negotiable. For FY 2025-26, ITR-1 and ITR-2 are due by 31 July 2026 and ITR-3 and ITR-4 by 31 August 2026. Missing these deadlines costs Delhi taxpayers Rs 5,000 in late fees plus 1% monthly interest on unpaid tax. More critically, losses from capital gains and business cannot be carried forward in belated returns.</p>
                <p>AIS discrepancies not resolved before filing lead to automated demand notices from the Delhi CCA jurisdiction. The Income Tax Act, 2025 takes effect from 1 April 2026 - understanding the transition is essential. <strong>Start early, reconcile AIS, choose the optimal regime and file well before the deadline.</strong></p>

            </div>
        </div>
    </div>
</section>

<!-- CONCLUSION + CTA BLOCK (Dark) -->
<section class="content-section" style="background: var(--blue) !important;">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title" style="color:#FFFFFF !important;">Get Your ITR Filed in Delhi - Start Today</h2>
            <div class="content-text" style="text-align:left;">
                
                <p style="color:rgba(255,255,255,0.9);">ITR filing in Delhi is an annual compliance imperative for the city's vast taxpayer base - from salaried professionals and government employees to Chandni Chowk traders, Okhla manufacturers, Nehru Place IT consultants, property investors and NRIs. The Income Tax Act, 2025 effective 1 April 2026 brings structural changes, while the extended ITR-3/ITR-4 deadline benefits Delhi's business and professional community.</p>
                <p style="color:rgba(255,255,255,0.9);">Patron Accounting's Delhi office in Rohini provides CA-assisted ITR filing with Form 26AS and AIS reconciliation, correct form selection, new-vs-old regime optimisation, e-filing, e-verification, refund tracking and notice response - with integrated GST, TDS and accounting compliance from the same team.</p>
                <p style="color:rgba(255,255,255,0.9);">For Delhi taxpayers seeking accurate, timely and tax-efficient ITR filing - whether salaried, business, freelancer, NRI or corporate - Patron offers a free consultation to assess your filing requirements and provide a transparent fee quote.</p>

            </div>
            <div style="display:flex;gap:14px;flex-wrap:wrap;margin-top:24px;">
                <a href="tel:+919459456700" style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:var(--orange);color:#fff;border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#128222; Call +91 945 945 6700</a>
                <a href="https://wa.me/919459456700?text=Hello%2C%20I%20just%20visited%20your%20ITR%20Filing%20in%20Delhi%20page.%20I%20would%20like%20to%20know%20more%20about%20it." target="_blank" style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:#25D366;color:#fff;border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;" rel="noopener">&#128172; WhatsApp Us</a>
                <a href="mailto:sales@patronaccounting.com?subject=Enquiry%20for%20ITR%20Filing%20in%20Delhi&body=Hello%2C%20I%20just%20visited%20your%20ITR%20Filing%20in%20Delhi%20page.%20I%20would%20like%20to%20know%20more%20about%20it.%0A%0AThank%20you." style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:transparent;color:#fff;border:2px solid rgba(255,255,255,0.3);border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#9993;&#65039; Email Us</a>
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
            <p style="text-align:center;color:var(--text-muted);font-size:15px;margin-bottom:40px;">Patron Accounting provides CA-assisted ITR filing services for taxpayers in major cities across India. Select your city below.</p>
         
            <div class="pa-city-block" style="margin-bottom:40px;">
                <div class="pa-city-grid">
                    <a href="/income-tax-return/pune" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Pune</div><div class="pa-card-sub">Maharashtra</div></div></a>
                    <a href="/income-tax-return/mumbai" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Mumbai</div><div class="pa-card-sub">Maharashtra</div></div></a>
                    <div class="pa-city-card" style="opacity:0.6; pointer-events:none; border:2px solid var(--orange); position:relative;"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Delhi</div><div class="pa-card-sub">Delhi NCR</div></div><span style="position:absolute; top:6px; right:8px; font-size:10px; color:var(--orange); font-weight:700; text-transform:uppercase; letter-spacing:0.5px;">You're here</span></div>
                    <a href="/income-tax-return-filing/gurugram" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Gurugram</div><div class="pa-card-sub">Haryana</div></div></a>
                    <a href="/income-tax-return/bangalore" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Bangalore</div><div class="pa-card-sub">Karnataka</div></div></a>
                    <a href="/income-tax-return/hyderabad" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Hyderabad</div><div class="pa-card-sub">Telangana</div></div></a>
                    <a href="/income-tax-return/chennai" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Chennai</div><div class="pa-card-sub">Tamil Nadu</div></div></a>
                    <a href="/income-tax-return/kolkata" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Kolkata</div><div class="pa-card-sub">West Bengal</div></div></a>
                </div>
            </div>
            <div class="pa-city-block">
                <div class="pa-block-title">Related Services</div>
                <div class="pa-block-sub">End-to-end tax and business compliance in Delhi</div>
                <div class="pa-cross-grid">
                    <a href="/gst-registration/delhi" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">GST Registration</div><div class="pa-card-sub">Delhi</div></div></a>
                    <a href="/accounting-services/delhi" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Accounting Services</div><div class="pa-card-sub">Delhi</div></div></a>
                    <a href="/tan-registration/delhi" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">TAN Registration</div><div class="pa-card-sub">Delhi</div></div></a>
                    <a href="/startup-registration/delhi" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Startup Registration</div><div class="pa-card-sub">Delhi</div></div></a>
                    <a href="/private-limited-company-registration/delhi" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Private Limited Company</div><div class="pa-card-sub">Delhi</div></div></a>
                    <a href="/pan-registration/delhi" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">PAN Registration</div><div class="pa-card-sub">Delhi</div></div></a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- CONTENT FRESHNESS FOOTER -->
<section class="content-section" style="padding:32px;">
    <div class="content-container">
        <div class="text-content" style="font-size:13px;color:var(--text-muted);">
            <p><strong>Content Created:</strong> 13 March 2026 &nbsp;|&nbsp; <strong>Last Updated:</strong> <span id="lastUpdatedFooter">13 March 2026</span> &nbsp;|&nbsp; <strong>Next Review:</strong> June 2026 &nbsp;|&nbsp; <strong>Reviewed By:</strong> CA &amp; CS Team, Patron Accounting LLP</p>
            <p>This page on ITR Filing in Delhi is reviewed semi-annually by our CA & CS team. Content accuracy is verified against the latest Income Tax Act 2025 provisions, CBDT notifications, due date updates and Delhi CCA jurisdiction changes. Freshness Tier 1.</p>
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
     CONSULTATION FORM  -  Country Dropdown + Validation + Bigin Integration
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
