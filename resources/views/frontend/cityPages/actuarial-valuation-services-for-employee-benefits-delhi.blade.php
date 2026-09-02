
@extends('layouts.service-app')

<!-- External Dependencies (loaded by master layout in production) -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Barlow:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,400&family=DM+Sans:opsz,wght@9..40,400;9..40,500;9..40,600;9..40,700&display=swap" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

@section('meta')
    <title>Actuarial Valuation in Delhi - AS 15 & Ind AS 19 Reports</title>
    <meta name="description" content="CA-led actuarial valuation in Delhi. Gratuity, leave encashment, pension under AS 15, Ind AS 19. Social Security Code 2020 impact. Serving CP, Okhla, Rohini. Call +91 945 945 6700.">
    <link rel="canonical" href="/actuarial-valuation-services-for-employee-benefits/delhi">
    <meta name="robots" content="index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1">
    <meta property="og:title" content="Actuarial Valuation in Delhi - AS 15 & Ind AS 19 Reports">
    <meta property="og:description" content="CA-led actuarial valuation in Delhi. Gratuity, leave encashment, pension under AS 15, Ind AS 19. Social Security Code 2020 impact. Serving CP, Okhla, Rohini. Call +91 945 945 6700.">
    <meta property="og:url" content="/actuarial-valuation-services-for-employee-benefits/delhi">
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="Patron Accounting">
    <meta property="og:image" content="https://www.patronaccounting.com/images/og-default-square.png">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="1200">
    <meta property="og:image:type" content="image/png">
    <meta property="og:image:secure_url" content="https://www.patronaccounting.com/images/og-default-square.png">
    <meta property="og:image:alt" content="Patron Accounting - partner you can rely on">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Actuarial Valuation in Delhi - AS 15 & Ind AS 19 Reports">
    <meta name="twitter:description" content="CA-led actuarial valuation in Delhi. Gratuity, leave encashment, pension under AS 15, Ind AS 19. Social Security Code 2020 impact. Serving CP, Okhla, Rohini. Call +91 945 945 6700.">
    <meta name="twitter:image" content="https://www.patronaccounting.com/images/og-default-square.png">
@endsection

@section('schema')
    <script type="application/ld+json">{
  "@context": "https://schema.org",
  "@graph": [
    {
      "@type": "Service",
      "name": "Actuarial Valuation in Delhi - AS 15 & Ind AS 19 Reports",
      "description": "CA-led actuarial valuation in Delhi. Gratuity, leave encashment, pension under AS 15, Ind AS 19. Social Security Code 2020 impact. Serving CP, Okhla, Rohini. Call +91 945 945 6700.",
      "url": "https://www.patronaccounting.com/actuarial-valuation-services-for-employee-benefits/delhi",
      "serviceType": "Actuarial Valuation in Delhi - AS 15 & Ind AS 19 Reports",
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
        "url": "https://www.patronaccounting.com/actuarial-valuation-services-for-employee-benefits/delhi",
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
          "name": "Actuarial Valuation",
          "item": "https://www.patronaccounting.com/actuarial-valuation-services-for-employee-benefits"
        },
        {
          "@type": "ListItem",
          "position": 3,
          "name": "Actuarial Valuation in Delhi - AS 15 & Ind AS 19 Reports",
          "item": "https://www.patronaccounting.com/actuarial-valuation-services-for-employee-benefits/delhi"
        }
      ]
    },
    {
      "@type": "FAQPage",
      "mainEntity": [
        {
          "@type": "Question",
          "name": "Is actuarial valuation mandatory for all Delhi companies?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Mandatory for all companies under AS 15/Ind AS 19 with defined benefit plans (gratuity/leave). 10+ employees = Payment of Gratuity Act. Virtually every mid/large Delhi company."
          }
        },
        {
          "@type": "Question",
          "name": "How much does actuarial valuation cost?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "From Rs 5,000 (gratuity only, small company). Gratuity + leave Rs 10,000-25,000. Multi-scheme Rs 25,000-50,000. Quarterly Ind AS 19 Rs 15,000-30,000/quarter."
          }
        },
        {
          "@type": "Question",
          "name": "How does Social Security Code 2020 affect gratuity?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "50% wage rule: basic must be ≥50% of CTC. 25-50% liability increase for CTC-heavy. Fixed-term employees eligible after 1 year. Past service cost recognition required."
          }
        },
        {
          "@type": "Question",
          "name": "What is difference between AS 15 and Ind AS 19?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Gains/losses: AS 15 in P&L, Ind AS 19 in OCI. Past service cost: AS 15 vested/unvested split, Ind AS 19 fully immediate. Ind AS 19 requires quarterly + sensitivity analysis."
          }
        },
        {
          "@type": "Question",
          "name": "How long does valuation take?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "5-7 business days from data submission. 3-5 days with Patron payroll integration. Quarterly updates 3-5 days."
          }
        },
        {
          "@type": "Question",
          "name": "Can LIC certificate replace actuarial report?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "No. LIC certificates explicitly state they are not AS 15/Ind AS 19 certifications. Qualified actuary report mandatory. Auditors cannot accept LIC certificates."
          }
        },
        {
          "@type": "Question",
          "name": "When is quarterly valuation needed?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Listed companies and Ind AS 19 entities need quarterly actuarial updates for interim financial reporting (AS 25). Missing = audit qualification risk."
          }
        },
        {
          "@type": "Question",
          "name": "Can a CA firm arrange actuarial valuation?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Yes. Actuary computes (IAI member). CA coordinates: data prep, report review, audit disclosure, auditor liaison. Patron provides complete audit-ready package."
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
                        Actuarial Valuation Services in Delhi: CA-Coordinated Gratuity, Leave, and Pension Valuations for Audit Compliance
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
                            <p class="mb-0 text-dark benefit-paragraph"><span>Documents:</span> Employee data (DOB, joining date, salary), attrition rates, previous actuarial reports, benefit scheme rules</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Fees:</span> Starting from Rs 5,000 per valuation for small companies in Delhi</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Eligibility:</span> All companies with 10+ employees. Listed companies under Ind AS 19. All companies under AS 15.</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Timeline:</span> Actuarial valuation report delivered within 5-7 business days of data submission</p>
                        </div>
                    </div>

                    <p class="mb-4 fw-bold" style="color: var(--blue); font-size: 15px;">Actuarial valuation for gratuity, leave, and pension across Delhi corporates, manufacturers, and BPOs.</p>

                    <div class="hero-cta">
                        <a href="tel:+919459456700" class="btn-video text-decoration-none">
                            <span class="play-circle"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="width:14px;height:14px;color:#fff"><path d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/></svg></span>
                            Call +91 945 945 6700
                        </a>
                        <a href="mailto:sales@patronaccounting.com" class="btn-sample text-decoration-none">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="width:18px;height:18px;"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,12 2,6"/></svg>
                            Email Us
                        </a>
                        <a href="https://wa.me/919459456700?text=Hi%2C%20I%20need%20actuarial%20valuation%20in%20Delhi." target="_blank" class="btn-sample text-decoration-none" rel="noopener">
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
                                            'service'  => 'Actuarial Valuation in Delhi',
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
    'ctaText'    => 'Actuarial valuation with Social Security Code 2020 impact, AS 15/Ind AS 19, and audit coordination.',
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
            <a href="#overview-section" class="toc-btn active">Overview</a><a href="#what-section" class="toc-btn">What Is It</a><a href="#who-section" class="toc-btn">Who Needs</a><a href="#services-section" class="toc-btn">Challenges</a><a href="#procedure-section" class="toc-btn">Process</a><a href="#documents-section" class="toc-btn">Documents</a><a href="#challenges-section" class="toc-btn">AS 15 vs Ind AS 19</a><a href="#fees-section" class="toc-btn">Pricing</a><a href="#timeline-section" class="toc-btn">Why Patron</a><a href="#benefits-section" class="toc-btn">Quality</a><a href="#comparison-section" class="toc-btn">Patron vs Others</a><a href="#faq-section" class="toc-btn">FAQs</a>
        </div>
        <button class="toc-arrow right" id="tocRight">&#10095;</button>
    </div>
</div>

<!-- SECTION 2: OVERVIEW / INTRO + TL;DR -->
<section class="content-section" id="overview-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Actuarial Valuation in Delhi: Gratuity, Leave, and Social Security Code 2020</h2>
            <div class="content-text">
                <div class="highlight-box" style="margin-bottom:20px;">
                    <p><strong>&#128204; TL;DR - Actuarial Valuation in Delhi Services at a Glance</strong></p>
                    <p>Actuarial valuation = certified reports for gratuity/leave/pension under AS 15 or Ind AS 19 (PUC method). Social Security Code 2020 (21 Nov 2025): 50% wage rule + 1-year fixed-term gratuity = 25-50% liability increase. 10+ employees = mandatory. Listed = quarterly. From Rs 5,000/valuation. 5-7 days delivery. Patron Rohini office coordinates CA + actuary.</p>
                </div>
                <p>Every company with 10+ employees needs actuarial valuation. For a comprehensive overview, see our <a href="#">Actuarial Valuation</a> national guide.</p><div class="table-responsive-wrapper"><table><thead><tr><th>Parameter</th><th>Detail</th></tr></thead><tbody><tr><td>What Gets Valued</td><td>Gratuity, leave encashment, pension, post-retirement medical, ESOP</td></tr><tr><td>Standards</td><td>AS 15 (Revised 2005) or Ind AS 19. PUC method mandatory</td></tr><tr><td>2025-26 Change</td><td>Social Security Code 2020: 50% wage rule, 1-year fixed-term gratuity</td></tr><tr><td>Cost From</td><td>Rs 5,000 (small company); Rs 15,000-50,000 (large/multi-scheme)</td></tr><tr><td>Delivery</td><td>5-7 business days from data submission</td></tr></tbody></table></div><p</p>
                <p>Social Security Code 2020 (21 Nov 2025): 50% wage rule potentially increases gratuity liability 25-50% for CTC-heavy structures. Fixed-term employees eligible after 1 year. Plan amendment = past service cost (Ind AS 19: immediate P&L / AS 15: vested/unvested). CP corporates, Okhla manufacturers, Jasola BPOs, CGO Complex PSUs, Aerocity MNCs - all need 31 March 2026 valuations incorporating these changes. Patron coordinates CA + qualified actuary.</p>
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
                <h2 class="section-title">What Is Actuarial Valuation?</h2>
                <div class="content-text what-is-definition">
                    
                    <p><strong>Definition:</strong> Estimating present value of future employee benefit obligations (gratuity/leave/pension) using PUC method with demographic assumptions (attrition, mortality, retirement) and financial assumptions (discount rate from govt bond yields, salary growth).</p><p><strong>Output:</strong> DBO (Defined Benefit Obligation), current service cost, interest cost, actuarial gains/losses. Under Ind AS 19: remeasurements in OCI. Under AS 15: in P&L.</p><p><strong>Why mandatory:</strong> Without actuarial report, auditors cannot issue unqualified opinion. Financial statements don't comply with accounting standards. S.143(3)(e) Companies Act.</p><p>See <a href="/statutory-audit">Statutory Audit</a> for audit services.</p>

                </div>
                <div class="highlight-box" style="margin-top:20px;">
                    <p><strong>Key Terms for Actuarial Valuation in Delhi:</strong></p>
                    <p><strong>PUC Method:</strong> Projected Unit Credit. Attributes benefit to each service year. Prescribed by both AS 15 and Ind AS 19.</p><p><strong>DBO:</strong> Defined Benefit Obligation. Present value of all future benefit payments earned to date.</p><p><strong>Social Security Code 2020:</strong> Effective 21 Nov 2025. 50% wage rule for CTC-based salary. Fixed-term gratuity after 1 year. 25-50% liability increase.</p><p><strong>Remeasurements:</strong> Actuarial gains/losses. Ind AS 19: OCI. AS 15: P&L. Different accounting treatment = different P&L impact.</p><p><strong>IALM:</strong> Indian Assured Lives Mortality table. Used for mortality assumption in actuarial calculations.</p>

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
                            <text x="100" y="170" font-size="10" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial, sans-serif">Actuarial Valuation in Delhi</text>
                        </svg>
                    </div>
                    <div class="illustration-badge">
                        <span>Actuarial</span>
                        <strong>AS 15 / Ind AS 19</strong>
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
            <h2 class="section-title">Who Needs Actuarial Valuation in Delhi</h2>
            <div class="content-text">
                
                <p><strong>All Companies 10+ Employees (Gratuity):</strong> Payment of Gratuity Act. AS 15/Ind AS 19 require PUC valuation. Covers virtually every mid/large Delhi company.</p><p><strong>Listed/Large Unlisted (Ind AS 19):</strong> BSE/NSE listed, NW >Rs 250Cr, NBFCs, banks. Quarterly valuations for interim reporting. CP/Barakhamba corporates.</p><p><strong>MNCs/GCCs (Aerocity, Jasola):</strong> Global pension/gratuity schemes. IAS 19/US GAAP (ASC 715)/Ind AS 19. Coordination with global actuarial firms.</p><p><strong>BPOs (Jasola, Nehru Place):</strong> 25%+ attrition. Attrition assumption critical. Higher attrition = lower gratuity DBO. Age-wise modelling needed.</p><p><strong>Manufacturers (Okhla, Bawana):</strong> Long-tenured workforce (15-25 years). Substantial gratuity + accumulated leave. SS Code 2020 wage impact significant.</p><p><strong>PSUs (CGO Complex, Lodhi Road):</strong> Pension + post-retirement medical + gratuity. CAG audit compliance.</p>

            </div>
            </div>
        </div>
    </div>
</section>

<!-- SECTION 5: OUR SERVICES -->
<section class="content-section" id="services-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Common Actuarial Valuation Challenges in Delhi</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Service</th><th>What We Do</th></tr></thead>
                    <tbody>
                        <tr><td>SS Code 2020 Not Assessed</td><td>50% wage rule + 1-year fixed-term not incorporated in 31 March 2026 valuations. Understated liability = audit qualification</td></tr><tr><td>LIC Certificate Used Instead</td><td>LIC gratuity fund certificates explicitly state they are NOT AS 15/Ind AS 19 certifications. Auditors cannot accept. Qualified actuary report mandatory</td></tr><tr><td>Late Data → Delayed Audit</td><td>Delhi companies submit data May-June. Creates audit-season bottleneck. Patron payroll integration = data ready 1 April</td></tr><tr><td>Wrong Attrition for BPOs</td><td>Industry-average 15% for Jasola BPO with actual 35% = overstated DBO. Delhi-industry-specific rates needed</td></tr><tr><td>No Quarterly for Listed</td><td>Delhi-listed under Ind AS 19 must update quarterly for interim reporting (AS 25). Skipping = audit qualification risk</td></tr>

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
            <h2 class="section-title">5-Step Actuarial Valuation for Delhi Companies</h2>
            <p class="section-subtitle" style="text-align:left;max-width:100%;">From scoping to audit-ready certified actuarial report.</p>
        </header>
        <div class="steps-container">
            <div class="step-card"><div class="step-content"><span class="step-badge">Step 1-2</span><h3 class="step-title">Scope + Data Collection</h3><p class="step-description">CA reviews benefit schemes (gratuity/leave/pension), determines AS 15 or Ind AS 19, assesses SS Code 2020 impact. Employee data from payroll (instant) or standardised format: DOB, joining date, salary, leave balances, attrition history.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Scoped</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Data ready</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="15" y="5" width="90" height="70" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><text x="60" y="40" font-size="7" fill="#E8712C" font-weight="800" text-anchor="middle" font-family="Arial">PUC</text></svg></div><span class="illustration-label">Method</span><span class="step-number-large">01</span></div></div></div><div class="step-card"><div class="step-content"><span class="step-badge">Step 3</span><h3 class="step-title">Actuarial Computation</h3><p class="step-description">Qualified actuary (IAI Fellow/Associate) performs PUC valuation. Customised assumptions: discount rate (govt bond yield), salary growth (Delhi industry benchmark), attrition (company-specific or industry), IALM mortality. Report under AS 15 or Ind AS 19.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Computed</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Certified</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="20" y="15" width="80" height="50" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><text x="60" y="40" font-size="7" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">DBO</text></svg></div><span class="illustration-label">Valued</span><span class="step-number-large">02</span></div></div></div><div class="step-card"><div class="step-content"><span class="step-badge">Step 4-5</span><h3 class="step-title">CA Review + Audit-Ready Delivery</h3><p class="step-description">CAs review assumptions, mathematical accuracy, standard compliance. Prepare balance sheet disclosure note, DBO reconciliation, sensitivity analysis. Coordinate with statutory auditor. SS Code 2020 past service cost separately disclosed. 5-7 days total.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>CA reviewed</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Audit-ready</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="20" y="10" width="80" height="60" rx="8" fill="#E8F5E9" stroke="#25D366" stroke-width="2"/><path d="M52 40l5 5 12-12" stroke="#25D366" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/></svg></div><span class="illustration-label">Delivered</span><span class="step-number-large">03</span></div></div></div>

        </div>
    </div>
</section>

<!-- SECTION 8: DOCUMENTS REQUIRED -->
<section class="content-section" id="documents-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Documents Required</h2>
            <div class="content-text">
                
                <div class="table-responsive-wrapper"><table><thead><tr><th>Document</th><th>Purpose</th><th>Notes</th></tr></thead><tbody><tr><td>Employee Master Data</td><td>DOB, joining date, salary, designation</td><td>From payroll or standardised format</td></tr><tr><td>Leave Balance Records</td><td>PL/EL/SL per employee</td><td>As on valuation date</td></tr><tr><td>Benefit Scheme Rules</td><td>Gratuity trust deed, leave policy</td><td>Determines valuation type</td></tr><tr><td>Previous Actuarial Report</td><td>DBO reconciliation</td><td>Opening balance needed</td></tr><tr><td>Attrition Data</td><td>Customised assumption</td><td>Age-wise or grade-wise, last 3 years</td></tr><tr><td>Salary Restructuring</td><td>SS Code 2020 impact</td><td>50% wage rule restructured salary</td></tr></tbody></table></div><div class="highlight-box" style="margin-top:20px;"><p><strong>Delhi tip:</strong> Jasola BPOs with 25%+ attrition: provide age-wise attrition data (not flat rate). 35% for under-30 vs 10% for over-40 produces significantly different DBO. Flat assumptions misstate liability by 15-20%. See <a href="/payroll-processing-and-management-services">Payroll Services</a> for integrated data flow.</p></div>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 9: CHALLENGES -->
<section class="content-section" id="challenges-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">AS 15 vs Ind AS 19 Comparison</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Challenge</th><th>Impact</th><th>How Patron Accounting Solves It</th></tr></thead>
                    <tbody>
                        <tr><td>Applicability</td><td>AS 15: Most companies not under Ind AS</td><td>Ind AS 19: Listed, large unlisted (NW >Rs 250Cr), NBFCs, banks</td></tr><tr><td>Actuarial Gains/Losses</td><td>AS 15: Recognised in P&L</td><td>Ind AS 19: Recognised in OCI (not P&L)</td></tr><tr><td>Past Service Cost</td><td>AS 15: Vested immediate, unvested amortised</td><td>Ind AS 19: Fully immediate in P&L</td></tr><tr><td>Interim Valuation</td><td>AS 15: Not specifically required</td><td>Ind AS 19: Required quarterly (AS 25)</td></tr><tr><td>Return on Plan Assets</td><td>AS 15: Expected return recognised</td><td>Ind AS 19: Net interest approach</td></tr><tr><td>Disclosure</td><td>AS 15: Less detailed</td><td>Ind AS 19: Extensive - sensitivity analysis, maturity profile</td></tr>

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
            <h2 class="section-title">Actuarial Valuation Fees in Delhi</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Fee Component</th><th>Amount</th></tr></thead>
                    <tbody>
                        <tr><td>Single Scheme (Gratuity Only)</td><td>Rs 5,000 - Rs 15,000 | Small company (<100 employees)</td></tr><tr><td>Gratuity + Leave Encashment</td><td>Rs 10,000 - Rs 25,000 | Both schemes in single report</td></tr><tr><td>Multi-Scheme (Gratuity + Leave + Pension)</td><td>Rs 25,000 - Rs 50,000 | Large company, PSU, MNC</td></tr><tr><td>Quarterly Ind AS 19 Valuations</td><td>Rs 15,000 - Rs 30,000/quarter | Listed companies, interim reporting</td></tr><tr><td>SS Code 2020 Impact Assessment</td><td>Rs 10,000 - Rs 25,000 | One-time liability change assessment</td></tr><tr><td>Bundled: Valuation + Payroll + Audit</td><td>Custom pricing | Integrated with payroll data flow</td></tr>

                    </tbody>
                </table>
                </div>
                <p style="margin-top:16px;font-size:13px;color:var(--text-muted);font-style:italic;">All fees and charges listed are indicative only and do not constitute a binding offer. Final amounts may vary depending on the volume of work and the complexity involved.</p>
                <p style="margin-top:16px;">Professional service charges for drafting, filing, and representation are separate from the statutory fees. The exact fee depends on the complexity of the case, disputed amount, and number of hearings required. Contact us for a detailed quote.</p>
                <p style="margin-top:16px;"><strong>Get a free Actuarial Valuation in Delhi consultation - <a href="tel:+919459456700">Call +91 945 945 6700</a> or <a href="https://wa.me/919459456700?text=Hi%2C%20I%20need%20actuarial%20valuation%20in%20Delhi." target="_blank" rel="noopener">WhatsApp us</a>. No-obligation assessment.</strong></p>
            </div>
        </div>
    </div>
</section>

<!-- SECTION 11: TIMELINE -->
<section class="content-section" id="timeline-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Why Choose Patron for Actuarial Valuation in Delhi?</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Stage</th><th>Estimated Timeline</th></tr></thead>
                    <tbody>
                        <tr><td>Delhi Office (Rohini)</td><td>Walk-in for CP corporates, Okhla manufacturers, Jasola BPOs, Barakhamba listed companies, CGO PSUs</td></tr><tr><td>CA + Actuary Coordinated</td><td>Not standalone actuarial report. Full package: data prep, valuation, CA review, audit disclosure, auditor liaison</td></tr><tr><td>Payroll Integration</td><td>Employee data from Patron payroll = zero manual prep. Data ready 1 April. Fastest turnaround in Delhi</td></tr><tr><td>SS Code 2020 Expert</td><td>50% wage rule + 1-year fixed-term impact assessed. Past service cost correctly computed. FY 2025-26 ready</td></tr><tr><td>From Rs 5,000/Valuation</td><td>Small company single scheme. Multi-scheme from Rs 25K. Quarterly from Rs 15K. Bundled with payroll/audit</td></tr>

                    </tbody>
                </table>
                </div>
                <div class="highlight-box" style="margin-top:16px;">
                    
                    <p><strong>Critical:</strong> 31 March 2026 financials MUST incorporate SS Code 2020 changes. LIC certificates ≠ actuarial reports. Listed companies need quarterly updates. Late data = delayed audit. Patron payroll integration = data on Day 1.</p>

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
            <h2 class="section-title">Patron vs Standalone Actuarial Firms</h2>
        </div>
        <div class="features-grid"><article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><h3 class="feature-title">Patron: Full Package</h3><p class="feature-text">Data prep from payroll + valuation + CA review + audit disclosure + auditor coordination. One partner, audit-ready.</p></article><article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 9v2m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><h3 class="feature-title">Standalone: Report Only</h3><p class="feature-text">Actuarial report delivered. No data prep help. No audit disclosures. No auditor coordination. Company bridges the gaps.</p></article><article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M14 2H6a2 2 0 00-2 2v16a2 2 0 002 2h12a2 2 0 002-2V8z"/><path d="M14 2v6h6M16 13H8M16 17H8"/></svg></div><h3 class="feature-title">Patron: Payroll Integrated</h3><p class="feature-text">Employee data flows from payroll. Zero manual file prep. Zero data errors. Data ready 1 April. Fastest turnaround.</p></article><article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><path d="M12 6v6l4 2"/></svg></div><h3 class="feature-title">Patron: SS Code Expert</h3><p class="feature-text">50% wage rule + 1-year fixed-term assessed. Past service cost computed per AS 15/Ind AS 19. FY 2025-26 compliant.</p></article></div>
    </div>
</section>

<!-- SECTION 12A: SOCIAL PROOF -->
<section class="content-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Trusted by 10,000+ Businesses Across India</h2>
            <div class="content-text">
                
                <p><strong>Trust Banner:</strong> 10,000+ Businesses | 4.9 Google Rating | 50,000+ Documents Filed | 15+ Years</p><blockquote style="border-left:3px solid var(--orange);padding:16px 20px;margin:20px 0;background:var(--orange-lighter);border-radius:0 var(--radius-sm) var(--radius-sm) 0;"><p style="font-style:italic;margin-bottom:8px;">"500-employee corporate CP. Patron coordinated gratuity + leave valuation with SS Code 2020 impact. Past service cost correctly in P&L under Ind AS 19. Auditors accepted immediately."</p><p style="font-weight:700;font-size:14px;margin:0;">- CFO, Listed Corporate, CP</p></blockquote><blockquote style="border-left:3px solid var(--orange);padding:16px 20px;margin:20px 0;background:var(--orange-lighter);border-radius:0 var(--radius-sm) var(--radius-sm) 0;"><p style="font-style:italic;margin-bottom:8px;">"Jasola BPO 1,000 agents. Patron used age-wise attrition (35% under-30, 10% over-40) instead of flat 15%. DBO 18% lower than previous actuarial firm. Realistic and audit-approved."</p><p style="font-weight:700;font-size:14px;margin:0;">- HR Director, BPO, Jasola</p></blockquote>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 13: SELF-FILING vs PROFESSIONAL COMPARISON -->
<section class="content-section" id="comparison-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Patron vs Others Detailed</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Factor</th><th>Patron (CA + Actuary)</th><th>Standalone Actuarial Firm</th></tr></thead>
                    <tbody>
                        <tr><td>Data Preparation</td><td>From payroll integration (zero manual)</td><td>Company must prepare data file</td></tr><tr><td>Audit Disclosure</td><td>Balance sheet note, DBO recon, sensitivity</td><td>Not provided</td></tr><tr><td>Auditor Coordination</td><td>Direct liaison with statutory auditor</td><td>Company intermediates</td></tr><tr><td>SS Code 2020</td><td>Impact assessed, past service cost computed</td><td>May not address proactively</td></tr><tr><td>Bundling</td><td>Valuation + payroll + audit = one partner</td><td>Valuation only</td></tr><tr><td>Turnaround</td><td>5-7 days (3-5 with payroll integration)</td><td>7-14 days typical</td></tr>

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
                
                <ul><li><a href="#">Actuarial Valuation (National)</a></li><li><a href="/statutory-audit">Statutory Audit</a></li><li><a href="/payroll-processing-and-management-services">Payroll Processing</a></li><li><a href="/accounting-services">Accounting Services</a></li><li><a href="/income-tax-return">Income Tax Return</a></li></ul>

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
                
                <p><strong>Companies Act S.133/129:</strong> Accounting standards mandatory. Financial statements per applicable standards. Non-compliance = audit qualification S.143(3)(e).</p><p><strong>AS 15 (Revised 2005):</strong> PUC method mandatory for defined benefit plans. Gains/losses in P&L. Past service cost: vested immediate, unvested amortised.</p><p><strong>Ind AS 19:</strong> Remeasurements in OCI. Past service cost fully immediate. Sensitivity analysis. Quarterly for listed.</p><p><strong>Payment of Gratuity Act 1972:</strong> 10+ employees. Gratuity = 15/26 × salary × years.</p><p><strong>SS Code 2020 (21 Nov 2025):</strong> 50% wage rule. 1-year fixed-term. 25-50% liability increase. No PT in Delhi.</p>

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
                    <h2 class="faq-expanded__title">FAQs - Actuarial Valuation in Delhi</h2>
                    <p class="faq-expanded__lead">Common questions about actuarial valuation, gratuity, Social Security Code 2020, AS 15 vs Ind AS 19 for Delhi companies.</p>
                    @include('partials.bigin-form', [
                        'variant'  => 'compact',
                        'service'  => 'Actuarial Valuation in Delhi',
                        'city'     => 'Delhi',
                    ])
                </aside>
                <div class="faq-expanded__list">
                    <div class="faq-expanded__item" id="faq-1">
                        <h3 class="faq-expanded__q">Is actuarial valuation mandatory for all Delhi companies?</h3>
                        <div class="faq-expanded__a"><p>Mandatory for all companies under AS 15/Ind AS 19 with defined benefit plans (gratuity/leave). 10+ employees = Payment of Gratuity Act. Virtually every mid/large Delhi company.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-2">
                        <h3 class="faq-expanded__q">How much does actuarial valuation cost?</h3>
                        <div class="faq-expanded__a"><p>From Rs 5,000 (gratuity only, small company). Gratuity + leave Rs 10,000-25,000. Multi-scheme Rs 25,000-50,000. Quarterly Ind AS 19 Rs 15,000-30,000/quarter.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-3">
                        <h3 class="faq-expanded__q">How does Social Security Code 2020 affect gratuity?</h3>
                        <div class="faq-expanded__a"><p>50% wage rule: basic must be ≥50% of CTC. 25-50% liability increase for CTC-heavy. Fixed-term employees eligible after 1 year. Past service cost recognition required.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-4">
                        <h3 class="faq-expanded__q">What is difference between AS 15 and Ind AS 19?</h3>
                        <div class="faq-expanded__a"><p>Gains/losses: AS 15 in P&L, Ind AS 19 in OCI. Past service cost: AS 15 vested/unvested split, Ind AS 19 fully immediate. Ind AS 19 requires quarterly + sensitivity analysis.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-5">
                        <h3 class="faq-expanded__q">How long does valuation take?</h3>
                        <div class="faq-expanded__a"><p>5-7 business days from data submission. 3-5 days with Patron payroll integration. Quarterly updates 3-5 days.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-6">
                        <h3 class="faq-expanded__q">Can LIC certificate replace actuarial report?</h3>
                        <div class="faq-expanded__a"><p>No. LIC certificates explicitly state they are not AS 15/Ind AS 19 certifications. Qualified actuary report mandatory. Auditors cannot accept LIC certificates.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-7">
                        <h3 class="faq-expanded__q">When is quarterly valuation needed?</h3>
                        <div class="faq-expanded__a"><p>Listed companies and Ind AS 19 entities need quarterly actuarial updates for interim financial reporting (AS 25). Missing = audit qualification risk.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-8">
                        <h3 class="faq-expanded__q">Can a CA firm arrange actuarial valuation?</h3>
                        <div class="faq-expanded__a"><p>Yes. Actuary computes (IAI member). CA coordinates: data prep, report review, audit disclosure, auditor liaison. Patron provides complete audit-ready package.</p></div>
                    </div>
                </div>
            </div>


            <!-- Quick Answers -->
            <div class="highlight-box" style="margin-top:32px;">
                <p><strong>Quick Answers</strong></p>
                <p><strong>Chhoti company ko bhi chahiye?</strong> Haan, 10+ employees hain to Payment of Gratuity Act + AS 15 ke under mandatory hai.</p><p><strong>SS Code 2020 se gratuity kitni badhegi?</strong> Basic salary CTC ka 50% se kam hai to 25-50% liability badh sakti hai naye wage rule se.</p><p><strong>Report kitne din mein milega?</strong> Data submit karne ke 5-7 din. Payroll integration ho to 3-5 din.</p>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 18: URGENCY CTA -->
<section class="content-section" style="background: var(--orange-lighter) !important; border-left: 4px solid var(--orange);">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">31 March 2026 Financials - SS Code Impact Assessed?</h2>
            <div class="content-text">
                
                <p>31 March 2026 financials MUST incorporate SS Code 2020 changes. LIC certificates not acceptable. Listed companies need quarterly. Late data delays audit. Patron payroll integration = data Day 1. From Rs 5,000/valuation.</p><p><strong><a href="tel:+919459456700">Call +91 945 945 6700</a> or <a href="https://wa.me/919459456700?text=Hi%2C%20I%20need%20actuarial%20valuation%20in%20Delhi." target="_blank" rel="noopener">WhatsApp us</a>.</strong></p>

            </div>
        </div>
    </div>
</section>

<!-- CONCLUSION + CTA BLOCK (Dark) -->
<section class="content-section" style="background: var(--blue) !important;">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title" style="color:#FFFFFF !important;">Get Audit-Ready Actuarial Valuation in Delhi</h2>
            <div class="content-text" style="text-align:left;">
                
                <p style="color:rgba(255,255,255,0.85);">Actuarial valuation in Delhi provides certified gratuity, leave, and pension reports under AS 15 and Ind AS 19. Social Security Code 2020 has changed gratuity calculations fundamentally for 31 March 2026 financials.</p><p style="color:rgba(255,255,255,0.85);">Patron's Rohini office provides CA + actuary coordinated service: data from payroll, computation by qualified actuary, CA review, audit disclosures, and auditor liaison. One partner from employee data to audit sign-off.</p><p style="color:rgba(255,255,255,0.85);">With 10,000+ businesses, 50,000+ documents, and a 4.9 Google rating, Patron delivers audit-ready actuarial valuations that meet the highest standards.</p>

            </div>
            <div style="display:flex;gap:14px;flex-wrap:wrap;margin-top:24px;">
                <a href="tel:+919459456700" style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:var(--orange);color:#fff;border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#128222; Call +91 945 945 6700</a>
                <a href="https://wa.me/919459456700?text=Hi%2C%20I%20need%20actuarial%20valuation%20in%20Delhi." target="_blank" style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:#25D366;color:#fff;border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;" rel="noopener">&#128172; WhatsApp Us</a>
                <a href="mailto:sales@patronaccounting.com?subject=Actuarial%20Valuation%20Delhi&body=Hi%2C%20I%20need%20actuarial%20valuation%20in%20Delhi." style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:transparent;color:#fff;border:2px solid rgba(255,255,255,0.3);border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#9993;&#65039; Email Us</a>
            </div>
            <p style="color:rgba(255,255,255,0.7);font-size:13px;margin-top:16px;">Book a Free Consultation - No Obligation.</p>
        </div>
    </div>
</section>

<!-- GSTAT STATE BENCH CITY PAGES (32 Pages) -->
<section class="content-section" style="padding:48px 32px;background:var(--gray-50);">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title" style="text-align:center;margin-bottom:12px;">Actuarial Valuation - Available Cities</h2>
            <p style="text-align:center;color:var(--text-muted);font-size:15px;margin-bottom:40px;">Expert actuarial valuation across major Indian cities</p>
      
            <div class="pa-city-block" style="margin-bottom:40px;"><div class="pa-block-title">City-Wise Actuarial Valuation</div><div class="pa-block-sub">Select your city</div><div class="pa-city-grid"><a href="#" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Pune</div><div class="pa-card-sub">Maharashtra</div></div></a><a href="/actuarial-valuation-services-for-employee-benefits/mumbai" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Mumbai</div><div class="pa-card-sub">Maharashtra</div></div></a><div class="pa-city-card" style="opacity:0.6; pointer-events:none; border:2px solid var(--orange); position:relative;"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Delhi</div><div class="pa-card-sub">Delhi NCR</div></div><span style="position:absolute; top:6px; right:8px; font-size:10px; color:var(--orange); font-weight:700; text-transform:uppercase; letter-spacing:0.5px;">You're here</span></div><a href="#" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Gurugram</div><div class="pa-card-sub">Haryana</div></div></a></div></div><div class="pa-city-block"><div class="pa-block-title">Related Services in Delhi</div><div class="pa-block-sub">Employee benefit compliance</div><div class="pa-cross-grid"><a href="/statutory-audit/delhi" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Statutory Audit</div><div class="pa-card-sub">Delhi</div></div></a><a href="/accounting-services/delhi" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Accounting Services</div><div class="pa-card-sub">Delhi</div></div></a><a href="/income-tax-return/delhi" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Income Tax Return</div><div class="pa-card-sub">Delhi</div></div></a><a href="/gst-registration/delhi" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">GST Registration</div><div class="pa-card-sub">Delhi</div></div></a><a href="/tax-audit/delhi" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Tax Audit</div><div class="pa-card-sub">Delhi</div></div></a><a href="#" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">GST Return Filing</div><div class="pa-card-sub">Delhi</div></div></a></div></div>
        </div>
    </div>
</section>

<!-- CONTENT FRESHNESS FOOTER -->
<section class="content-section" style="padding:32px;">
    <div class="content-container">
        <div class="text-content" style="font-size:13px;color:var(--text-muted);">
            <p><strong>Content Created:</strong> 06 April 2026 &nbsp;|&nbsp; <strong>Last Updated:</strong> <span id="lastUpdatedFooter">06 April 2026</span> &nbsp;|&nbsp; <strong>Next Review:</strong> 06 July 2026 &nbsp;|&nbsp; <strong>Reviewed By:</strong> CA &amp; CS Team, Patron Accounting LLP</p>
            <p>This page is reviewed quarterly. Social Security Code 2020 (effective 21 Nov 2025), AS 15, Ind AS 19, PUC method, and gratuity thresholds are verified.</p>
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
