
@extends('layouts.service-app')

<!-- External Dependencies (loaded by master layout in production) -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Barlow:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,400&family=DM+Sans:opsz,wght@9..40,400;9..40,500;9..40,600;9..40,700&display=swap" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

@section('meta')
    <title>Income Tax Demand u/s 156 Delhi NCR – Reply &amp; Payment</title>
    <meta name="description" content="CA-assisted response to income tax demand notice under Section 156 in Delhi. Agree, dispute or appeal outstanding demands. Serving Connaught Place, Nehru Place, Okhla taxpayers. Call +91 945 945 6700.">
    <link rel="canonical" href="/income-tax-demand-under-section-156/delhi">
    <meta name="robots" content="index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1">
    <meta property="og:title" content="Income Tax Demand u/s 156 Delhi NCR – Reply &amp; Payment">
    <meta property="og:description" content="CA-assisted response to income tax demand notice under Section 156 in Delhi. Agree, dispute or appeal outstanding demands. Serving Connaught Place, Nehru Place, Okhla taxpayers. Call +91 945 945 6700.">
    <meta property="og:url" content="/income-tax-demand-under-section-156/delhi">
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="Patron Accounting">
    <meta property="og:image" content="https://www.patronaccounting.com/images/og-default-square.png">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="1200">
    <meta property="og:image:type" content="image/png">
    <meta property="og:image:secure_url" content="https://www.patronaccounting.com/images/og-default-square.png">
    <meta property="og:image:alt" content="Patron Accounting - partner you can rely on">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Income Tax Demand u/s 156 Delhi NCR – Reply &amp; Payment">
    <meta name="twitter:description" content="CA-assisted response to income tax demand notice under Section 156 in Delhi. Agree, dispute or appeal outstanding demands. Serving Connaught Place, Nehru Place, Okhla taxpayers. Call +91 945 945 6700.">
    <meta name="twitter:image" content="https://www.patronaccounting.com/images/og-default-square.png">
@endsection

@section('schema')
    <script type="application/ld+json">{
  "@context": "https://schema.org",
  "@graph": [
    {
      "@type": "Service",
      "name": "IT Demand Notice Response in Delhi",
      "description": "CA-assisted response to income tax demand notice under Section 156 in Delhi. Agree, dispute or appeal outstanding demands. Serving Connaught Place, Nehru Place, Okhla taxpayers. Call +91 945 945 6700.",
      "url": "https://www.patronaccounting.com/income-tax-demand-under-section-156/delhi",
      "serviceType": "IT Demand Notice Response in Delhi",
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
        "url": "https://www.patronaccounting.com/income-tax-demand-under-section-156/delhi",
        "price": "2999"
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
          "name": "IT Demand S.156",
          "item": "https://www.patronaccounting.com/income-tax-demand-under-section-156"
        },
        {
          "@type": "ListItem",
          "position": 3,
          "name": "IT Demand S.156 in Delhi",
          "item": "https://www.patronaccounting.com/income-tax-demand-under-section-156/delhi"
        }
      ]
    },
    {
      "@type": "FAQPage",
      "mainEntity": [
        {
          "@type": "Question",
          "name": "Which IT office in Delhi issues Section 156 notices?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "AOs at Civic Centre Minto Road, Aayakar Bhawan Laxmi Nagar and C.R. Building I.P. Estate. CPC Bengaluru also issues deemed demands under Section 143(1)."
          }
        },
        {
          "@type": "Question",
          "name": "What is penalty for not paying Section 156 demand?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Interest 1% per month under Section 220(2). Penalty up to demand amount under Section 221. Bank account attachment possible."
          }
        },
        {
          "@type": "Question",
          "name": "How long to respond to Section 156 notice?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "30 days from date of service. Interest starts from day 31 automatically. Can apply for extension before deadline."
          }
        },
        {
          "@type": "Question",
          "name": "Can I dispute incorrect demand?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Yes. File Section 154 rectification for CPC errors or Section 246A appeal for assessment orders within 30 days."
          }
        }
      ]
    }
  ]
}</script>

@endsection

@include('partials.page-css', ['file' => 'css/site.css'])
<style>
/* Amount column - right-align only on tables with .table-amount class */
        .table-amount td:last-child { color: var(--text-secondary); font-size: 14px; font-weight: 500; }
/* ============================================
           EXPERT ATTRIBUTION BOX (E-E-A-T) - Plan 3.1
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
           TOC NAVIGATION - Plan 2.2
           ============================================ */
        .toc-section {
            background: var(--gray-50); border-bottom: 1px solid var(--gray-200);
            padding: 20px 0; position: sticky; top: 100px; z-index: 50;
        }
/* Process Evidence Screenshot - Plan 3.2 */
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
                        Income Tax Demand Notice Under Section 156 in Delhi: How to Respond
                    </h1>

                    <div class="expert-attribution-box">
                        <span class="eab-check"><svg width="16" height="16" viewBox="0 0 24 24" fill="currentColor"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg></span>
                        <span class="eab-title">Reviewed by CA and CS Team, Patron Accounting LLP</span>
                        <span class="eab-meta">
                            <span>ICAI & ICSI Registered</span><span class="eab-sep">|</span>
                            <span>15+ Years Experience</span><span class="eab-sep">|</span>
                            <span>Last Updated: <span id="lastUpdated">07 April 2026</span></span>
                        </span>
                        <a href="#" class="eab-link">Verify Credentials &rarr;</a>
                    </div>

                    <div class="mb-4">
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Response Deadline:</span> 30 days from date of service of notice</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Penalty Risk:</span> 1% per month interest under Section 220(2) + penalty up to demand amount under Section 221</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Response Options:</span> Agree, partially disagree or fully disagree via e-filing portal</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>CA Assistance From:</span> Rs 2,999 for demand response and rectification filing</p>
                        </div>
                    </div>

                    <p class="mb-4 fw-bold" style="color: var(--blue); font-size: 15px;">10,000+ Businesses Served | 4.9 Google Rating | 15+ Years of Practice</p>

                    <div class="hero-cta">
                        <a href="tel:+919459456700" class="btn-video text-decoration-none">
                            <span class="play-circle"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="width:14px;height:14px;color:#fff"><path d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/></svg></span>
                            Call +91 945 945 6700
                        </a>
                        <a href="mailto:sales@patronaccounting.com?subject=IT%20Demand%20Notice%20Delhi&body=Hello%2C%0AI%20need%20help%20with%20IT%20demand%20notice.%0AThank%20you." class="btn-sample text-decoration-none">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="width:18px;height:18px;"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,12 2,6"/></svg>
                            Email Us
                        </a>
                        <a href="https://wa.me/919459456700?text=Hi%2C%20I%20received%20an%20IT%20demand%20notice%20Section%20156%20in%20Delhi.%20Please%20help." target="_blank" class="btn-sample text-decoration-none">
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
                                            'service'  => 'IT Demand Notice S.156 in Delhi',
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
    'ctaText'    => 'From demand notice response to tax planning - hear how Patron helps Delhi taxpayers resolve IT issues.',
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
            <a href="#overview-section" class="toc-btn active">Overview</a><a href="#what-section" class="toc-btn">What Is It</a><a href="#who-section" class="toc-btn">Who Gets It</a><a href="#services-section" class="toc-btn">Services</a><a href="#procedure-section" class="toc-btn">How to Respond</a><a href="#documents-section" class="toc-btn">Documents</a><a href="#challenges-section" class="toc-btn">Challenges</a><a href="#fees-section" class="toc-btn">Fees</a><a href="#timeline-section" class="toc-btn">Timeline</a><a href="#benefits-section" class="toc-btn">Why Patron</a><a href="#comparison-section" class="toc-btn">Notice Types</a><a href="#faq-section" class="toc-btn">FAQs</a>
        </div>
        <button class="toc-arrow right" id="tocRight">&#10095;</button>
    </div>
</div>

<!-- SECTION 2: OVERVIEW / INTRO + TL;DR -->
<section class="content-section" id="overview-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Income Tax Demand Notice S.156 for Delhi Taxpayers</h2>
            <div class="content-text">
                <div class="highlight-box" style="margin-bottom:20px;">
                    <p><strong>&#128204; TL;DR - IT Demand Notice S.156 in Delhi Services at a Glance</strong></p>
                    <p>A demand notice under Section 156 of the Income Tax Act, 1961 is issued by the Assessing Officer or CPC Bengaluru when any tax, interest, penalty, fine or other sum is payable following an order under the Income Tax Act. Delhi taxpayers have 30 days to pay or respond. Non-payment attracts 1% monthly interest under Section 220(2) and penalty up to the demand amount under Section 221. Patron Accounting's Delhi CA team reviews your notice, identifies errors (TDS mismatch, incorrect Section 234A/B/C interest, missed deductions) and files the response or rectification on the e-filing portal.</p>
                </div>
                <p><div class="table-responsive-wrapper"><table><thead><tr><th>Parameter</th><th>Detail</th></tr></thead><tbody>
<tr><td>Governing Section</td><td>Section 156, Income Tax Act, 1961</td></tr>
<tr><td>Issuing Authority</td><td>Assessing Officer (AO) or CPC Bengaluru (for S.143(1) intimations)</td></tr>
<tr><td>Response Deadline</td><td>30 days from date of service of notice</td></tr>
<tr><td>Interest on Non-Payment</td><td>1% per month under Section 220(2)</td></tr>
<tr><td>Penalty</td><td>Up to demand amount under Section 221</td></tr>
<tr><td>Response Portal</td><td>incometax.gov.in > Pending Actions > Response to Outstanding Demand</td></tr>
<tr><td>Delhi IT Offices</td><td>Civic Centre Minto Road | Aayakar Bhawan Laxmi Nagar | C.R. Building I.P. Estate</td></tr>
</tbody></table></div></p>
                <p><p>Delhi is home to over 1.5 crore income tax return filers - one of the highest concentrations in India. With multiple PCIT jurisdictions at Civic Centre on Minto Road, Aayakar Bhawan in Laxmi Nagar and C.R. Building at I.P. Estate, Delhi taxpayers frequently receive Section 156 demand notices for TDS mismatches (salaried employees in Connaught Place and Nehru Place), advance tax shortfalls (traders in Chandni Chowk), and disallowed expenses (manufacturers in Okhla).</p>
<p>Patron Accounting's Delhi CA team provides end-to-end demand notice response. Learn more about <a href="/income-tax-demand-under-section-156">IT Demand Under Section 156 across India</a>. Related: <a href="/income-tax-return">Income Tax Return Filing</a> and <a href="/tds-return-filing-24q">TDS Return Filing</a>.</p></p>
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
                <h2 class="section-title">What is a Demand Notice Under Section 156?</h2>
                <div class="content-text what-is-definition">
                    
                    <p>A demand notice under <strong>Section 156 of the Income Tax Act, 1961</strong> is a formal notice served by the Assessing Officer specifying a sum of tax, interest, penalty, fine or any other amount payable by the assessee following any order passed under the Act.</p>
<p>The notice is issued in <strong>Form No. 7</strong> and is triggered by various assessment orders - including intimations under Section 143(1) from CPC Bengaluru (deemed demand notices), TDS mismatch orders under Section 200A(1), reassessment orders under Section 147/148 and scrutiny assessment orders under Section 143(3).</p>
<p>For Delhi's large salaried workforce in Connaught Place, IT companies in Nehru Place and government offices across Lutyens' Delhi, Section 143(1) intimations showing demand due to TDS credit mismatch between Form 26AS and ITR are the most common trigger. For business owners in Chandni Chowk and Okhla, demands typically arise from advance tax shortfalls under Section 234B/234C or undisclosed income detected during scrutiny.</p>
<p>Delhi taxpayers must respond within <strong>30 days</strong>. Non-payment attracts 1% monthly interest and penalty up to the demand amount.</p>

                </div>
                <div class="highlight-box" style="margin-top:20px;">
                    <p><strong>Key Terms for IT Demand Notice S.156 in Delhi:</strong></p>
                    <p><strong>Section 156:</strong> Notice of Demand - formal notice specifying amount payable under the Income Tax Act.</p>
<p><strong>Form No. 7:</strong> Prescribed form for issuing demand notice under Section 156.</p>
<p><strong>Section 220(2):</strong> Interest at 1% per month on non-payment of demand within 30 days.</p>
<p><strong>Section 221:</strong> Penalty up to demand amount for continued default.</p>
<p><strong>Section 154:</strong> Rectification of mistakes - fastest route to correct CPC computation errors.</p>
<p><strong>Section 246A:</strong> Appeal to CIT (Appeals) against assessment orders creating the demand.</p>
<p><strong>Section 220(6):</strong> Stay of demand pending appeal - prevents coercive recovery.</p>

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
                            <text x="100" y="170" font-size="10" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial, sans-serif">IT Demand Notice S.156 in Delhi</text>
                        </svg>
                    </div>
                    <div class="illustration-badge">
                        <span>Tax Compliance</span>
                        <strong>IT Demand S.156 Delhi</strong>
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
            <h2 class="section-title">Who Receives IT Demand Notices in Delhi?</h2>
            <div class="content-text">
                
                <ul>
<li><strong>Salaried Professionals in Connaught Place and Nehru Place:</strong> TDS mismatch between employer-deposited TDS (Form 16/26AS) and ITR claims - the leading cause of Section 143(1) demands in Delhi.</li>
<li><strong>Trading Firms in Chandni Chowk and Lajpat Nagar:</strong> Advance tax shortfalls under Section 234B/234C for traders with fluctuating quarterly income.</li>
<li><strong>IT Companies and Startups in Nehru Place:</strong> Demands for disallowed expenses under Section 37, incorrect depreciation or TDS non-deduction under Section 194C.</li>
<li><strong>Manufacturers in Okhla Industrial Area:</strong> Inventory valuation differences, GST input credit mismatches and incorrect set-off of brought-forward losses.</li>
<li><strong>HNIs in South Delhi:</strong> Unreported capital gains on property in Greater Kailash, Vasant Vihar, Defence Colony. AIS-flagged high-value transactions.</li>
</ul>

            </div>
            </div>
        </div>
    </div>
</section>

<!-- SECTION 5: OUR SERVICES -->
<section class="content-section" id="services-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">IT Demand Notice Response Services - What Patron Handles</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Service</th><th>What We Do</th></tr></thead>
                    <tbody>
                        <tr><td>Demand Notice Analysis</td><td>Line-by-line review of S.156 notice - tax computation, TDS credit, interest under S.234A/B/C, penalty components</td></tr>
<tr><td>Form 26AS and AIS Reconciliation</td><td>Cross-verify TDS credits, advance tax, self-assessment tax against Form 26AS and Annual Information Statement</td></tr>
<tr><td>Rectification Filing (S.154)</td><td>Online rectification for CPC computational errors - fastest resolution for Delhi salaried taxpayers</td></tr>
<tr><td>Response to Outstanding Demand</td><td>Filing agree/disagree/partially disagree on e-filing portal with supporting documents</td></tr>
<tr><td>Appeal Filing (S.246A)</td><td>Filing appeal before CIT (Appeals) at Aayakar Bhawan or relevant Delhi appellate office within 30 days</td></tr>
<tr><td>Stay of Demand (S.220(6))</td><td>Application to prevent coercive recovery (bank attachment, property attachment) while appeal is heard</td></tr>
<tr><td>Revised Return Filing</td><td>If demand arises from return error and within S.139(5) time limit, filing revised return to correct issue</td></tr>
<tr><td>Recovery Prevention</td><td>Preventing bank/property attachment and passport impoundment by Delhi Tax Recovery Officer</td></tr>

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
            <h2 class="section-title">6-Step Process to Respond to IT Demand Notice in Delhi</h2>
            <p class="section-subtitle" style="text-align:left;max-width:100%;">Patron's Delhi CA team reviews your notice, identifies errors and files the response within 24-48 hours.</p>
        </header>
        <div class="steps-container">
            <div class="step-card"><div class="step-content"><span class="step-badge">Step 1</span><h3 class="step-title">Access Demand on E-Filing Portal</h3><p class="step-description">Log in to incometax.gov.in. Navigate to Pending Actions > Response to Outstanding Demand. Review all outstanding demands - assessment year, amount, interest and underlying section. Demands from CPC Bengaluru and Delhi AOs appear in the same list.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>E-filing portal</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Demand identified</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>AY confirmed</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="15" y="10" width="90" height="65" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><line x1="30" y1="28" x2="90" y2="28" stroke="#F5A623" stroke-width="3" stroke-linecap="round"/><line x1="30" y1="42" x2="80" y2="42" stroke="#14365F" stroke-width="2" stroke-linecap="round" opacity="0.3"/><circle cx="85" cy="65" r="14" fill="#FFF3E0" stroke="#F5A623" stroke-width="1.5"/><text x="85" y="69" font-size="10" fill="#F5A623" font-weight="700" text-anchor="middle" font-family="Arial">!</text></svg></div><span class="illustration-label">Notice Found</span><span class="step-number-large">01</span></div></div></div><div class="step-card"><div class="step-content"><span class="step-badge">Step 2</span><h3 class="step-title">Review Notice and Underlying Order</h3><p class="step-description">Download Form No. 7 and the underlying order. Compare tax computation against filed ITR. Check TDS credits against Form 26AS on TRACES. Patron's Delhi CA team reviews and identifies specific line items causing the demand.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Form 7 reviewed</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>ITR compared</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Errors identified</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="15" y="10" width="40" height="55" rx="4" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><rect x="65" y="10" width="40" height="55" rx="4" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><line x1="25" y1="25" x2="48" y2="25" stroke="#F5A623" stroke-width="2"/><line x1="75" y1="25" x2="98" y2="25" stroke="#F5A623" stroke-width="2"/><path d="M55 37l5 5 5-5" stroke="#14365F" stroke-width="1.5" fill="none"/></svg></div><span class="illustration-label">Analysis Done</span><span class="step-number-large">02</span></div></div></div><div class="step-card"><div class="step-content"><span class="step-badge">Step 3</span><h3 class="step-title">Reconcile Tax Credits</h3><p class="step-description">Cross-verify advance tax challans, self-assessment tax and TDS credits against IT Department records. Delhi traders frequently find advance tax not reflected due to bank upload delays. Obtain challan counterfoil as evidence.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>26AS verified</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Challans checked</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Mismatches found</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><circle cx="35" cy="45" r="20" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><circle cx="85" cy="45" r="20" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><path d="M55 45h10" stroke="#F5A623" stroke-width="2"/><text x="35" y="49" font-size="7" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">26AS</text><text x="85" y="49" font-size="7" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">ITR</text></svg></div><span class="illustration-label">Credits Reconciled</span><span class="step-number-large">03</span></div></div></div><div class="step-card"><div class="step-content"><span class="step-badge">Step 4</span><h3 class="step-title">Choose Response Option</h3><p class="step-description">Select: (a) Demand is Correct - proceed to pay, (b) Partially Correct - pay agreed portion, dispute rest, (c) Disagree - select reasons and explain, (d) Not Correct but Agree to Adjust Against Refund. Upload supporting PDFs.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Response selected</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Documents uploaded</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Reasons explained</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="15" y="15" width="90" height="55" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><path d="M30 35l8 8 16-16" stroke="#25D366" stroke-width="2.5" stroke-linecap="round"/><line x1="30" y1="50" x2="90" y2="50" stroke="#14365F" stroke-width="1" opacity="0.2"/><line x1="30" y1="58" x2="80" y2="58" stroke="#14365F" stroke-width="1" opacity="0.2"/></svg></div><span class="illustration-label">Response Filed</span><span class="step-number-large">04</span></div></div></div><div class="step-card"><div class="step-content"><span class="step-badge">Step 5</span><h3 class="step-title">File Rectification or Appeal</h3><p class="step-description">For CPC errors: file S.154 rectification online. For Delhi AO assessment orders: file S.246A appeal before CIT(A) within 30 days. Patron drafts grounds of appeal and files with relevant Delhi appellate authority.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>S.154 or S.246A</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Grounds drafted</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Filed electronically</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="20" y="15" width="80" height="55" rx="6" fill="#FFF3E0" stroke="#F5A623" stroke-width="1.5"/><text x="60" y="38" font-size="8" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">APPEAL</text><text x="60" y="50" font-size="6" fill="#14365F" text-anchor="middle" font-family="Arial">CIT(A) Delhi</text></svg></div><span class="illustration-label">Case Filed</span><span class="step-number-large">05</span></div></div></div><div class="step-card"><div class="step-content"><span class="step-badge">Step 6</span><h3 class="step-title">Stay of Demand + Monitor Resolution</h3><p class="step-description">Apply for stay under S.220(6) to prevent bank/property attachment. Track status on e-filing portal. Patron provides ongoing monitoring until demand is resolved or appeal is decided.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Stay granted</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Recovery prevented</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Demand resolved</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><circle cx="60" cy="45" r="30" fill="#E8F5E9" stroke="#25D366" stroke-width="2"/><path d="M45 45l10 10 20-20" stroke="#25D366" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/></svg></div><span class="illustration-label">All Resolved</span><span class="step-number-large">06</span></div></div></div>

        </div>
    </div>
</section>

<!-- SECTION 8: DOCUMENTS REQUIRED -->
<section class="content-section" id="documents-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Documents Required for IT Demand Notice Response in Delhi</h2>
            <div class="content-text">
                
                <div class="table-responsive-wrapper"><table><thead><tr><th>Document</th><th>Purpose</th></tr></thead><tbody>
<tr><td>Demand Notice (Form No. 7)</td><td>Downloaded from e-filing portal or served by Delhi AO</td></tr>
<tr><td>Underlying Order</td><td>S.143(1) intimation from CPC or assessment order from Delhi AO</td></tr>
<tr><td>Original ITR and Computation</td><td>Filed return with all schedules for relevant assessment year</td></tr>
<tr><td>Form 26AS / AIS</td><td>TDS credit statement and Annual Information Statement</td></tr>
<tr><td>Tax Payment Challans</td><td>Advance tax, self-assessment tax and TDS challans with CIN numbers</td></tr>
<tr><td>Form 16 / Form 16A</td><td>TDS certificates from employer and deductors</td></tr>
<tr><td>Bank Statements</td><td>Showing tax payments - useful when challan not reflected in Form 26AS</td></tr>
<tr><td>Supporting Documents</td><td>Rent receipts (HRA), investment proofs (S.80C/80D), capital gains computation</td></tr>
</tbody></table></div>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 9: CHALLENGES -->
<section class="content-section" id="challenges-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Common Challenges in IT Demand Notice Resolution in Delhi</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Challenge</th><th>Impact</th><th>How Patron Accounting Solves It</th></tr></thead>
                    <tbody>
                        <tr><td>TDS Credit Mismatch</td><td>Delhi's large corporate sector means thousands of demands due to employer TDS not reflected in Form 26AS</td><td>Patron reconciles Form 26AS against Form 16 and files rectification with CPC</td></tr>
<tr><td>Multiple PCIT Jurisdictions</td><td>Delhi taxpayers spread across Civic Centre, Aayakar Bhawan, C.R. Building, ARA Centre</td><td>Patron identifies correct AO using 'Know Your AO' and files with correct jurisdiction</td></tr>
<tr><td>Advance Tax Interest for Traders</td><td>Seasonal income causes S.234B/234C interest demands for Chandni Chowk and Lajpat Nagar traders</td><td>Patron reviews advance tax computation and files correction where interest is over-calculated</td></tr>
<tr><td>AIS-Flagged Transactions for HNIs</td><td>Property transactions in South Delhi flagged through AIS trigger capital gains demands</td><td>Patron provides complete capital gains computation with supporting documentation</td></tr>
<tr><td>Coercive Recovery Action</td><td>Delhi TROs occasionally attach bank accounts before 30-day response period expires</td><td>Patron files immediate stay of demand under S.220(6) to prevent attachment</td></tr>

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
            <h2 class="section-title">IT Demand Notice Response Fees in Delhi 2026</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Fee Component</th><th>Amount</th></tr></thead>
                    <tbody>
                        <tr><td>Patron Accounting Professional Fees</td><td class="table-amount">Starting from INR 2,499 (Exl GST and Govt. Charges)</td></tr>
<tr><td>Demand Review and Response</td><td class="table-amount">From Rs 2,999</td></tr>
<tr><td>Rectification Filing (S.154)</td><td class="table-amount">From Rs 3,999</td></tr>
<tr><td>Appeal Filing (S.246A)</td><td class="table-amount">From Rs 7,999</td></tr>
<tr><td>Stay of Demand Application</td><td class="table-amount">From Rs 4,999</td></tr>
<tr><td>Complete Demand Resolution</td><td class="table-amount">From Rs 9,999 (end-to-end)</td></tr>

                    </tbody>
                </table>
                </div>
                <p style="margin-top:16px;font-size:13px;color:var(--text-muted);font-style:italic;">All fees and charges listed are indicative only and do not constitute a binding offer. Final amounts may vary depending on the volume of work and the complexity involved.</p>
                <p style="margin-top:16px;">Professional service charges for drafting, filing, and representation are separate from the statutory fees. The exact fee depends on the complexity of the case, disputed amount, and number of hearings required. Contact us for a detailed quote.</p>
                <p style="margin-top:16px;"><strong>Get a free IT Demand Notice S.156 in Delhi consultation - <a href="tel:+919459456700">Call +91 945 945 6700</a> or <a href="https://wa.me/919459456700?text=Hi%2C%20I%20received%20an%20IT%20demand%20notice%20Section%20156.%20Please%20help." target="_blank">WhatsApp us</a>. No-obligation assessment.</strong></p>
            </div>
        </div>
    </div>
</section>

<!-- SECTION 11: TIMELINE -->
<section class="content-section" id="timeline-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">IT Demand Notice Response Timeline</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Stage</th><th>Estimated Timeline</th></tr></thead>
                    <tbody>
                        <tr><td>Demand review and analysis</td><td>1-2 working days</td></tr>
<tr><td>Form 26AS / AIS reconciliation</td><td>1-2 working days</td></tr>
<tr><td>Response filing on e-portal</td><td>1 day</td></tr>
<tr><td>Rectification (S.154) processing</td><td>1-6 months (CPC Bengaluru)</td></tr>
<tr><td>Appeal filing (S.246A)</td><td>Within 30 days of order</td></tr>
<tr><td>Stay of demand application</td><td>Same day | Decision: 1-4 weeks</td></tr>

                    </tbody>
                </table>
                </div>
                <div class="highlight-box" style="margin-top:16px;">
                    
                    <p><strong>Critical:</strong> The 30-day response deadline starts from the date of service. Interest at 1% per month under Section 220(2) starts accruing from day 31 automatically. Respond within the window to avoid interest and penalty.</p>

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
            <h2 class="section-title">Why Choose Patron for IT Demand Notice Response in Delhi</h2>
        </div>
        <div class="features-grid">
<article class="feature-card"><div class="feature-icon" style="background:var(--orange-light);"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:24px;height:24px;"><path d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/><path d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/></svg></div><h3>Delhi Office Presence</h3><p>Patron's Rohini office serves taxpayers across Delhi. Walk-in consultations for complex demand notices requiring personal document review.</p></article>
<article class="feature-card"><div class="feature-icon" style="background:var(--orange-light);"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:24px;height:24px;"><path d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"/></svg></div><h3>Delhi IT Office Expertise</h3><p>Familiar with all Delhi PCIT offices - Civic Centre, Aayakar Bhawan, C.R. Building. Correct AO identification and effective representation at hearings.</p></article>
<article class="feature-card"><div class="feature-icon" style="background:var(--orange-light);"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:24px;height:24px;"><path d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><h3>24-48 Hour Response</h3><p>Demand review and response filing within 24-48 hours of document receipt. No missed deadlines.</p></article>
<article class="feature-card"><div class="feature-icon" style="background:var(--orange-light);"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:24px;height:24px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><h3>End-to-End Resolution</h3><p>From demand review to rectification, appeal, stay of demand and resolution monitoring - single-window until demand is cleared.</p></article>
</div>
    </div>
</section>

<!-- SECTION 12A: SOCIAL PROOF -->
<section class="content-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Trusted by 10,000+ Businesses Across India</h2>
            <div class="content-text">
                
                <p><strong>10,000+ Businesses Served | 4.9 Google Rating | 50,000+ Documents Filed | 15+ Years</strong></p>
<blockquote style="border-left:4px solid var(--orange);padding:16px 20px;margin:20px 0;background:var(--orange-lighter);border-radius:0 8px 8px 0;"><p>"Received a Section 148 notice and Patron resolved it without us paying a single rupee extra."</p><p><strong>- Business Owner, Delhi</strong></p></blockquote>
<p><strong>4-Office Signal:</strong> Pune, Mumbai, Delhi, and Gurugram.</p>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 13: SELF-FILING vs PROFESSIONAL COMPARISON -->
<section class="content-section" id="comparison-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Types of IT Demand Notices - Comparison</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Notice Type</th><th>Triggering Section</th><th>Common Cause in Delhi</th></tr></thead>
                    <tbody>
                        <tr><td>CPC Intimation (Deemed Demand)</td><td>Section 143(1)</td><td>TDS credit mismatch, incorrect deduction claim - most common for Delhi salaried taxpayers</td></tr>
<tr><td>TDS Mismatch Demand</td><td>Section 200A(1)</td><td>TDS statement processing showing difference - affects Delhi employers</td></tr>
<tr><td>Scrutiny Assessment Demand</td><td>Section 143(3)</td><td>Disallowed expenses, undisclosed income - Delhi businesses under scrutiny</td></tr>
<tr><td>Reassessment Demand</td><td>Section 147/148</td><td>Income escaping assessment, AIS-flagged transactions - Delhi HNIs</td></tr>
<tr><td>Advance Tax Interest</td><td>Section 234B/234C</td><td>Advance tax shortfall - Delhi traders and business owners</td></tr>

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
            <h2 class="section-title">Related Services for Delhi Taxpayers</h2>
            <div class="content-text">
                
                <ul>
<li><a href="/income-tax-demand-under-section-156">IT Demand Under Section 156 (India)</a> - National-level demand notice response</li>
<li><a href="/income-tax-return">Income Tax Return Filing</a> - Accurate ITR filing to prevent future demands</li>
<li><a href="/income-tax-notice">Income Tax Notice Response</a> - Response to all types of IT notices</li>
<li><a href="/tds-return-filing-24q">TDS Return Filing</a> - Correct TDS filing prevents mismatch demands</li>
<li><a href="/itr-for-salary">ITR for Salary</a> - Salaried employee returns with proper TDS credit</li>
<li><a href="/tax-planning-services">Tax Planning Services</a> - Strategic planning to minimise future demands</li>
</ul>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 15A: LEGAL FRAMEWORK -->
<section class="content-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Legal Framework for IT Demand Under Section 156</h2>
            <div class="content-text">
                
                <p><strong>Section 156:</strong> Notice of Demand - formal notice specifying sum payable. Issued in Form No. 7.</p>
<p><strong>Section 220(2):</strong> Interest at 1% per month (or part) on non-payment within 30 days.</p>
<p><strong>Section 221:</strong> Penalty up to demand amount for continued default. AO must give reasonable opportunity before imposing.</p>
<p><strong>Section 220(6):</strong> Stay of demand pending appeal. AO/PCIT may grant stay subject to conditions (typically 20% payment).</p>
<p><strong>Section 154:</strong> Rectification of mistakes apparent from record. Fastest route for CPC computation errors.</p>
<p><strong>Section 246A:</strong> Appeal to CIT (Appeals) against assessment orders. Must be filed within 30 days.</p>
<p><strong>Sections 222-229:</strong> Recovery of tax - bank attachment, property attachment, arrest and detention by Tax Recovery Officer.</p>
<p><strong>Section 276C:</strong> Prosecution for wilful evasion - imprisonment 3 months to 7 years.</p>
<p><strong>Delhi-Specific:</strong> Principal CCIT Delhi Region. PCIT offices at Civic Centre (Minto Road), Aayakar Bhawan (Laxmi Nagar), C.R. Building (I.P. Estate). CIT(A) at Aayakar Bhawan. ITAT Delhi at Delhigate, I.P. Estate. Helpline: 1800 180 1961.</p>
<p><strong>Source:</strong> <a href="https://www.incometax.gov.in" target="_blank" rel="noopener">Income Tax Department (incometax.gov.in)</a>, Income Tax Act 1961</p>

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
                    <h2 class="faq-expanded__title">Frequently Asked Questions - IT Demand Notice S.156 in Delhi</h2>
                    <p class="faq-expanded__lead">Expert answers about responding to income tax demand notices under Section 156 in Delhi.</p>
                    @include('partials.bigin-form', [
                        'variant'  => 'compact',
                        'service'  => 'IT Demand Notice S.156 in Delhi',
                        'city'     => 'Delhi',
                    ])
                </aside>
                <div class="faq-expanded__list">
                    <div class="faq-expanded__item" id="faq-1">
                        <h3 class="faq-expanded__q">Which income tax office in Delhi issues Section 156 demand notices?</h3>
                        <div class="faq-expanded__a"><p>Demand notices for Delhi taxpayers are issued by AOs at multiple PCIT offices - Civic Centre at Minto Road, Aayakar Bhawan at Laxmi Nagar and C.R. Building at I.P. Estate. CPC Bengaluru also issues deemed demand notices under Section 143(1). Your specific AO depends on ward/circle jurisdiction, checkable via 'Know Your AO' on the e-filing portal.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-2">
                        <h3 class="faq-expanded__q">Can I respond to a Section 156 notice online from Delhi?</h3>
                        <div class="faq-expanded__a"><p>Yes. Log in to incometax.gov.in, go to Pending Actions > Response to Outstanding Demand and submit your response with documents. The entire process is online. For scrutiny demands, personal hearings may be needed at your Delhi IT office. Patron handles both online responses and in-person representation.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-3">
                        <h3 class="faq-expanded__q">What is the penalty for not paying a Section 156 demand?</h3>
                        <div class="faq-expanded__a"><p>Non-payment within 30 days attracts 1% monthly interest under Section 220(2). The AO can impose penalty up to the demand amount under Section 221. The Delhi Tax Recovery Officer can attach bank accounts, salary or property. Patron files timely responses and stay applications to prevent these consequences.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-4">
                        <h3 class="faq-expanded__q">How long do I have to respond to a Section 156 notice?</h3>
                        <div class="faq-expanded__a"><p>30 days from the date of service. The AO can reduce this period with Joint Commissioner approval. Interest under Section 220(2) starts from day 31 regardless of extension. Apply for instalment or extension before the deadline expires.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-5">
                        <h3 class="faq-expanded__q">Can I dispute an incorrect demand notice?</h3>
                        <div class="faq-expanded__a"><p>Yes. For CPC computation errors: file S.154 rectification (fastest route). For assessment orders: file S.246A appeal before CIT(A) within 30 days. Delhi CIT(A) offices are at Aayakar Bhawan and Civic Centre. Patron drafts grounds and represents you.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-6">
                        <h3 class="faq-expanded__q">How to check outstanding income tax demand online?</h3>
                        <div class="faq-expanded__a"><p>Log in to incometax.gov.in > Pending Actions > Response to Outstanding Demand. This lists all outstanding demands with AY, amount, interest and underlying section. Also check Intimation/Order tab under e-File > View Filed Returns for S.143(1) intimations.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-7">
                        <h3 class="faq-expanded__q">What if I already paid but demand still shows outstanding?</h3>
                        <div class="faq-expanded__a"><p>Select 'Demand is Correct' > 'Already Paid' on the response page and upload challan details (BSR code, date, serial number, CIN). Alternatively, file S.154 rectification requesting CPC to credit the payment. Patron reconciles challan details and files the correction.</p></div>
                    </div>
                </div>
            </div>


            <!-- Quick Answers -->
            <div class="highlight-box" style="margin-top:32px;">
                <p><strong>Quick Answers</strong></p>
                <p><strong>Section 156 ka notice aaya hai, kya karein?</strong> 30 din mein response do - e-filing portal par jaao, demand check karo. Galat hai toh rectification file karo. Patron Delhi office se CA madad lo.</p>
<p><strong>Form No. 7 kya hai?</strong> Section 156 ke under demand notice ka prescribed form. Isme payable amount aur due date hoti hai.</p>
<p><strong>Income tax demand kaise pay karein?</strong> E-filing portal > Pending Actions > Response to Outstanding Demand > Pay Now. Net banking, debit card ya UPI se payment hota hai.</p>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 18: URGENCY CTA -->
<section class="content-section" style="background: var(--orange-lighter) !important; border-left: 4px solid var(--orange);">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Don't Ignore Your IT Demand Notice - Act Within 30 Days</h2>
            <div class="content-text">
                
                <p>A Section 156 demand notice triggers a <strong>30-day clock</strong>. After day 30, interest at 1% per month starts automatically. Continued non-payment can lead to penalty (up to demand amount), bank account attachment and prosecution.</p>
<p><strong>Contact Patron's Delhi office immediately: <a href="tel:+919459456700">Call +91 945 945 6700</a> or <a href="https://wa.me/919459456700?text=Hi%2C%20I%20received%20an%20IT%20demand%20notice%20S.156.%20Please%20help." target="_blank">WhatsApp us</a>.</strong></p>

            </div>
        </div>
    </div>
</section>

<!-- CONCLUSION + CTA BLOCK (Dark) -->
<section class="content-section" style="background: var(--blue) !important;">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title" style="color:#FFFFFF !important;">Get Expert IT Demand Notice Response in Delhi</h2>
            <div class="content-text" style="text-align:left;">
                
                <p style="color:rgba(255,255,255,0.9);">Income tax demand notices under Section 156 are among the most common compliance issues for Delhi taxpayers. With multiple PCIT offices and demands from both CPC Bengaluru and local AOs, navigating the response process requires CA expertise familiar with Delhi's income tax landscape.</p>
<p style="color:rgba(255,255,255,0.9);">Patron Accounting's Delhi office at Rohini provides end-to-end demand response - from analysis and Form 26AS reconciliation to rectification, appeal, stay of demand and resolution monitoring. 10,000+ businesses, 15+ years, offices in Pune, Mumbai, Delhi, and Gurugram.</p>

            </div>
            <div style="display:flex;gap:14px;flex-wrap:wrap;margin-top:24px;">
                <a href="tel:+919459456700" style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:var(--orange);color:#fff;border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#128222; Call +91 945 945 6700</a>
                <a href="https://wa.me/919459456700?text=Hi%2C%20I%20received%20an%20IT%20demand%20notice%20Section%20156.%20Please%20help." target="_blank" style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:#25D366;color:#fff;border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#128172; WhatsApp Us</a>
                <a href="mailto:sales@patronaccounting.com?subject=IT%20Demand%20Notice%20S.156%20Delhi&body=Hello%2C%0AI%20received%20an%20IT%20demand%20notice.%20Please%20help.%0AThank%20you." style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:transparent;color:#fff;border:2px solid rgba(255,255,255,0.3);border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#9993;&#65039; Email Us</a>
            </div>
            <p style="color:rgba(255,255,255,0.7);font-size:13px;margin-top:16px;">Book a Free Consultation - No Obligation.</p>
        </div>
    </div>
</section>

<!-- GSTAT STATE BENCH CITY PAGES (32 Pages) -->
<section class="content-section" style="padding:48px 32px;background:var(--gray-50);">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title" style="text-align:center;margin-bottom:12px;">IT Demand Notice Response Services Across India</h2>
            <p style="text-align:center;color:var(--text-muted);font-size:15px;margin-bottom:40px;">Patron provides IT demand notice response in major cities.</p>
         
            <div class="pa-city-block" style="margin-bottom:40px;"><div class="pa-city-grid">
<a href="/income-tax-demand-under-section-156/pune" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Pune</div><div class="pa-card-sub">Maharashtra</div></div></a>
<a href="/income-tax-demand-under-section-156/mumbai" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Mumbai</div><div class="pa-card-sub">Maharashtra</div></div></a>
<div class="pa-city-card" style="opacity:0.6;pointer-events:none;border:2px solid var(--orange);position:relative;"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Delhi</div><div class="pa-card-sub">Delhi NCR</div></div><span style="position:absolute;top:6px;right:8px;font-size:10px;color:var(--orange);font-weight:700;text-transform:uppercase;letter-spacing:0.5px;">You're here</span></div>
<a href="/income-tax-demand-under-section-156/gurugram" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Gurugram</div><div class="pa-card-sub">Haryana</div></div></a>
</div></div>
<div class="pa-city-block"><div class="pa-block-title">Related Services</div><div class="pa-block-sub">End-to-end tax support for Delhi taxpayers</div><div class="pa-cross-grid">
<a href="/income-tax-return/delhi" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Income Tax Return Filing</div><div class="pa-card-sub">Delhi</div></div></a>
<a href="/tds-return-filing/delhi" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">TDS Return Filing</div><div class="pa-card-sub">Delhi</div></div></a>
<a href="/gst-notice/delhi" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">GST Notice Response</div><div class="pa-card-sub">Delhi</div></div></a>
<a href="/itr-for-business/delhi" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">ITR for Business</div><div class="pa-card-sub">Delhi</div></div></a>
<a href="/itr-for-salary/delhi" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">ITR for Salary</div><div class="pa-card-sub">Delhi</div></div></a>
<a href="/gst-registration/delhi" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">GST Registration</div><div class="pa-card-sub">Delhi</div></div></a>
</div></div>
        </div>
    </div>
</section>

<!-- CONTENT FRESHNESS FOOTER -->
<section class="content-section" style="padding:32px;">
    <div class="content-container">
        <div class="text-content" style="font-size:13px;color:var(--text-muted);">
            <p><strong>Content Created:</strong> 07 April 2026 &nbsp;|&nbsp; <strong>Last Updated:</strong> <span id="lastUpdatedFooter">07 April 2026</span> &nbsp;|&nbsp; <strong>Next Review:</strong> 07 April 2027 &nbsp;|&nbsp; <strong>Reviewed By:</strong> CA &amp; CS Team, Patron Accounting LLP</p>
            <p>This page covers income tax demand notice response under Section 156 in Delhi. Content reviewed annually and updated when Income Tax Act provisions or procedural rules change.</p>
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
