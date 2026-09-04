
@extends('layouts.service-app')

<!-- External Dependencies (loaded by master layout in production) -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Barlow:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,400&family=DM+Sans:opsz,wght@9..40,400;9..40,500;9..40,600;9..40,700&display=swap" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

@section('meta')
    <title>Transfer of Shares in Pune - SH-4, Stamp Duty & Valuation</title>
    <meta name="description" content="CA and CS assisted transfer of shares for Pune companies. Form SH-4, stamp duty, board approval, demat Rule 9B, ROFR compliance, FEMA transfers. Startup exits, promoter transfers. Call +91 945 945 6700.">
    <link rel="canonical" href="/transfer-of-shares/pune">
    <meta name="robots" content="index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1">
    <meta property="og:title" content="Transfer of Shares in Pune - SH-4, Stamp Duty & Valuation">
    <meta property="og:description" content="CA and CS assisted transfer of shares for Pune companies. Form SH-4, stamp duty, board approval, demat Rule 9B, ROFR compliance, FEMA transfers. Startup exits, promoter transfers. Call +91 945 945 6700.">
    <meta property="og:url" content="/transfer-of-shares/pune">
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="Patron Accounting">
    <meta property="og:image" content="https://www.patronaccounting.com/images/og-default-square.png">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="1200">
    <meta property="og:image:type" content="image/png">
    <meta property="og:image:secure_url" content="https://www.patronaccounting.com/images/og-default-square.png">
    <meta property="og:image:alt" content="Patron Accounting - partner you can rely on">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Transfer of Shares in Pune - SH-4, Stamp Duty & Valuation">
    <meta name="twitter:description" content="CA and CS assisted transfer of shares for Pune companies. Form SH-4, stamp duty, board approval, demat Rule 9B, ROFR compliance, FEMA transfers. Startup exits, promoter transfers. Call +91 945 945 6700.">
    <meta name="twitter:image" content="https://www.patronaccounting.com/images/og-default-square.png">
@endsection

@section('schema')
    <script type="application/ld+json">{
  "@context": "https://schema.org",
  "@graph": [
    {
      "@type": "Service",
      "name": "Transfer of Shares in Pune | SH-4 & Demat",
      "description": "CA and CS assisted transfer of shares for Pune companies. Form SH-4, stamp duty, board approval, demat Rule 9B, ROFR compliance, FEMA transfers. Startup exits, promoter transfers. Call +91 945 945 6700.",
      "url": "https://www.patronaccounting.com/transfer-of-shares/pune",
      "serviceType": "Transfer of Shares in Pune | SH-4 & Demat",
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
        "url": "https://www.patronaccounting.com/transfer-of-shares/pune",
        "priceSpecification": {
          "@type": "PriceSpecification",
          "minPrice": "5000",
          "maxPrice": "25000",
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
          "name": "Transfer of Shares: SH-4 and Stamp Duty",
          "item": "https://www.patronaccounting.com/transfer-of-shares"
        },
        {
          "@type": "ListItem",
          "position": 3,
          "name": "Transfer of Shares in Pune | SH-4 & Demat",
          "item": "https://www.patronaccounting.com/transfer-of-shares/pune"
        }
      ]
    },
    {
      "@type": "FAQPage",
      "mainEntity": [
        {
          "@type": "Question",
          "name": "How to transfer shares in a Pune private limited company?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Review AOA for ROFR and transfer restrictions. If ROFR applies, issue notice to existing shareholders and obtain waiver. Execute Form SH-4 signed by both parties and witnessed. Pay stamp duty (0.25% physical). Submit SH-4 with original certificate and KYC to company within 60 days. Board approves via resolution. Company cancels old certificate and issues new one within 1 month. Update Register of Members within 7 days."
          }
        },
        {
          "@type": "Question",
          "name": "What is stamp duty on share transfers in Maharashtra?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Physical transfers (SH-4): 0.25% of consideration or market value, whichever higher, under Article 62 of Indian Stamp Act. Demat transfers: 0.015% auto-collected by NSDL/CDSL during transfer. The demat rate is uniform nationwide since July 2020 and significantly lower than physical. This cost advantage is one reason to dematerialise before Rule 9B deadline."
          }
        },
        {
          "@type": "Question",
          "name": "What is Rule 9B and how does it affect Pune companies?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Rule 9B mandates all non-small private companies to issue, transfer and maintain securities only in demat form. Extended deadline: 30 June 2026. After this, physical SH-4 transfers are no longer valid. Pune companies must appoint RTA, create ISIN with NSDL/CDSL, and convert all physical certificates to demat. Small companies (turnover"
          }
        },
        {
          "@type": "Question",
          "name": "Can the board refuse a share transfer?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Yes, but only on valid AOA grounds - such as ROFR non-compliance, incomplete documents, unstamped SH-4, or transfer to prohibited party. Must send refusal with reasons within 30 days. If unjustified, transferor or transferee can appeal to NCLT Mumbai Bench within 30 days. NCLT can direct the company to register the transfer."
          }
        },
        {
          "@type": "Question",
          "name": "What are the tax implications of share transfer?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Transferor faces capital gains: STCG (held <24 months, slab rates) or LTCG (held >24 months, 12.5% without indexation for unlisted shares post Budget 2024). Section 50CA deems FMV if transfer price is below FMV. For transferee: if shares received below FMV by >Rs 50,000, difference taxed under Section 56(2)(x) - except between specified relatives (exempt)."
          }
        },
        {
          "@type": "Question",
          "name": "How does FEMA apply to cross-border share transfers?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "When shares are transferred between resident and non-resident, FEMA pricing applies: resident to NR at not below FMV, NR to resident at not above FMV. Valuation by SEBI-registered merchant banker. Company files FC-TRS on RBI FIRMS portal within 60 days. FDI sectoral caps and Press Note 3 must be verified. Non-compliance triggers RBI compounding proceedings. Quick Answers Shares transfer kaise hota hai? AOA mein ROFR check karo > SH-4 form bharo (dono sign) > Stamp duty do (0.25% physical, 0.015% demat) > 60 din mein company ko do > Board approval > 1 mahine mein naya certificate. Kya board transfer rok sakta hai? Haan, sirf valid AOA reasons pe. Invalid refusal pe 30 din mein NCLT appeal. Rule 9B kya hai? Non-small Pvt Ltd companies ko sab shares demat mein. Deadline 30 June 2026."
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
                        Transfer of Shares in Pune: Execute, Register, and Stay Compliant
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
                            <p class="mb-0 text-dark benefit-paragraph"><span>Documents:</span> Form SH-4 (transfer deed), original share certificate, stamp duty receipt, board resolution, PAN/KYC</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Fees:</span> Stamp duty 0.25% (physical) / 0.015% (demat) + Professional fee Rs 5,000 - Rs 25,000</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Eligibility:</span> All Pvt Ltd, OPC, and public companies registered in Pune/Maharashtra</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Timeline:</span> 7-15 days from SH-4 to new certificate | SH-4 delivery within 60 days | Certificate within 1 month</p>
                        </div>
                    </div>

                    <p class="mb-4 fw-bold" style="color: var(--blue); font-size: 15px;">10,000+ Businesses Served | 4.9 Google Rating</p>

                    <div class="hero-cta">
                        <a href="tel:+919459456700" class="btn-video text-decoration-none">
                            <span class="play-circle"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="width:14px;height:14px;color:#fff"><path d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/></svg></span>
                            Call +91 945 945 6700
                        </a>
                        <a href="mailto:sales@patronaccounting.com" class="btn-sample text-decoration-none">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="width:18px;height:18px;"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,12 2,6"/></svg>
                            Email Us
                        </a>
                        <a href="https://wa.me/919459456700?text=Hello%2C%20I%20just%20visited%20your%20Transfer%20of%20Shares%20in%20Pune%20page.%20I%20would%20like%20to%20know%20more%20about%20it." target="_blank" class="btn-sample text-decoration-none" rel="noopener">
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

                    <iframe name='hidden208810000001209168Frame' id='hidden208810000001209168Frame' style='display:none;' src='about:blank'></iframe>

                                        @include('partials.bigin-form', [
                                            'variant' => 'bare',
                                            'service'  => 'Transfer of Shares in Pune',
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
    'ctaText'    => 'Get expert share transfer for your Pune company today.',
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
            <a href="#overview-section" class="toc-btn active">Overview</a><a href="#what-section" class="toc-btn">Transfer vs Transmission</a><a href="#who-section" class="toc-btn">Who Needs It</a><a href="#services-section" class="toc-btn">Services</a><a href="#procedure-section" class="toc-btn">Process</a><a href="#documents-section" class="toc-btn">Documents</a><a href="#challenges-section" class="toc-btn">Challenges</a><a href="#fees-section" class="toc-btn">Fees</a><a href="#timeline-section" class="toc-btn">Timeline</a><a href="#benefits-section" class="toc-btn">Why Patron</a><a href="#comparison-section" class="toc-btn">Physical vs Demat</a><a href="#faq-section" class="toc-btn">FAQs</a>
        </div>
        <button class="toc-arrow right" id="tocRight">&#10095;</button>
    </div>
</div>

<!-- SECTION 2: OVERVIEW / INTRO + TL;DR -->
<section class="content-section" id="overview-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Transfer of Shares in Pune - Overview</h2>
            <div class="content-text">
                <div class="highlight-box" style="margin-bottom:20px;">
                    <p><strong>&#128204; TL;DR - Transfer of Shares in Pune Services at a Glance</strong></p>
                    <p>Transfer of shares is the voluntary transfer of ownership from transferor to transferee. Under Section 56, no transfer can be registered without Form SH-4. Process: review AOA restrictions (ROFR), execute SH-4 signed by both parties, pay stamp duty (0.25% physical / 0.015% demat), deliver to company within 60 days, board approval, new certificate within 1 month. Rule 9B mandates dematerialisation for non-small Pvt Ltd companies by 30 June 2026. For cross-border transfers, FEMA pricing and FC-TRS filing within 60 days apply.</p>
                </div>
                <p>Pune's dynamic business ecosystem generates high share transfer volume. Baner and Kharadi startup founders sell in secondary transactions. Angel investors and VCs exit by transferring to new investors. Hinjewadi MNC subsidiary shares are transferred during restructuring. MIDC promoters transfer to family for succession. With Rule 9B mandating demat by 30 June 2026, the transition from physical to demat is critical. Learn more about <a href="/transfer-of-shares">Transfer of Shares across India</a>.</p>
                <p>All filings online via <a href="https://www.mca.gov.in" target="_blank" rel="noopener">mca.gov.in</a>. NCLT Mumbai Bench handles Section 58 appeals. Related: <a href="/issue-of-shares/pune">Issue of Shares in Pune</a> and <a href="#">Share Allotment</a>.</p>
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
                <h2 class="section-title">Transfer vs Transmission of Shares</h2>
                <div class="content-text what-is-definition">
                    
                    <p><strong>Transfer:</strong> Voluntary act between transferor and transferee. Requires Form SH-4, stamp duty (0.25% physical / 0.015% demat), and board approval. Triggered by sale, gift or secondary exit.</p><p><strong>Transmission:</strong> Operation of law (death, insolvency). No SH-4 required. No stamp duty. Requires death certificate, succession certificate, probate or legal heir affidavit.</p><p>For Pune companies, both are common: startup co-founder sales (transfer) and promoter shares passing to heirs (transmission). Related: <a href="/change-in-authorised-capital/pune">Change in Authorised Capital in Pune</a> and <a href="/itr-for-companies/pune">ITR for Companies in Pune</a>.</p>

                </div>
                <div class="highlight-box" style="margin-top:20px;">
                    <p><strong>Key Terms for Transfer of Shares in Pune:</strong></p>
                    <ul><li><strong>Form SH-4:</strong> Share Transfer Deed. Executed by both parties, witnessed, stamped. Prescribed under Rule 11.</li><li><strong>Stamp Duty:</strong> 0.25% physical (Article 62, Indian Stamp Act) / 0.015% demat (auto-collected by NSDL/CDSL)</li><li><strong>Rule 9B:</strong> Mandatory demat for non-small Pvt Ltd. Deadline 30 June 2026. Physical transfers invalid after.</li><li><strong>ROFR:</strong> Right of First Refusal - must offer to existing shareholders first before outsider sale</li><li><strong>Section 58:</strong> Board refusal - reasons within 30 days; NCLT appeal within 30 days</li><li><strong>FC-TRS:</strong> FEMA form for cross-border transfers. RBI FIRMS portal within 60 days.</li></ul>

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
                            <!-- TRF tag -->
                            <rect x="30" y="120" width="42" height="18" rx="4" fill="#FFF3E0" stroke="#F5A623" stroke-width="1"/>
                            <text x="51" y="132.5" font-size="8" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial, sans-serif">TRF</text>
                            <!-- Label -->
                            <text x="100" y="170" font-size="10" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial, sans-serif">Transfer of Shares in Pune</text>
                        </svg>
                    </div>
                    <div class="illustration-badge">
                        <span>SH-4 + Rule 9B</span>
                        <strong>0.25% Physical | 0.015% Demat</strong>
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
            <h2 class="section-title">Who Needs Share Transfer Services in Pune?</h2>
            <div class="content-text">
                
                <p><strong>Startup Founders (Secondary Sale, Baner/Kharadi):</strong> Co-founders exiting, early employees selling vested shares. SHA/ROFR compliance, fair value, board approval. Related: <a href="/private-limited-company-registration/pune">Pvt Ltd Registration in Pune</a>.</p><p><strong>Angel/VC Investors Exiting:</strong> Selling to incoming investors during new round (secondary component), to promoters (buyback), or third parties. Tag-along/drag-along SHA clauses apply.</p><p><strong>Promoters Transferring to Family (MIDC, Camp):</strong> Succession planning or gift. SH-4 with consideration as "gift". IT Act Section 56(2)(x) exempt between specified relatives. Related: <a href="#">Annual ROC Filing in Pune</a>.</p><p><strong>Cross-Border + Rule 9B + Board Disputes:</strong> Hinjewadi MNC restructuring (FEMA FC-TRS). Demat migration deadline 30 June 2026. Section 58 NCLT appeal for unjustified refusals. Related: <a href="/roc-notice/pune">ROC Notice in Pune</a> and <a href="/company-closure/pune">Company Closure in Pune</a>.</p>

            </div>
            </div>
        </div>
    </div>
</section>

<!-- SECTION 5: OUR SERVICES -->
<section class="content-section" id="services-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Share Transfer Services in Pune</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Service</th><th>What We Do</th></tr></thead>
                    <tbody>
                        <tr><td>End-to-End Physical Share Transfer</td><td>AOA review, ROFR compliance, SH-4 drafting and execution, stamp duty computation (0.25%), document submission, board resolution, old certificate cancellation, new certificate, Register of Members update.</td></tr><tr><td>Startup Secondary Sale Execution</td><td>SHA/ROFR review, fair value determination, ROFR notice and waiver collection, SH-4, board approval, capital gains advisory, updated cap table. For Baner/Kharadi startup exits.</td></tr><tr><td>Rule 9B Demat Migration</td><td>RTA appointment, ISIN creation with NSDL/CDSL, physical-to-demat conversion for all shareholders, director/KMP dematerialisation. Deadline 30 June 2026. Related: <a href="/accounting-services">Accounting Services</a>.</td></tr><tr><td>Cross-Border Transfer (FEMA)</td><td>Pricing compliance (resident to NR: not below FMV; NR to resident: not above FMV), SEBI merchant banker valuation, FC-TRS on <a href="https://firms.rbi.org.in" target="_blank" rel="noopener">RBI FIRMS</a> within 60 days, sectoral FDI check.</td></tr><tr><td>Gift/Family + Board Refusal Appeal</td><td>Gift transfer SH-4, IT Section 56(2)(x) analysis. Section 58 NCLT Mumbai Bench appeal for unjustified refusals within 30 days.</td></tr>

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
            <h2 class="section-title">How to Transfer Shares in Pune</h2>
            <p class="section-subtitle" style="text-align:left;max-width:100%;">Our Pune CA+CS team manages the complete share transfer - from ROFR compliance and SH-4 execution to board approval, demat migration and FEMA filing.</p>
        </header>
        <div class="steps-container">
            <div class="step-card"><div class="step-content"><span class="step-badge">Step 1</span><h3 class="step-title">Review AOA and SHA Restrictions</h3><p class="step-description">Check AOA and SHA for ROFR, pre-emption rights, lock-in periods, board approval requirements, and tag-along/drag-along clauses. Most Pune Pvt Ltd companies have ROFR provisions requiring the transferor to first offer to existing shareholders. Issue ROFR notice and obtain waiver or allow exercise within the stipulated period. Patron's CS team reviews all restrictions at initial consultation.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>AOA/SHA reviewed</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>ROFR compliance initiated</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="20" y="8" width="80" height="60" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><text x="60" y="22" font-size="6" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">AOA</text><text x="60" y="38" font-size="6" fill="#E8712C" font-weight="600" text-anchor="middle" font-family="Arial">ROFR</text><text x="60" y="52" font-size="5" fill="#14365F" font-weight="600" text-anchor="middle" font-family="Arial">Pre-emption</text><text x="60" y="78" font-size="6" fill="#14365F" font-weight="600" text-anchor="middle" font-family="Arial">Check Restrictions</text></svg></div><span class="illustration-label">Cleared</span><span class="step-number-large">01</span></div></div></div>
<div class="step-card"><div class="step-content"><span class="step-badge">Step 2</span><h3 class="step-title">Determine Fair Value and Agree Terms</h3><p class="step-description">For arm's length transfers, determine FMV via DCF or NAV. For promoter-to-family gifts, FMV determines capital gains tax. For cross-border, obtain SEBI-registered merchant banker valuation. Agree on consideration, payment terms and closing conditions between transferor and transferee.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Fair value determined</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Terms agreed</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="20" y="8" width="80" height="60" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><text x="60" y="25" font-size="7" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">FMV</text><text x="60" y="42" font-size="5" fill="#E8712C" font-weight="600" text-anchor="middle" font-family="Arial">DCF / NAV</text><text x="60" y="78" font-size="6" fill="#14365F" font-weight="600" text-anchor="middle" font-family="Arial">Agree Terms</text></svg></div><span class="illustration-label">Valued</span><span class="step-number-large">02</span></div></div></div>
<div class="step-card"><div class="step-content"><span class="step-badge">Step 3</span><h3 class="step-title">Execute Form SH-4 and Pay Stamp Duty</h3><p class="step-description">Complete SH-4 with transferor/transferee details, security description (number, class, distinctive numbers), consideration, both party signatures and witness. Pay stamp duty: 0.25% of consideration or FMV (whichever higher) for physical. Use e-stamp or adhesive stamps as applicable in Maharashtra. Patron's CS team drafts and reviews SH-4.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>SH-4 properly executed</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Stamp duty paid</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="15" y="5" width="90" height="70" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><text x="60" y="22" font-size="7" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">SH-4</text><text x="60" y="40" font-size="6" fill="#E8712C" font-weight="600" text-anchor="middle" font-family="Arial">0.25%</text><text x="60" y="55" font-size="5" fill="#14365F" font-weight="600" text-anchor="middle" font-family="Arial">Both Sign + Witness</text><text x="60" y="85" font-size="6" fill="#14365F" font-weight="600" text-anchor="middle" font-family="Arial">Execute + Stamp</text></svg></div><span class="illustration-label">Stamped</span><span class="step-number-large">03</span></div></div></div>
<div class="step-card"><div class="step-content"><span class="step-badge">Step 4</span><h3 class="step-title">Submit Documents to Company Within 60 Days</h3><p class="step-description">Deliver to company's registered office: executed and stamped SH-4, original share certificates, PAN/address proof (both parties), board resolution of transferee company (if applicable), ROFR waiver letters. Must be within 60 days of SH-4 execution. Late submission may be rejected under Section 56.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Documents submitted on time</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>All attachments complete</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="20" y="8" width="80" height="60" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><text x="60" y="25" font-size="6" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">Submit</text><text x="60" y="42" font-size="8" fill="#E8712C" font-weight="700" text-anchor="middle" font-family="Arial">60</text><text x="72" y="42" font-size="5" fill="#E8712C" font-weight="600" font-family="Arial">days</text><text x="60" y="78" font-size="6" fill="#14365F" font-weight="600" text-anchor="middle" font-family="Arial">Deliver to Company</text></svg></div><span class="illustration-label">Delivered</span><span class="step-number-large">04</span></div></div></div>
<div class="step-card"><div class="step-content"><span class="step-badge">Step 5</span><h3 class="step-title">Board Approves Transfer</h3><p class="step-description">Board reviews compliance with AOA, document completeness, stamp duty payment and ROFR compliance. Passes resolution to approve (or refuse with reasons under Section 58). If refused, aggrieved party can appeal to NCLT Mumbai Bench within 30 days. Submit documents at least 7 days before board meeting.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Board resolution passed</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Transfer approved</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="25" y="10" width="70" height="50" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><circle cx="60" cy="30" r="12" fill="#E8F5E9" stroke="#25D366" stroke-width="2"/><path d="M55 30l4 4 8-8" stroke="#25D366" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"/><text x="60" y="78" font-size="6" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">Board Approves</text></svg></div><span class="illustration-label">Approved</span><span class="step-number-large">05</span></div></div></div>
<div class="step-card"><div class="step-content"><span class="step-badge">Step 6</span><h3 class="step-title">New Certificate Issued + Post-Transfer Compliance</h3><p class="step-description">Company cancels old certificate (marked 'Cancelled') and issues new one in transferee's name within 1 month. Update Register of Members within 7 days. For income tax: transferor files capital gains. For FEMA: file FC-TRS on RBI FIRMS within 60 days. For demat companies: ensure depository records updated. Patron provides updated registers, cap table and tax computation.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>New certificate issued</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Registers and cap table updated</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="20" y="8" width="80" height="60" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><text x="60" y="25" font-size="6" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">New Cert</text><text x="60" y="42" font-size="5" fill="#E8712C" font-weight="600" text-anchor="middle" font-family="Arial">Within 1 month</text><text x="60" y="78" font-size="6" fill="#14365F" font-weight="600" text-anchor="middle" font-family="Arial">Registers Updated</text></svg></div><span class="illustration-label">Complete</span><span class="step-number-large">06</span></div></div></div>


        </div>
    </div>
</section>

<!-- SECTION 8: DOCUMENTS REQUIRED -->
<section class="content-section" id="documents-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Documents Required for Share Transfer in Pune</h2>
            <div class="content-text">
                
                <ul><li><strong>Form SH-4:</strong> Executed by transferor and transferee, witnessed, stamped.</li><li><strong>Original Share Certificate:</strong> Of shares being transferred. Surrendered by transferor.</li><li><strong>Stamp Duty Payment Proof:</strong> E-stamp or adhesive stamps cancelled on SH-4.</li><li><strong>PAN and Address Proof:</strong> Self-attested copies of both parties.</li><li><strong>Board Resolution of Transferee:</strong> If transferee is a company, authorising acquisition.</li><li><strong>ROFR Waiver / Exercise Letters:</strong> From existing shareholders.</li><li><strong>SHA Consent:</strong> If SHA requires approval for transfers.</li><li><strong>Valuation Report (Cross-Border):</strong> SEBI merchant banker for FEMA transfers.</li><li><strong>Indemnity Bond:</strong> If original certificate is lost.</li></ul><div class="highlight-box" style="margin-top:16px;"><p><strong>Pune-specific tip:</strong> Maharashtra follows Indian Stamp Act rate of 0.25% for physical share transfers. E-stamping available via Maharashtra portal. For demat, 0.015% auto-collected by NSDL/CDSL - significantly lower.</p></div>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 9: CHALLENGES -->
<section class="content-section" id="challenges-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Common Challenges in Share Transfer in Pune</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Challenge</th><th>Impact</th><th>How Patron Accounting Solves It</th></tr></thead>
                    <tbody>
                        <tr><td>ROFR/Pre-Emption Not Followed</td><td>Most Pune Pvt Ltd AOAs have ROFR - skipping makes transfer voidable, leads to NCLT disputes</td><td>Patron reviews AOA + SHA and ensures ROFR compliance with proper notice and waiver process</td></tr><tr><td>SH-4 Improperly Executed/Unstamped</td><td>Unsigned, not witnessed, not stamped = legally invalid. Company cannot register.</td><td>Patron's CS team drafts, reviews and ensures proper SH-4 execution with correct stamping</td></tr><tr><td>Rule 9B Demat Mandate Not Addressed</td><td>Non-small companies must have demat by 30 June 2026 or physical transfers become impossible</td><td>Patron manages full demat migration: RTA, ISIN, physical-to-demat conversion</td></tr><tr><td>Capital Gains Tax Underestimated</td><td>STCG (slab rates) vs LTCG (12.5%). Section 50CA deems FMV as consideration if below FMV.</td><td>Patron computes capital gains and advises on tax-optimal timing for every transfer</td></tr>

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
            <h2 class="section-title">Share Transfer Fees in Pune</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Fee Component</th><th>Amount</th></tr></thead>
                    <tbody>
                        <tr><td>Simple Share Transfer (SH-4 + Board)</td><td>Patron Rs 5,000-10,000 + stamp duty</td></tr><tr><td>Startup Secondary Sale (ROFR + SH-4)</td><td>Patron Rs 10,000-20,000 + stamp duty</td></tr><tr><td>Cross-Border Transfer (FEMA + FC-TRS)</td><td>Patron Rs 15,000-30,000 + valuation</td></tr><tr><td>Gift / Family Transfer</td><td>Patron Rs 5,000-10,000 + stamp duty</td></tr><tr><td>Rule 9B Demat Migration (Full Company)</td><td>Patron Rs 20,000-50,000</td></tr><tr><td>Board Refusal Appeal (NCLT S.58)</td><td>Patron Rs 25,000-75,000</td></tr><tr><td>Transmission (Death/Succession)</td><td>Patron Rs 8,000-15,000</td></tr>

                    </tbody>
                </table>
                </div>
                <p style="margin-top:16px;font-size:13px;color:var(--text-muted);font-style:italic;">All fees and charges listed are indicative only and do not constitute a binding offer. Final amounts may vary depending on the volume of work and the complexity involved.</p>
                <p style="margin-top:16px;">Professional service charges for drafting, filing, and representation are separate from the statutory fees. The exact fee depends on the complexity of the case, disputed amount, and number of hearings required. Contact us for a detailed quote.</p>
                <p style="margin-top:16px;"><strong>Get a free Transfer of Shares in Pune consultation - <a href="tel:+919459456700">Call +91 945 945 6700</a> or <a href="https://wa.me/919459456700?text=Hello%2C%20I%20just%20visited%20your%20Transfer%20of%20Shares%20in%20Pune%20page.%20I%20would%20like%20to%20know%20more%20about%20it." target="_blank" rel="noopener">WhatsApp us</a>. No-obligation assessment.</strong></p>
            </div>
        </div>
    </div>
</section>

<!-- SECTION 11: TIMELINE -->
<section class="content-section" id="timeline-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Share Transfer Timeline</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Stage</th><th>Estimated Timeline</th></tr></thead>
                    <tbody>
                        <tr><td>AOA/SHA review + ROFR notice</td><td>Day 1-15 (+ ROFR exercise period per SHA)</td></tr><tr><td>Fair value determination / valuation</td><td>Day 15-22 (3-7 days)</td></tr><tr><td>Execute SH-4 + pay stamp duty</td><td>Day 22-23 (1 day)</td></tr><tr><td>Submit SH-4 + documents to company</td><td>Within 60 days of execution</td></tr><tr><td>Board meeting + approval resolution</td><td>Day 30-35 (next board meeting)</td></tr><tr><td>New share certificate issued</td><td>Within 1 month of board approval</td></tr><tr><td>Register of Members updated</td><td>Within 7 days of approval</td></tr><tr><td>FC-TRS filing (cross-border)</td><td>Within 60 days of transfer</td></tr>

                    </tbody>
                </table>
                </div>
                <div class="highlight-box" style="margin-top:16px;">
                    
                    <p><strong>Pune Processing Note:</strong> No ROC filing required for share transfers (unlike allotments which require PAS-3). Stamp duty on physical SH-4 per Indian Stamp Act Article 62 (0.25%). Demat auto-collected at 0.015%. NCLT Mumbai Bench handles Section 58 appeals. Patron manages the complete process from RTC Silver, Wagholi.</p>

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
            <h2 class="section-title">Why Choose Patron for Share Transfer in Pune?</h2>
        </div>
        <div class="features-grid"><article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><h3 class="feature-title">Pune Office + All Scenarios</h3><p class="feature-text">RTC Silver, Wagholi - stamp duty coordination, SH-4 witnessing and board resolution drafting done locally. 40 min from Baner, Kharadi, Hinjewadi, MIDC.</p></article><article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M13 2L3 14h9l-1 8 10-12h-9l1-8z"/></svg></div><h3 class="feature-title">Startup Secondary Sales</h3><p class="feature-text">ROFR compliance, fair value, SHA consent, SH-4, board approval and cap table updates for Baner and Kharadi startup share transfers.</p></article><article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><h3 class="feature-title">Rule 9B Demat Migration</h3><p class="feature-text">End-to-end: RTA appointment, ISIN creation, physical-to-demat conversion for all shareholders. Deadline 30 June 2026.</p></article><article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M17 21v-2a4 4 0 00-4-4H5a4 4 0 00-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M23 21v-2a4 4 0 00-3-3.87"/></svg></div><h3 class="feature-title">CA + CS Combined Team</h3><p class="feature-text">CS for SH-4, board resolution, registers. CA for valuation, capital gains, FEMA compliance. Both in-house at Pune office.</p></article></div>
    </div>
</section>

<!-- SECTION 12A: SOCIAL PROOF -->
<section class="content-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Trusted by 10,000+ Businesses Across India</h2>
            <div class="content-text">
                
                <p><strong>10,000+ Businesses | 4.9 Google Rating | 50,000+ Docs Filed | 15+ Years</strong></p><blockquote style="border-left:3px solid var(--orange);padding-left:16px;margin:16px 0;font-style:italic;color:var(--text-secondary);">"Our GST filing is always on time since we moved to Patron. The CA team knows their stuff cold." - CFO, Manufacturing, Maharashtra</blockquote><p>With offices in Pune, Mumbai, Delhi and Gurugram, Patron serves companies across India.</p>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 13: SELF-FILING vs PROFESSIONAL COMPARISON -->
<section class="content-section" id="comparison-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Physical vs Demat Transfer Comparison</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Factor</th><th>Physical (SH-4)</th><th>Demat (NSDL/CDSL)</th></tr></thead>
                    <tbody>
                        <tr><td>Instrument</td><td>Form SH-4 (paper)</td><td>DIS (Delivery Instruction Slip)</td></tr><tr><td>Stamp Duty</td><td>0.25% (manual payment)</td><td>0.015% (auto-collected)</td></tr><tr><td>Board Approval</td><td>Required (Pvt Ltd)</td><td>Company updates register post-DP transfer</td></tr><tr><td>Certificate</td><td>New physical within 1 month</td><td>Electronic holding updated</td></tr><tr><td>Risk</td><td>Loss, forgery, delay</td><td>Secure, instant</td></tr><tr><td>Rule 9B</td><td>Being phased out for non-small Pvt Ltd</td><td>Mandatory from 30 June 2026</td></tr><tr><td>Typical Pune Use</td><td>Small Pvt Ltd, old companies</td><td>Tech startups, compliant companies</td></tr>

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
                
                <p>For Pune companies needing related corporate compliance:</p><ul><li><a href="/transfer-of-shares">Transfer of Shares (India)</a></li><li><a href="/issue-of-shares/pune">Issue of Shares in Pune</a></li><li><a href="/change-in-authorised-capital/pune">Change in Authorised Capital in Pune</a></li><li><a href="/private-limited-company-registration/pune">Pvt Ltd Registration in Pune</a></li><li><a href="#">Annual ROC Filing in Pune</a></li><li><a href="/accounting-services">Accounting Services</a></li></ul>

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
                
                <p><strong>Section 56:</strong> No registration without SH-4. Delivered within 60 days. New certificate within 1 month. Penalty: Rs 25K-5L (company), Rs 10K-1L (officer).</p><p><strong>Form SH-4:</strong> Rule 11, Share Capital Rules. Transferor + transferee + witness. Stamped before/at signing.</p><p><strong>Stamp Duty (Article 62):</strong> Physical: 0.25% of consideration/FMV. Demat: 0.015% by NSDL/CDSL. Unstamped SH-4 legally invalid.</p><p><strong>Section 58:</strong> Refusal notice with reasons within 30 days. NCLT appeal within 30 days. Restrictions must be reasonable.</p><p><strong>Rule 9B:</strong> Non-small Pvt Ltd: demat only. Extended to 30 June 2026. Small companies exempt (turnover <Rs 4 cr, paid-up <Rs 50 lakh).</p><p><strong>FEMA:</strong> Resident→NR: not below FMV. NR→Resident: not above FMV. SEBI MB valuation. FC-TRS on <a href="https://firms.rbi.org.in" target="_blank" rel="noopener">RBI FIRMS</a> within 60 days.</p><p><strong>Capital Gains:</strong> STCG (<24 months: slab). LTCG (>24 months: 12.5%). Section 50CA deems FMV. Section 56(2)(x) for transferee.</p><p><strong>ROC Pune:</strong> PMT Building, Shivajinagar 411005. <a href="https://www.mca.gov.in" target="_blank" rel="noopener">mca.gov.in</a>. NCLT Mumbai Bench for S.58 appeals.</p>

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
                    <h2 class="faq-expanded__title">FAQs - Transfer of Shares in Pune</h2>
                    <p class="faq-expanded__lead">Find answers to the most common questions about share transfer in Pune.</p>
                    @include('partials.bigin-form', [
                        'variant'  => 'compact',
                        'service'  => 'Transfer of Shares in Pune',
                        'city'     => 'Pune',
                    ])
                </aside>
                <div class="faq-expanded__list">
                    <div class="faq-expanded__item" id="faq-1">
                        <h3 class="faq-expanded__q">How to transfer shares in a Pune private limited company?</h3>
                        <div class="faq-expanded__a"><p>Review AOA for ROFR and transfer restrictions. If ROFR applies, issue notice to existing shareholders and obtain waiver. Execute Form SH-4 signed by both parties and witnessed. Pay stamp duty (0.25% physical). Submit SH-4 with original certificate and KYC to company within 60 days. Board approves via resolution. Company cancels old certificate and issues new one within 1 month. Update Register of Members within 7 days.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-2">
                        <h3 class="faq-expanded__q">What is stamp duty on share transfers in Maharashtra?</h3>
                        <div class="faq-expanded__a"><p>Physical transfers (SH-4): 0.25% of consideration or market value, whichever higher, under Article 62 of Indian Stamp Act. Demat transfers: 0.015% auto-collected by NSDL/CDSL during transfer. The demat rate is uniform nationwide since July 2020 and significantly lower than physical. This cost advantage is one reason to dematerialise before Rule 9B deadline.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-3">
                        <h3 class="faq-expanded__q">What is Rule 9B and how does it affect Pune companies?</h3>
                        <div class="faq-expanded__a"><p>Rule 9B mandates all non-small private companies to issue, transfer and maintain securities only in demat form. Extended deadline: 30 June 2026. After this, physical SH-4 transfers are no longer valid. Pune companies must appoint RTA, create ISIN with NSDL/CDSL, and convert all physical certificates to demat. Small companies (turnover <Rs 4 crore, paid-up <Rs 50 lakh) are exempt.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-4">
                        <h3 class="faq-expanded__q">Can the board refuse a share transfer?</h3>
                        <div class="faq-expanded__a"><p>Yes, but only on valid AOA grounds - such as ROFR non-compliance, incomplete documents, unstamped SH-4, or transfer to prohibited party. Must send refusal with reasons within 30 days. If unjustified, transferor or transferee can appeal to NCLT Mumbai Bench within 30 days. NCLT can direct the company to register the transfer.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-5">
                        <h3 class="faq-expanded__q">What are the tax implications of share transfer?</h3>
                        <div class="faq-expanded__a"><p>Transferor faces capital gains: STCG (held <24 months, slab rates) or LTCG (held >24 months, 12.5% without indexation for unlisted shares post Budget 2024). Section 50CA deems FMV if transfer price is below FMV. For transferee: if shares received below FMV by >Rs 50,000, difference taxed under Section 56(2)(x) - except between specified relatives (exempt).</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-6">
                        <h3 class="faq-expanded__q">How does FEMA apply to cross-border share transfers?</h3>
                        <div class="faq-expanded__a"><p>When shares are transferred between resident and non-resident, FEMA pricing applies: resident to NR at not below FMV, NR to resident at not above FMV. Valuation by SEBI-registered merchant banker. Company files FC-TRS on RBI FIRMS portal within 60 days. FDI sectoral caps and Press Note 3 must be verified. Non-compliance triggers RBI compounding proceedings.</p></div>
                    </div>
                </div>
            </div>


            <!-- Quick Answers -->
            <div class="highlight-box" style="margin-top:32px;">
                <p><strong>Quick Answers</strong></p>
                <p><strong>Shares transfer kaise hota hai?</strong> AOA mein ROFR check karo > SH-4 form bharo (dono sign) > Stamp duty do (0.25% physical, 0.015% demat) > 60 din mein company ko do > Board approval > 1 mahine mein naya certificate.</p><p><strong>Kya board transfer rok sakta hai?</strong> Haan, sirf valid AOA reasons pe. Invalid refusal pe 30 din mein NCLT appeal.</p><p><strong>Rule 9B kya hai?</strong> Non-small Pvt Ltd companies ko sab shares demat mein. Deadline 30 June 2026.</p>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 18: URGENCY CTA -->
<section class="content-section" style="background: var(--orange-lighter) !important; border-left: 4px solid var(--orange);">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Transferring Shares? Execute SH-4 and File Within 60 Days</h2>
            <div class="content-text">
                
                <p>The 60-day SH-4 delivery deadline is absolute - late submissions can be rejected. New certificates must be issued within <strong>1 month</strong> (penalty Rs 25K-5L if breached). For startups, transfer delays hold up entire funding rounds. <strong>Rule 9B deadline 30 June 2026</strong> - failure to dematerialise freezes all future transfers. For FEMA, missed 60-day FC-TRS triggers RBI compounding.</p><p><strong>Transfer shares now - <a href="tel:+919459456700">Call +91 945 945 6700</a> or <a href="https://wa.me/919459456700?text=Hello%2C%20I%20just%20visited%20your%20Transfer%20of%20Shares%20in%20Pune%20page.%20I%20would%20like%20to%20know%20more%20about%20it." target="_blank" rel="noopener">WhatsApp us</a>. Free consultation.</strong></p>

            </div>
        </div>
    </div>
</section>

<!-- CONCLUSION + CTA BLOCK (Dark) -->
<section class="content-section" style="background: var(--blue) !important;">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title" style="color:#FFFFFF !important;">Transfer Shares in Pune - Properly Executed, Fully Compliant</h2>
            <div class="content-text" style="text-align:left;">
                
                <p style="color:rgba(255,255,255,0.85);font-size:16px;line-height:1.7;">Transfer of shares is a fundamental corporate action for Pune companies - whether a Baner startup co-founder exiting, an angel investor selling to a new VC, a MIDC manufacturer transferring to family, or a Hinjewadi MNC restructuring cross-border holdings. Proper SH-4 execution, stamp duty, board approval and statutory timelines are essential.</p><p style="color:rgba(255,255,255,0.85);font-size:16px;line-height:1.7;">Patron Accounting's Pune office at RTC Silver, Wagholi provides dedicated share transfer services - ROFR compliance, SH-4 execution, Rule 9B demat migration, FEMA FC-TRS, capital gains advisory and NCLT appeal support.</p><p style="color:rgba(255,255,255,0.85);font-size:16px;line-height:1.7;">With 15+ years experience, 10,000+ businesses served and a 4.9 Google rating, Patron is a trusted CA and CS firm across Pune, Mumbai, Delhi and Gurugram.</p>

            </div>
            <div style="display:flex;gap:14px;flex-wrap:wrap;margin-top:24px;">
                <a href="tel:+919459456700" style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:var(--orange);color:#fff;border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#128222; Call +91 945 945 6700</a>
                <a href="https://wa.me/919459456700?text=Hello%2C%20I%20just%20visited%20your%20Transfer%20of%20Shares%20in%20Pune%20page.%20I%20would%20like%20to%20know%20more%20about%20it." target="_blank" style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:#25D366;color:#fff;border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;" rel="noopener">&#128172; WhatsApp Us</a>
                <a href="mailto:sales@patronaccounting.com?subject=Enquiry%20for%20Transfer%20of%20Shares%20in%20Pune&body=Hello%2C%20I%20just%20visited%20your%20Transfer%20of%20Shares%20in%20Pune%20page.%20I%20would%20like%20to%20know%20more%20about%20it.%0A%0AThank%20you." style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:transparent;color:#fff;border:2px solid rgba(255,255,255,0.3);border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#9993;&#65039; Email Us</a>
            </div>
            <p style="color:rgba(255,255,255,0.7);font-size:13px;margin-top:16px;">Book a Free Consultation - No Obligation.</p>
        </div>
    </div>
</section>

<!-- GSTAT STATE BENCH CITY PAGES (32 Pages) -->
<section class="content-section" style="padding:48px 32px;background:var(--gray-50);">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title" style="text-align:center;margin-bottom:12px;">Transfer of Shares Across India</h2>
            <p style="text-align:center;color:var(--text-muted);font-size:15px;margin-bottom:40px;">Expert share transfer services in all major cities</p>
      
            <div class="pa-city-block" style="margin-bottom:40px;"><div class="pa-city-grid"><div class="pa-city-card" style="opacity:0.6;pointer-events:none;border:2px solid var(--orange);position:relative;"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Pune</div><div class="pa-card-sub">Maharashtra</div></div><span style="position:absolute;top:6px;right:8px;font-size:10px;color:var(--orange);font-weight:700;text-transform:uppercase;letter-spacing:0.5px;">You're here</span></div><a href="/transfer-of-shares/mumbai" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Mumbai</div><div class="pa-card-sub">Maharashtra</div></div></a><a href="/transfer-of-shares/delhi" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Delhi</div><div class="pa-card-sub">Delhi NCR</div></div></a><a href="/transfer-of-shares/gurugram" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Gurugram</div><div class="pa-card-sub">Haryana</div></div></a><a href="#" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Bangalore</div><div class="pa-card-sub">Karnataka</div></div></a><a href="#" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Hyderabad</div><div class="pa-card-sub">Telangana</div></div></a><a href="#" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Chennai</div><div class="pa-card-sub">Tamil Nadu</div></div></a><a href="#" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Kolkata</div><div class="pa-card-sub">West Bengal</div></div></a></div></div><div class="pa-city-block"><div class="pa-block-title">Related Services in Pune</div><div class="pa-block-sub">End-to-end corporate compliance in Pune</div><div class="pa-cross-grid"><a href="/issue-of-shares/pune" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Issue of Shares</div><div class="pa-card-sub">Pune</div></div></a><a href="/change-in-authorised-capital/pune" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Authorised Capital</div><div class="pa-card-sub">Pune</div></div></a><a href="/private-limited-company-registration/pune" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Pvt Ltd Registration</div><div class="pa-card-sub">Pune</div></div></a><a href="#" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Annual ROC Filing</div><div class="pa-card-sub">Pune</div></div></a><a href="/gst-returns/pune" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">GST Returns</div><div class="pa-card-sub">Pune</div></div></a><a href="/startup-registration/pune" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Startup Registration</div><div class="pa-card-sub">Pune</div></div></a></div></div>
        </div>
    </div>
</section>

<!-- CONTENT FRESHNESS FOOTER -->
<section class="content-section" style="padding:32px;">
    <div class="content-container">
        <div class="text-content" style="font-size:13px;color:var(--text-muted);">
            <p><strong>Content Created:</strong> 23 March 2026 &nbsp;|&nbsp; <strong>Last Updated:</strong> <span id="lastUpdatedFooter">23 March 2026</span> &nbsp;|&nbsp; <strong>Next Review:</strong> 23 June 2026 &nbsp;|&nbsp; <strong>Reviewed By:</strong> CA &amp; CS Team, Patron Accounting LLP</p>
            <p>This page is reviewed quarterly to reflect Rule 9B demat deadline updates, stamp duty changes and FEMA amendment notifications. Last review: March 2026. Next review: June 2026.</p>
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






<!-- ============================================
     CONSULTATION FORM — Country Dropdown + Validation + Bigin Integration
     ============================================ -->


<!-- Bigin WebForm Script (handles form POST to Bigin servers) -->

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
