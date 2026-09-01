@extends('layouts.service-app')

<!-- External Dependencies (loaded by master layout in production) -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Barlow:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,400&family=DM+Sans:opsz,wght@9..40,400;9..40,500;9..40,600;9..40,700&display=swap" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

@section('meta')
    <title>EOR India Engineering Team</title>
    <meta name="description" content="Hire engineering teams in India via EOR without entity setup. CA-led PF, ESI, TDS compliance for foreign companies. Starts at Rs 8,000/employee/month.">
    <link rel="canonical" href="/eor-india-engineering-team">
    <meta name="robots" content="index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1">
    <meta property="og:title" content="EOR India Engineering Team 2026 | Patron Accounting">
    <meta property="og:description" content="Hire engineering teams in India via EOR without entity setup. CA-led PF, ESI, TDS compliance for foreign companies. Starts at Rs 8,000/employee/month.">
    <meta property="og:url" content="/eor-india-engineering-team">
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="Patron Accounting">
    <meta property="og:image" content="https://www.patronaccounting.com/images/og-default-square.png">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="1200">
    <meta property="og:image:type" content="image/png">
    <meta property="og:image:secure_url" content="https://www.patronaccounting.com/images/og-default-square.png">
    <meta property="og:image:alt" content="Patron Accounting - partner you can rely on">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="EOR India Engineering Team 2026 | Patron Accounting">
    <meta name="twitter:description" content="Hire engineering teams in India via EOR without entity setup. CA-led PF, ESI, TDS compliance for foreign companies. Starts at Rs 8,000/employee/month.">
    <meta name="twitter:image" content="https://www.patronaccounting.com/images/og-default-square.png">
@endsection

@section('schema')
    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@graph": [
        {
          "@type": "BreadcrumbList",
          "@id": "https://www.patronaccounting.com/eor-india-engineering-team#breadcrumb",
          "itemListElement": [
            { "@type": "ListItem", "position": 1, "name": "Home", "item": "https://www.patronaccounting.com/" },
            { "@type": "ListItem", "position": 2, "name": "Services", "item": "https://www.patronaccounting.com/services" },
            { "@type": "ListItem", "position": 3, "name": "EOR India Engineering Team", "item": "https://www.patronaccounting.com/eor-india-engineering-team" }
          ]
        },
        {
          "@type": "FAQPage",
          "@id": "https://www.patronaccounting.com/eor-india-engineering-team#faq",
          "mainEntity": [
            {
              "@type": "Question",
              "name": "Is using an EOR legal in India?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "Yes. EOR is fully legal in India. The EOR is a locally registered Indian company that complies with the Companies Act 2013, the Code on Social Security 2020, and the Income Tax Act 1961. Foreign companies engage the EOR via a B2B service agreement, and the engineer is legally employed by the EOR for all statutory purposes including PF, ESI, gratuity, and TDS."
              }
            },
            {
              "@type": "Question",
              "name": "How much does an EOR for India engineering team cost in 2026?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "Patron Accounting charges Rs 8,000 to Rs 12,000 per engineer per month plus 18 percent GST, depending on seniority. Statutory employer burden adds 18 to 22 percent on top of gross salary (PF 12 percent, ESI 3.25 percent up to wage ceiling, gratuity 4.81 percent accrual). Global platforms charge USD 199 to USD 700 per month with FX markups."
              }
            },
            {
              "@type": "Question",
              "name": "Can a foreign company hire engineers in India without a local entity?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "Yes, through an Employer of Record. A foreign company cannot directly run payroll, deduct PF, or deposit TDS in India without a registered Indian entity or PAN. The EOR provides that local entity layer. The foreign company stays the day-to-day manager, owns the work product, and pays the EOR a single monthly invoice in INR or USD."
              }
            },
            {
              "@type": "Question",
              "name": "What is the difference between EOR and PEO in India?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "EOR is the legal employer of record - the engineer's contract is with the EOR. PEO is a co-employment model where both client and PEO share legal responsibility. Indian labour law does not formally recognise co-employment, so PEO offerings in India in practice operate as EOR. For foreign hirers, EOR is the correct and only fully compliant model."
              }
            },
            {
              "@type": "Question",
              "name": "How long does EOR onboarding take?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "5 to 7 working days from job description share to offer letter, and 10 to 14 days from offer to first payroll. Background verification runs in parallel. Subsidiary incorporation by contrast takes 3 to 6 months for Companies Act 2013 registration, GST, EPFO and ESIC code, and bank account setup."
              }
            },
            {
              "@type": "Question",
              "name": "What is Permanent Establishment risk and how does EOR avoid it?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "Permanent Establishment under Article 5 of India tax treaties and Section 9(1) of the Income Tax Act 1961 means the foreign parent has a taxable business presence in India. Direct employment of Indian staff, signing of contracts in India, or having dependent agents triggers PE and 40 percent corporate tax plus surcharge on India-attributed profit. EOR removes the trigger because the EOR is the employer, not the foreign parent."
              }
            },
            {
              "@type": "Question",
              "name": "Which Indian city is best for hiring engineers - Bangalore, Hyderabad, Pune, or Delhi NCR?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "Bangalore for senior product talent and GCC density. Hyderabad for AI, ML, and big tech captives like Microsoft, Apple, Google, and Amazon. Pune for cost-efficient mid-level engineering with lower attrition. Delhi NCR (Gurugram, Noida) for fintech, BFSI, and consulting tech. Patron Accounting supports all four hubs with multi-state PF, ESI, and professional tax registration."
              }
            },
            {
              "@type": "Question",
              "name": "What happens to PF, ESI, and gratuity when an engineer leaves the EOR?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "On exit, the engineer's UAN remains active and PF balance transfers to the next employer or can be withdrawn after 60 days under the EPF Scheme 1952. ESI coverage continues for 6 months post-exit. Gratuity is paid within 30 days of last working day under Section 7 of the Payment of Gratuity Act 1972, capped at Rs 20 lakh. Patron processes full and final settlement including leave encashment within 30 days."
              }
            }
          ]
        },
        {
          "@type": "Service",
          "@id": "https://www.patronaccounting.com/eor-india-engineering-team#service",
          "name": "EOR India Engineering Team",
          "description": "Patron Accounting LLP operates as Employer of Record for foreign companies hiring engineering teams in India across Bangalore, Hyderabad, Pune, and Delhi NCR. The service covers India-compliant employment contracts, INR payroll, PF and ESI compliance, gratuity accrual, TDS under Section 192, and Permanent Establishment ringfencing for the foreign parent.",
          "serviceType": "Employer of Record Service",
          "provider": { "@id": "https://www.patronaccounting.com/#organization" },
          "areaServed": { "@type": "Country", "name": "India", "sameAs": "https://en.wikipedia.org/wiki/India" },
          "about": [
            { "@type": "Thing", "name": "Employer of Record", "sameAs": "https://en.wikipedia.org/wiki/Employer_of_record" },
            { "@type": "Thing", "name": "Permanent Establishment", "sameAs": "https://en.wikipedia.org/wiki/Permanent_establishment" },
            { "@type": "Thing", "name": "Bangalore", "sameAs": "https://en.wikipedia.org/wiki/Bangalore" }
          ],
          "mainEntityOfPage": {
            "@type": "WebPage",
            "@id": "https://www.patronaccounting.com/eor-india-engineering-team",
            "datePublished": "2026-05-07T08:00:00+05:30"
          }
        }
      ]
    }
    </script>
@endsection

@section('content')
@push('styles')
<link rel="stylesheet" href="{{ asset('css/pages-4.css') }}?v=1">
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
                        Build Your India Engineering Team via EOR (No Entity Setup)
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
                            <p class="mb-0 text-dark benefit-paragraph"><span>Documents:</span> Offer letter, India-compliant contract, PAN, Aadhaar, UAN onboarding</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Fees:</span> Starts at Rs 8,000 per employee per month plus 18 percent GST</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Eligibility:</span> Foreign companies hiring 1 to 50 engineers in India</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Timeline:</span> Compliant offer in 5 to 7 working days, payroll live in 10 to 14 days</p>
                        </div>
                    </div>

                    <p class="mb-4 fw-bold" style="color: var(--blue); font-size: 15px;">10,000+ Businesses Served | 4.9 Google Rating | 15+ Years of India Compliance Experience</p>

                    <div class="hero-cta">
                        <a href="tel:+919459456700" class="btn-video text-decoration-none">
                            <span class="play-circle"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="width:14px;height:14px;color:#fff"><path d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/></svg></span>
                            Call +91 945 945 6700
                        </a>
                        <a href="mailto:info@patronaccounting.com" class="btn-sample text-decoration-none">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="width:18px;height:18px;"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,12 2,6"/></svg>
                            Email Us
                        </a>
                        <a href="https://wa.me/919459456700?text=Hi%2C%20I%27m%20interested%20in%20EOR%20India%20Engineering%20Team%20services.%20Please%20share%20a%20quote." target="_blank" class="btn-sample text-decoration-none">
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
                                            'service'  => 'EOR Engineering Team',
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
    'ctaText'    => 'Trusted by foreign hirers across the US, UK, EU, Singapore, and Australia for India engineering EOR engagements.',
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
            <a href="#what-section" class="toc-btn">What Is EOR</a>
            <a href="#who-section" class="toc-btn">Who Needs This</a>
            <a href="#services-section" class="toc-btn">What We Deliver</a>
            <a href="#procedure-section" class="toc-btn">Onboarding Process</a>
            <a href="#documents-section" class="toc-btn">Documents Checklist</a>
            <a href="#challenges-section" class="toc-btn">Common Challenges</a>
            <a href="#fees-section" class="toc-btn">Fees & Pricing</a>
            <a href="#timeline-section" class="toc-btn">Time Taken</a>
            <a href="#benefits-section" class="toc-btn">Why Patron</a>
            <a href="#comparison-section" class="toc-btn">EOR vs Subsidiary</a>
            <a href="#faq-section" class="toc-btn">FAQs</a>
        </div>
        <button class="toc-arrow right" id="tocRight">&#10095;</button>
    </div>
</div>

<!-- SECTION 2: OVERVIEW / INTRO + TL;DR -->
<section class="content-section" id="overview-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">EOR for India Engineering Teams: Compliant Hiring Without an Indian Subsidiary</h2>
            <div class="content-text">
                <div class="highlight-box" style="margin-bottom:20px;">
                    <p><strong>&#128204; TL;DR - EOR Engineering Team Services at a Glance</strong></p>
                    <p>An Employer of Record in India lets foreign companies legally hire engineers in Bangalore, Hyderabad, Pune, and Delhi NCR without setting up an Indian entity. The EOR signs the local contract, runs payroll, deposits PF and ESI, deducts TDS, and absorbs Permanent Establishment exposure while you manage the engineer day to day.</p>
                </div>
                <p>EOR India engineering team services give global employers a compliant entry route into India's largest tech talent pool without the 6 to 12 month delay of subsidiary incorporation. India produces over 1.5 million engineering graduates each year, with Bangalore, Hyderabad, Pune, and Delhi NCR concentrating the bulk of senior software, data, and platform talent. The Employer of Record sits between you and the engineer as the contractual employer of record, while you keep complete control over assignments, performance, and intellectual property.</p>
                <p>Patron Accounting LLP provides India-side EOR support backed by 15+ years of CA-led payroll, PF, ESI, gratuity, and TDS compliance work. Foreign companies headquartered in the United States, the United Kingdom, the European Union, Singapore, and Australia rely on us to keep monthly payroll, statutory filings, and labour code obligations spotless while their engineering teams stay focused on shipping product.</p>
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
                <h2 class="section-title">What Is an EOR for India Engineering Teams</h2>
                <div class="content-text what-is-definition">
                    
                    <p>An Employer of Record (EOR) for India engineering teams is a locally registered Indian entity that legally employs your engineers under the Code on Wages 2019, the Code on Social Security 2020, and the Income Tax Act 1961, while you direct their work day to day.</p>
<p>The EOR signs the India-compliant employment contract, files monthly Provident Fund returns under the Employees Provident Funds and Miscellaneous Provisions Act 1952, deposits Employees State Insurance under the ESI Act 1948, deducts and remits TDS under Section 192 of the Income Tax Act 1961, and accrues gratuity at 4.81 percent of monthly basic wages under the Payment of Gratuity Act 1972. The model removes Permanent Establishment exposure for the foreign parent company because no agent in India concludes contracts on its behalf.</p>
<p>Foreign hirers retain authorship of work product, set goals, run sprint reviews, and grant equity from their home jurisdiction. The EOR carries every Indian statutory liability, from minimum wage adherence under state-notified schedules to F&amp;F settlement on exit.</p>

                </div>
                <div class="highlight-box" style="margin-top:20px;">
                    <p><strong>Key Terms for EOR Engineering Team:</strong></p>
                    <ul>
  <li><strong>EOR (Employer of Record):</strong> Third-party Indian company that becomes the legal employer for payroll, PF, ESI, and TDS while client controls work.</li>
  <li><strong>PEO (Professional Employer Organization):</strong> Co-employment model where both parties share legal responsibility. Less common in India because Indian labour law does not formally recognise co-employment.</li>
  <li><strong>GCC (Global Capability Centre):</strong> Wholly-owned Indian subsidiary built by a foreign parent to house captive engineering. Requires entity setup, board, FDI compliance, transfer pricing.</li>
  <li><strong>Branch Office:</strong> RBI-approved liaison or branch of foreign company. Allowed limited revenue activity. Triggers Permanent Establishment for tax purposes.</li>
  <li><strong>Independent Contractor:</strong> Self-employed engineer invoicing the foreign client directly. High misclassification risk under Indian labour codes if hours, tools, and supervision look like employment.</li>
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
                            <text x="100" y="170" font-size="10" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial, sans-serif">EOR Engineering Team</text>
                        </svg>
                    </div>
                    <div class="illustration-badge">
                        <span>Compliance Backbone</span>
                        <strong>Labour Codes 2025 + Income Tax Act 1961</strong>
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
            <h2 class="section-title">Who Should Use EOR India Engineering Team Services</h2>
            <div class="content-text">
                
                <p>EOR India engineering team services are designed for the following hiring profiles. Foreign company size and engineering team size jointly drive the choice between EOR, GCC subsidiary, and contractor engagement.</p>
<div class="table-responsive-wrapper">
<table>
  <thead><tr><th>Foreign Company Profile</th><th>Team Size</th><th>Recommended Action</th></tr></thead>
  <tbody>
    <tr><td>United States, United Kingdom, EU, Singapore, Australia parent</td><td>Hiring 1 to 50 engineers in India</td><td>EOR is the fastest compliant route. Subsidiary becomes economical at 25+ engineers.</td></tr>
    <tr><td>Series A or Series B funded startup</td><td>First 1 to 10 India engineers</td><td>EOR avoids Rs 50 lakh to Rs 1 crore subsidiary setup cost.</td></tr>
    <tr><td>Mid-stage SaaS / fintech / AI company</td><td>10 to 30 distributed engineers</td><td>EOR with multi-state PF/ESI registrations. Patron handles 28 state-specific Shops and Establishments Acts.</td></tr>
    <tr><td>Late-stage enterprise testing India market</td><td>Pre-GCC pilot of 5 to 15 engineers</td><td>EOR for 12 to 18 months, then transition to wholly-owned subsidiary with employee transfer.</td></tr>
    <tr><td>Foreign engineering services firm</td><td>Project-based engineers for 6 to 24 months</td><td>EOR fixed-term contracts under Industrial Relations Code 2020 with pro-rata gratuity after 1 year.</td></tr>
  </tbody>
</table>
</div>
<p style="margin-top:16px;"><strong>Statutory deadlines that trigger EOR engagement:</strong> PF deposit by the 15th of each succeeding month under the EPF Scheme 1952; TDS deposit by the 7th under Rule 30 of the Income Tax Rules 1962; ESI by the 15th under ESI (General) Regulations 1950. A single late deposit attracts 12 percent annual interest plus damages of 5 to 25 percent under Section 14B of the EPF Act.</p>

            </div>
            </div>
        </div>
    </div>
</section>

<!-- SECTION 5: OUR SERVICES -->
<section class="content-section" id="services-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">What Patron Accounting Delivers</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Service</th><th>What We Do</th></tr></thead>
                    <tbody>
                        <tr><td>India-compliant Employment Contract</td><td>Drafted under the Industrial Relations Code 2020 and applicable state Shops and Establishments Act. Includes IP assignment, non-solicit, probation up to 6 months, and notice period.</td></tr>
                        <tr><td>Monthly INR Payroll Run</td><td>CTC structuring (Basic, HRA, Special Allowance, LTA, NPS), pay slip generation, bank file upload, salary credit by the 1st working day.</td></tr>
                        <tr><td>PF, ESI, Gratuity, Professional Tax Compliance</td><td>Monthly PF and ESI challans on the EPFO Unified Portal and ESIC portal, gratuity accrual at 4.81 percent, state-wise professional tax up to Rs 2,500 per year in Maharashtra and Karnataka.</td></tr>
                        <tr><td>TDS Deduction and Form 24Q Filing</td><td>Monthly TDS deposit by the 7th, quarterly Form 24Q via TRACES, annual Form 16 issue to engineers by 15 June.</td></tr>
                        <tr><td>Engineer Onboarding and Offboarding</td><td>UAN allocation, ESIC IP number, bank account opening, F&amp;F settlement within 30 days of last working day with leave encashment and gratuity payout.</td></tr>
                        <tr><td>Salary Benchmark and CTC Optimisation</td><td>City and stack-specific compensation data refreshed quarterly. Tax-efficient CTC design boosting take-home by 8 to 12 percent.</td></tr>

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
            <h2 class="section-title">EOR Onboarding Procedure (8 Sequential Steps)</h2>
            <p class="section-subtitle" style="text-align:left;max-width:100%;">Patron Accounting's EOR onboarding follows the sequence below. Steps cite the relevant Act, Section, or Form so finance and legal teams can audit each handoff.</p>
        </header>
        <div class="steps-container">
            <div class="step-card">
    <div class="step-content">
        <span class="step-badge">Step 1</span>
        <h3 class="step-title">Scope and CTC Sign-off</h3>
        <p class="step-description">Foreign client shares role, location, and gross CTC. Patron returns city-benchmarked offer with statutory burden. (1 working day.)</p>
        <div class="step-highlights">
            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Role + city locked</span>
            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>City benchmark</span>
            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>1 day</span>
        </div>
    </div>
    <div class="step-visual">
        <div class="step-illustration">
            <div class="illustration-icon">
                <svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="15" y="10" width="90" height="80" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><circle cx="35" cy="35" r="6" fill="#F5A623"/><circle cx="60" cy="35" r="6" fill="#E8712C"/><circle cx="85" cy="35" r="6" fill="#14365F"/><line x1="25" y1="55" x2="95" y2="55" stroke="#14365F" stroke-width="2" opacity="0.3"/><line x1="25" y1="68" x2="80" y2="68" stroke="#14365F" stroke-width="2" opacity="0.3"/><line x1="25" y1="80" x2="70" y2="80" stroke="#14365F" stroke-width="2" opacity="0.3"/></svg>
            </div>
            <span class="illustration-label">Scope Locked</span>
            <span class="step-number-large">01</span>
        </div>
    </div>
</div>

<div class="step-card">
    <div class="step-content">
        <span class="step-badge">Step 2</span>
        <h3 class="step-title">Employment Contract Drafting</h3>
        <p class="step-description">Patron drafts India-compliant offer letter under Industrial Relations Code 2020 and state Shops and Establishments Act. IP assignment to foreign parent included. (2 working days.)</p>
        <div class="step-highlights">
            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>IRC 2020 compliant</span>
            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>IP assigned</span>
            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>2 days</span>
        </div>
    </div>
    <div class="step-visual">
        <div class="step-illustration">
            <div class="illustration-icon">
                <svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="20" y="5" width="80" height="90" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><line x1="30" y1="20" x2="90" y2="20" stroke="#F5A623" stroke-width="3" stroke-linecap="round"/><line x1="30" y1="35" x2="80" y2="35" stroke="#14365F" stroke-width="2" opacity="0.3"/><line x1="30" y1="48" x2="85" y2="48" stroke="#14365F" stroke-width="2" opacity="0.3"/><line x1="30" y1="61" x2="75" y2="61" stroke="#14365F" stroke-width="2" opacity="0.3"/><circle cx="80" cy="80" r="10" fill="#E8712C"/><path d="M75 80 L78 83 L85 76" stroke="#fff" stroke-width="2" stroke-linecap="round" fill="none"/></svg>
            </div>
            <span class="illustration-label">Contract Drafted</span>
            <span class="step-number-large">02</span>
        </div>
    </div>
</div>

<div class="step-card">
    <div class="step-content">
        <span class="step-badge">Step 3</span>
        <h3 class="step-title">Background Verification</h3>
        <p class="step-description">Standard BGV: PAN, Aadhaar, last 2 employments, education. Required by RBI KYC norms for salary account opening. (3 to 5 working days.)</p>
        <div class="step-highlights">
            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>PAN + Aadhaar</span>
            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Education check</span>
            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>3-5 days</span>
        </div>
    </div>
    <div class="step-visual">
        <div class="step-illustration">
            <div class="illustration-icon">
                <svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><circle cx="60" cy="40" r="22" fill="#FEF4EE" stroke="#E8712C" stroke-width="2"/><circle cx="60" cy="40" r="14" fill="none" stroke="#14365F" stroke-width="1.5"/><line x1="76" y1="56" x2="92" y2="72" stroke="#14365F" stroke-width="3" stroke-linecap="round"/><line x1="50" y1="38" x2="58" y2="46" stroke="#E8712C" stroke-width="2" stroke-linecap="round"/><line x1="58" y1="46" x2="72" y2="32" stroke="#E8712C" stroke-width="2" stroke-linecap="round"/></svg>
            </div>
            <span class="illustration-label">BGV Cleared</span>
            <span class="step-number-large">03</span>
        </div>
    </div>
</div>

<div class="step-card">
    <div class="step-content">
        <span class="step-badge">Step 4</span>
        <h3 class="step-title">UAN and ESIC Allocation</h3>
        <p class="step-description">Patron registers the engineer on EPFO Unified Portal (Universal Account Number) and ESIC portal (Insurance Number). (1 working day.)</p>
        <div class="step-highlights">
            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>UAN issued</span>
            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>ESIC IP</span>
            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>1 day</span>
        </div>
    </div>
    <div class="step-visual">
        <div class="step-illustration">
            <div class="illustration-icon">
                <svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="15" y="20" width="40" height="55" rx="4" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><text x="35" y="42" font-size="9" font-weight="700" fill="#14365F" text-anchor="middle" font-family="Arial">UAN</text><line x1="20" y1="50" x2="50" y2="50" stroke="#E8712C" stroke-width="1.5"/><line x1="20" y1="58" x2="48" y2="58" stroke="#14365F" stroke-width="1" opacity="0.3"/><rect x="65" y="20" width="40" height="55" rx="4" fill="#FEF4EE" stroke="#E8712C" stroke-width="1.5"/><text x="85" y="42" font-size="9" font-weight="700" fill="#E8712C" text-anchor="middle" font-family="Arial">ESIC</text><line x1="70" y1="50" x2="100" y2="50" stroke="#14365F" stroke-width="1.5"/><line x1="70" y1="58" x2="98" y2="58" stroke="#14365F" stroke-width="1" opacity="0.3"/></svg>
            </div>
            <span class="illustration-label">Statutory Live</span>
            <span class="step-number-large">04</span>
        </div>
    </div>
</div>

<div class="step-card">
    <div class="step-content">
        <span class="step-badge">Step 5</span>
        <h3 class="step-title">Bank Account and Tax Setup</h3>
        <p class="step-description">Salary account opened with HDFC, ICICI, or Axis. Form 12BB (investment declaration) and Form 16 setup under Rule 26C of Income Tax Rules. (2 working days.)</p>
        <div class="step-highlights">
            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Salary account</span>
            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Form 12BB</span>
            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Rule 26C</span>
        </div>
    </div>
    <div class="step-visual">
        <div class="step-illustration">
            <div class="illustration-icon">
                <svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="15" y="30" width="90" height="50" rx="4" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><line x1="15" y1="42" x2="105" y2="42" stroke="#14365F" stroke-width="2"/><circle cx="30" cy="58" r="6" fill="#F5A623"/><line x1="45" y1="55" x2="95" y2="55" stroke="#14365F" stroke-width="2" opacity="0.3"/><line x1="45" y1="65" x2="85" y2="65" stroke="#14365F" stroke-width="2" opacity="0.3"/><circle cx="78" cy="20" r="9" fill="#E8712C"/><path d="M78 14 L78 20 L82 22" stroke="#fff" stroke-width="2" stroke-linecap="round"/></svg>
            </div>
            <span class="illustration-label">Account Open</span>
            <span class="step-number-large">05</span>
        </div>
    </div>
</div>

<div class="step-card">
    <div class="step-content">
        <span class="step-badge">Step 6</span>
        <h3 class="step-title">First Payroll Run</h3>
        <p class="step-description">CTC processed: Basic, HRA, Special Allowance, NPS, deductions of PF 12 percent (employer) + 12 percent (employee), ESI 3.25 percent + 0.75 percent, TDS under Section 192. (Day 1 of pay cycle.)</p>
        <div class="step-highlights">
            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>CTC processed</span>
            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>PF + ESI</span>
            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>TDS Sec 192</span>
        </div>
    </div>
    <div class="step-visual">
        <div class="step-illustration">
            <div class="illustration-icon">
                <svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="20" y="15" width="80" height="70" rx="4" fill="#FEF4EE" stroke="#E8712C" stroke-width="1.5"/><text x="60" y="32" font-size="10" font-weight="700" fill="#E8712C" text-anchor="middle" font-family="Arial">PAYSLIP</text><line x1="28" y1="42" x2="92" y2="42" stroke="#14365F" stroke-width="1" opacity="0.3"/><line x1="28" y1="52" x2="92" y2="52" stroke="#14365F" stroke-width="1" opacity="0.3"/><line x1="28" y1="62" x2="92" y2="62" stroke="#14365F" stroke-width="1" opacity="0.3"/><line x1="28" y1="72" x2="92" y2="72" stroke="#14365F" stroke-width="1" opacity="0.3"/><circle cx="92" cy="78" r="8" fill="#25D366"/><path d="M88 78 L91 81 L96 75" stroke="#fff" stroke-width="2" stroke-linecap="round" fill="none"/></svg>
            </div>
            <span class="illustration-label">Payroll Live</span>
            <span class="step-number-large">06</span>
        </div>
    </div>
</div>

<div class="step-card">
    <div class="step-content">
        <span class="step-badge">Step 7</span>
        <h3 class="step-title">Statutory Deposits</h3>
        <p class="step-description">PF and ESI by the 15th, TDS by the 7th, Form 24Q quarterly via TRACES. Late deposit triggers Section 14B EPF Act damages. (Monthly.)</p>
        <div class="step-highlights">
            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>PF/ESI 15th</span>
            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>TDS 7th</span>
            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Form 24Q</span>
        </div>
    </div>
    <div class="step-visual">
        <div class="step-illustration">
            <div class="illustration-icon">
                <svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="15" y="15" width="90" height="70" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><circle cx="35" cy="35" r="10" fill="#FEF4EE" stroke="#E8712C" stroke-width="1.5"/><text x="35" y="39" font-size="8" font-weight="700" fill="#E8712C" text-anchor="middle" font-family="Arial">PF</text><circle cx="60" cy="35" r="10" fill="#FEF4EE" stroke="#E8712C" stroke-width="1.5"/><text x="60" y="39" font-size="8" font-weight="700" fill="#E8712C" text-anchor="middle" font-family="Arial">ESI</text><circle cx="85" cy="35" r="10" fill="#FEF4EE" stroke="#E8712C" stroke-width="1.5"/><text x="85" y="39" font-size="8" font-weight="700" fill="#E8712C" text-anchor="middle" font-family="Arial">TDS</text><line x1="22" y1="58" x2="98" y2="58" stroke="#14365F" stroke-width="1" opacity="0.3"/><line x1="22" y1="70" x2="92" y2="70" stroke="#14365F" stroke-width="1" opacity="0.3"/></svg>
            </div>
            <span class="illustration-label">Deposits Filed</span>
            <span class="step-number-large">07</span>
        </div>
    </div>
</div>

<div class="step-card">
    <div class="step-content">
        <span class="step-badge">Step 8</span>
        <h3 class="step-title">Compliance Reporting to Foreign Parent</h3>
        <p class="step-description">Monthly PDF dashboard: payroll register, statutory challans, leave balances, gratuity accrual. Quarterly Form 24Q acknowledgement copy.</p>
        <div class="step-highlights">
            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Monthly dashboard</span>
            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Statutory pack</span>
            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Audit-ready</span>
        </div>
    </div>
    <div class="step-visual">
        <div class="step-illustration">
            <div class="illustration-icon">
                <svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="15" y="15" width="90" height="70" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><rect x="22" y="25" width="22" height="20" fill="#E8712C" opacity="0.7"/><rect x="50" y="35" width="22" height="10" fill="#F5A623" opacity="0.7"/><rect x="78" y="22" width="22" height="23" fill="#14365F" opacity="0.6"/><line x1="22" y1="55" x2="100" y2="55" stroke="#14365F" stroke-width="1" opacity="0.3"/><line x1="22" y1="65" x2="95" y2="65" stroke="#14365F" stroke-width="1" opacity="0.3"/><line x1="22" y1="75" x2="85" y2="75" stroke="#14365F" stroke-width="1" opacity="0.3"/></svg>
            </div>
            <span class="illustration-label">Report Sent</span>
            <span class="step-number-large">08</span>
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
            <h2 class="section-title">Documents Checklist</h2>
            <div class="content-text">
                
                <h3 style="color:var(--blue);margin-top:8px;">From Foreign Parent Company</h3>
<ul>
  <li>Certificate of Incorporation (notarised + apostilled)</li>
  <li>Latest audited financial statements (1 year)</li>
  <li>Board resolution authorising EOR engagement</li>
  <li>EOR Service Agreement signed by authorised signatory</li>
  <li>Job description and CTC budget per role</li>
  <li>IP assignment template (or use Patron's standard template)</li>
</ul>
<h3 style="color:var(--blue);margin-top:24px;">From Indian Engineer (Onboarding)</h3>
<ul>
  <li>PAN card (for TDS under Section 139A of Income Tax Act 1961)</li>
  <li>Aadhaar card (mandatory for UAN under EPFO Unified Portal)</li>
  <li>Last 2 employer relieving letters and Form 16</li>
  <li>Bank account proof (cancelled cheque)</li>
  <li>Highest education certificate</li>
  <li>Passport-size photograph</li>
  <li>Permanent and current address proof</li>
  <li>Form 12BB investment declaration (for TDS optimisation)</li>
</ul>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 9: CHALLENGES -->
<section class="content-section" id="challenges-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Common Challenges and How Patron Accounting Solves Them</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Challenge</th><th>Impact</th><th>How Patron Accounting Solves It</th></tr></thead>
                    <tbody>
                        <tr><td>PE risk from direct overseas payroll</td><td>Indian tax authorities classify direct salary remittance from a foreign HQ as Permanent Establishment under Section 9(1) of the Income Tax Act 1961, triggering 40 percent corporate tax plus surcharge on India-attributed profit.</td><td>Patron's EOR sits as the legal employer, breaking the agency link and ringfencing the foreign parent.</td></tr>
                        <tr><td>Multi-state PF and ESI complexity</td><td>Hiring across Bangalore (Karnataka), Hyderabad (Telangana), Pune (Maharashtra), and Delhi NCR means four state-specific Shops and Establishments Acts plus state professional tax ranging from Rs 200 to Rs 2,500 per month.</td><td>Patron files state-wise registrations once and runs unified payroll thereafter.</td></tr>
                        <tr><td>Misclassification of engineer as contractor</td><td>An engineer working fixed hours, using employer-issued laptop, and reporting to a foreign manager fails the Industrial Relations Code 2020 test of contractor status. Authorities can demand back PF, ESI, and gratuity for up to 5 years plus 12 percent interest.</td><td>Patron defaults every engagement to full employment with PF, ESI, and gratuity from day one.</td></tr>
                        <tr><td>Three-month notice period in Indian IT</td><td>Most Indian senior engineers carry 60 to 90 day notice obligations to their current employer, creating gap pay risk if start dates slip.</td><td>Patron front-loads offer rollouts so first payroll lands the moment the engineer joins, with no overlap or gap pay risk.</td></tr>

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
            <h2 class="section-title">Fees and Pricing</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Fee Component</th><th>Amount</th></tr></thead>
                    <tbody>
                        <tr><td>Junior Engineer (0 to 3 yrs, CTC up to Rs 12 LPA)</td><td class="text-right">Rs 8,000 per employee per month</td></tr>
                        <tr><td>Mid-Level Engineer (3 to 7 yrs, CTC Rs 12 to 30 LPA)</td><td class="text-right">Rs 10,000 per employee per month</td></tr>
                        <tr><td>Senior Engineer / Engineering Manager (7+ yrs, CTC Rs 30 LPA+)</td><td class="text-right">Rs 12,000 per employee per month</td></tr>
                        <tr><td>Setup Fee (one time, waived for 5+ engineers)</td><td class="text-right">Rs 25,000</td></tr>
                        <tr><td>Statutory Burden (employer): PF 12%, ESI 3.25% (where wage &lt;= Rs 21,000), Gratuity 4.81%, Bonus, Insurance</td><td class="text-right">18 to 22 percent on gross salary</td></tr>
                        <tr><td><strong>Patron Accounting Professional Fees (starting)</strong></td><td class="text-right"><strong>Starting from Rs 8,000 per employee per month (Exl GST and Govt. Charges)</strong></td></tr>

                    </tbody>
                </table>
                </div>
                <p style="margin-top:16px;font-size:13px;color:var(--text-muted);font-style:italic;">All fees and charges listed are indicative only and do not constitute a binding offer. Final amounts may vary depending on the volume of work and the complexity involved.</p>
                <p style="margin-top:16px;">Professional service charges for drafting, filing, and representation are separate from the statutory fees. The exact fee depends on the complexity of the case, disputed amount, and number of hearings required. Contact us for a detailed quote.</p>
                <p style="margin-top:16px;"><strong>Get a free EOR Engineering Team consultation - <a href="tel:+919459456700">Call +91 945 945 6700</a> or <a href="https://wa.me/919459456700?text=Hi%2C%20please%20share%20a%20free%20EOR%20engineering%20team%20quote%20for%20India." target="_blank">WhatsApp us</a>. No-obligation assessment.</strong></p>
            </div>
        </div>
    </div>
</section>

<!-- SECTION 11: TIMELINE -->
<section class="content-section" id="timeline-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Time Taken</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Stage</th><th>Estimated Timeline</th></tr></thead>
                    <tbody>
                        <tr><td>EOR Service Agreement signing</td><td>1 to 2 days</td></tr>
                        <tr><td>Engineer offer letter rollout</td><td>5 to 7 days from JD share</td></tr>
                        <tr><td>Background verification</td><td>3 to 5 days (parallel)</td></tr>
                        <tr><td>UAN and ESIC allocation</td><td>1 day</td></tr>
                        <tr><td>First payroll run</td><td>Day 1 of next pay cycle, or 10 to 14 days post-joining</td></tr>
                        <tr><td>Form 16 issue (annual)</td><td>By 15 June after FY end</td></tr>
                        <tr><td>F&amp;F settlement on exit</td><td>Within 30 days of last working day per Payment of Wages Act 1936</td></tr>
                        <tr><td>GCC subsidiary alternative timeline</td><td>3 to 6 months for incorporation, GST, EPFO, banking</td></tr>

                    </tbody>
                </table>
                </div>
                <div class="highlight-box" style="margin-top:16px;">
                    
                    <p><strong>Pilot to scale path:</strong> Most foreign hirers run a 12 to 18-month EOR pilot before deciding on captive GCC conversion. Patron Accounting handles the employee transfer under Industrial Relations Code 2020 with continuity of PF, ESI, gratuity, and seniority.</p>

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
            <h2 class="section-title">Why Use Patron Accounting EOR Over a Global Platform</h2>
        </div>
        <div class="features-grid">
  <div class="feature-card">
    <div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 2L4 6v6c0 5.55 3.84 10.74 8 12 4.16-1.26 8-6.45 8-12V6l-8-4z"/><path d="M9 12l2 2 4-4"/></svg></div>
    <h3>CA-led compliance, not chatbot tickets</h3>
    <p>Every Patron engagement is supervised by a licensed Chartered Accountant or Company Secretary. PF disputes, ESI inspections, and tax notices are handled in-house, not escalated to a help desk.</p>
  </div>
  <div class="feature-card">
    <div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M14 2H6a2 2 0 00-2 2v16a2 2 0 002 2h12a2 2 0 002-2V8z"/><path d="M14 2v6h6M16 13H8M16 17H8"/></svg></div>
    <h3>Local authority before audits, not after</h3>
    <p>Patron has filed 50,000+ statutory returns since 2010 and represented clients before EPFO, ESIC, CBDT, and the Income Tax Appellate Tribunal. Foreign companies inherit that authority on day one.</p>
  </div>
  <div class="feature-card">
    <div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><line x1="12" y1="1" x2="12" y2="23"/><path d="M17 5H9.5a3.5 3.5 0 000 7h5a3.5 3.5 0 010 7H6"/></svg></div>
    <h3>CTC structuring for take-home, not just compliance</h3>
    <p>Patron designs Section 17(2) perquisite mix, NPS under Section 80CCD(1B), and LTA per Rule 2B to lift engineer take-home by 8 to 12 percent at zero cost to employer.</p>
  </div>
  <div class="feature-card">
    <div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M3 9l9-7 9 7v11a2 2 0 01-2 2H5a2 2 0 01-2-2z"/><polyline points="9 22 9 12 15 12 15 22"/></svg></div>
    <h3>Smooth GCC transition when scale demands it</h3>
    <p>When team crosses 25 engineers, Patron incorporates the wholly-owned subsidiary, files FDI compliance, and transfers staff via the Industrial Relations Code 2020 (successor to Section 25FF, ID Act 1947).</p>
  </div>
</div>
    </div>
</section>

<!-- SECTION 12A: SOCIAL PROOF -->
<section class="content-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Trusted by Foreign Hirers and Indian Engineers</h2>
            <div class="content-text">
                
                <p style="font-size:15px;color:var(--blue);font-weight:600;">10,000+ Businesses | 4.9 Google Rating | 50,000+ Documents Filed | 15+ Years of India Compliance</p>
<h3 style="color:var(--blue);margin-top:24px;">Trusted By</h3>
<p>Hyundai, Asian Paints, Bridgestone, and 200+ Indian and foreign-owned employers.</p>
<h3 style="color:var(--blue);margin-top:24px;">Outcome Proof</h3>
<p>A US Series B SaaS company hired 14 platform engineers across Bangalore and Hyderabad in 11 calendar days through Patron's EOR, saving 4 months and Rs 22 lakh versus subsidiary incorporation, with zero PF, ESI, or TDS escalations in the first 12 months.</p>
<p style="margin-top:16px;font-size:14px;color:var(--text-muted);"><em>With offices in Pune, Mumbai, Delhi, and Gurugram, Patron Accounting serves businesses across India - both in-person and remotely.</em></p>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 13: SELF-FILING vs PROFESSIONAL COMPARISON -->
<section class="content-section" id="comparison-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">EOR vs Subsidiary vs Contractor (DIY) Comparison</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Parameter</th><th>EOR (Patron)</th><th>Wholly-owned Subsidiary</th><th>Contractor (DIY)</th></tr></thead>
                    <tbody>
                        <tr><td>Setup Time</td><td><span class="badge-included">5 to 7 days</span></td><td>3 to 6 months</td><td>Same day</td></tr>
                        <tr><td>Setup Cost</td><td>Rs 0 (waived 5+ hires)</td><td>Rs 18 to 25 lakh</td><td>Rs 0</td></tr>
                        <tr><td>Monthly Cost per Engineer</td><td>Rs 8,000 to Rs 12,000 + GST</td><td>Rs 5,000 to Rs 8,000 (after staff hired)</td><td>0 (paid per invoice)</td></tr>
                        <tr><td>PE Risk</td><td><span class="badge-included">None - EOR is local employer</span></td><td>Yes - subsidiary is taxable entity</td><td>High - direct foreign payment triggers PE</td></tr>
                        <tr><td>Statutory Compliance</td><td><span class="badge-included">Patron files PF, ESI, TDS</span></td><td>In-house team or outsourced</td><td>Engineer self-files; misclassification risk</td></tr>
                        <tr><td>IP Assignment</td><td><span class="badge-included">Hard-coded in EOR contract</span></td><td>Direct via subsidiary</td><td>Weak - contractor retains rights by default</td></tr>
                        <tr><td>Break-even Point</td><td>Less than 25 engineers</td><td>More than 25 engineers</td><td>Project-based only</td></tr>
                        <tr><td>Exit Cost</td><td>Per-employee F&amp;F per Payment of Gratuity Act 1972</td><td>Subsidiary closure: 12 to 18 months</td><td>Termination per contract terms</td></tr>

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
            <h2 class="section-title">Related Services from Patron Accounting</h2>
            <div class="content-text">
                
                <p>EOR engagement integrates with Patron Accounting's broader compliance stack. Foreign hirers commonly bundle the services below.</p>
<ul>
  <li>If you also need 24/7 customer support agents alongside engineering, Patron's <a href="/eor-india-customer-support-team">EOR India customer support team</a> service runs the same compliance backbone for voice, chat, and email roles with state Shops Act night shift coverage.</li>
  <li>If your engineering team grows beyond 25, Patron handles the full <a href="/payroll-services">payroll services</a> stack inside the new wholly-owned subsidiary.</li>
  <li>All EOR engineers are covered under Patron's <a href="/pf-registration">PF registration</a> filings, with monthly EPFO challans and UAN-linked passbooks.</li>
  <li>ESI coverage for engineers earning up to Rs 21,000 per month is set up via Patron's <a href="/esic-registration">ESIC registration</a> service before first payroll.</li>
  <li>TDS on salary under Section 192, Form 24Q filings, and Form 16 issuance run through Patron's <a href="/tds-return-filing-24q">TDS return filing 24Q</a> practice.</li>
  <li>When the foreign parent transitions to a wholly-owned subsidiary, Patron's <a href="/fdi-compliance">FDI compliance</a> team files FC-GPR, annual FLA returns, and CARO transfer pricing reports.</li>
</ul>
<h3 style="color:var(--blue);margin-top:24px;">India Engineer Salary Benchmarks (2026, By Hub City)</h3>
<p>Salaries below reflect total CTC for full-time engineering roles in 2026. Source: aggregated from Glassdoor, Levels.fyi, Plugscale, and Patron's own placement data across 200+ engagements.</p>
<div class="table-responsive-wrapper">
<table class="table-comparison">
  <thead><tr><th>Level</th><th>Bangalore</th><th>Hyderabad</th><th>Pune</th><th>Delhi NCR</th></tr></thead>
  <tbody>
    <tr><td>Junior (0 to 2 yrs)</td><td>Rs 8 to 14 LPA</td><td>Rs 7 to 12 LPA</td><td>Rs 6 to 10 LPA</td><td>Rs 7 to 12 LPA</td></tr>
    <tr><td>Mid-level (3 to 6 yrs)</td><td>Rs 20 to 35 LPA</td><td>Rs 18 to 30 LPA</td><td>Rs 15 to 25 LPA</td><td>Rs 15 to 25 LPA</td></tr>
    <tr><td>Senior (6 to 10 yrs)</td><td>Rs 40 to 70 LPA</td><td>Rs 35 to 60 LPA</td><td>Rs 30 to 50 LPA</td><td>Rs 32 to 55 LPA</td></tr>
    <tr><td>Engineering Manager</td><td>Rs 50 to 90 LPA</td><td>Rs 45 to 80 LPA</td><td>Rs 40 to 70 LPA</td><td>Rs 42 to 75 LPA</td></tr>
    <tr><td>Staff / Principal</td><td>Rs 80 LPA to Rs 1.5 cr</td><td>Rs 70 LPA to Rs 1.3 cr</td><td>Rs 60 LPA to Rs 1.1 cr</td><td>Rs 65 LPA to Rs 1.2 cr</td></tr>
  </tbody>
</table>
</div>
<p style="margin-top:16px;"><strong>Hub city economics:</strong> Bangalore commands a 20 to 25 percent premium over Pune for the same level due to GCC density. Hyderabad has narrowed the gap on Bangalore since Microsoft, Apple, Google, and Amazon expanded their campuses. Pune offers 15 to 20 percent salary efficiency with lower attrition. Delhi NCR (Gurugram, Noida) sees the highest variance because of consulting and BFSI tech demand.</p>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 15A: LEGAL FRAMEWORK -->
<section class="content-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Legal and Compliance Framework (India Only)</h2>
            <div class="content-text">
                
                <p>Every EOR engagement under Patron Accounting follows the legislation listed below. Foreign-parent counsel can audit each citation against the Act and Section.</p>
<h3 style="color:var(--blue);margin-top:16px;">Code on Wages 2019</h3>
<p>Effective 21 November 2025. Defines minimum wage, timely payment of wages by the 7th of the succeeding month under Section 17, equal remuneration. Replaces Minimum Wages Act 1948, Payment of Wages Act 1936, Equal Remuneration Act 1976, and Payment of Bonus Act 1965. Reference: <a href="https://labour.gov.in" target="_blank" rel="noopener">Ministry of Labour and Employment</a>.</p>
<h3 style="color:var(--blue);margin-top:16px;">Code on Social Security 2020</h3>
<p>Effective 21 November 2025. Consolidates EPF and MP Act 1952, ESI Act 1948, Payment of Gratuity Act 1972, and Maternity Benefit Act 1961. Fixed-term employees are now eligible for gratuity after 1 year (down from 5 years) - directly relevant for project engineers.</p>
<h3 style="color:var(--blue);margin-top:16px;">Industrial Relations Code 2020</h3>
<p>Effective 21 November 2025. Mandatory written appointment letters under Section 6. Notice period, lay-off, and retrenchment provisions. Replaces Industrial Disputes Act 1947, Trade Unions Act 1926, and Industrial Employment (Standing Orders) Act 1946.</p>
<h3 style="color:var(--blue);margin-top:16px;">Occupational Safety, Health and Working Conditions Code 2020</h3>
<p>Effective 21 November 2025. Caps working hours at 8 to 12 per day and 48 per week. Free annual health checkup for workers above 40. Women may work night shifts with consent and safety arrangements.</p>
<h3 style="color:var(--blue);margin-top:16px;">EPF and MP Act 1952</h3>
<p>Employer contributes 12 percent of Basic + DA to PF, with 8.33 percent routed to Employees Pension Scheme on wage ceiling Rs 15,000. Late deposit attracts 12 percent annual interest under Section 7Q plus damages 5 to 25 percent under Section 14B. Reference: <a href="https://www.epfindia.gov.in" target="_blank" rel="noopener">EPFO official portal</a>.</p>
<h3 style="color:var(--blue);margin-top:16px;">ESI Act 1948</h3>
<p>Employer contributes 3.25 percent and employee 0.75 percent on gross wages up to Rs 21,000 per month. Penalty for non-payment up to 6 months imprisonment under Section 85. Reference: <a href="https://www.esic.gov.in" target="_blank" rel="noopener">ESIC official portal</a>.</p>
<h3 style="color:var(--blue);margin-top:16px;">Income Tax Act 1961, Section 192</h3>
<p>Mandatory monthly TDS on salary by the 7th of the succeeding month under Rule 30. Quarterly Form 24Q via TRACES. Annual Form 16 to engineer by 15 June. Failure attracts 1.5 percent monthly interest under Section 201(1A) and disallowance under Section 40(a)(ia). Reference: <a href="https://www.incometax.gov.in" target="_blank" rel="noopener">Income Tax Department</a>.</p>
<h3 style="color:var(--blue);margin-top:16px;">Payment of Gratuity Act 1972</h3>
<p>Gratuity at 15 days wages for every completed year of service, payable on exit after 5 years (or 1 year for fixed-term under Code on Social Security). Capped at Rs 20 lakh. Section 4(6) penalty for delayed payment: 10 percent simple interest. Full legislation: <a href="https://www.indiacode.nic.in" target="_blank" rel="noopener">India Code</a>.</p>

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
                    <p class="faq-expanded__lead">Real questions from foreign-parent counsel and engineering hiring leaders. Drawn from Google PAA, Patron client mandates, and HR forums.</p>
                    @include('partials.bigin-form', [
                        'variant'  => 'compact',
                        'service'  => 'EOR Engineering Team',
                    ])
                </aside>
                <div class="faq-expanded__list">
                    <div class="faq-expanded__item" id="faq-1">
                        <h3 class="faq-expanded__q">Is using an EOR legal in India?</h3>
                        <div class="faq-expanded__a"><p>Yes. EOR is fully legal in India. The EOR is a locally registered Indian company that complies with the Companies Act 2013, the Code on Social Security 2020, and the Income Tax Act 1961. Foreign companies engage the EOR via a B2B service agreement, and the engineer is legally employed by the EOR for all statutory purposes including PF, ESI, gratuity, and TDS.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-2">
                        <h3 class="faq-expanded__q">How much does an EOR for India engineering team cost in 2026?</h3>
                        <div class="faq-expanded__a"><p>Patron Accounting charges Rs 8,000 to Rs 12,000 per engineer per month plus 18 percent GST, depending on seniority. Statutory employer burden adds 18 to 22 percent on top of gross salary (PF 12 percent, ESI 3.25 percent up to wage ceiling, gratuity 4.81 percent accrual). Global platforms charge USD 199 to USD 700 per month with FX markups. Total cost of employment runs 115 to 125 percent of gross annual salary.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-3">
                        <h3 class="faq-expanded__q">Can a foreign company hire engineers in India without a local entity?</h3>
                        <div class="faq-expanded__a"><p>Yes, through an Employer of Record. A foreign company cannot directly run payroll, deduct PF, or deposit TDS in India without a registered Indian entity or PAN. The EOR provides that local entity layer. The foreign company stays the day-to-day manager, owns the work product, and pays the EOR a single monthly invoice in INR or USD.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-4">
                        <h3 class="faq-expanded__q">What is the difference between EOR and PEO in India?</h3>
                        <div class="faq-expanded__a"><p>EOR is the legal employer of record - the engineer's contract is with the EOR. PEO is a co-employment model where both client and PEO share legal responsibility. Indian labour law does not formally recognise co-employment, so PEO offerings in India in practice operate as EOR. For foreign hirers, EOR is the correct and only fully compliant model.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-5">
                        <h3 class="faq-expanded__q">How long does EOR onboarding take?</h3>
                        <div class="faq-expanded__a"><p>5 to 7 working days from JD share to offer letter, and 10 to 14 days from offer to first payroll. Background verification runs in parallel. Subsidiary incorporation by contrast takes 3 to 6 months for Companies Act 2013 registration, GST, EPFO and ESIC code, and bank account setup.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-6">
                        <h3 class="faq-expanded__q">What is Permanent Establishment risk and how does EOR avoid it?</h3>
                        <div class="faq-expanded__a"><p>Permanent Establishment under Article 5 of India's tax treaties and Section 9(1) of the Income Tax Act 1961 means the foreign parent has a taxable business presence in India. Direct employment of Indian staff, signing of contracts in India, or having dependent agents triggers PE and 40 percent corporate tax plus surcharge on India-attributed profit. EOR removes the trigger because the EOR (not the foreign parent) is the employer.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-7">
                        <h3 class="faq-expanded__q">Which Indian city is best for hiring engineers - Bangalore, Hyderabad, Pune, or Delhi NCR?</h3>
                        <div class="faq-expanded__a"><p>Bangalore for senior product talent and GCC density. Hyderabad for AI, ML, and big tech captives (Microsoft, Apple, Google, Amazon). Pune for cost-efficient mid-level engineering with lower attrition. Delhi NCR (Gurugram, Noida) for fintech, BFSI, and consulting tech. Patron Accounting supports all four hubs with multi-state PF, ESI, and professional tax registration.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-8">
                        <h3 class="faq-expanded__q">Engineer ko EOR ke through hire karna hai - kaise start karte hain?</h3>
                        <div class="faq-expanded__a"><p>Pehla step: Patron Accounting ko +91 945 945 6700 par call kijiye ya WhatsApp message bhejiye. Hum role description, city, aur target CTC lete hain, aur 4 working hours ke andar full quote bhejte hain - including statutory burden, Patron fee, aur total cost of employment. Service Agreement sign hone ke baad 5-7 din me offer roll out ho jata hai.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-9">
                        <h3 class="faq-expanded__q">India me engineering team setup karne ke liye EOR theek hai ya subsidiary?</h3>
                        <div class="faq-expanded__a"><p>Pehla 25 engineers tak EOR economical hai - kyunki subsidiary me Rs 18-25 lakh ka one-time cost aur 3-6 mahine ka delay aata hai. 25 engineers ke baad subsidiary cost-effective ban jata hai. Patron Accounting EOR se subsidiary me transition bhi handle karta hai - employees ko Industrial Relations Code 2020 ke under transfer karke.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-10">
                        <h3 class="faq-expanded__q">What happens to PF, ESI, and gratuity when an engineer leaves the EOR?</h3>
                        <div class="faq-expanded__a"><p>On exit, the engineer's UAN remains active and PF balance transfers to the next employer or can be withdrawn after 60 days under Paragraph 68N of the EPF Scheme 1952. ESI coverage continues for 6 months post-exit under the Insurance Medical Practitioner scheme. Gratuity is paid within 30 days of last working day under Section 7 of the Payment of Gratuity Act 1972, capped at Rs 20 lakh. Patron processes F&F including leave encashment within 30 days.</p></div>
                    </div>
                </div>
            </div>


            <!-- Quick Answers -->
            <div class="highlight-box" style="margin-top:32px;">
                <p><strong>Quick Answers</strong></p>
                <p><strong>Who can use Patron Accounting EOR?</strong> Foreign companies (US, UK, EU, Singapore, Australia) hiring 1 to 50 engineers in India without a local entity.</p>
<p><strong>What does it cost?</strong> Rs 8,000 to Rs 12,000 per engineer per month plus 18 percent GST plus 18 to 22 percent statutory burden on gross salary.</p>
<p><strong>How fast does it run?</strong> 5 to 7 days to offer; 10 to 14 days to first payroll.</p>
<p><strong>Which laws apply?</strong> Code on Wages 2019, Code on Social Security 2020, Industrial Relations Code 2020, Income Tax Act 1961, EPF and MP Act 1952, ESI Act 1948.</p>
<p><strong>Where do you serve?</strong> All of India, with hub-city coverage in Bangalore, Hyderabad, Pune, Delhi NCR, Mumbai, Chennai, Kolkata.</p>
<p><strong>What is the break-even versus subsidiary?</strong> EOR remains cheaper until you cross 25 engineers in a single India team.</p>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 18: URGENCY CTA -->
<section class="content-section" style="background: var(--orange-lighter) !important; border-left: 4px solid var(--orange);">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Statutory Deadlines That Cannot Slip</h2>
            <div class="content-text">
                
                <p>Indian payroll runs on hard, monthly deadlines. A single missed deposit triggers penalty plus interest plus reputational risk with the engineer.</p>
<div class="table-responsive-wrapper">
<table>
  <thead><tr><th>Compliance</th><th>Deadline</th><th>Penalty</th></tr></thead>
  <tbody>
    <tr><td>TDS on Salary</td><td>7th of next month</td><td>1.5 percent monthly interest under Section 201(1A); disallowance under Section 40(a)(ia)</td></tr>
    <tr><td>PF (EPF)</td><td>15th of next month</td><td>12 percent annual interest under Section 7Q; damages 5 to 25 percent under Section 14B EPF Act</td></tr>
    <tr><td>ESI</td><td>15th of next month</td><td>12 percent annual interest; up to 6 months imprisonment under Section 85 ESI Act</td></tr>
    <tr><td>Form 24Q (TDS Return)</td><td>Quarterly: 31 July, 31 Oct, 31 Jan, 31 May</td><td>Late fee Rs 200 per day under Section 234E; penalty up to Rs 1 lakh under Section 271H</td></tr>
    <tr><td>Form 16 to Engineer</td><td>15 June after FY end</td><td>Rs 100 per day per certificate under Section 272A(2)(g)</td></tr>
    <tr><td>Gratuity Payment on Exit</td><td>Within 30 days of last working day</td><td>10 percent simple interest under Section 7(3A) Payment of Gratuity Act 1972</td></tr>
  </tbody>
</table>
</div>
<p style="margin-top:16px;"><strong>Talk to Patron's CA-led EOR Team:</strong> <a href="tel:+919459456700">Call +91 945 945 6700</a> | <a href="https://wa.me/919459456700?text=Hi%2C%20please%20share%20a%20free%20EOR%20engineering%20team%20quote%20for%20India." target="_blank">WhatsApp +91 945 945 6700</a> | <a href="mailto:contact@patronaccounting.com?subject=Enquiry%20for%20EOR%20Engineering%20Team%20Services&body=Hello%20Patron%20Accounting%20Team%2C%0A%0AI%20am%20interested%20in%20your%20EOR%20engineering%20team%20services%20and%20would%20like%20to%20know%20more.%0A%0APlease%20get%20in%20touch%20with%20me%20at%20your%20earliest%20convenience.%0A%0AThank%20you.">Email contact@patronaccounting.com</a>. Free consultation. No obligation.</p>

            </div>
        </div>
    </div>
</section>

<!-- CONCLUSION + CTA BLOCK (Dark) -->
<section class="content-section" style="background: var(--blue) !important;">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title" style="color:#FFFFFF !important;">Launch Your Compliant India Engineering Team With Patron Accounting</h2>
            <div class="content-text" style="text-align:left;">
                
                <p>EOR India engineering team services are the fastest, lowest-risk way for foreign companies to access India's engineering talent without subsidiary incorporation. The model collapses time-to-hire from months to days, ringfences Permanent Establishment exposure, and absorbs the entire monthly compliance burden under the Code on Wages 2019, the Code on Social Security 2020, the Income Tax Act 1961, and the EPF and ESI Acts.</p>
<p>Patron Accounting LLP brings 15+ years of CA-led India compliance, four physical offices in Pune, Mumbai, Delhi, and Gurugram, and 200+ Indian and foreign-owned employer engagements to every EOR mandate. Foreign hirers gain a legal employer of record, transparent flat-fee pricing, CTC structuring that lifts engineer take-home, and a defined transition path to a wholly-owned subsidiary when team scale demands it.</p>
<p>10,000+ Businesses | 4.9 Google Rating | 50,000+ Documents Filed | 15+ Years of India Compliance</p>

            </div>
            <div style="display:flex;gap:14px;flex-wrap:wrap;margin-top:24px;">
                <a href="tel:+919459456700" style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:var(--orange);color:#fff;border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#128222; Call +91 945 945 6700</a>
                <a href="https://wa.me/919459456700?text=Hi%2C%20please%20share%20a%20free%20EOR%20engineering%20team%20quote%20for%20India." target="_blank" style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:#25D366;color:#fff;border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#128172; WhatsApp Us</a>
                <a href="mailto:contact@patronaccounting.com?subject=Enquiry%20for%20EOR%20Engineering%20Team%20Services&body=Hello%20Patron%20Accounting%20Team%2C%0A%0AI%20am%20interested%20in%20your%20EOR%20engineering%20team%20services%20and%20would%20like%20to%20know%20more.%0A%0APlease%20get%20in%20touch%20with%20me%20at%20your%20earliest%20convenience.%0A%0AThank%20you." style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:transparent;color:#fff;border:2px solid rgba(255,255,255,0.3);border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#9993;&#65039; Email Us</a>
            </div>
            <p style="color:rgba(255,255,255,0.7);font-size:13px;margin-top:16px;">Book a Free Consultation - No Obligation.</p>
        </div>
    </div>
</section>

<!-- GSTAT STATE BENCH CITY PAGES (32 Pages) -->
<section class="content-section" style="padding:48px 32px;background:var(--gray-50);">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title" style="text-align:center;margin-bottom:12px;">Compliance Services That Pair With EOR Engineering Team</h2>
            <p style="text-align:center;color:var(--text-muted);font-size:15px;margin-bottom:40px;">Bundle EOR with payroll, PF, ESI, TDS, and FDI services from Patron Accounting for an end-to-end India compliance stack.</p>
  
            <div class="pa-city-block">
                    <div class="pa-block-title">Related Services from Patron Accounting</div>
                    <div class="pa-block-sub">End-to-end statutory and payroll backbone for EOR Engineering Team</div>
                    <div class="pa-cross-grid">
                        <a href="/eor-india-customer-support-team" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">EOR Customer Support</div><div class="pa-card-sub">India</div></div></a>
                        <a href="/payroll-services" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Payroll Services</div><div class="pa-card-sub">India</div></div></a>
                        <a href="/pf-registration" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">PF Registration</div><div class="pa-card-sub">India</div></div></a>
                        <a href="/esic-registration" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">ESIC Registration</div><div class="pa-card-sub">India</div></div></a>
                        <a href="/tds-return-filing-24q" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">TDS Return Filing 24Q</div><div class="pa-card-sub">India</div></div></a>
                        <a href="/fdi-compliance" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">FDI Compliance</div><div class="pa-card-sub">India</div></div></a>
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
            <p>This page is reviewed every 6 months or whenever a Central Rules notification under any of the four Labour Codes, a change in PF or ESI wage ceiling, or an Income Tax Act amendment to Section 192 or Section 9(1) is published. Last reviewer: CA & CS Team, Patron Accounting LLP.</p>
        </div>
    </div>
</section>


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
