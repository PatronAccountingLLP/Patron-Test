
@extends('layouts.service-app')

<!-- External Dependencies (loaded by master layout in production) -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Barlow:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,400&family=DM+Sans:opsz,wght@9..40,400;9..40,500;9..40,600;9..40,700&display=swap" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

@section('meta')
    <title>Pvt Ltd Compliance Delhi NCR – AOC-4, MGT-7 &amp; Due Dates</title>
    <meta name="description" content="Pvt Ltd compliance in Delhi. AOC-4 + MGT-7. AGM by 30 Sept. Statutory audit. ITR-6. DIR-3 KYC. Rs 100/day no cap. Call +91 945 945 6700.">
    <link rel="canonical" href="/private-limited-company-compliance/delhi">
    <meta name="robots" content="index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1">
    <meta property="og:title" content="Pvt Ltd Compliance Delhi NCR – AOC-4, MGT-7 &amp; Due Dates">
    <meta property="og:description" content="Pvt Ltd compliance in Delhi. AOC-4 + MGT-7. AGM by 30 Sept. Statutory audit. ITR-6. DIR-3 KYC. Rs 100/day no cap. Call +91 945 945 6700.">
    <meta property="og:url" content="/private-limited-company-compliance/delhi">
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="Patron Accounting">
    <meta property="og:image" content="https://www.patronaccounting.com/images/og-default-square.png">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="1200">
    <meta property="og:image:type" content="image/png">
    <meta property="og:image:secure_url" content="https://www.patronaccounting.com/images/og-default-square.png">
    <meta property="og:image:alt" content="Patron Accounting - partner you can rely on">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Pvt Ltd Compliance Delhi NCR – AOC-4, MGT-7 &amp; Due Dates">
    <meta name="twitter:description" content="Pvt Ltd compliance in Delhi. AOC-4 + MGT-7. AGM by 30 Sept. Statutory audit. ITR-6. DIR-3 KYC. Rs 100/day no cap. Call +91 945 945 6700.">
    <meta name="twitter:image" content="https://www.patronaccounting.com/images/og-default-square.png">
@endsection

@section('schema')
    <script type="application/ld+json">{
  "@context": "https://schema.org",
  "@graph": [
    {
      "@type": "Service",
      "name": "Pvt Ltd Compliance in Delhi",
      "description": "Pvt Ltd compliance in Delhi. AOC-4 + MGT-7. AGM by 30 Sept. Statutory audit. ITR-6. DIR-3 KYC. Rs 100/day no cap. Call +91 945 945 6700.",
      "url": "https://www.patronaccounting.com/private-limited-company-compliance/delhi",
      "serviceType": "Pvt Ltd Compliance in Delhi",
      "areaServed": {
        "@type": "City",
        "name": "Delhi"
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
        "url": "https://www.patronaccounting.com/private-limited-company-compliance/delhi",
        "price": "14999"
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
          "name": "Private Limited Company Compliance",
          "item": "https://www.patronaccounting.com/private-limited-company-compliance"
        },
        {
          "@type": "ListItem",
          "position": 3,
          "name": "Pvt Ltd Company Compliance in Delhi",
          "item": "https://www.patronaccounting.com/private-limited-company-compliance/delhi"
        }
      ]
    },
    {
      "@type": "FAQPage",
      "mainEntity": [
        {
          "@type": "Question",
          "name": "What annual filings must a Delhi Pvt Ltd complete?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Min 4 board meetings, AGM by 30 September, AOC-4 within 30 days, MGT-7 within 60 days, ITR-6 by 31 October, DIR-3 KYC, ADT-1, DPT-3. All mandatory regardless of activity."
          }
        },
        {
          "@type": "Question",
          "name": "Does dormant company need compliance?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Yes. ALL private limited companies must file AOC-4 MGT-7 ITR-6 every year. Zero transactions still requires statutory audit AGM and filing. Rs 100 per day penalty."
          }
        },
        {
          "@type": "Question",
          "name": "What is S.164(2) disqualification?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "3 years non-filing of AOC-4 or MGT-7 automatically disqualifies ALL directors from ALL companies for 5 years. DINs deactivated. Cross-company cascading."
          }
        },
        {
          "@type": "Question",
          "name": "Is statutory audit mandatory?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Yes for every private limited company regardless of turnover or activity. Unlike LLPs which have thresholds. Auditor appointed within 30 days of incorporation then at each AGM."
          }
        }
      ]
    }
  ]
}</script>

@endsection

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

@section('content')
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
                        Pvt Ltd Company Compliance in Delhi: AOC-4, MGT-7, AGM, Audit, and Annual Filing
                    </h1>

                    <div class="expert-attribution-box">
                        <span class="eab-check"><svg width="16" height="16" viewBox="0 0 24 24" fill="currentColor"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg></span>
                        <span class="eab-title">Reviewed by CA and CS Team, Patron Accounting LLP</span>
                        <span class="eab-meta">
                            <span>ICAI & ICSI Registered</span><span class="eab-sep">|</span>
                            <span>15+ Years Experience</span><span class="eab-sep">|</span>
                            <span>Last Updated: <span id="lastUpdated">06 April 2026</span></span>
                        </span>
                        <a href="#" class="eab-link">Verify Credentials &rarr;</a>
                    </div>

                    <div class="mb-4">
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>AGM:</span> Annual General Meeting by 30 September | Financial statements + auditor appointment approved</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>AOC-4:</span> Financial statements filed with ROC within 30 days of AGM | Balance sheet + P&amp;L + audit report</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>MGT-7/7A:</span> Annual return filed within 60 days of AGM | Shareholding + directors + meetings</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Penalty:</span> Rs 100/day per form, no cap | 3 years non-filing = director disqualification S.164(2)</p>
                        </div>
                    </div>

                    <p class="mb-4 fw-bold" style="color: var(--blue); font-size: 15px;">10,000+ Businesses Served | 4.9 Google Rating | 15+ Years of Practice</p>

                    <div class="hero-cta">
                        <a href="tel:+919459456700" class="btn-video text-decoration-none">
                            <span class="play-circle"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="width:14px;height:14px;color:#fff"><path d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/></svg></span>
                            Call +91 945 945 6700
                        </a>
                        <a href="mailto:sales@patronaccounting.com?subject=Pvt%20Ltd%20Compliance%20-%20Delhi&body=Hello%20Patron%2C%0A%0AI%20need%20company%20compliance%20for%20my%20Delhi%20Pvt%20Ltd.%0A%0AThank%20you." class="btn-sample text-decoration-none">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="width:18px;height:18px;"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,12 2,6"/></svg>
                            Email Us
                        </a>
                        <a href="https://wa.me/919459456700?text=Hi%2C%20I%20need%20company%20compliance%20for%20my%20Delhi%20Pvt%20Ltd.%20Please%20call%20me." target="_blank" class="btn-sample text-decoration-none" rel="noopener">
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
                                            'service'  => 'Pvt Ltd Company Compliance in Delhi',
                                            'city'     => 'Delhi',
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
    'ctaText'    => 'Complete calendar. Single set of books. MCA V3 expert. Zero penalties.',
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
            <a href="#overview-section" class="toc-btn active">Overview</a><a href="#what-section" class="toc-btn">Key Filings</a><a href="#who-section" class="toc-btn">Calendar</a><a href="#services-section" class="toc-btn">Services</a><a href="#procedure-section" class="toc-btn">Penalties</a><a href="#documents-section" class="toc-btn">MCA V3</a><a href="#challenges-section" class="toc-btn">Mistakes</a><a href="#fees-section" class="toc-btn">Fees</a><a href="#timeline-section" class="toc-btn">Framework</a><a href="#benefits-section" class="toc-btn">Why Patron</a><a href="#comparison-section" class="toc-btn">Comparison</a><a href="#faq-section" class="toc-btn">FAQs</a>
        </div>
        <button class="toc-arrow right" id="tocRight">&#10095;</button>
    </div>
</div>

<!-- SECTION 2: OVERVIEW / INTRO + TL;DR -->
<section class="content-section" id="overview-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Pvt Ltd Company Compliance for Delhi Companies</h2>
            <div class="content-text">
                <div class="highlight-box" style="margin-bottom:20px;">
                    <p><strong>&#128204; TL;DR - Pvt Ltd Company Compliance in Delhi Services at a Glance</strong></p>
                    <p>Annual cycle: (1) Books of account, (2) Min 4 Board Meetings (120-day gap), (3) Statutory audit (mandatory ALL companies), (4) AGM by 30 Sept, (5) AOC-4 within 30 days, (6) MGT-7 within 60 days, (7) ITR-6 by 31 Oct, (8) DIR-3 KYC, (9) ADT-1, (10) DPT-3 by 30 June. Rs 100/day no cap. 3 years non-filing = S.164(2) director disqualification. MCA V3 2026: geotagged photos, cross-verification. ALL companies must file regardless of activity. Patron manages from Delhi.</p>
                </div>
                <p>Delhi has tens of thousands of private limited companies. Many incorporated but never operational — yet compliance is mandatory. 2026 brings tighter MCA-IT-GST cross-verification and stricter enforcement. Learn more about <a href="/private-limited-company-compliance">Pvt Ltd Compliance across India</a>.</p>
                <p>Patron Accounting's Delhi office provides end-to-end compliance: bookkeeping, financial statements, audit, AGM, AOC-4, MGT-7, ITR-6, DIR-3 KYC, ADT-1, event-based filings. Integrated with <a href="/accounting-services">accounting services</a> and ROC compliance.</p>
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
                <h2 class="section-title">Key Annual Filings Explained</h2>
                <div class="content-text what-is-definition">
                    
                    <p><strong>AOC-4:</strong> Audited financial statements (balance sheet, P&amp;L, cash flow, Board's Report, Auditor's Report) with ROC within 30 days of AGM. XBRL if paid-up ≥Rs 5 Cr or turnover ≥Rs 100 Cr.</p><p><strong>MGT-7/7A:</strong> Annual return: registered office, activities, shareholding, directors, meetings. Within 60 days of AGM. 2026: geotagged office photo mandatory.</p><p><strong>ITR-6:</strong> Income tax return by 31 October (all companies, since audit mandatory). MAT, advance tax, TDS reconciliation. Even zero-revenue companies.</p><p><strong>Board Meetings:</strong> Min 4/year, gap ≤120 days. Penalty Rs 25,000 per missed meeting. <strong>AGM:</strong> By 30 September. Missing cascades AOC-4 + MGT-7 deadlines.</p>

                </div>
                <div class="highlight-box" style="margin-top:20px;">
                    <p><strong>Key Terms for Pvt Ltd Company Compliance in Delhi:</strong></p>
                    <p><strong>AOC-4:</strong> Within 30 days of AGM. Rs 100/day no cap.</p><p><strong>MGT-7:</strong> Within 60 days of AGM. Rs 100/day no cap. Geotagged photo 2026.</p><p><strong>S.164(2):</strong> 3 years non-filing = ALL directors disqualified ALL companies 5 years.</p><p><strong>AGM:</strong> By 30 September. S.99: Rs 1 lakh + Rs 5,000/day. Cascading effect.</p>

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
                            <text x="100" y="170" font-size="10" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial, sans-serif">Pvt Ltd Company Compliance in Delhi</text>
                        </svg>
                    </div>
                    <div class="illustration-badge">
                        <span>Companies Act</span>
                        <strong>Compliance</strong>
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
            <h2 class="section-title">Annual Compliance Calendar FY 2025-26</h2>
            <div class="content-text">
                
                <ul><li><strong>Board Meetings:</strong> Quarterly (gap ≤120 days). Penalty Rs 25,000/meeting missed.</li><li><strong>DPT-3:</strong> Deposits return by 30 June 2026.</li><li><strong>DIR-3 KYC:</strong> By 30 September (or 3-year cycle). DIN deactivated if missed.</li><li><strong>AGM:</strong> By 30 September 2026. Adopt financials. Appoint auditor.</li><li><strong>AOC-4:</strong> By 29 October 2026 (30 days from AGM). XBRL if applicable.</li><li><strong>ADT-1:</strong> By 15 October (15 days from AGM).</li><li><strong>MGT-7:</strong> By 28 November 2026 (60 days from AGM).</li><li><strong>ITR-6:</strong> By 31 October 2026.</li></ul>

            </div>
            </div>
        </div>
    </div>
</section>

<!-- SECTION 5: OUR SERVICES -->
<section class="content-section" id="services-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Pvt Ltd Compliance Services: What Patron Handles</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Service</th><th>What We Do</th></tr></thead>
                    <tbody>
                        <tr><td>Bookkeeping + Financial Statements</td><td>Journal, ledger, cash/bank. Trial balance. Audited B/S, P&L, cash flow, notes. Single set for AOC-4 and ITR-6.</td></tr><tr><td>Statutory Audit Coordination</td><td>Mandatory ALL companies. Books provided to auditor. Queries addressed. Report ready for AGM. Auditor appointment integrated.</td></tr><tr><td>AGM Management</td><td>21-day notice, agenda, explanatory statement, proxy forms, conduct, minutes within 30 days. By mid-September.</td></tr><tr><td>AOC-4 Filing</td><td>Within 30 days of AGM. Audited financials, Board's Report, Auditor's Report, AOC-2. Director DSC. Professional certification. XBRL if applicable.</td></tr><tr><td>MGT-7/7A Filing</td><td>Within 60 days of AGM. Shareholding, directors, meetings, indebtedness. Geotagged office photo. PCS certification.</td></tr><tr><td>ITR-6 Filing</td><td>Income computation, MAT, advance tax, TDS reconciliation with 26AS/AIS. By 31 October. Even zero-revenue companies.</td></tr><tr><td>DIR-3 KYC + ADT-1 + DPT-3 + Events</td><td>All directors' DINs active. Auditor appointment notified. Deposits reported. Corporate changes filed within 30 days.</td></tr>

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
            <h2 class="section-title">Penalty Structure</h2>
            <p class="section-subtitle" style="text-align:left;max-width:100%;">Rs 100/day per form, no cap. 3 years = S.164(2) director disqualification. 2 years = strike-off risk. Annual compliance Rs 14,999 vs 1 year penalty Rs 73,000+.</p>
        </header>
        <div class="steps-container">
            <div class="step-card"><div class="step-content"><span class="step-badge">AOC-4</span><h3 class="step-title">Late AOC-4: Rs 100/Day No Cap</h3><p class="step-description">Financial statements not filed within 30 days of AGM. 1 year late = Rs 36,500. Accumulates daily with no upper limit. Plus officer penalties.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Rs 100/day</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>No cap</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="15" y="5" width="90" height="70" rx="6" fill="#FFF3E0" stroke="#F5A623" stroke-width="1.5"/><text x="60" y="38" font-size="9" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">AOC-4</text><text x="60" y="55" font-size="7" fill="#F5A623" font-weight="700" text-anchor="middle" font-family="Arial">₹100/day</text></svg></div><span class="illustration-label">Penalty</span><span class="step-number-large">01</span></div></div></div><div class="step-card"><div class="step-content"><span class="step-badge">MGT-7</span><h3 class="step-title">Late MGT-7: Rs 100/Day No Cap</h3><p class="step-description">Annual return not filed within 60 days of AGM. Combined with AOC-4: Rs 200/day. 1 year both forms = Rs 73,000.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Rs 200/day combined</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="15" y="5" width="90" height="70" rx="6" fill="#FFF3E0" stroke="#F5A623" stroke-width="1.5"/><text x="60" y="38" font-size="9" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">MGT-7</text><text x="60" y="55" font-size="7" fill="#F5A623" font-weight="700" text-anchor="middle" font-family="Arial">₹100/day</text></svg></div><span class="illustration-label">Penalty</span><span class="step-number-large">02</span></div></div></div><div class="step-card"><div class="step-content"><span class="step-badge">S.164(2)</span><h3 class="step-title">3 Years: Director Disqualification</h3><p class="step-description">3 continuous years non-filing = ALL directors disqualified from ALL companies for 5 years. DINs deactivated. Cannot serve on any board anywhere.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>5-year DIN ban</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Cross-company</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="20" y="10" width="80" height="55" rx="6" fill="#FFEBEE" stroke="#EF4444" stroke-width="1.5"/><text x="60" y="38" font-size="8" fill="#EF4444" font-weight="700" text-anchor="middle" font-family="Arial">S.164(2)</text><text x="60" y="52" font-size="7" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">Disqualified</text></svg></div><span class="illustration-label">Critical</span><span class="step-number-large">03</span></div></div></div><div class="step-card"><div class="step-content"><span class="step-badge">S.248</span><h3 class="step-title">2 Years: Strike-Off Risk</h3><p class="step-description">2+ years non-filing + no business = ROC initiates strike-off under S.248. Company removed from register. Revival via NCLT Rs 1 lakh+.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Company removed</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>NCLT revival costly</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="20" y="10" width="80" height="55" rx="6" fill="#FFEBEE" stroke="#EF4444" stroke-width="1.5"/><text x="60" y="38" font-size="8" fill="#EF4444" font-weight="700" text-anchor="middle" font-family="Arial">S.248</text><text x="60" y="52" font-size="7" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">Strike-Off</text></svg></div><span class="illustration-label">Critical</span><span class="step-number-large">04</span></div></div></div>

        </div>
    </div>
</section>

<!-- SECTION 8: DOCUMENTS REQUIRED -->
<section class="content-section" id="documents-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">MCA V3 Portal Updates (2026)</h2>
            <div class="content-text">
                
                <ul><li><strong>Geotagged Office Photo:</strong> MGT-7/7A requires geotagged timestamped photo of registered office with company name board (CIN, address, phone, email visible). NEW requirement.</li><li><strong>Linked Form Submissions:</strong> AOC-4 with MGT-7, ADT-1 linked to AGM. Standalone uploads may fail validation.</li><li><strong>Stricter DSC Validation:</strong> DSC identity verified against DIN/PAN. Mismatch = rejection.</li><li><strong>MCA-IT-GST Cross-Verification:</strong> Different turnover reported to different authorities triggers automated scrutiny. Consistent reporting essential.</li></ul>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 9: CHALLENGES -->
<section class="content-section" id="challenges-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Common Mistakes Delhi Companies Make</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Challenge</th><th>Impact</th><th>How Patron Accounting Solves It</th></tr></thead>
                    <tbody>
                        <tr><td>"No Business = No Compliance"</td><td>Most dangerous. ALL companies must file AOC-4, MGT-7, ITR-6 every year. Zero revenue, dormant = still mandatory.</td><td>Patron files for all Delhi companies including dormant and zero-revenue</td></tr><tr><td>Missing AGM Deadline</td><td>AGM by 30 Sept. Missing cascades: AOC-4 + MGT-7 immediately overdue. Rs 200/day combined penalty starts.</td><td>Patron schedules AGM by mid-September</td></tr><tr><td>DIN Deactivated</td><td>Director's DIN inactive. Cannot sign MCA forms. Sole signing director = ALL filings blocked.</td><td>All directors' DINs verified active before filing season</td></tr><tr><td>No Geotagged Photo</td><td>New MCA V3 requirement. No proper name board at registered office. MGT-7 rejection.</td><td>Patron advises on name board and captures compliant photo</td></tr><tr><td>Inconsistent Financials</td><td>Different numbers to MCA (AOC-4), IT (ITR-6), GST. Cross-verification flags in 2026.</td><td>Single set of books for all filings. Consistent reporting.</td></tr>

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
            <h2 class="section-title">Pvt Ltd Compliance Fees in Delhi</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Fee Component</th><th>Amount</th></tr></thead>
                    <tbody>
                        <tr><td>Annual Compliance (AOC-4 + MGT-7 + ITR-6 + AGM)</td><td>From INR 14,999/year</td></tr><tr><td>Annual + Bookkeeping</td><td>From INR 19,999/year</td></tr><tr><td>Annual + Bookkeeping + Audit</td><td>From INR 24,999/year</td></tr><tr><td>AOC-4 Only</td><td>From INR 4,999</td></tr><tr><td>MGT-7 Only</td><td>From INR 3,999</td></tr><tr><td>Compliance Regularisation (Per Year)</td><td>From INR 14,999</td></tr><tr><td>Patron Accounting Professional Fees</td><td>Starting from INR 4,999 (Exl GST and Govt. Charges)</td></tr>

                    </tbody>
                </table>
                </div>
                <p style="margin-top:16px;font-size:13px;color:var(--text-muted);font-style:italic;">All fees and charges listed are indicative only and do not constitute a binding offer. Final amounts may vary depending on the volume of work and the complexity involved.</p>
                <p style="margin-top:16px;">Professional service charges for drafting, filing, and representation are separate from the statutory fees. The exact fee depends on the complexity of the case, disputed amount, and number of hearings required. Contact us for a detailed quote.</p>
                <p style="margin-top:16px;"><strong>Get a free Pvt Ltd Company Compliance in Delhi consultation - <a href="tel:+919459456700">Call +91 945 945 6700</a> or <a href="https://wa.me/919459456700?text=Hi%2C%20I%20need%20company%20compliance%20for%20my%20Delhi%20Pvt%20Ltd.%20Please%20call%20me." target="_blank" rel="noopener">WhatsApp us</a>. No-obligation assessment.</strong></p>
            </div>
        </div>
    </div>
</section>

<!-- SECTION 11: TIMELINE -->
<section class="content-section" id="timeline-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Legal Framework</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Stage</th><th>Estimated Timeline</th></tr></thead>
                    <tbody>
                        <tr><td>S.92 (MGT-7)</td><td>Annual return within 60 days of AGM.</td></tr><tr><td>S.129/134/137 (AOC-4)</td><td>Financial statements + Board's Report. Within 30 days of AGM.</td></tr><tr><td>S.96 (AGM)</td><td>Within 6 months of FY end. Gap ≤15 months.</td></tr><tr><td>S.173 (Board Meetings)</td><td>Min 4/year. Gap ≤120 days. Rs 25,000/missed.</td></tr><tr><td>S.164(2)</td><td>3 years non-filing = director disqualification 5 years.</td></tr><tr><td>S.248</td><td>2+ years non-filing = ROC strike-off proceedings.</td></tr><tr><td>S.99</td><td>No AGM: Rs 1 lakh + Rs 5,000/day on officers.</td></tr>

                    </tbody>
                </table>
                </div>
                <div class="highlight-box" style="margin-top:16px;">
                    
                    <p><strong>Critical:</strong> Missing AGM cascades ALL downstream deadlines. AOC-4 and MGT-7 become immediately overdue. 3 years non-filing = S.164(2) director disqualification across ALL companies. Annual compliance Rs 14,999 vs 1 year penalty Rs 73,000+. Prevention is 5x cheaper.</p>

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
            <h2 class="section-title">Why Choose Patron for Pvt Ltd Compliance in Delhi</h2>
        </div>
        <div class="features-grid"><article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2"><circle cx="12" cy="12" r="10"/><path d="M12 6v6l4 2"/></svg></div><h3>Complete Calendar</h3><p>April to November: books, board meetings, audit, AGM, AOC-4, MGT-7, ITR-6. Proactive compliance, not reactive.</p></article><article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2"><path d="M14 2H6a2 2 0 00-2 2v16a2 2 0 002 2h12a2 2 0 002-2V8z"/><path d="M14 2v6h6"/></svg></div><h3>Single Set of Books</h3><p>One consistent set for AOC-4 (ROC), ITR-6 (IT), GST. No cross-verification discrepancies in 2026.</p></article><article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><h3>MCA V3 Expertise</h3><p>Linked submissions, geotagged photos, DSC validation, XBRL. No technical rejections for Delhi companies.</p></article><article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2"><path d="M12 1v22M5 8h14M5 16h14"/></svg></div><h3>Regularisation</h3><p>2-5+ years pending: all years filed, DINs reactivated, company brought current. Always cheaper than continued penalties.</p></article></div>
    </div>
</section>

<!-- SECTION 12A: SOCIAL PROOF -->
<section class="content-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Trusted by 10,000+ Businesses Across India</h2>
            <div class="content-text">
                
                <p><strong>10,000+ Businesses Served | 4.9 Google Rating | 50,000+ Documents Filed | 15+ Years</strong></p><p>"Delhi startup incorporated 2021, zero compliance 4 years. Both directors disqualified S.164(2). Patron filed all 4 years, reactivated DINs, restored Active status. Now annual package — 2 years clean." - Startup Founder, Delhi</p><p><strong>4-Office Signal:</strong> Pune, Mumbai, Delhi, and Gurugram.</p>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 13: SELF-FILING vs PROFESSIONAL COMPARISON -->
<section class="content-section" id="comparison-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Patron vs Self-Filing: Pvt Ltd Compliance</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Factor</th><th>Patron Accounting</th><th>Self-Filing / Ignoring</th></tr></thead>
                    <tbody>
                        <tr><td>Calendar</td><td>Complete cycle managed proactively</td><td>Deadlines missed, penalties accumulate</td></tr><tr><td>Financials</td><td>Single set for AOC-4 + ITR-6 + GST</td><td>Inconsistent, cross-verification flags</td></tr><tr><td>AGM</td><td>Scheduled mid-September</td><td>Missed, cascading all deadlines</td></tr><tr><td>DINs</td><td>All directors active before season</td><td>Deactivated, filings blocked</td></tr><tr><td>MCA V3</td><td>Geotagged photo, linked forms, XBRL</td><td>Technical rejections</td></tr><tr><td>Annual Cost</td><td>Rs 14,999-24,999/year</td><td>Rs 0 initially → Rs 73,000+ penalties/year</td></tr>

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
            <h2 class="section-title">Related Corporate Services</h2>
            <div class="content-text">
                
                <ul><li><a href="/private-limited-company-compliance">Pvt Ltd Compliance (India)</a> - National-level service.</li><li><a href="/private-limited-company-registration">Company Registration</a> - Incorporation.</li><li><a href="/accounting-services">Accounting Services</a> - Bookkeeping.</li><li><a href="/appointment-of-auditor">Auditor Appointment</a> - S.139.</li></ul>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 15A: LEGAL FRAMEWORK -->
<section class="content-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Legal Framework: Pvt Ltd Compliance</h2>
            <div class="content-text">
                
                <p><strong>S.92:</strong> Annual return MGT-7. Within 60 days of AGM.</p><p><strong>S.129/137:</strong> Financial statements AOC-4. Within 30 days of AGM.</p><p><strong>S.96:</strong> AGM within 6 months. Gap ≤15 months.</p><p><strong>S.173:</strong> Board meetings min 4. Gap ≤120 days.</p><p><strong>S.164(2):</strong> 3 years non-filing = 5-year director disqualification.</p><p><strong>S.248:</strong> 2+ years non-filing = strike-off.</p><p><strong>Source:</strong> <a href="https://mca.gov.in" target="_blank" rel="noopener">mca.gov.in</a>, Companies Act 2013</p>

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
                    <h2 class="faq-expanded__title">FAQs: Pvt Ltd Company Compliance in Delhi</h2>
                    <p class="faq-expanded__lead">Common questions about AOC-4, MGT-7, AGM, audit, and annual compliance for Delhi private limited companies.</p>
                    @include('partials.bigin-form', [
                        'variant'  => 'compact',
                        'service'  => 'Pvt Ltd Company Compliance in Delhi',
                        'city'     => 'Delhi',
                    ])
                </aside>
                <div class="faq-expanded__list">
                    <div class="faq-expanded__item" id="faq-1">
                        <h3 class="faq-expanded__q">What annual filings must Delhi Pvt Ltd complete?</h3>
                        <div class="faq-expanded__a"><p>Min 4 board meetings, AGM by 30 Sept, AOC-4 within 30 days, MGT-7 within 60 days, ITR-6 by 31 Oct, DIR-3 KYC, ADT-1, DPT-3. All mandatory regardless of activity. Patron manages complete cycle.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-2">
                        <h3 class="faq-expanded__q">Does dormant company need compliance?</h3>
                        <div class="faq-expanded__a"><p>Yes. ALL companies must file AOC-4, MGT-7, ITR-6 every year. Zero transactions = still statutory audit, AGM, and filing. Rs 100/day per form. 3 years = director disqualification.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-3">
                        <h3 class="faq-expanded__q">What is AOC-4 vs MGT-7?</h3>
                        <div class="faq-expanded__a"><p>AOC-4: audited financials (B/S, P&L, Auditor's Report) within 30 days of AGM. MGT-7: annual return (shareholding, directors, meetings) within 60 days. Both mandatory. Patron files both.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-4">
                        <h3 class="faq-expanded__q">What happens if AGM missed?</h3>
                        <div class="faq-expanded__a"><p>S.99: Rs 1 lakh + Rs 5,000/day on officers. Cascading: AOC-4 + MGT-7 immediately overdue. Rs 200/day combined. Patron schedules AGM by mid-September.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-5">
                        <h3 class="faq-expanded__q">What is S.164(2)?</h3>
                        <div class="faq-expanded__a"><p>3 years non-filing of AOC-4 or MGT-7 = ALL directors disqualified from ALL companies for 5 years. DINs deactivated. Cross-company cascade. Patron monitors for all Delhi directors.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-6">
                        <h3 class="faq-expanded__q">Is statutory audit mandatory?</h3>
                        <div class="faq-expanded__a"><p>Yes for EVERY private limited company regardless of turnover. Unlike LLPs. Auditor appointed within 30 days of incorporation, then at each AGM. Patron coordinates.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-7">
                        <h3 class="faq-expanded__q">Geotagged office photo?</h3>
                        <div class="faq-expanded__a"><p>New MCA V3 2026 requirement for MGT-7/7A. External photo of registered office with name board showing CIN, address, phone, email. Patron captures compliant photo.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-8">
                        <h3 class="faq-expanded__q">How much does compliance cost?</h3>
                        <div class="faq-expanded__a"><p>Patron: annual (AOC-4+MGT-7+ITR-6+AGM) from Rs 14,999. With bookkeeping Rs 19,999. Regularisation Rs 14,999/year. Compare: 1 year penalty Rs 73,000+. Call +91 945 945 6700.</p></div>
                    </div>
                </div>
            </div>


            <!-- Quick Answers -->
            <div class="highlight-box" style="margin-top:32px;">
                <p><strong>Quick Answers</strong></p>
                <p><strong>Kya-kya file karna hai?</strong> AOC-4 (30 din AGM se), MGT-7 (60 din), ITR-6 (31 Oct), DIR-3 KYC, ADT-1. Sab mandatory — zero turnover bhi.</p><p><strong>3 saal nahi kiya toh?</strong> Directors S.164(2) se disqualified (5 saal). DIN deactivate. Kisi company mein director nahi ban sakte. Plus Rs 2 lakh+ penalty.</p><p><strong>Kitna kharcha?</strong> Patron: Rs 14,999/saal se. 1 saal penalty: Rs 73,000+. Compliance sasta hai.</p>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 18: URGENCY CTA -->
<section class="content-section" style="background: var(--orange-lighter) !important; border-left: 4px solid var(--orange);">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Rs 200/Day Combined - S.164(2) After 3 Years</h2>
            <div class="content-text">
                
                <p>AOC-4 + MGT-7 delayed = Rs 200/day combined, no cap. 3 years = director disqualification across ALL companies. MCA 2026 AI monitoring identifies non-filers. Annual compliance costs a fraction of penalties.</p><p><strong>Contact Patron - <a href="tel:+919459456700">Call +91 945 945 6700</a> or <a href="https://wa.me/919459456700?text=Hi%2C%20I%20need%20company%20compliance%20for%20my%20Delhi%20Pvt%20Ltd." target="_blank" rel="noopener">WhatsApp us</a>.</strong></p>

            </div>
        </div>
    </div>
</section>

<!-- CONCLUSION + CTA BLOCK (Dark) -->
<section class="content-section" style="background: var(--blue) !important;">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title" style="color:#FFFFFF !important;">Get Your Delhi Pvt Ltd Compliant Today</h2>
            <div class="content-text" style="text-align:left;">
                
                <p style="color:rgba(255,255,255,0.9);">Annual cycle: board meetings, audit, AGM, AOC-4, MGT-7, ITR-6, DIR-3 KYC, ADT-1, DPT-3. Rs 100/day per form no cap. S.164(2) director disqualification. MCA V3 geotagged photos and cross-verification. All mandatory regardless of activity.</p><p style="color:rgba(255,255,255,0.9);">Patron Accounting manages end-to-end from our Rohini office — bookkeeping, financials, audit, AGM, AOC-4, MGT-7, ITR-6, DIR-3 KYC, regularisation. 15+ years, 10,000+ businesses, Pune, Mumbai, Delhi, Gurugram.</p><p style="color:rgba(255,255,255,0.7);font-size:13px;">Reviewed by CA &amp; CS Team - Patron Accounting LLP</p>

            </div>
            <div style="display:flex;gap:14px;flex-wrap:wrap;margin-top:24px;">
                <a href="tel:+919459456700" style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:var(--orange);color:#fff;border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#128222; Call +91 945 945 6700</a>
                <a href="https://wa.me/919459456700?text=Hi%2C%20I%20need%20company%20compliance%20for%20my%20Delhi%20Pvt%20Ltd.%20Please%20call%20me." target="_blank" style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:#25D366;color:#fff;border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;" rel="noopener">&#128172; WhatsApp Us</a>
                <a href="mailto:sales@patronaccounting.com?subject=Pvt%20Ltd%20Compliance%20-%20Delhi&body=Hello%20Patron%2C%0A%0AI%20need%20company%20compliance%20for%20my%20Delhi%20Pvt%20Ltd.%0A%0AThank%20you." style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:transparent;color:#fff;border:2px solid rgba(255,255,255,0.3);border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#9993;&#65039; Email Us</a>
            </div>
            <p style="color:rgba(255,255,255,0.7);font-size:13px;margin-top:16px;">Book a Free Consultation - No Obligation.</p>
        </div>
    </div>
</section>

<!-- GSTAT STATE BENCH CITY PAGES (32 Pages) -->
<section class="content-section" style="padding:48px 32px;background:var(--gray-50);">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title" style="text-align:center;margin-bottom:12px;">Pvt Ltd Compliance: Available Across 4 Cities</h2>
            <p style="text-align:center;color:var(--text-muted);font-size:15px;margin-bottom:40px;">Professional private limited company compliance in Pune, Mumbai, Delhi, and Gurugram.</p>
         
            <div class="pa-city-block" style="margin-bottom:40px;"><div class="pa-city-grid"><a href="/private-limited-company-compliance/pune" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Pune</div><div class="pa-card-sub">Maharashtra</div></div></a><a href="/private-limited-company-compliance/mumbai" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Mumbai</div><div class="pa-card-sub">Maharashtra</div></div></a><div class="pa-city-card" style="opacity:0.6; pointer-events:none; border:2px solid var(--orange); position:relative;"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Delhi</div><div class="pa-card-sub">Delhi NCR</div></div><span style="position:absolute; top:6px; right:8px; font-size:10px; color:var(--orange); font-weight:700; text-transform:uppercase; letter-spacing:0.5px;">You're here</span></div><a href="/private-limited-company-compliance/gurugram" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Gurugram</div><div class="pa-card-sub">Haryana</div></div></a></div></div><div class="pa-city-block"><div class="pa-block-title">Related Services in Delhi</div><div class="pa-block-sub">Complete corporate management</div><div class="pa-cross-grid"><a href="/gst-registration/delhi" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">GST Registration</div><div class="pa-card-sub">Delhi</div></div></a><a href="/gst-returns/delhi" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">GST Returns</div><div class="pa-card-sub">Delhi</div></div></a><a href="/private-limited-company-registration/delhi" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Private Limited Company Registration</div><div class="pa-card-sub">Delhi</div></div></a><a href="/income-tax-return/delhi" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Income Tax Return Filing</div><div class="pa-card-sub">Delhi</div></div></a><a href="/trademark-registration/delhi" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Trademark Registration</div><div class="pa-card-sub">Delhi</div></div></a><a href="/startup-registration/delhi" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Startup Registration</div><div class="pa-card-sub">Delhi</div></div></a></div></div>
        </div>
    </div>
</section>

<!-- CONTENT FRESHNESS FOOTER -->
<section class="content-section" style="padding:32px;">
    <div class="content-container">
        <div class="text-content" style="font-size:13px;color:var(--text-muted);">
            <p><strong>Content Created:</strong> 06 April 2026 &nbsp;|&nbsp; <strong>Last Updated:</strong> <span id="lastUpdatedFooter">06 April 2026</span> &nbsp;|&nbsp; <strong>Next Review:</strong> 06 October 2026 &nbsp;|&nbsp; <strong>Reviewed By:</strong> CA &amp; CS Team, Patron Accounting LLP</p>
            <p>This page is reviewed every 6 months to ensure Companies Act provisions, AOC-4/MGT-7 deadlines, MCA V3 updates, penalty rates, and S.164(2) enforcement are current.</p>
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
