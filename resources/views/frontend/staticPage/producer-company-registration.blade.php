
@extends('layouts.service-app')

<!-- External Dependencies (loaded by master layout in production) -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Barlow:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,400&family=DM+Sans:opsz,wght@9..40,400;9..40,500;9..40,600;9..40,700&display=swap" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

@section('meta')
    <title>Producer Company Registration India - FPO, Process & Fees</title>
    <meta name="description" content="Register a Producer Company under Part IXA of the Companies Act. Min 10 members, 5 directors, Rs 5 lakh capital. Starting at Rs 15,000. Expert CA and CS support.">
    <link rel="canonical" href="/producer-company-registration">
    <meta name="robots" content="index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1">
    <meta property="og:title" content="Producer Company Registration India - FPO, Process & Fees">
    <meta property="og:description" content="Register a Producer Company under Part IXA of the Companies Act. Min 10 members, 5 directors, Rs 5 lakh capital. Starting at Rs 15,000. Expert CA and CS support.">
    <meta property="og:url" content="/producer-company-registration">
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="Patron Accounting">
    <meta property="og:image" content="https://www.patronaccounting.com/images/og-default-square.png">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="1200">
    <meta property="og:image:type" content="image/png">
    <meta property="og:image:secure_url" content="https://www.patronaccounting.com/images/og-default-square.png">
    <meta property="og:image:alt" content="Patron Accounting - partner you can rely on">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Producer Company Registration India - FPO, Process & Fees">
    <meta name="twitter:description" content="Register a Producer Company under Part IXA of the Companies Act. Min 10 members, 5 directors, Rs 5 lakh capital. Starting at Rs 15,000. Expert CA and CS support.">
    <meta name="twitter:image" content="https://www.patronaccounting.com/images/og-default-square.png">
@endsection

@section('schema')
    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@graph": [
        {
          "@type": "Service",
          "name": "Producer Company Registration in India: Process & Fees",
          "description": "Register a Producer Company under Part IXA of the Companies Act. Min 10 members, 5 directors, Rs 5 lakh capital. Starting at Rs 15,000. Expert CA and CS support.",
          "url": "https://www.patronaccounting.com/producer-company-registration",
          "serviceType": "Producer Company Registration in India: Process & Fees",
          "areaServed": {
            "@type": "Country",
            "name": "India"
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
            "url": "https://www.patronaccounting.com/producer-company-registration",
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
              "name": "Producer Company Registration in India: Process & Fees",
              "item": "https://www.patronaccounting.com/producer-company-registration"
            }
          ]
        },
        {
          "@type": "FAQPage",
          "mainEntity": [
            {
              "@type": "Question",
              "name": "What is a Producer Company?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "A Producer Company is a body corporate registered under Part IXA (Sections 581A to 581ZT) of the Companies Act, 1956, designed for primary producers in agriculture, horticulture, animal husbandry, fisheries, and allied activities. It combines the corporate governance of a company with the mutual benefit principles of a cooperative, enabling farmers and rural producers to collectively produce, process, market, and export their primary produce."
              }
            },
            {
              "@type": "Question",
              "name": "How many members are required to register a Producer Company?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "Under Section 581C(1), a Producer Company can be formed by 10 or more individual producers, or 2 or more producer institutions, or a combination of 10 or more individuals and producer institutions. A minimum of 5 directors is required under Section 581O, and all directors must be members of the company."
              }
            },
            {
              "@type": "Question",
              "name": "What is the minimum capital required for a Producer Company?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "The minimum paid-up share capital for a Producer Company is Rs 5 lakh. The share capital consists of equity shares only. Each member must hold at least one share. The shares are not freely transferable - transfer requires board approval and can only be to another member or person eligible for membership."
              }
            },
            {
              "@type": "Question",
              "name": "What is the difference between a Producer Company and a cooperative society?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "A Producer Company is governed by Part IXA of the Companies Act, 1956, with minimal government interference, ROC regulation, pan-India scope, and corporate governance. A cooperative society is governed by state Cooperative Societies Acts with significant state government control, limited to state jurisdiction. Producer Companies were introduced specifically to address governance weaknesses of cooperative societies."
              }
            },
            {
              "@type": "Question",
              "name": "Is a Producer Company tax exempt?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "Producer Companies engaged in agricultural activities may claim deduction under Section 80P of the Income Tax Act, 1961. FPOs with turnover up to Rs 100 crore were eligible for 100% tax deduction on profits from domestic market sales. Agricultural income is exempt from income tax under Section 10(1). Non-agricultural income is taxed at standard corporate rates."
              }
            },
            {
              "@type": "Question",
              "name": "What are the annual compliance requirements for a Producer Company?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "Producer Companies must hold minimum 4 board meetings per year (at least once every 3 months). The first AGM must be held within 90 days of incorporation. Subsequent AGMs must be held within 6 months of financial year end. Annual returns and financial statements must be filed with ROC. If turnover exceeds Rs 5 crore, appointment of a Company Secretary is mandatory under Section 581Y. Quick Answers Can a non-farmer be a member? No. Only 'producers' as defined in Section 581A(k) - persons engaged in activities connected with primary produce - can be members. Can the company name omit 'Producer Company Limited'? No. Section 581F(a) mandates that the name must end with 'Producer Company Limited'. Is there a member limit? No. Unlike private companies (200 limit), Producer Companies have no upper limit on members under Section 581C(5). What is a withheld price? Part of the price for goods supplied by a member, withheld by the company for payment on a subsequent date - per Section 581A(n)."
              }
            }
          ]
        }
      ]
    }
    </script>
@endsection

@section('content')
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
            padding: 20px 0; position: sticky; top:100px; z-index: 50;
        }
/* Process Evidence Screenshot — Plan 3.2 */
        .process-screenshot-details { margin-top: 14px; }
</style>
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
                        Producer Company Registration in India
                    </h1>

                    <div class="expert-attribution-box">
                        <span class="eab-check"><svg width="16" height="16" viewBox="0 0 24 24" fill="currentColor"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg></span>
                        <span class="eab-title">Reviewed by CA and CS Team, Patron Accounting LLP</span>
                        <span class="eab-meta">
                            <span>ICAI & ICSI Registered</span><span class="eab-sep">|</span>
                            <span>15+ Years Experience</span><span class="eab-sep">|</span>
                            <span>Last Updated: <span id="lastUpdated">10 March 2026</span></span>
                        </span>
                        <a href="/authorhub/ca-sundram-gupta" class="eab-link">Verify Credentials &rarr;</a>
                    </div>

                    <div class="mb-4">
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Documents:</span> PAN, Aadhaar, DSC, DIN, MOA & AOA, Address Proof</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Fees:</span> Starting from Rs 15,000 (professional fees + govt charges)</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Members Required:</span> 10 Individual Producers or 2 Producer Institutions</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Timeline:</span> 15 - 25 Working Days</p>
                        </div>
                    </div>

                    <p class="mb-4 fw-bold" style="color: var(--blue); font-size: 15px;">10,000+ Businesses Served | 4.9 Google Rating | 50,000+ Documents Filed</p>

                    <div class="hero-cta">
                        <a href="tel:+919459456700" class="btn-video text-decoration-none">
                            <span class="play-circle"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="width:14px;height:14px;color:#fff"><path d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/></svg></span>
                            Call +91 945 945 6700
                        </a>
                        <a href="mailto:sales@patronaccounting.com?subject=Enquiry%20for%20Producer%20Company%20Registration%20Services&body=Hello%2C%20I%20just%20visited%20your%20Producer%20Company%20Registration%20Services%20page.%20I%20would%20like%20to%20know%20more%20about%20it.%0A%0AThank%20you." class="btn-sample text-decoration-none">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="width:18px;height:18px;"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,12 2,6"/></svg>
                            Email Us
                        </a>
                        <a href="https://wa.me/919459456700?text=Hello%2C%20I%20just%20visited%20your%20Producer%20Company%20Registration%20Services%20page.%20I%20would%20like%20to%20know%20more%20about%20it." target="_blank" class="btn-sample text-decoration-none" rel="noopener">
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
                                            'service'  => 'Producer Company Registration',
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
    'ctaText'    => 'From producer company incorporation to NABARD registration - Patron Accounting handles it all so you can focus on growing your agricultural business.',
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
            <a href="#overview-section" class="toc-btn">Overview</a><a href="#what-is-section" class="toc-btn">What Is</a><a href="#who-section" class="toc-btn">Who Needs</a><a href="#services-section" class="toc-btn">Services</a><a href="#procedure-section" class="toc-btn">Process</a><a href="#documents-section" class="toc-btn">Documents</a><a href="#fees-section" class="toc-btn">Fees</a><a href="#roc-calculator" class="toc-btn">ROC Calculator</a><a href="#benefits-section" class="toc-btn">Benefits</a><a href="#comparison-section" class="toc-btn">Compare</a><a href="#faq-section" class="toc-btn">FAQs</a>
        </div>
        <button class="toc-arrow right" id="tocRight">&#10095;</button>
    </div>
</div>

<!-- SECTION 2: OVERVIEW / INTRO + TL;DR -->
<section class="content-section" id="overview-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Producer Company Registration - Overview</h2>
            <div class="content-text">
                <div class="highlight-box" style="margin-bottom:20px;">
                    <p><strong>&#128204; TL;DR - Producer Company Registration Services at a Glance</strong></p>
                    <p><p>A Producer Company is a body corporate registered under Part IXA (Sections 581A to 581ZT) of the Companies Act, 1956, preserved by Section 465(1) of the Companies Act, 2013. It can be formed by 10 or more individual producers, 2 or more producer institutions, or a combination of both under Section 581C. The company must have a minimum of 5 directors (Section 581O), minimum paid-up capital of Rs 5 lakh, and its name must end with 'Producer Company Limited'. Registration is done via SPICe+ on the MCA portal through the Registrar of Companies (ROC). Patron Accounting handles the end-to-end registration process in 15 to 25 working days.</p></p>
                </div>
                <p><div class="table-responsive-wrapper" style="margin:20px 0;"><table><thead><tr><th>Parameter</th><th>Details</th></tr></thead><tbody><tr><td>Governing Law</td><td>Companies Act, 1956 - Part IXA (Sec 581A-581ZT); preserved by Sec 465(1), Companies Act, 2013</td></tr><tr><td>Applicable To</td><td>Farmers, agriculturists, dairy producers, fisheries, horticulturists, forest produce collectors</td></tr><tr><td>Minimum Members</td><td>10 individuals or 2 producer institutions (Section 581C)</td></tr><tr><td>Minimum Directors</td><td>5 (Section 581O); Maximum 15</td></tr><tr><td>Minimum Capital</td><td>Rs 5 lakh paid-up share capital (equity shares only)</td></tr><tr><td>Timeline</td><td>15 - 25 Working Days</td></tr><tr><td>Regulatory Authority</td><td>Registrar of Companies (ROC), MCA</td></tr></tbody></table></div></p>
                <p><p>A Producer Company is a unique hybrid between a private limited company and a cooperative society, designed specifically for primary producers in agriculture, horticulture, animal husbandry, fisheries, and allied activities. Introduced in 2002 on the recommendation of the Y.K. Alagh Committee, this structure gives farmers and rural producers the governance rigour of a company with the mutual benefit principles of a cooperative. The Government of India has allocated Rs 6,865 crore under the scheme for 'Formation and Promotion of 10,000 Farmer Producer Organisations (FPOs)', making this the ideal time to incorporate a Producer Company.</p></p>
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
                <h2 class="section-title">What Is a Producer Company?</h2>
                <div class="content-text what-is-definition">
                    
                    <p>A Producer Company is a body corporate having objects or activities specified in Section 581B and registered as a Producer Company under Part IXA of the Companies Act, 1956, as defined in Section 581A(l).</p><p>Unlike regular companies, a Producer Company operates on the principle of mutuality - it deals primarily with the produce of its active members under Section 581B(2). It is deemed a private company under Section 581C(5) but without the 200-member limit applicable to private companies. Voting rights follow a one-member-one-vote principle under Section 581D, regardless of shareholding. The company can only have equity share capital, and profits are distributed as patronage bonuses based on members' participation rather than as dividends.</p><p>The concept was introduced by the Companies (Amendment) Act, 2002 to provide an alternative to cooperative societies, which suffered from excessive government interference. Part IXA continues to apply under Section 465(1) of the Companies Act, 2013 until a special Act is enacted for Producer Companies.</p>

                </div>
                <div class="highlight-box" style="margin-top:20px;">
                    <p><strong>Key Terms for Producer Company Registration:</strong></p>
                    <p><strong>Producer:</strong> Any person engaged in any activity connected with or relatable to any primary produce - including agriculture, animal husbandry, horticulture, floriculture, pisciculture, viticulture, forestry, bee-keeping, and plantation products (Section 581A(k)).</p><p><strong>Primary Produce:</strong> Produce of farmers from agriculture (including allied activities) or produce of persons engaged in handloom, handicraft, or any other cottage industry product (Section 581A(i)).</p><p><strong>Producer Institution:</strong> A Producer Company or any other institution having only producers or Producer Companies as its members, whether incorporated or not (Section 581A(m)).</p><p><strong>Active Member:</strong> A member who participates in the business of the Producer Company by selling produce, using services, or contributing to operations as defined in the articles.</p><p><strong>Patronage Bonus:</strong> Distribution of surplus among members based on their participation in the company's business, not based on shareholding. Declared after maintaining statutory reserves under Section 581ZI.</p>

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
                            <text x="100" y="170" font-size="10" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial, sans-serif">Producer Company Registration</text>
                        </svg>
                    </div>
                    <div class="illustration-badge">
                        <span>Part IXA Registered</span>
                        <strong>Producer Company Ltd</strong>
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
            <h2 class="section-title">Who Should Register a Producer Company?</h2>
            <div class="content-text">
                
                <ul><li><strong>Farmer Groups and FPOs:</strong> Groups of 10+ farmers producing field crops, vegetables, fruits, spices, or pulses who want collective marketing and better price realisation</li><li><strong>Dairy Producers:</strong> Milk producers and dairy cooperatives seeking a corporate structure for procurement, processing, and marketing</li><li><strong>Fisheries and Aquaculture Producers:</strong> Fish farmers and marine product harvesters pooling resources for cold chain, processing, and export</li><li><strong>Horticulture and Floriculture Growers:</strong> Flower, fruit, and vegetable growers seeking direct market access and export opportunities</li><li><strong>Handloom, Handicraft, and Cottage Industry Producers:</strong> Rural artisans whose products qualify as primary produce under Section 581A(i)</li><li><strong>Existing Cooperative Societies:</strong> Inter-state cooperative societies can convert to Producer Companies under Section 581J for better governance and reduced government interference</li></ul>

            </div>
            </div>
        </div>
    </div>
</section>

<!-- SECTION 5: OUR SERVICES -->
<section class="content-section" id="services-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Patron Accounting's Producer Company Registration Services</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Service</th><th>What We Do</th></tr></thead>
                    <tbody>
                        <tr><td><strong>DSC and DIN for Directors</strong></td><td>Digital Signature Certificate and Director Identification Number for all 5+ proposed directors</td></tr><tr><td><strong>Name Reservation (SPICe+ Part A)</strong></td><td>Filing for name ending with 'Producer Company Limited' with the ROC through the MCA portal</td></tr><tr><td><strong>MOA and AOA Drafting</strong></td><td>Memorandum with objects per Section 581B and Articles per Section 581G, including member admission, voting rights, patronage bonus, and board meeting requirements</td></tr><tr><td><strong>Incorporation Filing (SPICe+ Part B)</strong></td><td>Complete incorporation application with all attachments filed with ROC for Certificate of Incorporation</td></tr><tr><td><strong>PAN, TAN, and Bank Account</strong></td><td>Post-incorporation PAN and TAN application followed by bank account opening in the Producer Company's name</td></tr><tr><td><strong>NABARD and FPO Scheme Registration</strong></td><td>Assistance with NABARD registration and application under the Government of India's 10,000 FPO scheme for financial and technical support</td></tr>

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
            <h2 class="section-title">7-Step Producer Company Registration Process</h2>
            <p class="section-subtitle" style="text-align:left;max-width:100%;">From assembling producer members to obtaining the Certificate of Incorporation and NABARD registration - our end-to-end process takes 15-25 working days.</p>
        </header>
        <div class="steps-container">
            <div class="step-card"><div class="step-content"><span class="step-badge">Step 1</span><h3 class="step-title">Assemble 10 Individual Producers or 2 Producer Institutions</h3><p class="step-description">Under Section 581C(1), a minimum of 10 individual producers or 2 producer institutions (or a combination) is required. All individual members must be engaged in primary production activities as defined in Section 581A(k).</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>10 producers minimum</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Primary production proof</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><circle cx="35" cy="30" r="10" fill="#FEF4EE" stroke="#E8712C" stroke-width="1.2"/><circle cx="60" cy="25" r="10" fill="#F0F4F8" stroke="#14365F" stroke-width="1.2"/><circle cx="85" cy="30" r="10" fill="#FEF4EE" stroke="#E8712C" stroke-width="1.2"/><path d="M25 55h70" stroke="#14365F" stroke-width="2" opacity="0.3"/><circle cx="45" cy="50" r="8" fill="#F0F4F8" stroke="#14365F" stroke-width="1"/><circle cx="75" cy="50" r="8" fill="#F0F4F8" stroke="#14365F" stroke-width="1"/></svg></div><span class="illustration-label">Members Assembled</span><span class="step-number-large">01</span></div></div></div>
<div class="step-card"><div class="step-content"><span class="step-badge">Step 2</span><h3 class="step-title">Obtain DSC and DIN for All Proposed Directors</h3><p class="step-description">A minimum of 5 directors is mandatory under Section 581O. All directors must be members of the Producer Company. Apply for Digital Signature Certificates and Director Identification Numbers through the MCA portal.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Minimum 5 directors</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>DSC + DIN via MCA</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="20" y="10" width="80" height="60" rx="8" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><circle cx="60" cy="35" r="12" fill="#FEF4EE" stroke="#E8712C" stroke-width="1.5"/><path d="M56 35l3 3 5-5" stroke="#E8712C" stroke-width="2" stroke-linecap="round"/><line x1="35" y1="58" x2="85" y2="58" stroke="#14365F" stroke-width="2" stroke-linecap="round" opacity="0.3"/></svg></div><span class="illustration-label">DSC Ready</span><span class="step-number-large">02</span></div></div></div>
<div class="step-card"><div class="step-content"><span class="step-badge">Step 3</span><h3 class="step-title">Reserve the Company Name via SPICe+ Part A</h3><p class="step-description">The name must end with 'Producer Company Limited' as required by Section 581F(a). File SPICe+ Part A with the ROC providing 2 name preferences. Name approval typically takes 2 to 3 working days.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>'Producer Company Limited' suffix</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>2-3 day approval</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><circle cx="60" cy="40" r="28" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><path d="M48 40l8-16h8l8 16" stroke="#E8712C" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/><line x1="46" y1="48" x2="74" y2="48" stroke="#14365F" stroke-width="2" stroke-linecap="round" opacity="0.4"/></svg></div><span class="illustration-label">Name Reserved</span><span class="step-number-large">03</span></div></div></div>
<div class="step-card"><div class="step-content"><span class="step-badge">Step 4</span><h3 class="step-title">Draft the MOA and AOA</h3><p class="step-description">The Memorandum must include objects specified in Section 581B (production, procurement, marketing, processing, financing, technical services). The Articles must include provisions for member admission, voting rights (one member one vote per Section 581D), board meetings, patronage bonus, and statutory reserve fund.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Section 581B objects</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>581G governance</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="15" y="5" width="45" height="60" rx="4" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><rect x="60" y="15" width="45" height="60" rx="4" fill="#FEF4EE" stroke="#E8712C" stroke-width="1.5"/><line x1="25" y1="22" x2="50" y2="22" stroke="#14365F" stroke-width="2" opacity="0.4"/><line x1="70" y1="32" x2="95" y2="32" stroke="#E8712C" stroke-width="2" opacity="0.5"/></svg></div><span class="illustration-label">MOA/AOA Drafted</span><span class="step-number-large">04</span></div></div></div>
<div class="step-card"><div class="step-content"><span class="step-badge">Step 5</span><h3 class="step-title">File SPICe+ Part B for Incorporation</h3><p class="step-description">Submit the complete incorporation application with MOA, AOA, director consents (DIR-2), declarations (INC-9), registered office address proof, and subscriber details to the ROC.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Integrated PAN/TAN</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>CA/CS certified filing</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="20" y="10" width="80" height="55" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><path d="M50 30l10 0 0-12" stroke="#E8712C" stroke-width="2" stroke-linecap="round"/><path d="M60 18l8 0 -8 10" fill="#FEF4EE" stroke="#E8712C" stroke-width="1.5"/><line x1="30" y1="45" x2="90" y2="45" stroke="#14365F" stroke-width="2" opacity="0.3"/></svg></div><span class="illustration-label">SPICe+ Filed</span><span class="step-number-large">05</span></div></div></div>
<div class="step-card"><div class="step-content"><span class="step-badge">Step 6</span><h3 class="step-title">ROC Issues Certificate of Incorporation</h3><p class="step-description">Under Section 581C(2), the Registrar shall, within 30 days of receipt of documents, register the company and issue the Certificate of Incorporation with a unique Corporate Identification Number (CIN).</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>CIN + PAN + TAN</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>30-day statutory timeline</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="20" y="8" width="80" height="60" rx="6" fill="#FEF4EE" stroke="#E8712C" stroke-width="1.5"/><circle cx="60" cy="30" r="14" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><path d="M55 30l4 4 6-8" stroke="#10B981" stroke-width="2.5" stroke-linecap="round"/><path d="M48 55l24 0" stroke="#E8712C" stroke-width="2" stroke-linecap="round"/><circle cx="60" cy="62" r="5" fill="none" stroke="#F5A623" stroke-width="1.5"/></svg></div><span class="illustration-label">COI Issued</span><span class="step-number-large">06</span></div></div></div>
<div class="step-card"><div class="step-content"><span class="step-badge">Step 7</span><h3 class="step-title">Post-Incorporation Compliance</h3><p class="step-description">Apply for PAN and TAN. Open a bank account. Appoint a Company Secretary if turnover exceeds Rs 5 crore under Section 581Y. Register with NABARD for financial and technical support. Apply under the 10,000 FPO scheme if eligible.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>NABARD registration</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>FPO scheme eligibility</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M60 12l30 16v28l-30 16-30-16V28z" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><path d="M55 42l5 5 10-12" stroke="#10B981" stroke-width="2.5" stroke-linecap="round"/><text x="38" y="78" fill="#14365F" font-size="10" font-weight="700" font-family="Barlow">NABARD</text></svg></div><span class="illustration-label">Fully Compliant</span><span class="step-number-large">07</span></div></div></div>

        </div>
    </div>
</section>

<!-- SECTION 8: DOCUMENTS REQUIRED -->
<section class="content-section" id="documents-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Documents Required for Producer Company Registration</h2>
            <div class="content-text">
                
                <p><strong>For Directors and Subscribers:</strong></p><ul><li>PAN Card of all directors and subscribers (mandatory)</li><li>Aadhaar Card / Voter ID / Passport of all directors and subscribers</li><li>Passport-sized photographs</li><li>Address proof (bank statement / utility bill not older than 2 months)</li><li>DSC and DIN of all proposed directors</li><li>Consent to act as Director (DIR-2) and Declaration (DIR-8)</li></ul><p><strong>For the Company:</strong></p><ul><li>MOA with objects per Section 581B ending with 'Producer Company Limited'</li><li>AOA per Section 581G with governance provisions</li><li>Registered office address proof (rent agreement + NOC from landlord or sale deed)</li><li>Utility bill of registered office (not older than 2 months)</li><li>Declaration by first subscribers (INC-9)</li><li>Proof of primary production activity of members (land records, cultivation certificates, or producer certificates from DHO)</li></ul>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 9: CHALLENGES -->
<section class="content-section" id="challenges-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Common Challenges and How We Solve Them</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Challenge</th><th>Impact</th><th>How Patron Accounting Solves It</th></tr></thead>
                    <tbody>
                        <tr><td><strong>Assembling 10 Producers with Valid Documentation</strong></td><td>Rural producers often lack digital KYC documents or have Aadhaar-PAN linking issues</td><td>We coordinate document collection, Aadhaar-PAN verification, and manage the entire KYC process for rural producers with limited digital literacy</td></tr><tr><td><strong>MOA Objects Not Compliant with Section 581B</strong></td><td>Non-compliant objects lead to ROC rejection and resubmission delays</td><td>CS team drafts MOA objects strictly within 581B scope - production, procurement, marketing, processing, financing, and technical services</td></tr><tr><td><strong>Patronage Bonus vs Dividend Confusion</strong></td><td>Members unfamiliar with patronage-based distribution model</td><td>We draft AOA provisions for patronage bonus based on participation, statutory reserve requirements under Section 581ZI, and withheld price mechanisms</td></tr><tr><td><strong>Post-Incorporation NABARD/FPO Registration</strong></td><td>Application requires specific formats, activity reports, and financial projections</td><td>Patron Accounting prepares complete NABARD application and assists with the Rs 6,865 crore FPO scheme for equity grants and credit guarantee</td></tr>

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
            <h2 class="section-title">Producer Company Registration Fees and Government Charges</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Fee Component</th><th>Amount</th></tr></thead>
                    <tbody>
                        <tr><td>DSC for 5 Directors</td><td class="table-amount">Rs 2,500 - Rs 5,000</td></tr><tr><td>DIN for 5 Directors</td><td class="table-amount">Included in SPICe+ filing</td></tr><tr><td>Name Reservation (SPICe+ Part A)</td><td class="table-amount">Rs 1,000 (MCA fee)</td></tr><tr><td>Incorporation (SPICe+ Part B)</td><td class="table-amount">Rs 2,000 - Rs 5,000 (MCA fee based on capital)</td></tr><tr><td>Stamp Duty on MOA/AOA</td><td class="table-amount">Rs 1,000 - Rs 5,000 (varies by state)</td></tr><tr><td>PAN and TAN Application</td><td class="table-amount">Rs 200 - Rs 500</td></tr><tr><td>Minimum Paid-Up Capital Required</td><td class="table-amount">Rs 5 lakh (equity shares - contributed by members)</td></tr><tr><td><strong>Patron Accounting Professional Fees</strong></td><td class="table-amount"><strong>Starting from INR 14,999 (Exl GST and Govt. Charges)</strong></td></tr>

                    </tbody>
                </table>
                </div>
                <p style="margin-top:16px;font-size:13px;color:var(--text-muted);font-style:italic;">All fees and charges listed are indicative only and do not constitute a binding offer. Final amounts may vary depending on the volume of work and the complexity involved.</p>
                <p style="margin-top:16px;">Professional service charges for drafting, filing, and representation are separate from the statutory fees. The exact fee depends on the complexity of the case, disputed amount, and number of hearings required. Contact us for a detailed quote.</p>
                <p style="margin-top:16px;"><strong>Get a free Producer Company Registration consultation - <a href="tel:+919459456700">Call +91 945 945 6700</a> or <a href="https://wa.me/919459456700?text=Hello%2C%20I%20just%20visited%20your%20Producer%20Company%20Registration%20Services%20page.%20I%20would%20like%20to%20know%20more%20about%20it." target="_blank" rel="noopener">WhatsApp us</a>. No-obligation assessment.</strong></p>
            </div>
        </div>
    </div>
</section>

<!-- SECTION 11: TIMELINE -->
<section class="content-section" id="timeline-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Time Taken for Producer Company Registration</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Stage</th><th>Estimated Timeline</th></tr></thead>
                    <tbody>
                        <tr><td>DSC and DIN Procurement</td><td>2 - 3 working days</td></tr><tr><td>Name Reservation (SPICe+ Part A)</td><td>2 - 3 working days</td></tr><tr><td>MOA and AOA Drafting</td><td>3 - 5 working days</td></tr><tr><td>SPICe+ Part B Filing and ROC Processing</td><td>7 - 15 working days</td></tr><tr><td>Post-Incorporation (PAN, TAN, Bank Account)</td><td>5 - 7 additional days</td></tr><tr><td><strong>Total (Incorporation Only)</strong></td><td><strong>15 - 25 working days</strong></td></tr>

                    </tbody>
                </table>
                </div>
                <div class="highlight-box" style="margin-top:16px;">
                    
                    <p><strong>Important:</strong> Under Section 581C(2), the Registrar shall register the company within 30 days of receipt of complete documents. Actual processing may be faster depending on ROC workload. NABARD registration is a separate post-incorporation process.</p>

                </div>
            </div>
        </div>
    </div>
</section>

<!-- ROC FEE CALCULATOR - injected by india-html-with-roc-v1 skill -->
<!-- 
  ROC Fee Calculator V2 - Embeddable Widget for Patron Accounting Service Pages
  Blade-ready version (no DOCTYPE/html/head/body).
  CSS is scoped under .roc-widget class.
  JS functions are prefixed with roc* to avoid global conflicts.
-->

<style>
/* === ROC CALCULATOR WIDGET - NAMESPACED UNDER .roc-widget === */
.roc-widget {
  --bg: #f8fafc;
  --surface: #ffffff;
  --border: #e2e8f0;
  --border-hover: #cbd5e1;
  
  --primary: #4f46e5; /* Indigo */
  --primary-hover: #4338ca;
  --primary-light: #e0e7ff;
  
  --success: #10b981; /* Emerald */
  --success-light: #d1fae5;
  
  --accent: #f59e0b; /* Amber */
  --accent-light: #fef3c7;
  
  --text-main: #0f172a;
  --text-muted: #64748b;
  --text-light: #94a3b8;
  
  --shadow-sm: 0 1px 2px 0 rgb(0 0 0 / 0.05);
  --shadow-md: 0 4px 6px -1px rgb(0 0 0 / 0.1), 0 2px 4px -2px rgb(0 0 0 / 0.1);
  --shadow-lg: 0 10px 15px -3px rgb(0 0 0 / 0.1), 0 4px 6px -4px rgb(0 0 0 / 0.1);
}

*, *::before, *::after { box-sizing: border-box; margin: 0; padding: 0; }

.roc-widget {
  font-family: 'Inter', sans-serif;
  background: var(--bg);
  color: var(--text-main);
  min-height: 100vh;
  line-height: 1.5;
  -webkit-font-smoothing: antialiased;
}

.roc-widget .wrap { max-width: 1100px; margin: 0 auto; padding: 0 20px 80px; }

/* ─ HEADER ─ */
.roc-widget header {
  padding: 60px 0 40px;
  text-align: center;
}
.roc-widget .badge {
  display: inline-flex; align-items: center; gap: 8px;
  background: var(--surface); border: 1px solid var(--border);
  border-radius: 100px; padding: 6px 16px;
  font-size: 11px; font-weight: 600; letter-spacing: 0.05em;
  text-transform: uppercase; color: var(--text-main); margin-bottom: 20px;
  box-shadow: var(--shadow-sm);
}
.roc-widget .dot { width: 8px; height: 8px; background: var(--success); border-radius: 50%; }
.roc-widget header h1 {
  font-family: 'Outfit', sans-serif;
  font-size: clamp(32px, 5vw, 48px); font-weight: 800; line-height: 1.1;
  color: var(--text-main); letter-spacing: -0.02em; margin-bottom: 12px;
}
.roc-widget header h1 em { font-style: normal; color: var(--primary); }
.roc-widget header p { font-size: 15px; color: var(--text-muted); }
.roc-widget .patron-tag {
  font-size: 14px; color: var(--text-muted); margin-top: 12px;
}
.roc-widget .patron-tag strong { color: var(--primary); font-weight: 700; }

/* ─ LAYOUT ─ */
.roc-widget .grid-2 { display: grid; grid-template-columns: 1fr 1.2fr; gap: 30px; align-items: start; }

/* ─ CARD ─ */
.roc-widget .card {
  background: var(--surface); border: 1px solid var(--border);
  border-radius: 20px;
  box-shadow: var(--shadow-md);
}
.roc-widget .card-hdr {
  padding: 24px 30px; border-bottom: 1px solid var(--border);
  background: #f8fafc;
  display: flex; align-items: center; gap: 12px;
}
.roc-widget .card-hdr h3 { font-family: 'Outfit', sans-serif; font-size: 18px; font-weight: 700; color: var(--text-main); }
.roc-widget .card-hdr .ico {
  width: 36px; height: 36px; border-radius: 10px;
  background: #ffffff; border: 1px solid var(--border);
  display: flex; align-items: center; justify-content: center; font-size: 16px;
  box-shadow: var(--shadow-sm);
}
.roc-widget .card-body { padding: 30px; }

/* ─ FORM ─ */
.roc-widget .field { margin-bottom: 24px; }
.roc-widget .field:last-child { margin-bottom: 0; }
.roc-widget label {
  display: block; font-size: 12px; font-weight: 600; 
  text-transform: uppercase; color: var(--text-muted); margin-bottom: 8px; 
  letter-spacing: 0.05em;
}

.roc-widget select, .roc-widget input[type=number] {
  width: 100%; background: #ffffff; border: 1px solid var(--border);
  border-radius: 12px; color: var(--text-main); font-family: 'Inter', sans-serif;
  font-size: 15px; font-weight: 500; padding: 12px 16px; outline: none;
  transition: all 0.2s; box-shadow: var(--shadow-sm);
  -webkit-appearance: none;
}
.roc-widget select {
  background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='10' height='7' viewBox='0 0 10 7'%3E%3Cpath d='M1 1l4 4 4-4' stroke='%2364748b' stroke-width='1.5' fill='none' stroke-linecap='round'/%3E%3C/svg%3E");
  background-repeat: no-repeat; background-position: right 16px center; padding-right: 40px; cursor:pointer;
}
.roc-widget select:focus, .roc-widget input:focus {
  border-color: var(--primary); 
  box-shadow: 0 0 0 3px var(--primary-light); 
}

.roc-widget .seg { display: grid; gap: 8px; }
.roc-widget .seg.c2 { grid-template-columns: 1fr 1fr; }
.roc-widget .seg.c3 { grid-template-columns: 1fr 1fr 1fr; }
.roc-widget .seg-btn {
  background: var(--surface); border: 1px solid var(--border);
  border-radius: 10px; color: var(--text-muted); font-family: 'Inter', sans-serif;
  font-size: 13px; font-weight: 600; padding: 10px 8px; cursor: pointer;
  transition: all 0.2s; text-align: center; box-shadow: var(--shadow-sm);
}
.roc-widget .seg-btn.on {
  background: var(--primary); border-color: var(--primary); 
  color: #ffffff; box-shadow: 0 4px 6px -1px rgba(79, 70, 229, 0.3); 
}
.roc-widget .seg-btn:hover:not(.on) { border-color: var(--border-hover); color: var(--text-main); }

.roc-widget .stepper {
  display: flex; align-items: center; gap: 10px;
  background: var(--surface); border: 1px solid var(--border);
  border-radius: 12px; padding: 6px 6px 6px 16px; box-shadow: var(--shadow-sm);
}
.roc-widget .stepper span { flex:1; font-family: 'JetBrains Mono', monospace; font-size: 16px; font-weight: 600; color: var(--text-main); }
.roc-widget .st-btn {
  width: 36px; height: 36px; background: var(--bg); border: 1px solid var(--border);
  border-radius: 8px; color: var(--text-main); font-size: 20px; cursor: pointer; line-height:1;
  display: flex; align-items: center; justify-content: center; transition: all 0.2s;
}
.roc-widget .st-btn:hover { background: var(--border); }

/* ─ RESULTS ─ */
.roc-widget .res-state {
  font-size: 12px; font-weight: 700; letter-spacing: 0.05em; text-transform: uppercase;
  color: var(--primary); margin-bottom: 4px; display: flex; align-items: center; gap: 8px;
}
.roc-widget .res-title { font-family: 'Outfit', sans-serif; font-size: 22px; font-weight: 700; color: var(--text-main); margin-bottom: 0; }

.roc-widget .section-lbl {
  font-size: 11px; font-weight: 700; letter-spacing: 0.1em; text-transform: uppercase;
  color: var(--text-light); padding: 20px 0 10px;
  display: flex; align-items: center; gap: 12px;
}
.roc-widget .section-lbl::after { content:''; flex:1; height:1px; background: var(--border); }

.roc-widget .fee-row {
  display: flex; justify-content: space-between; align-items: center;
  padding: 12px 0; border-bottom: 1px dashed var(--border); gap: 10px;
}
.roc-widget .fee-row:last-of-type { border-bottom: none; }
.roc-widget .fee-row .lbl { font-size: 14px; font-weight: 500; color: var(--text-main); flex: 1; }
.roc-widget .fee-row .tag {
  font-size: 10px; font-weight: 700; letter-spacing: 0.05em;
  border-radius: 6px; padding: 4px 8px; text-transform: uppercase; white-space: nowrap;
}
.roc-widget .tag-mca { background: #e0f2fe; color: #0284c7; }
.roc-widget .tag-state { background: #fef3c7; color: #d97706; }
.roc-widget .tag-prof { background: #f3e8ff; color: #9333ea; }
.roc-widget .tag-tax { background: #fee2e2; color: #dc2626; }

.roc-widget .fee-row .amt {
  font-family: 'JetBrains Mono', monospace; font-size: 14px; font-weight: 600;
  color: var(--text-main); white-space: nowrap;
}
.roc-widget .fee-row.dimmed { opacity: 0.4; text-decoration: line-through; }

.roc-widget .subtotal {
  display: flex; justify-content: space-between; align-items: center;
  padding: 16px; margin: 12px 0; background: #f8fafc;
  border: 1px solid var(--border); border-radius: 12px;
}
.roc-widget .subtotal .lbl { font-size: 12px; font-weight: 700; text-transform: uppercase; color: var(--text-muted); }
.roc-widget .subtotal .amt { font-family: 'JetBrains Mono', monospace; font-size: 15px; font-weight: 700; color: var(--text-main); }

/* ─ GRAND TOTAL ─ */
.roc-widget .grand {
  margin: 24px 0 0; padding: 30px;
  background: linear-gradient(135deg, var(--primary), #3b82f6);
  border-radius: 20px; position: relative; overflow: hidden; color: #ffffff;
  box-shadow: var(--shadow-lg);
}
.roc-widget .grand::before {
  content: '₹'; position: absolute; right: 10px; bottom: -30px;
  font-family: 'Outfit', sans-serif; font-size: 150px; font-weight: 800;
  color: rgba(255,255,255,0.1); line-height: 1; pointer-events: none;
}
.roc-widget .grand .gt-lbl { font-size: 12px; font-weight: 700; letter-spacing: 0.1em;
  text-transform: uppercase; color: var(--primary-light); margin-bottom: 8px; }
.roc-widget .grand .gt-amt {
  font-family: 'Outfit', sans-serif; font-size: 48px; font-weight: 800;
  letter-spacing: -0.02em; line-height: 1; margin-bottom: 8px;
}
.roc-widget .grand .gt-note { font-size: 13px; color: var(--primary-light); opacity: 0.9; }

.roc-widget .gt-split { display: flex; gap: 12px; margin-top: 20px; padding-top: 20px; border-top: 1px solid rgba(255,255,255,0.2); }
.roc-widget .gt-part {
  flex:1; padding: 12px; background: rgba(0,0,0,0.15);
  border-radius: 12px; backdrop-filter: blur(4px);
}
.roc-widget .gt-part .p-lbl { font-size: 10px; font-weight: 700; letter-spacing: 0.05em;
  text-transform: uppercase; color: rgba(255,255,255,0.7); margin-bottom: 4px; }
.roc-widget .gt-part .p-amt { font-family: 'JetBrains Mono', monospace; font-size: 15px; font-weight: 600; color: #ffffff; }

/* ─ AOA NOTE ─ */
.roc-widget .aoa-note {
  margin-top: 16px; padding: 14px 16px;
  background: #fffbeb; border-left: 4px solid var(--accent);
  border-radius: 8px; font-size: 13px; color: #b45309; line-height: 1.5;
}
.roc-widget .aoa-note strong { color: #92400e; font-weight: 700; }

/* ─ MOBILE RESPONSIVENESS ─ */
@media(max-width: 850px) {
  .wrap { padding: 0 16px 40px; }
  .roc-widget .grid-2 { grid-template-columns: 1fr; gap: 20px; }
  .roc-widget header { padding: 40px 0 20px; }
  .roc-widget header h1 { font-size: 32px; }
  .roc-widget .card-hdr { padding: 16px 20px; }
  .roc-widget .card-body { padding: 20px; }
  
  /* Stack 3-column buttons into 2 columns for better touch targets */
  .roc-widget .seg.c3 { grid-template-columns: 1fr 1fr; }
  
  .roc-widget .grand { padding: 24px 20px; }
  .roc-widget .grand .gt-amt { font-size: 36px; }
  
  /* Stack the split totals vertically on small screens */
  .roc-widget .gt-split { flex-direction: column; gap: 8px; }
}

/* ─ TOOLTIP / INFO BUTTON ─ */
.roc-widget .info-wrap {
  display: inline-flex;
  align-items: center;
  gap: 6px;
  position: static;
}
.roc-widget .info-btn {
  display: inline-flex;
  align-items: center;
  justify-content: center;
  width: 16px;
  height: 16px;
  border-radius: 50%;
  background: rgba(232,93,4,0.12);
  border: 1px solid rgba(232,93,4,0.35);
  color: var(--primary, #e85d04);
  font-size: 10px;
  font-weight: 700;
  font-style: normal;
  cursor: pointer;
  line-height: 1;
  flex-shrink: 0;
  transition: background .18s, border-color .18s;
  user-select: none;
  vertical-align: middle;
  font-family: serif;
}
.roc-widget .info-btn:hover {
  background: var(--primary, #e85d04);
  color: #fff;
  border-color: var(--primary, #e85d04);
}
/* Tooltip rendered as fixed so it escapes overflow:hidden on any parent */
.roc-widget .tooltip-box {
  display: none;
  position: fixed;
  z-index: 9999;
  width: 300px;
  background: #fff;
  border: 1.5px solid rgba(232,93,4,0.22);
  border-radius: 12px;
  padding: 14px 16px;
  box-shadow: 0 8px 32px rgba(0,0,0,0.14), 0 2px 8px rgba(232,93,4,0.1);
  font-family: 'Plus Jakarta Sans', 'Outfit', 'IBM Plex Sans', sans-serif;
  pointer-events: none;
}
.roc-widget .tooltip-box.visible {
  display: block;
  animation: tooltipIn .15s ease;
}
.roc-widget @keyframes tooltipIn {
  .roc-widget from { opacity: 0; transform: translateY(5px); }
  .roc-widget to { opacity: 1; transform: translateY(0); }
}
  .roc-widget to { opacity: 1; transform: translateY(0); }
}
.roc-widget .tt-title {
  font-size: 12px;
  font-weight: 600;
  color: var(--primary, #e85d04);
  margin-bottom: 8px;
  letter-spacing: .01em;
}
.roc-widget .tt-body {
  font-size: 12px;
  font-weight: 400;
  color: #5a3a20;
  line-height: 1.7;
}
.roc-widget .tt-body b { font-weight: 600; color: #3a2010; }
.roc-widget .tt-body ul {
  margin: 8px 0 0 0;
  padding-left: 16px;
}
.roc-widget .tt-body ul li {
  margin-bottom: 5px;
  font-weight: 400;
  color: #5a3a20;
}
.roc-widget .tt-alert {
  margin-top: 10px;
  padding: 9px 11px;
  background: #fff8f0;
  border-left: 3px solid var(--primary, #e85d04);
  border-radius: 0 7px 7px 0;
  font-size: 11.5px;
  font-weight: 400;
  color: #7a3000;
  line-height: 1.65;
}
.roc-widget .tt-alert b { font-weight: 600; color: #c94d02; }
</style>

<!-- ROC Calculator Section -->
<section id="roc-calculator" class="roc-widget" style="margin:60px 0;padding:0;">
<div class="wrap">

<header>
  <div class="badge"><span class="dot"></span> Official MCA Rates 2026</div>
  <h2 style="font-family:'Outfit',sans-serif;font-size:clamp(28px,4vw,40px);font-weight:800;line-height:1.1;letter-spacing:-0.02em;">ROC <em style="font-style:normal;color:#4f46e5;">Fee Calculator</em></h2>
  <p class="patron-tag">Powered by <strong>Patron Accounting</strong></p>
</header>

<div class="grid-2">

  <div class="card">
    <div class="card-hdr"><span class="ico">⚙️</span><h3>Company Details</h3></div>
    <div class="card-body">

      <div class="field">
        <label>State / Union Territory</label>
        <select id="stateSelect" onchange="rocCalc()"></select>
      </div>

      <div class="field">
        <label>Company Type</label>
        <div class="seg c3">
          <button class="seg-btn on" data-ct="pvt" onclick="rocSetCT(this)">Private Ltd</button>
          <button class="seg-btn" data-ct="pub" onclick="rocSetCT(this)">Public Ltd</button>
          <button class="seg-btn" data-ct="opc" onclick="rocSetCT(this)">OPC</button>
          <button class="seg-btn" data-ct="small" onclick="rocSetCT(this)">Small Co.</button>
          <button class="seg-btn" data-ct="sec8" onclick="rocSetCT(this)">Section 8</button>
          <button class="seg-btn" data-ct="nocap" onclick="rocSetCT(this)">No Share Cap</button>
        </div>
      </div>

      <div class="field" id="authCapField">
        <label>Authorised Capital (₹)</label>
        <input type="number" id="authCap" value="100000" min="0" step="10000" oninput="rocCalc()">
      </div>

      <div class="field" id="paidCapField">
        <label>Paid-up Capital (₹) <span style="font-weight:400; text-transform:none; color:var(--text-light);">(for INC-20A fee)</span></label>
        <input type="number" id="paidCap" value="100000" min="0" step="10000" oninput="rocCalc()">
      </div>

      <div class="field">
        <label>
  <span class="info-wrap">
    Number of DSC Required
    <span class="info-btn" onclick="rocToggleTip(event,'tip-dsc')" title="What is DSC?">i</span>
    <div class="tooltip-box" id="tip-dsc">
      <div class="tt-title">How many DSCs do I need?</div>
      <div class="tt-body">
        Every proposed <b>Director</b> and <b>Shareholder</b> must have their own <b>Class 3 Digital Signature Certificate (DSC)</b> to legally sign the incorporation documents. If an individual acts as both a Director and a Shareholder, they only need <b>one DSC</b>.
        <ul>
          <li><b>Private Limited Company</b> — Minimum 2 DSCs (for 2 individuals)</li>
          <li><b>One Person Company (OPC)</b> — Minimum 1 DSC</li>
        </ul>
      </div>
    </div>
  </span>
</label>
        <div class="stepper">
          <span id="dscLbl">2</span>
          <button class="st-btn" onclick="rocDsc(-1)">−</button>
          <button class="st-btn" onclick="rocDsc(+1)">+</button>
        </div>
      </div>

      <div class="field">
        <label>
  <span class="info-wrap">
    ADT-1 — Auditor Appointment
    <span class="info-btn" onclick="rocToggleTip(event,'tip-adt')" title="What is ADT-1?">i</span>
    <div class="tooltip-box" id="tip-adt">
      <div class="tt-title">Should I include Form ADT-1?</div>
      <div class="tt-body">
        <b>Yes — we strongly recommend keeping this as "Yes".</b><br><br>
        Every new company is legally required to appoint its first Statutory Auditor within <b>30 days of incorporation</b>.
        <div class="tt-alert">
          ⚠️ Under the latest <b>MCA amendment effective July 14, 2025</b>, filing Form ADT-1 is now <b>strictly mandatory</b>. Missing the <b>15-day filing deadline</b> will result in <b>daily multiplying penalties</b>.
        </div>
      </div>
    </div>
  </span>
</label>
        <div class="seg c2">
          <button class="seg-btn on" data-adt="yes" onclick="rocSetADT(this)">Yes</button>
          <button class="seg-btn" data-adt="no" onclick="rocSetADT(this)">No</button>
        </div>
      </div>

    </div></div><div class="card">
    <div class="card-hdr">
      <span class="ico">📊</span>
      <div>
        <div class="res-state"><span class="dot"></span><span id="rs_state">Select a State</span></div>
        <div class="res-title">Fee Breakdown</div>
      </div>
    </div>
    <div class="card-body" id="resultBody">

      <div class="section-lbl">Government Fees — Reimbursable</div>

      <div class="fee-row" id="row_inc">
        <span class="lbl">State Stamp on INC Form</span>
        <span class="tag tag-state">Stamp</span>
        <span class="amt" id="v_inc">—</span>
      </div>
      <div class="fee-row" id="row_moa">
        <span class="lbl">MoA Stamp Duty</span>
        <span class="tag tag-state">Stamp</span>
        <span class="amt" id="v_moa">—</span>
      </div>
      <div class="fee-row" id="row_aoa">
        <span class="lbl">AoA Stamp Duty</span>
        <span class="tag tag-state">Stamp</span>
        <span class="amt" id="v_aoa">—</span>
      </div>
      <div class="fee-row" id="row_run">
        <span class="lbl">Name Reservation (RUN/SPICe+)</span>
        <span class="tag tag-mca">MCA</span>
        <span class="amt" id="v_run">₹1,000</span>
      </div>
      <div class="fee-row" id="row_20a">
        <span class="lbl">INC-20A — Commencement <span style="font-size:11px; color:var(--text-light); font-weight:400;">(mandatory)</span></span>
        <span class="tag tag-mca">MCA</span>
        <span class="amt" id="v_20a">—</span>
      </div>
      <div class="fee-row" id="row_adt">
        <span class="lbl">ADT-1 — Auditor Appointment</span>
        <span class="tag tag-mca">MCA</span>
        <span class="amt" id="v_adt">—</span>
      </div>
      <div class="fee-row" id="row_pantan">
        <span class="lbl">PAN + TAN Application</span>
        <span class="tag tag-mca">Govt</span>
        <span class="amt" id="v_pantan">₹143</span>
      </div>

      <div class="subtotal">
        <span class="lbl">Total Reimbursable Govt Fees</span>
        <span class="amt" id="v_subtotal_gov">—</span>
      </div>

      <div class="section-lbl">Professional &amp; Service Fees</div>

      <div class="fee-row">
        <span class="lbl">DSC (<span id="dsc_lbl2">2</span> unit × ₹1,750)</span>
        <span class="tag tag-prof">DSC</span>
        <span class="amt" id="v_dsc">—</span>
      </div>
      <div class="fee-row">
        <span class="lbl">Professional Fees</span>
        <span class="tag tag-prof">Prof</span>
        <span class="amt" id="v_prof">—</span>
      </div>
      <div class="fee-row">
        <span class="lbl">GST on Fees (18%)</span>
        <span class="tag tag-tax">Tax</span>
        <span class="amt" id="v_gstonf">—</span>
      </div>

      <div class="subtotal">
        <span class="lbl">Total Service Fees</span>
        <span class="amt" id="v_subtotal_svc">—</span>
      </div>

      <div class="aoa-note" id="aoaNote" style="display:none">
        <strong>AoA Stamp Rule:</strong> <span id="aoaRuleText"></span>
      </div>

      <div class="grand">
        <div class="gt-lbl">Grand Total Cost</div>
        <div class="gt-amt" id="v_grand">₹ 0.00</div>
        <div class="gt-note" id="v_grand_note">Select a state and fill inputs above</div>
        <div class="gt-split">
          <div class="gt-part">
            <div class="p-lbl">Reimbursable Govt</div>
            <div class="p-amt" id="gt_reimb">—</div>
          </div>
          <div class="gt-part">
            <div class="p-lbl">Professional & Tax</div>
            <div class="p-amt" id="gt_svc">—</div>
          </div>
        </div>
      </div>

    </div></div></div></div>
</section>

<script>
// === ROC CALCULATOR WIDGET JS ===
// Functions prefixed with roc* to avoid conflicts with host page.
// NOT wrapped in IIFE so inline onclick/onchange handlers can find them.
// ═══════════════════════════════════════════════════════════════════════════
// STATE DATA — sourced from MCA eStamp Rate Schedule (official PDF)
// Fields: incStamp (state), moa, aoa_fn(authCap), aoa_rule,
//         moa_sec8, aoa_sec8_fn, incStamp_sec8
//         moa_nocap, aoa_nocap
// ═══════════════════════════════════════════════════════════════════════════
const STATES = [
{
  name: "Andaman & Nicobar",
  incStamp: 20, incStamp_sec8: 20,
  moa: 200, moa_sec8: 0, moa_nocap: 200,
  aoa_fn: c => 300,   aoa_rule: "Fixed ₹300",
  aoa_sec8_fn: c => 0, aoa_nocap_fn: c => 300,
},
{
  name: "Andhra Pradesh",
  incStamp: 20, incStamp_sec8: 20,
  moa: 500, moa_sec8: 500, moa_nocap: 500,
  aoa_fn: c => Math.min(Math.max(c*0.0015, 1000), 500000),
  aoa_rule: "0.15% of authorised capital; min ₹1,000; max ₹5,00,000",
  aoa_sec8_fn: c => Math.min(Math.max(c*0.0015, 1000), 500000), // sec8 WITH share cap same as regular
  aoa_nocap_fn: c => 1000,
},
{
  name: "Arunachal Pradesh",
  incStamp: 10, incStamp_sec8: 10,
  moa: 200, moa_sec8: 200, moa_nocap: 200,
  aoa_fn: c => 500, aoa_rule: "Fixed ₹500",
  aoa_sec8_fn: c => 500, aoa_nocap_fn: c => 500,
},
{
  name: "Assam",
  incStamp: 15, incStamp_sec8: 15,
  moa: 200, moa_sec8: 200, moa_nocap: 200,
  aoa_fn: c => 310, aoa_rule: "Fixed ₹310",
  aoa_sec8_fn: c => 310, aoa_nocap_fn: c => 310,
},
{
  name: "Bihar",
  incStamp: 20, incStamp_sec8: 20,
  moa: 500, moa_sec8: 0, moa_nocap: 500,
  aoa_fn: c => Math.min(Math.max(c*0.0015, 1000), 500000),
  aoa_rule: "0.15% of auth capital or ₹1,000, whichever is more; max ₹5,00,000",
  aoa_sec8_fn: c => 0, aoa_nocap_fn: c => 1000,
},
{
  name: "Chandigarh",
  incStamp: 3, incStamp_sec8: 3,
  moa: 500, moa_sec8: 0, moa_nocap: 500,
  aoa_fn: c => 1000, aoa_rule: "Fixed ₹1,000",
  aoa_sec8_fn: c => 0, aoa_nocap_fn: c => 1000,
},
{
  name: "Chhattisgarh",
  incStamp: 10, incStamp_sec8: 10,
  moa: 500, moa_sec8: 0, moa_nocap: 500,
  aoa_fn: c => Math.min(Math.max(c*0.0015, 1000), 500000),
  aoa_rule: "0.15% of auth capital or ₹1,000, whichever is more; max ₹5,00,000",
  aoa_sec8_fn: c => 0, aoa_nocap_fn: c => 1000,
},
{
  name: "Dadra & Nagar Haveli",
  incStamp: 1, incStamp_sec8: 1,
  moa: 15, moa_sec8: 0, moa_nocap: 15,
  aoa_fn: c => 25, aoa_rule: "Fixed ₹25",
  aoa_sec8_fn: c => 0, aoa_nocap_fn: c => 25,
},
{
  name: "Daman & Diu",
  incStamp: 20, incStamp_sec8: 20,
  moa: 150, moa_sec8: 0, moa_nocap: 150,
  aoa_fn: c => Math.ceil(c/500000)*1000,
  aoa_rule: "₹1,000 per every ₹5 Lakhs of authorised capital or part thereof",
  aoa_sec8_fn: c => 0, aoa_nocap_fn: c => 1000,
},
{
  name: "Delhi",
  incStamp: 10, incStamp_sec8: 10,
  moa: 200, moa_sec8: 0, moa_nocap: 200,
  aoa_fn: c => Math.min(c*0.0015, 2500000),
  aoa_rule: "0.15% of authorised capital; maximum ₹25,00,000",
  aoa_sec8_fn: c => 0, aoa_nocap_fn: c => 200,
},
{
  name: "Goa",
  incStamp: 50, incStamp_sec8: 50,
  moa: 150, moa_sec8: 0, moa_nocap: 150,
  aoa_fn: c => Math.ceil(c/500000)*1000,
  aoa_rule: "₹1,000 per every ₹5 Lakhs of authorised capital or part thereof",
  aoa_sec8_fn: c => 0, aoa_nocap_fn: c => 1000,
},
{
  name: "Gujarat",
  incStamp: 20, incStamp_sec8: 20,
  moa: 100, moa_sec8: 0, moa_nocap: 100,
  aoa_fn: c => Math.min(c*0.005, 500000),
  aoa_rule: "0.5% of authorised capital; maximum ₹5,00,000",
  aoa_sec8_fn: c => 0, aoa_nocap_fn: c => 1000,
},
{
  name: "Haryana",
  incStamp: 15, incStamp_sec8: 15,
  moa: 60, moa_sec8: 0, moa_nocap: 60,
  aoa_fn: c => c <= 100000 ? 60 : 120,
  aoa_rule: "₹60 if auth. capital ≤ ₹1 Lakh; ₹120 if auth. capital > ₹1 Lakh",
  aoa_sec8_fn: c => 0, aoa_nocap_fn: c => 60,
},
{
  name: "Himachal Pradesh",
  incStamp: 3, incStamp_sec8: 3,
  moa: 60, moa_sec8: 0, moa_nocap: 60,
  aoa_fn: c => c <= 100000 ? 60 : 120,
  aoa_rule: "₹60 if auth. capital ≤ ₹1 Lakh; ₹120 if auth. capital > ₹1 Lakh",
  aoa_sec8_fn: c => 0, aoa_nocap_fn: c => 60,
},
{
  name: "Jammu & Kashmir",
  incStamp: 10, incStamp_sec8: 10,
  moa: 150, moa_sec8: 0, moa_nocap: 150,
  aoa_fn: c => c <= 100000 ? 150 : 300,
  aoa_rule: "₹150 if auth. capital ≤ ₹1 Lakh; ₹300 if auth. capital > ₹1 Lakh",
  aoa_sec8_fn: c => 0, aoa_nocap_fn: c => 150,
},
{
  name: "Jharkhand",
  incStamp: 5, incStamp_sec8: 5,
  moa: 63, moa_sec8: 0, moa_nocap: 63,
  aoa_fn: c => 105, aoa_rule: "Fixed ₹105",
  aoa_sec8_fn: c => 0, aoa_nocap_fn: c => 105,
},
{
  name: "Karnataka",
  incStamp: 20, incStamp_sec8: 20,
  moa: 1000, moa_sec8: 0, moa_nocap: 1000,
  aoa_fn: c => Math.max(Math.ceil(c/1000000)*500, 500),
  aoa_rule: "₹500 per every ₹10 Lakhs of authorised capital or part thereof; minimum ₹500",
  aoa_sec8_fn: c => 0, aoa_nocap_fn: c => 500,
},
{
  name: "Kerala",
  incStamp: 25, incStamp_sec8: 25,
  moa: 1000, moa_sec8: 1000, moa_nocap: 1000,
  aoa_fn: c => c<=1000000 ? 2000 : c<=2500000 ? 5000 : c*0.005,
  aoa_rule: "Auth. cap ≤₹10L → ₹2,000 | ₹10L–₹25L → ₹5,000 | >₹25L → 0.5% of auth. capital",
  aoa_sec8_fn: c => c<=1000000 ? 2000 : c<=2500000 ? 5000 : c*0.005,
  aoa_nocap_fn: c => 2000,
},
{
  name: "Lakshadweep",
  incStamp: 25, incStamp_sec8: 25,
  moa: 500, moa_sec8: 500, moa_nocap: 500,
  aoa_fn: c => 1000, aoa_rule: "Fixed ₹1,000",
  aoa_sec8_fn: c => 1000, aoa_nocap_fn: c => 1000,
},
{
  name: "Madhya Pradesh",
  incStamp: 50, incStamp_sec8: 50,
  moa: 2500, moa_sec8: 2500, moa_nocap: 2500,
  aoa_fn: c => Math.min(Math.max(c*0.0015, 5000), 2500000),
  aoa_rule: "0.15% of authorised capital; minimum ₹5,000; maximum ₹25,00,000",
  aoa_sec8_fn: c => Math.min(Math.max(c*0.0015, 5000), 2500000),
  aoa_nocap_fn: c => 5000,
},
{
  name: "Maharashtra",
  incStamp: 100, incStamp_sec8: 100,
  moa: 200, moa_sec8: 0, moa_nocap: 0,
  aoa_fn: c => Math.min(Math.ceil(c/500000)*1000, 5000000),
  aoa_rule: "₹1,000 per every ₹5 Lakhs of auth. capital or part thereof; max ₹50 Lakhs (no duty beyond ₹250 Cr)",
  aoa_sec8_fn: c => 0, aoa_nocap_fn: c => 0,
},
{
  name: "Manipur",
  incStamp: 10, incStamp_sec8: 10,
  moa: 100, moa_sec8: 100, moa_nocap: 100,
  aoa_fn: c => 150, aoa_rule: "Fixed ₹150",
  aoa_sec8_fn: c => 150, aoa_nocap_fn: c => 150,
},
{
  name: "Meghalaya",
  incStamp: 10, incStamp_sec8: 10,
  moa: 100, moa_sec8: 100, moa_nocap: 100,
  aoa_fn: c => 300, aoa_rule: "Fixed ₹300",
  aoa_sec8_fn: c => 300, aoa_nocap_fn: c => 300,
},
{
  name: "Mizoram",
  incStamp: 10, incStamp_sec8: 10,
  moa: 100, moa_sec8: 100, moa_nocap: 100,
  aoa_fn: c => 150, aoa_rule: "Fixed ₹150",
  aoa_sec8_fn: c => 150, aoa_nocap_fn: c => 150,
},
{
  name: "Nagaland",
  incStamp: 10, incStamp_sec8: 10,
  moa: 100, moa_sec8: 100, moa_nocap: 100,
  aoa_fn: c => 150, aoa_rule: "Fixed ₹150",
  aoa_sec8_fn: c => 150, aoa_nocap_fn: c => 150,
},
{
  name: "Odisha",
  incStamp: 10, incStamp_sec8: 10,
  moa: 300, moa_sec8: 300, moa_nocap: 300,
  aoa_fn: c => 300, aoa_rule: "Fixed ₹300 (applies to all company types)",
  aoa_sec8_fn: c => 300, aoa_nocap_fn: c => 300,
},
{
  name: "Puducherry",
  incStamp: 10, incStamp_sec8: 10,
  moa: 200, moa_sec8: 0, moa_nocap: 200,
  aoa_fn: c => 300, aoa_rule: "Fixed ₹300",
  aoa_sec8_fn: c => 0, aoa_nocap_fn: c => 300,
},
{
  name: "Punjab",
  incStamp: 25, incStamp_sec8: 25,
  moa: 5000, moa_sec8: 0, moa_nocap: 5000,
  aoa_fn: c => c <= 100000 ? 5000 : 10000,
  aoa_rule: "₹5,000 if auth. capital ≤ ₹1 Lakh; ₹10,000 if auth. capital > ₹1 Lakh",
  aoa_sec8_fn: c => 0, aoa_nocap_fn: c => 5000,
},
{
  name: "Rajasthan",
  incStamp: 10, incStamp_sec8: 10,
  moa: 500, moa_sec8: 500, moa_nocap: 500,
  aoa_fn: c => c * 0.005,
  aoa_rule: "0.5% of authorised capital (no cap for initial registration)",
  aoa_sec8_fn: c => c * 0.005, // Sec8 WITH share capital: same
  aoa_nocap_fn: c => 500,
},
{
  name: "Tamil Nadu",
  incStamp: 20, incStamp_sec8: 20,
  moa: 200, moa_sec8: 0, moa_nocap: 200,
  aoa_fn: c => 300, aoa_rule: "Fixed ₹300",
  aoa_sec8_fn: c => 0, aoa_nocap_fn: c => 300,
},
{
  name: "Telangana",
  incStamp: 20, incStamp_sec8: 20,
  moa: 500, moa_sec8: 500, moa_nocap: 500,
  aoa_fn: c => Math.min(Math.max(c*0.0015, 1000), 500000),
  aoa_rule: "0.15% of authorised capital; minimum ₹1,000; maximum ₹5,00,000",
  aoa_sec8_fn: c => Math.min(Math.max(c*0.0015, 1000), 500000),
  aoa_nocap_fn: c => 1000,
},
{
  name: "Tripura",
  incStamp: 10, incStamp_sec8: 10,
  moa: 100, moa_sec8: 100, moa_nocap: 100,
  aoa_fn: c => 150, aoa_rule: "Fixed ₹150",
  aoa_sec8_fn: c => 150, aoa_nocap_fn: c => 150,
},
{
  name: "Uttar Pradesh",
  incStamp: 10, incStamp_sec8: 0,  // Sec8 without share cap = NIL
  moa: 500, moa_sec8: 0, moa_nocap: 500,
  aoa_fn: c => 500, aoa_rule: "Fixed ₹500 (applies to all incl. Sec8 with share capital)",
  aoa_sec8_fn: c => 0,  // Sec8 without share cap = NIL
  aoa_nocap_fn: c => 500,
},
{
  name: "Uttarakhand",
  incStamp: 10, incStamp_sec8: 0,
  moa: 500, moa_sec8: 0, moa_nocap: 500,
  aoa_fn: c => 500, aoa_rule: "Fixed ₹500 (applies to all incl. Sec8 with share capital)",
  aoa_sec8_fn: c => 0,
  aoa_nocap_fn: c => 500,
},
{
  name: "West Bengal",
  incStamp: 10, incStamp_sec8: 10,
  moa: 60, moa_sec8: 0, moa_nocap: 60,
  aoa_fn: c => 300, aoa_rule: "Fixed ₹300",
  aoa_sec8_fn: c => 0, aoa_nocap_fn: c => 300,
},
];

// ═══════════════════════════════════════════════════════════════════════════
// ROC REGISTRATION FEE — Companies (Registration Offices & Fees) Rules, 2014
// ═══════════════════════════════════════════════════════════════════════════
function rocCalcROCFee(authCap, companyType) {
  if (companyType === 'nocap') return 0; // no share capital → different fee structure (not computed here)

  const isOPCSmall = (companyType === 'opc' || companyType === 'small');

  if (isOPCSmall) {
    if (authCap <= 1000000) return 2000;
    const excess = Math.min(authCap, 5000000) - 1000000;
    return 2000 + Math.ceil(excess / 10000) * 200;
  }

  // Regular (Private, Public, Section 8 with share capital)
  if (authCap <= 100000) return 5000;

  let fee = 5000;
  // Slab 1: ₹1L to ₹5L → ₹400 per ₹10,000
  if (authCap > 100000) {
    const s1 = Math.min(authCap, 500000) - 100000;
    fee += Math.ceil(s1 / 10000) * 400;
  }
  // Slab 2: ₹5L to ₹50L → ₹300 per ₹10,000
  if (authCap > 500000) {
    const s2 = Math.min(authCap, 5000000) - 500000;
    fee += Math.ceil(s2 / 10000) * 300;
  }
  // Slab 3: ₹50L to ₹1Cr → ₹100 per ₹10,000
  if (authCap > 5000000) {
    const s3 = Math.min(authCap, 10000000) - 5000000;
    fee += Math.ceil(s3 / 10000) * 100;
  }
  // Slab 4: above ₹1Cr → ₹75 per ₹10,000; cap additional at ₹2.5 Cr
  if (authCap > 10000000) {
    const s4 = authCap - 10000000;
    const addlSoFar = fee - 5000;
    const remainCap = 25000000 - addlSoFar;
    fee += Math.min(Math.ceil(s4 / 10000) * 75, remainCap);
  }
  return fee;
}

// INC-20A fee — filing fee per Table of Fees section 5
function rocCalcINC20AFee(nominalCap) {
  if (nominalCap < 100000)   return 200;
  if (nominalCap < 500000)   return 300;
  if (nominalCap < 2500000)  return 400;
  if (nominalCap < 10000000) return 500;
  return 600;
}

// ADT-1 fee — same slab as section 5 filing fees
function rocCalcADTFee(nominalCap) {
  if (nominalCap < 100000)   return 200;
  if (nominalCap < 500000)   return 300;
  if (nominalCap < 2500000)  return 400;
  if (nominalCap < 10000000) return 500;
  return 600;
}

// ═══════════════════════════════════════════════════════════════════════════
// APP STATE
// ═══════════════════════════════════════════════════════════════════════════
let dscCount = 2, adtReq = true;
const inc20aReq = true; // always mandatory
let companyType = 'pvt', sortMode = 'grand';
const DSC_UNIT = 1750, PROF = 2999, GST_ON_FEES = 1439.82;

// Populate state select
const sel = document.getElementById('stateSelect');
sel.innerHTML = '<option value="">— Select a State —</option>';
STATES.forEach(s => {
  const o = document.createElement('option'); o.value = s.name; o.textContent = s.name; sel.appendChild(o);
});
sel.value = 'Maharashtra';

// ═══════════════════════════════════════════════════════════════════════════
// HELPERS
// ═══════════════════════════════════════════════════════════════════════════
function rocFmt(n) {
  if (n === null || isNaN(n)) return '—';
  return '₹ ' + n.toLocaleString('en-IN', {minimumFractionDigits:2, maximumFractionDigits:2});
}
function rocFmtShort(n) {
  if (n === null || isNaN(n) || n === 0) return '₹0';
  return '₹' + n.toLocaleString('en-IN', {maximumFractionDigits:0});
}

function rocSetCT(btn) {
  companyType = btn.dataset.ct;
  document.querySelectorAll('[data-ct]').forEach(b => b.classList.remove('on'));
  btn.classList.add('on');
  rocCalc();
}
function rocSetADT(btn) {
  adtReq = btn.dataset.adt === 'yes';
  document.querySelectorAll('[data-adt]').forEach(b => b.classList.remove('on'));
  btn.classList.add('on'); rocCalc();
}
function rocDsc(d) {
  dscCount = Math.max(0, Math.min(10, dscCount+d));
  document.getElementById('dscLbl').textContent = dscCount;
  rocCalc();
}

function rocGetStampFees(s, authCap) {
  const isSec8 = companyType === 'sec8';
  const isNoCap = companyType === 'nocap';
  const inc = isSec8 ? s.incStamp_sec8 : s.incStamp;
  const moa = isNoCap ? s.moa_nocap : isSec8 ? s.moa_sec8 : s.moa;
  const aoa = isNoCap ? s.aoa_nocap_fn(authCap) : isSec8 ? s.aoa_sec8_fn(authCap) : s.aoa_fn(authCap);
  return { inc, moa, aoa };
}

// ═══════════════════════════════════════════════════════════════════════════
// MAIN CALCULATE
// ═══════════════════════════════════════════════════════════════════════════
function rocCalc() {
  const stateName = document.getElementById('stateSelect').value;
  const authCap = parseFloat(document.getElementById('authCap').value) || 0;
  const paidCap = parseFloat(document.getElementById('paidCap').value) || 0;
  const s = STATES.find(x => x.name === stateName);

  document.getElementById('dsc_lbl2').textContent = dscCount;

  if (!s) {
    document.getElementById('rs_state').textContent = 'Select a State';
    return;
  }

  document.getElementById('rs_state').textContent = s.name;

  const { inc, moa, aoa } = rocGetStampFees(s, authCap);
  const runFee    = 1000;
  const pantanFee = 143;
  const inc20aFee = companyType !== 'nocap' ? rocCalcINC20AFee(authCap) : 0;
  const adtFee    = adtReq ? rocCalcADTFee(authCap) : 0;

  const totalGovFees  = inc + moa + aoa + runFee + pantanFee + inc20aFee + adtFee;
  const dscFee        = dscCount * DSC_UNIT;
  const totalSvcFees  = dscFee + PROF + GST_ON_FEES;
  const grand         = totalGovFees + totalSvcFees;

  const set = (id, val) => { const el = document.getElementById(id); if (el) el.textContent = val; };
  const dim = (id, flag) => { const el = document.getElementById(id); if (el) el.classList.toggle('dimmed', flag); };

  set('v_inc',    inc > 0 ? rocFmt(inc) : '₹ NIL');
  set('v_moa',    moa > 0 ? rocFmt(moa) : '₹ NIL');
  set('v_aoa',    aoa > 0 ? rocFmt(aoa) : '₹ NIL');
  set('v_run',    rocFmt(runFee));
  set('v_20a',    companyType !== 'nocap' ? rocFmt(inc20aFee) : '₹ NIL');
  set('v_adt',    adtReq ? rocFmt(adtFee) : '₹ NIL');
  set('v_pantan', rocFmt(pantanFee));
  set('v_subtotal_gov', rocFmt(totalGovFees));

  set('v_dsc',    rocFmt(dscFee));
  set('v_prof',   rocFmt(PROF));
  set('v_gstonf', rocFmt(GST_ON_FEES));
  set('v_subtotal_svc', rocFmt(totalSvcFees));

  dim('row_20a', companyType === 'nocap');
  dim('row_adt',  !adtReq);

  set('v_grand', rocFmt(grand));
  set('v_grand_note', `${s.name} · ₹${(authCap/100000).toFixed(1)}L auth cap · ${dscCount} DSC${companyType!=='nocap'?' · INC-20A':''}`);
  set('gt_reimb', rocFmtShort(totalGovFees));
  set('gt_svc',   rocFmtShort(totalSvcFees));
  document.getElementById('aoaNote').style.display = 'block';
  document.getElementById('aoaRuleText').textContent = s.aoa_rule;
}

// ── INIT ──
rocCalc();

// ── TOOLTIP: fixed-position so it escapes overflow:hidden ──
function rocPositionTooltip(btn, box) {
  const r = btn.getBoundingClientRect();
  const tipW = 300;
  let left = r.left;
  // keep within viewport
  if (left + tipW > window.innerWidth - 12) left = window.innerWidth - tipW - 12;
  if (left < 8) left = 8;
  box.style.left = left + 'px';
  box.style.top  = (r.bottom + 8) + 'px';
}

function rocToggleTip(e, id) {
  e.stopPropagation();
  const box  = document.getElementById(id);
  const btn  = e.currentTarget;
  const isVis = box.classList.contains('visible');
  // close all
  document.querySelectorAll('.tooltip-box.visible').forEach(el => el.classList.remove('visible'));
  if (!isVis) {
    rocPositionTooltip(btn, box);
    box.classList.add('visible');
  }
}

// hover support for desktop
document.addEventListener('DOMContentLoaded', function() {
  document.querySelectorAll('.info-btn').forEach(btn => {
    const id  = btn.getAttribute('onclick').match(/'([^']+)'/)[1];
    const box = document.getElementById(id);
    btn.addEventListener('mouseenter', function() {
      rocPositionTooltip(btn, box);
      box.classList.add('visible');
    });
    btn.addEventListener('mouseleave', function() {
      setTimeout(() => { if (!box.matches(':hover')) box.classList.remove('visible'); }, 80);
    });
    box.addEventListener('mouseleave', function() {
      box.classList.remove('visible');
    });
  });
});

document.addEventListener('click', function() {
  document.querySelectorAll('.tooltip-box.visible').forEach(el => el.classList.remove('visible'));
});
window.addEventListener('scroll', function() {
  document.querySelectorAll('.tooltip-box.visible').forEach(el => el.classList.remove('visible'));
}, true);
</script>

<!-- /ROC FEE CALCULATOR -->

<!-- SECTION 12: BENEFITS -->
<section class="why-choose-section" id="benefits-section">
    <div class="section-container">
        <div style="text-align:center;margin-bottom:48px;">
            <div class="section-eyebrow"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg> Key Benefits</div>
            <h2 class="section-title">Why Choose Professional Producer Company Registration?</h2>
        </div>
        <div class="features-grid"><article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M14 2H6a2 2 0 00-2 2v16a2 2 0 002 2h12a2 2 0 002-2V8z"/><path d="M14 2v6h6"/></svg></div><h3>Section 581B Compliance</h3><p>MOA objects must strictly conform to Section 581B. Non-compliant objects lead to ROC rejection. Our CS team ensures first-time approval with precise statutory language.</p></article><article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M17 21v-2a4 4 0 00-4-4H5a4 4 0 00-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M23 21v-2a4 4 0 00-3-3.87M16 3.13a4 4 0 010 7.75"/></svg></div><h3>Member KYC Management</h3><p>Coordinating 10+ members' documents, especially in rural areas, requires systematic tracking. We handle the entire KYC process for rural producers.</p></article><article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg></div><h3>Government Scheme Linkage</h3><p>Post-registration NABARD and FPO scheme applications require specific formats and projections. We prepare the complete application for the Rs 6,865 crore FPO scheme.</p></article><article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><path d="M12 6v6l4 2"/></svg></div><h3>Ongoing Compliance</h3><p>Annual ROC filings, AGM within 90 days, minimum 4 board meetings/year, statutory reserve fund management - all handled by our dedicated team.</p></article></div>
    </div>
</section>

<!-- SECTION 12A: SOCIAL PROOF -->
<section class="content-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Why 10,000+ Businesses Trust Patron Accounting</h2>
            <div class="content-text">
                
                <p><strong>10,000+ Businesses Served | 4.9 Google Rating | 50,000+ Documents Filed | 15+ Years of Practice</strong></p><p>"Professionalism, attention to detail, and timely communication made the process smooth." - Subhendu Mishra</p><p>"Took minimum time, really impressive acumen. And it's not expensive at all." - Rajib Dutta</p><p><strong>Trusted by:</strong> Hyundai, Asian Paints, Bridgestone, and 10,000+ businesses across India.</p><p><strong>With offices in Pune, Mumbai, Delhi, and Gurugram, Patron Accounting serves businesses across India - both in-person and remotely.</strong></p>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 13: SELF-FILING vs PROFESSIONAL COMPARISON -->
<section class="content-section" id="comparison-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Producer Company vs Cooperative Society vs Private Limited Company</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Parameter</th><th>Producer Company</th><th>Cooperative Society</th><th>Private Limited Company</th></tr></thead>
                    <tbody>
                        <tr><td><strong>Governing Law</strong></td><td>Companies Act, 1956 Part IXA (via Sec 465(1), CA 2013)</td><td>State Cooperative Societies Acts</td><td>Companies Act, 2013</td></tr><tr><td><strong>Minimum Members</strong></td><td>10 individuals or 2 institutions</td><td>10 (varies by state)</td><td>2 directors + 2 shareholders</td></tr><tr><td><strong>Voting Rights</strong></td><td>One member one vote (Sec 581D)</td><td>One member one vote</td><td>Based on shareholding</td></tr><tr><td><strong>Govt Interference</strong></td><td>Minimal - ROC regulated</td><td>High - state Registrar control</td><td>Minimal - ROC regulated</td></tr><tr><td><strong>Profit Distribution</strong></td><td>Patronage bonus based on participation</td><td>Limited dividend</td><td>Dividend based on shareholding</td></tr><tr><td><strong>Geographic Scope</strong></td><td>Pan-India</td><td>State-specific</td><td>Pan-India</td></tr><tr><td><strong>NABARD Support</strong></td><td>Eligible for FPO scheme</td><td>Eligible</td><td>Not specifically eligible</td></tr><tr><td><strong>Best For</strong></td><td>Farmers, rural producers, FPOs</td><td>Local cooperative activities</td><td>Commercial businesses</td></tr>

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
            <h2 class="section-title">Related Registration Services from Patron Accounting</h2>
            <div class="content-text">
                
                <ul><li><strong><a href="/private-limited-company-registration">Private Limited Company Registration</a></strong> - For commercial business structures</li><li><strong><a href="/llp-incorporation">LLP Registration</a></strong> - For limited liability with lower compliance</li><li><strong><a href="/gst-registration">GST Registration</a></strong> - Mandatory for turnover exceeding threshold</li><li><strong><a href="/fssai-registration">FSSAI Registration</a></strong> - For food processing Producer Companies</li><li><strong><a href="/iec-registration">IEC Registration</a></strong> - For Producer Companies seeking to export</li></ul>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 15A: LEGAL FRAMEWORK -->
<section class="content-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Legal and Compliance Framework for Producer Companies</h2>
            <div class="content-text">
                
                <p><strong>Governing Act:</strong> <a href="https://www.mca.gov.in/Ministry/pdf/Producer_Company.pdf" target="_blank" rel="noopener">Companies Act, 1956 - Part IXA (Sections 581A to 581ZT)</a>, preserved by Section 465(1) of the Companies Act, 2013.</p><p><strong>Key Sections:</strong> Section 581A defines Producer, Producer Company, Primary Produce, Active Member. Section 581B specifies objects - production, harvesting, procurement, grading, marketing, processing, financing, technical services, insurance, education. Section 581C covers formation - 10 individuals or 2 institutions; Registrar to issue COI within 30 days; deemed private company without 200-member limit. Section 581D establishes one-member-one-vote regardless of shareholding. Section 581F mandates name ending 'Producer Company Limited'. Section 581O requires minimum 5, maximum 15 directors who must be members. Section 581Y makes Company Secretary mandatory if turnover exceeds Rs 5 crore. Section 581ZI covers statutory reserve requirements.</p><p><strong>Tax Provisions:</strong> Producer Companies engaged in agricultural income activities may claim 100% tax deduction under Section 80P of the Income Tax Act, 1961 (subject to conditions). FPOs with turnover up to Rs 100 crore were eligible for 100% tax deduction on profits from domestic market sales. Standard corporate tax of 22% (plus surcharge and cess) applies to non-agricultural income. Agricultural income is exempt under Section 10(1) of the Income Tax Act.</p><p><strong>Regulatory Authority:</strong> Registrar of Companies (ROC), Ministry of Corporate Affairs (<a href="https://www.mca.gov.in" target="_blank" rel="noopener">MCA</a>).</p>

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
                    <h2 class="faq-expanded__title">Frequently Asked Questions on Producer Company Registration</h2>
                    <p class="faq-expanded__lead">Get answers to the most common questions about registering a Producer Company in India under Part IXA of the Companies Act.</p>
                    @include('partials.bigin-form', [
                        'variant'  => 'compact',
                        'service'  => 'Producer Company Registration',
                    ])
                </aside>
                <div class="faq-expanded__list">
                    <div class="faq-expanded__item" id="faq-1">
                        <h3 class="faq-expanded__q">What is a Producer Company?</h3>
                        <div class="faq-expanded__a"><p>A Producer Company is a body corporate registered under Part IXA (Sections 581A to 581ZT) of the Companies Act, 1956, designed for primary producers in agriculture, horticulture, animal husbandry, fisheries, and allied activities. It combines the corporate governance of a company with the mutual benefit principles of a cooperative, enabling farmers and rural producers to collectively produce, process, market, and export their primary produce.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-2">
                        <h3 class="faq-expanded__q">How many members are required to register a Producer Company?</h3>
                        <div class="faq-expanded__a"><p>Under Section 581C(1), a Producer Company can be formed by 10 or more individual producers, or 2 or more producer institutions, or a combination of 10 or more individuals and producer institutions. A minimum of 5 directors is required under Section 581O, and all directors must be members of the company.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-3">
                        <h3 class="faq-expanded__q">What is the minimum capital required for a Producer Company?</h3>
                        <div class="faq-expanded__a"><p>The minimum paid-up share capital for a Producer Company is Rs 5 lakh. The share capital consists of equity shares only. Each member must hold at least one share. The shares are not freely transferable - transfer requires board approval and can only be to another member or person eligible for membership.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-4">
                        <h3 class="faq-expanded__q">What is the difference between a Producer Company and a cooperative society?</h3>
                        <div class="faq-expanded__a"><p>A Producer Company is governed by Part IXA of the Companies Act, 1956, with minimal government interference, ROC regulation, pan-India scope, and corporate governance. A cooperative society is governed by state Cooperative Societies Acts with significant state government control, limited to state jurisdiction. Producer Companies were introduced specifically to address governance weaknesses of cooperative societies.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-5">
                        <h3 class="faq-expanded__q">Is a Producer Company tax exempt?</h3>
                        <div class="faq-expanded__a"><p>Producer Companies engaged in agricultural activities may claim deduction under Section 80P of the Income Tax Act, 1961. FPOs with turnover up to Rs 100 crore were eligible for 100% tax deduction on profits from domestic market sales. Agricultural income is exempt from income tax under Section 10(1). Non-agricultural income is taxed at standard corporate rates.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-6">
                        <h3 class="faq-expanded__q">What are the annual compliance requirements for a Producer Company?</h3>
                        <div class="faq-expanded__a"><p>Producer Companies must hold minimum 4 board meetings per year (at least once every 3 months). The first AGM must be held within 90 days of incorporation. Subsequent AGMs must be held within 6 months of financial year end. Annual returns and financial statements must be filed with ROC. If turnover exceeds Rs 5 crore, appointment of a Company Secretary is mandatory under Section 581Y.</p></div>
                    </div>
                </div>
            </div>


            <!-- Quick Answers -->
            <div class="highlight-box" style="margin-top:32px;">
                <p><strong>Quick Answers</strong></p>
                <p><strong>Can a non-farmer be a member?</strong> No. Only 'producers' as defined in Section 581A(k) - persons engaged in activities connected with primary produce - can be members.</p><p><strong>Can the company name omit 'Producer Company Limited'?</strong> No. Section 581F(a) mandates that the name must end with 'Producer Company Limited'.</p><p><strong>Is there a member limit?</strong> No. Unlike private companies (200 limit), Producer Companies have no upper limit on members under Section 581C(5).</p><p><strong>What is a withheld price?</strong> Part of the price for goods supplied by a member, withheld by the company for payment on a subsequent date - per Section 581A(n).</p>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 18: URGENCY CTA -->
<section class="content-section" style="background: var(--orange-lighter) !important; border-left: 4px solid var(--orange);">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Why Register Your Producer Company Now?</h2>
            <div class="content-text">
                
                <p>The Government of India has allocated Rs 6,865 crore under the scheme for Formation and Promotion of 10,000 Farmer Producer Organisations (FPOs). This scheme provides equity grants, credit guarantee, and capacity building support to registered Producer Companies. With increasing demand for organised agricultural marketing and export, incorporating a Producer Company gives farmers collective bargaining power, access to institutional credit, and eligibility for government support programs.</p><p><strong>Start today - <a href="tel:+919459456700">Call +91 945 945 6700</a> or <a href="https://wa.me/919459456700?text=Hello%2C%20I%20just%20visited%20your%20Producer%20Company%20Registration%20Services%20page.%20I%20would%20like%20to%20know%20more%20about%20it." target="_blank" rel="noopener">WhatsApp us</a>.</strong></p>

            </div>
        </div>
    </div>
</section>

<!-- CONCLUSION + CTA BLOCK (Dark) -->
<section class="content-section" style="background: var(--blue) !important;">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title" style="color:#FFFFFF !important;">Register Your Producer Company with Expert CA and CS Support</h2>
            <div class="content-text" style="text-align:left;">
                
                <p style="color:rgba(255,255,255,0.9);">Producer Company Registration under Part IXA of the Companies Act provides Indian farmers, rural producers, and agricultural entrepreneurs with a corporate structure designed specifically for their needs. With 10,000 FPOs being promoted under a Rs 6,865 crore government scheme, this is the most favourable time to incorporate a Producer Company.</p><p style="color:rgba(255,255,255,0.9);">Patron Accounting's CA and CS team provides end-to-end Producer Company registration support including DSC, DIN, SPICe+ filing, MOA/AOA drafting per Section 581B and 581G, post-incorporation compliance, and NABARD/FPO scheme registration. With 15+ years of practice, offices in Pune, Mumbai, Delhi, and Gurugram, and 10,000+ businesses served, we deliver reliable producer company registration across India.</p>

            </div>
            <div style="display:flex;gap:14px;flex-wrap:wrap;margin-top:24px;">
                <a href="tel:+919459456700" style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:var(--orange);color:#fff;border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#128222; Call +91 945 945 6700</a>
                <a href="https://wa.me/919459456700?text=Hello%2C%20I%20just%20visited%20your%20Producer%20Company%20Registration%20Services%20page.%20I%20would%20like%20to%20know%20more%20about%20it." target="_blank" style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:#25D366;color:#fff;border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;" rel="noopener">&#128172; WhatsApp Us</a>
                <a href="mailto:sales@patronaccounting.com?subject=Enquiry%20for%20Producer%20Company%20Registration%20Services&body=Hello%2C%20I%20just%20visited%20your%20Producer%20Company%20Registration%20Services%20page.%20I%20would%20like%20to%20know%20more%20about%20it.%0A%0AThank%20you." style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:transparent;color:#fff;border:2px solid rgba(255,255,255,0.3);border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#9993;&#65039; Email Us</a>
            </div>
            <p style="color:rgba(255,255,255,0.7);font-size:13px;margin-top:16px;">Book a Free Consultation - No Obligation.</p>
        </div>
    </div>
</section>

<!-- GSTAT STATE BENCH CITY PAGES (32 Pages) -->
<section class="content-section" style="padding:48px 32px;background:var(--gray-50);">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title" style="text-align:center;margin-bottom:12px;">Producer Company Registration Across India</h2>
            <p style="text-align:center;color:var(--text-muted);font-size:15px;margin-bottom:40px;">Register your Producer Company from anywhere in India with our expert CA and CS team.</p>
           
            <div class="pa-city-block" style="margin-bottom:40px;"><div class="pa-city-grid">
<a href="/producer-company-registration/pune" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Pune</div><div class="pa-card-sub">Maharashtra</div></div></a>
<a href="/producer-company-registration/mumbai" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Mumbai</div><div class="pa-card-sub">Maharashtra</div></div></a>
<a href="/producer-company-registration/delhi" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Delhi</div><div class="pa-card-sub">NCR</div></div></a>
<a href="/producer-company-registration/gurugram" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Gurugram</div><div class="pa-card-sub">Haryana</div></div></a>
</div></div>
<div class="pa-city-block"><div class="pa-block-title">Related Services</div><div class="pa-block-sub">End-to-end support for Producer Company Registration</div><div class="pa-cross-grid">
<a href="/private-limited-company-registration" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Private Limited Company Registration</div><div class="pa-card-sub">India</div></div></a>
<a href="/llp-incorporation" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">LLP Registration</div><div class="pa-card-sub">India</div></div></a>
<a href="/nidhi-company-registration" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Nidhi Company Registration</div><div class="pa-card-sub">India</div></div></a>
<a href="/fssai-registration" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">FSSAI Registration</div><div class="pa-card-sub">India</div></div></a>
<a href="/iec-registration" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">IEC Registration (Export)</div><div class="pa-card-sub">India</div></div></a>
<a href="/gst-registration" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">GST Registration</div><div class="pa-card-sub">India</div></div></a>
</div></div>
        </div>
    </div>
</section>

<!-- CONTENT FRESHNESS FOOTER -->
<section class="content-section" style="padding:32px;">
    <div class="content-container">
        <div class="text-content" style="font-size:13px;color:var(--text-muted);">
            <p><strong>Content Created:</strong> 10 March 2026 &nbsp;|&nbsp; <strong>Last Updated:</strong> <span id="lastUpdatedFooter">10 March 2026</span> &nbsp;|&nbsp; <strong>Next Review:</strong> 10 December 2026 &nbsp;|&nbsp; <strong>Reviewed By:</strong> CA &amp; CS Team, Patron Accounting LLP</p>
            <p>This page is reviewed every 9 months by our CA and CS team. Review triggers include Companies Act amendment for Producer Companies, FPO scheme extension, Finance Act tax benefit changes, NABARD policy updates, Section 80P amendment.</p>
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
