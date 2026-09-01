
@extends('layouts.service-app')

<!-- External Dependencies (loaded by master layout in production) -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Barlow:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,400&family=DM+Sans:opsz,wght@9..40,400;9..40,500;9..40,600;9..40,700&display=swap" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

@section('meta')
    <title>GST Notice Reply - Types, Process & How to Respond Online</title>
    <meta name="description" content="GST notice is a formal communication from tax authorities for non-compliance. Learn types of GST notices, how to reply online, penalties under Section 73, 74 and 74A. CA-assisted reply starts at Rs 2,999.">
    <link rel="canonical" href="/gst-notice">
    <meta name="robots" content="index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1">
    <meta property="og:title" content="GST Notice Reply - Types, Process & How to Respond Online">
    <meta property="og:description" content="GST notice is a formal communication from tax authorities for non-compliance. Learn types of GST notices, how to reply online, penalties under Section 73, 74 and 74A. CA-assisted reply starts at Rs 2,999.">
    <meta property="og:url" content="/gst-notice">
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="Patron Accounting">
    <meta property="og:image" content="https://www.patronaccounting.com/images/og-default-square.png">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="1200">
    <meta property="og:image:type" content="image/png">
    <meta property="og:image:secure_url" content="https://www.patronaccounting.com/images/og-default-square.png">
    <meta property="og:image:alt" content="Patron Accounting - partner you can rely on">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="GST Notice Reply - Types, Process & How to Respond Online">
    <meta name="twitter:description" content="GST notice is a formal communication from tax authorities for non-compliance. Learn types of GST notices, how to reply online, penalties under Section 73, 74 and 74A. CA-assisted reply starts at Rs 2,999.">
    <meta name="twitter:image" content="https://www.patronaccounting.com/images/og-default-square.png">
@endsection

@section('schema')
    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@graph": [
        {
          "@type": "Service",
          "name": "GST Notice: Types, Reply and Penalty",
          "description": "GST notice is a formal communication from tax authorities for non-compliance. Learn types of GST notices, how to reply online, penalties under Section 73, 74 and 74A. CA-assisted reply starts at Rs 2,999.",
          "url": "https://www.patronaccounting.com/gst-notice",
          "serviceType": "GST Notice: Types, Reply and Penalty",
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
            "url": "https://www.patronaccounting.com/gst-notice",
            "price": "2999"
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
              "name": "GST Notice: Types, Reply and Penalty",
              "item": "https://www.patronaccounting.com/gst-notice"
            }
          ]
        },
        {
          "@type": "FAQPage",
          "mainEntity": [
            {
              "@type": "Question",
              "name": "What is a GST notice and why have I received one?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "A GST notice is an official communication from the GST department under the CGST Act, 2017, issued when authorities identify discrepancies in your returns, detect GSTR-1 vs GSTR-3B mismatches, find ITC inconsistencies against GSTR-2B, or notice non-filing. The notice specifies the section, demand amount, and response deadline."
              }
            },
            {
              "@type": "Question",
              "name": "How do I reply to a GST notice online?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "Log in to gst.gov.in, navigate to Services > User Services > View Notices and Orders, select the notice, click Reply, enter your response with supporting documents (up to 4 files of 5 MB each), select hearing preference, and submit using DSC or EVC. Retain the acknowledgement with Reference Number."
              }
            },
            {
              "@type": "Question",
              "name": "What happens if I do not respond?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "Failure to respond can result in automatic demand orders (DRC-07), penalties up to 100% of tax due for fraud under Section 74, provisional attachment of bank accounts under Section 83, cancellation of registration under Section 29, and prosecution under Section 132 for wilful evasion."
              }
            },
            {
              "@type": "Question",
              "name": "What is the difference between Section 73, 74, and 74A?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "Section 73 covers non-fraud demand (up to FY 2023-24) with 3-year limit and 10% penalty. Section 74 handles fraud cases (up to FY 2023-24) with 5-year limit and up to 100% penalty. Section 74A (effective FY 2024-25) consolidates both into one provision with a 42-month window and 60-day reduced penalty period."
              }
            },
            {
              "@type": "Question",
              "name": "Can I request an extension to reply?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "Yes. You can request an extension of up to 15 days through the GST portal within 20 days of SCN issuance. Up to three such requests are allowed. This option is only available if the order has not yet been issued."
              }
            },
            {
              "@type": "Question",
              "name": "What is Form DRC-03?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "Form GST DRC-03 is used for voluntary payment of tax demand. Payment before SCN results in zero penalty for non-fraud (Section 73) and 15% penalty for fraud (Section 74/74A). It is a strategic tool for penalty optimisation."
              }
            },
            {
              "@type": "Question",
              "name": "How much does a CA charge for GST notice reply?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "Fees range from Rs 2,999 for scrutiny notices (ASMT-10) to Rs 14,999 for appeals. Show cause notice under Section 74 with fraud allegations costs Rs 9,999 or more. Patron Accounting offers a free initial assessment before quoting the final fee. Quick Answers What is a GST notice? An official communication from tax authorities under the CGST Act, 2017, requiring explanation for discrepancies in returns, payments, or ITC claims. How many days to reply? 7 working days for registration notices (REG-03/REG-17); 30 days for scrutiny and SCN (ASMT-10, Section 73/74); 60 days reduced penalty window under Section 74A. Penalty for ignoring? Demand orders, penalties up to 100% for fraud, bank account attachment, registration cancellation, and prosecution under Section 132."
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
                        GST Notice - Types, How to Reply Online and Penalties Under CGST Act
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
                            <p class="mb-0 text-dark benefit-paragraph"><span>Coverage:</span> 10+ types of GST notices covered - ASMT-10, DRC-01, REG-17, CMP-05, ADT-01, Section 73, 74, and 74A</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Reply Process:</span> Step-by-step portal reply via Services > User Services > View Notices and Orders on gst.gov.in</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Section 74A:</span> New unified provision effective FY 2024-25 - 42-month notice period with revised penalty structure replacing Sections 73 and 74</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Starting Fee:</span> CA-assisted GST notice reply from Rs 2,999. Free initial assessment. 500+ notices handled with 95% resolution rate.</p>
                        </div>
                    </div>

                    <p class="mb-4 fw-bold" style="color: var(--blue); font-size: 15px;">500+ GST notices handled with 95% resolution rate across scrutiny, show cause, demand, and cancellation categories</p>

                    <div class="hero-cta">
                        <a href="tel:+919459456700" class="btn-video text-decoration-none">
                            <span class="play-circle"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="width:14px;height:14px;color:#fff"><path d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/></svg></span>
                            Call +91 945 945 6700
                        </a>
                        <a href="mailto:sales@patronaccounting.com?subject=GST%20Notice%20Reply%20Help&body=Hello%20Patron%20Accounting%2C%0A%0AI%20need%20GST%20notice%20reply%20assistance.%0A%0APlease%20get%20in%20touch.%0A%0AThank%20you." class="btn-sample text-decoration-none">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="width:18px;height:18px;"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,12 2,6"/></svg>
                            Email Us
                        </a>
                        <a href="https://wa.me/919459456700?text=Hi%20Patron%20Accounting%2C%20I%20received%20a%20GST%20Notice.%20Please%20help." target="_blank" class="btn-sample text-decoration-none">
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
                                            'service'  => 'GST Notice',
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
            <a class="toc-btn" href="#overview-section">Overview</a><a class="toc-btn" href="#what-section">What Is It</a><a class="toc-btn" href="#who-section">Who Gets Notices</a><a class="toc-btn" href="#services-section">Our Services</a><a class="toc-btn" href="#procedure-section">How to Reply</a><a class="toc-btn" href="#documents-section">Documents</a><a class="toc-btn" href="#challenges-section">Challenges</a><a class="toc-btn" href="#fees-section">Fees</a><a class="toc-btn" href="#timeline-section">Timeline</a><a class="toc-btn" href="#benefits-section">Benefits</a><a class="toc-btn" href="#comparison-section">DIY vs Professional</a><a class="toc-btn" href="#faq-section">FAQs</a>
        </div>
        <button class="toc-arrow right" id="tocRight">&#10095;</button>
    </div>
</div>

<!-- SECTION 2: OVERVIEW / INTRO + TL;DR -->
<section class="content-section" id="overview-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">GST Notice - Complete Overview</h2>
            <div class="content-text">
                <div class="highlight-box" style="margin-bottom:20px;">
                    <p><strong>&#128204; TL;DR - GST Notice Services at a Glance</strong></p>
                    <p>A GST notice demands explanation for discrepancies in returns, payments, or ITC claims. Reply within 7 to 30 days via the <a href="https://www.gst.gov.in" target="_blank" rel="noopener">GST portal</a>. Section 73 covers non-fraud (penalty up to 10%), Section 74 addresses fraud (up to 100%), and Section 74A (from FY 2024-25) consolidates both with a 42-month window. Professional CA assistance ensures compliant, timely responses.</p><div class="table-responsive-wrapper" style="margin-top:16px;"><table><thead><tr><th>Parameter</th><th>Details</th></tr></thead><tbody><tr><td>What is a GST Notice</td><td>Official communication from GST authorities for non-compliance or discrepancies</td></tr><tr><td>Governing Law</td><td>Sections 46, 61, 62, 63, 65, 67, 73, 74, 74A of CGST Act, 2017</td></tr><tr><td>Common Triggers</td><td>GSTR-1 vs GSTR-3B mismatch, ITC discrepancies, non-filing, excess refund claims</td></tr><tr><td>Reply Timeline</td><td>7 to 30 days depending on notice type</td></tr><tr><td>Penalty (Non-Fraud)</td><td>10% of tax due or Rs 10,000 whichever is higher (Sec 73/74A)</td></tr><tr><td>Penalty (Fraud)</td><td>Up to 100% of tax due (Sec 74/74A)</td></tr><tr><td>Patron Fee</td><td>Starting Rs 2,999 for GST notice reply assistance</td></tr></tbody></table></div><p style="margin-top:0;</p>
                </div>
                <p>A GST notice is an official communication issued by tax authorities under the Central Goods and Services Tax Act, 2017, when discrepancies, non-compliance, or information gaps are identified in a taxpayer's GST filings, payments, or registration. With the GSTN now using automated data matching and AI-driven risk analysis, receiving a GST notice has become increasingly common.</p>
                <p>Responding accurately and within the stipulated deadline is critical to avoid penalties, interest, attachment of assets, or cancellation of GST registration. Patron Accounting's CA and CS team provides end-to-end GST notice assistance from offices in Pune, Mumbai, Delhi, and Gurugram.</p>
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
                <h2 class="section-title">What Is a GST Notice?</h2>
                <div class="content-text what-is-definition">
                    
                    <p>A GST notice is a formal legal communication sent by GST authorities to a registered taxpayer under the CGST Act, 2017, requiring explanation, information, or corrective action regarding discrepancies in GST returns, payments, registrations, or input tax credit claims.</p><p>Notices can range from routine scrutiny (ASMT-10 under Section 61) to serious show cause notices (Section 73, 74, or 74A) demanding tax payment with interest and penalty. The type of notice determines the response deadline, penalty exposure, and legal strategy required.</p><p>With the introduction of Section 74A (effective FY 2024-25), the demand framework has been consolidated into a single provision with a 42-month notice period, replacing the dual Sections 73 and 74 structure for periods from FY 2024-25 onwards.</p>

                </div>
                <div class="highlight-box" style="margin-top:20px;">
                    <p><strong>Key Terms for GST Notice:</strong></p>
                    <p><strong>Show Cause Notice (SCN)</strong> - Notice under Section 73, 74, or 74A requiring the taxpayer to explain why they should not pay the demanded tax, interest, and penalty.</p><p><strong>DRC-01 / DRC-07</strong> - DRC-01 is the summary of show cause notice. DRC-07 is the summary of demand order issued after adjudication.</p><p><strong>ASMT-10</strong> - Scrutiny notice under Section 61 when discrepancies are found in filed returns.</p><p><strong>Section 74A</strong> - New unified provision (FY 2024-25 onwards) consolidating Sections 73 and 74 with a 42-month notice period and 60-day reduced penalty window.</p>

                </div>
            </div>
            <div class="column-image">
                <div class="illustration-placeholder">
                    <div class="illustration-icon" style="max-width:240px;">
                        <svg viewBox="0 0 200 180" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="40" y="20" width="120" height="90" rx="8" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><rect x="40" y="20" width="120" height="22" rx="8" fill="#14365F"/><text x="100" y="35" font-size="9" fill="#fff" font-weight="700" text-anchor="middle" font-family="Arial, sans-serif">GST NOTICE</text><text x="100" y="60" font-size="8" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial, sans-serif">CGST Act 2017</text><line x1="55" y1="70" x2="145" y2="70" stroke="#F5A623" stroke-width="2" stroke-linecap="round"/><text x="80" y="85" font-size="7" fill="#14365F" font-weight="600" text-anchor="middle" font-family="Arial">Sec 73</text><text x="120" y="85" font-size="7" fill="#F5A623" font-weight="700" text-anchor="middle" font-family="Arial">Sec 74A</text><circle cx="100" cy="100" r="8" fill="#FFF3E0" stroke="#F5A623" stroke-width="1"/><text x="100" y="103" font-size="6" fill="#C05E10" font-weight="700" text-anchor="middle" font-family="Arial">!</text><rect x="25" y="130" width="55" height="18" rx="4" fill="#FFF3E0" stroke="#F5A623" stroke-width="1"/><text x="52" y="142.5" font-size="7" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial, sans-serif">7-30 DAYS</text><circle cx="165" cy="30" r="16" fill="#E8F5E9" stroke="#25D366" stroke-width="1.5"/><text x="165" y="34" font-size="6" fill="#25D366" font-weight="700" text-anchor="middle" font-family="Arial, sans-serif">REPLY</text><text x="100" y="168" font-size="10" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial, sans-serif">GST Notice Reply</text></svg>
                    </div>
                    <div class="illustration-badge">
                        <span>CGST Act 2017</span>
                        <strong>GST Notice Reply</strong>
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
            <h2 class="section-title">Who Receives a GST Notice?</h2>
            <div class="content-text">
                
                <ul><li><strong>GSTR-1 vs GSTR-3B Mismatch:</strong> When sales data in GSTR-1 does not match the summary return GSTR-3B, scrutiny notices follow</li><li><strong>ITC Discrepancies:</strong> Input Tax Credit claimed in GSTR-3B not matching GSTR-2A or GSTR-2B triggers automated notices</li><li><strong>Non-Filing or Delayed Filing:</strong> Failure to file for more than six months can lead to cancellation notice under Section 29</li><li><strong>E-Way Bill vs GSTR-1 Mismatch:</strong> Inconsistencies between e-way bill data and GSTR-1 declarations invite scrutiny</li><li><strong>Excess Refund Claims:</strong> Erroneously sanctioned refunds may be recovered through show cause notices</li><li><strong>Unregistered Businesses:</strong> Businesses exceeding Rs 40 lakh threshold (Rs 20 lakh for services) that have not registered</li></ul>

            </div>
            </div>
        </div>
    </div>
</section>

<!-- SECTION 5: OUR SERVICES -->
<section class="content-section" id="services-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Our GST Notice Services</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Service</th><th>What We Do</th></tr></thead>
                    <tbody>
                        <tr><td>Notice Analysis and Assessment</td><td>Review of notice type, section reference, demand amount, and applicable deadlines. Free initial assessment to determine your exposure.</td></tr><tr><td>Reply Drafting and Filing</td><td>Legally compliant replies with supporting documentation, filed via the <a href="https://www.gst.gov.in" target="_blank" rel="noopener">GST portal</a> within the stipulated deadline</td></tr><tr><td>Representation Before Authorities</td><td>Personal hearing representation by authorised CA or Advocate under Section 116 of CGST Act</td></tr><tr><td>GSTR Reconciliation and Correction</td><td>GSTR-1 vs GSTR-3B reconciliation, GSTR-2B vs ITC reconciliation, and corrective filings to resolve discrepancies</td></tr><tr><td>Appeal Filing Against Orders</td><td>First appeal to Appellate Authority within 3 months under Section 107 of CGST Act</td></tr><tr><td>Preventive Compliance Review</td><td>Monthly GST health check to identify and fix mismatches before they trigger notices</td></tr>

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
            <h2 class="section-title">How to Reply to a GST Notice Online</h2>
            <p class="section-subtitle" style="text-align:left;max-width:100%;">Step-by-step process for replying to a GST notice via the GST portal under Section 169 of the CGST Act, 2017.</p>
        </header>
        <div class="steps-container">
            <div class="step-card"><div class="step-content"><span class="step-badge">Step 1</span><h3 class="step-title">Log in to GST Portal</h3><p class="step-description">Log in to the GST portal at www.gst.gov.in using your GSTIN and password.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Portal accessed</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> GSTIN authenticated</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="15" y="10" width="90" height="65" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><rect x="15" y="10" width="90" height="16" rx="6" fill="#14365F"/><text x="60" y="22" font-size="7" fill="#fff" font-weight="700" text-anchor="middle" font-family="Arial">gst.gov.in</text><rect x="30" y="38" width="60" height="10" rx="3" fill="#FFF3E0" stroke="#F5A623" stroke-width="0.8"/><text x="60" y="46" font-size="6" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">LOGIN</text></svg></div><span class="illustration-label">Logged In</span><span class="step-number-large">01</span></div></div></div>
<div class="step-card"><div class="step-content"><span class="step-badge">Step 2</span><h3 class="step-title">Navigate to Notices</h3><p class="step-description">Go to Dashboard > Services > User Services > View Notices and Orders.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Notices section opened</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> All notices visible</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="15" y="10" width="90" height="65" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><text x="60" y="35" font-size="6" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">SERVICES</text><path d="M55 42 L60 50 L65 42" stroke="#F5A623" stroke-width="2" fill="none"/><text x="60" y="62" font-size="5" fill="#F5A623" font-weight="700" text-anchor="middle" font-family="Arial">VIEW NOTICES</text></svg></div><span class="illustration-label">Notices Found</span><span class="step-number-large">02</span></div></div></div>
<div class="step-card"><div class="step-content"><span class="step-badge">Step 3</span><h3 class="step-title">Identify the Notice</h3><p class="step-description">Review the section reference, demand amount, and reply deadline. Understand whether it is a scrutiny notice (ASMT-10), show cause (Section 73/74/74A), cancellation (REG-17), or audit (ADT-01).</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Notice type identified</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Deadline confirmed</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="20" y="10" width="80" height="65" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><circle cx="55" cy="38" r="15" fill="none" stroke="#F5A623" stroke-width="2"/><line x1="66" y1="48" x2="78" y2="60" stroke="#F5A623" stroke-width="3" stroke-linecap="round"/><text x="60" y="68" font-size="6" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">IDENTIFY</text></svg></div><span class="illustration-label">Notice Analysed</span><span class="step-number-large">03</span></div></div></div>
<div class="step-card"><div class="step-content"><span class="step-badge">Step 4</span><h3 class="step-title">Gather Supporting Documents</h3><p class="step-description">Collect GST returns (GSTR-1, GSTR-3B, GSTR-9), invoices, payment challans, bank statements, ITC registers, and reconciliation statements for the relevant period.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> All documents collected</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Reconciliation ready</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="10" y="10" width="40" height="55" rx="4" fill="#F0F4F8" stroke="#14365F" stroke-width="1.2"/><rect x="40" y="15" width="40" height="55" rx="4" fill="#F0F4F8" stroke="#14365F" stroke-width="1.2"/><rect x="70" y="10" width="40" height="55" rx="4" fill="#F0F4F8" stroke="#14365F" stroke-width="1.2"/></svg></div><span class="illustration-label">Docs Ready</span><span class="step-number-large">04</span></div></div></div>
<div class="step-card"><div class="step-content"><span class="step-badge">Step 5</span><h3 class="step-title">Draft the Reply</h3><p class="step-description">Address each point raised in the notice with specific references to Act sections and supporting evidence. Include reconciliation data, invoice-level details, and case law references where applicable.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Point-by-point reply</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Legal citations included</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="15" y="5" width="90" height="75" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><rect x="15" y="5" width="90" height="16" rx="6" fill="#14365F"/><text x="60" y="17" font-size="7" fill="#fff" font-weight="700" text-anchor="middle" font-family="Arial">REPLY</text><line x1="28" y1="32" x2="92" y2="32" stroke="#F5A623" stroke-width="2" stroke-linecap="round"/><line x1="28" y1="44" x2="80" y2="44" stroke="#14365F" stroke-width="1.5" opacity="0.3"/><line x1="28" y1="54" x2="70" y2="54" stroke="#14365F" stroke-width="1.5" opacity="0.3"/></svg></div><span class="illustration-label">Reply Drafted</span><span class="step-number-large">05</span></div></div></div>
<div class="step-card"><div class="step-content"><span class="step-badge">Step 6</span><h3 class="step-title">Upload and Submit</h3><p class="step-description">Click the Reply button on the notice, enter your response, upload supporting documents (up to 4 files of 5 MB each). Select Personal Hearing Required (Yes/No). Verify and submit using DSC or EVC.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Documents uploaded</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> DSC/EVC verified</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="20" y="15" width="80" height="55" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><path d="M60 55 L60 30" stroke="#F5A623" stroke-width="3" stroke-linecap="round"/><path d="M50 38 L60 28 L70 38" stroke="#F5A623" stroke-width="3" fill="none" stroke-linecap="round"/><text x="60" y="78" font-size="6" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">DSC / EVC</text></svg></div><span class="illustration-label">Submitted</span><span class="step-number-large">06</span></div></div></div>
<div class="step-card"><div class="step-content"><span class="step-badge">Step 7</span><h3 class="step-title">Save Acknowledgement</h3><p class="step-description">Save the acknowledgement with Reference Number (RFN) for your records. Monitor the case via the REPLIES tab in Case Details on the portal.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> RFN saved</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Case monitored</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="20" y="10" width="80" height="65" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><circle cx="60" cy="38" r="18" fill="#E8F5E9" stroke="#25D366" stroke-width="1.5"/><path d="M52 38l5 5 11-11" stroke="#25D366" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"/><text x="60" y="68" font-size="6" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">RFN SAVED</text></svg></div><span class="illustration-label">Complete</span><span class="step-number-large">07</span></div></div></div>

        </div>
    </div>
</section>

<!-- SECTION 8: DOCUMENTS REQUIRED -->
<section class="content-section" id="documents-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Documents Required for GST Notice Reply</h2>
            <div class="content-text">
                
                <ul><li><strong>Copy of the GST notice</strong> (downloaded from the portal)</li><li><strong>GST returns:</strong> GSTR-1, GSTR-3B, GSTR-9, GSTR-9C as applicable</li><li><strong>Tax payment challans and receipts</strong></li><li><strong>Purchase and sales invoices</strong> for the relevant period</li><li><strong>Input Tax Credit register</strong> and reconciliation with GSTR-2B</li><li><strong>E-way bills</strong> (if applicable to the notice)</li><li><strong>Bank statements</strong> showing GST payments</li><li><strong>Audited financial statements</strong></li><li><strong>Previous correspondence</strong> with GST authorities (if any)</li><li><strong>Power of Attorney</strong> or Letter of Authorisation (if filing through representative)</li></ul>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 9: CHALLENGES -->
<section class="content-section" id="challenges-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Common Challenges and Solutions</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Challenge</th><th>Impact</th><th>How Patron Accounting Solves It</th></tr></thead>
                    <tbody>
                        <tr><td>GSTR-1 vs GSTR-3B Mismatch</td><td>Automated scrutiny notices triggered by sales data discrepancies between GSTR-1 and GSTR-3B</td><td>Run monthly reconciliation using GST tools. File corrective amendments in GSTR-1 before the annual return deadline.</td></tr><tr><td>ITC Exceeds GSTR-2B Data</td><td>Input Tax Credit claimed in GSTR-3B exceeds auto-populated GSTR-2B, triggering automated notices</td><td>Reconcile ITC monthly. Reverse excess ITC in the next return with interest under Section 50 to avoid penalty escalation.</td></tr><tr><td>Tight Reply Deadlines (7-30 Days)</td><td>Complex data requirements with short deadlines make self-filing risky</td><td>Engage a CA immediately. Request extension of up to 15 days via the GST portal adjournment feature.</td></tr><tr><td>Understanding Legal Section and Penalty</td><td>Difficulty distinguishing between Section 73 (non-fraud) and Section 74 (fraud) implications</td><td>Professional assessment determines appropriate response strategy and penalty optimisation approach</td></tr>

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
            <h2 class="section-title">GST Notice Reply Fees</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Fee Component</th><th>Amount</th></tr></thead>
                    <tbody>
                        <tr><td>Scrutiny Notice Reply (ASMT-10)</td><td>Starting from INR 2,999</td></tr><tr><td>Show Cause Notice Reply (Section 73)</td><td>Starting from INR 4,999</td></tr><tr><td>Show Cause Notice Reply (Section 74/74A - Fraud)</td><td>Starting from INR 9,999</td></tr><tr><td>Registration Cancellation Reply (REG-17)</td><td>Starting from INR 2,999</td></tr><tr><td>Personal Hearing Representation</td><td>Rs 7,999 per hearing</td></tr><tr><td>First Appeal (Section 107)</td><td>Starting from INR 14,999</td></tr><tr><td>Preventive GST Compliance Review</td><td>Rs 1,999 per month</td></tr>

                    </tbody>
                </table>
                </div>
                <p style="margin-top:16px;font-size:13px;color:var(--text-muted);font-style:italic;">All fees and charges listed are indicative only and do not constitute a binding offer. Final amounts may vary depending on the volume of work and the complexity involved.</p>
                <p style="margin-top:16px;">Professional service charges for drafting, filing, and representation are separate from the statutory fees. The exact fee depends on the complexity of the case, disputed amount, and number of hearings required. Contact us for a detailed quote.</p>
                <p style="margin-top:16px;"><strong>Get a free GST Notice consultation - <a href="tel:+919459456700">Call +91 945 945 6700</a> or <a href="https://wa.me/919459456700?text=Hi%20Patron%20Accounting%2C%20I%20need%20GST%20notice%20reply%20help.%20Please%20call%20me." target="_blank">WhatsApp us</a>. No-obligation assessment.</strong></p>
            </div>
        </div>
    </div>
</section>

<!-- SECTION 11: TIMELINE -->
<section class="content-section" id="timeline-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">GST Notice Reply Timeline</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Stage</th><th>Estimated Timeline</th></tr></thead>
                    <tbody>
                        <tr><td>REG-03 (Registration Clarification)</td><td>7 working days | Our turnaround: 2-3 days</td></tr><tr><td>REG-17 (Cancellation SCN)</td><td>7 working days | Our turnaround: 3-4 days</td></tr><tr><td>CMP-05 (Composition Scheme SCN)</td><td>15 days | Our turnaround: 5-7 days</td></tr><tr><td>ASMT-10 (Scrutiny Notice)</td><td>30 days | Our turnaround: 7-10 days</td></tr><tr><td>Section 73/74 SCN</td><td>30 days (60 days under 74A) | Our turnaround: 10-15 days</td></tr><tr><td>ADT-01 (Audit Notice)</td><td>15 days | Ongoing support</td></tr>

                    </tbody>
                </table>
                </div>
                <div class="highlight-box" style="margin-top:16px;">
                    
                    <p><strong>Critical:</strong> Under Section 73, voluntary payment before SCN means zero penalty. Under Section 74A, payment within 60 days reduces penalty significantly. Every day of delay narrows your reduced-penalty window. Engage a CA immediately upon receiving any GST notice.</p>

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
            <h2 class="section-title">Benefits of Professional GST Notice Assistance</h2>
        </div>
        <div class="features-grid" style="display:grid;grid-template-columns:repeat(3,1fr);gap:24px;"><article class="feature-card" style="background:var(--white);border:1px solid var(--gray-200);border-radius:var(--radius-lg);padding:28px;"><div style="width:48px;height:48px;background:var(--orange-light);border-radius:var(--radius-md);display:flex;align-items:center;justify-content:center;margin-bottom:16px;"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M14 2H6a2 2 0 00-2 2v16a2 2 0 002 2h12a2 2 0 002-2V8z"/><path d="M14 2v6h6M16 13H8M16 17H8"/></svg></div><h3 style="font-size:17px;font-weight:700;color:var(--blue);margin-bottom:8px;">Accurate Legal Interpretation</h3><p style="font-size:14px;color:var(--text-secondary);line-height:1.6;margin:0;">Precise identification of notice section, demand, and penalty provisions under CGST Act, 2017 - distinguishing Section 73 from 74 from 74A</p></article><article class="feature-card" style="background:var(--white);border:1px solid var(--gray-200);border-radius:var(--radius-lg);padding:28px;"><div style="width:48px;height:48px;background:var(--orange-light);border-radius:var(--radius-md);display:flex;align-items:center;justify-content:center;margin-bottom:16px;"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M22 11.08V12a10 10 0 11-5.93-9.14"/><path d="M22 4L12 14.01l-3-3"/></svg></div><h3 style="font-size:17px;font-weight:700;color:var(--blue);margin-bottom:8px;">Comprehensive Reconciliation</h3><p style="font-size:14px;color:var(--text-secondary);line-height:1.6;margin:0;">GSTR-1, GSTR-3B, GSTR-2B, and annual return reconciliation to identify the exact discrepancy causing the notice</p></article><article class="feature-card" style="background:var(--white);border:1px solid var(--gray-200);border-radius:var(--radius-lg);padding:28px;"><div style="width:48px;height:48px;background:var(--orange-light);border-radius:var(--radius-md);display:flex;align-items:center;justify-content:center;margin-bottom:16px;"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg></div><h3 style="font-size:17px;font-weight:700;color:var(--blue);margin-bottom:8px;">Well-Drafted Replies</h3><p style="font-size:14px;color:var(--text-secondary);line-height:1.6;margin:0;">Proper Act section citations, supporting evidence, and case law references - reducing escalation risk from scrutiny to demand</p></article><article class="feature-card" style="background:var(--white);border:1px solid var(--gray-200);border-radius:var(--radius-lg);padding:28px;"><div style="width:48px;height:48px;background:var(--orange-light);border-radius:var(--radius-md);display:flex;align-items:center;justify-content:center;margin-bottom:16px;"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><line x1="12" y1="1" x2="12" y2="23"/><path d="M17 5H9.5a3.5 3.5 0 000 7h5a3.5 3.5 0 010 7H6"/></svg></div><h3 style="font-size:17px;font-weight:700;color:var(--blue);margin-bottom:8px;">Penalty Optimisation</h3><p style="font-size:14px;color:var(--text-secondary);line-height:1.6;margin:0;">Under Sec 73, voluntary payment = zero penalty. Under 74A, payment within 60 days reduces penalty significantly. Timing is critical.</p></article><article class="feature-card" style="background:var(--white);border:1px solid var(--gray-200);border-radius:var(--radius-lg);padding:28px;"><div style="width:48px;height:48px;background:var(--orange-light);border-radius:var(--radius-md);display:flex;align-items:center;justify-content:center;margin-bottom:16px;"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M17 21v-2a4 4 0 00-4-4H5a4 4 0 00-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M23 21v-2a4 4 0 00-3-3.87"/></svg></div><h3 style="font-size:17px;font-weight:700;color:var(--blue);margin-bottom:8px;">Hearing Representation</h3><p style="font-size:14px;color:var(--text-secondary);line-height:1.6;margin:0;">Personal hearing before GST adjudicating authorities by experienced CA or Advocate under Section 116</p></article></div>
    </div>
</section>

<!-- SECTION 12A: SOCIAL PROOF -->
<section class="content-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Why Businesses Trust Patron Accounting</h2>
            <div class="content-text">
                
                <p><strong>500+ GST notices handled</strong> across scrutiny, show cause, demand, and cancellation categories since 2020. <strong>95% resolution rate</strong> without escalation to demand orders or penalties. <strong>4.8/5 Google rating</strong> from 200+ verified reviews. Offices in Pune, Mumbai, Delhi, and Gurugram serving clients across all 28 states.</p>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 13: SELF-FILING vs PROFESSIONAL COMPARISON -->
<section class="content-section" id="comparison-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">DIY vs Professional GST Notice Reply</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Parameter</th><th>DIY Reply</th><th>CA-Assisted Reply</th></tr></thead>
                    <tbody>
                        <tr><td>Legal Accuracy</td><td>Risk of incorrect section references</td><td>Precise Act section and rule citations</td></tr><tr><td>Reconciliation</td><td>Manual, error-prone</td><td>Software-assisted with GST tools</td></tr><tr><td>Penalty Savings</td><td>May miss voluntary payment deadline</td><td>Optimise penalty by timing payment</td></tr><tr><td>Hearing Representation</td><td>Self-appearance only</td><td>CA or Advocate under Section 116</td></tr><tr><td>Escalation Risk</td><td>High - incomplete reply leads to demand</td><td>Low - comprehensive first-response strategy</td></tr><tr><td>Cost</td><td>Rs 0 (but penalty risk is high)</td><td>Rs 2,999 onwards</td></tr>

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
            <h2 class="section-title">Related GST and Compliance Services</h2>
            <div class="content-text">
                
                <ul><li><a href="/gst-registration">GST Registration</a> - For businesses needing to register under GST</li><li><a href="/gst-returns">GST Return Filing</a> - Monthly GSTR-1 and GSTR-3B to prevent non-filing notices</li><li><a href="/gst-annual-returns">GST Annual Return</a> - GSTR-9 and GSTR-9C filing</li><li><a href="#">GST Cancellation and Revocation</a> - For registration cancellation notices</li><li><a href="/income-tax-notice">Income Tax Notice</a> - Similar expertise for IT notices under Section 142, 143, 148</li></ul>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 15A: LEGAL FRAMEWORK -->
<section class="content-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Legal Framework for GST Notices</h2>
            <div class="content-text">
                
                <div class="table-responsive-wrapper"><table><thead><tr><th>Section</th><th>Purpose</th><th>Time Limit</th><th>Penalty</th></tr></thead><tbody><tr><td>Section 46</td><td>Notice for non-filing of returns</td><td>No specific limit</td><td>Late fee: Rs 50/day CGST + Rs 50/day SGST</td></tr><tr><td>Section 61</td><td>Scrutiny of returns</td><td>No specific limit</td><td>Demand under Sec 73/74 if unresolved</td></tr><tr><td>Section 73</td><td>Demand (non-fraud) - up to FY 2023-24</td><td>3-year limit</td><td>10% of tax due or Rs 10,000; nil if paid within 30 days</td></tr><tr><td>Section 74</td><td>Demand (fraud) - up to FY 2023-24</td><td>5-year limit</td><td>15% (before SCN), 25% (30 days), 100% (default)</td></tr><tr><td>Section 74A</td><td>Unified demand - FY 2024-25 onwards</td><td>42 months</td><td>Non-fraud: 10%; Fraud: 15%/25%/100%</td></tr></tbody></table></div><p><strong>Key Change (Section 74A):</strong> From FY 2024-25, Section 74A replaces both Sections 73 and 74 with a single 42-month notice period, 60-day reduced penalty window (up from 30 days), and mandatory 12-month order deadline (extendable by 6 months). No notice required for demands below Rs 1,000.</p><p><strong>Portal:</strong> <a href="https://www.gst.gov.in" target="_blank" rel="noopener">GST Portal</a> | <a href="https://taxinformation.cbic.gov.in" target="_blank" rel="noopener">CBIC Tax Information</a></p>

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
                    <h2 class="faq-expanded__title">Frequently Asked Questions - GST Notice</h2>
                    <p class="faq-expanded__lead">Expert answers about GST notices, reply process, penalties, and Sections 73, 74, and 74A of the CGST Act.</p>
                    @include('partials.bigin-form', [
                        'variant'  => 'compact',
                        'service'  => 'GST Notice',
                    ])
                </aside>
                <div class="faq-expanded__list">
                    <div class="faq-expanded__item" id="faq-1">
                        <h3 class="faq-expanded__q">What is a GST notice and why have I received one?</h3>
                        <div class="faq-expanded__a"><p>A GST notice is an official communication from the GST department under the CGST Act, 2017, issued when authorities identify discrepancies in your returns, detect GSTR-1 vs GSTR-3B mismatches, find ITC inconsistencies against GSTR-2B, or notice non-filing. The notice specifies the section, demand amount, and response deadline.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-2">
                        <h3 class="faq-expanded__q">How do I reply to a GST notice online?</h3>
                        <div class="faq-expanded__a"><p>Log in to gst.gov.in, navigate to Services > User Services > View Notices and Orders, select the notice, click Reply, enter your response with supporting documents (up to 4 files of 5 MB each), select hearing preference, and submit using DSC or EVC. Retain the acknowledgement with Reference Number.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-3">
                        <h3 class="faq-expanded__q">What happens if I do not respond?</h3>
                        <div class="faq-expanded__a"><p>Failure to respond can result in automatic demand orders (DRC-07), penalties up to 100% of tax due for fraud under Section 74, provisional attachment of bank accounts under Section 83, cancellation of registration under Section 29, and prosecution under Section 132 for wilful evasion.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-4">
                        <h3 class="faq-expanded__q">What is the difference between Section 73, 74, and 74A?</h3>
                        <div class="faq-expanded__a"><p>Section 73 covers non-fraud demand (up to FY 2023-24) with 3-year limit and 10% penalty. Section 74 handles fraud cases (up to FY 2023-24) with 5-year limit and up to 100% penalty. Section 74A (effective FY 2024-25) consolidates both into one provision with a 42-month window and 60-day reduced penalty period.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-5">
                        <h3 class="faq-expanded__q">Can I request an extension to reply?</h3>
                        <div class="faq-expanded__a"><p>Yes. You can request an extension of up to 15 days through the GST portal within 20 days of SCN issuance. Up to three such requests are allowed. This option is only available if the order has not yet been issued.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-6">
                        <h3 class="faq-expanded__q">What is Form DRC-03?</h3>
                        <div class="faq-expanded__a"><p>Form GST DRC-03 is used for voluntary payment of tax demand. Payment before SCN results in zero penalty for non-fraud (Section 73) and 15% penalty for fraud (Section 74/74A). It is a strategic tool for penalty optimisation.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-7">
                        <h3 class="faq-expanded__q">How much does a CA charge for GST notice reply?</h3>
                        <div class="faq-expanded__a"><p>Fees range from Rs 2,999 for scrutiny notices (ASMT-10) to Rs 14,999 for appeals. Show cause notice under Section 74 with fraud allegations costs Rs 9,999 or more. Patron Accounting offers a free initial assessment before quoting the final fee.</p></div>
                    </div>
                </div>
            </div>


            <!-- Quick Answers -->
            <div class="highlight-box" style="margin-top:32px;">
                <p><strong>Quick Answers</strong></p>
                <p><strong>What is a GST notice?</strong> An official communication from tax authorities under the CGST Act, 2017, requiring explanation for discrepancies in returns, payments, or ITC claims.</p><p><strong>How many days to reply?</strong> 7 working days for registration notices (REG-03/REG-17); 30 days for scrutiny and SCN (ASMT-10, Section 73/74); 60 days reduced penalty window under Section 74A.</p><p><strong>Penalty for ignoring?</strong> Demand orders, penalties up to 100% for fraud, bank account attachment, registration cancellation, and prosecution under Section 132.</p>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 18: URGENCY CTA -->
<section class="content-section" style="background: var(--orange-lighter) !important; border-left: 4px solid var(--orange);">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Reply to Your GST Notice Before the Deadline</h2>
            <div class="content-text">
                
                <p>Under Section 73, voluntary payment before SCN means zero penalty. Under Section 74A, payment within 60 days reduces penalty significantly. Every day of delay narrows your window and increases financial exposure. Show Cause Notices under Section 74 for FY 2019-20 had a last issuance date of 30 September 2025 - if you received such notices, your deadline may be imminent.</p><p><strong>Act now.</strong> <a href="tel:+919459456700">Call +91 945 945 6700</a> or <a href="https://wa.me/919459456700?text=Hi%20Patron%20Accounting%2C%20I%20received%20a%20GST%20Notice.%20Please%20help." target="_blank">WhatsApp us</a> for a free initial assessment.</p>

            </div>
        </div>
    </div>
</section>

<!-- CONCLUSION + CTA BLOCK (Dark) -->
<section class="content-section" style="background: var(--blue) !important;">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title" style="color:#FFFFFF !important;">Get Expert Help With Your GST Notice Today</h2>
            <div class="content-text" style="text-align:left;">
                
                <p style="color:rgba(255,255,255,0.9);font-size:15px;line-height:1.7;">A GST notice is a legal demand requiring a well-reasoned, evidence-backed response within strict timelines. Whether it is a scrutiny notice under Section 61, a show cause under Sections 73, 74, or 74A, or a demand order in DRC-07, the quality of your response directly impacts your financial liability.</p><p style="color:rgba(255,255,255,0.9);font-size:15px;line-height:1.7;">Patron Accounting provides end-to-end GST notice assistance - analysis, reply drafting, portal filing, hearing representation, and appeal. With 500+ notices handled at a 95% resolution rate, offices in Pune, Mumbai, Delhi, and Gurugram, we ensure your GST compliance is protected.</p>

            </div>
            <div style="display:flex;gap:14px;flex-wrap:wrap;margin-top:24px;">
                <a href="tel:+919459456700" style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:var(--orange);color:#fff;border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#128222; Call +91 945 945 6700</a>
                <a href="https://wa.me/919459456700?text=Hi%20Patron%20Accounting%2C%20I%20need%20GST%20notice%20reply%20help.%20Please%20call%20me." target="_blank" style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:#25D366;color:#fff;border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#128172; WhatsApp Us</a>
                <a href="mailto:sales@patronaccounting.com?subject=GST%20Notice%20-%20Need%20Help&body=Hello%20Patron%20Accounting%2C%0A%0AI%20received%20a%20GST%20Notice.%0A%0APlease%20help.%0A%0AThank%20you." style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:transparent;color:#fff;border:2px solid rgba(255,255,255,0.3);border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#9993;&#65039; Email Us</a>
            </div>
            <p style="color:rgba(255,255,255,0.7);font-size:13px;margin-top:16px;">Book a Free Consultation - No Obligation.</p>
        </div>
    </div>
</section>

<!-- GSTAT STATE BENCH CITY PAGES (32 Pages) -->
<section class="content-section" style="padding:48px 32px;background:var(--gray-50);">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title" style="text-align:center;margin-bottom:12px;">GST Notice Services Across India</h2>
            <p style="text-align:center;color:var(--text-muted);font-size:15px;margin-bottom:40px;">Patron Accounting handles GST notices for businesses in major cities across India.</p>
           
            <div class="pa-city-block" style="margin-bottom:40px;"><p class="pa-block-title">GST Notice Reply by City</p><p class="pa-block-sub">Expert CA-assisted notice reply and representation</p><div class="pa-city-grid"><a href="/gst-notice/pune" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Pune</div><div class="pa-card-sub">Maharashtra</div></div></a><a href="/gst-notice/mumbai" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Mumbai</div><div class="pa-card-sub">Maharashtra</div></div></a><a href="/gst-notice/delhi" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Delhi</div><div class="pa-card-sub">NCR</div></div></a><a href="/gst-notice/gurugram" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Gurugram</div><div class="pa-card-sub">Haryana</div></div></a></div></div><div class="pa-city-block"><p class="pa-block-title">Related GST Services</p><p class="pa-block-sub">Comprehensive GST compliance</p><div class="pa-cross-grid"><a href="/gst-registration" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M14 2H6a2 2 0 00-2 2v16a2 2 0 002 2h12a2 2 0 002-2V8z"/><path d="M14 2v6h6M16 13H8M16 17H8"/></svg></div><div><div class="pa-card-title">GST Registration</div><div class="pa-card-sub">India</div></div></a><a href="/gst-returns" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M14 2H6a2 2 0 00-2 2v16a2 2 0 002 2h12a2 2 0 002-2V8z"/><path d="M14 2v6h6M16 13H8M16 17H8"/></svg></div><div><div class="pa-card-title">GST Return Filing</div><div class="pa-card-sub">Monthly</div></div></a><a href="/gst-annual-returns" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M14 2H6a2 2 0 00-2 2v16a2 2 0 002 2h12a2 2 0 002-2V8z"/><path d="M14 2v6h6M16 13H8M16 17H8"/></svg></div><div><div class="pa-card-title">GST Annual Return</div><div class="pa-card-sub">GSTR-9</div></div></a><a href="#" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M14 2H6a2 2 0 00-2 2v16a2 2 0 002 2h12a2 2 0 002-2V8z"/><path d="M14 2v6h6M16 13H8M16 17H8"/></svg></div><div><div class="pa-card-title">GST Cancellation</div><div class="pa-card-sub">Revocation</div></div></a><a href="/income-tax-notice" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M14 2H6a2 2 0 00-2 2v16a2 2 0 002 2h12a2 2 0 002-2V8z"/><path d="M14 2v6h6M16 13H8M16 17H8"/></svg></div><div><div class="pa-card-title">Income Tax Notice</div><div class="pa-card-sub">India</div></div></a><a href="/gst-returns" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M14 2H6a2 2 0 00-2 2v16a2 2 0 002 2h12a2 2 0 002-2V8z"/><path d="M14 2v6h6M16 13H8M16 17H8"/></svg></div><div><div class="pa-card-title">GST Returns</div><div class="pa-card-sub">India</div></div></a></div></div>
        </div>
    </div>
</section>

<!-- CONTENT FRESHNESS FOOTER -->
<section class="content-section" style="padding:32px;">
    <div class="content-container">
        <div class="text-content" style="font-size:13px;color:var(--text-muted);">
            <p><strong>Content Created:</strong> March 2026 &nbsp;|&nbsp; <strong>Last Updated:</strong> <span id="lastUpdatedFooter">20 April 2026</span> &nbsp;|&nbsp; <strong>Next Review:</strong> June 2026 &nbsp;|&nbsp; <strong>Reviewed By:</strong> CA &amp; CS Team, Patron Accounting LLP</p>
            <p>This page is reviewed quarterly - aligned to GST Council meetings, CBIC notifications, penalty rate changes, and portal updates. Next review: June 2026.</p>
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
