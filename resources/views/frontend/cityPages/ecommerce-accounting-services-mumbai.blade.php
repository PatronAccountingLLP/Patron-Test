
@extends('layouts.service-app')

<!-- External Dependencies (loaded by master layout in production) -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Barlow:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,400&family=DM+Sans:opsz,wght@9..40,400;9..40,500;9..40,600;9..40,700&display=swap" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

@section('meta')
    <title>E-Commerce Accounting in Mumbai - GST, TDS & Bookkeeping</title>
    <meta name="description" content="CA-led ecommerce accounting in Mumbai. TCS, marketplace reconciliation, GST for Amazon, Flipkart, D2C sellers in Andheri, Powai, BKC. Call +91 945 945 6700.">
    <link rel="canonical" href="https://www.patronaccounting.com/ecommerce-accounting-services/mumbai">
    <meta name="robots" content="index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1">
    <meta property="og:title" content="E-Commerce Accounting in Mumbai - GST, TDS & Bookkeeping">
    <meta property="og:description" content="CA-led ecommerce accounting in Mumbai. TCS, marketplace reconciliation, GST for Amazon, Flipkart, D2C sellers in Andheri, Powai, BKC. Call +91 945 945 6700.">
    <meta property="og:url" content="https://www.patronaccounting.com/ecommerce-accounting-services/mumbai">
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="Patron Accounting">
    <meta property="og:image" content="https://www.patronaccounting.com/images/og-default-square.png">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="1200">
    <meta property="og:image:type" content="image/png">
    <meta property="og:image:secure_url" content="https://www.patronaccounting.com/images/og-default-square.png">
    <meta property="og:image:alt" content="Patron Accounting - partner you can rely on">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="E-Commerce Accounting in Mumbai - GST, TDS & Bookkeeping">
    <meta name="twitter:description" content="CA-led ecommerce accounting in Mumbai. TCS, marketplace reconciliation, GST for Amazon, Flipkart, D2C sellers in Andheri, Powai, BKC. Call +91 945 945 6700.">
    <meta name="twitter:image" content="https://www.patronaccounting.com/images/og-default-square.png">
@endsection

@section('schema')
    <script type="application/ld+json">{
  "@context": "https://schema.org",
  "@graph": [
    {
      "@type": "Service",
      "name": "E-Commerce Accounting in Mumbai - GST, TDS & Bookkeeping",
      "description": "CA-led ecommerce accounting in Mumbai. TCS, marketplace reconciliation, GST for Amazon, Flipkart, D2C sellers in Andheri, Powai, BKC. Call +91 945 945 6700.",
      "url": "https://www.patronaccounting.com/ecommerce-accounting-services/mumbai",
      "serviceType": "E-Commerce Accounting in Mumbai - GST, TDS & Bookkeeping",
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
        "url": "https://www.patronaccounting.com/ecommerce-accounting-services/mumbai",
        "price": "8000"
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
          "name": "Accounting & Bookkeeping Services",
          "item": "https://www.patronaccounting.com/accounting-bookkeeping-services"
        },
        {
          "@type": "ListItem",
          "position": 3,
          "name": "E-Commerce Accounting in Mumbai - GST, TDS & Bookkeeping",
          "item": "https://www.patronaccounting.com/ecommerce-accounting-services/mumbai"
        }
      ]
    },
    {
      "@type": "FAQPage",
      "mainEntity": [
        {
          "@type": "Question",
          "name": "Which GST office handles ecommerce seller compliance in Mumbai?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "GST Commissionerate Mumbai across four divisions (East/West/Central/South). TCS by marketplace operators deposited with respective authorities. For multi-state FBA sellers, each state GSTIN managed with that state's GST authority. Patron's Marine Lines office handles all filings for Mumbai sellers."
          }
        },
        {
          "@type": "Question",
          "name": "How does TCS under Section 52 work for Mumbai sellers?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Amazon/Flipkart collect TCS at 1% (0.5% CGST + 0.5% SGST intra-state, 1% IGST inter-state) on net taxable supplies. Deposited with government. Appears in seller GSTR-2A/2B. Seller claims credit in GSTR-3B. Patron reconciles monthly across all marketplaces."
          }
        },
        {
          "@type": "Question",
          "name": "Is GST registration mandatory for selling on Amazon from Mumbai?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Yes. S.24(ix) CGST Act mandates GST for every marketplace seller regardless of turnover. Rs 40 lakh exemption does not apply. Even single sale requires valid GSTIN. Patron assists with fresh registration and multi-state GSTIN for FBA inventory."
          }
        },
        {
          "@type": "Question",
          "name": "What accounting software works best for ecommerce sellers?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Tally Prime, Zoho Books, QuickBooks Online configured with marketplace-specific ledgers, TCS tracking, multi-state GST, payment gateway reconciliation. High-volume Amazon sellers get API-based automated settlement matching. D2C Shopify brands benefit from direct Zoho integration."
          }
        },
        {
          "@type": "Question",
          "name": "Can I get ecommerce accounting done online from Mumbai?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Yes. Marketplace dashboard access, payment gateway reconciliation, GST filing, monthly MIS all handled digitally via cloud tools. Walk-in at Marine Lines for TCS mismatches, multi-state GST queries, or investor reporting discussions."
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
                        Ecommerce Accounting Services in Mumbai: CA-Led Financial Management for Online Sellers
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
                            <p class="mb-0 text-dark benefit-paragraph"><span>Documents:</span> GSTIN, PAN, marketplace seller dashboard access, payment gateway statements, inventory records</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Fees:</span> Starting from Rs 8,000/month for single-channel sellers</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Eligibility:</span> Amazon, Flipkart, Meesho, Shopify sellers; D2C brands; marketplace operators in Mumbai</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Timeline:</span> Onboarding in 3-5 working days; monthly books closed by 10th</p>
                        </div>
                    </div>

                    <p class="mb-4 fw-bold" style="color: var(--blue); font-size: 15px;">10,000+ Businesses Served | 4.9 Google Rating | From Rs 8,000/month</p>

                    <div class="hero-cta">
                        <a href="tel:+919459456700" class="btn-video text-decoration-none">
                            <span class="play-circle"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="width:14px;height:14px;color:#fff"><path d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/></svg></span>
                            Call +91 945 945 6700
                        </a>
                        <a href="mailto:sales@patronaccounting.com" class="btn-sample text-decoration-none">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="width:18px;height:18px;"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,12 2,6"/></svg>
                            Email Us
                        </a>
                        <a href="https://wa.me/919459456700?text=Hi%2C%20I%20need%20ecommerce%20accounting%20services%20in%20Mumbai.%20Please%20call%20me." target="_blank" class="btn-sample text-decoration-none">
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
                                            'service'  => 'Ecommerce Accounting in Mumbai',
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
    'ctaText'    => 'CA-led ecommerce accounting with marketplace reconciliation, TCS/TDS, multi-state GST, and investor MIS for Mumbai online sellers.',
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
            <a href="#overview-section" class="toc-btn">Overview</a><a href="#what-section" class="toc-btn">What Is It</a><a href="#who-section" class="toc-btn">Who Needs It</a><a href="#services-section" class="toc-btn">Services</a><a href="#procedure-section" class="toc-btn">Process</a><a href="#documents-section" class="toc-btn">Documents</a><a href="#challenges-section" class="toc-btn">Challenges</a><a href="#fees-section" class="toc-btn">Fees</a><a href="#timeline-section" class="toc-btn">Timeline</a><a href="#benefits-section" class="toc-btn">Why Patron</a><a href="#comparison-section" class="toc-btn">By Seller Type</a><a href="#faq-section" class="toc-btn">FAQs</a>
        </div>
        <button class="toc-arrow right" id="tocRight">&#10095;</button>
    </div>
</div>

<!-- SECTION 2: OVERVIEW / INTRO + TL;DR -->
<section class="content-section" id="overview-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Ecommerce Accounting in Mumbai - Overview</h2>
            <div class="content-text">
                <div class="highlight-box" style="margin-bottom:20px;">
                    <p><strong>&#128204; TL;DR - Ecommerce Accounting in Mumbai Services at a Glance</strong></p>
                    <p>Ecommerce accounting covers <strong>marketplace reconciliation, TCS S.52, TDS S.194O, multi-state GST, inventory valuation</strong>, and financial reporting. Every seller on Amazon/Flipkart/Meesho must be <strong>GST-registered under S.24(ix)</strong> regardless of turnover.</p><div class="table-responsive-wrapper" style="margin-top:16px;"><table><thead><tr><th>Parameter</th><th>Detail</th></tr></thead><tbody><tr><td>Governing Acts</td><td>CGST Act (S.24, S.52); IT Act (S.194O, S.44AB); Companies Act (S.128)</td></tr><tr><td>Applicable To</td><td>Amazon, Flipkart, Meesho, Shopify sellers; D2C brands; operators</td></tr><tr><td>Timeline</td><td>GSTR-1 by 11th; GSTR-3B by 20th; TCS monthly; GSTR-9 by 31 Dec</td></tr><tr><td>Cost From</td><td>Rs 8,000/month (single-channel seller)</td></tr><tr><td>Penalty</td><td>GST late: Rs 50/day CGST + SGST per state per return</td></tr><tr><td>Authority</td><td>GST Commissionerate Mumbai; Income Tax; RoC Mumbai</td></tr></tbody></table></div></p>
                </div>
                <p>Mumbai has one of India's largest ecommerce ecosystems. <strong>D2C brands in Andheri/Goregaon/Lower Parel</strong>. <strong>Shopify merchants in Powai/BKC</strong>. <strong>Bhiwandi fulfilment warehouses</strong> for Amazon FBA. <strong>SEEPZ/JNPT</strong> cross-border sellers. TCS under S.52, TDS under S.194O, and multi-state GST make ecommerce accounting complex. Learn more about <a href="#">Ecommerce Accounting across India</a>.</p>
                <p>Patron's Marine Lines office handles all GST filings across 4 divisions, marketplace reconciliation, and tax compliance. Also see <a href="/gst-registration/mumbai">GST Registration in Mumbai</a> and <a href="/accounting-services/mumbai">Accounting Services in Mumbai</a>.</p>
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
                <h2 class="section-title">What Is Ecommerce Accounting</h2>
                <div class="content-text what-is-definition">
                    
                    <p>Specialised financial management of online businesses - marketplace sellers, D2C brands, digital commerce operators - covering <strong>payment reconciliation, TCS/TDS tracking, inventory valuation, and GST compliance</strong> under CGST Act 2017 and Income Tax Act 1961. For Mumbai sellers: <strong>S.52 TCS credit matching, S.194O TDS tracking, and multi-state GSTIN management</strong>.</p><p>Unlike traditional retail: multiple sales channels, automated marketplace deductions, payment gateway settlements, returns/refunds. Amazon TCS 1% reconciled against GSTR-2A. Flipkart settlement cycle gaps. Shopify D2C brands track Razorpay/PayU separately from COD. Each channel = distinct reconciliation challenge. Without it: <strong>2-5% revenue leakage</strong> is common.</p>

                </div>
                <div class="highlight-box" style="margin-top:20px;">
                    <p><strong>Key Terms for Ecommerce Accounting in Mumbai:</strong></p>
                    <p><strong>TCS S.52:</strong> 1% (0.5% CGST + 0.5% SGST) on net taxable supplies. Claim credit in GSTR-3B after GSTR-2A match. Mismatches common with multiple GSTINs.</p><p><strong>TDS S.194O:</strong> 0.1% on gross sales &gt; Rs 5L. Track across marketplaces. Reconcile Form 26AS/AIS. Incorrect PAN = missing credit.</p><p><strong>S.24(ix):</strong> Mandatory GST for all marketplace sellers regardless of turnover. Rs 40L exemption does NOT apply.</p><p><strong>Multi-State GST:</strong> FBA distributes to 5+ states. Each = separate GSTIN + GSTR-1 + GSTR-3B. Missing one = Rs 50/day per state.</p><p><strong>Marketplace Reconciliation:</strong> Amazon 7/14-day settlements. Flipkart weekly. 200+ line items daily across platforms.</p>

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
                            <text x="100" y="170" font-size="10" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial, sans-serif">Ecommerce Accounting in Mumbai</text>
                        </svg>
                    </div>
                    <div class="illustration-badge">
                        <span>TCS S.52 + S.194O</span>
                        <strong>Ecommerce Accounting</strong>
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
            <h2 class="section-title">Who Needs Ecommerce Accounting in Mumbai</h2>
            <div class="content-text">
                
                <p><strong>Amazon/Flipkart FBA Sellers (Bhiwandi):</strong> Multi-state GSTIN, TCS reconciliation, FBA fee tracking. Inventory across Maharashtra + 5+ states. Mandatory GST S.24(ix).</p><p><strong>D2C Brands (Andheri, Powai, Lower Parel):</strong> Shopify/own website. Payment gateway reconciliation, COD tracking, marketing ROI, investor MIS. VC-funded need monthly dashboards.</p><p><strong>Cross-Border Ecommerce (SEEPZ, JNPT):</strong> Export accounting, LUT/Bond under GST, FIRC tracking, forex gain/loss. Zero-rated exports.</p><p><strong>B2B Marketplace Sellers (Masjid Bunder, Crawford Market):</strong> Bulk invoice management, reverse charge, e-invoicing for &gt; Rs 5 Cr. Trading community shifting to B2B platforms.</p><p><strong>All Marketplace Sellers:</strong> S.24(ix) - GST mandatory regardless of turnover. Tax audit S.44AB if turnover &gt; Rs 1 Cr (Rs 10 Cr digital).</p>

            </div>
            </div>
        </div>
    </div>
</section>

<!-- SECTION 5: OUR SERVICES -->
<section class="content-section" id="services-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Ecommerce Accounting Services Included</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Service</th><th>What We Do</th></tr></thead>
                    <tbody>
                        <tr><td>Marketplace Payment Reconciliation</td><td>Amazon Seller Central, Flipkart Seller Hub, Meesho matched with bank settlements. Commissions, shipping, returns, promotional deductions for Mumbai sellers.</td></tr><tr><td>TCS Credit Tracking (S.52 CGST)</td><td>Monthly reconciliation of 1% TCS against GSTR-2A/2B credits. Multiple marketplace GSTINs. Critical for Mumbai multi-platform sellers.</td></tr><tr><td>TDS Compliance (S.194O)</td><td>0.1% TDS on gross sales &gt; Rs 5L. Reconciliation with Form 26AS and AIS. Multi-marketplace tracking for Mumbai sellers.</td></tr><tr><td>Multi-State GST Returns</td><td>GSTR-1 and GSTR-3B per state GSTIN. Mumbai sellers with Bhiwandi, Bangalore, Delhi, Kolkata warehouses. State-wise return management.</td></tr><tr><td>Inventory Valuation and COGS</td><td>FIFO/weighted average across warehouses. SKU-level profitability for D2C brands managing 500+ SKUs across channels.</td></tr><tr><td>Payment Gateway Reconciliation</td><td>Razorpay, PayU, Cashfree, PhonePe Business settlements matched with sales. COD remittance tracking for high-volume D2C.</td></tr><tr><td>GST Registration Multi-State</td><td>Fresh GSTIN for FBA states. Amendment. Ongoing filing with GST Commissionerate Mumbai and other states.</td></tr><tr><td>Investor MIS and Reporting</td><td>Monthly P&amp;L by channel, unit economics, CAC/LTV, burn rate for funded D2C brands in Powai and BKC.</td></tr>

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
            <h2 class="section-title">6-Step Ecommerce Accounting Process in Mumbai</h2>
            <p class="section-subtitle" style="text-align:left;max-width:100%;">Walk-in at Patron's Marine Lines, Mumbai office. Files with GST Commissionerate Mumbai (4 divisions), Income Tax, and RoC Mumbai.</p>
        </header>
        <div class="steps-container">
            <div class="step-card"><div class="step-content"><span class="step-badge">Step 1</span><h3 class="step-title">Seller Onboarding and Channel Mapping</h3><p class="step-description">CA reviews all channels (Amazon, Flipkart, Meesho, Shopify). Maps each to correct GSTIN with GST Commissionerate Mumbai. Dashboard access configured. Payment gateways linked. FBA state GSTINs mapped. Walk-in at Marine Lines.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Channels mapped</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Dashboards linked</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="15" y="5" width="90" height="70" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><line x1="30" y1="22" x2="85" y2="22" stroke="#F5A623" stroke-width="2.5" stroke-linecap="round"/><line x1="30" y1="35" x2="78" y2="35" stroke="#14365F" stroke-width="1.5" opacity="0.3"/><circle cx="85" cy="55" r="8" fill="#E8F5E9" stroke="#25D366" stroke-width="1"/><path d="M81 55l3 3 5-5" stroke="#25D366" stroke-width="1.5" stroke-linecap="round"/></svg></div><span class="illustration-label">Onboarded</span><span class="step-number-large">01</span></div></div></div>
<div class="step-card"><div class="step-content"><span class="step-badge">Step 2</span><h3 class="step-title">Software Configuration</h3><p class="step-description">Tally/Zoho with ecommerce chart: marketplace commissions, shipping, returns, TCS S.52, TDS S.194O, gateway fees. Multi-state GST mapped per GSTIN. Inventory method (FIFO/weighted average) set by product category.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Ecommerce ledgers live</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Multi-state mapped</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="15" y="5" width="90" height="70" rx="6" fill="#E8F5E9" stroke="#25D366" stroke-width="1.5"/><text x="60" y="22" font-size="5" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">Configured</text><rect x="25" y="30" width="70" height="18" rx="3" fill="#fff" stroke="#25D366" stroke-width="1"/><text x="60" y="42" font-size="5" fill="#14365F" text-anchor="middle" font-family="Arial">TCS + TDS + Multi-GST</text><text x="60" y="62" font-size="5" fill="#25D366" font-weight="600" text-anchor="middle" font-family="Arial">System Live</text></svg></div><span class="illustration-label">Configured</span><span class="step-number-large">02</span></div></div></div>
<div class="step-card"><div class="step-content"><span class="step-badge">Step 3</span><h3 class="step-title">Daily Reconciliation</h3><p class="step-description">Marketplace settlements matched to bank. Amazon 7/14-day, Flipkart weekly, Meesho schedules. TCS tracked GSTIN-wise against GSTR-2A. Returns/refunds with inventory adjustments. Prevents 2-5% revenue leakage for multi-platform Mumbai sellers.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Settlements matched</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>TCS reconciled</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="15" y="5" width="90" height="70" rx="6" fill="#FFF3E0" stroke="#F5A623" stroke-width="1.5"/><text x="60" y="22" font-size="5" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">Reconciled Daily</text><rect x="25" y="30" width="70" height="18" rx="3" fill="#fff" stroke="#F5A623" stroke-width="1"/><text x="60" y="42" font-size="5" fill="#14365F" text-anchor="middle" font-family="Arial">Amazon+Flipkart+Meesho</text><text x="60" y="62" font-size="5" fill="#F5A623" font-weight="600" text-anchor="middle" font-family="Arial">Zero Leakage</text></svg></div><span class="illustration-label">Reconciled</span><span class="step-number-large">03</span></div></div></div>
<div class="step-card"><div class="step-content"><span class="step-badge">Step 4</span><h3 class="step-title">Monthly GST Filing</h3><p class="step-description">GSTR-1 by 11th per state. GSTR-3B by 20th with TCS credits claimed. IGST vs CGST+SGST classified per transaction. ITC on warehousing (Bhiwandi), logistics, packaging, advertising claimed with documentation.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>GST filed per state</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>TCS credited</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="15" y="5" width="90" height="70" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><text x="60" y="22" font-size="5" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">GST Filed</text><rect x="25" y="30" width="70" height="18" rx="3" fill="#E8F5E9" stroke="#25D366" stroke-width="1"/><text x="60" y="42" font-size="5" fill="#14365F" text-anchor="middle" font-family="Arial">5-8 States + TCS Claim</text><text x="60" y="62" font-size="5" fill="#14365F" font-weight="600" text-anchor="middle" font-family="Arial">All Deadlines Met</text></svg></div><span class="illustration-label">Filed</span><span class="step-number-large">04</span></div></div></div>
<div class="step-card"><div class="step-content"><span class="step-badge">Step 5</span><h3 class="step-title">Monthly Financial Reporting</h3><p class="step-description">P&amp;L by channel, gross margin by SKU, marketing ROI, cash flow by 10th. For funded D2C: investor MIS with CAC, LTV, return rate, burn rate. Inventory ageing flags slow stock across Bhiwandi and own fulfilment.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>MIS by 10th</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Channel P&L ready</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="15" y="5" width="90" height="70" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><rect x="25" y="15" width="70" height="10" rx="3" fill="#25D366" opacity="0.15"/><text x="60" y="23" font-size="5" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">MIS Ready</text><text x="60" y="42" font-size="5" fill="#14365F" font-weight="600" text-anchor="middle" font-family="Arial">Channel + SKU + Investor</text><text x="60" y="58" font-size="4" fill="#14365F" text-anchor="middle" font-family="Arial">By 10th Monthly</text></svg></div><span class="illustration-label">Reported</span><span class="step-number-large">05</span></div></div></div>
<div class="step-card"><div class="step-content"><span class="step-badge">Step 6</span><h3 class="step-title">Year-End and Tax Compliance</h3><p class="step-description">GSTR-9 by 31 Dec. TCS/TDS reconciliation against Form 26AS/AIS. Income tax return. Tax audit S.44AB for &gt; Rs 1 Cr (Rs 10 Cr digital). Records retained 8 years per S.128(5). RoC Mumbai annual filing for Pvt Ltd/LLP sellers.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Year-end closed</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Tax audit ready</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="15" y="5" width="90" height="70" rx="6" fill="#E8F5E9" stroke="#25D366" stroke-width="1.5"/><text x="60" y="22" font-size="6" fill="#14365F" font-weight="800" text-anchor="middle" font-family="Arial">Year-End Done</text><rect x="25" y="30" width="70" height="15" rx="3" fill="#fff" stroke="#25D366" stroke-width="1"/><text x="60" y="40" font-size="5" fill="#14365F" text-anchor="middle" font-family="Arial">GSTR-9 + ITR + Audit</text><text x="60" y="62" font-size="5" fill="#25D366" font-weight="600" text-anchor="middle" font-family="Arial">Compliant</text></svg></div><span class="illustration-label">Complete</span><span class="step-number-large">06</span></div></div></div>


        </div>
    </div>
</section>

<!-- SECTION 8: DOCUMENTS REQUIRED -->
<section class="content-section" id="documents-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Documents Required for Ecommerce Accounting</h2>
            <div class="content-text">
                
                <ul><li>GSTIN Certificate (all registered states)</li><li>PAN Card of Entity</li><li>Marketplace Seller Dashboard Access (Amazon, Flipkart, Meesho)</li><li>Payment Gateway Statements (Razorpay, PayU, Cashfree, PhonePe)</li><li>Bank Statements (all operating accounts)</li><li>Purchase Invoices (manufacturers, wholesalers, importers)</li><li>Inventory Records (warehouse-wise stock, FBA snapshots)</li><li>Previous Year Returns (GST, ITR, audit reports)</li></ul><div class="highlight-box" style="margin-top:20px;"><p><strong>Mumbai-Specific:</strong> Cross-border sellers near JNPT/SEEPZ: include IEC, shipping bills, FIRC copies, and LUT under GST for zero-rated exports.</p></div>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 9: CHALLENGES -->
<section class="content-section" id="challenges-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Common Ecommerce Accounting Challenges in Mumbai</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Challenge</th><th>Impact</th><th>How Patron Accounting Solves It</th></tr></thead>
                    <tbody>
                        <tr><td>TCS Credit Mismatch (GSTR-2A)</td><td>Operators file GSTR-8; mismatches when TCS recorded against different GSTIN, late filing, or incorrect seller details. Amazon sellers often find credits missing for specific months.</td><td>Patron reconciles TCS monthly GSTIN-wise across all marketplaces. Manual follow-up with marketplace support when needed.</td></tr><tr><td>Multi-State GST (5-8 GSTINs)</td><td>Amazon FBA distributes to Maharashtra, Karnataka, Delhi, Telangana, West Bengal. Each state = separate GSTR-1 + 3B. Missing one = Rs 50/day per state per return.</td><td>Patron files all state GSTINs from Mumbai base. Deadline tracking across all states automated.</td></tr><tr><td>Marketplace Payment Reconciliation</td><td>Amazon: dozens of transaction types (sales, shipping, FBA fees, ads, returns, reimbursements). 3-4 platforms = 200+ line items daily. 2-5% leakage common.</td><td>Automated reconciliation across all platforms. Settlement matching daily for high-volume sellers.</td></tr><tr><td>S.194O TDS Tracking</td><td>0.1% TDS across multiple marketplaces. Must reconcile Form 26AS/AIS. Incorrect PAN mapping = missing credit. Demand notices from IT Dept.</td><td>Multi-marketplace TDS tracked. 26AS/AIS reconciliation. Credit claimed correctly in ITR.</td></tr><tr><td>D2C Inventory Valuation</td><td>500-2000 SKUs across own warehouse (Bhiwandi), FBA, dropship. FIFO/weighted average across channels. Expired, damaged returns, seasonal markdowns complicate COGS.</td><td>SKU-level COGS. Multi-warehouse valuation. Inventory ageing reports. Margin analytics by channel.</td></tr>

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
            <h2 class="section-title">Ecommerce Accounting Fees in Mumbai - 2026</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Fee Component</th><th>Amount</th></tr></thead>
                    <tbody>
                        <tr><td>Single Channel (&lt; Rs 50L turnover)</td><td>Rs 8,000 - Rs 15,000/month (3 days onboarding)</td></tr><tr><td>Multi-Channel (Rs 50L - Rs 5 Cr)</td><td>Rs 15,000 - Rs 35,000/month (5 days onboarding)</td></tr><tr><td>High-Volume / Multi-State (Rs 5 Cr+)</td><td>Rs 35,000 - Rs 75,000/month (7 days onboarding)</td></tr><tr><td>D2C Brand / Funded Startup</td><td>Custom quote (5-7 days onboarding)</td></tr>

                    </tbody>
                </table>
                </div>
                <p style="margin-top:16px;font-size:13px;color:var(--text-muted);font-style:italic;">All fees and charges listed are indicative only and do not constitute a binding offer. Final amounts may vary depending on the volume of work and the complexity involved.</p>
                <p style="margin-top:16px;">Professional service charges for drafting, filing, and representation are separate from the statutory fees. The exact fee depends on the complexity of the case, disputed amount, and number of hearings required. Contact us for a detailed quote.</p>
                <p style="margin-top:16px;"><strong>Get a free Ecommerce Accounting in Mumbai consultation - <a href="tel:+919459456700">Call +91 945 945 6700</a> or <a href="https://wa.me/919459456700?text=Hi%2C%20I%20need%20ecommerce%20accounting%20in%20Mumbai.%20Please%20call%20me." target="_blank">WhatsApp us</a>. No-obligation assessment.</strong></p>
            </div>
        </div>
    </div>
</section>

<!-- SECTION 11: TIMELINE -->
<section class="content-section" id="timeline-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Ecommerce Accounting Timeline</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Stage</th><th>Estimated Timeline</th></tr></thead>
                    <tbody>
                        <tr><td>Onboarding + Channel Mapping</td><td>3-5 working days (walk-in at Marine Lines)</td></tr><tr><td>Software Configuration</td><td>1-2 working days (Tally/Zoho ecommerce chart)</td></tr><tr><td>First Monthly Closure</td><td>10-15 working days (historical reconciliation)</td></tr><tr><td>Steady State Monthly Closure</td><td>By 10th of each month (ongoing)</td></tr><tr><td>GSTR-1 Filing</td><td>By 11th monthly (per state GSTIN)</td></tr><tr><td>GSTR-3B Filing</td><td>By 20th monthly (TCS credit claimed)</td></tr><tr><td>Year-End + Tax Audit</td><td>15-30 working days (GSTR-9 + ITR + S.44AB)</td></tr>

                    </tbody>
                </table>
                </div>
                <div class="highlight-box" style="margin-top:16px;">
                    
                    <p><strong>Penalties:</strong> Missing one state GSTIN return = Rs 50/day CGST + SGST. With 5-8 GSTINs, one month delay = Rs 50,000-80,000 in late fees. TCS credit not claimed in time lapses. S.194O TDS unreconciled triggers demand notices. Start professional ecommerce accounting today.</p>

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
            <h2 class="section-title">Why Choose Patron for Ecommerce Accounting in Mumbai</h2>
        </div>
        <div class="features-grid"><article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><h3 class="feature-title">Marine Lines Office</h3><p class="feature-text">Walk-in for sellers from Andheri, BKC, Powai, Lower Parel, Goregaon. TCS mismatches, multi-state GST, marketplace queries discussed face-to-face.</p></article><article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4"/></svg></div><h3 class="feature-title">Marketplace Expertise</h3><p class="feature-text">Amazon, Flipkart, Meesho, Shopify reconciliation built-in. TCS S.52 + TDS S.194O bundled. Multi-state GST for FBA sellers across 5-8 states.</p></article><article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg></div><h3 class="feature-title">Daily Reconciliation</h3><p class="feature-text">High-volume sellers get daily settlement matching. GSTR-1 by 11th. GSTR-3B by 20th. Monthly books by 10th. GSTR-9 before 31 December.</p></article><article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><path d="M12 6v6l4 2"/></svg></div><h3 class="feature-title">10,000+ Businesses</h3><p class="feature-text">Including Amazon/Flipkart sellers, D2C brands, Shopify merchants, cross-border exporters across Mumbai. 15+ years. 4.9 Google rating.</p></article></div>
    </div>
</section>

<!-- SECTION 12A: SOCIAL PROOF -->
<section class="content-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Trusted by 10,000+ Businesses Across India</h2>
            <div class="content-text">
                
                <p><strong>10,000+ Businesses | 4.9 Google Rating | 50,000+ Docs Filed | 15+ Years</strong></p><p>Including Amazon sellers, D2C brands, Shopify merchants, and cross-border exporters across Mumbai. Offices in Pune, Mumbai, Delhi, Gurugram.</p>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 13: SELF-FILING vs PROFESSIONAL COMPARISON -->
<section class="content-section" id="comparison-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Accounting by Ecommerce Model in Mumbai</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Seller Type</th><th>Accounting Obligation</th><th>Mumbai Note</th></tr></thead>
                    <tbody>
                        <tr><td>Amazon/Flipkart FBA Seller</td><td>Multi-state GSTIN, TCS reconciliation, FBA fee tracking, GSTR per state</td><td>Bhiwandi warehouse drives Maharashtra GSTIN; FBA distributes to 5+ states</td></tr><tr><td>D2C Brand (Shopify/Own)</td><td>Payment gateway reconciliation, COD tracking, marketing ROI, investor MIS</td><td>Andheri/Powai/Lower Parel cluster; VC-funded need monthly MIS</td></tr><tr><td>Cross-Border Ecommerce</td><td>Export accounting, LUT/Bond, FIRC, forex gain/loss</td><td>SEEPZ and JNPT corridor; zero-rated exports require LUT management</td></tr><tr><td>B2B Marketplace Seller</td><td>Bulk invoices, reverse charge, e-invoicing &gt; Rs 5 Cr</td><td>Masjid Bunder/Crawford Market trading community shifting to B2B platforms</td></tr>

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
            <h2 class="section-title">Related Accounting and Compliance Services</h2>
            <div class="content-text">
                
                <ul><li><a href="#">Ecommerce Accounting in India</a></li><li><a href="/gst-registration/mumbai">GST Registration in Mumbai</a></li><li><a href="/gst-returns/mumbai">GST Returns in Mumbai</a></li><li><a href="/accounting-services/mumbai">Accounting Services in Mumbai</a></li><li><a href="/tally-accounting">Tally Accounting</a></li><li><a href="/income-tax-return">Income Tax Return</a></li></ul>

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
                
                <p><strong>CGST Act 2017:</strong> S.24(ix): mandatory GST for marketplace sellers regardless of turnover. S.52: TCS 1% by operators. GSTR-8 by operators by 10th. Sellers claim in GSTR-3B.</p><p><strong>Income Tax:</strong> S.194O: TDS 0.1% on gross sales &gt; Rs 5L. S.44AB: tax audit &gt; Rs 1 Cr (Rs 10 Cr digital). Form 26AS/AIS reconciliation.</p><p><strong>Companies Act S.128:</strong> Books on accrual basis. Retained 8 years. Penalty Rs 50K-5L.</p><p><strong>Maharashtra PT Act 1975:</strong> PTRC monthly by 15th (post-Feb 2026). For ecommerce companies with salaried staff.</p><p><strong>Portals:</strong> <a href="https://www.gst.gov.in" target="_blank" rel="noopener">GST Portal</a> | <a href="https://www.mahagst.gov.in" target="_blank" rel="noopener">Maharashtra GST/PT</a></p>

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
                    <h2 class="faq-expanded__title">FAQs - Ecommerce Accounting in Mumbai</h2>
                    <p class="faq-expanded__lead">Answers to common questions. Call +91 945 945 6700.</p>
                    @include('partials.bigin-form', [
                        'variant'  => 'compact',
                        'service'  => 'Ecommerce Accounting in Mumbai',
                        'city'     => 'Mumbai',
                    ])
                </aside>
                <div class="faq-expanded__list">
                    <div class="faq-expanded__item" id="faq-1">
                        <h3 class="faq-expanded__q">Which GST office handles ecommerce seller compliance in Mumbai?</h3>
                        <div class="faq-expanded__a"><p>GST Commissionerate Mumbai across four divisions (East/West/Central/South). TCS by marketplace operators deposited with respective authorities. For multi-state FBA sellers, each state GSTIN managed with that state's GST authority. Patron's Marine Lines office handles all filings for Mumbai sellers.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-2">
                        <h3 class="faq-expanded__q">How much does ecommerce accounting cost in Mumbai?</h3>
                        <div class="faq-expanded__a"><p>Single channel (< Rs 50L): Rs 8,000-15,000/month. Multi-channel (Rs 50L-5 Cr): Rs 15,000-35,000. High-volume multi-state (Rs 5 Cr+): Rs 35,000-75,000. Funded D2C brands: custom quote based on channel count and reporting complexity.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-3">
                        <h3 class="faq-expanded__q">How does TCS under Section 52 work for Mumbai sellers?</h3>
                        <div class="faq-expanded__a"><p>Amazon/Flipkart collect TCS at 1% (0.5% CGST + 0.5% SGST intra-state, 1% IGST inter-state) on net taxable supplies. Deposited with government. Appears in seller GSTR-2A/2B. Seller claims credit in GSTR-3B. Patron reconciles monthly across all marketplaces.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-4">
                        <h3 class="faq-expanded__q">Is GST registration mandatory for selling on Amazon from Mumbai?</h3>
                        <div class="faq-expanded__a"><p>Yes. S.24(ix) CGST Act mandates GST for every marketplace seller regardless of turnover. Rs 40 lakh exemption does not apply. Even single sale requires valid GSTIN. Patron assists with fresh registration and multi-state GSTIN for FBA inventory.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-5">
                        <h3 class="faq-expanded__q">What accounting software works best for ecommerce sellers?</h3>
                        <div class="faq-expanded__a"><p>Tally Prime, Zoho Books, QuickBooks Online configured with marketplace-specific ledgers, TCS tracking, multi-state GST, payment gateway reconciliation. High-volume Amazon sellers get API-based automated settlement matching. D2C Shopify brands benefit from direct Zoho integration.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-6">
                        <h3 class="faq-expanded__q">Can I get ecommerce accounting done online from Mumbai?</h3>
                        <div class="faq-expanded__a"><p>Yes. Marketplace dashboard access, payment gateway reconciliation, GST filing, monthly MIS all handled digitally via cloud tools. Walk-in at Marine Lines for TCS mismatches, multi-state GST queries, or investor reporting discussions.</p></div>
                    </div>
                </div>
            </div>


            <!-- Quick Answers -->
            <div class="highlight-box" style="margin-top:32px;">
                <p><strong>Quick Answers</strong></p>
                <p><strong>Amazon pe bechne ke liye GST chahiye kya?</strong> Haan - S.24(ix) ke under har marketplace seller ko GST mandatory hai, turnover chahe kitna bhi ho.</p><p><strong>TCS kya hota hai ecommerce mein?</strong> Amazon/Flipkart aapke sale ka 1% TCS kaat ke government ko deta hai. GSTR-3B mein credit claim karo.</p><p><strong>Kitne state ka GST file karna padta hai?</strong> Jitne state mein FBA inventory hai, utne GSTINs chahiye - Mumbai seller ko 5-8 states ka file karna padta hai.</p>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 18: URGENCY CTA -->
<section class="content-section" style="background: var(--orange-lighter) !important; border-left: 4px solid var(--orange);">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">5-8 State GSTINs × Rs 50/Day = Massive Late Fees. Start Today.</h2>
            <div class="content-text">
                
                <p>Missing one state = Rs 50/day CGST + SGST. With 5-8 GSTINs, one month delay = Rs 50,000-80,000 in late fees. TCS credit not claimed in time lapses. S.194O TDS unreconciled = demand notices. Revenue leakage of 2-5% without reconciliation.</p><p><strong>Patron onboards in 3-5 days. <a href="tel:+919459456700">Call +91 945 945 6700</a> or <a href="https://wa.me/919459456700?text=Hi%2C%20I%20need%20ecommerce%20accounting%20in%20Mumbai." target="_blank">WhatsApp us</a>. From Rs 8,000/month.</strong></p>

            </div>
        </div>
    </div>
</section>

<!-- CONCLUSION + CTA BLOCK (Dark) -->
<section class="content-section" style="background: var(--blue) !important;">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title" style="color:#FFFFFF !important;">Your Online Business, Reconciled and Compliant</h2>
            <div class="content-text" style="text-align:left;">
                
                <p style="color:rgba(255,255,255,0.85);">Ecommerce accounting in Mumbai ensures GST S.24/52, Income Tax S.194O/44AB, and Companies Act S.128 compliance. For Amazon, Flipkart, Meesho, Shopify sellers from Andheri, Powai, BKC, Bhiwandi. Marketplace reconciliation, TCS/TDS, multi-state GST, investor MIS.</p><p style="color:rgba(255,255,255,0.85);">Patron Accounting, Marine Lines, Mumbai. 15+ years, 10,000+ businesses, 4.9 Google rating. Daily reconciliation. Monthly books by 10th. GSTR-1 by 11th. GSTR-3B by 20th.</p>

            </div>
            <div style="display:flex;gap:14px;flex-wrap:wrap;margin-top:24px;">
                <a href="tel:+919459456700" style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:var(--orange);color:#fff;border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#128222; Call +91 945 945 6700</a>
                <a href="https://wa.me/919459456700?text=Hi%2C%20I%20need%20ecommerce%20accounting%20in%20Mumbai.%20Please%20call%20me." target="_blank" style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:#25D366;color:#fff;border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#128172; WhatsApp Us</a>
                <a href="mailto:sales@patronaccounting.com?subject=Enquiry%20for%20Ecommerce%20Accounting%20Mumbai&body=Hello%20Patron%20Accounting%20Team%2C%0A%0AI%20need%20ecommerce%20accounting%20services%20in%20Mumbai.%0A%0APlease%20get%20in%20touch.%0A%0AThank%20you." style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:transparent;color:#fff;border:2px solid rgba(255,255,255,0.3);border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#9993;&#65039; Email Us</a>
            </div>
            <p style="color:rgba(255,255,255,0.7);font-size:13px;margin-top:16px;">Book a Free Consultation - No Obligation.</p>
        </div>
    </div>
</section>

<!-- GSTAT STATE BENCH CITY PAGES (32 Pages) -->
<section class="content-section" style="padding:48px 32px;background:var(--gray-50);">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title" style="text-align:center;margin-bottom:12px;">Ecommerce Accounting Across India</h2>
            <p style="text-align:center;color:var(--text-muted);font-size:15px;margin-bottom:40px;">Patron offers CA-led ecommerce accounting in 8 major cities.</p>
        
            <div class="pa-city-block" style="margin-bottom:40px;"><div class="pa-city-grid"><a href="#" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Pune</div><div class="pa-card-sub">Maharashtra</div></div></a><div class="pa-city-card" style="opacity:0.6; pointer-events:none; border:2px solid var(--orange); position:relative;"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Mumbai</div><div class="pa-card-sub">Maharashtra</div></div><span style="position:absolute; top:6px; right:8px; font-size:10px; color:var(--orange); font-weight:700; text-transform:uppercase; letter-spacing:0.5px;">You're here</span></div><a href="#" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Delhi</div><div class="pa-card-sub">Delhi NCR</div></div></a><a href="#" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Gurugram</div><div class="pa-card-sub">Haryana</div></div></a><a href="#" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Bangalore</div><div class="pa-card-sub">Karnataka</div></div></a><a href="#" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Hyderabad</div><div class="pa-card-sub">Telangana</div></div></a><a href="#" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Chennai</div><div class="pa-card-sub">Tamil Nadu</div></div></a><a href="#" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Kolkata</div><div class="pa-card-sub">West Bengal</div></div></a></div></div><div class="pa-city-block"><div class="pa-block-title">Related Services in Mumbai</div><div class="pa-block-sub">Accounting and GST for online sellers</div><div class="pa-cross-grid"><a href="/gst-registration/mumbai" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">GST Registration</div><div class="pa-card-sub">Mumbai</div></div></a><a href="/gst-returns/mumbai" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">GST Returns</div><div class="pa-card-sub">Mumbai</div></div></a><a href="/accounting-services/mumbai" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Accounting Services</div><div class="pa-card-sub">Mumbai</div></div></a><a href="/tally-accounting" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Tally Accounting</div><div class="pa-card-sub">India</div></div></a><a href="/income-tax-return" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Income Tax Return</div><div class="pa-card-sub">India</div></div></a><a href="/tds-return-filing-24q" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">TDS Returns</div><div class="pa-card-sub">India</div></div></a></div></div>
        </div>
    </div>
</section>

<!-- CONTENT FRESHNESS FOOTER -->
<section class="content-section" style="padding:32px;">
    <div class="content-container">
        <div class="text-content" style="font-size:13px;color:var(--text-muted);">
            <p><strong>Content Created:</strong> 20 March 2026 &nbsp;|&nbsp; <strong>Last Updated:</strong> <span id="lastUpdatedFooter">20 March 2026</span> &nbsp;|&nbsp; <strong>Next Review:</strong> 20 June 2026 &nbsp;|&nbsp; <strong>Reviewed By:</strong> CA &amp; CS Team, Patron Accounting LLP</p>
            <p>This page is reviewed quarterly (Freshness Tier 1) to reflect GST rule changes, TCS/TDS amendments, marketplace policy updates, and ecommerce compliance evolution. Next review: June 2026.</p>
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
