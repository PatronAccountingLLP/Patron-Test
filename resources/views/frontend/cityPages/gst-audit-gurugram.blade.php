
@extends('layouts.service-app')

<!-- External Dependencies (loaded by master layout in production) -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Barlow:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,400&family=DM+Sans:opsz,wght@9..40,400;9..40,500;9..40,600;9..40,700&display=swap" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

@section('meta')
    <title>GST Audit Gurugram - GSTR-9C, Reconciliation & ₹5Cr</title>
    <meta name="description" content="CA-assisted GST audit service in Gurugram. GSTR-9C reconciliation, annual return, Section 65/66, ITC verification, DRC-03, departmental audit. Call +91 945 945 6700.">
    <link rel="canonical" href="/gst-audit/gurugram">
    <meta name="robots" content="index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1">
    <meta property="og:title" content="GST Audit Gurugram - GSTR-9C, Reconciliation & ₹5Cr">
    <meta property="og:description" content="CA-assisted GST audit service in Gurugram. GSTR-9C reconciliation, annual return, Section 65/66, ITC verification, DRC-03, departmental audit. Call +91 945 945 6700.">
    <meta property="og:url" content="/gst-audit/gurugram">
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="Patron Accounting">
    <meta property="og:image" content="https://www.patronaccounting.com/images/og-default-square.png">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="1200">
    <meta property="og:image:type" content="image/png">
    <meta property="og:image:secure_url" content="https://www.patronaccounting.com/images/og-default-square.png">
    <meta property="og:image:alt" content="Patron Accounting - partner you can rely on">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="GST Audit Gurugram - GSTR-9C, Reconciliation & ₹5Cr">
    <meta name="twitter:description" content="CA-assisted GST audit service in Gurugram. GSTR-9C reconciliation, annual return, Section 65/66, ITC verification, DRC-03, departmental audit. Call +91 945 945 6700.">
    <meta name="twitter:image" content="https://www.patronaccounting.com/images/og-default-square.png">
@endsection

@section('schema')
    <script type="application/ld+json">{
  "@context": "https://schema.org",
  "@graph": [
    {
      "@type": "Service",
      "name": "GST Audit Gurugram - GSTR-9C, Reconciliation & ₹5Cr",
      "description": "CA-assisted GST audit service in Gurugram. GSTR-9C reconciliation, annual return, Section 65/66, ITC verification, DRC-03, departmental audit. Call +91 945 945 6700.",
      "url": "https://www.patronaccounting.com/gst-audit/gurugram",
      "serviceType": "GST Audit Gurugram - GSTR-9C, Reconciliation & ₹5Cr",
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
        "url": "https://www.patronaccounting.com/gst-audit/gurugram",
        "priceSpecification": {
          "@type": "PriceSpecification",
          "minPrice": "2",
          "maxPrice": "5",
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
          "name": "GST Audit Gurugram - GSTR-9C, Reconciliation & ₹5Cr",
          "item": "https://www.patronaccounting.com/gst-audit/gurugram"
        }
      ]
    },
    {
      "@type": "FAQPage",
      "mainEntity": [
        {
          "@type": "Question",
          "name": "Is GST audit by CA still mandatory?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "No. Statutory CA audit under S.35(5) removed from FY 2020-21 (Notification 29/2021). Now GSTR-9C is self-certified. But professional preparation strongly recommended - self-certification carries legal responsibility."
          }
        },
        {
          "@type": "Question",
          "name": "What is the turnover limit for GSTR-9C?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Aggregate turnover > Rs 5 crore (PAN-based, all GSTINs combined). GSTR-9 mandatory for > Rs 2 crore. GSTR-9C additionally for > Rs 5 crore."
          }
        },
        {
          "@type": "Question",
          "name": "When is GSTR-9C due?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "31 December of following FY. FY 2025-26: 31 December 2026. Late fee GSTR-9: Rs 200/day (max 0.25% turnover). GSTR-9C: Rs 25,000 general penalty (S.125)."
          }
        },
        {
          "@type": "Question",
          "name": "What is Section 65 departmental audit?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "GST officers audit any registered person. 15-day notice. 3 months (extendable 3). Discrepancies: demand under S.73 (non-fraud) or S.74 (fraud). Obstruction: Rs 25,000. Patron represents."
          }
        },
        {
          "@type": "Question",
          "name": "What documents are needed?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "GST returns (GSTR-1/3B/2B), audited financials, sales/purchase registers, invoices, ITC records, e-way bills, RCM proof, export docs. Patron provides personalised checklist."
          }
        },
        {
          "@type": "Question",
          "name": "What is GSTR-9C penalty?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "No specific provision. General penalty Rs 25,000 (S.125 CGST + SGST). GSTR-9 late fee: Rs 200/day, max 0.25% turnover. Non-filing may trigger scrutiny/audit."
          }
        },
        {
          "@type": "Question",
          "name": "What is the cost?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "GSTR-9 from Rs 4,999. GSTR-9C from Rs 9,999. Package from Rs 12,999. Departmental audit from Rs 14,999. ITC reconciliation from Rs 4,999. Patron provides upfront estimate."
          }
        },
        {
          "@type": "Question",
          "name": "What is DRC-03?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Voluntary payment form for additional GST liability discovered during reconciliation. Pay before/during audit to avoid penalty + interest. Patron identifies and computes DRC-03 proactively."
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
                        GST Audit Service in Gurugram: GSTR-9C, Reconciliation, and Compliance
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
                            <p class="mb-0 text-dark benefit-paragraph"><span>GSTR-9C:</span> Mandatory for aggregate turnover > Rs 5 crore | Reconciliation of audited financials with GSTR-9</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>GSTR-9:</span> Mandatory for turnover > Rs 2 crore | Consolidation of all monthly/quarterly returns</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Section 65:</span> Departmental audit by GST officers | 15-day notice | 3-month duration | Any registered person</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Section 66:</span> Special audit directed by Commissioner | CA/CMA conducts | 90+90 days | Complex cases</p>
                        </div>
                    </div>

                    <p class="mb-4 fw-bold" style="color: var(--blue); font-size: 15px;">GST audit for manufacturers, IT exporters, trading firms, and e-commerce sellers across Gurugram.</p>

                    <div class="hero-cta">
                        <a href="tel:+919459456700" class="btn-video text-decoration-none">
                            <span class="play-circle"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="width:14px;height:14px;color:#fff"><path d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/></svg></span>
                            Call +91 945 945 6700
                        </a>
                        <a href="mailto:sales@patronaccounting.com" class="btn-sample text-decoration-none">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="width:18px;height:18px;"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,12 2,6"/></svg>
                            Email Us
                        </a>
                        <a href="https://wa.me/919459456700?text=Hi%2C%20I%20need%20GST%20audit%20services%20in%20Gurugram." target="_blank" class="btn-sample text-decoration-none">
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
                                            'service'  => 'GST Audit Service in Gurugram',
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
            <a href="#overview-section" class="toc-btn active">Overview</a><a href="#what-section" class="toc-btn">GSTR-9C</a><a href="#who-section" class="toc-btn">Section 65/66</a><a href="#services-section" class="toc-btn">Services</a><a href="#procedure-section" class="toc-btn">ITC Reconciliation</a><a href="#documents-section" class="toc-btn">Documents</a><a href="#challenges-section" class="toc-btn">Due Dates</a><a href="#fees-section" class="toc-btn">Fees</a><a href="#timeline-section" class="toc-btn">Timeline</a><a href="#benefits-section" class="toc-btn">Why Patron</a><a href="#comparison-section" class="toc-btn">Patron vs DIY</a><a href="#faq-section" class="toc-btn">FAQs</a>
        </div>
        <button class="toc-arrow right" id="tocRight">&#10095;</button>
    </div>
</div>

<!-- SECTION 2: OVERVIEW / INTRO + TL;DR -->
<section class="content-section" id="overview-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">GST Audit in Gurugram: GSTR-9C, Annual Return, and Departmental Audit</h2>
            <div class="content-text">
                <div class="highlight-box" style="margin-bottom:20px;">
                    <p><strong>&#128204; TL;DR - GST Audit Service in Gurugram Services at a Glance</strong></p>
                    <p>GSTR-9 (annual return): mandatory for turnover > Rs 2 crore, due 31 December. GSTR-9C (reconciliation): mandatory for > Rs 5 crore, self-certified (CA audit removed from FY 2020-21). Section 65: departmental audit (15-day notice, 3 months). Section 66: special audit (Commissioner-directed, 90+90 days). ITC reconciliation, RCM compliance, and DRC-03 voluntary payment are critical components.</p>
                </div>
                <p>Gurugram businesses need comprehensive GST audit compliance. For a full overview, see our <a href="/gst-audit">GST Audit</a> national guide.</p><div class="table-responsive-wrapper"><table><thead><tr><th>Component</th><th>Threshold</th><th>Due Date</th><th>Penalty</th></tr></thead><tbody><tr><td>GSTR-9 (Annual Return)</td><td>Turnover > Rs 2 crore</td><td>31 December</td><td>Rs 200/day (max 0.25% turnover)</td></tr><tr><td>GSTR-9C (Reconciliation)</td><td>Turnover > Rs 5 crore</td><td>31 December</td><td>Rs 25,000 (Section 125)</td></tr><tr><td>Section 65 (Dept. Audit)</td><td>Any registered person</td><td>Per notice</td><td>Rs 25,000 obstruction</td></tr><tr><td>Section 66 (Special Audit)</td><td>Commissioner-directed</td><td>90+90 days</td><td>Per audit findings</td></tr></tbody></table></div><p</p>
                <p>Mandatory CA audit under Section 35(5) was removed from FY 2020-21 (Notification 29/2021). Now GSTR-9C is self-certified. However, professional CA preparation is strongly recommended as self-certification carries legal responsibility. Patron handles end-to-end GST audit compliance.</p>
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
                <h2 class="section-title">GSTR-9C Reconciliation Statement</h2>
                <div class="content-text what-is-definition">
                    
                    <p><strong>Who:</strong> Businesses with aggregate turnover > Rs 5 crore (PAN-based, all GSTINs combined).</p><p><strong>What:</strong> Part-by-part reconciliation of audited financial statements with GSTR-9 annual return. Covers turnover, tax paid, and ITC claimed.</p><p><strong>Self-Certified:</strong> Since FY 2020-21, GSTR-9C is self-certified by the taxpayer (CA statutory audit removed). But professional preparation essential for accuracy.</p><p><strong>DRC-03:</strong> If reconciliation reveals additional liability (excess ITC, unreported supply), voluntary payment via DRC-03 before/during audit avoids penalty.</p><p><strong>Due Date:</strong> 31 December of following FY. For FY 2025-26: 31 December 2026. See <a href="#">GST Return Filing</a> for monthly returns.</p>

                </div>
                <div class="highlight-box" style="margin-top:20px;">
                    <p><strong>Key Terms for GST Audit Service in Gurugram:</strong></p>
                    <p><strong>GSTR-9:</strong> Annual return consolidating all monthly/quarterly returns. Mandatory for turnover > Rs 2 crore.</p><p><strong>GSTR-9C:</strong> Reconciliation of audited financials with GSTR-9. Self-certified. Mandatory for > Rs 5 crore.</p><p><strong>Section 65:</strong> Departmental audit by GST officers. 15-day notice. 3 months (extendable 3 months). Any registered person.</p><p><strong>Section 66:</strong> Special audit directed by Commissioner when accounts complex. CA/CMA conducts. 90+90 days.</p><p><strong>DRC-03:</strong> Voluntary payment of additional liability discovered during reconciliation. Avoids penalty.</p>

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
                            <text x="100" y="170" font-size="10" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial, sans-serif">GST Audit Service in Gurugram</text>
                        </svg>
                    </div>
                    <div class="illustration-badge">
                        <span>GST Audit</span>
                        <strong>GSTR-9C</strong>
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
            <h2 class="section-title">Section 65 and Section 66 Audits</h2>
            <div class="content-text">
                
                <p><strong>Section 65 (Departmental Audit):</strong> GST officers audit any registered person. 15-day written notice. 3-month duration (extendable 3 months). If discrepancies: demand under S.73 (non-fraud, 3 years) or S.74 (fraud, 5 years). Obstruction: Rs 25,000 penalty.</p><p><strong>Section 66 (Special Audit):</strong> Commissioner directs when accounts are complex or revenue is at risk. Nominated CA/CMA conducts audit. 90 days (extendable 90 days). Audit report submitted to Commissioner. Demand raised based on findings.</p><p><strong>Gurugram context:</strong> Manesar manufacturers face Section 65 for ITC on capital goods. Cyber City IT exporters for zero-rated supply documentation. Udyog Vihar traders for inter-state transactions. Patron represents during both audit types.</p>

            </div>
            </div>
        </div>
    </div>
</section>

<!-- SECTION 5: OUR SERVICES -->
<section class="content-section" id="services-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">GST Audit Services Offered</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Service</th><th>What We Do</th></tr></thead>
                    <tbody>
                        <tr><td>GSTR-9 Annual Return</td><td>Consolidation of GSTR-1/3B/2B. Cross-verification with books. Mismatch identification and resolution before filing</td></tr><tr><td>GSTR-9C Reconciliation + Self-Certification</td><td>Part-by-part reconciliation of audited financials with GSTR-9. Turnover, tax, ITC. DRC-03 computation. Self-certification support</td></tr><tr><td>Departmental Audit (Section 65)</td><td>Document preparation, query response, representation, defence against demand, SCN reply under S.73/74</td></tr><tr><td>Special Audit (Section 66)</td><td>Coordination with Commissioner-nominated auditor, documentation, query response, report review</td></tr><tr><td>ITC Reconciliation (Standalone)</td><td>GSTR-2B vs books, blocked credit (S.17(5)), 180-day payment rule, RCM compliance, excess ITC reversal</td></tr><tr><td>Voluntary Internal GST Audit</td><td>For businesses below Rs 5 crore: monthly ITC reconciliation, GSTR-1 vs books, RCM, e-way bill review</td></tr>

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
            <h2 class="section-title">GST Audit Process</h2>
            <p class="section-subtitle" style="text-align:left;max-width:100%;">From data consolidation to GSTR-9C self-certification and departmental audit defence.</p>
        </header>
        <div class="steps-container">
            <div class="step-card"><div class="step-content"><span class="step-badge">Phase 1</span><h3 class="step-title">Data Consolidation + GSTR-9</h3><p class="step-description">Consolidate all GSTR-1, GSTR-3B, GSTR-2B data for the FY. Cross-verify with books of accounts. Identify mismatches (turnover, tax, ITC). Resolve discrepancies. Prepare and file GSTR-9 annual return.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Data consolidated</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>GSTR-9 filed</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="15" y="5" width="90" height="70" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><text x="60" y="40" font-size="8" fill="#E8712C" font-weight="800" text-anchor="middle" font-family="Arial">GSTR-9</text></svg></div><span class="illustration-label">Filed</span><span class="step-number-large">01</span></div></div></div><div class="step-card"><div class="step-content"><span class="step-badge">Phase 2</span><h3 class="step-title">GSTR-9C Reconciliation</h3><p class="step-description">Reconcile audited financials with GSTR-9: turnover, tax paid, ITC claimed. Identify differences with explanations. Compute additional liability (DRC-03). Self-certify and file GSTR-9C.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Reconciled</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>9C filed</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="20" y="15" width="80" height="50" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><text x="60" y="40" font-size="8" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">9C</text></svg></div><span class="illustration-label">Certified</span><span class="step-number-large">02</span></div></div></div><div class="step-card"><div class="step-content"><span class="step-badge">Phase 3</span><h3 class="step-title">Audit Readiness + Defence</h3><p class="step-description">Maintain audit-ready documentation year-round. If Section 65/66 audit initiated: prepare documents, respond to queries, represent before officers, defend against demand. DRC-03 for voluntary payments.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Audit ready</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Compliant</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="20" y="10" width="80" height="60" rx="8" fill="#E8F5E9" stroke="#25D366" stroke-width="2"/><path d="M52 40l5 5 12-12" stroke="#25D366" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/></svg></div><span class="illustration-label">Protected</span><span class="step-number-large">03</span></div></div></div>

        </div>
    </div>
</section>

<!-- SECTION 8: DOCUMENTS REQUIRED -->
<section class="content-section" id="documents-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Documents Required for GST Audit</h2>
            <div class="content-text">
                
                <div class="table-responsive-wrapper"><table><thead><tr><th>Document</th><th>Purpose</th><th>Notes</th></tr></thead><tbody><tr><td>All GST Returns (GSTR-1/3B/2B)</td><td>Data consolidation for GSTR-9</td><td>Full FY, all periods</td></tr><tr><td>Audited Financial Statements</td><td>Reconciliation with GSTR-9C</td><td>Statutory audit report</td></tr><tr><td>Sales/Purchase Registers</td><td>Turnover and ITC verification</td><td>With HSN/SAC codes</td></tr><tr><td>All Tax Invoices + Credit Notes</td><td>Supply documentation</td><td>Both outward and inward</td></tr><tr><td>ITC Records</td><td>Input tax credit verification</td><td>GSTR-2B matching</td></tr><tr><td>E-way Bills</td><td>Movement verification</td><td>For goods transportation</td></tr><tr><td>RCM Payment Proof</td><td>Reverse charge compliance</td><td>Challans for RCM supplies</td></tr><tr><td>Export Documentation</td><td>Zero-rated supply verification</td><td>LUT, shipping bills, BRCs</td></tr></tbody></table></div><div class="highlight-box" style="margin-top:20px;"><p><strong>Patron provides detailed checklist</strong> based on your business type (manufacturer, exporter, trader, e-commerce). Preparation starts October for 31 December deadline. See <a href="/accounting-services">Accounting Services</a> for audit-ready books.</p></div>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 9: CHALLENGES -->
<section class="content-section" id="challenges-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Due Dates and Penalties</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Challenge</th><th>Impact</th><th>How Patron Accounting Solves It</th></tr></thead>
                    <tbody>
                        <tr><td>GSTR-9 (Annual Return)</td><td>31 December of following FY</td><td>Rs 200/day (Rs 100 CGST + Rs 100 SGST), capped at 0.25% of turnover in state</td></tr><tr><td>GSTR-9C (Reconciliation)</td><td>31 December (same as GSTR-9)</td><td>Rs 25,000 general penalty (Section 125)</td></tr><tr><td>Section 65 Audit Cooperation</td><td>Within notice period (15 days)</td><td>Obstruction: Rs 25,000 penalty (Section 125)</td></tr><tr><td>DRC-03 (Additional Liability)</td><td>Voluntary (before/during audit)</td><td>No penalty if paid voluntarily; demand + interest if discovered by officer</td></tr><tr><td>FY 2025-26 Deadline</td><td>31 December 2026</td><td>Patron begins preparation from October for timely filing</td></tr>

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
            <h2 class="section-title">GST Audit Fees</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Fee Component</th><th>Amount</th></tr></thead>
                    <tbody>
                        <tr><td>GSTR-9 Annual Return Preparation</td><td>Starting from Rs 4,999-14,999 (Exl GST) | Based on complexity and turnover</td></tr><tr><td>GSTR-9C Reconciliation + Self-Certification</td><td>Starting from Rs 9,999-24,999 (Exl GST) | Part-by-part reconciliation + DRC-03</td></tr><tr><td>GSTR-9 + GSTR-9C Package</td><td>Starting from Rs 12,999-34,999 (Exl GST) | Complete annual return + reconciliation</td></tr><tr><td>Departmental Audit (Section 65)</td><td>Starting from Rs 14,999-39,999 (Exl GST) | Representation + SCN response</td></tr><tr><td>ITC Reconciliation (Standalone)</td><td>Starting from Rs 4,999-9,999 (Exl GST) | GSTR-2B vs books + blocked credits + RCM</td></tr><tr><td>Voluntary Internal GST Audit</td><td>Starting from Rs 7,999-14,999/year (Exl GST) | Proactive compliance for <Rs 5Cr</td></tr>

                    </tbody>
                </table>
                </div>
                <p style="margin-top:16px;font-size:13px;color:var(--text-muted);font-style:italic;">All fees and charges listed are indicative only and do not constitute a binding offer. Final amounts may vary depending on the volume of work and the complexity involved.</p>
                <p style="margin-top:16px;">Professional service charges for drafting, filing, and representation are separate from the statutory fees. The exact fee depends on the complexity of the case, disputed amount, and number of hearings required. Contact us for a detailed quote.</p>
                <p style="margin-top:16px;"><strong>Get a free GST Audit Service in Gurugram consultation - <a href="tel:+919459456700">Call +91 945 945 6700</a> or <a href="https://wa.me/919459456700?text=Hi%2C%20I%20need%20GST%20audit%20in%20Gurugram." target="_blank">WhatsApp us</a>. No-obligation assessment.</strong></p>
            </div>
        </div>
    </div>
</section>

<!-- SECTION 11: TIMELINE -->
<section class="content-section" id="timeline-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Why Choose Patron Accounting in Gurugram?</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Stage</th><th>Estimated Timeline</th></tr></thead>
                    <tbody>
                        <tr><td>Gurugram Office</td><td>Golf Course Extension Road - GST audit for Manesar manufacturers, Cyber City IT exporters, Udyog Vihar traders</td></tr><tr><td>October Start</td><td>Begin GSTR-9/9C preparation from October for 31 December deadline. No last-minute rush</td></tr><tr><td>ITC Expert</td><td>GSTR-2B reconciliation, blocked credit identification (S.17(5)), 180-day payment rule, RCM compliance</td></tr><tr><td>Departmental Audit Defence</td><td>Represent during Section 65/66 audits. Document preparation, query response, SCN defence</td></tr><tr><td>DRC-03 Advisory</td><td>Identify additional liability proactively. Voluntary payment via DRC-03 avoids penalty and interest</td></tr>

                    </tbody>
                </table>
                </div>
                <div class="highlight-box" style="margin-top:16px;">
                    
                    <p><strong>Critical:</strong> GSTR-9 + GSTR-9C due 31 December. Late fee Rs 200/day (GSTR-9). GSTR-9C penalty Rs 25,000. Self-certification carries legal responsibility. ITC reconciliation prevents demand. DRC-03 voluntary payment avoids penalty. Start preparation in October.</p>

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
            <h2 class="section-title">Patron vs DIY Comparison</h2>
        </div>
        <div class="features-grid"><article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><h3 class="feature-title">Patron: Full Reconciliation</h3><p class="feature-text">Part-by-part 9C reconciliation. Every difference identified and explained. DRC-03 computed. Self-certification on solid foundation.</p></article><article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 9v2m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><h3 class="feature-title">DIY: Surface-Level</h3><p class="feature-text">Often just copy numbers without reconciliation. Differences not explained. Self-certification on shaky ground. Audit risk.</p></article><article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M14 2H6a2 2 0 00-2 2v16a2 2 0 002 2h12a2 2 0 002-2V8z"/><path d="M14 2v6h6M16 13H8M16 17H8"/></svg></div><h3 class="feature-title">Patron: Audit Defence</h3><p class="feature-text">Represent during S.65/66 audits. Document preparation. Query response. SCN defence. Demand minimisation.</p></article><article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><path d="M12 6v6l4 2"/></svg></div><h3 class="feature-title">DIY: No Defence</h3><p class="feature-text">No representation during audit. Accept officer's computation. Higher demand + penalty. Professional defence saves money.</p></article></div>
    </div>
</section>

<!-- SECTION 12A: SOCIAL PROOF -->
<section class="content-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Trusted by 10,000+ Businesses Across India</h2>
            <div class="content-text">
                
                <p><strong>Trust Banner:</strong> 10,000+ Businesses Served | 4.9 Google Rating | 50,000+ Documents Filed | 15+ Years of Practice</p><blockquote style="border-left:3px solid var(--orange);padding:16px 20px;margin:20px 0;background:var(--orange-lighter);border-radius:0 var(--radius-sm) var(--radius-sm) 0;"><p style="font-style:italic;margin-bottom:8px;">"Manufacturing unit in Manesar. Patron reconciled GSTR-9C, identified Rs 4.5L ITC reversal needed. Paid via DRC-03 voluntarily. Saved penalty + interest during departmental audit."</p><p style="font-weight:700;font-size:14px;margin:0;">- CFO, Manufacturing Company, IMT Manesar</p></blockquote><blockquote style="border-left:3px solid var(--orange);padding:16px 20px;margin:20px 0;background:var(--orange-lighter);border-radius:0 var(--radius-sm) var(--radius-sm) 0;"><p style="font-style:italic;margin-bottom:8px;">"IT exporter in Cyber City. Patron prepared GSTR-9 + 9C with zero-rated supply reconciliation. LUT and refund documentation verified. Clean audit-ready filing."</p><p style="font-weight:700;font-size:14px;margin:0;">- Finance Head, IT Company, DLF Cyber City</p></blockquote>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 13: SELF-FILING vs PROFESSIONAL COMPARISON -->
<section class="content-section" id="comparison-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Patron vs DIY Detailed</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Factor</th><th>Patron Managed</th><th>DIY</th></tr></thead>
                    <tbody>
                        <tr><td>GSTR-9C Reconciliation</td><td>Part-by-part with explanations</td><td>Surface-level number matching</td></tr><tr><td>ITC Verification</td><td>GSTR-2B vs books + blocked credits + RCM</td><td>Often skip ITC reconciliation</td></tr><tr><td>DRC-03 Advisory</td><td>Proactive voluntary payment before audit</td><td>Discovered during audit (penalty)</td></tr><tr><td>Audit Defence (S.65/66)</td><td>Full representation + SCN response</td><td>No professional defence</td></tr><tr><td>Timeline</td><td>October start for December deadline</td><td>Last-minute rush, errors</td></tr><tr><td>Pricing</td><td>From Rs 4,999 (GSTR-9) / Rs 12,999 (package)</td><td>Free but audit risk + penalties</td></tr>

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
                
                <ul><li><a href="/gst-audit">GST Audit (National)</a></li><li><a href="#">GST Return Filing</a></li><li><a href="/gst-registration">GST Registration</a></li><li><a href="/accounting-services">Accounting Services</a></li><li><a href="#">Annual Compliance</a></li></ul>

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
                
                <p><strong>Governing Law:</strong> CGST Act, 2017 | Haryana SGST Act | CGST Rules | Finance Act, 2021</p><p><strong>Key Sections:</strong> S.35(5) (CA audit REMOVED from FY 2020-21) | S.44 (annual return + GSTR-9C) | S.65 (departmental audit) | S.66 (special audit) | S.73/74 (demand) | S.125 (penalty Rs 25,000)</p><p><strong>Forms:</strong> GSTR-9 (annual) | GSTR-9C (reconciliation) | DRC-03 (voluntary payment) | DRC-01/07 (demand)</p><p><strong>Notification:</strong> CBIC No. 29/2021-CT (removed CA audit, introduced self-certification for GSTR-9C)</p><p><strong>Due Date:</strong> 31 December of following FY. FY 2025-26: 31 December 2026.</p>

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
                    <h2 class="faq-expanded__title">FAQs - GST Audit in Gurugram</h2>
                    <p class="faq-expanded__lead">Common questions about GST audit, GSTR-9C, annual return, departmental audit, and ITC reconciliation for Gurugram businesses.</p>
                    @include('partials.bigin-form', [
                        'variant'  => 'compact',
                        'service'  => 'GST Audit Service in Gurugram',
                        'city'     => 'Gurugram',
                    ])
                </aside>
                <div class="faq-expanded__list">
                    <div class="faq-expanded__item" id="faq-1">
                        <h3 class="faq-expanded__q">Is GST audit by CA still mandatory?</h3>
                        <div class="faq-expanded__a"><p>No. Statutory CA audit under S.35(5) removed from FY 2020-21 (Notification 29/2021). Now GSTR-9C is self-certified. But professional preparation strongly recommended - self-certification carries legal responsibility.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-2">
                        <h3 class="faq-expanded__q">What is the turnover limit for GSTR-9C?</h3>
                        <div class="faq-expanded__a"><p>Aggregate turnover > Rs 5 crore (PAN-based, all GSTINs combined). GSTR-9 mandatory for > Rs 2 crore. GSTR-9C additionally for > Rs 5 crore.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-3">
                        <h3 class="faq-expanded__q">When is GSTR-9C due?</h3>
                        <div class="faq-expanded__a"><p>31 December of following FY. FY 2025-26: 31 December 2026. Late fee GSTR-9: Rs 200/day (max 0.25% turnover). GSTR-9C: Rs 25,000 general penalty (S.125).</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-4">
                        <h3 class="faq-expanded__q">What is Section 65 departmental audit?</h3>
                        <div class="faq-expanded__a"><p>GST officers audit any registered person. 15-day notice. 3 months (extendable 3). Discrepancies: demand under S.73 (non-fraud) or S.74 (fraud). Obstruction: Rs 25,000. Patron represents.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-5">
                        <h3 class="faq-expanded__q">What documents are needed?</h3>
                        <div class="faq-expanded__a"><p>GST returns (GSTR-1/3B/2B), audited financials, sales/purchase registers, invoices, ITC records, e-way bills, RCM proof, export docs. Patron provides personalised checklist.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-6">
                        <h3 class="faq-expanded__q">What is GSTR-9C penalty?</h3>
                        <div class="faq-expanded__a"><p>No specific provision. General penalty Rs 25,000 (S.125 CGST + SGST). GSTR-9 late fee: Rs 200/day, max 0.25% turnover. Non-filing may trigger scrutiny/audit.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-7">
                        <h3 class="faq-expanded__q">What is the cost?</h3>
                        <div class="faq-expanded__a"><p>GSTR-9 from Rs 4,999. GSTR-9C from Rs 9,999. Package from Rs 12,999. Departmental audit from Rs 14,999. ITC reconciliation from Rs 4,999. Patron provides upfront estimate.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-8">
                        <h3 class="faq-expanded__q">What is DRC-03?</h3>
                        <div class="faq-expanded__a"><p>Voluntary payment form for additional GST liability discovered during reconciliation. Pay before/during audit to avoid penalty + interest. Patron identifies and computes DRC-03 proactively.</p></div>
                    </div>
                </div>
            </div>


            <!-- Quick Answers -->
            <div class="highlight-box" style="margin-top:32px;">
                <p><strong>Quick Answers</strong></p>
                <p><strong>CA audit ab bhi zaroori hai?</strong> Nahi. FY 2020-21 se hata diya. GSTR-9C self-certified hai. Lekin CA se karwana recommended hai - legal responsibility aapki hai.</p><p><strong>GSTR-9C kab file karna hai?</strong> 31 December. FY 2025-26 ke liye 31 Dec 2026. Late fee GSTR-9: Rs 200/din. GSTR-9C: Rs 25,000.</p><p><strong>Section 65 kya hai?</strong> GST officers ka audit. 15-din notice. 3 mahine. Koi bhi registered person ko ho sakta hai.</p>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 18: URGENCY CTA -->
<section class="content-section" style="background: var(--orange-lighter) !important; border-left: 4px solid var(--orange);">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">31 December Deadline - Start Preparation Now</h2>
            <div class="content-text">
                
                <p>GSTR-9 + GSTR-9C due 31 December. Late fee Rs 200/day + Rs 25,000 penalty. Self-certification carries legal responsibility. ITC reconciliation prevents demand. Patron starts preparation from October. Departmental audit can be initiated anytime.</p><p><strong><a href="tel:+919459456700">Call +91 945 945 6700</a> or <a href="https://wa.me/919459456700?text=Hi%2C%20I%20need%20GST%20audit%20services%20in%20Gurugram." target="_blank">WhatsApp us</a>.</strong></p>

            </div>
        </div>
    </div>
</section>

<!-- CONCLUSION + CTA BLOCK (Dark) -->
<section class="content-section" style="background: var(--blue) !important;">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title" style="color:#FFFFFF !important;">Get Expert GST Audit Services in Gurugram</h2>
            <div class="content-text" style="text-align:left;">
                
                <p style="color:rgba(255,255,255,0.85);">GST audit compliance involves accurate GSTR-9 + GSTR-9C filing, ITC reconciliation, and readiness for departmental audits. Self-certification carries legal responsibility. Professional preparation is essential for accuracy and audit defence.</p><p style="color:rgba(255,255,255,0.85);">Patron Accounting's Gurugram office provides comprehensive services: GSTR-9, GSTR-9C, ITC reconciliation, DRC-03, departmental audit representation, and year-round compliance monitoring.</p><p style="color:rgba(255,255,255,0.85);">With 10,000+ businesses served, a 4.9 Google rating, and 50,000+ documents filed, Patron Accounting LLP is a trusted GST compliance partner across Gurugram, NCR, and India.</p>

            </div>
            <div style="display:flex;gap:14px;flex-wrap:wrap;margin-top:24px;">
                <a href="tel:+919459456700" style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:var(--orange);color:#fff;border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#128222; Call +91 945 945 6700</a>
                <a href="https://wa.me/919459456700?text=Hi%2C%20I%20need%20GST%20audit%20in%20Gurugram." target="_blank" style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:#25D366;color:#fff;border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#128172; WhatsApp Us</a>
                <a href="mailto:sales@patronaccounting.com?subject=GST%20Audit%20Gurugram&body=Hi%2C%20I%20need%20GST%20audit%20services." style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:transparent;color:#fff;border:2px solid rgba(255,255,255,0.3);border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#9993;&#65039; Email Us</a>
            </div>
            <p style="color:rgba(255,255,255,0.7);font-size:13px;margin-top:16px;">Book a Free Consultation - No Obligation.</p>
        </div>
    </div>
</section>

<!-- GSTAT STATE BENCH CITY PAGES (32 Pages) -->
<section class="content-section" style="padding:48px 32px;background:var(--gray-50);">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title" style="text-align:center;margin-bottom:12px;">GST Audit - Available Cities</h2>
            <p style="text-align:center;color:var(--text-muted);font-size:15px;margin-bottom:40px;">Expert GST audit services across major Indian cities</p>
         
            <div class="pa-city-block" style="margin-bottom:40px;"><div class="pa-block-title">City-Wise GST Audit</div><div class="pa-block-sub">Select your city</div><div class="pa-city-grid"><a href="/gst-audit/pune" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Pune</div><div class="pa-card-sub">Maharashtra</div></div></a><a href="/gst-audit/mumbai" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Mumbai</div><div class="pa-card-sub">Maharashtra</div></div></a><a href="/gst-audit/delhi" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Delhi</div><div class="pa-card-sub">Delhi NCR</div></div></a><div class="pa-city-card" style="opacity:0.6; pointer-events:none; border:2px solid var(--orange); position:relative;"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Gurugram</div><div class="pa-card-sub">Haryana</div></div><span style="position:absolute; top:6px; right:8px; font-size:10px; color:var(--orange); font-weight:700; text-transform:uppercase; letter-spacing:0.5px;">You're here</span></div></div></div><div class="pa-city-block"><div class="pa-block-title">Related Services in Gurugram</div><div class="pa-block-sub">End-to-end GST support</div><div class="pa-cross-grid"><a href="#" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">GST Return Filing</div><div class="pa-card-sub">Gurugram</div></div></a><a href="/gst-registration/gurugram" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">GST Registration</div><div class="pa-card-sub">Gurugram</div></div></a><a href="/accounting-services/gurugram" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Accounting Services</div><div class="pa-card-sub">Gurugram</div></div></a><a href="/private-limited-company-compliance/gurugram" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Annual Compliance</div><div class="pa-card-sub">Gurugram</div></div></a><a href="/income-tax-return-filing/gurugram" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Income Tax Return</div><div class="pa-card-sub">Gurugram</div></div></a><a href="/legal-drafting/gurugram" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Legal Drafting</div><div class="pa-card-sub">Gurugram</div></div></a></div></div>
        </div>
    </div>
</section>

<!-- CONTENT FRESHNESS FOOTER -->
<section class="content-section" style="padding:32px;">
    <div class="content-container">
        <div class="text-content" style="font-size:13px;color:var(--text-muted);">
            <p><strong>Content Created:</strong> 03 April 2026 &nbsp;|&nbsp; <strong>Last Updated:</strong> <span id="lastUpdatedFooter">03 April 2026</span> &nbsp;|&nbsp; <strong>Next Review:</strong> 03 July 2026 &nbsp;|&nbsp; <strong>Reviewed By:</strong> CA &amp; CS Team, Patron Accounting LLP</p>
            <p>This page is reviewed quarterly. GSTR-9/9C due dates, Section 65/66, self-certification rules, and Haryana SGST provisions are verified.</p>
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
