
@extends('layouts.service-app')

<!-- External Dependencies (loaded by master layout in production) -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Barlow:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,400&family=DM+Sans:opsz,wght@9..40,400;9..40,500;9..40,600;9..40,700&display=swap" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

@section('meta')
    <title>Trading Business Accounting in Delhi - Inventory & GST</title>
    <meta name="description" content="CA-led wholesale and retail accounting in Delhi. GST multi-slab, inventory valuation, e-way bill, e-invoicing. Serving Chandni Chowk, Sadar Bazar, Karol Bagh. Call +91 945 945 6700.">
    <link rel="canonical" href="/accounting-services-for-trading-industry/delhi">
    <meta name="robots" content="index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1">
    <meta property="og:title" content="Trading Business Accounting in Delhi - Inventory & GST">
    <meta property="og:description" content="CA-led wholesale and retail accounting in Delhi. GST multi-slab, inventory valuation, e-way bill, e-invoicing. Serving Chandni Chowk, Sadar Bazar, Karol Bagh. Call +91 945 945 6700.">
    <meta property="og:url" content="/accounting-services-for-trading-industry/delhi">
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="Patron Accounting">
    <meta property="og:image" content="https://www.patronaccounting.com/images/og-default-square.png">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="1200">
    <meta property="og:image:type" content="image/png">
    <meta property="og:image:secure_url" content="https://www.patronaccounting.com/images/og-default-square.png">
    <meta property="og:image:alt" content="Patron Accounting - partner you can rely on">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Trading Business Accounting in Delhi - Inventory & GST">
    <meta name="twitter:description" content="CA-led wholesale and retail accounting in Delhi. GST multi-slab, inventory valuation, e-way bill, e-invoicing. Serving Chandni Chowk, Sadar Bazar, Karol Bagh. Call +91 945 945 6700.">
    <meta name="twitter:image" content="https://www.patronaccounting.com/images/og-default-square.png">
@endsection

@section('schema')
    <script type="application/ld+json">{
  "@context": "https://schema.org",
  "@graph": [
    {
      "@type": "Service",
      "name": "Trading Accounting Services in Delhi",
      "description": "CA-led wholesale and retail accounting in Delhi. GST multi-slab, inventory valuation, e-way bill, e-invoicing. Serving Chandni Chowk, Sadar Bazar, Karol Bagh. Call +91 945 945 6700.",
      "url": "https://www.patronaccounting.com/accounting-services-for-trading-industry/delhi",
      "serviceType": "Trading Accounting Services in Delhi",
      "areaServed": {
        "@type": "City",
        "name": "Delhi",
        "containedInPlace": {
          "@type": "State",
          "name": "Delhi"
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
        "url": "https://www.patronaccounting.com/accounting-services-for-trading-industry/delhi",
        "price": "5000"
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
          "name": "Trading Wholesale Retail Accounting",
          "item": "https://www.patronaccounting.com/accounting-services-for-trading-industry"
        },
        {
          "@type": "ListItem",
          "position": 3,
          "name": "Trading Accounting Services in Delhi",
          "item": "https://www.patronaccounting.com/accounting-services-for-trading-industry/delhi"
        }
      ]
    },
    {
      "@type": "FAQPage",
      "mainEntity": [
        {
          "@type": "Question",
          "name": "Which GST zone handles Delhi traders?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "5 zones. Chandni Chowk/Sadar Bazar = Central/North. Lajpat Nagar = South. Patron files for all 5 from Rohini."
          }
        },
        {
          "@type": "Question",
          "name": "How much does trading accounting cost?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Retail from Rs 5,000/month. Mid-size Rs 10,000-18,000. Large wholesale Rs 20,000-40,000. Distributor/importer Rs 30,000+."
          }
        },
        {
          "@type": "Question",
          "name": "Do small traders need GST registration?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Mandatory >Rs 40L turnover (goods). Interstate sales = mandatory regardless. ≤Rs 1.5Cr can opt composition (1% GST, quarterly)."
          }
        },
        {
          "@type": "Question",
          "name": "Is e-invoicing mandatory for traders?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Yes, if aggregate turnover >Rs 5Cr. Every B2B invoice must have IRN + QR from NIC portal. Patron sets up and manages."
          }
        },
        {
          "@type": "Question",
          "name": "What is e-way bill requirement?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Goods >Rs 50K: intra-state Delhi AND interstate. Part-A + Part-B. Penalty = tax or Rs 10K whichever higher."
          }
        },
        {
          "@type": "Question",
          "name": "Can traders use presumptive taxation?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Yes. S.44AD: ≤Rs 2Cr, declare 8% profit (6% digital). No detailed books or audit needed. Above = full books + S.44AB."
          }
        },
        {
          "@type": "Question",
          "name": "How is GSTR-2B reconciliation done?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Monthly: purchase invoices matched to supplier GSTR-1 via GSTR-2B. Mismatches identified. Corrected before GSTR-3B ITC claim. Prevents lakhs in ITC loss."
          }
        },
        {
          "@type": "Question",
          "name": "What about year-end stock valuation?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Physical stock-take coordinated. Valued at lower of cost or NRV per Ind AS 2. COGS computed. Stock schedule for tax audit. Quick Answers Dukaan ka accounting kharcha? Chhoti dukaan Rs 5,000/month se. Wholesale Rs 10,000-18,000. Bade trader Rs 20,000+. E-way bill kab banana padta hai? Rs 50,000 se zyada ka maal - Delhi ke andar bhi aur bahar bhi. Part-A + Part-B dono complete karo. Composition mein interstate sale? Nahi. Sirf Delhi ke andar. Interstate ke liye regular GST chahiye."
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
                        Trading Accounting Services in Delhi: CA-Led GST, Inventory, and Compliance for Wholesale and Retail Businesses
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
                            <p class="mb-0 text-dark benefit-paragraph"><span>Documents:</span> PAN, GST certificate, purchase/sales invoices, bank statements, stock register, previous financials</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Fees:</span> Starting from Rs 5,000/month for small retail traders in Delhi</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Eligibility:</span> Wholesale, retail, distributors, commodity dealers, importers, FMCG/textile/electronics traders in Delhi</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Timeline:</span> Onboarding within 48 hours; daily transaction recording; GST filed by 20th</p>
                        </div>
                    </div>

                    <p class="mb-4 fw-bold" style="color: var(--blue); font-size: 15px;">Trading accounting for wholesale, retail, and distribution across every Delhi market.</p>

                    <div class="hero-cta">
                        <a href="tel:+919459456700" class="btn-video text-decoration-none">
                            <span class="play-circle"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="width:14px;height:14px;color:#fff"><path d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/></svg></span>
                            Call +91 945 945 6700
                        </a>
                        <a href="mailto:sales@patronaccounting.com" class="btn-sample text-decoration-none">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="width:18px;height:18px;"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,12 2,6"/></svg>
                            Email Us
                        </a>
                        <a href="https://wa.me/919459456700?text=Hi%2C%20I%20need%20trading%20accounting%20in%20Delhi." target="_blank" class="btn-sample text-decoration-none">
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
                                            'service'  => 'Trading Accounting Services in Delhi',
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
            <a href="#overview-section" class="toc-btn active">Overview</a><a href="#what-section" class="toc-btn">What Is It</a><a href="#who-section" class="toc-btn">Who Needs</a><a href="#services-section" class="toc-btn">Challenges</a><a href="#procedure-section" class="toc-btn">Process</a><a href="#documents-section" class="toc-btn">Documents</a><a href="#challenges-section" class="toc-btn">GST Slabs</a><a href="#fees-section" class="toc-btn">Pricing</a><a href="#timeline-section" class="toc-btn">Why Patron</a><a href="#benefits-section" class="toc-btn">Quality</a><a href="#comparison-section" class="toc-btn">Composition vs Regular</a><a href="#faq-section" class="toc-btn">FAQs</a>
        </div>
        <button class="toc-arrow right" id="tocRight">&#10095;</button>
    </div>
</div>

<!-- SECTION 2: OVERVIEW / INTRO + TL;DR -->
<section class="content-section" id="overview-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Trading Accounting in Delhi: Multi-Slab GST, Inventory, and Wholesale Compliance</h2>
            <div class="content-text">
                <div class="highlight-box" style="margin-bottom:20px;">
                    <p><strong>&#128204; TL;DR - Trading Accounting Services in Delhi Services at a Glance</strong></p>
                    <p>Trading accounting = multi-slab GST (0/5/12/18/28%) + HSN code per product + inventory valuation (FIFO/weighted avg) + e-way bill (>Rs 50K) + e-invoicing (>Rs 5Cr) + GSTR-2B ITC matching + stock valuation (Ind AS 2). Delhi = India's wholesale capital. Sadar Bazar Rs 300Cr/day. Chandni Chowk, Khari Baoli, Gandhi Nagar, Azadpur Mandi. From Rs 5,000/month. Patron Rohini office.</p>
                </div>
                <p>Delhi is India's undisputed wholesale trading capital. For a comprehensive overview, see our <a href="/accounting-services-for-trading-industry">Trading Accounting</a> national guide.</p><div class="table-responsive-wrapper"><table><thead><tr><th>Parameter</th><th>Detail</th></tr></thead><tbody><tr><td>GST Rates</td><td>0% (essentials), 5% (mass consumption), 12%, 18%, 28% (luxury). HSN per product</td></tr><tr><td>Cost From</td><td>Rs 5,000/month (small retail); Rs 12,000 (mid-size wholesale)</td></tr><tr><td>Key Compliance</td><td>Multi-slab GST, e-way bill (>Rs 50K), e-invoicing (>Rs 5Cr), S.44AD/44AB</td></tr><tr><td>Penalty Risk</td><td>Rs 50/day late GST. E-way bill = tax or Rs 10K. Cash >Rs 2L = 100% penalty</td></tr><tr><td>Delhi</td><td>No PT. Proposed Traders Welfare Board. GST amnesty under discussion</td></tr></tbody></table></div><p</p>
                <p>Sadar Bazar Rs 300Cr+ daily. Chandni Chowk (textiles/jewellery/spices). Khari Baoli (Asia's largest spice market). Gandhi Nagar (Asia's largest textile market). Azadpur Mandi (Asia's largest fruit/veg). Karol Bagh auto parts Rs 1,000Cr/month. No PT. 5 GST zones. Patron Rohini office serves every Delhi market.</p>
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
                <h2 class="section-title">What Are Trading Accounting Services?</h2>
                <div class="content-text what-is-definition">
                    
                    <p><strong>Definition:</strong> Specialised financial recording, GST compliance, inventory management, and reporting for businesses that buy and sell goods - under CGST Act (multi-slab HSN), IT Act (S.44AD/44AB), and Ind AS 2 (Inventories).</p><p><strong>Key differences from services:</strong> Inventory management (1000s of SKUs), COGS computation (FIFO/weighted avg), multi-slab GST on single invoice, purchase returns affecting GST + inventory, massive cash/credit transaction volumes.</p><p><strong>Delhi context:</strong> Sadar Bazar wholesaler with 500 daily invoices. Karol Bagh retailer with 2,000 SKUs. Azadpur Mandi dealer with perishable daily price fluctuations.</p><p>See <a href="/accounting-services">Accounting Services</a> for general accounting.</p>

                </div>
                <div class="highlight-box" style="margin-top:20px;">
                    <p><strong>Key Terms for Trading Accounting Services in Delhi:</strong></p>
                    <p><strong>HSN Code:</strong> Harmonized System Nomenclature. Each product mapped to correct code determining GST slab. Wrong HSN = wrong GST on every invoice.</p><p><strong>GSTR-2B Reconciliation:</strong> Monthly matching of purchase invoices with supplier GSTR-1 filings. Prevents ITC loss. Critical for wholesalers with 1000+ monthly purchases.</p><p><strong>Composition Scheme:</strong> For traders ≤Rs 1.5Cr. 1% GST (0.5+0.5). Quarterly CMP-08. No ITC. No interstate sales. Simplified.</p><p><strong>E-Way Bill:</strong> Mandatory for goods >Rs 50K (intra-state Delhi and interstate). Part-A + Part-B. Penalty = tax or Rs 10K.</p><p><strong>S.194Q/206C(1H):</strong> TDS 0.1% on purchases >Rs 50L/supplier. TCS 0.1% on sales >Rs 50L/buyer. For large Delhi traders.</p>

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
                            <text x="100" y="170" font-size="10" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial, sans-serif">Trading Accounting Services in Delhi</text>
                        </svg>
                    </div>
                    <div class="illustration-badge">
                        <span>Trading</span>
                        <strong>Multi-Slab GST</strong>
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
            <h2 class="section-title">Who Needs Trading Accounting in Delhi</h2>
            <div class="content-text">
                
                <p><strong>Wholesale (Chandni Chowk, Sadar Bazar):</strong> 100s of daily invoices. Multi-slab single-bill. 30-90 day credit. Multi-godown. GSTR-2B ITC critical.</p><p><strong>Spice/Commodity (Khari Baoli):</strong> Volatile prices. Weight-based billing. 0%/5%/12% GST (unbranded/branded/processed). Daily valuation.</p><p><strong>Textiles (Gandhi Nagar):</strong> Value-based GST: 5% (<Rs 1K/piece) / 12% (≥Rs 1K). Every invoice = classification exercise. E-way bill daily.</p><p><strong>Electronics (Nehru Place, Gaffar):</strong> 18% GST. Serial number tracking. Import IGST + customs duty ITC. Warranty management.</p><p><strong>Auto Parts (Karol Bagh, Kashmere Gate):</strong> Rs 1,000Cr/month aftermarket. 1000s of part numbers. S.194Q TDS on >Rs 50L purchases.</p><p><strong>Retail (Lajpat Nagar, Rohini, Saket):</strong> POS billing. Cash reconciliation. Composition scheme eligible ≤Rs 1.5Cr.</p>

            </div>
            </div>
        </div>
    </div>
</section>

<!-- SECTION 5: OUR SERVICES -->
<section class="content-section" id="services-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Common Trading Accounting Challenges in Delhi</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Service</th><th>What We Do</th></tr></thead>
                    <tbody>
                        <tr><td>Multi-Slab GST on Single Invoice</td><td>Chandni Chowk: textiles 5% + accessories 18% + bags 12% on one bill. 10% wrong HSN = massive GSTR-1 mismatch</td></tr><tr><td>E-Way Bill Non-Compliance</td><td>Sadar Bazar/Karol Bagh dispatches to UP/Haryana. Missing Part-B or expired = tax amount or Rs 10K penalty per consignment</td></tr><tr><td>ITC Loss (Unreconciled GSTR-2B)</td><td>100s of suppliers. Suppliers miss GSTR-1 or report wrong invoices. Without monthly GSTR-2B recon = lakhs lost in ITC</td></tr><tr><td>Cash Transaction Compliance</td><td>S.269ST: >Rs 2L cash receipt = 100% penalty. S.40A(3): >Rs 10K cash expense disallowed. Must transition to digital</td></tr><tr><td>Year-End Stock Valuation Errors</td><td>2,000-10,000 SKUs estimated instead of physically verified. Wrong stock = wrong profit = wrong tax. Ind AS 2 required</td></tr>

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
            <h2 class="section-title">6-Step Trading Accounting for Delhi</h2>
            <p class="section-subtitle" style="text-align:left;max-width:100%;">From HSN mapping to audit-ready trading financials.</p>
        </header>
        <div class="steps-container">
            <div class="step-card"><div class="step-content"><span class="step-badge">Step 1-2</span><h3 class="step-title">Assessment + HSN/GST Config</h3><p class="step-description">CA visits shop/warehouse. Maps product categories, GST slabs, godowns, credit patterns, daily volume. Every product mapped to correct HSN + GST slab. Software configured with multi-slab auto-GST, multi-godown inventory, FIFO/weighted average.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>HSN mapped</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Configured</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="15" y="5" width="90" height="70" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><text x="60" y="40" font-size="7" fill="#E8712C" font-weight="800" text-anchor="middle" font-family="Arial">HSN</text></svg></div><span class="illustration-label">Mapped</span><span class="step-number-large">01</span></div></div></div><div class="step-card"><div class="step-content"><span class="step-badge">Step 3-4</span><h3 class="step-title">Daily Entry + Monthly GST</h3><p class="step-description">Purchase invoices with supplier GSTIN + HSN. Sales invoices with correct GST per product. Returns processed. Bank recon by 5th. GSTR-1 by 11th with HSN-wise summary. GSTR-3B by 20th with ITC verified against GSTR-2B. E-way bills per dispatch.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>GST filed</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>ITC matched</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="20" y="15" width="80" height="50" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><text x="60" y="40" font-size="7" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">GSTR-2B</text></svg></div><span class="illustration-label">Reconciled</span><span class="step-number-large">02</span></div></div></div><div class="step-card"><div class="step-content"><span class="step-badge">Step 5-6</span><h3 class="step-title">Inventory + Year-End Audit</h3><p class="step-description">E-way bills managed. Physical stock reconciled monthly. Slow/dead stock flagged. Year-end: stock-take coordinated, closing stock valued (lower of cost/NRV per Ind AS 2), COGS computed, S.44AB tax audit if applicable. ITR with stock valuation schedule.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Stock valued</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Audit-ready</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="20" y="10" width="80" height="60" rx="8" fill="#E8F5E9" stroke="#25D366" stroke-width="2"/><path d="M52 40l5 5 12-12" stroke="#25D366" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/></svg></div><span class="illustration-label">Complete</span><span class="step-number-large">03</span></div></div></div>

        </div>
    </div>
</section>

<!-- SECTION 8: DOCUMENTS REQUIRED -->
<section class="content-section" id="documents-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Documents Required</h2>
            <div class="content-text">
                
                <div class="table-responsive-wrapper"><table><thead><tr><th>Document</th><th>Purpose</th><th>Notes</th></tr></thead><tbody><tr><td>PAN Card</td><td>Tax compliance</td><td>Entity + proprietor/partner</td></tr><tr><td>GST Certificate</td><td>Delhi zone + composition</td><td>CMP-02 if composition scheme</td></tr><tr><td>Purchase Invoices</td><td>ITC claims + HSN</td><td>All supplier invoices with GSTIN</td></tr><tr><td>Sales Invoices/Bills</td><td>Revenue + GST</td><td>Daily records from billing/POS</td></tr><tr><td>Bank Statements</td><td>Reconciliation</td><td>All accounts incl cash deposits</td></tr><tr><td>Stock Register</td><td>Inventory valuation</td><td>Opening + closing stock by product</td></tr><tr><td>Previous Financials</td><td>Continuity</td><td>Last 2-3 years</td></tr><tr><td>Delhi S&E Registration</td><td>Shop licence</td><td>Within 90 days of commencement</td></tr></tbody></table></div><div class="highlight-box" style="margin-top:20px;"><p><strong>Delhi tip:</strong> Sadar Bazar/Chandni Chowk wholesale traders with high daily cash: maintain daily cash register reconciled with bank deposits. GST officers conduct surprise inspections in wholesale markets. Reconciled cash book + matching e-way bills prevents adverse findings. See <a href="/gst-registration">GST Registration</a>.</p></div>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 9: CHALLENGES -->
<section class="content-section" id="challenges-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">GST Slabs for Delhi Trading Products</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Challenge</th><th>Impact</th><th>How Patron Accounting Solves It</th></tr></thead>
                    <tbody>
                        <tr><td>Unbranded food/spices (loose)</td><td>0% GST</td><td>Khari Baoli, Azadpur Mandi</td></tr><tr><td>Branded packed food/spices</td><td>5% GST</td><td>Khari Baoli wholesale</td></tr><tr><td>Textiles (<Rs 1,000/piece)</td><td>5% GST</td><td>Gandhi Nagar</td></tr><tr><td>Textiles (≥Rs 1,000/piece)</td><td>12% GST</td><td>Gandhi Nagar, Chandni Chowk</td></tr><tr><td>Electronics, hardware</td><td>18% GST</td><td>Nehru Place, Gaffar Market</td></tr><tr><td>Auto parts, accessories</td><td>18%/28% GST</td><td>Karol Bagh, Kashmere Gate</td></tr><tr><td>Household goods, toys</td><td>12%/18% GST</td><td>Sadar Bazar</td></tr><tr><td>Footwear (all prices)</td><td>5% GST</td><td>Sadar Bazar, Karol Bagh</td></tr>

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
            <h2 class="section-title">Trading Accounting Fees in Delhi</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Fee Component</th><th>Amount</th></tr></thead>
                    <tbody>
                        <tr><td>Small Retail / Composition</td><td>Rs 5,000 - Rs 8,000/month | CMP-08 quarterly, GSTR-4 annual, ITR (S.44AD)</td></tr><tr><td>Mid-Size Trader (up to Rs 5Cr)</td><td>Rs 10,000 - Rs 18,000/month | Monthly GST, multi-slab HSN, inventory, e-way bill, TDS</td></tr><tr><td>Large Wholesale Trader</td><td>Rs 20,000 - Rs 40,000/month | High-volume, GSTR-2B recon, multi-godown, tax audit, MIS</td></tr><tr><td>Distributor / Importer</td><td>Rs 30,000 - Rs 50,000+/month | Import accounting, customs ITC, interstate e-way, S.194Q, virtual CFO</td></tr><tr><td>Tax Audit (Section 44AB)</td><td>Rs 15,000 - Rs 50,000/year | With stock valuation schedule and trading P&L</td></tr>

                    </tbody>
                </table>
                </div>
                <p style="margin-top:16px;font-size:13px;color:var(--text-muted);font-style:italic;">All fees and charges listed are indicative only and do not constitute a binding offer. Final amounts may vary depending on the volume of work and the complexity involved.</p>
                <p style="margin-top:16px;">Professional service charges for drafting, filing, and representation are separate from the statutory fees. The exact fee depends on the complexity of the case, disputed amount, and number of hearings required. Contact us for a detailed quote.</p>
                <p style="margin-top:16px;"><strong>Get a free Trading Accounting Services in Delhi consultation - <a href="tel:+919459456700">Call +91 945 945 6700</a> or <a href="https://wa.me/919459456700?text=Hi%2C%20I%20need%20trading%20accounting%20in%20Delhi." target="_blank">WhatsApp us</a>. No-obligation assessment.</strong></p>
            </div>
        </div>
    </div>
</section>

<!-- SECTION 11: TIMELINE -->
<section class="content-section" id="timeline-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Why Choose Patron for Trading in Delhi?</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Stage</th><th>Estimated Timeline</th></tr></thead>
                    <tbody>
                        <tr><td>Delhi Office in Trading Hub</td><td>Rohini: accessible to Chandni Chowk, Sadar Bazar, Khari Baoli, Azadpur, Karol Bagh, Lajpat Nagar. Walk-in</td></tr><tr><td>Multi-Slab GST Expert</td><td>HSN mapped per product. 0-28% classified correctly. GSTR-2B ITC reconciled monthly. No mismatch notices</td></tr><tr><td>Inventory Specialist</td><td>FIFO/weighted avg. Multi-godown. Physical vs book stock. Year-end valuation per Ind AS 2. Audit-ready</td></tr><tr><td>E-Way Bill Managed</td><td>Every dispatch >Rs 50K. Part-A + Part-B. Validity tracked. No expired bills. No penalties</td></tr><tr><td>From Rs 5,000/Month</td><td>Composition to large wholesale. Scales with growth. 48-hour onboarding. No PT in Delhi</td></tr>

                    </tbody>
                </table>
                </div>
                <div class="highlight-box" style="margin-top:16px;">
                    
                    <p><strong>Critical:</strong> GST monthly (Rs 50/day late). E-way bill penalty = tax or Rs 10K. Cash >Rs 2L = 100% penalty (S.271DA). GSTR-2B ITC lost if not reconciled monthly. Stock valuation errors inflate tax. 48-hour onboarding. From Rs 5,000/month.</p>

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
            <h2 class="section-title">Patron vs General CAs</h2>
        </div>
        <div class="features-grid"><article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><h3 class="feature-title">Patron: HSN Correct</h3><p class="feature-text">Every product mapped to correct HSN + GST slab. Multi-slab single invoice handled. Zero GSTR-1 mismatch.</p></article><article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 9v2m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><h3 class="feature-title">Others: Single Slab</h3><p class="feature-text">Apply one GST rate to all products. Wrong HSN on invoices. GSTR-1 mismatches + client ITC rejection.</p></article><article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M14 2H6a2 2 0 00-2 2v16a2 2 0 002 2h12a2 2 0 002-2V8z"/><path d="M14 2v6h6M16 13H8M16 17H8"/></svg></div><h3 class="feature-title">Patron: GSTR-2B Monthly</h3><p class="feature-text">Purchase invoices matched to supplier GSTR-1 every month. ITC claims verified. Lakhs saved from mismatch loss.</p></article><article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><path d="M12 6v6l4 2"/></svg></div><h3 class="feature-title">Patron: Stock Valued</h3><p class="feature-text">Physical verification coordinated. FIFO/weighted avg. Lower of cost/NRV per Ind AS 2. Audit-proof valuation.</p></article></div>
    </div>
</section>

<!-- SECTION 12A: SOCIAL PROOF -->
<section class="content-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Trusted by 10,000+ Businesses Across India</h2>
            <div class="content-text">
                
                <p><strong>Trust Banner:</strong> 10,000+ Businesses | 4.9 Google Rating | 50,000+ Documents Filed | 15+ Years</p><blockquote style="border-left:3px solid var(--orange);padding:16px 20px;margin:20px 0;background:var(--orange-lighter);border-radius:0 var(--radius-sm) var(--radius-sm) 0;"><p style="font-style:italic;margin-bottom:8px;">"Sadar Bazar wholesale. 400 invoices/day across 5 GST slabs. Patron mapped every HSN. GSTR-2B reconciled monthly - saved Rs 8L in ITC that would have been lost."</p><p style="font-weight:700;font-size:14px;margin:0;">- Wholesale Trader, Sadar Bazar</p></blockquote><blockquote style="border-left:3px solid var(--orange);padding:16px 20px;margin:20px 0;background:var(--orange-lighter);border-radius:0 var(--radius-sm) var(--radius-sm) 0;"><p style="font-style:italic;margin-bottom:8px;">"Gandhi Nagar textiles. Value-based GST 5%/12% per piece correctly classified. E-way bills for interstate managed daily. Stock valuation accurate at year-end."</p><p style="font-weight:700;font-size:14px;margin:0;">- Textile Trader, Gandhi Nagar</p></blockquote>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 13: SELF-FILING vs PROFESSIONAL COMPARISON -->
<section class="content-section" id="comparison-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Composition Scheme vs Regular GST</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Parameter</th><th>Composition Scheme</th><th>Regular GST</th></tr></thead>
                    <tbody>
                        <tr><td>Turnover Limit</td><td>Up to Rs 1.5 crore</td><td>No limit</td></tr><tr><td>GST Rate</td><td>1% (0.5% + 0.5%)</td><td>Multi-slab: 5/12/18/28%</td></tr><tr><td>ITC</td><td>Not available</td><td>Full ITC on purchases</td></tr><tr><td>Returns</td><td>CMP-08 quarterly + GSTR-4 annual</td><td>GSTR-1 monthly + GSTR-3B monthly</td></tr><tr><td>Interstate Sales</td><td>NOT allowed</td><td>Allowed</td></tr><tr><td>Best For</td><td>Small Delhi retailers selling locally</td><td>Wholesalers, distributors, interstate traders</td></tr>

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
                
                <ul><li><a href="/accounting-services-for-trading-industry">Trading Accounting (National)</a></li><li><a href="/accounting-services">Accounting Services</a></li><li><a href="/gst-registration">GST Registration</a></li><li><a href="/tally-accounting">Tally Accounting</a></li><li><a href="/statutory-audit">Statutory Audit</a></li></ul>

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
                
                <p><strong>CGST Act 2017:</strong> Multi-slab GST. E-invoicing >Rs 5Cr. E-way bill >Rs 50K. Composition S.10 (≤Rs 1.5Cr). Rs 50/day late. E-way penalty = tax or Rs 10K.</p><p><strong>IT Act 1961:</strong> S.44AD presumptive 8% (6% digital). S.44AB audit >Rs 1Cr (Rs 10Cr digital). S.194Q TDS 0.1% purchases >Rs 50L. S.206C(1H) TCS. S.269ST cash Rs 2L. S.40A(3) Rs 10K cash expense.</p><p><strong>Ind AS 2:</strong> Inventory at lower of cost or NRV. FIFO or weighted average.</p><p><strong>Delhi:</strong> No PT. Proposed Traders Welfare Board. GST amnesty under discussion. S&E Act for shops.</p>

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
                    <h2 class="faq-expanded__title">FAQs - Trading Accounting in Delhi</h2>
                    <p class="faq-expanded__lead">Common questions about trading accounting, multi-slab GST, e-way bills, and inventory for Delhi wholesale and retail businesses.</p>
                    @include('partials.bigin-form', [
                        'variant'  => 'compact',
                        'service'  => 'Trading Accounting Services in Delhi',
                        'city'     => 'Delhi',
                    ])
                </aside>
                <div class="faq-expanded__list">
                    <div class="faq-expanded__item" id="faq-1">
                        <h3 class="faq-expanded__q">Which GST zone handles Delhi traders?</h3>
                        <div class="faq-expanded__a"><p>5 zones. Chandni Chowk/Sadar Bazar = Central/North. Lajpat Nagar = South. Patron files for all 5 from Rohini.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-2">
                        <h3 class="faq-expanded__q">How much does trading accounting cost?</h3>
                        <div class="faq-expanded__a"><p>Retail from Rs 5,000/month. Mid-size Rs 10,000-18,000. Large wholesale Rs 20,000-40,000. Distributor/importer Rs 30,000+.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-3">
                        <h3 class="faq-expanded__q">Do small traders need GST registration?</h3>
                        <div class="faq-expanded__a"><p>Mandatory >Rs 40L turnover (goods). Interstate sales = mandatory regardless. ≤Rs 1.5Cr can opt composition (1% GST, quarterly).</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-4">
                        <h3 class="faq-expanded__q">Is e-invoicing mandatory for traders?</h3>
                        <div class="faq-expanded__a"><p>Yes, if aggregate turnover >Rs 5Cr. Every B2B invoice must have IRN + QR from NIC portal. Patron sets up and manages.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-5">
                        <h3 class="faq-expanded__q">What is e-way bill requirement?</h3>
                        <div class="faq-expanded__a"><p>Goods >Rs 50K: intra-state Delhi AND interstate. Part-A + Part-B. Penalty = tax or Rs 10K whichever higher.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-6">
                        <h3 class="faq-expanded__q">Can traders use presumptive taxation?</h3>
                        <div class="faq-expanded__a"><p>Yes. S.44AD: ≤Rs 2Cr, declare 8% profit (6% digital). No detailed books or audit needed. Above = full books + S.44AB.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-7">
                        <h3 class="faq-expanded__q">How is GSTR-2B reconciliation done?</h3>
                        <div class="faq-expanded__a"><p>Monthly: purchase invoices matched to supplier GSTR-1 via GSTR-2B. Mismatches identified. Corrected before GSTR-3B ITC claim. Prevents lakhs in ITC loss.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-8">
                        <h3 class="faq-expanded__q">What about year-end stock valuation?</h3>
                        <div class="faq-expanded__a"><p>Physical stock-take coordinated. Valued at lower of cost or NRV per Ind AS 2. COGS computed. Stock schedule for tax audit.</p></div>
                    </div>
                </div>
            </div>


            <!-- Quick Answers -->
            <div class="highlight-box" style="margin-top:32px;">
                <p><strong>Quick Answers</strong></p>
                <p><strong>Dukaan ka accounting kharcha?</strong> Chhoti dukaan Rs 5,000/month se. Wholesale Rs 10,000-18,000. Bade trader Rs 20,000+.</p><p><strong>E-way bill kab banana padta hai?</strong> Rs 50,000 se zyada ka maal - Delhi ke andar bhi aur bahar bhi. Part-A + Part-B dono complete karo.</p><p><strong>Composition mein interstate sale?</strong> Nahi. Sirf Delhi ke andar. Interstate ke liye regular GST chahiye.</p>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 18: URGENCY CTA -->
<section class="content-section" style="background: var(--orange-lighter) !important; border-left: 4px solid var(--orange);">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">GSTR-2B Not Reconciled? ITC at Risk? Act Now</h2>
            <div class="content-text">
                
                <p>GST monthly (Rs 50/day late). E-way bill penalty = tax or Rs 10K. Cash >Rs 2L = 100% penalty. GSTR-2B ITC lost if not reconciled monthly. Stock errors inflate tax. 48-hour onboarding. From Rs 5,000/month.</p><p><strong><a href="tel:+919459456700">Call +91 945 945 6700</a> or <a href="https://wa.me/919459456700?text=Hi%2C%20I%20need%20trading%20accounting%20in%20Delhi." target="_blank">WhatsApp us</a>.</strong></p>

            </div>
        </div>
    </div>
</section>

<!-- CONCLUSION + CTA BLOCK (Dark) -->
<section class="content-section" style="background: var(--blue) !important;">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title" style="color:#FFFFFF !important;">Get Expert Trading Accounting in Delhi</h2>
            <div class="content-text" style="text-align:left;">
                
                <p style="color:rgba(255,255,255,0.85);">Trading accounting in Delhi covers multi-slab GST with HSN classification, inventory valuation, e-way bills, e-invoicing, GSTR-2B purchase reconciliation, and stock valuation for India's largest wholesale markets.</p><p style="color:rgba(255,255,255,0.85);">Patron's Rohini office provides CA-led accounting for traders in Chandni Chowk, Sadar Bazar, Khari Baoli, Gandhi Nagar, Karol Bagh, Lajpat Nagar, Azadpur Mandi, and every Delhi market.</p><p style="color:rgba(255,255,255,0.85);">With 15+ years, 10,000+ businesses, and a 4.9 Google rating, Patron ensures trading finances are classified, compliant, and audit-ready.</p>

            </div>
            <div style="display:flex;gap:14px;flex-wrap:wrap;margin-top:24px;">
                <a href="tel:+919459456700" style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:var(--orange);color:#fff;border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#128222; Call +91 945 945 6700</a>
                <a href="https://wa.me/919459456700?text=Hi%2C%20I%20need%20trading%20accounting%20in%20Delhi." target="_blank" style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:#25D366;color:#fff;border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#128172; WhatsApp Us</a>
                <a href="mailto:sales@patronaccounting.com?subject=Trading%20Accounting%20Delhi&body=Hi%2C%20I%20need%20trading%20accounting%20in%20Delhi." style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:transparent;color:#fff;border:2px solid rgba(255,255,255,0.3);border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#9993;&#65039; Email Us</a>
            </div>
            <p style="color:rgba(255,255,255,0.7);font-size:13px;margin-top:16px;">Book a Free Consultation - No Obligation.</p>
        </div>
    </div>
</section>

<!-- GSTAT STATE BENCH CITY PAGES (32 Pages) -->
<section class="content-section" style="padding:48px 32px;background:var(--gray-50);">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title" style="text-align:center;margin-bottom:12px;">Trading Accounting - Available Cities</h2>
            <p style="text-align:center;color:var(--text-muted);font-size:15px;margin-bottom:40px;">Expert trading accounting across major Indian cities</p>
         
            <div class="pa-city-block" style="margin-bottom:40px;"><div class="pa-block-title">City-Wise Trading Accounting</div><div class="pa-block-sub">Select your city</div><div class="pa-city-grid"><a href="/trading-accounting-services/mumbai" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Mumbai</div><div class="pa-card-sub">Maharashtra</div></div></a><div class="pa-city-card" style="opacity:0.6; pointer-events:none; border:2px solid var(--orange); position:relative;"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Delhi</div><div class="pa-card-sub">Delhi NCR</div></div><span style="position:absolute; top:6px; right:8px; font-size:10px; color:var(--orange); font-weight:700; text-transform:uppercase; letter-spacing:0.5px;">You're here</span></div></div></div><div class="pa-city-block"><div class="pa-block-title">Related Services in Delhi</div><div class="pa-block-sub">Trading compliance</div><div class="pa-cross-grid"><a href="/accounting-services/delhi" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Accounting Services</div><div class="pa-card-sub">Delhi</div></div></a><a href="/tally-accounting/delhi" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Tally Accounting</div><div class="pa-card-sub">Delhi</div></div></a><a href="/gst-registration/delhi" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">GST Registration</div><div class="pa-card-sub">Delhi</div></div></a><a href="/statutory-audit/delhi" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Statutory Audit</div><div class="pa-card-sub">Delhi</div></div></a><a href="/income-tax-return/delhi" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Income Tax Return</div><div class="pa-card-sub">Delhi</div></div></a><a href="#" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">GST Return Filing</div><div class="pa-card-sub">Delhi</div></div></a></div></div>
        </div>
    </div>
</section>

<!-- CONTENT FRESHNESS FOOTER -->
<section class="content-section" style="padding:32px;">
    <div class="content-container">
        <div class="text-content" style="font-size:13px;color:var(--text-muted);">
            <p><strong>Content Created:</strong> 06 April 2026 &nbsp;|&nbsp; <strong>Last Updated:</strong> <span id="lastUpdatedFooter">06 April 2026</span> &nbsp;|&nbsp; <strong>Next Review:</strong> 06 July 2026 &nbsp;|&nbsp; <strong>Reviewed By:</strong> CA &amp; CS Team, Patron Accounting LLP</p>
            <p>This page is reviewed quarterly. GST slabs, HSN codes, e-invoicing thresholds, e-way bill rules, composition limits, and S.194Q are verified.</p>
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
