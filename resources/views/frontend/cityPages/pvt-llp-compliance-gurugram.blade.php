
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
    <title>LLP Annual Compliance Gurugram - AOC-4, MGT-7 & F-11</title>
    <meta name="description" content="CA-assisted LLP compliance in Gurugram. Form 8, Form 11, audit, ITR-5, DIR-3 KYC, penalty management. Serving Cyber City, Sohna Road LLPs. Call +91 945 945 6700.">
    <link rel="canonical" href="/pvt-llp-compliance/gurugram">
    <meta name="robots" content="index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1">
    <meta property="og:title" content="LLP Annual Compliance Gurugram - AOC-4, MGT-7 & F-11">
    <meta property="og:description" content="CA-assisted LLP compliance in Gurugram. Form 8, Form 11, audit, ITR-5, DIR-3 KYC, penalty management. Serving Cyber City, Sohna Road LLPs. Call +91 945 945 6700.">
    <meta property="og:url" content="/pvt-llp-compliance/gurugram">
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="Patron Accounting">
    <meta property="og:image" content="https://www.patronaccounting.com/images/og-default-square.png">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="1200">
    <meta property="og:image:type" content="image/png">
    <meta property="og:image:secure_url" content="https://www.patronaccounting.com/images/og-default-square.png">
    <meta property="og:image:alt" content="Patron Accounting - partner you can rely on">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="LLP Annual Compliance Gurugram - AOC-4, MGT-7 & F-11">
    <meta name="twitter:description" content="CA-assisted LLP compliance in Gurugram. Form 8, Form 11, audit, ITR-5, DIR-3 KYC, penalty management. Serving Cyber City, Sohna Road LLPs. Call +91 945 945 6700.">
    <meta name="twitter:image" content="https://www.patronaccounting.com/images/og-default-square.png">
@endsection

@section('schema')
    <script type="application/ld+json">{
  "@context": "https://schema.org",
  "@graph": [
    {
      "@type": "Service",
      "name": "LLP Annual Compliance Gurugram - AOC-4, MGT-7 & F-11",
      "description": "CA-assisted LLP compliance in Gurugram. Form 8, Form 11, audit, ITR-5, DIR-3 KYC, penalty management. Serving Cyber City, Sohna Road LLPs. Call +91 945 945 6700.",
      "url": "https://www.patronaccounting.com/pvt-llp-compliance/gurugram",
      "serviceType": "LLP Annual Compliance Gurugram - AOC-4, MGT-7 & F-11",
      "areaServed": {
        "@type": "City",
        "name": "Gurugram",
        "containedInPlace": {
          "@type": "State",
          "name": "Haryana"
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
        "url": "https://www.patronaccounting.com/pvt-llp-compliance/gurugram",
        "priceSpecification": {
          "@type": "PriceSpecification",
          "minPrice": "25",
          "maxPrice": "100",
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
          "name": "Llp Compliance",
          "item": "https://www.patronaccounting.com/pvt-llp-compliance"
        },
        {
          "@type": "ListItem",
          "position": 3,
          "name": "LLP Annual Compliance Gurugram - AOC-4, MGT-7 & F-11",
          "item": "https://www.patronaccounting.com/pvt-llp-compliance/gurugram"
        }
      ]
    },
    {
      "@type": "FAQPage",
      "mainEntity": [
        {
          "@type": "Question",
          "name": "What is LLP annual compliance?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "File Form 11 (Annual Return, 30 May), Form 8 (Statement of Account, 30 October), and ITR-5 (31 July or 31 October) every year. Plus DIR-3 KYC for partners. Mandatory regardless of business activity. Patron manages all as a bundled package."
          }
        },
        {
          "@type": "Question",
          "name": "What is the penalty for late filing?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Rs 100/day per form with NO cap. Both Form 8 and Form 11 attract separate penalties. 1-year delay: Rs 73,000. 3-year delay: Rs 2,19,000. Designated partners personally liable. No condonation or waiver mechanism exists."
          }
        },
        {
          "@type": "Question",
          "name": "Is audit mandatory for LLP?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "LLP Act audit: if turnover >Rs 40 lakh OR contribution >Rs 25 lakh. Tax audit (Section 44AB): if turnover >Rs 1 crore. Small LLPs below both thresholds can self-certify Form 8 without professional certification."
          }
        },
        {
          "@type": "Question",
          "name": "Does a dormant LLP need to file?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Yes. Zero activity still requires Form 8, Form 11, and ITR-5 every year. Same Rs 100/day penalty. After 2 years non-filing, ROC can strike off. Patron advises: file and maintain, or formally close via Form 24."
          }
        },
        {
          "@type": "Question",
          "name": "What is a Small LLP?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Contribution ≤Rs 25 lakh AND turnover ≤Rs 40 lakh. Reduced fees, lower penalties, self-certification for Form 8. Most new Gurugram LLPs qualify in first 1-2 years."
          }
        },
        {
          "@type": "Question",
          "name": "LLP vs Pvt Ltd compliance?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "LLPs: fewer filings (2 vs 3+ ROC forms), no board meetings/AGM, audit exemption below thresholds. But: uncapped penalties (Rs 100/day), higher tax (30% vs 22-25%), cannot raise equity. Patron advises on optimal structure."
          }
        },
        {
          "@type": "Question",
          "name": "What is the cost?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Complete annual package (Form 8+11+ITR+KYC) from Rs 4,999/year. LLP audit from Rs 4,999 additional. Government fees Rs 50-200/form. Transparent pricing."
          }
        },
        {
          "@type": "Question",
          "name": "Can LLP convert to company?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Yes, under Section 366 Companies Act. Common for Gurugram LLPs planning VC/PE funding. Requires all partners' consent, compliance clearance, multiple ROC filings. Patron manages end-to-end."
          }
        }
      ]
    }
  ]
}</script>
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
                        LLP Compliance in Gurugram: Form 8, Form 11, Audit, and Annual Filing
                    </h1>

                    <div class="expert-attribution-box">
                        <span class="eab-check"><svg width="16" height="16" viewBox="0 0 24 24" fill="currentColor"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg></span>
                        <span class="eab-title">Reviewed by CA and CS Team, Patron Accounting LLP</span>
                        <span class="eab-meta">
                            <span>ICAI & ICSI Registered</span><span class="eab-sep">|</span>
                            <span>15+ Years Experience</span><span class="eab-sep">|</span>
                            <span>Last Updated: <span id="lastUpdated">03 April 2026</span></span>
                        </span>
                        <a href="#" class="eab-link">Verify Credentials &rarr;</a>
                    </div>

                    <div class="mb-4">
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>3 Core Filings:</span> Form 11 (Annual Return, 30 May) + Form 8 (Statement of Account, 30 October) + ITR-5 (31 July / 31 October)</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Audit:</span> Mandatory if turnover > Rs 40 lakh OR contribution > Rs 25 lakh</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Penalty:</span> Rs 100/day per form with NO upper cap - both Form 8 and Form 11</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Applies To:</span> ALL LLPs including dormant and zero-transaction LLPs</p>
                        </div>
                    </div>

                    <p class="mb-4 fw-bold" style="color: var(--blue); font-size: 15px;">LLP compliance for professional services, tech partnerships, trading LLPs, and dormant LLPs across Gurugram.</p>

                    <div class="hero-cta">
                        <a href="tel:+919459456700" class="btn-video text-decoration-none">
                            <span class="play-circle"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="width:14px;height:14px;color:#fff"><path d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/></svg></span>
                            Call +91 945 945 6700
                        </a>
                        <a href="mailto:sales@patronaccounting.com" class="btn-sample text-decoration-none">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="width:18px;height:18px;"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,12 2,6"/></svg>
                            Email Us
                        </a>
                        <a href="https://wa.me/919459456700?text=Hello%2C%20I%20just%20visited%20your%20Pvt%20LLP%20Compliance%20in%20Gurugram%20page.%20I%20would%20like%20to%20know%20more%20about%20it." target="_blank" class="btn-sample text-decoration-none" rel="noopener">
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
                                            'service'  => 'LLP Compliance in Gurugram',
                                            'city'     => 'Gurugram',
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
    'ctaText'    => 'LLP compliance with Form 8, Form 11, audit, ITR-5, and penalty management from Gurugram.',
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
            <a href="#overview-section" class="toc-btn active">Overview</a><a href="#what-section" class="toc-btn">Form 11</a><a href="#who-section" class="toc-btn">Form 8</a><a href="#services-section" class="toc-btn">ITR-5</a><a href="#procedure-section" class="toc-btn">Services</a><a href="#documents-section" class="toc-btn">LLP vs Pvt Ltd</a><a href="#challenges-section" class="toc-btn">Audit</a><a href="#fees-section" class="toc-btn">Penalties</a><a href="#timeline-section" class="toc-btn">Calendar</a><a href="#benefits-section" class="toc-btn">Why Patron</a><a href="#comparison-section" class="toc-btn">Event Filings</a><a href="#faq-section" class="toc-btn">FAQs</a>
        </div>
        <button class="toc-arrow right" id="tocRight">&#10095;</button>
    </div>
</div>

<!-- SECTION 2: OVERVIEW / INTRO + TL;DR -->
<section class="content-section" id="overview-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">LLP Compliance in Gurugram: Annual Returns, Financial Statements, and Audit</h2>
            <div class="content-text">
                <div class="highlight-box" style="margin-bottom:20px;">
                    <p><strong>&#128204; TL;DR - LLP Compliance in Gurugram Services at a Glance</strong></p>
                    <p>Every LLP must file Form 11 (Annual Return, 30 May), Form 8 (Statement of Account, 30 October), and ITR-5 (31 July/31 October) annually, regardless of activity. Audit mandatory if turnover > Rs 40 lakh OR contribution > Rs 25 lakh. Penalty: Rs 100/day per form with NO cap. 1 year delay on both forms = Rs 73,000. After 2 years non-filing, ROC can strike off. DIR-3 KYC (triennial from 2026) for designated partners.</p>
                </div>
                <p>Gurugram hosts a large number of LLPs across professional services, tech, and trading. For a comprehensive overview, refer to our <a href="/pvt-llp-compliance">LLP Compliance</a> national guide.</p><div class="table-responsive-wrapper"><table><thead><tr><th>Filing</th><th>Form</th><th>Due Date</th><th>Applicability</th><th>Penalty</th></tr></thead><tbody><tr><td>Annual Return</td><td>Form 11</td><td>30 May</td><td>All LLPs</td><td>Rs 100/day (no cap)</td></tr><tr><td>Statement of Account</td><td>Form 8</td><td>30 October</td><td>All LLPs</td><td>Rs 100/day (no cap)</td></tr><tr><td>Income Tax</td><td>ITR-5</td><td>31 Jul / 31 Oct</td><td>All LLPs</td><td>Rs 5,000 + interest</td></tr><tr><td>DIR-3 KYC</td><td>KYC-Web</td><td>30 June (triennial)</td><td>All DPIN/DIN holders</td><td>Rs 5,000 + deactivation</td></tr></tbody></table></div><p</p>
                <p>Despite fewer compliances than companies, the uncapped penalty (Rs 100/day) makes LLP non-compliance surprisingly expensive. A 3-year non-compliant LLP faces Rs 2,19,000 in penalties. ROC Haryana at Chandigarh processes all Gurugram LLP filings from February 2026.</p>
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
                <h2 class="section-title">Form 11 - Annual Return</h2>
                <div class="content-text what-is-definition">
                    
                    <p><strong>What:</strong> Annual Return summarising partnership structure: partner details, contribution, changes during year, details of other entities where partners serve.</p><p><strong>Due Date:</strong> Within 60 days from FY close = <strong>30 May</strong> every year.</p><p><strong>Who Signs:</strong> Digitally signed by designated partner. No professional certification required below audit thresholds.</p><p><strong>Government Fee:</strong> Rs 50 (contribution ≤Rs 1 lakh) or Rs 200 (above).</p><p><strong>Penalty:</strong> Rs 100/day from 31 May. No cap. LLP and designated partners both liable.</p><p>For LLP registration, see <a href="#">LLP Registration</a>.</p>

                </div>
                <div class="highlight-box" style="margin-top:20px;">
                    <p><strong>Key Terms for LLP Compliance in Gurugram:</strong></p>
                    <p><strong>Form 8:</strong> Statement of Account and Solvency - Declaration of solvency + Income/Expenditure + Assets/Liabilities. Due 30 October.</p><p><strong>Form 11:</strong> LLP Annual Return with partnership details. Due 30 May.</p><p><strong>Small LLP:</strong> Contribution ≤Rs 25 lakh AND turnover ≤Rs 40 lakh. Reduced fees, self-certification for Form 8.</p><p><strong>Section 34(4):</strong> LLP Act provision requiring audit if turnover >Rs 40L or contribution >Rs 25L.</p><p><strong>Rs 100/day:</strong> Uncapped penalty per form per day of delay. Designated partners personally liable.</p>

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
                            <text x="100" y="170" font-size="10" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial, sans-serif">LLP Compliance in Gurugram</text>
                        </svg>
                    </div>
                    <div class="illustration-badge">
                        <span>LLP Compliance</span>
                        <strong>Gurugram Filing</strong>
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
            <h2 class="section-title">Form 8 - Statement of Account and Solvency</h2>
            <div class="content-text">
                
                <p><strong>What:</strong> Part A: Declaration of Solvency. Part B: Income/Expenditure + Assets/Liabilities for the financial year.</p><p><strong>Due Date:</strong> Within 30 days from 6 months after FY end = <strong>30 October</strong> every year.</p><p><strong>Signing:</strong> Minimum 2 designated partners. If turnover >Rs 40L OR contribution >Rs 25L, certified by practising CA/CS/CMA. Small LLPs can self-certify.</p><p><strong>Audit:</strong> If turnover >Rs 40L or contribution >Rs 25L, accounts must be audited before filing Form 8. Audited financials attached.</p><p><strong>Penalty:</strong> Rs 100/day from 31 October. No cap. Designated partners personally liable.</p><p>For bookkeeping support, see <a href="/accounting-services">Accounting Services</a>.</p>

            </div>
            </div>
        </div>
    </div>
</section>

<!-- SECTION 5: OUR SERVICES -->
<section class="content-section" id="services-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Income Tax Return (ITR-5) for LLPs</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Service</th><th>What We Do</th></tr></thead>
                    <tbody>
                        <tr><td>ITR-5 (Non-Audit LLPs)</td><td>Due 31 July. Tax rate 30% + surcharge + cess. Section 44AD/44ADA presumptive taxation for eligible LLPs</td></tr><tr><td>ITR-5 (Audit LLPs)</td><td>Due 31 October. For LLPs with turnover > Rs 1 crore or Section 44AB audit. Transfer pricing: 30 November</td></tr><tr><td>Section 40(b) Computation</td><td>Partner remuneration deduction limits (Rs 3 lakh or specified % of book profit). Critical for professional LLPs</td></tr><tr><td>Advance Tax</td><td>Quarterly instalments (15 Jun, 15 Sep, 15 Dec, 15 Mar). Interest 234B/234C if shortfall</td></tr><tr><td>Late ITR Penalty</td><td>Rs 5,000 (or Rs 1,000 if income < Rs 5 lakh) under Section 234F + interest 234A/B/C</td></tr><tr><td>Tax Audit (Section 44AB)</td><td>If turnover > Rs 1 crore. Due 30 September. Penalty: Rs 1.5 lakh (Section 271B) if not filed</td></tr>

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
            <h2 class="section-title">LLP Compliance Services in Gurugram</h2>
            <p class="section-subtitle" style="text-align:left;max-width:100%;">Complete annual package: accounting, Form 8, Form 11, ITR-5, DIR-3 KYC, GST - one engagement, all deadlines managed.</p>
        </header>
        <div class="steps-container">
            <div class="step-card"><div class="step-content"><span class="step-badge">Step 1</span><h3 class="step-title">Accounting + Form 11 (by 30 May)</h3><p class="step-description">Maintain books, prepare partnership details. File Form 11 (Annual Return) with ROC Haryana on MCA V3 by 30 May. Digitally signed by designated partner.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Books maintained</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Form 11 filed</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="15" y="5" width="90" height="70" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><text x="60" y="40" font-size="9" fill="#E8712C" font-weight="800" text-anchor="middle" font-family="Arial">F-11</text></svg></div><span class="illustration-label">Annual Return</span><span class="step-number-large">01</span></div></div></div><div class="step-card"><div class="step-content"><span class="step-badge">Step 2</span><h3 class="step-title">ITR-5 + Audit (by 31 Jul/Oct)</h3><p class="step-description">Prepare ITR-5 with Section 40(b) computation. LLP Act audit if turnover >Rs 40L. Tax audit if >Rs 1 Cr. File by 31 July (non-audit) or 31 October (audit).</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>ITR-5 filed</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Audit done</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="20" y="15" width="80" height="50" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><text x="60" y="40" font-size="9" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">ITR-5</text></svg></div><span class="illustration-label">Tax Filed</span><span class="step-number-large">02</span></div></div></div><div class="step-card"><div class="step-content"><span class="step-badge">Step 3</span><h3 class="step-title">Form 8 + DIR-3 KYC (by 30 Oct)</h3><p class="step-description">Prepare Statement of Account & Solvency. CA certification if audit required. File Form 8 with ROC by 30 October. DIR-3 KYC for all designated partners.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Form 8 filed</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>KYC current</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="20" y="10" width="80" height="60" rx="8" fill="#E8F5E9" stroke="#25D366" stroke-width="2"/><path d="M52 40l5 5 12-12" stroke="#25D366" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/></svg></div><span class="illustration-label">Fully Compliant</span><span class="step-number-large">03</span></div></div></div>

        </div>
    </div>
</section>

<!-- SECTION 8: DOCUMENTS REQUIRED -->
<section class="content-section" id="documents-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">LLP vs Private Limited Company Compliance</h2>
            <div class="content-text">
                
                <div class="table-responsive-wrapper"><table><thead><tr><th>Parameter</th><th>LLP</th><th>Private Limited Company</th></tr></thead><tbody><tr><td>ROC Forms</td><td>2 (Form 8 + Form 11)</td><td>3+ (AOC-4 + MGT-7A + ADT-1)</td></tr><tr><td>Board Meetings</td><td>Not required</td><td>Minimum 4 per year</td></tr><tr><td>AGM</td><td>Not required</td><td>Mandatory annually</td></tr><tr><td>Statutory Audit</td><td>Only if turnover >Rs 40L or contribution >Rs 25L</td><td>Mandatory for all</td></tr><tr><td>Tax Rate</td><td>30% flat</td><td>22-25%</td></tr><tr><td>Penalty (Late ROC)</td><td>Rs 100/day NO cap</td><td>Rs 100/day NO cap</td></tr><tr><td>Fundraising</td><td>Cannot issue equity shares</td><td>Can issue shares to investors</td></tr></tbody></table></div><div class="highlight-box" style="margin-top:20px;"><p><strong>Gurugram advisory:</strong> LLPs suit professional services, consulting, and small partnerships not planning equity fundraise. Startups planning VC/PE capital need a private limited company. Patron assists with LLP-to-company conversion when fundraising is planned.</p></div>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 9: CHALLENGES -->
<section class="content-section" id="challenges-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Audit Requirements and Penalty Calculator</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Challenge</th><th>Impact</th><th>How Patron Accounting Solves It</th></tr></thead>
                    <tbody>
                        <tr><td>LLP Act Audit (Section 34(4))</td><td>Turnover > Rs 40L OR contribution > Rs 25L</td><td>Before Form 8 (30 Oct). Most active professional/tech LLPs in Gurugram exceed this threshold</td></tr><tr><td>30-Day Delay Penalty</td><td>Rs 6,000 (both forms combined)</td><td>1 month neglect already costs Rs 6,000. Rs 100/day per form, no cap</td></tr><tr><td>1-Year Delay Penalty</td><td>Rs 73,000 (both forms combined)</td><td>Annual neglect. Designated partners personally liable</td></tr><tr><td>3-Year Delay Penalty</td><td>Rs 2,19,000 (both forms combined)</td><td>Serious liability + ROC strike-off risk begins at 2 years</td></tr><tr><td>No Condonation</td><td>Unlike company schemes, no waiver exists</td><td>LLP late filing penalties cannot be reduced. File on time or pay dearly</td></tr>

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
            <h2 class="section-title">LLP Compliance Fees in Gurugram</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Fee Component</th><th>Amount</th></tr></thead>
                    <tbody>
                        <tr><td>Complete Annual Package (Form 8+11+ITR+KYC)</td><td>Starting from INR 4,999/year (Exl GST and Govt. Charges)</td></tr><tr><td>Form 8 Preparation + Certification</td><td>Starting from INR 2,999 (Exl GST and Govt. Charges)</td></tr><tr><td>Form 11 Filing</td><td>Starting from INR 1,499 (Exl GST and Govt. Charges)</td></tr><tr><td>LLP Audit (if applicable)</td><td>Starting from INR 4,999 (Exl GST and Govt. Charges)</td></tr><tr><td>Penalty Clearance / Backlog Filing</td><td>Starting from INR 7,999 (Exl GST) + penalties</td></tr><tr><td>Dormant LLP Advisory / Closure (Form 24)</td><td>Starting from INR 4,999 (Exl GST and Govt. Charges)</td></tr><tr><td>Patron Accounting Professional Fees</td><td>Starting from INR 4,999 (Exl GST and Govt. Charges)</td></tr>

                    </tbody>
                </table>
                </div>
                <p style="margin-top:16px;font-size:13px;color:var(--text-muted);font-style:italic;">All fees and charges listed are indicative only and do not constitute a binding offer. Final amounts may vary depending on the volume of work and the complexity involved.</p>
                <p style="margin-top:16px;">Professional service charges for drafting, filing, and representation are separate from the statutory fees. The exact fee depends on the complexity of the case, disputed amount, and number of hearings required. Contact us for a detailed quote.</p>
                <p style="margin-top:16px;"><strong>Get a free LLP Compliance in Gurugram consultation - <a href="tel:+919459456700">Call +91 945 945 6700</a> or <a href="https://wa.me/919459456700?text=Hello%2C%20I%20just%20visited%20your%20Pvt%20LLP%20Compliance%20in%20Gurugram%20page.%20I%20would%20like%20to%20know%20more%20about%20it." target="_blank" rel="noopener">WhatsApp us</a>. No-obligation assessment.</strong></p>
            </div>
        </div>
    </div>
</section>

<!-- SECTION 11: TIMELINE -->
<section class="content-section" id="timeline-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Month-by-Month LLP Compliance Calendar (FY 2025-26)</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Stage</th><th>Estimated Timeline</th></tr></thead>
                    <tbody>
                        <tr><td>April 2026</td><td>Finalise accounts, begin Form 8/11 preparation</td></tr><tr><td>30 May 2026</td><td>HARD DEADLINE: Form 11 (Annual Return) with ROC Haryana</td></tr><tr><td>30 June 2026</td><td>DIR-3 KYC (triennial cycle) for designated partners</td></tr><tr><td>31 July 2026</td><td>HARD DEADLINE: ITR-5 (non-audit LLPs)</td></tr><tr><td>30 September 2026</td><td>Tax Audit Report (if applicable) + DIR-3 KYC transition</td></tr><tr><td>30 October 2026</td><td>HARD DEADLINE: Form 8 (Statement of Account & Solvency)</td></tr><tr><td>31 October 2026</td><td>HARD DEADLINE: ITR-5 (audit LLPs)</td></tr>

                    </tbody>
                </table>
                </div>
                <div class="highlight-box" style="margin-top:16px;">
                    
                    <p><strong>Critical:</strong> Rs 100/day per form from the day after deadline. NO cap. 2 years non-filing = ROC strike-off risk. Dormant LLPs must file. Penalties are per LLP - partners in multiple LLPs face multiplied exposure. Start preparation in April. File Form 11 by May. File Form 8 by October. Every day counts.</p>

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
            <h2 class="section-title">Why Choose Patron Accounting for LLP Compliance in Gurugram?</h2>
        </div>
        <div class="features-grid"><article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><h3 class="feature-title">Gurugram Office</h3><p class="feature-text">Golf Course Extension Road - serving LLPs across Cyber City (professional), Sohna Road (tech), Udyog Vihar (trading), and Golf Course Road (advisory).</p></article><article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"/></svg></div><h3 class="feature-title">Complete Package</h3><p class="feature-text">Accounting + Form 8 + Form 11 + ITR-5 + DIR-3 KYC + GST. One engagement, all deadlines managed, zero penalties.</p></article><article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M14 2H6a2 2 0 00-2 2v16a2 2 0 002 2h12a2 2 0 002-2V8z"/><path d="M14 2v6h6M16 13H8M16 17H8"/></svg></div><h3 class="feature-title">In-House Audit</h3><p class="feature-text">CA team for LLP Act audit (Rs 40L threshold) and Tax Audit (Section 44AB). No separate engagement needed.</p></article><article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><path d="M12 6v6l4 2"/></svg></div><h3 class="feature-title">Zero Penalty Record</h3><p class="feature-text">Proactive reminders 30 days before deadline. Forms prepared 2 weeks early. Zero penalties for Patron-managed LLPs.</p></article></div>
    </div>
</section>

<!-- SECTION 12A: SOCIAL PROOF -->
<section class="content-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Trusted by 10,000+ Businesses Across India</h2>
            <div class="content-text">
                
                <p><strong>Trust Banner:</strong> 10,000+ Businesses Served | 4.9 Google Rating | 50,000+ Documents Filed | 15+ Years of Practice</p><blockquote style="border-left:3px solid var(--orange);padding:16px 20px;margin:20px 0;background:var(--orange-lighter);border-radius:0 var(--radius-sm) var(--radius-sm) 0;"><p style="font-style:italic;margin-bottom:8px;">"CA firm LLP with 4 partners. Patron handles all compliance: accounting, Form 8 with audit, Form 11, ITR-5, TDS, GST. Zero penalty in 5 years."</p><p style="font-weight:700;font-size:14px;margin:0;">- Senior Partner, CA Firm LLP, DLF Cyber City</p></blockquote><blockquote style="border-left:3px solid var(--orange);padding:16px 20px;margin:20px 0;background:var(--orange-lighter);border-radius:0 var(--radius-sm) var(--radius-sm) 0;"><p style="font-style:italic;margin-bottom:8px;">"Consulting LLP had not filed for 2 years. Patron cleared backlog, computed Rs 73,000 in penalties, got us compliant before ROC could initiate strike-off."</p><p style="font-weight:700;font-size:14px;margin:0;">- Founder, Consulting LLP, Sohna Road</p></blockquote>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 13: SELF-FILING vs PROFESSIONAL COMPARISON -->
<section class="content-section" id="comparison-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Event-Based LLP Compliances</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Event</th><th>Form</th><th>Deadline</th></tr></thead>
                    <tbody>
                        <tr><td>Change in partners (addition/removal)</td><td>Form 4</td><td>Within 30 days</td></tr><tr><td>Change in LLP Agreement</td><td>Form 3</td><td>Within 30 days</td></tr><tr><td>Change in registered office (within state)</td><td>Form 15</td><td>Within 30 days</td></tr><tr><td>Change in office (inter-state: Gurugram→Delhi)</td><td>Form 15 + RD approval</td><td>30 days + RD processing (inter-state from Feb 2026!)</td></tr><tr><td>LLP Closure (Strike Off)</td><td>Form 24</td><td>Application to ROC</td></tr><tr><td>Conversion to Pvt Ltd</td><td>Section 366 + multiple forms</td><td>As per procedure</td></tr>

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
                
                <ul><li><a href="/pvt-llp-compliance">LLP Compliance (National)</a></li><li><a href="#">LLP Registration</a> - New LLP</li><li><a href="/accounting-services">Accounting Services</a> - Bookkeeping</li><li><a href="/income-tax-return">Income Tax Return</a> - ITR-5</li><li><a href="/director-kyc">Director KYC</a> - DIR-3 for partners</li></ul>

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
                
                <p><strong>Governing Law:</strong> LLP Act, 2008 | LLP Rules, 2009 | LLP (Amendment) Act, 2021 (Small LLP) | IT Act, 1961</p><p><strong>Key Sections:</strong> Section 34 (accounts/audit) | Section 35 (annual return) | Rule 24 (Form 8) | Rule 25 (Form 11)</p><p><strong>Forms:</strong> Form 8 (Statement) | Form 11 (Annual Return) | ITR-5 | Form 3/4/15 (event-based) | Form 24 (closure)</p><p><strong>ROC:</strong> ROC Haryana at Chandigarh (from 16 Feb 2026)</p><p><strong>Penalties:</strong></p><p><strong>Late Form 8/11:</strong> Rs 100/day per form. NO cap. Partners personally liable.</p><p><strong>2+ years non-filing:</strong> ROC strike-off. Revival via NCLT (Rs 1 lakh+).</p><p><strong>Late ITR:</strong> Rs 5,000 + interest 234A/B/C.</p>

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
                    <h2 class="faq-expanded__title">FAQs - LLP Compliance in Gurugram</h2>
                    <p class="faq-expanded__lead">Common questions about LLP annual compliance, Form 8, Form 11, audit, penalties, and dormant LLPs for Gurugram partnerships.</p>
                    @include('partials.bigin-form', [
                        'variant'  => 'compact',
                        'service'  => 'LLP Compliance in Gurugram',
                        'city'     => 'Gurugram',
                    ])
                </aside>
                <div class="faq-expanded__list">
                    <div class="faq-expanded__item" id="faq-1">
                        <h3 class="faq-expanded__q">What is LLP annual compliance?</h3>
                        <div class="faq-expanded__a"><p>File Form 11 (Annual Return, 30 May), Form 8 (Statement of Account, 30 October), and ITR-5 (31 July or 31 October) every year. Plus DIR-3 KYC for partners. Mandatory regardless of business activity. Patron manages all as a bundled package.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-2">
                        <h3 class="faq-expanded__q">What is the penalty for late filing?</h3>
                        <div class="faq-expanded__a"><p>Rs 100/day per form with NO cap. Both Form 8 and Form 11 attract separate penalties. 1-year delay: Rs 73,000. 3-year delay: Rs 2,19,000. Designated partners personally liable. No condonation or waiver mechanism exists.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-3">
                        <h3 class="faq-expanded__q">Is audit mandatory for LLP?</h3>
                        <div class="faq-expanded__a"><p>LLP Act audit: if turnover >Rs 40 lakh OR contribution >Rs 25 lakh. Tax audit (Section 44AB): if turnover >Rs 1 crore. Small LLPs below both thresholds can self-certify Form 8 without professional certification.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-4">
                        <h3 class="faq-expanded__q">Does a dormant LLP need to file?</h3>
                        <div class="faq-expanded__a"><p>Yes. Zero activity still requires Form 8, Form 11, and ITR-5 every year. Same Rs 100/day penalty. After 2 years non-filing, ROC can strike off. Patron advises: file and maintain, or formally close via Form 24.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-5">
                        <h3 class="faq-expanded__q">What is a Small LLP?</h3>
                        <div class="faq-expanded__a"><p>Contribution ≤Rs 25 lakh AND turnover ≤Rs 40 lakh. Reduced fees, lower penalties, self-certification for Form 8. Most new Gurugram LLPs qualify in first 1-2 years.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-6">
                        <h3 class="faq-expanded__q">LLP vs Pvt Ltd compliance?</h3>
                        <div class="faq-expanded__a"><p>LLPs: fewer filings (2 vs 3+ ROC forms), no board meetings/AGM, audit exemption below thresholds. But: uncapped penalties (Rs 100/day), higher tax (30% vs 22-25%), cannot raise equity. Patron advises on optimal structure.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-7">
                        <h3 class="faq-expanded__q">What is the cost?</h3>
                        <div class="faq-expanded__a"><p>Complete annual package (Form 8+11+ITR+KYC) from Rs 4,999/year. LLP audit from Rs 4,999 additional. Government fees Rs 50-200/form. Transparent pricing.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-8">
                        <h3 class="faq-expanded__q">Can LLP convert to company?</h3>
                        <div class="faq-expanded__a"><p>Yes, under Section 366 Companies Act. Common for Gurugram LLPs planning VC/PE funding. Requires all partners' consent, compliance clearance, multiple ROC filings. Patron manages end-to-end.</p></div>
                    </div>
                </div>
            </div>


            <!-- Quick Answers -->
            <div class="highlight-box" style="margin-top:32px;">
                <p><strong>Quick Answers</strong></p>
                <p><strong>LLP mein kitni compliance?</strong> 3 main: Form 11 (30 May), Form 8 (30 Oct), ITR-5. Plus DIR-3 KYC aur GST.</p><p><strong>Kuch kaam nahi kiya toh bhi?</strong> Haan. Dormant LLP ko bhi sab file karna padta hai. Rs 100/din penalty.</p><p><strong>Audit kab?</strong> Turnover Rs 40L+ ya contribution Rs 25L+ ho toh.</p>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 18: URGENCY CTA -->
<section class="content-section" style="background: var(--orange-lighter) !important; border-left: 4px solid var(--orange);">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Rs 100/Day Penalty Per Form - NO Cap</h2>
            <div class="content-text">
                
                <p>Form 11: 30 May. Form 8: 30 October. Penalties are UNCAPPED. 2 years non-filing = strike-off risk. Dormant LLPs must file. Every late day = Rs 100 per form. Start preparation in April.</p><p><strong><a href="tel:+919459456700">Call +91 945 945 6700</a> or <a href="https://wa.me/919459456700?text=Hello%2C%20I%20just%20visited%20your%20Pvt%20LLP%20Compliance%20in%20Gurugram%20page.%20I%20would%20like%20to%20know%20more%20about%20it." target="_blank" rel="noopener">WhatsApp us</a>.</strong></p>

            </div>
        </div>
    </div>
</section>

<!-- CONCLUSION + CTA BLOCK (Dark) -->
<section class="content-section" style="background: var(--blue) !important;">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title" style="color:#FFFFFF !important;">Get Expert LLP Compliance in Gurugram</h2>
            <div class="content-text" style="text-align:left;">
                
                <p style="color:rgba(255,255,255,0.85);">LLP compliance requires disciplined annual filing of Form 8, Form 11, and ITR-5. The uncapped Rs 100/day penalty makes even short delays expensive. Whether you are a Cyber City professional LLP, Sohna Road tech partnership, or dormant LLP, obligations are identical.</p><p style="color:rgba(255,255,255,0.85);">Patron Accounting's Gurugram office provides complete LLP packages: accounting, Form 8/11, ITR-5, audit, DIR-3 KYC, GST, and backlog clearance.</p><p style="color:rgba(255,255,255,0.85);">With 10,000+ businesses served, a 4.9 Google rating, and 50,000+ documents filed, Patron Accounting LLP is a trusted partner across Gurugram, NCR, and India.</p>

            </div>
            <div style="display:flex;gap:14px;flex-wrap:wrap;margin-top:24px;">
                <a href="tel:+919459456700" style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:var(--orange);color:#fff;border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#128222; Call +91 945 945 6700</a>
                <a href="https://wa.me/919459456700?text=Hello%2C%20I%20just%20visited%20your%20Pvt%20LLP%20Compliance%20in%20Gurugram%20page.%20I%20would%20like%20to%20know%20more%20about%20it." target="_blank" style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:#25D366;color:#fff;border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;" rel="noopener">&#128172; WhatsApp Us</a>
                <a href="mailto:sales@patronaccounting.com?subject=LLP%20Compliance%20Gurugram&body=Hello%2C%20I%20just%20visited%20your%20Pvt%20LLP%20Compliance%20in%20Gurugram%20page.%20I%20would%20like%20to%20know%20more%20about%20it.%0A%0AThank%20you." style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:transparent;color:#fff;border:2px solid rgba(255,255,255,0.3);border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#9993;&#65039; Email Us</a>
            </div>
            <p style="color:rgba(255,255,255,0.7);font-size:13px;margin-top:16px;">Book a Free Consultation - No Obligation.</p>
        </div>
    </div>
</section>

<!-- GSTAT STATE BENCH CITY PAGES (32 Pages) -->
<section class="content-section" style="padding:48px 32px;background:var(--gray-50);">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title" style="text-align:center;margin-bottom:12px;">LLP Compliance - Available Cities</h2>
            <p style="text-align:center;color:var(--text-muted);font-size:15px;margin-bottom:40px;">Expert LLP compliance services across major Indian cities</p>
       
            <div class="pa-city-block" style="margin-bottom:40px;"><div class="pa-block-title">City-Wise LLP Compliance</div><div class="pa-block-sub">Select your city</div><div class="pa-city-grid"><a href="/pvt-llp-compliance/pune" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Pune</div><div class="pa-card-sub">Maharashtra</div></div></a><a href="/pvt-llp-compliance/mumbai" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Mumbai</div><div class="pa-card-sub">Maharashtra</div></div></a><a href="/pvt-llp-compliance/delhi" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Delhi</div><div class="pa-card-sub">Delhi NCR</div></div></a><div class="pa-city-card" style="opacity:0.6; pointer-events:none; border:2px solid var(--orange); position:relative;"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Gurugram</div><div class="pa-card-sub">Haryana</div></div><span style="position:absolute; top:6px; right:8px; font-size:10px; color:var(--orange); font-weight:700; text-transform:uppercase; letter-spacing:0.5px;">You're here</span></div></div></div><div class="pa-city-block"><div class="pa-block-title">Related Services in Gurugram</div><div class="pa-block-sub">End-to-end LLP support</div><div class="pa-cross-grid"><a href="#" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">LLP Registration</div><div class="pa-card-sub">Gurugram</div></div></a><a href="/accounting-services/gurugram" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Accounting Services</div><div class="pa-card-sub">Gurugram</div></div></a><a href="/income-tax-return-filing/gurugram" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Income Tax Return</div><div class="pa-card-sub">Gurugram</div></div></a><a href="/gst-registration/gurugram" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">GST Registration</div><div class="pa-card-sub">Gurugram</div></div></a><a href="/director-kyc/gurugram" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Director KYC</div><div class="pa-card-sub">Gurugram</div></div></a><a href="/private-limited-company-registration/gurugram" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Company Registration</div><div class="pa-card-sub">Gurugram</div></div></a></div></div>
        </div>
    </div>
</section>

<!-- CONTENT FRESHNESS FOOTER -->
<section class="content-section" style="padding:32px;">
    <div class="content-container">
        <div class="text-content" style="font-size:13px;color:var(--text-muted);">
            <p><strong>Content Created:</strong> 03 April 2026 &nbsp;|&nbsp; <strong>Last Updated:</strong> <span id="lastUpdatedFooter">03 April 2026</span> &nbsp;|&nbsp; <strong>Next Review:</strong> 03 July 2026 &nbsp;|&nbsp; <strong>Reviewed By:</strong> CA &amp; CS Team, Patron Accounting LLP</p>
            <p>This page is reviewed quarterly. LLP Act procedures, Form 8/11 deadlines, audit thresholds, Small LLP category, and penalty rates are verified against MCA notifications.</p>
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
