
@extends('layouts.service-app')

<!-- External Dependencies (loaded by master layout in production) -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Barlow:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,400&family=DM+Sans:opsz,wght@9..40,400;9..40,500;9..40,600;9..40,700&display=swap" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

@section('meta')
    <title>NGO Registration in Pune - Trust, Society & Section 8 Co.</title>
    <meta name="description" content="CA-assisted NGO registration in Pune. Trust, Society, Section 8 Company. 12A, 80G, CSR-1 included. Serving Hinjewadi, Kharadi, Chakan businesses. Call +91 945 945 6700.">
    <link rel="canonical" href="/ngo-registration/pune">
    <meta name="robots" content="index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1">
    <meta property="og:title" content="NGO Registration in Pune - Trust, Society & Section 8 Co.">
    <meta property="og:description" content="CA-assisted NGO registration in Pune. Trust, Society, Section 8 Company. 12A, 80G, CSR-1 included. Serving Hinjewadi, Kharadi, Chakan businesses. Call +91 945 945 6700.">
    <meta property="og:url" content="/ngo-registration/pune">
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="Patron Accounting">
    <meta property="og:image" content="https://www.patronaccounting.com/images/og-default-square.png">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="1200">
    <meta property="og:image:type" content="image/png">
    <meta property="og:image:secure_url" content="https://www.patronaccounting.com/images/og-default-square.png">
    <meta property="og:image:alt" content="Patron Accounting - partner you can rely on">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="NGO Registration in Pune - Trust, Society & Section 8 Co.">
    <meta name="twitter:description" content="CA-assisted NGO registration in Pune. Trust, Society, Section 8 Company. 12A, 80G, CSR-1 included. Serving Hinjewadi, Kharadi, Chakan businesses. Call +91 945 945 6700.">
    <meta name="twitter:image" content="https://www.patronaccounting.com/images/og-default-square.png">
@endsection

@section('schema')
    <script type="application/ld+json">{
  "@context": "https://schema.org",
  "@graph": [
    {
      "@type": "Service",
      "name": "NGO Registration in Pune",
      "description": "CA-assisted NGO registration in Pune. Trust, Society, Section 8 Company. 12A, 80G, CSR-1 included. Serving Hinjewadi, Kharadi, Chakan businesses. Call +91 945 945 6700.",
      "url": "https://www.patronaccounting.com/ngo-registration/pune",
      "serviceType": "NGO Registration in Pune",
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
        "url": "https://www.patronaccounting.com/ngo-registration/pune",
        "priceSpecification": {
          "@type": "PriceSpecification",
          "minPrice": "5999",
          "maxPrice": "14999",
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
          "name": "NGO Registration in India: Trust, Society & Section 8",
          "item": "https://www.patronaccounting.com/ngo-registration"
        },
        {
          "@type": "ListItem",
          "position": 3,
          "name": "NGO Registration in Pune",
          "item": "https://www.patronaccounting.com/ngo-registration/pune"
        }
      ]
    },
    {
      "@type": "FAQPage",
      "mainEntity": [
        {
          "@type": "Question",
          "name": "Which office handles trust registration in Pune?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "The Joint Charity Commissioner, Pune at the Public Trusts Registration Office, 45/2, Late B.S. Dhole Patil Marg, Opp. Wadia College, Pune 411 001 handles all public trust registrations under the Bombay Public Trusts Act, 1950. Society registrations also go through the Charity Commissioner. Section 8 Company registrations are handled by RoC, Pune through the MCA portal."
          }
        },
        {
          "@type": "Question",
          "name": "What is the cost of NGO registration in Pune?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Trust registration starts from Rs 5,999, society from Rs 7,999, and Section 8 company from Rs 14,999 at Patron Accounting. All-inclusive packages cover document drafting, government fees, Maharashtra stamp duty (for trusts), and filing. 12A + 80G costs Rs 4,999 additionally. CSR-1 and NGO Darpan costs Rs 2,999."
          }
        },
        {
          "@type": "Question",
          "name": "How long does NGO registration take in Pune?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Trust registration takes 7-21 working days from document submission to certificate issuance by the Joint Charity Commissioner. Society takes 15-30 working days. Section 8 Company takes 30-45 working days including MCA licence approval and incorporation. 12A and 80G take additional 15-30 days after base registration."
          }
        },
        {
          "@type": "Question",
          "name": "Is 12A and 80G registration mandatory for NGOs?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "12A is essential for NGO income tax exemption - without it, surplus income is taxed at standard rates. 80G enables donors to claim 50% tax deduction. Both applied via Form 10A on the IT e-Filing portal. Provisional registration valid 3 years, renewable for 5 years via Form 10AB. Under Finance Act 2025-26, NGOs with income below Rs 5 crore can extend 12A for 10 years."
          }
        },
        {
          "@type": "Question",
          "name": "How many members are needed to register an NGO?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Trust under Bombay Public Trusts Act needs minimum 2 trustees. Society under Societies Registration Act needs minimum 7 founding members. Section 8 Company needs minimum 2 directors and 2 shareholders. All members must be at least 18 years old. For Section 8, at least one director must be an Indian resident."
          }
        },
        {
          "@type": "Question",
          "name": "Can my NGO receive CSR funding after registration?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Yes, but your NGO must have both 80G registration and CSR-1 registration (filed on MCA portal) to be eligible as a CSR implementing agency. Pune has over 200 companies in Hinjewadi, Kharadi, and Chakan mandated to spend 2% on CSR. Patron's registration package includes CSR-1 to ensure CSR-readiness."
          }
        },
        {
          "@type": "Question",
          "name": "Can I register an NGO online from Pune?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Section 8 Company registration is fully online through the MCA portal. Trust and society registrations under the Bombay PT Act require physical submission at the Joint Charity Commissioner, Pune. Patron handles both online and physical submissions from our Pune office - you do not need to visit any government office personally."
          }
        },
        {
          "@type": "Question",
          "name": "What annual compliance is required for a registered NGO in Pune?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Trusts must file annual accounts in Schedule IX-A format with the Charity Commissioner and get accounts audited. Section 8 companies must file AOC-4 and MGT-7 with RoC Pune and hold AGM. All NGOs with 12A/80G must file Form 10BD (statement of donations) and issue Form 10BE annually. ITR by 31 October if audit applicable. Quick Answers NGO register karne mein kitna kharcha aata hai? Trust registration Rs 5,999 se shuru hoti hai. Society Rs 7,999 se. Section 8 Company Rs 14,999 se. 12A aur 80G ka alag Rs 4,999 lagta hai. Kya Maharashtra mein Indian Trusts Act lagu hota hai? Nahi. Maharashtra mein Bombay Public Trusts Act, 1950 lagu hota hai. Ye zyada strict hai lekin trust ki credibility bhi zyada hoti hai. CSR funding ke liye kya chahiye? 80G certificate + CSR-1 registration (MCA portal pe) + NGO Darpan registration. Teeno ke bina koi company CSR fund nahi de sakti."
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
                        NGO Registration in Pune: Trust, Society, and Section 8 Company Setup
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
                            <p class="mb-0 text-dark benefit-paragraph"><span>Documents:</span> PAN, Aadhaar of all members/trustees, registered office proof, trust deed/MOA/AOA</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Fees:</span> Starting from Rs 5,999 (Trust), Rs 7,999 (Society), Rs 14,999 (Section 8 Company)</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Eligibility:</span> Minimum 2 trustees (Trust), 7 members (Society), 2 directors (Section 8)</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Timeline:</span> 7-21 days (Trust/Society) to 30-45 days (Section 8 Company)</p>
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
                        <a href="https://wa.me/919459456700?text=Hi%2C%20I%20need%20NGO%20registration%20in%20Pune.%20Please%20call%20me." target="_blank" class="btn-sample text-decoration-none">
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
                                            'service'  => 'NGO Registration in Pune',
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
            <a href="#overview-section" class="toc-btn">Overview</a><a href="#what-section" class="toc-btn">What Is NGO Reg</a><a href="#who-section" class="toc-btn">Who Needs It</a><a href="#services-section" class="toc-btn">Services</a><a href="#procedure-section" class="toc-btn">Process</a><a href="#documents-section" class="toc-btn">Documents</a><a href="#challenges-section" class="toc-btn">Challenges</a><a href="#fees-section" class="toc-btn">Fees</a><a href="#timeline-section" class="toc-btn">Timeline</a><a href="#benefits-section" class="toc-btn">Why Patron</a><a href="#comparison-section" class="toc-btn">Trust vs Society</a><a href="#faq-section" class="toc-btn">FAQs</a>
        </div>
        <button class="toc-arrow right" id="tocRight">&#10095;</button>
    </div>
</div>

<!-- SECTION 2: OVERVIEW / INTRO + TL;DR -->
<section class="content-section" id="overview-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">NGO Registration in Pune - Overview</h2>
            <div class="content-text">
                <div class="highlight-box" style="margin-bottom:20px;">
                    <p><strong>&#128204; TL;DR - NGO Registration in Pune Services at a Glance</strong></p>
                    <p>NGO registration in Pune creates a legally recognised non-profit entity that can accept donations, receive CSR funding, and apply for government grants. In Maharashtra, trusts are registered under the Bombay Public Trusts Act, 1950 with the Joint Charity Commissioner, Pune. Societies are registered under the Societies Registration Act, 1860. Section 8 companies are incorporated through the RoC, Pune under the Companies Act, 2013.</p><div class="table-responsive-wrapper" style="margin-top:16px;"><table><thead><tr><th>Parameter</th><th>Detail</th></tr></thead><tbody><tr><td>Governing Laws</td><td>Bombay Public Trusts Act 1950, Societies Registration Act 1860, Companies Act 2013</td></tr><tr><td>Applicable To</td><td>Charitable, educational, healthcare, environmental, religious, social welfare organisations</td></tr><tr><td>Timeline</td><td>Trust: 7-21 days | Society: 15-30 days | Section 8: 30-45 days</td></tr><tr><td>Cost Starting From</td><td>Trust: Rs 5,999 | Society: Rs 7,999 | Section 8: Rs 14,999</td></tr><tr><td>Tax Exemption</td><td>12A (NGO income exempt) + 80G (donor tax deduction) - via Form 10A</td></tr><tr><td>Jurisdictional Offices</td><td>Joint Charity Commissioner, Pune | RoC, Pune (Section 8)</td></tr><tr><td>CSR Eligibility</td><td>Requires 80G + CSR-1 registration on MCA portal</td></tr></tbody></table></div></p>
                </div>
                <p>Pune is home to over 3,000 registered NGOs and public trusts. The city's unique combination of a large corporate base in Hinjewadi and Kharadi (generating mandatory CSR spending under Section 135), an active philanthropic community across Koregaon Park and Baner, and proximity to rural communities creates a strong ecosystem for non-profit organisations. In Maharashtra, public trusts must register with the Joint Charity Commissioner under the Bombay Public Trusts Act, 1950 - not the Indian Trusts Act, 1882 that applies in most other states. Learn more about <a href="/ngo-registration">NGO Registration across India</a>.</p>
                <p>Patron Accounting handles all three NGO registration types from our Pune office at RTC Silver, Wagholi - including trust deed drafting, stamp paper procurement, Charity Commissioner submissions, and post-registration 12A/80G/CSR-1/NGO Darpan filings. After registration, you may also need <a href="/fcra-registration">FCRA Registration</a> for foreign donations and <a href="/statutory-audit">Statutory Audit</a> for annual compliance.</p>
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
                <h2 class="section-title">What Is NGO Registration</h2>
                <div class="content-text what-is-definition">
                    
                    <p>NGO registration is the legal process of incorporating a non-profit organisation as a Trust, Society, or Section 8 Company under Indian law, enabling it to operate as a recognised entity, accept donations, and claim tax exemptions under the Income Tax Act, 1961.</p><p>For Pune's social sector - where education-focused NGOs partner with Savitribai Phule Pune University, healthcare organisations operate alongside KEM and Sassoon hospitals, and environmental groups work with Pune Municipal Corporation - formal registration is the gateway to institutional credibility. Without registration, an NGO cannot apply for 12A tax exemption, cannot offer 80G donor deduction benefits, and cannot receive CSR funding from the 200+ IT companies in Hinjewadi and automotive manufacturers in Chakan mandated to spend 2% of net profits on CSR.</p><p>Maharashtra's Bombay Public Trusts Act, 1950 is unique - it requires all public trusts to register with the Charity Commissioner and submit annual accounts in Schedule IX-A format. This stricter governance framework gives Maharashtra-registered trusts higher credibility with institutional donors and government grant agencies.</p>

                </div>
                <div class="highlight-box" style="margin-top:20px;">
                    <p><strong>Key Terms for NGO Registration in Pune:</strong></p>
                    <p><strong>Bombay Public Trusts Act, 1950:</strong> Maharashtra-specific legislation governing all public trusts. Registration with Charity Commissioner within 3 months of creation. Annual Schedule IX-A audit required.</p><p><strong>Section 8 Company:</strong> Non-profit company under Companies Act 2013 with INC-12 licence. Pan-India operational scope. ROC compliance required.</p><p><strong>12A Registration:</strong> Income Tax Act provision exempting NGO income from taxation. Applied via Form 10A (provisional 3 years, renewable 5 years via Form 10AB).</p><p><strong>80G Registration:</strong> Enables donors to claim 50% tax deduction on donations to the registered NGO. Critical for attracting CSR funding.</p><p><strong>CSR-1:</strong> MCA portal filing to register as eligible CSR implementing agency under Section 135. Required alongside 80G for receiving corporate CSR funds.</p>

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
                            <text x="100" y="170" font-size="10" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial, sans-serif">NGO Registration in Pune</text>
                        </svg>
                    </div>
                    <div class="illustration-badge">
                        <span>Non-Profit</span>
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
            <h2 class="section-title">Who Needs NGO Registration in Pune</h2>
            <div class="content-text">
                
                <p><strong>Social Entrepreneurs and Educators:</strong> Running or planning schools, skill development centres, or scholarship programmes. Pune's education hub status - with Savitribai Phule Pune University, Symbiosis, and Deccan Education Society - makes it a natural base for education NGOs that can tap into CSR funding from Hinjewadi IT companies.</p><p><strong>Healthcare Professionals and Activists:</strong> Operating free clinics, maternal care programmes, or sanitation initiatives. Pune's healthcare ecosystem (Deenanath Mangeshkar Hospital, Ruby Hall Clinic, Sassoon) supports healthcare NGOs that can receive government grants and corporate CSR funds through Bombay PT Act registration.</p><p><strong>Environmental Groups:</strong> Tree plantation, waste management, water conservation, air quality projects. Pune Municipal Corporation's Smart City initiatives and Mula-Mutha river rejuvenation create opportunities for registered environmental NGOs.</p><p><strong>Corporate CSR Departments:</strong> IT companies in Hinjewadi/Kharadi, automotive firms in Chakan (Hyundai, Bajaj), manufacturing units in MIDC Bhosari need to channel mandatory 2% CSR spend through registered NGOs with valid 80G and CSR-1 certifications.</p><p><strong>NRIs and Diaspora:</strong> Funding charitable initiatives in Pune's rural periphery. Section 8 Company provides pan-India scope while trust registration provides local credibility. FCRA registration additionally required for foreign donations.</p>

            </div>
            </div>
        </div>
    </div>
</section>

<!-- SECTION 5: OUR SERVICES -->
<section class="content-section" id="services-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">10 NGO Registration Services Included in Pune</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Service</th><th>What We Do</th></tr></thead>
                    <tbody>
                        <tr><td>Trust Registration (Bombay PT Act, 1950)</td><td>Trust deed drafting by CA/CS, execution on Maharashtra stamp paper, filing with Joint Charity Commissioner Pune within 3 months. Minimum 2 trustees.</td></tr><tr><td>Society Registration (Societies Act, 1860)</td><td>MOA and Rules & Regulations drafting, filing with Registrar of Societies through Charity Commissioner Pune. Minimum 7 founding members.</td></tr><tr><td>Section 8 Company (Companies Act, 2013)</td><td>DSC/DIN, name reservation, INC-12 licence, SPICe+ filing with RoC Pune, MOA and AOA drafting. Minimum 2 directors.</td></tr><tr><td>12A Registration (Section 12A)</td><td>Form 10A filing on IT e-Filing portal for provisional registration (3 years). NGO income exempt from tax. Filed immediately after base registration.</td></tr><tr><td>80G Registration (Section 80G)</td><td>Form 10A filing for provisional registration. Donors get 50% tax deduction. Critical for CSR funding from Pune corporates.</td></tr><tr><td>CSR-1 Registration</td><td>Form CSR-1 on MCA portal to register as eligible CSR implementing agency under Section 135.</td></tr><tr><td>NGO Darpan Registration</td><td>NITI Aayog portal (ngodarpan.gov.in) for government grants, schemes, and institutional funding access.</td></tr><tr><td>FCRA Registration (if applicable)</td><td>Application under Foreign Contribution Act 2010 for NGOs receiving foreign donations. Requires 3 years of operational history.</td></tr><tr><td>PAN and TAN Application</td><td>Permanent Account Number and Tax Deduction Account Number for the NGO entity.</td></tr><tr><td>Annual Compliance Setup</td><td>Schedule IX-A audit for trusts, ROC returns for Section 8, 12A/80G renewal tracking, Form 10BD/10BE donor reporting.</td></tr>

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
            <h2 class="section-title">6-Step NGO Registration Process in Pune</h2>
            <p class="section-subtitle" style="text-align:left;max-width:100%;">Patron handles all three NGO registration types from our Pune office. Trust and society applications require physical submission at the Joint Charity Commissioner, Pune (near Wadia College). Section 8 Company registration is fully online via MCA portal. Walk-in consultations available at RTC Silver, Wagholi.</p>
        </header>
        <div class="steps-container">
            <div class="step-card"><div class="step-content"><span class="step-badge">Step 1</span><h3 class="step-title">Choose the NGO Structure</h3><p class="step-description">Patron's CA team assesses your objectives, governance preferences, funding sources, and scale. Trusts (Bombay PT Act) are ideal for long-term charitable/religious activities. Societies suit educational, cultural, and sports organisations. Section 8 Companies are best for pan-India operations and large-scale CSR funding from Pune's corporate ecosystem.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Structure selected</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Objectives mapped</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="10" y="8" width="35" height="65" rx="4" fill="#E8F5E9" stroke="#25D366" stroke-width="1.2"/><text x="27" y="35" font-size="6" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">Trust</text><rect x="50" y="8" width="30" height="65" rx="4" fill="#FFF3E0" stroke="#F5A623" stroke-width="1.2"/><text x="65" y="35" font-size="6" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">Society</text><rect x="85" y="8" width="30" height="65" rx="4" fill="#F0F4F8" stroke="#14365F" stroke-width="1.2"/><text x="100" y="35" font-size="5" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">Sec 8</text></svg></div><span class="illustration-label">Chosen</span><span class="step-number-large">01</span></div></div></div>
<div class="step-card"><div class="step-content"><span class="step-badge">Step 2</span><h3 class="step-title">Prepare Foundational Documents</h3><p class="step-description">For trusts: CS team drafts trust deed on Maharashtra stamp paper (Rs 500-5,000) with trustee names, objectives, property schedule, and management rules. For societies: MOA and Rules & Regulations. For Section 8: MOA, AOA, and Form INC-12 licence application. All documents executed at Patron's Pune office with notarisation support.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Stamp paper procured</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Deed/MOA drafted</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="15" y="5" width="90" height="70" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><line x1="30" y1="22" x2="85" y2="22" stroke="#F5A623" stroke-width="2.5" stroke-linecap="round"/><line x1="30" y1="35" x2="78" y2="35" stroke="#14365F" stroke-width="1.5" opacity="0.3"/><line x1="30" y1="48" x2="72" y2="48" stroke="#14365F" stroke-width="1.5" opacity="0.3"/><circle cx="85" cy="60" r="8" fill="#E8F5E9" stroke="#25D366" stroke-width="1"/><path d="M81 60l3 3 5-5" stroke="#25D366" stroke-width="1.5" stroke-linecap="round"/></svg></div><span class="illustration-label">Docs Ready</span><span class="step-number-large">02</span></div></div></div>
<div class="step-card"><div class="step-content"><span class="step-badge">Step 3</span><h3 class="step-title">File with Jurisdictional Authority</h3><p class="step-description">Trust applications filed with Joint Charity Commissioner, Pune at 45/2, Late B.S. Dhole Patil Marg, Opp. Wadia College, Pune 411 001 in Schedule II format with Rs 100 court fee stamp within 3 months. Society applications through Charity Commissioner. Section 8 on MCA portal with RoC, Pune.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Filed at Dhole Patil</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Within 3-month deadline</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="20" y="10" width="80" height="60" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><path d="M15 12L60 2L105 12" stroke="#14365F" stroke-width="1.5" fill="#E8EDF4"/><rect x="35" y="25" width="10" height="35" rx="2" fill="#D4DCE8" stroke="#14365F" stroke-width="0.8"/><rect x="55" y="25" width="10" height="35" rx="2" fill="#D4DCE8" stroke="#14365F" stroke-width="0.8"/><rect x="75" y="25" width="10" height="35" rx="2" fill="#D4DCE8" stroke="#14365F" stroke-width="0.8"/><text x="60" y="80" font-size="5" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">Charity Commissioner</text></svg></div><span class="illustration-label">Filed</span><span class="step-number-large">03</span></div></div></div>
<div class="step-card"><div class="step-content"><span class="step-badge">Step 4</span><h3 class="step-title">Receive Registration Certificate</h3><p class="step-description">Joint Charity Commissioner issues trust registration certificate after verification. Society certificates from Registrar of Societies. Section 8 companies receive Certificate of Incorporation from Central Registration Centre (CRC). Timelines: Trust 7-21 days, Society 15-30 days, Section 8 30-45 days.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Certificate issued</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Entity established</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="15" y="5" width="90" height="70" rx="6" fill="#E8F5E9" stroke="#25D366" stroke-width="1.5"/><text x="60" y="25" font-size="8" fill="#14365F" font-weight="800" text-anchor="middle" font-family="Arial">NGO</text><rect x="25" y="32" width="70" height="18" rx="3" fill="#fff" stroke="#25D366" stroke-width="1"/><text x="60" y="44" font-size="5" fill="#14365F" text-anchor="middle" font-family="Arial">Registration Certificate</text><text x="60" y="62" font-size="6" fill="#14365F" font-weight="600" text-anchor="middle" font-family="Arial">Legally Recognised</text></svg></div><span class="illustration-label">Registered</span><span class="step-number-large">04</span></div></div></div>
<div class="step-card"><div class="step-content"><span class="step-badge">Step 5</span><h3 class="step-title">Apply for 12A, 80G, and CSR-1</h3><p class="step-description">File Form 10A on IT e-Filing portal for provisional 12A and 80G registration (valid 3 years). CSR-1 filed on MCA portal to register as eligible CSR implementing agency. These registrations are critical for tax exemption and CSR funding from IT companies in Hinjewadi and auto manufacturers in Chakan.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>12A + 80G filed</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>CSR-1 registered</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="5" y="10" width="35" height="30" rx="3" fill="#E8F5E9" stroke="#25D366" stroke-width="1"/><text x="22" y="28" font-size="5" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">12A</text><rect x="45" y="10" width="30" height="30" rx="3" fill="#FFF3E0" stroke="#F5A623" stroke-width="1"/><text x="60" y="28" font-size="5" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">80G</text><rect x="80" y="10" width="35" height="30" rx="3" fill="#F0F4F8" stroke="#14365F" stroke-width="1"/><text x="98" y="28" font-size="5" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">CSR-1</text><rect x="20" y="50" width="80" height="20" rx="3" fill="#14365F" opacity="0.06"/><text x="60" y="63" font-size="5" fill="#14365F" font-weight="600" text-anchor="middle" font-family="Arial">Tax Exempt + CSR Ready</text></svg></div><span class="illustration-label">CSR Ready</span><span class="step-number-large">05</span></div></div></div>
<div class="step-card"><div class="step-content"><span class="step-badge">Step 6</span><h3 class="step-title">Complete Post-Registration Setup</h3><p class="step-description">PAN and TAN obtained. NGO Darpan registration on ngodarpan.gov.in. GST registration if applicable. Bank account opened at Pune branch. Annual compliance calendar set up: Schedule IX-A audit for trusts, ROC returns for Section 8, 12A/80G renewal tracking, and Form 10BD/10BE donor reporting.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>NGO Darpan done</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Compliance calendar</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="15" y="5" width="90" height="70" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><rect x="25" y="15" width="30" height="12" rx="2" fill="#E8F5E9" stroke="#25D366" stroke-width="0.8"/><text x="40" y="24" font-size="4" fill="#14365F" font-weight="600" text-anchor="middle" font-family="Arial">PAN/TAN</text><rect x="60" y="15" width="30" height="12" rx="2" fill="#FFF3E0" stroke="#F5A623" stroke-width="0.8"/><text x="75" y="24" font-size="4" fill="#14365F" font-weight="600" text-anchor="middle" font-family="Arial">Darpan</text><rect x="25" y="33" width="30" height="12" rx="2" fill="#F0F4F8" stroke="#14365F" stroke-width="0.8"/><text x="40" y="42" font-size="4" fill="#14365F" font-weight="600" text-anchor="middle" font-family="Arial">Bank A/c</text><rect x="60" y="33" width="30" height="12" rx="2" fill="#E8F5E9" stroke="#25D366" stroke-width="0.8"/><text x="75" y="42" font-size="4" fill="#14365F" font-weight="600" text-anchor="middle" font-family="Arial">Calendar</text></svg></div><span class="illustration-label">Operational</span><span class="step-number-large">06</span></div></div></div>


        </div>
    </div>
</section>

<!-- SECTION 8: DOCUMENTS REQUIRED -->
<section class="content-section" id="documents-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Documents Required for NGO Registration in Pune</h2>
            <div class="content-text">
                
                <ul><li>PAN Card of all trustees/members/directors</li><li>Aadhaar Card of all trustees/members/directors</li><li>Passport-size photographs of all members (white background)</li><li>Address proof of all members - bank statement, electricity bill, or gas bill (not older than 2 months)</li><li>Voter ID / Driving Licence / Passport (additional identity proof)</li><li>Trust Deed / MOA & Rules (for Society) / MOA & AOA (for Section 8) - drafted by Patron CS team</li><li>Registered office proof - electricity bill or property tax receipt (not older than 2 months)</li><li>NOC from property owner (if registered office is rented)</li><li>Rent agreement for the registered office in Pune</li><li>Declaration from the proposed President/Secretary of the NGO</li><li>Consent letters from all trustees/members</li><li>DSC for all directors (Section 8 company only)</li></ul><div class="highlight-box" style="margin-top:20px;"><p><strong>Pune-Specific Tip:</strong> For trust registration under the Bombay Public Trusts Act, 1950, the trust deed must be executed on Maharashtra stamp paper - the value depends on the property involved. Patron's Pune office handles stamp paper procurement and Sub-Registrar coordination. For NGOs operating from co-working spaces in Hinjewadi or Magarpatta, ensure the space agreement and NOC are in the NGO's name.</p></div>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 9: CHALLENGES -->
<section class="content-section" id="challenges-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">5 Common NGO Registration Challenges in Pune</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Challenge</th><th>Impact</th><th>How Patron Accounting Solves It</th></tr></thead>
                    <tbody>
                        <tr><td>Bombay PT Act vs Indian Trusts Act Confusion</td><td>Online portals use generic Indian Trusts Act templates not valid for Pune. Bombay Act requires Charity Commissioner registration, Schedule IX-A audit.</td><td>CS team drafts trust deeds specifically compliant with the Bombay Public Trusts Act, 1950</td></tr><tr><td>Delays at Joint Charity Commissioner Office</td><td>Processing delays when applications incomplete, trust deed clauses ambiguous, or court fee stamps incorrect</td><td>Pre-submission review eliminates common rejection triggers. Patron team handles Dhole Patil Marg office visits.</td></tr><tr><td>Missing 3-Month Trust Registration Deadline</td><td>Bombay PT Act requires application within 3 months of trust creation. Late applications attract scrutiny.</td><td>File trust registration immediately after deed execution. Patron tracks the 3-month deadline proactively.</td></tr><tr><td>12A/80G Rejection Due to Documentation</td><td>Rejections when NGO activities not clearly defined in trust deed, financial records missing, or office proof outdated</td><td>Ensure application-ready documentation from the start. Trust deed objectives drafted for 12A/80G compliance.</td></tr><tr><td>Lack of CSR Readiness After Registration</td><td>Many Pune NGOs register but fail to complete 80G and CSR-1 - ineligible for CSR funding from 200+ Hinjewadi/Chakan companies</td><td>Registration package includes 12A + 80G + CSR-1 + NGO Darpan as standard. CSR-ready from day one.</td></tr>

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
            <h2 class="section-title">NGO Registration Fees in Pune - 2026 Schedule</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Fee Component</th><th>Amount</th></tr></thead>
                    <tbody>
                        <tr><td>Trust Registration (Bombay PT Act)</td><td>Patron: Rs 5,999-9,999 | Govt: Rs 100 court fee | Stamp: Rs 500-5,000</td></tr><tr><td>Society Registration</td><td>Patron: Rs 7,999-12,999 | Govt: Rs 500-1,000 | Stamp: Rs 200-500</td></tr><tr><td>Section 8 Company Registration</td><td>Patron: Rs 14,999-24,999 | MCA fees: Rs 2,000-5,000 | DSC: Rs 1,500-3,000/director</td></tr><tr><td>12A + 80G Filing (add-on)</td><td>Rs 4,999 (for any structure)</td></tr><tr><td>CSR-1 + NGO Darpan (add-on)</td><td>Rs 2,999</td></tr><tr><td>Annual Compliance</td><td>Rs 4,999/year (Trust/Society) | Rs 7,999/year (Section 8)</td></tr><tr><td>Patron Accounting Professional Fees</td><td>Starting from INR 4,999 (Exl GST and Govt. Charges)</td></tr>

                    </tbody>
                </table>
                </div>
                <p style="margin-top:16px;font-size:13px;color:var(--text-muted);font-style:italic;">All fees and charges listed are indicative only and do not constitute a binding offer. Final amounts may vary depending on the volume of work and the complexity involved.</p>
                <p style="margin-top:16px;">Professional service charges for drafting, filing, and representation are separate from the statutory fees. The exact fee depends on the complexity of the case, disputed amount, and number of hearings required. Contact us for a detailed quote.</p>
                <p style="margin-top:16px;"><strong>Get a free NGO Registration in Pune consultation - <a href="tel:+919459456700">Call +91 945 945 6700</a> or <a href="https://wa.me/919459456700?text=Hi%2C%20I%20need%20NGO%20registration%20in%20Pune.%20Please%20call%20me." target="_blank">WhatsApp us</a>. No-obligation assessment.</strong></p>
            </div>
        </div>
    </div>
</section>

<!-- SECTION 11: TIMELINE -->
<section class="content-section" id="timeline-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">NGO Registration Timeline in Pune</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Stage</th><th>Estimated Timeline</th></tr></thead>
                    <tbody>
                        <tr><td>Document Preparation</td><td>2-5 days (varies by structure)</td></tr><tr><td>Stamp Paper + Execution (Trust)</td><td>1-2 days</td></tr><tr><td>Filing with Authority</td><td>1-2 days</td></tr><tr><td>Processing by Authority</td><td>Trust: 5-15 days | Society: 10-25 days | Section 8: 20-35 days</td></tr><tr><td>Certificate Issuance</td><td>1-5 days</td></tr><tr><td>12A + 80G Application</td><td>5-7 days (post-registration)</td></tr><tr><td><strong>Total End-to-End (Trust)</strong></td><td><strong>15-30 days</strong></td></tr><tr><td><strong>Total End-to-End (Section 8)</strong></td><td><strong>40-55 days</strong></td></tr>

                    </tbody>
                </table>
                </div>
                <div class="highlight-box" style="margin-top:16px;">
                    
                    <p><strong>Note:</strong> Patron's turnaround: Trust registration certificate in 15-21 working days. 12A and 80G provisional certificates within 30 days of base registration. CSR-1 and NGO Darpan within 10 days. Zero rejection risk with Bombay PT Act-compliant trust deeds drafted by our CS team.</p>

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
            <h2 class="section-title">Why Choose Patron for NGO Registration in Pune</h2>
        </div>
        <div class="features-grid"><article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><h3 class="feature-title">Pune Office Near Charity Commissioner</h3><p class="feature-text">Patron operates from RTC Silver, Wagholi - within easy reach of the Joint Charity Commissioner's office at Dhole Patil Marg. Our team handles stamp paper procurement, physical submissions, and coordination with RoC Pune for Section 8 companies.</p></article><article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2"/></svg></div><h3 class="feature-title">Bombay Public Trusts Act Expertise</h3><p class="feature-text">Maharashtra uses the Bombay PT Act 1950 - not the Indian Trusts Act. We draft trust deeds compliant with Maharashtra's specific requirements including Schedule IX-A audit provisions and Charity Commissioner governance clauses.</p></article><article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg></div><h3 class="feature-title">CSR-Ready NGO from Day One</h3><p class="feature-text">Every registration package includes base registration + 12A + 80G + CSR-1 + NGO Darpan. Your NGO can start receiving donations and CSR funding from Pune's 200+ corporate CSR spenders immediately.</p></article><article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><path d="M12 6v6l4 2"/></svg></div><h3 class="feature-title">Annual Compliance Managed</h3><p class="feature-text">Unlike portals that stop at the certificate, Patron delivers ongoing compliance: Schedule IX-A audit for trusts, ROC returns for Section 8, 12A/80G renewal tracking, and Form 10BD/10BE donor reporting.</p></article></div>
    </div>
</section>

<!-- SECTION 12A: SOCIAL PROOF -->
<section class="content-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Trusted by 10,000+ Businesses Across India</h2>
            <div class="content-text">
                
                <p><strong>10,000+ Businesses Served | 4.9 Google Rating | 50,000+ Docs Filed | 15+ Years</strong></p><p>Trusted by Hyundai, Asian Paints, Bridgestone and businesses across India. With offices in Pune, Mumbai, Delhi, and Gurugram, Patron serves Pune NGOs with local office presence and a pan-India CA and CS team.</p>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 13: SELF-FILING vs PROFESSIONAL COMPARISON -->
<section class="content-section" id="comparison-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Trust vs Society vs Section 8 Company - Comparison</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Feature</th><th>Trust</th><th>Society</th><th>Section 8 Company</th></tr></thead>
                    <tbody>
                        <tr><td>Governing Law</td><td>Bombay Public Trusts Act, 1950 (Maharashtra)</td><td>Societies Registration Act, 1860</td><td>Companies Act, 2013</td></tr><tr><td>Minimum Members</td><td>2 trustees</td><td>7 founding members</td><td>2 directors + 2 shareholders</td></tr><tr><td>Jurisdiction</td><td>Joint Charity Commissioner, Pune</td><td>Registrar of Societies (via Charity Commissioner)</td><td>RoC, Pune (MCA)</td></tr><tr><td>Operational Scope</td><td>State-level (Maharashtra)</td><td>State-level</td><td>Pan-India</td></tr><tr><td>Stamp Duty</td><td>Maharashtra stamp paper required</td><td>Minimal</td><td>Exempt</td></tr><tr><td>Audit</td><td>Schedule IX-A with Charity Commissioner</td><td>If directed by Registrar</td><td>Mandatory under Companies Act</td></tr><tr><td>CSR Eligibility</td><td>Yes (with 80G + CSR-1)</td><td>Yes (with 80G + CSR-1)</td><td>Yes (with 80G + CSR-1)</td></tr><tr><td>Best For</td><td>Long-term charitable/religious trusts</td><td>Educational/cultural/sports bodies</td><td>Large-scale NGOs; institutional credibility</td></tr>

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
            <h2 class="section-title">Related NGO and Business Registration Services</h2>
            <div class="content-text">
                
                <ul><li><a href="/ngo-registration">NGO Registration in India</a> - Our national NGO registration service</li><li><a href="/fcra-registration">FCRA Registration</a> - For NGOs receiving foreign donations</li><li><a href="/statutory-audit">Statutory Audit</a> - Mandatory audit for Section 8 companies</li><li><a href="/income-tax-return">Income Tax Return Filing</a> - ITR-7 filing for charitable organisations</li><li><a href="/trademark-registration">Trademark Registration</a> - Brand protection for NGO names</li><li><a href="/accounting-services">Accounting Services</a> - Complete accounting for non-profit organisations</li></ul><p>Section 8 Companies are exempt from stamp duty on MOA/AOA. Trust stamp duty in Maharashtra depends on property value in the trust deed. All three structures require 80G + CSR-1 for CSR funding eligibility.</p>

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
                
                <p><strong>Governing Provisions:</strong></p><ul><li>Bombay Public Trusts Act, 1950 - Maharashtra trusts. Registration within 3 months. Annual Schedule IX-A accounts. Unique to Maharashtra.</li><li>Societies Registration Act, 1860 - Society registration. MOA and Rules required.</li><li>Companies Act, 2013 - Section 8 (non-profit company). Section 135 (CSR for companies with net profit > Rs 5 Cr). Schedule VII (eligible CSR activities).</li><li>Income Tax Act, 1961 - Section 12A (NGO income exemption). Section 80G (donor deduction 50%). Form 10A (provisional 3 years). Form 10AB (renewal 5 years).</li><li>Foreign Contribution (Regulation) Act, 2010 - FCRA for foreign donations. 3 years operational history required.</li><li>Maharashtra Stamp Act - Stamp duty on trust deeds based on property value.</li></ul><p><strong>Penalty:</strong> Non-registration under Bombay PT Act: Section 66 penalty. Late 12A/80G renewal: loss of tax exemption.</p><p><strong>Key Portal:</strong> <a href="https://charity.maharashtra.gov.in" target="_blank" rel="noopener">Charity Commissioner Maharashtra (charity.maharashtra.gov.in)</a></p>

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
                    <h2 class="faq-expanded__title">FAQs - NGO Registration in Pune</h2>
                    <p class="faq-expanded__lead">Answers to common questions about NGO registration in Pune. Call +91 945 945 6700.</p>
                    @include('partials.bigin-form', [
                        'variant'  => 'compact',
                        'service'  => 'NGO Registration in Pune',
                        'city'     => 'Pune',
                    ])
                </aside>
                <div class="faq-expanded__list">
                    <div class="faq-expanded__item" id="faq-1">
                        <h3 class="faq-expanded__q">Which office handles trust registration in Pune?</h3>
                        <div class="faq-expanded__a"><p>The Joint Charity Commissioner, Pune at the Public Trusts Registration Office, 45/2, Late B.S. Dhole Patil Marg, Opp. Wadia College, Pune 411 001 handles all public trust registrations under the Bombay Public Trusts Act, 1950. Society registrations also go through the Charity Commissioner. Section 8 Company registrations are handled by RoC, Pune through the MCA portal.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-2">
                        <h3 class="faq-expanded__q">What is the cost of NGO registration in Pune?</h3>
                        <div class="faq-expanded__a"><p>Trust registration starts from Rs 5,999, society from Rs 7,999, and Section 8 company from Rs 14,999 at Patron Accounting. All-inclusive packages cover document drafting, government fees, Maharashtra stamp duty (for trusts), and filing. 12A + 80G costs Rs 4,999 additionally. CSR-1 and NGO Darpan costs Rs 2,999.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-3">
                        <h3 class="faq-expanded__q">How long does NGO registration take in Pune?</h3>
                        <div class="faq-expanded__a"><p>Trust registration takes 7-21 working days from document submission to certificate issuance by the Joint Charity Commissioner. Society takes 15-30 working days. Section 8 Company takes 30-45 working days including MCA licence approval and incorporation. 12A and 80G take additional 15-30 days after base registration.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-4">
                        <h3 class="faq-expanded__q">Is 12A and 80G registration mandatory for NGOs?</h3>
                        <div class="faq-expanded__a"><p>12A is essential for NGO income tax exemption - without it, surplus income is taxed at standard rates. 80G enables donors to claim 50% tax deduction. Both applied via Form 10A on the IT e-Filing portal. Provisional registration valid 3 years, renewable for 5 years via Form 10AB. Under Finance Act 2025-26, NGOs with income below Rs 5 crore can extend 12A for 10 years.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-5">
                        <h3 class="faq-expanded__q">How many members are needed to register an NGO?</h3>
                        <div class="faq-expanded__a"><p>Trust under Bombay Public Trusts Act needs minimum 2 trustees. Society under Societies Registration Act needs minimum 7 founding members. Section 8 Company needs minimum 2 directors and 2 shareholders. All members must be at least 18 years old. For Section 8, at least one director must be an Indian resident.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-6">
                        <h3 class="faq-expanded__q">Can my NGO receive CSR funding after registration?</h3>
                        <div class="faq-expanded__a"><p>Yes, but your NGO must have both 80G registration and CSR-1 registration (filed on MCA portal) to be eligible as a CSR implementing agency. Pune has over 200 companies in Hinjewadi, Kharadi, and Chakan mandated to spend 2% on CSR. Patron's registration package includes CSR-1 to ensure CSR-readiness.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-7">
                        <h3 class="faq-expanded__q">Can I register an NGO online from Pune?</h3>
                        <div class="faq-expanded__a"><p>Section 8 Company registration is fully online through the MCA portal. Trust and society registrations under the Bombay PT Act require physical submission at the Joint Charity Commissioner, Pune. Patron handles both online and physical submissions from our Pune office - you do not need to visit any government office personally.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-8">
                        <h3 class="faq-expanded__q">What annual compliance is required for a registered NGO in Pune?</h3>
                        <div class="faq-expanded__a"><p>Trusts must file annual accounts in Schedule IX-A format with the Charity Commissioner and get accounts audited. Section 8 companies must file AOC-4 and MGT-7 with RoC Pune and hold AGM. All NGOs with 12A/80G must file Form 10BD (statement of donations) and issue Form 10BE annually. ITR by 31 October if audit applicable.</p></div>
                    </div>
                </div>
            </div>


            <!-- Quick Answers -->
            <div class="highlight-box" style="margin-top:32px;">
                <p><strong>Quick Answers</strong></p>
                <p><strong>NGO register karne mein kitna kharcha aata hai?</strong> Trust registration Rs 5,999 se shuru hoti hai. Society Rs 7,999 se. Section 8 Company Rs 14,999 se. 12A aur 80G ka alag Rs 4,999 lagta hai.</p><p><strong>Kya Maharashtra mein Indian Trusts Act lagu hota hai?</strong> Nahi. Maharashtra mein Bombay Public Trusts Act, 1950 lagu hota hai. Ye zyada strict hai lekin trust ki credibility bhi zyada hoti hai.</p><p><strong>CSR funding ke liye kya chahiye?</strong> 80G certificate + CSR-1 registration (MCA portal pe) + NGO Darpan registration. Teeno ke bina koi company CSR fund nahi de sakti.</p>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 18: URGENCY CTA -->
<section class="content-section" style="background: var(--orange-lighter) !important; border-left: 4px solid var(--orange);">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Every Day Without Registration Is a Day of Lost Funding</h2>
            <div class="content-text">
                
                <p>Under the Bombay Public Trusts Act, trust registration must be filed within 3 months of creation. 12A and 80G provisional registrations are valid only 3 years. Companies with net profit above Rs 5 crore must spend 2% on CSR by 31 March each year - and they can only fund NGOs with valid 80G and CSR-1 certifications. Every day without registration is a day of lost funding opportunity.</p><p><strong>Register your NGO today. <a href="tel:+919459456700">Call +91 945 945 6700</a> or <a href="https://wa.me/919459456700?text=Hi%2C%20I%20need%20NGO%20registration%20in%20Pune." target="_blank">WhatsApp us</a>.</strong></p>

            </div>
        </div>
    </div>
</section>

<!-- CONCLUSION + CTA BLOCK (Dark) -->
<section class="content-section" style="background: var(--blue) !important;">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title" style="color:#FFFFFF !important;">Register Your Pune NGO and Start Receiving Funding</h2>
            <div class="content-text" style="text-align:left;">
                
                <p style="color:rgba(255,255,255,0.85);">NGO registration in Pune establishes a legally recognised non-profit entity that can accept donations, receive CSR funding from Pune's corporate base, and apply for government grants through Trust, Society, or Section 8 Company structures.</p><p style="color:rgba(255,255,255,0.85);">Patron Accounting's Pune office at RTC Silver, Wagholi serves education NGOs, healthcare organisations, environmental groups, and CSR-linked NGOs across Pune. With 10,000+ businesses served and direct experience at the Joint Charity Commissioner, Pune and RoC, Pune, Patron delivers end-to-end NGO registration with 12A/80G/CSR-1/NGO Darpan - making your NGO legally compliant and CSR-ready from day one.</p>

            </div>
            <div style="display:flex;gap:14px;flex-wrap:wrap;margin-top:24px;">
                <a href="tel:+919459456700" style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:var(--orange);color:#fff;border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#128222; Call +91 945 945 6700</a>
                <a href="https://wa.me/919459456700?text=Hi%2C%20I%20need%20NGO%20registration%20in%20Pune.%20Please%20call%20me." target="_blank" style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:#25D366;color:#fff;border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#128172; WhatsApp Us</a>
                <a href="mailto:sales@patronaccounting.com?subject=Enquiry%20for%20NGO%20Registration%20Pune&body=Hello%20Patron%20Accounting%20Team%2C%0A%0AI%20need%20NGO%20registration%20in%20Pune.%0A%0APlease%20get%20in%20touch.%0A%0AThank%20you." style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:transparent;color:#fff;border:2px solid rgba(255,255,255,0.3);border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#9993;&#65039; Email Us</a>
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
            <p style="text-align:center;color:var(--text-muted);font-size:15px;margin-bottom:40px;">Patron offers NGO registration in 8 major cities. Select your city below.</p>
       
            <div class="pa-city-block" style="margin-bottom:40px;"><div class="pa-city-grid"><div class="pa-city-card" style="opacity:0.6; pointer-events:none; border:2px solid var(--orange); position:relative;"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Pune</div><div class="pa-card-sub">Maharashtra</div></div><span style="position:absolute; top:6px; right:8px; font-size:10px; color:var(--orange); font-weight:700; text-transform:uppercase; letter-spacing:0.5px;">You're here</span></div><a href="/ngo-registration/mumbai" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Mumbai</div><div class="pa-card-sub">Maharashtra</div></div></a><a href="/ngo-registration/delhi" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Delhi</div><div class="pa-card-sub">Delhi NCR</div></div></a><a href="/ngo-registration/gurugram" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Gurugram</div><div class="pa-card-sub">Haryana</div></div></a><a href="/ngo-registration/bangalore" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Bangalore</div><div class="pa-card-sub">Karnataka</div></div></a><a href="/ngo-registration/hyderabad" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Hyderabad</div><div class="pa-card-sub">Telangana</div></div></a><a href="/ngo-registration/chennai" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Chennai</div><div class="pa-card-sub">Tamil Nadu</div></div></a><a href="/ngo-registration/kolkata" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Kolkata</div><div class="pa-card-sub">West Bengal</div></div></a></div></div><div class="pa-city-block"><div class="pa-block-title">Related Services in Pune</div><div class="pa-block-sub">End-to-end NGO and business registration</div><div class="pa-cross-grid"><a href="/section-8-company-registration/pune" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Section 8 Company</div><div class="pa-card-sub">Pune</div></div></a><a href="/private-limited-company-registration/pune" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Pvt Ltd Registration</div><div class="pa-card-sub">Pune</div></div></a><a href="/gst-registration/pune" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">GST Registration</div><div class="pa-card-sub">Pune</div></div></a><a href="/trademark-registration/pune" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Trademark Registration</div><div class="pa-card-sub">Pune</div></div></a><a href="/accounting-services/pune" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Accounting Services</div><div class="pa-card-sub">Pune</div></div></a></div></div>
        </div>
    </div>
</section>

<!-- CONTENT FRESHNESS FOOTER -->
<section class="content-section" style="padding:32px;">
    <div class="content-container">
        <div class="text-content" style="font-size:13px;color:var(--text-muted);">
            <p><strong>Content Created:</strong> 13 March 2026 &nbsp;|&nbsp; <strong>Last Updated:</strong> <span id="lastUpdatedFooter">13 March 2026</span> &nbsp;|&nbsp; <strong>Next Review:</strong> 13 September 2026 &nbsp;|&nbsp; <strong>Reviewed By:</strong> CA &amp; CS Team, Patron Accounting LLP</p>
            <p>This page is reviewed semi-annually (Freshness Tier 2) to reflect Bombay PT Act updates, Companies Act amendments, 12A/80G Form 10A/10AB deadline changes, and CSR regulation updates. The next scheduled review is September 2026.</p>
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
