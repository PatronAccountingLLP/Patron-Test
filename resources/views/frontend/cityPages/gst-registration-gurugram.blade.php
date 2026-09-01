
@extends('layouts.service-app')

<!-- External Dependencies (loaded by master layout in production) -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Barlow:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,400&family=DM+Sans:opsz,wght@9..40,400;9..40,500;9..40,600;9..40,700&display=swap" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

@section('meta')
    <title>GST Registration in Gurugram - Process, Fees & GSTIN</title>
    <meta name="description" content="CA-assisted GST registration in Gurugram. Zero govt fee. GSTIN in 3-7 days. Startups, IT, manufacturing, e-commerce. Serving Cyber City, Sohna Rd. Call +91 945 945 6700.">
    <link rel="canonical" href="/gst-registration/gurugram">
    <meta name="robots" content="index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1">
    <meta property="og:title" content="GST Registration in Gurugram - Process, Fees & GSTIN">
    <meta property="og:description" content="CA-assisted GST registration in Gurugram. Zero govt fee. GSTIN in 3-7 days. Startups, IT, manufacturing, e-commerce. Serving Cyber City, Sohna Rd. Call +91 945 945 6700.">
    <meta property="og:url" content="/gst-registration/gurugram">
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="Patron Accounting">
    <meta property="og:image" content="https://www.patronaccounting.com/images/og-default-square.png">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="1200">
    <meta property="og:image:type" content="image/png">
    <meta property="og:image:secure_url" content="https://www.patronaccounting.com/images/og-default-square.png">
    <meta property="og:image:alt" content="Patron Accounting - partner you can rely on">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="GST Registration in Gurugram - Process, Fees & GSTIN">
    <meta name="twitter:description" content="CA-assisted GST registration in Gurugram. Zero govt fee. GSTIN in 3-7 days. Startups, IT, manufacturing, e-commerce. Serving Cyber City, Sohna Rd. Call +91 945 945 6700.">
    <meta name="twitter:image" content="https://www.patronaccounting.com/images/og-default-square.png">
@endsection

@section('schema')
    <script type="application/ld+json">{
  "@context": "https://schema.org",
  "@graph": [
    {
      "@type": "Service",
      "name": "GST Registration in Gurugram",
      "description": "CA-assisted GST registration in Gurugram. Zero govt fee. GSTIN in 3-7 days. Startups, IT, manufacturing, e-commerce. Serving Cyber City, Sohna Rd. Call +91 945 945 6700.",
      "url": "https://www.patronaccounting.com/gst-registration/gurugram",
      "serviceType": "GST Registration in Gurugram",
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
        "url": "https://www.patronaccounting.com/gst-registration/gurugram",
        "priceSpecification": {
          "@type": "PriceSpecification",
          "minPrice": "20",
          "maxPrice": "40",
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
          "name": "GST Registration in India: Online Process, Fees and Limits",
          "item": "https://www.patronaccounting.com/gst-registration"
        },
        {
          "@type": "ListItem",
          "position": 3,
          "name": "GST Registration in Gurugram",
          "item": "https://www.patronaccounting.com/gst-registration/gurugram"
        }
      ]
    },
    {
      "@type": "FAQPage",
      "mainEntity": [
        {
          "@type": "Question",
          "name": "How do I register for GST in Gurugram?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "File Form REG-01 on gst.gov.in with PAN, Aadhaar, business proof, Gurugram address proof, bank details, and photographs. Complete Aadhaar + biometric authentication. GST officer verifies within 3-7 working days. GSTIN certificate issued digitally. Patron's Gurugram office handles the complete process."
          }
        },
        {
          "@type": "Question",
          "name": "What is the turnover limit for GST in Gurugram?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Goods suppliers: Rs 40 lakh aggregate turnover (Haryana = normal state). Service providers: Rs 20 lakh. However, inter-state suppliers, e-commerce sellers, and other Section 24 categories must register regardless of turnover. Most Gurugram IT companies trigger mandatory registration through inter-state service supply."
          }
        },
        {
          "@type": "Question",
          "name": "What documents are needed for GST registration?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "PAN, Aadhaar, business registration proof (COI, partnership deed, LLP agreement), Gurugram address proof (rent agreement + NOC + electricity bill), bank account details (cancelled cheque/statement header), photographs, and authorisation letter. For co-working spaces: operator NOC + supplementary address confirmation."
          }
        },
        {
          "@type": "Question",
          "name": "Is there any government fee for GST registration?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "No. GST registration on gst.gov.in is completely free - zero government fee. No stamp duty or filing charges. Professional assistance ensures correct filing, jurisdiction mapping, biometric coordination, and post-registration compliance. Patron's all-inclusive from Rs 1,999."
          }
        },
        {
          "@type": "Question",
          "name": "How long does GST registration take in Gurugram?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "3-7 working days from Form REG-01 submission, assuming Aadhaar + biometric authentication completed and no queries raised. If queries arise (Form REG-03), response within 7 days. Patron monitors ARN status daily and files responses immediately."
          }
        },
        {
          "@type": "Question",
          "name": "When is GST mandatory regardless of turnover?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Under Section 24: inter-state suppliers of goods or services, e-commerce operators and sellers, casual taxable persons, non-resident taxable persons, reverse charge businesses, input service distributors, and TDS/TCS deductors. For Gurugram IT companies servicing pan-India clients, this is the most common trigger."
          }
        },
        {
          "@type": "Question",
          "name": "What is the Composition Scheme under GST?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Simplified scheme for small businesses: turnover up to Rs 1.5 crore (goods) or Rs 50 lakh (services). Lower tax rates, quarterly filing, but no ITC claim, no inter-state supply, and no e-commerce. Suitable for small local retailers and restaurants in Gurugram."
          }
        },
        {
          "@type": "Question",
          "name": "What happens if I don't register for GST?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Penalty of 10% of tax due (minimum Rs 10,000). Deliberate evasion: 100% of tax due. Cannot issue tax invoices, cannot claim ITC, cannot participate in B2B transactions or government tenders. For Gurugram businesses in the B2B ecosystem, this effectively shuts you out of the corporate supply chain. Quick Answers Gurugram mein GST registration kitne mein hota hai? Government fee zero hai - bilkul free. Portal gst.gov.in par Form REG-01 file hota hai. Patron ka all-inclusive Rs 1,999 se start. GST registration mein kitna time lagta hai? 3-7 working days. Aadhaar biometric verification ke baad. Patron daily status monitor karta hai. Kya Rs 20 lakh se kam turnover par GST zaruri hai? Agar inter-state supply karte ho ya e-commerce par sell karte ho toh haan, turnover se farak nahi padta. Section 24 ke under mandatory hai."
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
                        GST Registration in Gurugram: Get Your GSTIN for Startups, IT Companies and Manufacturers
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
                            <p class="mb-0 text-dark benefit-paragraph"><span>Documents:</span> PAN, Aadhaar, business proof, address proof, bank account, photographs, authorisation</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Fees:</span> ZERO government fee for GST registration</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Eligibility:</span> Goods turnover > Rs 40 lakh | Services turnover > Rs 20 lakh | Mandatory for inter-state supply, e-commerce, and other Section 24 categories</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Timeline:</span> 3-7 working days from application submission</p>
                        </div>
                    </div>

                    <p class="mb-4 fw-bold" style="color: var(--blue); font-size: 15px;">10,000+ Businesses Served | 4.9 Google Rating | Visit our Gurugram office or get started online</p>

                    <div class="hero-cta">
                        <a href="tel:+919459456700" class="btn-video text-decoration-none">
                            <span class="play-circle"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="width:14px;height:14px;color:#fff"><path d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/></svg></span>
                            Call +91 945 945 6700
                        </a>
                        <a href="mailto:sales@patronaccounting.com" class="btn-sample text-decoration-none">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="width:18px;height:18px;"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,12 2,6"/></svg>
                            Email Us
                        </a>
                        <a href="https://wa.me/919459456700?text=Hi%2C%20I%20need%20GST%20registration%20in%20Gurugram.%20Please%20call%20me." target="_blank" class="btn-sample text-decoration-none">
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
                                            'service'  => 'GST Registration in Gurugram',
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
            <a href="#overview-section" class="toc-btn">Overview</a><a href="#what-section" class="toc-btn">What Is GST</a><a href="#who-section" class="toc-btn">Who Needs It</a><a href="#services-section" class="toc-btn">Services</a><a href="#procedure-section" class="toc-btn">Process</a><a href="#documents-section" class="toc-btn">Documents</a><a href="#challenges-section" class="toc-btn">Challenges</a><a href="#fees-section" class="toc-btn">Fees</a><a href="#timeline-section" class="toc-btn">Timeline</a><a href="#benefits-section" class="toc-btn">Why Patron</a><a href="#comparison-section" class="toc-btn">Regular vs Composition</a><a href="#faq-section" class="toc-btn">FAQs</a>
        </div>
        <button class="toc-arrow right" id="tocRight">&#10095;</button>
    </div>
</div>

<!-- SECTION 2: OVERVIEW / INTRO + TL;DR -->
<section class="content-section" id="overview-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">GST Registration in Gurugram - Overview</h2>
            <div class="content-text">
                <div class="highlight-box" style="margin-bottom:20px;">
                    <p><strong>&#128204; TL;DR - GST Registration in Gurugram Services at a Glance</strong></p>
                    <p>GST registration is the process of obtaining a 15-digit GSTIN from gst.gov.in that authorises your business to collect GST, claim ITC, and issue tax invoices. In Gurugram (Haryana state code 06), GST is mandatory for goods suppliers above Rs 40 lakh and service providers above Rs 20 lakh. Inter-state suppliers, e-commerce operators, and other Section 24 categories must register regardless of turnover. Zero government fee. 3-7 working days. Critical 2025 updates: Aadhaar + biometric authentication mandatory, bank account within 30 days of registration.</p><div class="table-responsive-wrapper" style="margin-top:16px;"><table><thead><tr><th>Parameter</th><th>Detail</th></tr></thead><tbody><tr><td>Governing Law</td><td>CGST Act, 2017 + Haryana GST (HGST) Act, 2017</td></tr><tr><td>Portal</td><td>gst.gov.in</td></tr><tr><td>Form</td><td>GST REG-01</td></tr><tr><td>Haryana State Code</td><td>06 (GSTIN starts with 06 for Gurugram)</td></tr><tr><td>Threshold (Goods)</td><td>Rs 40 lakh aggregate turnover</td></tr><tr><td>Threshold (Services)</td><td>Rs 20 lakh aggregate turnover</td></tr><tr><td>Govt Fee</td><td>NIL - zero government fee</td></tr><tr><td>Processing Time</td><td>3-7 working days</td></tr><tr><td>2025 Updates</td><td>Aadhaar + biometric mandatory | Bank account within 30 days</td></tr></tbody></table></div></p>
                </div>
                <p>Gurugram is one of India's most GST-intensive business hubs. DLF Cyber City and Golf Course Road house IT/ITES companies generating crores in inter-state service revenue. Udyog Vihar and Manesar IMT are manufacturing powerhouses. Sohna Road hosts a thriving startup ecosystem. GST registration is not just compliance - it enables ITC claims, tax invoices, B2B marketplace participation, and government tenders. Learn more about <a href="/gst-registration">GST Registration across India</a>.</p>
                <p>Patron Accounting's Gurugram office on Golf Course Extension Road provides end-to-end GST registration - from Form REG-01 filing through Aadhaar + biometric coordination to bundled monthly <a href="/gst-returns">GST Return Filing</a> and <a href="/accounting-services">Accounting Services</a>. One engagement, complete GST lifecycle management.</p>
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
                <h2 class="section-title">What Is GST Registration</h2>
                <div class="content-text what-is-definition">
                    
                    <p>GST registration is the process of enrolling a business under the GST regime by filing Form REG-01 on gst.gov.in, obtaining a 15-digit GSTIN, and becoming legally authorised to collect GST, claim ITC on inputs, issue tax invoices, and file GST returns.</p><p>The GSTIN is PAN-based and starts with 06 (Haryana state code) for Gurugram businesses. Each state where the business operates requires a separate GSTIN. A Gurugram company with a Maharashtra branch needs two GSTINs - 06 (Haryana) and 27 (Maharashtra).</p>

                </div>
                <div class="highlight-box" style="margin-top:20px;">
                    <p><strong>Key Terms for GST Registration in Gurugram:</strong></p>
                    <p><strong>GSTIN:</strong> 15-digit GST Identification Number. Format: 06AABCC1234D1Z5 for Gurugram (06 = Haryana).</p><p><strong>ITC (Input Tax Credit):</strong> Credit for GST paid on purchases offset against GST collected on sales. Only for registered businesses. Key working capital tool.</p><p><strong>Section 24:</strong> Mandatory GST registration regardless of turnover - inter-state suppliers, e-commerce, casual taxable persons, TDS/TCS deductors.</p><p><strong>CGST/HGST/IGST:</strong> CGST (central) + HGST (Haryana state) on intra-state supplies. IGST on inter-state supplies.</p><p><strong>Composition Scheme:</strong> Simplified for small businesses. Goods up to Rs 1.5 Cr, services up to Rs 50 L. Lower rates, quarterly filing, but no ITC.</p>

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
                            <text x="100" y="170" font-size="10" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial, sans-serif">GST Registration in Gurugram</text>
                        </svg>
                    </div>
                    <div class="illustration-badge">
                        <span>CGST + HGST</span>
                        <strong>GST Registration</strong>
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
            <h2 class="section-title">Who Needs GST Registration in Gurugram</h2>
            <div class="content-text">
                
                <p><strong>Goods Suppliers Above Rs 40 Lakh:</strong> Manufacturers in Manesar IMT and Udyog Vihar, traders, retailers. Haryana is a normal category state - Rs 40 lakh threshold applies.</p><p><strong>Service Providers Above Rs 20 Lakh:</strong> IT/ITES in DLF Cyber City, consultants on Golf Course Road, SaaS startups on Sohna Road, freelancers. Most common trigger for Gurugram's service economy.</p><p><strong>Mandatory Under Section 24:</strong> Inter-state suppliers (most Cyber City IT companies), e-commerce sellers (Amazon, Flipkart, Meesho), casual taxable persons, non-resident taxable persons, reverse charge businesses, input service distributors, TDS/TCS deductors.</p><p><strong>Voluntary Registration:</strong> Below-threshold businesses can register to claim ITC on purchases. Many Gurugram startups register voluntarily for B2B credibility and to claim ITC on office rent and equipment.</p>

            </div>
            </div>
        </div>
    </div>
</section>

<!-- SECTION 5: OUR SERVICES -->
<section class="content-section" id="services-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">9 GST Registration Services Included in Gurugram</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Service</th><th>What We Do</th></tr></thead>
                    <tbody>
                        <tr><td>Threshold and Applicability Assessment</td><td>CA assessment of turnover, business model, and Section 24 criteria. Determine correct registration type (regular, composition, casual, non-resident).</td></tr><tr><td>GST Portal Registration (Form REG-01)</td><td>Complete online filing on gst.gov.in with Part A and B details, document uploads, and GST Commissionerate Gurugram jurisdiction selection (Haryana code 06).</td></tr><tr><td>Aadhaar + Biometric Authentication</td><td>Coordination for mandatory Aadhaar verification and biometric authentication at designated centres per February 2025 GSTN advisory.</td></tr><tr><td>Document Preparation</td><td>PAN, Aadhaar, business proof, Gurugram address proof, bank details, photographs, and authorisation letter.</td></tr><tr><td>ARN Tracking and GSTIN Issuance</td><td>Monitoring Application Reference Number, responding to GST officer queries (Form REG-03/04), and GSTIN certificate download.</td></tr><tr><td>Bank Account Furnishing (30-Day)</td><td>Per November 2025 GSTN advisory, bank account details furnished within 30 days of registration or before GSTR-1/IFF.</td></tr><tr><td>Monthly Return Filing Setup</td><td>Post-registration calendar: GSTR-1 (outward supplies by 11th) + GSTR-3B (summary + tax by 20th) every month.</td></tr><tr><td>Annual Return (GSTR-9) Setup</td><td>Annual return filing guidance and calendar. Due by December 31.</td></tr><tr><td>ITC Reconciliation (GSTR-2B)</td><td>Matching ITC claims with supplier data to prevent mismatches and notices. Critical for Gurugram's B2B businesses.</td></tr>

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
            <h2 class="section-title">6-Step GST Registration Process in Gurugram</h2>
            <p class="section-subtitle" style="text-align:left;max-width:100%;">GST registration filed online through gst.gov.in. GST Commissionerate Gurugram (CGST) and Haryana Excise & Taxation Dept (HGST) have dual jurisdiction. Haryana state code: 06. Patron's Gurugram office on Golf Course Extension Road manages the complete process.</p>
        </header>
        <div class="steps-container">
            <div class="step-card"><div class="step-content"><span class="step-badge">Step 1</span><h3 class="step-title">Assess Applicability</h3><p class="step-description">Patron's CA team checks aggregate turnover against Rs 40 lakh (goods) or Rs 20 lakh (services) threshold. We also verify Section 24 mandatory criteria: inter-state supply, e-commerce, reverse charge. For Gurugram IT companies servicing clients across states, mandatory registration under Section 24 typically applies regardless of turnover.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Threshold assessed</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Section 24 checked</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="15" y="10" width="90" height="60" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><rect x="25" y="18" width="30" height="20" rx="3" fill="#E8F5E9" stroke="#25D366" stroke-width="1"/><text x="40" y="31" font-size="5" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">Rs 40L</text><rect x="60" y="18" width="30" height="20" rx="3" fill="#FFF3E0" stroke="#F5A623" stroke-width="1"/><text x="75" y="31" font-size="5" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">Rs 20L</text><text x="60" y="55" font-size="5" fill="#14365F" font-weight="600" text-anchor="middle" font-family="Arial">S.24 Mandatory?</text></svg></div><span class="illustration-label">Assessed</span><span class="step-number-large">01</span></div></div></div>
<div class="step-card"><div class="step-content"><span class="step-badge">Step 2</span><h3 class="step-title">Prepare Documents</h3><p class="step-description">Patron compiles: PAN, Aadhaar of all partners/directors, business registration proof, Gurugram address proof (rent agreement + NOC + electricity bill), bank account details (cancelled cheque/statement header), passport-size photographs, and authorisation letter/board resolution. For co-working spaces in Cyber City/Sohna Road: operator NOC + supplementary address confirmation.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>All docs compiled</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Co-work proof verified</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="15" y="5" width="90" height="70" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><line x1="30" y1="22" x2="85" y2="22" stroke="#F5A623" stroke-width="2.5" stroke-linecap="round"/><line x1="30" y1="35" x2="78" y2="35" stroke="#14365F" stroke-width="1.5" opacity="0.3"/><line x1="30" y1="48" x2="72" y2="48" stroke="#14365F" stroke-width="1.5" opacity="0.3"/><circle cx="85" cy="60" r="8" fill="#E8F5E9" stroke="#25D366" stroke-width="1"/><path d="M81 60l3 3 5-5" stroke="#25D366" stroke-width="1.5" stroke-linecap="round"/></svg></div><span class="illustration-label">Docs Ready</span><span class="step-number-large">02</span></div></div></div>
<div class="step-card"><div class="step-content"><span class="step-badge">Step 3</span><h3 class="step-title">File Form REG-01 on GST Portal</h3><p class="step-description">Part A: PAN, mobile, email submitted on gst.gov.in. OTP generates TRN. Part B: Detailed business info, Gurugram premises, bank account, authorised signatory, document uploads. Patron selects correct GST Commissionerate Gurugram jurisdiction and Haryana state code 06.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>REG-01 filed</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Code 06 mapped</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="15" y="5" width="90" height="70" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><rect x="25" y="15" width="70" height="10" rx="3" fill="#25D366" opacity="0.15"/><text x="60" y="23" font-size="5" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">gst.gov.in</text><line x1="25" y1="35" x2="85" y2="35" stroke="#F5A623" stroke-width="2"/><text x="60" y="50" font-size="5" fill="#14365F" font-weight="600" text-anchor="middle" font-family="Arial">REG-01 Submitted</text></svg></div><span class="illustration-label">Filed</span><span class="step-number-large">03</span></div></div></div>
<div class="step-card"><div class="step-content"><span class="step-badge">Step 4</span><h3 class="step-title">Aadhaar and Biometric Authentication</h3><p class="step-description">Per February 2025 GSTN advisory, Aadhaar authentication with biometric verification mandatory. Depending on category, biometric at designated GST Suvidha Kendra or Aadhaar centre may be required. Patron coordinates the authentication to prevent ARN generation delays.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Biometric done</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Aadhaar verified</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="30" y="15" width="60" height="50" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><text x="60" y="35" font-size="7" fill="#14365F" font-weight="800" text-anchor="middle" font-family="Arial">Aadhaar</text><text x="60" y="52" font-size="5" fill="#25D366" font-weight="600" text-anchor="middle" font-family="Arial">Biometric &#10003;</text></svg></div><span class="illustration-label">Verified</span><span class="step-number-large">04</span></div></div></div>
<div class="step-card"><div class="step-content"><span class="step-badge">Step 5</span><h3 class="step-title">ARN Generation and Officer Verification</h3><p class="step-description">Application Reference Number generated on successful submission. GST officer verifies within 3-7 working days. If queries raised (Form REG-03), Patron responds within 7 working days with clarifications (Form REG-04). Non-response within 7 days leads to rejection.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>ARN tracked</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Queries responded</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="20" y="10" width="80" height="60" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><text x="60" y="30" font-size="6" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">ARN Status</text><rect x="30" y="38" width="60" height="20" rx="3" fill="#E8F5E9" stroke="#25D366" stroke-width="1"/><text x="60" y="51" font-size="5" fill="#14365F" font-weight="600" text-anchor="middle" font-family="Arial">Processing...</text></svg></div><span class="illustration-label">Tracked</span><span class="step-number-large">05</span></div></div></div>
<div class="step-card"><div class="step-content"><span class="step-badge">Step 6</span><h3 class="step-title">GSTIN Certificate Issuance</h3><p class="step-description">GSTIN certificate (Form REG-06) issued digitally on gst.gov.in. Patron downloads certificate, ensures bank account furnished within 30 days (November 2025 advisory), sets up monthly filing calendar (GSTR-1 by 11th, GSTR-3B by 20th), and configures ITC reconciliation. Certificate displayed at Gurugram premises.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>GSTIN 06... issued</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Returns calendar set</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="15" y="5" width="90" height="70" rx="6" fill="#E8F5E9" stroke="#25D366" stroke-width="1.5"/><text x="60" y="22" font-size="7" fill="#14365F" font-weight="800" text-anchor="middle" font-family="Arial">GSTIN</text><rect x="25" y="30" width="70" height="15" rx="3" fill="#fff" stroke="#25D366" stroke-width="1"/><text x="60" y="40" font-size="5" fill="#14365F" text-anchor="middle" font-family="Arial">06AABCC1234D1Z5</text><text x="60" y="62" font-size="5" fill="#14365F" font-weight="600" text-anchor="middle" font-family="Arial">ITC + Returns Ready</text></svg></div><span class="illustration-label">GSTIN Live</span><span class="step-number-large">06</span></div></div></div>


        </div>
    </div>
</section>

<!-- SECTION 8: DOCUMENTS REQUIRED -->
<section class="content-section" id="documents-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Documents Required for GST Registration in Gurugram</h2>
            <div class="content-text">
                
                <ul><li>PAN Card of business entity (company, LLP, partnership, proprietor)</li><li>Aadhaar Card of all partners/directors/proprietor (required for Aadhaar authentication)</li><li>Passport-size photographs of proprietor/partners/directors and authorised signatory</li><li>Business registration proof: COI + MOA/AOA (companies), LLP Agreement + COI, Partnership Deed, or proprietorship declaration</li><li>Address proof (Gurugram premises): Owned - property tax receipt + ownership document. Rented - rent agreement + NOC + electricity bill. Virtual office - valid agreement with address proof.</li><li>Bank account details: cancelled cheque or passbook first page or statement header (must be furnished within 30 days per Nov 2025 advisory)</li><li>Authorisation letter / Board resolution for the authorised signatory</li><li>Digital Signature Certificate (DSC) for companies and LLPs (Aadhaar OTP for proprietors/partnerships)</li></ul><div class="highlight-box" style="margin-top:20px;"><p><strong>Tip for Gurugram Startups:</strong> Many startups in Cyber City and Sohna Road operate from co-working spaces. GST registration requires valid address proof - ensure your co-working agreement includes a NOC from the operator and an electricity bill in the operator's name. Patron verifies address proof validity before filing.</p></div>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 9: CHALLENGES -->
<section class="content-section" id="challenges-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">5 Common GST Registration Challenges in Gurugram</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Challenge</th><th>Impact</th><th>How Patron Accounting Solves It</th></tr></thead>
                    <tbody>
                        <tr><td>Aadhaar + Biometric Authentication Delays</td><td>February 2025 mandatory. Applicants face delays at GST Suvidha Kendras. Aadhaar-PAN mismatch causes rejection.</td><td>Coordinate biometric appointments. Verify Aadhaar-PAN consistency before filing to prevent authentication failure.</td></tr><tr><td>Co-Working Space Address Proof Rejection</td><td>GST officers reject applications where co-working NOC doesn't clearly establish premises right. Common in Cyber City, Sohna Road.</td><td>Ensure co-working agreement includes proper NOC with supplementary address confirmation letter.</td></tr><tr><td>Bank Account Not Furnished in 30 Days</td><td>November 2025 advisory: bank details within 30 days or before GSTR-1. Failure leads to GSTIN suspension.</td><td>30-day compliance tracker from GSTIN issuance date. Bank account opening support included.</td></tr><tr><td>Incorrect Jurisdiction Selection</td><td>Wrong GST Commissionerate or Haryana E&T Range selection delays processing. Common with multi-premises businesses.</td><td>Correct jurisdiction mapping based on specific Gurugram premises location.</td></tr><tr><td>Missing 7-Day Query Response Window</td><td>GST officer query (Form REG-03) must be answered in 7 days. Non-response = automatic rejection.</td><td>Monitor ARN status daily. CA-prepared responses filed within the window.</td></tr>

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
            <h2 class="section-title">GST Registration Fees in Gurugram - 2026 Schedule</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Fee Component</th><th>Amount</th></tr></thead>
                    <tbody>
                        <tr><td>Government Fee</td><td>NIL - zero government fee for GST registration</td></tr><tr><td>Patron Fee (Regular Registration)</td><td>From Rs 1,999 (Form REG-01 + Aadhaar coordination + GSTIN download)</td></tr><tr><td>Patron Fee (With Return Filing Setup)</td><td>From Rs 4,999 (registration + first 3 months GSTR-1/3B + GSTR-9 calendar)</td></tr><tr><td>Monthly Return Filing (GSTR-1 + GSTR-3B)</td><td>From Rs 1,499/month (ongoing compliance)</td></tr><tr><td>Annual Return (GSTR-9)</td><td>From Rs 4,999 per financial year</td></tr><tr><td>ITC Reconciliation (GSTR-2B Matching)</td><td>Included in return filing</td></tr><tr><td>GST Amendment / Modification</td><td>From Rs 999 (core or non-core field changes)</td></tr><tr><td>GST Cancellation</td><td>From Rs 1,999 (voluntary surrender)</td></tr>

                    </tbody>
                </table>
                </div>
                <p style="margin-top:16px;font-size:13px;color:var(--text-muted);font-style:italic;">All fees and charges listed are indicative only and do not constitute a binding offer. Final amounts may vary depending on the volume of work and the complexity involved.</p>
                <p style="margin-top:16px;">Professional service charges for drafting, filing, and representation are separate from the statutory fees. The exact fee depends on the complexity of the case, disputed amount, and number of hearings required. Contact us for a detailed quote.</p>
                <p style="margin-top:16px;"><strong>Get a free GST Registration in Gurugram consultation - <a href="tel:+919459456700">Call +91 945 945 6700</a> or <a href="https://wa.me/919459456700?text=Hi%2C%20I%20need%20GST%20registration%20in%20Gurugram.%20Please%20call%20me." target="_blank">WhatsApp us</a>. No-obligation assessment.</strong></p>
            </div>
        </div>
    </div>
</section>

<!-- SECTION 11: TIMELINE -->
<section class="content-section" id="timeline-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">GST Registration Timeline in Gurugram</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Stage</th><th>Estimated Timeline</th></tr></thead>
                    <tbody>
                        <tr><td>Document Preparation</td><td>1-2 days</td></tr><tr><td>Form REG-01 Filing</td><td>1 day (online on gst.gov.in)</td></tr><tr><td>Aadhaar + Biometric Authentication</td><td>1-3 days (at GST Suvidha Kendra)</td></tr><tr><td>ARN Generation + Officer Verification</td><td>3-7 working days (GSTIN issued if no queries)</td></tr><tr><td>Query Response (if raised)</td><td>7 working days maximum (Form REG-04)</td></tr><tr><td>Bank Account Furnishing</td><td>Within 30 days of GSTIN (Nov 2025 advisory)</td></tr><tr><td><strong>Total End-to-End</strong></td><td><strong>3-7 working days (excluding queries and biometric scheduling)</strong></td></tr>

                    </tbody>
                </table>
                </div>
                <div class="highlight-box" style="margin-top:16px;">
                    
                    <p><strong>Note:</strong> The February 2025 Aadhaar + biometric requirement and November 2025 30-day bank account rule are the two most critical compliance milestones. Patron coordinates biometric appointments to prevent ARN delays and sets up a 30-day bank account tracker from GSTIN issuance. Zero government fee means the only cost is professional advisory.</p>

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
            <h2 class="section-title">Why Choose Patron for GST Registration in Gurugram</h2>
        </div>
        <div class="features-grid"><article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><h3 class="feature-title">2025 GSTN Advisory Compliance</h3><p class="feature-text">Patron navigates the Aadhaar + biometric requirement (Feb 2025) and the 30-day bank account rule (Nov 2025) that trip up most self-filing applicants.</p></article><article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4"/></svg></div><h3 class="feature-title">ITC Positioning for B2B</h3><p class="feature-text">For Gurugram's IT companies and manufacturers, GST is fundamentally about ITC. Patron sets up ITC reconciliation with GSTR-2B matching from day one - preventing mismatches and notices.</p></article><article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg></div><h3 class="feature-title">Co-Working + Virtual Office Expertise</h3><p class="feature-text">Patron knows which address proof formats are accepted for Gurugram co-working spaces and prepares documentation accordingly. Prevents the most common Cyber City/Sohna Road rejection cause.</p></article><article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><path d="M12 6v6l4 2"/></svg></div><h3 class="feature-title">Bundled Ongoing Compliance</h3><p class="feature-text">GST registration is just the beginning. Monthly GSTR-1/3B, annual GSTR-9, ITC reconciliation, and amendments bundled in one engagement. One CA practice, complete GST lifecycle.</p></article></div>
    </div>
</section>

<!-- SECTION 12A: SOCIAL PROOF -->
<section class="content-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Trusted by 10,000+ Businesses Across India</h2>
            <div class="content-text">
                
                <p><strong>10,000+ Businesses Served | 4.9 Google Rating | 50,000+ Docs Filed | 15+ Years</strong></p><p>Trusted by Hyundai, Asian Paints, Bridgestone. Offices in Pune, Mumbai, Delhi, Gurugram. Patron serves Gurugram businesses with local office presence on Golf Course Extension Road and a pan-India CA team.</p>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 13: SELF-FILING vs PROFESSIONAL COMPARISON -->
<section class="content-section" id="comparison-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Regular vs Composition GST Registration</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Factor</th><th>Regular Registration</th><th>Composition Scheme</th></tr></thead>
                    <tbody>
                        <tr><td>Threshold</td><td>Above Rs 40L (goods) / Rs 20L (services)</td><td>Up to Rs 1.5 crore (goods) / Rs 50 lakh (services)</td></tr><tr><td>Tax Rate</td><td>Standard GST rates (5%, 12%, 18%, 28%)</td><td>1% (manufacturers), 5% (restaurants), 6% (services)</td></tr><tr><td>Returns</td><td>Monthly GSTR-1 + GSTR-3B + Annual GSTR-9</td><td>Quarterly CMP-08 + Annual GSTR-4</td></tr><tr><td>ITC Claim</td><td>Yes - full ITC on inputs</td><td>No - cannot claim ITC</td></tr><tr><td>Inter-State Supply</td><td>Allowed</td><td>NOT allowed - intra-state only</td></tr><tr><td>E-Commerce</td><td>Allowed</td><td>NOT allowed</td></tr><tr><td>Best For</td><td>IT companies, manufacturers, inter-state suppliers, e-commerce in Gurugram</td><td>Small local retailers, restaurants (non-alcohol), local service providers</td></tr>

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
            <h2 class="section-title">Related Tax and Business Services</h2>
            <div class="content-text">
                
                <ul><li><a href="/gst-registration">GST Registration in India</a> - Our national GST registration service</li><li><a href="/gst-returns">GST Returns Filing</a> - Monthly GSTR-1/3B and annual GSTR-9</li><li><a href="/iec-registration">IEC Registration</a> - For import-export businesses</li><li><a href="/trademark-registration">Trademark Registration</a> - Brand protection</li><li><a href="/fssai-registration">FSSAI Registration</a> - For food businesses alongside GST</li><li><a href="/accounting-services">Accounting Services</a> - Complete bookkeeping and compliance</li></ul><p>GSTIN is the foundation of indirect tax compliance. Without it, no ITC claims, no tax invoices, no B2B marketplace participation, and no government tenders. Patron delivers GST as part of the complete business compliance chain.</p>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 15A: LEGAL FRAMEWORK -->
<section class="content-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Legal and Compliance Framework for GST Registration</h2>
            <div class="content-text">
                
                <p><strong>Governing Provisions:</strong></p><ul><li>CGST Act, 2017 + HGST (Haryana GST) Act, 2017 + IGST Act, 2017</li><li>Section 22: Mandatory registration above turnover threshold</li><li>Section 24: Mandatory regardless of turnover (inter-state, e-commerce, casual, non-resident, reverse charge, ISD, TDS/TCS)</li><li>Section 25: Registration procedure. Form REG-01. GSTIN in Form REG-06.</li><li>Section 10: Composition Scheme - goods Rs 1.5 Cr, services Rs 50 L. Lower rates. No ITC.</li><li>Returns: GSTR-1 by 11th, GSTR-3B by 20th, GSTR-9 by Dec 31</li><li>2025: Aadhaar + biometric (Feb), bank account 30 days (Nov)</li></ul><p><strong>Penalties:</strong> Non-registration: 10% of tax due (min Rs 10,000). Deliberate evasion: 100% of tax due. Late filing: Rs 50/day CGST+SGST for GSTR-3B.</p><p><strong>Key Portal:</strong> <a href="https://gst.gov.in" target="_blank" rel="noopener">GST Portal (gst.gov.in)</a></p>

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
                    <h2 class="faq-expanded__title">FAQs - GST Registration in Gurugram</h2>
                    <p class="faq-expanded__lead">Answers to common questions about GST registration in Gurugram. Call +91 945 945 6700.</p>
                    @include('partials.bigin-form', [
                        'variant'  => 'compact',
                        'service'  => 'GST Registration in Gurugram',
                        'city'     => 'Gurugram',
                    ])
                </aside>
                <div class="faq-expanded__list">
                    <div class="faq-expanded__item" id="faq-1">
                        <h3 class="faq-expanded__q">How do I register for GST in Gurugram?</h3>
                        <div class="faq-expanded__a"><p>File Form REG-01 on gst.gov.in with PAN, Aadhaar, business proof, Gurugram address proof, bank details, and photographs. Complete Aadhaar + biometric authentication. GST officer verifies within 3-7 working days. GSTIN certificate issued digitally. Patron's Gurugram office handles the complete process.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-2">
                        <h3 class="faq-expanded__q">What is the turnover limit for GST in Gurugram?</h3>
                        <div class="faq-expanded__a"><p>Goods suppliers: Rs 40 lakh aggregate turnover (Haryana = normal state). Service providers: Rs 20 lakh. However, inter-state suppliers, e-commerce sellers, and other Section 24 categories must register regardless of turnover. Most Gurugram IT companies trigger mandatory registration through inter-state service supply.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-3">
                        <h3 class="faq-expanded__q">What documents are needed for GST registration?</h3>
                        <div class="faq-expanded__a"><p>PAN, Aadhaar, business registration proof (COI, partnership deed, LLP agreement), Gurugram address proof (rent agreement + NOC + electricity bill), bank account details (cancelled cheque/statement header), photographs, and authorisation letter. For co-working spaces: operator NOC + supplementary address confirmation.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-4">
                        <h3 class="faq-expanded__q">Is there any government fee for GST registration?</h3>
                        <div class="faq-expanded__a"><p>No. GST registration on gst.gov.in is completely free - zero government fee. No stamp duty or filing charges. Professional assistance ensures correct filing, jurisdiction mapping, biometric coordination, and post-registration compliance. Patron's all-inclusive from Rs 1,999.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-5">
                        <h3 class="faq-expanded__q">How long does GST registration take in Gurugram?</h3>
                        <div class="faq-expanded__a"><p>3-7 working days from Form REG-01 submission, assuming Aadhaar + biometric authentication completed and no queries raised. If queries arise (Form REG-03), response within 7 days. Patron monitors ARN status daily and files responses immediately.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-6">
                        <h3 class="faq-expanded__q">When is GST mandatory regardless of turnover?</h3>
                        <div class="faq-expanded__a"><p>Under Section 24: inter-state suppliers of goods or services, e-commerce operators and sellers, casual taxable persons, non-resident taxable persons, reverse charge businesses, input service distributors, and TDS/TCS deductors. For Gurugram IT companies servicing pan-India clients, this is the most common trigger.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-7">
                        <h3 class="faq-expanded__q">What is the Composition Scheme under GST?</h3>
                        <div class="faq-expanded__a"><p>Simplified scheme for small businesses: turnover up to Rs 1.5 crore (goods) or Rs 50 lakh (services). Lower tax rates, quarterly filing, but no ITC claim, no inter-state supply, and no e-commerce. Suitable for small local retailers and restaurants in Gurugram.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-8">
                        <h3 class="faq-expanded__q">What happens if I don't register for GST?</h3>
                        <div class="faq-expanded__a"><p>Penalty of 10% of tax due (minimum Rs 10,000). Deliberate evasion: 100% of tax due. Cannot issue tax invoices, cannot claim ITC, cannot participate in B2B transactions or government tenders. For Gurugram businesses in the B2B ecosystem, this effectively shuts you out of the corporate supply chain.</p></div>
                    </div>
                </div>
            </div>


            <!-- Quick Answers -->
            <div class="highlight-box" style="margin-top:32px;">
                <p><strong>Quick Answers</strong></p>
                <p><strong>Gurugram mein GST registration kitne mein hota hai?</strong> Government fee zero hai - bilkul free. Portal gst.gov.in par Form REG-01 file hota hai. Patron ka all-inclusive Rs 1,999 se start.</p><p><strong>GST registration mein kitna time lagta hai?</strong> 3-7 working days. Aadhaar biometric verification ke baad. Patron daily status monitor karta hai.</p><p><strong>Kya Rs 20 lakh se kam turnover par GST zaruri hai?</strong> Agar inter-state supply karte ho ya e-commerce par sell karte ho toh haan, turnover se farak nahi padta. Section 24 ke under mandatory hai.</p>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 18: URGENCY CTA -->
<section class="content-section" style="background: var(--orange-lighter) !important; border-left: 4px solid var(--orange);">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">No GST = No ITC, No Tax Invoices, No B2B Access</h2>
            <div class="content-text">
                
                <p>Every day without GST means no ITC claims (increasing your effective cost), no tax invoices (losing B2B clients), no government tenders, and accumulating penalty of 10% of tax due. For inter-state suppliers in Gurugram, Section 24 makes registration mandatory regardless of turnover. The November 2025 advisory adds urgency: even after registration, bank details must be furnished within 30 days or GSTIN is suspended.</p><p><strong>Get your GSTIN in 3-7 days. <a href="tel:+919459456700">Call +91 945 945 6700</a> or <a href="https://wa.me/919459456700?text=Hi%2C%20I%20need%20GST%20registration%20in%20Gurugram." target="_blank">WhatsApp us</a>.</strong></p>

            </div>
        </div>
    </div>
</section>

<!-- CONCLUSION + CTA BLOCK (Dark) -->
<section class="content-section" style="background: var(--blue) !important;">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title" style="color:#FFFFFF !important;">Get Your GSTIN and Start Claiming ITC</h2>
            <div class="content-text" style="text-align:left;">
                
                <p style="color:rgba(255,255,255,0.85);">GST registration is the foundational tax compliance for every Gurugram business - from the SaaS startup on Sohna Road to the manufacturer in Manesar IMT to the IT services company in DLF Cyber City. Your GSTIN starting with 06 is your license to collect tax, claim ITC, issue invoices, and participate in India's formal B2B economy.</p><p style="color:rgba(255,255,255,0.85);">Patron Accounting's Gurugram office on Golf Course Extension Road provides CA-assisted GST registration with biometric coordination, jurisdiction mapping, co-working address proof preparation, and bundled ongoing compliance. One engagement from registration to reconciliation. 15+ years, 10,000+ businesses served.</p>

            </div>
            <div style="display:flex;gap:14px;flex-wrap:wrap;margin-top:24px;">
                <a href="tel:+919459456700" style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:var(--orange);color:#fff;border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#128222; Call +91 945 945 6700</a>
                <a href="https://wa.me/919459456700?text=Hi%2C%20I%20need%20GST%20registration%20in%20Gurugram.%20Please%20call%20me." target="_blank" style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:#25D366;color:#fff;border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#128172; WhatsApp Us</a>
                <a href="mailto:sales@patronaccounting.com?subject=Enquiry%20for%20GST%20Registration%20Gurugram&body=Hello%20Patron%20Accounting%20Team%2C%0A%0AI%20need%20GST%20registration%20in%20Gurugram.%0A%0APlease%20get%20in%20touch.%0A%0AThank%20you." style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:transparent;color:#fff;border:2px solid rgba(255,255,255,0.3);border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#9993;&#65039; Email Us</a>
            </div>
            <p style="color:rgba(255,255,255,0.7);font-size:13px;margin-top:16px;">Book a Free Consultation - No Obligation.</p>
        </div>
    </div>
</section>

<!-- GSTAT STATE BENCH CITY PAGES (32 Pages) -->
<section class="content-section" style="padding:48px 32px;background:var(--gray-50);">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title" style="text-align:center;margin-bottom:12px;">GST Registration Across India</h2>
            <p style="text-align:center;color:var(--text-muted);font-size:15px;margin-bottom:40px;">Patron offers GST registration in 8 major cities. Select your city below.</p>
      
            <div class="pa-city-block" style="margin-bottom:40px;"><div class="pa-city-grid"><a href="/gst-registration/pune" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Pune</div><div class="pa-card-sub">Maharashtra</div></div></a><a href="/gst-registration/mumbai" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Mumbai</div><div class="pa-card-sub">Maharashtra</div></div></a><a href="/gst-registration/delhi" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Delhi</div><div class="pa-card-sub">Delhi NCR</div></div></a><div class="pa-city-card" style="opacity:0.6; pointer-events:none; border:2px solid var(--orange); position:relative;"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Gurugram</div><div class="pa-card-sub">Haryana</div></div><span style="position:absolute; top:6px; right:8px; font-size:10px; color:var(--orange); font-weight:700; text-transform:uppercase; letter-spacing:0.5px;">You're here</span></div><a href="/gst-registration/bangalore" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Bangalore</div><div class="pa-card-sub">Karnataka</div></div></a><a href="/gst-registration/hyderabad" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Hyderabad</div><div class="pa-card-sub">Telangana</div></div></a><a href="/gst-registration/chennai" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Chennai</div><div class="pa-card-sub">Tamil Nadu</div></div></a><a href="/gst-registration/kolkata" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Kolkata</div><div class="pa-card-sub">West Bengal</div></div></a></div></div><div class="pa-city-block"><div class="pa-block-title">Related Services in Gurugram</div><div class="pa-block-sub">End-to-end tax and business registration</div><div class="pa-cross-grid"><a href="/private-limited-company-registration/gurugram" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Pvt Ltd Registration</div><div class="pa-card-sub">Gurugram</div></div></a><a href="/llp-incorporation/gurugram" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">LLP Registration</div><div class="pa-card-sub">Gurugram</div></div></a><a href="/startup-registration/gurugram" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Startup Registration</div><div class="pa-card-sub">Gurugram</div></div></a><a href="/accounting-services/gurugram" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Accounting Services</div><div class="pa-card-sub">Gurugram</div></div></a><a href="/payroll-services/gurugram" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Payroll Services</div><div class="pa-card-sub">Gurugram</div></div></a><a href="/trademark-registration/gurugram" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Trademark Registration</div><div class="pa-card-sub">Gurugram</div></div></a></div></div>
        </div>
    </div>
</section>

<!-- CONTENT FRESHNESS FOOTER -->
<section class="content-section" style="padding:32px;">
    <div class="content-container">
        <div class="text-content" style="font-size:13px;color:var(--text-muted);">
            <p><strong>Content Created:</strong> 13 March 2026 &nbsp;|&nbsp; <strong>Last Updated:</strong> <span id="lastUpdatedFooter">13 March 2026</span> &nbsp;|&nbsp; <strong>Next Review:</strong> 13 June 2026 &nbsp;|&nbsp; <strong>Reviewed By:</strong> CA &amp; CS Team, Patron Accounting LLP</p>
            <p>This page is reviewed quarterly (Freshness Tier 1) to reflect GST rate changes, GSTN portal updates, threshold amendments, return filing deadline changes, and new GSTN advisories. The next scheduled review is June 2026.</p>
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
