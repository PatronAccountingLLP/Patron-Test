
@extends('layouts.service-app')

<!-- External Dependencies (loaded by master layout in production) -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Barlow:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,400&family=DM+Sans:opsz,wght@9..40,400;9..40,500;9..40,600;9..40,700&display=swap" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

@section('meta')
    <title>LLP Annual Compliance Mumbai – AOC-4, MGT-7 &amp; Form 11</title>
    <meta name="description" content="CA-assisted LLP compliance in Mumbai. Form 8, Form 11, ITR-5, audit, GST, PT, partner changes. Rs 100/day penalty. ROC Everest House. Call +91 945 945 6700.">
    <link rel="canonical" href="/llp-compliance/mumbai">
    <meta name="robots" content="index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1">
    <meta property="og:title" content="LLP Annual Compliance Mumbai – AOC-4, MGT-7 &amp; Form 11">
    <meta property="og:description" content="CA-assisted LLP compliance in Mumbai. Form 8, Form 11, ITR-5, audit, GST, PT, partner changes. Rs 100/day penalty. ROC Everest House. Call +91 945 945 6700.">
    <meta property="og:url" content="/llp-compliance/mumbai">
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="Patron Accounting">
    <meta property="og:image" content="https://www.patronaccounting.com/images/og-default-square.png">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="1200">
    <meta property="og:image:type" content="image/png">
    <meta property="og:image:secure_url" content="https://www.patronaccounting.com/images/og-default-square.png">
    <meta property="og:image:alt" content="Patron Accounting - partner you can rely on">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="LLP Annual Compliance Mumbai – AOC-4, MGT-7 &amp; Form 11">
    <meta name="twitter:description" content="CA-assisted LLP compliance in Mumbai. Form 8, Form 11, ITR-5, audit, GST, PT, partner changes. Rs 100/day penalty. ROC Everest House. Call +91 945 945 6700.">
    <meta name="twitter:image" content="https://www.patronaccounting.com/images/og-default-square.png">
@endsection

@section('schema')
    <script type="application/ld+json">{
  "@context": "https://schema.org",
  "@graph": [
    {
      "@type": "Service",
      "name": "LLP Compliance in Mumbai",
      "description": "CA-assisted LLP compliance in Mumbai. Form 8, Form 11, ITR-5, audit, GST, PT, partner changes. Rs 100/day penalty. ROC Everest House. Call +91 945 945 6700.",
      "url": "https://www.patronaccounting.com/llp-compliance/mumbai",
      "serviceType": "LLP Compliance in Mumbai",
      "areaServed": {
        "@type": "City",
        "name": "Mumbai"
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
        "url": "https://www.patronaccounting.com/llp-compliance/mumbai",
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
          "name": "LLP Compliance",
          "item": "https://www.patronaccounting.com/pvt-llp-compliance"
        },
        {
          "@type": "ListItem",
          "position": 3,
          "name": "LLP Compliance in Mumbai",
          "item": "https://www.patronaccounting.com/llp-compliance/mumbai"
        }
      ]
    },
    {
      "@type": "FAQPage",
      "mainEntity": [
        {
          "@type": "Question",
          "name": "Which ROC handles LLP filings in Mumbai?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "ROC Mumbai at Everest House, 100 Marine Lines processes Form 8, Form 11, and event-based filings on MCA V3 portal. ITR-5 on income tax e-filing portal. GST on GST portal. Patron's Marine Lines office adjacent to ROC."
          }
        },
        {
          "@type": "Question",
          "name": "What are the mandatory annual filings?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Three mandatory: Form 11 (Annual Return) by 30 May, Form 8 (Statement of Account & Solvency) by 30 October, ITR-5 by 31 July (non-audit) or 30 September (audit). Plus DIR-3 KYC (triennial), GST returns, TDS returns, Maharashtra PT. Patron manages all in single engagement."
          }
        },
        {
          "@type": "Question",
          "name": "What is the penalty for late filing?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Rs 100 per day per form with NO cap. Applies separately to Form 8 and Form 11. 1-year delay on both: Rs 73,000. 3-year delay: Rs 2,19,000. Plus 2+ years non-filing triggers ROC strike-off risk. ITR-5 late: Rs 5,000/10,000. Patron files on time to prevent all penalties."
          }
        },
        {
          "@type": "Question",
          "name": "When is audit mandatory for an LLP?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "LLP Act audit: turnover > Rs 40 lakh or contribution > Rs 25 lakh. Tax audit (Section 44AB): turnover > Rs 1 crore (Rs 2 crore if cash < 5%). An LLP may need one or both. Patron determines correct requirements and conducts both where applicable."
          }
        },
        {
          "@type": "Question",
          "name": "Does a dormant LLP need to file?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Yes. Every registered LLP must file Form 8, Form 11, and ITR-5 annually regardless of activity. Dormant LLPs file nil returns. Non-filing accumulates Rs 100/day penalty. Patron advises: file nil returns (Rs 5,000/year) or close the LLP (Form 24) to stop obligations."
          }
        },
        {
          "@type": "Question",
          "name": "What is the Section 40(b) remuneration limit?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Partner remuneration deductible within limits: on first Rs 3 lakh book profit or loss - Rs 1,50,000 or 90% (whichever higher); on balance - 60%. Interest on capital up to 12%. Exceeding = disallowed deduction = higher tax. Patron optimises computation for every Mumbai LLP."
          }
        },
        {
          "@type": "Question",
          "name": "What forms for partner changes?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Form 4 (Notice of Change in Partners) within 30 days. If LLP Agreement amended: Form 3 within 30 days. Both carry Rs 100/day penalty. For foreign partners: additionally LLP-I or LLP-II on RBI FIRMS portal. Patron handles all partner change filings for Mumbai LLPs."
          }
        },
        {
          "@type": "Question",
          "name": "Can an LLP be closed?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Yes. Form 24 with ROC if no business for 1+ years or never commenced. All pending returns must be filed first. For dormant LLPs with years of unfiled returns: Patron files pending returns (with penalties) then Form 24 for closure. Often the most cost-effective option."
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
                        LLP Compliance in Mumbai: Form 8, Form 11, ITR-5, Audit, and Annual Filing for Every LLP
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
                            <p class="mb-0 text-dark benefit-paragraph"><span>Form 11:</span> Annual Return due 30 May | Partner details, contributions, changes | All LLPs regardless of activity</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Form 8:</span> Statement of Account &amp; Solvency due 30 October | Assets, liabilities, income, expenditure</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Audit:</span> Mandatory if turnover &gt; Rs 40 lakh or contribution &gt; Rs 25 lakh | Tax audit if turnover &gt; Rs 1 crore</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Penalty:</span> Rs 100/day per form &ndash; NO upper cap | 2 years non-filing = strike-off risk by ROC</p>
                        </div>
                    </div>

                    <p class="mb-4 fw-bold" style="color: var(--blue); font-size: 15px;">Our Mumbai office is adjacent to ROC Everest House &ndash; 10,000+ businesses served with 4.9&#9733; Google rating</p>

                    <div class="hero-cta">
                        <a href="tel:+919459456700" class="btn-video text-decoration-none">
                            <span class="play-circle"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="width:14px;height:14px;color:#fff"><path d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/></svg></span>
                            Call +91 945 945 6700
                        </a>
                        <a href="mailto:sales@patronaccounting.com" class="btn-sample text-decoration-none">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="width:18px;height:18px;"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,12 2,6"/></svg>
                            Email Us
                        </a>
                        <a href="https://wa.me/919459456700?text=Hi%2C%20I%20need%20LLP%20compliance%20services%20in%20Mumbai.%20Please%20share%20details." target="_blank" class="btn-sample text-decoration-none" rel="noopener">
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
                                            'service'  => 'LLP Compliance',
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
    'ctaText'    => 'Get your LLP compliance managed by a CA &amp; CS team adjacent to ROC Mumbai &ndash; accounts to Form 8 to ITR-5 in one integrated engagement.',
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
            <a href="#comparison-section" class="toc-btn">LLP vs Pvt Ltd</a>
            <a href="#faq-section" class="toc-btn">FAQs</a>
        </div>
        <button class="toc-arrow right" id="tocRight">&#10095;</button>
    </div>
</div>

<!-- SECTION 2: OVERVIEW / INTRO + TL;DR -->
<section class="content-section" id="overview-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">LLP Compliance in Mumbai &ndash; Overview</h2>
            <div class="content-text">
                <div class="highlight-box" style="margin-bottom:20px;">
                    <p><strong>&#128204; TL;DR - LLP Compliance Services at a Glance</strong></p>
                    <p>LLP compliance is the set of mandatory annual and event-based filings for every LLP registered under the LLP Act, 2008. Three mandatory annual filings: Form 11 (Annual Return) by 30 May, Form 8 (Statement of Account &amp; Solvency) by 30 October, and ITR-5 by 31 July/30 September. Audit mandatory if turnover &gt; Rs 40 lakh or contribution &gt; Rs 25 lakh. Penalty: Rs 100/day per form with NO cap &ndash; 1-year delay on both forms costs Rs 73,000. 2+ years non-filing triggers ROC strike-off. Even dormant LLPs must file. DIR-3 KYC triennial for all designated partners from 31.03.2026.</p>
                </div>
                <p>Mumbai hosts thousands of LLPs &ndash; professional services at BKC/Fort (CA, CS, legal, consulting), technology partnerships at Powai/Andheri, trading businesses at Fort/Dadar, media production at Andheri/Film City, and real estate advisory across the city. The Rs 100/day uncapped penalty makes timely compliance essential. Learn more about <a href="/pvt-llp-compliance">LLP Compliance across India</a>.</p>
                <p>Patron Accounting's Mumbai office at Marine Lines &ndash; adjacent to ROC Everest House &ndash; provides end-to-end LLP compliance: accounts preparation, statutory audit, Form 8 + Form 11, ITR-5 with Section 40(b) optimised remuneration, GST returns, Maharashtra PT, TDS returns, DIR-3 KYC, event-based filings, and dormant LLP advisory. For <a href="/accounting-services">Accounting Services</a>, see our dedicated page.</p>
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
                <h2 class="section-title">What Is LLP Compliance?</h2>
                <div class="content-text what-is-definition">
                    
                    <p>LLP compliance is the set of annual and event-based regulatory filings every Limited Liability Partnership must complete under the LLP Act, 2008, the Income Tax Act, 1961, and other applicable laws. LLPs are a hybrid structure combining partnership flexibility with corporate limited liability.</p>
                    <p>The two core annual filings are Form 11 (Annual Return &ndash; partner details, contributions, changes) and Form 8 (Statement of Account and Solvency &ndash; financial position, solvency declaration). Both filed on MCA portal. All LLPs must also file ITR-5. LLPs with turnover &gt; Rs 40 lakh or contribution &gt; Rs 25 lakh need statutory audit before Form 8. For tax filing, see <a href="/income-tax-return">Income Tax Return Filing</a>.</p>
                    <p>For Mumbai LLPs, compliance extends to Maharashtra Professional Tax, <a href="/gst-returns">GST Returns</a>, <a href="/tds-return-filing-24q">TDS Returns</a>, and event-based MCA filings. Patron manages all compliance streams in a single engagement.</p>

                </div>
                <div class="highlight-box" style="margin-top:20px;">
                    <p><strong>Key Terms for LLP Compliance:</strong></p>
                    <ul>
                        <li><strong>Form 11:</strong> Annual Return due 30 May &ndash; partner details, contributions, changes</li>
                        <li><strong>Form 8:</strong> Statement of Account &amp; Solvency due 30 October &ndash; financial position, solvency declaration</li>
                        <li><strong>Section 40(b):</strong> Partner remuneration deduction limits &ndash; first Rs 3 lakh: 90%, balance: 60%</li>
                        <li><strong>LLP Act Audit:</strong> Mandatory if turnover &gt; Rs 40 lakh or contribution &gt; Rs 25 lakh</li>
                        <li><strong>Rs 100/day Penalty:</strong> Unlimited daily penalty per overdue form with no cap</li>
                        <li><strong>Form 24:</strong> Voluntary strike-off/closure &ndash; requires all pending returns filed first</li>
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
                            <text x="100" y="170" font-size="10" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial, sans-serif">LLP Compliance</text>
                        </svg>
                    </div>
                    <div class="illustration-badge">
                        <span>CA &amp; CS Managed</span>
                        <strong>LLP Compliance</strong>
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
            <h2 class="section-title">Which Mumbai LLPs Need Compliance?</h2>
            <div class="content-text">
                
                <p><strong>Every registered LLP &ndash; active or dormant</strong> &ndash; Even zero-revenue LLPs must file Form 11, Form 8, and ITR-5 annually. Dormant LLPs accumulate Rs 100/day penalties. Many Powai LLPs incorporated for specific projects that concluded still rack up penalties. Patron advises: file nil returns or close the LLP.</p>
                <p><strong>Professional services LLPs at BKC/Fort</strong> &ndash; CA firms, law firms, consulting firms. Typically need <a href="/statutory-audit">Statutory Audit</a>, GST, TDS, Maharashtra PT. Full compliance cycle.</p>
                <p><strong>Technology LLPs at Powai/Andheri</strong> &ndash; Software, SaaS, IT consulting. Foreign clients (LUT for GST zero-rating), NRI partners, audit-triggering turnover. Integrated compliance needed.</p>
                <p><strong>Trading/manufacturing LLPs at Fort/Dadar/MIDC</strong> &ndash; GST complexity (ITC, e-way bills), seasonal revenue. GST + LLP Act + income tax managed together.</p>
                <p><strong>Media/entertainment LLPs at Andheri/Film City</strong> &ndash; Complex revenue recognition, project-based accounting. Patron provides accounts preparation alongside compliance.</p>
                <p><strong>LLPs with foreign partners</strong> &ndash; FEMA compliance: LLP-I (foreign contribution) and LLP-II (transfer) on RBI FIRMS portal. Integrated with LLP Act filings. For <a href="/llp-incorporation">LLP Registration</a>, see our dedicated page.</p>

            </div>
            </div>
        </div>
    </div>
</section>

<!-- SECTION 5: OUR SERVICES -->
<section class="content-section" id="services-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">LLP Compliance Services Included</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Service</th><th>What We Do</th></tr></thead>
                    <tbody>
                        <tr><td>Accounts Preparation</td><td>Statement of Assets &amp; Liabilities, Income &amp; Expenditure from bank statements, invoices, expenses. Monthly/quarterly/annual basis. MCA-compliant financial statements</td></tr>
                        <tr><td>Statutory Audit (Where Mandatory)</td><td>If turnover &gt; Rs 40 lakh or contribution &gt; Rs 25 lakh. CA audit report before Form 8. For BKC/Fort professional LLPs, audit almost always required</td></tr>
                        <tr><td>Form 11 Filing (Due 30 May)</td><td>LLPIN, partner details (DPIN/DIN), contributions, changes. CS certification if turnover &gt; Rs 5 crore. DSC of designated partner. Patron files by 15 May</td></tr>
                        <tr><td>Form 8 Filing (Due 30 October)</td><td>Solvency declaration, financial statements, turnover category, audit status. CA certified if audited. DSC. Patron files by 15 October</td></tr>
                        <tr><td>ITR-5 Filing</td><td>Income computation, Section 40(b) optimised partner remuneration (first Rs 3 lakh: 90%, balance: 60%), interest on capital (12% max), advance tax reconciliation. Due 31 July/30 September</td></tr>
                        <tr><td>GST Returns</td><td>GSTR-1, GSTR-3B, GSTR-9 (annual if turnover &gt; Rs 2 crore). Monthly/quarterly. Most Mumbai professional services LLPs are GST-registered</td></tr>
                        <tr><td>Maharashtra PT + TDS Returns</td><td>PT registration and returns for LLPs with employees (Rs 2,500/year &gt; Rs 10,000/month salary). TDS 24Q/26Q quarterly. Patron manages both</td></tr>
                        <tr><td>Event-Based Filings + DIR-3 KYC</td><td>Form 3 (agreement change), Form 4 (partner change), Form 15 (office change) &ndash; each within 30 days (Rs 100/day penalty). DIR-3 KYC triennial for all DPIN holders</td></tr>

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
            <h2 class="section-title">LLP Annual Compliance Process in Mumbai</h2>
            <p class="section-subtitle" style="text-align:left;max-width:100%;">Patron files Form 11 by 15 May and Form 8 by 15 October (15-day buffer). ITR-5 with Section 40(b) optimised remuneration. Our Marine Lines office is adjacent to ROC Everest House.</p>
        </header>
        <div class="steps-container">
            <div class="step-card"><div class="step-content"><span class="step-badge">Step 1</span><h3 class="step-title">Close Books &amp; Statutory Audit (April-May)</h3><p class="step-description">Finalise books after 31 March. Prepare Statement of Assets &amp; Liabilities, Income &amp; Expenditure, partner capital accounts. If turnover &gt; Rs 40 lakh or contribution &gt; Rs 25 lakh: CA conducts statutory audit. Patron reconciles books and conducts audit for eligible Mumbai LLPs.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Accounts finalised</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Audit completed</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="15" y="10" width="90" height="65" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><line x1="30" y1="30" x2="90" y2="30" stroke="#F5A623" stroke-width="3" stroke-linecap="round"/><circle cx="85" cy="55" r="10" fill="#E8F5E9" stroke="#10B981" stroke-width="1.2"/><path d="M80 55l3 3 6-6" stroke="#10B981" stroke-width="2" stroke-linecap="round"/></svg></div><span class="illustration-label">Books Ready</span><span class="step-number-large">01</span></div></div></div><div class="step-card"><div class="step-content"><span class="step-badge">Step 2</span><h3 class="step-title">File Form 11 by 30 May</h3><p class="step-description">Annual Return with LLPIN, partner details, contributions, and changes during the year. CS certification if turnover &gt; Rs 5 crore or contribution &gt; Rs 50 lakh. DSC of designated partner. Patron files by 15 May (15-day buffer) for Mumbai LLPs.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Form 11 filed</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>15-day buffer</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="20" y="8" width="80" height="70" rx="4" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><circle cx="60" cy="35" r="15" fill="#FFF3E0" stroke="#F5A623" stroke-width="1.2"/><path d="M53 35l5 5 10-10" stroke="#10B981" stroke-width="2.5" stroke-linecap="round"/></svg></div><span class="illustration-label">Annual Return</span><span class="step-number-large">02</span></div></div></div><div class="step-card"><div class="step-content"><span class="step-badge">Step 3</span><h3 class="step-title">File ITR-5 &amp; Tax Audit (July-September)</h3><p class="step-description">Computation of income with Section 40(b) optimised partner remuneration. ITR-5 by 31 July (non-audit) or 30 September (audit). Tax audit Form 3CD if turnover &gt; Rs 1 crore. Patron files ITR-5 with advance tax reconciliation for Mumbai LLPs.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>ITR-5 filed</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Tax optimised</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="20" y="10" width="80" height="60" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><rect x="35" y="25" width="50" height="8" rx="3" fill="#E8712C" opacity="0.3"/><path d="M80 55l-8 8-5-5" stroke="#10B981" stroke-width="2.5" stroke-linecap="round"/></svg></div><span class="illustration-label">Tax Done</span><span class="step-number-large">03</span></div></div></div><div class="step-card"><div class="step-content"><span class="step-badge">Step 4</span><h3 class="step-title">File Form 8 by 30 October</h3><p class="step-description">Statement of Account &amp; Solvency with solvency declaration, financial statements, turnover category, audit status. DSC of designated partner. Patron files by 15 October for Mumbai LLPs. Plus DIR-3 KYC, GST annual, Maharashtra PT, and TDS returns throughout the year.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Form 8 filed</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Year complete</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="25" y="10" width="70" height="55" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><circle cx="60" cy="35" r="18" fill="#E8F5E9" stroke="#10B981" stroke-width="1.5"/><path d="M52 35l6 6 12-12" stroke="#10B981" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/></svg></div><span class="illustration-label">All Filed</span><span class="step-number-large">04</span></div></div></div>

        </div>
    </div>
</section>

<!-- SECTION 8: DOCUMENTS REQUIRED -->
<section class="content-section" id="documents-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Documents Required for LLP Compliance in Mumbai</h2>
            <div class="content-text">
                
                <ul>
                    <li><strong>Bank Statements:</strong> Full financial year (April-March) for all LLP bank accounts</li>
                    <li><strong>Sales/Service Invoices:</strong> All invoices raised during the year</li>
                    <li><strong>Expense Bills &amp; Receipts:</strong> Rent, utilities, professional fees, salaries, travel</li>
                    <li><strong>Partner Capital/Current Account Details:</strong> Contributions, drawings, remuneration, interest</li>
                    <li><strong>LLP Agreement:</strong> Current version reflecting all amendments</li>
                    <li><strong>Previous Year Financial Statements:</strong> For opening balance verification</li>
                    <li><strong>GST Returns:</strong> Filed GSTR-1 and GSTR-3B for reconciliation</li>
                    <li><strong>TDS Certificates:</strong> Form 26AS / AIS for TDS credit reconciliation</li>
                    <li><strong>DSC of Designated Partners:</strong> Valid Digital Signature Certificates for MCA filing</li>
                </ul>
                <div class="highlight-box" style="margin-top:16px;">
                    <p><strong>Mumbai-Specific Tip:</strong> Many Mumbai professional LLPs have partner remuneration exceeding Section 40(b) limits &ndash; the excess is disallowed, increasing tax liability. Patron computes optimal remuneration within 40(b) limits for every Mumbai LLP, ensuring maximum tax efficiency while maintaining compliance.</p>
                </div>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 9: CHALLENGES -->
<section class="content-section" id="challenges-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Common Challenges in LLP Compliance in Mumbai</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Challenge</th><th>Impact</th><th>How Patron Accounting Solves It</th></tr></thead>
                    <tbody>
                        <tr><td>Dormant LLP Penalty Accumulation</td><td>LLPs that ceased operations but were never closed accumulate Rs 100/day per form. 3-year delay = Rs 2,19,000. Many Powai project-specific LLPs in this situation</td><td>Advise: file nil returns (Rs 5,000/year) or close the LLP (one-time cost) to stop penalty accumulation</td></tr>
                        <tr><td>Section 40(b) Remuneration Limits</td><td>Partner remuneration deductible only within limits. Many Mumbai LLPs pay remuneration exceeding limits &ndash; disallowed deduction = higher tax</td><td>Optimal remuneration computed within 40(b) limits for each partner. Maximum deduction achieved</td></tr>
                        <tr><td>Audit Threshold Confusion</td><td>LLP Act audit (turnover &gt; Rs 40 lakh) vs tax audit (turnover &gt; Rs 1 crore) are different. LLPs may need one, both, or neither</td><td>Correct audit requirements determined for each Mumbai LLP. Both conducted where applicable</td></tr>
                        <tr><td>FEMA for Foreign Partner LLPs</td><td>LLP-I/LLP-II on RBI FIRMS portal required but treated as company-only obligation by many Mumbai LLPs</td><td>FEMA compliance integrated with LLP Act filings. LLP-I/LLP-II managed alongside Form 8/11</td></tr>
                        <tr><td>Strike-Off Risk (2+ Years Non-Filing)</td><td>ROC initiates strike-off for 2+ years non-filing. Struck-off LLP cannot conduct business. Partners may face restrictions</td><td>Pending returns filed urgently. Active status restored. Strike-off notices contested where applicable</td></tr>

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
            <h2 class="section-title">LLP Compliance Fees in Mumbai</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Fee Component</th><th>Amount</th></tr></thead>
                    <tbody>
                        <tr><td>Form 11 / Form 8 Filing Fee</td><td>Rs 50 (contribution up to Rs 1 lakh) to Rs 400 (&gt; Rs 10 lakh) per form</td></tr>
                        <tr><td>Late Filing Penalty (Per Form)</td><td>Rs 100/day &ndash; NO CAP (applies separately to Form 8 and Form 11)</td></tr>
                        <tr><td>ITR-5 Late Filing</td><td>Rs 5,000 (before 31 Dec) / Rs 10,000 (after) &ndash; Section 234F</td></tr>
                        <tr><td>Tax Audit Penalty</td><td>0.5% of turnover or Rs 1.5 lakh (whichever lower) &ndash; Section 271B</td></tr>
                        <tr><td>Patron Fee &ndash; Nil LLP (Annual)</td><td>Starting Rs 5,000/year (Form 11 + Form 8 + ITR-5 nil returns)</td></tr>
                        <tr><td>Patron Fee &ndash; Active LLP without Audit</td><td>Starting Rs 10,000/year (accounts + Form 11 + Form 8 + ITR-5)</td></tr>
                        <tr><td>Patron Fee &ndash; Active LLP with Audit</td><td>Starting Rs 20,000/year (accounts + statutory audit + Form 8 + Form 11 + ITR-5)</td></tr>
                        <tr><td>Patron Fee &ndash; Full Package (GST+TDS+PT)</td><td>Starting Rs 30,000/year (all LLP Act + tax + GST + TDS + PT compliance)</td></tr>
                        <tr><td>Patron Fee &ndash; LLP Closure</td><td>Starting Rs 10,000 (Form 24 + ROC coordination + pending returns)</td></tr>

                    </tbody>
                </table>
                </div>
                <p style="margin-top:16px;font-size:13px;color:var(--text-muted);font-style:italic;">All fees and charges listed are indicative only and do not constitute a binding offer. Final amounts may vary depending on the volume of work and the complexity involved.</p>
                <p style="margin-top:16px;">Professional service charges for drafting, filing, and representation are separate from the statutory fees. The exact fee depends on the complexity of the case, disputed amount, and number of hearings required. Contact us for a detailed quote.</p>
                <p style="margin-top:16px;"><strong>Get a free LLP Compliance consultation - <a href="tel:+919459456700">Call +91 945 945 6700</a> or <a href="https://wa.me/919459456700?text=Hi%2C%20I%20need%20LLP%20compliance%20services%20in%20Mumbai.%20Please%20share%20details." target="_blank" rel="noopener">WhatsApp us</a>. No-obligation assessment.</strong></p>
            </div>
        </div>
    </div>
</section>

<!-- SECTION 11: TIMELINE -->
<section class="content-section" id="timeline-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">LLP Compliance Calendar (FY 2025-26)</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Stage</th><th>Estimated Timeline</th></tr></thead>
                    <tbody>
                        <tr><td>April 2026</td><td>Finalise accounts for FY 2025-26 | Prepare financial statements</td></tr>
                        <tr><td>30 May 2026</td><td>Form 11 (Annual Return) | Patron files by 15 May</td></tr>
                        <tr><td>15 June 2026</td><td>Advance tax 1st instalment | Income tax portal</td></tr>
                        <tr><td>31 July 2026</td><td>ITR-5 (non-audit cases) + TDS Return Q1 (April-June)</td></tr>
                        <tr><td>30 September 2026</td><td>ITR-5 (audit cases) + Tax Audit Form 3CD + DIR-3 KYC (triennial cycle)</td></tr>
                        <tr><td>30 October 2026</td><td>Form 8 (Statement of Account &amp; Solvency) | Patron files by 15 October</td></tr>
                        <tr><td>Ongoing</td><td>GST Returns (GSTR-1/3B monthly 11th/20th or quarterly) | TDS quarterly | Maharashtra PT</td></tr>
                        <tr><td>Event-Based</td><td>Form 3/4/15/5 (partner/office/name changes) within 30 days of event | Rs 100/day penalty</td></tr>

                    </tbody>
                </table>
                </div>
                <div class="highlight-box" style="margin-top:16px;">
                    
                    <p><strong>Rs 100/day unlimited penalty makes every day of delay expensive.</strong> A 30-day delay on two forms costs Rs 6,000. A 6-month delay costs Rs 36,500. A 1-year delay costs Rs 73,000. For dormant Mumbai LLPs not filing for years, accumulated penalty often exceeds the cost of closing the LLP entirely. Patron files Form 11 by 15 May and Form 8 by 15 October with a 15-day buffer.</p>

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
            <h2 class="section-title">Why Choose Patron for LLP Compliance in Mumbai</h2>
        </div>
        <div class="features-grid">
            <article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><h3 class="feature-title">Adjacent to ROC Everest House</h3><p class="feature-text">Form 8/11 processed by ROC Mumbai on MCA V3 portal. For LLPs facing strike-off notices or needing urgent pending return filings, proximity to ROC enables fastest coordination.</p></article>
            <article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg></div><h3 class="feature-title">Integrated LLP Act + Tax + GST</h3><p class="feature-text">Accounts, statutory audit, Form 8 + 11, ITR-5, tax audit, GST, TDS, Maharashtra PT, and DIR-3 KYC &ndash; all managed by a single team. No coordination gaps between different professionals.</p></article>
            <article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="2" y="3" width="20" height="14" rx="2"/><path d="M8 21h8M12 17v4"/></svg></div><h3 class="feature-title">Section 40(b) Optimisation</h3><p class="feature-text">Partner remuneration computed within prescribed limits, maximising tax-deductible remuneration. Many Mumbai LLPs overpay (disallowed) or underpay (leaving benefits on the table).</p></article>
            <article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M14 2H6a2 2 0 00-2 2v16a2 2 0 002 2h12a2 2 0 002-2V8z"/><path d="M14 2v6h6"/></svg></div><h3 class="feature-title">Dormant LLP Advisory</h3><p class="feature-text">For ceased LLPs: file nil returns (cheapest ongoing) or close via Form 24 (one-time cost, stops all future obligations). Prevents Rs 73,000+/year penalty accumulation.</p></article>
        </div>
    </div>
</section>

<!-- SECTION 12A: SOCIAL PROOF -->
<section class="content-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Trusted by Mumbai LLPs</h2>
            <div class="content-text">
                
                <p><strong>Trust Signals:</strong> 10,000+ Businesses | 4.9 Google Rating | 50,000+ Documents Filed | 15+ Years</p>
                <blockquote style="border-left:3px solid var(--orange);padding:12px 20px;margin:16px 0;background:var(--orange-lighter);border-radius:0 var(--radius-sm) var(--radius-sm) 0;">
                    <p style="font-style:italic;margin-bottom:8px;">&ldquo;Our LLP had not filed returns for 2 years and the penalty was already Rs 1.5 lakh. Patron filed all pending returns in 10 days and advised us to close the LLP to stop future accumulation. No other firm offered the closure advisory.&rdquo;</p>
                    <p style="font-size:13px;font-weight:700;color:var(--blue);margin:0;">&mdash; Partner, Consulting LLP, BKC</p>
                </blockquote>
                <p>Offices in Pune, Mumbai, Delhi, and Gurugram serving LLPs with annual compliance, GST, income tax, and MCA filings.</p>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 13: SELF-FILING vs PROFESSIONAL COMPARISON -->
<section class="content-section" id="comparison-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">LLP vs Private Limited Company &ndash; Compliance Comparison</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Parameter</th><th>LLP</th><th>Private Limited Company</th></tr></thead>
                    <tbody>
                        <tr><td>Annual Return</td><td>Form 11 (due 30 May)</td><td>MGT-7 (due 60 days from AGM)</td></tr>
                        <tr><td>Financial Statements</td><td>Form 8 (due 30 October)</td><td>AOC-4 (due 30 days from AGM)</td></tr>
                        <tr><td>AGM</td><td>Not required</td><td>Mandatory every year</td></tr>
                        <tr><td>Mandatory Audit</td><td>Only if turnover &gt; Rs 40 lakh or contribution &gt; Rs 25 lakh</td><td>Always required (statutory auditor mandatory)</td></tr>
                        <tr><td>Board Meetings</td><td>Not required</td><td>Minimum 4 per year</td></tr>
                        <tr><td>Late Filing Penalty</td><td>Rs 100/day per form (NO CAP)</td><td>Rs 100/day + additional fees</td></tr>
                        <tr><td>Strike-Off Trigger</td><td>2 years non-filing</td><td>2 years non-filing</td></tr>
                        <tr><td>Income Tax Return</td><td>ITR-5</td><td>ITR-6</td></tr>
                        <tr><td>DIN/DPIN KYC</td><td>Triennial DIR-3 KYC for DPIN</td><td>Triennial DIR-3 KYC for DIN</td></tr>

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
                    <li><a href="/pvt-llp-compliance">LLP Compliance (India Overview)</a></li>
                    <li><a href="/private-limited-company-compliance">Private Limited Company Compliance</a></li>
                    <li><a href="/accounting-services">Accounting Services</a></li>
                    <li><a href="/statutory-audit">Statutory Audit</a></li>
                    <li><a href="/income-tax-return">Income Tax Return Filing</a></li>
                    <li><a href="/gst-returns">GST Returns</a></li>
                    <li><a href="/tds-return-filing-24q">TDS Return Filing</a></li>
                    <li><a href="/llp-incorporation">LLP Registration</a></li>
                </ul>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 15A: LEGAL FRAMEWORK -->
<section class="content-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Legal &amp; Compliance Framework for LLP</h2>
            <div class="content-text">
                
                <ul>
                    <li><strong>Section 34, LLP Act:</strong> Maintenance of books of accounts</li>
                    <li><strong>Section 35, LLP Act:</strong> Annual return (Form 11) within 60 days of FY end</li>
                    <li><strong>Rule 24:</strong> Statement of Account &amp; Solvency (Form 8) within 30 days from end of 6 months from FY end</li>
                    <li><strong>LLP Act Audit:</strong> If turnover &gt; Rs 40 lakh or contribution &gt; Rs 25 lakh</li>
                    <li><strong>Form 11 CS Certification:</strong> If turnover &gt; Rs 5 crore or contribution &gt; Rs 50 lakh</li>
                    <li><strong>Section 40(b), IT Act:</strong> Partner remuneration deduction limits</li>
                    <li><strong>Section 44AB, IT Act:</strong> Tax audit if turnover &gt; Rs 1 crore (Rs 2 crore with &lt; 5% cash)</li>
                    <li><strong>Penalty:</strong> Rs 100/day per form (no cap); strike-off for 2+ years</li>
                    <li><strong>Event-Based:</strong> Form 3 (agreement), Form 4 (partners), Form 15 (office), Form 5 (name) &ndash; each within 30 days</li>
                    <li><strong>FEMA:</strong> LLP-I/LLP-II for foreign partner LLPs on RBI FIRMS portal</li>
                    <li><strong>ROC Mumbai:</strong> Everest House, 100 Marine Lines, Mumbai 400020</li>
                </ul>
                <p><strong>Filing Portals:</strong> <a href="https://www.mca.gov.in" target="_blank" rel="noopener">mca.gov.in</a> | <a href="https://www.incometax.gov.in" target="_blank" rel="noopener">incometax.gov.in</a></p>

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
                    <h2 class="faq-expanded__title">Frequently Asked Questions &ndash; LLP Compliance in Mumbai</h2>
                    <p class="faq-expanded__lead">Get answers about Form 8, Form 11, ITR-5, audit thresholds, dormant LLPs, Section 40(b), partner changes, and LLP closure for Mumbai LLPs.</p>
                    @include('partials.bigin-form', [
                        'variant'  => 'compact',
                        'service'  => 'LLP Compliance',
                        'city'     => 'Mumbai',
                    ])
                </aside>
                <div class="faq-expanded__list">
                    <div class="faq-expanded__item" id="faq-1">
                        <h3 class="faq-expanded__q">Which ROC handles LLP filings in Mumbai?</h3>
                        <div class="faq-expanded__a"><p>ROC Mumbai at Everest House, 100 Marine Lines processes Form 8, Form 11, and event-based filings on MCA V3 portal. ITR-5 on income tax portal. GST on GST portal. Patron's Marine Lines office is adjacent to ROC Everest House for any coordination needed.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-2">
                        <h3 class="faq-expanded__q">What are the mandatory annual filings?</h3>
                        <div class="faq-expanded__a"><p>Three mandatory: Form 11 (Annual Return) by 30 May, Form 8 (Statement of Account &amp; Solvency) by 30 October, ITR-5 by 31 July (non-audit) or 30 September (audit). Plus DIR-3 KYC (triennial), GST returns, TDS returns, Maharashtra PT. Patron manages all in single engagement for Mumbai LLPs.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-3">
                        <h3 class="faq-expanded__q">What is the penalty for late filing?</h3>
                        <div class="faq-expanded__a"><p>Rs 100 per day per form with NO cap. Separately for Form 8 and Form 11. 1-year delay on both: Rs 73,000. 3-year delay: Rs 2,19,000. Plus 2+ years non-filing triggers strike-off risk. ITR-5 late: Rs 5,000/10,000. Patron files on time to prevent all penalties for Mumbai LLPs.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-4">
                        <h3 class="faq-expanded__q">When is audit mandatory for an LLP?</h3>
                        <div class="faq-expanded__a"><p>LLP Act audit: turnover &gt; Rs 40 lakh or contribution &gt; Rs 25 lakh. Tax audit (Section 44AB): turnover &gt; Rs 1 crore (Rs 2 crore if cash &lt; 5%). An LLP may need one, both, or neither. Patron determines correct requirements and conducts both for eligible Mumbai LLPs.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-5">
                        <h3 class="faq-expanded__q">Does a dormant LLP need to file?</h3>
                        <div class="faq-expanded__a"><p>Yes. Every registered LLP must file Form 8, Form 11, and ITR-5 annually regardless of activity. Dormant LLPs file nil returns. Non-filing accumulates Rs 100/day. Patron advises: file nil returns annually (Rs 5,000/year) or close the LLP (Form 24) to stop all obligations and penalty.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-6">
                        <h3 class="faq-expanded__q">What is the Section 40(b) remuneration limit?</h3>
                        <div class="faq-expanded__a"><p>Partner remuneration deductible within limits: first Rs 3 lakh book profit or loss &ndash; Rs 1,50,000 or 90% (whichever higher); balance &ndash; 60%. Interest on capital up to 12%. Exceeding = disallowed deduction = higher tax. Patron optimises computation for every Mumbai LLP.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-7">
                        <h3 class="faq-expanded__q">What forms for partner changes?</h3>
                        <div class="faq-expanded__a"><p>Form 4 (Notice of Change in Partners) within 30 days. If LLP Agreement amended: Form 3 within 30 days. Both carry Rs 100/day penalty. For foreign partners: additionally LLP-I or LLP-II on RBI FIRMS portal. Patron handles all partner change filings for Mumbai LLPs.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-8">
                        <h3 class="faq-expanded__q">Can an LLP be closed?</h3>
                        <div class="faq-expanded__a"><p>Yes. Form 24 with ROC if no business for 1+ years or never commenced. All pending returns must be filed first. For dormant LLPs with unfiled returns: Patron files all pending (with penalties) then Form 24. Often the most cost-effective option for dormant Mumbai LLPs facing accumulated penalties.</p></div>
                    </div>
                </div>
            </div>


            <!-- Quick Answers -->
            <div class="highlight-box" style="margin-top:32px;">
                <p><strong>Quick Answers</strong></p>
                <p><strong>LLP mein har saal kya file karna padta hai?</strong> Form 11 (Annual Return) 30 May tak. Form 8 (Statement of Account) 30 October tak. ITR-5 31 July ya 30 September tak. Audit zaruri hai agar turnover Rs 40 lakh se zyada. Late filing pe Rs 100/din penalty bina limit ke.</p>
                <p><strong>LLP dormant hai, kuch business nahi &ndash; phir bhi file karna padta hai?</strong> Haan! Nil returns file karo. File nahi kiya toh Rs 100/din/form penalty lagegi. 2 saal nahi file kiya toh ROC strike-off kar sakta hai. Patron Rs 5,000/year mein nil returns file karta hai. Ya LLP band karo Form 24 se.</p>
                <p><strong>Partner ka remuneration kitna de sakte hain?</strong> Section 40(b): pehle Rs 3 lakh book profit pe 90%. Baaki book profit pe 60%. Capital pe interest 12% tak. Isse zyada diya toh tax mein disallowed hoga.</p>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 18: URGENCY CTA -->
<section class="content-section" style="background: var(--orange-lighter) !important; border-left: 4px solid var(--orange);">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Don't Let Rs 100/Day Penalties Accumulate &ndash; Get Your LLP Compliant Today</h2>
            <div class="content-text">
                
                <p>Form 11 is due 30 May &ndash; just 60 days after FY end. Form 8 is due 30 October. Rs 100/day unlimited penalty applies to each form separately. A 1-year delay on both forms costs Rs 73,000. For dormant LLPs, accumulated penalties often exceed the cost of closing the LLP entirely. 2+ years of non-filing triggers ROC strike-off risk.</p>
                <p><strong>Get your LLP compliant today &ndash; <a href="tel:+919459456700">Call +91 945 945 6700</a> or <a href="https://wa.me/919459456700?text=Hi%2C%20I%20need%20LLP%20compliance%20services%20in%20Mumbai." target="_blank" rel="noopener">WhatsApp us</a>.</strong></p>

            </div>
        </div>
    </div>
</section>

<!-- CONCLUSION + CTA BLOCK (Dark) -->
<section class="content-section" style="background: var(--blue) !important;">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title" style="color:#FFFFFF !important;">Get End-to-End LLP Compliance in Mumbai</h2>
            <div class="content-text" style="text-align:left;">
                
                <p style="color:rgba(255,255,255,0.85);font-size:16px;line-height:1.7;">LLP compliance in Mumbai covers the complete regulatory cycle for thousands of LLPs &ndash; from professional services at BKC/Fort to technology partnerships at Powai, from trading businesses at Fort/Dadar to media production at Andheri. The Rs 100/day uncapped penalty makes timely filing essential.</p>
                <p style="color:rgba(255,255,255,0.85);font-size:16px;line-height:1.7;">Patron Accounting's Mumbai office at Marine Lines &ndash; adjacent to ROC Everest House &ndash; provides end-to-end services: accounts preparation, statutory audit, Form 8 + Form 11 with 15-day buffer, ITR-5 with Section 40(b) optimised remuneration, GST returns, Maharashtra PT, TDS returns, DIR-3 KYC, event-based filings, FEMA for foreign partners, and dormant LLP advisory.</p>
                <p style="color:rgba(255,255,255,0.85);font-size:16px;line-height:1.7;">With offices in Pune, Mumbai, Delhi, and Gurugram, 10,000+ businesses served, and 4.9 Google rating, Patron Accounting LLP delivers compliant LLP management across India.</p>

            </div>
            <div style="display:flex;gap:14px;flex-wrap:wrap;margin-top:24px;">
                <a href="tel:+919459456700" style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:var(--orange);color:#fff;border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#128222; Call +91 945 945 6700</a>
                <a href="https://wa.me/919459456700?text=Hi%2C%20I%20need%20LLP%20compliance%20services%20in%20Mumbai.%20Please%20share%20details." target="_blank" style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:#25D366;color:#fff;border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;" rel="noopener">&#128172; WhatsApp Us</a>
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
            <h2 class="section-title" style="text-align:center;margin-bottom:12px;">LLP Compliance Across India</h2>
            <p style="text-align:center;color:var(--text-muted);font-size:15px;margin-bottom:40px;">Patron Accounting handles LLP compliance in major cities with integrated LLP Act, tax, and GST filing expertise.</p>
      
            <div class="pa-city-block" style="margin-bottom:40px;">
                        <div class="pa-block-title">LLP Compliance in Other Cities</div>
                        <div class="pa-block-sub">Professional LLP compliance across India</div>
                        <div class="pa-city-grid">
                            <a href="/pvt-llp-compliance/pune" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Pune</div><div class="pa-card-sub">Maharashtra</div></div></a>
                            <div class="pa-city-card" style="opacity:0.6; pointer-events:none; border:2px solid var(--orange); position:relative;"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Mumbai</div><div class="pa-card-sub">Maharashtra</div></div><span style="position:absolute; top:6px; right:8px; font-size:10px; color:var(--orange); font-weight:700; text-transform:uppercase; letter-spacing:0.5px;">You're here</span></div>
                            <a href="/pvt-llp-compliance/delhi" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Delhi</div><div class="pa-card-sub">Delhi NCR</div></div></a>
                            <a href="/pvt-llp-compliance/gurugram" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Gurugram</div><div class="pa-card-sub">Haryana</div></div></a>
                        </div>
                    </div>
                    <div class="pa-city-block">
                        <div class="pa-block-title">Related Services in Mumbai</div>
                        <div class="pa-block-sub">End-to-end business compliance</div>
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
            <p>This content is reviewed quarterly for accuracy of MCA rules, LLP Act amendments, and tax provisions. Freshness Tier: 1.</p>
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
