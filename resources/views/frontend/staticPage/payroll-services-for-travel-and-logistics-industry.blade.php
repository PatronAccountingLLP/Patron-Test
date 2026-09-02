
@extends('layouts.service-app')

<!-- External Dependencies (loaded by master layout in production) -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Barlow:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,400&family=DM+Sans:opsz,wght@9..40,400;9..40,500;9..40,600;9..40,700&display=swap" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

@section('meta')
    <title>Travel & Logistics Payroll Services - PF, ESI & Multi-PT</title>
    <meta name="description" content="Payroll for logistics, transport and warehousing companies. EPF, ESI, TDS, CLRA compliance, driver allowances and multi-state wages. From INR 500 per employee.">
    <link rel="canonical" href="/payroll-services-for-travel-and-logistics-industry">
    <meta name="robots" content="index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1">
    <meta property="og:title" content="Travel & Logistics Payroll Services - PF, ESI & Multi-PT">
    <meta property="og:description" content="Payroll for logistics, transport and warehousing companies. EPF, ESI, TDS, CLRA compliance, driver allowances and multi-state wages. From INR 500 per employee.">
    <meta property="og:url" content="/payroll-services-for-travel-and-logistics-industry">
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="Patron Accounting">
    <meta property="og:image" content="https://www.patronaccounting.com/images/og-default-square.png">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="1200">
    <meta property="og:image:type" content="image/png">
    <meta property="og:image:secure_url" content="https://www.patronaccounting.com/images/og-default-square.png">
    <meta property="og:image:alt" content="Patron Accounting - partner you can rely on">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Travel & Logistics Payroll Services - PF, ESI & Multi-PT">
    <meta name="twitter:description" content="Payroll for logistics, transport and warehousing companies. EPF, ESI, TDS, CLRA compliance, driver allowances and multi-state wages. From INR 500 per employee.">
    <meta name="twitter:image" content="https://www.patronaccounting.com/images/og-default-square.png">
@endsection

@section('schema')
    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@graph": [
        {
          "@type": "Service",
          "name": "Logistics Payroll Services",
          "description": "Payroll for logistics, transport and warehousing companies. EPF, ESI, TDS, CLRA compliance, driver allowances and multi-state wages. From INR 500 per employee.",
          "url": "https://www.patronaccounting.com/payroll-services-for-travel-and-logistics-industry",
          "serviceType": "Logistics Payroll Services",
          "areaServed": {
            "@type": "Country",
            "name": "India"
          },
          "provider": {
            "@type": "Organization",
            "name": "Patron Accounting LLP",
            "url": "https://www.patronaccounting.com/",
            "logo": "https://www.patronaccounting.com/images/site-logo.svg"
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
              "name": "Logistics Payroll Services",
              "item": "https://www.patronaccounting.com/payroll-services-for-travel-and-logistics-industry"
            }
          ]
        },
        {
          "@type": "FAQPage",
          "mainEntity": [
            {
              "@type": "Question",
              "name": "Does the Motor Transport Workers Act apply to my transport company?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "Yes, if you operate a motor transport undertaking and employ 5 or more motor transport workers, the Motor Transport Workers Act, 1961 (Act No. 27 of 1961) applies. You must register your undertaking, maintain registers for hours of work and spread-over, ensure rest periods and annual leave with wages, provide first-aid facilities, and comply with prescribed working conditions. Non-compliance attracts penalties under Section 29 of the Act."
              }
            },
            {
              "@type": "Question",
              "name": "Are owner-cum-drivers considered employees for PF and ESI purposes?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "Not necessarily. If an owner-cum-driver genuinely owns the vehicle and undertakes transport on a trip or kilometre basis, they are typically independent contractors and EPF/ESI does not apply. However, TDS under Section 194C of the Income Tax Act applies to freight payments - 1% for individual/HUF payees and 2% for company/firm payees when aggregate exceeds Rs 30,000 per contract or Rs 1,00,000 per year. Patron manages Section 194C registers, Form 26Q, and Form 16A."
              }
            },
            {
              "@type": "Question",
              "name": "How is multi-state payroll managed for logistics companies with depots across India?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "Each state requires compliance with its own minimum wage schedule for transport workers, Professional Tax registration and deduction, LWF contributions, and Shops and Establishments Act requirements. Patron maintains a state-wise compliance calendar for all depot locations. When states revise minimum wages (typically every 6-12 months), we update all affected salary records within 30 days of gazette notification."
              }
            },
            {
              "@type": "Question",
              "name": "What is CLRA compliance and why does it matter for logistics companies?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "The Contract Labour (Regulation and Abolition) Act, 1970 applies if you engage 20 or more contract workers through contractors or staffing vendors. As principal employer, you must register, verify contractor licences, ensure welfare facilities, and file half-yearly returns (Form XXIV by July 30 and January 30) and annual return (Form XXV by February 15). If a contractor defaults on EPF or ESI, the principal employer becomes liable under Section 20 of CLRA."
              }
            },
            {
              "@type": "Question",
              "name": "How are driver batta and trip allowances treated for ESI and PF?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "Trip-specific batta and halting allowances genuinely tied to travel and reimbursed against actual cost are generally excluded from ESI wages under Section 2(22) of the ESI Act. Under the Code on Wages, 2019, allowances not part of defined wages are excluded from PF computation, but collectively cannot exceed 50% of total remuneration. If paid as fixed monthly component, they are included in both ESI and PF. Our CA team reviews your allowance structure for compliant configuration. Quick Answers EPF rate for logistics employees? 12% employee + 12% employer on basic+DA; deposit by 15th; mandatory for 20+ employees. EPS portion capped at Rs 15,000/month wages. Transport company mein payroll kaise kare? Logistics company ka payroll manage karne ke liye driver ka batta, trip allowance, night run aur overtime sab sahi se calculate karna zaroori hai. Motor Transport Workers Act compliance bhi mandatory hai 5+ workers ke liye. Patron Accounting INR 500/employee/month se complete logistics payroll handle karta hai. Is Section 194C TDS applicable on freight payments? Yes - 1% for individual/HUF owner-drivers, 2% for companies on freight above Rs 30,000 per contract or Rs 1,00,000 per year. Form 26Q quarterly; Form 16A annually."
              }
            }
          ]
        }
      ]
    }
    </script>
@endsection

@section('content')
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
                        Payroll Services for Logistics and Transport Companies in India
                    </h1>

                    <div class="expert-attribution-box">
                        <span class="eab-check"><svg width="16" height="16" viewBox="0 0 24 24" fill="currentColor"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg></span>
                        <span class="eab-title">Reviewed by CA and CS Team, Patron Accounting LLP</span>
                        <span class="eab-meta">
                            <span>ICAI & ICSI Registered</span><span class="eab-sep">|</span>
                            <span>15+ Years Experience</span><span class="eab-sep">|</span>
                            <span>Last Updated: <span id="lastUpdated">15 January 2024</span></span>
                        </span>
                        <a href="/authorhub/ca-sundram-gupta" class="eab-link">Verify Credentials &rarr;</a>
                    </div>

                    <div class="mb-4">
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Full Statutory Compliance:</span> EPF, ESI, TDS, PT, LWF for drivers, warehouse staff, helpers and office personnel across all operating states</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Driver Allowances:</span> Trip allowance, batta, night run pay, halting allowance, overtime - all computed and documented compliantly for ESI/PF/TDS</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Multi-State Payroll:</span> Separate minimum wages, Professional Tax slabs and LWF rules managed state-by-state across all depot locations</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>CLRA Principal Employer Compliance:</span> Contract labour EPF/ESI verification, Form V registration, half-yearly returns for fleet operators and 3PLs</p>
                        </div>
                    </div>

                    <p class="mb-4 fw-bold" style="color: var(--blue); font-size: 15px;">300+ logistics clients | Pan-India multi-state coverage | Motor Transport Act expertise | 4.8 star rating</p>

                    <div class="hero-cta">
                        <a href="tel:+919459456700" class="btn-video text-decoration-none">
                            <span class="play-circle"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="width:14px;height:14px;color:#fff"><path d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/></svg></span>
                            Call +91 945 945 6700
                        </a>
                        <a href="mailto:sales@patronaccounting.com?subject=Enquiry%20for%20Logistics%20Payroll&body=Hello%2C%0A%0AI%20need%20transport%20payroll%20support.%0A%0AThank%20you." class="btn-sample text-decoration-none">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="width:18px;height:18px;"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,12 2,6"/></svg>
                            Email Us
                        </a>
                        <a href="https://wa.me/919459456700?text=Hi%2C%20I%20need%20help%20with%20Logistics%20Payroll%20Services.%20Please%20share%20details." target="_blank" class="btn-sample text-decoration-none" rel="noopener">
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
                                            'service'  => 'Logistics and Transport Payroll',
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
    'ctaText'    => 'Join 300+ logistics companies with CA-managed payroll compliance from Patron Accounting.',
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
            <a href="#overview-section" class="toc-btn active">Overview</a><a href="#what-section" class="toc-btn">Complexity</a><a href="#who-section" class="toc-btn">Workforce</a><a href="#services-section" class="toc-btn">Compliance</a><a href="#procedure-section" class="toc-btn">Process</a><a href="#documents-section" class="toc-btn">Documents</a><a href="#challenges-section" class="toc-btn">Challenges</a><a href="#fees-section" class="toc-btn">Pricing</a><a href="#timeline-section" class="toc-btn">Calendar</a><a href="#benefits-section" class="toc-btn">Why Us</a><a href="#comparison-section" class="toc-btn">Allowances</a><a href="#faq-section" class="toc-btn">FAQs</a>
        </div>
        <button class="toc-arrow right" id="tocRight">&#10095;</button>
    </div>
</div>

<!-- SECTION 2: OVERVIEW / INTRO + TL;DR -->
<section class="content-section" id="overview-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Logistics and Transport Payroll - Overview</h2>
            <div class="content-text">
                <div class="highlight-box" style="margin-bottom:20px;">
                    <p><strong>&#128204; TL;DR - Logistics and Transport Payroll Services at a Glance</strong></p>
                    <p>India's logistics sector employs 22 million+ people. Payroll complexity: mobile workforce across states, driver allowances (batta, trip, night run), Motor Transport Workers Act 1961 (5+ workers), CLRA principal employer liability (20+ contract workers), multi-state minimum wages, gig delivery workers under Social Security Code 2020. EPF 12%+12%, ESI 3.25%+0.75%, overtime at double rate. Patron Accounting from INR 500 per employee per month.</p>
                </div>
                <p>India's logistics and transport sector employs over 22 million people and is growing at a CAGR of 7.7% toward a USD 357 billion market by 2030. Behind every truck fleet, warehouse operation, courier network and 3PL provider is a payroll challenge unlike any other industry - mobile workforces spread across multiple states, driver allowances, night-run pay, contract staff under CLRA, and compliance with the Motor Transport Workers Act, 1961.</p>
                <p>Patron Accounting delivers end-to-end payroll management built for the specific demands of logistics and transport businesses across India - from driver-specific pay components to multi-state minimum wage tracking and CLRA principal employer compliance.</p>
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
                <h2 class="section-title">Why Logistics Payroll Is More Complex Than Other Industries</h2>
                <div class="content-text what-is-definition">
                    
                    <p>Managing payroll for a logistics or transport company involves regulatory layers most industries do not face. The complexity comes from seven factors:</p><ul><li><strong>Mobile and distributed workforce:</strong> Drivers, delivery agents and loading staff operate across districts and states; tracking attendance and computing per-trip allowances requires robust systems</li><li><strong>Motor Transport Workers Act, 1961:</strong> Applies to every motor transport undertaking employing 5+ workers; mandates registration, regulates hours, rest, leave and welfare; penalties under Section 29</li><li><strong>Driver-specific pay components:</strong> Batta, trip allowance, night run, halting allowance, overtime - each computed separately and treated correctly for ESI, PF, and TDS</li><li><strong>Contract and owner-driver arrangements:</strong> Determining employee vs independent contractor status has major EPF, ESI and TDS implications</li><li><strong>High attrition (20-30% annually):</strong> Continuous joinings, departures, F and F settlements, and PF transfer requests throughout the year</li><li><strong>Multi-state minimum wages:</strong> Every state has its own schedule for transport workers, revised every 6-12 months</li><li><strong>Gig delivery workers:</strong> Social Security Code 2020 (November 2025) provides legal recognition for platform delivery workers</li></ul>

                </div>
                <div class="highlight-box" style="margin-top:20px;">
                    <p><strong>Key Terms for Logistics and Transport Payroll:</strong></p>
                    <ul><li><strong>Motor Transport Workers Act, 1961:</strong> Act No. 27 of 1961; applies to 5+ motor transport workers; registration, hours, welfare, leave mandatory</li><li><strong>CLRA 1970:</strong> Contract Labour (Regulation and Abolition) Act; principal employer liable if contractor defaults on EPF/ESI; Form V, Form XXIV/XXV returns</li><li><strong>Section 194C TDS:</strong> 1% for individual owner-drivers, 2% for companies on freight payments above Rs 30,000 per contract or Rs 1,00,000 per year</li><li><strong>EPF:</strong> 12% employer + 12% employee of basic+DA; 20+ employees mandatory; deposit by 15th; late interest 12% + damages up to 25%</li><li><strong>ESI:</strong> 3.25% employer + 0.75% employee; workers up to Rs 21,000/month; 10+ employees; deposit by 15th</li><li><strong>Overtime:</strong> Twice the ordinary rate beyond 48 hours/week under Code on Wages 2019 and OSH Code 2020</li></ul>

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
                            <!-- FLEET tag -->
                            <rect x="30" y="120" width="42" height="18" rx="4" fill="#FFF3E0" stroke="#F5A623" stroke-width="1"/>
                            <text x="51" y="132.5" font-size="8" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial, sans-serif">FLEET</text>
                            <!-- Label -->
                            <text x="100" y="170" font-size="10" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial, sans-serif">Logistics and Transport Payroll</text>
                        </svg>
                    </div>
                    <div class="illustration-badge">
                        <span>Transport Specialist</span>
                        <strong>Logistics Payroll Expert</strong>
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
            <h2 class="section-title">Payroll for Each Category of Logistics Workforce</h2>
            <div class="content-text">
                
                <div class="table-responsive-wrapper"><table><thead><tr><th>Employee Category</th><th>Pay Components</th><th>Key Compliance</th></tr></thead><tbody><tr><td>Truck/HCV Drivers (Salaried)</td><td>Basic + Trip Allowance + Night Run + Batta + Overtime</td><td>Motor Transport Workers Act; EPF/ESI; overtime at double rate; state minimum wages</td></tr><tr><td>Owner-Cum-Drivers (Contracted)</td><td>Trip rate or per-km rate; not on payroll</td><td>TDS Section 194C at 1% (individual) or 2% (company); Form 26Q quarterly; Form 16A</td></tr><tr><td>Last-Mile Delivery Riders</td><td>Basic + per-delivery incentive + fuel reimbursement</td><td>ESI if gross up to Rs 21,000; EPF; gig workers under Social Security Code 2020</td></tr><tr><td>Warehouse Associates/Loaders</td><td>Basic + Attendance Bonus + Overtime + Night Shift</td><td>State minimum wage; EPF/ESI mandatory; CLRA if contract-based</td></tr><tr><td>Fleet Supervisors/Dispatchers</td><td>Basic + HRA + Special + Communication Allowance</td><td>Standard payroll; TDS per slab; PT by state</td></tr><tr><td>Contract Labour (via staffing)</td><td>Paid via contractor; principal employer liability</td><td>Verify contractor PF/ESI under CLRA; Form V; half-yearly returns</td></tr></tbody></table></div>

            </div>
            </div>
        </div>
    </div>
</section>

<!-- SECTION 5: OUR SERVICES -->
<section class="content-section" id="services-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Statutory Compliance Framework for Logistics Payroll</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Service</th><th>What We Do</th></tr></thead>
                    <tbody>
                        <tr><td>EPF (Employees Provident Fund)</td><td>Employee 12% + Employer 12% (3.67% EPF + 8.33% EPS) of basic+DA; mandatory 20+ employees; ECR by 15th of following month [EPF Act, 1952]</td></tr><tr><td>ESI (Employees State Insurance)</td><td>Employee 0.75% + Employer 3.25%; ceiling Rs 21,000 gross/month; mandatory 10+ employees; contribution by 15th [ESI Act, 1948]</td></tr><tr><td>TDS on Salary (Section 192)</td><td>Per income tax slab; deposit by 7th; Form 24Q quarterly; Form 16 by June 15 [Income Tax Act, 1961]</td></tr><tr><td>Motor Transport Workers Act, 1961</td><td>Registration, hours of work, rest periods, leave with wages, medical facilities; 5+ motor transport workers [Act No. 27 of 1961]</td></tr><tr><td>CLRA Principal Employer</td><td>EPF/ESI for all contract workers; wage register; Form V; Form XXIV/XXV returns; 20+ contract workers [CLRA, 1970]</td></tr><tr><td>Minimum Wages</td><td>State-specific rates for transport workers (unskilled/semi-skilled/skilled); revised every 6-12 months [Minimum Wages Act, 1948 / Code on Wages, 2019]</td></tr><tr><td>Overtime Pay</td><td>Twice the ordinary rate beyond 48 hours/week [Code on Wages, 2019 / OSH Code, 2020]</td></tr><tr><td>Payment of Gratuity</td><td>15/26 x last drawn salary x years; after 5 years (1 year for fixed-term under 2025 Labour Codes); 10+ employees [Gratuity Act, 1972]</td></tr>

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
            <h2 class="section-title">Our 10-Step Monthly Payroll Process for Logistics Clients</h2>
            <p class="section-subtitle" style="text-align:left;max-width:100%;">From data collection and driver allowance validation through to statutory filings and monthly MIS reporting.</p>
        </header>
        <div class="steps-container">
            <div class="step-card"><div class="step-content"><span class="step-badge">Step 1</span><h3 class="step-title">Data Collection (by 22nd)</h3><p class="step-description">Attendance, trip logs, overtime, new joinings, exits and salary revisions via standardised template or direct GPS/HMS data export.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Trip logs collected</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> GPS data accepted</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="15" y="10" width="90" height="70" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><line x1="30" y1="30" x2="90" y2="30" stroke="#F5A623" stroke-width="3" stroke-linecap="round"/><path d="M85 55l5 5 10-10" stroke="#10B981" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"/></svg></div><span class="illustration-label">Data In</span><span class="step-number-large">01</span></div></div></div>
<div class="step-card"><div class="step-content"><span class="step-badge">Step 2</span><h3 class="step-title">Driver Allowance Validation</h3><p class="step-description">CA reviews trip allowance, batta and night run components for correct ESI and PF treatment per current regulations.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Allowances classified</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> ESI/PF treatment set</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="10" y="10" width="45" height="65" rx="4" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><rect x="65" y="10" width="45" height="65" rx="4" fill="#FFF3E0" stroke="#F5A623" stroke-width="1.5"/><line x1="55" y1="42" x2="65" y2="42" stroke="#F5A623" stroke-width="2" stroke-linecap="round"/></svg></div><span class="illustration-label">Validated</span><span class="step-number-large">02</span></div></div></div>
<div class="step-card"><div class="step-content"><span class="step-badge">Step 3</span><h3 class="step-title">Payroll Computation</h3><p class="step-description">Gross-to-net for all categories including driver allowances, statutory deductions, overtime and incentives.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> All deductions applied</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Net pay computed</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="15" y="5" width="90" height="70" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><line x1="30" y1="25" x2="90" y2="25" stroke="#F5A623" stroke-width="2" stroke-linecap="round"/><line x1="30" y1="38" x2="80" y2="38" stroke="#14365F" stroke-width="1.5" opacity="0.3"/><line x1="30" y1="50" x2="70" y2="50" stroke="#14365F" stroke-width="1.5" opacity="0.3"/></svg></div><span class="illustration-label">Computed</span><span class="step-number-large">03</span></div></div></div>
<div class="step-card"><div class="step-content"><span class="step-badge">Step 4</span><h3 class="step-title">Multi-State Minimum Wage Check</h3><p class="step-description">Each employee's location-based wage verified against applicable state minimum for that skill category.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> State wages verified</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Compliance confirmed</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="20" y="15" width="80" height="55" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><rect x="30" y="35" width="15" height="25" rx="2" fill="#F5A623" opacity="0.6"/><rect x="52" y="40" width="15" height="20" rx="2" fill="#10B981" opacity="0.6"/><rect x="74" y="32" width="15" height="28" rx="2" fill="#F5A623" opacity="0.6"/></svg></div><span class="illustration-label">Wages Checked</span><span class="step-number-large">04</span></div></div></div>
<div class="step-card"><div class="step-content"><span class="step-badge">Step 5</span><h3 class="step-title">TDS and Section 194C Computation</h3><p class="step-description">Individual TDS under old or new regime; Section 194C TDS on owner-driver freight payments computed separately.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Salary TDS calculated</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> 194C freight TDS applied</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><circle cx="60" cy="42" r="25" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><text x="60" y="38" font-size="8" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">TDS</text><text x="60" y="49" font-size="9" fill="#F5A623" font-weight="600" text-anchor="middle" font-family="Arial">194C</text></svg></div><span class="illustration-label">TDS Done</span><span class="step-number-large">05</span></div></div></div>
<div class="step-card"><div class="step-content"><span class="step-badge">Step 6</span><h3 class="step-title">CLRA Compliance Verification</h3><p class="step-description">Contractor EPF/ESI remittance confirmed before payroll close; shortfalls flagged to management.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Contractor PF/ESI verified</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> CLRA checklist complete</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="20" y="15" width="80" height="55" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><text x="60" y="48" font-size="11" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">CLRA</text><path d="M82 55l5 5 10-10" stroke="#10B981" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"/></svg></div><span class="illustration-label">CLRA Clear</span><span class="step-number-large">06</span></div></div></div>
<div class="step-card"><div class="step-content"><span class="step-badge">Step 7</span><h3 class="step-title">Salary Disbursement (by 3rd-5th)</h3><p class="step-description">Bank transfer file in NEFT/RTGS format; digital payslips sent to all employees.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Bank file generated</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Payslips delivered</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="20" y="15" width="80" height="55" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><text x="60" y="48" font-size="12" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">PAY</text><path d="M82 55l5 5 10-10" stroke="#10B981" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"/></svg></div><span class="illustration-label">Paid</span><span class="step-number-large">07</span></div></div></div>
<div class="step-card"><div class="step-content"><span class="step-badge">Step 8</span><h3 class="step-title">Statutory Filings</h3><p class="step-description">EPF ECR by 15th; ESI by 15th; TDS by 7th; PT by state deadline; CLRA returns on schedule.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> All filings submitted</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Deadlines met</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="15" y="10" width="45" height="60" rx="4" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><rect x="65" y="10" width="45" height="60" rx="4" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><line x1="22" y1="30" x2="52" y2="30" stroke="#F5A623" stroke-width="2" stroke-linecap="round"/><line x1="72" y1="30" x2="102" y2="30" stroke="#F5A623" stroke-width="2" stroke-linecap="round"/></svg></div><span class="illustration-label">Filed</span><span class="step-number-large">08</span></div></div></div>
<div class="step-card"><div class="step-content"><span class="step-badge">Step 9</span><h3 class="step-title">Monthly MIS Report</h3><p class="step-description">Payroll summary, state-wise headcount and wage cost, EPF/ESI liability, driver allowance analysis and CLRA compliance status.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> MIS delivered</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> CLRA status reported</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="25" y="10" width="70" height="55" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><circle cx="60" cy="37" r="20" fill="#E8F5E9" stroke="#10B981" stroke-width="2"/><path d="M50 37l7 7 14-14" stroke="#10B981" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/></svg></div><span class="illustration-label">Report Ready</span><span class="step-number-large">09</span></div></div></div>


        </div>
    </div>
</section>

<!-- SECTION 8: DOCUMENTS REQUIRED -->
<section class="content-section" id="documents-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Documents Required for Logistics Payroll Onboarding</h2>
            <div class="content-text">
                
                <ul><li>Employee master data: Name, UAN, date of joining, designation, department, work location (state)</li><li>Monthly salary structure per category: basic, HRA, trip allowance, night run, other components</li><li>Bank account details (IFSC + account number) for all employees</li><li>PAN and Aadhaar for all employees (TDS and EPF/ESI registration)</li><li>Existing EPF and ESIC establishment registration numbers</li><li>Motor transport undertaking registration certificate (if already registered)</li><li>CLRA principal employer registration and list of contractors with EPF/ESI numbers</li><li>Previous payroll data (last 3 months if switching provider)</li><li>List of owner-cum-drivers with PAN and agreed trip/km rate</li><li>State-wise PT and LWF registration certificates for all operating states</li></ul>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 9: CHALLENGES -->
<section class="content-section" id="challenges-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Common Logistics Payroll Challenges and Solutions</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Challenge</th><th>Impact</th><th>How Patron Accounting Solves It</th></tr></thead>
                    <tbody>
                        <tr><td>Attendance from multiple locations and GPS systems</td><td>Missing attendance leads to underpayment disputes and wage register violations</td><td>Accept GPS fleet data, biometric or Excel; reconcile and validate before every payroll run</td></tr><tr><td>Driver allowance ESI and PF treatment errors</td><td>Incorrect inclusion/exclusion triggers ESI demand notices; EPF damages up to 25%</td><td>CA classifies each allowance per ESI Act s.2(22) and Code on Wages 2019 wage definition</td></tr><tr><td>Multi-state minimum wage compliance</td><td>Back-wage liability across states; labour inspector notices</td><td>State-wise minimum wage register; automated flag when state revises rates</td></tr><tr><td>CLRA compliance for contract drivers and loaders</td><td>Principal employer liable for contractor EPF/ESI default; Form V and annual return defaults</td><td>Monthly CLRA checklist; contractor PF/ESI verification before approving invoices</td></tr><tr><td>Owner-driver TDS under Section 194C</td><td>Non-deduction attracts interest under Section 201 and penalty under Section 271C</td><td>Dedicated freight TDS register; Form 26Q quarterly; Form 16A issued annually</td></tr><tr><td>Motor Transport Workers Act registration defaults</td><td>Unregistered undertakings face penalties under Section 29</td><td>Undertaking registration assistance; hours and spread-over registers maintained</td></tr><tr><td>High attrition - frequent F and F settlements</td><td>Delayed F and F triggers labour court claims; PF withdrawal delays</td><td>Standardised 30-day F and F workflow; PF Form 10C/10D processing; UAN transfer</td></tr>

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
            <h2 class="section-title">Logistics Payroll Service Fees 2026</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Fee Component</th><th>Amount</th></tr></thead>
                    <tbody>
                        <tr><td>Patron Accounting Professional Fees</td><td>Starting from INR 149 per employee (Exl GST and Govt. Charges)</td></tr><tr><td>Basic Payroll Processing</td><td>INR 300-500 per employee/month (salary computation, payslips, bank file, wage register)</td></tr><tr><td>Payroll + Statutory Compliance</td><td>INR 500-800 per employee/month (basic + EPF, ESI, TDS, PT, LWF filing and deposits)</td></tr><tr><td>Full Managed Payroll</td><td>INR 800-1,500 per employee/month (full compliance + Motor Transport Act + F and F + audit support)</td></tr><tr><td>Logistics Premium Package</td><td>INR 1,500-2,500 per employee/month (full managed + CLRA + multi-state wages + owner-driver TDS + GPS integration)</td></tr><tr><td>Minimum Monthly Engagement</td><td>INR 8,000/month for small fleet operators under 30 employees</td></tr><tr><td>Setup/Onboarding (one-time)</td><td>INR 5,000-25,000 (data migration, EPF/ESI registration, pay structure, CLRA setup; waived for annual contracts)</td></tr>

                    </tbody>
                </table>
                </div>
                <p style="margin-top:16px;font-size:13px;color:var(--text-muted);font-style:italic;">All fees and charges listed are indicative only and do not constitute a binding offer. Final amounts may vary depending on the volume of work and the complexity involved.</p>
                <p style="margin-top:16px;">Professional service charges for drafting, filing, and representation are separate from the statutory fees. The exact fee depends on the complexity of the case, disputed amount, and number of hearings required. Contact us for a detailed quote.</p>
                <p style="margin-top:16px;"><strong>Get a free Logistics and Transport Payroll consultation - <a href="tel:+919459456700">Call +91 945 945 6700</a> or <a href="https://wa.me/919459456700?text=Hi%2C%20I%20am%20interested%20in%20Logistics%20Payroll%20from%20Patron%20Accounting.%20Please%20call%20me." target="_blank" rel="noopener">WhatsApp us</a>. No-obligation assessment.</strong></p>
            </div>
        </div>
    </div>
</section>

<!-- SECTION 11: TIMELINE -->
<section class="content-section" id="timeline-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Compliance Calendar for Logistics and Transport Companies</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Stage</th><th>Estimated Timeline</th></tr></thead>
                    <tbody>
                        <tr><td>7th of each month</td><td>TDS deposit on salary (Section 192) and freight/professional fees (Section 194C/194J)</td></tr><tr><td>7th-10th of each month</td><td>Salary credit to all employees (7th for under 1,000; 10th for 1,000+) per Payment of Wages Act</td></tr><tr><td>15th of each month</td><td>EPF ECR filing and challan payment; ESI monthly contribution deposit</td></tr><tr><td>Quarterly (Jul, Oct, Jan, May)</td><td>TDS returns - Form 24Q (salary) and Form 26Q (freight TDS Section 194C)</td></tr><tr><td>June 15 annually</td><td>Form 16 to employees; Form 16A to contracted owner-drivers</td></tr><tr><td>Half-yearly (Apr and Oct)</td><td>ESIC half-yearly returns</td></tr><tr><td>July 30 and January 30</td><td>CLRA contractor half-yearly returns (Form XXIV)</td></tr><tr><td>February 15 annually</td><td>CLRA principal employer annual return (Form XXV)</td></tr><tr><td>June 30 and December 31</td><td>Labour Welfare Fund half-yearly contribution (applicable states)</td></tr>

                    </tbody>
                </table>
                </div>
                <div class="highlight-box" style="margin-top:16px;">
                    
                    <p><strong>Critical:</strong> Motor Transport Workers Act registration is required on commencement for undertakings with 5+ workers. CLRA principal employer is liable under Section 20 if contractor defaults on EPF/ESI. Late EPF deposits attract 12% interest + damages up to 25%. Section 194C TDS non-deduction attracts interest under Section 201 and penalty under Section 271C. Patron Accounting manages all calendars with advance alerts.</p>

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
            <h2 class="section-title">Why Choose Patron Accounting for Logistics Payroll</h2>
        </div>
        <div class="features-grid"><article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><h3>Motor Transport Act Expert</h3><p>Full undertaking registration, hours register and welfare compliance included - not available in standard payroll software.</p></article><article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg></div><h3>CLRA Principal Employer</h3><p>Monthly contractor EPF/ESI verification and Form V/XXIV/XXV returns - eliminates principal employer liability risk.</p></article><article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M14 2H6a2 2 0 00-2 2v16a2 2 0 002 2h12a2 2 0 002-2V8z"/><path d="M14 2v6h6"/></svg></div><h3>Driver Allowance Classification</h3><p>CA team classifies trip, batta and night run for ESI/PF/TDS correctly - prevents demand notices and fines.</p></article><article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M17 21v-2a4 4 0 00-4-4H5a4 4 0 00-4 4v2"/><circle cx="9" cy="7" r="4"/></svg></div><h3>Section 194C Owner-Driver TDS</h3><p>Dedicated freight TDS register, Form 26Q filing, and Form 16A issuance - typically excluded from standard payroll.</p></article><article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"/></svg></div><h3>Multi-State Minimum Wages</h3><p>All operating states covered; revision alerts within 30 days of gazette notification; no back-wage liability.</p></article><article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8V7m0 10v1M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><h3>GPS/Fleet Data Integration</h3><p>Accept any format - GPS export, biometric, Excel roster - no specific HRMS integration required.</p></article></div>
    </div>
</section>

<!-- SECTION 12A: SOCIAL PROOF -->
<section class="content-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">What Our Logistics Clients Say</h2>
            <div class="content-text">
                
                <div class="highlight-box"><p><em>300+ logistics clients | Fleet operators, 3PLs, courier and warehousing firms | Motor Transport Act specialists | Multi-state payroll and minimum wage compliance | Pan-India coverage | 4.8 star rating</em></p></div>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 13: SELF-FILING vs PROFESSIONAL COMPARISON -->
<section class="content-section" id="comparison-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Driver Allowances - ESI, PF, and TDS Treatment</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Allowance Type</th><th>ESI Treatment</th><th>PF Treatment</th><th>TDS Treatment</th></tr></thead>
                    <tbody>
                        <tr><td>Trip Allowance / Batta</td><td>Excluded if trip-specific and verifiable; included if fixed monthly</td><td>Excluded if irregular/trip-based; included if fixed monthly</td><td>Not taxable if within Section 10(14) limits</td></tr><tr><td>Night Run Allowance</td><td>Included in gross wages for ESI</td><td>Included in wages; PF applies</td><td>Part of taxable salary; included in Form 16</td></tr><tr><td>Halting Allowance</td><td>Excluded if bona fide halting reimbursement</td><td>Generally excluded if trip-specific</td><td>Exempt under Section 10(14) if genuine halting within limits</td></tr><tr><td>Overtime</td><td>Included in ESI gross wages</td><td>Included in PF wages</td><td>Taxable as salary income</td></tr><tr><td>Fuel Advance Recovery</td><td>No ESI impact (loan recovery)</td><td>No PF impact</td><td>Not taxable (loan recovery)</td></tr>

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
                
                <p>Logistics companies using Patron's payroll services frequently also need:</p><ul><li><a href="/travel-and-logistics-accounting-services">Logistics and Transport Accounting</a> - Complete accounting for fleet operators, 3PLs, and freight forwarders</li><li><a href="/gst-registration">GST Registration</a> - GST for GTA services, freight, and warehousing</li><li><a href="/gst-returns">GST Return Filing</a> - GSTR-1, GSTR-3B with RCM and forward charge for GTAs</li><li><a href="/tds-return-filing-24q">TDS Return Filing</a> - Form 24Q salary + Form 26Q for Section 194C freight TDS</li><li><a href="/income-tax-return">Income Tax Return</a> - Section 44AE presumptive taxation for fleet operators</li><li><a href="/payroll-services">Payroll Services (All Sectors)</a> - Generic payroll for businesses across industries</li></ul>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 15A: LEGAL FRAMEWORK -->
<section class="content-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Payroll for Specific Logistics Business Types</h2>
            <div class="content-text">
                
                <div class="table-responsive-wrapper"><table><thead><tr><th>Business Type</th><th>Payroll Complexity</th><th>Key Compliance</th></tr></thead><tbody><tr><td>Road Transport Operators / Fleet Owners</td><td>Mix of salaried drivers and owner-cum-drivers; Motor Transport Act registers; state-wise minimum wages per depot</td><td>EPF/ESI for salaried; Section 194C TDS for owner-drivers; Motor Transport Workers Act registration</td></tr><tr><td>Third-Party Logistics (3PL) / Warehousing</td><td>Large contract workforce (loaders, packers, sorters); CLRA principal employer liability</td><td>Contractor EPF/ESI verification; Form V; Form XXIV/XXV returns; wage registers</td></tr><tr><td>E-Commerce Last-Mile Delivery</td><td>Salaried associates + gig platform riders; Social Security Code 2020 obligations</td><td>EPF/ESI for salaried; gig worker social security fund contribution advisory</td></tr><tr><td>Courier and Express Parcel</td><td>Multi-state sorting hubs and delivery centres; separate PT, minimum wages, EPF/ESI per branch</td><td>State-wise compliance calendar; consolidated national MIS reporting</td></tr><tr><td>Cold Chain / Specialised Logistics</td><td>Drivers with specialised licences; refrigeration technicians; split shifts</td><td>Shift differentials; technician certification allowances; multi-location statutory compliance</td></tr></tbody></table></div><p style="margin-top:16px;"><strong>External Authority Links:</strong> <a href="https://morth.nic.in" target="_blank" rel="noopener">Ministry of Road Transport (MoRTH)</a> | <a href="https://www.epfindia.gov.in" target="_blank" rel="noopener">EPFO</a> | <a href="https://www.esic.gov.in" target="_blank" rel="noopener">ESIC</a> | <a href="https://www.indiacode.nic.in" target="_blank" rel="noopener">India Code - Motor Transport Workers Act</a></p>

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
                    <h2 class="faq-expanded__title">Frequently Asked Questions - Logistics Payroll</h2>
                    <p class="faq-expanded__lead">Get answers about Motor Transport Workers Act, owner-driver TDS, multi-state compliance, CLRA, and driver allowance treatment for ESI and PF.</p>
                    @include('partials.bigin-form', [
                        'variant'  => 'compact',
                        'service'  => 'Logistics and Transport Payroll',
                    ])
                </aside>
                <div class="faq-expanded__list">
                    <div class="faq-expanded__item" id="faq-1">
                        <h3 class="faq-expanded__q">Does the Motor Transport Workers Act apply to my transport company?</h3>
                        <div class="faq-expanded__a"><p>Yes, if you operate a motor transport undertaking and employ 5 or more motor transport workers, the Motor Transport Workers Act, 1961 (Act No. 27 of 1961) applies. You must register your undertaking, maintain registers for hours of work and spread-over, ensure rest periods and annual leave with wages, provide first-aid facilities, and comply with prescribed working conditions. Non-compliance attracts penalties under Section 29 of the Act.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-2">
                        <h3 class="faq-expanded__q">Are owner-cum-drivers considered employees for PF and ESI purposes?</h3>
                        <div class="faq-expanded__a"><p>Not necessarily. If an owner-cum-driver genuinely owns the vehicle and undertakes transport on a trip or kilometre basis, they are typically independent contractors and EPF/ESI does not apply. However, TDS under Section 194C of the Income Tax Act applies to freight payments - 1% for individual/HUF payees and 2% for company/firm payees when aggregate exceeds Rs 30,000 per contract or Rs 1,00,000 per year. Patron manages Section 194C registers, Form 26Q, and Form 16A.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-3">
                        <h3 class="faq-expanded__q">How is multi-state payroll managed for logistics companies with depots across India?</h3>
                        <div class="faq-expanded__a"><p>Each state requires compliance with its own minimum wage schedule for transport workers, Professional Tax registration and deduction, LWF contributions, and Shops and Establishments Act requirements. Patron maintains a state-wise compliance calendar for all depot locations. When states revise minimum wages (typically every 6-12 months), we update all affected salary records within 30 days of gazette notification.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-4">
                        <h3 class="faq-expanded__q">What is CLRA compliance and why does it matter for logistics companies?</h3>
                        <div class="faq-expanded__a"><p>The Contract Labour (Regulation and Abolition) Act, 1970 applies if you engage 20 or more contract workers through contractors or staffing vendors. As principal employer, you must register, verify contractor licences, ensure welfare facilities, and file half-yearly returns (Form XXIV by July 30 and January 30) and annual return (Form XXV by February 15). If a contractor defaults on EPF or ESI, the principal employer becomes liable under Section 20 of CLRA.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-5">
                        <h3 class="faq-expanded__q">How are driver batta and trip allowances treated for ESI and PF?</h3>
                        <div class="faq-expanded__a"><p>Trip-specific batta and halting allowances genuinely tied to travel and reimbursed against actual cost are generally excluded from ESI wages under Section 2(22) of the ESI Act. Under the Code on Wages, 2019, allowances not part of defined wages are excluded from PF computation, but collectively cannot exceed 50% of total remuneration. If paid as fixed monthly component, they are included in both ESI and PF. Our CA team reviews your allowance structure for compliant configuration.</p></div>
                    </div>
                </div>
            </div>


            <!-- Quick Answers -->
            <div class="highlight-box" style="margin-top:32px;">
                <p><strong>Quick Answers</strong></p>
                <p><strong>EPF rate for logistics employees?</strong><br>12% employee + 12% employer on basic+DA; deposit by 15th; mandatory for 20+ employees. EPS portion capped at Rs 15,000/month wages.</p><p><strong>Transport company mein payroll kaise kare?</strong><br>Logistics company ka payroll manage karne ke liye driver ka batta, trip allowance, night run aur overtime sab sahi se calculate karna zaroori hai. Motor Transport Workers Act compliance bhi mandatory hai 5+ workers ke liye. Patron Accounting INR 500/employee/month se complete logistics payroll handle karta hai.</p><p><strong>Is Section 194C TDS applicable on freight payments?</strong><br>Yes - 1% for individual/HUF owner-drivers, 2% for companies on freight above Rs 30,000 per contract or Rs 1,00,000 per year. Form 26Q quarterly; Form 16A annually.</p>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 18: URGENCY CTA -->
<section class="content-section" style="background: var(--orange-lighter) !important; border-left: 4px solid var(--orange);">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Handling Driver Allowances Correctly in Payroll</h2>
            <div class="content-text">
                
                <p>Driver allowances are the most commonly miscalculated components in logistics payroll. Errors attract labour inspector scrutiny and ESI demand notices:</p><ul><li><strong>Trip Allowance/Batta:</strong> Excluded from ESI/PF if paid on trip-specific basis with verifiable travel; included if fixed monthly component</li><li><strong>Night Run Allowance:</strong> Included in ESI gross wages and PF wages; part of taxable salary for Form 16</li><li><strong>Halting Allowance:</strong> Excluded from ESI if bona fide halting reimbursement; exempt under Section 10(14) IT Act within limits</li><li><strong>Overtime:</strong> Twice the ordinary rate (Code on Wages 2019); included in both ESI and PF computation; taxable salary</li><li><strong>Fuel Advance Recovery:</strong> Loan recovery - no ESI, PF, or tax impact</li></ul><p><strong>Key rule:</strong> Under Code on Wages 2019, allowances not part of defined wages are excluded from PF, but collectively cannot exceed 50% of total remuneration. Crossing this threshold triggers reclassification.</p><p style="margin-top:16px;"><strong>Need driver allowance compliance review? <a href="tel:+919459456700">Call +91 945 945 6700</a> or <a href="https://wa.me/919459456700?text=Hi%2C%20I%20need%20help%20with%20logistics%20payroll%20driver%20allowance%20compliance." target="_blank" rel="noopener">WhatsApp us</a>.</strong></p>

            </div>
        </div>
    </div>
</section>

<!-- CONCLUSION + CTA BLOCK (Dark) -->
<section class="content-section" style="background: var(--blue) !important;">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title" style="color:#FFFFFF !important;">Start Your Logistics Payroll Compliance Today</h2>
            <div class="content-text" style="text-align:left;">
                
                <p style="color:rgba(255,255,255,0.9);font-size:16px;line-height:1.7;">Logistics payroll in India involves regulatory layers most industries do not face: the Motor Transport Workers Act for fleet operations, CLRA principal employer liability for contract labour, driver allowance ESI/PF classification, Section 194C TDS on owner-drivers, and multi-state minimum wage compliance across every depot location.</p><p style="color:rgba(255,255,255,0.9);font-size:16px;line-height:1.7;">Patron Accounting delivers CA-managed payroll built for the specific demands of logistics and transport businesses - from daily trip allowance computation to CLRA contractor verification and multi-state statutory filings.</p><p style="color:rgba(255,255,255,0.9);font-size:16px;line-height:1.7;"><strong>300+ logistics clients | Motor Transport Act experts | Multi-state coverage | Starting INR 500 per employee/month</strong></p>

            </div>
            <div style="display:flex;gap:14px;flex-wrap:wrap;margin-top:24px;">
                <a href="tel:+919459456700" style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:var(--orange);color:#fff;border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#128222; Call +91 945 945 6700</a>
                <a href="https://wa.me/919459456700?text=Hi%2C%20I%20am%20interested%20in%20Logistics%20Payroll%20from%20Patron%20Accounting.%20Please%20call%20me." target="_blank" style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:#25D366;color:#fff;border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;" rel="noopener">&#128172; WhatsApp Us</a>
                <a href="mailto:sales@patronaccounting.com?subject=Enquiry%20for%20Logistics%20Payroll%20Services&body=Hello%20Patron%20Accounting%20Team%2C%0A%0AI%20need%20logistics%20payroll%20services.%0A%0AThank%20you." style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:transparent;color:#fff;border:2px solid rgba(255,255,255,0.3);border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#9993;&#65039; Email Us</a>
            </div>
            <p style="color:rgba(255,255,255,0.7);font-size:13px;margin-top:16px;">Book a Free Consultation - No Obligation.</p>
        </div>
    </div>
</section>

<!-- GSTAT STATE BENCH CITY PAGES (32 Pages) -->
<section class="content-section" style="padding:48px 32px;background:var(--gray-50);">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title" style="text-align:center;margin-bottom:12px;">Logistics Payroll Services Across India</h2>
            <p style="text-align:center;color:var(--text-muted);font-size:15px;margin-bottom:40px;">Patron Accounting provides multi-state logistics payroll, Motor Transport Act compliance, and CLRA management across major Indian cities.</p>
           
            <div class="pa-city-block" style="margin-bottom:40px;"><div class="pa-city-grid"><a href="/payroll-services-for-travel-and-logistics-industry/pune" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Pune</div><div class="pa-card-sub">Maharashtra</div></div></a><a href="/payroll-services-for-travel-and-logistics-industry/mumbai" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Mumbai</div><div class="pa-card-sub">Maharashtra</div></div></a><a href="/payroll-services-for-travel-and-logistics-industry/delhi" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Delhi</div><div class="pa-card-sub">NCR</div></div></a><a href="/payroll-services-for-travel-and-logistics-industry/gurugram" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Gurugram</div><div class="pa-card-sub">Haryana</div></div></a></div></div><div class="pa-city-block"><div class="pa-block-title">Related Services</div><div class="pa-block-sub">End-to-end support for Logistics Payroll</div><div class="pa-cross-grid"><a href="/travel-and-logistics-accounting-services" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Logistics Accounting</div><div class="pa-card-sub">India</div></div></a><a href="/gst-registration" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">GST Registration</div><div class="pa-card-sub">India</div></div></a><a href="/gst-returns" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">GST Returns</div><div class="pa-card-sub">India</div></div></a><a href="/tds-return-filing-24q" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">TDS Return Filing</div><div class="pa-card-sub">India</div></div></a><a href="/income-tax-return" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Income Tax Return</div><div class="pa-card-sub">India</div></div></a><a href="/payroll-services" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Payroll Services</div><div class="pa-card-sub">India</div></div></a></div></div>
        </div>
    </div>
</section>

<!-- CONTENT FRESHNESS FOOTER -->
<section class="content-section" style="padding:32px;">
    <div class="content-container">
        <div class="text-content" style="font-size:13px;color:var(--text-muted);">
            <p><strong>Content Created:</strong> 15 January 2024 &nbsp;|&nbsp; <strong>Last Updated:</strong> <span id="lastUpdatedFooter">15 January 2024</span> &nbsp;|&nbsp; <strong>Next Review:</strong> April 2027 &nbsp;|&nbsp; <strong>Reviewed By:</strong> CA &amp; CS Team, Patron Accounting LLP</p>
            <p>This page is reviewed annually or when minimum wages, CLRA, Motor Transport Workers Act, or Labour Codes are updated. Next review: April 2027.</p>
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
