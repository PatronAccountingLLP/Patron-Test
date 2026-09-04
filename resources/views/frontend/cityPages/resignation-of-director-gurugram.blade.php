
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
    <title>Resignation of Director Gurugram - DIR-11 & DIR-12</title>
    <meta name="description" content="CA/CS-assisted director resignation in Gurugram. Section 168, DIR-11, DIR-12, effective date, co-founder exit, foreign director. Serving Cyber City, Golf Course Road. Call +91 945 945 6700.">
    <link rel="canonical" href="/resignation-of-director/gurugram">
    <meta name="robots" content="index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1">
    <meta property="og:title" content="Resignation of Director Gurugram - DIR-11 & DIR-12">
    <meta property="og:description" content="CA/CS-assisted director resignation in Gurugram. Section 168, DIR-11, DIR-12, effective date, co-founder exit, foreign director. Serving Cyber City, Golf Course Road. Call +91 945 945 6700.">
    <meta property="og:url" content="/resignation-of-director/gurugram">
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="Patron Accounting">
    <meta property="og:image" content="https://www.patronaccounting.com/images/og-default-square.png">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="1200">
    <meta property="og:image:type" content="image/png">
    <meta property="og:image:secure_url" content="https://www.patronaccounting.com/images/og-default-square.png">
    <meta property="og:image:alt" content="Patron Accounting - partner you can rely on">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Resignation of Director Gurugram - DIR-11 & DIR-12">
    <meta name="twitter:description" content="CA/CS-assisted director resignation in Gurugram. Section 168, DIR-11, DIR-12, effective date, co-founder exit, foreign director. Serving Cyber City, Golf Course Road. Call +91 945 945 6700.">
    <meta name="twitter:image" content="https://www.patronaccounting.com/images/og-default-square.png">
@endsection

@section('schema')
    <script type="application/ld+json">{
  "@context": "https://schema.org",
  "@graph": [
    {
      "@type": "Service",
      "name": "Resignation of Director Gurugram | DIR-11",
      "description": "CA/CS-assisted director resignation in Gurugram. Section 168, DIR-11, DIR-12, effective date, co-founder exit, foreign director. Serving Cyber City, Golf Course Road. Call +91 945 945 6700.",
      "url": "https://www.patronaccounting.com/resignation-of-director/gurugram",
      "serviceType": "Resignation of Director Gurugram | DIR-11",
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
          "name": "Resignation of Director in India",
          "item": "https://www.patronaccounting.com/resignation-of-director"
        },
        {
          "@type": "ListItem",
          "position": 3,
          "name": "Resignation of Director Gurugram | DIR-11",
          "item": "https://www.patronaccounting.com/resignation-of-director/gurugram"
        }
      ]
    },
    {
      "@type": "FAQPage",
      "mainEntity": [
        {
          "@type": "Question",
          "name": "How does a director resign?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Submit written resignation letter. Board takes note (cannot refuse). Company files DIR-12 within 30 days. Director may file DIR-11. Effective from later of receipt or specified date. Patron manages complete process."
          }
        },
        {
          "@type": "Question",
          "name": "Can the Board refuse resignation?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "No. Section 168 requires Board to take note. Board has no power to refuse, reject, or hold resignation. Takes effect per its terms. If company delays DIR-12, director files DIR-11 independently."
          }
        },
        {
          "@type": "Question",
          "name": "Is DIR-11 mandatory?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Section 168(1) says 'may' - technically optional. But Patron strongly recommends filing for independent ROC record. Especially important when company delays DIR-12, as DIR-11 provides director's own evidence."
          }
        },
        {
          "@type": "Question",
          "name": "What if DIN is deactivated?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Cannot sign DIR-11 on MCA with deactivated DIN. Reactivate first: DIR-3 KYC + Rs 5,000 (3-7 days). Then file DIR-11. Company can file DIR-12 regardless of director's DIN status."
          }
        },
        {
          "@type": "Question",
          "name": "Is resigned director still liable?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Yes. Section 168(2) proviso: liable for offences during tenure even after resignation. Resignation does not provide immunity from past non-compliance, fraud, or violations."
          }
        },
        {
          "@type": "Question",
          "name": "Can foreign director resign remotely?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Yes. Resignation by email + courier. Company files DIR-12 without foreign DSC. For DIR-11: authorise CA/CS or resident director to sign on behalf (amended Rule 16). No India travel needed."
          }
        },
        {
          "@type": "Question",
          "name": "What if company doesn't file DIR-12?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Director name stays on MCA Master Data = liability risk. Director should file DIR-11 independently. If company persists, approach ROC or NCLT. Patron assists directors in this situation."
          }
        },
        {
          "@type": "Question",
          "name": "What is the cost?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Standard (DIR-12 only) from Rs 2,999. With DIR-11: Rs 3,999. Co-founder exit: Rs 7,999+. Foreign director: Rs 4,999+. DIN reactivation + resignation: Rs 4,999 + Rs 5,000 govt fee. Quick Answers Director resign kaise karta hai? Company ko written letter deta hai. Board note karti hai (refuse nahi kar sakti). Company DIR-12, director DIR-11 file karta hai. Resign ke baad bhi liability? Haan. Tenure ke offences ke liye liable rehta hai. DIN deactivate hai toh? Pehle DIR-3 KYC file karo (Rs 5,000). Phir DIR-11. Company ka DIR-12 independent hai."
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
                        Resignation of Director in Gurugram: Section 168, DIR-11, DIR-12, and Compliance
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
                            <p class="mb-0 text-dark benefit-paragraph"><span>Voluntary Act:</span> Director gives written notice to the company (Board cannot refuse)</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Effective Date:</span> Later of (a) date company receives notice OR (b) date specified in notice</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>DIR-12 (Company):</span> File with ROC Haryana within 30 days of receiving resignation (mandatory)</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>DIR-11 (Director):</span> Director may forward copy of resignation to ROC within 30 days (recommended)</p>
                        </div>
                    </div>

                    <p class="mb-4 fw-bold" style="color: var(--blue); font-size: 15px;">Director resignation for co-founder exits, nominee replacements, foreign directors, and family succession across Gurugram.</p>

                    <div class="hero-cta">
                        <a href="tel:+919459456700" class="btn-video text-decoration-none">
                            <span class="play-circle"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="width:14px;height:14px;color:#fff"><path d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/></svg></span>
                            Call +91 945 945 6700
                        </a>
                        <a href="mailto:sales@patronaccounting.com" class="btn-sample text-decoration-none">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="width:18px;height:18px;"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,12 2,6"/></svg>
                            Email Us
                        </a>
                        <a href="https://wa.me/919459456700?text=Hello%2C%20I%20just%20visited%20your%20Resignation%20of%20Director%20in%20Gurugram%20page.%20I%20would%20like%20to%20know%20more%20about%20it." target="_blank" class="btn-sample text-decoration-none" rel="noopener">
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
                                            'service'  => 'Resignation of Director in Gurugram',
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
    'ctaText'    => 'Director resignation with DIR-11, DIR-12, co-founder exit, and foreign director support from Gurugram.',
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
            <a href="#overview-section" class="toc-btn active">Overview</a><a href="#what-section" class="toc-btn">Process</a><a href="#who-section" class="toc-btn">Effective Date</a><a href="#services-section" class="toc-btn">DIR-11 vs DIR-12</a><a href="#procedure-section" class="toc-btn">Services</a><a href="#documents-section" class="toc-btn">Documents</a><a href="#challenges-section" class="toc-btn">Scenarios</a><a href="#fees-section" class="toc-btn">Fees</a><a href="#timeline-section" class="toc-btn">Timeline</a><a href="#benefits-section" class="toc-btn">Why Patron</a><a href="#comparison-section" class="toc-btn">Foreign Dir.</a><a href="#faq-section" class="toc-btn">FAQs</a>
        </div>
        <button class="toc-arrow right" id="tocRight">&#10095;</button>
    </div>
</div>

<!-- SECTION 2: OVERVIEW / INTRO + TL;DR -->
<section class="content-section" id="overview-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Director Resignation in Gurugram: Process, Forms, and Post-Resignation Obligations</h2>
            <div class="content-text">
                <div class="highlight-box" style="margin-bottom:20px;">
                    <p><strong>&#128204; TL;DR - Resignation of Director in Gurugram Services at a Glance</strong></p>
                    <p>Under Section 168, a director resigns by giving written notice. Board must take note (cannot refuse). Company files DIR-12 with ROC Haryana within 30 days. Director may file DIR-11 within 30 days. Effective date: later of receipt or specified date. Director remains liable for tenure offences. DIN remains active - DIR-3 KYC continues (triennial from March 2026).</p>
                </div>
                <p>Director resignation is the most common board change in Gurugram. For a comprehensive overview, see our <a href="/resignation-of-director">Resignation of Director</a> national guide.</p><div class="table-responsive-wrapper"><table><thead><tr><th>Parameter</th><th>Resignation (Section 168)</th><th>Removal (Section 169)</th></tr></thead><tbody><tr><td>Initiated By</td><td>Director (voluntary)</td><td>Shareholders (against wishes)</td></tr><tr><td>Board's Role</td><td>Take note (cannot refuse)</td><td>Convene EGM</td></tr><tr><td>Resolution</td><td>No shareholder resolution</td><td>Ordinary Resolution</td></tr><tr><td>Special Notice</td><td>Not required</td><td>Mandatory (14 days)</td></tr><tr><td>Timeline</td><td>1-7 days</td><td>21-35 days</td></tr><tr><td>DIR-11</td><td>May file (recommended)</td><td>N/A</td></tr><tr><td>DIR-12</td><td>Mandatory (30 days)</td><td>Mandatory (30 days)</td></tr></tbody></table></div><p</p>
                <p>ROC Haryana at Chandigarh (from 16 Feb 2026) processes all DIR-12 filings. Patron manages the complete resignation: letter drafting, Board Resolution, DIR-11/DIR-12 coordination, register update, and post-resignation advisory.</p>
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
                <h2 class="section-title">Step-by-Step Resignation Process</h2>
                <div class="content-text what-is-definition">
                    
                    <p><strong>Step 1:</strong> Director submits written resignation specifying effective date and reasons.</p><p><strong>Step 2:</strong> Board takes note at next meeting. <strong>Cannot refuse.</strong> Passes acknowledgement resolution.</p><p><strong>Step 3:</strong> Company files DIR-12 with ROC Haryana within 30 days. Attach: resignation letter + Board Resolution.</p><p><strong>Step 4:</strong> Director may file DIR-11 within 30 days (recommended for clean records).</p><p><strong>Step 5:</strong> Update Register of Directors (Section 170).</p><p><strong>Step 6:</strong> Mention in Directors' Report at next AGM.</p><p><strong>Step 7:</strong> Post-resignation: DIN stays active. DIR-3 KYC continues. Consider DIR-5 (DIN surrender) if not needed. See <a href="/director-kyc">Director KYC</a>.</p>

                </div>
                <div class="highlight-box" style="margin-top:20px;">
                    <p><strong>Key Terms for Resignation of Director in Gurugram:</strong></p>
                    <p><strong>Section 168:</strong> Director resigns by written notice. Board cannot refuse. Effective from later of receipt or specified date.</p><p><strong>DIR-11:</strong> Notice of Resignation filed by director with ROC within 30 days. Optional but strongly recommended.</p><p><strong>DIR-12:</strong> Company files cessation with ROC within 30 days. Mandatory. Escalating late fees from Day 31.</p><p><strong>Effective Date Rule:</strong> Later of (a) company receives notice OR (b) date specified. Cannot be backdated.</p><p><strong>Post-Resignation Liability:</strong> Director remains liable for offences during tenure even after resignation.</p>

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
                            <text x="100" y="170" font-size="10" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial, sans-serif">Resignation of Director in Gurugram</text>
                        </svg>
                    </div>
                    <div class="illustration-badge">
                        <span>Director Resignation</span>
                        <strong>Gurugram DIR-11</strong>
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
            <h2 class="section-title">Effective Date of Resignation</h2>
            <div class="content-text">
                
                <p>Under Section 168(2), effective date is the <strong>later</strong> of: (a) date company receives notice, OR (b) date specified by director.</p><p><strong>Example 1:</strong> Letter sent 1 April, received 3 April, "immediate effect" → <strong>3 April</strong> (receipt date).</p><p><strong>Example 2:</strong> Letter sent 1 April, received 3 April, "effective 30 April" → <strong>30 April</strong> (specified date is later).</p><p><strong>Example 3:</strong> Letter sent 1 April, states "effective 15 March" (past date) → <strong>1 April</strong> (cannot be backdated).</p><p><strong>Patron advisory:</strong> State the effective date clearly. For immediate: "with immediate effect from the date of receipt." For notice period: specify exact end date. For non-voluntary removal, see <a href="/removal-of-director">Removal of Director</a>.</p>

            </div>
            </div>
        </div>
    </div>
</section>

<!-- SECTION 5: OUR SERVICES -->
<section class="content-section" id="services-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">DIR-11 vs DIR-12 Filing Comparison</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Service</th><th>What We Do</th></tr></thead>
                    <tbody>
                        <tr><td>Filed By</td><td>DIR-12: Company (authorised director signs) | DIR-11: Resigning director personally</td></tr><tr><td>Nature</td><td>DIR-12: Mandatory (shall) | DIR-11: Recommended (may)</td></tr><tr><td>Deadline</td><td>Both: 30 days from resignation date/receipt</td></tr><tr><td>Attachments</td><td>DIR-12: Resignation letter + Board Resolution | DIR-11: Resignation letter + proof of dispatch</td></tr><tr><td>DSC</td><td>DIR-12: Authorised director's DSC | DIR-11: Resigning director's own DSC</td></tr><tr><td>Late DIR-12 Penalties</td><td>2x (30-60 days) → 4x (60-90) → 6x (90-180) → 12x (180+ days) of normal fee</td></tr>

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
            <h2 class="section-title">Director Resignation Services in Gurugram</h2>
            <p class="section-subtitle" style="text-align:left;max-width:100%;">From co-founder exits to MNC nominee replacements - complete resignation compliance with DIR-11 + DIR-12 coordination.</p>
        </header>
        <div class="steps-container">
            <div class="step-card"><div class="step-content"><span class="step-badge">Step 1</span><h3 class="step-title">Resignation Letter + Board Note</h3><p class="step-description">Draft resignation letter with effective date and reasons. Board takes note (cannot refuse). Pass acknowledgement resolution. Patron drafts all documents.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Letter submitted</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Board noted</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="15" y="5" width="90" height="70" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><text x="60" y="40" font-size="9" fill="#E8712C" font-weight="800" text-anchor="middle" font-family="Arial">S.168</text></svg></div><span class="illustration-label">Acknowledged</span><span class="step-number-large">01</span></div></div></div><div class="step-card"><div class="step-content"><span class="step-badge">Step 2</span><h3 class="step-title">DIR-12 + DIR-11 Filing</h3><p class="step-description">Company files DIR-12 with ROC Haryana within 30 days (Patron files within 7 days). Director files DIR-11 for independent record. Both forms coordinated for consistency.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>DIR-12 filed</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>DIR-11 filed</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="20" y="15" width="80" height="50" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><text x="60" y="40" font-size="9" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">DIR-12</text></svg></div><span class="illustration-label">Filed</span><span class="step-number-large">02</span></div></div></div><div class="step-card"><div class="step-content"><span class="step-badge">Step 3</span><h3 class="step-title">Post-Resignation Compliance</h3><p class="step-description">Update Register of Directors. Mention in Directors' Report at AGM. DIN remains active - DIR-3 KYC continues. Advise on DIN surrender (DIR-5) if not needed. MCA Master Data updated in 3-7 days.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Records updated</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Clean exit</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="20" y="10" width="80" height="60" rx="8" fill="#E8F5E9" stroke="#25D366" stroke-width="2"/><path d="M52 40l5 5 12-12" stroke="#25D366" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/></svg></div><span class="illustration-label">Complete</span><span class="step-number-large">03</span></div></div></div>

        </div>
    </div>
</section>

<!-- SECTION 8: DOCUMENTS REQUIRED -->
<section class="content-section" id="documents-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Documents Required for Resignation</h2>
            <div class="content-text">
                
                <div class="table-responsive-wrapper"><table><thead><tr><th>Document</th><th>From Director</th><th>From Company</th></tr></thead><tbody><tr><td>Resignation Letter</td><td>Yes (submitted)</td><td>Receives and retains</td></tr><tr><td>Board Resolution</td><td>N/A</td><td>Yes (acknowledgement)</td></tr><tr><td>DIR-12</td><td>N/A</td><td>Filed within 30 days (mandatory)</td></tr><tr><td>DIR-11</td><td>Filed within 30 days (recommended)</td><td>N/A</td></tr><tr><td>Proof of Dispatch</td><td>Yes (courier/email receipt)</td><td>N/A</td></tr><tr><td>DSC</td><td>Director's own (for DIR-11)</td><td>Authorised director's (for DIR-12)</td></tr><tr><td>Register Update</td><td>N/A</td><td>Updated by company</td></tr><tr><td>Directors' Report</td><td>N/A</td><td>Mention at next AGM</td></tr></tbody></table></div><div class="highlight-box" style="margin-top:20px;"><p><strong>Critical:</strong> Board CANNOT refuse resignation. If company delays DIR-12, director's name stays on MCA Master Data (liability risk). Director should file DIR-11 independently. Patron files DIR-12 within 7 days.</p></div>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 9: CHALLENGES -->
<section class="content-section" id="challenges-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Common Resignation Scenarios in Gurugram</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Challenge</th><th>Impact</th><th>How Patron Accounting Solves It</th></tr></thead>
                    <tbody>
                        <tr><td>Co-Founder Amicable Exit</td><td>DLF Cyber City startup, co-founder leaving on good terms</td><td>Complete package: resignation + share transfer + SHA compliance. Patron coordinates</td></tr><tr><td>MNC Nominee Replacement</td><td>Golf Course Road - global management rotation</td><td>Dual DIR-12 (cessation + appointment) filed same day. Patron handles both</td></tr><tr><td>DIN-Deactivated Director</td><td>DIN deactivated due to DIR-3 KYC non-filing</td><td>Reactivate DIN first (Rs 5,000) → then file DIR-11. Company files DIR-12 regardless</td></tr><tr><td>Company Not Filing DIR-12</td><td>Director resigned but company ignores obligation</td><td>Director files DIR-11 independently + approaches ROC if company defaults</td></tr><tr><td>Foreign Director Overseas</td><td>Golf Course Road MNC - foreign director resigning remotely</td><td>Authorisation letter to CA/CS to sign DIR-11 on behalf (amended Rule 16). No India travel needed</td></tr>

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
            <h2 class="section-title">Director Resignation Fees in Gurugram</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Fee Component</th><th>Amount</th></tr></thead>
                    <tbody>
                        <tr><td>Standard Resignation (DIR-12 only)</td><td>Starting from INR 2,999 (Exl GST) + Govt Rs 200-600</td></tr><tr><td>Resignation + DIR-11</td><td>Starting from INR 3,999 (Exl GST) + Govt Rs 400-800</td></tr><tr><td>Co-Founder Exit Package</td><td>Starting from INR 7,999-14,999 (Exl GST and Govt. Charges)</td></tr><tr><td>MNC Nominee Replacement (cessation + appointment)</td><td>Starting from INR 4,999-7,999 (Exl GST and Govt. Charges)</td></tr><tr><td>Foreign Director Resignation</td><td>Starting from INR 4,999-7,999 (Exl GST and Govt. Charges)</td></tr><tr><td>DIN Reactivation + Resignation</td><td>Starting from INR 4,999 (Exl GST) + Rs 5,000 Govt reactivation</td></tr><tr><td>Patron Accounting Professional Fees</td><td>Starting from INR 2,999 (Exl GST and Govt. Charges)</td></tr>

                    </tbody>
                </table>
                </div>
                <p style="margin-top:16px;font-size:13px;color:var(--text-muted);font-style:italic;">All fees and charges listed are indicative only and do not constitute a binding offer. Final amounts may vary depending on the volume of work and the complexity involved.</p>
                <p style="margin-top:16px;">Professional service charges for drafting, filing, and representation are separate from the statutory fees. The exact fee depends on the complexity of the case, disputed amount, and number of hearings required. Contact us for a detailed quote.</p>
                <p style="margin-top:16px;"><strong>Get a free Resignation of Director in Gurugram consultation - <a href="tel:+919459456700">Call +91 945 945 6700</a> or <a href="https://wa.me/919459456700?text=Hello%2C%20I%20just%20visited%20your%20Resignation%20of%20Director%20in%20Gurugram%20page.%20I%20would%20like%20to%20know%20more%20about%20it." target="_blank" rel="noopener">WhatsApp us</a>. No-obligation assessment.</strong></p>
            </div>
        </div>
    </div>
</section>

<!-- SECTION 11: TIMELINE -->
<section class="content-section" id="timeline-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Director Resignation Timeline</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Stage</th><th>Estimated Timeline</th></tr></thead>
                    <tbody>
                        <tr><td>Resignation Letter Submitted</td><td>Day 0 | Written notice to company</td></tr><tr><td>Effective Date</td><td>Day 0 (immediate) or specified date | Later of receipt or specified</td></tr><tr><td>Board Meeting</td><td>1-7 days | Board cannot refuse; acknowledgement resolution</td></tr><tr><td>DIR-12 by Company</td><td>Within 30 days of receipt | Mandatory; late fees escalate from Day 31</td></tr><tr><td>DIR-11 by Director</td><td>Within 30 days of resignation | Optional but recommended</td></tr><tr><td>MCA Master Data Updated</td><td>3-7 days after DIR-12 approved | Director removed from company record</td></tr><tr><td>Directors' Report Mention</td><td>At next AGM | Disclosure obligation</td></tr>

                    </tbody>
                </table>
                </div>
                <div class="highlight-box" style="margin-top:16px;">
                    
                    <p><strong>Critical:</strong> DIR-12 within 30 days (escalating penalties from Day 31). Board cannot refuse resignation. If company delays DIR-12, director name stays on MCA = liability risk. DIN remains active → DIR-3 KYC continues. Patron files DIR-12 within 7 days.</p>

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
            <h2 class="section-title">Why Choose Patron Accounting for Director Resignation in Gurugram?</h2>
        </div>
        <div class="features-grid"><article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><h3 class="feature-title">Gurugram Office</h3><p class="feature-text">Golf Course Extension Road - resignations for startups, MNCs, family businesses across Cyber City, Golf Course Road, Sohna Road.</p></article><article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><path d="M12 6v6l4 2"/></svg></div><h3 class="feature-title">7-Day DIR-12 Filing</h3><p class="feature-text">Filed within 7 days (not waiting for 30-day deadline). Director name removed from MCA Master Data as quickly as possible.</p></article><article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M14 2H6a2 2 0 00-2 2v16a2 2 0 002 2h12a2 2 0 002-2V8z"/><path d="M14 2v6h6M16 13H8M16 17H8"/></svg></div><h3 class="feature-title">DIR-11 + DIR-12 Synced</h3><p class="feature-text">Both forms prepared and filed in coordination. Consistent dates, reasons, and attachments between company and director filings.</p></article><article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M17 21v-2a4 4 0 00-4-4H5a4 4 0 00-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M23 21v-2a4 4 0 00-3-3.87M16 3.13a4 4 0 010 7.75"/></svg></div><h3 class="feature-title">Foreign Director Expert</h3><p class="feature-text">Authorisation under amended Rule 16. DSC coordination. DIR-11 signed by CA/CS on behalf. No India travel required.</p></article></div>
    </div>
</section>

<!-- SECTION 12A: SOCIAL PROOF -->
<section class="content-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Trusted by 10,000+ Businesses Across India</h2>
            <div class="content-text">
                
                <p><strong>Trust Banner:</strong> 10,000+ Businesses Served | 4.9 Google Rating | 50,000+ Documents Filed | 15+ Years of Practice</p><blockquote style="border-left:3px solid var(--orange);padding:16px 20px;margin:20px 0;background:var(--orange-lighter);border-radius:0 var(--radius-sm) var(--radius-sm) 0;"><p style="font-style:italic;margin-bottom:8px;">"Co-founder resigned amicably. Patron drafted letter, filed DIR-12 within 3 days, coordinated share transfer. Name off MCA Master Data within a week. Clean exit."</p><p style="font-weight:700;font-size:14px;margin:0;">- CEO, DLF Cyber City Startup</p></blockquote><blockquote style="border-left:3px solid var(--orange);padding:16px 20px;margin:20px 0;background:var(--orange-lighter);border-radius:0 var(--radius-sm) var(--radius-sm) 0;"><p style="font-style:italic;margin-bottom:8px;">"Japan-based director needed to resign. Patron managed authorisation for local director to sign DIR-11, filed both forms. Seamless despite director being overseas."</p><p style="font-weight:700;font-size:14px;margin:0;">- HR Head, Golf Course Road MNC</p></blockquote>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 13: SELF-FILING vs PROFESSIONAL COMPARISON -->
<section class="content-section" id="comparison-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Foreign Director Resignation Process</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Step</th><th>Process</th><th>Patron's Role</th></tr></thead>
                    <tbody>
                        <tr><td>Resignation Letter</td><td>Foreign director submits by email + courier</td><td>Draft letter with correct effective date and reasons</td></tr><tr><td>Company Files DIR-12</td><td>Filed without foreign director's DSC</td><td>Prepared and filed within 7 days by Patron</td></tr><tr><td>DIR-11 Authorisation</td><td>Foreign director authorises CA/CS or resident director (amended Rule 16)</td><td>Draft authorisation letter, coordinate across time zones</td></tr><tr><td>DIR-11 Filing</td><td>Authorised person signs and files</td><td>File DIR-11 with reasons on behalf of foreign director</td></tr><tr><td>DSC Management</td><td>Foreign director does not need Indian DSC for DIR-11</td><td>Use authorised person's DSC instead</td></tr><tr><td>No Travel Required</td><td>Entire process completed remotely</td><td>End-to-end management without India visit</td></tr>

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
                
                <ul><li><a href="/resignation-of-director">Resignation of Director (National)</a></li><li><a href="/removal-of-director">Removal of Director</a> - Non-voluntary</li><li><a href="/appointment-of-director">Appointment of Director</a> - Replacement</li><li><a href="/director-kyc">Director KYC</a> - Post-resignation DIN</li><li><a href="/transfer-of-shares">Transfer of Shares</a> - Co-founder exit</li></ul>

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
                
                <p><strong>Governing Law:</strong> Companies Act, 2013 | Companies (Appointment and Qualification of Directors) Rules, 2014 (Rules 15/16, amended Jan 2023)</p><p><strong>Key Sections:</strong> Section 168 (resignation) | Section 167 (vacation) | Section 170 (register)</p><p><strong>Forms:</strong> DIR-11 (resignation by director, optional) | DIR-12 (cessation by company, mandatory 30 days)</p><p><strong>ROC:</strong> ROC Haryana at Chandigarh (from 16 Feb 2026)</p><p><strong>Penalties:</strong> Late DIR-12: escalating fees (2x→4x→6x→12x). Company not filing: director name stays on MCA. Below minimum directors: Section 149(1) penalty.</p><p><strong>Post-Resignation:</strong> Liable for tenure offences. DIN stays active. DIR-3 KYC continues.</p>

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
                    <h2 class="faq-expanded__title">FAQs - Resignation of Director in Gurugram</h2>
                    <p class="faq-expanded__lead">Common questions about director resignation, DIR-11, DIR-12, effective date, and post-resignation obligations for Gurugram companies.</p>
                    @include('partials.bigin-form', [
                        'variant'  => 'compact',
                        'service'  => 'Resignation of Director in Gurugram',
                        'city'     => 'Gurugram',
                    ])
                </aside>
                <div class="faq-expanded__list">
                    <div class="faq-expanded__item" id="faq-1">
                        <h3 class="faq-expanded__q">How does a director resign?</h3>
                        <div class="faq-expanded__a"><p>Submit written resignation letter. Board takes note (cannot refuse). Company files DIR-12 within 30 days. Director may file DIR-11. Effective from later of receipt or specified date. Patron manages complete process.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-2">
                        <h3 class="faq-expanded__q">Can the Board refuse resignation?</h3>
                        <div class="faq-expanded__a"><p>No. Section 168 requires Board to take note. Board has no power to refuse, reject, or hold resignation. Takes effect per its terms. If company delays DIR-12, director files DIR-11 independently.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-3">
                        <h3 class="faq-expanded__q">Is DIR-11 mandatory?</h3>
                        <div class="faq-expanded__a"><p>Section 168(1) says 'may' - technically optional. But Patron strongly recommends filing for independent ROC record. Especially important when company delays DIR-12, as DIR-11 provides director's own evidence.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-4">
                        <h3 class="faq-expanded__q">What if DIN is deactivated?</h3>
                        <div class="faq-expanded__a"><p>Cannot sign DIR-11 on MCA with deactivated DIN. Reactivate first: DIR-3 KYC + Rs 5,000 (3-7 days). Then file DIR-11. Company can file DIR-12 regardless of director's DIN status.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-5">
                        <h3 class="faq-expanded__q">Is resigned director still liable?</h3>
                        <div class="faq-expanded__a"><p>Yes. Section 168(2) proviso: liable for offences during tenure even after resignation. Resignation does not provide immunity from past non-compliance, fraud, or violations.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-6">
                        <h3 class="faq-expanded__q">Can foreign director resign remotely?</h3>
                        <div class="faq-expanded__a"><p>Yes. Resignation by email + courier. Company files DIR-12 without foreign DSC. For DIR-11: authorise CA/CS or resident director to sign on behalf (amended Rule 16). No India travel needed.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-7">
                        <h3 class="faq-expanded__q">What if company doesn't file DIR-12?</h3>
                        <div class="faq-expanded__a"><p>Director name stays on MCA Master Data = liability risk. Director should file DIR-11 independently. If company persists, approach ROC or NCLT. Patron assists directors in this situation.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-8">
                        <h3 class="faq-expanded__q">What is the cost?</h3>
                        <div class="faq-expanded__a"><p>Standard (DIR-12 only) from Rs 2,999. With DIR-11: Rs 3,999. Co-founder exit: Rs 7,999+. Foreign director: Rs 4,999+. DIN reactivation + resignation: Rs 4,999 + Rs 5,000 govt fee.</p></div>
                    </div>
                </div>
            </div>


            <!-- Quick Answers -->
            <div class="highlight-box" style="margin-top:32px;">
                <p><strong>Quick Answers</strong></p>
                <p><strong>Director resign kaise karta hai?</strong> Company ko written letter deta hai. Board note karti hai (refuse nahi kar sakti). Company DIR-12, director DIR-11 file karta hai.</p><p><strong>Resign ke baad bhi liability?</strong> Haan. Tenure ke offences ke liye liable rehta hai.</p><p><strong>DIN deactivate hai toh?</strong> Pehle DIR-3 KYC file karo (Rs 5,000). Phir DIR-11. Company ka DIR-12 independent hai.</p>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 18: URGENCY CTA -->
<section class="content-section" style="background: var(--orange-lighter) !important; border-left: 4px solid var(--orange);">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">DIR-12 Within 30 Days - Board Cannot Refuse</h2>
            <div class="content-text">
                
                <p>DIR-12: 30 days (escalating penalties from Day 31). Board cannot refuse resignation. If company delays, director name stays on MCA = liability risk. DIN stays active → KYC continues. File both forms promptly.</p><p><strong><a href="tel:+919459456700">Call +91 945 945 6700</a> or <a href="https://wa.me/919459456700?text=Hello%2C%20I%20just%20visited%20your%20Resignation%20of%20Director%20in%20Gurugram%20page.%20I%20would%20like%20to%20know%20more%20about%20it." target="_blank" rel="noopener">WhatsApp us</a>.</strong></p>

            </div>
        </div>
    </div>
</section>

<!-- CONCLUSION + CTA BLOCK (Dark) -->
<section class="content-section" style="background: var(--blue) !important;">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title" style="color:#FFFFFF !important;">Get Expert Director Resignation in Gurugram</h2>
            <div class="content-text" style="text-align:left;">
                
                <p style="color:rgba(255,255,255,0.85);">Director resignation under Section 168 is straightforward but compliance-critical. Written notice, Board takes note (cannot refuse), DIR-12 within 30 days, DIR-11 recommended. Whether co-founder exit, MNC nominee replacement, foreign director, or family succession, proper documentation and timely filing are essential.</p><p style="color:rgba(255,255,255,0.85);">Patron Accounting's Gurugram office provides end-to-end services: resignation drafting, Board Resolution, DIR-11/DIR-12, foreign director authorisation, DIN reactivation, and post-resignation advisory.</p><p style="color:rgba(255,255,255,0.85);">With 10,000+ businesses served, a 4.9 Google rating, and 50,000+ documents filed, Patron Accounting LLP is a trusted partner across Gurugram, NCR, and India.</p>

            </div>
            <div style="display:flex;gap:14px;flex-wrap:wrap;margin-top:24px;">
                <a href="tel:+919459456700" style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:var(--orange);color:#fff;border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#128222; Call +91 945 945 6700</a>
                <a href="https://wa.me/919459456700?text=Hello%2C%20I%20just%20visited%20your%20Resignation%20of%20Director%20in%20Gurugram%20page.%20I%20would%20like%20to%20know%20more%20about%20it." target="_blank" style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:#25D366;color:#fff;border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;" rel="noopener">&#128172; WhatsApp Us</a>
                <a href="mailto:sales@patronaccounting.com?subject=Director%20Resignation%20Gurugram&body=Hello%2C%20I%20just%20visited%20your%20Resignation%20of%20Director%20in%20Gurugram%20page.%20I%20would%20like%20to%20know%20more%20about%20it.%0A%0AThank%20you." style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:transparent;color:#fff;border:2px solid rgba(255,255,255,0.3);border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#9993;&#65039; Email Us</a>
            </div>
            <p style="color:rgba(255,255,255,0.7);font-size:13px;margin-top:16px;">Book a Free Consultation - No Obligation.</p>
        </div>
    </div>
</section>

<!-- GSTAT STATE BENCH CITY PAGES (32 Pages) -->
<section class="content-section" style="padding:48px 32px;background:var(--gray-50);">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title" style="text-align:center;margin-bottom:12px;">Resignation of Director - Available Cities</h2>
            <p style="text-align:center;color:var(--text-muted);font-size:15px;margin-bottom:40px;">Expert director resignation services across major Indian cities</p>
         
            <div class="pa-city-block" style="margin-bottom:40px;"><div class="pa-block-title">City-Wise Director Resignation</div><div class="pa-block-sub">Select your city</div><div class="pa-city-grid"><a href="/resignation-of-director/pune" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Pune</div><div class="pa-card-sub">Maharashtra</div></div></a><a href="/resignation-of-director/mumbai" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Mumbai</div><div class="pa-card-sub">Maharashtra</div></div></a><a href="/resignation-of-director/delhi" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Delhi</div><div class="pa-card-sub">Delhi NCR</div></div></a><div class="pa-city-card" style="opacity:0.6; pointer-events:none; border:2px solid var(--orange); position:relative;"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Gurugram</div><div class="pa-card-sub">Haryana</div></div><span style="position:absolute; top:6px; right:8px; font-size:10px; color:var(--orange); font-weight:700; text-transform:uppercase; letter-spacing:0.5px;">You're here</span></div></div></div><div class="pa-city-block"><div class="pa-block-title">Related Services in Gurugram</div><div class="pa-block-sub">End-to-end director compliance</div><div class="pa-cross-grid"><a href="/removal-of-director/gurugram" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Removal of Director</div><div class="pa-card-sub">Gurugram</div></div></a><a href="/appointment-of-director/gurugram" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Appointment of Director</div><div class="pa-card-sub">Gurugram</div></div></a><a href="/director-kyc/gurugram" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Director KYC</div><div class="pa-card-sub">Gurugram</div></div></a><a href="/transfer-of-shares/gurugram" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Transfer of Shares</div><div class="pa-card-sub">Gurugram</div></div></a><a href="/private-limited-company-compliance/gurugram" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Annual Compliance</div><div class="pa-card-sub">Gurugram</div></div></a><a href="/legal-drafting/gurugram" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Legal Drafting</div><div class="pa-card-sub">Gurugram</div></div></a></div></div>
        </div>
    </div>
</section>

<!-- CONTENT FRESHNESS FOOTER -->
<section class="content-section" style="padding:32px;">
    <div class="content-container">
        <div class="text-content" style="font-size:13px;color:var(--text-muted);">
            <p><strong>Content Created:</strong> 03 April 2026 &nbsp;|&nbsp; <strong>Last Updated:</strong> <span id="lastUpdatedFooter">03 April 2026</span> &nbsp;|&nbsp; <strong>Next Review:</strong> 03 July 2026 &nbsp;|&nbsp; <strong>Reviewed By:</strong> CA &amp; CS Team, Patron Accounting LLP</p>
            <p>This page is reviewed quarterly. Section 168, DIR-11/DIR-12 Rules 15/16 (amended Jan 2023), and ROC Haryana processing are verified.</p>
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
