
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
    <title>LLP Agreement Amendment Gurugram - Deed & Form 3</title>
    <meta name="description" content="CA/CS-assisted LLP agreement amendment in Gurugram. Form 3, supplementary deed, profit sharing, partner changes, stamp duty, ROC Haryana. Serving Cyber City, Sohna Road. Call +91 945 945 6700.">
    <link rel="canonical" href="/llp-agreement-change/gurugram">
    <meta name="robots" content="index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1">
    <meta property="og:title" content="LLP Agreement Amendment Gurugram - Deed & Form 3">
    <meta property="og:description" content="CA/CS-assisted LLP agreement amendment in Gurugram. Form 3, supplementary deed, profit sharing, partner changes, stamp duty, ROC Haryana. Serving Cyber City, Sohna Road. Call +91 945 945 6700.">
    <meta property="og:url" content="/llp-agreement-change/gurugram">
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="Patron Accounting">
    <meta property="og:image" content="https://www.patronaccounting.com/images/og-default-square.png">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="1200">
    <meta property="og:image:type" content="image/png">
    <meta property="og:image:secure_url" content="https://www.patronaccounting.com/images/og-default-square.png">
    <meta property="og:image:alt" content="Patron Accounting - partner you can rely on">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="LLP Agreement Amendment Gurugram - Deed & Form 3">
    <meta name="twitter:description" content="CA/CS-assisted LLP agreement amendment in Gurugram. Form 3, supplementary deed, profit sharing, partner changes, stamp duty, ROC Haryana. Serving Cyber City, Sohna Road. Call +91 945 945 6700.">
    <meta name="twitter:image" content="https://www.patronaccounting.com/images/og-default-square.png">
@endsection

@section('schema')
    <script type="application/ld+json">{
  "@context": "https://schema.org",
  "@graph": [
    {
      "@type": "Service",
      "name": "LLP Agreement Change Gurugram | Form 3",
      "description": "CA/CS-assisted LLP agreement amendment in Gurugram. Form 3, supplementary deed, profit sharing, partner changes, stamp duty, ROC Haryana. Serving Cyber City, Sohna Road. Call +91 945 945 6700.",
      "url": "https://www.patronaccounting.com/llp-agreement-change/gurugram",
      "serviceType": "LLP Agreement Change Gurugram | Form 3",
      "areaServed": {
        "@type": "City",
        "name": "Gurugram",
        "containedInPlace": {
          "@type": "State",
          "name": "Haryana"
        }
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
        "url": "https://www.patronaccounting.com/llp-agreement-change/gurugram",
        "price": "100"
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
          "name": "LLP Agreement Change: Amend Deed",
          "item": "https://www.patronaccounting.com/llp-agreement-change"
        },
        {
          "@type": "ListItem",
          "position": 3,
          "name": "LLP Agreement Change Gurugram | Form 3",
          "item": "https://www.patronaccounting.com/llp-agreement-change/gurugram"
        }
      ]
    },
    {
      "@type": "FAQPage",
      "mainEntity": [
        {
          "@type": "Question",
          "name": "How to change an LLP agreement?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Partners pass resolution. Supplementary deed drafted on Haryana stamp paper, signed by all partners + 2 witnesses. Form 3 filed with ROC within 30 days. Form 4 also if partners change. Patron manages in 5-10 days."
          }
        },
        {
          "@type": "Question",
          "name": "What is the deadline for Form 3?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "30 days from executing supplementary agreement. Late filing: Rs 100/day, NO cap. 6 months = Rs 18,000. 1 year = Rs 36,500. File promptly."
          }
        },
        {
          "@type": "Question",
          "name": "Is stamp duty required?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Yes. Supplementary deed on Haryana stamp paper. Standard amendments Rs 100-500. Capital-related may be higher. Under-stamped deeds are inadmissible as evidence in court."
          }
        },
        {
          "@type": "Question",
          "name": "Can a foreign partner be added?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Yes, subject to FEMA. Amend agreement + Form 3 + Form 4. RBI reporting required. Foreign partner needs DPIN via DIR-3. Patron manages complete process including FEMA."
          }
        },
        {
          "@type": "Question",
          "name": "What if Form 3 was never filed originally?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Initial Form 3 (Purpose 1) must be filed first with late fees before any amendment. Many old LLPs missed this. Patron files overdue initial + current amendment in coordinated submission."
          }
        },
        {
          "@type": "Question",
          "name": "What changes require Form 4?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Any partner addition, exit, or designation change. Form 4 captures partner details. Filed alongside Form 3 within 30 days. Both forms mandatory when partners change."
          }
        },
        {
          "@type": "Question",
          "name": "What about Gurugram-to-Delhi shift?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Since Feb 2026, this is inter-state transfer requiring RD approval + Form 3 + Form 15 + newspaper ads. Previously was simple within-ROC shift. Plan accordingly."
          }
        },
        {
          "@type": "Question",
          "name": "What is the cost?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Standard (Form 3 only) from Rs 2,999. Partner change from Rs 4,999. Foreign partner from Rs 7,999. Comprehensive from Rs 9,999. Stamp duty additional per Haryana rates. Quick Answers LLP agreement kaise change karte hain? Supplementary deed banao (stamp paper par), sab partners sign, Form 3 ROC mein 30 din mein. Partner change ho toh Form 4 bhi. Stamp duty lagti hai? Haan. Haryana Stamp Act ke hisaab se Rs 100-500 standard. Capital wale mein zyada. Late filing penalty? Rs 100/din, koi cap nahi. Jaldi file karo."
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
                        LLP Agreement Change in Gurugram: Supplementary Deed, Form 3, and ROC Filing
                    </h1>

                    <div class="expert-attribution-box">
                        <span class="eab-check"><svg width="16" height="16" viewBox="0 0 24 24" fill="currentColor"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg></span>
                        <span class="eab-title">Reviewed by CA and CS Team, Patron Accounting LLP</span>
                        <span class="eab-meta">
                            <span>ICAI & ICSI Registered</span><span class="eab-sep">|</span>
                            <span>15+ Years Experience</span><span class="eab-sep">|</span>
                            <span>Last Updated: <span id="lastUpdated">03 April 2026</span></span>
                        </span>
                        <a href="#" class="eab-link">Verify Credentials &rarr;</a>
                    </div>

                    <div class="mb-4">
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>What Changes:</span> Profit-sharing ratio, capital contribution, partner addition/exit, business activities, management roles, office address</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>How:</span> Supplementary LLP Agreement (on stamp paper) + Partner Resolution + Form 3 with ROC</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Deadline:</span> Form 3 within 30 days of executing supplementary deed | Rs 100/day penalty (no cap)</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Linked Forms:</span> Form 4 (partner change) + Form 15 (office change) filed alongside Form 3 if applicable</p>
                        </div>
                    </div>

                    <p class="mb-4 fw-bold" style="color: var(--blue); font-size: 15px;">LLP agreement amendments for professional firms, tech partnerships, trading LLPs, and international partnerships across Gurugram.</p>

                    <div class="hero-cta">
                        <a href="tel:+919459456700" class="btn-video text-decoration-none">
                            <span class="play-circle"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="width:14px;height:14px;color:#fff"><path d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/></svg></span>
                            Call +91 945 945 6700
                        </a>
                        <a href="mailto:sales@patronaccounting.com" class="btn-sample text-decoration-none">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="width:18px;height:18px;"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,12 2,6"/></svg>
                            Email Us
                        </a>
                        <a href="https://wa.me/919459456700?text=Hello%2C%20I%20just%20visited%20your%20LLP%20Agreement%20Change%20in%20Gurugram%20page.%20I%20would%20like%20to%20know%20more%20about%20it." target="_blank" class="btn-sample text-decoration-none" rel="noopener">
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
                                            'service'  => 'LLP Agreement Change in Gurugram',
                                            'city'     => 'Gurugram',
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
    'ctaText'    => 'LLP agreement amendment with supplementary deed, Haryana stamp duty, and Form 3 filing from Gurugram.',
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
            <a href="#overview-section" class="toc-btn active">Overview</a><a href="#what-section" class="toc-btn">Process</a><a href="#who-section" class="toc-btn">Linked Forms</a><a href="#services-section" class="toc-btn">Services</a><a href="#procedure-section" class="toc-btn">Documents</a><a href="#documents-section" class="toc-btn">Stamp Duty</a><a href="#challenges-section" class="toc-btn">Fees</a><a href="#fees-section" class="toc-btn">Timeline</a><a href="#timeline-section" class="toc-btn">Why Patron</a><a href="#benefits-section" class="toc-btn">Special Cases</a><a href="#comparison-section" class="toc-btn">Patron vs DIY</a><a href="#faq-section" class="toc-btn">FAQs</a>
        </div>
        <button class="toc-arrow right" id="tocRight">&#10095;</button>
    </div>
</div>

<!-- SECTION 2: OVERVIEW / INTRO + TL;DR -->
<section class="content-section" id="overview-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">LLP Agreement Amendment in Gurugram: Supplementary Deed, Form 3, and Compliance</h2>
            <div class="content-text">
                <div class="highlight-box" style="margin-bottom:20px;">
                    <p><strong>&#128204; TL;DR - LLP Agreement Change in Gurugram Services at a Glance</strong></p>
                    <p>To change an LLP Agreement: draft supplementary deed on Haryana stamp paper, obtain all partners' consent with 2 witnesses, pass partner resolution, file Form 3 with ROC Haryana within 30 days. If partners change: also file Form 4. If office changes: also file Form 15. Late filing: Rs 100/day NO cap. Stamp duty per Haryana Stamp Act. Under-stamped deeds are inadmissible.</p>
                </div>
                <p>Gurugram hosts thousands of LLPs that evolve as businesses grow. For a comprehensive overview, see our <a href="/llp-agreement-change">LLP Agreement Change</a> national guide.</p><div class="table-responsive-wrapper"><table><thead><tr><th>Change Type</th><th>Form 3</th><th>Form 4</th><th>Form 15</th><th>FEMA</th></tr></thead><tbody><tr><td>Profit-sharing ratio</td><td>Yes</td><td>No</td><td>No</td><td>No</td></tr><tr><td>Capital contribution</td><td>Yes</td><td>No</td><td>No</td><td>No</td></tr><tr><td>New partner joining</td><td>Yes</td><td>Yes</td><td>No</td><td>If foreign</td></tr><tr><td>Partner exiting</td><td>Yes</td><td>Yes</td><td>No</td><td>No</td></tr><tr><td>Business activities</td><td>Yes</td><td>No</td><td>No</td><td>No</td></tr><tr><td>Office change (within state)</td><td>Yes</td><td>No</td><td>Yes</td><td>No</td></tr><tr><td>NRI/foreign partner</td><td>Yes</td><td>Yes</td><td>No</td><td>Yes</td></tr></tbody></table></div><p</p>
                <p>Without formal amendment (supplementary deed + Form 3), changes are not legally recognised by the ROC. ROC Haryana at Chandigarh (from 16 Feb 2026) processes all Form 3 filings. Patron handles end-to-end: drafting, Haryana stamp duty, partner consents, and coordinated form filing.</p>
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
                <h2 class="section-title">Step-by-Step Amendment Process</h2>
                <div class="content-text what-is-definition">
                    
                    <p><strong>Step 1:</strong> Identify amendments needed (profit ratio, capital, partners, activities, office).</p><p><strong>Step 2:</strong> Draft supplementary LLP agreement referencing original, stating each clause modification.</p><p><strong>Step 3:</strong> Execute on Haryana stamp paper (Rs 100-500 standard; higher for capital changes).</p><p><strong>Step 4:</strong> All designated partners sign + 2 independent witnesses.</p><p><strong>Step 5:</strong> Pass partner resolution recorded in LLP minutes.</p><p><strong>Step 6:</strong> File Form 3 with ROC Haryana on MCA V3 within 30 days. Attach: supplementary deed + resolution.</p><p><strong>Step 7:</strong> File linked forms (Form 4/5/15) if applicable.</p><p><strong>Step 8:</strong> ROC approves and updates records (3-7 working days).</p>

                </div>
                <div class="highlight-box" style="margin-top:20px;">
                    <p><strong>Key Terms for LLP Agreement Change in Gurugram:</strong></p>
                    <p><strong>Form 3:</strong> LLP Agreement information/changes - ALWAYS required for any amendment. Filed within 30 days.</p><p><strong>Supplementary Deed:</strong> Legal document recording amendments to original LLP Agreement. Must be on stamp paper.</p><p><strong>Haryana Stamp Duty:</strong> Rs 100-500 for standard amendments. Higher for capital-related. Under-stamped = inadmissible.</p><p><strong>Form 4:</strong> Partner change form - additionally required when partners join or exit.</p><p><strong>Rs 100/day:</strong> Late filing penalty per form with NO cap. 6 months delay = Rs 18,000.</p>

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
                            <text x="100" y="170" font-size="10" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial, sans-serif">LLP Agreement Change in Gurugram</text>
                        </svg>
                    </div>
                    <div class="illustration-badge">
                        <span>LLP Agreement</span>
                        <strong>Gurugram Form 3</strong>
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
            <h2 class="section-title">Linked Forms Matrix</h2>
            <div class="content-text">
                
                <div class="table-responsive-wrapper"><table><thead><tr><th>If Change Involves</th><th>Form 3</th><th>Form 4</th><th>Form 5</th><th>Form 15</th></tr></thead><tbody><tr><td>Profit-sharing / capital only</td><td>Yes</td><td>No</td><td>No</td><td>No</td></tr><tr><td>New partner joining</td><td>Yes</td><td>Yes (30 days)</td><td>No</td><td>No</td></tr><tr><td>Partner exiting</td><td>Yes</td><td>Yes (30 days)</td><td>No</td><td>No</td></tr><tr><td>Partner name/address change</td><td>Yes</td><td>No</td><td>Yes</td><td>No</td></tr><tr><td>Office change (within state)</td><td>Yes</td><td>No</td><td>No</td><td>Yes</td></tr><tr><td>Office change (inter-state)</td><td>Yes</td><td>No</td><td>No</td><td>Yes + RD approval</td></tr><tr><td>NRI/foreign partner</td><td>Yes</td><td>Yes + FEMA</td><td>No</td><td>No</td></tr></tbody></table></div><p><strong>Critical:</strong> Form 3 is ALWAYS required. Linked forms are ADDITIONALLY required. Filing Form 3 alone without the linked form = incomplete compliance. Patron files all in coordinated submission. See <a href="/pvt-llp-compliance">LLP Compliance</a> for annual filing.</p>

            </div>
            </div>
        </div>
    </div>
</section>

<!-- SECTION 5: OUR SERVICES -->
<section class="content-section" id="services-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">LLP Agreement Change Services</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Service</th><th>What We Do</th></tr></thead>
                    <tbody>
                        <tr><td>Standard Amendment (Form 3 only)</td><td>Supplementary deed drafting, stamp paper, partner consent, Form 3 filing. 5-7 working days</td></tr><tr><td>Partner Addition/Exit (Form 3 + 4)</td><td>Supplementary deed + Form 3 + Form 4. DPIN verification, DSC coordination for new partner</td></tr><tr><td>Capital Contribution Change</td><td>Supplementary deed with new capital structure, Haryana stamp duty assessment, Form 3</td></tr><tr><td>Business Activity Change</td><td>Amendment to objects clause, Form 3. For LLPs expanding services</td></tr><tr><td>Office Change (Form 3 + 15)</td><td>Within Gurugram/Haryana: Form 3 + Form 15. Inter-state (Gurugram→Delhi): + RD approval</td></tr><tr><td>NRI/Foreign Partner (Form 3 + 4 + FEMA)</td><td>Supplementary deed, FEMA review, Form 3 + 4, KYC, DPIN, RBI reporting</td></tr><tr><td>Comprehensive Restructuring</td><td>Multiple amendments in single deed + coordinated form filing. Most efficient approach</td></tr>

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
            <h2 class="section-title">Documents Required for Amendment</h2>
            <p class="section-subtitle" style="text-align:left;max-width:100%;">From existing agreement review to ROC-approved supplementary deed.</p>
        </header>
        <div class="steps-container">
            <div class="step-card"><div class="step-content"><span class="step-badge">Step 1</span><h3 class="step-title">Draft + Stamp + Execute</h3><p class="step-description">Review existing agreement. Draft supplementary deed. Procure Haryana stamp paper (Rs 100-500 standard). All partners sign + 2 witnesses. Partner resolution passed.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Deed drafted</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Stamped + signed</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="15" y="5" width="90" height="70" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><text x="60" y="40" font-size="8" fill="#E8712C" font-weight="800" text-anchor="middle" font-family="Arial">DEED</text></svg></div><span class="illustration-label">Executed</span><span class="step-number-large">01</span></div></div></div><div class="step-card"><div class="step-content"><span class="step-badge">Step 2</span><h3 class="step-title">Form 3 + Linked Forms</h3><p class="step-description">File Form 3 with ROC Haryana within 30 days. File Form 4 if partners changed. Form 15 if office changed. All forms coordinated in single submission.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Form 3 filed</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Linked forms done</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="20" y="15" width="80" height="50" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><text x="60" y="40" font-size="9" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">F-3</text></svg></div><span class="illustration-label">Filed</span><span class="step-number-large">02</span></div></div></div><div class="step-card"><div class="step-content"><span class="step-badge">Step 3</span><h3 class="step-title">ROC Approval + Record Update</h3><p class="step-description">ROC Haryana reviews and approves (3-7 days). Amended agreement recorded in ROC database. Store approved supplementary deed with original agreement.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>ROC approved</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Records updated</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="20" y="10" width="80" height="60" rx="8" fill="#E8F5E9" stroke="#25D366" stroke-width="2"/><path d="M52 40l5 5 12-12" stroke="#25D366" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/></svg></div><span class="illustration-label">Complete</span><span class="step-number-large">03</span></div></div></div>

        </div>
    </div>
</section>

<!-- SECTION 8: DOCUMENTS REQUIRED -->
<section class="content-section" id="documents-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Haryana Stamp Duty for Supplementary LLP Deed</h2>
            <div class="content-text">
                
                <div class="table-responsive-wrapper"><table><thead><tr><th>Amendment Type</th><th>Indicative Stamp Duty</th><th>Notes</th></tr></thead><tbody><tr><td>Profit-sharing ratio (no capital)</td><td>Rs 100-500</td><td>Standard amendment duty</td></tr><tr><td>Capital contribution increase</td><td>% of increased contribution</td><td>Varies by amount</td></tr><tr><td>Partner addition (no capital)</td><td>Rs 100-500</td><td>Standard partnership amendment</td></tr><tr><td>Partner addition with capital</td><td>% of capital brought in</td><td>Higher duty</td></tr><tr><td>Business activity change</td><td>Rs 100-500</td><td>Standard amendment</td></tr><tr><td>Office change</td><td>Rs 100</td><td>Nominal duty</td></tr></tbody></table></div><div class="highlight-box" style="margin-top:20px;"><p><strong>Under-stamped deeds are NOT admissible as evidence.</strong> Patron assesses correct Haryana stamp duty, procures e-stamp paper, and ensures proper stamping before execution. See <a href="/legal-drafting">Legal Drafting</a> for deed preparation.</p></div>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 9: CHALLENGES -->
<section class="content-section" id="challenges-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Fees and Penalties</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Challenge</th><th>Impact</th><th>How Patron Accounting Solves It</th></tr></thead>
                    <tbody>
                        <tr><td>Standard Amendment (Form 3 only)</td><td>Patron from Rs 2,999 + Govt Rs 50-200</td><td>Rs 100/day (no cap) if late. 6 months = Rs 18,000</td></tr><tr><td>Partner Addition/Exit (Form 3+4)</td><td>Patron from Rs 4,999-7,999 + Govt Rs 100-400</td><td>Rs 100/day per form</td></tr><tr><td>Capital Contribution Change</td><td>Patron from Rs 3,999 + Govt Rs 50-200</td><td>Rs 100/day</td></tr><tr><td>Office Change (Form 3+15)</td><td>Patron from Rs 3,999-5,999 + Govt Rs 100-400</td><td>Rs 100/day per form</td></tr><tr><td>NRI/Foreign Partner (Form 3+4+FEMA)</td><td>Patron from Rs 7,999-14,999 + FEMA fees</td><td>Rs 100/day + FEMA penalty risk</td></tr><tr><td>Comprehensive Restructuring</td><td>Patron from Rs 9,999-19,999 + Govt Rs 50-400</td><td>Rs 100/day</td></tr>

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
            <h2 class="section-title">Amendment Timeline</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Fee Component</th><th>Amount</th></tr></thead>
                    <tbody>
                        <tr><td>Draft Supplementary Deed</td><td>1-3 days based on complexity</td></tr><tr><td>Stamp Paper Procurement</td><td>1-2 days | Haryana e-stamp or physical</td></tr><tr><td>Partner Consent + Execution</td><td>1-3 days | All partners sign + 2 witnesses</td></tr><tr><td>File Form 3 on MCA V3</td><td>Same day as execution (recommended) | Within 30 days mandatory</td></tr><tr><td>File Linked Forms (4/5/15)</td><td>Same day or within 30 days | Coordinated with Form 3</td></tr><tr><td>ROC Approval</td><td>3-7 working days | ROC Haryana processes</td></tr><tr><td>Total (standard)</td><td>5-10 working days end to end</td></tr>

                    </tbody>
                </table>
                </div>
                <p style="margin-top:16px;font-size:13px;color:var(--text-muted);font-style:italic;">All fees and charges listed are indicative only and do not constitute a binding offer. Final amounts may vary depending on the volume of work and the complexity involved.</p>
                <p style="margin-top:16px;">Professional service charges for drafting, filing, and representation are separate from the statutory fees. The exact fee depends on the complexity of the case, disputed amount, and number of hearings required. Contact us for a detailed quote.</p>
                <p style="margin-top:16px;"><strong>Get a free LLP Agreement Change in Gurugram consultation - <a href="tel:+919459456700">Call +91 945 945 6700</a> or <a href="https://wa.me/919459456700?text=Hello%2C%20I%20just%20visited%20your%20LLP%20Agreement%20Change%20in%20Gurugram%20page.%20I%20would%20like%20to%20know%20more%20about%20it." target="_blank" rel="noopener">WhatsApp us</a>. No-obligation assessment.</strong></p>
            </div>
        </div>
    </div>
</section>

<!-- SECTION 11: TIMELINE -->
<section class="content-section" id="timeline-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Why Choose Patron Accounting in Gurugram?</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Stage</th><th>Estimated Timeline</th></tr></thead>
                    <tbody>
                        <tr><td>Gurugram Office</td><td>Golf Course Extension Road - serving LLPs across Cyber City, Sohna Road, Udyog Vihar, Golf Course Road</td></tr><tr><td>CS-Drafted Deeds</td><td>Legally precise supplementary agreements covering all amendments in single deed</td></tr><tr><td>Haryana Stamp Expertise</td><td>Correct stamp duty assessment, e-stamp procurement, proper stamping before execution</td></tr><tr><td>Linked-Form Coordination</td><td>Form 3 + Form 4/5/15 filed in coordinated submission for complete compliance</td></tr><tr><td>NRI/Foreign Partner</td><td>FEMA compliance, RBI reporting, DPIN arrangement alongside agreement amendment</td></tr>

                    </tbody>
                </table>
                </div>
                <div class="highlight-box" style="margin-top:16px;">
                    
                    <p><strong>Critical:</strong> Form 3 within 30 days (Rs 100/day, no cap). Stamp paper mandatory per Haryana Stamp Act. All partners must consent. If partners change, Form 4 also required. Gurugram-to-Delhi shift is now inter-state (Feb 2026). File all linked forms in coordinated submission.</p>

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
            <h2 class="section-title">Special Situations for Gurugram LLPs</h2>
        </div>
        <div class="features-grid"><article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><h3 class="feature-title">Gurugram→Delhi Inter-State</h3><p class="feature-text">Since Feb 2026, shifting LLP office from Gurugram to Delhi is inter-state requiring RD approval + Form 3 + Form 15 + newspaper ads.</p></article><article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M14 2H6a2 2 0 00-2 2v16a2 2 0 002 2h12a2 2 0 002-2V8z"/><path d="M14 2v6h6M16 13H8M16 17H8"/></svg></div><h3 class="feature-title">Multiple Changes, One Deed</h3><p class="feature-text">All amendments (partner + capital + profit + activity) in a single supplementary deed. One stamp paper, one Form 3. Most efficient.</p></article><article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg></div><h3 class="feature-title">Original Form 3 Not Filed?</h3><p class="feature-text">Many old LLPs missed initial Form 3. Patron files overdue initial Form 3 first, then processes current amendment.</p></article><article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M17 21v-2a4 4 0 00-4-4H5a4 4 0 00-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M23 21v-2a4 4 0 00-3-3.87M16 3.13a4 4 0 010 7.75"/></svg></div><h3 class="feature-title">NRI/Foreign Partner FEMA</h3><p class="feature-text">Agreement amendment + FEMA compliance + RBI reporting + DPIN + Form 3 + Form 4 in one engagement for Golf Course Road LLPs.</p></article></div>
    </div>
</section>

<!-- SECTION 12A: SOCIAL PROOF -->
<section class="content-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Trusted by 10,000+ Businesses Across India</h2>
            <div class="content-text">
                
                <p><strong>Trust Banner:</strong> 10,000+ Businesses Served | 4.9 Google Rating | 50,000+ Documents Filed | 15+ Years of Practice</p><blockquote style="border-left:3px solid var(--orange);padding:16px 20px;margin:20px 0;background:var(--orange-lighter);border-radius:0 var(--radius-sm) var(--radius-sm) 0;"><p style="font-style:italic;margin-bottom:8px;">"CA firm LLP profit-sharing changed after senior partner retired. Patron drafted deed, managed Haryana stamp duty, filed Form 3 within a week. Seamless."</p><p style="font-weight:700;font-size:14px;margin:0;">- Managing Partner, CA Firm LLP, DLF Cyber City</p></blockquote><blockquote style="border-left:3px solid var(--orange);padding:16px 20px;margin:20px 0;background:var(--orange-lighter);border-radius:0 var(--radius-sm) var(--radius-sm) 0;"><p style="font-style:italic;margin-bottom:8px;">"Added Singapore NRI partner to tech LLP. Patron handled agreement, FEMA, Form 3, Form 4, DPIN in single coordinated engagement."</p><p style="font-weight:700;font-size:14px;margin:0;">- Founder, Tech LLP, Sohna Road</p></blockquote>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 13: SELF-FILING vs PROFESSIONAL COMPARISON -->
<section class="content-section" id="comparison-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Patron vs DIY Comparison</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Factor</th><th>Patron Managed</th><th>DIY</th></tr></thead>
                    <tbody>
                        <tr><td>Supplementary Deed</td><td>CS-drafted, legally precise</td><td>Generic template (dispute risk)</td></tr><tr><td>Stamp Duty</td><td>Correct Haryana assessment</td><td>Often under-stamped (invalid)</td></tr><tr><td>Linked Forms</td><td>Form 3 + 4/5/15 coordinated</td><td>Form 3 only (incomplete)</td></tr><tr><td>Foreign Partner</td><td>FEMA + DPIN + Form 4 managed</td><td>FEMA missed (penalty risk)</td></tr><tr><td>Pricing</td><td>From Rs 2,999 (transparent)</td><td>Low upfront but rework costs</td></tr><tr><td>Timeline</td><td>5-10 days end to end</td><td>Unpredictable</td></tr>

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
                
                <ul><li><a href="/llp-agreement-change">LLP Agreement Change (National)</a></li><li><a href="#">LLP Registration</a> - New LLP</li><li><a href="/pvt-llp-compliance">LLP Compliance</a> - Form 8/11</li><li><a href="/legal-drafting">Legal Drafting</a> - Deeds</li><li><a href="/fdi-compliance">FDI Compliance</a> - Foreign partner</li></ul>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 15A: LEGAL FRAMEWORK -->
<section class="content-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Legal and Compliance Framework</h2>
            <div class="content-text">
                
                <p><strong>Governing Law:</strong> LLP Act, 2008 | LLP Rules, 2009 (Rule 21) | LLP (Amendment) Rules, 2023 | Haryana Stamp Act</p><p><strong>Key Section:</strong> Section 23 (LLP Agreement, modification, filing)</p><p><strong>Forms:</strong> Form 3 (always required) | Form 4 (partner change) | Form 5 (partner name/address) | Form 15 (office change)</p><p><strong>ROC:</strong> ROC Haryana at Chandigarh (from 16 Feb 2026)</p><p><strong>Penalties:</strong> Late Form 3/4/15: Rs 100/day per form, NO cap. Under-stamped deed: inadmissible as evidence. Form 3 not filed: amendment not legally recognised.</p>

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
                    <h2 class="faq-expanded__title">FAQs - LLP Agreement Change in Gurugram</h2>
                    <p class="faq-expanded__lead">Common questions about LLP agreement amendment, supplementary deed, Form 3, stamp duty, and foreign partner admission for Gurugram LLPs.</p>
                    @include('partials.bigin-form', [
                        'variant'  => 'compact',
                        'service'  => 'LLP Agreement Change in Gurugram',
                        'city'     => 'Gurugram',
                    ])
                </aside>
                <div class="faq-expanded__list">
                    <div class="faq-expanded__item" id="faq-1">
                        <h3 class="faq-expanded__q">How to change an LLP agreement?</h3>
                        <div class="faq-expanded__a"><p>Partners pass resolution. Supplementary deed drafted on Haryana stamp paper, signed by all partners + 2 witnesses. Form 3 filed with ROC within 30 days. Form 4 also if partners change. Patron manages in 5-10 days.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-2">
                        <h3 class="faq-expanded__q">What is the deadline for Form 3?</h3>
                        <div class="faq-expanded__a"><p>30 days from executing supplementary agreement. Late filing: Rs 100/day, NO cap. 6 months = Rs 18,000. 1 year = Rs 36,500. File promptly.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-3">
                        <h3 class="faq-expanded__q">Is stamp duty required?</h3>
                        <div class="faq-expanded__a"><p>Yes. Supplementary deed on Haryana stamp paper. Standard amendments Rs 100-500. Capital-related may be higher. Under-stamped deeds are inadmissible as evidence in court.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-4">
                        <h3 class="faq-expanded__q">Can a foreign partner be added?</h3>
                        <div class="faq-expanded__a"><p>Yes, subject to FEMA. Amend agreement + Form 3 + Form 4. RBI reporting required. Foreign partner needs DPIN via DIR-3. Patron manages complete process including FEMA.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-5">
                        <h3 class="faq-expanded__q">What if Form 3 was never filed originally?</h3>
                        <div class="faq-expanded__a"><p>Initial Form 3 (Purpose 1) must be filed first with late fees before any amendment. Many old LLPs missed this. Patron files overdue initial + current amendment in coordinated submission.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-6">
                        <h3 class="faq-expanded__q">What changes require Form 4?</h3>
                        <div class="faq-expanded__a"><p>Any partner addition, exit, or designation change. Form 4 captures partner details. Filed alongside Form 3 within 30 days. Both forms mandatory when partners change.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-7">
                        <h3 class="faq-expanded__q">What about Gurugram-to-Delhi shift?</h3>
                        <div class="faq-expanded__a"><p>Since Feb 2026, this is inter-state transfer requiring RD approval + Form 3 + Form 15 + newspaper ads. Previously was simple within-ROC shift. Plan accordingly.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-8">
                        <h3 class="faq-expanded__q">What is the cost?</h3>
                        <div class="faq-expanded__a"><p>Standard (Form 3 only) from Rs 2,999. Partner change from Rs 4,999. Foreign partner from Rs 7,999. Comprehensive from Rs 9,999. Stamp duty additional per Haryana rates.</p></div>
                    </div>
                </div>
            </div>


            <!-- Quick Answers -->
            <div class="highlight-box" style="margin-top:32px;">
                <p><strong>Quick Answers</strong></p>
                <p><strong>LLP agreement kaise change karte hain?</strong> Supplementary deed banao (stamp paper par), sab partners sign, Form 3 ROC mein 30 din mein. Partner change ho toh Form 4 bhi.</p><p><strong>Stamp duty lagti hai?</strong> Haan. Haryana Stamp Act ke hisaab se Rs 100-500 standard. Capital wale mein zyada.</p><p><strong>Late filing penalty?</strong> Rs 100/din, koi cap nahi. Jaldi file karo.</p>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 18: URGENCY CTA -->
<section class="content-section" style="background: var(--orange-lighter) !important; border-left: 4px solid var(--orange);">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Form 3 Within 30 Days - Rs 100/Day No Cap</h2>
            <div class="content-text">
                
                <p>Form 3: 30 days from execution. Rs 100/day penalty, NO cap. Stamp paper mandatory. All partners must consent. If partners change: Form 4 also within 30 days. Gurugram-Delhi shift is now inter-state.</p><p><strong><a href="tel:+919459456700">Call +91 945 945 6700</a> or <a href="https://wa.me/919459456700?text=Hello%2C%20I%20just%20visited%20your%20LLP%20Agreement%20Change%20in%20Gurugram%20page.%20I%20would%20like%20to%20know%20more%20about%20it." target="_blank" rel="noopener">WhatsApp us</a>.</strong></p>

            </div>
        </div>
    </div>
</section>

<!-- CONCLUSION + CTA BLOCK (Dark) -->
<section class="content-section" style="background: var(--blue) !important;">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title" style="color:#FFFFFF !important;">Get Expert LLP Agreement Change in Gurugram</h2>
            <div class="content-text" style="text-align:left;">
                
                <p style="color:rgba(255,255,255,0.85);">Changing an LLP Agreement requires supplementary deed on Haryana stamp paper, partner consent, and Form 3 with ROC within 30 days. Whether adjusting profit ratios, adding partners, expanding activities, or admitting foreign partners, the amendment must be executed and filed with precision.</p><p style="color:rgba(255,255,255,0.85);">Patron Accounting's Gurugram office provides end-to-end services: deed drafting, Haryana stamp duty, partner consent, Form 3 + linked forms, and foreign partner FEMA compliance.</p><p style="color:rgba(255,255,255,0.85);">With 10,000+ businesses served, a 4.9 Google rating, and 50,000+ documents filed, Patron Accounting LLP is a trusted partner across Gurugram, NCR, and India.</p>

            </div>
            <div style="display:flex;gap:14px;flex-wrap:wrap;margin-top:24px;">
                <a href="tel:+919459456700" style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:var(--orange);color:#fff;border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#128222; Call +91 945 945 6700</a>
                <a href="https://wa.me/919459456700?text=Hello%2C%20I%20just%20visited%20your%20LLP%20Agreement%20Change%20in%20Gurugram%20page.%20I%20would%20like%20to%20know%20more%20about%20it." target="_blank" style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:#25D366;color:#fff;border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;" rel="noopener">&#128172; WhatsApp Us</a>
                <a href="mailto:sales@patronaccounting.com?subject=LLP%20Agreement%20Change%20Gurugram&body=Hello%2C%20I%20just%20visited%20your%20LLP%20Agreement%20Change%20in%20Gurugram%20page.%20I%20would%20like%20to%20know%20more%20about%20it.%0A%0AThank%20you." style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:transparent;color:#fff;border:2px solid rgba(255,255,255,0.3);border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#9993;&#65039; Email Us</a>
            </div>
            <p style="color:rgba(255,255,255,0.7);font-size:13px;margin-top:16px;">Book a Free Consultation - No Obligation.</p>
        </div>
    </div>
</section>

<!-- GSTAT STATE BENCH CITY PAGES (32 Pages) -->
<section class="content-section" style="padding:48px 32px;background:var(--gray-50);">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title" style="text-align:center;margin-bottom:12px;">LLP Agreement Change - Available Cities</h2>
            <p style="text-align:center;color:var(--text-muted);font-size:15px;margin-bottom:40px;">Expert LLP agreement amendment services across major Indian cities</p>

            <div class="pa-city-block" style="margin-bottom:40px;"><div class="pa-block-title">City-Wise LLP Agreement Change</div><div class="pa-block-sub">Select your city</div><div class="pa-city-grid"><a href="/llp-agreement-change/pune" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Pune</div><div class="pa-card-sub">Maharashtra</div></div></a><a href="/llp-agreement-change/mumbai" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Mumbai</div><div class="pa-card-sub">Maharashtra</div></div></a><a href="/llp-agreement-change/delhi" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Delhi</div><div class="pa-card-sub">Delhi NCR</div></div></a><div class="pa-city-card" style="opacity:0.6; pointer-events:none; border:2px solid var(--orange); position:relative;"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Gurugram</div><div class="pa-card-sub">Haryana</div></div><span style="position:absolute; top:6px; right:8px; font-size:10px; color:var(--orange); font-weight:700; text-transform:uppercase; letter-spacing:0.5px;">You're here</span></div></div></div><div class="pa-city-block"><div class="pa-block-title">Related Services in Gurugram</div><div class="pa-block-sub">End-to-end LLP support</div><div class="pa-cross-grid"><a href="#" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">LLP Registration</div><div class="pa-card-sub">Gurugram</div></div></a><a href="/pvt-llp-compliance/gurugram" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">LLP Compliance</div><div class="pa-card-sub">Gurugram</div></div></a><a href="/accounting-services/gurugram" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Accounting Services</div><div class="pa-card-sub">Gurugram</div></div></a><a href="/legal-drafting/gurugram" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Legal Drafting</div><div class="pa-card-sub">Gurugram</div></div></a><a href="/fdi-compliance/gurugram" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">FDI Compliance</div><div class="pa-card-sub">Gurugram</div></div></a><a href="/director-kyc/gurugram" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Director KYC</div><div class="pa-card-sub">Gurugram</div></div></a></div></div>
        </div>
    </div>
</section>

<!-- CONTENT FRESHNESS FOOTER -->
<section class="content-section" style="padding:32px;">
    <div class="content-container">
        <div class="text-content" style="font-size:13px;color:var(--text-muted);">
            <p><strong>Content Created:</strong> 03 April 2026 &nbsp;|&nbsp; <strong>Last Updated:</strong> <span id="lastUpdatedFooter">03 April 2026</span> &nbsp;|&nbsp; <strong>Next Review:</strong> 03 July 2026 &nbsp;|&nbsp; <strong>Reviewed By:</strong> CA &amp; CS Team, Patron Accounting LLP</p>
            <p>This page is reviewed quarterly. LLP Act Section 23, Form 3, Haryana Stamp Act rates, and ROC Haryana processing are verified.</p>
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
