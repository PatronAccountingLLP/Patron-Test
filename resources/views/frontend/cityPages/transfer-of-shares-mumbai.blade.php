
@extends('layouts.service-app')

<!-- External Dependencies (loaded by master layout in production) -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Barlow:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,400&family=DM+Sans:opsz,wght@9..40,400;9..40,500;9..40,600;9..40,700&display=swap" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

@section('meta')
    <title>Transfer of Shares Mumbai – SH-4, Stamp Duty &amp; Valuation</title>
    <meta name="description" content="CA-assisted share transfer in Mumbai. SH-4, stamp duty, Board approval, FEMA FC-TRS, demat/physical, capital gains. ROC Everest House. Call +91 945 945 6700.">
    <link rel="canonical" href="/transfer-of-shares/mumbai">
    <meta name="robots" content="index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1">
    <meta property="og:title" content="Transfer of Shares Mumbai – SH-4, Stamp Duty &amp; Valuation">
    <meta property="og:description" content="CA-assisted share transfer in Mumbai. SH-4, stamp duty, Board approval, FEMA FC-TRS, demat/physical, capital gains. ROC Everest House. Call +91 945 945 6700.">
    <meta property="og:url" content="/transfer-of-shares/mumbai">
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="Patron Accounting">
    <meta property="og:image" content="https://www.patronaccounting.com/images/og-default-square.png">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="1200">
    <meta property="og:image:type" content="image/png">
    <meta property="og:image:secure_url" content="https://www.patronaccounting.com/images/og-default-square.png">
    <meta property="og:image:alt" content="Patron Accounting - partner you can rely on">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Transfer of Shares Mumbai – SH-4, Stamp Duty &amp; Valuation">
    <meta name="twitter:description" content="CA-assisted share transfer in Mumbai. SH-4, stamp duty, Board approval, FEMA FC-TRS, demat/physical, capital gains. ROC Everest House. Call +91 945 945 6700.">
    <meta name="twitter:image" content="https://www.patronaccounting.com/images/og-default-square.png">
@endsection

@section('schema')
    <script type="application/ld+json">{
  "@context": "https://schema.org",
  "@graph": [
    {
      "@type": "Service",
      "name": "Transfer of Shares in Mumbai",
      "description": "CA-assisted share transfer in Mumbai. SH-4, stamp duty, Board approval, FEMA FC-TRS, demat/physical, capital gains. ROC Everest House. Call +91 945 945 6700.",
      "url": "https://www.patronaccounting.com/transfer-of-shares/mumbai",
      "serviceType": "Transfer of Shares in Mumbai",
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
        "url": "https://www.patronaccounting.com/transfer-of-shares/mumbai",
        "price": "5000"
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
          "name": "Transfer of Shares",
          "item": "https://www.patronaccounting.com/transfer-of-shares"
        },
        {
          "@type": "ListItem",
          "position": 3,
          "name": "Transfer of Shares in Mumbai",
          "item": "https://www.patronaccounting.com/transfer-of-shares/mumbai"
        }
      ]
    },
    {
      "@type": "FAQPage",
      "mainEntity": [
        {
          "@type": "Question",
          "name": "Which ROC handles share transfers in Mumbai?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Routine private company transfers don't require ROC filing. Updated shareholding in MGT-7 filed with ROC Mumbai Everest House. Cross-border: FC-TRS on RBI FIRMS portal through AD banks."
          }
        },
        {
          "@type": "Question",
          "name": "What is Form SH-4?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Securities Transfer Form for physical shares. Both parties sign, two witnesses. Stamp duty 0.015% affixed. Lodge within 60 days. Not needed for demat (NSDL/CDSL)."
          }
        },
        {
          "@type": "Question",
          "name": "What stamp duty applies?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "0.015% of consideration or market value (whichever higher). Demat: auto-collected. Physical: stamps on SH-4. Gift transfers: no stamp duty."
          }
        },
        {
          "@type": "Question",
          "name": "Can private company shares transfer freely?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "No. AOA restrictions apply: ROFR, pre-emption, Board approval. Must comply before executing. If Board refuses compliant transfer, appeal to Tribunal within 30 days under Section 58."
          }
        },
        {
          "@type": "Question",
          "name": "What about foreign transfers (FEMA)?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "FC-TRS on FIRMS portal within 60 days. Resident to non-resident at or above FMV; non-resident to resident at or below FMV. Valuation by SEBI merchant banker or CA (DCF)."
          }
        },
        {
          "@type": "Question",
          "name": "What is Rule 9B?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Mandatory demat for non-small private companies by 30 June 2026. Physical SH-4 transfers invalid after deadline. Small companies, govt companies, WOS exempt."
          }
        },
        {
          "@type": "Question",
          "name": "Capital gains implications?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "STCG (under 24 months) at slab rates. LTCG (24+ months) at 12.5%. Non-resident: buyer deducts TDS S195. Cost: actual price or FMV at allotment for ESOP."
          }
        },
        {
          "@type": "Question",
          "name": "Can shares be gifted?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Yes. SH-4 with Nil consideration. No stamp duty. Tax: Section 56(2)(x) - non-relative gift exceeding Rs 50,000 taxable. Relative gifts exempt."
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
                        Transfer of Shares in Mumbai: SH-4, Stamp Duty, Board Approval, and Cross-Border Compliance
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
                            <p class="mb-0 text-dark benefit-paragraph"><span>Physical:</span> Form SH-4 | Stamp duty 0.015% | Lodge within 60 days | Board approval | New certificate within 30 days</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Demat:</span> NSDL/CDSL | Stamp duty auto-collected 0.015% | Rule 9B mandatory demat by 30 June 2026</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Cross-Border:</span> FC-TRS within 60 days on FIRMS portal | FEMA pricing (FMV floor/ceiling) | Valuation required</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Capital Gains:</span> STCG (slab rates) if held &lt; 24 months | LTCG (12.5%) if held &ge; 24 months | TDS S195 for NR</p>
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
                        <a href="https://wa.me/919459456700?text=Hi%2C%20I%20need%20share%20transfer%20services%20in%20Mumbai.%20Please%20share%20details." target="_blank" class="btn-sample text-decoration-none">
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
                                            'service'  => 'Transfer of Shares',
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
            <a href="#services-section" class="toc-btn">Services</a>
            <a href="#procedure-section" class="toc-btn">Process</a>
            <a href="#documents-section" class="toc-btn">Documents</a>
            <a href="#challenges-section" class="toc-btn">Challenges</a>
            <a href="#fees-section" class="toc-btn">Fees</a>
            <a href="#timeline-section" class="toc-btn">Timeline</a>
            <a href="#benefits-section" class="toc-btn">Benefits</a>
            <a href="#comparison-section" class="toc-btn">Scenarios</a>
            <a href="#faq-section" class="toc-btn">FAQs</a>
        </div>
        <button class="toc-arrow right" id="tocRight">&#10095;</button>
    </div>
</div>

<!-- SECTION 2: OVERVIEW / INTRO + TL;DR -->
<section class="content-section" id="overview-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Transfer of Shares in Mumbai &ndash; Overview</h2>
            <div class="content-text">
                <div class="highlight-box" style="margin-bottom:20px;">
                    <p><strong>&#128204; TL;DR - Transfer of Shares Services at a Glance</strong></p>
                    <p>Transfer of shares is the legal process of transferring ownership of existing shares from one person (transferor) to another (transferee). Physical transfers use Form SH-4 with stamp duty at 0.015%, lodged within 60 days. Demat transfers go through NSDL/CDSL. Private companies require Board approval per AOA restrictions. New certificate within 30 days. For cross-border: FC-TRS within 60 days on FIRMS portal with FEMA pricing. Capital gains tax applies. Rule 9B mandates demat by 30 June 2026.</p>
                </div>
                <p>Mumbai has the highest volume of private company share transfers &ndash; Powai startup founder secondary sales, BKC VC/PE exits, Fort family succession, MNC subsidiary restructuring, Andheri tech ESOP sales. Learn more about <a href="/transfer-of-shares">Transfer of Shares across India</a>.</p>
                <p>Patron Accounting's Mumbai office at Marine Lines &ndash; adjacent to ROC Everest House &ndash; provides end-to-end share transfer: AOA/SHA verification, ROFR management, SH-4, stamp duty, Board approval, certificate, Register update, FC-TRS, capital gains, and Rule 9B demat transition. For ongoing compliance, see <a href="/private-limited-company-compliance">Private Limited Company Compliance</a>.</p>
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
                <h2 class="section-title">What Is Transfer of Shares?</h2>
                <div class="content-text what-is-definition">
                    
                    <p>Transfer of shares is the legal process of transferring ownership of existing shares from one person to another, governed by Section 56 of the Companies Act, 2013. Unlike <a href="/issue-of-shares">Issue of Shares</a> (which creates new shares), transfer involves existing shares changing hands.</p>
                    <p>For Mumbai companies, share transfer involves three compliance dimensions: (1) Companies Act (SH-4, stamp duty, Board approval, certificate, Register), (2) Tax (capital gains STCG/LTCG, TDS Section 195 for non-residents), (3) FEMA (FC-TRS within 60 days, FMV pricing). For capital gains filing, see <a href="/itr-for-capital-gains">ITR for Capital Gains</a>.</p>
                    <p>Patron integrates all three dimensions into a single managed process for Mumbai companies.</p>

                </div>
                <div class="highlight-box" style="margin-top:20px;">
                    <p><strong>Key Terms for Transfer of Shares:</strong></p>
                    <ul>
                        <li><strong>Form SH-4:</strong> Securities Transfer Form &ndash; stamped at 0.015% of consideration</li>
                        <li><strong>Section 56:</strong> Transfer and transmission &ndash; certificate within 1 month, penalty for non-compliance</li>
                        <li><strong>Rule 9B:</strong> Mandatory demat for non-small private companies by 30 June 2026</li>
                        <li><strong>FC-TRS:</strong> Filed on RBI FIRMS portal within 60 days for cross-border transfers</li>
                        <li><strong>ROFR:</strong> Right of First Refusal &ndash; offer to existing shareholders first</li>
                        <li><strong>Section 56(2)(x):</strong> Gift from non-relative exceeding Rs 50,000 deemed taxable income</li>
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
                            <text x="100" y="170" font-size="10" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial, sans-serif">Transfer of Shares</text>
                        </svg>
                    </div>
                    <div class="illustration-badge">
                        <span>CA &amp; CS Managed</span>
                        <strong>Share Transfer</strong>
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
            <h2 class="section-title">When Mumbai Companies Need Share Transfers</h2>
            <div class="content-text">
                
                <p><strong>Founder secondary sale at Powai startups</strong> &ndash; After Series B/C, founders sell partial stake. SHA/AOA compliance (ROFR waiver), transfer agreement, SH-4, stamp duty, Board approval, FC-TRS for foreign buyers.</p>
                <p><strong>VC/PE investor exit at BKC</strong> &ndash; Fund exits by selling stake. Transfer agreement, SH-4, FC-TRS if cross-border. LTCG at 12.5% if held 24+ months.</p>
                <p><strong>Family succession at Fort/Nariman Point</strong> &ndash; Gift transfers with nil consideration. Section 56(2)(x) exemption for relatives.</p>
                <p><strong>MNC restructuring at BKC</strong> &ndash; Subsidiary shares between holding entities. FC-TRS for both foreign entities. FEMA pricing. For <a href="/fdi-compliance">FDI Compliance</a> integration.</p>
                <p><strong>ESOP share sale at Powai/Andheri</strong> &ndash; Employees selling vested shares. Capital gains from exercise date.</p>
                <p><strong>Promoter stake sale</strong> &ndash; Bringing in strategic/financial investors. Comprehensive agreement, ROFR, SH-4, FC-TRS if foreign.</p>

            </div>
            </div>
        </div>
    </div>
</section>

<!-- SECTION 5: OUR SERVICES -->
<section class="content-section" id="services-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Share Transfer Services Included</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Service</th><th>What We Do</th></tr></thead>
                    <tbody>
                        <tr><td>AOA Restriction Verification</td><td>Review AOA/SHA for ROFR, pre-emption, Board approval, absolute restrictions. Powai startups: investor consent and co-sale rights under SHA reviewed in parallel</td></tr>
                        <tr><td>Transfer Agreement Drafting</td><td>High-value: price, representations, warranties, indemnities, closing mechanism. Simple: transfer letter. Aligned with AOA/SHA. See <a href="/legal-drafting">Legal Drafting</a></td></tr>
                        <tr><td>ROFR &amp; Pre-Emption Management</td><td>ROFR notice, 30/60-day response window, written waiver documentation from declining shareholders</td></tr>
                        <tr><td>SH-4 Execution &amp; Stamp Duty</td><td>Form SH-4 prepared. Stamp duty computed at 0.015%. Stamps affixed/cancelled. Lodged within 60 days</td></tr>
                        <tr><td>Board Approval &amp; Certificate Issuance</td><td>Board Meeting, Resolution, old certificate cancelled, new issued within 30 days (Section 56(4)), Register of Members updated within 7 days</td></tr>
                        <tr><td>FC-TRS for Cross-Border</td><td>FIRMS portal via AD bank within 60 days. FEMA pricing: resident to NR &ge; FMV; NR to resident &le; FMV. Valuation coordinated</td></tr>
                        <tr><td>Capital Gains &amp; Tax Advisory</td><td>STCG/LTCG computed. Holding period analysis. TDS S195 for NR transferors. Tax-efficient structuring</td></tr>
                        <tr><td>Rule 9B Demat Transition</td><td>Demat readiness assessment. ISIN, RTA appointment, depository coordination. Before 30 June 2026 deadline</td></tr>

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
            <h2 class="section-title">Share Transfer Process in Mumbai (Physical SH-4)</h2>
            <p class="section-subtitle" style="text-align:left;max-width:100%;">Patron manages end-to-end: simple transfers in 10-15 days, cross-border in 20-30 days, with ROFR in 45-75 days. Adjacent to ROC Mumbai Everest House.</p>
        </header>
        <div class="steps-container">
            <div class="step-card"><div class="step-content"><span class="step-badge">Step 1</span><h3 class="step-title">Verify AOA Restrictions &amp; Obtain Waivers</h3><p class="step-description">Review AOA and SHA for transfer restrictions. If ROFR applies: issue notice, wait 30-60 day response period, obtain written waivers. For Powai startups, Patron reviews SHA investor consent requirements in parallel.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>AOA reviewed</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>ROFR completed</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="15" y="10" width="90" height="65" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><line x1="30" y1="30" x2="90" y2="30" stroke="#F5A623" stroke-width="3" stroke-linecap="round"/><circle cx="85" cy="55" r="10" fill="#E8F5E9" stroke="#10B981" stroke-width="1.2"/><path d="M80 55l3 3 6-6" stroke="#10B981" stroke-width="2" stroke-linecap="round"/></svg></div><span class="illustration-label">Cleared</span><span class="step-number-large">01</span></div></div></div><div class="step-card"><div class="step-content"><span class="step-badge">Step 2</span><h3 class="step-title">Execute SH-4 &amp; Affix Stamp Duty</h3><p class="step-description">Both parties sign Form SH-4 with share details, consideration, witnesses. Affix share transfer stamps at 0.015% of consideration (or market value). Stamps cancelled by signing across them. Patron computes exact duty and arranges stamping.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>SH-4 executed</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Stamp duty affixed</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="20" y="8" width="80" height="70" rx="4" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><circle cx="60" cy="35" r="15" fill="#FFF3E0" stroke="#F5A623" stroke-width="1.2"/><path d="M53 35l5 5 10-10" stroke="#10B981" stroke-width="2.5" stroke-linecap="round"/></svg></div><span class="illustration-label">SH-4 Done</span><span class="step-number-large">02</span></div></div></div><div class="step-card"><div class="step-content"><span class="step-badge">Step 3</span><h3 class="step-title">Lodge SH-4 &amp; Board Approval</h3><p class="step-description">Submit stamped SH-4 with original share certificate to company within 60 days. Board verifies AOA, stamp duty, ROFR, no lien. Board Resolution passed approving the transfer.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Lodged in time</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Board approved</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="10" y="10" width="45" height="60" rx="4" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><rect x="65" y="10" width="45" height="60" rx="4" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><line x1="18" y1="25" x2="48" y2="25" stroke="#F5A623" stroke-width="2" stroke-linecap="round"/><line x1="73" y1="25" x2="103" y2="25" stroke="#F5A623" stroke-width="2" stroke-linecap="round"/></svg></div><span class="illustration-label">Approved</span><span class="step-number-large">03</span></div></div></div><div class="step-card"><div class="step-content"><span class="step-badge">Step 4</span><h3 class="step-title">New Certificate &amp; Register Update</h3><p class="step-description">Cancel old certificate. Issue new in transferee name within 30 days (Section 56(4)). Update Register of Members within 7 days. For demat: shares credited to transferee demat account.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Certificate issued</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Register updated</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="20" y="10" width="80" height="60" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><circle cx="60" cy="40" r="18" fill="#E8F5E9" stroke="#10B981" stroke-width="1.5"/><path d="M52 40l6 6 12-12" stroke="#10B981" stroke-width="3" stroke-linecap="round"/></svg></div><span class="illustration-label">Ownership Changed</span><span class="step-number-large">04</span></div></div></div><div class="step-card"><div class="step-content"><span class="step-badge">Step 5</span><h3 class="step-title">FC-TRS &amp; Capital Gains</h3><p class="step-description">For cross-border: file FC-TRS on FIRMS portal through AD bank within 60 days. Compute capital gains (STCG/LTCG). If non-resident transferor: ensure TDS S195. Patron integrates Companies Act + FEMA + Tax as one process.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>FC-TRS filed</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Tax computed</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="25" y="10" width="70" height="55" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><circle cx="60" cy="35" r="18" fill="#E8F5E9" stroke="#10B981" stroke-width="1.5"/><path d="M52 35l6 6 12-12" stroke="#10B981" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/></svg></div><span class="illustration-label">Complete</span><span class="step-number-large">05</span></div></div></div>

        </div>
    </div>
</section>

<!-- SECTION 8: DOCUMENTS REQUIRED -->
<section class="content-section" id="documents-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Documents Required for Share Transfer in Mumbai</h2>
            <div class="content-text">
                
                <ul>
                    <li><strong>Form SH-4:</strong> Executed by both parties, two witnesses, stamped at 0.015%</li>
                    <li><strong>Original Share Certificate:</strong> Surrendered by transferor</li>
                    <li><strong>Transfer Agreement:</strong> For high-value transfers &ndash; price, representations, warranties</li>
                    <li><strong>ROFR Waiver Letters:</strong> From shareholders declining right of first refusal</li>
                    <li><strong>Board Resolution:</strong> Approving the transfer</li>
                    <li><strong>Valuation Certificate (cross-border):</strong> FMV by SEBI merchant banker or CA (DCF)</li>
                    <li><strong>FIRC / Payment Proof:</strong> For cross-border: FIRC from AD bank</li>
                    <li><strong>KYC of Transferee:</strong> PAN, identity, address; for foreign: passport, overseas address</li>
                </ul>
                <div class="highlight-box" style="margin-top:16px;">
                    <p><strong>Mumbai-Specific Tip:</strong> Rule 9B mandates demat for non-small private companies by 30 June 2026. After this date, physical SH-4 transfers will not be valid for covered companies. Patron advises Mumbai companies on demat readiness and the transition.</p>
                </div>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 9: CHALLENGES -->
<section class="content-section" id="challenges-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Common Challenges in Share Transfer in Mumbai</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Challenge</th><th>Impact</th><th>How Patron Accounting Solves It</th></tr></thead>
                    <tbody>
                        <tr><td>AOA Restriction Non-Compliance</td><td>Transfer without ROFR/Board approval can be invalidated. Powai startups have SHA overlaying AOA &ndash; both must be reviewed</td><td>All restrictions identified before initiation. ROFR managed. Board approval facilitated with full verification</td></tr>
                        <tr><td>Stamp Duty Insufficiency</td><td>SH-4 with insufficient stamp duty inadmissible. Duty on consideration or market value (whichever higher). VC exits at premium increase the base</td><td>Exact stamp duty computed. Stamps arranged correctly. Court-admissible SH-4 guaranteed</td></tr>
                        <tr><td>60-Day Lodgment Deadline</td><td>SH-4 lodged after 60 days may be rejected. Fresh SH-4 with fresh stamp duty required</td><td>60-day deadline tracked. Timely lodgment ensured. Execution timed to commercial closing</td></tr>
                        <tr><td>Cross-Border FEMA Pricing</td><td>Resident to NR must be &ge; FMV. NR to resident must be &le; FMV. Violation is FEMA contravention</td><td>FEMA pricing verified before execution. Valuation coordinated. FC-TRS within 60 days</td></tr>
                        <tr><td>Capital Gains Complexity</td><td>STCG vs LTCG, multiple lots with different dates/prices, TDS S195 for NR</td><td>Capital gains per lot. Tax-efficient structuring. TDS obligations identified</td></tr>

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
            <h2 class="section-title">Share Transfer Fees in Mumbai</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Fee Component</th><th>Amount</th></tr></thead>
                    <tbody>
                        <tr><td>Stamp Duty on SH-4 (Physical)</td><td>0.015% of consideration or market value (whichever higher)</td></tr>
                        <tr><td>Stamp Duty (Demat Transfer)</td><td>0.015% auto-collected by NSDL/CDSL</td></tr>
                        <tr><td>Capital Gains Tax (Transferor)</td><td>STCG: slab rates (&lt; 24 months) | LTCG: 12.5% (&ge; 24 months unlisted)</td></tr>
                        <tr><td>Penalty (Section 56)</td><td>Company: Rs 25,000-5,00,000 | Officers: Rs 10,000-1,00,000</td></tr>
                        <tr><td>Patron Fee &ndash; Simple Transfer</td><td>Starting Rs 5,000 (AOA + SH-4 + stamp + Board + certificate)</td></tr>
                        <tr><td>Patron Fee &ndash; High-Value with Agreement</td><td>Starting Rs 12,000 (agreement + ROFR + SH-4 + Board + certificate)</td></tr>
                        <tr><td>Patron Fee &ndash; Cross-Border + FC-TRS</td><td>Starting Rs 18,000 (FEMA pricing + valuation + SH-4 + FC-TRS + Board)</td></tr>
                        <tr><td>Patron Fee &ndash; Family Gift/Succession</td><td>Starting Rs 7,000 (gift deed + SH-4 + Board + certificate + tax advisory)</td></tr>

                    </tbody>
                </table>
                </div>
                <p style="margin-top:16px;font-size:13px;color:var(--text-muted);font-style:italic;">All fees and charges listed are indicative only and do not constitute a binding offer. Final amounts may vary depending on the volume of work and the complexity involved.</p>
                <p style="margin-top:16px;">Professional service charges for drafting, filing, and representation are separate from the statutory fees. The exact fee depends on the complexity of the case, disputed amount, and number of hearings required. Contact us for a detailed quote.</p>
                <p style="margin-top:16px;"><strong>Get a free Transfer of Shares consultation - <a href="tel:+919459456700">Call +91 945 945 6700</a> or <a href="https://wa.me/919459456700?text=Hi%2C%20I%20need%20share%20transfer%20services%20in%20Mumbai.%20Please%20share%20details." target="_blank">WhatsApp us</a>. No-obligation assessment.</strong></p>
            </div>
        </div>
    </div>
</section>

<!-- SECTION 11: TIMELINE -->
<section class="content-section" id="timeline-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Share Transfer Timeline</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Stage</th><th>Estimated Timeline</th></tr></thead>
                    <tbody>
                        <tr><td>AOA/SHA Review + ROFR Notice</td><td>Day 1-5 (ROFR notice period: 30-60 days if applicable)</td></tr>
                        <tr><td>Execute SH-4 + Stamp Duty</td><td>Day 1 post-agreement/ROFR completion</td></tr>
                        <tr><td>Lodge SH-4 with Company</td><td>Within 60 days of execution</td></tr>
                        <tr><td>Board Approval</td><td>Within 30 days of lodgment</td></tr>
                        <tr><td>New Share Certificate</td><td>Within 30 days of Board approval (Section 56(4))</td></tr>
                        <tr><td>Update Register of Members</td><td>Within 7 days of Board approval</td></tr>
                        <tr><td>FC-TRS (cross-border)</td><td>Within 60 days of transfer/payment on FIRMS portal</td></tr>
                        <tr><td>Patron End-to-End (Simple)</td><td>10-15 working days</td></tr>
                        <tr><td>Patron End-to-End (Cross-Border)</td><td>20-30 working days</td></tr>
                        <tr><td>Patron End-to-End (With ROFR)</td><td>45-75 working days (including 30-60 day ROFR)</td></tr>

                    </tbody>
                </table>
                </div>
                <div class="highlight-box" style="margin-top:16px;">
                    
                    <p><strong>The 60-day SH-4 lodgment deadline is binding.</strong> Missing it requires fresh execution with fresh stamp duty. Rule 9B demat deadline (30 June 2026) means physical transfers are on a countdown for covered companies. Patron times SH-4 execution to align with commercial closing to maximise the 60-day window.</p>

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
            <h2 class="section-title">Why Choose Patron for Share Transfer in Mumbai</h2>
        </div>
        <div class="features-grid">
            <article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><h3 class="feature-title">Adjacent to ROC Everest House</h3><p class="feature-text">MGT-7 reflecting updated shareholding filed with ROC Mumbai. Continuity from share transfer to annual compliance.</p></article>
            <article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg></div><h3 class="feature-title">Companies Act + FEMA + Tax</h3><p class="feature-text">SH-4 + Board (Companies Act), FC-TRS + FMV pricing (FEMA), capital gains + TDS (Tax) &ndash; all three as a single process.</p></article>
            <article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="2" y="3" width="20" height="14" rx="2"/><path d="M8 21h8M12 17v4"/></svg></div><h3 class="feature-title">Powai Secondary Sale Expertise</h3><p class="feature-text">Hundreds of founder and investor secondary sales. SHA consent, ROFR waivers, transfer agreements, SH-4, FC-TRS, capital gains across multiple lots.</p></article>
            <article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M14 2H6a2 2 0 00-2 2v16a2 2 0 002 2h12a2 2 0 002-2V8z"/><path d="M14 2v6h6"/></svg></div><h3 class="feature-title">Family Succession Planning</h3><p class="feature-text">Tax-efficient intergenerational transfers: gift transfers between relatives (Section 56(2)(x) exemption), capital gains analysis, stamp duty optimisation.</p></article>
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
                    <p style="font-style:italic;margin-bottom:8px;">&ldquo;Patron managed my secondary sale to a Singapore fund in 18 days &ndash; ROFR waiver, SH-4, FC-TRS, and capital gains computation. The fund's lawyers were impressed with the integrated compliance package.&rdquo;</p>
                    <p style="font-size:13px;font-weight:700;color:var(--blue);margin:0;">&mdash; Founder, SaaS Startup, Powai</p>
                </blockquote>
                <p>Offices in Pune, Mumbai, Delhi, and Gurugram serving companies with share transfers, corporate compliance, and MCA filings.</p>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 13: SELF-FILING vs PROFESSIONAL COMPARISON -->
<section class="content-section" id="comparison-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Share Transfer Scenarios for Mumbai Companies</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Scenario</th><th>Mumbai Example</th><th>Key Compliance</th><th>Timeline</th></tr></thead>
                    <tbody>
                        <tr><td>Founder Secondary Sale</td><td>Powai startup founder selling 10% to new VC</td><td>SHA consent + ROFR + SH-4 + FC-TRS + capital gains</td><td>20-30 days</td></tr>
                        <tr><td>Investor Exit</td><td>BKC VC fund selling entire stake to PE fund</td><td>Transfer agreement + SH-4 + FC-TRS + FEMA pricing</td><td>25-40 days</td></tr>
                        <tr><td>Family Gift</td><td>Fort family business: father to son</td><td>SH-4 (nil) + Board + certificate + S56(2)(x) review</td><td>10-15 days</td></tr>
                        <tr><td>MNC Restructuring</td><td>BKC: Singapore HoldCo to UK HoldCo</td><td>FC-TRS + FEMA pricing + tax treaty analysis</td><td>20-30 days</td></tr>
                        <tr><td>ESOP Sale</td><td>Powai tech: employee selling vested shares</td><td>SH-4 + Board + capital gains (from exercise date)</td><td>10-15 days</td></tr>
                        <tr><td>Promoter Stake Sale</td><td>Nariman Point: bringing in strategic partner</td><td>Agreement + ROFR + SH-4 + Board + FC-TRS</td><td>25-40 days</td></tr>

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
                    <li><a href="/transfer-of-shares">Transfer of Shares (India Overview)</a></li>
                    <li><a href="/issue-of-shares">Issue of Shares</a></li>
                    <li><a href="/fdi-compliance">FDI Compliance</a></li>
                    <li><a href="/itr-for-capital-gains">ITR for Capital Gains</a></li>
                    <li><a href="/private-limited-company-compliance">Private Limited Company Compliance</a></li>
                    <li><a href="/change-in-authorised-capital">Change in Authorised Capital</a></li>
                    <li><a href="/legal-drafting">Legal Drafting Service</a></li>
                    <li><a href="/accounting-services">Accounting Services</a></li>
                </ul>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 15A: LEGAL FRAMEWORK -->
<section class="content-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Legal &amp; Compliance Framework for Share Transfer</h2>
            <div class="content-text">
                
                <ul>
                    <li><strong>Section 56:</strong> Transfer and transmission &ndash; procedure, certificate within 1 month</li>
                    <li><strong>Section 58:</strong> Refusal to register &ndash; notice within 30 days; appeal to Tribunal</li>
                    <li><strong>Form SH-4:</strong> Securities Transfer Form for physical transfers</li>
                    <li><strong>Stamp Duty:</strong> 0.015% (post Finance Act 2019, effective 01.07.2020)</li>
                    <li><strong>Rule 9B:</strong> Mandatory demat &ndash; 30 June 2026</li>
                    <li><strong>FEMA FC-TRS:</strong> Within 60 days for non-resident transfers | FMV pricing</li>
                    <li><strong>Capital Gains:</strong> STCG slab rates | LTCG 12.5% | TDS S195 for NR</li>
                    <li><strong>Penalty (S56):</strong> Company Rs 25,000-5,00,000 | Officers Rs 10,000-1,00,000</li>
                    <li><strong>ROC Mumbai:</strong> Everest House, 100 Marine Lines, Mumbai 400020</li>
                </ul>
                <p><strong>Filing Portal:</strong> <a href="https://www.mca.gov.in" target="_blank" rel="noopener">mca.gov.in</a> | <a href="https://firms.rbi.org.in" target="_blank" rel="noopener">firms.rbi.org.in</a></p>

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
                    <h2 class="faq-expanded__title">Frequently Asked Questions &ndash; Transfer of Shares in Mumbai</h2>
                    <p class="faq-expanded__lead">Get answers about SH-4, stamp duty, Board approval, FEMA, Rule 9B, capital gains, gift transfers, and timelines for Mumbai companies.</p>
                    @include('partials.bigin-form', [
                        'variant'  => 'compact',
                        'service'  => 'Transfer of Shares',
                        'city'     => 'Mumbai',
                    ])
                </aside>
                <div class="faq-expanded__list">
                    <div class="faq-expanded__item" id="faq-1">
                        <h3 class="faq-expanded__q">Which ROC handles share transfers in Mumbai?</h3>
                        <div class="faq-expanded__a"><p>Routine private company transfers don't require ROC filing &ndash; it's an internal corporate action. Updated shareholding in MGT-7 filed with ROC Mumbai at Everest House. Cross-border: FC-TRS on RBI FIRMS portal through AD banks. Patron handles all post-transfer compliance.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-2">
                        <h3 class="faq-expanded__q">What is Form SH-4?</h3>
                        <div class="faq-expanded__a"><p>Securities Transfer Form under Companies Act for physical transfers. Both parties sign, two witnesses. Stamp duty 0.015% affixed before signing. Lodge within 60 days. Not needed for demat (NSDL/CDSL). Patron prepares and coordinates SH-4 for Mumbai companies.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-3">
                        <h3 class="faq-expanded__q">What stamp duty applies?</h3>
                        <div class="faq-expanded__a"><p>0.015% of consideration or market value (whichever higher). Demat: auto-collected by NSDL/CDSL. Physical: stamps on SH-4, cancelled before signing. Gift transfers (nil): no stamp duty. Patron computes and arranges stamping for all Mumbai transfers.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-4">
                        <h3 class="faq-expanded__q">Can private company shares transfer freely?</h3>
                        <div class="faq-expanded__a"><p>No. AOA restrictions: ROFR, pre-emption, Board approval. Must comply before executing. If Board refuses compliant transfer, transferee can appeal to Tribunal within 30 days under Section 58. Patron reviews all restrictions for every Mumbai transfer.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-5">
                        <h3 class="faq-expanded__q">What about foreign transfers (FEMA)?</h3>
                        <div class="faq-expanded__a"><p>FC-TRS on FIRMS portal through AD bank within 60 days. Resident to NR at or above FMV; NR to resident at or below FMV. Valuation by SEBI merchant banker or CA (DCF). Non-compliance attracts compounding. Patron handles FC-TRS and FEMA pricing for all Mumbai cross-border transfers.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-6">
                        <h3 class="faq-expanded__q">What is Rule 9B?</h3>
                        <div class="faq-expanded__a"><p>Mandatory demat for non-small private companies by 30 June 2026. Physical SH-4 transfers invalid after deadline. Small companies (capital up to Rs 4 crore, turnover up to Rs 40 crore), govt companies, WOS exempt. Patron assists Mumbai companies with demat transition.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-7">
                        <h3 class="faq-expanded__q">Capital gains implications?</h3>
                        <div class="faq-expanded__a"><p>STCG (under 24 months unlisted) at slab rates; LTCG (24+ months) at 12.5%. Non-resident: buyer deducts TDS S195. Cost: actual price or FMV at allotment for ESOP/converted shares. Patron computes and advises on advance tax for Mumbai transferors.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-8">
                        <h3 class="faq-expanded__q">Can shares be gifted?</h3>
                        <div class="faq-expanded__a"><p>Yes. SH-4 with Nil consideration. No stamp duty. Tax: Section 56(2)(x) &ndash; gift from non-relative exceeding Rs 50,000 taxable. Gifts between relatives (as defined) exempt. Patron structures gift transfers for Mumbai families to minimise tax.</p></div>
                    </div>
                </div>
            </div>


            <!-- Quick Answers -->
            <div class="highlight-box" style="margin-top:32px;">
                <p><strong>Quick Answers</strong></p>
                <p><strong>Shares transfer kaise kare?</strong> AOA check karo. ROFR notice do agar required. SH-4 bharo &ndash; dono sign karein. Stamp duty lagao (0.015%). 60 din mein company ko submit karo. Board approval lo. New certificate 30 din mein. Register 7 din mein update.</p>
                <p><strong>Foreign investor ko transfer?</strong> SH-4 + Board ke saath FC-TRS bhi file karo FIRMS pe 60 din mein. FEMA pricing follow karo. Valuation certificate chahiye. Patron teeno saath handle karta hai.</p>
                <p><strong>Gift transfer pe tax?</strong> Stamp duty nahi. Relative se gift toh exempt. Non-relative se Rs 50,000+ toh FMV income Section 56(2)(x) mein.</p>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 18: URGENCY CTA -->
<section class="content-section" style="background: var(--orange-lighter) !important; border-left: 4px solid var(--orange);">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Don't Miss the 60-Day SH-4 Deadline &ndash; Transfer Shares the Right Way</h2>
            <div class="content-text">
                
                <p>The 60-day SH-4 lodgment deadline is binding. FC-TRS has its own 60-day deadline. Rule 9B demat deadline (30 June 2026) means physical transfers are on a countdown. Capital gains implications are significant.</p>
                <p><strong>Transfer your shares today &ndash; <a href="tel:+919459456700">Call +91 945 945 6700</a> or <a href="https://wa.me/919459456700?text=Hi%2C%20I%20need%20share%20transfer%20services%20in%20Mumbai." target="_blank">WhatsApp us</a>.</strong></p>

            </div>
        </div>
    </div>
</section>

<!-- CONCLUSION + CTA BLOCK (Dark) -->
<section class="content-section" style="background: var(--blue) !important;">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title" style="color:#FFFFFF !important;">Get End-to-End Share Transfer in Mumbai</h2>
            <div class="content-text" style="text-align:left;">
                
                <p style="color:rgba(255,255,255,0.85);font-size:16px;line-height:1.7;">Transfer of shares in Mumbai spans the full range &ndash; from Powai startup secondary sales and BKC VC exits to Fort family succession and MNC restructuring, from ESOP sales to strategic stake introductions.</p>
                <p style="color:rgba(255,255,255,0.85);font-size:16px;line-height:1.7;">Patron Accounting's Mumbai office at Marine Lines provides end-to-end: AOA/SHA verification, ROFR management, SH-4, stamp duty, Board approval, certificate issuance, Register update, FC-TRS, FEMA valuation, capital gains, TDS, and Rule 9B demat transition.</p>
                <p style="color:rgba(255,255,255,0.85);font-size:16px;line-height:1.7;">With offices in Pune, Mumbai, Delhi, and Gurugram, 10,000+ businesses served, and 4.9 Google rating, Patron Accounting LLP delivers compliant share transfers across India.</p>

            </div>
            <div style="display:flex;gap:14px;flex-wrap:wrap;margin-top:24px;">
                <a href="tel:+919459456700" style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:var(--orange);color:#fff;border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#128222; Call +91 945 945 6700</a>
                <a href="https://wa.me/919459456700?text=Hi%2C%20I%20need%20share%20transfer%20services%20in%20Mumbai.%20Please%20share%20details." target="_blank" style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:#25D366;color:#fff;border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#128172; WhatsApp Us</a>
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
            <h2 class="section-title" style="text-align:center;margin-bottom:12px;">Share Transfer Across India</h2>
            <p style="text-align:center;color:var(--text-muted);font-size:15px;margin-bottom:40px;">Patron Accounting handles share transfers in major cities with integrated Companies Act, FEMA, and tax compliance.</p>
        
            <div class="pa-city-block" style="margin-bottom:40px;">
                        <div class="pa-block-title">Transfer of Shares in Other Cities</div>
                        <div class="pa-block-sub">Professional share transfer compliance across India</div>
                        <div class="pa-city-grid">
                            <a href="/transfer-of-shares/pune" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Pune</div><div class="pa-card-sub">Maharashtra</div></div></a>
                            <div class="pa-city-card" style="opacity:0.6; pointer-events:none; border:2px solid var(--orange); position:relative;"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Mumbai</div><div class="pa-card-sub">Maharashtra</div></div><span style="position:absolute; top:6px; right:8px; font-size:10px; color:var(--orange); font-weight:700; text-transform:uppercase; letter-spacing:0.5px;">You're here</span></div>
                            <a href="/transfer-of-shares/delhi" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Delhi</div><div class="pa-card-sub">Delhi NCR</div></div></a>
                            <a href="/transfer-of-shares/gurugram" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Gurugram</div><div class="pa-card-sub">Haryana</div></div></a>
                        </div>
                    </div>
                    <div class="pa-city-block">
                        <div class="pa-block-title">Related Services in Mumbai</div>
                        <div class="pa-block-sub">End-to-end corporate compliance</div>
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
            <p>This content is reviewed quarterly for accuracy of Rule 9B deadlines, stamp duty rates, FEMA circulars, and capital gains provisions. Freshness Tier: 1.</p>
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
