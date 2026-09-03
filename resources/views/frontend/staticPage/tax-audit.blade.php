
@extends('layouts.service-app')

<!-- External Dependencies (loaded by master layout in production) -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Barlow:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,400&family=DM+Sans:opsz,wght@9..40,400;9..40,500;9..40,600;9..40,700&display=swap" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

@section('meta')
    <title>Tax Audit Services - Section 44AB, Form 3CD & Due Date India</title>
    <meta name="description" content="Tax audit under Section 44AB mandatory if business turnover exceeds INR 1 crore or professional receipts exceed INR 50 lakh. Expert CAs. Fee from INR 7,499.">
    <link rel="canonical" href="/tax-audit">
    <meta name="robots" content="index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1">
    <meta property="og:title" content="Tax Audit Services - Section 44AB, Form 3CD & Due Date India">
    <meta property="og:description" content="Tax audit under Section 44AB mandatory if business turnover exceeds INR 1 crore or professional receipts exceed INR 50 lakh. Expert CAs. Fee from INR 7,499.">
    <meta property="og:url" content="/tax-audit">
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="Patron Accounting">
    <meta property="og:image" content="https://www.patronaccounting.com/images/og-default-square.png">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="1200">
    <meta property="og:image:type" content="image/png">
    <meta property="og:image:secure_url" content="https://www.patronaccounting.com/images/og-default-square.png">
    <meta property="og:image:alt" content="Patron Accounting - partner you can rely on">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Tax Audit Services - Section 44AB, Form 3CD & Due Date India">
    <meta name="twitter:description" content="Tax audit under Section 44AB mandatory if business turnover exceeds INR 1 crore or professional receipts exceed INR 50 lakh. Expert CAs. Fee from INR 7,499.">
    <meta name="twitter:image" content="https://www.patronaccounting.com/images/og-default-square.png">
@endsection

@section('schema')
    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@graph": [
        {
          "@type": "Service",
          "name": "Tax Audit: Section 44AB Experts",
          "description": "Tax audit under Section 44AB mandatory if business turnover exceeds INR 1 crore or professional receipts exceed INR 50 lakh. Expert CAs. Fee from INR 7,499.",
          "url": "https://www.patronaccounting.com/tax-audit",
          "serviceType": "Tax Audit: Section 44AB Experts",
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
            "url": "https://www.patronaccounting.com/tax-audit",
            "priceSpecification": {
              "@type": "PriceSpecification",
              "minPrice": "1",
              "maxPrice": "50",
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
              "name": "Tax Audit: Section 44AB Experts",
              "item": "https://www.patronaccounting.com/tax-audit"
            }
          ]
        },
        {
          "@type": "FAQPage",
          "mainEntity": [
            {
              "@type": "Question",
              "name": "What is the turnover limit for tax audit for FY 2025-26 (AY 2026-27)?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "For FY 2025-26, tax audit under Section 44AB is mandatory if business turnover exceeds INR 1 crore (or INR 10 crore for predominantly digital businesses with cash below 5%). For professions, gross receipts above INR 50 lakh trigger audit. Presumptive scheme opt-out below prescribed rates also triggers audit if total income exceeds basic exemption limit."
              }
            },
            {
              "@type": "Question",
              "name": "What is the due date for tax audit report for FY 2025-26?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "The standard due date for filing the tax audit report (Form 3CA/3CB + 3CD) for FY 2025-26 (AY 2026-27) is 30 September 2026. The ITR due date for Section 44AB audited taxpayers is 31 October 2026. Transfer pricing cases have extended deadlines. CBDT may issue extensions via circulars."
              }
            },
            {
              "@type": "Question",
              "name": "What is the penalty for not getting tax audit done in India?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "Under Section 271B, Income Tax Act 1961, penalty for failing to get tax audit done or filing the report late is the lower of: 0.5% of total turnover or gross receipts, or INR 1,50,000. No penalty if reasonable cause is proved under Section 273B."
              }
            },
            {
              "@type": "Question",
              "name": "What is the difference between Form 3CA and Form 3CB in tax audit?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "Form 3CA is used when the taxpayer's books are already audited under another law (e.g., Companies Act for companies). Form 3CB is used when books are not required to be audited under any other law, such as sole proprietorships, partnership firms, and individual professionals. Form 3CD (statement of particulars) is mandatory with both."
              }
            },
            {
              "@type": "Question",
              "name": "Can I avoid tax audit by opting for presumptive taxation under Section 44AD?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "Yes, if you declare income at or above 8% of turnover (6% for digital receipts) under Section 44AD, no tax audit is required. However, if you opt out and declare income below the prescribed rate, and total income exceeds basic exemption limit, tax audit becomes mandatory under Section 44AB regardless of turnover."
              }
            },
            {
              "@type": "Question",
              "name": "Kya partnership firm ka tax audit zaroori hai? Section 44AB kitne turnover par lagta hai?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "Haan, partnership firm ka tax audit Section 44AB ke under zaroori hai agar firm ka total turnover ek financial year mein INR 1 crore se zyada ho. Agar transactions mostly digital hain (cash 5% se kam), to limit INR 10 crore ho jati hai. Report Form 3CB + 3CD mein file hoti hai. 30 September tak file karni hoti hai. Quick Answers What is tax audit in India? Mandatory examination of books by a practicing CA under Section 44AB when business turnover exceeds INR 1 crore or professional receipts exceed INR 50 lakh. What is the tax audit limit for AY 2026-27? Business: INR 1 crore (or INR 10 crore for digital-heavy businesses). Professionals: INR 50 lakh gross receipts. What is the penalty? Section 271B: 0.5% of turnover or INR 1,50,000 - whichever is lower. Waivable under Section 273B. What forms are filed? Form 3CA (or 3CB) + Form 3CD. Form 3CE for non-residents."
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
                        Tax Audit Service in India: Section 44AB Compliance by Expert CAs
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
                            <p class="mb-0 text-dark benefit-paragraph"><span>Section 44AB Compliance:</span> Mandatory for businesses with turnover above INR 1 crore (INR 10 crore for digital-heavy) and professionals with gross receipts above INR 50 lakh</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Form 3CA/3CB + 3CD Filing:</span> Experienced CA team preparing and uploading Form 3CA/3CB and Form 3CD electronically to the Income Tax e-filing portal within due date</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>AIS/TIS Reconciliation:</span> Patron Accounting matches your financials against Annual Information Statement data to prevent notices before filing</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Pan-India Service:</span> Offices in Pune, Mumbai, Delhi, and Bengaluru serving proprietorships, partnerships, LLPs, companies, and professionals</p>
                        </div>
                    </div>

                    <p class="mb-4 fw-bold" style="color: var(--blue); font-size: 15px;">500+ clients served | 1,200+ tax audit reports filed | 4 offices across India</p>

                    <div class="hero-cta">
                        <a href="tel:+919459456700" class="btn-video text-decoration-none">
                            <span class="play-circle"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="width:14px;height:14px;color:#fff"><path d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/></svg></span>
                            Call +91 945 945 6700
                        </a>
                        <a href="mailto:sales@patronaccounting.com?subject=Tax%20Audit%20Enquiry&body=Hello%2C%20I%20just%20visited%20your%20Tax%20Audit%20Service%20page.%20I%20would%20like%20to%20know%20more%20about%20it.%0A%0AThank%20you." class="btn-sample text-decoration-none">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="width:18px;height:18px;"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,12 2,6"/></svg>
                            Email Us
                        </a>
                        <a href="https://wa.me/919459456700?text=Hello%2C%20I%20just%20visited%20your%20Tax%20Audit%20Service%20page.%20I%20would%20like%20to%20know%20more%20about%20it." target="_blank" class="btn-sample text-decoration-none" rel="noopener">
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
                                            'service'  => 'Tax Audit',
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
    'ctaText'    => 'Join 500+ businesses and professionals who trust Patron Accounting for timely Section 44AB compliance.',
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
            <a href="#overview-section" class="toc-btn active">Overview</a><a href="#what-section" class="toc-btn">What Is It</a><a href="#who-section" class="toc-btn">Applicability</a><a href="#services-section" class="toc-btn">Our Services</a><a href="#procedure-section" class="toc-btn">Process</a><a href="#documents-section" class="toc-btn">Documents</a><a href="#challenges-section" class="toc-btn">Challenges</a><a href="#fees-section" class="toc-btn">Fees</a><a href="#timeline-section" class="toc-btn">Timeline</a><a href="#benefits-section" class="toc-btn">Benefits</a><a href="#comparison-section" class="toc-btn">Comparison</a><a href="#faq-section" class="toc-btn">FAQs</a>
        </div>
        <button class="toc-arrow right" id="tocRight">&#10095;</button>
    </div>
</div>

<!-- SECTION 2: OVERVIEW / INTRO + TL;DR -->
<section class="content-section" id="overview-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Tax Audit Service - Overview</h2>
            <div class="content-text">
                <div class="highlight-box" style="margin-bottom:20px;">
                    <p><strong>&#128204; TL;DR - Tax Audit Services at a Glance</strong></p>
                    <p>Tax audit under Section 44AB is mandatory for businesses with turnover above INR 1 crore (INR 10 crore for predominantly digital transactions) and professionals with gross receipts above INR 50 lakh. Opting out of presumptive taxation (Sections 44AD/44ADA) below prescribed profit rates also triggers audit if total income exceeds the basic exemption limit. The CA files Form 3CA or 3CB with Form 3CD. Standard due date: 30 September of the assessment year. Penalty under Section 271B: 0.5% of turnover or INR 1,50,000, whichever is lower.</p>
                </div>
                <p>Tax audit under Section 44AB of the Income Tax Act 1961 is the mandatory examination and certification of a taxpayer's books of accounts by a practicing Chartered Accountant, required when turnover or gross receipts exceed prescribed limits. The CA certifies the books via Form 3CA or Form 3CB and submits a detailed statement of particulars in Form 3CD on the Income Tax e-filing portal. For FY 2025-26 (AY 2026-27), the standard due date is 30 September 2026.</p>
                <p>With CBDT's strengthened AIS and TIS data-matching framework, businesses reporting high turnover are increasingly subject to automated audit flagging. Patron Accounting's tax audit service covers end-to-end compliance: applicability assessment, books of accounts review, AIS reconciliation, Form 3CA/3CB + 3CD preparation, e-filing, and taxpayer approval.</p>
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
                <h2 class="section-title">What is Tax Audit Under Section 44AB?</h2>
                <div class="content-text what-is-definition">
                    
                    <p><strong>Tax audit under Section 44AB of the Income Tax Act 1961</strong> is an independent examination of a taxpayer's books of accounts, financial statements, and related records by a practicing Chartered Accountant to verify that income, expenses, deductions, and tax computations are accurately reported and comply with the Income Tax Act.</p>
<p>Unlike statutory audit (which examines financial statements under the Companies Act 2013 for all companies), tax audit is threshold-based - it becomes mandatory only when a business's turnover or a professional's gross receipts exceed prescribed limits. The tax audit report in Form 3CD covers 44-plus clauses addressing depreciation, disallowances, related party payments, TDS compliance, loans above threshold, MSME dues, and other income tax-specific disclosures.</p>
<p>The CA certifies the audit findings and submits a tax audit report in the prescribed forms on the <a href="https://www.incometax.gov.in/iec/foportal/" target="_blank" rel="noopener">Income Tax e-filing portal</a>.</p>

                </div>
                <div class="highlight-box" style="margin-top:20px;">
                    <p><strong>Key Terms for Tax Audit:</strong></p>
                    <p><strong>Form 3CA vs Form 3CB</strong> - Form 3CA is used when books are already audited under another law (e.g., Companies Act). Form 3CB is used when no prior audit under any other law exists (proprietorships, partnerships, professionals).</p>
<p><strong>Form 3CD</strong> - Mandatory 44-clause statement of particulars filed with both Form 3CA and 3CB. Covers depreciation, disallowances, TDS compliance, MSME dues, and related party transactions.</p>
<p><strong>Section 44AD/44ADA</strong> - Presumptive taxation schemes. If you opt out and declare income below prescribed rates while total income exceeds basic exemption, audit becomes mandatory.</p>
<p><strong>AIS/TIS</strong> - Annual Information Statement and Taxpayer Information Summary. CBDT's data matching tool that aggregates all financial transactions reported against a PAN.</p>
<p><strong>Section 271B</strong> - Penalty for non-compliance: 0.5% of turnover or INR 1,50,000 - whichever is lower. Waivable on 'reasonable cause' under Section 273B.</p>

                </div>
            </div>
            <div class="column-image">
                <div class="illustration-placeholder">
                    <div class="illustration-icon" style="max-width:240px;">
                        <svg viewBox="0 0 200 180" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <!-- Building / Tribunal -->
                            <rect x="35" y="20" width="130" height="130" rx="8" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/>
<!-- Tax document -->
<rect x="50" y="35" width="65" height="80" rx="4" fill="#FFF" stroke="#14365F" stroke-width="1"/>
<line x1="58" y1="48" x2="107" y2="48" stroke="#F5A623" stroke-width="2.5" stroke-linecap="round"/>
<line x1="58" y1="58" x2="100" y2="58" stroke="#14365F" stroke-width="1.5" opacity="0.2"/>
<line x1="58" y1="68" x2="95" y2="68" stroke="#14365F" stroke-width="1.5" opacity="0.2"/>
<line x1="58" y1="78" x2="100" y2="78" stroke="#14365F" stroke-width="1.5" opacity="0.2"/>
<line x1="58" y1="88" x2="90" y2="88" stroke="#14365F" stroke-width="1.5" opacity="0.2"/>
<line x1="58" y1="98" x2="95" y2="98" stroke="#F5A623" stroke-width="2" stroke-linecap="round"/>
<!-- Section 44AB badge -->
<rect x="120" y="45" width="40" height="22" rx="4" fill="#FFF3E0" stroke="#F5A623" stroke-width="1"/>
<text x="140" y="59" font-size="8" fill="#E8712C" font-weight="700" text-anchor="middle" font-family="Arial">44AB</text>
<!-- Form 3CD badge -->
<rect x="120" y="75" width="40" height="22" rx="4" fill="#E8F5E9" stroke="#25D366" stroke-width="1"/>
<text x="140" y="89" font-size="8" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">3CD</text>
<!-- Verified -->
<circle cx="152" cy="35" r="14" fill="#E8F5E9" stroke="#25D366" stroke-width="1.5"/>
<path d="M145 35l4 4 8-8" stroke="#25D366" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            <!-- Label -->
                            <text x="100" y="170" font-size="10" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial, sans-serif">Tax Audit</text>
                        </svg>
                    </div>
                    <div class="illustration-badge">
                        <span>Section 44AB</span>
                        <strong>Form 3CA/3CB + 3CD</strong>
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
            <h2 class="section-title">Who Must Get a Tax Audit Done - Section 44AB Applicability</h2>
            <div class="content-text">
                
                <p><strong>Category 1: Business</strong> - Turnover above INR 1 crore (or INR 10 crore if cash transactions are 5% or less of total) under Section 44AB(a). Presumptive opt-out under Section 44AD with income below 8%/6% and total income above basic exemption also triggers audit.</p>
<p><strong>Category 2: Profession</strong> - Gross receipts exceeding INR 50 lakh under Section 44AB(b). Applies to doctors, lawyers, architects, CAs, engineers, interior decorators, consultants, and other notified professions.</p>
<p><strong>Category 3: Not Required (Exemptions)</strong></p>
<ul>
<li>Taxpayers opting for presumptive taxation under Section 44AD (turnover up to INR 3 crore) declaring income at or above 8% (6% for digital) - no audit required</li>
<li>Professionals under Section 44ADA (receipts up to INR 75 lakh) declaring income at or above 50% of gross receipts - no audit required</li>
<li>Companies already undergoing statutory audit can file Form 3CA certifying the statutory audit was conducted</li>
</ul>

            </div>
            </div>
        </div>
    </div>
</section>

<!-- SECTION 5: OUR SERVICES -->
<section class="content-section" id="services-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Patron Accounting's Tax Audit Services</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Service</th><th>What We Do</th></tr></thead>
                    <tbody>
                        <tr><td>Tax Audit Applicability Assessment</td><td>We evaluate your business structure, turnover, receipt types, presumptive scheme usage, and income level to confirm whether Section 44AB audit is required</td></tr>
<tr><td>Books Review and Pre-Audit Preparation</td><td>Comprehensive ledger review, bank reconciliation, GST-books reconciliation, TDS verification, and AIS/TIS matching to resolve discrepancies before audit</td></tr>
<tr><td>Form 3CA / 3CB Preparation</td><td>CA-signed audit report in the appropriate form: Form 3CA for entities already audited under other laws; Form 3CB for entities without prior audit requirement</td></tr>
<tr><td>Form 3CD Preparation</td><td>Detailed 44+ clause preparation covering depreciation, Section 40A disallowances, related party transactions, MSME dues, loans, and TDS compliance</td></tr>
<tr><td>E-filing on Income Tax Portal</td><td>CA uploads signed Form 3CA/3CB + 3CD using Digital Signature Certificate; taxpayer portal approval coordinated before ITR filing</td></tr>
<tr><td>Coordination with ITR Filing</td><td>Seamless handoff from tax audit to ITR-3/ITR-5/ITR-6 filing; tax audit figures auto-populate into return</td></tr>

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
            <h2 class="section-title">7-Step Tax Audit Process Under Section 44AB</h2>
            <p class="section-subtitle" style="text-align:left;max-width:100%;">From applicability assessment to ITR filing. Only a practicing CA with valid Certificate of Practice under Section 288(2) is eligible to conduct tax audit. Form 3CD must reflect true and correct particulars. ITR for audited taxpayers is due 31 October of AY; audit report must be accepted before ITR filing.</p>
        </header>
        <div class="steps-container">
            <div class="step-card"><div class="step-content"><span class="step-badge">Step 1</span><h3 class="step-title">Applicability Check and Engagement</h3><p class="step-description">Patron Accounting confirms whether Section 44AB applies based on turnover, receipts, entity type, and presumptive scheme status. Engagement letter signed defining scope, forms applicable (3CA or 3CB), fee, and delivery timeline.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>44AB confirmed</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Engagement signed</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><circle cx="60" cy="42" r="28" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><path d="M48 42l8 8 16-16" stroke="#F5A623" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/><text x="60" y="80" font-size="8" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">44AB</text></svg></div><span class="illustration-label">Confirmed</span><span class="step-number-large">01</span></div></div></div>
<div class="step-card"><div class="step-content"><span class="step-badge">Step 2</span><h3 class="step-title">Books of Accounts Collection</h3><p class="step-description">Client provides trial balance, ledger, bank statements, GST returns, TDS workings, invoices, loan details, and prior year audit report/ITR. Patron Accounting issues a standardized checklist.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Documents collected</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Checklist complete</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="15" y="10" width="90" height="65" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><line x1="30" y1="28" x2="90" y2="28" stroke="#F5A623" stroke-width="3" stroke-linecap="round"/><line x1="30" y1="40" x2="80" y2="40" stroke="#14365F" stroke-width="2" opacity="0.3"/><line x1="30" y1="52" x2="70" y2="52" stroke="#14365F" stroke-width="2" opacity="0.3"/></svg></div><span class="illustration-label">Docs Ready</span><span class="step-number-large">02</span></div></div></div>
<div class="step-card"><div class="step-content"><span class="step-badge">Step 3</span><h3 class="step-title">AIS / TIS Reconciliation</h3><p class="step-description">Patron Accounting downloads and reviews the client's AIS from the Income Tax portal and reconciles against books. Unexplained discrepancies are addressed before audit to prevent post-filing scrutiny notices.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>AIS reconciled</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Discrepancies resolved</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="15" y="10" width="40" height="55" rx="4" fill="#FFF3E0" stroke="#F5A623" stroke-width="1"/><text x="35" y="40" font-size="8" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">AIS</text><rect x="65" y="10" width="40" height="55" rx="4" fill="#F0F4F8" stroke="#14365F" stroke-width="1"/><text x="85" y="40" font-size="8" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">Books</text><path d="M55 35l5 0" stroke="#25D366" stroke-width="2"/><path d="M55 45l5 0" stroke="#25D366" stroke-width="2"/><circle cx="60" cy="75" r="10" fill="#E8F5E9" stroke="#25D366" stroke-width="1.5"/><path d="M56 75l3 3 5-5" stroke="#25D366" stroke-width="2" stroke-linecap="round"/></svg></div><span class="illustration-label">Reconciled</span><span class="step-number-large">03</span></div></div></div>
<div class="step-card"><div class="step-content"><span class="step-badge">Step 4</span><h3 class="step-title">Form 3CD Clause-by-Clause Preparation</h3><p class="step-description">All 44+ clauses of Form 3CD prepared: depreciation per IT Act rates, Section 40A disallowances, related party transactions, TDS compliance, MSME outstanding dues, loans/advances above INR 20,000, and Chapter VI-A deductions.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>44 clauses prepared</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Compliance checked</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="15" y="10" width="90" height="70" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><line x1="30" y1="25" x2="90" y2="25" stroke="#F5A623" stroke-width="3" stroke-linecap="round"/><line x1="30" y1="35" x2="85" y2="35" stroke="#14365F" stroke-width="1.5" opacity="0.2"/><line x1="30" y1="43" x2="80" y2="43" stroke="#14365F" stroke-width="1.5" opacity="0.2"/><line x1="30" y1="51" x2="85" y2="51" stroke="#14365F" stroke-width="1.5" opacity="0.2"/><line x1="30" y1="59" x2="75" y2="59" stroke="#14365F" stroke-width="1.5" opacity="0.2"/><line x1="30" y1="67" x2="80" y2="67" stroke="#F5A623" stroke-width="2" stroke-linecap="round"/><text x="97" y="72" font-size="7" fill="#E8712C" font-weight="700" font-family="Arial">3CD</text></svg></div><span class="illustration-label">3CD Ready</span><span class="step-number-large">04</span></div></div></div>
<div class="step-card"><div class="step-content"><span class="step-badge">Step 5</span><h3 class="step-title">Draft Form 3CA/3CB and 3CD Review</h3><p class="step-description">Draft audit report and Form 3CD shared with client management for review. All observations and discrepancies discussed. Management representation obtained.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Draft reviewed</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Management sign-off</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="20" y="10" width="80" height="65" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><line x1="35" y1="28" x2="85" y2="28" stroke="#F5A623" stroke-width="3" stroke-linecap="round"/><line x1="35" y1="40" x2="75" y2="40" stroke="#14365F" stroke-width="2" opacity="0.3"/><path d="M62 55l5 5 10-10" stroke="#25D366" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"/></svg></div><span class="illustration-label">Approved</span><span class="step-number-large">05</span></div></div></div>
<div class="step-card"><div class="step-content"><span class="step-badge">Step 6</span><h3 class="step-title">CA Digital Sign-off and E-filing</h3><p class="step-description">Final Form 3CA/3CB + 3CD signed using CA's Digital Signature Certificate and uploaded to the Income Tax portal before 30 September (or extended date) of the assessment year.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>DSC signed</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>E-filed on portal</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="20" y="15" width="80" height="55" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><circle cx="60" cy="42" r="18" fill="#FFF3E0" stroke="#F5A623" stroke-width="1.5"/><text x="60" y="46" font-size="9" fill="#E8712C" font-weight="700" text-anchor="middle" font-family="Arial">DSC</text><rect x="35" y="72" width="50" height="14" rx="4" fill="#E8F5E9" stroke="#25D366" stroke-width="1"/><text x="60" y="82" font-size="7" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">E-FILED</text></svg></div><span class="illustration-label">E-Filed</span><span class="step-number-large">06</span></div></div></div>
<div class="step-card"><div class="step-content"><span class="step-badge">Step 7</span><h3 class="step-title">Taxpayer Approval and ITR Handoff</h3><p class="step-description">Client logs in to the Income Tax portal and accepts the tax audit report digitally. Once accepted, ITR-3/ITR-5/ITR-6 is filed before 31 October ITR due date.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Report accepted</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>ITR filed</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="20" y="15" width="80" height="55" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><circle cx="60" cy="42" r="15" fill="#E8F5E9" stroke="#25D366" stroke-width="1.5"/><path d="M53 42l5 5 10-10" stroke="#25D366" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"/><text x="60" y="80" font-size="8" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">ITR FILED</text></svg></div><span class="illustration-label">Complete</span><span class="step-number-large">07</span></div></div></div>


        </div>
    </div>
</section>

<!-- SECTION 8: DOCUMENTS REQUIRED -->
<section class="content-section" id="documents-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Documents Required for Tax Audit</h2>
            <div class="content-text">
                
                <div class="table-responsive-wrapper"><table><thead><tr><th>Document</th><th>Purpose</th></tr></thead><tbody>
<tr><td>Trial balance, ledger, journals</td><td>Audited or CA-prepared books for the financial year</td></tr>
<tr><td>Bank statements (all accounts) + reconciliation</td><td>Bank transaction verification and reconciliation</td></tr>
<tr><td>GST returns: GSTR-1, GSTR-3B, GSTR-9</td><td>Turnover reconciliation with books; Form 3CD Clause 44 GST disclosure</td></tr>
<tr><td>TDS challans and returns (24Q, 26Q, 27Q, 27EQ)</td><td>TDS compliance verification for Section 40(a)(ia) disallowance check</td></tr>
<tr><td>Prior year ITR + tax audit report</td><td>Continuity verification and brought-forward losses</td></tr>
<tr><td>Fixed asset register + depreciation schedule</td><td>Depreciation per Companies Act and Income Tax Act rates</td></tr>
<tr><td>Loan agreements (all borrowings/lendings above INR 20,000)</td><td>Form 3CD disclosure requirements for cash transactions</td></tr>
<tr><td>Related party transaction details</td><td>Section 40A disallowance assessment</td></tr>
<tr><td>Partnership deed / LLP agreement / MOA</td><td>Entity structure verification</td></tr>
<tr><td>MSME vendor registration details</td><td>MSME outstanding dues disclosure in Form 3CD</td></tr>
<tr><td>Income Tax portal credentials</td><td>AIS review and report upload</td></tr>
</tbody></table></div>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 9: CHALLENGES -->
<section class="content-section" id="challenges-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">4 Common Tax Audit Challenges and How We Solve Them</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Challenge</th><th>Impact</th><th>How Patron Accounting Solves It</th></tr></thead>
                    <tbody>
                        <tr><td>AIS shows higher turnover than books (GST mismatch / credit note issues)</td><td>Post-filing scrutiny notices</td><td>Pre-audit AIS reconciliation identifies every discrepancy; client advised on corrections or Form 3CD disclosure before filing</td></tr>
<tr><td>Last-minute books not ready; turnover crosses threshold unexpectedly</td><td>Risk of missing 30 September deadline</td><td>Emergency books-cleanup service (ledger posting, reconciliation) before audit; timeline managed to meet deadline</td></tr>
<tr><td>Presumptive taxation opt-out: unclear whether Section 44AB is triggered</td><td>Risk of incorrect compliance decision</td><td>Detailed applicability analysis: total income test against basic exemption; presumptive rate check; clear recommendation letter</td></tr>
<tr><td>Form 3CD errors leading to revised report and ITR delays</td><td>Portal congestion near deadline</td><td>Clause-by-clause Form 3CD checklist; draft shared 2 weeks before due date to allow revision time</td></tr>

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
            <h2 class="section-title">Tax Audit Fees in India 2026</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Fee Component</th><th>Amount</th></tr></thead>
                    <tbody>
                        <tr><td>Sole proprietorship / individual professional</td><td>INR 10,000 - INR 20,000 (turnover up to INR 1 crore)</td></tr>
<tr><td>Partnership firm</td><td>INR 20,000 - INR 40,000 (INR 1-5 crore turnover)</td></tr>
<tr><td>LLP (Section 44AB triggered)</td><td>INR 20,000 - INR 35,000 (INR 1-5 crore turnover)</td></tr>
<tr><td>Private limited company</td><td>INR 30,000 - INR 75,000 (INR 1-10 crore turnover)</td></tr>
<tr><td>Large company (INR 10 crore+)</td><td>Custom quote based on complexity</td></tr>
<tr><td>Presumptive opt-out case (44AD/44ADA)</td><td>INR 15,000 - INR 30,000</td></tr>
<tr><td>Tax audit + ITR filing (combined bundle)</td><td>Discounted bundle - ask for quote</td></tr>
<tr><td>Patron Accounting Professional Fees</td><td>Starting from INR 7,499 (Exl GST and Govt. Charges)</td></tr>

                    </tbody>
                </table>
                </div>
                <p style="margin-top:16px;font-size:13px;color:var(--text-muted);font-style:italic;">All fees and charges listed are indicative only and do not constitute a binding offer. Final amounts may vary depending on the volume of work and the complexity involved.</p>
                <p style="margin-top:16px;">Professional service charges for drafting, filing, and representation are separate from the statutory fees. The exact fee depends on the complexity of the case, disputed amount, and number of hearings required. Contact us for a detailed quote.</p>
                <p style="margin-top:16px;"><strong>Get a free Tax Audit consultation - <a href="tel:+919459456700">Call +91 945 945 6700</a> or <a href="https://wa.me/919459456700?text=Hello%2C%20I%20just%20visited%20your%20Tax%20Audit%20Service%20page.%20I%20would%20like%20to%20know%20more%20about%20it." target="_blank" rel="noopener">WhatsApp us</a>. No-obligation assessment.</strong></p>
            </div>
        </div>
    </div>
</section>

<!-- SECTION 11: TIMELINE -->
<section class="content-section" id="timeline-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">How Long Does Tax Audit Take?</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Stage</th><th>Estimated Timeline</th></tr></thead>
                    <tbody>
                        <tr><td>Small proprietorship / professional (clean books)</td><td>5-10 business days</td></tr>
<tr><td>Partnership firm or LLP (INR 1-5 crore)</td><td>2-3 weeks</td></tr>
<tr><td>Private limited company (coordinated with statutory audit)</td><td>2-4 weeks</td></tr>
<tr><td>Large entity / complex transactions / AIS discrepancies</td><td>4-8 weeks</td></tr>
<tr><td>Books cleanup + audit (combined)</td><td>Add 1-2 weeks for book preparation</td></tr>
<tr><td>AIS reconciliation (standalone)</td><td>3-5 business days</td></tr>
<tr><td>E-filing (Form 3CA/3CB + 3CD upload + taxpayer approval)</td><td>1-2 business days after sign-off</td></tr>

                    </tbody>
                </table>
                </div>
                <div class="highlight-box" style="margin-top:16px;">
                    
                    <p><strong>Important:</strong> Initiate the tax audit engagement by July of the assessment year to allow adequate buffer before the 30 September due date. Last-minute engagements initiated in September face compressed timelines and portal congestion risk.</p>

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
            <h2 class="section-title">Why Choose Patron Accounting for Tax Audit?</h2>
        </div>
        <div class="features-grid">
<article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2"/></svg></div><h3 class="feature-title">AIS-Integrated Audit Process</h3><p class="feature-text">Every tax audit includes AIS/TIS reconciliation to identify discrepancies before filing, reducing scrutiny notice risk post-ITR.</p></article>
<article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg></div><h3 class="feature-title">Avoid Section 271B Penalty</h3><p class="feature-text">Timely delivery ensures Form 3CA/3CB + 3CD is filed before 30 September. Penalty of 0.5% of turnover (max INR 1,50,000) is fully avoidable.</p></article>
<article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M4 4v5h.582m15.356 2A8.001 8.001 0 004.582 9m0 0H9m11 11v-5h-.581m0 0a8.003 8.003 0 01-15.357-2m15.357 2H15"/></svg></div><h3 class="feature-title">Cross-Law Coordination</h3><p class="feature-text">Handles both statutory audit (Companies Act) and tax audit (Income Tax Act) for companies, coordinating Form 3CA filing to avoid duplication.</p></article>
<article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M14 2H6a2 2 0 00-2 2v16a2 2 0 002 2h12a2 2 0 002-2V8z"/><path d="M14 2v6h6"/></svg></div><h3 class="feature-title">Form 3CD Clause Expertise</h3><p class="feature-text">Deep knowledge of all 44+ clauses ensures accurate disclosure of depreciation, related party payments, MSME dues, cash limits, and TDS disallowance risk.</p></article>
<article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/></svg></div><h3 class="feature-title">Presumptive Scheme Advisory</h3><p class="feature-text">Advises whether opting into or out of Sections 44AD/44ADA makes financial sense, factoring in audit cost vs tax savings.</p></article>
<article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><h3 class="feature-title">Nationwide Service</h3><p class="feature-text">CA teams in Pune, Mumbai, Delhi, and Bengaluru serving clients physically and remotely across India. Multi-year compliance history maintained.</p></article>
</div>
    </div>
</section>

<!-- SECTION 12A: SOCIAL PROOF -->
<section class="content-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Why Businesses Trust Patron Accounting</h2>
            <div class="content-text">
                
                <p>500+ Clients | 1,200+ Tax Audit Reports Filed | UDIN-Verified | 4 Offices: Pune, Mumbai, Delhi, Bengaluru | 4.8/5 Client Rating | 15+ Years Experience</p>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 13: SELF-FILING vs PROFESSIONAL COMPARISON -->
<section class="content-section" id="comparison-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Tax Audit vs Statutory Audit vs Internal Audit</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table class="table-comparison">
                    <thead><tr><th>Parameter</th><th>Tax Audit</th><th>Statutory Audit</th><th>Internal Audit</th></tr></thead>
                    <tbody>
                        <tr><td>Governing Law</td><td>Section 44AB, Income Tax Act 1961</td><td>Section 139, Companies Act 2013</td><td>Section 138, Companies Act 2013</td></tr>
<tr><td>Who Must Comply</td><td>Businesses above INR 1 Cr / Professionals above INR 50 lakh</td><td>ALL companies (no turnover limit)</td><td>Prescribed classes (turnover INR 200 Cr+)</td></tr>
<tr><td>Conducted By</td><td>Practicing CA only</td><td>Practicing CA or CA firm only</td><td>CA, CMA, or Board-approved professional</td></tr>
<tr><td>Reports To</td><td>Income Tax Department (online portal)</td><td>Shareholders at AGM</td><td>Board / Audit Committee</td></tr>
<tr><td>Forms</td><td>Form 3CA/3CB + Form 3CD</td><td>Auditor's Report per SA standards</td><td>Internal report (no prescribed form)</td></tr>
<tr><td>Due Date</td><td>30 September of AY (standard)</td><td>Before AGM (by 30 September for companies)</td><td>Quarterly / as Board directs</td></tr>
<tr><td>Penalty</td><td>Section 271B: 0.5% turnover or INR 1.5 lakh</td><td>Section 147: INR 25K to INR 5 lakh</td><td>Section 138/450 based</td></tr>

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
            <h2 class="section-title">Related Audit and Compliance Services</h2>
            <div class="content-text">
                
                <ul>
<li><a href="/statutory-audit">Statutory Audit Services</a> - mandatory under Section 139, Companies Act 2013 for all companies</li>
<li><a href="/internal-audit">Internal Audit Services</a> - mandatory under Section 138, Companies Act 2013 for prescribed classes</li>
<li><a href="/gst-audit">GST Audit Services</a> - GST returns vs books reconciliation for GSTR-9C</li>
<li><a href="/secretarial-audit">Secretarial Audit Services</a> - mandatory under Section 204, Companies Act 2013</li>
<li><a href="/private-limited-company-compliance">Private Limited Company Compliance</a> - year-round ROC compliance, annual filings</li>
</ul>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 15A: LEGAL FRAMEWORK -->
<section class="content-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Legal Framework - Tax Audit in India</h2>
            <div class="content-text">
                
                <div class="table-responsive-wrapper"><table><thead><tr><th>Provision</th><th>Reference</th><th>Key Requirement</th></tr></thead><tbody>
<tr><td>Mandatory tax audit for business</td><td>Section 44AB(a), Income Tax Act 1961</td><td>Turnover above INR 1 crore (standard) or above INR 10 crore (digital-heavy, cash 5% or less)</td></tr>
<tr><td>Mandatory tax audit for profession</td><td>Section 44AB(b), Income Tax Act 1961</td><td>Gross receipts above INR 50 lakh from notified profession</td></tr>
<tr><td>Presumptive opt-out triggers audit</td><td>Section 44AB(d)/(e), Income Tax Act 1961</td><td>Income declared below prescribed presumptive rate AND total income above basic exemption</td></tr>
<tr><td>Only CA can conduct tax audit</td><td>Section 288(2), Income Tax Act 1961</td><td>Only practicing CA with valid Certificate of Practice eligible</td></tr>
<tr><td>Audit report forms</td><td>Rule 6G, Income Tax Rules</td><td>Form 3CA (books already audited), Form 3CB (no prior audit), Form 3CD (mandatory statement)</td></tr>
<tr><td>Standard due date</td><td>Section 44AB Explanation</td><td>30 September of assessment year</td></tr>
<tr><td>Penalty for non-compliance</td><td>Section 271B, Income Tax Act 1961</td><td>0.5% of turnover/gross receipts OR INR 1,50,000 - whichever is LOWER</td></tr>
<tr><td>Reasonable cause waiver</td><td>Section 273B, Income Tax Act 1961</td><td>Penalty waivable if taxpayer proves reasonable cause</td></tr>
<tr><td>CBDT data matching</td><td>AIS / TIS Framework (CBDT)</td><td>All financial transactions matched against PAN; high-turnover non-filers auto-flagged</td></tr>
</tbody></table></div>
<p style="margin-top:16px;"><strong>External Authority Link:</strong> <a href="https://www.incometax.gov.in/iec/foportal/" target="_blank" rel="noopener">Income Tax India e-filing portal</a> - for Form 3CA/3CB/3CD filing and AIS access.</p>

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
                    <h2 class="faq-expanded__title">Frequently Asked Questions About Tax Audit</h2>
                    <p class="faq-expanded__lead">Get answers to the most common questions about tax audit under Section 44AB, turnover limits, due dates, penalties, forms, and presumptive taxation.</p>
                    @include('partials.bigin-form', [
                        'variant'  => 'compact',
                        'service'  => 'Tax Audit',
                    ])
                </aside>
                <div class="faq-expanded__list">
                    <div class="faq-expanded__item" id="faq-1">
                        <h3 class="faq-expanded__q">What is the turnover limit for tax audit for FY 2025-26 (AY 2026-27)?</h3>
                        <div class="faq-expanded__a"><p>For FY 2025-26, tax audit under Section 44AB is mandatory if business turnover exceeds INR 1 crore (or INR 10 crore for predominantly digital businesses with cash below 5%). For professions, gross receipts above INR 50 lakh trigger audit. Presumptive scheme opt-out below prescribed rates also triggers audit if total income exceeds basic exemption limit.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-2">
                        <h3 class="faq-expanded__q">What is the due date for tax audit report for FY 2025-26?</h3>
                        <div class="faq-expanded__a"><p>The standard due date for filing the tax audit report (Form 3CA/3CB + 3CD) for FY 2025-26 (AY 2026-27) is 30 September 2026. The ITR due date for Section 44AB audited taxpayers is 31 October 2026. Transfer pricing cases have extended deadlines. CBDT may issue extensions via circulars.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-3">
                        <h3 class="faq-expanded__q">What is the penalty for not getting tax audit done in India?</h3>
                        <div class="faq-expanded__a"><p>Under Section 271B, Income Tax Act 1961, penalty for failing to get tax audit done or filing the report late is the lower of: 0.5% of total turnover or gross receipts, or INR 1,50,000. No penalty if reasonable cause is proved under Section 273B.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-4">
                        <h3 class="faq-expanded__q">What is the difference between Form 3CA and Form 3CB in tax audit?</h3>
                        <div class="faq-expanded__a"><p>Form 3CA is used when the taxpayer's books are already audited under another law (e.g., Companies Act for companies). Form 3CB is used when books are not required to be audited under any other law, such as sole proprietorships, partnership firms, and individual professionals. Form 3CD (statement of particulars) is mandatory with both.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-5">
                        <h3 class="faq-expanded__q">Can I avoid tax audit by opting for presumptive taxation under Section 44AD?</h3>
                        <div class="faq-expanded__a"><p>Yes, if you declare income at or above 8% of turnover (6% for digital receipts) under Section 44AD, no tax audit is required. However, if you opt out and declare income below the prescribed rate, and total income exceeds basic exemption limit, tax audit becomes mandatory under Section 44AB regardless of turnover.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-6">
                        <h3 class="faq-expanded__q">Kya partnership firm ka tax audit zaroori hai? Section 44AB kitne turnover par lagta hai?</h3>
                        <div class="faq-expanded__a"><p>Haan, partnership firm ka tax audit Section 44AB ke under zaroori hai agar firm ka total turnover ek financial year mein INR 1 crore se zyada ho. Agar transactions mostly digital hain (cash 5% se kam), to limit INR 10 crore ho jati hai. Report Form 3CB + 3CD mein file hoti hai. 30 September tak file karni hoti hai.</p></div>
                    </div>
                </div>
            </div>


            <!-- Quick Answers -->
            <div class="highlight-box" style="margin-top:32px;">
                <p><strong>Quick Answers</strong></p>
                <p><strong>What is tax audit in India?</strong> Mandatory examination of books by a practicing CA under Section 44AB when business turnover exceeds INR 1 crore or professional receipts exceed INR 50 lakh.</p>
<p><strong>What is the tax audit limit for AY 2026-27?</strong> Business: INR 1 crore (or INR 10 crore for digital-heavy businesses). Professionals: INR 50 lakh gross receipts.</p>
<p><strong>What is the penalty?</strong> Section 271B: 0.5% of turnover or INR 1,50,000 - whichever is lower. Waivable under Section 273B.</p>
<p><strong>What forms are filed?</strong> Form 3CA (or 3CB) + Form 3CD. Form 3CE for non-residents.</p>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 18: URGENCY CTA -->
<section class="content-section" style="background: var(--orange-lighter) !important; border-left: 4px solid var(--orange);">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">30 September Deadline Approaching - Start Your Tax Audit Now</h2>
            <div class="content-text">
                
                <p><strong>Key compliance deadlines for FY 2025-26 (AY 2026-27):</strong></p>
<ul>
<li><strong>30 September 2026:</strong> Tax audit report (Form 3CA/3CB + 3CD) must be filed on the Income Tax portal</li>
<li><strong>31 October 2026:</strong> ITR due date for Section 44AB audited taxpayers - audit report must be accepted before ITR filing</li>
<li><strong>Section 271B penalty risk:</strong> 0.5% of turnover (max INR 1,50,000) for late or non-filing of audit report</li>
<li><strong>AIS mismatch risk:</strong> Unreconciled AIS may trigger Section 143(2) scrutiny notice post-ITR</li>
</ul>
<p style="margin-top:16px;"><strong>Engage Patron Accounting by July of the assessment year.</strong> <a href="tel:+919459456700">Call +91 945 945 6700</a> or <a href="https://wa.me/919459456700?text=Hello%2C%20I%20just%20visited%20your%20Tax%20Audit%20Service%20page.%20I%20would%20like%20to%20know%20more%20about%20it." target="_blank" rel="noopener">WhatsApp us</a> to get started.</p>

            </div>
        </div>
    </div>
</section>

<!-- CONCLUSION + CTA BLOCK (Dark) -->
<section class="content-section" style="background: var(--blue) !important;">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title" style="color:#FFFFFF !important;">Get Your Tax Audit Done by Expert CAs - Starting at INR 7,499</h2>
            <div class="content-text" style="text-align:left;">
                
                <p style="color:rgba(255,255,255,0.9);font-size:16px;line-height:1.7;">Tax audit under Section 44AB is a cornerstone of income tax compliance for India's businesses and professionals. With CBDT's increasingly sophisticated AIS/TIS data-matching framework and automated scrutiny, the cost of non-compliance far outweighs the cost of a professionally conducted audit.</p>
<p style="color:rgba(255,255,255,0.9);font-size:16px;line-height:1.7;">Patron Accounting's tax audit service is built around prevention: AIS reconciliation before filing, correct form selection (3CA vs 3CB), accurate Form 3CD preparation across all 44+ clauses, and timely e-filing before the 30 September deadline.</p>

            </div>
            <div style="display:flex;gap:14px;flex-wrap:wrap;margin-top:24px;">
                <a href="tel:+919459456700" style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:var(--orange);color:#fff;border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#128222; Call +91 945 945 6700</a>
                <a href="https://wa.me/919459456700?text=Hello%2C%20I%20just%20visited%20your%20Tax%20Audit%20Service%20page.%20I%20would%20like%20to%20know%20more%20about%20it." target="_blank" style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:#25D366;color:#fff;border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;" rel="noopener">&#128172; WhatsApp Us</a>
                <a href="mailto:sales@patronaccounting.com?subject=Enquiry%20for%20Tax%20Audit%20Service&body=Hello%2C%20I%20just%20visited%20your%20Tax%20Audit%20Service%20page.%20I%20would%20like%20to%20know%20more%20about%20it.%0A%0AThank%20you." style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:transparent;color:#fff;border:2px solid rgba(255,255,255,0.3);border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#9993;&#65039; Email Us</a>
            </div>
            <p style="color:rgba(255,255,255,0.7);font-size:13px;margin-top:16px;">Book a Free Consultation - No Obligation.</p>
        </div>
    </div>
</section>

<!-- GSTAT STATE BENCH CITY PAGES (32 Pages) -->
<section class="content-section" style="padding:48px 32px;background:var(--gray-50);">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title" style="text-align:center;margin-bottom:12px;">Tax Audit Services Across India</h2>
            <p style="text-align:center;color:var(--text-muted);font-size:15px;margin-bottom:40px;">Get your Section 44AB tax audit done by expert CAs at Patron Accounting offices across India.</p>
           
            <div class="pa-city-block" style="margin-bottom:40px;"><div class="pa-block-title">Tax Audit Service by City</div><div class="pa-block-sub">Expert Section 44AB compliance from Patron Accounting</div><div class="pa-city-grid">
<a href="/tax-audit/pune" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Pune</div><div class="pa-card-sub">Maharashtra</div></div></a>
<a href="/tax-audit/mumbai" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Mumbai</div><div class="pa-card-sub">Maharashtra</div></div></a>
<a href="/tax-audit/delhi" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Delhi</div><div class="pa-card-sub">NCR</div></div></a>
<a href="/tax-audit/gurugram" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Gurugram</div><div class="pa-card-sub">Haryana</div></div></a>
</div></div>
<div class="pa-city-block"><div class="pa-block-title">Related Services</div><div class="pa-block-sub">End-to-end audit and compliance services</div><div class="pa-cross-grid">
<a href="/statutory-audit" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Statutory Audit</div><div class="pa-card-sub">India</div></div></a>
<a href="/internal-audit" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Internal Audit</div><div class="pa-card-sub">India</div></div></a>
<a href="/gst-audit" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">GST Audit</div><div class="pa-card-sub">India</div></div></a>
<a href="/secretarial-audit" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Secretarial Audit</div><div class="pa-card-sub">India</div></div></a>
<a href="/private-limited-company-compliance" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Pvt Ltd Compliance</div><div class="pa-card-sub">India</div></div></a>
<a href="/income-tax-return" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Income Tax Return Filing</div><div class="pa-card-sub">India</div></div></a>
</div></div>
        </div>
    </div>
</section>

<!-- CONTENT FRESHNESS FOOTER -->
<section class="content-section" style="padding:32px;">
    <div class="content-container">
        <div class="text-content" style="font-size:13px;color:var(--text-muted);">
            <p><strong>Content Created:</strong> March 2026 &nbsp;|&nbsp; <strong>Last Updated:</strong> <span id="lastUpdatedFooter">20 April 2026</span> &nbsp;|&nbsp; <strong>Next Review:</strong> February 2027 &nbsp;|&nbsp; <strong>Reviewed By:</strong> CA &amp; CS Team, Patron Accounting LLP</p>
            <p>This page is reviewed annually after every Union Budget and CBDT circular for threshold revisions, due date extensions, Form 3CD clause additions, and new AIS/TIS enforcement guidelines. Freshness Tier 1 - Budget Review.</p>
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
