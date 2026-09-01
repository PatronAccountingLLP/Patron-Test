

@extends('layouts.service-app')

<!-- External Dependencies (loaded by master layout in production) -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Barlow:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,400&family=DM+Sans:opsz,wght@9..40,400;9..40,500;9..40,600;9..40,700&display=swap" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

@section('meta')
    <title>ITR for Capital Gains in Pune – STCG, LTCG &amp; ITR-2</title>
    <meta name="description" content="CA-assisted ITR filing for capital gains in Pune. LTCG STCG on property, shares, mutual funds, ESOPs. Section 54/54EC exemptions. Serving Hinjewadi, Kharadi IT professionals. Call +91 945 945 6700.">
    <link rel="canonical" href="/itr-for-capital-gains/pune">
    <meta name="robots" content="index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1">
    <meta property="og:title" content="ITR for Capital Gains in Pune – STCG, LTCG &amp; ITR-2">
    <meta property="og:description" content="CA-assisted ITR filing for capital gains in Pune. LTCG STCG on property, shares, mutual funds, ESOPs. Section 54/54EC exemptions. Serving Hinjewadi, Kharadi IT professionals. Call +91 945 945 6700.">
    <meta property="og:url" content="/itr-for-capital-gains/pune">
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="Patron Accounting">
    <meta property="og:image" content="https://www.patronaccounting.com/images/og-default-square.png">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="1200">
    <meta property="og:image:type" content="image/png">
    <meta property="og:image:secure_url" content="https://www.patronaccounting.com/images/og-default-square.png">
    <meta property="og:image:alt" content="Patron Accounting - partner you can rely on">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="ITR for Capital Gains in Pune – STCG, LTCG &amp; ITR-2">
    <meta name="twitter:description" content="CA-assisted ITR filing for capital gains in Pune. LTCG STCG on property, shares, mutual funds, ESOPs. Section 54/54EC exemptions. Serving Hinjewadi, Kharadi IT professionals. Call +91 945 945 6700.">
    <meta name="twitter:image" content="https://www.patronaccounting.com/images/og-default-square.png">
@endsection

@section('schema')
    <script type="application/ld+json">{
  "@context": "https://schema.org",
  "@graph": [
    {
      "@type": "Service",
      "name": "ITR for Capital Gains in Pune",
      "description": "CA-assisted ITR filing for capital gains in Pune. LTCG STCG on property, shares, mutual funds, ESOPs. Section 54/54EC exemptions. Serving Hinjewadi, Kharadi IT professionals. Call +91 945 945 6700.",
      "url": "https://www.patronaccounting.com/itr-for-capital-gains/pune",
      "serviceType": "ITR for Capital Gains in Pune",
      "areaServed": {
        "@type": "City",
        "name": "Pune"
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
        "url": "https://www.patronaccounting.com/itr-for-capital-gains/pune"
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
          "name": "ITR for Capital Gains",
          "item": "https://www.patronaccounting.com/itr-capital-gains"
        },
        {
          "@type": "ListItem",
          "position": 3,
          "name": "Capital Gains ITR in Pune",
          "item": "https://www.patronaccounting.com/itr-for-capital-gains/pune"
        }
      ]
    },
    {
      "@type": "FAQPage",
      "mainEntity": [
        {
          "@type": "Question",
          "name": "Which ITR form for capital gains in Pune?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Use ITR-2 for individuals or HUF with capital gains and no business income. ITR-3 if business income is also present. ITR-1 cannot be used. Report gains in Schedule CG for property and gold, and Schedule 112A for listed equity and equity mutual fund LTCG with ISIN-wise details."
          }
        },
        {
          "@type": "Question",
          "name": "How is property capital gains calculated in Pune?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "LTCG equals sale consideration minus indexed cost of acquisition minus indexed improvement cost minus transfer expenses. For pre-23 July 2024 purchases, individuals can choose 12.5% without indexation or 20% with indexation whichever results in lower tax. Post-23 July 2024 purchases use 12.5% flat."
          }
        },
        {
          "@type": "Question",
          "name": "What exemptions can I claim on capital gains?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Section 54 allows reinvestment of LTCG from house sale into residential property. Section 54EC allows investment up to Rs 50 lakh in NHAI or REC bonds within 6 months. Section 54F covers reinvestment of net sale proceeds from non-residential assets into residential property."
          }
        },
        {
          "@type": "Question",
          "name": "How are ESOP capital gains taxed for Pune IT professionals?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "ESOPs are taxed in two stages. At exercise the FMV minus exercise price is perquisite taxed as salary. At sale the sale price minus FMV at exercise is capital gains. Listed shares held over 12 months from exercise qualify for 12.5% LTCG with Rs 1.25 lakh exemption."
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
                        ITR for Capital Gains in Pune - Expert CA-Assisted Filing
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
                            <p class="mb-0 text-dark benefit-paragraph"><span>LTCG Tax Rate:</span> 12.5% flat (equity shares, mutual funds, property, all assets) - effective from 23 July 2024</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>STCG Tax Rate:</span> 20% on listed equity (STT paid); slab rates on other assets</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Exemptions:</span> Section 54 (reinvest in house), 54EC (bonds, max Rs 50 lakh), 54F (reinvest net proceeds)</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>ITR Form:</span> ITR-2 for individuals/HUF with capital gains; Schedule CG and Schedule 112A</p>
                        </div>
                    </div>

                    <p class="mb-4 fw-bold" style="color: var(--blue); font-size: 15px;">10,000+ Businesses Served | 4.9 Google Rating | 50,000+ Documents Filed | 15+ Years</p>

                    <div class="hero-cta">
                        <a href="tel:+919459456700" class="btn-video text-decoration-none">
                            <span class="play-circle"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="width:14px;height:14px;color:#fff"><path d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/></svg></span>
                            Call +91 945 945 6700
                        </a>
                        <a href="mailto:sales@patronaccounting.com" class="btn-sample text-decoration-none">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="width:18px;height:18px;"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,12 2,6"/></svg>
                            Email Us
                        </a>
                        <a href="https://wa.me/919459456700?text=Hi%2C%20I%20need%20help%20with%20Capital%20Gains%20ITR%20Filing%20in%20Pune.%20Please%20share%20details." target="_blank" class="btn-sample text-decoration-none">
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
                                            'service'  => 'ITR for Capital Gains in Pune',
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
    'ctaText'    => 'From property sellers to IT professionals, Pune taxpayers trust Patron for capital gains ITR and tax planning.',
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
            <a href="#what-section" class="toc-btn">What is CG ITR</a>
            <a href="#who-section" class="toc-btn">Who Must File</a>
            <a href="#services-section" class="toc-btn">Services</a>
            <a href="#process-section" class="toc-btn">Filing Process</a>
            <a href="#documents-section" class="toc-btn">Documents</a>
            <a href="#fees-section" class="toc-btn">Fees</a>
            <a href="#timeline-section" class="toc-btn">Deadlines</a>
            <a href="#benefits-section" class="toc-btn">Why Patron</a>
            <a href="#comparison-section" class="toc-btn">Patron vs Local</a>
            <a href="#faq-section" class="toc-btn">FAQs</a>
        </div>
        <button class="toc-arrow right" id="tocRight">&#10095;</button>
    </div>
</div>

<!-- SECTION 2: OVERVIEW / INTRO + TL;DR -->
<section class="content-section" id="overview-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">ITR for Capital Gains in Pune - Overview</h2>
            <div class="content-text">
                <div class="highlight-box" style="margin-bottom:20px;">
                    <p><strong>&#128204; TL;DR - ITR for Capital Gains in Pune Services at a Glance</strong></p>
                    <p>Filing an Income Tax Return (ITR) for capital gains in Pune requires reporting profits from the sale of property, shares, mutual funds, gold, and other capital assets in ITR-2 (or ITR-3 for business income). Since the Budget 2024 changes effective 23 July 2024, long-term capital gains (LTCG) across all asset classes are taxed at a uniform 12.5% (with indexation benefit removed for most assets), while short-term capital gains on listed equity are taxed at 20%. Pune's booming real estate in Baner, Wakad, Hinjewadi, and Kharadi, combined with thousands of IT professionals holding ESOPs/RSUs and active equity/mutual fund investors, makes capital gains ITR filing one of the most complex compliance activities in the city.</p>
                </div>
                <p>Pune has witnessed extraordinary real estate appreciation over the past decade - property values in <strong>Baner, Wakad, Balewadi, and Hinjewadi</strong> have multiplied 2-4 times, creating significant LTCG exposure for sellers. Simultaneously, IT professionals in <strong>Hinjewadi IT Park, Kharadi, and Rajiv Gandhi Infotech Park</strong> hold ESOPs and RSUs from companies like Infosys, TCS, Wipro, and multinational employers. The <strong>Income Tax Office, Pune</strong> under <strong>CIT Pune-1, CIT Pune-2, and CIT Pune-3</strong> handles assessments, while the CPC Bengaluru processes filed ITRs. Learn more about ITR for Capital Gains across India.</p>
                <p>With the <strong>ITR filing deadline of 31st July 2026</strong> for FY 2025-26, Pune taxpayers must plan capital gains computation, exemption claims, and advance tax payments well in advance. After capital gains ITR filing, individuals also benefit from Tax Planning and <a href="/accounting-services">Accounting Services</a>.</p>
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
                <h2 class="section-title">What Is ITR for Capital Gains</h2>
                <div class="content-text what-is-definition">
                    
                    <p>An ITR for capital gains is an income tax return that reports profits or losses arising from the transfer (sale, exchange, or relinquishment) of capital assets during the financial year. Under the Income Tax Act, 1961, capital gains are classified as <strong>Short-Term Capital Gains (STCG)</strong> or <strong>Long-Term Capital Gains (LTCG)</strong> based on the holding period. Since the Budget 2024 reforms effective 23 July 2024, LTCG is taxed at a uniform <strong>12.5%</strong> across all asset classes with indexation benefit removed for most assets (with a transitional choice for property purchased before 23 July 2024).</p>
<p>Capital gains must be reported in <strong>ITR-2</strong> (for individuals/HUF without business income) or <strong>ITR-3</strong> (with business income). The return includes <strong>Schedule CG</strong> (Capital Gains computation), <strong>Schedule 112A</strong> (LTCG on listed equity/equity MFs with ISIN-wise details), and relevant exemption claims under Sections 54, 54EC, and 54F.</p>
<p>For Pune taxpayers, the most common scenarios include: sale of residential property in <strong>Baner, Wakad, Hinjewadi, Kharadi, or Hadapsar</strong>; sale of listed equity shares and mutual fund units; ESOP/RSU exercises by IT professionals in <strong>Hinjewadi and Rajiv Gandhi Infotech Park</strong>; and NRIs selling ancestral property in <strong>Pune Cantonment, Koregaon Park, or Deccan</strong> areas.</p>

                </div>
                <div class="highlight-box" style="margin-top:20px;">
                    <p><strong>Key Terms for ITR for Capital Gains in Pune:</strong></p>
                    <p><strong>LTCG (Long-Term Capital Gains):</strong> Gains on assets held beyond the specified period (12 months for listed equity; 24 months for property/gold). Taxed at 12.5% flat from 23 July 2024.</p>
<p><strong>STCG (Short-Term Capital Gains):</strong> Gains on assets held below the threshold period. Listed equity: 20%. Other assets: slab rates.</p>
<p><strong>Schedule 112A:</strong> ISIN-wise reporting of LTCG on listed equity shares and equity mutual funds in the ITR. Exempt up to Rs 1.25 lakh.</p>
<p><strong>Section 54/54EC/54F:</strong> Exemptions available to reduce or eliminate capital gains tax through reinvestment in property (54), bonds (54EC), or residential property from non-residential asset sale (54F).</p>
<p><strong>Indexation:</strong> CII-based adjustment of purchase cost to account for inflation. Available as a choice for property purchased before 23 July 2024 (20% with indexation vs 12.5% without).</p>

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
                            <text x="100" y="170" font-size="10" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial, sans-serif">ITR for Capital Gains in Pune</text>
                        </svg>
                    </div>
                    <div class="illustration-badge">
                        <span>LTCG Rate</span>
                        <strong>12.5% Flat (All Assets)</strong>
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
            <h2 class="section-title">Who Needs ITR Filing for Capital Gains in Pune</h2>
            <div class="content-text">
                
                <p><strong>Property Sellers (Baner, Wakad, Hinjewadi, Kharadi)</strong> - Anyone selling residential or commercial property in Pune generating capital gains must file ITR-2 with Schedule CG. Property held for more than 24 months qualifies as long-term. The seller can choose between 12.5% without indexation or 20% with indexation for pre-23 July 2024 purchases. See Income Tax Returns for comprehensive ITR filing.</p>
<p><strong>IT Professionals with ESOPs/RSUs (Hinjewadi, Kharadi, Magarpatta)</strong> - Thousands of Pune IT employees hold ESOPs from Infosys, TCS, Wipro, and multinational employers. The perquisite value at exercise is taxed as salary, while the gain on subsequent sale is capital gains. Correct bifurcation is essential.</p>
<p><strong>Equity and Mutual Fund Investors</strong> - Pune's large salaried class actively invests in equity shares and mutual funds. LTCG on equity exceeding Rs 1.25 lakh is taxed at 12.5% under Section 112A. Debt mutual funds purchased after April 2023 have no LTCG benefit - all gains are taxed at slab rates.</p>
<p><strong>NRIs Selling Pune Property</strong> - Non-Resident Indians selling property in Koregaon Park, Pune Cantonment, Deccan, and other prime localities face LTCG at 12.5%. The buyer must deduct TDS under Section 195 (20-30%). NRIs must file ITR-2 in India to claim exemptions and refund of excess TDS. See NRI Taxation services.</p>
<p><strong>Individuals Inheriting and Selling Property</strong> - Pune residents who inherited property compute capital gains based on the original owner's cost of acquisition and date of acquisition. This is particularly relevant for properties in old Pune areas (Deccan, Shivajinagar, Camp) held across generations.</p>

            </div>
            </div>
        </div>
    </div>
</section>

<!-- SECTION 5: OUR SERVICES -->
<section class="content-section" id="services-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Capital Gains ITR Services in Pune</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Service</th><th>What We Do</th></tr></thead>
                    <tbody>
                        <tr><td>ITR-2 Filing with Schedule CG</td><td>Complete capital gains computation and ITR filing for property, shares, mutual funds, gold, and other assets</td></tr>
<tr><td>Property LTCG Computation</td><td>Full sale value, indexed/non-indexed cost, improvement cost, transfer expenses; 12.5% vs 20% choice modelling</td></tr>
<tr><td>Schedule 112A (Equity/MF LTCG)</td><td>ISIN-wise scrip detail preparation from broker/depository statements for listed equity and equity MF LTCG</td></tr>
<tr><td>ESOP/RSU Capital Gains</td><td>Separating perquisite (salary) from capital gains; computing cost at exercise price; LTCG/STCG determination</td></tr>
<tr><td>Section 54/54EC/54F Exemptions</td><td>Advisory on reinvestment options, timelines, conditions; Capital Gains Account Scheme (CGAS) management</td></tr>
<tr><td>Capital Loss Set-Off and Carry Forward</td><td>Setting off STCL against STCG/LTCG; LTCL against LTCG only; carrying forward for 8 years with timely filing</td></tr>
<tr><td>NRI Capital Gains ITR</td><td>ITR filing for NRIs selling Pune property; Section 195 TDS credit; DTAA benefit; lower deduction certificate</td></tr>
<tr><td>Advance Tax Computation</td><td>Estimating capital gains liability and advising on quarterly advance tax instalments to avoid Section 234B/234C interest</td></tr>

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
            <h2 class="section-title">Capital Gains ITR Filing Process in Pune</h2>
            <p class="section-subtitle" style="text-align:left;max-width:100%;">6-step guide for capital gains ITR compliance with Patron Accounting</p>
        </header>
        <div class="steps-container">
            <div class="step-card"><div class="step-content"><span class="step-badge">Step 1</span><h3 class="step-title">Gather Transaction Documents and Classify Gains</h3><p class="step-description">Collect sale deeds (property), contract notes and depository statements (shares), redemption statements (mutual funds), and ESOP exercise letters. Classify each transaction as STCG or LTCG based on holding period: 12 months for listed equity/equity MFs, 24 months for property/gold/unlisted shares. For Pune property sellers, obtain the stamp duty value from the Sub-Registrar and CII for purchase and sale years.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>STCG/LTCG Classification</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Document Collection</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="15" y="5" width="90" height="70" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><line x1="30" y1="22" x2="90" y2="22" stroke="#E8712C" stroke-width="3" stroke-linecap="round"/><line x1="30" y1="36" x2="80" y2="36" stroke="#14365F" stroke-width="2" opacity="0.3"/><line x1="30" y1="48" x2="70" y2="48" stroke="#14365F" stroke-width="2" opacity="0.3"/><line x1="30" y1="60" x2="60" y2="60" stroke="#14365F" stroke-width="2" opacity="0.3"/></svg></div><span class="illustration-label">Data Gathered</span><span class="step-number-large">01</span></div></div></div>
<div class="step-card"><div class="step-content"><span class="step-badge">Step 2</span><h3 class="step-title">Compute Capital Gains for Each Asset</h3><p class="step-description">Property: Sale consideration (or stamp duty value under Section 50C) minus indexed cost of acquisition minus indexed improvement cost minus transfer expenses. Choose between 12.5% without indexation or 20% with indexation (for pre-23 July 2024 purchases). Listed Equity/MFs: Sale value minus cost (grandfathered at 31 Jan 2018 FMV). LTCG exempt up to Rs 1.25 lakh. ESOPs: Sale price minus FMV at exercise date.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Indexation Modelling</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Grandfathering Applied</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="20" y="10" width="80" height="65" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><circle cx="45" cy="30" r="8" fill="#FEF4EE" stroke="#E8712C" stroke-width="1.5"/><text x="45" y="34" text-anchor="middle" fill="#E8712C" font-size="10" font-weight="bold">%</text><rect x="30" y="50" width="60" height="15" rx="4" fill="#10B981" opacity="0.15"/><line x1="30" y1="57" x2="75" y2="57" stroke="#10B981" stroke-width="2"/></svg></div><span class="illustration-label">Gains Computed</span><span class="step-number-large">02</span></div></div></div>
<div class="step-card"><div class="step-content"><span class="step-badge">Step 3</span><h3 class="step-title">Apply Exemptions (Section 54/54EC/54F)</h3><p class="step-description">Section 54: Reinvest LTCG from residential property sale into 1 or 2 residential properties. Section 54EC: Invest LTCG (up to Rs 50 lakh) in NHAI/REC bonds within 6 months. Section 54F: Reinvest net sale consideration from non-residential long-term asset into residential property. If reinvestment is not completed before the ITR due date (31 July 2026), deposit in a Capital Gains Account Scheme (CGAS) at a Pune bank.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>54/54EC/54F Claims</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>CGAS if Needed</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="15" y="10" width="90" height="65" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><circle cx="60" cy="35" r="15" fill="#FEF4EE" stroke="#E8712C" stroke-width="1.5"/><text x="60" y="40" text-anchor="middle" fill="#E8712C" font-size="10" font-weight="bold">54</text><line x1="30" y1="60" x2="90" y2="60" stroke="#14365F" stroke-width="1.5" opacity="0.3"/></svg></div><span class="illustration-label">Exemptions Applied</span><span class="step-number-large">03</span></div></div></div>
<div class="step-card"><div class="step-content"><span class="step-badge">Step 4</span><h3 class="step-title">Pay Advance Tax on Capital Gains</h3><p class="step-description">If capital gains tax liability exceeds Rs 10,000, advance tax must be paid in instalments: 15% by 15 June, 45% by 15 September, 75% by 15 December, 100% by 15 March. For capital gains arising after September, the entire tax can be paid in remaining instalments. Failure to pay attracts Section 234B (shortfall) and Section 234C (deferment) interest.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Quarterly Instalments</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>234B/234C Avoidance</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="20" y="15" width="80" height="55" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><circle cx="60" cy="35" r="12" fill="#FEF4EE" stroke="#E8712C" stroke-width="1.5"/><text x="60" y="39" text-anchor="middle" fill="#E8712C" font-size="10" font-weight="bold">Rs</text><rect x="30" y="55" width="60" height="8" rx="3" fill="#10B981" opacity="0.15"/></svg></div><span class="illustration-label">Advance Tax Paid</span><span class="step-number-large">04</span></div></div></div>
<div class="step-card"><div class="step-content"><span class="step-badge">Step 5</span><h3 class="step-title">Prepare and File ITR-2 with Schedule CG</h3><p class="step-description">Log in to incometax.gov.in and select ITR-2 (or ITR-3 if business income). Fill Schedule CG with details of each capital asset sold - property, shares, MFs, gold, ESOPs. For listed equity LTCG, fill Schedule 112A with ISIN-wise details. Claim exemptions in relevant sections. Report capital losses for set-off and carry forward. Verify against Form 26AS/AIS.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Schedule CG + 112A</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>26AS Verification</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="20" y="8" width="80" height="55" rx="4" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><rect x="30" y="18" width="60" height="8" rx="2" fill="#FEF4EE" stroke="#E8712C" stroke-width="1"/><rect x="30" y="32" width="60" height="8" rx="2" fill="#FEF4EE" stroke="#E8712C" stroke-width="1"/><rect x="30" y="46" width="30" height="8" rx="2" fill="#E8712C"/></svg></div><span class="illustration-label">ITR-2 Prepared</span><span class="step-number-large">05</span></div></div></div>
<div class="step-card"><div class="step-content"><span class="step-badge">Step 6</span><h3 class="step-title">Verify and Submit by 31 July</h3><p class="step-description">Preview the return, validate all schedules, and pay any self-assessment tax due. Submit the return and e-verify within 30 days using Aadhaar OTP, net banking, or DSC. The ITR filing due date for non-audit cases is 31 July 2026. Late filing attracts Section 234F penalty (up to Rs 5,000) and loss of carry-forward benefit for capital losses.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>E-Verify Within 30 Days</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Loss Carry-Forward Preserved</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="20" y="15" width="80" height="55" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><circle cx="60" cy="42" r="18" fill="#FEF4EE" stroke="#10B981" stroke-width="2"/><path d="M52 42l5 5 11-11" stroke="#10B981" stroke-width="2.5" stroke-linecap="round"/></svg></div><span class="illustration-label">ITR Filed</span><span class="step-number-large">06</span></div></div></div>

        </div>
    </div>
</section>

<!-- SECTION 8: DOCUMENTS REQUIRED -->
<section class="content-section" id="documents-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Documents Required for Capital Gains ITR in Pune</h2>
            <div class="content-text">
                
                <p><strong>Sale Deed / Agreement to Sell:</strong> For property transactions in Pune; includes stamp duty value, sale consideration, and buyer details.</p>
<p><strong>Purchase Deed / Allotment Letter:</strong> Original cost of acquisition; builder agreement for under-construction property.</p>
<p><strong>Contract Notes / Trade Statements:</strong> From broker for listed equity share transactions; ISIN-wise for Schedule 112A.</p>
<p><strong>Mutual Fund Redemption Statements:</strong> From AMC or CAMS/KFintech with purchase NAV, sale NAV, and holding period.</p>
<p><strong>ESOP Exercise Letters:</strong> From employer showing grant date, exercise date, exercise price, FMV at exercise, and number of shares.</p>
<p><strong>Form 26AS / AIS:</strong> For verifying property TDS credit (194-IA), share transaction data, and mutual fund redemption reporting.</p>
<p><strong>Section 54EC Bond Subscription Proof:</strong> NHAI/REC bond allotment letter if claiming exemption.</p>
<div class="highlight-box" style="margin-top:16px;"><p><strong>Pune-Specific Tip:</strong> For property sold in Baner, Wakad, or Hinjewadi where the stamp duty value exceeds the actual sale consideration, Section 50C deems the stamp duty value as the sale consideration for capital gains computation. Verify the stamp duty value from the Pune Sub-Registrar's Annual Statement of Rates (ASR) before computing gains. If the difference is within 10%, the actual sale consideration is accepted.</p></div>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 9: CHALLENGES -->
<section class="content-section" id="challenges-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Common Capital Gains ITR Challenges in Pune</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Challenge</th><th>Impact</th><th>How Patron Accounting Solves It</th></tr></thead>
                    <tbody>
                        <tr><td>Property LTCG - Indexation vs No-Indexation Choice</td><td>For pre-23 July 2024 purchases, choosing between 12.5% flat or 20% with indexation requires modelling both options</td><td>Dual computation for every Pune property sale; optimal choice based on purchase year, CII values, and actual appreciation</td></tr>
<tr><td>ESOP/RSU Double Taxation Confusion</td><td>IT professionals conflate perquisite (salary) with capital gains components; double-counting leads to incorrect ITR-2</td><td>Correct bifurcation: FMV at exercise = salary (Form 16); gain above FMV at sale = capital gains (Schedule CG)</td></tr>
<tr><td>Schedule 112A Data Volume</td><td>Active traders may have hundreds of transactions needing ISIN-wise reporting - manual preparation is error-prone</td><td>Automated Schedule 112A preparation from consolidated broker/CAMS/KFintech statements</td></tr>
<tr><td>Capital Loss Carry Forward Deadline</td><td>Losses can only be carried forward if ITR filed by due date (31 July) - belated returns lose this benefit</td><td>Priority filing before deadline; proactive loss harvesting advisory for Pune equity investors</td></tr>
<tr><td>NRI Property Sale TDS Excess</td><td>Section 195 TDS at 20-30% often exceeds actual liability after exemptions; filing required for refund claim</td><td>NRI ITR-2 filing with Section 54/54EC exemptions, DTAA benefit, and TDS refund processing</td></tr>

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
            <h2 class="section-title">Capital Gains ITR Filing Fees in Pune</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Fee Component</th><th>Amount</th></tr></thead>
                    <tbody>
                        <tr><td>Patron Accounting Professional Fees (Capital Gains ITR)</td><td>Starting from INR 999/mo (Exl GST and Govt. Charges)</td></tr>
<tr><td>ITR-2 with Property Capital Gains</td><td>Rs 5,000 - Rs 15,000 (single property; exemption planning included)</td></tr>
<tr><td>ITR-2 with Equity/MF Capital Gains</td><td>Rs 3,000 - Rs 10,000 (Schedule 112A preparation included)</td></tr>
<tr><td>ITR-2 with ESOP/RSU Gains</td><td>Rs 5,000 - Rs 15,000 (perquisite + capital gains bifurcation)</td></tr>
<tr><td>ITR-2 Complex (Property + Equity + ESOP)</td><td>Rs 10,000 - Rs 25,000 (multi-asset capital gains)</td></tr>
<tr><td>NRI Capital Gains ITR</td><td>Rs 10,000 - Rs 30,000 (Section 195 TDS refund; DTAA benefit)</td></tr>
<tr><td>Section 54/54EC/54F Advisory</td><td>Rs 5,000 - Rs 15,000 (reinvestment planning + CGAS)</td></tr>
<tr><td>Assessment Representation</td><td>Rs 15,000 - Rs 50,000 (CIT Pune scrutiny proceedings)</td></tr>
<tr><td>Government Fee</td><td>Nil for on-time filing. Late: Section 234F (up to Rs 5,000)</td></tr>

                    </tbody>
                </table>
                </div>
                <p style="margin-top:16px;font-size:13px;color:var(--text-muted);font-style:italic;">All fees and charges listed are indicative only and do not constitute a binding offer. Final amounts may vary depending on the volume of work and the complexity involved.</p>
                <p style="margin-top:16px;">Professional service charges for drafting, filing, and representation are separate from the statutory fees. The exact fee depends on the complexity of the case, disputed amount, and number of hearings required. Contact us for a detailed quote.</p>
                <p style="margin-top:16px;"><strong>Get a free ITR for Capital Gains in Pune consultation - <a href="tel:+919459456700">Call +91 945 945 6700</a> or <a href="https://wa.me/919459456700?text=Hi%2C%20I%20need%20help%20with%20Capital%20Gains%20ITR%20Filing%20in%20Pune.%20Please%20share%20details." target="_blank">WhatsApp us</a>. No-obligation assessment.</strong></p>
            </div>
        </div>
    </div>
</section>

<!-- SECTION 11: TIMELINE -->
<section class="content-section" id="timeline-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Capital Gains ITR Filing Deadlines (FY 2025-26)</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Stage</th><th>Estimated Timeline</th></tr></thead>
                    <tbody>
                        <tr><td>Advance Tax - 1st Instalment</td><td>15 June 2026 (15% of estimated tax)</td></tr>
<tr><td>Advance Tax - 2nd Instalment</td><td>15 September 2026 (45% cumulative)</td></tr>
<tr><td>Advance Tax - 3rd Instalment</td><td>15 December 2026 (75% cumulative)</td></tr>
<tr><td>Advance Tax - 4th Instalment</td><td>15 March 2027 (100%)</td></tr>
<tr><td>ITR Filing (non-audit)</td><td>31 July 2026 (capital losses carry-forward requires on-time filing)</td></tr>
<tr><td>Section 54EC Bond Investment</td><td>6 months from date of transfer (max Rs 50 lakh)</td></tr>
<tr><td>Section 54/54F Reinvestment</td><td>2 years purchase / 3 years construction from date of transfer</td></tr>

                    </tbody>
                </table>
                </div>
                <div class="highlight-box" style="margin-top:16px;">
                    
                    <p><strong>Pune Processing Note:</strong> The Income Tax Office, Pune under CIT Pune-1/2/3 handles assessments and scrutiny of capital gains returns. Property sale TDS is verified against Sub-Registrar records. Section 50C stamp duty value verification is automated through Sub-Registrar data linking with Form 26AS. Patron represents Pune taxpayers in all assessment proceedings from its Wagholi office. File by 31 July 2026 to preserve capital loss carry-forward benefit.</p>

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
            <h2 class="section-title">Why Choose Patron for Capital Gains ITR in Pune</h2>
        </div>
        <div class="features-grid"><article class="feature-card"><div class="feature-icon-wrap"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:24px;height:24px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><h3>Pune Office at Wagholi</h3><p>Serving property sellers, IT professionals, equity investors, and NRIs across all Pune localities from RTC Silver, Wagholi.</p></article><article class="feature-card"><div class="feature-icon-wrap"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:24px;height:24px;"><path d="M14 2H6a2 2 0 00-2 2v16a2 2 0 002 2h12a2 2 0 002-2V8z"/><path d="M14 2v6h6M16 13H8M16 17H8"/></svg></div><h3>Property + Equity + ESOP Expertise</h3><p>Property LTCG with both indexation options, automated Schedule 112A from broker/AMC data, and correct ESOP perquisite/CG bifurcation - all from a single Pune service point.</p></article><article class="feature-card"><div class="feature-icon-wrap"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:24px;height:24px;"><circle cx="12" cy="12" r="10"/><path d="M12 6v6l4 2"/></svg></div><h3>Section 54/54EC/54F Planning</h3><p>Optimal reinvestment strategies, CGAS account management, and bond investment timelines to maximize exemptions for Pune property sellers.</p></article><article class="feature-card"><div class="feature-icon-wrap"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:24px;height:24px;"><path d="M17 21v-2a4 4 0 00-4-4H5a4 4 0 00-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M23 21v-2a4 4 0 00-3-3.87M16 3.13a4 4 0 010 7.75"/></svg></div><h3>NRI Specialization</h3><p>Dedicated NRI capital gains practice handling property sale TDS refund, DTAA benefit claims, and Section 197 lower deduction certificates for Pune properties.</p></article></div>
    </div>
</section>

<!-- SECTION 12A: SOCIAL PROOF -->
<section class="content-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Trusted by Pune Taxpayers</h2>
            <div class="content-text">
                
                <p><strong>10,000+ Businesses | 4.9 Google Rating | 50,000+ Docs Filed | 15+ Years</strong></p>
<p>Trusted by Hyundai, Asian Paints, Bridgestone, and 10,000+ businesses and individuals across India. With offices in Pune, Mumbai, Delhi, and Gurugram, Patron handles complex multi-asset capital gains ITRs combining property, equity, mutual funds, and ESOPs.</p>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 13: SELF-FILING vs PROFESSIONAL COMPARISON -->
<section class="content-section" id="comparison-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Patron vs Local Tax Consultants in Pune</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Factor</th><th>Patron Accounting</th><th>Typical Local Consultant</th></tr></thead>
                    <tbody>
                        <tr><td>Multi-Asset CG</td><td>Property + equity + MF + ESOP unified</td><td>One asset class only</td></tr>
<tr><td>Indexation Modelling</td><td>Both 12.5% and 20% computed for comparison</td><td>Only one method</td></tr>
<tr><td>Schedule 112A Automation</td><td>From broker/CAMS/KFintech data</td><td>Manual entry</td></tr>
<tr><td>ESOP/RSU Taxation</td><td>Perquisite + CG correctly split</td><td>Merged or incorrect</td></tr>
<tr><td>NRI Property CG</td><td>TDS refund + DTAA + Section 197</td><td>Not handled</td></tr>
<tr><td>Section 54/54EC/54F</td><td>Full reinvestment planning + CGAS</td><td>Basic awareness only</td></tr>

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
            <h2 class="section-title">Related Services for Pune Taxpayers</h2>
            <div class="content-text">
                
                <p>Pune taxpayers with capital gains often need complementary services:</p>
<ul style="list-style:disc;padding-left:20px;"><li style="margin-bottom:12px;padding:8px 0;"><a href="/accounting-services">Accounting Services</a> - Year-round bookkeeping including capital gains tracking</li></ul>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 15A: LEGAL FRAMEWORK -->
<section class="content-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Legal & Compliance Framework for Capital Gains ITR</h2>
            <div class="content-text">
                
                <p><strong>Sections 45-55, Income Tax Act 1961:</strong> Capital gains computation, cost of acquisition, holding period, indexed cost.</p>
<p><strong>Section 111A:</strong> STCG on listed equity shares (STT paid) - 20% flat rate.</p>
<p><strong>Section 112A:</strong> LTCG on listed equity/equity MFs (STT paid) - 12.5% on gains exceeding Rs 1.25 lakh.</p>
<p><strong>Section 112:</strong> LTCG on other assets - 12.5% without indexation (from 23 July 2024). Property pre-23 July 2024: choice of 12.5% or 20% with indexation.</p>
<p><strong>Section 50C:</strong> Stamp duty value deemed as sale consideration if actual is lower (10% tolerance).</p>
<p><strong>Section 54:</strong> Exemption by reinvesting LTCG from residential property into 1-2 new properties (purchase 1yr before/2yr after; construct 3yr).</p>
<p><strong>Section 54EC:</strong> Exemption by investing LTCG (max Rs 50 lakh) in NHAI/REC bonds within 6 months. 5-year lock-in.</p>
<p><strong>Section 54F:</strong> Exemption by reinvesting net sale consideration from non-residential asset into residential property.</p>
<p><strong>Section 234B/234C:</strong> Interest for non-payment/deferment of advance tax on capital gains.</p>
<p><strong>Section 234F:</strong> Late filing penalty - Rs 1,000 (income <= Rs 5 lakh) or Rs 5,000 (income > Rs 5 lakh).</p>
<p><strong>Portal:</strong> <a href="https://www.incometax.gov.in" target="_blank" rel="noopener">Income Tax - incometax.gov.in</a></p>
<p><strong>IT Authority Pune:</strong> CIT Pune-1, CIT Pune-2, CIT Pune-3. Aaykar Bhawan, Pune.</p>

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
                    <h2 class="faq-expanded__title">FAQs - ITR for Capital Gains in Pune</h2>
                    <p class="faq-expanded__lead">Common questions about capital gains ITR filing, LTCG/STCG rates, exemptions, property taxation, and ESOPs in Pune</p>
                    @include('partials.bigin-form', [
                        'variant'  => 'compact',
                        'service'  => 'ITR for Capital Gains in Pune',
                        'city'     => 'Pune',
                    ])
                </aside>
                <div class="faq-expanded__list">
                    <div class="faq-expanded__item" id="faq-1">
                        <h3 class="faq-expanded__q">Which ITR form do I use for capital gains in Pune?</h3>
                        <div class="faq-expanded__a"><p>Use ITR-2 if you have capital gains income and no business/profession income. Use ITR-3 if you also have business income. ITR-1 (Sahaj) cannot be used if you have any capital gains. Report gains in Schedule CG (property, gold, unlisted shares) and Schedule 112A (listed equity and equity MFs with ISIN-wise details).</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-2">
                        <h3 class="faq-expanded__q">How is property capital gains calculated in Pune?</h3>
                        <div class="faq-expanded__a"><p>LTCG = Sale Consideration (or Section 50C stamp duty value) minus Indexed Cost of Acquisition minus Indexed Improvement Cost minus Transfer Expenses. For property purchased before 23 July 2024, individuals/HUFs can choose between 12.5% without indexation or 20% with indexation (whichever results in lower tax). Post-23 July 2024 purchases use 12.5% flat.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-3">
                        <h3 class="faq-expanded__q">What exemptions can I claim on property capital gains?</h3>
                        <div class="faq-expanded__a"><p>Section 54 allows reinvestment of LTCG from house sale into 1-2 new residential properties. Section 54EC allows investment up to Rs 50 lakh in NHAI/REC bonds within 6 months. Section 54F covers reinvestment of net sale proceeds from non-residential assets into residential property. Deposit in CGAS if reinvestment is not completed by ITR due date.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-4">
                        <h3 class="faq-expanded__q">How are ESOP capital gains taxed for Pune IT professionals?</h3>
                        <div class="faq-expanded__a"><p>ESOPs are taxed in two stages. At exercise: FMV minus exercise price is perquisite taxed as salary under Section 17(2). At sale: sale price minus FMV at exercise is capital gains. Listed shares held over 12 months from exercise qualify for 12.5% LTCG with Rs 1.25 lakh exemption. Patron correctly bifurcates both components.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-5">
                        <h3 class="faq-expanded__q">Can I carry forward capital losses from Pune property or share sales?</h3>
                        <div class="faq-expanded__a"><p>Yes, but only if the ITR is filed by the due date (31 July 2026 for FY 2025-26). STCL can be set off against both STCG and LTCG. LTCL can only be set off against LTCG. Unabsorbed losses can be carried forward for 8 assessment years. Filing a belated return means losing the carry-forward benefit entirely.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-6">
                        <h3 class="faq-expanded__q">What is the ITR filing deadline for capital gains in Pune?</h3>
                        <div class="faq-expanded__a"><p>For FY 2025-26, the deadline for non-audit ITR filing is 31 July 2026. Audit cases have a 30 September 2026 deadline. Late filing attracts Section 234F penalty of up to Rs 5,000 and loss of capital loss carry-forward. Updated returns (ITR-U) can be filed until 31 March 2028 with additional 25% tax.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-7">
                        <h3 class="faq-expanded__q">Do NRIs selling property in Pune need to file ITR?</h3>
                        <div class="faq-expanded__a"><p>Yes. NRIs must file ITR-2 in India to report capital gains from Pune property sale, claim Section 54/54EC/54F exemptions, and obtain refund of excess TDS deducted by the buyer under Section 195. Without filing ITR, the TDS becomes the final tax - which is often higher than actual liability after exemptions.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-8">
                        <h3 class="faq-expanded__q">Can capital gains ITR be filed online from Pune?</h3>
                        <div class="faq-expanded__a"><p>Yes. ITR-2/ITR-3 is filed entirely online on incometax.gov.in. Upload pre-filled data, enter Schedule CG and 112A details, claim exemptions, pay self-assessment tax, and e-verify using Aadhaar OTP or net banking. CPC Bengaluru processes the return; CIT Pune handles any scrutiny or assessment.</p></div>
                    </div>
                </div>
            </div>


            <!-- Quick Answers -->
            <div class="highlight-box" style="margin-top:32px;">
                <p><strong>Quick Answers</strong></p>
                <p><strong>Which ITR for capital gains?</strong> ITR-2 for individuals/HUF. Schedule CG for property/gold. Schedule 112A for listed equity/MF LTCG. ITR-3 if business income also present.</p>
<p><strong>Pune mein property bechne par capital gains tax kaise file karein?</strong> ITR-2 mein Schedule CG bharein. LTCG = Sale value - Indexed cost. 12.5% ya 20% indexed mein se jo kam ho woh choose karein. Section 54/54EC mein exemption claim karein. Patron Pune office se sab file karta hai.</p>
<p><strong>What is LTCG tax rate 2025-26?</strong> 12.5% flat on all assets. Equity/MF: above Rs 1.25 lakh exempt. Property: choice of 12.5% or 20% indexed for pre-23 July 2024 purchases.</p>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 18: URGENCY CTA -->
<section class="content-section" style="background: var(--orange-lighter) !important; border-left: 4px solid var(--orange);">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">File Your Capital Gains ITR Before 31 July 2026</h2>
            <div class="content-text">
                
                <p>The <strong>ITR filing deadline for FY 2025-26 is 31 July 2026</strong> - capital loss carry-forward is lost if filed late. <strong>Advance tax</strong> on capital gains must be paid in quarterly instalments to avoid Section 234B/234C interest. <strong>Section 54EC bond investment</strong> must be made within 6 months of property sale. Capital Gains Account Scheme deposits must be made before the ITR due date.</p>
<p><strong>The Income Tax Office, Pune under CIT Pune-1/2/3 is actively scrutinizing high-value property transactions (especially in Baner, Wakad, Hinjewadi, and Kharadi) and ESOP gains by IT professionals. Section 50C stamp duty verification is automated through Sub-Registrar data linking.</strong></p>

            </div>
        </div>
    </div>
</section>

<!-- CONCLUSION + CTA BLOCK (Dark) -->
<section class="content-section" style="background: var(--blue) !important;">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title" style="color:#FFFFFF !important;">Get Expert Capital Gains ITR Filing in Pune</h2>
            <div class="content-text" style="text-align:left;">
                
                <p style="color:rgba(255,255,255,0.9);font-size:16px;line-height:1.8;">Filing an ITR for capital gains in Pune requires navigating a complex matrix of asset types, holding periods, tax rates, and exemption provisions - from property LTCG in Baner and Wakad with the indexation vs non-indexation choice, to equity and mutual fund gains reported ISIN-wise in Schedule 112A, to ESOP/RSU taxation for IT professionals in Hinjewadi and Kharadi.</p>
<p style="color:rgba(255,255,255,0.9);font-size:16px;line-height:1.8;">Patron Accounting, with its Pune office at RTC Silver, Wagholi, provides end-to-end capital gains ITR services - multi-asset computation, Schedule CG and 112A preparation, Section 54/54EC/54F exemption planning, advance tax advisory, NRI ITR filing, and assessment representation before CIT Pune.</p>
<p style="color:rgba(255,255,255,0.9);font-size:16px;line-height:1.8;">With 15+ years of experience, 10,000+ businesses served, and a 4.9 Google rating, Patron Accounting LLP is a trusted CA and CS firm for capital gains ITR filing across Pune, Mumbai, Delhi, and Gurugram.</p>

            </div>
            <div style="display:flex;gap:14px;flex-wrap:wrap;margin-top:24px;">
                <a href="tel:+919459456700" style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:var(--orange);color:#fff;border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#128222; Call +91 945 945 6700</a>
                <a href="https://wa.me/919459456700?text=Hi%2C%20I%20need%20help%20with%20Capital%20Gains%20ITR%20Filing%20in%20Pune.%20Please%20share%20details." target="_blank" style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:#25D366;color:#fff;border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#128172; WhatsApp Us</a>
                <a href="mailto:sales@patronaccounting.com?subject=Enquiry%20for%20Capital%20Gains%20ITR%20in%20Pune&body=Hello%20Patron%20Accounting%20Team%2C%0A%0AI%20need%20help%20with%20capital%20gains%20ITR%20filing%20in%20Pune.%0A%0AThank%20you." style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:transparent;color:#fff;border:2px solid rgba(255,255,255,0.3);border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#9993;&#65039; Email Us</a>
            </div>
            <p style="color:rgba(255,255,255,0.7);font-size:13px;margin-top:16px;">Book a Free Consultation - No Obligation.</p>
        </div>
    </div>
</section>

<!-- GSTAT STATE BENCH CITY PAGES (32 Pages) -->
<section class="content-section" style="padding:48px 32px;background:var(--gray-50);">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title" style="text-align:center;margin-bottom:12px;">Capital Gains ITR Services Across India</h2>
            <p style="text-align:center;color:var(--text-muted);font-size:15px;margin-bottom:40px;">Patron Accounting provides capital gains ITR filing services in 4 major cities.</p>
         
            <div class="pa-city-block" style="margin-bottom:40px;"><div class="pa-city-grid">
        <div class="pa-city-card" style="opacity:0.6; pointer-events:none; border:2px solid var(--orange); position:relative;"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Pune</div><div class="pa-card-sub">Maharashtra</div></div><span style="position:absolute; top:6px; right:8px; font-size:10px; color:var(--orange); font-weight:700; text-transform:uppercase; letter-spacing:0.5px;">You're here</span></div>
        <div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Mumbai</div><div class="pa-card-sub">Maharashtra</div></div>
        <div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Delhi</div><div class="pa-card-sub">Delhi NCR</div></div>
        <div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Gurugram</div><div class="pa-card-sub">Haryana</div></div>
    </div></div>
<div class="pa-city-block"><div class="pa-block-title">Related Services</div><div class="pa-block-sub">End-to-end tax and compliance for Pune taxpayers</div><div class="pa-cross-grid">
        <a href="/gst-registration/pune" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">GST Registration</div><div class="pa-card-sub">Pune</div></div></a>
        <a href="/private-limited-company-registration/pune" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Pvt Ltd Company Registration</div><div class="pa-card-sub">Pune</div></div></a>
        <a href="/startup-registration/pune" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Startup Registration</div><div class="pa-card-sub">Pune</div></div></a>
        <a href="/trademark-registration/pune" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Trademark Registration</div><div class="pa-card-sub">Pune</div></div></a>
        <a href="/llp-incorporation/pune" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">LLP Registration</div><div class="pa-card-sub">Pune</div></div></a>
    </div></div>
        </div>
    </div>
</section>

<!-- CONTENT FRESHNESS FOOTER -->
<section class="content-section" style="padding:32px;">
    <div class="content-container">
        <div class="text-content" style="font-size:13px;color:var(--text-muted);">
            <p><strong>Content Created:</strong> 23 March 2026 &nbsp;|&nbsp; <strong>Last Updated:</strong> <span id="lastUpdatedFooter">23 March 2026</span> &nbsp;|&nbsp; <strong>Next Review:</strong> September 2026 &nbsp;|&nbsp; <strong>Reviewed By:</strong> CA &amp; CS Team, Patron Accounting LLP</p>
            <p>This page on ITR for Capital Gains in Pune is reviewed semi-annually. Content covers Budget 2024 LTCG rate changes (12.5% from 23 July 2024), Section 111A/112A/112, indexation removal, Section 54/54EC/54F exemptions, ESOP/RSU taxation, Schedule CG and 112A reporting, and CIT Pune jurisdiction. Freshness Tier 1.</p>
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
