
@extends('layouts.service-app')

<!-- External Dependencies (loaded by master layout in production) -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Barlow:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,400&family=DM+Sans:opsz,wght@9..40,400;9..40,500;9..40,600;9..40,700&display=swap" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

@section('meta')
    <title>Trading Business Accounting in Pune - Inventory & GST</title>
    <meta name="description" content="CA-managed accounting for wholesale and retail traders in Pune. GST multi-rate, composition scheme, e-way bills, stock audit for Market Yard, Shukrawar Peth, Camp. Call +91 945 945 6700.">
    <link rel="canonical" href="/accounting-services-for-trading-industry/pune">
    <meta name="robots" content="index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1">
    <meta property="og:title" content="Trading Business Accounting in Pune - Inventory & GST">
    <meta property="og:description" content="CA-managed accounting for wholesale and retail traders in Pune. GST multi-rate, composition scheme, e-way bills, stock audit for Market Yard, Shukrawar Peth, Camp. Call +91 945 945 6700.">
    <meta property="og:url" content="/accounting-services-for-trading-industry/pune">
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="Patron Accounting">
    <meta property="og:image" content="https://www.patronaccounting.com/images/og-default-square.png">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="1200">
    <meta property="og:image:type" content="image/png">
    <meta property="og:image:secure_url" content="https://www.patronaccounting.com/images/og-default-square.png">
    <meta property="og:image:alt" content="Patron Accounting - partner you can rely on">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Trading Business Accounting in Pune - Inventory & GST">
    <meta name="twitter:description" content="CA-managed accounting for wholesale and retail traders in Pune. GST multi-rate, composition scheme, e-way bills, stock audit for Market Yard, Shukrawar Peth, Camp. Call +91 945 945 6700.">
    <meta name="twitter:image" content="https://www.patronaccounting.com/images/og-default-square.png">
@endsection

@section('schema')
    <script type="application/ld+json">{
  "@context": "https://schema.org",
  "@graph": [
    {
      "@type": "Service",
      "name": "Trading Wholesale Retail Accounting in Pune",
      "description": "CA-managed accounting for wholesale and retail traders in Pune. GST multi-rate, composition scheme, e-way bills, stock audit for Market Yard, Shukrawar Peth, Camp. Call +91 945 945 6700.",
      "url": "https://www.patronaccounting.com/accounting-services-for-trading-industry/pune",
      "serviceType": "Trading Wholesale Retail Accounting in Pune",
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
        "url": "https://www.patronaccounting.com/accounting-services-for-trading-industry/pune",
        "price": "2499"
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
          "name": "Trading Wholesale Retail Accounting in Pune",
          "item": "https://www.patronaccounting.com/accounting-services-for-trading-industry/pune"
        }
      ]
    },
    {
      "@type": "FAQPage",
      "mainEntity": [
        {
          "@type": "Question",
          "name": "Which GST office handles traders in Pune?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "The GST Commissionerate, Pune handles all GST matters for trading businesses in Pune. Whether you operate a wholesale shop in Market Yard, a textile store in Shukrawar Peth, or an electronics outlet in Camp, all GSTR-1, GSTR-3B, and GSTR-4 filings fall under this commissionerate. Assessment proceedings and notices are issued by Pune division officers."
          }
        },
        {
          "@type": "Question",
          "name": "Can Pune traders use GST Composition Scheme?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Yes. Traders in Pune with aggregate turnover up to Rs 1.5 crore can opt for Composition Scheme under Section 10 CGST Act. Tax rate is 1% of turnover (0.5% CGST + 0.5% SGST). However, composition dealers cannot claim ITC, cannot make inter-state sales, cannot supply through e-commerce, and must file quarterly GSTR-4. Patron's CA analyses whether Composition or Regular is more profitable."
          }
        },
        {
          "@type": "Question",
          "name": "How much does trader accounting cost in Pune?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Trading accounting starts from Rs 2,499 per month for small traders under Section 44AD. Wholesale distributors pay Rs 4,999/month. Large trading companies above Rs 5 crore pay Rs 9,999/month including e-invoicing support. Stock audit is Rs 14,999 onwards annually."
          }
        },
        {
          "@type": "Question",
          "name": "Is Section 44AD available for Pune traders?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Yes. Traders with turnover up to Rs 3 crore can use Section 44AD presumptive taxation. Deemed profit is 8% of total turnover or 6% for digital receipts. No requirement to maintain detailed books or get tax audit. ITR-4 filed by 31 July. Patron monitors turnover quarterly and alerts before the Rs 3 crore threshold."
          }
        },
        {
          "@type": "Question",
          "name": "When do Pune traders need e-way bills?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "E-way bills are mandatory for goods movement above Rs 50,000 within Maharashtra (intra-state) or to other states. Generated on ewaybillgst.gov.in before dispatch. Validity is 1 day per 200 km. For Pune-Mumbai dispatches (150 km), one day is sufficient. Movement without valid e-way bill attracts 200% penalty under Section 129 CGST Act."
          }
        },
        {
          "@type": "Question",
          "name": "Do retail shops in Pune need GST registration?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Retail shops with aggregate turnover above Rs 40 lakh (goods) must register for GST. Below this, registration is voluntary. Registered retailers can opt for Composition (1% if under Rs 1.5 crore) or Regular scheme with ITC. Patron helps Pune retailers choose the right pathway."
          }
        },
        {
          "@type": "Question",
          "name": "What is TCS under Section 206C(1H) for Pune wholesalers?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Sellers with turnover above Rs 10 crore must collect TCS at 0.1% on sale consideration exceeding Rs 50 lakh to a single buyer per year. For Pune wholesalers in Market Yard or Pimpri-Chinchwad with large B2B sales, this means tracking per-buyer cumulative sales. TCS is deposited by 7th of the following month. Patron tracks every buyer threshold."
          }
        },
        {
          "@type": "Question",
          "name": "What accounting does a wholesale business in Pune need?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Pune wholesale businesses need GST-compliant invoicing with correct HSN codes, purchase recording with vendor GSTIN verification, inventory management with stock valuation, e-way bill generation for goods dispatch, TCS collection under Section 206C(1H) on sales above Rs 50 lakh, monthly GSTR-1/3B filing, and annual ITR with or without tax audit depending on turnover. Quick Answers Trader ka GST kitna lagta hai? HSN code ke hisaab se 0-28%. Composition scheme mein 1% flat. Section 44AD kya hai traders ke liye? Turnover ka 8% (6% digital) profit maano. Rs 3 crore tak. No audit. E-way bill kab banana padta hai? Rs 50,000 se zyada ka maal bhejte waqt. Intra-state aur inter-state dono. Pune mein trader ka accounting kitne mein hota hai? Rs 2,499/month se start. Patron Accounting, Wagholi. TCS kya hota hai wholesaler ke liye? Rs 50 lakh se zyada ki sale pe 0.1% collect karna padta hai buyer se."
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
                        Trading (Wholesale/Retail) Accounting Services in Pune: CA-Managed Compliance for Traders
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
                            <p class="mb-0 text-dark benefit-paragraph"><span>Documents:</span> PAN, GST certificate, purchase/sales invoices, stock register, bank statements, e-way bill records</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Fees:</span> Starting from Rs 2,499/month for Pune traders</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Eligibility:</span> All wholesale distributors, retail shops, commodity traders, and trading companies in Pune</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Timeline:</span> Onboarding in 48 hours; monthly compliance cycle thereafter</p>
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
                        <a href="https://wa.me/919459456700?text=Hi%2C%20I%20need%20trading%20accounting%20services%20in%20Pune.%20Please%20share%20details." target="_blank" class="btn-sample text-decoration-none">
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
                                            'service'  => 'Trading Accounting in Pune',
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
            <a href="#overview-section" class="toc-btn">Overview</a><a href="#what-section" class="toc-btn">What Is It</a><a href="#who-section" class="toc-btn">Who Needs It</a><a href="#services-section" class="toc-btn">Services</a><a href="#procedure-section" class="toc-btn">Process</a><a href="#documents-section" class="toc-btn">Documents</a><a href="#challenges-section" class="toc-btn">Challenges</a><a href="#fees-section" class="toc-btn">Fees</a><a href="#timeline-section" class="toc-btn">Timeline</a><a href="#benefits-section" class="toc-btn">Why Choose Us</a><a href="#comparison-section" class="toc-btn">DIY vs Professional</a><a href="#faq-section" class="toc-btn">FAQs</a>
        </div>
        <button class="toc-arrow right" id="tocRight">&#10095;</button>
    </div>
</div>

<!-- SECTION 2: OVERVIEW / INTRO + TL;DR -->
<section class="content-section" id="overview-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Trading Accounting in Pune: Specialist CA Services for the City's Wholesale and Retail Economy</h2>
            <div class="content-text">
                <div class="highlight-box" style="margin-bottom:20px;">
                    <p><strong>&#128204; TL;DR - Trading Accounting in Pune Services at a Glance</strong></p>
                    <p>Trading businesses in Pune - wholesale distributors in Market Yard and Shukrawar Peth, retail shops across Pune Camp and Deccan, and industrial traders in Pimpri-Chinchwad - deal with multi-rate GST (0%, 5%, 12%, 18%, 28%), inventory valuation (FIFO/weighted average), e-way bill compliance, TCS under Section 206C(1H) on sales above Rs 50 lakh, and Section 44AD presumptive taxation. Patron Accounting provides dedicated CA services for Pune traders from Rs 2,499/month.</p><div class="table-responsive-wrapper" style="margin-top:16px;"><table><thead><tr><th>Parameter</th><th>Detail</th></tr></thead><tbody><tr><td>Governing Law</td><td>CGST Act 2017, Income Tax Act 1961, Maharashtra PT Act 1975, Maharashtra Shops &amp; Est. Act 2017</td></tr><tr><td>GST Rates</td><td>Multi-rate: 0%, 5%, 12%, 18%, 28%. Composition: 1% (up to Rs 1.5 crore)</td></tr><tr><td>Presumptive Taxation</td><td>Section 44AD: 8% of turnover (6% digital) up to Rs 3 crore</td></tr><tr><td>TCS on Sales</td><td>Section 206C(1H): 0.1% on sale above Rs 50 lakh/year per buyer</td></tr><tr><td>E-Way Bill</td><td>Mandatory for goods above Rs 50,000 (intra and inter-state)</td></tr><tr><td>Cost Starting From</td><td>Rs 2,499/month (Patron Accounting)</td></tr><tr><td>Jurisdictional Office</td><td>GST Commissionerate, Pune</td></tr></tbody></table></div></p>
                </div>
                <p>Pune's trading economy centers around Market Yard (APMC Gultekdi) for agricultural commodities, Shukrawar Peth and Budhwar Peth for textiles and household goods, Pune Camp (MG Road) for electronics, and Pimpri-Chinchwad for auto component distribution. The GST Commissionerate, Pune oversees compliance for every trading establishment. Learn more about <a href="#">Trading Accounting Services across India</a>.</p>
                <p>Under Section 44AD, eligible traders with turnover up to Rs 3 crore can declare 8% as taxable income (6% for digital receipts). Traders opting for GST Composition at 1% face restrictions: no ITC, no inter-state sales. Late GST filing penalty is Rs 50/day under Section 47 CGST Act. Patron Accounting's Pune office at RTC Silver, Wagholi advises traders on the optimal scheme and handles complete compliance.</p>
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
                <h2 class="section-title">What Is Trading (Wholesale/Retail) Accounting?</h2>
                <div class="content-text what-is-definition">
                    
                    <p>Trading accounting is specialist financial management for businesses that buy and resell goods - covering purchase and sales recording, multi-rate GST compliance with correct HSN codes, inventory valuation, e-way bill management, TCS collection under Section 206C(1H), and financial reporting with cost of goods sold computation.</p><p>Under the CGST Act 2017, trading businesses must classify every product under the correct HSN code. A Pune textile trader in Shukrawar Peth selling cotton sarees (5% GST under HSN 5208) and synthetic fabrics (12% under HSN 5407) must maintain separate tax codes. Incorrect HSN classification results in GSTR-1 mismatches at the GST Commissionerate, Pune.</p><p>For Pune's diverse trading community - from APMC agents in Market Yard handling 0-5% GST produce to electronics wholesalers in Camp dealing with 18-28% GST products - accounting accuracy directly impacts profit margins, ITC claims, and compliance risk.</p>

                </div>
                <div class="highlight-box" style="margin-top:20px;">
                    <p><strong>Key Terms for Trading Accounting in Pune:</strong></p>
                    <ul><li><strong>HSN Code:</strong> Harmonised System code classifying every traded product for GST rate. Mandatory on invoices</li><li><strong>Composition Scheme:</strong> Simplified GST at 1% for traders up to Rs 1.5 crore. No ITC, no inter-state sales, quarterly GSTR-4</li><li><strong>Section 44AD:</strong> Presumptive taxation: 8% of turnover (6% digital) as deemed profit, up to Rs 3 crore</li><li><strong>TCS 206C(1H):</strong> 0.1% tax collected at source on sales exceeding Rs 50 lakh per buyer per year</li><li><strong>E-Way Bill:</strong> Mandatory electronic document for goods above Rs 50,000. Generated on ewaybillgst.gov.in</li></ul>

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
                            <text x="100" y="170" font-size="10" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial, sans-serif">Trading Accounting in Pune</text>
                        </svg>
                    </div>
                    <div class="illustration-badge">
                        <span>Multi-Rate GST Compliant</span>
                        <strong>Trading Accounting</strong>
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
            <h2 class="section-title">Who Needs Trading Accounting in Pune?</h2>
            <div class="content-text">
                
                <p><strong>Wholesale Distributors in Market Yard and Shukrawar Peth:</strong> APMC commission agents, grain merchants, wholesale dealers with high-volume, low-margin transactions. Multi-rate GST, e-way bills, and TCS on bulk sales above Rs 50 lakh.</p><p><strong>Textile Traders in Budhwar Peth and Laxmi Road:</strong> Saree wholesalers, fabric dealers with 5-12% GST rates depending on fibre type. HSN complexity is highest - a single shop may carry products across 4-5 GST slabs. May also need <a href="/gst-registration/pune">GST Registration in Pune</a>.</p><p><strong>Electronics Traders in Pune Camp:</strong> Laptop, mobile dealers on MG Road. 18% standard rate, e-invoice mandatory above Rs 5 crore, import documentation for international sourcing.</p><p><strong>Auto Parts Distributors in Pimpri-Chinchwad:</strong> Spare parts wholesalers supplying Tata Motors, Bajaj Auto supply chains. Multi-HSN inventory, e-way bills, Section 194Q TDS on purchases above Rs 50 lakh.</p><p><strong>FMCG and Grocery Distributors:</strong> Hadapsar and Kothrud distributors. Composition Scheme attractive under Rs 1.5 crore but forfeits ITC.</p><p>Traders above Rs 40 lakh turnover (goods) must register for GST. Section 44AD allows up to Rs 3 crore with 8% presumptive profit - exceeding triggers mandatory books and Section 44AB audit.</p>

            </div>
            </div>
        </div>
    </div>
</section>

<!-- SECTION 5: OUR SERVICES -->
<section class="content-section" id="services-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Trading Accounting: What Patron Covers for Pune Traders</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Service</th><th>What We Do</th></tr></thead>
                    <tbody>
                        <tr><td>Multi-Rate GST Compliance</td><td>GSTR-1/3B with correct HSN across 0-28% slabs. ITC reconciliation with GSTR-2B. GSTR-4 for composition. Filed with GST Commissionerate, Pune</td></tr><tr><td>Composition vs Regular Advisory</td><td>CA analysis of which GST scheme is more profitable based on your Pune trading margins, ITC potential, and inter-state sales patterns</td></tr><tr><td>Inventory Valuation</td><td>FIFO, weighted average, or specific identification. Closing stock for Balance Sheet. <a href="/stock-audit">Stock Audit</a> support</td></tr><tr><td>E-Way Bill Management</td><td>Generation for goods above Rs 50,000. Consolidated e-way bills. Extension tracking. Pune-Mumbai and Pune-Nashik corridor compliance</td></tr><tr><td>TCS Collection (206C(1H))</td><td>Per-buyer threshold tracking for sales above Rs 50 lakh. TCS deposit by 7th. Quarterly Form 27EQ filing</td></tr><tr><td>Section 44AD Monitoring</td><td>Quarterly turnover tracking against Rs 3 crore threshold. Alert before audit trigger. ITR-4 filing</td></tr><tr><td>Maharashtra Shop Act</td><td>Registration and renewal under <a href="/shop-act-registration">Shops &amp; Establishments Act 2017</a> for Pune retail/wholesale shops</td></tr><tr><td>Stock Audit Services</td><td>Physical verification, discrepancy analysis, stock audit report for bank credit and statutory audit</td></tr><tr><td>Maharashtra PT</td><td>PTRC/PTEC registration and filing on mahagst.gov.in. Updated with Feb 2026 notification</td></tr><tr><td>Financial Reporting</td><td>P&amp;L with COGS, Balance Sheet, outstanding reports, ageing analysis. Annual ITR and audit support</td></tr>

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
            <h2 class="section-title">How Trading Accounting Works in Pune: 6-Step CA-Managed Process</h2>
            <p class="section-subtitle" style="text-align:left;max-width:100%;">No visit to the GST Commissionerate, Pune required. Patron's Pune office at RTC Silver, Wagholi handles all filings. Walk-in consultations for traders across Market Yard, Shukrawar Peth, Budhwar Peth, Camp, and Pimpri-Chinchwad.</p>
        </header>
        <div class="steps-container">
            <div class="step-card"><div class="step-content"><span class="step-badge">Step 1</span><h3 class="step-title">Business Assessment at Patron's Pune Office</h3><p class="step-description">Patron's Pune CA reviews your trading business - product categories with HSN codes, GST registration status at the GST Commissionerate, Pune, current scheme (Composition vs Regular), PTRC/PTEC status on mahagst.gov.in, turnover level, and Maharashtra Shop Act registration. For Market Yard traders, APMC licence status and commission agent classification are reviewed.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>GST Status Checked</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>HSN Categories Mapped</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="10" y="10" width="100" height="70" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><circle cx="35" cy="35" r="12" fill="#FFF3E0" stroke="#F5A623" stroke-width="1.2"/><path d="M31 35l3 3 7-7" stroke="#14365F" stroke-width="2" stroke-linecap="round"/><line x1="55" y1="30" x2="95" y2="30" stroke="#14365F" stroke-width="2" opacity="0.3"/><line x1="55" y1="40" x2="85" y2="40" stroke="#14365F" stroke-width="2" opacity="0.3"/></svg></div><span class="illustration-label">Assessment Done</span><span class="step-number-large">01</span></div></div></div><div class="step-card"><div class="step-content"><span class="step-badge">Step 2</span><h3 class="step-title">GST Scheme Selection and HSN Mapping</h3><p class="step-description">The CA analyses whether Composition Scheme (1%, up to Rs 1.5 crore, no ITC) or Regular scheme (full rates with ITC) is optimal for your trading profile. Every product line is mapped to the correct HSN code with corresponding GST rate. For Shukrawar Peth textile traders with 50+ product types across 4 GST slabs, this mapping is critical for invoice accuracy.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Scheme Selected</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Products HSN-Mapped</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="10" y="5" width="48" height="80" rx="5" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><rect x="62" y="5" width="48" height="80" rx="5" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><text x="34" y="25" font-size="7" fill="#E8712C" text-anchor="middle" font-family="Arial" font-weight="700">Regular</text><text x="86" y="25" font-size="7" fill="#10B981" text-anchor="middle" font-family="Arial" font-weight="700">Comp 1%</text><line x1="18" y1="35" x2="50" y2="35" stroke="#14365F" stroke-width="0.5"/><line x1="70" y1="35" x2="102" y2="35" stroke="#14365F" stroke-width="0.5"/><text x="34" y="48" font-size="6" fill="#14365F" text-anchor="middle" font-family="Arial">ITC: Yes</text><text x="86" y="48" font-size="6" fill="#14365F" text-anchor="middle" font-family="Arial">ITC: No</text><text x="34" y="60" font-size="6" fill="#14365F" text-anchor="middle" font-family="Arial">Monthly</text><text x="86" y="60" font-size="6" fill="#14365F" text-anchor="middle" font-family="Arial">Quarterly</text></svg></div><span class="illustration-label">GST Configured</span><span class="step-number-large">02</span></div></div></div><div class="step-card"><div class="step-content"><span class="step-badge">Step 3</span><h3 class="step-title">Inventory System Setup</h3><p class="step-description">Stock accounting system configured with opening stock, purchase recording, sales recording, and closing stock valuation method (FIFO/weighted average). For Pune Camp electronics traders with high-value inventory, item-wise tracking is set up. For APMC traders in Market Yard with commodity stock, lot-based tracking is configured.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Stock Tracking Active</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Valuation Method Set</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="15" y="10" width="90" height="70" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><rect x="25" y="22" width="70" height="12" rx="3" fill="#E8712C" opacity="0.15"/><text x="60" y="31" font-size="7" fill="#14365F" text-anchor="middle" font-family="Arial" font-weight="600">Stock Register</text><rect x="25" y="40" width="32" height="25" rx="3" fill="#FFF3E0" stroke="#F5A623" stroke-width="0.8"/><text x="41" y="55" font-size="6" fill="#14365F" text-anchor="middle" font-family="Arial">FIFO</text><rect x="63" y="40" width="32" height="25" rx="3" fill="#FFF3E0" stroke="#F5A623" stroke-width="0.8"/><text x="79" y="55" font-size="6" fill="#14365F" text-anchor="middle" font-family="Arial">Avg Cost</text></svg></div><span class="illustration-label">Inventory Ready</span><span class="step-number-large">03</span></div></div></div><div class="step-card"><div class="step-content"><span class="step-badge">Step 4</span><h3 class="step-title">Monthly Transaction Processing and E-Way Bills</h3><p class="step-description">Purchase invoices recorded with HSN verification, sales invoices generated with correct GST rates, e-way bills generated for goods dispatch above Rs 50,000, bank reconciliation completed, and TCS collected on qualifying sales under Section 206C(1H). For Pimpri-Chinchwad auto parts distributors with 100+ daily dispatches, e-way bill management is automated. Related: <a href="/gst-registration/pune">GST Registration in Pune</a>.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>E-Way Bills Managed</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>TCS Collected</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="10" y="10" width="100" height="70" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><rect x="20" y="22" width="80" height="8" rx="3" fill="#E8712C" opacity="0.2"/><rect x="20" y="35" width="60" height="6" rx="3" fill="#14365F" opacity="0.15"/><rect x="20" y="46" width="70" height="6" rx="3" fill="#14365F" opacity="0.15"/><rect x="65" y="58" width="40" height="14" rx="4" fill="#10B981" opacity="0.15"/><text x="85" y="68" font-size="7" fill="#14365F" text-anchor="middle" font-family="Arial" font-weight="600">E-Way Bill</text></svg></div><span class="illustration-label">Monthly Done</span><span class="step-number-large">04</span></div></div></div><div class="step-card"><div class="step-content"><span class="step-badge">Step 5</span><h3 class="step-title">GST Return Filing and ITC Reconciliation</h3><p class="step-description">GSTR-1 filed by 11th with all outward supplies HSN-wise. GSTR-3B filed by 20th with tax payment and ITC claim. ITC reconciled with GSTR-2B. For composition dealers, GSTR-4 filed quarterly. GSTR-9 annual return. The GST Commissionerate, Pune processes all returns. Related: <a href="/gst-returns/pune">GST Returns in Pune</a>.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>GSTR-1/3B Filed</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>ITC Reconciled</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="5" y="15" width="50" height="55" rx="4" fill="#F0F4F8" stroke="#14365F" stroke-width="1.2"/><rect x="65" y="15" width="50" height="55" rx="4" fill="#F0F4F8" stroke="#14365F" stroke-width="1.2"/><text x="30" y="32" font-size="7" fill="#E8712C" text-anchor="middle" font-family="Arial" font-weight="700">GSTR-1</text><text x="90" y="32" font-size="7" fill="#E8712C" text-anchor="middle" font-family="Arial" font-weight="700">GSTR-3B</text><path d="M26 42l3 3 6-6" stroke="#10B981" stroke-width="1.5"/><path d="M86 42l3 3 6-6" stroke="#10B981" stroke-width="1.5"/><text x="30" y="58" font-size="6" fill="#14365F" text-anchor="middle" font-family="Arial">HSN-wise</text><text x="90" y="58" font-size="6" fill="#14365F" text-anchor="middle" font-family="Arial">ITC Verified</text></svg></div><span class="illustration-label">Returns Filed</span><span class="step-number-large">05</span></div></div></div><div class="step-card"><div class="step-content"><span class="step-badge">Step 6</span><h3 class="step-title">Income Tax and Annual Compliance</h3><p class="step-description">For 44AD traders: 8%/6% presumptive profit computed, ITR-4 filed by 31 July. For regular traders: books maintained, P&amp;L prepared, ITR-3/5/6 filed. TCS return filed quarterly. PTRC returns filed on mahagst.gov.in. Maharashtra Shop Act renewed annually. Stock audit conducted if required by bank or statutory audit.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>ITR Filed</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Stock Audit Done</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="5" y="15" width="35" height="50" rx="4" fill="#F0F4F8" stroke="#14365F" stroke-width="1.2"/><rect x="42" y="15" width="35" height="50" rx="4" fill="#F0F4F8" stroke="#14365F" stroke-width="1.2"/><rect x="80" y="15" width="35" height="50" rx="4" fill="#F0F4F8" stroke="#14365F" stroke-width="1.2"/><text x="22" y="35" font-size="6" fill="#14365F" text-anchor="middle" font-family="Arial" font-weight="600">ITR</text><text x="60" y="35" font-size="6" fill="#14365F" text-anchor="middle" font-family="Arial" font-weight="600">TCS</text><text x="97" y="35" font-size="6" fill="#14365F" text-anchor="middle" font-family="Arial" font-weight="600">Stock</text><path d="M18 48l3 3 6-6" stroke="#10B981" stroke-width="1.5"/><path d="M55 48l3 3 6-6" stroke="#10B981" stroke-width="1.5"/><path d="M93 48l3 3 6-6" stroke="#10B981" stroke-width="1.5"/></svg></div><span class="illustration-label">Year-End Complete</span><span class="step-number-large">06</span></div></div></div>

        </div>
    </div>
</section>

<!-- SECTION 8: DOCUMENTS REQUIRED -->
<section class="content-section" id="documents-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Documents Required for Trading Accounting</h2>
            <div class="content-text">
                
                <ul><li><strong>PAN Card:</strong> Mandatory for all tax filings</li><li><strong>GST Certificate:</strong> GSTIN from GST Commissionerate, Pune</li><li><strong>PTRC/PTEC Certificates:</strong> Maharashtra PT from mahagst.gov.in</li><li><strong>Maharashtra Shop Act Registration:</strong> Under Shops &amp; Establishments Act 2017</li><li><strong>Purchase and Sales Invoices:</strong> With correct HSN codes and GST rates</li><li><strong>Stock Register:</strong> Physical stock records for inventory valuation</li><li><strong>Bank Statements:</strong> 12 months for reconciliation</li><li><strong>E-Way Bill Records:</strong> All EWBs generated for goods movement</li><li><strong>APMC Licence:</strong> For Market Yard commission agents and mandi traders</li></ul><p style="margin-top:16px;"><strong>Pune tip:</strong> Textile traders in Budhwar Peth carrying 200+ SKUs across multiple GST slabs should prepare an HSN master list before accounting setup. Each HSN-rate mismatch creates GSTR-1 errors that the GST Commissionerate, Pune flags automatically.</p>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 9: CHALLENGES -->
<section class="content-section" id="challenges-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Common Trading Accounting Challenges in Pune</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Challenge</th><th>Impact</th><th>How Patron Accounting Solves It</th></tr></thead>
                    <tbody>
                        <tr><td>Multi-Rate HSN Misclassification</td><td>Cotton (5%) vs polyester (12%) textiles in Shukrawar Peth - one wrong HSN means every invoice in that line is incorrect</td><td>CA-verified HSN mapping across all product lines before first invoice</td></tr><tr><td>E-Way Bill Expiry and Penalty</td><td>Auto parts dispatches from Pimpri-Chinchwad face expiry en route; 200% penalty under Section 129</td><td>Managed generation with extension tracking and validity alerts</td></tr><tr><td>Composition Scheme Lock-In</td><td>Small retailers opt for 1% without understanding no ITC, no inter-state sales restriction</td><td>Data-driven Composition vs Regular analysis based on actual Pune margins</td></tr><tr><td>TCS Non-Compliance (206C(1H))</td><td>Market Yard wholesalers miss per-buyer Rs 50 lakh threshold; demand notices from PCIT Pune</td><td>Automated per-buyer cumulative tracking with threshold alerts</td></tr><tr><td>Stock Valuation Discrepancies</td><td>APMC traders with perishable stock face year-end valuation disputes during tax assessment</td><td>FIFO vs weighted average method selected per business type; CA-verified closing stock</td></tr>

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
            <h2 class="section-title">Fees for Trading Accounting in Pune</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Fee Component</th><th>Amount</th></tr></thead>
                    <tbody>
                        <tr><td>Small Trader / Retail Shop (44AD)</td><td>Rs 2,499/month</td></tr><tr><td>Wholesale Distributor (under Rs 5 cr)</td><td>Rs 4,999/month</td></tr><tr><td>Large Trading Company (above Rs 5 cr)</td><td>Rs 9,999/month</td></tr><tr><td>Multi-Location Trader</td><td>Rs 14,999/month</td></tr><tr><td>Stock Audit (Annual)</td><td>Rs 14,999 onwards</td></tr>

                    </tbody>
                </table>
                </div>
                <p style="margin-top:16px;font-size:13px;color:var(--text-muted);font-style:italic;">All fees and charges listed are indicative only and do not constitute a binding offer. Final amounts may vary depending on the volume of work and the complexity involved.</p>
                <p style="margin-top:16px;">Professional service charges for drafting, filing, and representation are separate from the statutory fees. The exact fee depends on the complexity of the case, disputed amount, and number of hearings required. Contact us for a detailed quote.</p>
                <p style="margin-top:16px;"><strong>Get a free Trading Accounting in Pune consultation - <a href="tel:+919459456700">Call +91 945 945 6700</a> or <a href="https://wa.me/919459456700?text=Hi%2C%20I%20need%20trader%20accounting%20in%20Pune.%20Please%20share%20a%20quote." target="_blank">WhatsApp us</a>. No-obligation assessment.</strong></p>
            </div>
        </div>
    </div>
</section>

<!-- SECTION 11: TIMELINE -->
<section class="content-section" id="timeline-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Key Compliance Deadlines for Pune Traders</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Stage</th><th>Estimated Timeline</th></tr></thead>
                    <tbody>
                        <tr><td>GSTR-1 (Outward Supplies)</td><td>11th of following month</td></tr><tr><td>GSTR-3B (Summary + Tax Payment)</td><td>20th of following month</td></tr><tr><td>GSTR-4 (Composition)</td><td>18th of month following quarter</td></tr><tr><td>TCS Deposit (206C(1H))</td><td>7th of following month</td></tr><tr><td>PTRC (Maharashtra)</td><td>15th of following month (Feb 2026 amendment)</td></tr><tr><td>E-Way Bill</td><td>Before goods movement (1 day per 200 km)</td></tr><tr><td>Advance Tax</td><td>15 Jun / Sep / Dec / Mar</td></tr><tr><td>ITR-4 (44AD Traders)</td><td>31 July</td></tr><tr><td>GSTR-9 (Annual)</td><td>31 December</td></tr>

                    </tbody>
                </table>
                </div>
                <div class="highlight-box" style="margin-top:16px;">
                    
                    <p><strong>Pune Note:</strong> Patron onboards new trading clients within 48 hours. HSN mapping completed in first week. Monthly compliance cycle begins from second month.</p>

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
            <h2 class="section-title">Why Choose Patron for Trading Accounting in Pune</h2>
        </div>
        <div class="features-grid"><article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><h3 class="feature-title">Near Pune Trading Hubs</h3><p class="feature-text">RTC Silver, Wagholi - serving Market Yard, Shukrawar Peth, Budhwar Peth, Camp, Pimpri-Chinchwad, Hadapsar. Walk-in available.</p></article><article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><h3 class="feature-title">Multi-Rate HSN Expertise</h3><p class="feature-text">CAs handling HSN classification across 5 GST slabs daily. Composition vs Regular advisory based on actual Pune trading margins.</p></article><article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><path d="M12 6v6l4 2"/></svg></div><h3 class="feature-title">TCS Tracking Automated</h3><p class="feature-text">Section 206C(1H) per-buyer threshold monitoring. Automated alerts before Rs 50 lakh crossing. Deposit by 7th ensured.</p></article><article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg></div><h3 class="feature-title">Stock Audit Bundled</h3><p class="feature-text">Physical stock verification bundled with monthly accounting. Critical for traders with bank credit facilities requiring stock reports.</p></article><article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M17 21v-2a4 4 0 00-4-4H5a4 4 0 00-4 4v2"/><circle cx="9" cy="7" r="4"/></svg></div><h3 class="feature-title">10,000+ Businesses, 4 Offices</h3><p class="feature-text">15+ years. 50,000+ documents filed. Pune, Mumbai, Delhi, Gurugram. 4.9 Google rating across India.</p></article><article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg></div><h3 class="feature-title">From Rs 2,499/month</h3><p class="feature-text">Transparent pricing. Small traders under 44AD pay Rs 2,499. Wholesalers Rs 4,999. Stock audit bundled or separate.</p></article></div>
    </div>
</section>

<!-- SECTION 12A: SOCIAL PROOF -->
<section class="content-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Trusted by Pune's Trading Community</h2>
            <div class="content-text">
                
                <p><strong>10,000+ Businesses | 4.9 Google Rating | 50,000+ Docs Filed | 15+ Years</strong></p><p><em>"Our GST filing is always on time since we moved to Patron. The CA team knows their stuff cold."</em> - CFO, Manufacturing, Maharashtra</p><p>Trusted by Hyundai, Asian Paints, Bridgestone, and 10,000+ businesses. Offices in Pune, Mumbai, Delhi, Gurugram.</p>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 13: SELF-FILING vs PROFESSIONAL COMPARISON -->
<section class="content-section" id="comparison-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">DIY vs Professional Trading Accounting in Pune</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Aspect</th><th>DIY</th><th>Patron CA-Managed</th></tr></thead>
                    <tbody>
                        <tr><td>GST Filing</td><td>Self-filed; HSN errors common</td><td>CA-filed with HSN verification</td></tr><tr><td>Inventory</td><td>Manual stock register; errors at year-end</td><td>System-tracked; closing stock CA-verified</td></tr><tr><td>TCS</td><td>Often missed entirely</td><td>Per-buyer threshold tracking automated</td></tr><tr><td>E-Way Bill</td><td>Self-generated; expiry risk</td><td>Managed with extension alerts</td></tr><tr><td>Cost</td><td>Free + time + penalty risk</td><td>From Rs 2,499/month</td></tr><tr><td>Compliance Risk</td><td>Notices from GST Commissionerate Pune</td><td>Compliance guaranteed</td></tr>

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
                
                <p><strong>Parent India Page:</strong></p><ul><li><a href="#">Trading Accounting Services in India</a></li></ul><p><strong>Same-City Pune Pages:</strong></p><ul><li><a href="/accounting-services/pune">Accounting Services in Pune</a></li><li><a href="/gst-registration/pune">GST Registration in Pune</a></li><li><a href="/gst-returns/pune">GST Returns in Pune</a></li><li><a href="/income-tax-return/pune">Income Tax Return in Pune</a></li><li><a href="/payroll-services/pune">Payroll Services in Pune</a></li></ul><p><strong>Related India Pages:</strong></p><ul><li><a href="/tds-return-filing-24q">TDS Return Filing</a></li><li><a href="/stock-audit">Stock Audit</a></li><li><a href="/shop-act-registration">Shop Act Registration</a></li><li><a href="#">Professional Tax Registration</a></li></ul>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 15A: LEGAL FRAMEWORK -->
<section class="content-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Legal and Compliance Framework for Trading Accounting in Pune</h2>
            <div class="content-text">
                
                <p><strong>CGST Act 2017:</strong> Multi-rate GST (0-28%). Composition under Section 10 at 1% for traders up to Rs 1.5 crore. E-way bill under Section 68/Rule 138. E-invoicing under Rule 48(4) above Rs 5 crore. Source: <a href="https://www.gst.gov.in" target="_blank" rel="noopener">gst.gov.in</a></p><p><strong>Income Tax Act 1961:</strong> Section 44AD presumptive at 8%/6% up to Rs 3 crore. Section 44AB audit above Rs 1 crore (Rs 10 crore if cash under 5%). Section 206C(1H) TCS at 0.1% on sales above Rs 50 lakh. Section 194Q TDS on purchases above Rs 50 lakh.</p><p><strong>Maharashtra PT Act 1975:</strong> PTRC for employers. PTEC Rs 2,500/year. Due 15th per Feb 2026 amendment. Source: <a href="https://www.mahagst.gov.in" target="_blank" rel="noopener">mahagst.gov.in</a></p><p><strong>Maharashtra Shops &amp; Establishments Act 2017:</strong> Registration mandatory for all retail and wholesale shops. Annual renewal.</p><p><strong>Penalties:</strong> GST late: Rs 50/day (Section 47). E-way bill violation: 200% of tax (Section 129). Late TCS: 1%/month. Missing books under 44AB: Rs 25,000 (Section 271A).</p>

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
                    <h2 class="faq-expanded__title">Frequently Asked Questions - Trading Accounting in Pune</h2>
                    <p class="faq-expanded__lead">Answers about GST for traders, Composition Scheme, e-way bills, TCS, Section 44AD, and accounting costs in Pune.</p>
                    @include('partials.bigin-form', [
                        'variant'  => 'compact',
                        'service'  => 'Trading Accounting in Pune',
                        'city'     => 'Pune',
                    ])
                </aside>
                <div class="faq-expanded__list">
                    <div class="faq-expanded__item" id="faq-1">
                        <h3 class="faq-expanded__q">Which GST office handles traders in Pune?</h3>
                        <div class="faq-expanded__a"><p>The GST Commissionerate, Pune handles all GST matters for trading businesses in Pune. Whether you operate a wholesale shop in Market Yard, a textile store in Shukrawar Peth, or an electronics outlet in Camp, all GSTR-1, GSTR-3B, and GSTR-4 filings fall under this commissionerate. Assessment proceedings and notices are issued by Pune division officers.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-2">
                        <h3 class="faq-expanded__q">Can Pune traders use GST Composition Scheme?</h3>
                        <div class="faq-expanded__a"><p>Yes. Traders in Pune with aggregate turnover up to Rs 1.5 crore can opt for Composition Scheme under Section 10 CGST Act. Tax rate is 1% of turnover (0.5% CGST + 0.5% SGST). However, composition dealers cannot claim ITC, cannot make inter-state sales, cannot supply through e-commerce, and must file quarterly GSTR-4. Patron's CA analyses whether Composition or Regular is more profitable.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-3">
                        <h3 class="faq-expanded__q">How much does trader accounting cost in Pune?</h3>
                        <div class="faq-expanded__a"><p>Trading accounting starts from Rs 2,499 per month for small traders under Section 44AD. Wholesale distributors pay Rs 4,999/month. Large trading companies above Rs 5 crore pay Rs 9,999/month including e-invoicing support. Stock audit is Rs 14,999 onwards annually.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-4">
                        <h3 class="faq-expanded__q">Is Section 44AD available for Pune traders?</h3>
                        <div class="faq-expanded__a"><p>Yes. Traders with turnover up to Rs 3 crore can use Section 44AD presumptive taxation. Deemed profit is 8% of total turnover or 6% for digital receipts. No requirement to maintain detailed books or get tax audit. ITR-4 filed by 31 July. Patron monitors turnover quarterly and alerts before the Rs 3 crore threshold.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-5">
                        <h3 class="faq-expanded__q">When do Pune traders need e-way bills?</h3>
                        <div class="faq-expanded__a"><p>E-way bills are mandatory for goods movement above Rs 50,000 within Maharashtra (intra-state) or to other states. Generated on ewaybillgst.gov.in before dispatch. Validity is 1 day per 200 km. For Pune-Mumbai dispatches (150 km), one day is sufficient. Movement without valid e-way bill attracts 200% penalty under Section 129 CGST Act.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-6">
                        <h3 class="faq-expanded__q">Do retail shops in Pune need GST registration?</h3>
                        <div class="faq-expanded__a"><p>Retail shops with aggregate turnover above Rs 40 lakh (goods) must register for GST. Below this, registration is voluntary. Registered retailers can opt for Composition (1% if under Rs 1.5 crore) or Regular scheme with ITC. Patron helps Pune retailers choose the right pathway.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-7">
                        <h3 class="faq-expanded__q">What is TCS under Section 206C(1H) for Pune wholesalers?</h3>
                        <div class="faq-expanded__a"><p>Sellers with turnover above Rs 10 crore must collect TCS at 0.1% on sale consideration exceeding Rs 50 lakh to a single buyer per year. For Pune wholesalers in Market Yard or Pimpri-Chinchwad with large B2B sales, this means tracking per-buyer cumulative sales. TCS is deposited by 7th of the following month. Patron tracks every buyer threshold.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-8">
                        <h3 class="faq-expanded__q">What accounting does a wholesale business in Pune need?</h3>
                        <div class="faq-expanded__a"><p>Pune wholesale businesses need GST-compliant invoicing with correct HSN codes, purchase recording with vendor GSTIN verification, inventory management with stock valuation, e-way bill generation for goods dispatch, TCS collection under Section 206C(1H) on sales above Rs 50 lakh, monthly GSTR-1/3B filing, and annual ITR with or without tax audit depending on turnover.</p></div>
                    </div>
                </div>
            </div>


            <!-- Quick Answers -->
            <div class="highlight-box" style="margin-top:32px;">
                <p><strong>Quick Answers</strong></p>
                <p><strong>Trader ka GST kitna lagta hai?</strong> HSN code ke hisaab se 0-28%. Composition scheme mein 1% flat.</p><p><strong>Section 44AD kya hai traders ke liye?</strong> Turnover ka 8% (6% digital) profit maano. Rs 3 crore tak. No audit.</p><p><strong>E-way bill kab banana padta hai?</strong> Rs 50,000 se zyada ka maal bhejte waqt. Intra-state aur inter-state dono.</p><p><strong>Pune mein trader ka accounting kitne mein hota hai?</strong> Rs 2,499/month se start. Patron Accounting, Wagholi.</p><p><strong>TCS kya hota hai wholesaler ke liye?</strong> Rs 50 lakh se zyada ki sale pe 0.1% collect karna padta hai buyer se.</p>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 18: URGENCY CTA -->
<section class="content-section" style="background: var(--orange-lighter) !important; border-left: 4px solid var(--orange);">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Don't Let Compliance Gaps Accumulate</h2>
            <div class="content-text">
                
                <p>Every month without proper HSN classification accumulates GSTR-1 mismatches that the GST Commissionerate, Pune flags during annual reconciliation. Traders moving goods without valid e-way bills face 200% penalty on the spot under Section 129. Wholesalers missing TCS under 206C(1H) face 1% per month interest from PCIT Pune. Start professional accounting before the next quarter.</p><p><strong>Call +91 945 945 6700 today or <a href="https://wa.me/919459456700?text=Hi%2C%20I%20need%20trading%20accounting%20in%20Pune" target="_blank">WhatsApp us</a> to get started.</strong></p>

            </div>
        </div>
    </div>
</section>

<!-- CONCLUSION + CTA BLOCK (Dark) -->
<section class="content-section" style="background: var(--blue) !important;">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title" style="color:#FFFFFF !important;">Get Started with Trading Accounting in Pune</h2>
            <div class="content-text" style="text-align:left;">
                
                <p style="color:rgba(255,255,255,0.85);font-size:16px;line-height:1.7;">Trading accounting services in Pune cover the complete compliance lifecycle for wholesale distributors, retail shops, commodity traders, and trading companies across the city's commercial zones.</p><p style="color:rgba(255,255,255,0.85);font-size:16px;line-height:1.7;">Patron Accounting's Pune office at RTC Silver, Wagholi provides dedicated CA services - multi-rate HSN mapping, Composition Scheme advisory, e-way bill management, TCS tracking, and stock audit for traders in Market Yard, Shukrawar Peth, Budhwar Peth, Camp, and Pimpri-Chinchwad.</p><p style="color:rgba(255,255,255,0.85);font-size:16px;line-height:1.7;">ICAI-registered. 15+ years. 50,000+ documents. 4.9 Google rating. Offices in Pune, Mumbai, Delhi, Gurugram.</p>

            </div>
            <div style="display:flex;gap:14px;flex-wrap:wrap;margin-top:24px;">
                <a href="tel:+919459456700" style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:var(--orange);color:#fff;border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#128222; Call +91 945 945 6700</a>
                <a href="https://wa.me/919459456700?text=Hi%2C%20I%20need%20trader%20accounting%20in%20Pune.%20Please%20share%20a%20quote." target="_blank" style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:#25D366;color:#fff;border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#128172; WhatsApp Us</a>
                <a href="mailto:sales@patronaccounting.com?subject=Enquiry%20for%20Trading%20Accounting%20in%20Pune&body=Hello%20Patron%2C%0AI%20need%20trading%20accounting%20in%20Pune.%0AThank%20you." style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:transparent;color:#fff;border:2px solid rgba(255,255,255,0.3);border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#9993;&#65039; Email Us</a>
            </div>
            <p style="color:rgba(255,255,255,0.7);font-size:13px;margin-top:16px;">Book a Free Consultation - No Obligation.</p>
        </div>
    </div>
</section>

<!-- GSTAT STATE BENCH CITY PAGES (32 Pages) -->
<section class="content-section" style="padding:48px 32px;background:var(--gray-50);">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title" style="text-align:center;margin-bottom:12px;">Trading Accounting Services Across India</h2>
            <p style="text-align:center;color:var(--text-muted);font-size:15px;margin-bottom:40px;">Patron provides specialist trading accounting in major cities. Select your city.</p>
            
            <div class="pa-city-block" style="margin-bottom:40px;"><div class="pa-block-title">Available in These Cities</div><div class="pa-block-sub">Select your city for local trading accounting</div><div class="pa-city-grid"><div class="pa-city-card" style="opacity:0.6; pointer-events:none; border:2px solid var(--orange); position:relative;"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Pune</div><div class="pa-card-sub">Maharashtra</div></div><span style="position:absolute; top:6px; right:8px; font-size:10px; color:var(--orange); font-weight:700; text-transform:uppercase; letter-spacing:0.5px;">You're here</span></div><a href="#" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Mumbai</div><div class="pa-card-sub">Maharashtra</div></div></a><a href="#" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Delhi</div><div class="pa-card-sub">Delhi NCR</div></div></a><a href="#" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Gurugram</div><div class="pa-card-sub">Haryana</div></div></a></div></div><div class="pa-city-block"><div class="pa-block-title">Related Services in Pune</div><div class="pa-block-sub">Complete compliance for Pune trading businesses</div><div class="pa-cross-grid"><a href="/accounting-services/pune" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Accounting Services</div><div class="pa-card-sub">Pune</div></div></a><a href="/gst-registration/pune" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">GST Registration</div><div class="pa-card-sub">Pune</div></div></a><a href="/gst-returns/pune" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">GST Returns</div><div class="pa-card-sub">Pune</div></div></a><a href="/income-tax-return/pune" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Income Tax Return</div><div class="pa-card-sub">Pune</div></div></a><a href="/payroll-services/pune" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Payroll Services</div><div class="pa-card-sub">Pune</div></div></a><a href="/startup-registration/pune" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Startup Registration</div><div class="pa-card-sub">Pune</div></div></a></div></div>
        </div>
    </div>
</section>

<!-- CONTENT FRESHNESS FOOTER -->
<section class="content-section" style="padding:32px;">
    <div class="content-container">
        <div class="text-content" style="font-size:13px;color:var(--text-muted);">
            <p><strong>Content Created:</strong> 18 March 2026 &nbsp;|&nbsp; <strong>Last Updated:</strong> <span id="lastUpdatedFooter">18 March 2026</span> &nbsp;|&nbsp; <strong>Next Review:</strong> 18 June 2026 &nbsp;|&nbsp; <strong>Reviewed By:</strong> CA &amp; CS Team, Patron Accounting LLP</p>
            <p>This page covers trading accounting services in Pune and is reviewed quarterly. GST rates, composition thresholds, TCS rules, and PT notifications are verified against latest updates. Freshness Tier 1.</p>
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
