
@extends('layouts.service-app')

<!-- External Dependencies (loaded by master layout in production) -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Barlow:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,400&family=DM+Sans:opsz,wght@9..40,400;9..40,500;9..40,600;9..40,700&display=swap" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

@section('meta')
    <title>Transfer of Shares Gurugram - SH-4, Stamp Duty & Process</title>
    <meta name="description" content="CA/CS-assisted share transfer in Gurugram. SH-4, stamp duty, FC-TRS, FEMA, demat, ROFR, capital gains. Serving Cyber City, Golf Course Road. Call +91 945 945 6700.">
    <link rel="canonical" href="/transfer-of-shares/gurugram">
    <meta name="robots" content="index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1">
    <meta property="og:title" content="Transfer of Shares Gurugram - SH-4, Stamp Duty & Process">
    <meta property="og:description" content="CA/CS-assisted share transfer in Gurugram. SH-4, stamp duty, FC-TRS, FEMA, demat, ROFR, capital gains. Serving Cyber City, Golf Course Road. Call +91 945 945 6700.">
    <meta property="og:url" content="/transfer-of-shares/gurugram">
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="Patron Accounting">
    <meta property="og:image" content="https://www.patronaccounting.com/images/og-default-square.png">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="1200">
    <meta property="og:image:type" content="image/png">
    <meta property="og:image:secure_url" content="https://www.patronaccounting.com/images/og-default-square.png">
    <meta property="og:image:alt" content="Patron Accounting - partner you can rely on">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Transfer of Shares Gurugram - SH-4, Stamp Duty & Process">
    <meta name="twitter:description" content="CA/CS-assisted share transfer in Gurugram. SH-4, stamp duty, FC-TRS, FEMA, demat, ROFR, capital gains. Serving Cyber City, Golf Course Road. Call +91 945 945 6700.">
    <meta name="twitter:image" content="https://www.patronaccounting.com/images/og-default-square.png">
@endsection

@section('schema')
    <script type="application/ld+json">{
  "@context": "https://schema.org",
  "@graph": [
    {
      "@type": "Service",
      "name": "Transfer of Shares in Gurugram | SH-4",
      "description": "CA/CS-assisted share transfer in Gurugram. SH-4, stamp duty, FC-TRS, FEMA, demat, ROFR, capital gains. Serving Cyber City, Golf Course Road. Call +91 945 945 6700.",
      "url": "https://www.patronaccounting.com/transfer-of-shares/gurugram",
      "serviceType": "Transfer of Shares in Gurugram | SH-4",
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
          "name": "Transfer of Shares: SH-4 and Stamp Duty",
          "item": "https://www.patronaccounting.com/transfer-of-shares"
        },
        {
          "@type": "ListItem",
          "position": 3,
          "name": "Transfer of Shares in Gurugram | SH-4",
          "item": "https://www.patronaccounting.com/transfer-of-shares/gurugram"
        }
      ]
    },
    {
      "@type": "FAQPage",
      "mainEntity": [
        {
          "@type": "Question",
          "name": "How to transfer shares in a private company?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Review AoA restrictions (ROFR, pre-emption), execute SH-4 with stamp duty, deliver within 60 days, obtain Board approval, receive new certificate within one month. Demat companies: submit DIS to DP for off-market transfer. Patron manages the complete process."
          }
        },
        {
          "@type": "Question",
          "name": "What is stamp duty on share transfer?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Physical: 0.25% of consideration. Demat: 0.015% (auto-collected). Demat is approximately 16x cheaper. On Rs 10 lakh: Rs 2,500 (physical) vs Rs 150 (demat). Rule 9B makes demat mandatory for non-small companies from June 2025."
          }
        },
        {
          "@type": "Question",
          "name": "What is FC-TRS?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "FEMA form filed on RBI FIRMS within 60 days when shares transfer between resident and non-resident. Requires valuation at FMV, FIRC, KYC, Board Resolution. Penalty for non-filing: up to 3x transaction amount + Rs 5,000/day."
          }
        },
        {
          "@type": "Question",
          "name": "Can the company refuse a transfer?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Yes, on AoA-permitted grounds. Board must communicate refusal with reasons within 30 days (Section 58). Aggrieved party can appeal to NCLT within 30 days. Common grounds: ROFR not completed, shares not fully paid."
          }
        },
        {
          "@type": "Question",
          "name": "What is the tax on share transfer?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Unlisted: LTCG at 12.5% if held >24 months, STCG at slab rate if <24 months. Section 50CA deems FMV. Gifts to relatives exempt under 56(2)(x). NR transferors face TDS under Section 195."
          }
        },
        {
          "@type": "Question",
          "name": "What is ROFR?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Right of First Refusal - AoA/SHA clause requiring shares be offered to existing shareholders at same price/terms before external sale. 15-30 day acceptance period. External sale only after written refusal."
          }
        },
        {
          "@type": "Question",
          "name": "Is demat mandatory?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "From June 2025, non-small companies must use demat (Rule 9B). Small companies (paid-up ≤Rs 4 Cr AND turnover ≤Rs 40 Cr) exempt. Most Gurugram startups post-Series A exceed threshold."
          }
        },
        {
          "@type": "Question",
          "name": "How long does transfer take?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Physical: 30-45 days. Demat: 5-10 days. Cross-border: 35-60 days. Patron manages timelines to meet buyer/investor deadlines. Quick Answers Share transfer kaise hota hai? SH-4 sign karo, stamp duty lagao, 60 din mein company ko do, Board approve karega, naya certificate 1 mahine mein. Demat mein DIS se. Stamp duty kitni? Physical: 0.25%. Demat: 0.015%. Demat 16x sasta. NRI ko transfer? Haan, FEMA FC-TRS 60 din mein RBI FIRMS par. FMV par ya usse zyada."
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
                        Transfer of Shares in Gurugram: SH-4, Stamp Duty, and FEMA Compliance
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
                            <p class="mb-0 text-dark benefit-paragraph"><span>SH-4:</span> Instrument of transfer signed by transferor and transferee, stamped and witnessed</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Stamp Duty:</span> 0.25% (physical) | 0.015% (demat) | Demat mandatory for non-small companies from June 2025</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Deadline:</span> SH-4 delivered within 60 days | New certificate within 1 month | FC-TRS within 60 days</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Cross-Border:</span> FC-TRS on RBI FIRMS portal within 60 days for resident-to-NR or NR-to-resident transfers</p>
                        </div>
                    </div>

                    <p class="mb-4 fw-bold" style="color: var(--blue); font-size: 15px;">Share transfers for startup founders, investors, MNC subsidiaries, and family successions across Gurugram.</p>

                    <div class="hero-cta">
                        <a href="tel:+919459456700" class="btn-video text-decoration-none">
                            <span class="play-circle"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="width:14px;height:14px;color:#fff"><path d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/></svg></span>
                            Call +91 945 945 6700
                        </a>
                        <a href="mailto:sales@patronaccounting.com" class="btn-sample text-decoration-none">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="width:18px;height:18px;"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,12 2,6"/></svg>
                            Email Us
                        </a>
                        <a href="https://wa.me/919459456700?text=Hi%2C%20I%20need%20share%20transfer%20services%20for%20my%20Gurugram%20company." target="_blank" class="btn-sample text-decoration-none">
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
                                            'service'  => 'Transfer of Shares in Gurugram',
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
    'ctaText'    => 'Share transfer with SH-4, stamp duty, FC-TRS, ROFR management, and capital gains advisory from Gurugram.',
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
            <a href="#overview-section" class="toc-btn active">Overview</a><a href="#what-section" class="toc-btn">Physical Transfer</a><a href="#who-section" class="toc-btn">Demat (Rule 9B)</a><a href="#services-section" class="toc-btn">Cross-Border</a><a href="#procedure-section" class="toc-btn">Services</a><a href="#documents-section" class="toc-btn">Documents</a><a href="#challenges-section" class="toc-btn">Capital Gains</a><a href="#fees-section" class="toc-btn">Stamp Duty</a><a href="#timeline-section" class="toc-btn">Timeline</a><a href="#benefits-section" class="toc-btn">Why Patron</a><a href="#comparison-section" class="toc-btn">Transfer vs Trans.</a><a href="#faq-section" class="toc-btn">FAQs</a>
        </div>
        <button class="toc-arrow right" id="tocRight">&#10095;</button>
    </div>
</div>

<!-- SECTION 2: OVERVIEW / INTRO + TL;DR -->
<section class="content-section" id="overview-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Share Transfer in Gurugram: Physical, Demat, and Cross-Border Procedures</h2>
            <div class="content-text">
                <div class="highlight-box" style="margin-bottom:20px;">
                    <p><strong>&#128204; TL;DR - Transfer of Shares in Gurugram Services at a Glance</strong></p>
                    <p>Transferring shares requires Form SH-4, stamp duty (0.25% physical / 0.015% demat), delivery within 60 days, Board approval, and new certificate within one month. From June 2025, non-small companies must use demat (Rule 9B). Cross-border transfers require FEMA compliance: pricing at FMV, FC-TRS on RBI FIRMS within 60 days. Capital gains tax applies. Private companies must restrict transfers through AoA (ROFR, pre-emption).</p>
                </div>
                <p>Gurugram sees high volume of share transfers across all scenarios. DLF Cyber City startup founders do secondary sales, Golf Course Road MNCs restructure shareholding. For a comprehensive overview, refer to our <a href="/transfer-of-shares">Transfer of Shares</a> national guide.</p><div class="table-responsive-wrapper"><table><thead><tr><th>Scenario</th><th>Form</th><th>Stamp Duty</th><th>FEMA</th><th>Timeline</th><th>Gurugram Example</th></tr></thead><tbody><tr><td>Resident to Resident (physical)</td><td>SH-4</td><td>0.25%</td><td>N/A</td><td>30-45 days</td><td>Co-founder selling to partner</td></tr><tr><td>Resident to Resident (demat)</td><td>DIS via DP</td><td>0.015%</td><td>N/A</td><td>5-10 days</td><td>Rule 9B compliant companies</td></tr><tr><td>Resident to Non-Resident</td><td>SH-4/DIS + FC-TRS</td><td>0.25%/0.015%</td><td>FC-TRS 60 days</td><td>35-60 days</td><td>Founder selling to foreign VC</td></tr><tr><td>Non-Resident to Resident</td><td>SH-4/DIS + FC-TRS</td><td>0.25%/0.015%</td><td>FC-TRS 60 days</td><td>35-60 days</td><td>Foreign investor exit</td></tr><tr><td>Gift/Family</td><td>SH-4 + Gift Deed</td><td>0.25%</td><td>FC-TRS if NR</td><td>30-45 days</td><td>Promoter succession</td></tr></tbody></table></div><p</p>
                <p>ROC Haryana at Chandigarh (from 16 February 2026) is the ROC for all Gurugram companies. Patron manages end-to-end: AoA review, ROFR notice management, SH-4 drafting, stamp duty, Board Resolution, register update, certificate issuance, and FC-TRS for cross-border transfers.</p>
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
                <h2 class="section-title">Step-by-Step Physical Transfer Process</h2>
                <div class="content-text what-is-definition">
                    
                    <p><strong>Step 1: Review AoA and SHA</strong> - Check for ROFR, pre-emption, Board approval requirements, lock-in. If SHA exists, check tag-along, drag-along. Learn more about <a href="/legal-drafting">Legal Drafting</a> for SHA.</p><p><strong>Step 2: Comply with ROFR</strong> - If AoA requires ROFR, offer shares to existing shareholders first at same price/terms. 15-30 day acceptance period. Proceed with external buyer only after written refusal.</p><p><strong>Step 3: Execute SH-4</strong> - Both parties sign with witness. Include: company CIN, share details, consideration, stamp duty (0.25%). Cancel stamps.</p><p><strong>Step 4: Deliver within 60 days</strong> - Submit to company: SH-4, original certificate, transferee PAN/address.</p><p><strong>Step 5: Board Approval</strong> - Board reviews AoA compliance, passes resolution. Can refuse with 30-day written notice (Section 58).</p><p><strong>Step 6: New Certificate</strong> - Cancel old, update Register of Members, issue new within 1 month. File BEN-1/BEN-2 if 10%+ SBO triggered. For NR transfers: file FC-TRS within 60 days (see <a href="/fdi-compliance">FDI Compliance</a>).</p>

                </div>
                <div class="highlight-box" style="margin-top:20px;">
                    <p><strong>Key Terms for Transfer of Shares in Gurugram:</strong></p>
                    <p><strong>Form SH-4:</strong> Statutory instrument of transfer signed by transferor, transferee, and witnesses with stamp duty affixed.</p><p><strong>ROFR:</strong> Right of First Refusal - AoA/SHA clause requiring shares be offered to existing shareholders first before external sale.</p><p><strong>Rule 9B:</strong> MCA mandate from June 2025 requiring non-small private companies to hold/transfer shares in demat form only.</p><p><strong>FC-TRS:</strong> FEMA form filed on RBI FIRMS within 60 days for transfers between residents and non-residents.</p><p><strong>Section 50CA:</strong> Deems Fair Market Value as consideration if actual consideration is less, for capital gains computation.</p>

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
                            <text x="100" y="170" font-size="10" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial, sans-serif">Transfer of Shares in Gurugram</text>
                        </svg>
                    </div>
                    <div class="illustration-badge">
                        <span>Share Transfer</span>
                        <strong>Gurugram SH-4</strong>
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
            <h2 class="section-title">Demat Transfer (Rule 9B Mandate)</h2>
            <div class="content-text">
                
                <p><strong>Rule 9B Mandate:</strong> From June 30, 2025, every private company (except small companies under Section 2(85)) must issue and transfer shares in demat form only. Non-small Gurugram companies cannot use physical SH-4.</p><p><strong>Process:</strong> Transferor submits Delivery Instruction Slip (DIS) to Depository Participant. Off-market transfer executed. Stamp duty (0.015%) auto-collected by NSDL/CDSL. RTA updates records. No SH-4, no physical certificates. Settlement: T+2 days.</p><p><strong>Stamp duty saving:</strong> 0.015% vs 0.25% = approximately 16x cheaper. On Rs 10 lakh transfer: Rs 150 (demat) vs Rs 2,500 (physical).</p><p><strong>Small company exemption:</strong> Paid-up capital up to Rs 4 crore AND turnover up to Rs 40 crore. Many early-stage Gurugram startups qualify. Patron advises on Rule 9B applicability and assists with demat conversion.</p>

            </div>
            </div>
        </div>
    </div>
</section>

<!-- SECTION 5: OUR SERVICES -->
<section class="content-section" id="services-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Cross-Border Transfers (FEMA FC-TRS)</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Service</th><th>What We Do</th></tr></thead>
                    <tbody>
                        <tr><td>Resident to Non-Resident</td><td>Shares at NOT LESS than FMV (protects against undervaluation). FC-TRS within 60 days on RBI FIRMS via AD bank</td></tr><tr><td>Non-Resident to Resident</td><td>Shares at NOT MORE than FMV (prevents excess forex outflow). Same FC-TRS requirement within 60 days</td></tr><tr><td>NR to NR</td><td>Limited FEMA (no FC-TRS if both on repatriation basis). Common for foreign VC selling to another fund</td></tr><tr><td>Land-Border Country</td><td>Transfers to/from China, Bangladesh etc. require prior FIFP approval regardless of sector</td></tr><tr><td>Valuation for FEMA</td><td>SEBI-registered Category I Merchant Banker or CA using DCF/NAV. Mandatory attachment for FC-TRS</td></tr><tr><td>FEMA Penalty</td><td>Non-filing of FC-TRS: up to 3x transaction amount + Rs 5,000/day continuing default</td></tr>

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
            <h2 class="section-title">Share Transfer Services in Gurugram</h2>
            <p class="section-subtitle" style="text-align:left;max-width:100%;">End-to-end share transfer covering AoA compliance, SH-4/demat execution, FEMA FC-TRS, and capital gains advisory.</p>
        </header>
        <div class="steps-container">
            <div class="step-card"><div class="step-content"><span class="step-badge">Step 1</span><h3 class="step-title">AoA Review + ROFR Management</h3><p class="step-description">Review transfer restrictions, draft ROFR notices, manage acceptance/refusal process, ensure AoA and SHA compliance before executing transfer.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>AoA compliant</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>ROFR cleared</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="15" y="5" width="90" height="70" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><line x1="30" y1="25" x2="90" y2="25" stroke="#F5A623" stroke-width="3" stroke-linecap="round"/></svg></div><span class="illustration-label">AoA Cleared</span><span class="step-number-large">01</span></div></div></div><div class="step-card"><div class="step-content"><span class="step-badge">Step 2</span><h3 class="step-title">SH-4 / Demat Execution + Stamp Duty</h3><p class="step-description">Physical: prepare SH-4, compute stamp duty (0.25%), ensure proper execution. Demat: coordinate DIS with DP, 0.015% auto-collected. Rule 9B compliance verified.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Transfer executed</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Stamp duty paid</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="20" y="15" width="80" height="50" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><text x="60" y="40" font-size="11" fill="#E8712C" font-weight="800" text-anchor="middle" font-family="Arial">SH-4</text></svg></div><span class="illustration-label">Executed</span><span class="step-number-large">02</span></div></div></div><div class="step-card"><div class="step-content"><span class="step-badge">Step 3</span><h3 class="step-title">Board Approval + Certificate + FC-TRS</h3><p class="step-description">Board approves transfer. Old certificate cancelled, new issued within 1 month. Register updated. For NR transfers: FC-TRS filed on RBI FIRMS within 60 days. Capital gains computed.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Board approved</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Fully compliant</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="20" y="10" width="80" height="60" rx="8" fill="#E8F5E9" stroke="#25D366" stroke-width="2"/><path d="M52 40l5 5 12-12" stroke="#25D366" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/></svg></div><span class="illustration-label">Complete</span><span class="step-number-large">03</span></div></div></div>

        </div>
    </div>
</section>

<!-- SECTION 8: DOCUMENTS REQUIRED -->
<section class="content-section" id="documents-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Documents Required by Transfer Mode</h2>
            <div class="content-text">
                
                <div class="table-responsive-wrapper"><table><thead><tr><th>Document</th><th>Physical</th><th>Demat</th><th>Cross-Border (add.)</th></tr></thead><tbody><tr><td>Form SH-4</td><td>Required</td><td>Not required (DIS)</td><td>Required (+ FEMA)</td></tr><tr><td>Share Certificate</td><td>Required</td><td>N/A (demat)</td><td>N/A if demat</td></tr><tr><td>Stamp Duty</td><td>0.25%</td><td>0.015% (auto)</td><td>Same</td></tr><tr><td>PAN of Transferee</td><td>Required</td><td>Via DP KYC</td><td>Passport if NR</td></tr><tr><td>Board Resolution</td><td>Required</td><td>Required</td><td>Required</td></tr><tr><td>Valuation Report</td><td>Not mandatory (R-to-R)</td><td>Not mandatory</td><td>Mandatory (FMV)</td></tr><tr><td>FC-TRS</td><td>N/A</td><td>N/A</td><td>Within 60 days</td></tr><tr><td>Witnesses</td><td>2 on SH-4</td><td>N/A</td><td>2 on SH-4</td></tr></tbody></table></div><div class="highlight-box" style="margin-top:20px;"><p><strong>Rule 9B reminder:</strong> From June 2025, non-small companies MUST use demat. Stamp duty savings: 16x cheaper (0.015% vs 0.25%). On Rs 1 crore transfer: Rs 1,500 (demat) vs Rs 25,000 (physical). Small companies (paid-up ≤Rs 4 Cr AND turnover ≤Rs 40 Cr) are exempt.</p></div>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 9: CHALLENGES -->
<section class="content-section" id="challenges-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Capital Gains Tax on Share Transfer</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Challenge</th><th>Impact</th><th>How Patron Accounting Solves It</th></tr></thead>
                    <tbody>
                        <tr><td>LTCG (>24 months holding)</td><td>12.5% tax rate (from 23 July 2024)</td><td>No indexation for unlisted shares post-July 2024. Section 50CA deems FMV if consideration is less</td></tr><tr><td>STCG (<24 months holding)</td><td>Slab rate of the transferor</td><td>Founders who incorporated at Rs 10/share and sell at Series A valuation face substantial gains</td></tr><tr><td>Gift to Relatives</td><td>Exempt under Section 56(2)(x)</td><td>Spouse, sibling, lineal ascendant/descendant. No capital gains for donor; cost basis transfers</td></tr><tr><td>TDS on NR Transferor</td><td>Section 195: 10% LTCG / slab STCG</td><td>Buyer must deduct TDS before payment to NR seller. Patron computes withholding amount</td></tr><tr><td>Section 56(2)(x) - Buyer</td><td>Buyer taxed if shares received below FMV (>Rs 50K)</td><td>Both parties must ensure transaction at FMV to avoid adverse tax consequences</td></tr>

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
            <h2 class="section-title">Stamp Duty Comparison + Transfer Fees</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Fee Component</th><th>Amount</th></tr></thead>
                    <tbody>
                        <tr><td>Physical Transfer (SH-4)</td><td>0.25% stamp duty + Starting from INR 2,999 professional fee</td></tr><tr><td>Demat Transfer (DIS)</td><td>0.015% stamp duty (auto) + Starting from INR 2,999 professional fee</td></tr><tr><td>Cross-Border (FC-TRS)</td><td>Starting from INR 7,999-12,999 (Exl GST) including valuation coordination</td></tr><tr><td>AoA Review + ROFR Management</td><td>Starting from INR 2,999-4,999 (Exl GST)</td></tr><tr><td>Capital Gains Advisory</td><td>Starting from INR 2,999-4,999 (Exl GST) including advance tax</td></tr><tr><td>Demat Conversion (Rule 9B)</td><td>Starting from INR 4,999-7,999 (Exl GST)</td></tr><tr><td>Patron Accounting Professional Fees</td><td>Starting from INR 2,999 (Exl GST and Govt. Charges)</td></tr>

                    </tbody>
                </table>
                </div>
                <p style="margin-top:16px;font-size:13px;color:var(--text-muted);font-style:italic;">All fees and charges listed are indicative only and do not constitute a binding offer. Final amounts may vary depending on the volume of work and the complexity involved.</p>
                <p style="margin-top:16px;">Professional service charges for drafting, filing, and representation are separate from the statutory fees. The exact fee depends on the complexity of the case, disputed amount, and number of hearings required. Contact us for a detailed quote.</p>
                <p style="margin-top:16px;"><strong>Get a free Transfer of Shares in Gurugram consultation - <a href="tel:+919459456700">Call +91 945 945 6700</a> or <a href="https://wa.me/919459456700?text=Hi%2C%20I%20need%20share%20transfer%20services%20in%20Gurugram." target="_blank">WhatsApp us</a>. No-obligation assessment.</strong></p>
            </div>
        </div>
    </div>
</section>

<!-- SECTION 11: TIMELINE -->
<section class="content-section" id="timeline-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Transfer Timeline by Mode</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Stage</th><th>Estimated Timeline</th></tr></thead>
                    <tbody>
                        <tr><td>AoA/SHA Review + ROFR</td><td>Day 1-20 (including 15-30 day ROFR offer period)</td></tr><tr><td>Execute SH-4 / DIS</td><td>Physical: Day 20-22 | Demat: Day 20-21</td></tr><tr><td>Deliver to Company / DP</td><td>Physical: within 60 days | Demat: instant</td></tr><tr><td>Board Approval</td><td>Physical: Day 25-30 | Demat: Day 22-25</td></tr><tr><td>New Certificate / Settlement</td><td>Physical: 1 month | Demat: T+2</td></tr><tr><td>FC-TRS (Cross-Border)</td><td>Within 60 days of transfer/payment</td></tr><tr><td>TOTAL</td><td>Physical: 30-45 days | Demat: 5-10 days | Cross-Border: 35-60 days</td></tr>

                    </tbody>
                </table>
                </div>
                <div class="highlight-box" style="margin-top:16px;">
                    
                    <p><strong>Critical:</strong> SH-4 must be delivered within 60 days. New certificate within 1 month. FC-TRS within 60 days for cross-border. Rule 9B demat mandate effective. Unstamped SH-4 is legally invalid. FEMA penalty for missed FC-TRS: up to 3x amount. Capital gains tax must be paid in the quarter of transfer.</p>

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
            <h2 class="section-title">Why Choose Patron Accounting for Share Transfer in Gurugram?</h2>
        </div>
        <div class="features-grid"><article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><h3 class="feature-title">Gurugram Office</h3><p class="feature-text">Golf Course Extension Road - handling share transfers for Cyber City startups, Golf Course Road MNCs, and Udyog Vihar family businesses.</p></article><article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"/></svg></div><h3 class="feature-title">AoA + FEMA + Tax</h3><p class="feature-text">Unlike law firms (AoA only) or FEMA consultants (FC-TRS only) or CAs (tax only), Patron handles all three in one engagement.</p></article><article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M14 2H6a2 2 0 00-2 2v16a2 2 0 002 2h12a2 2 0 002-2V8z"/><path d="M14 2v6h6M16 13H8M16 17H8"/></svg></div><h3 class="feature-title">Rule 9B Expertise</h3><p class="feature-text">Demat conversion advisory and transition management for companies crossing the small company threshold.</p></article><article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><path d="M12 6v6l4 2"/></svg></div><h3 class="feature-title">Startup Secondary Sales</h3><p class="feature-text">Extensive experience with founder secondary sales, co-founder exits, and investor exit transactions in Gurugram's startup ecosystem.</p></article></div>
    </div>
</section>

<!-- SECTION 12A: SOCIAL PROOF -->
<section class="content-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Trusted by 10,000+ Businesses Across India</h2>
            <div class="content-text">
                
                <p><strong>Trust Banner:</strong> 10,000+ Businesses Served | 4.9 Google Rating | 50,000+ Documents Filed | 15+ Years of Practice</p><blockquote style="border-left:3px solid var(--orange);padding:16px 20px;margin:20px 0;background:var(--orange-lighter);border-radius:0 var(--radius-sm) var(--radius-sm) 0;"><p style="font-style:italic;margin-bottom:8px;">"Co-founder wanted to exit. Patron reviewed SHA, managed ROFR, drafted SH-4, computed capital gains, completed transfer in 25 days. Zero disputes."</p><p style="font-weight:700;font-size:14px;margin:0;">- CEO, DLF Cyber City Startup</p></blockquote><blockquote style="border-left:3px solid var(--orange);padding:16px 20px;margin:20px 0;background:var(--orange-lighter);border-radius:0 var(--radius-sm) var(--radius-sm) 0;"><p style="font-style:italic;margin-bottom:8px;">"Foreign investor exiting to domestic buyer. Patron handled valuation, FC-TRS, SH-4, and capital gains withholding in one engagement. FEMA-compliant and tax-efficient."</p><p style="font-weight:700;font-size:14px;margin:0;">- CFO, Golf Course Road</p></blockquote>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 13: SELF-FILING vs PROFESSIONAL COMPARISON -->
<section class="content-section" id="comparison-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Transfer vs Transmission of Shares</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Parameter</th><th>Transfer</th><th>Transmission</th></tr></thead>
                    <tbody>
                        <tr><td>Nature</td><td>Voluntary act by shareholder</td><td>By operation of law (death, insolvency)</td></tr><tr><td>Form SH-4</td><td>Required</td><td>Not required</td></tr><tr><td>Stamp Duty</td><td>0.25% or 0.015%</td><td>Not applicable</td></tr><tr><td>Consideration</td><td>Usually for cash</td><td>No consideration</td></tr><tr><td>Board Approval</td><td>Required (Section 56)</td><td>Company discretion (Section 56(5))</td></tr><tr><td>Documents</td><td>SH-4, share certificate, PAN</td><td>Death certificate, succession certificate/probate</td></tr>

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
                
                <ul><li><a href="/transfer-of-shares">Transfer of Shares (National)</a> - Broader overview</li><li><a href="/issue-of-shares">Issue of Shares</a> - New allotment</li><li><a href="/fdi-compliance">FDI Compliance</a> - FC-GPR/FC-TRS</li><li><a href="/income-tax-return">Income Tax Return</a> - Capital gains ITR</li><li><a href="/legal-drafting">Legal Drafting</a> - SHA, NDA</li></ul>

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
                
                <p><strong>Governing Law:</strong> Companies Act, 2013 | Companies (Share Capital) Rules, 2014 | Indian Stamp Act, 1899 | FEMA NDI Rules, 2019 | IT Act, 1961</p><p><strong>Key Sections:</strong> Section 56 (transfer registration) | Section 58 (refusal) | Rule 11 (SH-4) | Rule 9B (demat mandate) | Section 45/48/50CA IT Act (capital gains)</p><p><strong>Forms:</strong> SH-4 (transfer deed) | FC-TRS (FEMA cross-border) | BEN-1/BEN-2 (SBO)</p><p><strong>ROC:</strong> ROC Haryana at Chandigarh (from 16 Feb 2026)</p><p><strong>Penalties:</strong></p><p><strong>Late certificate (Section 56(6)):</strong> Rs 25,000-5,00,000.</p><p><strong>Rule 9B violation:</strong> Rs 10,000 + Rs 1,000/day.</p><p><strong>FEMA (FC-TRS):</strong> Up to 3x amount + Rs 5,000/day.</p><p><strong>Unstamped SH-4:</strong> Legally invalid and inadmissible.</p>

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
                    <h2 class="faq-expanded__title">FAQs - Transfer of Shares in Gurugram</h2>
                    <p class="faq-expanded__lead">Common questions about share transfer, SH-4, stamp duty, FEMA FC-TRS, and capital gains for Gurugram companies.</p>
                    @include('partials.bigin-form', [
                        'variant'  => 'compact',
                        'service'  => 'Transfer of Shares in Gurugram',
                        'city'     => 'Gurugram',
                    ])
                </aside>
                <div class="faq-expanded__list">
                    <div class="faq-expanded__item" id="faq-1">
                        <h3 class="faq-expanded__q">How to transfer shares in a private company?</h3>
                        <div class="faq-expanded__a"><p>Review AoA restrictions (ROFR, pre-emption), execute SH-4 with stamp duty, deliver within 60 days, obtain Board approval, receive new certificate within one month. Demat companies: submit DIS to DP for off-market transfer. Patron manages the complete process.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-2">
                        <h3 class="faq-expanded__q">What is stamp duty on share transfer?</h3>
                        <div class="faq-expanded__a"><p>Physical: 0.25% of consideration. Demat: 0.015% (auto-collected). Demat is approximately 16x cheaper. On Rs 10 lakh: Rs 2,500 (physical) vs Rs 150 (demat). Rule 9B makes demat mandatory for non-small companies from June 2025.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-3">
                        <h3 class="faq-expanded__q">What is FC-TRS?</h3>
                        <div class="faq-expanded__a"><p>FEMA form filed on RBI FIRMS within 60 days when shares transfer between resident and non-resident. Requires valuation at FMV, FIRC, KYC, Board Resolution. Penalty for non-filing: up to 3x transaction amount + Rs 5,000/day.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-4">
                        <h3 class="faq-expanded__q">Can the company refuse a transfer?</h3>
                        <div class="faq-expanded__a"><p>Yes, on AoA-permitted grounds. Board must communicate refusal with reasons within 30 days (Section 58). Aggrieved party can appeal to NCLT within 30 days. Common grounds: ROFR not completed, shares not fully paid.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-5">
                        <h3 class="faq-expanded__q">What is the tax on share transfer?</h3>
                        <div class="faq-expanded__a"><p>Unlisted: LTCG at 12.5% if held >24 months, STCG at slab rate if <24 months. Section 50CA deems FMV. Gifts to relatives exempt under 56(2)(x). NR transferors face TDS under Section 195.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-6">
                        <h3 class="faq-expanded__q">What is ROFR?</h3>
                        <div class="faq-expanded__a"><p>Right of First Refusal - AoA/SHA clause requiring shares be offered to existing shareholders at same price/terms before external sale. 15-30 day acceptance period. External sale only after written refusal.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-7">
                        <h3 class="faq-expanded__q">Is demat mandatory?</h3>
                        <div class="faq-expanded__a"><p>From June 2025, non-small companies must use demat (Rule 9B). Small companies (paid-up ≤Rs 4 Cr AND turnover ≤Rs 40 Cr) exempt. Most Gurugram startups post-Series A exceed threshold.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-8">
                        <h3 class="faq-expanded__q">How long does transfer take?</h3>
                        <div class="faq-expanded__a"><p>Physical: 30-45 days. Demat: 5-10 days. Cross-border: 35-60 days. Patron manages timelines to meet buyer/investor deadlines.</p></div>
                    </div>
                </div>
            </div>


            <!-- Quick Answers -->
            <div class="highlight-box" style="margin-top:32px;">
                <p><strong>Quick Answers</strong></p>
                <p><strong>Share transfer kaise hota hai?</strong> SH-4 sign karo, stamp duty lagao, 60 din mein company ko do, Board approve karega, naya certificate 1 mahine mein. Demat mein DIS se.</p><p><strong>Stamp duty kitni?</strong> Physical: 0.25%. Demat: 0.015%. Demat 16x sasta.</p><p><strong>NRI ko transfer?</strong> Haan, FEMA FC-TRS 60 din mein RBI FIRMS par. FMV par ya usse zyada.</p>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 18: URGENCY CTA -->
<section class="content-section" style="background: var(--orange-lighter) !important; border-left: 4px solid var(--orange);">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">SH-4 Must Be Delivered Within 60 Days</h2>
            <div class="content-text">
                
                <p>SH-4 delivery: 60 days. New certificate: 1 month. FC-TRS: 60 days for cross-border. Rule 9B demat mandatory. Unstamped SH-4 is invalid. FEMA penalty: up to 3x amount. Capital gains tax due in quarter of transfer.</p><p><strong><a href="tel:+919459456700">Call +91 945 945 6700</a> or <a href="https://wa.me/919459456700?text=Hi%2C%20I%20need%20share%20transfer%20services%20in%20Gurugram." target="_blank">WhatsApp us</a>.</strong></p>

            </div>
        </div>
    </div>
</section>

<!-- CONCLUSION + CTA BLOCK (Dark) -->
<section class="content-section" style="background: var(--blue) !important;">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title" style="color:#FFFFFF !important;">Get Expert Share Transfer in Gurugram</h2>
            <div class="content-text" style="text-align:left;">
                
                <p style="color:rgba(255,255,255,0.85);">Transferring shares requires AoA compliance, SH-4 execution, stamp duty, Board approval, and for cross-border, FC-TRS filing. Rule 9B demat mandate has changed the landscape. Whether you are a founder selling secondary, an investor exiting, or managing family succession, precision is required across AoA, Companies Act, FEMA, and tax.</p><p style="color:rgba(255,255,255,0.85);">Patron Accounting's Gurugram office provides end-to-end share transfer: AoA review, ROFR, SH-4, stamp duty, FC-TRS, capital gains advisory, and demat conversion.</p><p style="color:rgba(255,255,255,0.85);">With 10,000+ businesses served, a 4.9 Google rating, and 50,000+ documents filed, Patron Accounting LLP is a trusted partner across Gurugram, NCR, and India.</p>

            </div>
            <div style="display:flex;gap:14px;flex-wrap:wrap;margin-top:24px;">
                <a href="tel:+919459456700" style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:var(--orange);color:#fff;border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#128222; Call +91 945 945 6700</a>
                <a href="https://wa.me/919459456700?text=Hi%2C%20I%20need%20share%20transfer%20services%20in%20Gurugram." target="_blank" style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:#25D366;color:#fff;border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#128172; WhatsApp Us</a>
                <a href="mailto:sales@patronaccounting.com?subject=Share%20Transfer%20Gurugram&body=Hi%2C%20I%20need%20share%20transfer%20services%20in%20Gurugram." style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:transparent;color:#fff;border:2px solid rgba(255,255,255,0.3);border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#9993;&#65039; Email Us</a>
            </div>
            <p style="color:rgba(255,255,255,0.7);font-size:13px;margin-top:16px;">Book a Free Consultation - No Obligation.</p>
        </div>
    </div>
</section>

<!-- GSTAT STATE BENCH CITY PAGES (32 Pages) -->
<section class="content-section" style="padding:48px 32px;background:var(--gray-50);">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title" style="text-align:center;margin-bottom:12px;">Transfer of Shares - Available Cities</h2>
            <p style="text-align:center;color:var(--text-muted);font-size:15px;margin-bottom:40px;">Expert share transfer services across major Indian cities</p>
      
            <div class="pa-city-block" style="margin-bottom:40px;"><div class="pa-block-title">City-Wise Share Transfer</div><div class="pa-block-sub">Select your city</div><div class="pa-city-grid"><a href="/transfer-of-shares/pune" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Pune</div><div class="pa-card-sub">Maharashtra</div></div></a><a href="/transfer-of-shares/mumbai" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Mumbai</div><div class="pa-card-sub">Maharashtra</div></div></a><a href="/transfer-of-shares/delhi" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Delhi</div><div class="pa-card-sub">Delhi NCR</div></div></a><div class="pa-city-card" style="opacity:0.6; pointer-events:none; border:2px solid var(--orange); position:relative;"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Gurugram</div><div class="pa-card-sub">Haryana</div></div><span style="position:absolute; top:6px; right:8px; font-size:10px; color:var(--orange); font-weight:700; text-transform:uppercase; letter-spacing:0.5px;">You're here</span></div></div></div><div class="pa-city-block"><div class="pa-block-title">Related Services in Gurugram</div><div class="pa-block-sub">End-to-end corporate compliance</div><div class="pa-cross-grid"><a href="/issue-of-shares/gurugram" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Issue of Shares</div><div class="pa-card-sub">Gurugram</div></div></a><a href="/fdi-compliance/gurugram" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">FDI Compliance</div><div class="pa-card-sub">Gurugram</div></div></a><a href="/change-in-authorised-capital/gurugram" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Change Authorised Capital</div><div class="pa-card-sub">Gurugram</div></div></a><a href="/income-tax-return-filing/gurugram" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Income Tax Return</div><div class="pa-card-sub">Gurugram</div></div></a><a href="/legal-drafting/gurugram" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Legal Drafting</div><div class="pa-card-sub">Gurugram</div></div></a><a href="/private-limited-company-compliance/gurugram" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Annual Compliance</div><div class="pa-card-sub">Gurugram</div></div></a></div></div>
        </div>
    </div>
</section>

<!-- CONTENT FRESHNESS FOOTER -->
<section class="content-section" style="padding:32px;">
    <div class="content-container">
        <div class="text-content" style="font-size:13px;color:var(--text-muted);">
            <p><strong>Content Created:</strong> 03 April 2026 &nbsp;|&nbsp; <strong>Last Updated:</strong> <span id="lastUpdatedFooter">03 April 2026</span> &nbsp;|&nbsp; <strong>Next Review:</strong> 03 July 2026 &nbsp;|&nbsp; <strong>Reviewed By:</strong> CA &amp; CS Team, Patron Accounting LLP</p>
            <p>This page is reviewed quarterly. Section 56 procedure, Rule 9B demat mandate, stamp duty rates, FEMA FC-TRS requirements, and capital gains rates are verified.</p>
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
