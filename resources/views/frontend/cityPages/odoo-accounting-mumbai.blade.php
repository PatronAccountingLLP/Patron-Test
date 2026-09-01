
@extends('layouts.service-app')

<!-- External Dependencies (loaded by master layout in production) -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Barlow:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,400&family=DM+Sans:opsz,wght@9..40,400;9..40,500;9..40,600;9..40,700&display=swap" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

@section('meta')
    <title>Odoo Accounting in Mumbai - Setup, Training & ERP</title>
    <meta name="description" content="CA-led Odoo accounting in Mumbai. GST e-invoice, e-way bill, GSTR filing, Indian localization setup, Odoo ERP bookkeeping for BKC, Andheri, Powai. Call +91 945 945 6700.">
    <link rel="canonical" href="/odoo-accounting/mumbai">
    <meta name="robots" content="index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1">
    <meta property="og:title" content="Odoo Accounting in Mumbai - Setup, Training & ERP">
    <meta property="og:description" content="CA-led Odoo accounting in Mumbai. GST e-invoice, e-way bill, GSTR filing, Indian localization setup, Odoo ERP bookkeeping for BKC, Andheri, Powai. Call +91 945 945 6700.">
    <meta property="og:url" content="/odoo-accounting/mumbai">
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="Patron Accounting">
    <meta property="og:image" content="https://www.patronaccounting.com/images/og-default-square.png">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="1200">
    <meta property="og:image:type" content="image/png">
    <meta property="og:image:secure_url" content="https://www.patronaccounting.com/images/og-default-square.png">
    <meta property="og:image:alt" content="Patron Accounting - partner you can rely on">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Odoo Accounting in Mumbai - Setup, Training & ERP">
    <meta name="twitter:description" content="CA-led Odoo accounting in Mumbai. GST e-invoice, e-way bill, GSTR filing, Indian localization setup, Odoo ERP bookkeeping for BKC, Andheri, Powai. Call +91 945 945 6700.">
    <meta name="twitter:image" content="https://www.patronaccounting.com/images/og-default-square.png">
@endsection

@section('schema')
    <script type="application/ld+json">{
  "@context": "https://schema.org",
  "@graph": [
    {
      "@type": "Service",
      "name": "Odoo Accounting Services in Mumbai",
      "description": "CA-led Odoo accounting in Mumbai. GST e-invoice, e-way bill, GSTR filing, Indian localization setup, Odoo ERP bookkeeping for BKC, Andheri, Powai. Call +91 945 945 6700.",
      "url": "https://www.patronaccounting.com/odoo-accounting/mumbai",
      "serviceType": "Odoo Accounting Services in Mumbai",
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
        "url": "https://www.patronaccounting.com/odoo-accounting/mumbai",
        "price": "10000"
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
          "name": "Odoo Accounting Services for India",
          "item": "https://www.patronaccounting.com/odoo-accounting"
        },
        {
          "@type": "ListItem",
          "position": 3,
          "name": "Odoo Accounting Services in Mumbai",
          "item": "https://www.patronaccounting.com/odoo-accounting/mumbai"
        }
      ]
    },
    {
      "@type": "FAQPage",
      "mainEntity": [
        {
          "@type": "Question",
          "name": "What is Odoo accounting and how does it work?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Financial module within Odoo ERP. l10n_in provides GST config, e-invoice, e-way bill, GSTR filing, TDS/TCS. Natively integrated with Sales, Purchase, Inventory, Manufacturing, HR, CRM - sales order auto-creates invoice with correct GST + e-invoice + e-way bill. Zero manual re-entry."
          }
        },
        {
          "@type": "Question",
          "name": "Is Odoo GST-compliant for Indian businesses?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Yes. l10n_in: CGST/SGST/IGST at all rates. Fiscal positions for auto intra/inter-state. HSN/SAC. e-Invoice NIC portal. e-Way bill. GSTR-1/3B/9 with GSTN connectivity (Odoo 18/19). GSTR-2B reconciliation for ITC. TDS/TCS. Patron validates all GST settings for Mumbai businesses."
          }
        },
        {
          "@type": "Question",
          "name": "How much does Odoo accounting cost in Mumbai?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Software: Community free; Enterprise ~$24.90/user/month. CA-led bookkeeping: Rs 10,000-20,000 (small); Rs 20,000-75,000 (SME multi-module); Rs 1,00,000+ (enterprise). Implementation + ongoing: Rs 50,000-3,00,000/month depending on modules and complexity."
          }
        },
        {
          "@type": "Question",
          "name": "How does Odoo compare to Tally and Zoho Books?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Odoo = full ERP with 50+ integrated modules. Tally = desktop accounting with strong inventory. Zoho Books = cloud accounting within Zoho ecosystem. Odoo best when you want one platform for accounting + sales + inventory + manufacturing + HR + CRM. Patron helps evaluate and migrate between all three."
          }
        },
        {
          "@type": "Question",
          "name": "Can Odoo generate e-invoices and e-way bills?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Yes. NIC portal API connected via GSP (BVM/Tera). e-Invoices generated from Odoo invoices with IRN + QR auto-populated. e-Way bills for consignments > Rs 50,000 with Part A/B details in Odoo. Validation checks before submission catch HSN/fiscal position errors."
          }
        },
        {
          "@type": "Question",
          "name": "Is Odoo suitable for small businesses in Mumbai?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Yes. Community edition is free and open-source. Enterprise features (CRM, inventory, GST) without enterprise pricing. Modules added incrementally as business grows. Patron CA-led bookkeeping starts Rs 10,000/month - affordable for small Mumbai businesses. Quick Answers Odoo pe accounting kaise hota hai? l10n_in module install karo - GST tax groups, HSN, e-invoice sab auto set. Sales order se invoice, PO se bill - sab connected. Odoo free hai kya? Community free (open-source). Enterprise ~$25/user/month. CA bookkeeping alag - Rs 10,000/month se start. Tally se Odoo pe shift? Haan - chart of accounts, contacts, items, balances, transactions migrate. Trial balance match hone ke baad go-live."
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
                        Odoo Accounting Services in Mumbai: CA-Led ERP Bookkeeping with Full GST Compliance
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
                            <p class="mb-0 text-dark benefit-paragraph"><span>Documents:</span> GST registration, PAN/TAN, bank statements, previous accounting data (Tally/Zoho/Excel), chart of accounts, HSN/SAC master</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Fees:</span> Starting from Rs 10,000/month for Odoo bookkeeping</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Eligibility:</span> Any Mumbai business using or planning to use Odoo ERP - startups, SMEs, manufacturers, traders, service companies</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Timeline:</span> Odoo accounting setup 5-10 days; monthly books by 10th; GST by deadline</p>
                        </div>
                    </div>

                    <p class="mb-4 fw-bold" style="color: var(--blue); font-size: 15px;">10,000+ Businesses Served | 4.9 Google Rating | From Rs 10,000/month</p>

                    <div class="hero-cta">
                        <a href="tel:+919459456700" class="btn-video text-decoration-none">
                            <span class="play-circle"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="width:14px;height:14px;color:#fff"><path d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/></svg></span>
                            Call +91 945 945 6700
                        </a>
                        <a href="mailto:sales@patronaccounting.com" class="btn-sample text-decoration-none">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="width:18px;height:18px;"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,12 2,6"/></svg>
                            Email Us
                        </a>
                        <a href="https://wa.me/919459456700?text=Hi%2C%20I%20need%20Odoo%20accounting%20services%20in%20Mumbai.%20Please%20call%20me." target="_blank" class="btn-sample text-decoration-none">
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
                                            'service'  => 'Odoo Accounting in Mumbai',
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
@include('partials.testimonials', [
    'heading'    => 'Real Stories from Real People',
    'lead'       => 'Hear how teams across industries use Patron to save time, cut costs, & stay in control.',
    'ctaTitle'   => 'Join 10,000+ Satisfied Businesses',
    'ctaText'    => 'CA-led Odoo ERP accounting with Indian localization, GST e-invoice, multi-module integration, and migration for Mumbai businesses.',
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
            <a href="#overview-section" class="toc-btn">Overview</a><a href="#what-section" class="toc-btn">What Is It</a><a href="#who-section" class="toc-btn">Who Needs It</a><a href="#services-section" class="toc-btn">Services</a><a href="#procedure-section" class="toc-btn">Process</a><a href="#documents-section" class="toc-btn">Documents</a><a href="#challenges-section" class="toc-btn">Challenges</a><a href="#fees-section" class="toc-btn">Fees</a><a href="#timeline-section" class="toc-btn">Timeline</a><a href="#benefits-section" class="toc-btn">Why Patron</a><a href="#comparison-section" class="toc-btn">By Industry</a><a href="#faq-section" class="toc-btn">FAQs</a>
        </div>
        <button class="toc-arrow right" id="tocRight">&#10095;</button>
    </div>
</div>

<!-- SECTION 2: OVERVIEW / INTRO + TL;DR -->
<section class="content-section" id="overview-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Odoo Accounting in Mumbai - Overview</h2>
            <div class="content-text">
                <div class="highlight-box" style="margin-bottom:20px;">
                    <p><strong>&#128204; TL;DR - Odoo Accounting in Mumbai Services at a Glance</strong></p>
                    <p>Odoo accounting covers end-to-end ERP financial management: <strong>Indian localization (l10n_in)</strong>, <strong>GST e-Invoice</strong> (NIC portal), <strong>e-Way bill</strong>, <strong>GSTR-1/3B/9</strong> filing, <strong>TDS/TCS</strong>, bank reconciliation, multi-company support, and integration with Sales, Purchase, Inventory, Manufacturing, HR, CRM. Odoo 18/19 provides direct GSTN connectivity.</p><div class="table-responsive-wrapper" style="margin-top:16px;"><table><thead><tr><th>Parameter</th><th>Detail</th></tr></thead><tbody><tr><td>Platform</td><td>Odoo ERP (Community free / Enterprise licensed) - cloud or on-premise</td></tr><tr><td>Indian Module</td><td>l10n_in: Indian chart of accounts, GST tax groups, HSN/SAC, TDS/TCS</td></tr><tr><td>GST Features</td><td>e-Invoice (NIC), e-Way bill, GSTR-1/3B/9, GSTR-2B reconciliation, fiscal positions</td></tr><tr><td>Cost From</td><td>Rs 10,000/month (CA-led Odoo bookkeeping)</td></tr><tr><td>Integrations</td><td>Sales, Purchase, Inventory, Manufacturing, HR/Payroll, CRM, POS, eCommerce</td></tr><tr><td>Authority</td><td>GST Commissionerate Mumbai; Income Tax Dept; RoC Mumbai</td></tr></tbody></table></div></p>
                </div>
                <p>Odoo is the world's most-installed open-source ERP (12M+ users). For Mumbai businesses - <strong>Powai startups, Andheri MIDC manufacturers, BKC financial firms</strong> - Odoo offers modular, all-in-one management where accounting is natively integrated with every business function. <strong>l10n_in</strong> provides GST e-invoice, e-way bill, GSTR filing, TDS/TCS. Learn more about <a href="/odoo-accounting">Odoo Accounting across India</a>.</p>
                <p>Patron's Marine Lines office handles Odoo setup, Indian localization, and ongoing CA-led bookkeeping. Also see <a href="/zoho-books-accounting">Zoho Books Accounting</a> and <a href="/tally-accounting">Tally Accounting</a>.</p>
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
                <h2 class="section-title">What Is Odoo Accounting</h2>
                <div class="content-text what-is-definition">
                    
                    <p>Financial management module within <strong>Odoo ERP</strong> - open-source, modular platform covering accounting, sales, purchases, inventory, manufacturing, HR, CRM, ecommerce, and 50+ applications. <strong>l10n_in</strong> provides GST-compliant tax configuration, e-invoice/e-way bill, GSTR filing, TDS/TCS, and Indian chart of accounts.</p><p>Unlike standalone Tally or Zoho Books: a sales order auto-creates invoice with correct <strong>GST (CGST/SGST intra-state, IGST inter-state)</strong>, generates <strong>e-invoice via NIC</strong>, and creates <strong>e-way bill</strong> if &gt; Rs 50,000. Purchase order auto-creates vendor bill with ITC tracked for <strong>GSTR-2B reconciliation</strong>. Bank feeds with AI auto-matching. For multi-branch Mumbai businesses (BKC + Andheri + Bhiwandi): <strong>multi-company architecture</strong> with branch-wise books + consolidated reporting.</p>

                </div>
                <div class="highlight-box" style="margin-top:20px;">
                    <p><strong>Key Terms for Odoo Accounting in Mumbai:</strong></p>
                    <p><strong>l10n_in:</strong> Indian localization. Pre-configured chart of accounts, GST tax groups (0-28%), HSN/SAC, TDS/TCS sections. Foundation for GST compliance.</p><p><strong>Fiscal Positions:</strong> Auto tax switching. Intra-state = CGST+SGST. Inter-state = IGST. Based on customer/vendor location.</p><p><strong>e-Invoice + e-Way Bill:</strong> NIC portal API. IRN + QR auto-generated. e-Way bill for &gt; Rs 50,000. Validation before submission.</p><p><strong>GSTR-2B Reconciliation:</strong> Vendor bills matched against portal data for ITC verification. Odoo 18/19 feature.</p><p><strong>Multi-Module:</strong> Accounting connected to Sales, Purchase, Inventory, Manufacturing, HR, CRM, POS, eCommerce. Zero manual re-entry.</p>

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
                            <text x="100" y="170" font-size="10" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial, sans-serif">Odoo Accounting in Mumbai</text>
                        </svg>
                    </div>
                    <div class="illustration-badge">
                        <span>l10n_in + e-Invoice</span>
                        <strong>Odoo ERP Accounting</strong>
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
            <h2 class="section-title">Who Needs Odoo Accounting in Mumbai</h2>
            <div class="content-text">
                
                <p><strong>Manufacturing (Andheri MIDC, Thane-Belapur):</strong> Integrated production planning, BOM costing, inventory valuation, and financial reporting. Accounting + Sales + Purchase + Inventory + Manufacturing.</p><p><strong>Trading (Bhuleshwar, Crawford Market, Masjid):</strong> Purchase-to-payment and order-to-cash with automated GST. Multi-warehouse stock tracking. Real-time inventory valuation.</p><p><strong>Tech Startups (Powai, BKC, Lower Parel):</strong> Cloud ERP with subscription billing, project accounting, timesheet integration. Modern alternative to Tally/Zoho.</p><p><strong>Service Companies (Nariman Point):</strong> Project-based accounting with billable hours. Timesheet-to-invoice automation. Expense tracking.</p><p><strong>Ecommerce:</strong> Odoo eCommerce or Shopify integration. Automated invoicing + inventory. Payment gateway reconciliation.</p><p><strong>Companies Migrating from Tally/Zoho:</strong> Want full ERP ecosystem beyond standalone accounting. CA-led migration with trial balance matching.</p>

            </div>
            </div>
        </div>
    </div>
</section>

<!-- SECTION 5: OUR SERVICES -->
<section class="content-section" id="services-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Odoo Accounting Services Included</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Service</th><th>What We Do</th></tr></thead>
                    <tbody>
                        <tr><td>Indian Localization (l10n_in)</td><td>Indian chart of accounts. GST tax groups (CGST/SGST/IGST 0-28%). Fiscal positions for auto intra/inter-state. HSN/SAC mapped. TDS/TCS sections with threshold suggestions.</td></tr><tr><td>GST e-Invoice and e-Way Bill</td><td>NIC portal API connected (GSP: BVM/Tera). e-Invoices from Odoo invoices. IRN + QR auto-populated. e-Way bill for &gt; Rs 50,000. Validation checks before submission.</td></tr><tr><td>GST Return Filing (GSTR-1/3B/9)</td><td>GSTR-1 with B2B/B2CL/B2CS/CDNR/Export/HSN sections. GSTR-3B monthly summary. GSTR-9 annual. GSTR-2B reconciliation for ITC. Direct GSTN filing (Odoo 18/19).</td></tr><tr><td>CA-Led Monthly Bookkeeping</td><td>Daily recording: invoices, bills, payments, receipts, journals. Bank reconciliation (auto-matching). Expenses + approval workflows. Fixed assets + depreciation. Monthly P&amp;L, BS, Cash Flow, MIS.</td></tr><tr><td>Multi-Module Integration</td><td>Sales (order→invoice), Purchase (PO→bill), Inventory (COGS, stock valuation), Manufacturing (BOM, WIP), HR/Payroll (salary journals, TDS), CRM, POS, eCommerce. Zero re-entry.</td></tr><tr><td>Migration (Tally/Zoho/Excel)</td><td>Data from Tally/Zoho/Excel into Odoo. Chart of accounts mapped. Opening balances imported. Contacts, items, history migrated. Trial balance reconciled. Parallel run.</td></tr><tr><td>TDS/TCS Compliance</td><td>Sections configured in chart. Threshold suggestions on bills/invoices. S.194C/194J/194H/194I pre-configured. Returns data (24Q/26Q/27Q) generated.</td></tr><tr><td>Payroll and Maharashtra PT</td><td>Indian salary structure (Basic, HRA, DA). PF/ESI. PTRC deduction. Salary journals auto-posted. TDS S.192 on salary.</td></tr>

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
            <h2 class="section-title">6-Step Odoo Accounting Process in Mumbai</h2>
            <p class="section-subtitle" style="text-align:left;max-width:100%;">Walk-in at Patron's Marine Lines office or remote setup. Odoo implementation + ongoing CA-led bookkeeping from one team.</p>
        </header>
        <div class="steps-container">
            <div class="step-card"><div class="step-content"><span class="step-badge">Step 1</span><h3 class="step-title">Business Assessment and Module Planning</h3><p class="step-description">CA reviews industry, transaction volume, GST structure (single/multi-GSTIN), branch setup, workflows. Modules selected: Accounting + Sales + Purchase + Inventory (standard); Manufacturing, HR, POS, eCommerce as needed. Cloud vs on-premise. Walk-in Marine Lines.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Modules selected</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Architecture decided</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="15" y="5" width="90" height="70" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><line x1="30" y1="22" x2="85" y2="22" stroke="#F5A623" stroke-width="2.5" stroke-linecap="round"/><line x1="30" y1="35" x2="78" y2="35" stroke="#14365F" stroke-width="1.5" opacity="0.3"/><circle cx="85" cy="55" r="8" fill="#E8F5E9" stroke="#25D366" stroke-width="1"/><path d="M81 55l3 3 5-5" stroke="#25D366" stroke-width="1.5" stroke-linecap="round"/></svg></div><span class="illustration-label">Assessed</span><span class="step-number-large">01</span></div></div></div>
<div class="step-card"><div class="step-content"><span class="step-badge">Step 2</span><h3 class="step-title">Odoo Setup and Indian Localization</h3><p class="step-description">Instance created. l10n_in installed. Chart customised. GST tax groups + fiscal positions configured. HSN/SAC mapped. e-Invoice + e-Way bill API connected. GSTN portal linked. TDS/TCS sections. Company details + GSTIN + FY set.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>l10n_in configured</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>e-Invoice API live</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="15" y="5" width="90" height="70" rx="6" fill="#E8F5E9" stroke="#25D366" stroke-width="1.5"/><text x="60" y="22" font-size="5" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">Configured</text><rect x="25" y="30" width="70" height="18" rx="3" fill="#fff" stroke="#25D366" stroke-width="1"/><text x="60" y="42" font-size="5" fill="#14365F" text-anchor="middle" font-family="Arial">l10n_in + GST + e-Inv</text><text x="60" y="62" font-size="5" fill="#25D366" font-weight="600" text-anchor="middle" font-family="Arial">India Ready</text></svg></div><span class="illustration-label">Configured</span><span class="step-number-large">02</span></div></div></div>
<div class="step-card"><div class="step-content"><span class="step-badge">Step 3</span><h3 class="step-title">Data Migration (if applicable)</h3><p class="step-description">Existing data from Tally/Zoho/Excel migrated: chart of accounts, contacts, items, opening balances, history. Trial balance matched. GST verified against previous filings with GST Commissionerate Mumbai. Parallel run to validate accuracy.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Data migrated</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>TB matched</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="15" y="5" width="90" height="70" rx="6" fill="#FFF3E0" stroke="#F5A623" stroke-width="1.5"/><text x="60" y="22" font-size="5" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">Migrated</text><rect x="25" y="30" width="70" height="18" rx="3" fill="#fff" stroke="#F5A623" stroke-width="1"/><text x="60" y="42" font-size="5" fill="#14365F" text-anchor="middle" font-family="Arial">Tally/Zoho → Odoo</text><text x="60" y="62" font-size="5" fill="#F5A623" font-weight="600" text-anchor="middle" font-family="Arial">Trial Balance ✓</text></svg></div><span class="illustration-label">Migrated</span><span class="step-number-large">03</span></div></div></div>
<div class="step-card"><div class="step-content"><span class="step-badge">Step 4</span><h3 class="step-title">Daily Operations and Monthly Bookkeeping</h3><p class="step-description">Sales invoices from orders with auto GST + e-invoice + e-way bill. Vendor bills from POs. Bank reconciliation (auto-matching). Expenses tracked. Payroll journals posted. PTRC monthly. TDS by 7th. Monthly P&amp;L and BS by 10th.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Books by 10th</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>e-Invoices flowing</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="15" y="5" width="90" height="70" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><text x="60" y="22" font-size="5" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">Monthly Books</text><rect x="25" y="30" width="70" height="18" rx="3" fill="#E8F5E9" stroke="#25D366" stroke-width="1"/><text x="60" y="42" font-size="5" fill="#14365F" text-anchor="middle" font-family="Arial">Auto GST + Bank Recon</text><text x="60" y="62" font-size="5" fill="#14365F" font-weight="600" text-anchor="middle" font-family="Arial">All Automated</text></svg></div><span class="illustration-label">Booked</span><span class="step-number-large">04</span></div></div></div>
<div class="step-card"><div class="step-content"><span class="step-badge">Step 5</span><h3 class="step-title">GST Compliance and Filing</h3><p class="step-description">GSTR-1 from Odoo by 11th. GSTR-3B by 20th. GSTR-2B reconciliation for ITC verification. e-Invoice and e-way bill monitored. TDS quarterly. All filings with GST Commissionerate Mumbai tracked on compliance dashboard.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>GSTR filed from Odoo</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>ITC reconciled</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="15" y="5" width="90" height="70" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><rect x="25" y="15" width="70" height="10" rx="3" fill="#25D366" opacity="0.15"/><text x="60" y="23" font-size="5" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">GST Filed</text><text x="60" y="42" font-size="5" fill="#14365F" font-weight="600" text-anchor="middle" font-family="Arial">GSTR-1 + 3B + 2B Recon</text><text x="60" y="58" font-size="4" fill="#14365F" text-anchor="middle" font-family="Arial">Direct from Odoo</text></svg></div><span class="illustration-label">Filed</span><span class="step-number-large">05</span></div></div></div>
<div class="step-card"><div class="step-content"><span class="step-badge">Step 6</span><h3 class="step-title">Year-End and Financial Reporting</h3><p class="step-description">GSTR-9 annual. Income tax from Odoo P&amp;L. Tax audit S.44AB data. Depreciation schedules finalised. RoC filing for companies/LLPs (AOC-4, MGT-7). Statutory audit supported with Odoo trial balance, ledgers, schedules.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Year-end closed</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Audit-ready</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="15" y="5" width="90" height="70" rx="6" fill="#E8F5E9" stroke="#25D366" stroke-width="1.5"/><text x="60" y="22" font-size="6" fill="#14365F" font-weight="800" text-anchor="middle" font-family="Arial">Year-End Done</text><rect x="25" y="30" width="70" height="15" rx="3" fill="#fff" stroke="#25D366" stroke-width="1"/><text x="60" y="40" font-size="5" fill="#14365F" text-anchor="middle" font-family="Arial">GSTR-9 + Audit + RoC</text><text x="60" y="62" font-size="5" fill="#25D366" font-weight="600" text-anchor="middle" font-family="Arial">Compliant</text></svg></div><span class="illustration-label">Complete</span><span class="step-number-large">06</span></div></div></div>


        </div>
    </div>
</section>

<!-- SECTION 8: DOCUMENTS REQUIRED -->
<section class="content-section" id="documents-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Documents Required for Odoo Accounting</h2>
            <div class="content-text">
                
                <ul><li>GST Registration Certificate</li><li>PAN and TAN</li><li>Bank Statements</li><li>Previous Accounting Data (Tally backup / Zoho export / Excel)</li><li>Chart of Accounts (current)</li><li>HSN/SAC Code Master</li><li>Customer/Vendor Master + Item/Product Master</li><li>Previous Year Returns (GST + Income Tax)</li><li>NIC Portal API Credentials (for e-invoice)</li></ul><div class="highlight-box" style="margin-top:20px;"><p><strong>Mumbai-Specific:</strong> GSTIN per branch/location. Maharashtra PTRC/PTEC registration. Shops &amp; Establishment licence. Multi-branch: branch-wise GST details and inter-branch stock transfer docs.</p></div>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 9: CHALLENGES -->
<section class="content-section" id="challenges-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Common Odoo Accounting Challenges in Mumbai</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Challenge</th><th>Impact</th><th>How Patron Accounting Solves It</th></tr></thead>
                    <tbody>
                        <tr><td>l10n_in Configuration Complexity</td><td>GST tax groups (intra: CGST+SGST group; inter: IGST single), fiscal positions, HSN/SAC mapping, TDS/TCS sections. Misconfigured = incorrect GSTR-1. Many implementers lack CA understanding.</td><td>Patron CA validates every tax configuration against GST law before go-live. Fiscal positions tested per state.</td></tr><tr><td>e-Invoice and e-Way Bill API Issues</td><td>NIC portal API: GSP configuration, credentials, production activation. Timeout errors during peak. IRN failures from wrong HSN. e-Way bill rejections (missing Part B vehicle).</td><td>Daily e-invoice monitoring. API issues resolved proactively. HSN validation before generation. Part B tracked.</td></tr><tr><td>Migration from Tally/Zoho</td><td>Not just data migration - workflow transformation. Tally voucher-based vs Odoo journal-based. Opening balances must reconcile. GST history for ITC continuity.</td><td>CA-led migration: accounting accuracy, not just data completeness. Trial balance matched. Parallel run.</td></tr><tr><td>Multi-Module Data Flow Errors</td><td>Wrong inventory valuation (FIFO vs Average) cascades into incorrect COGS. Unreconciled payments distort BS. Wrong payroll accounts affect salary expense.</td><td>CA oversight of multi-module flow. Inventory method validated. Payment reconciliation enforced. Payroll accounts verified.</td></tr><tr><td>Odoo Version Management</td><td>Annual releases (17, 18, 19). Each adds India compliance (18: GST e-filing; 19: GSTR-2B). Older versions lack current features. Upgrade timing critical.</td><td>Patron evaluates upgrade timing. Manages version transitions without accounting disruption. Tests GST features per version.</td></tr>

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
            <h2 class="section-title">Odoo Accounting Fees in Mumbai - 2026</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Fee Component</th><th>Amount</th></tr></thead>
                    <tbody>
                        <tr><td>Odoo Bookkeeping Only (Small Business)</td><td>Rs 10,000 - Rs 20,000/month (5-7 days setup)</td></tr><tr><td>Odoo Bookkeeping (SME - Multi-Module)</td><td>Rs 20,000 - Rs 75,000/month (7-10 days)</td></tr><tr><td>Odoo Implementation + Ongoing Accounting</td><td>Rs 50,000 - Rs 3,00,000/month (10-21 days implementation)</td></tr><tr><td>Enterprise / Multi-Company</td><td>Rs 1,00,000+/month (15-30 days)</td></tr><tr><td>Odoo Software (separate)</td><td>Community: Free | Enterprise: ~$24.90/user/month on Odoo.sh</td></tr>

                    </tbody>
                </table>
                </div>
                <p style="margin-top:16px;font-size:13px;color:var(--text-muted);font-style:italic;">All fees and charges listed are indicative only and do not constitute a binding offer. Final amounts may vary depending on the volume of work and the complexity involved.</p>
                <p style="margin-top:16px;">Professional service charges for drafting, filing, and representation are separate from the statutory fees. The exact fee depends on the complexity of the case, disputed amount, and number of hearings required. Contact us for a detailed quote.</p>
                <p style="margin-top:16px;"><strong>Get a free Odoo Accounting in Mumbai consultation - <a href="tel:+919459456700">Call +91 945 945 6700</a> or <a href="https://wa.me/919459456700?text=Hi%2C%20I%20need%20Odoo%20accounting%20in%20Mumbai.%20Please%20call%20me." target="_blank">WhatsApp us</a>. No-obligation assessment.</strong></p>
            </div>
        </div>
    </div>
</section>

<!-- SECTION 11: TIMELINE -->
<section class="content-section" id="timeline-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Odoo Accounting Timeline</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Stage</th><th>Estimated Timeline</th></tr></thead>
                    <tbody>
                        <tr><td>Business Assessment</td><td>1-2 days (Marine Lines or remote)</td></tr><tr><td>Odoo Setup + l10n_in</td><td>3-5 days (configuration + API)</td></tr><tr><td>Data Migration (if applicable)</td><td>3-7 days (Tally/Zoho/Excel → Odoo)</td></tr><tr><td>Monthly Bookkeeping</td><td>By 10th (ongoing)</td></tr><tr><td>GSTR-1 / GSTR-3B</td><td>By 11th / 20th monthly</td></tr><tr><td>TDS Returns</td><td>Quarterly (24Q/26Q)</td></tr><tr><td>Year-End + GSTR-9</td><td>15-30 days (annual)</td></tr>

                    </tbody>
                </table>
                </div>
                <div class="highlight-box" style="margin-top:16px;">
                    
                    <p><strong>Why Odoo Now:</strong> Standalone accounting = manual re-entry between sales, inventory, and accounts. GST e-invoice errors from disconnected systems. ITC mismatches from unreconciled GSTR-2B. Odoo 18/19 provides direct GST e-filing older tools can't match. Setup in 5-10 days.</p>

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
            <h2 class="section-title">Why Choose Patron for Odoo Accounting in Mumbai</h2>
        </div>
        <div class="features-grid"><article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><h3 class="feature-title">Marine Lines Office</h3><p class="feature-text">Walk-in for Odoo assessment or remote setup. Accessible from BKC, Andheri MIDC, Powai, Lower Parel, Nariman Point, Thane.</p></article><article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4"/></svg></div><h3 class="feature-title">Implementation + Accounting</h3><p class="feature-text">Same team configures Odoo AND does monthly bookkeeping. l10n_in setup validated by CA, not just IT. No handoff between implementer and accountant.</p></article><article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg></div><h3 class="feature-title">GST + e-Invoice + TDS</h3><p class="feature-text">l10n_in configuration validated against GST law. e-Invoice API monitored daily. GSTR-2B reconciliation for ITC. TDS sections pre-configured. PTRC handled.</p></article><article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><path d="M12 6v6l4 2"/></svg></div><h3 class="feature-title">10,000+ Businesses</h3><p class="feature-text">Including Odoo users, Tally-to-Odoo migrations, and multi-module implementations across Mumbai. 15+ years. 4.9 Google rating.</p></article></div>
    </div>
</section>

<!-- SECTION 12A: SOCIAL PROOF -->
<section class="content-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Trusted by 10,000+ Businesses Across India</h2>
            <div class="content-text">
                
                <p><strong>10,000+ Businesses | 4.9 Google Rating | 50,000+ Docs Filed | 15+ Years</strong></p><p>Including Odoo ERP users, manufacturers, trading companies, and tech startups across Mumbai. Offices in Pune, Mumbai, Delhi, Gurugram.</p>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 13: SELF-FILING vs PROFESSIONAL COMPARISON -->
<section class="content-section" id="comparison-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Odoo Accounting by Industry in Mumbai</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Industry</th><th>Odoo Modules</th><th>Mumbai Note</th></tr></thead>
                    <tbody>
                        <tr><td>Manufacturing</td><td>Accounting + Sales + Purchase + Inventory + Manufacturing (BOM/MRP)</td><td>Andheri MIDC, Thane-Belapur; production costing, WIP</td></tr><tr><td>Trading / Wholesale</td><td>Accounting + Sales + Purchase + Inventory</td><td>Bhuleshwar/Crawford Market; stock valuation, purchase-to-payment</td></tr><tr><td>IT / Software / SaaS</td><td>Accounting + Sales + Project + Timesheet + Subscriptions</td><td>Powai/BKC/Lower Parel; billable hours, subscription revenue</td></tr><tr><td>Retail</td><td>Accounting + POS + Inventory + eCommerce</td><td>Pan-Mumbai; real-time POS-to-accounting flow</td></tr><tr><td>Services / Consulting</td><td>Accounting + Project + Timesheet + HR</td><td>Nariman Point/Fort; project-based revenue recognition</td></tr>

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
            <h2 class="section-title">Related Accounting and ERP Services</h2>
            <div class="content-text">
                
                <ul><li><a href="/odoo-accounting">Odoo Accounting in India</a></li><li><a href="/zoho-books-accounting">Zoho Books Accounting</a></li><li><a href="/tally-accounting">Tally Accounting</a></li><li><a href="/accounting-services/mumbai">Accounting Services in Mumbai</a></li><li><a href="/gst-registration/mumbai">GST Registration in Mumbai</a></li><li><a href="/tds-return-filing-24q">TDS Return Filing</a></li></ul>

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
                
                <p><strong>GST via Odoo:</strong> l10n_in: Indian chart, GST tax groups (CGST/SGST/IGST 0-28%), fiscal positions for auto intra/inter-state. e-Invoice NIC API. e-Way bill. GSTR-1/3B/9 filing. GSTR-2B reconciliation. Reverse charge. HSN/SAC mandatory.</p><p><strong>TDS/TCS:</strong> Sections on chart. Threshold suggestions on invoices/bills. S.194C/194J/194H/194I/194Q/206C. Returns data 24Q/26Q/27Q. TDS certificates.</p><p><strong>Income Tax + Audit:</strong> P&amp;L and BS from Odoo. S.44AB audit data. Depreciation (WDV) from Assets module. RoC filing data (AOC-4, MGT-7).</p><p><strong>Maharashtra:</strong> PT Act 1975 (PTRC in payroll). Shops &amp; Establishments. Maharashtra SGST.</p><p><strong>Portals:</strong> <a href="https://www.gst.gov.in" target="_blank" rel="noopener">GST Portal</a> | <a href="https://einvoice1.gst.gov.in" target="_blank" rel="noopener">e-Invoice NIC</a></p>

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
                    <h2 class="faq-expanded__title">FAQs - Odoo Accounting in Mumbai</h2>
                    <p class="faq-expanded__lead">Answers to common questions. Call +91 945 945 6700.</p>
                    @include('partials.bigin-form', [
                        'variant'  => 'compact',
                        'service'  => 'Odoo Accounting in Mumbai',
                        'city'     => 'Mumbai',
                    ])
                </aside>
                <div class="faq-expanded__list">
                    <div class="faq-expanded__item" id="faq-1">
                        <h3 class="faq-expanded__q">What is Odoo accounting and how does it work?</h3>
                        <div class="faq-expanded__a"><p>Financial module within Odoo ERP. l10n_in provides GST config, e-invoice, e-way bill, GSTR filing, TDS/TCS. Natively integrated with Sales, Purchase, Inventory, Manufacturing, HR, CRM - sales order auto-creates invoice with correct GST + e-invoice + e-way bill. Zero manual re-entry.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-2">
                        <h3 class="faq-expanded__q">Is Odoo GST-compliant for Indian businesses?</h3>
                        <div class="faq-expanded__a"><p>Yes. l10n_in: CGST/SGST/IGST at all rates. Fiscal positions for auto intra/inter-state. HSN/SAC. e-Invoice NIC portal. e-Way bill. GSTR-1/3B/9 with GSTN connectivity (Odoo 18/19). GSTR-2B reconciliation for ITC. TDS/TCS. Patron validates all GST settings for Mumbai businesses.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-3">
                        <h3 class="faq-expanded__q">How much does Odoo accounting cost in Mumbai?</h3>
                        <div class="faq-expanded__a"><p>Software: Community free; Enterprise ~$24.90/user/month. CA-led bookkeeping: Rs 10,000-20,000 (small); Rs 20,000-75,000 (SME multi-module); Rs 1,00,000+ (enterprise). Implementation + ongoing: Rs 50,000-3,00,000/month depending on modules and complexity.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-4">
                        <h3 class="faq-expanded__q">How does Odoo compare to Tally and Zoho Books?</h3>
                        <div class="faq-expanded__a"><p>Odoo = full ERP with 50+ integrated modules. Tally = desktop accounting with strong inventory. Zoho Books = cloud accounting within Zoho ecosystem. Odoo best when you want one platform for accounting + sales + inventory + manufacturing + HR + CRM. Patron helps evaluate and migrate between all three.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-5">
                        <h3 class="faq-expanded__q">Can Odoo generate e-invoices and e-way bills?</h3>
                        <div class="faq-expanded__a"><p>Yes. NIC portal API connected via GSP (BVM/Tera). e-Invoices generated from Odoo invoices with IRN + QR auto-populated. e-Way bills for consignments > Rs 50,000 with Part A/B details in Odoo. Validation checks before submission catch HSN/fiscal position errors.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-6">
                        <h3 class="faq-expanded__q">Is Odoo suitable for small businesses in Mumbai?</h3>
                        <div class="faq-expanded__a"><p>Yes. Community edition is free and open-source. Enterprise features (CRM, inventory, GST) without enterprise pricing. Modules added incrementally as business grows. Patron CA-led bookkeeping starts Rs 10,000/month - affordable for small Mumbai businesses.</p></div>
                    </div>
                </div>
            </div>


            <!-- Quick Answers -->
            <div class="highlight-box" style="margin-top:32px;">
                <p><strong>Quick Answers</strong></p>
                <p><strong>Odoo pe accounting kaise hota hai?</strong> l10n_in module install karo - GST tax groups, HSN, e-invoice sab auto set. Sales order se invoice, PO se bill - sab connected.</p><p><strong>Odoo free hai kya?</strong> Community free (open-source). Enterprise ~$25/user/month. CA bookkeeping alag - Rs 10,000/month se start.</p><p><strong>Tally se Odoo pe shift?</strong> Haan - chart of accounts, contacts, items, balances, transactions migrate. Trial balance match hone ke baad go-live.</p>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 18: URGENCY CTA -->
<section class="content-section" style="background: var(--orange-lighter) !important; border-left: 4px solid var(--orange);">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Manual Re-Entry = Errors + ITC Mismatch. Go Odoo Today.</h2>
            <div class="content-text">
                
                <p>Standalone accounting = manual data re-entry between sales, inventory, accounts. GST e-invoice errors from disconnected systems. ITC mismatches from unreconciled GSTR-2B = demand notices from GST Commissionerate Mumbai. Odoo 18/19 provides direct GST e-filing that older tools can't match.</p><p><strong>Patron completes Odoo setup in 5-10 days. <a href="tel:+919459456700">Call +91 945 945 6700</a> or <a href="https://wa.me/919459456700?text=Hi%2C%20I%20need%20Odoo%20accounting%20in%20Mumbai." target="_blank">WhatsApp us</a>. From Rs 10,000/month.</strong></p>

            </div>
        </div>
    </div>
</section>

<!-- CONCLUSION + CTA BLOCK (Dark) -->
<section class="content-section" style="background: var(--blue) !important;">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title" style="color:#FFFFFF !important;">Your ERP, Financially Accurate and GST-Compliant</h2>
            <div class="content-text" style="text-align:left;">
                
                <p style="color:rgba(255,255,255,0.85);">CA-led Odoo accounting in Mumbai integrates every transaction from operations to financial statements. l10n_in with GST e-invoice, e-way bill, GSTR filing, TDS/TCS, and multi-company support. For businesses across BKC, Andheri MIDC, Powai, Lower Parel, Nariman Point.</p><p style="color:rgba(255,255,255,0.85);">Patron Accounting, Marine Lines, Mumbai. Odoo implementation + ongoing CA-led bookkeeping from one team. 15+ years, 10,000+ businesses, 4.9 Google rating.</p>

            </div>
            <div style="display:flex;gap:14px;flex-wrap:wrap;margin-top:24px;">
                <a href="tel:+919459456700" style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:var(--orange);color:#fff;border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#128222; Call +91 945 945 6700</a>
                <a href="https://wa.me/919459456700?text=Hi%2C%20I%20need%20Odoo%20accounting%20in%20Mumbai.%20Please%20call%20me." target="_blank" style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:#25D366;color:#fff;border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#128172; WhatsApp Us</a>
                <a href="mailto:sales@patronaccounting.com?subject=Enquiry%20for%20Odoo%20Accounting%20Mumbai&body=Hello%20Patron%20Accounting%20Team%2C%0A%0AI%20need%20Odoo%20accounting%20services%20in%20Mumbai.%0A%0APlease%20get%20in%20touch.%0A%0AThank%20you." style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:transparent;color:#fff;border:2px solid rgba(255,255,255,0.3);border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#9993;&#65039; Email Us</a>
            </div>
            <p style="color:rgba(255,255,255,0.7);font-size:13px;margin-top:16px;">Book a Free Consultation - No Obligation.</p>
        </div>
    </div>
</section>

<!-- GSTAT STATE BENCH CITY PAGES (32 Pages) -->
<section class="content-section" style="padding:48px 32px;background:var(--gray-50);">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title" style="text-align:center;margin-bottom:12px;">Odoo Accounting Across India</h2>
            <p style="text-align:center;color:var(--text-muted);font-size:15px;margin-bottom:40px;">Patron offers CA-led Odoo accounting in 8 major cities.</p>
         
            <div class="pa-city-block" style="margin-bottom:40px;"><div class="pa-city-grid"><a href="/odoo-accounting/pune" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Pune</div><div class="pa-card-sub">Maharashtra</div></div></a><div class="pa-city-card" style="opacity:0.6; pointer-events:none; border:2px solid var(--orange); position:relative;"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Mumbai</div><div class="pa-card-sub">Maharashtra</div></div><span style="position:absolute; top:6px; right:8px; font-size:10px; color:var(--orange); font-weight:700; text-transform:uppercase; letter-spacing:0.5px;">You're here</span></div><a href="/odoo-accounting/delhi" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Delhi</div><div class="pa-card-sub">Delhi NCR</div></div></a><a href="/odoo-accounting/gurugram" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Gurugram</div><div class="pa-card-sub">Haryana</div></div></a><a href="#" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Bangalore</div><div class="pa-card-sub">Karnataka</div></div></a><a href="#" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Hyderabad</div><div class="pa-card-sub">Telangana</div></div></a><a href="#" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Chennai</div><div class="pa-card-sub">Tamil Nadu</div></div></a><a href="#" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Kolkata</div><div class="pa-card-sub">West Bengal</div></div></a></div></div><div class="pa-city-block"><div class="pa-block-title">Related Services in Mumbai</div><div class="pa-block-sub">Accounting and ERP services</div><div class="pa-cross-grid"><a href="/zoho-books-accounting" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Zoho Books</div><div class="pa-card-sub">India</div></div></a><a href="/tally-accounting" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Tally Accounting</div><div class="pa-card-sub">India</div></div></a><a href="/accounting-services/mumbai" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Accounting Services</div><div class="pa-card-sub">Mumbai</div></div></a><a href="/gst-registration/mumbai" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">GST Registration</div><div class="pa-card-sub">Mumbai</div></div></a><a href="/tds-return-filing-24q" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">TDS Returns</div><div class="pa-card-sub">India</div></div></a><a href="/statutory-audit" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Statutory Audit</div><div class="pa-card-sub">India</div></div></a></div></div>
        </div>
    </div>
</section>

<!-- CONTENT FRESHNESS FOOTER -->
<section class="content-section" style="padding:32px;">
    <div class="content-container">
        <div class="text-content" style="font-size:13px;color:var(--text-muted);">
            <p><strong>Content Created:</strong> 20 March 2026 &nbsp;|&nbsp; <strong>Last Updated:</strong> <span id="lastUpdatedFooter">20 March 2026</span> &nbsp;|&nbsp; <strong>Next Review:</strong> 20 June 2026 &nbsp;|&nbsp; <strong>Reviewed By:</strong> CA &amp; CS Team, Patron Accounting LLP</p>
            <p>This page is reviewed quarterly (Freshness Tier 1) to reflect Odoo version updates, Indian localization changes, GST e-invoice/e-way bill amendments, and pricing updates. Next review: June 2026.</p>
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
