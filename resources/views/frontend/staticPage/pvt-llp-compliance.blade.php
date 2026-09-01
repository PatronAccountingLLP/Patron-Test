
@extends('layouts.service-app')

<!-- External Dependencies (loaded by master layout in production) -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Barlow:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,400&family=DM+Sans:opsz,wght@9..40,400;9..40,500;9..40,600;9..40,700&display=swap" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

@section('meta')
    <title>Pvt Ltd & LLP Annual Compliance - ROC, AOC-4 & MGT-7 Filing</title>
    <meta name="description" content="File LLP Form 11 by 30 May, Form 8 by 30 Oct, and ITR-5 for your LLP under Section 34 of LLP Act 2008. Starting at INR 4,999.">
    <link rel="canonical" href="/pvt-llp-compliance">
    <meta name="robots" content="index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1">
    <meta property="og:title" content="Pvt Ltd & LLP Annual Compliance - ROC, AOC-4 & MGT-7 Filing">
    <meta property="og:description" content="File LLP Form 11 by 30 May, Form 8 by 30 Oct, and ITR-5 for your LLP under Section 34 of LLP Act 2008. Starting at INR 4,999.">
    <meta property="og:url" content="/pvt-llp-compliance">
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="Patron Accounting">
    <meta property="og:image" content="https://www.patronaccounting.com/images/og-default-square.png">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="1200">
    <meta property="og:image:type" content="image/png">
    <meta property="og:image:secure_url" content="https://www.patronaccounting.com/images/og-default-square.png">
    <meta property="og:image:alt" content="Patron Accounting - partner you can rely on">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Pvt Ltd & LLP Annual Compliance - ROC, AOC-4 & MGT-7 Filing">
    <meta name="twitter:description" content="File LLP Form 11 by 30 May, Form 8 by 30 Oct, and ITR-5 for your LLP under Section 34 of LLP Act 2008. Starting at INR 4,999.">
    <meta name="twitter:image" content="https://www.patronaccounting.com/images/og-default-square.png">
@endsection

@section('schema')
    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@graph": [
        {
          "@type": "Service",
          "name": "LLP Annual Compliance in India Guide",
          "description": "File LLP Form 11 by 30 May, Form 8 by 30 Oct, and ITR-5 for your LLP under Section 34 of LLP Act 2008. Starting at INR 4,999.",
          "url": "https://www.patronaccounting.com/pvt-llp-compliance",
          "serviceType": "LLP Annual Compliance in India Guide",
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
            "url": "https://www.patronaccounting.com/pvt-llp-compliance",
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
              "name": "LLP Annual Compliance in India Guide",
              "item": "https://www.patronaccounting.com/pvt-llp-compliance"
            }
          ]
        },
        {
          "@type": "FAQPage",
          "mainEntity": [
            {
              "@type": "Question",
              "name": "Is LLP annual compliance mandatory if the LLP has done no business?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "Yes. All registered LLPs must file Form 11, Form 8, and ITR-5 every year regardless of business activity, turnover, or profit. Even if your LLP has zero transactions, the filings are mandatory under Section 34 and Section 35 of the LLP Act, 2008. The penalty of INR 100 per day applies equally to inactive LLPs."
              }
            },
            {
              "@type": "Question",
              "name": "What is the due date for Form 11 for LLP?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "Form 11 (Annual Return of LLP) must be filed by 30 May every year, within 60 days of the end of the financial year (31 March) under Section 35 of the LLP Act, 2008. Filing can be done on the MCA V3 portal. Late filing attracts INR 100 per day from 31 May with no maximum cap."
              }
            },
            {
              "@type": "Question",
              "name": "What is Form 8 in LLP and when is it due?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "Form 8 is the Statement of Account and Solvency filed under Section 34(3) of the LLP Act, 2008. It contains the LLP's balance sheet, profit and loss account, and a solvency declaration by designated partners. Due date is 30 October every year. If audit is applicable (turnover over INR 40 lakh or contribution over INR 25 lakh), the auditor must also certify Form 8."
              }
            },
            {
              "@type": "Question",
              "name": "What is the penalty for late filing of LLP Form 11 and Form 8?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "Penalty is INR 100 per day per form from the due date with no upper limit under the LLP Act, 2008. If both Form 11 and Form 8 are missed by one full year, total penalty can reach INR 73,000. Additionally, the LLP may be marked as defaulting on MCA records, which affects credibility with banks and investors."
              }
            },
            {
              "@type": "Question",
              "name": "Is audit mandatory for all LLPs?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "No. Statutory audit is mandatory only when annual turnover exceeds INR 40 lakh or capital contribution exceeds INR 25 lakh in a financial year. For tax audit under Section 44AB, the threshold is INR 1 crore for business turnover. LLPs below these limits can self-certify Form 8 through designated partners with CA/CS/CMA certification."
              }
            },
            {
              "@type": "Question",
              "name": "What is DIR-3 KYC and is it required for LLP partners?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "DIR-3 KYC is the KYC filing required for all individuals holding a DIN, including designated partners of LLPs. Due by 30 September each year. Effective 31 March 2026, MCA changed to a triennial full-KYC requirement (once in 3 years) with annual web KYC if details are unchanged. Non-filing deactivates the DIN with an INR 5,000 reactivation penalty."
              }
            },
            {
              "@type": "Question",
              "name": "LLP compliance kaise kare - kaun si forms bharne hoti hain?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "LLP ko 4 mandatory filings karni hoti hain: Form 11 (annual return, 30 May deadline), Form 8 (accounts and solvency, 30 October deadline), ITR-5 (income tax return, 31 July or 31 October), aur DIR-3 KYC (designated partners ke liye, 30 September deadline). Sabhi forms MCA V3 portal aur Income Tax e-Filing portal par digitally sign karke file karte hain."
              }
            },
            {
              "@type": "Question",
              "name": "What happens if an LLP does not file annual compliance for 2 years?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "Under the LLP Act, 2008, the Registrar of Companies has the power to strike off an LLP that fails to file Form 11 and Form 8 for 2 or more consecutive years. Once struck off, the LLP loses its legal standing and designated partners may face personal liability. MCA struck off over 575 LLPs in January 2026 alone. Quick Answers Form 11 due date: 30 May every year - within 60 days of FY end - Section 35, LLP Act 2008. Form 8 due date: 30 October every year - within 30 days of end of first 6 months of FY - Section 34(3). Statutory audit threshold: Turnover above INR 40 lakh OR capital contribution above INR 25 lakh. Tax audit threshold: Turnover above INR 1 crore for business - Section 44AB, Income Tax Act 1961. DIR-3 KYC due date: 30 September annually. Penalty INR 5,000 per DIN for default. ITR-5 late fee: INR 5,000 if filed by 31 December; INR 10,000 after 31 December - Section 234F."
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
                        LLP Annual Compliance in India: 4 Mandatory Filings
                    </h1>

                    <div class="expert-attribution-box">
                        <span class="eab-check"><svg width="16" height="16" viewBox="0 0 24 24" fill="currentColor"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg></span>
                        <span class="eab-title">Reviewed by CA and CS Team, Patron Accounting LLP</span>
                        <span class="eab-meta">
                            <span>ICAI & ICSI Registered</span><span class="eab-sep">|</span>
                            <span>15+ Years Experience</span><span class="eab-sep">|</span>
                            <span>Last Updated: <span id="lastUpdated">20 April 2026</span></span>
                        </span>
                        <a href="/authorhub/ca-sundram-gupta" class="eab-link">Verify Credentials &rarr;</a>
                    </div>

                    <div class="mb-4">
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span><strong>Form 11 (Annual Return)</strong>:</span> Due 30 May - Section 35, LLP Act 2008 - all LLPs mandatory, including dormant and NIL-turnover LLPs.</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span><strong>Form 8 (Statement of Account and Solvency)</strong>:</span> Due 30 October - Section 34, LLP Act 2008 - balance sheet, P&L, solvency declaration. Auditor certification if audit applicable.</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span><strong>ITR-5 (Income Tax Return)</strong>:</span> Due 31 July (non-audit) or 31 October (audit) - mandatory even for NIL-income LLPs under Income Tax Act, 1961.</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span><strong>DIR-3 KYC (Partner KYC)</strong>:</span> Due 30 September - all designated partners holding DIN. INR 5,000 penalty for default. Triennial filing from March 2026.</p>
                        </div>
                    </div>

                    <p class="mb-4 fw-bold" style="color: var(--blue); font-size: 15px;">Patron Accounting LLP | 500+ LLPs Served | 100% On-Time Filing Record | 4.9/5 Rating (350+ Reviews) | Pune, Mumbai, Delhi, Gurugram</p>

                    <div class="hero-cta">
                        <a href="tel:+919459456700" class="btn-video text-decoration-none">
                            <span class="play-circle"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="width:14px;height:14px;color:#fff"><path d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/></svg></span>
                            Call +91 945 945 6700
                        </a>
                        <a href="mailto:sales@patronaccounting.com?subject=LLP%20Compliance%20Enquiry&body=Hello%2C%0AI%20need%20LLP%20compliance%20services.%0APlease%20contact%20me.%0AThank%20you." class="btn-sample text-decoration-none">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="width:18px;height:18px;"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,12 2,6"/></svg>
                            Email Us
                        </a>
                        <a href="https://wa.me/919459456700?text=Hi%2C%20I%20need%20LLP%20annual%20compliance%20services.%20Please%20share%20details." target="_blank" class="btn-sample text-decoration-none">
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
                                            'service'  => 'LLP Compliance',
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
            <a href="#overview-section" class="toc-btn active">Overview</a><a href="#what-section" class="toc-btn">What Is It</a><a href="#who-section" class="toc-btn">Who Must File</a><a href="#services-section" class="toc-btn">Our Services</a><a href="#procedure-section" class="toc-btn">7-Step Process</a><a href="#documents-section" class="toc-btn">Documents</a><a href="#challenges-section" class="toc-btn">Challenges</a><a href="#fees-section" class="toc-btn">Fees</a><a href="#timeline-section" class="toc-btn">Timeline</a><a href="#benefits-section" class="toc-btn">Why It Matters</a><a href="#comparison-section" class="toc-btn">LLP vs Pvt Ltd</a><a href="#faq-section" class="toc-btn">FAQs</a>
        </div>
        <button class="toc-arrow right" id="tocRight">&#10095;</button>
    </div>
</div>

<!-- SECTION 2: OVERVIEW / INTRO + TL;DR -->
<section class="content-section" id="overview-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">LLP Annual Compliance in India - Complete Guide 2026</h2>
            <div class="content-text">
                <div class="highlight-box" style="margin-bottom:20px;">
                    <p><strong>&#128204; TL;DR - LLP Compliance Services at a Glance</strong></p>
                    <p>Every LLP registered in India must complete 4 annual compliance filings regardless of turnover or business activity. Penalty for non-filing is INR 100 per day per form with no ceiling - a single year of non-compliance can cost INR 73,000 per form. Patron Accounting handles all 4 filings on time, starting at INR 4,999 (Exl GST and Govt. Charges).</p>
                </div>
                <p>An LLP in India enjoys simpler compliance compared to a private limited company - no board meetings, no AGM, no mandatory audit below prescribed thresholds. But four filings are mandatory for every LLP, every year, regardless of whether the LLP did any business.</p>
                <div class="table-responsive-wrapper" style="margin-top:16px;">
                <table>
                    <thead><tr><th>Parameter</th><th>Key Fact</th></tr></thead>
                    <tbody>
                        <tr><td><strong>Governing Law</strong></td><td>LLP Act, 2008 (Sections 34, 35) + LLP Rules, 2009 + Income Tax Act, 1961</td></tr>
                        <tr><td><strong>Who Must Comply</strong></td><td>All registered LLPs - active, dormant, NIL-turnover, all sizes</td></tr>
                        <tr><td><strong>Form 11 Due Date</strong></td><td>30 May every year (within 60 days of FY end - Section 35)</td></tr>
                        <tr><td><strong>Form 8 Due Date</strong></td><td>30 October every year (within 30 days of end of first 6 months - Section 34)</td></tr>
                        <tr><td><strong>ITR-5 Due Date</strong></td><td>31 July (non-audit) or 31 October (audit) under Income Tax Act, 1961</td></tr>
                        <tr><td><strong>DIR-3 KYC Due Date</strong></td><td>30 September every year (per designated partner)</td></tr>
                        <tr><td><strong>Penalty - Form 11/Form 8</strong></td><td>INR 100 per day from due date with no upper limit</td></tr>
                        <tr><td><strong>Audit Threshold</strong></td><td>Turnover exceeds INR 40 lakh OR contribution exceeds INR 25 lakh</td></tr>
                    </tbody>
                </table>
                </div>
                <p</p>
                <p>LLP compliance kaise kare? LLP ko 4 mandatory filings karni hoti hain: Form 11 (30 May), Form 8 (30 October), ITR-5 (31 July or 31 October), aur DIR-3 KYC (30 September). Sabhi forms MCA V3 portal aur Income Tax e-Filing portal par digitally sign karke file karte hain.</p>
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
                <h2 class="section-title">What is LLP Annual Compliance?</h2>
                <div class="content-text what-is-definition">
                    
                    <p><strong>LLP Annual Compliance</strong> is the set of statutory filings that every Limited Liability Partnership registered in India must complete each financial year under the LLP Act, 2008 and the Income Tax Act, 1961, to maintain its active legal status with the Registrar of Companies and the Income Tax Department.</p>
                    <p>Unlike <a href="/private-limited-company-compliance">private limited company compliance</a> (which involves board meetings, AGM, and more filings), LLP compliance is lighter - but the penalties are severe. INR 100 per day per form with no ceiling means non-compliance becomes exponentially costly.</p>

                </div>
                <div class="highlight-box" style="margin-top:20px;">
                    <p><strong>Key Terms for LLP Compliance:</strong></p>
                    <p><strong>Form 11 (Annual Return):</strong> Filed under Section 35 of the LLP Act by 30 May. Reports partner details, capital contribution, and structural changes during the year.</p>
                    <p><strong>Form 8 (Statement of Account and Solvency):</strong> Filed under Section 34(3) by 30 October. Contains balance sheet, P&L, and solvency declaration by designated partners.</p>
                    <p><strong>ITR-5:</strong> Income Tax Return for LLPs. Mandatory even for NIL-income LLPs. LLPs taxed at flat 30% on taxable income. AMT at 18.5% under Section 115JC.</p>
                    <p><strong>DIR-3 KYC:</strong> Annual (triennial from March 2026) KYC for designated partners holding DIN. Due 30 September. INR 5,000 penalty for default.</p>
                    <p><strong>Designated Partner:</strong> Partner with statutory responsibilities under Section 7, LLP Act 2008. Must hold a valid DIN. Responsible for all compliance filings.</p>
                    <p><strong>Statutory Audit:</strong> Mandatory when turnover exceeds INR 40 lakh or capital contribution exceeds INR 25 lakh. Must be conducted by a practising Chartered Accountant.</p>

                </div>
            </div>
            <div class="column-image">
                <div class="illustration-placeholder">
                    <div class="illustration-icon" style="max-width:240px;">
                        <svg viewBox="0 0 200 180" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <!-- LLP compliance calendar -->
                            <rect x="30" y="15" width="140" height="115" rx="8" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/>
                            <rect x="30" y="15" width="140" height="22" rx="8" fill="#14365F"/>
                            <rect x="30" y="29" width="140" height="8" fill="#14365F"/>
                            <text x="100" y="30" font-size="8" fill="#FFFFFF" font-weight="700" text-anchor="middle" font-family="Arial,sans-serif">4 MANDATORY FILINGS</text>
                            <rect x="40" y="45" width="55" height="18" rx="4" fill="#FFF3E0" stroke="#F5A623" stroke-width="1.2"/>
                            <text x="67" y="57" font-size="6" fill="#E8712C" font-weight="700" text-anchor="middle" font-family="Arial,sans-serif">FORM 11 - 30 May</text>
                            <rect x="105" y="45" width="55" height="18" rx="4" fill="#E8F5E9" stroke="#10B981" stroke-width="1.2"/>
                            <text x="132" y="57" font-size="6" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial,sans-serif">ITR-5 - 31 Jul</text>
                            <rect x="40" y="70" width="55" height="18" rx="4" fill="#FFF3E0" stroke="#F5A623" stroke-width="1.2"/>
                            <text x="67" y="82" font-size="6" fill="#E8712C" font-weight="700" text-anchor="middle" font-family="Arial,sans-serif">DIR-3 KYC - Sep</text>
                            <rect x="105" y="70" width="55" height="18" rx="4" fill="#E8F5E9" stroke="#10B981" stroke-width="1.2"/>
                            <text x="132" y="82" font-size="6" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial,sans-serif">FORM 8 - 30 Oct</text>
                            <rect x="55" y="96" width="90" height="16" rx="4" fill="#14365F"/>
                            <text x="100" y="107" font-size="6" fill="#fff" font-weight="700" text-anchor="middle" font-family="Arial,sans-serif">INR 100/DAY PENALTY</text>
                            <circle cx="165" cy="25" r="14" fill="#E8F5E9" stroke="#25D366" stroke-width="1.5"/>
                            <path d="M159 25l4 4 7-7" stroke="#25D366" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            <text x="100" y="148" font-size="9" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial,sans-serif">100% On-Time Filing</text>
                        </svg>
                    </div>
                    <div class="illustration-badge">
                        <span>LLP Act 2008</span>
                        <strong>4 Annual Filings</strong>
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
            <h2 class="section-title">Who Must File LLP Annual Compliance?</h2>
            <div class="content-text">
                
                <p><strong>ALL registered LLPs in India</strong> must file Form 11, Form 8, and ITR-5 each financial year. No exemptions based on turnover, activity, or size:</p>
                <ul>
                    <li><strong>Active LLPs</strong> - all LLPs engaged in any commercial activity</li>
                    <li><strong>Dormant LLPs</strong> - LLPs incorporated but not yet started operations</li>
                    <li><strong>NIL-Turnover LLPs</strong> - LLPs with zero income or zero transactions during the year</li>
                    <li><strong>Startups and New LLPs</strong> - even if incorporated mid-year, first-year filings are required</li>
                </ul>
                <p style="margin-top:16px;"><strong>Statutory Audit Applicability:</strong> Not mandatory for all LLPs. Required when annual turnover exceeds INR 40 lakh OR capital contribution exceeds INR 25 lakh. Tax Audit under Section 44AB when business turnover exceeds INR 1 crore.</p>
                <p style="margin-top:16px;"><strong>2026 DIR-3 KYC Update:</strong> Effective 31 March 2026, MCA amended DIR-3 KYC rules from annual to triennial filing for designated partners whose details have not changed. Partners must file an update within 30 days of any change in mobile, email, or address.</p>

            </div>
            </div>
        </div>
    </div>
</section>

<!-- SECTION 5: OUR SERVICES -->
<section class="content-section" id="services-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Patron Accounting Deliverables for LLP Compliance</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Service</th><th>What We Do</th></tr></thead>
                    <tbody>
                        <tr><td><strong>Form 11 Preparation and Filing</strong></td><td>Complete preparation and filing on MCA V3 portal by 30 May deadline - partner details, contributions, structural changes</td></tr>
                        <tr><td><strong>Books of Accounts and Financial Statements</strong></td><td>Balance sheet and P&L preparation for Form 8 filing - monthly bookkeeping available</td></tr>
                        <tr><td><strong>Form 8 Filing with Audit (if applicable)</strong></td><td>Statement of Account and Solvency with statutory audit certification by 30 October</td></tr>
                        <tr><td><strong>ITR-5 Preparation and e-Filing</strong></td><td>Income tax return preparation and filing on IT portal by 31 July / 31 October deadline</td></tr>
                        <tr><td><strong>DIR-3 KYC for Designated Partners</strong></td><td>Annual/triennial KYC compliance for all designated partners by 30 September</td></tr>
                        <tr><td><strong>Event-Based Filings</strong></td><td>Form 3 (LLP Agreement changes), Form 4 (partner changes), Form 15 (registered office change)</td></tr>

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
            <h2 class="section-title">LLP Annual Compliance Procedure - 7 Steps</h2>
            <p class="section-subtitle" style="text-align:left;max-width:100%;">Follow these 7 steps to complete all mandatory LLP filings for the financial year. Patron Accounting handles the entire process end-to-end.</p>
        </header>
        <div class="steps-container">
            <div class="step-card"><div class="step-content"><span class="step-badge">Step 1</span><h3 class="step-title">Maintain Books of Accounts (Year-Round)</h3><p class="step-description">Every LLP must maintain books of accounts in the double-entry system at its registered office (Section 34(1), LLP Act 2008). Records must cover all receipts, expenditures, assets, and liabilities. Books preserved for 8 years.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Books maintained</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Double-entry system</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="20" y="10" width="80" height="60" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><rect x="30" y="20" width="30" height="8" rx="2" fill="#F5A623"/><text x="45" y="26" font-size="5" fill="#fff" font-weight="600" text-anchor="middle" font-family="Arial,sans-serif">S.34</text><line x1="30" y1="36" x2="90" y2="36" stroke="#14365F" stroke-width="1.5" opacity="0.3"/><line x1="30" y1="46" x2="85" y2="46" stroke="#14365F" stroke-width="1.5" opacity="0.2"/><line x1="30" y1="56" x2="80" y2="56" stroke="#14365F" stroke-width="1.5" opacity="0.2"/></svg></div><span class="illustration-label">Books Ready</span><span class="step-number-large">01</span></div></div></div>
            <div class="step-card"><div class="step-content"><span class="step-badge">Step 2</span><h3 class="step-title">Close Financial Year and Prepare Statements by 31 March</h3><p class="step-description">Prepare Balance Sheet, Statement of Profit and Loss, and Statement of Solvency. Must be signed by at least 2 designated partners.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Financial statements ready</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Signed by 2 partners</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="15" y="10" width="90" height="60" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><text x="60" y="28" font-size="7" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial,sans-serif">31 MARCH</text><line x1="25" y1="34" x2="95" y2="34" stroke="#F5A623" stroke-width="2" stroke-linecap="round"/><line x1="25" y1="46" x2="85" y2="46" stroke="#14365F" stroke-width="1.5" opacity="0.3"/><line x1="25" y1="56" x2="80" y2="56" stroke="#14365F" stroke-width="1.5" opacity="0.2"/></svg></div><span class="illustration-label">Statements Done</span><span class="step-number-large">02</span></div></div></div>
            <div class="step-card"><div class="step-content"><span class="step-badge">Step 3</span><h3 class="step-title">Statutory Audit (If Applicable)</h3><p class="step-description">If turnover exceeds INR 40 lakh or contribution exceeds INR 25 lakh, appoint a practising CA as statutory auditor. Audit must be completed before the Form 8 due date of 30 October.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Auditor appointed</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Audit completed</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="15" y="10" width="90" height="65" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><text x="60" y="28" font-size="7" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial,sans-serif">AUDIT CHECK</text><line x1="25" y1="34" x2="95" y2="34" stroke="#14365F" stroke-width="1" opacity="0.3"/><rect x="25" y="40" width="30" height="12" rx="3" fill="#FFF3E0" stroke="#F5A623" stroke-width="1"/><text x="40" y="49" font-size="5" fill="#14365F" font-weight="600" text-anchor="middle" font-family="Arial,sans-serif">INR 40L</text><rect x="65" y="40" width="25" height="12" rx="3" fill="#FFF3E0" stroke="#F5A623" stroke-width="1"/><text x="77" y="49" font-size="5" fill="#14365F" font-weight="600" text-anchor="middle" font-family="Arial,sans-serif">INR 25L</text><text x="60" y="67" font-size="6" fill="#E8712C" font-weight="600" text-anchor="middle" font-family="Arial,sans-serif">Turnover OR Contribution</text></svg></div><span class="illustration-label">Audit Done</span><span class="step-number-large">03</span></div></div></div>
            <div class="step-card"><div class="step-content"><span class="step-badge">Step 4</span><h3 class="step-title">File Form 11 (Annual Return) by 30 May</h3><p class="step-description">Download Form 11 from MCA V3 portal. Fill in partner names, DINs, capital contribution, changes during the year. Digitally sign and upload. Form 11 can be filed independently of the financial statements.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Form 11 prepared</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Filed on MCA V3</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="20" y="8" width="80" height="60" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><rect x="30" y="18" width="60" height="14" rx="3" fill="#14365F"/><text x="60" y="28" font-size="6" fill="#fff" font-weight="700" text-anchor="middle" font-family="Arial,sans-serif">FORM 11</text><text x="60" y="48" font-size="7" fill="#E8712C" font-weight="700" text-anchor="middle" font-family="Arial,sans-serif">30 MAY</text><circle cx="85" cy="55" r="6" fill="#E8F5E9" stroke="#10B981" stroke-width="1.2"/><path d="M82 55l2 2 4-4" stroke="#10B981" stroke-width="1.5" stroke-linecap="round"/></svg></div><span class="illustration-label">Form 11 Filed</span><span class="step-number-large">04</span></div></div></div>
            <div class="step-card"><div class="step-content"><span class="step-badge">Step 5</span><h3 class="step-title">File Form 8 (Statement of Account and Solvency) by 30 October</h3><p class="step-description">Attach financial statements (balance sheet and P&L). File solvency declaration. Auditor DSC required for audit-applicable LLPs. Upload on MCA V3 portal.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Form 8 prepared</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Filed with audit cert</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="20" y="8" width="80" height="60" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><rect x="30" y="18" width="60" height="14" rx="3" fill="#E8712C"/><text x="60" y="28" font-size="6" fill="#fff" font-weight="700" text-anchor="middle" font-family="Arial,sans-serif">FORM 8</text><text x="60" y="48" font-size="7" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial,sans-serif">30 OCT</text><circle cx="85" cy="55" r="6" fill="#E8F5E9" stroke="#10B981" stroke-width="1.2"/><path d="M82 55l2 2 4-4" stroke="#10B981" stroke-width="1.5" stroke-linecap="round"/></svg></div><span class="illustration-label">Form 8 Filed</span><span class="step-number-large">05</span></div></div></div>
            <div class="step-card"><div class="step-content"><span class="step-badge">Step 6</span><h3 class="step-title">File ITR-5 by 31 July or 31 October</h3><p class="step-description">Prepare ITR-5 based on audited or unaudited financial statements. File on Income Tax e-Filing portal. LLPs taxed at flat 30%. Even NIL-income LLPs must file ITR-5.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> ITR-5 prepared</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Filed on IT portal</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="20" y="8" width="80" height="60" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><rect x="30" y="18" width="60" height="14" rx="3" fill="#FFF3E0" stroke="#F5A623" stroke-width="1"/><text x="60" y="28" font-size="6" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial,sans-serif">ITR-5</text><text x="42" y="48" font-size="6" fill="#14365F" font-weight="600" text-anchor="middle" font-family="Arial,sans-serif">31 Jul</text><text x="78" y="48" font-size="6" fill="#14365F" font-weight="600" text-anchor="middle" font-family="Arial,sans-serif">31 Oct</text><text x="60" y="48" font-size="6" fill="#E8712C" font-weight="700" text-anchor="middle" font-family="Arial,sans-serif">/</text></svg></div><span class="illustration-label">ITR Filed</span><span class="step-number-large">06</span></div></div></div>
            <div class="step-card"><div class="step-content"><span class="step-badge">Step 7</span><h3 class="step-title">DIR-3 KYC for All Designated Partners by 30 September</h3><p class="step-description">Each designated partner with an active DIN must file DIR-3 KYC or DIR-3 KYC Web by 30 September. From 31 March 2026, triennial full KYC; annual web KYC if no changes. DIN deactivation and INR 5,000 penalty for non-filing.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> KYC filed for all partners</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> DIN status active</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="20" y="8" width="80" height="60" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><rect x="30" y="18" width="60" height="14" rx="3" fill="#14365F"/><text x="60" y="28" font-size="6" fill="#fff" font-weight="700" text-anchor="middle" font-family="Arial,sans-serif">DIR-3 KYC</text><text x="60" y="48" font-size="7" fill="#E8712C" font-weight="700" text-anchor="middle" font-family="Arial,sans-serif">30 SEP</text><circle cx="95" cy="15" r="10" fill="#E8F5E9" stroke="#25D366" stroke-width="1.5"/><path d="M91 15l3 3 5-5" stroke="#25D366" stroke-width="2" stroke-linecap="round"/></svg></div><span class="illustration-label">KYC Done</span><span class="step-number-large">07</span></div></div></div>

        </div>
    </div>
</section>

<!-- SECTION 8: DOCUMENTS REQUIRED -->
<section class="content-section" id="documents-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Documents Checklist for LLP Annual Compliance</h2>
            <div class="content-text">
                
                <ul>
                    <li>Certificate of Incorporation of LLP (LLPIN)</li>
                    <li>PAN card of LLP</li>
                    <li>LLP Agreement (latest registered copy)</li>
                    <li>Books of accounts for the financial year (double-entry system)</li>
                    <li>Balance sheet as on 31 March</li>
                    <li>Statement of Profit and Loss for the year</li>
                    <li>Bank account statements for the financial year</li>
                    <li>DSC (Class 3 Digital Signature Certificate) of all designated partners</li>
                    <li>DIN and Aadhaar of all designated partners</li>
                    <li>Audit report from practising CA (if audit is applicable)</li>
                    <li>Previous year's filed Form 11 and Form 8 acknowledgements</li>
                </ul>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 9: CHALLENGES -->
<section class="content-section" id="challenges-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Common LLP Compliance Challenges and How We Solve Them</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Challenge</th><th>Impact</th><th>How Patron Accounting Solves It</th></tr></thead>
                    <tbody>
                        <tr><td><strong>Dormant/Zero-Turnover LLP Unaware of Filing Obligation</strong></td><td>INR 100/day penalty accumulates silently</td><td>We proactively reach out to clients 45 days before each due date regardless of business activity status. All LLPs flagged for mandatory filings.</td></tr>
                        <tr><td><strong>DSC Expired or Not Linked to MCA V3</strong></td><td>Filing blocked, deadline missed</td><td>We verify DSC validity and MCA V3 linking 30 days before each deadline. Coordinate renewal immediately if expiring.</td></tr>
                        <tr><td><strong>Books of Accounts Not Maintained Through Year</strong></td><td>Rush at October for Form 8, missed deadlines</td><td>Monthly bookkeeping for LLP clients ensures balance sheets and P&L are always ready. No last-minute preparation.</td></tr>
                        <tr><td><strong>Confusion Between ROC and IT Filings</strong></td><td>One track completed, other missed</td><td>We manage both MCA/ROC (Form 11 + Form 8) and IT Department (ITR-5) under a single engagement, preventing gaps.</td></tr>

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
            <h2 class="section-title">Professional Fees for LLP Annual Compliance</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Fee Component</th><th>Amount</th></tr></thead>
                    <tbody>
                        <tr><td>Patron Accounting Professional Fees - Basic Annual Filing (Form 11 + Form 8 + ITR-5 + DIR-3 KYC)</td><td class="table-amount">Starting from INR 4,999 (Exl GST and Govt. Charges)</td></tr>
                        <tr><td>With Statutory Audit (Form 8 + Audit Report)</td><td class="table-amount">Starting at INR 9,999</td></tr>
                        <tr><td>Accounting + Compliance Bundle (Books + All 4 Filings)</td><td class="table-amount">Starting at INR 14,999</td></tr>
                        <tr><td>Event-Based Filing: Form 3 or Form 4</td><td class="table-amount">Starting at INR 2,999 per filing</td></tr>
                        <tr><td>LLP Strike-Off / Closure (Form 24)</td><td class="table-amount">Starting at INR 7,999</td></tr>
                        <tr><td>Government Filing Fees (MCA V3)</td><td class="table-amount">At actuals - varies by LLP contribution amount</td></tr>

                    </tbody>
                </table>
                </div>
                <p style="margin-top:16px;font-size:13px;color:var(--text-muted);font-style:italic;">All fees and charges listed are indicative only and do not constitute a binding offer. Final amounts may vary depending on the volume of work and the complexity involved.</p>
                <p style="margin-top:16px;">Professional service charges for drafting, filing, and representation are separate from the statutory fees. The exact fee depends on the complexity of the case, disputed amount, and number of hearings required. Contact us for a detailed quote.</p>
                <p style="margin-top:16px;"><strong>Get a free LLP Compliance consultation - <a href="tel:+919459456700">Call +91 945 945 6700</a> or <a href="https://wa.me/919459456700?text=Hi%2C%20I%20need%20help%20with%20LLP%20compliance.%20Please%20call%20me." target="_blank">WhatsApp us</a>. No-obligation assessment.</strong></p>
            </div>
        </div>
    </div>
</section>

<!-- SECTION 11: TIMELINE -->
<section class="content-section" id="timeline-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">LLP Annual Compliance Timeline FY 2025-26</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Stage</th><th>Estimated Timeline</th></tr></thead>
                    <tbody>
                        <tr><td>Books of accounts readiness</td><td>Year-round - monthly bookkeeping recommended</td></tr>
                        <tr><td>Form 11 filing (after 31 March)</td><td>File by 30 May 2026 - within 60 days of FY end</td></tr>
                        <tr><td>Statutory audit completion</td><td>Target: August-September (before Form 8 deadline)</td></tr>
                        <tr><td>ITR-5 filing (non-audit LLP)</td><td>By 31 July 2026</td></tr>
                        <tr><td>DIR-3 KYC for designated partners</td><td>By 30 September 2026</td></tr>
                        <tr><td>Form 8 filing</td><td>By 30 October 2026 (non-audit and audit cases)</td></tr>
                        <tr><td>ITR-5 filing (audit LLP)</td><td>By 31 October 2026</td></tr>

                    </tbody>
                </table>
                </div>
                <div class="highlight-box" style="margin-top:16px;">
                    
                    <p><strong>Patron Turnaround:</strong> Form 11: 3-5 working days from document receipt. Form 8 + audit: 7-14 working days from books readiness. ITR-5: 3-7 working days from finalized accounts. We prepare all forms proactively - no last-minute rush.</p>

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
            <h2 class="section-title">Why Timely LLP Compliance Matters</h2>
        </div>
        <div class="features-grid">
            <article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><h3>Avoid INR 100/Day Penalty</h3><p>No ceiling on LLP filing penalties. A 1-year delay on both Form 11 and Form 8 costs INR 73,000. Two years: INR 1,46,000 - plus strike-off risk.</p></article>
            <article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg></div><h3>Prevent DIN Deactivation</h3><p>Deactivated DIN blocks the designated partner from filing any form for any entity. This paralyzes all their business entities simultaneously.</p></article>
            <article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/></svg></div><h3>Protect Against LLP Strike-Off</h3><p>MCA struck off 575+ LLPs in January 2026 alone for inactivity and non-filing. 2+ years of missed filings triggers strike-off proceedings.</p></article>
            <article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6"/></svg></div><h3>Maintain Loan Eligibility</h3><p>Banks verify MCA compliance status before approving business loans. Non-compliant LLPs face automatic rejection in credit assessment.</p></article>
            <article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M9 17v-2m3 2v-4m3 4v-6m2 10H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/></svg></div><h3>Enable Smooth Exit or Conversion</h3><p>LLP closure (Form 24) and conversion to Pvt Ltd both require all filings to be current. Outstanding compliance blocks these processes entirely.</p></article>
            <article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/><path d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/></svg></div><h3>Pan-India Coverage</h3><p>Offices in Pune, Mumbai, Delhi, Gurugram. 500+ LLPs served with 100% on-time filing record. Dedicated LLP compliance team.</p></article>
        </div>
    </div>
</section>

<!-- SECTION 12A: SOCIAL PROOF -->
<section class="content-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">500+ LLPs Trust Patron Accounting for Annual Compliance</h2>
            <div class="content-text">
                
                <p><strong>Patron Accounting LLP</strong> | 4.9/5 Rating | 350+ Reviews | 500+ LLPs | 100% On-Time Filing | Pune, Mumbai, Delhi, Gurugram</p>
                <div class="highlight-box" style="margin-top:16px;"><p>"Professionalism, attention to detail, and timely communication made the process smooth. Our Form 8 was filed 2 weeks before the deadline with zero last-minute stress." - <strong>Subhendu Mishra, Designated Partner</strong></p></div>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 13: SELF-FILING vs PROFESSIONAL COMPARISON -->
<section class="content-section" id="comparison-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">LLP vs Private Limited Company: Compliance Comparison</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Compliance</th><th>LLP</th><th>Private Limited Company</th></tr></thead>
                    <tbody>
                        <tr><td><strong>Annual Return</strong></td><td>Form 11 - 30 May</td><td>MGT-7/MGT-7A - 60 days from AGM</td></tr>
                        <tr><td><strong>Financial Filing</strong></td><td>Form 8 - 30 October</td><td>AOC-4 - 30 days from AGM</td></tr>
                        <tr><td><strong>Income Tax Return</strong></td><td>ITR-5 - 31 Jul or 31 Oct</td><td>ITR-6 - 31 Jul or 31 Oct</td></tr>
                        <tr><td><strong>Statutory Audit</strong></td><td>Only if turnover above INR 40 lakh</td><td>Mandatory for all companies</td></tr>
                        <tr><td><strong>Board Meetings</strong></td><td>Not required</td><td>Minimum 4 per year (Section 173)</td></tr>
                        <tr><td><strong>AGM Requirement</strong></td><td>Not required</td><td>Mandatory every year (Section 96)</td></tr>

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
            <h2 class="section-title">Related Compliance Services</h2>
            <div class="content-text">
                
                <ul>
                    <li><a href="/llp-incorporation">LLP Registration in India</a> - new LLP incorporation and LLPIN</li>
                    <li><a href="/private-limited-company-compliance">Compliance for Private Limited Companies</a> - company annual compliance</li>
                    <li><a href="/llp-partner-change">LLP Partner Change</a> - addition or removal of partners</li>
                    <li><a href="/llp-agreement-change">LLP Agreement Change</a> - amendment of LLP Agreement</li>
                    <li><a href="/director-kyc">Director KYC</a> - DIR-3 KYC compliance for all DIN holders</li>
                    <li><a href="/tax-audit">Tax Audit Service</a> - Section 44AB audit for LLPs above threshold</li>
                </ul>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 15A: LEGAL FRAMEWORK -->
<section class="content-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Legal Framework for LLP Compliance in India</h2>
            <div class="content-text">
                
                <div class="table-responsive-wrapper"><table><thead><tr><th>Legal Provision</th><th>Details</th></tr></thead><tbody>
                        <tr><td><strong>Section 34 - LLP Act, 2008</strong></td><td>Maintenance of books of accounts. Statement of Account and Solvency (Form 8) filed annually by 30 October. Source: <a href="https://www.indiacode.nic.in/show-data?actid=AC_CEN_9_13_00012_200806_1517807326392" target="_blank" rel="noopener">India Code - LLP Act</a></td></tr>
                        <tr><td><strong>Section 35 - LLP Act, 2008</strong></td><td>Annual Return (Form 11) filed by 30 May - within 60 days of FY end.</td></tr>
                        <tr><td><strong>Rule 24, LLP Rules 2009</strong></td><td>Prescribes manner and timeline for Form 8 filing. Certified by CA/CS/CMA or auditor. Source: <a href="https://www.mca.gov.in/content/mca/global/en/acts-rules/llp-rules.html" target="_blank" rel="noopener">MCA - LLP Rules</a></td></tr>
                        <tr><td><strong>Income Tax Act - ITR-5</strong></td><td>LLP taxed at 30%. AMT at 18.5% (Section 115JC). Tax audit if turnover above INR 1 crore (Section 44AB).</td></tr>
                        <tr><td><strong>Section 234F - IT Act</strong></td><td>Late fee: INR 5,000 if ITR filed after due date but by 31 December; INR 10,000 after 31 December.</td></tr>
                        <tr><td><strong>Penalty - Form 11 and Form 8</strong></td><td>INR 100 per day per form from due date with no upper limit. 1-year delay = INR 36,500 per form; both = INR 73,000.</td></tr>
                        <tr><td><strong>DIR-3 KYC (2026 Amendment)</strong></td><td>Triennial filing from 31 March 2026. Annual web KYC if no changes. INR 5,000 penalty per DIN for non-filing.</td></tr>
                        <tr><td><strong>LLP Act - Striking Off</strong></td><td>Registrar can strike off LLPs not filing Form 11 and Form 8 for 2+ consecutive years. 575+ LLPs struck off January 2026.</td></tr>
                </tbody></table></div>

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
                    <h2 class="faq-expanded__title">Frequently Asked Questions - LLP Annual Compliance</h2>
                    <p class="faq-expanded__lead">Get answers to common questions about LLP compliance filings, due dates, penalties, audit requirements, and DIR-3 KYC.</p>
                    @include('partials.bigin-form', [
                        'variant'  => 'compact',
                        'service'  => 'LLP Compliance',
                    ])
                </aside>
                <div class="faq-expanded__list">
                    <div class="faq-expanded__item" id="faq-1">
                        <h3 class="faq-expanded__q">Is LLP annual compliance mandatory if the LLP has done no business?</h3>
                        <div class="faq-expanded__a"><p>Yes. All registered LLPs must file Form 11, Form 8, and ITR-5 every year regardless of business activity, turnover, or profit. Even if your LLP has zero transactions, the filings are mandatory under Section 34 and Section 35 of the LLP Act, 2008. The penalty of INR 100 per day applies equally to inactive LLPs.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-2">
                        <h3 class="faq-expanded__q">What is the due date for Form 11 for LLP?</h3>
                        <div class="faq-expanded__a"><p>Form 11 (Annual Return of LLP) must be filed by 30 May every year, within 60 days of the end of the financial year (31 March) under Section 35 of the LLP Act, 2008. Filing can be done on the MCA V3 portal. Late filing attracts INR 100 per day from 31 May with no maximum cap.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-3">
                        <h3 class="faq-expanded__q">What is Form 8 in LLP and when is it due?</h3>
                        <div class="faq-expanded__a"><p>Form 8 is the Statement of Account and Solvency filed under Section 34(3) of the LLP Act, 2008. It contains the LLP's balance sheet, profit and loss account, and a solvency declaration by designated partners. Due date is 30 October every year. If audit is applicable (turnover over INR 40 lakh or contribution over INR 25 lakh), the auditor must also certify Form 8.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-4">
                        <h3 class="faq-expanded__q">What is the penalty for late filing of LLP Form 11 and Form 8?</h3>
                        <div class="faq-expanded__a"><p>Penalty is INR 100 per day per form from the due date with no upper limit under the LLP Act, 2008. If both Form 11 and Form 8 are missed by one full year, total penalty can reach INR 73,000. Additionally, the LLP may be marked as defaulting on MCA records, which affects credibility with banks and investors.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-5">
                        <h3 class="faq-expanded__q">Is audit mandatory for all LLPs?</h3>
                        <div class="faq-expanded__a"><p>No. Statutory audit is mandatory only when annual turnover exceeds INR 40 lakh or capital contribution exceeds INR 25 lakh in a financial year. For tax audit under Section 44AB, the threshold is INR 1 crore for business turnover. LLPs below these limits can self-certify Form 8 through designated partners with CA/CS/CMA certification.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-6">
                        <h3 class="faq-expanded__q">What is DIR-3 KYC and is it required for LLP partners?</h3>
                        <div class="faq-expanded__a"><p>DIR-3 KYC is the KYC filing required for all individuals holding a DIN, including designated partners of LLPs. Due by 30 September each year. Effective 31 March 2026, MCA changed to a triennial full-KYC requirement (once in 3 years) with annual web KYC if details are unchanged. Non-filing deactivates the DIN with an INR 5,000 reactivation penalty.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-7">
                        <h3 class="faq-expanded__q">LLP compliance kaise kare - kaun si forms bharne hoti hain?</h3>
                        <div class="faq-expanded__a"><p>LLP ko 4 mandatory filings karni hoti hain: Form 11 (annual return, 30 May deadline), Form 8 (accounts and solvency, 30 October deadline), ITR-5 (income tax return, 31 July or 31 October), aur DIR-3 KYC (designated partners ke liye, 30 September deadline). Sabhi forms MCA V3 portal aur Income Tax e-Filing portal par digitally sign karke file karte hain.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-8">
                        <h3 class="faq-expanded__q">What happens if an LLP does not file annual compliance for 2 years?</h3>
                        <div class="faq-expanded__a"><p>Under the LLP Act, 2008, the Registrar of Companies has the power to strike off an LLP that fails to file Form 11 and Form 8 for 2 or more consecutive years. Once struck off, the LLP loses its legal standing and designated partners may face personal liability. MCA struck off over 575 LLPs in January 2026 alone.</p></div>
                    </div>
                </div>
            </div>


            <!-- Quick Answers -->
            <div class="highlight-box" style="margin-top:32px;">
                <p><strong>Quick Answers</strong></p>
                <p><strong>Form 11 due date:</strong> 30 May every year - within 60 days of FY end - Section 35, LLP Act 2008.</p>
                <p><strong>Form 8 due date:</strong> 30 October every year - within 30 days of end of first 6 months of FY - Section 34(3).</p>
                <p><strong>Statutory audit threshold:</strong> Turnover above INR 40 lakh OR capital contribution above INR 25 lakh.</p>
                <p><strong>Tax audit threshold:</strong> Turnover above INR 1 crore for business - Section 44AB, Income Tax Act 1961.</p>
                <p><strong>DIR-3 KYC due date:</strong> 30 September annually. Penalty INR 5,000 per DIN for default.</p>
                <p><strong>ITR-5 late fee:</strong> INR 5,000 if filed by 31 December; INR 10,000 after 31 December - Section 234F.</p>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 18: URGENCY CTA -->
<section class="content-section" style="background: var(--orange-lighter) !important; border-left: 4px solid var(--orange);">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">LLP Penalties Have No Ceiling - Act Before Deadlines</h2>
            <div class="content-text">
                
                <p><strong>A single missed Form 11 filing costs INR 100 per day. Miss both Form 11 and Form 8 for one year: INR 73,000. For two years: INR 1,46,000 - plus forced strike-off risk.</strong></p>
                <ul>
                    <li><strong>Form 11 due:</strong> 30 May 2026 - INR 100/day penalty starts 31 May with no grace period</li>
                    <li><strong>Form 8 due:</strong> 30 October 2026 - INR 100/day penalty starts 31 October</li>
                    <li><strong>DIN deactivation:</strong> Missed DIR-3 KYC paralyzes all designated partner's MCA filings across all entities</li>
                    <li><strong>MCA automated tracking</strong> now flags late filings within 24 hours of missed deadline</li>
                </ul>

            </div>
        </div>
    </div>
</section>

<!-- CONCLUSION + CTA BLOCK (Dark) -->
<section class="content-section" style="background: var(--blue) !important;">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title" style="color:#FFFFFF !important;">File LLP Compliance On Time - Starting at INR 4,999</h2>
            <div class="content-text" style="text-align:left;">
                
                <p style="color:rgba(255,255,255,0.9);">LLP annual compliance in India involves 4 mandatory filings under the LLP Act, 2008 and the Income Tax Act, 1961. Despite being simpler than company compliance, the penalty structure is severe - INR 100 per day per form with no upper cap means non-compliance becomes exponentially costly.</p>
                <p style="color:rgba(255,255,255,0.9);">The 2026 DIR-3 KYC amendment, MCA V3 portal requirements, and tightened enforcement make professional assistance the practical choice. Patron Accounting manages the full compliance calendar for your LLP - from maintaining books to filing all 4 forms on time, every year.</p>
                <p style="color:rgba(255,255,255,0.9);"><strong>Starting at INR 4,999 (Exl GST and Govt. Charges) | 500+ LLPs Served | 100% On-Time Filing | Next Deadline: Form 11 by 30 May 2026</strong></p>

            </div>
            <div style="display:flex;gap:14px;flex-wrap:wrap;margin-top:24px;">
                <a href="tel:+919459456700" style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:var(--orange);color:#fff;border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#128222; Call +91 945 945 6700</a>
                <a href="https://wa.me/919459456700?text=Hi%2C%20I%20need%20help%20with%20LLP%20compliance.%20Please%20call%20me." target="_blank" style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:#25D366;color:#fff;border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#128172; WhatsApp Us</a>
                <a href="mailto:sales@patronaccounting.com?subject=Enquiry%20for%20LLP%20Annual%20Compliance&body=Hello%20Patron%20Accounting%2C%0A%0AI%20need%20LLP%20annual%20compliance%20services.%0APlease%20get%20in%20touch.%0A%0AThank%20you." style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:transparent;color:#fff;border:2px solid rgba(255,255,255,0.3);border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#9993;&#65039; Email Us</a>
            </div>
            <p style="color:rgba(255,255,255,0.7);font-size:13px;margin-top:16px;">Book a Free Consultation - No Obligation.</p>
        </div>
    </div>
</section>

<!-- GSTAT STATE BENCH CITY PAGES (32 Pages) -->
<section class="content-section" style="padding:48px 32px;background:var(--gray-50);">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title" style="text-align:center;margin-bottom:12px;">LLP Compliance Services - Available in Your City</h2>
            <p style="text-align:center;color:var(--text-muted);font-size:15px;margin-bottom:40px;">Patron Accounting provides end-to-end LLP annual compliance services across major cities in India.</p>
           
            <div class="pa-city-block" style="margin-bottom:40px;"><div class="pa-city-grid"><a href="/pvt-llp-compliance/pune" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Pune</div><div class="pa-card-sub">Maharashtra</div></div></a><a href="/pvt-llp-compliance/mumbai" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Mumbai</div><div class="pa-card-sub">Maharashtra</div></div></a><a href="/pvt-llp-compliance/delhi" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Delhi</div><div class="pa-card-sub">NCR</div></div></a><a href="/pvt-llp-compliance/gurugram" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Gurugram</div><div class="pa-card-sub">Haryana</div></div></a></div></div><div class="pa-city-block"><div class="pa-block-title">Related Compliance Services</div><div class="pa-block-sub">Complete LLP and company compliance support</div><div class="pa-cross-grid"><a href="/llp-incorporation" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">LLP Registration</div><div class="pa-card-sub">India</div></div></a><a href="/private-limited-company-compliance" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Pvt Ltd Compliance</div><div class="pa-card-sub">India</div></div></a><a href="/llp-partner-change" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">LLP Partner Change</div><div class="pa-card-sub">India</div></div></a><a href="/llp-agreement-change" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">LLP Agreement Change</div><div class="pa-card-sub">India</div></div></a><a href="/director-kyc" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Director KYC</div><div class="pa-card-sub">India</div></div></a><a href="/tax-audit" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Tax Audit Service</div><div class="pa-card-sub">India</div></div></a></div></div>
        </div>
    </div>
</section>

<!-- CONTENT FRESHNESS FOOTER -->
<section class="content-section" style="padding:32px;">
    <div class="content-container">
        <div class="text-content" style="font-size:13px;color:var(--text-muted);">
            <p><strong>Content Created:</strong> March 2026 &nbsp;|&nbsp; <strong>Last Updated:</strong> <span id="lastUpdatedFooter">20 April 2026</span> &nbsp;|&nbsp; <strong>Next Review:</strong> September 2026 &nbsp;|&nbsp; <strong>Reviewed By:</strong> CA &amp; CS Team, Patron Accounting LLP</p>
            <p>This page covers LLP Annual Compliance in India under LLP Act, 2008 and Income Tax Act, 1961. Content reviewed every 6 months. Due dates and DIR-3 KYC rules verified as of March 2026.</p>
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
