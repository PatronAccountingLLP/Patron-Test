
@extends('layouts.service-app')
@push('styles')
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Barlow:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,400&family=DM+Sans:opsz,wght@9..40,400;9..40,500;9..40,600;9..40,700&display=swap" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
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
@include('partials.page-css', ['file' => 'css/site.css'])
@endpush








@section('meta')
    <title>Defective Return u/s 139(9) Mumbai – Reply &amp; Rectify</title>
    <meta name="description" content="CA-assisted defective return notice response in Mumbai. Section 139(9), 15-day deadline, corrected return, TDS mismatch, ITR form error. Call +91 945 945 6700.">
    <link rel="canonical" href="/income-tax-notice-for-defective-return/mumbai">
    <meta name="robots" content="index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1">
    <meta property="og:title" content="Defective Return u/s 139(9) Mumbai – Reply &amp; Rectify">
    <meta property="og:description" content="CA-assisted defective return notice response in Mumbai. Section 139(9), 15-day deadline, corrected return, TDS mismatch, ITR form error. Call +91 945 945 6700.">
    <meta property="og:url" content="/income-tax-notice-for-defective-return/mumbai">
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="Patron Accounting">
    <meta property="og:image" content="https://www.patronaccounting.com/images/og-default-square.png">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="1200">
    <meta property="og:image:type" content="image/png">
    <meta property="og:image:secure_url" content="https://www.patronaccounting.com/images/og-default-square.png">
    <meta property="og:image:alt" content="Patron Accounting - partner you can rely on">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Defective Return u/s 139(9) Mumbai – Reply &amp; Rectify">
    <meta name="twitter:description" content="CA-assisted defective return notice response in Mumbai. Section 139(9), 15-day deadline, corrected return, TDS mismatch, ITR form error. Call +91 945 945 6700.">
    <meta name="twitter:image" content="https://www.patronaccounting.com/images/og-default-square.png">
@endsection

@section('schema')
    <script type="application/ld+json">{
  "@context": "https://schema.org",
  "@graph": [
    {
      "@type": "Service",
      "name": "Defective Return Notice 139(9) Response in Mumbai",
      "description": "CA-assisted defective return notice response in Mumbai. Section 139(9), 15-day deadline, corrected return, TDS mismatch, ITR form error. Call +91 945 945 6700.",
      "url": "https://www.patronaccounting.com/income-tax-notice-for-defective-return/mumbai",
      "serviceType": "Defective Return Notice 139(9) Response in Mumbai",
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
        "url": "https://www.patronaccounting.com/income-tax-notice-for-defective-return/mumbai",
        "price": "2000"
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
          "name": "Defective Return Notice",
          "item": "https://www.patronaccounting.com/income-tax-notice-for-defective-return"
        },
        {
          "@type": "ListItem",
          "position": 3,
          "name": "Defective Return 139(9) in Mumbai",
          "item": "https://www.patronaccounting.com/income-tax-notice-for-defective-return/mumbai"
        }
      ]
    },
    {
      "@type": "FAQPage",
      "mainEntity": [
        {
          "@type": "Question",
          "name": "What makes a return defective?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Incomplete or inconsistent information: TDS mismatch with Form 26AS, wrong ITR form, missing income schedules, audit report not uploaded, P&L/BS mismatch, Schedule FA incomplete, deduction details missing. CPC Bengaluru flags automatically. Patron identifies exact defect for Mumbai taxpayers."
          }
        },
        {
          "@type": "Question",
          "name": "How much time to respond?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "15 days from receiving notice (shortest IT notice deadline). Extension possible by written application to AO before deadline. Even if rectified after 15 days, AO may accept at discretion. But relying on discretion is risky - respond within 15 days. Patron responds well within deadline."
          }
        },
        {
          "@type": "Question",
          "name": "What if I don't respond within 15 days?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Return treated as invalid (never filed). Consequences: penalty S234F (Rs 1,000-5,000), interest S234A/B/C, loss of carry-forward of losses, loss of specific exemptions, no refund, potential scrutiny for non-filing. Patron ensures timely response for Mumbai taxpayers."
          }
        },
        {
          "@type": "Question",
          "name": "Can I file revised return instead?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Yes, if revision window (S139(5)) is open - before end of relevant AY or before assessment. But filing revised without responding to 139(9) leaves notice unresolved. Recommended: respond to notice AND file revised if needed. Patron advises best approach for each Mumbai taxpayer."
          }
        },
        {
          "@type": "Question",
          "name": "TDS mismatch not my fault - what to do?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Common for Mumbai salaried: employer deposited TDS late or wrong PAN. Options: (1) Reduce TDS claim in corrected return (safer - keeps return valid; file rectification after 26AS updated), (2) Disagree citing employer TDS return. Patron coordinates with employer and advises optimal approach."
          }
        },
        {
          "@type": "Question",
          "name": "Can someone respond on my behalf?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Yes. Authorise a CA or representative through e-filing portal's authorisation mechanism. Patron responds as authorised representative for Mumbai taxpayers - handling notice analysis, corrected return preparation, and portal submission."
          }
        },
        {
          "@type": "Question",
          "name": "What if I get a second 139(9) notice?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Can happen if corrected return has different defect or first correction was incomplete. Respond within new 15-day deadline with fresh corrected return. Underscores importance of accuracy in first submission. Patron verifies against all parameters before submission to minimise risk."
          }
        },
        {
          "@type": "Question",
          "name": "Is 139(9) same as 143(1) intimation?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "No. 139(9) asks you to CORRECT errors in return (before processing). 143(1) shows final computation AFTER processing (demand or refund). Different stages: 139(9) comes first (if defects found); 143(1) after return is processed. Patron handles both for Mumbai taxpayers."
          }
        }
      ]
    }
  ]
}</script>

@endsection

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
                        Defective Return Notice Section 139(9) in Mumbai: Response, Rectification, and Corrected Return Filing
                    </h1>

                    <div class="expert-attribution-box">
                        <span class="eab-check"><svg width="16" height="16" viewBox="0 0 24 24" fill="currentColor"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg></span>
                        <span class="eab-title">Reviewed by CA and CS Team, Patron Accounting LLP</span>
                        <span class="eab-meta">
                            <span>ICAI & ICSI Registered</span><span class="eab-sep">|</span>
                            <span>15+ Years Experience</span><span class="eab-sep">|</span>
                            <span>Last Updated: <span id="lastUpdated">25 March 2026</span></span>
                        </span>
                        <a href="#" class="eab-link">Verify Credentials &rarr;</a>
                    </div>

                    <div class="mb-4">
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Section 139(9):</span> Return treated as defective when incomplete or inconsistent information is found by CPC Bengaluru</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>15-Day Deadline:</span> Rectify defect within 15 days | Extension possible by application to AO</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Response:</span> Agree and upload corrected return (JSON) | Disagree and provide reasons | File revised return u/s 139(5)</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>If Not Rectified:</span> Return treated as INVALID &ndash; penalty, interest, loss of carry-forward, loss of exemptions, no refund</p>
                        </div>
                    </div>

                    <p class="mb-4 fw-bold" style="color: var(--blue); font-size: 15px;">Our Mumbai office resolves defective return notices within 5-7 days &ndash; 10,000+ businesses served with 4.9&#9733; Google rating</p>

                    <div class="hero-cta">
                        <a href="tel:+919459456700" class="btn-video text-decoration-none">
                            <span class="play-circle"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="width:14px;height:14px;color:#fff"><path d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/></svg></span>
                            Call +91 945 945 6700
                        </a>
                        <a href="mailto:sales@patronaccounting.com" class="btn-sample text-decoration-none">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="width:18px;height:18px;"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,12 2,6"/></svg>
                            Email Us
                        </a>
                        <a href="https://wa.me/919459456700?text=Hello%2C%20I%20just%20visited%20your%20Income%20Tax%20Notice%20for%20Defective%20Return%20in%20Mumbai%20page.%20I%20would%20like%20to%20know%20more%20about%20it." target="_blank" class="btn-sample text-decoration-none" rel="noopener">
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
                                            'service'  => 'Defective Return Notice 139(9)',
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
    'ctaText'    => 'Get your defective return corrected and uploaded within 5 days by a CA team that reconciles all TDS sources and verifies before submission.',
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
            <a href="#who-section" class="toc-btn">When Received</a>
            <a href="#services-section" class="toc-btn">Services</a>
            <a href="#procedure-section" class="toc-btn">Process</a>
            <a href="#documents-section" class="toc-btn">Documents</a>
            <a href="#challenges-section" class="toc-btn">Challenges</a>
            <a href="#fees-section" class="toc-btn">Fees</a>
            <a href="#timeline-section" class="toc-btn">139(9) vs Others</a>
            <a href="#benefits-section" class="toc-btn">Benefits</a>
            <a href="#comparison-section" class="toc-btn">Consequences</a>
            <a href="#faq-section" class="toc-btn">FAQs</a>
        </div>
        <button class="toc-arrow right" id="tocRight">&#10095;</button>
    </div>
</div>

<!-- SECTION 2: OVERVIEW / INTRO + TL;DR -->
<section class="content-section" id="overview-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Defective Return Notice 139(9) in Mumbai &ndash; Overview</h2>
            <div class="content-text">
                <div class="highlight-box" style="margin-bottom:20px;">
                    <p><strong>&#128204; TL;DR - Defective Return Notice 139(9) Services at a Glance</strong></p>
                    <p>A 139(9) notice is issued by CPC Bengaluru when an ITR contains incomplete or inconsistent information. 15-day deadline to rectify (shortest IT notice deadline). Response: agree and upload corrected JSON, or disagree with reasons. If NOT rectified: return treated as INVALID (never filed) &ndash; penalty (S234F), interest (S234A/B/C), loss of carry-forward, loss of exemptions, no refund. Most common Mumbai defect: TDS mismatch with Form 26AS. Alternative: revised return u/s 139(5) if window open. Correction opportunity, not accusation.</p>
                </div>
                <p>Mumbai taxpayers receive 139(9) notices across every profile: BKC salaried with TDS mismatches, Powai founders with wrong ITR form, Fort businesses with missing audit report, NRIs with incomplete Schedule FA, and investors with missing capital gains details. Learn more about <a href="/income-tax-notice-for-defective-return">Defective Return Notice across India</a>.</p>
                <p>Patron Accounting's Mumbai office provides end-to-end 139(9) response: notice analysis, Form 26AS reconciliation, corrected return preparation (JSON), portal submission, disagree responses, and post-response monitoring. For ITR filing, see <a href="/income-tax-return">Income Tax Return</a>. For other notices, see <a href="/income-tax-notice">Income Tax Notice</a>.</p>
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
                <h2 class="section-title">What Is Defective Return Notice Section 139(9)?</h2>
                <div class="content-text what-is-definition">
                    
                    <p>A 139(9) notice from CPC Bengaluru informs the taxpayer their ITR contains errors, inconsistencies, or incomplete information. Delivered via email and e-filing portal under E-Proceedings. PDF password: PAN lowercase + DOB (DDMMYYYY). It is a correction mechanism, not a penalty &ndash; giving 15 days to fix it.</p>
                    <p>Response options: (a) agree and upload corrected JSON, or (b) disagree with written reasons. The corrected return is prepared via offline utility. Response cannot be updated once submitted &ndash; accuracy is critical. For <a href="/tds-return-filing-24q">TDS Return Filing</a> to prevent TDS-related defects, see our page.</p>
                    <p>If not rectified within 15 days: return treated as invalid. Penalty, interest, loss of carry-forward, and no refund. For Tax Planning to avoid defects, see our page.</p>

                </div>
                <div class="highlight-box" style="margin-top:20px;">
                    <p><strong>Key Terms for Defective Return Notice 139(9):</strong></p>
                    <ul>
                        <li><strong>Section 139(9):</strong> Return defective when incomplete/inconsistent &ndash; 15-day correction window</li>
                        <li><strong>15-Day Deadline:</strong> Shortest IT notice deadline &ndash; extension by application to AO</li>
                        <li><strong>Corrected Return (JSON):</strong> Prepared via offline utility, uploaded on E-Proceedings portal</li>
                        <li><strong>Section 234F:</strong> Late filing penalty Rs 1,000-5,000 if return becomes invalid</li>
                        <li><strong>Section 139(5):</strong> Revised return &ndash; alternative if revision window still open</li>
                        <li><strong>CPC Bengaluru:</strong> Issues all 139(9) notices (not local AO)</li>
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
                            <text x="100" y="170" font-size="10" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial, sans-serif">Defective Return Notice 139(9)</text>
                        </svg>
                    </div>
                    <div class="illustration-badge">
                        <span>CA Managed</span>
                        <strong>Corrected Return</strong>
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
            <h2 class="section-title">When Mumbai Taxpayers Receive 139(9) Notices</h2>
            <div class="content-text">
                
                <p><strong>TDS credit mismatch at BKC/Nariman Point</strong> &ndash; Most common defect. ITR TDS doesn't match Form 26AS: employer deposited late, bank TDS wrong section, multiple Form 16s. CPC flags automatically. Patron reconciles 26AS and corrects the claim.</p>
                <p><strong>Wrong ITR form by Powai founders</strong> &ndash; Salary + business + capital gains filed in ITR-1 (needs ITR-3). CPC detects mismatch. Patron re-files in correct form for Mumbai startup founders.</p>
                <p><strong>Missing audit report at Fort/Dadar businesses</strong> &ndash; Turnover &gt; Rs 1 crore but Form 3CA/3CD not uploaded/linked. Patron coordinates audit report filing and ITR linking.</p>
                <p><strong>Incomplete capital gains for Mumbai investors</strong> &ndash; Summary reported but computation schedule missing acquisition cost, holding period, STT details. Patron completes the schedule.</p>
                <p><strong>Missing Schedule FA for NRIs/BKC executives</strong> &ndash; Foreign bank accounts, investments not in Schedule FA despite CRS data. Patron compiles foreign assets and completes Schedule FA.</p>
                <p><strong>P&amp;L/BS mismatch for Mumbai businesses</strong> &ndash; ITR figures don't match uploaded financials or audit report. Patron reconciles and corrects. For <a href="/statutory-audit">Statutory Audit</a>, see our page.</p>

            </div>
            </div>
        </div>
    </div>
</section>

<!-- SECTION 5: OUR SERVICES -->
<section class="content-section" id="services-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Defective Return Response Services Included</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Service</th><th>What We Do</th></tr></thead>
                    <tbody>
                        <tr><td>Notice Analysis &amp; Defect Identification</td><td>Download notice, identify defect code, determine genuine error vs CPC misinterpretation, develop response strategy within 1-2 days for Mumbai taxpayers</td></tr>
                        <tr><td>Form 26AS / AIS Reconciliation</td><td>For TDS mismatches: reconcile ALL TDS sources (salary, bank, professional, property) with Form 26AS/AIS. Identify exact mismatch source. Correct the claim</td></tr>
                        <tr><td>Corrected Return Preparation (JSON)</td><td>Address specific defect: add missing income, change ITR form, complete schedules, correct computation. Verify against 26AS and all data before generating JSON</td></tr>
                        <tr><td>E-Filing Portal Submission</td><td>Upload corrected JSON: E-Proceedings > Agree > Offline Utility > Upload > E-verify. Response CANNOT be updated once submitted. Accuracy critical. Patron submits for Mumbai taxpayers</td></tr>
                        <tr><td>Disagree Response</td><td>When CPC misidentified defect: written explanation with supporting documentation. Patron drafts disagree responses when CPC's defect identification is wrong</td></tr>
                        <tr><td>Extension Request</td><td>If 15 days insufficient for complex corrections: written application to AO before deadline. Patron files proactively for Mumbai taxpayers needing more time</td></tr>
                        <tr><td>Alternative: Revised Return</td><td>If S139(5) window open: file fresh revised return. Recommended to respond to 139(9) notice AND file revised if needed. Patron advises optimal approach</td></tr>
                        <tr><td>Post-Response Monitoring</td><td>Track processing status until return is processed. If fresh 139(9) for different defect: respond within new deadline. Monitor refund credit for Mumbai taxpayers</td></tr>

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
            <h2 class="section-title">How to Respond to Defective Return Notice 139(9) in Mumbai</h2>
            <p class="section-subtitle" style="text-align:left;max-width:100%;">Patron analyses within 1-2 days, prepares corrected return within 3-5 days, and submits well within the 15-day deadline. First-time accuracy ensures no second notice.</p>
        </header>
        <div class="steps-container">
            <div class="step-card"><div class="step-content"><span class="step-badge">Step 1</span><h3 class="step-title">Analyse Notice &amp; Identify Defect</h3><p class="step-description">Download 139(9) notice from E-Proceedings (PDF password: PAN lowercase + DOB). Identify exact defect code: TDS mismatch, wrong ITR form, missing schedule, audit report, P&amp;L mismatch, Schedule FA. Cross-reference with original ITR. Patron identifies defect and root cause within 1-2 days for Mumbai taxpayers.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Defect identified</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Root cause found</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="15" y="10" width="90" height="65" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><line x1="30" y1="30" x2="90" y2="30" stroke="#F5A623" stroke-width="3" stroke-linecap="round"/><circle cx="85" cy="55" r="10" fill="#E8F5E9" stroke="#10B981" stroke-width="1.2"/><path d="M80 55l3 3 6-6" stroke="#10B981" stroke-width="2" stroke-linecap="round"/></svg></div><span class="illustration-label">Analysed</span><span class="step-number-large">01</span></div></div></div><div class="step-card"><div class="step-content"><span class="step-badge">Step 2</span><h3 class="step-title">Reconcile &amp; Prepare Corrected Return</h3><p class="step-description">For TDS mismatch: reconcile ALL TDS sources with Form 26AS. For wrong form: re-prepare in correct ITR form. For missing schedule: gather data and complete. Generate corrected JSON file via offline utility. Verify against 26AS, AIS, and all schedules before upload. Patron prepares within 3-5 days for Mumbai taxpayers.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>26AS reconciled</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>JSON prepared</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="20" y="8" width="80" height="70" rx="4" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><circle cx="60" cy="35" r="15" fill="#FFF3E0" stroke="#F5A623" stroke-width="1.2"/><path d="M53 35l5 5 10-10" stroke="#10B981" stroke-width="2.5" stroke-linecap="round"/></svg></div><span class="illustration-label">Corrected</span><span class="step-number-large">02</span></div></div></div><div class="step-card"><div class="step-content"><span class="step-badge">Step 3</span><h3 class="step-title">Submit on Portal &amp; E-Verify</h3><p class="step-description">E-Proceedings &gt; select 139(9) notice &gt; Agree &gt; Offline Utility &gt; upload corrected JSON &gt; e-verify (Aadhaar OTP / net banking). Save acknowledgement. Response CANNOT be updated once submitted &ndash; accuracy critical. If CPC error: select Disagree with written explanation. Patron submits for Mumbai taxpayers.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Uploaded</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>E-verified</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="20" y="10" width="80" height="60" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><rect x="35" y="25" width="50" height="8" rx="3" fill="#E8712C" opacity="0.3"/><path d="M80 55l-8 8-5-5" stroke="#10B981" stroke-width="2.5" stroke-linecap="round"/></svg></div><span class="illustration-label">Submitted</span><span class="step-number-large">03</span></div></div></div><div class="step-card"><div class="step-content"><span class="step-badge">Step 4</span><h3 class="step-title">Monitor Until Processed</h3><p class="step-description">Track status: Defective &rarr; Successfully e-verified &rarr; Processed. If fresh 139(9) for different defect: respond within new 15-day deadline. If return processed with refund: monitor refund credit. Patron monitors until return is fully processed and refund (if applicable) is credited for Mumbai taxpayers.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Status tracked</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Return processed</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="25" y="10" width="70" height="55" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><circle cx="60" cy="35" r="18" fill="#E8F5E9" stroke="#10B981" stroke-width="1.5"/><path d="M52 35l6 6 12-12" stroke="#10B981" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/></svg></div><span class="illustration-label">Resolved</span><span class="step-number-large">04</span></div></div></div>

        </div>
    </div>
</section>

<!-- SECTION 8: DOCUMENTS REQUIRED -->
<section class="content-section" id="documents-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Documents Required for 139(9) Response</h2>
            <div class="content-text">
                
                <ul>
                    <li><strong>139(9) Notice:</strong> Downloaded from portal with defect code and deadline</li>
                    <li><strong>Original ITR (as filed):</strong> For comparison with defect flagged</li>
                    <li><strong>Form 26AS / AIS / TIS:</strong> For TDS reconciliation (most common defect)</li>
                    <li><strong>Form 16 / 16A / 16B / 16C:</strong> TDS certificates from all deductors</li>
                    <li><strong>Tax Audit Report (3CA/3CD):</strong> If defect is missing audit report</li>
                    <li><strong>Financial Statements (P&amp;L, BS):</strong> If defect is P&amp;L/BS mismatch</li>
                    <li><strong>Capital Gains Computation:</strong> Contract notes, demat statements, acquisition proofs</li>
                    <li><strong>Schedule FA Details:</strong> Foreign bank accounts, balances, income (for NRIs/executives)</li>
                </ul>
                <div class="highlight-box" style="margin-top:16px;">
                    <p><strong>Mumbai-Specific Tip:</strong> For professionals with multiple employers during the year (common in BKC/Powai), TDS mismatch is the most frequent trigger. Each employer issues separate Form 16, and cumulative TDS must exactly match Form 26AS. If one employer's deposit is delayed or has wrong PAN, 26AS won't match. Patron reconciles all employers' TDS for Mumbai professionals with multiple Form 16s.</p>
                </div>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 9: CHALLENGES -->
<section class="content-section" id="challenges-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Common Challenges in Defective Return Response in Mumbai</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Challenge</th><th>Impact</th><th>How Patron Accounting Solves It</th></tr></thead>
                    <tbody>
                        <tr><td>TDS Mismatch Not Taxpayer's Fault</td><td>Employer deposited TDS late or with wrong PAN. Taxpayer correctly claimed TDS but Form 26AS doesn't match. CPC flags as defect</td><td>Option 1 (safer): reduce TDS claim in corrected return, file rectification after 26AS updated. Option 2: disagree citing employer TDS return. Patron coordinates with employer</td></tr>
                        <tr><td>15-Day Deadline Too Short</td><td>Complex business returns with audit reports, capital gains, multiple income sources need more than 15 days. Extension must be filed before deadline</td><td>Patron files extension request proactively before deadline for Mumbai taxpayers whose corrections require more time</td></tr>
                        <tr><td>Response Cannot Be Updated</td><td>E-filing portal doesn't allow updating or withdrawing once submitted. Error in corrected return = stuck with it</td><td>Patron verifies corrected return against 26AS, AIS, and all schedules BEFORE uploading. First-time accuracy</td></tr>
                        <tr><td>Wrong ITR Form = Complete Re-Filing</td><td>Entire return must be re-prepared in correct form (all schedules fresh). Not minor correction. Significant exercise for startup founders/professionals</td><td>Patron re-prepares complete return in correct form with all schedules. Mumbai startup founders and professionals covered</td></tr>
                        <tr><td>Cascading Impact on Refund</td><td>Defective return freezes refund processing. For Mumbai professionals expecting Rs 50K-5L refund, every day of delay = delayed cash flow</td><td>Patron prioritises refund-impacting 139(9) responses. Corrected return submitted within 5 days for Mumbai taxpayers</td></tr>

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
            <h2 class="section-title">Defective Return Response Fees in Mumbai</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Fee Component</th><th>Amount</th></tr></thead>
                    <tbody>
                        <tr><td>Penalty for Non-Response (Return Invalid)</td><td>Section 234F: Rs 1,000-5,000 late filing fee</td></tr>
                        <tr><td>Interest (Return Invalid)</td><td>Section 234A: 1% per month on unpaid tax from due date</td></tr>
                        <tr><td>Loss of Carry-Forward</td><td>Business and capital losses cannot be carried forward</td></tr>
                        <tr><td>Patron Fee &ndash; Simple Defect (TDS Mismatch)</td><td>Starting Rs 2,000 (26AS reconciliation + corrected JSON + upload)</td></tr>
                        <tr><td>Patron Fee &ndash; Wrong ITR Form Re-Filing</td><td>Starting Rs 3,000 (complete re-preparation in correct form + upload)</td></tr>
                        <tr><td>Patron Fee &ndash; Business Return Correction</td><td>Starting Rs 5,000 (P&amp;L/BS reconciliation + audit report linking + corrected return)</td></tr>
                        <tr><td>Patron Fee &ndash; Capital Gains Schedule</td><td>Starting Rs 3,000 (compute gains + complete schedule + corrected return)</td></tr>
                        <tr><td>Patron Fee &ndash; Schedule FA (NRIs)</td><td>Starting Rs 3,000 (foreign asset compilation + Schedule FA + corrected return)</td></tr>
                        <tr><td>Patron Fee &ndash; Complex + Extension</td><td>Starting Rs 5,000 (extension application + complex correction + follow-up)</td></tr>
                        <tr><td>Patron Fee &ndash; Disagree Response</td><td>Starting Rs 2,000 (written explanation + supporting documentation)</td></tr>

                    </tbody>
                </table>
                </div>
                <p style="margin-top:16px;font-size:13px;color:var(--text-muted);font-style:italic;">All fees and charges listed are indicative only and do not constitute a binding offer. Final amounts may vary depending on the volume of work and the complexity involved.</p>
                <p style="margin-top:16px;">Professional service charges for drafting, filing, and representation are separate from the statutory fees. The exact fee depends on the complexity of the case, disputed amount, and number of hearings required. Contact us for a detailed quote.</p>
                <p style="margin-top:16px;"><strong>Get a free Defective Return Notice 139(9) consultation - <a href="tel:+919459456700">Call +91 945 945 6700</a> or <a href="https://wa.me/919459456700?text=Hello%2C%20I%20just%20visited%20your%20Income%20Tax%20Notice%20for%20Defective%20Return%20in%20Mumbai%20page.%20I%20would%20like%20to%20know%20more%20about%20it." target="_blank" rel="noopener">WhatsApp us</a>. No-obligation assessment.</strong></p>
            </div>
        </div>
    </div>
</section>

<!-- SECTION 11: TIMELINE -->
<section class="content-section" id="timeline-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">139(9) vs Other IT Notices</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Stage</th><th>Estimated Timeline</th></tr></thead>
                    <tbody>
                        <tr><td>Defective Return 139(9)</td><td>Correct errors in filed return | CPC Bengaluru | 15 days (shortest) | Low-Medium severity (correction opportunity)</td></tr>
                        <tr><td>CPC Intimation 143(1)</td><td>Processing result; demand or refund | CPC | 30 days | Medium</td></tr>
                        <tr><td>Inquiry Notice 142(1)</td><td>Information gathering before assessment | AO/NeAC | 15-30 days | Medium</td></tr>
                        <tr><td>Scrutiny Notice 143(2)</td><td>Full assessment of income | AO/NeAC | Assessment timeline | High</td></tr>
                        <tr><td>Demand Notice 156</td><td>Payment of tax/interest/penalty | AO/CPC | 30 days | High</td></tr>
                        <tr><td>Reassessment Notice 148</td><td>Reopen past assessment | AO | 3 months for return | High</td></tr>

                    </tbody>
                </table>
                </div>
                <div class="highlight-box" style="margin-top:16px;">
                    
                    <p><strong>Section 139(9) is the least severe IT notice but has the SHORTEST deadline (15 days).</strong> This combination (low severity + shortest deadline) means Mumbai taxpayers often underestimate the urgency. The consequence of missing the 15-day deadline (return becoming invalid) is disproportionately severe compared to the simplicity of the correction required. Don't let a fixable defect turn into an invalid return.</p>

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
            <h2 class="section-title">Why Choose Patron for 139(9) Response in Mumbai</h2>
        </div>
        <div class="features-grid">
            <article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><h3 class="feature-title">Same-Day Defect Identification</h3><p class="feature-text">Notice analysed and exact defect identified within 1-2 days. For TDS mismatches: Form 26AS reconciled on same day, pinpointing which TDS credit is causing the mismatch.</p></article>
            <article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg></div><h3 class="feature-title">Accurate First-Time Submission</h3><p class="feature-text">Response CANNOT be updated once submitted. Patron verifies corrected return against Form 26AS, AIS, and all schedules before uploading. No second notice due to correction errors.</p></article>
            <article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="2" y="3" width="20" height="14" rx="2"/><path d="M8 21h8M12 17v4"/></svg></div><h3 class="feature-title">Multi-Source TDS Reconciliation</h3><p class="feature-text">Mumbai professionals often have TDS from salary (multiple employers), bank interest, professional fees, property rent. Patron reconciles ALL sources with 26AS &ndash; not just the flagged item.</p></article>
            <article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M14 2H6a2 2 0 00-2 2v16a2 2 0 002 2h12a2 2 0 002-2V8z"/><path d="M14 2v6h6"/></svg></div><h3 class="feature-title">Business &amp; NRI Specialisation</h3><p class="feature-text">Business returns: P&amp;L/BS consistency, audit report linking, presumptive income. NRIs: Schedule FA compilation with Black Money Act compliance. Complete consistency ensured.</p></article>
        </div>
    </div>
</section>

<!-- SECTION 12A: SOCIAL PROOF -->
<section class="content-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Trusted by Mumbai Taxpayers</h2>
            <div class="content-text">
                
                <p><strong>Trust Signals:</strong> 10,000+ Businesses | 4.9 Google Rating | 50,000+ Documents Filed | 15+ Years</p>
                <blockquote style="border-left:3px solid var(--orange);padding:12px 20px;margin:16px 0;background:var(--orange-lighter);border-radius:0 var(--radius-sm) var(--radius-sm) 0;">
                    <p style="font-style:italic;margin-bottom:8px;">&ldquo;I received a 139(9) notice for TDS mismatch &ndash; my employer had deposited Q3 TDS with the wrong PAN. Patron reconciled all 4 quarters, identified the exact Rs 38,000 mismatch, prepared the corrected return reducing the claim for Q3, and uploaded it in 5 days. My refund was processed within 3 months.&rdquo;</p>
                    <p style="font-size:13px;font-weight:700;color:var(--blue);margin:0;">&mdash; Senior Analyst, IT Company, BKC</p>
                </blockquote>
                <p>Offices in Pune, Mumbai, Delhi, and Gurugram serving taxpayers with defective return response, ITR filing, and compliance.</p>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 13: SELF-FILING vs PROFESSIONAL COMPARISON -->
<section class="content-section" id="comparison-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Consequences of Not Responding to 139(9)</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Consequence</th><th>What Happens</th><th>Prevention</th></tr></thead>
                    <tbody>
                        <tr><td>Return Treated as Invalid</td><td>Equivalent to not filing ITR; no refund processed</td><td>Respond within 15 days or request extension</td></tr>
                        <tr><td>Penalty Section 234F</td><td>Rs 5,000 (income &gt; Rs 5 lakh) or Rs 1,000</td><td>Timely response avoids penalty</td></tr>
                        <tr><td>Interest Section 234A</td><td>1% per month on unpaid tax from original due date</td><td>Timely response + tax payment</td></tr>
                        <tr><td>Loss of Carry-Forward</td><td>Business and capital losses cannot be carried forward to future years</td><td>Timely response preserves loss carry-forward</td></tr>
                        <tr><td>Loss of Specific Exemptions</td><td>Section 80-IA, 10AA deductions require timely valid return</td><td>Timely response preserves exemptions</td></tr>
                        <tr><td>No Set-Off of Losses</td><td>Current year losses may not be set off against other income</td><td>Timely response preserves set-off rights</td></tr>
                        <tr><td>Scrutiny Risk</td><td>Invalid return may trigger 142(1) notice for non-filing</td><td>Timely response keeps return valid; avoids escalation</td></tr>

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
                    <li><a href="/income-tax-notice-for-defective-return">Defective Return Notice (India Overview)</a></li>
                    <li><a href="/income-tax-return">Income Tax Return Filing</a></li>
                    <li><a href="/income-tax-notice">Income Tax Notice</a></li>
                    <li><a href="/income-tax-demand-under-section-156">IT Demand Section 156</a></li>
                    <li><a href="/income-tax-notices-under-section-142-1">IT Notice Section 142(1)</a></li>
                    <li><a href="/tds-return-filing-24q">TDS Return Filing</a></li>
                    <li><a href="/statutory-audit">Statutory Audit</a></li>
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
            <h2 class="section-title">Legal &amp; Compliance Framework</h2>
            <div class="content-text">
                
                <ul>
                    <li><strong>Section 139(9):</strong> Return defective when incomplete/inconsistent &ndash; CPC issues notice</li>
                    <li><strong>15-Day Deadline:</strong> Rectify within 15 days; extension by application to AO</li>
                    <li><strong>If Not Rectified:</strong> Return invalid &ndash; equivalent to non-filing</li>
                    <li><strong>Section 234F:</strong> Late filing penalty Rs 1,000-5,000</li>
                    <li><strong>Section 234A/B/C:</strong> Interest on unpaid tax</li>
                    <li><strong>Section 139(5):</strong> Revised return alternative if window open</li>
                    <li><strong>Response:</strong> E-filing portal &gt; E-Proceedings &gt; Agree/Disagree</li>
                    <li><strong>JSON Upload:</strong> Corrected return via offline utility</li>
                    <li><strong>Response Finality:</strong> Cannot update or withdraw once submitted</li>
                    <li><strong>CPC Bengaluru:</strong> Issues all 139(9) notices (not local AO)</li>
                </ul>
                <p><strong>Filing Portal:</strong> <a href="https://www.incometax.gov.in" target="_blank" rel="noopener">incometax.gov.in</a></p>

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
                    <h2 class="faq-expanded__title">Frequently Asked Questions &ndash; Defective Return Notice 139(9) in Mumbai</h2>
                    <p class="faq-expanded__lead">Get answers about what makes a return defective, response time, non-response consequences, revised return option, TDS mismatch, authorisation, second notices, and difference from 143(1).</p>
                    @include('partials.bigin-form', [
                        'variant'  => 'compact',
                        'service'  => 'Defective Return Notice 139(9)',
                        'city'     => 'Mumbai',
                    ])
                </aside>
                <div class="faq-expanded__list">
                    <div class="faq-expanded__item" id="faq-1">
                        <h3 class="faq-expanded__q">What makes a return defective?</h3>
                        <div class="faq-expanded__a"><p>Incomplete or inconsistent information: TDS mismatch with Form 26AS, wrong ITR form, missing income schedules, audit report not uploaded, P&amp;L/BS mismatch, Schedule FA incomplete, deduction details missing. CPC Bengaluru flags automatically. Patron identifies exact defect for Mumbai taxpayers.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-2">
                        <h3 class="faq-expanded__q">How much time to respond?</h3>
                        <div class="faq-expanded__a"><p>15 days from receiving notice (shortest IT notice deadline). Extension possible by written application to AO before deadline. Even if rectified after 15 days, AO may accept at discretion. But relying on discretion is risky. Patron responds well within deadline for Mumbai taxpayers.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-3">
                        <h3 class="faq-expanded__q">What if I don't respond within 15 days?</h3>
                        <div class="faq-expanded__a"><p>Return treated as invalid (never filed). Penalty S234F (Rs 1,000-5,000), interest S234A/B/C, loss of carry-forward of losses, loss of specific exemptions, no refund processing, potential scrutiny for non-filing. Patron ensures timely response for Mumbai taxpayers.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-4">
                        <h3 class="faq-expanded__q">Can I file revised return instead?</h3>
                        <div class="faq-expanded__a"><p>Yes, if S139(5) window open (before AY end or assessment). But filing revised without responding to 139(9) leaves notice unresolved. Recommended: respond to notice AND file revised if needed. Patron advises best approach for each Mumbai taxpayer.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-5">
                        <h3 class="faq-expanded__q">TDS mismatch not my fault &ndash; what to do?</h3>
                        <div class="faq-expanded__a"><p>Common for Mumbai salaried: employer late deposit or wrong PAN. Options: (1) Reduce TDS claim in corrected return (safer &ndash; keeps return valid, file rectification after 26AS updated). (2) Disagree citing employer TDS return. Patron coordinates with employer and advises.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-6">
                        <h3 class="faq-expanded__q">Can someone respond on my behalf?</h3>
                        <div class="faq-expanded__a"><p>Yes. Authorise CA or representative through e-filing portal's authorisation mechanism. Patron responds as authorised representative for Mumbai taxpayers &ndash; notice analysis, corrected return preparation, and portal submission all handled.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-7">
                        <h3 class="faq-expanded__q">What if I get a second 139(9) notice?</h3>
                        <div class="faq-expanded__a"><p>Can happen if corrected return has different defect or first correction incomplete. Respond within new 15-day deadline. Underscores importance of accuracy in first submission. Patron verifies against all parameters before submission to minimise risk of second notice.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-8">
                        <h3 class="faq-expanded__q">Is 139(9) same as 143(1) intimation?</h3>
                        <div class="faq-expanded__a"><p>No. 139(9) asks to CORRECT errors in return (before processing). 143(1) shows final computation AFTER processing (demand or refund). Different stages: 139(9) first (if defects), then 143(1) after processed. Patron handles both for Mumbai taxpayers.</p></div>
                    </div>
                </div>
            </div>


            <!-- Quick Answers -->
            <div class="highlight-box" style="margin-top:32px;">
                <p><strong>Quick Answers</strong></p>
                <p><strong>139(9) ka notice aaya hai &ndash; kya kare?</strong> Portal pe login karo, E-Proceedings mein notice dekho. Defect padho (TDS mismatch, wrong form, missing schedule). Form 26AS se match karo. Corrected return prepare karo (JSON). Portal pe upload karo: Agree &gt; Upload JSON &gt; E-verify. 15 din ke andar respond karo warna return INVALID ho jayega.</p>
                <p><strong>TDS match nahi ho raha &ndash; employer ne late deposit kiya?</strong> Corrected return mein TDS claim kam karo (sirf 26AS amount), return valid hoga. Jab employer 26AS update karega tab rectification file karo. Ya disagree karo employer TDS return evidence ke saath. Patron best approach advise karta hai.</p>
                <p><strong>Wrong ITR form use kiya tha?</strong> Correct form mein poora return dubara prepare karo. Sab schedules fill karo. JSON generate karo aur upload karo. Patron correct form mein return prepare karke upload karta hai.</p>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 18: URGENCY CTA -->
<section class="content-section" style="background: var(--orange-lighter) !important; border-left: 4px solid var(--orange);">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">15 Days Is All You Have &ndash; Don't Let Your Return Become Invalid</h2>
            <div class="content-text">
                
                <p>The 139(9) notice has the shortest deadline of any IT notice &ndash; 15 days. Miss it and your return becomes invalid: no refund, penalty, interest, loss of carry-forward. The correction is usually simple (TDS reconciliation, form change, schedule completion) but the consequence of delay is severe. Most Mumbai defects can be corrected within 5 days with professional help.</p>
                <p><strong>Get your defective return corrected today &ndash; <a href="tel:+919459456700">Call +91 945 945 6700</a> or <a href="https://wa.me/919459456700?text=Hello%2C%20I%20just%20visited%20your%20Income%20Tax%20Notice%20for%20Defective%20Return%20in%20Mumbai%20page.%20I%20would%20like%20to%20know%20more%20about%20it." target="_blank" rel="noopener">WhatsApp us</a>.</strong></p>

            </div>
        </div>
    </div>
</section>

<!-- CONCLUSION + CTA BLOCK (Dark) -->
<section class="content-section" style="background: var(--blue) !important;">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title" style="color:#FFFFFF !important;">Get Your Defective Return Corrected in Mumbai</h2>
            <div class="content-text" style="text-align:left;">
                
                <p style="color:rgba(255,255,255,0.85);font-size:16px;line-height:1.7;">Defective return notice Section 139(9) in Mumbai is a correction opportunity with the shortest IT notice deadline &ndash; 15 days. Whether triggered by TDS mismatch, wrong ITR form, missing audit report, incomplete capital gains, or Schedule FA gaps, the correction is usually straightforward but the consequence of missing the deadline (invalid return) is severe.</p>
                <p style="color:rgba(255,255,255,0.85);font-size:16px;line-height:1.7;">Patron Accounting's Mumbai office provides end-to-end response: same-day defect identification, Form 26AS reconciliation across all TDS sources, corrected return preparation with first-time accuracy, portal submission, disagree responses for CPC errors, and post-response monitoring until return is processed.</p>
                <p style="color:rgba(255,255,255,0.85);font-size:16px;line-height:1.7;">With offices in Pune, Mumbai, Delhi, and Gurugram, 10,000+ businesses served, and 4.9 Google rating, Patron Accounting LLP delivers expert defective return response across India.</p>

            </div>
            <div style="display:flex;gap:14px;flex-wrap:wrap;margin-top:24px;">
                <a href="tel:+919459456700" style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:var(--orange);color:#fff;border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#128222; Call +91 945 945 6700</a>
                <a href="https://wa.me/919459456700?text=Hello%2C%20I%20just%20visited%20your%20Income%20Tax%20Notice%20for%20Defective%20Return%20in%20Mumbai%20page.%20I%20would%20like%20to%20know%20more%20about%20it." target="_blank" style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:#25D366;color:#fff;border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;" rel="noopener">&#128172; WhatsApp Us</a>
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
            <h2 class="section-title" style="text-align:center;margin-bottom:12px;">Defective Return Response Across India</h2>
            <p style="text-align:center;color:var(--text-muted);font-size:15px;margin-bottom:40px;">Patron Accounting handles defective return notices in major cities with TDS reconciliation, corrected return preparation, and first-time accuracy.</p>
     
            <div class="pa-city-block" style="margin-bottom:40px;">
                        <div class="pa-block-title">Defective Return Response in Other Cities</div>
                        <div class="pa-block-sub">Professional 139(9) notice response across India</div>
                        <div class="pa-city-grid">
                            <div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Pune</div><div class="pa-card-sub">Maharashtra</div></div>
                            <div class="pa-city-card" style="opacity:0.6; pointer-events:none; border:2px solid var(--orange); position:relative;"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Mumbai</div><div class="pa-card-sub">Maharashtra</div></div><span style="position:absolute; top:6px; right:8px; font-size:10px; color:var(--orange); font-weight:700; text-transform:uppercase; letter-spacing:0.5px;">You're here</span></div>
                            <div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Delhi</div><div class="pa-card-sub">Delhi NCR</div></div>
                            <a href="/income-tax-notice-for-defective-return/gurugram" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Gurugram</div><div class="pa-card-sub">Haryana</div></div></a>
                        </div>
                    </div>
                    <div class="pa-city-block">
                        <div class="pa-block-title">Related Services in Mumbai</div>
                        <div class="pa-block-sub">End-to-end tax compliance</div>
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
            <p><strong>Content Created:</strong> 25 March 2026 &nbsp;|&nbsp; <strong>Last Updated:</strong> <span id="lastUpdatedFooter">25 March 2026</span> &nbsp;|&nbsp; <strong>Next Review:</strong> 25 June 2026 &nbsp;|&nbsp; <strong>Reviewed By:</strong> CA &amp; CS Team, Patron Accounting LLP</p>
            <p>This content is reviewed quarterly for IT Act provisions, CPC processing changes, and e-filing portal updates. Freshness Tier: 1.</p>
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
     CONSULTATION FORM — Country Dropdown + Validation + Bigin Integration
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
