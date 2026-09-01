
@extends('layouts.service-app')

<!-- External Dependencies (loaded by master layout in production) -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Barlow:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,400&family=DM+Sans:opsz,wght@9..40,400;9..40,500;9..40,600;9..40,700&display=swap" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

@section('meta')
    <title>ITR for Property Sale Delhi NCR – Sec 54 &amp; TDS 194IA</title>
    <meta name="description" content="ITR for property sale in Delhi. LTCG 12.5% or 20% with indexation. S.54/54EC exemptions. TDS 1% S.194IA. Circle rate. CGAS. Call +91 945 945 6700.">
    <link rel="canonical" href="/itr-for-property-sale/delhi">
    <meta name="robots" content="index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1">
    <meta property="og:title" content="ITR for Property Sale Delhi NCR – Sec 54 &amp; TDS 194IA">
    <meta property="og:description" content="ITR for property sale in Delhi. LTCG 12.5% or 20% with indexation. S.54/54EC exemptions. TDS 1% S.194IA. Circle rate. CGAS. Call +91 945 945 6700.">
    <meta property="og:url" content="/itr-for-property-sale/delhi">
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="Patron Accounting">
    <meta property="og:image" content="https://www.patronaccounting.com/images/og-default-square.png">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="1200">
    <meta property="og:image:type" content="image/png">
    <meta property="og:image:secure_url" content="https://www.patronaccounting.com/images/og-default-square.png">
    <meta property="og:image:alt" content="Patron Accounting - partner you can rely on">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="ITR for Property Sale Delhi NCR – Sec 54 &amp; TDS 194IA">
    <meta name="twitter:description" content="ITR for property sale in Delhi. LTCG 12.5% or 20% with indexation. S.54/54EC exemptions. TDS 1% S.194IA. Circle rate. CGAS. Call +91 945 945 6700.">
    <meta name="twitter:image" content="https://www.patronaccounting.com/images/og-default-square.png">
@endsection

@section('schema')
    <script type="application/ld+json">{
  "@context": "https://schema.org",
  "@graph": [
    {
      "@type": "Service",
      "name": "ITR for Property Sale in Delhi",
      "description": "ITR for property sale in Delhi. LTCG 12.5% or 20% with indexation. S.54/54EC exemptions. TDS 1% S.194IA. Circle rate. CGAS. Call +91 945 945 6700.",
      "url": "https://www.patronaccounting.com/itr-for-property-sale/delhi",
      "serviceType": "ITR for Property Sale in Delhi",
      "areaServed": {
        "@type": "City",
        "name": "Delhi"
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
        "url": "https://www.patronaccounting.com/itr-for-property-sale/delhi",
        "price": "1999"
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
          "name": "ITR for Property Sale",
          "item": "https://www.patronaccounting.com/itr-for-property-sale"
        },
        {
          "@type": "ListItem",
          "position": 3,
          "name": "ITR for Property Sale in Delhi",
          "item": "https://www.patronaccounting.com/itr-for-property-sale/delhi"
        }
      ]
    },
    {
      "@type": "FAQPage",
      "mainEntity": [
        {
          "@type": "Question",
          "name": "How is LTCG on Delhi property taxed?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Pre-23 July 2024 purchase: lower of 12.5% without indexation or 20% with CII indexation. Post-23 July 2024: 12.5% only. STCG at slab rates."
          }
        },
        {
          "@type": "Question",
          "name": "What is TDS on property sale?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Buyer deducts 1% under S.194IA on consideration over Rs 50 lakh. Form 26QB within 30 days. Credit in seller 26AS. For NRI 12.5% or slab."
          }
        },
        {
          "@type": "Question",
          "name": "How to save tax on property sale?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "S.54 reinvest in house Rs 10 crore cap. S.54EC bonds Rs 50 lakh within 6 months. S.54F net consideration in house. CGAS if pending."
          }
        },
        {
          "@type": "Question",
          "name": "What is Section 50C?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "If sale price below circle rate then circle rate is deemed consideration. 10% tolerance. Delhi circle rates vary by locality floor and type."
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
            padding: 20px 0; position: sticky; top: 0; z-index: 50;
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
                        ITR for Property Sale in Delhi: Capital Gains, Exemptions, and TDS Compliance
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
                            <p class="mb-0 text-dark benefit-paragraph"><span>LTCG Rate:</span> 12.5% without indexation OR 20% with indexation (property bought before 23 Jul 2024)</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>STCG Rate:</span> Slab rates (property held ≤ 24 months)</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>TDS:</span> 1% by buyer under S.194IA on sale consideration > Rs 50 lakh | Form 26QB</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Exemptions:</span> S.54 (reinvest in house) | S.54EC (bonds Rs 50 lakh) | S.54F (net consideration)</p>
                        </div>
                    </div>

                    <p class="mb-4 fw-bold" style="color: var(--blue); font-size: 15px;">10,000+ Businesses Served | 4.9 Google Rating | 15+ Years of Practice</p>

                    <div class="hero-cta">
                        <a href="tel:+919459456700" class="btn-video text-decoration-none">
                            <span class="play-circle"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="width:14px;height:14px;color:#fff"><path d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/></svg></span>
                            Call +91 945 945 6700
                        </a>
                        <a href="mailto:sales@patronaccounting.com?subject=Property%20Sale%20ITR%20-%20Delhi&body=Hello%20Patron%2C%0A%0AI%20sold%20property%20in%20Delhi%20and%20need%20ITR%20filing.%0A%0AThank%20you." class="btn-sample text-decoration-none">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="width:18px;height:18px;"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,12 2,6"/></svg>
                            Email Us
                        </a>
                        <a href="https://wa.me/919459456700?text=Hi%2C%20I%20sold%20property%20in%20Delhi%20and%20need%20ITR%20filing.%20Please%20call%20me." target="_blank" class="btn-sample text-decoration-none">
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
                                            'service'  => 'ITR for Property Sale in Delhi',
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
@include('partials.testimonials', [
    'heading'    => 'Real Stories from Real People',
    'lead'       => 'Hear how teams across industries use Patron to save time, cut costs, & stay in control.',
    'ctaTitle'   => 'Join 10,000+ Satisfied Businesses',
    'ctaText'    => 'Indexation optimised. Exemptions tracked. Circle rates verified. TDS reconciled.',
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
            <a href="#overview-section" class="toc-btn active">Overview</a><a href="#what-section" class="toc-btn">Tax Rules</a><a href="#who-section" class="toc-btn">Who Must File</a><a href="#services-section" class="toc-btn">Services</a><a href="#procedure-section" class="toc-btn">Process</a><a href="#documents-section" class="toc-btn">Exemptions</a><a href="#challenges-section" class="toc-btn">Challenges</a><a href="#fees-section" class="toc-btn">Fees</a><a href="#timeline-section" class="toc-btn">TDS (194IA)</a><a href="#benefits-section" class="toc-btn">Why Patron</a><a href="#comparison-section" class="toc-btn">Comparison</a><a href="#faq-section" class="toc-btn">FAQs</a>
        </div>
        <button class="toc-arrow right" id="tocRight">&#10095;</button>
    </div>
</div>

<!-- SECTION 2: OVERVIEW / INTRO + TL;DR -->
<section class="content-section" id="overview-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">ITR for Property Sale in Delhi: Complete Filing Guide</h2>
            <div class="content-text">
                <div class="highlight-box" style="margin-bottom:20px;">
                    <p><strong>&#128204; TL;DR - ITR for Property Sale in Delhi Services at a Glance</strong></p>
                    <p>Every Delhi property seller must report capital gains in ITR. Property >24 months = LTCG. Pre-23 July 2024 purchase: choose lower of 12.5% without indexation or 20% with CII (363). Post-23 July 2024: 12.5% only. STCG at slab rates. Buyer deducts 1% TDS (S.194IA) on >Rs 50 lakh. Exemptions: S.54 (house Rs 10 crore cap), S.54EC (bonds Rs 50 lakh), S.54F (net consideration). CGAS if reinvestment pending. Patron files from Delhi.</p>
                </div>
                <p>Delhi's property market is among India's highest-value. South Delhi (GK, Defence Colony, Vasant Vihar), Dwarka, Rohini, commercial CP - virtually all sales exceed Rs 50 lakh triggering 194IA TDS. Circle rates under S.50C must be verified. Learn more about <a href="/itr-for-property-sale">ITR for Property Sale across India</a>.</p>
                <p>Patron Accounting's Delhi office provides end-to-end property sale ITR: indexation choice, S.54/54EC/54F claims, TDS reconciliation, circle rate compliance, CGAS advisory. Integrated with income tax filing and <a href="/itr-for-capital-gains">capital gains</a> for complete compliance.</p>
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
                <h2 class="section-title">Capital Gains on Property Sale: Classification and Computation</h2>
                <div class="content-text what-is-definition">
                    
                    <p>Property profit is STCG (≤24 months) or LTCG (>24 months). Computation: Sale Consideration (or S.50C circle rate if higher) minus Cost of Acquisition minus Cost of Improvement minus Transfer Expenses = Capital Gain. For LTCG with indexation: Indexed Cost = Cost × (363 / CII of purchase year).</p><p>Finance Act 2024 created dual-rate for LTCG: pre-23 July 2024 purchases allow choosing lower of 20% with CII indexation or 12.5% without. Post-23 July 2024: 12.5% only. For long-held Delhi properties (10-20+ years), 20% with indexation often produces lower tax.</p><p>S.50C: if sale price < circle rate, circle rate is deemed consideration. Delhi circle rates vary by locality, floor, property type. Selling below circle rate increases capital gains even on genuine transactions. Patron verifies for every Delhi property.</p>

                </div>
                <div class="highlight-box" style="margin-top:20px;">
                    <p><strong>Key Terms for ITR for Property Sale in Delhi:</strong></p>
                    <p><strong>Indexation Choice:</strong> Pre-23 Jul 2024 purchase: lower of 20% with CII (363) or 12.5% without. Patron computes both.</p><p><strong>S.50C:</strong> Circle rate = deemed consideration if sale price lower. 10% tolerance. Delhi rates vary by locality.</p><p><strong>S.54:</strong> Reinvest LTCG in residential house. Purchase 2 years / construction 3 years. Cap Rs 10 crore. Lock-in 3 years.</p><p><strong>CGAS:</strong> Deposit LTCG at bank before ITR due date if reinvestment pending. Must utilise within prescribed period.</p>

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
                            <text x="100" y="170" font-size="10" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial, sans-serif">ITR for Property Sale in Delhi</text>
                        </svg>
                    </div>
                    <div class="illustration-badge">
                        <span>Finance Act 2024</span>
                        <strong>Property LTCG</strong>
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
            <h2 class="section-title">Who Must File Property Sale ITR in Delhi</h2>
            <div class="content-text">
                
                <ul><li><strong>Delhi residents who sold any property in FY 2025-26</strong> - flat, house, commercial, land. Mandatory reporting.</li><li><strong>Sellers with TDS deducted</strong> - 1% TDS (194IA) in 26AS. Must file to claim credit or refund.</li><li><strong>Joint property owners</strong> - Each co-owner reports proportionate share. Separate 26QB for each.</li><li><strong>S.54/54EC/54F claimants</strong> - Must file within due date. CGAS deposit before ITR if reinvestment pending.</li><li><strong>NRIs selling Delhi property</strong> - TDS 12.5% (LTCG) or slab (STCG). File for refund. Form 15CA/15CB for repatriation.</li><li><strong>Ancestral/inherited property sellers</strong> - Cost = previous owner's cost. FMV as on 1 Apr 2001 if pre-2001. Holding includes previous owner.</li></ul>

            </div>
            </div>
        </div>
    </div>
</section>

<!-- SECTION 5: OUR SERVICES -->
<section class="content-section" id="services-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Property Sale ITR Services: What Patron Handles</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Service</th><th>What We Do</th></tr></thead>
                    <tbody>
                        <tr><td>Indexation Choice Analysis</td><td>Both 20% with CII and 12.5% without computed. Lower tax selected and documented. Saves lakhs for long-held Delhi properties.</td></tr><tr><td>LTCG/STCG Computation</td><td>Sale consideration (or S.50C value) minus cost (indexed if applicable) minus improvement minus expenses. From sale deed and purchase documents.</td></tr><tr><td>S.54 Exemption (Reinvest in House)</td><td>Purchase within 2 years / construction 3 years. Cap Rs 10 crore. Timelines tracked. Documentation maintained.</td></tr><tr><td>S.54EC Exemption (Bonds)</td><td>Up to Rs 50 lakh in NHAI/REC/PFC bonds within 6 months. 5-year lock-in. Bond application coordinated.</td></tr><tr><td>CGAS Deposit Advisory</td><td>If reinvestment pending: deposit LTCG at designated bank BEFORE ITR filing. Patron advises timing and documentation.</td></tr><tr><td>TDS Credit (S.194IA)</td><td>1% TDS from 26AS reconciled. Excess TDS = refund claimed. Joint property TDS split verified.</td></tr><tr><td>Circle Rate / S.50C</td><td>Delhi circle rate verified per locality, floor, property type. S.50C implications computed and disclosed if applicable.</td></tr>

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
            <h2 class="section-title">Property Sale ITR Process: 6 Steps for Delhi Sellers</h2>
            <p class="section-subtitle" style="text-align:left;max-width:100%;">ITR-2 by 31 July 2026. ITR-3 by 31 August. Indexation choice saves lakhs. CGAS deposit before filing. Patron handles from Rohini office.</p>
        </header>
        <div class="steps-container">
            <div class="step-card"><div class="step-content"><span class="step-badge">Step 1</span><h3 class="step-title">Gather Property Documents</h3><p class="step-description">Sale deed (registered), purchase deed/allotment letter, improvement receipts, brokerage bills, TDS Form 16B, stamp duty receipt, circle rate for Delhi locality. Patron collects and organises.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>All documents</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Circle rate verified</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="15" y="5" width="90" height="70" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><line x1="30" y1="25" x2="90" y2="25" stroke="#F5A623" stroke-width="3" stroke-linecap="round"/></svg></div><span class="illustration-label">Collected</span><span class="step-number-large">01</span></div></div></div><div class="step-card"><div class="step-content"><span class="step-badge">Step 2</span><h3 class="step-title">Determine Holding and Classification</h3><p class="step-description">>24 months = LTCG. ≤24 months = STCG. Inherited: includes previous owner's period. Under-construction: from allotment date. Patron classifies for every Delhi property.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>LTCG/STCG</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Inherited covered</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="25" y="15" width="70" height="50" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><text x="60" y="35" font-size="8" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">>24 months</text><text x="60" y="50" font-size="7" fill="#F5A623" font-weight="700" text-anchor="middle" font-family="Arial">LTCG</text></svg></div><span class="illustration-label">Classified</span><span class="step-number-large">02</span></div></div></div><div class="step-card"><div class="step-content"><span class="step-badge">Step 3</span><h3 class="step-title">Compute Capital Gains (Both Methods)</h3><p class="step-description">Pre-23 Jul 2024: (a) 20% with CII indexation and (b) 12.5% without. Choose lower tax. Post-23 Jul 2024: 12.5% only. STCG: sale minus cost at slab rate. Patron computes both for every Delhi property.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Both computed</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Lower chosen</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="25" y="15" width="70" height="50" rx="6" fill="#FFF3E0" stroke="#F5A623" stroke-width="1.5"/><text x="60" y="35" font-size="8" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">20% vs 12.5%</text><text x="60" y="50" font-size="7" fill="#10B981" font-weight="700" text-anchor="middle" font-family="Arial">Lower Tax</text></svg></div><span class="illustration-label">Optimised</span><span class="step-number-large">03</span></div></div></div><div class="step-card"><div class="step-content"><span class="step-badge">Step 4</span><h3 class="step-title">Apply Exemptions (S.54/54EC/54F)</h3><p class="step-description">Reinvesting: document new property or bond application. Not yet reinvested: deposit in CGAS BEFORE ITR filing. Track: S.54 purchase 2 years / construction 3 years. S.54EC bonds 6 months. Patron tracks everything.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Timelines tracked</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>CGAS advised</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><circle cx="60" cy="40" r="22" fill="#E8F5E9" stroke="#10B981" stroke-width="1.5"/><text x="60" y="44" font-size="8" fill="#10B981" font-weight="700" text-anchor="middle" font-family="Arial">S.54</text></svg></div><span class="illustration-label">Exempted</span><span class="step-number-large">04</span></div></div></div><div class="step-card"><div class="step-content"><span class="step-badge">Step 5</span><h3 class="step-title">File ITR-2 or ITR-3</h3><p class="step-description">Schedule CG: property details, sale date, consideration, cost (original + indexed), improvement, expenses, exemptions, net gain. Reconcile 194IA TDS from 26AS. Self-assessment tax. File by 31 July / 31 August.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Before deadline</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>TDS credited</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="20" y="10" width="80" height="55" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><path d="M60 25L60 45" stroke="#14365F" stroke-width="2" stroke-linecap="round"/><path d="M50 35l10-10 10 10" stroke="#14365F" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/><rect x="40" y="55" width="40" height="10" rx="3" fill="#E8F5E9" stroke="#10B981" stroke-width="1"/></svg></div><span class="illustration-label">Filed</span><span class="step-number-large">05</span></div></div></div><div class="step-card"><div class="step-content"><span class="step-badge">Step 6</span><h3 class="step-title">E-Verify and Monitor</h3><p class="step-description">Verify within 30 days. Monitor S.143(1) processing. Respond to S.50C circle rate notices. Track refund if excess TDS. Patron monitors all Delhi property sale ITRs.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>E-verified</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Refund tracked</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><circle cx="60" cy="40" r="28" fill="#E8F5E9" stroke="#10B981" stroke-width="2"/><path d="M48 40l8 8 16-16" stroke="#10B981" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/></svg></div><span class="illustration-label">Complete</span><span class="step-number-large">06</span></div></div></div>

        </div>
    </div>
</section>

<!-- SECTION 8: DOCUMENTS REQUIRED -->
<section class="content-section" id="documents-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Exemptions for Delhi Property Sellers</h2>
            <div class="content-text">
                
                <ul><li><strong>S.54 (Reinvest in House):</strong> LTCG from residential property reinvested in another house. Purchase 1 yr before / 2 yrs after. Construction 3 yrs. Cap Rs 10 crore. 3-year lock-in.</li><li><strong>S.54EC (Bonds):</strong> Any LTCG invested in NHAI/REC/PFC bonds. Up to Rs 50 lakh within 6 months. 5-year lock-in.</li><li><strong>S.54F (Net Consideration):</strong> Non-residential LTCG reinvested in house from net sale consideration. Proportionate if partial.</li><li><strong>CGAS:</strong> If reinvestment not complete by ITR due date: deposit at designated bank BEFORE filing. Utilise within prescribed period or it becomes taxable.</li></ul>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 9: CHALLENGES -->
<section class="content-section" id="challenges-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Common Challenges for Delhi Property Sellers</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Challenge</th><th>Impact</th><th>How Patron Accounting Solves It</th></tr></thead>
                    <tbody>
                        <tr><td>Not Comparing Indexation</td><td>Defaulting to 12.5% when 20% with CII is lower for 10+ year properties. Costs lakhs.</td><td>Patron computes both automatically. Lower tax chosen and documented.</td></tr><tr><td>Circle Rate / S.50C</td><td>Sale below circle rate = deemed consideration at circle rate. 10% tolerance. Delhi rates vary by locality.</td><td>Patron verifies Delhi circle rate for every locality before filing</td></tr><tr><td>Missing CGAS Deadline</td><td>S.54 claimed but reinvestment not complete + CGAS not deposited before ITR = exemption lost</td><td>Patron tracks CGAS deposit timeline. Deposit before filing ensured.</td></tr><tr><td>Joint Property TDS Split</td><td>Buyer files single 26QB instead of per co-owner. TDS mismatch in seller 26AS</td><td>Patron reconciles joint-property TDS. Each co-owner filed correctly.</td></tr><tr><td>Ancestral Property Cost</td><td>Pre-2001 inherited property: FMV as on 1 Apr 2001 (capped at stamp duty). Documentation incomplete.</td><td>Patron assists valuation and documentation for ancestral Delhi properties</td></tr>

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
            <h2 class="section-title">Property Sale ITR Filing Fees in Delhi</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Fee Component</th><th>Amount</th></tr></thead>
                    <tbody>
                        <tr><td>Property Sale ITR (Single Property)</td><td>From INR 2,999</td></tr><tr><td>With Indexation Analysis</td><td>From INR 3,999</td></tr><tr><td>With S.54/54EC Exemption</td><td>From INR 4,999</td></tr><tr><td>Joint Property (Per Co-Owner)</td><td>From INR 3,999</td></tr><tr><td>NRI Property Sale</td><td>From INR 6,999</td></tr><tr><td>Ancestral Property (Cost Basis)</td><td>From INR 4,999</td></tr><tr><td>Patron Accounting Professional Fees</td><td>Starting from INR 1,999 (Exl GST and Govt. Charges)</td></tr>

                    </tbody>
                </table>
                </div>
                <p style="margin-top:16px;font-size:13px;color:var(--text-muted);font-style:italic;">All fees and charges listed are indicative only and do not constitute a binding offer. Final amounts may vary depending on the volume of work and the complexity involved.</p>
                <p style="margin-top:16px;">Professional service charges for drafting, filing, and representation are separate from the statutory fees. The exact fee depends on the complexity of the case, disputed amount, and number of hearings required. Contact us for a detailed quote.</p>
                <p style="margin-top:16px;"><strong>Get a free ITR for Property Sale in Delhi consultation - <a href="tel:+919459456700">Call +91 945 945 6700</a> or <a href="https://wa.me/919459456700?text=Hi%2C%20I%20sold%20property%20in%20Delhi%20and%20need%20ITR%20filing.%20Please%20call%20me." target="_blank">WhatsApp us</a>. No-obligation assessment.</strong></p>
            </div>
        </div>
    </div>
</section>

<!-- SECTION 11: TIMELINE -->
<section class="content-section" id="timeline-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">TDS on Delhi Property Sale (S.194IA)</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Stage</th><th>Estimated Timeline</th></tr></thead>
                    <tbody>
                        <tr><td>Rate</td><td>1% of sale consideration (or stamp duty value, whichever higher)</td></tr><tr><td>Threshold</td><td>Applies if sale consideration > Rs 50 lakh</td></tr><tr><td>Deducted By</td><td>Buyer of the property</td></tr><tr><td>Form</td><td>26QB (online challan cum statement) within 30 days</td></tr><tr><td>Joint Property</td><td>Separate 26QB for each co-owner (proportionate)</td></tr><tr><td>NRI Seller</td><td>S.195: TDS at 12.5% (LTCG) or slab (STCG)</td></tr><tr><td>Seller Credit</td><td>Appears in Form 26AS. Adjustable against tax in ITR.</td></tr>

                    </tbody>
                </table>
                </div>
                <div class="highlight-box" style="margin-top:16px;">
                    
                    <p><strong>Critical:</strong> The indexation choice for pre-23 July 2024 properties can save Rs 50,000-5,00,000+. CGAS deposit must be made BEFORE ITR filing if reinvestment pending. Missing either costs Delhi sellers significantly.</p>

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
            <h2 class="section-title">Why Choose Patron for Property Sale ITR in Delhi</h2>
        </div>
        <div class="features-grid"><article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2"><path d="M12 1v22M5 8h14M5 16h14"/></svg></div><h3>Indexation Optimisation</h3><p>Both 20% with CII and 12.5% flat computed for every Delhi property. Lower tax documented. Saves lakhs for long-held properties.</p></article><article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><h3>S.54/54EC Timeline Tracking</h3><p>Purchase windows, construction deadlines, bond deadlines tracked. CGAS deposit flagged before ITR due date. No exemption lost.</p></article><article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><h3>Delhi Circle Rate Expertise</h3><p>Circle rates verified for every Delhi locality. S.50C implications assessed. No surprise notices post-filing.</p></article><article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2"><path d="M14 2H6a2 2 0 00-2 2v16a2 2 0 002 2h12a2 2 0 002-2V8z"/><path d="M14 2v6h6"/></svg></div><h3>TDS Credit Management</h3><p>194IA 1% TDS reconciled from 26AS. NRI: 12.5% TDS reconciled. Refund claimed if excess. Joint property splits verified.</p></article></div>
    </div>
</section>

<!-- SECTION 12A: SOCIAL PROOF -->
<section class="content-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Trusted by 10,000+ Businesses Across India</h2>
            <div class="content-text">
                
                <p><strong>10,000+ Businesses Served | 4.9 Google Rating | 50,000+ Documents Filed | 15+ Years</strong></p><p>"Sold family property in Defence Colony held since 1990. Patron computed both options - 20% with CII saved Rs 4.2 lakh. S.54 claimed for Dwarka flat. Total saving: Rs 18 lakh." - Property Seller, Delhi</p><p><strong>4-Office Signal:</strong> Pune, Mumbai, Delhi, and Gurugram.</p>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 13: SELF-FILING vs PROFESSIONAL COMPARISON -->
<section class="content-section" id="comparison-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Patron vs Self-Filing: Property Sale ITR Comparison</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Factor</th><th>Patron Accounting</th><th>Self-Filing</th></tr></thead>
                    <tbody>
                        <tr><td>Indexation Choice</td><td>Both computed, lower chosen</td><td>Often defaults to 12.5%</td></tr><tr><td>S.54/54EC Claims</td><td>Timelines tracked, CGAS advised</td><td>Deadlines missed, exemption lost</td></tr><tr><td>Circle Rate (S.50C)</td><td>Verified per Delhi locality</td><td>Not checked, notices follow</td></tr><tr><td>TDS Credit</td><td>26AS reconciled, refund claimed</td><td>Credit missed or mismatched</td></tr><tr><td>Joint Property</td><td>Each co-owner filed correctly</td><td>Proportions wrong</td></tr><tr><td>Pricing</td><td>From INR 1,999</td><td>Portal errors + missed savings</td></tr>

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
            <h2 class="section-title">Related Property Tax Services</h2>
            <div class="content-text">
                
                <ul><li><a href="/itr-for-property-sale">ITR for Property Sale (India)</a> - National-level property sale ITR.</li><li><a href="/itr-for-capital-gains">ITR for Capital Gains</a> - Equity, property, gold, crypto.</li><li><a href="/accounting-services">Accounting Services</a> - Financial management.</li><li><a href="/tds-return-filing-24q">TDS Return Filing</a> - 194IA TDS compliance.</li></ul>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 15A: LEGAL FRAMEWORK -->
<section class="content-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Legal Framework: Property Sale Taxation</h2>
            <div class="content-text">
                
                <p><strong>Holding:</strong> >24 months = LTCG. ≤24 months = STCG.</p><p><strong>LTCG (Pre-23 Jul 2024):</strong> Lower of 12.5% without indexation or 20% with CII. CII 363.</p><p><strong>S.50C:</strong> Circle rate = deemed consideration if sale price lower. 10% tolerance.</p><p><strong>S.194IA:</strong> 1% TDS by buyer on >Rs 50 lakh. Form 26QB 30 days.</p><p><strong>S.54:</strong> Reinvest in house Rs 10 crore. S.54EC: bonds Rs 50 lakh 6 months. S.54F: net consideration.</p><p><strong>CGAS:</strong> Deposit before ITR if reinvestment pending.</p><p><strong>Source:</strong> <a href="https://incometax.gov.in" target="_blank" rel="noopener">incometax.gov.in</a>, <a href="https://revenue.delhi.gov.in" target="_blank" rel="noopener">revenue.delhi.gov.in</a></p>

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
                    <h2 class="faq-expanded__title">FAQs: ITR for Property Sale in Delhi</h2>
                    <p class="faq-expanded__lead">Common questions about property capital gains, indexation, exemptions, TDS, and circle rates for Delhi sellers.</p>
                    @include('partials.bigin-form', [
                        'variant'  => 'compact',
                        'service'  => 'ITR for Property Sale in Delhi',
                        'city'     => 'Delhi',
                    ])
                </aside>
                <div class="faq-expanded__list">
                    <div class="faq-expanded__item" id="faq-1">
                        <h3 class="faq-expanded__q">How is LTCG on Delhi property taxed?</h3>
                        <div class="faq-expanded__a"><p>Pre-23 Jul 2024 purchase: lower of 12.5% without indexation or 20% with CII (363). Post-23 Jul 2024: 12.5% only. STCG (≤24 months): slab rates. Patron computes both options.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-2">
                        <h3 class="faq-expanded__q">What is TDS on property sale?</h3>
                        <div class="faq-expanded__a"><p>Buyer deducts 1% (S.194IA) on >Rs 50 lakh. Form 26QB within 30 days. Credit in seller's 26AS. Joint: separate 26QB per co-owner. NRI: 12.5% or slab under S.195.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-3">
                        <h3 class="faq-expanded__q">How to save tax on property sale?</h3>
                        <div class="faq-expanded__a"><p>S.54: reinvest in house (Rs 10 crore, 2 yr purchase / 3 yr construction). S.54EC: bonds Rs 50 lakh within 6 months. S.54F: net consideration in house. CGAS if pending.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-4">
                        <h3 class="faq-expanded__q">What is Section 50C?</h3>
                        <div class="faq-expanded__a"><p>If sale price < circle rate, circle rate = deemed consideration. 10% tolerance. Delhi rates vary by locality, floor, type. Patron verifies for every Delhi property.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-5">
                        <h3 class="faq-expanded__q">What about ancestral Delhi property?</h3>
                        <div class="faq-expanded__a"><p>Cost = previous owner's cost. Holding includes previous owner. Pre-2001: FMV as on 1 Apr 2001 (capped at stamp duty). Old Delhi properties need careful cost basis work.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-6">
                        <h3 class="faq-expanded__q">What is CGAS?</h3>
                        <div class="faq-expanded__a"><p>Capital Gains Account Scheme. Deposit LTCG at designated bank BEFORE filing ITR if reinvestment pending. Must utilise within 2 yr purchase / 3 yr construction. Unused = taxable.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-7">
                        <h3 class="faq-expanded__q">Must I file even if exemption covers all gain?</h3>
                        <div class="faq-expanded__a"><p>Yes. Exemption claimed in Schedule CG. Not filing = exemption not claimed. Plus 194IA TDS credit must be claimed through ITR.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-8">
                        <h3 class="faq-expanded__q">How much does property sale ITR cost?</h3>
                        <div class="faq-expanded__a"><p>Patron: single property from Rs 2,999. With indexation from Rs 3,999. With exemption from Rs 4,999. NRI from Rs 6,999. Includes TDS, circle rate, CGAS. Call +91 945 945 6700.</p></div>
                    </div>
                </div>
            </div>


            <!-- Quick Answers -->
            <div class="highlight-box" style="margin-top:32px;">
                <p><strong>Quick Answers</strong></p>
                <p><strong>Delhi property bech kar kitna tax?</strong> 24 mahine+ rakhi thi: 12.5% ya 20% with indexation - jo kam ho. 24 mahine se kam: slab rate. Patron dono compute karta hai.</p><p><strong>TDS buyer ne kata hai?</strong> 1% TDS 26AS mein dikhega. ITR file karo, credit claim karo. Zyada kata toh refund milega.</p><p><strong>S.54 se tax kaise bachaye?</strong> Naya ghar kharido 2 saal mein ya banao 3 saal mein. Rs 10 crore cap. CGAS mein deposit karo agar abhi nahi kharida.</p>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 18: URGENCY CTA -->
<section class="content-section" style="background: var(--orange-lighter) !important; border-left: 4px solid var(--orange);">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Indexation Choice Can Save Rs 50,000 - Rs 5,00,000+</h2>
            <div class="content-text">
                
                <p>For pre-23 July 2024 Delhi properties held 10+ years, the indexation choice between 20% with CII and 12.5% flat can mean lakhs in tax difference. CGAS deposits must be made BEFORE ITR filing. Missing the 31 July / 31 August deadline forfeits loss carry-forward and may challenge exemption claims.</p><p><strong>Contact Patron - <a href="tel:+919459456700">Call +91 945 945 6700</a> or <a href="https://wa.me/919459456700?text=Hi%2C%20I%20sold%20property%20in%20Delhi%20and%20need%20ITR." target="_blank">WhatsApp us</a>.</strong></p>

            </div>
        </div>
    </div>
</section>

<!-- CONCLUSION + CTA BLOCK (Dark) -->
<section class="content-section" style="background: var(--blue) !important;">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title" style="color:#FFFFFF !important;">File Your Property Sale ITR in Delhi Today</h2>
            <div class="content-text" style="text-align:left;">
                
                <p style="color:rgba(255,255,255,0.9);">Property sale ITR in Delhi requires LTCG/STCG computation, indexation choice optimisation, S.54/54EC/54F exemption claims, TDS reconciliation, circle rate compliance, and CGAS management. Delhi's high-value property market makes each sale a significant tax event.</p><p style="color:rgba(255,255,255,0.9);">Patron Accounting provides end-to-end property sale ITR from our Rohini office - indexation analysis, exemption tracking, TDS reconciliation, circle rate verification, CGAS advisory, and Schedule CG preparation. 15+ years, 10,000+ businesses, Pune, Mumbai, Delhi, Gurugram.</p><p style="color:rgba(255,255,255,0.7);font-size:13px;">Reviewed by CA & CS Team - Patron Accounting LLP</p>

            </div>
            <div style="display:flex;gap:14px;flex-wrap:wrap;margin-top:24px;">
                <a href="tel:+919459456700" style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:var(--orange);color:#fff;border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#128222; Call +91 945 945 6700</a>
                <a href="https://wa.me/919459456700?text=Hi%2C%20I%20sold%20property%20in%20Delhi%20and%20need%20ITR%20filing.%20Please%20call%20me." target="_blank" style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:#25D366;color:#fff;border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#128172; WhatsApp Us</a>
                <a href="mailto:sales@patronaccounting.com?subject=Property%20Sale%20ITR%20-%20Delhi&body=Hello%20Patron%2C%0A%0AI%20sold%20property%20in%20Delhi%20and%20need%20ITR%20filing.%0A%0AThank%20you." style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:transparent;color:#fff;border:2px solid rgba(255,255,255,0.3);border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#9993;&#65039; Email Us</a>
            </div>
            <p style="color:rgba(255,255,255,0.7);font-size:13px;margin-top:16px;">Book a Free Consultation - No Obligation.</p>
        </div>
    </div>
</section>

<!-- GSTAT STATE BENCH CITY PAGES (32 Pages) -->
<section class="content-section" style="padding:48px 32px;background:var(--gray-50);">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title" style="text-align:center;margin-bottom:12px;">Property Sale ITR: Available Across 4 Major Cities</h2>
            <p style="text-align:center;color:var(--text-muted);font-size:15px;margin-bottom:40px;">Professional property sale ITR filing in Pune, Mumbai, Delhi, and Gurugram.</p>
         
            <div class="pa-city-block" style="margin-bottom:40px;"><div class="pa-city-grid"><a href="/itr-for-property-sale/pune" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Pune</div><div class="pa-card-sub">Maharashtra</div></div></a><a href="/itr-for-property-sale/mumbai" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Mumbai</div><div class="pa-card-sub">Maharashtra</div></div></a><div class="pa-city-card" style="opacity:0.6; pointer-events:none; border:2px solid var(--orange); position:relative;"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Delhi</div><div class="pa-card-sub">Delhi NCR</div></div><span style="position:absolute; top:6px; right:8px; font-size:10px; color:var(--orange); font-weight:700; text-transform:uppercase; letter-spacing:0.5px;">You're here</span></div><a href="/itr-for-property-sale/gurugram" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Gurugram</div><div class="pa-card-sub">Haryana</div></div></a></div></div><div class="pa-city-block"><div class="pa-block-title">Related Services in Delhi</div><div class="pa-block-sub">Complete property and tax compliance</div><div class="pa-cross-grid"><a href="/gst-registration/delhi" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">GST Registration</div><div class="pa-card-sub">Delhi</div></div></a><a href="/gst-returns/delhi" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">GST Returns</div><div class="pa-card-sub">Delhi</div></div></a><a href="/private-limited-company-registration/delhi" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Private Limited Company Registration</div><div class="pa-card-sub">Delhi</div></div></a><a href="/income-tax-return/delhi" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Income Tax Return Filing</div><div class="pa-card-sub">Delhi</div></div></a><a href="/trademark-registration/delhi" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Trademark Registration</div><div class="pa-card-sub">Delhi</div></div></a><a href="/startup-registration/delhi" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Startup Registration</div><div class="pa-card-sub">Delhi</div></div></a></div></div>
        </div>
    </div>
</section>

<!-- CONTENT FRESHNESS FOOTER -->
<section class="content-section" style="padding:32px;">
    <div class="content-container">
        <div class="text-content" style="font-size:13px;color:var(--text-muted);">
            <p><strong>Content Created:</strong> 06 April 2026 &nbsp;|&nbsp; <strong>Last Updated:</strong> <span id="lastUpdatedFooter">06 April 2026</span> &nbsp;|&nbsp; <strong>Next Review:</strong> 06 October 2026 &nbsp;|&nbsp; <strong>Reviewed By:</strong> CA &amp; CS Team, Patron Accounting LLP</p>
            <p>This page is reviewed every 6 months to ensure property LTCG rates, indexation rules, CII values, exemption limits, TDS provisions, and Delhi circle rates are current. Verified against incometax.gov.in and revenue.delhi.gov.in.</p>
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
