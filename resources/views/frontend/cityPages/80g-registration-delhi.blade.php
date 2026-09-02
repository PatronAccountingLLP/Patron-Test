
@extends('layouts.service-app')

<!-- External Dependencies (loaded by master layout in production) -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Barlow:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,400&family=DM+Sans:opsz,wght@9..40,400;9..40,500;9..40,600;9..40,700&display=swap" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

@section('meta')
    <title>80G Registration in Delhi - Form 10A & Donor Deduction</title>
    <meta name="description" content="CA-assisted 80G registration in Delhi for NGOs. Donor tax deduction certificate via Form 10A. Serving ITO, Civil Lines, Saket NGOs. Call +91 945 945 6700.">
    <link rel="canonical" href="/80g-registration/delhi">
    <meta name="robots" content="index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1">
    <meta property="og:title" content="80G Registration in Delhi - Form 10A & Donor Deduction">
    <meta property="og:description" content="CA-assisted 80G registration in Delhi for NGOs. Donor tax deduction certificate via Form 10A. Serving ITO, Civil Lines, Saket NGOs. Call +91 945 945 6700.">
    <meta property="og:url" content="/80g-registration/delhi">
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="Patron Accounting">
    <meta property="og:image" content="https://www.patronaccounting.com/images/og-default-square.png">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="1200">
    <meta property="og:image:type" content="image/png">
    <meta property="og:image:secure_url" content="https://www.patronaccounting.com/images/og-default-square.png">
    <meta property="og:image:alt" content="Patron Accounting - partner you can rely on">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="80G Registration in Delhi - Form 10A & Donor Deduction">
    <meta name="twitter:description" content="CA-assisted 80G registration in Delhi for NGOs. Donor tax deduction certificate via Form 10A. Serving ITO, Civil Lines, Saket NGOs. Call +91 945 945 6700.">
    <meta name="twitter:image" content="https://www.patronaccounting.com/images/og-default-square.png">
@endsection

@section('schema')
    <script type="application/ld+json">{
  "@context": "https://schema.org",
  "@graph": [
    {
      "@type": "Service",
      "name": "80G Registration in Delhi - Form 10A & Donor Deduction",
      "description": "CA-assisted 80G registration in Delhi for NGOs. Donor tax deduction certificate via Form 10A. Serving ITO, Civil Lines, Saket NGOs. Call +91 945 945 6700.",
      "url": "https://www.patronaccounting.com/80g-registration/delhi",
      "serviceType": "80G Registration in Delhi - Form 10A & Donor Deduction",
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
        "url": "https://www.patronaccounting.com/80g-registration/delhi",
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
          "name": "80G Registration for NGOs - Form 10A & Donor Tax Deduction",
          "item": "https://www.patronaccounting.com/80g-registration"
        },
        {
          "@type": "ListItem",
          "position": 3,
          "name": "80G Registration in Delhi - Form 10A & Donor Deduction",
          "item": "https://www.patronaccounting.com/80g-registration/delhi"
        }
      ]
    },
    {
      "@type": "FAQPage",
      "mainEntity": [
        {
          "@type": "Question",
          "name": "Who handles 80G registration for Delhi NGOs?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "For Delhi-based NGOs, 80G applications are processed by the Principal Commissioner of Income Tax (Exemption) / Director of Income Tax (Exemption), New Delhi. The application is filed online through the IT e-filing portal (incometax.gov.in) using Form 10A. The PCIT(E) reviews the application and issues Form 10AC upon approval. Patron's Delhi CA team handles all e-filing and PCIT(E) coordination."
          }
        },
        {
          "@type": "Question",
          "name": "Can I apply for 80G without 12A?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "No. 12A registration is a mandatory prerequisite for 80G under Section 80G(5) of the Income Tax Act. An NGO must first obtain 12A registration before applying for 80G. Patron's Delhi team verifies 12A status before initiating 80G and files both applications as a bundle if 12A has not been obtained yet."
          }
        },
        {
          "@type": "Question",
          "name": "How much does 80G registration cost in Delhi?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "There is no government filing fee for Form 10A on the IT e-filing portal. Patron's professional fee for 80G registration in Delhi starts from INR 7,499. The 12A + 80G combined bundle costs Rs 7,000 to Rs 12,000. DSC costs Rs 1,000-1,500 if not already obtained. Annual Form 10BE filing costs Rs 2,000-5,000. Call +91 945 945 6700 for a precise quote."
          }
        },
        {
          "@type": "Question",
          "name": "What is Form 10BE and is it mandatory?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Form 10BE is the Statement of Donations that every 80G-registered NGO must file on the IT portal by 31 May each year, listing all donations received with donor PAN, amount and payment mode. It is mandatory since AY 2022-23. Without Form 10BE, donations do not appear in the donor's Annual Information Statement and the donor cannot claim 80G deduction in their ITR."
          }
        },
        {
          "@type": "Question",
          "name": "How long does 80G registration take in Delhi?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Provisional 80G for new Delhi NGOs with valid 12A takes 15-30 working days. Regular approval and renewal takes 30-90 days depending on PCIT(E) workload and queries. The 12A + 80G bundle takes 45-90 working days end-to-end. Document compilation takes 3-5 days. Patron's accurate documentation and proactive PCIT(E) follow-up minimise processing delays."
          }
        },
        {
          "@type": "Question",
          "name": "Can donors claim 100% deduction under 80G?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "100% deduction without any qualifying limit is available only for donations to specific government funds like National Defence Fund, PM National Relief Fund and PM CARES. For donations to most Delhi NGOs (charitable trusts, societies, Section 8 companies), the deduction is 50% of the donated amount subject to 10% of the donor's Adjusted Gross Total Income. Old tax regime only."
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
                        80G Registration in Delhi: CA-Assisted Donor Tax Deduction for NGOs, Trusts and Societies
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
                            <p class="mb-0 text-dark benefit-paragraph"><span>Documents:</span> PAN of NGO, 12A registration order, trust deed/MOA/COI, audited accounts, activity reports, donor list, DSC</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Fees:</span> Starting from Rs 5,000 for 80G registration in Delhi (Patron professional fee)</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Eligibility:</span> All 12A-registered charitable trusts, societies, Section 8 companies in Delhi (not private/family trusts)</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Timeline:</span> Provisional: 15-30 days | Regular: 30-90 days (IT Department processing)</p>
                        </div>
                    </div>

                    <p class="mb-4 fw-bold" style="color: var(--blue); font-size: 15px;">10,000+ Businesses Served | 4.9 Google Rating | Trusted by Delhi NGOs across ITO, Civil Lines, Saket and Connaught Place</p>

                    <div class="hero-cta">
                        <a href="tel:+919459456700" class="btn-video text-decoration-none">
                            <span class="play-circle"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="width:14px;height:14px;color:#fff"><path d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/></svg></span>
                            Call +91 945 945 6700
                        </a>
                        <a href="mailto:sales@patronaccounting.com" class="btn-sample text-decoration-none">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="width:18px;height:18px;"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,12 2,6"/></svg>
                            Email Us
                        </a>
                        <a href="https://wa.me/919459456700?text=Hi%2C%20I%20need%20help%20with%2080G%20Registration%20in%20Delhi.%20Please%20call%20me." target="_blank" class="btn-sample text-decoration-none" rel="noopener">
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
                                            'service'  => '80G Registration in Delhi',
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
    'ctaText'    => 'Get expert CA-assisted 80G registration in Delhi with end-to-end support from Form 10A to Form 10BE compliance.',
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
            <a href="#what-section" class="toc-btn">What Is 80G</a>
            <a href="#who-section" class="toc-btn">Who Needs It</a>
            <a href="#services-section" class="toc-btn">Services</a>
            <a href="#procedure-section" class="toc-btn">Process</a>
            <a href="#documents-section" class="toc-btn">Documents</a>
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
            <h2 class="section-title">80G Registration in Delhi - Overview</h2>
            <div class="content-text">
                <div class="highlight-box" style="margin-bottom:20px;">
                    <p><strong>&#128204; TL;DR - 80G Registration in Delhi Services at a Glance</strong></p>
                    <p>80G registration under Section 80G of the Income Tax Act, 1961 enables donors to a registered NGO to claim a tax deduction of 50% of their donation amount (subject to 10% of Adjusted Gross Total Income) from their taxable income. For Delhi NGOs - trusts, societies and Section 8 companies - 80G registration is filed online through the Income Tax e-filing portal (incometax.gov.in) with the Principal Commissioner of Income Tax (Exemption) / Director of Income Tax (Exemption), New Delhi. 12A registration is a mandatory prerequisite. Since the Finance Act 2020, provisional 80G approval is valid for 3 years and regular approval for 5 years, requiring renewal. The NGO must issue Form 10BE (Statement of Donations) to all donors annually.</p>
                </div>
                <p>Delhi's non-profit sector - with over 90,000 registered NGOs - operates in one of India's most CSR-rich environments. Corporate headquarters in Connaught Place, Aerocity and Gurugram actively deploy CSR budgets under Section 135 of the Companies Act, 2013, and individual donors across Delhi's affluent neighbourhoods in South Delhi, Vasant Kunj and Greater Kailash seek tax-efficient giving channels. For a Delhi NGO, 80G registration is the critical certificate that unlocks this donor and CSR funding ecosystem by providing donors a direct tax deduction on their contributions. Learn more about <a href="/ngo-registration">NGO Registration across India</a>.</p>
                <p>Section 80G of the Income Tax Act, 1961 allows any taxpayer - individual, HUF, company or firm - who donates to an 80G-registered organisation to claim a deduction of 50% of the donation amount from their taxable income, subject to 10% of their Adjusted Gross Total Income. This benefit applies only under the old tax regime. For most Delhi NGOs, the 50% deduction with the 10% qualifying limit is the applicable category. The NGO must have a valid <a href="#">12A and 80G registration</a> before it can apply for 80G. For Delhi NGOs, 80G applications are processed by the PCIT(E) / DIT(E), New Delhi through the IT e-filing portal using Form 10A. After registration, the NGO must file <a href="/income-tax-return">Income Tax Returns</a> and Form 10BE annually.</p>
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
                <h2 class="section-title">What Is 80G Registration?</h2>
                <div class="content-text what-is-definition">
                    
                    <p>80G registration is the approval granted by the Income Tax Department under Section 80G of the Income Tax Act, 1961, enabling donors to a registered NGO to claim tax deductions on their donations while filing income tax returns.</p>
                    <p>When a donor contributes to an 80G-registered Delhi NGO, they can claim a deduction of 50% of the donated amount from their Gross Total Income, subject to a qualifying limit of 10% of their Adjusted Gross Total Income. For example, if a Delhi-based corporate donor has an Adjusted GTI of Rs 1 crore and donates Rs 15 lakh to an 80G-registered trust, the qualifying amount is Rs 10 lakh (10% of Rs 1 crore), and the deduction is Rs 5 lakh (50% of Rs 10 lakh). This deduction is available only under the old tax regime - donors opting for the new regime under Section 115BAC cannot claim 80G benefits. Cash donations exceeding Rs 2,000 are not eligible; donations must be made via cheque, bank transfer or online modes to qualify.</p>
                    <p>80G registration is distinct from 12A registration. While 12A exempts the NGO's own income from tax, 80G provides the benefit to the donor. Both are issued by the same authority - the PCIT(E) / DIT(E), New Delhi for Delhi NGOs - and can be applied for simultaneously or sequentially. However, 12A is a mandatory prerequisite for 80G. The 80G registration number assigned to the NGO must appear on every donation receipt issued to donors, and the NGO must file Form 10BE (Statement of Donations) annually on the IT portal for all donors.</p>

                </div>
                <div class="highlight-box" style="margin-top:20px;">
                    <p><strong>Key Terms for 80G Registration in Delhi:</strong></p>
                    <p><strong>Section 80G:</strong> Provision under the Income Tax Act, 1961 that allows donors to claim tax deduction on donations made to approved charitable organisations.</p>
                    <p><strong>12A Registration:</strong> Income tax exemption for the NGO itself - mandatory prerequisite before applying for 80G.</p>
                    <p><strong>Form 10A:</strong> Application form for fresh/provisional 80G registration filed on the IT e-filing portal.</p>
                    <p><strong>Form 10AC:</strong> Approval order issued by the PCIT(E) granting 80G registration with validity period and conditions.</p>
                    <p><strong>Form 10BE:</strong> Annual Statement of Donations that every 80G-registered NGO must file by 31 May each year.</p>
                    <p><strong>PCIT(E)/DIT(E):</strong> Principal Commissioner / Director of Income Tax (Exemption) - the authority processing 80G applications for Delhi NGOs.</p>
                    <p><strong>Adjusted GTI:</strong> Adjusted Gross Total Income - the base for calculating the 10% qualifying limit for 80G deductions.</p>

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
                            <text x="100" y="170" font-size="10" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial, sans-serif">80G Registration in Delhi</text>
                        </svg>
                    </div>
                    <div class="illustration-badge">
                        <span>Income Tax Act 1961</span>
                        <strong>Section 80G Approval</strong>
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
            <h2 class="section-title">Who Needs 80G Registration in Delhi?</h2>
            <div class="content-text">
                
                <p><strong>Charitable Trusts in Delhi:</strong> Trusts registered with the Sub-Registrar in Delhi that receive donations from individual or corporate donors should obtain 80G registration immediately after securing 12A. Educational trusts running schools and coaching centres in Rohini, Dwarka and Vasant Kunj, healthcare trusts operating clinics near AIIMS and Safdarjung, and poverty relief trusts active in East Delhi and North Delhi all benefit from 80G as it incentivises their donors to give more generously knowing they receive a tax deduction.</p>
                <p><strong>Societies Registered in Delhi:</strong> Societies registered with the Registrar of Societies (East), Delhi under the Societies Registration Act, 1860 that depend on donations - cultural societies in Connaught Place, women's welfare societies in Civil Lines, educational associations in Saket and environmental groups in South Delhi - need 80G to remain competitive in Delhi's crowded fundraising landscape. Without 80G, donors receive no tax benefit and are likely to redirect their contributions to 80G-registered alternatives. You may also explore <a href="/ngo-registration/delhi">NGO Registration in Delhi</a> for setting up a new society.</p>
                <p><strong>Section 8 Companies in Delhi:</strong> <a href="/section8-company-registration">Section 8 companies</a> incorporated through RoC Delhi at Nehru Place that operate for charitable purposes need 80G to attract both individual donors and corporate CSR funding. Under Section 135 of the Companies Act, most CSR policies of Delhi-headquartered corporates require the implementing agency to hold valid 80G registration. Without 80G, a Delhi Section 8 company is effectively excluded from the corporate CSR funding pipeline.</p>
                <p><strong>NRI and Foreign Donor Recipients:</strong> Delhi NGOs seeking to receive donations from NRIs and foreign donors must note that while 80G benefits apply to Indian taxpayers, the registration also enhances the NGO's credibility for international funding applications. FCRA-registered Delhi NGOs with valid 80G are perceived as more transparent and compliant by foreign donors and grant-making foundations.</p>
                <p><strong>Existing NGOs Requiring Re-Registration:</strong> Existing Delhi NGOs that obtained 80G under the old one-time approval regime must re-register under the new time-bound provisions introduced by the Finance Act 2020 (Section 80G(5)). Provisional approval is valid for 3 years and regular approval for 5 years. Patron's Delhi CA team handles urgent re-registration for non-compliant NGOs at risk of losing their 80G status.</p>

            </div>
            </div>
        </div>
    </div>
</section>

<!-- SECTION 5: OUR SERVICES -->
<section class="content-section" id="services-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Services Included in 80G Registration in Delhi</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Service</th><th>What We Do</th></tr></thead>
                    <tbody>
                        <tr><td>12A Prerequisite Verification</td><td>Patron's Delhi CA team confirms that your NGO holds valid 12A registration (or files 12A simultaneously) before proceeding with the 80G application. 12A is mandatory - filing 80G without 12A results in rejection.</td></tr>
                        <tr><td>Form 10A Preparation and E-Filing</td><td>Online preparation of Form 10A on the Income Tax e-filing portal for fresh or provisional 80G registration. Includes selection of correct assessment year, attachment of all required documents, PAN verification and submission via DSC or EVC. Application routed to PCIT(E) / DIT(E), New Delhi.</td></tr>
                        <tr><td>Document Compilation</td><td>Self-certified copies of 12A/12AB registration order, trust deed/MOA/COI, PAN card, FCRA registration (if applicable), audited annual accounts (up to 3 years), activity reports, governing body details, donor list with PAN and addresses, Delhi office address proof.</td></tr>
                        <tr><td>PCIT(E) Query Response</td><td>Professional responses to PCIT(E) queries about genuineness of activities, fund utilisation, governing body composition or objects clause with supporting evidence and follow-up with IT Exemption office in New Delhi.</td></tr>
                        <tr><td>Form 10AC Receipt and Verification</td><td>Upon approval, Patron verifies the 80G registration number, validity period, conditions and applicable deduction category from the Form 10AC order and archives it for the Delhi NGO.</td></tr>
                        <tr><td>Form 10BE Setup and Annual Filing</td><td>Since AY 2022-23, every 80G-registered NGO must file Form 10BE (Statement of Donations) on the IT portal by 31 May each year. Patron sets up and files Form 10BE annually for Delhi NGO clients.</td></tr>
                        <tr><td>Donation Receipt Template</td><td>Compliant donation receipt template containing all mandatory fields: NGO name, address, PAN, 80G registration number, validity period, donor name, donation amount, date, mode of payment and unique receipt number.</td></tr>
                        <tr><td>Renewal Tracking</td><td>Provisional 80G (3 years) must be converted to regular at least 6 months before expiry. Regular 80G (5 years) renewed via Form 10AB. Patron tracks all deadlines and files renewal applications proactively.</td></tr>

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
            <h2 class="section-title">How 80G Registration Works in Delhi</h2>
            <p class="section-subtitle" style="text-align:left;max-width:100%;">End-to-end 80G registration process for Delhi NGOs - from 12A prerequisite verification through Form 10A e-filing to PCIT(E) approval and post-registration compliance. 80G is filed 100% online through the IT e-filing portal. Patron's Delhi office in Rohini handles all e-filing, query responses and in-person follow-up.</p>
        </header>
        <div class="steps-container">
            <div class="step-card">
    <div class="step-content">
        <span class="step-badge">Step 1</span>
        <h3 class="step-title">Verify 12A Registration Status</h3>
        <p class="step-description">Before initiating 80G, Patron's Delhi CA team verifies that your NGO holds valid 12A registration under Section 12AB. If 12A has not been obtained, Patron files both 12A and 80G as a bundled application. For existing Delhi NGOs, we verify whether the 12A registration has been re-registered under the Finance Act 2020 provisions.</p>
        <div class="step-highlights">
            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>12A prerequisite check</span>
            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Bundle option available</span>
        </div>
    </div>
    <div class="step-visual">
        <div class="step-illustration">
            <div class="illustration-icon">
                <svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <rect x="20" y="10" width="80" height="60" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/>
                    <circle cx="60" cy="35" r="15" fill="#FFF3E0" stroke="#F5A623" stroke-width="1.2"/>
                    <path d="M54 35l4 4 8-8" stroke="#10B981" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"/>
                    <line x1="30" y1="80" x2="90" y2="80" stroke="#14365F" stroke-width="1.5" opacity="0.3"/>
                </svg>
            </div>
            <span class="illustration-label">12A Verified</span>
            <span class="step-number-large">01</span>
        </div>
    </div>
</div>
<div class="step-card">
    <div class="step-content">
        <span class="step-badge">Step 2</span>
        <h3 class="step-title">Compile Documents and Prepare Application</h3>
        <p class="step-description">All required documents are compiled: 12A/12AB registration order (Form 10AC), trust deed/MOA/COI, NGO PAN card, audited annual accounts (up to 3 years), activity reports with evidence of charitable work, governing body details, donor list with PAN, Delhi office address proof and FCRA registration if applicable.</p>
        <div class="step-highlights">
            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Complete document set</span>
            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>CSR evidence included</span>
        </div>
    </div>
    <div class="step-visual">
        <div class="step-illustration">
            <div class="illustration-icon">
                <svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <rect x="15" y="5" width="90" height="70" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/>
                    <line x1="30" y1="25" x2="90" y2="25" stroke="#F5A623" stroke-width="3" stroke-linecap="round"/>
                    <line x1="30" y1="40" x2="80" y2="40" stroke="#14365F" stroke-width="2" stroke-linecap="round" opacity="0.3"/>
                    <line x1="30" y1="52" x2="70" y2="52" stroke="#14365F" stroke-width="2" stroke-linecap="round" opacity="0.3"/>
                    <rect x="70" y="55" width="30" height="30" rx="4" fill="#E8F5E9" stroke="#10B981" stroke-width="1"/>
                    <path d="M79 70l4 4 8-8" stroke="#10B981" stroke-width="2" stroke-linecap="round"/>
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
        <h3 class="step-title">File Form 10A on Income Tax E-Filing Portal</h3>
        <p class="step-description">Patron logs into the IT e-filing portal (incometax.gov.in), selects Form 10A, and files the 80G application. The form captures the NGO's PAN, assessment year, type of approval, objects clause, activities, financial details and compliance history. All documents are uploaded and the form is signed using DSC or EVC. For Delhi NGOs, the application is automatically routed to the PCIT(E) / DIT(E), New Delhi.</p>
        <div class="step-highlights">
            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Online filing via DSC/EVC</span>
            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Routed to PCIT(E) Delhi</span>
        </div>
    </div>
    <div class="step-visual">
        <div class="step-illustration">
            <div class="illustration-icon">
                <svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <rect x="20" y="10" width="80" height="55" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/>
                    <rect x="30" y="20" width="60" height="8" rx="2" fill="#E8712C" opacity="0.3"/>
                    <rect x="30" y="35" width="40" height="6" rx="2" fill="#14365F" opacity="0.15"/>
                    <rect x="30" y="48" width="50" height="6" rx="2" fill="#14365F" opacity="0.15"/>
                    <path d="M60 70L55 80L65 80Z" fill="#10B981"/>
                    <rect x="50" y="80" width="20" height="5" rx="2" fill="#10B981" opacity="0.5"/>
                </svg>
            </div>
            <span class="illustration-label">Form 10A Filed</span>
            <span class="step-number-large">03</span>
        </div>
    </div>
</div>
<div class="step-card">
    <div class="step-content">
        <span class="step-badge">Step 4</span>
        <h3 class="step-title">PCIT(E) / DIT(E) Delhi Reviews the Application</h3>
        <p class="step-description">The PCIT(E) / DIT(E), New Delhi reviews the 80G application including verification that 12A registration is valid, objects clause aligns with charitable purposes, funds are utilised exclusively for stated objects, no income is distributed to members, and activities genuinely benefit the public. Patron's Delhi CA team responds to queries within the stipulated timeline.</p>
        <div class="step-highlights">
            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Professional query response</span>
            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>PCIT(E) follow-up</span>
        </div>
    </div>
    <div class="step-visual">
        <div class="step-illustration">
            <div class="illustration-icon">
                <svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <circle cx="60" cy="40" r="30" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/>
                    <circle cx="60" cy="40" r="12" fill="#FFF3E0" stroke="#F5A623" stroke-width="1.2"/>
                    <line x1="69" y1="49" x2="85" y2="65" stroke="#14365F" stroke-width="3" stroke-linecap="round"/>
                    <rect x="20" y="75" width="80" height="6" rx="3" fill="#E8712C" opacity="0.2"/>
                </svg>
            </div>
            <span class="illustration-label">Under Review</span>
            <span class="step-number-large">04</span>
        </div>
    </div>
</div>
<div class="step-card">
    <div class="step-content">
        <span class="step-badge">Step 5</span>
        <h3 class="step-title">Receive Form 10AC - 80G Approval Order</h3>
        <p class="step-description">Upon satisfaction, the PCIT(E) issues Form 10AC granting 80G approval. The order specifies the 80G registration number, validity period (3 years for provisional, 5 years for regular), applicable conditions and the deduction category. The NGO can now issue donation receipts with the 80G registration number, enabling donors to claim tax deductions.</p>
        <div class="step-highlights">
            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>80G number assigned</span>
            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Donation receipts enabled</span>
        </div>
    </div>
    <div class="step-visual">
        <div class="step-illustration">
            <div class="illustration-icon">
                <svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <rect x="20" y="10" width="80" height="60" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/>
                    <circle cx="60" cy="30" r="12" fill="#E8F5E9" stroke="#10B981" stroke-width="1.5"/>
                    <path d="M54 30l4 4 8-8" stroke="#10B981" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"/>
                    <rect x="35" y="50" width="50" height="8" rx="2" fill="#F5A623" opacity="0.3"/>
                    <path d="M55 75L60 68L65 75Z" fill="#F5A623"/>
                    <rect x="50" y="75" width="20" height="12" rx="2" fill="#FFF3E0" stroke="#F5A623" stroke-width="1"/>
                </svg>
            </div>
            <span class="illustration-label">80G Approved</span>
            <span class="step-number-large">05</span>
        </div>
    </div>
</div>
<div class="step-card">
    <div class="step-content">
        <span class="step-badge">Step 6</span>
        <h3 class="step-title">Set Up Form 10BE Filing and Donor Receipt Process</h3>
        <p class="step-description">Post-80G approval, Patron configures the Delhi NGO's Form 10BE filing process. Form 10BE must be filed annually by 31 May on the IT portal, listing all donations received during the previous financial year with donor PAN, amount, date and mode of payment. Patron also provides a compliant donation receipt template and sets up renewal tracking - Form 10AB must be filed at least 6 months before expiry.</p>
        <div class="step-highlights">
            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Annual 10BE filing setup</span>
            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Renewal tracking active</span>
        </div>
    </div>
    <div class="step-visual">
        <div class="step-illustration">
            <div class="illustration-icon">
                <svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <rect x="15" y="10" width="50" height="40" rx="4" fill="#F0F4F8" stroke="#14365F" stroke-width="1.2"/>
                    <line x1="25" y1="25" x2="55" y2="25" stroke="#F5A623" stroke-width="2" stroke-linecap="round"/>
                    <line x1="25" y1="35" x2="45" y2="35" stroke="#14365F" stroke-width="1.5" opacity="0.3"/>
                    <rect x="55" y="30" width="50" height="40" rx="4" fill="#F0F4F8" stroke="#14365F" stroke-width="1.2"/>
                    <line x1="65" y1="45" x2="95" y2="45" stroke="#F5A623" stroke-width="2" stroke-linecap="round"/>
                    <line x1="65" y1="55" x2="85" y2="55" stroke="#14365F" stroke-width="1.5" opacity="0.3"/>
                    <rect x="35" y="60" width="50" height="30" rx="4" fill="#E8F5E9" stroke="#10B981" stroke-width="1.2"/>
                    <path d="M55 72l4 4 8-8" stroke="#10B981" stroke-width="2" stroke-linecap="round"/>
                </svg>
            </div>
            <span class="illustration-label">Compliance Set</span>
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
            <h2 class="section-title">Documents Required for 80G Registration in Delhi</h2>
            <div class="content-text">
                
                <ul>
                    <li><strong>12A/12AB Registration Order (Form 10AC):</strong> Self-certified copy of the existing 12A or 12AB registration order. This is the mandatory prerequisite - 80G cannot be granted without valid 12A.</li>
                    <li><strong>PAN Card of NGO:</strong> Valid PAN of the registered trust, society or Section 8 company.</li>
                    <li><strong>Registration Certificate:</strong> Self-certified trust deed (for trusts), MOA and Rules & Regulations (for societies registered with Registrar of Societies Delhi), or Certificate of Incorporation (for Section 8 companies registered with RoC Delhi).</li>
                    <li><strong>Audited Annual Accounts:</strong> Copies of audited financial statements for up to 3 years (or since inception). Income & expenditure statement, balance sheet and receipts & payments account.</li>
                    <li><strong>Activity Reports:</strong> Detailed reports on charitable activities with supporting evidence - beneficiary lists, programme photographs, impact reports.</li>
                    <li><strong>Donor List:</strong> List of donors with names, addresses and PAN numbers for the preceding 3 years. Donation amounts, dates and modes of payment.</li>
                    <li><strong>Governing Body Details:</strong> Full list of trustees/managing committee members/directors with names, addresses, PAN and contact details.</li>
                    <li><strong>Office Address Proof (Delhi):</strong> Electricity bill, water bill or house tax receipt. NOC from property owner if rented.</li>
                    <li><strong>FCRA Registration (if applicable):</strong> Self-certified copy for NGOs receiving foreign contributions.</li>
                    <li><strong>DARPAN Registration:</strong> NGO DARPAN portal registration details. PCIT(E) Delhi increasingly requests DARPAN ID during 80G processing.</li>
                    <li><strong>Digital Signature Certificate:</strong> DSC of authorised signatory for signing Form 10A electronically.</li>
                </ul>
                <div class="highlight-box" style="margin-top:16px;">
                    <p><strong>Delhi-specific tip:</strong> Delhi NGOs receiving CSR donations from corporates should include CSR-1 registration details, CSR implementation reports and evidence of Schedule VII activities in their 80G application. This strengthens the application before the PCIT(E) and demonstrates genuine charitable utilisation of funds.</p>
                </div>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 9: CHALLENGES -->
<section class="content-section" id="challenges-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Common Challenges in 80G Registration in Delhi</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Challenge</th><th>Impact</th><th>How Patron Accounting Solves It</th></tr></thead>
                    <tbody>
                        <tr><td>Filing 80G Without 12A</td><td>Application rejected - most common rejection reason for Delhi NGOs</td><td>Patron always verifies 12A status first and files both as a bundle if needed</td></tr>
                        <tr><td>Provisional vs Regular Validity Confusion</td><td>Old one-time 80G holders assume approval is still valid without re-registration</td><td>Patron reviews each Delhi NGO's registration history and files correct renewal form</td></tr>
                        <tr><td>Form 10BE Non-Filing</td><td>Donors' donations do not appear in their AIS - they cannot claim 80G deduction</td><td>Patron files Form 10BE annually by 31 May for all Delhi 80G clients</td></tr>
                        <tr><td>PCIT(E) Activity Genuineness Queries</td><td>Delhi's high NGO density means PCIT(E) scrutinises applications carefully - delays possible</td><td>Patron prepares detailed activity evidence packages with photographs, beneficiary testimonials and impact data</td></tr>

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
            <h2 class="section-title">80G Registration Fees in Delhi</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Fee Component</th><th>Amount</th></tr></thead>
                    <tbody>
                        <tr><td>Government Fee (Form 10A/10AB)</td><td class="table-amount">NIL - No filing fee on the IT e-filing portal</td></tr>
                        <tr><td>DSC for Authorised Signatory</td><td class="table-amount">Rs 1,000 - Rs 1,500 (if not already obtained)</td></tr>
                        <tr><td>Patron Accounting Professional Fees (80G Only)</td><td class="table-amount">INR 7,499 (Exl GST and Govt. Charges)</td></tr>
                        <tr><td>Patron Fee (12A + 80G Bundle)</td><td class="table-amount">Rs 7,000 - Rs 12,000</td></tr>
                        <tr><td>Form 10BE Annual Filing</td><td class="table-amount">Rs 2,000 - Rs 5,000/year</td></tr>
                        <tr><td>Re-Registration/Renewal (Form 10AB)</td><td class="table-amount">Rs 5,000 - Rs 8,000 (every 5 years)</td></tr>

                    </tbody>
                </table>
                </div>
                <p style="margin-top:16px;font-size:13px;color:var(--text-muted);font-style:italic;">All fees and charges listed are indicative only and do not constitute a binding offer. Final amounts may vary depending on the volume of work and the complexity involved.</p>
                <p style="margin-top:16px;">Professional service charges for drafting, filing, and representation are separate from the statutory fees. The exact fee depends on the complexity of the case, disputed amount, and number of hearings required. Contact us for a detailed quote.</p>
                <p style="margin-top:16px;"><strong>Get a free 80G Registration in Delhi consultation - <a href="tel:+919459456700">Call +91 945 945 6700</a> or <a href="https://wa.me/919459456700?text=Hi%2C%20I%20need%20help%20with%2080G%20Registration%20in%20Delhi.%20Please%20call%20me." target="_blank" rel="noopener">WhatsApp us</a>. No-obligation assessment.</strong></p>
            </div>
        </div>
    </div>
</section>

<!-- SECTION 11: TIMELINE -->
<section class="content-section" id="timeline-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Timeline for 80G Registration in Delhi</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Stage</th><th>Estimated Timeline</th></tr></thead>
                    <tbody>
                        <tr><td>12A Verification/Filing</td><td>0 days (if 12A exists) / 20-35 days (if needed)</td></tr>
                        <tr><td>Document Compilation</td><td>3-5 days</td></tr>
                        <tr><td>Form 10A E-Filing</td><td>1 day - Online filing on incometax.gov.in</td></tr>
                        <tr><td>PCIT(E) Processing (Provisional)</td><td>15-30 days - For new Delhi NGOs</td></tr>
                        <tr><td>PCIT(E) Processing (Regular/Renewal)</td><td>30-90 days - Including query response</td></tr>
                        <tr><td>Form 10AC Issuance</td><td>Upon approval - Digital order on IT portal</td></tr>
                        <tr><td>Total (Provisional, 12A exists)</td><td>20-35 working days</td></tr>
                        <tr><td>Total (Bundle 12A + 80G)</td><td>45-90 working days</td></tr>

                    </tbody>
                </table>
                </div>
                <div class="highlight-box" style="margin-top:16px;">
                    
                    <p><strong>Delhi Processing Note:</strong> 80G registration is filed 100% online through the IT e-filing portal. No physical visit to the PCIT(E)/DIT(E) office in New Delhi is required for filing. However, the PCIT(E) may summon the organisation for inquiry. Patron's Delhi office in Rohini handles all e-filing, query responses and any in-person follow-up required with the IT Exemption office.</p>

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
            <h2 class="section-title">Why Choose Patron Accounting for 80G Registration in Delhi</h2>
        </div>
        <div class="features-grid">
            <article class="feature-card">
                <div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div>
                <h3>Delhi Office at Rohini</h3>
                <p>In-person consultations for NGO founders and trust managers. Document review, DSC coordination, Form 10BE setup and PCIT(E) follow-up available on-site.</p>
            </article>
            <article class="feature-card">
                <div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2"><path d="M14 2H6a2 2 0 00-2 2v16a2 2 0 002 2h12a2 2 0 002-2V8z"/><path d="M14 2v6h6M16 13H8M16 17H8"/></svg></div>
                <h3>12A + 80G Bundled Filing</h3>
                <p>For Delhi NGOs without 12A, Patron files both applications as a bundle - saving time, reducing professional fees and ensuring prerequisite compliance. Both go to the same PCIT(E).</p>
            </article>
            <article class="feature-card">
                <div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div>
                <h3>Form 10BE Compliance</h3>
                <p>Patron is among the few Delhi CA firms that include Form 10BE annual filing as part of the 80G service. Without Form 10BE, your donors cannot claim their deduction. We file by 31 May every year.</p>
            </article>
            <article class="feature-card">
                <div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg></div>
                <h3>Delhi CSR Ecosystem Advisory</h3>
                <p>Patron advises Delhi NGOs on positioning for CSR funding from corporates in Connaught Place, Aerocity and Gurugram. Valid 80G + CSR-1 + compliant donation receipts - all in place.</p>
            </article>
        </div>
    </div>
</section>

<!-- SECTION 12A: SOCIAL PROOF -->
<section class="content-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Trusted by 10,000+ Businesses Across India</h2>
            <div class="content-text">
                
                <p><strong>10,000+ Businesses | 4.9 Google Rating | 50,000+ Docs Filed | 15+ Years</strong></p>
                <p>With offices in Pune, Mumbai, Delhi and Gurugram, Patron serves Delhi NGOs with both in-person and online 80G registration support. Our dedicated Delhi CA team at Rohini has helped hundreds of trusts, societies and Section 8 companies secure 80G approval from the PCIT(E)/DIT(E), New Delhi.</p>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 13: SELF-FILING vs PROFESSIONAL COMPARISON -->
<section class="content-section" id="comparison-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Patron vs Other 80G Registration Providers in Delhi</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Factor</th><th>Patron Accounting (Delhi)</th><th>Other Providers</th></tr></thead>
                    <tbody>
                        <tr><td>Service Model</td><td>CA-managed with Delhi office + PCIT(E) follow-up</td><td>Agent-based, no professional oversight</td></tr>
                        <tr><td>12A Prerequisite</td><td>Verified and filed if missing (bundle option)</td><td>Often missed; 80G rejected</td></tr>
                        <tr><td>Form 10BE</td><td>Annual filing included in service</td><td>Not included; donors cannot claim deduction</td></tr>
                        <tr><td>Donation Receipt Template</td><td>Compliant template provided with 80G number</td><td>Not provided</td></tr>
                        <tr><td>CSR-1/DARPAN</td><td>Same CA team handles all registrations</td><td>80G only; CSR compliance separate</td></tr>
                        <tr><td>Pricing</td><td>INR 7,499 onwards (transparent)</td><td>Rs 3,000-7,000 base + hidden charges</td></tr>

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
            <h2 class="section-title">Related Services for Delhi NGOs</h2>
            <div class="content-text">
                
                <ul>
                    <li><a href="/ngo-registration">NGO Registration in India</a> - Parent service covering all NGO formation types across India</li>
                    <li><a href="#">12A and 80G Registration</a> - Combined 12A and 80G registration services across India</li>
                    <li><a href="/section8-company-registration">Section 8 Company Registration</a> - Incorporate a non-profit company under Section 8 of the Companies Act</li>
                    <li>Society Registration - Register a society under the Societies Registration Act, 1860</li>
                    <li><a href="/income-tax-return">Income Tax Return Filing</a> - ITR filing services for NGOs and individuals across India</li>
                    <li><a href="/statutory-audit">Statutory Audit Service</a> - Annual audit for NGOs to maintain compliance and strengthen 80G application</li>
                </ul>

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
                
                <p><strong>Income Tax Act, 1961 - Section 80G:</strong> Allows donors to claim tax deduction (50% or 100%, with or without qualifying limit) on donations made to approved charitable organisations. Four categories of deduction exist based on the type of donee. Deduction available only under the old tax regime. Cash donations above Rs 2,000 not eligible.</p>
                <p><strong>Section 80G(5) - Conditions for Approval:</strong> The NGO must be registered under 12A, not work for the benefit of a particular religious community or caste, maintain regular books of accounts, not distribute income to members, use donations exclusively for charitable purposes, and keep separate accounts if any business income exists.</p>
                <p><strong>Finance Act 2020 - Time-Bound Registration:</strong> Introduced time-bound 80G approvals replacing the old one-time regime. Provisional approval for 3 years (new NGOs). Regular approval for 5 years (established NGOs). All existing 80G-approved organisations required to re-register. Renewal via Form 10AB at least 6 months before expiry.</p>
                <p><strong>Form 10A / Form 10AB:</strong> Form 10A for fresh/provisional 80G registration. Form 10AB for renewal, re-registration and conversion from provisional to regular. Filed online on the IT e-filing portal (<a href="https://www.incometax.gov.in/" target="_blank" rel="noopener">incometax.gov.in</a>).</p>
                <p><strong>Form 10AC:</strong> Order issued by PCIT(E)/CIT(E) granting 80G approval. Contains registration number, validity period, conditions and effective assessment year.</p>
                <p><strong>Form 10BE - Statement of Donations:</strong> Mandatory annual filing by 80G-registered NGOs on the IT portal by 31 May. Details all donations received with donor PAN, amount, date and mode. This data populates the donor's Annual Information Statement (AIS) for ITR filing. Non-filing prevents donors from claiming 80G deduction.</p>
                <p><strong>Section 80G(5)(vi) - Donation above Rs 2,000:</strong> Cash donations above Rs 2,000 do not qualify for 80G deduction. Donations must be via cheque, demand draft, bank transfer or online payment.</p>
                <p><strong>Section 80G(2)(a)(iv) - 10% Qualifying Limit:</strong> For most Delhi NGOs, donor deduction is 50% of the donation amount, subject to 10% of the donor's Adjusted Gross Total Income. Any donation amount exceeding the 10% qualifying limit is not eligible for deduction.</p>
                <p><strong>DARPAN Registration:</strong> NGO DARPAN portal (ngodarpan.gov.in) of NITI Aayog. Recommended reference in 80G application since Finance Act 2020 for organisations receiving or intending to receive government grants. Patron assists Delhi NGOs with DARPAN registration.</p>

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
                    <h2 class="faq-expanded__title">FAQs - 80G Registration in Delhi</h2>
                    <p class="faq-expanded__lead">Common questions about 80G registration for Delhi NGOs answered by our CA team</p>
                    @include('partials.bigin-form', [
                        'variant'  => 'compact',
                        'service'  => '80G Registration in Delhi',
                        'city'     => 'Delhi',
                    ])
                </aside>
                <div class="faq-expanded__list">
                    <div class="faq-expanded__item" id="faq-1">
                        <h3 class="faq-expanded__q">Who handles 80G registration for Delhi NGOs?</h3>
                        <div class="faq-expanded__a"><p>For Delhi-based NGOs, 80G applications are processed by the Principal Commissioner of Income Tax (Exemption) / Director of Income Tax (Exemption), New Delhi. The application is filed online through the IT e-filing portal (incometax.gov.in) using Form 10A. The PCIT(E) reviews the application and issues Form 10AC upon approval. Patron's Delhi CA team handles all e-filing and PCIT(E) coordination.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-2">
                        <h3 class="faq-expanded__q">Can I apply for 80G without 12A?</h3>
                        <div class="faq-expanded__a"><p>No. 12A registration is a mandatory prerequisite for 80G under Section 80G(5) of the Income Tax Act. An NGO must first obtain 12A registration before applying for 80G. Patron's Delhi team verifies 12A status before initiating 80G and files both applications as a bundle if 12A has not been obtained yet.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-3">
                        <h3 class="faq-expanded__q">How much does 80G registration cost in Delhi?</h3>
                        <div class="faq-expanded__a"><p>There is no government filing fee for Form 10A on the IT e-filing portal. Patron's professional fee for 80G registration in Delhi starts from INR 7,499. The 12A + 80G combined bundle costs Rs 7,000 to Rs 12,000. DSC costs Rs 1,000-1,500 if not already obtained. Annual Form 10BE filing costs Rs 2,000-5,000. Call +91 945 945 6700 for a precise quote.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-4">
                        <h3 class="faq-expanded__q">What is Form 10BE and is it mandatory?</h3>
                        <div class="faq-expanded__a"><p>Form 10BE is the Statement of Donations that every 80G-registered NGO must file on the IT portal by 31 May each year, listing all donations received with donor PAN, amount and payment mode. It is mandatory since AY 2022-23. Without Form 10BE, donations do not appear in the donor's Annual Information Statement and the donor cannot claim 80G deduction in their ITR.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-5">
                        <h3 class="faq-expanded__q">How long does 80G registration take in Delhi?</h3>
                        <div class="faq-expanded__a"><p>Provisional 80G for new Delhi NGOs with valid 12A takes 15-30 working days. Regular approval and renewal takes 30-90 days depending on PCIT(E) workload and queries. The 12A + 80G bundle takes 45-90 working days end-to-end. Document compilation takes 3-5 days. Patron's accurate documentation and proactive PCIT(E) follow-up minimise processing delays.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-6">
                        <h3 class="faq-expanded__q">Can donors claim 100% deduction under 80G?</h3>
                        <div class="faq-expanded__a"><p>100% deduction without any qualifying limit is available only for donations to specific government funds like National Defence Fund, PM National Relief Fund and PM CARES. For donations to most Delhi NGOs (charitable trusts, societies, Section 8 companies), the deduction is 50% of the donated amount subject to 10% of the donor's Adjusted Gross Total Income. Old tax regime only.</p></div>
                    </div>
                </div>
            </div>


            <!-- Quick Answers -->
            <div class="highlight-box" style="margin-top:32px;">
                <p><strong>Quick Answers</strong></p>
                <p><strong>80G registration kya hai?</strong> 80G registration se NGO ke donors ko unke donation pe 50% tax deduction milta hai ITR file karte waqt. Income Tax Act ke Section 80G ke under yeh approval PCIT(E) se milta hai. Delhi mein Form 10A online file hota hai. Cost INR 7,499 se shuru.</p>
                <p><strong>Kya 80G ke liye 12A zaroori hai?</strong> Haan, 12A registration 80G ke liye mandatory prerequisite hai. Pehle 12A lo, phir 80G ke liye apply karo. Dono saath mein bhi apply ho sakte hain.</p>
                <p><strong>Form 10BE kya hai?</strong> Form 10BE ek annual statement hai jo 80G NGO ko har saal 31 May tak IT portal pe file karna padta hai. Isme sab donors ki details hoti hain. Bina 10BE ke donor apna 80G deduction claim nahi kar sakta.</p>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 18: URGENCY CTA -->
<section class="content-section" style="background: var(--orange-lighter) !important; border-left: 4px solid var(--orange);">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Don't Let Your Delhi NGO Lose Donor Funding</h2>
            <div class="content-text">
                
                <p>Every day a Delhi NGO operates without 80G registration, its donors receive zero tax benefit on their contributions - making the NGO less attractive compared to 80G-registered alternatives in Delhi's competitive fundraising environment. Delhi's corporate CSR budgets (deployed by companies in Connaught Place, Aerocity and Gurugram) are almost exclusively directed to NGOs with valid 80G. Individual donors in South Delhi, Greater Kailash and Vasant Kunj increasingly verify 80G status before contributing.</p>
                <p>Provisional 80G must be applied for within the first 3 years; regular approval requires filing Form 10AB at least 6 months before expiry. Form 10BE must be filed by 31 May every year - missing this deadline means your donors lose their deduction for the entire year. <strong>Apply now to unlock Delhi's donor and CSR funding ecosystem.</strong></p>

            </div>
        </div>
    </div>
</section>

<!-- CONCLUSION + CTA BLOCK (Dark) -->
<section class="content-section" style="background: var(--blue) !important;">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title" style="color:#FFFFFF !important;">Get 80G Registration in Delhi - Start Today</h2>
            <div class="content-text" style="text-align:left;">
                
                <p style="color:rgba(255,255,255,0.9);">80G registration in Delhi is the essential donor-facing certification that transforms a registered NGO from a recipient of goodwill into a tax-efficient giving channel. In a city with 90,000+ NGOs competing for donor attention and CSR funding, a valid 80G certificate is the competitive differentiator that attracts contributions from Delhi's corporate and individual donor base.</p>
                <p style="color:rgba(255,255,255,0.9);">Patron Accounting's Delhi office in Rohini provides end-to-end CA-assisted 80G registration - from 12A prerequisite verification and Form 10A e-filing through PCIT(E) query response to the complete post-registration compliance bundle of Form 10BE annual filing, donation receipt templates and renewal tracking.</p>
                <p style="color:rgba(255,255,255,0.9);">For Delhi NGOs seeking 80G registration - whether newly incorporated or requiring renewal under the Finance Act 2020 provisions - Patron offers a free consultation to assess your registration status, verify 12A compliance and provide a transparent timeline and fee quote.</p>

            </div>
            <div style="display:flex;gap:14px;flex-wrap:wrap;margin-top:24px;">
                <a href="tel:+919459456700" style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:var(--orange);color:#fff;border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#128222; Call +91 945 945 6700</a>
                <a href="https://wa.me/919459456700?text=Hi%2C%20I%20need%20help%20with%2080G%20Registration%20in%20Delhi.%20Please%20call%20me." target="_blank" style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:#25D366;color:#fff;border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;" rel="noopener">&#128172; WhatsApp Us</a>
                <a href="mailto:sales@patronaccounting.com?subject=Enquiry%20for%2080G%20Registration%20in%20Delhi%20Services&body=Hello%20Patron%20Accounting%20Team%2C%0A%0AI%20am%20interested%20in%20your%2080G%20Registration%20in%20Delhi%20services%20and%20would%20like%20to%20know%20more.%0A%0APlease%20get%20in%20touch%20with%20me%20at%20your%20earliest%20convenience.%0A%0AThank%20you." style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:transparent;color:#fff;border:2px solid rgba(255,255,255,0.3);border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#9993;&#65039; Email Us</a>
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
            <p style="text-align:center;color:var(--text-muted);font-size:15px;margin-bottom:40px;">Patron Accounting provides 80G registration services for NGOs in major cities across India. Select your city below.</p>
        
            <div class="pa-city-block" style="margin-bottom:40px;">
                <div class="pa-city-grid">
                    <a href="#" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Pune</div><div class="pa-card-sub">Maharashtra</div></div></a>
                    <a href="#" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Mumbai</div><div class="pa-card-sub">Maharashtra</div></div></a>
                    <div class="pa-city-card" style="opacity:0.6; pointer-events:none; border:2px solid var(--orange); position:relative;"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Delhi</div><div class="pa-card-sub">Delhi NCR</div></div><span style="position:absolute; top:6px; right:8px; font-size:10px; color:var(--orange); font-weight:700; text-transform:uppercase; letter-spacing:0.5px;">You're here</span></div>
                    <a href="#" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Gurugram</div><div class="pa-card-sub">Haryana</div></div></a>
                    <a href="#" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Bangalore</div><div class="pa-card-sub">Karnataka</div></div></a>
                    <a href="#" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Hyderabad</div><div class="pa-card-sub">Telangana</div></div></a>
                    <a href="#" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Chennai</div><div class="pa-card-sub">Tamil Nadu</div></div></a>
                    <a href="#" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Kolkata</div><div class="pa-card-sub">West Bengal</div></div></a>
                </div>
            </div>
            <div class="pa-city-block">
                <div class="pa-block-title">Related Services</div>
                <div class="pa-block-sub">End-to-end NGO and compliance support in Delhi</div>
                <div class="pa-cross-grid">
                    <a href="/ngo-registration/delhi" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">NGO Registration</div><div class="pa-card-sub">Delhi</div></div></a>
                    <a href="/80g-registration/delhi" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">12A and 80G Registration</div><div class="pa-card-sub">Delhi</div></div></a>
                    <a href="/section8-company-registration/delhi" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Section 8 Company Registration</div><div class="pa-card-sub">Delhi</div></div></a>
                    <a href="/gst-registration/delhi" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">GST Registration</div><div class="pa-card-sub">Delhi</div></div></a>
                    <a href="/startup-registration/delhi" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Startup Registration</div><div class="pa-card-sub">Delhi</div></div></a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- CONTENT FRESHNESS FOOTER -->
<section class="content-section" style="padding:32px;">
    <div class="content-container">
        <div class="text-content" style="font-size:13px;color:var(--text-muted);">
            <p><strong>Content Created:</strong> 13 March 2026 &nbsp;|&nbsp; <strong>Last Updated:</strong> <span id="lastUpdatedFooter">13 March 2026</span> &nbsp;|&nbsp; <strong>Next Review:</strong> June 2026 &nbsp;|&nbsp; <strong>Reviewed By:</strong> CA &amp; CS Team, Patron Accounting LLP</p>
            <p>This page on 80G Registration in Delhi is reviewed semi-annually by our CA & CS team. Content accuracy is verified against the latest Finance Act amendments, IT Department circulars and PCIT(E) processing updates for Delhi. Freshness Tier 1.</p>
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
