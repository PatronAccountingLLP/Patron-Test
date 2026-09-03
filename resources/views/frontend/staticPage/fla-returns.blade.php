
@extends('layouts.service-app')

<!-- External Dependencies (loaded by master layout in production) -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Barlow:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,400&family=DM+Sans:opsz,wght@9..40,400;9..40,500;9..40,600;9..40,700&display=swap" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

@section('meta')
    <title>FLA Return Filing with RBI - Process, Deadline & Documents</title>
    <meta name="description" content="File FLA Return by 15 July on RBI FLAIR portal. Mandatory for companies/LLPs with FDI or ODI. Late fee Rs 7,500. FEMA penalty up to 3x amount.">
    <link rel="canonical" href="/fla-returns">
    <meta name="robots" content="index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1">
    <meta property="og:title" content="FLA Return Filing with RBI - Process, Deadline & Documents">
    <meta property="og:description" content="File FLA Return by 15 July on RBI FLAIR portal. Mandatory for companies/LLPs with FDI or ODI. Late fee Rs 7,500. FEMA penalty up to 3x amount.">
    <meta property="og:url" content="/fla-returns">
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="Patron Accounting">
    <meta property="og:image" content="https://www.patronaccounting.com/images/og-default-square.png">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="1200">
    <meta property="og:image:type" content="image/png">
    <meta property="og:image:secure_url" content="https://www.patronaccounting.com/images/og-default-square.png">
    <meta property="og:image:alt" content="Patron Accounting - partner you can rely on">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="FLA Return Filing with RBI - Process, Deadline & Documents">
    <meta name="twitter:description" content="File FLA Return by 15 July on RBI FLAIR portal. Mandatory for companies/LLPs with FDI or ODI. Late fee Rs 7,500. FEMA penalty up to 3x amount.">
    <meta name="twitter:image" content="https://www.patronaccounting.com/images/og-default-square.png">
@endsection

@section('schema')
    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@graph": [
        {
          "@type": "Service",
          "name": "FLA Returns in India: Due Date, FLAIR Portal and Filing",
          "description": "File FLA Return by 15 July on RBI FLAIR portal. Mandatory for companies/LLPs with FDI or ODI. Late fee Rs 7,500. FEMA penalty up to 3x amount.",
          "url": "https://www.patronaccounting.com/fla-returns",
          "serviceType": "FLA Returns in India: Due Date, FLAIR Portal and Filing",
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
            "url": "https://www.patronaccounting.com/fla-returns",
            "priceSpecification": {
              "@type": "PriceSpecification",
              "minPrice": "5000",
              "maxPrice": "200000",
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
              "name": "FLA Returns in India: Due Date, FLAIR Portal and Filing",
              "item": "https://www.patronaccounting.com/fla-returns"
            }
          ]
        },
        {
          "@type": "FAQPage",
          "mainEntity": [
            {
              "@type": "Question",
              "name": "What is the FLA return?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "The FLA (Foreign Liabilities and Assets) Return is a mandatory annual filing with the Reserve Bank of India under FEMA, 1999. It reports the stock of foreign liabilities (FDI equity, ECBs, trade credits) and foreign assets (ODI, overseas loans) held by Indian entities as on 31 March. It is not a tax return - it is a statistical disclosure for RBI's international investment data. Filed on the FLAIR portal (flair.rbi.org.in)."
              }
            },
            {
              "@type": "Question",
              "name": "Who needs to file the FLA return?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "All Indian-resident entities (companies, LLPs, AIFs, partnership firms) that have received FDI and/or made ODI in any previous year(s) or the current year. Filing is required even if there were no new foreign investment transactions during the year - as long as there are outstanding foreign liabilities or assets on the balance sheet as on 31 March."
              }
            },
            {
              "@type": "Question",
              "name": "What is the due date for the FLA return?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "The standard due date is 15 July every year, reporting data as on 31 March. The RBI occasionally extends this deadline. If the return is filed with unaudited accounts, a revised return must be submitted by 30 September with audited figures if there are material changes."
              }
            },
            {
              "@type": "Question",
              "name": "What is the penalty for not filing the FLA return?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "Late filing attracts a Late Submission Fee (LSF) of Rs 7,500 per return. Non-filing is a FEMA contravention under Section 13(1): penalty up to 3 times the amount involved, or Rs 2,00,000 if the amount cannot be quantified, plus Rs 5,000 per day for continuing contravention. Compounding with the RBI regional office is required."
              }
            },
            {
              "@type": "Question",
              "name": "Can the FLA return be filed with unaudited accounts?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "Yes. RBI explicitly permits filing with unaudited or provisional financial figures to meet the 15 July deadline. If the audited accounts show material differences, a revised FLA Return must be filed by 30 September. Never miss the 15 July deadline waiting for the audit."
              }
            },
            {
              "@type": "Question",
              "name": "Do LLPs need to file the FLA return?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "Yes. LLPs that have received capital contribution or profit share from non-resident partners, or have made overseas investments, must file. LLPs need to obtain a dummy CIN from the RBI for FLAIR portal registration since the portal requires a CIN. Quick Answers Is FLA the same as FC-GPR? No. FC-GPR is event-based (filed within 30 days of FDI allotment). FLA is an annual position statement covering ALL foreign liabilities and assets as on 31 March. Received FDI 5 years ago, no new transactions. Still file? Yes. As long as foreign equity remains on the balance sheet, FLA must be filed every year. Can I file via email? No. Since FLAIR migration, all filings must be done online at flair.rbi.org.in. Email filing is discontinued. Any penalty waiver for first-time late filers? No automatic waiver. Compounding with RBI regional office is available. Early voluntary compounding generally results in lower fees."
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
                        Foreign Liabilities and Assets (FLA) Returns in India
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
                            <p class="mb-0 text-dark benefit-paragraph"><span>Mandatory For:</span> All Indian entities (companies, LLPs, AIFs, partnerships) with FDI received or ODI made - even if no new transactions during the year</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Due Date:</span> 15 July every year (reporting as on 31 March). Revised return by 30 September if filed with unaudited accounts.</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Penalties:</span> Late Submission Fee Rs 7,500 per return. FEMA penalty up to 3x amount involved or Rs 2,00,000 + Rs 5,000/day for continuing default.</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Filing Portal:</span> FLAIR (flair.rbi.org.in) - online only. DSC Class 3 mandatory. Email-based filing discontinued.</p>
                        </div>
                    </div>

                    <p class="mb-4 fw-bold" style="color: var(--blue); font-size: 15px;">Trusted by 10,000+ businesses across India for FEMA compliance, FLA filing, and foreign investment reporting</p>

                    <div class="hero-cta">
                        <a href="tel:+919459456700" class="btn-video text-decoration-none">
                            <span class="play-circle"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="width:14px;height:14px;color:#fff"><path d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/></svg></span>
                            Call +91 945 945 6700
                        </a>
                        <a href="mailto:sales@patronaccounting.com?subject=Enquiry%20for%20FLA%20Returns&body=Hello%2C%20I%20just%20visited%20your%20FLA%20Returns%20page.%20I%20would%20like%20to%20know%20more%20about%20it.%0A%0AThank%20you." class="btn-sample text-decoration-none">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="width:18px;height:18px;"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,12 2,6"/></svg>
                            Email Us
                        </a>
                        <a href="https://wa.me/919459456700?text=Hello%2C%20I%20just%20visited%20your%20FLA%20Returns%20page.%20I%20would%20like%20to%20know%20more%20about%20it." target="_blank" class="btn-sample text-decoration-none" rel="noopener">
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
                                            'service'  => 'FLA Returns',
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
    'ctaText'    => 'Expert FLA return filing - FLAIR portal registration, 5-section form preparation, DSC submission, and compounding for past non-filing under FEMA 1999.',
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
            <a class="toc-btn" href="#overview-section">Overview</a><a class="toc-btn" href="#what-section">What Is It</a><a class="toc-btn" href="#who-section">Who Must File</a><a class="toc-btn" href="#services-section">Our Services</a><a class="toc-btn" href="#procedure-section">6-Step Process</a><a class="toc-btn" href="#documents-section">Documents</a><a class="toc-btn" href="#challenges-section">Challenges</a><a class="toc-btn" href="#fees-section">Fees</a><a class="toc-btn" href="#timeline-section">Timeline</a><a class="toc-btn" href="#benefits-section">Penalties</a><a class="toc-btn" href="#comparison-section">5 Sections Explained</a><a class="toc-btn" href="#faq-section">FAQs</a>
        </div>
        <button class="toc-arrow right" id="tocRight">&#10095;</button>
    </div>
</div>

<!-- SECTION 2: OVERVIEW / INTRO + TL;DR -->
<section class="content-section" id="overview-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">FLA Returns - Complete Overview</h2>
            <div class="content-text">
                <div class="highlight-box" style="margin-bottom:20px;">
                    <p><strong>&#128204; TL;DR - FLA Returns Services at a Glance</strong></p>
                    <p>The FLA Return is a mandatory annual filing with the RBI under FEMA, 1999. It must be filed by every Indian entity with FDI or ODI - even if there were no new transactions during the year. Filed on the <a href="https://flair.rbi.org.in" target="_blank" rel="noopener">FLAIR portal</a> by 15 July. Revised return by 30 September if unaudited. Late fee Rs 7,500. FEMA penalty up to 3x amount involved.</p><div class="table-responsive-wrapper" style="margin-top:16px;"><table><thead><tr><th>Parameter</th><th>Details</th></tr></thead><tbody><tr><td>Governing Law</td><td>FEMA, 1999; A.P. (DIR Series) Circular No. 45/2011; Master Direction - Reporting under FEMA</td></tr><tr><td>Who Must File</td><td>Indian companies, LLPs, AIFs, partnerships with FDI received or ODI made (any year)</td></tr><tr><td>Reporting Date</td><td>As on 31 March of the financial year</td></tr><tr><td>Filing Due Date</td><td>15 July every year</td></tr><tr><td>Revised Return</td><td>By 30 September (if filed with unaudited accounts)</td></tr><tr><td>Filing Portal</td><td>FLAIR - flair.rbi.org.in (online only; DSC Class 3 required)</td></tr><tr><td>Late Submission Fee</td><td>Rs 7,500 per return</td></tr></tbody></table></div><p style="margin-top:0;</p>
                </div>
                <p>India attracted over USD 70 billion in FDI in FY 2024-25, and Indian companies invested over USD 15 billion abroad through ODI. Every entity involved in these cross-border capital flows must file the FLA Return - a statistical disclosure enabling RBI to compile India's International Investment Position (IIP) and Balance of Payments statistics. This is not a tax filing - it is a FEMA compliance filing.</p>
                <p>Yet its consequences for non-compliance are severe: FEMA penalties, compounding proceedings, disruptions to future foreign investment approvals, and reputational damage with foreign investors. Patron Accounting provides end-to-end FLA return filing from offices in Pune, Mumbai, Delhi, and Gurugram.</p>
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
                <h2 class="section-title">What Is the FLA Return?</h2>
                <div class="content-text what-is-definition">
                    
                    <p>The Foreign Liabilities and Assets (FLA) Return is an annual statistical return mandated by the Reserve Bank of India under FEMA, 1999 (notified vide A.P. (DIR Series) Circular No. 45 dated 15 March 2011). It collects information on the stock of foreign liabilities (inward investment) and foreign assets (outward investment) held by Indian-resident entities as on 31 March.</p><p>The FLA Return is not event-based (unlike FC-GPR or FC-TRS). It is an annual position statement - if your entity has ever received FDI or made ODI, and there are outstanding foreign liabilities or assets on the balance sheet as on 31 March, you must file. This applies even with zero new transactions during the year.</p><p>From FY 2024-25 onwards, all filings are done exclusively through the <a href="https://flair.rbi.org.in" target="_blank" rel="noopener">FLAIR portal</a>. The earlier email-based filing has been discontinued. A Class 3 DSC is mandatory.</p>

                </div>
                <div class="highlight-box" style="margin-top:20px;">
                    <p><strong>Key Terms for FLA Returns:</strong></p>
                    <p><strong>FLAIR Portal</strong> - Foreign Liabilities and Assets Information Reporting at <a href="https://flair.rbi.org.in" target="_blank" rel="noopener">flair.rbi.org.in</a>. RBI's web-based system for filing FLA Returns. DSC Class 3 required.</p><p><strong>FDI</strong> - Foreign Direct Investment by a non-resident in an Indian company. Includes equity shares, CCDs, CCPS, and share warrants.</p><p><strong>ODI</strong> - Overseas Direct Investment by an Indian entity in a foreign entity through JV or WOS abroad.</p><p><strong>Late Submission Fee (LSF)</strong> - Rs 7,500 per return levied by RBI for delayed filing beyond the 15 July deadline.</p>

                </div>
            </div>
            <div class="column-image">
                <div class="illustration-placeholder">
                    <div class="illustration-icon" style="max-width:240px;">
                        <svg viewBox="0 0 200 180" fill="none" xmlns="http://www.w3.org/2000/svg"><circle cx="100" cy="70" r="50" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><line x1="50" y1="70" x2="150" y2="70" stroke="#14365F" stroke-width="1" opacity="0.3"/><path d="M100 20a50 50 0 0120 50 50 50 0 01-20 50 50 50 0 01-20-50 50 50 0 0120-50z" fill="none" stroke="#14365F" stroke-width="1" opacity="0.3"/><path d="M75 50 L60 50" stroke="#25D366" stroke-width="3" stroke-linecap="round"/><path d="M65 45 L58 50 L65 55" stroke="#25D366" stroke-width="3" fill="none" stroke-linecap="round"/><text x="72" y="46" font-size="6" fill="#25D366" font-weight="700" text-anchor="middle" font-family="Arial">FDI</text><path d="M125 90 L140 90" stroke="#F5A623" stroke-width="3" stroke-linecap="round"/><path d="M135 85 L142 90 L135 95" stroke="#F5A623" stroke-width="3" fill="none" stroke-linecap="round"/><text x="128" y="86" font-size="6" fill="#F5A623" font-weight="700" text-anchor="middle" font-family="Arial">ODI</text><text x="100" y="67" font-size="12" fill="#14365F" font-weight="800" text-anchor="middle" font-family="Arial, sans-serif">FLA</text><text x="100" y="80" font-size="8" fill="#F5A623" font-weight="700" text-anchor="middle" font-family="Arial, sans-serif">RETURN</text><rect x="25" y="130" width="55" height="18" rx="4" fill="#FFF3E0" stroke="#F5A623" stroke-width="1"/><text x="52" y="142.5" font-size="7" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial, sans-serif">15 JULY</text><circle cx="165" cy="30" r="16" fill="#E8F5E9" stroke="#25D366" stroke-width="1.5"/><text x="165" y="34" font-size="6" fill="#25D366" font-weight="700" text-anchor="middle" font-family="Arial, sans-serif">RBI</text><text x="100" y="168" font-size="10" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial, sans-serif">FLA Return Filing</text></svg>
                    </div>
                    <div class="illustration-badge">
                        <span>FEMA 1999</span>
                        <strong>FLA Return Filing</strong>
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
            <h2 class="section-title">Who Must File the FLA Return?</h2>
            <div class="content-text">
                
                <ul><li><strong>Companies with FDI:</strong> Any Indian company (Pvt Ltd, Public Ltd, OPC) that has received Foreign Direct Investment in any previous year(s) or current year with outstanding foreign liabilities as on 31 March</li><li><strong>LLPs with Foreign Capital:</strong> LLPs that received capital contribution or profit share from non-resident partners. Need a dummy CIN from RBI for FLAIR registration.</li><li><strong>Companies with ODI:</strong> Indian entities that have made Overseas Direct Investment - JVs or WOS abroad. Outstanding foreign assets must be reported.</li><li><strong>AIFs (Alternative Investment Funds):</strong> SEBI-registered AIFs with foreign investors or overseas investment exposure</li><li><strong>Partnership Firms with FDI:</strong> Partnerships with outstanding FDI at year-end. Must obtain dummy CIN from RBI.</li><li><strong>Entities with ECBs:</strong> Companies with outstanding External Commercial Borrowings from non-resident lenders</li></ul><p><strong>Who does NOT need to file:</strong> Entities that have never received FDI or made ODI; entities where all non-resident shares have been transferred to residents; entities that only collected share application money (shares not yet allotted).</p>

            </div>
            </div>
        </div>
    </div>
</section>

<!-- SECTION 5: OUR SERVICES -->
<section class="content-section" id="services-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Patron Accounting FLA Return Filing Services</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Service</th><th>What We Do</th></tr></thead>
                    <tbody>
                        <tr><td>Applicability Assessment</td><td>Determining whether your entity must file based on FDI/ODI history, outstanding foreign liabilities/assets, and entity type</td></tr><tr><td>FLAIR Portal Registration</td><td>Registering the entity on <a href="https://flair.rbi.org.in" target="_blank" rel="noopener">flair.rbi.org.in</a> with DSC Class 3, Verification Letter, and Authority Letter</td></tr><tr><td>FLA Return Preparation and Filing</td><td>Compiling foreign liabilities (FDI equity, ECBs, trade credits) and foreign assets (ODI, overseas loans) from accounts, filling all 5 sections, and submitting on FLAIR</td></tr><tr><td>Revised FLA Return (Audited)</td><td>Filing revised return with audited accounts by 30 September if initial was filed with provisional/unaudited figures</td></tr><tr><td>Compounding Application</td><td>For entities that missed previous FLA deadlines - preparing and filing compounding application with RBI regional office to regularise the FEMA contravention</td></tr><tr><td>Related FEMA Reporting</td><td>FC-GPR (allotment), FC-TRS (share transfer), Annual Performance Report (ODI), and ECB returns coordination</td></tr>

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
            <h2 class="section-title">6-Step FLA Return Filing Process</h2>
            <p class="section-subtitle" style="text-align:left;max-width:100%;">Patron Accounting handles the complete FLA return filing process - from applicability assessment to FLAIR submission and revised return.</p>
        </header>
        <div class="steps-container">
            <div class="step-card"><div class="step-content"><span class="step-badge">Step 1</span><h3 class="step-title">Confirm Applicability</h3><p class="step-description">Check if the entity has any outstanding foreign liabilities (FDI equity, ECBs, trade credits) or foreign assets (ODI investments, loans to non-residents) as on 31 March. If yes, FLA filing is mandatory regardless of new transactions during the year.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> FDI/ODI checked</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Balance sheet reviewed</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="20" y="10" width="80" height="65" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><circle cx="55" cy="38" r="15" fill="none" stroke="#F5A623" stroke-width="2"/><line x1="66" y1="48" x2="78" y2="60" stroke="#F5A623" stroke-width="3" stroke-linecap="round"/><text x="60" y="68" font-size="6" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">FDI/ODI?</text></svg></div><span class="illustration-label">Applicable</span><span class="step-number-large">01</span></div></div></div>
<div class="step-card"><div class="step-content"><span class="step-badge">Step 2</span><h3 class="step-title">Register on FLAIR Portal</h3><p class="step-description">Visit flair.rbi.org.in. Register using CIN/LLPIN, PAN, and valid email. Upload Verification Letter and Authority Letter. A Class 3 DSC is mandatory. RBI will verify and activate the account. Start 4-6 weeks before deadline.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> FLAIR account created</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> DSC linked</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="15" y="10" width="90" height="65" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><rect x="15" y="10" width="90" height="16" rx="6" fill="#14365F"/><text x="60" y="22" font-size="7" fill="#fff" font-weight="700" text-anchor="middle" font-family="Arial">FLAIR</text><rect x="30" y="38" width="60" height="10" rx="3" fill="#FFF3E0" stroke="#F5A623" stroke-width="0.8"/><text x="60" y="46" font-size="5" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">REGISTER + DSC</text></svg></div><span class="illustration-label">Registered</span><span class="step-number-large">02</span></div></div></div>
<div class="step-card"><div class="step-content"><span class="step-badge">Step 3</span><h3 class="step-title">Gather Financial Data</h3><p class="step-description">From the balance sheet (audited or unaudited as of 31 March), compile: foreign equity capital, reserves attributable to foreign investors, ECB outstanding, trade credits from non-residents, ODI in JV/WOS (equity, loans, guarantees), other foreign assets.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> All data compiled</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Figures cross-verified</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="20" y="10" width="80" height="65" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><rect x="30" y="22" width="60" height="8" rx="2" fill="#E8F5E9" stroke="#25D366" stroke-width="0.8"/><rect x="30" y="34" width="60" height="8" rx="2" fill="#FFF3E0" stroke="#F5A623" stroke-width="0.8"/><rect x="30" y="46" width="60" height="8" rx="2" fill="#E8F5E9" stroke="#25D366" stroke-width="0.8"/><text x="60" y="29" font-size="5" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">FDI</text><text x="60" y="41" font-size="5" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">ODI</text><text x="60" y="53" font-size="5" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">ECB</text></svg></div><span class="illustration-label">Data Ready</span><span class="step-number-large">03</span></div></div></div>
<div class="step-card"><div class="step-content"><span class="step-badge">Step 4</span><h3 class="step-title">Fill FLA Return on FLAIR</h3><p class="step-description">Log in with DSC. Complete all 5 sections: (i) Contact details, (ii) Financial details, (iii) FDI details (foreign liabilities), (iv) ODI details (foreign assets), (v) Other foreign investments. Validate using portal auto-check.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> 5 sections completed</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Auto-check passed</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="15" y="5" width="90" height="75" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><rect x="15" y="5" width="90" height="16" rx="6" fill="#14365F"/><text x="60" y="17" font-size="7" fill="#fff" font-weight="700" text-anchor="middle" font-family="Arial">5 SECTIONS</text><line x1="28" y1="32" x2="92" y2="32" stroke="#F5A623" stroke-width="2" stroke-linecap="round"/><line x1="28" y1="44" x2="80" y2="44" stroke="#14365F" stroke-width="1.5" opacity="0.3"/><line x1="28" y1="54" x2="70" y2="54" stroke="#14365F" stroke-width="1.5" opacity="0.3"/></svg></div><span class="illustration-label">Form Ready</span><span class="step-number-large">04</span></div></div></div>
<div class="step-card"><div class="step-content"><span class="step-badge">Step 5</span><h3 class="step-title">Submit and Receive Acknowledgement</h3><p class="step-description">After validation, submit the FLA Return using DSC. The FLAIR portal generates an acknowledgement. Retain as proof of filing. Due date: 15 July every year.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Submitted with DSC</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Acknowledgement received</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="20" y="10" width="80" height="65" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><circle cx="60" cy="38" r="18" fill="#E8F5E9" stroke="#25D366" stroke-width="1.5"/><path d="M52 38l5 5 11-11" stroke="#25D366" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"/><text x="60" y="68" font-size="6" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">15 JULY</text></svg></div><span class="illustration-label">Filed</span><span class="step-number-large">05</span></div></div></div>
<div class="step-card"><div class="step-content"><span class="step-badge">Step 6</span><h3 class="step-title">File Revised Return (If Needed)</h3><p class="step-description">If the initial return was filed with unaudited figures and audited accounts show material changes, file a revised FLA Return on the FLAIR portal by 30 September of the same year.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Audited figures updated</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Revised return submitted</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="20" y="10" width="80" height="65" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><circle cx="60" cy="38" r="15" fill="#FFF3E0" stroke="#F5A623" stroke-width="1.5"/><text x="60" y="42" font-size="7" fill="#C05E10" font-weight="800" text-anchor="middle" font-family="Arial">REV</text><text x="60" y="68" font-size="6" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">30 SEPT</text></svg></div><span class="illustration-label">Complete</span><span class="step-number-large">06</span></div></div></div>

        </div>
    </div>
</section>

<!-- SECTION 8: DOCUMENTS REQUIRED -->
<section class="content-section" id="documents-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Documents and Data Required</h2>
            <div class="content-text">
                
                <ul><li><strong>Balance sheet as on 31 March</strong> (audited or unaudited)</li><li><strong>FDI details:</strong> Investor name, country, amount, percentage holding</li><li><strong>ECB details:</strong> Lender name, country, amount, terms</li><li><strong>ODI details:</strong> Subsidiary/JV name, country, equity invested, loans extended, guarantees</li><li><strong>Other foreign assets and liabilities:</strong> Trade credits, advances</li><li><strong>CIN/LLPIN and PAN</strong> of the entity</li><li><strong>Class 3 DSC</strong> of the authorised signatory</li><li><strong>Verification Letter and Authority Letter</strong> (for first-time FLAIR registration)</li><li><strong>FC-GPR/FC-TRS filing confirmations</strong> (for cross-reference)</li></ul>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 9: CHALLENGES -->
<section class="content-section" id="challenges-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Common FLA Filing Challenges and Solutions</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Challenge</th><th>Impact</th><th>How Patron Accounting Solves It</th></tr></thead>
                    <tbody>
                        <tr><td>Unaware of FLA Obligation</td><td>Many FDI-funded startups with angel/VC investment are unaware that FLA filing is mandatory even with no new transactions</td><td>Patron Accounting reviews the cap table and balance sheet to identify FLA applicability during our compliance audit</td></tr><tr><td>Audited Accounts Not Ready by 15 July</td><td>Many companies wait for the audit before filing, missing the 15 July deadline entirely</td><td>File with unaudited/provisional figures by 15 July (explicitly permitted by RBI). File revised return with audited figures by 30 September.</td></tr><tr><td>First-Time FLAIR Registration Delay</td><td>RBI takes time to verify Verification Letter and Authority Letter - first-time filers often start too late</td><td>We initiate FLAIR registration in April-May, giving 4-6 weeks buffer before the July deadline</td></tr><tr><td>Past FLA Returns Never Filed</td><td>FEMA contravention requiring compounding proceedings with RBI regional office - significant penalty exposure</td><td>We file all pending FLA returns on FLAIR and prepare compounding applications to regularise the violation with minimum penalty</td></tr>

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
            <h2 class="section-title">FLA Return Filing Fees</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Fee Component</th><th>Amount</th></tr></thead>
                    <tbody>
                        <tr><td>Government/RBI Fee for FLA Filing</td><td>Nil (no filing fee on FLAIR portal)</td></tr><tr><td>Late Submission Fee (LSF)</td><td>Rs 7,500 per return (levied by RBI)</td></tr><tr><td>FLAIR Portal Registration (First-Time)</td><td>Rs 2,999 - Rs 4,999</td></tr><tr><td>Patron Accounting - FLA Return Filing</td><td>Starting from INR 4,999 (Exl GST and Govt. Charges)</td></tr><tr><td>FLA + Revised Return</td><td>Rs 6,999 - Rs 12,999</td></tr><tr><td>Compounding Application (Past Non-Filing)</td><td>Rs 9,999 - Rs 24,999 (depending on years)</td></tr>

                    </tbody>
                </table>
                </div>
                <p style="margin-top:16px;font-size:13px;color:var(--text-muted);font-style:italic;">All fees and charges listed are indicative only and do not constitute a binding offer. Final amounts may vary depending on the volume of work and the complexity involved.</p>
                <p style="margin-top:16px;">Professional service charges for drafting, filing, and representation are separate from the statutory fees. The exact fee depends on the complexity of the case, disputed amount, and number of hearings required. Contact us for a detailed quote.</p>
                <p style="margin-top:16px;"><strong>Get a free FLA Returns consultation - <a href="tel:+919459456700">Call +91 945 945 6700</a> or <a href="https://wa.me/919459456700?text=Hello%2C%20I%20just%20visited%20your%20FLA%20Returns%20page.%20I%20would%20like%20to%20know%20more%20about%20it." target="_blank" rel="noopener">WhatsApp us</a>. No-obligation assessment.</strong></p>
            </div>
        </div>
    </div>
</section>

<!-- SECTION 11: TIMELINE -->
<section class="content-section" id="timeline-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">FLA Return Filing Timeline</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Stage</th><th>Estimated Timeline</th></tr></thead>
                    <tbody>
                        <tr><td>FLAIR Portal Registration (first-time)</td><td>2-4 weeks (RBI verification)</td></tr><tr><td>Data Compilation from Financial Statements</td><td>2-3 working days</td></tr><tr><td>FLA Return Preparation and Validation</td><td>1-2 working days</td></tr><tr><td>Filing on FLAIR Portal</td><td>Same day after data finalisation</td></tr><tr><td>Revised Return Filing</td><td>Same day after audited accounts available</td></tr><tr><td>Total (already registered on FLAIR)</td><td>3-7 working days</td></tr>

                    </tbody>
                </table>
                </div>
                <div class="highlight-box" style="margin-top:16px;">
                    
                    <p><strong>Critical:</strong> First-time filers should begin the FLAIR registration process at least 6 weeks before the 15 July deadline. The RBI takes 2-4 weeks to verify documents. Do NOT miss 15 July waiting for audited accounts - file with unaudited figures and revise by 30 September.</p>

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
            <h2 class="section-title">Penalties for Late or Non-Filing of FLA Return</h2>
        </div>
        <div class="features-grid" style="display:grid;grid-template-columns:repeat(3,1fr);gap:24px;"><article class="feature-card" style="background:var(--white);border:1px solid var(--gray-200);border-radius:var(--radius-lg);padding:28px;"><div style="width:48px;height:48px;background:var(--orange-light);border-radius:var(--radius-md);display:flex;align-items:center;justify-content:center;margin-bottom:16px;"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><line x1="12" y1="1" x2="12" y2="23"/><path d="M17 5H9.5a3.5 3.5 0 000 7h5a3.5 3.5 0 010 7H6"/></svg></div><h3 style="font-size:17px;font-weight:700;color:var(--blue);margin-bottom:8px;">Late Submission Fee: Rs 7,500</h3><p style="font-size:14px;color:var(--text-secondary);line-height:1.6;margin:0;">RBI levies Rs 7,500 per return for filing after 15 July. This is automatic and non-negotiable on the FLAIR portal.</p></article><article class="feature-card" style="background:var(--white);border:1px solid var(--gray-200);border-radius:var(--radius-lg);padding:28px;"><div style="width:48px;height:48px;background:var(--orange-light);border-radius:var(--radius-md);display:flex;align-items:center;justify-content:center;margin-bottom:16px;"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M10.29 3.86L1.82 18a2 2 0 001.71 3h16.94a2 2 0 001.71-3L13.71 3.86a2 2 0 00-3.42 0z"/><line x1="12" y1="9" x2="12" y2="13"/><line x1="12" y1="17" x2="12.01" y2="17"/></svg></div><h3 style="font-size:17px;font-weight:700;color:var(--blue);margin-bottom:8px;">FEMA Penalty: Up to 3x Amount</h3><p style="font-size:14px;color:var(--text-secondary);line-height:1.6;margin:0;">Non-filing is a FEMA contravention under Section 13(1) - penalty up to 3 times the amount involved in the contravention</p></article><article class="feature-card" style="background:var(--white);border:1px solid var(--gray-200);border-radius:var(--radius-lg);padding:28px;"><div style="width:48px;height:48px;background:var(--orange-light);border-radius:var(--radius-md);display:flex;align-items:center;justify-content:center;margin-bottom:16px;"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg></div><h3 style="font-size:17px;font-weight:700;color:var(--blue);margin-bottom:8px;">Rs 2,00,000 (Non-Quantifiable)</h3><p style="font-size:14px;color:var(--text-secondary);line-height:1.6;margin:0;">If the amount involved cannot be quantified, penalty is Rs 2,00,000 under Section 13(1) of FEMA 1999</p></article><article class="feature-card" style="background:var(--white);border:1px solid var(--gray-200);border-radius:var(--radius-lg);padding:28px;"><div style="width:48px;height:48px;background:var(--orange-light);border-radius:var(--radius-md);display:flex;align-items:center;justify-content:center;margin-bottom:16px;"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><path d="M12 6v6l4 2"/></svg></div><h3 style="font-size:17px;font-weight:700;color:var(--blue);margin-bottom:8px;">Rs 5,000/Day Continuing Default</h3><p style="font-size:14px;color:var(--text-secondary);line-height:1.6;margin:0;">If the contravention continues beyond the first day, Rs 5,000 per day additional penalty under FEMA Section 13(1)</p></article><article class="feature-card" style="background:var(--white);border:1px solid var(--gray-200);border-radius:var(--radius-lg);padding:28px;"><div style="width:48px;height:48px;background:var(--orange-light);border-radius:var(--radius-md);display:flex;align-items:center;justify-content:center;margin-bottom:16px;"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><line x1="4.93" y1="4.93" x2="19.07" y2="19.07"/></svg></div><h3 style="font-size:17px;font-weight:700;color:var(--blue);margin-bottom:8px;">FDI/ODI Disruptions</h3><p style="font-size:14px;color:var(--text-secondary);line-height:1.6;margin:0;">Non-compliance disrupts future FDI inflows, delays ODI approvals, triggers RBI regulatory scrutiny, and damages reputation with foreign investors</p></article></div>
    </div>
</section>

<!-- SECTION 12A: SOCIAL PROOF -->
<section class="content-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Why 10,000+ Businesses Trust Patron Accounting</h2>
            <div class="content-text">
                
                <p><strong>10,000+ businesses</strong> including FDI-funded companies, startups with foreign investors, and ODI-making enterprises trust Patron Accounting for FEMA compliance. With <strong>15+ years of experience</strong>, a <strong>4.9-star Google rating</strong>, and <strong>50,000+ documents filed</strong>, our CA and CS team delivers reliable RBI compliance.</p><p>Offices in Pune, Mumbai, Delhi, and Gurugram.</p>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 13: SELF-FILING vs PROFESSIONAL COMPARISON -->
<section class="content-section" id="comparison-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">FLA Return - 5 Sections Explained</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Section</th><th>Content</th><th>Key Data Points</th></tr></thead>
                    <tbody>
                        <tr><td>Section I</td><td>Contact Details</td><td>Contact person, designation, phone, email, account closing date (31 March)</td></tr><tr><td>Section II</td><td>Financial Details</td><td>Total paid-up capital, reserves, borrowings, total assets, turnover, profit after tax</td></tr><tr><td>Section III</td><td>FDI Details (Foreign Liabilities)</td><td>Country-wise and investor-wise FDI equity, preference shares, reserves attributable, inter-company loans</td></tr><tr><td>Section IV</td><td>ODI Details (Foreign Assets)</td><td>Country-wise and entity-wise ODI equity, loans extended, guarantees, retained earnings in JV/WOS</td></tr><tr><td>Section V</td><td>Other Foreign Investments</td><td>ADRs/GDRs, portfolio investments, trade credits, ECBs, other liabilities/assets</td></tr>

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
            <h2 class="section-title">Related FEMA and Compliance Services</h2>
            <div class="content-text">
                
                <ul><li><a href="/gst-returns">GST Returns</a> - Monthly/quarterly compliance filing</li><li><a href="/private-limited-company-registration">Pvt Ltd Registration</a> - Company incorporation for FDI</li><li><a href="/llp-incorporation">LLP Registration</a> - Limited Liability Partnership</li><li><a href="/company-registration-in-uae">Company in UAE</a> - ODI structure for Indian entities</li><li><a href="/iec-registration">IEC Registration</a> - For import/export operations</li></ul>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 15A: LEGAL FRAMEWORK -->
<section class="content-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Legal Framework for FLA Returns</h2>
            <div class="content-text">
                
                <div class="table-responsive-wrapper"><table><thead><tr><th>Provision</th><th>Key Requirement</th></tr></thead><tbody><tr><td>A.P. (DIR) Circular No. 45/2011</td><td>Introduced mandatory annual FLA Return filing for Indian entities with FDI/ODI</td></tr><tr><td>Master Direction - Reporting under FEMA</td><td>Specifies manner, form, and timeline. Updated periodically by RBI.</td></tr><tr><td>Section 13(1), FEMA 1999</td><td>Penalty: up to 3x amount involved, or Rs 2,00,000 if not quantifiable. Rs 5,000/day for continuing contravention.</td></tr><tr><td>Section 15, FEMA 1999</td><td>Power of RBI to compound contraventions - voluntary settlement with compounding fee</td></tr><tr><td><a href="https://flair.rbi.org.in" target="_blank" rel="noopener">FLAIR Portal</a></td><td>Online filing only. DSC Class 3 mandatory. Email-based filing discontinued.</td></tr><tr><td>Filing Dates</td><td>Initial: 15 July. Revised (if unaudited): 30 September. RBI may extend by circular.</td></tr></tbody></table></div><p><strong>Regulatory Authority:</strong> <a href="https://flair.rbi.org.in" target="_blank" rel="noopener">Reserve Bank of India</a> - Department of Statistics and Information Management.</p>

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
                    <h2 class="faq-expanded__title">Frequently Asked Questions - FLA Returns</h2>
                    <p class="faq-expanded__lead">Expert answers to common questions about FLA return filing, FLAIR portal, penalties, and FEMA compliance.</p>
                    @include('partials.bigin-form', [
                        'variant'  => 'compact',
                        'service'  => 'FLA Returns',
                    ])
                </aside>
                <div class="faq-expanded__list">
                    <div class="faq-expanded__item" id="faq-1">
                        <h3 class="faq-expanded__q">What is the FLA return?</h3>
                        <div class="faq-expanded__a"><p>The FLA (Foreign Liabilities and Assets) Return is a mandatory annual filing with the Reserve Bank of India under FEMA, 1999. It reports the stock of foreign liabilities (FDI equity, ECBs, trade credits) and foreign assets (ODI, overseas loans) held by Indian entities as on 31 March. It is not a tax return - it is a statistical disclosure for RBI's international investment data. Filed on the FLAIR portal (flair.rbi.org.in).</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-2">
                        <h3 class="faq-expanded__q">Who needs to file the FLA return?</h3>
                        <div class="faq-expanded__a"><p>All Indian-resident entities (companies, LLPs, AIFs, partnership firms) that have received FDI and/or made ODI in any previous year(s) or the current year. Filing is required even if there were no new foreign investment transactions during the year - as long as there are outstanding foreign liabilities or assets on the balance sheet as on 31 March.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-3">
                        <h3 class="faq-expanded__q">What is the due date for the FLA return?</h3>
                        <div class="faq-expanded__a"><p>The standard due date is 15 July every year, reporting data as on 31 March. The RBI occasionally extends this deadline. If the return is filed with unaudited accounts, a revised return must be submitted by 30 September with audited figures if there are material changes.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-4">
                        <h3 class="faq-expanded__q">What is the penalty for not filing the FLA return?</h3>
                        <div class="faq-expanded__a"><p>Late filing attracts a Late Submission Fee (LSF) of Rs 7,500 per return. Non-filing is a FEMA contravention under Section 13(1): penalty up to 3 times the amount involved, or Rs 2,00,000 if the amount cannot be quantified, plus Rs 5,000 per day for continuing contravention. Compounding with the RBI regional office is required.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-5">
                        <h3 class="faq-expanded__q">Can the FLA return be filed with unaudited accounts?</h3>
                        <div class="faq-expanded__a"><p>Yes. RBI explicitly permits filing with unaudited or provisional financial figures to meet the 15 July deadline. If the audited accounts show material differences, a revised FLA Return must be filed by 30 September. Never miss the 15 July deadline waiting for the audit.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-6">
                        <h3 class="faq-expanded__q">Do LLPs need to file the FLA return?</h3>
                        <div class="faq-expanded__a"><p>Yes. LLPs that have received capital contribution or profit share from non-resident partners, or have made overseas investments, must file. LLPs need to obtain a dummy CIN from the RBI for FLAIR portal registration since the portal requires a CIN.</p></div>
                    </div>
                </div>
            </div>


            <!-- Quick Answers -->
            <div class="highlight-box" style="margin-top:32px;">
                <p><strong>Quick Answers</strong></p>
                <p><strong>Is FLA the same as FC-GPR?</strong> No. FC-GPR is event-based (filed within 30 days of FDI allotment). FLA is an annual position statement covering ALL foreign liabilities and assets as on 31 March.</p><p><strong>Received FDI 5 years ago, no new transactions. Still file?</strong> Yes. As long as foreign equity remains on the balance sheet, FLA must be filed every year.</p><p><strong>Can I file via email?</strong> No. Since FLAIR migration, all filings must be done online at flair.rbi.org.in. Email filing is discontinued.</p><p><strong>Any penalty waiver for first-time late filers?</strong> No automatic waiver. Compounding with RBI regional office is available. Early voluntary compounding generally results in lower fees.</p>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 18: URGENCY CTA -->
<section class="content-section" style="background: var(--orange-lighter) !important; border-left: 4px solid var(--orange);">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">File Your FLA Return Before 15 July</h2>
            <div class="content-text">
                
                <p>Non-filing of FLA is a FEMA contravention with penalties up to 3x the amount involved. Beyond financial penalties, it can disrupt future FDI inflows, delay ODI approvals, and damage your reputation with foreign investors. The Rs 7,500 late fee is just the beginning - FEMA compounding proceedings are far more expensive and time-consuming.</p><p><strong>Start now.</strong> <a href="tel:+919459456700">Call +91 945 945 6700</a> or <a href="https://wa.me/919459456700?text=Hello%2C%20I%20just%20visited%20your%20FLA%20Returns%20page.%20I%20would%20like%20to%20know%20more%20about%20it." target="_blank" rel="noopener">WhatsApp us</a> for expert FLA return filing.</p>

            </div>
        </div>
    </div>
</section>

<!-- CONCLUSION + CTA BLOCK (Dark) -->
<section class="content-section" style="background: var(--blue) !important;">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title" style="color:#FFFFFF !important;">File Your FLA Return - Stay FEMA Compliant</h2>
            <div class="content-text" style="text-align:left;">
                
                <p style="color:rgba(255,255,255,0.9);font-size:15px;line-height:1.7;">The FLA Return is a critical annual FEMA compliance filing for every Indian entity with foreign investment exposure. Filed on the FLAIR portal by 15 July, it captures foreign liabilities and assets as on 31 March. Non-filing carries penalties up to 3x the amount involved - and disrupts future investment approvals.</p><p style="color:rgba(255,255,255,0.9);font-size:15px;line-height:1.7;">Patron Accounting provides end-to-end FLA Return filing including FLAIR registration, 5-section form preparation, DSC submission, revised return filing, and compounding for past non-filing. With offices in Pune, Mumbai, Delhi, and Gurugram, we ensure your FEMA compliance is complete.</p>

            </div>
            <div style="display:flex;gap:14px;flex-wrap:wrap;margin-top:24px;">
                <a href="tel:+919459456700" style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:var(--orange);color:#fff;border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#128222; Call +91 945 945 6700</a>
                <a href="https://wa.me/919459456700?text=Hello%2C%20I%20just%20visited%20your%20FLA%20Returns%20page.%20I%20would%20like%20to%20know%20more%20about%20it." target="_blank" style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:#25D366;color:#fff;border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;" rel="noopener">&#128172; WhatsApp Us</a>
                <a href="mailto:sales@patronaccounting.com?subject=Enquiry%20for%20FLA%20Return%20Filing&body=Hello%2C%20I%20just%20visited%20your%20FLA%20Returns%20page.%20I%20would%20like%20to%20know%20more%20about%20it.%0A%0AThank%20you." style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:transparent;color:#fff;border:2px solid rgba(255,255,255,0.3);border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#9993;&#65039; Email Us</a>
            </div>
            <p style="color:rgba(255,255,255,0.7);font-size:13px;margin-top:16px;">Book a Free Consultation - No Obligation.</p>
        </div>
    </div>
</section>

<!-- GSTAT STATE BENCH CITY PAGES (32 Pages) -->
<section class="content-section" style="padding:48px 32px;background:var(--gray-50);">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title" style="text-align:center;margin-bottom:12px;">FLA Return Filing Services Across India</h2>
            <p style="text-align:center;color:var(--text-muted);font-size:15px;margin-bottom:40px;">Patron Accounting files FLA returns for FDI-funded businesses in major cities.</p>
          
            <div class="pa-city-block" style="margin-bottom:40px;"><p class="pa-block-title">FLA Returns by City</p><p class="pa-block-sub">Expert FEMA compliance and FLAIR portal filing</p><div class="pa-city-grid"><a href="/fla-returns/pune" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Pune</div><div class="pa-card-sub">Maharashtra</div></div></a><a href="/fla-returns/mumbai" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Mumbai</div><div class="pa-card-sub">Maharashtra</div></div></a><a href="/fla-returns/delhi" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Delhi</div><div class="pa-card-sub">NCR</div></div></a><a href="/fla-returns/gurugram" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Gurugram</div><div class="pa-card-sub">Haryana</div></div></a></div></div><div class="pa-city-block"><p class="pa-block-title">Related FEMA and Business Services</p><p class="pa-block-sub">Comprehensive compliance</p><div class="pa-cross-grid"><a href="/gst-returns" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M14 2H6a2 2 0 00-2 2v16a2 2 0 002 2h12a2 2 0 002-2V8z"/><path d="M14 2v6h6M16 13H8M16 17H8"/></svg></div><div><div class="pa-card-title">GST Returns</div><div class="pa-card-sub">India</div></div></a><a href="/private-limited-company-registration" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M14 2H6a2 2 0 00-2 2v16a2 2 0 002 2h12a2 2 0 002-2V8z"/><path d="M14 2v6h6M16 13H8M16 17H8"/></svg></div><div><div class="pa-card-title">Pvt Ltd Registration</div><div class="pa-card-sub">India</div></div></a><a href="/llp-incorporation" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M14 2H6a2 2 0 00-2 2v16a2 2 0 002 2h12a2 2 0 002-2V8z"/><path d="M14 2v6h6M16 13H8M16 17H8"/></svg></div><div><div class="pa-card-title">LLP Registration</div><div class="pa-card-sub">India</div></div></a><a href="/company-registration-in-uae" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M14 2H6a2 2 0 00-2 2v16a2 2 0 002 2h12a2 2 0 002-2V8z"/><path d="M14 2v6h6M16 13H8M16 17H8"/></svg></div><div><div class="pa-card-title">Company in UAE</div><div class="pa-card-sub">ODI</div></div></a><a href="/iec-registration" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M14 2H6a2 2 0 00-2 2v16a2 2 0 002 2h12a2 2 0 002-2V8z"/><path d="M14 2v6h6M16 13H8M16 17H8"/></svg></div><div><div class="pa-card-title">IEC Registration</div><div class="pa-card-sub">Export</div></div></a><a href="/startup-registration" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M14 2H6a2 2 0 00-2 2v16a2 2 0 002 2h12a2 2 0 002-2V8z"/><path d="M14 2v6h6M16 13H8M16 17H8"/></svg></div><div><div class="pa-card-title">Startup Registration</div><div class="pa-card-sub">DPIIT</div></div></a></div></div>
        </div>
    </div>
</section>

<!-- CONTENT FRESHNESS FOOTER -->
<section class="content-section" style="padding:32px;">
    <div class="content-container">
        <div class="text-content" style="font-size:13px;color:var(--text-muted);">
            <p><strong>Content Created:</strong> 10 March 2026 &nbsp;|&nbsp; <strong>Last Updated:</strong> <span id="lastUpdatedFooter">10 March 2026</span> &nbsp;|&nbsp; <strong>Next Review:</strong> 10 September 2026 &nbsp;|&nbsp; <strong>Reviewed By:</strong> CA &amp; CS Team, Patron Accounting LLP</p>
            <p>This page is reviewed every 6 months - aligned to RBI circulars, FLAIR portal updates, FEMA amendments, and FLA deadline extensions. Next review: September 2026.</p>
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
