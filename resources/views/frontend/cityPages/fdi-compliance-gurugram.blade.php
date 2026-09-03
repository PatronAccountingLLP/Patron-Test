
@extends('layouts.service-app')

<!-- External Dependencies (loaded by master layout in production) -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Barlow:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,400&family=DM+Sans:opsz,wght@9..40,400;9..40,500;9..40,600;9..40,700&display=swap" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

@section('meta')
    <title>FDI Compliance Gurugram - FEMA, FC-GPR & FC-TRS</title>
    <meta name="description" content="CA-assisted FDI compliance in Gurugram. FC-GPR, FC-TRS, FLA return, RBI FIRMS, FEMA, share valuation, sectoral caps. Serving Cyber City, Golf Course Road. Call +91 945 945 6700.">
    <link rel="canonical" href="/fdi-compliance/gurugram">
    <meta name="robots" content="index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1">
    <meta property="og:title" content="FDI Compliance Gurugram - FEMA, FC-GPR & FC-TRS">
    <meta property="og:description" content="CA-assisted FDI compliance in Gurugram. FC-GPR, FC-TRS, FLA return, RBI FIRMS, FEMA, share valuation, sectoral caps. Serving Cyber City, Golf Course Road. Call +91 945 945 6700.">
    <meta property="og:url" content="/fdi-compliance/gurugram">
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="Patron Accounting">
    <meta property="og:image" content="https://www.patronaccounting.com/images/og-default-square.png">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="1200">
    <meta property="og:image:type" content="image/png">
    <meta property="og:image:secure_url" content="https://www.patronaccounting.com/images/og-default-square.png">
    <meta property="og:image:alt" content="Patron Accounting - partner you can rely on">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="FDI Compliance Gurugram - FEMA, FC-GPR & FC-TRS">
    <meta name="twitter:description" content="CA-assisted FDI compliance in Gurugram. FC-GPR, FC-TRS, FLA return, RBI FIRMS, FEMA, share valuation, sectoral caps. Serving Cyber City, Golf Course Road. Call +91 945 945 6700.">
    <meta name="twitter:image" content="https://www.patronaccounting.com/images/og-default-square.png">
@endsection

@section('schema')
    <script type="application/ld+json">{
  "@context": "https://schema.org",
  "@graph": [
    {
      "@type": "Service",
      "name": "FDI Compliance in Gurugram | FEMA",
      "description": "CA-assisted FDI compliance in Gurugram. FC-GPR, FC-TRS, FLA return, RBI FIRMS, FEMA, share valuation, sectoral caps. Serving Cyber City, Golf Course Road. Call +91 945 945 6700.",
      "url": "https://www.patronaccounting.com/fdi-compliance/gurugram",
      "serviceType": "FDI Compliance in Gurugram | FEMA",
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
        "url": "https://www.patronaccounting.com/fdi-compliance/gurugram",
        "priceSpecification": {
          "@type": "PriceSpecification",
          "minPrice": "2",
          "maxPrice": "5000",
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
          "name": "FDI Compliance India: FEMA FIRMS Guide",
          "item": "https://www.patronaccounting.com/fdi-compliance"
        },
        {
          "@type": "ListItem",
          "position": 3,
          "name": "FDI Compliance in Gurugram | FEMA",
          "item": "https://www.patronaccounting.com/fdi-compliance/gurugram"
        }
      ]
    },
    {
      "@type": "FAQPage",
      "mainEntity": [
        {
          "@type": "Question",
          "name": "What is FC-GPR and when to file?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "FC-GPR is filed with RBI through AD bank within 30 days of allotting shares to a non-resident investor. It reports FDI transaction details including investor identity, amount, pricing, and instrument type via the RBI FIRMS portal."
          }
        },
        {
          "@type": "Question",
          "name": "What is the FLA return deadline?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "FLA return must be filed by 15 July each year on RBI FLAIR portal covering all foreign liabilities and assets as of 31 March. Mandatory even with no new FDI transactions if any FDI is outstanding. Late filing affects compliance record."
          }
        },
        {
          "@type": "Question",
          "name": "Which sectors allow 100% FDI?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "IT/ITES, SaaS, B2B e-commerce, manufacturing allow 100% under automatic route. B2C e-commerce (inventory model) is prohibited. Defence capped at 74%. Digital media at 26%. Single brand retail: 100% (auto up to 49%, govt 49-100%)."
          }
        },
        {
          "@type": "Question",
          "name": "Is government approval needed for Chinese investment?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Yes. Investment from any land-border country (China, Bangladesh, Pakistan, Nepal, Myanmar, Bhutan, Afghanistan) requires mandatory FIFP approval regardless of sector or amount. Takes 4-8 weeks. Common for Gurugram tech companies."
          }
        },
        {
          "@type": "Question",
          "name": "What happens if FC-GPR is filed late?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Late filing attracts Late Submission Fee from RBI based on delay period. For significant delays, compounding application to RBI required. Penalties can be up to 3x transaction amount. Patron handles FEMA compounding for delayed filings."
          }
        },
        {
          "@type": "Question",
          "name": "What valuation is needed?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "For unlisted companies: by SEBI-registered Category I Merchant Banker or CA using internationally accepted methodology (DCF for startups, NAV for asset-heavy). Shares cannot be issued below Fair Market Value. Mandatory for FC-GPR."
          }
        },
        {
          "@type": "Question",
          "name": "What is the cost?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "FC-GPR from Rs 9,999. FLA return from Rs 4,999. Share valuation from Rs 9,999. End-to-end package (valuation + FC-GPR + SH-7 + PAS-3) from Rs 24,999. Government fees additional. Transparent pricing."
          }
        },
        {
          "@type": "Question",
          "name": "Can startups issue convertible notes to foreign investors?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Yes. DPIIT-recognised startups can issue convertible notes with minimum Rs 25 lakh per investor and maximum 10-year conversion. Form CN filed within 30 days of issuance on RBI FIRMS portal. Quick Answers FC-GPR kab file karna padta hai? Share allotment ke 30 din ke andar RBI FIRMS portal par AD bank ke through. FLA return kya hai? Har saal 15 July tak RBI ko foreign liabilities aur assets ka annual return. FDI liya hai toh mandatory. Chinese investor se paisa le sakte hain? Haan, lekin government approval (FIFP) zaroori hai. 4-8 hafta lagta hai."
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
                        FDI Compliance in Gurugram: FEMA Reporting, RBI Filing, and Sectoral Advisory
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
                            <p class="mb-0 text-dark benefit-paragraph"><span>FC-GPR:</span> Filed within 30 days of share allotment to foreign investor via RBI FIRMS portal</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>FC-TRS:</span> Filed within 60 days of share transfer between resident and non-resident</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>FLA Return:</span> Annual filing by 15 July each year for all companies with FDI</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Penalty:</span> Up to 3x amount involved or Rs 2 lakh + Rs 5,000/day continuing default</p>
                        </div>
                    </div>

                    <p class="mb-4 fw-bold" style="color: var(--blue); font-size: 15px;">FDI compliance for VC-funded startups, MNC subsidiaries, and foreign JV partners across Gurugram.</p>

                    <div class="hero-cta">
                        <a href="tel:+919459456700" class="btn-video text-decoration-none">
                            <span class="play-circle"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="width:14px;height:14px;color:#fff"><path d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/></svg></span>
                            Call +91 945 945 6700
                        </a>
                        <a href="mailto:sales@patronaccounting.com" class="btn-sample text-decoration-none">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="width:18px;height:18px;"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,12 2,6"/></svg>
                            Email Us
                        </a>
                        <a href="https://wa.me/919459456700?text=Hello%2C%20I%20just%20visited%20your%20Fdi%20Compliance%20in%20Gurugram%20page.%20I%20would%20like%20to%20know%20more%20about%20it." target="_blank" class="btn-sample text-decoration-none" rel="noopener">
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
                                            'service'  => 'FDI Compliance in Gurugram',
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
    'ctaText'    => 'FDI compliance with FC-GPR, FLA return, share valuation, and AD bank coordination from Gurugram.',
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
            <a href="#overview-section" class="toc-btn active">Overview</a><a href="#what-section" class="toc-btn">Process</a><a href="#who-section" class="toc-btn">Sectors</a><a href="#services-section" class="toc-btn">Services</a><a href="#procedure-section" class="toc-btn">AD Banks</a><a href="#documents-section" class="toc-btn">Documents</a><a href="#challenges-section" class="toc-btn">Challenges</a><a href="#fees-section" class="toc-btn">Fees</a><a href="#timeline-section" class="toc-btn">Calendar</a><a href="#benefits-section" class="toc-btn">Why Patron</a><a href="#comparison-section" class="toc-btn">Comparison</a><a href="#faq-section" class="toc-btn">FAQs</a>
        </div>
        <button class="toc-arrow right" id="tocRight">&#10095;</button>
    </div>
</div>

<!-- SECTION 2: OVERVIEW / INTRO + TL;DR -->
<section class="content-section" id="overview-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">FDI Compliance in Gurugram: FC-GPR, FC-TRS, FLA, and Sectoral Caps</h2>
            <div class="content-text">
                <div class="highlight-box" style="margin-bottom:20px;">
                    <p><strong>&#128204; TL;DR - FDI Compliance in Gurugram Services at a Glance</strong></p>
                    <p>Every Gurugram company receiving FDI must comply with FEMA and RBI reporting. Shares must be allotted within 60 days of receiving funds. FC-GPR filed within 30 days of allotment. FC-TRS within 60 days of share transfer. FLA return by 15 July annually. Valuation by SEBI merchant banker or CA at or above Fair Market Value. Non-compliance attracts penalties up to 3x the amount involved. Most IT, SaaS, and manufacturing sectors enjoy 100% FDI under automatic route.</p>
                </div>
                <p>Gurugram is one of India's top FDI destinations. DLF Cyber City hosts hundreds of VC-funded startups. Golf Course Road has MNC subsidiaries with significant parent FDI. For a comprehensive overview, refer to our <a href="/fdi-compliance">FDI Compliance</a> national guide.</p><div class="table-responsive-wrapper"><table><thead><tr><th>Form</th><th>Purpose</th><th>Deadline</th><th>Gurugram Trigger</th></tr></thead><tbody><tr><td>FC-GPR</td><td>Report share allotment to foreign investor</td><td>30 days from allotment</td><td>Series A/B/C from foreign VC</td></tr><tr><td>FC-TRS</td><td>Report share transfer (resident ↔ non-resident)</td><td>60 days from transfer</td><td>Secondary sale, investor exit</td></tr><tr><td>FLA Return</td><td>Annual foreign liabilities and assets</td><td>15 July each year</td><td>All companies with ANY FDI</td></tr><tr><td>Form DI</td><td>Downstream investment reporting</td><td>30 days from allotment</td><td>Foreign-owned company investing in another Indian co.</td></tr><tr><td>Entity Master</td><td>Prerequisite for all RBI filings</td><td>Before first FC-GPR</td><td>One-time setup + update</td></tr></tbody></table></div><p</p>
                <p>Haryana does not levy Professional Tax. Gurugram companies' FDI compliance is managed through AD Category I banks in the city (HDFC, ICICI, Axis, SBI) which process FC-GPR and FC-TRS before forwarding to RBI. Patron Accounting's Gurugram office coordinates the entire chain: Entity Master setup, share valuation, AD bank coordination, FIRMS portal filing, and annual FLA return.</p>
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
                <h2 class="section-title">FDI Investment Process and Compliance Flow</h2>
                <div class="content-text what-is-definition">
                    
                    <p><strong>Step 1: Investment Receipt</strong> - Foreign investor remits funds. AD bank issues FIRC (Foreign Inward Remittance Certificate). KYC completed. For Gurugram startups, typically through HDFC or ICICI Gurugram branches.</p><p><strong>Step 2: Share Allotment (within 60 days)</strong> - Allot shares within 60 days of receiving funds. If missed, refund within 15 days. Ensure authorised capital is sufficient (see <a href="/change-in-authorised-capital">Change in Authorised Capital</a>).</p><p><strong>Step 3: Valuation</strong> - By SEBI-registered Category I Merchant Banker or CA using internationally accepted methodology (DCF for startups). Shares cannot be issued below Fair Market Value.</p><p><strong>Step 4: File FC-GPR (within 30 days)</strong> - File on RBI FIRMS portal through AD bank. Attach: FIRC, board resolution, share certificates, KYC, valuation report, CS certificate.</p><p><strong>Step 5: Ongoing</strong> - FLA return by 15 July annually. Update Entity Master on FIRMS. File FC-TRS for transfers. Report downstream via Form DI. See <a href="#">Annual Compliance</a> for ROC requirements.</p>

                </div>
                <div class="highlight-box" style="margin-top:20px;">
                    <p><strong>Key Terms for FDI Compliance in Gurugram:</strong></p>
                    <p><strong>FC-GPR:</strong> Foreign Currency - Gross Provisional Return filed with RBI within 30 days of allotting shares to a non-resident.</p><p><strong>FEMA:</strong> Foreign Exchange Management Act, 1999 - governing law for all FDI transactions in India.</p><p><strong>FIRMS:</strong> Foreign Investment Reporting and Management System - RBI portal for FDI compliance filings.</p><p><strong>FLA:</strong> Foreign Liabilities and Assets annual return due 15 July on RBI FLAIR portal.</p><p><strong>FIRC:</strong> Foreign Inward Remittance Certificate issued by AD bank confirming receipt of foreign funds.</p>

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
                            <text x="100" y="170" font-size="10" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial, sans-serif">FDI Compliance in Gurugram</text>
                        </svg>
                    </div>
                    <div class="illustration-badge">
                        <span>FDI Compliance</span>
                        <strong>Gurugram FEMA</strong>
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
            <h2 class="section-title">FDI Routes and Sectoral Caps for Gurugram Sectors</h2>
            <div class="content-text">
                
                <div class="table-responsive-wrapper"><table><thead><tr><th>Sector</th><th>FDI Cap</th><th>Route</th><th>Gurugram Relevance</th></tr></thead><tbody><tr><td>IT / ITES / SaaS</td><td>100%</td><td>Automatic</td><td>DLF Cyber City - largest FDI segment</td></tr><tr><td>B2B E-Commerce</td><td>100%</td><td>Automatic</td><td>Sohna Road marketplace companies</td></tr><tr><td>Manufacturing</td><td>100%</td><td>Automatic</td><td>IMT Manesar, Udyog Vihar JVs</td></tr><tr><td>Single Brand Retail</td><td>100%</td><td>Auto (≤49%); Govt (49-100%)</td><td>Gurugram retail brands</td></tr><tr><td>Insurance</td><td>74%</td><td>Automatic</td><td>BFSI corridor</td></tr><tr><td>Defence</td><td>74%</td><td>Auto (≤49%); Govt (49-74%)</td><td>Defence corridor</td></tr><tr><td>B2C E-Commerce (inventory)</td><td>NOT allowed</td><td>Prohibited</td><td>FDI-funded companies cannot hold inventory</td></tr></tbody></table></div><p><strong>Land Border Country Restriction:</strong> Investments from China, Bangladesh, Pakistan, Nepal, Myanmar, Bhutan, Afghanistan require mandatory government approval via FIFP regardless of sector or amount. Takes 4-8 weeks. Common for Gurugram tech companies with Chinese VC investment.</p>

            </div>
            </div>
        </div>
    </div>
</section>

<!-- SECTION 5: OUR SERVICES -->
<section class="content-section" id="services-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">FDI Compliance Services in Gurugram</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Service</th><th>What We Do</th></tr></thead>
                    <tbody>
                        <tr><td>FC-GPR Filing</td><td>Entity Master setup, FIRC coordination with AD bank, valuation report, FC-GPR preparation, FIRMS portal filing, RBI acknowledgement</td></tr><tr><td>FC-TRS Filing</td><td>Share transfer reporting for secondary sales, investor exits, founder transfers, ESOP exercises involving non-residents</td></tr><tr><td>FLA Return (Annual)</td><td>Foreign Liabilities and Assets return preparation and filing on RBI FLAIR portal by 15 July deadline</td></tr><tr><td>Share Valuation</td><td>CA-certified DCF/NAV valuation for unlisted companies. SEBI merchant banker coordination for larger transactions</td></tr><tr><td>Entity Master Setup</td><td>One-time RBI FIRMS portal registration and ongoing updates for ownership/capital changes</td></tr><tr><td>Sectoral Cap Advisory</td><td>FDI eligibility, cap compliance, and route determination before investment is received</td></tr><tr><td>FEMA Compounding</td><td>Compounding application to RBI for missed filing deadlines or inadvertent FEMA violations</td></tr><tr><td>End-to-End FDI Package</td><td>Valuation + FC-GPR + SH-7 + PAS-3 + Companies Act compliance bundled for fundraise completion</td></tr>

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
            <h2 class="section-title">AD Bank Coordination in Gurugram</h2>
            <p class="section-subtitle" style="text-align:left;max-width:100%;">All FDI reporting flows through Authorised Dealer banks. Patron has established relationships with major AD bank FDI desks in Gurugram.</p>
        </header>
        <div class="steps-container">
            <div class="step-card"><div class="step-content"><span class="step-badge">Step 1</span><h3 class="step-title">FIRC from AD Bank</h3><p class="step-description">AD bank issues Foreign Inward Remittance Certificate confirming receipt of foreign funds. Completes KYC of foreign investor. Major Gurugram AD banks: HDFC (Cyber City, Golf Course Road), ICICI (Cyber Hub, Sohna Road), Axis (Sector 44, NH-48), SBI (Golf Course Road).</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>FIRC issued</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>KYC complete</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="15" y="5" width="90" height="70" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><text x="60" y="40" font-size="9" fill="#E8712C" font-weight="800" text-anchor="middle" font-family="Arial">FIRC</text></svg></div><span class="illustration-label">Bank Verified</span><span class="step-number-large">01</span></div></div></div><div class="step-card"><div class="step-content"><span class="step-badge">Step 2</span><h3 class="step-title">Valuation + Share Allotment</h3><p class="step-description">CA or SEBI merchant banker provides DCF/NAV valuation at or above FMV. Shares allotted within 60 days of receiving funds. Board resolution, share certificates issued. Authorised capital increased if needed via SH-7.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Valuation done</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Shares allotted</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="20" y="15" width="80" height="50" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><text x="60" y="35" font-size="8" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">DCF</text><text x="60" y="50" font-size="11" fill="#E8712C" font-weight="800" text-anchor="middle" font-family="Arial">FMV</text></svg></div><span class="illustration-label">Valued + Allotted</span><span class="step-number-large">02</span></div></div></div><div class="step-card"><div class="step-content"><span class="step-badge">Step 3</span><h3 class="step-title">FC-GPR via FIRMS Portal</h3><p class="step-description">File FC-GPR within 30 days of allotment through AD bank on RBI FIRMS portal. Attach FIRC, valuation, allotment documents. AD bank verifies and forwards to RBI. Track RBI acknowledgement.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>FC-GPR filed</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>RBI acknowledged</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="20" y="10" width="80" height="60" rx="8" fill="#E8F5E9" stroke="#25D366" stroke-width="2"/><path d="M52 40l5 5 12-12" stroke="#25D366" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/></svg></div><span class="illustration-label">RBI Compliant</span><span class="step-number-large">03</span></div></div></div>

        </div>
    </div>
</section>

<!-- SECTION 8: DOCUMENTS REQUIRED -->
<section class="content-section" id="documents-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Documents Required for FDI Compliance</h2>
            <div class="content-text">
                
                <ul><li><strong>FIRC</strong> - Foreign Inward Remittance Certificate from AD bank.</li><li><strong>Board Resolution</strong> - For share allotment to foreign investor.</li><li><strong>Share Valuation Report</strong> - By SEBI-registered merchant banker or CA (DCF/NAV method).</li><li><strong>KYC of Foreign Investor</strong> - Passport, address proof, bank details, beneficial ownership declaration.</li><li><strong>Share Certificates</strong> - Issued to foreign investor after allotment.</li><li><strong>CS Compliance Certificate</strong> - Certifying allotment complies with Companies Act and FEMA.</li><li><strong>Shareholding Pattern</strong> - Pre and post-allotment with ownership percentages.</li><li><strong>Investment Agreement / SHA</strong> - Share purchase or subscription agreement.</li></ul><div class="highlight-box" style="margin-top:20px;"><p><strong>For DPIIT-recognised startups:</strong> Obtain DPIIT recognition before raising foreign capital. Startups enjoy simplified FEMA compliance including exemption from angel tax and flexibility in pricing for convertible instruments.</p></div>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 9: CHALLENGES -->
<section class="content-section" id="challenges-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Common FDI Compliance Challenges in Gurugram</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Challenge</th><th>Impact</th><th>How Patron Accounting Solves It</th></tr></thead>
                    <tbody>
                        <tr><td>60-Day Allotment Deadline Missed</td><td>Delay due to pending SH-7 or documentation</td><td>Plan capital increase and valuation BEFORE receiving funds. Refund required if 60 days missed</td></tr><tr><td>Valuation Report Delays</td><td>SEBI merchant bankers take 2-4 weeks</td><td>Engage valuation professional when term sheet is signed, not after funds received</td></tr><tr><td>Land Border Country (China)</td><td>Mandatory FIFP approval adds 4-8 weeks</td><td>Plan FIFP application well in advance of investment closing</td></tr><tr><td>FLA Return Missed</td><td>Annual filing forgotten after initial FC-GPR</td><td>Calendar alert for 15 July every year. Patron manages annual FLA for all FDI clients</td></tr><tr><td>Downstream Investment Not Reported</td><td>Foreign-owned company investing in another Indian co.</td><td>Form DI within 30 days + DPIIT notification. Often missed when creating subsidiaries</td></tr>

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
            <h2 class="section-title">FDI Compliance Fees in Gurugram</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Fee Component</th><th>Amount</th></tr></thead>
                    <tbody>
                        <tr><td>FC-GPR Filing</td><td>Starting from INR 9,999-14,999 (Exl GST and Govt. Charges)</td></tr><tr><td>FC-TRS Filing</td><td>Starting from INR 7,999-12,999 (Exl GST and Govt. Charges)</td></tr><tr><td>FLA Return (Annual)</td><td>Starting from INR 4,999-7,999 (Exl GST and Govt. Charges)</td></tr><tr><td>Share Valuation (CA)</td><td>Starting from INR 9,999-24,999 (Exl GST and Govt. Charges)</td></tr><tr><td>Entity Master Setup</td><td>Starting from INR 2,999 (Exl GST and Govt. Charges)</td></tr><tr><td>Patron Accounting Professional Fees</td><td>Starting from INR 9,999 (Exl GST and Govt. Charges)</td></tr><tr><td>End-to-End FDI Package</td><td>Starting from INR 24,999-49,999 (Exl GST and Govt. Charges)</td></tr>

                    </tbody>
                </table>
                </div>
                <p style="margin-top:16px;font-size:13px;color:var(--text-muted);font-style:italic;">All fees and charges listed are indicative only and do not constitute a binding offer. Final amounts may vary depending on the volume of work and the complexity involved.</p>
                <p style="margin-top:16px;">Professional service charges for drafting, filing, and representation are separate from the statutory fees. The exact fee depends on the complexity of the case, disputed amount, and number of hearings required. Contact us for a detailed quote.</p>
                <p style="margin-top:16px;"><strong>Get a free FDI Compliance in Gurugram consultation - <a href="tel:+919459456700">Call +91 945 945 6700</a> or <a href="https://wa.me/919459456700?text=Hello%2C%20I%20just%20visited%20your%20Fdi%20Compliance%20in%20Gurugram%20page.%20I%20would%20like%20to%20know%20more%20about%20it." target="_blank" rel="noopener">WhatsApp us</a>. No-obligation assessment.</strong></p>
            </div>
        </div>
    </div>
</section>

<!-- SECTION 11: TIMELINE -->
<section class="content-section" id="timeline-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">FDI Compliance Calendar</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Stage</th><th>Estimated Timeline</th></tr></thead>
                    <tbody>
                        <tr><td>Receive Foreign Funds</td><td>Day 0 - AD bank issues FIRC</td></tr><tr><td>Allot Shares</td><td>Within 60 days of receipt (refund within 15 days if missed)</td></tr><tr><td>File FC-GPR</td><td>Within 30 days of allotment via AD bank on FIRMS</td></tr><tr><td>File FC-TRS (if transfer)</td><td>Within 60 days of transfer/payment</td></tr><tr><td>File Form DI (downstream)</td><td>Within 30 days of downstream allotment + DPIIT notification</td></tr><tr><td>FLA Return</td><td>15 July each year for ALL companies with FDI outstanding</td></tr><tr><td>Entity Master Update</td><td>On any ownership/capital change - prerequisite for FC-GPR</td></tr>

                    </tbody>
                </table>
                </div>
                <div class="highlight-box" style="margin-top:16px;">
                    
                    <p><strong>Critical deadlines:</strong> 60 days for share allotment (else refund). 30 days for FC-GPR. 15 July for annual FLA. Late filing attracts Late Submission Fee + potential compounding. Plan FDI compliance BEFORE receiving funds. Entity Master must be set up on FIRMS before the first FC-GPR.</p>

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
            <h2 class="section-title">Why Choose Patron Accounting for FDI Compliance in Gurugram?</h2>
        </div>
        <div class="features-grid"><article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><h3 class="feature-title">Gurugram FDI Hub</h3><p class="feature-text">Golf Course Extension Road - at the heart of Gurugram's FDI ecosystem. Direct access to AD bank FDI desks and the startup/MNC community.</p></article><article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"/></svg></div><h3 class="feature-title">Full FEMA Coverage</h3><p class="feature-text">FC-GPR, FC-TRS, FLA, Form DI, convertible notes, and FEMA compounding. Complete coverage for startups and MNC subsidiaries.</p></article><article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M14 2H6a2 2 0 00-2 2v16a2 2 0 002 2h12a2 2 0 002-2V8z"/><path d="M14 2v6h6M16 13H8M16 17H8"/></svg></div><h3 class="feature-title">In-House Valuation</h3><p class="feature-text">CA valuation for FC-GPR (DCF, NAV methods). SEBI merchant banker coordination for larger transactions. No separate engagement needed.</p></article><article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M17 21v-2a4 4 0 00-4-4H5a4 4 0 00-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M23 21v-2a4 4 0 00-3-3.87M16 3.13a4 4 0 010 7.75"/></svg></div><h3 class="feature-title">AD Bank Relationships</h3><p class="feature-text">Established coordination with HDFC, ICICI, Axis, SBI FDI desks in Gurugram for smooth FIRC issuance and form processing.</p></article></div>
    </div>
</section>

<!-- SECTION 12A: SOCIAL PROOF -->
<section class="content-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Trusted by 10,000+ Businesses Across India</h2>
            <div class="content-text">
                
                <p><strong>Trust Banner:</strong> 10,000+ Businesses Served | 4.9 Google Rating | 50,000+ Documents Filed | 15+ Years of Practice</p><blockquote style="border-left:3px solid var(--orange);padding:16px 20px;margin:20px 0;background:var(--orange-lighter);border-radius:0 var(--radius-sm) var(--radius-sm) 0;"><p style="font-style:italic;margin-bottom:8px;">"Raised Series A from Singapore VC. Patron handled authorised capital increase, share valuation, FC-GPR filing, and AD bank coordination in a single engagement. Zero compliance gaps."</p><p style="font-weight:700;font-size:14px;margin:0;">- Startup Founder, DLF Cyber City</p></blockquote><blockquote style="border-left:3px solid var(--orange);padding:16px 20px;margin:20px 0;background:var(--orange-lighter);border-radius:0 var(--radius-sm) var(--radius-sm) 0;"><p style="font-style:italic;margin-bottom:8px;">"Japanese parent injected Rs 50 crore. Patron managed Entity Master, valuation, FC-GPR, and downstream investment reporting for subsidiary. FEMA-perfect."</p><p style="font-weight:700;font-size:14px;margin:0;">- CFO, Golf Course Road MNC</p></blockquote>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 13: SELF-FILING vs PROFESSIONAL COMPARISON -->
<section class="content-section" id="comparison-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Patron vs Other FEMA Consultants</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Factor</th><th>Patron Accounting</th><th>Typical FEMA Consultant</th></tr></thead>
                    <tbody>
                        <tr><td>FDI Coverage</td><td>FC-GPR + FC-TRS + FLA + DI + CN + valuation + Companies Act</td><td>FC-GPR only</td></tr><tr><td>AD Bank Coordination</td><td>Established Gurugram bank relationships</td><td>Client manages bank</td></tr><tr><td>Valuation</td><td>In-house CA + merchant banker network</td><td>Separate engagement</td></tr><tr><td>Bundled Service</td><td>Valuation + FC-GPR + SH-7 + PAS-3</td><td>Piecemeal</td></tr><tr><td>Pricing</td><td>From Rs 9,999 (FC-GPR) transparent</td><td>Variable</td></tr><tr><td>Track Record</td><td>10,000+ businesses, cross-border expertise</td><td>50-200 FDI filings</td></tr>

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
                
                <ul><li><a href="/fdi-compliance">FDI Compliance (National)</a> - Broader overview</li><li><a href="/change-in-authorised-capital">Change in Authorised Capital</a> - Pre-FDI capital increase</li><li><a href="/private-limited-company-registration">Private Limited Registration</a> - Foreign subsidiary</li><li><a href="/issue-of-shares">Issue of Shares</a> - PAS-3 post allotment</li><li><a href="/transfer-of-shares">Transfer of Shares</a> - Resident/NR transfers</li></ul>

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
                
                <p><strong>Governing Law:</strong> FEMA, 1999 | NDI Rules, 2019 | RBI Master Direction on FDI | DPIIT Consolidated FDI Policy 2020 (as amended)</p><p><strong>RBI Portals:</strong> <a href="https://firms.rbi.org.in" target="_blank" rel="noopener">FIRMS</a> (FC-GPR, FC-TRS, Form DI) | <a href="https://flair.rbi.org.in" target="_blank" rel="noopener">FLAIR</a> (FLA annual return)</p><p><strong>DPIIT:</strong> <a href="https://dpiit.gov.in" target="_blank" rel="noopener">dpiit.gov.in</a> | FDI Policy | FIFP for government approval route</p><p><strong>Penalties (FEMA Section 13):</strong></p><p><strong>Monetary:</strong> Up to 3x amount involved or Rs 2 lakh (whichever higher).</p><p><strong>Continuing:</strong> Rs 5,000/day for every day the contravention continues.</p><p><strong>Reversal:</strong> RBI may order reversal of the FDI transaction.</p><p><strong>Compounding:</strong> Inadvertent violations can be regularised by paying compounding fee to RBI.</p>

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
                    <h2 class="faq-expanded__title">FAQs - FDI Compliance in Gurugram</h2>
                    <p class="faq-expanded__lead">Common questions about FDI compliance, FEMA reporting, sectoral caps, and RBI filing for Gurugram companies.</p>
                    @include('partials.bigin-form', [
                        'variant'  => 'compact',
                        'service'  => 'FDI Compliance in Gurugram',
                        'city'     => 'Gurugram',
                    ])
                </aside>
                <div class="faq-expanded__list">
                    <div class="faq-expanded__item" id="faq-1">
                        <h3 class="faq-expanded__q">What is FC-GPR and when to file?</h3>
                        <div class="faq-expanded__a"><p>FC-GPR is filed with RBI through AD bank within 30 days of allotting shares to a non-resident investor. It reports FDI transaction details including investor identity, amount, pricing, and instrument type via the RBI FIRMS portal.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-2">
                        <h3 class="faq-expanded__q">What is the FLA return deadline?</h3>
                        <div class="faq-expanded__a"><p>FLA return must be filed by 15 July each year on RBI FLAIR portal covering all foreign liabilities and assets as of 31 March. Mandatory even with no new FDI transactions if any FDI is outstanding. Late filing affects compliance record.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-3">
                        <h3 class="faq-expanded__q">Which sectors allow 100% FDI?</h3>
                        <div class="faq-expanded__a"><p>IT/ITES, SaaS, B2B e-commerce, manufacturing allow 100% under automatic route. B2C e-commerce (inventory model) is prohibited. Defence capped at 74%. Digital media at 26%. Single brand retail: 100% (auto up to 49%, govt 49-100%).</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-4">
                        <h3 class="faq-expanded__q">Is government approval needed for Chinese investment?</h3>
                        <div class="faq-expanded__a"><p>Yes. Investment from any land-border country (China, Bangladesh, Pakistan, Nepal, Myanmar, Bhutan, Afghanistan) requires mandatory FIFP approval regardless of sector or amount. Takes 4-8 weeks. Common for Gurugram tech companies.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-5">
                        <h3 class="faq-expanded__q">What happens if FC-GPR is filed late?</h3>
                        <div class="faq-expanded__a"><p>Late filing attracts Late Submission Fee from RBI based on delay period. For significant delays, compounding application to RBI required. Penalties can be up to 3x transaction amount. Patron handles FEMA compounding for delayed filings.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-6">
                        <h3 class="faq-expanded__q">What valuation is needed?</h3>
                        <div class="faq-expanded__a"><p>For unlisted companies: by SEBI-registered Category I Merchant Banker or CA using internationally accepted methodology (DCF for startups, NAV for asset-heavy). Shares cannot be issued below Fair Market Value. Mandatory for FC-GPR.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-7">
                        <h3 class="faq-expanded__q">What is the cost?</h3>
                        <div class="faq-expanded__a"><p>FC-GPR from Rs 9,999. FLA return from Rs 4,999. Share valuation from Rs 9,999. End-to-end package (valuation + FC-GPR + SH-7 + PAS-3) from Rs 24,999. Government fees additional. Transparent pricing.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-8">
                        <h3 class="faq-expanded__q">Can startups issue convertible notes to foreign investors?</h3>
                        <div class="faq-expanded__a"><p>Yes. DPIIT-recognised startups can issue convertible notes with minimum Rs 25 lakh per investor and maximum 10-year conversion. Form CN filed within 30 days of issuance on RBI FIRMS portal.</p></div>
                    </div>
                </div>
            </div>


            <!-- Quick Answers -->
            <div class="highlight-box" style="margin-top:32px;">
                <p><strong>Quick Answers</strong></p>
                <p><strong>FC-GPR kab file karna padta hai?</strong> Share allotment ke 30 din ke andar RBI FIRMS portal par AD bank ke through.</p><p><strong>FLA return kya hai?</strong> Har saal 15 July tak RBI ko foreign liabilities aur assets ka annual return. FDI liya hai toh mandatory.</p><p><strong>Chinese investor se paisa le sakte hain?</strong> Haan, lekin government approval (FIFP) zaroori hai. 4-8 hafta lagta hai.</p>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 18: URGENCY CTA -->
<section class="content-section" style="background: var(--orange-lighter) !important; border-left: 4px solid var(--orange);">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Plan FDI Compliance BEFORE Receiving Funds</h2>
            <div class="content-text">
                
                <p>Share allotment: 60 days (else refund). FC-GPR: 30 days. FLA: 15 July annually. Entity Master setup before first FC-GPR. Valuation report before allotment. AD bank FIRC takes 7-15 days. Land-border approval: 4-8 weeks. Late filing = penalties up to 3x amount. Start compliance planning when the term sheet is signed.</p><p><strong><a href="tel:+919459456700">Call +91 945 945 6700</a> or <a href="https://wa.me/919459456700?text=Hello%2C%20I%20just%20visited%20your%20Fdi%20Compliance%20in%20Gurugram%20page.%20I%20would%20like%20to%20know%20more%20about%20it." target="_blank" rel="noopener">WhatsApp us</a> to get started.</strong></p>

            </div>
        </div>
    </div>
</section>

<!-- CONCLUSION + CTA BLOCK (Dark) -->
<section class="content-section" style="background: var(--blue) !important;">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title" style="color:#FFFFFF !important;">Get Expert FDI Compliance in Gurugram</h2>
            <div class="content-text" style="text-align:left;">
                
                <p style="color:rgba(255,255,255,0.85);">FDI compliance in Gurugram encompasses FEMA reporting (FC-GPR, FC-TRS, FLA), sectoral cap verification, share valuation, AD bank coordination, and RBI FIRMS portal filing. Whether you are a Cyber City startup raising Series A or a Golf Course Road MNC subsidiary receiving parent equity, FEMA compliance is mandatory and time-sensitive.</p><p style="color:rgba(255,255,255,0.85);">Patron Accounting's Gurugram office on Golf Course Extension Road provides end-to-end FDI compliance including Entity Master setup, share valuation, FC-GPR/FC-TRS filing, FLA return, and FEMA compounding.</p><p style="color:rgba(255,255,255,0.85);">With 10,000+ businesses served, a 4.9 Google rating, and 50,000+ documents filed, Patron Accounting LLP is a trusted FEMA compliance partner for FDI-receiving companies across Gurugram, NCR, and India.</p>

            </div>
            <div style="display:flex;gap:14px;flex-wrap:wrap;margin-top:24px;">
                <a href="tel:+919459456700" style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:var(--orange);color:#fff;border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#128222; Call +91 945 945 6700</a>
                <a href="https://wa.me/919459456700?text=Hello%2C%20I%20just%20visited%20your%20Fdi%20Compliance%20in%20Gurugram%20page.%20I%20would%20like%20to%20know%20more%20about%20it." target="_blank" style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:#25D366;color:#fff;border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;" rel="noopener">&#128172; WhatsApp Us</a>
                <a href="mailto:sales@patronaccounting.com?subject=FDI%20Compliance%20Gurugram&body=Hello%2C%20I%20just%20visited%20your%20Fdi%20Compliance%20in%20Gurugram%20page.%20I%20would%20like%20to%20know%20more%20about%20it.%0A%0AThank%20you." style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:transparent;color:#fff;border:2px solid rgba(255,255,255,0.3);border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#9993;&#65039; Email Us</a>
            </div>
            <p style="color:rgba(255,255,255,0.7);font-size:13px;margin-top:16px;">Book a Free Consultation - No Obligation.</p>
        </div>
    </div>
</section>

<!-- GSTAT STATE BENCH CITY PAGES (32 Pages) -->
<section class="content-section" style="padding:48px 32px;background:var(--gray-50);">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title" style="text-align:center;margin-bottom:12px;">FDI Compliance - Available Cities</h2>
            <p style="text-align:center;color:var(--text-muted);font-size:15px;margin-bottom:40px;">Expert FDI compliance services across major Indian cities</p>
         
            <div class="pa-city-block" style="margin-bottom:40px;"><div class="pa-block-title">City-Wise FDI Compliance</div><div class="pa-block-sub">Select your city</div><div class="pa-city-grid"><a href="/fdi-compliance/pune" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Pune</div><div class="pa-card-sub">Maharashtra</div></div></a><a href="/fdi-compliance/mumbai" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Mumbai</div><div class="pa-card-sub">Maharashtra</div></div></a><a href="/fdi-compliance/delhi" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Delhi</div><div class="pa-card-sub">Delhi NCR</div></div></a><div class="pa-city-card" style="opacity:0.6; pointer-events:none; border:2px solid var(--orange); position:relative;"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Gurugram</div><div class="pa-card-sub">Haryana</div></div><span style="position:absolute; top:6px; right:8px; font-size:10px; color:var(--orange); font-weight:700; text-transform:uppercase; letter-spacing:0.5px;">You're here</span></div></div></div><div class="pa-city-block"><div class="pa-block-title">Related Services in Gurugram</div><div class="pa-block-sub">End-to-end corporate and compliance support</div><div class="pa-cross-grid"><a href="/change-in-authorised-capital/gurugram" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Change Authorised Capital</div><div class="pa-card-sub">Gurugram</div></div></a><a href="/private-limited-company-registration/gurugram" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Company Registration</div><div class="pa-card-sub">Gurugram</div></div></a><a href="/issue-of-shares/gurugram" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Issue of Shares</div><div class="pa-card-sub">Gurugram</div></div></a><a href="/transfer-of-shares/gurugram" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Transfer of Shares</div><div class="pa-card-sub">Gurugram</div></div></a><a href="/private-limited-company-compliance/gurugram" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Annual Compliance</div><div class="pa-card-sub">Gurugram</div></div></a><a href="/accounting-services/gurugram" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Accounting Services</div><div class="pa-card-sub">Gurugram</div></div></a></div></div>
        </div>
    </div>
</section>

<!-- CONTENT FRESHNESS FOOTER -->
<section class="content-section" style="padding:32px;">
    <div class="content-container">
        <div class="text-content" style="font-size:13px;color:var(--text-muted);">
            <p><strong>Content Created:</strong> 03 April 2026 &nbsp;|&nbsp; <strong>Last Updated:</strong> <span id="lastUpdatedFooter">03 April 2026</span> &nbsp;|&nbsp; <strong>Next Review:</strong> 03 July 2026 &nbsp;|&nbsp; <strong>Reviewed By:</strong> CA &amp; CS Team, Patron Accounting LLP</p>
            <p>This page is reviewed quarterly. FEMA regulations, RBI FIRMS portal updates, DPIIT FDI Policy amendments, and sectoral caps are verified against the latest RBI circulars.</p>
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
