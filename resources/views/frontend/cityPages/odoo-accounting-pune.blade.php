
@extends('layouts.service-app')

<!-- External Dependencies (loaded by master layout in production) -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Barlow:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,400&family=DM+Sans:opsz,wght@9..40,400;9..40,500;9..40,600;9..40,700&display=swap" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

@section('meta')
    <title>Odoo Accounting in Pune - Setup, Training & ERP</title>
    <meta name="description" content="CA-managed Odoo accounting in Pune. GST-compliant ERP setup, bookkeeping, e-invoicing, and returns for Hinjewadi, Kharadi, Chakan businesses. Call +91 945 945 6700.">
    <link rel="canonical" href="/odoo-accounting/pune">
    <meta name="robots" content="index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1">
    <meta property="og:title" content="Odoo Accounting in Pune - Setup, Training & ERP">
    <meta property="og:description" content="CA-managed Odoo accounting in Pune. GST-compliant ERP setup, bookkeeping, e-invoicing, and returns for Hinjewadi, Kharadi, Chakan businesses. Call +91 945 945 6700.">
    <meta property="og:url" content="/odoo-accounting/pune">
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="Patron Accounting">
    <meta property="og:image" content="https://www.patronaccounting.com/images/og-default-square.png">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="1200">
    <meta property="og:image:type" content="image/png">
    <meta property="og:image:secure_url" content="https://www.patronaccounting.com/images/og-default-square.png">
    <meta property="og:image:alt" content="Patron Accounting - partner you can rely on">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Odoo Accounting in Pune - Setup, Training & ERP">
    <meta name="twitter:description" content="CA-managed Odoo accounting in Pune. GST-compliant ERP setup, bookkeeping, e-invoicing, and returns for Hinjewadi, Kharadi, Chakan businesses. Call +91 945 945 6700.">
    <meta name="twitter:image" content="https://www.patronaccounting.com/images/og-default-square.png">
@endsection

@section('schema')
    <script type="application/ld+json">{
  "@context": "https://schema.org",
  "@graph": [
    {
      "@type": "Service",
      "name": "Odoo Accounting Services in Pune",
      "description": "CA-managed Odoo accounting in Pune. GST-compliant ERP setup, bookkeeping, e-invoicing, and returns for Hinjewadi, Kharadi, Chakan businesses. Call +91 945 945 6700.",
      "url": "https://www.patronaccounting.com/odoo-accounting/pune",
      "serviceType": "Odoo Accounting Services in Pune",
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
        "url": "https://www.patronaccounting.com/odoo-accounting/pune",
        "price": "4999"
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
          "name": "Odoo Accounting Services in Pune",
          "item": "https://www.patronaccounting.com/odoo-accounting/pune"
        }
      ]
    },
    {
      "@type": "FAQPage",
      "mainEntity": [
        {
          "@type": "Question",
          "name": "Which GST office handles Pune businesses using Odoo?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "The GST Commissionerate, Pune handles all GST matters for Pune businesses regardless of accounting software. Odoo's GSTR-1/3B reports can be filed directly to the GST portal via API or exported for upload. Patron's CA reviews every return before submission."
          }
        },
        {
          "@type": "Question",
          "name": "Can I get Odoo accounting managed online from Pune?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Yes. Patron provides fully remote Odoo accounting management for Pune businesses. Since Odoo is cloud-based, your CA accesses the same instance. Pune clients can also visit RTC Silver, Wagholi for in-person consultations."
          }
        },
        {
          "@type": "Question",
          "name": "What is the cost of Odoo accounting services in Pune?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "CA-managed Odoo accounting starts from Rs 4,999 per month for startups. Growth businesses pay Rs 9,999 per month. Manufacturing clients with inventory and production costing pay Rs 14,999 per month. One-time setup ranges from Rs 29,999 to Rs 99,999. Odoo software license is billed separately by Odoo."
          }
        },
        {
          "@type": "Question",
          "name": "How long does Odoo accounting setup take in Pune?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "A standard Odoo accounting setup for a Pune SME takes 7-15 working days including Chart of Accounts design, GST configuration, data migration from Tally or other systems, module integration, and team training. Complex manufacturing setups may take 15-20 working days."
          }
        },
        {
          "@type": "Question",
          "name": "Does Odoo support e-invoicing for Pune companies?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Yes. Odoo supports Indian GST e-invoicing via NIC portal integration. Businesses with turnover above Rs 5 crore must generate e-invoices. Odoo creates the IRN directly through the API. Patron configures the e-invoicing setup and verifies compliance."
          }
        },
        {
          "@type": "Question",
          "name": "Is Odoo better than Tally for accounting?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Tally excels as standalone desktop accounting with deep Indian tax compliance. Odoo provides integrated ERP with accounting connected to inventory, manufacturing, CRM, and sales. For Pune businesses needing only accounting, Tally may suffice. For ERP-integrated operations, Odoo is the better choice. Patron supports both."
          }
        },
        {
          "@type": "Question",
          "name": "Can a CA manage my Odoo accounting remotely?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Yes. Odoo's cloud architecture enables remote CA access. Patron's Pune CAs log into your Odoo to process transactions, reconcile banks, prepare returns, and generate reports within Odoo's secure, role-based permission system."
          }
        },
        {
          "@type": "Question",
          "name": "Can historical data from Tally be migrated into Odoo?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Yes. Patron provides data migration from Tally ERP 9, Tally Prime, Zoho Books, Excel, or any legacy system into Odoo. Opening balances and historical transactions are imported with CA-verified trial balance reconciliation. Quick Answers Odoo mein GST kaise set karein? Fiscal Position configure karein - intra-state ke liye CGST+SGST, inter-state ke liye IGST. Patron ka CA verify karega. Odoo accounting ka cost kitna hai Pune mein? Rs 4,999/month se start. Setup Rs 29,999 se. Kya Odoo e-invoicing support karta hai? Haan. NIC portal se API integration. Turnover Rs 5 crore se zyada hona chahiye. Tally se Odoo mein migration ho sakta hai? Haan. Patron ka CA data migrate karke trial balance verify karega."
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
                        Odoo Accounting Services in Pune: CA-Managed ERP Accounting for Growing Businesses
                    </h1>

                    <div class="expert-attribution-box">
                        <span class="eab-check"><svg width="16" height="16" viewBox="0 0 24 24" fill="currentColor"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg></span>
                        <span class="eab-title">Reviewed by CA and CS Team, Patron Accounting LLP</span>
                        <span class="eab-meta">
                            <span>ICAI & ICSI Registered</span><span class="eab-sep">|</span>
                            <span>15+ Years Experience</span><span class="eab-sep">|</span>
                            <span>Last Updated: <span id="lastUpdated">18 March 2026</span></span>
                        </span>
                        <a href="#" class="eab-link">Verify Credentials &rarr;</a>
                    </div>

                    <div class="mb-4">
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Documents:</span> PAN, GST certificate, bank statements, Tally/legacy data backup, Chart of Accounts</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Fees:</span> Starting from Rs 4,999/month for Odoo accounting management in Pune</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Eligibility:</span> All Pune businesses using or planning to use Odoo ERP for accounting</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Timeline:</span> Odoo accounting setup in 7-15 working days; monthly compliance thereafter</p>
                        </div>
                    </div>

                    <p class="mb-4 fw-bold" style="color: var(--blue); font-size: 15px;">Visit our Pune office or get started online - Call +91 945 945 6700</p>

                    <div class="hero-cta">
                        <a href="tel:+919459456700" class="btn-video text-decoration-none">
                            <span class="play-circle"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="width:14px;height:14px;color:#fff"><path d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/></svg></span>
                            Call +91 945 945 6700
                        </a>
                        <a href="mailto:sales@patronaccounting.com" class="btn-sample text-decoration-none">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="width:18px;height:18px;"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,12 2,6"/></svg>
                            Email Us
                        </a>
                        <a href="https://wa.me/919459456700?text=Hello%2C%20I%20just%20visited%20your%20Odoo%20Accounting%20in%20Pune%20page.%20I%20would%20like%20to%20know%20more%20about%20it." target="_blank" class="btn-sample text-decoration-none" rel="noopener">
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
                                            'service'  => 'Odoo Accounting in Pune',
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
    'ctaText'    => 'Get CA-managed Odoo accounting, GST compliance, and ERP integration for your Pune business.',
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
            <a href="#overview-section" class="toc-btn">Overview</a><a href="#what-section" class="toc-btn">What Is Odoo</a><a href="#who-section" class="toc-btn">Who Needs It</a><a href="#services-section" class="toc-btn">Services</a><a href="#procedure-section" class="toc-btn">Process</a><a href="#documents-section" class="toc-btn">Documents</a><a href="#challenges-section" class="toc-btn">Challenges</a><a href="#fees-section" class="toc-btn">Fees</a><a href="#timeline-section" class="toc-btn">Timeline</a><a href="#benefits-section" class="toc-btn">Why Choose Us</a><a href="#comparison-section" class="toc-btn">DIY vs CA-Managed</a><a href="#faq-section" class="toc-btn">FAQs</a>
        </div>
        <button class="toc-arrow right" id="tocRight">&#10095;</button>
    </div>
</div>

<!-- SECTION 2: OVERVIEW / INTRO + TL;DR -->
<section class="content-section" id="overview-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Odoo Accounting in Pune: Why CA-Managed ERP Accounting Outperforms DIY Setup</h2>
            <div class="content-text">
                <div class="highlight-box" style="margin-bottom:20px;">
                    <p><strong>&#128204; TL;DR - Odoo Accounting in Pune Services at a Glance</strong></p>
                    <p>Odoo Accounting is an open-source, GST-compliant ERP accounting module that handles invoicing, bank reconciliation, GSTR-1/3B/9 preparation, e-invoicing, e-way bills, and multi-currency transactions. For Pune businesses, Patron Accounting provides CA-managed Odoo accounting - we handle the Chart of Accounts configuration, GST tax mapping, Maharashtra Professional Tax integration, and monthly compliance so your ERP runs accurately from day one. Starts from Rs 4,999/month.</p><div class="table-responsive-wrapper" style="margin-top:16px;"><table><thead><tr><th>Parameter</th><th>Detail</th></tr></thead><tbody><tr><td>Software</td><td>Odoo Accounting (Community free; Enterprise from ~Rs 600/user/month)</td></tr><tr><td>GST Compliance</td><td>Built-in GSTR-1, GSTR-3B, GSTR-9, e-invoicing, e-way bill via NIC portal</td></tr><tr><td>Timeline</td><td>Setup: 7-15 working days | Monthly compliance thereafter</td></tr><tr><td>CA-Managed Cost</td><td>From Rs 4,999/month (Patron Accounting)</td></tr><tr><td>Key Integration</td><td>Odoo Sales, Inventory, Purchase, CRM, Project, POS, Payroll</td></tr><tr><td>Jurisdictional Office</td><td>GST Commissionerate, Pune; RoC Pune</td></tr><tr><td>Penalty for Non-Compliance</td><td>GST late fee Rs 50/day (Section 47 CGST Act); PTRC penalty under Maharashtra PT Act</td></tr></tbody></table></div></p>
                </div>
                <p>Pune's manufacturing heartland in Chakan and MIDC Bhosari, the IT corridor from Hinjewadi to Kharadi, and the trading hubs in Pune Camp and Koregaon Park increasingly need ERP-integrated accounting rather than standalone software. Odoo's modular architecture lets a Chakan auto parts manufacturer connect inventory, production, purchase, and accounting in a single system. Learn more about <a href="/odoo-accounting">Odoo Accounting Services across India</a>.</p>
                <p>But Odoo's power creates a compliance risk: a misconfigured GST tax code, an incorrect fiscal position for inter-state sales, or a missing HSN code turns every invoice into a potential GSTR-1 mismatch. The GST Commissionerate, Pune processes thousands of returns monthly, and errors trigger automated notices. Patron Accounting's Pune office at RTC Silver, Wagholi provides CA-managed Odoo accounting - our CAs configure the Chart of Accounts, verify every GST setting, handle PTRC/PTEC compliance on mahagst.gov.in, and file your returns directly from Odoo's reporting module.</p>
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
                <h2 class="section-title">What Is Odoo Accounting: Definition, Scope, and Indian GST Compliance</h2>
                <div class="content-text what-is-definition">
                    
                    <p>Odoo Accounting is the finance module within the Odoo ERP suite that manages invoicing, bank reconciliation, accounts payable and receivable, tax computation, and financial reporting through a double-entry bookkeeping system fully integrated with other business modules like Sales, Inventory, Purchase, and CRM.</p><p>For Indian businesses, Odoo's localisation module (l10n_in) provides built-in GST support including CGST/SGST/IGST computation based on fiscal positions, GSTR-1 and GSTR-3B report generation, e-invoicing via NIC portal integration, and e-way bill creation. HSN and SAC codes are mapped to products and services.</p><p>For Pune businesses - from Hinjewadi IT exporters needing LUT-backed zero-rated invoicing to Chakan manufacturers requiring inventory-linked cost accounting with FIFO or weighted average valuation - Odoo provides an all-in-one platform. However, the accounting accuracy depends entirely on correct initial configuration. A wrong fiscal position means IGST is not applied to inter-state sales, leading to GSTR-1 mismatches at the GST Commissionerate, Pune.</p>

                </div>
                <div class="highlight-box" style="margin-top:20px;">
                    <p><strong>Key Terms for Odoo Accounting in Pune:</strong></p>
                    <ul><li><strong>Chart of Accounts:</strong> Hierarchical ledger structure in Odoo. Must be configured with Indian accounting standards (Ind AS or IGAAP) and mapped to GST tax codes</li><li><strong>Fiscal Position:</strong> Odoo's mechanism for automatically applying correct tax (CGST+SGST for intra-state, IGST for inter-state). Critical for Pune businesses selling across Maharashtra and to other states</li><li><strong>Bank Reconciliation:</strong> Odoo automates 95% of bank statement matching. Pune businesses linking Bank of Maharashtra, Cosmos Bank, or SBI get auto-categorised transactions</li><li><strong>e-Invoicing:</strong> Mandatory for turnover above Rs 5 crore. Odoo generates IRN via NIC portal API integration - critical for mid-sized Pune manufacturers and IT companies</li><li><strong>l10n_in:</strong> Odoo Indian localisation module providing GST tax codes, fiscal positions, and reporting templates</li></ul>

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
                            <text x="100" y="170" font-size="10" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial, sans-serif">Odoo Accounting in Pune</text>
                        </svg>
                    </div>
                    <div class="illustration-badge">
                        <span>GST-Compliant ERP</span>
                        <strong>Odoo Accounting</strong>
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
            <h2 class="section-title">Who Needs Odoo Accounting Services in Pune?</h2>
            <div class="content-text">
                
                <p><strong>Manufacturers in Chakan and MIDC Bhosari:</strong> Auto component makers, food processors, and industrial goods manufacturers using Odoo Manufacturing need integrated cost accounting. Raw material purchases, work orders, and finished goods valuation must flow directly into the accounting module.</p><p><strong>IT Companies in Hinjewadi and Kharadi:</strong> Software firms using Odoo CRM and Project modules want integrated timesheet-to-invoice workflows. Export invoices need correct SAC 9983 classification with zero-rated LUT treatment under Rule 96A. These businesses may also need <a href="/private-limited-company-registration">Private Limited Company Registration</a>.</p><p><strong>Trading Businesses in Pune Camp and Koregaon Park:</strong> Wholesalers and distributors using Odoo Inventory and Purchase need real-time stock valuation tied to purchase invoices. GST ITC reconciliation between purchase bills and GSTR-2B is automated in Odoo.</p><p><strong>Multi-Branch Operations:</strong> Companies with branches across Pune and other cities need Odoo's multi-company accounting with inter-company journal entries and consolidated reporting.</p><p><strong>Startups Post-Series A:</strong> Funded startups in Baner and Wakad needing investor-grade financial reporting, audit-ready ledgers, and scalable ERP architecture.</p><p>Under Section 44AB of the Income Tax Act 1961, businesses with turnover above Rs 1 crore must get accounts audited. Odoo's structured Chart of Accounts and audit trail features make the statutory audit process significantly faster.</p>

            </div>
            </div>
        </div>
    </div>
</section>

<!-- SECTION 5: OUR SERVICES -->
<section class="content-section" id="services-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Odoo Accounting Services: What Patron Covers for Pune Businesses</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Service</th><th>What We Do</th></tr></thead>
                    <tbody>
                        <tr><td>Odoo Setup and Configuration</td><td>CA-led Chart of Accounts design, fiscal position configuration for CGST/SGST/IGST, HSN/SAC code mapping, bank account integration</td></tr><tr><td>GST Configuration and Filing</td><td>GST tax code setup, GSTR-1/3B preparation from Odoo, ITC reconciliation with GSTR-2B, e-invoicing via NIC portal. Related: <a href="/gst-registration/pune">GST Registration in Pune</a></td></tr><tr><td>Monthly Bookkeeping on Odoo</td><td>Transaction recording, vendor bill processing, bank reconciliation, expense tracking within Odoo. Dedicated CA assigned</td></tr><tr><td>Maharashtra Professional Tax</td><td>PTRC/PTEC registration, return filing on mahagst.gov.in. Integrated into Odoo payroll for automatic PT deduction</td></tr><tr><td>TDS Compliance</td><td>TDS configuration in Odoo for Section 194J, 194C, 194H. Quarterly Form 26Q filing. Form 16A from Odoo data</td></tr><tr><td>Financial Reporting and Audit</td><td>Balance Sheet, P&amp;L, Trial Balance, Cash Flow from Odoo. <a href="/statutory-audit">Statutory Audit</a> support under Companies Act 2013</td></tr><tr><td>Module Integration</td><td>Connecting Accounting with Sales, Purchase, Inventory, Manufacturing, CRM, POS modules</td></tr><tr><td>Migration from Tally/Legacy</td><td>Data migration from Tally ERP, Zoho Books, Excel into Odoo with CA-verified trial balance reconciliation. See also <a href="/tally-accounting/pune">Tally Accounting in Pune</a></td></tr>

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
            <h2 class="section-title">How Odoo Accounting Setup and Management Works in Pune</h2>
            <p class="section-subtitle" style="text-align:left;max-width:100%;">No visit to the GST Commissionerate, Pune or RoC Pune required. Patron's Pune office at RTC Silver, Wagholi handles all filings. Walk-in consultations available.</p>
        </header>
        <div class="steps-container">
            <div class="step-card"><div class="step-content"><span class="step-badge">Step 1</span><h3 class="step-title">Business Assessment at Patron's Pune Office</h3><p class="step-description">Patron's Pune CA team reviews your current accounting setup, GST registration status with the GST Commissionerate, Pune, PTRC/PTEC compliance, existing Odoo modules, and transaction volume. For Chakan manufacturers, inventory complexity and production costing requirements are mapped. For IT companies in Hinjewadi, export invoice and LUT requirements are assessed.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Setup Reviewed</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>GST Status Verified</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="10" y="10" width="100" height="70" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><circle cx="35" cy="35" r="12" fill="#FFF3E0" stroke="#F5A623" stroke-width="1.2"/><path d="M31 35l3 3 7-7" stroke="#14365F" stroke-width="2" stroke-linecap="round"/><line x1="55" y1="30" x2="95" y2="30" stroke="#14365F" stroke-width="2" opacity="0.3"/><line x1="55" y1="40" x2="85" y2="40" stroke="#14365F" stroke-width="2" opacity="0.3"/></svg></div><span class="illustration-label">Assessment Done</span><span class="step-number-large">01</span></div></div></div><div class="step-card"><div class="step-content"><span class="step-badge">Step 2</span><h3 class="step-title">Chart of Accounts Design and GST Configuration</h3><p class="step-description">The CA designs a Chart of Accounts following Indian accounting standards, maps all GST tax codes (0%, 5%, 12%, 18%, 28% with CGST/SGST/IGST splits), configures fiscal positions for intra-state (Maharashtra) and inter-state customers, and sets up HSN/SAC codes. For Pune businesses with e-invoicing obligations (turnover above Rs 5 crore), the NIC portal API is configured.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>CoA Designed</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>GST Mapped</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="15" y="5" width="90" height="80" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><text x="60" y="22" font-size="8" fill="#E8712C" text-anchor="middle" font-family="Arial" font-weight="700">Chart of Accounts</text><line x1="25" y1="30" x2="95" y2="30" stroke="#14365F" stroke-width="0.8"/><rect x="25" y="35" width="65" height="6" rx="3" fill="#E8712C" opacity="0.2"/><rect x="25" y="45" width="55" height="6" rx="3" fill="#14365F" opacity="0.15"/><rect x="25" y="55" width="60" height="6" rx="3" fill="#E8712C" opacity="0.2"/><rect x="25" y="65" width="45" height="6" rx="3" fill="#14365F" opacity="0.15"/></svg></div><span class="illustration-label">Config Ready</span><span class="step-number-large">02</span></div></div></div><div class="step-card"><div class="step-content"><span class="step-badge">Step 3</span><h3 class="step-title">Data Migration and Opening Balance Setup</h3><p class="step-description">Existing data from Tally, Zoho Books, Excel, or other systems is extracted, cleaned, mapped to Odoo fields, and imported. Opening balances are set as on the migration date. The CA verifies the Odoo Trial Balance matches the legacy system's closing balance. For Pune businesses with multi-year Tally data, historical transactions are imported in phases.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Data Migrated</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Balances Verified</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="5" y="15" width="45" height="60" rx="4" fill="#F0F4F8" stroke="#14365F" stroke-width="1.2"/><text x="27" y="30" font-size="7" fill="#14365F" text-anchor="middle" font-family="Arial">Tally</text><rect x="70" y="15" width="45" height="60" rx="4" fill="#F0F4F8" stroke="#14365F" stroke-width="1.2"/><text x="92" y="30" font-size="7" fill="#E8712C" text-anchor="middle" font-family="Arial" font-weight="700">Odoo</text><path d="M50 45h20" stroke="#E8712C" stroke-width="2" marker-end="url(#arrowhead)"/><line x1="50" y1="45" x2="68" y2="45" stroke="#E8712C" stroke-width="2.5"/><polygon points="68,42 74,45 68,48" fill="#E8712C"/></svg></div><span class="illustration-label">Migration Done</span><span class="step-number-large">03</span></div></div></div><div class="step-card"><div class="step-content"><span class="step-badge">Step 4</span><h3 class="step-title">Module Integration and Workflow Configuration</h3><p class="step-description">Odoo Accounting is connected to other modules - Sales for automatic invoice generation, Purchase for vendor bill workflows, Inventory for stock valuation, Manufacturing for production costing, and POS for retail transactions. For Pune trading businesses, payment follow-up automation and customer credit limit workflows are configured. Related: <a href="/accounting-services/pune">Accounting Services in Pune</a>.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Modules Connected</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Workflows Set</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="20" y="10" width="80" height="25" rx="4" fill="#F0F4F8" stroke="#14365F" stroke-width="1.2"/><text x="60" y="26" font-size="7" fill="#14365F" text-anchor="middle" font-family="Arial">Accounting</text><rect x="5" y="50" width="35" height="20" rx="4" fill="#FFF3E0" stroke="#F5A623" stroke-width="1"/><text x="22" y="63" font-size="6" fill="#14365F" text-anchor="middle" font-family="Arial">Sales</text><rect x="42" y="50" width="35" height="20" rx="4" fill="#FFF3E0" stroke="#F5A623" stroke-width="1"/><text x="60" y="63" font-size="6" fill="#14365F" text-anchor="middle" font-family="Arial">Inventory</text><rect x="80" y="50" width="35" height="20" rx="4" fill="#FFF3E0" stroke="#F5A623" stroke-width="1"/><text x="97" y="63" font-size="6" fill="#14365F" text-anchor="middle" font-family="Arial">MFG</text><line x1="60" y1="35" x2="22" y2="50" stroke="#E8712C" stroke-width="1" stroke-dasharray="3"/><line x1="60" y1="35" x2="60" y2="50" stroke="#E8712C" stroke-width="1" stroke-dasharray="3"/><line x1="60" y1="35" x2="97" y2="50" stroke="#E8712C" stroke-width="1" stroke-dasharray="3"/></svg></div><span class="illustration-label">Integration Done</span><span class="step-number-large">04</span></div></div></div><div class="step-card"><div class="step-content"><span class="step-badge">Step 5</span><h3 class="step-title">Go-Live, Training, and First Filing</h3><p class="step-description">The Pune team is trained on daily transaction entry, bank reconciliation, invoice creation, and report generation in Odoo. The first month's GSTR-1/3B is prepared from Odoo and reviewed by the CA before submission to the GST Commissionerate, Pune. Maharashtra PT return filing continues on mahagst.gov.in.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Team Trained</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>First Return Filed</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="15" y="10" width="90" height="75" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><circle cx="60" cy="35" r="15" fill="#10B981" opacity="0.15"/><path d="M53 35l5 5 10-10" stroke="#10B981" stroke-width="2.5" stroke-linecap="round"/><text x="60" y="60" font-size="8" fill="#14365F" text-anchor="middle" font-family="Arial" font-weight="600">Go-Live</text><rect x="25" y="70" width="70" height="6" rx="3" fill="#E8712C" opacity="0.3"/></svg></div><span class="illustration-label">Live on Odoo</span><span class="step-number-large">05</span></div></div></div><div class="step-card"><div class="step-content"><span class="step-badge">Step 6</span><h3 class="step-title">Monthly CA-Managed Compliance</h3><p class="step-description">From month two onwards, Patron's Pune CA handles monthly bookkeeping, GST filing (GSTR-1 by 11th, GSTR-3B by 20th), TDS compliance (deposit by 7th, quarterly 26Q), bank reconciliation, and financial reporting. Annual GSTR-9, statutory audit support, and ITR filing handled. Related: <a href="/gst-returns">GST Returns Filing</a>.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Monthly GST Filed</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Audit-Ready Books</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>PT Compliant</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="5" y="15" width="35" height="50" rx="4" fill="#F0F4F8" stroke="#14365F" stroke-width="1.2"/><rect x="42" y="15" width="35" height="50" rx="4" fill="#F0F4F8" stroke="#14365F" stroke-width="1.2"/><rect x="80" y="15" width="35" height="50" rx="4" fill="#F0F4F8" stroke="#14365F" stroke-width="1.2"/><line x1="12" y1="28" x2="33" y2="28" stroke="#E8712C" stroke-width="2" opacity="0.6"/><line x1="49" y1="28" x2="70" y2="28" stroke="#E8712C" stroke-width="2" opacity="0.6"/><line x1="87" y1="28" x2="108" y2="28" stroke="#E8712C" stroke-width="2" opacity="0.6"/><text x="22" y="57" font-size="6" fill="#14365F" text-anchor="middle" font-family="Arial">GST</text><text x="60" y="57" font-size="6" fill="#14365F" text-anchor="middle" font-family="Arial">TDS</text><text x="97" y="57" font-size="6" fill="#14365F" text-anchor="middle" font-family="Arial">PT</text><path d="M40 80l5 5 10-10" stroke="#10B981" stroke-width="2.5" stroke-linecap="round"/></svg></div><span class="illustration-label">Compliance Running</span><span class="step-number-large">06</span></div></div></div>

        </div>
    </div>
</section>

<!-- SECTION 8: DOCUMENTS REQUIRED -->
<section class="content-section" id="documents-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Documents Required for Odoo Accounting Setup in Pune</h2>
            <div class="content-text">
                
                <ul><li><strong>Company PAN Card:</strong> Mandatory for all tax configurations in Odoo</li><li><strong>GST Registration Certificate:</strong> GSTIN for GST module configuration</li><li><strong>PTRC/PTEC Certificates:</strong> Maharashtra PT compliance documents from mahagst.gov.in</li><li><strong>Bank Statements:</strong> For bank feed setup and reconciliation in Odoo Banking module</li><li><strong>Existing Chart of Accounts:</strong> From Tally, Zoho Books, or current system for mapping</li><li><strong>Trial Balance:</strong> As on migration date for opening balance verification</li><li><strong>Product/Service Master:</strong> With HSN/SAC codes and applicable GST rates</li><li><strong>Customer and Vendor Masters:</strong> With GSTIN, state codes, and outstanding balances</li></ul><p style="margin-top:16px;"><strong>Pune-specific tip:</strong> For MIDC Bhosari manufacturers with 100+ SKUs, prepare the product master with correct HSN codes before Odoo setup. Incorrect HSN mapping causes e-invoice rejection on the NIC portal - a common issue for Pune auto component suppliers.</p>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 9: CHALLENGES -->
<section class="content-section" id="challenges-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Common Odoo Accounting Challenges for Pune Businesses</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Challenge</th><th>Impact</th><th>How Patron Accounting Solves It</th></tr></thead>
                    <tbody>
                        <tr><td>Incorrect Fiscal Position</td><td>CGST+SGST vs IGST errors leading to GSTR-1 mismatches at GST Commissionerate, Pune</td><td>CA validates tax logic for every customer, verifies fiscal position mapping</td></tr><tr><td>HSN Code Errors Blocking e-Invoicing</td><td>NIC portal rejects invoices with invalid HSN codes, blocking cash flow for Chakan manufacturers</td><td>CA verifies HSN/SAC codes during setup, continuous monitoring</td></tr><tr><td>Inventory Valuation Mismatch</td><td>FIFO vs average cost method mismatch causes incorrect Balance Sheet stock values</td><td>CA aligns inventory valuation method with statutory audit requirements</td></tr><tr><td>PTRC Compliance Overlooked</td><td>Maharashtra PT slab rates not configured in Odoo Payroll, missed by Baner startups</td><td>PTRC/PTEC integrated into Odoo payroll with correct Maharashtra slabs</td></tr><tr><td>Multi-Company Consolidation</td><td>Double-counted revenues or missing eliminations for Pune group companies</td><td>Inter-company journal entries and consolidated reporting configured by CA</td></tr>

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
            <h2 class="section-title">Odoo Accounting Service Fees in Pune</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Fee Component</th><th>Amount</th></tr></thead>
                    <tbody>
                        <tr><td>Startup Package (Bookkeeping + GST)</td><td>Rs 4,999/month</td></tr><tr><td>Growth Package (+ TDS + PT + Reviews)</td><td>Rs 9,999/month</td></tr><tr><td>Manufacturing/Trading (+ Inventory + Cost Accounting)</td><td>Rs 14,999/month</td></tr><tr><td>Odoo Setup (One-Time)</td><td>Rs 29,999 - Rs 99,999</td></tr><tr><td>Statutory Audit Support (Annual)</td><td>Rs 24,999 onwards</td></tr>

                    </tbody>
                </table>
                </div>
                <p style="margin-top:16px;font-size:13px;color:var(--text-muted);font-style:italic;">All fees and charges listed are indicative only and do not constitute a binding offer. Final amounts may vary depending on the volume of work and the complexity involved.</p>
                <p style="margin-top:16px;">Professional service charges for drafting, filing, and representation are separate from the statutory fees. The exact fee depends on the complexity of the case, disputed amount, and number of hearings required. Contact us for a detailed quote.</p>
                <p style="margin-top:16px;"><strong>Get a free Odoo Accounting in Pune consultation - <a href="tel:+919459456700">Call +91 945 945 6700</a> or <a href="https://wa.me/919459456700?text=Hello%2C%20I%20just%20visited%20your%20Odoo%20Accounting%20in%20Pune%20page.%20I%20would%20like%20to%20know%20more%20about%20it." target="_blank" rel="noopener">WhatsApp us</a>. No-obligation assessment.</strong></p>
            </div>
        </div>
    </div>
</section>

<!-- SECTION 11: TIMELINE -->
<section class="content-section" id="timeline-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Timeline for Odoo Accounting Setup in Pune</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Stage</th><th>Estimated Timeline</th></tr></thead>
                    <tbody>
                        <tr><td>Assessment</td><td>Day 1-2</td></tr><tr><td>Chart of Accounts + GST Config</td><td>Day 3-5</td></tr><tr><td>Data Migration</td><td>Day 5-8</td></tr><tr><td>Module Integration</td><td>Day 8-10</td></tr><tr><td>Testing + Training</td><td>Day 10-12</td></tr><tr><td>Go-Live + First Filing</td><td>Day 12-15</td></tr><tr><td>Monthly Compliance</td><td>Ongoing</td></tr>

                    </tbody>
                </table>
                </div>
                <div class="highlight-box" style="margin-top:16px;">
                    
                    <p><strong>Pune Note:</strong> Standard Odoo accounting setup for a Pune SME takes 7-15 working days. Complex manufacturing setups with inventory and production costing may take 15-20 working days.</p>

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
            <h2 class="section-title">Why Choose Patron for Odoo Accounting in Pune</h2>
        </div>
        <div class="features-grid"><article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><h3 class="feature-title">Pune Office Presence</h3><p class="feature-text">RTC Silver, Wagholi - serves Hinjewadi, Kharadi, Baner, Wakad, Chakan, MIDC Bhosari. Walk-in available.</p></article><article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><h3 class="feature-title">CA + Odoo (Not Just IT)</h3><p class="feature-text">Unlike Odoo partners who handle software only, Patron's ICAI-registered CAs ensure accounting accuracy - correct CoA, verified GST, compliant filings.</p></article><article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><path d="M12 6v6l4 2"/></svg></div><h3 class="feature-title">GST Filing Guarantee</h3><p class="feature-text">GSTR-1/3B filed from Odoo on time, every month. CA reviews before submission to GST Commissionerate, Pune.</p></article><article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg></div><h3 class="feature-title">End-to-End Service</h3><p class="feature-text">From Odoo setup to monthly bookkeeping to annual audit - one team, one office, one accountability.</p></article><article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M17 21v-2a4 4 0 00-4-4H5a4 4 0 00-4 4v2"/><circle cx="9" cy="7" r="4"/></svg></div><h3 class="feature-title">10,000+ Businesses, 4 Offices</h3><p class="feature-text">15+ years, 50,000+ documents filed. Offices in Pune, Mumbai, Delhi, Gurugram. 4.9 Google rating.</p></article><article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg></div><h3 class="feature-title">Better Than DIY or Partner-Only</h3><p class="feature-text">Rs 4,999/month for CA-managed compliance vs Rs 3-10 lakh one-time for Odoo partner setup without ongoing accounting support.</p></article></div>
    </div>
</section>

<!-- SECTION 12A: SOCIAL PROOF -->
<section class="content-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Trusted by Pune's Growing Businesses</h2>
            <div class="content-text">
                
                <p><strong>10,000+ Businesses | 4.9 Google Rating | 50,000+ Docs Filed | 15+ Years</strong></p><p><em>"Our GST filing is always on time since we moved to Patron. The CA team knows their stuff cold."</em> - CFO, Manufacturing, Maharashtra</p><p>Trusted by Hyundai, Asian Paints, Bridgestone, and 10,000+ businesses across India. With offices in Pune, Mumbai, Delhi, and Gurugram, Patron serves businesses with local expertise backed by national infrastructure.</p>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 13: SELF-FILING vs PROFESSIONAL COMPARISON -->
<section class="content-section" id="comparison-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">DIY Odoo Setup vs CA-Managed Odoo Accounting in Pune</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Aspect</th><th>DIY / Odoo Partner Only</th><th>Patron CA-Managed</th></tr></thead>
                    <tbody>
                        <tr><td>Chart of Accounts</td><td>Default template; misaligned with Indian standards</td><td>CA-designed for Indian accounting + GST</td></tr><tr><td>GST Configuration</td><td>Self-configured; fiscal position errors common</td><td>CA-verified; CGST/SGST/IGST logic validated</td></tr><tr><td>Monthly Filing</td><td>Self-filed or separate CA needed</td><td>Filed directly from Odoo by Patron's CA</td></tr><tr><td>Audit Readiness</td><td>Depends on data quality</td><td>Audit-ready ledgers maintained by CA</td></tr><tr><td>Cost</td><td>Odoo license + implementation fee only</td><td>Odoo license + Rs 4,999/month CA service</td></tr><tr><td>Risk</td><td>Misconfigurations discovered at audit or GST notice</td><td>Prevented at setup; CA accountability</td></tr>

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
                
                <p><strong>Parent India Page:</strong></p><ul><li><a href="/odoo-accounting">Odoo Accounting Services in India</a></li></ul><p><strong>Same-City Pune Pages:</strong></p><ul><li><a href="/accounting-services/pune">Accounting Services in Pune</a></li><li><a href="/tally-accounting/pune">Tally Accounting in Pune</a></li><li><a href="/zoho-books-accounting/pune">Zoho Books Accounting in Pune</a></li><li><a href="/gst-registration/pune">GST Registration in Pune</a></li><li><a href="/gst-returns/pune">GST Returns in Pune</a></li></ul><p><strong>Related India Pages:</strong></p><ul><li><a href="/payroll-services">Payroll Services</a></li><li><a href="/statutory-audit">Statutory Audit</a></li><li><a href="/income-tax-return">Income Tax Return Filing</a></li></ul>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 15A: LEGAL FRAMEWORK -->
<section class="content-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Legal and Compliance Framework for Odoo Accounting in Pune</h2>
            <div class="content-text">
                
                <p><strong>CGST Act 2017:</strong> GST computation, e-invoicing (Section 68 read with Rule 48(4)), GSTR filing. Odoo's Indian localisation handles CGST/SGST/IGST with fiscal position logic. Source: <a href="https://cbic-gst.gov.in" target="_blank" rel="noopener">cbic-gst.gov.in</a></p><p><strong>Companies Act 2013, Section 128:</strong> Books of account at registered office. Odoo's cloud access satisfies this for Pune-registered companies.</p><p><strong>Section 44AB, Income Tax Act:</strong> Tax audit for turnover above Rs 1 crore. Odoo's structured ledgers facilitate faster audit completion.</p><p><strong>Maharashtra PT Act 1975:</strong> PTRC for employers (monthly/annual filing by 15th per Feb 2026 amendment). PTEC Rs 2,500/year. Source: <a href="https://www.mahagst.gov.in" target="_blank" rel="noopener">mahagst.gov.in</a></p><p><strong>Penalties:</strong> Late GST: Rs 50/day (Section 47). Missing e-invoice: Rs 10,000/invoice or 100% of tax (Section 122). Late PTRC: Section 6(2) penalty under Maharashtra PT Act.</p>

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
                    <h2 class="faq-expanded__title">Frequently Asked Questions - Odoo Accounting in Pune</h2>
                    <p class="faq-expanded__lead">Get answers to common questions about Odoo accounting, GST compliance, setup costs, and migration for Pune businesses.</p>
                    @include('partials.bigin-form', [
                        'variant'  => 'compact',
                        'service'  => 'Odoo Accounting in Pune',
                        'city'     => 'Pune',
                    ])
                </aside>
                <div class="faq-expanded__list">
                    <div class="faq-expanded__item" id="faq-1">
                        <h3 class="faq-expanded__q">Which GST office handles Pune businesses using Odoo?</h3>
                        <div class="faq-expanded__a"><p>The GST Commissionerate, Pune handles all GST matters for Pune businesses regardless of accounting software. Odoo's GSTR-1/3B reports can be filed directly to the GST portal via API or exported for upload. Patron's CA reviews every return before submission.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-2">
                        <h3 class="faq-expanded__q">Can I get Odoo accounting managed online from Pune?</h3>
                        <div class="faq-expanded__a"><p>Yes. Patron provides fully remote Odoo accounting management for Pune businesses. Since Odoo is cloud-based, your CA accesses the same instance. Pune clients can also visit RTC Silver, Wagholi for in-person consultations.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-3">
                        <h3 class="faq-expanded__q">What is the cost of Odoo accounting services in Pune?</h3>
                        <div class="faq-expanded__a"><p>CA-managed Odoo accounting starts from Rs 4,999 per month for startups. Growth businesses pay Rs 9,999 per month. Manufacturing clients with inventory and production costing pay Rs 14,999 per month. One-time setup ranges from Rs 29,999 to Rs 99,999. Odoo software license is billed separately by Odoo.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-4">
                        <h3 class="faq-expanded__q">How long does Odoo accounting setup take in Pune?</h3>
                        <div class="faq-expanded__a"><p>A standard Odoo accounting setup for a Pune SME takes 7-15 working days including Chart of Accounts design, GST configuration, data migration from Tally or other systems, module integration, and team training. Complex manufacturing setups may take 15-20 working days.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-5">
                        <h3 class="faq-expanded__q">Does Odoo support e-invoicing for Pune companies?</h3>
                        <div class="faq-expanded__a"><p>Yes. Odoo supports Indian GST e-invoicing via NIC portal integration. Businesses with turnover above Rs 5 crore must generate e-invoices. Odoo creates the IRN directly through the API. Patron configures the e-invoicing setup and verifies compliance.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-6">
                        <h3 class="faq-expanded__q">Is Odoo better than Tally for accounting?</h3>
                        <div class="faq-expanded__a"><p>Tally excels as standalone desktop accounting with deep Indian tax compliance. Odoo provides integrated ERP with accounting connected to inventory, manufacturing, CRM, and sales. For Pune businesses needing only accounting, Tally may suffice. For ERP-integrated operations, Odoo is the better choice. Patron supports both.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-7">
                        <h3 class="faq-expanded__q">Can a CA manage my Odoo accounting remotely?</h3>
                        <div class="faq-expanded__a"><p>Yes. Odoo's cloud architecture enables remote CA access. Patron's Pune CAs log into your Odoo to process transactions, reconcile banks, prepare returns, and generate reports within Odoo's secure, role-based permission system.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-8">
                        <h3 class="faq-expanded__q">Can historical data from Tally be migrated into Odoo?</h3>
                        <div class="faq-expanded__a"><p>Yes. Patron provides data migration from Tally ERP 9, Tally Prime, Zoho Books, Excel, or any legacy system into Odoo. Opening balances and historical transactions are imported with CA-verified trial balance reconciliation.</p></div>
                    </div>
                </div>
            </div>


            <!-- Quick Answers -->
            <div class="highlight-box" style="margin-top:32px;">
                <p><strong>Quick Answers</strong></p>
                <p><strong>Odoo mein GST kaise set karein?</strong> Fiscal Position configure karein - intra-state ke liye CGST+SGST, inter-state ke liye IGST. Patron ka CA verify karega.</p><p><strong>Odoo accounting ka cost kitna hai Pune mein?</strong> Rs 4,999/month se start. Setup Rs 29,999 se.</p><p><strong>Kya Odoo e-invoicing support karta hai?</strong> Haan. NIC portal se API integration. Turnover Rs 5 crore se zyada hona chahiye.</p><p><strong>Tally se Odoo mein migration ho sakta hai?</strong> Haan. Patron ka CA data migrate karke trial balance verify karega.</p>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 18: URGENCY CTA -->
<section class="content-section" style="background: var(--orange-lighter) !important; border-left: 4px solid var(--orange);">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Don't Let Misconfigured Odoo Create GST Notices</h2>
            <div class="content-text">
                
                <p>Every month without properly configured Odoo accounting is a month of potential GST mismatches accumulating. The GST Commissionerate, Pune issues automated notices for GSTR-1/3B discrepancies. For Pune manufacturers crossing the Rs 5 crore e-invoicing threshold, operating without correct NIC portal integration means manual e-invoice generation - time-consuming and error-prone. April 2026 is the cleanest time to transition to CA-managed Odoo accounting.</p><p><strong>Call +91 945 945 6700 today or <a href="https://wa.me/919459456700?text=Hello%2C%20I%20just%20visited%20your%20Odoo%20Accounting%20in%20Pune%20page.%20I%20would%20like%20to%20know%20more%20about%20it." target="_blank" rel="noopener">WhatsApp us</a> to get started.</strong></p>

            </div>
        </div>
    </div>
</section>

<!-- CONCLUSION + CTA BLOCK (Dark) -->
<section class="content-section" style="background: var(--blue) !important;">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title" style="color:#FFFFFF !important;">Get Started with Odoo Accounting in Pune</h2>
            <div class="content-text" style="text-align:left;">
                
                <p style="color:rgba(255,255,255,0.85);font-size:16px;line-height:1.7;">Odoo accounting services in Pune combine the power of an integrated ERP platform with the compliance accuracy of CA-managed bookkeeping, GST filing, and financial reporting.</p><p style="color:rgba(255,255,255,0.85);font-size:16px;line-height:1.7;">Patron Accounting's Pune office at RTC Silver, Wagholi provides end-to-end Odoo accounting - from Chart of Accounts design and GST configuration to monthly GSTR-1/3B filing and annual statutory audit support. Deep familiarity with the GST Commissionerate, Pune and Maharashtra compliance requirements.</p><p style="color:rgba(255,255,255,0.85);font-size:16px;line-height:1.7;">ICAI-registered firm. 15+ years experience. 50,000+ documents filed. 4.9 Google rating. Offices in Pune, Mumbai, Delhi, and Gurugram.</p>

            </div>
            <div style="display:flex;gap:14px;flex-wrap:wrap;margin-top:24px;">
                <a href="tel:+919459456700" style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:var(--orange);color:#fff;border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#128222; Call +91 945 945 6700</a>
                <a href="https://wa.me/919459456700?text=Hello%2C%20I%20just%20visited%20your%20Odoo%20Accounting%20in%20Pune%20page.%20I%20would%20like%20to%20know%20more%20about%20it." target="_blank" style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:#25D366;color:#fff;border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;" rel="noopener">&#128172; WhatsApp Us</a>
                <a href="mailto:sales@patronaccounting.com?subject=Enquiry%20for%20Odoo%20Accounting%20in%20Pune&body=Hello%2C%20I%20just%20visited%20your%20Odoo%20Accounting%20in%20Pune%20page.%20I%20would%20like%20to%20know%20more%20about%20it.%0A%0AThank%20you." style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:transparent;color:#fff;border:2px solid rgba(255,255,255,0.3);border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#9993;&#65039; Email Us</a>
            </div>
            <p style="color:rgba(255,255,255,0.7);font-size:13px;margin-top:16px;">Book a Free Consultation - No Obligation.</p>
        </div>
    </div>
</section>

<!-- GSTAT STATE BENCH CITY PAGES (32 Pages) -->
<section class="content-section" style="padding:48px 32px;background:var(--gray-50);">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title" style="text-align:center;margin-bottom:12px;">Odoo Accounting Services Across India</h2>
            <p style="text-align:center;color:var(--text-muted);font-size:15px;margin-bottom:40px;">Patron provides CA-managed Odoo accounting in major cities. Select your city.</p>
            
            <div class="pa-city-block" style="margin-bottom:40px;"><div class="pa-block-title">Available in These Cities</div><div class="pa-block-sub">Select your city for local Odoo accounting services</div><div class="pa-city-grid"><div class="pa-city-card" style="opacity:0.6; pointer-events:none; border:2px solid var(--orange); position:relative;"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Pune</div><div class="pa-card-sub">Maharashtra</div></div><span style="position:absolute; top:6px; right:8px; font-size:10px; color:var(--orange); font-weight:700; text-transform:uppercase; letter-spacing:0.5px;">You're here</span></div><a href="/odoo-accounting/mumbai" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Mumbai</div><div class="pa-card-sub">Maharashtra</div></div></a><a href="/odoo-accounting/delhi" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Delhi</div><div class="pa-card-sub">Delhi NCR</div></div></a><a href="/odoo-accounting/gurugram" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Gurugram</div><div class="pa-card-sub">Haryana</div></div></a></div></div><div class="pa-city-block"><div class="pa-block-title">Related Services in Pune</div><div class="pa-block-sub">End-to-end accounting and compliance for Pune businesses</div><div class="pa-cross-grid"><a href="/accounting-services/pune" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Accounting Services</div><div class="pa-card-sub">Pune</div></div></a><a href="/gst-registration/pune" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">GST Registration</div><div class="pa-card-sub">Pune</div></div></a><a href="/tally-accounting/pune" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Tally Accounting</div><div class="pa-card-sub">Pune</div></div></a><a href="/zoho-books-accounting/pune" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Zoho Books Accounting</div><div class="pa-card-sub">Pune</div></div></a><a href="/payroll-services/pune" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Payroll Services</div><div class="pa-card-sub">Pune</div></div></a><a href="/startup-registration/pune" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Startup Registration</div><div class="pa-card-sub">Pune</div></div></a></div></div>
        </div>
    </div>
</section>

<!-- CONTENT FRESHNESS FOOTER -->
<section class="content-section" style="padding:32px;">
    <div class="content-container">
        <div class="text-content" style="font-size:13px;color:var(--text-muted);">
            <p><strong>Content Created:</strong> 18 March 2026 &nbsp;|&nbsp; <strong>Last Updated:</strong> <span id="lastUpdatedFooter">18 March 2026</span> &nbsp;|&nbsp; <strong>Next Review:</strong> 18 September 2026 &nbsp;|&nbsp; <strong>Reviewed By:</strong> CA &amp; CS Team, Patron Accounting LLP</p>
            <p>This page covers Odoo accounting services in Pune and is reviewed bi-annually. GST rates, e-invoicing thresholds, and PT due dates are verified against latest government notifications. Freshness Tier 2.</p>
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
