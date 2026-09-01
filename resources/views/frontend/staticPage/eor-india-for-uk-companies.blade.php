@extends('layouts.service-app')

<!-- External Dependencies (loaded by master layout in production) -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Barlow:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,400&family=DM+Sans:opsz,wght@9..40,400;9..40,500;9..40,600;9..40,700&display=swap" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

@section('meta')
    <title>EOR India for UK Companies in</title>
    <meta name="description" content="Hire Indian talent without entity. CA-led EOR with PE-risk firewall, UK-India DTAA, UK GDPR + DPDP alignment. Starting GBP 159/employee.">
    <link rel="canonical" href="/eor-india-for-uk-companies">
    <meta name="robots" content="index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1">
    <meta property="og:title" content="EOR India for UK Companies in 2026 | Patron Accounting">
    <meta property="og:description" content="Hire Indian talent without entity. CA-led EOR with PE-risk firewall, UK-India DTAA, UK GDPR + DPDP alignment. Starting GBP 159/employee.">
    <meta property="og:url" content="/eor-india-for-uk-companies">
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="Patron Accounting">
    <meta property="og:image" content="https://www.patronaccounting.com/images/og-default-square.png">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="1200">
    <meta property="og:image:type" content="image/png">
    <meta property="og:image:secure_url" content="https://www.patronaccounting.com/images/og-default-square.png">
    <meta property="og:image:alt" content="Patron Accounting - partner you can rely on">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="EOR India for UK Companies in 2026 | Patron Accounting">
    <meta name="twitter:description" content="Hire Indian talent without entity. CA-led EOR with PE-risk firewall, UK-India DTAA, UK GDPR + DPDP alignment. Starting GBP 159/employee.">
    <meta name="twitter:image" content="https://www.patronaccounting.com/images/og-default-square.png">
@endsection

@section('schema')
    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@graph": [
        {
          "@type": "BreadcrumbList",
          "@id": "https://www.patronaccounting.com/eor-india-for-uk-companies#breadcrumb",
          "itemListElement": [
            { "@type": "ListItem", "position": 1, "name": "Home", "item": "https://www.patronaccounting.com/" },
            { "@type": "ListItem", "position": 2, "name": "Services", "item": "https://www.patronaccounting.com/services" },
            { "@type": "ListItem", "position": 3, "name": "EOR India for UK Companies", "item": "https://www.patronaccounting.com/eor-india-for-uk-companies" }
          ]
        },
        {
          "@type": "FAQPage",
          "@id": "https://www.patronaccounting.com/eor-india-for-uk-companies#faq",
          "mainEntity": [
            {
              "@type": "Question",
              "name": "Can a UK company hire employees in India without a local entity?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "Yes. Through an Employer of Record like Patron Accounting LLP, the UK Ltd or PLC avoids setting up an Indian subsidiary. Patron becomes the legal employer in India, issues Indian employment contracts, runs INR payroll, files EPF, ESI, Professional Tax, and TDS under Section 192. The UK parent retains functional control via MSA. EOR is the compliant alternative to misclassifying full-time staff as self-employed consultants, which creates PE risk under Article 5 UK-India DTAA."
              }
            },
            {
              "@type": "Question",
              "name": "Will using EOR in India create Permanent Establishment risk for the UK parent?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "Properly structured EOR shields the UK parent from PE under Article 5 of the UK-India DTAA (1993 + 2013 Protocol + MLI). Patron is the principal Indian employer; the UK client has no fixed place of business in India. PE risk arises if Indian employees inadvertently exercise concluding-contract authority (Article 5(4) Dependent Agent PE) or if construction/supervisory activities continue beyond 6 months. Patron issues a PE-firewall memo at MSA signing with quarterly check-ins to flag scope expansion."
              }
            },
            {
              "@type": "Question",
              "name": "How does the UK-India DTAA help with hiring Indian employees?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "The UK-India DTAA was signed 25 January 1993, in force 25 October 1993, modified by the 2013 Protocol (effective 27 December 2013) and the BEPS MLI. Article 5 defines PE with a 6-month construction threshold. Article 7 allocates business profits. Article 16 (Dependent Personal Services) confirms Indian-resident EOR employees working in India are taxed in India under Section 192. Article 24 provides the Foreign Tax Credit mechanism preventing double taxation."
              }
            },
            {
              "@type": "Question",
              "name": "How does UK GDPR interact with India DPDP Act 2023 for employee data?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "Post-Brexit, UK organisations operate under UK GDPR (retained EU law administered by the ICO). Article 46 transfers to India use the UK International Data Transfer Agreement (IDTA) or UK Addendum to EU SCCs. India's DPDP Act 2023 Section 16 + Rule 15 (DPDP Rules 2025) follows a 'negative list' approach - transfers permitted unless Central Government restricts. Patron handles both via dual-clause Data Processing Addendum. Different breach timelines: 72 hours under UK GDPR versus 'as soon as practicable' under DPDP."
              }
            },
            {
              "@type": "Question",
              "name": "Does the UK-India FTA affect EOR arrangements?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "The UK-India Free Trade Agreement signed in 2025 includes a Double Contributions Convention preventing duplicate social security contributions for UK employees seconded to India. This is relevant when EOR clients later move UK-resident staff to Indian subsidiaries. The FTA does not change core EOR mechanics - Indian employees of Patron-as-EOR remain Indian-tax-resident, paid in INR, with Indian employer fulfilling Indian compliance. Patron tracks FTA implementation milestones quarterly."
              }
            },
            {
              "@type": "Question",
              "name": "What is the cost of EOR in India for UK companies in GBP?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "Patron's EOR pricing in GBP: Starter tier (1 to 4 employees) GBP 199 PEPM. Growth tier (5 to 14 employees) GBP 159. Scale tier (15 to 30 employees) GBP 139, including quarterly PE-risk review and multi-state PT/LWF management. Enterprise (31+) is custom with migration plan to Indian Pvt Ltd. Employee CTC, employer EPF, ESI, and gratuity provision billed at cost (pass-through). Generic EOR platforms typically charge GBP 250 to 550 per employee per month."
              }
            },
            {
              "@type": "Question",
              "name": "How is IR35 misclassification different from Indian employment classification?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "IR35 protects HMRC by reclassifying disguised employment for UK tax purposes. The Indian equivalent protects EPFO, ESIC, and CBDT. The factual tests are similar - fixed hours, client-issued equipment, single-client dependency, line-management reporting - but the consequences differ. Indian reclassification triggers backdated EPF, ESI, gratuity, leave encashment, and TDS for 3 to 7 years, plus PE exposure for the UK parent. EOR structure avoids both IR35-style and Indian-misclassification risk simultaneously."
              }
            },
            {
              "@type": "Question",
              "name": "When should UK companies migrate from EOR to setting up an Indian subsidiary?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "The break-even point is typically 25 to 30 full-time employees. Below that, EOR is more cost-effective than maintaining an India entity with finance and HR overhead. Above 25 to 30, the per-employee EOR fee crosses entity-overhead break-even. Other migration triggers: invoicing Indian customers in INR, raising Series A/B with investors requiring local entity, opening a physical office, long-term commitment of 5+ years. Patron handles entity setup and seamless EOR-to-subsidiary transfer when ready."
              }
            }
          ]
        },
        {
          "@type": "Service",
          "@id": "https://www.patronaccounting.com/eor-india-for-uk-companies#service",
          "name": "Employer of Record (EOR) India for UK Companies",
          "description": "Patron Accounting LLP provides end-to-end Employer of Record services for UK Limited Companies, PLCs, and LLPs hiring full-time Indian talent without an Indian subsidiary. Coverage includes Indian employment contracts under four Labour Codes 2019/2020, INR payroll, monthly TDS Section 192 IT Act, EPF Section 6, ESI Section 38, Permanent Establishment firewall under Article 5 of the UK-India DTAA (1993 + 2013 Protocol + BEPS MLI), post-Brexit UK GDPR Article 46 (UK IDTA / UK Addendum to EU SCCs) plus DPDP Act 2023 Section 16 dual compliance, UK-India FTA 2025 awareness, and FEMA-compliant inward GBP remittance via Form A2.",
          "serviceType": "EOR India - UK Companies (Post-Brexit, IR35-Aware, UK-India FTA-Aligned)",
          "provider": { "@id": "https://www.patronaccounting.com/#organization" },
          "areaServed": [
            { "@type": "Country", "name": "India", "sameAs": "https://en.wikipedia.org/wiki/India" },
            { "@type": "Country", "name": "United Kingdom", "sameAs": "https://en.wikipedia.org/wiki/United_Kingdom" }
          ],
          "about": [
            { "@type": "Thing", "name": "Employer of Record", "sameAs": "https://en.wikipedia.org/wiki/Employer_of_record" },
            { "@type": "Thing", "name": "United Kingdom General Data Protection Regulation", "sameAs": "https://en.wikipedia.org/wiki/General_Data_Protection_Regulation#United_Kingdom" },
            { "@type": "Thing", "name": "Permanent establishment", "sameAs": "https://en.wikipedia.org/wiki/Permanent_establishment" },
            { "@type": "Thing", "name": "IR35", "sameAs": "https://en.wikipedia.org/wiki/IR35" }
          ],
          "offers": {
            "@type": "Offer",
            "priceCurrency": "GBP",
            "price": "159",
            "priceSpecification": {
              "@type": "UnitPriceSpecification",
              "price": "159",
              "priceCurrency": "GBP",
              "unitText": "per employee per month (Growth tier 5 to 14 employees; Starter GBP 199, Scale GBP 139)"
            }
          },
          "mainEntityOfPage": {
            "@type": "WebPage",
            "@id": "https://www.patronaccounting.com/eor-india-for-uk-companies",
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
                        Employer of Record (EOR) India for UK Companies
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
                            <p class="mb-0 text-dark benefit-paragraph"><span>Documents:</span> Master Services Agreement, Indian employment contract, IP assignment, NDA, UK GDPR + DPDP data processing addendum</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Fees:</span> Starting GBP 159 per employee per month. Volume tiers from 5+ headcount</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Audience:</span> UK Ltd / PLC hiring 1 to 30 Indian engineers, customer success, finance, ops</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Timeline:</span> 5 to 10 working days from offer to onboarding. UK-time onboarding calls scheduled in IST evenings</p>
                        </div>
                    </div>

                    <p class="mb-4 fw-bold" style="color: var(--blue); font-size: 15px;">10,000+ Businesses Served | 4.9 Google Rating | 30+ UK-headquartered engagements | Post-Brexit UK GDPR aware</p>

                    <div class="hero-cta">
                        <a href="tel:+919459456700" class="btn-video text-decoration-none">
                            <span class="play-circle"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="width:14px;height:14px;color:#fff"><path d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/></svg></span>
                            Call +91 945 945 6700
                        </a>
                        <a href="mailto:info@patronaccounting.com" class="btn-sample text-decoration-none">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="width:18px;height:18px;"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,12 2,6"/></svg>
                            Email Us
                        </a>
                        <a href="https://wa.me/919459456700?text=Hi%2C%20we%27re%20a%20UK%20company%20looking%20to%20hire%20Indian%20talent%20via%20EOR.%20Please%20share%20a%20discovery%20call%20slot%20in%20UK-friendly%20hours." target="_blank" class="btn-sample text-decoration-none">
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
                                            'service'  => 'EOR India for UK Companies',
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
    'ctaText'    => 'Trusted by 30+ UK-headquartered companies - early-stage Series A SaaS firms, mid-market AI / data infrastructure companies, AIM-listed enterprises - for Article 5 UK-India DTAA PE-firewall, dual post-Brexit UK GDPR (UK IDTA / Addendum) + DPDP Act 2023 compliance, UK-India FTA 2025 tracking, and GBP-denominated EOR India engagements.',
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
            <a href="#what-section" class="toc-btn">What Is EOR India for UK</a>
            <a href="#who-section" class="toc-btn">Applicability</a>
            <a href="#services-section" class="toc-btn">EOR India Services</a>
            <a href="#procedure-section" class="toc-btn">Onboarding Procedure</a>
            <a href="#documents-section" class="toc-btn">Documents Checklist</a>
            <a href="#challenges-section" class="toc-btn">Challenges and Solutions</a>
            <a href="#fees-section" class="toc-btn">Fees and Pricing in GBP</a>
            <a href="#timeline-section" class="toc-btn">Time Taken</a>
            <a href="#benefits-section" class="toc-btn">Why CA-Led EOR</a>
            <a href="#comparison-section" class="toc-btn">Patron vs Generic EOR vs Entity</a>
            <a href="#faq-section" class="toc-btn">FAQs</a>
        </div>
        <button class="toc-arrow right" id="tocRight">&#10095;</button>
    </div>
</div>

<!-- SECTION 2: OVERVIEW / INTRO + TL;DR -->
<section class="content-section" id="overview-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">EOR India for UK Companies: Post-Brexit + UK-India FTA 2025 + IR35-Aware Framework</h2>
            <div class="content-text">
                <div class="highlight-box" style="margin-bottom:20px;">
                    <p><strong>&#128204; TL;DR - EOR India for UK Companies Services at a Glance</strong></p>
                    <p>Patron's EOR India service lets UK companies hire full-time Indian employees in 5 to 10 days without an Indian entity. We become the legal employer, run INR payroll, file EPF / ESI / TDS, and shield the UK parent from Permanent Establishment exposure under Article 5 of the UK-India DTAA. Post-Brexit UK GDPR plus India DPDP Act 2023 handled via dual-clause Data Processing Addendum. Service contracts processed via FEMA Form A2. Starting GBP 159 per employee per month.</p>
                </div>
                <p>UK companies have been hiring Indian engineers for over two decades, but the structures have not kept pace with how distributed teams work today. Setting up a wholly-owned Indian subsidiary takes 4 to 6 months and around GBP 12,000 to 24,000 in legal and registration costs. Misclassifying full-time staff as self-employed contractors creates Permanent Establishment risk under Article 5 of the UK-India DTAA - a parallel concern to the IR35 exposure UK Finance teams already manage onshore. Direct payroll on a UK PAYE basis is not legally available in India without an Indian entity.</p>
                <p>Post-Brexit, UK companies operate under their own UK GDPR retained-law framework rather than the EU GDPR, which adds an extra layer to data flows when hiring Indian employees - particularly under the new India DPDP Act 2023 with its 'negative list' Section 16 regime. The UK-India Free Trade Agreement signed in 2025 added a Double Contributions Convention preventing duplicate social security contributions for UK employees seconded to India. Patron Accounting brings CA-led depth - the four Labour Codes, EPF / ESI / Professional Tax, monthly TDS under Section 192, UK-India DTAA navigation including 2013 Protocol and MLI modifications, and dual UK GDPR + India DPDP compliance.</p>
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
                <h2 class="section-title">What Is EOR India for UK Companies?</h2>
                <div class="content-text what-is-definition">
                    
                    <p>EOR India for UK Companies is a third-party employment structure where Patron Accounting acts as the legal employer in India for the UK client's hires. Patron issues the Indian employment contract, runs INR payroll, deposits EPF and ESI contributions, withholds TDS under Section 192, files Form 24Q quarterly, manages statutory leave, gratuity provisioning, and exit compliance, and reports periodically to the UK client.</p>
<p>The UK client retains full functional control over the employee's day-to-day work, deliverables, performance management, and intellectual property under a Master Services Agreement that includes IP assignment to the UK parent and dual UK GDPR plus India DPDP Act 2023 data processing terms.</p>
<p>This structure is widely used by UK Series A through Series D startups, mid-market SaaS companies, AIM-listed enterprises, and FTSE-listed firms piloting India hiring before incorporating a subsidiary. The break-even point against running an Indian Pvt Ltd directly is typically 25 to 30 full-time employees. Post-Brexit, UK companies have additional flexibility on data flows compared with EU peers (UK GDPR is administered by the ICO, separate from the EDPB), and the UK-India FTA signed in 2025 has further streamlined the commercial framework.</p>
<h3 style="color:var(--blue);margin-top:24px;">Quick-Reference Summary Table</h3>
<div class="table-responsive-wrapper">
<table>
  <thead><tr><th>Parameter</th><th>Detail</th></tr></thead>
  <tbody>
    <tr><td>Governing framework</td><td>Indian Companies Act 2013, Income-tax Act 1961, four Labour Codes 2019/2020, EPF/ESI Acts, FEMA 1999, UK-India DTAA 1993 (2013 Protocol + MLI), UK GDPR, DPDP Act 2023, UK-India FTA 2025</td></tr>
    <tr><td>Audience</td><td>UK Ltd, PLC, LLP hiring 1 to 30 Indian engineers, customer success, finance, ops</td></tr>
    <tr><td>Onboarding timeline</td><td>5 to 10 working days from signed offer to first day of work</td></tr>
    <tr><td>Pricing</td><td>Starting GBP 159 per employee per month (Growth tier 5+ headcount)</td></tr>
    <tr><td>PE risk</td><td>Mitigated via Article 5 UK-India DTAA - Patron is principal employer; UK client has no fixed place of business in India</td></tr>
    <tr><td>Data protection</td><td>UK GDPR Article 46 (UK IDTA / Addendum) + DPDP Act 2023 Sec 16 dual clause Data Processing Addendum</td></tr>
    <tr><td>Inward remittance</td><td>FEMA Form A2 + RBI purpose code; FIRC issued by AD-Cat-I bank; processed in GBP via SWIFT</td></tr>
  </tbody>
</table>
</div>

                </div>
                <div class="highlight-box" style="margin-top:20px;">
                    <p><strong>Key Terms for EOR India for UK Companies:</strong></p>
                    <ul>
  <li><strong>Employer of Record (EOR):</strong> A third-party Indian entity (Patron Accounting LLP) that becomes the legal employer for the UK client's Indian hires. Patron handles all Indian employment-law obligations; the UK client manages the work itself.</li>
  <li><strong>Permanent Establishment (PE) under Article 5 UK-India DTAA:</strong> Treaty signed 25 January 1993, modified by the 2013 Protocol and BEPS MLI. PE is a fixed place of business through which an enterprise of one state carries on business in the other. Building sites, construction, or supervisory activities trigger a PE if continuing more than 6 months. Article 5(4) covers dependent agents who habitually exercise authority to negotiate or conclude contracts.</li>
  <li><strong>Article 16 (Dependent Personal Services):</strong> Salaries, wages, and similar remuneration are taxable in the state where the employment is exercised. An Indian-resident employee of Patron-as-EOR working in India is taxed in India under Section 192 of the Income-tax Act 1961. Article 16 prevents double taxation with the UK.</li>
  <li><strong>UK GDPR + DPDP Act 2023 dual compliance:</strong> Post-Brexit, UK organisations operate under UK GDPR (retained EU law administered by the ICO). Article 46 transfers to India use the UK International Data Transfer Agreement (IDTA) or UK Addendum to EU SCCs. India's DPDP Act 2023 Section 16 + Rule 15 (DPDP Rules 2025) follows a 'negative list' approach - transfers permitted unless Central Government restricts.</li>
  <li><strong>Post-Brexit framing:</strong> Since 1 January 2021, the UK has its own retained-law GDPR (UK GDPR) administered by the Information Commissioner's Office (ICO), separate from the EU framework. UK adequacy decisions and SCC formats differ from EU equivalents.</li>
  <li><strong>UK-India FTA 2025 + Double Contributions Convention:</strong> The UK-India Free Trade Agreement signed in 2025 includes a Double Contributions Convention preventing duplicate social security contributions for UK employees seconded to India - relevant when EOR clients later move UK staff to Indian subsidiaries.</li>
  <li><strong>IR35 mental model parallel:</strong> Where IR35 protects HMRC by reclassifying disguised employment for UK tax purposes, the Indian equivalent protects EPFO, ESIC, and CBDT. Factual tests are similar (fixed hours, client equipment, single-client dependency), but Indian reclassification triggers backdated EPF, ESI, gratuity, leave encashment, TDS for 3-7 years plus PE exposure.</li>
  <li><strong>FEMA Form A2 + RBI Purpose Codes:</strong> Inward GBP remittance from UK client uses Form A2 with RBI purpose code (P0802 for software/IT services or P1006 for business services). FIRC issued by AD-Cat-I bank for each receipt.</li>
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
                            <text x="100" y="170" font-size="10" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial, sans-serif">EOR India for UK Companies</text>
                        </svg>
                    </div>
                    <div class="illustration-badge">
                        <span>Post-Brexit UK GDPR + UK-India FTA 2025</span>
                        <strong>IR35-Style Misclassification Awareness</strong>
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
            <h2 class="section-title">Applicability - Who Should Use Patron's EOR</h2>
            <div class="content-text">
                
                <p>Patron's EOR India service is built specifically for UK-headquartered companies. We onboard UK Limited Companies (Ltd), Public Limited Companies (PLC), and LLPs - typical client headcounts in India range from 1 to 30 employees.</p>

<h3 style="color:var(--blue);margin-top:24px;">When EOR Is the Right Structure</h3>
<ul>
  <li>Hiring 1 to 25 Indian full-time employees (above 25, evaluate entity setup).</li>
  <li>Pre-Series-B startup testing India hiring before committing to subsidiary.</li>
  <li>Mid-market SaaS or AI company building distributed engineering or customer success teams.</li>
  <li>AIM-listed or FTSE-listed enterprise piloting India presence ahead of formal market entry.</li>
  <li>UK client wants speed (5 to 10 days onboarding versus 4 to 6 months for entity setup).</li>
  <li>UK client wants compliance liability transferred to specialist - PE risk firewall, labour code compliance, UK GDPR + DPDP dual compliance.</li>
</ul>

<h3 style="color:var(--blue);margin-top:24px;">When Entity Setup Makes More Sense</h3>
<ul>
  <li>Headcount above 25 to 30 - per-employee EOR fee crosses entity-overhead break-even.</li>
  <li>Need to invoice Indian customers in INR - EOR cannot do client-facing invoicing.</li>
  <li>Raising Series A / B in India - investors require local entity.</li>
  <li>Opening a physical office or warehouse - requires entity.</li>
  <li>Long-term commitment of 5+ years - entity is more cost-effective at scale.</li>
</ul>

<h3 style="color:var(--blue);margin-top:24px;">Misclassification Trap to Avoid</h3>
<p>UK Finance teams familiar with IR35 will recognise the parallel - engaging Indian full-time staff as self-employed consultants when they work fixed hours, report to UK managers, use UK-issued equipment, and have no other clients creates a high reclassification risk. Indian labour authorities and the Income-tax Department can reclassify them as employees, triggering backdated EPF, ESI, gratuity, leave encashment, and TDS liabilities going back 3 to 7 years - plus PE exposure for the UK parent. Where IR35 protects HMRC, the equivalent Indian framework protects EPFO, ESIC, and the CBDT. EOR is the compliant alternative on both sides.</p>

            </div>
            </div>
        </div>
    </div>
</section>

<!-- SECTION 5: OUR SERVICES -->
<section class="content-section" id="services-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Patron Accounting EOR India Services</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Service</th><th>What We Do</th></tr></thead>
                    <tbody>
                        <tr><td>Indian Employment Contract Drafting</td><td>Compliant employment contract under the four Labour Codes (Code on Wages 2019, Code on Social Security 2020, Industrial Relations Code 2020, OSH Code 2020) with state-specific Shops and Establishments Act compliance. Probation up to 6 months, notice 30-90 days, IP assignment to UK parent, confidentiality, non-solicit (post-employment 6-12 months), garden leave clause, dual UK GDPR + India DPDP terms.</td></tr>
                        <tr><td>Onboarding (PAN, EPF, ESI, Bank, Devices)</td><td>PAN verification (mandatory for TDS), EPF Universal Account Number generation for basic wage up to Rs 15,000/mo, ESI for gross wage up to Rs 21,000/mo, bank setup for INR salary credit, device provisioning support (laptop, accessories ordered by Patron, billed at cost). 5 to 10 working days from signed offer.</td></tr>
                        <tr><td>INR Payroll + Monthly TDS Section 192</td><td>Monthly INR payroll based on UK-client-set CTC. Salary slips on Patron portal. TDS under Section 192 calculated on slab rates (old or new regime per Form 10-IEA), deposited via Challan ITNS 281 by 7th of following month, Form 24Q filed quarterly, Form 16 issued annually.</td></tr>
                        <tr><td>EPF, ESI, Professional Tax, Labour Welfare Fund</td><td>EPF 12 percent + 12 percent on basic up to Rs 15,000/mo (mandatory). ESI 0.75 + 3.25 percent on gross up to Rs 21,000/mo. PT state-specific (Maharashtra Rs 200/mo, Karnataka Rs 200/mo, Delhi nil). LWF state-specific. All filings electronic on respective state portals.</td></tr>
                        <tr><td>UK GDPR + DPDP Act 2023 Dual Compliance</td><td>Dual-clause Data Processing Addendum. UK side covers UK GDPR Article 46 transfer mechanism using UK International Data Transfer Agreement (IDTA) or UK Addendum to EU SCCs. India side covers DPDP Act 2023 Section 16 negative list and Rule 15 of DPDP Rules 2025. Six-monthly cadence updates per ICO guidance and Indian DPDP Board notifications. Significant Data Fiduciary obligations tracked separately.</td></tr>
                        <tr><td>Article 5 UK-India DTAA PE Firewall + Banking</td><td>MSA structured to keep UK client at arm's length. Patron is principal employer; UK client receives services from Patron. Article 5 tested - no fixed place of business, no Article 5(4) dependent agent with binding-contract authority, no construction-site PE (no 6-month threshold triggered). 2013 Protocol and BEPS MLI modifications factored. Inward GBP remittance via AD-Cat-I bank with Form A2, RBI purpose code P0802/P1006, FIRC.</td></tr>

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
            <h2 class="section-title">EOR India Onboarding Procedure (6 Sequential Steps)</h2>
            <p class="section-subtitle" style="text-align:left;max-width:100%;">End-to-end onboarding from UK client discovery call through monthly run cycle and exit handling. Every step references the relevant Indian statute (four Labour Codes 2019/2020, EPF Act 1952, ESI Act 1948, Income-tax Act 1961 Section 192, FEMA 1999) and UK regulation (UK GDPR Article 46, UK Data Protection Act 2018, UK-India DTAA Article 5/16/24). UK-friendly time-zone scheduling built into every touchpoint.</p>
        </header>
        <div class="steps-container">
            <div class="step-card">
    <div class="step-content">
        <span class="step-badge">Step 1</span>
        <h3 class="step-title">Discovery Call (UK-friendly hours)</h3>
        <p class="step-description">UK client describes hire profile (role, CTC, location, start date). Patron flags state-specific compliance considerations (Maharashtra PT vs Karnataka, Delhi NCR Shops Act vs Haryana). Time-zone overlap window confirmed - Patron's onboarding team works during IST evening to align with UK working hours (1:30 to 5:30 PM GMT typically aligns with 7 to 11 PM IST).</p>
        <div class="step-highlights">
            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>UK DTAA flag</span>
            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>State PT check</span>
            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>GMT slot</span>
        </div>
    </div>
    <div class="step-visual">
        <div class="step-illustration">
            <div class="illustration-icon">
                <svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="10" y="15" width="100" height="70" rx="8" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><circle cx="35" cy="40" r="10" fill="#FEF4EE" stroke="#E8712C" stroke-width="1.5"/><text x="35" y="44" font-size="6" font-weight="700" fill="#E8712C" text-anchor="middle" font-family="Arial">LON</text><circle cx="60" cy="40" r="10" fill="#FEF4EE" stroke="#E8712C" stroke-width="1.5"/><text x="60" y="44" font-size="6" font-weight="700" fill="#E8712C" text-anchor="middle" font-family="Arial">MAN</text><circle cx="85" cy="40" r="10" fill="#FEF4EE" stroke="#E8712C" stroke-width="1.5"/><text x="85" y="44" font-size="6" font-weight="700" fill="#E8712C" text-anchor="middle" font-family="Arial">EDI</text><line x1="20" y1="60" x2="100" y2="60" stroke="#14365F" stroke-width="1" opacity="0.3"/><line x1="20" y1="72" x2="92" y2="72" stroke="#14365F" stroke-width="1" opacity="0.3"/></svg>
            </div>
            <span class="illustration-label">Scope Mapped</span>
            <span class="step-number-large">01</span>
        </div>
    </div>
</div>

<div class="step-card">
    <div class="step-content">
        <span class="step-badge">Step 2</span>
        <h3 class="step-title">MSA + DPA Signature</h3>
        <p class="step-description">MSA signed between UK client and Patron Accounting LLP. Covers scope, fees in GBP, IP assignment, dual UK GDPR + DPDP DPA, Article 5 UK-India DTAA PE-firewall clause, indemnity caps, term/termination, dispute resolution. Standard fee GBP 159/employee/month for 5-14 employees.</p>
        <div class="step-highlights">
            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>GBP fees</span>
            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Dual DPA</span>
            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Article 5 firewall</span>
        </div>
    </div>
    <div class="step-visual">
        <div class="step-illustration">
            <div class="illustration-icon">
                <svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="20" y="5" width="80" height="90" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><line x1="30" y1="20" x2="90" y2="20" stroke="#F5A623" stroke-width="3" stroke-linecap="round"/><line x1="30" y1="35" x2="80" y2="35" stroke="#14365F" stroke-width="2" opacity="0.3"/><line x1="30" y1="48" x2="85" y2="48" stroke="#14365F" stroke-width="2" opacity="0.3"/><line x1="30" y1="61" x2="75" y2="61" stroke="#14365F" stroke-width="2" opacity="0.3"/><line x1="30" y1="74" x2="80" y2="74" stroke="#14365F" stroke-width="2" opacity="0.3"/></svg>
            </div>
            <span class="illustration-label">MSA Signed</span>
            <span class="step-number-large">02</span>
        </div>
    </div>
</div>

<div class="step-card">
    <div class="step-content">
        <span class="step-badge">Step 3</span>
        <h3 class="step-title">Offer + KYC + Pre-Onboarding</h3>
        <p class="step-description">UK client makes offer using template Patron provides (state-specific clauses, India-compliant probation/notice). Once accepted, candidate introduced to Patron onboarding team. PAN, Aadhaar, bank proof, prior employer relieving letter, education certs collected via Patron portal. BGV optional.</p>
        <div class="step-highlights">
            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>State template</span>
            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>KYC docs</span>
            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Aadhaar e-Sign</span>
        </div>
    </div>
    <div class="step-visual">
        <div class="step-illustration">
            <div class="illustration-icon">
                <svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="15" y="15" width="90" height="70" rx="6" fill="#FEF4EE" stroke="#E8712C" stroke-width="1.5"/><text x="60" y="32" font-size="10" font-weight="700" fill="#E8712C" text-anchor="middle" font-family="Arial">KYC</text><line x1="22" y1="42" x2="98" y2="42" stroke="#14365F" stroke-width="1" opacity="0.3"/><line x1="22" y1="52" x2="92" y2="52" stroke="#14365F" stroke-width="1" opacity="0.3"/><line x1="22" y1="62" x2="85" y2="62" stroke="#14365F" stroke-width="1" opacity="0.3"/><circle cx="92" cy="78" r="8" fill="#25D366"/><path d="M88 78 L91 81 L96 75" stroke="#fff" stroke-width="2" stroke-linecap="round" fill="none"/></svg>
            </div>
            <span class="illustration-label">KYC Done</span>
            <span class="step-number-large">03</span>
        </div>
    </div>
</div>

<div class="step-card">
    <div class="step-content">
        <span class="step-badge">Step 4</span>
        <h3 class="step-title">Statutory Registrations + Day 1</h3>
        <p class="step-description">UAN generated for EPF if applicable, ESI registration if gross up to Rs 21,000, PT enrolment for state of work, Form 11 PF declaration and ESI Form 1 completed. Day 1 onboarding call in UK-friendly window (typically 9-11 AM GMT = 2:30-4:30 PM IST). Employee added to client's Slack/Teams/GitHub.</p>
        <div class="step-highlights">
            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>UAN/ESI/PT</span>
            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Day 1 IST 2:30PM</span>
            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Tools added</span>
        </div>
    </div>
    <div class="step-visual">
        <div class="step-illustration">
            <div class="illustration-icon">
                <svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="15" y="20" width="40" height="55" rx="4" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><text x="35" y="42" font-size="8" font-weight="700" fill="#14365F" text-anchor="middle" font-family="Arial">UAN</text><rect x="65" y="20" width="40" height="55" rx="4" fill="#FEF4EE" stroke="#E8712C" stroke-width="1.5"/><text x="85" y="42" font-size="7" font-weight="700" fill="#E8712C" text-anchor="middle" font-family="Arial">Day 1</text><line x1="20" y1="55" x2="50" y2="55" stroke="#14365F" stroke-width="1.5"/><line x1="70" y1="55" x2="100" y2="55" stroke="#E8712C" stroke-width="1.5"/></svg>
            </div>
            <span class="illustration-label">Live Day 1</span>
            <span class="step-number-large">04</span>
        </div>
    </div>
</div>

<div class="step-card">
    <div class="step-content">
        <span class="step-badge">Step 5</span>
        <h3 class="step-title">Monthly Run + GBP Invoice</h3>
        <p class="step-description">By 5th of each month, UK client confirms salary adjustments, bonuses, expenses. By 10th, Patron raises GBP invoice covering employee CTC + statutory contributions + EOR fee + GST (if applicable). By 25th, payroll processed and TDS / EPF / ESI filed on schedule. FIRC referenced.</p>
        <div class="step-highlights">
            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>GBP invoice 10th</span>
            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Payroll 25th</span>
            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>TDS 7th / PF 15th</span>
        </div>
    </div>
    <div class="step-visual">
        <div class="step-illustration">
            <div class="illustration-icon">
                <svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="15" y="15" width="90" height="70" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><circle cx="35" cy="35" r="10" fill="#FEF4EE" stroke="#E8712C" stroke-width="1.5"/><text x="35" y="39" font-size="6" font-weight="700" fill="#E8712C" text-anchor="middle" font-family="Arial">GBP</text><circle cx="60" cy="35" r="10" fill="#FEF4EE" stroke="#E8712C" stroke-width="1.5"/><text x="60" y="39" font-size="7" font-weight="700" fill="#E8712C" text-anchor="middle" font-family="Arial">TDS</text><circle cx="85" cy="35" r="10" fill="#FEF4EE" stroke="#E8712C" stroke-width="1.5"/><text x="85" y="39" font-size="6" font-weight="700" fill="#E8712C" text-anchor="middle" font-family="Arial">FIRC</text><line x1="22" y1="58" x2="98" y2="58" stroke="#14365F" stroke-width="1" opacity="0.3"/><line x1="22" y1="68" x2="92" y2="68" stroke="#14365F" stroke-width="1" opacity="0.3"/><line x1="22" y1="78" x2="85" y2="78" stroke="#14365F" stroke-width="1" opacity="0.3"/></svg>
            </div>
            <span class="illustration-label">Steady State</span>
            <span class="step-number-large">05</span>
        </div>
    </div>
</div>

<div class="step-card">
    <div class="step-content">
        <span class="step-badge">Step 6</span>
        <h3 class="step-title">Six-Monthly Updates + Exit Handling</h3>
        <p class="step-description">Six-monthly UK GDPR + DPDP regulatory update aligned with ICO and DPDP Board cycles. UK-India FTA 2025 implementation tracker. On exit, full and final settlement within 30-45 days: pro-rata salary, leave encashment, gratuity, EPF settlement, IP-return enforcement.</p>
        <div class="step-highlights">
            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>6-mo updates</span>
            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>FTA tracker</span>
            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>F&F 30-45d</span>
        </div>
    </div>
    <div class="step-visual">
        <div class="step-illustration">
            <div class="illustration-icon">
                <svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><circle cx="60" cy="50" r="32" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><circle cx="60" cy="50" r="22" fill="none" stroke="#E8712C" stroke-width="1.5" stroke-dasharray="3 2"/><line x1="60" y1="40" x2="60" y2="50" stroke="#14365F" stroke-width="2" stroke-linecap="round"/><line x1="60" y1="50" x2="70" y2="56" stroke="#E8712C" stroke-width="2" stroke-linecap="round"/><circle cx="60" cy="50" r="2" fill="#14365F"/></svg>
            </div>
            <span class="illustration-label">Run + Exit</span>
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
            <h2 class="section-title">Documents Checklist</h2>
            <div class="content-text">
                
                <h3 style="color:var(--blue);margin-top:8px;">From UK Client (One-Time)</h3>
<ul>
  <li>Certificate of incorporation of UK entity (Companies House).</li>
  <li>UTR (Unique Taxpayer Reference) of UK entity.</li>
  <li>Authorised signatory designation for MSA.</li>
  <li>Beneficial ownership disclosure (PSC register reference).</li>
  <li>Standard employment offer template (Patron will adapt to India).</li>
  <li>ICO data protection registration reference (if applicable).</li>
</ul>
<h3 style="color:var(--blue);margin-top:24px;">Per Indian Employee (Onboarding)</h3>
<ul>
  <li>PAN card (mandatory for TDS).</li>
  <li>Aadhaar card (for e-Sign and EPF UAN).</li>
  <li>Bank account proof (cancelled cheque or passbook).</li>
  <li>Education certificates (highest qualification).</li>
  <li>Previous employer relieving letter and salary slip (for tax-regime continuity).</li>
  <li>Form 11 declaration (prior PF membership).</li>
  <li>Address proof (rental agreement / utility bill).</li>
  <li>Two passport-size photographs (for ESI card).</li>
</ul>
<h3 style="color:var(--blue);margin-top:24px;">Data Protection Event</h3>
<ul>
  <li>Updated Record of Processing Activities (RoPA) entry.</li>
  <li>Data Processing Addendum amendment (UK + India dual clause).</li>
  <li>Sub-processor list update with locations.</li>
  <li>ICO notification reference if breach above 72-hour threshold.</li>
</ul>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 9: CHALLENGES -->
<section class="content-section" id="challenges-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Five Common Challenges and Patron's Solutions</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Challenge</th><th>Impact</th><th>How Patron Accounting Solves It</th></tr></thead>
                    <tbody>
                        <tr><td>Permanent Establishment Creep Under Article 5 UK-India DTAA</td><td>If the UK parent inadvertently exercises 'concluding-contract authority' through Indian employees - giving them signing power on customer agreements or letting them negotiate pricing - those Indian employees can be characterised as a 'dependent agent PE' under Article 5(4) of the UK-India DTAA. Indian Revenue Authorities can attribute a portion of UK parent global profit to India.</td><td>At MSA signing, PE-firewall memo defining boundaries (what Indian employees may/may not do). 2013 Protocol and BEPS MLI modifications factored. Quarterly check-in calls flag any role expansion that could push into PE territory before it crystallises.</td></tr>
                        <tr><td>UK GDPR + India DPDP Act 2023 Dual-Compliance Complexity</td><td>Post-Brexit, UK companies operate under UK GDPR (retained EU law administered by ICO) and use UK International Data Transfer Agreement (IDTA) or UK Addendum to EU SCCs as their Article 46 mechanism. India's DPDP Act 2023 follows a different model - Section 16 'negative list' approach where transfers permitted unless restricted. Different breach-notification timelines (72 hours under UK GDPR, 'as soon as practicable' under DPDP), different lawful bases, different supervisory authorities (ICO vs Indian DPB).</td><td>Dual-clause Data Processing Addendum that explicitly satisfies both regimes, with six-monthly regulatory updates as the negative list and ICO guidance evolve. Significant Data Fiduciary obligations tracked separately if the UK client crosses DPB-notified thresholds.</td></tr>
                        <tr><td>IR35-Style Misclassification When Starting With Consultants</td><td>UK clients often start with self-employed consultants (parallel to IR35-outside engagements) and convert to EOR later. The consultant period itself can create reclassification exposure if the consultant worked fixed hours, used UK client equipment, reported to UK managers, and had no other clients - precisely the IR35 'inside' indicators that HMRC applies, only here the test is run by EPFO, ESIC, and the Income-tax Department. Indian labour authorities can reclassify back 3 to 7 years.</td><td>When migrating consultants to EOR, Patron drafts a clean break (final invoice, formal termination of consultancy, 30+ day gap if feasible) and starts fresh employment under EOR with a defensible position. UK Finance teams understand this quickly through the IR35 mental model.</td></tr>
                        <tr><td>GBP-to-INR FX Volatility and CTC Budgeting</td><td>UK Finance teams budget in GBP, but Indian employee CTC is denominated in INR. A GBP weakening against INR (as happened during 2022-2023) can blow out the GBP cost of the same INR salary by 10 to 15 percent, while INR appreciation creates the opposite issue. UK CFOs need predictable GBP budgeting against actual INR-denominated cost.</td><td>Monthly invoicing in GBP at hedging-friendly rate (15-day rolling average), quarterly review of FX exposure, option to lock GBP-INR rate for 12-month forward via UK client's bank (we coordinate with UK CFO's treasury team). Alternative: invoice in INR with UK client absorbing FX at remittance.</td></tr>
                        <tr><td>Termination Rigidity Differs From UK At-Will Employment</td><td>UK employment law has a probationary period model and statutory minimum notice (1 week per year of service, capped at 12 weeks plus contractual notice). Indian employment is more rigid - 30 to 90 day notice or pay in lieu, no 'effective immediately' terminations without paid notice and statutory dues, performance terminations require documented warning trail and formal Performance Improvement Plan (PIP).</td><td>Patron coordinates the documentation trail from first performance concern through PIP, formal warning, and final settlement - so terminations are defensible under Indian law and avoid Industrial Tribunal dispute risk that has caught many UK clients off guard.</td></tr>

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
            <h2 class="section-title">Fees and Pricing in GBP</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Fee Component</th><th>Amount</th></tr></thead>
                    <tbody>
                        <tr><td>Starter (1 to 4 employees)</td><td class="text-right">GBP 199 PEPM - Standard EOR (contract, payroll, EPF, ESI, PT, TDS, Form 16, dual UK GDPR + DPDP DPA)</td></tr>
                        <tr><td>Growth (5 to 14 employees)</td><td class="text-right">GBP 159 PEPM - Starter + dedicated onboarding manager + quarterly UK GDPR + DPDP regulatory update</td></tr>
                        <tr><td>Scale (15 to 30 employees)</td><td class="text-right">GBP 139 PEPM - Growth + quarterly PE-risk review + multi-state PT + LWF + sub-processor management</td></tr>
                        <tr><td>Enterprise (31+ employees)</td><td class="text-right">Custom - Migration plan to Indian Pvt Ltd subsidiary + Patron continues as outsourced payroll provider</td></tr>
                        <tr><td>Pass-Through: Employee CTC + Employer EPF (12% + admin) + ESI (3.25%) + Gratuity (4.81%)</td><td class="text-right">Billed at cost</td></tr>
                        <tr><td>Cost Benchmark: Generic EOR Platforms (Deel, Black Piano)</td><td class="text-right">GBP 250 to 550 per employee per month</td></tr>
                        <tr><td><strong>Patron Accounting Professional Fees (starting)</strong></td><td class="text-right"><strong>From GBP 159 per employee per month (Growth tier 5-14 employees)</strong></td></tr>

                    </tbody>
                </table>
                </div>
                <p style="margin-top:16px;font-size:13px;color:var(--text-muted);font-style:italic;">All fees and charges listed are indicative only and do not constitute a binding offer. Final amounts may vary depending on the volume of work and the complexity involved.</p>
                <p style="margin-top:16px;">Professional service charges for drafting, filing, and representation are separate from the statutory fees. The exact fee depends on the complexity of the case, disputed amount, and number of hearings required. Contact us for a detailed quote.</p>
                <p style="margin-top:16px;"><strong>Get a free EOR India for UK Companies consultation - <a href="tel:+919459456700">Call +91 945 945 6700</a> or <a href="https://wa.me/919459456700?text=Hi%2C%20please%20share%20GBP-priced%20EOR%20India%20proposal%20with%20PE-risk%20firewall%2C%20Article%205%20UK-India%20DTAA%20notes%2C%20and%20UK%20GDPR%2BDPDP%20DPA." target="_blank">WhatsApp us</a>. No-obligation assessment.</strong></p>
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
                        <tr><td>MSA signature to candidate offer</td><td>2 to 3 business days</td></tr>
                        <tr><td>Candidate acceptance to Day 1 of work</td><td>5 to 10 working days</td></tr>
                        <tr><td>First payroll cycle</td><td>30 days from Day 1</td></tr>
                        <tr><td>Monthly close (payslip + filings + GBP invoice to UK client)</td><td>By 25th of following month</td></tr>
                        <tr><td>Quarterly Form 24Q TDS return</td><td>31st of month following quarter end</td></tr>
                        <tr><td>Annual Form 16 issuance</td><td>By 15 June (for previous April-March fiscal)</td></tr>
                        <tr><td>Six-monthly UK GDPR + DPDP regulatory update note</td><td>Aligned with ICO and DPDP Board cycles</td></tr>
                        <tr><td>Employee exit full-and-final settlement</td><td>30 to 45 days from last working day</td></tr>

                    </tbody>
                </table>
                </div>
                <div class="highlight-box" style="margin-top:16px;">
                    
                    <p><strong>UK-friendly time-zone scheduling:</strong> India Standard Time is 5.5 hours ahead of GMT (4.5 hours ahead of BST during British Summer Time). UK 9-11 AM working hours align with 2:30-4:30 PM IST - prime overlap for Day 1 onboarding calls, weekly standups, and quarterly reviews. Patron's onboarding team also works IST evening (1:30 to 5:30 PM GMT = 7 to 11 PM IST) for late-UK-day catchups.</p>
<p style="margin-top:12px;"><strong>India compliance calendar:</strong> TDS deposit by 7th of next month, EPF and ESI by 15th of next month, professional tax monthly per state schedule, Form 24Q quarterly. Patron tracks all in one calendar with UK client visibility via monthly status report.</p>
<p style="margin-top:12px;"><strong>UK regulatory cadence:</strong> ICO guidance updates approximately quarterly, Indian DPDP Board notifications as issued, UK-India FTA 2025 implementation milestones tracked monthly. Patron's six-monthly update cycle captures all material changes.</p>

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
            <h2 class="section-title">Benefits of CA-Led EOR India for UK Companies</h2>
        </div>
        <div class="features-grid">
  <div class="feature-card">
    <div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 2L4 6v6c0 5.55 3.84 10.74 8 12 4.16-1.26 8-6.45 8-12V6l-8-4z"/><path d="M9 12l2 2 4-4"/></svg></div>
    <h3>Article 5 UK-India DTAA PE firewall</h3>
    <p>Article 5 tested at MSA level (1993 + 2013 Protocol + BEPS MLI), no fixed place of business, no Article 5(4) dependent agent PE, no construction-site PE. Quarterly check-ins.</p>
  </div>
  <div class="feature-card">
    <div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><polyline points="12 6 12 12 16 14"/></svg></div>
    <h3>Speed: 5 to 10 days vs 4 to 6 months</h3>
    <p>5 to 10 days from offer to Day 1 versus 4 to 6 months for entity setup. Critical for time-sensitive Series A/B startups and AIM-listed enterprises piloting India presence.</p>
  </div>
  <div class="feature-card">
    <div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><line x1="12" y1="1" x2="12" y2="23"/><path d="M17 5H9.5a3.5 3.5 0 000 7h5a3.5 3.5 0 010 7H6"/></svg></div>
    <h3>Cost: GBP 139-199 PEPM vs GBP 12-24K setup</h3>
    <p>GBP 139 to 199 per employee per month versus GBP 12,000 to 24,000 entity setup plus ongoing overhead. Break-even at 25-30 employees.</p>
  </div>
  <div class="feature-card">
    <div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M14 2H6a2 2 0 00-2 2v16a2 2 0 002 2h12a2 2 0 002-2V8z"/><path d="M14 2v6h6M16 13H8M16 17H8"/></svg></div>
    <h3>Post-Brexit UK GDPR + DPDP Act 2023 dual compliance</h3>
    <p>Dual-clause DPA with UK IDTA / UK Addendum to EU SCCs + DPDP Section 16 negative list + Rule 15. Six-monthly updates per ICO and DPDP Board.</p>
  </div>
  <div class="feature-card">
    <div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 16V8a2 2 0 00-1-1.73l-7-4a2 2 0 00-2 0l-7 4A2 2 0 003 8v8a2 2 0 001 1.73l7 4a2 2 0 002 0l7-4A2 2 0 0021 16z"/><line x1="3.27" y1="6.96" x2="12" y2="12.01"/><line x1="12" y1="22.08" x2="12" y2="12"/></svg></div>
    <h3>UK-India FTA 2025 + IR35 mental model</h3>
    <p>UK-India FTA 2025 advantages including Double Contributions Convention factored in. IR35-style mental model parallel for misclassification - UK Finance teams understand reclassification exposure quickly.</p>
  </div>
  <div class="feature-card">
    <div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="14 2 14 8 20 8"/><path d="M16 13H8M16 17H8M10 9H8"/><path d="M14 2H6a2 2 0 00-2 2v16a2 2 0 002 2h12a2 2 0 002-2V8z"/></svg></div>
    <h3>GBP pricing + UK-friendly hours + direct CA</h3>
    <p>Clear budgeting in GBP (no FX surprises). Patron's onboarding team works IST evening for UK overlap. Direct CA contact - not call-centre routing.</p>
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
                
                <p style="font-size:15px;color:var(--blue);font-weight:600;">10,000+ Businesses Served | 4.9 Google Rating | 50,000+ Documents | 30+ UK-headquartered EOR engagements | 15+ Years</p>
<h3 style="color:var(--blue);margin-top:24px;">Testimonials</h3>
<p>"Extremely great, knowledgeable person who deserves 5 stars for smooth and quick handling." - Nishikant Gurav, Google Review</p>
<p>"Took minimum time, really impressive acumen. And it's not expensive at all." - Rajib Dutta, Google Review</p>
<h3 style="color:var(--blue);margin-top:24px;">Outcome Proof - UK Series B Fintech</h3>
<p>One UK-headquartered Series B fintech saved an estimated GBP 38,000 in entity-setup and first-year overhead costs by hiring 7 Indian engineers through Patron's EOR over 10 months. Additionally avoided a six-figure UK GDPR Article 46 challenge during ICO audit when their previous third-country transfer mechanism was reviewed - Patron's dual UK IDTA + DPDP Section 16 DPA cleared the ICO query without escalation.</p>
<h3 style="color:var(--blue);margin-top:24px;">Trusted Across the UK</h3>
<p>Trusted by 30+ UK-headquartered companies running India teams - early-stage Series A SaaS firms, mid-market AI / data infrastructure companies, and AIM-listed enterprises piloting India presence. Plus 10,000+ Indian SMBs and enterprise clients including Hyundai, Asian Paints, and Bridgestone.</p>
<p style="margin-top:16px;font-size:14px;color:var(--text-muted);"><em>With offices in Pune, Mumbai, Delhi, and Gurugram, Patron Accounting serves businesses across India - both in-person and remotely. UK clients work with us entirely remotely with UK-time-zone-aware scheduling.</em></p>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 13: SELF-FILING vs PROFESSIONAL COMPARISON -->
<section class="content-section" id="comparison-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Patron EOR vs Generic EOR Platforms vs Entity Setup</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Criterion</th><th>Generic EOR Platform (Deel, Black Piano, etc)</th><th>Patron CA-Led EOR</th><th>India Entity Setup</th></tr></thead>
                    <tbody>
                        <tr><td>Onboarding speed</td><td>2 to 7 days</td><td><span class="badge-included">5 to 10 days</span></td><td>16 to 24 weeks</td></tr>
                        <tr><td>Per-employee fee</td><td>GBP 250 to 550 / month</td><td><span class="badge-included">GBP 139 to 199 / month</span></td><td>GBP 0 (after setup)</td></tr>
                        <tr><td>Setup cost</td><td>Zero</td><td><span class="badge-included">Zero</span></td><td>GBP 12,000 to 24,000</td></tr>
                        <tr><td>PE risk advisory</td><td>Generic boilerplate clause</td><td><span class="badge-included">Article 5 UK-India DTAA memo + 2013 Protocol + MLI + quarterly review</span></td><td>Inherent (you have a PE)</td></tr>
                        <tr><td>UK GDPR + DPDP DPA</td><td>Generic SCC</td><td><span class="badge-included">Dual-clause UK IDTA + DPDP Sec 16 DPA + 6-monthly update</span></td><td>In-house (you handle)</td></tr>
                        <tr><td>Post-Brexit framing</td><td>Often EU-GDPR template still applied</td><td><span class="badge-included">UK GDPR + UK ICO guidance current</span></td><td>In-house</td></tr>
                        <tr><td>Direct CA contact</td><td>Tier-1 / Tier-2 routing</td><td><span class="badge-included">Direct CA + onboarding manager</span></td><td>Internal team</td></tr>
                        <tr><td>India tax filing depth</td><td>Outsourced to local CA partner</td><td><span class="badge-included">In-house Patron CA team</span></td><td>Internal team</td></tr>
                        <tr><td>Currency</td><td>Mixed (USD/GBP)</td><td><span class="badge-included">GBP throughout</span></td><td>INR direct</td></tr>
                        <tr><td>Break-even versus entity</td><td>Crosses around 25 employees</td><td><span class="badge-included">Crosses around 25 to 30 employees</span></td><td>Best at 30+ employees</td></tr>
                        <tr><td>Migration to entity</td><td>Charge fee + complex transfer</td><td><span class="badge-included">Patron handles entity setup + seamless transfer</span></td><td>N/A</td></tr>

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
                
                <p>Patron's broader portfolio that UK EOR clients typically use as they scale:</p>
<ul>
  <li>For other jurisdiction-specific EOR pages, see <a href="/eor-india-for-us-companies">EOR India for US Companies</a>, <a href="/eor-india-for-singapore-companies">EOR India for Singapore Companies</a>, <a href="/eor-india-for-european-companies">EOR India for European Companies</a>, and <a href="/eor-india-for-australian-companies">EOR India for Australian Companies</a>.</li>
  <li>For vertical-specific EOR engagements: <a href="/eor-india-for-saas-companies">EOR India for SaaS Companies</a>, <a href="/eor-india-for-fintechs">EOR India for Fintech</a>, <a href="/eor-india-for-ai-companies">EOR India for AI Companies</a>, <a href="/eor-india-for-tech-startups">EOR India for Tech Startups</a>.</li>
  <li>For team-type EOR engagements: <a href="/eor-india-engineering-team">EOR India engineering team</a>, <a href="/eor-india-customer-support-team">EOR India customer support team</a>.</li>
  <li>For decision frameworks and vendor comparisons: <a href="/eor-india-vs-india-entity-setup">EOR vs Pvt Ltd Decision Framework</a>, <a href="/best-eor-providers-india-2026">Best EOR Providers India 2026</a>, <a href="/eor-india-vs-deel">Deel Alternative India</a>.</li>
  <li><a href="/payroll-services">Payroll Processing and Management Services</a> - End-to-end monthly INR payroll with TDS, PF, ESI, gratuity.</li>
  <li><a href="/private-limited-company-registration">Private Limited Company Registration</a> - Indian subsidiary incorporation under Companies Act 2013 via MCA SPICe+ when scaling past 25-30 employees.</li>
  <li><a href="/llp-incorporation">LLP Incorporation</a> - Limited Liability Partnership formation for UK parents preferring LLP structure.</li>
  <li><a href="/tds-return-filing-24q">TDS Return Filing 24Q</a> - Form 24Q quarterly TDS returns and Form 16 issuance under Section 192 IT Act.</li>
  <li><a href="/payroll-services-it-software-companies">Payroll Services for IT and Software Industry</a> - Specialised payroll for tech-sector compensation structures.</li>
  <li><a href="/itr-for-companies">ITR for Companies</a> - Annual income-tax return filing for Indian subsidiaries.</li>
  <li><a href="/tax-audit-under-section-44ab">Tax Audit under Section 44AB</a> - Statutory tax audit for Indian entities crossing turnover thresholds.</li>
</ul>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 15A: LEGAL FRAMEWORK -->
<section class="content-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Legal and Compliance Framework</h2>
            <div class="content-text">
                
                <h3 style="color:var(--blue);margin-top:8px;">UK-India DTAA - Key Articles</h3>
<div class="table-responsive-wrapper">
<table>
  <thead><tr><th>Article</th><th>Coverage</th><th>EOR Relevance</th></tr></thead>
  <tbody>
    <tr><td>Article 5 (Permanent Establishment)</td><td>PE = fixed place of business through which an enterprise of one state carries on business in the other. Building sites, construction, or supervisory activities trigger PE if continuing more than 6 months. Article 5(4) covers dependent agents who habitually exercise authority to negotiate or conclude contracts.</td><td>Core PE-firewall provision. Patron is principal employer; UK client has no fixed place of business in India, no agent with binding-contract authority, no construction-site PE.</td></tr>
    <tr><td>Article 7 (Business Profits)</td><td>Business profits of an enterprise of one state are taxable only in that state unless the enterprise carries on business through a PE in the other state.</td><td>Confirms no Indian taxation of UK parent if PE is properly avoided via Article 5 firewall.</td></tr>
    <tr><td>Article 16 (Dependent Personal Services)</td><td>Salaries, wages, and similar remuneration are taxable in the state where the employment is exercised.</td><td>Indian-resident EOR employees working in India are taxed in India under Section 192 IT Act 1961.</td></tr>
    <tr><td>Article 24 (Elimination of Double Taxation)</td><td>Foreign Tax Credit mechanism. Indian-resident employee with UK-source income claims FTC against UK tax already paid; UK-resident employee on India secondment claims FTC against Indian tax.</td><td>Prevents double taxation on cross-border employee scenarios.</td></tr>
  </tbody>
</table>
</div>
<p style="margin-top:16px;"><strong>Treaty timeline:</strong> Signed 25 January 1993, in force 25 October 1993, modified by 2013 Protocol (effective 27 December 2013) and BEPS MLI. <strong>UK-India FTA 2025:</strong> Signed 2025, includes a Double Contributions Convention preventing duplicate social security contributions for UK employees seconded to India - relevant when EOR clients later move UK staff to Indian subsidiaries. Does not change EOR mechanics for UK-resident employers hiring Indian-resident employees.</p>

<h3 style="color:var(--blue);margin-top:24px;">Regulatory Reference Table</h3>
<div class="table-responsive-wrapper">
<table>
  <thead><tr><th>Regulator</th><th>Statute / Framework</th><th>Key Form / Compliance</th></tr></thead>
  <tbody>
    <tr><td>MoLE (Indian Ministry of Labour and Employment)</td><td>Code on Wages 2019, Code on Social Security 2020, Industrial Relations Code 2020, OSH Code 2020</td><td>Wage register, attendance register, employment letter, state Shops and Establishments Act</td></tr>
    <tr><td>EPFO</td><td>EPF and MP Act 1952</td><td>UAN allotment, ECR filing, 12% + 12% contribution on basic up to Rs 15,000</td></tr>
    <tr><td>ESIC</td><td>ESI Act 1948</td><td>ESI registration, 3.25% + 0.75% on gross wage up to Rs 21,000</td></tr>
    <tr><td>State Labour Department</td><td>State Professional Tax Acts, LWF Acts</td><td>PT enrolment + LWF state-specific</td></tr>
    <tr><td>CBDT</td><td>Income-tax Act 1961, Section 192</td><td>Monthly TDS, Form 24Q quarterly, Form 16 annual</td></tr>
    <tr><td>RBI / AD-Cat-I bank</td><td>FEMA 1999 + RBI Master Direction</td><td>Form A2 inward remittance in GBP, FIRC, purpose code P0802 / P1006</td></tr>
    <tr><td>ICO (UK side)</td><td>UK GDPR + Data Protection Act 2018</td><td>Article 46 transfer mechanism (UK IDTA / Addendum to EU SCCs), breach notification 72 hours</td></tr>
    <tr><td>Indian Data Protection Board</td><td>Digital Personal Data Protection Act 2023 + DPDP Rules 2025</td><td>Section 16 negative list, Rule 15 cross-border transfer, breach 'as soon as practicable'</td></tr>
    <tr><td>MCA</td><td>Companies Act 2013</td><td>Patron Accounting LLP filings (LLP-11, LLP-8) for the EOR entity itself</td></tr>
  </tbody>
</table>
</div>
<p style="margin-top:16px;"><strong>Penalty snapshot:</strong> Misclassification of consultant as employee triggers backdated EPF, ESI, gratuity, leave encashment, TDS for 3 to 7 years. PE re-characterisation attributes UK parent global profit to India plus interest under Sec 234A/B/C plus penalty under Sec 270A (50% / 200%). Section 192 TDS default: interest at 1.5 percent per month under Sec 201(1A); penalty up to TDS amount under Sec 271C. UK GDPR Article 46 violation: ICO fines up to GBP 17.5 million or 4 percent of global turnover whichever is higher. DPDP Act violation: penalties up to Rs 250 crore.</p>
<p style="margin-top:16px;">Authoritative reference: Statutory text available at <a href="https://www.indiacode.nic.in/" target="_blank" rel="noopener">India Code (Ministry of Law and Justice)</a>. EPF compliance reference at <a href="https://www.epfindia.gov.in/" target="_blank" rel="noopener">EPFO</a>. Income tax filings at <a href="https://www.incometax.gov.in/" target="_blank" rel="noopener">Income Tax Department</a>.</p>

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
                    <p class="faq-expanded__lead">Real questions from UK Ltd / PLC / LLP companies (early-stage Series A SaaS, mid-market AI, AIM-listed enterprises) evaluating EOR India structures. Drawn from Google PAA and Patron client mandates.</p>
                    @include('partials.bigin-form', [
                        'variant'  => 'compact',
                        'service'  => 'EOR India for UK Companies',
                    ])
                </aside>
                <div class="faq-expanded__list">
                    <div class="faq-expanded__item" id="faq-1">
                        <h3 class="faq-expanded__q">Can a UK company hire employees in India without a local entity?</h3>
                        <div class="faq-expanded__a"><p>Yes. Through an Employer of Record like Patron Accounting LLP, the UK Ltd or PLC avoids setting up an Indian subsidiary. Patron becomes the legal employer in India, issues Indian employment contracts, runs INR payroll, files EPF, ESI, Professional Tax, and TDS under Section 192. The UK parent retains functional control over the work and IP via the Master Services Agreement. EOR is the compliant alternative to misclassifying full-time staff as self-employed consultants, which creates Permanent Establishment risk under Article 5 of the UK-India DTAA.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-2">
                        <h3 class="faq-expanded__q">Will using EOR in India create Permanent Establishment risk for the UK parent?</h3>
                        <div class="faq-expanded__a"><p>Properly structured EOR shields the UK parent from PE under Article 5 of the UK-India DTAA (1993 + 2013 Protocol + MLI). Patron is the principal Indian employer; the UK client has no fixed place of business in India. PE risk arises if Indian employees inadvertently exercise concluding-contract authority (Article 5(4) Dependent Agent PE) or if construction/supervisory activities continue beyond 6 months. Patron issues a PE-firewall memo at MSA signing with quarterly check-ins to flag scope expansion.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-3">
                        <h3 class="faq-expanded__q">How does the UK-India DTAA help with hiring Indian employees?</h3>
                        <div class="faq-expanded__a"><p>The UK-India DTAA was signed 25 January 1993, in force 25 October 1993, modified by the 2013 Protocol (effective 27 December 2013) and the BEPS MLI. Article 5 defines PE with a 6-month construction threshold. Article 7 allocates business profits. Article 16 (Dependent Personal Services) confirms Indian-resident EOR employees working in India are taxed in India under Section 192. Article 24 provides the Foreign Tax Credit mechanism preventing double taxation.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-4">
                        <h3 class="faq-expanded__q">How does UK GDPR interact with India DPDP Act 2023 for employee data?</h3>
                        <div class="faq-expanded__a"><p>Post-Brexit, UK organisations operate under UK GDPR (retained EU law administered by the ICO). Article 46 transfers to India use the UK International Data Transfer Agreement (IDTA) or UK Addendum to EU SCCs. India's DPDP Act 2023 Section 16 + Rule 15 (DPDP Rules 2025) follows a 'negative list' approach - transfers permitted unless Central Government restricts. Patron handles both via dual-clause Data Processing Addendum. Different breach timelines: 72 hours under UK GDPR versus 'as soon as practicable' under DPDP.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-5">
                        <h3 class="faq-expanded__q">Does the UK-India FTA affect EOR arrangements?</h3>
                        <div class="faq-expanded__a"><p>The UK-India Free Trade Agreement signed in 2025 includes a Double Contributions Convention preventing duplicate social security contributions for UK employees seconded to India. This is relevant when EOR clients later move UK-resident staff to Indian subsidiaries. The FTA does not change core EOR mechanics - Indian employees of Patron-as-EOR remain Indian-tax-resident, paid in INR, with Indian employer fulfilling Indian compliance. Patron tracks FTA implementation milestones quarterly.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-6">
                        <h3 class="faq-expanded__q">What is the cost of EOR in India for UK companies in GBP?</h3>
                        <div class="faq-expanded__a"><p>Patron's EOR pricing in GBP: Starter tier (1 to 4 employees) GBP 199 PEPM. Growth tier (5 to 14 employees) GBP 159. Scale tier (15 to 30 employees) GBP 139, including quarterly PE-risk review and multi-state PT/LWF management. Enterprise (31+) is custom with migration plan to Indian Pvt Ltd. Employee CTC, employer EPF, ESI, and gratuity provision billed at cost (pass-through). Generic EOR platforms typically charge GBP 250 to 550 per employee per month.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-7">
                        <h3 class="faq-expanded__q">How is IR35 misclassification different from Indian employment classification?</h3>
                        <div class="faq-expanded__a"><p>IR35 protects HMRC by reclassifying disguised employment for UK tax purposes. The Indian equivalent protects EPFO, ESIC, and CBDT. The factual tests are similar - fixed hours, client-issued equipment, single-client dependency, line-management reporting - but the consequences differ. Indian reclassification triggers backdated EPF, ESI, gratuity, leave encashment, and TDS for 3 to 7 years, plus PE exposure for the UK parent. EOR structure avoids both IR35-style and Indian-misclassification risk simultaneously.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-8">
                        <h3 class="faq-expanded__q">When should UK companies migrate from EOR to setting up an Indian subsidiary?</h3>
                        <div class="faq-expanded__a"><p>The break-even point is typically 25 to 30 full-time employees. Below that, EOR is more cost-effective than maintaining an India entity with finance and HR overhead. Above 25 to 30, the per-employee EOR fee crosses entity-overhead break-even. Other migration triggers: invoicing Indian customers in INR, raising Series A/B with investors requiring local entity, opening a physical office, long-term commitment of 5+ years. Patron handles entity setup and seamless EOR-to-subsidiary transfer when ready.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-9">
                        <h3 class="faq-expanded__q">UK company India employee kaise hire kare bina entity ke?</h3>
                        <div class="faq-expanded__a"><p>UK companies bina Indian subsidiary ke Indian employees hire kar sakti hain Employer of Record (EOR) ke through. Patron Accounting LLP legal employer ban jaata hai India mein - Indian employment contract issue karta hai, INR payroll chalata hai, EPF, ESI, Professional Tax, TDS file karta hai. UK parent kaam aur IP par functional control retain karta hai Master Services Agreement ke through. 5-10 din mein onboarding complete. GBP 159 per employee per month se starting. Dual UK GDPR + DPDP Act 2023 compliance. PE-risk firewall under Article 5 UK-India DTAA.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-10">
                        <h3 class="faq-expanded__q">How does the dual UK GDPR + DPDP DPA work post-Brexit?</h3>
                        <div class="faq-expanded__a"><p>Patron issues a dual-clause Data Processing Addendum that satisfies both regimes. UK side covers UK GDPR Article 46 transfer mechanism via UK International Data Transfer Agreement (IDTA) or UK Addendum to EU SCCs - the post-Brexit retained-law equivalents. India side covers DPDP Act 2023 Section 16 negative list and Rule 15 of DPDP Rules 2025. Six-monthly cadence updates per ICO guidance and Indian DPDP Board notifications. Significant Data Fiduciary obligations tracked separately if UK client crosses DPB-notified thresholds.</p></div>
                    </div>
                </div>
            </div>


            <!-- Quick Answers -->
            <div class="highlight-box" style="margin-top:32px;">
                <p><strong>Quick Answers</strong></p>
                <p><strong>Can UK companies hire Indian employees without an Indian entity?</strong> Yes - via Employer of Record. Patron is legal employer in India; UK parent retains functional control via MSA.</p>
<p><strong>What is the GBP price?</strong> GBP 199 PEPM (1-4), GBP 159 PEPM (5-14), GBP 139 PEPM (15-30), Enterprise custom (31+ with migration plan).</p>
<p><strong>Does EOR create PE risk for the UK parent?</strong> No - properly structured. Article 5 UK-India DTAA tested at MSA signing. 6-month construction threshold; Article 5(4) DAPE memo. Quarterly check-ins.</p>
<p><strong>How does post-Brexit UK GDPR + DPDP Act 2023 dual compliance work?</strong> Dual-clause DPA with UK IDTA / UK Addendum to EU SCCs + DPDP Section 16 negative list + Rule 15. Six-monthly updates.</p>
<p><strong>When should we migrate to a Pvt Ltd subsidiary?</strong> Break-even at 25-30 employees, or when invoicing Indian customers, raising Series A/B, opening physical office, or 5+ year commitment.</p>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 18: URGENCY CTA -->
<section class="content-section" style="background: var(--orange-lighter) !important; border-left: 4px solid var(--orange);">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">India Compliance Deadlines + UK Regulatory Updates Are Continuous</h2>
            <div class="content-text">
                
                <p>Indian statutory deadlines and UK regulatory cycles run in parallel for UK-EOR engagements. Patron's compliance calendar tracks both.</p>
<div class="table-responsive-wrapper">
<table>
  <thead><tr><th>Compliance</th><th>Deadline</th><th>Penalty / Authority</th></tr></thead>
  <tbody>
    <tr><td>TDS on Salary (Section 192 IT Act)</td><td>7th of next month</td><td>1.5 percent monthly interest under Section 201(1A) IT Act</td></tr>
    <tr><td>EPF (12 percent on basic up to Rs 15,000)</td><td>15th of next month</td><td>12 percent annual interest under Section 7Q EPF Act; damages 5-25 percent under Section 14B</td></tr>
    <tr><td>ESI (3.25 percent on gross up to Rs 21,000)</td><td>15th of next month</td><td>12 percent annual interest; damages up to 25 percent under Section 85B ESI Act</td></tr>
    <tr><td>Form 24Q (Quarterly TDS Return)</td><td>31 July, 31 Oct, 31 Jan, 31 May</td><td>Late fee Rs 200/day under Section 234E; up to Rs 1 lakh under Section 271H</td></tr>
    <tr><td>Form 16 issuance</td><td>15 June</td><td>Section 272A penalty for default</td></tr>
    <tr><td>UK GDPR Article 33 breach notification</td><td>72 hours</td><td>ICO fines up to GBP 17.5 million or 4 percent of global turnover</td></tr>
    <tr><td>Six-monthly UK GDPR + DPDP regulatory update</td><td>Aligned with ICO and DPDP Board cycles</td><td>ICO / Indian DPB</td></tr>
    <tr><td>UK-India FTA 2025 implementation tracking</td><td>Continuous from 2025 signing</td><td>UK Department for Business and Trade + Indian Commerce Ministry</td></tr>
  </tbody>
</table>
</div>
<p style="margin-top:16px;"><strong>Speak with a Patron CA today (UK-friendly hours):</strong> <a href="tel:+919459456700">Call +91 945 945 6700</a> | <a href="https://wa.me/919459456700?text=Hi%2C%20please%20share%20GBP-priced%20EOR%20India%20proposal%20with%20PE-risk%20firewall%2C%20Article%205%20UK-India%20DTAA%20notes%2C%20and%20UK%20GDPR%2BDPDP%20DPA." target="_blank">WhatsApp +91 945 945 6700</a> | <a href="mailto:contact@patronaccounting.com?subject=Enquiry%20for%20EOR%20India%20-%20UK%20Company&body=Hello%20Patron%20Accounting%20Team%2C%0A%0AWe%20are%20a%20UK-headquartered%20company%20looking%20to%20hire%20Indian%20talent%20via%20EOR.%20Please%20share%20a%20discovery%20call%20slot%20in%20UK-friendly%20hours%2C%20along%20with%20a%20GBP-priced%20proposal%2C%20PE-risk%20firewall%20notes%20under%20Article%205%20UK-India%20DTAA%2C%20and%20UK%20GDPR%2BDPDP%20Data%20Processing%20Addendum%20template.%0A%0AThank%20you.">Email contact@patronaccounting.com</a>. We respond within 4 business hours, India or UK time.</p>

            </div>
        </div>
    </div>
</section>

<!-- CONCLUSION + CTA BLOCK (Dark) -->
<section class="content-section" style="background: var(--blue) !important;">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title" style="color:#FFFFFF !important;">EOR India for UK Companies: Speed + Article 5 Firewall + Post-Brexit UK GDPR/DPDP Compliance + GBP Pricing</h2>
            <div class="content-text" style="text-align:left;">
                
                <p>UK companies hiring Indian talent operate in a structurally favourable but procedurally demanding environment. The UK-India DTAA (1993 + 2013 Protocol + BEPS MLI) gives the UK parent a defensible PE-firewall position under Article 5 if structured correctly. Post-Brexit UK GDPR (administered by the ICO, separate from EU EDPB) plus India's DPDP Act 2023 require dual-regime data protection handling. The UK-India FTA signed in 2025, with its Double Contributions Convention, has further streamlined commercial framework alignment. UK Finance teams familiar with IR35 already understand the misclassification mental model.</p>
<p>Patron Accounting LLP's EOR India service is built specifically for this complexity. We have run 30+ UK-headquartered EOR engagements - early-stage Series A SaaS firms, mid-market AI companies, and AIM-listed enterprises piloting India presence. CA-led depth on the four Labour Codes, EPF / ESI / Professional Tax, monthly TDS Section 192, Article 5 UK-India DTAA navigation including 2013 Protocol and MLI modifications, dual UK GDPR (UK IDTA / Addendum) + DPDP Act 2023 Data Processing Addendum, and FEMA-compliant inward GBP remittance via Form A2.</p>
<p>5 to 10 days from offer to Day 1. GBP 159 per employee per month from 5+ headcount. Article 5 PE firewall. Dual UK GDPR + DPDP DPA. UK-India FTA 2025 awareness. UK-friendly time-zone scheduling.</p>
<p>10,000+ Businesses Served | 4.9 Google Rating | 30+ UK Engagements | Post-Brexit + IR35-Aware + UK-India FTA 2025-Aligned</p>

            </div>
            <div style="display:flex;gap:14px;flex-wrap:wrap;margin-top:24px;">
                <a href="tel:+919459456700" style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:var(--orange);color:#fff;border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#128222; Call +91 945 945 6700</a>
                <a href="https://wa.me/919459456700?text=Hi%2C%20please%20share%20GBP-priced%20EOR%20India%20proposal%20with%20PE-risk%20firewall%2C%20Article%205%20UK-India%20DTAA%20notes%2C%20and%20UK%20GDPR%2BDPDP%20DPA." target="_blank" style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:#25D366;color:#fff;border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#128172; WhatsApp Us</a>
                <a href="mailto:contact@patronaccounting.com?subject=Enquiry%20for%20EOR%20India%20-%20UK%20Company&body=Hello%20Patron%20Accounting%20Team%2C%0A%0AWe%20are%20a%20UK-headquartered%20company%20looking%20to%20hire%20Indian%20talent%20via%20EOR.%20Please%20share%20a%20discovery%20call%20slot%20in%20UK-friendly%20hours%2C%20along%20with%20a%20GBP-priced%20proposal%2C%20PE-risk%20firewall%20notes%20under%20Article%205%20UK-India%20DTAA%2C%20and%20UK%20GDPR%2BDPDP%20Data%20Processing%20Addendum%20template.%0A%0AThank%20you." style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:transparent;color:#fff;border:2px solid rgba(255,255,255,0.3);border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#9993;&#65039; Email Us</a>
            </div>
            <p style="color:rgba(255,255,255,0.7);font-size:13px;margin-top:16px;">Book a Free Consultation - No Obligation.</p>
        </div>
    </div>
</section>

<!-- GSTAT STATE BENCH CITY PAGES (32 Pages) -->
<section class="content-section" style="padding:48px 32px;background:var(--gray-50);">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title" style="text-align:center;margin-bottom:12px;">EOR India for Other Jurisdictions and Decision Services</h2>
            <p style="text-align:center;color:var(--text-muted);font-size:15px;margin-bottom:40px;">Patron operates EOR India structures for foreign-headquartered companies across the US, Singapore, Europe, Australia, and the UK - each with jurisdiction-specific DTAA, PE, and data-protection considerations.</p>
            <!-- CITY_PAGES_GRID PATTERN:
                BLOCK 1 - City cards (pa-city-grid, 4 cols desktop):
                BLOCK 2 - Cross-sell services (pa-cross-grid, 3 cols desktop):
                <div class="pa-city-block">
                    <div class="pa-block-title">Related Services</div>
                    <div class="pa-block-sub">End-to-end support for EOR India for UK Companies</div>
                    <div class="pa-cross-grid">
                        <a href="/private-limited-company-registration" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Private Limited Company Registration</div><div class="pa-card-sub">India</div></div></a>
                        (repeat for 5-6 related services)
                    </div>
                </div>
            -->
            <div class="pa-city-block">
                    <div class="pa-block-title">EOR India for Other Jurisdictions and Decision Services</div>
                    <div class="pa-block-sub">Sister-pages for jurisdiction-specific EOR engagements and the EOR-vs-Pvt-Ltd decision framework</div>
                    <div class="pa-cross-grid">
                        <a href="/eor-india-for-us-companies" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">EOR India for US</div><div class="pa-card-sub">India</div></div></a>
                        <a href="/eor-india-for-singapore-companies" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">EOR India for Singapore</div><div class="pa-card-sub">India</div></div></a>
                        <a href="/eor-india-for-european-companies" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">EOR India for Europe</div><div class="pa-card-sub">India</div></div></a>
                        <a href="/eor-india-for-australian-companies" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">EOR India for Australia</div><div class="pa-card-sub">India</div></div></a>
                        <a href="/eor-india-vs-india-entity-setup" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">EOR vs Pvt Ltd Decision</div><div class="pa-card-sub">India</div></div></a>
                        <a href="/private-limited-company-registration" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Pvt Ltd Registration</div><div class="pa-card-sub">India</div></div></a>
                    </div>
                </div>
        </div>
    </div>
</section>

<!-- CONTENT FRESHNESS FOOTER -->
<section class="content-section" style="padding:32px;">
    <div class="content-container">
        <div class="text-content" style="font-size:13px;color:var(--text-muted);">
            <p><strong>Content Created:</strong> 07 May 2026 &nbsp;|&nbsp; <strong>Last Updated:</strong> <span id="lastUpdatedFooter"></span> &nbsp;|&nbsp; <strong>Next Review:</strong> 07 August 2026 &nbsp;|&nbsp; <strong>Reviewed By:</strong> CA &amp; CS Team, Patron Accounting LLP</p>
            <p>This page is reviewed quarterly (Tier 1) given the active UK-India FTA 2025 implementation, ICO guidance updates, DPDP Rules implementation, ongoing labour-code state implementation, and EPF/ESI threshold changes. Last reviewer: CA & CS Team, Patron Accounting LLP.</p>
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

<!-- External JS Dependencies (loaded by master layout in production) -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
@endsection
