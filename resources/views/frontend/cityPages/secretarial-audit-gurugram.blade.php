
@extends('layouts.service-app')

<!-- External Dependencies (loaded by master layout in production) -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Barlow:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,400&family=DM+Sans:opsz,wght@9..40,400;9..40,500;9..40,600;9..40,700&display=swap" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

@section('meta')
    <title>Secretarial Audit Gurugram - MR-3 & Section 204</title>
    <meta name="description" content="CS-assisted secretarial audit in Gurugram. Section 204, Form MR-3, SEBI LODR, listed companies, compliance, corporate governance. Call +91 945 945 6700.">
    <link rel="canonical" href="/secretarial-audit/gurugram">
    <meta name="robots" content="index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1">
    <meta property="og:title" content="Secretarial Audit Gurugram - MR-3 & Section 204">
    <meta property="og:description" content="CS-assisted secretarial audit in Gurugram. Section 204, Form MR-3, SEBI LODR, listed companies, compliance, corporate governance. Call +91 945 945 6700.">
    <meta property="og:url" content="/secretarial-audit/gurugram">
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="Patron Accounting">
    <meta property="og:image" content="https://www.patronaccounting.com/images/og-default-square.png">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="1200">
    <meta property="og:image:type" content="image/png">
    <meta property="og:image:secure_url" content="https://www.patronaccounting.com/images/og-default-square.png">
    <meta property="og:image:alt" content="Patron Accounting - partner you can rely on">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Secretarial Audit Gurugram - MR-3 & Section 204">
    <meta name="twitter:description" content="CS-assisted secretarial audit in Gurugram. Section 204, Form MR-3, SEBI LODR, listed companies, compliance, corporate governance. Call +91 945 945 6700.">
    <meta name="twitter:image" content="https://www.patronaccounting.com/images/og-default-square.png">
@endsection

@section('schema')
    <script type="application/ld+json">{
  "@context": "https://schema.org",
  "@graph": [
    {
      "@type": "Service",
      "name": "Secretarial Audit Service Gurugram | Section 204",
      "description": "CS-assisted secretarial audit in Gurugram. Section 204, Form MR-3, SEBI LODR, listed companies, compliance, corporate governance. Call +91 945 945 6700.",
      "url": "https://www.patronaccounting.com/secretarial-audit/gurugram",
      "serviceType": "Secretarial Audit Service Gurugram | Section 204",
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
        "url": "https://www.patronaccounting.com/secretarial-audit/gurugram",
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
          "name": "Secretarial Audit in India Guide",
          "item": "https://www.patronaccounting.com/secretarial-audit"
        },
        {
          "@type": "ListItem",
          "position": 3,
          "name": "Secretarial Audit Service Gurugram | Section 204",
          "item": "https://www.patronaccounting.com/secretarial-audit/gurugram"
        }
      ]
    },
    {
      "@type": "FAQPage",
      "mainEntity": [
        {
          "@type": "Question",
          "name": "What is a secretarial audit?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Independent compliance audit of non-financial aspects by PCS. Covers Companies Act, SEBI, FEMA, labour laws, Secretarial Standards. Report (Form MR-3) annexed with Board's Report in annual filing."
          }
        },
        {
          "@type": "Question",
          "name": "Who needs secretarial audit?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Mandatory: all listed companies + material unlisted subsidiaries, public companies (capital ≥Rs 50Cr OR turnover ≥Rs 250Cr), any company with bank borrowings ≥Rs 100Cr. Optional: any company voluntarily."
          }
        },
        {
          "@type": "Question",
          "name": "Who can conduct it?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Only a PCS (Company Secretary in Practice) with ICSI Certificate of Practice. For listed entities, PCS must also hold Peer Review Certificate. CAs and cost accountants cannot conduct."
          }
        },
        {
          "@type": "Question",
          "name": "Is it mandatory for private companies?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Generally no. Unless bank/PFI borrowings ≥Rs 100Cr, or subsidiary of public company triggering applicability. Private companies can opt voluntarily for governance assurance."
          }
        },
        {
          "@type": "Question",
          "name": "What is the penalty?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Rs 1L-5L on company, every officer in default, and PCS (if in contravention). Listed entities face SEBI penalties + stock exchange action. Non-compliance impacts reputation and investor confidence."
          }
        },
        {
          "@type": "Question",
          "name": "What is Form MR-3?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Prescribed format for Secretarial Audit Report under Rule 9. Contains PCS certification, laws examined, board process review, observations/qualifications, recommendations. Annexed with Board's Report."
          }
        },
        {
          "@type": "Question",
          "name": "When to appoint auditor?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Ideally at FY start for quarterly reviews. Board resolution + Audit Committee recommendation. MGT-14 filed with ROC. Patron recommends early appointment for comprehensive coverage."
          }
        },
        {
          "@type": "Question",
          "name": "What is the cost?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Unlisted public from Rs 49,999. Listed from Rs 99,999. Private (borrowings) from Rs 39,999. Voluntary from Rs 29,999. Pre-IPO from Rs 99,999. Scope-based pricing. Quick Answers Secretarial audit kya hai? PCS dwara non-financial compliance audit. Companies Act, SEBI, FEMA, labour laws check hoti hai. MR-3 report Board Report ke saath file hota hai. Kisko zaroori hai? Listed companies, public companies (Rs 50Cr capital ya Rs 250Cr turnover), Rs 100Cr+ borrowings wali companies. Penalty kya hai? Rs 1L-5L company + officers par. Listed companies ko SEBI action bhi."
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
                        Secretarial Audit Service in Gurugram: Section 204, MR-3, and Corporate Governance
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
                            <p class="mb-0 text-dark benefit-paragraph"><span>Law:</span> Section 204 Companies Act 2013 + Rule 9 of Companies (Appointment & Remuneration) Rules 2014</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Report:</span> Form MR-3 (annexed with Board's Report under Section 134(3))</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Who Conducts:</span> Only a Company Secretary in Practice (PCS) holding ICSI Certificate of Practice</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Applicability:</span> Listed companies + large public companies (capital/turnover) + companies with Rs 100 Cr+ borrowings</p>
                        </div>
                    </div>

                    <p class="mb-4 fw-bold" style="color: var(--blue); font-size: 15px;">Secretarial audit for listed companies, MNC subsidiaries, and governance-focused businesses across Gurugram.</p>

                    <div class="hero-cta">
                        <a href="tel:+919459456700" class="btn-video text-decoration-none">
                            <span class="play-circle"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="width:14px;height:14px;color:#fff"><path d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/></svg></span>
                            Call +91 945 945 6700
                        </a>
                        <a href="mailto:sales@patronaccounting.com" class="btn-sample text-decoration-none">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="width:18px;height:18px;"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,12 2,6"/></svg>
                            Email Us
                        </a>
                        <a href="https://wa.me/919459456700?text=Hi%2C%20I%20need%20secretarial%20audit%20in%20Gurugram." target="_blank" class="btn-sample text-decoration-none">
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
                                            'service'  => 'Secretarial Audit Service in Gurugram',
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
    'ctaText'    => 'Secretarial audit with Form MR-3, SEBI LODR compliance, and corporate governance from Gurugram.',
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
            <a href="#overview-section" class="toc-btn active">Overview</a><a href="#what-section" class="toc-btn">Applicability</a><a href="#who-section" class="toc-btn">Scope</a><a href="#services-section" class="toc-btn">Services</a><a href="#procedure-section" class="toc-btn">Process</a><a href="#documents-section" class="toc-btn">MR-3 Report</a><a href="#challenges-section" class="toc-btn">Penalties</a><a href="#fees-section" class="toc-btn">Fees</a><a href="#timeline-section" class="toc-btn">Timeline</a><a href="#benefits-section" class="toc-btn">Why Patron</a><a href="#comparison-section" class="toc-btn">Patron vs Others</a><a href="#faq-section" class="toc-btn">FAQs</a>
        </div>
        <button class="toc-arrow right" id="tocRight">&#10095;</button>
    </div>
</div>

<!-- SECTION 2: OVERVIEW / INTRO + TL;DR -->
<section class="content-section" id="overview-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Secretarial Audit in Gurugram: Section 204, Form MR-3, and Governance Compliance</h2>
            <div class="content-text">
                <div class="highlight-box" style="margin-bottom:20px;">
                    <p><strong>&#128204; TL;DR - Secretarial Audit Service in Gurugram Services at a Glance</strong></p>
                    <p>Secretarial audit under Section 204: independent compliance audit by PCS covering Companies Act, SEBI, FEMA, labour laws, Secretarial Standards. Form MR-3 annexed with Board's Report. Mandatory for: listed companies, public companies (paid-up ≥Rs 50Cr OR turnover ≥Rs 250Cr), any company with bank borrowings ≥Rs 100Cr. Penalty: Rs 1L-5L on company + officers. PCS must hold ICSI COP (+ Peer Review for listed).</p>
                </div>
                <p>Gurugram hosts many companies requiring secretarial audit. For a comprehensive overview, see our <a href="/secretarial-audit">Secretarial Audit</a> national guide.</p><div class="table-responsive-wrapper"><table><thead><tr><th>Category</th><th>Threshold</th><th>Report</th></tr></thead><tbody><tr><td>Listed Company (all)</td><td>No threshold - all listed</td><td>MR-3 + ASCR to stock exchange</td></tr><tr><td>Public Company</td><td>Paid-up ≥ Rs 50 Cr OR Turnover ≥ Rs 250 Cr</td><td>MR-3 with Board's Report</td></tr><tr><td>Any Company (borrowings)</td><td>Bank/PFI borrowings ≥ Rs 100 Cr</td><td>MR-3 with Board's Report</td></tr><tr><td>Material Unlisted Subsidiary</td><td>Of listed company</td><td>MR-3 + SEBI LODR compliance</td></tr><tr><td>Voluntary</td><td>Any company (optional)</td><td>Scope as agreed</td></tr></tbody></table></div><p</p>
                <p>Only a PCS (Company Secretary in Practice with ICSI COP) can conduct secretarial audit. For listed entities, PCS must hold Peer Review Certificate. Patron's CS team provides comprehensive secretarial audit: applicability check, auditor appointment, quarterly reviews, MR-3, and governance advisory.</p>
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
                <h2 class="section-title">Applicability of Secretarial Audit</h2>
                <div class="content-text what-is-definition">
                    
                    <p><strong>Mandatory for:</strong></p><p><strong>1. Every listed company</strong> and its material unlisted subsidiaries (SEBI LODR Regulation 24A).</p><p><strong>2. Every public company</strong> with paid-up share capital ≥ Rs 50 crore OR turnover ≥ Rs 250 crore.</p><p><strong>3. Every company (including private)</strong> with outstanding bank/PFI borrowings ≥ Rs 100 crore at any time during the year.</p><p><strong>Voluntary:</strong> Any company can opt for secretarial audit for governance assurance, investor confidence, pre-IPO readiness, or lender requirements.</p><p><strong>Gurugram context:</strong> DLF Cyber City listed IT companies, Golf Course Road MNC subsidiaries with Rs 100Cr+ borrowings, Udyog Vihar manufacturers with Rs 250Cr+ turnover, and pre-IPO startups. See <a href="#">Annual Compliance</a>.</p>

                </div>
                <div class="highlight-box" style="margin-top:20px;">
                    <p><strong>Key Terms for Secretarial Audit Service in Gurugram:</strong></p>
                    <p><strong>Section 204:</strong> Companies Act mandate for secretarial audit by PCS for prescribed class of companies.</p><p><strong>Form MR-3:</strong> Prescribed format for Secretarial Audit Report - annexed with Board's Report under Section 134(3).</p><p><strong>PCS:</strong> Company Secretary in Practice holding ICSI Certificate of Practice. Only PCS can conduct secretarial audit.</p><p><strong>SEBI LODR Regulation 24A:</strong> Additional secretarial audit requirements for listed entities + Annual Secretarial Compliance Report (ASCR).</p><p><strong>Peer Review:</strong> ICSI Peer Review Certificate mandatory for PCS auditing listed entities.</p>

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
                            <text x="100" y="170" font-size="10" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial, sans-serif">Secretarial Audit Service in Gurugram</text>
                        </svg>
                    </div>
                    <div class="illustration-badge">
                        <span>Secretarial Audit</span>
                        <strong>MR-3 Report</strong>
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
            <h2 class="section-title">Scope of Secretarial Audit</h2>
            <div class="content-text">
                
                <p>The secretarial audit examines compliance with:</p><p><strong>Companies Act 2013:</strong> Board composition, meetings, resolutions, ROC filings, related party transactions, KMP appointments, dividend compliance, share transfer, CSR.</p><p><strong>SEBI Regulations (listed):</strong> LODR, insider trading, SAST, buyback, issue of shares, related party transactions.</p><p><strong>FEMA:</strong> FDI compliance, ODI, external commercial borrowings, downstream investments.</p><p><strong>Secretarial Standards:</strong> SS-1 (Board Meetings) and SS-2 (General Meetings) issued by ICSI.</p><p><strong>Labour Laws:</strong> PF, ESI, Shops & Establishments, Industrial Disputes, Payment of Wages/Bonus.</p><p><strong>Other Applicable Laws:</strong> Industry-specific regulations, environmental laws, competition law.</p>

            </div>
            </div>
        </div>
    </div>
</section>

<!-- SECTION 5: OUR SERVICES -->
<section class="content-section" id="services-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Secretarial Audit Services</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Service</th><th>What We Do</th></tr></thead>
                    <tbody>
                        <tr><td>Full-Scope Secretarial Audit (MR-3)</td><td>Companies Act + SEBI + FEMA + SS + labour laws + applicable statutes. Quarterly review + annual MR-3 report</td></tr><tr><td>Auditor Appointment (MGT-14)</td><td>Board resolution, Audit Committee recommendation, consent letter, MGT-14 filing with ROC Haryana</td></tr><tr><td>SEBI LODR Compliance Audit</td><td>Regulation 24A secretarial audit + Annual Secretarial Compliance Report (ASCR) to stock exchanges</td></tr><tr><td>Pre-IPO Governance Readiness</td><td>Comprehensive governance assessment, board composition, committee formation, mock MR-3, SS implementation</td></tr><tr><td>Voluntary Secretarial Audit</td><td>For private companies seeking governance assurance for investors, lenders, or internal strengthening</td></tr><tr><td>Compliance Remediation</td><td>Filing pending forms, regularising board composition, rectifying non-compliances discovered during audit</td></tr>

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
            <h2 class="section-title">Secretarial Audit Process</h2>
            <p class="section-subtitle" style="text-align:left;max-width:100%;">From auditor appointment to Form MR-3 and Board's Report annexure.</p>
        </header>
        <div class="steps-container">
            <div class="step-card"><div class="step-content"><span class="step-badge">Phase 1</span><h3 class="step-title">Appointment + Planning</h3><p class="step-description">Board appoints PCS as secretarial auditor (MGT-14 filed with ROC). Audit Committee recommendation (if applicable). Engagement letter. Audit plan covering all applicable laws. Quarterly review schedule set.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>PCS appointed</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Plan ready</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="15" y="5" width="90" height="70" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><text x="60" y="40" font-size="8" fill="#E8712C" font-weight="800" text-anchor="middle" font-family="Arial">PCS</text></svg></div><span class="illustration-label">Appointed</span><span class="step-number-large">01</span></div></div></div><div class="step-card"><div class="step-content"><span class="step-badge">Phase 2</span><h3 class="step-title">Audit Execution + Quarterly Reviews</h3><p class="step-description">PCS conducts compliance checks: Companies Act filings, Board/GM minutes, SEBI compliance (if listed), FEMA, labour laws, Secretarial Standards. Quarterly observations shared with management. Non-compliances flagged for remediation.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Compliance checked</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Quarterly reviewed</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="20" y="15" width="80" height="50" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><text x="60" y="40" font-size="8" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">AUDIT</text></svg></div><span class="illustration-label">Reviewed</span><span class="step-number-large">02</span></div></div></div><div class="step-card"><div class="step-content"><span class="step-badge">Phase 3</span><h3 class="step-title">MR-3 Report + Board's Report</h3><p class="step-description">PCS issues Form MR-3 with observations and qualifications. Report annexed with Board's Report (Section 134(3)). Board responds to qualifications. Filed with ROC as part of annual filing. ASCR filed with stock exchange (if listed).</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>MR-3 issued</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Board's Report done</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="20" y="10" width="80" height="60" rx="8" fill="#E8F5E9" stroke="#25D366" stroke-width="2"/><path d="M52 40l5 5 12-12" stroke="#25D366" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/></svg></div><span class="illustration-label">Compliant</span><span class="step-number-large">03</span></div></div></div>

        </div>
    </div>
</section>

<!-- SECTION 8: DOCUMENTS REQUIRED -->
<section class="content-section" id="documents-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Form MR-3 - Secretarial Audit Report</h2>
            <div class="content-text">
                
                <div class="table-responsive-wrapper"><table><thead><tr><th>MR-3 Component</th><th>What It Covers</th></tr></thead><tbody><tr><td>PCS Certification</td><td>Independent certification of compliance status</td></tr><tr><td>Laws Examined</td><td>Companies Act, SEBI, FEMA, SS, labour laws, industry-specific</td></tr><tr><td>Board Process Review</td><td>Board composition, meetings, quorum, resolutions, committees</td></tr><tr><td>Specific Observations</td><td>Qualifications on non-compliances found during audit</td></tr><tr><td>Recommendations</td><td>Improvements for governance and compliance</td></tr><tr><td>Annexure</td><td>With Board's Report under Section 134(3)</td></tr></tbody></table></div><div class="highlight-box" style="margin-top:20px;"><p><strong>Board must respond</strong> to qualifications in the secretarial audit report within the Board's Report. Qualifications are visible to shareholders, regulators, and the public. Patron helps remediate non-compliances before MR-3 issuance to minimise qualifications. See <a href="/legal-drafting">Legal Drafting</a>.</p></div>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 9: CHALLENGES -->
<section class="content-section" id="challenges-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Penalties for Non-Compliance</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Challenge</th><th>Impact</th><th>How Patron Accounting Solves It</th></tr></thead>
                    <tbody>
                        <tr><td>Company Penalty</td><td>Rs 1,00,000 to Rs 5,00,000</td><td>For not conducting mandatory secretarial audit or not annexing MR-3 with Board's Report</td></tr><tr><td>Officer in Default</td><td>Rs 1,00,000 to Rs 5,00,000</td><td>Directors, KMP responsible for compliance failure</td></tr><tr><td>PCS Penalty</td><td>Rs 1,00,000 to Rs 5,00,000</td><td>If PCS is in contravention (false reporting)</td></tr><tr><td>SEBI Action (Listed)</td><td>SEBI penalties + stock exchange action</td><td>For non-compliance with Regulation 24A LODR</td></tr><tr><td>Reputation Impact</td><td>Investor confidence + governance rating</td><td>Qualifications in MR-3 are public record</td></tr>

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
            <h2 class="section-title">Secretarial Audit Fees</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Fee Component</th><th>Amount</th></tr></thead>
                    <tbody>
                        <tr><td>Unlisted Public Company (MR-3)</td><td>Starting from Rs 49,999-99,999 (Exl GST) | Full-scope Section 204 audit</td></tr><tr><td>Listed Company (MR-3 + ASCR)</td><td>Starting from Rs 99,999-1,99,999 (Exl GST) | Section 204 + SEBI LODR + ASCR</td></tr><tr><td>Private Company (Borrowings)</td><td>Starting from Rs 39,999-79,999 (Exl GST) | Companies Act + FEMA + applicable laws</td></tr><tr><td>Voluntary Secretarial Audit</td><td>Starting from Rs 29,999-59,999 (Exl GST) | Scope as agreed</td></tr><tr><td>Pre-IPO Governance Readiness</td><td>Starting from Rs 99,999-1,99,999 (Exl GST) | Governance assessment + mock audit</td></tr><tr><td>Compliance Remediation</td><td>Starting from Rs 19,999-49,999 (Exl GST) | Filing pending + regularisation</td></tr>

                    </tbody>
                </table>
                </div>
                <p style="margin-top:16px;font-size:13px;color:var(--text-muted);font-style:italic;">All fees and charges listed are indicative only and do not constitute a binding offer. Final amounts may vary depending on the volume of work and the complexity involved.</p>
                <p style="margin-top:16px;">Professional service charges for drafting, filing, and representation are separate from the statutory fees. The exact fee depends on the complexity of the case, disputed amount, and number of hearings required. Contact us for a detailed quote.</p>
                <p style="margin-top:16px;"><strong>Get a free Secretarial Audit Service in Gurugram consultation - <a href="tel:+919459456700">Call +91 945 945 6700</a> or <a href="https://wa.me/919459456700?text=Hi%2C%20I%20need%20secretarial%20audit%20in%20Gurugram." target="_blank">WhatsApp us</a>. No-obligation assessment.</strong></p>
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
                        <tr><td>Gurugram Office</td><td>Golf Course Extension Road - secretarial audit for Cyber City listed companies, Golf Course Road MNC subsidiaries, Udyog Vihar manufacturers</td></tr><tr><td>PCS-Led Audit</td><td>Conducted by qualified PCS with ICSI COP. Peer Review Certificate for listed entity audits</td></tr><tr><td>Quarterly Reviews</td><td>Ongoing compliance monitoring throughout the year. Issues flagged and remediated before annual MR-3</td></tr><tr><td>Pre-IPO Expertise</td><td>Governance readiness assessment for companies planning to list. Mock MR-3. Board composition advisory</td></tr><tr><td>Remediation Before Report</td><td>Non-compliances remediated during audit to minimise qualifications in final MR-3 report</td></tr>

                    </tbody>
                </table>
                </div>
                <div class="highlight-box" style="margin-top:16px;">
                    
                    <p><strong>Critical:</strong> Appoint auditor at FY start for quarterly reviews. MR-3 annexed with Board's Report (annual filing). Penalty Rs 1L-5L on company + officers. Listed entities: ASCR to stock exchange. Qualifications are public. Remediate before MR-3 issuance.</p>

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
            <h2 class="section-title">Patron vs Other Firms</h2>
        </div>
        <div class="features-grid"><article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><h3 class="feature-title">Patron: Quarterly Reviews</h3><p class="feature-text">Ongoing compliance monitoring. Issues flagged quarterly. Remediated before year-end. Fewer qualifications in MR-3.</p></article><article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 9v2m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><h3 class="feature-title">Others: Year-End Only</h3><p class="feature-text">Audit only at year-end. Non-compliances discovered too late to fix. Multiple qualifications in MR-3. Reputation risk.</p></article><article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M14 2H6a2 2 0 00-2 2v16a2 2 0 002 2h12a2 2 0 002-2V8z"/><path d="M14 2v6h6M16 13H8M16 17H8"/></svg></div><h3 class="feature-title">Patron: Remediation</h3><p class="feature-text">Non-compliances remediated during audit year. Pending forms filed. Board composition regularised. Governance strengthened.</p></article><article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><path d="M12 6v6l4 2"/></svg></div><h3 class="feature-title">Patron: Pre-IPO</h3><p class="feature-text">Governance readiness for listing. Mock MR-3. Board advisory. Committee formation. SEBI LODR preparation.</p></article></div>
    </div>
</section>

<!-- SECTION 12A: SOCIAL PROOF -->
<section class="content-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Trusted by 10,000+ Businesses Across India</h2>
            <div class="content-text">
                
                <p><strong>Trust Banner:</strong> 10,000+ Businesses Served | 4.9 Google Rating | 50,000+ Documents Filed | 15+ Years of Practice</p><blockquote style="border-left:3px solid var(--orange);padding:16px 20px;margin:20px 0;background:var(--orange-lighter);border-radius:0 var(--radius-sm) var(--radius-sm) 0;"><p style="font-style:italic;margin-bottom:8px;">"MNC subsidiary with Rs 150Cr borrowings. Patron conducted secretarial audit with quarterly reviews. Zero qualifications in MR-3. Board commended the governance improvement."</p><p style="font-weight:700;font-size:14px;margin:0;">- Company Secretary, Golf Course Road MNC</p></blockquote><blockquote style="border-left:3px solid var(--orange);padding:16px 20px;margin:20px 0;background:var(--orange-lighter);border-radius:0 var(--radius-sm) var(--radius-sm) 0;"><p style="font-style:italic;margin-bottom:8px;">"Pre-IPO company. Patron conducted governance readiness assessment, identified 12 compliance gaps, remediated all before mock MR-3. Listed successfully 8 months later."</p><p style="font-weight:700;font-size:14px;margin:0;">- CFO, Tech Company, DLF Cyber City</p></blockquote>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 13: SELF-FILING vs PROFESSIONAL COMPARISON -->
<section class="content-section" id="comparison-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Patron vs Other CS Firms</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Factor</th><th>Patron Managed</th><th>Typical CS Firm</th></tr></thead>
                    <tbody>
                        <tr><td>Audit Approach</td><td>Quarterly reviews + annual MR-3</td><td>Year-end audit only</td></tr><tr><td>Remediation</td><td>Fix non-compliances during audit year</td><td>Report only, no remediation</td></tr><tr><td>SEBI LODR (Listed)</td><td>MR-3 + ASCR + Regulation 24A complete</td><td>MR-3 only</td></tr><tr><td>Pre-IPO</td><td>Governance readiness + mock MR-3</td><td>Not offered</td></tr><tr><td>Qualifications</td><td>Minimised through proactive compliance</td><td>Often multiple qualifications</td></tr><tr><td>Pricing</td><td>From Rs 29,999 (voluntary) / Rs 49,999 (mandatory)</td><td>Variable</td></tr>

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
                
                <ul><li><a href="/secretarial-audit">Secretarial Audit (National)</a></li><li><a href="#">Annual Compliance</a></li><li><a href="/appointment-of-auditor">Auditor Appointment</a></li><li><a href="/legal-drafting">Legal Drafting</a></li><li><a href="/fdi-compliance">FDI Compliance</a></li></ul>

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
                
                <p><strong>Governing Law:</strong> Companies Act, 2013 (S.204) | Companies (Appointment & Remuneration) Rules, 2014 (Rule 9) | SEBI LODR, 2015 (Reg 24A) | CS Act, 1980</p><p><strong>Key Sections:</strong> S.204 (mandate) | S.134(3) (Board's Report) | S.143(14) (PCS powers) | Rule 9 (class + Form MR-3)</p><p><strong>Thresholds:</strong> Listed (all) | Public: capital ≥Rs 50Cr OR turnover ≥Rs 250Cr | Any company: borrowings ≥Rs 100Cr</p><p><strong>ROC:</strong> ROC Haryana at Chandigarh (from 16 Feb 2026)</p><p><strong>Penalty:</strong> Rs 1L-5L on company + officers + PCS. SEBI action for listed entities.</p>

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
                    <h2 class="faq-expanded__title">FAQs - Secretarial Audit in Gurugram</h2>
                    <p class="faq-expanded__lead">Common questions about secretarial audit, Section 204, Form MR-3, applicability, and PCS requirements for Gurugram companies.</p>
                    @include('partials.bigin-form', [
                        'variant'  => 'compact',
                        'service'  => 'Secretarial Audit Service in Gurugram',
                        'city'     => 'Gurugram',
                    ])
                </aside>
                <div class="faq-expanded__list">
                    <div class="faq-expanded__item" id="faq-1">
                        <h3 class="faq-expanded__q">What is a secretarial audit?</h3>
                        <div class="faq-expanded__a"><p>Independent compliance audit of non-financial aspects by PCS. Covers Companies Act, SEBI, FEMA, labour laws, Secretarial Standards. Report (Form MR-3) annexed with Board's Report in annual filing.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-2">
                        <h3 class="faq-expanded__q">Who needs secretarial audit?</h3>
                        <div class="faq-expanded__a"><p>Mandatory: all listed companies + material unlisted subsidiaries, public companies (capital ≥Rs 50Cr OR turnover ≥Rs 250Cr), any company with bank borrowings ≥Rs 100Cr. Optional: any company voluntarily.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-3">
                        <h3 class="faq-expanded__q">Who can conduct it?</h3>
                        <div class="faq-expanded__a"><p>Only a PCS (Company Secretary in Practice) with ICSI Certificate of Practice. For listed entities, PCS must also hold Peer Review Certificate. CAs and cost accountants cannot conduct.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-4">
                        <h3 class="faq-expanded__q">Is it mandatory for private companies?</h3>
                        <div class="faq-expanded__a"><p>Generally no. Unless bank/PFI borrowings ≥Rs 100Cr, or subsidiary of public company triggering applicability. Private companies can opt voluntarily for governance assurance.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-5">
                        <h3 class="faq-expanded__q">What is the penalty?</h3>
                        <div class="faq-expanded__a"><p>Rs 1L-5L on company, every officer in default, and PCS (if in contravention). Listed entities face SEBI penalties + stock exchange action. Non-compliance impacts reputation and investor confidence.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-6">
                        <h3 class="faq-expanded__q">What is Form MR-3?</h3>
                        <div class="faq-expanded__a"><p>Prescribed format for Secretarial Audit Report under Rule 9. Contains PCS certification, laws examined, board process review, observations/qualifications, recommendations. Annexed with Board's Report.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-7">
                        <h3 class="faq-expanded__q">When to appoint auditor?</h3>
                        <div class="faq-expanded__a"><p>Ideally at FY start for quarterly reviews. Board resolution + Audit Committee recommendation. MGT-14 filed with ROC. Patron recommends early appointment for comprehensive coverage.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-8">
                        <h3 class="faq-expanded__q">What is the cost?</h3>
                        <div class="faq-expanded__a"><p>Unlisted public from Rs 49,999. Listed from Rs 99,999. Private (borrowings) from Rs 39,999. Voluntary from Rs 29,999. Pre-IPO from Rs 99,999. Scope-based pricing.</p></div>
                    </div>
                </div>
            </div>


            <!-- Quick Answers -->
            <div class="highlight-box" style="margin-top:32px;">
                <p><strong>Quick Answers</strong></p>
                <p><strong>Secretarial audit kya hai?</strong> PCS dwara non-financial compliance audit. Companies Act, SEBI, FEMA, labour laws check hoti hai. MR-3 report Board Report ke saath file hota hai.</p><p><strong>Kisko zaroori hai?</strong> Listed companies, public companies (Rs 50Cr capital ya Rs 250Cr turnover), Rs 100Cr+ borrowings wali companies.</p><p><strong>Penalty kya hai?</strong> Rs 1L-5L company + officers par. Listed companies ko SEBI action bhi.</p>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 18: URGENCY CTA -->
<section class="content-section" style="background: var(--orange-lighter) !important; border-left: 4px solid var(--orange);">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Appoint Secretarial Auditor at FY Start</h2>
            <div class="content-text">
                
                <p>Quarterly reviews prevent year-end surprises. Remediate non-compliances before MR-3 issuance. Minimise qualifications. Penalty Rs 1L-5L for non-compliance. Qualifications are public record. Professional governance builds investor confidence.</p><p><strong><a href="tel:+919459456700">Call +91 945 945 6700</a> or <a href="https://wa.me/919459456700?text=Hi%2C%20I%20need%20secretarial%20audit%20in%20Gurugram." target="_blank">WhatsApp us</a>.</strong></p>

            </div>
        </div>
    </div>
</section>

<!-- CONCLUSION + CTA BLOCK (Dark) -->
<section class="content-section" style="background: var(--blue) !important;">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title" style="color:#FFFFFF !important;">Get Expert Secretarial Audit in Gurugram</h2>
            <div class="content-text" style="text-align:left;">
                
                <p style="color:rgba(255,255,255,0.85);">Secretarial audit is critical governance compliance for listed companies, large public companies, and companies with significant borrowings. Independent PCS assurance of legal compliance strengthens governance, investor confidence, and regulatory standing.</p><p style="color:rgba(255,255,255,0.85);">Patron Accounting's Gurugram office provides comprehensive services: applicability check, auditor appointment, quarterly reviews, Form MR-3, ASCR, compliance remediation, and pre-IPO readiness.</p><p style="color:rgba(255,255,255,0.85);">With 10,000+ businesses served, a 4.9 Google rating, and 50,000+ documents filed, Patron Accounting LLP is a trusted corporate governance partner across Gurugram, NCR, and India.</p>

            </div>
            <div style="display:flex;gap:14px;flex-wrap:wrap;margin-top:24px;">
                <a href="tel:+919459456700" style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:var(--orange);color:#fff;border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#128222; Call +91 945 945 6700</a>
                <a href="https://wa.me/919459456700?text=Hi%2C%20I%20need%20secretarial%20audit%20in%20Gurugram." target="_blank" style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:#25D366;color:#fff;border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#128172; WhatsApp Us</a>
                <a href="mailto:sales@patronaccounting.com?subject=Secretarial%20Audit%20Gurugram&body=Hi%2C%20I%20need%20secretarial%20audit." style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:transparent;color:#fff;border:2px solid rgba(255,255,255,0.3);border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#9993;&#65039; Email Us</a>
            </div>
            <p style="color:rgba(255,255,255,0.7);font-size:13px;margin-top:16px;">Book a Free Consultation - No Obligation.</p>
        </div>
    </div>
</section>

<!-- GSTAT STATE BENCH CITY PAGES (32 Pages) -->
<section class="content-section" style="padding:48px 32px;background:var(--gray-50);">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title" style="text-align:center;margin-bottom:12px;">Secretarial Audit - Available Cities</h2>
            <p style="text-align:center;color:var(--text-muted);font-size:15px;margin-bottom:40px;">Expert secretarial audit services across major Indian cities</p>
         
            <div class="pa-city-block" style="margin-bottom:40px;"><div class="pa-block-title">City-Wise Secretarial Audit</div><div class="pa-block-sub">Select your city</div><div class="pa-city-grid"><a href="/secretarial-audit/pune" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Pune</div><div class="pa-card-sub">Maharashtra</div></div></a><a href="/secretarial-audit/mumbai" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Mumbai</div><div class="pa-card-sub">Maharashtra</div></div></a><a href="/secretarial-audit/delhi" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Delhi</div><div class="pa-card-sub">Delhi NCR</div></div></a><div class="pa-city-card" style="opacity:0.6; pointer-events:none; border:2px solid var(--orange); position:relative;"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Gurugram</div><div class="pa-card-sub">Haryana</div></div><span style="position:absolute; top:6px; right:8px; font-size:10px; color:var(--orange); font-weight:700; text-transform:uppercase; letter-spacing:0.5px;">You're here</span></div></div></div><div class="pa-city-block"><div class="pa-block-title">Related Services in Gurugram</div><div class="pa-block-sub">End-to-end compliance</div><div class="pa-cross-grid"><a href="/private-limited-company-compliance/gurugram" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Annual Compliance</div><div class="pa-card-sub">Gurugram</div></div></a><a href="/appointment-of-auditor/gurugram" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Auditor Appointment</div><div class="pa-card-sub">Gurugram</div></div></a><a href="/legal-drafting/gurugram" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Legal Drafting</div><div class="pa-card-sub">Gurugram</div></div></a><a href="/fdi-compliance/gurugram" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">FDI Compliance</div><div class="pa-card-sub">Gurugram</div></div></a><a href="/accounting-services/gurugram" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Accounting Services</div><div class="pa-card-sub">Gurugram</div></div></a><a href="/income-tax-return-filing/gurugram" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Income Tax Return</div><div class="pa-card-sub">Gurugram</div></div></a></div></div>
        </div>
    </div>
</section>

<!-- CONTENT FRESHNESS FOOTER -->
<section class="content-section" style="padding:32px;">
    <div class="content-container">
        <div class="text-content" style="font-size:13px;color:var(--text-muted);">
            <p><strong>Content Created:</strong> 03 April 2026 &nbsp;|&nbsp; <strong>Last Updated:</strong> <span id="lastUpdatedFooter">03 April 2026</span> &nbsp;|&nbsp; <strong>Next Review:</strong> 03 July 2026 &nbsp;|&nbsp; <strong>Reviewed By:</strong> CA &amp; CS Team, Patron Accounting LLP</p>
            <p>This page is reviewed quarterly. Section 204, Rule 9, SEBI LODR Regulation 24A, and applicability thresholds are verified.</p>
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
