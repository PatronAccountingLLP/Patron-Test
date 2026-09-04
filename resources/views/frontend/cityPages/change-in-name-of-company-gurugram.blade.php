
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
    <title>Company Name Change Gurugram - INC-24, INC-25 & ROC</title>
    <meta name="description" content="CA/CS-assisted company name change in Gurugram. Section 13, RUN, INC-24, MGT-14, ROC Haryana, fresh COI. Serving Cyber City, Golf Course Road companies. Call +91 945 945 6700.">
    <link rel="canonical" href="/change-in-name-of-company/gurugram">
    <meta name="robots" content="index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1">
    <meta property="og:title" content="Company Name Change Gurugram - INC-24, INC-25 & ROC">
    <meta property="og:description" content="CA/CS-assisted company name change in Gurugram. Section 13, RUN, INC-24, MGT-14, ROC Haryana, fresh COI. Serving Cyber City, Golf Course Road companies. Call +91 945 945 6700.">
    <meta property="og:url" content="/change-in-name-of-company/gurugram">
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="Patron Accounting">
    <meta property="og:image" content="https://www.patronaccounting.com/images/og-default-square.png">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="1200">
    <meta property="og:image:type" content="image/png">
    <meta property="og:image:secure_url" content="https://www.patronaccounting.com/images/og-default-square.png">
    <meta property="og:image:alt" content="Patron Accounting - partner you can rely on">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Company Name Change Gurugram - INC-24, INC-25 & ROC">
    <meta name="twitter:description" content="CA/CS-assisted company name change in Gurugram. Section 13, RUN, INC-24, MGT-14, ROC Haryana, fresh COI. Serving Cyber City, Golf Course Road companies. Call +91 945 945 6700.">
    <meta name="twitter:image" content="https://www.patronaccounting.com/images/og-default-square.png">
@endsection

@section('schema')
    <script type="application/ld+json">{
  "@context": "https://schema.org",
  "@graph": [
    {
      "@type": "Service",
      "name": "Change Company Name in Gurugram",
      "description": "CA/CS-assisted company name change in Gurugram. Section 13, RUN, INC-24, MGT-14, ROC Haryana, fresh COI. Serving Cyber City, Golf Course Road companies. Call +91 945 945 6700.",
      "url": "https://www.patronaccounting.com/change-in-name-of-company/gurugram",
      "serviceType": "Change Company Name in Gurugram",
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
        "url": "https://www.patronaccounting.com/change-in-name-of-company/gurugram",
        "price": "1000"
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
          "name": "Company Name Change: MCA Process Guide",
          "item": "https://www.patronaccounting.com/change-in-name-of-company"
        },
        {
          "@type": "ListItem",
          "position": 3,
          "name": "Change Company Name in Gurugram",
          "item": "https://www.patronaccounting.com/change-in-name-of-company/gurugram"
        }
      ]
    },
    {
      "@type": "FAQPage",
      "mainEntity": [
        {
          "@type": "Question",
          "name": "How to change a company name in India?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Reserve name via RUN on MCA portal, pass Special Resolution (75% majority) at EGM under Section 13, file MGT-14 and INC-24 with ROC within 30 days, receive Fresh COI (INC-25). Takes 15-25 working days. Patron handles the entire process for Gurugram companies."
          }
        },
        {
          "@type": "Question",
          "name": "What resolution is needed?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "A Special Resolution (75% majority of voting shareholders) at an EGM is mandatory under Section 13. An Ordinary Resolution is not sufficient. The Special Resolution must be filed with ROC via Form MGT-14 within 30 days."
          }
        },
        {
          "@type": "Question",
          "name": "Does the CIN change?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "No. The CIN is a permanent unique identifier assigned at incorporation and remains the same regardless of name changes. Only the company name changes in MCA records and on the Fresh Certificate of Incorporation."
          }
        },
        {
          "@type": "Question",
          "name": "How long does it take?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "15-25 working days: RUN approval (2-4 days), EGM + Special Resolution (3-7 days), MGT-14 + INC-24 filing (2-3 days), ROC processing + Fresh COI (7-10 days). For closely-held companies, 15-18 days is achievable."
          }
        },
        {
          "@type": "Question",
          "name": "Can a name change be rejected?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Yes. Common reasons: name too similar to existing company or LLP, trademark conflict, prohibited words (government, national), or pending compliance defaults under Rule 29. Comprehensive name search and compliance check before filing minimises rejection."
          }
        },
        {
          "@type": "Question",
          "name": "What is the cost?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Total Rs 8,000-20,000 including RUN (Rs 1,000), MGT-14 fee, INC-24 fee, stamp duty, and professional fee (from Rs 5,999). Post-change PAN and GST updates have nil government fees. Patron provides transparent all-inclusive quotes."
          }
        },
        {
          "@type": "Question",
          "name": "What happens to existing contracts?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "All contracts, rights, obligations, legal proceedings, and liabilities continue without interruption. The name change does not create a new entity. Issue addendum letters to counterparties with Fresh COI copy."
          }
        },
        {
          "@type": "Question",
          "name": "Can I change name and office together?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Yes. Both can be processed simultaneously with separate Special Resolutions. Name change requires RUN + INC-24, office change (within state) requires INC-22. Patron bundles both for companies restructuring comprehensively. Quick Answers Company ka naam change karne ka process kya hai? RUN se naam reserve karo → EGM mein Special Resolution pass karo → MGT-14 aur INC-24 ROC Haryana mein file karo → Fresh COI milta hai. Kitna time lagta hai? 15-25 working days. Startup ke liye 15-18 din mein ho sakta hai. CIN change hota hai kya? Nahi. CIN permanent hai, sirf naam change hota hai."
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
                        Change in Name of Company in Gurugram: Section 13 Filing by CA and CS
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
                            <p class="mb-0 text-dark benefit-paragraph"><span>Legal Basis:</span> Section 13, Companies Act 2013 - Special Resolution at EGM (75% majority)</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Name Reservation:</span> RUN (Reserve Unique Name) on MCA portal - Rs 1,000, reserved for 60 days</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Forms:</span> MGT-14 (Special Resolution) + INC-24 (Name Change) → INC-25 (Fresh COI)</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Timeline:</span> 15-25 working days from Board Meeting to Fresh Certificate of Incorporation</p>
                        </div>
                    </div>

                    <p class="mb-4 fw-bold" style="color: var(--blue); font-size: 15px;">Company name changes for startups rebranding, MNC subsidiaries, and growing businesses across Gurugram.</p>

                    <div class="hero-cta">
                        <a href="tel:+919459456700" class="btn-video text-decoration-none">
                            <span class="play-circle"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="width:14px;height:14px;color:#fff"><path d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/></svg></span>
                            Call +91 945 945 6700
                        </a>
                        <a href="mailto:sales@patronaccounting.com" class="btn-sample text-decoration-none">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="width:18px;height:18px;"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,12 2,6"/></svg>
                            Email Us
                        </a>
                        <a href="https://wa.me/919459456700?text=Hello%2C%20I%20just%20visited%20your%20Change%20in%20Name%20of%20Company%20in%20Gurugram%20page.%20I%20would%20like%20to%20know%20more%20about%20it." target="_blank" class="btn-sample text-decoration-none" rel="noopener">
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
                                            'service'  => 'Change in Name of Company in Gurugram',
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
    'ctaText'    => 'Company name change with RUN reservation, ROC filing, and post-change coordination from Gurugram.',
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
            <a href="#overview-section" class="toc-btn active">Overview</a><a href="#what-section" class="toc-btn">Process</a><a href="#who-section" class="toc-btn">Reasons</a><a href="#services-section" class="toc-btn">Services</a><a href="#procedure-section" class="toc-btn">MCA Filing</a><a href="#documents-section" class="toc-btn">Documents</a><a href="#challenges-section" class="toc-btn">Challenges</a><a href="#fees-section" class="toc-btn">Fees</a><a href="#timeline-section" class="toc-btn">Timeline</a><a href="#benefits-section" class="toc-btn">Why Patron</a><a href="#comparison-section" class="toc-btn">Comparison</a><a href="#faq-section" class="toc-btn">FAQs</a>
        </div>
        <button class="toc-arrow right" id="tocRight">&#10095;</button>
    </div>
</div>

<!-- SECTION 2: OVERVIEW / INTRO + TL;DR -->
<section class="content-section" id="overview-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Company Name Change in Gurugram: RUN, Special Resolution, and ROC Approval</h2>
            <div class="content-text">
                <div class="highlight-box" style="margin-bottom:20px;">
                    <p><strong>&#128204; TL;DR - Change in Name of Company in Gurugram Services at a Glance</strong></p>
                    <p>Changing the name of a company registered in Gurugram requires a Special Resolution (75% majority) at an EGM under Section 13 of the Companies Act 2013, name reservation through RUN on the MCA portal, filing of Form MGT-14 and Form INC-24 with ROC Haryana at Chandigarh. The ROC issues a Fresh Certificate of Incorporation (Form INC-25). The company CIN does not change. Rule 29 prohibits name change if the company has defaulted in filing annual returns or financial statements. The process takes 15-25 working days.</p>
                </div>
                <p>Gurugram's dynamic business landscape drives frequent company name changes. DLF Cyber City startups pivot and rebrand. Golf Course Road MNC subsidiaries align names with global restructuring. Udyog Vihar companies modernise identity. For a comprehensive overview, refer to our <a href="/change-in-name-of-company">Change in Name of Company</a> national guide.</p><div class="table-responsive-wrapper"><table><thead><tr><th>Parameter</th><th>Detail</th></tr></thead><tbody><tr><td>Legal Section</td><td>Section 13, Companies Act 2013</td></tr><tr><td>Resolution</td><td>Special Resolution at EGM (75% majority)</td></tr><tr><td>Name Reservation</td><td>RUN on MCA portal (Rs 1,000, 2 options, 60-day validity)</td></tr><tr><td>Forms</td><td>MGT-14 + INC-24 → INC-25 (Fresh COI)</td></tr><tr><td>ROC Jurisdiction</td><td>ROC Haryana at Chandigarh (from 16 Feb 2026)</td></tr><tr><td>Timeline</td><td>15-25 working days</td></tr><tr><td>Prerequisite</td><td>No pending annual returns/financial statements (Rule 29)</td></tr></tbody></table></div><p</p>
                <p>With the ROC jurisdiction recently shifting from ROC Delhi to ROC Haryana at Chandigarh (effective 16 February 2026), Gurugram companies must ensure all name change filings are directed to the new ROC office. A company name change does not create a new legal entity - the company continues with the same CIN, PAN (updated), rights, obligations, contracts, and legal proceedings.</p>
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
                <h2 class="section-title">Step-by-Step Process for Company Name Change</h2>
                <div class="content-text what-is-definition">
                    
                    <p><strong>Step 1: Check Compliance</strong> - Rule 29 blocks name change if annual returns (MGT-7A), financial statements (AOC-4), or deposit repayments are pending. Clear all defaults first. Learn more about <a href="#">Annual Compliance</a>.</p><p><strong>Step 2: Board Meeting + RUN</strong> - Pass Board Resolution. Apply via RUN on MCA V3 (2 names, Rs 1,000, 2-4 days processing, 60-day validity). Name must not conflict with existing companies or trademarks.</p><p><strong>Step 3: EGM + Special Resolution</strong> - 21 days' notice (shorter with consent). Pass Special Resolution (75% majority) to change name and amend MOA/AOA. Record signed minutes.</p><p><strong>Step 4: File MGT-14 + INC-24</strong> - MGT-14 (Special Resolution) within 30 days. INC-24 (name change application) with ROC Haryana at Chandigarh. Both digitally signed + CS/CA certified.</p><p><strong>Step 5: Fresh COI</strong> - ROC issues INC-25 (Fresh Certificate of Incorporation) with new name. CIN remains same. MCA Master Data updated. You may also need <a href="/trademark-registration">Trademark Registration</a> to protect your new name.</p><p><strong>Step 6: Post-Change Updates</strong> - Update PAN, GST, bank accounts, contracts, letterheads, website, email, social media, and all statutory registers.</p>

                </div>
                <div class="highlight-box" style="margin-top:20px;">
                    <p><strong>Key Terms for Change in Name of Company in Gurugram:</strong></p>
                    <p><strong>Section 13:</strong> Companies Act provision for alteration of Memorandum of Association including company name change.</p><p><strong>RUN:</strong> Reserve Unique Name - MCA portal service for reserving proposed company names (Rs 1,000, 60-day validity).</p><p><strong>Form INC-24:</strong> Application for name change filed with ROC after Special Resolution.</p><p><strong>Form INC-25:</strong> Fresh Certificate of Incorporation issued by ROC with the new company name.</p><p><strong>Rule 29:</strong> Prohibits name change if company has defaulted in annual returns, financial statements, or deposit repayment.</p>

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
                            <text x="100" y="170" font-size="10" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial, sans-serif">Change in Name of Company in Gurugram</text>
                        </svg>
                    </div>
                    <div class="illustration-badge">
                        <span>Name Change</span>
                        <strong>Gurugram Filing</strong>
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
            <h2 class="section-title">Reasons for Company Name Change in Gurugram</h2>
            <div class="content-text">
                
                <div class="table-responsive-wrapper"><table><thead><tr><th>Reason</th><th>Gurugram Context</th><th>Example</th></tr></thead><tbody><tr><td>Rebranding / Pivot</td><td>DLF Cyber City startups after product-market pivot</td><td>Tech company shifting from B2C to B2B</td></tr><tr><td>M&A Name Alignment</td><td>Post-acquisition brand consolidation</td><td>Acquirer's name adopted by target</td></tr><tr><td>Global Parent Alignment</td><td>Golf Course Road MNC subsidiaries</td><td>Indian subsidiary matches global brand</td></tr><tr><td>Business Diversification</td><td>Udyog Vihar manufacturers expanding to services</td><td>Name no longer reflects activities</td></tr><tr><td>Trademark Conflict</td><td>MCA/court directed under Section 16</td><td>Must change within 3 months</td></tr><tr><td>Investor Requirement</td><td>Pre-Series A rebranding</td><td>VC requests name change as condition</td></tr></tbody></table></div><p><strong>Key continuity:</strong> A name change does NOT create a new entity. The same CIN, PAN (updated), contracts, liabilities, employees, directors, and shareholding continue unchanged. Only the name on the COI and all documents changes.</p>

            </div>
            </div>
        </div>
    </div>
</section>

<!-- SECTION 5: OUR SERVICES -->
<section class="content-section" id="services-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Company Name Change Services in Gurugram</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Service</th><th>What We Do</th></tr></thead>
                    <tbody>
                        <tr><td>End-to-End Name Change</td><td>Compliance check, Board Resolution, RUN reservation, EGM + Special Resolution, MGT-14, INC-24, Fresh COI, post-change coordination</td></tr><tr><td>Name Availability Research</td><td>MCA company database, LLP database, and trademark registry search to ensure unique, defensible name</td></tr><tr><td>ROC Haryana Filing</td><td>All filings to ROC Haryana at Chandigarh (from 16 Feb 2026). Jurisdiction transition management</td></tr><tr><td>Post-Change Coordination</td><td>PAN update, GST amendment, bank account changes, contract addendums, statutory register updates</td></tr><tr><td>Trademark Advisory</td><td>Trademark search and registration recommendation to protect the new brand name</td></tr><tr><td>Bundled Restructuring</td><td>Name change combined with registered office change, object clause change, or capital change</td></tr>

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
            <h2 class="section-title">MCA V3 Portal Filing Details</h2>
            <p class="section-subtitle" style="text-align:left;max-width:100%;">Our CS team handles the complete filing including RUN application, MGT-14, INC-24, and Fresh COI obtainment on MCA V3.</p>
        </header>
        <div class="steps-container">
            <div class="step-card"><div class="step-content"><span class="step-badge">Step 1</span><h3 class="step-title">Compliance Check + Board Meeting</h3><p class="step-description">Clear any pending ROC defaults (Rule 29). Pass Board Resolution approving name change proposal and authorising RUN application and EGM convening.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Defaults cleared</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Board approved</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="15" y="5" width="90" height="70" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><line x1="30" y1="25" x2="90" y2="25" stroke="#F5A623" stroke-width="3" stroke-linecap="round"/><line x1="30" y1="40" x2="80" y2="40" stroke="#14365F" stroke-width="2" stroke-linecap="round" opacity="0.3"/></svg></div><span class="illustration-label">Compliance Clear</span><span class="step-number-large">01</span></div></div></div><div class="step-card"><div class="step-content"><span class="step-badge">Step 2</span><h3 class="step-title">RUN Name Reservation</h3><p class="step-description">Apply via RUN on MCA V3 with 2 proposed names + justification. Rs 1,000 fee. Processing: 2-4 working days. Reserved for 60 days. Must not conflict with existing companies or trademarks.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Name reserved</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>60-day validity</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="20" y="15" width="80" height="50" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><text x="60" y="40" font-size="11" fill="#E8712C" font-weight="800" text-anchor="middle" font-family="Arial">RUN</text></svg></div><span class="illustration-label">Name Approved</span><span class="step-number-large">02</span></div></div></div><div class="step-card"><div class="step-content"><span class="step-badge">Step 3</span><h3 class="step-title">EGM + Special Resolution</h3><p class="step-description">Issue EGM notice (21 days, shorter with consent). Pass Special Resolution (75% majority) to change name and amend MOA Clause I. Record signed minutes.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>75% majority achieved</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Minutes signed</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="10" y="15" width="45" height="50" rx="5" fill="#F0F4F8" stroke="#14365F" stroke-width="1.2"/><rect x="65" y="15" width="45" height="50" rx="5" fill="#F0F4F8" stroke="#14365F" stroke-width="1.2"/><circle cx="60" cy="40" r="8" fill="none" stroke="#25D366" stroke-width="1.5"/><path d="M57 40l2 2 4-4" stroke="#25D366" stroke-width="1.5" stroke-linecap="round"/></svg></div><span class="illustration-label">Resolution Passed</span><span class="step-number-large">03</span></div></div></div><div class="step-card"><div class="step-content"><span class="step-badge">Step 4</span><h3 class="step-title">File MGT-14 + INC-24</h3><p class="step-description">MGT-14 (Special Resolution) within 30 days. INC-24 (name change application) with ROC Haryana at Chandigarh. Both digitally signed by Director + certified by CS/CA.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>MGT-14 filed</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>INC-24 filed</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="20" y="15" width="80" height="50" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><text x="60" y="35" font-size="9" fill="#E8712C" font-weight="800" text-anchor="middle" font-family="Arial">MGT-14</text><text x="60" y="50" font-size="9" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">INC-24</text></svg></div><span class="illustration-label">Forms Filed</span><span class="step-number-large">04</span></div></div></div><div class="step-card"><div class="step-content"><span class="step-badge">Step 5</span><h3 class="step-title">ROC Approval + Fresh COI</h3><p class="step-description">ROC Haryana reviews INC-24 (7-10 working days). Issues Fresh Certificate of Incorporation (INC-25) with new name. CIN remains same. MCA Master Data updated.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>ROC approved</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Fresh COI issued</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="20" y="10" width="80" height="60" rx="8" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><circle cx="60" cy="40" r="18" fill="#E8F5E9" stroke="#25D366" stroke-width="2"/><path d="M52 40l5 5 12-12" stroke="#25D366" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/></svg></div><span class="illustration-label">COI Issued</span><span class="step-number-large">05</span></div></div></div><div class="step-card"><div class="step-content"><span class="step-badge">Step 6</span><h3 class="step-title">Post-Change Updates</h3><p class="step-description">Update PAN, GST (within 15 days), bank accounts, TAN, EPFO/ESIC, contracts (addendums), letterheads, website, email, social media, and statutory registers.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>All registrations updated</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Stakeholders notified</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M60 10L100 85H20Z" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><path d="M55 55l5 5 12-12" stroke="#25D366" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"/></svg></div><span class="illustration-label">Complete</span><span class="step-number-large">06</span></div></div></div>

        </div>
    </div>
</section>

<!-- SECTION 8: DOCUMENTS REQUIRED -->
<section class="content-section" id="documents-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Documents Required for Company Name Change</h2>
            <div class="content-text">
                
                <ul><li><strong>Board Resolution</strong> - Approving name change and authorising EGM/RUN.</li><li><strong>RUN Approval Letter</strong> - Name reservation from MCA portal.</li><li><strong>EGM Notice and Explanatory Statement</strong> - Issued to all shareholders.</li><li><strong>Special Resolution (certified copy)</strong> - 75% majority at EGM.</li><li><strong>EGM Minutes Extract</strong> - Signed by Chairman with attendance and voting.</li><li><strong>Altered MOA and AOA</strong> - New name in Clause I.</li><li><strong>DSC</strong> - Of signing Director.</li><li><strong>CA/CS Certificate</strong> - For MGT-14 and INC-24.</li></ul><div class="highlight-box" style="margin-top:20px;"><p><strong>Gurugram-specific tip:</strong> Before applying via RUN, check not only the MCA company database but also the trademark registry (ipindiaservices.gov.in). A name approved by MCA but conflicting with a registered trademark can lead to a Section 16 forced name change within 3 months, wasting the entire process and fees.</p></div>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 9: CHALLENGES -->
<section class="content-section" id="challenges-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Common Challenges for Gurugram Companies</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Challenge</th><th>Impact</th><th>How Patron Accounting Solves It</th></tr></thead>
                    <tbody>
                        <tr><td>Compliance Defaults Blocking Name Change</td><td>Rule 29 blocks if annual returns/financial statements pending</td><td>Compliance team clears all pending filings before initiating name change process</td></tr><tr><td>Name Rejection by MCA</td><td>Phonetic similarity, prohibited words, trademark conflict</td><td>Comprehensive name search + 2 strong backup names in RUN. Trademark registry pre-check</td></tr><tr><td>ROC Jurisdiction Transition</td><td>Filings must go to ROC Haryana Chandigarh, not ROC Delhi</td><td>Established filing relationship with new ROC Haryana ensures smooth processing</td></tr><tr><td>Post-Change Update Fatigue</td><td>15+ touchpoints need name update (PAN, GST, banks, contracts...)</td><td>Comprehensive post-change checklist with coordination for all updates</td></tr><tr><td>60-Day RUN Expiry Pressure</td><td>All filings must complete within 60 days of name approval</td><td>Tight timeline management from RUN to INC-24 with parallel preparation</td></tr>

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
            <h2 class="section-title">Cost of Company Name Change in Gurugram</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Fee Component</th><th>Amount</th></tr></thead>
                    <tbody>
                        <tr><td>RUN (Name Reservation)</td><td>Rs 1,000 (MCA portal, non-refundable)</td></tr><tr><td>Form MGT-14 Filing Fee</td><td>Rs 200-600 (based on authorised capital slab)</td></tr><tr><td>Form INC-24 Filing Fee</td><td>Rs 1,000-5,000 (based on authorised capital slab)</td></tr><tr><td>Patron Professional Fee (end-to-end)</td><td>Starting from INR 7,999 (Exl GST and Govt. Charges)</td></tr><tr><td>Post-Change PAN/GST Updates</td><td>Nil (government fees)</td></tr><tr><td>Total Estimated Cost</td><td>Rs 8,000-20,000 (all govt fees + professional fee)</td></tr>

                    </tbody>
                </table>
                </div>
                <p style="margin-top:16px;font-size:13px;color:var(--text-muted);font-style:italic;">All fees and charges listed are indicative only and do not constitute a binding offer. Final amounts may vary depending on the volume of work and the complexity involved.</p>
                <p style="margin-top:16px;">Professional service charges for drafting, filing, and representation are separate from the statutory fees. The exact fee depends on the complexity of the case, disputed amount, and number of hearings required. Contact us for a detailed quote.</p>
                <p style="margin-top:16px;"><strong>Get a free Change in Name of Company in Gurugram consultation - <a href="tel:+919459456700">Call +91 945 945 6700</a> or <a href="https://wa.me/919459456700?text=Hello%2C%20I%20just%20visited%20your%20Change%20in%20Name%20of%20Company%20in%20Gurugram%20page.%20I%20would%20like%20to%20know%20more%20about%20it." target="_blank" rel="noopener">WhatsApp us</a>. No-obligation assessment.</strong></p>
            </div>
        </div>
    </div>
</section>

<!-- SECTION 11: TIMELINE -->
<section class="content-section" id="timeline-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Company Name Change Timeline</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Stage</th><th>Estimated Timeline</th></tr></thead>
                    <tbody>
                        <tr><td>Compliance Check + Board Meeting</td><td>Day 1-3 - clear defaults, pass Board Resolution</td></tr><tr><td>RUN Application</td><td>Day 3-4 - Rs 1,000, 2 name options</td></tr><tr><td>RUN Approval by MCA</td><td>Day 4-8 - 2-4 working days processing</td></tr><tr><td>EGM + Special Resolution</td><td>Day 9-12 - with all-shareholder consent for short notice</td></tr><tr><td>MGT-14 Filing on MCA V3</td><td>Day 12-14 - within 30 days of SR</td></tr><tr><td>INC-24 Filing on MCA V3</td><td>Day 14-17 - after MGT-14 SRN obtained</td></tr><tr><td>ROC Processing + Fresh COI</td><td>Day 17-25 - 7-10 working days</td></tr><tr><td>Post-Change Updates Begin</td><td>Day 25+ - PAN, GST, bank, contracts</td></tr>

                    </tbody>
                </table>
                </div>
                <div class="highlight-box" style="margin-top:16px;">
                    
                    <p><strong>Critical:</strong> RUN name reservation is valid for only 60 days. Rule 29 blocks name change if annual returns or financial statements are pending. Start at least 4 weeks before desired name change date. Do NOT use the new name before receiving Fresh COI (INC-25).</p>

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
            <h2 class="section-title">Why Choose Patron Accounting for Name Change in Gurugram?</h2>
        </div>
        <div class="features-grid"><article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><h3 class="feature-title">Gurugram Office</h3><p class="feature-text">Golf Course Extension Road - in-person consultation and document support for companies across Cyber City, Golf Course Road, Sohna Road, and Udyog Vihar.</p></article><article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"/></svg></div><h3 class="feature-title">Name Change Expertise</h3><p class="feature-text">Startups rebranding after pivot, MNC subsidiaries aligning with global names, manufacturing companies modernising, and post-M&A name consolidation.</p></article><article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg></div><h3 class="feature-title">ROC Haryana Relationship</h3><p class="feature-text">Established filing relationship with new ROC Haryana at Chandigarh. Smooth processing without jurisdiction transition delays.</p></article><article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><path d="M12 6v6l4 2"/></svg></div><h3 class="feature-title">15-20 Day Turnaround</h3><p class="feature-text">Efficient timeline management from compliance check through Fresh COI. Parallel preparation during RUN approval period saves time.</p></article><article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M14 2H6a2 2 0 00-2 2v16a2 2 0 002 2h12a2 2 0 002-2V8z"/><path d="M14 2v6h6M16 13H8M16 17H8"/></svg></div><h3 class="feature-title">Post-Change Coordination</h3><p class="feature-text">PAN update, GST amendment, bank changes, and comprehensive compliance checklist. One engagement covers the entire transition.</p></article><article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M17 21v-2a4 4 0 00-4-4H5a4 4 0 00-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M23 21v-2a4 4 0 00-3-3.87M16 3.13a4 4 0 010 7.75"/></svg></div><h3 class="feature-title">In-House CS Team</h3><p class="feature-text">MGT-14 and INC-24 certified by in-house Company Secretary. Quality control and fast turnaround guaranteed.</p></article></div>
    </div>
</section>

<!-- SECTION 12A: SOCIAL PROOF -->
<section class="content-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Trusted by 10,000+ Businesses Across India</h2>
            <div class="content-text">
                
                <p><strong>Trust Banner:</strong> 10,000+ Businesses Served | 4.9 Google Rating | 50,000+ Documents Filed | 15+ Years of Practice</p><blockquote style="border-left:3px solid var(--orange);padding:16px 20px;margin:20px 0;background:var(--orange-lighter);border-radius:0 var(--radius-sm) var(--radius-sm) 0;"><p style="font-style:italic;margin-bottom:8px;">"We pivoted from EdTech to AI and needed a complete rebrand. Patron handled the name change from RUN to Fresh COI in 18 days, then coordinated PAN, GST, and bank updates. Zero compliance gaps."</p><p style="font-weight:700;font-size:14px;margin:0;">- Startup Founder, DLF Cyber City</p></blockquote><blockquote style="border-left:3px solid var(--orange);padding:16px 20px;margin:20px 0;background:var(--orange-lighter);border-radius:0 var(--radius-sm) var(--radius-sm) 0;"><p style="font-style:italic;margin-bottom:8px;">"Parent company in Japan restructured - Indian subsidiary needed name change. Patron managed Special Resolution with NRI director consents and completed before the global deadline."</p><p style="font-weight:700;font-size:14px;margin:0;">- Finance Director, Golf Course Road</p></blockquote>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 13: SELF-FILING vs PROFESSIONAL COMPARISON -->
<section class="content-section" id="comparison-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Patron vs Other CS Firms for Name Change in Gurugram</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Factor</th><th>Patron Accounting</th><th>Typical CS Firm</th></tr></thead>
                    <tbody>
                        <tr><td>Name Change Experience</td><td>Extensive - startups, MNCs, manufacturing</td><td>Basic filings</td></tr><tr><td>ROC Haryana</td><td>Established relationship</td><td>Transitioning from ROC Delhi</td></tr><tr><td>Post-Change Coordination</td><td>PAN, GST, bank, contracts included</td><td>Fresh COI only</td></tr><tr><td>Trademark Pre-Check</td><td>Trademark search before RUN</td><td>Not offered</td></tr><tr><td>Pricing</td><td>From Rs 5,999 (transparent, all-inclusive)</td><td>Variable, extras for post-change</td></tr><tr><td>CS Certification</td><td>In-house CS team</td><td>May outsource</td></tr>

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
                
                <ul><li><a href="/change-in-name-of-company">Change in Name of Company (National)</a> - Broader overview</li><li><a href="/private-limited-company-registration">Private Limited Registration</a> - New incorporation</li><li><a href="/change-in-authorised-capital">Change in Authorised Capital</a> - Capital restructuring</li><li><a href="/trademark-registration">Trademark Registration</a> - Protect new name</li><li><a href="#">Annual Compliance</a> - ROC annual returns</li></ul>

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
                
                <p><strong>Governing Law:</strong> Companies Act, 2013 | Companies (Incorporation) Rules, 2014</p><p><strong>Key Sections:</strong> Section 13 (MOA alteration - name change) | Section 16 (rectification of name) | Rule 29 (prerequisites for name change)</p><p><strong>Forms:</strong> RUN (name reservation) | MGT-14 (Special Resolution) | INC-24 (name change application) | INC-25 (Fresh COI)</p><p><strong>ROC:</strong> ROC Haryana at Chandigarh (from 16 Feb 2026) | roc.haryana@mca.gov.in</p><p><strong>Portal:</strong> <a href="https://mca.gov.in" target="_blank" rel="noopener">MCA V3 - mca.gov.in</a></p><p><strong>Penalties:</strong></p><p><strong>Rule 29:</strong> Company in default of annual returns/financial statements CANNOT change name until cleared.</p><p><strong>Section 16:</strong> MCA can ORDER name change within 3 months if trademark conflict. Failure: Rs 1,000/day.</p><p><strong>Late MGT-14/INC-24:</strong> Additional fees up to 12x normal for significant delays.</p>

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
                    <h2 class="faq-expanded__title">FAQs - Change in Name of Company in Gurugram</h2>
                    <p class="faq-expanded__lead">Common questions about company name change process, RUN reservation, and ROC filing for Gurugram companies.</p>
                    @include('partials.bigin-form', [
                        'variant'  => 'compact',
                        'service'  => 'Change in Name of Company in Gurugram',
                        'city'     => 'Gurugram',
                    ])
                </aside>
                <div class="faq-expanded__list">
                    <div class="faq-expanded__item" id="faq-1">
                        <h3 class="faq-expanded__q">How to change a company name in India?</h3>
                        <div class="faq-expanded__a"><p>Reserve name via RUN on MCA portal, pass Special Resolution (75% majority) at EGM under Section 13, file MGT-14 and INC-24 with ROC within 30 days, receive Fresh COI (INC-25). Takes 15-25 working days. Patron handles the entire process for Gurugram companies.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-2">
                        <h3 class="faq-expanded__q">What resolution is needed?</h3>
                        <div class="faq-expanded__a"><p>A Special Resolution (75% majority of voting shareholders) at an EGM is mandatory under Section 13. An Ordinary Resolution is not sufficient. The Special Resolution must be filed with ROC via Form MGT-14 within 30 days.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-3">
                        <h3 class="faq-expanded__q">Does the CIN change?</h3>
                        <div class="faq-expanded__a"><p>No. The CIN is a permanent unique identifier assigned at incorporation and remains the same regardless of name changes. Only the company name changes in MCA records and on the Fresh Certificate of Incorporation.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-4">
                        <h3 class="faq-expanded__q">How long does it take?</h3>
                        <div class="faq-expanded__a"><p>15-25 working days: RUN approval (2-4 days), EGM + Special Resolution (3-7 days), MGT-14 + INC-24 filing (2-3 days), ROC processing + Fresh COI (7-10 days). For closely-held companies, 15-18 days is achievable.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-5">
                        <h3 class="faq-expanded__q">Can a name change be rejected?</h3>
                        <div class="faq-expanded__a"><p>Yes. Common reasons: name too similar to existing company or LLP, trademark conflict, prohibited words (government, national), or pending compliance defaults under Rule 29. Comprehensive name search and compliance check before filing minimises rejection.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-6">
                        <h3 class="faq-expanded__q">What is the cost?</h3>
                        <div class="faq-expanded__a"><p>Total Rs 8,000-20,000 including RUN (Rs 1,000), MGT-14 fee, INC-24 fee, stamp duty, and professional fee (from Rs 5,999). Post-change PAN and GST updates have nil government fees. Patron provides transparent all-inclusive quotes.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-7">
                        <h3 class="faq-expanded__q">What happens to existing contracts?</h3>
                        <div class="faq-expanded__a"><p>All contracts, rights, obligations, legal proceedings, and liabilities continue without interruption. The name change does not create a new entity. Issue addendum letters to counterparties with Fresh COI copy.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-8">
                        <h3 class="faq-expanded__q">Can I change name and office together?</h3>
                        <div class="faq-expanded__a"><p>Yes. Both can be processed simultaneously with separate Special Resolutions. Name change requires RUN + INC-24, office change (within state) requires INC-22. Patron bundles both for companies restructuring comprehensively.</p></div>
                    </div>
                </div>
            </div>


            <!-- Quick Answers -->
            <div class="highlight-box" style="margin-top:32px;">
                <p><strong>Quick Answers</strong></p>
                <p><strong>Company ka naam change karne ka process kya hai?</strong> RUN se naam reserve karo → EGM mein Special Resolution pass karo → MGT-14 aur INC-24 ROC Haryana mein file karo → Fresh COI milta hai.</p><p><strong>Kitna time lagta hai?</strong> 15-25 working days. Startup ke liye 15-18 din mein ho sakta hai.</p><p><strong>CIN change hota hai kya?</strong> Nahi. CIN permanent hai, sirf naam change hota hai.</p>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 18: URGENCY CTA -->
<section class="content-section" style="background: var(--orange-lighter) !important; border-left: 4px solid var(--orange);">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Start Your Company Rebrand - RUN Valid Only 60 Days</h2>
            <div class="content-text">
                
                <p>RUN name reservation expires in 60 days. Rule 29 blocks name change if annual returns pending. ROC Haryana at Chandigarh is the new filing authority. Special Resolution requires 75% majority. Post-change PAN and GST updates must be completed within 15-30 days. Start at least 4 weeks before desired effective date.</p><p><strong><a href="tel:+919459456700">Call +91 945 945 6700</a> or <a href="https://wa.me/919459456700?text=Hello%2C%20I%20just%20visited%20your%20Change%20in%20Name%20of%20Company%20in%20Gurugram%20page.%20I%20would%20like%20to%20know%20more%20about%20it." target="_blank" rel="noopener">WhatsApp us</a> to get started.</strong></p>

            </div>
        </div>
    </div>
</section>

<!-- CONCLUSION + CTA BLOCK (Dark) -->
<section class="content-section" style="background: var(--blue) !important;">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title" style="color:#FFFFFF !important;">Get Expert Company Name Change in Gurugram</h2>
            <div class="content-text" style="text-align:left;">
                
                <p style="color:rgba(255,255,255,0.85);">Changing the name of a company in Gurugram requires Section 13 compliance, Special Resolution, RUN name reservation, MGT-14 and INC-24 filing with ROC Haryana at Chandigarh, and comprehensive post-change updates. Whether you are a DLF Cyber City startup rebranding, a Golf Course Road MNC subsidiary aligning with global naming, or any Gurugram company modernising its identity, accurate execution is critical.</p><p style="color:rgba(255,255,255,0.85);">Patron Accounting's Gurugram office on Golf Course Extension Road provides end-to-end company name change services including compliance clearance, name search, RUN application, resolution drafting, MCA filing, Fresh COI obtainment, and post-change coordination.</p><p style="color:rgba(255,255,255,0.85);">With 10,000+ businesses served, a 4.9 Google rating, and 50,000+ documents filed, Patron Accounting LLP is a trusted corporate compliance partner for companies across Gurugram, NCR, and India.</p>

            </div>
            <div style="display:flex;gap:14px;flex-wrap:wrap;margin-top:24px;">
                <a href="tel:+919459456700" style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:var(--orange);color:#fff;border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#128222; Call +91 945 945 6700</a>
                <a href="https://wa.me/919459456700?text=Hello%2C%20I%20just%20visited%20your%20Change%20in%20Name%20of%20Company%20in%20Gurugram%20page.%20I%20would%20like%20to%20know%20more%20about%20it." target="_blank" style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:#25D366;color:#fff;border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;" rel="noopener">&#128172; WhatsApp Us</a>
                <a href="mailto:sales@patronaccounting.com?subject=Company%20Name%20Change%20Gurugram&body=Hello%2C%20I%20just%20visited%20your%20Change%20in%20Name%20of%20Company%20in%20Gurugram%20page.%20I%20would%20like%20to%20know%20more%20about%20it.%0A%0AThank%20you." style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:transparent;color:#fff;border:2px solid rgba(255,255,255,0.3);border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#9993;&#65039; Email Us</a>
            </div>
            <p style="color:rgba(255,255,255,0.7);font-size:13px;margin-top:16px;">Book a Free Consultation - No Obligation.</p>
        </div>
    </div>
</section>

<!-- GSTAT STATE BENCH CITY PAGES (32 Pages) -->
<section class="content-section" style="padding:48px 32px;background:var(--gray-50);">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title" style="text-align:center;margin-bottom:12px;">Change in Name of Company - Available Cities</h2>
            <p style="text-align:center;color:var(--text-muted);font-size:15px;margin-bottom:40px;">Expert company name change services across major Indian cities</p>
        
            <div class="pa-city-block" style="margin-bottom:40px;"><div class="pa-block-title">City-Wise Name Change Services</div><div class="pa-block-sub">Select your city</div><div class="pa-city-grid"><a href="/change-in-name-of-company/pune" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Pune</div><div class="pa-card-sub">Maharashtra</div></div></a><a href="/change-in-name-of-company/mumbai" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Mumbai</div><div class="pa-card-sub">Maharashtra</div></div></a><a href="/change-in-name-of-company/delhi" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Delhi</div><div class="pa-card-sub">Delhi NCR</div></div></a><div class="pa-city-card" style="opacity:0.6; pointer-events:none; border:2px solid var(--orange); position:relative;"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Gurugram</div><div class="pa-card-sub">Haryana</div></div><span style="position:absolute; top:6px; right:8px; font-size:10px; color:var(--orange); font-weight:700; text-transform:uppercase; letter-spacing:0.5px;">You're here</span></div></div></div><div class="pa-city-block"><div class="pa-block-title">Related Services in Gurugram</div><div class="pa-block-sub">End-to-end corporate compliance in Gurugram</div><div class="pa-cross-grid"><a href="/private-limited-company-registration/gurugram" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Company Registration</div><div class="pa-card-sub">Gurugram</div></div></a><a href="/change-in-authorised-capital/gurugram" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Change Authorised Capital</div><div class="pa-card-sub">Gurugram</div></div></a><a href="/private-limited-company-compliance/gurugram" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Annual Compliance</div><div class="pa-card-sub">Gurugram</div></div></a><a href="/trademark-registration/gurugram" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Trademark Registration</div><div class="pa-card-sub">Gurugram</div></div></a><a href="/change-in-object-clause/gurugram" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Change Object Clause</div><div class="pa-card-sub">Gurugram</div></div></a><a href="/accounting-services/gurugram" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Accounting Services</div><div class="pa-card-sub">Gurugram</div></div></a></div></div>
        </div>
    </div>
</section>

<!-- CONTENT FRESHNESS FOOTER -->
<section class="content-section" style="padding:32px;">
    <div class="content-container">
        <div class="text-content" style="font-size:13px;color:var(--text-muted);">
            <p><strong>Content Created:</strong> 03 April 2026 &nbsp;|&nbsp; <strong>Last Updated:</strong> <span id="lastUpdatedFooter">03 April 2026</span> &nbsp;|&nbsp; <strong>Next Review:</strong> 03 July 2026 &nbsp;|&nbsp; <strong>Reviewed By:</strong> CA &amp; CS Team, Patron Accounting LLP</p>
            <p>This page is reviewed quarterly. Section 13 procedure, ROC Haryana jurisdiction, RUN service, and MCA V3 portal updates are verified against the latest MCA notifications.</p>
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
