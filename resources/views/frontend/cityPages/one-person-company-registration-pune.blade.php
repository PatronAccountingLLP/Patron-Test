
@extends('layouts.service-app')

<!-- External Dependencies (loaded by master layout in production) -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Barlow:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,400&family=DM+Sans:opsz,wght@9..40,400;9..40,500;9..40,600;9..40,700&display=swap" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

@section('meta')
    <title>OPC (One Person Company) Registration in Pune - Fees</title>
    <meta name="description" content="CA-assisted OPC registration in Pune. SPICe+ filing, nominee setup, statutory audit, GST, ITR - all handled. Serving Hinjewadi, Kharadi, Baner founders. Call +91 945 945 6700.">
    <link rel="canonical" href="/one-person-company-registration/pune">
    <meta name="robots" content="index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1">
    <meta property="og:title" content="OPC (One Person Company) Registration in Pune - Fees">
    <meta property="og:description" content="CA-assisted OPC registration in Pune. SPICe+ filing, nominee setup, statutory audit, GST, ITR - all handled. Serving Hinjewadi, Kharadi, Baner founders. Call +91 945 945 6700.">
    <meta property="og:url" content="/one-person-company-registration/pune">
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="Patron Accounting">
    <meta property="og:image" content="https://www.patronaccounting.com/images/og-default-square.png">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="1200">
    <meta property="og:image:type" content="image/png">
    <meta property="og:image:secure_url" content="https://www.patronaccounting.com/images/og-default-square.png">
    <meta property="og:image:alt" content="Patron Accounting - partner you can rely on">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="OPC (One Person Company) Registration in Pune - Fees">
    <meta name="twitter:description" content="CA-assisted OPC registration in Pune. SPICe+ filing, nominee setup, statutory audit, GST, ITR - all handled. Serving Hinjewadi, Kharadi, Baner founders. Call +91 945 945 6700.">
    <meta name="twitter:image" content="https://www.patronaccounting.com/images/og-default-square.png">
@endsection

@section('schema')
    <script type="application/ld+json">{
  "@context": "https://schema.org",
  "@graph": [
    {
      "@type": "Service",
      "name": "OPC Registration in Pune - One Person Company",
      "description": "CA-assisted OPC registration in Pune. SPICe+ filing, nominee setup, statutory audit, GST, ITR - all handled. Serving Hinjewadi, Kharadi, Baner founders. Call +91 945 945 6700.",
      "url": "https://www.patronaccounting.com/one-person-company-registration/pune",
      "serviceType": "OPC Registration in Pune - One Person Company",
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
        "url": "https://www.patronaccounting.com/one-person-company-registration/pune",
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
          "name": "OPC Registration in India: Process, Fees & Documents",
          "item": "https://www.patronaccounting.com/one-person-company-registration"
        },
        {
          "@type": "ListItem",
          "position": 3,
          "name": "OPC Registration in Pune - One Person Company",
          "item": "https://www.patronaccounting.com/one-person-company-registration/pune"
        }
      ]
    },
    {
      "@type": "FAQPage",
      "mainEntity": [
        {
          "@type": "Question",
          "name": "What is a One Person Company (OPC)?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "A One Person Company is a type of private limited company under Section 2(62) of the Companies Act 2013 that allows a single individual to form a company with limited liability, separate legal identity, and perpetual succession. One member, one nominee required. Indian citizen eligibility."
          }
        },
        {
          "@type": "Question",
          "name": "How to register an OPC in Pune?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Obtain DSC, reserve name via SPICe+ Part A, prepare MOA AOA and nominee consent, file SPICe+ Part B with RoC Pune with Maharashtra stamp duty, receive Certificate of Incorporation with PAN and TAN in 7-10 working days. Patron handles the complete process."
          }
        },
        {
          "@type": "Question",
          "name": "What is the cost of OPC registration in Pune?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Complete OPC registration starts from Rs 7,999 including DSC, DIN, name reservation, SPICe+ filing, MOA, AOA, PAN, TAN, and Certificate of Incorporation. Government fees and Maharashtra stamp duty at actuals. Annual compliance Rs 8,000-15,000 per year."
          }
        },
        {
          "@type": "Question",
          "name": "Can an NRI register an OPC in India?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Yes since the 2021 amendment. NRIs holding Indian citizenship are eligible with reduced residency requirement of 120 days in preceding calendar year. Foreign nationals without Indian citizenship are not eligible. FDI in OPC is not permitted."
          }
        },
        {
          "@type": "Question",
          "name": "What is the difference between OPC and Pvt Ltd?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "OPC requires 1 member plus 1 nominee while Pvt Ltd requires minimum 2 shareholders plus 2 directors. OPC has simpler compliance. OPC does not allow FDI while Pvt Ltd does. For Pune SaaS founders seeking VC funding Pvt Ltd is recommended. For solo consultants OPC is ideal."
          }
        },
        {
          "@type": "Question",
          "name": "Is there a turnover limit for OPC?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "No. Since April 2021 the mandatory conversion thresholds of Rs 50 lakh paid-up capital and Rs 2 crore average turnover have been removed. An OPC can grow without forced conversion. Voluntary conversion to Pvt Ltd is permitted anytime."
          }
        },
        {
          "@type": "Question",
          "name": "What are the annual compliances for OPC?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "AOC-4 within 180 days of FY close, MGT-7A within 60 days of AGM, ITR-6 by 31 October, DIN KYC by 30 September, statutory audit by CA, and at least 2 board meetings per year. Penalty for late AOC-4 or MGT-7A is Rs 200 per day."
          }
        },
        {
          "@type": "Question",
          "name": "What documents are needed for OPC registration?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "PAN and Aadhaar of director and nominee, address proof of both, passport photographs, DSC of director, proof of registered office in Pune with rent agreement plus NOC plus utility bill, nominee consent in Form INC-3, and director declaration. Quick Answers Pune mein OPC registration kaise hota hai? DSC banao, MCA portal pe SPICe+ se naam reserve karo, MOA-AOA-nominee consent file karo RoC Pune ke saath. 7-10 din mein Certificate mil jaata hai. Rs 7,999 se shuru. OPC aur sole proprietorship mein kya fark hai? OPC mein limited liability hoti hai - personal property safe. Sole proprietorship mein unlimited liability. OPC company hai, bank loan easy, credibility zyada. Kya ek hi aadmi OPC bana sakta hai? Haan. Sirf ek member aur ek nominee chahiye. Member aur director same person ho sakta hai. Indian citizen, 120 din India mein rehna zaroori."
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
                        OPC Registration in Pune: CA-Assisted One Person Company Incorporation
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
                            <p class="mb-0 text-dark benefit-paragraph"><span>Documents:</span> PAN, Aadhaar, address proof of director and nominee, registered office proof (rent agreement + NOC + utility bill), DSC</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Fees:</span> Starting from Rs 7,999 including government fees, DSC, DIN, SPICe+ filing, MOA, AOA, PAN, TAN, and Certificate of Incorporation</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Eligibility:</span> Indian citizen (resident 120+ days in preceding calendar year); one member, one nominee; no minimum capital requirement</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Timeline:</span> 7-10 working days from document submission to Certificate of Incorporation from RoC Pune</p>
                        </div>
                    </div>

                    <p class="mb-4 fw-bold" style="color: var(--blue); font-size: 15px;">Visit our Pune office or get started online - trusted by 10,000+ businesses across India</p>

                    <div class="hero-cta">
                        <a href="tel:+919459456700" class="btn-video text-decoration-none">
                            <span class="play-circle"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="width:14px;height:14px;color:#fff"><path d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/></svg></span>
                            Call +91 945 945 6700
                        </a>
                        <a href="mailto:sales@patronaccounting.com?subject=Enquiry%20for%20OPC%20Registration%20in%20Pune&body=Hello%2C%20I%20just%20visited%20your%20OPC%20Registration%20in%20Pune%20page.%20I%20would%20like%20to%20know%20more%20about%20it.%0A%0AThank%20you." class="btn-sample text-decoration-none">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="width:18px;height:18px;"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,12 2,6"/></svg>
                            Email Us
                        </a>
                        <a href="https://wa.me/919459456700?text=Hello%2C%20I%20just%20visited%20your%20OPC%20Registration%20in%20Pune%20page.%20I%20would%20like%20to%20know%20more%20about%20it." target="_blank" class="btn-sample text-decoration-none" rel="noopener">
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
                                            'service'  => 'OPC Registration',
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
    'ctaText'    => 'From IT freelancers in Hinjewadi to e-commerce sellers in Baner - Pune solo entrepreneurs trust Patron for OPC registration and lifelong compliance.',
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
            <a href="#what-section" class="toc-btn">What Is OPC</a>
            <a href="#who-section" class="toc-btn">Who Needs It</a>
            <a href="#services-section" class="toc-btn">Services</a>
            <a href="#procedure-section" class="toc-btn">Process</a>
            <a href="#documents-section" class="toc-btn">Documents</a>
            <a href="#challenges-section" class="toc-btn">Challenges</a>
            <a href="#fees-section" class="toc-btn">Fees</a>
            <a href="#timeline-section" class="toc-btn">Timeline</a>
            <a href="#benefits-section" class="toc-btn">Why Patron</a>
            <a href="#comparison-section" class="toc-btn">OPC vs Others</a>
            <a href="#faq-section" class="toc-btn">FAQs</a>
        </div>
        <button class="toc-arrow right" id="tocRight">&#10095;</button>
    </div>
</div>

<!-- SECTION 2: OVERVIEW / INTRO + TL;DR -->
<section class="content-section" id="overview-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">OPC Registration in Pune: Complete Overview</h2>
            <div class="content-text">
                <div class="highlight-box" style="margin-bottom:20px;">
                    <p><strong>&#128204; TL;DR - OPC Registration Services at a Glance</strong></p>
                    <p>A One Person Company (OPC) is a type of private limited company under Section 2(62) of the Companies Act 2013 that allows a single individual to incorporate and operate a company with limited liability, separate legal identity, and perpetual succession. OPC registration in Pune is filed through SPICe+ on the MCA portal, processed by RoC Pune, and takes 7-10 working days. Since the 2021 Amendment, there is no mandatory conversion threshold, NRIs with Indian citizenship are eligible (120-day residency), and voluntary conversion to Pvt Ltd is permitted anytime.</p>
                </div>
                <p>Pune's entrepreneurial ecosystem makes it one of India's most active cities for solo founder registrations. The city hosts 3,200+ startups, 1,752 SaaS companies, and a vast pool of IT freelancers and consultants in Hinjewadi, Kharadi, and Magarpatta. For solo entrepreneurs wanting credibility and liability protection without a co-founder, OPC is the ideal middle ground. Learn more about <a href="/one-person-company-registration">OPC registration across India</a>.</p>
                <div class="table-responsive-wrapper" style="margin-top:20px;">
                <table>
                    <thead><tr><th>Parameter</th><th>Detail</th></tr></thead>
                    <tbody>
                        <tr><td>Legal Framework</td><td>Companies Act 2013, Section 2(62); Companies (Incorporation) Rules 2014 (as amended 2021)</td></tr>
                        <tr><td>Members</td><td>1 sole member (shareholder) + 1 nominee; member can also be director</td></tr>
                        <tr><td>Eligibility</td><td>Indian citizen; 120+ days residency; NRIs eligible since 2021</td></tr>
                        <tr><td>Minimum Capital</td><td>No minimum requirement</td></tr>
                        <tr><td>Name Format</td><td>Must end with '(OPC) Private Limited'</td></tr>
                        <tr><td>Tax Rate</td><td>25% corporate (or 22% under Section 115BAA new regime)</td></tr>
                        <tr><td>Annual Compliance</td><td>AOC-4 + MGT-7A + ITR-6 + statutory audit + DIN KYC</td></tr>
                        <tr><td>Restrictions</td><td>No NBFC/banking; no FDI; one person can hold only 1 OPC</td></tr>
                    </tbody>
                </table>
                </div>
                <p</p>
                <p>Unlike a sole proprietorship where personal and business assets are inseparable, an OPC creates a separate legal entity protecting personal assets from business liabilities. Unlike a Pvt Ltd requiring two shareholders, an OPC needs only one member and one nominee. Patron Accounting's Pune office at RTC Silver, Wagholi handles OPC registration along with post-incorporation compliance including statutory audit, GST, ITR, and Zoho Books accounting.</p>
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
                <h2 class="section-title">What Is a One Person Company (OPC)?</h2>
                <div class="content-text what-is-definition">
                    
                    <p>A One Person Company (OPC) is a form of private limited company defined under Section 2(62) of the Companies Act 2013 that can be incorporated by a single person who acts as both the sole member (shareholder) and can serve as the sole director. The OPC enjoys all company characteristics - separate legal entity, limited liability, perpetual succession, ability to own property, sue and be sued.</p>
                    <p>The key feature is the mandatory nominee - another Indian citizen and resident who automatically becomes the member in case of death or incapacity. The nominee's consent (Form INC-3) is filed with RoC at incorporation, ensuring business continuity that sole proprietorships cannot guarantee.</p>
                    <p>Since the Companies (Incorporation) Second Amendment Rules 2021, mandatory conversion thresholds have been eliminated, the waiting period for voluntary conversion removed, and NRIs with Indian citizenship are eligible with 120-day residency. Patron provides <a href="/one-person-company-registration">OPC registration</a> with integrated post-incorporation compliance for Pune founders.</p>

                </div>
                <div class="highlight-box" style="margin-top:20px;">
                    <p><strong>Key Terms for OPC Registration:</strong></p>
                    <ul>
                        <li><strong>OPC:</strong> Private limited company under Section 2(62) allowing one person to incorporate with limited liability and perpetual succession.</li>
                        <li><strong>SPICe+ Form:</strong> Single integrated MCA form for incorporation, DIN, PAN, TAN, EPFO, ESIC, and GST registration.</li>
                        <li><strong>Nominee:</strong> Indian citizen appointed at incorporation who takes over in case of member's death or incapacity. Consent via Form INC-3.</li>
                        <li><strong>RoC Pune:</strong> Registrar of Companies Pune - handles all Maharashtra company registrations outside Mumbai.</li>
                        <li><strong>Section 115BAA:</strong> Option for 22% corporate tax rate without exemptions/deductions.</li>
                        <li><strong>2021 Amendment:</strong> Removed conversion thresholds, enabled NRI incorporation, reduced residency to 120 days.</li>
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
                            <text x="100" y="170" font-size="10" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial, sans-serif">OPC Registration</text>
                        </svg>
                    </div>
                    <div class="illustration-badge">
                        <span>OPC</span>
                        <strong>Pune Founders</strong>
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
            <h2 class="section-title">Who Needs OPC Registration in Pune?</h2>
            <div class="content-text">
                
                <p><strong>IT Freelancers and Consultants (Hinjewadi, Kharadi):</strong> Solo professionals invoicing through personal accounts get corporate identity, separate bank account, limited liability, and company invoices. Many multinationals prefer working with registered companies.</p>
                <p><strong>E-commerce Sellers:</strong> Amazon, Flipkart, Meesho sellers need company registration for marketplace onboarding, <a href="/gst-registration">GST registration</a>, and brand registry. OPC allows registration without a co-founder.</p>
                <p><strong>Content Creators (Baner, Koregaon Park):</strong> YouTubers and digital marketing professionals benefit from corporate tax rate (22-25%) versus individual rates (up to 30%+ surcharge) at higher income levels.</p>
                <p><strong>NRIs with Indian Citizenship:</strong> Since the 2021 amendment, NRIs can incorporate OPCs with just 120 days of Indian residency. No local partner needed.</p>
                <p><strong>First-Time Entrepreneurs:</strong> Testing a business idea before scaling to <a href="/private-limited-company-registration/pune">Pvt Ltd</a>. OPC offers simpler compliance with single-person control and anytime conversion option.</p>

            </div>
            </div>
        </div>
    </div>
</section>

<!-- SECTION 5: OUR SERVICES -->
<section class="content-section" id="services-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">OPC Registration Services Included</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Service</th><th>What We Do</th></tr></thead>
                    <tbody>
                        <tr><td>Digital Signature Certificate (DSC)</td><td>Class 3 DSC procurement for the sole director - required for signing all MCA e-forms electronically</td></tr>
                        <tr><td>Director Identification Number (DIN)</td><td>DIN allotment through SPICe+ form - unique identification for all MCA filings</td></tr>
                        <tr><td>Name Reservation</td><td>Company name availability check and reservation through SPICe+ Part A. Name must end with '(OPC) Private Limited'</td></tr>
                        <tr><td>SPICe+ Incorporation Filing</td><td>Complete Part B with RoC Pune including MOA (INC-33), AOA (INC-34), nominee consent (INC-3), declarations, and Maharashtra stamp duty</td></tr>
                        <tr><td>PAN and TAN</td><td>Applied simultaneously through SPICe+; issued along with Certificate of Incorporation</td></tr>
                        <tr><td>Statutory Auditor Appointment</td><td>CA appointed within 30 days of incorporation (Section 139(6)). Patron's CA team serves as statutory auditor</td></tr>
                        <tr><td>Bank Account Opening</td><td>Documentation support for opening current account in OPC's name at any Pune bank</td></tr>
                        <tr><td>GST Registration</td><td><a href="/gst-registration">GST registration</a> filed immediately post-incorporation if applicable</td></tr>
                        <tr><td>Post-Incorporation Compliance</td><td>Annual calendar configured - AOC-4, MGT-7A, ITR-6, DIN KYC, board minutes, statutory registers, <a href="/zoho-books-accounting">Zoho Books</a> setup</td></tr>

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
            <h2 class="section-title">How OPC Registration Works in Pune</h2>
            <p class="section-subtitle" style="text-align:left;max-width:100%;">Our 6-step process covers the complete OPC incorporation lifecycle - from DSC procurement through name reservation, document preparation, SPICe+ filing with RoC Pune, Certificate of Incorporation, and post-incorporation setup.</p>
        </header>
        <div class="steps-container">
            <div class="step-card">
    <div class="step-content">
        <span class="step-badge">Step 1</span>
        <h3 class="step-title">Obtain Digital Signature Certificate (DSC)</h3>
        <p class="step-description">The sole director applies for a Class 3 DSC from a government-recognised Certifying Authority. Required to digitally sign all MCA e-forms. Patron procures the DSC within 1-2 working days using the director's PAN, Aadhaar, and email verification.</p>
        <div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Class 3 DSC procured</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>1-2 working days</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>PAN/Aadhaar verified</span></div>
    </div>
    <div class="step-visual">
        <div class="step-illustration">
            <div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="25" y="10" width="70" height="65" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><rect x="38" y="25" width="44" height="18" rx="3" fill="#FFF3E0" stroke="#F5A623" stroke-width="1"/><text x="60" y="37" font-size="8" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">DSC</text><rect x="38" y="50" width="44" height="12" rx="2" fill="#E8F5E9" stroke="#10B981" stroke-width="0.8"/><text x="60" y="59" font-size="6" fill="#14365F" font-weight="600" text-anchor="middle" font-family="Arial">Class 3</text></svg></div>
            <span class="illustration-label">DSC Ready</span>
            <span class="step-number-large">01</span>
        </div>
    </div>
</div>
<div class="step-card">
    <div class="step-content">
        <span class="step-badge">Step 2</span>
        <h3 class="step-title">Reserve Company Name via SPICe+ Part A</h3>
        <p class="step-description">Patron files Part A of SPICe+ on the MCA portal. The name must be unique and end with '(OPC) Private Limited'. Up to two name options per application. Name reservation valid for 20 days. Patron checks availability against MCA database and trademark registry before filing.</p>
        <div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Name uniqueness checked</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>(OPC) Pvt Ltd format</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Valid for 20 days</span></div>
    </div>
    <div class="step-visual">
        <div class="step-illustration">
            <div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="20" y="8" width="80" height="70" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><text x="60" y="28" font-size="8" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">NAME</text><line x1="30" y1="35" x2="90" y2="35" stroke="#F5A623" stroke-width="1.5"/><text x="60" y="50" font-size="6" fill="#10B981" font-weight="600" text-anchor="middle" font-family="Arial">(OPC) Pvt Ltd</text><text x="60" y="65" font-size="6" fill="#14365F" font-weight="500" text-anchor="middle" font-family="Arial">SPICe+ Part A</text></svg></div>
            <span class="illustration-label">Name Reserved</span>
            <span class="step-number-large">02</span>
        </div>
    </div>
</div>
<div class="step-card">
    <div class="step-content">
        <span class="step-badge">Step 3</span>
        <h3 class="step-title">Prepare MOA, AOA, and Nominee Consent</h3>
        <p class="step-description">Memorandum of Association (MOA - INC-33) defines OPC's objectives. Articles of Association (AOA - INC-34) defines governance rules. Nominee provides consent in Form INC-3. Patron drafts all documents tailored to the Pune applicant's business activity and ensures Companies Act compliance.</p>
        <div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>MOA/AOA drafted</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Nominee INC-3 signed</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Director declaration ready</span></div>
    </div>
    <div class="step-visual">
        <div class="step-illustration">
            <div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="15" y="10" width="90" height="65" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><rect x="28" y="22" width="28" height="14" rx="2" fill="#FFF3E0" stroke="#F5A623" stroke-width="0.8"/><rect x="62" y="22" width="28" height="14" rx="2" fill="#E8F5E9" stroke="#10B981" stroke-width="0.8"/><rect x="28" y="42" width="28" height="14" rx="2" fill="#F0F4F8" stroke="#14365F" stroke-width="0.8"/><text x="42" y="32" font-size="5" fill="#14365F" font-weight="600" text-anchor="middle" font-family="Arial">MOA</text><text x="76" y="32" font-size="5" fill="#14365F" font-weight="600" text-anchor="middle" font-family="Arial">AOA</text><text x="42" y="52" font-size="5" fill="#14365F" font-weight="600" text-anchor="middle" font-family="Arial">INC-3</text></svg></div>
            <span class="illustration-label">Documents Prepared</span>
            <span class="step-number-large">03</span>
        </div>
    </div>
</div>
<div class="step-card">
    <div class="step-content">
        <span class="step-badge">Step 4</span>
        <h3 class="step-title">File SPICe+ Part B with RoC Pune</h3>
        <p class="step-description">Complete SPICe+ Part B filed with RoC Pune covering incorporation, DIN allotment, PAN, TAN, EPFO (if applicable), ESIC (if applicable), and GST (if opted). Attachments include MOA, AOA, INC-3, declarations, registered office proof, and identity documents. Maharashtra stamp duty paid electronically.</p>
        <div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>SPICe+ Part B filed</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Maharashtra stamp duty paid</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>All attachments included</span></div>
    </div>
    <div class="step-visual">
        <div class="step-illustration">
            <div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="20" y="10" width="80" height="65" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><text x="60" y="30" font-size="8" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">SPICe+</text><path d="M35 40h50" stroke="#F5A623" stroke-width="2" stroke-dasharray="4 2"/><text x="60" y="55" font-size="7" fill="#10B981" font-weight="600" text-anchor="middle" font-family="Arial">RoC Pune</text><text x="60" y="67" font-size="6" fill="#E8712C" font-weight="500" text-anchor="middle" font-family="Arial">+ Stamp Duty</text></svg></div>
            <span class="illustration-label">Filed with RoC</span>
            <span class="step-number-large">04</span>
        </div>
    </div>
</div>
<div class="step-card">
    <div class="step-content">
        <span class="step-badge">Step 5</span>
        <h3 class="step-title">Receive Certificate of Incorporation</h3>
        <p class="step-description">RoC Pune issues the Certificate of Incorporation with company PAN and TAN. The OPC is now a registered entity with a Corporate Identity Number (CIN). Typical processing 3-5 working days after filing. Total timeline 7-10 working days from document submission. Certificate issued digitally.</p>
        <div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>CIN assigned</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>PAN/TAN issued</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Digital certificate ready</span></div>
    </div>
    <div class="step-visual">
        <div class="step-illustration">
            <div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="25" y="5" width="70" height="75" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><rect x="35" y="18" width="50" height="30" rx="3" fill="#FFF3E0" stroke="#F5A623" stroke-width="1.2"/><text x="60" y="36" font-size="7" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">Certificate</text><text x="60" y="60" font-size="7" fill="#10B981" font-weight="600" text-anchor="middle" font-family="Arial">PAN + TAN</text><text x="60" y="72" font-size="6" fill="#14365F" font-weight="500" text-anchor="middle" font-family="Arial">CIN Issued</text></svg></div>
            <span class="illustration-label">OPC Incorporated</span>
            <span class="step-number-large">05</span>
        </div>
    </div>
</div>
<div class="step-card">
    <div class="step-content">
        <span class="step-badge">Step 6</span>
        <h3 class="step-title">Post-Incorporation Setup</h3>
        <p class="step-description">Statutory auditor appointed within 30 days under Section 139(6) - Patron's CA team serves as auditor. Current account opened in OPC's name. Statutory registers set up. GST registration filed if applicable. Zoho Books accounting configured for invoicing, expense tracking, and compliance-ready bookkeeping.</p>
        <div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Auditor appointed Day 1</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Bank account opened</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>GST + Zoho Books ready</span></div>
    </div>
    <div class="step-visual">
        <div class="step-illustration">
            <div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="20" y="10" width="80" height="65" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><circle cx="60" cy="35" r="15" fill="#E8F5E9" stroke="#10B981" stroke-width="1.5"/><path d="M53 35l4 4 10-10" stroke="#10B981" stroke-width="2.5" stroke-linecap="round"/><text x="60" y="62" font-size="6" fill="#14365F" font-weight="600" text-anchor="middle" font-family="Arial">Auditor + Bank + GST</text></svg></div>
            <span class="illustration-label">Fully Operational</span>
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
            <h2 class="section-title">Documents Required for OPC Registration in Pune</h2>
            <div class="content-text">
                
                <ul><li><strong>PAN Card:</strong> Of the sole director and nominee.</li><li><strong>Aadhaar Card:</strong> Of the sole director and nominee.</li><li><strong>Address Proof:</strong> Latest utility bill (within 2 months) of director and nominee.</li><li><strong>Passport Photographs:</strong> Of director and nominee.</li><li><strong>Registered Office Proof:</strong> Rent agreement (notarised) + NOC from owner + latest utility bill of premises in Pune.</li><li><strong>If Owned Property:</strong> Sale deed or property tax receipt.</li><li><strong>DSC:</strong> Class 3 Digital Signature Certificate of the sole director.</li><li><strong>Nominee Consent:</strong> Written consent in Form INC-3.</li><li><strong>Director Declaration:</strong> In Form INC-9.</li></ul>
                <div class="highlight-box" style="margin-top:16px;">
                    <p><strong>Pune-Specific Tip:</strong> Ensure the registered office utility bill is within 2 months and rent agreement is notarised - the most common RoC rejection reasons. If using a co-working space in Hinjewadi or Kharadi, obtain a formal NOC and utility bill from the co-working provider.</p>
                </div>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 9: CHALLENGES -->
<section class="content-section" id="challenges-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Common OPC Registration Challenges in Pune</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Challenge</th><th>Impact</th><th>How Patron Accounting Solves It</th></tr></thead>
                    <tbody>
                        <tr><td>Nominee Not Appointed</td><td>SPICe+ application rejected by RoC Pune without INC-3 nominee consent form</td><td>Complete nominee documentation (PAN, Aadhaar, address proof, INC-3) prepared before filing</td></tr>
                        <tr><td>Statutory Auditor Not Appointed</td><td>Section 139(6) violation discovered at annual return filing; non-compliance penalty</td><td>Patron's CA team appointed as statutory auditor at incorporation itself - Day 1 compliance</td></tr>
                        <tr><td>Maharashtra Stamp Duty Miscalculation</td><td>Underpayment causes application rejection or additional payment request from RoC</td><td>Exact stamp duty calculated based on authorised capital and paid correctly during SPICe+ filing</td></tr>
                        <tr><td>Annual Returns Not Filed</td><td>Rs 200/day penalty for late AOC-4/MGT-7A; Rs 5,000 for DIN KYC; penalties accumulate over years</td><td>Complete annual compliance calendar set up at incorporation; all deadlines tracked and met</td></tr>
                        <tr><td>OPC Chosen When Pvt Ltd Suits Better</td><td>SaaS founders cannot raise VC/angel funding through OPC; no FDI, no ESOPs, no multiple share classes</td><td>CA team assesses business model, funding plans, and growth trajectory before recommending entity type</td></tr>

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
            <h2 class="section-title">OPC Registration Fees in Pune</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Fee Component</th><th>Amount</th></tr></thead>
                    <tbody>
                        <tr><td>Complete OPC Incorporation</td><td>Rs 7,999 - Rs 12,999</td></tr>
                        <tr><td>Government Fees (MCA)</td><td>Rs 2,000 - Rs 4,000 (varies by authorised capital)</td></tr>
                        <tr><td>Maharashtra Stamp Duty</td><td>Rs 1,000 - Rs 5,000+ (varies by authorised capital)</td></tr>
                        <tr><td>GST Registration</td><td>Included or Rs 1,500</td></tr>
                        <tr><td>Statutory Audit (Annual)</td><td>Rs 5,000 - Rs 10,000/year</td></tr>
                        <tr><td>Annual Compliance Package</td><td>Rs 8,000 - Rs 15,000/year</td></tr>

                    </tbody>
                </table>
                </div>
                <p style="margin-top:16px;font-size:13px;color:var(--text-muted);font-style:italic;">All fees and charges listed are indicative only and do not constitute a binding offer. Final amounts may vary depending on the volume of work and the complexity involved.</p>
                <p style="margin-top:16px;">Professional service charges for drafting, filing, and representation are separate from the statutory fees. The exact fee depends on the complexity of the case, disputed amount, and number of hearings required. Contact us for a detailed quote.</p>
                <p style="margin-top:16px;"><strong>Get a free OPC Registration consultation - <a href="tel:+919459456700">Call +91 945 945 6700</a> or <a href="https://wa.me/919459456700?text=Hello%2C%20I%20just%20visited%20your%20OPC%20Registration%20in%20Pune%20page.%20I%20would%20like%20to%20know%20more%20about%20it." target="_blank" rel="noopener">WhatsApp us</a>. No-obligation assessment.</strong></p>
            </div>
        </div>
    </div>
</section>

<!-- SECTION 11: TIMELINE -->
<section class="content-section" id="timeline-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">OPC Registration Timeline for Pune Entrepreneurs</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Stage</th><th>Estimated Timeline</th></tr></thead>
                    <tbody>
                        <tr><td>DSC Procurement</td><td>1-2 working days</td></tr>
                        <tr><td>Name Reservation (SPICe+ Part A)</td><td>2-3 working days</td></tr>
                        <tr><td>Document Preparation</td><td>1-2 working days</td></tr>
                        <tr><td>SPICe+ Part B Filing</td><td>1 day</td></tr>
                        <tr><td>RoC Pune Processing</td><td>3-5 working days</td></tr>
                        <tr><td>Post-Incorporation Setup</td><td>1-2 weeks (auditor, bank, GST, accounting)</td></tr>

                    </tbody>
                </table>
                </div>
                <div class="highlight-box" style="margin-top:16px;">
                    
                    <p><strong>Total: 7-10 working days for Certificate of Incorporation + 1-2 weeks for post-incorporation setup.</strong> All OPC registrations for Pune district are processed by RoC Pune. Maharashtra stamp duty applies to MOA and AOA. Patron's Pune office at RTC Silver, Wagholi handles the entire process digitally with in-person support for document signing and bank account opening.</p>

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
            <h2 class="section-title">Why Choose Patron for OPC Registration in Pune</h2>
        </div>
        <div class="features-grid">
            <article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><h3>Pune Office Presence</h3><p>RTC Silver, Wagholi - serves freelancers in Hinjewadi/Kharadi, e-commerce sellers, startups in Baner/Koregaon Park, NRI entrepreneurs. Walk-in available.</p></article>
            <article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2"><path d="M12 2L2 7l10 5 10-5-10-5zM2 17l10 5 10-5M2 12l10 5 10-5"/></svg></div><h3>CA Firm - Not Legal-Tech</h3><p>Statutory auditor appointed Day 1. Financial statements prepared. ITR filed. GST managed. Annual RoC returns filed. Legal-tech platforms provide none of this.</p></article>
            <article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2"><rect x="2" y="3" width="20" height="14" rx="2"/><path d="M8 21h8M12 17v4"/></svg></div><h3>Complete Lifecycle</h3><p>DSC to Certificate to statutory audit to AOC-4/MGT-7A to ITR-6 to DIN KYC - all under one engagement. No separate providers needed.</p></article>
            <article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2"><circle cx="12" cy="12" r="10"/><path d="M12 6v6l4 2"/></svg></div><h3>10,000+ Businesses Served</h3><p>15+ years, 50,000+ documents, 4.9 Google rating. ISO 9001:2015 certified. OPC incorporation from Rs 7,999 with lifetime compliance support.</p></article>
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
                <p>With offices in Pune, Mumbai, Delhi, and Gurugram, Patron serves solo entrepreneurs and growing businesses with CA expertise in incorporation, compliance, tax, and accounting.</p>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 13: SELF-FILING vs PROFESSIONAL COMPARISON -->
<section class="content-section" id="comparison-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">OPC vs Sole Proprietorship vs Pvt Ltd</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Factor</th><th>OPC</th><th>Sole Proprietorship</th><th>Pvt Ltd</th></tr></thead>
                    <tbody>
                        <tr><td>Members Required</td><td>1 member + 1 nominee</td><td>1 person</td><td>Min 2 shareholders + 2 directors</td></tr>
                        <tr><td>Limited Liability</td><td>Yes - personal assets protected</td><td>No - unlimited personal liability</td><td>Yes - personal assets protected</td></tr>
                        <tr><td>Separate Legal Entity</td><td>Yes</td><td>No</td><td>Yes</td></tr>
                        <tr><td>Perpetual Succession</td><td>Yes (nominee takes over)</td><td>No - dies with owner</td><td>Yes</td></tr>
                        <tr><td>Tax Rate</td><td>22-25% corporate</td><td>Slab rate (up to 30%+)</td><td>22-25% corporate</td></tr>
                        <tr><td>FDI/Investment</td><td>Not permitted</td><td>Not applicable</td><td>Permitted</td></tr>
                        <tr><td>Best For Pune</td><td>Solo freelancers, consultants, e-commerce sellers</td><td>Very small, early testing</td><td>Startups seeking funding, multi-founder</td></tr>

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
            <h2 class="section-title">Related Services for Pune OPC Founders</h2>
            <div class="content-text">
                
                <p>OPC founders in Pune often need complementary services:</p>
                <ul><li><a href="/one-person-company-registration">OPC Registration (India)</a> - National overview.</li>
                    <li><a href="/private-limited-company-registration/pune">Pvt Ltd Registration in Pune</a> - When scaling beyond OPC.</li>
                    <li><a href="/gst-registration">GST Registration</a> - For OPCs with taxable supplies.</li>
                    <li><a href="/income-tax-return">Income Tax Return</a> - ITR-6 for OPCs.</li>
                    <li><a href="/zoho-books-accounting">Zoho Books Accounting</a> - Cloud accounting for OPCs.</li>
                    <li><a href="#">MSME Registration</a> - Udyam for OPC benefits.</li>
                    <li><a href="/trademark-registration">Trademark Registration</a> - Brand protection for OPCs.</li>
                    <li><a href="/accounting-services">Accounting Services</a> - Full accounting for all entities.</li></ul>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 15A: LEGAL FRAMEWORK -->
<section class="content-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Legal and Compliance Framework for OPC in Pune</h2>
            <div class="content-text">
                
                <p><strong>Primary Legislation:</strong></p>
                <ul><li><strong>Companies Act 2013 - Section 2(62):</strong> Defines OPC. Sections 3-22 govern incorporation. Section 139 governs statutory audit. Sections 92, 137 govern annual filings.</li>
                    <li><strong>Companies (Incorporation) Rules 2014:</strong> Rule 3 defines eligibility. Rule 6 governed conversion (amended 2021).</li>
                    <li><strong>2021 Amendment Rules:</strong> Removed mandatory conversion thresholds. NRI eligibility. 120-day residency. No voluntary conversion wait period.</li>
                    <li><strong>SPICe+ (INC-32):</strong> Single integrated form for incorporation, DIN, PAN, TAN, EPFO, ESIC, GST.</li></ul>
                <p style="margin-top:16px;"><strong>Tax Framework:</strong></p>
                <ul><li>Corporate Tax: <strong>25%</strong> (turnover below Rs 400 crore) or <strong>22%</strong> under Section 115BAA (no exemptions)</li>
                    <li>MAT: <strong>15%</strong> of book profit (normal regime); not applicable under 115BAA</li>
                    <li>Dividend: Taxable in shareholder's hands at applicable slab rate</li></ul>
                <p style="margin-top:16px;"><strong>Annual Compliance Penalties:</strong></p>
                <ul><li>Late AOC-4/MGT-7A: <strong>Rs 200/day</strong> of delay</li>
                    <li>Late DIN KYC: <strong>Rs 5,000</strong> flat penalty + DIN deactivation</li>
                    <li>Statutory auditor not appointed: <strong>Section 139 violation</strong></li>
                    <li>Late ITR-6: <strong>Rs 5,000-10,000</strong> under Section 234F</li></ul>
                <p style="margin-top:16px;"><strong>External Authority Links:</strong> <a href="https://www.mca.gov.in" target="_blank" rel="noopener">MCA Portal</a> | <a href="https://www.incometax.gov.in" target="_blank" rel="noopener">Income Tax Portal</a></p>

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
                    <h2 class="faq-expanded__title">Frequently Asked Questions: OPC Registration in Pune</h2>
                    <p class="faq-expanded__lead">Get answers about One Person Company registration, eligibility, fees, compliance, and OPC vs Pvt Ltd for Pune entrepreneurs.</p>
                    @include('partials.bigin-form', [
                        'variant'  => 'compact',
                        'service'  => 'OPC Registration',
                        'city'     => 'Pune',
                    ])
                </aside>
                <div class="faq-expanded__list">
                    <div class="faq-expanded__item" id="faq-1">
                        <h3 class="faq-expanded__q">What is a One Person Company (OPC)?</h3>
                        <div class="faq-expanded__a"><p>A One Person Company is a type of private limited company under Section 2(62) of the Companies Act 2013 that allows a single individual to form a company with limited liability, separate legal identity, and perpetual succession. One member, one nominee required. Indian citizen eligibility.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-2">
                        <h3 class="faq-expanded__q">How to register an OPC in Pune?</h3>
                        <div class="faq-expanded__a"><p>Obtain DSC, reserve name via SPICe+ Part A, prepare MOA AOA and nominee consent, file SPICe+ Part B with RoC Pune with Maharashtra stamp duty, receive Certificate of Incorporation with PAN and TAN in 7-10 working days. Patron handles the complete process.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-3">
                        <h3 class="faq-expanded__q">What is the cost of OPC registration in Pune?</h3>
                        <div class="faq-expanded__a"><p>Complete OPC registration starts from Rs 7,999 including DSC, DIN, name reservation, SPICe+ filing, MOA, AOA, PAN, TAN, and Certificate of Incorporation. Government fees and Maharashtra stamp duty at actuals. Annual compliance Rs 8,000-15,000 per year.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-4">
                        <h3 class="faq-expanded__q">Can an NRI register an OPC in India?</h3>
                        <div class="faq-expanded__a"><p>Yes since the 2021 amendment. NRIs holding Indian citizenship are eligible with reduced residency requirement of 120 days in preceding calendar year. Foreign nationals without Indian citizenship are not eligible. FDI in OPC is not permitted.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-5">
                        <h3 class="faq-expanded__q">What is the difference between OPC and Pvt Ltd?</h3>
                        <div class="faq-expanded__a"><p>OPC requires 1 member plus 1 nominee while Pvt Ltd requires minimum 2 shareholders plus 2 directors. OPC has simpler compliance. OPC does not allow FDI while Pvt Ltd does. For Pune SaaS founders seeking VC funding Pvt Ltd is recommended. For solo consultants OPC is ideal.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-6">
                        <h3 class="faq-expanded__q">Is there a turnover limit for OPC?</h3>
                        <div class="faq-expanded__a"><p>No. Since April 2021 the mandatory conversion thresholds of Rs 50 lakh paid-up capital and Rs 2 crore average turnover have been removed. An OPC can grow without forced conversion. Voluntary conversion to Pvt Ltd is permitted anytime.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-7">
                        <h3 class="faq-expanded__q">What are the annual compliances for OPC?</h3>
                        <div class="faq-expanded__a"><p>AOC-4 within 180 days of FY close, MGT-7A within 60 days of AGM, ITR-6 by 31 October, DIN KYC by 30 September, statutory audit by CA, and at least 2 board meetings per year. Penalty for late AOC-4 or MGT-7A is Rs 200 per day.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-8">
                        <h3 class="faq-expanded__q">What documents are needed for OPC registration?</h3>
                        <div class="faq-expanded__a"><p>PAN and Aadhaar of director and nominee, address proof of both, passport photographs, DSC of director, proof of registered office in Pune with rent agreement plus NOC plus utility bill, nominee consent in Form INC-3, and director declaration.</p></div>
                    </div>
                </div>
            </div>


            <!-- Quick Answers -->
            <div class="highlight-box" style="margin-top:32px;">
                <p><strong>Quick Answers</strong></p>
                <p><strong>Pune mein OPC registration kaise hota hai?</strong> DSC banao, MCA portal pe SPICe+ se naam reserve karo, MOA-AOA-nominee consent file karo RoC Pune ke saath. 7-10 din mein Certificate mil jaata hai. Rs 7,999 se shuru.</p>
                <p><strong>OPC aur sole proprietorship mein kya fark hai?</strong> OPC mein limited liability hoti hai - personal property safe. Sole proprietorship mein unlimited liability. OPC company hai, bank loan easy, credibility zyada.</p>
                <p><strong>Kya ek hi aadmi OPC bana sakta hai?</strong> Haan. Sirf ek member aur ek nominee chahiye. Member aur director same person ho sakta hai. Indian citizen, 120 din India mein rehna zaroori.</p>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 18: URGENCY CTA -->
<section class="content-section" style="background: var(--orange-lighter) !important; border-left: 4px solid var(--orange);">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Non-Filing Penalties Compound Daily - Register and Stay Compliant</h2>
            <div class="content-text">
                
                <p>Non-filing of OPC annual returns (AOC-4 and MGT-7A) with RoC Pune attracts Rs 200 per day penalty - compounding rapidly. DIN KYC failure: Rs 5,000 penalty and DIN deactivation. Not appointing statutory auditor within 30 days violates Section 139(6). If you have already incorporated an OPC and missed compliance deadlines, Patron's CA team can regularise filings and clear penalties.</p>
                <p style="margin-top:16px;"><strong>Get started - <a href="tel:+919459456700">Call +91 945 945 6700</a> or <a href="https://wa.me/919459456700?text=Hello%2C%20I%20just%20visited%20your%20OPC%20Registration%20in%20Pune%20page.%20I%20would%20like%20to%20know%20more%20about%20it." target="_blank" rel="noopener">WhatsApp us</a>.</strong></p>

            </div>
        </div>
    </div>
</section>

<!-- CONCLUSION + CTA BLOCK (Dark) -->
<section class="content-section" style="background: var(--blue) !important;">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title" style="color:#FFFFFF !important;">Get Started with OPC Registration in Pune</h2>
            <div class="content-text" style="text-align:left;">
                
                <p style="color:rgba(255,255,255,0.9);">OPC registration in Pune provides solo entrepreneurs with limited liability, separate legal entity, and perpetual succession without requiring a co-founder. With the 2021 amendments removing conversion thresholds and enabling NRI incorporation, OPC is one of the most flexible entity structures under the Companies Act 2013.</p>
                <p style="color:rgba(255,255,255,0.9);">Patron Accounting's Pune office serves freelancers in Hinjewadi and Kharadi, e-commerce sellers, content creators in Baner and Koregaon Park, solo consultants, NRI entrepreneurs, and first-time founders - handling the complete lifecycle from SPICe+ filing to statutory audit, GST, ITR, and annual RoC compliance.</p>
                <p style="color:rgba(255,255,255,0.9);">With 15+ years, 10,000+ businesses served, and 4.9 Google rating, Patron is the only CA firm in Pune bundling OPC incorporation with statutory auditor, Zoho Books, GST, ITR, and annual RoC management under one engagement.</p>

            </div>
            <div style="display:flex;gap:14px;flex-wrap:wrap;margin-top:24px;">
                <a href="tel:+919459456700" style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:var(--orange);color:#fff;border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#128222; Call +91 945 945 6700</a>
                <a href="https://wa.me/919459456700?text=Hello%2C%20I%20just%20visited%20your%20OPC%20Registration%20in%20Pune%20page.%20I%20would%20like%20to%20know%20more%20about%20it." target="_blank" style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:#25D366;color:#fff;border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;" rel="noopener">&#128172; WhatsApp Us</a>
                <a href="mailto:sales@patronaccounting.com?subject=Enquiry%20for%20OPC%20Registration%20in%20Pune&body=Hello%2C%20I%20just%20visited%20your%20OPC%20Registration%20in%20Pune%20page.%20I%20would%20like%20to%20know%20more%20about%20it.%0A%0AThank%20you." style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:transparent;color:#fff;border:2px solid rgba(255,255,255,0.3);border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#9993;&#65039; Email Us</a>
            </div>
            <p style="color:rgba(255,255,255,0.7);font-size:13px;margin-top:16px;">Book a Free Consultation - No Obligation.</p>
        </div>
    </div>
</section>

<!-- GSTAT STATE BENCH CITY PAGES (32 Pages) -->
<section class="content-section" style="padding:48px 32px;background:var(--gray-50);">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title" style="text-align:center;margin-bottom:12px;">OPC Registration Services Across India</h2>
            <p style="text-align:center;color:var(--text-muted);font-size:15px;margin-bottom:40px;">Patron Accounting provides One Person Company registration and compliance services in major cities across India.</p>
            <div class="pa-city-block" style="margin-bottom:40px;">
                <div class="pa-block-title">Available Cities</div>
                <div class="pa-block-sub">OPC registration and compliance</div>
                <div class="pa-city-grid">
                    <div class="pa-city-card" style="opacity:0.6; pointer-events:none; border:2px solid var(--orange); position:relative;"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Pune</div><div class="pa-card-sub">Maharashtra</div></div><span style="position:absolute; top:6px; right:8px; font-size:10px; color:var(--orange); font-weight:700; text-transform:uppercase; letter-spacing:0.5px;">You're here</span></div>
                    <a href="/one-person-company-registration/mumbai" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Mumbai</div><div class="pa-card-sub">Maharashtra</div></div></a>
                    <a href="/one-person-company-registration/delhi" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Delhi</div><div class="pa-card-sub">Delhi NCR</div></div></a>
                    <a href="/one-person-company-registration/gurugram" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Gurugram</div><div class="pa-card-sub">Haryana</div></div></a>
                </div>
            </div>
            <div class="pa-city-block">
                <div class="pa-block-title">Related Services in Pune</div>
                <div class="pa-block-sub">End-to-end startup support</div>
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
            <p>This page covers One Person Company registration in Pune. Content reviewed bi-annually (Freshness Tier 2) reflecting MCA notifications, Companies Act amendments, stamp duty changes, and tax rate updates.</p>
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
