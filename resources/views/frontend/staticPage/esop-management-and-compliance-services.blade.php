

@extends('layouts.service-app')

<!-- External Dependencies (loaded by master layout in production) -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Barlow:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,400&family=DM+Sans:opsz,wght@9..40,400;9..40,500;9..40,600;9..40,700&display=swap" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

@section('meta')
    <title>ESOP Management & Compliance - Vesting, Tax & Cap Table</title>
    <meta name="description" content="End-to-end ESOP management and compliance in India - scheme design, SH-6 register, vesting, perquisite TDS, SEBI and MCA filings. From INR 7,499/yr.">
    <link rel="canonical" href="/esop-management-and-compliance-services">
    <meta name="robots" content="index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1">
    <meta property="og:title" content="ESOP Management & Compliance - Vesting, Tax & Cap Table">
    <meta property="og:description" content="End-to-end ESOP management and compliance in India - scheme design, SH-6 register, vesting, perquisite TDS, SEBI and MCA filings. From INR 7,499/yr.">
    <meta property="og:url" content="/esop-management-and-compliance-services">
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="Patron Accounting">
    <meta property="og:image" content="https://www.patronaccounting.com/images/og-default-square.png">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="1200">
    <meta property="og:image:type" content="image/png">
    <meta property="og:image:secure_url" content="https://www.patronaccounting.com/images/og-default-square.png">
    <meta property="og:image:alt" content="Patron Accounting - partner you can rely on">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="ESOP Management & Compliance - Vesting, Tax & Cap Table">
    <meta name="twitter:description" content="End-to-end ESOP management and compliance in India - scheme design, SH-6 register, vesting, perquisite TDS, SEBI and MCA filings. From INR 7,499/yr.">
    <meta name="twitter:image" content="https://www.patronaccounting.com/images/og-default-square.png">
@endsection

@section('schema')
    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@graph": [
        {
          "@type": "Service",
          "name": "ESOP Management and Compliance",
          "description": "End-to-end ESOP management and compliance in India - scheme design, SH-6 register, vesting, perquisite TDS, SEBI and MCA filings. From INR 7,499/yr.",
          "url": "https://www.patronaccounting.com/esop-management-and-compliance-services",
          "serviceType": "ESOP Management and Compliance",
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
            "url": "https://www.patronaccounting.com/esop-management-and-compliance-services",
            "price": "7499"
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
              "name": "ESOP Management and Compliance",
              "item": "https://www.patronaccounting.com/esop-management-and-compliance-services"
            }
          ]
        },
        {
          "@type": "FAQPage",
          "mainEntity": [
            {
              "@type": "Question",
              "name": "What is the minimum vesting period for ESOPs in India?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "Minimum 1 year between grant date and first vesting under Rule 12 of the SCD Rules 2014. This applies to both unlisted and listed companies. No maximum cap exists - typical schemes use a 1-year cliff followed by monthly vesting over 3 to 4 years. SEBI SBEB Regulations 2021 maintain the same 1-year minimum for listed entities."
              }
            },
            {
              "@type": "Question",
              "name": "Is a special resolution mandatory for ESOP issuance?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "Rule 12(3) of SCD Rules 2014 mandates a special resolution with 75% majority. While Section 62(1)(b) was amended to exempt private companies, the Rules have not been amended. Legal professionals recommend passing a special resolution to ensure full Rule 12 compliance - especially important during funding due diligence and IPO processes."
              }
            },
            {
              "@type": "Question",
              "name": "How is the ESOP perquisite tax calculated?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "Under Section 17(2)(vi), perquisite = (FMV on exercise date minus exercise price) x shares exercised. For listed companies, FMV is average of opening and closing price on the highest-volume exchange. For unlisted, FMV requires a Category I Merchant Banker valuation not older than 180 days. Taxed at slab rate with TDS under Section 192."
              }
            },
            {
              "@type": "Question",
              "name": "What is Form SH-6 and when must it be updated?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "Form SH-6 is the mandatory Register of Employee Stock Options under Rule 12. It records employee name, grant date, options granted, exercise price, vesting schedule, vested options, exercised options, and lapsed options. Must be updated immediately on every grant, vesting, exercise, forfeiture, or cancellation. Primary document for audits and due diligence."
              }
            },
            {
              "@type": "Question",
              "name": "Can promoters or founders receive ESOPs?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "Promoters and directors holding more than 10% of equity cannot receive ESOPs under Rule 12. DPIIT-recognized startups are exempt for 10 years from incorporation. For IPO-bound companies, SEBI Regulation 9A (inserted September 8, 2025) governs treatment of existing ESOPs for founders reclassified as promoters in the DRHP."
              }
            },
            {
              "@type": "Question",
              "name": "What is the TDS deferral for startup ESOP employees?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "Under Section 192(1C), employees of eligible startups (Section 80-IAC recognized) can defer perquisite TDS to earliest of: 48 months from allotment, date of share sale, or date of employment exit. This significantly reduces cash-flow burden on startup employees receiving ESOPs in lieu of higher cash compensation. Quick Answers Q: ESOP compliance kaise karein? ESOP scheme Companies Act Section 62(1)(b) ke under banta hai. Special resolution, Form SH-6 register, FMV valuation, TDS under Section 192, aur MGT-14 filing - sab CA aur CS team se karwana chahiye. Q: Who administers ESOPs? Compensation Committee (or Nomination and Remuneration Committee) designated by the Board under Section 178, Companies Act 2013. Q: Is GST applicable on ESOPs? Cost-to-cost reimbursement of ESOP cost to foreign parent is not a supply of services and not subject to GST per CBIC clarification. Q: When does capital gains tax apply? Capital gains tax applies when the employee sells the shares - not at exercise. LTCG 12.5% above Rs 1.25 lakh; STCG 20% for listed shares held under 12 months."
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
/* Amount column — right-align only on tables with .table-amount class */
        .table-amount td:last-child { color: var(--text-secondary); font-size: 14px; font-weight: 500; }
/* ============================================
           EXPERT ATTRIBUTION BOX (E-E-A-T) — Plan 3.1
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
           TOC NAVIGATION — Plan 2.2
           ============================================ */
        .toc-section {
            background: var(--gray-50); border-bottom: 1px solid var(--gray-200);
            padding: 20px 0; position: sticky; top: 100px; z-index: 50;
        }
/* Process Evidence Screenshot — Plan 3.2 */
        .process-screenshot-details { margin-top: 14px; }
</style>
<main>

<!-- BREADCRUMB -->
{{----}}

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
                        ESOP Management and Compliance Services in India
                    </h1>

                    <div class="expert-attribution-box">
                        <span class="eab-check"><svg width="16" height="16" viewBox="0 0 24 24" fill="currentColor"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg></span>
                        <span class="eab-title">Reviewed by CA and CS Team, Patron Accounting LLP</span>
                        <span class="eab-meta">
                            <span>ICAI & ICSI Registered</span><span class="eab-sep">|</span>
                            <span>15+ Years Experience</span><span class="eab-sep">|</span>
                            <span>Last Updated: <span id="lastUpdated">12 March 2026</span></span>
                        </span>
                        <a href="/authorhub/ca-sundram-gupta" class="eab-link">Verify Credentials &rarr;</a>
                    </div>

                    <div class="mb-4">
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Scheme Design and Approval:</span> End-to-end ESOP scheme drafting under Section 62(1)(b), board resolutions, special resolution, and MGT-14 filing within 30 days</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>SH-6 Register and Vesting:</span> Real-time Form SH-6 maintenance on every grant, vesting, exercise, and forfeiture event with digital audit trail</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Perquisite Tax and TDS:</span> Section 17(2)(vi) perquisite calculation, TDS under Section 192, startup deferral under 192(1C), Form 24Q and Form 16</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>200+ ESOP Schemes:</span> Starting from INR 7,499/yr - CA and CS team with 15+ years in corporate secretarial, equity compensation, and SEBI compliance</p>
                        </div>
                    </div>

                    <p class="mb-4 fw-bold" style="color: var(--blue); font-size: 15px;">200+ ESOP schemes designed and administered for startups and growth-stage companies across India</p>

                    <div class="hero-cta">
                        <a href="tel:+919459456700" class="btn-video text-decoration-none">
                            <span class="play-circle"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="width:14px;height:14px;color:#fff"><path d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/></svg></span>
                            Call +91 945 945 6700
                        </a>
                        <a href="mailto:sales@patronaccounting.com" class="btn-sample text-decoration-none">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="width:18px;height:18px;"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,12 2,6"/></svg>
                            Email Us
                        </a>
                        <a href="https://wa.me/919459456700?text=Hi%2C%20I%20need%20ESOP%20management%20and%20compliance%20services.%20Please%20share%20details." target="_blank" class="btn-sample text-decoration-none">
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
                                            'service'  => 'ESOP Management',
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
            <a href="#overview-section" class="toc-btn">Overview</a><a href="#what-section" class="toc-btn">What is ESOP Compliance</a><a href="#who-section" class="toc-btn">Who Needs It</a><a href="#services-section" class="toc-btn">Our Services</a><a href="#procedure-section" class="toc-btn">10-Step Process</a><a href="#documents-section" class="toc-btn">Documents</a><a href="#fees-section" class="toc-btn">Pricing</a><a href="#timeline-section" class="toc-btn">Deadlines</a><a href="#benefits-section" class="toc-btn">Why It Matters</a><a href="#comparison-section" class="toc-btn">DIY vs Professional</a><a href="#faq-section" class="toc-btn">FAQs</a>
        </div>
        <button class="toc-arrow right" id="tocRight">&#10095;</button>
    </div>
</div>

<!-- SECTION 2: OVERVIEW / INTRO + TL;DR -->
<section class="content-section" id="overview-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">ESOP Management and Compliance - End-to-End Administration by CA and CS Team</h2>
            <div class="content-text">
                <div class="highlight-box" style="margin-bottom:20px;">
                    <p><strong>&#128204; TL;DR - ESOP Management Services at a Glance</strong></p>
                    <p>ESOPs are legally regulated equity structures governed by Section 62(1)(b) of the Companies Act 2013, Rule 12 of the SCD Rules 2014, and SEBI SBEB Regulations 2021 (amended September 8, 2025) for listed entities. Non-compliance can trigger penalties, invalidate funding rounds, and create serious tax exposure. Patron Accounting provides end-to-end ESOP management - scheme design, SH-6 register, vesting administration, perquisite tax, TDS, and SEBI/MCA filings - starting from INR 7,499 per year with 200+ schemes administered.</p>
                </div>
                <p>Employee Stock Option Plans are a powerful tool for Indian startups and growing companies to attract and retain talent. However, ESOPs are not simply an HR benefit - they carry complex regulatory obligations spanning the Companies Act (Section 62, Rule 12 with 14 mandatory disclosures), Income Tax Act (Section 17(2)(vi) perquisite, Section 192 TDS, Section 192(1C) startup deferral), and SEBI SBEB Regulations 2021 for listed entities.</p>
                <p>Patron Accounting's integrated CA and CS team handles every aspect of ESOP lifecycle management: scheme drafting with Rule 12 compliant disclosures, board and shareholder approval documentation, Form SH-6 register maintained in real-time, FMV valuation coordination per Rule 11UA, exercise processing with PAS-3 filing, perquisite tax computation, TDS deposits, and SEBI/RBI regulatory filings for listed and cross-border ESOPs.</p>
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
                <h2 class="section-title">What is ESOP Management and Compliance?</h2>
                <div class="content-text what-is-definition">
                    
                    <p>ESOP management and compliance is the end-to-end administration of an Employee Stock Option Plan - from scheme design and board approval to vesting administration, exercise processing, tax withholding, and statutory filings - ensuring adherence to the Companies Act 2013, Income Tax Act 1961, and where applicable, SEBI Regulations 2021.</p><p>The ESOP lifecycle has four taxable stages: <strong>Grant</strong> (no tax), <strong>Vesting</strong> (no tax), <strong>Exercise</strong> (perquisite tax under Section 17(2)(vi) - FMV minus exercise price, taxed at slab rate with TDS under Section 192), and <strong>Sale</strong> (capital gains - LTCG 12.5% above Rs 1.25 lakh or STCG 20% for listed shares held under 12 months).</p><p>For DPIIT-recognized startups, <strong>Section 192(1C)</strong> allows TDS deferral to the earliest of 48 months from allotment, share sale, or employment exit - significantly reducing the cash-flow burden on employees.</p>

                </div>
                <div class="highlight-box" style="margin-top:20px;">
                    <p><strong>Key Terms for ESOP Management:</strong></p>
                    <p><strong>Grant:</strong> Company awards the right to purchase shares at a predetermined exercise price - no tax at this stage</p><p><strong>Vesting:</strong> Employee earns the right to exercise after completing service period - minimum 1-year cliff mandatory under Rule 12</p><p><strong>Exercise:</strong> Employee pays exercise price and receives shares - triggers perquisite tax under Section 17(2)(vi)</p><p><strong>Form SH-6:</strong> Mandatory Register of Employee Stock Options maintained throughout scheme lifecycle per Rule 12</p><p><strong>Rule 11UA Valuation:</strong> FMV methodology for unquoted shares; valuation certificate must not be older than 180 days from exercise date</p>

                </div>
            </div>
            <div class="column-image">
                <div class="illustration-placeholder">
                    <div class="illustration-icon" style="max-width:240px;">
                        <svg viewBox="0 0 200 180" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <!-- Building / Tribunal -->
                            <!-- Equity/Stock certificate icon -->
                            <rect x="35" y="35" width="130" height="85" rx="8" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/>
                            <!-- Certificate header -->
                            <rect x="35" y="35" width="130" height="22" rx="8 8 0 0" fill="#14365F"/>
                            <text x="100" y="50" font-size="9" fill="#fff" font-weight="700" text-anchor="middle" font-family="Arial">ESOP GRANT</text>
                            <!-- Vesting bars (timeline) -->
                            <rect x="50" y="68" width="20" height="12" rx="2" fill="#E8EAF6" stroke="#14365F" stroke-width="0.8"/>
                            <rect x="75" y="68" width="20" height="12" rx="2" fill="#FFF3E0" stroke="#F5A623" stroke-width="1"/>
                            <rect x="100" y="68" width="20" height="12" rx="2" fill="#FFF3E0" stroke="#F5A623" stroke-width="1"/>
                            <rect x="125" y="68" width="20" height="12" rx="2" fill="#E8F5E9" stroke="#25D366" stroke-width="1"/>
                            <text x="60" y="77" font-size="6" fill="#14365F" font-weight="600" text-anchor="middle" font-family="Arial">Y1</text>
                            <text x="85" y="77" font-size="6" fill="#14365F" font-weight="600" text-anchor="middle" font-family="Arial">Y2</text>
                            <text x="110" y="77" font-size="6" fill="#14365F" font-weight="600" text-anchor="middle" font-family="Arial">Y3</text>
                            <text x="135" y="77" font-size="6" fill="#14365F" font-weight="600" text-anchor="middle" font-family="Arial">Y4</text>
                            <!-- SH-6 label -->
                            <rect x="55" y="92" width="90" height="16" rx="3" fill="#E3F2FD" stroke="#14365F" stroke-width="0.8"/>
                            <text x="100" y="103" font-size="7" fill="#14365F" font-weight="600" text-anchor="middle" font-family="Arial">Form SH-6 Register</text>
                            <!-- Green badge -->
                            <circle cx="158" cy="32" r="14" fill="#E8F5E9" stroke="#25D366" stroke-width="1.5"/>
                            <path d="M152 32l4 4 8-8" stroke="#25D366" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            <!-- ESOP tag -->
                            <rect x="30" y="120" width="42" height="18" rx="4" fill="#FFF3E0" stroke="#F5A623" stroke-width="1"/>
                            <text x="51" y="132.5" font-size="8" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial, sans-serif">ESOP</text>
                            <!-- Label -->
                            <text x="100" y="170" font-size="10" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial, sans-serif">ESOP Management</text>
                        </svg>
                    </div>
                    <div class="illustration-badge">
                        <span>Equity Compensation</span>
                        <strong>ESOP + CA/CS Compliance</strong>
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
            <h2 class="section-title">Who Needs ESOP Compliance Services?</h2>
            <div class="content-text">
                
                <ul><li><strong>Private Limited and Unlisted Public Companies:</strong> Must comply with Rule 12, SCD Rules 2014 and Section 62(1)(b) for all ESOP issuances</li><li><strong>Listed Companies:</strong> Must additionally follow SEBI SBEB Regulations 2021 (amended September 8, 2025) including Regulation 9A for founder ESOP treatment</li><li><strong>DPIIT-Recognized Startups:</strong> Eligible for TDS deferral under Section 192(1C) - perquisite tax deferred up to 48 months from allotment</li><li><strong>Companies with Cross-Border Employees:</strong> Must comply with FEMA Non-debt Instruments Rules 2019 and RBI FIRMS portal reporting for non-resident ESOP holders</li><li><strong>IPO-Bound Companies:</strong> Pre-IPO ESOP schemes must be SEBI SBEB compliant and ratified post-listing per Regulation 12</li><li><strong>Series A-C Funded Companies:</strong> Investor due diligence requires clean Form SH-6, correct valuations, and MGT-14 filings</li></ul><p><strong>Who CANNOT receive ESOPs:</strong> Promoters, independent directors, and directors holding more than 10% of equity - except DPIIT startups within 10 years of incorporation.</p>

            </div>
            </div>
        </div>
    </div>
</section>

<!-- SECTION 5: OUR SERVICES -->
<section class="content-section" id="services-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">ESOP Management Services by Patron Accounting</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Service</th><th>What We Do</th></tr></thead>
                    <tbody>
                        <tr><td>ESOP Scheme Design</td><td>Scheme document drafting, option pool sizing (10-15% of equity), vesting schedules, exercise price per Rule 11UA, good/bad leaver provisions</td></tr><tr><td>Board and Shareholder Approval</td><td>Board resolutions, Compensation Committee constitution, special resolution drafting with all 14 Rule 12 mandatory disclosures, MGT-14 filing within 30 days</td></tr><tr><td>Grant Administration and SH-6 Register</td><td>Individual grant letters, Form SH-6 real-time maintenance, vesting milestone tracking, forfeiture recording with digital audit trail</td></tr><tr><td>Exercise Processing and Cap Table</td><td>Eligibility verification, exercise payment collection, FMV valuation coordination (180-day rule), share allotment, PAS-3 filing within 30 days, cap table update</td></tr><tr><td>Perquisite Tax and TDS Compliance</td><td>Section 17(2)(vi) perquisite calculation, TDS under Section 192 at slab rate, startup deferral under 192(1C), Form 24Q quarterly, Form 16 issuance</td></tr><tr><td>SEBI/MCA/RBI Regulatory Filings</td><td>SEBI SBEB annual disclosures for listed companies, Regulation 9A compliance, RBI FIRMS portal for cross-border ESOPs, Annexure B filings</td></tr>

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
            <h2 class="section-title">ESOP Implementation - 7-Step Process</h2>
            <p class="section-subtitle" style="text-align:left;max-width:100%;">From AoA review to Form 16 issuance, every step managed by our integrated CA and CS team with 15+ years in equity compensation.</p>
        </header>
        <div class="steps-container">
            <div class="step-card"><div class="step-content"><span class="step-badge">Step 1</span><h3 class="step-title">AoA Review and Eligibility Check</h3><p class="step-description">Verify Articles of Association permit ESOP issuance. If not, amend AoA via EGM. Identify eligible employees per Rule 12(1) - permanent employees, whole-time directors (not independent directors), and employees of holding/subsidiary companies.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> AoA verified</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Eligibility confirmed</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><circle cx="60" cy="38" r="26" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><circle cx="60" cy="38" r="14" fill="none" stroke="#F5A623" stroke-width="2"/><line x1="70" y1="50" x2="82" y2="62" stroke="#F5A623" stroke-width="3" stroke-linecap="round"/></svg></div><span class="illustration-label">Ready to Proceed</span><span class="step-number-large">01</span></div></div></div>
<div class="step-card"><div class="step-content"><span class="step-badge">Step 2</span><h3 class="step-title">ESOP Scheme Drafting and Design</h3><p class="step-description">Comprehensive scheme document: option pool size (10-15% of equity), vesting schedule with mandatory 1-year cliff, exercise price per Rule 11UA valuation, exercise period, lock-in, good/bad leaver provisions, and lapse conditions.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Scheme drafted</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Pool size defined</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="15" y="8" width="90" height="64" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><line x1="28" y1="24" x2="92" y2="24" stroke="#F5A623" stroke-width="3" stroke-linecap="round"/><line x1="28" y1="38" x2="82" y2="38" stroke="#14365F" stroke-width="2" opacity="0.3"/><line x1="28" y1="50" x2="72" y2="50" stroke="#14365F" stroke-width="2" opacity="0.3"/><line x1="28" y1="62" x2="60" y2="62" stroke="#14365F" stroke-width="2" opacity="0.3"/></svg></div><span class="illustration-label">Vesting Designed</span><span class="step-number-large">02</span></div></div></div>
<div class="step-card"><div class="step-content"><span class="step-badge">Step 3</span><h3 class="step-title">Board and Shareholder Approval</h3><p class="step-description">Board resolution approving scheme. Compensation Committee constituted per Section 178. EGM/AGM notice 21 days in advance. Special resolution passed with 75% majority. All 14 Rule 12 mandatory disclosures included in explanatory statement.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Board approved</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Special resolution passed</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="20" y="10" width="80" height="58" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><rect x="20" y="10" width="80" height="16" rx="6 6 0 0" fill="#14365F"/><text x="60" y="21" font-size="7" fill="#fff" font-weight="700" text-anchor="middle" font-family="Arial">APPROVED</text><rect x="28" y="34" width="64" height="10" rx="2" fill="#E8F5E9" stroke="#25D366" stroke-width="1"/><rect x="28" y="50" width="64" height="8" rx="2" fill="#FFF3E0" stroke="#F5A623" stroke-width="1"/></svg></div><span class="illustration-label">Committee Formed</span><span class="step-number-large">03</span></div></div></div>
<div class="step-card"><div class="step-content"><span class="step-badge">Step 4</span><h3 class="step-title">MGT-14 Filing and Grant Issuance</h3><p class="step-description">MGT-14 filed with ROC within 30 days of special resolution. Individual grant letters issued to eligible employees. All details entered in Form SH-6 Register of Employee Stock Options.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> MGT-14 filed</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Grant letters issued</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="20" y="12" width="80" height="55" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><rect x="28" y="22" width="24" height="12" rx="2" fill="#FFF3E0" stroke="#F5A623" stroke-width="1"/><text x="40" y="31" font-size="6" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">MGT</text><rect x="58" y="22" width="24" height="12" rx="2" fill="#E8F5E9" stroke="#25D366" stroke-width="1"/><text x="70" y="31" font-size="6" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">SH-6</text><rect x="28" y="42" width="54" height="12" rx="2" fill="#E3F2FD" stroke="#14365F" stroke-width="1"/></svg></div><span class="illustration-label">SH-6 Updated</span><span class="step-number-large">04</span></div></div></div>
<div class="step-card"><div class="step-content"><span class="step-badge">Step 5</span><h3 class="step-title">Vesting Administration</h3><p class="step-description">Track vesting milestones per schedule. Notify employees of vested options. Record forfeitures in Form SH-6 immediately. Separate shareholder resolution for grants exceeding 1% of issued capital to any identified employee per Rule 12(6).</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Milestones tracked</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Forfeitures recorded</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><circle cx="60" cy="38" r="26" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><circle cx="60" cy="38" r="16" fill="none" stroke="#F5A623" stroke-width="2" stroke-dasharray="4 3"/><path d="M54 38l4 4 8-8" stroke="#25D366" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"/><rect x="30" y="76" width="60" height="6" rx="3" fill="#14365F" opacity="0.12"/></svg></div><span class="illustration-label">Vesting Managed</span><span class="step-number-large">05</span></div></div></div>
<div class="step-card"><div class="step-content"><span class="step-badge">Step 6</span><h3 class="step-title">Exercise Processing and Share Allotment</h3><p class="step-description">Receive exercise requests, verify eligibility, collect exercise price. Obtain FMV report (not older than 180 days for unlisted). Process share allotment, update cap table, file PAS-3 Return of Allotment within 30 days.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Shares allotted</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> PAS-3 filed</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="25" y="12" width="70" height="48" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><circle cx="60" cy="36" r="16" fill="#E8F5E9" stroke="#25D366" stroke-width="1.5"/><path d="M53 36l4 4 10-10" stroke="#25D366" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"/><rect x="35" y="70" width="50" height="12" rx="6" fill="#F5A623" opacity="0.8"/><text x="60" y="79" font-size="7" fill="#fff" font-weight="700" text-anchor="middle" font-family="Arial">ALLOTTED</text></svg></div><span class="illustration-label">Cap Table Updated</span><span class="step-number-large">06</span></div></div></div>
<div class="step-card"><div class="step-content"><span class="step-badge">Step 7</span><h3 class="step-title">Perquisite Tax and TDS Compliance</h3><p class="step-description">Calculate perquisite: (FMV on exercise date minus exercise price) x shares. Deduct TDS under Section 192 at slab rate. For DPIIT startups: apply Section 192(1C) deferral. Deposit TDS. File Form 24Q quarterly. Issue Form 16.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Perquisite computed</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> TDS deposited</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="20" y="10" width="80" height="58" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><rect x="30" y="24" width="14" height="34" rx="2" fill="#F5A623"/><rect x="50" y="18" width="14" height="40" rx="2" fill="#25D366"/><rect x="70" y="28" width="14" height="30" rx="2" fill="#14365F" opacity="0.4"/><rect x="30" y="76" width="60" height="6" rx="3" fill="#14365F" opacity="0.12"/></svg></div><span class="illustration-label">Form 16 Issued</span><span class="step-number-large">07</span></div></div></div>

        </div>
    </div>
</section>

<!-- SECTION 8: DOCUMENTS REQUIRED -->
<section class="content-section" id="documents-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Documents Required for ESOP Compliance</h2>
            <div class="content-text">
                
                <p>Provide the following to start your ESOP compliance engagement:</p><ul><li><strong>Certificate of Incorporation, MoA and AoA</strong> - To verify ESOP issuance permissions</li><li><strong>Latest Audited Financial Statements</strong> - For FMV valuation baseline</li><li><strong>Current Cap Table</strong> - Showing all existing shareholders and holdings</li><li><strong>Board Resolution Draft</strong> - For Compensation Committee constitution and scheme approval</li><li><strong>ESOP Scheme Document</strong> - If existing, or we draft from scratch with all Rule 12 disclosures</li><li><strong>Special Resolution and Explanatory Statement</strong> - For EGM/AGM notice</li><li><strong>Grant Letter Template</strong> - With employee-specific terms, or we create</li><li><strong>FMV Valuation Report</strong> - From Category I Registered Valuer (we coordinate)</li><li><strong>Employee PAN and Salary Details</strong> - For perquisite TDS computation</li><li><strong>Exercise Request Forms</strong> - And payment records for each exercise event</li></ul>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 9: CHALLENGES -->
<section class="content-section" id="challenges-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Common ESOP Compliance Challenges and How We Solve Them</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Challenge</th><th>Impact</th><th>How Patron Accounting Solves It</th></tr></thead>
                    <tbody>
                        <tr><td>Liquidity Crunch at Exercise</td><td>Perquisite TDS liability exceeds cash salary in unlisted companies</td><td>Sell-to-cover mechanisms, startup TDS deferral under Section 192(1C), exercise timing optimization</td></tr><tr><td>Stale or Missing SH-6 Register</td><td>Governance gaps discovered during due diligence or SEBI inspection</td><td>Real-time SH-6 updates on every event with digital audit trail of compensation committee approvals</td></tr><tr><td>Pre-IPO Scheme Not SEBI Compliant</td><td>Costly restructuring required when ESOP scheme drafted only under Companies Act</td><td>ESOP regulatory readiness audit, Regulation 12 ratification, Regulation 9A compliance (September 2025)</td></tr><tr><td>Cross-Border Reporting Missed</td><td>Late Submission Fees and FEMA compounding for missed RBI FIRMS filings</td><td>Residency status tracking, Annual Return Annexure B filing, semi-annual OPI filings within 60 days</td></tr><tr><td>Defective Special Resolution</td><td>Missing any of 14 mandatory Rule 12 disclosures can unwind entire scheme</td><td>100% Rule 12 compliant explanatory statement with all 14 mandatory items verified before filing</td></tr><tr><td>180-Day FMV Valuation Lapse</td><td>Stale valuation report used at exercise creates tax and regulatory exposure</td><td>Strictly tracked valuation calendar with fresh FMV report coordinated before each exercise event</td></tr>

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
            <h2 class="section-title">ESOP Compliance Service Fees 2026</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Fee Component</th><th>Amount</th></tr></thead>
                    <tbody>
                        <tr><td>Scheme Design and Approval (Scheme, resolutions, MGT-14, SH-6 setup)</td><td>Rs. 15,000 - Rs. 30,000</td></tr><tr><td>Grant Administration Annual (Letters, SH-6, vesting, forfeitures)</td><td>Rs. 12,000 - Rs. 25,000/year</td></tr><tr><td>Exercise Processing Per Event (FMV, cap table, PAS-3)</td><td>Rs. 8,000 - Rs. 20,000/event</td></tr><tr><td>Perquisite Tax and TDS (Calculation, 24Q, Form 16)</td><td>Rs. 5,000 - Rs. 15,000/cycle</td></tr><tr><td>SEBI SBEB Compliance - Listed (Annual disclosures, Reg 9A)</td><td>Custom pricing</td></tr><tr><td>Cross-Border ESOP - FEMA (RBI FIRMS, Annexure B, OPI)</td><td>Rs. 10,000 - Rs. 25,000/year</td></tr><tr><td>Patron Accounting Professional Fees</td><td>Starting from INR 7,499/yr (Exl GST and Govt. Charges)</td></tr>

                    </tbody>
                </table>
                </div>
                <p style="margin-top:16px;font-size:13px;color:var(--text-muted);font-style:italic;">All fees and charges listed are indicative only and do not constitute a binding offer. Final amounts may vary depending on the volume of work and the complexity involved.</p>
                <p style="margin-top:16px;">Professional service charges for drafting, filing, and representation are separate from the statutory fees. The exact fee depends on the complexity of the case, disputed amount, and number of hearings required. Contact us for a detailed quote.</p>
                <p style="margin-top:16px;"><strong>Get a free ESOP Management consultation - <a href="tel:+919459456700">Call +91 945 945 6700</a> or <a href="https://wa.me/919459456700?text=Hi%2C%20I%20need%20ESOP%20scheme%20design%20and%20compliance.%20Please%20share%20pricing." target="_blank">WhatsApp us</a>. No-obligation assessment.</strong></p>
            </div>
        </div>
    </div>
</section>

<!-- SECTION 11: TIMELINE -->
<section class="content-section" id="timeline-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">ESOP Compliance Deadlines You Cannot Miss</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Stage</th><th>Estimated Timeline</th></tr></thead>
                    <tbody>
                        <tr><td>MGT-14 Filing After Special Resolution</td><td>Within 30 days of passing SR</td></tr><tr><td>PAS-3 Return of Allotment After Exercise</td><td>Within 30 days of share allotment</td></tr><tr><td>TDS Deposit on Perquisite</td><td>Per standard payroll TDS due dates (7th of following month)</td></tr><tr><td>Form 24Q Quarterly TDS Return</td><td>31 July, 31 October, 31 January, 31 May</td></tr><tr><td>SEBI Annual Compliance Certificate (Listed)</td><td>Within 6 months of end of financial year</td></tr><tr><td>RBI Annexure B (Cross-Border ESOPs)</td><td>Per annual return cycle via AD bank</td></tr><tr><td>FMV Valuation Report Validity</td><td>Must not be older than 180 days from exercise date</td></tr>

                    </tbody>
                </table>
                </div>
                <div class="highlight-box" style="margin-top:16px;">
                    
                    <p><strong>Note:</strong> MGT-14 late filing attracts penalties under Section 450 Companies Act 2013 (up to Rs 10,000/day). PAS-3 late filing attracts ROC penalties. Missed TDS deposit attracts interest under Section 201 plus penalty. Defective special resolution missing any of 14 Rule 12 mandatory items can unwind the entire ESOP scheme.</p>

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
            <h2 class="section-title">Why Professional ESOP Management Matters</h2>
        </div>
        <div class="features-grid"><article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/></svg></div><h3>Regulatory Precision</h3><p>Rule 12 mandates 14 specific disclosures in the explanatory statement. Missing any one creates a defective resolution that can unwind the entire ESOP scheme</p></article><article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><h3>Tax Optimization</h3><p>Correct FMV valuation timing, structured startup TDS deferral under Section 192(1C), and proper ITR disclosure guidance for employees</p></article><article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M13 10V3L4 14h7v7l9-11h-7z"/></svg></div><h3>Investor Due Diligence Ready</h3><p>Clean Form SH-6, correct valuation reports, and MGT-14 filings significantly accelerate deal timelines for VC and PE funding rounds</p></article><article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"/></svg></div><h3>IPO Alignment</h3><p>SEBI requires pre-IPO schemes to be SBEB 2021 compliant. Early alignment including Regulation 9A (September 2025) avoids expensive restructuring</p></article><article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0z"/></svg></div><h3>Employee Trust</h3><p>Accurate, timely grant letters and transparent vesting tracking build employee confidence in the equity compensation program</p></article><article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M3 15a4 4 0 004 4h9a5 5 0 10-.1-9.999 5.002 5.002 0 10-9.78 2.096A4.001 4.001 0 003 15z"/></svg></div><h3>Cross-Border Compliance</h3><p>FEMA Non-debt Instruments Rules, RBI FIRMS portal, Annexure B filings for companies with non-resident ESOP holders managed proactively</p></article></div>
    </div>
</section>

<!-- SECTION 12A: SOCIAL PROOF -->
<section class="content-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">200+ ESOP Schemes Designed and Administered</h2>
            <div class="content-text">
                
                <p>Patron Accounting has designed and administered 200+ ESOP schemes for DPIIT-recognized startups, Series A-C funded companies, and listed entities. Our integrated CA and CS team brings <strong>15+ years</strong> in corporate secretarial, equity compensation, and tax advisory.</p><p>Offices in Pune, Mumbai, Bangalore, and Delhi NCR with 50+ CA and CS team members. Clients include SaaS, fintech, healthtech, and deep-tech companies across India.</p>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 13: SELF-FILING vs PROFESSIONAL COMPARISON -->
<section class="content-section" id="comparison-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">DIY ESOP Administration vs Professional Management</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Parameter</th><th>DIY / In-House</th><th>Patron Accounting</th></tr></thead>
                    <tbody>
                        <tr><td>Scheme Documentation</td><td>Risk of missing mandatory Rule 12 disclosures</td><td>100% Rule 12 compliant with all 14 items</td></tr><tr><td>SH-6 Register</td><td>Often incomplete or outdated</td><td>Real-time updates on every event</td></tr><tr><td>FMV Valuation Timing</td><td>180-day rule frequently missed</td><td>Strictly tracked per Rule 11UA</td></tr><tr><td>Perquisite TDS</td><td>Manual errors in FMV formula</td><td>Automated per-employee computation</td></tr><tr><td>MGT-14 and PAS-3</td><td>Often late, attracting penalties</td><td>Filed within statutory deadlines</td></tr><tr><td>SEBI SBEB (Listed)</td><td>High non-compliance risk</td><td>Full alignment including Reg 9A (2025)</td></tr><tr><td>Cross-Border FEMA</td><td>Frequently missed</td><td>FIRMS portal + Annexure B proactive</td></tr>

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
            <h2 class="section-title">Related Services for ESOP Clients</h2>
            <div class="content-text">
                
                <p>ESOP management connects with several corporate and tax services:</p><ul><li><a href="/private-limited-company-registration">Company Registration</a> - Board meetings, resolutions, and MCA filings for your company</li><li><a href="/startup-registration">Startup Registration and DPIIT</a> - DPIIT recognition to unlock Section 192(1C) TDS deferral</li><li><a href="/payroll-services">Payroll Services</a> - Integrated payroll including ESOP perquisite processing, Form 24Q, Form 16</li><li><a href="/income-tax-return">Income Tax Return Filing</a> - ITR-2/ITR-3 for employees with ESOP perquisites and capital gains</li><li><a href="/private-limited-company-compliance">Company Compliance</a> - Annual ROC filings, board meetings, and statutory audit for ESOP companies</li><li><a href="/statutory-audit">Statutory Audit</a> - Audit support including ESOP disclosure in financial statements</li></ul>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 15A: LEGAL FRAMEWORK -->
<section class="content-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Legal and Regulatory Framework for ESOPs in India</h2>
            <div class="content-text">
                
                <p>Key statutory provisions governing ESOP compliance:</p><ul><li><strong>Section 62(1)(b), Companies Act 2013:</strong> Permits issue of shares to employees under ESOP scheme subject to special resolution. Rule 12 of SCD Rules 2014 prescribes conditions including 1-year minimum vesting and 14 mandatory disclosures. <a href="https://www.mca.gov.in" target="_blank" rel="noopener">MCA Portal</a></li><li><strong>SEBI SBEB Regulations 2021:</strong> Governs listed company ESOP schemes. Regulation 9A (inserted September 8, 2025) addresses founder ESOPs during IPO. <a href="https://www.sebi.gov.in/legal/regulations/sep-2025/securities-and-exchange-board-of-india-share-based-employee-benefits-and-sweat-equity-regulations-2021-last-amended-on-september-8-2025-_96528.html" target="_blank" rel="noopener">SEBI SBEB Regulations</a></li><li><strong>Section 17(2)(vi), Income Tax Act 1961:</strong> ESOP perquisite = (FMV on exercise minus exercise price) x shares. Section 192 TDS at slab rate. Section 192(1C) deferral for startups. <a href="https://incometaxindia.gov.in" target="_blank" rel="noopener">Income Tax India</a></li><li><strong>Sections 111A and 112A:</strong> Capital gains on ESOP share sale - LTCG 12.5% above Rs 1.25 lakh, STCG 20% for listed shares held under 12 months</li><li><strong>FEMA Non-debt Instruments Rules 2019:</strong> RBI FIRMS portal reporting for non-resident ESOP holders; Annexure B filing via AD bank</li><li><strong>Section 450, Companies Act 2013:</strong> Penalty up to Rs 10,000 per day of continuing default for officers in default of Section 62 compliance</li></ul>

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
                    <h2 class="faq-expanded__title">Frequently Asked Questions - ESOP Management and Compliance</h2>
                    <p class="faq-expanded__lead">Answers to common questions about ESOP scheme design, vesting, perquisite tax, SH-6 register, and SEBI compliance for Indian companies.</p>
                    @include('partials.bigin-form', [
                        'variant'  => 'compact',
                        'service'  => 'ESOP Management',
                    ])
                </aside>
                <div class="faq-expanded__list">
                    <div class="faq-expanded__item" id="faq-1">
                        <h3 class="faq-expanded__q">What is the minimum vesting period for ESOPs in India?</h3>
                        <div class="faq-expanded__a"><p>Minimum 1 year between grant date and first vesting under Rule 12 of the SCD Rules 2014. This applies to both unlisted and listed companies. No maximum cap exists - typical schemes use a 1-year cliff followed by monthly vesting over 3 to 4 years. SEBI SBEB Regulations 2021 maintain the same 1-year minimum for listed entities.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-2">
                        <h3 class="faq-expanded__q">Is a special resolution mandatory for ESOP issuance?</h3>
                        <div class="faq-expanded__a"><p>Rule 12(3) of SCD Rules 2014 mandates a special resolution with 75% majority. While Section 62(1)(b) was amended to exempt private companies, the Rules have not been amended. Legal professionals recommend passing a special resolution to ensure full Rule 12 compliance - especially important during funding due diligence and IPO processes.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-3">
                        <h3 class="faq-expanded__q">How is the ESOP perquisite tax calculated?</h3>
                        <div class="faq-expanded__a"><p>Under Section 17(2)(vi), perquisite = (FMV on exercise date minus exercise price) x shares exercised. For listed companies, FMV is average of opening and closing price on the highest-volume exchange. For unlisted, FMV requires a Category I Merchant Banker valuation not older than 180 days. Taxed at slab rate with TDS under Section 192.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-4">
                        <h3 class="faq-expanded__q">What is Form SH-6 and when must it be updated?</h3>
                        <div class="faq-expanded__a"><p>Form SH-6 is the mandatory Register of Employee Stock Options under Rule 12. It records employee name, grant date, options granted, exercise price, vesting schedule, vested options, exercised options, and lapsed options. Must be updated immediately on every grant, vesting, exercise, forfeiture, or cancellation. Primary document for audits and due diligence.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-5">
                        <h3 class="faq-expanded__q">Can promoters or founders receive ESOPs?</h3>
                        <div class="faq-expanded__a"><p>Promoters and directors holding more than 10% of equity cannot receive ESOPs under Rule 12. DPIIT-recognized startups are exempt for 10 years from incorporation. For IPO-bound companies, SEBI Regulation 9A (inserted September 8, 2025) governs treatment of existing ESOPs for founders reclassified as promoters in the DRHP.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-6">
                        <h3 class="faq-expanded__q">What is the TDS deferral for startup ESOP employees?</h3>
                        <div class="faq-expanded__a"><p>Under Section 192(1C), employees of eligible startups (Section 80-IAC recognized) can defer perquisite TDS to earliest of: 48 months from allotment, date of share sale, or date of employment exit. This significantly reduces cash-flow burden on startup employees receiving ESOPs in lieu of higher cash compensation.</p></div>
                    </div>
                </div>
            </div>


            <!-- Quick Answers -->
            <div class="highlight-box" style="margin-top:32px;">
                <p><strong>Quick Answers</strong></p>
                <p><strong>Q: ESOP compliance kaise karein?</strong> ESOP scheme Companies Act Section 62(1)(b) ke under banta hai. Special resolution, Form SH-6 register, FMV valuation, TDS under Section 192, aur MGT-14 filing - sab CA aur CS team se karwana chahiye.</p><p><strong>Q: Who administers ESOPs?</strong> Compensation Committee (or Nomination and Remuneration Committee) designated by the Board under Section 178, Companies Act 2013.</p><p><strong>Q: Is GST applicable on ESOPs?</strong> Cost-to-cost reimbursement of ESOP cost to foreign parent is not a supply of services and not subject to GST per CBIC clarification.</p><p><strong>Q: When does capital gains tax apply?</strong> Capital gains tax applies when the employee sells the shares - not at exercise. LTCG 12.5% above Rs 1.25 lakh; STCG 20% for listed shares held under 12 months.</p>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 18: URGENCY CTA -->
<section class="content-section" style="background: var(--orange-lighter) !important; border-left: 4px solid var(--orange);">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">ESOP Non-Compliance Can Unwind Your Entire Scheme</h2>
            <div class="content-text">
                
                <p>A defective special resolution missing any of the 14 mandatory Rule 12 disclosures can invalidate your entire ESOP scheme. Stale SH-6 registers create governance red flags during funding rounds. Missing MGT-14 filing attracts penalties up to Rs 10,000 per day. And incorrect perquisite tax calculation creates direct liability for both the company and affected employees.</p><p><strong>Call +91 945 945 6700 or WhatsApp us for a free ESOP compliance assessment. We will review your existing scheme, identify gaps, and provide a clear remediation roadmap.</strong></p>

            </div>
        </div>
    </div>
</section>

<!-- CONCLUSION + CTA BLOCK (Dark) -->
<section class="content-section" style="background: var(--blue) !important;">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title" style="color:#FFFFFF !important;">Start Your ESOP Compliance with Patron Accounting</h2>
            <div class="content-text" style="text-align:left;">
                
                <p style="color:rgba(255,255,255,0.9);font-size:15px;line-height:1.7;">ESOPs are among the most powerful tools for attracting and retaining talent. But the regulatory framework spanning Section 62 of the Companies Act, Rule 12, SEBI SBEB Regulations 2021, and the Income Tax Act is complex and carries significant penalties for non-compliance.</p><p style="color:rgba(255,255,255,0.9);font-size:15px;line-height:1.7;">Patron Accounting's integrated CA and CS team provides end-to-end ESOP management - from scheme design to Form 16 issuance. Whether you are a DPIIT startup designing your first scheme or a listed company navigating Regulation 9A, we deliver the expertise and precision you need. Starting from INR 7,499 per year.</p>

            </div>
            <div style="display:flex;gap:14px;flex-wrap:wrap;margin-top:24px;">
                <a href="tel:+919459456700" style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:var(--orange);color:#fff;border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#128222; Call +91 945 945 6700</a>
                <a href="https://wa.me/919459456700?text=Hi%2C%20I%20need%20ESOP%20scheme%20design%20and%20compliance.%20Please%20share%20pricing." target="_blank" style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:#25D366;color:#fff;border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#128172; WhatsApp Us</a>
                <a href="mailto:sales@patronaccounting.com?subject=Enquiry%20for%20ESOP%20Management%20and%20Compliance&body=Hello%20Patron%20Accounting%20Team%2C%0A%0AI%20need%20ESOP%20management%20and%20compliance%20services.%0A%0APlease%20get%20in%20touch.%0A%0AThank%20you." style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:transparent;color:#fff;border:2px solid rgba(255,255,255,0.3);border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#9993;&#65039; Email Us</a>
            </div>
            <p style="color:rgba(255,255,255,0.7);font-size:13px;margin-top:16px;">Book a Free Consultation - No Obligation.</p>
        </div>
    </div>
</section>

<!-- GSTAT STATE BENCH CITY PAGES (32 Pages) -->
<section class="content-section" style="padding:48px 32px;background:var(--gray-50);">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title" style="text-align:center;margin-bottom:12px;">ESOP Management Services Across India</h2>
            <p style="text-align:center;color:var(--text-muted);font-size:15px;margin-bottom:40px;">CA and CS managed ESOP compliance for startups and companies in major Indian cities.</p>
         
            <div class="pa-city-block" style="margin-bottom:40px;"><div class="pa-city-grid"><a href="/esop-management-and-compliance-services/pune" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Pune</div><div class="pa-card-sub">Maharashtra</div></div></a><a href="/esop-management-and-compliance-services/mumbai" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Mumbai</div><div class="pa-card-sub">Maharashtra</div></div></a><a href="/esop-management-and-compliance-services/delhi" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Delhi</div><div class="pa-card-sub">NCR</div></div></a><a href="/esop-management-and-compliance-services/gurugram" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Gurugram</div><div class="pa-card-sub">Haryana</div></div></a></div></div><div class="pa-city-block"><div class="pa-block-title">Related Services</div><div class="pa-block-sub">End-to-end support for ESOP Management</div><div class="pa-cross-grid"><a href="/payroll-services" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Payroll Services</div><div class="pa-card-sub">India</div></div></a><a href="/private-limited-company-registration" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Private Limited Company Registration</div><div class="pa-card-sub">India</div></div></a><a href="/startup-registration" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Startup Registration</div><div class="pa-card-sub">India</div></div></a><a href="/income-tax-return" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Income Tax Return</div><div class="pa-card-sub">India</div></div></a><a href="/private-limited-company-compliance" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Private Limited Company Compliance</div><div class="pa-card-sub">India</div></div></a><a href="/statutory-audit" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Statutory Audit</div><div class="pa-card-sub">India</div></div></a></div></div>
        </div>
    </div>
</section>

<!-- CONTENT FRESHNESS FOOTER -->
<section class="content-section" style="padding:32px;">
    <div class="content-container">
        <div class="text-content" style="font-size:13px;color:var(--text-muted);">
            <p><strong>Content Created:</strong> 12 March 2026 &nbsp;|&nbsp; <strong>Last Updated:</strong> <span id="lastUpdatedFooter">12 March 2026</span> &nbsp;|&nbsp; <strong>Next Review:</strong> 12 June 2026 &nbsp;|&nbsp; <strong>Reviewed By:</strong> CA &amp; CS Team, Patron Accounting LLP</p>
            <p>This page is reviewed every 3 months due to HIGH regulatory update frequency. SEBI SBEB Regulations (last amended September 8, 2025) and Income Tax Act provisions verified on each review cycle.</p>
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
{{-- @endsection --}}

<!-- External JS Dependencies (loaded by master layout in production) -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
@endsection
