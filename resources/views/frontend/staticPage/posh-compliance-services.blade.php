

@extends('layouts.service-app')

<!-- External Dependencies (loaded by master layout in production) -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Barlow:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,400&family=DM+Sans:opsz,wght@9..40,400;9..40,500;9..40,600;9..40,700&display=swap" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

@section('meta')
    <title>POSH Compliance Services - ICC Formation, Policy & Training</title>
    <meta name="description" content="Full POSH Act compliance - IC constitution, POSH policy drafting, employee training, annual reporting, Board Report disclosures. Penalty up to Rs 50,000 + licence cancellation.">
    <link rel="canonical" href="/posh-compliance-services">
    <meta name="robots" content="index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1">
    <meta property="og:title" content="POSH Compliance Services - ICC Formation, Policy & Training">
    <meta property="og:description" content="Full POSH Act compliance - IC constitution, POSH policy drafting, employee training, annual reporting, Board Report disclosures. Penalty up to Rs 50,000 + licence cancellation.">
    <meta property="og:url" content="/posh-compliance-services">
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="Patron Accounting">
    <meta property="og:image" content="https://www.patronaccounting.com/images/og-default-square.png">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="1200">
    <meta property="og:image:type" content="image/png">
    <meta property="og:image:secure_url" content="https://www.patronaccounting.com/images/og-default-square.png">
    <meta property="og:image:alt" content="Patron Accounting - partner you can rely on">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="POSH Compliance Services - ICC Formation, Policy & Training">
    <meta name="twitter:description" content="Full POSH Act compliance - IC constitution, POSH policy drafting, employee training, annual reporting, Board Report disclosures. Penalty up to Rs 50,000 + licence cancellation.">
    <meta name="twitter:image" content="https://www.patronaccounting.com/images/og-default-square.png">
@endsection

@section('schema')
    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@graph": [
        {
          "@type": "Service",
          "name": "POSH Compliance Services India: IC Setup, Training and Audit",
          "description": "Full POSH Act compliance - IC constitution, POSH policy drafting, employee training, annual reporting, Board Report disclosures. Penalty up to Rs 50,000 + licence cancellation.",
          "url": "https://www.patronaccounting.com/posh-compliance-services",
          "serviceType": "POSH Compliance Services India: IC Setup, Training and Audit",
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
            "url": "https://www.patronaccounting.com/posh-compliance-services",
            "priceSpecification": {
              "@type": "PriceSpecification",
              "minPrice": "50000",
              "maxPrice": "300000",
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
              "name": "POSH Compliance Services India: IC Setup, Training and Audit",
              "item": "https://www.patronaccounting.com/posh-compliance-services"
            }
          ]
        },
        {
          "@type": "FAQPage",
          "mainEntity": [
            {
              "@type": "Question",
              "name": "What is POSH compliance?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "POSH compliance refers to adherence to all requirements under the Sexual Harassment of Women at Workplace Act, 2013. This includes constituting an Internal Committee (IC), drafting a POSH policy, displaying notices, conducting employee training, handling complaints within 90 days, filing the IC annual report (Section 21), and including POSH disclosures in the Board Report. Non-compliance attracts Rs 50,000 fine and licence cancellation for repeat offences."
              }
            },
            {
              "@type": "Question",
              "name": "Who needs to comply with the POSH Act?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "Every employer with 10 or more employees at any workplace must comply. Employees include permanent, temporary, contractual, daily-wage, part-time, interns, trainees, apprentices, and volunteers. The Act applies to all sectors: private companies, public sector, government, NGOs, educational institutions, hospitals, factories, and construction sites."
              }
            },
            {
              "@type": "Question",
              "name": "What are the penalties for POSH non-compliance?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "Under Section 26, first offence attracts a fine of up to Rs 50,000. Repeat offence results in double penalty plus cancellation or non-renewal of business licence. Under the Companies Act Section 134(8), failure to include POSH disclosures in the Board Report attracts Rs 3,00,000 on the company and Rs 50,000 on every officer in default."
              }
            },
            {
              "@type": "Question",
              "name": "What changed in 2025 for POSH compliance?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "Three major changes: (1) MCA 2025 Amendment Rules (effective 14 July 2025) require Board Reports to disclose complaint data and gender composition - previously only a simple IC statement was needed. (2) Supreme Court in Aureliano Fernandes v. State of Goa (August 2025) directed district-wise IC verification surveys. (3) Multiple states issued mandatory POSH audit directives."
              }
            },
            {
              "@type": "Question",
              "name": "How to constitute an Internal Committee (IC)?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "Under Section 4: (a) Presiding Officer must be a senior woman employee, (b) not less than 2 members from amongst employees, preferably committed to women's causes, (c) 1 external member from an NGO or association committed to women's causes. At least 50% must be women. The term is 3 years. The employer issues a formal IC constitution order and pays fees to the external member."
              }
            },
            {
              "@type": "Question",
              "name": "What is SHe-Box?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "SHe-Box (Sexual Harassment electronic Box) is the online complaint portal maintained by the Ministry of Women and Child Development at shebox.wcd.gov.in. Following the Supreme Court's August 2025 direction, states are ensuring that organisations register their IC details on SHe-Box for centralised monitoring. Organisations should proactively register. Quick Answers Does POSH apply to remote/WFH employees? Yes. The workplace includes any place visited during employment, including virtual/remote environments. Is the external member mandatory? Yes. Section 4(2)(c) mandates at least one external member from an NGO or association committed to women's causes. Complaint filing deadline? 3 months from the incident (or last incident). IC can extend by 3 months for valid reasons (Section 9). Can men file complaints under POSH? The POSH Act covers only women as complainants. For men, organisations should have a separate internal grievance mechanism."
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
                        POSH Compliance Services in India
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
                            <p class="mb-0 text-dark benefit-paragraph"><span>For:</span> All employers with 10 or more employees - mandatory under the POSH Act, 2013. Covers all sectors: private, public, NGO, education, healthcare.</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Key Requirements:</span> IC Constitution + POSH Policy + Employee Training + Annual Report (Section 21) + Board Report Disclosure (2025 MCA Rules)</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Penalty:</span> Rs 50,000 fine (first offence) | Double penalty + licence cancellation (repeat) | Rs 3,00,000 under Companies Act for Board Report non-disclosure</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>2025 Update:</span> MCA mandates complaint data in Board Reports (effective 14 July 2025). Supreme Court directs district-wise IC verification surveys (Aug 2025).</p>
                        </div>
                    </div>

                    <p class="mb-4 fw-bold" style="color: var(--blue); font-size: 15px;">Trusted by 10,000+ businesses across India for POSH compliance, HR, and corporate governance services</p>

                    <div class="hero-cta">
                        <a href="tel:+919459456700" class="btn-video text-decoration-none">
                            <span class="play-circle"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="width:14px;height:14px;color:#fff"><path d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/></svg></span>
                            Call +91 945 945 6700
                        </a>
                        <a href="mailto:sales@patronaccounting.com?subject=Enquiry%20for%20POSH%20Compliance&body=Hello%20Patron%20Accounting%2C%0A%0AI%20need%20POSH%20compliance.%0A%0APlease%20get%20in%20touch.%0A%0AThank%20you." class="btn-sample text-decoration-none">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="width:18px;height:18px;"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,12 2,6"/></svg>
                            Email Us
                        </a>
                        <a href="https://wa.me/919459456700?text=Hi%20Patron%20Accounting%2C%20I%20need%20POSH%20Compliance%20help.%20Please%20share%20details." target="_blank" class="btn-sample text-decoration-none">
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
                                            'service'  => 'POSH Compliance Services',
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
            <a class="toc-btn" href="#overview-section">Overview</a><a class="toc-btn" href="#what-section">What Is It</a><a class="toc-btn" href="#who-section">Who Must Comply</a><a class="toc-btn" href="#services-section">Our Services</a><a class="toc-btn" href="#procedure-section">7-Step Process</a><a class="toc-btn" href="#documents-section">Documents</a><a class="toc-btn" href="#challenges-section">Challenges</a><a class="toc-btn" href="#fees-section">Penalties</a><a class="toc-btn" href="#timeline-section">Timeline</a><a class="toc-btn" href="#benefits-section">Benefits</a><a class="toc-btn" href="#comparison-section">IC vs LC</a><a class="toc-btn" href="#faq-section">FAQs</a>
        </div>
        <button class="toc-arrow right" id="tocRight">&#10095;</button>
    </div>
</div>

<!-- SECTION 2: OVERVIEW / INTRO + TL;DR -->
<section class="content-section" id="overview-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">POSH Compliance - Complete Overview</h2>
            <div class="content-text">
                <div class="highlight-box" style="margin-bottom:20px;">
                    <p><strong>&#128204; TL;DR - POSH Compliance Services Services at a Glance</strong></p>
                    <p>Every employer with 10 or more employees must comply with the Sexual Harassment of Women at Workplace (Prevention, Prohibition and Redressal) Act, 2013. This includes constituting an Internal Committee (IC), drafting a POSH policy, conducting training, filing annual reports (Section 21), and disclosing complaint data in the Board Report (2025 MCA Amendment Rules). Penalty: Rs 50,000 + licence cancellation for repeat offences.</p><div class="table-responsive-wrapper" style="margin-top:16px;"><table><thead><tr><th>Parameter</th><th>Details</th></tr></thead><tbody><tr><td>Governing Law</td><td>POSH Act, 2013 + SH Rules 2013</td></tr><tr><td>Applicability</td><td>Every workplace with 10+ employees (all sectors)</td></tr><tr><td>Internal Committee</td><td>Presiding Officer (senior woman) + 2 internal + 1 external. 50% women. 3-year term.</td></tr><tr><td>Annual Report</td><td>IC submits to employer + District Officer by 31 January (Section 21)</td></tr><tr><td>Board Report</td><td>Complaints received/resolved/pending + gender composition (MCA 2025 Rules, eff. 14 Jul 2025)</td></tr><tr><td>Penalty (Section 26)</td><td>Rs 50,000 (first) | Double + licence cancellation (repeat) | Rs 3,00,000 Companies Act</td></tr><tr><td>2025 Developments</td><td>MCA Board Report rules (Jul), SC IC verification survey (Aug), state-level audit directives</td></tr></tbody></table></div><p style="margin-top:0;</p>
                </div>
                <p>The POSH Act, 2013 mandates every employer with 10+ employees to constitute an Internal Committee (IC), establish a policy, conduct awareness programmes, and file annual compliance reports. The Act defines sexual harassment broadly including unwelcome physical contact, demand for sexual favours, sexually coloured remarks, showing pornography, and any unwelcome conduct of a sexual nature.</p>
                <p>2025 has been a watershed year for POSH enforcement. The MCA 2025 Amendment Rules expanded Board Report disclosures. The Supreme Court in <em>Aureliano Fernandes v. State of Goa</em> (August 2025) directed district-wise IC verification surveys. Multiple states have issued mandatory POSH audit directives. Patron Accounting provides end-to-end POSH compliance services from offices in Pune, Mumbai, Delhi, and Gurugram.</p>
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
                <h2 class="section-title">What Is POSH Compliance?</h2>
                <div class="content-text what-is-definition">
                    
                    <p>POSH compliance refers to an employer's adherence to all requirements under the Sexual Harassment of Women at Workplace (Prevention, Prohibition and Redressal) Act, 2013. The Act was enacted following the Supreme Court's Vishakha guidelines (1997) and provides a comprehensive legal framework for preventing harassment, establishing complaint mechanisms, conducting fair inquiries, and providing remedies.</p><p>The Act applies to every workplace - offices, factories, branches, field locations, client sites, and virtual/remote environments. It covers all women employees regardless of employment type: permanent, temporary, contractual, daily wage, part-time, intern, trainee, apprentice, and volunteer.</p><p>The Act creates a dual committee system: the Internal Committee (IC) for workplaces with 10+ employees (Section 4), and the Local Committee (LC) constituted by the District Officer for establishments with fewer than 10 employees (Section 6).</p>

                </div>
                <div class="highlight-box" style="margin-top:20px;">
                    <p><strong>Key Terms for POSH Compliance Services:</strong></p>
                    <p><strong>Internal Committee (IC)</strong> - Mandatory for 10+ employee workplaces. Presiding Officer (senior woman) + 2 internal members + 1 external member. 50% women. 3-year term (Section 4).</p><p><strong>SHe-Box</strong> - Sexual Harassment electronic Box at <a href="https://shebox.wcd.gov.in" target="_blank" rel="noopener">shebox.wcd.gov.in</a> - online portal for centralised IC data monitoring. Registration now actively pushed by Supreme Court.</p><p><strong>90-Day Inquiry Timeline</strong> - IC must complete inquiry within 90 days from complaint receipt (Section 11(4)).</p><p><strong>Section 21 Annual Report</strong> - IC must submit report to employer and District Officer with complaints received, disposed, pending, and programmes conducted.</p>

                </div>
            </div>
            <div class="column-image">
                <div class="illustration-placeholder">
                    <div class="illustration-icon" style="max-width:240px;">
                        <svg viewBox="0 0 200 180" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M100 15L45 42V95C45 135 100 165 100 165C100 165 155 135 155 95V42L100 15Z" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><text x="100" y="60" font-size="14" fill="#14365F" font-weight="800" text-anchor="middle" font-family="Arial, sans-serif">POSH</text><text x="100" y="78" font-size="9" fill="#F5A623" font-weight="700" text-anchor="middle" font-family="Arial, sans-serif">2013</text><circle cx="100" cy="105" r="14" fill="#E8F5E9" stroke="#25D366" stroke-width="1.5"/><path d="M93 105l4 4 9-9" stroke="#25D366" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"/><rect x="25" y="130" width="55" height="18" rx="4" fill="#FFF3E0" stroke="#F5A623" stroke-width="1"/><text x="52" y="142.5" font-size="7" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial, sans-serif">Section 4</text><circle cx="165" cy="30" r="16" fill="#E8F5E9" stroke="#25D366" stroke-width="1.5"/><text x="165" y="34" font-size="7" fill="#25D366" font-weight="700" text-anchor="middle" font-family="Arial, sans-serif">IC</text><text x="100" y="170" font-size="10" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial, sans-serif">POSH Compliance</text></svg>
                    </div>
                    <div class="illustration-badge">
                        <span>POSH Act 2013</span>
                        <strong>POSH Compliance</strong>
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
            <h2 class="section-title">Who Must Comply with the POSH Act?</h2>
            <div class="content-text">
                
                <ul><li><strong>Companies (Pvt Ltd, Public Ltd, LLP):</strong> Every company with 10+ employees. Board Report disclosure now mandatory under 2025 MCA Amendment Rules</li><li><strong>Startups and SMEs:</strong> POSH triggers once headcount reaches 10 employees (including contractual/intern). Many startups miss this during rapid hiring</li><li><strong>IT and Technology Companies:</strong> Remote and hybrid work environments are covered. IC jurisdiction extends to virtual workplaces</li><li><strong>Educational Institutions:</strong> Schools, colleges, universities, coaching centres. Students covered as aggrieved women</li><li><strong>Healthcare and Hospitals:</strong> All staff including contract workers, visiting consultants, and interns</li><li><strong>NGOs and Non-Profits:</strong> All registered societies, trusts, and Section 8 companies with 10+ employees or volunteers</li><li><strong>Manufacturing and Construction:</strong> Factories, construction sites, warehouses. Must cover contractual and daily-wage women</li></ul>

            </div>
            </div>
        </div>
    </div>
</section>

<!-- SECTION 5: OUR SERVICES -->
<section class="content-section" id="services-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Our POSH Compliance Services</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Service</th><th>What We Do</th></tr></thead>
                    <tbody>
                        <tr><td>IC Constitution and External Member</td><td>Help constitute your Internal Committee with correct composition (Section 4), appoint a qualified external member from our empanelled network, and prepare the IC constitution order</td></tr><tr><td>POSH Policy Drafting</td><td>Comprehensive anti-sexual harassment policy tailored to your organisation - definitions, complaint procedures, inquiry process, confidentiality, and consequences. Aligned with current judicial interpretations</td></tr><tr><td>Employee Awareness Training</td><td>Mandatory awareness programmes for all employees covering harassment definitions, complaint filing, IC role, confidentiality, and consequences. Customised for industry, size, and language</td></tr><tr><td>IC Member Training (Capacity Building)</td><td>Specialised training for IC members on conducting fair inquiries, recording statements, maintaining confidentiality, natural justice principles, and report writing</td></tr><tr><td>Annual Report and Board Report Compliance</td><td>Preparation of Section 21 annual report for District Officer. Board Report disclosures under 2025 MCA Amendment Rules (complaint data + gender composition)</td></tr><tr><td>POSH Audit and SHe-Box Registration</td><td>Comprehensive POSH audit covering all 8 employer obligations (Section 19). IC registration on <a href="https://shebox.wcd.gov.in" target="_blank" rel="noopener">SHe-Box</a>. State-level IC registration where mandated</td></tr>

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
            <h2 class="section-title">7-Step POSH Compliance Process</h2>
            <p class="section-subtitle" style="text-align:left;max-width:100%;">Patron Accounting guides you through complete POSH compliance - from IC constitution to annual reporting under the POSH Act, 2013.</p>
        </header>
        <div class="steps-container">
            <div class="step-card"><div class="step-content"><span class="step-badge">Step 1</span><h3 class="step-title">Applicability Assessment</h3><p class="step-description">Determine if your organisation has 10 or more employees (including contractual, intern, daily-wage). If yes, POSH Act applies mandatorily. If under 10, complaints go to the Local Committee.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> 10+ threshold checked</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> All employee types counted</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="20" y="10" width="80" height="65" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><circle cx="55" cy="38" r="15" fill="none" stroke="#F5A623" stroke-width="2"/><line x1="66" y1="48" x2="78" y2="60" stroke="#F5A623" stroke-width="3" stroke-linecap="round"/><text x="60" y="68" font-size="6" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">10+ EMP?</text></svg></div><span class="illustration-label">Applicable</span><span class="step-number-large">01</span></div></div></div>
<div class="step-card"><div class="step-content"><span class="step-badge">Step 2</span><h3 class="step-title">Constitute Internal Committee (IC)</h3><p class="step-description">Appoint: (a) Presiding Officer - senior woman employee, (b) minimum 2 internal members, (c) 1 external member from NGO or legal background. At least 50% women. Issue formal IC constitution order. Term: 3 years.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> IC constituted</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> External member appointed</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="15" y="10" width="90" height="65" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><circle cx="40" cy="35" r="10" fill="#FFF3E0" stroke="#F5A623" stroke-width="1"/><circle cx="60" cy="35" r="10" fill="#FFF3E0" stroke="#F5A623" stroke-width="1"/><circle cx="80" cy="35" r="10" fill="#FFF3E0" stroke="#F5A623" stroke-width="1"/><circle cx="50" cy="55" r="10" fill="#E8F5E9" stroke="#25D366" stroke-width="1"/><text x="60" y="68" font-size="6" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">IC MEMBERS</text></svg></div><span class="illustration-label">IC Ready</span><span class="step-number-large">02</span></div></div></div>
<div class="step-card"><div class="step-content"><span class="step-badge">Step 3</span><h3 class="step-title">Draft and Adopt POSH Policy</h3><p class="step-description">Create comprehensive policy covering: definition of sexual harassment, complaint filing procedure, inquiry process, interim relief, confidentiality, consequences, and protection against retaliation. Get Board/management approval.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Policy drafted</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Board approved</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="15" y="5" width="90" height="75" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><rect x="15" y="5" width="90" height="16" rx="6" fill="#14365F"/><text x="60" y="17" font-size="7" fill="#fff" font-weight="700" text-anchor="middle" font-family="Arial">POSH POLICY</text><line x1="28" y1="32" x2="92" y2="32" stroke="#F5A623" stroke-width="2" stroke-linecap="round"/><line x1="28" y1="44" x2="80" y2="44" stroke="#14365F" stroke-width="1.5" opacity="0.3"/><line x1="28" y1="54" x2="70" y2="54" stroke="#14365F" stroke-width="1.5" opacity="0.3"/></svg></div><span class="illustration-label">Policy Adopted</span><span class="step-number-large">03</span></div></div></div>
<div class="step-card"><div class="step-content"><span class="step-badge">Step 4</span><h3 class="step-title">Display Notices and Communicate</h3><p class="step-description">Display notices at conspicuous locations (entrance, lifts, canteen, washrooms) with IC member names, contact details, and complaint procedure in English and local language(s). Section 19(c) mandates this.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Notices displayed</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Bilingual format</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="25" y="10" width="70" height="65" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><rect x="25" y="10" width="70" height="15" rx="6" fill="#14365F"/><text x="60" y="21" font-size="6" fill="#fff" font-weight="700" text-anchor="middle" font-family="Arial">NOTICE</text><text x="60" y="40" font-size="5" fill="#14365F" font-weight="600" text-anchor="middle" font-family="Arial">IC Members</text><text x="60" y="52" font-size="5" fill="#14365F" font-weight="600" text-anchor="middle" font-family="Arial">Contact Details</text><text x="60" y="64" font-size="5" fill="#F5A623" font-weight="700" text-anchor="middle" font-family="Arial">Complaint Process</text></svg></div><span class="illustration-label">Notices Up</span><span class="step-number-large">04</span></div></div></div>
<div class="step-card"><div class="step-content"><span class="step-badge">Step 5</span><h3 class="step-title">Conduct Employee Awareness Training</h3><p class="step-description">Organise awareness sessions for all employees (including new joiners) covering what constitutes harassment, how to report, IC process, and consequences. Document attendance. Section 19(b) mandates regular orientation.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Training conducted</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Attendance documented</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="15" y="15" width="90" height="55" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><circle cx="40" cy="38" r="8" fill="#FFF3E0" stroke="#F5A623" stroke-width="1"/><circle cx="60" cy="38" r="8" fill="#FFF3E0" stroke="#F5A623" stroke-width="1"/><circle cx="80" cy="38" r="8" fill="#FFF3E0" stroke="#F5A623" stroke-width="1"/><rect x="30" y="52" width="60" height="8" rx="2" fill="#E8F5E9" stroke="#25D366" stroke-width="0.8"/><text x="60" y="58" font-size="5" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">TRAINING</text></svg></div><span class="illustration-label">Training Done</span><span class="step-number-large">05</span></div></div></div>
<div class="step-card"><div class="step-content"><span class="step-badge">Step 6</span><h3 class="step-title">Handle Complaints (If Any)</h3><p class="step-description">When a complaint is filed, IC must: acknowledge within 7 days, attempt conciliation (if requested), conduct inquiry within 90 days, submit findings and recommendations to employer. Employer implements within 60 days.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> 90-day inquiry process</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Recommendations submitted</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="20" y="10" width="80" height="65" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><circle cx="60" cy="38" r="18" fill="none" stroke="#F5A623" stroke-width="2"/><text x="60" y="42" font-size="8" fill="#F5A623" font-weight="800" text-anchor="middle" font-family="Arial">90</text><text x="60" y="68" font-size="6" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">DAYS MAX</text></svg></div><span class="illustration-label">Inquiry Complete</span><span class="step-number-large">06</span></div></div></div>
<div class="step-card"><div class="step-content"><span class="step-badge">Step 7</span><h3 class="step-title">Annual Report and Board Report Filing</h3><p class="step-description">IC prepares Section 21 annual report (complaints received, disposed, pending, programmes conducted). Submit to employer and District Officer. For companies: include disclosures in Board Report per 2025 MCA Rules. Register IC on SHe-Box.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Section 21 filed</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Board Report updated</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="20" y="10" width="80" height="65" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><circle cx="60" cy="38" r="18" fill="#E8F5E9" stroke="#25D366" stroke-width="1.5"/><path d="M52 38l5 5 11-11" stroke="#25D366" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"/><text x="60" y="68" font-size="6" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">ANNUAL REPORT</text></svg></div><span class="illustration-label">Fully Compliant</span><span class="step-number-large">07</span></div></div></div>

        </div>
    </div>
</section>

<!-- SECTION 8: DOCUMENTS REQUIRED -->
<section class="content-section" id="documents-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Documents Required for POSH Compliance Setup</h2>
            <div class="content-text">
                
                <ul><li><strong>IC Constitution Order:</strong> Formal order from employer appointing IC members with names, designations, and term</li><li><strong>External Member Appointment Letter:</strong> Letter appointing external member with fee/allowance terms</li><li><strong>POSH Policy Document:</strong> Board-approved anti-sexual harassment policy</li><li><strong>Display Notices:</strong> Bilingual notices with IC member details and complaint procedure for workplace display</li><li><strong>Training Records:</strong> Attendance sheets, training content, and calendar of awareness programmes</li><li><strong>Complaint Register:</strong> Confidential register/system for recording complaints, inquiry proceedings, and outcomes</li><li><strong>Section 21 Annual Report:</strong> Standardised annual report with prescribed data points</li><li><strong>Board Report Extract:</strong> Disclosure text per Section 134(3)(q) and 2025 MCA Amendment Rules</li></ul>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 9: CHALLENGES -->
<section class="content-section" id="challenges-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Common POSH Compliance Challenges and Solutions</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Challenge</th><th>Impact</th><th>How Patron Accounting Solves It</th></tr></thead>
                    <tbody>
                        <tr><td>No Senior Woman for Presiding Officer</td><td>In male-dominated industries, finding a senior woman employee for the IC chair is difficult</td><td>The Act provides that if no senior woman is available, the PO can be nominated from other offices/units of the same employer (Section 4 proviso)</td></tr><tr><td>Finding Qualified External Member</td><td>Many organisations struggle to find a suitable external member from NGO or legal background</td><td>Patron Accounting maintains an empanelled network of qualified external members available across India</td></tr><tr><td>Remote/Hybrid Workforce Coverage</td><td>Distributed teams make training and complaint access complex across locations</td><td>We conduct virtual POSH training sessions and establish digital complaint filing mechanisms that work across all locations</td></tr><tr><td>2025 Board Report Disclosure Gap</td><td>Many companies are unprepared for the expanded MCA disclosure requirements effective July 2025</td><td>We prepare the exact disclosure text with complaint data and gender composition in the format required by the 2025 Amendment Rules</td></tr>

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
            <h2 class="section-title">POSH Non-Compliance Penalties</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Fee Component</th><th>Amount</th></tr></thead>
                    <tbody>
                        <tr><td>POSH Act Section 26 - First Offence</td><td>Fine up to Rs 50,000</td></tr><tr><td>POSH Act Section 26(2) - Repeat Offence</td><td>Double penalty + cancellation/non-renewal of business licence</td></tr><tr><td>Companies Act Section 134(8) - Board Report</td><td>Company: Rs 3,00,000 | Each officer in default: Rs 50,000</td></tr><tr><td>Non-filing of IC Annual Report</td><td>Non-compliance under Section 26 - fine + potential prosecution</td></tr><tr><td>Non-constitution of IC</td><td>Fine + continuing offence prosecution by District Officer</td></tr><tr><td>Patron Accounting Professional Fees</td><td>Starting from INR 14,999 (Exl GST and Govt. Charges)</td></tr>

                    </tbody>
                </table>
                </div>
                <p style="margin-top:16px;font-size:13px;color:var(--text-muted);font-style:italic;">All fees and charges listed are indicative only and do not constitute a binding offer. Final amounts may vary depending on the volume of work and the complexity involved.</p>
                <p style="margin-top:16px;">Professional service charges for drafting, filing, and representation are separate from the statutory fees. The exact fee depends on the complexity of the case, disputed amount, and number of hearings required. Contact us for a detailed quote.</p>
                <p style="margin-top:16px;"><strong>Get a free POSH Compliance Services consultation - <a href="tel:+919459456700">Call +91 945 945 6700</a> or <a href="https://wa.me/919459456700?text=Hi%20Patron%20Accounting%2C%20I%20need%20POSH%20compliance%20services.%20Please%20call%20me." target="_blank">WhatsApp us</a>. No-obligation assessment.</strong></p>
            </div>
        </div>
    </div>
</section>

<!-- SECTION 11: TIMELINE -->
<section class="content-section" id="timeline-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">POSH Compliance Setup Timeline</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Stage</th><th>Estimated Timeline</th></tr></thead>
                    <tbody>
                        <tr><td>IC Constitution</td><td>3-7 days</td></tr><tr><td>POSH Policy Drafting</td><td>5-10 days</td></tr><tr><td>Employee Training</td><td>1-2 sessions (2-3 hours each)</td></tr><tr><td>IC Member Training</td><td>1 day intensive</td></tr><tr><td>Notice Display</td><td>1 day</td></tr><tr><td>SHe-Box Registration</td><td>1-2 days</td></tr><tr><td>Total Initial Setup</td><td>2-4 weeks</td></tr>

                    </tbody>
                </table>
                </div>
                <div class="highlight-box" style="margin-top:16px;">
                    
                    <p><strong>Important:</strong> The Section 21 annual report is due by 31 January each year (calendar year basis). Board Report disclosures are required for the financial year ending 31 March. Following the Supreme Court's Aug 2025 direction, state authorities are actively surveying IC constitution compliance. Start immediately to avoid penalty exposure.</p>

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
            <h2 class="section-title">Benefits of Professional POSH Compliance</h2>
        </div>
        <div class="features-grid" style="display:grid;grid-template-columns:repeat(3,1fr);gap:24px;"><article class="feature-card" style="background:var(--white);border:1px solid var(--gray-200);border-radius:var(--radius-lg);padding:28px;"><div style="width:48px;height:48px;background:var(--orange-light);border-radius:var(--radius-md);display:flex;align-items:center;justify-content:center;margin-bottom:16px;"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M17 21v-2a4 4 0 00-4-4H5a4 4 0 00-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M23 21v-2a4 4 0 00-3-3.87"/><path d="M16 3.13a4 4 0 010 7.75"/></svg></div><h3 style="font-size:17px;font-weight:700;color:var(--blue);margin-bottom:8px;">Legally Compliant IC</h3><p style="font-size:14px;color:var(--text-secondary);line-height:1.6;margin:0;">Correctly constituted IC with qualified external member from our empanelled network - meeting all Section 4 requirements including 50% women composition</p></article><article class="feature-card" style="background:var(--white);border:1px solid var(--gray-200);border-radius:var(--radius-lg);padding:28px;"><div style="width:48px;height:48px;background:var(--orange-light);border-radius:var(--radius-md);display:flex;align-items:center;justify-content:center;margin-bottom:16px;"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M14 2H6a2 2 0 00-2 2v16a2 2 0 002 2h12a2 2 0 002-2V8z"/><path d="M14 2v6h6M16 13H8M16 17H8"/></svg></div><h3 style="font-size:17px;font-weight:700;color:var(--blue);margin-bottom:8px;">Practical POSH Policy</h3><p style="font-size:14px;color:var(--text-secondary);line-height:1.6;margin:0;">Policy that works for your organisation - not a generic template. Aligned with current judicial rulings and 2025 amendments</p></article><article class="feature-card" style="background:var(--white);border:1px solid var(--gray-200);border-radius:var(--radius-lg);padding:28px;"><div style="width:48px;height:48px;background:var(--orange-light);border-radius:var(--radius-md);display:flex;align-items:center;justify-content:center;margin-bottom:16px;"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><path d="M8 14s1.5 2 4 2 4-2 4-2"/><line x1="9" y1="9" x2="9.01" y2="9"/><line x1="15" y1="9" x2="15.01" y2="9"/></svg></div><h3 style="font-size:17px;font-weight:700;color:var(--blue);margin-bottom:8px;">Engaging Training</h3><p style="font-size:14px;color:var(--text-secondary);line-height:1.6;margin:0;">Interactive awareness sessions employees actually absorb - customised for industry context, language needs, and workforce demographics</p></article><article class="feature-card" style="background:var(--white);border:1px solid var(--gray-200);border-radius:var(--radius-lg);padding:28px;"><div style="width:48px;height:48px;background:var(--orange-light);border-radius:var(--radius-md);display:flex;align-items:center;justify-content:center;margin-bottom:16px;"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M22 11.08V12a10 10 0 11-5.93-9.14"/><path d="M22 4L12 14.01l-3-3"/></svg></div><h3 style="font-size:17px;font-weight:700;color:var(--blue);margin-bottom:8px;">2025 MCA Board Report Compliance</h3><p style="font-size:14px;color:var(--text-secondary);line-height:1.6;margin:0;">Board Report disclosures prepared in the exact format required - complaint data + gender composition per 2025 Amendment Rules</p></article><article class="feature-card" style="background:var(--white);border:1px solid var(--gray-200);border-radius:var(--radius-lg);padding:28px;"><div style="width:48px;height:48px;background:var(--orange-light);border-radius:var(--radius-md);display:flex;align-items:center;justify-content:center;margin-bottom:16px;"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><path d="M12 6v6l4 2"/></svg></div><h3 style="font-size:17px;font-weight:700;color:var(--blue);margin-bottom:8px;">Annual Lifecycle Management</h3><p style="font-size:14px;color:var(--text-secondary);line-height:1.6;margin:0;">IC annual report, Board Report disclosure, SHe-Box registration, state-level compliance, and IC member renewal - all managed proactively</p></article></div>
    </div>
</section>

<!-- SECTION 12A: SOCIAL PROOF -->
<section class="content-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Why 10,000+ Businesses Trust Patron Accounting</h2>
            <div class="content-text">
                
                <p><strong>10,000+ businesses</strong> including companies, startups, NGOs, and educational institutions trust Patron Accounting for POSH compliance, HR, and corporate governance. With <strong>15+ years of experience</strong>, a <strong>4.9-star Google rating</strong>, and <strong>50,000+ documents filed</strong>, our team delivers reliable workplace compliance.</p><p>Offices in Pune, Mumbai, Delhi, and Gurugram.</p>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 13: SELF-FILING vs PROFESSIONAL COMPARISON -->
<section class="content-section" id="comparison-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Internal Committee (IC) vs Local Committee (LC)</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Parameter</th><th>Internal Committee (IC)</th><th>Local Committee (LC)</th></tr></thead>
                    <tbody>
                        <tr><td>Applicability</td><td>Workplaces with 10+ employees</td><td>Workplaces with &lt;10 employees OR complaint against employer</td></tr><tr><td>Constituted By</td><td>Employer (Section 4)</td><td>District Officer (Section 6)</td></tr><tr><td>Presiding Officer</td><td>Senior woman employee</td><td>Eminent woman from social work field</td></tr><tr><td>Members</td><td>Min 2 internal + 1 external. 50% women.</td><td>Min 1 woman from SC/ST/OBC/minority + 1 NGO member + District Officer nominee</td></tr><tr><td>Term</td><td>3 years</td><td>3 years</td></tr>

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
            <h2 class="section-title">Related Compliance and Business Services</h2>
            <div class="content-text">
                
                <ul><li><a href="/private-limited-company-registration">Pvt Ltd Registration</a> - Company incorporation with POSH compliance setup</li><li><a href="/startup-registration">Startup Registration</a> - DPIIT recognition with compliance framework</li><li><a href="/payroll-processing-and-management-services">Payroll Processing</a> - Integrated HR and compliance services</li><li><a href="/gst-registration">GST Registration</a> - Business registration services</li><li><a href="/llp-incorporation">LLP Registration</a> - Limited Liability Partnership</li></ul>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 15A: LEGAL FRAMEWORK -->
<section class="content-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Legal Framework for POSH Compliance</h2>
            <div class="content-text">
                
                <div class="table-responsive-wrapper"><table><thead><tr><th>Section</th><th>Key Provision</th></tr></thead><tbody><tr><td>Section 4</td><td>IC constitution mandatory for 10+ employee workplaces. Presiding Officer (senior woman) + 2 internal + 1 external. 50% women. 3-year term.</td></tr><tr><td>Section 19</td><td>8 employer obligations: safe conditions, display notices, awareness programmes, assist criminal filing, ensure IC functioning, declare policy, include annual report, treat as misconduct</td></tr><tr><td>Section 21</td><td>IC annual report to employer + District Officer: complaints received, disposed, pending >90 days, awareness programmes</td></tr><tr><td>Section 26</td><td>Penalty: Rs 50,000 (first offence). Double + licence cancellation (repeat). Continuing offence.</td></tr><tr><td><a href="https://www.mca.gov.in" target="_blank" rel="noopener">Companies Act Sec 134(3)(q)</a></td><td>Board Report must include IC statement. 2025 MCA Rules: disclose complaints received/resolved/pending + gender composition</td></tr><tr><td>SC Aug 2025 (Aureliano Fernandes)</td><td>Directed all states to conduct district-wise IC verification surveys. Data on <a href="https://shebox.wcd.gov.in" target="_blank" rel="noopener">SHe-Box</a>.</td></tr></tbody></table></div><p><strong>Regulatory Authority:</strong> Ministry of Women and Child Development (SHe-Box). <a href="https://www.mca.gov.in" target="_blank" rel="noopener">MCA</a> (Board Report). District Officers (Section 26 prosecution).</p>

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
                    <h2 class="faq-expanded__title">Frequently Asked Questions - POSH Compliance</h2>
                    <p class="faq-expanded__lead">Expert answers to common questions about POSH Act compliance, IC constitution, training, and 2025 amendments.</p>
                    @include('partials.bigin-form', [
                        'variant'  => 'compact',
                        'service'  => 'POSH Compliance Services',
                    ])
                </aside>
                <div class="faq-expanded__list">
                    <div class="faq-expanded__item" id="faq-1">
                        <h3 class="faq-expanded__q">What is POSH compliance?</h3>
                        <div class="faq-expanded__a"><p>POSH compliance refers to adherence to all requirements under the Sexual Harassment of Women at Workplace Act, 2013. This includes constituting an Internal Committee (IC), drafting a POSH policy, displaying notices, conducting employee training, handling complaints within 90 days, filing the IC annual report (Section 21), and including POSH disclosures in the Board Report. Non-compliance attracts Rs 50,000 fine and licence cancellation for repeat offences.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-2">
                        <h3 class="faq-expanded__q">Who needs to comply with the POSH Act?</h3>
                        <div class="faq-expanded__a"><p>Every employer with 10 or more employees at any workplace must comply. Employees include permanent, temporary, contractual, daily-wage, part-time, interns, trainees, apprentices, and volunteers. The Act applies to all sectors: private companies, public sector, government, NGOs, educational institutions, hospitals, factories, and construction sites.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-3">
                        <h3 class="faq-expanded__q">What are the penalties for POSH non-compliance?</h3>
                        <div class="faq-expanded__a"><p>Under Section 26, first offence attracts a fine of up to Rs 50,000. Repeat offence results in double penalty plus cancellation or non-renewal of business licence. Under the Companies Act Section 134(8), failure to include POSH disclosures in the Board Report attracts Rs 3,00,000 on the company and Rs 50,000 on every officer in default.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-4">
                        <h3 class="faq-expanded__q">What changed in 2025 for POSH compliance?</h3>
                        <div class="faq-expanded__a"><p>Three major changes: (1) MCA 2025 Amendment Rules (effective 14 July 2025) require Board Reports to disclose complaint data and gender composition - previously only a simple IC statement was needed. (2) Supreme Court in Aureliano Fernandes v. State of Goa (August 2025) directed district-wise IC verification surveys. (3) Multiple states issued mandatory POSH audit directives.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-5">
                        <h3 class="faq-expanded__q">How to constitute an Internal Committee (IC)?</h3>
                        <div class="faq-expanded__a"><p>Under Section 4: (a) Presiding Officer must be a senior woman employee, (b) not less than 2 members from amongst employees, preferably committed to women's causes, (c) 1 external member from an NGO or association committed to women's causes. At least 50% must be women. The term is 3 years. The employer issues a formal IC constitution order and pays fees to the external member.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-6">
                        <h3 class="faq-expanded__q">What is SHe-Box?</h3>
                        <div class="faq-expanded__a"><p>SHe-Box (Sexual Harassment electronic Box) is the online complaint portal maintained by the Ministry of Women and Child Development at shebox.wcd.gov.in. Following the Supreme Court's August 2025 direction, states are ensuring that organisations register their IC details on SHe-Box for centralised monitoring. Organisations should proactively register.</p></div>
                    </div>
                </div>
            </div>


            <!-- Quick Answers -->
            <div class="highlight-box" style="margin-top:32px;">
                <p><strong>Quick Answers</strong></p>
                <p><strong>Does POSH apply to remote/WFH employees?</strong> Yes. The workplace includes any place visited during employment, including virtual/remote environments.</p><p><strong>Is the external member mandatory?</strong> Yes. Section 4(2)(c) mandates at least one external member from an NGO or association committed to women's causes.</p><p><strong>Complaint filing deadline?</strong> 3 months from the incident (or last incident). IC can extend by 3 months for valid reasons (Section 9).</p><p><strong>Can men file complaints under POSH?</strong> The POSH Act covers only women as complainants. For men, organisations should have a separate internal grievance mechanism.</p>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 18: URGENCY CTA -->
<section class="content-section" style="background: var(--orange-lighter) !important; border-left: 4px solid var(--orange);">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Get POSH Compliant Now - Enforcement Is Active</h2>
            <div class="content-text">
                
                <p>POSH enforcement has intensified dramatically in 2025-2026. The Supreme Court has directed district-wise IC verification. MCA requires Board-level complaint data disclosure. State authorities are conducting mandatory audits. Non-compliance is a continuing offence with Rs 50,000 fine, licence cancellation risk, and Rs 3,00,000 Companies Act penalty.</p><p><strong>Every day without an IC is a day of non-compliance.</strong> <a href="tel:+919459456700">Call +91 945 945 6700</a> or <a href="https://wa.me/919459456700?text=Hi%20Patron%20Accounting%2C%20I%20need%20POSH%20compliance%20services.%20Please%20call%20me." target="_blank">WhatsApp us</a> to get compliant immediately.</p>

            </div>
        </div>
    </div>
</section>

<!-- CONCLUSION + CTA BLOCK (Dark) -->
<section class="content-section" style="background: var(--blue) !important;">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title" style="color:#FFFFFF !important;">Make Your Workplace Safe and POSH Compliant</h2>
            <div class="content-text" style="text-align:left;">
                
                <p style="color:rgba(255,255,255,0.9);font-size:15px;line-height:1.7;">POSH compliance is no longer optional for any employer with 10+ employees. The POSH Act 2013, strengthened by the 2025 MCA Amendment Rules and the Supreme Court enforcement directive, demands that every organisation constitutes an IC, implements a policy, trains employees, handles complaints within 90 days, and reports compliance data annually.</p><p style="color:rgba(255,255,255,0.9);font-size:15px;line-height:1.7;">Patron Accounting provides end-to-end POSH compliance - IC constitution, external member appointment, policy drafting, training, annual reporting, Board Report disclosures, and SHe-Box registration. With offices in Pune, Mumbai, Delhi, and Gurugram, we ensure your workplace is safe and compliant.</p>

            </div>
            <div style="display:flex;gap:14px;flex-wrap:wrap;margin-top:24px;">
                <a href="tel:+919459456700" style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:var(--orange);color:#fff;border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#128222; Call +91 945 945 6700</a>
                <a href="https://wa.me/919459456700?text=Hi%20Patron%20Accounting%2C%20I%20need%20POSH%20compliance%20services.%20Please%20call%20me." target="_blank" style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:#25D366;color:#fff;border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#128172; WhatsApp Us</a>
                <a href="mailto:sales@patronaccounting.com?subject=Enquiry%20for%20POSH%20Compliance&body=Hello%20Patron%20Accounting%2C%0A%0AI%20need%20POSH%20Compliance%20Services.%0A%0APlease%20get%20in%20touch.%0A%0AThank%20you." style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:transparent;color:#fff;border:2px solid rgba(255,255,255,0.3);border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#9993;&#65039; Email Us</a>
            </div>
            <p style="color:rgba(255,255,255,0.7);font-size:13px;margin-top:16px;">Book a Free Consultation - No Obligation.</p>
        </div>
    </div>
</section>

<!-- GSTAT STATE BENCH CITY PAGES (32 Pages) -->
<section class="content-section" style="padding:48px 32px;background:var(--gray-50);">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title" style="text-align:center;margin-bottom:12px;">POSH Compliance Services Across India</h2>
            <p style="text-align:center;color:var(--text-muted);font-size:15px;margin-bottom:40px;">Patron Accounting provides POSH compliance for employers in major cities across India.</p>
           
            <div class="pa-city-block" style="margin-bottom:40px;"><p class="pa-block-title">POSH Compliance by City</p><p class="pa-block-sub">Expert IC constitution, training, and audit</p><div class="pa-city-grid"><a href="/posh-compliance-services/pune" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Pune</div><div class="pa-card-sub">Maharashtra</div></div></a><a href="/posh-compliance-services/mumbai" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Mumbai</div><div class="pa-card-sub">Maharashtra</div></div></a><a href="/posh-compliance-services/delhi" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Delhi</div><div class="pa-card-sub">NCR</div></div></a><a href="/posh-compliance-services/gurugram" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Gurugram</div><div class="pa-card-sub">Haryana</div></div></a></div></div><div class="pa-city-block"><p class="pa-block-title">Related Compliance Services</p><p class="pa-block-sub">Corporate governance and HR compliance</p><div class="pa-cross-grid"><a href="/private-limited-company-registration" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M14 2H6a2 2 0 00-2 2v16a2 2 0 002 2h12a2 2 0 002-2V8z"/><path d="M14 2v6h6M16 13H8M16 17H8"/></svg></div><div><div class="pa-card-title">Pvt Ltd Registration</div><div class="pa-card-sub">India</div></div></a><a href="/startup-registration" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M14 2H6a2 2 0 00-2 2v16a2 2 0 002 2h12a2 2 0 002-2V8z"/><path d="M14 2v6h6M16 13H8M16 17H8"/></svg></div><div><div class="pa-card-title">Startup Registration</div><div class="pa-card-sub">DPIIT</div></div></a><a href="/payroll-processing-and-management-services" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M14 2H6a2 2 0 00-2 2v16a2 2 0 002 2h12a2 2 0 002-2V8z"/><path d="M14 2v6h6M16 13H8M16 17H8"/></svg></div><div><div class="pa-card-title">Payroll Services</div><div class="pa-card-sub">India</div></div></a><a href="/esic-registration" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M14 2H6a2 2 0 00-2 2v16a2 2 0 002 2h12a2 2 0 002-2V8z"/><path d="M14 2v6h6M16 13H8M16 17H8"/></svg></div><div><div class="pa-card-title">ESIC Registration</div><div class="pa-card-sub">India</div></div></a><a href="/gst-registration" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M14 2H6a2 2 0 00-2 2v16a2 2 0 002 2h12a2 2 0 002-2V8z"/><path d="M14 2v6h6M16 13H8M16 17H8"/></svg></div><div><div class="pa-card-title">GST Registration</div><div class="pa-card-sub">India</div></div></a><a href="/llp-incorporation" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M14 2H6a2 2 0 00-2 2v16a2 2 0 002 2h12a2 2 0 002-2V8z"/><path d="M14 2v6h6M16 13H8M16 17H8"/></svg></div><div><div class="pa-card-title">LLP Registration</div><div class="pa-card-sub">India</div></div></a></div></div>
        </div>
    </div>
</section>

<!-- CONTENT FRESHNESS FOOTER -->
<section class="content-section" style="padding:32px;">
    <div class="content-container">
        <div class="text-content" style="font-size:13px;color:var(--text-muted);">
            <p><strong>Content Created:</strong> 10 March 2026 &nbsp;|&nbsp; <strong>Last Updated:</strong> <span id="lastUpdatedFooter">10 March 2026</span> &nbsp;|&nbsp; <strong>Next Review:</strong> 10 June 2026 &nbsp;|&nbsp; <strong>Reviewed By:</strong> CA &amp; CS Team, Patron Accounting LLP</p>
            <p>This page is reviewed quarterly - aligned to 2025 MCA Rules, Supreme Court directions, SHe-Box updates, state-level notifications, and Amendment Bill progress. Next review: June 2026.</p>
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
