
@extends('layouts.service-app')

<!-- External Dependencies (loaded by master layout in production) -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Barlow:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,400&family=DM+Sans:opsz,wght@9..40,400;9..40,500;9..40,600;9..40,700&display=swap" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

@section('meta')
    <title>Trademark Search in Pune - Availability & Class Check</title>
    <meta name="description" content="CA-assisted trademark search report in Pune. Clearance search across 45 classes before filing. Serving Hinjewadi, Kharadi, Chakan MIDC. Call +91 945 945 6700.">
    <link rel="canonical" href="/trademark-search-report/pune">
    <meta name="robots" content="index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1">
    <meta property="og:title" content="Trademark Search in Pune - Availability & Class Check">
    <meta property="og:description" content="CA-assisted trademark search report in Pune. Clearance search across 45 classes before filing. Serving Hinjewadi, Kharadi, Chakan MIDC. Call +91 945 945 6700.">
    <meta property="og:url" content="/trademark-search-report/pune">
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="Patron Accounting">
    <meta property="og:image" content="https://www.patronaccounting.com/images/og-default-square.png">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="1200">
    <meta property="og:image:type" content="image/png">
    <meta property="og:image:secure_url" content="https://www.patronaccounting.com/images/og-default-square.png">
    <meta property="og:image:alt" content="Patron Accounting - partner you can rely on">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Trademark Search in Pune - Availability & Class Check">
    <meta name="twitter:description" content="CA-assisted trademark search report in Pune. Clearance search across 45 classes before filing. Serving Hinjewadi, Kharadi, Chakan MIDC. Call +91 945 945 6700.">
    <meta name="twitter:image" content="https://www.patronaccounting.com/images/og-default-square.png">
@endsection

@section('schema')
    <script type="application/ld+json">{
  "@context": "https://schema.org",
  "@graph": [
    {
      "@type": "Service",
      "name": "Trademark Search Report in Pune",
      "description": "CA-assisted trademark search report in Pune. Clearance search across 45 classes before filing. Serving Hinjewadi, Kharadi, Chakan MIDC. Call +91 945 945 6700.",
      "url": "https://www.patronaccounting.com/trademark-search-report/pune",
      "serviceType": "Trademark Search Report in Pune",
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
        "url": "https://www.patronaccounting.com/trademark-search-report/pune",
        "priceSpecification": {
          "@type": "PriceSpecification",
          "minPrice": "1500",
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
          "name": "Trademark Search Report: Process and Cost",
          "item": "https://www.patronaccounting.com/trademark-search-report"
        },
        {
          "@type": "ListItem",
          "position": 3,
          "name": "Trademark Search Report in Pune",
          "item": "https://www.patronaccounting.com/trademark-search-report/pune"
        }
      ]
    },
    {
      "@type": "FAQPage",
      "mainEntity": [
        {
          "@type": "Question",
          "name": "How to do a trademark search in Pune?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "You can conduct a basic search for free at tmrsearch.ipindia.gov.in. Enter your proposed brand name, select the relevant Nice Classification class, and review the results. For a comprehensive search covering phonetic similarities, device marks, and multi-class conflicts, Patron's Pune office at RTC Silver, Wagholi provides professional trademark search reports with legal risk assessment."
          }
        },
        {
          "@type": "Question",
          "name": "Is trademark search free in India?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Yes, the basic public search on tmrsearch.ipindia.gov.in is completely free. There is no government fee for using the public search tool. However, a certified search report from the Trade Marks Registry requires Form TM-60 with Rs 5,000 government fee. Professional search reports from consultants typically cost Rs 1,500 to Rs 5,000."
          }
        },
        {
          "@type": "Question",
          "name": "How much does a trademark search report cost in Pune?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "A professional search report costs between Rs 1,500 and Rs 8,000 depending on scope. Single-class wordmark search starts at Rs 1,500. Multi-class clearance with phonetic and device mark analysis costs Rs 4,000 to Rs 8,000. The certified search via Form TM-60 carries an additional government fee of Rs 5,000. Patron offers fixed-price packages."
          }
        },
        {
          "@type": "Question",
          "name": "What happens if I file without a trademark search?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Filing without a prior search significantly increases the risk of Examiner objection under Section 11 of the Trade Marks Act, 1999. If the Examiner at the Trade Marks Registry, Mumbai finds a similar existing mark, your application will be objected to - requiring a formal response, potential hearing, and 6-18 months of additional processing. A Rs 1,500 search prevents Rs 10,000+ in objection costs."
          }
        },
        {
          "@type": "Question",
          "name": "Which trademark database covers Pune registrations?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "All trademark registrations in India - including those filed from Pune - are maintained in a single national database accessible at tmrsearch.ipindia.gov.in. The database is administered by the CGPDTM and covers all five regional Trade Marks Registry offices including Mumbai which handles Pune and Maharashtra. There is no separate Pune database."
          }
        },
        {
          "@type": "Question",
          "name": "Can I search for a trademark in Marathi or Hindi?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "The IP India public search tool primarily supports English-language wordmark searches. For Marathi or Hindi brand names, search using English transliteration and phonetic variations. Patron's Pune team includes Marathi and Hindi phonetic analysis in every professional search report - critical for Pune businesses operating in multilingual markets. Quick Answers Trademark search Pune mein kaise karte hain? tmrsearch.ipindia.gov.in par jaake apna brand name daalo aur class select karo. Free hai. Professional report ke liye Patron ko call karo. Kya trademark search zaroori hai? Haan - bina search ke filing karne par objection aane ka bahut zyada risk hai. Rs 1,500 ka search Rs 10,000+ ka objection handling bacha sakta hai. Kitne din mein search report milta hai? Professional report 2-5 working days mein milta hai. Basic public search turant kar sakte ho online."
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
                        Trademark Search Report in Pune: Clear Your Brand Before You File
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
                            <p class="mb-0 text-dark benefit-paragraph"><span>Documents:</span> Proposed brand name/logo, goods/services description, Nice Classification class(es)</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Fees:</span> Free public search at tmrsearch.ipindia.gov.in | Professional report Rs 1,500 - Rs 5,000</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Eligibility:</span> Any person or entity planning to file a trademark application</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Timeline:</span> Professional search report delivered within 2-5 working days</p>
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
                        <a href="https://wa.me/919459456700?text=Hello%2C%20I%20just%20visited%20your%20Trademark%20Search%20Report%20in%20Pune%20page.%20I%20would%20like%20to%20know%20more%20about%20it." target="_blank" class="btn-sample text-decoration-none" rel="noopener">
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
                                            'service'  => 'Trademark Search Report in Pune',
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
    'ctaText'    => 'Get expert trademark search and clearance for your Pune business today.',
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
            <a href="#overview-section" class="toc-btn active">Overview</a><a href="#what-section" class="toc-btn">What Is Search Report</a><a href="#who-section" class="toc-btn">Who Needs It</a><a href="#services-section" class="toc-btn">Services</a><a href="#procedure-section" class="toc-btn">Process</a><a href="#documents-section" class="toc-btn">Information</a><a href="#challenges-section" class="toc-btn">Challenges</a><a href="#fees-section" class="toc-btn">Fees</a><a href="#timeline-section" class="toc-btn">Timeline</a><a href="#benefits-section" class="toc-btn">Why Patron</a><a href="#comparison-section" class="toc-btn">Free vs Pro</a><a href="#faq-section" class="toc-btn">FAQs</a>
        </div>
        <button class="toc-arrow right" id="tocRight">&#10095;</button>
    </div>
</div>

<!-- SECTION 2: OVERVIEW / INTRO + TL;DR -->
<section class="content-section" id="overview-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Trademark Search Report in Pune - Overview</h2>
            <div class="content-text">
                <div class="highlight-box" style="margin-bottom:20px;">
                    <p><strong>&#128204; TL;DR - Trademark Search Report in Pune Services at a Glance</strong></p>
                    <p>A trademark search report is a pre-filing clearance document that analyses existing registered and pending trademarks to assess whether a proposed brand name, logo, or slogan is available for registration. The search is conducted across the official IP India database (tmrsearch.ipindia.gov.in) covering all 45 Nice Classification classes. For Pune businesses, the search scope includes marks registered under the Trade Marks Registry, Mumbai jurisdiction.</p>
                </div>
                <p>Pune's commercial ecosystem - spanning over 7,000 IT companies in the Hinjewadi-Kharadi corridor, the Chakan-Talegaon manufacturing belt, and a fast-expanding D2C startup hub in Baner and Koregaon Park - generates hundreds of new trademark applications every month. Many face objections because the proposed mark conflicts with an existing registration. A professional trademark search report before filing eliminates this risk. Learn more about <a href="/trademark-search-report">Trademark Search Report services across India</a>.</p>
                <p>The Trade Marks Registry, Mumbai, which has jurisdiction over all Pune and Maharashtra filings under the CGPDTM, maintains the database against which all searches are conducted via <a href="https://tmrsearch.ipindia.gov.in" target="_blank" rel="noopener">tmrsearch.ipindia.gov.in</a>. Whether you are a Hinjewadi SaaS startup clearing a software brand across Classes 9, 35, and 42, or a Chakan manufacturer verifying a product name, the search report is the first and most cost-effective step. After clearance, proceed to <a href="/trademark-registration/pune">Trademark Registration in Pune</a>.</p>
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
                <h2 class="section-title">What Is a Trademark Search Report?</h2>
                <div class="content-text what-is-definition">
                    
                    <p>A trademark search report is a pre-filing analysis document that identifies existing registered and pending trademarks that may conflict with a proposed mark, based on visual, phonetic, and conceptual similarity across relevant Nice Classification classes in the IP India database.</p><p>The search uses the official public tool at tmrsearch.ipindia.gov.in, maintained by the CGPDTM. It allows searches by wordmark, phonetic equivalent, Vienna Code (for device marks), applicant name, and registration number. A professional report goes beyond basic search by applying legal analysis: assessing the degree of similarity, evaluating likelihood of confusion under Sections 9 and 11 of the Trade Marks Act, 1999, and mapping conflicts across related classes.</p><p>For Pune businesses, the search report serves a critical pre-investment function. IT companies at Hinjewadi need confirmation that a proposed name is clear before investing in brand development. MIDC Bhosari manufacturers require class-specific clearance to avoid post-filing objections from the Examiner at the Trade Marks Registry, Mumbai. A Rs 1,500 - Rs 5,000 search can prevent Rs 50,000+ in objection handling, <a href="/trademark-opposition/pune">opposition costs</a>, and rebranding expenses.</p>

                </div>
                <div class="highlight-box" style="margin-top:20px;">
                    <p><strong>Key Terms for Trademark Search Report in Pune:</strong></p>
                    <ul><li><strong>tmrsearch.ipindia.gov.in:</strong> Official IP India public search portal for trademark availability searches</li><li><strong>Nice Classification:</strong> International system with 45 classes (34 goods + 11 services) for trademark registration</li><li><strong>Form TM-60:</strong> Official certified search request form with Rs 5,000 government fee</li><li><strong>Vienna Code:</strong> Classification for figurative elements used in device mark/logo searches</li><li><strong>Section 11:</strong> Relative grounds for refusal - similarity with existing marks causing confusion</li><li><strong>Phonetic Search:</strong> Methodology identifying aurally similar marks despite visual differences</li></ul>

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
                            <!-- TM-S tag -->
                            <rect x="30" y="120" width="42" height="18" rx="4" fill="#FFF3E0" stroke="#F5A623" stroke-width="1"/>
                            <text x="51" y="132.5" font-size="8" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial, sans-serif">TM-S</text>
                            <!-- Label -->
                            <text x="100" y="170" font-size="10" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial, sans-serif">Trademark Search Report in Pune</text>
                        </svg>
                    </div>
                    <div class="illustration-badge">
                        <span>45 Classes</span>
                        <strong>IP India Database</strong>
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
            <h2 class="section-title">Who Needs a Trademark Search Report in Pune?</h2>
            <div class="content-text">
                
                <p><strong>IT and SaaS Startups at Hinjewadi and Kharadi</strong> launching software products require multi-class clearance. A SaaS brand typically needs Classes 9, 35, and 42. A name clear in Class 9 may be blocked in Class 42. The search report maps all conflicts before the per-class application fee is paid.</p><p><strong>D2C and E-Commerce Brands at Baner and Koregaon Park</strong> creating consumer brands need phonetic and visual similarity analysis. In Pune's competitive D2C market, short brand names are often linguistically similar to existing marks.</p><p><strong>MIDC Bhosari and Chakan Manufacturers</strong> introducing new product trademarks for auto components, FMCG or industrial goods need class-specific search reports. Goods classes (1-34) have a large number of existing registrations.</p><p><strong>Businesses Acquiring or Licensing Trademarks</strong> in Pune need due diligence search reports to verify registration status before investment. Critical for franchise operations and brand acquisitions. See also <a href="/private-limited-company-registration/pune">Pvt Ltd Registration in Pune</a> and <a href="#">MSME Registration</a>.</p>

            </div>
            </div>
        </div>
    </div>
</section>

<!-- SECTION 5: OUR SERVICES -->
<section class="content-section" id="services-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Services Included in Trademark Search Report in Pune</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Service</th><th>What We Do</th></tr></thead>
                    <tbody>
                        <tr><td>Wordmark Search</td><td>Exact and similar match search of the proposed brand name across specified Nice Classification classes using the IP India database. Identifies identical and visually similar registered and pending marks.</td></tr><tr><td>Phonetic Similarity Search</td><td>Analysis of phonetic equivalents to catch aurally similar marks. Particularly important for Pune D2C brands with Hindi, Marathi, and English language names where phonetic overlap is common.</td></tr><tr><td>Device Mark / Logo Search</td><td>Vienna Code-based search for proposed logos. Matches graphical elements against existing registered logos in the IP India database.</td></tr><tr><td>Multi-Class Clearance</td><td>Coordinated search across multiple Nice Classification classes for Hinjewadi IT companies and multi-product businesses. Each class searched independently and cross-referenced.</td></tr><tr><td>Conflict Risk Analysis</td><td>Legal assessment of identified similar marks, evaluating likelihood of Examiner objection under Section 11 (relative grounds) or Section 9 (absolute grounds) of the Trade Marks Act, 1999.</td></tr><tr><td>Certified Search (Form TM-60)</td><td>Official search request filed with the Trade Marks Registry for certified report and certificate. Government fee Rs 5,000. Related: <a href="/trademark-registration/pune">Trademark Registration in Pune</a>.</td></tr>

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
            <h2 class="section-title">Trademark Search Report Process in Pune</h2>
            <p class="section-subtitle" style="text-align:left;max-width:100%;">Our Pune team delivers professional trademark search reports - from class identification to risk assessment and filing recommendation.</p>
        </header>
        <div class="steps-container">
            <div class="step-card"><div class="step-content"><span class="step-badge">Step 1</span><h3 class="step-title">Define the Proposed Mark and Target Classes</h3><p class="step-description">Identify the exact brand name, logo, or slogan. Determine relevant Nice Classification classes. For Pune IT companies at Hinjewadi, typically Classes 9, 35 and 42. For Chakan manufacturers, relevant goods classes (1-34). Patron's Pune team provides class selection guidance based on your business model.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Mark defined</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Classes identified</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="15" y="5" width="90" height="70" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><rect x="25" y="15" width="40" height="8" rx="3" fill="#F5A623" opacity="0.3"/><line x1="25" y1="32" x2="85" y2="32" stroke="#14365F" stroke-width="1" opacity="0.2"/><line x1="25" y1="42" x2="75" y2="42" stroke="#14365F" stroke-width="1" opacity="0.2"/><text x="60" y="62" font-size="8" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">45 Classes</text></svg></div><span class="illustration-label">Defined</span><span class="step-number-large">01</span></div></div></div>
<div class="step-card"><div class="step-content"><span class="step-badge">Step 2</span><h3 class="step-title">Conduct Wordmark Search on IP India Database</h3><p class="step-description">Search the proposed mark on tmrsearch.ipindia.gov.in. The tool returns exact and similar matches across all 45 classes. Patron runs multiple variations including truncated searches, common misspellings, and prefix/suffix variations covering all marks registered under the Trade Marks Registry, Mumbai jurisdiction.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Database searched</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Variations checked</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="20" y="10" width="80" height="55" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><circle cx="60" cy="30" r="12" fill="#FFF3E0" stroke="#F5A623" stroke-width="1.5"/><text x="60" y="34" font-size="6" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">WORD</text><rect x="30" y="50" width="60" height="8" rx="4" fill="#E8712C" opacity="0.3"/></svg></div><span class="illustration-label">Searched</span><span class="step-number-large">02</span></div></div></div>
<div class="step-card"><div class="step-content"><span class="step-badge">Step 3</span><h3 class="step-title">Run Phonetic and Conceptual Similarity Analysis</h3><p class="step-description">Beyond exact matches, analyse phonetically similar marks that may cause confusion. Critical for Pune's multilingual market where Marathi, Hindi and English names overlap. The Trade Marks Registry, Mumbai Examiners regularly cite phonetic similarity under Section 11. Patron includes Soundex-based phonetic matching and manual IP professional review.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Phonetic matches found</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Marathi/Hindi covered</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="20" y="8" width="80" height="60" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><text x="60" y="28" font-size="7" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">ABC</text><text x="60" y="45" font-size="7" fill="#E8712C" font-weight="700" text-anchor="middle" font-family="Arial">~ABD</text><text x="60" y="80" font-size="6" fill="#14365F" font-weight="600" text-anchor="middle" font-family="Arial">Phonetic Match</text></svg></div><span class="illustration-label">Phonetics Done</span><span class="step-number-large">03</span></div></div></div>
<div class="step-card"><div class="step-content"><span class="step-badge">Step 4</span><h3 class="step-title">Search Device Marks Using Vienna Code</h3><p class="step-description">For logo-based trademarks, conduct Vienna Code search to identify visually similar device marks. The Vienna Classification categorises graphical elements into searchable codes. MIDC Bhosari manufacturers and D2C brands in Baner with distinctive logos benefit from this search layer.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Vienna Code searched</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Logo conflicts checked</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="25" y="10" width="70" height="55" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><circle cx="50" cy="32" r="12" fill="#FFF3E0" stroke="#F5A623" stroke-width="1.5"/><circle cx="70" cy="32" r="12" fill="#FFF3E0" stroke="#F5A623" stroke-width="1.5"/><text x="60" y="60" font-size="7" fill="#14365F" font-weight="600" text-anchor="middle" font-family="Arial">Vienna Code</text></svg></div><span class="illustration-label">Logos Checked</span><span class="step-number-large">04</span></div></div></div>
<div class="step-card"><div class="step-content"><span class="step-badge">Step 5</span><h3 class="step-title">Prepare Conflict Risk Assessment and Search Report</h3><p class="step-description">Compile all results into a structured report: exact matches, phonetic matches, device mark matches and overall risk assessment. Each conflict rated High/Medium/Low based on similarity degree, class overlap and registration status. Clear recommendation: proceed, modify, or select alternative. Delivered within 2-5 working days.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Report compiled</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Risk ratings assigned</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="20" y="10" width="80" height="55" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><rect x="30" y="20" width="15" height="35" rx="2" fill="#E8712C" opacity="0.7"/><rect x="52" y="30" width="15" height="25" rx="2" fill="#F5A623" opacity="0.5"/><rect x="75" y="40" width="15" height="15" rx="2" fill="#25D366" opacity="0.5"/><text x="37" y="68" font-size="5" fill="#14365F" font-weight="600" text-anchor="middle" font-family="Arial">HIGH</text><text x="60" y="68" font-size="5" fill="#14365F" font-weight="600" text-anchor="middle" font-family="Arial">MED</text><text x="82" y="68" font-size="5" fill="#14365F" font-weight="600" text-anchor="middle" font-family="Arial">LOW</text></svg></div><span class="illustration-label">Report Ready</span><span class="step-number-large">05</span></div></div></div>
<div class="step-card"><div class="step-content"><span class="step-badge">Step 6</span><h3 class="step-title">Review Report and Proceed to Filing or Re-Strategy</h3><p class="step-description">Review findings. If clear, proceed to filing Form TM-A with Trade Marks Registry, Mumbai (Rs 4,500-9,000 per class via ipindia.gov.in). If conflicts found, Patron advises on alternative names, class adjustments or design modifications. For Hinjewadi IT companies filing in multiple classes, a class-by-class strategy is developed.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Filing decision made</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Strategy confirmed</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="25" y="10" width="70" height="50" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><circle cx="60" cy="30" r="12" fill="#E8F5E9" stroke="#25D366" stroke-width="2"/><path d="M55 30l4 4 8-8" stroke="#25D366" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"/><text x="60" y="78" font-size="7" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">File or Modify</text></svg></div><span class="illustration-label">Action Taken</span><span class="step-number-large">06</span></div></div></div>


        </div>
    </div>
</section>

<!-- SECTION 8: DOCUMENTS REQUIRED -->
<section class="content-section" id="documents-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Information Required for Trademark Search in Pune</h2>
            <div class="content-text">
                
                <ul><li><strong>Proposed Brand Name / Wordmark:</strong> The exact word(s) you wish to trademark. Include all variations (abbreviations, acronyms, transliterations).</li><li><strong>Logo / Device Mark (If Applicable):</strong> High-resolution image of the proposed logo for Vienna Code-based device mark search.</li><li><strong>Goods / Services Description:</strong> Detailed description determining the correct Nice Classification class(es).</li><li><strong>Nice Classification Class(es):</strong> The specific class(es) for filing. Patron assists with class identification if unsure.</li><li><strong>Applicant Details:</strong> Name and entity type (individual, partnership, LLP, company) - determines government filing fee tier.</li></ul><div class="highlight-box" style="margin-top:16px;"><p><strong>Pune-specific tip:</strong> D2C brands should provide Hindi and Marathi transliterations of their brand name for comprehensive phonetic search coverage. Hinjewadi IT companies filing in multiple classes should list all intended classes upfront for coordinated multi-class clearance.</p></div>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 9: CHALLENGES -->
<section class="content-section" id="challenges-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Common Challenges in Trademark Search in Pune</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Challenge</th><th>Impact</th><th>How Patron Accounting Solves It</th></tr></thead>
                    <tbody>
                        <tr><td>Over-Reliance on Free Public Search</td><td>Pune startups run quick checks and miss phonetic similarities, conceptual overlaps and related-class conflicts</td><td>Patron provides professional reports catching conflicts the basic tool misses</td></tr><tr><td>Multi-Class Conflicts for IT Companies</td><td>Hinjewadi SaaS companies clear Class 42 but face conflicts in Class 9 or 35</td><td>Patron runs coordinated cross-class clearance with independent analysis per class</td></tr><tr><td>Marathi/Hindi Phonetic Similarity</td><td>Multilingual brand names create phonetic twins that trigger Examiner objections</td><td>Patron includes language-aware phonetic analysis in every search report</td></tr><tr><td>Dormant Marks Blocking Applications</td><td>MIDC manufacturers discover unused registered marks blocking their applications</td><td>Patron flags dormant marks and advises on rectification strategy under Section 47</td></tr>

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
            <h2 class="section-title">Trademark Search Report Fees in Pune</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Fee Component</th><th>Amount</th></tr></thead>
                    <tbody>
                        <tr><td>Public Search (tmrsearch.ipindia.gov.in)</td><td>Free (self-service)</td></tr><tr><td>Professional Wordmark Search (1 class)</td><td>Patron Rs 1,500 - Rs 2,500</td></tr><tr><td>Professional Multi-Class Search (3+ classes)</td><td>Patron Rs 3,000 - Rs 5,000</td></tr><tr><td>Phonetic + Conceptual Search (add-on)</td><td>Patron Rs 1,000 - Rs 2,000</td></tr><tr><td>Device Mark / Logo Search (Vienna Code)</td><td>Patron Rs 1,500 - Rs 3,000</td></tr><tr><td>Certified Search (Form TM-60)</td><td>Rs 5,000 govt fee + Patron Rs 2,000 - Rs 3,000</td></tr><tr><td>Comprehensive Clearance Report</td><td>Patron Rs 4,000 - Rs 8,000</td></tr>

                    </tbody>
                </table>
                </div>
                <p style="margin-top:16px;font-size:13px;color:var(--text-muted);font-style:italic;">All fees and charges listed are indicative only and do not constitute a binding offer. Final amounts may vary depending on the volume of work and the complexity involved.</p>
                <p style="margin-top:16px;">Professional service charges for drafting, filing, and representation are separate from the statutory fees. The exact fee depends on the complexity of the case, disputed amount, and number of hearings required. Contact us for a detailed quote.</p>
                <p style="margin-top:16px;"><strong>Get a free Trademark Search Report in Pune consultation - <a href="tel:+919459456700">Call +91 945 945 6700</a> or <a href="https://wa.me/919459456700?text=Hello%2C%20I%20just%20visited%20your%20Trademark%20Search%20Report%20in%20Pune%20page.%20I%20would%20like%20to%20know%20more%20about%20it." target="_blank" rel="noopener">WhatsApp us</a>. No-obligation assessment.</strong></p>
            </div>
        </div>
    </div>
</section>

<!-- SECTION 11: TIMELINE -->
<section class="content-section" id="timeline-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Trademark Search Report Timeline in Pune</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Stage</th><th>Estimated Timeline</th></tr></thead>
                    <tbody>
                        <tr><td>Basic Wordmark Search</td><td>Same day</td></tr><tr><td>Professional Search Report (1 class)</td><td>2-3 working days</td></tr><tr><td>Multi-Class Clearance Report</td><td>3-5 working days</td></tr><tr><td>Certified Search (Form TM-60)</td><td>15-30 days (Registry processing)</td></tr><tr><td>Proceed to Filing (if clear)</td><td>Same day as report delivery</td></tr>

                    </tbody>
                </table>
                </div>
                <div class="highlight-box" style="margin-top:16px;">
                    
                    <p><strong>Pune Processing Note:</strong> No visit to the Trade Marks Registry, Mumbai is required - Patron's Pune office at RTC Silver, Wagholi handles all trademark search and filing services online. Walk-in consultations available for class selection guidance and report review.</p>

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
            <h2 class="section-title">Why Choose Patron for Trademark Search Report in Pune?</h2>
        </div>
        <div class="features-grid"><article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><h3 class="feature-title">Pune Office Presence</h3><p class="feature-text">Walk-in at RTC Silver, Wagholi. 30 minutes from Hinjewadi, Kharadi, Chakan and MIDC Bhosari. Face-to-face class selection and report review.</p></article><article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><h3 class="feature-title">Multi-Class Search Expertise</h3><p class="feature-text">Coordinated clearance across multiple Nice classes for Hinjewadi IT companies and multi-product businesses. Not a database dump - a legal risk assessment.</p></article><article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M7 8h10M7 12h4m1 8l-4-4H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-3l-4 4z"/></svg></div><h3 class="feature-title">Phonetic + Language-Aware</h3><p class="feature-text">Marathi, Hindi and English phonetic analysis included. Critical for Pune's multilingual business market where phonetic twins create hidden objection risk.</p></article><article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M13 2L3 14h9l-1 8 10-12h-9l1-8z"/></svg></div><h3 class="feature-title">End-to-End Service</h3><p class="feature-text">Search report followed by same-day filing at TM Registry, Mumbai if the mark is clear. No handoff delays. One team from search to registration.</p></article></div>
    </div>
</section>

<!-- SECTION 12A: SOCIAL PROOF -->
<section class="content-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Trusted by 10,000+ Businesses Across India</h2>
            <div class="content-text">
                
                <p><strong>10,000+ Businesses | 4.9 Google Rating | 50,000+ Docs Filed | 15+ Years</strong></p><blockquote style="border-left:3px solid var(--orange);padding-left:16px;margin:16px 0;font-style:italic;color:var(--text-secondary);">"Our trademark was filed and registered within the timeline Patron promised. No surprises." - Founder, D2C Brand, Bangalore</blockquote><p>With offices in Pune, Mumbai, Delhi and Gurugram, Patron serves businesses across India with local expertise and national reach.</p>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 13: SELF-FILING vs PROFESSIONAL COMPARISON -->
<section class="content-section" id="comparison-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Free Search vs Professional Search Report</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Factor</th><th>Free Public Search (DIY)</th><th>Professional Search Report</th></tr></thead>
                    <tbody>
                        <tr><td>Database</td><td>tmrsearch.ipindia.gov.in</td><td>Same database + expanded methodology</td></tr><tr><td>Phonetic Search</td><td>Not available</td><td>Included - catches aurally similar marks</td></tr><tr><td>Multi-Class</td><td>Manual; one class at a time</td><td>Coordinated cross-class analysis</td></tr><tr><td>Risk Assessment</td><td>None - raw results only</td><td>High/Medium/Low conflict rating</td></tr><tr><td>Legal Analysis</td><td>None</td><td>Section 9 and 11 assessment included</td></tr><tr><td>Cost</td><td>Free</td><td>Rs 1,500 - Rs 8,000 depending on scope</td></tr><tr><td>Time</td><td>Immediate (self-service)</td><td>2-5 working days</td></tr>

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
                
                <p>For Pune businesses needing related trademark and IP services:</p><ul><li><a href="/trademark-search-report">Trademark Search Report (India)</a> - National service</li><li><a href="/trademark-registration/pune">Trademark Registration in Pune</a> - File after clearance</li><li><a href="/trademark-opposition/pune">Trademark Opposition in Pune</a> - Challenge conflicting marks</li><li><a href="/trademark-hearing/pune">Trademark Hearing in Pune</a></li><li><a href="/trademark-registration">Trademark Registration (India)</a></li><li><a href="/trademark-infringement">Trademark Infringement</a></li></ul>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 15A: LEGAL FRAMEWORK -->
<section class="content-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Legal and Compliance Framework for Trademark Search</h2>
            <div class="content-text">
                
                <p><strong>Governing Act:</strong> Trade Marks Act, 1999 - Sections 9 (absolute grounds) and 11 (relative grounds) define the legal basis for assessing conflicts in search results.</p><p><strong>Rules:</strong> Trade Marks Rules, 2017 - Rule 22 provides for search and issuance of certificate.</p><p><strong>Official Portal:</strong> <a href="https://tmrsearch.ipindia.gov.in" target="_blank" rel="noopener">tmrsearch.ipindia.gov.in</a> - free public access for wordmark, phonetic and Vienna Code searches.</p><p><strong>Certified Search:</strong> Form TM-60 - official request to the Trade Marks Registry. Government fee Rs 5,000.</p><p><strong>Classification:</strong> Nice Classification (45 classes) - internationally adopted. Each class requires a separate search.</p><p><strong>Jurisdiction:</strong> Trade Marks Registry, Mumbai - Boudhik Sampada Bhawan, Antop Hill, Mumbai 400037. Administers the database and processes all Pune applications.</p><p><strong>Risk:</strong> Filing without search risks Examiner objection under Section 11, leading to 6-18 months delay and Rs 3,000-10,000 in handling costs.</p><p><strong>Maharashtra Context:</strong> Pune businesses with <a href="/shop-act-registration">Shop Act registration</a> can use it as supporting evidence of bona fide business intent when filing Form TM-A after clearance.</p>

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
                    <h2 class="faq-expanded__title">FAQs - Trademark Search Report in Pune</h2>
                    <p class="faq-expanded__lead">Find answers to the most common questions about trademark search reports in Pune.</p>
                    @include('partials.bigin-form', [
                        'variant'  => 'compact',
                        'service'  => 'Trademark Search Report in Pune',
                        'city'     => 'Pune',
                    ])
                </aside>
                <div class="faq-expanded__list">
                    <div class="faq-expanded__item" id="faq-1">
                        <h3 class="faq-expanded__q">How to do a trademark search in Pune?</h3>
                        <div class="faq-expanded__a"><p>You can conduct a basic search for free at tmrsearch.ipindia.gov.in. Enter your proposed brand name, select the relevant Nice Classification class, and review the results. For a comprehensive search covering phonetic similarities, device marks, and multi-class conflicts, Patron's Pune office at RTC Silver, Wagholi provides professional trademark search reports with legal risk assessment.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-2">
                        <h3 class="faq-expanded__q">Is trademark search free in India?</h3>
                        <div class="faq-expanded__a"><p>Yes, the basic public search on tmrsearch.ipindia.gov.in is completely free. There is no government fee for using the public search tool. However, a certified search report from the Trade Marks Registry requires Form TM-60 with Rs 5,000 government fee. Professional search reports from consultants typically cost Rs 1,500 to Rs 5,000.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-3">
                        <h3 class="faq-expanded__q">How much does a trademark search report cost in Pune?</h3>
                        <div class="faq-expanded__a"><p>A professional search report costs between Rs 1,500 and Rs 8,000 depending on scope. Single-class wordmark search starts at Rs 1,500. Multi-class clearance with phonetic and device mark analysis costs Rs 4,000 to Rs 8,000. The certified search via Form TM-60 carries an additional government fee of Rs 5,000. Patron offers fixed-price packages.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-4">
                        <h3 class="faq-expanded__q">What happens if I file without a trademark search?</h3>
                        <div class="faq-expanded__a"><p>Filing without a prior search significantly increases the risk of Examiner objection under Section 11 of the Trade Marks Act, 1999. If the Examiner at the Trade Marks Registry, Mumbai finds a similar existing mark, your application will be objected to - requiring a formal response, potential hearing, and 6-18 months of additional processing. A Rs 1,500 search prevents Rs 10,000+ in objection costs.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-5">
                        <h3 class="faq-expanded__q">Which trademark database covers Pune registrations?</h3>
                        <div class="faq-expanded__a"><p>All trademark registrations in India - including those filed from Pune - are maintained in a single national database accessible at tmrsearch.ipindia.gov.in. The database is administered by the CGPDTM and covers all five regional Trade Marks Registry offices including Mumbai which handles Pune and Maharashtra. There is no separate Pune database.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-6">
                        <h3 class="faq-expanded__q">Can I search for a trademark in Marathi or Hindi?</h3>
                        <div class="faq-expanded__a"><p>The IP India public search tool primarily supports English-language wordmark searches. For Marathi or Hindi brand names, search using English transliteration and phonetic variations. Patron's Pune team includes Marathi and Hindi phonetic analysis in every professional search report - critical for Pune businesses operating in multilingual markets.</p></div>
                    </div>
                </div>
            </div>


            <!-- Quick Answers -->
            <div class="highlight-box" style="margin-top:32px;">
                <p><strong>Quick Answers</strong></p>
                <p><strong>Trademark search Pune mein kaise karte hain?</strong> tmrsearch.ipindia.gov.in par jaake apna brand name daalo aur class select karo. Free hai. Professional report ke liye Patron ko call karo.</p><p><strong>Kya trademark search zaroori hai?</strong> Haan - bina search ke filing karne par objection aane ka bahut zyada risk hai. Rs 1,500 ka search Rs 10,000+ ka objection handling bacha sakta hai.</p><p><strong>Kitne din mein search report milta hai?</strong> Professional report 2-5 working days mein milta hai. Basic public search turant kar sakte ho online.</p>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 18: URGENCY CTA -->
<section class="content-section" style="background: var(--orange-lighter) !important; border-left: 4px solid var(--orange);">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Don't File Blind - Get Your Search Report First</h2>
            <div class="content-text">
                
                <p>Every day a Pune business delays filing its trademark is a day a competitor could file the same or similar mark. The search report is the fastest and most affordable way to verify availability. At Rs 1,500-5,000, it is a fraction of the cost of handling post-filing objections (Rs 3,000-10,000), opposition proceedings (Rs 10,000-50,000), or worst case - rebranding an established business.</p><p><strong>Get your search report - <a href="tel:+919459456700">Call +91 945 945 6700</a> or <a href="https://wa.me/919459456700?text=Hello%2C%20I%20just%20visited%20your%20Trademark%20Search%20Report%20in%20Pune%20page.%20I%20would%20like%20to%20know%20more%20about%20it." target="_blank" rel="noopener">WhatsApp us</a>. No-obligation consultation.</strong></p>

            </div>
        </div>
    </div>
</section>

<!-- CONCLUSION + CTA BLOCK (Dark) -->
<section class="content-section" style="background: var(--blue) !important;">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title" style="color:#FFFFFF !important;">Get Your Trademark Search Report in Pune Today</h2>
            <div class="content-text" style="text-align:left;">
                
                <p style="color:rgba(255,255,255,0.85);font-size:16px;line-height:1.7;">A trademark search report in Pune is the essential first step before filing any trademark application. Whether you are a Hinjewadi IT company clearing a software brand, a MIDC Bhosari manufacturer verifying a product name, or a Baner D2C startup checking phonetic availability, the search eliminates filing risk and saves time and money.</p><p style="color:rgba(255,255,255,0.85);font-size:16px;line-height:1.7;">Patron Accounting's Pune office at RTC Silver, Wagholi provides professional search reports with wordmark, phonetic, device mark and multi-class clearance - delivered within 2-5 working days with a clear risk assessment and filing recommendation.</p><p style="color:rgba(255,255,255,0.85);font-size:16px;line-height:1.7;">With 15+ years experience, 10,000+ businesses served and a 4.9 Google rating, Patron is a trusted firm for trademark search and IP services across Pune, Mumbai, Delhi and Gurugram.</p>

            </div>
            <div style="display:flex;gap:14px;flex-wrap:wrap;margin-top:24px;">
                <a href="tel:+919459456700" style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:var(--orange);color:#fff;border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#128222; Call +91 945 945 6700</a>
                <a href="https://wa.me/919459456700?text=Hello%2C%20I%20just%20visited%20your%20Trademark%20Search%20Report%20in%20Pune%20page.%20I%20would%20like%20to%20know%20more%20about%20it." target="_blank" style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:#25D366;color:#fff;border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;" rel="noopener">&#128172; WhatsApp Us</a>
                <a href="mailto:sales@patronaccounting.com?subject=Enquiry%20for%20Trademark%20Search%20Report%20in%20Pune&body=Hello%2C%20I%20just%20visited%20your%20Trademark%20Search%20Report%20in%20Pune%20page.%20I%20would%20like%20to%20know%20more%20about%20it.%0A%0AThank%20you." style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:transparent;color:#fff;border:2px solid rgba(255,255,255,0.3);border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#9993;&#65039; Email Us</a>
            </div>
            <p style="color:rgba(255,255,255,0.7);font-size:13px;margin-top:16px;">Book a Free Consultation - No Obligation.</p>
        </div>
    </div>
</section>

<!-- GSTAT STATE BENCH CITY PAGES (32 Pages) -->
<section class="content-section" style="padding:48px 32px;background:var(--gray-50);">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title" style="text-align:center;margin-bottom:12px;">Trademark Search Report Across India</h2>
            <p style="text-align:center;color:var(--text-muted);font-size:15px;margin-bottom:40px;">Expert trademark search report services in all major cities</p>
          
            <div class="pa-city-block" style="margin-bottom:40px;"><div class="pa-city-grid"><div class="pa-city-card" style="opacity:0.6;pointer-events:none;border:2px solid var(--orange);position:relative;"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Pune</div><div class="pa-card-sub">Maharashtra</div></div><span style="position:absolute;top:6px;right:8px;font-size:10px;color:var(--orange);font-weight:700;text-transform:uppercase;letter-spacing:0.5px;">You're here</span></div><a href="/trademark-search-report/mumbai" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Mumbai</div><div class="pa-card-sub">Maharashtra</div></div></a><a href="/trademark-search-report/delhi" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Delhi</div><div class="pa-card-sub">Delhi NCR</div></div></a><a href="/trademark-search-report/gurugram" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Gurugram</div><div class="pa-card-sub">Haryana</div></div></a><a href="#" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Bangalore</div><div class="pa-card-sub">Karnataka</div></div></a><a href="#" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Hyderabad</div><div class="pa-card-sub">Telangana</div></div></a><a href="#" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Chennai</div><div class="pa-card-sub">Tamil Nadu</div></div></a><a href="#" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Kolkata</div><div class="pa-card-sub">West Bengal</div></div></a></div></div><div class="pa-city-block"><div class="pa-block-title">Related Services in Pune</div><div class="pa-block-sub">End-to-end trademark and IP support in Pune</div><div class="pa-cross-grid"><a href="/trademark-registration/pune" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Trademark Registration</div><div class="pa-card-sub">Pune</div></div></a><a href="/trademark-opposition/pune" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Trademark Opposition</div><div class="pa-card-sub">Pune</div></div></a><a href="/trademark-hearing/pune" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Trademark Hearing</div><div class="pa-card-sub">Pune</div></div></a><a href="/gst-registration/pune" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">GST Registration</div><div class="pa-card-sub">Pune</div></div></a><a href="/private-limited-company-registration/pune" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Pvt Ltd Registration</div><div class="pa-card-sub">Pune</div></div></a><a href="/startup-registration/pune" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Startup Registration</div><div class="pa-card-sub">Pune</div></div></a></div></div>
        </div>
    </div>
</section>

<!-- CONTENT FRESHNESS FOOTER -->
<section class="content-section" style="padding:32px;">
    <div class="content-container">
        <div class="text-content" style="font-size:13px;color:var(--text-muted);">
            <p><strong>Content Created:</strong> 23 March 2026 &nbsp;|&nbsp; <strong>Last Updated:</strong> <span id="lastUpdatedFooter">23 March 2026</span> &nbsp;|&nbsp; <strong>Next Review:</strong> 23 March 2027 &nbsp;|&nbsp; <strong>Reviewed By:</strong> CA &amp; CS Team, Patron Accounting LLP</p>
            <p>This page is reviewed annually to reflect IP India portal updates, fee changes and Nice Classification revisions. Last review: March 2026. Next review: March 2027.</p>
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
