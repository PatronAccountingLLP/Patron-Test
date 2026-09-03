@extends('layouts.service-app')

<!-- External Dependencies (loaded by master layout in production) -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Barlow:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,400&family=DM+Sans:opsz,wght@9..40,400;9..40,500;9..40,600;9..40,700&display=swap" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

@section('meta')
    <title>EOR India for Singapore Companies</title>
    <meta name="description" content="Hire Indian talent without entity. CA-led EOR with PE-risk firewall, SG-India DTAA, PDPA + DPDP alignment. Starting SGD 199/employee.">
    <link rel="canonical" href="/eor-india-for-singapore-companies">
    <meta name="robots" content="index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1">
    <meta property="og:title" content="EOR India for Singapore Companies 2026 | Patron Accounting">
    <meta property="og:description" content="Hire Indian talent without entity. CA-led EOR with PE-risk firewall, SG-India DTAA, PDPA + DPDP alignment. Starting SGD 199/employee.">
    <meta property="og:url" content="/eor-india-for-singapore-companies">
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="Patron Accounting">
    <meta property="og:image" content="https://www.patronaccounting.com/images/og-default-square.png">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="1200">
    <meta property="og:image:type" content="image/png">
    <meta property="og:image:secure_url" content="https://www.patronaccounting.com/images/og-default-square.png">
    <meta property="og:image:alt" content="Patron Accounting - partner you can rely on">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="EOR India for Singapore Companies 2026 | Patron Accounting">
    <meta name="twitter:description" content="Hire Indian talent without entity. CA-led EOR with PE-risk firewall, SG-India DTAA, PDPA + DPDP alignment. Starting SGD 199/employee.">
    <meta name="twitter:image" content="https://www.patronaccounting.com/images/og-default-square.png">
@endsection

@section('schema')
    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@graph": [
        {
          "@type": "BreadcrumbList",
          "@id": "https://www.patronaccounting.com/eor-india-for-singapore-companies#breadcrumb",
          "itemListElement": [
            { "@type": "ListItem", "position": 1, "name": "Home", "item": "https://www.patronaccounting.com/" },
            { "@type": "ListItem", "position": 2, "name": "Services", "item": "https://www.patronaccounting.com/services" },
            { "@type": "ListItem", "position": 3, "name": "EOR India for Singapore Companies", "item": "https://www.patronaccounting.com/eor-india-for-singapore-companies" }
          ]
        },
        {
          "@type": "FAQPage",
          "@id": "https://www.patronaccounting.com/eor-india-for-singapore-companies#faq",
          "mainEntity": [
            {
              "@type": "Question",
              "name": "Can a Singapore company hire employees in India without a local entity?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "Yes. Through an Employer of Record like Patron Accounting LLP, the Singapore Pte Ltd avoids setting up an Indian subsidiary. Patron becomes the legal employer in India, issues Indian employment contracts, runs INR payroll, files EPF, ESI, Professional Tax, and TDS under Section 192. The Singapore parent retains functional control over work and IP via the MSA. EOR is the compliant alternative to misclassifying full-time staff as independent consultants, which creates PE risk under Article 5 SG-India DTAA."
              }
            },
            {
              "@type": "Question",
              "name": "Will using EOR in India create Permanent Establishment risk for the Singapore parent?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "Properly structured EOR shields the Singapore parent from PE under Article 5 of the SG-India DTAA. Patron is the principal Indian employer; the SG client has no fixed place of business in India. Two PE risks need active monitoring: Article 5(8)(a) Dependent Agent PE if Indian employees exercise concluding-contract authority, and Article 5(6)(a) Service PE if Singapore-based staff provide services in India for more than 90 days within a fiscal year. Patron's PE-firewall memo factors both."
              }
            },
            {
              "@type": "Question",
              "name": "How does the Singapore-India DTAA help with hiring Indian employees?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "The SG-India DTAA was signed 24 January 1994, in force 27 May 1994, modified by the 2005 Second Protocol, the 2011 Protocol amendment, and the 2017 Third Protocol (effective 1 April 2017), plus BEPS MLI. Article 5 defines PE with a 183-day construction threshold and a 90-day Service PE threshold under 5(6)(a). Article 7 allocates business profits. Article 23 eliminates double taxation via exemption or credit method. Singapore residents need a Tax Residency Certificate from IRAS to claim treaty benefits."
              }
            },
            {
              "@type": "Question",
              "name": "How does Singapore PDPA interact with India DPDP Act 2023 for employee data?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "Singapore's PDPA Section 26 requires the foreign recipient to be bound by 'a comparable standard of protection' for cross-border transfers - typically through contractual safeguards. India's DPDP Act 2023 Section 16 + Rule 15 follows a 'negative list' approach - transfers permitted unless Central Government restricts. Patron handles both via dual-clause Data Processing Addendum, with six-monthly updates as PDPC and Indian DPB notifications evolve. Different breach timelines: 3 days under PDPA versus 'as soon as practicable' under DPDP."
              }
            },
            {
              "@type": "Question",
              "name": "Are there MAS regulatory considerations when SG-licensed firms hire Indian back-office?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "Yes. If the Singapore client is a MAS-licensed financial institution (bank, capital markets services licensee, payments institution under PS Act 2019, insurer, fund management company), MAS Outsourcing Guidelines (revised October 2018) and Technology Risk Management Guidelines apply. Requirements include due diligence on the service provider, written agreement with audit and inspection rights, business continuity, sub-outsourcing controls, and MAS notification for material outsourcing. Patron offers a pre-built MAS Outsourcing compliance package as a paid add-on for licensed FI clients."
              }
            },
            {
              "@type": "Question",
              "name": "What is the cost of EOR in India for Singapore companies in SGD?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "Patron's EOR pricing in SGD: Starter (1 to 4 employees) SGD 269 PEPM. Growth (5 to 14) SGD 199. Scale (15 to 30) SGD 169 with quarterly PE-risk review. MAS-licensed FI add-on SGD 99/month base + SGD 49/employee for Outsourcing Guidelines compliance. Enterprise (31+) is custom with migration plan to Indian Pvt Ltd. Employee CTC, employer EPF, ESI, gratuity provision billed at cost. Generic EOR platforms typically charge SGD 250 to 800 per employee per month."
              }
            },
            {
              "@type": "Question",
              "name": "Is the time-zone alignment between Singapore and India helpful for distributed teams?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "Yes. India Standard Time is only 2.5 hours behind Singapore Time - the smallest offset of any major foreign-EOR jurisdiction. A 9 AM-to-6 PM workday in Singapore corresponds to 6:30 AM-to-3:30 PM in India; the standard Indian workday of 9:30 AM-to-6:30 PM IST overlaps with 12:00 PM-to-9:00 PM SGT, giving 6 to 8 hours of real-time overlap. This is significantly better than US (8 to 12 hours offset, asynchronous workflow needed) or UK (3.5 to 4.5 hours)."
              }
            },
            {
              "@type": "Question",
              "name": "When should Singapore companies migrate from EOR to setting up an Indian subsidiary?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "Break-even is typically 25 to 30 full-time employees. Below that, EOR is more cost-effective than maintaining an India entity with finance and HR overhead. Above 25 to 30, the per-employee EOR fee crosses entity-overhead break-even. Other migration triggers: invoicing Indian customers in INR, raising Series A/B with investors requiring local entity, opening a physical office, long-term commitment of 5+ years. Patron handles entity setup and seamless EOR-to-subsidiary transfer when the time comes."
              }
            }
          ]
        },
        {
          "@type": "Service",
          "@id": "https://www.patronaccounting.com/eor-india-for-singapore-companies#service",
          "name": "Employer of Record (EOR) India for Singapore Companies",
          "description": "Patron Accounting LLP provides end-to-end Employer of Record services for Singapore Pte Ltd companies (global APAC firms, Indian-origin SG founders, MAS-licensed FIs, listed enterprises) hiring full-time Indian talent without an Indian subsidiary. Coverage includes Indian employment contracts under four Labour Codes 2019/2020, INR payroll, monthly TDS Section 192 IT Act, EPF Section 6, ESI Section 38, Permanent Establishment firewall under Article 5 of the SG-India DTAA (1994 + 2005 + 2011 + 2017 Third Protocols + MLI), Singapore PDPA Section 26 plus DPDP Act 2023 Section 16 dual compliance, MAS Outsourcing Guidelines support for licensed FIs, and FEMA-compliant inward SGD remittance via Form A2.",
          "serviceType": "EOR India - Singapore Companies (IST/SGT 2.5h Overlap, Indian-Origin Founder Friendly)",
          "provider": { "@id": "https://www.patronaccounting.com/#organization" },
          "areaServed": [
            { "@type": "Country", "name": "India", "sameAs": "https://en.wikipedia.org/wiki/India" },
            { "@type": "Country", "name": "Singapore", "sameAs": "https://en.wikipedia.org/wiki/Singapore" }
          ],
          "about": [
            { "@type": "Thing", "name": "Employer of Record", "sameAs": "https://en.wikipedia.org/wiki/Employer_of_record" },
            { "@type": "Thing", "name": "Personal Data Protection Act 2012", "sameAs": "https://en.wikipedia.org/wiki/Personal_Data_Protection_Act_2012_(Singapore)" },
            { "@type": "Thing", "name": "Permanent establishment", "sameAs": "https://en.wikipedia.org/wiki/Permanent_establishment" },
            { "@type": "Thing", "name": "Monetary Authority of Singapore", "sameAs": "https://en.wikipedia.org/wiki/Monetary_Authority_of_Singapore" }
          ],
          "offers": {
            "@type": "Offer",
            "priceCurrency": "SGD",
            "price": "199",
            "priceSpecification": {
              "@type": "UnitPriceSpecification",
              "price": "199",
              "priceCurrency": "SGD",
              "unitText": "per employee per month (Growth tier 5 to 14 employees; Starter SGD 269, Scale SGD 169)"
            }
          },
          "mainEntityOfPage": {
            "@type": "WebPage",
            "@id": "https://www.patronaccounting.com/eor-india-for-singapore-companies",
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
                        Employer of Record (EOR) India for Singapore Companies
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
                            <p class="mb-0 text-dark benefit-paragraph"><span>Documents:</span> Master Services Agreement, Indian employment contract, IP assignment, NDA, PDPA + DPDP data processing addendum</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Fees:</span> Starting SGD 199 per employee per month. Volume tiers from 5+ headcount</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Audience:</span> Singapore Pte Ltd hiring 1 to 30 Indian engineers, finance, ops, customer success</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Timeline:</span> 5 to 10 working days from offer to onboarding. IST/SGT only 2.5 hours apart, near-identical workday</p>
                        </div>
                    </div>

                    <p class="mb-4 fw-bold" style="color: var(--blue); font-size: 15px;">10,000+ Businesses Served | 4.9 Google Rating | 25+ Singapore-headquartered engagements | Indian-origin SG founders welcome</p>

                    <div class="hero-cta">
                        <a href="tel:+919459456700" class="btn-video text-decoration-none">
                            <span class="play-circle"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="width:14px;height:14px;color:#fff"><path d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/></svg></span>
                            Call +91 945 945 6700
                        </a>
                        <a href="mailto:info@patronaccounting.com" class="btn-sample text-decoration-none">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="width:18px;height:18px;"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,12 2,6"/></svg>
                            Email Us
                        </a>
                        <a href="https://wa.me/919459456700?text=Hello%2C%20I%20just%20visited%20your%20Eor%20India%20for%20Singapore%20Companies%20page.%20I%20would%20like%20to%20know%20more%20about%20it." target="_blank" class="btn-sample text-decoration-none" rel="noopener">
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
                                            'service'  => 'EOR India for Singapore Companies',
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
    'ctaText'    => 'Trusted by 25+ Singapore-headquartered companies - global APAC SaaS firms, Indian-origin founders incorporated in Singapore for capital-raising and ASEAN gateway, MAS-licensed payments institutions, Singapore-listed enterprises - for Article 5 SG-India DTAA PE-firewall, dual PDPA + DPDP Act 2023 compliance, MAS Outsourcing Guidelines support, and SGD-denominated EOR India engagements.',
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
            <a href="#what-section" class="toc-btn">What Is EOR India for SG</a>
            <a href="#who-section" class="toc-btn">Applicability</a>
            <a href="#services-section" class="toc-btn">EOR India Services</a>
            <a href="#procedure-section" class="toc-btn">Onboarding Procedure</a>
            <a href="#documents-section" class="toc-btn">Documents Checklist</a>
            <a href="#challenges-section" class="toc-btn">Challenges and Solutions</a>
            <a href="#fees-section" class="toc-btn">Fees and Pricing in SGD</a>
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
            <h2 class="section-title">EOR India for Singapore Companies: APAC HQ + Indian-Origin Founders + MAS-Licensed FIs</h2>
            <div class="content-text">
                <div class="highlight-box" style="margin-bottom:20px;">
                    <p><strong>&#128204; TL;DR - EOR India for Singapore Companies Services at a Glance</strong></p>
                    <p>Patron's EOR India service lets Singapore companies hire full-time Indian employees in 5 to 10 days without an Indian entity. We become the legal employer, run INR payroll, file EPF / ESI / TDS, and shield the Singapore parent from Permanent Establishment exposure under Article 5 of the SG-India DTAA. Singapore PDPA plus India DPDP Act 2023 handled via dual-clause Data Processing Addendum. MAS Outsourcing Guidelines support for SG-licensed FIs. Service contracts processed via FEMA Form A2. Starting SGD 199 per employee per month.</p>
                </div>
                <p>Singapore companies hiring Indian talent come in two distinct profiles. The first is the global APAC firm using Singapore as its regional headquarters - typical of mid-market SaaS, fintech, AI, and professional services companies that view India as their largest hiring market in Asia. The second profile is the Indian-origin founder who incorporated in Singapore for capital-raising efficiency, lower corporate tax (17 percent versus India's 30 percent), and ASEAN gateway access - and who now wants to hire Indian engineers, finance staff, or operations team back in Bengaluru, Pune, Mumbai, or Gurugram.</p>
                <p>Both profiles face the same structural problem: setting up an Indian subsidiary takes 4 to 6 months and around SGD 20,000 to 40,000 in legal and registration costs, and engaging full-time staff as independent consultants creates Permanent Establishment risk under Article 5 of the SG-India DTAA. Direct payroll on Singapore CPF basis is not legally available in India without an Indian entity. The Employer of Record structure solves this gap. Patron brings CA-led depth - the four Labour Codes, EPF / ESI / Professional Tax, monthly TDS under Section 192, SG-India DTAA navigation including the 2017 Third Protocol modifications, MAS Outsourcing Guidelines support for licensed FIs, and dual PDPA + India DPDP Act 2023 compliance.</p>
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
                <h2 class="section-title">What Is EOR India for Singapore Companies?</h2>
                <div class="content-text what-is-definition">
                    
                    <p>EOR India for Singapore Companies is a third-party employment structure where Patron Accounting acts as the legal employer in India for the Singapore client's hires. Patron issues the Indian employment contract, runs INR payroll, deposits EPF and ESI contributions, withholds TDS under Section 192, files Form 24Q quarterly, manages statutory leave, gratuity provisioning, and exit compliance, and reports periodically to the Singapore client.</p>
<p>The Singapore client retains full functional control over the employee's day-to-day work, deliverables, performance management, and intellectual property under a Master Services Agreement that includes IP assignment to the Singapore parent and dual Singapore PDPA plus India DPDP Act 2023 data processing terms.</p>
<p>This structure is used by Singapore Pte Ltd companies across multiple profiles - global APAC SaaS and fintech firms with Singapore as regional HQ, Indian-origin founders who incorporated in Singapore for capital-raising and ASEAN gateway purposes, MAS-licensed financial institutions hiring Indian back-office staff under MAS Outsourcing Guidelines, and Singapore-listed enterprises piloting India hiring before incorporating an Indian subsidiary. The break-even point against running an Indian Pvt Ltd directly is typically 25 to 30 full-time employees.</p>
<h3 style="color:var(--blue);margin-top:24px;">Quick-Reference Summary Table</h3>
<div class="table-responsive-wrapper">
<table>
  <thead><tr><th>Parameter</th><th>Detail</th></tr></thead>
  <tbody>
    <tr><td>Governing framework</td><td>Indian Companies Act 2013, Income-tax Act 1961, four Labour Codes 2019/2020, EPF/ESI Acts, FEMA 1999, SG-India DTAA 1994 (2005/2011/2017 Protocols), PDPA Singapore 2012, DPDP Act 2023, MAS Outsourcing Guidelines</td></tr>
    <tr><td>Audience</td><td>Singapore Pte Ltd, Branch, Limited Partnership hiring 1 to 30 Indian engineers, finance, ops</td></tr>
    <tr><td>Onboarding timeline</td><td>5 to 10 working days from signed offer to first day of work</td></tr>
    <tr><td>Pricing</td><td>Starting SGD 199 per employee per month (Growth tier 5+ headcount)</td></tr>
    <tr><td>PE risk</td><td>Mitigated via Article 5 SG-India DTAA - Patron is principal employer; SG client has no fixed place of business in India</td></tr>
    <tr><td>Data protection</td><td>PDPA Section 26 + DPDP Act 2023 Sec 16 dual clause Data Processing Addendum</td></tr>
    <tr><td>Inward remittance</td><td>FEMA Form A2 + RBI purpose code; FIRC issued by AD-Cat-I bank; processed in SGD via SWIFT</td></tr>
  </tbody>
</table>
</div>

                </div>
                <div class="highlight-box" style="margin-top:20px;">
                    <p><strong>Key Terms for EOR India for Singapore Companies:</strong></p>
                    <ul>
  <li><strong>Employer of Record (EOR):</strong> A third-party Indian entity (Patron Accounting LLP) that becomes the legal employer for the Singapore client's Indian hires. Patron handles all Indian employment-law obligations; the Singapore client manages the work itself.</li>
  <li><strong>Permanent Establishment (PE) under Article 5 SG-India DTAA:</strong> Treaty signed 24 January 1994, in force 27 May 1994. Modified by 2005 Second Protocol, 2011 amendment, and 2017 Third Protocol (effective 1 April 2017) plus BEPS MLI. Article 5(3) sets construction PE threshold at 183 days. Article 5(6)(a) creates a Service PE if employees provide services in India for more than 90 days within a fiscal year. Article 5(8)(a) covers dependent agents with binding-contract authority.</li>
  <li><strong>Article 23 Elimination of Double Taxation:</strong> Singapore eliminates double tax through either exemption method (Indian-source income with PE attribution exempted) or credit method (taxed in Singapore with Foreign Tax Credit for Indian tax paid). India exempts SG-PE earnings. Singapore's 17 percent corporate tax versus India's 30 percent matters significantly when planning where economic activity sits.</li>
  <li><strong>PDPA Singapore + India DPDP Act 2023 dual compliance:</strong> Singapore's Personal Data Protection Act 2012, administered by PDPC, requires organisations transferring personal data outside Singapore to ensure foreign recipient is bound by 'a comparable standard of protection' (Section 26). India's DPDP Act 2023 Section 16 + Rule 15 follows a 'negative list' approach - transfers permitted unless Central Government restricts.</li>
  <li><strong>MAS Outsourcing Guidelines and TRMG:</strong> If Singapore client is a MAS-licensed financial institution (bank, capital markets services licensee, payments institution under PS Act 2019, insurer, fund management company), the MAS Outsourcing Guidelines (revised October 2018) and Technology Risk Management Guidelines apply. Requirements include due diligence, written agreement with audit and inspection rights, business continuity, and notification to MAS for material outsourcing.</li>
  <li><strong>IST/SGT 2.5-hour offset:</strong> India Standard Time is 2.5 hours behind Singapore Time. Indian 9:30 AM-to-6:30 PM IST workday overlaps with 12:00 PM-to-9:00 PM SGT, giving 6 to 8 hours of real-time overlap. Significantly better than US (8 to 12 hours offset) or UK (3.5 to 4.5 hours).</li>
  <li><strong>Tax Residency Certificate (TRC):</strong> Singapore tax residents must obtain a TRC from IRAS to claim DTAA benefits in India. Patron coordinates the TRC documentation flow with the Singapore client at MSA signing.</li>
  <li><strong>FEMA Form A2 + RBI Purpose Codes:</strong> Inward SGD remittance from Singapore client uses Form A2 with RBI purpose code (P0802 for software/IT services or P1006 for business services). FIRC issued by AD-Cat-I bank for each receipt.</li>
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
                            <text x="100" y="170" font-size="10" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial, sans-serif">EOR India for Singapore Companies</text>
                        </svg>
                    </div>
                    <div class="illustration-badge">
                        <span>Singapore APAC HQ + Indian-Origin Founders</span>
                        <strong>IST/SGT 2.5h Offset - Near-Identical Workday</strong>
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
                
                <p>Patron's EOR India service is built specifically for Singapore-headquartered companies. We onboard Singapore Private Limited Companies (Pte Ltd), Limited Liability Partnerships, Branch offices, and Variable Capital Companies (VCCs) - typical client headcounts in India range from 1 to 30 employees.</p>

<h3 style="color:var(--blue);margin-top:24px;">Common Singapore Client Profiles</h3>
<ul>
  <li>Global APAC SaaS / fintech / AI firm with Singapore regional HQ, hiring engineering and customer success in Bengaluru / Pune / Mumbai / Gurugram.</li>
  <li>Indian-origin founder who incorporated in Singapore for capital-raising and ASEAN gateway, now hiring Indian engineering talent.</li>
  <li>MAS-licensed financial institution (bank, payments, capital markets, insurer) hiring Indian back-office under MAS Outsourcing Guidelines.</li>
  <li>Singapore-listed company piloting India presence ahead of formal market entry.</li>
  <li>Family office in Singapore managing investment portfolio, hiring Indian research analysts and operations team.</li>
</ul>

<h3 style="color:var(--blue);margin-top:24px;">When EOR Is the Right Structure</h3>
<ul>
  <li>Hiring 1 to 25 Indian full-time employees (above 25, evaluate entity setup).</li>
  <li>Singapore client wants speed (5 to 10 days onboarding versus 4 to 6 months for entity setup).</li>
  <li>Singapore client wants compliance liability transferred to specialist - PE risk firewall, labour code compliance, PDPA + DPDP dual compliance.</li>
  <li>MAS-licensed Singapore client wants pre-vetted Indian operational partner satisfying MAS Outsourcing Guidelines.</li>
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
<p>Engaging Indian full-time staff as independent consultants when they work fixed hours, report to Singapore managers, use Singapore client equipment, and have no other clients creates a high reclassification risk. Indian labour authorities and the Income-tax Department can reclassify them as employees, triggering backdated EPF, ESI, gratuity, leave encashment, and TDS liabilities going back 3 to 7 years - plus PE exposure for the Singapore parent. EOR is the compliant alternative.</p>

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
                        <tr><td>Indian Employment Contract Drafting</td><td>Compliant employment contract under the four Labour Codes (Code on Wages 2019, Code on Social Security 2020, Industrial Relations Code 2020, OSH Code 2020) with state-specific Shops and Establishments Act compliance. Probation up to 6 months, notice 30-90 days, IP assignment to Singapore parent, confidentiality, non-solicit (post-employment 6-12 months), garden leave clause, dual PDPA + India DPDP terms.</td></tr>
                        <tr><td>Onboarding (PAN, EPF, ESI, Bank, Devices)</td><td>PAN verification (mandatory for TDS), EPF Universal Account Number generation for basic wage up to Rs 15,000/mo, ESI for gross wage up to Rs 21,000/mo, bank setup for INR salary credit, device provisioning support (laptop, accessories ordered by Patron, billed at cost). 5 to 10 working days from signed offer.</td></tr>
                        <tr><td>INR Payroll + Monthly TDS Section 192</td><td>Monthly INR payroll based on Singapore-client-set CTC. Salary slips on Patron portal. TDS under Section 192 calculated on slab rates (old or new regime per Form 10-IEA), deposited via Challan ITNS 281 by 7th of following month, Form 24Q filed quarterly, Form 16 issued annually.</td></tr>
                        <tr><td>EPF, ESI, Professional Tax, Labour Welfare Fund</td><td>EPF 12 percent + 12 percent on basic up to Rs 15,000/mo (mandatory). ESI 0.75 + 3.25 percent on gross up to Rs 21,000/mo. PT state-specific (Maharashtra Rs 200/mo, Karnataka Rs 200/mo, Delhi nil). LWF state-specific. All filings electronic on respective state portals.</td></tr>
                        <tr><td>PDPA Singapore + DPDP Act 2023 Dual Compliance + MAS Support</td><td>Dual-clause Data Processing Addendum. Singapore side covers PDPA Section 26 'comparable standard of protection' through contractual safeguards. India side covers DPDP Section 16 negative list and Rule 15. Six-monthly cadence updates per PDPC and DPDP Board. For SG-licensed FIs, MAS Outsourcing Guidelines compliance package: DD questionnaire, audit-rights clause, BCP, sub-outsourcing register, MAS notification template.</td></tr>
                        <tr><td>Article 5 SG-India DTAA PE Firewall + Banking</td><td>MSA structured to keep Singapore client at arm's length. Patron is principal employer; SG client receives services from Patron. Article 5 tested - no fixed place of business, no Article 5(8)(a) dependent agent with binding-contract authority, no Article 5(6)(a) Service PE (90-day SG-staff days in India tracked). 2017 Third Protocol modifications factored. Inward SGD remittance via AD-Cat-I bank with Form A2, RBI purpose code P0802/P1006, FIRC.</td></tr>

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
            <p class="section-subtitle" style="text-align:left;max-width:100%;">End-to-end onboarding from Singapore client discovery call through monthly run cycle and exit handling. Every step references the relevant Indian statute (four Labour Codes 2019/2020, EPF Act 1952, ESI Act 1948, Income-tax Act 1961 Section 192, FEMA 1999) and Singapore regulation (PDPA Section 26, MAS Outsourcing Guidelines for licensed FIs). IST/SGT 2.5-hour offset gives near-identical workday.</p>
        </header>
        <div class="steps-container">
            <div class="step-card">
    <div class="step-content">
        <span class="step-badge">Step 1</span>
        <h3 class="step-title">Discovery Call (IST/SGT 2.5h overlap)</h3>
        <p class="step-description">Singapore client describes hire profile (role, CTC, location, start date). Patron flags state-specific compliance considerations and asks whether SG client is MAS-licensed (which triggers Outsourcing Guidelines workflow). Time-zone overlap is straightforward - 2.5-hour offset means most calls held during overlapping core hours.</p>
        <div class="step-highlights">
            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>MAS check</span>
            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>State PT/LWF</span>
            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Easy scheduling</span>
        </div>
    </div>
    <div class="step-visual">
        <div class="step-illustration">
            <div class="illustration-icon">
                <svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="10" y="15" width="100" height="70" rx="8" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><circle cx="35" cy="40" r="10" fill="#FEF4EE" stroke="#E8712C" stroke-width="1.5"/><text x="35" y="44" font-size="6" font-weight="700" fill="#E8712C" text-anchor="middle" font-family="Arial">SaaS</text><circle cx="60" cy="40" r="10" fill="#FEF4EE" stroke="#E8712C" stroke-width="1.5"/><text x="60" y="44" font-size="6" font-weight="700" fill="#E8712C" text-anchor="middle" font-family="Arial">MAS</text><circle cx="85" cy="40" r="10" fill="#FEF4EE" stroke="#E8712C" stroke-width="1.5"/><text x="85" y="44" font-size="6" font-weight="700" fill="#E8712C" text-anchor="middle" font-family="Arial">VCC</text><line x1="20" y1="60" x2="100" y2="60" stroke="#14365F" stroke-width="1" opacity="0.3"/><line x1="20" y1="72" x2="92" y2="72" stroke="#14365F" stroke-width="1" opacity="0.3"/></svg>
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
        <p class="step-description">MSA signed between Singapore client and Patron Accounting LLP. Covers scope, fees in SGD, IP assignment, dual PDPA + DPDP DPA, Article 5 SG-India DTAA PE-firewall clause, MAS Outsourcing Guidelines clauses (where applicable), indemnity caps. Standard fee SGD 199/employee/month for 5-14 employees.</p>
        <div class="step-highlights">
            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>SGD fees</span>
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
        <p class="step-description">Singapore client makes offer using template Patron provides (state-specific clauses, India-compliant probation/notice). Once accepted, candidate introduced to Patron onboarding team. PAN, Aadhaar, bank proof, prior employer relieving letter, education certs collected via Patron portal. BGV optional.</p>
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
        <p class="step-description">UAN generated for EPF if applicable, ESI registration if gross up to Rs 21,000, PT enrolment for state of work, Form 11 PF declaration and ESI Form 1 completed. Day 1 onboarding call in overlap window (typically 11:30 AM IST = 2:00 PM SGT). Employee added to client's Slack/Teams/GitHub.</p>
        <div class="step-highlights">
            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>UAN/ESI/PT</span>
            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Day 1 IST 11:30</span>
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
        <h3 class="step-title">Monthly Run + SGD Invoice</h3>
        <p class="step-description">By 5th of each month, Singapore client confirms salary adjustments, bonuses, expenses. By 10th, Patron raises SGD invoice covering employee CTC + statutory contributions + EOR fee + GST (if applicable). By 25th, payroll processed and TDS / EPF / ESI filed on schedule. FIRC referenced.</p>
        <div class="step-highlights">
            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>SGD invoice 10th</span>
            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Payroll 25th</span>
            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>TDS 7th / PF 15th</span>
        </div>
    </div>
    <div class="step-visual">
        <div class="step-illustration">
            <div class="illustration-icon">
                <svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="15" y="15" width="90" height="70" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><circle cx="35" cy="35" r="10" fill="#FEF4EE" stroke="#E8712C" stroke-width="1.5"/><text x="35" y="39" font-size="6" font-weight="700" fill="#E8712C" text-anchor="middle" font-family="Arial">SGD</text><circle cx="60" cy="35" r="10" fill="#FEF4EE" stroke="#E8712C" stroke-width="1.5"/><text x="60" y="39" font-size="7" font-weight="700" fill="#E8712C" text-anchor="middle" font-family="Arial">TDS</text><circle cx="85" cy="35" r="10" fill="#FEF4EE" stroke="#E8712C" stroke-width="1.5"/><text x="85" y="39" font-size="6" font-weight="700" fill="#E8712C" text-anchor="middle" font-family="Arial">FIRC</text><line x1="22" y1="58" x2="98" y2="58" stroke="#14365F" stroke-width="1" opacity="0.3"/><line x1="22" y1="68" x2="92" y2="68" stroke="#14365F" stroke-width="1" opacity="0.3"/><line x1="22" y1="78" x2="85" y2="78" stroke="#14365F" stroke-width="1" opacity="0.3"/></svg>
            </div>
            <span class="illustration-label">Steady State</span>
            <span class="step-number-large">05</span>
        </div>
    </div>
</div>

<div class="step-card">
    <div class="step-content">
        <span class="step-badge">Step 6</span>
        <h3 class="step-title">MAS Cycle + Six-Monthly Updates + Exit</h3>
        <p class="step-description">MAS-specific cycle (where applicable): quarterly outsourcing risk review for material outsourcing, annual sub-outsourcing audit, BCP test report. Six-monthly PDPA + DPDP regulatory update. On exit, full and final settlement within 30-45 days: salary, leave encashment, gratuity, EPF, IP-return.</p>
        <div class="step-highlights">
            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>MAS quarterly</span>
            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>6-mo updates</span>
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
                
                <h3 style="color:var(--blue);margin-top:8px;">From Singapore Client (One-Time)</h3>
<ul>
  <li>ACRA BizFile profile of Singapore entity.</li>
  <li>UEN (Unique Entity Number) of Singapore entity.</li>
  <li>Authorised signatory designation for MSA.</li>
  <li>Beneficial ownership disclosure (ACRA register reference).</li>
  <li>Standard employment offer template (Patron will adapt to India).</li>
  <li>MAS licence reference (if SG client is a regulated FI).</li>
  <li>PDPC data protection officer designation reference.</li>
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
<h3 style="color:var(--blue);margin-top:24px;">MAS Outsourcing Guidelines Documentation (SG-Licensed FI Clients Only)</h3>
<ul>
  <li>Outsourcing risk assessment template (Patron supplies).</li>
  <li>Service-level agreement with audit, inspection, business-continuity, exit clauses.</li>
  <li>Sub-outsourcing register (Patron's downstream processors).</li>
  <li>MAS notification template for material outsourcing.</li>
  <li>Annual outsourcing audit findings.</li>
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
                        <tr><td>Permanent Establishment Creep Under Article 5 SG-India DTAA</td><td>Two specific PE risks deserve attention. First, Article 5(8)(a) Dependent Agent PE - if Singapore parent gives Indian employees signing power on customer agreements or lets them negotiate pricing, those Indian employees can be characterised as a dependent agent PE. Second, Article 5(6)(a) Service PE - if Singapore-based staff travel to India and provide services for more than 90 days within a fiscal year (whether contiguous or aggregated), a Service PE is created.</td><td>At MSA signing, PE-firewall memo defining boundaries (what Indian employees may/may not do, plus tracker for SG staff days in India). 2017 Third Protocol modifications factored. Quarterly check-in calls flag any expansion of role or SG-staff travel that could push into PE territory.</td></tr>
                        <tr><td>PDPA + India DPDP Act 2023 Dual-Compliance Complexity</td><td>Singapore's PDPA, administered by PDPC, has been operating for over a decade with well-developed cross-border transfer practice (Section 26 'comparable standard of protection'). India's DPDP Act 2023 is newer with DPDP Rules 2025 having clarified the negative-list approach. Different breach-notification timelines (3 days under PDPA vs 'as soon as practicable' under DPDP), different lawful bases (a more flexible 'reasonable purpose' under PDPA vs primarily consent and 'legitimate use' under DPDP), and different supervisory authorities (PDPC vs Indian Data Protection Board).</td><td>Dual-clause Data Processing Addendum that explicitly satisfies both regimes, with six-monthly regulatory updates as the negative list and PDPC guidance evolve.</td></tr>
                        <tr><td>MAS Outsourcing Guidelines for SG-Licensed Financial Institutions</td><td>If Singapore client is a MAS-licensed entity (bank, capital markets services licensee, payments institution under PS Act 2019, insurer, fund management company), MAS Outsourcing Guidelines (revised October 2018) and Technology Risk Management Guidelines apply to outsourcing of material functions to Indian back-office. Requirements include due diligence, audit and inspection rights, business continuity, sub-outsourcing controls, and MAS notification for material outsourcing.</td><td>Pre-built MAS Outsourcing Guidelines compliance package - DD questionnaire response, audit-rights clause in MSA, BCP documentation, sub-outsourcing register, MAS notification template. We have supported SG-licensed clients through MAS supervisory inquiries on India-side outsourcing.</td></tr>
                        <tr><td>SGD-to-INR FX Volatility and CTC Budgeting</td><td>Singapore Finance teams budget in SGD, but Indian employee CTC is denominated in INR. SGD has historically been more stable against INR than USD or GBP (Monetary Authority of Singapore manages SGD against a basket), but year-on-year movements of 3 to 7 percent are common. Singapore client needs predictable budgeting against actual INR cost.</td><td>Monthly invoicing in SGD at hedging-friendly rate (15-day rolling average), quarterly review of FX exposure, option to lock SGD-INR rate for 12-month forward via Singapore client's bank. Alternative: invoice in INR with Singapore client absorbing FX at remittance.</td></tr>
                        <tr><td>Indian-Origin SG Founder Familiarity Advantage and Trap</td><td>Many Singapore Pte Ltd entities hiring into India are founded by Indian-origin entrepreneurs who already understand Indian regulatory texture. The advantage is faster decision-making and cleaner expectations. The trap is over-confidence: Indian regulations have changed substantially since the founder may have last operated in India - four Labour Codes 2019/2020 replacing older labour-law patchwork, new Income-tax Act 2025 (commencing 1 April 2026), DPDP Act 2023, reduced cash thresholds (Sec 269ST Rs 2 lakh, Sec 40A(3) Rs 10,000), TDS-rate updates.</td><td>One-page 'what's changed' briefing at engagement onset, calibrated to the founder's prior India operating experience. Helps Indian-origin founders calibrate expectations to current rules without re-explaining the basics.</td></tr>

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
            <h2 class="section-title">Fees and Pricing in SGD</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Fee Component</th><th>Amount</th></tr></thead>
                    <tbody>
                        <tr><td>Starter (1 to 4 employees)</td><td class="text-right">SGD 269 PEPM - Standard EOR (contract, payroll, EPF, ESI, PT, TDS, Form 16, dual PDPA + DPDP DPA)</td></tr>
                        <tr><td>Growth (5 to 14 employees)</td><td class="text-right">SGD 199 PEPM - Starter + dedicated onboarding manager + quarterly PDPA + DPDP regulatory update</td></tr>
                        <tr><td>Scale (15 to 30 employees)</td><td class="text-right">SGD 169 PEPM - Growth + quarterly PE-risk review + multi-state PT + LWF + sub-processor management</td></tr>
                        <tr><td>MAS-Licensed FI Add-On (Any Tier)</td><td class="text-right">SGD 99/month base + SGD 49/employee - MAS Outsourcing Guidelines compliance package, audit-rights clause, BCP, MAS notification template</td></tr>
                        <tr><td>Enterprise (31+ employees)</td><td class="text-right">Custom - Migration plan to Indian Pvt Ltd subsidiary + Patron continues as outsourced payroll provider</td></tr>
                        <tr><td>Pass-Through: Employee CTC + Employer EPF (12% + admin) + ESI (3.25%) + Gratuity (4.81%)</td><td class="text-right">Billed at cost</td></tr>
                        <tr><td><strong>Patron Accounting Professional Fees (starting)</strong></td><td class="text-right"><strong>From SGD 199 per employee per month (Growth tier 5-14 employees)</strong></td></tr>

                    </tbody>
                </table>
                </div>
                <p style="margin-top:16px;font-size:13px;color:var(--text-muted);font-style:italic;">All fees and charges listed are indicative only and do not constitute a binding offer. Final amounts may vary depending on the volume of work and the complexity involved.</p>
                <p style="margin-top:16px;">Professional service charges for drafting, filing, and representation are separate from the statutory fees. The exact fee depends on the complexity of the case, disputed amount, and number of hearings required. Contact us for a detailed quote.</p>
                <p style="margin-top:16px;"><strong>Get a free EOR India for Singapore Companies consultation - <a href="tel:+919459456700">Call +91 945 945 6700</a> or <a href="https://wa.me/919459456700?text=Hello%2C%20I%20just%20visited%20your%20Eor%20India%20for%20Singapore%20Companies%20page.%20I%20would%20like%20to%20know%20more%20about%20it." target="_blank" rel="noopener">WhatsApp us</a>. No-obligation assessment.</strong></p>
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
                        <tr><td>Monthly close (payslip + filings + SGD invoice to Singapore client)</td><td>By 25th of following month</td></tr>
                        <tr><td>Quarterly Form 24Q TDS return</td><td>31st of month following quarter end</td></tr>
                        <tr><td>Annual Form 16 issuance</td><td>By 15 June (for previous April-March fiscal)</td></tr>
                        <tr><td>Six-monthly PDPA + DPDP regulatory update note</td><td>Aligned with PDPC and DPDP Board cycles</td></tr>
                        <tr><td>MAS Outsourcing review (where applicable)</td><td>Annual cycle, plus material-change updates within 30 days</td></tr>
                        <tr><td>Employee exit full-and-final settlement</td><td>30 to 45 days from last working day</td></tr>

                    </tbody>
                </table>
                </div>
                <div class="highlight-box" style="margin-top:16px;">
                    
                    <p><strong>IST/SGT overlap windows:</strong> India Standard Time is only 2.5 hours behind Singapore Time - the smallest offset of any major foreign-EOR jurisdiction. A 9 AM-to-6 PM Singapore workday corresponds to 6:30 AM-to-3:30 PM in India; the standard Indian 9:30 AM-to-6:30 PM IST workday overlaps with 12:00 PM-to-9:00 PM SGT, giving 6 to 8 hours of real-time overlap. Significantly better than US (8 to 12 hours offset) or UK (3.5 to 4.5 hours).</p>
<p style="margin-top:12px;"><strong>India compliance calendar:</strong> TDS deposit by 7th of next month, EPF and ESI by 15th of next month, professional tax monthly per state schedule, Form 24Q quarterly. Patron tracks all in one calendar with SG client visibility via monthly status report.</p>
<p style="margin-top:12px;"><strong>Singapore regulatory cadence:</strong> PDPC guidance updates approximately quarterly, MAS supervisory cycles annual with material-change updates within 30 days, DPDP Board notifications as issued. Patron's six-monthly update cycle captures all material changes.</p>

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
            <h2 class="section-title">Benefits of CA-Led EOR India for Singapore Companies</h2>
        </div>
        <div class="features-grid">
  <div class="feature-card">
    <div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 2L4 6v6c0 5.55 3.84 10.74 8 12 4.16-1.26 8-6.45 8-12V6l-8-4z"/><path d="M9 12l2 2 4-4"/></svg></div>
    <h3>Article 5 SG-India DTAA PE firewall</h3>
    <p>Article 5 tested at MSA level (1994 + 2005 + 2011 + 2017 Protocols), Service PE 90-day tracker, Dependent Agent PE memo. Quarterly check-ins for SG-staff travel days.</p>
  </div>
  <div class="feature-card">
    <div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><polyline points="12 6 12 12 16 14"/></svg></div>
    <h3>Speed: 5 to 10 days vs 4 to 6 months</h3>
    <p>5 to 10 days from offer to Day 1 versus 4 to 6 months for entity setup. Critical for time-sensitive APAC HQ engineering hires.</p>
  </div>
  <div class="feature-card">
    <div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><line x1="12" y1="1" x2="12" y2="23"/><path d="M17 5H9.5a3.5 3.5 0 000 7h5a3.5 3.5 0 010 7H6"/></svg></div>
    <h3>Cost: SGD 169-269 PEPM vs SGD 20-40K setup</h3>
    <p>SGD 169 to 269 per employee per month versus SGD 20,000 to 40,000 entity setup plus ongoing overhead. Break-even at 25-30 employees.</p>
  </div>
  <div class="feature-card">
    <div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M14 2H6a2 2 0 00-2 2v16a2 2 0 002 2h12a2 2 0 002-2V8z"/><path d="M14 2v6h6M16 13H8M16 17H8"/></svg></div>
    <h3>PDPA Section 26 + DPDP Act 2023 dual compliance</h3>
    <p>Dual-clause DPA satisfying both PDPC 'comparable standard of protection' and DPDP Section 16 negative list. Six-monthly updates per PDPC and DPDP Board cycles.</p>
  </div>
  <div class="feature-card">
    <div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 16V8a2 2 0 00-1-1.73l-7-4a2 2 0 00-2 0l-7 4A2 2 0 003 8v8a2 2 0 001 1.73l7 4a2 2 0 002 0l7-4A2 2 0 0021 16z"/><line x1="3.27" y1="6.96" x2="12" y2="12.01"/><line x1="12" y1="22.08" x2="12" y2="12"/></svg></div>
    <h3>MAS Outsourcing Guidelines support</h3>
    <p>Pre-built compliance package for SG-licensed FIs (banks, capital markets, payments under PS Act 2019, insurers, FMCs). Supported through MAS supervisory inquiries.</p>
  </div>
  <div class="feature-card">
    <div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="14 2 14 8 20 8"/><path d="M16 13H8M16 17H8M10 9H8"/><path d="M14 2H6a2 2 0 00-2 2v16a2 2 0 002 2h12a2 2 0 002-2V8z"/></svg></div>
    <h3>IST/SGT 2.5h overlap + Indian-origin founder familiarity</h3>
    <p>Near-identical workday with 6-8 hours of real-time overlap. 'What's changed since you last operated in India' briefing for Indian-origin SG founders. SGD-denominated pricing.</p>
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
                
                <p style="font-size:15px;color:var(--blue);font-weight:600;">10,000+ Businesses Served | 4.9 Google Rating | 50,000+ Documents | 25+ Singapore-headquartered EOR engagements | 15+ Years</p>
<h3 style="color:var(--blue);margin-top:24px;">Testimonials</h3>
<p>"Extremely great, knowledgeable person who deserves 5 stars for smooth and quick handling." - Nishikant Gurav, Google Review</p>
<p>"Took minimum time, really impressive acumen. And it's not expensive at all." - Rajib Dutta, Google Review</p>
<h3 style="color:var(--blue);margin-top:24px;">Outcome Proof - Singapore Pte Ltd Founded by Indian-Origin Founders</h3>
<p>One Singapore Pte Ltd founded by Indian-origin founders saved an estimated SGD 32,000 in entity-setup and first-year overhead costs by hiring 9 Indian engineers through Patron's EOR over 11 months. Additionally cleared a MAS supervisory query on outsourcing arrangements in 21 days when their parent payments-institution licence holder requested India operational evidence - Patron's pre-built MAS Outsourcing compliance package was on file ready for inspection.</p>
<h3 style="color:var(--blue);margin-top:24px;">Trusted Across Singapore</h3>
<p>Trusted by 25+ Singapore-headquartered companies running India teams - global APAC SaaS firms, Indian-origin founders who incorporated in Singapore for capital-raising and ASEAN gateway, MAS-licensed payments institutions, and Singapore-listed enterprises piloting India presence. Plus 10,000+ Indian SMBs and enterprise clients including Hyundai, Asian Paints, and Bridgestone.</p>
<p style="margin-top:16px;font-size:14px;color:var(--text-muted);"><em>With offices in Pune, Mumbai, Delhi, and Gurugram, Patron Accounting serves businesses across India - both in-person and remotely. Singapore clients work with us entirely remotely with overlap-window scheduling that the IST/SGT 2.5-hour offset makes natural.</em></p>

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
                    <thead><tr><th>Criterion</th><th>Generic EOR Platform (Multiplier, Deel)</th><th>Patron CA-Led EOR</th><th>India Entity Setup</th></tr></thead>
                    <tbody>
                        <tr><td>Onboarding speed</td><td>2 to 7 days</td><td><span class="badge-included">5 to 10 days</span></td><td>16 to 24 weeks</td></tr>
                        <tr><td>Per-employee fee</td><td>SGD 250 to 800 / month</td><td><span class="badge-included">SGD 169 to 269 / month</span></td><td>SGD 0 (after setup)</td></tr>
                        <tr><td>Setup cost</td><td>Zero</td><td><span class="badge-included">Zero</span></td><td>SGD 20,000 to 40,000</td></tr>
                        <tr><td>PE risk advisory</td><td>Generic boilerplate clause</td><td><span class="badge-included">Article 5 SG-India DTAA memo + 2017 Third Protocol + quarterly review</span></td><td>Inherent (you have a PE)</td></tr>
                        <tr><td>PDPA + DPDP DPA</td><td>Generic SCC</td><td><span class="badge-included">Dual-clause PDPA Sec 26 + DPDP Sec 16 DPA + 6-monthly update</span></td><td>In-house (you handle)</td></tr>
                        <tr><td>MAS Outsourcing support</td><td>Rare; usually outsourced</td><td><span class="badge-included">Pre-built compliance package + audit support</span></td><td>In-house</td></tr>
                        <tr><td>Indian-origin founder briefing</td><td>None</td><td><span class="badge-included">'What's changed' briefing + tailored guidance</span></td><td>In-house</td></tr>
                        <tr><td>Direct CA contact</td><td>Tier-1 / Tier-2 routing</td><td><span class="badge-included">Direct CA + onboarding manager</span></td><td>Internal team</td></tr>
                        <tr><td>India tax filing depth</td><td>Outsourced to local CA partner</td><td><span class="badge-included">In-house Patron CA team</span></td><td>Internal team</td></tr>
                        <tr><td>Currency</td><td>Mixed (USD/SGD)</td><td><span class="badge-included">SGD throughout</span></td><td>INR direct</td></tr>
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
                
                <p>Patron's broader portfolio that Singapore EOR clients typically use as they scale:</p>
<ul>
  <li>For other jurisdiction-specific EOR pages, see <a href="/eor-india-for-us-companies">EOR India for US Companies</a>, <a href="/eor-india-for-uk-companies">EOR India for UK Companies</a>, <a href="/eor-india-for-european-companies">EOR India for European Companies</a>, and <a href="/eor-india-for-australian-companies">EOR India for Australian Companies</a>.</li>
  <li>For vertical-specific EOR engagements: <a href="/eor-india-for-saas-companies">EOR India for SaaS Companies</a>, <a href="/eor-india-for-fintechs">EOR India for Fintech</a>, <a href="/eor-india-for-ai-companies">EOR India for AI Companies</a>, <a href="/eor-india-for-tech-startups">EOR India for Tech Startups</a>.</li>
  <li>For team-type EOR engagements: <a href="/eor-india-engineering-team">EOR India engineering team</a>, <a href="/eor-india-customer-support-team">EOR India customer support team</a>.</li>
  <li>For decision frameworks and vendor comparisons: <a href="/eor-india-vs-india-entity-setup">EOR vs Pvt Ltd Decision Framework</a>, <a href="/best-eor-providers-india-2026">Best EOR Providers India 2026</a>, <a href="/eor-india-vs-deel">Deel Alternative India</a>.</li>
  <li><a href="/payroll-services">Payroll Processing and Management Services</a> - End-to-end monthly INR payroll with TDS, PF, ESI, gratuity.</li>
  <li><a href="/private-limited-company-registration">Private Limited Company Registration</a> - Indian subsidiary incorporation under Companies Act 2013 via MCA SPICe+ when scaling past 25-30 employees.</li>
  <li><a href="/llp-incorporation">LLP Incorporation</a> - Limited Liability Partnership formation for Singapore parents preferring LLP structure.</li>
  <li><a href="/tds-return-filing-24q">TDS Return Filing 24Q</a> - Form 24Q quarterly TDS returns and Form 16 issuance under Section 192 IT Act.</li>
  <li><a href="/payroll-services-for-it-software">Payroll Services for IT and Software Industry</a> - Specialised payroll for tech-sector compensation structures.</li>
  <li><a href="/itr-for-companies">ITR for Companies</a> - Annual income-tax return filing for Indian subsidiaries.</li>
  <li><a href="/tax-audit">Tax Audit under Section 44AB</a> - Statutory tax audit for Indian entities crossing turnover thresholds.</li>
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
                
                <h3 style="color:var(--blue);margin-top:8px;">SG-India DTAA - Key Articles</h3>
<div class="table-responsive-wrapper">
<table>
  <thead><tr><th>Article</th><th>Coverage</th><th>EOR Relevance</th></tr></thead>
  <tbody>
    <tr><td>Article 5 (Permanent Establishment)</td><td>PE = fixed place of business. Article 5(3) sets construction/installation/assembly threshold at 183 days. Article 5(6)(a) creates Service PE if SG employees provide services in India for more than 90 days within a fiscal year. Article 5(8)(a) covers dependent agents with binding-contract authority.</td><td>Core PE-firewall provision. Patron tracks both Service PE (SG-staff days in India) and Dependent Agent PE (Indian employee scope of authority).</td></tr>
    <tr><td>Article 7 (Business Profits)</td><td>Business profits of a Singapore enterprise are taxable only in Singapore unless the enterprise carries on business through a PE in India.</td><td>Confirms no Indian taxation of SG parent if PE is properly avoided via Article 5 firewall.</td></tr>
    <tr><td>Article 15 (Dependent Personal Services)</td><td>Salaries earned by a Singapore-resident employee are taxable only in Singapore unless the employment is exercised in India.</td><td>Indian-resident EOR employees working in India are taxed in India under Section 192 IT Act 1961.</td></tr>
    <tr><td>Article 23 (Elimination of Double Taxation)</td><td>Singapore eliminates double tax through exemption (Indian-source income with PE attribution exempted) or credit (Foreign Tax Credit for Indian tax paid). India exempts SG-PE earnings.</td><td>Singapore's 17 percent corporate tax versus India's 30 percent matters when planning where economic activity sits.</td></tr>
  </tbody>
</table>
</div>
<p style="margin-top:16px;"><strong>Treaty timeline:</strong> Signed 24 January 1994, in force 27 May 1994. Modified by 2005 Second Protocol (effective 1 August 2005), 2011 Protocol amendment (effective 1 September 2011), 2017 Third Protocol (signed 30 December 2016, effective 1 April 2017) plus BEPS MLI. <strong>Third Protocol 2017 capital gains transition:</strong> Capital gains exemption for SG-resident sellers of Indian shares phased out for shares acquired post 1 April 2017; transition period 1 April 2017 to 31 March 2019 at 50 percent domestic rate; full domestic rate from 1 April 2019. <strong>TRC requirement:</strong> Singapore tax residents must obtain a Tax Residency Certificate from IRAS to claim DTAA benefits in India.</p>

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
    <tr><td>RBI / AD-Cat-I bank</td><td>FEMA 1999 + RBI Master Direction</td><td>Form A2 inward remittance in SGD, FIRC, purpose code P0802 / P1006</td></tr>
    <tr><td>PDPC (Singapore side)</td><td>Personal Data Protection Act 2012 (PDPA)</td><td>Section 26 cross-border transfer with comparable standard of protection; breach notification 3 days</td></tr>
    <tr><td>Indian Data Protection Board</td><td>Digital Personal Data Protection Act 2023 + DPDP Rules 2025</td><td>Section 16 negative list, Rule 15 cross-border transfer</td></tr>
    <tr><td>MAS (where applicable)</td><td>MAS Outsourcing Guidelines (Oct 2018) + Technology Risk Management Guidelines</td><td>Outsourcing register, due diligence, audit rights, BCP, MAS notification for material outsourcing</td></tr>
    <tr><td>MCA</td><td>Companies Act 2013</td><td>Patron Accounting LLP filings (LLP-11, LLP-8) for the EOR entity itself</td></tr>
  </tbody>
</table>
</div>
<p style="margin-top:16px;"><strong>Penalty snapshot:</strong> Misclassification of consultant as employee triggers backdated EPF, ESI, gratuity, leave encashment, TDS for 3 to 7 years. PE re-characterisation attributes SG parent global profit to India plus interest under Sec 234A/B/C plus penalty under Sec 270A (50% / 200%). PDPA violation: PDPC penalties up to 10 percent of annual turnover (since 1 October 2022 amendment). DPDP Act violation: penalties up to Rs 250 crore. MAS Outsourcing breach: regulatory censure, monetary penalty, licence conditions.</p>
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
                    <p class="faq-expanded__lead">Real questions from Singapore Pte Ltd companies (APAC HQ firms, Indian-origin founders, MAS-licensed FIs, listed enterprises) evaluating EOR India structures. Drawn from Google PAA and Patron client mandates.</p>
                    @include('partials.bigin-form', [
                        'variant'  => 'compact',
                        'service'  => 'EOR India for Singapore Companies',
                    ])
                </aside>
                <div class="faq-expanded__list">
                    <div class="faq-expanded__item" id="faq-1">
                        <h3 class="faq-expanded__q">Can a Singapore company hire employees in India without a local entity?</h3>
                        <div class="faq-expanded__a"><p>Yes. Through an Employer of Record like Patron Accounting LLP, the Singapore Pte Ltd avoids setting up an Indian subsidiary. Patron becomes the legal employer in India, issues Indian employment contracts, runs INR payroll, files EPF, ESI, Professional Tax, and TDS under Section 192. The Singapore parent retains functional control over the work and IP via the Master Services Agreement. EOR is the compliant alternative to misclassifying full-time staff as independent consultants, which creates Permanent Establishment risk under Article 5 of the SG-India DTAA.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-2">
                        <h3 class="faq-expanded__q">Will using EOR in India create Permanent Establishment risk for the Singapore parent?</h3>
                        <div class="faq-expanded__a"><p>Properly structured EOR shields the Singapore parent from PE under Article 5 of the SG-India DTAA. Patron is the principal Indian employer; the SG client has no fixed place of business in India. Two PE risks need active monitoring: Article 5(8)(a) Dependent Agent PE if Indian employees exercise concluding-contract authority, and Article 5(6)(a) Service PE if Singapore-based staff provide services in India for more than 90 days within a fiscal year. Patron's PE-firewall memo factors both.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-3">
                        <h3 class="faq-expanded__q">How does the Singapore-India DTAA help with hiring Indian employees?</h3>
                        <div class="faq-expanded__a"><p>The SG-India DTAA was signed 24 January 1994, in force 27 May 1994, modified by the 2005 Second Protocol, the 2011 Protocol amendment, and the 2017 Third Protocol (effective 1 April 2017), plus BEPS MLI. Article 5 defines PE with a 183-day construction threshold and a 90-day Service PE threshold under 5(6)(a). Article 7 allocates business profits. Article 23 eliminates double taxation via exemption or credit method. Singapore residents need a Tax Residency Certificate from IRAS to claim treaty benefits.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-4">
                        <h3 class="faq-expanded__q">How does Singapore PDPA interact with India DPDP Act 2023 for employee data?</h3>
                        <div class="faq-expanded__a"><p>Singapore's PDPA Section 26 requires the foreign recipient to be bound by 'a comparable standard of protection' for cross-border transfers - typically through contractual safeguards. India's DPDP Act 2023 Section 16 + Rule 15 (DPDP Rules 2025) follows a 'negative list' approach - transfers permitted unless Central Government restricts. Patron handles both via dual-clause Data Processing Addendum, with six-monthly updates as PDPC guidance and Indian DPB notifications evolve. Different breach-notification timelines: 3 days under PDPA versus 'as soon as practicable' under DPDP.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-5">
                        <h3 class="faq-expanded__q">Are there MAS regulatory considerations when SG-licensed firms hire Indian back-office?</h3>
                        <div class="faq-expanded__a"><p>Yes. If the Singapore client is a MAS-licensed financial institution (bank, capital markets services licensee, payments institution under PS Act 2019, insurer, fund management company), MAS Outsourcing Guidelines (revised October 2018) and Technology Risk Management Guidelines apply. Requirements include due diligence on the service provider, written agreement with audit and inspection rights, business continuity, sub-outsourcing controls, and MAS notification for material outsourcing. Patron offers a pre-built MAS Outsourcing compliance package as a paid add-on for licensed FI clients.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-6">
                        <h3 class="faq-expanded__q">What is the cost of EOR in India for Singapore companies in SGD?</h3>
                        <div class="faq-expanded__a"><p>Patron's EOR pricing in SGD: Starter (1 to 4 employees) SGD 269 PEPM. Growth (5 to 14) SGD 199. Scale (15 to 30) SGD 169 with quarterly PE-risk review. MAS-licensed FI add-on SGD 99/month base + SGD 49/employee for Outsourcing Guidelines compliance. Enterprise (31+) is custom with migration plan to Indian Pvt Ltd. Employee CTC, employer EPF, ESI, gratuity provision billed at cost. Generic EOR platforms typically charge SGD 250 to 800 per employee per month.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-7">
                        <h3 class="faq-expanded__q">Is the time-zone alignment between Singapore and India helpful for distributed teams?</h3>
                        <div class="faq-expanded__a"><p>Yes. India Standard Time is only 2.5 hours behind Singapore Time - the smallest offset of any major foreign-EOR jurisdiction. A 9 AM-to-6 PM workday in Singapore corresponds to 6:30 AM-to-3:30 PM in India; the standard Indian workday of 9:30 AM-to-6:30 PM IST overlaps with 12:00 PM-to-9:00 PM SGT, giving 6 to 8 hours of real-time overlap. This is significantly better than US (8 to 12 hours offset, asynchronous workflow needed) or UK (3.5 to 4.5 hours).</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-8">
                        <h3 class="faq-expanded__q">When should Singapore companies migrate from EOR to setting up an Indian subsidiary?</h3>
                        <div class="faq-expanded__a"><p>Break-even is typically 25 to 30 full-time employees. Below that, EOR is more cost-effective than maintaining an India entity with finance and HR overhead. Above 25 to 30, the per-employee EOR fee crosses entity-overhead break-even. Other migration triggers: invoicing Indian customers in INR, raising Series A/B with investors requiring local entity, opening a physical office, long-term commitment of 5+ years. Patron handles entity setup and seamless EOR-to-subsidiary transfer when the time comes.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-9">
                        <h3 class="faq-expanded__q">Singapore company India employee kaise hire kare bina entity ke?</h3>
                        <div class="faq-expanded__a"><p>Singapore Pte Ltd companies bina Indian subsidiary ke Indian employees hire kar sakti hain Employer of Record (EOR) ke through. Patron Accounting LLP legal employer ban jaata hai India mein - Indian employment contract issue karta hai, INR payroll chalata hai, EPF, ESI, Professional Tax, TDS file karta hai. SG parent kaam aur IP par functional control retain karta hai Master Services Agreement ke through. 5-10 din mein onboarding complete. SGD 199 per employee per month se starting. Dual PDPA + DPDP Act 2023 compliance. PE-risk firewall under Article 5 SG-India DTAA. MAS Outsourcing support for licensed FIs.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-10">
                        <h3 class="faq-expanded__q">How does the dual PDPA + DPDP DPA work for SG-licensed FI clients?</h3>
                        <div class="faq-expanded__a"><p>Patron issues a dual-clause Data Processing Addendum that satisfies both regimes. Singapore side covers PDPA Section 26 'comparable standard of protection' through contractual safeguards binding Patron and Indian employees to PDPA-equivalent privacy practices. India side covers DPDP Act 2023 Section 16 negative list and Rule 15 of DPDP Rules 2025. For MAS-licensed FIs, the DPA is supplemented by MAS Outsourcing Guidelines compliance package - DD questionnaire, audit rights, BCP, sub-outsourcing register, MAS notification template. Six-monthly updates per PDPC and DPDP Board cycles.</p></div>
                    </div>
                </div>
            </div>


            <!-- Quick Answers -->
            <div class="highlight-box" style="margin-top:32px;">
                <p><strong>Quick Answers</strong></p>
                <p><strong>Can Singapore companies hire Indian employees without an Indian entity?</strong> Yes - via Employer of Record. Patron is legal employer in India; SG parent retains functional control via MSA.</p>
<p><strong>What is the SGD price?</strong> SGD 269 PEPM (1-4), SGD 199 PEPM (5-14), SGD 169 PEPM (15-30), MAS-FI add-on SGD 99/mo + SGD 49/emp, Enterprise custom (31+).</p>
<p><strong>Does EOR create PE risk for the SG parent?</strong> No - properly structured. Article 5 SG-India DTAA tested. Service PE 90-day tracker for SG staff days in India. Quarterly check-ins.</p>
<p><strong>How does PDPA + DPDP Act 2023 dual compliance work?</strong> Dual-clause DPA with PDPA Section 26 'comparable standard of protection' + DPDP Section 16 negative list + Rule 15. Six-monthly updates.</p>
<p><strong>Are there MAS considerations?</strong> Yes - MAS Outsourcing Guidelines (Oct 2018) + TRMG apply to SG-licensed FIs. Patron offers pre-built compliance package.</p>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 18: URGENCY CTA -->
<section class="content-section" style="background: var(--orange-lighter) !important; border-left: 4px solid var(--orange);">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">India Compliance Deadlines + Singapore Regulatory Updates Are Continuous</h2>
            <div class="content-text">
                
                <p>Indian statutory deadlines and Singapore regulatory cycles run in parallel for SG-EOR engagements. Patron's compliance calendar tracks both.</p>
<div class="table-responsive-wrapper">
<table>
  <thead><tr><th>Compliance</th><th>Deadline</th><th>Penalty / Authority</th></tr></thead>
  <tbody>
    <tr><td>TDS on Salary (Section 192 IT Act)</td><td>7th of next month</td><td>1.5 percent monthly interest under Section 201(1A) IT Act</td></tr>
    <tr><td>EPF (12 percent on basic up to Rs 15,000)</td><td>15th of next month</td><td>12 percent annual interest under Section 7Q EPF Act; damages 5-25 percent under Section 14B</td></tr>
    <tr><td>ESI (3.25 percent on gross up to Rs 21,000)</td><td>15th of next month</td><td>12 percent annual interest; damages up to 25 percent under Section 85B ESI Act</td></tr>
    <tr><td>Form 24Q (Quarterly TDS Return)</td><td>31 July, 31 Oct, 31 Jan, 31 May</td><td>Late fee Rs 200/day under Section 234E; up to Rs 1 lakh under Section 271H</td></tr>
    <tr><td>Form 16 issuance</td><td>15 June</td><td>Section 272A penalty for default</td></tr>
    <tr><td>PDPA breach notification</td><td>Within 3 days under PDPA</td><td>PDPC penalties up to 10 percent of annual turnover</td></tr>
    <tr><td>MAS material outsourcing notification</td><td>Within material change window</td><td>MAS regulatory censure, monetary penalty, licence conditions</td></tr>
    <tr><td>Six-monthly PDPA + DPDP regulatory update</td><td>Aligned with PDPC and DPDP Board cycles</td><td>PDPC / Indian DPB</td></tr>
  </tbody>
</table>
</div>
<p style="margin-top:16px;"><strong>Speak with a Patron CA today (SG/IST overlap hours):</strong> <a href="tel:+919459456700">Call +91 945 945 6700</a> | <a href="https://wa.me/919459456700?text=Hello%2C%20I%20just%20visited%20your%20Eor%20India%20for%20Singapore%20Companies%20page.%20I%20would%20like%20to%20know%20more%20about%20it." target="_blank" rel="noopener">WhatsApp +91 945 945 6700</a> | <a href="mailto:contact@patronaccounting.com?subject=Enquiry%20for%20EOR%20India%20-%20Singapore%20Company&body=Hello%20Patron%20Accounting%20Team%2C%0A%0AWe%20are%20a%20Singapore-headquartered%20company%20looking%20to%20hire%20Indian%20talent%20via%20EOR.%20Please%20share%20a%20discovery%20call%20slot%20in%20SGT-IST%20overlap%20hours%2C%20along%20with%20an%20SGD-priced%20proposal%2C%20PE-risk%20firewall%20notes%20under%20Article%205%20SG-India%20DTAA%2C%20and%20PDPA%2BDPDP%20Data%20Processing%20Addendum%20template.%0A%0AThank%20you.">Email contact@patronaccounting.com</a>. We respond within 4 business hours, India or Singapore time.</p>

            </div>
        </div>
    </div>
</section>

<!-- CONCLUSION + CTA BLOCK (Dark) -->
<section class="content-section" style="background: var(--blue) !important;">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title" style="color:#FFFFFF !important;">EOR India for SG Companies: Speed + Article 5 Firewall + PDPA/DPDP Dual Compliance + MAS Support + SGD Pricing</h2>
            <div class="content-text" style="text-align:left;">
                
                <p>Singapore Pte Ltd companies hiring Indian talent operate in a structurally favourable environment. The SG-India DTAA (1994 + 2005 + 2011 + 2017 Third Protocols + BEPS MLI) gives the SG parent a defensible PE-firewall position under Article 5 if structured correctly. The 183-day construction PE threshold and 90-day Service PE threshold under Article 5(6)(a) need active monitoring. Singapore's PDPA Section 26 plus India's DPDP Act 2023 require dual-regime data protection handling. For MAS-licensed FIs, the Outsourcing Guidelines (revised October 2018) and TRMG add a regulatory layer.</p>
<p>Patron Accounting LLP's EOR India service is built specifically for this complexity. We have run 25+ Singapore-headquartered EOR engagements - global APAC SaaS firms, Indian-origin founders who incorporated in Singapore, MAS-licensed payments institutions, and Singapore-listed enterprises. CA-led depth on the four Labour Codes, EPF / ESI / Professional Tax, monthly TDS Section 192, Article 5 SG-India DTAA navigation including 2017 Third Protocol modifications, dual PDPA + DPDP Act 2023 Data Processing Addendum, MAS Outsourcing Guidelines compliance package for licensed FIs, and FEMA-compliant inward SGD remittance via Form A2.</p>
<p>5 to 10 days from offer to Day 1. SGD 199 per employee per month from 5+ headcount. Article 5 PE firewall. Dual PDPA + DPDP DPA. MAS support. IST/SGT 2.5-hour offset gives near-identical workday with 6-8 hours of real-time overlap. 'What's changed' briefing for Indian-origin SG founders.</p>
<p>10,000+ Businesses Served | 4.9 Google Rating | 25+ Singapore Engagements | APAC HQ + Indian-Origin Founders + MAS-Licensed FIs</p>

            </div>
            <div style="display:flex;gap:14px;flex-wrap:wrap;margin-top:24px;">
                <a href="tel:+919459456700" style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:var(--orange);color:#fff;border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#128222; Call +91 945 945 6700</a>
                <a href="https://wa.me/919459456700?text=Hello%2C%20I%20just%20visited%20your%20Eor%20India%20for%20Singapore%20Companies%20page.%20I%20would%20like%20to%20know%20more%20about%20it." target="_blank" style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:#25D366;color:#fff;border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;" rel="noopener">&#128172; WhatsApp Us</a>
                <a href="mailto:contact@patronaccounting.com?subject=Enquiry%20for%20EOR%20India%20-%20Singapore%20Company&body=Hello%20Patron%20Accounting%20Team%2C%0A%0AWe%20are%20a%20Singapore-headquartered%20company%20looking%20to%20hire%20Indian%20talent%20via%20EOR.%20Please%20share%20a%20discovery%20call%20slot%20in%20SGT-IST%20overlap%20hours%2C%20along%20with%20an%20SGD-priced%20proposal%2C%20PE-risk%20firewall%20notes%20under%20Article%205%20SG-India%20DTAA%2C%20and%20PDPA%2BDPDP%20Data%20Processing%20Addendum%20template.%0A%0AThank%20you." style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:transparent;color:#fff;border:2px solid rgba(255,255,255,0.3);border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#9993;&#65039; Email Us</a>
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
            <p style="text-align:center;color:var(--text-muted);font-size:15px;margin-bottom:40px;">Patron operates EOR India structures for foreign-headquartered companies across the US, UK, Europe, Australia, and Singapore - each with jurisdiction-specific DTAA, PE, and data-protection considerations.</p>
        
            <div class="pa-city-block">
                    <div class="pa-block-title">EOR India for Other Jurisdictions and Decision Services</div>
                    <div class="pa-block-sub">Sister-pages for jurisdiction-specific EOR engagements and the EOR-vs-Pvt-Ltd decision framework</div>
                    <div class="pa-cross-grid">
                        <a href="/eor-india-for-us-companies" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">EOR India for US</div><div class="pa-card-sub">India</div></div></a>
                        <a href="/eor-india-for-uk-companies" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">EOR India for UK</div><div class="pa-card-sub">India</div></div></a>
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
            <p>This page is reviewed quarterly (Tier 1) given the active DPDP Rules implementation, PDPC guidance updates, MAS supervisory cycles, ongoing labour-code state implementation, and EPF/ESI threshold changes. Last reviewer: CA & CS Team, Patron Accounting LLP.</p>
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
