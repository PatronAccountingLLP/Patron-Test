

@extends('layouts.service-app')

<!-- External Dependencies (loaded by master layout in production) -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Barlow:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,400&family=DM+Sans:opsz,wght@9..40,400;9..40,500;9..40,600;9..40,700&display=swap" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

@section('meta')
    <title>Issue of Shares - Allotment, PAS-3, Board Resolution & ROC</title>
    <meta name="description" content="Issue shares via rights, bonus or private placement under Sections 42 and 62 Companies Act 2013. Board resolution, PAS-3, MGT-14 filing. From INR 4,999.">
    <link rel="canonical" href="/issue-of-shares">
    <meta name="robots" content="index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1">
    <meta property="og:title" content="Issue of Shares - Allotment, PAS-3, Board Resolution & ROC">
    <meta property="og:description" content="Issue shares via rights, bonus or private placement under Sections 42 and 62 Companies Act 2013. Board resolution, PAS-3, MGT-14 filing. From INR 4,999.">
    <meta property="og:url" content="/issue-of-shares">
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="Patron Accounting">
    <meta property="og:image" content="https://www.patronaccounting.com/images/og-default-square.png">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="1200">
    <meta property="og:image:type" content="image/png">
    <meta property="og:image:secure_url" content="https://www.patronaccounting.com/images/og-default-square.png">
    <meta property="og:image:alt" content="Patron Accounting - partner you can rely on">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Issue of Shares - Allotment, PAS-3, Board Resolution & ROC">
    <meta name="twitter:description" content="Issue shares via rights, bonus or private placement under Sections 42 and 62 Companies Act 2013. Board resolution, PAS-3, MGT-14 filing. From INR 4,999.">
    <meta name="twitter:image" content="https://www.patronaccounting.com/images/og-default-square.png">
@endsection

@section('schema')
    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@graph": [
        {
          "@type": "Service",
          "name": "Issue of Shares: Rights, Bonus and Private",
          "description": "Issue shares via rights, bonus or private placement under Sections 42 and 62 Companies Act 2013. Board resolution, PAS-3, MGT-14 filing. From INR 4,999.",
          "url": "https://www.patronaccounting.com/issue-of-shares",
          "serviceType": "Issue of Shares: Rights, Bonus and Private",
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
            "url": "https://www.patronaccounting.com/issue-of-shares",
            "price": "2"
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
              "name": "Issue of Shares: Rights, Bonus and Private",
              "item": "https://www.patronaccounting.com/issue-of-shares"
            }
          ]
        },
        {
          "@type": "FAQPage",
          "mainEntity": [
            {
              "@type": "Question",
              "name": "What is the difference between rights issue and private placement?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "Rights issue under Section 62(1)(a) is offered pro-rata to existing shareholders without Special Resolution. Private placement under Section 42 is offered to up to 200 identified persons, requires Special Resolution, PAS-4 offer letter, and registered valuer report. Rights issue is faster; private placement allows onboarding new investors."
              }
            },
            {
              "@type": "Question",
              "name": "Which form is filed for return of allotment?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "Form PAS-3 is filed with ROC within 30 days of allotment for rights/bonus issue, and within 15 days for private placement, under Section 39(4) of Companies Act 2013."
              }
            },
            {
              "@type": "Question",
              "name": "Can bonus shares be issued from revaluation reserves?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "No. Section 63(1) explicitly prohibits bonus shares from revaluation reserves. Only free reserves, securities premium account, and capital redemption reserve are permitted sources."
              }
            },
            {
              "@type": "Question",
              "name": "What is the penalty for private placement non-compliance?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "Under Section 42(10), penalty extends to amount raised or INR 2 crore (whichever lower) plus refund of all application money at 12% p.a. within 30 days. If offered to 200+ persons, deemed public offer and SEBI regulations apply."
              }
            },
            {
              "@type": "Question",
              "name": "Do private companies need to issue shares in demat form?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "Yes, from June 30, 2025 under Rule 9B. All private companies other than small companies (paid-up capital up to INR 10 crore, turnover up to INR 100 crore from December 2025) must issue shares exclusively in demat form."
              }
            },
            {
              "@type": "Question",
              "name": "What is the maximum number of persons for private placement?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "200 identified persons per FY per type of security, with max 50 per individual offer. QIBs and ESOP employees excluded from the count. The limit applies separately to equity, preference, and debentures."
              }
            },
            {
              "@type": "Question",
              "name": "Is an EGM required for a rights issue?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "No. Rights issue under Section 62(1)(a) does not require EGM or Special Resolution. The Board of Directors can approve via Board Resolution, making it the fastest route for capital raising from existing shareholders. Quick Answers Which form for return of allotment? PAS-3 filed within 30 days (rights/bonus) or 15 days (private placement). Bonus from revaluation reserves? No. Section 63(1) explicitly prohibits it. Only free reserves and securities premium permitted. Max persons for private placement? 200 per FY per security type; 50 per individual offer. QIBs and ESOP excluded. EGM needed for rights issue? No. Board Resolution is sufficient under Section 62(1)(a) - fastest route for capital raising."
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
                        Issue of Shares in India - Rights, Bonus, Private Placement Under Companies Act 2013
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
                            <p class="mb-0 text-dark benefit-paragraph"><span>Four Routes:</span> Rights Issue (Section 62), Bonus Issue (Section 63), Private Placement (Section 42), and Preferential Allotment - each with specific compliance</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>PAS-3 Within 30 Days:</span> Return of allotment must be filed with ROC within 30 days of allotment (15 days for private placement)</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Rule 9B Demat Mandate:</span> From June 30, 2025 - non-small private companies must issue all shares only in dematerialised form</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Penalty Up to INR 2 Crore:</span> Private placement non-compliance attracts penalty up to amount raised or INR 2 crore (whichever lower) + refund at 12% p.a.</p>
                        </div>
                    </div>

                    <p class="mb-4 fw-bold" style="color: var(--blue); font-size: 15px;">500+ share issuances assisted | 100% on-time PAS-3 filing | Expert CA and CS team</p>

                    <div class="hero-cta">
                        <a href="tel:+919459456700" class="btn-video text-decoration-none">
                            <span class="play-circle"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="width:14px;height:14px;color:#fff"><path d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/></svg></span>
                            Call +91 945 945 6700
                        </a>
                        <a href="mailto:sales@patronaccounting.com?subject=Share%20Issuance%20Enquiry&body=Hello%20Patron%20Accounting.%0A%0APlease%20share%20details%20for%20issue%20of%20shares%20service.%0A%0AThank%20you." class="btn-sample text-decoration-none">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="width:18px;height:18px;"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,12 2,6"/></svg>
                            Email Us
                        </a>
                        <a href="https://wa.me/919459456700?text=Hi%2C%20I%20need%20help%20with%20issue%20of%20shares%20in%20my%20company.%20Please%20share%20details." target="_blank" class="btn-sample text-decoration-none">
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
                                            'service'  => 'Issue of Shares',
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
    'ctaText'    => 'Join 500+ companies who trust Patron Accounting for compliant share issuance.',
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
            <a href="#overview-section" class="toc-btn active">Overview</a><a href="#what-section" class="toc-btn">What Is It</a><a href="#who-section" class="toc-btn">Types</a><a href="#services-section" class="toc-btn">Our Services</a><a href="#procedure-section" class="toc-btn">Process</a><a href="#documents-section" class="toc-btn">Forms</a><a href="#challenges-section" class="toc-btn">Mistakes</a><a href="#fees-section" class="toc-btn">Fees</a><a href="#timeline-section" class="toc-btn">Deadlines</a><a href="#benefits-section" class="toc-btn">Why Us</a><a href="#comparison-section" class="toc-btn">Rights vs PP</a><a href="#faq-section" class="toc-btn">FAQs</a>
        </div>
        <button class="toc-arrow right" id="tocRight">&#10095;</button>
    </div>
</div>

<!-- SECTION 2: OVERVIEW / INTRO + TL;DR -->
<section class="content-section" id="overview-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Issue of Shares - Overview</h2>
            <div class="content-text">
                <div class="highlight-box" style="margin-bottom:20px;">
                    <p><strong>&#128204; TL;DR - Issue of Shares Services at a Glance</strong></p>
                    <p>The Companies Act 2013 provides four primary routes for issuing shares: Rights Issue, Bonus Issue, Private Placement, and Preferential Allotment. Return of allotment in Form PAS-3 must be filed within 30 days (15 days for private placement). Private placement is limited to 200 identified persons per FY. From June 30, 2025, non-small private companies must issue shares only in demat form (Rule 9B). Penalty for non-compliance: up to INR 2 crore. Starting at INR 4,999.</p>
                </div>
                <p>When a company decides to raise capital or reward its shareholders, it does so by issuing new shares. The Companies Act, 2013, provides four primary routes, each with its own legal framework, compliance requirements, and timelines. A misstep - such as exceeding the 200-person limit under Section 42, missing the 30-day PAS-3 window, or issuing shares without a Special Resolution - can result in penalties up to INR 2 crore or the entire amount raised.</p>
                <p>Patron Accounting provides end-to-end issue of shares services for private limited companies, OPCs, and unlisted public companies - from board resolution and shareholder approval drafting to PAS-3 return of allotment and MGT-14 filing with the Registrar of Companies (ROC).</p>
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
                <h2 class="section-title">What is Issue of Shares?</h2>
                <div class="content-text what-is-definition">
                    
                    <p><strong>Issue of shares</strong> is the process by which a company creates and allots new equity or preference shares to raise capital from existing shareholders, new investors, or both. When shares are issued, the paid-up share capital of the company increases.</p>
<p>The Companies Act 2013 regulates issue of shares through three primary sections: <strong>Section 42</strong> (Private Placement), <strong>Section 62</strong> (Further Issue of Share Capital - rights issue, preferential allotment, ESOP, loan conversion), and <strong>Section 63</strong> (Issue of Bonus Shares).</p>
<p><strong>2026 Update - Rule 9B:</strong> All private companies (other than small companies) must now issue shares exclusively in dematerialised form via NSDL or CDSL. Small company threshold from December 2025: paid-up capital up to INR 10 crore and turnover up to INR 100 crore.</p>

                </div>
                <div class="highlight-box" style="margin-top:20px;">
                    <p><strong>Key Terms for Issue of Shares:</strong></p>
                    <p><strong>PAS-3</strong> - Return of Allotment filed with ROC within 30 days of allotment (15 days for private placement).</p>
<p><strong>PAS-4</strong> - Private Placement Offer-cum-Application Letter sent to identified persons under Section 42.</p>
<p><strong>MGT-14</strong> - Filing of Board/Special Resolutions with ROC within 30 days of passing.</p>
<p><strong>Rule 9B</strong> - Demat mandate: non-small private companies must issue shares only in dematerialised form from June 30, 2025.</p>
<p><strong>ISIN</strong> - International Securities Identification Number obtained from NSDL/CDSL for demat-compliant issuance.</p>

                </div>
            </div>
            <div class="column-image">
                <div class="illustration-placeholder">
                    <div class="illustration-icon" style="max-width:240px;">
                        <svg viewBox="0 0 200 180" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <!-- Building / Tribunal -->
                            <rect x="35" y="20" width="130" height="130" rx="8" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/>
<!-- Capital growth chart -->
<rect x="50" y="35" width="65" height="80" rx="4" fill="#FFF" stroke="#14365F" stroke-width="1"/>
<path d="M58 95l15-20 15 10 15-25 10 15" stroke="#25D366" stroke-width="2.5" fill="none" stroke-linecap="round" stroke-linejoin="round"/>
<circle cx="73" cy="75" r="3" fill="#25D366"/>
<circle cx="88" cy="85" r="3" fill="#25D366"/>
<circle cx="103" cy="60" r="3" fill="#F5A623"/>
<!-- PAS-3 badge -->
<rect x="120" y="45" width="40" height="22" rx="4" fill="#E8F5E9" stroke="#25D366" stroke-width="1"/>
<text x="140" y="59" font-size="7" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">PAS-3</text>
<!-- S.42/62 badge -->
<rect x="120" y="75" width="40" height="22" rx="4" fill="#FFF3E0" stroke="#F5A623" stroke-width="1"/>
<text x="140" y="89" font-size="6" fill="#E8712C" font-weight="700" text-anchor="middle" font-family="Arial">S.42/62</text>
<!-- DEMAT badge -->
<rect x="55" y="118" width="50" height="18" rx="4" fill="#F0F4F8" stroke="#14365F" stroke-width="1"/>
<text x="80" y="130" font-size="7" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">DEMAT</text>
<!-- Verified -->
<circle cx="152" cy="35" r="14" fill="#E8F5E9" stroke="#25D366" stroke-width="1.5"/>
<path d="M145 35l4 4 8-8" stroke="#25D366" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            <!-- Label -->
                            <text x="100" y="170" font-size="10" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial, sans-serif">Issue of Shares</text>
                        </svg>
                    </div>
                    <div class="illustration-badge">
                        <span>Sections 42, 62, 63</span>
                        <strong>PAS-3 Filing</strong>
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
            <h2 class="section-title">Types of Share Issuance Under Companies Act 2013</h2>
            <div class="content-text">
                
                <div class="table-responsive-wrapper"><table><thead><tr><th>Type</th><th>Section</th><th>Key Feature</th><th>Who Gets Shares</th></tr></thead><tbody>
<tr><td>Rights Issue</td><td>62(1)(a)</td><td>Pro-rata to existing shareholders; 15-30 day acceptance window</td><td>Existing shareholders</td></tr>
<tr><td>Bonus Issue</td><td>63</td><td>Free shares from reserves; no cash payment</td><td>Existing shareholders pro-rata</td></tr>
<tr><td>Private Placement</td><td>42</td><td>Max 200 identified persons; PAS-4 required</td><td>New or existing investors</td></tr>
<tr><td>Preferential Allotment</td><td>62(1)(c)</td><td>Pre-determined price; Special Resolution required</td><td>Promoters, VCs, strategic investors</td></tr>
<tr><td>ESOP</td><td>62(1)(b)</td><td>Options at pre-determined price</td><td>Employees and directors</td></tr>
<tr><td>Conversion of Loans</td><td>62(3)</td><td>Loan to equity; Special Resolution at time of loan</td><td>Lenders/debenture holders</td></tr>
</tbody></table></div>

            </div>
            </div>
        </div>
    </div>
</section>

<!-- SECTION 5: OUR SERVICES -->
<section class="content-section" id="services-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Patron Accounting's Issue of Shares Services</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Service</th><th>What We Do</th></tr></thead>
                    <tbody>
                        <tr><td>Eligibility Review</td><td>Authorised capital adequacy, demat compliance (Rule 9B), existing offer status, and route selection (Rights/Bonus/Private Placement)</td></tr>
<tr><td>Document Drafting</td><td>Board resolution, EGM notice, explanatory statement, PAS-4 offer letter, special resolution - all CS-drafted</td></tr>
<tr><td>Authorised Capital Increase</td><td>SH-7 and MGT-14 filing for capital clause amendment if post-issue capital exceeds current authorised capital</td></tr>
<tr><td>Valuation Coordination</td><td>Registered valuer report for preferential allotment and private placement to determine fair market value</td></tr>
<tr><td>ROC Filing</td><td>PAS-3, PAS-4, PAS-5, MGT-14, and SH-7 filing on MCA V3 portal within statutory deadlines</td></tr>
<tr><td>Demat Coordination</td><td>ISIN and RTA coordination with NSDL/CDSL for Rule 9B-compliant share issuance; PAS-6 filing</td></tr>

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
            <h2 class="section-title">Step-by-Step Share Issuance Procedures</h2>
            <p class="section-subtitle" style="text-align:left;max-width:100%;">Three distinct procedures under Companies Act 2013. PAS-3 must be filed within 30 days (Rights/Bonus) or 15 days (Private Placement). Penalty for non-compliance: up to INR 2 crore or amount raised.</p>
        </header>
        <div class="steps-container">
            <div class="step-card"><div class="step-content"><span class="step-badge">Step 1</span><h3 class="step-title">Check Authorised Share Capital</h3><p class="step-description">Verify authorised capital is sufficient. If post-issue paid-up capital exceeds authorised, increase first via SH-7 and MGT-14 filing.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Capital checked</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>SH-7 filed if needed</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="20" y="15" width="80" height="55" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><line x1="35" y1="28" x2="85" y2="28" stroke="#F5A623" stroke-width="3" stroke-linecap="round"/><line x1="35" y1="40" x2="75" y2="40" stroke="#14365F" stroke-width="2" opacity="0.3"/><line x1="35" y1="52" x2="65" y2="52" stroke="#14365F" stroke-width="2" opacity="0.3"/></svg></div><span class="illustration-label">Capital OK</span><span class="step-number-large">01</span></div></div></div>
<div class="step-card"><div class="step-content"><span class="step-badge">Step 2</span><h3 class="step-title">Convene Board Meeting</h3><p class="step-description">Approve the share issuance - fix ratio, price, record date, and terms. 7 days' notice to all directors required.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Board approved</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Terms fixed</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="25" y="15" width="70" height="50" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><circle cx="60" cy="40" r="14" fill="#FFF3E0" stroke="#F5A623" stroke-width="1.5"/><text x="60" y="44" font-size="7" fill="#E8712C" font-weight="700" text-anchor="middle" font-family="Arial">BOARD</text></svg></div><span class="illustration-label">Board Done</span><span class="step-number-large">02</span></div></div></div>
<div class="step-card"><div class="step-content"><span class="step-badge">Step 3</span><h3 class="step-title">File MGT-14 for Board Resolution</h3><p class="step-description">File Board Resolution with ROC within 30 days. For private placement: MGT-14 must be filed BEFORE sending PAS-4 offer letter.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>MGT-14 filed</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>ROC notified</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><circle cx="60" cy="42" r="28" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><text x="60" y="38" font-size="7" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">MGT</text><text x="60" y="50" font-size="7" fill="#25D366" font-weight="700" text-anchor="middle" font-family="Arial">14</text></svg></div><span class="illustration-label">MGT-14 Filed</span><span class="step-number-large">03</span></div></div></div>
<div class="step-card"><div class="step-content"><span class="step-badge">Step 4</span><h3 class="step-title">EGM and Special Resolution (if required)</h3><p class="step-description">Required for Bonus Issue, Private Placement, and Preferential Allotment. Not required for Rights Issue. File MGT-14 for Special Resolution within 30 days.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>SR passed</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>MGT-14 filed</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="20" y="15" width="80" height="55" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><text x="60" y="38" font-size="8" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">EGM</text><text x="60" y="52" font-size="7" fill="#E8712C" font-weight="700" text-anchor="middle" font-family="Arial">SPECIAL RES</text></svg></div><span class="illustration-label">EGM Done</span><span class="step-number-large">04</span></div></div></div>
<div class="step-card"><div class="step-content"><span class="step-badge">Step 5</span><h3 class="step-title">Send Offer / Circulate PAS-4</h3><p class="step-description">Rights Issue: Letter of Offer to all equity shareholders (15-30 day acceptance). Private Placement: PAS-4 offer-cum-application to identified persons (max 50 per offer, 200/FY).</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Offer sent</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Acceptance window open</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="15" y="10" width="90" height="70" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><rect x="25" y="20" width="30" height="22" rx="3" fill="#FFF3E0" stroke="#F5A623" stroke-width="1"/><text x="40" y="34" font-size="6" fill="#E8712C" font-weight="700" text-anchor="middle" font-family="Arial">PAS-4</text><rect x="65" y="20" width="30" height="22" rx="3" fill="#E8F5E9" stroke="#25D366" stroke-width="1"/><text x="80" y="34" font-size="6" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">OFFER</text></svg></div><span class="illustration-label">Offers Sent</span><span class="step-number-large">05</span></div></div></div>
<div class="step-card"><div class="step-content"><span class="step-badge">Step 6</span><h3 class="step-title">Collect Application Money and Allot</h3><p class="step-description">Receive money through banking channels only (no cash). Allot shares within 60 days of receiving application money. Pass allotment resolution at Board Meeting.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Money received</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Shares allotted</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><circle cx="60" cy="42" r="28" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><path d="M48 42l8 8 16-16" stroke="#25D366" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/><text x="60" y="80" font-size="7" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">ALLOTTED</text></svg></div><span class="illustration-label">Allotted</span><span class="step-number-large">06</span></div></div></div>
<div class="step-card"><div class="step-content"><span class="step-badge">Step 7</span><h3 class="step-title">File PAS-3 (Return of Allotment)</h3><p class="step-description">Rights/Bonus: within 30 days. Private Placement: within 15 days. Attach board resolution and list of allottees. Late filing: INR 1,000/day, max INR 25 lakh.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>PAS-3 filed</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>ROC updated</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="20" y="15" width="80" height="55" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><circle cx="60" cy="42" r="18" fill="#E8F5E9" stroke="#25D366" stroke-width="1.5"/><text x="60" y="40" font-size="7" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">PAS</text><text x="60" y="50" font-size="7" fill="#25D366" font-weight="700" text-anchor="middle" font-family="Arial">3</text></svg></div><span class="illustration-label">PAS-3 Filed</span><span class="step-number-large">07</span></div></div></div>
<div class="step-card"><div class="step-content"><span class="step-badge">Step 8</span><h3 class="step-title">Issue Share Certificates or Inform Depository</h3><p class="step-description">Physical: Issue Form SH-1 within 2 months from allotment. Demat (Rule 9B companies): Inform NSDL/CDSL immediately on allotment. Update Register of Members.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Certificates issued</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Register updated</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="20" y="15" width="80" height="55" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><circle cx="40" cy="42" r="10" fill="#E8F5E9" stroke="#25D366" stroke-width="1.5"/><path d="M36 42l3 3 5-5" stroke="#25D366" stroke-width="2" stroke-linecap="round"/><circle cx="65" cy="42" r="10" fill="#E8F5E9" stroke="#25D366" stroke-width="1.5"/><path d="M61 42l3 3 5-5" stroke="#25D366" stroke-width="2" stroke-linecap="round"/><circle cx="90" cy="42" r="10" fill="#E8F5E9" stroke="#25D366" stroke-width="1.5"/><path d="M86 42l3 3 5-5" stroke="#25D366" stroke-width="2" stroke-linecap="round"/></svg></div><span class="illustration-label">Complete</span><span class="step-number-large">08</span></div></div></div>


        </div>
    </div>
</section>

<!-- SECTION 8: DOCUMENTS REQUIRED -->
<section class="content-section" id="documents-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Forms and Documents Required for Share Issuance</h2>
            <div class="content-text">
                
                <div class="table-responsive-wrapper"><table><thead><tr><th>Form</th><th>Purpose and Deadline</th></tr></thead><tbody>
<tr><td>PAS-3 (Return of Allotment)</td><td>Filed with ROC within 30 days of allotment (15 days for private placement)</td></tr>
<tr><td>PAS-4 (Private Placement Offer Letter)</td><td>Serially numbered offer sent to each identified person - Section 42</td></tr>
<tr><td>PAS-5 (Record of Offers)</td><td>Maintained by company; copy filed with ROC within 30 days of PAS-4 circulation</td></tr>
<tr><td>PAS-6 (Share Capital Reconciliation)</td><td>Bi-annual filing for demat companies under Rule 9B</td></tr>
<tr><td>MGT-14 (Resolutions)</td><td>Board and Special Resolutions filed within 30 days of passing</td></tr>
<tr><td>SH-7 (Capital Alteration)</td><td>Filed when authorised capital is increased before share issuance</td></tr>
<tr><td>SH-1 (Share Certificate)</td><td>Issued within 2 months from allotment; or depository informed for demat</td></tr>
<tr><td>Valuation Report</td><td>Registered Valuer certificate for private placement and preferential allotment</td></tr>
<tr><td>Board Resolution</td><td>Specifying number of shares, allottees, price, and terms</td></tr>
<tr><td>Special Resolution (EGM)</td><td>Required for Bonus Issue, Private Placement, and Preferential Allotment</td></tr>
</tbody></table></div>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 9: CHALLENGES -->
<section class="content-section" id="challenges-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Common Mistakes to Avoid in Share Issuance</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Challenge</th><th>Impact</th><th>How Patron Accounting Solves It</th></tr></thead>
                    <tbody>
                        <tr><td>Sending PAS-4 before filing MGT-14</td><td>ROC filing must precede the offer letter</td><td>Patron Accounting files MGT-14 first and only then circulates PAS-4 to identified persons</td></tr>
<tr><td>Exceeding 200-person limit for private placement</td><td>Deemed public offer; SEBI jurisdiction triggered</td><td>We maintain strict count per FY per security type; QIBs and ESOP employees excluded from count</td></tr>
<tr><td>Missing 60-day allotment window</td><td>Money becomes deposit; 12% p.a. interest liability</td><td>Allotment tracked from day of application receipt; Board Meeting convened well before deadline</td></tr>
<tr><td>Issuing physical certificates post Rule 9B</td><td>INR 10,000 + INR 1,000/day penalty (cap INR 2,00,000)</td><td>We verify Rule 9B applicability and coordinate ISIN/RTA with NSDL/CDSL before any new issuance</td></tr>

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
            <h2 class="section-title">Share Issuance Service Fees 2026</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Fee Component</th><th>Amount</th></tr></thead>
                    <tbody>
                        <tr><td>Rights Issue (Private Limited Company)</td><td>INR 4,999 + GST (board resolution, letter of offer, PAS-3, MGT-14)</td></tr>
<tr><td>Private Placement (Section 42)</td><td>INR 7,999 + GST (EGM, special resolution, PAS-4, PAS-5, PAS-3, MGT-14 + valuation coordination)</td></tr>
<tr><td>Bonus Issue (Section 63)</td><td>INR 5,999 + GST (EGM, special resolution, reserves certificate, PAS-3, MGT-14)</td></tr>
<tr><td>Authorised Capital Increase (if needed)</td><td>INR 2,999 + GST (SH-7 and MGT-14) + government stamp duty on increased capital</td></tr>
<tr><td>ISIN and Demat Coordination (Rule 9B)</td><td>INR 3,999 + GST (NSDL/CDSL registration, RTA appointment, PAS-6)</td></tr>
<tr><td>Patron Accounting Professional Fees</td><td>Starting from INR 4,999 (Exl GST and Govt. Charges)</td></tr>

                    </tbody>
                </table>
                </div>
                <p style="margin-top:16px;font-size:13px;color:var(--text-muted);font-style:italic;">All fees and charges listed are indicative only and do not constitute a binding offer. Final amounts may vary depending on the volume of work and the complexity involved.</p>
                <p style="margin-top:16px;">Professional service charges for drafting, filing, and representation are separate from the statutory fees. The exact fee depends on the complexity of the case, disputed amount, and number of hearings required. Contact us for a detailed quote.</p>
                <p style="margin-top:16px;"><strong>Get a free Issue of Shares consultation - <a href="tel:+919459456700">Call +91 945 945 6700</a> or <a href="https://wa.me/919459456700?text=Hi%2C%20I%20need%20share%20issuance%20services%20-%20PAS-3%20and%20MGT-14%20filing." target="_blank">WhatsApp us</a>. No-obligation assessment.</strong></p>
            </div>
        </div>
    </div>
</section>

<!-- SECTION 11: TIMELINE -->
<section class="content-section" id="timeline-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Share Issuance Deadlines and Penalties</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Stage</th><th>Estimated Timeline</th></tr></thead>
                    <tbody>
                        <tr><td>MGT-14 filing (Board/Special Resolution)</td><td>30 days from passing resolution (Section 117(1))</td></tr>
<tr><td>PAS-3 filing (Rights/Bonus Issue)</td><td>30 days from allotment (Section 39(4))</td></tr>
<tr><td>PAS-3 filing (Private Placement)</td><td>15 days from allotment (Section 42(8))</td></tr>
<tr><td>Allotment after application money</td><td>Within 60 days (Section 42(6) / Section 62)</td></tr>
<tr><td>Refund if not allotted in 60 days</td><td>Within 15 days from 60th day (Section 42(6))</td></tr>
<tr><td>Share Certificate issuance</td><td>Within 2 months from allotment (Section 56(4)(a))</td></tr>
<tr><td>PAS-6 filing (demat companies)</td><td>Within 60 days of each half-year end (Rule 9B)</td></tr>

                    </tbody>
                </table>
                </div>
                <div class="highlight-box" style="margin-top:16px;">
                    
                    <p><strong>Penalty Warning:</strong> Private placement non-compliance: up to amount raised or INR 2 crore (whichever lower) + refund at 12% p.a. PAS-3 late filing: INR 1,000/day, max INR 25 lakh. Offer to 200+ persons: deemed public offer, SEBI applies.</p>

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
            <h2 class="section-title">Why Choose Patron Accounting for Share Issuance?</h2>
        </div>
        <div class="features-grid">
<article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M14 2H6a2 2 0 00-2 2v16a2 2 0 002 2h12a2 2 0 002-2V8z"/><path d="M14 2v6h6"/></svg></div><h3 class="feature-title">Expert CS-Led Drafting</h3><p class="feature-text">PAS-4 offer letters, board resolutions, EGM notices, and special resolutions drafted by experienced Company Secretaries.</p></article>
<article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><path d="M12 6v6l4 2"/></svg></div><h3 class="feature-title">100% On-Time PAS-3</h3><p class="feature-text">Every PAS-3 filed within statutory deadline. No late filing penalties. INR 1,000/day penalty avoided.</p></article>
<article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/></svg></div><h3 class="feature-title">Complete Eligibility Review</h3><p class="feature-text">Authorised capital adequacy, demat compliance, existing offer status - all verified before proceeding.</p></article>
<article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><h3 class="feature-title">Valuation Coordination</h3><p class="feature-text">Registered valuer report arranged for preferential allotment and private placement valuations.</p></article>
<article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M4 4v5h.582m15.356 2A8.001 8.001 0 004.582 9m0 0H9m11 11v-5h-.581m0 0a8.003 8.003 0 01-15.357-2m15.357 2H15"/></svg></div><h3 class="feature-title">ISIN and RTA Coordination</h3><p class="feature-text">Demat-compliant issuance with NSDL/CDSL registration and RTA appointment for Rule 9B companies.</p></article>
<article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><h3 class="feature-title">Pan-India Service</h3><p class="feature-text">Transparent flat-fee pricing from INR 4,999. No hidden charges. Offices in Pune, Mumbai, Delhi, Bangalore.</p></article>
</div>
    </div>
</section>

<!-- SECTION 12A: SOCIAL PROOF -->
<section class="content-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Why Companies Trust Patron Accounting</h2>
            <div class="content-text">
                
                <p>500+ Share Issuances Assisted | 100% On-Time PAS-3 Filing | Expert CA and CS Team Across India | Startups to Mid-Size Companies</p>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 13: SELF-FILING vs PROFESSIONAL COMPARISON -->
<section class="content-section" id="comparison-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Comparison of Share Issuance Routes</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table class="table-comparison">
                    <thead><tr><th>Parameter</th><th>Rights Issue</th><th>Private Placement</th></tr></thead>
                    <tbody>
                        <tr><td>Section</td><td>62(1)(a)</td><td>42</td></tr>
<tr><td>Who Receives</td><td>Existing shareholders pro-rata</td><td>Up to 200 identified persons per FY</td></tr>
<tr><td>Cash Inflow</td><td>Yes</td><td>Yes</td></tr>
<tr><td>EGM Required</td><td>No - Board Resolution sufficient</td><td>Yes - Special Resolution required</td></tr>
<tr><td>Offer Letter</td><td>Letter of Offer (15-30 day window)</td><td>PAS-4 (serially numbered)</td></tr>
<tr><td>Valuation Report</td><td>Not mandatory</td><td>Required (Registered Valuer)</td></tr>
<tr><td>PAS-3 Deadline</td><td>30 days from allotment</td><td>15 days from allotment</td></tr>
<tr><td>Best For</td><td>Proportional capital raise from existing shareholders</td><td>Investor onboarding - angels, VCs, strategic investors</td></tr>

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
            <h2 class="section-title">Related Corporate Compliance Services</h2>
            <div class="content-text">
                
                <ul>
<li><a href="/change-in-authorised-capital">Increase in Authorised Share Capital</a> - SH-7 and MGT-14 filing</li>
<li><a href="/transfer-of-shares">Transfer of Shares</a> - SH-4, stamp duty, and board approval</li>
<li><a href="/private-limited-company-compliance">Annual ROC Compliance</a> - MGT-7, AOC-4, Director KYC</li>
<li><a href="/private-limited-company-registration">Private Limited Company Registration</a> - new incorporation</li>
<li><a href="/change-in-object-clause">Change in Object Clause</a> - MOA alteration under Section 13</li>
</ul>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 15A: LEGAL FRAMEWORK -->
<section class="content-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Legal Framework - Issue of Shares</h2>
            <div class="content-text">
                
                <div class="table-responsive-wrapper"><table><thead><tr><th>Provision</th><th>Requirement</th></tr></thead><tbody>
<tr><td>Section 42, CA 2013</td><td>Private Placement: max 200 persons/FY, PAS-4 offer letter, banking channels only, 60-day allotment window.</td></tr>
<tr><td>Section 62(1)(a)</td><td>Rights Issue: pro-rata to existing shareholders, 15-30 day acceptance, Letter of Offer.</td></tr>
<tr><td>Section 62(1)(c)</td><td>Preferential Allotment: Special Resolution, pre-determined price, valuation report.</td></tr>
<tr><td>Section 63</td><td>Bonus Issue: from free reserves/securities premium only (not revaluation reserves), Special Resolution.</td></tr>
<tr><td>Section 39(4) / 42(8)</td><td>PAS-3 filing: 30 days (rights/bonus) or 15 days (private placement) from allotment.</td></tr>
<tr><td>Rule 9B, PAS Rules 2014</td><td>Non-small private companies: demat-only issuance from June 30, 2025.</td></tr>
<tr><td>Section 42(10)</td><td>Penalty: up to amount raised or INR 2 crore (whichever lower) + refund at 12% p.a.</td></tr>
<tr><td>Section 56(4)(a)</td><td>Share certificate (SH-1) within 2 months from allotment.</td></tr>
</tbody></table></div>
<p style="margin-top:16px;"><strong>External Authority Link:</strong> <a href="https://www.mca.gov.in" target="_blank" rel="noopener">MCA Portal - Forms and Filing</a></p>

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
                    <h2 class="faq-expanded__title">Frequently Asked Questions - Issue of Shares</h2>
                    <p class="faq-expanded__lead">Get answers about rights issue, bonus shares, private placement, PAS-3, demat mandate, and share issuance penalties.</p>
                    @include('partials.bigin-form', [
                        'variant'  => 'compact',
                        'service'  => 'Issue of Shares',
                    ])
                </aside>
                <div class="faq-expanded__list">
                    <div class="faq-expanded__item" id="faq-1">
                        <h3 class="faq-expanded__q">What is the difference between rights issue and private placement?</h3>
                        <div class="faq-expanded__a"><p>Rights issue under Section 62(1)(a) is offered pro-rata to existing shareholders without Special Resolution. Private placement under Section 42 is offered to up to 200 identified persons, requires Special Resolution, PAS-4 offer letter, and registered valuer report. Rights issue is faster; private placement allows onboarding new investors.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-2">
                        <h3 class="faq-expanded__q">Which form is filed for return of allotment?</h3>
                        <div class="faq-expanded__a"><p>Form PAS-3 is filed with ROC within 30 days of allotment for rights/bonus issue, and within 15 days for private placement, under Section 39(4) of Companies Act 2013.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-3">
                        <h3 class="faq-expanded__q">Can bonus shares be issued from revaluation reserves?</h3>
                        <div class="faq-expanded__a"><p>No. Section 63(1) explicitly prohibits bonus shares from revaluation reserves. Only free reserves, securities premium account, and capital redemption reserve are permitted sources.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-4">
                        <h3 class="faq-expanded__q">What is the penalty for private placement non-compliance?</h3>
                        <div class="faq-expanded__a"><p>Under Section 42(10), penalty extends to amount raised or INR 2 crore (whichever lower) plus refund of all application money at 12% p.a. within 30 days. If offered to 200+ persons, deemed public offer and SEBI regulations apply.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-5">
                        <h3 class="faq-expanded__q">Do private companies need to issue shares in demat form?</h3>
                        <div class="faq-expanded__a"><p>Yes, from June 30, 2025 under Rule 9B. All private companies other than small companies (paid-up capital up to INR 10 crore, turnover up to INR 100 crore from December 2025) must issue shares exclusively in demat form.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-6">
                        <h3 class="faq-expanded__q">What is the maximum number of persons for private placement?</h3>
                        <div class="faq-expanded__a"><p>200 identified persons per FY per type of security, with max 50 per individual offer. QIBs and ESOP employees excluded from the count. The limit applies separately to equity, preference, and debentures.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-7">
                        <h3 class="faq-expanded__q">Is an EGM required for a rights issue?</h3>
                        <div class="faq-expanded__a"><p>No. Rights issue under Section 62(1)(a) does not require EGM or Special Resolution. The Board of Directors can approve via Board Resolution, making it the fastest route for capital raising from existing shareholders.</p></div>
                    </div>
                </div>
            </div>


            <!-- Quick Answers -->
            <div class="highlight-box" style="margin-top:32px;">
                <p><strong>Quick Answers</strong></p>
                <p><strong>Which form for return of allotment?</strong> PAS-3 filed within 30 days (rights/bonus) or 15 days (private placement).</p>
<p><strong>Bonus from revaluation reserves?</strong> No. Section 63(1) explicitly prohibits it. Only free reserves and securities premium permitted.</p>
<p><strong>Max persons for private placement?</strong> 200 per FY per security type; 50 per individual offer. QIBs and ESOP excluded.</p>
<p><strong>EGM needed for rights issue?</strong> No. Board Resolution is sufficient under Section 62(1)(a) - fastest route for capital raising.</p>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 18: URGENCY CTA -->
<section class="content-section" style="background: var(--orange-lighter) !important; border-left: 4px solid var(--orange);">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">File PAS-3 and MGT-14 On Time - Avoid Penalties Up to INR 25 Lakh</h2>
            <div class="content-text">
                
                <p><strong>Key Deadlines:</strong></p>
<ul>
<li><strong>30 days:</strong> MGT-14 for Board/Special Resolution after passing</li>
<li><strong>30 days:</strong> PAS-3 for Rights/Bonus Issue allotment</li>
<li><strong>15 days:</strong> PAS-3 for Private Placement allotment</li>
<li><strong>60 days:</strong> Complete allotment after receiving application money - otherwise deposit provisions apply</li>
<li><strong>2 months:</strong> Issue share certificates after allotment</li>
</ul>
<p><strong>Penalty:</strong> Private placement violation: up to INR 2 crore. PAS-3 late filing: INR 1,000/day (max INR 25 lakh). Offer to 200+ persons: deemed public offer.</p>
<p style="margin-top:16px;"><strong><a href="tel:+919459456700">Call +91 945 945 6700</a> or <a href="https://wa.me/919459456700?text=Hi%2C%20I%20need%20help%20with%20issue%20of%20shares%20-%20PAS-3%20filing." target="_blank">WhatsApp us</a> for a free consultation.</strong></p>

            </div>
        </div>
    </div>
</section>

<!-- CONCLUSION + CTA BLOCK (Dark) -->
<section class="content-section" style="background: var(--blue) !important;">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title" style="color:#FFFFFF !important;">Issue Shares Legally - Starting at INR 4,999</h2>
            <div class="content-text" style="text-align:left;">
                
                <p style="color:rgba(255,255,255,0.9);font-size:16px;line-height:1.7;">Whether raising capital through rights issue, rewarding shareholders via bonus shares, or onboarding investors through private placement, every share issuance must follow precise legal procedures under the Companies Act 2013. With Rule 9B mandating demat issuance and penalties up to INR 2 crore for non-compliance, professional CS-led compliance is essential.</p>
<p style="color:rgba(255,255,255,0.9);font-size:16px;line-height:1.7;">Patron Accounting's CA and CS team has assisted 500+ share issuances across sectors - from early-stage startup seed rounds to mid-size company capital raises. 100% on-time PAS-3 filing record.</p>

            </div>
            <div style="display:flex;gap:14px;flex-wrap:wrap;margin-top:24px;">
                <a href="tel:+919459456700" style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:var(--orange);color:#fff;border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#128222; Call +91 945 945 6700</a>
                <a href="https://wa.me/919459456700?text=Hi%2C%20I%20need%20share%20issuance%20services%20-%20PAS-3%20and%20MGT-14%20filing." target="_blank" style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:#25D366;color:#fff;border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#128172; WhatsApp Us</a>
                <a href="mailto:sales@patronaccounting.com?subject=Issue%20of%20Shares%20-%20PAS-3%20Filing&body=Hello%20Patron%20Accounting%2C%0A%0AI%20need%20help%20with%20issue%20of%20shares%20and%20PAS-3%20filing.%0A%0AThank%20you." style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:transparent;color:#fff;border:2px solid rgba(255,255,255,0.3);border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#9993;&#65039; Email Us</a>
            </div>
            <p style="color:rgba(255,255,255,0.7);font-size:13px;margin-top:16px;">Book a Free Consultation - No Obligation.</p>
        </div>
    </div>
</section>

<!-- GSTAT STATE BENCH CITY PAGES (32 Pages) -->
<section class="content-section" style="padding:48px 32px;background:var(--gray-50);">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title" style="text-align:center;margin-bottom:12px;">Share Issuance Services Across India</h2>
            <p style="text-align:center;color:var(--text-muted);font-size:15px;margin-bottom:40px;">Get your shares issued legally from Patron Accounting offices across India.</p>
           
            <div class="pa-city-block" style="margin-bottom:40px;"><div class="pa-block-title">Issue of Shares by City</div><div class="pa-block-sub">PAS-3, MGT-14 and ROC filing from Patron Accounting</div><div class="pa-city-grid">
<a href="/issue-of-shares/pune" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Pune</div><div class="pa-card-sub">Maharashtra</div></div></a>
<a href="/issue-of-shares/mumbai" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Mumbai</div><div class="pa-card-sub">Maharashtra</div></div></a>
<a href="/issue-of-shares/delhi" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Delhi</div><div class="pa-card-sub">NCR</div></div></a>

</div></div>
<div class="pa-city-block"><div class="pa-block-title">Related Services</div><div class="pa-block-sub">Company and share capital compliance</div><div class="pa-cross-grid">
<a href="/change-in-authorised-capital" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Increase Share Capital</div><div class="pa-card-sub">India</div></div></a>
<a href="/transfer-of-shares" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Transfer of Shares</div><div class="pa-card-sub">India</div></div></a>
<a href="/private-limited-company-compliance" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Annual ROC Compliance</div><div class="pa-card-sub">India</div></div></a>
<a href="/private-limited-company-registration" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Pvt Ltd Registration</div><div class="pa-card-sub">India</div></div></a>
<a href="/change-in-object-clause" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Change in Object Clause</div><div class="pa-card-sub">India</div></div></a>
</div></div>
        </div>
    </div>
</section>

<!-- CONTENT FRESHNESS FOOTER -->
<section class="content-section" style="padding:32px;">
    <div class="content-container">
        <div class="text-content" style="font-size:13px;color:var(--text-muted);">
            <p><strong>Content Created:</strong> March 2026 &nbsp;|&nbsp; <strong>Last Updated:</strong> <span id="lastUpdatedFooter">20 April 2026</span> &nbsp;|&nbsp; <strong>Next Review:</strong> March 2027 &nbsp;|&nbsp; <strong>Reviewed By:</strong> CA &amp; CS Team, Patron Accounting LLP</p>
            <p>This page is reviewed annually. Trigger: MCA amending PAS Rules, Section 42/62/63 provisions, Rule 9B demat mandate, or small company threshold changes.</p>
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
