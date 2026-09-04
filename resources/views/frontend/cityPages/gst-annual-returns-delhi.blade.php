
@extends('layouts.service-app')

<!-- External Dependencies (loaded by master layout in production) -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Barlow:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,400&family=DM+Sans:opsz,wght@9..40,400;9..40,500;9..40,600;9..40,700&display=swap" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

@section('meta')
    <title>GST Annual Return in Delhi – GSTR-9, GSTR-9C &amp; Due Date</title>
    <meta name="description" content="GST annual return filing in Delhi. GSTR-9 by 31 Dec (>Rs 2 cr). GSTR-9C reconciliation (>Rs 5 cr). Self-certified. Patron +91 945 945 6700.">
    <link rel="canonical" href="/gst-annual-returns/delhi">
    <meta name="robots" content="index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1">
    <meta property="og:title" content="GST Annual Return in Delhi – GSTR-9, GSTR-9C &amp; Due Date">
    <meta property="og:description" content="GST annual return filing in Delhi. GSTR-9 by 31 Dec (>Rs 2 cr). GSTR-9C reconciliation (>Rs 5 cr). Self-certified. Patron +91 945 945 6700.">
    <meta property="og:url" content="/gst-annual-returns/delhi">
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="Patron Accounting">
    <meta property="og:image" content="https://www.patronaccounting.com/images/og-default-square.png">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="1200">
    <meta property="og:image:type" content="image/png">
    <meta property="og:image:secure_url" content="https://www.patronaccounting.com/images/og-default-square.png">
    <meta property="og:image:alt" content="Patron Accounting - partner you can rely on">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="GST Annual Return in Delhi – GSTR-9, GSTR-9C &amp; Due Date">
    <meta name="twitter:description" content="GST annual return filing in Delhi. GSTR-9 by 31 Dec (>Rs 2 cr). GSTR-9C reconciliation (>Rs 5 cr). Self-certified. Patron +91 945 945 6700.">
    <meta name="twitter:image" content="https://www.patronaccounting.com/images/og-default-square.png">
@endsection

@section('schema')
    <script type="application/ld+json">{
  "@context": "https://schema.org",
  "@graph": [
    {
      "@type": "Service",
      "name": "GST Annual Return (GSTR-9/9C) Filing Services in Delhi",
      "description": "GST annual return filing in Delhi. GSTR-9 by 31 Dec (>Rs 2 cr). GSTR-9C reconciliation (>Rs 5 cr). Self-certified. Patron +91 945 945 6700.",
      "url": "https://www.patronaccounting.com/gst-annual-returns/delhi",
      "serviceType": "GST Annual Return (GSTR-9/9C) Filing Services in Delhi",
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
        "url": "https://www.patronaccounting.com/gst-annual-returns/delhi",
        "price": "1999"
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
          "name": "GST Annual Returns",
          "item": "https://www.patronaccounting.com/gst-annual-returns"
        },
        {
          "@type": "ListItem",
          "position": 3,
          "name": "GST Annual Returns in Delhi",
          "item": "https://www.patronaccounting.com/gst-annual-returns/delhi"
        }
      ]
    },
    {
      "@type": "FAQPage",
      "mainEntity": [
        {
          "@type": "Question",
          "name": "Who must file GSTR-9 in Delhi?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "All regular GST-registered Delhi taxpayers with aggregate turnover exceeding Rs 2 crore. Optional for turnover up to Rs 2 crore. Composition taxpayers file GSTR-4 instead. Each Delhi GSTIN requires separate GSTR-9."
          }
        },
        {
          "@type": "Question",
          "name": "What is the due date for GSTR-9 and GSTR-9C?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Both due 31 December of financial year following reporting year. For FY 2025-26 due 31 December 2026. CBIC may extend by notification."
          }
        },
        {
          "@type": "Question",
          "name": "Is CA certification required for GSTR-9C?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "No. From FY 2020-21 GSTR-9C is self-certified by taxpayer per CBIC Notification 30/2021. However most businesses engage CAs for preparation given reconciliation complexity."
          }
        },
        {
          "@type": "Question",
          "name": "Can GSTR-9 be revised after filing?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "No. GSTR-9 cannot be revised amended or re-filed after submission. Filed version is final. Pre-filing reconciliation and accuracy critical."
          }
        },
        {
          "@type": "Question",
          "name": "What happens if I do not file GSTR-9 in Delhi?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Late fee of Rs 200 per day (Rs 100 CGST + Rs 100 SGST) from day after due date. Capped at 0.25 percent of annual turnover in the state. Non-filing triggers compliance risk and departmental notices."
          }
        },
        {
          "@type": "Question",
          "name": "What is the turnover limit for GSTR-9C in Delhi?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "GSTR-9C mandatory for aggregate turnover exceeding Rs 5 crore computed at PAN level. If total turnover across all GSTINs exceeds Rs 5 crore then GSTR-9C must be filed for each GSTIN separately."
          }
        },
        {
          "@type": "Question",
          "name": "What is DRC-03 and when is it needed?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Form DRC-03 is for voluntary payment of additional tax liability interest or late fee identified during GSTR-9 and GSTR-9C preparation. Must be paid before or at the time of filing GSTR-9."
          }
        },
        {
          "@type": "Question",
          "name": "How much does GSTR-9 and GSTR-9C filing cost in Delhi?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Patron GSTR-9 filing starts from INR 1,999 per GSTIN. GSTR-9 plus GSTR-9C for turnover above Rs 5 crore starts from Rs 19,999 per GSTIN including CA-prepared reconciliation and DRC-03 processing."
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
                        GST Annual Returns (9 / 9C) in Delhi: Comprehensive Year-End Filing
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
                            <p class="mb-0 text-dark benefit-paragraph"><span>GSTR-9:</span> Annual return consolidating GSTR-1/3B - Mandatory: turnover > Rs 2 crore</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>GSTR-9C:</span> Reconciliation statement with audited financials - Mandatory: turnover > Rs 5 crore</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Due Date:</span> 31 December of following FY (FY 2025-26 due: 31 Dec 2026)</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Late Fee:</span> Rs 200/day (Rs 100 CGST + Rs 100 SGST) - Capped at 0.25% of turnover</p>
                        </div>
                    </div>

                    <p class="mb-4 fw-bold" style="color: var(--blue); font-size: 15px;">10,000+ Businesses Served | 4.9 Google Rating</p>

                    <div class="hero-cta">
                        <a href="tel:+919459456700" class="btn-video text-decoration-none">
                            <span class="play-circle"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="width:14px;height:14px;color:#fff"><path d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/></svg></span>
                            Call +91 945 945 6700
                        </a>
                        <a href="mailto:sales@patronaccounting.com?subject=Enquiry%20for%20GST%20Annual%20Returns%20in%20Delhi&body=Hello%2C%20I%20just%20visited%20your%20GST%20Annual%20Returns%20in%20Delhi%20page.%20I%20would%20like%20to%20know%20more%20about%20it.%0A%0AThank%20you." class="btn-sample text-decoration-none">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="width:18px;height:18px;"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,12 2,6"/></svg>
                            Email Us
                        </a>
                        <a href="https://wa.me/919459456700?text=Hello%2C%20I%20just%20visited%20your%20GST%20Annual%20Returns%20in%20Delhi%20page.%20I%20would%20like%20to%20know%20more%20about%20it." target="_blank" class="btn-sample text-decoration-none" rel="noopener">
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
                                            'service'  => 'GST Annual Returns in Delhi',
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
    'ctaText'    => 'Get expert GST annual return filing for your Delhi business. Accurate, reconciled, on-time.',
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
            <a href="#what-section" class="toc-btn">What Is GSTR-9/9C</a>
            <a href="#who-section" class="toc-btn">Who Must File</a>
            <a href="#services-section" class="toc-btn">Services</a>
            <a href="#procedure-section" class="toc-btn">Process</a>
            <a href="#documents-section" class="toc-btn">Documents</a>
            <a href="#challenges-section" class="toc-btn">Challenges</a>
            <a href="#fees-section" class="toc-btn">Fees</a>
            <a href="#timeline-section" class="toc-btn">Timeline</a>
            <a href="#benefits-section" class="toc-btn">Why Patron</a>
            <a href="#comparison-section" class="toc-btn">Comparison</a>
            <a href="#faq-section" class="toc-btn">FAQs</a>
        </div>
        <button class="toc-arrow right" id="tocRight">&#10095;</button>
    </div>
</div>

<!-- SECTION 2: OVERVIEW / INTRO + TL;DR -->
<section class="content-section" id="overview-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">GST Annual Returns in Delhi: GSTR-9 and GSTR-9C Filing</h2>
            <div class="content-text">
                <div class="highlight-box" style="margin-bottom:20px;">
                    <p><strong>&#128204; TL;DR - GST Annual Returns in Delhi Services at a Glance</strong></p>
                    <p>GSTR-9 is the annual GST return consolidating all monthly GSTR-1 and GSTR-3B filings for a financial year. It is mandatory for regular taxpayers with aggregate turnover exceeding Rs 2 crore (optional for those below Rs 2 crore). GSTR-9C is the annual reconciliation statement between audited financial statements and GSTR-9, mandatory for taxpayers with aggregate turnover exceeding Rs 5 crore. From FY 2020-21 onwards, GSTR-9C is self-certified by the taxpayer (no mandatory CA certification, though CAs are typically engaged). Both are due by 31 December of the following financial year. Late fee: Rs 200 per day (Rs 100 CGST + Rs 100 SGST) capped at 0.25% of turnover per state/UT. GSTR-9 cannot be revised after filing. Additional tax liability discovered during reconciliation must be paid via DRC-03. Patron Accounting handles GSTR-9 and GSTR-9C filing for Delhi businesses from our Rohini office.</p>
                </div>
                <p>Delhi is among India's top GST revenue-contributing states/UTs, with a diverse business ecosystem spanning wholesale trade in Chandni Chowk and Sadar Bazaar, retail in Karol Bagh and Lajpat Nagar, IT services in Nehru Place, professional services in Connaught Place, manufacturing in Okhla and Naraina, and a growing D2C and e-commerce sector. Each Delhi GSTIN holder must separately file GSTR-9 (and GSTR-9C where applicable) consolidating all monthly returns for the financial year. Learn more about <a href="/gst-annual-returns">GST Annual Returns across India</a>.</p>
                <p>Patron Accounting's Delhi office in Rohini provides end-to-end GSTR-9 and GSTR-9C filing services: monthly return reconciliation (GSTR-1 vs GSTR-3B vs books), ITC reconciliation (GSTR-2B vs purchase register), turnover reconciliation with audited financials, GSTR-9C preparation and self-certification support, DRC-03 payment for additional liabilities, and filing on the GST portal. With integrated monthly <a href="/gst-returns">GST compliance</a>, audit support, and <a href="/income-tax-return">income tax return filing</a>, Patron ensures Delhi businesses file accurate, reconciled annual returns.</p>
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
                <h2 class="section-title">What Is GSTR-9 and GSTR-9C: Annual GST Compliance</h2>
                <div class="content-text what-is-definition">
                    
                    <p>GSTR-9 is the annual GST return that consolidates all outward supplies (from GSTR-1), inward supplies (from GSTR-2A/2B), tax liability, and input tax credit (ITC) reported in monthly/quarterly GSTR-3B filings for an entire financial year into a single comprehensive document. It is divided into 6 parts with 19 tables covering basic details, outward and inward supply details, ITC details, tax paid details, and HSN-wise summary. The return serves as the year-end self-check ensuring consistency between monthly returns and books of accounts.</p>
                    <p>GSTR-9C is the annual reconciliation statement that compares the figures reported in GSTR-9 with the audited annual financial statements. It identifies discrepancies in turnover, tax liability, and ITC between GST returns and audited accounts, requires explanations for differences, and reports any additional liability. From FY 2020-21 onwards, GSTR-9C is self-certified by the taxpayer - the earlier requirement for CA/CMA certification was removed (CBIC Notification 30/2021). However, given the complexity of reconciliation, most businesses continue to engage Chartered Accountants for preparation.</p>
                    <p>For Delhi businesses - whether a Chandni Chowk trader with Rs 10 crore turnover, a Connaught Place IT company with Rs 50 crore revenue, or a South Delhi D2C brand with Rs 3 crore sales - GSTR-9 filing is not merely a summary exercise. It is the point where all monthly return discrepancies become visible, ITC mismatches are identified, and additional tax liabilities are crystallised. The Delhi GST department and CGST Commissioner Delhi Zone use GSTR-9/9C data for cross-verification with income tax returns, issuing notices for turnover mismatches.</p>

                </div>
                <div class="highlight-box" style="margin-top:20px;">
                    <p><strong>Key Terms for GST Annual Returns in Delhi:</strong></p>
                    <p><strong>GSTR-9:</strong> Annual GST return consolidating 12 months of GSTR-1 and GSTR-3B. Mandatory for regular taxpayers with turnover above Rs 2 crore under Section 44 CGST Act.</p>
                    <p><strong>GSTR-9C:</strong> Annual reconciliation statement comparing GSTR-9 with audited financial statements. Mandatory for turnover above Rs 5 crore. Self-certified from FY 2020-21.</p>
                    <p><strong>DRC-03:</strong> Form for voluntary payment of additional tax liability identified during GSTR-9/9C preparation. Must be paid before or at the time of filing.</p>
                    <p><strong>ITC:</strong> Input Tax Credit - credit of GST paid on purchases used to offset outward GST liability.</p>

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
                            <text x="100" y="170" font-size="10" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial, sans-serif">GST Annual Returns in Delhi</text>
                        </svg>
                    </div>
                    <div class="illustration-badge">
                        <span>Section 44 CGST Act</span>
                        <strong>Annual GST Compliance</strong>
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
            <h2 class="section-title">Who Must File GST Annual Returns in Delhi</h2>
            <div class="content-text">
                
                <ul>
                    <li><strong>All regular Delhi GST-registered taxpayers with turnover > Rs 2 crore</strong> must file GSTR-9. This includes traders, manufacturers, service providers, and e-commerce sellers registered under GST in Delhi.</li>
                    <li><strong>Delhi taxpayers with turnover > Rs 5 crore</strong> must additionally file GSTR-9C (reconciliation statement with audited financials).</li>
                    <li><strong>Delhi taxpayers with turnover up to Rs 2 crore</strong> are exempt from mandatory GSTR-9 filing (as per annual CBIC notifications) but may file voluntarily.</li>
                    <li><strong>Multi-GSTIN Delhi businesses</strong> must file GSTR-9 separately for each GSTIN. The aggregate turnover for GSTR-9C applicability is computed at PAN level, but the reconciliation is done per GSTIN.</li>
                </ul>
                <div class="highlight-box" style="margin-top:20px;">
                    <p><strong>Who does NOT file GSTR-9:</strong> Composition scheme taxpayers (file GSTR-4 instead), Input Service Distributors, TDS deductors under Section 51, TCS collectors under Section 52, casual/non-resident taxable persons, and OIDAR providers to unregistered persons.</p>
                </div>

            </div>
            </div>
        </div>
    </div>
</section>

<!-- SECTION 5: OUR SERVICES -->
<section class="content-section" id="services-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">GST Annual Return Services: What Patron Handles for Delhi Businesses</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Service</th><th>What We Do</th></tr></thead>
                    <tbody>
                        <tr><td>GSTR-1 vs GSTR-3B Reconciliation</td><td>Patron reconciles all 12 months of GSTR-1 (outward supply details) with GSTR-3B (summary return) for the Delhi GSTIN. Discrepancies in taxable value, tax amounts, and supply categories are identified and resolved.</td></tr>
                        <tr><td>ITC Reconciliation (GSTR-2B vs Books)</td><td>Patron reconciles auto-populated ITC from GSTR-2B with actual purchase register and books. Excess ITC claimed, ITC not appearing in GSTR-2B, and reversals required are identified before GSTR-9 filing.</td></tr>
                        <tr><td>GSTR-9 Preparation and Filing</td><td>All 6 parts and 19 tables prepared with reconciled data: outward supplies, inward supplies, ITC availed/reversed, tax paid, HSN summary, and late fee computation. Filed on gst.gov.in before 31 December.</td></tr>
                        <tr><td>GSTR-9C Preparation (Turnover > Rs 5 Crore)</td><td>Patron's CA team prepares the reconciliation statement: turnover reconciliation between audited financials and GSTR-9, tax reconciliation, ITC reconciliation, and additional liability reporting. Self-certified by taxpayer with CA preparation support.</td></tr>
                        <tr><td>DRC-03 Payment Processing</td><td>Additional tax, interest, or late fee identified during reconciliation is computed and paid via DRC-03 before or at the time of GSTR-9/9C filing for Delhi taxpayers.</td></tr>
                        <tr><td>GST Portal Filing and Submission</td><td>Complete portal process: GSTR-9 form access, data entry, computation verification, preview, and submission with DSC/EVC. GSTR-9C uploaded with audited accounts.</td></tr>
                        <tr><td>Bundled GST + Audit + ITR</td><td>Annual returns coordinated alongside monthly <a href="/gst-returns">GST return filing</a>, statutory audit, and <a href="/income-tax-return">income tax return filing</a> for complete year-end compliance.</td></tr>

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
            <h2 class="section-title">GSTR-9/9C Filing Process in Delhi: 6 Steps</h2>
            <p class="section-subtitle" style="text-align:left;max-width:100%;">GSTR-9/9C is filed on the central GST portal (gst.gov.in). Delhi GSTIN holders file one GSTR-9 per Delhi GSTIN. Late fee is split: Rs 100 CGST (central) + Rs 100 Delhi SGST (state) per day.</p>
        </header>
        <div class="steps-container">
            <div class="step-card">
                <div class="step-content">
                    <span class="step-badge">Step 1</span>
                    <h3 class="step-title">Ensure All Monthly Returns Are Filed</h3>
                    <p class="step-description">GSTR-9 can only be filed after all GSTR-1 and GSTR-3B returns for the financial year are submitted. Verify on the GST portal that all 12 months of GSTR-1 and GSTR-3B are filed for the Delhi GSTIN. Any unfiled monthly return blocks annual return filing. Patron tracks monthly return status throughout the year.</p>
                    <div class="step-highlights">
                        <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>All 12 months verified</span>
                        <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Portal status check</span>
                    </div>
                </div>
                <div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="15" y="5" width="90" height="70" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><line x1="30" y1="25" x2="90" y2="25" stroke="#F5A623" stroke-width="3" stroke-linecap="round"/><line x1="30" y1="40" x2="80" y2="40" stroke="#14365F" stroke-width="2" stroke-linecap="round" opacity="0.3"/><line x1="30" y1="52" x2="70" y2="52" stroke="#14365F" stroke-width="2" stroke-linecap="round" opacity="0.3"/><circle cx="85" cy="60" r="10" fill="#E8F5E9" stroke="#10B981" stroke-width="1.5"/><path d="M80 60l4 4 7-7" stroke="#10B981" stroke-width="2" stroke-linecap="round"/></svg></div><span class="illustration-label">Returns Verified</span><span class="step-number-large">01</span></div></div>
            </div>
            <div class="step-card">
                <div class="step-content">
                    <span class="step-badge">Step 2</span>
                    <h3 class="step-title">Reconcile GSTR-1 vs GSTR-3B vs Books</h3>
                    <p class="step-description">The core of GSTR-9 preparation is reconciling three data sources: GSTR-1 (outward supply details), GSTR-3B (summary tax payment), and books of accounts. Common discrepancies include: advances reported in GSTR-3B but not GSTR-1, credit notes timing differences, amendments processed in different months. Patron runs systematic reconciliation for each Delhi GSTIN.</p>
                    <div class="step-highlights">
                        <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>3-way matching</span>
                        <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Discrepancies resolved</span>
                    </div>
                </div>
                <div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><circle cx="40" cy="40" r="22" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><circle cx="80" cy="40" r="22" fill="#FFF3E0" stroke="#F5A623" stroke-width="1.5"/><text x="40" y="44" font-size="8" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">GSTR-1</text><text x="80" y="44" font-size="8" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">GSTR-3B</text><path d="M55 40h10" stroke="#10B981" stroke-width="2" stroke-dasharray="3 2"/></svg></div><span class="illustration-label">Reconciled</span><span class="step-number-large">02</span></div></div>
            </div>
            <div class="step-card">
                <div class="step-content">
                    <span class="step-badge">Step 3</span>
                    <h3 class="step-title">Reconcile ITC (GSTR-2B vs Purchase Register)</h3>
                    <p class="step-description">Match auto-populated ITC from GSTR-2B with your purchase register and GSTR-3B ITC claims. Identify: ITC claimed but not in GSTR-2B (excess claim requiring reversal), ITC in GSTR-2B but not claimed (missed credit), and ITC reversed during the year. Patron automates ITC matching for Delhi taxpayers.</p>
                    <div class="step-highlights">
                        <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Automated ITC matching</span>
                        <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Excess/missed identified</span>
                    </div>
                </div>
                <div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="15" y="15" width="40" height="50" rx="4" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><rect x="65" y="15" width="40" height="50" rx="4" fill="#FFF3E0" stroke="#F5A623" stroke-width="1.5"/><text x="35" y="35" font-size="7" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">2B</text><text x="85" y="35" font-size="7" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">Books</text><path d="M55 40h10" stroke="#10B981" stroke-width="3"/><circle cx="60" cy="40" r="5" fill="#E8F5E9" stroke="#10B981" stroke-width="1"/></svg></div><span class="illustration-label">ITC Matched</span><span class="step-number-large">03</span></div></div>
            </div>
            <div class="step-card">
                <div class="step-content">
                    <span class="step-badge">Step 4</span>
                    <h3 class="step-title">Prepare and File GSTR-9</h3>
                    <p class="step-description">Using reconciled data, prepare all 19 tables across 6 parts of GSTR-9: Part I (basic details), Part II (outward and inward supplies), Part III (ITC details), Part IV (tax paid), Part V (previous FY transactions), Part VI (HSN summary and late fee). Compute additional liability and pay via DRC-03. File on the GST portal before 31 December.</p>
                    <div class="step-highlights">
                        <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>6 parts, 19 tables</span>
                        <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>DRC-03 processed</span>
                    </div>
                </div>
                <div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="20" y="10" width="80" height="60" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><line x1="35" y1="25" x2="85" y2="25" stroke="#F5A623" stroke-width="2" stroke-linecap="round"/><line x1="35" y1="35" x2="75" y2="35" stroke="#14365F" stroke-width="1.5" stroke-linecap="round" opacity="0.3"/><line x1="35" y1="45" x2="65" y2="45" stroke="#14365F" stroke-width="1.5" stroke-linecap="round" opacity="0.3"/><line x1="35" y1="55" x2="80" y2="55" stroke="#14365F" stroke-width="1.5" stroke-linecap="round" opacity="0.3"/><circle cx="90" cy="15" r="12" fill="#E8F5E9" stroke="#10B981" stroke-width="1.5"/><path d="M85 15l4 4 7-7" stroke="#10B981" stroke-width="2" stroke-linecap="round"/></svg></div><span class="illustration-label">GSTR-9 Filed</span><span class="step-number-large">04</span></div></div>
            </div>
            <div class="step-card">
                <div class="step-content">
                    <span class="step-badge">Step 5</span>
                    <h3 class="step-title">Prepare and File GSTR-9C (If Turnover > Rs 5 Crore)</h3>
                    <p class="step-description">Reconcile audited financial statements (PAN level) with GSTR-9 data (per GSTIN): Part II (turnover - audited vs GSTR-9), Part III (tax paid), Part IV (ITC reconciliation), Part V (additional liability). Self-certify and file along with audited accounts on the GST portal. Patron's CA team handles complete GSTR-9C preparation for Delhi businesses.</p>
                    <div class="step-highlights">
                        <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>CA-prepared reconciliation</span>
                        <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Self-certified</span>
                    </div>
                </div>
                <div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="10" y="15" width="45" height="55" rx="4" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><rect x="65" y="15" width="45" height="55" rx="4" fill="#FFF3E0" stroke="#F5A623" stroke-width="1.5"/><text x="32" y="40" font-size="7" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">Audited</text><text x="87" y="40" font-size="7" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">GSTR-9</text><path d="M55 42h10" stroke="#E8712C" stroke-width="2"/><text x="60" y="55" font-size="6" fill="#E8712C" font-weight="700" text-anchor="middle" font-family="Arial">9C</text></svg></div><span class="illustration-label">9C Ready</span><span class="step-number-large">05</span></div></div>
            </div>
            <div class="step-card">
                <div class="step-content">
                    <span class="step-badge">Step 6</span>
                    <h3 class="step-title">Submit and Archive</h3>
                    <p class="step-description">After filing, download the filed GSTR-9 and GSTR-9C from the portal as proof of compliance. These documents are critical during GST audits, income tax scrutiny, and for cross-verification. GSTR-9 cannot be revised after filing - the filed version is final. Patron archives all filings for Delhi clients.</p>
                    <div class="step-highlights">
                        <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Non-revisable - final</span>
                        <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Archived for audit</span>
                    </div>
                </div>
                <div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="25" y="10" width="70" height="55" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><path d="M60 30L60 50" stroke="#14365F" stroke-width="2" stroke-linecap="round"/><path d="M50 42l10 10 10-10" stroke="#14365F" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/><rect x="40" y="60" width="40" height="8" rx="2" fill="#E8F5E9" stroke="#10B981" stroke-width="1"/><text x="60" y="67" font-size="6" fill="#10B981" font-weight="700" text-anchor="middle" font-family="Arial">SAVED</text></svg></div><span class="illustration-label">Archived</span><span class="step-number-large">06</span></div></div>
            </div>

        </div>
    </div>
</section>

<!-- SECTION 8: DOCUMENTS REQUIRED -->
<section class="content-section" id="documents-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Documents Required for GSTR-9/9C Filing in Delhi</h2>
            <div class="content-text">
                
                <ul>
                    <li><strong>All Filed GSTR-1 Returns (12 months)</strong> - Outward supply details for each month of the FY.</li>
                    <li><strong>All Filed GSTR-3B Returns (12 months)</strong> - Summary returns with tax payment details.</li>
                    <li><strong>GSTR-2B Data (12 months)</strong> - Auto-populated ITC statements for supplier matching.</li>
                    <li><strong>Books of Accounts</strong> - Sales register, purchase register, ITC register, debit/credit notes.</li>
                    <li><strong>Audited Financial Statements (For GSTR-9C)</strong> - Profit and loss account and balance sheet.</li>
                    <li><strong>HSN-Wise Summary</strong> - Outward supplies categorised by HSN/SAC codes.</li>
                    <li><strong>DRC-03 Payment Receipts</strong> - Proof of additional tax paid for discrepancies.</li>
                </ul>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 9: CHALLENGES -->
<section class="content-section" id="challenges-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Common GSTR-9/9C Challenges in Delhi: 5 Issues and Solutions</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Challenge</th><th>Impact</th><th>How Patron Accounting Solves It</th></tr></thead>
                    <tbody>
                        <tr><td>GSTR-1 vs GSTR-3B Mismatch</td><td>Persistent mismatches due to amendments, credit notes, and advance receipt timing differences trigger Delhi GST department notices</td><td>Patron reconciles monthly to prevent year-end surprises for Delhi businesses</td></tr>
                        <tr><td>ITC Over-Claim or Under-Claim</td><td>ITC claimed on invoices not in GSTR-2B creates excess issues; missed valid ITC represents lost credit</td><td>Complete ITC matching against GSTR-2B for every Delhi GSTIN</td></tr>
                        <tr><td>Turnover Reconciliation for GSTR-9C</td><td>Audited vs GSTR-9 turnover differs due to advances, unbilled revenue, credit notes, exempt supplies</td><td>Patron's CA team reconciles PAN-level financials with per-GSTIN returns</td></tr>
                        <tr><td>Non-Revisable Returns</td><td>GSTR-9 cannot be revised - hasty filing creates permanent compliance gaps for scrutiny</td><td>Full reconciliation before filing ensures accuracy and defensibility</td></tr>
                        <tr><td>GST-IT Cross-Verification</td><td>Turnover mismatches between GSTR-9 and ITR trigger dual scrutiny from GST and IT authorities</td><td>Patron ensures GST and IT turnovers are reconciled before annual filing</td></tr>

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
            <h2 class="section-title">GST Annual Return Filing Fees in Delhi: Late Fee Structure and Professional Charges</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Fee Component</th><th>Amount</th></tr></thead>
                    <tbody>
                        <tr><td>GSTR-9 Late Fee (Turnover up to Rs 5 crore)</td><td>Rs 50/day (Rs 25 CGST + Rs 25 SGST), max 0.04% of turnover</td></tr>
                        <tr><td>GSTR-9 Late Fee (Rs 5-20 crore)</td><td>Rs 100/day (Rs 50 + Rs 50), max 0.04% of turnover</td></tr>
                        <tr><td>GSTR-9 Late Fee (Above Rs 20 crore)</td><td>Rs 200/day (Rs 100 + Rs 100), max 0.25% of turnover</td></tr>
                        <tr><td>GSTR-9C Late Fee (Above Rs 5 crore)</td><td>Rs 200/day, max 0.50% of turnover</td></tr>
                        <tr><td>Patron Accounting Professional Fees</td><td>Starting from INR 1,999 (Exl GST and Govt. Charges)</td></tr>
                        <tr><td>Patron GSTR-9 + GSTR-9C (> Rs 5 crore)</td><td>Starting from INR 19,999 per GSTIN (Exl GST and Govt. Charges)</td></tr>

                    </tbody>
                </table>
                </div>
                <p style="margin-top:16px;font-size:13px;color:var(--text-muted);font-style:italic;">All fees and charges listed are indicative only and do not constitute a binding offer. Final amounts may vary depending on the volume of work and the complexity involved.</p>
                <p style="margin-top:16px;">Professional service charges for drafting, filing, and representation are separate from the statutory fees. The exact fee depends on the complexity of the case, disputed amount, and number of hearings required. Contact us for a detailed quote.</p>
                <p style="margin-top:16px;"><strong>Get a free GST Annual Returns in Delhi consultation - <a href="tel:+919459456700">Call +91 945 945 6700</a> or <a href="https://wa.me/919459456700?text=Hello%2C%20I%20just%20visited%20your%20GST%20Annual%20Returns%20in%20Delhi%20page.%20I%20would%20like%20to%20know%20more%20about%20it." target="_blank" rel="noopener">WhatsApp us</a>. No-obligation assessment.</strong></p>
            </div>
        </div>
    </div>
</section>

<!-- SECTION 11: TIMELINE -->
<section class="content-section" id="timeline-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">GSTR-9/9C Filing Timeline for Delhi Businesses</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Stage</th><th>Estimated Timeline</th></tr></thead>
                    <tbody>
                        <tr><td>FY End</td><td>31 March - Reporting year closes</td></tr>
                        <tr><td>Ensure All Monthly Returns Filed</td><td>April-June - All GSTR-1 and GSTR-3B for FY must be filed</td></tr>
                        <tr><td>GSTR-1 vs GSTR-3B Reconciliation</td><td>July-September - Patron runs systematic reconciliation</td></tr>
                        <tr><td>ITC Reconciliation (GSTR-2B vs Books)</td><td>August-October - Match auto-populated ITC with purchase register</td></tr>
                        <tr><td>GSTR-9 Preparation</td><td>September-November - 6 parts, 19 tables prepared with reconciled data</td></tr>
                        <tr><td>GSTR-9C Preparation (> Rs 5 crore)</td><td>October-November - Audited financials vs GSTR-9 reconciliation</td></tr>
                        <tr><td>DRC-03 Payment</td><td>November-December - Additional liability paid before filing</td></tr>
                        <tr><td>Filing on GST Portal</td><td>By 31 December - GSTR-9 first, then GSTR-9C</td></tr>

                    </tbody>
                </table>
                </div>
                <div class="highlight-box" style="margin-top:16px;">
                    
                    <p><strong>Important:</strong> Start preparation by September to ensure accurate, timely filing. Patron's year-round monthly reconciliation means GSTR-9 is 80% complete before the filing season begins for Delhi businesses.</p>

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
            <h2 class="section-title">Why Choose Patron for GST Annual Returns in Delhi</h2>
        </div>
        <div class="features-grid">
            <article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2"><circle cx="12" cy="12" r="10"/><path d="M12 6v6l4 2"/></svg></div><h3>Year-Round Monthly Reconciliation</h3><p>Patron reconciles GSTR-1, GSTR-3B, and books monthly throughout the year. GSTR-9 preparation is 80% complete before filing season. Delhi businesses avoid the December rush.</p></article>
            <article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2"><path d="M12 14l9-5-9-5-9 5 9 5z"/><path d="M12 14l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14z"/></svg></div><h3>CA-Led GSTR-9C Preparation</h3><p>For Delhi businesses above Rs 5 crore, Patron's CA team handles the complete reconciliation between audited financials and GSTR-9 data. Self-certification supported with CA documentation.</p></article>
            <article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><h3>GST + IT Cross-Verification</h3><p>Patron reconciles GST turnover with income tax turnover before filing, preventing dual-scrutiny when GSTR-9 and ITR numbers do not match for Delhi businesses.</p></article>
            <article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg></div><h3>Non-Revisable Return Accuracy</h3><p>Since GSTR-9 cannot be revised, filing accuracy is paramount. Patron's multi-stage reconciliation and review ensures the filed return is accurate and defensible during scrutiny.</p></article>
        </div>
    </div>
</section>

<!-- SECTION 12A: SOCIAL PROOF -->
<section class="content-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Trusted by 10,000+ Businesses Across India</h2>
            <div class="content-text">
                
                <p><strong>10,000+ Businesses Served | 4.9 Google Rating | 50,000+ Documents Filed | 15+ Years of Practice</strong></p>
                <p>"Patron reconciles our GST data monthly so the annual return is always clean. GSTR-9C was filed with zero discrepancies." - CFO, IT Services Company, Delhi</p>
                <p><strong>4-Office Signal:</strong> Pune, Mumbai, Delhi, and Gurugram.</p>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 13: SELF-FILING vs PROFESSIONAL COMPARISON -->
<section class="content-section" id="comparison-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Patron Accounting vs Self-Filing: GSTR-9/9C Comparison</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Factor</th><th>Patron Accounting</th><th>Self-Filing</th></tr></thead>
                    <tbody>
                        <tr><td>Reconciliation</td><td>Year-round monthly reconciliation</td><td>December scramble</td></tr>
                        <tr><td>ITC Matching</td><td>Automated GSTR-2B vs books</td><td>Manual, incomplete</td></tr>
                        <tr><td>GSTR-9C</td><td>CA-prepared reconciliation</td><td>DIY or external CA engagement</td></tr>
                        <tr><td>Cross-Verification</td><td>GST + IT turnover matched</td><td>Separate, uncoordinated</td></tr>
                        <tr><td>DRC-03</td><td>Additional liability computed and paid</td><td>Often missed or miscalculated</td></tr>
                        <tr><td>Pricing</td><td>From INR 1,999 per GSTIN</td><td>Free but high error risk</td></tr>

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
            <h2 class="section-title">Related GST and Compliance Services</h2>
            <div class="content-text">
                
                <ul>
                    <li><a href="/gst-annual-returns">GST Annual Returns in India</a> - National-level GSTR-9/9C filing services.</li>
                    <li><a href="/gst-returns">GST Returns</a> - Monthly/quarterly GSTR-1 and GSTR-3B filing.</li>
                    <li><a href="/gst-registration">GST Registration</a> - New GST registration across India.</li>
                    <li><a href="/gst-audit">GST Audit Service</a> - Comprehensive GST audit and compliance verification.</li>
                    <li><a href="/gst-notice">GST Notice</a> - GST notice response and representation services.</li>
                    <li><a href="/income-tax-return">Income Tax Return Filing</a> - ITR filing coordinated with GST annual returns.</li>
                </ul>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 15A: LEGAL FRAMEWORK -->
<section class="content-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Legal Framework: GST Annual Return Under CGST Act 2017</h2>
            <div class="content-text">
                
                <p><strong>Governing Acts:</strong> Central Goods and Services Tax Act, 2017 (Section 44) + Delhi Goods and Services Tax Act, 2017</p>
                <p><strong>GSTR-9:</strong> Section 44 CGST Act - annual return. Rule 80 CGST Rules. Mandatory for regular taxpayers with turnover above Rs 2 crore.</p>
                <p><strong>GSTR-9C:</strong> Section 44(2) read with Rule 80(3) - reconciliation statement. Mandatory for turnover above Rs 5 crore. Self-certified from FY 2020-21 (CBIC Notification 30/2021).</p>
                <p><strong>Due Date:</strong> 31 December of the FY following the reporting FY. May be extended by CBIC notification.</p>
                <p><strong>Late Fee (GSTR-9):</strong> Rs 200/day (Rs 100 CGST + Rs 100 SGST). Tiered caps by turnover. No late fee on IGST.</p>
                <p><strong>DRC-03:</strong> Form for voluntary payment of additional tax/interest identified during GSTR-9/9C preparation.</p>
                <p><strong>Non-Revisable:</strong> GSTR-9 and GSTR-9C cannot be amended after filing.</p>
                <p><strong>Delhi SGST:</strong> Commissioner of SGST, GNCTD administers Delhi SGST. Late fee includes Rs 100 Delhi SGST component.</p>
                <p><strong>Source:</strong> <a href="https://gst.gov.in" target="_blank" rel="noopener">gst.gov.in</a>, <a href="https://cbic.gov.in" target="_blank" rel="noopener">cbic.gov.in</a></p>

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
                    <h2 class="faq-expanded__title">FAQs: GST Annual Returns in Delhi</h2>
                    <p class="faq-expanded__lead">Common questions about GSTR-9 and GSTR-9C filing for Delhi businesses answered by our CA and CS team.</p>
                    @include('partials.bigin-form', [
                        'variant'  => 'compact',
                        'service'  => 'GST Annual Returns in Delhi',
                        'city'     => 'Delhi',
                    ])
                </aside>
                <div class="faq-expanded__list">
                    <div class="faq-expanded__item" id="faq-1">
                        <h3 class="faq-expanded__q">Who must file GSTR-9 in Delhi?</h3>
                        <div class="faq-expanded__a"><p>All regular GST-registered taxpayers in Delhi with annual aggregate turnover exceeding Rs 2 crore must file GSTR-9. It is optional for those with turnover up to Rs 2 crore. Composition taxpayers file GSTR-4 instead. ISDs, TDS deductors, and TCS collectors are exempt. Each Delhi GSTIN requires a separate GSTR-9. Patron handles filing for single and multi-GSTIN Delhi businesses.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-2">
                        <h3 class="faq-expanded__q">What is the due date for GSTR-9 and GSTR-9C?</h3>
                        <div class="faq-expanded__a"><p>Both GSTR-9 and GSTR-9C are due by 31 December of the financial year following the reporting year. For FY 2025-26, the due date is 31 December 2026. CBIC may extend the deadline by notification. Patron monitors notifications and files well before the deadline for Delhi taxpayers.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-3">
                        <h3 class="faq-expanded__q">Is CA certification required for GSTR-9C?</h3>
                        <div class="faq-expanded__a"><p>No. From FY 2020-21 onwards (CBIC Notification 30/2021), GSTR-9C is self-certified by the taxpayer. The earlier requirement for CA/CMA certification was removed. However, given the complexity of reconciling audited financials with GST returns, most Delhi businesses continue to engage CAs for preparation. Patron's CA team prepares GSTR-9C while the taxpayer self-certifies.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-4">
                        <h3 class="faq-expanded__q">Can GSTR-9 be revised after filing?</h3>
                        <div class="faq-expanded__a"><p>No. GSTR-9 cannot be revised, amended, or re-filed after submission on the GST portal. The filed version is final and permanent. This makes pre-filing reconciliation and accuracy critical. Any errors remain on record. Patron's multi-stage review process ensures accuracy before submission for Delhi taxpayers.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-5">
                        <h3 class="faq-expanded__q">What happens if I do not file GSTR-9 in Delhi?</h3>
                        <div class="faq-expanded__a"><p>Late fee of Rs 200 per day (Rs 100 CGST + Rs 100 SGST) applies from the day after the due date. The fee is capped at 0.25% of annual turnover in the state/UT. For a Delhi business with Rs 10 crore turnover, the maximum late fee is Rs 2.5 lakh. Non-filing also triggers compliance risk and the Delhi GST department may issue notices.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-6">
                        <h3 class="faq-expanded__q">What is the turnover limit for GSTR-9C in Delhi?</h3>
                        <div class="faq-expanded__a"><p>GSTR-9C is mandatory for taxpayers with aggregate turnover exceeding Rs 5 crore in the financial year. Aggregate turnover is computed at PAN level (not per GSTIN). If your Delhi business has Rs 5 crore+ total turnover across all GSTINs, GSTR-9C must be filed for each GSTIN separately. Patron prepares GSTR-9C at PAN level and files per GSTIN.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-7">
                        <h3 class="faq-expanded__q">What is DRC-03 and when is it needed?</h3>
                        <div class="faq-expanded__a"><p>Form DRC-03 is used for voluntary payment of additional tax liability, interest, or late fee identified during GSTR-9/9C preparation. If your reconciliation reveals under-reported tax or over-claimed ITC during the year, the difference must be paid via DRC-03 before or at the time of filing GSTR-9. Patron computes the exact additional liability and processes DRC-03 for Delhi taxpayers.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-8">
                        <h3 class="faq-expanded__q">How much does GSTR-9/9C filing cost in Delhi?</h3>
                        <div class="faq-expanded__a"><p>Patron Accounting's GSTR-9 filing service starts from INR 1,999 per GSTIN. GSTR-9 + GSTR-9C for turnover above Rs 5 crore starts from Rs 19,999 per GSTIN including CA-prepared reconciliation, DRC-03 processing, and portal filing. Call +91 945 945 6700 for a quote.</p></div>
                    </div>
                </div>
            </div>


            <!-- Quick Answers -->
            <div class="highlight-box" style="margin-top:32px;">
                <p><strong>Quick Answers</strong></p>
                <p><strong>GSTR-9 kya hai?</strong> Saal bhar ke GSTR-1 aur GSTR-3B ka consolidated annual return. Rs 2 crore se zyada turnover wale sabhi regular taxpayers ke liye mandatory. 31 December tak file karna hota hai.</p>
                <p><strong>GSTR-9C kya hai?</strong> Audited accounts aur GSTR-9 ka reconciliation statement. Rs 5 crore se zyada turnover wale ke liye. Ab self-certified hai - CA certification mandatory nahi hai lekin CA se preparation karana recommended hai.</p>
                <p><strong>Late fee kya hai?</strong> Rs 200 per day (Rs 100 CGST + Rs 100 SGST). Maximum 0.25% of turnover. GSTR-9 file hone ke baad revise nahi ho sakta.</p>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 18: URGENCY CTA -->
<section class="content-section" style="background: var(--orange-lighter) !important; border-left: 4px solid var(--orange);">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">GSTR-9/9C Deadline Approaching - Start Preparation Now</h2>
            <div class="content-text">
                
                <p>The 31 December deadline for GSTR-9/9C falls at the busiest time of the financial calendar. Delhi businesses simultaneously managing TDS returns, advance tax payments, and year-end accounting often deprioritise GSTR-9 preparation. The non-revisable nature of GSTR-9 means rushed, unreconciled filings create permanent compliance gaps visible to both GST and income tax authorities. Late fee accumulates at Rs 200 per day with no grace period.</p>
                <p><strong>Start preparation by September - Contact Patron's Delhi office now - <a href="tel:+919459456700">Call +91 945 945 6700</a> or <a href="https://wa.me/919459456700?text=Hello%2C%20I%20just%20visited%20your%20GST%20Annual%20Returns%20in%20Delhi%20page.%20I%20would%20like%20to%20know%20more%20about%20it." target="_blank" rel="noopener">WhatsApp us</a>.</strong></p>

            </div>
        </div>
    </div>
</section>

<!-- CONCLUSION + CTA BLOCK (Dark) -->
<section class="content-section" style="background: var(--blue) !important;">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title" style="color:#FFFFFF !important;">File Your GST Annual Returns in Delhi Today</h2>
            <div class="content-text" style="text-align:left;">
                
                <p style="color:rgba(255,255,255,0.9);">GST annual return filing in Delhi through GSTR-9 and GSTR-9C is the most comprehensive year-end GST compliance obligation. GSTR-9 consolidates 12 months of outward supplies, inward supplies, ITC, and tax payments into one non-revisable document for each Delhi GSTIN. GSTR-9C reconciles this with audited financial statements for businesses above Rs 5 crore.</p>
                <p style="color:rgba(255,255,255,0.9);">Patron Accounting provides end-to-end GST annual return filing services in Delhi from our Rohini office - covering year-round monthly reconciliation, GSTR-1 vs GSTR-3B matching, ITC reconciliation, GSTR-9 preparation, GSTR-9C CA-preparation with self-certification support, DRC-03 payment processing, and GST-IT cross-verification. With 15+ years of practice, 10,000+ businesses served, and offices in Pune, Mumbai, Delhi, and Gurugram, Patron ensures accurate, reconciled annual returns.</p>
                <p style="color:rgba(255,255,255,0.7);font-size:13px;">Reviewed by CA & CS Team - Patron Accounting LLP</p>

            </div>
            <div style="display:flex;gap:14px;flex-wrap:wrap;margin-top:24px;">
                <a href="tel:+919459456700" style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:var(--orange);color:#fff;border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#128222; Call +91 945 945 6700</a>
                <a href="https://wa.me/919459456700?text=Hello%2C%20I%20just%20visited%20your%20GST%20Annual%20Returns%20in%20Delhi%20page.%20I%20would%20like%20to%20know%20more%20about%20it." target="_blank" style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:#25D366;color:#fff;border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;" rel="noopener">&#128172; WhatsApp Us</a>
                <a href="mailto:sales@patronaccounting.com?subject=Enquiry%20for%20GST%20Annual%20Returns%20in%20Delhi&body=Hello%2C%20I%20just%20visited%20your%20GST%20Annual%20Returns%20in%20Delhi%20page.%20I%20would%20like%20to%20know%20more%20about%20it.%0A%0AThank%20you." style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:transparent;color:#fff;border:2px solid rgba(255,255,255,0.3);border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#9993;&#65039; Email Us</a>
            </div>
            <p style="color:rgba(255,255,255,0.7);font-size:13px;margin-top:16px;">Book a Free Consultation - No Obligation.</p>
        </div>
    </div>
</section>

<!-- GSTAT STATE BENCH CITY PAGES (32 Pages) -->
<section class="content-section" style="padding:48px 32px;background:var(--gray-50);">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title" style="text-align:center;margin-bottom:12px;">GST Annual Returns: Available Across 4 Major Cities</h2>
            <p style="text-align:center;color:var(--text-muted);font-size:15px;margin-bottom:40px;">Professional GSTR-9 and GSTR-9C filing services in Pune, Mumbai, Delhi, and Gurugram.</p>
  
            <div class="pa-city-block" style="margin-bottom:40px;">
                <div class="pa-city-grid">
                    <a href="/gst-annual-returns/pune" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Pune</div><div class="pa-card-sub">Maharashtra</div></div></a>
                    <a href="/gst-annual-returns/mumbai" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Mumbai</div><div class="pa-card-sub">Maharashtra</div></div></a>
                    <div class="pa-city-card" style="opacity:0.6; pointer-events:none; border:2px solid var(--orange); position:relative;"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Delhi</div><div class="pa-card-sub">Delhi NCR</div></div><span style="position:absolute; top:6px; right:8px; font-size:10px; color:var(--orange); font-weight:700; text-transform:uppercase; letter-spacing:0.5px;">You're here</span></div>
                    <a href="/gst-annual-returns/gurugram" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Gurugram</div><div class="pa-card-sub">Haryana</div></div></a>
                </div>
            </div>
            <div class="pa-city-block">
                <div class="pa-block-title">Related Services in Delhi</div>
                <div class="pa-block-sub">End-to-end GST and compliance support for Delhi businesses</div>
                <div class="pa-cross-grid">
                    <a href="/gst-registration/delhi" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">GST Registration</div><div class="pa-card-sub">Delhi</div></div></a>
                    <a href="/gst-returns/delhi" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">GST Returns</div><div class="pa-card-sub">Delhi</div></div></a>
                    <a href="/private-limited-company-registration/delhi" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Private Limited Company Registration</div><div class="pa-card-sub">Delhi</div></div></a>
                    <a href="/income-tax-return/delhi" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Income Tax Return Filing</div><div class="pa-card-sub">Delhi</div></div></a>
                    <a href="/trademark-registration/delhi" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Trademark Registration</div><div class="pa-card-sub">Delhi</div></div></a>
                    <a href="/startup-registration/delhi" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Startup Registration</div><div class="pa-card-sub">Delhi</div></div></a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- CONTENT FRESHNESS FOOTER -->
<section class="content-section" style="padding:32px;">
    <div class="content-container">
        <div class="text-content" style="font-size:13px;color:var(--text-muted);">
            <p><strong>Content Created:</strong> 06 April 2026 &nbsp;|&nbsp; <strong>Last Updated:</strong> <span id="lastUpdatedFooter">06 April 2026</span> &nbsp;|&nbsp; <strong>Next Review:</strong> 06 October 2026 &nbsp;|&nbsp; <strong>Reviewed By:</strong> CA &amp; CS Team, Patron Accounting LLP</p>
            <p>This page is reviewed every 6 months to ensure all GSTR-9/9C information, turnover thresholds, late fee rates, and CBIC notifications are current. Content accuracy is verified against gst.gov.in and cbic.gov.in.</p>
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
