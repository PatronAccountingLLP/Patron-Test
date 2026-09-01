
@extends('layouts.service-app')

<!-- External Dependencies (loaded by master layout in production) -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Barlow:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,400&family=DM+Sans:opsz,wght@9..40,400;9..40,500;9..40,600;9..40,700&display=swap" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

@section('meta')
    <title>PF Registration Online - EPFO Process, Documents & Threshold</title>
    <meta name="description" content="PF registration mandatory for 20+ employees under EPF and MP Act 1952. Employee 12% + employer 13%. Online on USSP/EPFO portal. Free registration. Expert CA team.">
    <link rel="canonical" href="/pf-registration">
    <meta name="robots" content="index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1">
    <meta property="og:title" content="PF Registration Online - EPFO Process, Documents & Threshold">
    <meta property="og:description" content="PF registration mandatory for 20+ employees under EPF and MP Act 1952. Employee 12% + employer 13%. Online on USSP/EPFO portal. Free registration. Expert CA team.">
    <meta property="og:url" content="/pf-registration">
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="Patron Accounting">
    <meta property="og:image" content="https://www.patronaccounting.com/images/og-default-square.png">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="1200">
    <meta property="og:image:type" content="image/png">
    <meta property="og:image:secure_url" content="https://www.patronaccounting.com/images/og-default-square.png">
    <meta property="og:image:alt" content="Patron Accounting - partner you can rely on">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="PF Registration Online - EPFO Process, Documents & Threshold">
    <meta name="twitter:description" content="PF registration mandatory for 20+ employees under EPF and MP Act 1952. Employee 12% + employer 13%. Online on USSP/EPFO portal. Free registration. Expert CA team.">
    <meta name="twitter:image" content="https://www.patronaccounting.com/images/og-default-square.png">
@endsection

@section('schema')
    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@graph": [
        {
          "@type": "Service",
          "name": "PF Registration: Process and Compliance",
          "description": "PF registration mandatory for 20+ employees under EPF and MP Act 1952. Employee 12% + employer 13%. Online on USSP/EPFO portal. Free registration. Expert CA team.",
          "url": "https://www.patronaccounting.com/pf-registration",
          "serviceType": "PF Registration: Process and Compliance",
          "areaServed": {
            "@type": "Country",
            "name": "India"
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
            "url": "https://www.patronaccounting.com/pf-registration",
            "price": "15000"
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
              "name": "PF Registration: Process and Compliance",
              "item": "https://www.patronaccounting.com/pf-registration"
            }
          ]
        },
        {
          "@type": "FAQPage",
          "mainEntity": [
            {
              "@type": "Question",
              "name": "Is PF registration mandatory for all companies?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "PF registration is mandatory for all establishments employing 20 or more persons under Section 1(3) of the EPF & MP Act, 1952. This includes permanent, contractual, and temporary employees across 187 notified classes. Once the threshold is crossed, registration must be completed within one month. Coverage continues even if workforce later drops below 20."
              }
            },
            {
              "@type": "Question",
              "name": "What is the employer PF contribution rate?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "The employer contributes 13% of basic salary + DA (on wages up to Rs 15,000/month). This breaks down as: 3.67% to EPF, 8.33% to EPS (pension), 0.50% to EDLI (insurance), and 0.50% to admin charges. The employee contributes 12% to EPF. For voluntary coverage establishments with below 20 employees, the reduced rate of 10% applies."
              }
            },
            {
              "@type": "Question",
              "name": "Can companies with fewer than 20 employees register?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "Yes. Establishments with fewer than 20 employees can voluntarily opt for EPF coverage under Section 1(4), with mutual consent of employer and majority of employees, subject to EPFO approval. Voluntary registration provides the same benefits and is a strong retention tool for startups and small businesses. Once obtained, coverage continues regardless of workforce fluctuation."
              }
            },
            {
              "@type": "Question",
              "name": "PF registration kaise kare?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "PF registration ke liye epfindia.gov.in par jao aur 'Establishment Registration' click karo. USSP portal par account banao. Login karke 'Registration For EPFO-ESIC' select karo. EPF Act 1952 choose karo. Company ki details, employee strength, PAN, address, bank details fill karo. Documents upload karo aur DSC se submit karo. Free hai, koi government fee nahi. 7-15 din mein Establishment ID mil jayega. Patron Accounting - +91 945 945 6700."
              }
            },
            {
              "@type": "Question",
              "name": "What is the penalty for not registering for PF?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "Section 7Q imposes interest at 12% per annum on delayed contributions. Section 14B allows recovery of damages up to 100% of the arrears. Section 14(1) provides for criminal prosecution with imprisonment up to 3 years and/or fine up to Rs 10,000. EPFO can also attach employer bank accounts, properties, and arrest the employer for recovery of dues."
              }
            },
            {
              "@type": "Question",
              "name": "Does PF coverage continue if employees drop below 20?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "Yes. Once registered under the EPF & MP Act, coverage continues even if workforce drops below 20. The establishment cannot deregister simply because employee count decreased. This is a fundamental principle ensuring existing employees continue to receive PF benefits regardless of subsequent workforce changes."
              }
            },
            {
              "@type": "Question",
              "name": "Company mein PF ka rate kitna hota hai?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "Company mein employee ka PF contribution 12% hota hai basic salary + DA par. Employer ka contribution 13% hota hai (3.67% EPF, 8.33% EPS, 0.50% EDLI, 0.50% admin charges). Ye rate Rs 15,000 per month tak ki wages par applicable hai. 20 se kam employees wali company voluntary registration karein toh 10% rate lagta hai."
              }
            },
            {
              "@type": "Question",
              "name": "What is UAN and how does it work?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "UAN (Universal Account Number) is a unique 12-digit number for each EPF member that remains constant throughout career, even when changing employers. Each new employer generates a new Member ID but all are linked to the same UAN. This enables seamless PF transfer, online passbook access, claim submission, and KYC management through the EPFO Unified Portal. Quick Answers Q: Government fee for PF registration? A: None. EPFO registration is completely free on the USSP portal. Q: PF wage ceiling? A: Rs 15,000/month (basic + DA). Employees above can contribute on higher wages with employer consent. Q: Can employer deduct their share from employee wages? A: No. Section 12 prohibits this - it is a criminal offence. Q: EPF interest rate? A: EPFO declares annually. FY 2023-24: 8.25%. Tax-free up to prescribed limits. Q: Monthly deposit deadline? A: 15th of the month following the wage month."
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
                        Provident Fund (PF) Registration in India
                    </h1>

                    <div class="expert-attribution-box">
                        <span class="eab-check"><svg width="16" height="16" viewBox="0 0 24 24" fill="currentColor"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg></span>
                        <span class="eab-title">Reviewed by CA and CS Team, Patron Accounting LLP</span>
                        <span class="eab-meta">
                            <span>ICAI & ICSI Registered</span><span class="eab-sep">|</span>
                            <span>15+ Years Experience</span><span class="eab-sep">|</span>
                            <span>Last Updated: <span id="lastUpdated">10 March 2026</span></span>
                        </span>
                        <a href="/authorhub/ca-sundram-gupta" class="eab-link">Verify Credentials &rarr;</a>
                    </div>

                    <div class="mb-4">
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Mandatory:</span> For all establishments employing 20 or more persons. Registration within 1 month of crossing threshold. Voluntary for below 20.</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Contribution:</span> Employee 12% + Employer 13% of Basic Salary + DA (on wages up to Rs 15,000/month). Three schemes: EPF, EPS, EDLI.</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Portal:</span> USSP (Unified Shram Suvidha Portal) via epfindia.gov.in. Free registration - no government fee charged.</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Penalty:</span> Non-registration: 12% interest (Sec 7Q), up to 100% damages (Sec 14B), imprisonment up to 3 years (Sec 14(1)).</p>
                        </div>
                    </div>

                    <p class="mb-4 fw-bold" style="color: var(--blue); font-size: 15px;">10,000+ businesses served. 50,000+ documents filed. 4.9 Google Rating. 15+ years of practice.</p>

                    <div class="hero-cta">
                        <a href="tel:+919459456700" class="btn-video text-decoration-none">
                            <span class="play-circle"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="width:14px;height:14px;color:#fff"><path d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/></svg></span>
                            Call +91 945 945 6700
                        </a>
                        <a href="mailto:sales@patronaccounting.com?subject=PF%20Registration%20Enquiry&body=Hello%2C%0A%0AI%20need%20PF%20registration.%0A%0AThank%20you." class="btn-sample text-decoration-none">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="width:18px;height:18px;"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,12 2,6"/></svg>
                            Email Us
                        </a>
                        <a href="https://wa.me/919459456700?text=Hi%2C%20I%20need%20PF%20Registration.%20Please%20share%20details." target="_blank" class="btn-sample text-decoration-none">
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
                                            'service'  => 'PF Registration',
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
            <a href="#overview-section" class="toc-btn">Overview</a>
            <a href="#what-section" class="toc-btn">What Is PF</a>
            <a href="#who-section" class="toc-btn">Who Must Register</a>
            <a href="#services-section" class="toc-btn">Our Services</a>
            <a href="#procedure-section" class="toc-btn">7-Step Process</a>
            <a href="#documents-section" class="toc-btn">Documents</a>
            <a href="#challenges-section" class="toc-btn">Challenges</a>
            <a href="#fees-section" class="toc-btn">Contribution Structure</a>
            <a href="#timeline-section" class="toc-btn">Timeline</a>
            <a href="#benefits-section" class="toc-btn">Benefits</a>
            <a href="#comparison-section" class="toc-btn">PF vs ESI</a>
            <a href="#faq-section" class="toc-btn">FAQs</a>
        </div>
        <button class="toc-arrow right" id="tocRight">&#10095;</button>
    </div>
</div>

<!-- SECTION 2: OVERVIEW / INTRO + TL;DR -->
<section class="content-section" id="overview-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">PF Registration - Complete Guide for 2026</h2>
            <div class="content-text">
                <div class="highlight-box" style="margin-bottom:20px;">
                    <p><strong>&#128204; TL;DR - PF Registration Services at a Glance</strong></p>
                    <p>Provident Fund (PF) Registration under the EPF & MP Act, 1952 is mandatory for every establishment employing 20 or more persons. The employer must register within one month through the USSP portal at epfindia.gov.in, at no cost. Employee contributes 12% and employer 13% of basic salary + DA (on wages up to Rs 15,000/month). Three schemes become applicable: EPF (retirement), EPS (pension), and EDLI (insurance). Non-compliance attracts 12% interest, 100% damages, and imprisonment up to 3 years.</p>
                </div>
                <p>The EPF system covers establishments across 187 notified industry classes. Upon registration, the employer receives an Establishment ID and access to the EPFO Employer Portal for filing monthly ECR, managing UANs, and processing PF claims. With EPFO's digital transformation, all compliance is managed online, making timely registration essential.</p>
                <p><div class="table-responsive-wrapper"><table><thead><tr><th>Parameter</th><th>Details</th></tr></thead><tbody>
<tr><td>Governing Law</td><td>EPF & MP Act, 1952 (EPF Scheme 1952, EPS 1995, EDLI 1976)</td></tr>
<tr><td>Administered By</td><td><a href="https://www.epfindia.gov.in" target="_blank" rel="noopener">EPFO</a> under Ministry of Labour & Employment</td></tr>
<tr><td>Threshold</td><td>20+ employees (mandatory); below 20 (voluntary under Section 1(4))</td></tr>
<tr><td>Registration Deadline</td><td>Within 1 month of employing 20 or more persons</td></tr>
<tr><td>Contribution Rate</td><td>Employee: 12% | Employer: 13% (3.67% EPF + 8.33% EPS + 0.5% EDLI + 0.5% admin)</td></tr>
<tr><td>Wage Ceiling</td><td>Rs 15,000/month (basic + DA) for mandatory coverage</td></tr>
<tr><td>Registration Portal</td><td>USSP via epfindia.gov.in (free - no government fee)</td></tr>
</tbody></table></div></p>
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
                <h2 class="section-title">What Is PF Registration?</h2>
                <div class="content-text what-is-definition">
                    
                    <p>PF Registration is the process of enrolling an establishment with the <a href="https://www.epfindia.gov.in" target="_blank" rel="noopener">Employees' Provident Fund Organisation (EPFO)</a> under the <strong>Employees' Provident Funds and Miscellaneous Provisions Act, 1952</strong>. The Act covers 187 classes of establishments as notified by the Central Government.</p>
<p>Upon registration, three schemes become applicable: the <strong>EPF Scheme, 1952</strong> (retirement savings), the <strong>EPS, 1995</strong> (pension after 58 years with 10 years service), and the <strong>EDLI, 1976</strong> (life insurance up to Rs 7 lakh in case of death during service).</p>
<p>The schemes are administered by the Central Board of Trustees with representatives of the Central Government, State Governments, employers, and employees. All compliance is managed through the <a href="https://www.epfindia.gov.in/site_en/AboutEPFO.php" target="_blank" rel="noopener">EPFO portal</a> and USSP.</p>

                </div>
                <div class="highlight-box" style="margin-top:20px;">
                    <p><strong>Key Terms for PF Registration:</strong></p>
                    <p><strong>EPFO:</strong> Employees' Provident Fund Organisation under Ministry of Labour & Employment. Operates 122 offices across India managing contributions for millions of establishments.</p>
<p><strong>UAN (Universal Account Number):</strong> Unique 12-digit number for each EPF member. Remains constant across employers, enabling portability and online access.</p>
<p><strong>ECR (Electronic Challan cum Return):</strong> Monthly return filed by employers combining contribution details with payment challan. Due by 15th of following month.</p>
<p><strong>USSP:</strong> Unified Shram Suvidha Portal (shramsuvidha.gov.in) for integrated EPFO and ESIC registration.</p>
<p><strong>Establishment ID:</strong> Unique number allotted upon registration, used for all EPFO filings, challans, and correspondence.</p>

                </div>
            </div>
            <div class="column-image">
                <div class="illustration-placeholder">
                    <div class="illustration-icon" style="max-width:240px;">
                        <svg viewBox="0 0 200 180" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <!-- PF Registration -->
                            <rect x="30" y="15" width="140" height="120" rx="8" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/>
                            <rect x="30" y="15" width="140" height="24" rx="8" fill="#14365F"/>
                            <text x="100" y="32" font-size="9" fill="#fff" font-weight="700" text-anchor="middle" font-family="Arial, sans-serif">PF Registration</text>
                            <!-- EPFO badge -->
                            <circle cx="100" cy="62" r="22" fill="#FFF3E0" stroke="#F5A623" stroke-width="1.5"/>
                            <text x="100" y="58" font-size="9" fill="#14365F" font-weight="800" text-anchor="middle" font-family="Arial">EPFO</text>
                            <text x="100" y="70" font-size="6" fill="#F5A623" font-weight="600" text-anchor="middle" font-family="Arial">20+ EMP</text>
                            <!-- Contribution badges -->
                            <rect x="40" y="95" width="50" height="14" rx="3" fill="#FFF3E0" stroke="#F5A623" stroke-width="0.8"/>
                            <text x="65" y="105" font-size="6" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">Emp 12%</text>
                            <rect x="110" y="95" width="50" height="14" rx="3" fill="#FFF3E0" stroke="#F5A623" stroke-width="0.8"/>
                            <text x="135" y="105" font-size="6" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">Empr 13%</text>
                            <!-- Free badge -->
                            <rect x="65" y="115" width="70" height="14" rx="3" fill="#E8F5E9" stroke="#25D366" stroke-width="0.8"/>
                            <text x="100" y="125" font-size="6" fill="#25D366" font-weight="700" text-anchor="middle" font-family="Arial">Free Registration</text>
                            <!-- Check -->
                            <circle cx="155" cy="28" r="16" fill="#E8F5E9" stroke="#25D366" stroke-width="1.5"/>
                            <path d="M148 28l4 4 9-9" stroke="#25D366" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            <text x="100" y="148" font-size="9" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial, sans-serif">EPF &amp; MP Act, 1952</text>
                            <!-- Label -->
                            <text x="100" y="170" font-size="10" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial, sans-serif">PF Registration</text>
                        </svg>
                    </div>
                    <div class="illustration-badge">
                        <span>EPF & MP Act, 1952</span>
                        <strong>20+ Employees - Mandatory</strong>
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
            <h2 class="section-title">Who Must Register for PF?</h2>
            <div class="content-text">
                
                <p><strong>Mandatory Registration (Section 1(3)(a) and 1(3)(b)):</strong></p>
<ul>
<li>Any factory employing 20 or more persons</li>
<li>Any other establishment employing 20+ persons within 187 notified classes</li>
<li>Count includes permanent, contractual, and temporary workers</li>
<li>Registration within one month of crossing threshold</li>
<li>Once registered, coverage continues even if workforce drops below 20</li>
</ul>
<p><strong>Voluntary Registration (Section 1(4)):</strong></p>
<ul>
<li>Establishments with fewer than 20 employees can opt in with mutual consent and EPFO approval</li>
<li>Powerful employee retention tool for startups and small businesses</li>
</ul>
<p><strong>Includes:</strong> Private limited companies, LLPs, partnerships, sole proprietorships, societies, trusts, NGOs, startups, MSMEs, factories, shops, educational institutions, hospitals, hotels, and all 187 notified establishment classes.</p>

            </div>
            </div>
        </div>
    </div>
</section>

<!-- SECTION 5: OUR SERVICES -->
<section class="content-section" id="services-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">6 PF Registration Services by Patron Accounting</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Service</th><th>What We Do</th></tr></thead>
                    <tbody>
                        <tr><td>Complete PF Registration</td><td>End-to-end EPFO registration on <a href="https://www.epfindia.gov.in" target="_blank" rel="noopener">USSP portal</a> including establishment details, employee data, document upload, DSC, and Establishment ID allotment.</td></tr>
<tr><td>Employee UAN Generation and KYC</td><td>Universal Account Number generation, Aadhaar/PAN/bank account linking, and member profile management on the EPFO Unified Portal.</td></tr>
<tr><td>Monthly PF Compliance (ECR Filing)</td><td>Monthly ECR preparation, filing, challan generation, and contribution deposit by 15th. See <a href="/pf-return">PF Returns</a>.</td></tr>
<tr><td>ESI Registration (Integrated)</td><td>Simultaneous ESIC registration through USSP for establishments meeting ESI criteria. See <a href="/esic-registration">ESIC Registration</a>.</td></tr>
<tr><td>Payroll with PF Compliance</td><td>Integrated payroll with automatic PF calculation, deduction, ECR generation. See <a href="/payroll-processing-and-management-services">Payroll Services</a>.</td></tr>
<tr><td>PF Assessment and Penalty Support</td><td>Representation before EPFO for Section 7A assessments, Section 14B penalty proceedings, and compliance audits.</td></tr>

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
            <h2 class="section-title">7-Step PF Registration Process</h2>
            <p class="section-subtitle" style="text-align:left;max-width:100%;">Patron Accounting handles the complete EPFO registration - from compliance assessment to Establishment ID allotment and ongoing monthly ECR filing.</p>
        </header>
        <div class="steps-container">
            <div class="step-card"><div class="step-content"><span class="step-badge">Step 1</span><h3 class="step-title">Determine Applicability</h3><p class="step-description">Verify if your establishment employs 20+ persons (including contractual/temporary). If yes, registration is mandatory within 1 month. Below 20, voluntary coverage available under Section 1(4).</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Threshold checked</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Compliance assessed</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="15" y="10" width="90" height="65" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><circle cx="60" cy="35" r="18" fill="#FFF3E0" stroke="#F5A623" stroke-width="1.2"/><text x="60" y="33" font-size="10" fill="#14365F" font-weight="800" text-anchor="middle" font-family="Arial">20</text><text x="60" y="43" font-size="6" fill="#F5A623" font-weight="600" text-anchor="middle" font-family="Arial">EMP</text><path d="M48 62l8 8 16-16" stroke="#25D366" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg></div><span class="illustration-label">Assessed</span><span class="step-number-large">01</span></div></div></div>

<div class="step-card"><div class="step-content"><span class="step-badge">Step 2</span><h3 class="step-title">Register on USSP Portal</h3><p class="step-description">Visit epfindia.gov.in and click 'Establishment Registration'. Create account on the Unified Shram Suvidha Portal with employer name, email, mobile, and verification code.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> USSP account</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Portal ready</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="15" y="10" width="90" height="65" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><rect x="20" y="15" width="80" height="8" rx="2" fill="#14365F" opacity="0.8"/><circle cx="25" cy="19" r="2" fill="#FF5F56"/><circle cx="31" cy="19" r="2" fill="#FFBD2E"/><circle cx="37" cy="19" r="2" fill="#27C93F"/><rect x="25" y="30" width="60" height="10" rx="3" fill="#FFF3E0" stroke="#F5A623" stroke-width="0.8"/><text x="55" y="38" font-size="5" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">epfindia.gov.in</text><rect x="25" y="48" width="50" height="8" rx="2" fill="#F5A623" opacity="0.3"/></svg></div><span class="illustration-label">Account Ready</span><span class="step-number-large">02</span></div></div></div>

<div class="step-card"><div class="step-content"><span class="step-badge">Step 3</span><h3 class="step-title">Apply for EPFO Registration</h3><p class="step-description">Login to USSP. Select 'Registration For EPFO-ESIC'. Choose EPF & MP Act, 1952. Click Submit to open the registration form.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> EPFO selected</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Form opened</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="15" y="5" width="90" height="70" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><rect x="25" y="15" width="70" height="10" rx="3" fill="#FFF3E0" stroke="#F5A623" stroke-width="0.8"/><text x="60" y="23" font-size="6" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">EPFO-ESIC</text><line x1="30" y1="35" x2="80" y2="35" stroke="#14365F" stroke-width="2" opacity="0.3" stroke-linecap="round"/><line x1="30" y1="45" x2="70" y2="45" stroke="#14365F" stroke-width="2" opacity="0.3" stroke-linecap="round"/><rect x="55" y="55" width="30" height="10" rx="3" fill="#F5A623" opacity="0.5"/><text x="70" y="63" font-size="6" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">Apply</text></svg></div><span class="illustration-label">Applied</span><span class="step-number-large">03</span></div></div></div>

<div class="step-card"><div class="step-content"><span class="step-badge">Step 4</span><h3 class="step-title">Fill Establishment Details</h3><p class="step-description">Complete: establishment name, address, date of incorporation, PAN, type (factory/shop), MSME/Startup registration, NIC code, nature of business, and activity classification.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Details filled</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> PAN verified</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="15" y="5" width="90" height="70" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><line x1="30" y1="22" x2="90" y2="22" stroke="#F5A623" stroke-width="3" stroke-linecap="round"/><line x1="30" y1="35" x2="80" y2="35" stroke="#14365F" stroke-width="2" opacity="0.3" stroke-linecap="round"/><line x1="30" y1="45" x2="70" y2="45" stroke="#14365F" stroke-width="2" opacity="0.3" stroke-linecap="round"/><line x1="30" y1="55" x2="75" y2="55" stroke="#14365F" stroke-width="2" opacity="0.3" stroke-linecap="round"/><circle cx="85" cy="15" r="10" fill="#E8F5E9" stroke="#25D366" stroke-width="1.2"/><path d="M80 15l3 3 7-7" stroke="#25D366" stroke-width="1.5" stroke-linecap="round"/></svg></div><span class="illustration-label">Form Filled</span><span class="step-number-large">04</span></div></div></div>

<div class="step-card"><div class="step-content"><span class="step-badge">Step 5</span><h3 class="step-title">Enter Employment and Contact Details</h3><p class="step-description">Provide employee strength, gender breakdown, wages above statutory limit, total wages, branch details with LIN, and primary contact person details.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Emp data entered</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> LIN mapped</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="20" y="10" width="80" height="60" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><circle cx="45" cy="35" r="8" fill="#FFF3E0" stroke="#F5A623" stroke-width="0.8"/><circle cx="60" cy="35" r="8" fill="#FFF3E0" stroke="#F5A623" stroke-width="0.8"/><circle cx="75" cy="35" r="8" fill="#FFF3E0" stroke="#F5A623" stroke-width="0.8"/><rect x="35" y="50" width="50" height="10" rx="3" fill="#E8F5E9" stroke="#25D366" stroke-width="0.8"/><text x="60" y="58" font-size="6" fill="#25D366" font-weight="600" text-anchor="middle" font-family="Arial">20+ EMP</text></svg></div><span class="illustration-label">Emp Ready</span><span class="step-number-large">05</span></div></div></div>

<div class="step-card"><div class="step-content"><span class="step-badge">Step 6</span><h3 class="step-title">Upload Documents and DSC</h3><p class="step-description">Upload PAN, address proof (utility bill not older than 2 months), Aadhaar, incorporation certificate, cancelled cheque, Shop & Establishment/GST certificate, and employee details. Submit with DSC.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Docs uploaded</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> DSC signed</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="25" y="15" width="70" height="55" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><rect x="35" y="25" width="50" height="12" rx="3" fill="#FFF3E0" stroke="#F5A623" stroke-width="1"/><text x="60" y="34" font-size="6" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">DSC</text><circle cx="60" cy="52" r="10" fill="#E8F5E9" stroke="#25D366" stroke-width="1.2"/><path d="M55 52l3 3 7-7" stroke="#25D366" stroke-width="1.5" stroke-linecap="round"/></svg></div><span class="illustration-label">Submitted</span><span class="step-number-large">06</span></div></div></div>

<div class="step-card"><div class="step-content"><span class="step-badge">Step 7</span><h3 class="step-title">Receive Establishment ID</h3><p class="step-description">EPFO verifies and allots Establishment ID and Employer Portal credentials. File monthly ECRs, generate UANs, and manage all PF compliance online. Registration is free.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Establishment ID</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Portal access</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="20" y="10" width="80" height="65" rx="8" fill="#E8F5E9" stroke="#25D366" stroke-width="1.5"/><rect x="28" y="25" width="64" height="20" rx="5" fill="#25D366" opacity="0.15"/><text x="60" y="33" font-size="6" fill="#14365F" font-weight="600" text-anchor="middle" font-family="Arial">EPFO</text><text x="60" y="42" font-size="7" fill="#14365F" font-weight="800" text-anchor="middle" font-family="Arial">EST. ID</text><path d="M52 60l5 5 11-11" stroke="#25D366" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"/><text x="60" y="72" font-size="6" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">Registered</text></svg></div><span class="illustration-label">ID Allotted</span><span class="step-number-large">07</span></div></div></div>

        </div>
    </div>
</section>

<!-- SECTION 8: DOCUMENTS REQUIRED -->
<section class="content-section" id="documents-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Documents Required for PF Registration</h2>
            <div class="content-text">
                
                <ul>
<li>PAN card of the establishment</li>
<li>Certificate of Incorporation (companies/LLPs) or Registration Certificate (others)</li>
<li>Address proof of registered office (electricity/water/telephone bill - not older than 2 months)</li>
<li>Aadhaar card of proprietor, all partners, or all directors</li>
<li>Cancelled cheque or bank statement of the establishment's bank account</li>
<li>Shop and Establishment Certificate or GST Registration Certificate</li>
<li>MSME Registration (Udyam) certificate, if applicable</li>
<li>Startup India Registration (DPIIT), if applicable</li>
<li>Factory License (for factory establishments)</li>
<li>Employee details: name, Aadhaar, date of joining, designation, salary</li>
<li>Digital Signature Certificate (DSC) of the authorised signatory</li>
</ul>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 9: CHALLENGES -->
<section class="content-section" id="challenges-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">4 Common PF Registration Challenges and Solutions</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Challenge</th><th>Impact</th><th>How Patron Accounting Solves It</th></tr></thead>
                    <tbody>
                        <tr><td>Delayed Registration After Crossing 20</td><td>Many employers are unaware of the 1-month deadline - delayed registration attracts Section 14B damages and Section 7Q interest from the date threshold was crossed</td><td>We monitor workforce size and initiate registration proactively before penalties accrue.</td></tr>
<tr><td>Incorrect Wage Classification</td><td>Misclassifying allowances or excluding contractual workers leads to compliance shortfalls during EPFO inspections</td><td>Our payroll team ensures accurate wage computation and contribution calculation per the Rs 15,000 ceiling.</td></tr>
<tr><td>UAN Generation and KYC Issues</td><td>Mismatched Aadhaar/PAN/bank details cause UAN activation failures and block PF transfers</td><td>We manage UAN generation and KYC updation for all employees at the time of registration.</td></tr>
<tr><td>Monthly ECR Filing Delays</td><td>Late deposits (after 15th) attract 12% interest (Sec 7Q) and damages up to 100% (Sec 14B)</td><td>Timely monthly ECR filing and deposit as part of integrated payroll-PF compliance management.</td></tr>

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
            <h2 class="section-title">PF Contribution Structure and Registration Fees</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Fee Component</th><th>Amount</th></tr></thead>
                    <tbody>
                        <tr><td>EPF (Provident Fund) - Employee</td><td class="table-amount">12% of Basic + DA</td></tr>
<tr><td>EPF - Employer</td><td class="table-amount">3.67% of Basic + DA</td></tr>
<tr><td>EPS (Pension) - Employer</td><td class="table-amount">8.33% of Basic + DA (wages up to Rs 15,000)</td></tr>
<tr><td>EDLI (Insurance) - Employer</td><td class="table-amount">0.50% of Basic + DA</td></tr>
<tr><td>EPF Admin Charges - Employer</td><td class="table-amount">0.50% of Basic + DA (min Rs 75 for &lt;20 emp)</td></tr>
<tr><td>Total Employer Contribution</td><td class="table-amount">13% of Basic + DA</td></tr>
<tr><td>Government Registration Fee</td><td class="table-amount">Free (no fee on USSP portal)</td></tr>
<tr><td>Patron Accounting Professional Fees</td><td class="table-amount">Starting from INR 4,999 (Exl GST and Govt. Charges)</td></tr>

                    </tbody>
                </table>
                </div>
                <p style="margin-top:16px;font-size:13px;color:var(--text-muted);font-style:italic;">All fees and charges listed are indicative only and do not constitute a binding offer. Final amounts may vary depending on the volume of work and the complexity involved.</p>
                <p style="margin-top:16px;">Professional service charges for drafting, filing, and representation are separate from the statutory fees. The exact fee depends on the complexity of the case, disputed amount, and number of hearings required. Contact us for a detailed quote.</p>
                <p style="margin-top:16px;"><strong>Get a free PF Registration consultation - <a href="tel:+919459456700">Call +91 945 945 6700</a> or <a href="https://wa.me/919459456700?text=Hi%2C%20I%20want%20to%20register%20for%20PF.%20Please%20call%20me%20back." target="_blank">WhatsApp us</a>. No-obligation assessment.</strong></p>
            </div>
        </div>
    </div>
</section>

<!-- SECTION 11: TIMELINE -->
<section class="content-section" id="timeline-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">How Long Does PF Registration Take?</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Stage</th><th>Estimated Timeline</th></tr></thead>
                    <tbody>
                        <tr><td>Compliance Assessment</td><td>1 day</td></tr>
<tr><td>USSP Account Creation</td><td>1 day</td></tr>
<tr><td>Registration Form Completion</td><td>1-2 days</td></tr>
<tr><td>Document Upload and DSC Submission</td><td>1 day</td></tr>
<tr><td>EPFO Verification and Approval</td><td>3-7 working days</td></tr>
<tr><td><strong>Total</strong></td><td><strong>7-15 days</strong></td></tr>

                    </tbody>
                </table>
                </div>
                <div class="highlight-box" style="margin-top:16px;">
                    
                    <p><strong>Important:</strong> Registration must be completed within 1 month of employing 20 or more persons. EPFO verification typically takes 3-7 working days after complete submission. Patron Accounting targets completion within 10 days for most applications. Registration is free - no government fee.</p>

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
            <h2 class="section-title">6 Benefits of PF Registration</h2>
        </div>
        <div class="features-grid">
    <article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/></svg></div><h3 class="feature-title">Legal Compliance</h3><p class="feature-text">Ensures compliance with EPF & MP Act, 1952. Non-registration attracts Section 14B damages (up to 100%), Section 7Q interest (12% p.a.), and Section 14(1) prosecution (up to 3 years).</p></article>
    <article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><h3 class="feature-title">Retirement Security</h3><p class="feature-text">EPF provides mandatory retirement savings with compound interest (8.25% for FY 2023-24). Substantial retirement corpus for employees over their career.</p></article>
    <article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M17 21v-2a4 4 0 00-4-4H5a4 4 0 00-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M23 21v-2a4 4 0 00-3-3.87M16 3.13a4 4 0 010 7.75"/></svg></div><h3 class="feature-title">Pension Benefits (EPS)</h3><p class="feature-text">Monthly pension after 58 years of age with 10+ years service. Also provides widow/widower pension and children's pension in case of member's death.</p></article>
    <article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="3" y="11" width="18" height="11" rx="2"/><path d="M7 11V7a5 5 0 0110 0v4"/></svg></div><h3 class="feature-title">Life Insurance (EDLI)</h3><p class="feature-text">EDLI provides lump-sum insurance benefit up to Rs 7 lakh to the employee's family in case of death during service. No separate premium required.</p></article>
    <article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M14 2H6a2 2 0 00-2 2v16a2 2 0 002 2h12a2 2 0 002-2V8z"/><path d="M14 2v6h6M16 13H8M16 17H8"/></svg></div><h3 class="feature-title">Employee Retention</h3><p class="feature-text">PF registration signals social security commitment, improving retention, morale, and trust. Key differentiator in competitive hiring markets for startups and MSMEs.</p></article>
    <article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M13 10V3L4 14h7v7l9-11h-7z"/></svg></div><h3 class="feature-title">Tax Benefits</h3><p class="feature-text">Employee PF contributions eligible for Section 80C deduction (up to Rs 1.5 lakh). Employer contributions are deductible business expense. EPF interest is tax-free up to prescribed limits.</p></article>
</div>
    </div>
</section>

<!-- SECTION 12A: SOCIAL PROOF -->
<section class="content-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Why 10,000+ Businesses Trust Patron Accounting</h2>
            <div class="content-text">
                
                <p><strong>10,000+ Businesses Served</strong> across India.</p>
<p><strong>50,000+ Documents Filed</strong> on government portals.</p>
<p><strong>4.9 Google Rating</strong> based on verified reviews.</p>
<p><strong>15+ Years of Practice.</strong></p>
<p><strong>4 Offices:</strong> Pune, Mumbai, Delhi, and Gurugram.</p>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 13: SELF-FILING vs PROFESSIONAL COMPARISON -->
<section class="content-section" id="comparison-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">PF Registration vs ESI Registration</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Parameter</th><th>PF (EPF) Registration</th><th>ESI Registration</th></tr></thead>
                    <tbody>
                        <tr><td>Governing Act</td><td>EPF & MP Act, 1952</td><td>ESI Act, 1948</td></tr>
<tr><td>Employee Threshold</td><td>20 or more employees</td><td>10 or more employees (notified areas)</td></tr>
<tr><td>Wage Ceiling</td><td>Rs 15,000/month (basic + DA)</td><td>Rs 21,000/month (gross salary)</td></tr>
<tr><td>Employee Contribution</td><td>12% of Basic + DA</td><td>0.75% of gross salary</td></tr>
<tr><td>Employer Contribution</td><td>13% of Basic + DA</td><td>3.25% of gross salary</td></tr>
<tr><td>Benefits</td><td>Retirement savings, pension, life insurance</td><td>Medical care, sickness, maternity, disability</td></tr>
<tr><td>Portal</td><td>USSP / epfindia.gov.in</td><td>USSP / esic.gov.in</td></tr>
<tr><td>Monthly Filing</td><td>ECR by 15th of following month</td><td>Contribution by 15th via ESIC portal</td></tr>

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
            <h2 class="section-title">Related Labour Compliance and Payroll Services</h2>
            <div class="content-text">
                
                <ul>
<li><strong><a href="/pf-return">PF Returns</a></strong> - Monthly ECR filing and annual compliance.</li>
<li><strong><a href="/esic-registration">ESIC Registration</a></strong> - Employee State Insurance for 10+ employees.</li>
<li><strong><a href="/esic-calculation-and-compliance-services">ESIC Compliance</a></strong> - ESI calculation and compliance management.</li>
<li><strong><a href="/payroll-processing-and-management-services">Payroll Services</a></strong> - Integrated payroll with PF/ESI compliance.</li>
<li><strong><a href="/gst-registration">GST Registration</a></strong> - For complete business compliance setup.</li>
</ul>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 15A: LEGAL FRAMEWORK -->
<section class="content-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Legal Framework for PF Registration in India</h2>
            <div class="content-text">
                
                <p><strong>Governing Law:</strong> <a href="https://www.indiacode.nic.in/handle/123456789/1439" target="_blank" rel="noopener">EPF & MP Act, 1952</a>. Three schemes: EPF Scheme 1952, EPS 1995, EDLI 1976.</p>
<p><strong>Key Provisions:</strong></p>
<ul>
<li><strong>Section 1(3)(a)/(b):</strong> Mandatory coverage for 20+ employees across 187 notified classes.</li>
<li><strong>Section 1(4):</strong> Voluntary coverage for below 20 with mutual consent.</li>
<li><strong>Section 6:</strong> Employer and employee contribution rates.</li>
<li><strong>Section 7Q:</strong> Interest at 12% p.a. on delayed payment.</li>
<li><strong>Section 14B:</strong> Damages up to 100% of arrears for delayed payment.</li>
<li><strong>Section 14(1):</strong> Prosecution - imprisonment up to 3 years and/or fine up to Rs 10,000.</li>
<li><strong>Section 10:</strong> PF protected from court attachment.</li>
<li><strong>Section 12:</strong> Employer cannot deduct their share from employee wages (criminal offence).</li>
</ul>
<p><strong>Monthly Compliance:</strong> ECR by 15th. UAN generation and KYC. Form 5 for new members. PF transfer (Form 13). Maintain wage and contribution records.</p>
<p><strong>Regulatory:</strong> <a href="https://www.epfindia.gov.in" target="_blank" rel="noopener">EPFO</a>, Ministry of Labour & Employment. Portal: USSP.</p>

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
                    <h2 class="faq-expanded__title">Frequently Asked Questions - PF Registration</h2>
                    <p class="faq-expanded__lead">Answers about PF registration applicability, contribution rates, voluntary coverage, penalties, UAN, and the EPF system.</p>
                    @include('partials.bigin-form', [
                        'variant'  => 'compact',
                        'service'  => 'PF Registration',
                    ])
                </aside>
                <div class="faq-expanded__list">
                    <div class="faq-expanded__item" id="faq-1">
                        <h3 class="faq-expanded__q">Is PF registration mandatory for all companies?</h3>
                        <div class="faq-expanded__a"><p>PF registration is mandatory for all establishments employing 20 or more persons under Section 1(3) of the EPF & MP Act, 1952. This includes permanent, contractual, and temporary employees across 187 notified classes. Once the threshold is crossed, registration must be completed within one month. Coverage continues even if workforce later drops below 20.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-2">
                        <h3 class="faq-expanded__q">What is the employer PF contribution rate?</h3>
                        <div class="faq-expanded__a"><p>The employer contributes 13% of basic salary + DA (on wages up to Rs 15,000/month). This breaks down as: 3.67% to EPF, 8.33% to EPS (pension), 0.50% to EDLI (insurance), and 0.50% to admin charges. The employee contributes 12% to EPF. For voluntary coverage establishments with below 20 employees, the reduced rate of 10% applies.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-3">
                        <h3 class="faq-expanded__q">Can companies with fewer than 20 employees register?</h3>
                        <div class="faq-expanded__a"><p>Yes. Establishments with fewer than 20 employees can voluntarily opt for EPF coverage under Section 1(4), with mutual consent of employer and majority of employees, subject to EPFO approval. Voluntary registration provides the same benefits and is a strong retention tool for startups and small businesses. Once obtained, coverage continues regardless of workforce fluctuation.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-4">
                        <h3 class="faq-expanded__q">PF registration kaise kare?</h3>
                        <div class="faq-expanded__a"><p>PF registration ke liye epfindia.gov.in par jao aur 'Establishment Registration' click karo. USSP portal par account banao. Login karke 'Registration For EPFO-ESIC' select karo. EPF Act 1952 choose karo. Company ki details, employee strength, PAN, address, bank details fill karo. Documents upload karo aur DSC se submit karo. Free hai, koi government fee nahi. 7-15 din mein Establishment ID mil jayega. Patron Accounting - +91 945 945 6700.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-5">
                        <h3 class="faq-expanded__q">What is the penalty for not registering for PF?</h3>
                        <div class="faq-expanded__a"><p>Section 7Q imposes interest at 12% per annum on delayed contributions. Section 14B allows recovery of damages up to 100% of the arrears. Section 14(1) provides for criminal prosecution with imprisonment up to 3 years and/or fine up to Rs 10,000. EPFO can also attach employer bank accounts, properties, and arrest the employer for recovery of dues.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-6">
                        <h3 class="faq-expanded__q">Does PF coverage continue if employees drop below 20?</h3>
                        <div class="faq-expanded__a"><p>Yes. Once registered under the EPF & MP Act, coverage continues even if workforce drops below 20. The establishment cannot deregister simply because employee count decreased. This is a fundamental principle ensuring existing employees continue to receive PF benefits regardless of subsequent workforce changes.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-7">
                        <h3 class="faq-expanded__q">Company mein PF ka rate kitna hota hai?</h3>
                        <div class="faq-expanded__a"><p>Company mein employee ka PF contribution 12% hota hai basic salary + DA par. Employer ka contribution 13% hota hai (3.67% EPF, 8.33% EPS, 0.50% EDLI, 0.50% admin charges). Ye rate Rs 15,000 per month tak ki wages par applicable hai. 20 se kam employees wali company voluntary registration karein toh 10% rate lagta hai.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-8">
                        <h3 class="faq-expanded__q">What is UAN and how does it work?</h3>
                        <div class="faq-expanded__a"><p>UAN (Universal Account Number) is a unique 12-digit number for each EPF member that remains constant throughout career, even when changing employers. Each new employer generates a new Member ID but all are linked to the same UAN. This enables seamless PF transfer, online passbook access, claim submission, and KYC management through the EPFO Unified Portal.</p></div>
                    </div>
                </div>
            </div>


            <!-- Quick Answers -->
            <div class="highlight-box" style="margin-top:32px;">
                <p><strong>Quick Answers</strong></p>
                <p><strong>Q: Government fee for PF registration?</strong> A: None. EPFO registration is completely free on the USSP portal.</p>
<p><strong>Q: PF wage ceiling?</strong> A: Rs 15,000/month (basic + DA). Employees above can contribute on higher wages with employer consent.</p>
<p><strong>Q: Can employer deduct their share from employee wages?</strong> A: No. Section 12 prohibits this - it is a criminal offence.</p>
<p><strong>Q: EPF interest rate?</strong> A: EPFO declares annually. FY 2023-24: 8.25%. Tax-free up to prescribed limits.</p>
<p><strong>Q: Monthly deposit deadline?</strong> A: 15th of the month following the wage month.</p>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 18: URGENCY CTA -->
<section class="content-section" style="background: var(--orange-lighter) !important; border-left: 4px solid var(--orange);">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Non-Registration Attracts Criminal Prosecution - Register Now</h2>
            <div class="content-text">
                
                <p>Section 14(1) of the EPF & MP Act provides for imprisonment up to 3 years for non-registration. Section 7Q charges 12% interest on unpaid contributions. Section 14B allows damages up to 100% of arrears. EPFO can attach bank accounts and arrest employers for recovery. These penalties apply from the date 20 employees were crossed - not from the date of detection.</p>
<p>Registration is completely free. The 1-month deadline runs from the day you employ 20 persons.</p>
<p><strong>Action:</strong> <a href="tel:+919459456700">Call +91 945 945 6700</a> or <a href="https://wa.me/919459456700?text=Hi%2C%20I%20need%20PF%20Registration.%20Please%20call%20me." target="_blank" rel="noopener">WhatsApp us</a> for a free compliance assessment.</p>

            </div>
        </div>
    </div>
</section>

<!-- CONCLUSION + CTA BLOCK (Dark) -->
<section class="content-section" style="background: var(--blue) !important;">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title" style="color:#FFFFFF !important;">Get Your PF Registration with Expert CA Support</h2>
            <div class="content-text" style="text-align:left;">
                
                <p style="color:rgba(255,255,255,0.85);font-size:15px;line-height:1.8;">PF Registration under the EPF & MP Act, 1952 is mandatory for all establishments employing 20 or more persons. Employee 12% + employer 13% contribution provides retirement savings, pension, and life insurance. Registration is free through the USSP portal.</p>
<p style="color:rgba(255,255,255,0.85);font-size:15px;line-height:1.8;">Non-compliance attracts 12% interest, 100% damages, and imprisonment up to 3 years. Register within 1 month of crossing the 20-employee threshold.</p>
<p style="color:rgba(255,255,255,0.85);font-size:15px;line-height:1.8;">Patron Accounting handles the complete process - registration, UAN generation, monthly ECR filing, and ongoing compliance. 15+ years. 10,000+ businesses. Starting from Rs 4,999.</p>

            </div>
            <div style="display:flex;gap:14px;flex-wrap:wrap;margin-top:24px;">
                <a href="tel:+919459456700" style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:var(--orange);color:#fff;border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#128222; Call +91 945 945 6700</a>
                <a href="https://wa.me/919459456700?text=Hi%2C%20I%20want%20to%20register%20for%20PF.%20Please%20call%20me%20back." target="_blank" style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:#25D366;color:#fff;border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#128172; WhatsApp Us</a>
                <a href="mailto:sales@patronaccounting.com?subject=Enquiry%20for%20PF%20Registration&body=Hello%2C%0A%0AI%20need%20PF%20registration.%0A%0AThank%20you." style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:transparent;color:#fff;border:2px solid rgba(255,255,255,0.3);border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#9993;&#65039; Email Us</a>
            </div>
            <p style="color:rgba(255,255,255,0.7);font-size:13px;margin-top:16px;">Book a Free Consultation - No Obligation.</p>
        </div>
    </div>
</section>

<!-- GSTAT STATE BENCH CITY PAGES (32 Pages) -->
<section class="content-section" style="padding:48px 32px;background:var(--gray-50);">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title" style="text-align:center;margin-bottom:12px;">PF Registration Services Across India</h2>
            <p style="text-align:center;color:var(--text-muted);font-size:15px;margin-bottom:40px;">Expert PF registration for companies, startups, and establishments with integrated payroll and compliance support.</p>
         
            <div class="pa-city-block" style="margin-bottom:40px;"><div class="pa-city-grid"><a href="/pf-registration/pune" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Pune</div><div class="pa-card-sub">Maharashtra</div></div></a><a href="/pf-registration/mumbai" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Mumbai</div><div class="pa-card-sub">Maharashtra</div></div></a><a href="/pf-registration/delhi" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Delhi</div><div class="pa-card-sub">NCR</div></div></a><a href="/pf-registration/gurugram" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Gurugram</div><div class="pa-card-sub">Haryana</div></div></a></div></div>
<div class="pa-city-block"><div class="pa-block-title">Related Services</div><div class="pa-block-sub">Complete labour compliance and payroll</div><div class="pa-cross-grid"><a href="/pf-return" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">PF Returns</div><div class="pa-card-sub">India</div></div></a><a href="/esic-registration" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">ESIC Registration</div><div class="pa-card-sub">India</div></div></a><a href="/esic-calculation-and-compliance-services" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">ESIC Compliance</div><div class="pa-card-sub">India</div></div></a><a href="/payroll-processing-and-management-services" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Payroll Services</div><div class="pa-card-sub">India</div></div></a><a href="/gst-registration" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">GST Registration</div><div class="pa-card-sub">India</div></div></a><a href="#" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">PF Calculator</div><div class="pa-card-sub">India</div></div></a></div></div>
        </div>
    </div>
</section>

<!-- CONTENT FRESHNESS FOOTER -->
<section class="content-section" style="padding:32px;">
    <div class="content-container">
        <div class="text-content" style="font-size:13px;color:var(--text-muted);">
            <p><strong>Content Created:</strong> 10 March 2026 &nbsp;|&nbsp; <strong>Last Updated:</strong> <span id="lastUpdatedFooter">10 March 2026</span> &nbsp;|&nbsp; <strong>Next Review:</strong> 10 September 2026 &nbsp;|&nbsp; <strong>Reviewed By:</strong> CA &amp; CS Team, Patron Accounting LLP</p>
            <p>This page is reviewed annually. Content aligned with the EPF & MP Act 1952, current EPFO notifications, and USSP portal procedures. Next review: September 2026.</p>
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
