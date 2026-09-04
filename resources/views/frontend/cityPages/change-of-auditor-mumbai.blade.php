
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
    <title>Change of Auditor in Mumbai – ADT-1, ADT-3 &amp; Rotation</title>
    <meta name="description" content="CA-assisted change of auditor in Mumbai. Resignation ADT-3, removal ADT-2, rotation, casual vacancy, new appointment ADT-1. ROC Everest House. Call +91 945 945 6700.">
    <link rel="canonical" href="/change-of-auditor/mumbai">
    <meta name="robots" content="index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1">
    <meta property="og:title" content="Change of Auditor in Mumbai – ADT-1, ADT-3 &amp; Rotation">
    <meta property="og:description" content="CA-assisted change of auditor in Mumbai. Resignation ADT-3, removal ADT-2, rotation, casual vacancy, new appointment ADT-1. ROC Everest House. Call +91 945 945 6700.">
    <meta property="og:url" content="/change-of-auditor/mumbai">
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="Patron Accounting">
    <meta property="og:image" content="https://www.patronaccounting.com/images/og-default-square.png">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="1200">
    <meta property="og:image:type" content="image/png">
    <meta property="og:image:secure_url" content="https://www.patronaccounting.com/images/og-default-square.png">
    <meta property="og:image:alt" content="Patron Accounting - partner you can rely on">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Change of Auditor in Mumbai – ADT-1, ADT-3 &amp; Rotation">
    <meta name="twitter:description" content="CA-assisted change of auditor in Mumbai. Resignation ADT-3, removal ADT-2, rotation, casual vacancy, new appointment ADT-1. ROC Everest House. Call +91 945 945 6700.">
    <meta name="twitter:image" content="https://www.patronaccounting.com/images/og-default-square.png">
@endsection

@section('schema')
    <script type="application/ld+json">{
  "@context": "https://schema.org",
  "@graph": [
    {
      "@type": "Service",
      "name": "Change of Auditor in Mumbai",
      "description": "CA-assisted change of auditor in Mumbai. Resignation ADT-3, removal ADT-2, rotation, casual vacancy, new appointment ADT-1. ROC Everest House. Call +91 945 945 6700.",
      "url": "https://www.patronaccounting.com/change-of-auditor/mumbai",
      "serviceType": "Change of Auditor in Mumbai",
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
        "url": "https://www.patronaccounting.com/change-of-auditor/mumbai",
        "price": "3000"
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
          "name": "Change of Auditor",
          "item": "https://www.patronaccounting.com/change-of-auditor"
        },
        {
          "@type": "ListItem",
          "position": 3,
          "name": "Change of Auditor in Mumbai",
          "item": "https://www.patronaccounting.com/change-of-auditor/mumbai"
        }
      ]
    },
    {
      "@type": "FAQPage",
      "mainEntity": [
        {
          "@type": "Question",
          "name": "What is the easiest way to change an auditor?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Non-reappointment at AGM (Route 1). Don't reappoint the retiring auditor; appoint a new one by Ordinary Resolution. Requires special notice 14 days before AGM. Outgoing auditor can make representations. ADT-1 for new auditor within 15 days. No RD approval or Special Resolution needed."
          }
        },
        {
          "@type": "Question",
          "name": "What is Form ADT-3?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Statement of reasons for auditor resignation filed by the resigning auditor with ROC and company within 30 days. From 14.07.2025, requires SRN of original ADT-1 linking resignation to appointment. Penalty for non-filing: Rs 50,000 or remuneration (whichever less) plus Rs 500/day continuing."
          }
        },
        {
          "@type": "Question",
          "name": "Can a company remove its auditor before term ends?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Yes under Section 140(1): file ADT-2 with Regional Director for prior approval, give auditor opportunity to be heard, pass Special Resolution (75%) at EGM. RD Western Region is in Mumbai. Process takes 45-90 days. Patron handles ADT-2 filing and RD coordination directly."
          }
        },
        {
          "@type": "Question",
          "name": "What is mandatory auditor rotation?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Section 139(2): listed and prescribed companies (capital >= Rs 10 crore, borrowings >= Rs 50 crore) must rotate. Individual: max 5 years. Firm: max 10 years (2 terms of 5). After max term: 5-year cooling-off. OPCs and small companies exempt. Patron plans rotation 12 months ahead."
          }
        },
        {
          "@type": "Question",
          "name": "What happens if auditor resigns mid-year?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Board appoints replacement within 30 days. Since vacancy is due to resignation, members must approve within 3 months. Replacement holds till next AGM. ADT-1 within 15 days. Outgoing auditor files ADT-3. New auditor verifies opening balances. Patron provides emergency replacement within 7-15 days."
          }
        },
        {
          "@type": "Question",
          "name": "Can the same auditor be reappointed after resignation?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Yes. No restriction on reappointing a resigned auditor. However, for prescribed companies, if resignation is near maximum term, 5-year cooling-off applies from resignation date. Patron advises based on specific facts for Mumbai companies."
          }
        },
        {
          "@type": "Question",
          "name": "What are the 2025 changes to ADT forms?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Amendment Rules 2025 (effective 14.07.2025): ADT-1 includes 'First auditor by Board' as mandatory option. ADT-2 requires proof of notice and hearing opportunity. ADT-3 requires SRN of original ADT-1 for regulatory tracking. Enhanced disclosures across all forms. Patron uses updated forms."
          }
        },
        {
          "@type": "Question",
          "name": "How long does the removal process take?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "45-90 days typically. ADT-2 to RD: 15-30 days for approval. Then EGM with Special Resolution. Then ADT-1 for new auditor (15 days). The resignation route (asking auditor to resign) is often faster and simpler. Patron advises the optimal route for each Mumbai company's situation."
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
                        Change of Auditor in Mumbai: Resignation, Removal, Rotation, and New Appointment Compliance
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
                            <p class="mb-0 text-dark benefit-paragraph"><span>Route 1:</span> Non-Reappointment at AGM &ndash; Ordinary Resolution | Special notice 14 days before AGM | Simplest route</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Route 2:</span> Auditor Resignation &ndash; ADT-3 within 30 days | Board fills within 30 days | Members approve within 3 months</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Route 3:</span> Removal Before Term &ndash; Special Resolution + Regional Director approval (ADT-2) | Section 140(1)</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Route 4:</span> Mandatory Rotation &ndash; Individual: 5 years max | Firm: 10 years max | 5-year cooling-off</p>
                        </div>
                    </div>

                    <p class="mb-4 fw-bold" style="color: var(--blue); font-size: 15px;">Our Mumbai office is adjacent to ROC Everest House &amp; Regional Director (Western Region) &ndash; 10,000+ businesses served</p>

                    <div class="hero-cta">
                        <a href="tel:+919459456700" class="btn-video text-decoration-none">
                            <span class="play-circle"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="width:14px;height:14px;color:#fff"><path d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/></svg></span>
                            Call +91 945 945 6700
                        </a>
                        <a href="mailto:sales@patronaccounting.com" class="btn-sample text-decoration-none">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="width:18px;height:18px;"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,12 2,6"/></svg>
                            Email Us
                        </a>
                        <a href="https://wa.me/919459456700?text=Hello%2C%20I%20just%20visited%20your%20Change%20of%20Auditor%20in%20Mumbai%20page.%20I%20would%20like%20to%20know%20more%20about%20it." target="_blank" class="btn-sample text-decoration-none" rel="noopener">
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
                                            'service'  => 'Change of Auditor',
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
    'ctaText'    => 'Get your auditor changed by a CA &amp; CS team adjacent to both ROC Mumbai and Regional Director (Western Region) office.',
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
            <a href="#who-section" class="toc-btn">When Needed</a>
            <a href="#services-section" class="toc-btn">4 Routes</a>
            <a href="#procedure-section" class="toc-btn">Process</a>
            <a href="#documents-section" class="toc-btn">Documents</a>
            <a href="#challenges-section" class="toc-btn">Challenges</a>
            <a href="#fees-section" class="toc-btn">Fees</a>
            <a href="#timeline-section" class="toc-btn">Timeline</a>
            <a href="#benefits-section" class="toc-btn">Benefits</a>
            <a href="#comparison-section" class="toc-btn">Route Compare</a>
            <a href="#faq-section" class="toc-btn">FAQs</a>
        </div>
        <button class="toc-arrow right" id="tocRight">&#10095;</button>
    </div>
</div>

<!-- SECTION 2: OVERVIEW / INTRO + TL;DR -->
<section class="content-section" id="overview-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Change of Auditor in Mumbai &ndash; Overview</h2>
            <div class="content-text">
                <div class="highlight-box" style="margin-bottom:20px;">
                    <p><strong>&#128204; TL;DR - Change of Auditor Services at a Glance</strong></p>
                    <p>Change of auditor replaces the existing statutory auditor through four routes: (1) Non-reappointment at AGM &ndash; simplest, Ordinary Resolution with special notice; (2) Auditor resignation &ndash; ADT-3 within 30 days, Board fills within 30 days, members approve within 3 months; (3) Removal before term &ndash; Special Resolution + Regional Director approval via ADT-2 (most complex); (4) Mandatory rotation &ndash; prescribed companies, individual 5 years, firm 10 years, 5-year cooling-off. New auditor appointed via ADT-1 within 15 days. The 2025 ADT form amendments (effective 14.07.2025) have enhanced disclosure requirements across all forms.</p>
                </div>
                <p>Mumbai generates the largest volume of auditor changes: Powai startups upgrading from sole practitioner to larger firm, BKC listed companies completing mandatory rotation, Fort family businesses replacing long-standing auditors, and mid-term resignations during peak audit season. Learn more about <a href="/change-of-auditor">Change of Auditor across India</a>.</p>
                <p>Patron Accounting's Mumbai office at Marine Lines &ndash; adjacent to both ROC Everest House and Regional Director (Western Region) office &ndash; provides end-to-end auditor change: route assessment, outgoing auditor exit management (ADT-3/ADT-2), replacement identification, ADT-1 filing, and transition management. For ongoing audit, see <a href="/statutory-audit">Statutory Audit</a>. For company compliance, see <a href="/private-limited-company-compliance">Private Limited Company Compliance</a>.</p>
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
                <h2 class="section-title">What Is Change of Auditor?</h2>
                <div class="content-text what-is-definition">
                    
                    <p>Change of auditor is the legal process of replacing the company's existing statutory auditor with a new one under the Companies Act, 2013. The statutory auditor is appointed for a 5-year term, and changing the auditor requires compliance with specific provisions depending on the reason for the change.</p>
                    <p>The Companies Act protects auditor independence by making removal deliberately rigorous &ndash; a company cannot simply fire its auditor without due process. The four routes have progressively increasing complexity: non-reappointment at AGM (simplest), resignation, formal removal requiring Regional Director approval, and mandatory rotation. For appointment of the new auditor, see <a href="/appointment-of-auditor">Appointment of Auditor</a>.</p>
                    <p>For Mumbai companies, a poorly managed transition can delay financial statement preparation, AOC-4 filing, and annual return compliance. Patron manages the entire transition to prevent any audit gap.</p>

                </div>
                <div class="highlight-box" style="margin-top:20px;">
                    <p><strong>Key Terms for Change of Auditor:</strong></p>
                    <ul>
                        <li><strong>Section 140(1):</strong> Removal before term &ndash; Special Resolution + Regional Director approval via ADT-2</li>
                        <li><strong>Form ADT-3:</strong> Statement of resignation reasons &ndash; filed by auditor within 30 days (requires ADT-1 SRN from 14.07.2025)</li>
                        <li><strong>Form ADT-2:</strong> Application to Regional Director for prior approval of removal</li>
                        <li><strong>Section 140(4):</strong> Special notice &ndash; member proposing new auditor gives 14 days notice before AGM</li>
                        <li><strong>Section 139(8):</strong> Casual vacancy &ndash; Board fills within 30 days, members approve within 3 months if resignation</li>
                        <li><strong>Mandatory Rotation:</strong> Section 139(2) &ndash; individual max 5 years, firm max 10 years, 5-year cooling-off</li>
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
                            <text x="100" y="170" font-size="10" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial, sans-serif">Change of Auditor</text>
                        </svg>
                    </div>
                    <div class="illustration-badge">
                        <span>CA &amp; CS Managed</span>
                        <strong>Auditor Change</strong>
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
            <h2 class="section-title">When Mumbai Companies Change Auditors</h2>
            <div class="content-text">
                
                <p><strong>Growth-driven upgrade at Powai/Andheri startups</strong> &ndash; Audit needs evolve: seed (sole practitioner), Series A (mid-size firm), Series B/C (large firm, IPO readiness). Either wait for term end (non-reappointment) or request resignation. Patron advises on optimal timing and route.</p>
                <p><strong>Mandatory rotation at BKC listed companies</strong> &ndash; Listed and prescribed companies (capital &ge; Rs 10 crore, borrowings &ge; Rs 50 crore). Individual 5 years, firm 10 years. 5-year cooling-off. Patron provides 12-month advance planning.</p>
                <p><strong>Auditor resignation mid-term</strong> &ndash; Common during July-September peak season. Board fills within 30 days, members approve within 3 months. For companies approaching AOC-4 deadline, this is a crisis. Patron provides emergency replacement within 15 days.</p>
                <p><strong>Dissatisfaction with audit quality</strong> &ndash; Late reports, insufficient understanding, lack of expertise. Formal removal (ADT-2 + Special Resolution) or wait for AGM. Patron advises optimal route.</p>
                <p><strong>Post-M&amp;A consolidation</strong> &ndash; Surviving entity consolidates under single audit firm. Acquired company's auditor changed. Common for BKC transactions.</p>
                <p><strong>Auditor disqualification</strong> &ndash; Section 141 disqualification mid-term creates casual vacancy. Patron monitors eligibility and manages replacement.</p>

            </div>
            </div>
        </div>
    </div>
</section>

<!-- SECTION 5: OUR SERVICES -->
<section class="content-section" id="services-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Change of Auditor Services &ndash; By Route</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Service</th><th>What We Do</th></tr></thead>
                    <tbody>
                        <tr><td>Route 1: Non-Reappointment at AGM</td><td>Special notice coordination (14 days before AGM), outgoing auditor representation management, AGM Ordinary Resolution for new auditor, consent + eligibility, ADT-1 within 15 days. Part of AGM compliance cycle</td></tr>
                        <tr><td>Route 2: Resignation (Most Common Mid-Term)</td><td>Outgoing ADT-3 coordination, replacement identification from Mumbai CA network, Board Meeting within 30 days, General Meeting within 3 months, ADT-1, transition management. Emergency replacement within 15 days</td></tr>
                        <tr><td>Route 3: Removal Before Term (Most Complex)</td><td>ADT-2 application to Regional Director (Western Region Mumbai), RD approval coordination, auditor hearing management, EGM with Special Resolution (75%), new auditor appointment, ADT-1. 45-90 days</td></tr>
                        <tr><td>Route 4: Mandatory Rotation</td><td>12-month advance planning, tenure tracking, Audit Committee advisory, new auditor identification matching size/industry, Board + AGM documentation, ADT-1, structured transition with knowledge transfer</td></tr>
                        <tr><td>Emergency Replacement</td><td>Mid-year urgent replacement within 7-15 days from Patron's Mumbai CA network. Board Meeting, ADT-1, immediate audit handover. For companies facing AOC-4 deadline</td></tr>
                        <tr><td>Transition Management</td><td>Outgoing provides working papers and opening balances. New auditor reviews financials, understands policies. Structured handover timeline. No audit gap for Mumbai companies</td></tr>
                        <tr><td>2025 ADT Form Compliance</td><td>Updated ADT-1 (first auditor by Board option), ADT-2 (proof of notice/hearing), ADT-3 (SRN of original ADT-1). All enhanced disclosures per 14.07.2025 amendment</td></tr>
                        <tr><td>Route Assessment Advisory</td><td>Determine optimal route based on timing, circumstances, and urgency. Non-reappointment (simplest) vs resignation (faster mid-term) vs removal (when auditor won't resign)</td></tr>

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
            <h2 class="section-title">Change of Auditor Process (Resignation Route &ndash; Most Common)</h2>
            <p class="section-subtitle" style="text-align:left;max-width:100%;">Patron provides emergency replacement within 7-15 days during peak audit season. Our Marine Lines office is adjacent to both ROC and Regional Director offices.</p>
        </header>
        <div class="steps-container">
            <div class="step-card"><div class="step-content"><span class="step-badge">Step 1</span><h3 class="step-title">Receive Resignation &amp; ADT-3</h3><p class="step-description">Outgoing auditor submits resignation with reasons and effective date. Auditor files ADT-3 with ROC and company within 30 days (from 14.07.2025: requires SRN of original ADT-1). Patron coordinates with outgoing auditor to ensure ADT-3 compliance.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Resignation received</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>ADT-3 tracked</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="15" y="10" width="90" height="65" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><line x1="30" y1="30" x2="90" y2="30" stroke="#F5A623" stroke-width="3" stroke-linecap="round"/><circle cx="85" cy="55" r="10" fill="#E8F5E9" stroke="#10B981" stroke-width="1.2"/><path d="M80 55l3 3 6-6" stroke="#10B981" stroke-width="2" stroke-linecap="round"/></svg></div><span class="illustration-label">Exit Managed</span><span class="step-number-large">01</span></div></div></div><div class="step-card"><div class="step-content"><span class="step-badge">Step 2</span><h3 class="step-title">Identify Replacement &amp; Board Meeting</h3><p class="step-description">Identify replacement CA meeting Section 141 eligibility. Obtain consent and certificate. Convene Board Meeting within 30 days of resignation. Pass Board Resolution appointing new auditor under Section 139(8). Patron recommends from its Mumbai CA network.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Replacement found</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Board approved</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="20" y="8" width="80" height="70" rx="4" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><circle cx="60" cy="35" r="15" fill="#FFF3E0" stroke="#F5A623" stroke-width="1.2"/><path d="M53 35l5 5 10-10" stroke="#10B981" stroke-width="2.5" stroke-linecap="round"/></svg></div><span class="illustration-label">New Auditor</span><span class="step-number-large">02</span></div></div></div><div class="step-card"><div class="step-content"><span class="step-badge">Step 3</span><h3 class="step-title">General Meeting &amp; ADT-1</h3><p class="step-description">Since vacancy is due to resignation, members must approve at General Meeting within 3 months. Pass Ordinary Resolution. File ADT-1 with ROC Mumbai within 15 days. New auditor holds office till next AGM. Patron files ADT-1 within 10 days.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Members approved</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>ADT-1 filed</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="20" y="10" width="80" height="60" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><rect x="35" y="25" width="50" height="8" rx="3" fill="#E8712C" opacity="0.3"/><path d="M80 55l-8 8-5-5" stroke="#10B981" stroke-width="2.5" stroke-linecap="round"/></svg></div><span class="illustration-label">Appointed</span><span class="step-number-large">03</span></div></div></div><div class="step-card"><div class="step-content"><span class="step-badge">Step 4</span><h3 class="step-title">Transition Management</h3><p class="step-description">Coordinate handover: outgoing auditor provides working papers, opening balance verification, pending observations. New auditor reviews previous financials, understands accounting policies. For Mumbai companies approaching AOC-4 deadline, seamless transition is critical. Patron manages the complete transition.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Knowledge transferred</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Audit continuity</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="25" y="10" width="70" height="55" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><circle cx="60" cy="35" r="18" fill="#E8F5E9" stroke="#10B981" stroke-width="1.5"/><path d="M52 35l6 6 12-12" stroke="#10B981" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/></svg></div><span class="illustration-label">Complete</span><span class="step-number-large">04</span></div></div></div>

        </div>
    </div>
</section>

<!-- SECTION 8: DOCUMENTS REQUIRED -->
<section class="content-section" id="documents-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Documents Required for Change of Auditor in Mumbai</h2>
            <div class="content-text">
                
                <ul>
                    <li><strong>Resignation Letter:</strong> Formal letter from outgoing auditor with reasons and effective date</li>
                    <li><strong>Form ADT-3:</strong> Filed by resigning auditor with ROC and company within 30 days (auditor's responsibility)</li>
                    <li><strong>Form ADT-2:</strong> Application to Regional Director for removal approval (removal route only)</li>
                    <li><strong>Board Resolution:</strong> Acknowledging resignation and/or appointing new auditor</li>
                    <li><strong>Special Resolution:</strong> For removal before term (75% at EGM) &ndash; Section 140(1)</li>
                    <li><strong>Special Notice:</strong> 14 days before AGM from member proposing new auditor (non-reappointment route)</li>
                    <li><strong>New Auditor's Consent:</strong> Written willingness to accept appointment</li>
                    <li><strong>Section 141 Eligibility Certificate:</strong> From new auditor confirming no disqualifications</li>
                    <li><strong>Form ADT-1:</strong> Filed within 15 days of new auditor appointment</li>
                </ul>
                <div class="highlight-box" style="margin-top:16px;">
                    <p><strong>Mumbai-Specific Tip:</strong> The Regional Director (Western Region) office for ADT-2 filings is based in Mumbai. Patron files ADT-2 directly with RD Mumbai and follows up. The RD typically processes within 15-30 days if the application is complete and the auditor has been given a hearing opportunity.</p>
                </div>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 9: CHALLENGES -->
<section class="content-section" id="challenges-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Common Challenges in Change of Auditor in Mumbai</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Challenge</th><th>Impact</th><th>How Patron Accounting Solves It</th></tr></thead>
                    <tbody>
                        <tr><td>Mid-Year Resignation During Peak Season</td><td>July-September (audit) and October-November (AGM/filing) resignations create compliance crisis. Finding quality replacements during peak season is challenging</td><td>Mumbai CA network maintained for mid-year replacements. Emergency replacement within 7-15 days. Audit continuity ensured</td></tr>
                        <tr><td>ADT-3 Non-Filing by Outgoing Auditor</td><td>Resigning auditor delays or fails to file ADT-3 (30-day obligation). Creates documentation gap for the company</td><td>Follow-up with outgoing auditor. Board-level documentation to proceed with replacement despite ADT-3 delays</td></tr>
                        <tr><td>Regional Director Approval Delays</td><td>Removal route ADT-2 takes 15-30 days for RD approval. May request additional info or schedule hearing</td><td>ADT-2 filed directly with RD Western Region Mumbai. Hearing process coordinated. Resignation route advised if faster</td></tr>
                        <tr><td>Transition Without Knowledge Transfer</td><td>Outgoing auditor exits without working papers or opening balances. New auditor may qualify the audit report</td><td>Structured handover with documented knowledge transfer before outgoing auditor fully exits</td></tr>
                        <tr><td>Rotation Planning Failure</td><td>BKC listed companies not planning 12 months ahead face last-minute scrambles for qualified replacement firms</td><td>12-month advance rotation planning. New auditor identified at previous year's AGM. Partner allocation and team setup ensured</td></tr>

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
            <h2 class="section-title">Change of Auditor Fees in Mumbai</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Fee Component</th><th>Amount</th></tr></thead>
                    <tbody>
                        <tr><td>Form ADT-1 (New Auditor)</td><td>Rs 200 / Rs 600 &ndash; filed within 15 days of appointment</td></tr>
                        <tr><td>Form ADT-2 (Removal Application to RD)</td><td>Rs 5,000 &ndash; filed with Regional Director Western Region Mumbai</td></tr>
                        <tr><td>Form ADT-3 (Auditor Resignation)</td><td>Rs 200 / Rs 600 &ndash; filed by auditor within 30 days</td></tr>
                        <tr><td>Auditor Penalty (Late ADT-3)</td><td>Rs 50,000 or remuneration (whichever less) + Rs 500/day (max Rs 5 lakh)</td></tr>
                        <tr><td>Patron Fee &ndash; Non-Reappointment at AGM</td><td>Starting Rs 3,000 (special notice + resolution + ADT-1)</td></tr>
                        <tr><td>Patron Fee &ndash; Resignation Route</td><td>Starting Rs 7,000 (replacement + Board + General Meeting + ADT-1 + transition)</td></tr>
                        <tr><td>Patron Fee &ndash; Removal Route (ADT-2)</td><td>Starting Rs 15,000 (ADT-2 + RD coordination + EGM + Special Resolution + ADT-1)</td></tr>
                        <tr><td>Patron Fee &ndash; Rotation (12-Month Plan)</td><td>Starting Rs 10,000 (identification + transition + AGM + ADT-1)</td></tr>
                        <tr><td>Patron Fee &ndash; Emergency Replacement</td><td>Starting Rs 10,000 (urgent mid-year replacement within 15 days + all filings)</td></tr>

                    </tbody>
                </table>
                </div>
                <p style="margin-top:16px;font-size:13px;color:var(--text-muted);font-style:italic;">All fees and charges listed are indicative only and do not constitute a binding offer. Final amounts may vary depending on the volume of work and the complexity involved.</p>
                <p style="margin-top:16px;">Professional service charges for drafting, filing, and representation are separate from the statutory fees. The exact fee depends on the complexity of the case, disputed amount, and number of hearings required. Contact us for a detailed quote.</p>
                <p style="margin-top:16px;"><strong>Get a free Change of Auditor consultation - <a href="tel:+919459456700">Call +91 945 945 6700</a> or <a href="https://wa.me/919459456700?text=Hello%2C%20I%20just%20visited%20your%20Change%20of%20Auditor%20in%20Mumbai%20page.%20I%20would%20like%20to%20know%20more%20about%20it." target="_blank" rel="noopener">WhatsApp us</a>. No-obligation assessment.</strong></p>
            </div>
        </div>
    </div>
</section>

<!-- SECTION 11: TIMELINE -->
<section class="content-section" id="timeline-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Change of Auditor Timeline by Route</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Stage</th><th>Estimated Timeline</th></tr></thead>
                    <tbody>
                        <tr><td>Non-Reappointment at AGM</td><td>Part of AGM cycle | Special notice 14 days before AGM | ADT-1: 15 days after AGM</td></tr>
                        <tr><td>Resignation (Full Process)</td><td>ADT-3: 30 days | Board: 30 days | Members: 3 months | ADT-1: 15 days | Total: 30-105 days</td></tr>
                        <tr><td>Removal (Section 140(1))</td><td>ADT-2 to RD: 15-30 days | EGM + Special Resolution | ADT-1: 15 days | Total: 45-90 days</td></tr>
                        <tr><td>Mandatory Rotation</td><td>12-month advance planning | AGM in rotation year | ADT-1: 15 days | Planned transition</td></tr>
                        <tr><td>Patron (Resignation Route)</td><td>Replacement in 7 days | Board in 15 days | Members in 60 days | ADT-1 within 10 days | Total: 30-75 days</td></tr>
                        <tr><td>Patron (Emergency Replacement)</td><td>Replacement in 7 days | Board in 15 days | ADT-1 filed | Total: 15-30 days</td></tr>

                    </tbody>
                </table>
                </div>
                <div class="highlight-box" style="margin-top:16px;">
                    
                    <p><strong>A company without an auditor cannot complete its statutory audit, sign financial statements, or file AOC-4.</strong> Mid-year resignation during July-November creates cascading compliance failures. Patron's emergency replacement within 7-15 days prevents any audit gap for Mumbai companies. For rotation, 12-month advance planning prevents last-minute scrambles.</p>

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
            <h2 class="section-title">Why Choose Patron for Change of Auditor in Mumbai</h2>
        </div>
        <div class="features-grid">
            <article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><h3 class="feature-title">Adjacent to ROC &amp; Regional Director</h3><p class="feature-text">Marine Lines office adjacent to both ROC Everest House (ADT-1/ADT-3) and Regional Director Western Region (ADT-2). Direct proximity to both approval authorities for all routes.</p></article>
            <article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="2" y="3" width="20" height="14" rx="2"/><path d="M8 21h8M12 17v4"/></svg></div><h3 class="feature-title">Mumbai CA Replacement Network</h3><p class="feature-text">Relationships with CA firms across Mumbai for every tier: sole practitioners for startups, mid-size for growing companies, large firms for pre-IPO, and Big-4 referrals for listed companies.</p></article>
            <article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg></div><h3 class="feature-title">All 4 Routes Managed</h3><p class="feature-text">Non-reappointment (simplest), resignation (most common), removal with RD approval (most complex), and planned rotation. Route assessment ensures Mumbai companies take the optimal path.</p></article>
            <article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M14 2H6a2 2 0 00-2 2v16a2 2 0 002 2h12a2 2 0 002-2V8z"/><path d="M14 2v6h6"/></svg></div><h3 class="feature-title">Emergency Replacement</h3><p class="feature-text">Mid-year replacement within 7-15 days during peak audit season. Board Meeting, ADT-1, and immediate audit handover. For Mumbai companies facing AOC-4 deadlines.</p></article>
        </div>
    </div>
</section>

<!-- SECTION 12A: SOCIAL PROOF -->
<section class="content-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Trusted by Mumbai Companies</h2>
            <div class="content-text">
                
                <p><strong>Trust Signals:</strong> 10,000+ Businesses | 4.9 Google Rating | 50,000+ Documents Filed | 15+ Years</p>
                <blockquote style="border-left:3px solid var(--orange);padding:12px 20px;margin:16px 0;background:var(--orange-lighter);border-radius:0 var(--radius-sm) var(--radius-sm) 0;">
                    <p style="font-style:italic;margin-bottom:8px;">&ldquo;Our auditor resigned in August &ndash; peak season. Patron found a replacement in 10 days, handled the Board Meeting, General Meeting, and ADT-1. Our AOC-4 was filed on time. No other firm could have managed it this fast.&rdquo;</p>
                    <p style="font-size:13px;font-weight:700;color:var(--blue);margin:0;">&mdash; CFO, IT Services Company, BKC</p>
                </blockquote>
                <p>Offices in Pune, Mumbai, Delhi, and Gurugram serving companies with auditor changes, statutory audit, and corporate compliance.</p>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 13: SELF-FILING vs PROFESSIONAL COMPARISON -->
<section class="content-section" id="comparison-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">4 Routes for Changing Auditor &ndash; Comparison</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Parameter</th><th>Non-Reappointment (AGM)</th><th>Resignation</th><th>Removal (S140(1))</th><th>Rotation</th></tr></thead>
                    <tbody>
                        <tr><td>Trigger</td><td>Company decides not to reappoint</td><td>Auditor voluntarily resigns</td><td>Company wants to remove before term</td><td>Max consecutive term reached</td></tr>
                        <tr><td>Resolution</td><td>Ordinary at AGM</td><td>Board + Members within 3 months</td><td>Special Resolution at EGM</td><td>Ordinary at AGM</td></tr>
                        <tr><td>Key Form (Outgoing)</td><td>Special notice 14 days before AGM</td><td>ADT-3 within 30 days</td><td>ADT-2 to Regional Director</td><td>N/A (term expires)</td></tr>
                        <tr><td>RD Approval</td><td>Not required</td><td>Not required</td><td>Mandatory (ADT-2)</td><td>Not required</td></tr>
                        <tr><td>Complexity</td><td>Low</td><td>Medium</td><td>High (45-90 days)</td><td>Medium (planned)</td></tr>
                        <tr><td>Mumbai Example</td><td>Fort company replacing long-standing auditor</td><td>Powai startup auditor resigns mid-year</td><td>BKC company removes underperforming auditor</td><td>BKC listed after 5/10 years</td></tr>

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
                    <li><a href="/change-of-auditor">Change of Auditor (India Overview)</a></li>
                    <li><a href="/appointment-of-auditor">Appointment of Auditor</a></li>
                    <li><a href="/statutory-audit">Statutory Audit</a></li>
                    <li><a href="/private-limited-company-compliance">Private Limited Company Compliance</a></li>
                    <li><a href="/accounting-services">Accounting Services</a></li>
                    <li><a href="/income-tax-return">Income Tax Return Filing</a></li>
                    <li><a href="/roc-notice">ROC Notice</a></li>
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
            <h2 class="section-title">Legal &amp; Compliance Framework for Change of Auditor</h2>
            <div class="content-text">
                
                <ul>
                    <li><strong>Section 139(1):</strong> Appointment of auditor at AGM for 5-year term</li>
                    <li><strong>Section 139(2):</strong> Mandatory rotation &ndash; individual 5 years, firm 10 years, 5-year cooling-off</li>
                    <li><strong>Section 139(8):</strong> Casual vacancy &ndash; Board 30 days, members 3 months (if resignation)</li>
                    <li><strong>Section 140(1):</strong> Removal before term &ndash; Special Resolution + RD approval (ADT-2)</li>
                    <li><strong>Section 140(2):</strong> Auditor resignation &ndash; ADT-3 within 30 days</li>
                    <li><strong>Section 140(4):</strong> Special notice &ndash; 14 days before AGM for non-reappointment</li>
                    <li><strong>Section 141:</strong> Eligibility of new auditor &ndash; practicing CA, no disqualifications</li>
                    <li><strong>Section 147:</strong> Penalties &ndash; company Rs 25,000-5,00,000; officers Rs 10,000-1,00,000</li>
                    <li><strong>Forms:</strong> ADT-1 (new appointment), ADT-2 (removal application to RD), ADT-3 (resignation reasons)</li>
                    <li><strong>2025 Amendment:</strong> Enhanced ADT forms from 14.07.2025 &ndash; ADT-3 requires original ADT-1 SRN</li>
                    <li><strong>ROC Mumbai:</strong> Everest House, 100 Marine Lines, Mumbai 400020</li>
                    <li><strong>RD Western Region:</strong> Mumbai &ndash; handles ADT-2 removal applications</li>
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
                    <h2 class="faq-expanded__title">Frequently Asked Questions &ndash; Change of Auditor in Mumbai</h2>
                    <p class="faq-expanded__lead">Get answers about the 4 routes, ADT-3, removal, rotation, mid-year resignation, reappointment, 2025 amendments, and timelines for Mumbai companies.</p>
                    @include('partials.bigin-form', [
                        'variant'  => 'compact',
                        'service'  => 'Change of Auditor',
                        'city'     => 'Mumbai',
                    ])
                </aside>
                <div class="faq-expanded__list">
                    <div class="faq-expanded__item" id="faq-1">
                        <h3 class="faq-expanded__q">What is the easiest way to change an auditor?</h3>
                        <div class="faq-expanded__a"><p>Non-reappointment at AGM (Route 1). Don't reappoint the retiring auditor; appoint new one by Ordinary Resolution. Requires special notice 14 days before AGM. Outgoing auditor can make representations. ADT-1 within 15 days. No RD approval or Special Resolution needed. Patron manages as part of AGM compliance.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-2">
                        <h3 class="faq-expanded__q">What is Form ADT-3 and who files it?</h3>
                        <div class="faq-expanded__a"><p>Statement of reasons for resignation filed by the resigning auditor with ROC and company within 30 days. From 14.07.2025, requires SRN of original ADT-1. Penalty for non-filing: Rs 50,000 or remuneration (whichever less) + Rs 500/day continuing. Obligation is on the auditor, not the company. Patron coordinates with outgoing auditor.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-3">
                        <h3 class="faq-expanded__q">Can a company remove its auditor before term?</h3>
                        <div class="faq-expanded__a"><p>Yes under Section 140(1): file ADT-2 with Regional Director for prior approval, give auditor opportunity to be heard, pass Special Resolution (75%) at EGM. RD must approve before EGM. Process: 45-90 days. RD Western Region is in Mumbai. Patron handles ADT-2 and RD coordination directly.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-4">
                        <h3 class="faq-expanded__q">What is mandatory auditor rotation?</h3>
                        <div class="faq-expanded__a"><p>Section 139(2): listed and prescribed companies (capital &ge; Rs 10 crore, borrowings &ge; Rs 50 crore) must rotate. Individual: max 5 years. Firm: max 10 years. After max term: 5-year cooling-off. OPCs and small companies exempt. Patron plans rotation 12 months in advance for Mumbai prescribed companies.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-5">
                        <h3 class="faq-expanded__q">What happens if auditor resigns mid-year?</h3>
                        <div class="faq-expanded__a"><p>Board appoints replacement within 30 days. Members approve within 3 months (since resignation). ADT-1 within 15 days. New auditor verifies opening balances. If near AOC-4 deadline, filing may be delayed. Patron provides emergency replacement within 7-15 days to minimise the audit gap for Mumbai companies.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-6">
                        <h3 class="faq-expanded__q">Can the same auditor be reappointed after resignation?</h3>
                        <div class="faq-expanded__a"><p>Yes. No restriction in the Companies Act. However, for prescribed companies near max term, 5-year cooling-off applies from resignation date. Patron advises based on specific facts and rotation requirements for each Mumbai company.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-7">
                        <h3 class="faq-expanded__q">What are the 2025 changes to ADT forms?</h3>
                        <div class="faq-expanded__a"><p>Amendment Rules 2025 (effective 14.07.2025): ADT-1 includes 'First auditor by Board' option. ADT-2 requires proof of notice and hearing opportunity. ADT-3 requires SRN of original ADT-1 for regulatory tracking. Enhanced disclosures across all forms. Patron uses the updated forms for all Mumbai filings.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-8">
                        <h3 class="faq-expanded__q">How long does the removal process take?</h3>
                        <div class="faq-expanded__a"><p>45-90 days. ADT-2 to RD: 15-30 days for approval. Then EGM with Special Resolution. Then ADT-1 (15 days). The resignation route (asking auditor to resign) is often faster and simpler. Patron advises the optimal route based on each Mumbai company's timing and circumstances.</p></div>
                    </div>
                </div>
            </div>


            <!-- Quick Answers -->
            <div class="highlight-box" style="margin-top:32px;">
                <p><strong>Quick Answers</strong></p>
                <p><strong>Auditor badalna hai toh kya kare?</strong> 4 raaste hain: (1) AGM pe naya appoint karo (sabse aasan). (2) Current auditor se resign karwao + replacement appoint karo (ADT-3 + Board 30 din + Members 3 mahine). (3) Formally remove karo (Special Resolution + Regional Director approval ADT-2). (4) Rotation (listed companies 5/10 saal). Patron sabse suitable route recommend karega.</p>
                <p><strong>Auditor resign kar gaya toh kitne din mein naya?</strong> Board ko 30 din mein casual vacancy fill karni padti hai. Members ko 3 mahine mein approve karna padta hai. ADT-1 15 din mein. Patron 15 din mein replacement dhundh ke appoint karwa deta hai.</p>
                <p><strong>Kya auditor ko forcefully remove kar sakte hain?</strong> Haan, lekin strict process: Regional Director se approval (ADT-2), auditor ko sune jaane ka mauka, Special Resolution (75%). 45-90 din lagta hai. Patron RD coordination handle karta hai.</p>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 18: URGENCY CTA -->
<section class="content-section" style="background: var(--orange-lighter) !important; border-left: 4px solid var(--orange);">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Don't Let an Audit Gap Delay Your Compliance &ndash; Change Auditor the Right Way</h2>
            <div class="content-text">
                
                <p>A company without an auditor cannot complete its statutory audit, sign financial statements, file AOC-4, or hold AGM with audited accounts. Mid-year resignation during peak season creates cascading compliance failures. The 30-day Board deadline for casual vacancy is strict. For rotation, 12-month advance planning prevents last-minute scrambles.</p>
                <p><strong>Change your auditor today &ndash; <a href="tel:+919459456700">Call +91 945 945 6700</a> or <a href="https://wa.me/919459456700?text=Hello%2C%20I%20just%20visited%20your%20Change%20of%20Auditor%20in%20Mumbai%20page.%20I%20would%20like%20to%20know%20more%20about%20it." target="_blank" rel="noopener">WhatsApp us</a>.</strong></p>

            </div>
        </div>
    </div>
</section>

<!-- CONCLUSION + CTA BLOCK (Dark) -->
<section class="content-section" style="background: var(--blue) !important;">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title" style="color:#FFFFFF !important;">Get End-to-End Auditor Change in Mumbai</h2>
            <div class="content-text" style="text-align:left;">
                
                <p style="color:rgba(255,255,255,0.85);font-size:16px;line-height:1.7;">Change of auditor in Mumbai covers four routes &ndash; from non-reappointment at AGM to mid-term resignation, from formal removal with Regional Director approval to planned mandatory rotation. Each requires specific forms (ADT-1, ADT-2, ADT-3) and regulatory coordination.</p>
                <p style="color:rgba(255,255,255,0.85);font-size:16px;line-height:1.7;">Patron Accounting's Mumbai office at Marine Lines &ndash; adjacent to both ROC Everest House and Regional Director (Western Region) &ndash; provides end-to-end services: route assessment, outgoing auditor exit management, replacement identification, ADT filing, structured transition, and 12-month rotation planning.</p>
                <p style="color:rgba(255,255,255,0.85);font-size:16px;line-height:1.7;">With offices in Pune, Mumbai, Delhi, and Gurugram, 10,000+ businesses served, and 4.9 Google rating, Patron Accounting LLP ensures uninterrupted audit compliance across India.</p>

            </div>
            <div style="display:flex;gap:14px;flex-wrap:wrap;margin-top:24px;">
                <a href="tel:+919459456700" style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:var(--orange);color:#fff;border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#128222; Call +91 945 945 6700</a>
                <a href="https://wa.me/919459456700?text=Hello%2C%20I%20just%20visited%20your%20Change%20of%20Auditor%20in%20Mumbai%20page.%20I%20would%20like%20to%20know%20more%20about%20it." target="_blank" style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:#25D366;color:#fff;border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;" rel="noopener">&#128172; WhatsApp Us</a>
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
            <h2 class="section-title" style="text-align:center;margin-bottom:12px;">Change of Auditor Across India</h2>
            <p style="text-align:center;color:var(--text-muted);font-size:15px;margin-bottom:40px;">Patron Accounting handles auditor changes in major cities with replacement network and ROC/RD coordination expertise.</p>
          
            <div class="pa-city-block" style="margin-bottom:40px;">
                        <div class="pa-block-title">Change of Auditor in Other Cities</div>
                        <div class="pa-block-sub">Professional auditor change compliance across India</div>
                        <div class="pa-city-grid">
                            <a href="/change-of-auditor/pune" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Pune</div><div class="pa-card-sub">Maharashtra</div></div></a>
                            <div class="pa-city-card" style="opacity:0.6; pointer-events:none; border:2px solid var(--orange); position:relative;"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Mumbai</div><div class="pa-card-sub">Maharashtra</div></div><span style="position:absolute; top:6px; right:8px; font-size:10px; color:var(--orange); font-weight:700; text-transform:uppercase; letter-spacing:0.5px;">You're here</span></div>
                            <a href="/change-of-auditor/delhi" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Delhi</div><div class="pa-card-sub">Delhi NCR</div></div></a>
                            <a href="/change-of-auditor/gurugram" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Gurugram</div><div class="pa-card-sub">Haryana</div></div></a>
                        </div>
                    </div>
                    <div class="pa-city-block">
                        <div class="pa-block-title">Related Services in Mumbai</div>
                        <div class="pa-block-sub">End-to-end corporate and audit compliance</div>
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
            <p>This content is reviewed quarterly for accuracy of 2025 ADT form amendments, MCA circulars, and audit rules updates. Freshness Tier: 1.</p>
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
