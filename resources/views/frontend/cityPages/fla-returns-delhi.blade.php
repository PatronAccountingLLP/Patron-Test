
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
    <title>FLA Return Filing with RBI Delhi NCR – July 15 Deadline</title>
    <meta name="description" content="FLA return filing in Delhi. Annual RBI filing by 15 July. FLAIR portal. FEMA compliance for FDI/ODI companies. Patron Accounting +91 945 945 6700.">
    <link rel="canonical" href="/fla-returns/delhi">
    <meta name="robots" content="index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1">
    <meta property="og:title" content="FLA Return Filing with RBI Delhi NCR – July 15 Deadline">
    <meta property="og:description" content="FLA return filing in Delhi. Annual RBI filing by 15 July. FLAIR portal. FEMA compliance for FDI/ODI companies. Patron Accounting +91 945 945 6700.">
    <meta property="og:url" content="/fla-returns/delhi">
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="Patron Accounting">
    <meta property="og:image" content="https://www.patronaccounting.com/images/og-default-square.png">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="1200">
    <meta property="og:image:type" content="image/png">
    <meta property="og:image:secure_url" content="https://www.patronaccounting.com/images/og-default-square.png">
    <meta property="og:image:alt" content="Patron Accounting - partner you can rely on">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="FLA Return Filing with RBI Delhi NCR – July 15 Deadline">
    <meta name="twitter:description" content="FLA return filing in Delhi. Annual RBI filing by 15 July. FLAIR portal. FEMA compliance for FDI/ODI companies. Patron Accounting +91 945 945 6700.">
    <meta name="twitter:image" content="https://www.patronaccounting.com/images/og-default-square.png">
@endsection

@section('schema')
    <script type="application/ld+json">{
  "@context": "https://schema.org",
  "@graph": [
    {
      "@type": "Service",
      "name": "FLA Return Filing Services in Delhi",
      "description": "FLA return filing in Delhi. Annual RBI filing by 15 July. FLAIR portal. FEMA compliance for FDI/ODI companies. Patron Accounting +91 945 945 6700.",
      "url": "https://www.patronaccounting.com/fla-returns/delhi",
      "serviceType": "FLA Return Filing Services in Delhi",
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
        "url": "https://www.patronaccounting.com/fla-returns/delhi",
        "price": "9999"
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
          "name": "Compliance Services",
          "item": "https://www.patronaccounting.com/fla-returns"
        },
        {
          "@type": "ListItem",
          "position": 3,
          "name": "FLA Returns in Delhi",
          "item": "https://www.patronaccounting.com/fla-returns/delhi"
        }
      ]
    },
    {
      "@type": "FAQPage",
      "mainEntity": [
        {
          "@type": "Question",
          "name": "What is the FLA return and who must file it in Delhi?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "The FLA return is an annual RBI filing under FEMA 1999 reporting foreign liabilities and assets as on 31 March. Any Delhi company, LLP, AIF, or partnership with outstanding FDI or ODI must file - including MNC subsidiaries, VC-backed startups, IT companies with foreign subsidiaries, and AIFs with foreign LPs."
          }
        },
        {
          "@type": "Question",
          "name": "What is the due date for FLA return filing?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "15 July each year. RBI may extend (extended to 31 July in 2025). If audited accounts unavailable, file provisional by 15 July and revised by 30 September. Patron monitors RBI circulars for extensions."
          }
        },
        {
          "@type": "Question",
          "name": "What is the penalty for not filing FLA return?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "FEMA Section 13: up to 300% of contravention. Rs 2,00,000 if unquantifiable. Rs 5,000/day continuing default. Rs 7,500 Late Submission Fee. Persistent non-compliance restricts future capital account transactions."
          }
        },
        {
          "@type": "Question",
          "name": "Do I need to file FLA if no new FDI this year?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Yes. The obligation is triggered by outstanding foreign liabilities/assets on 31 March - not by new transactions. If any foreign shareholding remains, filing is mandatory every year until fully repatriated."
          }
        },
        {
          "@type": "Question",
          "name": "Can I file with unaudited accounts?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Yes. File provisional return with unaudited figures by 15 July to meet the deadline. Revise with audited figures by 30 September. Filing provisional on time is always safer than missing the deadline."
          }
        },
        {
          "@type": "Question",
          "name": "What is the FLAIR portal?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "FLAIR (Foreign Liabilities and Assets Information Reporting) is RBI's online portal at flair.rbi.org.in. All FLA filings must be completed online. Requires entity registration with CIN, authorised person details, Authority Letter, and Verification Letter."
          }
        },
        {
          "@type": "Question",
          "name": "What are the 5 sections of the FLA form?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Section I: Entity identification. Section II: Ownership and capital (non-resident shareholding). Section III: Foreign liabilities (FDI, ECBs, trade credits). Section IV: Foreign assets (ODI, loans, guarantees). Section V: Variation report (year-on-year changes)."
          }
        },
        {
          "@type": "Question",
          "name": "How much does FLA filing cost in Delhi?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "No government fee on FLAIR portal. Patron's service starts from Rs 9,999 per return covering registration, balance sheet mapping, form preparation, filing, revision, and RBI query resolution."
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
                        FLA Returns in Delhi: Annual RBI Filing for FDI and ODI Companies
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
                            <p class="mb-0 text-dark benefit-paragraph"><span>What:</span> Annual Return on Foreign Liabilities and Assets filed with RBI</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Who:</span> Indian companies, LLPs, AIFs with FDI received or ODI made</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Deadline:</span> 15 July each year (RBI may extend) | Revised return by 30 September</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Portal:</span> FLAIR (flair.rbi.org.in) | Penalty: up to 300% under FEMA S.13</p>
                        </div>
                    </div>

                    <p class="mb-4 fw-bold" style="color: var(--blue); font-size: 15px;">10,000+ Businesses Served | 4.9 Google Rating | FEMA compliance for Delhi FDI companies</p>

                    <div class="hero-cta">
                        <a href="tel:+919459456700" class="btn-video text-decoration-none">
                            <span class="play-circle"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="width:14px;height:14px;color:#fff"><path d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/></svg></span>
                            Call +91 945 945 6700
                        </a>
                        <a href="mailto:sales@patronaccounting.com?subject=FLA%20Returns%20Delhi&body=Hello%2C%20I%20just%20visited%20your%20Fla%20Returns%20in%20Delhi%20page.%20I%20would%20like%20to%20know%20more%20about%20it.%0A%0AThank%20you." class="btn-sample text-decoration-none">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="width:18px;height:18px;"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,12 2,6"/></svg>
                            Email Us
                        </a>
                        <a href="https://wa.me/919459456700?text=Hello%2C%20I%20just%20visited%20your%20Fla%20Returns%20in%20Delhi%20page.%20I%20would%20like%20to%20know%20more%20about%20it." target="_blank" class="btn-sample text-decoration-none" rel="noopener">
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
                                            'service'  => 'FLA Returns in Delhi',
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
    'ctaText'    => 'Expert FLA return filing and FEMA compliance for Delhi companies.',
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
            <a href="#overview-section" class="toc-btn active">Overview</a><a href="#what-section" class="toc-btn">What Is FLA</a><a href="#who-section" class="toc-btn">Who Files</a><a href="#services-section" class="toc-btn">Services</a><a href="#procedure-section" class="toc-btn">Filing Process</a><a href="#documents-section" class="toc-btn">Documents</a><a href="#challenges-section" class="toc-btn">Challenges</a><a href="#fees-section" class="toc-btn">Fees</a><a href="#timeline-section" class="toc-btn">Timeline</a><a href="#benefits-section" class="toc-btn">Why Patron</a><a href="#comparison-section" class="toc-btn">FLA vs Others</a><a href="#faq-section" class="toc-btn">FAQs</a>
        </div>
        <button class="toc-arrow right" id="tocRight">&#10095;</button>
    </div>
</div>

<!-- SECTION 2: OVERVIEW / INTRO + TL;DR -->
<section class="content-section" id="overview-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">FLA Returns in Delhi: FEMA Compliance for Foreign Investment</h2>
            <div class="content-text">
                <div class="highlight-box" style="margin-bottom:20px;">
                    <p><strong>&#128204; TL;DR - FLA Returns in Delhi Services at a Glance</strong></p>
                    <p>The FLA Return is a mandatory annual filing with RBI under FEMA 1999 for all Indian entities with outstanding foreign liabilities or assets as of 31 March. Filed on the FLAIR portal by 15 July (RBI may extend). If audited accounts unavailable, file provisional by 15 July and revised by 30 September. Non-filing attracts penalties up to 300% of contravention, Rs 7,500 Late Submission Fee, and Rs 5,000/day continuing default. Patron files FLA returns for Delhi companies from our Rohini office.</p>
                </div>
                <p>Delhi is India's largest FDI destination. MNC headquarters in Connaught Place and Aerocity, VC-backed startups across South Delhi, SEBI-registered AIFs, and companies with overseas subsidiaries all face the 15 July FLA deadline. Learn more about <a href="/fla-returns">FLA Returns across India</a>.</p>
                <p>Patron provides complete FLA filing: FLAIR registration, balance sheet mapping, 5-section form preparation, provisional filing by 15 July, revised filing by 30 September, and RBI query resolution. Integrated with FC-GPR, FC-TRS, ODI, and ECB for complete FEMA coverage. Delhi companies may also need <a href="/private-limited-company-registration">Company Registration</a> and <a href="/accounting-services">Accounting Services</a>.</p>
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
                <h2 class="section-title">What Is FLA Return: Annual Foreign Investment Reporting to RBI</h2>
                <div class="content-text what-is-definition">
                    
                    <p>The FLA Return is a mandatory annual report filed with RBI that captures the foreign investment position of an Indian entity as of 31 March. It reports foreign liabilities (inward FDI, ECBs, trade credits) and foreign assets (outward direct investments, loans, guarantees). It is position-based, not event-based like FC-GPR or FC-TRS.</p>
<p>The filing obligation is triggered by outstanding foreign liabilities or assets - not by new transactions. A Delhi company that received FDI in 2018 must still file every year until foreign shareholding is fully repatriated. Filed on the <a href="https://flair.rbi.org.in" target="_blank" rel="noopener">FLAIR portal</a>.</p>
<p>For Delhi companies - whether an MNC subsidiary, a VC-backed startup, an IT company with a US subsidiary, or an AIF with foreign LPs - FLA is critical FEMA compliance that impacts future foreign exchange transactions. Non-filing triggers regulatory scrutiny and potential restrictions on capital account transactions.</p>

                </div>
                <div class="highlight-box" style="margin-top:20px;">
                    <p><strong>Key Terms for FLA Returns in Delhi:</strong></p>
                    <ul><li><strong>FLAIR:</strong> Foreign Liabilities and Assets Information Reporting portal at flair.rbi.org.in for online FLA filing.</li><li><strong>Foreign Liabilities:</strong> FDI equity from non-residents, ECBs, trade credits from foreign entities on balance sheet.</li><li><strong>Foreign Assets:</strong> ODI equity, loans to overseas entities, guarantees extended to foreign entities.</li><li><strong>FEMA Section 13:</strong> Penalty up to 300% of contravention amount. Rs 2,00,000 if unquantifiable. Rs 5,000/day continuing default.</li><li><strong>Late Submission Fee:</strong> Rs 7,500 flat per return (RBI September 2022 circular).</li></ul>

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
                            <text x="100" y="170" font-size="10" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial, sans-serif">FLA Returns in Delhi</text>
                        </svg>
                    </div>
                    <div class="illustration-badge">
                        <span>FEMA 1999</span>
                        <strong>FLA Return</strong>
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
            <h2 class="section-title">Who Must File FLA Returns in Delhi</h2>
            <div class="content-text">
                
                <p><strong>Delhi companies with FDI</strong> - Any company with foreign shareholders retaining shareholding as on 31 March. Includes MNC subsidiaries, VC-funded startups, and NRI-invested entities.</p>
<p><strong>Delhi LLPs with foreign capital</strong> - LLPs with non-resident capital contribution or profit share. RBI issues dummy CIN for FLAIR registration.</p>
<p><strong>Delhi companies with ODI</strong> - Companies with overseas subsidiaries, loans to foreign entities, or guarantees. IT companies and manufacturing groups particularly covered.</p>
<p><strong>Delhi-based AIFs</strong> - SEBI-registered Alternative Investment Funds with foreign limited partners. Delhi's growing fund ecosystem generates significant FLA obligations.</p>
<p><strong>Delhi startups with foreign VC/angel investment</strong> - Any startup with equity from foreign investors. Delhi NCR is heavily funded by Singapore, US, and UAE investors. <a href="/startup-registration/delhi">Startup Registration</a> complements FLA compliance.</p>

            </div>
            </div>
        </div>
    </div>
</section>

<!-- SECTION 5: OUR SERVICES -->
<section class="content-section" id="services-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">FLA Return Filing Services: What Patron Handles for Delhi Companies</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Service</th><th>What We Do</th></tr></thead>
                    <tbody>
                        <tr><td>FLAIR Portal Registration</td><td>First-time registration with entity details, authorised person, signed Authority Letter and Verification Letter. Handle approval process.</td></tr><tr><td>Balance Sheet-to-FLA Data Mapping</td><td>CA-led mapping of balance sheet items to 5 FLA sections. Separate foreign from domestic components accurately.</td></tr><tr><td>5-Section Form Preparation</td><td>Section I: Identification. Section II: Ownership/capital. Section III: Foreign liabilities. Section IV: Foreign assets. Section V: Variation report.</td></tr><tr><td>Provisional Filing by 15 July</td><td>File with unaudited figures to meet deadline if audit pending. Always safer than missing the date.</td></tr><tr><td>Revised Filing by 30 September</td><td>Update with audited figures post-audit. No separate RBI approval required for revision.</td></tr><tr><td>RBI Query Resolution</td><td>Resolve data inconsistencies, validation errors, and clarification requests with FEMA-compliant responses.</td></tr><tr><td>Integrated FEMA Compliance</td><td>FLA coordinated with FC-GPR, FC-TRS, ODI filings, ECB reporting, and annual RBI compliances for complete coverage.</td></tr>

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
            <h2 class="section-title">FLA Filing Process: 6 Steps for Delhi Companies</h2>
            <p class="section-subtitle" style="text-align:left;max-width:100%;">FLA filing is entirely online via the FLAIR portal. No physical visit to RBI Regional Office is required. Delhi companies should monitor RBI circulars in June-July for deadline extensions.</p>
        </header>
        <div class="steps-container">
            <div class="step-card"><div class="step-content"><span class="step-badge">Step 1</span><h3 class="step-title">Check FLA Filing Obligation</h3><p class="step-description">Verify if Delhi company has outstanding foreign liabilities (FDI, ECBs, trade credits) or foreign assets (ODI, loans) as on 31 March. If yes, filing is mandatory even with no new transactions. Patron conducts annual checks in April-May.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Balance Sheet Checked</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> FDI/ODI Verified</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="20" y="15" width="80" height="55" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><circle cx="60" cy="38" r="15" fill="#FFF3E0" stroke="#F5A623" stroke-width="1.2"/><text x="60" y="42" font-size="7" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">FDI/ODI</text></svg></div><span class="illustration-label">Obligation Confirmed</span><span class="step-number-large">01</span></div></div></div>
<div class="step-card"><div class="step-content"><span class="step-badge">Step 2</span><h3 class="step-title">Register on FLAIR Portal (First-Time)</h3><p class="step-description">Visit flair.rbi.org.in. Enter CIN/LLPIN, PAN, registered address, authorised person details. Upload Authority Letter and Verification Letter. Allow 2-4 weeks for approval. LLPs need dummy CIN from RBI.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Entity Details</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Authority Letter</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="25" y="15" width="70" height="55" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><path d="M60 28v18M50 36l10-10 10 10" stroke="#F5A623" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"/></svg></div><span class="illustration-label">Portal Registered</span><span class="step-number-large">02</span></div></div></div>
<div class="step-card"><div class="step-content"><span class="step-badge">Step 3</span><h3 class="step-title">Map Balance Sheet Data to FLA Sections</h3><p class="step-description">Extract foreign liabilities/assets from financial statements. Convert to USD using RBI reference rate. Map to 5 FLA sections. Requires FEMA expertise for correct categorisation. Patron's CA team handles this.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Foreign Separated</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> USD Converted</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="15" y="10" width="40" height="55" rx="4" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><rect x="62" y="10" width="40" height="55" rx="4" fill="#FFF3E0" stroke="#F5A623" stroke-width="1"/><path d="M55 35l7 0" stroke="#F5A623" stroke-width="2" stroke-linecap="round"/><path d="M52 35l-6 0" stroke="#14365F" stroke-width="2" stroke-linecap="round"/></svg></div><span class="illustration-label">Data Mapped</span><span class="step-number-large">03</span></div></div></div>
<div class="step-card"><div class="step-content"><span class="step-badge">Step 4</span><h3 class="step-title">Complete and Submit FLA on FLAIR</h3><p class="step-description">Log in, select FLA Online Form, complete Sections II-V with mapped data. Portal runs auto-validation. Resolve errors before submission. Patron handles complete process and resolves validation errors.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Validation Passed</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> First-Attempt Accept</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><circle cx="60" cy="40" r="25" fill="#E8F5E9" stroke="#25D366" stroke-width="1.5"/><path d="M48 40l8 8 16-16" stroke="#25D366" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"/></svg></div><span class="illustration-label">FLA Submitted</span><span class="step-number-large">04</span></div></div></div>
<div class="step-card"><div class="step-content"><span class="step-badge">Step 5</span><h3 class="step-title">Receive RBI Acknowledgment</h3><p class="step-description">RBI sends acknowledgment to authorised person's email. Download and archive as proof of timely filing. If rejected, portal shows specific errors for correction.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Email Received</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Proof Archived</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="25" y="15" width="70" height="50" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><circle cx="60" cy="35" r="12" fill="#E8F5E9" stroke="#25D366" stroke-width="1.5"/><path d="M54 35l4 4 8-8" stroke="#25D366" stroke-width="2" stroke-linecap="round"/></svg></div><span class="illustration-label">Acknowledged</span><span class="step-number-large">05</span></div></div></div>
<div class="step-card"><div class="step-content"><span class="step-badge">Step 6</span><h3 class="step-title">File Revised Return by 30 September</h3><p class="step-description">If provisional filing was made, update with audited figures and resubmit by 30 September. No separate RBI approval needed. Patron manages revision post-audit.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Audited Figures</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Final Submission</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="25" y="10" width="70" height="55" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><circle cx="60" cy="32" r="14" fill="#E8F5E9" stroke="#25D366" stroke-width="1.5"/><path d="M53 32l5 5 9-9" stroke="#25D366" stroke-width="2.5" stroke-linecap="round"/><rect x="40" y="55" width="40" height="6" rx="3" fill="#F5A623" opacity="0.4"/></svg></div><span class="illustration-label">Revised Filed</span><span class="step-number-large">06</span></div></div></div>


        </div>
    </div>
</section>

<!-- SECTION 8: DOCUMENTS REQUIRED -->
<section class="content-section" id="documents-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Documents Required for FLA Return Filing</h2>
            <div class="content-text">
                
                <ul><li><strong>Audited or Provisional Financial Statements</strong> - Balance sheet and P&L for the year ending 31 March.</li><li><strong>Share Register / Shareholding Pattern</strong> - Showing non-resident shareholding as on 31 March.</li><li><strong>Authority Letter</strong> - Signed letter authorising the individual filing (CS, CFO, or Director).</li><li><strong>Verification Letter</strong> - In RBI prescribed format from FLAIR portal.</li><li><strong>RBI Reference Exchange Rate</strong> - As on 31 March for USD conversion.</li><li><strong>Previous Year's FLA Return</strong> - For variation reporting continuity.</li><li><strong>ODI/ECB Details</strong> - Outstanding overseas investments and external borrowings.</li></ul><div class="highlight-box"><p><strong>Delhi-Specific Tip:</strong> Delhi startups with multiple funding rounds from foreign investors should maintain a consolidated foreign investment tracker showing each investor, investment date, amount, and current shareholding. This makes annual FLA mapping significantly faster. Patron maintains this tracker for Delhi clients.</p></div>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 9: CHALLENGES -->
<section class="content-section" id="challenges-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Common FLA Filing Challenges in Delhi</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Challenge</th><th>Impact</th><th>How Patron Accounting Solves It</th></tr></thead>
                    <tbody>
                        <tr><td>Balance Sheet-to-FLA Mapping Errors</td><td>Direct transfer of balance sheet figures without separating foreign and domestic components.</td><td>CA-led mapping with FEMA expertise for correct categorisation.</td></tr><tr><td>FLAIR Portal Validation Errors</td><td>Auto-validation rejects inconsistencies: shareholding mismatch, assets/liabilities imbalance, variation errors.</td><td>Pre-resolve all validation errors before submission. First-attempt acceptance.</td></tr><tr><td>Missing 15 July Deadline</td><td>Waiting for audited accounts. Provisional filing permitted and recommended.</td><td>File provisional by 15 July, revise by 30 September post-audit.</td></tr><tr><td>Dormant FDI Not Reported</td><td>Historical FDI fully diluted but residual shares remain on balance sheet.</td><td>Check share registers for any residual foreign holdings.</td></tr><tr><td>First-Time FLAIR Registration Delays</td><td>LLPs need dummy CIN. Email mismatches with RBI records cause delays.</td><td>Initiate registration in May for comfortable buffer before July.</td></tr>

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
                        <tr><td>FLAIR Portal Registration</td><td>Nil (no government fee)</td></tr><tr><td>FLA Return Filing</td><td>Nil (no government fee)</td></tr><tr><td>Revised Return Filing</td><td>Nil (no government fee)</td></tr><tr><td>Late Submission Fee (if late)</td><td>Rs 7,500 per return</td></tr><tr><td>Patron Accounting Professional Fees</td><td>INR 9,999 per return (Exl GST)</td></tr>

                    </tbody>
                </table>
                </div>
                <p style="margin-top:16px;font-size:13px;color:var(--text-muted);font-style:italic;">All fees and charges listed are indicative only and do not constitute a binding offer. Final amounts may vary depending on the volume of work and the complexity involved.</p>
                <p style="margin-top:16px;">Professional service charges for drafting, filing, and representation are separate from the statutory fees. The exact fee depends on the complexity of the case, disputed amount, and number of hearings required. Contact us for a detailed quote.</p>
                <p style="margin-top:16px;"><strong>Get a free FLA Returns in Delhi consultation - <a href="tel:+919459456700">Call +91 945 945 6700</a> or <a href="https://wa.me/919459456700?text=Hello%2C%20I%20just%20visited%20your%20Fla%20Returns%20in%20Delhi%20page.%20I%20would%20like%20to%20know%20more%20about%20it." target="_blank" rel="noopener">WhatsApp us</a>. No-obligation assessment.</strong></p>
            </div>
        </div>
    </div>
</section>

<!-- SECTION 11: TIMELINE -->
<section class="content-section" id="timeline-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">FLA Return Timeline</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Stage</th><th>Estimated Timeline</th></tr></thead>
                    <tbody>
                        <tr><td>Financial Year End</td><td>31 March (reporting date)</td></tr><tr><td>Obligation Check</td><td>April-May</td></tr><tr><td>FLAIR Registration (First-Time)</td><td>May-June (allow 2-4 weeks)</td></tr><tr><td>Data Mapping + Form Preparation</td><td>June</td></tr><tr><td>Filing (Audited or Provisional)</td><td>15 July (RBI may extend)</td></tr><tr><td>Revised Return (If Provisional)</td><td>30 September</td></tr>

                    </tbody>
                </table>
                </div>
                <div class="highlight-box" style="margin-top:16px;">
                    
                    <p><strong>Critical:</strong> 15 July is a hard FEMA date. Non-filing is a foreign exchange violation - not just a procedural delay. File provisional if audit is pending. Patron monitors RBI circulars for extensions and files well before deadlines.</p>

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
            <h2 class="section-title">Why Choose Patron for FLA Returns in Delhi</h2>
        </div>
        <div class="features-grid"><article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M9 7h6m0 10v-3m-3 3h.01M9 17h.01M9 14h.01M12 14h.01M15 11h.01M12 11h.01M9 11h.01M7 21h10a2 2 0 002-2V5a2 2 0 00-2-2H7a2 2 0 00-2 2v14a2 2 0 002 2z"/></svg></div><h3 class="feature-title">CA-Led Balance Sheet Mapping</h3><p class="feature-text">The biggest FLA challenge solved with FEMA expertise, not just accounting knowledge. Eliminates validation errors and RBI queries.</p></article><article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/></svg></div><h3 class="feature-title">First-Attempt Portal Acceptance</h3><p class="feature-text">Validation errors resolved before submission. Delhi companies avoid back-and-forth that delays filing past the deadline.</p></article><article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M14 2H6a2 2 0 00-2 2v16a2 2 0 002 2h12a2 2 0 002-2V8z"/><path d="M14 2v6h6M16 13H8M16 17H8"/></svg></div><h3 class="feature-title">Integrated FEMA Compliance</h3><p class="feature-text">FLA coordinated with FC-GPR, FC-TRS, ODI, ECB, and all annual RBI compliances. One firm, complete FEMA coverage for Delhi companies.</p></article><article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><h3 class="feature-title">Delhi FDI Ecosystem Expertise</h3><p class="feature-text">From MNC subsidiaries to VC-backed startups to AIFs. Patron understands Delhi's full spectrum of foreign investment structures and their FLA implications.</p></article></div>
    </div>
</section>

<!-- SECTION 12A: SOCIAL PROOF -->
<section class="content-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Trusted by 10,000+ Businesses Across India</h2>
            <div class="content-text">
                
                <p><strong>10,000+ Businesses Served | 4.9 Google Rating | 50,000+ Documents Filed | 15+ Years of Practice</strong></p><p>"Patron handles our entire FEMA compliance including FLA, FC-GPR, and ODI filings. Their CA team maps our balance sheet accurately and resolves RBI queries promptly." - CFO, Delhi IT Company</p><p><strong>4-Office Signal:</strong> Pune, Mumbai, Delhi, and Gurugram.</p>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 13: SELF-FILING vs PROFESSIONAL COMPARISON -->
<section class="content-section" id="comparison-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">FLA Return vs Other RBI Filings</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Filing</th><th>Trigger</th><th>Deadline</th><th>Portal</th></tr></thead>
                    <tbody>
                        <tr><td>FLA Return</td><td>Outstanding foreign assets/liabilities as on 31 March</td><td>15 July annually</td><td>FLAIR</td></tr><tr><td>FC-GPR</td><td>Share allotment to non-resident</td><td>30 days of allotment</td><td>FIRMS</td></tr><tr><td>FC-TRS</td><td>Share transfer involving non-resident</td><td>60 days of transfer</td><td>FIRMS</td></tr><tr><td>ODI Part II (APR)</td><td>Outstanding overseas investment</td><td>31 December annually</td><td>FIRMS</td></tr><tr><td>ECB-2</td><td>External Commercial Borrowing</td><td>Monthly</td><td>FIRMS</td></tr>

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
            <h2 class="section-title">Related Services for Delhi Companies</h2>
            <div class="content-text">
                
                <p>Delhi companies often need these services:</p><ul><li><a href="/fla-returns">FLA Returns (India)</a> - National overview</li><li><a href="/private-limited-company-registration">Private Limited Company Registration</a></li><li><a href="/startup-registration">Startup Registration</a></li><li><a href="/gst-registration">GST Registration</a></li><li><a href="/accounting-services">Accounting Services</a></li></ul>

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
                
                <p><strong>Governing Act:</strong> Foreign Exchange Management Act (FEMA), 1999</p><p><strong>RBI Circular:</strong> AP DIR Series Circular No. 45 (15 March 2011)</p><p><strong>Portal:</strong> <a href="https://flair.rbi.org.in" target="_blank" rel="noopener">FLAIR</a></p><p><strong>Deadline:</strong> 15 July (RBI may extend). Revised return by 30 September.</p><p><strong>Penalty (FEMA S.13):</strong> Up to 300% of contravention. Rs 2,00,000 if unquantifiable. Rs 5,000/day continuing. Rs 7,500 Late Submission Fee.</p><p><strong>Exemptions:</strong> Non-repatriable shares only; no outstanding FDI/ODI as on 31 March.</p><p><strong>Source:</strong> <a href="https://rbi.org.in" target="_blank" rel="noopener">rbi.org.in</a></p>

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
                    <h2 class="faq-expanded__title">Frequently Asked Questions - FLA Returns in Delhi</h2>
                    <p class="faq-expanded__lead">Expert answers on FLA filing, FLAIR portal, deadlines, penalties, and FEMA compliance for Delhi companies.</p>
                    @include('partials.bigin-form', [
                        'variant'  => 'compact',
                        'service'  => 'FLA Returns in Delhi',
                        'city'     => 'Delhi',
                    ])
                </aside>
                <div class="faq-expanded__list">
                    <div class="faq-expanded__item" id="faq-1">
                        <h3 class="faq-expanded__q">What is the FLA return and who must file it in Delhi?</h3>
                        <div class="faq-expanded__a"><p>The FLA return is an annual RBI filing under FEMA 1999 reporting foreign liabilities and assets as on 31 March. Any Delhi company, LLP, AIF, or partnership with outstanding FDI or ODI must file - including MNC subsidiaries, VC-backed startups, IT companies with foreign subsidiaries, and AIFs with foreign LPs.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-2">
                        <h3 class="faq-expanded__q">What is the due date for FLA return filing?</h3>
                        <div class="faq-expanded__a"><p>15 July each year. RBI may extend (extended to 31 July in 2025). If audited accounts unavailable, file provisional by 15 July and revised by 30 September. Patron monitors RBI circulars for extensions.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-3">
                        <h3 class="faq-expanded__q">What is the penalty for not filing FLA return?</h3>
                        <div class="faq-expanded__a"><p>FEMA Section 13: up to 300% of contravention. Rs 2,00,000 if unquantifiable. Rs 5,000/day continuing default. Rs 7,500 Late Submission Fee. Persistent non-compliance restricts future capital account transactions.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-4">
                        <h3 class="faq-expanded__q">Do I need to file FLA if no new FDI this year?</h3>
                        <div class="faq-expanded__a"><p>Yes. The obligation is triggered by outstanding foreign liabilities/assets on 31 March - not by new transactions. If any foreign shareholding remains, filing is mandatory every year until fully repatriated.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-5">
                        <h3 class="faq-expanded__q">Can I file with unaudited accounts?</h3>
                        <div class="faq-expanded__a"><p>Yes. File provisional return with unaudited figures by 15 July to meet the deadline. Revise with audited figures by 30 September. Filing provisional on time is always safer than missing the deadline.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-6">
                        <h3 class="faq-expanded__q">What is the FLAIR portal?</h3>
                        <div class="faq-expanded__a"><p>FLAIR (Foreign Liabilities and Assets Information Reporting) is RBI's online portal at flair.rbi.org.in. All FLA filings must be completed online. Requires entity registration with CIN, authorised person details, Authority Letter, and Verification Letter.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-7">
                        <h3 class="faq-expanded__q">What are the 5 sections of the FLA form?</h3>
                        <div class="faq-expanded__a"><p>Section I: Entity identification. Section II: Ownership and capital (non-resident shareholding). Section III: Foreign liabilities (FDI, ECBs, trade credits). Section IV: Foreign assets (ODI, loans, guarantees). Section V: Variation report (year-on-year changes).</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-8">
                        <h3 class="faq-expanded__q">How much does FLA filing cost in Delhi?</h3>
                        <div class="faq-expanded__a"><p>No government fee on FLAIR portal. Patron's service starts from Rs 9,999 per return covering registration, balance sheet mapping, form preparation, filing, revision, and RBI query resolution.</p></div>
                    </div>
                </div>
            </div>


            <!-- Quick Answers -->
            <div class="highlight-box" style="margin-top:32px;">
                <p><strong>Quick Answers</strong></p>
                <p><strong>FLA return kya hai?</strong> RBI ko har saal file hone wala return jo company ki foreign liabilities (FDI, ECB) aur foreign assets (ODI) report karta hai 31 March ki position ke hisaab se.</p><p><strong>Deadline kya hai?</strong> 15 July (RBI extend kar sakta hai). Provisional file karo agar audit nahi hua, revised 30 September tak.</p><p><strong>Penalty kya hai?</strong> FEMA S.13: 300% tak. Rs 2 lakh flat. Rs 5,000/day. Late fee Rs 7,500.</p>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 18: URGENCY CTA -->
<section class="content-section" style="background: var(--orange-lighter) !important; border-left: 4px solid var(--orange);">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">15 July Deadline Is a Hard FEMA Date - File Now</h2>
            <div class="content-text">
                
                <p>15 July is a <strong>hard FEMA date</strong>. Non-filing is a foreign exchange violation. RBI can impose 300% penalties, restrict capital account transactions, and require compounding proceedings. For Delhi companies with foreign investors, a FEMA violation creates serious credibility concerns during due diligence.</p><p><strong>Contact Patron - <a href="tel:+919459456700">Call +91 945 945 6700</a> or <a href="https://wa.me/919459456700?text=Hello%2C%20I%20just%20visited%20your%20Fla%20Returns%20in%20Delhi%20page.%20I%20would%20like%20to%20know%20more%20about%20it." target="_blank" rel="noopener">WhatsApp us</a>.</strong></p>

            </div>
        </div>
    </div>
</section>

<!-- CONCLUSION + CTA BLOCK (Dark) -->
<section class="content-section" style="background: var(--blue) !important;">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title" style="color:#FFFFFF !important;">File Your FLA Return in Delhi - Ensure FEMA Compliance</h2>
            <div class="content-text" style="text-align:left;">
                
                <p style="color:rgba(255,255,255,0.9);font-size:16px;line-height:1.8;">FLA return filing is mandatory annual FEMA compliance for every Delhi entity with outstanding foreign liabilities or assets. Delhi's position as India's largest FDI destination means thousands face this obligation. FLAIR portal filing requires accurate balance sheet mapping and strict adherence to 15 July.</p><p style="color:rgba(255,255,255,0.9);font-size:16px;line-height:1.8;">Patron Accounting provides complete FLA filing from our Rohini office - FLAIR registration, balance sheet mapping, form preparation, provisional and revised filing, and RBI query resolution. Integrated with FC-GPR, FC-TRS, ODI. 15+ years. 10,000+ businesses. 4 offices.</p>

            </div>
            <div style="display:flex;gap:14px;flex-wrap:wrap;margin-top:24px;">
                <a href="tel:+919459456700" style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:var(--orange);color:#fff;border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#128222; Call +91 945 945 6700</a>
                <a href="https://wa.me/919459456700?text=Hello%2C%20I%20just%20visited%20your%20Fla%20Returns%20in%20Delhi%20page.%20I%20would%20like%20to%20know%20more%20about%20it." target="_blank" style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:#25D366;color:#fff;border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;" rel="noopener">&#128172; WhatsApp Us</a>
                <a href="mailto:sales@patronaccounting.com?subject=FLA%20Return%20Filing%20in%20Delhi&body=Hello%2C%20I%20just%20visited%20your%20Fla%20Returns%20in%20Delhi%20page.%20I%20would%20like%20to%20know%20more%20about%20it.%0A%0AThank%20you." style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:transparent;color:#fff;border:2px solid rgba(255,255,255,0.3);border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#9993;&#65039; Email Us</a>
            </div>
            <p style="color:rgba(255,255,255,0.7);font-size:13px;margin-top:16px;">Book a Free Consultation - No Obligation.</p>
        </div>
    </div>
</section>

<!-- GSTAT STATE BENCH CITY PAGES (32 Pages) -->
<section class="content-section" style="padding:48px 32px;background:var(--gray-50);">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title" style="text-align:center;margin-bottom:12px;">FLA Return Filing Across India</h2>
            <p style="text-align:center;color:var(--text-muted);font-size:15px;margin-bottom:40px;">Patron provides FLA return filing in major cities. Select your city.</p>
     
            <div class="pa-city-block" style="margin-bottom:40px;"><div class="pa-block-title">FLA Return Filing in Other Cities</div><div class="pa-block-sub">Select your city for local FLA support</div><div class="pa-city-grid"><a href="/fla-returns/pune" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Pune</div><div class="pa-card-sub">Maharashtra</div></div></a><a href="/fla-returns/mumbai" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Mumbai</div><div class="pa-card-sub">Maharashtra</div></div></a><div class="pa-city-card" style="opacity:0.6;pointer-events:none;border:2px solid var(--orange);position:relative;"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Delhi</div><div class="pa-card-sub">Delhi NCR</div></div><span style="position:absolute;top:6px;right:8px;font-size:10px;color:var(--orange);font-weight:700;text-transform:uppercase;letter-spacing:0.5px;">You're here</span></div><a href="/fla-returns/gurugram" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Gurugram</div><div class="pa-card-sub">Haryana</div></div></a></div></div><div class="pa-city-block"><div class="pa-block-title">Related Services in Delhi</div><div class="pa-block-sub">Complete compliance for FDI companies</div><div class="pa-cross-grid"><a href="/private-limited-company-registration/delhi" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Private Limited Company Registration</div><div class="pa-card-sub">Delhi</div></div></a><a href="/startup-registration/delhi" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Startup Registration</div><div class="pa-card-sub">Delhi</div></div></a><a href="/gst-registration/delhi" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">GST Registration</div><div class="pa-card-sub">Delhi</div></div></a><a href="/accounting-services/delhi" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Accounting Services</div><div class="pa-card-sub">Delhi</div></div></a><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Income Tax Filing</div><div class="pa-card-sub">Delhi</div></div><a href="/trademark-registration/delhi" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Trademark Registration</div><div class="pa-card-sub">Delhi</div></div></a></div></div>
        </div>
    </div>
</section>

<!-- CONTENT FRESHNESS FOOTER -->
<section class="content-section" style="padding:32px;">
    <div class="content-container">
        <div class="text-content" style="font-size:13px;color:var(--text-muted);">
            <p><strong>Content Created:</strong> 06 April 2026 &nbsp;|&nbsp; <strong>Last Updated:</strong> <span id="lastUpdatedFooter">06 April 2026</span> &nbsp;|&nbsp; <strong>Next Review:</strong> 06 October 2026 &nbsp;|&nbsp; <strong>Reviewed By:</strong> CA &amp; CS Team, Patron Accounting LLP</p>
            <p>This page is reviewed every 6 months to reflect RBI circulars and FEMA updates. Freshness Tier: 1.</p>
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
