
@extends('layouts.service-app')

<!-- External Dependencies (loaded by master layout in production) -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Barlow:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,400&family=DM+Sans:opsz,wght@9..40,400;9..40,500;9..40,600;9..40,700&display=swap" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

@section('meta')
    <title>GST Audit in Pune - GSTR-9C, Reconciliation & ₹5Cr</title>
    <meta name="description" content="CA assisted GST audit and GSTR-9C reconciliation for Pune businesses. Turnover >Rs 5 crore, self-certified, ITC reconciliation, DRC-03, departmental audit defence. MIDC, Hinjewadi, Camp. Call +91 945 945 6700.">
    <link rel="canonical" href="/gst-audit/pune">
    <meta name="robots" content="index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1">
    <meta property="og:title" content="GST Audit in Pune - GSTR-9C, Reconciliation & ₹5Cr">
    <meta property="og:description" content="CA assisted GST audit and GSTR-9C reconciliation for Pune businesses. Turnover >Rs 5 crore, self-certified, ITC reconciliation, DRC-03, departmental audit defence. MIDC, Hinjewadi, Camp. Call +91 945 945 6700.">
    <meta property="og:url" content="/gst-audit/pune">
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="Patron Accounting">
    <meta property="og:image" content="https://www.patronaccounting.com/images/og-default-square.png">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="1200">
    <meta property="og:image:type" content="image/png">
    <meta property="og:image:secure_url" content="https://www.patronaccounting.com/images/og-default-square.png">
    <meta property="og:image:alt" content="Patron Accounting - partner you can rely on">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="GST Audit in Pune - GSTR-9C, Reconciliation & ₹5Cr">
    <meta name="twitter:description" content="CA assisted GST audit and GSTR-9C reconciliation for Pune businesses. Turnover >Rs 5 crore, self-certified, ITC reconciliation, DRC-03, departmental audit defence. MIDC, Hinjewadi, Camp. Call +91 945 945 6700.">
    <meta name="twitter:image" content="https://www.patronaccounting.com/images/og-default-square.png">
@endsection

@section('schema')
    <script type="application/ld+json">{
  "@context": "https://schema.org",
  "@graph": [
    {
      "@type": "Service",
      "name": "GST Audit in Pune - GSTR-9C, Reconciliation & ₹5Cr",
      "description": "CA assisted GST audit and GSTR-9C reconciliation for Pune businesses. Turnover >Rs 5 crore, self-certified, ITC reconciliation, DRC-03, departmental audit defence. MIDC, Hinjewadi, Camp. Call +91 945 945 6700.",
      "url": "https://www.patronaccounting.com/gst-audit/pune",
      "serviceType": "GST Audit in Pune - GSTR-9C, Reconciliation & ₹5Cr",
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
        "url": "https://www.patronaccounting.com/gst-audit/pune",
        "priceSpecification": {
          "@type": "PriceSpecification",
          "minPrice": "5",
          "maxPrice": "25000",
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
          "name": "GST Audit Services India - GSTR-9C, Reconciliation & Process",
          "item": "https://www.patronaccounting.com/gst-audit"
        },
        {
          "@type": "ListItem",
          "position": 3,
          "name": "GST Audit in Pune - GSTR-9C, Reconciliation & ₹5Cr",
          "item": "https://www.patronaccounting.com/gst-audit/pune"
        }
      ]
    },
    {
      "@type": "FAQPage",
      "mainEntity": [
        {
          "@type": "Question",
          "name": "Is GST audit by CA mandatory?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "No. Since FY 2020-21, mandatory CA/CMA GST audit was removed by Finance Act 2021. However, businesses with aggregate turnover exceeding Rs 5 crore must file a self-certified reconciliation statement GSTR-9C. While CA certification is not legally required, professional CA assistance is strongly recommended because the reconciliation is complex and errors trigger scrutiny and demand notices."
          }
        },
        {
          "@type": "Question",
          "name": "What is the due date for GSTR-9C?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "31 December following the end of the relevant financial year. GSTR-9C for FY 2025-26 is due by 31 December 2026. Filed along with GSTR-9 (annual return). Late filing attracts Rs 200/day (Rs 100 CGST + Rs 100 SGST), capped at 0.50% of turnover. Non-filing attracts general penalty up to Rs 25,000 under Section 125. Government may extend deadline via notification."
          }
        },
        {
          "@type": "Question",
          "name": "What is the turnover threshold for GSTR-9C?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Rs 5 crore aggregate turnover during the financial year, computed at PAN level (not GSTIN level). Includes taxable supplies, exempt supplies, exports, and inter-state supplies. If PAN-level turnover exceeds Rs 5 crore, every GSTIN under that PAN must file a separate GSTR-9C, even if a particular GSTIN's turnover is below Rs 5 crore."
          }
        },
        {
          "@type": "Question",
          "name": "What happens during a departmental GST audit (Section 65)?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Commissioner notifies with at least 15 working days notice. Covers specific period (typically one FY). Taxpayer provides access to records at business premises or officer's office. Must complete within 3 months (extendable 6 months). Discrepancies (short-paid tax, excess ITC, unreported supplies) lead to demand under Section 73 (non-fraud) or 74 (fraud). Professional representation significantly reduces adverse findings."
          }
        },
        {
          "@type": "Question",
          "name": "What is the difference between GSTR-9 and GSTR-9C?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "GSTR-9 is the annual return consolidating all monthly/quarterly data into annual summary (mandatory if turnover >Rs 2 crore). GSTR-9C is the reconciliation statement reconciling GSTR-9 data with audited financial statements (mandatory if turnover >Rs 5 crore). GSTR-9C identifies and explains discrepancies covering turnover, tax paid and ITC. Both due 31 December and filed together."
          }
        },
        {
          "@type": "Question",
          "name": "Can GSTR-9C reveal additional tax liability?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Yes. Reconciliation may reveal: turnover in books not in GST returns (underreported), excess ITC claimed not supported by books or 2B, tax rate differences, RCM liability not discharged, or credit notes not properly adjusted. Additional liability must be paid via DRC-03 on gst.gov.in. Part V of GSTR-9C captures unreconciled amounts. Proactive DRC-03 payment reduces penalty risk."
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
                        GST Audit Service in Pune: Reconcile, Certify, and Stay Compliant
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
                            <p class="mb-0 text-dark benefit-paragraph"><span>Who Needs It:</span> All GST-registered businesses in Pune with aggregate turnover exceeding Rs 5 crore must file GSTR-9C</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>What We Cover:</span> GSTR-9C preparation, GSTR-9 vs books reconciliation, ITC reconciliation (2B vs books), DRC-03, S.65/S.66 defence</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Due Date:</span> 31 December following the relevant financial year</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Late Fee:</span> Rs 200/day (Rs 100 CGST + Rs 100 SGST), capped at 0.50% of turnover | Penalty Rs 25,000 for non-filing</p>
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
                        <a href="https://wa.me/919459456700?text=Hello%2C%20I%20just%20visited%20your%20GST%20Audit%20in%20Pune%20page.%20I%20would%20like%20to%20know%20more%20about%20it." target="_blank" class="btn-sample text-decoration-none" rel="noopener">
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
                                            'service'  => 'GST Audit in Pune',
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
@include('partials.testimonials', [
    'heading'    => 'Real Stories from Real People',
    'lead'       => 'Hear how teams across industries use Patron to save time, cut costs, & stay in control.',
    'ctaTitle'   => 'Join 10,000+ Satisfied Businesses',
    'ctaText'    => 'Get expert GST audit and GSTR-9C for your Pune business today.',
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
            <a href="#overview-section" class="toc-btn active">Overview</a><a href="#what-section" class="toc-btn">Types of Audit</a><a href="#who-section" class="toc-btn">Who Needs It</a><a href="#services-section" class="toc-btn">Services</a><a href="#procedure-section" class="toc-btn">Process</a><a href="#documents-section" class="toc-btn">Documents</a><a href="#challenges-section" class="toc-btn">Common Issues</a><a href="#fees-section" class="toc-btn">Fees</a><a href="#timeline-section" class="toc-btn">Timeline</a><a href="#benefits-section" class="toc-btn">Why Patron</a><a href="#comparison-section" class="toc-btn">Self-Cert vs CA</a><a href="#faq-section" class="toc-btn">FAQs</a>
        </div>
        <button class="toc-arrow right" id="tocRight">&#10095;</button>
    </div>
</div>

<!-- SECTION 2: OVERVIEW / INTRO + TL;DR -->
<section class="content-section" id="overview-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">GST Audit Service in Pune - Overview</h2>
            <div class="content-text">
                <div class="highlight-box" style="margin-bottom:20px;">
                    <p><strong>&#128204; TL;DR - GST Audit in Pune Services at a Glance</strong></p>
                    <p>GST audit covers GSTR-9C reconciliation for businesses with turnover >Rs 5 crore, plus voluntary health checks and departmental audit defence. Since FY 2020-21, GSTR-9C is self-certified (CA certification no longer mandatory per Finance Act 2021). But professional CA assistance remains critical: GSTR-9C requires reconciliation of audited financials with GSTR-9 across 5 parts - turnover, tax paid, ITC claimed, additional liability, and unreconciled amounts. Discrepancies need DRC-03 payment. Due 31 December. Late fee Rs 200/day, capped at 0.50% of turnover.</p>
                </div>
                <p>Pune's diverse businesses create unique GST audit challenges. MIDC manufacturers (ITC on capital goods, job work). Hinjewadi IT companies (export/LUT, refund reconciliation). Camp wholesalers (multi-GSTIN, B2C). Koregaon Park professionals (RCM). Real estate developers (ITC reversal). Related: <a href="#">GST Audit across India</a> and <a href="/gst-returns/pune">GST Returns in Pune</a>.</p>
                <p>Filed on <a href="https://www.gst.gov.in" target="_blank" rel="noopener">gst.gov.in</a>. GST Commissionerate Pune (CGST); Maharashtra GST (SGST). CBIC at <a href="https://www.cbic.gov.in" target="_blank" rel="noopener">cbic.gov.in</a>. Related: <a href="/gst-notice/pune">GST Notice in Pune</a> and <a href="/accounting-services">Accounting Services</a>.</p>
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
                <h2 class="section-title">Types of GST Audit</h2>
                <div class="content-text what-is-definition">
                    
                    <p><strong>GSTR-9C (Self-Certified):</strong> Mandatory annual filing for turnover >Rs 5 crore. Reconciles audited financials with GSTR-9. 5-part reconciliation: turnover, tax, ITC, additional liability, unreconciled. Due 31 December.</p><p><strong>Departmental Audit (S.65):</strong> Commissioner-initiated. Records examined. Complete within 3 months. Findings lead to S.73/74 demand. <strong>Special Audit (S.66):</strong> During investigation; external CA/CMA appointed; govt pays. <strong>Voluntary Health Check:</strong> For businesses approaching Rs 5 crore or wanting ITC/return cleanup. Related: <a href="/itr-for-business/pune">ITR for Business in Pune</a> and <a href="/private-limited-company-compliance/pune">Pvt Ltd Compliance in Pune</a>.</p>

                </div>
                <div class="highlight-box" style="margin-top:20px;">
                    <p><strong>Key Terms for GST Audit in Pune:</strong></p>
                    <ul><li><strong>GSTR-9C:</strong> Reconciliation statement for >Rs 5 crore. Self-certified since FY 2020-21. Due 31 December. Per-GSTIN filing.</li><li><strong>S.65 Departmental:</strong> Commissioner audit. 15 working days notice. 3 months (+6). Discrepancies = S.73/74 demand.</li><li><strong>S.66 Special:</strong> External CA/CMA during investigation. Govt cost. Report 90 days (+90).</li><li><strong>DRC-03:</strong> Voluntary payment for additional liability found during reconciliation.</li><li><strong>Aggregate Turnover:</strong> PAN-level. Taxable + exempt + export + inter-state. Rs 5 crore = GSTR-9C trigger for all GSTINs.</li><li><strong>Rule 42/43:</strong> Proportional ITC reversal when exempt supplies exist.</li></ul>

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
                            <!-- 9C tag -->
                            <rect x="30" y="120" width="42" height="18" rx="4" fill="#FFF3E0" stroke="#F5A623" stroke-width="1"/>
                            <text x="51" y="132.5" font-size="8" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial, sans-serif">9C</text>
                            <!-- Label -->
                            <text x="100" y="170" font-size="10" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial, sans-serif">GST Audit in Pune</text>
                        </svg>
                    </div>
                    <div class="illustration-badge">
                        <span>GSTR-9C + DRC-03</span>
                        <strong>Reconcile | Certify | File by 31 Dec</strong>
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
            <h2 class="section-title">Who Needs GST Audit Service in Pune?</h2>
            <div class="content-text">
                
                <p><strong>MIDC Manufacturers (Bhosari, Chakan):</strong> Turnover >Rs 5 Cr. Complex ITC on capital goods, job work (Rule 45), inter-state. Production vs invoice-basis reconciliation. Rule 42/43 reversals. Related: <a href="/tds-return-filing/pune">TDS Return Filing in Pune</a>.</p><p><strong>IT Companies (Hinjewadi, Kharadi):</strong> Export under LUT (zero-rated). Refund reconciliation. Forex differences. Multi-state GSTINs. Related: <a href="/itr-for-companies/pune">ITR for Companies in Pune</a>.</p><p><strong>Wholesalers + Real Estate (Camp, Baner, Wakad):</strong> High-volume B2B. Multiple GSTINs. Credit/debit notes. E-way bill. ITC reversal on unsold inventory. Related: <a href="#">Annual ROC Filing in Pune</a>.</p><p><strong>Professionals + Approaching Threshold:</strong> RCM compliance. SAC invoicing. Businesses at Rs 3-5 Cr should do voluntary health check before GSTR-9C becomes mandatory. Related: <a href="/gst-returns-for-restaurants-food-businesses/pune">GST Returns for Restaurants in Pune</a>.</p>

            </div>
            </div>
        </div>
    </div>
</section>

<!-- SECTION 5: OUR SERVICES -->
<section class="content-section" id="services-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">GST Audit Services in Pune</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Service</th><th>What We Do</th></tr></thead>
                    <tbody>
                        <tr><td>GSTR-9C Preparation + Filing</td><td>End-to-end: audited financials, reconcile turnover (books vs GSTR-9), reconcile tax paid, reconcile ITC (books vs 2B vs returns), compute additional liability, DRC-03 payment, self-certify, file by 31 December. Per-GSTIN for multi-GSTIN businesses.</td></tr><tr><td>Turnover + ITC Reconciliation</td><td>Turnover: match P&L with GSTR-9 Table 4/5. Explain: non-GST income, unbilled revenue, credit notes, timing. ITC: match books with 2B and GSTR-9 Tables 6-8. Identify reversals, supplier defaults, cross-year adjustments. Automated 2B-vs-books matching tools. Related: <a href="/gst-returns/pune">GST Returns in Pune</a>.</td></tr><tr><td>Departmental Audit Representation (S.65)</td><td>Provide records systematically, prepare reconciliation workpapers, respond to observations, negotiate findings. Post-audit demand notice response. Related: <a href="/gst-notice/pune">GST Notice in Pune</a>.</td></tr><tr><td>Special Audit Coordination (S.66)</td><td>Coordinate with appointed CA/CMA, provide records and explanations, represent taxpayer interests, response to special audit report.</td></tr><tr><td>Voluntary GST Health Check</td><td>For below Rs 5 Cr or interim review: GSTR-1 vs 3B consistency, ITC vs 2B, RCM compliance, e-invoicing, HSN reporting, return filing accuracy. Pre-GSTR-9C readiness.</td></tr>

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
            <h2 class="section-title">GSTR-9C Filing Process in Pune</h2>
            <p class="section-subtitle" style="text-align:left;max-width:100%;">Our Pune CA team manages the complete GSTR-9C - from audited financials through reconciliation to certified filing.</p>
        </header>
        <div class="steps-container">
            <div class="step-card"><div class="step-content"><span class="step-badge">Step 1</span><h3 class="step-title">Obtain Audited Financial Statements</h3><p class="step-description">GSTR-9C starts with audited P&L, balance sheet and trial balance. Ensure statutory audit is complete and financials finalised. GSTR-9C Part II (turnover) and Part IV (ITC) must match audited figures. For multi-GSTIN businesses: PAN-level financials allocated to each GSTIN. Start in October after statutory audit completion.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Audited financials finalised</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>GSTIN-level allocation prepared</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="20" y="8" width="80" height="60" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><text x="60" y="22" font-size="5" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">Audited</text><text x="60" y="38" font-size="6" fill="#E8712C" font-weight="600" text-anchor="middle" font-family="Arial">Financials</text><text x="60" y="52" font-size="5" fill="#14365F" font-weight="600" text-anchor="middle" font-family="Arial">P&amp;L + BS</text><text x="60" y="78" font-size="6" fill="#14365F" font-weight="600" text-anchor="middle" font-family="Arial">Step 1</text></svg></div><span class="illustration-label">Financials Ready</span><span class="step-number-large">01</span></div></div></div>
<div class="step-card"><div class="step-content"><span class="step-badge">Step 2</span><h3 class="step-title">Prepare GSTR-9 Annual Return</h3><p class="step-description">GSTR-9C is filed along with GSTR-9. Ensure GSTR-9 is complete: Table 4 (outward supplies), Tables 6-8 (ITC), Table 9 (tax paid), Tables 10-11 (amendments), Table 14 (differential tax). GSTR-9 must be filed before or simultaneously with GSTR-9C. Patron prepares both together for consistency.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>GSTR-9 complete and verified</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>All tables reconciled</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="20" y="8" width="80" height="60" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><text x="60" y="22" font-size="7" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">GSTR-9</text><text x="60" y="42" font-size="5" fill="#E8712C" font-weight="600" text-anchor="middle" font-family="Arial">Annual Return</text><text x="60" y="78" font-size="6" fill="#14365F" font-weight="600" text-anchor="middle" font-family="Arial">Prepare</text></svg></div><span class="illustration-label">GSTR-9 Ready</span><span class="step-number-large">02</span></div></div></div>
<div class="step-card"><div class="step-content"><span class="step-badge">Step 3</span><h3 class="step-title">Reconcile Turnover (Part II)</h3><p class="step-description">Compare gross turnover in audited P&L with GSTR-9 Table 4/5. Identify and document every difference: non-GST income (interest, dividends, rent from residential), unbilled revenue, advance billing, credit/debit notes, export under LUT (zero-rated), exempt supplies, timing differences between accrual-basis books and invoice-basis returns. Must explain 100% of variance.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Turnover variance 100% explained</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>All legitimate differences documented</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="15" y="5" width="90" height="70" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><text x="60" y="20" font-size="5" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">Books vs</text><text x="60" y="36" font-size="6" fill="#E8712C" font-weight="600" text-anchor="middle" font-family="Arial">GSTR-9</text><text x="60" y="50" font-size="5" fill="#14365F" font-weight="600" text-anchor="middle" font-family="Arial">Part II</text><text x="60" y="85" font-size="6" fill="#14365F" font-weight="600" text-anchor="middle" font-family="Arial">Turnover Recon</text></svg></div><span class="illustration-label">Turnover Matched</span><span class="step-number-large">03</span></div></div></div>
<div class="step-card"><div class="step-content"><span class="step-badge">Step 4</span><h3 class="step-title">Reconcile ITC (Part IV)</h3><p class="step-description">The most complex part. Compare total ITC in books with ITC in GSTR-2B and GSTR-9 Tables 6-8. Identify: ITC available but not claimed, ITC claimed but not in 2B (supplier default), reversals under Rule 37/37A/42/43, ITC on capital goods (phased), ITC on job work, cross-year adjustments. Patron uses automated 2B-vs-books matching tools for MIDC manufacturers with hundreds of suppliers.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>ITC fully reconciled</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Reversals computed and documented</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="15" y="5" width="90" height="70" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><text x="60" y="20" font-size="5" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">Books vs 2B</text><text x="60" y="36" font-size="5" fill="#E8712C" font-weight="600" text-anchor="middle" font-family="Arial">vs Returns</text><text x="60" y="50" font-size="5" fill="#14365F" font-weight="600" text-anchor="middle" font-family="Arial">Part IV</text><text x="60" y="85" font-size="6" fill="#14365F" font-weight="600" text-anchor="middle" font-family="Arial">ITC Recon</text></svg></div><span class="illustration-label">ITC Matched</span><span class="step-number-large">04</span></div></div></div>
<div class="step-card"><div class="step-content"><span class="step-badge">Step 5</span><h3 class="step-title">Compute Additional Liability and File DRC-03</h3><p class="step-description">If reconciliation reveals additional tax (underreported turnover, excess ITC, rate differences), compute additional CGST/SGST/IGST and pay via DRC-03 on gst.gov.in before filing GSTR-9C. Part V of GSTR-9C captures these. Proactive DRC-03 payment before departmental notice reduces penalty risk.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Additional liability computed</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>DRC-03 paid before filing</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="20" y="8" width="80" height="60" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><text x="60" y="22" font-size="6" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">DRC-03</text><text x="60" y="38" font-size="5" fill="#E8712C" font-weight="600" text-anchor="middle" font-family="Arial">Additional Tax</text><text x="60" y="52" font-size="5" fill="#14365F" font-weight="600" text-anchor="middle" font-family="Arial">Part V</text><text x="60" y="78" font-size="6" fill="#14365F" font-weight="600" text-anchor="middle" font-family="Arial">Pay Liability</text></svg></div><span class="illustration-label">Liability Cleared</span><span class="step-number-large">05</span></div></div></div>
<div class="step-card"><div class="step-content"><span class="step-badge">Step 6</span><h3 class="step-title">Self-Certify and File on GST Portal</h3><p class="step-description">Upload completed GSTR-9C on gst.gov.in with audited financial statements (PDF). Self-certify the reconciliation. File before 31 December. Save acknowledgement and ARN. For multi-GSTIN: file separate GSTR-9C for each GSTIN. Patron files and tracks for all Pune clients.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>GSTR-9C self-certified and filed</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>ARN saved for all GSTINs</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="25" y="10" width="70" height="50" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><circle cx="60" cy="30" r="12" fill="#E8F5E9" stroke="#25D366" stroke-width="2"/><path d="M55 30l4 4 8-8" stroke="#25D366" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"/><text x="60" y="78" font-size="6" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">Filed by 31 Dec</text></svg></div><span class="illustration-label">Filed</span><span class="step-number-large">06</span></div></div></div>


        </div>
    </div>
</section>

<!-- SECTION 8: DOCUMENTS REQUIRED -->
<section class="content-section" id="documents-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Documents Required for GST Audit in Pune</h2>
            <div class="content-text">
                
                <ul><li><strong>Audited Financial Statements:</strong> P&L, balance sheet, notes and auditor report for relevant FY.</li><li><strong>Trial Balance:</strong> GSTIN-wise and HSN-wise for multi-GSTIN businesses.</li><li><strong>GSTR-1 / GSTR-3B Annual Summaries:</strong> Monthly data for full year from portal.</li><li><strong>GSTR-2B Summaries:</strong> Monthly April to March for ITC reconciliation.</li><li><strong>Sales + Purchase Registers:</strong> Taxable, exempt, nil-rated, zero-rated, exports. HSN-wise.</li><li><strong>ITC Ledger:</strong> Books vs returns with reversal details (Rule 37/37A/42/43).</li><li><strong>Credit/Debit Notes:</strong> With cross-year adjustments.</li><li><strong>DRC-03 Challans:</strong> Voluntary payments during the year.</li><li><strong>E-Invoice Register:</strong> For e-invoicing applicable businesses.</li></ul><div class="highlight-box" style="margin-top:16px;"><p><strong>Pune-specific tip:</strong> MIDC manufacturers: maintain separate job work register (Rule 45) and capital goods ITC schedule. Hinjewadi IT companies exporting under LUT: maintain refund reconciliation register (LUT supplies vs refund claimed vs received). Camp multi-GSTIN traders: prepare GSTIN-level trial balance allocation before starting GSTR-9C.</p></div>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 9: CHALLENGES -->
<section class="content-section" id="challenges-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Common GSTR-9C Issues in Pune</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Challenge</th><th>Impact</th><th>How Patron Accounting Solves It</th></tr></thead>
                    <tbody>
                        <tr><td>GSTR-1 vs GSTR-3B Turnover Mismatch</td><td>Credit notes not in 3B, advances in 3B not in 1, amendments, table mapping errors</td><td>Patron prepares month-by-month GSTR-1 vs 3B comparison identifying and explaining every variance</td></tr><tr><td>ITC in Books vs GSTR-2B</td><td>Supplier filed late, wrong GSTIN, no GSTR-1, Rule 37A reversal. MIDC manufacturers with 200+ suppliers</td><td>Patron uses automated 2B-vs-books matching tools; flags supplier-level mismatches for resolution</td></tr><tr><td>Export Under LUT Zero-Rated Reconciliation</td><td>Hinjewadi IT: forex differences between books (RBI rate) and GST returns (invoice date rate)</td><td>Patron prepares forex conversion variance analysis and reconciles with refund applications</td></tr><tr><td>Multi-GSTIN Allocation</td><td>Camp wholesalers with 3+ GSTINs: PAN-level financials must be allocated per GSTIN</td><td>Patron prepares GSTIN-level trial balance allocation and files separate GSTR-9C for each</td></tr>

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
            <h2 class="section-title">GST Audit Fees in Pune</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Fee Component</th><th>Amount</th></tr></thead>
                    <tbody>
                        <tr><td>GSTR-9C (Single GSTIN, Rs 5-10 Cr)</td><td>Patron Rs 15,000-30,000</td></tr><tr><td>GSTR-9C (Single GSTIN, Rs 10-50 Cr)</td><td>Patron Rs 25,000-50,000</td></tr><tr><td>GSTR-9C (Single GSTIN, > Rs 50 Cr)</td><td>Patron Rs 50,000-1,50,000</td></tr><tr><td>Multi-GSTIN (per additional GSTIN)</td><td>Patron Rs 10,000-25,000</td></tr><tr><td>GSTR-9 + 9C Combined Package</td><td>Patron Rs 20,000-60,000</td></tr><tr><td>Voluntary GST Health Check</td><td>Patron Rs 8,000-20,000</td></tr><tr><td>Departmental Audit Representation (S.65)</td><td>Patron Rs 25,000-1,00,000</td></tr><tr><td>Special Audit Coordination (S.66)</td><td>Patron Rs 50,000-2,00,000</td></tr>

                    </tbody>
                </table>
                </div>
                <p style="margin-top:16px;font-size:13px;color:var(--text-muted);font-style:italic;">All fees and charges listed are indicative only and do not constitute a binding offer. Final amounts may vary depending on the volume of work and the complexity involved.</p>
                <p style="margin-top:16px;">Professional service charges for drafting, filing, and representation are separate from the statutory fees. The exact fee depends on the complexity of the case, disputed amount, and number of hearings required. Contact us for a detailed quote.</p>
                <p style="margin-top:16px;"><strong>Get a free GST Audit in Pune consultation - <a href="tel:+919459456700">Call +91 945 945 6700</a> or <a href="https://wa.me/919459456700?text=Hello%2C%20I%20just%20visited%20your%20GST%20Audit%20in%20Pune%20page.%20I%20would%20like%20to%20know%20more%20about%20it." target="_blank" rel="noopener">WhatsApp us</a>. No-obligation assessment.</strong></p>
            </div>
        </div>
    </div>
</section>

<!-- SECTION 11: TIMELINE -->
<section class="content-section" id="timeline-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">GST Audit Timeline</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Stage</th><th>Estimated Timeline</th></tr></thead>
                    <tbody>
                        <tr><td>Statutory audit completion</td><td>By September-October</td></tr><tr><td>GSTR-9 preparation</td><td>October-November</td></tr><tr><td>GSTR-9C reconciliation</td><td>November-December</td></tr><tr><td>DRC-03 payment (if additional liability)</td><td>Before GSTR-9C filing</td></tr><tr><td>GSTR-9C self-certification and filing</td><td>By 31 December</td></tr><tr><td>Departmental audit (if notified)</td><td>As per notice; typically 3-6 months</td></tr>

                    </tbody>
                </table>
                </div>
                <div class="highlight-box" style="margin-top:16px;">
                    
                    <p><strong>Best practice:</strong> Start GSTR-9C in October immediately after statutory audit. Waiting until December risks missing the 31 December deadline. Pune businesses with complex reconciliations (MIDC, multi-GSTIN) should start by September. Late fee: Rs 200/day capped at 0.50% of turnover. A Rs 10 Cr business faces max Rs 5,00,000 late fee. Patron manages from RTC Silver, Wagholi.</p>

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
            <h2 class="section-title">Why Choose Patron for GST Audit in Pune?</h2>
        </div>
        <div class="features-grid"><article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><h3 class="feature-title">Pune Industry Expertise</h3><p class="feature-text">MIDC manufacturers (ITC, job work, inter-state), Hinjewadi IT (export/LUT, refund), Camp wholesalers (multi-GSTIN, high-volume B2B). Industry-tailored reconciliation workpapers.</p></article><article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M13 2L3 14h9l-1 8 10-12h-9l1-8z"/></svg></div><h3 class="feature-title">Automated Reconciliation Tools</h3><p class="feature-text">Automated 2B-vs-books matching, GSTR-1 vs 3B comparison, HSN-level variance analysis. Catches mismatches early. Clean filing with zero surprises.</p></article><article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><h3 class="feature-title">GSTR-9 + 9C Combined</h3><p class="feature-text">Prepare both together ensuring consistency between annual return and reconciliation. Issues identified and corrected during GSTR-9 itself.</p></article><article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M14 2H6a2 2 0 00-2 2v16a2 2 0 002 2h12a2 2 0 002-2V8z"/><path d="M14 2v6h6M16 13H8M16 17H8"/></svg></div><h3 class="feature-title">Departmental Audit Experience</h3><p class="feature-text">Represented Pune businesses in S.65 departmental audits by CGST/SGST Commissionerate. Know the process, focus areas and how to present records systematically.</p></article></div>
    </div>
</section>

<!-- SECTION 12A: SOCIAL PROOF -->
<section class="content-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Trusted by 10,000+ Businesses Across India</h2>
            <div class="content-text">
                
                <p><strong>10,000+ Businesses | 4.9 Google Rating | 50,000+ Docs Filed | 15+ Years</strong></p><blockquote style="border-left:3px solid var(--orange);padding-left:16px;margin:16px 0;font-style:italic;color:var(--text-secondary);">"Our GST filing is always on time since we moved to Patron. The CA team knows their stuff cold." - CFO, Manufacturing, Maharashtra</blockquote><p>With offices in Pune, Mumbai, Delhi and Gurugram, Patron serves businesses across India.</p>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 13: SELF-FILING vs PROFESSIONAL COMPARISON -->
<section class="content-section" id="comparison-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">GSTR-9C Self-Certification vs Voluntary CA Audit</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Factor</th><th>Self-Certification (Current)</th><th>Voluntary CA Audit (Recommended)</th></tr></thead>
                    <tbody>
                        <tr><td>Mandatory</td><td>Yes (turnover > Rs 5 crore)</td><td>No (optional since FY 2020-21)</td></tr><tr><td>Who Certifies</td><td>Taxpayer (authorised signatory)</td><td>Chartered Accountant</td></tr><tr><td>Liability</td><td>On taxpayer directly</td><td>Shared with auditor (professional liability)</td></tr><tr><td>Rigour</td><td>Depends on internal capability</td><td>Independent professional examination; higher assurance</td></tr><tr><td>Cost</td><td>Internal effort only</td><td>Professional fees (offset by reduced risk)</td></tr><tr><td>Recommended For</td><td>Strong internal finance teams</td><td>No dedicated GST team; complex operations; multi-GSTIN; export</td></tr><tr><td>Typical Pune Case</td><td>Large IT company with internal tax team</td><td>MIDC manufacturer without internal GST expertise</td></tr>

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
                
                <p>For Pune businesses needing related compliance:</p><ul><li><a href="#">GST Audit (India)</a></li><li><a href="/gst-returns/pune">GST Returns in Pune</a></li><li><a href="/gst-notice/pune">GST Notice in Pune</a></li><li><a href="/itr-for-companies/pune">ITR for Companies in Pune</a></li><li><a href="/tds-return-filing/pune">TDS Return Filing in Pune</a></li><li><a href="/accounting-services">Accounting Services</a></li></ul>

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
                
                <p><strong>Section 44 CGST Act:</strong> Annual return GSTR-9 by 31 December. Turnover >Rs 5 crore: self-certified GSTR-9C with audited financials.</p><p><strong>Section 35(5) Omitted:</strong> Finance Act 2021 removed mandatory CA/CMA audit. Self-certification replaced it.</p><p><strong>Rule 80(3):</strong> GSTR-9C for aggregate turnover >Rs 5 crore. Self-certified. Per-GSTIN filing.</p><p><strong>GSTR-9C Structure:</strong> Part I (basic), Part II (turnover recon), Part III (tax paid recon), Part IV (ITC recon), Part V (additional liability/DRC-03).</p><p><strong>Section 65:</strong> Departmental audit. 15 working days notice. 3 months (+6). Discrepancies = S.73/74.</p><p><strong>Section 66:</strong> Special audit by CA/CMA. Commissioner orders during investigation. Govt cost. 90 days (+90).</p><p><strong>Aggregate Turnover:</strong> PAN-level. If >Rs 5 crore, every GSTIN under PAN files GSTR-9C.</p><p><strong>Late Fee:</strong> Rs 200/day, capped 0.50% of turnover. Penalty Rs 25,000 (S.125). <a href="https://www.gst.gov.in" target="_blank" rel="noopener">gst.gov.in</a>. <a href="https://www.cbic.gov.in" target="_blank" rel="noopener">cbic.gov.in</a>.</p>

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
                    <h2 class="faq-expanded__title">FAQs - GST Audit Service in Pune</h2>
                    <p class="faq-expanded__lead">Find answers to the most common questions about GST audit and GSTR-9C in Pune.</p>
                    @include('partials.bigin-form', [
                        'variant'  => 'compact',
                        'service'  => 'GST Audit in Pune',
                        'city'     => 'Pune',
                    ])
                </aside>
                <div class="faq-expanded__list">
                    <div class="faq-expanded__item" id="faq-1">
                        <h3 class="faq-expanded__q">Is GST audit by CA mandatory?</h3>
                        <div class="faq-expanded__a"><p>No. Since FY 2020-21, mandatory CA/CMA GST audit was removed by Finance Act 2021. However, businesses with aggregate turnover exceeding Rs 5 crore must file a self-certified reconciliation statement GSTR-9C. While CA certification is not legally required, professional CA assistance is strongly recommended because the reconciliation is complex and errors trigger scrutiny and demand notices.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-2">
                        <h3 class="faq-expanded__q">What is the due date for GSTR-9C?</h3>
                        <div class="faq-expanded__a"><p>31 December following the end of the relevant financial year. GSTR-9C for FY 2025-26 is due by 31 December 2026. Filed along with GSTR-9 (annual return). Late filing attracts Rs 200/day (Rs 100 CGST + Rs 100 SGST), capped at 0.50% of turnover. Non-filing attracts general penalty up to Rs 25,000 under Section 125. Government may extend deadline via notification.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-3">
                        <h3 class="faq-expanded__q">What is the turnover threshold for GSTR-9C?</h3>
                        <div class="faq-expanded__a"><p>Rs 5 crore aggregate turnover during the financial year, computed at PAN level (not GSTIN level). Includes taxable supplies, exempt supplies, exports, and inter-state supplies. If PAN-level turnover exceeds Rs 5 crore, every GSTIN under that PAN must file a separate GSTR-9C, even if a particular GSTIN's turnover is below Rs 5 crore.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-4">
                        <h3 class="faq-expanded__q">What happens during a departmental GST audit (Section 65)?</h3>
                        <div class="faq-expanded__a"><p>Commissioner notifies with at least 15 working days notice. Covers specific period (typically one FY). Taxpayer provides access to records at business premises or officer's office. Must complete within 3 months (extendable 6 months). Discrepancies (short-paid tax, excess ITC, unreported supplies) lead to demand under Section 73 (non-fraud) or 74 (fraud). Professional representation significantly reduces adverse findings.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-5">
                        <h3 class="faq-expanded__q">What is the difference between GSTR-9 and GSTR-9C?</h3>
                        <div class="faq-expanded__a"><p>GSTR-9 is the annual return consolidating all monthly/quarterly data into annual summary (mandatory if turnover >Rs 2 crore). GSTR-9C is the reconciliation statement reconciling GSTR-9 data with audited financial statements (mandatory if turnover >Rs 5 crore). GSTR-9C identifies and explains discrepancies covering turnover, tax paid and ITC. Both due 31 December and filed together.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-6">
                        <h3 class="faq-expanded__q">Can GSTR-9C reveal additional tax liability?</h3>
                        <div class="faq-expanded__a"><p>Yes. Reconciliation may reveal: turnover in books not in GST returns (underreported), excess ITC claimed not supported by books or 2B, tax rate differences, RCM liability not discharged, or credit notes not properly adjusted. Additional liability must be paid via DRC-03 on gst.gov.in. Part V of GSTR-9C captures unreconciled amounts. Proactive DRC-03 payment reduces penalty risk.</p></div>
                    </div>
                </div>
            </div>


            <!-- Quick Answers -->
            <div class="highlight-box" style="margin-top:32px;">
                <p><strong>Quick Answers</strong></p>
                <p><strong>GST audit kya hota hai?</strong> GSTR-9C ek reconciliation statement hai jo Rs 5 crore se zyada turnover wale ko file karna hai - audited accounts ko GST returns se match karna. Ab CA mandatory nahi (Finance Act 2021) - self-certify. Lekin CA ki madad zaroori hai complexity ke liye.</p><p><strong>Due date?</strong> 31 December. Late fee Rs 200/day, max 0.50% of turnover.</p><p><strong>Rs 5 crore se kam?</strong> GSTR-9C nahi chahiye. Lekin voluntary health check karwana accha practice hai.</p>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 18: URGENCY CTA -->
<section class="content-section" style="background: var(--orange-lighter) !important; border-left: 4px solid var(--orange);">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">GSTR-9C Due 31 December - Start Reconciliation Now</h2>
            <div class="content-text">
                
                <p>The 31 December deadline is firm. MIDC manufacturers with 200+ suppliers, Hinjewadi IT companies with export/LUT and Camp multi-GSTIN traders need <strong>30-60 days of focused work</strong>. Starting in November means rushing - rushed GSTR-9C filings contain errors triggering scrutiny. ITC errors can result in <strong>demands of lakhs</strong>. Late fee for Rs 10 Cr turnover: max <strong>Rs 5,00,000</strong>. Professional fee (Rs 15,000-60,000) is negligible vs risk.</p><p><strong>Start your GSTR-9C now - <a href="tel:+919459456700">Call +91 945 945 6700</a> or <a href="https://wa.me/919459456700?text=Hello%2C%20I%20just%20visited%20your%20GST%20Audit%20in%20Pune%20page.%20I%20would%20like%20to%20know%20more%20about%20it." target="_blank" rel="noopener">WhatsApp us</a>. Free consultation.</strong></p>

            </div>
        </div>
    </div>
</section>

<!-- CONCLUSION + CTA BLOCK (Dark) -->
<section class="content-section" style="background: var(--blue) !important;">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title" style="color:#FFFFFF !important;">GST Audit in Pune - Reconciled, Certified, Compliant</h2>
            <div class="content-text" style="text-align:left;">
                
                <p style="color:rgba(255,255,255,0.85);font-size:16px;line-height:1.7;">GST audit and GSTR-9C is a critical annual compliance for Pune businesses with turnover exceeding Rs 5 crore - from MIDC manufacturers reconciling complex ITC to Hinjewadi IT companies matching export/LUT transactions to Camp wholesalers allocating across multiple GSTINs.</p><p style="color:rgba(255,255,255,0.85);font-size:16px;line-height:1.7;">Patron Accounting's Pune office at RTC Silver, Wagholi provides dedicated GST audit - GSTR-9 and GSTR-9C preparation, turnover and ITC reconciliation, DRC-03 payment, departmental audit representation (S.65) and special audit coordination (S.66).</p><p style="color:rgba(255,255,255,0.85);font-size:16px;line-height:1.7;">With 15+ years experience, 10,000+ businesses served and a 4.9 Google rating, Patron serves businesses across Pune, Mumbai, Delhi and Gurugram.</p>

            </div>
            <div style="display:flex;gap:14px;flex-wrap:wrap;margin-top:24px;">
                <a href="tel:+919459456700" style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:var(--orange);color:#fff;border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#128222; Call +91 945 945 6700</a>
                <a href="https://wa.me/919459456700?text=Hello%2C%20I%20just%20visited%20your%20GST%20Audit%20in%20Pune%20page.%20I%20would%20like%20to%20know%20more%20about%20it." target="_blank" style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:#25D366;color:#fff;border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;" rel="noopener">&#128172; WhatsApp Us</a>
                <a href="mailto:sales@patronaccounting.com?subject=Enquiry%20for%20GST%20Audit%20in%20Pune&body=Hello%2C%20I%20just%20visited%20your%20GST%20Audit%20in%20Pune%20page.%20I%20would%20like%20to%20know%20more%20about%20it.%0A%0AThank%20you." style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:transparent;color:#fff;border:2px solid rgba(255,255,255,0.3);border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#9993;&#65039; Email Us</a>
            </div>
            <p style="color:rgba(255,255,255,0.7);font-size:13px;margin-top:16px;">Book a Free Consultation - No Obligation.</p>
        </div>
    </div>
</section>

<!-- GSTAT STATE BENCH CITY PAGES (32 Pages) -->
<section class="content-section" style="padding:48px 32px;background:var(--gray-50);">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title" style="text-align:center;margin-bottom:12px;">GST Audit Service Across India</h2>
            <p style="text-align:center;color:var(--text-muted);font-size:15px;margin-bottom:40px;">Expert GST audit and GSTR-9C services in all major cities</p>
      
            <div class="pa-city-block" style="margin-bottom:40px;"><div class="pa-city-grid"><div class="pa-city-card" style="opacity:0.6;pointer-events:none;border:2px solid var(--orange);position:relative;"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Pune</div><div class="pa-card-sub">Maharashtra</div></div><span style="position:absolute;top:6px;right:8px;font-size:10px;color:var(--orange);font-weight:700;text-transform:uppercase;letter-spacing:0.5px;">You're here</span></div><a href="#" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Mumbai</div><div class="pa-card-sub">Maharashtra</div></div></a><a href="#" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Delhi</div><div class="pa-card-sub">Delhi NCR</div></div></a><a href="/gst-audit/gurugram" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Gurugram</div><div class="pa-card-sub">Haryana</div></div></a><a href="#" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Bangalore</div><div class="pa-card-sub">Karnataka</div></div></a><a href="#" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Hyderabad</div><div class="pa-card-sub">Telangana</div></div></a><a href="#" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Chennai</div><div class="pa-card-sub">Tamil Nadu</div></div></a><a href="#" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Kolkata</div><div class="pa-card-sub">West Bengal</div></div></a></div></div><div class="pa-city-block"><div class="pa-block-title">Related Services in Pune</div><div class="pa-block-sub">End-to-end GST and tax compliance in Pune</div><div class="pa-cross-grid"><a href="/gst-returns/pune" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">GST Returns</div><div class="pa-card-sub">Pune</div></div></a><a href="/gst-notice/pune" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">GST Notice</div><div class="pa-card-sub">Pune</div></div></a><a href="/itr-for-companies/pune" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">ITR for Companies</div><div class="pa-card-sub">Pune</div></div></a><a href="/tds-return-filing/pune" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">TDS Return Filing</div><div class="pa-card-sub">Pune</div></div></a><a href="#" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Annual ROC Filing</div><div class="pa-card-sub">Pune</div></div></a><a href="/startup-registration/pune" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Startup Registration</div><div class="pa-card-sub">Pune</div></div></a></div></div>
        </div>
    </div>
</section>

<!-- CONTENT FRESHNESS FOOTER -->
<section class="content-section" style="padding:32px;">
    <div class="content-container">
        <div class="text-content" style="font-size:13px;color:var(--text-muted);">
            <p><strong>Content Created:</strong> 23 March 2026 &nbsp;|&nbsp; <strong>Last Updated:</strong> <span id="lastUpdatedFooter">23 March 2026</span> &nbsp;|&nbsp; <strong>Next Review:</strong> 23 September 2026 &nbsp;|&nbsp; <strong>Reviewed By:</strong> CA &amp; CS Team, Patron Accounting LLP</p>
            <p>This page is reviewed semi-annually to reflect GSTR-9C format changes, Finance Act amendments, CBIC notification updates, late fee changes and new table additions. Last review: March 2026. Next review: September 2026.</p>
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
