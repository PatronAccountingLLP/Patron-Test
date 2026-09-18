@extends('layouts.service-app')
@push('styles')
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Barlow:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,400&family=DM+Sans:opsz,wght@9..40,400;9..40,500;9..40,600;9..40,700&display=swap" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
@endpush








@section('meta')
    <title>EOR India for Fintech: CA-Led RBI-Aware</title>
    <meta name="description" content="Fintech hiring in India - banking-API engineers, RBI compliance, payment data localization. Patron Accounting CA-led with NBFC, PA awareness.">
    <link rel="canonical" href="/eor-india-for-fintechs">
    <meta name="robots" content="index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1">
    <meta property="og:title" content="EOR India for Fintech 2026: CA-Led RBI-Aware | Patron">
    <meta property="og:description" content="Fintech hiring in India - banking-API engineers, RBI compliance, payment data localization. Patron Accounting CA-led with NBFC, PA awareness.">
    <meta property="og:url" content="/eor-india-for-fintechs">
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="Patron Accounting">
    <meta property="og:image" content="https://www.patronaccounting.com/images/og-default-square.png">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="1200">
    <meta property="og:image:type" content="image/png">
    <meta property="og:image:secure_url" content="https://www.patronaccounting.com/images/og-default-square.png">
    <meta property="og:image:alt" content="Patron Accounting - partner you can rely on">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="EOR India for Fintech 2026: CA-Led RBI-Aware | Patron">
    <meta name="twitter:description" content="Fintech hiring in India - banking-API engineers, RBI compliance, payment data localization. Patron Accounting CA-led with NBFC, PA awareness.">
    <meta name="twitter:image" content="https://www.patronaccounting.com/images/og-default-square.png">
@endsection

@section('schema')
    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@graph": [
        {
          "@type": "BreadcrumbList",
          "@id": "https://www.patronaccounting.com/eor-india-for-fintechs#breadcrumb",
          "itemListElement": [
            { "@type": "ListItem", "position": 1, "name": "Home", "item": "https://www.patronaccounting.com/" },
            { "@type": "ListItem", "position": 2, "name": "Services", "item": "https://www.patronaccounting.com/services" },
            { "@type": "ListItem", "position": 3, "name": "EOR India for Fintech", "item": "https://www.patronaccounting.com/eor-india-for-fintechs" }
          ]
        },
        {
          "@type": "FAQPage",
          "@id": "https://www.patronaccounting.com/eor-india-for-fintechs#faq",
          "mainEntity": [
            {
              "@type": "Question",
              "name": "What is the best EOR for fintech hiring in India?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "It depends on operational model and Indian-market exposure. For pilot or early hiring with no Indian customer touch, India-only EOR specialists deliver fastest entry. For Series A-D fintechs with Indian customer exposure, payment data touch, or sustained engineering operations, Patron Accounting LLP's CA-led path delivers fintech-specific compliance - RBI Storage of Payment System Data, Payment Aggregator licensing, NBFC registration, Digital Lending Guidelines 2022, KYC AML, FIU-IND - that EOR-only models cannot."
              }
            },
            {
              "@type": "Question",
              "name": "How does RBI regulate foreign fintechs hiring in India?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "Through layered sectoral overlay. PSSA 2007 Sections 10(2) and 18 give RBI authority over payment systems. Storage of Payment System Data Circular (April 2018) requires India-only data residency. Payment Aggregator Guidelines (March 2020) require licensing with Rs 15-25 crore net worth. NBFC Master Directions cover lending, AA, P2P, MFI. Digital Lending Guidelines (September 2022) regulate digital lending and FLDG. PRAVAAH Portal mandatory from 1 May 2025."
              }
            },
            {
              "@type": "Question",
              "name": "Can my Indian engineers access US or EU customer payment data?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "Yes, if your operational model is Model B (Global Backend Engineering) or Model C (Foreign-Market with Indian Centre) and the data does not include Indian payment system data. The RBI 2018 Circular applies only to Indian payment data; foreign customer payment data is governed by foreign jurisdictions and DPDP Act 2023. DPDP processor agreement covers cross-border data flow. If engineers touch Indian payment data, India-only residency becomes mandatory."
              }
            },
            {
              "@type": "Question",
              "name": "Do I need a Payment Aggregator license to hire fintech engineers in India?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "Not solely for hiring. The PA license is required only if you facilitate online payments by collecting funds from Indian customers and settling to Indian merchants. If your Indian engineers build software for foreign markets (Model C), no PA license is needed. If your fintech enters the Indian market and facilitates payments (Model A), PA license becomes necessary - Rs 15 crore initial net worth, Rs 25 crore by third year. Filed via PRAVAAH Portal. End-to-end timeline approximately 12-18 months."
              }
            },
            {
              "@type": "Question",
              "name": "How does Storage of Payment System Data 2018 affect my India team?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "If your India team accesses or processes Indian payment system data, the RBI 2018 Circular requires that data be stored only in India under PSSA Sections 10(2) and 18. Cross-border processing is allowed but data must return to India within 24 hours and foreign copies must be deleted. CERT-IN empanelled auditor System Audit Report required. Half-yearly CEO/MD compliance certificate. The rule does not apply if your team accesses only foreign customer payment data (Model B/C)."
              }
            },
            {
              "@type": "Question",
              "name": "What are Digital Lending Guidelines 2022 implications for foreign fintechs?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "Substantial. Loan Service Provider (LSP) framework requires regulated entity (RE) accountability for any technology partner facilitating lending. First Loss Default Guarantee (FLDG) restricted to maximum 5 percent of loan portfolio with 12-month cap. Prior explicit consent for data processing. Biometric data collection restrictions. Key Fact Statement (KFS) mandatory in standardised format. Data localisation requirements. Foreign BNPL providers, co-lending platforms, and digital lenders face restructuring."
              }
            },
            {
              "@type": "Question",
              "name": "When does a fintech need an NBFC license vs subsidiary?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "Different decisions. A Pvt Ltd subsidiary is the corporate vehicle - needed for any sustained Indian operation. NBFC registration is on top of subsidiary - required if the subsidiary engages in lending, investment, AA, P2P, or MFI activities. NBFC categories: NBFC-Investment & Credit, NBFC-AA, NBFC-P2P, NBFC-MFI. Most foreign fintechs entering India need both: subsidiary first (60-75 days), then NBFC license (6-12 months) where applicable."
              }
            },
            {
              "@type": "Question",
              "name": "How much do payment engineers cost in Bangalore vs Mumbai?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "Comparable for fintech roles - unusual for India. Most engineering roles see Mumbai pay 10-15 percent below Bangalore. For fintech, Mumbai often matches or exceeds Bangalore due to banking partner proximity (HDFC, ICICI, Axis, Kotak HQs in Mumbai), RBI Central Office presence, and legacy financial services concentration. Bangalore mid backend/payment engineer Rs 25-45 LPA; Mumbai Rs 25-44 LPA. Senior Rs 45-85 LPA in both cities. Pune and Hyderabad 15-20 percent lower."
              }
            }
          ]
        },
        {
          "@type": "Service",
          "@id": "https://www.patronaccounting.com/eor-india-for-fintechs#service",
          "name": "EOR India for Fintech",
          "description": "Patron Accounting LLP provides CA-led India hiring and compliance service for foreign fintech companies. Coverage includes operational-model-aware engagement design, RBI Payment Aggregator and NBFC license filing through PRAVAAH Portal, payment data residency under the 2018 RBI Circular, KYC AML and PMLA framework, Digital Lending Guidelines 2022 implementation, and Permanent Establishment risk diagnosis for India-customer-facing roles.",
          "serviceType": "Employer of Record and Compliance Service for Fintech",
          "provider": { "@id": "https://www.patronaccounting.com/#organization" },
          "areaServed": { "@type": "Country", "name": "India", "sameAs": "https://en.wikipedia.org/wiki/India" },
          "about": [
            { "@type": "Thing", "name": "Financial Technology", "sameAs": "https://en.wikipedia.org/wiki/Financial_technology" },
            { "@type": "Thing", "name": "Reserve Bank of India", "sameAs": "https://en.wikipedia.org/wiki/Reserve_Bank_of_India" },
            { "@type": "Thing", "name": "Employer of Record", "sameAs": "https://en.wikipedia.org/wiki/Employer_of_record" },
            { "@type": "Thing", "name": "Non-banking financial company", "sameAs": "https://en.wikipedia.org/wiki/Non-banking_financial_company_(India)" }
          ],
          "mainEntityOfPage": {
            "@type": "WebPage",
            "@id": "https://www.patronaccounting.com/eor-india-for-fintechs",
            "datePublished": "2026-05-07T08:00:00+05:30"
          
          }
        }
      ]
    }
    </script>
@endsection

@section('content')
@push('styles')
<link rel="stylesheet" href="{{ asset('css/pages-9.css') }}?v=1">
@endpush
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
                        EOR India for Fintech - CA-Led Hiring with RBI Sectoral Overlay Awareness
                    </h1>

                    <div class="expert-attribution-box">
                        <span class="eab-check"><svg width="16" height="16" viewBox="0 0 24 24" fill="currentColor"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg></span>
                        <span class="eab-title">Reviewed by CA and CS Team, Patron Accounting LLP</span>
                        <span class="eab-meta">
                            <span>ICAI & ICSI Registered</span><span class="eab-sep">|</span>
                            <span>15+ Years Experience</span><span class="eab-sep">|</span>
                            <span>Last Updated: <span id="lastUpdated"></span></span>
                        </span>
                        <a href="/authorhub/ca-sundram-gupta" class="eab-link">Verify Credentials &rarr;</a>
                    </div>

                    <div class="mb-4">
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Operational Models:</span> India-Market, Global Backend, Foreign-Market with Indian Centre - each carries distinct RBI footprints</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>RBI Data Localization:</span> Storage of Payment System Data 2018 under PSSA 2007 Sections 10(2) and 18 - 24-hour return rule</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>License Decisions:</span> Payment Aggregator (Rs 15-25 cr net worth), NBFC, NBFC-AA, Digital Lending LSP framework</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Banking-API Ready:</span> Bangalore and Mumbai mid payment engineer Rs 25-45 LPA - payment, risk/fraud ML, RegTech</p>
                        </div>
                    </div>

                    <p class="mb-4 fw-bold" style="color: var(--blue); font-size: 15px;">10,000+ Businesses Served | 4.9 Google Rating | Offices in Pune, Mumbai, Delhi, Gurugram | Patron Accounting LLP since 2019</p>

                    <div class="hero-cta">
                        <a href="tel:+919459456700" class="btn-video text-decoration-none">
                            <span class="play-circle"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="width:14px;height:14px;color:#fff"><path d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/></svg></span>
                            Call +91 945 945 6700
                        </a>
                        <a href="mailto:info@patronaccounting.com" class="btn-sample text-decoration-none">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="width:18px;height:18px;"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,12 2,6"/></svg>
                            Email Us
                        </a>
                        <a href="https://wa.me/919459456700?text=Hello%2C%20I%20just%20visited%20your%20Eor%20India%20for%20Fintechs%20page.%20I%20would%20like%20to%20know%20more%20about%20it." target="_blank" class="btn-sample text-decoration-none" rel="noopener">
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
                                            'service'  => 'EOR India for Fintech',
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
    'ctaText'    => 'Trusted by Series B-D fintech founders and CTOs across the US, UK, EU, Singapore, and Australia for India-side RBI-aware hiring and compliance engagements.',
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
            <a href="#overview-section" class="toc-btn">Overview</a>
            <a href="#what-section" class="toc-btn">What Is EOR Fintech</a>
            <a href="#who-section" class="toc-btn">Operational Models</a>
            <a href="#services-section" class="toc-btn">What We Deliver</a>
            <a href="#procedure-section" class="toc-btn">Onboarding Process</a>
            <a href="#documents-section" class="toc-btn">Documents Checklist</a>
            <a href="#challenges-section" class="toc-btn">Fintech Challenges</a>
            <a href="#fees-section" class="toc-btn">Cost Comparison</a>
            <a href="#timeline-section" class="toc-btn">Time Taken</a>
            <a href="#benefits-section" class="toc-btn">Why CA-Led</a>
            <a href="#comparison-section" class="toc-btn">Generic EOR vs Patron</a>
            <a href="#faq-section" class="toc-btn">FAQs</a>
        </div>
        <button class="toc-arrow right" id="tocRight">&#10095;</button>
    </div>
</div>

<!-- SECTION 2: OVERVIEW / INTRO + TL;DR -->
<section class="content-section" id="overview-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">EOR India for Fintech: CA-Led Hiring With RBI Sectoral Overlay</h2>
            <div class="content-text">
                <div class="highlight-box" style="margin-bottom:20px;">
                    <p><strong>&#128204; TL;DR - EOR India for Fintech Services at a Glance</strong></p>
                    <p>Fintech is the densest sectoral compliance vertical for foreign companies hiring in India. RBI overlays everything: payment data localization (April 2018), Payment Aggregator licensing (2020), Digital Lending Guidelines (2022), Account Aggregator framework, NBFC requirements, KYC Master Direction, PMLA. Generic EOR vendors handle none of this. Three operational models drive different paths: India-Market Fintech, Global Backend Engineering, Foreign-Market Fintech with Indian engineering centre. Patron Accounting LLP runs the path with all RBI sectoral compliance integrated under one CA-led engagement.</p>
                </div>
                <p>This page is for fintech founders, CTOs, COOs, and VPs of Engineering at foreign fintech companies thinking through India hiring strategy with awareness of RBI sectoral overlay, payment data localization, and license decisions. The honest CA-led answer is rarely 'pick a generic EOR'; it is 'design the engagement around your operational model and RBI footprint, then execute'. Patron Accounting LLP runs that engagement under one team.</p>
                <p>Patron Accounting LLP brings 15+ years of CA-led India compliance, four physical offices in Pune, Mumbai, Delhi, and Gurugram - Mumbai presence particularly valuable for fintech clients requiring proximity to RBI Central Office, banking partners (HDFC, ICICI, Axis, Kotak HQs), and SEBI. Foreign fintechs headquartered in the United States, the United Kingdom, the European Union, Singapore, and Australia rely on us for integrated RBI license filings, payment data residency advisory, KYC AML framework setup, and ongoing compliance.</p>
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
                <h2 class="section-title">What Is EOR India for Fintech?</h2>
                <div class="content-text what-is-definition">
                    
                    <p>EOR India for fintech is the use of an Employer of Record - or a CA-led equivalent service - by foreign-based fintech companies hiring banking-API engineers, payment engineering, risk/fraud/underwriting ML, compliance engineering, and adjacent roles in India tuned to fintech-specific concerns: RBI Storage of Payment System Data compliance (April 2018), Payment Aggregator and NBFC license decisions, Digital Lending Guidelines 2022 LSP framework, Account Aggregator architecture, and PMLA/KYC compliance.</p>
<p>Fintech companies have the densest sectoral compliance footprint of any industry hiring in India - layered on top of generic foreign-employer requirements. RBI sectoral overlays effectively localise core payment data, restrict cross-border flows, mandate licensing for many activities, and impose half-yearly CEO/MD compliance certificates.</p>
<p>Patron Accounting LLP positions itself as the CA-led alternative to traditional EOR vendors for this audience - earning revenue across partnership, subsidiary setup, RBI license filings, payment data residency advisory, KYC/AML framework setup, and ongoing compliance.</p>

                </div>
                <div class="highlight-box" style="margin-top:20px;">
                    <p><strong>Key Terms for EOR India for Fintech:</strong></p>
                    <ul>
  <li><strong>RBI:</strong> Reserve Bank of India - the central bank and primary regulator for banking, payments, NBFCs, and most fintech activity. Issues directives under PSSA 2007, BR Act 1949, FEMA 1999, and various Master Directions.</li>
  <li><strong>PSSA 2007:</strong> Payment and Settlement Systems Act 2007. Sections 10(2) and 18 empower RBI to regulate payment systems, including data storage requirements and PA/PG licensing.</li>
  <li><strong>Storage of Payment System Data:</strong> RBI Circular DPSS.CO.OD.No.2785 dated 6 April 2018. Requires all Indian payment system data to be stored only in India. Cross-border processing allowed; data must return within 24 hours and foreign copy deleted.</li>
  <li><strong>Payment Aggregator (PA):</strong> Entity that facilitates online payments by collecting funds from customers and settling with merchants. Licensed under RBI PA Guidelines 17 March 2020. Net worth Rs 15 crore initially, Rs 25 crore by end of third year.</li>
  <li><strong>NBFC:</strong> Non-Banking Financial Company. Required for lending, investment, P2P, AA, MFI activities. Categories include NBFC-Investment & Credit, NBFC-AA, NBFC-P2P, NBFC-MFI. Registered with RBI.</li>
  <li><strong>Account Aggregator (AA):</strong> RBI-licensed NBFC-AA framework for consent-based financial data sharing between Financial Information Providers (FIPs) and Financial Information Users (FIUs).</li>
  <li><strong>Digital Lending Guidelines (DLG) 2022:</strong> RBI guidelines issued September 2022 governing digital lending. Covers Loan Service Providers (LSPs), First Loss Default Guarantee (FLDG) restrictions, prior consent, data localisation.</li>
  <li><strong>PMLA 2002:</strong> Prevention of Money Laundering Act 2002. Mandates KYC, record keeping, Suspicious Transaction Reports (STRs) to FIU-IND. Applies to all reporting entities including PAs, NBFCs, and banks.</li>
  <li><strong>PRAVAAH Portal:</strong> RBI's centralised portal for all regulatory authorisation, licence, and approval applications. Mandatory from 1 May 2025.</li>
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
                            <text x="100" y="170" font-size="10" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial, sans-serif">EOR India for Fintech</text>
                        </svg>
                    </div>
                    <div class="illustration-badge">
                        <span>RBI Sectoral Overlay</span>
                        <strong>PSSA 2007 + PA 2020 + DLG 2022 + AA Framework</strong>
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
            <h2 class="section-title">Three Fintech Operational Models for India Hiring</h2>
            <div class="content-text">
                
                <p>Foreign fintechs hiring in India fall into three operational patterns. Each carries distinct RBI footprints. Understanding which pattern your company uses determines which licenses, data residency rules, and compliance layers actually apply.</p>
<h3 style="color:var(--blue);margin-top:24px;">Model A - India-Market Fintech (Highest Compliance Density)</h3>
<p><strong>What it looks like:</strong> Foreign fintech entering the Indian market - serving Indian customers with payment, lending, investment, or insurance products. Examples: foreign neobanks, BNPL platforms, lending apps, wealth management apps, remittance products targeting Indian users.</p>
<p><strong>Compliance footprint:</strong> Indian subsidiary mandatory; PA or PG licence required if facilitating online payments (Rs 15-25 crore net worth threshold); NBFC registration if lending, investing, or AA activity; KYC under RBI Master Direction; PMLA compliance with FIU-IND reporting; AA framework if accessing financial data; DLG 2022 if digital lending; payment data localisation under RBI 2018 Circular; sectoral DPDP overlay; half-yearly CEO/MD compliance certificate; CERT-IN empanelled auditor System Audit Report.</p>
<p><strong>Where Patron adds value:</strong> Subsidiary setup, license filing through PRAVAAH Portal, net worth structuring, KYC AML framework, PMLA compliance, FIU-IND registration, payment data residency architecture, CERT-IN audit support, half-yearly compliance certificates.</p>
<h3 style="color:var(--blue);margin-top:24px;">Model B - Global Backend Engineering (Cleanest)</h3>
<p><strong>What it looks like:</strong> Indian engineers building global product with no Indian customer focus and no Indian payment data touch. Examples: Indian engineering team for a US-only neobank, India-based payment infrastructure engineers serving foreign customers exclusively, global risk modelling teams.</p>
<p><strong>Compliance footprint:</strong> RBI Storage of Payment System Data does NOT apply if Indian payment data is not handled. PA/NBFC licenses NOT required. DPDP Act applies generically (not sectoral RBI overlay). Standard generic foreign-employer framework: cost-plus transfer pricing, IP assignment, ESOP advisory, GST export of services, statutory contributions. Customer-facing roles may still trigger PE risk.</p>
<p><strong>Where Patron adds value:</strong> Cost-plus markup structuring (typically 12-18 percent), Form 3CEB transfer pricing, IP assignment under Copyright Act, foreign parent ESOP advisory, GST registration with LUT under Rule 96A CGST Rules, statutory compliance.</p>
<h3 style="color:var(--blue);margin-top:24px;">Model C - Foreign-Market Fintech with Indian Engineering Centre (Common)</h3>
<p><strong>What it looks like:</strong> Foreign fintech (Stripe, Adyen, Block, Wise, Plaid analogues) operating an Indian engineering centre that builds and operates products for foreign markets. India team contributes engineering velocity but does not interact with Indian payment data or Indian customers. Hybrid of A and B.</p>
<p><strong>Compliance footprint:</strong> Indian subsidiary recommended for sustained scale (15+ engineers). RBI sectoral overlay generally does NOT apply if Indian payment data is not handled. DPDP processor agreement covers customer data access. Cost-plus transfer pricing for parent-funded engineering services. ESOP advisory at frontier-fintech valuations. PE risk diagnosis for any India sales or BD roles.</p>
<p><strong>Where Patron adds value:</strong> Subsidiary setup, cost-plus transfer pricing with Form 3CEB, DPDP processor agreement, ESOP advisory, IP assignment framework, PE risk assessment, GST export of services with LUT.</p>
<p style="margin-top:20px;"><strong>Why operational-model framing matters:</strong> A generic EOR onboards a fintech hire with a standard offer letter regardless of model. Model A vs Model B vs Model C drives radically different RBI licensing, data residency, and KYC compliance footprints. Patron's discovery call maps your company against the three models and structures the engagement accordingly - including a candid assessment of whether you actually need a PA license or whether a sustained Model C operation can avoid it.</p>

            </div>
            </div>
        </div>
    </div>
</section>

<!-- SECTION 5: OUR SERVICES -->
<section class="content-section" id="services-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Patron's Fintech-Specific Deliverables</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Service</th><th>What We Do</th></tr></thead>
                    <tbody>
                        <tr><td>Operational-Model Aware Engagement</td><td>Discovery call maps your company into Model A (India-market), Model B (global backend), Model C (foreign-market with Indian centre), or hybrid. Engagement letter scopes Patron's compliance work to your specific RBI footprint - rather than applying generic EOR scope.</td></tr>
                        <tr><td>RBI License Filing Through PRAVAAH Portal</td><td>Payment Aggregator (Rs 15-25 crore net worth), NBFC registration (NBFC-Investment &amp; Credit, NBFC-AA, NBFC-P2P, NBFC-MFI), AA NBFC-AA filing, Sandbox cohort applications. All filings via mandatory PRAVAAH Portal effective 1 May 2025.</td></tr>
                        <tr><td>Payment Data Residency Architecture</td><td>RBI Storage of Payment System Data 2018 Circular compliance assessment. India-only data residency framework. Cross-border processing rules with 24-hour return-and-delete cycles. CERT-IN empanelled auditor System Audit Report. Half-yearly CEO/MD compliance certificate.</td></tr>
                        <tr><td>KYC, AML, and PMLA Framework</td><td>RBI KYC Master Direction implementation. Video KYC (V-CIP) where applicable. PMLA 2002 record keeping. FIU-IND registration and Suspicious Transaction Report (STR) framework. Customer Due Diligence (CDD) and Enhanced Due Diligence (EDD) thresholds.</td></tr>
                        <tr><td>Digital Lending Guidelines 2022 Compliance</td><td>Loan Service Provider (LSP) framework, First Loss Default Guarantee (FLDG) restrictions, prior consent architecture, data localisation, KFS (Key Fact Statement) standardisation. Critical for any digital lending or co-lending arrangement.</td></tr>
                        <tr><td>Permanent Establishment Risk Diagnosis</td><td>Section 9 IT Act and bilateral tax treaty Article 5 assessment. Particular attention to India-customer-facing roles, sales, BD, account managers, collections, and underwriting roles that may trigger PE for the foreign parent and expose 25-40 percent attributable profit tax.</td></tr>

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
            <h2 class="section-title">How Patron Onboards a Fintech Company (6 Sequential Steps)</h2>
            <p class="section-subtitle" style="text-align:left;max-width:100%;">Patron Accounting's fintech onboarding is operational-model-aware. Every step cites the relevant Act, Section, RBI circular, or portal so finance and legal teams can audit each handoff. Legal verification: PSSA 2007 (Sec 10(2), 18), RBI Storage of Payment System Data 2018 Circular, RBI Payment Aggregator Guidelines 2020, RBI Digital Lending Guidelines September 2022, RBI NBFC-AA Master Direction, NBFC Master Directions, KYC Master Direction, PMLA 2002, DPDP Act 2023 and Rules 2025, Companies Act 2013, FEMA 1999.</p>
        </header>
        <div class="steps-container">
            <div class="step-card">
    <div class="step-content">
        <span class="step-badge">Step 1</span>
        <h3 class="step-title">Discovery Call (Free 30 minutes)</h3>
        <p class="step-description">Map your operational model (Model A / B / C / hybrid). Identify Indian customer touchpoints. Confirm payment data localisation applicability. Assess NBFC / PA / AA license needs. Review RBI Sandbox eligibility if testing. Diagnose PE risk for sales and customer-facing roles.</p>
        <div class="step-highlights">
            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Model A/B/C</span>
            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>License needs</span>
            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>PE risk</span>
        </div>
    </div>
    <div class="step-visual">
        <div class="step-illustration">
            <div class="illustration-icon">
                <svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="10" y="15" width="100" height="70" rx="8" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><circle cx="32" cy="40" r="10" fill="#FEF4EE" stroke="#E8712C" stroke-width="1.5"/><text x="32" y="44" font-size="9" font-weight="700" fill="#E8712C" text-anchor="middle" font-family="Arial">A</text><circle cx="60" cy="40" r="10" fill="#FEF4EE" stroke="#E8712C" stroke-width="1.5"/><text x="60" y="44" font-size="9" font-weight="700" fill="#E8712C" text-anchor="middle" font-family="Arial">B</text><circle cx="88" cy="40" r="10" fill="#FEF4EE" stroke="#E8712C" stroke-width="1.5"/><text x="88" y="44" font-size="9" font-weight="700" fill="#E8712C" text-anchor="middle" font-family="Arial">C</text><line x1="20" y1="60" x2="100" y2="60" stroke="#14365F" stroke-width="1" opacity="0.3"/><line x1="20" y1="72" x2="92" y2="72" stroke="#14365F" stroke-width="1" opacity="0.3"/></svg>
            </div>
            <span class="illustration-label">Model Mapped</span>
            <span class="step-number-large">01</span>
        </div>
    </div>
</div>

<div class="step-card">
    <div class="step-content">
        <span class="step-badge">Step 2</span>
        <h3 class="step-title">Diagnostic Memo</h3>
        <p class="step-description">Patron issues a written assessment - operational model footprint, RBI license requirements, payment data residency gaps, KYC AML readiness, DLG 2022 implications, transfer pricing structure, PE risk roles.</p>
        <div class="step-highlights">
            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Written memo</span>
            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Model footprint</span>
            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Gap analysis</span>
        </div>
    </div>
    <div class="step-visual">
        <div class="step-illustration">
            <div class="illustration-icon">
                <svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="20" y="5" width="80" height="90" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><line x1="30" y1="20" x2="90" y2="20" stroke="#F5A623" stroke-width="3" stroke-linecap="round"/><line x1="30" y1="35" x2="80" y2="35" stroke="#14365F" stroke-width="2" opacity="0.3"/><line x1="30" y1="48" x2="85" y2="48" stroke="#14365F" stroke-width="2" opacity="0.3"/><line x1="30" y1="61" x2="75" y2="61" stroke="#14365F" stroke-width="2" opacity="0.3"/><line x1="30" y1="74" x2="80" y2="74" stroke="#14365F" stroke-width="2" opacity="0.3"/></svg>
            </div>
            <span class="illustration-label">Memo Issued</span>
            <span class="step-number-large">02</span>
        </div>
    </div>
</div>

<div class="step-card">
    <div class="step-content">
        <span class="step-badge">Step 3</span>
        <h3 class="step-title">Engagement Letter</h3>
        <p class="step-description">Fixed-scope engagement letter signed by a Chartered Accountant. Pricing itemised by service line. License filing timeline laid out (PA approximately 12-18 months end-to-end; NBFC 6-12 months; AA 9-15 months).</p>
        <div class="step-highlights">
            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>CA signed</span>
            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Itemised price</span>
            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Timeline locked</span>
        </div>
    </div>
    <div class="step-visual">
        <div class="step-illustration">
            <div class="illustration-icon">
                <svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="15" y="15" width="90" height="70" rx="6" fill="#FEF4EE" stroke="#E8712C" stroke-width="1.5"/><text x="60" y="32" font-size="10" font-weight="700" fill="#E8712C" text-anchor="middle" font-family="Arial">ENGAGEMENT</text><line x1="22" y1="42" x2="98" y2="42" stroke="#14365F" stroke-width="1" opacity="0.3"/><line x1="22" y1="52" x2="92" y2="52" stroke="#14365F" stroke-width="1" opacity="0.3"/><line x1="22" y1="62" x2="85" y2="62" stroke="#14365F" stroke-width="1" opacity="0.3"/><circle cx="92" cy="78" r="8" fill="#25D366"/><path d="M88 78 L91 81 L96 75" stroke="#fff" stroke-width="2" stroke-linecap="round" fill="none"/></svg>
            </div>
            <span class="illustration-label">Letter Signed</span>
            <span class="step-number-large">03</span>
        </div>
    </div>
</div>

<div class="step-card">
    <div class="step-content">
        <span class="step-badge">Step 4</span>
        <h3 class="step-title">Execution: Path A or Path B</h3>
        <p class="step-description">Path A partnership begins in 1-2 weeks; Path B subsidiary incorporation begins within 7 days of engagement-letter signing via MCA SPICe+ form (4-6 weeks to certificate). License filing runs in parallel via PRAVAAH Portal where applicable.</p>
        <div class="step-highlights">
            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Path A or B</span>
            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>SPICe+ form</span>
            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Parallel licenses</span>
        </div>
    </div>
    <div class="step-visual">
        <div class="step-illustration">
            <div class="illustration-icon">
                <svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="15" y="20" width="40" height="55" rx="4" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><text x="35" y="42" font-size="8" font-weight="700" fill="#14365F" text-anchor="middle" font-family="Arial">Path A</text><rect x="65" y="20" width="40" height="55" rx="4" fill="#FEF4EE" stroke="#E8712C" stroke-width="1.5"/><text x="85" y="42" font-size="8" font-weight="700" fill="#E8712C" text-anchor="middle" font-family="Arial">Path B</text><line x1="20" y1="55" x2="50" y2="55" stroke="#14365F" stroke-width="1.5"/><line x1="70" y1="55" x2="100" y2="55" stroke="#E8712C" stroke-width="1.5"/></svg>
            </div>
            <span class="illustration-label">Execution Live</span>
            <span class="step-number-large">04</span>
        </div>
    </div>
</div>

<div class="step-card">
    <div class="step-content">
        <span class="step-badge">Step 5</span>
        <h3 class="step-title">Compliance Steady State</h3>
        <p class="step-description">Monthly TDS by 7th, PF/ESI by 15th, GSTR by 11th/20th. Quarterly Form 24Q. Annual Form 16, Form 3CEB, statutory audit, ICC report. Half-yearly RBI compliance certificate (CEO/MD signed). Annual CERT-IN System Audit Report. Monthly STR/CTR submissions to FIU-IND where applicable.</p>
        <div class="step-highlights">
            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Monthly filings</span>
            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Annual audit</span>
            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>RBI certificates</span>
        </div>
    </div>
    <div class="step-visual">
        <div class="step-illustration">
            <div class="illustration-icon">
                <svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="15" y="15" width="90" height="70" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><circle cx="35" cy="35" r="10" fill="#FEF4EE" stroke="#E8712C" stroke-width="1.5"/><text x="35" y="39" font-size="7" font-weight="700" fill="#E8712C" text-anchor="middle" font-family="Arial">PF</text><circle cx="60" cy="35" r="10" fill="#FEF4EE" stroke="#E8712C" stroke-width="1.5"/><text x="60" y="39" font-size="7" font-weight="700" fill="#E8712C" text-anchor="middle" font-family="Arial">TDS</text><circle cx="85" cy="35" r="10" fill="#FEF4EE" stroke="#E8712C" stroke-width="1.5"/><text x="85" y="39" font-size="7" font-weight="700" fill="#E8712C" text-anchor="middle" font-family="Arial">GST</text><line x1="22" y1="58" x2="98" y2="58" stroke="#14365F" stroke-width="1" opacity="0.3"/><line x1="22" y1="68" x2="92" y2="68" stroke="#14365F" stroke-width="1" opacity="0.3"/><line x1="22" y1="78" x2="85" y2="78" stroke="#14365F" stroke-width="1" opacity="0.3"/></svg>
            </div>
            <span class="illustration-label">Steady State</span>
            <span class="step-number-large">05</span>
        </div>
    </div>
</div>

<div class="step-card">
    <div class="step-content">
        <span class="step-badge">Step 6</span>
        <h3 class="step-title">Quarterly Review</h3>
        <p class="step-description">Re-evaluate operational model and compliance footprint. New RBI directive, license expansion, or model shift triggers re-assessment. Same Patron team handles transitions.</p>
        <div class="step-highlights">
            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Quarterly check</span>
            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>RBI updates</span>
            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Model shift</span>
        </div>
    </div>
    <div class="step-visual">
        <div class="step-illustration">
            <div class="illustration-icon">
                <svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><circle cx="60" cy="50" r="32" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><circle cx="60" cy="50" r="22" fill="none" stroke="#E8712C" stroke-width="1.5" stroke-dasharray="3 2"/><line x1="60" y1="40" x2="60" y2="50" stroke="#14365F" stroke-width="2" stroke-linecap="round"/><line x1="60" y1="50" x2="70" y2="56" stroke="#E8712C" stroke-width="2" stroke-linecap="round"/><circle cx="60" cy="50" r="2" fill="#14365F"/></svg>
            </div>
            <span class="illustration-label">Review Done</span>
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
            <h2 class="section-title">Documents and Information Checklist</h2>
            <div class="content-text">
                
                <h3 style="color:var(--blue);margin-top:8px;">For Discovery Call</h3>
<ul>
  <li>Operational model description - India-market / global backend / foreign-market with Indian centre / hybrid.</li>
  <li>Indian customer touch points - whether you have or plan to have Indian end customers.</li>
  <li>Payment activity - whether you facilitate online payments, lending, investing, AA, or remittance.</li>
  <li>Existing licenses or applications - PA, NBFC, AA, BBPOU, P2P, MFI.</li>
  <li>Funding stage and runway - Series A through pre-IPO drives different urgency.</li>
  <li>Foreign parent revenue model - direct customer billing vs cross-charge from Indian subsidiary.</li>
</ul>
<h3 style="color:var(--blue);margin-top:24px;">For RBI License Filings</h3>
<ul>
  <li>Indian subsidiary incorporation documents (or plan).</li>
  <li>Net worth statement and projected capitalisation (Rs 15-25 crore for PA).</li>
  <li>Promoter and director KYC including fit-and-proper declarations.</li>
  <li>Business plan, projected financials, and risk management framework.</li>
  <li>Technology architecture and data flow documentation (especially for payment data residency).</li>
  <li>KYC AML manual draft and STR procedures.</li>
</ul>
<h3 style="color:var(--blue);margin-top:24px;">For Pvt Ltd Subsidiary with GST and Banking Setup</h3>
<ul>
  <li>Foreign parent Certificate of Incorporation, MOA, AOA (apostilled).</li>
  <li>Board resolution authorising India subsidiary set-up.</li>
  <li>Director identification documents - passport, address proof, photos.</li>
  <li>Indian registered office proof - rent agreement, NOC, latest utility bill.</li>
  <li>Initial paid-up capital remittance proof under FEMA 1999 with FIRC.</li>
  <li>Banking partner shortlist - HDFC, ICICI, Axis, IDFC First, RBL, Yes Bank, Kotak.</li>
</ul>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 9: CHALLENGES -->
<section class="content-section" id="challenges-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Four Fintech-Specific Challenges and Patron's Solutions</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Challenge</th><th>Impact</th><th>How Patron Accounting Solves It</th></tr></thead>
                    <tbody>
                        <tr><td>RBI Storage of Payment System Data (April 2018)</td><td>Circular DPSS.CO.OD.No.2785 mandates all Indian payment system data must be stored only in India under PSSA 2007 Sections 10(2) and 18. Cross-border processing permitted but data must return within 24 hours; foreign copy deleted. CERT-IN System Audit Report and half-yearly CEO/MD compliance certificate required.</td><td>Operational-model assessment to determine applicability. India-only data residency architecture for Model A and applicable hybrid scenarios. CERT-IN audit support and compliance reporting. Half-yearly CEO/MD certificate preparation. Coordination with Indian cloud regions (AWS Mumbai/Hyderabad, Azure India, GCP Mumbai/Delhi, Yotta, CtrlS).</td></tr>
                        <tr><td>Payment Aggregator and NBFC License Decisions</td><td>PA license under RBI 2020 Guidelines requires Rs 15 crore initial net worth, Rs 25 crore by third year, KYC AML framework, escrow account, fit-and-proper directors, technology architecture review, and 12-18 month timeline. NBFC categories vary - NBFC-Investment &amp; Credit, NBFC-AA, NBFC-P2P, NBFC-MFI - each with distinct net worth and compliance requirements.</td><td>License category determination based on intended activities. Net worth structuring through capital infusion under FEMA 1999. PRAVAAH Portal application filing (mandatory from 1 May 2025). Coordinated submissions including business plan, technology architecture, risk management, KYC AML manual, fit-and-proper declarations.</td></tr>
                        <tr><td>Digital Lending Guidelines 2022 (DLG)</td><td>RBI DLG 2022 reshaped Indian fintech lending. LSP framework requires regulated entity (RE) accountability; FLDG restricted to maximum 5 percent of loan portfolio with 12-month cap; prior explicit consent for data processing; biometric data restrictions; KFS mandatory; data localisation; standardised customer disclosures.</td><td>DLG 2022 applicability assessment based on lending activity, partnership structure, and customer profile. LSP framework implementation with RE accountability documentation. FLDG structuring within 5 percent and 12-month limits. Prior consent architecture aligned with DPDP Act 2023. KFS standardisation. Data localisation review.</td></tr>
                        <tr><td>PE Risk for India-Customer-Facing Fintech Roles</td><td>Fintech companies hiring India-based sales engineers, BD managers, customer success leads, partnership managers, collections officers, or underwriting decision makers face significant Permanent Establishment risk under Section 9 IT Act 1961 and treaty Article 5. PE triggers Indian corporate tax of 25-40 percent on attributable profits.</td><td>Patron's CA team flags PE-triggering roles during the discovery call and structures them appropriately - either by routing through Indian subsidiary (clean PE attribution to subsidiary), restructuring role responsibilities to avoid PE indicia, or accepting and quantifying PE exposure for board reporting.</td></tr>

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
            <h2 class="section-title">Cost Comparison at Fintech-Relevant Scales (Annual)</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Fee Component</th><th>Amount</th></tr></thead>
                    <tbody>
                        <tr><td>Pilot - 5 hires (mid-tier EOR baseline)</td><td class="text-right">USD 24,000 / year</td></tr>
                        <tr><td>Pilot - 5 hires (Patron Path A)</td><td class="text-right">USD 14,000 to 22,000 / year</td></tr>
                        <tr><td>Small payment eng team - 10 hires (mid-tier EOR)</td><td class="text-right">USD 48,000 / year</td></tr>
                        <tr><td>Small payment eng team - 10 hires (Patron Path A)</td><td class="text-right">USD 22,000 to 32,000 / year</td></tr>
                        <tr><td>Full eng + compliance - 25 hires (mid-tier EOR)</td><td class="text-right">USD 120,000 / year</td></tr>
                        <tr><td>Full eng + compliance - 25 hires (Patron Path B)</td><td class="text-right">USD 38,000 to 50,000 (Yr 1); USD 18,000 (Yr 2+)</td></tr>
                        <tr><td>India-market fintech - 50 hires (mid-tier EOR)</td><td class="text-right">USD 240,000 / year</td></tr>
                        <tr><td>India-market fintech - 50 hires (Patron Path B)</td><td class="text-right">USD 50,000 to 75,000 / year ongoing</td></tr>
                        <tr><td>GCC scale - 100 hires (Patron Path B)</td><td class="text-right">USD 75,000 to 100,000 / year ongoing</td></tr>
                        <tr><td><strong>Patron Accounting Professional Fees (starting)</strong></td><td class="text-right"><strong>Path A starting from USD 14,000 per year (Exl GST and Govt. Charges)</strong></td></tr>

                    </tbody>
                </table>
                </div>
                <p style="margin-top:16px;font-size:13px;color:var(--text-muted);font-style:italic;">All fees and charges listed are indicative only and do not constitute a binding offer. Final amounts may vary depending on the volume of work and the complexity involved.</p>
                <p style="margin-top:16px;">Professional service charges for drafting, filing, and representation are separate from the statutory fees. The exact fee depends on the complexity of the case, disputed amount, and number of hearings required. Contact us for a detailed quote.</p>
                <p style="margin-top:16px;"><strong>Get a free EOR India for Fintech consultation - <a href="tel:+919459456700">Call +91 945 945 6700</a> or <a href="https://wa.me/919459456700?text=Hello%2C%20I%20just%20visited%20your%20Eor%20India%20for%20Fintechs%20page.%20I%20would%20like%20to%20know%20more%20about%20it." target="_blank" rel="noopener">WhatsApp us</a>. No-obligation assessment.</strong></p>
            </div>
        </div>
    </div>
</section>

<!-- SECTION 11: TIMELINE -->
<section class="content-section" id="timeline-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Time Taken at Each Setup Stage</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Stage</th><th>Estimated Timeline</th></tr></thead>
                    <tbody>
                        <tr><td>RBI scope and operational-model diagnostic</td><td>1 to 2 weeks</td></tr>
                        <tr><td>EOR partnership setup (Path A)</td><td>1 to 2 weeks</td></tr>
                        <tr><td>Pvt Ltd incorporation (Path B)</td><td>4 to 6 weeks</td></tr>
                        <tr><td>GST registration with LUT</td><td>2 to 3 weeks</td></tr>
                        <tr><td>Payment Aggregator license filing</td><td>12 to 18 months</td></tr>
                        <tr><td>NBFC registration</td><td>6 to 12 months</td></tr>
                        <tr><td>Subsidiary fully operational</td><td>60 to 75 days</td></tr>
                        <tr><td>Half-yearly RBI compliance certificate</td><td>Per cycle</td></tr>
                        <tr><td>CERT-IN System Audit Report</td><td>Annual</td></tr>

                    </tbody>
                </table>
                </div>
                <div class="highlight-box" style="margin-top:16px;">
                    
                    <p><strong>Cost takeaway:</strong> EOR pricing scales linearly with headcount; Patron Path B (Pvt Ltd) overhead is largely fixed regardless of team size. By 25 hires, Patron Path B saves approximately USD 80,000+ annually vs mid-tier EOR. By 50 hires, savings exceed USD 190,000 annually. Note: Model A (India-market fintech) requires PA or NBFC licensing which adds Rs 15-25 crore net worth requirements (capital, not operating cost) plus annual license maintenance fees - separate from EOR/Patron service comparison.</p>
<p style="margin-top:12px;"><strong>Caveats:</strong> Numbers above exclude statutory loading (15-20 percent of gross salary regardless of vendor), RBI license filing fees (PA approximately Rs 5-15 lakh; NBFC similar), CERT-IN audit fees (annual approximately Rs 3-8 lakh), capital requirements for Model A licensed activities (Rs 15-25 crore for PA; varies by NBFC category), and ongoing FIU-IND reporting costs.</p>

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
            <h2 class="section-title">Why a CA-Led Practice Matters for Fintech</h2>
        </div>
        <div class="features-grid">
  <div class="feature-card">
    <div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 2L4 6v6c0 5.55 3.84 10.74 8 12 4.16-1.26 8-6.45 8-12V6l-8-4z"/><path d="M9 12l2 2 4-4"/></svg></div>
    <h3>RBI sectoral overlay expertise</h3>
    <p>Storage of Payment System Data 2018, Payment Aggregator Guidelines 2020, Digital Lending Guidelines 2022, NBFC Master Directions, AA framework, KYC Master Direction, PMLA. Generic EOR vendors handle none; CA practices do as core scope.</p>
  </div>
  <div class="feature-card">
    <div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M14 2H6a2 2 0 00-2 2v16a2 2 0 002 2h12a2 2 0 002-2V8z"/><path d="M14 2v6h6M16 13H8M16 17H8"/></svg></div>
    <h3>PRAVAAH Portal license filing</h3>
    <p>Mandatory from 1 May 2025 for all RBI authorisations. Patron's CA team handles end-to-end submission including business plan, technology architecture, KYC AML manual, fit-and-proper declarations.</p>
  </div>
  <div class="feature-card">
    <div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/></svg></div>
    <h3>CERT-IN audit and half-yearly RBI compliance</h3>
    <p>System Audit Report and CEO/MD compliance certificates required for payment data localisation. Coordinated with empanelled CERT-IN auditors. Patron handles end-to-end submission cycle.</p>
  </div>
  <div class="feature-card">
    <div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><path d="M12 6v6l4 2"/></svg></div>
    <h3>Permanent Establishment diagnosis</h3>
    <p>Customer-facing roles common in fintech (sales, BD, partnerships, collections, underwriting) carry acute PE risk under Section 9 IT Act 1961. CA practices assess this; EOR vendors typically do not.</p>
  </div>
  <div class="feature-card">
    <div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="14 2 14 8 20 8"/><path d="M16 13H8M16 17H8M10 9H8"/><path d="M14 2H6a2 2 0 00-2 2v16a2 2 0 002 2h12a2 2 0 002-2V8z"/></svg></div>
    <h3>ICAI accountability</h3>
    <p>Statutory audit (Sec 143), Form 3CEB transfer pricing, Form 15CB foreign remittance certificates, Form 3CD tax audit reports, RBI compliance certificates - all require ICAI member signatures. A unified workforce platform cannot issue these.</p>
  </div>
  <div class="feature-card">
    <div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 16V8a2 2 0 00-1-1.73l-7-4a2 2 0 00-2 0l-7 4A2 2 0 003 8v8a2 2 0 001 1.73l7 4a2 2 0 002 0l7-4A2 2 0 0021 16z"/><line x1="3.27" y1="6.96" x2="12" y2="12.01"/><line x1="12" y1="22.08" x2="12" y2="12"/></svg></div>
    <h3>Multi-disciplinary integration</h3>
    <p>Fintech compliance integrates RBI sectoral rules + DPDP Act + PMLA + Companies Act + IT Act + GST + FEMA. Patron's CA-led team integrates these under one engagement; generic EOR plus separate compliance vendor model creates handoff gaps.</p>
  </div>
</div>
    </div>
</section>

<!-- SECTION 12A: SOCIAL PROOF -->
<section class="content-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Social Proof and Trust Signals</h2>
            <div class="content-text">
                
                <p style="font-size:15px;color:var(--blue);font-weight:600;">10,000+ Businesses Served | 4.9 Google Rating | 4 Office Cities | CA-led practice since 2019</p>
<h3 style="color:var(--blue);margin-top:24px;">Outcome Proof</h3>
<p>Anonymised case data: A Series B US neobank entering the Indian market (Model A) approached Patron with twenty-eight Indian engineers operating on a third-party EOR. PA license had not been filed. Indian customer onboarding was planned for Q3 2026. Customer payment data was being processed on US AWS regions in violation of the RBI 2018 Circular. KYC AML manual did not exist. Patron executed in 16 weeks: Pvt Ltd subsidiary setup, PA license filing through PRAVAAH Portal with Rs 18 crore net worth structuring, India-only payment data architecture migration to Mumbai region, KYC AML manual aligned with RBI Master Direction, FIU-IND registration, CERT-IN auditor engagement, half-yearly compliance certificate framework, employee migration. The PA in-principle approval came through ten months later; full launch followed three months after that. India Q3 2026 launch held to schedule despite compliance complexity.</p>
<h3 style="color:var(--blue);margin-top:24px;">Client Logos</h3>
<p>Hyundai | Asian Paints | Bridgestone | (subset of clients across foreign and domestic engagements)</p>
<p style="margin-top:16px;font-size:14px;color:var(--text-muted);"><em>With offices in Pune, Mumbai, Delhi, and Gurugram, Patron Accounting LLP serves businesses across India - both in-person and remotely. Mumbai presence is particularly valuable for fintech clients requiring proximity to RBI Central Office, banking partners, and SEBI.</em></p>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 13: SELF-FILING vs PROFESSIONAL COMPARISON -->
<section class="content-section" id="comparison-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Fintech Need vs Generic EOR vs Patron</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Fintech Compliance Need</th><th>Generic EOR</th><th>Patron Accounting LLP</th></tr></thead>
                    <tbody>
                        <tr><td>Storage of Payment System Data</td><td>Out of scope</td><td><span class="badge-included">RBI 2018 Circular compliance, India-only data residency, CERT-IN audit support</span></td></tr>
                        <tr><td>Payment Aggregator licensing</td><td>Out of scope</td><td><span class="badge-included">Rs 15-25 cr net worth, PRAVAAH filing, end-to-end 12-18 month timeline</span></td></tr>
                        <tr><td>NBFC registration</td><td>Out of scope</td><td><span class="badge-included">Category determination, fit-and-proper, in-principle to final approval</span></td></tr>
                        <tr><td>Account Aggregator framework</td><td>Out of scope</td><td><span class="badge-included">NBFC-AA filing, consent architecture, FIP/FIU integration</span></td></tr>
                        <tr><td>Digital Lending Guidelines 2022</td><td>Out of scope</td><td><span class="badge-included">LSP framework, FLDG within 5 percent, prior consent, KFS, data localisation</span></td></tr>
                        <tr><td>KYC Master Direction implementation</td><td>Out of scope</td><td><span class="badge-included">V-CIP, CDD/EDD thresholds, periodic review, beneficial ownership</span></td></tr>
                        <tr><td>PMLA compliance and FIU-IND</td><td>Out of scope</td><td><span class="badge-included">Reporting entity registration, STR/CTR/NTR submissions, principal officer designation</span></td></tr>
                        <tr><td>CERT-IN System Audit Report</td><td>Out of scope</td><td><span class="badge-included">Empanelled auditor coordination, Board approval, RBI submission</span></td></tr>
                        <tr><td>Half-yearly RBI compliance certificate</td><td>Out of scope</td><td><span class="badge-included">CEO/MD signed certification on payment data localisation</span></td></tr>
                        <tr><td>Permanent Establishment risk</td><td>Mostly silent</td><td><span class="badge-included">Section 9 IT Act + tax treaty Article 5 assessment with parent counsel</span></td></tr>
                        <tr><td>Cost-plus transfer pricing</td><td>Out of scope</td><td><span class="badge-included">12-18 percent markup benchmarking, Form 3CEB, intercompany agreement</span></td></tr>
                        <tr><td>Foreign parent ESOP advisory</td><td>Out of scope</td><td><span class="badge-included">Sec 17(2)(vi), Sec 192 TDS, FMV documentation, Sec 80-IAC deferral</span></td></tr>
                        <tr><td>Statutory audit (Section 143)</td><td>Not available</td><td><span class="badge-included">ICAI member signature; integrated with subsidiary accounting and RBI returns</span></td></tr>
                        <tr><td>Form 3CEB transfer pricing</td><td>Not available</td><td><span class="badge-included">Section 92E filing once Rs 1 crore international RPT threshold crossed</span></td></tr>
                        <tr><td>Best fit</td><td>Pre-Series A speed-to-hire; multi-country footprints with thin India fintech scope</td><td>Series A-D fintechs with India-market exposure, payment data touch, or sustained Indian engineering operations</td></tr>

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
            <h2 class="section-title">Related Patron Services</h2>
            <div class="content-text">
                
                <p>If Patron's fintech-tuned path fits your operational model, these are the underlying services that execute the engagement:</p>
<ul>
  <li>If your engineering footprint is broader than fintech, see Patron's <a href="/eor-india-engineering-team">EOR India engineering team</a> service for the generic foreign-employer engineering build-out.</li>
  <li>If you also need 24/7 customer support agents alongside engineering, Patron's <a href="/eor-india-customer-support-team">EOR India customer support team</a> service runs the same compliance backbone with state Shops Act night-shift coverage.</li>
  <li><a href="/payroll-services">Payroll services</a> - End-to-end monthly payroll processing in INR with TDS, PF, ESI, gratuity, and ESOP perquisite calculations.</li>
  <li><a href="/private-limited-company-registration">Private Limited Company registration</a> - Indian Pvt Ltd subsidiary incorporation under the Companies Act 2013. Path B execution with parallel license filings.</li>
  <li><a href="/fdi-compliance">FDI compliance</a> - FC-GPR, FC-TRS, ECB-2, and Annual Performance Report filings under FEMA 1999.</li>
  <li><a href="/pf-registration">PF registration</a> - EPFO establishment registration and Universal Account Number setup.</li>
  <li><a href="/tds-return-filing-24q">TDS return filing 24Q</a> - Form 24Q quarterly TDS returns and Form 16 issuance under Section 192 IT Act.</li>
  <li><a href="/private-limited-company-compliance">Private Limited and LLP compliance</a> - Annual ROC filings, board meetings, statutory registers, and director compliance for the subsidiary.</li>
</ul>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 15A: LEGAL FRAMEWORK -->
<section class="content-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Legal and Compliance Framework for Fintech Companies</h2>
            <div class="content-text">
                
                <p>Fintech companies hiring in India navigate the densest sectoral framework of any industry - RBI overlays layered on top of generic foreign-employer requirements.</p>
<h3 style="color:var(--blue);margin-top:16px;">Governing Acts, Directives, and Key Sections</h3>
<div class="table-responsive-wrapper">
<table>
  <thead><tr><th>Statute / Directive / Section</th><th>What It Governs</th></tr></thead>
  <tbody>
    <tr><td>Payment and Settlement Systems Act 2007 (PSSA)</td><td>Master statute for payment systems. Sections 10(2) and 18 empower RBI to regulate.</td></tr>
    <tr><td>Storage of Payment System Data Circular 2018</td><td>RBI DPSS.CO.OD.No.2785 dated 6 April 2018. India-only payment data residency.</td></tr>
    <tr><td>Payment Aggregator Guidelines 2020</td><td>RBI Guidelines 17 March 2020. Net worth Rs 15 cr initial, Rs 25 cr by year 3. KYC AML required.</td></tr>
    <tr><td>Digital Lending Guidelines 2022</td><td>RBI September 2022. LSP framework, FLDG max 5 percent, prior consent, KFS, data localisation.</td></tr>
    <tr><td>NBFC-AA Master Direction</td><td>Account Aggregator framework. Consent-based financial data sharing.</td></tr>
    <tr><td>KYC Master Direction</td><td>RBI consolidated KYC framework. V-CIP, CDD/EDD, periodic review.</td></tr>
    <tr><td>PMLA 2002</td><td>Prevention of Money Laundering Act. Reporting entity obligations to FIU-IND. Record keeping.</td></tr>
    <tr><td>PRAVAAH Portal Mandate (1 May 2025)</td><td>Mandatory portal for all RBI authorisation, licence, and approval applications.</td></tr>
    <tr><td>RBI Sandbox Framework</td><td>2019, amended Feb 2024. 9-month theme-neutral cohorts. DPDP-aligned testing.</td></tr>
    <tr><td>DPDP Act 2023 + Rules 2025</td><td>Generic data protection framework with sectoral overlay subordinate to RBI directives.</td></tr>
    <tr><td>Section 9 IT Act 1961</td><td>Permanent Establishment for foreign companies with India-based revenue-generating roles.</td></tr>
    <tr><td>Section 92 / 92E IT Act 1961</td><td>Transfer pricing for international related-party transactions including intercompany services.</td></tr>
    <tr><td>Companies Act 2013 - Section 143</td><td>Statutory audit. ICAI member signature required.</td></tr>
    <tr><td>FEMA 1999</td><td>Foreign exchange management. FC-GPR, FC-TRS, ECB-2, APR.</td></tr>
  </tbody>
</table>
</div>
<h3 style="color:var(--blue);margin-top:24px;">Penalty Snapshot</h3>
<ul>
  <li>Storage of Payment System Data violation: RBI may suspend or cancel payment system authorisation under PSSA Sec 8. Reputational and operational impact significant.</li>
  <li>Operating without PA license: Civil penalty under PSSA Sec 26; potential prosecution. RBI may direct cessation of services.</li>
  <li>DPDP Act violation: Up to Rs 250 crore per serious violation under Schedule to DPDP Act 2023.</li>
  <li>PMLA non-compliance: Reporting entity violations attract penalties up to Rs 1 lakh per failure under Section 13 PMLA. Prosecution exposure for sustained non-compliance.</li>
  <li>PE-triggered Indian corporate tax: 25 to 40 percent of attributable profits under Section 9 IT Act if Permanent Establishment is established.</li>
  <li>Transfer pricing non-compliance: 2 percent of value of international transactions under Section 271AA IT Act.</li>
</ul>
<p style="margin-top:16px;">Authoritative reference: Statutory text available at <a href="https://www.indiacode.nic.in/" target="_blank" rel="noopener">India Code (Ministry of Law and Justice)</a>. RBI directives at <a href="https://www.rbi.org.in/" target="_blank" rel="noopener">Reserve Bank of India</a>. EPF compliance reference at <a href="https://www.epfindia.gov.in/" target="_blank" rel="noopener">EPFO</a>.</p>

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
                    <h2 class="faq-expanded__title">Frequently Asked Questions</h2>
                    <p class="faq-expanded__lead">Real questions from fintech founders, CTOs, and VPs of Engineering. Drawn from Google PAA, Patron client mandates, and RBI fintech advisory work.</p>
                    @include('partials.bigin-form', [
                        'variant'  => 'compact',
                        'service'  => 'EOR India for Fintech',
                    ])
                </aside>
                <div class="faq-expanded__list">
                    <div class="faq-expanded__item" id="faq-1">
                        <h3 class="faq-expanded__q">What is the best EOR for fintech hiring in India?</h3>
                        <div class="faq-expanded__a"><p>It depends on operational model and Indian-market exposure. For pilot or early hiring (1-5 employees) with no Indian customer touch, India-only EOR specialists deliver fastest entry. For Series A-D fintechs with Indian customer exposure, payment data touch, or sustained engineering operations, Patron Accounting LLP's CA-led path delivers fintech-specific compliance - RBI Storage of Payment System Data, Payment Aggregator licensing, NBFC registration, Digital Lending Guidelines 2022, KYC AML, FIU-IND - that EOR-only models cannot.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-2">
                        <h3 class="faq-expanded__q">How does RBI regulate foreign fintechs hiring in India?</h3>
                        <div class="faq-expanded__a"><p>Through layered sectoral overlay. PSSA 2007 Sections 10(2) and 18 give RBI authority over payment systems. Storage of Payment System Data Circular (April 2018) requires India-only data residency. Payment Aggregator Guidelines (March 2020) require licensing with Rs 15-25 crore net worth thresholds. NBFC Master Directions cover lending, AA, P2P, MFI activities. Digital Lending Guidelines (September 2022) regulate digital lending including LSP partnerships and FLDG. PRAVAAH Portal mandatory from 1 May 2025.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-3">
                        <h3 class="faq-expanded__q">Can my Indian engineers access US or EU customer payment data?</h3>
                        <div class="faq-expanded__a"><p>Yes, if your operational model is Model B (Global Backend Engineering) or Model C (Foreign-Market Fintech with Indian Centre) and the data does not include Indian payment system data. RBI Storage of Payment System Data Circular applies only to Indian payment data; foreign customer payment data is governed by foreign jurisdictions and DPDP Act 2023 generically. DPDP processor agreement under Rule 8 security safeguards covers cross-border data flow. If your engineers also touch Indian payment data, the 2018 Circular applies and India-only residency becomes mandatory.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-4">
                        <h3 class="faq-expanded__q">Do I need a Payment Aggregator license to hire fintech engineers in India?</h3>
                        <div class="faq-expanded__a"><p>Not solely for hiring. The PA license is required only if you facilitate online payments by collecting funds from Indian customers and settling to Indian merchants. If your Indian engineers build software for foreign markets (Model C), no PA license is needed. If your fintech enters the Indian market and facilitates payments (Model A), PA license becomes necessary - Rs 15 crore initial net worth, Rs 25 crore by third year, KYC AML framework, escrow account, fit-and-proper directors, technology audit. Filed via PRAVAAH Portal mandatory from 1 May 2025. End-to-end timeline approximately 12-18 months.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-5">
                        <h3 class="faq-expanded__q">How does Storage of Payment System Data 2018 affect my India team?</h3>
                        <div class="faq-expanded__a"><p>If your India team accesses or processes Indian payment system data - customer data, payment credentials, transaction data - the RBI 2018 Circular requires that data be stored only in India under PSSA Sections 10(2) and 18. Cross-border processing is allowed but data must return to India within 24 hours and foreign copies must be deleted. CERT-IN empanelled auditor System Audit Report required. Half-yearly CEO/MD compliance certificate. The rule does not apply if your India team accesses only foreign customer payment data (Model B/C) - in which case standard DPDP Act 2023 framework governs.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-6">
                        <h3 class="faq-expanded__q">What are Digital Lending Guidelines 2022 implications for foreign fintechs?</h3>
                        <div class="faq-expanded__a"><p>Substantial. RBI DLG 2022 reshaped the lending ecosystem. Loan Service Provider (LSP) framework requires regulated entity (RE) accountability for any technology partner facilitating lending. First Loss Default Guarantee (FLDG) restricted to maximum 5 percent of loan portfolio with 12-month cap. Prior explicit consent for data processing. Biometric data collection restrictions. Key Fact Statement (KFS) mandatory in standardised format. Data localisation requirements. Foreign BNPL providers, co-lending platforms, and digital lenders face restructuring; Patron's CA team handles DLG implementation as core scope.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-7">
                        <h3 class="faq-expanded__q">When does a fintech need an NBFC license vs subsidiary?</h3>
                        <div class="faq-expanded__a"><p>Different decisions. A subsidiary (Pvt Ltd) is the corporate vehicle - you need it for any sustained Indian operation. NBFC registration is on top of subsidiary - required if the subsidiary engages in lending, investment, AA, P2P, or MFI activities. NBFC categories: NBFC-Investment & Credit (most lending), NBFC-AA (Account Aggregator), NBFC-P2P (peer-to-peer lending), NBFC-MFI (microfinance). Each carries distinct net worth, capital adequacy, and prudential norm requirements. Most foreign fintechs entering India need both: subsidiary first (60-75 days), then NBFC license (6-12 months) where applicable.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-8">
                        <h3 class="faq-expanded__q">How much do payment engineers cost in Bangalore vs Mumbai?</h3>
                        <div class="faq-expanded__a"><p>Comparable for fintech roles - unusual for India. Most engineering roles see Mumbai pay 10-15 percent below Bangalore. For fintech specifically, Mumbai often matches or exceeds Bangalore due to banking partner proximity (HDFC, ICICI, Axis, Kotak HQs in Mumbai), RBI Central Office presence, and legacy financial services concentration. Bangalore mid backend/payment engineer Rs 25-45 LPA; Mumbai Rs 25-44 LPA. Senior Rs 45-85 LPA in both cities. Risk/fraud ML and compliance/RegTech specialists often command Mumbai premium. Pune and Hyderabad 15-20 percent lower.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-9">
                        <h3 class="faq-expanded__q">Fintech ke liye EOR India ka kaise istemaal kare?</h3>
                        <div class="faq-expanded__a"><p>Sabse pehle Patron Accounting ko +91 945 945 6700 par call kijiye ya WhatsApp message bhejiye. Discovery call free hoti hai (30 minute). Hum operational model determine karte hain - Model A (India-market), Model B (global backend), ya Model C (foreign-market with Indian centre). RBI license ki zaroorat (PA, NBFC, AA, DLG) bhi map karte hain. Phir engagement letter sign hone ke baad Path A (1-2 weeks) ya Path B (subsidiary 4-6 weeks) shuru hota hai.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-10">
                        <h3 class="faq-expanded__q">Does Patron handle full RBI license filing through PRAVAAH Portal?</h3>
                        <div class="faq-expanded__a"><p>Yes. Patron handles end-to-end Payment Aggregator licensing (net worth structuring at Rs 15-25 crore, KYC AML manual, technology audit coordination, PRAVAAH Portal filing, post-license compliance) and NBFC registration (category determination, fit-and-proper declarations, business plan, in-principle to final approval, ongoing prudential norms). Storage of Payment System Data compliance includes India-only residency architecture, CERT-IN audit, and half-yearly CEO/MD certificates. Detailed quote in the discovery call.</p></div>
                    </div>
                </div>
            </div>


            <!-- Quick Answers -->
            <div class="highlight-box" style="margin-top:32px;">
                <p><strong>Quick Answers</strong></p>
                <p><strong>Does Patron handle Payment Aggregator licensing?</strong> Yes - net worth structuring, KYC AML manual, technology audit coordination, PRAVAAH Portal filing, post-license compliance.</p>
<p><strong>Does Patron support NBFC registration?</strong> Yes - category determination, fit-and-proper, business plan, in-principle to final approval, ongoing prudential norms.</p>
<p><strong>Does Patron handle Storage of Payment System Data compliance?</strong> Yes - applicability assessment, India-only residency architecture, CERT-IN audit, half-yearly CEO/MD certificates.</p>
<p><strong>Can Patron handle Digital Lending Guidelines 2022 implementation?</strong> Yes - LSP framework, FLDG structuring, prior consent, KFS standardisation, data localisation review.</p>
<p><strong>What is the cost of Patron Path A vs Path B for fintech?</strong> Path A scope-based partnership fee approximately USD 14,000-32,000 per year depending on operational model and headcount. Path B subsidiary approximately USD 14,000-22,000 setup plus USD 8,000-20,000 annual ongoing depending on RBI license scope and DLG implementation. License filing fees additional. Detailed quote in discovery call.</p>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 18: URGENCY CTA -->
<section class="content-section" style="background: var(--orange-lighter) !important; border-left: 4px solid var(--orange);">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Statutory and RBI Deadlines That Cannot Slip</h2>
            <div class="content-text">
                
                <p>Fintech compliance runs on hard, recurring deadlines. A single missed filing or unfiled exemption triggers penalty plus interest plus operational risk with RBI, FIU-IND, or the parent's foreign tax authority.</p>
<div class="table-responsive-wrapper">
<table>
  <thead><tr><th>Compliance</th><th>Deadline</th><th>Penalty</th></tr></thead>
  <tbody>
    <tr><td>TDS on Salary</td><td>7th of next month</td><td>1.5 percent monthly interest under Section 201(1A); disallowance under Section 40(a)(ia)</td></tr>
    <tr><td>PF (EPF)</td><td>15th of next month</td><td>12 percent annual interest under Section 7Q; damages 5 to 25 percent under Section 14B EPF Act</td></tr>
    <tr><td>ESI</td><td>15th of next month</td><td>12 percent annual interest; up to 6 months imprisonment under Section 85 ESI Act</td></tr>
    <tr><td>Form 24Q (TDS Return)</td><td>Quarterly: 31 July, 31 Oct, 31 Jan, 31 May</td><td>Late fee Rs 200 per day under Section 234E; penalty up to Rs 1 lakh under Section 271H</td></tr>
    <tr><td>Storage of Payment System Data Compliance Certificate</td><td>Half-yearly (CEO/MD signed)</td><td>RBI may suspend or cancel payment system authorisation under PSSA Sec 8</td></tr>
    <tr><td>CERT-IN System Audit Report</td><td>Annual</td><td>RBI directive escalation; potential payment system suspension</td></tr>
    <tr><td>FIU-IND STR/CTR Submissions</td><td>Monthly (where applicable)</td><td>Up to Rs 1 lakh per failure under Section 13 PMLA</td></tr>
    <tr><td>Form 3CEB Transfer Pricing</td><td>Annual (with ITR)</td><td>2 percent of international transaction value under Section 271AA IT Act</td></tr>
  </tbody>
</table>
</div>
<p style="margin-top:16px;"><strong>Talk to Patron's CA-led Fintech Team:</strong> <a href="tel:+919459456700">Call +91 945 945 6700</a> | <a href="https://wa.me/919459456700?text=Hello%2C%20I%20just%20visited%20your%20Eor%20India%20for%20Fintechs%20page.%20I%20would%20like%20to%20know%20more%20about%20it." target="_blank" rel="noopener">WhatsApp +91 945 945 6700</a> | <a href="mailto:contact@patronaccounting.com?subject=Enquiry%20for%20EOR%20India%20for%20Fintech%20Services&body=Hello%20Patron%20Accounting%20Team%2C%0A%0AI%20am%20interested%20in%20your%20EOR%20India%20for%20Fintech%20services%20and%20would%20like%20a%20discovery%20call%20to%20discuss%20our%20operational%20model%20and%20RBI%20compliance%20footprint.%0A%0AThank%20you.">Email contact@patronaccounting.com</a>. Free 30-minute discovery call. We map operational model, license needs, payment data residency, KYC AML, DLG, and PE risk.</p>

            </div>
        </div>
    </div>
</section>

<!-- CONCLUSION + CTA BLOCK (Dark) -->
<section class="content-section" style="background: var(--blue) !important;">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title" style="color:#FFFFFF !important;">Map Your Fintech Operational Model. Then Talk to a CA.</h2>
            <div class="content-text" style="text-align:left;">
                
                <p>Fintech is the most regulated foreign-employer hiring vertical in India. RBI sectoral overlay layers on top of generic compliance: Storage of Payment System Data (April 2018) restricts cross-border data flows; Payment Aggregator Guidelines (2020) require licensing with Rs 15-25 crore net worth thresholds; NBFC Master Directions cover lending, investment, AA, P2P, MFI activities; Digital Lending Guidelines (September 2022) reshaped the LSP framework, FLDG, and prior consent architecture; KYC Master Direction; PMLA reporting to FIU-IND; CERT-IN System Audit Reports; half-yearly CEO/MD compliance certificates; PRAVAAH Portal mandatory from 1 May 2025. None of this is generic EOR scope.</p>
<p>The honest answer for foreign fintechs hiring in India is rarely 'pick a generic EOR'; it is 'first determine your operational model (India-market vs global backend vs foreign-market with Indian centre), then design the engagement around your RBI footprint'. Patron Accounting LLP is the CA-led alternative built for the fintech operational footprint. We are a CA-led firm with offices in Pune, Mumbai, Delhi, and Gurugram - Mumbai presence particularly valuable for proximity to RBI, banking partners, and SEBI.</p>
<p>10,000+ Businesses Served | 4.9 Google Rating | RBI-Aware (PA, NBFC, DLG ready) | PRAVAAH Portal filing capable</p>

            </div>
            <div style="display:flex;gap:14px;flex-wrap:wrap;margin-top:24px;">
                <a href="tel:+919459456700" style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:var(--orange);color:#fff;border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#128222; Call +91 945 945 6700</a>
                <a href="https://wa.me/919459456700?text=Hello%2C%20I%20just%20visited%20your%20Eor%20India%20for%20Fintechs%20page.%20I%20would%20like%20to%20know%20more%20about%20it." target="_blank" style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:#25D366;color:#fff;border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;" rel="noopener">&#128172; WhatsApp Us</a>
                <a href="mailto:contact@patronaccounting.com?subject=Enquiry%20for%20EOR%20India%20for%20Fintech%20Services&body=Hello%20Patron%20Accounting%20Team%2C%0A%0AI%20am%20interested%20in%20your%20EOR%20India%20for%20Fintech%20services%20and%20would%20like%20a%20discovery%20call%20to%20discuss%20our%20operational%20model%20and%20RBI%20compliance%20footprint.%0A%0AThank%20you." style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:transparent;color:#fff;border:2px solid rgba(255,255,255,0.3);border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#9993;&#65039; Email Us</a>
            </div>
            <p style="color:rgba(255,255,255,0.7);font-size:13px;margin-top:16px;">Book a Free Consultation - No Obligation.</p>
        </div>
    </div>
</section>

<!-- GSTAT STATE BENCH CITY PAGES (32 Pages) -->
<section class="content-section" style="padding:48px 32px;background:var(--gray-50);">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title" style="text-align:center;margin-bottom:12px;">Compliance Services That Pair With EOR India for Fintech</h2>
            <p style="text-align:center;color:var(--text-muted);font-size:15px;margin-bottom:40px;">Bundle EOR with Pvt Ltd setup, payroll, FDI compliance, and statutory filings from Patron Accounting for an end-to-end India compliance stack.</p>
            <!-- CITY_PAGES_GRID PATTERN:
                BLOCK 1 - City cards (pa-city-grid, 4 cols desktop):
                BLOCK 2 - Cross-sell services (pa-cross-grid, 3 cols desktop):
                <div class="pa-city-block">
                    <div class="pa-block-title">Related Services</div>
                    <div class="pa-block-sub">End-to-end support for EOR India for Fintech</div>
                    <div class="pa-cross-grid">
                        <a href="/private-limited-company-registration" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Private Limited Company Registration</div><div class="pa-card-sub">India</div></div></a>
                        (repeat for 5-6 related services)
                    </div>
                </div>
            -->
            <div class="pa-city-block">
                    <div class="pa-block-title">Related Services from Patron Accounting</div>
                    <div class="pa-block-sub">End-to-end CA-led backbone for EOR India for Fintech</div>
                    <div class="pa-cross-grid">
                        <a href="/eor-india-engineering-team" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">EOR Engineering Team</div><div class="pa-card-sub">India</div></div></a>
                        <a href="/eor-india-customer-support-team" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">EOR Customer Support</div><div class="pa-card-sub">India</div></div></a>
                        <a href="/private-limited-company-registration" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Pvt Ltd Registration</div><div class="pa-card-sub">India</div></div></a>
                        <a href="/payroll-services" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Payroll Services</div><div class="pa-card-sub">India</div></div></a>
                        <a href="/fdi-compliance" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">FDI Compliance</div><div class="pa-card-sub">India</div></div></a>
                        <a href="/tds-return-filing-24q" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">TDS Return Filing 24Q</div><div class="pa-card-sub">India</div></div></a>
                    </div>
                </div>
        </div>
    </div>
</section>

<!-- CONTENT FRESHNESS FOOTER -->
<section class="content-section" style="padding:32px;">
    <div class="content-container">
        <div class="text-content" style="font-size:13px;color:var(--text-muted);">
            <p><strong>Content Created:</strong> 07 May 2026 &nbsp;|&nbsp; <strong>Last Updated:</strong> <span id="lastUpdatedFooter"></span> &nbsp;|&nbsp; <strong>Next Review:</strong> 07 November 2026 &nbsp;|&nbsp; <strong>Reviewed By:</strong> CA &amp; CS Team, Patron Accounting LLP</p>
            <p>This page is reviewed every 6 months or whenever a new RBI directive, PA Guidelines amendment, NBFC Master Direction update, DLG 2022 amendment, AA framework change, KYC Master Direction revision, DPDP Rules update, PRAVAAH Portal process change, PSSA amendment, or FIU-IND threshold change is published. Last reviewer: CA & CS Team, Patron Accounting LLP.</p>
        </div>
    </div>
</section>



</main>





<!-- ============================================
     CONSULTATION FORM - Country Dropdown + Validation + Bigin Integration
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


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
@endsection
