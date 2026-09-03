
@extends('layouts.service-app')

<!-- External Dependencies (loaded by master layout in production) -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Barlow:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,400&family=DM+Sans:opsz,wght@9..40,400;9..40,500;9..40,600;9..40,700&display=swap" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

@section('meta')
    <title>FDI Compliance in Mumbai - FEMA, FC-GPR & FC-TRS</title>
    <meta name="description" content="CA-assisted FDI compliance in Mumbai. FC-GPR, FLA return, FEMA reporting, FIRMS portal, AD bank coordination. BKC, Powai, SEEPZ. Call +91 945 945 6700.">
    <link rel="canonical" href="/fdi-compliance/mumbai">
    <meta name="robots" content="index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1">
    <meta property="og:title" content="FDI Compliance in Mumbai - FEMA, FC-GPR & FC-TRS">
    <meta property="og:description" content="CA-assisted FDI compliance in Mumbai. FC-GPR, FLA return, FEMA reporting, FIRMS portal, AD bank coordination. BKC, Powai, SEEPZ. Call +91 945 945 6700.">
    <meta property="og:url" content="/fdi-compliance/mumbai">
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="Patron Accounting">
    <meta property="og:image" content="https://www.patronaccounting.com/images/og-default-square.png">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="1200">
    <meta property="og:image:type" content="image/png">
    <meta property="og:image:secure_url" content="https://www.patronaccounting.com/images/og-default-square.png">
    <meta property="og:image:alt" content="Patron Accounting - partner you can rely on">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="FDI Compliance in Mumbai - FEMA, FC-GPR & FC-TRS">
    <meta name="twitter:description" content="CA-assisted FDI compliance in Mumbai. FC-GPR, FLA return, FEMA reporting, FIRMS portal, AD bank coordination. BKC, Powai, SEEPZ. Call +91 945 945 6700.">
    <meta name="twitter:image" content="https://www.patronaccounting.com/images/og-default-square.png">
@endsection

@section('schema')
    <script type="application/ld+json">{
  "@context": "https://schema.org",
  "@graph": [
    {
      "@type": "Service",
      "name": "FDI Compliance in Mumbai",
      "description": "CA-assisted FDI compliance in Mumbai. FC-GPR, FLA return, FEMA reporting, FIRMS portal, AD bank coordination. BKC, Powai, SEEPZ. Call +91 945 945 6700.",
      "url": "https://www.patronaccounting.com/fdi-compliance/mumbai",
      "serviceType": "FDI Compliance in Mumbai",
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
        "url": "https://www.patronaccounting.com/fdi-compliance/mumbai",
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
          "name": "FDI Compliance in Mumbai",
          "item": "https://www.patronaccounting.com/fdi-compliance/mumbai"
        }
      ]
    },
    {
      "@type": "FAQPage",
      "mainEntity": [
        {
          "@type": "Question",
          "name": "What is FDI compliance for Mumbai companies?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Mandatory RBI and FEMA reporting for companies receiving foreign investment. Key filings: FC-GPR within 30 days of allotment, FC-TRS within 60 days of transfer, FLA return annually by 15 July. All on RBI FIRMS portal through AD bank. Mumbai companies must comply regardless of investment size. Patron handles end-to-end FDI compliance."
          }
        },
        {
          "@type": "Question",
          "name": "What is FC-GPR and when must it be filed?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "FC-GPR (Foreign Currency Gross Provisional Return) is filed when an Indian company allots shares to a non-resident. Must be filed within 30 days of allotment on FIRMS portal through AD bank. Documents: FIRC, valuation certificate, Board Resolution, CS certificate, investor KYC. Late filing attracts penalties. Patron files within 15-20 days."
          }
        },
        {
          "@type": "Question",
          "name": "What is the FLA return?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Annual census return filed by all companies with FDI on RBI portal by 15 July. Reports foreign liabilities and assets as of 31 March. Must be filed even if no new investment during the year. Non-filing flags the company for RBI scrutiny and complicates future fundraising due diligence. Patron files FLA as part of annual compliance."
          }
        },
        {
          "@type": "Question",
          "name": "What are the penalties for non-compliance?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "FEMA penalties: up to 3x amount involved or Rs 2 lakh (whichever higher) plus Rs 5,000/day continuing violation. For delayed FC-GPR up to 3 years: Late Submission Fee. Beyond 3 years: compounding proceedings (0.5-3x contravention). RBI can also reverse transactions or restrict future foreign capital raising."
          }
        },
        {
          "@type": "Question",
          "name": "What is the FIRMS portal?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Foreign Investment Reporting and Management System – RBI's online platform for all FDI reporting. Companies file FC-GPR, FC-TRS, Form CN, Form DI through Single Master Form (SMF). Entity Master Form must be set up before any filing. Form submitted through AD bank which verifies and forwards to RBI. Patron manages FIRMS access."
          }
        },
        {
          "@type": "Question",
          "name": "Which route applies – automatic or government?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Most sectors allow 100% FDI under automatic route (no prior approval, just FEMA reporting). Government route via FIFP portal for restricted sectors: defence beyond 74%, media 26%, multi-brand retail 51%. Most Powai IT startups and BKC services companies qualify for 100% automatic. Patron verifies correct route."
          }
        },
        {
          "@type": "Question",
          "name": "Do NRI investments require FDI compliance?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "NRI investments on repatriation basis (Schedule 1 NDI Rules) follow full FDI compliance: FC-GPR, pricing, sectoral caps. Non-repatriation basis (Schedule 4) treated as domestic – no FC-GPR. Many Mumbai companies with NRI shareholders are unsure which category applies. Patron determines correct treatment."
          }
        },
        {
          "@type": "Question",
          "name": "Can past non-compliance be regularised?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Yes, through RBI compounding. File compounding application to RBI Compounding Authority. Fee: 0.5-3x contravention amount based on delay, amount, and history. Post-compounding, filing is regularised and company continues normal operations. Patron has successfully compounded FEMA violations dating back several years for Mumbai companies. Quick Answers FDI liya hai toh kya compliance karna padta hai? Shares allot karne ke 30 din mein FC-GPR file karo RBI FIRMS portal pe AD bank ke through. Har saal 15 July tak FLA return file karo. Entity Master Form FIRMS pe banao pehle. Agar late ho gaye toh compounding karna padega – penalty 0.5-3x amount ho sakti hai. FC-GPR mein kya documents lagte hain? FIRC (bank se), Board Resolution, valuation certificate (merchant banker ya CA se – DCF method), CS certificate, foreign investor ka KYC, shareholding pattern. Patron sab coordinate karta hai. Kya penalty hoti hai late filing pe? 3 saal tak late: Late Submission Fee. 3 saal se zyada: compounding (0.5-3x amount). Maximum penalty: 3x amount ya Rs 2 lakh (jo zyada ho) + Rs 5,000/day continuing. Time pe file karo – Patron 15-20 din mein file karta hai."
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
                        FDI Compliance in Mumbai: FC-GPR, FLA Return, FEMA Reporting &ndash; File On Time, Avoid Penalties
                    </h1>

                    <div class="expert-attribution-box">
                        <span class="eab-check"><svg width="16" height="16" viewBox="0 0 24 24" fill="currentColor"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg></span>
                        <span class="eab-title">Reviewed by CA and CS Team, Patron Accounting LLP</span>
                        <span class="eab-meta">
                            <span>ICAI & ICSI Registered</span><span class="eab-sep">|</span>
                            <span>15+ Years Experience</span><span class="eab-sep">|</span>
                            <span>Last Updated: <span id="lastUpdated">24 March 2026</span></span>
                        </span>
                        <a href="#" class="eab-link">Verify Credentials &rarr;</a>
                    </div>

                    <div class="mb-4">
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>FC-GPR:</span> File within 30 days of share allotment to non-resident on FIRMS portal through AD bank</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>FLA Return:</span> Annual filing by 15 July on RBI portal for all companies with outstanding foreign investment</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Penalty:</span> Up to 3x amount or Rs 2 lakh (whichever higher) + Rs 5,000/day continuing violation</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Routes:</span> Automatic (100% most sectors, no prior approval) vs Government Approval (FIFP portal, restricted sectors)</p>
                        </div>
                    </div>

                    <p class="mb-4 fw-bold" style="color: var(--blue); font-size: 15px;">Mumbai is India's largest FDI destination &ndash; 10,000+ businesses served with 4.9&#9733; Google rating</p>

                    <div class="hero-cta">
                        <a href="tel:+919459456700" class="btn-video text-decoration-none">
                            <span class="play-circle"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="width:14px;height:14px;color:#fff"><path d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/></svg></span>
                            Call +91 945 945 6700
                        </a>
                        <a href="mailto:sales@patronaccounting.com" class="btn-sample text-decoration-none">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="width:18px;height:18px;"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,12 2,6"/></svg>
                            Email Us
                        </a>
                        <a href="https://wa.me/919459456700?text=Hello%2C%20I%20just%20visited%20your%20Fdi%20Compliance%20in%20Mumbai%20page.%20I%20would%20like%20to%20know%20more%20about%20it." target="_blank" class="btn-sample text-decoration-none" rel="noopener">
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
                                            'service'  => 'FDI Compliance',
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
    'ctaText'    => 'Get FDI compliance from a CA team that handles FC-GPR, FLA, FIRMS portal, AD bank coordination, and compounding for Mumbai companies.',
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
            <a href="#what-section" class="toc-btn">What Is</a>
            <a href="#who-section" class="toc-btn">Who Needs</a>
            <a href="#services-section" class="toc-btn">Services</a>
            <a href="#procedure-section" class="toc-btn">Process</a>
            <a href="#documents-section" class="toc-btn">Documents</a>
            <a href="#challenges-section" class="toc-btn">Challenges</a>
            <a href="#fees-section" class="toc-btn">Fees</a>
            <a href="#timeline-section" class="toc-btn">Calendar</a>
            <a href="#benefits-section" class="toc-btn">Benefits</a>
            <a href="#comparison-section" class="toc-btn">Sectoral Caps</a>
            <a href="#faq-section" class="toc-btn">FAQs</a>
        </div>
        <button class="toc-arrow right" id="tocRight">&#10095;</button>
    </div>
</div>

<!-- SECTION 2: OVERVIEW / INTRO + TL;DR -->
<section class="content-section" id="overview-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">FDI Compliance in Mumbai &ndash; Overview</h2>
            <div class="content-text">
                <div class="highlight-box" style="margin-bottom:20px;">
                    <p><strong>&#128204; TL;DR - FDI Compliance Services at a Glance</strong></p>
                    <p>FDI compliance is the set of mandatory RBI and FEMA reporting obligations for Indian companies that have received investment from any person resident outside India. Key filings include: FC-GPR within 30 days of share allotment, FC-TRS within 60 days of share transfer, FLA return annually by 15 July, and downstream investment reporting (Form DI). Mumbai is India's largest FDI destination &ndash; BKC houses the highest concentration of foreign-invested companies, Powai has the most VC-funded startups with foreign investors, SEEPZ has 100% EOU units, and Nariman Point has foreign holding company subsidiaries. Penalties for non-compliance can be up to 3x the investment amount.</p>
                </div>
                <p>For Mumbai companies, FDI compliance is critical because: Mumbai receives the largest share of India's FDI inflows, RBI enforcement is active, delayed filings attract penalties up to 3x the amount, and non-compliance blocks future fundraising (investors verify FC-GPR status during due diligence). Learn more about <a href="/fdi-compliance">FDI Compliance across India</a>.</p>
                <p>Patron Accounting's Mumbai office at Marine Lines provides end-to-end FDI compliance: Entity Master setup on FIRMS portal, FC-GPR filing within 30 days, valuation certificate coordination, AD bank liaison with Mumbai-HQd banks (HDFC, ICICI, SBI, Axis), FLA annual return, downstream investment reporting, and compounding applications for delayed filings. For annual filings, see <a href="/fla-returns">FLA Returns</a>.</p>
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
                <h2 class="section-title">What Is FDI Compliance?</h2>
                <div class="content-text what-is-definition">
                    
                    <p>FDI compliance encompasses all regulatory reporting and structural requirements mandated by FEMA 1999, the NDI Rules 2019, and RBI's Master Direction on Foreign Investment in India for companies that have received investment from non-residents.</p>
                    <p>FDI compliance has three dimensions: (1) transaction reporting &ndash; FC-GPR (share issuance), FC-TRS (share transfer), Form CN (convertible notes), Form DI (downstream investment), LLP-I/LLP-II (LLP contributions); (2) annual reporting &ndash; FLA return by 15 July; (3) structural compliance &ndash; sectoral cap adherence, pricing norms (FMV valuation), and entry route compliance. For company compliance, see <a href="/private-limited-company-compliance">Private Limited Company Compliance</a>.</p>
                    <p>For Mumbai companies, a Powai startup that received Rs 5 crore from a US VC fund but missed FC-GPR faces compounding proceedings; a BKC MNC subsidiary that did not file FLA faces RBI scrutiny; a Nariman Point holding company with downstream investment faces indirect FDI requirements. Professional compliance from the day of investment is essential.</p>

                </div>
                <div class="highlight-box" style="margin-top:20px;">
                    <p><strong>Key Terms for FDI Compliance:</strong></p>
                    <ul>
                        <li><strong>FC-GPR:</strong> Foreign Currency Gross Provisional Return &ndash; filed within 30 days of allotment on FIRMS portal</li>
                        <li><strong>FIRMS Portal:</strong> Foreign Investment Reporting and Management System &ndash; RBI online platform for all FDI reporting</li>
                        <li><strong>FLA Return:</strong> Annual Foreign Liabilities and Assets return &ndash; due 15 July on RBI portal</li>
                        <li><strong>NDI Rules 2019:</strong> Framework for FDI &ndash; sectoral caps, entry routes, pricing, reporting</li>
                        <li><strong>AD Category-I Bank:</strong> Authorised Dealer bank &ndash; intermediary for FEMA transactions and RBI reporting</li>
                        <li><strong>Compounding:</strong> RBI process to regularise FEMA violations &ndash; fee 0.5-3x contravention amount</li>
                    </ul>

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
                            <text x="100" y="170" font-size="10" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial, sans-serif">FDI Compliance</text>
                        </svg>
                    </div>
                    <div class="illustration-badge">
                        <span>CA-Assisted</span>
                        <strong>FDI Compliance</strong>
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
            <h2 class="section-title">Which Mumbai Companies Need FDI Compliance?</h2>
            <div class="content-text">
                
                <p><strong>VC/PE-funded startups at Powai and Andheri</strong> &ndash; Every startup raising equity from a foreign investor must file FC-GPR within 30 days. Common instruments: equity shares, CCDs, CCPS, convertible notes. Each funding round (seed, Series A, B, C) triggers fresh FC-GPR. For capital increases needed before allotment, see <a href="/change-in-authorised-capital">Change in Authorised Capital</a>.</p>
                <p><strong>MNC subsidiaries at BKC and Nariman Point</strong> &ndash; Subsidiaries receiving equity from foreign parents file FC-GPR for each capital infusion and FLA return annually. BKC has hundreds of MNC subsidiaries in BFSI, technology, consulting, and pharma.</p>
                <p><strong>Companies with foreign directors or shareholders</strong> &ndash; Even a single foreign shareholder (including NRI on repatriation basis) triggers FDI compliance obligations.</p>
                <p><strong>100% EOUs at SEEPZ and Andheri MIDC</strong> &ndash; Export-oriented units with 100% foreign investment must comply with all FDI reporting plus SEZ/EOU compliance.</p>
                <p><strong>Companies with downstream investment</strong> &ndash; If a foreign-owned Mumbai company invests in another Indian company, it is treated as indirect FDI. Form DI must be filed. Common for BKC group structures.</p>
                <p><strong>Companies transferring shares to/from non-residents</strong> &ndash; Any transfer (sale, gift, swap) triggers FC-TRS filing within 60 days.</p>
                <p><strong>LLPs with foreign investment</strong> &ndash; Foreign capital contributions require LLP-I; partner transfers require LLP-II. Mumbai LLPs in professional services with foreign partners.</p>

            </div>
            </div>
        </div>
    </div>
</section>

<!-- SECTION 5: OUR SERVICES -->
<section class="content-section" id="services-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">FDI Compliance Services Included</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Service</th><th>What We Do</th></tr></thead>
                    <tbody>
                        <tr><td>Entity Master Form Setup (FIRMS)</td><td>Create/update EMF on RBI FIRMS portal &ndash; prerequisite for all filings. Company details, capital structure, foreign shareholding, AD bank details</td></tr>
                        <tr><td>FC-GPR Filing within 30 Days</td><td>Prepare and file via AD bank on FIRMS portal. FIRC coordination, valuation certificate, CS compliance certificate, investor KYC, shareholding pattern. Filed within 15-20 days as standard</td></tr>
                        <tr><td>Valuation Certificate Coordination</td><td>FMV by SEBI-registered merchant banker or CA using DCF method for unlisted companies. Financial model prepared for Powai startups. Report within 90 days of allotment</td></tr>
                        <tr><td>FC-TRS Filing within 60 Days</td><td>Share transfer between resident and non-resident. Pricing compliance verified (FMV floor/ceiling). Complete documentation and AD bank coordination</td></tr>
                        <tr><td>FLA Return by 15 July</td><td>Annual filing on RBI portal. Foreign liabilities and assets as of 31 March. Filed even if no new investment during the year. Part of standard annual compliance</td></tr>
                        <tr><td>Downstream Investment (Form DI)</td><td>For foreign-owned Mumbai companies investing in other Indian entities. Sectoral cap and pricing compliance verified. Common for BKC group structures</td></tr>
                        <tr><td>Compounding Application</td><td>For delayed FC-GPR/FC-TRS filings. Application prepared and filed with RBI Compounding Authority. Fee: 0.5-3x contravention. Mumbai companies regularised dating back years</td></tr>
                        <tr><td>AD Bank Coordination</td><td>Direct HQ-level liaison with Mumbai-based AD banks (HDFC, ICICI, SBI, Axis, Kotak) for FIRC, KYC, FIRMS forwarding, and remittance confirmation</td></tr>

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
            <h2 class="section-title">FDI Compliance Process for Mumbai Companies</h2>
            <p class="section-subtitle" style="text-align:left;max-width:100%;">Patron Accounting files FC-GPR within 15-20 days of allotment, providing 10-15 days of buffer against the 30-day deadline. All major AD banks are headquartered in Mumbai for direct coordination.</p>
        </header>
        <div class="steps-container">
            <div class="step-card"><div class="step-content"><span class="step-badge">Step 1</span><h3 class="step-title">Pre-Investment Advisory</h3><p class="step-description">Verify sectoral cap, entry route (automatic/government), set up Entity Master Form on FIRMS portal, identify AD bank, initiate KYC for foreign investor. For Powai startups receiving first VC funding, Patron provides pre-investment compliance advisory to avoid post-investment complications.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Sectoral cap verified</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>EMF set up</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="15" y="10" width="90" height="65" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><line x1="30" y1="30" x2="90" y2="30" stroke="#F5A623" stroke-width="3" stroke-linecap="round"/><circle cx="85" cy="55" r="10" fill="#E8F5E9" stroke="#10B981" stroke-width="1.2"/><path d="M80 55l3 3 6-6" stroke="#10B981" stroke-width="2" stroke-linecap="round"/></svg></div><span class="illustration-label">Pre-Cleared</span><span class="step-number-large">01</span></div></div></div><div class="step-card"><div class="step-content"><span class="step-badge">Step 2</span><h3 class="step-title">Receive Remittance &amp; Obtain FIRC</h3><p class="step-description">Foreign investor remits funds to company's bank account through AD bank. AD bank issues FIRC (Foreign Inward Remittance Certificate). Company has 60 days from remittance to allot shares (else refund within 15 days). Patron coordinates FIRC issuance within 5 working days with Mumbai-HQd AD banks.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>FIRC obtained</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>60-day clock starts</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="20" y="8" width="80" height="70" rx="4" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><circle cx="60" cy="35" r="15" fill="#FFF3E0" stroke="#F5A623" stroke-width="1.2"/><path d="M53 35l5 5 10-10" stroke="#10B981" stroke-width="2.5" stroke-linecap="round"/></svg></div><span class="illustration-label">Funds Received</span><span class="step-number-large">02</span></div></div></div><div class="step-card"><div class="step-content"><span class="step-badge">Step 3</span><h3 class="step-title">Valuation &amp; Share Allotment</h3><p class="step-description">Get FMV valuation certificate (SEBI merchant banker or CA, DCF method for unlisted). Allot shares within 60 days of remittance. Issue share certificates. File PAS-3 (Return of Allotment) with ROC within 30 days. Patron coordinates valuation and handles allotment documentation for Mumbai companies.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Valuation certified</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Shares allotted</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="10" y="10" width="45" height="60" rx="4" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><rect x="65" y="10" width="45" height="60" rx="4" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><line x1="18" y1="25" x2="48" y2="25" stroke="#F5A623" stroke-width="2" stroke-linecap="round"/><line x1="73" y1="25" x2="103" y2="25" stroke="#F5A623" stroke-width="2" stroke-linecap="round"/></svg></div><span class="illustration-label">Allotment Done</span><span class="step-number-large">03</span></div></div></div><div class="step-card"><div class="step-content"><span class="step-badge">Step 4</span><h3 class="step-title">File FC-GPR within 30 Days</h3><p class="step-description">File Form FC-GPR on FIRMS portal through AD bank within 30 days of allotment. Attach: FIRC, Board Resolution, valuation certificate, CS compliance certificate, investor KYC, shareholding pattern, declarations. AD bank verifies and forwards to RBI. Patron files within 15-20 days for Mumbai companies.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>FC-GPR filed</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>AD bank verified</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="20" y="10" width="80" height="60" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><rect x="35" y="25" width="50" height="8" rx="3" fill="#E8712C" opacity="0.3"/><path d="M80 55l-8 8-5-5" stroke="#10B981" stroke-width="2.5" stroke-linecap="round"/></svg></div><span class="illustration-label">RBI Reported</span><span class="step-number-large">04</span></div></div></div><div class="step-card"><div class="step-content"><span class="step-badge">Step 5</span><h3 class="step-title">File FLA Return by 15 July</h3><p class="step-description">Annual filing on RBI portal reporting foreign liabilities and assets as of 31 March. Filed even if no new investment during the year. Patron files FLA as part of standard annual compliance for all Mumbai foreign-invested company clients.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>FLA filed</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Annual compliance done</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="20" y="10" width="80" height="60" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><circle cx="60" cy="40" r="18" fill="#E8F5E9" stroke="#10B981" stroke-width="1.5"/><path d="M52 40l6 6 12-12" stroke="#10B981" stroke-width="3" stroke-linecap="round"/></svg></div><span class="illustration-label">Annual Done</span><span class="step-number-large">05</span></div></div></div><div class="step-card"><div class="step-content"><span class="step-badge">Step 6</span><h3 class="step-title">Ongoing Monitoring &amp; Compliance</h3><p class="step-description">Monitor sectoral cap compliance (especially after additional rounds), pricing for subsequent transactions, downstream investment reporting, FC-TRS for share transfers. Update Entity Master Form for capital structure changes. Patron provides year-round FDI compliance monitoring for Mumbai companies.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Sectoral caps monitored</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>EMF updated</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="25" y="10" width="70" height="55" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><circle cx="60" cy="35" r="18" fill="#E8F5E9" stroke="#10B981" stroke-width="1.5"/><path d="M52 35l6 6 12-12" stroke="#10B981" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/></svg></div><span class="illustration-label">Compliant</span><span class="step-number-large">06</span></div></div></div>

        </div>
    </div>
</section>

<!-- SECTION 8: DOCUMENTS REQUIRED -->
<section class="content-section" id="documents-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Documents Required for FDI Compliance in Mumbai</h2>
            <div class="content-text">
                
                <ul>
                    <li><strong>FIRC:</strong> Foreign Inward Remittance Certificate from AD bank confirming receipt of foreign remittance</li>
                    <li><strong>Board Resolution:</strong> Approving subscription/allotment, issue price, terms, and authorisation to file FC-GPR</li>
                    <li><strong>Valuation Certificate:</strong> FMV by SEBI-registered merchant banker or CA (DCF for unlisted). Within 90 days of allotment</li>
                    <li><strong>CS Compliance Certificate:</strong> Confirming Companies Act and FEMA compliance for the allotment</li>
                    <li><strong>KYC of Foreign Investor:</strong> Passport, address proof, PAN (if available), beneficial ownership declaration via AD bank</li>
                    <li><strong>Shareholding Pattern:</strong> Pre-allotment and post-allotment showing Indian and foreign holding percentages</li>
                    <li><strong>Share Certificates:</strong> Issued to foreign investor after allotment</li>
                    <li><strong>Form PAS-3:</strong> Return of Allotment filed with ROC within 30 days</li>
                    <li><strong>SWIFT Copy / Bank Remittance Advice:</strong> Additional proof of foreign remittance receipt</li>
                </ul>
                <div class="highlight-box" style="margin-top:16px;">
                    <p><strong>Mumbai-Specific Tip:</strong> Ensure your AD bank issues the FIRC within 5 working days of remittance receipt. Delays compress the 30-day FC-GPR window. Since all major AD banks (HDFC, ICICI, SBI, Axis, Kotak) are headquartered in Mumbai, Patron escalates FIRC delays directly with the bank's HQ compliance team for Mumbai clients.</p>
                </div>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 9: CHALLENGES -->
<section class="content-section" id="challenges-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Common FDI Compliance Challenges in Mumbai</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Challenge</th><th>Impact</th><th>How Patron Accounting Solves It</th></tr></thead>
                    <tbody>
                        <tr><td>Missing the 30-Day FC-GPR Deadline</td><td>Most common violation. Powai startups delay due to pending FIRC, valuation delay, or lack of awareness. Late filing attracts LSF (up to 3 years) or compounding (beyond 3 years). Penalty can be 0.5-3x amount</td><td>FC-GPR filed within 15-20 days of allotment. FIRC and valuation coordinated in parallel. Maximum buffer maintained</td></tr>
                        <tr><td>Valuation Pricing Issues</td><td>Shares issued below FMV is a FEMA violation. Round valuation agreed with VC may not match DCF-based FMV. Price mismatch triggers regulatory scrutiny</td><td>Merchant banker coordinated to ensure valuation supports agreed price. Financial model prepared for Powai startup rounds</td></tr>
                        <tr><td>Entity Master Form Not Updated</td><td>FIRMS portal blocks FC-GPR if EMF is not current. Companies with previous rounds that did not update EMF face filing blocks</td><td>EMF updated before initiating any new filing. Historical EMF gaps resolved for Mumbai companies</td></tr>
                        <tr><td>Downstream Investment Compliance</td><td>BKC foreign-owned holding companies investing in other Indian entities overlook Form DI reporting. If subsidiary is in a capped sector, downstream investment may violate sectoral cap</td><td>Group structures reviewed for Mumbai holding companies. Downstream compliance verified before each investment</td></tr>
                        <tr><td>FLA Return Non-Filing</td><td>Many Mumbai companies with FDI do not file annual FLA (due 15 July). Non-filing flags company for RBI scrutiny and complicates future fundraising due diligence</td><td>FLA filed as part of standard annual compliance for all Mumbai foreign-invested clients</td></tr>

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
            <h2 class="section-title">FDI Compliance Fees in Mumbai</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Fee Component</th><th>Amount</th></tr></thead>
                    <tbody>
                        <tr><td>FC-GPR / FC-TRS / FLA (Government/RBI)</td><td>No government fee &ndash; filed through AD bank on FIRMS/RBI portal</td></tr>
                        <tr><td>Late Submission Fee (FC-GPR delayed up to 3 years)</td><td>Variable &ndash; calculated by RBI based on delay and amount</td></tr>
                        <tr><td>Compounding Fee (delay beyond 3 years)</td><td>0.5-3x contravention amount &ndash; RBI Compounding Authority</td></tr>
                        <tr><td>FEMA Penalty (non-compliance)</td><td>Up to 3x amount or Rs 2 lakh (whichever higher) + Rs 5,000/day continuing</td></tr>
                        <tr><td>Valuation Certificate (Merchant Banker)</td><td>Rs 25,000 &ndash; Rs 1,00,000 (depends on company complexity and round size)</td></tr>
                        <tr><td>Patron Fee &ndash; FC-GPR Filing (Single Round)</td><td>Starting Rs 15,000 (EMF + FIRC + valuation + FC-GPR + PAS-3)</td></tr>
                        <tr><td>Patron Fee &ndash; FC-TRS Filing</td><td>Starting Rs 10,000 (transfer documentation + pricing + FIRMS filing)</td></tr>
                        <tr><td>Patron Fee &ndash; FLA Return (Annual)</td><td>Starting Rs 5,000 (foreign liability/asset compilation + filing)</td></tr>
                        <tr><td>Patron Fee &ndash; Annual FDI Compliance Package</td><td>Starting Rs 25,000 (FC-GPR + FLA + EMF + monitoring + AD bank)</td></tr>
                        <tr><td>Patron Fee &ndash; Compounding Application</td><td>Starting Rs 20,000 (application + RBI representation)</td></tr>

                    </tbody>
                </table>
                </div>
                <p style="margin-top:16px;font-size:13px;color:var(--text-muted);font-style:italic;">All fees and charges listed are indicative only and do not constitute a binding offer. Final amounts may vary depending on the volume of work and the complexity involved.</p>
                <p style="margin-top:16px;">Professional service charges for drafting, filing, and representation are separate from the statutory fees. The exact fee depends on the complexity of the case, disputed amount, and number of hearings required. Contact us for a detailed quote.</p>
                <p style="margin-top:16px;"><strong>Get a free FDI Compliance consultation - <a href="tel:+919459456700">Call +91 945 945 6700</a> or <a href="https://wa.me/919459456700?text=Hello%2C%20I%20just%20visited%20your%20Fdi%20Compliance%20in%20Mumbai%20page.%20I%20would%20like%20to%20know%20more%20about%20it." target="_blank" rel="noopener">WhatsApp us</a>. No-obligation assessment.</strong></p>
            </div>
        </div>
    </div>
</section>

<!-- SECTION 11: TIMELINE -->
<section class="content-section" id="timeline-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">FDI Compliance Filing Calendar</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Stage</th><th>Estimated Timeline</th></tr></thead>
                    <tbody>
                        <tr><td>Entity Master Form (FIRMS)</td><td>Before first FC-GPR &ndash; one-time setup, update for changes</td></tr>
                        <tr><td>FC-GPR</td><td>30 days from share allotment &ndash; per transaction</td></tr>
                        <tr><td>FC-TRS</td><td>60 days from transfer deed/payment &ndash; per transaction</td></tr>
                        <tr><td>Form CN (Convertible Notes)</td><td>30 days from issuance &ndash; per transaction</td></tr>
                        <tr><td>Form DI (Downstream Investment)</td><td>30 days from investment &ndash; per transaction</td></tr>
                        <tr><td>LLP-I / LLP-II</td><td>30/60 days from contribution/transfer &ndash; per transaction</td></tr>
                        <tr><td>FLA Return</td><td>15 July annually &ndash; all companies with outstanding FDI</td></tr>
                        <tr><td>Form PAS-3 (ROC)</td><td>30 days from allotment &ndash; Companies Act requirement</td></tr>

                    </tbody>
                </table>
                </div>
                <div class="highlight-box" style="margin-top:16px;">
                    
                    <p><strong>The 30-day FC-GPR deadline is non-negotiable.</strong> Patron initiates the filing process on the day of allotment, coordinates FIRC and valuation in parallel, and files within 15-20 days &ndash; providing 10-15 days of buffer. For Mumbai startups closing multiple tranches, each tranche's deadline is tracked separately.</p>

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
            <h2 class="section-title">Why Choose Patron for FDI Compliance in Mumbai</h2>
        </div>
        <div class="features-grid">
            <article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><h3 class="feature-title">Mumbai FDI Hub Expertise</h3><p class="feature-text">FC-GPR for Powai VC startups (seed to Series C), BKC MNC subsidiaries, SEEPZ 100% EOUs, and Nariman Point foreign holding companies. Each scenario's unique requirements understood.</p></article>
            <article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="2" y="3" width="20" height="14" rx="2"/><path d="M8 21h8M12 17v4"/></svg></div><h3 class="feature-title">AD Bank HQ Coordination</h3><p class="feature-text">All major AD banks headquartered in Mumbai (HDFC, ICICI, SBI, Axis, Kotak). Direct HQ-level coordination for FIRC, KYC, and FIRMS forwarding &ndash; faster than branch-level in other cities.</p></article>
            <article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg></div><h3 class="feature-title">30-Day Deadline Management</h3><p class="feature-text">FC-GPR filed within 15-20 days of allotment. FIRC and valuation coordinated in parallel from day one. 10-15 days buffer. Each tranche tracked separately for multi-close rounds.</p></article>
            <article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M14 2H6a2 2 0 00-2 2v16a2 2 0 002 2h12a2 2 0 002-2V8z"/><path d="M14 2v6h6"/></svg></div><h3 class="feature-title">Compounding &amp; Regularisation</h3><p class="feature-text">For past delays: compounding applications prepared and filed with RBI. Mumbai companies regularised dating back multiple years. FEMA violations resolved for clean compliance record.</p></article>
        </div>
    </div>
</section>

<!-- SECTION 12A: SOCIAL PROOF -->
<section class="content-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Trusted by Mumbai Foreign-Invested Companies</h2>
            <div class="content-text">
                
                <p><strong>Trust Signals:</strong> 10,000+ Businesses | 4.9 Google Rating | 50,000+ Documents Filed | 15+ Years</p>
                <blockquote style="border-left:3px solid var(--orange);padding:12px 20px;margin:16px 0;background:var(--orange-lighter);border-radius:0 var(--radius-sm) var(--radius-sm) 0;">
                    <p style="font-style:italic;margin-bottom:8px;">&ldquo;Patron filed our FC-GPR in 12 days after our Series A close &ndash; including merchant banker valuation and HDFC Bank FIRC coordination. Our previous CA missed the deadline on the seed round and we had to compound.&rdquo;</p>
                    <p style="font-size:13px;font-weight:700;color:var(--blue);margin:0;">&mdash; Founder, SaaS Startup, Powai</p>
                </blockquote>
                <p>Offices in Pune, Mumbai, Delhi, and Gurugram serving foreign-invested companies with FEMA compliance and RBI reporting.</p>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 13: SELF-FILING vs PROFESSIONAL COMPARISON -->
<section class="content-section" id="comparison-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">FDI Sectoral Caps Relevant to Mumbai Companies</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Sector</th><th>FDI Cap</th><th>Route</th><th>Mumbai Relevance</th></tr></thead>
                    <tbody>
                        <tr><td>IT and ITES</td><td>100%</td><td>Automatic</td><td>Powai/Andheri IT companies, BPO, KPO</td></tr>
                        <tr><td>E-Commerce (B2B Marketplace)</td><td>100%</td><td>Automatic</td><td>Powai e-commerce startups</td></tr>
                        <tr><td>Financial Services (NBFC)</td><td>100%</td><td>Automatic (RBI regulated)</td><td>BKC/Fort NBFCs and fintech</td></tr>
                        <tr><td>Insurance</td><td>74%</td><td>Automatic up to 74%</td><td>BKC insurance companies</td></tr>
                        <tr><td>Banking (Private Sector)</td><td>74%</td><td>Auto up to 49%, Govt beyond</td><td>BKC/Fort private banks</td></tr>
                        <tr><td>Defence</td><td>74% (100% with CG)</td><td>Auto up to 74%</td><td>Mumbai defence technology</td></tr>
                        <tr><td>Telecom</td><td>100%</td><td>Auto up to 49%, Govt beyond</td><td>Mumbai telecom companies</td></tr>
                        <tr><td>Media (Print/Digital News)</td><td>26%</td><td>Government</td><td>Andheri/Lower Parel media</td></tr>
                        <tr><td>Construction Development</td><td>100%</td><td>Automatic (conditions)</td><td>Mumbai real estate development</td></tr>
                        <tr><td>Single Brand Retail</td><td>100%</td><td>Auto up to 49%, Govt beyond</td><td>Mumbai retail brands</td></tr>
                        <tr><td>Pharma (Greenfield)</td><td>100%</td><td>Automatic</td><td>Powai/Andheri pharma startups</td></tr>

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
                
                <p>Explore related services:</p>
                <ul>
                    <li><a href="/fdi-compliance">FDI Compliance (India Overview)</a></li>
                    <li><a href="/fla-returns">FLA Returns</a></li>
                    <li><a href="/private-limited-company-compliance">Private Limited Company Compliance</a></li>
                    <li><a href="/accounting-services">Accounting Services</a></li>
                    <li><a href="/statutory-audit">Statutory Audit</a></li>
                    <li><a href="/income-tax-return">Income Tax Return Filing</a></li>
                    <li><a href="/change-in-authorised-capital">Change in Authorised Capital</a></li>
                    <li><a href="/gst-registration/mumbai">GST Registration in Mumbai</a></li>
                </ul>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 15A: LEGAL FRAMEWORK -->
<section class="content-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Legal &amp; Compliance Framework for FDI</h2>
            <div class="content-text">
                
                <ul>
                    <li><strong>FEMA 1999:</strong> Foreign Exchange Management Act &ndash; overarching legislation for foreign investment</li>
                    <li><strong>NDI Rules, 2019:</strong> Non-Debt Instruments Rules &ndash; FDI sectoral caps, entry routes, pricing, reporting</li>
                    <li><strong>RBI Master Direction:</strong> Consolidates all FDI reporting procedures &ndash; FC-GPR, FC-TRS, FLA, FIRMS portal</li>
                    <li><strong>DPIIT Consolidated FDI Policy:</strong> Sectoral caps, conditions, and prohibited sectors</li>
                    <li><strong>FIRMS Portal:</strong> Foreign Investment Reporting and Management System &ndash; online platform for all RBI FDI reporting</li>
                    <li><strong>Pricing Norms:</strong> FMV by SEBI-registered merchant banker or CA (DCF for unlisted) &ndash; floor price for incoming FDI</li>
                    <li><strong>Section 13, FEMA:</strong> Penalty for contravention &ndash; up to 3x amount or Rs 2 lakh + Rs 5,000/day</li>
                    <li><strong>RBI Compounding:</strong> Regularisation of violations &ndash; 0.5-3x contravention amount</li>
                    <li><strong>AD Category-I Banks:</strong> Intermediary for all FEMA transactions and RBI reporting</li>
                </ul>
                <p><strong>RBI Portal:</strong> <a href="https://www.rbi.org.in" target="_blank" rel="noopener">rbi.org.in</a></p>

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
                    <h2 class="faq-expanded__title">Frequently Asked Questions &ndash; FDI Compliance in Mumbai</h2>
                    <p class="faq-expanded__lead">Get answers about FC-GPR, FLA, FIRMS portal, sectoral caps, penalties, NRI investments, and compounding for Mumbai companies.</p>
                    @include('partials.bigin-form', [
                        'variant'  => 'compact',
                        'service'  => 'FDI Compliance',
                        'city'     => 'Mumbai',
                    ])
                </aside>
                <div class="faq-expanded__list">
                    <div class="faq-expanded__item" id="faq-1">
                        <h3 class="faq-expanded__q">What is FDI compliance for Mumbai companies?</h3>
                        <div class="faq-expanded__a"><p>Mandatory RBI and FEMA reporting for companies receiving foreign investment. Key filings: FC-GPR within 30 days of allotment, FC-TRS within 60 days of transfer, FLA return annually by 15 July. All on RBI FIRMS portal through AD bank. Mumbai companies must comply regardless of investment size. Patron handles end-to-end FDI compliance.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-2">
                        <h3 class="faq-expanded__q">What is FC-GPR and when must it be filed?</h3>
                        <div class="faq-expanded__a"><p>FC-GPR (Foreign Currency Gross Provisional Return) is filed when an Indian company allots shares to a non-resident. Must be filed within 30 days of allotment on FIRMS portal through AD bank. Documents: FIRC, valuation certificate, Board Resolution, CS certificate, investor KYC. Late filing attracts penalties. Patron files within 15-20 days.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-3">
                        <h3 class="faq-expanded__q">What is the FLA return?</h3>
                        <div class="faq-expanded__a"><p>Annual census return filed by all companies with FDI on RBI portal by 15 July. Reports foreign liabilities and assets as of 31 March. Must be filed even if no new investment during the year. Non-filing flags the company for RBI scrutiny and complicates future fundraising due diligence. Patron files FLA as part of annual compliance.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-4">
                        <h3 class="faq-expanded__q">What are the penalties for non-compliance?</h3>
                        <div class="faq-expanded__a"><p>FEMA penalties: up to 3x amount involved or Rs 2 lakh (whichever higher) plus Rs 5,000/day continuing violation. For delayed FC-GPR up to 3 years: Late Submission Fee. Beyond 3 years: compounding proceedings (0.5-3x contravention). RBI can also reverse transactions or restrict future foreign capital raising.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-5">
                        <h3 class="faq-expanded__q">What is the FIRMS portal?</h3>
                        <div class="faq-expanded__a"><p>Foreign Investment Reporting and Management System &ndash; RBI's online platform for all FDI reporting. Companies file FC-GPR, FC-TRS, Form CN, Form DI through Single Master Form (SMF). Entity Master Form must be set up before any filing. Form submitted through AD bank which verifies and forwards to RBI. Patron manages FIRMS access.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-6">
                        <h3 class="faq-expanded__q">Which route applies &ndash; automatic or government?</h3>
                        <div class="faq-expanded__a"><p>Most sectors allow 100% FDI under automatic route (no prior approval, just FEMA reporting). Government route via FIFP portal for restricted sectors: defence beyond 74%, media 26%, multi-brand retail 51%. Most Powai IT startups and BKC services companies qualify for 100% automatic. Patron verifies correct route.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-7">
                        <h3 class="faq-expanded__q">Do NRI investments require FDI compliance?</h3>
                        <div class="faq-expanded__a"><p>NRI investments on repatriation basis (Schedule 1 NDI Rules) follow full FDI compliance: FC-GPR, pricing, sectoral caps. Non-repatriation basis (Schedule 4) treated as domestic &ndash; no FC-GPR. Many Mumbai companies with NRI shareholders are unsure which category applies. Patron determines correct treatment.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-8">
                        <h3 class="faq-expanded__q">Can past non-compliance be regularised?</h3>
                        <div class="faq-expanded__a"><p>Yes, through RBI compounding. File compounding application to RBI Compounding Authority. Fee: 0.5-3x contravention amount based on delay, amount, and history. Post-compounding, filing is regularised and company continues normal operations. Patron has successfully compounded FEMA violations dating back several years for Mumbai companies.</p></div>
                    </div>
                </div>
            </div>


            <!-- Quick Answers -->
            <div class="highlight-box" style="margin-top:32px;">
                <p><strong>Quick Answers</strong></p>
                <p><strong>FDI liya hai toh kya compliance karna padta hai?</strong> Shares allot karne ke 30 din mein FC-GPR file karo RBI FIRMS portal pe AD bank ke through. Har saal 15 July tak FLA return file karo. Entity Master Form FIRMS pe banao pehle. Agar late ho gaye toh compounding karna padega &ndash; penalty 0.5-3x amount ho sakti hai.</p>
                <p><strong>FC-GPR mein kya documents lagte hain?</strong> FIRC (bank se), Board Resolution, valuation certificate (merchant banker ya CA se &ndash; DCF method), CS certificate, foreign investor ka KYC, shareholding pattern. Patron sab coordinate karta hai.</p>
                <p><strong>Kya penalty hoti hai late filing pe?</strong> 3 saal tak late: Late Submission Fee. 3 saal se zyada: compounding (0.5-3x amount). Maximum penalty: 3x amount ya Rs 2 lakh (jo zyada ho) + Rs 5,000/day continuing. Time pe file karo &ndash; Patron 15-20 din mein file karta hai.</p>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 18: URGENCY CTA -->
<section class="content-section" style="background: var(--orange-lighter) !important; border-left: 4px solid var(--orange);">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Don't Miss the 30-Day FC-GPR Deadline &ndash; Penalties Are Severe</h2>
            <div class="content-text">
                
                <p>The 30-day FC-GPR deadline starts from allotment date &ndash; not from when you 'get around to it'. Every day of delay increases penalty exposure. For a Powai startup with Rs 10 crore FDI that missed the deadline by 6 months, the compounding fee can be Rs 5-30 lakh. The FLA return deadline of 15 July is also fixed &ndash; non-filing puts the company on RBI's non-compliant list, complicating future fundraising.</p>
                <p><strong>Get your FDI compliance done on time &ndash; <a href="tel:+919459456700">Call +91 945 945 6700</a> or <a href="https://wa.me/919459456700?text=Hello%2C%20I%20just%20visited%20your%20Fdi%20Compliance%20in%20Mumbai%20page.%20I%20would%20like%20to%20know%20more%20about%20it." target="_blank" rel="noopener">WhatsApp us</a>.</strong></p>

            </div>
        </div>
    </div>
</section>

<!-- CONCLUSION + CTA BLOCK (Dark) -->
<section class="content-section" style="background: var(--blue) !important;">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title" style="color:#FFFFFF !important;">Get End-to-End FDI Compliance in Mumbai</h2>
            <div class="content-text" style="text-align:left;">
                
                <p style="color:rgba(255,255,255,0.85);font-size:16px;line-height:1.7;">FDI compliance in Mumbai covers the entire spectrum of India's foreign investment &ndash; from Powai startups receiving VC funding to BKC MNC subsidiaries getting parent equity, from SEEPZ 100% EOUs to Nariman Point foreign holding companies with downstream investments, from NRI investments to cross-border share transfers.</p>
                <p style="color:rgba(255,255,255,0.85);font-size:16px;line-height:1.7;">Patron Accounting's Mumbai office at Marine Lines provides end-to-end FDI compliance &ndash; Entity Master setup, FC-GPR within 15-20 days, valuation coordination, AD bank liaison with Mumbai-HQd banks, FLA annual return, downstream reporting, sectoral cap advisory, and compounding for past delays.</p>
                <p style="color:rgba(255,255,255,0.85);font-size:16px;line-height:1.7;">With offices in Pune, Mumbai, Delhi, and Gurugram, 10,000+ businesses served, and 4.9 Google rating, Patron Accounting LLP delivers penalty-free FDI compliance across India.</p>

            </div>
            <div style="display:flex;gap:14px;flex-wrap:wrap;margin-top:24px;">
                <a href="tel:+919459456700" style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:var(--orange);color:#fff;border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#128222; Call +91 945 945 6700</a>
                <a href="https://wa.me/919459456700?text=Hello%2C%20I%20just%20visited%20your%20Fdi%20Compliance%20in%20Mumbai%20page.%20I%20would%20like%20to%20know%20more%20about%20it." target="_blank" style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:#25D366;color:#fff;border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;" rel="noopener">&#128172; WhatsApp Us</a>
                <a href="mailto:sales@patronaccounting.com" style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:transparent;color:#fff;border:2px solid rgba(255,255,255,0.3);border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#9993;&#65039; Email Us</a>
            </div>
            <p style="color:rgba(255,255,255,0.7);font-size:13px;margin-top:16px;">Book a Free Consultation - No Obligation.</p>
        </div>
    </div>
</section>

<!-- GSTAT STATE BENCH CITY PAGES (32 Pages) -->
<section class="content-section" style="padding:48px 32px;background:var(--gray-50);">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title" style="text-align:center;margin-bottom:12px;">FDI Compliance Across India</h2>
            <p style="text-align:center;color:var(--text-muted);font-size:15px;margin-bottom:40px;">Patron Accounting handles FDI compliance in major cities with AD bank coordination and FIRMS portal expertise.</p>
          
            <div class="pa-city-block" style="margin-bottom:40px;">
                        <div class="pa-block-title">FDI Compliance in Other Cities</div>
                        <div class="pa-block-sub">Professional FEMA compliance across India</div>
                        <div class="pa-city-grid">
                            <a href="/fdi-compliance/pune" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Pune</div><div class="pa-card-sub">Maharashtra</div></div></a>
                            <div class="pa-city-card" style="opacity:0.6; pointer-events:none; border:2px solid var(--orange); position:relative;"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Mumbai</div><div class="pa-card-sub">Maharashtra</div></div><span style="position:absolute; top:6px; right:8px; font-size:10px; color:var(--orange); font-weight:700; text-transform:uppercase; letter-spacing:0.5px;">You're here</span></div>
                            <a href="/fdi-compliance/delhi" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Delhi</div><div class="pa-card-sub">Delhi NCR</div></div></a>
                            <a href="/fdi-compliance/gurugram" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Gurugram</div><div class="pa-card-sub">Haryana</div></div></a>
                        </div>
                    </div>
                    <div class="pa-city-block">
                        <div class="pa-block-title">Related Services in Mumbai</div>
                        <div class="pa-block-sub">End-to-end corporate and tax compliance</div>
                        <div class="pa-cross-grid">
                            <a href="/private-limited-company-registration/mumbai" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Pvt Ltd Registration</div><div class="pa-card-sub">Mumbai</div></div></a>
                            <a href="/income-tax-return/mumbai" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Income Tax Return</div><div class="pa-card-sub">Mumbai</div></div></a>
                            <a href="/gst-registration/mumbai" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">GST Registration</div><div class="pa-card-sub">Mumbai</div></div></a>
                            <a href="/startup-registration/mumbai" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Startup Registration</div><div class="pa-card-sub">Mumbai</div></div></a>
                            <a href="/trademark-registration/mumbai" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Trademark Registration</div><div class="pa-card-sub">Mumbai</div></div></a>
                            <a href="/payroll-services/mumbai" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Payroll Services</div><div class="pa-card-sub">Mumbai</div></div></a>
                        </div>
                    </div>
        </div>
    </div>
</section>

<!-- CONTENT FRESHNESS FOOTER -->
<section class="content-section" style="padding:32px;">
    <div class="content-container">
        <div class="text-content" style="font-size:13px;color:var(--text-muted);">
            <p><strong>Content Created:</strong> 24 March 2026 &nbsp;|&nbsp; <strong>Last Updated:</strong> <span id="lastUpdatedFooter">24 March 2026</span> &nbsp;|&nbsp; <strong>Next Review:</strong> 24 June 2026 &nbsp;|&nbsp; <strong>Reviewed By:</strong> CA &amp; CS Team, Patron Accounting LLP</p>
            <p>This content is reviewed quarterly for accuracy of RBI circulars, NDI Rules amendments, and DPIIT FDI Policy updates. Freshness Tier: 1.</p>
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
