
@extends('layouts.service-app')

<!-- External Dependencies (loaded by master layout in production) -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Barlow:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,400&family=DM+Sans:opsz,wght@9..40,400;9..40,500;9..40,600;9..40,700&display=swap" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

@section('meta')
    <title>ESIC Calculation &amp; Compliance Delhi NCR – Returns &amp; Wages</title>
    <meta name="description" content="ESIC calculation in Delhi: Employee 0.75% + Employer 3.25% on gross wages. Monthly deposit by 15th. Half-yearly returns. Patron +91 945 945 6700.">
    <link rel="canonical" href="/esic-calculation-and-compliance-services/delhi">
    <meta name="robots" content="index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1">
    <meta property="og:title" content="ESIC Calculation &amp; Compliance Delhi NCR – Returns &amp; Wages">
    <meta property="og:description" content="ESIC calculation in Delhi: Employee 0.75% + Employer 3.25% on gross wages. Monthly deposit by 15th. Half-yearly returns. Patron +91 945 945 6700.">
    <meta property="og:url" content="/esic-calculation-and-compliance-services/delhi">
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="Patron Accounting">
    <meta property="og:image" content="https://www.patronaccounting.com/images/og-default-square.png">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="1200">
    <meta property="og:image:type" content="image/png">
    <meta property="og:image:secure_url" content="https://www.patronaccounting.com/images/og-default-square.png">
    <meta property="og:image:alt" content="Patron Accounting - partner you can rely on">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="ESIC Calculation &amp; Compliance Delhi NCR – Returns &amp; Wages">
    <meta name="twitter:description" content="ESIC calculation in Delhi: Employee 0.75% + Employer 3.25% on gross wages. Monthly deposit by 15th. Half-yearly returns. Patron +91 945 945 6700.">
    <meta name="twitter:image" content="https://www.patronaccounting.com/images/og-default-square.png">
@endsection

@section('schema')
    <script type="application/ld+json">{
  "@context": "https://schema.org",
  "@graph": [
    {
      "@type": "Service",
      "name": "ESIC Calculation & Compliance Services in Delhi",
      "description": "ESIC calculation in Delhi: Employee 0.75% + Employer 3.25% on gross wages. Monthly deposit by 15th. Half-yearly returns. Patron +91 945 945 6700.",
      "url": "https://www.patronaccounting.com/esic-calculation-and-compliance-services/delhi",
      "serviceType": "ESIC Calculation & Compliance Services in Delhi",
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
        "url": "https://www.patronaccounting.com/esic-calculation-and-compliance-services/delhi",
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
          "name": "Compliance Services",
          "item": "https://www.patronaccounting.com/esic-calculation-and-compliance-services"
        },
        {
          "@type": "ListItem",
          "position": 3,
          "name": "ESIC Calculation & Compliance in Delhi",
          "item": "https://www.patronaccounting.com/esic-calculation-and-compliance-services/delhi"
        }
      ]
    },
    {
      "@type": "FAQPage",
      "mainEntity": [
        {
          "@type": "Question",
          "name": "How is ESI calculated for Delhi employees?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "ESI is calculated on gross monthly wages (not CTC or basic). Employee 0.75% + Employer 3.25%. Gross includes basic, DA, HRA, CCA, regular incentives, overtime. Example: Rs 18,000 gross = Rs 135 employee + Rs 585 employer = Rs 720 total. Patron calculates per employee from monthly payroll."
          }
        },
        {
          "@type": "Question",
          "name": "What is the penalty for late ESI deposit in Delhi?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "12% p.a. simple interest from the 16th for each day of delay. Over 6 months: up to 25% damages. Section 85: imprisonment up to 2 years + fine Rs 5,000. Income Tax Act also disallows late employer contribution as business expense. Patron deposits well before the 15th."
          }
        },
        {
          "@type": "Question",
          "name": "Which ESIC office covers Delhi employers?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "ESIC Regional Office at Rajendra Bhawan, Rajendra Place, New Delhi - 110008. Delhi has 4 ESIC hospitals: Basaidarapur, Jhilmil, Okhla, and Rohini. Delhi was the first ESI city in India (24 February 1952). Patron coordinates with Delhi ESIC for inspections and compliance."
          }
        },
        {
          "@type": "Question",
          "name": "What wages are included in ESI calculation?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Gross wages: basic pay, DA, HRA, CCA, regular incentives, overtime, and all regular cash payments. Excluded: employer PF/pension contribution, ESIC itself, washing allowance, travel conveyance for duty, and gratuity. Patron ensures correct wage classification."
          }
        },
        {
          "@type": "Question",
          "name": "Does ESI apply to contract workers in Delhi?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Yes. Contract workers at your premises are covered if establishment has 10+ employees and workers earn up to Rs 21,000. Contractor is primarily responsible but principal employer has secondary liability. ESIC inspectors regularly check contract worker coverage. Patron includes all covered workers."
          }
        },
        {
          "@type": "Question",
          "name": "When are ESI half-yearly returns due in Delhi?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "11 November for Apr-Sep period and 11 May for Oct-Mar period. Returns contain employee-wise wage and contribution data. Late or non-filing is actively monitored by Delhi ESIC Regional Office. Patron files well before deadline with reconciled monthly data."
          }
        },
        {
          "@type": "Question",
          "name": "What if an employee's salary crosses Rs 21,000 mid-period?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "ESI contributions continue until end of that contribution period. Employee remains covered for the corresponding benefit period. Many Delhi employers incorrectly stop deduction immediately. Patron applies the contribution period rule correctly."
          }
        },
        {
          "@type": "Question",
          "name": "Is there any discount on ESI rates for Delhi startups?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "No. Unlike PF, ESI rates are fixed at 0.75% + 3.25% for all establishments regardless of size, type, or startup status. Rates are uniform across India. Patron applies correct rates for all Delhi employers."
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
                        ESIC Calculation & Compliance in Delhi: Accurate Contributions, Timely Deposits
                    </h1>

                    <div class="expert-attribution-box">
                        <span class="eab-check"><svg width="16" height="16" viewBox="0 0 24 24" fill="currentColor"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg></span>
                        <span class="eab-title">Reviewed by CA and CS Team, Patron Accounting LLP</span>
                        <span class="eab-meta">
                            <span>ICAI & ICSI Registered</span><span class="eab-sep">|</span>
                            <span>15+ Years Experience</span><span class="eab-sep">|</span>
                            <span>Last Updated: <span id="lastUpdated">06 April 2026</span></span>
                        </span>
                        <a href="#" class="eab-link">Verify Credentials &rarr;</a>
                    </div>

                    <div class="mb-4">
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Rate:</span> Employee 0.75% + Employer 3.25% = 4% of gross wages (up to Rs 21,000/month)</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Monthly Deposit:</span> By 15th of following month via ESIC portal</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Half-Yearly Returns:</span> 11 November (Apr-Sep) and 11 May (Oct-Mar)</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Penalty:</span> 12% p.a. interest on delayed deposits + criminal prosecution under Section 85</p>
                        </div>
                    </div>

                    <p class="mb-4 fw-bold" style="color: var(--blue); font-size: 15px;">10,000+ Businesses Served | 4.9 Google Rating | Zero-penalty ESIC compliance for Delhi employers</p>

                    <div class="hero-cta">
                        <a href="tel:+919459456700" class="btn-video text-decoration-none">
                            <span class="play-circle"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="width:14px;height:14px;color:#fff"><path d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/></svg></span>
                            Call +91 945 945 6700
                        </a>
                        <a href="mailto:sales@patronaccounting.com?subject=ESIC%20Compliance%20Delhi&body=Hello%20Patron%20Accounting%20Team%2C%0A%0AI%20need%20ESIC%20compliance%20in%20Delhi.%0A%0AThank%20you." class="btn-sample text-decoration-none">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="width:18px;height:18px;"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,12 2,6"/></svg>
                            Email Us
                        </a>
                        <a href="https://wa.me/919459456700?text=Hi%2C%20I%20need%20ESIC%20calculation%20and%20compliance%20support%20in%20Delhi." target="_blank" class="btn-sample text-decoration-none">
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
                                            'service'  => 'ESIC Calculation & Compliance in Delhi',
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
            <a href="#overview-section" class="toc-btn active">Overview</a><a href="#what-section" class="toc-btn">What Is ESIC</a><a href="#who-section" class="toc-btn">Who Needs It</a><a href="#services-section" class="toc-btn">Services</a><a href="#procedure-section" class="toc-btn">Monthly Cycle</a><a href="#documents-section" class="toc-btn">Calculation Example</a><a href="#challenges-section" class="toc-btn">Challenges</a><a href="#fees-section" class="toc-btn">Fees</a><a href="#timeline-section" class="toc-btn">Calendar</a><a href="#benefits-section" class="toc-btn">Why Patron</a><a href="#comparison-section" class="toc-btn">ESI vs PF</a><a href="#faq-section" class="toc-btn">FAQs</a>
        </div>
        <button class="toc-arrow right" id="tocRight">&#10095;</button>
    </div>
</div>

<!-- SECTION 2: OVERVIEW / INTRO + TL;DR -->
<section class="content-section" id="overview-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">ESIC Calculation & Compliance in Delhi: Monthly Obligation for Delhi Employers</h2>
            <div class="content-text">
                <div class="highlight-box" style="margin-bottom:20px;">
                    <p><strong>&#128204; TL;DR - ESIC Calculation & Compliance in Delhi Services at a Glance</strong></p>
                    <p>ESIC calculation involves computing employee contribution at 0.75% and employer contribution at 3.25% of gross monthly wages (capped at Rs 21,000/month), generating the challan on the ESIC portal, and depositing by the 15th of the following month. Half-yearly returns due 11 November and 11 May. Late deposit attracts 12% p.a. interest. Delhi was India's first ESI implementation city (24 February 1952). ESIC Regional Office at Rajendra Place with 4 ESIC hospitals serve Delhi's workforce. Patron handles monthly compliance from our Rohini office.</p>
                </div>
                <p>Delhi was the first city in India to implement the ESI scheme on 24 February 1952. Today, Delhi has one of the highest concentrations of ESI-covered establishments - manufacturing in Okhla and Naraina, IT in Nehru Place, hospitality in Aerocity, retail across the city, and thousands of service providers. Learn more about <a href="/esic-calculation-and-compliance-services">ESIC Compliance across India</a>.</p>
                <p>The ESIC Regional Office at Rajendra Bhawan, Rajendra Place administers Delhi ESI compliance, supported by 4 ESIC hospitals (Basaidarapur, Jhilmil, Okhla, Rohini). Patron manages the entire cycle: monthly calculation, challan deposit, IP number generation, half-yearly returns, and inspection support. Integrated with <a href="/payroll-services">Payroll Services</a> and <a href="/pf-registration">PF Registration</a> for complete statutory coverage.</p>
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
                <h2 class="section-title">What Is ESIC Calculation: Monthly Contribution Computation Under ESI Act 1948</h2>
                <div class="content-text what-is-definition">
                    
                    <p>ESIC calculation is the monthly process of computing Employee State Insurance contributions for each covered employee based on gross wages, generating the challan, and depositing with ESIC by the 15th. Employee contributes 0.75% and employer 3.25% of gross wages, totalling 4%. Gross wages include basic pay, DA, HRA, CCA, regular incentives, overtime, and all regular cash payments.</p>
<p>ESIC compliance encompasses: accurate monthly calculation, timely challan deposit, employee IP number generation, Pehchan card facilitation, half-yearly return filing, register maintenance, and ESIC inspection cooperation. Each obligation carries separate penalties for non-compliance.</p>
<p>For Delhi employers - whether a garment factory in Okhla, a hotel in Aerocity, or a security agency deploying guards across Delhi - ESIC compliance is a monthly, non-negotiable obligation that impacts employees' healthcare access and the employer's legal and financial standing.</p>

                </div>
                <div class="highlight-box" style="margin-top:20px;">
                    <p><strong>Key Terms for ESIC Calculation & Compliance in Delhi:</strong></p>
                    <ul><li><strong>Gross Wages:</strong> Basic + DA + HRA + CCA + regular incentives + overtime. Excludes: PF contribution, ESIC itself, washing allowance, travel conveyance, gratuity.</li><li><strong>Wage Ceiling:</strong> Rs 21,000/month (Rs 25,000 for disabled employees). Employees above ceiling not covered.</li><li><strong>Contribution Period:</strong> Apr-Sep (Period 1) and Oct-Mar (Period 2). Benefits correspond to the following half-year.</li><li><strong>Section 39(5)(a):</strong> 12% p.a. simple interest on each day of delayed deposit from the 16th.</li><li><strong>Section 85:</strong> Criminal prosecution - imprisonment up to 2 years + fine up to Rs 5,000 for wilful default.</li></ul>

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
                            <text x="100" y="170" font-size="10" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial, sans-serif">ESIC Calculation & Compliance in Delhi</text>
                        </svg>
                    </div>
                    <div class="illustration-badge">
                        <span>ESI Act 1948</span>
                        <strong>4% Compliance</strong>
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
            <h2 class="section-title">Who Needs ESIC Calculation & Compliance in Delhi</h2>
            <div class="content-text">
                
                <p><strong>Every Delhi establishment registered under ESI</strong> with 10+ employees where employees earn up to Rs 21,000/month. Includes factories, shops, offices, restaurants, hotels, security agencies, construction companies, and IT firms.</p>
<p><strong>Delhi employers with contract workers</strong> - Principal employer has secondary liability for ESI of contract workers deployed at their premises. Relevant for manufacturing units in Okhla and Naraina. <a href="/esic-registration/delhi">ESIC Registration in Delhi</a> is the prerequisite.</p>
<p><strong>Delhi employers with fluctuating headcounts</strong> - Seasonal variations, project-based hiring, and high attrition require monthly recalculation. New employees must be registered within 10 days.</p>
<p>Employers also need <a href="/provident-fund-registration/delhi">PF Registration in Delhi</a> and <a href="/payroll-services/delhi">Payroll Services in Delhi</a> for complete statutory compliance.</p>

            </div>
            </div>
        </div>
    </div>
</section>

<!-- SECTION 5: OUR SERVICES -->
<section class="content-section" id="services-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">ESIC Calculation & Compliance Services: What Patron Handles</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Service</th><th>What We Do</th></tr></thead>
                    <tbody>
                        <tr><td>Monthly ESI Contribution Calculation</td><td>Calculate employee (0.75%) and employer (3.25%) contributions for each covered employee based on gross wages. Handle variable components, overtime, mid-month joiners/leavers.</td></tr><tr><td>Challan Generation and Deposit</td><td>Generate monthly challan on esic.gov.in, verify amounts, ensure deposit by 15th. Automated reminders prevent missed deadlines.</td></tr><tr><td>Employee IP Number Generation</td><td>Register new Delhi employees on ESIC portal with Aadhaar-linked IP numbers within 10 days. Manage Pehchan card process for healthcare access.</td></tr><tr><td>Half-Yearly Return Filing</td><td>File returns by 11 November (Apr-Sep) and 11 May (Oct-Mar) with employee-wise contribution details and wage data.</td></tr><tr><td>Contribution Period Management</td><td>Track contribution periods and benefit periods. Ensure employees crossing Rs 21,000 mid-period continue covered.</td></tr><tr><td>ESIC Inspection Support</td><td>On-ground documentation during Rajendra Place Regional Office inspections: wage registers, contribution records, attendance data.</td></tr><tr><td>Bundled Compliance</td><td>ESIC coordinated with <a href="/pf-registration">PF</a>, <a href="/payroll-services">payroll</a>, TDS, and professional tax for complete statutory coverage.</td></tr>

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
            <h2 class="section-title">ESIC Compliance Cycle: 6 Monthly Steps for Delhi Employers</h2>
            <p class="section-subtitle" style="text-align:left;max-width:100%;">ESIC compliance is portal-based via esic.gov.in. No physical visit to the ESIC Regional Office at Rajendra Place is required for deposits or returns. ESIC inspections are conducted at Delhi employer premises.</p>
        </header>
        <div class="steps-container">
            <div class="step-card"><div class="step-content"><span class="step-badge">Step 1</span><h3 class="step-title">Compile Monthly Wage Data</h3><p class="step-description">Compile gross wages for every employee earning up to Rs 21,000. Gross = basic + DA + HRA + CCA + incentives + overtime. Exclude PF contribution, ESIC itself, washing allowance, travel conveyance, gratuity. Patron integrates with Delhi payroll data.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Gross Calculated</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Exclusions Applied</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="20" y="10" width="80" height="60" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><line x1="35" y1="25" x2="85" y2="25" stroke="#F5A623" stroke-width="2" stroke-linecap="round"/><line x1="35" y1="38" x2="75" y2="38" stroke="#14365F" stroke-width="1.5" opacity="0.3"/><line x1="35" y1="50" x2="65" y2="50" stroke="#14365F" stroke-width="1.5" opacity="0.3"/></svg></div><span class="illustration-label">Wages Compiled</span><span class="step-number-large">01</span></div></div></div>
<div class="step-card"><div class="step-content"><span class="step-badge">Step 2</span><h3 class="step-title">Calculate Employee and Employer Contributions</h3><p class="step-description">Employee 0.75% + Employer 3.25% of gross wages per employee. Example: Rs 18,000 gross = Rs 135 + Rs 585 = Rs 720 total. Employees earning daily average up to Rs 176: employee share zero, employer pays 3.25%.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Per-Employee Calc</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Exemptions Applied</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="20" y="10" width="35" height="55" rx="4" fill="#FFF3E0" stroke="#F5A623" stroke-width="1"/><rect x="62" y="10" width="35" height="55" rx="4" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><text x="37" y="40" font-size="8" fill="#F5A623" font-weight="700" text-anchor="middle" font-family="Arial">0.75%</text><text x="80" y="40" font-size="8" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">3.25%</text></svg></div><span class="illustration-label">Contributions Calculated</span><span class="step-number-large">02</span></div></div></div>
<div class="step-card"><div class="step-content"><span class="step-badge">Step 3</span><h3 class="step-title">Generate Challan on ESIC Portal</h3><p class="step-description">Log in to esic.gov.in. Select File Monthly Contributions. Enter month, year, employee-wise details. Generate challan showing total employee + employer + grand total payable.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Portal Filed</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Amounts Verified</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="25" y="15" width="70" height="55" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><path d="M60 28v18M50 36l10-10 10 10" stroke="#F5A623" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"/></svg></div><span class="illustration-label">Challan Generated</span><span class="step-number-large">03</span></div></div></div>
<div class="step-card"><div class="step-content"><span class="step-badge">Step 4</span><h3 class="step-title">Deposit by 15th of Following Month</h3><p class="step-description">Pay via net banking or authorised bank. Late deposit triggers 12% p.a. interest from 16th. Patron deposits well before deadline to avoid any interest liability.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Before 15th</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Zero Interest</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><circle cx="60" cy="40" r="25" fill="#E8F5E9" stroke="#25D366" stroke-width="1.5"/><text x="60" y="36" font-size="8" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">15th</text><path d="M53 45l5 5 9-9" stroke="#25D366" stroke-width="2" stroke-linecap="round"/></svg></div><span class="illustration-label">Deposit Complete</span><span class="step-number-large">04</span></div></div></div>
<div class="step-card"><div class="step-content"><span class="step-badge">Step 5</span><h3 class="step-title">Register New Employees and Update Records</h3><p class="step-description">New employees earning up to Rs 21,000 registered on ESIC portal within 10 days. Generate IP number and facilitate Pehchan card for healthcare at ESIC hospitals (Basaidarapur, Jhilmil, Okhla, Rohini).</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> IP Numbers Issued</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Pehchan Cards</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><circle cx="40" cy="35" r="12" fill="#FFF3E0" stroke="#F5A623" stroke-width="1"/><circle cx="60" cy="35" r="12" fill="#FFF3E0" stroke="#F5A623" stroke-width="1"/><circle cx="80" cy="35" r="12" fill="#FFF3E0" stroke="#F5A623" stroke-width="1"/><rect x="30" y="55" width="60" height="8" rx="4" fill="#14365F" opacity="0.1"/></svg></div><span class="illustration-label">Employees Registered</span><span class="step-number-large">05</span></div></div></div>
<div class="step-card"><div class="step-content"><span class="step-badge">Step 6</span><h3 class="step-title">File Half-Yearly Returns</h3><p class="step-description">File on ESIC portal by 11 November (Apr-Sep) and 11 May (Oct-Mar). Contains employee-wise wage and contribution details for 6-month period. Patron files with reconciled data from monthly deposits.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Reconciled Data</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Before Deadline</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="25" y="10" width="70" height="55" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><circle cx="60" cy="32" r="14" fill="#E8F5E9" stroke="#25D366" stroke-width="1.5"/><path d="M53 32l5 5 9-9" stroke="#25D366" stroke-width="2.5" stroke-linecap="round"/><rect x="40" y="55" width="40" height="6" rx="3" fill="#F5A623" opacity="0.4"/></svg></div><span class="illustration-label">Returns Filed</span><span class="step-number-large">06</span></div></div></div>


        </div>
    </div>
</section>

<!-- SECTION 8: DOCUMENTS REQUIRED -->
<section class="content-section" id="documents-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">ESIC Calculation Example for Delhi</h2>
            <div class="content-text">
                
                <table class="table"><thead><tr><th>Employee</th><th>Gross Wages</th><th>Employee 0.75%</th><th>Employer 3.25%</th><th>Total</th></tr></thead><tbody><tr><td>Employee A</td><td>Rs 18,000</td><td>Rs 135</td><td>Rs 585</td><td>Rs 720</td></tr><tr><td>Employee B</td><td>Rs 15,000</td><td>Rs 113</td><td>Rs 488</td><td>Rs 601</td></tr><tr><td>Employee C</td><td>Rs 21,000</td><td>Rs 158</td><td>Rs 683</td><td>Rs 841</td></tr><tr><td>Employee D</td><td>Rs 12,000</td><td>Rs 90</td><td>Rs 390</td><td>Rs 480</td></tr><tr><td><strong>Total (15 emp)</strong></td><td><strong>Rs 2,55,000</strong></td><td><strong>Rs 1,913</strong></td><td><strong>Rs 8,288</strong></td><td><strong>Rs 10,201</strong></td></tr></tbody></table><div class="highlight-box"><p><strong>Monthly deposit for this Delhi establishment: Rs 10,201 (approximately)</strong> - deposited via ESIC portal by the 15th of the following month. Patron calculates exact amounts individually, accounting for mid-month joiners, leavers, overtime, and variable components.</p></div>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 9: CHALLENGES -->
<section class="content-section" id="challenges-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Common ESIC Compliance Challenges in Delhi</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Challenge</th><th>Impact</th><th>How Patron Accounting Solves It</th></tr></thead>
                    <tbody>
                        <tr><td>Incorrect Wage Computation</td><td>Calculating on basic alone instead of gross wages. Under-payment triggers interest and back-calculations during inspection.</td><td>Calculate on correct gross wage base including HRA, DA, and regular allowances.</td></tr><tr><td>Missing the 15th Deadline</td><td>Every day of delay accumulates 12% p.a. interest. Manual processes frequently miss.</td><td>Automated deadline tracking with 5-day advance deposit processing.</td></tr><tr><td>Contract Worker Non-Coverage</td><td>Principal employer has secondary liability. ESIC inspectors specifically check contract compliance.</td><td>All covered workers including contract staff included in monthly calculations.</td></tr><tr><td>Contribution Period Ceiling Confusion</td><td>Wages crossing Rs 21,000 mid-period: ESI continues until period end. Many employers stop immediately.</td><td>Contribution period rule applied correctly for Delhi employees.</td></tr><tr><td>Income Tax Disallowance</td><td>Employer ESI deposited late is disallowed as business expense - double penalty.</td><td>Integrated payroll ensures both ESI and income tax compliance simultaneously.</td></tr>

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
            <h2 class="section-title">ESIC Compliance Service Fees</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Fee Component</th><th>Amount</th></tr></thead>
                    <tbody>
                        <tr><td>Monthly Contribution Deposit</td><td>4% of covered wages (per ESI Act)</td></tr><tr><td>Half-Yearly Return Filing</td><td>Nil (no government fee)</td></tr><tr><td>New Employee IP Registration</td><td>Nil (no government fee)</td></tr><tr><td>Patron Monthly Service Fee</td><td>From Rs 999/month</td></tr><tr><td>Patron Annual Package</td><td>INR 9,999/year (Exl GST)</td></tr>

                    </tbody>
                </table>
                </div>
                <p style="margin-top:16px;font-size:13px;color:var(--text-muted);font-style:italic;">All fees and charges listed are indicative only and do not constitute a binding offer. Final amounts may vary depending on the volume of work and the complexity involved.</p>
                <p style="margin-top:16px;">Professional service charges for drafting, filing, and representation are separate from the statutory fees. The exact fee depends on the complexity of the case, disputed amount, and number of hearings required. Contact us for a detailed quote.</p>
                <p style="margin-top:16px;"><strong>Get a free ESIC Calculation & Compliance in Delhi consultation - <a href="tel:+919459456700">Call +91 945 945 6700</a> or <a href="https://wa.me/919459456700?text=Hi%2C%20I%20need%20ESIC%20compliance%20in%20Delhi." target="_blank">WhatsApp us</a>. No-obligation assessment.</strong></p>
            </div>
        </div>
    </div>
</section>

<!-- SECTION 11: TIMELINE -->
<section class="content-section" id="timeline-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">ESIC Compliance Calendar</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Stage</th><th>Estimated Timeline</th></tr></thead>
                    <tbody>
                        <tr><td>Monthly Contribution Deposit</td><td>15th of following month</td></tr><tr><td>Half-Yearly Return (Apr-Sep)</td><td>11 November</td></tr><tr><td>Half-Yearly Return (Oct-Mar)</td><td>11 May</td></tr><tr><td>New Employee Registration</td><td>Within 10 days of joining</td></tr><tr><td>Register Maintenance</td><td>Continuous (ongoing)</td></tr>

                    </tbody>
                </table>
                </div>
                <div class="highlight-box" style="margin-top:16px;">
                    
                    <p><strong>Critical:</strong> 12% p.a. interest starts from the 16th for every day of delay. After 6 months: up to 25% damages. Income tax also disallows late employer contribution. Patron deposits 5 days before deadline.</p>

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
            <h2 class="section-title">Why Choose Patron for ESIC Compliance in Delhi</h2>
        </div>
        <div class="features-grid"><article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><h3 class="feature-title">Physical Office in Delhi</h3><p class="feature-text">On-site support during ESIC inspections by Rajendra Place Regional Office. Walk-in consultations for complex calculation questions including contract workers and wage ceiling crossovers.</p></article><article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M9 7h6m0 10v-3m-3 3h.01M9 17h.01M9 14h.01M12 14h.01M15 11h.01M12 11h.01M9 11h.01M7 21h10a2 2 0 002-2V5a2 2 0 00-2-2H7a2 2 0 00-2 2v14a2 2 0 002 2z"/></svg></div><h3 class="feature-title">Integrated Payroll + ESIC</h3><p class="feature-text">ESI calculated from the same gross wage data as payroll. PF, TDS, and ESI processed together. No discrepancies between payroll and ESI records.</p></article><article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/></svg></div><h3 class="feature-title">Zero-Penalty Track Record</h3><p class="feature-text">Automated deadline tracking and 5-day advance deposits. Delhi employers never face 12% interest or income tax disallowance. 10,000+ businesses served.</p></article><article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M14 2H6a2 2 0 00-2 2v16a2 2 0 002 2h12a2 2 0 002-2V8z"/><path d="M14 2v6h6M16 13H8M16 17H8"/></svg></div><h3 class="feature-title">Delhi ESI Ecosystem Knowledge</h3><p class="feature-text">India's first ESI city (1952) with 4 ESIC hospitals and active Regional Office. Patron's familiarity ensures smooth compliance and efficient inspector interactions.</p></article></div>
    </div>
</section>

<!-- SECTION 12A: SOCIAL PROOF -->
<section class="content-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Trusted by 10,000+ Businesses Across India</h2>
            <div class="content-text">
                
                <p><strong>10,000+ Businesses Served | 4.9 Google Rating | 50,000+ Documents Filed | 15+ Years of Practice</strong></p><p>"Patron's payroll team handles 200+ employees without a single error month on month." - HR Head, IT Company, Gurugram</p><p><strong>4-Office Signal:</strong> Pune, Mumbai, Delhi, and Gurugram.</p>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 13: SELF-FILING vs PROFESSIONAL COMPARISON -->
<section class="content-section" id="comparison-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">ESI vs PF: Comparison for Delhi Employers</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Parameter</th><th>ESIC</th><th>EPF</th></tr></thead>
                    <tbody>
                        <tr><td>Act</td><td>ESI Act, 1948</td><td>EPF & MP Act, 1952</td></tr><tr><td>Applicability</td><td>10+ employees</td><td>20+ employees</td></tr><tr><td>Wage Ceiling</td><td>Rs 21,000/month</td><td>Rs 15,000/month (EPS; under SC review)</td></tr><tr><td>Employee Rate</td><td>0.75% of gross wages</td><td>12% of basic + DA</td></tr><tr><td>Employer Rate</td><td>3.25% of gross wages</td><td>12% of basic + DA</td></tr><tr><td>Deposit Deadline</td><td>15th of following month</td><td>15th of following month</td></tr><tr><td>Returns</td><td>Half-yearly (11 Nov / 11 May)</td><td>Monthly ECR</td></tr><tr><td>Delhi Authority</td><td>ESIC RO Rajendra Place</td><td>EPFO ROs Dwarka / Jhilmil</td></tr>

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
            <h2 class="section-title">Related Services for Delhi Employers</h2>
            <div class="content-text">
                
                <p>Delhi employers often need these services:</p><ul><li><a href="/esic-calculation-and-compliance-services">ESIC Compliance (India)</a> - National overview</li><li><a href="/esic-registration">ESIC Registration</a> - Initial ESI registration</li><li><a href="/pf-registration">PF Registration</a> - EPF compliance</li><li><a href="/payroll-services">Payroll Services</a> - Payroll processing</li><li><a href="/shop-act-registration">Shop Act Registration</a> - Business registration</li><li><a href="/posh-compliance-services">POSH Compliance</a> - Workplace safety</li></ul>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 15A: LEGAL FRAMEWORK -->
<section class="content-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Legal Framework for ESIC Compliance</h2>
            <div class="content-text">
                
                <p><strong>Governing Act:</strong> Employees' State Insurance Act, 1948</p><p><strong>Rates (w.e.f. 01.07.2019):</strong> Employee 0.75% + Employer 3.25% = 4% of gross wages</p><p><strong>Wage Ceiling:</strong> Rs 21,000/month (Rs 25,000 disabled). Social Security Code 2020 empowers revision - no change as of April 2026.</p><p><strong>Monthly Deposit:</strong> By 15th. Section 39(5)(a): 12% p.a. interest. Damages up to 25% after 6 months.</p><p><strong>Criminal:</strong> Section 85 - imprisonment up to 2 years + fine up to Rs 5,000.</p><p><strong>Returns:</strong> 11 November (Apr-Sep) and 11 May (Oct-Mar) on <a href="https://esic.gov.in" target="_blank" rel="noopener">ESIC portal</a>.</p><p><strong>Delhi:</strong> First ESI city (24 Feb 1952). RO Rajendra Place. Hospitals: Basaidarapur, Jhilmil, Okhla, Rohini.</p>

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
                    <h2 class="faq-expanded__title">Frequently Asked Questions - ESIC Calculation in Delhi</h2>
                    <p class="faq-expanded__lead">Expert answers on ESI rates, deposit deadlines, penalties, and compliance for Delhi employers.</p>
                    @include('partials.bigin-form', [
                        'variant'  => 'compact',
                        'service'  => 'ESIC Calculation & Compliance in Delhi',
                        'city'     => 'Delhi',
                    ])
                </aside>
                <div class="faq-expanded__list">
                    <div class="faq-expanded__item" id="faq-1">
                        <h3 class="faq-expanded__q">How is ESI calculated for Delhi employees?</h3>
                        <div class="faq-expanded__a"><p>ESI is calculated on gross monthly wages (not CTC or basic). Employee 0.75% + Employer 3.25%. Gross includes basic, DA, HRA, CCA, regular incentives, overtime. Example: Rs 18,000 gross = Rs 135 employee + Rs 585 employer = Rs 720 total. Patron calculates per employee from monthly payroll.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-2">
                        <h3 class="faq-expanded__q">What is the penalty for late ESI deposit in Delhi?</h3>
                        <div class="faq-expanded__a"><p>12% p.a. simple interest from the 16th for each day of delay. Over 6 months: up to 25% damages. Section 85: imprisonment up to 2 years + fine Rs 5,000. Income Tax Act also disallows late employer contribution as business expense. Patron deposits well before the 15th.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-3">
                        <h3 class="faq-expanded__q">Which ESIC office covers Delhi employers?</h3>
                        <div class="faq-expanded__a"><p>ESIC Regional Office at Rajendra Bhawan, Rajendra Place, New Delhi - 110008. Delhi has 4 ESIC hospitals: Basaidarapur, Jhilmil, Okhla, and Rohini. Delhi was the first ESI city in India (24 February 1952). Patron coordinates with Delhi ESIC for inspections and compliance.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-4">
                        <h3 class="faq-expanded__q">What wages are included in ESI calculation?</h3>
                        <div class="faq-expanded__a"><p>Gross wages: basic pay, DA, HRA, CCA, regular incentives, overtime, and all regular cash payments. Excluded: employer PF/pension contribution, ESIC itself, washing allowance, travel conveyance for duty, and gratuity. Patron ensures correct wage classification.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-5">
                        <h3 class="faq-expanded__q">Does ESI apply to contract workers in Delhi?</h3>
                        <div class="faq-expanded__a"><p>Yes. Contract workers at your premises are covered if establishment has 10+ employees and workers earn up to Rs 21,000. Contractor is primarily responsible but principal employer has secondary liability. ESIC inspectors regularly check contract worker coverage. Patron includes all covered workers.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-6">
                        <h3 class="faq-expanded__q">When are ESI half-yearly returns due in Delhi?</h3>
                        <div class="faq-expanded__a"><p>11 November for Apr-Sep period and 11 May for Oct-Mar period. Returns contain employee-wise wage and contribution data. Late or non-filing is actively monitored by Delhi ESIC Regional Office. Patron files well before deadline with reconciled monthly data.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-7">
                        <h3 class="faq-expanded__q">What if an employee's salary crosses Rs 21,000 mid-period?</h3>
                        <div class="faq-expanded__a"><p>ESI contributions continue until end of that contribution period. Employee remains covered for the corresponding benefit period. Many Delhi employers incorrectly stop deduction immediately. Patron applies the contribution period rule correctly.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-8">
                        <h3 class="faq-expanded__q">Is there any discount on ESI rates for Delhi startups?</h3>
                        <div class="faq-expanded__a"><p>No. Unlike PF, ESI rates are fixed at 0.75% + 3.25% for all establishments regardless of size, type, or startup status. Rates are uniform across India. Patron applies correct rates for all Delhi employers.</p></div>
                    </div>
                </div>
            </div>


            <!-- Quick Answers -->
            <div class="highlight-box" style="margin-top:32px;">
                <p><strong>Quick Answers</strong></p>
                <p><strong>ESIC calculation kaise hoti hai?</strong> Har employee ki gross salary par 0.75% employee ka aur 3.25% employer ka contribution hota hai. Total 4%. Monthly 15 tarikh tak ESIC portal par deposit.</p><p><strong>Delhi mein ESIC ka office kahan hai?</strong> Rajendra Bhawan, Rajendra Place, New Delhi - 110008. ESIC hospitals: Basaidarapur, Jhilmil, Okhla, Rohini.</p><p><strong>Late deposit ka penalty kya hai?</strong> 12% p.a. interest + 25% damages after 6 months + Section 85 jail up to 2 years.</p>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 18: URGENCY CTA -->
<section class="content-section" style="background: var(--orange-lighter) !important; border-left: 4px solid var(--orange);">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">12% Interest Compounds Daily - Get Compliant Now</h2>
            <div class="content-text">
                
                <p>Every month without accurate ESIC calculation creates compounding liability: <strong>12% interest daily, 25% damages after 6 months, income tax disallowance, and criminal prosecution risk.</strong> ESIC Delhi actively inspects commercial and industrial areas.</p><p><strong>Contact Patron - <a href="tel:+919459456700">Call +91 945 945 6700</a> or <a href="https://wa.me/919459456700?text=Hi%2C%20I%20need%20ESIC%20compliance%20in%20Delhi." target="_blank">WhatsApp us</a>.</strong></p>

            </div>
        </div>
    </div>
</section>

<!-- CONCLUSION + CTA BLOCK (Dark) -->
<section class="content-section" style="background: var(--blue) !important;">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title" style="color:#FFFFFF !important;">Get Accurate ESIC Compliance in Delhi</h2>
            <div class="content-text" style="text-align:left;">
                
                <p style="color:rgba(255,255,255,0.9);font-size:16px;line-height:1.8;">ESIC calculation and compliance in Delhi is a monthly obligation requiring accurate computation (0.75% + 3.25% on gross wages), timely deposit by 15th, and half-yearly returns. Delhi's distinction as India's first ESI city means both benefits and enforcement are well-established.</p><p style="color:rgba(255,255,255,0.9);font-size:16px;line-height:1.8;">Patron Accounting provides end-to-end ESIC compliance from our Rohini office - calculation, challan, deposit, registration, returns, and inspection support. Integrated with payroll, PF, and TDS. 15+ years. 10,000+ businesses. 4 offices.</p>

            </div>
            <div style="display:flex;gap:14px;flex-wrap:wrap;margin-top:24px;">
                <a href="tel:+919459456700" style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:var(--orange);color:#fff;border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#128222; Call +91 945 945 6700</a>
                <a href="https://wa.me/919459456700?text=Hi%2C%20I%20need%20ESIC%20compliance%20in%20Delhi." target="_blank" style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:#25D366;color:#fff;border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#128172; WhatsApp Us</a>
                <a href="mailto:sales@patronaccounting.com?subject=ESIC%20Compliance%20in%20Delhi&body=Hello%20Patron%20Accounting%20Team%2C%0A%0AI%20need%20ESIC%20compliance%20services%20in%20Delhi.%0A%0AThank%20you." style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:transparent;color:#fff;border:2px solid rgba(255,255,255,0.3);border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#9993;&#65039; Email Us</a>
            </div>
            <p style="color:rgba(255,255,255,0.7);font-size:13px;margin-top:16px;">Book a Free Consultation - No Obligation.</p>
        </div>
    </div>
</section>

<!-- GSTAT STATE BENCH CITY PAGES (32 Pages) -->
<section class="content-section" style="padding:48px 32px;background:var(--gray-50);">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title" style="text-align:center;margin-bottom:12px;">ESIC Compliance Services Across India</h2>
            <p style="text-align:center;color:var(--text-muted);font-size:15px;margin-bottom:40px;">Patron provides ESIC compliance in major cities. Select your city.</p>
    
            <div class="pa-city-block" style="margin-bottom:40px;"><div class="pa-block-title">ESIC Compliance in Other Cities</div><div class="pa-block-sub">Select your city for local ESIC support</div><div class="pa-city-grid"><a href="/esic-calculation-compliance/pune" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Pune</div><div class="pa-card-sub">Maharashtra</div></div></a><a href="/esic-calculation-compliance/mumbai" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Mumbai</div><div class="pa-card-sub">Maharashtra</div></div></a><div class="pa-city-card" style="opacity:0.6;pointer-events:none;border:2px solid var(--orange);position:relative;"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Delhi</div><div class="pa-card-sub">Delhi NCR</div></div><span style="position:absolute;top:6px;right:8px;font-size:10px;color:var(--orange);font-weight:700;text-transform:uppercase;letter-spacing:0.5px;">You're here</span></div><a href="/esic-calculation-compliance/gurugram" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Gurugram</div><div class="pa-card-sub">Haryana</div></div></a></div></div><div class="pa-city-block"><div class="pa-block-title">Related Services in Delhi</div><div class="pa-block-sub">Complete employer compliance</div><div class="pa-cross-grid"><a href="/esic-registration/delhi" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">ESIC Registration</div><div class="pa-card-sub">Delhi</div></div></a><a href="/provident-fund-registration/delhi" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">PF Registration</div><div class="pa-card-sub">Delhi</div></div></a><a href="/payroll-services/delhi" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Payroll Services</div><div class="pa-card-sub">Delhi</div></div></a><a href="/private-limited-company-registration/delhi" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Private Limited Company Registration</div><div class="pa-card-sub">Delhi</div></div></a><a href="/shop-act-registration/delhi" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Shop Act Registration</div><div class="pa-card-sub">Delhi</div></div></a><a href="/posh-compliance-services/delhi" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">POSH Compliance</div><div class="pa-card-sub">Delhi</div></div></a></div></div>
        </div>
    </div>
</section>

<!-- CONTENT FRESHNESS FOOTER -->
<section class="content-section" style="padding:32px;">
    <div class="content-container">
        <div class="text-content" style="font-size:13px;color:var(--text-muted);">
            <p><strong>Content Created:</strong> 06 April 2026 &nbsp;|&nbsp; <strong>Last Updated:</strong> <span id="lastUpdatedFooter">06 April 2026</span> &nbsp;|&nbsp; <strong>Next Review:</strong> 06 October 2026 &nbsp;|&nbsp; <strong>Reviewed By:</strong> CA &amp; CS Team, Patron Accounting LLP</p>
            <p>This page is reviewed every 6 months to reflect ESIC rate changes and Social Security Code developments. Freshness Tier: 1.</p>
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
