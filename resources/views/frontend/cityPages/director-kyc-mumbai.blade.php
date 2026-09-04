
@extends('layouts.service-app')

<!-- External Dependencies (loaded by master layout in production) -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Barlow:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,400&family=DM+Sans:opsz,wght@9..40,400;9..40,500;9..40,600;9..40,700&display=swap" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

@section('meta')
    <title>Director KYC in Mumbai – DIR-3 KYC &amp; Sep 30 Deadline</title>
    <meta name="description" content="CA-assisted DIR-3 KYC in Mumbai. Annual to triennial (2026 rule), DIN reactivation, Rs 5,000 penalty, e-Form and Web. ROC Everest House. Call +91 945 945 6700.">
    <link rel="canonical" href="/director-kyc/mumbai">
    <meta name="robots" content="index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1">
    <meta property="og:title" content="Director KYC in Mumbai – DIR-3 KYC &amp; Sep 30 Deadline">
    <meta property="og:description" content="CA-assisted DIR-3 KYC in Mumbai. Annual to triennial (2026 rule), DIN reactivation, Rs 5,000 penalty, e-Form and Web. ROC Everest House. Call +91 945 945 6700.">
    <meta property="og:url" content="/director-kyc/mumbai">
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="Patron Accounting">
    <meta property="og:image" content="https://www.patronaccounting.com/images/og-default-square.png">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="1200">
    <meta property="og:image:type" content="image/png">
    <meta property="og:image:secure_url" content="https://www.patronaccounting.com/images/og-default-square.png">
    <meta property="og:image:alt" content="Patron Accounting - partner you can rely on">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Director KYC in Mumbai – DIR-3 KYC &amp; Sep 30 Deadline">
    <meta name="twitter:description" content="CA-assisted DIR-3 KYC in Mumbai. Annual to triennial (2026 rule), DIN reactivation, Rs 5,000 penalty, e-Form and Web. ROC Everest House. Call +91 945 945 6700.">
    <meta name="twitter:image" content="https://www.patronaccounting.com/images/og-default-square.png">
@endsection

@section('schema')
    <script type="application/ld+json">{
  "@context": "https://schema.org",
  "@graph": [
    {
      "@type": "Service",
      "name": "Director KYC (DIR-3) in Mumbai",
      "description": "CA-assisted DIR-3 KYC in Mumbai. Annual to triennial (2026 rule), DIN reactivation, Rs 5,000 penalty, e-Form and Web. ROC Everest House. Call +91 945 945 6700.",
      "url": "https://www.patronaccounting.com/director-kyc/mumbai",
      "serviceType": "Director KYC (DIR-3) in Mumbai",
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
        "url": "https://www.patronaccounting.com/director-kyc/mumbai",
        "price": "500"
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
          "name": "Director KYC (DIR-3)",
          "item": "https://www.patronaccounting.com/director-kyc"
        },
        {
          "@type": "ListItem",
          "position": 3,
          "name": "Director KYC (DIR-3) in Mumbai",
          "item": "https://www.patronaccounting.com/director-kyc/mumbai"
        }
      ]
    },
    {
      "@type": "FAQPage",
      "mainEntity": [
        {
          "@type": "Question",
          "name": "Has annual DIR-3 KYC been abolished?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Annual requirement replaced by triennial (once every 3 years) effective 31.03.2026. DIR-3 KYC itself NOT abolished - routine filing now once every 3 FYs by 30 June. Change in mobile/email/address still must be filed within 30 days. FY 2025-26 filers covered until 30 June 2028. Patron manages the triennial cycle."
          }
        },
        {
          "@type": "Question",
          "name": "What happens if DIR-3 KYC is not filed?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "DIN marked as 'Deactivated due to Non-filing'. Director cannot sign MCA forms, cannot be appointed to any company, pending filings requiring their DSC blocked. Reactivation: file e-Form DIR-3 KYC with Rs 5,000 fee. Patron provides emergency reactivation within 2-3 working days for Mumbai directors."
          }
        },
        {
          "@type": "Question",
          "name": "What is the difference between e-Form and Web?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "e-Form: first-time KYC, changes in details, DIN reactivation. Requires DSC, CA/CS/CMA certification, document attachments. Web: triennial routine confirmation when no details changed. No DSC, no certification, just OTP verification. Patron determines correct mode for each Mumbai director."
          }
        },
        {
          "@type": "Question",
          "name": "Do foreign national directors need to file?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Yes. All DIN holders regardless of nationality. Foreign nationals use passport as identity, overseas address, foreign mobile/email for OTP. No Indian address required for KYC. Patron handles foreign KYC for BKC MNC directors, coordinating OTP across time zones."
          }
        },
        {
          "@type": "Question",
          "name": "When is the next DIR-3 KYC due under triennial rule?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "FY 2025-26 filers: next due 30 June 2028. FY 2024-25 filers (not in 2025-26): next due 30 June 2027 (subject to MCA clarification). Never filed or deactivated: file immediately for reactivation then enter triennial cycle. Patron tracks schedule and sends reminders 60 days before."
          }
        },
        {
          "@type": "Question",
          "name": "Can a resigned director skip DIR-3 KYC?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "No. DIN remains active after resignation. As long as DIN is active (not surrendered), KYC is mandatory. Skipping leads to deactivation, creating problems for future directorship. Patron advises: continue filing or formally surrender DIN if no intention to serve again."
          }
        },
        {
          "@type": "Question",
          "name": "What is the penalty for late filing?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "DIN deactivation is the primary consequence (not monetary fine). Reactivation: file e-Form DIR-3 KYC with Rs 5,000 fee. No daily penalty unlike other MCA forms. But practical impact of deactivated DIN (blocked forms, blocked appointments) causes cascading failures. Patron's monitoring prevents deactivation."
          }
        },
        {
          "@type": "Question",
          "name": "Which ROC handles DIR-3 KYC in Mumbai?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "DIR-3 KYC filed electronically on MCA V3 portal, processed centrally. ROC Mumbai at Everest House handles queries and escalations for Mumbai companies. No physical submission required. Patron's Marine Lines office adjacent to ROC for any coordination needed."
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
                        Director KYC (DIR-3) in Mumbai: Triennial Filing, DIN Reactivation, and Compliance for Every DIN Holder
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
                            <p class="mb-0 text-dark benefit-paragraph"><span>2026 Update:</span> Annual DIR-3 KYC replaced by triennial (once every 3 years) filing | Effective 31 March 2026</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Due Date:</span> DIR-3 KYC Web once every 3rd FY by 30 June | Change in particulars: within 30 days (Rs 500)</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Non-Filing:</span> DIN deactivated | Cannot sign MCA forms or accept directorship | Reactivation: Rs 5,000</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Two Modes:</span> e-Form (first time/changes &ndash; DSC + CA/CS certification) | Web (triennial confirmation &ndash; no DSC)</p>
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
                        <a href="https://wa.me/919459456700?text=Hello%2C%20I%20just%20visited%20your%20Director%20KYC%20in%20Mumbai%20page.%20I%20would%20like%20to%20know%20more%20about%20it." target="_blank" class="btn-sample text-decoration-none" rel="noopener">
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
                                            'service'  => 'Director KYC (DIR-3)',
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
    'ctaText'    => 'Get your DIR-3 KYC filed or DIN reactivated by a CA team adjacent to ROC Mumbai &ndash; triennial tracking to emergency reactivation.',
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
            <a href="#who-section" class="toc-btn">Who Files</a>
            <a href="#services-section" class="toc-btn">Services</a>
            <a href="#procedure-section" class="toc-btn">Process</a>
            <a href="#documents-section" class="toc-btn">Documents</a>
            <a href="#challenges-section" class="toc-btn">Challenges</a>
            <a href="#fees-section" class="toc-btn">Fees</a>
            <a href="#timeline-section" class="toc-btn">Timeline</a>
            <a href="#benefits-section" class="toc-btn">Benefits</a>
            <a href="#comparison-section" class="toc-btn">Transition</a>
            <a href="#faq-section" class="toc-btn">FAQs</a>
        </div>
        <button class="toc-arrow right" id="tocRight">&#10095;</button>
    </div>
</div>

<!-- SECTION 2: OVERVIEW / INTRO + TL;DR -->
<section class="content-section" id="overview-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Director KYC (DIR-3) in Mumbai &ndash; Overview</h2>
            <div class="content-text">
                <div class="highlight-box" style="margin-bottom:20px;">
                    <p><strong>&#128204; TL;DR - Director KYC (DIR-3) Services at a Glance</strong></p>
                    <p>Director KYC (DIR-3 KYC) is the mandatory process for every DIN holder to confirm personal details with MCA. Major 2026 update: the Companies (Appointment and Qualification of Directors) Amendment Rules, 2025 (effective 31.03.2026) replaced the annual filing with triennial (once every 3 years). Directors who filed in FY 2025-26 are covered until 30 June 2028. However, change in mobile/email/address must still be filed within 30 days (Rs 500 fee). Non-filing deactivates the DIN, blocking all MCA activity until reactivation (Rs 5,000). Two modes: e-Form (first time/changes, DSC + CA certification) and Web (triennial, no DSC).</p>
                </div>
                <p>Mumbai has the highest concentration of company directors in India &ndash; Powai startup founders, BKC MNC subsidiary foreign nationals, Fort family business directors, Andheri tech company board members, and NRI directors. The triennial rule reduces routine compliance but makes change-driven filings and DIN monitoring more critical. Learn more about <a href="/director-kyc">Director KYC across India</a>.</p>
                <p>Patron Accounting's Mumbai office at Marine Lines &ndash; adjacent to ROC Everest House &ndash; provides end-to-end DIR-3 KYC: first-time e-Form, triennial Web filing, DIN reactivation, foreign national KYC, change-in-particulars, bulk KYC for multi-director companies, and year-round DIN monitoring. For director appointment, see <a href="/appointment-of-director">Appointment of Director</a>. For company compliance, see <a href="/private-limited-company-compliance">Private Limited Company Compliance</a>.</p>
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
                <h2 class="section-title">What Is Director KYC (DIR-3)?</h2>
                <div class="content-text what-is-definition">
                    
                    <p>Director KYC is a regulatory requirement under Rule 12A mandating every DIN holder to periodically confirm personal and contact details with MCA. It captures: name, date of birth, nationality, PAN, Aadhaar/passport, residential address, email, and mobile number.</p>
                    <p>Under the new triennial system (effective 31.03.2026), routine KYC is filed once every 3 consecutive financial years via DIR-3 KYC Web. However, any change in mobile, email, or address must be reported within 30 days via e-Form DIR-3 KYC with Rs 500 fee. This maintains data accuracy through change-driven filings. For <a href="/roc-notice">ROC Notice</a> responses, active DIN is essential.</p>
                    <p>For Mumbai, DIN deactivation blocks all MCA forms &ndash; a Powai startup founder cannot sign Board Resolutions for share allotment, a BKC MNC subsidiary cannot file AOC-4 if a signatory director's DIN is inactive. Professional KYC management prevents these blocks.</p>

                </div>
                <div class="highlight-box" style="margin-top:20px;">
                    <p><strong>Key Terms for Director KYC (DIR-3):</strong></p>
                    <ul>
                        <li><strong>Rule 12A:</strong> Governs DIR-3 KYC filing for all DIN holders &ndash; amended to triennial from 31.03.2026</li>
                        <li><strong>Triennial Filing:</strong> New 2026 rule &ndash; DIR-3 KYC Web once every 3 FYs by 30 June</li>
                        <li><strong>e-Form DIR-3 KYC:</strong> Full form with DSC + CA/CS/CMA certification &ndash; first time, changes, reactivation</li>
                        <li><strong>DIR-3 KYC Web:</strong> Simplified triennial confirmation &ndash; no DSC, no certification, OTP only</li>
                        <li><strong>DIN Deactivation:</strong> Consequence of non-filing &ndash; Rs 5,000 reactivation fee, blocks all MCA activity</li>
                        <li><strong>2025 Amendment Rules:</strong> Notified 31.12.2025, effective 31.03.2026 &ndash; annual replaced by triennial</li>
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
                            <text x="100" y="170" font-size="10" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial, sans-serif">Director KYC (DIR-3)</text>
                        </svg>
                    </div>
                    <div class="illustration-badge">
                        <span>CA Certified</span>
                        <strong>Director KYC</strong>
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
            <h2 class="section-title">Who Must File DIR-3 KYC in Mumbai?</h2>
            <div class="content-text">
                
                <p><strong>Every DIN holder as on 31 March</strong> &ndash; Universal rule. Active directors, resigned directors (DIN remains active), disqualified directors, and DPIN holders (LLP Designated Partners). A Powai founder who resigned but holds DIN must file. For LLP Compliance, DPIN KYC follows the same rules.</p>
                <p><strong>Directors of multiple Mumbai companies</strong> &ndash; One KYC filing covers all directorships. DIN-linked, not company-linked. Patron tracks KYC for directors on multiple boards.</p>
                <p><strong>Foreign national directors (BKC MNC subsidiaries)</strong> &ndash; File using passport as identity, overseas residential address, foreign mobile/email for OTP. No Indian address required for KYC.</p>
                <p><strong>NRI directors</strong> &ndash; Passport + overseas address. Even dormant or struck-off company directors must file.</p>
                <p><strong>Directors of dormant/struck-off companies</strong> &ndash; DIN remains active. Many Mumbai directors discover deactivation only when joining a new company's board.</p>
                <p><strong>DPIN holders (LLP Designated Partners)</strong> &ndash; Same rules and deadlines as DIN holders.</p>

            </div>
            </div>
        </div>
    </div>
</section>

<!-- SECTION 5: OUR SERVICES -->
<section class="content-section" id="services-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">DIR-3 KYC Services Included</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Service</th><th>What We Do</th></tr></thead>
                    <tbody>
                        <tr><td>First-Time e-Form DIR-3 KYC</td><td>Personal details, PAN, Aadhaar/passport, address proof, mobile/email OTP, DSC, CA/CS/CMA certification. For newly obtained DINs and directors who have never filed. Patron coordinates OTP and certification</td></tr>
                        <tr><td>Triennial DIR-3 KYC Web (New 2026)</td><td>Simplified confirmation once every 3 FYs by 30 June. No DSC, no certification. Director verifies pre-loaded details, OTP, submit. Patron manages Web filing as part of annual compliance tracking</td></tr>
                        <tr><td>Change-in-Particulars (30 Days)</td><td>Mobile, email, or address change: e-Form DIR-3 KYC within 30 days + Rs 500. Full e-Form with DSC + certification required. Patron tracks changes and files promptly</td></tr>
                        <tr><td>DIN Reactivation</td><td>Deactivated DIN: file e-Form DIR-3 KYC + Rs 5,000 late fee. DIN reactivated upon filing. Emergency reactivation within 2-3 working days. Patron provides immediate processing</td></tr>
                        <tr><td>Foreign National KYC</td><td>Passport-based, overseas address, foreign mobile/email OTP. OTP timing coordinated across time zones. For BKC MNC subsidiary directors. Patron handles entirely remotely</td></tr>
                        <tr><td>Bulk KYC (5+ Directors)</td><td>Batch processing for company Board. Individual status tracked, OTP coordinated, all forms filed together. Prevents one deactivated DIN blocking company filings. Reduced per-director cost</td></tr>
                        <tr><td>Annual DIN Status Monitoring</td><td>Year-round active status verification on MCA portal. Triennial cycle tracked. Alerts sent 60 days before deadline. Change-in-particulars flagged. Proactive prevention of deactivation</td></tr>
                        <tr><td>DSC Management</td><td>DSC validity verification, renewal coordination, DIN linkage check. Expired or mismatched DSC causes e-Form rejection. Patron verifies before every filing</td></tr>

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
            <h2 class="section-title">DIR-3 KYC Filing Process in Mumbai</h2>
            <p class="section-subtitle" style="text-align:left;max-width:100%;">Patron files e-Form within 3 working days and Web within 1 day. Emergency DIN reactivation in 2-3 days. OTP coordination across time zones for foreign nationals.</p>
        </header>
        <div class="steps-container">
            <div class="step-card"><div class="step-content"><span class="step-badge">Step 1</span><h3 class="step-title">Verify DIN Status &amp; Determine Mode</h3><p class="step-description">Check DIN status on MCA V3 portal. Active: routine filing. Deactivated: reactivation (Rs 5,000). First-time or changes: e-Form (DSC + CA/CS certification). Triennial routine: Web (no DSC). Patron checks status and determines correct mode for every Mumbai director.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>DIN verified</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Mode determined</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="15" y="10" width="90" height="65" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><line x1="30" y1="30" x2="90" y2="30" stroke="#F5A623" stroke-width="3" stroke-linecap="round"/><circle cx="85" cy="55" r="10" fill="#E8F5E9" stroke="#10B981" stroke-width="1.2"/><path d="M80 55l3 3 6-6" stroke="#10B981" stroke-width="2" stroke-linecap="round"/></svg></div><span class="illustration-label">Status Checked</span><span class="step-number-large">01</span></div></div></div><div class="step-card"><div class="step-content"><span class="step-badge">Step 2</span><h3 class="step-title">Gather Documents &amp; OTP Verification</h3><p class="step-description">For e-Form: PAN, Aadhaar/passport, address proof (within 2 months), active mobile and email, photograph, DSC. MCA sends OTP to mobile and email &ndash; both must be verified. For foreign nationals: OTP to overseas numbers. Patron coordinates timing for immediate verification.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Documents ready</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>OTP verified</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="20" y="8" width="80" height="70" rx="4" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><circle cx="60" cy="35" r="15" fill="#FFF3E0" stroke="#F5A623" stroke-width="1.2"/><path d="M53 35l5 5 10-10" stroke="#10B981" stroke-width="2.5" stroke-linecap="round"/></svg></div><span class="illustration-label">Verified</span><span class="step-number-large">02</span></div></div></div><div class="step-card"><div class="step-content"><span class="step-badge">Step 3</span><h3 class="step-title">File on MCA V3 Portal</h3><p class="step-description">e-Form: fill details, attach documents, affix DSC, submit for CA/CS/CMA certification. Web: login with DIN, verify pre-loaded details, confirm OTP, submit. Zero-rupee challan for timely filings; Rs 5,000 for reactivation. Patron files and ensures successful submission for Mumbai directors.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Form filed</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>SRN generated</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="20" y="10" width="80" height="60" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><rect x="35" y="25" width="50" height="8" rx="3" fill="#E8712C" opacity="0.3"/><path d="M80 55l-8 8-5-5" stroke="#10B981" stroke-width="2.5" stroke-linecap="round"/></svg></div><span class="illustration-label">Filed</span><span class="step-number-large">03</span></div></div></div><div class="step-card"><div class="step-content"><span class="step-badge">Step 4</span><h3 class="step-title">Confirm &amp; Track Triennial Cycle</h3><p class="step-description">Verify DIN status shows Approved on MCA portal. Retain SRN and acknowledgement. Under new triennial rule, next filing tracked (FY 2025-26 filers: next due 30 June 2028). Patron sends reminders 60 days before each triennial deadline for all Mumbai directors.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>DIN active</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Next cycle tracked</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="25" y="10" width="70" height="55" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><circle cx="60" cy="35" r="18" fill="#E8F5E9" stroke="#10B981" stroke-width="1.5"/><path d="M52 35l6 6 12-12" stroke="#10B981" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/></svg></div><span class="illustration-label">Complete</span><span class="step-number-large">04</span></div></div></div>

        </div>
    </div>
</section>

<!-- SECTION 8: DOCUMENTS REQUIRED -->
<section class="content-section" id="documents-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Documents Required for DIR-3 KYC in Mumbai</h2>
            <div class="content-text">
                
                <ul>
                    <li><strong>PAN Card:</strong> Mandatory for Indian nationals (self-attested copy)</li>
                    <li><strong>Aadhaar Card:</strong> Indian nationals &ndash; identity and address verification</li>
                    <li><strong>Passport:</strong> Mandatory for foreign nationals; also for Indian nationals who hold one</li>
                    <li><strong>Residential Address Proof:</strong> Utility bill, bank statement, or Aadhaar &ndash; within 2 months</li>
                    <li><strong>Mobile Number (Active):</strong> For OTP verification &ndash; must be accessible at filing time</li>
                    <li><strong>Email Address (Active):</strong> For OTP verification &ndash; must be accessible at filing time</li>
                    <li><strong>Passport-Size Photograph:</strong> Recent photograph of the director</li>
                    <li><strong>DSC (for e-Form only):</strong> Valid, linked to DIN &ndash; not required for Web filing</li>
                </ul>
                <div class="highlight-box" style="margin-top:16px;">
                    <p><strong>Mumbai-Specific Tip:</strong> For BKC MNC directors overseas, OTP expires within minutes and time zone differences cause failures. Patron schedules filing during overlapping business hours and coordinates with the foreign director for immediate OTP confirmation. For directors with Indian SIMs who travel frequently, international roaming must be active for OTP receipt.</p>
                </div>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 9: CHALLENGES -->
<section class="content-section" id="challenges-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Common Challenges in DIR-3 KYC in Mumbai</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Challenge</th><th>Impact</th><th>How Patron Accounting Solves It</th></tr></thead>
                    <tbody>
                        <tr><td>DIN Deactivation Without Awareness</td><td>Resigned/dormant company directors discover deactivation only when joining a new board or signing MCA forms. Blocks all MCA activity</td><td>DIN status checks for prospective directors. Emergency reactivation within 2-3 days. Year-round monitoring for all Mumbai director clients</td></tr>
                        <tr><td>OTP Failure for Foreign Directors</td><td>Overseas mobile numbers may not receive Indian OTPs reliably. Email OTP may go to spam. Failed OTP blocks filing</td><td>OTP delivery pre-tested before filing. Filing scheduled during overlapping business hours. Alternative verification arranged if needed</td></tr>
                        <tr><td>DSC Expiry or Mismatch</td><td>Expired DSC or name mismatch (married vs maiden name) causes e-Form rejection. Multiple DSCs create selection confusion</td><td>DSC validity and DIN linkage verified before every e-Form filing. Renewal coordinated if expired</td></tr>
                        <tr><td>Change-in-Particulars Not Filed in 30 Days</td><td>Under 2026 rules, mobile/email/address changes must be reported within 30 days (Rs 500). Directors who change phones frequently miss this window</td><td>Changes tracked for Mumbai directors. e-Form filed promptly within 30 days of notification</td></tr>
                        <tr><td>Multiple Directors &ndash; One Deactivated DIN</td><td>Companies with 5-10 directors: one deactivated DIN blocks filings requiring that director's DSC (AOC-4, MGT-7 signing)</td><td>Bulk KYC management. All DIN statuses monitored. Batch filing prevents any single director blocking company compliance</td></tr>

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
            <h2 class="section-title">DIR-3 KYC Fees in Mumbai</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Fee Component</th><th>Amount</th></tr></thead>
                    <tbody>
                        <tr><td>DIR-3 KYC e-Form (First Time / Timely)</td><td>Nil government fee (DSC + CA/CS certification required)</td></tr>
                        <tr><td>DIR-3 KYC e-Form (Change in Particulars)</td><td>Rs 500 processing fee + DSC + CA/CS certification</td></tr>
                        <tr><td>DIR-3 KYC Web (Triennial Routine)</td><td>Nil &ndash; no DSC, no certification, OTP confirmation only</td></tr>
                        <tr><td>Late Filing / DIN Reactivation</td><td>Rs 5,000 per director (DIN reactivated upon filing)</td></tr>
                        <tr><td>DSC (if expired/not available)</td><td>Rs 1,500 &ndash; Rs 3,000 (Class 3, 2-year validity)</td></tr>
                        <tr><td>Patron Fee &ndash; Single Director e-Form</td><td>Starting Rs 1,500 (document coordination + OTP + filing + certification)</td></tr>
                        <tr><td>Patron Fee &ndash; Single Director Web</td><td>Starting Rs 500 (triennial Web confirmation)</td></tr>
                        <tr><td>Patron Fee &ndash; DIN Reactivation</td><td>Starting Rs 3,000 (Rs 5,000 govt fee + filing + emergency processing)</td></tr>
                        <tr><td>Patron Fee &ndash; Foreign National KYC</td><td>Starting Rs 3,000 (passport-based + overseas OTP coordination)</td></tr>
                        <tr><td>Patron Fee &ndash; Bulk KYC (5+ Directors)</td><td>Starting Rs 500/director (batch processing for company Board)</td></tr>

                    </tbody>
                </table>
                </div>
                <p style="margin-top:16px;font-size:13px;color:var(--text-muted);font-style:italic;">All fees and charges listed are indicative only and do not constitute a binding offer. Final amounts may vary depending on the volume of work and the complexity involved.</p>
                <p style="margin-top:16px;">Professional service charges for drafting, filing, and representation are separate from the statutory fees. The exact fee depends on the complexity of the case, disputed amount, and number of hearings required. Contact us for a detailed quote.</p>
                <p style="margin-top:16px;"><strong>Get a free Director KYC (DIR-3) consultation - <a href="tel:+919459456700">Call +91 945 945 6700</a> or <a href="https://wa.me/919459456700?text=Hello%2C%20I%20just%20visited%20your%20Director%20KYC%20in%20Mumbai%20page.%20I%20would%20like%20to%20know%20more%20about%20it." target="_blank" rel="noopener">WhatsApp us</a>. No-obligation assessment.</strong></p>
            </div>
        </div>
    </div>
</section>

<!-- SECTION 11: TIMELINE -->
<section class="content-section" id="timeline-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">DIR-3 KYC Filing Timeline</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Stage</th><th>Estimated Timeline</th></tr></thead>
                    <tbody>
                        <tr><td>Triennial Routine (New 2026 Rule)</td><td>30 June of the triennial FY | Web filing: same day | Patron: within 1 day</td></tr>
                        <tr><td>First-Time e-Form</td><td>By triennial deadline or within 30 days of DIN allotment | Patron: within 3 working days</td></tr>
                        <tr><td>Change in Particulars</td><td>Within 30 days of change | Rs 500 fee | Patron: within 3 working days of notification</td></tr>
                        <tr><td>DIN Reactivation</td><td>As soon as deactivation discovered | Rs 5,000 | Patron: emergency 2-3 working days</td></tr>
                        <tr><td>Foreign National KYC</td><td>Same deadlines | 5-7 working days (OTP coordination across time zones)</td></tr>
                        <tr><td>Next Filing for FY 2025-26 Filers</td><td>30 June 2028 | Patron tracks and reminds 60 days before deadline</td></tr>

                    </tbody>
                </table>
                </div>
                <div class="highlight-box" style="margin-top:16px;">
                    
                    <p><strong>A deactivated DIN blocks ALL MCA activity.</strong> The director cannot sign AOC-4, MGT-7, DIR-12, or any other form. Cannot be appointed to new companies. Patron's year-round DIN monitoring and emergency reactivation within 2-3 days prevent this for Mumbai directors. Under the triennial rule, complacency about the longer cycle is the biggest risk.</p>

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
            <h2 class="section-title">Why Choose Patron for DIR-3 KYC in Mumbai</h2>
        </div>
        <div class="features-grid">
            <article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><h3 class="feature-title">Adjacent to ROC Everest House</h3><p class="feature-text">DIR-3 KYC filed on MCA V3 portal. ROC Mumbai handles queries and escalations. Patron resolves MCA portal issues for Mumbai directors faster than remote providers.</p></article>
            <article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M14 2H6a2 2 0 00-2 2v16a2 2 0 002 2h12a2 2 0 002-2V8z"/><path d="M14 2v6h6"/></svg></div><h3 class="feature-title">2026 Triennial Rule Expertise</h3><p class="feature-text">Transition managed: which Mumbai directors filed in FY 2025-26 (covered until 2028), which need to file before 31.03.2026, and which need reactivation before the new system takes effect.</p></article>
            <article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg></div><h3 class="feature-title">Foreign National Coordination</h3><p class="feature-text">Hundreds of foreign KYCs processed for BKC MNC directors (US, UK, Japan, Singapore, Europe). OTP scheduled during overlapping hours. Entirely remote process.</p></article>
            <article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="2" y="3" width="20" height="14" rx="2"/><path d="M8 21h8M12 17v4"/></svg></div><h3 class="feature-title">DIN Monitoring &amp; Bulk KYC</h3><p class="feature-text">Year-round DIN status monitoring. Batch filing for 5+ director companies at reduced cost. No deactivated DIN blocks the annual filing cycle for Mumbai companies.</p></article>
        </div>
    </div>
</section>

<!-- SECTION 12A: SOCIAL PROOF -->
<section class="content-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Trusted by Mumbai Directors</h2>
            <div class="content-text">
                
                <p><strong>Trust Signals:</strong> 10,000+ Businesses | 4.9 Google Rating | 50,000+ Documents Filed | 15+ Years</p>
                <blockquote style="border-left:3px solid var(--orange);padding:12px 20px;margin:16px 0;background:var(--orange-lighter);border-radius:0 var(--radius-sm) var(--radius-sm) 0;">
                    <p style="font-style:italic;margin-bottom:8px;">&ldquo;Patron reactivated my DIN in 2 days after it was deactivated for non-filing. I was about to be appointed as director in a new company and the deactivation would have blocked everything. No other firm offered emergency processing.&rdquo;</p>
                    <p style="font-size:13px;font-weight:700;color:var(--blue);margin:0;">&mdash; Director, Technology Startup, Powai</p>
                </blockquote>
                <p>Offices in Pune, Mumbai, Delhi, and Gurugram serving directors with KYC filing, DIN management, and corporate compliance.</p>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 13: SELF-FILING vs PROFESSIONAL COMPARISON -->
<section class="content-section" id="comparison-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">DIR-3 KYC Transition Guide: Old to New Rules</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Scenario</th><th>Current Status</th><th>Action Required</th><th>Deadline</th></tr></thead>
                    <tbody>
                        <tr><td>Filed KYC in FY 2025-26</td><td>Covered under new triennial rule</td><td>No action until next triennial cycle</td><td>Next filing: 30 June 2028</td></tr>
                        <tr><td>Filed in FY 2024-25 but not 2025-26</td><td>May be deactivated under old annual rule</td><td>File DIR-3 KYC before 31.03.2026 to enter new cycle</td><td>Before 31 March 2026</td></tr>
                        <tr><td>Never filed DIR-3 KYC</td><td>DIN likely deactivated</td><td>File e-Form DIR-3 KYC + Rs 5,000 reactivation</td><td>Immediately</td></tr>
                        <tr><td>Changed mobile/email/address in 2026</td><td>Change not reported to MCA</td><td>File e-Form DIR-3 KYC within 30 days + Rs 500</td><td>Within 30 days of change</td></tr>
                        <tr><td>Foreign national &ndash; never filed</td><td>DIN likely deactivated</td><td>File e-Form with passport + Rs 5,000</td><td>Immediately</td></tr>
                        <tr><td>Resigned director holding DIN</td><td>DIN still active; KYC still required</td><td>File triennial KYC per cycle</td><td>Per triennial schedule</td></tr>
                        <tr><td>Director of struck-off company</td><td>DIN still active; KYC required</td><td>File triennial KYC per cycle</td><td>Per triennial schedule</td></tr>
                        <tr><td>DPIN holder (LLP)</td><td>Same rules as DIN</td><td>File DIR-3 KYC per triennial cycle</td><td>Same deadlines</td></tr>

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
                    <li><a href="/director-kyc">Director KYC (India Overview)</a></li>
                    <li><a href="/appointment-of-director">Appointment of Director</a></li>
                    <li><a href="/private-limited-company-compliance">Private Limited Company Compliance</a></li>
                    <li><a href="/statutory-audit">Statutory Audit</a></li>
                    <li><a href="/roc-notice">ROC Notice</a></li>
                    
                    <li><a href="/accounting-services">Accounting Services</a></li>
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
            <h2 class="section-title">Legal &amp; Compliance Framework for Director KYC</h2>
            <div class="content-text">
                
                <ul>
                    <li><strong>Rule 12A:</strong> Companies (Appointment and Qualification of Directors) Rules &ndash; DIR-3 KYC requirement</li>
                    <li><strong>2025 Amendment:</strong> Annual replaced by triennial (notified 31.12.2025, effective 31.03.2026)</li>
                    <li><strong>Filing Frequency (New):</strong> Once every 3 consecutive FYs by 30 June of the filing year</li>
                    <li><strong>Change in Particulars:</strong> Within 30 days via e-Form + Rs 500</li>
                    <li><strong>e-Form DIR-3 KYC:</strong> First time, changes, reactivation &ndash; DSC + CA/CS/CMA certification</li>
                    <li><strong>DIR-3 KYC Web:</strong> Triennial confirmation &ndash; no DSC, no certification, OTP only</li>
                    <li><strong>Non-Filing:</strong> DIN deactivated &ndash; blocks all MCA forms and appointments</li>
                    <li><strong>Reactivation:</strong> File e-Form + Rs 5,000 late fee</li>
                    <li><strong>Applicability:</strong> Every DIN/DPIN holder as on 31 March &ndash; active, resigned, disqualified</li>
                    <li><strong>ROC Mumbai:</strong> Everest House, 100 Marine Lines, Mumbai 400020</li>
                </ul>
                <p><strong>Filing Portal:</strong> <a href="https://www.mca.gov.in" target="_blank" rel="noopener">mca.gov.in</a> (MCA V3 portal)</p>

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
                    <h2 class="faq-expanded__title">Frequently Asked Questions &ndash; Director KYC (DIR-3) in Mumbai</h2>
                    <p class="faq-expanded__lead">Get answers about the 2026 triennial rule, DIN deactivation, e-Form vs Web, foreign nationals, penalties, and timelines for Mumbai directors.</p>
                    @include('partials.bigin-form', [
                        'variant'  => 'compact',
                        'service'  => 'Director KYC (DIR-3)',
                        'city'     => 'Mumbai',
                    ])
                </aside>
                <div class="faq-expanded__list">
                    <div class="faq-expanded__item" id="faq-1">
                        <h3 class="faq-expanded__q">Has annual DIR-3 KYC been abolished?</h3>
                        <div class="faq-expanded__a"><p>Annual requirement replaced by triennial (once every 3 years) effective 31.03.2026. DIR-3 KYC itself NOT abolished &ndash; routine filing now once every 3 FYs by 30 June. Change in mobile/email/address still must be filed within 30 days. FY 2025-26 filers covered until 30 June 2028. Patron manages the triennial cycle for Mumbai directors.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-2">
                        <h3 class="faq-expanded__q">What happens if DIR-3 KYC is not filed?</h3>
                        <div class="faq-expanded__a"><p>DIN marked as Deactivated due to Non-filing. Director cannot sign MCA forms (AOC-4, MGT-7, DIR-12), cannot be appointed to any company, pending filings requiring DSC blocked. Reactivation: file e-Form DIR-3 KYC + Rs 5,000. Patron provides emergency reactivation within 2-3 working days for Mumbai directors.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-3">
                        <h3 class="faq-expanded__q">What is the difference between e-Form and Web?</h3>
                        <div class="faq-expanded__a"><p>e-Form: first-time KYC, changes in details, DIN reactivation. Requires DSC, CA/CS/CMA certification, document attachments. Web: triennial routine confirmation when no details changed. No DSC, no certification, just OTP verification. Patron determines correct mode for each Mumbai director based on filing history.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-4">
                        <h3 class="faq-expanded__q">Do foreign national directors need to file?</h3>
                        <div class="faq-expanded__a"><p>Yes. All DIN holders regardless of nationality. File using passport as identity, overseas address, foreign mobile/email for OTP. No Indian address required. Patron handles foreign KYC for BKC MNC directors, coordinating OTP across time zones &ndash; entire process managed remotely.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-5">
                        <h3 class="faq-expanded__q">When is the next DIR-3 KYC due under triennial rule?</h3>
                        <div class="faq-expanded__a"><p>FY 2025-26 filers: next due 30 June 2028. FY 2024-25 filers (not in 2025-26): next due 30 June 2027 (subject to MCA clarification). Never filed or deactivated: file immediately for reactivation. Patron tracks schedule and sends reminders 60 days before each triennial deadline.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-6">
                        <h3 class="faq-expanded__q">Can a resigned director skip DIR-3 KYC?</h3>
                        <div class="faq-expanded__a"><p>No. DIN remains active after resignation. As long as DIN is active (not surrendered), KYC is mandatory. Skipping leads to deactivation, creating problems for future directorship. Patron advises: continue filing or formally surrender DIN if no intention to serve as director again.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-7">
                        <h3 class="faq-expanded__q">What is the penalty for late filing?</h3>
                        <div class="faq-expanded__a"><p>DIN deactivation (not monetary fine per se). Reactivation: file e-Form + Rs 5,000 per director. No daily penalty unlike other MCA forms. But practical impact of deactivated DIN (blocked forms, blocked appointments) causes cascading failures. Patron's proactive monitoring prevents deactivation.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-8">
                        <h3 class="faq-expanded__q">Which ROC handles DIR-3 KYC in Mumbai?</h3>
                        <div class="faq-expanded__a"><p>Filed electronically on MCA V3 portal, processed centrally. ROC Mumbai at Everest House handles queries and escalations. No physical submission required. Patron's Marine Lines office adjacent to ROC for any coordination needed for Mumbai directors.</p></div>
                    </div>
                </div>
            </div>


            <!-- Quick Answers -->
            <div class="highlight-box" style="margin-top:32px;">
                <p><strong>Quick Answers</strong></p>
                <p><strong>DIR-3 KYC kya hai aur kab file karna hai?</strong> Har DIN holder ko personal details MCA ko confirm karni padti hai. Naya rule (31 March 2026 se): har 3 saal mein ek baar 30 June tak. Lekin mobile/email change kiya toh 30 din mein file karo (Rs 500). Patron triennial cycle track karta hai.</p>
                <p><strong>DIN deactivate ho gaya toh?</strong> e-Form DIR-3 KYC file karo Rs 5,000 late fee ke saath. Patron 2-3 din mein emergency reactivation karta hai. Deactivated DIN se koi MCA form sign nahi kar sakte.</p>
                <p><strong>Foreign director ka KYC kaise kare?</strong> Passport se file karo. Overseas address proof do. Foreign mobile/email pe OTP aayega. Patron BKC MNC directors ke liye remotely handle karta hai.</p>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 18: URGENCY CTA -->
<section class="content-section" style="background: var(--orange-lighter) !important; border-left: 4px solid var(--orange);">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Don't Let a Deactivated DIN Block Your Business &ndash; File DIR-3 KYC Now</h2>
            <div class="content-text">
                
                <p>A deactivated DIN blocks ALL MCA activity &ndash; the director cannot sign Board Resolutions, file AOC-4, accept new appointments, or complete any regulatory filing. Under the triennial rule, directors who haven't filed in FY 2025-26 must file before 31 March 2026 to enter the new cycle cleanly. Change in mobile/email/address still requires filing within 30 days.</p>
                <p><strong>File your DIR-3 KYC today &ndash; <a href="tel:+919459456700">Call +91 945 945 6700</a> or <a href="https://wa.me/919459456700?text=Hello%2C%20I%20just%20visited%20your%20Director%20KYC%20in%20Mumbai%20page.%20I%20would%20like%20to%20know%20more%20about%20it." target="_blank" rel="noopener">WhatsApp us</a>.</strong></p>

            </div>
        </div>
    </div>
</section>

<!-- CONCLUSION + CTA BLOCK (Dark) -->
<section class="content-section" style="background: var(--blue) !important;">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title" style="color:#FFFFFF !important;">Get End-to-End DIR-3 KYC in Mumbai</h2>
            <div class="content-text" style="text-align:left;">
                
                <p style="color:rgba(255,255,255,0.85);font-size:16px;line-height:1.7;">Director KYC (DIR-3) in Mumbai is a compliance requirement for every DIN holder &ndash; from Powai startup founders and BKC MNC foreign nationals to Fort family business directors and Andheri tech board members. The 2026 triennial rule simplifies routine compliance but makes change-driven filings and DIN monitoring more important.</p>
                <p style="color:rgba(255,255,255,0.85);font-size:16px;line-height:1.7;">Patron Accounting's Mumbai office at Marine Lines &ndash; adjacent to ROC Everest House &ndash; provides end-to-end services: first-time e-Form, triennial Web filing, DIN reactivation, foreign national coordination, change-in-particulars, bulk KYC, and year-round DIN monitoring.</p>
                <p style="color:rgba(255,255,255,0.85);font-size:16px;line-height:1.7;">With offices in Pune, Mumbai, Delhi, and Gurugram, 10,000+ businesses served, and 4.9 Google rating, Patron Accounting LLP delivers compliant director KYC across India.</p>

            </div>
            <div style="display:flex;gap:14px;flex-wrap:wrap;margin-top:24px;">
                <a href="tel:+919459456700" style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:var(--orange);color:#fff;border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#128222; Call +91 945 945 6700</a>
                <a href="https://wa.me/919459456700?text=Hello%2C%20I%20just%20visited%20your%20Director%20KYC%20in%20Mumbai%20page.%20I%20would%20like%20to%20know%20more%20about%20it." target="_blank" style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:#25D366;color:#fff;border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;" rel="noopener">&#128172; WhatsApp Us</a>
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
            <h2 class="section-title" style="text-align:center;margin-bottom:12px;">Director KYC Across India</h2>
            <p style="text-align:center;color:var(--text-muted);font-size:15px;margin-bottom:40px;">Patron Accounting handles DIR-3 KYC filing in major cities with triennial cycle management and DIN reactivation expertise.</p>
         
            <div class="pa-city-block" style="margin-bottom:40px;">
                        <div class="pa-block-title">Director KYC (DIR-3) in Other Cities</div>
                        <div class="pa-block-sub">Professional DIR-3 KYC filing across India</div>
                        <div class="pa-city-grid">
                            <a href="/director-kyc/pune" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Pune</div><div class="pa-card-sub">Maharashtra</div></div></a>
                            <div class="pa-city-card" style="opacity:0.6; pointer-events:none; border:2px solid var(--orange); position:relative;"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Mumbai</div><div class="pa-card-sub">Maharashtra</div></div><span style="position:absolute; top:6px; right:8px; font-size:10px; color:var(--orange); font-weight:700; text-transform:uppercase; letter-spacing:0.5px;">You're here</span></div>
                            <a href="/director-kyc/delhi" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Delhi</div><div class="pa-card-sub">Delhi NCR</div></div></a>
                            <a href="/director-kyc/gurugram" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Gurugram</div><div class="pa-card-sub">Haryana</div></div></a>
                        </div>
                    </div>
                    <div class="pa-city-block">
                        <div class="pa-block-title">Related Services in Mumbai</div>
                        <div class="pa-block-sub">End-to-end director and corporate compliance</div>
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
            <p>This content is reviewed quarterly for accuracy of 2026 triennial amendment, MCA portal updates, and DIN management rules. Freshness Tier: 1.</p>
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

<!-- External JS Dependencies (loaded by master layout in production) -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
@endsection
