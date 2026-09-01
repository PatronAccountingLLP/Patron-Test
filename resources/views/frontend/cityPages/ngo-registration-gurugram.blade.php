

@extends('layouts.service-app')

<!-- External Dependencies (loaded by master layout in production) -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Barlow:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,400&family=DM+Sans:opsz,wght@9..40,400;9..40,500;9..40,600;9..40,700&display=swap" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

@section('meta')
    <title>NGO Registration Gurugram – Trust, Society &amp; Section 8</title>
    <meta name="description" content="CA-assisted NGO registration in Gurugram. Trust, society, Section 8 with 12A and 80G. Serving Cyber City, Udyog Vihar, Manesar businesses. Call +91 945 945 6700.">
    <link rel="canonical" href="/ngo-registration/gurugram">
    <meta name="robots" content="index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1">
    <meta property="og:title" content="NGO Registration Gurugram – Trust, Society &amp; Section 8">
    <meta property="og:description" content="CA-assisted NGO registration in Gurugram. Trust, society, Section 8 with 12A and 80G. Serving Cyber City, Udyog Vihar, Manesar businesses. Call +91 945 945 6700.">
    <meta property="og:url" content="/ngo-registration/gurugram">
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="Patron Accounting">
    <meta property="og:image" content="https://www.patronaccounting.com/images/og-default-square.png">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="1200">
    <meta property="og:image:type" content="image/png">
    <meta property="og:image:secure_url" content="https://www.patronaccounting.com/images/og-default-square.png">
    <meta property="og:image:alt" content="Patron Accounting - partner you can rely on">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="NGO Registration Gurugram – Trust, Society &amp; Section 8">
    <meta name="twitter:description" content="CA-assisted NGO registration in Gurugram. Trust, society, Section 8 with 12A and 80G. Serving Cyber City, Udyog Vihar, Manesar businesses. Call +91 945 945 6700.">
    <meta name="twitter:image" content="https://www.patronaccounting.com/images/og-default-square.png">
@endsection

@section('schema')
    <script type="application/ld+json">{
  "@context": "https://schema.org",
  "@graph": [
    {
      "@type": "Service",
      "name": "NGO Registration in Gurugram",
      "description": "CA-assisted NGO registration in Gurugram. Trust, society, Section 8 with 12A and 80G. Serving Cyber City, Udyog Vihar, Manesar businesses. Call +91 945 945 6700.",
      "url": "https://www.patronaccounting.com/ngo-registration/gurugram",
      "serviceType": "NGO Registration in Gurugram",
      "areaServed": {
        "@type": "City",
        "name": "Gurugram"
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
        "url": "https://www.patronaccounting.com/ngo-registration/gurugram",
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
          "name": "NGO Registration",
          "item": "https://www.patronaccounting.com/ngo-registration"
        },
        {
          "@type": "ListItem",
          "position": 3,
          "name": "NGO Registration in Gurugram",
          "item": "https://www.patronaccounting.com/ngo-registration/gurugram"
        }
      ]
    },
    {
      "@type": "FAQPage",
      "mainEntity": [
        {
          "@type": "Question",
          "name": "Which office handles NGO registration in Gurugram?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "For society registration, the District Registrar of Societies, Gurugram, under the Department of Industries and Commerce, Haryana. For trusts, the Sub-Registrar, Gurugram. Section 8 companies are registered with RoC Delhi."
          }
        },
        {
          "@type": "Question",
          "name": "Can I register an NGO online from Gurugram?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Yes. Society registration in Haryana is filed through haryanaindustries.gov.in. Section 8 is digital through mca.gov.in. Trust registration requires physical presence before the Sub-Registrar. 12A, 80G, Darpan, CSR-1 are all digital."
          }
        },
        {
          "@type": "Question",
          "name": "What is the NGO registration fee in Gurugram?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Government fees for society registration total Rs 300. Trust requires stamp duty per Haryana rates. Section 8 fees range Rs 500-5,000. Patron all-inclusive package starts from Rs 9,999 covering documentation, filing, and 12A/80G setup."
          }
        },
        {
          "@type": "Question",
          "name": "How long does NGO registration take in Gurugram?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Trust: 7-21 working days. Society under Haryana Societies Act 2012: 15-30 working days. Section 8 company: 30-45 working days including Regional Director licensing. Patron's Haryana expertise helps avoid revision delays."
          }
        },
        {
          "@type": "Question",
          "name": "What is the difference between trust and society registration in Haryana?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "A trust needs 2+ trustees under Indian Trusts Act 1882, registered with Sub-Registrar. A society needs 7+ members under Haryana Societies Act 2012, registered with District Registrar. Trusts suit family charities; societies suit community organisations."
          }
        },
        {
          "@type": "Question",
          "name": "Do I need separate 12A and 80G after NGO registration?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Yes. NGO registration gives legal identity. 12A under Section 12AB provides income tax exemption. 80G enables donor deductions. Both filed on incometax.gov.in, processed by PCIT(E) Delhi for Haryana NGOs. Patron bundles these."
          }
        },
        {
          "@type": "Question",
          "name": "What is the Haryana Societies Act 2012?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "The Haryana Registration and Regulation of Societies Act, 2012 (Act No. 1 of 2012) replaced the 1860 Act for all Haryana society registrations. Introduces model bye-laws under Section 25 and stricter governance. Filing under 1860 Act results in rejection."
          }
        },
        {
          "@type": "Question",
          "name": "Can a Gurugram NGO receive foreign donations?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Only with FCRA registration under the Foreign Contribution Regulation Act, 2010, filed with MHA. Requires 3 years of operation with audited accounts. Essential for Gurugram NGOs receiving international CSR funds."
          }
        }
      ]
    }
  ]
}</script>

@endsection

@include('partials.page-css', ['file' => 'css/site.css'])
<style>
/* Amount column  -  right-align only on tables with .table-amount class */
        .table-amount td:last-child { color: var(--text-secondary); font-size: 14px; font-weight: 500; }
/* ============================================
           EXPERT ATTRIBUTION BOX (E-E-A-T)  -  Plan 3.1
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
           TOC NAVIGATION  -  Plan 2.2
           ============================================ */
        .toc-section {
            background: var(--gray-50); border-bottom: 1px solid var(--gray-200);
            padding: 20px 0; position: sticky; top: 100px; z-index: 50;
        }
/* Process Evidence Screenshot  -  Plan 3.2 */
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
                        NGO Registration in Gurugram: Trust, Society and Section 8
                    </h1>

                    <div class="expert-attribution-box">
                        <span class="eab-check"><svg width="16" height="16" viewBox="0 0 24 24" fill="currentColor"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg></span>
                        <span class="eab-title">Reviewed by CA and CS Team, Patron Accounting LLP</span>
                        <span class="eab-meta">
                            <span>ICAI & ICSI Registered</span><span class="eab-sep">|</span>
                            <span>15+ Years Experience</span><span class="eab-sep">|</span>
                            <span>Last Updated: <span id="lastUpdated">15 April 2026</span></span>
                        </span>
                        <a href="#" class="eab-link">Verify Credentials &rarr;</a>
                    </div>

                    <div class="mb-4">
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Documents:</span> PAN, Aadhaar, trust deed or MOA, address proof of registered office in Gurugram</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Fees:</span> Government fees from Rs 300 (society) | Patron all-inclusive from Rs 7,999</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Eligibility:</span> Minimum 2 members (trust), 7 members (society), 2 directors (Section 8 company)</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Timeline:</span> 7 - 45 working days depending on registration type and document readiness</p>
                        </div>
                    </div>

                    <p class="mb-4 fw-bold" style="color: var(--blue); font-size: 15px;">Visit our Gurugram office or get started online - 10,000+ Businesses Served | 4.9 Google Rating</p>

                    <div class="hero-cta">
                        <a href="tel:+919459456700" class="btn-video text-decoration-none">
                            <span class="play-circle"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="width:14px;height:14px;color:#fff"><path d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/></svg></span>
                            Call +91 945 945 6700
                        </a>
                        <a href="mailto:sales@patronaccounting.com" class="btn-sample text-decoration-none">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="width:18px;height:18px;"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,12 2,6"/></svg>
                            Email Us
                        </a>
                        <a href="https://wa.me/919459456700?text=Hi%2C%20I%20need%20help%20with%20NGO%20registration%20in%20Gurugram.%20Please%20call%20me." target="_blank" class="btn-sample text-decoration-none">
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
                                            'service'  => 'NGO Registration',
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
            <a href="#overview-section" class="toc-btn active">Overview</a>
            <a href="#what-section" class="toc-btn">What Is NGO Registration</a>
            <a href="#who-section" class="toc-btn">Who Needs It</a>
            <a href="#services-section" class="toc-btn">Services Included</a>
            <a href="#procedure-section" class="toc-btn">Registration Process</a>
            <a href="#documents-section" class="toc-btn">Documents Required</a>
            <a href="#challenges-section" class="toc-btn">Challenges</a>
            <a href="#fees-section" class="toc-btn">Fees</a>
            <a href="#timeline-section" class="toc-btn">Timeline</a>
            <a href="#benefits-section" class="toc-btn">Why Patron</a>
            <a href="#comparison-section" class="toc-btn">Comparison</a>
            <a href="#faq-section" class="toc-btn">FAQs</a>
        </div>
        <button class="toc-arrow right" id="tocRight">&#10095;</button>
    </div>
</div>

<!-- SECTION 2: OVERVIEW / INTRO + TL;DR -->
<section class="content-section" id="overview-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">NGO Registration in Gurugram - Overview</h2>
            <div class="content-text">
                <div class="highlight-box" style="margin-bottom:20px;">
                    <p><strong>&#128204; TL;DR - NGO Registration Services at a Glance</strong></p>
                    <p>NGO registration is the legal process of establishing a non-profit entity as a trust, society, or Section 8 company under Indian law. Gurugram-based organisations working in education, welfare, healthcare, or environment must register to receive donations, claim tax exemptions under Section 12A, and access CSR funding from Fortune 500 companies in DLF Cyber City and Udyog Vihar.</p>
                </div>
                <p>Gurugram's corporate corridor - stretching from DLF Cyber City through Golf Course Road to Udyog Vihar - houses India's densest concentration of Fortune 500 and multinational headquarters. Under Section 135 of the Companies Act, 2013, companies with net worth exceeding Rs 500 crore, turnover above Rs 1,000 crore, or net profit over Rs 5 crore must spend 2% of average net profits on CSR activities. For NGOs targeting this funding pipeline, proper registration is the non-negotiable first step. Learn more about <a href="/ngo-registration">NGO Registration across India</a>.</p>
                <p>The District Registrar of Societies, Gurugram, operating under the Department of Industries and Commerce, Haryana, handles all society registrations. Trusts are registered with the Sub-Registrar, Gurugram, while Section 8 companies are filed with the Registrar of Companies, Delhi, which serves the entire state of Haryana. A critical distinction most Gurugram consultants miss: societies in Haryana must be registered under the Haryana Registration and Regulation of Societies Act, 2012 (Act No. 1 of 2012) - not under the national Societies Registration Act, 1860, which stands repealed in Haryana.</p>
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
                <h2 class="section-title">What Is NGO Registration?</h2>
                <div class="content-text what-is-definition">
                    
                    <p>NGO registration is the formal legal process of establishing a non-governmental organisation as a trust under the Indian Trusts Act, 1882, a society under the applicable state Societies Act, or a Section 8 company under Section 8(1) of the Companies Act, 2013, to carry out charitable, educational, religious, or social welfare activities with legal recognition and tax benefits.</p>
                    <p>Once registered, an NGO can open a dedicated bank account, accept domestic and international donations, apply for income tax exemption under Sections 12A and 12AB of the Income Tax Act, 1961, obtain 80G certification for donor tax deductions, and register on the NGO Darpan portal for government grants. The registration also enables FCRA clearance under the Foreign Contribution Regulation Act, 2010, for receiving foreign funding.</p>
                    <p>For Gurugram-based organisations, NGO registration unlocks access to CSR funding from the city's corporate ecosystem. MNCs in DLF Cyber City, BFSI firms on Golf Course Road, and manufacturing units in Manesar IMT all mandate registered NGO status with 12A and 80G certificates before disbursing CSR contributions. After registration, you may also need <a href="/section8-company-registration">Section 8 Company Registration</a> or <a href="/fcra-registration">FCRA Registration</a> depending on your funding sources. Patron Accounting's Gurugram office on Golf Course Extension Road handles the complete registration process for all three NGO structures.</p>

                </div>
                <div class="highlight-box" style="margin-top:20px;">
                    <p><strong>Key Terms for NGO Registration:</strong></p>
                    <p><strong>Trust</strong> - An arrangement where a settlor transfers property to trustees for the benefit of defined beneficiaries, governed by the Indian Trusts Act, 1882. Minimum 2 trustees required.</p>
                    <p><strong>Society</strong> - A member-driven organisation registered for charitable, educational, cultural, or social welfare purposes. In Haryana, governed by the Haryana Registration and Regulation of Societies Act, 2012 - not the national 1860 Act. Minimum 7 members.</p>
                    <p><strong>Section 8 Company</strong> - A non-profit incorporated under Section 8(1) of the Companies Act, 2013, with objects of promoting commerce, art, science, sports, education, research, social welfare, or charity. Minimum 2 directors and 2 shareholders.</p>
                    <p><strong>12A Registration</strong> - Income tax exemption registration under Sections 12A/12AB of the Income Tax Act, 1961. Filed via Form 10A (provisional, 3-year validity) or Form 10AB (regular/renewal).</p>
                    <p><strong>80G Certification</strong> - Registration enabling donors to claim tax deductions on donations made to the NGO under Section 80G of the Income Tax Act, 1961.</p>

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
                            <text x="100" y="170" font-size="10" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial, sans-serif">NGO Registration</text>
                        </svg>
                    </div>
                    <div class="illustration-badge">
                        <span>Haryana Act 2012</span>
                        <strong>NGO Registration</strong>
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
            <h2 class="section-title">Who Needs NGO Registration in Gurugram?</h2>
            <div class="content-text">
                
                <p>Gurugram's economic profile creates distinct categories of organisations requiring NGO registration. The IT and BPO sector in Cyber City and Udyog Vihar generates CSR-funded social initiatives targeting education, digital literacy, and skill development for nearby urban villages. BFSI firms on Golf Course Road and Sohna Road support financial literacy programmes and women's empowerment NGOs. Manufacturing units in Manesar IMT fund environmental conservation, worker welfare, and occupational health organisations.</p>
                <p>Startup founders and tech professionals in Gurugram increasingly establish <a href="/section8-company-registration">Section 8 companies</a> for social enterprises - blending commercial viability with charitable purpose. Educational trusts running schools, coaching centres, or vocational training institutes in Gurugram's residential sectors require trust or society registration for land acquisition, fee regulation compliance, and income tax exemption.</p>
                <p>Resident welfare associations in Gurugram's gated communities - DLF phases, Sushant Lok, South City, Nirvana Country - often register as societies under the Haryana Societies Act, 2012 for transparent management of maintenance funds and common area operations. Any organisation in Gurugram with annual income exceeding Rs 2.5 lakh from non-exempt sources must obtain 12A registration to avoid income tax on surplus applied towards charitable purposes under Sections 11 and 12 of the Income Tax Act, 1961.</p>

            </div>
            </div>
        </div>
    </div>
</section>

<!-- SECTION 5: OUR SERVICES -->
<section class="content-section" id="services-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Services Included in NGO Registration Package - Gurugram</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Service</th><th>What We Do</th></tr></thead>
                    <tbody>
                        <tr><td>Trust Registration</td><td>Drafting trust deed with objects aligned to Section 2(15), execution before Sub-Registrar Gurugram, PAN and TAN application for the trust entity</td></tr>
                        <tr><td>Society Registration (Haryana Act 2012)</td><td>Name approval, MOA and bye-laws conforming to model bye-laws under Section 25, online filing through haryanaindustries.gov.in, certificate from District Registrar Gurugram</td></tr>
                        <tr><td>Section 8 Company Incorporation</td><td>RUN name reservation on MCA portal, DSC and DIN for directors, MOA/AOA drafting, licence application to Regional Director (Northern Region), certificate from RoC Delhi</td></tr>
                        <tr><td>12A/12AB Registration</td><td>Form 10A for provisional (3-year validity) or Form 10AB for regular registration, filed on incometax.gov.in e-filing portal with PCIT(E) Delhi</td></tr>
                        <tr><td>80G Certification</td><td>Donor tax deduction registration filed alongside or after 12A, enabling CSR contributions from Gurugram corporates</td></tr>
                        <tr><td>NGO Darpan Registration</td><td>NITI Aayog portal registration generating unique ID for government grant applications and ministry empanelment</td></tr>
                        <tr><td>CSR-1 Form Filing</td><td>Registration on MCA CSR portal enabling the NGO to receive CSR funds from companies under Section 135 of the Companies Act, 2013</td></tr>
                        <tr><td>FCRA Registration</td><td>Foreign Contribution Regulation Act, 2010 registration for NGOs receiving donations from international donors, filed with MHA</td></tr>

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
            <h2 class="section-title">NGO Registration Process in Gurugram - 6 Steps</h2>
            <p class="section-subtitle" style="text-align:left;max-width:100%;">Patron handles the complete registration process from document drafting to post-registration compliance. No visit to the District Registrar or Sub-Registrar required - our Gurugram office on Golf Course Extension Road manages all filings on your behalf.</p>
        </header>
        <div class="steps-container">
            <div class="step-card">
    <div class="step-content">
        <span class="step-badge">Step 1</span>
        <h3 class="step-title">Choose Your NGO Structure</h3>
        <p class="step-description">Evaluate whether a trust, society, or Section 8 company best fits your objectives, member count, and governance requirements. For Gurugram organisations targeting CSR funding from Cyber City MNCs, a Section 8 company offers higher credibility. For community welfare groups, a society under the Haryana Societies Act, 2012 is the standard choice. Trusts are preferred for family-run charitable initiatives.</p>
        <div class="step-highlights">
            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Trust / Society / Section 8</span>
            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Expert Recommendation</span>
        </div>
    </div>
    <div class="step-visual">
        <div class="step-illustration">
            <div class="illustration-icon">
                <svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <rect x="10" y="15" width="40" height="55" rx="4" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/>
                    <rect x="40" y="25" width="40" height="55" rx="4" fill="#FFF3E0" stroke="#F5A623" stroke-width="1.5"/>
                    <rect x="70" y="15" width="40" height="55" rx="4" fill="#E8F5E9" stroke="#10B981" stroke-width="1.5"/>
                    <text x="30" y="48" font-size="8" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">Trust</text>
                    <text x="60" y="58" font-size="8" fill="#C05E10" font-weight="700" text-anchor="middle" font-family="Arial">Society</text>
                    <text x="90" y="48" font-size="8" fill="#1B7A3A" font-weight="700" text-anchor="middle" font-family="Arial">Sec 8</text>
                </svg>
            </div>
            <span class="illustration-label">Choose Structure</span>
            <span class="step-number-large">01</span>
        </div>
    </div>
</div>
<div class="step-card">
    <div class="step-content">
        <span class="step-badge">Step 2</span>
        <h3 class="step-title">Prepare Governing Documents</h3>
        <p class="step-description">Draft the trust deed (for trusts), MOA and bye-laws conforming to model bye-laws prescribed under Section 25 of the Haryana Societies Act 2012 (for societies), or MOA and AOA (for Section 8 companies). The District Registrar of Societies, Gurugram, specifically verifies model bye-laws conformity before granting registration.</p>
        <div class="step-highlights">
            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Model Bye-Laws Conformity</span>
            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Section 25 Compliance</span>
        </div>
    </div>
    <div class="step-visual">
        <div class="step-illustration">
            <div class="illustration-icon">
                <svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <rect x="20" y="10" width="80" height="65" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/>
                    <line x1="35" y1="28" x2="85" y2="28" stroke="#F5A623" stroke-width="3" stroke-linecap="round"/>
                    <line x1="35" y1="40" x2="75" y2="40" stroke="#14365F" stroke-width="2" stroke-linecap="round" opacity="0.3"/>
                    <line x1="35" y1="50" x2="70" y2="50" stroke="#14365F" stroke-width="2" stroke-linecap="round" opacity="0.3"/>
                    <line x1="35" y1="60" x2="65" y2="60" stroke="#14365F" stroke-width="2" stroke-linecap="round" opacity="0.3"/>
                    <circle cx="28" cy="28" r="5" fill="#E8F5E9" stroke="#10B981" stroke-width="1"/>
                    <path d="M26 28l2 2 3-3" stroke="#10B981" stroke-width="1.5" stroke-linecap="round"/>
                </svg>
            </div>
            <span class="illustration-label">Documents Ready</span>
            <span class="step-number-large">02</span>
        </div>
    </div>
</div>
<div class="step-card">
    <div class="step-content">
        <span class="step-badge">Step 3</span>
        <h3 class="step-title">Collect Member Documents and Office Proof</h3>
        <p class="step-description">Gather PAN, Aadhaar, and address proof for all founding members. Obtain proof of registered office in Gurugram - utility bill (not older than 2 months), rent agreement with NOC from landlord, or ownership documents. DSC and DIN are mandatory for Section 8 company directors, obtained from MCA portal.</p>
        <div class="step-highlights">
            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>KYC Documents</span>
            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Office Address Proof</span>
        </div>
    </div>
    <div class="step-visual">
        <div class="step-illustration">
            <div class="illustration-icon">
                <svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <rect x="15" y="20" width="50" height="35" rx="4" fill="#FFF3E0" stroke="#F5A623" stroke-width="1.5"/>
                    <circle cx="40" cy="32" r="8" fill="#F0F4F8" stroke="#14365F" stroke-width="1"/>
                    <line x1="25" y1="46" x2="55" y2="46" stroke="#14365F" stroke-width="1.5" opacity="0.3"/>
                    <rect x="55" y="30" width="50" height="35" rx="4" fill="#E8F5E9" stroke="#10B981" stroke-width="1.5"/>
                    <line x1="65" y1="42" x2="95" y2="42" stroke="#14365F" stroke-width="1.5" opacity="0.3"/>
                    <line x1="65" y1="50" x2="90" y2="50" stroke="#14365F" stroke-width="1.5" opacity="0.3"/>
                    <line x1="65" y1="58" x2="85" y2="58" stroke="#14365F" stroke-width="1.5" opacity="0.3"/>
                </svg>
            </div>
            <span class="illustration-label">KYC Compiled</span>
            <span class="step-number-large">03</span>
        </div>
    </div>
</div>
<div class="step-card">
    <div class="step-content">
        <span class="step-badge">Step 4</span>
        <h3 class="step-title">File Registration Application with Gurugram Authority</h3>
        <p class="step-description">For societies: submit name approval application followed by registration application on haryanaindustries.gov.in to the District Registrar of Societies, Gurugram. For trusts: present the executed trust deed before the Sub-Registrar, Gurugram, with stamp duty as per Haryana Stamp Act schedule. For Section 8: file INC-12 licence application with Regional Director and SPICe+ form with RoC Delhi.</p>
        <div class="step-highlights">
            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Online Portal Filing</span>
            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Authority Submission</span>
        </div>
    </div>
    <div class="step-visual">
        <div class="step-illustration">
            <div class="illustration-icon">
                <svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <rect x="20" y="15" width="80" height="55" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/>
                    <rect x="35" y="30" width="50" height="8" rx="3" fill="#FFF3E0" stroke="#F5A623" stroke-width="1"/>
                    <rect x="35" y="45" width="50" height="8" rx="3" fill="#E8F5E9" stroke="#10B981" stroke-width="1"/>
                    <path d="M55 72l5-5h8" stroke="#14365F" stroke-width="2" stroke-linecap="round"/>
                    <circle cx="70" cy="67" r="4" fill="#10B981" stroke="#fff" stroke-width="1"/>
                </svg>
            </div>
            <span class="illustration-label">Application Filed</span>
            <span class="step-number-large">04</span>
        </div>
    </div>
</div>
<div class="step-card">
    <div class="step-content">
        <span class="step-badge">Step 5</span>
        <h3 class="step-title">Obtain Registration Certificate and PAN/TAN</h3>
        <p class="step-description">The District Registrar issues the society registration certificate with a Haryana registration number (format: HR-YYYY-XXXXXXX). The Sub-Registrar returns the registered trust deed. RoC Delhi issues the certificate of incorporation for Section 8 companies. Apply for PAN and TAN for the newly registered entity through the NSDL portal.</p>
        <div class="step-highlights">
            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Certificate Issued</span>
            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>PAN/TAN Applied</span>
        </div>
    </div>
    <div class="step-visual">
        <div class="step-illustration">
            <div class="illustration-icon">
                <svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <rect x="25" y="15" width="70" height="55" rx="6" fill="#E8F5E9" stroke="#10B981" stroke-width="2"/>
                    <circle cx="60" cy="38" r="12" fill="#FFF3E0" stroke="#F5A623" stroke-width="1.5"/>
                    <path d="M55 38l4 4 7-7" stroke="#10B981" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"/>
                    <line x1="40" y1="58" x2="80" y2="58" stroke="#14365F" stroke-width="2" stroke-linecap="round" opacity="0.3"/>
                </svg>
            </div>
            <span class="illustration-label">Registered</span>
            <span class="step-number-large">05</span>
        </div>
    </div>
</div>
<div class="step-card">
    <div class="step-content">
        <span class="step-badge">Step 6</span>
        <h3 class="step-title">Complete Post-Registration Compliance Setup</h3>
        <p class="step-description">File Form 10A on incometax.gov.in for provisional 12A registration with PCIT(E) Delhi. Apply for 80G concurrently. Register on NGO Darpan (ngodarpan.gov.in) and file CSR-1 on MCA portal. Open a dedicated bank account with PAN and registration certificate. Patron's Gurugram office manages the complete post-registration compliance chain.</p>
        <div class="step-highlights">
            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>12A + 80G Filed</span>
            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>CSR Ready</span>
        </div>
    </div>
    <div class="step-visual">
        <div class="step-illustration">
            <div class="illustration-icon">
                <svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <rect x="15" y="20" width="90" height="50" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/>
                    <circle cx="35" cy="45" r="8" fill="#E8F5E9" stroke="#10B981" stroke-width="1.5"/>
                    <path d="M32 45l3 3 5-5" stroke="#10B981" stroke-width="2" stroke-linecap="round"/>
                    <circle cx="60" cy="45" r="8" fill="#E8F5E9" stroke="#10B981" stroke-width="1.5"/>
                    <path d="M57 45l3 3 5-5" stroke="#10B981" stroke-width="2" stroke-linecap="round"/>
                    <circle cx="85" cy="45" r="8" fill="#E8F5E9" stroke="#10B981" stroke-width="1.5"/>
                    <path d="M82 45l3 3 5-5" stroke="#10B981" stroke-width="2" stroke-linecap="round"/>
                    <text x="35" y="62" font-size="6" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">12A</text>
                    <text x="60" y="62" font-size="6" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">80G</text>
                    <text x="85" y="62" font-size="6" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">CSR-1</text>
                </svg>
            </div>
            <span class="illustration-label">Compliance Done</span>
            <span class="step-number-large">06</span>
        </div>
    </div>
</div>

        </div>
    </div>
</section>

<!-- SECTION 8: DOCUMENTS REQUIRED -->
<section class="content-section" id="documents-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Documents Required for NGO Registration in Gurugram</h2>
            <div class="content-text">
                
                <ul>
                    <li>PAN Card of all founding members - Mandatory for KYC verification by registering authority and for PAN application of the NGO entity</li>
                    <li>Aadhaar Card or Passport - Identity and address proof for all members. Passport mandatory for NRI or foreign national members</li>
                    <li>Trust Deed / MOA / AOA - Foundation document defining objects, governance, and membership rules. Trust deed on stamp paper per Haryana Stamp Act rates</li>
                    <li>Bye-laws conforming to model bye-laws - Mandatory for Haryana society registration under Section 25 of the Haryana Societies Act, 2012. District Registrar verifies conformity</li>
                    <li>Address proof of registered office in Gurugram - Electricity bill or water bill (not older than 2 months), rent agreement with NOC, or ownership documents</li>
                    <li>Passport-size photographs - Recent photographs of all founding members for registration application</li>
                    <li>NOC from landlord - If registered office is rented property. Notarised NOC preferred by District Registrar Gurugram</li>
                    <li>DSC and DIN - Digital Signature Certificate and Director Identification Number mandatory for Section 8 company directors only, obtained from MCA portal</li>
                </ul>
                <div class="highlight-box" style="margin-top:16px;">
                    <p><strong>Haryana-specific tip:</strong> For society registration in Gurugram, the District Registrar may request affidavits from all 7 founding members confirming residential address in Haryana. Keep notarised affidavits ready to avoid processing delays.</p>
                </div>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 9: CHALLENGES -->
<section class="content-section" id="challenges-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Common Challenges in NGO Registration in Gurugram</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Challenge</th><th>Impact</th><th>How Patron Accounting Solves It</th></tr></thead>
                    <tbody>
                        <tr><td>Filing under the wrong Societies Act</td><td>Application rejected by District Registrar. Delays of 4 - 8 weeks</td><td>Files under correct Haryana Registration and Regulation of Societies Act, 2012 (Act No. 1 of 2012) - not the repealed 1860 Act</td></tr>
                        <tr><td>Non-conformity with model bye-laws</td><td>Rejection or mandatory revision under Section 25 of Haryana Societies Act 2012</td><td>Drafts bye-laws conforming to model template from day one. No revision cycles</td></tr>
                        <tr><td>Trust deed objects not aligned with Section 2(15)</td><td>12A/80G rejection by PCIT(E) Delhi at post-registration stage</td><td>Drafts objects qualifying as charitable purpose under Section 2(15) of the IT Act - education, medical relief, environment, public utility</td></tr>
                        <tr><td>CSR funding eligibility confusion</td><td>NGO cannot receive CSR contributions despite registration</td><td>Completes full compliance chain: 12A + 80G + NGO Darpan + CSR-1 in one package</td></tr>
                        <tr><td>Section 8 licensing delays</td><td>Queries from Regional Director adding 15 - 30 days</td><td>Complete application preparation eliminates query cycles. Direct filing with RoC Delhi</td></tr>

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
            <h2 class="section-title">NGO Registration Fees in Gurugram 2026</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Fee Component</th><th>Amount</th></tr></thead>
                    <tbody>
                        <tr><td>Society Registration (Haryana Act 2012) - Govt Fee</td><td>Rs 300 (Rs 100 name + Rs 200 registration)</td></tr>
                        <tr><td>Trust Registration - Govt Fee</td><td>Stamp duty per Haryana Stamp Act schedule</td></tr>
                        <tr><td>Section 8 Company - MCA Fees</td><td>Rs 500 - Rs 5,000 (based on authorised capital)</td></tr>
                        <tr><td>12A Registration - Govt Fee</td><td>No government fee</td></tr>
                        <tr><td>80G Certification - Govt Fee</td><td>No government fee</td></tr>
                        <tr><td>NGO Darpan Registration</td><td>Free</td></tr>
                        <tr><td>CSR-1 Filing</td><td>No government fee</td></tr>
                        <tr><td>Patron Accounting Professional Fees (Society/Trust)</td><td>Starting from INR 9,999 (Exl GST and Govt. Charges)</td></tr>
                        <tr><td>Patron Accounting Professional Fees (Section 8)</td><td>Starting from INR 14,999 (Exl GST and Govt. Charges)</td></tr>

                    </tbody>
                </table>
                </div>
                <p style="margin-top:16px;font-size:13px;color:var(--text-muted);font-style:italic;">All fees and charges listed are indicative only and do not constitute a binding offer. Final amounts may vary depending on the volume of work and the complexity involved.</p>
                <p style="margin-top:16px;">Professional service charges for drafting, filing, and representation are separate from the statutory fees. The exact fee depends on the complexity of the case, disputed amount, and number of hearings required. Contact us for a detailed quote.</p>
                <p style="margin-top:16px;"><strong>Get a free NGO Registration consultation - <a href="tel:+919459456700">Call +91 945 945 6700</a> or <a href="https://wa.me/919459456700?text=Hi%2C%20I%20need%20help%20with%20NGO%20registration%20in%20Gurugram.%20Please%20call%20me." target="_blank">WhatsApp us</a>. No-obligation assessment.</strong></p>
            </div>
        </div>
    </div>
</section>

<!-- SECTION 11: TIMELINE -->
<section class="content-section" id="timeline-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">NGO Registration Timeline in Gurugram</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Stage</th><th>Estimated Timeline</th></tr></thead>
                    <tbody>
                        <tr><td>Document preparation and drafting</td><td>3 - 5 working days</td></tr>
                        <tr><td>Name approval (societies only)</td><td>3 - 7 working days</td></tr>
                        <tr><td>Registration application filing</td><td>1 - 2 working days</td></tr>
                        <tr><td>Authority processing and verification</td><td>7 - 30 working days</td></tr>
                        <tr><td>Certificate issuance</td><td>1 - 3 working days</td></tr>
                        <tr><td>Post-registration compliance (12A, 80G, Darpan, CSR-1)</td><td>15 - 30 working days</td></tr>

                    </tbody>
                </table>
                </div>
                <div class="highlight-box" style="margin-top:16px;">
                    
                    <p><strong>Fast-track tip:</strong> Society registrations filed correctly under the Haryana Act 2012 with model bye-laws conforming documentation are processed faster by the District Registrar, Gurugram. Patron's familiarity with Haryana-specific requirements eliminates revision cycles that typically add 2 - 4 weeks.</p>

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
            <h2 class="section-title">Why Choose Patron Accounting for NGO Registration in Gurugram?</h2>
        </div>
        <div class="features-grid">
            <article class="feature-card">
                <div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div>
                <h3 class="feature-title">Office Presence in Gurugram</h3>
                <p class="feature-text">Patron's office on Golf Course Extension Road serves Gurugram and the wider Haryana region. Walk-in consultations available for NGO founders from Cyber City, Udyog Vihar, Sohna Road, and Manesar.</p>
            </article>
            <article class="feature-card">
                <div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/></svg></div>
                <h3 class="feature-title">Haryana Societies Act 2012 Expertise</h3>
                <p class="feature-text">Patron's CA and CS team is experienced in the Haryana Registration and Regulation of Societies Act, 2012. Correct filing from day one - avoiding the common error of filing under the repealed 1860 Act.</p>
            </article>
            <article class="feature-card">
                <div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 14l9-5-9-5-9 5 9 5z"/><path d="M12 14l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14z"/></svg></div>
                <h3 class="feature-title">Jurisdictional Familiarity</h3>
                <p class="feature-text">Direct filing experience with the District Registrar of Societies, Gurugram, Sub-Registrar, Gurugram, and RoC Delhi. Patron's team knows the documentation expectations and processing timelines of each office.</p>
            </article>
            <article class="feature-card">
                <div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg></div>
                <h3 class="feature-title">End-to-End NGO Compliance Package</h3>
                <p class="feature-text">Registration is step one. Patron bundles 12A, 80G, NGO Darpan, CSR-1, FCRA, and annual compliance into a single engagement - the complete NGO lifecycle from incorporation to CSR readiness.</p>
            </article>
            <article class="feature-card">
                <div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M17 21v-2a4 4 0 00-4-4H5a4 4 0 00-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M23 21v-2a4 4 0 00-3-3.87M16 3.13a4 4 0 010 7.75"/></svg></div>
                <h3 class="feature-title">10,000+ Businesses Served</h3>
                <p class="feature-text">15+ years of registration and compliance experience. Offices in Pune, Mumbai, Delhi, and Gurugram. 4.9 Google rating. ISO certified processes across all service lines.</p>
            </article>
            <article class="feature-card">
                <div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="2" y="3" width="20" height="14" rx="2"/><path d="M8 21h8M12 17v4"/></svg></div>
                <h3 class="feature-title">100% Digital Filing Capability</h3>
                <p class="feature-text">All portals covered - haryanaindustries.gov.in, mca.gov.in, incometax.gov.in, ngodarpan.gov.in. In-person at Gurugram office when physical submission is needed at Sub-Registrar.</p>
            </article>
        </div>
    </div>
</section>

<!-- SECTION 12A: SOCIAL PROOF -->
<section class="content-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">What Our Clients Say About Patron Accounting</h2>
            <div class="content-text">
                
                <p><strong>10,000+ Businesses Served | 4.9 Google Rating | 50,000+ Documents Filed | 15+ Years Experience</strong></p>
                <blockquote style="border-left:3px solid var(--orange);padding-left:16px;margin:20px 0;font-style:italic;color:var(--text-secondary);">
                    "Patron handled our Pvt Ltd registration end-to-end. Zero paperwork hassle for our founding team." - Startup Founder, Gurugram
                </blockquote>
                <blockquote style="border-left:3px solid var(--orange);padding-left:16px;margin:20px 0;font-style:italic;color:var(--text-secondary);">
                    "Our GST filing is always on time since we moved to Patron. The CA team knows their stuff cold." - CFO, Manufacturing, Haryana
                </blockquote>
                <p><strong>Trusted by Hyundai, Asian Paints, Bridgestone and growing businesses across India.</strong></p>
                <p>With offices in Pune, Mumbai, Delhi, and Gurugram, Patron serves organisations across India with local expertise and national reach.</p>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 13: SELF-FILING vs PROFESSIONAL COMPARISON -->
<section class="content-section" id="comparison-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Trust vs Society vs Section 8 Company in Gurugram</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Parameter</th><th>Trust</th><th>Society</th><th>Section 8 Company</th></tr></thead>
                    <tbody>
                        <tr><td>Governing Law</td><td>Indian Trusts Act, 1882</td><td>Haryana Societies Act, 2012</td><td>Companies Act, 2013 (Section 8)</td></tr>
                        <tr><td>Minimum Members</td><td>2 trustees</td><td>7 members (Haryana requirement)</td><td>2 directors + 2 shareholders</td></tr>
                        <tr><td>Registration Authority</td><td>Sub-Registrar, Gurugram</td><td>District Registrar of Societies, Gurugram</td><td>RoC Delhi (serves Haryana)</td></tr>
                        <tr><td>Government Fee</td><td>Stamp duty per Haryana rates</td><td>Rs 300 total</td><td>Rs 500 - Rs 5,000</td></tr>
                        <tr><td>Best For</td><td>Family-run charities, religious endowments</td><td>Community welfare, RWAs, educational bodies</td><td>CSR-funded NGOs, social enterprises</td></tr>
                        <tr><td>CSR Credibility</td><td>Moderate</td><td>Moderate</td><td>Highest - preferred by MNC CSR teams</td></tr>
                        <tr><td>Online Filing</td><td>Physical submission to Sub-Registrar</td><td>haryanaindustries.gov.in</td><td>MCA portal (mca.gov.in)</td></tr>
                        <tr><td>Timeline</td><td>7 - 21 working days</td><td>15 - 30 working days</td><td>30 - 45 working days</td></tr>

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
            <h2 class="section-title">Related Registration and Compliance Services</h2>
            <div class="content-text">
                
                <p>Explore related registration and compliance services for Gurugram organisations:</p>
                <ul>
                    <li><a href="/ngo-registration">NGO Registration in India</a> - National-level NGO registration services covering all states</li>
                    <li>Society Registration - Society registration services across India including state-specific requirements</li>
                    <li><a href="/section8-company-registration">Section 8 Company Registration</a> - Non-profit company incorporation under Companies Act, 2013</li>
                    
                    <li><a href="/fcra-registration">FCRA Registration</a> - Foreign Contribution Regulation Act registration for receiving international donations</li>
                    <li><a href="/private-limited-company-registration">Private Limited Company Registration</a> - Company incorporation for business entities</li>
                </ul>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 15A: LEGAL FRAMEWORK -->
<section class="content-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Legal and Compliance Framework for NGO Registration</h2>
            <div class="content-text">
                
                <p><strong>Governing Acts and Relevant Sections:</strong></p>
                <ul>
                    <li><strong>Indian Trusts Act, 1882</strong> - Sections 3 to 9 govern creation and obligations of public charitable trusts</li>
                    <li><strong>Haryana Registration and Regulation of Societies Act, 2012 (Act No. 1 of 2012)</strong> - Replaced the Societies Registration Act, 1860 in Haryana. Section 7 governs registration procedure. Section 25 mandates model bye-laws conformity. Section 50 prescribes penalties for non-compliance</li>
                    <li><strong>Companies Act, 2013</strong> - Section 8(1) governs formation of companies with charitable objects. Section 8(4) provides exemptions from using 'Limited' or 'Private Limited'</li>
                    <li><strong>Income Tax Act, 1961</strong> - Section 12A/12AB for income tax exemption. Section 80G for donor deductions. Section 2(15) defines 'charitable purpose'. Section 11 exempts income applied to charitable objects</li>
                    <li><strong>Foreign Contribution Regulation Act, 2010</strong> - Section 11 governs FCRA registration for receiving foreign donations. Filed with Ministry of Home Affairs</li>
                    <li><strong>Companies Act, 2013 (CSR)</strong> - Section 135 mandates CSR spending. Companies (CSR Policy) Rules, 2014 require NGOs to file CSR-1 form</li>
                </ul>
                <p><strong>Penalties:</strong> Under Section 50 of the Haryana Societies Act 2012, failure to file annual returns attracts fines starting at Rs 200 plus Rs 100 per additional offence. Non-filing of 12A renewal (Form 10AB) within 6 months before expiry under Section 12AB results in permanent loss of tax exemption status. Operating an unregistered charitable entity soliciting donations is punishable under the Indian Penal Code and relevant state laws.</p>
                <p><strong>Regulatory Authorities:</strong></p>
                <ul>
                    <li>District Registrar of Societies, Gurugram - Department of Industries & Commerce, Haryana</li>
                    <li>Sub-Registrar, Gurugram - Revenue Department, Haryana</li>
                    <li>Registrar of Companies, Delhi - Ministry of Corporate Affairs (serves Haryana)</li>
                    <li>Principal Commissioner of Income Tax (Exemptions), Delhi - processes 12A/80G for Haryana NGOs</li>
                    <li>NITI Aayog - NGO Darpan portal (<a href="https://ngodarpan.gov.in" target="_blank" rel="noopener">ngodarpan.gov.in</a>)</li>
                    <li>Ministry of Home Affairs - FCRA registration</li>
                </ul>
                <p><strong>Recent Amendment (2025):</strong> Post-Finance Act 2020, all 12A registrations are time-bound. Provisional 12A has 3-year validity. Regular 12A has 5-year validity, with 10-year validity available for small trusts with income up to Rs 5 crore (post-March 2025 amendment). Form 10AB for renewal must be filed at least 6 months before expiry.</p>
                <p>For official information, visit <a href="https://haryanaindustries.gov.in" target="_blank" rel="noopener">haryanaindustries.gov.in</a> (Haryana Societies portal).</p>

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
                    <h2 class="faq-expanded__title">Frequently Asked Questions - NGO Registration in Gurugram</h2>
                    <p class="faq-expanded__lead">Get answers to the most common questions about registering a trust, society, or Section 8 company in Gurugram, Haryana.</p>
                    @include('partials.bigin-form', [
                        'variant'  => 'compact',
                        'service'  => 'NGO Registration',
                        'city'     => 'Gurugram',
                    ])
                </aside>
                <div class="faq-expanded__list">
                    <div class="faq-expanded__item" id="faq-1">
                        <h3 class="faq-expanded__q">Which office handles NGO registration in Gurugram?</h3>
                        <div class="faq-expanded__a"><p>For society registration, the District Registrar of Societies, Gurugram, under the Department of Industries and Commerce, Haryana, is the registering authority. Applications are filed online through haryanaindustries.gov.in. For trusts, the Sub-Registrar, Gurugram, handles registration. Section 8 companies are registered with the Registrar of Companies, Delhi, which has jurisdiction over Haryana.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-2">
                        <h3 class="faq-expanded__q">Can I register an NGO online from Gurugram?</h3>
                        <div class="faq-expanded__a"><p>Yes. Society registration in Haryana is filed through the haryanaindustries.gov.in online portal. Section 8 company incorporation is entirely digital through mca.gov.in. Trust registration requires physical presence before the Sub-Registrar for deed execution, though Patron's Gurugram office handles all preparation and accompanies the trustees. 12A, 80G, NGO Darpan, and CSR-1 are all filed digitally.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-3">
                        <h3 class="faq-expanded__q">What is the NGO registration fee in Gurugram?</h3>
                        <div class="faq-expanded__a"><p>Government fees for society registration in Haryana total Rs 300 (Rs 100 for name approval plus Rs 200 for registration). Trust registration requires stamp duty per Haryana Stamp Act rates on the trust deed. Section 8 company fees on MCA portal range from Rs 500 to Rs 5,000 based on authorised capital. Patron's all-inclusive package starts from Rs 9,999 covering documentation, filing, and 12A/80G setup.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-4">
                        <h3 class="faq-expanded__q">How long does NGO registration take in Gurugram?</h3>
                        <div class="faq-expanded__a"><p>Trust registration is fastest at 7 to 21 working days. Society registration under the Haryana Societies Act, 2012 takes 15 to 30 working days from application submission, assuming model bye-laws conformity. Section 8 company incorporation takes 30 to 45 working days including Regional Director licensing stage. Patron's familiarity with Haryana processes helps avoid revision delays.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-5">
                        <h3 class="faq-expanded__q">What is the difference between trust and society registration in Haryana?</h3>
                        <div class="faq-expanded__a"><p>A trust is managed by 2 or more trustees with authority vested in the trust deed, registered with the Sub-Registrar under the Indian Trusts Act, 1882. A society is a member-driven body requiring minimum 7 members, registered with the District Registrar under the Haryana Societies Act, 2012. Trusts are better for family-run charities. Societies suit community organisations with broader membership. Section 8 companies offer the highest CSR credibility.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-6">
                        <h3 class="faq-expanded__q">Do I need separate 12A and 80G registration after NGO registration?</h3>
                        <div class="faq-expanded__a"><p>Yes. NGO registration (trust, society, or Section 8) gives legal identity. 12A registration under Section 12AB of the Income Tax Act, 1961, is required separately for income tax exemption. 80G certification enables donors to claim tax deductions. Both are filed on the incometax.gov.in portal and processed by PCIT(E) Delhi for Haryana-based NGOs. Patron bundles these in the NGO registration package.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-7">
                        <h3 class="faq-expanded__q">What is the Haryana Societies Act, 2012?</h3>
                        <div class="faq-expanded__a"><p>The Haryana Registration and Regulation of Societies Act, 2012 (Act No. 1 of 2012) is the state-specific law that replaced the Societies Registration Act, 1860 for all society registrations in Haryana. It introduced model bye-laws conformity under Section 25, Collegium requirements for societies with 300+ members, and stricter governance norms. Filing under the 1860 Act in Haryana results in rejection.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-8">
                        <h3 class="faq-expanded__q">Can a Gurugram NGO receive foreign donations?</h3>
                        <div class="faq-expanded__a"><p>Only if the NGO has FCRA registration under the Foreign Contribution Regulation Act, 2010. FCRA is filed with the Ministry of Home Affairs and requires the NGO to have been operational for at least 3 years with audited accounts. For Gurugram NGOs receiving funds from international CSR programmes or foreign philanthropic organisations, <a href="/fcra-registration">FCRA registration</a> is essential. Patron handles end-to-end FCRA filing.</p></div>
                    </div>
                </div>
            </div>


            <!-- Quick Answers -->
            <div class="highlight-box" style="margin-top:32px;">
                <p><strong>Quick Answers</strong></p>
                <p><strong>NGO kaise register karein Gurugram mein?</strong> Trust, society, ya Section 8 company - teeno options hain. Patron Gurugram office se saari filing hoti hai.</p>
                <p><strong>Haryana mein society registration kis Act ke under hota hai?</strong> Haryana Registration and Regulation of Societies Act, 2012. 1860 wala Act Haryana mein repeal ho chuka hai.</p>
                <p><strong>NGO registration ke baad kya karna padta hai?</strong> 12A registration, 80G, NGO Darpan, CSR-1 - sab required hai funding ke liye. Patron sab ek saath karta hai.</p>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 18: URGENCY CTA -->
<section class="content-section" style="background: var(--orange-lighter) !important; border-left: 4px solid var(--orange);">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Don't Delay Your NGO Registration in Gurugram</h2>
            <div class="content-text">
                
                <p>NGO registration in Gurugram is not merely a compliance step - it is the foundation for legal operation, tax exemption, and funding eligibility. Delay in registration means delay in 12A/80G, which blocks CSR contributions from Gurugram's corporate corridor. Under Section 12AB of the Income Tax Act, 1961, provisional 12A has only 3-year validity - early registration ensures maximum utilisation of the exemption window. Every financial year of operation without 12A means the NGO's surplus income is taxed at normal rates, directly reducing funds available for charitable activities.</p>
                <p><strong>Get a free NGO Registration consultation - <a href="tel:+919459456700">Call +91 945 945 6700</a> or <a href="https://wa.me/919459456700?text=Hi%2C%20I%20need%20help%20with%20NGO%20registration%20in%20Gurugram.%20Please%20call%20me." target="_blank">WhatsApp us</a>. No-obligation assessment.</strong></p>

            </div>
        </div>
    </div>
</section>

<!-- CONCLUSION + CTA BLOCK (Dark) -->
<section class="content-section" style="background: var(--blue) !important;">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title" style="color:#FFFFFF !important;">Register Your NGO in Gurugram Today</h2>
            <div class="content-text" style="text-align:left;">
                
                <p style="color:rgba(255,255,255,0.85);font-size:16px;line-height:1.7;">NGO registration in Gurugram establishes the legal identity of your charitable organisation as a trust, society, or Section 8 company, unlocking tax exemptions, donor deductions, and CSR funding eligibility.</p>
                <p style="color:rgba(255,255,255,0.85);font-size:16px;line-height:1.7;">Gurugram's concentration of Fortune 500 companies in DLF Cyber City, BFSI firms on Golf Course Road, and manufacturing units in Manesar IMT creates one of India's richest CSR ecosystems. Patron Accounting's Gurugram office on Golf Course Extension Road provides end-to-end NGO registration under the correct Haryana Societies Act, 2012 framework, bundled with 12A, 80G, NGO Darpan, and CSR-1 compliance.</p>
                <p style="color:rgba(255,255,255,0.85);font-size:16px;line-height:1.7;">Patron Accounting LLP has served 10,000+ businesses across India with offices in Pune, Mumbai, Delhi, and Gurugram. 15+ years of registration and compliance experience. 4.9 Google rating. ISO certified processes.</p>

            </div>
            <div style="display:flex;gap:14px;flex-wrap:wrap;margin-top:24px;">
                <a href="tel:+919459456700" style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:var(--orange);color:#fff;border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#128222; Call +91 945 945 6700</a>
                <a href="https://wa.me/919459456700?text=Hi%2C%20I%20need%20help%20with%20NGO%20registration%20in%20Gurugram.%20Please%20call%20me." target="_blank" style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:#25D366;color:#fff;border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#128172; WhatsApp Us</a>
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
            <h2 class="section-title" style="text-align:center;margin-bottom:12px;">NGO Registration Across India</h2>
            <p style="text-align:center;color:var(--text-muted);font-size:15px;margin-bottom:40px;">Patron Accounting offers NGO registration services in 8 major cities across India. Select your city for localised guidance.</p>
     
            <div class="pa-city-block" style="margin-bottom:40px;">
                <div class="pa-block-title">NGO Registration by City</div>
                <div class="pa-block-sub">Expert-assisted NGO registration with local office support</div>
                <div class="pa-city-grid">
                    <a href="/ngo-registration/pune" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Pune</div><div class="pa-card-sub">Maharashtra</div></div></a>
                    <a href="/ngo-registration/mumbai" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Mumbai</div><div class="pa-card-sub">Maharashtra</div></div></a>
                    <a href="/ngo-registration/delhi" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Delhi</div><div class="pa-card-sub">Delhi NCR</div></div></a>
                    <div class="pa-city-card" style="opacity:0.6; pointer-events:none; border:2px solid var(--orange); position:relative;"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Gurugram</div><div class="pa-card-sub">Haryana</div></div><span style="position:absolute; top:6px; right:8px; font-size:10px; color:var(--orange); font-weight:700; text-transform:uppercase; letter-spacing:0.5px;">You're here</span></div>
                    <a href="/ngo-registration/bangalore" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Bangalore</div><div class="pa-card-sub">Karnataka</div></div></a>
                    <a href="/ngo-registration/hyderabad" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Hyderabad</div><div class="pa-card-sub">Telangana</div></div></a>
                    <a href="/ngo-registration/chennai" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Chennai</div><div class="pa-card-sub">Tamil Nadu</div></div></a>
                    <a href="/ngo-registration/kolkata" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Kolkata</div><div class="pa-card-sub">West Bengal</div></div></a>
                </div>
            </div>
            <div class="pa-city-block">
                <div class="pa-block-title">Related Services in Gurugram</div>
                <div class="pa-block-sub">End-to-end support for NGO Registration</div>
                <div class="pa-cross-grid">
                    <a href="/section8-company-registration/gurugram" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Section 8 Company Registration</div><div class="pa-card-sub">Gurugram</div></div></a>
                    <a href="/80g-registration/gurugram" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg></div><div><div class="pa-card-title">12A and 80G Registration</div><div class="pa-card-sub">Gurugram</div></div></a>
                    <a href="/private-limited-company-registration/gurugram" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><rect x="2" y="3" width="20" height="14" rx="2"/><path d="M8 21h8M12 17v4"/></svg></div><div><div class="pa-card-title">Private Limited Company Registration</div><div class="pa-card-sub">Gurugram</div></div></a>
                    <a href="/llp-incorporation/gurugram" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M16 21v-2a4 4 0 00-4-4H5a4 4 0 00-4 4v2"/><circle cx="8.5" cy="7" r="4"/><path d="M20 8v6M23 11h-6"/></svg></div><div><div class="pa-card-title">LLP Registration</div><div class="pa-card-sub">Gurugram</div></div></a>
                    <a href="/startup-registration/gurugram" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M13 2L3 14h9l-1 8 10-12h-9l1-8z"/></svg></div><div><div class="pa-card-title">Startup Registration</div><div class="pa-card-sub">Gurugram</div></div></a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- CONTENT FRESHNESS FOOTER -->
<section class="content-section" style="padding:32px;">
    <div class="content-container">
        <div class="text-content" style="font-size:13px;color:var(--text-muted);">
            <p><strong>Content Created:</strong> 15 April 2026 &nbsp;|&nbsp; <strong>Last Updated:</strong> <span id="lastUpdatedFooter">15 April 2026</span> &nbsp;|&nbsp; <strong>Next Review:</strong> 15 April 2027 &nbsp;|&nbsp; <strong>Reviewed By:</strong> CA &amp; CS Team, Patron Accounting LLP</p>
            <p>This page is reviewed annually for accuracy. NGO registration rules, fees, and Haryana-specific requirements are verified against official government sources. Patron Accounting updates this content whenever regulatory changes occur.</p>
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
