
@extends('layouts.service-app')
@push('styles')
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Barlow:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,400&family=DM+Sans:opsz,wght@9..40,400;9..40,500;9..40,600;9..40,700&display=swap" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
@endpush








@section('meta')
    <title>TDS Return Filing (24Q) - Salary TDS, Form 16 & Due Date</title>
    <meta name="description" content="Employers must file TDS return Form 24Q quarterly under Section 200(3). Know due dates, Annexure I and II, Form 16 generation via TRACES, Section 234E penalty. Starts Rs 1,999.">
    <link rel="canonical" href="/tds-return-filing-24q">
    <meta name="robots" content="index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1">
    <meta property="og:title" content="TDS Return Filing (24Q) - Salary TDS, Form 16 & Due Date">
    <meta property="og:description" content="Employers must file TDS return Form 24Q quarterly under Section 200(3). Know due dates, Annexure I and II, Form 16 generation via TRACES, Section 234E penalty. Starts Rs 1,999.">
    <meta property="og:url" content="/tds-return-filing-24q">
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="Patron Accounting">
    <meta property="og:image" content="https://www.patronaccounting.com/images/og-default-square.png">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="1200">
    <meta property="og:image:type" content="image/png">
    <meta property="og:image:secure_url" content="https://www.patronaccounting.com/images/og-default-square.png">
    <meta property="og:image:alt" content="Patron Accounting - partner you can rely on">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="TDS Return Filing (24Q) - Salary TDS, Form 16 & Due Date">
    <meta name="twitter:description" content="Employers must file TDS return Form 24Q quarterly under Section 200(3). Know due dates, Annexure I and II, Form 16 generation via TRACES, Section 234E penalty. Starts Rs 1,999.">
    <meta name="twitter:image" content="https://www.patronaccounting.com/images/og-default-square.png">
@endsection

@section('schema')
    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@graph": [
        {
          "@type": "Service",
          "name": "TDS Return Filing (24Q) - Salary TDS, Form 16 & Due Date",
          "description": "Employers must file TDS return Form 24Q quarterly under Section 200(3). Know due dates, Annexure I and II, Form 16 generation via TRACES, Section 234E penalty. Starts Rs 1,999.",
          "url": "https://www.patronaccounting.com/tds-return-filing-24q",
          "serviceType": "TDS Return Filing (24Q) - Salary TDS, Form 16 & Due Date",
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
            "url": "https://www.patronaccounting.com/tds-return-filing-24q",
            "priceSpecification": {
              "@type": "PriceSpecification",
              "minPrice": "200",
              "maxPrice": "10000",
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
              "name": "TDS Return Filing (24Q) - Salary TDS, Form 16 & Due Date",
              "item": "https://www.patronaccounting.com/tds-return-filing-24q"
            }
          ]
        },
        {
          "@type": "FAQPage",
          "mainEntity": [
            {
              "@type": "Question",
              "name": "What is Form 24Q and who must file it?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "Form 24Q is a quarterly TDS return for salary payments under Section 192. It contains Annexure I (all quarters - deductor, challan, deductee details) and Annexure II (Q4 only - complete salary breakup, deductions, and tax computation). Every employer with TAN who deducted TDS from salary during the quarter must file."
              }
            },
            {
              "@type": "Question",
              "name": "What are the due dates for filing Form 24Q?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "Q1 (Apr-Jun) by 31 July, Q2 (Jul-Sep) by 31 October, Q3 (Oct-Dec) by 31 January, Q4 (Jan-Mar) by 31 May. TDS deposit is due by the 7th of the month following deduction. For March, TDS must be deposited by 30/31 March. Form 16 due by 15 June."
              }
            },
            {
              "@type": "Question",
              "name": "What is the penalty for late filing?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "Rs 200/day under Section 234E, capped at the total TDS amount for the quarter. This is automatic and non-waivable. Additionally, Rs 10,000 to Rs 1,00,000 under Section 271H if not filed within 1 year or incorrect details are furnished. Section 271H is waived if TDS is deposited, fee paid, and return filed within 1 year."
              }
            },
            {
              "@type": "Question",
              "name": "How is Form 16 generated from Form 24Q?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "After filing all 4 quarters, download Form 16 Part A from the TRACES portal (contains quarterly TDS details, challan info). Part B is prepared by the employer from Annexure II data (salary breakup, exemptions, deductions, tax computation). Both parts together constitute Form 16, due to employees by 15 June."
              }
            },
            {
              "@type": "Question",
              "name": "What is the difference between Annexure I and Annexure II?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "Annexure I is filed in all 4 quarters containing deductor details, challan details (BSR code, date, amount), and deductee summary. Annexure II is Q4 only and contains the complete salary computation - gross salary, Section 10 exemptions, Chapter VI-A deductions, and final tax liability per employee. Annexure II feeds into Form 16 Part B."
              }
            },
            {
              "@type": "Question",
              "name": "What changes from April 2026?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "Under the Income Tax Act, 2025 (effective 1 April 2026): Form 24Q is renumbered to Form 138, Form 16 to Form 130, Form 16A to Form 131, and Form 26AS to Form 168. The structure and content remain the same - only form numbers change. FY 2025-26 filings use current form numbers."
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
                        TDS Return Filing (24Q) - Quarterly Filing, Form 16 Generation and Compliance
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
                            <p class="mb-0 text-dark benefit-paragraph"><span>Form 24Q:</span> Quarterly TDS return - Annexure I for all 4 quarters, Annexure II only in Q4 with full salary breakup and tax computation</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Due Dates:</span> TDS deposit by 7th of following month. Return: Q1 by 31 Jul, Q2 by 31 Oct, Q3 by 31 Jan, Q4 by 31 May. Form 16 by 15 June.</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Penalties:</span> Late fee Rs 200/day (Section 234E) capped at TDS amount. Penalty Rs 10,000-1,00,000 (Section 271H). Interest 1-1.5%/month.</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Starting Fee:</span> CA-assisted 24Q filing from Rs 1,999/quarter. Annual package Rs 6,999 (4Q + Form 16). 600+ employers managed.</p>
                        </div>
                    </div>

                    <p class="mb-4 fw-bold" style="color: var(--blue); font-size: 15px;">600+ employers managed with 15,000+ Form 16s generated in FY 2025-26 and 100% on-time filing rate</p>

                    <div class="hero-cta">
                        <a href="tel:+919459456700" class="btn-video text-decoration-none">
                            <span class="play-circle"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="width:14px;height:14px;color:#fff"><path d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/></svg></span>
                            Call +91 945 945 6700
                        </a>
                        <a href="mailto:sales@patronaccounting.com?subject=24Q%20Filing%20Help&body=Hello%2C%20I%20just%20visited%20your%20TDS%20Return%20Filing%2024Q%20page.%20I%20would%20like%20to%20know%20more%20about%20it.%0A%0AThank%20you." class="btn-sample text-decoration-none">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="width:18px;height:18px;"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,12 2,6"/></svg>
                            Email Us
                        </a>
                        <a href="https://wa.me/919459456700?text=Hello%2C%20I%20just%20visited%20your%20TDS%20Return%20Filing%2024Q%20page.%20I%20would%20like%20to%20know%20more%20about%20it." target="_blank" class="btn-sample text-decoration-none" rel="noopener">
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
                                            'service'  => 'TDS Return Filing (24Q)',
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
    'ctaText'    => 'Expert TDS return filing - monthly computation, quarterly 24Q, Form 16 via TRACES, correction statements, and default resolution.',
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
            <a class="toc-btn" href="#overview-section">Overview</a><a class="toc-btn" href="#what-section">What Is It</a><a class="toc-btn" href="#who-section">Who Must File</a><a class="toc-btn" href="#services-section">Our Services</a><a class="toc-btn" href="#procedure-section">How to File</a><a class="toc-btn" href="#documents-section">Documents</a><a class="toc-btn" href="#challenges-section">Challenges</a><a class="toc-btn" href="#fees-section">Fees</a><a class="toc-btn" href="#timeline-section">Due Dates</a><a class="toc-btn" href="#benefits-section">Benefits</a><a class="toc-btn" href="#comparison-section">TDS Forms Compared</a><a class="toc-btn" href="#faq-section">FAQs</a>
        </div>
        <button class="toc-arrow right" id="tocRight">&#10095;</button>
    </div>
</div>

<!-- SECTION 2: OVERVIEW / INTRO + TL;DR -->
<section class="content-section" id="overview-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">TDS Return Filing (24Q) - Overview</h2>
            <div class="content-text">
                <div class="highlight-box" style="margin-bottom:20px;">
                    <p><strong>&#128204; TL;DR - TDS Return Filing (24Q) Services at a Glance</strong></p>
                    <p>Employers file Form 24Q quarterly for salary TDS under Section 192. Annexure I all quarters; Annexure II Q4 only with full salary breakup. Deposit by 7th, return by 31 Jul/Oct/Jan/May. Late fee Rs 200/day (Section 234E). Form 16 via TRACES by 15 June. CA-assisted from Rs 1,999/quarter.</p><div class="table-responsive-wrapper" style="margin-top:16px;"><table><thead><tr><th>Parameter</th><th>Details</th></tr></thead><tbody><tr><td>What is Form 24Q</td><td>Quarterly TDS return for salary payments under Section 192 of Income Tax Act</td></tr><tr><td>Governing Law</td><td>Section 192 (TDS), Section 200(3) (Return Filing), Section 203 (Form 16)</td></tr><tr><td>Filing Frequency</td><td>Quarterly - Q1 (Apr-Jun), Q2 (Jul-Sep), Q3 (Oct-Dec), Q4 (Jan-Mar)</td></tr><tr><td>Due Dates</td><td>Q1: 31 Jul, Q2: 31 Oct, Q3: 31 Jan, Q4: 31 May</td></tr><tr><td>Late Fee (Section 234E)</td><td>Rs 200/day, capped at total TDS amount for the quarter</td></tr><tr><td>Penalty (Section 271H)</td><td>Rs 10,000 to Rs 1,00,000 for non-filing within 1 year</td></tr><tr><td>Patron Fee</td><td>Starting Rs 1,999/quarter for 24Q filing and Form 16</td></tr></tbody></table></div><p style="margin-top:0;</p>
                </div>
                <p>Every employer who pays salary must deduct TDS under Section 192, deposit by the 7th of the following month, file quarterly returns in Form 24Q, and issue Form 16 by June 15. Form 24Q consists of Annexure I (all quarters) and Annexure II (Q4 only with complete salary breakup). Data filed in 24Q populates employee Form 26AS and enables Form 16 generation through TRACES.</p>
                <p>From April 2026, Form 24Q is renumbered to Form 138 and Form 16 to Form 130 under the Income Tax Act, 2025. Structure and content remain the same. Patron Accounting manages 24Q filing for 600+ employers from offices in Pune, Mumbai, Delhi, and Gurugram.</p>
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
                <h2 class="section-title">What Is TDS Return Filing (Form 24Q)?</h2>
                <div class="content-text what-is-definition">
                    
                    <p>Form 24Q is a quarterly TDS return filed by employers to report salary paid, TDS deducted under Section 192, and tax deposited, enabling employees to receive TDS credit in Form 26AS and Form 16.</p><p>It contains Annexure I (all 4 quarters - deductor details, challan details, deductee summary) and Annexure II (Q4 only - complete salary breakup, Section 10 exemptions, Chapter VI-A deductions, tax computation per employee).</p><p>Filing is done via the <a href="https://www.incometax.gov.in" target="_blank" rel="noopener">e-filing portal</a> after validation through the FVU utility. Form 16 is generated from <a href="https://tdscpc.gov.in" target="_blank" rel="noopener">TRACES</a> after all four quarters are filed.</p>

                </div>
                <div class="highlight-box" style="margin-top:20px;">
                    <p><strong>Key Terms for TDS Return Filing (24Q):</strong></p>
                    <p><strong>Annexure I</strong> - Filed all 4 quarters. Deductor details (TAN, PAN), challan details (BSR code, date, amount), and deductee summary.</p><p><strong>Annexure II</strong> - Q4 only. Full salary breakup: gross salary, exemptions, Chapter VI-A deductions, tax computation, and regime choice per employee.</p><p><strong>TRACES</strong> - TDS Reconciliation Analysis and Correction Enabling System at <a href="https://tdscpc.gov.in" target="_blank" rel="noopener">tdscpc.gov.in</a>. Portal for Form 16 download, defaults, and corrections.</p><p><strong>2026 Renumbering</strong> - Form 24Q becomes Form 138, Form 16 becomes Form 130, Form 26AS becomes Form 168 under Income Tax Act, 2025.</p>

                </div>
            </div>
            <div class="column-image">
                <div class="illustration-placeholder">
                    <div class="illustration-icon" style="max-width:240px;">
                        <svg viewBox="0 0 200 180" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="30" y="20" width="140" height="90" rx="8" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><rect x="30" y="20" width="140" height="22" rx="8" fill="#14365F"/><text x="100" y="35" font-size="9" fill="#fff" font-weight="700" text-anchor="middle" font-family="Arial, sans-serif">FORM 24Q</text><rect x="45" y="52" width="50" height="16" rx="3" fill="#FFF3E0" stroke="#F5A623" stroke-width="1"/><text x="70" y="63" font-size="6" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">ANNEXURE I</text><rect x="105" y="52" width="50" height="16" rx="3" fill="#E8F5E9" stroke="#25D366" stroke-width="1"/><text x="130" y="63" font-size="6" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">ANNEXURE II</text><rect x="65" y="78" width="70" height="16" rx="3" fill="#F0F4F8" stroke="#14365F" stroke-width="1"/><text x="100" y="89" font-size="6" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">FORM 16</text><rect x="25" y="130" width="55" height="18" rx="4" fill="#FFF3E0" stroke="#F5A623" stroke-width="1"/><text x="52" y="142.5" font-size="6" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial, sans-serif">Sec 192</text><circle cx="165" cy="30" r="16" fill="#E8F5E9" stroke="#25D366" stroke-width="1.5"/><text x="165" y="34" font-size="6" fill="#25D366" font-weight="700" text-anchor="middle" font-family="Arial, sans-serif">600+</text><text x="100" y="168" font-size="9" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial, sans-serif">TDS Return Filing (24Q)</text></svg>
                    </div>
                    <div class="illustration-badge">
                        <span>Section 192</span>
                        <strong>24Q + Form 16</strong>
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
            <h2 class="section-title">Who Must File Form 24Q?</h2>
            <div class="content-text">
                
                <ul><li><strong>Companies:</strong> Private Limited, Public Limited, and One Person Companies deducting TDS from employee salaries</li><li><strong>LLPs and Partnership Firms:</strong> Firms paying salary to employees (not partner remuneration - that is under Section 194N/192)</li><li><strong>Proprietorships:</strong> Sole proprietors with employees drawing salary above the basic exemption limit</li><li><strong>Trusts and NGOs:</strong> Trusts, societies, and Section 8 companies with salaried employees</li><li><strong>Government Departments:</strong> Central and state government offices deducting TDS</li></ul><p><strong>Key:</strong> TAN registration is mandatory. No TDS deduction needed if employee income falls below basic exemption limit after all deductions and exemptions. PAN-Aadhaar linking mandatory - non-linking triggers 20% TDS rate under Section 206AA.</p>

            </div>
            </div>
        </div>
    </div>
</section>

<!-- SECTION 5: OUR SERVICES -->
<section class="content-section" id="services-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Our TDS Return Filing Services</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Service</th><th>What We Do</th></tr></thead>
                    <tbody>
                        <tr><td>Monthly TDS Computation</td><td>Salary-wise calculation considering tax regime (old/new), Section 10 exemptions, Chapter VI-A deductions, and Form 12B for mid-year joiners</td></tr><tr><td>Quarterly 24Q Filing</td><td>RPU preparation, FVU validation, e-filing portal upload with DSC on <a href="https://www.incometax.gov.in" target="_blank" rel="noopener">incometax.gov.in</a></td></tr><tr><td>Form 16 Generation</td><td><a href="https://tdscpc.gov.in" target="_blank" rel="noopener">TRACES</a> Part A download + Part B preparation, distributed to employees by 15 June</td></tr><tr><td>TDS Challan Management</td><td>Monthly ITNS-281 preparation, deposit tracking by 7th, BSR code reconciliation with bank statements</td></tr><tr><td>Correction Statements</td><td>PAN errors, challan mismatches, amount discrepancies corrected via TRACES within 2-year CBDT window</td></tr><tr><td>TRACES Default Resolution</td><td>Short deduction, short payment, late filing defaults identified and resolved proactively</td></tr>

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
            <h2 class="section-title">How to File Form 24Q - Step by Step</h2>
            <p class="section-subtitle" style="text-align:left;max-width:100%;">Complete process for quarterly TDS return filing including Annexure I/II, FVU validation, e-filing, and Form 16 generation via TRACES.</p>
        </header>
        <div class="steps-container">
            <div class="step-card"><div class="step-content"><span class="step-badge">Step 1</span><h3 class="step-title">Compile Salary Data and Verify PANs</h3><p class="step-description">Compile monthly salary data for the quarter. Verify all employee PANs and PAN-Aadhaar linking status. Non-linking triggers 20% TDS rate instead of applicable slab rate under Section 206AA.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> PANs verified</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Aadhaar linking checked</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="10" y="10" width="40" height="55" rx="4" fill="#F0F4F8" stroke="#14365F" stroke-width="1.2"/><rect x="40" y="15" width="40" height="55" rx="4" fill="#F0F4F8" stroke="#14365F" stroke-width="1.2"/><rect x="70" y="10" width="40" height="55" rx="4" fill="#F0F4F8" stroke="#14365F" stroke-width="1.2"/><text x="30" y="42" font-size="4" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">PAN</text><text x="60" y="47" font-size="4" fill="#F5A623" font-weight="700" text-anchor="middle" font-family="Arial">SALARY</text><text x="90" y="42" font-size="4" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">AADHAAR</text></svg></div><span class="illustration-label">Data Ready</span><span class="step-number-large">01</span></div></div></div>
<div class="step-card"><div class="step-content"><span class="step-badge">Step 2</span><h3 class="step-title">Reconcile TDS Challans</h3><p class="step-description">Match challan details - BSR code, serial number, deposit date, and amount against bank statements. TDS must be deposited by the 7th of the following month via ITNS-281.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> BSR codes matched</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Deposits verified</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="25" y="15" width="70" height="55" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><rect x="25" y="15" width="70" height="16" rx="6" fill="#14365F"/><text x="60" y="27" font-size="7" fill="#fff" font-weight="700" text-anchor="middle" font-family="Arial">ITNS-281</text><text x="60" y="50" font-size="5" fill="#F5A623" font-weight="700" text-anchor="middle" font-family="Arial">BSR + DATE</text></svg></div><span class="illustration-label">Challans Reconciled</span><span class="step-number-large">02</span></div></div></div>
<div class="step-card"><div class="step-content"><span class="step-badge">Step 3</span><h3 class="step-title">Prepare in RPU with Annexure I/II</h3><p class="step-description">Enter data in Return Preparation Utility (RPU) - deductor, challan, and deductee details. For Q4, complete Annexure II with full salary breakup, exemptions, Chapter VI-A deductions, and tax computation per employee.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Annexure I completed</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Annexure II (Q4) filled</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="15" y="5" width="90" height="75" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><rect x="15" y="5" width="90" height="16" rx="6" fill="#14365F"/><text x="60" y="17" font-size="7" fill="#fff" font-weight="700" text-anchor="middle" font-family="Arial">RPU</text><text x="40" y="40" font-size="5" fill="#14365F" font-weight="600" text-anchor="middle" font-family="Arial">Annex I</text><text x="80" y="40" font-size="5" fill="#F5A623" font-weight="700" text-anchor="middle" font-family="Arial">Annex II</text></svg></div><span class="illustration-label">RPU Ready</span><span class="step-number-large">03</span></div></div></div>
<div class="step-card"><div class="step-content"><span class="step-badge">Step 4</span><h3 class="step-title">Validate via FVU</h3><p class="step-description">Run File Validation Utility (FVU) to check for errors - PAN validation, challan matching, computation accuracy. Fix all errors and generate the validated .fvu file for upload.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> FVU validation passed</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Error-free .fvu generated</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="20" y="10" width="80" height="65" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><circle cx="60" cy="38" r="14" fill="#E8F5E9" stroke="#25D366" stroke-width="1.5"/><path d="M53 38l4 4 9-9" stroke="#25D366" stroke-width="2" stroke-linecap="round"/><text x="60" y="68" font-size="6" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">.FVU FILE</text></svg></div><span class="illustration-label">FVU Validated</span><span class="step-number-large">04</span></div></div></div>
<div class="step-card"><div class="step-content"><span class="step-badge">Step 5</span><h3 class="step-title">Upload on E-Filing Portal</h3><p class="step-description">Log in to incometax.gov.in with TAN. Navigate to TDS returns section. Upload the validated .fvu file with Digital Signature Certificate (DSC). Download provisional receipt.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Uploaded with DSC</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Receipt downloaded</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="20" y="15" width="80" height="55" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><path d="M60 55 L60 30" stroke="#F5A623" stroke-width="3" stroke-linecap="round"/><path d="M50 38 L60 28 L70 38" stroke="#F5A623" stroke-width="3" fill="none" stroke-linecap="round"/><text x="60" y="78" font-size="5" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">E-FILING + DSC</text></svg></div><span class="illustration-label">24Q Filed</span><span class="step-number-large">05</span></div></div></div>
<div class="step-card"><div class="step-content"><span class="step-badge">Step 6</span><h3 class="step-title">Generate and Issue Form 16</h3><p class="step-description">After all 4 quarters are filed, download Form 16 Part A from TRACES portal. Prepare Part B with salary breakup from Annexure II data. Issue complete Form 16 to all employees by 15 June.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Part A from TRACES</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Part B prepared and issued</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="20" y="10" width="80" height="65" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><rect x="20" y="10" width="80" height="16" rx="6" fill="#14365F"/><text x="60" y="22" font-size="7" fill="#fff" font-weight="700" text-anchor="middle" font-family="Arial">FORM 16</text><text x="45" y="45" font-size="5" fill="#14365F" font-weight="600" text-anchor="middle" font-family="Arial">Part A</text><text x="75" y="45" font-size="5" fill="#F5A623" font-weight="700" text-anchor="middle" font-family="Arial">Part B</text><text x="60" y="65" font-size="5" fill="#25D366" font-weight="700" text-anchor="middle" font-family="Arial">BY 15 JUNE</text></svg></div><span class="illustration-label">Form 16 Issued</span><span class="step-number-large">06</span></div></div></div>

        </div>
    </div>
</section>

<!-- SECTION 8: DOCUMENTS REQUIRED -->
<section class="content-section" id="documents-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Documents Required for 24Q Filing</h2>
            <div class="content-text">
                
                <ul><li><strong>TAN</strong> of the deductor (employer)</li><li><strong>Employee PANs</strong> (Aadhaar-linked mandatory)</li><li><strong>Salary registers</strong> with monthly breakup for the quarter</li><li><strong>Investment declarations</strong> and proof submitted by employees</li><li><strong>Tax regime elections</strong> (old or new) from each employee</li><li><strong>TDS challans (ITNS-281)</strong> with BSR code and deposit date</li><li><strong>Previous quarter acknowledgement</strong> (for continuation)</li><li><strong>Form 12B</strong> from mid-year joiners (previous employer TDS details)</li><li><strong>DSC</strong> of the authorised signatory</li><li><strong>TRACES login credentials</strong></li></ul>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 9: CHALLENGES -->
<section class="content-section" id="challenges-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Common 24Q Filing Challenges and Solutions</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Challenge</th><th>Impact</th><th>How Patron Accounting Solves It</th></tr></thead>
                    <tbody>
                        <tr><td>PAN-Aadhaar Not Linked</td><td>Non-linked PANs trigger 20% TDS rate instead of applicable slab, causing excess deduction from employee salary</td><td>Send PAN-Aadhaar linking reminders before FY start. Deduct at 20% for non-linked PANs per Section 206AA. Refund via ITR.</td></tr><tr><td>Challan Mismatch</td><td>BSR code, date, or amount mismatch causes TRACES short payment defaults and blocks Form 16 generation</td><td>Monthly challan reconciliation against bank statements. File correction via TRACES for any mismatches immediately.</td></tr><tr><td>Annexure II Complexity (Q4)</td><td>Multiple tax regimes, mid-year joiners with Form 12B, and complex deductions make Q4 the most error-prone quarter</td><td>Collect Form 12B. Confirm regime choice in writing. Use payroll-integrated TDS software for accurate Annexure II.</td></tr><tr><td>TDS Credit Missing in Form 26AS</td><td>Employee TDS not appearing in their Form 26AS, causing ITR filing issues</td><td>Verify PAN in 24Q is correct. Check TRACES processing status. File correction statement if PAN was entered incorrectly.</td></tr>

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
            <h2 class="section-title">TDS Return Filing Fees</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Fee Component</th><th>Amount</th></tr></thead>
                    <tbody>
                        <tr><td>Quarterly 24Q (Up to 25 Employees)</td><td>Starting from INR 1,999/quarter</td></tr><tr><td>Quarterly 24Q (26-100 Employees)</td><td>Rs 3,999/quarter</td></tr><tr><td>Quarterly 24Q (100+ Employees)</td><td>Rs 7,999/quarter</td></tr><tr><td>Form 16 Generation</td><td>Rs 999 (included in annual package)</td></tr><tr><td>TDS Correction Statement</td><td>Rs 1,499 per correction</td></tr><tr><td>Annual Package (4 Quarters + Form 16 + TRACES)</td><td>Rs 6,999/year (up to 25 employees)</td></tr>

                    </tbody>
                </table>
                </div>
                <p style="margin-top:16px;font-size:13px;color:var(--text-muted);font-style:italic;">All fees and charges listed are indicative only and do not constitute a binding offer. Final amounts may vary depending on the volume of work and the complexity involved.</p>
                <p style="margin-top:16px;">Professional service charges for drafting, filing, and representation are separate from the statutory fees. The exact fee depends on the complexity of the case, disputed amount, and number of hearings required. Contact us for a detailed quote.</p>
                <p style="margin-top:16px;"><strong>Get a free TDS Return Filing (24Q) consultation - <a href="tel:+919459456700">Call +91 945 945 6700</a> or <a href="https://wa.me/919459456700?text=Hello%2C%20I%20just%20visited%20your%20TDS%20Return%20Filing%2024Q%20page.%20I%20would%20like%20to%20know%20more%20about%20it." target="_blank" rel="noopener">WhatsApp us</a>. No-obligation assessment.</strong></p>
            </div>
        </div>
    </div>
</section>

<!-- SECTION 11: TIMELINE -->
<section class="content-section" id="timeline-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">TDS Return Due Dates - FY 2025-26</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Stage</th><th>Estimated Timeline</th></tr></thead>
                    <tbody>
                        <tr><td>Q1 (Apr-Jun 2025)</td><td>24Q by 31 Jul 2025 | TDS by 7th monthly</td></tr><tr><td>Q2 (Jul-Sep 2025)</td><td>24Q by 31 Oct 2025 | TDS by 7th monthly</td></tr><tr><td>Q3 (Oct-Dec 2025)</td><td>24Q by 31 Jan 2026 | TDS by 7th monthly</td></tr><tr><td>Q4 (Jan-Mar 2026)</td><td>24Q by 31 May 2026 | TDS by 7th (March: 30/31 Mar)</td></tr><tr><td>Form 16 Issuance</td><td>By 15 June 2026 | Our turnaround: by 10 June</td></tr><tr><td>Correction Window</td><td>Within 2 years of FY end (CBDT restriction)</td></tr>

                    </tbody>
                </table>
                </div>
                <div class="highlight-box" style="margin-top:16px;">
                    
                    <p><strong>Critical:</strong> Section 234E fee of Rs 200/day is automatic and non-waivable - cannot file return without paying. CBDT restricted correction statements to 2 years from FY end. FY 2023-24 corrections must be filed by 31 March 2026. Q4 Annexure II is the most complex - start preparation by 1 April.</p>

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
            <h2 class="section-title">Benefits of Professional TDS Return Filing</h2>
        </div>
        <div class="features-grid" style="display:grid;grid-template-columns:repeat(3,1fr);gap:24px;"><article class="feature-card" style="background:var(--white);border:1px solid var(--gray-200);border-radius:var(--radius-lg);padding:28px;"><div style="width:48px;height:48px;background:var(--orange-light);border-radius:var(--radius-md);display:flex;align-items:center;justify-content:center;margin-bottom:16px;"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M22 11.08V12a10 10 0 11-5.93-9.14"/><path d="M22 4L12 14.01l-3-3"/></svg></div><h3 style="font-size:17px;font-weight:700;color:var(--blue);margin-bottom:8px;">Accurate Monthly TDS</h3><p style="font-size:14px;color:var(--text-secondary);line-height:1.6;margin:0;">Slab-based TDS computation monthly considering old/new regime, exemptions, Chapter VI-A deductions, and mid-year joiner Form 12B data</p></article><article class="feature-card" style="background:var(--white);border:1px solid var(--gray-200);border-radius:var(--radius-lg);padding:28px;"><div style="width:48px;height:48px;background:var(--orange-light);border-radius:var(--radius-md);display:flex;align-items:center;justify-content:center;margin-bottom:16px;"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg></div><h3 style="font-size:17px;font-weight:700;color:var(--blue);margin-bottom:8px;">Zero Section 234E Fees</h3><p style="font-size:14px;color:var(--text-secondary);line-height:1.6;margin:0;">Returns filed before every quarterly deadline, eliminating Rs 200/day late fee that compounds quickly and cannot be waived</p></article><article class="feature-card" style="background:var(--white);border:1px solid var(--gray-200);border-radius:var(--radius-lg);padding:28px;"><div style="width:48px;height:48px;background:var(--orange-light);border-radius:var(--radius-md);display:flex;align-items:center;justify-content:center;margin-bottom:16px;"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M14 2H6a2 2 0 00-2 2v16a2 2 0 002 2h12a2 2 0 002-2V8z"/><path d="M14 2v6h6M16 13H8M16 17H8"/></svg></div><h3 style="font-size:17px;font-weight:700;color:var(--blue);margin-bottom:8px;">Error-Free Annexure II</h3><p style="font-size:14px;color:var(--text-secondary);line-height:1.6;margin:0;">Q4 Annexure II with complete salary breakup across all regimes and deduction categories for seamless Form 16 generation</p></article><article class="feature-card" style="background:var(--white);border:1px solid var(--gray-200);border-radius:var(--radius-lg);padding:28px;"><div style="width:48px;height:48px;background:var(--orange-light);border-radius:var(--radius-md);display:flex;align-items:center;justify-content:center;margin-bottom:16px;"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><path d="M12 6v6l4 2"/></svg></div><h3 style="font-size:17px;font-weight:700;color:var(--blue);margin-bottom:8px;">TRACES Default Resolution</h3><p style="font-size:14px;color:var(--text-secondary);line-height:1.6;margin:0;">Short deduction, short payment, and late filing defaults identified and resolved proactively before they escalate</p></article><article class="feature-card" style="background:var(--white);border:1px solid var(--gray-200);border-radius:var(--radius-lg);padding:28px;"><div style="width:48px;height:48px;background:var(--orange-light);border-radius:var(--radius-md);display:flex;align-items:center;justify-content:center;margin-bottom:16px;"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M17 21v-2a4 4 0 00-4-4H5a4 4 0 00-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M23 21v-2a4 4 0 00-3-3.87"/></svg></div><h3 style="font-size:17px;font-weight:700;color:var(--blue);margin-bottom:8px;">Timely Form 16 by June 15</h3><p style="font-size:14px;color:var(--text-secondary);line-height:1.6;margin:0;">Bulk TRACES Part A download + comprehensive Part B preparation. Form 16 issued to all employees by 10 June - 5 days before deadline.</p></article></div>
    </div>
</section>

<!-- SECTION 12A: SOCIAL PROOF -->
<section class="content-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Why Employers Trust Patron Accounting for 24Q</h2>
            <div class="content-text">
                
                <p><strong>600+ employers managed</strong> across all industries. <strong>15,000+ Form 16s generated</strong> in FY 2025-26. <strong>100% on-time filing rate</strong> across all quarterly deadlines. <strong>4.8/5 Google rating</strong> from 200+ verified reviews. Offices in Pune, Mumbai, Delhi, and Gurugram.</p>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 13: SELF-FILING vs PROFESSIONAL COMPARISON -->
<section class="content-section" id="comparison-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">TDS Return Forms Comparison</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Form</th><th>Purpose</th><th>Payment Type</th><th>Certificate</th></tr></thead>
                    <tbody>
                        <tr><td>24Q (138 from Apr 2026)</td><td>TDS on salary</td><td>Section 192</td><td>Form 16 (130)</td></tr><tr><td>26Q</td><td>TDS non-salary domestic</td><td>Rent, professional fees, interest</td><td>Form 16A (131)</td></tr><tr><td>27Q</td><td>TDS on NRI payments</td><td>Section 195</td><td>Form 16A</td></tr><tr><td>27EQ</td><td>TCS collection</td><td>Tax Collected at Source</td><td>Form 27D</td></tr>

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
            <h2 class="section-title">Related Payroll and Compliance Services</h2>
            <div class="content-text">
                
                <ul><li><a href="/payroll-processing-and-management-services">Payroll Processing</a> - Monthly salary computation with integrated TDS</li><li><a href="/tds-return-filing-24q">TDS Return Filing (26Q)</a> - Non-salary TDS on rent, professional fees, interest</li><li><a href="/income-tax-return">Income Tax Return</a> - ITR filing for employees and employers</li><li><a href="/pt-returns">PT Returns</a> - State-wise Professional Tax compliance</li><li><a href="#">ESI and PF</a> - Monthly statutory compliance</li></ul>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 15A: LEGAL FRAMEWORK -->
<section class="content-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Legal Framework for TDS Return Filing</h2>
            <div class="content-text">
                
                <div class="table-responsive-wrapper"><table><thead><tr><th>Provision</th><th>Key Requirement</th></tr></thead><tbody><tr><td>Section 192</td><td>TDS on salary at applicable slab rates after exemptions and deductions. Old and new regime options.</td></tr><tr><td>Section 200(3)</td><td>Quarterly return filing mandatory for all deductors. 24Q for salary, 26Q for non-salary.</td></tr><tr><td>Section 203</td><td>Form 16 within 15 days of Q4 due date. Non-issuance: Rs 100/day under Section 272A(2)(g).</td></tr><tr><td><a href="https://www.incometax.gov.in" target="_blank" rel="noopener">Section 234E</a></td><td>Rs 200/day late fee, capped at TDS amount. Automatic. Cannot file without paying.</td></tr><tr><td>Section 271H</td><td>Rs 10,000-1,00,000 penalty for non-filing within 1 year or incorrect details. Waived if conditions met.</td></tr><tr><td>Section 201(1A)</td><td>Interest: 1% per month (non-deduction), 1.5% per month (non-deposit).</td></tr></tbody></table></div><p><strong>2026 Renumbering:</strong> Form 24Q becomes Form 138, Form 16 becomes Form 130, Form 26AS becomes Form 168 under Income Tax Act, 2025 (effective 1 April 2026). Structure unchanged.</p><p><strong>Portal:</strong> <a href="https://www.incometax.gov.in" target="_blank" rel="noopener">E-Filing</a> | <a href="https://tdscpc.gov.in" target="_blank" rel="noopener">TRACES</a></p>

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
                    <h2 class="faq-expanded__title">Frequently Asked Questions - TDS Return (24Q)</h2>
                    <p class="faq-expanded__lead">Expert answers about Form 24Q, Annexure I/II, Form 16 generation, Section 234E penalty, and 2026 changes.</p>
                    @include('partials.bigin-form', [
                        'variant'  => 'compact',
                        'service'  => 'TDS Return Filing (24Q)',
                    ])
                </aside>
                <div class="faq-expanded__list">
                    <div class="faq-expanded__item" id="faq-1">
                        <h3 class="faq-expanded__q">What is Form 24Q and who must file it?</h3>
                        <div class="faq-expanded__a"><p>Form 24Q is a quarterly TDS return for salary payments under Section 192. It contains Annexure I (all quarters - deductor, challan, deductee details) and Annexure II (Q4 only - complete salary breakup, deductions, and tax computation). Every employer with TAN who deducted TDS from salary during the quarter must file.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-2">
                        <h3 class="faq-expanded__q">What are the due dates for filing Form 24Q?</h3>
                        <div class="faq-expanded__a"><p>Q1 (Apr-Jun) by 31 July, Q2 (Jul-Sep) by 31 October, Q3 (Oct-Dec) by 31 January, Q4 (Jan-Mar) by 31 May. TDS deposit is due by the 7th of the month following deduction. For March, TDS must be deposited by 30/31 March. Form 16 due by 15 June.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-3">
                        <h3 class="faq-expanded__q">What is the penalty for late filing?</h3>
                        <div class="faq-expanded__a"><p>Rs 200/day under Section 234E, capped at the total TDS amount for the quarter. This is automatic and non-waivable. Additionally, Rs 10,000 to Rs 1,00,000 under Section 271H if not filed within 1 year or incorrect details are furnished. Section 271H is waived if TDS is deposited, fee paid, and return filed within 1 year.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-4">
                        <h3 class="faq-expanded__q">How is Form 16 generated from Form 24Q?</h3>
                        <div class="faq-expanded__a"><p>After filing all 4 quarters, download Form 16 Part A from the TRACES portal (contains quarterly TDS details, challan info). Part B is prepared by the employer from Annexure II data (salary breakup, exemptions, deductions, tax computation). Both parts together constitute Form 16, due to employees by 15 June.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-5">
                        <h3 class="faq-expanded__q">What is the difference between Annexure I and Annexure II?</h3>
                        <div class="faq-expanded__a"><p>Annexure I is filed in all 4 quarters containing deductor details, challan details (BSR code, date, amount), and deductee summary. Annexure II is Q4 only and contains the complete salary computation - gross salary, Section 10 exemptions, Chapter VI-A deductions, and final tax liability per employee. Annexure II feeds into Form 16 Part B.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-6">
                        <h3 class="faq-expanded__q">What changes from April 2026?</h3>
                        <div class="faq-expanded__a"><p>Under the Income Tax Act, 2025 (effective 1 April 2026): Form 24Q is renumbered to Form 138, Form 16 to Form 130, Form 16A to Form 131, and Form 26AS to Form 168. The structure and content remain the same - only form numbers change. FY 2025-26 filings use current form numbers.</p></div>
                    </div>
                </div>
            </div>


            <!-- Quick Answers -->
            <div class="highlight-box" style="margin-top:32px;">
                <p><strong>Quick Answers</strong></p>
                <p><strong>What is Form 24Q?</strong> Quarterly TDS return for salary under Section 192 with Annexure I (all quarters) and Annexure II (Q4 only).</p><p><strong>Late fee?</strong> Rs 200/day (Section 234E) capped at TDS amount. Penalty Rs 10,000-1,00,000 (Section 271H) if over 1 year late.</p><p><strong>When is Form 16 due?</strong> 15 June (15 days after Q4 filing deadline of 31 May).</p><p><strong>Is nil return required?</strong> Not mandatory for Q1-Q3 if no TDS deducted. Q4 recommended for clean TRACES record and Form 16 generation.</p>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 18: URGENCY CTA -->
<section class="content-section" style="background: var(--orange-lighter) !important; border-left: 4px solid var(--orange);">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">File Your TDS Returns Before Penalties Hit</h2>
            <div class="content-text">
                
                <p>Section 234E fee of Rs 200/day is automatic and non-waivable. CBDT restricted corrections to 2 years from FY end - FY 2023-24 corrections must be filed by 31 March 2026. Missing Q4 by 50 days means Rs 10,000 in fees (capped at TDS amount). Employee Form 26AS credit depends on your accurate and timely 24Q filing.</p><p><strong>Act now.</strong> <a href="tel:+919459456700">Call +91 945 945 6700</a> or <a href="https://wa.me/919459456700?text=Hello%2C%20I%20just%20visited%20your%20TDS%20Return%20Filing%2024Q%20page.%20I%20would%20like%20to%20know%20more%20about%20it." target="_blank" rel="noopener">WhatsApp us</a> for a free TDS compliance assessment.</p>

            </div>
        </div>
    </div>
</section>

<!-- CONCLUSION + CTA BLOCK (Dark) -->
<section class="content-section" style="background: var(--blue) !important;">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title" style="color:#FFFFFF !important;">Never Miss a TDS Deadline Again</h2>
            <div class="content-text" style="text-align:left;">
                
                <p style="color:rgba(255,255,255,0.9);font-size:15px;line-height:1.7;">TDS return filing via Form 24Q is a quarterly obligation directly impacting employee ITR filing. Accurate Annexure II in Q4 is the foundation for correct Form 16 via TRACES. Section 234E and Section 271H penalties, plus Section 201(1A) interest, make timely filing essential.</p><p style="color:rgba(255,255,255,0.9);font-size:15px;line-height:1.7;">Patron Accounting manages 24Q for 600+ employers with 15,000+ Form 16s generated. From Rs 1,999/quarter. Offices in Pune, Mumbai, Delhi, and Gurugram.</p>

            </div>
            <div style="display:flex;gap:14px;flex-wrap:wrap;margin-top:24px;">
                <a href="tel:+919459456700" style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:var(--orange);color:#fff;border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#128222; Call +91 945 945 6700</a>
                <a href="https://wa.me/919459456700?text=Hello%2C%20I%20just%20visited%20your%20TDS%20Return%20Filing%2024Q%20page.%20I%20would%20like%20to%20know%20more%20about%20it." target="_blank" style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:#25D366;color:#fff;border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;" rel="noopener">&#128172; WhatsApp Us</a>
                <a href="mailto:sales@patronaccounting.com?subject=TDS%20Return%20Filing%2024Q&body=Hello%2C%20I%20just%20visited%20your%20TDS%20Return%20Filing%2024Q%20page.%20I%20would%20like%20to%20know%20more%20about%20it.%0A%0AThank%20you." style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:transparent;color:#fff;border:2px solid rgba(255,255,255,0.3);border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#9993;&#65039; Email Us</a>
            </div>
            <p style="color:rgba(255,255,255,0.7);font-size:13px;margin-top:16px;">Book a Free Consultation - No Obligation.</p>
        </div>
    </div>
</section>

<!-- GSTAT STATE BENCH CITY PAGES (32 Pages) -->
<section class="content-section" style="padding:48px 32px;background:var(--gray-50);">
    <div class="content-container">
        <div class="text-content">
<div class="pa-city-block"><p class="pa-block-title">Related Employer Compliance</p><p class="pa-block-sub">Complete payroll and TDS services</p><div class="pa-cross-grid"><a href="/payroll-processing-and-management-services" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M14 2H6a2 2 0 00-2 2v16a2 2 0 002 2h12a2 2 0 002-2V8z"/><path d="M14 2v6h6M16 13H8M16 17H8"/></svg></div><div><div class="pa-card-title">Payroll Processing</div><div class="pa-card-sub">Monthly</div></div></a><a href="/tds-return-filing-24q" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M14 2H6a2 2 0 00-2 2v16a2 2 0 002 2h12a2 2 0 002-2V8z"/><path d="M14 2v6h6M16 13H8M16 17H8"/></svg></div><div><div class="pa-card-title">TDS Return (26Q)</div><div class="pa-card-sub">Non-Salary</div></div></a><a href="/income-tax-return" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M14 2H6a2 2 0 00-2 2v16a2 2 0 002 2h12a2 2 0 002-2V8z"/><path d="M14 2v6h6M16 13H8M16 17H8"/></svg></div><div><div class="pa-card-title">ITR Filing</div><div class="pa-card-sub">India</div></div></a><a href="/pt-returns" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M14 2H6a2 2 0 00-2 2v16a2 2 0 002 2h12a2 2 0 002-2V8z"/><path d="M14 2v6h6M16 13H8M16 17H8"/></svg></div><div><div class="pa-card-title">PT Returns</div><div class="pa-card-sub">State-Wise</div></div></a><a href="#" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M14 2H6a2 2 0 00-2 2v16a2 2 0 002 2h12a2 2 0 002-2V8z"/><path d="M14 2v6h6M16 13H8M16 17H8"/></svg></div><div><div class="pa-card-title">ESI and PF</div><div class="pa-card-sub">Monthly</div></div></a><a href="/gst-returns" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M14 2H6a2 2 0 00-2 2v16a2 2 0 002 2h12a2 2 0 002-2V8z"/><path d="M14 2v6h6M16 13H8M16 17H8"/></svg></div><div><div class="pa-card-title">GST Returns</div><div class="pa-card-sub">India</div></div></a></div></div>
        </div>
    </div>
</section>

<!-- CONTENT FRESHNESS FOOTER -->
<section class="content-section" style="padding:32px;">
    <div class="content-container">
        <div class="text-content" style="font-size:13px;color:var(--text-muted);">
            <p><strong>Content Created:</strong> March 2026 &nbsp;|&nbsp; <strong>Last Updated:</strong> <span id="lastUpdatedFooter">20 April 2026</span> &nbsp;|&nbsp; <strong>Next Review:</strong> June 2026 &nbsp;|&nbsp; <strong>Reviewed By:</strong> CA &amp; CS Team, Patron Accounting LLP</p>
            <p>This page is reviewed quarterly - aligned to CBDT notifications, TDS rate changes, RPU/FVU updates, and TRACES portal changes. Next review: June 2026.</p>
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






<!-- ============================================
     CONSULTATION FORM  -  Country Dropdown + Validation + Bigin Integration
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
