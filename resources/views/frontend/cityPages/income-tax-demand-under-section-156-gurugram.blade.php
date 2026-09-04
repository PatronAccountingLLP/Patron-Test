
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
    <title>Income Tax Demand u/s 156 Gurugram - Reply & Payment</title>
    <meta name="description" content="CA-assisted income tax demand resolution in Gurugram. Section 156 response, rectification, appeal, TDS mismatch, outstanding demand, ROC Haryana. Serving Cyber City, Golf Course Road. Call +91 945 945 6700.">
    <link rel="canonical" href="/income-tax-demand-under-section-156/gurugram">
    <meta name="robots" content="index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1">
    <meta property="og:title" content="Income Tax Demand u/s 156 Gurugram - Reply & Payment">
    <meta property="og:description" content="CA-assisted income tax demand resolution in Gurugram. Section 156 response, rectification, appeal, TDS mismatch, outstanding demand, ROC Haryana. Serving Cyber City, Golf Course Road. Call +91 945 945 6700.">
    <meta property="og:url" content="/income-tax-demand-under-section-156/gurugram">
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="Patron Accounting">
    <meta property="og:image" content="https://www.patronaccounting.com/images/og-default-square.png">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="1200">
    <meta property="og:image:type" content="image/png">
    <meta property="og:image:secure_url" content="https://www.patronaccounting.com/images/og-default-square.png">
    <meta property="og:image:alt" content="Patron Accounting - partner you can rely on">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Income Tax Demand u/s 156 Gurugram - Reply & Payment">
    <meta name="twitter:description" content="CA-assisted income tax demand resolution in Gurugram. Section 156 response, rectification, appeal, TDS mismatch, outstanding demand, ROC Haryana. Serving Cyber City, Golf Course Road. Call +91 945 945 6700.">
    <meta name="twitter:image" content="https://www.patronaccounting.com/images/og-default-square.png">
@endsection

@section('schema')
    <script type="application/ld+json">{
  "@context": "https://schema.org",
  "@graph": [
    {
      "@type": "Service",
      "name": "Income Tax Demand u/s 156 Gurugram - Reply & Payment",
      "description": "CA-assisted income tax demand resolution in Gurugram. Section 156 response, rectification, appeal, TDS mismatch, outstanding demand, ROC Haryana. Serving Cyber City, Golf Course Road. Call +91 945 945 6700.",
      "url": "https://www.patronaccounting.com/income-tax-demand-under-section-156/gurugram",
      "serviceType": "Income Tax Demand u/s 156 Gurugram - Reply & Payment",
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
          "name": "Income Tax Demand u/s 156 - Notice & Reply",
          "item": "https://www.patronaccounting.com/income-tax-demand-under-section-156"
        },
        {
          "@type": "ListItem",
          "position": 3,
          "name": "Income Tax Demand u/s 156 Gurugram - Reply & Payment",
          "item": "https://www.patronaccounting.com/income-tax-demand-under-section-156/gurugram"
        }
      ]
    },
    {
      "@type": "FAQPage",
      "mainEntity": [
        {
          "@type": "Question",
          "name": "What is a Section 156 demand notice?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Formal demand from IT Department for tax, interest, or penalty. Most common: 143(1) CPC intimation after processing ITR. Respond within 30 days by paying, disputing, or requesting rectification."
          }
        },
        {
          "@type": "Question",
          "name": "How to respond to IT demand online?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Login to e-filing portal → Pending Actions → Response to Outstanding Tax Demand. Choose: Agree, Partially Agree, Disagree, or Agree to Adjustment. Submit within 30 days with documents."
          }
        },
        {
          "@type": "Question",
          "name": "What happens if I ignore the demand?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "1% monthly interest accrues. Demand confirmed after 30 days. Refund adjusted automatically. Bank account, salary, property can be attached. Prosecution possible. Never ignore."
          }
        },
        {
          "@type": "Question",
          "name": "Can I dispute the demand?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Yes. Data error: file S.154 rectification on portal. Substantive dispute: file appeal (Form 35) to CIT(A) within 30 days. Request stay of demand during appeal. Patron prepares both."
          }
        },
        {
          "@type": "Question",
          "name": "Why did I receive demand after filing ITR?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "TDS mismatch (26AS vs ITR), unreported income (FD/rental/capital gains via AIS), advance tax shortfall, deductions disallowed by CPC, late filing penalty, or CPC error. Patron analyses specific cause."
          }
        },
        {
          "@type": "Question",
          "name": "Will refund be adjusted against demand?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Yes. Under Section 245, pending refund from any AY adjusted against outstanding demand automatically if no response within 30 days. File Disagree with documentation to prevent."
          }
        },
        {
          "@type": "Question",
          "name": "What is the cost?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Analysis + response from Rs 2,999. Rectification from Rs 2,999. Appeal to CIT(A) from Rs 9,999. TDS mismatch from Rs 2,999. ESOP demand from Rs 7,999. Patron provides upfront estimate."
          }
        },
        {
          "@type": "Question",
          "name": "How to check outstanding demands?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Login to e-filing portal → Pending Actions → Response to Outstanding Tax Demand. Shows all AY-wise outstanding demands with amounts and response status."
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
                        IT Demand under Section 156 in Gurugram: Response, Rectification, and Resolution
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
                            <p class="mb-0 text-dark benefit-paragraph"><span>What:</span> Formal demand from Income Tax Department for tax, interest, or penalty payable</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Deadline:</span> 30 days from date of notice to respond/pay</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>4 Options:</span> Agree | Partially Agree | Disagree | Agree to Adjustment</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Remedies:</span> Payment (Challan ITNS 280) | Rectification (Section 154) | Appeal (CIT(A)) | Revised Return</p>
                        </div>
                    </div>

                    <p class="mb-4 fw-bold" style="color: var(--blue); font-size: 15px;">IT demand resolution for salaried professionals, MNC employees, freelancers, and business owners across Gurugram.</p>

                    <div class="hero-cta">
                        <a href="tel:+919459456700" class="btn-video text-decoration-none">
                            <span class="play-circle"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="width:14px;height:14px;color:#fff"><path d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/></svg></span>
                            Call +91 945 945 6700
                        </a>
                        <a href="mailto:sales@patronaccounting.com" class="btn-sample text-decoration-none">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="width:18px;height:18px;"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,12 2,6"/></svg>
                            Email Us
                        </a>
                        <a href="https://wa.me/919459456700?text=Hello%2C%20I%20just%20visited%20your%20Income%20Tax%20Demand%20Under%20Section%20156%20in%20Gurugram%20page.%20I%20would%20like%20to%20know%20more%20about%20it." target="_blank" class="btn-sample text-decoration-none" rel="noopener">
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
                                            'service'  => 'IT Demand Section 156 in Gurugram',
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
    'ctaText'    => 'IT demand analysis, response filing, rectification, and appeal support from Gurugram.',
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
            <a href="#overview-section" class="toc-btn active">Overview</a><a href="#what-section" class="toc-btn">Response Options</a><a href="#who-section" class="toc-btn">Consequences</a><a href="#services-section" class="toc-btn">Common Reasons</a><a href="#procedure-section" class="toc-btn">Services</a><a href="#documents-section" class="toc-btn">Prevention</a><a href="#challenges-section" class="toc-btn">ESOP Demands</a><a href="#fees-section" class="toc-btn">Fees</a><a href="#timeline-section" class="toc-btn">Timeline</a><a href="#benefits-section" class="toc-btn">Why Patron</a><a href="#comparison-section" class="toc-btn">Patron vs DIY</a><a href="#faq-section" class="toc-btn">FAQs</a>
        </div>
        <button class="toc-arrow right" id="tocRight">&#10095;</button>
    </div>
</div>

<!-- SECTION 2: OVERVIEW / INTRO + TL;DR -->
<section class="content-section" id="overview-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">IT Demand under Section 156 in Gurugram: Understanding and Responding</h2>
            <div class="content-text">
                <div class="highlight-box" style="margin-bottom:20px;">
                    <p><strong>&#128204; TL;DR - IT Demand Section 156 in Gurugram Services at a Glance</strong></p>
                    <p>Section 156 is a formal tax demand from the IT Department. Respond within 30 days on the e-filing portal. 4 options: Agree (pay), Partially Agree, Disagree (rectification/appeal), or Agree to Adjustment. Ignoring leads to 1% monthly interest, refund adjustment, bank attachment, and prosecution. Common causes: TDS mismatch, unreported income, advance tax shortfall, CPC error.</p>
                </div>
                <p>Gurugram taxpayers frequently receive Section 156 demands. For a comprehensive overview, see our <a href="#">IT Demand Section 156</a> national guide.</p><div class="table-responsive-wrapper"><table><thead><tr><th>Response Option</th><th>When to Use</th><th>Action Required</th></tr></thead><tbody><tr><td>Demand is Correct</td><td>You agree the demand is valid</td><td>Pay via Challan ITNS 280 or e-Pay Tax</td></tr><tr><td>Partially Correct</td><td>Part valid, part wrong</td><td>Pay correct portion + dispute incorrect</td></tr><tr><td>Disagree (Full)</td><td>Entire demand is incorrect</td><td>File rectification (S.154) or appeal (CIT(A))</td></tr><tr><td>Agree to Adjustment</td><td>Error acknowledged, prefer refund offset</td><td>Demand adjusted against pending refund</td></tr></tbody></table></div><p</p>
                <p>Patron analyses every demand before recommending the response. Step 1: Download order. Step 2: Compare with ITR, Form 26AS/AIS, tax payments. Step 3: Categorise discrepancy. Step 4: File response within 30 days with supporting documents.</p>
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
                <h2 class="section-title">4 Response Options - Decision Framework</h2>
                <div class="content-text what-is-definition">
                    
                    <p><strong>Option 1 - Agree:</strong> You accept the demand is valid. Pay via Challan ITNS 280 or e-Pay Tax. Example: forgot to report FD interest.</p><p><strong>Option 2 - Partially Agree:</strong> Part is valid, part is wrong. Pay the correct portion, dispute the incorrect. Example: some TDS not credited but rest is valid.</p><p><strong>Option 3 - Disagree:</strong> Entire demand is incorrect. File rectification (Section 154) if data error, or appeal to CIT(A) (Form 35) if substantive dispute. Example: CPC processing error.</p><p><strong>Option 4 - Agree to Adjustment:</strong> You acknowledge an error but prefer the demand adjusted against a pending refund from another AY.</p><p><strong>Patron's approach:</strong> Analyse demand → categorise discrepancy → choose response → file within 30 days. See <a href="/income-tax-return">Income Tax Return</a> for filing.</p>

                </div>
                <div class="highlight-box" style="margin-top:20px;">
                    <p><strong>Key Terms for IT Demand Section 156 in Gurugram:</strong></p>
                    <p><strong>Section 156:</strong> Formal demand notice from IT Department for tax, interest, or penalty payable.</p><p><strong>Section 143(1):</strong> CPC intimation/deemed demand after processing your ITR.</p><p><strong>Section 154:</strong> Rectification of errors - file on e-filing portal when demand is due to data processing error.</p><p><strong>Section 220(2):</strong> Interest at 1% per month on unpaid demand from date it becomes payable.</p><p><strong>Section 246A:</strong> Appeal to CIT(A) via Form 35 within 30 days for substantive tax disputes.</p>

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
                            <text x="100" y="170" font-size="10" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial, sans-serif">IT Demand Section 156 in Gurugram</text>
                        </svg>
                    </div>
                    <div class="illustration-badge">
                        <span>IT Demand</span>
                        <strong>S.156 Response</strong>
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
            <h2 class="section-title">Consequences of Ignoring Demand</h2>
            <div class="content-text">
                
                <div class="table-responsive-wrapper"><table><thead><tr><th>Consequence</th><th>Section</th><th>Impact</th></tr></thead><tbody><tr><td>Interest on unpaid</td><td>220(2)</td><td>1% per month on outstanding amount from date payable</td></tr><tr><td>Refund adjustment</td><td>245</td><td>Pending refund for any AY automatically adjusted against demand</td></tr><tr><td>Assessee in default</td><td>220(4)</td><td>Formally declared in default after 30 days; recovery begins</td></tr><tr><td>Asset attachment</td><td>226</td><td>Bank accounts, salary, property can be attached</td></tr><tr><td>Salary deduction</td><td>226(3)</td><td>Employer directed to deduct from salary for demand recovery</td></tr><tr><td>Prosecution</td><td>276C</td><td>Fine and/or imprisonment for willful evasion</td></tr></tbody></table></div><p><strong>Never ignore a demand.</strong> Even if you disagree, file a response within 30 days. Patron ensures timely responses to protect refunds and prevent asset attachment. See <a href="/income-tax-notice">Income Tax Notice</a> for broader notice handling.</p>

            </div>
            </div>
        </div>
    </div>
</section>

<!-- SECTION 5: OUR SERVICES -->
<section class="content-section" id="services-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Common Reasons for IT Demand in Gurugram</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Service</th><th>What We Do</th></tr></thead>
                    <tbody>
                        <tr><td>TDS Mismatch</td><td>TDS claimed in ITR doesn't match Form 26AS. Common for job changers, contract workers. Golf Course Road MNC employees frequently affected</td></tr><tr><td>Unreported Income</td><td>FD interest, rental income, capital gains from property/shares/MF not reported. CPC cross-checks AIS data</td></tr><tr><td>Advance Tax Shortfall</td><td>Business owners, freelancers with non-salary income exceeding Rs 10,000 liability. Interest under S.234B/C</td></tr><tr><td>ESOP/RSU Perquisite</td><td>ESOP value mismatch between Form 16 Part B and CPC computation. Cyber City MNC employees</td></tr><tr><td>CPC Processing Error</td><td>CPC Bengaluru incorrectly processes ITR data. Deductions disallowed, income computed differently</td></tr><tr><td>Late Filing Penalty</td><td>Section 234F penalty for ITR filed after due date. Rs 1,000-5,000 added to demand</td></tr>

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
            <h2 class="section-title">Demand Resolution Services</h2>
            <p class="section-subtitle" style="text-align:left;max-width:100%;">From demand analysis to CIT(A) appeal - complete IT demand resolution.</p>
        </header>
        <div class="steps-container">
            <div class="step-card"><div class="step-content"><span class="step-badge">Step 1</span><h3 class="step-title">Demand Analysis</h3><p class="step-description">Download Section 156 order. Compare with ITR, Form 26AS/AIS, tax payments. Identify discrepancy. Categorise: genuine error vs CPC error vs TDS mismatch vs substantive dispute. Determine correct response.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Analysed</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Categorised</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="15" y="5" width="90" height="70" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><text x="60" y="40" font-size="8" fill="#E8712C" font-weight="800" text-anchor="middle" font-family="Arial">S.156</text></svg></div><span class="illustration-label">Analysed</span><span class="step-number-large">01</span></div></div></div><div class="step-card"><div class="step-content"><span class="step-badge">Step 2</span><h3 class="step-title">Response / Rectification / Appeal</h3><p class="step-description">File response on e-filing portal within 30 days. Pay if agreed. File Section 154 rectification if data error. File Form 35 appeal to CIT(A) if substantive dispute. Request stay of demand during appeal.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Response filed</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Within 30 days</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="20" y="15" width="80" height="50" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><text x="60" y="40" font-size="8" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">RESP</text></svg></div><span class="illustration-label">Filed</span><span class="step-number-large">02</span></div></div></div><div class="step-card"><div class="step-content"><span class="step-badge">Step 3</span><h3 class="step-title">Resolution + Prevention</h3><p class="step-description">Monitor outcome. CPC issues revised order (rectification) or CIT(A) hears appeal. Once resolved, verify demand cleared on portal. Implement preventive measures: reconcile 26AS before filing, pay advance tax, report all income.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Demand resolved</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Future prevented</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="20" y="10" width="80" height="60" rx="8" fill="#E8F5E9" stroke="#25D366" stroke-width="2"/><path d="M52 40l5 5 12-12" stroke="#25D366" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/></svg></div><span class="illustration-label">Resolved</span><span class="step-number-large">03</span></div></div></div>

        </div>
    </div>
</section>

<!-- SECTION 8: DOCUMENTS REQUIRED -->
<section class="content-section" id="documents-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Preventing Future Section 156 Demands</h2>
            <div class="content-text">
                
                <div class="table-responsive-wrapper"><table><thead><tr><th>Prevention Measure</th><th>Action</th><th>Gurugram Context</th></tr></thead><tbody><tr><td>Reconcile 26AS/AIS Before Filing</td><td>Match all TDS, interest, capital gains with ITR</td><td>Job changers between Cyber City firms</td></tr><tr><td>Pay Advance Tax on Time</td><td>Quarterly: 15 Jun, Sep, Dec, Mar</td><td>Sohna Road freelancers, business owners</td></tr><tr><td>Report All Income</td><td>FD interest, rental, capital gains, gifts &gt;50K</td><td>Property sellers, investors</td></tr><tr><td>Verify ESOP Perquisite</td><td>Match Form 16 Part B with actual computation</td><td>Cyber City MNC employees</td></tr><tr><td>File ITR on Time</td><td>Avoid S.234F penalty (Rs 1,000-5,000)</td><td>All taxpayers</td></tr></tbody></table></div><div class="highlight-box" style="margin-top:20px;"><p><strong>Patron reconciles Form 26AS/AIS before every ITR filing</strong> and ensures advance tax is computed and paid quarterly. Prevention is better than demand resolution. See <a href="/tax-planning-services">Tax Planning</a>.</p></div>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 9: CHALLENGES -->
<section class="content-section" id="challenges-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">ESOP/RSU Demand Resolution</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Challenge</th><th>Impact</th><th>How Patron Accounting Solves It</th></tr></thead>
                    <tbody>
                        <tr><td>ESOP Perquisite Mismatch</td><td>Form 16 Part B value differs from CPC computation</td><td>Patron analyses ESOP computation: FMV on exercise date minus exercise price</td></tr><tr><td>Employer TDS on ESOP</td><td>Employer deducted TDS but not reflected in 26AS</td><td>Coordinate with employer HR/payroll for TDS correction</td></tr><tr><td>RSU Taxation</td><td>RSU vesting treated as perquisite; sale as capital gains</td><td>Both events must be reported correctly in ITR</td></tr><tr><td>Multiple Grants</td><td>Different vesting dates, exercise dates, FMV computations</td><td>Common for Cyber City senior tech employees with multi-year grants</td></tr><tr><td>Double Taxation</td><td>Same ESOP income taxed as perquisite and capital gains</td><td>Patron ensures correct bifurcation to avoid double taxation demand</td></tr>

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
            <h2 class="section-title">IT Demand Response Fees</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Fee Component</th><th>Amount</th></tr></thead>
                    <tbody>
                        <tr><td>Demand Analysis + Response (Simple)</td><td>Starting from Rs 2,999 (Exl GST) | TDS mismatch, payment already made | 3-5 days</td></tr><tr><td>Rectification under Section 154</td><td>Starting from Rs 2,999-4,999 (Exl GST) | Data error correction with CPC | 5-10 days</td></tr><tr><td>Appeal to CIT(A) (Form 35)</td><td>Starting from Rs 9,999-24,999 (Exl GST) | Substantive tax dispute | 5-7 days filing</td></tr><tr><td>TDS Mismatch Resolution</td><td>Starting from Rs 2,999-7,999 (Exl GST) | Employer coordination + rectification | 7-14 days</td></tr><tr><td>ESOP/RSU Demand Resolution</td><td>Starting from Rs 7,999-14,999 (Exl GST) | ESOP computation + employer | 10-21 days</td></tr><tr><td>Multiple Year Demand Clearance</td><td>Starting from Rs 4,999-14,999 (Exl GST) | Per AY | Systematic resolution</td></tr>

                    </tbody>
                </table>
                </div>
                <p style="margin-top:16px;font-size:13px;color:var(--text-muted);font-style:italic;">All fees and charges listed are indicative only and do not constitute a binding offer. Final amounts may vary depending on the volume of work and the complexity involved.</p>
                <p style="margin-top:16px;">Professional service charges for drafting, filing, and representation are separate from the statutory fees. The exact fee depends on the complexity of the case, disputed amount, and number of hearings required. Contact us for a detailed quote.</p>
                <p style="margin-top:16px;"><strong>Get a free IT Demand Section 156 in Gurugram consultation - <a href="tel:+919459456700">Call +91 945 945 6700</a> or <a href="https://wa.me/919459456700?text=Hello%2C%20I%20just%20visited%20your%20Income%20Tax%20Demand%20Under%20Section%20156%20in%20Gurugram%20page.%20I%20would%20like%20to%20know%20more%20about%20it." target="_blank" rel="noopener">WhatsApp us</a>. No-obligation assessment.</strong></p>
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
                        <tr><td>Gurugram Office</td><td>Golf Course Extension Road - IT demand resolution for Cyber City professionals, Golf Course Road MNC employees, Sohna Road freelancers</td></tr><tr><td>Analyse Before Responding</td><td>Every demand analysed against ITR, 26AS/AIS, tax payments. Correct response chosen, not just payment</td></tr><tr><td>ESOP Expertise</td><td>ESOP/RSU perquisite computation, employer TDS reconciliation, double taxation prevention for MNC employees</td></tr><tr><td>Rectification + Appeal</td><td>Section 154 rectification for data errors. Form 35 appeal for substantive disputes. Stay of demand</td></tr><tr><td>Preventive Advisory</td><td>Reconcile 26AS before filing. Advance tax computation. Report all income. Prevent future demands</td></tr>

                    </tbody>
                </table>
                </div>
                <div class="highlight-box" style="margin-top:16px;">
                    
                    <p><strong>Critical:</strong> Respond within 30 days. Interest at 1%/month accrues immediately. Refund adjustment happens automatically. Bank attachment possible after default. Never ignore. Patron analyses before responding - not all demands should be paid.</p>

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
            <h2 class="section-title">Patron vs DIY Comparison</h2>
        </div>
        <div class="features-grid"><article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><h3 class="feature-title">Patron: Analyse First</h3><p class="feature-text">Every demand analysed against ITR, 26AS, AIS, payments. Many demands are incorrect and should be disputed, not paid.</p></article><article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 9v2m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><h3 class="feature-title">DIY: Pay Without Checking</h3><p class="feature-text">Many taxpayers pay demands that should have been disputed. Overpayment is difficult to recover. Analyse first.</p></article><article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M14 2H6a2 2 0 00-2 2v16a2 2 0 002 2h12a2 2 0 002-2V8z"/><path d="M14 2v6h6M16 13H8M16 17H8"/></svg></div><h3 class="feature-title">Patron: ESOP Expert</h3><p class="feature-text">ESOP computation, employer coordination, double taxation prevention. Specific expertise for MNC employees.</p></article><article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><path d="M12 6v6l4 2"/></svg></div><h3 class="feature-title">Patron: Prevent Recurrence</h3><p class="feature-text">Reconcile 26AS before filing. Compute advance tax. Report all income. Prevention eliminates future demands.</p></article></div>
    </div>
</section>

<!-- SECTION 12A: SOCIAL PROOF -->
<section class="content-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Trusted by 10,000+ Businesses Across India</h2>
            <div class="content-text">
                
                <p><strong>Trust Banner:</strong> 10,000+ Businesses Served | 4.9 Google Rating | 50,000+ Documents Filed | 15+ Years of Practice</p><blockquote style="border-left:3px solid var(--orange);padding:16px 20px;margin:20px 0;background:var(--orange-lighter);border-radius:0 var(--radius-sm) var(--radius-sm) 0;"><p style="font-style:italic;margin-bottom:8px;">"Rs 2.8 lakh demand for TDS mismatch after job change. Patron analysed, found employer hadn't updated 26AS. Filed rectification. Demand reduced to zero in 3 weeks."</p><p style="font-weight:700;font-size:14px;margin:0;">- IT Manager, Golf Course Road MNC</p></blockquote><blockquote style="border-left:3px solid var(--orange);padding:16px 20px;margin:20px 0;background:var(--orange-lighter);border-radius:0 var(--radius-sm) var(--radius-sm) 0;"><p style="font-style:italic;margin-bottom:8px;">"ESOP demand of Rs 4.5 lakh. Patron found double taxation - same income counted as perquisite and capital gains. Filed Section 154 rectification. Fully resolved."</p><p style="font-weight:700;font-size:14px;margin:0;">- Tech Lead, DLF Cyber City</p></blockquote>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 13: SELF-FILING vs PROFESSIONAL COMPARISON -->
<section class="content-section" id="comparison-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Patron vs DIY Response</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Factor</th><th>Patron Managed</th><th>DIY</th></tr></thead>
                    <tbody>
                        <tr><td>Demand Analysis</td><td>Compare with ITR/26AS/AIS before response</td><td>Often pay without checking</td></tr><tr><td>Response Choice</td><td>Correct option chosen per discrepancy</td><td>Default to "Agree" (overpayment risk)</td></tr><tr><td>Rectification</td><td>Section 154 with proper documentation</td><td>Generic filing, often rejected</td></tr><tr><td>ESOP Expertise</td><td>Computation + employer coordination</td><td>Not available</td></tr><tr><td>Appeal</td><td>Form 35 with grounds + evidence + stay</td><td>Self-filing without proper grounds</td></tr><tr><td>Prevention</td><td>26AS reconciliation + advance tax + all income</td><td>Same errors repeated</td></tr>

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
                
                <ul><li><a href="#">IT Demand Section 156 (National)</a></li><li><a href="/income-tax-return">Income Tax Return</a></li><li><a href="/income-tax-notice">Income Tax Notice</a></li><li><a href="/tax-planning-services">Tax Planning</a></li><li><a href="/accounting-services">Accounting Services</a></li></ul>

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
                
                <p><strong>Governing Law:</strong> Income Tax Act, 1961 | Income Tax Rules, 1962</p><p><strong>Key Sections:</strong> 156 (demand notice) | 143(1) (CPC intimation) | 154 (rectification) | 220(2) (interest 1%/month) | 220(6) (stay during appeal) | 226 (recovery/attachment) | 245 (refund adjustment) | 246A (appeal to CIT(A))</p><p><strong>Portal:</strong> incometax.gov.in → Pending Actions → Response to Outstanding Tax Demand</p><p><strong>Payment:</strong> Challan ITNS 280 via e-Pay Tax or authorised banks</p><p><strong>Consequences:</strong> 1% interest/month | refund adjustment | bank attachment | prosecution for willful default.</p>

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
                    <h2 class="faq-expanded__title">FAQs - IT Demand Section 156 in Gurugram</h2>
                    <p class="faq-expanded__lead">Common questions about Section 156 demand notice, response options, rectification, appeal, and consequences for Gurugram taxpayers.</p>
                    @include('partials.bigin-form', [
                        'variant'  => 'compact',
                        'service'  => 'IT Demand Section 156 in Gurugram',
                        'city'     => 'Gurugram',
                    ])
                </aside>
                <div class="faq-expanded__list">
                    <div class="faq-expanded__item" id="faq-1">
                        <h3 class="faq-expanded__q">What is a Section 156 demand notice?</h3>
                        <div class="faq-expanded__a"><p>Formal demand from IT Department for tax, interest, or penalty. Most common: 143(1) CPC intimation after processing ITR. Respond within 30 days by paying, disputing, or requesting rectification.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-2">
                        <h3 class="faq-expanded__q">How to respond to IT demand online?</h3>
                        <div class="faq-expanded__a"><p>Login to e-filing portal → Pending Actions → Response to Outstanding Tax Demand. Choose: Agree, Partially Agree, Disagree, or Agree to Adjustment. Submit within 30 days with documents.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-3">
                        <h3 class="faq-expanded__q">What happens if I ignore the demand?</h3>
                        <div class="faq-expanded__a"><p>1% monthly interest accrues. Demand confirmed after 30 days. Refund adjusted automatically. Bank account, salary, property can be attached. Prosecution possible. Never ignore.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-4">
                        <h3 class="faq-expanded__q">Can I dispute the demand?</h3>
                        <div class="faq-expanded__a"><p>Yes. Data error: file S.154 rectification on portal. Substantive dispute: file appeal (Form 35) to CIT(A) within 30 days. Request stay of demand during appeal. Patron prepares both.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-5">
                        <h3 class="faq-expanded__q">Why did I receive demand after filing ITR?</h3>
                        <div class="faq-expanded__a"><p>TDS mismatch (26AS vs ITR), unreported income (FD/rental/capital gains via AIS), advance tax shortfall, deductions disallowed by CPC, late filing penalty, or CPC error. Patron analyses specific cause.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-6">
                        <h3 class="faq-expanded__q">Will refund be adjusted against demand?</h3>
                        <div class="faq-expanded__a"><p>Yes. Under Section 245, pending refund from any AY adjusted against outstanding demand automatically if no response within 30 days. File Disagree with documentation to prevent.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-7">
                        <h3 class="faq-expanded__q">What is the cost?</h3>
                        <div class="faq-expanded__a"><p>Analysis + response from Rs 2,999. Rectification from Rs 2,999. Appeal to CIT(A) from Rs 9,999. TDS mismatch from Rs 2,999. ESOP demand from Rs 7,999. Patron provides upfront estimate.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-8">
                        <h3 class="faq-expanded__q">How to check outstanding demands?</h3>
                        <div class="faq-expanded__a"><p>Login to e-filing portal → Pending Actions → Response to Outstanding Tax Demand. Shows all AY-wise outstanding demands with amounts and response status.</p></div>
                    </div>
                </div>
            </div>


            <!-- Quick Answers -->
            <div class="highlight-box" style="margin-top:32px;">
                <p><strong>Quick Answers</strong></p>
                <p><strong>IT demand kya hai?</strong> Income Tax Department se tax/interest/penalty ki formal demand. 30 din mein respond karna padta hai.</p><p><strong>Ignore karein toh kya hoga?</strong> 1% monthly interest, refund adjust, bank account attach, prosecution. Kabhi ignore mat karo.</p><p><strong>Dispute kar sakte hain?</strong> Haan. Data error: Section 154 rectification. Tax dispute: CIT(A) appeal (Form 35).</p>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 18: URGENCY CTA -->
<section class="content-section" style="background: var(--orange-lighter) !important; border-left: 4px solid var(--orange);">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Respond Within 30 Days - Interest Accrues Immediately</h2>
            <div class="content-text">
                
                <p>Section 156 demand: 30-day deadline. 1% monthly interest. Refund adjustment automatic. Bank attachment possible. Never ignore - analyse first. Not all demands should be paid. Many are CPC errors or TDS mismatches.</p><p><strong><a href="tel:+919459456700">Call +91 945 945 6700</a> or <a href="https://wa.me/919459456700?text=Hello%2C%20I%20just%20visited%20your%20Income%20Tax%20Demand%20Under%20Section%20156%20in%20Gurugram%20page.%20I%20would%20like%20to%20know%20more%20about%20it." target="_blank" rel="noopener">WhatsApp us</a>.</strong></p>

            </div>
        </div>
    </div>
</section>

<!-- CONCLUSION + CTA BLOCK (Dark) -->
<section class="content-section" style="background: var(--blue) !important;">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title" style="color:#FFFFFF !important;">Get Expert IT Demand Resolution in Gurugram</h2>
            <div class="content-text" style="text-align:left;">
                
                <p style="color:rgba(255,255,255,0.85);">Section 156 demands require prompt, informed action. Whether TDS mismatch, ESOP perquisite, advance tax shortfall, or CPC error - analyse before responding. Not all demands should be paid. Rectification and appeal are valid remedies.</p><p style="color:rgba(255,255,255,0.85);">Patron Accounting's Gurugram office provides comprehensive demand resolution: analysis, response filing, rectification, appeal, ESOP resolution, and preventive advisory.</p><p style="color:rgba(255,255,255,0.85);">With 10,000+ businesses served, a 4.9 Google rating, and 50,000+ documents filed, Patron Accounting LLP is a trusted tax resolution partner across Gurugram, NCR, and India.</p>

            </div>
            <div style="display:flex;gap:14px;flex-wrap:wrap;margin-top:24px;">
                <a href="tel:+919459456700" style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:var(--orange);color:#fff;border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#128222; Call +91 945 945 6700</a>
                <a href="https://wa.me/919459456700?text=Hello%2C%20I%20just%20visited%20your%20Income%20Tax%20Demand%20Under%20Section%20156%20in%20Gurugram%20page.%20I%20would%20like%20to%20know%20more%20about%20it." target="_blank" style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:#25D366;color:#fff;border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;" rel="noopener">&#128172; WhatsApp Us</a>
                <a href="mailto:sales@patronaccounting.com?subject=IT%20Demand%20Section%20156%20Gurugram&body=Hello%2C%20I%20just%20visited%20your%20Income%20Tax%20Demand%20Under%20Section%20156%20in%20Gurugram%20page.%20I%20would%20like%20to%20know%20more%20about%20it.%0A%0AThank%20you." style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:transparent;color:#fff;border:2px solid rgba(255,255,255,0.3);border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#9993;&#65039; Email Us</a>
            </div>
            <p style="color:rgba(255,255,255,0.7);font-size:13px;margin-top:16px;">Book a Free Consultation - No Obligation.</p>
        </div>
    </div>
</section>

<!-- GSTAT STATE BENCH CITY PAGES (32 Pages) -->
<section class="content-section" style="padding:48px 32px;background:var(--gray-50);">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title" style="text-align:center;margin-bottom:12px;">IT Demand Section 156 - Available Cities</h2>
            <p style="text-align:center;color:var(--text-muted);font-size:15px;margin-bottom:40px;">Expert IT demand resolution across major Indian cities</p>
          
            <div class="pa-city-block" style="margin-bottom:40px;"><div class="pa-block-title">City-Wise IT Demand Resolution</div><div class="pa-block-sub">Select your city</div><div class="pa-city-grid"><a href="#" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Pune</div><div class="pa-card-sub">Maharashtra</div></div></a><a href="#" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Mumbai</div><div class="pa-card-sub">Maharashtra</div></div></a><a href="#" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Delhi</div><div class="pa-card-sub">Delhi NCR</div></div></a><div class="pa-city-card" style="opacity:0.6; pointer-events:none; border:2px solid var(--orange); position:relative;"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Gurugram</div><div class="pa-card-sub">Haryana</div></div><span style="position:absolute; top:6px; right:8px; font-size:10px; color:var(--orange); font-weight:700; text-transform:uppercase; letter-spacing:0.5px;">You're here</span></div></div></div><div class="pa-city-block"><div class="pa-block-title">Related Services in Gurugram</div><div class="pa-block-sub">End-to-end tax support</div><div class="pa-cross-grid"><a href="/income-tax-return-filing/gurugram" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Income Tax Return</div><div class="pa-card-sub">Gurugram</div></div></a><a href="/income-tax-notice/gurugram" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Income Tax Notice</div><div class="pa-card-sub">Gurugram</div></div></a><a href="/tax-planning-services/gurugram" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Tax Planning</div><div class="pa-card-sub">Gurugram</div></div></a><a href="/accounting-services/gurugram" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Accounting Services</div><div class="pa-card-sub">Gurugram</div></div></a><a href="/gst-registration/gurugram" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">GST Registration</div><div class="pa-card-sub">Gurugram</div></div></a><a href="/legal-drafting/gurugram" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Legal Drafting</div><div class="pa-card-sub">Gurugram</div></div></a></div></div>
        </div>
    </div>
</section>

<!-- CONTENT FRESHNESS FOOTER -->
<section class="content-section" style="padding:32px;">
    <div class="content-container">
        <div class="text-content" style="font-size:13px;color:var(--text-muted);">
            <p><strong>Content Created:</strong> 03 April 2026 &nbsp;|&nbsp; <strong>Last Updated:</strong> <span id="lastUpdatedFooter">03 April 2026</span> &nbsp;|&nbsp; <strong>Next Review:</strong> 03 July 2026 &nbsp;|&nbsp; <strong>Reviewed By:</strong> CA &amp; CS Team, Patron Accounting LLP</p>
            <p>This page is reviewed quarterly. Section 156, e-filing portal procedures, CPC processing, and rectification timelines are verified.</p>
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
