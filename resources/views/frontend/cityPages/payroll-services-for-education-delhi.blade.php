
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
    <title>School & College Accounting in Delhi - Fees, GST & TDS</title>
    <meta name="description" content="CA-led school and college payroll in Delhi. 7th CPC salary, PF/ESI, TDS, visiting faculty. DSEA Section 10 compliant. Serving Dwarka, Rohini, Civil Lines. Call +91 945 945 6700.">
    <link rel="canonical" href="/payroll-services-for-education/delhi">
    <meta name="robots" content="index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1">
    <meta property="og:title" content="School & College Accounting in Delhi - Fees, GST & TDS">
    <meta property="og:description" content="CA-led school and college payroll in Delhi. 7th CPC salary, PF/ESI, TDS, visiting faculty. DSEA Section 10 compliant. Serving Dwarka, Rohini, Civil Lines. Call +91 945 945 6700.">
    <meta property="og:url" content="/payroll-services-for-education/delhi">
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="Patron Accounting">
    <meta property="og:image" content="https://www.patronaccounting.com/images/og-default-square.png">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="1200">
    <meta property="og:image:type" content="image/png">
    <meta property="og:image:secure_url" content="https://www.patronaccounting.com/images/og-default-square.png">
    <meta property="og:image:alt" content="Patron Accounting - partner you can rely on">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="School & College Accounting in Delhi - Fees, GST & TDS">
    <meta name="twitter:description" content="CA-led school and college payroll in Delhi. 7th CPC salary, PF/ESI, TDS, visiting faculty. DSEA Section 10 compliant. Serving Dwarka, Rohini, Civil Lines. Call +91 945 945 6700.">
    <meta name="twitter:image" content="https://www.patronaccounting.com/images/og-default-square.png">
@endsection

@section('schema')
    <script type="application/ld+json">{
  "@context": "https://schema.org",
  "@graph": [
    {
      "@type": "Service",
      "name": "School & College Accounting in Delhi - Fees, GST & TDS",
      "description": "CA-led school and college payroll in Delhi. 7th CPC salary, PF/ESI, TDS, visiting faculty. DSEA Section 10 compliant. Serving Dwarka, Rohini, Civil Lines. Call +91 945 945 6700.",
      "url": "https://www.patronaccounting.com/payroll-services-for-education/delhi",
      "serviceType": "School & College Accounting in Delhi - Fees, GST & TDS",
      "areaServed": {
        "@type": "City",
        "name": "Delhi",
        "containedInPlace": {
          "@type": "State",
          "name": "Delhi"
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
        "url": "https://www.patronaccounting.com/payroll-services-for-education/delhi",
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
          "name": "Payroll Services For Education",
          "item": "https://www.patronaccounting.com/payroll-services-for-education"
        },
        {
          "@type": "ListItem",
          "position": 3,
          "name": "School & College Accounting in Delhi - Fees, GST & TDS",
          "item": "https://www.patronaccounting.com/payroll-services-for-education/delhi"
        }
      ]
    },
    {
      "@type": "FAQPage",
      "mainEntity": [
        {
          "@type": "Question",
          "name": "Which CA firm handles school payroll in Delhi?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Patron Rohini office. In Delhi's densest school cluster. 7th CPC, DSEA S.10, multi-category staff, visiting faculty S.194J. Not generic payroll."
          }
        },
        {
          "@type": "Question",
          "name": "How much does school payroll cost?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Preschool Rs 5,000-8,000. Small school Rs 10,000-18,000. Large/chain Rs 20,000-40,000. College Rs 15,000-35,000. Coaching Rs 8,000-25,000."
          }
        },
        {
          "@type": "Question",
          "name": "Do private schools need PF/ESI?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "PF mandatory 20+ employees (all staff). ESI for 10+ with ≤Rs 21K gross. Support staff typically within ESI. PGT/TGT/PRT above ESI but PF applies."
          }
        },
        {
          "@type": "Question",
          "name": "How is teacher salary structured under 7th CPC?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Basic per pay matrix level (PRT Rs 35,400, TGT Rs 44,900, PGT Rs 47,600) + DA (revised biannually) + HRA 24% Delhi + transport + allowances. DSEA S.10 mandates parity."
          }
        },
        {
          "@type": "Question",
          "name": "Is payroll different for visiting faculty?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Yes. Independent faculty = S.194J TDS at 10%. Not salary. No PF/ESI. Form 16A. Employee faculty (fixed hours, exclusive) = S.192 salary with PF/ESI."
          }
        },
        {
          "@type": "Question",
          "name": "How does DSEA affect teacher pay?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "S.10 mandates private recognised school staff paid at par with govt. 7th CPC including DA revisions. Delhi HC upheld Oct 2025. Non-compliance = DoE action."
          }
        },
        {
          "@type": "Question",
          "name": "How are DA arrears computed?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Central govt revises DA (Jan/Jul). Patron computes retrospective arrears for all DSEA staff within 30 days. PF on arrear DA deposited. TDS adjusted."
          }
        },
        {
          "@type": "Question",
          "name": "What about summer vacation pay?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "12-month contract teachers get full summer pay. 10/11-month do not. Wrong treatment affects gratuity, PF continuity, ESI. Patron configures per contract type."
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
                        Education Payroll Services in Delhi: CA-Led Salary Processing for Schools, Colleges, and Coaching Institutes
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
                            <p class="mb-0 text-dark benefit-paragraph"><span>Documents:</span> Staff data (teaching + non-teaching), salary structure, PF/ESI registration, attendance, appointment letters</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Fees:</span> Starting from Rs 5,000/month for small schools in Delhi</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Eligibility:</span> Private schools (CBSE/ICSE/IB), colleges, coaching institutes, EdTech, preschools in Delhi</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Timeline:</span> Payroll setup 5-7 days; first salary run from following month; PF/ESI by 15th</p>
                        </div>
                    </div>

                    <p class="mb-4 fw-bold" style="color: var(--blue); font-size: 15px;">Education payroll for schools, colleges, coaching institutes, and EdTech companies across Delhi.</p>

                    <div class="hero-cta">
                        <a href="tel:+919459456700" class="btn-video text-decoration-none">
                            <span class="play-circle"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="width:14px;height:14px;color:#fff"><path d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/></svg></span>
                            Call +91 945 945 6700
                        </a>
                        <a href="mailto:sales@patronaccounting.com" class="btn-sample text-decoration-none">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="width:18px;height:18px;"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,12 2,6"/></svg>
                            Email Us
                        </a>
                        <a href="https://wa.me/919459456700?text=Hello%2C%20I%20just%20visited%20your%20Payroll%20Services%20for%20Education%20in%20Delhi%20page.%20I%20would%20like%20to%20know%20more%20about%20it." target="_blank" class="btn-sample text-decoration-none" rel="noopener">
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
                                            'service'  => 'Education Payroll in Delhi',
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
    'ctaText'    => 'Education payroll with 7th CPC salary, DSEA compliance, visiting faculty TDS, and academic-calendar alignment.',
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
            <a href="#overview-section" class="toc-btn active">Overview</a><a href="#what-section" class="toc-btn">What Is It</a><a href="#who-section" class="toc-btn">Who Needs</a><a href="#services-section" class="toc-btn">Challenges</a><a href="#procedure-section" class="toc-btn">Process</a><a href="#documents-section" class="toc-btn">Documents</a><a href="#challenges-section" class="toc-btn">Staff Types</a><a href="#fees-section" class="toc-btn">Pricing</a><a href="#timeline-section" class="toc-btn">Why Patron</a><a href="#benefits-section" class="toc-btn">Quality</a><a href="#comparison-section" class="toc-btn">Patron vs Others</a><a href="#faq-section" class="toc-btn">FAQs</a>
        </div>
        <button class="toc-arrow right" id="tocRight">&#10095;</button>
    </div>
</div>

<!-- SECTION 2: OVERVIEW / INTRO + TL;DR -->
<section class="content-section" id="overview-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Education Payroll in Delhi: 7th CPC, DSEA, and Multi-Category Staff</h2>
            <div class="content-text">
                <div class="highlight-box" style="margin-bottom:20px;">
                    <p><strong>&#128204; TL;DR - Education Payroll in Delhi Services at a Glance</strong></p>
                    <p>Education payroll = PGT/TGT/PRT (7th CPC per DSEA S.10) + admin (CTC 50% basic) + support (Delhi min wage) + visiting faculty (S.194J 10%) + contractual (full benefits Day 1). DSEA S.10: private school pay = govt school. PRT Rs 35,400, TGT Rs 44,900, PGT Rs 47,600 basic. DA biannual. No PT. 5,000+ schools, 80+ colleges, 1,000+ coaching. From Rs 5,000/month.</p>
                </div>
                <p>Delhi is India's education capital. For a comprehensive overview, see our <a href="#">Education Payroll</a> national guide.</p><div class="table-responsive-wrapper"><table><thead><tr><th>Parameter</th><th>Detail</th></tr></thead><tbody><tr><td>Key Regulation</td><td>DSEA 1973 S.10: private school teacher pay = govt (7th CPC)</td></tr><tr><td>7th CPC Basic</td><td>PRT Rs 35,400 | TGT Rs 44,900 | PGT Rs 47,600 + DA + HRA 24%</td></tr><tr><td>Statutory</td><td>PF 12%+12%. ESI 3.25%+0.75% (≤Rs 21K). TDS S.192. No PT</td></tr><tr><td>Visiting Faculty</td><td>Per lecture/session. TDS S.194J at 10%. Not salary. Form 16A</td></tr><tr><td>Cost From</td><td>Rs 5,000/month (preschool); Rs 10,000-40,000 (school/college)</td></tr></tbody></table></div><p</p>
                <p>5,000+ schools (CBSE/ICSE/IB/govt). DU 90+ colleges, 700K students. Mukherjee Nagar/Rajendra Nagar = India's largest coaching cluster. DSEA S.10 unique to Delhi - other states don't mandate private school salary parity. Delhi HC upheld Oct 2025. No PT. Rohini = 200+ schools within 5 km. Patron Rohini office handles 7th CPC + DA arrears + multi-category + visiting faculty TDS.</p>
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
                <h2 class="section-title">What Are Education Payroll Services?</h2>
                <div class="content-text what-is-definition">
                    
                    <p><strong>Definition:</strong> Specialised salary processing for schools, colleges, coaching, EdTech covering teaching/non-teaching/visiting/contractual staff, PF/ESI/TDS, academic-calendar alignment, and DSEA 1973 + 7th CPC compliance.</p><p><strong>Key differences:</strong> Academic calendars dictate cycles. 12-month vs 11-month contracts (summer pay). Visiting faculty = S.194J not S.192. DA mid-year arrears. Teacher allowances (children education, book grant). DSEA salary parity.</p><p>See <a href="/payroll-processing-and-management-services">Payroll Services</a> for general payroll.</p>

                </div>
                <div class="highlight-box" style="margin-top:20px;">
                    <p><strong>Key Terms for Education Payroll in Delhi:</strong></p>
                    <p><strong>DSEA Section 10:</strong> Delhi School Education Act 1973. Private recognised school staff paid at par with govt counterparts. 7th CPC mandatory. Delhi HC upheld Oct 2025.</p><p><strong>7th CPC Pay Matrix:</strong> PRT Level 6 Rs 35,400. TGT Level 7 Rs 44,900. PGT Level 8 Rs 47,600. DA revised biannually. HRA 24% for Delhi.</p><p><strong>S.194J (Visiting Faculty):</strong> Professional fees TDS at 10% for independent faculty. Not salary. No PF/ESI. Form 16A, not Form 16.</p><p><strong>DA Arrears:</strong> Central govt revises DA (Jan + Jul). Delhi private schools must compute retrospective arrears for all DSEA staff. PF on arrear DA.</p><p><strong>Academic Calendar Payroll:</strong> April-March. Summer vacation pay for 12-month contracts. Pro-rata for mid-session joiners. July increments.</p>

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
                            <text x="100" y="170" font-size="10" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial, sans-serif">Education Payroll in Delhi</text>
                        </svg>
                    </div>
                    <div class="illustration-badge">
                        <span>Education</span>
                        <strong>7th CPC + DSEA</strong>
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
            <h2 class="section-title">Who Needs Education Payroll in Delhi</h2>
            <div class="content-text">
                
                <p><strong>CBSE/ICSE Schools (Dwarka, Rohini, Pitampura):</strong> 50-300 staff. PGT/TGT/PRT on 7th CPC per DSEA S.10. Admin, support, visiting, contractual. DA arrears. 20-30% TDS bracket.</p><p><strong>International Schools (Vasant Kunj, Chanakyapuri):</strong> Expat teachers: foreign currency components, S.192 TDS on resident aliens, tax treaties. Not under DSEA.</p><p><strong>DU Colleges (Civil Lines, South Campus):</strong> UGC pay scales. Ad-hoc/temp on consolidated. Guest lecturers per-lecture. Non-teaching on 7th CPC. Fund accounting.</p><p><strong>Coaching Institutes (Mukherjee Nagar, Rajendra Nagar):</strong> Star faculty Rs 1-5L/month. Support faculty. Admin. S.192 vs S.194J per engagement model.</p><p><strong>EdTech (CP, Nehru Place):</strong> Content developers + online tutors + tech/ops. Dual streams: corporate CTC + per-session freelancer TDS.</p><p><strong>Preschools (all Delhi):</strong> 10-25 staff. Often informal payroll. PF/ESI missed. Patron establishes compliant payroll from first employee.</p>

            </div>
            </div>
        </div>
    </div>
</section>

<!-- SECTION 5: OUR SERVICES -->
<section class="content-section" id="services-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Common Education Payroll Challenges in Delhi</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Service</th><th>What We Do</th></tr></thead>
                    <tbody>
                        <tr><td>DSEA S.10 Non-Compliance</td><td>Private schools paying below 7th CPC. Teacher grievances, DoE notices, Delhi HC litigation (Oct 2025 ruling). Patron structures 7th CPC + fee revision advisory</td></tr><tr><td>Mixed Staff on Single Payroll</td><td>PGT/TGT/PRT (7th CPC) + admin (CTC) + support (min wage) + visiting (per-session) + drivers (contract). Wrong PF/ESI/TDS per category</td></tr><tr><td>S.192 vs S.194J Confusion</td><td>Coaching faculty: employee = S.192 salary. Independent = S.194J 10%. Wrong classification = TDS mismatch notices from IT dept</td></tr><tr><td>DA Arrear Errors</td><td>Central govt revises DA Jan/Jul. Schools delay or compute wrong. Employee grievances + PF shortfall (PF on basic+DA). Patron processes within 30 days</td></tr><tr><td>Summer Vacation Pay</td><td>12-month contract = full summer pay. 10/11-month = no summer pay. Wrong treatment affects gratuity, PF continuity, ESI coverage</td></tr>

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
            <h2 class="section-title">6-Step Education Payroll for Delhi</h2>
            <p class="section-subtitle" style="text-align:left;max-width:100%;">From 7th CPC salary design to DA arrears and Form 16.</p>
        </header>
        <div class="steps-container">
            <div class="step-card"><div class="step-content"><span class="step-badge">Step 1-2</span><h3 class="step-title">Assessment + 7th CPC Salary Design</h3><p class="step-description">Review institution type, staff categories, DSEA status, current pay. Map salaries to 7th CPC pay matrix (PRT/TGT/PGT). DA at current rate. HRA 24% Delhi. Coaching: CTC with 50% basic. Visiting: per-lecture rate cards. Software configured per category.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Assessed</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>7th CPC mapped</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="15" y="5" width="90" height="70" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><text x="60" y="40" font-size="7" fill="#E8712C" font-weight="800" text-anchor="middle" font-family="Arial">7CPC</text></svg></div><span class="illustration-label">Mapped</span><span class="step-number-large">01</span></div></div></div><div class="step-card"><div class="step-content"><span class="step-badge">Step 3-4</span><h3 class="step-title">Register + Monthly Payroll</h3><p class="step-description">PF/ESI registration (EPFO/ESIC Delhi). Multi-category payroll: 7th CPC teaching + CTC admin + min wage support + S.194J visiting. Attendance processed. TDS per teacher with investment declarations. PF/ESI computed. Net pay by 7th. Deposits by 15th.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Registered</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Running</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="20" y="15" width="80" height="50" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><text x="60" y="40" font-size="7" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">PF/ESI</text></svg></div><span class="illustration-label">Filed</span><span class="step-number-large">02</span></div></div></div><div class="step-card"><div class="step-content"><span class="step-badge">Step 5-6</span><h3 class="step-title">DA Arrears + Year-End Compliance</h3><p class="step-description">DA revision arrears computed within 30 days of govt notification. PF on arrear DA deposited. Form 24Q quarterly. Form 16 by 15 June. Annual PF/ESI returns. Gratuity provision updated. Salary certificates for staff. Multi-branch consolidation for school chains.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>DA processed</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Form 16 done</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="20" y="10" width="80" height="60" rx="8" fill="#E8F5E9" stroke="#25D366" stroke-width="2"/><path d="M52 40l5 5 12-12" stroke="#25D366" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/></svg></div><span class="illustration-label">Complete</span><span class="step-number-large">03</span></div></div></div>

        </div>
    </div>
</section>

<!-- SECTION 8: DOCUMENTS REQUIRED -->
<section class="content-section" id="documents-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Documents Required</h2>
            <div class="content-text">
                
                <div class="table-responsive-wrapper"><table><thead><tr><th>Document</th><th>Purpose</th><th>Notes</th></tr></thead><tbody><tr><td>Staff Master Data</td><td>PAN, Aadhaar, bank, designation (PGT/TGT/PRT/Admin/Support)</td><td>All categories</td></tr><tr><td>Appointment Letters</td><td>DSEA requirement</td><td>Pay scale details per teacher</td></tr><tr><td>Current Salary Structure</td><td>Pay review</td><td>Existing payslips or salary register</td></tr><tr><td>PF/ESI Registration</td><td>Statutory</td><td>Existing codes or Patron assists</td></tr><tr><td>Attendance Records</td><td>Monthly payroll</td><td>Biometric or register</td></tr><tr><td>Investment Declarations</td><td>TDS</td><td>80C, 80D, HRA, NPS for teachers</td></tr><tr><td>DSEA Recognition Certificate</td><td>Salary parity</td><td>For S.10 compliance</td></tr></tbody></table></div><div class="highlight-box" style="margin-top:20px;"><p><strong>Delhi tip:</strong> Private schools not yet on 7th CPC per DSEA S.10: salary parity is statutory, not optional. Teachers can approach Delhi HC. Patron designs compliant structures balancing DSEA with school financial capacity, including fee revision advisory. See <a href="/statutory-audit">Statutory Audit</a>.</p></div>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 9: CHALLENGES -->
<section class="content-section" id="challenges-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Education Staff Categories & Payroll Treatment</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Challenge</th><th>Impact</th><th>How Patron Accounting Solves It</th></tr></thead>
                    <tbody>
                        <tr><td>PGT (7th CPC Level 8)</td><td>Basic Rs 47,600 + DA + HRA 24%. PF mandatory. TDS S.192 (20-30%). DSEA S.10 parity</td><td>Form 16</td></tr><tr><td>TGT (Level 7)</td><td>Basic Rs 44,900 + DA + HRA 24%. PF mandatory. TDS S.192. DSEA parity</td><td>Form 16</td></tr><tr><td>PRT (Level 6)</td><td>Basic Rs 35,400 + DA + HRA 24%. PF mandatory. TDS S.192. DSEA parity</td><td>Form 16</td></tr><tr><td>Support Staff (Class IV)</td><td>Delhi minimum wage. PF + ESI (if ≤Rs 21K). TDS if above threshold</td><td>Min wage higher than UP</td></tr><tr><td>Visiting/Guest Faculty</td><td>Per lecture/session. No PF/ESI. TDS S.194J at 10%</td><td>Form 16A not Form 16</td></tr><tr><td>Contractual Staff</td><td>Fixed-term. Full PF/ESI from Day 1 per Labour Code. Gratuity proportionate</td><td>Not temp exemption</td></tr>

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
            <h2 class="section-title">Education Payroll Fees in Delhi</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Fee Component</th><th>Amount</th></tr></thead>
                    <tbody>
                        <tr><td>Preschool/Playschool (10-25 staff)</td><td>Rs 5,000 - Rs 8,000/month | Salary + PF/ESI + TDS + payslips + Form 16</td></tr><tr><td>Small School (25-75 staff)</td><td>Rs 10,000 - Rs 18,000/month | Multi-category + DA arrears + 7th CPC + MIS</td></tr><tr><td>Large School / School Chain (75-300)</td><td>Rs 20,000 - Rs 40,000/month | Multi-branch + visiting faculty + DSEA compliance + audit</td></tr><tr><td>College / University Department</td><td>Rs 15,000 - Rs 35,000/month | UGC scales + ad-hoc + guest lecturers + fund accounting</td></tr><tr><td>Coaching Institute</td><td>Rs 8,000 - Rs 25,000/month | Faculty salary + S.194J visiting + admin + PF/ESI</td></tr>

                    </tbody>
                </table>
                </div>
                <p style="margin-top:16px;font-size:13px;color:var(--text-muted);font-style:italic;">All fees and charges listed are indicative only and do not constitute a binding offer. Final amounts may vary depending on the volume of work and the complexity involved.</p>
                <p style="margin-top:16px;">Professional service charges for drafting, filing, and representation are separate from the statutory fees. The exact fee depends on the complexity of the case, disputed amount, and number of hearings required. Contact us for a detailed quote.</p>
                <p style="margin-top:16px;"><strong>Get a free Education Payroll in Delhi consultation - <a href="tel:+919459456700">Call +91 945 945 6700</a> or <a href="https://wa.me/919459456700?text=Hello%2C%20I%20just%20visited%20your%20Payroll%20Services%20for%20Education%20in%20Delhi%20page.%20I%20would%20like%20to%20know%20more%20about%20it." target="_blank" rel="noopener">WhatsApp us</a>. No-obligation assessment.</strong></p>
            </div>
        </div>
    </div>
</section>

<!-- SECTION 11: TIMELINE -->
<section class="content-section" id="timeline-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Why Choose Patron for Education Payroll in Delhi?</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Stage</th><th>Estimated Timeline</th></tr></thead>
                    <tbody>
                        <tr><td>Rohini - School Cluster Zone</td><td>200+ schools within 5 km (DPS, Ryan, Bal Bharati, DAV, Greenway). Walk-in for principals/administrators</td></tr><tr><td>7th CPC + DSEA Expert</td><td>Pay matrix mapping. DA arrears within 30 days. Salary parity per S.10. Delhi HC rulings tracked</td></tr><tr><td>Multi-Category Staff</td><td>PGT/TGT/PRT + admin + support + visiting + contractual. Each treated correctly per law</td></tr><tr><td>Visiting Faculty S.194J</td><td>Correct S.192 vs S.194J classification. No TDS mismatch notices. Form 16 vs Form 16A</td></tr><tr><td>From Rs 5,000/Month</td><td>Preschool to large school chain. No PT in Delhi. Academic-calendar aligned. Scale with institution growth</td></tr>

                    </tbody>
                </table>
                </div>
                <div class="highlight-box" style="margin-top:16px;">
                    
                    <p><strong>Critical:</strong> PF/ESI by 15th (12% interest + 100% damages). TDS by 7th. DSEA S.10 mandatory - Delhi HC Oct 2025. DA arrears must be processed promptly. Wrong S.192/194J = IT notices. From Rs 5,000/month.</p>

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
            <h2 class="section-title">Patron vs General Payroll Providers</h2>
        </div>
        <div class="features-grid"><article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><h3 class="feature-title">Patron: 7th CPC Expert</h3><p class="feature-text">Pay matrix mapped. DSEA S.10 compliant. DA arrears within 30 days. Delhi HC rulings tracked. Fee revision advisory.</p></article><article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 9v2m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><h3 class="feature-title">Generic: No CPC Knowledge</h3><p class="feature-text">Standard CTC payroll. No DSEA understanding. DA arrears not processed. Teacher allowances misclassified.</p></article><article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M14 2H6a2 2 0 00-2 2v16a2 2 0 002 2h12a2 2 0 002-2V8z"/><path d="M14 2v6h6M16 13H8M16 17H8"/></svg></div><h3 class="feature-title">Patron: Multi-Category</h3><p class="feature-text">Teaching + admin + support + visiting + contractual. Each category correct PF/ESI/TDS treatment. Not one-size.</p></article><article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><path d="M12 6v6l4 2"/></svg></div><h3 class="feature-title">Patron: S.194J Correct</h3><p class="feature-text">Visiting faculty classified correctly. S.192 vs S.194J per engagement model. Zero TDS mismatch notices.</p></article></div>
    </div>
</section>

<!-- SECTION 12A: SOCIAL PROOF -->
<section class="content-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Trusted by 10,000+ Businesses Across India</h2>
            <div class="content-text">
                
                <p><strong>Trust Banner:</strong> 10,000+ Businesses | 4.9 Google Rating | 50,000+ Documents Filed | 15+ Years</p><blockquote style="border-left:3px solid var(--orange);padding:16px 20px;margin:20px 0;background:var(--orange-lighter);border-radius:0 var(--radius-sm) var(--radius-sm) 0;"><p style="font-style:italic;margin-bottom:8px;">"CBSE school Dwarka. 150 staff across 6 categories. Patron implemented 7th CPC, processes DA arrears within 30 days, handles visiting faculty S.194J. Zero DoE issues."</p><p style="font-weight:700;font-size:14px;margin:0;">- Principal, CBSE School, Dwarka</p></blockquote><blockquote style="border-left:3px solid var(--orange);padding:16px 20px;margin:20px 0;background:var(--orange-lighter);border-radius:0 var(--radius-sm) var(--radius-sm) 0;"><p style="font-style:italic;margin-bottom:8px;">"Coaching institute Mukherjee Nagar. Star faculty at Rs 3L/month + visiting faculty per-batch. Patron classifies S.192 vs S.194J correctly. Clean TDS. No IT notices."</p><p style="font-weight:700;font-size:14px;margin:0;">- Director, Coaching Institute, Mukherjee Nagar</p></blockquote>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 13: SELF-FILING vs PROFESSIONAL COMPARISON -->
<section class="content-section" id="comparison-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Patron vs Others Detailed</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Factor</th><th>Patron</th><th>General Payroll Provider</th></tr></thead>
                    <tbody>
                        <tr><td>7th CPC</td><td>Pay matrix mapped, DSEA S.10 compliant</td><td>No CPC knowledge</td></tr><tr><td>DA Arrears</td><td>Processed within 30 days of notification</td><td>Not handled</td></tr><tr><td>Multi-Category</td><td>6+ staff types with correct PF/ESI/TDS</td><td>Single-stream only</td></tr><tr><td>Visiting Faculty</td><td>S.194J correctly applied, Form 16A</td><td>Mixed with salary TDS</td></tr><tr><td>Academic Calendar</td><td>Summer pay, mid-session joining, July increments</td><td>Standard monthly only</td></tr><tr><td>Pricing</td><td>From Rs 5,000/month (education specialist)</td><td>Similar but missing education features</td></tr>

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
                
                <ul><li><a href="#">Education Payroll (National)</a></li><li><a href="/payroll-processing-and-management-services">Payroll Processing</a></li><li><a href="/accounting-services-for-education-industry">Education Accounting</a></li><li><a href="/statutory-audit">Statutory Audit</a></li><li><a href="/income-tax-return">Income Tax Return</a></li></ul>

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
                
                <p><strong>DSEA 1973 S.10:</strong> Private school pay = govt (7th CPC). Unique to Delhi. HC upheld Oct 2025. Non-compliance = DoE action + teacher litigation.</p><p><strong>7th CPC:</strong> PRT Level 6 Rs 35,400. TGT Level 7 Rs 44,900. PGT Level 8 Rs 47,600. DA biannual. HRA 24% Delhi.</p><p><strong>EPF/ESI:</strong> PF 12%+12% (20+ employees). ESI 3.25%+0.75% (10+ with ≤Rs 21K). Late = 12% interest + 100% damages.</p><p><strong>IT Act:</strong> S.192 salary TDS. S.194J visiting faculty 10%. Late TDS = 1.5%/month.</p><p><strong>Labour Codes 2025:</strong> 50% basic. Fixed-term full benefits Day 1. Delhi: no PT. Min wage violation = imprisonment 6 months.</p>

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
                    <h2 class="faq-expanded__title">FAQs - Education Payroll in Delhi</h2>
                    <p class="faq-expanded__lead">Common questions about school payroll, 7th CPC, DSEA Section 10, visiting faculty TDS, and education compliance in Delhi.</p>
                    @include('partials.bigin-form', [
                        'variant'  => 'compact',
                        'service'  => 'Education Payroll in Delhi',
                        'city'     => 'Delhi',
                    ])
                </aside>
                <div class="faq-expanded__list">
                    <div class="faq-expanded__item" id="faq-1">
                        <h3 class="faq-expanded__q">Which CA firm handles school payroll in Delhi?</h3>
                        <div class="faq-expanded__a"><p>Patron Rohini office. In Delhi's densest school cluster. 7th CPC, DSEA S.10, multi-category staff, visiting faculty S.194J. Not generic payroll.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-2">
                        <h3 class="faq-expanded__q">How much does school payroll cost?</h3>
                        <div class="faq-expanded__a"><p>Preschool Rs 5,000-8,000. Small school Rs 10,000-18,000. Large/chain Rs 20,000-40,000. College Rs 15,000-35,000. Coaching Rs 8,000-25,000.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-3">
                        <h3 class="faq-expanded__q">Do private schools need PF/ESI?</h3>
                        <div class="faq-expanded__a"><p>PF mandatory 20+ employees (all staff). ESI for 10+ with ≤Rs 21K gross. Support staff typically within ESI. PGT/TGT/PRT above ESI but PF applies.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-4">
                        <h3 class="faq-expanded__q">How is teacher salary structured under 7th CPC?</h3>
                        <div class="faq-expanded__a"><p>Basic per pay matrix level (PRT Rs 35,400, TGT Rs 44,900, PGT Rs 47,600) + DA (revised biannually) + HRA 24% Delhi + transport + allowances. DSEA S.10 mandates parity.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-5">
                        <h3 class="faq-expanded__q">Is payroll different for visiting faculty?</h3>
                        <div class="faq-expanded__a"><p>Yes. Independent faculty = S.194J TDS at 10%. Not salary. No PF/ESI. Form 16A. Employee faculty (fixed hours, exclusive) = S.192 salary with PF/ESI.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-6">
                        <h3 class="faq-expanded__q">How does DSEA affect teacher pay?</h3>
                        <div class="faq-expanded__a"><p>S.10 mandates private recognised school staff paid at par with govt. 7th CPC including DA revisions. Delhi HC upheld Oct 2025. Non-compliance = DoE action.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-7">
                        <h3 class="faq-expanded__q">How are DA arrears computed?</h3>
                        <div class="faq-expanded__a"><p>Central govt revises DA (Jan/Jul). Patron computes retrospective arrears for all DSEA staff within 30 days. PF on arrear DA deposited. TDS adjusted.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-8">
                        <h3 class="faq-expanded__q">What about summer vacation pay?</h3>
                        <div class="faq-expanded__a"><p>12-month contract teachers get full summer pay. 10/11-month do not. Wrong treatment affects gratuity, PF continuity, ESI. Patron configures per contract type.</p></div>
                    </div>
                </div>
            </div>


            <!-- Quick Answers -->
            <div class="highlight-box" style="margin-top:32px;">
                <p><strong>Quick Answers</strong></p>
                <p><strong>Private school teacher ki salary kitni honi chahiye?</strong> DSEA S.10: 7th CPC. PRT Rs 35,400, TGT Rs 44,900, PGT Rs 47,600 basic + DA + HRA + allowances.</p><p><strong>Visiting faculty ka TDS?</strong> S.194J 10% (>Rs 30K/year). Salary nahi - professional fee hai. Form 16A milega.</p><p><strong>Delhi mein PT?</strong> Nahi. No Professional Tax in Delhi.</p>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 18: URGENCY CTA -->
<section class="content-section" style="background: var(--orange-lighter) !important; border-left: 4px solid var(--orange);">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">DSEA S.10 Mandatory - 7th CPC Implemented?</h2>
            <div class="content-text">
                
                <p>PF/ESI by 15th. TDS by 7th. DSEA S.10 mandatory (Delhi HC Oct 2025). DA arrears must be processed. Wrong S.192/194J = IT notices. From Rs 5,000/month.</p><p><strong><a href="tel:+919459456700">Call +91 945 945 6700</a> or <a href="https://wa.me/919459456700?text=Hello%2C%20I%20just%20visited%20your%20Payroll%20Services%20for%20Education%20in%20Delhi%20page.%20I%20would%20like%20to%20know%20more%20about%20it." target="_blank" rel="noopener">WhatsApp us</a>.</strong></p>

            </div>
        </div>
    </div>
</section>

<!-- CONCLUSION + CTA BLOCK (Dark) -->
<section class="content-section" style="background: var(--blue) !important;">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title" style="color:#FFFFFF !important;">Get Expert Education Payroll in Delhi</h2>
            <div class="content-text" style="text-align:left;">
                
                <p style="color:rgba(255,255,255,0.85);">Education payroll in Delhi covers 7th CPC salary structuring, DSEA S.10 compliance, multi-category staff processing, visiting faculty S.194J, DA arrears, and academic-calendar alignment for 5,000+ schools, 80+ colleges, and 1,000+ coaching institutes.</p><p style="color:rgba(255,255,255,0.85);">Patron's Rohini office - in Delhi's densest school cluster - provides CA-led education payroll that generic providers cannot match.</p><p style="color:rgba(255,255,255,0.85);">With 15+ years, 10,000+ businesses, and a 4.9 Google rating, Patron ensures every staff category is correctly classified, paid per DSEA/7th CPC, and fully compliant.</p>

            </div>
            <div style="display:flex;gap:14px;flex-wrap:wrap;margin-top:24px;">
                <a href="tel:+919459456700" style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:var(--orange);color:#fff;border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#128222; Call +91 945 945 6700</a>
                <a href="https://wa.me/919459456700?text=Hello%2C%20I%20just%20visited%20your%20Payroll%20Services%20for%20Education%20in%20Delhi%20page.%20I%20would%20like%20to%20know%20more%20about%20it." target="_blank" style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:#25D366;color:#fff;border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;" rel="noopener">&#128172; WhatsApp Us</a>
                <a href="mailto:sales@patronaccounting.com?subject=Education%20Payroll%20Delhi&body=Hello%2C%20I%20just%20visited%20your%20Payroll%20Services%20for%20Education%20in%20Delhi%20page.%20I%20would%20like%20to%20know%20more%20about%20it.%0A%0AThank%20you." style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:transparent;color:#fff;border:2px solid rgba(255,255,255,0.3);border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#9993;&#65039; Email Us</a>
            </div>
            <p style="color:rgba(255,255,255,0.7);font-size:13px;margin-top:16px;">Book a Free Consultation - No Obligation.</p>
        </div>
    </div>
</section>

<!-- GSTAT STATE BENCH CITY PAGES (32 Pages) -->
<section class="content-section" style="padding:48px 32px;background:var(--gray-50);">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title" style="text-align:center;margin-bottom:12px;">Education Payroll - Available Cities</h2>
            <p style="text-align:center;color:var(--text-muted);font-size:15px;margin-bottom:40px;">Expert education payroll across major Indian cities</p>
          
            <div class="pa-city-block" style="margin-bottom:40px;"><div class="pa-block-title">City-Wise Education Payroll</div><div class="pa-block-sub">Select your city</div><div class="pa-city-grid"><a href="#" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Pune</div><div class="pa-card-sub">Maharashtra</div></div></a><a href="/payroll-processing-services-for-education-industry/mumbai" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Mumbai</div><div class="pa-card-sub">Maharashtra</div></div></a><div class="pa-city-card" style="opacity:0.6; pointer-events:none; border:2px solid var(--orange); position:relative;"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Delhi</div><div class="pa-card-sub">Delhi NCR</div></div><span style="position:absolute; top:6px; right:8px; font-size:10px; color:var(--orange); font-weight:700; text-transform:uppercase; letter-spacing:0.5px;">You're here</span></div><a href="#" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Gurugram</div><div class="pa-card-sub">Haryana</div></div></a></div></div><div class="pa-city-block"><div class="pa-block-title">Related Services in Delhi</div><div class="pa-block-sub">Education compliance</div><div class="pa-cross-grid"><a href="/payroll-processing-and-management-services/delhi" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Payroll Processing</div><div class="pa-card-sub">Delhi</div></div></a><a href="/accounting-services-for-education-industry/delhi" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Education Accounting</div><div class="pa-card-sub">Delhi</div></div></a><a href="/statutory-audit/delhi" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Statutory Audit</div><div class="pa-card-sub">Delhi</div></div></a><a href="/accounting-services/delhi" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Accounting Services</div><div class="pa-card-sub">Delhi</div></div></a><a href="/income-tax-return/delhi" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Income Tax Return</div><div class="pa-card-sub">Delhi</div></div></a><a href="/gst-registration/delhi" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">GST Registration</div><div class="pa-card-sub">Delhi</div></div></a></div></div>
        </div>
    </div>
</section>

<!-- CONTENT FRESHNESS FOOTER -->
<section class="content-section" style="padding:32px;">
    <div class="content-container">
        <div class="text-content" style="font-size:13px;color:var(--text-muted);">
            <p><strong>Content Created:</strong> 06 April 2026 &nbsp;|&nbsp; <strong>Last Updated:</strong> <span id="lastUpdatedFooter">06 April 2026</span> &nbsp;|&nbsp; <strong>Next Review:</strong> 06 July 2026 &nbsp;|&nbsp; <strong>Reviewed By:</strong> CA &amp; CS Team, Patron Accounting LLP</p>
            <p>This page is reviewed quarterly. 7th CPC pay matrix, DSEA Section 10, DA rates, PF/ESI thresholds, and S.194J rules are verified.</p>
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
