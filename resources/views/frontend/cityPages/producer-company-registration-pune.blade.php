
@extends('layouts.service-app')

<!-- External Dependencies (loaded by master layout in production) -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Barlow:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,400&family=DM+Sans:opsz,wght@9..40,400;9..40,500;9..40,600;9..40,700&display=swap" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

@section('meta')
    <title>Producer Company (FPO) Registration in Pune - Process & Fees</title>
    <meta name="description" content="CA-assisted producer company registration in Pune. FPO incorporation, NABARD advisory, statutory audit, GST, ITR - all handled. Serving Baramati, Junnar, Indapur farmers. Call +91 945 945 6700.">
    <link rel="canonical" href="/producer-company-registration/pune">
    <meta name="robots" content="index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1">
    <meta property="og:title" content="Producer Company (FPO) Registration in Pune - Process & Fees">
    <meta property="og:description" content="CA-assisted producer company registration in Pune. FPO incorporation, NABARD advisory, statutory audit, GST, ITR - all handled. Serving Baramati, Junnar, Indapur farmers. Call +91 945 945 6700.">
    <meta property="og:url" content="/producer-company-registration/pune">
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="Patron Accounting">
    <meta property="og:image" content="https://www.patronaccounting.com/images/og-default-square.png">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="1200">
    <meta property="og:image:type" content="image/png">
    <meta property="og:image:secure_url" content="https://www.patronaccounting.com/images/og-default-square.png">
    <meta property="og:image:alt" content="Patron Accounting - partner you can rely on">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Producer Company (FPO) Registration in Pune - Process & Fees">
    <meta name="twitter:description" content="CA-assisted producer company registration in Pune. FPO incorporation, NABARD advisory, statutory audit, GST, ITR - all handled. Serving Baramati, Junnar, Indapur farmers. Call +91 945 945 6700.">
    <meta name="twitter:image" content="https://www.patronaccounting.com/images/og-default-square.png">
@endsection

@section('schema')
    <script type="application/ld+json">{
  "@context": "https://schema.org",
  "@graph": [
    {
      "@type": "Service",
      "name": "Producer Company Registration in Pune",
      "description": "CA-assisted producer company registration in Pune. FPO incorporation, NABARD advisory, statutory audit, GST, ITR - all handled. Serving Baramati, Junnar, Indapur farmers. Call +91 945 945 6700.",
      "url": "https://www.patronaccounting.com/producer-company-registration/pune",
      "serviceType": "Producer Company Registration in Pune",
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
        "url": "https://www.patronaccounting.com/producer-company-registration/pune",
        "price": "25000"
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
          "name": "Producer Company Registration in India: Process & Fees",
          "item": "https://www.patronaccounting.com/producer-company-registration"
        },
        {
          "@type": "ListItem",
          "position": 3,
          "name": "Producer Company Registration in Pune",
          "item": "https://www.patronaccounting.com/producer-company-registration/pune"
        }
      ]
    },
    {
      "@type": "FAQPage",
      "mainEntity": [
        {
          "@type": "Question",
          "name": "What is a Producer Company?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "A Producer Company is a body corporate under Part IXA of the Companies Act 1956 continued under Companies Act 2013 formed by minimum 10 producers or 2 producer institutions to collectively produce, procure, market, process, and export primary produce. It combines cooperative ownership with corporate governance."
          }
        },
        {
          "@type": "Question",
          "name": "How to register a producer company in Pune?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Assemble 10 plus producers, obtain DSCs and DINs for 5 plus directors, reserve name ending with Producer Company Limited, draft producer-specific MOA and AOA, file SPICe+ Part B with RoC Pune. Post-incorporation appoint statutory auditor within 30 days, hold first AGM within 90 days, register with NABARD."
          }
        },
        {
          "@type": "Question",
          "name": "How many members are needed for a producer company?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Minimum 10 individual producers such as farmers, dairy, fishery, forestry, or artisans. Alternatively minimum 2 producer institutions like cooperative societies, SHGs, or farmer clubs. There is no upper limit on members. Directors must be minimum 5, all of whom must be members."
          }
        },
        {
          "@type": "Question",
          "name": "Is agricultural income of a producer company tax-free?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Agricultural income from cultivation and dairy farming is exempt under Section 10(1) of the Income Tax Act. Processing income is partially taxable. For tea manufacturing 60 percent is exempt and 40 percent is taxable. FPCs with turnover up to Rs 100 crore are eligible for additional deductions."
          }
        },
        {
          "@type": "Question",
          "name": "What is the difference between FPO and producer company?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "FPO is a generic term for any organisation of primary producers. Producer Company is the specific legal form under the Companies Act used to register an FPO. Other legal forms include cooperative societies and Section 8 companies. Producer Company under Part IXA is the most recommended form."
          }
        },
        {
          "@type": "Question",
          "name": "What is the role of NABARD in FPO promotion?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "NABARD provides loan-linked grant support, capacity building, market interventions, and credit guarantee under the Central Scheme for 10,000 FPOs extended 2026 to 2031. It operates the Producer Organisation Development Fund and coordinates with SFAC and NAFED for FPO support."
          }
        },
        {
          "@type": "Question",
          "name": "What are the benefits of producer company registration?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Limited liability, separate legal entity, NABARD grants and credit guarantee access, agricultural income tax exemption, export ability, collective bargaining power, institutional bank credit, no government interference unlike cooperatives, and ability to set up processing units."
          }
        },
        {
          "@type": "Question",
          "name": "What documents are needed for producer company registration?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "PAN and Aadhaar of all 10 plus subscribers and 5 plus directors, address proof utility bills, passport photographs, registered office proof with rent agreement plus NOC plus utility bill, DSCs of all directors, and details of primary produce. Producer institutions need registration certificates and authorising resolutions. Quick Answers Pune mein producer company kaise banti hai? Kam se kam 10 kisan ya 2 cooperative/SHG milke bana sakte hain. RoC Pune mein SPICe+ se file hota hai. Naam ke end mein 'Producer Company Limited' zaroori hai. 15-20 din lagta hai. Rs 25,000 se shuru. Producer company mein tax benefit milta hai kya? Haan. Kheti ki income (cultivation, dairy) Section 10(1) ke under tax-free hai. NABARD se grant bhi milta hai. Turnover Rs 100 crore tak deduction eligible. FPO aur producer company mein kya fark hai? FPO ek generic term hai. Producer Company uska legal form hai - Companies Act ke under registered. NABARD aur government scheme ke liye recommended form."
          }
        }
      ]
    }
  ]
}</script>
@endsection

@include('partials.page-css', ['file' => 'css/site.css'])
<style>
/* Amount column - right-align only on tables with .table-amount class */
        .table-amount td:last-child { color: var(--text-secondary); font-size: 14px; font-weight: 500; }
/* ============================================
           EXPERT ATTRIBUTION BOX (E-E-A-T) - Plan 3.1
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
           TOC NAVIGATION - Plan 2.2
           ============================================ */
        .toc-section {
            background: var(--gray-50); border-bottom: 1px solid var(--gray-200);
            padding: 20px 0; position: sticky; top: 100px; z-index: 50;
        }
/* Process Evidence Screenshot - Plan 3.2 */
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
                        Producer Company Registration in Pune: CA-Assisted FPO Incorporation
                    </h1>

                    <div class="expert-attribution-box">
                        <span class="eab-check"><svg width="16" height="16" viewBox="0 0 24 24" fill="currentColor"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg></span>
                        <span class="eab-title">Reviewed by CA and CS Team, Patron Accounting LLP</span>
                        <span class="eab-meta">
                            <span>ICAI & ICSI Registered</span><span class="eab-sep">|</span>
                            <span>15+ Years Experience</span><span class="eab-sep">|</span>
                            <span>Last Updated: <span id="lastUpdated">18 March 2026</span></span>
                        </span>
                        <a href="#" class="eab-link">Verify Credentials &rarr;</a>
                    </div>

                    <div class="mb-4">
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Documents:</span> PAN, Aadhaar, address proof of all directors/subscribers (minimum 10 producers or 2 producer institutions), registered office proof, DSCs</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Fees:</span> Starting from Rs 25,000 including government fees, DSCs (10), DINs, SPICe+ filing, MOA, AOA, PAN, TAN, and Certificate of Incorporation</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Eligibility:</span> Minimum 10 individual producers (farmers, dairy, fishery, forestry, poultry) or 2 producer institutions (cooperative societies, SHGs)</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Timeline:</span> 15-20 working days from document submission to Certificate of Incorporation from RoC Pune</p>
                        </div>
                    </div>

                    <p class="mb-4 fw-bold" style="color: var(--blue); font-size: 15px;">Visit our Pune office or get started online - trusted by 10,000+ businesses across India</p>

                    <div class="hero-cta">
                        <a href="tel:+919459456700" class="btn-video text-decoration-none">
                            <span class="play-circle"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="width:14px;height:14px;color:#fff"><path d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/></svg></span>
                            Call +91 945 945 6700
                        </a>
                        <a href="mailto:sales@patronaccounting.com?subject=Enquiry%20for%20FPO%20Registration%20in%20Pune&body=Hello%2C%20I%20just%20visited%20your%20FPO%20Registration%20in%20Pune%20page.%20I%20would%20like%20to%20know%20more%20about%20it.%0A%0AThank%20you." class="btn-sample text-decoration-none">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="width:18px;height:18px;"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,12 2,6"/></svg>
                            Email Us
                        </a>
                        <a href="https://wa.me/919459456700?text=Hello%2C%20I%20just%20visited%20your%20FPO%20Registration%20in%20Pune%20page.%20I%20would%20like%20to%20know%20more%20about%20it." target="_blank" class="btn-sample text-decoration-none" rel="noopener">
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
                                            'service'  => 'Producer Company Registration',
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
    'ctaText'    => 'From pomegranate growers in Junnar to dairy cooperatives in Baramati - Pune farmer groups trust Patron for FPO registration and lifelong compliance.',
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
            <a href="#what-section" class="toc-btn">What Is It</a>
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
            <h2 class="section-title">Producer Company Registration in Pune: Complete Overview</h2>
            <div class="content-text">
                <div class="highlight-box" style="margin-bottom:20px;">
                    <p><strong>&#128204; TL;DR - Producer Company Registration Services at a Glance</strong></p>
                    <p>A Producer Company is a hybrid corporate entity governed by Part IXA of the Companies Act 1956 (continued under Section 465(1) of the Companies Act 2013) that combines cooperative principles of collective ownership with corporate governance. It requires minimum 10 individual producers or 2 producer institutions to incorporate. The name must end with 'Producer Company Limited'. Registration is filed through SPICe+ with RoC Pune and typically takes 15-20 working days. Pune district leads Maharashtra in FPO registrations with 83 FPOs and over 11,245 farmer members.</p>
                </div>
                <p>Pune district has established itself as Maharashtra's leading hub for Farmer Producer Organisations. With 83 registered FPOs and over 11,245 farmer members, Pune leads the state. The district's agricultural diversity spans sugarcane in Indapur, pomegranates in Junnar, grapes in Nasrapur, figs in Purandar, and floriculture in Mulshi. Learn more about <a href="/producer-company-registration">producer company registration across India</a>.</p>
                <div class="table-responsive-wrapper" style="margin-top:20px;">
                <table>
                    <thead><tr><th>Parameter</th><th>Detail</th></tr></thead>
                    <tbody>
                        <tr><td>Legal Framework</td><td>Companies Act 1956, Part IXA (Sections 581A-581ZT); continued under Section 465(1) of Companies Act 2013</td></tr>
                        <tr><td>Minimum Members</td><td>10 individual producers OR 2 producer institutions (no upper limit)</td></tr>
                        <tr><td>Directors</td><td>Minimum 5; elected by members; at least 1 resident Indian</td></tr>
                        <tr><td>Name Format</td><td>Must end with 'Producer Company Limited'</td></tr>
                        <tr><td>Tax Benefit</td><td>Agricultural income exempt under Section 10(1); FPCs up to Rs 100 crore turnover eligible for deductions</td></tr>
                        <tr><td>Annual Compliance</td><td>4 board meetings/year; AGM within 6 months of FY; AOC-4, MGT-7, statutory audit</td></tr>
                        <tr><td>NABARD Support</td><td>Eligible for Central FPO Scheme grants and credit guarantee (extended 2026-31)</td></tr>
                    </tbody>
                </table>
                </div>
                <p</p>
                <p>Pune's FPO success stories are nationally recognised. Abhinav Farmers' Club in Mulshi (NABARD-promoted, national award winner) supplies exotic vegetables to hotels and retailers. Purandar Heights won Sial India awards and secured EU fig export orders. Sahyadri Farms operates as one of India's largest FPOs. Patron Accounting's Pune office at RTC Silver, Wagholi handles producer company registration with integrated NABARD advisory and ongoing compliance.</p>
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
                <h2 class="section-title">What Is a Producer Company?</h2>
                <div class="content-text what-is-definition">
                    
                    <p>A Producer Company is a body corporate registered under Part IXA of the Companies Act 1956 (Sections 581A to 581ZT), continuing under Section 465(1) of the Companies Act 2013. Introduced in 2002 based on the Y.K. Alagh Committee recommendations, it provides a corporate framework for producer cooperatives combining democratic governance with company efficiency.</p>
                    <p>A Producer Company can engage in production, procurement, harvesting, grading, pooling, marketing, processing, and export of primary produce. It can also provide insurance, credit, technical services, and education to members. The company is member-owned: shares are not transferable to non-members, voting rights are equal, and profits are distributed as patronage bonuses based on transaction volume.</p>
                    <p>Unlike a cooperative governed by state laws with government interference, a Producer Company is governed by the central Companies Act providing uniform regulation and operational autonomy. Patron provides <a href="/producer-company-registration">producer company registration</a> with integrated compliance for Pune's agricultural entrepreneurs.</p>

                </div>
                <div class="highlight-box" style="margin-top:20px;">
                    <p><strong>Key Terms for Producer Company Registration:</strong></p>
                    <ul>
                        <li><strong>Part IXA:</strong> Sections 581A-581ZT of Companies Act 1956 governing producer companies. Continued under Section 465(1) of Companies Act 2013.</li>
                        <li><strong>Patronage Bonus:</strong> Profit distribution to members based on transaction volume with the company, not shareholding.</li>
                        <li><strong>NABARD FPO Scheme:</strong> Central Scheme for 10,000 FPOs providing grants, capacity building, and credit guarantee. Extended 2026-31.</li>
                        <li><strong>Section 581B:</strong> Defines authorised activities - production, procurement, marketing, processing, export of primary produce.</li>
                        <li><strong>Y.K. Alagh Committee:</strong> Recommended introduction of producer company concept in 2002 for farmer cooperatives.</li>
                        <li><strong>Producer Institution:</strong> Cooperative society, SHG, or farmer club that can be a subscriber to a producer company.</li>
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
                            <text x="100" y="170" font-size="10" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial, sans-serif">Producer Company Registration</text>
                        </svg>
                    </div>
                    <div class="illustration-badge">
                        <span>FPO</span>
                        <strong>Pune Farmers</strong>
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
            <h2 class="section-title">Who Needs Producer Company Registration in Pune?</h2>
            <div class="content-text">
                
                <p><strong>Sugarcane, Vegetable, and Oilseed Farmers (Baramati, Indapur, Daund):</strong> Currently selling individually to middlemen at APMC mandis. A Producer Company enables collective bargaining with sugar factories and direct sales to processors and exporters.</p>
                <p><strong>Pomegranate and Grape Growers (Junnar, Ambegaon, Nasrapur):</strong> Seeking export access through APEDA registration (<a href="#">Import Export Code</a>), collective GAP standards, and NABARD export promotion support. Purandar fig producers demonstrated the EU export potential.</p>
                <p><strong>Dairy Cooperatives Across Pune District:</strong> Transitioning from cooperative society to corporate framework for institutional bank credit access, NABARD grants, and processing units without state government interference in management.</p>
                <p><strong>Floriculture and Organic Vegetable Producers (Mulshi, Maval):</strong> Following the Abhinav Farmers' Club model to supply hotels, retail chains, and e-commerce platforms directly.</p>
                <p><strong>NGOs and Social Enterprises:</strong> Promoting FPOs under the Central Scheme (extended 2026-31) need CA-led incorporation for RoC compliance from Day 1. Poultry, fishery, and sericulture producers also qualify.</p>

            </div>
            </div>
        </div>
    </div>
</section>

<!-- SECTION 5: OUR SERVICES -->
<section class="content-section" id="services-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Producer Company Registration Services Included</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Service</th><th>What We Do</th></tr></thead>
                    <tbody>
                        <tr><td>DSC Procurement (10 DSCs)</td><td>Digital Signature Certificates for all proposed directors - required for MCA e-forms. Aadhaar-linked procurement assisted at Pune office</td></tr>
                        <tr><td>DIN Allotment (5+ DINs)</td><td>Director Identification Numbers for all proposed directors through SPICe+ form</td></tr>
                        <tr><td>Name Reservation</td><td>Availability check and reservation via SPICe+ Part A. Name must end with 'Producer Company Limited'</td></tr>
                        <tr><td>MOA and AOA Drafting</td><td>Producer company-specific objects under Section 581B (production, procurement, marketing, processing, export). AOA with cooperative governance (equal voting, patronage bonus, share transfer restrictions)</td></tr>
                        <tr><td>SPICe+ Filing with RoC Pune</td><td>Complete Part B with 10+ subscriber declarations, identity proofs, registered office proof, and Maharashtra stamp duty</td></tr>
                        <tr><td>Statutory Auditor Appointment</td><td>CA appointed within 30 days of incorporation. Patron's CA team serves as auditor for Pune producer companies</td></tr>
                        <tr><td>NABARD Registration Advisory</td><td>Guidance on NABARD FPO registration for accessing loan-linked grants, capacity building, and credit guarantee under Central FPO Scheme (2026-31)</td></tr>
                        <tr><td>GST and ITR Filing</td><td><a href="/gst-registration">GST registration</a> post-incorporation. <a href="/income-tax-return">ITR</a> with agricultural income assessment</td></tr>
                        <tr><td>Annual Compliance Setup</td><td>4 quarterly board meetings, AGM, AOC-4, MGT-7, statutory audit, <a href="/zoho-books-accounting">Zoho Books accounting</a> configured</td></tr>

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
            <h2 class="section-title">How Producer Company Registration Works in Pune</h2>
            <p class="section-subtitle" style="text-align:left;max-width:100%;">Our 6-step process covers the complete producer company lifecycle - from member assembly through DSC procurement, name reservation, MOA/AOA drafting, SPICe+ filing with RoC Pune, and post-incorporation setup with NABARD advisory.</p>
        </header>
        <div class="steps-container">
            <div class="step-card">
    <div class="step-content">
        <span class="step-badge">Step 1</span>
        <h3 class="step-title">Assemble Minimum 10 Producers and Appoint 5 Directors</h3>
        <p class="step-description">A producer company requires minimum 10 individual producers (farmers, dairy, fishery, forestry, artisans) or 2 producer institutions (cooperative societies, SHGs, farmer clubs). From these members, minimum 5 directors are proposed. Patron assists Pune farmer groups in organising subscriber lists and collecting KYC from members across Baramati, Junnar, Indapur, and Mulshi talukas.</p>
        <div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>10+ producer members verified</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>5 directors identified</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>KYC collected across talukas</span></div>
    </div>
    <div class="step-visual">
        <div class="step-illustration">
            <div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="15" y="8" width="90" height="70" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><text x="60" y="28" font-size="8" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">10+ Members</text><circle cx="35" cy="48" r="8" fill="#FFF3E0" stroke="#F5A623" stroke-width="1"/><circle cx="50" cy="48" r="8" fill="#E8F5E9" stroke="#10B981" stroke-width="1"/><circle cx="65" cy="48" r="8" fill="#FFF3E0" stroke="#F5A623" stroke-width="1"/><circle cx="80" cy="48" r="8" fill="#E8F5E9" stroke="#10B981" stroke-width="1"/><text x="60" y="68" font-size="6" fill="#14365F" font-weight="500" text-anchor="middle" font-family="Arial">5 Directors</text></svg></div>
            <span class="illustration-label">Members Assembled</span>
            <span class="step-number-large">01</span>
        </div>
    </div>
</div>
<div class="step-card">
    <div class="step-content">
        <span class="step-badge">Step 2</span>
        <h3 class="step-title">Obtain DSCs and DINs for All Directors</h3>
        <p class="step-description">Class 3 Digital Signature Certificates procured for all proposed directors. DINs obtained through SPICe+ form. For a standard 5-director, 10-subscriber setup, Patron procures 10 DSCs and 5 DINs. Aadhaar-linked DSC procurement assisted at the Pune office for farmer-producers unfamiliar with digital processes.</p>
        <div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>10 DSCs procured</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>5 DINs obtained</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Aadhaar-linked verification</span></div>
    </div>
    <div class="step-visual">
        <div class="step-illustration">
            <div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="25" y="10" width="70" height="65" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><rect x="38" y="22" width="44" height="18" rx="3" fill="#FFF3E0" stroke="#F5A623" stroke-width="1"/><text x="60" y="34" font-size="8" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">10 DSCs</text><rect x="38" y="48" width="44" height="14" rx="2" fill="#E8F5E9" stroke="#10B981" stroke-width="0.8"/><text x="60" y="58" font-size="6" fill="#14365F" font-weight="600" text-anchor="middle" font-family="Arial">5 DINs</text></svg></div>
            <span class="illustration-label">DSCs/DINs Ready</span>
            <span class="step-number-large">02</span>
        </div>
    </div>
</div>
<div class="step-card">
    <div class="step-content">
        <span class="step-badge">Step 3</span>
        <h3 class="step-title">Reserve Company Name via SPICe+ Part A</h3>
        <p class="step-description">Name must end with 'Producer Company Limited' (not 'Private Limited'). Should reflect produce or geography - e.g. 'Junnar Pomegranate Growers Producer Company Limited'. Patron files Part A with two name options, checking MCA database and trademark registry. Valid for 20 days.</p>
        <div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Name uniqueness checked</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Producer Company Limited format</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>20-day reservation</span></div>
    </div>
    <div class="step-visual">
        <div class="step-illustration">
            <div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="20" y="8" width="80" height="70" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><text x="60" y="28" font-size="7" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">NAME</text><line x1="30" y1="35" x2="90" y2="35" stroke="#F5A623" stroke-width="1.5"/><text x="60" y="50" font-size="5" fill="#10B981" font-weight="600" text-anchor="middle" font-family="Arial">Producer Company</text><text x="60" y="62" font-size="5" fill="#14365F" font-weight="600" text-anchor="middle" font-family="Arial">Limited</text></svg></div>
            <span class="illustration-label">Name Reserved</span>
            <span class="step-number-large">03</span>
        </div>
    </div>
</div>
<div class="step-card">
    <div class="step-content">
        <span class="step-badge">Step 4</span>
        <h3 class="step-title">Draft MOA and AOA with Producer Company-Specific Provisions</h3>
        <p class="step-description">MOA drafted with objects under Section 581B: production, procurement, harvesting, grading, pooling, marketing, processing, and export of primary produce. AOA includes cooperative governance: equal voting, share transfer restricted to members, patronage bonus distribution, and mandatory reserve fund. Tailored to the specific produce of the Pune farmer group.</p>
        <div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Section 581B objects drafted</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Cooperative governance clauses</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Produce-specific MOA</span></div>
    </div>
    <div class="step-visual">
        <div class="step-illustration">
            <div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="15" y="10" width="90" height="65" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><rect x="28" y="22" width="28" height="14" rx="2" fill="#FFF3E0" stroke="#F5A623" stroke-width="0.8"/><rect x="62" y="22" width="28" height="14" rx="2" fill="#E8F5E9" stroke="#10B981" stroke-width="0.8"/><text x="42" y="32" font-size="5" fill="#14365F" font-weight="600" text-anchor="middle" font-family="Arial">MOA</text><text x="76" y="32" font-size="5" fill="#14365F" font-weight="600" text-anchor="middle" font-family="Arial">AOA</text><text x="60" y="55" font-size="5" fill="#E8712C" font-weight="600" text-anchor="middle" font-family="Arial">Section 581B</text></svg></div>
            <span class="illustration-label">Documents Prepared</span>
            <span class="step-number-large">04</span>
        </div>
    </div>
</div>
<div class="step-card">
    <div class="step-content">
        <span class="step-badge">Step 5</span>
        <h3 class="step-title">File SPICe+ Part B with RoC Pune</h3>
        <p class="step-description">Complete incorporation application with MOA, AOA, subscriber declarations from all 10+ members, identity/address proofs, registered office proof, director declarations, and Maharashtra stamp duty. Document compilation is more extensive than Pvt Ltd due to 10+ subscribers. Patron manages entire documentation and filing from the Pune office.</p>
        <div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>SPICe+ Part B filed</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>10+ subscriber docs compiled</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Maharashtra stamp duty paid</span></div>
    </div>
    <div class="step-visual">
        <div class="step-illustration">
            <div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="20" y="10" width="80" height="65" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><text x="60" y="28" font-size="8" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">SPICe+</text><path d="M35 38h50" stroke="#F5A623" stroke-width="2" stroke-dasharray="4 2"/><text x="60" y="52" font-size="7" fill="#10B981" font-weight="600" text-anchor="middle" font-family="Arial">RoC Pune</text><text x="60" y="65" font-size="6" fill="#E8712C" font-weight="500" text-anchor="middle" font-family="Arial">+ Stamp Duty</text></svg></div>
            <span class="illustration-label">Filed with RoC</span>
            <span class="step-number-large">05</span>
        </div>
    </div>
</div>
<div class="step-card">
    <div class="step-content">
        <span class="step-badge">Step 6</span>
        <h3 class="step-title">Certificate of Incorporation and Post-Registration Setup</h3>
        <p class="step-description">RoC Pune issues Certificate with CIN, PAN, TAN. Statutory auditor appointed within 30 days - Patron's CA team serves as auditor. First AGM held within 90 days for board election. NABARD registration advisory provided. Bank account opened. GST filed if applicable. Zoho Books accounting configured.</p>
        <div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Certificate + CIN issued</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Auditor + AGM within 90 days</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>NABARD advisory provided</span></div>
    </div>
    <div class="step-visual">
        <div class="step-illustration">
            <div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="20" y="10" width="80" height="65" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><circle cx="60" cy="32" r="13" fill="#E8F5E9" stroke="#10B981" stroke-width="1.5"/><path d="M54 32l4 4 8-8" stroke="#10B981" stroke-width="2" stroke-linecap="round"/><text x="60" y="58" font-size="6" fill="#14365F" font-weight="600" text-anchor="middle" font-family="Arial">Audit+AGM+NABARD</text></svg></div>
            <span class="illustration-label">FPO Operational</span>
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
            <h2 class="section-title">Documents Required for Producer Company Registration in Pune</h2>
            <div class="content-text">
                
                <ul><li><strong>PAN Card:</strong> Of all subscribers (minimum 10 producers) and all proposed directors (minimum 5).</li><li><strong>Aadhaar Card:</strong> Of all subscribers and directors.</li><li><strong>Address Proof:</strong> Latest utility bill of all subscribers and directors.</li><li><strong>Passport Photographs:</strong> Of all subscribers and directors.</li><li><strong>Registered Office Proof:</strong> Rent agreement + NOC from owner + latest utility bill of premises in Pune.</li><li><strong>DSCs:</strong> Class 3 Digital Signature Certificates of all proposed directors.</li><li><strong>Primary Produce Details:</strong> Description of produce and proposed activities of the producer company.</li><li><strong>Producer Institution Documents:</strong> If subscribers include cooperative societies/SHGs - registration certificates and authorising resolutions.</li></ul>
                <div class="highlight-box" style="margin-top:16px;">
                    <p><strong>Pune-Specific Tip:</strong> Collect all KYC documents from 10+ members before initiating filing. This is the most time-consuming step, especially when members are spread across Baramati, Junnar, Indapur, and Mulshi talukas. Patron's team can visit taluka-level collection points to assist farmer-producers with document preparation.</p>
                </div>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 9: CHALLENGES -->
<section class="content-section" id="challenges-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Common Producer Company Registration Challenges in Pune</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Challenge</th><th>Impact</th><th>How Patron Accounting Solves It</th></tr></thead>
                    <tbody>
                        <tr><td>Minimum 10 Members Not Assembled</td><td>Filing attempted with fewer members or non-producers; RoC Pune rejects application</td><td>Each subscriber's producer status verified. All 10+ members have complete KYC before SPICe+ filing</td></tr>
                        <tr><td>Incorrect MOA Objects</td><td>Generic Pvt Ltd MOA template used without Section 581B producer company objects; RoC rejection</td><td>Producer-specific MOA drafted with objects tailored to Pune farmer group's produce</td></tr>
                        <tr><td>Wrong Name Format</td><td>Name not ending with 'Producer Company Limited' causes rejection</td><td>Name compliance verified and availability checked before filing</td></tr>
                        <tr><td>First AGM Not Held in 90 Days</td><td>Board not formally elected; logistical challenges across rural talukas</td><td>First AGM documentation, notice, and proceedings managed within 90-day deadline</td></tr>
                        <tr><td>NABARD Registration Not Pursued</td><td>FPO misses grants, credit guarantee, and capacity building under Central FPO Scheme</td><td>NABARD registration advisory provided as standard post-incorporation service</td></tr>

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
            <h2 class="section-title">Producer Company Registration Fees in Pune</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Fee Component</th><th>Amount</th></tr></thead>
                    <tbody>
                        <tr><td>Complete Producer Company Incorporation</td><td>Rs 25,000 - Rs 45,000</td></tr>
                        <tr><td>Government Fees (MCA)</td><td>Rs 3,000 - Rs 6,000 (varies by authorised capital)</td></tr>
                        <tr><td>Maharashtra Stamp Duty</td><td>Rs 2,000 - Rs 10,000+ (varies by authorised capital)</td></tr>
                        <tr><td>Statutory Audit (Annual)</td><td>Rs 8,000 - Rs 15,000/year</td></tr>
                        <tr><td>NABARD Registration Advisory</td><td>Rs 5,000 - Rs 10,000</td></tr>
                        <tr><td>Annual Compliance Package</td><td>Rs 12,000 - Rs 20,000/year</td></tr>

                    </tbody>
                </table>
                </div>
                <p style="margin-top:16px;font-size:13px;color:var(--text-muted);font-style:italic;">All fees and charges listed are indicative only and do not constitute a binding offer. Final amounts may vary depending on the volume of work and the complexity involved.</p>
                <p style="margin-top:16px;">Professional service charges for drafting, filing, and representation are separate from the statutory fees. The exact fee depends on the complexity of the case, disputed amount, and number of hearings required. Contact us for a detailed quote.</p>
                <p style="margin-top:16px;"><strong>Get a free Producer Company Registration consultation - <a href="tel:+919459456700">Call +91 945 945 6700</a> or <a href="https://wa.me/919459456700?text=Hello%2C%20I%20just%20visited%20your%20FPO%20Registration%20in%20Pune%20page.%20I%20would%20like%20to%20know%20more%20about%20it." target="_blank" rel="noopener">WhatsApp us</a>. No-obligation assessment.</strong></p>
            </div>
        </div>
    </div>
</section>

<!-- SECTION 11: TIMELINE -->
<section class="content-section" id="timeline-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Producer Company Registration Timeline for Pune Farmer Groups</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Stage</th><th>Estimated Timeline</th></tr></thead>
                    <tbody>
                        <tr><td>Member Assembly and KYC Collection</td><td>2-4 weeks (across Pune talukas)</td></tr>
                        <tr><td>DSC Procurement (10 DSCs)</td><td>3-5 working days</td></tr>
                        <tr><td>Name Reservation (SPICe+ Part A)</td><td>2-3 working days</td></tr>
                        <tr><td>MOA and AOA Drafting</td><td>2-3 working days</td></tr>
                        <tr><td>SPICe+ Part B Filing + RoC Processing</td><td>6-8 working days</td></tr>
                        <tr><td>Post-Incorporation Setup</td><td>2-4 weeks (auditor, AGM, NABARD, bank, GST)</td></tr>

                    </tbody>
                </table>
                </div>
                <div class="highlight-box" style="margin-top:16px;">
                    
                    <p><strong>Total: 15-20 working days for Certificate of Incorporation (excluding member assembly time).</strong> All registrations for Pune district processed by RoC Pune. Maharashtra stamp duty applies. Patron's Wagholi office serves as coordination point, with team members assisting farmer groups in taluka-level document collection across Baramati, Junnar, Indapur, and Mulshi.</p>

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
            <h2 class="section-title">Why Choose Patron for Producer Company Registration in Pune</h2>
        </div>
        <div class="features-grid">
            <article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><h3>Pune Office + Taluka Reach</h3><p>RTC Silver, Wagholi - coordinates with farmer groups across Baramati, Junnar, Indapur, Mulshi, Purandar. Taluka-level KYC collection assistance.</p></article>
            <article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2"><path d="M12 2L2 7l10 5 10-5-10-5zM2 17l10 5 10-5M2 12l10 5 10-5"/></svg></div><h3>CA Firm with Agri Expertise</h3><p>Statutory auditor appointed Day 1. Agricultural income tax assessment. NABARD registration advisory. Producer-specific MOA under Section 581B. Not a legal-tech portal.</p></article>
            <article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2"><rect x="2" y="3" width="20" height="14" rx="2"/><path d="M8 21h8M12 17v4"/></svg></div><h3>Complete FPO Lifecycle</h3><p>DSCs to Certificate to audit to AGM to NABARD registration to AOC-4/MGT-7 to ITR to 4 quarterly board meetings - all under one engagement.</p></article>
            <article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2"><circle cx="12" cy="12" r="10"/><path d="M12 6v6l4 2"/></svg></div><h3>10,000+ Businesses Served</h3><p>15+ years, 50,000+ documents, 4.9 Google rating. Producer company incorporation from Rs 25,000 with lifetime compliance support.</p></article>
        </div>
    </div>
</section>

<!-- SECTION 12A: SOCIAL PROOF -->
<section class="content-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Trusted by Businesses Across India</h2>
            <div class="content-text">
                
                <p><strong>Trust Banner:</strong> 10,000+ Businesses | 4.9 Google Rating | 50,000+ Documents Filed | 15+ Years</p>
                <p>With offices in Pune, Mumbai, Delhi, and Gurugram, Patron serves farming communities and growing businesses with CA expertise in incorporation, compliance, tax, and agricultural income assessment.</p>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 13: SELF-FILING vs PROFESSIONAL COMPARISON -->
<section class="content-section" id="comparison-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Producer Company vs Cooperative vs Pvt Ltd</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Factor</th><th>Producer Company</th><th>Cooperative Society</th><th>Pvt Ltd Company</th></tr></thead>
                    <tbody>
                        <tr><td>Governing Law</td><td>Companies Act 1956 Part IXA (Central)</td><td>State Cooperative Acts (varies)</td><td>Companies Act 2013 (Central)</td></tr>
                        <tr><td>Minimum Members</td><td>10 producers or 2 institutions</td><td>Varies by state (10-25)</td><td>2 shareholders + 2 directors</td></tr>
                        <tr><td>Government Interference</td><td>Minimal - regulated by RoC</td><td>High - state controls elections, audits</td><td>Minimal - regulated by RoC</td></tr>
                        <tr><td>Profit Distribution</td><td>Patronage bonus by transaction volume</td><td>Limited dividend per state rules</td><td>Dividend based on shareholding</td></tr>
                        <tr><td>Tax Treatment</td><td>Agri income exempt; corporate on rest</td><td>Section 80P benefits</td><td>Standard corporate rates</td></tr>
                        <tr><td>NABARD Support</td><td>Eligible for Central FPO Scheme</td><td>Eligible through state structure</td><td>Not eligible for FPO schemes</td></tr>
                        <tr><td>Best For</td><td>Farmer groups, dairy/fishery collectives</td><td>Village cooperatives with state support</td><td>Non-agri businesses, startups</td></tr>

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
            <h2 class="section-title">Related Services for Pune Producer Companies</h2>
            <div class="content-text">
                
                <p>Producer companies in Pune often need complementary services:</p>
                <ul><li><a href="/producer-company-registration">Producer Company Registration (India)</a> - National overview.</li>
                    <li><a href="/private-limited-company-registration/pune">Pvt Ltd Registration in Pune</a> - For non-agricultural businesses.</li>
                    <li><a href="/gst-registration">GST Registration</a> - For FPOs selling produce.</li>
                    <li><a href="/income-tax-return">Income Tax Return</a> - ITR with agricultural income assessment.</li>
                    <li><a href="/zoho-books-accounting">Zoho Books Accounting</a> - Cloud accounting for FPOs.</li>
                    <li><a href="#">MSME Registration</a> - Udyam for producer companies.</li>
                    <li><a href="#">Import Export Code</a> - For FPOs exporting produce.</li>
                    <li><a href="/accounting-services">Accounting Services</a> - Full accounting for all entities.</li></ul>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 15A: LEGAL FRAMEWORK -->
<section class="content-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Legal and Tax Framework for Producer Companies in Pune</h2>
            <div class="content-text">
                
                <p><strong>Legal Framework:</strong></p>
                <ul><li><strong>Companies Act 1956, Part IXA (Sections 581A-581ZT):</strong> Governs formation, management, and operations. Continues under Section 465(1) of Companies Act 2013.</li>
                    <li><strong>Y.K. Alagh Committee (2002):</strong> Recommended producer company concept for farmer cooperatives.</li>
                    <li><strong>Central Scheme for 10,000 FPOs (2020):</strong> Extended 2026-31 with Rs 9,000 crore cumulative turnover achieved. NABARD grants and credit guarantee.</li>
                    <li><strong>NABARD PODF:</strong> Producer Organisation Development Fund for credit and grant support.</li></ul>
                <p style="margin-top:16px;"><strong>Tax Benefits:</strong></p>
                <ul><li>Agricultural income <strong>exempt under Section 10(1)</strong> Income Tax Act</li>
                    <li>Processing income: partially taxable (tea: 60% exempt, 40% taxable)</li>
                    <li>FPCs with turnover up to <strong>Rs 100 crore</strong> eligible for deductions</li>
                    <li>Most agricultural produce <strong>exempt or 0/5% GST</strong></li></ul>
                <p style="margin-top:16px;"><strong>Compliance Penalties:</strong></p>
                <ul><li>Late AOC-4/MGT-7: <strong>Rs 200/day</strong> of delay</li>
                    <li>DIN KYC non-compliance: <strong>Rs 5,000</strong> per director</li>
                    <li>First AGM not within 90 days: <strong>Part IXA non-compliance</strong></li>
                    <li>Quarterly board meeting missed: <strong>Section 173 penalty</strong></li></ul>
                <p style="margin-top:16px;"><strong>External Authority Links:</strong> <a href="https://www.mca.gov.in" target="_blank" rel="noopener">MCA Portal</a> | <a href="https://www.nabard.org" target="_blank" rel="noopener">NABARD</a></p>

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
                    <h2 class="faq-expanded__title">Frequently Asked Questions: Producer Company Registration in Pune</h2>
                    <p class="faq-expanded__lead">Get answers about producer company registration, FPO incorporation, NABARD schemes, agricultural income tax, and compliance for Pune farmer groups.</p>
                    @include('partials.bigin-form', [
                        'variant'  => 'compact',
                        'service'  => 'Producer Company Registration',
                        'city'     => 'Pune',
                    ])
                </aside>
                <div class="faq-expanded__list">
                    <div class="faq-expanded__item" id="faq-1">
                        <h3 class="faq-expanded__q">What is a Producer Company?</h3>
                        <div class="faq-expanded__a"><p>A Producer Company is a body corporate under Part IXA of the Companies Act 1956 continued under Companies Act 2013 formed by minimum 10 producers or 2 producer institutions to collectively produce, procure, market, process, and export primary produce. It combines cooperative ownership with corporate governance.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-2">
                        <h3 class="faq-expanded__q">How to register a producer company in Pune?</h3>
                        <div class="faq-expanded__a"><p>Assemble 10 plus producers, obtain DSCs and DINs for 5 plus directors, reserve name ending with Producer Company Limited, draft producer-specific MOA and AOA, file SPICe+ Part B with RoC Pune. Post-incorporation appoint statutory auditor within 30 days, hold first AGM within 90 days, register with NABARD.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-3">
                        <h3 class="faq-expanded__q">How many members are needed for a producer company?</h3>
                        <div class="faq-expanded__a"><p>Minimum 10 individual producers such as farmers, dairy, fishery, forestry, or artisans. Alternatively minimum 2 producer institutions like cooperative societies, SHGs, or farmer clubs. There is no upper limit on members. Directors must be minimum 5, all of whom must be members.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-4">
                        <h3 class="faq-expanded__q">Is agricultural income of a producer company tax-free?</h3>
                        <div class="faq-expanded__a"><p>Agricultural income from cultivation and dairy farming is exempt under Section 10(1) of the Income Tax Act. Processing income is partially taxable. For tea manufacturing 60 percent is exempt and 40 percent is taxable. FPCs with turnover up to Rs 100 crore are eligible for additional deductions.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-5">
                        <h3 class="faq-expanded__q">What is the difference between FPO and producer company?</h3>
                        <div class="faq-expanded__a"><p>FPO is a generic term for any organisation of primary producers. Producer Company is the specific legal form under the Companies Act used to register an FPO. Other legal forms include cooperative societies and Section 8 companies. Producer Company under Part IXA is the most recommended form.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-6">
                        <h3 class="faq-expanded__q">What is the role of NABARD in FPO promotion?</h3>
                        <div class="faq-expanded__a"><p>NABARD provides loan-linked grant support, capacity building, market interventions, and credit guarantee under the Central Scheme for 10,000 FPOs extended 2026 to 2031. It operates the Producer Organisation Development Fund and coordinates with SFAC and NAFED for FPO support.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-7">
                        <h3 class="faq-expanded__q">What are the benefits of producer company registration?</h3>
                        <div class="faq-expanded__a"><p>Limited liability, separate legal entity, NABARD grants and credit guarantee access, agricultural income tax exemption, export ability, collective bargaining power, institutional bank credit, no government interference unlike cooperatives, and ability to set up processing units.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-8">
                        <h3 class="faq-expanded__q">What documents are needed for producer company registration?</h3>
                        <div class="faq-expanded__a"><p>PAN and Aadhaar of all 10 plus subscribers and 5 plus directors, address proof utility bills, passport photographs, registered office proof with rent agreement plus NOC plus utility bill, DSCs of all directors, and details of primary produce. Producer institutions need registration certificates and authorising resolutions.</p></div>
                    </div>
                </div>
            </div>


            <!-- Quick Answers -->
            <div class="highlight-box" style="margin-top:32px;">
                <p><strong>Quick Answers</strong></p>
                <p><strong>Pune mein producer company kaise banti hai?</strong> Kam se kam 10 kisan ya 2 cooperative/SHG milke bana sakte hain. RoC Pune mein SPICe+ se file hota hai. Naam ke end mein 'Producer Company Limited' zaroori hai. 15-20 din lagta hai. Rs 25,000 se shuru.</p>
                <p><strong>Producer company mein tax benefit milta hai kya?</strong> Haan. Kheti ki income (cultivation, dairy) Section 10(1) ke under tax-free hai. NABARD se grant bhi milta hai. Turnover Rs 100 crore tak deduction eligible.</p>
                <p><strong>FPO aur producer company mein kya fark hai?</strong> FPO ek generic term hai. Producer Company uska legal form hai - Companies Act ke under registered. NABARD aur government scheme ke liye recommended form.</p>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 18: URGENCY CTA -->
<section class="content-section" style="background: var(--orange-lighter) !important; border-left: 4px solid var(--orange);">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">NABARD FPO Scheme Extended to 2031 - Register Now to Access Grants</h2>
            <div class="content-text">
                
                <p>The Central Scheme for 10,000 FPOs has been extended 2026-31, meaning NABARD grant support and credit guarantee remain available. However, Companies Act penalties apply equally - late AOC-4/MGT-7 is Rs 200/day, DIN KYC non-compliance is Rs 5,000 per director. If your Pune farmer group has formed a producer company but missed filings, regularise immediately.</p>
                <p style="margin-top:16px;"><strong>Get started - <a href="tel:+919459456700">Call +91 945 945 6700</a> or <a href="https://wa.me/919459456700?text=Hello%2C%20I%20just%20visited%20your%20FPO%20Registration%20in%20Pune%20page.%20I%20would%20like%20to%20know%20more%20about%20it." target="_blank" rel="noopener">WhatsApp us</a>.</strong></p>

            </div>
        </div>
    </div>
</section>

<!-- CONCLUSION + CTA BLOCK (Dark) -->
<section class="content-section" style="background: var(--blue) !important;">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title" style="color:#FFFFFF !important;">Get Started with Producer Company Registration in Pune</h2>
            <div class="content-text" style="text-align:left;">
                
                <p style="color:rgba(255,255,255,0.9);">Producer Company registration in Pune provides farmer groups, dairy cooperatives, fishery collectives, and agri-entrepreneurs with a corporate structure combining cooperative ownership with company governance. Pune district's position as Maharashtra's leading FPO hub - 83 FPOs, 11,245+ farmers, success stories like Abhinav Farmers' Club and Purandar Heights - demonstrates the model's viability.</p>
                <p style="color:rgba(255,255,255,0.9);">Patron Accounting's Pune office serves farming communities across Baramati, Junnar, Indapur, Mulshi, and Purandar - handling the complete lifecycle from member assembly to SPICe+ filing, statutory audit, first AGM, NABARD registration, and annual compliance.</p>
                <p style="color:rgba(255,255,255,0.9);">With 15+ years, 10,000+ businesses served, and 4.9 Google rating, Patron is the only CA firm in Pune bundling producer company incorporation with NABARD advisory, statutory audit, producer-specific MOA, and annual compliance under one engagement.</p>

            </div>
            <div style="display:flex;gap:14px;flex-wrap:wrap;margin-top:24px;">
                <a href="tel:+919459456700" style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:var(--orange);color:#fff;border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#128222; Call +91 945 945 6700</a>
                <a href="https://wa.me/919459456700?text=Hello%2C%20I%20just%20visited%20your%20FPO%20Registration%20in%20Pune%20page.%20I%20would%20like%20to%20know%20more%20about%20it." target="_blank" style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:#25D366;color:#fff;border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;" rel="noopener">&#128172; WhatsApp Us</a>
                <a href="mailto:sales@patronaccounting.com?subject=Enquiry%20for%20Producer%20Company%20Registration%20in%20Pune&body=Hello%2C%20I%20just%20visited%20your%20FPO%20Registration%20in%20Pune%20page.%20I%20would%20like%20to%20know%20more%20about%20it.%0A%0AThank%20you." style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:transparent;color:#fff;border:2px solid rgba(255,255,255,0.3);border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#9993;&#65039; Email Us</a>
            </div>
            <p style="color:rgba(255,255,255,0.7);font-size:13px;margin-top:16px;">Book a Free Consultation - No Obligation.</p>
        </div>
    </div>
</section>

<!-- GSTAT STATE BENCH CITY PAGES (32 Pages) -->
<section class="content-section" style="padding:48px 32px;background:var(--gray-50);">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title" style="text-align:center;margin-bottom:12px;">Producer Company Registration Across India</h2>
            <p style="text-align:center;color:var(--text-muted);font-size:15px;margin-bottom:40px;">Patron Accounting provides producer company registration and FPO compliance services in major cities across India.</p>
            <div class="pa-city-block" style="margin-bottom:40px;">
                <div class="pa-block-title">Available Cities</div>
                <div class="pa-block-sub">Producer company and FPO services</div>
                <div class="pa-city-grid">
                    <div class="pa-city-card" style="opacity:0.6; pointer-events:none; border:2px solid var(--orange); position:relative;"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Pune</div><div class="pa-card-sub">Maharashtra</div></div><span style="position:absolute; top:6px; right:8px; font-size:10px; color:var(--orange); font-weight:700; text-transform:uppercase; letter-spacing:0.5px;">You're here</span></div>
                    <a href="/producer-company-registration/mumbai" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Mumbai</div><div class="pa-card-sub">Maharashtra</div></div></a>
                    <a href="/producer-company-registration/delhi" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Delhi</div><div class="pa-card-sub">Delhi NCR</div></div></a>
                    <a href="/producer-company-registration/gurugram" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Gurugram</div><div class="pa-card-sub">Haryana</div></div></a>
                </div>
            </div>
            <div class="pa-city-block">
                <div class="pa-block-title">Related Services in Pune</div>
                <div class="pa-block-sub">End-to-end agricultural business support</div>
                <div class="pa-cross-grid">
                    <a href="/private-limited-company-registration/pune" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Pvt Ltd Registration</div><div class="pa-card-sub">Pune</div></div></a>
                    <a href="/accounting-services/pune" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Accounting Services</div><div class="pa-card-sub">Pune</div></div></a>
                    <a href="/gst-registration/pune" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">GST Registration</div><div class="pa-card-sub">Pune</div></div></a>
                    <a href="/income-tax-return/pune" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Income Tax Return</div><div class="pa-card-sub">Pune</div></div></a>
                    <a href="/statutory-audit/pune" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Statutory Audit</div><div class="pa-card-sub">Pune</div></div></a>
                    <a href="/payroll-services/pune" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Payroll Services</div><div class="pa-card-sub">Pune</div></div></a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- CONTENT FRESHNESS FOOTER -->
<section class="content-section" style="padding:32px;">
    <div class="content-container">
        <div class="text-content" style="font-size:13px;color:var(--text-muted);">
            <p><strong>Content Created:</strong> 18 March 2026 &nbsp;|&nbsp; <strong>Last Updated:</strong> <span id="lastUpdatedFooter">18 March 2026</span> &nbsp;|&nbsp; <strong>Next Review:</strong> 18 March 2027 &nbsp;|&nbsp; <strong>Reviewed By:</strong> CA &amp; CS Team, Patron Accounting LLP</p>
            <p>This page covers producer company registration in Pune. Content reviewed bi-annually (Freshness Tier 2) reflecting NABARD scheme updates, Companies Act amendments, Maharashtra stamp duty changes, and agricultural income tax provisions.</p>
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

<script>
// BF-1: Set last updated date dynamically
(function() {
    var opts = { day: 'numeric', month: 'long', year: 'numeric' };
    var dateStr = new Date().toLocaleDateString('en-IN', opts);
    var el1 = document.getElementById('lastUpdated');

    if (el1) el1.textContent = dateStr;
    var el2 = document.getElementById('lastUpdatedFooter');
    if (el2) el2.textContent = dateStr;
})();
</script>

<!-- External JS Dependencies (loaded by master layout in production) -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
@endsection
