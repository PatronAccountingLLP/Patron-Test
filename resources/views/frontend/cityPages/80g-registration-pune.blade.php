
@extends('layouts.service-app')

<!-- External Dependencies (loaded by master layout in production) -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Barlow:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,400&family=DM+Sans:opsz,wght@9..40,400;9..40,500;9..40,600;9..40,700&display=swap" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

@section('meta')
    <title>80G Registration in Pune - Form 10A & Donor Deduction</title>
    <meta name="description" content="CA-assisted 80G registration in Pune. Donor tax deduction for NGOs. Form 10A/10AB filing. CSR-1, 12A, Form 10BD/10BE included. Call +91 945 945 6700.">
    <link rel="canonical" href="/80g-registration/pune">
    <meta name="robots" content="index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1">
    <meta property="og:title" content="80G Registration in Pune - Form 10A & Donor Deduction">
    <meta property="og:description" content="CA-assisted 80G registration in Pune. Donor tax deduction for NGOs. Form 10A/10AB filing. CSR-1, 12A, Form 10BD/10BE included. Call +91 945 945 6700.">
    <meta property="og:url" content="/80g-registration/pune">
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="Patron Accounting">
    <meta property="og:image" content="https://www.patronaccounting.com/images/og-default-square.png">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="1200">
    <meta property="og:image:type" content="image/png">
    <meta property="og:image:secure_url" content="https://www.patronaccounting.com/images/og-default-square.png">
    <meta property="og:image:alt" content="Patron Accounting - partner you can rely on">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="80G Registration in Pune - Form 10A & Donor Deduction">
    <meta name="twitter:description" content="CA-assisted 80G registration in Pune. Donor tax deduction for NGOs. Form 10A/10AB filing. CSR-1, 12A, Form 10BD/10BE included. Call +91 945 945 6700.">
    <meta name="twitter:image" content="https://www.patronaccounting.com/images/og-default-square.png">
@endsection

@section('schema')
    <script type="application/ld+json">{
  "@context": "https://schema.org",
  "@graph": [
    {
      "@type": "Service",
      "name": "80G Registration in Pune - Form 10A & Donor Deduction",
      "description": "CA-assisted 80G registration in Pune. Donor tax deduction for NGOs. Form 10A/10AB filing. CSR-1, 12A, Form 10BD/10BE included. Call +91 945 945 6700.",
      "url": "https://www.patronaccounting.com/80g-registration/pune",
      "serviceType": "80G Registration in Pune - Form 10A & Donor Deduction",
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
        "url": "https://www.patronaccounting.com/80g-registration/pune",
        "price": "7999"
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
          "name": "80G Registration for NGOs - Form 10A & Donor Tax Deduction",
          "item": "https://www.patronaccounting.com/80g-registration"
        },
        {
          "@type": "ListItem",
          "position": 3,
          "name": "80G Registration in Pune - Form 10A & Donor Deduction",
          "item": "https://www.patronaccounting.com/80g-registration/pune"
        }
      ]
    },
    {
      "@type": "FAQPage",
      "mainEntity": [
        {
          "@type": "Question",
          "name": "How much does 80G registration cost in Pune?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "There is no government fee for 80G registration. Professional fees for CA-assisted Form 10A filing start from Rs 7,999 covering document preparation, PCIT liaison, and Form 10BD/10BE setup. The 12A + 80G bundle costs Rs 11,999. The complete donor-readiness package (12A + 80G + CSR-1 + NGO Darpan) costs Rs 14,999."
          }
        },
        {
          "@type": "Question",
          "name": "How long does 80G registration take in Pune?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Provisional 80G registration via Form 10A takes 15 to 30 days from filing. The PCIT (Exemptions), Pune must pass the order within 1 month. For Form 10AB renewal, the PCIT has up to 6 months. When filed simultaneously with 12A, the complete registration takes 30-45 days."
          }
        },
        {
          "@type": "Question",
          "name": "What is the difference between 80G and 12A?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "80G benefits the DONOR - individuals and companies donating to an 80G-registered NGO can claim a 50% tax deduction. 12A benefits the ORGANISATION - the trust, society, or Section 8 company's surplus income is exempt from income tax. Both are complementary and should be obtained simultaneously. CSR donors require both 12A and 80G for compliance."
          }
        },
        {
          "@type": "Question",
          "name": "Is 80G deduction available under the new tax regime?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "No. Under Section 115BAC, donors who opt for the new tax regime cannot claim 80G deduction. Only donors filing under the old tax regime can claim the 50% deduction. This is a critical limitation. Corporate CSR donations are typically made from the company entity which can choose old regime."
          }
        },
        {
          "@type": "Question",
          "name": "What is Form 10BD and Form 10BE?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Form 10BD is the Statement of Donations filed by every 80G NGO with the Income Tax Department by 31 May each year, listing all donors with PAN, address, amount, and payment mode. Form 10BE is the Donation Certificate issued to each donor. Without Form 10BE, the donor's 80G deduction is rejected because the IT Department cross-matches data."
          }
        },
        {
          "@type": "Question",
          "name": "What is the 80G renewal deadline for 2026?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Registrations revalidated in 2021 expire on 31 March 2026. Form 10AB for renewal was due by 30 September 2025. Donations received after expiry do not qualify for 80G deduction regardless of charitable activities. Contact Patron immediately for remedial filing with the PCIT (Exemptions), Pune."
          }
        },
        {
          "@type": "Question",
          "name": "Can corporates claim CSR deduction through 80G?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "CSR expenditure under Section 135 is not directly deductible as a business expense. However, if the CSR donation is made to an 80G-registered organisation, the company can claim 80G deduction in its income tax return. The receiving NGO must have both 80G and CSR-1. Over 200 companies in Pune's Hinjewadi, Kharadi, and Chakan are mandated to make CSR contributions."
          }
        },
        {
          "@type": "Question",
          "name": "Does a Pune trust need Charity Commissioner registration before 80G?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Yes. In Maharashtra, all charitable trusts and societies must be registered with the Joint Charity Commissioner under the Bombay Public Trusts Act 1950 before the Income Tax Department accepts Form 10A for 80G. The Joint Charity Commissioner, Pune is at 45/2, Dhole Patil Marg, Opp. Wadia College, Pune 411 001."
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
                        80G Registration in Pune: Donor Tax Deduction for Trusts, Societies, and Section 8 Companies
                    </h1>

                    <div class="expert-attribution-box">
                        <span class="eab-check"><svg width="16" height="16" viewBox="0 0 24 24" fill="currentColor"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg></span>
                        <span class="eab-title">Reviewed by CA and CS Team, Patron Accounting LLP</span>
                        <span class="eab-meta">
                            <span>ICAI & ICSI Registered</span><span class="eab-sep">|</span>
                            <span>15+ Years Experience</span><span class="eab-sep">|</span>
                            <span>Last Updated: <span id="lastUpdated">13 March 2026</span></span>
                        </span>
                        <a href="#" class="eab-link">Verify Credentials &rarr;</a>
                    </div>

                    <div class="mb-4">
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Documents:</span> Trust deed/MOA, PAN of NGO, 12A certificate, 3-year accounts, activity report, donor list</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Fees:</span> Starting from Rs 7,999 (all-inclusive: Form 10A filing + CA charges + Form 10BD/10BE setup)</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Eligibility:</span> Charitable trusts, registered societies, Section 8 companies with 12A registration</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Timeline:</span> Provisional registration (Form 10A) in 15-30 days | Renewal (Form 10AB) in 30-60 days</p>
                        </div>
                    </div>

                    <p class="mb-4 fw-bold" style="color: var(--blue); font-size: 15px;">10,000+ Businesses Served | 4.9 Google Rating | Visit our Pune office or get started online</p>

                    <div class="hero-cta">
                        <a href="tel:+919459456700" class="btn-video text-decoration-none">
                            <span class="play-circle"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="width:14px;height:14px;color:#fff"><path d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/></svg></span>
                            Call +91 945 945 6700
                        </a>
                        <a href="mailto:sales@patronaccounting.com" class="btn-sample text-decoration-none">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="width:18px;height:18px;"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,12 2,6"/></svg>
                            Email Us
                        </a>
                        <a href="https://wa.me/919459456700?text=Hi%2C%20I%20need%2080G%20registration%20in%20Pune.%20Please%20call%20me." target="_blank" class="btn-sample text-decoration-none">
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
                                            'service'  => '80G Registration in Pune',
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
    'ctaText'    => 'CA-managed 80G registration with Form 10BD/10BE compliance and CSR readiness for Pune NGOs.',
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
            <a href="#overview-section" class="toc-btn">Overview</a><a href="#what-section" class="toc-btn">What Is 80G</a><a href="#who-section" class="toc-btn">Who Needs It</a><a href="#services-section" class="toc-btn">Services</a><a href="#procedure-section" class="toc-btn">Process</a><a href="#documents-section" class="toc-btn">Documents</a><a href="#challenges-section" class="toc-btn">Challenges</a><a href="#fees-section" class="toc-btn">Fees</a><a href="#timeline-section" class="toc-btn">Timeline</a><a href="#benefits-section" class="toc-btn">Why Patron</a><a href="#comparison-section" class="toc-btn">Deduction Table</a><a href="#faq-section" class="toc-btn">FAQs</a>
        </div>
        <button class="toc-arrow right" id="tocRight">&#10095;</button>
    </div>
</div>

<!-- SECTION 2: OVERVIEW / INTRO + TL;DR -->
<section class="content-section" id="overview-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">80G Registration in Pune - Overview</h2>
            <div class="content-text">
                <div class="highlight-box" style="margin-bottom:20px;">
                    <p><strong>&#128204; TL;DR - 80G Registration in Pune Services at a Glance</strong></p>
                    <p>80G registration enables donors to claim a 50% tax deduction on donations made to your NGO under Section 80G of the Income Tax Act, 1961. In Pune, trusts, societies, and Section 8 companies file Form 10A (new) or Form 10AB (renewal) with the Principal Commissioner of Income Tax (Exemptions) at Aaykar Bhavan, Sadhuwasvani Road. Provisional registration lasts 3 years; renewal grants 5 years. The NGO must also file Form 10BD (Statement of Donations) by 31 May and issue Form 10BE (Donation Certificate) to each donor annually. 80G is the key to unlocking CSR funding from Pune's IT, automobile, and manufacturing corporations.</p><div class="table-responsive-wrapper" style="margin-top:16px;"><table><thead><tr><th>Parameter</th><th>Detail</th></tr></thead><tbody><tr><td>Governing Section</td><td>Section 80G of Income Tax Act, 1961 (registration now under Section 12AB framework)</td></tr><tr><td>Purpose</td><td>Enables DONORS to claim 50% tax deduction on donations to the registered NGO</td></tr><tr><td>Application Form</td><td>Form 10A (new/provisional) | Form 10AB (renewal)</td></tr><tr><td>Authority</td><td>PCIT (Exemptions), Pune - Aaykar Bhavan, 12, Sadhuwasvani Road, Pune 411 001</td></tr><tr><td>Timeline</td><td>Provisional: 15-30 days | Renewal: 30-60 days</td></tr><tr><td>Validity</td><td>Provisional: 3 years | Regular: 5 years</td></tr><tr><td>Donor Deduction</td><td>50% of donation amount, subject to 10% of adjusted gross total income ceiling</td></tr><tr><td>Annual Obligation</td><td>Form 10BD (by 31 May) + Form 10BE issued to each donor</td></tr></tbody></table></div></p>
                </div>
                <p>Pune's corporate landscape generates significant CSR funding potential. Over 200 companies headquartered in Hinjewadi IT Park, Rajiv Gandhi Infotech Park, Kharadi IT Park, Chakan Industrial Area, and MIDC Bhosari are mandated under Section 135 of the Companies Act 2013 to spend 2% of average net profits on CSR activities. These companies prefer donating to NGOs with valid 80G and CSR-1 registrations. Maharashtra adds a prerequisite layer: trusts must have Charity Commissioner registration under the Bombay Public Trusts Act 1950 before the Income Tax Department accepts the 80G application. Learn more about <a href="#">12A and 80G Registration across India</a>.</p>
                <p>Patron Accounting handles this complete chain from our Pune office at RTC Silver, Wagholi - entity registration, Charity Commissioner filing, 12A registration, 80G registration, CSR-1, NGO Darpan, and the ongoing Form 10BD/10BE annual donor reporting. <strong>IMPORTANT: 80G deduction is NOT available to donors who opt for the new tax regime under Section 115BAC.</strong> After 80G, you may also need <a href="/fcra-registration">FCRA Registration</a> for foreign donations and <a href="/statutory-audit">Statutory Audit</a> for annual compliance.</p>
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
                <h2 class="section-title">What Is 80G Registration</h2>
                <div class="content-text what-is-definition">
                    
                    <p>80G registration is the process of obtaining approval under Section 80G of the Income Tax Act, 1961 from the Principal Commissioner of Income Tax, enabling donors who contribute to the registered NGO to claim a tax deduction of 50% of the donation amount from their taxable income.</p><p>While 12A registration (Section 12AB) exempts the organisation's own income from tax, 80G registration provides a direct financial incentive to the donor. When an individual or company donates to an 80G-registered NGO, they can deduct 50% of the donation amount from their gross total income while filing their income tax return - subject to a ceiling of 10% of their adjusted gross total income. For Pune's corporate donors in Hinjewadi and Chakan making CSR contributions, this deduction is a significant incentive.</p><p>Under the Finance Act 2020, 80G registration follows the same Section 12AB framework as 12A - provisional registration for 3 years via Form 10A, renewal for 5 years via Form 10AB. The NGO must also comply with Form 10BD (Statement of Donations filed by 31 May) and Form 10BE (Donation Certificate issued to each donor) to ensure donors can actually claim the deduction. The Income Tax Department cross-matches Form 10BD data with donor ITR claims.</p>

                </div>
                <div class="highlight-box" style="margin-top:20px;">
                    <p><strong>Key Terms for 80G Registration in Pune:</strong></p>
                    <p><strong>Section 80G:</strong> Income Tax Act provision enabling donors to claim 50% tax deduction on donations to approved charitable organisations.</p><p><strong>Form 10A:</strong> Application for provisional 80G approval (3 years), filed online on the Income Tax e-Filing portal.</p><p><strong>Form 10BD:</strong> Annual Statement of Donations filed by 31 May by every 80G NGO, listing all donors with PAN, address, and amounts.</p><p><strong>Form 10BE:</strong> Certificate of Donation issued to each donor - required for donors to claim 80G deduction in their ITR.</p><p><strong>PCIT (Exemptions), Pune:</strong> Principal Commissioner of Income Tax (Exemptions) at Aaykar Bhavan, 12, Sadhuwasvani Road, Pune 411 001 - processes all 80G applications for Pune entities.</p>

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
                            <text x="100" y="170" font-size="10" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial, sans-serif">80G Registration in Pune</text>
                        </svg>
                    </div>
                    <div class="illustration-badge">
                        <span>Income Tax Act</span>
                        <strong>Donor Deduction</strong>
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
            <h2 class="section-title">Who Needs 80G Registration in Pune</h2>
            <div class="content-text">
                
                <p><strong>Charitable Trusts:</strong> Public charitable trusts registered with the Joint Charity Commissioner under the Bombay Public Trusts Act 1950 - educational trusts affiliated with Savitribai Phule Pune University, healthcare trusts running community clinics, environmental trusts working on river conservation. Without 80G, donations do not qualify for any tax deduction for the donor.</p><p><strong>Registered Societies:</strong> Cultural societies, sports organisations (Balewadi Sports Complex), professional associations, and community welfare groups that receive donations from members, the public, or corporates. 80G makes fundraising substantially easier by offering donors a tax benefit.</p><p><strong>Section 8 Companies:</strong> Companies established for charitable purposes under the Companies Act 2013, especially those targeting CSR funding from Pune's corporate sector. Companies prefer to channel CSR funds through 80G + CSR-1 registered organisations.</p><p><strong>Existing NGOs Needing Renewal:</strong> Registrations revalidated in 2021 under the Finance Act 2020 transition expire on 31 March 2026. Form 10AB must be filed at least 6 months before expiry. NGOs not filing Form 10BD annually risk losing registration at renewal.</p><p><strong>Religious Trusts (with conditions):</strong> Temples, gurudwaras, and religious educational institutions that receive donations. Donations qualify for 80G only if the trust also carries out charitable activities as defined under Section 2(15). Purely religious activities may not qualify.</p>

            </div>
            </div>
        </div>
    </div>
</section>

<!-- SECTION 5: OUR SERVICES -->
<section class="content-section" id="services-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">80G Registration Services Included in Pune</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Service</th><th>What We Do</th></tr></thead>
                    <tbody>
                        <tr><td>80G Provisional Registration (Form 10A)</td><td>Complete application preparation and filing on the Income Tax e-Filing portal for provisional 80G approval (3 years). Submitted to PCIT (Exemptions), Pune.</td></tr><tr><td>80G Renewal (Form 10AB)</td><td>Renewal application for regular 80G registration (5 years). Must be filed 6 months before expiry. Includes 3-year accounts and donor records.</td></tr><tr><td>12A Registration (Bundled)</td><td>80G and 12A are complementary - Patron files both Form 10A applications together. Bundle price Rs 11,999.</td></tr><tr><td>CSR-1 + NGO Darpan Registration</td><td>CSR implementing agency status on MCA portal. DARPAN registration on ngodarpan.gov.in - mandatory during 80G Form 10A filing.</td></tr><tr><td>Form 10BD Filing (Annual)</td><td>Statement of Donations filed by 31 May each year listing all donors with PAN, address, amount, and payment mode.</td></tr><tr><td>Form 10BE Issuance (Annual)</td><td>Donation Certificate generated for each donor after Form 10BD filing. Required by donor to claim 80G deduction in ITR.</td></tr><tr><td>Donation Receipt Setup</td><td>Standardised receipt template with mandatory 80G fields: registration number, validity, donor PAN, amount in words and figures.</td></tr><tr><td>Annual ITR-7 + Audit Report</td><td>Income Tax Return filing and Form 10B/10BB audit report - mandatory for maintaining both 12A and 80G status.</td></tr>

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
            <h2 class="section-title">6-Step 80G Registration Process in Pune</h2>
            <p class="section-subtitle" style="text-align:left;max-width:100%;">Patron manages the complete 80G registration from entity prerequisites to annual donor reporting. Form 10A/10AB filing is online via the IT e-Filing portal. The PCIT (Exemptions), Pune at Aaykar Bhavan handles processing. Maharashtra entity prerequisite (Charity Commissioner) requires physical document submission. Patron's Pune team at RTC Silver, Wagholi handles all filings.</p>
        </header>
        <div class="steps-container">
            <div class="step-card"><div class="step-content"><span class="step-badge">Step 1</span><h3 class="step-title">Ensure Entity Registration and 12A Are in Place</h3><p class="step-description">For Pune trusts, this means Charity Commissioner registration under the Bombay PT Act 1950 with the Joint Charity Commissioner at 45/2, Dhole Patil Marg. For societies, dual registration under Societies Act and Bombay PT Act. For Section 8 companies, INC-12 licence and RoC Pune incorporation. Patron handles entity registration, Charity Commissioner filing, and 12A as prerequisites.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Charity Commissioner done</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>12A in place</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="10" y="8" width="45" height="65" rx="4" fill="#E8F5E9" stroke="#25D366" stroke-width="1.2"/><rect x="65" y="8" width="45" height="65" rx="4" fill="#FFF3E0" stroke="#F5A623" stroke-width="1.2"/><text x="32" y="35" font-size="7" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">12A</text><text x="88" y="35" font-size="7" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">BPT</text><path d="M55 40L65 40" stroke="#14365F" stroke-width="2" stroke-dasharray="4 2"/></svg></div><span class="illustration-label">Prerequisites</span><span class="step-number-large">01</span></div></div></div>
<div class="step-card"><div class="step-content"><span class="step-badge">Step 2</span><h3 class="step-title">Register on NGO Darpan (NITI Aayog)</h3><p class="step-description">DARPAN portal registration details are now mandatory when filing Form 10A for 80G. Patron registers the organisation on ngodarpan.gov.in with the unique DARPAN ID before initiating the 80G application. This step is frequently missed by online portals, resulting in deficiency queries from the PCIT (Exemptions), Pune.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>DARPAN ID obtained</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Deficiency prevented</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="15" y="10" width="90" height="60" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><rect x="25" y="18" width="70" height="10" rx="3" fill="#25D366" opacity="0.15"/><text x="60" y="26" font-size="5" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">ngodarpan.gov.in</text><circle cx="60" cy="45" r="12" fill="#E8F5E9" stroke="#25D366" stroke-width="1.5"/><path d="M54 45l4 4 8-8" stroke="#25D366" stroke-width="2" stroke-linecap="round"/></svg></div><span class="illustration-label">DARPAN Done</span><span class="step-number-large">02</span></div></div></div>
<div class="step-card"><div class="step-content"><span class="step-badge">Step 3</span><h3 class="step-title">Prepare Supporting Documents</h3><p class="step-description">Self-certified copy of trust deed/MOA/AOA, entity registration certificates (including Charity Commissioner certificate for Maharashtra), existing 12A/12AB certificate, 80G order (if renewal), annual accounts for 3 years, notes on activities, list of trustees with KYC, list of donors with PAN and address, investment details, and DARPAN registration.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>3-year accounts</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Charity Commissioner cert</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="15" y="5" width="90" height="70" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><line x1="30" y1="22" x2="85" y2="22" stroke="#F5A623" stroke-width="2.5" stroke-linecap="round"/><line x1="30" y1="35" x2="78" y2="35" stroke="#14365F" stroke-width="1.5" opacity="0.3"/><line x1="30" y1="48" x2="72" y2="48" stroke="#14365F" stroke-width="1.5" opacity="0.3"/><line x1="30" y1="60" x2="68" y2="60" stroke="#14365F" stroke-width="1.5" opacity="0.3"/></svg></div><span class="illustration-label">Docs Ready</span><span class="step-number-large">03</span></div></div></div>
<div class="step-card"><div class="step-content"><span class="step-badge">Step 4</span><h3 class="step-title">File Form 10A or Form 10AB on IT e-Filing Portal</h3><p class="step-description">Patron files the application on incometaxindiaefiling.gov.in. Form 10A for new registration, Form 10AB for renewal (at least 6 months before expiry). The form is verified using DSC or EVC. The portal generates an acknowledgment number for tracking.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>DSC-verified filing</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Acknowledgment received</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="15" y="5" width="90" height="70" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><rect x="25" y="15" width="70" height="10" rx="3" fill="#14365F" opacity="0.1"/><text x="60" y="23" font-size="6" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">Form 10A</text><line x1="25" y1="35" x2="85" y2="35" stroke="#F5A623" stroke-width="2"/><circle cx="90" cy="10" r="8" fill="#E8F5E9" stroke="#25D366" stroke-width="1"/><path d="M86 10l3 3 5-5" stroke="#25D366" stroke-width="1.5" stroke-linecap="round"/></svg></div><span class="illustration-label">Filed</span><span class="step-number-large">04</span></div></div></div>
<div class="step-card"><div class="step-content"><span class="step-badge">Step 5</span><h3 class="step-title">PCIT (Exemptions), Pune Processes the Application</h3><p class="step-description">The PCIT at Aaykar Bhavan, 12, Sadhuwasvani Road, Pune 411 001 verifies the application. Checks: organisation registered under applicable law, objects are charitable per Section 2(15), no income for benefit of specified persons (Section 13), regular accounts maintained, DARPAN registration active. Patron responds to all PCIT queries within the prescribed timeframe.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>PCIT queries answered</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Section 13 compliance</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="20" y="10" width="80" height="60" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><path d="M15 12L60 2L105 12" stroke="#14365F" stroke-width="1.5" fill="#E8EDF4"/><rect x="35" y="25" width="10" height="35" rx="2" fill="#D4DCE8" stroke="#14365F" stroke-width="0.8"/><rect x="55" y="25" width="10" height="35" rx="2" fill="#D4DCE8" stroke="#14365F" stroke-width="0.8"/><rect x="75" y="25" width="10" height="35" rx="2" fill="#D4DCE8" stroke="#14365F" stroke-width="0.8"/><text x="60" y="80" font-size="6" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">Aaykar Bhavan</text></svg></div><span class="illustration-label">Examined</span><span class="step-number-large">05</span></div></div></div>
<div class="step-card"><div class="step-content"><span class="step-badge">Step 6</span><h3 class="step-title">Receive 80G Certificate and Configure Donor Reporting</h3><p class="step-description">PCIT issues 80G registration order in Form 10AC (provisional) or Form 10AD (regular). Patron sets up: donation receipt template with 80G registration number and validity, Form 10BD annual filing calendar (due 31 May), Form 10BE generation workflow for donor certificates, and CSR-1 filing on the MCA portal.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>80G certificate received</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>10BD/10BE configured</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="15" y="5" width="90" height="70" rx="6" fill="#E8F5E9" stroke="#25D366" stroke-width="1.5"/><text x="60" y="25" font-size="8" fill="#14365F" font-weight="800" text-anchor="middle" font-family="Arial">80G</text><rect x="30" y="32" width="60" height="15" rx="3" fill="#fff" stroke="#25D366" stroke-width="1"/><text x="60" y="42" font-size="5" fill="#14365F" text-anchor="middle" font-family="Arial">Registration No.</text><text x="60" y="62" font-size="6" fill="#14365F" font-weight="600" text-anchor="middle" font-family="Arial">10BD + 10BE Ready</text></svg></div><span class="illustration-label">Approved</span><span class="step-number-large">06</span></div></div></div>


        </div>
    </div>
</section>

<!-- SECTION 8: DOCUMENTS REQUIRED -->
<section class="content-section" id="documents-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Documents Required for 80G Registration in Pune</h2>
            <div class="content-text">
                
                <ul><li>Self-certified copy of trust deed / Registration Certificate + MOA / Certificate of Incorporation + MOA + AOA</li><li>Self-certified copy of Charity Commissioner registration (mandatory for Maharashtra trusts and societies)</li><li>Self-certified copy of existing 12A/12AB registration order</li><li>Self-certified copy of existing 80G order (if applying for renewal)</li><li>PAN Card of the organisation</li><li>Annual accounts (audited) for the preceding 3 financial years or since inception</li><li>Audit report under Section 44AB for preceding 3 years (if business income exists)</li><li>Notes on activities with progress report since inception or last 3 years</li><li>List of donors with full name, PAN, address, and donation amounts for past 3 years</li><li>List of trustees/governing body/directors with KYC (PAN + Aadhaar)</li><li>Details of investments and deposits made by the organisation</li><li>Self-certified copy of DARPAN registration (ngodarpan.gov.in) - NOW MANDATORY</li><li>Self-certified copy of FCRA registration (if applicable)</li><li>DSC or EVC credentials of the authorised signatory</li></ul><div class="highlight-box" style="margin-top:20px;"><p><strong>Pune-Specific Tip:</strong> The PCIT (Exemptions), Pune now specifically checks for DARPAN registration during 80G processing. If not registered, expect a deficiency query that delays approval by 2-4 weeks. Patron ensures DARPAN registration is complete before Form 10A filing. Additionally, for Maharashtra trusts and societies, the Charity Commissioner certificate must be attached - its absence is the most common rejection trigger for Pune applications.</p></div>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 9: CHALLENGES -->
<section class="content-section" id="challenges-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">5 Common 80G Registration Challenges in Pune</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Challenge</th><th>Impact</th><th>How Patron Accounting Solves It</th></tr></thead>
                    <tbody>
                        <tr><td>Filing 80G Without 12A</td><td>PCIT (Exemptions) Pune routinely queries applications where 12A is missing, raising questions about charitable genuineness</td><td>File 12A and 80G simultaneously to avoid queries and demonstrate complete tax compliance posture</td></tr><tr><td>Missing DARPAN Registration</td><td>Applications without DARPAN registration receive deficiency notice, delaying approval by 2-4 weeks</td><td>Register on ngodarpan.gov.in before initiating the 80G application - Patron completes this as a prerequisite</td></tr><tr><td>Form 10BD/10BE Non-Filing</td><td>80G is useless without annual Form 10BD (Statement of Donations) by 31 May and Form 10BE (Donor Certificate). Rs 200/day penalty.</td><td>File Form 10BD annually, generate Form 10BE for every donor - Patron manages the entire compliance cycle</td></tr><tr><td>Expired 80G Registration (March 2026)</td><td>Registrations revalidated in 2021 expire 31 March 2026. Donations after expiry do not qualify for deduction.</td><td>Remedial Form 10AB applications for organisations that missed the deadline. Proactive renewal tracking.</td></tr><tr><td>Section 13 Scrutiny - Benefit to Specified Persons</td><td>Trust deeds with remuneration clauses for trustees or investment provisions benefiting related parties trigger rejection</td><td>CS team reviews trust deeds for Section 13 issues before filing. Advise on amendments if needed.</td></tr>

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
            <h2 class="section-title">80G Registration Fees in Pune - 2026 Schedule</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Fee Component</th><th>Amount</th></tr></thead>
                    <tbody>
                        <tr><td>80G Registration (Provisional - Form 10A)</td><td>Govt: Nil | Patron: Rs 7,999</td></tr><tr><td>12A + 80G Bundle</td><td>Govt: Nil | Patron: Rs 11,999</td></tr><tr><td>12A + 80G + CSR-1 + NGO Darpan Bundle</td><td>Govt: Nil | Patron: Rs 14,999</td></tr><tr><td>80G Renewal (Form 10AB)</td><td>Govt: Nil | Patron: Rs 9,999</td></tr><tr><td>Form 10BD + 10BE Annual Filing</td><td>Govt: Nil | Patron: Rs 2,999/year</td></tr><tr><td>Annual ITR-7 Filing</td><td>Govt: Nil | Patron: Rs 4,999/year</td></tr><tr><td>Form 10B/10BB Audit Report</td><td>Patron: Rs 4,999/year</td></tr><tr><td>Patron Accounting Professional Fees</td><td>Starting from INR 7,499 (Exl GST and Govt. Charges)</td></tr>

                    </tbody>
                </table>
                </div>
                <p style="margin-top:16px;font-size:13px;color:var(--text-muted);font-style:italic;">All fees and charges listed are indicative only and do not constitute a binding offer. Final amounts may vary depending on the volume of work and the complexity involved.</p>
                <p style="margin-top:16px;">Professional service charges for drafting, filing, and representation are separate from the statutory fees. The exact fee depends on the complexity of the case, disputed amount, and number of hearings required. Contact us for a detailed quote.</p>
                <p style="margin-top:16px;"><strong>Get a free 80G Registration in Pune consultation - <a href="tel:+919459456700">Call +91 945 945 6700</a> or <a href="https://wa.me/919459456700?text=Hi%2C%20I%20need%2080G%20registration%20in%20Pune.%20Please%20call%20me." target="_blank">WhatsApp us</a>. No-obligation assessment.</strong></p>
            </div>
        </div>
    </div>
</section>

<!-- SECTION 11: TIMELINE -->
<section class="content-section" id="timeline-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">80G Registration Timeline in Pune</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Stage</th><th>Estimated Timeline</th></tr></thead>
                    <tbody>
                        <tr><td>Prerequisites (12A + DARPAN)</td><td>Concurrent</td></tr><tr><td>Document Preparation</td><td>3-5 days</td></tr><tr><td>Form 10A/10AB Filing</td><td>1-2 days</td></tr><tr><td>PCIT Processing (Provisional)</td><td>15-30 days</td></tr><tr><td>PCIT Processing (Renewal)</td><td>30-60 days</td></tr><tr><td>Form 10BD/10BE Setup</td><td>1-2 days</td></tr><tr><td><strong>Total (New, with 12A)</strong></td><td><strong>30-45 days (12A + 80G filed simultaneously)</strong></td></tr>

                    </tbody>
                </table>
                </div>
                <div class="highlight-box" style="margin-top:16px;">
                    
                    <p><strong>Note:</strong> Patron's turnaround: 80G provisional in 15-30 days. 12A + 80G bundle in 30-45 days. Form 10BD filed before 31 May deadline. Form 10BE issued within 15 days of Form 10BD filing. Renewal filed 6 months before expiry.</p>

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
            <h2 class="section-title">Why Choose Patron for 80G Registration in Pune</h2>
        </div>
        <div class="features-grid"><article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><h3 class="feature-title">Pune Office with PCIT Experience</h3><p class="feature-text">Patron operates from RTC Silver, Wagholi, Pune. Our CA team has direct experience with the PCIT (Exemptions) at Aaykar Bhavan. We understand the documentation expectations, DARPAN verification checks, and Section 13 scrutiny applied during 80G processing.</p></article><article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2"/></svg></div><h3 class="feature-title">Complete Donor-Readiness Chain</h3><p class="feature-text">80G without Form 10BD/10BE is useless. Patron delivers entity registration, Charity Commissioner filing, 12A, 80G, CSR-1, NGO Darpan, donation receipt setup, and ongoing annual donor reporting that makes 80G work in practice.</p></article><article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg></div><h3 class="feature-title">Maharashtra Prerequisite Handling</h3><p class="feature-text">Maharashtra trusts and societies need Charity Commissioner registration under the Bombay PT Act 1950 before 80G filing. This is the most common rejection trigger for Pune applications. Patron handles this complete prerequisite chain.</p></article><article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><path d="M12 6v6l4 2"/></svg></div><h3 class="feature-title">CSR Fundraising Readiness</h3><p class="feature-text">Over 200 companies in Pune's Hinjewadi, Kharadi, and Chakan spend crores annually on CSR - they exclusively fund 80G + CSR-1 registered organisations. Patron ensures your Pune NGO is fully CSR-ready.</p></article></div>
    </div>
</section>

<!-- SECTION 12A: SOCIAL PROOF -->
<section class="content-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Trusted by 10,000+ Businesses Across India</h2>
            <div class="content-text">
                
                <p><strong>10,000+ Businesses Served | 4.9 Google Rating | 50,000+ Docs Filed | 15+ Years</strong></p><p>Trusted by Hyundai, Asian Paints, Bridgestone and businesses across India. With offices in Pune, Mumbai, Delhi, and Gurugram, Patron serves Pune NGOs with national CA practice strength and local expertise.</p>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 13: SELF-FILING vs PROFESSIONAL COMPARISON -->
<section class="content-section" id="comparison-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">80G Deduction Categories - How Much Can Pune Donors Claim</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Category</th><th>Deduction %</th><th>Ceiling</th><th>Examples</th></tr></thead>
                    <tbody>
                        <tr><td>100% without limit</td><td>100%</td><td>No ceiling</td><td>National Defence Fund, PM National Relief Fund, PM CARES</td></tr><tr><td>50% without limit</td><td>50%</td><td>No ceiling</td><td>PM Drought Relief Fund, National Children's Fund</td></tr><tr><td>100% with 10% GTI limit</td><td>100%</td><td>10% of Adjusted GTI</td><td>Govt/approved institutions for charitable purposes</td></tr><tr><td>50% with 10% GTI limit</td><td>50%</td><td>10% of Adjusted GTI</td><td>Most NGOs registered under 80G, including Pune trusts/societies</td></tr>

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
            <h2 class="section-title">Related NGO Registration and Compliance Services</h2>
            <div class="content-text">
                
                <ul><li><a href="#">12A and 80G Registration in India</a> - Our national 12A and 80G registration service</li><li><a href="/ngo-registration">NGO Registration</a> - Trust, Society, and Section 8 Company formation</li><li><a href="/fcra-registration">FCRA Registration</a> - Foreign contribution regulation for international donations</li><li><a href="/statutory-audit">Statutory Audit</a> - Mandatory audit services for NGOs and companies</li><li><a href="/income-tax-return">Income Tax Return Filing</a> - ITR-7 filing for charitable organisations</li><li><a href="/accounting-services">Accounting Services</a> - Complete accounting for non-profit organisations</li></ul><p>Most Pune-based trusts, societies, and Section 8 companies fall under the fourth category: donors get a 50% deduction subject to 10% of adjusted gross total income. Cash donations above Rs 2,000 do not qualify. <strong>80G deduction is NOT available under the new tax regime (Section 115BAC).</strong></p>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 15A: LEGAL FRAMEWORK -->
<section class="content-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Legal and Compliance Framework for 80G Registration</h2>
            <div class="content-text">
                
                <p><strong>Governing Provisions:</strong></p><ul><li>Income Tax Act, 1961 - Section 80G (deduction for donations), Section 12AB (registration framework), Section 11/12 (income exemption conditions), Section 13 (denial - benefit to specified persons), Section 2(15) (charitable purpose), Section 115BAC (new regime - 80G not available)</li><li>Income Tax Rules, 1962 - Rule 11AA (80G conditions), Rule 17A (Form 10A), Rule 2C (Form 10AB), Rule 18AB (Form 10BD/10BE donor reporting)</li><li>Form 10A - Provisional registration (new organisations, 3 years)</li><li>Form 10AB - Renewal registration (5 years, filed 6 months before expiry)</li><li>Form 10BD - Statement of Donations filed by NGO by 31 May annually</li><li>Form 10BE - Certificate of Donation issued to each donor for ITR claims</li><li>Bombay Public Trusts Act, 1950 - Maharashtra prerequisite for trusts/societies before 80G filing</li><li>Companies Act, 2013 - Section 135 (CSR obligation); CSR-1 registration on MCA portal</li></ul><p><strong>Penalties:</strong> Non-filing of Form 10BD/10BE: Rs 200/day penalty under Section 271K. Non-filing of ITR-7: penalty under Section 234F. Expired 80G: donors cannot claim deduction.</p><p><strong>Key Portal:</strong> <a href="https://www.incometax.gov.in" target="_blank" rel="noopener">Income Tax e-Filing (incometax.gov.in)</a> - for Form 10A/10AB/10BD filing</p>

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
                    <h2 class="faq-expanded__title">FAQs - 80G Registration in Pune</h2>
                    <p class="faq-expanded__lead">Answers to common questions about 80G donor tax deduction registration in Pune. Call +91 945 945 6700.</p>
                    @include('partials.bigin-form', [
                        'variant'  => 'compact',
                        'service'  => '80G Registration in Pune',
                        'city'     => 'Pune',
                    ])
                </aside>
                <div class="faq-expanded__list">
                    <div class="faq-expanded__item" id="faq-1">
                        <h3 class="faq-expanded__q">How much does 80G registration cost in Pune?</h3>
                        <div class="faq-expanded__a"><p>There is no government fee for 80G registration. Professional fees for CA-assisted Form 10A filing start from Rs 7,999 covering document preparation, PCIT liaison, and Form 10BD/10BE setup. The 12A + 80G bundle costs Rs 11,999. The complete donor-readiness package (12A + 80G + CSR-1 + NGO Darpan) costs Rs 14,999.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-2">
                        <h3 class="faq-expanded__q">How long does 80G registration take in Pune?</h3>
                        <div class="faq-expanded__a"><p>Provisional 80G registration via Form 10A takes 15 to 30 days from filing. The PCIT (Exemptions), Pune must pass the order within 1 month. For Form 10AB renewal, the PCIT has up to 6 months. When filed simultaneously with 12A, the complete registration takes 30-45 days.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-3">
                        <h3 class="faq-expanded__q">What is the difference between 80G and 12A?</h3>
                        <div class="faq-expanded__a"><p>80G benefits the DONOR - individuals and companies donating to an 80G-registered NGO can claim a 50% tax deduction. 12A benefits the ORGANISATION - the trust, society, or Section 8 company's surplus income is exempt from income tax. Both are complementary and should be obtained simultaneously. CSR donors require both 12A and 80G for compliance.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-4">
                        <h3 class="faq-expanded__q">Is 80G deduction available under the new tax regime?</h3>
                        <div class="faq-expanded__a"><p>No. Under Section 115BAC, donors who opt for the new tax regime cannot claim 80G deduction. Only donors filing under the old tax regime can claim the 50% deduction. This is a critical limitation. Corporate CSR donations are typically made from the company entity which can choose old regime.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-5">
                        <h3 class="faq-expanded__q">What is Form 10BD and Form 10BE?</h3>
                        <div class="faq-expanded__a"><p>Form 10BD is the Statement of Donations filed by every 80G NGO with the Income Tax Department by 31 May each year, listing all donors with PAN, address, amount, and payment mode. Form 10BE is the Donation Certificate issued to each donor. Without Form 10BE, the donor's 80G deduction is rejected because the IT Department cross-matches data.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-6">
                        <h3 class="faq-expanded__q">What is the 80G renewal deadline for 2026?</h3>
                        <div class="faq-expanded__a"><p>Registrations revalidated in 2021 expire on 31 March 2026. Form 10AB for renewal was due by 30 September 2025. Donations received after expiry do not qualify for 80G deduction regardless of charitable activities. Contact Patron immediately for remedial filing with the PCIT (Exemptions), Pune.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-7">
                        <h3 class="faq-expanded__q">Can corporates claim CSR deduction through 80G?</h3>
                        <div class="faq-expanded__a"><p>CSR expenditure under Section 135 is not directly deductible as a business expense. However, if the CSR donation is made to an 80G-registered organisation, the company can claim 80G deduction in its income tax return. The receiving NGO must have both 80G and CSR-1. Over 200 companies in Pune's Hinjewadi, Kharadi, and Chakan are mandated to make CSR contributions.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-8">
                        <h3 class="faq-expanded__q">Does a Pune trust need Charity Commissioner registration before 80G?</h3>
                        <div class="faq-expanded__a"><p>Yes. In Maharashtra, all charitable trusts and societies must be registered with the Joint Charity Commissioner under the Bombay Public Trusts Act 1950 before the Income Tax Department accepts Form 10A for 80G. The Joint Charity Commissioner, Pune is at 45/2, Dhole Patil Marg, Opp. Wadia College, Pune 411 001.</p></div>
                    </div>
                </div>
            </div>


            <!-- Quick Answers -->
            <div class="highlight-box" style="margin-top:32px;">
                <p><strong>Quick Answers</strong></p>
                <p><strong>80G se donor ko kya fayda hota hai?</strong> Donor ko donation ki 50% amount taxable income se deduction milti hai. Lekin sirf old tax regime mein - new regime mein 80G nahi milti.</p><p><strong>Form 10BD aur 10BE kya hai?</strong> 10BD: NGO har saal 31 May tak IT Department ko donors ki list deta hai. 10BE: Har donor ko donation certificate issue hota hai. Bina 10BE ke donor 80G claim nahi kar sakta.</p><p><strong>80G aur 12A mein kya fark hai?</strong> 80G = Donor ka fayda (tax deduction milti hai). 12A = NGO ka fayda (NGO ki income tax-free hoti hai). Dono saath mein lena zaroori hai.</p>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 18: URGENCY CTA -->
<section class="content-section" style="background: var(--orange-lighter) !important; border-left: 4px solid var(--orange);">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Your Donors Are Waiting for 80G - File Now</h2>
            <div class="content-text">
                
                <p>80G registrations revalidated in 2021 expire on 31 March 2026. Donations received after expiry do not qualify for tax deduction. Non-filing of Form 10BD by 31 May attracts Rs 200/day penalty under Section 271K. Without Form 10BE, donor ITR claims are rejected. Over 200 companies in Pune's Hinjewadi, Kharadi, and Chakan spend crores annually on CSR - they exclusively fund 80G + CSR-1 registered organisations.</p><p><strong>Every day without valid 80G is a day of lost donor confidence and forfeited CSR funding. <a href="tel:+919459456700">Call +91 945 945 6700</a> or <a href="https://wa.me/919459456700?text=Hi%2C%20I%20need%2080G%20registration%20in%20Pune." target="_blank">WhatsApp us</a>.</strong></p>

            </div>
        </div>
    </div>
</section>

<!-- CONCLUSION + CTA BLOCK (Dark) -->
<section class="content-section" style="background: var(--blue) !important;">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title" style="color:#FFFFFF !important;">Get 80G Registration for Your Pune NGO Today</h2>
            <div class="content-text" style="text-align:left;">
                
                <p style="color:rgba(255,255,255,0.85);">80G registration in Pune enables donors to claim a 50% tax deduction on donations to charitable trusts, registered societies, and Section 8 companies under Section 80G of the Income Tax Act, 1961. It is the single most important factor in an NGO's fundraising capability and CSR funding eligibility.</p><p style="color:rgba(255,255,255,0.85);">Patron Accounting's Pune office at RTC Silver, Wagholi delivers the complete donor-readiness chain: entity registration with Charity Commissioner, 12A, 80G, CSR-1, NGO Darpan, donation receipt setup, and the annual Form 10BD/10BE filing that makes 80G work for your donors in practice. With 10,000+ businesses served, a 4.9 Google rating, and a CA team with direct experience at the PCIT (Exemptions), Pune, Patron ensures your Pune NGO is fully donor-ready from registration to annual reporting.</p>

            </div>
            <div style="display:flex;gap:14px;flex-wrap:wrap;margin-top:24px;">
                <a href="tel:+919459456700" style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:var(--orange);color:#fff;border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#128222; Call +91 945 945 6700</a>
                <a href="https://wa.me/919459456700?text=Hi%2C%20I%20need%2080G%20registration%20in%20Pune.%20Please%20call%20me." target="_blank" style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:#25D366;color:#fff;border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#128172; WhatsApp Us</a>
                <a href="mailto:sales@patronaccounting.com?subject=Enquiry%20for%2080G%20Registration%20Pune&body=Hello%20Patron%20Accounting%20Team%2C%0A%0AI%20need%2080G%20registration%20in%20Pune.%0A%0APlease%20get%20in%20touch.%0A%0AThank%20you." style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:transparent;color:#fff;border:2px solid rgba(255,255,255,0.3);border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#9993;&#65039; Email Us</a>
            </div>
            <p style="color:rgba(255,255,255,0.7);font-size:13px;margin-top:16px;">Book a Free Consultation - No Obligation.</p>
        </div>
    </div>
</section>

<!-- GSTAT STATE BENCH CITY PAGES (32 Pages) -->
<section class="content-section" style="padding:48px 32px;background:var(--gray-50);">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title" style="text-align:center;margin-bottom:12px;">80G Registration Across India</h2>
            <p style="text-align:center;color:var(--text-muted);font-size:15px;margin-bottom:40px;">Patron offers 80G registration in 8 major cities. Select your city below.</p>
     
            <div class="pa-city-block" style="margin-bottom:40px;"><div class="pa-city-grid"><div class="pa-city-card" style="opacity:0.6; pointer-events:none; border:2px solid var(--orange); position:relative;"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Pune</div><div class="pa-card-sub">Maharashtra</div></div><span style="position:absolute; top:6px; right:8px; font-size:10px; color:var(--orange); font-weight:700; text-transform:uppercase; letter-spacing:0.5px;">You're here</span></div><a href="/80g-registration/mumbai" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Mumbai</div><div class="pa-card-sub">Maharashtra</div></div></a><a href="/80g-registration/delhi" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Delhi</div><div class="pa-card-sub">Delhi NCR</div></div></a><a href="/80g-registration/gurugram" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Gurugram</div><div class="pa-card-sub">Haryana</div></div></a><a href="#" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Bangalore</div><div class="pa-card-sub">Karnataka</div></div></a><a href="/80g-registration/hyderabad" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Hyderabad</div><div class="pa-card-sub">Telangana</div></div></a><a href="/80g-registration/chennai" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Chennai</div><div class="pa-card-sub">Tamil Nadu</div></div></a><a href="#" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Kolkata</div><div class="pa-card-sub">West Bengal</div></div></a></div></div><div class="pa-city-block"><div class="pa-block-title">Related Services in Pune</div><div class="pa-block-sub">End-to-end NGO registration and compliance</div><div class="pa-cross-grid"><a href="/ngo-registration/pune" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">NGO Registration</div><div class="pa-card-sub">Pune</div></div></a><a href="/section-8-company-registration/pune" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Section 8 Company</div><div class="pa-card-sub">Pune</div></div></a><a href="/private-limited-company-registration/pune" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Pvt Ltd Registration</div><div class="pa-card-sub">Pune</div></div></a><a href="/gst-registration/pune" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">GST Registration</div><div class="pa-card-sub">Pune</div></div></a><a href="/trademark-registration/pune" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Trademark Registration</div><div class="pa-card-sub">Pune</div></div></a></div></div>
        </div>
    </div>
</section>

<!-- CONTENT FRESHNESS FOOTER -->
<section class="content-section" style="padding:32px;">
    <div class="content-container">
        <div class="text-content" style="font-size:13px;color:var(--text-muted);">
            <p><strong>Content Created:</strong> 13 March 2026 &nbsp;|&nbsp; <strong>Last Updated:</strong> <span id="lastUpdatedFooter">13 March 2026</span> &nbsp;|&nbsp; <strong>Next Review:</strong> 13 June 2026 &nbsp;|&nbsp; <strong>Reviewed By:</strong> CA &amp; CS Team, Patron Accounting LLP</p>
            <p>This page is reviewed quarterly (Freshness Tier 1) to reflect Finance Act amendments, Form 10BD/10BE deadline changes, PCIT processing timeline updates, and renewal deadlines. The next scheduled review is June 2026.</p>
        </div>
    </div>
</section>

<!-- STICKY WHATSAPP BAR -->

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
