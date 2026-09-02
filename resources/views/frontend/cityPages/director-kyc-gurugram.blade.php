
@extends('layouts.service-app')

<!-- External Dependencies (loaded by master layout in production) -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Barlow:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,400&family=DM+Sans:opsz,wght@9..40,400;9..40,500;9..40,600;9..40,700&display=swap" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

@section('meta')
    <title>Director KYC Gurugram - DIR-3 KYC & Sep 30 Deadline</title>
    <meta name="description" content="CA-assisted DIR-3 KYC filing in Gurugram. 2026 triennial amendment, DIN reactivation, Rs 5000 penalty, foreign director KYC. Serving Cyber City, Golf Course Road. Call +91 945 945 6700.">
    <link rel="canonical" href="/director-kyc/gurugram">
    <meta name="robots" content="index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1">
    <meta property="og:title" content="Director KYC Gurugram - DIR-3 KYC & Sep 30 Deadline">
    <meta property="og:description" content="CA-assisted DIR-3 KYC filing in Gurugram. 2026 triennial amendment, DIN reactivation, Rs 5000 penalty, foreign director KYC. Serving Cyber City, Golf Course Road. Call +91 945 945 6700.">
    <meta property="og:url" content="/director-kyc/gurugram">
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="Patron Accounting">
    <meta property="og:image" content="https://www.patronaccounting.com/images/og-default-square.png">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="1200">
    <meta property="og:image:type" content="image/png">
    <meta property="og:image:secure_url" content="https://www.patronaccounting.com/images/og-default-square.png">
    <meta property="og:image:alt" content="Patron Accounting - partner you can rely on">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Director KYC Gurugram - DIR-3 KYC & Sep 30 Deadline">
    <meta name="twitter:description" content="CA-assisted DIR-3 KYC filing in Gurugram. 2026 triennial amendment, DIN reactivation, Rs 5000 penalty, foreign director KYC. Serving Cyber City, Golf Course Road. Call +91 945 945 6700.">
    <meta name="twitter:image" content="https://www.patronaccounting.com/images/og-default-square.png">
@endsection

@section('schema')
    <script type="application/ld+json">{
  "@context": "https://schema.org",
  "@graph": [
    {
      "@type": "Service",
      "name": "Director KYC DIR-3 Gurugram | DIN KYC",
      "description": "CA-assisted DIR-3 KYC filing in Gurugram. 2026 triennial amendment, DIN reactivation, Rs 5000 penalty, foreign director KYC. Serving Cyber City, Golf Course Road. Call +91 945 945 6700.",
      "url": "https://www.patronaccounting.com/director-kyc/gurugram",
      "serviceType": "Director KYC DIR-3 Gurugram | DIN KYC",
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
        "url": "https://www.patronaccounting.com/director-kyc/gurugram",
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
          "name": "Director KYC Filing",
          "item": "https://www.patronaccounting.com/director-kyc"
        },
        {
          "@type": "ListItem",
          "position": 3,
          "name": "Director KYC DIR-3 Gurugram | DIN KYC",
          "item": "https://www.patronaccounting.com/director-kyc/gurugram"
        }
      ]
    },
    {
      "@type": "FAQPage",
      "mainEntity": [
        {
          "@type": "Question",
          "name": "Is DIR-3 KYC still annual?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "No. From 31 March 2026, it's once every 3 financial years (triennial) per G.S.R. 943(E). Changes in mobile/email/address must still be reported within 30 days with Rs 500 fee. Only DIR-3 KYC-Web is prescribed."
          }
        },
        {
          "@type": "Question",
          "name": "What happens if DIN is deactivated?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Cannot sign any MCA form, cannot act as director, filings requiring your DIN are rejected. Reactivate by filing DIR-3 KYC-Web with Rs 5,000 late fee. Processing: 3-7 working days."
          }
        },
        {
          "@type": "Question",
          "name": "Do resigned directors need to file?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Yes. As long as DIN exists (even if not linked to any company), KYC must be filed. Surrender DIN via DIR-5 if it was never used for any directorship."
          }
        },
        {
          "@type": "Question",
          "name": "What documents are needed?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "PAN (mandatory for Indian), Aadhaar, address proof (< 2 months), valid unique mobile and email, current DSC. Foreign directors: passport instead of Aadhaar. All must match MCA database."
          }
        },
        {
          "@type": "Question",
          "name": "What is the penalty?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "No fine per se, but DIN gets deactivated. Rs 5,000 late fee to reactivate. Amount is fixed regardless of deactivation duration. Operational disruption can delay fundraising and compliance."
          }
        },
        {
          "@type": "Question",
          "name": "How to check DIN status?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "MCA website → MCA Services → DIN Services → DIN KYC Status. Enter DIN and CAPTCHA. Shows Active, Deactivated, or other status. Patron checks proactively for all clients."
          }
        },
        {
          "@type": "Question",
          "name": "Can foreign directors file?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Yes. Passport-based verification. PAN not mandatory without Indian PAN. Passport name must match DSC exactly. OTP to registered mobile/email - ensure international accessibility."
          }
        },
        {
          "@type": "Question",
          "name": "What is the 2026 amendment?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "G.S.R. 943(E) dated 31 Dec 2025, effective 31 March 2026. Annual replaced with triennial. Only KYC-Web form. 30-day change reporting. Reduces compliance burden significantly. Quick Answers DIR-3 KYC kya hai? DIN holder ko personal details MCA mein verify karna padta hai. Ab har 3 saal mein ek baar (pehle har saal tha). DIN deactivate ho gaya? DIR-3 KYC-Web file karo Rs 5,000 late fee ke saath. 3-7 din mein reactivate. Resign ke baad bhi? Haan. Jab tak DIN active hai, KYC file karna padta hai."
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
                        Director KYC (DIR-3) in Gurugram: 2026 Triennial Amendment, Filing, and DIN Reactivation
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
                            <p class="mb-0 text-dark benefit-paragraph"><span>2026 Amendment:</span> Annual DIR-3 KYC replaced with triennial (once every 3 years) from 31 March 2026</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Form:</span> DIR-3 KYC-Web only (e-Form DIR-3 KYC discontinued for routine filing)</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Due Date:</span> 30 June of the triennial year | Changes in details must be updated within 30 days</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Penalty:</span> DIN deactivated if not filed | Rs 5,000 late fee to reactivate</p>
                        </div>
                    </div>

                    <p class="mb-4 fw-bold" style="color: var(--blue); font-size: 15px;">DIR-3 KYC for startup founders, MNC directors, LLP partners, and resigned directors across Gurugram.</p>

                    <div class="hero-cta">
                        <a href="tel:+919459456700" class="btn-video text-decoration-none">
                            <span class="play-circle"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="width:14px;height:14px;color:#fff"><path d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/></svg></span>
                            Call +91 945 945 6700
                        </a>
                        <a href="mailto:sales@patronaccounting.com" class="btn-sample text-decoration-none">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="width:18px;height:18px;"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,12 2,6"/></svg>
                            Email Us
                        </a>
                        <a href="https://wa.me/919459456700?text=Hi%2C%20I%20need%20DIR-3%20KYC%20filing%20in%20Gurugram." target="_blank" class="btn-sample text-decoration-none" rel="noopener">
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
                                            'service'  => 'Director KYC (DIR-3) in Gurugram',
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
    'ctaText'    => 'DIR-3 KYC with proactive DIN monitoring, reactivation, and foreign director support from Gurugram.',
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
            <a href="#overview-section" class="toc-btn active">Overview</a><a href="#what-section" class="toc-btn">2026 Amendment</a><a href="#who-section" class="toc-btn">Who Must File</a><a href="#services-section" class="toc-btn">Reactivation</a><a href="#procedure-section" class="toc-btn">Process</a><a href="#documents-section" class="toc-btn">Documents</a><a href="#challenges-section" class="toc-btn">Issues</a><a href="#fees-section" class="toc-btn">Fees</a><a href="#timeline-section" class="toc-btn">Calendar</a><a href="#benefits-section" class="toc-btn">Why Patron</a><a href="#comparison-section" class="toc-btn">Foreign Dir.</a><a href="#faq-section" class="toc-btn">FAQs</a>
        </div>
        <button class="toc-arrow right" id="tocRight">&#10095;</button>
    </div>
</div>

<!-- SECTION 2: OVERVIEW / INTRO + TL;DR -->
<section class="content-section" id="overview-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Director KYC in Gurugram: New Triennial Regime, DIN Compliance, and Reactivation</h2>
            <div class="content-text">
                <div class="highlight-box" style="margin-bottom:20px;">
                    <p><strong>&#128204; TL;DR - Director KYC (DIR-3) in Gurugram Services at a Glance</strong></p>
                    <p>MCA has replaced annual DIR-3 KYC with triennial (once every 3 years) from 31 March 2026 (G.S.R. 943(E)). Only DIR-3 KYC-Web is prescribed. Due date: 30 June of the triennial year. Changes in mobile/email/address must be updated within 30 days. Non-filing = DIN deactivated. Reactivation: Rs 5,000 late fee. Applies to ALL DIN holders: active, resigned, foreign, LLP partners.</p>
                </div>
                <p>Gurugram has a high concentration of DIN holders across startups, MNCs, and LLPs. For a comprehensive overview, refer to our <a href="/director-kyc">Director KYC</a> national guide.</p><div class="table-responsive-wrapper"><table><thead><tr><th>Parameter</th><th>Old Regime (Pre-31 March 2026)</th><th>New Regime (From 31 March 2026)</th></tr></thead><tbody><tr><td>Frequency</td><td>Annual</td><td>Once every 3 financial years</td></tr><tr><td>Due Date</td><td>30 September each year</td><td>30 June of triennial year</td></tr><tr><td>Form</td><td>DIR-3 KYC e-Form + KYC-Web</td><td>DIR-3 KYC-Web only</td></tr><tr><td>Changes</td><td>Filed with next annual KYC</td><td>Within 30 days (Rs 500 fee)</td></tr><tr><td>Reactivation Fee</td><td>Rs 5,000</td><td>Rs 5,000 (unchanged)</td></tr></tbody></table></div><p</p>
                <p>Directors who filed for FY 2024-25 (by September 2025) won't need to file again until FY 2027-28 (due by 30 June 2028). However, any change in mobile/email/address must be updated within 30 days. Directors with deactivated DINs should reactivate before 31 March 2026.</p>
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
                <h2 class="section-title">2026 Amendment Details (G.S.R. 943(E))</h2>
                <div class="content-text what-is-definition">
                    
                    <p><strong>Notification:</strong> G.S.R. 943(E) dated 31 December 2025, amending Companies (Appointment and Qualification of Directors) Rules, 2014. Effective: 31 March 2026.</p><p><strong>Key Changes:</strong> (1) Annual → triennial filing. (2) Only DIR-3 KYC-Web prescribed (dual form system discontinued). (3) Changes in mobile/email/address: report within 30 days via KYC-Web with Rs 500 fee. (4) Regional Director reference updated.</p><p><strong>Impact:</strong> Significantly reduces compliance burden for directors with stable contact details. The mandatory 30-day update ensures data accuracy. For Gurugram directors, next filing may not be due until 2028 or 2029.</p><p><strong>Patron Advisory:</strong> Verify KYC status on MCA portal immediately. Deactivated DINs should be reactivated before 31 March 2026 under transition provisions. See <a href="/appointment-of-director">Appointment of Director</a> for DIN requirements.</p>

                </div>
                <div class="highlight-box" style="margin-top:20px;">
                    <p><strong>Key Terms for Director KYC (DIR-3) in Gurugram:</strong></p>
                    <p><strong>DIR-3 KYC-Web:</strong> The only prescribed form from 31 March 2026 for director KYC. Filed on MCA V3 portal with OTP + DSC + professional certification.</p><p><strong>Triennial:</strong> Once every 3 consecutive financial years (replacing annual requirement).</p><p><strong>DIN Deactivation:</strong> MCA marks DIN as "Deactivated due to Non-filing of DIR-3 KYC" - blocks all MCA form signing.</p><p><strong>Rs 5,000 Late Fee:</strong> Payable for reactivation of deactivated DIN, regardless of duration of deactivation.</p><p><strong>30-Day Change Rule:</strong> Any change in mobile, email, or address must be reported via KYC-Web within 30 days with Rs 500 fee.</p>

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
                            <text x="100" y="170" font-size="10" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial, sans-serif">Director KYC (DIR-3) in Gurugram</text>
                        </svg>
                    </div>
                    <div class="illustration-badge">
                        <span>Director KYC</span>
                        <strong>Gurugram DIR-3</strong>
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
            <h2 class="section-title">Who Must File DIR-3 KYC?</h2>
            <div class="content-text">
                
                <div class="table-responsive-wrapper"><table><thead><tr><th>Category</th><th>Must File?</th><th>Gurugram Context</th></tr></thead><tbody><tr><td>Active director of company</td><td>Yes</td><td>All Gurugram company directors</td></tr><tr><td>Resigned director (DIN active)</td><td>Yes</td><td>Founders who exited but DIN remains</td></tr><tr><td>Director of dormant company</td><td>Yes (if DIN active)</td><td>Dormant shells in Gurugram</td></tr><tr><td>Disqualified under 164(2)</td><td>Yes</td><td>DIN still needs KYC even if disqualified</td></tr><tr><td>LLP Designated Partner</td><td>Yes</td><td>LLP partners in Udyog Vihar, Sohna Road</td></tr><tr><td>Individual with DIN, never served</td><td>Yes</td><td>DIN obtained but appointment never completed</td></tr><tr><td>Foreign national with Indian DIN</td><td>Yes</td><td>Golf Course Road MNC directors</td></tr></tbody></table></div><p><strong>Common misconception:</strong> Many founders believe resignation stops KYC obligation. Incorrect. As long as DIN exists, KYC must be filed. Surrender DIN via DIR-5 if never used. See <a href="/company-closure">Company Closure</a> for clearing old company compliance.</p>

            </div>
            </div>
        </div>
    </div>
</section>

<!-- SECTION 5: OUR SERVICES -->
<section class="content-section" id="services-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">DIN Deactivation and Reactivation</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Service</th><th>What We Do</th></tr></thead>
                    <tbody>
                        <tr><td>Deactivation Trigger</td><td>DIN holder fails to file DIR-3 KYC within prescribed timeline (triennial cycle or 30-day change window)</td></tr><tr><td>Impact: Cannot Sign Forms</td><td>Cannot sign any MCA form (DIR-12, AOC-4, MGT-7A). All filings requiring deactivated DIN are rejected</td></tr><tr><td>Impact: Cannot Act as Director</td><td>Cannot act as director in any company. DIN shows inactive in Master Data</td></tr><tr><td>Reactivation: File KYC-Web</td><td>File DIR-3 KYC-Web on MCA V3 with all current details + professional certification + DSC</td></tr><tr><td>Reactivation: Pay Rs 5,000</td><td>Late fee payable at submission. Amount is fixed regardless of deactivation duration</td></tr><tr><td>Reactivation: Timeline</td><td>MCA processes and reactivates within 3-7 working days after filing and payment</td></tr>

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
            <h2 class="section-title">DIR-3 KYC Filing Process</h2>
            <p class="section-subtitle" style="text-align:left;max-width:100%;">From DIN status check to filing confirmation - Patron manages OTP verification, DSC coordination, and professional certification.</p>
        </header>
        <div class="steps-container">
            <div class="step-card"><div class="step-content"><span class="step-badge">Step 1</span><h3 class="step-title">Check DIN Status</h3><p class="step-description">MCA V3 → DIN Services → DIN KYC Status. Verify: Active (KYC current) or Deactivated (KYC missed). Patron checks DIN status as first step for every director engagement.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Status verified</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Action plan set</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="15" y="5" width="90" height="70" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><text x="60" y="40" font-size="9" fill="#E8712C" font-weight="800" text-anchor="middle" font-family="Arial">DIN</text></svg></div><span class="illustration-label">Status Checked</span><span class="step-number-large">01</span></div></div></div><div class="step-card"><div class="step-content"><span class="step-badge">Step 2</span><h3 class="step-title">Gather Docs + OTP Verification</h3><p class="step-description">PAN, Aadhaar/passport, address proof (< 2 months), valid mobile, email, current DSC. Verify mobile and email via OTP on MCA portal. Patron manages OTP coordination.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Docs ready</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>OTP verified</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="20" y="15" width="80" height="50" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><text x="60" y="40" font-size="9" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">OTP ✓</text></svg></div><span class="illustration-label">Verified</span><span class="step-number-large">02</span></div></div></div><div class="step-card"><div class="step-content"><span class="step-badge">Step 3</span><h3 class="step-title">File KYC-Web + DSC Submit</h3><p class="step-description">File DIR-3 KYC-Web on MCA V3. Review pre-filled details. Update changes. Certify by practising CA/CS. Submit with DSC. For deactivated DIN: pay Rs 5,000 at submission. Confirmation in 3-7 days.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>KYC filed</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>DIN Active</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="20" y="10" width="80" height="60" rx="8" fill="#E8F5E9" stroke="#25D366" stroke-width="2"/><path d="M52 40l5 5 12-12" stroke="#25D366" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/></svg></div><span class="illustration-label">DIN Active</span><span class="step-number-large">03</span></div></div></div>

        </div>
    </div>
</section>

<!-- SECTION 8: DOCUMENTS REQUIRED -->
<section class="content-section" id="documents-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Documents Required (Indian vs Foreign Director)</h2>
            <div class="content-text">
                
                <div class="table-responsive-wrapper"><table><thead><tr><th>Document</th><th>Indian Director</th><th>Foreign Director</th></tr></thead><tbody><tr><td>PAN Card</td><td>Mandatory</td><td>Not mandatory (if no Indian PAN)</td></tr><tr><td>Aadhaar</td><td>Mandatory</td><td>N/A</td></tr><tr><td>Passport</td><td>Optional</td><td>Mandatory (all pages)</td></tr><tr><td>Address Proof (permanent)</td><td>Voter ID / DL / PAN</td><td>Passport / overseas ID</td></tr><tr><td>Address Proof (present)</td><td>Utility bill < 2 months</td><td>Utility bill / bank statement</td></tr><tr><td>Mobile Number</td><td>Unique, personal</td><td>Active number for OTP</td></tr><tr><td>Email ID</td><td>Unique, personal</td><td>Active email for OTP</td></tr><tr><td>DSC</td><td>Class 3, current</td><td>Class 3, Indian CA issued</td></tr></tbody></table></div><div class="highlight-box" style="margin-top:20px;"><p><strong>Critical:</strong> Mobile and email cannot be shared with another DIN. DSC must not be expired (renewal: 1-2 days). OTP sent to registered mobile/email only - ensure accessibility before filing.</p></div>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 9: CHALLENGES -->
<section class="content-section" id="challenges-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Common Issues for Gurugram DIN Holders</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Challenge</th><th>Impact</th><th>How Patron Accounting Solves It</th></tr></thead>
                    <tbody>
                        <tr><td>DIN Deactivated Without Knowledge</td><td>Discovered when MCA filing (DIR-12, AOC-4) is rejected</td><td>Patron sends proactive reminders. Zero deactivation for managed directors</td></tr><tr><td>OTP Not Received</td><td>Director changed phone/email without updating MCA records</td><td>Patron assists with MCA helpdesk coordination and grievance redressal</td></tr><tr><td>DSC Expired</td><td>Cannot file KYC-Web without current DSC</td><td>DSC renewal in 1-2 days. Patron arranges as part of engagement</td></tr><tr><td>Foreign Director Without PAN</td><td>Passport name must exactly match DSC name</td><td>Patron manages passport-based verification and foreign workflow</td></tr><tr><td>Multiple DINs from Past Ventures</td><td>Single KYC covers all companies but linked non-compliant co. triggers 164(2)</td><td>Patron checks all linked company compliance before filing KYC</td></tr>

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
            <h2 class="section-title">DIR-3 KYC Fees in Gurugram</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Fee Component</th><th>Amount</th></tr></thead>
                    <tbody>
                        <tr><td>DIR-3 KYC-Web (on time)</td><td>Starting from INR 499 (Exl GST) | Govt fee: Nil</td></tr><tr><td>DIR-3 KYC-Web (with changes)</td><td>Starting from INR 999 (Exl GST) | Govt fee: Rs 500</td></tr><tr><td>DIN Reactivation (deactivated DIN)</td><td>Starting from INR 1,999 (Exl GST) | Govt fee: Rs 5,000</td></tr><tr><td>DSC Renewal (if expired)</td><td>Starting from INR 999-1,499 (Exl GST)</td></tr><tr><td>Foreign Director KYC</td><td>Starting from INR 1,999 (Exl GST)</td></tr><tr><td>Bulk KYC (5+ directors)</td><td>Starting from INR 399/director (Exl GST)</td></tr><tr><td>DIN Surrender (DIR-5)</td><td>Starting from INR 999 (Exl GST)</td></tr>

                    </tbody>
                </table>
                </div>
                <p style="margin-top:16px;font-size:13px;color:var(--text-muted);font-style:italic;">All fees and charges listed are indicative only and do not constitute a binding offer. Final amounts may vary depending on the volume of work and the complexity involved.</p>
                <p style="margin-top:16px;">Professional service charges for drafting, filing, and representation are separate from the statutory fees. The exact fee depends on the complexity of the case, disputed amount, and number of hearings required. Contact us for a detailed quote.</p>
                <p style="margin-top:16px;"><strong>Get a free Director KYC (DIR-3) in Gurugram consultation - <a href="tel:+919459456700">Call +91 945 945 6700</a> or <a href="https://wa.me/919459456700?text=Hi%2C%20I%20need%20DIR-3%20KYC%20filing%20in%20Gurugram." target="_blank" rel="noopener">WhatsApp us</a>. No-obligation assessment.</strong></p>
            </div>
        </div>
    </div>
</section>

<!-- SECTION 11: TIMELINE -->
<section class="content-section" id="timeline-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">DIR-3 KYC Calendar (Post-Amendment)</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Stage</th><th>Estimated Timeline</th></tr></thead>
                    <tbody>
                        <tr><td>Triennial Regime Begins</td><td>31 March 2026 | G.S.R. 943(E) effective</td></tr><tr><td>Next Triennial Filing Due</td><td>30 June of the relevant 3rd year (depends on last filing date)</td></tr><tr><td>Change in Details (any time)</td><td>Within 30 days of change | Rs 500 processing fee</td></tr><tr><td>DIN Deactivation</td><td>If triennial cycle missed | DIN marked Deactivated</td></tr><tr><td>Reactivation</td><td>Any time | Rs 5,000 late fee + DIR-3 KYC-Web | 3-7 days processing</td></tr>

                    </tbody>
                </table>
                </div>
                <div class="highlight-box" style="margin-top:16px;">
                    
                    <p><strong>Example:</strong> Director who filed for FY 2024-25 (by September 2025) → next filing due 30 June 2028 (FY 2027-28). If mobile changes in January 2027, file KYC-Web within 30 days with Rs 500 fee regardless of cycle. Deactivated DINs should be reactivated before 31 March 2026.</p>

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
            <h2 class="section-title">Why Choose Patron Accounting for DIR-3 KYC in Gurugram?</h2>
        </div>
        <div class="features-grid"><article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><h3 class="feature-title">Gurugram Office</h3><p class="feature-text">Golf Course Extension Road - DIR-3 KYC for directors across Cyber City, Golf Course Road, Sohna Road, and Udyog Vihar.</p></article><article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg></div><h3 class="feature-title">Proactive Monitoring</h3><p class="feature-text">Track DIN status for all client directors. Send reminders before deadline. Zero deactivation for Patron-managed directors.</p></article><article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M14 2H6a2 2 0 00-2 2v16a2 2 0 002 2h12a2 2 0 002-2V8z"/><path d="M14 2v6h6M16 13H8M16 17H8"/></svg></div><h3 class="feature-title">2026 Amendment Expert</h3><p class="feature-text">Clear guidance on triennial transition: who files now, who waits, who should reactivate before 31 March 2026.</p></article><article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M17 21v-2a4 4 0 00-4-4H5a4 4 0 00-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M23 21v-2a4 4 0 00-3-3.87M16 3.13a4 4 0 010 7.75"/></svg></div><h3 class="feature-title">Foreign Director Support</h3><p class="feature-text">Passport KYC, foreign DSC, cross-timezone OTP coordination for Golf Course Road MNC directors.</p></article></div>
    </div>
</section>

<!-- SECTION 12A: SOCIAL PROOF -->
<section class="content-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Trusted by 10,000+ Businesses Across India</h2>
            <div class="content-text">
                
                <p><strong>Trust Banner:</strong> 10,000+ Businesses Served | 4.9 Google Rating | 50,000+ Documents Filed | 15+ Years of Practice</p><blockquote style="border-left:3px solid var(--orange);padding:16px 20px;margin:20px 0;background:var(--orange-lighter);border-radius:0 var(--radius-sm) var(--radius-sm) 0;"><p style="font-style:italic;margin-bottom:8px;">"3 DINs from past startups - all deactivated. Patron reactivated all 3, filed KYC, checked none triggered Section 164(2). Clean slate in 5 days."</p><p style="font-weight:700;font-size:14px;margin:0;">- Serial Entrepreneur, DLF Cyber City</p></blockquote><blockquote style="border-left:3px solid var(--orange);padding:16px 20px;margin:20px 0;background:var(--orange-lighter);border-radius:0 var(--radius-sm) var(--radius-sm) 0;"><p style="font-style:italic;margin-bottom:8px;">"5 directors including 2 Japanese nationals. Patron handled passport KYC, DSC across time zones, OTP management. All filed before deadline."</p><p style="font-weight:700;font-size:14px;margin:0;">- HR Manager, Golf Course Road MNC</p></blockquote>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 13: SELF-FILING vs PROFESSIONAL COMPARISON -->
<section class="content-section" id="comparison-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Foreign Director KYC Process</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Parameter</th><th>Indian Director</th><th>Foreign Director</th></tr></thead>
                    <tbody>
                        <tr><td>Identity Verification</td><td>PAN + Aadhaar</td><td>Passport (all pages)</td></tr><tr><td>Address Proof</td><td>Utility bill / Voter ID</td><td>Overseas utility bill / bank statement (notarised)</td></tr><tr><td>OTP</td><td>Indian mobile</td><td>Must ensure Indian OTP accessibility (roaming/virtual number)</td></tr><tr><td>DSC</td><td>Indian Class 3</td><td>Indian CA-issued Class 3 (eMudhra, Sify)</td></tr><tr><td>Name Match</td><td>PAN name = DSC name</td><td>Passport name must exactly match DSC name</td></tr><tr><td>Patron Support</td><td>Standard workflow</td><td>Cross-timezone coordination, MCA foreign workflow management</td></tr>

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
                
                <ul><li><a href="/director-kyc">Director KYC (National)</a></li><li><a href="/appointment-of-director">Appointment of Director</a> - DIN + DIR-12</li><li><a href="#">Annual Compliance</a> - Complete ROC package</li><li><a href="/company-closure">Company Closure</a> - Clear DIN compliance</li><li><a href="/fdi-compliance">FDI Compliance</a> - Foreign director</li></ul>

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
                
                <p><strong>Governing Law:</strong> Companies Act, 2013 | Companies (Appointment and Qualification of Directors) Rules, 2014 (amended by G.S.R. 943(E) dated 31 December 2025, effective 31 March 2026)</p><p><strong>Key Rule:</strong> Rule 12A (DIR-3 KYC requirement) - amended from annual to triennial</p><p><strong>Form:</strong> DIR-3 KYC-Web (only prescribed from 31 March 2026)</p><p><strong>Portal:</strong> <a href="https://mca.gov.in" target="_blank" rel="noopener">MCA V3</a> → DIN Services → DIR-3 KYC Web</p><p><strong>Penalties:</strong></p><p><strong>Non-filing:</strong> DIN deactivated.</p><p><strong>Reactivation:</strong> Rs 5,000 late fee.</p><p><strong>False information:</strong> Section 448/449 + Bharatiya Nyaya Sanhita 2023.</p><p><strong>Change not reported (30 days):</strong> DIN may be deactivated.</p>

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
                    <h2 class="faq-expanded__title">FAQs - Director KYC (DIR-3) in Gurugram</h2>
                    <p class="faq-expanded__lead">Common questions about DIR-3 KYC, the 2026 triennial amendment, DIN reactivation, and foreign director filing for Gurugram DIN holders.</p>
                    @include('partials.bigin-form', [
                        'variant'  => 'compact',
                        'service'  => 'Director KYC (DIR-3) in Gurugram',
                        'city'     => 'Gurugram',
                    ])
                </aside>
                <div class="faq-expanded__list">
                    <div class="faq-expanded__item" id="faq-1">
                        <h3 class="faq-expanded__q">Is DIR-3 KYC still annual?</h3>
                        <div class="faq-expanded__a"><p>No. From 31 March 2026, it's once every 3 financial years (triennial) per G.S.R. 943(E). Changes in mobile/email/address must still be reported within 30 days with Rs 500 fee. Only DIR-3 KYC-Web is prescribed.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-2">
                        <h3 class="faq-expanded__q">What happens if DIN is deactivated?</h3>
                        <div class="faq-expanded__a"><p>Cannot sign any MCA form, cannot act as director, filings requiring your DIN are rejected. Reactivate by filing DIR-3 KYC-Web with Rs 5,000 late fee. Processing: 3-7 working days.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-3">
                        <h3 class="faq-expanded__q">Do resigned directors need to file?</h3>
                        <div class="faq-expanded__a"><p>Yes. As long as DIN exists (even if not linked to any company), KYC must be filed. Surrender DIN via DIR-5 if it was never used for any directorship.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-4">
                        <h3 class="faq-expanded__q">What documents are needed?</h3>
                        <div class="faq-expanded__a"><p>PAN (mandatory for Indian), Aadhaar, address proof (< 2 months), valid unique mobile and email, current DSC. Foreign directors: passport instead of Aadhaar. All must match MCA database.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-5">
                        <h3 class="faq-expanded__q">What is the penalty?</h3>
                        <div class="faq-expanded__a"><p>No fine per se, but DIN gets deactivated. Rs 5,000 late fee to reactivate. Amount is fixed regardless of deactivation duration. Operational disruption can delay fundraising and compliance.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-6">
                        <h3 class="faq-expanded__q">How to check DIN status?</h3>
                        <div class="faq-expanded__a"><p>MCA website → MCA Services → DIN Services → DIN KYC Status. Enter DIN and CAPTCHA. Shows Active, Deactivated, or other status. Patron checks proactively for all clients.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-7">
                        <h3 class="faq-expanded__q">Can foreign directors file?</h3>
                        <div class="faq-expanded__a"><p>Yes. Passport-based verification. PAN not mandatory without Indian PAN. Passport name must match DSC exactly. OTP to registered mobile/email - ensure international accessibility.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-8">
                        <h3 class="faq-expanded__q">What is the 2026 amendment?</h3>
                        <div class="faq-expanded__a"><p>G.S.R. 943(E) dated 31 Dec 2025, effective 31 March 2026. Annual replaced with triennial. Only KYC-Web form. 30-day change reporting. Reduces compliance burden significantly.</p></div>
                    </div>
                </div>
            </div>


            <!-- Quick Answers -->
            <div class="highlight-box" style="margin-top:32px;">
                <p><strong>Quick Answers</strong></p>
                <p><strong>DIR-3 KYC kya hai?</strong> DIN holder ko personal details MCA mein verify karna padta hai. Ab har 3 saal mein ek baar (pehle har saal tha).</p><p><strong>DIN deactivate ho gaya?</strong> DIR-3 KYC-Web file karo Rs 5,000 late fee ke saath. 3-7 din mein reactivate.</p><p><strong>Resign ke baad bhi?</strong> Haan. Jab tak DIN active hai, KYC file karna padta hai.</p>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 18: URGENCY CTA -->
<section class="content-section" style="background: var(--orange-lighter) !important; border-left: 4px solid var(--orange);">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Deactivated DIN? Reactivate Before 31 March 2026</h2>
            <div class="content-text">
                
                <p>Triennial regime effective 31 March 2026. Deactivated DINs should reactivate now. Changes in mobile/email/address: 30 days. DSC must be current. OTP must be accessible. Deactivated DIN blocks ALL MCA filings and can delay fundraising.</p><p><strong><a href="tel:+919459456700">Call +91 945 945 6700</a> or <a href="https://wa.me/919459456700?text=Hi%2C%20I%20need%20DIR-3%20KYC%20filing%20in%20Gurugram." target="_blank" rel="noopener">WhatsApp us</a>.</strong></p>

            </div>
        </div>
    </div>
</section>

<!-- CONCLUSION + CTA BLOCK (Dark) -->
<section class="content-section" style="background: var(--blue) !important;">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title" style="color:#FFFFFF !important;">Get Expert DIR-3 KYC Filing in Gurugram</h2>
            <div class="content-text" style="text-align:left;">
                
                <p style="color:rgba(255,255,255,0.85);">Director KYC has been simplified by the 2026 triennial amendment, but the compliance obligation remains critical. DIN deactivation is instant and blocks all MCA filings. The Rs 5,000 reactivation fee is minor, but operational disruption can delay fundraising and compliance.</p><p style="color:rgba(255,255,255,0.85);">Patron Accounting's Gurugram office provides proactive DIR-3 KYC management: DIN monitoring, timely reminders, OTP coordination, DSC renewal, foreign director support, and reactivation.</p><p style="color:rgba(255,255,255,0.85);">With 10,000+ businesses served, a 4.9 Google rating, and 50,000+ documents filed, Patron Accounting LLP is a trusted compliance partner across Gurugram, NCR, and India.</p>

            </div>
            <div style="display:flex;gap:14px;flex-wrap:wrap;margin-top:24px;">
                <a href="tel:+919459456700" style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:var(--orange);color:#fff;border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#128222; Call +91 945 945 6700</a>
                <a href="https://wa.me/919459456700?text=Hi%2C%20I%20need%20DIR-3%20KYC%20filing%20in%20Gurugram." target="_blank" style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:#25D366;color:#fff;border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;" rel="noopener">&#128172; WhatsApp Us</a>
                <a href="mailto:sales@patronaccounting.com?subject=DIR-3%20KYC%20Gurugram&body=Hi%2C%20I%20need%20DIR-3%20KYC%20filing." style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:transparent;color:#fff;border:2px solid rgba(255,255,255,0.3);border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#9993;&#65039; Email Us</a>
            </div>
            <p style="color:rgba(255,255,255,0.7);font-size:13px;margin-top:16px;">Book a Free Consultation - No Obligation.</p>
        </div>
    </div>
</section>

<!-- GSTAT STATE BENCH CITY PAGES (32 Pages) -->
<section class="content-section" style="padding:48px 32px;background:var(--gray-50);">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title" style="text-align:center;margin-bottom:12px;">Director KYC - Available Cities</h2>
            <p style="text-align:center;color:var(--text-muted);font-size:15px;margin-bottom:40px;">Expert DIR-3 KYC services across major Indian cities</p>
         
            <div class="pa-city-block" style="margin-bottom:40px;"><div class="pa-block-title">City-Wise Director KYC</div><div class="pa-block-sub">Select your city</div><div class="pa-city-grid"><a href="/director-kyc/pune" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Pune</div><div class="pa-card-sub">Maharashtra</div></div></a><a href="/director-kyc/mumbai" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Mumbai</div><div class="pa-card-sub">Maharashtra</div></div></a><a href="/director-kyc/delhi" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Delhi</div><div class="pa-card-sub">Delhi NCR</div></div></a><div class="pa-city-card" style="opacity:0.6; pointer-events:none; border:2px solid var(--orange); position:relative;"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Gurugram</div><div class="pa-card-sub">Haryana</div></div><span style="position:absolute; top:6px; right:8px; font-size:10px; color:var(--orange); font-weight:700; text-transform:uppercase; letter-spacing:0.5px;">You're here</span></div></div></div><div class="pa-city-block"><div class="pa-block-title">Related Services in Gurugram</div><div class="pa-block-sub">End-to-end director compliance</div><div class="pa-cross-grid"><a href="/appointment-of-director/gurugram" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Appointment of Director</div><div class="pa-card-sub">Gurugram</div></div></a><a href="/private-limited-company-compliance/gurugram" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Annual Compliance</div><div class="pa-card-sub">Gurugram</div></div></a><a href="/company-closure/gurugram" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Company Closure</div><div class="pa-card-sub">Gurugram</div></div></a><a href="/private-limited-company-registration/gurugram" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Company Registration</div><div class="pa-card-sub">Gurugram</div></div></a><a href="/accounting-services/gurugram" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Accounting Services</div><div class="pa-card-sub">Gurugram</div></div></a><a href="/fdi-compliance/gurugram" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">FDI Compliance</div><div class="pa-card-sub">Gurugram</div></div></a></div></div>
        </div>
    </div>
</section>

<!-- CONTENT FRESHNESS FOOTER -->
<section class="content-section" style="padding:32px;">
    <div class="content-container">
        <div class="text-content" style="font-size:13px;color:var(--text-muted);">
            <p><strong>Content Created:</strong> 03 April 2026 &nbsp;|&nbsp; <strong>Last Updated:</strong> <span id="lastUpdatedFooter">03 April 2026</span> &nbsp;|&nbsp; <strong>Next Review:</strong> 03 July 2026 &nbsp;|&nbsp; <strong>Reviewed By:</strong> CA &amp; CS Team, Patron Accounting LLP</p>
            <p>This page is reviewed quarterly. G.S.R. 943(E) triennial amendment, Rule 12A, DIR-3 KYC-Web process, and reactivation fees are verified against MCA notifications.</p>
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
