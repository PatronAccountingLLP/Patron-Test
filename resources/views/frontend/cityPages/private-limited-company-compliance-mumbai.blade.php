
@extends('layouts.service-app')

<!-- External Dependencies (loaded by master layout in production) -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Barlow:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,400&family=DM+Sans:opsz,wght@9..40,400;9..40,500;9..40,600;9..40,700&display=swap" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

@section('meta')
    <title>Pvt Ltd Compliance in Mumbai – AOC-4, MGT-7 &amp; Due Dates</title>
    <meta name="description" content="CA-assisted Pvt Ltd compliance in Mumbai. AGM, AOC-4, MGT-7, ITR-6, Board meetings, DPT-3, DIR-3 KYC. ROC Everest House. Call +91 945 945 6700.">
    <link rel="canonical" href="/private-limited-company-compliance/mumbai">
    <meta name="robots" content="index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1">
    <meta property="og:title" content="Pvt Ltd Compliance in Mumbai – AOC-4, MGT-7 &amp; Due Dates">
    <meta property="og:description" content="CA-assisted Pvt Ltd compliance in Mumbai. AGM, AOC-4, MGT-7, ITR-6, Board meetings, DPT-3, DIR-3 KYC. ROC Everest House. Call +91 945 945 6700.">
    <meta property="og:url" content="/private-limited-company-compliance/mumbai">
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="Patron Accounting">
    <meta property="og:image" content="https://www.patronaccounting.com/images/og-default-square.png">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="1200">
    <meta property="og:image:type" content="image/png">
    <meta property="og:image:secure_url" content="https://www.patronaccounting.com/images/og-default-square.png">
    <meta property="og:image:alt" content="Patron Accounting - partner you can rely on">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Pvt Ltd Compliance in Mumbai – AOC-4, MGT-7 &amp; Due Dates">
    <meta name="twitter:description" content="CA-assisted Pvt Ltd compliance in Mumbai. AGM, AOC-4, MGT-7, ITR-6, Board meetings, DPT-3, DIR-3 KYC. ROC Everest House. Call +91 945 945 6700.">
    <meta name="twitter:image" content="https://www.patronaccounting.com/images/og-default-square.png">
@endsection

@section('schema')
    <script type="application/ld+json">{
  "@context": "https://schema.org",
  "@graph": [
    {
      "@type": "Service",
      "name": "Private Limited Company Compliance in Mumbai",
      "description": "CA-assisted Pvt Ltd compliance in Mumbai. AGM, AOC-4, MGT-7, ITR-6, Board meetings, DPT-3, DIR-3 KYC. ROC Everest House. Call +91 945 945 6700.",
      "url": "https://www.patronaccounting.com/private-limited-company-compliance/mumbai",
      "serviceType": "Private Limited Company Compliance in Mumbai",
      "areaServed": {
        "@type": "City",
        "name": "Mumbai"
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
        "url": "https://www.patronaccounting.com/private-limited-company-compliance/mumbai",
        "price": "10000"
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
          "name": "Pvt Ltd Compliance",
          "item": "https://www.patronaccounting.com/private-limited-company-compliance"
        },
        {
          "@type": "ListItem",
          "position": 3,
          "name": "Pvt Ltd Compliance in Mumbai",
          "item": "https://www.patronaccounting.com/private-limited-company-compliance/mumbai"
        }
      ]
    },
    {
      "@type": "FAQPage",
      "mainEntity": [
        {
          "@type": "Question",
          "name": "Which ROC handles Pvt Ltd filings in Mumbai?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "ROC Mumbai at Everest House, 100 Marine Lines processes all AOC-4, MGT-7, ADT-1, DIR-12 and other MCA filings on MCA V3 portal. Income tax to CIT Mumbai. GST to GST portal. Patron's Marine Lines office adjacent to ROC."
          }
        },
        {
          "@type": "Question",
          "name": "What are the mandatory annual filings?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Core: AGM by 30 September, AOC-4 within 30 days, MGT-7 within 60 days, ADT-1 within 15 days, ITR-6 by 31 October, DPT-3 by 30 June. Plus 4 Board Meetings, DIR-3 KYC (triennial), MSME-1 if applicable, GST/TDS/PF/ESI. 50+ compliance actions per year."
          }
        },
        {
          "@type": "Question",
          "name": "What is the penalty for late filing?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "AOC-4/MGT-7: Rs 100/day per form with NO cap. 1 year delay on both: Rs 73,000. Director disqualification under Section 164(2) after 3 consecutive years (5-year ban from all directorships). Strike-off after 2 years. Patron files with 15-day buffer."
          }
        },
        {
          "@type": "Question",
          "name": "Does a dormant company need to file?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Yes. File nil AOC-4, MGT-7, ITR-6, hold 4 Board Meetings, 1 AGM, DIR-3 KYC. Non-filing: Rs 100/day penalty + director disqualification after 3 years. Patron advises: nil compliance (Rs 10,000/year) or close company (Rs 15,000 one-time) to stop obligations."
          }
        },
        {
          "@type": "Question",
          "name": "What is Section 164(2) director disqualification?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "If company fails to file AOC-4 or MGT-7 for 3 consecutive years, ALL directors disqualified from being directors in ANY company for 5 years. Director on 5 boards disqualified from all 5. Patron monitors filing status to prevent this for Mumbai directors."
          }
        },
        {
          "@type": "Question",
          "name": "What is the correct filing sequence after AGM?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "MCA V3 enforces: ADT-1 (15 days after AGM) first, then AOC-4 (30 days), then MGT-7 (60 days). AOC-4 must be before MGT-7 (system blocks if not). Filing out of sequence causes rejection. Patron manages correct sequence for all Mumbai companies."
          }
        },
        {
          "@type": "Question",
          "name": "How many Board Meetings are required?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Minimum 4 per year with gap not exceeding 120 days. Small companies/OPC: minimum 2 with gap <= 90 days. 7 days advance notice (waivable with all directors' consent). Minutes signed within 30 days. Patron schedules all meetings at year start."
          }
        },
        {
          "@type": "Question",
          "name": "When is tax audit required?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Section 44AB: if total sales/turnover exceeds Rs 1 crore (Rs 2 crore if cash < 5%). Form 3CD by 30 September. Statutory audit (Companies Act) mandatory for ALL Pvt Ltd regardless of turnover. Patron conducts both audits for eligible Mumbai companies."
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
                        Private Limited Company Compliance in Mumbai: AGM, AOC-4, MGT-7, ITR-6, and Annual Filing for Every Pvt Ltd
                    </h1>

                    <div class="expert-attribution-box">
                        <span class="eab-check"><svg width="16" height="16" viewBox="0 0 24 24" fill="currentColor"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg></span>
                        <span class="eab-title">Reviewed by CA and CS Team, Patron Accounting LLP</span>
                        <span class="eab-meta">
                            <span>ICAI & ICSI Registered</span><span class="eab-sep">|</span>
                            <span>15+ Years Experience</span><span class="eab-sep">|</span>
                            <span>Last Updated: <span id="lastUpdated">24 March 2026</span></span>
                        </span>
                        <a href="#" class="eab-link">Verify Credentials &rarr;</a>
                    </div>

                    <div class="mb-4">
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>AGM:</span> Within 6 months of FY end (by 30 September) | Gap between 2 AGMs not exceeding 15 months</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>AOC-4 &amp; MGT-7:</span> AOC-4 within 30 days of AGM | MGT-7 within 60 days | Rs 100/day penalty with NO cap</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Board Meetings:</span> Minimum 4 per year | Gap not exceeding 120 days | Minutes within 30 days</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Consequences:</span> 3 years non-filing = Section 164(2) director disqualification (5-year ban) | 2 years = strike-off risk</p>
                        </div>
                    </div>

                    <p class="mb-4 fw-bold" style="color: var(--blue); font-size: 15px;">Our Mumbai office is adjacent to ROC Everest House &ndash; 10,000+ businesses served with 4.9&#9733; Google rating</p>

                    <div class="hero-cta">
                        <a href="tel:+919459456700" class="btn-video text-decoration-none">
                            <span class="play-circle"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="width:14px;height:14px;color:#fff"><path d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/></svg></span>
                            Call +91 945 945 6700
                        </a>
                        <a href="mailto:sales@patronaccounting.com" class="btn-sample text-decoration-none">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="width:18px;height:18px;"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,12 2,6"/></svg>
                            Email Us
                        </a>
                        <a href="https://wa.me/919459456700?text=Hello%2C%20I%20just%20visited%20your%20Private%20Limited%20Company%20Compliance%20in%20Mumbai%20page.%20I%20would%20like%20to%20know%20more%20about%20it." target="_blank" class="btn-sample text-decoration-none" rel="noopener">
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
                                            'service'  => 'Pvt Ltd Compliance',
                                            'city'     => 'Mumbai',
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
    'ctaText'    => 'Get your Pvt Ltd compliance managed by a CA &amp; CS team adjacent to ROC Mumbai &ndash; one engagement covering all regulatory filings.',
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
            <a href="#overview-section" class="toc-btn active">Overview</a>
            <a href="#what-section" class="toc-btn">What Is</a>
            <a href="#who-section" class="toc-btn">Who Needs</a>
            <a href="#services-section" class="toc-btn">Services</a>
            <a href="#procedure-section" class="toc-btn">Process</a>
            <a href="#documents-section" class="toc-btn">Documents</a>
            <a href="#challenges-section" class="toc-btn">Challenges</a>
            <a href="#fees-section" class="toc-btn">Fees</a>
            <a href="#timeline-section" class="toc-btn">Calendar</a>
            <a href="#benefits-section" class="toc-btn">Benefits</a>
            <a href="#comparison-section" class="toc-btn">By Stage</a>
            <a href="#faq-section" class="toc-btn">FAQs</a>
        </div>
        <button class="toc-arrow right" id="tocRight">&#10095;</button>
    </div>
</div>

<!-- SECTION 2: OVERVIEW / INTRO + TL;DR -->
<section class="content-section" id="overview-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Pvt Ltd Company Compliance in Mumbai &ndash; Overview</h2>
            <div class="content-text">
                <div class="highlight-box" style="margin-bottom:20px;">
                    <p><strong>&#128204; TL;DR - Pvt Ltd Compliance Services at a Glance</strong></p>
                    <p>Pvt Ltd compliance is the complete set of annual, quarterly, and event-based filings every Pvt Ltd must complete. Core annual: AGM by 30 September, AOC-4 within 30 days, MGT-7 within 60 days, ADT-1 within 15 days, ITR-6 by 31 October, DPT-3 by 30 June. Minimum 4 Board Meetings per year. Penalty: Rs 100/day per form (no cap). Section 164(2): 3 years non-filing = ALL directors disqualified for 5 years from all directorships. 2 years non-filing = strike-off risk. Even dormant companies must file. 50+ compliance actions per year for active companies.</p>
                </div>
                <p>Mumbai has the highest number of Pvt Ltd registrations in India &ndash; Powai startups filing first AOC-4/MGT-7, BKC MNC subsidiaries with consolidated financials, Fort family businesses maintaining decade-long compliance, and Andheri companies juggling ROC, tax, GST, PF/ESI. Learn more about <a href="/private-limited-company-compliance">Pvt Ltd Compliance across India</a>.</p>
                <p>Patron Accounting's Mumbai office at Marine Lines &ndash; adjacent to ROC Everest House &ndash; provides end-to-end Pvt Ltd compliance as a single integrated engagement: accounts, statutory audit, AGM, AOC-4/MGT-7/ADT-1, ITR-6, DPT-3, MSME-1, GST/TDS/PF/ESI, DIR-3 KYC, and event-based filings. For <a href="/accounting-services">Accounting Services</a> and <a href="/statutory-audit">Statutory Audit</a>, see our dedicated pages.</p>
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
                <h2 class="section-title">What Is Pvt Ltd Company Compliance?</h2>
                <div class="content-text what-is-definition">
                    
                    <p>Pvt Ltd compliance is the legal obligation of every private limited company to file prescribed forms, hold meetings, maintain registers, conduct audits, and pay taxes within specified deadlines under the Companies Act, 2013, Income Tax Act, and other applicable laws.</p>
                    <p>The framework has three tiers: (1) Annual &ndash; AGM, AOC-4, MGT-7, ADT-1, ITR-6, DPT-3; (2) Periodic &ndash; Board Meetings quarterly, MSME-1 half-yearly, GST/TDS monthly/quarterly, PF/ESI monthly; (3) Event-based &ndash; DIR-12 (directors), PAS-3 (allotment), MGT-14 (special resolutions) within 30 days. For new companies, see <a href="/private-limited-company-registration">Private Limited Company Registration</a>.</p>
                    <p>A Powai startup may have 50+ individual compliance actions per year. Missing any deadline triggers penalties, and sustained non-compliance triggers director disqualification under Section 164(2). Patron manages the entire calendar for Mumbai companies.</p>

                </div>
                <div class="highlight-box" style="margin-top:20px;">
                    <p><strong>Key Terms for Pvt Ltd Compliance:</strong></p>
                    <ul>
                        <li><strong>AOC-4:</strong> Financial statements filed within 30 days of AGM &ndash; Balance Sheet, P&amp;L, auditor report</li>
                        <li><strong>MGT-7:</strong> Annual return within 60 days of AGM &ndash; shareholding, directors, meetings, compliance</li>
                        <li><strong>Section 164(2):</strong> Director disqualification for 5 years if 3 consecutive years non-filing</li>
                        <li><strong>DPT-3:</strong> Return of deposits and loans &ndash; filed annually by 30 June</li>
                        <li><strong>MSME-1:</strong> Outstanding MSME dues half-yearly &ndash; 30 April and 31 October</li>
                        <li><strong>Section 173:</strong> Minimum 4 Board Meetings per year, gap &le; 120 days</li>
                    </ul>

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
                            <text x="100" y="170" font-size="10" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial, sans-serif">Pvt Ltd Compliance</text>
                        </svg>
                    </div>
                    <div class="illustration-badge">
                        <span>CA &amp; CS Managed</span>
                        <strong>Pvt Ltd Compliance</strong>
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
            <h2 class="section-title">Which Mumbai Pvt Ltd Companies Need Compliance?</h2>
            <div class="content-text">
                
                <p><strong>Every registered Pvt Ltd &ndash; active or dormant</strong> &ndash; Even zero-revenue companies must hold 4 Board Meetings, 1 AGM, file AOC-4, MGT-7, ITR-6, appoint auditor, and file DIR-3 KYC. Non-filing for 3 years triggers Section 164(2) director disqualification. Patron files nil compliance at minimal cost.</p>
                <p><strong>Powai/Andheri startups post-incorporation</strong> &ndash; First Board Meeting within 30 days (auditor appointment ADT-1 mandatory from 14.07.2025), INC-20A, first AGM, first AOC-4/MGT-7. Patron includes in post-incorporation package.</p>
                <p><strong>BKC MNC subsidiaries</strong> &ndash; Consolidated AOC-4 CFS, transfer pricing, FEMA reporting (FC-GPR, FLA), related party approvals, SEBI compliance. Multiple foreign directors needing DIR-3 KYC. Patron manages integrated compliance.</p>
                <p><strong>Fort/Nariman Point family businesses</strong> &ndash; Continuous compliance history, succession-related changes, disqualification prevention. Patron provides annual compliance with governance advisory.</p>
                <p><strong>Growth-stage Andheri/Lower Parel companies</strong> &ndash; Scaling: PF/ESI applicability, tax audit trigger, MSME-1 filing, expanding obligations. Patron scales compliance as Mumbai companies grow.</p>

            </div>
            </div>
        </div>
    </div>
</section>

<!-- SECTION 5: OUR SERVICES -->
<section class="content-section" id="services-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Pvt Ltd Compliance Services Included</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Service</th><th>What We Do</th></tr></thead>
                    <tbody>
                        <tr><td>Accounts &amp; Statutory Audit</td><td>Books maintenance per S128. Balance Sheet, P&amp;L, Cash Flow. Statutory audit (mandatory for all). CARO where applicable. Patron begins audit April-May for 2-month buffer before AGM</td></tr>
                        <tr><td>Board Meeting Management (4/Year)</td><td>Schedule, notice (7 days), agenda, resolutions, minutes. Gap &le; 120 days. Quarterly financials approval. Patron manages full Board cycle including minute book</td></tr>
                        <tr><td>AGM Management</td><td>By 30 September. 21-day notice. Directors' Report (S134). Adopt financials, appoint auditor, declare dividend. Patron handles end-to-end AGM for Mumbai companies</td></tr>
                        <tr><td>AOC-4 Filing (30 Days of AGM)</td><td>Financial statements with ROC. Balance Sheet, P&amp;L, Cash Flow, Board Report, Auditor Report. AOC-4 CFS for subsidiaries. Pre-certified. Patron files within 15 days</td></tr>
                        <tr><td>MGT-7 Filing (60 Days of AGM)</td><td>Annual return: shareholding pattern, directors, meetings, compliance. CS certification if capital &ge; Rs 10 crore or turnover &ge; Rs 50 crore. Patron files within 30 days</td></tr>
                        <tr><td>ITR-6 &amp; Tax Audit</td><td>Income computation, MAT (S115JB), advance tax reconciliation, TDS credit. Tax audit Form 3CD by 30 September if turnover &gt; Rs 1 crore. Due 31 October</td></tr>
                        <tr><td>DPT-3, MSME-1, DIR-3 KYC</td><td>DPT-3 (deposits/loans) by 30 June. MSME-1 (outstanding dues &gt; 45 days) half-yearly. DIR-3 KYC triennial for all directors. Patron manages all ancillary filings</td></tr>
                        <tr><td>GST, TDS, PF/ESI, PT + Event-Based</td><td>GSTR-1/3B/9 monthly/quarterly. TDS 24Q/26Q quarterly. PF/ESI ECR monthly. Maharashtra PT. DIR-12, PAS-3, MGT-14, SH-7, CHG-1 within 30 days of event</td></tr>

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
            <h2 class="section-title">Pvt Ltd Annual Compliance Process in Mumbai</h2>
            <p class="section-subtitle" style="text-align:left;max-width:100%;">Patron files AOC-4 within 15 days and MGT-7 within 30 days of AGM (half the deadline). Audit completed by July. Adjacent to ROC Everest House.</p>
        </header>
        <div class="steps-container">
            <div class="step-card"><div class="step-content"><span class="step-badge">Step 1</span><h3 class="step-title">Books, Audit &amp; Board Meetings (Apr-Jul)</h3><p class="step-description">Finalise accounts after 31 March. Conduct statutory audit (mandatory for all Pvt Ltd). Hold minimum 4 Board Meetings throughout the year (gap &le; 120 days). Patron begins audit in April and completes by July for Mumbai companies, providing 2 months buffer before AGM.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Audit completed</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Board Meetings done</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="15" y="10" width="90" height="65" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><line x1="30" y1="30" x2="90" y2="30" stroke="#F5A623" stroke-width="3" stroke-linecap="round"/><circle cx="85" cy="55" r="10" fill="#E8F5E9" stroke="#10B981" stroke-width="1.2"/><path d="M80 55l3 3 6-6" stroke="#10B981" stroke-width="2" stroke-linecap="round"/></svg></div><span class="illustration-label">Books Ready</span><span class="step-number-large">01</span></div></div></div><div class="step-card"><div class="step-content"><span class="step-badge">Step 2</span><h3 class="step-title">AGM by 30 September</h3><p class="step-description">Prepare Directors' Report (Section 134). Issue 21-day AGM notice. Hold AGM: adopt financial statements, appoint/reappoint auditor, declare dividend (if any). File ADT-1 within 15 days (Patron: within 7 days). Patron manages AGM end-to-end for Mumbai companies.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>AGM held</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>ADT-1 filed</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="20" y="8" width="80" height="70" rx="4" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><circle cx="60" cy="35" r="15" fill="#FFF3E0" stroke="#F5A623" stroke-width="1.2"/><path d="M53 35l5 5 10-10" stroke="#10B981" stroke-width="2.5" stroke-linecap="round"/></svg></div><span class="illustration-label">AGM Done</span><span class="step-number-large">02</span></div></div></div><div class="step-card"><div class="step-content"><span class="step-badge">Step 3</span><h3 class="step-title">AOC-4 &amp; MGT-7 Filing</h3><p class="step-description">AOC-4 (financial statements) within 30 days of AGM &ndash; Patron files within 15 days. MGT-7 (annual return) within 60 days &ndash; Patron files within 30 days. Correct sequence: ADT-1 &rarr; AOC-4 &rarr; MGT-7. Pre-certified by CA/CS/CMA. Filing with 15-day buffer prevents penalty risk.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>AOC-4 filed</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>MGT-7 filed</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="20" y="10" width="80" height="60" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><rect x="35" y="25" width="50" height="8" rx="3" fill="#E8712C" opacity="0.3"/><path d="M80 55l-8 8-5-5" stroke="#10B981" stroke-width="2.5" stroke-linecap="round"/></svg></div><span class="illustration-label">ROC Filed</span><span class="step-number-large">03</span></div></div></div><div class="step-card"><div class="step-content"><span class="step-badge">Step 4</span><h3 class="step-title">ITR-6 &amp; Ongoing Compliance</h3><p class="step-description">ITR-6 by 31 October with MAT computation, advance tax reconciliation. Tax audit (Form 3CD) by 30 September if applicable. Plus: DPT-3 by 30 June, MSME-1 half-yearly, DIR-3 KYC (triennial), GST/TDS/PF/ESI returns monthly/quarterly. Patron manages the full annual cycle.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>ITR-6 filed</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Year complete</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="25" y="10" width="70" height="55" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><circle cx="60" cy="35" r="18" fill="#E8F5E9" stroke="#10B981" stroke-width="1.5"/><path d="M52 35l6 6 12-12" stroke="#10B981" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/></svg></div><span class="illustration-label">All Complete</span><span class="step-number-large">04</span></div></div></div>

        </div>
    </div>
</section>

<!-- SECTION 8: DOCUMENTS REQUIRED -->
<section class="content-section" id="documents-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Documents Required for Pvt Ltd Compliance in Mumbai</h2>
            <div class="content-text">
                
                <ul>
                    <li><strong>Bank Statements:</strong> All accounts for full financial year</li>
                    <li><strong>Sales/Purchase Invoices:</strong> All revenue and expense invoices</li>
                    <li><strong>Fixed Asset Register:</strong> For depreciation computation</li>
                    <li><strong>Loan/Deposit Documentation:</strong> For DPT-3 disclosure</li>
                    <li><strong>MSME Vendor List:</strong> Outstanding payments beyond 45 days for MSME-1</li>
                    <li><strong>Previous Year AOC-4/MGT-7:</strong> For continuity verification</li>
                    <li><strong>Auditor's Consent &amp; Eligibility:</strong> For ADT-1</li>
                    <li><strong>DSC of Directors:</strong> Valid for all signing directors</li>
                    <li><strong>Shareholding Pattern:</strong> Current register of members for MGT-7</li>
                    <li><strong>Board Meeting Minutes:</strong> For all 4+ meetings during the year</li>
                </ul>
                <div class="highlight-box" style="margin-top:16px;">
                    <p><strong>Mumbai-Specific Tip:</strong> For Powai startups that raised funding during the year, annual compliance must reflect: share allotment (PAS-3), updated shareholding in MGT-7, investment in financial statements, and new director appointments (DIR-12). Patron integrates fundraising compliance with annual filing for consistency across all forms.</p>
                </div>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 9: CHALLENGES -->
<section class="content-section" id="challenges-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Common Challenges in Pvt Ltd Compliance in Mumbai</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Challenge</th><th>Impact</th><th>How Patron Accounting Solves It</th></tr></thead>
                    <tbody>
                        <tr><td>Section 164(2) Director Disqualification</td><td>3 years non-filing of AOC-4/MGT-7 disqualifies ALL directors from ALL companies for 5 years. One non-compliant company affects all directorships</td><td>Filing status monitored for all director companies. Alerts sent for disqualification risks. Priority filing for approaching 2-year threshold</td></tr>
                        <tr><td>Dormant Company Penalty Accumulation</td><td>Rs 100/day per form (no cap). AOC-4 + MGT-7 delayed 1 year = Rs 73,000. Plus director disqualification risk</td><td>Advise: nil compliance (Rs 10,000/year) or company closure via STK-2 (Rs 15,000 one-time). Cost-benefit analysis provided</td></tr>
                        <tr><td>Filing Sequence Errors</td><td>MCA requires: ADT-1 &rarr; AOC-4 &rarr; MGT-7. Out of sequence = system rejection. Many attempt MGT-7 before AOC-4</td><td>Correct sequence managed every time. ADT-1 within 7 days, AOC-4 within 15 days, MGT-7 within 30 days of AGM</td></tr>
                        <tr><td>Audit Delay Cascading</td><td>Late audit delays AGM, which delays AOC-4, which delays MGT-7. Entire compliance chain collapses</td><td>Audit begins April-May, completed by July. 2-month buffer before AGM. No cascading delays for Mumbai companies</td></tr>
                        <tr><td>Multiple Regulatory Coordination</td><td>5+ regulators: MCA, Income Tax, GST, PF, ESI, Maharashtra PT. Missing any one creates compliance gap</td><td>Single-point integrated CA+CS team. One engagement covers all regulatory filings. No coordination gaps</td></tr>

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
            <h2 class="section-title">Pvt Ltd Compliance Fees in Mumbai</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Fee Component</th><th>Amount</th></tr></thead>
                    <tbody>
                        <tr><td>AOC-4 / MGT-7 Filing Fee</td><td>Rs 200 (small company) / Rs 600 (others) per form</td></tr>
                        <tr><td>Late Filing Penalty (AOC-4/MGT-7)</td><td>Rs 100/day per form &ndash; NO CAP (accumulates indefinitely)</td></tr>
                        <tr><td>Section 164(2) Disqualification</td><td>3 years non-filing = 5-year director ban from ALL companies</td></tr>
                        <tr><td>Statutory Audit Fees</td><td>Rs 10,000 &ndash; Rs 1,00,000+ (based on company size and complexity)</td></tr>
                        <tr><td>Patron Fee &ndash; Nil/Small Company</td><td>Starting Rs 10,000/year (audit + AOC-4 + MGT-7 + ADT-1 + ITR-6 + Board Meetings)</td></tr>
                        <tr><td>Patron Fee &ndash; Active Pvt Ltd</td><td>Starting Rs 25,000/year (accounts + audit + AGM + AOC-4 + MGT-7 + ITR-6 + DPT-3 + DIR-3 KYC)</td></tr>
                        <tr><td>Patron Fee &ndash; Full Package (GST/TDS/PF)</td><td>Starting Rs 50,000/year (all ROC + tax + GST + TDS + PF/ESI + PT compliance)</td></tr>
                        <tr><td>Patron Fee &ndash; Pending Returns (Per Year)</td><td>Starting Rs 15,000/year (plus government penalties; priority processing)</td></tr>
                        <tr><td>Patron Fee &ndash; Company Closure</td><td>Starting Rs 15,000 (STK-2 filing + ROC coordination)</td></tr>

                    </tbody>
                </table>
                </div>
                <p style="margin-top:16px;font-size:13px;color:var(--text-muted);font-style:italic;">All fees and charges listed are indicative only and do not constitute a binding offer. Final amounts may vary depending on the volume of work and the complexity involved.</p>
                <p style="margin-top:16px;">Professional service charges for drafting, filing, and representation are separate from the statutory fees. The exact fee depends on the complexity of the case, disputed amount, and number of hearings required. Contact us for a detailed quote.</p>
                <p style="margin-top:16px;"><strong>Get a free Pvt Ltd Compliance consultation - <a href="tel:+919459456700">Call +91 945 945 6700</a> or <a href="https://wa.me/919459456700?text=Hello%2C%20I%20just%20visited%20your%20Private%20Limited%20Company%20Compliance%20in%20Mumbai%20page.%20I%20would%20like%20to%20know%20more%20about%20it." target="_blank" rel="noopener">WhatsApp us</a>. No-obligation assessment.</strong></p>
            </div>
        </div>
    </div>
</section>

<!-- SECTION 11: TIMELINE -->
<section class="content-section" id="timeline-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Month-Wise Compliance Calendar (FY 2025-26)</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Stage</th><th>Estimated Timeline</th></tr></thead>
                    <tbody>
                        <tr><td>April 2026</td><td>Finalise accounts | Q4 Board Meeting | MSME-1 H2 (30 April)</td></tr>
                        <tr><td>May-June 2026</td><td>Begin statutory audit | TDS Q4 (31 May) | DPT-3 (30 June) | Advance tax Q1 (15 June)</td></tr>
                        <tr><td>July 2026</td><td>Complete audit | TDS Q1 (31 July) | Board Meeting</td></tr>
                        <tr><td>August-September 2026</td><td>AGM notice (21 days) | AGM by 30 September | Tax audit (30 September)</td></tr>
                        <tr><td>October 2026</td><td>ADT-1 (15 days) | AOC-4 (30 days) | ITR-6 (31 October) | TDS Q2 | MSME-1 H1 (31 October)</td></tr>
                        <tr><td>November 2026</td><td>MGT-7 (60 days from AGM ~29 November)</td></tr>
                        <tr><td>December-March 2027</td><td>DIR-3 KYC (triennial) | Board Meetings | TDS Q3 (31 January) | Advance tax (15 March) | Year-end closing</td></tr>
                        <tr><td>Ongoing</td><td>GST returns (GSTR-1/3B monthly) | PF/ESI ECR (15th monthly) | Maharashtra PT</td></tr>

                    </tbody>
                </table>
                </div>
                <div class="highlight-box" style="margin-top:16px;">
                    
                    <p><strong>Section 164(2) director disqualification is the most severe consequence.</strong> 3 years non-filing of AOC-4 or MGT-7 disqualifies ALL directors from ALL companies for 5 years. For Mumbai directors serving on multiple boards, one non-compliant company can destroy all directorships. Patron files AOC-4 within 15 days and MGT-7 within 30 days of AGM &ndash; half the deadline &ndash; with built-in buffer to prevent any risk.</p>

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
            <h2 class="section-title">Why Choose Patron for Pvt Ltd Compliance in Mumbai</h2>
        </div>
        <div class="features-grid">
            <article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><h3 class="feature-title">Adjacent to ROC Everest House</h3><p class="feature-text">AOC-4, MGT-7, and all MCA filings processed by ROC at Everest House. For urgent filings, strike-off prevention, or ROC query resolution, proximity enables fastest coordination.</p></article>
            <article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg></div><h3 class="feature-title">Single-Point Integrated Compliance</h3><p class="feature-text">MCA (AOC-4, MGT-7, ADT-1, DPT-3, MSME-1), Income Tax (ITR-6, TDS, tax audit), GST, PF/ESI, Maharashtra PT, DIR-3 KYC &ndash; one engagement, one team, one calendar. No coordination gaps.</p></article>
            <article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="2" y="3" width="20" height="14" rx="2"/><path d="M8 21h8M12 17v4"/></svg></div><h3 class="feature-title">Buffer-First Filing Strategy</h3><p class="feature-text">AOC-4 within 15 days (not 30). MGT-7 within 30 days (not 60). Audit by July (not September). Every filing completed at half the deadline with built-in buffer.</p></article>
            <article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M14 2H6a2 2 0 00-2 2v16a2 2 0 002 2h12a2 2 0 002-2V8z"/><path d="M14 2v6h6"/></svg></div><h3 class="feature-title">164(2) Disqualification Prevention</h3><p class="feature-text">Filing status monitored for every Mumbai client company. Approaching 2-year non-filing? Priority filing activated. Directors on multiple boards? All company compliances checked for disqualification risk.</p></article>
        </div>
    </div>
</section>

<!-- SECTION 12A: SOCIAL PROOF -->
<section class="content-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Trusted by Mumbai Pvt Ltd Companies</h2>
            <div class="content-text">
                
                <p><strong>Trust Signals:</strong> 10,000+ Businesses | 4.9 Google Rating | 50,000+ Documents Filed | 15+ Years</p>
                <blockquote style="border-left:3px solid var(--orange);padding:12px 20px;margin:16px 0;background:var(--orange-lighter);border-radius:0 var(--radius-sm) var(--radius-sm) 0;">
                    <p style="font-style:italic;margin-bottom:8px;">&ldquo;Patron manages our entire compliance &ndash; ROC, tax, GST, TDS, PF/ESI &ndash; as one package. Before Patron, we had 3 different firms and still missed deadlines because no one owned the overall calendar. Now we never miss a date.&rdquo;</p>
                    <p style="font-size:13px;font-weight:700;color:var(--blue);margin:0;">&mdash; Director, IT Services Company, BKC</p>
                </blockquote>
                <p>Offices in Pune, Mumbai, Delhi, and Gurugram serving private limited companies with annual compliance, audit, and governance services.</p>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 13: SELF-FILING vs PROFESSIONAL COMPARISON -->
<section class="content-section" id="comparison-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Compliance Requirements by Company Stage</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Stage</th><th>Mumbai Example</th><th>Key Compliance</th><th>Patron Package</th></tr></thead>
                    <tbody>
                        <tr><td>Newly Incorporated (Year 1)</td><td>Powai startup, 2 founders, no revenue</td><td>INC-20A + ADT-1 + first AGM + first AOC-4/MGT-7 + ITR-6 (nil) + 4 Board Meetings</td><td>Starting Rs 15,000</td></tr>
                        <tr><td>Seed/Pre-Revenue</td><td>Powai startup, angel investment</td><td>All Year 1 + PAS-3 (allotment) + DIR-12 (new directors) + DPT-3 + GST registration</td><td>Starting Rs 20,000</td></tr>
                        <tr><td>Growth (Revenue &lt; Rs 1 Cr)</td><td>Andheri services, 10 employees</td><td>Full annual + GST returns + TDS + PF registration + ESI</td><td>Starting Rs 35,000</td></tr>
                        <tr><td>Scale-Up (Rs 1-10 Cr)</td><td>BKC IT company, 50 employees, VC-funded</td><td>Full + tax audit + MSME-1 + complex ITR-6 + multiple event-based filings</td><td>Starting Rs 50,000</td></tr>
                        <tr><td>Established (&gt; Rs 10 Cr)</td><td>BKC MNC subsidiary, 200 employees</td><td>Full + CS certification (MGT-7) + CARO + transfer pricing + FEMA + consolidated accounts</td><td>Custom pricing</td></tr>
                        <tr><td>Dormant/Inactive</td><td>Fort company, ceased operations</td><td>Nil AOC-4 + MGT-7 + ITR-6 + 4 Board Meetings + DIR-3 KYC</td><td>Starting Rs 10,000</td></tr>

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
                
                <p>Explore related services:</p>
                <ul>
                    <li><a href="/private-limited-company-compliance">Pvt Ltd Compliance (India Overview)</a></li>
                    <li><a href="/accounting-services">Accounting Services</a></li>
                    <li><a href="/statutory-audit">Statutory Audit</a></li>
                    <li><a href="/income-tax-return">Income Tax Return Filing</a></li>
                    <li><a href="/gst-returns">GST Returns</a></li>
                    <li><a href="/appointment-of-auditor">Appointment of Auditor</a></li>
                    <li><a href="/appointment-of-director">Appointment of Director</a></li>
                    <li><a href="/gst-registration/mumbai">GST Registration in Mumbai</a></li>
                </ul>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 15A: LEGAL FRAMEWORK -->
<section class="content-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Legal &amp; Compliance Framework for Pvt Ltd Companies</h2>
            <div class="content-text">
                
                <ul>
                    <li><strong>Section 92:</strong> Annual return (MGT-7) within 60 days of AGM</li>
                    <li><strong>Section 96:</strong> AGM within 6 months of FY end (30 September)</li>
                    <li><strong>Section 129/137:</strong> Financial statements (AOC-4) within 30 days of AGM</li>
                    <li><strong>Section 134:</strong> Directors' Report &ndash; mandatory contents</li>
                    <li><strong>Section 139:</strong> Auditor appointment &ndash; ADT-1 within 15 days</li>
                    <li><strong>Section 173:</strong> Board Meetings &ndash; minimum 4/year, gap &le; 120 days</li>
                    <li><strong>Section 164(2):</strong> Director disqualification for 3 years non-filing</li>
                    <li><strong>DPT-3:</strong> Deposits/loans return &ndash; due 30 June annually</li>
                    <li><strong>MSME-1:</strong> Outstanding MSME dues &ndash; 30 April and 31 October</li>
                    <li><strong>ITR-6:</strong> Company income tax return &ndash; due 31 October (all Pvt Ltd require audit)</li>
                    <li><strong>Section 44AB:</strong> Tax audit if turnover &gt; Rs 1 crore</li>
                    <li><strong>Penalty:</strong> Rs 100/day per form (AOC-4/MGT-7) with no cap</li>
                    <li><strong>ROC Mumbai:</strong> Everest House, 100 Marine Lines, Mumbai 400020</li>
                </ul>
                <p><strong>Filing Portals:</strong> <a href="https://www.mca.gov.in" target="_blank" rel="noopener">mca.gov.in</a> | <a href="https://www.incometax.gov.in" target="_blank" rel="noopener">incometax.gov.in</a></p>

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
                    <h2 class="faq-expanded__title">Frequently Asked Questions &ndash; Pvt Ltd Compliance in Mumbai</h2>
                    <p class="faq-expanded__lead">Get answers about AGM, AOC-4, MGT-7, ITR-6, Board Meetings, dormant companies, director disqualification, filing sequence, and tax audit for Mumbai Pvt Ltd companies.</p>
                    @include('partials.bigin-form', [
                        'variant'  => 'compact',
                        'service'  => 'Pvt Ltd Compliance',
                        'city'     => 'Mumbai',
                    ])
                </aside>
                <div class="faq-expanded__list">
                    <div class="faq-expanded__item" id="faq-1">
                        <h3 class="faq-expanded__q">Which ROC handles Pvt Ltd filings in Mumbai?</h3>
                        <div class="faq-expanded__a"><p>ROC Mumbai at Everest House, 100 Marine Lines processes AOC-4, MGT-7, ADT-1, DIR-12 and all MCA filings on MCA V3 portal. Income tax to CIT Mumbai. GST to GST portal. Patron's Marine Lines office is adjacent to ROC Everest House for any coordination needed.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-2">
                        <h3 class="faq-expanded__q">What are the mandatory annual filings?</h3>
                        <div class="faq-expanded__a"><p>Core: AGM by 30 September, AOC-4 within 30 days, MGT-7 within 60 days, ADT-1 within 15 days, ITR-6 by 31 October, DPT-3 by 30 June. Plus 4 Board Meetings, DIR-3 KYC (triennial), MSME-1 if applicable, GST/TDS/PF/ESI returns. 50+ compliance actions per year. Patron manages all in one engagement.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-3">
                        <h3 class="faq-expanded__q">What is the penalty for late filing?</h3>
                        <div class="faq-expanded__a"><p>AOC-4/MGT-7: Rs 100/day per form with NO cap. 1 year delay on both: Rs 73,000. Director disqualification under Section 164(2) after 3 consecutive years (5-year ban from ALL directorships). Strike-off after 2 years. Patron files with 15-day buffer to prevent all penalties.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-4">
                        <h3 class="faq-expanded__q">Does a dormant company need to file?</h3>
                        <div class="faq-expanded__a"><p>Yes. File nil AOC-4, MGT-7, ITR-6, hold 4 Board Meetings, 1 AGM, DIR-3 KYC. Non-filing: Rs 100/day penalty + director disqualification after 3 years. Patron advises: nil compliance (Rs 10,000/year) or close company via STK-2 (Rs 15,000 one-time) to stop all obligations.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-5">
                        <h3 class="faq-expanded__q">What is Section 164(2) director disqualification?</h3>
                        <div class="faq-expanded__a"><p>If company fails to file AOC-4 or MGT-7 for 3 consecutive years, ALL directors disqualified from being directors in ANY company for 5 years. Director on 5 boards loses all 5. Even directors who joined after non-filing began are affected. Patron monitors all company filings to prevent this.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-6">
                        <h3 class="faq-expanded__q">What is the correct filing sequence after AGM?</h3>
                        <div class="faq-expanded__a"><p>MCA V3 enforces: ADT-1 (15 days) &rarr; AOC-4 (30 days) &rarr; MGT-7 (60 days). AOC-4 must be before MGT-7 (system blocks). Filing out of sequence causes rejection. Patron manages correct sequence: ADT-1 within 7 days, AOC-4 within 15 days, MGT-7 within 30 days.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-7">
                        <h3 class="faq-expanded__q">How many Board Meetings are required?</h3>
                        <div class="faq-expanded__a"><p>Minimum 4 per year with gap &le; 120 days. Small companies/OPC: minimum 2, gap &le; 90 days. 7 days advance notice (waivable with all directors' consent). Minutes signed within 30 days. Patron schedules all Board Meetings at year start for Mumbai companies.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-8">
                        <h3 class="faq-expanded__q">When is tax audit required?</h3>
                        <div class="faq-expanded__a"><p>Section 44AB: turnover &gt; Rs 1 crore (Rs 2 crore if cash &lt; 5%). Form 3CD by 30 September. Statutory audit (Companies Act) mandatory for ALL Pvt Ltd regardless of turnover. Patron conducts both audits for eligible Mumbai companies.</p></div>
                    </div>
                </div>
            </div>


            <!-- Quick Answers -->
            <div class="highlight-box" style="margin-top:32px;">
                <p><strong>Quick Answers</strong></p>
                <p><strong>Pvt Ltd mein har saal kya karna padta hai?</strong> Minimum 4 Board Meetings (120 din ka gap), AGM 30 September tak, AOC-4 AGM ke 30 din mein, MGT-7 60 din mein, ADT-1 15 din mein, ITR-6 31 October tak, DPT-3 30 June tak, DIR-3 KYC triennial, GST/TDS/PF/ESI monthly. Patron sab ek saath handle karta hai.</p>
                <p><strong>Company dormant hai &ndash; phir bhi file karna padta hai?</strong> Haan! Nil returns file karo. 3 saal nahi file kiya toh Section 164(2) mein directors disqualify &ndash; 5 saal kisi bhi company mein director nahi ban sakte. Patron nil compliance Rs 10,000/saal se karta hai ya company band karo Rs 15,000 mein.</p>
                <p><strong>AOC-4 aur MGT-7 late pe kitni penalty?</strong> Rs 100/din per form, koi limit nahi. Dono 1 saal late = Rs 73,000. 3 saal late = Rs 2,19,000 + directors disqualified. Patron AGM ke 15 din mein AOC-4 aur 30 din mein MGT-7 file karta hai.</p>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 18: URGENCY CTA -->
<section class="content-section" style="background: var(--orange-lighter) !important; border-left: 4px solid var(--orange);">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Don't Risk Director Disqualification &ndash; Get Your Pvt Ltd Compliant Today</h2>
            <div class="content-text">
                
                <p>Section 164(2) disqualification is the most severe consequence &ndash; 3 years non-filing bans ALL directors from ALL companies for 5 years. The compliance chain cascades: late audit delays AGM, which delays AOC-4, which delays MGT-7. Rs 100/day penalty accumulates without cap. 2 years non-filing triggers ROC strike-off.</p>
                <p><strong>Get your Pvt Ltd compliant today &ndash; <a href="tel:+919459456700">Call +91 945 945 6700</a> or <a href="https://wa.me/919459456700?text=Hello%2C%20I%20just%20visited%20your%20Private%20Limited%20Company%20Compliance%20in%20Mumbai%20page.%20I%20would%20like%20to%20know%20more%20about%20it." target="_blank" rel="noopener">WhatsApp us</a>.</strong></p>

            </div>
        </div>
    </div>
</section>

<!-- CONCLUSION + CTA BLOCK (Dark) -->
<section class="content-section" style="background: var(--blue) !important;">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title" style="color:#FFFFFF !important;">Get End-to-End Pvt Ltd Compliance in Mumbai</h2>
            <div class="content-text" style="text-align:left;">
                
                <p style="color:rgba(255,255,255,0.85);font-size:16px;line-height:1.7;">Pvt Ltd compliance in Mumbai covers the most comprehensive regulatory framework &ndash; from Board Meetings and AGM to AOC-4/MGT-7/ADT-1, from statutory audit and ITR-6 to DPT-3/MSME-1, from GST/TDS to PF/ESI/PT, plus DIR-3 KYC and all event-based filings. 50+ compliance actions per year for active companies.</p>
                <p style="color:rgba(255,255,255,0.85);font-size:16px;line-height:1.7;">Patron Accounting's Mumbai office at Marine Lines &ndash; adjacent to ROC Everest House &ndash; provides end-to-end compliance as a single integrated engagement: accounts, audit, AGM, all ROC filings with 15-day buffers, ITR-6 with tax planning, GST/TDS/PF/ESI, DIR-3 KYC, Section 164(2) monitoring, and dormant company advisory.</p>
                <p style="color:rgba(255,255,255,0.85);font-size:16px;line-height:1.7;">With offices in Pune, Mumbai, Delhi, and Gurugram, 10,000+ businesses served, and 4.9 Google rating, Patron Accounting LLP delivers compliant corporate governance across India.</p>

            </div>
            <div style="display:flex;gap:14px;flex-wrap:wrap;margin-top:24px;">
                <a href="tel:+919459456700" style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:var(--orange);color:#fff;border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#128222; Call +91 945 945 6700</a>
                <a href="https://wa.me/919459456700?text=Hello%2C%20I%20just%20visited%20your%20Private%20Limited%20Company%20Compliance%20in%20Mumbai%20page.%20I%20would%20like%20to%20know%20more%20about%20it." target="_blank" style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:#25D366;color:#fff;border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;" rel="noopener">&#128172; WhatsApp Us</a>
                <a href="mailto:sales@patronaccounting.com" style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:transparent;color:#fff;border:2px solid rgba(255,255,255,0.3);border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#9993;&#65039; Email Us</a>
            </div>
            <p style="color:rgba(255,255,255,0.7);font-size:13px;margin-top:16px;">Book a Free Consultation - No Obligation.</p>
        </div>
    </div>
</section>

<!-- GSTAT STATE BENCH CITY PAGES (32 Pages) -->
<section class="content-section" style="padding:48px 32px;background:var(--gray-50);">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title" style="text-align:center;margin-bottom:12px;">Pvt Ltd Compliance Across India</h2>
            <p style="text-align:center;color:var(--text-muted);font-size:15px;margin-bottom:40px;">Patron Accounting handles Pvt Ltd compliance in major cities with integrated ROC, tax, and GST filing expertise.</p>
        
            <div class="pa-city-block" style="margin-bottom:40px;">
                        <div class="pa-block-title">Pvt Ltd Compliance in Other Cities</div>
                        <div class="pa-block-sub">Professional company compliance across India</div>
                        <div class="pa-city-grid">
                            <a href="/private-limited-company-compliance/pune" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Pune</div><div class="pa-card-sub">Maharashtra</div></div></a>
                            <div class="pa-city-card" style="opacity:0.6; pointer-events:none; border:2px solid var(--orange); position:relative;"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Mumbai</div><div class="pa-card-sub">Maharashtra</div></div><span style="position:absolute; top:6px; right:8px; font-size:10px; color:var(--orange); font-weight:700; text-transform:uppercase; letter-spacing:0.5px;">You're here</span></div>
                            <a href="/private-limited-company-compliance/delhi" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Delhi</div><div class="pa-card-sub">Delhi NCR</div></div></a>
                            <a href="/private-limited-company-compliance/gurugram" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Gurugram</div><div class="pa-card-sub">Haryana</div></div></a>
                        </div>
                    </div>
                    <div class="pa-city-block">
                        <div class="pa-block-title">Related Services in Mumbai</div>
                        <div class="pa-block-sub">End-to-end corporate governance</div>
                        <div class="pa-cross-grid">
                            <a href="/private-limited-company-registration/mumbai" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Pvt Ltd Registration</div><div class="pa-card-sub">Mumbai</div></div></a>
                            <a href="/income-tax-return/mumbai" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Income Tax Return</div><div class="pa-card-sub">Mumbai</div></div></a>
                            <a href="/gst-registration/mumbai" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">GST Registration</div><div class="pa-card-sub">Mumbai</div></div></a>
                            <a href="/startup-registration/mumbai" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Startup Registration</div><div class="pa-card-sub">Mumbai</div></div></a>
                            <a href="/trademark-registration/mumbai" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Trademark Registration</div><div class="pa-card-sub">Mumbai</div></div></a>
                            <a href="/payroll-services/mumbai" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Payroll Services</div><div class="pa-card-sub">Mumbai</div></div></a>
                        </div>
                    </div>
        </div>
    </div>
</section>

<!-- CONTENT FRESHNESS FOOTER -->
<section class="content-section" style="padding:32px;">
    <div class="content-container">
        <div class="text-content" style="font-size:13px;color:var(--text-muted);">
            <p><strong>Content Created:</strong> 24 March 2026 &nbsp;|&nbsp; <strong>Last Updated:</strong> <span id="lastUpdatedFooter">24 March 2026</span> &nbsp;|&nbsp; <strong>Next Review:</strong> 24 June 2026 &nbsp;|&nbsp; <strong>Reviewed By:</strong> CA &amp; CS Team, Patron Accounting LLP</p>
            <p>This content is reviewed quarterly for accuracy of MCA rules, Companies Act amendments, and tax provisions. Freshness Tier: 1.</p>
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
