
@extends('layouts.service-app')

<!-- External Dependencies (loaded by master layout in production) -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Barlow:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,400&family=DM+Sans:opsz,wght@9..40,400;9..40,500;9..40,600;9..40,700&display=swap" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

@section('meta')
    <title>Tally to Zoho Books Migration in Mumbai - Steps & Pricing</title>
    <meta name="description" content="CA-led Tally to Zoho Books migration in Mumbai. ETL data transfer, GST reconfiguration and opening balance matching for BKC, Andheri and Powai firms.">
    <link rel="canonical" href="https://www.patronaccounting.com/tally-to-zoho-migration/mumbai">
    <meta name="robots" content="index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1">
    <meta property="og:title" content="Tally to Zoho Books Migration in Mumbai - Steps & Pricing">
    <meta property="og:description" content="CA-led Tally to Zoho Books migration in Mumbai. ETL data transfer, GST reconfiguration and opening balance matching for BKC, Andheri and Powai firms.">
    <meta property="og:url" content="https://www.patronaccounting.com/tally-to-zoho-migration/mumbai">
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="Patron Accounting">
    <meta property="og:image" content="https://www.patronaccounting.com/images/og-default-square.png">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="1200">
    <meta property="og:image:type" content="image/png">
    <meta property="og:image:secure_url" content="https://www.patronaccounting.com/images/og-default-square.png">
    <meta property="og:image:alt" content="Patron Accounting - partner you can rely on">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Tally to Zoho Books Migration in Mumbai - Steps & Pricing">
    <meta name="twitter:description" content="CA-led Tally to Zoho Books migration in Mumbai. ETL data transfer, GST reconfiguration and opening balance matching for BKC, Andheri and Powai firms.">
    <meta name="twitter:image" content="https://www.patronaccounting.com/images/og-default-square.png">
@endsection

@section('schema')
    <script type="application/ld+json">{
  "@context": "https://schema.org",
  "@graph": [
    {
      "@type": "Service",
      "name": "Tally to Zoho Books Migration in Mumbai - Steps & Pricing",
      "description": "CA-led Tally to Zoho Books migration in Mumbai. ETL data transfer, GST reconfiguration and opening balance matching for BKC, Andheri and Powai firms.",
      "url": "https://www.patronaccounting.com/tally-to-zoho-migration/mumbai",
      "serviceType": "Tally to Zoho Books Migration in Mumbai - Steps & Pricing",
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
        "url": "https://www.patronaccounting.com/tally-to-zoho-migration/mumbai",
        "price": "14999"
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
          "name": "Migration: Tally to Zoho Books",
          "item": "https://www.patronaccounting.com/migration-from-tally-to-zoho"
        },
        {
          "@type": "ListItem",
          "position": 3,
          "name": "Tally to Zoho Books Migration in Mumbai - Steps & Pricing",
          "item": "https://www.patronaccounting.com/tally-to-zoho-migration/mumbai"
        }
      ]
    },
    {
      "@type": "FAQPage",
      "mainEntity": [
        {
          "@type": "Question",
          "name": "How do I migrate from Tally to Zoho Books in Mumbai?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "ETL process: Extract from Tally (backup, XML/CSV, ODBC) → Transform (clean duplicates, map Tally ledger groups to Zoho chart of accounts) → Load into Zoho with opening balance reconciliation. Patron CA handles entire process from Marine Lines with trial balance matching and parallel-run validation."
          }
        },
        {
          "@type": "Question",
          "name": "How much does Tally to Zoho migration cost in Mumbai?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Level 1 (opening balances + masters): Rs 14,999-25,000. Level 2 (current FY): Rs 25,000-50,000. Level 3 (full history): Rs 50,000-1,00,000+. Multi-company/multi-GSTIN: Rs 75,000-2,00,000. Zoho Books subscription separate from Rs 1,499/month (free plan under Rs 25L)."
          }
        },
        {
          "@type": "Question",
          "name": "Can I transfer GST data from Tally to Zoho Books?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Yes. CGST/SGST/IGST rates, HSN/SAC codes, GSTIN details all migrated. Zoho Books then connects directly to GSTN portal for automated GSTR-1, 3B, 9 filing. E-invoicing and e-way bill configurable. GST data verified against previous Tally filings."
          }
        },
        {
          "@type": "Question",
          "name": "How long does the migration take?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Single company opening balances: 3-5 days. Current FY transactions: 5-7 days. Full multi-year history: 10-14 days. Multi-company/multi-GSTIN: 10-21 days. Includes assessment, extraction, cleaning, import, parallel run, and training. Fixed timeline after assessment."
          }
        },
        {
          "@type": "Question",
          "name": "Is Zoho Books better than Tally for Mumbai businesses?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Zoho = better for cloud access, automated GST, multi-device, ecosystem integration (CRM/Inventory/Payroll), remote teams. Tally = better for advanced inventory (batch, godown, BOM), offline reliability, complex TDL customisations. Most Mumbai SMEs, startups, service firms benefit from Zoho."
          }
        },
        {
          "@type": "Question",
          "name": "Do I lose transaction history when switching?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "No (Level 2 or 3). Level 2 = current FY transactions + opening balances. Level 3 = full multi-year data. Even Level 1 (OB only): Tally backup archived for reference. Every migrated transaction verified against Tally source before go-live."
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
                        Tally to Zoho Books Migration in Mumbai: CA-Led Data Transfer with Zero Downtime
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
                            <p class="mb-0 text-dark benefit-paragraph"><span>Documents:</span> Tally data backup (.tbk), Chart of Accounts export, Trial Balance, customer/vendor master, item master, GST returns</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Fees:</span> Starting from Rs 14,999 for single-company migration</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Eligibility:</span> Any Mumbai business using Tally ERP 9 or TallyPrime wanting cloud-based Zoho Books accounting</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Timeline:</span> 3-14 days depending on data volume and complexity</p>
                        </div>
                    </div>

                    <p class="mb-4 fw-bold" style="color: var(--blue); font-size: 15px;">10,000+ Businesses Served | 4.9 Google Rating | From Rs 14,999</p>

                    <div class="hero-cta">
                        <a href="tel:+919459456700" class="btn-video text-decoration-none">
                            <span class="play-circle"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="width:14px;height:14px;color:#fff"><path d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/></svg></span>
                            Call +91 945 945 6700
                        </a>
                        <a href="mailto:sales@patronaccounting.com" class="btn-sample text-decoration-none">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="width:18px;height:18px;"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,12 2,6"/></svg>
                            Email Us
                        </a>
                        <a href="https://wa.me/919459456700?text=Hi%2C%20I%20need%20Tally%20to%20Zoho%20migration%20in%20Mumbai.%20Please%20call%20me." target="_blank" class="btn-sample text-decoration-none">
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
                                            'service'  => 'Tally to Zoho Migration in Mumbai',
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
            <a href="#overview-section" class="toc-btn">Overview</a><a href="#what-section" class="toc-btn">What Is It</a><a href="#who-section" class="toc-btn">Who Needs It</a><a href="#services-section" class="toc-btn">Services</a><a href="#procedure-section" class="toc-btn">Process</a><a href="#documents-section" class="toc-btn">Documents</a><a href="#challenges-section" class="toc-btn">Challenges</a><a href="#fees-section" class="toc-btn">Fees</a><a href="#timeline-section" class="toc-btn">Timeline</a><a href="#benefits-section" class="toc-btn">Why Patron</a><a href="#comparison-section" class="toc-btn">Data Mapping</a><a href="#faq-section" class="toc-btn">FAQs</a>
        </div>
        <button class="toc-arrow right" id="tocRight">&#10095;</button>
    </div>
</div>

<!-- SECTION 2: OVERVIEW / INTRO + TL;DR -->
<section class="content-section" id="overview-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Tally to Zoho Books Migration in Mumbai - Overview</h2>
            <div class="content-text">
                <div class="highlight-box" style="margin-bottom:20px;">
                    <p><strong>&#128204; TL;DR - Tally to Zoho Migration in Mumbai Services at a Glance</strong></p>
                    <p>Migration uses <strong>ETL methodology</strong>: Extract (Tally XML/CSV/ODBC) → Transform (clean, map fields) → Load (Zoho Books). Key data: <strong>Chart of Accounts, contacts, items, opening balances, transactions, GST config</strong>. Post-migration: cloud access, automated GST, bank reconciliation, Zoho CRM/Inventory/Payroll integration.</p><div class="table-responsive-wrapper" style="margin-top:16px;"><table><thead><tr><th>Parameter</th><th>Detail</th></tr></thead><tbody><tr><td>Migration Scope</td><td>Chart of Accounts, Opening Balances, Contacts, Items+Stock, Invoices, Bills, Payments, JEs, GST</td></tr><tr><td>Methodology</td><td>ETL: Extract → Transform → Load with trial balance reconciliation</td></tr><tr><td>Timeline</td><td>3-5 days (Level 1) to 10-14 days (Level 3 full history)</td></tr><tr><td>Cost From</td><td>Rs 14,999 (single company, opening balances)</td></tr><tr><td>Key Mapping</td><td>Ledger Groups → Chart of Accounts | Sundry Debtors → AR | Sundry Creditors → AP</td></tr><tr><td>GST Config</td><td>GSTN portal integration for GSTR-1, 3B, 9 with GST Commissionerate Mumbai</td></tr></tbody></table></div></p>
                </div>
                <p>Mumbai businesses are moving from Tally to Zoho Books rapidly. With <strong>QuickBooks discontinued in India</strong>, Zoho Books is the leading cloud platform. <strong>BKC financial firms, Andheri MIDC manufacturers, Powai startups</strong> - all shifting for cloud access, automated GST, and ecosystem integration. Patron's CA-led migration ensures <strong>zero data loss, trial balance matching, and parallel-run validation</strong>. Learn more about <a href="/migration-from-tally-to-zoho">Tally to Zoho Migration across India</a>.</p>
                <p>Walk-in at Patron's Marine Lines office or remote migration via screen share. Also see <a href="/zoho-books-accounting">Zoho Books Accounting</a> and <a href="/tally-accounting">Tally Accounting</a>.</p>
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
                <h2 class="section-title">What Is Tally to Zoho Books Migration</h2>
                <div class="content-text what-is-definition">
                    
                    <p>Structured process of transferring all financial data from <strong>Tally (ERP 9/TallyPrime)</strong> to <strong>Zoho Books (cloud)</strong> using <strong>ETL methodology</strong> with data validation, field mapping, and trial balance reconciliation. For Mumbai businesses: reconfiguring <strong>GSTN portal integration</strong> for automated filing with GST Commissionerate Mumbai.</p><p>Not a simple data dump. Tally Ledger Groups → Zoho Chart of Accounts. Sundry Debtors → Accounts Receivable. Sundry Creditors → Accounts Payable. Stock Groups → Zoho Items. Vouchers → Zoho Transactions. A CA-led migration ensures this is <strong>accounting-accurate</strong>, not just technically complete. Trial balance in Zoho must <strong>exactly match</strong> Tally as on migration date. Any mismatch = mapping error resolved before go-live.</p>

                </div>
                <div class="highlight-box" style="margin-top:20px;">
                    <p><strong>Key Terms for Tally to Zoho Migration in Mumbai:</strong></p>
                    <p><strong>ETL:</strong> Extract (Tally XML/CSV/ODBC) → Transform (clean, deduplicate, map) → Load (Zoho Books import). Standard methodology.</p><p><strong>Trial Balance Matching:</strong> Zoho TB must equal Tally TB as on migration date. Line-by-line verification. Zero tolerance.</p><p><strong>Parallel Run:</strong> 1-2 weeks both systems running simultaneously. Discrepancies caught before Tally decommissioned.</p><p><strong>Level 1/2/3:</strong> L1 = opening balances + masters. L2 = current FY transactions. L3 = full multi-year history. Cost and timeline vary.</p><p><strong>GSTN Integration:</strong> Zoho Books connects to GST portal for automated GSTR-1, 3B, 9. Replaces manual Tally export.</p>

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
                            <text x="100" y="170" font-size="10" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial, sans-serif">Tally to Zoho Migration in Mumbai</text>
                        </svg>
                    </div>
                    <div class="illustration-badge">
                        <span>ETL + Trial Balance</span>
                        <strong>Tally → Zoho Books</strong>
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
            <h2 class="section-title">Who Needs Tally to Zoho Migration in Mumbai</h2>
            <div class="content-text">
                
                <p><strong>Startups and SMEs (Powai, BKC, Lower Parel):</strong> Outgrowing Tally's limited automation. Need cloud access, Zoho CRM integration, investor-ready MIS. Fast Level 1-2 migration in 3-7 days.</p><p><strong>Trading and Manufacturing (Andheri MIDC, Thane-Belapur):</strong> Need Zoho Inventory for real-time stock across warehouses. Level 2-3 with godown-wise stock migration. Multi-GSTIN support.</p><p><strong>Service Companies (Nariman Point, Fort, BKC):</strong> Zoho Projects integration for billable hours. Level 1-2 with contacts + invoices + project data.</p><p><strong>Ecommerce Businesses:</strong> Zoho Books + Shopify/Amazon/Razorpay integration. Payment gateway reconciliation. Level 2 migration.</p><p><strong>Multi-Branch Businesses:</strong> Multiple GSTINs across Mumbai locations. Single Zoho Books account with multi-GSTIN management. Branch-wise opening balances preserved.</p><p><strong>CA Firms Managing Clients:</strong> Centralised cloud access to all client books. No more visiting client premises for Tally desktops. Bulk migration available.</p>

            </div>
            </div>
        </div>
    </div>
</section>

<!-- SECTION 5: OUR SERVICES -->
<section class="content-section" id="services-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Tally to Zoho Migration Services Included</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Service</th><th>What We Do</th></tr></thead>
                    <tbody>
                        <tr><td>Pre-Migration Assessment</td><td>CA reviews Tally setup: company structure, ledger groups, cost centres, GST config, inventory method, data volume. Scope defined (Level 1/2/3). Walk-in Marine Lines.</td></tr><tr><td>Data Extraction from Tally</td><td>Export via XML, CSV, or ODBC. Trial Balance, Chart of Accounts, customer/vendor masters, item master, voucher registers, GST returns. All verified against Tally reports.</td></tr><tr><td>Data Transformation and Cleaning</td><td>Duplicates removed, inactive ledgers archived, naming standardised. Tally Ledger Groups → Zoho Chart of Accounts. GST rates and HSN/SAC codes mapped. Cost centres → Zoho tracking.</td></tr><tr><td>Data Loading into Zoho Books</td><td>Organisation setup. Chart of Accounts → Contacts → Items → Opening Balances (matched to Tally TB) → Transaction history (chronological). Bank accounts linked.</td></tr><tr><td>GST Reconfiguration</td><td>GSTIN linked. CGST/SGST/IGST configured. HSN/SAC mapped. GSTN portal integration for GSTR-1, 3B, 9. E-invoicing + e-way bill configured. Verified against previous filings.</td></tr><tr><td>Validation and Parallel Run</td><td>Trial balance matched (Zoho vs Tally). AR/AP ageing verified. Stock reconciled. 1-2 week parallel run. Bank feed tested. Discrepancies resolved before go-live.</td></tr><tr><td>Team Training and Handover</td><td>Role-specific: owner dashboards, accountant workflows, sales invoicing, purchase billing. Mobile app. Zoho CRM/Inventory/Payroll integration training.</td></tr><tr><td>Post-Migration Support</td><td>30-day support for troubleshooting, workflow optimisation, GST filing verification. Ongoing Zoho Books bookkeeping available as monthly service.</td></tr>

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
            <h2 class="section-title">6-Step Tally to Zoho Migration Process in Mumbai</h2>
            <p class="section-subtitle" style="text-align:left;max-width:100%;">Walk-in at Patron's Marine Lines office or remote via screen share. Migration with trial balance matching guarantee.</p>
        </header>
        <div class="steps-container">
            <div class="step-card"><div class="step-content"><span class="step-badge">Step 1</span><h3 class="step-title">Assessment and Scope Definition</h3><p class="step-description">CA reviews Tally environment: company structure, ledger count, transaction volume, multi-GSTIN, inventory, integrations. Scope agreed: Level 1 (opening balances), Level 2 (current FY), Level 3 (full history). Timeline and cost confirmed.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Scope defined</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Timeline confirmed</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="15" y="5" width="90" height="70" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><line x1="30" y1="22" x2="85" y2="22" stroke="#F5A623" stroke-width="2.5" stroke-linecap="round"/><line x1="30" y1="35" x2="78" y2="35" stroke="#14365F" stroke-width="1.5" opacity="0.3"/><circle cx="85" cy="55" r="8" fill="#E8F5E9" stroke="#25D366" stroke-width="1"/><path d="M81 55l3 3 5-5" stroke="#25D366" stroke-width="1.5" stroke-linecap="round"/></svg></div><span class="illustration-label">Assessed</span><span class="step-number-large">01</span></div></div></div>
<div class="step-card"><div class="step-content"><span class="step-badge">Step 2</span><h3 class="step-title">Tally Data Extraction</h3><p class="step-description">Backup (.tbk) secured. Trial Balance, Chart of Accounts, customer/vendor masters, item master, voucher registers exported. ODBC for advanced extraction. All verified against Tally's own reports for completeness.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Backup secured</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Reports exported</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="15" y="5" width="90" height="70" rx="6" fill="#E8F5E9" stroke="#25D366" stroke-width="1.5"/><text x="60" y="22" font-size="5" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">Extracted</text><rect x="25" y="30" width="70" height="18" rx="3" fill="#fff" stroke="#25D366" stroke-width="1"/><text x="60" y="42" font-size="5" fill="#14365F" text-anchor="middle" font-family="Arial">TB + CoA + Masters + JEs</text><text x="60" y="62" font-size="5" fill="#25D366" font-weight="600" text-anchor="middle" font-family="Arial">Data Secured</text></svg></div><span class="illustration-label">Extracted</span><span class="step-number-large">02</span></div></div></div>
<div class="step-card"><div class="step-content"><span class="step-badge">Step 3</span><h3 class="step-title">Data Cleaning and Field Mapping</h3><p class="step-description">Duplicates merged, inactive ledgers removed, naming standardised. Every Tally ledger group mapped to Zoho equivalent. GST rates + HSN/SAC mapped. Cost centres → Zoho tracking. Field mapping document created.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Data cleaned</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Fields mapped</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="15" y="5" width="90" height="70" rx="6" fill="#FFF3E0" stroke="#F5A623" stroke-width="1.5"/><text x="60" y="22" font-size="5" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">Transformed</text><rect x="25" y="30" width="70" height="18" rx="3" fill="#fff" stroke="#F5A623" stroke-width="1"/><text x="60" y="42" font-size="5" fill="#14365F" text-anchor="middle" font-family="Arial">Ledgers → CoA Mapped</text><text x="60" y="62" font-size="5" fill="#F5A623" font-weight="600" text-anchor="middle" font-family="Arial">Clean Data Ready</text></svg></div><span class="illustration-label">Mapped</span><span class="step-number-large">03</span></div></div></div>
<div class="step-card"><div class="step-content"><span class="step-badge">Step 4</span><h3 class="step-title">Zoho Books Setup and Data Import</h3><p class="step-description">Organisation created with Mumbai company details, FY, GST. Chart of Accounts imported. Contacts with balances. Items with stock. Opening balances reconciled against Tally TB. Transactions imported chronologically.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Zoho Books live</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Balances matched</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="15" y="5" width="90" height="70" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><text x="60" y="22" font-size="5" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">Loaded</text><rect x="25" y="30" width="70" height="18" rx="3" fill="#E8F5E9" stroke="#25D366" stroke-width="1"/><text x="60" y="42" font-size="5" fill="#14365F" text-anchor="middle" font-family="Arial">CoA + AR/AP + Stock + TXN</text><text x="60" y="62" font-size="5" fill="#14365F" font-weight="600" text-anchor="middle" font-family="Arial">TB Reconciled</text></svg></div><span class="illustration-label">Loaded</span><span class="step-number-large">04</span></div></div></div>
<div class="step-card"><div class="step-content"><span class="step-badge">Step 5</span><h3 class="step-title">Validation and Parallel Run</h3><p class="step-description">Trial balance Zoho vs Tally verified. AR/AP ageing matched. Stock reconciled. GST cross-checked. 1-2 week parallel run: both systems simultaneously. Discrepancies resolved. Bank feed tested.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>TB matched</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Parallel run clean</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="15" y="5" width="90" height="70" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><rect x="25" y="15" width="70" height="10" rx="3" fill="#25D366" opacity="0.15"/><text x="60" y="23" font-size="5" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">Validated</text><text x="60" y="42" font-size="5" fill="#14365F" font-weight="600" text-anchor="middle" font-family="Arial">Tally TB = Zoho TB ✓</text><text x="60" y="58" font-size="4" fill="#14365F" text-anchor="middle" font-family="Arial">Parallel Run Complete</text></svg></div><span class="illustration-label">Validated</span><span class="step-number-large">05</span></div></div></div>
<div class="step-card"><div class="step-content"><span class="step-badge">Step 6</span><h3 class="step-title">Go-Live, Training, and Support</h3><p class="step-description">Team trained: invoicing, expenses, bank reconciliation, GST filing, reporting. Mobile app. Integrations activated (CRM, Inventory, Payroll). Tally backup archived. 30-day post-migration support begins.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Team trained</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Zoho Books is primary</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="15" y="5" width="90" height="70" rx="6" fill="#E8F5E9" stroke="#25D366" stroke-width="1.5"/><text x="60" y="22" font-size="6" fill="#14365F" font-weight="800" text-anchor="middle" font-family="Arial">Go-Live!</text><rect x="25" y="30" width="70" height="15" rx="3" fill="#fff" stroke="#25D366" stroke-width="1"/><text x="60" y="40" font-size="5" fill="#14365F" text-anchor="middle" font-family="Arial">Trained + Supported</text><text x="60" y="62" font-size="5" fill="#25D366" font-weight="600" text-anchor="middle" font-family="Arial">Cloud Accounting Live</text></svg></div><span class="illustration-label">Live</span><span class="step-number-large">06</span></div></div></div>


        </div>
    </div>
</section>

<!-- SECTION 8: DOCUMENTS REQUIRED -->
<section class="content-section" id="documents-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Documents Required for Migration</h2>
            <div class="content-text">
                
                <ul><li>Tally Backup File (.tbk)</li><li>Chart of Accounts Export</li><li>Trial Balance (as on migration date)</li><li>Customer/Vendor Masters with Balances</li><li>Item Master with Stock Summary</li><li>Sales + Purchase Registers</li><li>Receipt + Payment Registers + Journal Register</li><li>Bank Statements + GST Returns (GSTR-1, 3B)</li><li>Previous Year ITR</li></ul><div class="highlight-box" style="margin-top:20px;"><p><strong>Mumbai-Specific:</strong> GSTIN certificate per branch. Maharashtra PTRC/PTEC registration. Shops &amp; Establishment licence. For multi-branch: branch-wise trial balances and inter-branch transfer records.</p></div>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 9: CHALLENGES -->
<section class="content-section" id="challenges-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Common Tally to Zoho Migration Challenges in Mumbai</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Challenge</th><th>Impact</th><th>How Patron Accounting Solves It</th></tr></thead>
                    <tbody>
                        <tr><td>Tally TDL Customisations</td><td>Custom TDL modules for industry reports, voucher formats, workflows don't transfer. Many Mumbai businesses rely on these for daily operations.</td><td>Patron identifies which TDL functions have Zoho equivalents (workflow rules, custom reports) and which need Zoho Creator apps or workarounds.</td></tr><tr><td>Opening Balance Mismatch</td><td>Most critical risk. Unmapped ledgers, partial contacts, stock valuation differences (FIFO vs Weighted Average) cause TB mismatch. Every subsequent transaction becomes incorrect.</td><td>Line-by-line trial balance reconciliation before go-live. Zero tolerance policy: if TB doesn't match, you don't go live.</td></tr><tr><td>Multi-GSTIN Migration</td><td>BKC office + Andheri warehouse + Thane factory = multiple GSTINs. Tally handles via separate files or single company. Zoho: up to 3 GSTINs on Professional plan.</td><td>GSTIN-wise transaction history and opening balances preserved. GST return continuity verified for each GSTIN.</td></tr><tr><td>Historical Transaction Volume</td><td>5+ years, 10,000+ transactions face import limits and processing time. Full history (Level 3) = 10-14 days. Batch importing in chronological order required.</td><td>Patron recommends Level 2 (current FY + OB) for faster migration. Level 3 for audit-critical businesses. Batch import managed.</td></tr><tr><td>Team Resistance (Tally Shortcuts)</td><td>Tally keyboard shortcuts deeply ingrained (F5 Payment, F8 Sales). Mumbai accountants need structured training to adapt to Zoho's web-based mouse-driven interface.</td><td>Role-specific training: owner dashboards, accountant workflows, sales team invoicing. Hands-on sessions until team is comfortable.</td></tr>

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
            <h2 class="section-title">Tally to Zoho Migration Fees in Mumbai - 2026</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Fee Component</th><th>Amount</th></tr></thead>
                    <tbody>
                        <tr><td>Level 1: Opening Balances + Masters</td><td>Rs 14,999 - Rs 25,000 (3-5 days)</td></tr><tr><td>Level 2: Current FY + Opening Balances</td><td>Rs 25,000 - Rs 50,000 (5-7 days)</td></tr><tr><td>Level 3: Full Historical Multi-Year</td><td>Rs 50,000 - Rs 1,00,000+ (10-14 days)</td></tr><tr><td>Multi-Company / Multi-GSTIN</td><td>Rs 75,000 - Rs 2,00,000 (10-21 days)</td></tr><tr><td>Zoho Books Subscription (separate)</td><td>From Rs 1,499/month Standard (Free plan under Rs 25L revenue)</td></tr>

                    </tbody>
                </table>
                </div>
                <p style="margin-top:16px;font-size:13px;color:var(--text-muted);font-style:italic;">All fees and charges listed are indicative only and do not constitute a binding offer. Final amounts may vary depending on the volume of work and the complexity involved.</p>
                <p style="margin-top:16px;">Professional service charges for drafting, filing, and representation are separate from the statutory fees. The exact fee depends on the complexity of the case, disputed amount, and number of hearings required. Contact us for a detailed quote.</p>
                <p style="margin-top:16px;"><strong>Get a free Tally to Zoho Migration in Mumbai consultation - <a href="tel:+919459456700">Call +91 945 945 6700</a> or <a href="https://wa.me/919459456700?text=Hi%2C%20I%20need%20Tally%20to%20Zoho%20migration%20in%20Mumbai.%20Please%20call%20me." target="_blank">WhatsApp us</a>. No-obligation assessment.</strong></p>
            </div>
        </div>
    </div>
</section>

<!-- SECTION 11: TIMELINE -->
<section class="content-section" id="timeline-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Migration Timeline</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Stage</th><th>Estimated Timeline</th></tr></thead>
                    <tbody>
                        <tr><td>Assessment and Scope</td><td>1-2 days (Marine Lines or remote)</td></tr><tr><td>Data Extraction from Tally</td><td>1-2 days (backup + reports export)</td></tr><tr><td>Cleaning and Field Mapping</td><td>1-3 days (complexity dependent)</td></tr><tr><td>Zoho Setup and Import</td><td>1-3 days (data volume dependent)</td></tr><tr><td>Validation + Parallel Run</td><td>1-2 weeks (both systems running)</td></tr><tr><td>Go-Live + Training</td><td>1-2 days (role-specific sessions)</td></tr><tr><td>Post-Migration Support</td><td>30 days (troubleshooting + optimisation)</td></tr>

                    </tbody>
                </table>
                </div>
                <div class="highlight-box" style="margin-top:16px;">
                    
                    <p><strong>Why Migrate Now:</strong> Tally desktop = no remote access, manual GST, no bank auto-feed, no CRM integration, no mobile. QuickBooks exited India. Every month on Tally = 10-15 hours lost on manual processes. GST errors from manual exports risk notices from GST Commissionerate Mumbai.</p>

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
            <h2 class="section-title">Why Choose Patron for Tally to Zoho Migration in Mumbai</h2>
        </div>
        <div class="features-grid"><article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><h3 class="feature-title">Marine Lines Office</h3><p class="feature-text">Walk-in for migration assessment or remote via screen share. Accessible from BKC, Andheri, Powai, Lower Parel, Nariman Point, Thane.</p></article><article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4"/></svg></div><h3 class="feature-title">CA-Led Migration</h3><p class="feature-text">Not just IT data transfer - accounting-accurate ETL with trial balance matching. If TB doesn't match, you don't go live. Zero data loss guarantee.</p></article><article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg></div><h3 class="feature-title">Parallel Run Guarantee</h3><p class="feature-text">1-2 week parallel period. Both Tally and Zoho running. Discrepancies caught. GST verified. Bank feed tested. Only then Tally decommissioned.</p></article><article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><path d="M12 6v6l4 2"/></svg></div><h3 class="feature-title">10,000+ Businesses</h3><p class="feature-text">Including Tally-to-Zoho migrations for Mumbai SMEs, manufacturers, service firms, ecommerce. 15+ years. 4.9 Google rating. 30-day post-migration support.</p></article></div>
    </div>
</section>

<!-- SECTION 12A: SOCIAL PROOF -->
<section class="content-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Trusted by 10,000+ Businesses Across India</h2>
            <div class="content-text">
                
                <p><strong>10,000+ Businesses | 4.9 Google Rating | 50,000+ Docs Filed | 15+ Years</strong></p><p>Including Tally-to-Zoho migrations for startups, trading companies, manufacturers, and service firms across Mumbai. Offices in Pune, Mumbai, Delhi, Gurugram.</p>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 13: SELF-FILING vs PROFESSIONAL COMPARISON -->
<section class="content-section" id="comparison-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Tally to Zoho Data Mapping Reference</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Tally Term</th><th>Zoho Books Equivalent</th></tr></thead>
                    <tbody>
                        <tr><td>Ledger Groups</td><td>Chart of Accounts</td></tr><tr><td>Sundry Debtors</td><td>Accounts Receivable</td></tr><tr><td>Sundry Creditors</td><td>Accounts Payable</td></tr><tr><td>Stock Groups / Items</td><td>Items (Goods/Services)</td></tr><tr><td>Cost Centres</td><td>Tracking Categories / Projects</td></tr><tr><td>Sales Voucher</td><td>Invoice</td></tr><tr><td>Purchase Voucher</td><td>Bill</td></tr><tr><td>Receipt Voucher → Payment Voucher</td><td>Payment Received → Payment Made</td></tr><tr><td>Journal Voucher → Contra Voucher</td><td>Manual Journal → Bank Transaction/Transfer</td></tr><tr><td>Trial Balance → Balance Sheet</td><td>Trial Balance Report → Balance Sheet Report</td></tr>

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
            <h2 class="section-title">Related Accounting and Migration Services</h2>
            <div class="content-text">
                
                <ul><li><a href="/migration-from-tally-to-zoho">Tally to Zoho Migration in India</a></li><li><a href="/zoho-books-accounting">Zoho Books Accounting</a></li><li><a href="/tally-accounting">Tally Accounting</a></li><li><a href="/accounting-services/mumbai">Accounting Services in Mumbai</a></li><li><a href="/gst-registration/mumbai">GST Registration in Mumbai</a></li><li><a href="/gst-returns/mumbai">GST Returns in Mumbai</a></li></ul>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 15A: LEGAL FRAMEWORK -->
<section class="content-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Technical and Compliance Framework</h2>
            <div class="content-text">
                
                <p><strong>Migration Methodology:</strong> ETL (Extract-Transform-Load). Extract via Tally XML/CSV/ODBC. Transform: clean, deduplicate, map fields. Load into Zoho Books with trial balance reconciliation.</p><p><strong>Zoho Books GST:</strong> Direct GSTN portal integration. Automated GSTR-1, GSTR-3B, GSTR-9 filing. E-invoicing. E-way bill. Multi-GSTIN support (Professional plan: 2 GSTINs). Filing with GST Commissionerate Mumbai.</p><p><strong>Data Integrity:</strong> Trial balance matching (Zoho = Tally). Parallel run 1-2 weeks. AR/AP ageing verification. Stock reconciliation. Bank feed testing. Zero data loss.</p><p><strong>Companies Act S.128:</strong> Books on accrual basis. Double-entry. Retained 8 years. Zoho Books complies fully.</p><p><strong>Portals:</strong> <a href="https://www.zoho.com/books/" target="_blank" rel="noopener">Zoho Books</a> | <a href="https://www.gst.gov.in" target="_blank" rel="noopener">GST Portal</a></p>

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
                    <h2 class="faq-expanded__title">FAQs - Tally to Zoho Migration in Mumbai</h2>
                    <p class="faq-expanded__lead">Answers to common questions. Call +91 945 945 6700.</p>
                    @include('partials.bigin-form', [
                        'variant'  => 'compact',
                        'service'  => 'Tally to Zoho Migration in Mumbai',
                        'city'     => 'Mumbai',
                    ])
                </aside>
                <div class="faq-expanded__list">
                    <div class="faq-expanded__item" id="faq-1">
                        <h3 class="faq-expanded__q">How do I migrate from Tally to Zoho Books in Mumbai?</h3>
                        <div class="faq-expanded__a"><p>ETL process: Extract from Tally (backup, XML/CSV, ODBC) → Transform (clean duplicates, map Tally ledger groups to Zoho chart of accounts) → Load into Zoho with opening balance reconciliation. Patron CA handles entire process from Marine Lines with trial balance matching and parallel-run validation.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-2">
                        <h3 class="faq-expanded__q">How much does Tally to Zoho migration cost in Mumbai?</h3>
                        <div class="faq-expanded__a"><p>Level 1 (opening balances + masters): Rs 14,999-25,000. Level 2 (current FY): Rs 25,000-50,000. Level 3 (full history): Rs 50,000-1,00,000+. Multi-company/multi-GSTIN: Rs 75,000-2,00,000. Zoho Books subscription separate from Rs 1,499/month (free plan under Rs 25L).</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-3">
                        <h3 class="faq-expanded__q">Can I transfer GST data from Tally to Zoho Books?</h3>
                        <div class="faq-expanded__a"><p>Yes. CGST/SGST/IGST rates, HSN/SAC codes, GSTIN details all migrated. Zoho Books then connects directly to GSTN portal for automated GSTR-1, 3B, 9 filing. E-invoicing and e-way bill configurable. GST data verified against previous Tally filings.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-4">
                        <h3 class="faq-expanded__q">How long does the migration take?</h3>
                        <div class="faq-expanded__a"><p>Single company opening balances: 3-5 days. Current FY transactions: 5-7 days. Full multi-year history: 10-14 days. Multi-company/multi-GSTIN: 10-21 days. Includes assessment, extraction, cleaning, import, parallel run, and training. Fixed timeline after assessment.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-5">
                        <h3 class="faq-expanded__q">Is Zoho Books better than Tally for Mumbai businesses?</h3>
                        <div class="faq-expanded__a"><p>Zoho = better for cloud access, automated GST, multi-device, ecosystem integration (CRM/Inventory/Payroll), remote teams. Tally = better for advanced inventory (batch, godown, BOM), offline reliability, complex TDL customisations. Most Mumbai SMEs, startups, service firms benefit from Zoho.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-6">
                        <h3 class="faq-expanded__q">Do I lose transaction history when switching?</h3>
                        <div class="faq-expanded__a"><p>No (Level 2 or 3). Level 2 = current FY transactions + opening balances. Level 3 = full multi-year data. Even Level 1 (OB only): Tally backup archived for reference. Every migrated transaction verified against Tally source before go-live.</p></div>
                    </div>
                </div>
            </div>


            <!-- Quick Answers -->
            <div class="highlight-box" style="margin-top:32px;">
                <p><strong>Quick Answers</strong></p>
                <p><strong>Tally se Zoho pe kaise shift karte hain?</strong> Backup lo, data export karo (XML/CSV), Zoho Books mein import - CoA, contacts, items, balances sab migrate hota hai. CA se karwao toh trial balance match hoga.</p><p><strong>Zoho Books ka plan kitne ka hai?</strong> Free plan Rs 25L revenue tak. Standard Rs 1,499/month. Professional Rs 2,499/month (5 users, 2 GSTINs).</p><p><strong>Kya purana data bhi aa jaata hai?</strong> Haan - Level 2 mein current FY, Level 3 mein saara historical. Opening balances toh Level 1 mein bhi.</p>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 18: URGENCY CTA -->
<section class="content-section" style="background: var(--orange-lighter) !important; border-left: 4px solid var(--orange);">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Every Month on Tally = 10-15 Hours Lost. Migrate Today.</h2>
            <div class="content-text">
                
                <p>Desktop Tally = no remote access, manual GST, no bank auto-feed, no CRM integration, no mobile. QuickBooks exited India. Manual GST exports risk notices from GST Commissionerate Mumbai. Single-company migration in just 3-5 days.</p><p><strong>Patron migrates from Rs 14,999. <a href="tel:+919459456700">Call +91 945 945 6700</a> or <a href="https://wa.me/919459456700?text=Hi%2C%20I%20need%20Tally%20to%20Zoho%20migration%20in%20Mumbai." target="_blank">WhatsApp us</a>. Free Migration Assessment.</strong></p>

            </div>
        </div>
    </div>
</section>

<!-- CONCLUSION + CTA BLOCK (Dark) -->
<section class="content-section" style="background: var(--blue) !important;">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title" style="color:#FFFFFF !important;">Your Data, Migrated Accurately to the Cloud</h2>
            <div class="content-text" style="text-align:left;">
                
                <p style="color:rgba(255,255,255,0.85);">CA-led Tally to Zoho Books migration ensures accurate data transfer, seamless GST compliance, and zero-downtime transition. ETL methodology with trial balance matching and parallel-run guarantee for Mumbai businesses across BKC, Andheri, Powai, Lower Parel, Nariman Point.</p><p style="color:rgba(255,255,255,0.85);">Patron Accounting, Marine Lines, Mumbai. 15+ years, 10,000+ businesses, 4.9 Google rating. If Zoho TB doesn't match Tally, you don't go live until it does.</p>

            </div>
            <div style="display:flex;gap:14px;flex-wrap:wrap;margin-top:24px;">
                <a href="tel:+919459456700" style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:var(--orange);color:#fff;border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#128222; Call +91 945 945 6700</a>
                <a href="https://wa.me/919459456700?text=Hi%2C%20I%20need%20Tally%20to%20Zoho%20migration%20in%20Mumbai.%20Please%20call%20me." target="_blank" style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:#25D366;color:#fff;border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#128172; WhatsApp Us</a>
                <a href="mailto:sales@patronaccounting.com?subject=Enquiry%20for%20Tally%20to%20Zoho%20Migration%20Mumbai&body=Hello%20Patron%20Accounting%20Team%2C%0A%0AI%20need%20Tally%20to%20Zoho%20migration%20in%20Mumbai.%0A%0APlease%20get%20in%20touch.%0A%0AThank%20you." style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:transparent;color:#fff;border:2px solid rgba(255,255,255,0.3);border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#9993;&#65039; Email Us</a>
            </div>
            <p style="color:rgba(255,255,255,0.7);font-size:13px;margin-top:16px;">Book a Free Consultation - No Obligation.</p>
        </div>
    </div>
</section>

<!-- GSTAT STATE BENCH CITY PAGES (32 Pages) -->
<section class="content-section" style="padding:48px 32px;background:var(--gray-50);">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title" style="text-align:center;margin-bottom:12px;">Tally to Zoho Migration Across India</h2>
            <p style="text-align:center;color:var(--text-muted);font-size:15px;margin-bottom:40px;">Patron offers CA-led Tally to Zoho migration in 8 major cities.</p>
       
            <div class="pa-city-block" style="margin-bottom:40px;"><div class="pa-city-grid"><a href="/tally-to-zoho-migration/pune" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Pune</div><div class="pa-card-sub">Maharashtra</div></div></a><div class="pa-city-card" style="opacity:0.6; pointer-events:none; border:2px solid var(--orange); position:relative;"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Mumbai</div><div class="pa-card-sub">Maharashtra</div></div><span style="position:absolute; top:6px; right:8px; font-size:10px; color:var(--orange); font-weight:700; text-transform:uppercase; letter-spacing:0.5px;">You're here</span></div><a href="#" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Bangalore</div><div class="pa-card-sub">Karnataka</div></div></a><a href="#" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Hyderabad</div><div class="pa-card-sub">Telangana</div></div></a><a href="#" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Chennai</div><div class="pa-card-sub">Tamil Nadu</div></div></a><a href="#" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Kolkata</div><div class="pa-card-sub">West Bengal</div></div></a></div></div><div class="pa-city-block"><div class="pa-block-title">Related Services in Mumbai</div><div class="pa-block-sub">Accounting and cloud migration</div><div class="pa-cross-grid"><a href="/zoho-books-accounting" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Zoho Books Accounting</div><div class="pa-card-sub">India</div></div></a><a href="/tally-accounting" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Tally Accounting</div><div class="pa-card-sub">India</div></div></a><a href="/accounting-services/mumbai" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Accounting Services</div><div class="pa-card-sub">Mumbai</div></div></a><a href="/gst-registration/mumbai" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">GST Registration</div><div class="pa-card-sub">Mumbai</div></div></a><a href="/gst-returns/mumbai" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">GST Returns</div><div class="pa-card-sub">Mumbai</div></div></a><a href="/income-tax-return" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Income Tax Return</div><div class="pa-card-sub">India</div></div></a></div></div>
        </div>
    </div>
</section>

<!-- CONTENT FRESHNESS FOOTER -->
<section class="content-section" style="padding:32px;">
    <div class="content-container">
        <div class="text-content" style="font-size:13px;color:var(--text-muted);">
            <p><strong>Content Created:</strong> 20 March 2026 &nbsp;|&nbsp; <strong>Last Updated:</strong> <span id="lastUpdatedFooter">20 March 2026</span> &nbsp;|&nbsp; <strong>Next Review:</strong> 20 June 2026 &nbsp;|&nbsp; <strong>Reviewed By:</strong> CA &amp; CS Team, Patron Accounting LLP</p>
            <p>This page is reviewed quarterly (Freshness Tier 1) to reflect Zoho Books feature updates, pricing changes, GST portal integration enhancements, and migration methodology improvements. Next review: June 2026.</p>
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
