
@extends('layouts.service-app')

<!-- External Dependencies (loaded by master layout in production) -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Barlow:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,400&family=DM+Sans:opsz,wght@9..40,400;9..40,500;9..40,600;9..40,700&display=swap" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

@section('meta')
    <title>GST Audit in Delhi – GSTR-9C, Reconciliation &amp; ₹5Cr</title>
    <meta name="description" content="CA-assisted GST audit services in Delhi. GSTR-9C reconciliation, Section 65 departmental audit defence. Multi-GSTIN NCR expertise. Call +91 945 945 6700.">
    <link rel="canonical" href="/gst-audit/delhi">
    <meta name="robots" content="index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1">
    <meta property="og:title" content="GST Audit in Delhi – GSTR-9C, Reconciliation &amp; ₹5Cr">
    <meta property="og:description" content="CA-assisted GST audit services in Delhi. GSTR-9C reconciliation, Section 65 departmental audit defence. Multi-GSTIN NCR expertise. Call +91 945 945 6700.">
    <meta property="og:url" content="/gst-audit/delhi">
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="Patron Accounting">
    <meta property="og:image" content="https://www.patronaccounting.com/images/og-default-square.png">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="1200">
    <meta property="og:image:type" content="image/png">
    <meta property="og:image:secure_url" content="https://www.patronaccounting.com/images/og-default-square.png">
    <meta property="og:image:alt" content="Patron Accounting - partner you can rely on">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="GST Audit in Delhi – GSTR-9C, Reconciliation &amp; ₹5Cr">
    <meta name="twitter:description" content="CA-assisted GST audit services in Delhi. GSTR-9C reconciliation, Section 65 departmental audit defence. Multi-GSTIN NCR expertise. Call +91 945 945 6700.">
    <meta name="twitter:image" content="https://www.patronaccounting.com/images/og-default-square.png">
@endsection

@section('schema')
    <script type="application/ld+json">{
  "@context": "https://schema.org",
  "@graph": [
    {
      "@type": "Service",
      "name": "GST Audit Services in Delhi",
      "description": "CA-assisted GST audit services in Delhi. GSTR-9C reconciliation, Section 65 departmental audit defence. Multi-GSTIN NCR expertise. Call +91 945 945 6700.",
      "url": "https://www.patronaccounting.com/gst-audit/delhi",
      "serviceType": "GST Audit Services in Delhi",
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
        "url": "https://www.patronaccounting.com/gst-audit/delhi",
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
          "name": "GST Audit",
          "item": "https://www.patronaccounting.com/gst-audit"
        },
        {
          "@type": "ListItem",
          "position": 3,
          "name": "GST Audit in Delhi",
          "item": "https://www.patronaccounting.com/gst-audit/delhi"
        }
      ]
    },
    {
      "@type": "FAQPage",
      "mainEntity": [
        {
          "@type": "Question",
          "name": "Is GST audit by CA mandatory?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "No. Mandatory CA audit removed from FY 2020-21. GSTR-9C is self-certified for turnover above Rs 5 crore. But CAs essential for accurate reconciliation."
          }
        },
        {
          "@type": "Question",
          "name": "What is GSTR-9C threshold?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Aggregate turnover above Rs 5 crore on PAN-level all-India basis. All GSTINs need separate GSTR-9C even if individual turnover is below threshold."
          }
        },
        {
          "@type": "Question",
          "name": "What is Section 65 audit?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Departmental audit by GST officers at taxpayer premises. ADT-01 initiates. Completed in 3 months extendable by 6. Findings in ADT-02."
          }
        },
        {
          "@type": "Question",
          "name": "Penalty for not filing GSTR-9C?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "General penalty Rs 25,000. Non-filing increases risk of Section 65 departmental audit. Discrepancies found trigger Section 73 or 74 demand."
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
                        GST Audit Services in Delhi: GSTR-9C Reconciliation and Departmental Audit Defence
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
                            <p class="mb-0 text-dark benefit-paragraph"><span>GSTR-9C Threshold:</span> Mandatory self-certified reconciliation for aggregate turnover above Rs 5 crore (PAN-level)</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>GSTR-9 Threshold:</span> Mandatory annual return for turnover above Rs 2 crore</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Due Date:</span> 31 December of the following financial year for both GSTR-9 and GSTR-9C</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>CA Assistance From:</span> Rs 9,999 per GSTIN for GSTR-9C preparation and filing</p>
                        </div>
                    </div>

                    <p class="mb-4 fw-bold" style="color: var(--blue); font-size: 15px;">10,000+ Businesses Served | 4.9 Google Rating | 1,000+ GST Audits Completed</p>

                    <div class="hero-cta">
                        <a href="tel:+919459456700" class="btn-video text-decoration-none">
                            <span class="play-circle"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="width:14px;height:14px;color:#fff"><path d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/></svg></span>
                            Call +91 945 945 6700
                        </a>
                        <a href="mailto:sales@patronaccounting.com?subject=GST%20Audit%20Delhi&body=Hello%2C%0AI%20need%20GST%20audit%20help.%0AThank%20you." class="btn-sample text-decoration-none">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="width:18px;height:18px;"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,12 2,6"/></svg>
                            Email Us
                        </a>
                        <a href="https://wa.me/919459456700?text=Hi%2C%20I%20need%20GST%20audit%20services%20in%20Delhi.%20Please%20help." target="_blank" class="btn-sample text-decoration-none" rel="noopener">
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
                                            'service'  => 'GST Audit in Delhi',
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
    'ctaText'    => 'From GST audit to compliance - hear how Patron helps Delhi businesses stay compliant.',
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
            <a href="#overview-section" class="toc-btn active">Overview</a><a href="#what-section" class="toc-btn">What Is It</a><a href="#who-section" class="toc-btn">Who Needs It</a><a href="#services-section" class="toc-btn">Services</a><a href="#procedure-section" class="toc-btn">Process</a><a href="#documents-section" class="toc-btn">Documents</a><a href="#challenges-section" class="toc-btn">Challenges</a><a href="#fees-section" class="toc-btn">Fees</a><a href="#timeline-section" class="toc-btn">Timeline</a><a href="#benefits-section" class="toc-btn">Why Patron</a><a href="#comparison-section" class="toc-btn">Audit Types</a><a href="#faq-section" class="toc-btn">FAQs</a>
        </div>
        <button class="toc-arrow right" id="tocRight">&#10095;</button>
    </div>
</div>

<!-- SECTION 2: OVERVIEW / INTRO + TL;DR -->
<section class="content-section" id="overview-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">GST Audit Services for Delhi Businesses</h2>
            <div class="content-text">
                <div class="highlight-box" style="margin-bottom:20px;">
                    <p><strong>&#128204; TL;DR - GST Audit in Delhi Services at a Glance</strong></p>
                    <p>GST audit in Delhi encompasses three streams: (1) GSTR-9C self-certified reconciliation for turnover above Rs 5 crore, (2) departmental audit under Section 65 by GST Commissionerate Delhi, and (3) special audit under Section 66 ordered during investigation. Since Finance Act 2021 removed mandatory CA certification, GSTR-9C is self-certified - increasing both taxpayer responsibility and departmental scrutiny. Patron's Delhi CA team provides end-to-end GST audit covering GSTR-9/9C preparation, ITC reconciliation, Section 65 representation and demand prevention.</p>
                </div>
                <p><div class="table-responsive-wrapper"><table><thead><tr><th>Parameter</th><th>Detail</th></tr></thead><tbody>
<tr><td>Governing Law</td><td>CGST Act 2017 - S.2(13), S.35, S.44, S.65, S.66</td></tr>
<tr><td>GSTR-9C Threshold</td><td>Aggregate turnover > Rs 5 crore (PAN-level) - self-certified</td></tr>
<tr><td>GSTR-9 Threshold</td><td>Aggregate turnover > Rs 2 crore (mandatory)</td></tr>
<tr><td>Due Date</td><td>31 December following the financial year</td></tr>
<tr><td>Penalty</td><td>Rs 25,000 general penalty; S.73/74 demand for discrepancies</td></tr>
<tr><td>Section 65 Audit</td><td>Departmental audit by CGST/DGST officers - any taxpayer</td></tr>
<tr><td>Delhi GST Offices</td><td>GST Commissionerate Delhi (Central/North/South/East/West) | DGST Delhi</td></tr>
</tbody></table></div></p>
                <p><p>Delhi has one of India's largest concentrations of GST-registered businesses - wholesale traders in Chandni Chowk, IT companies in Nehru Place, manufacturers in Okhla and corporates at Connaught Place managing multi-state operations. Delhi businesses frequently operate with multiple GSTINs across NCR (Delhi, Haryana, UP), creating unique aggregate turnover and multi-GSTIN GSTR-9C challenges.</p>
<p>Patron's Delhi CA team provides end-to-end GST audit services. Learn more about <a href="/gst-audit">GST Audit across India</a>. Related: <a href="/gst-returns">GST Returns</a> and <a href="/gst-notice">GST Notice Response</a>.</p></p>
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
                <h2 class="section-title">What is GST Audit?</h2>
                <div class="content-text what-is-definition">
                    
                    <p><strong>GST audit</strong> is the examination of records, returns and documents maintained by a GST-registered person to verify correctness of turnover declared, taxes paid, input tax credit availed and refunds claimed (Section 2(13), CGST Act 2017).</p>
<p>Three streams: (1) <strong>GSTR-9C</strong> - self-certified reconciliation statement reconciling GSTR-9 with audited financials, mandatory for turnover > Rs 5 crore; (2) <strong>Section 65 departmental audit</strong> - conducted by CGST/DGST officers at taxpayer's premises, any registered person; (3) <strong>Section 66 special audit</strong> - directed by Commissioner during investigation.</p>
<p>For Delhi's trading firms in Chandni Chowk, manufacturers in Okhla and IT companies in Nehru Place, GSTR-9C reconciliation identifies mismatches between returns and books before the department does.</p>
<p>Since Finance Act 2021 removed mandatory CA certification, GSTR-9C is self-certified - but professional preparation remains essential for accuracy.</p>

                </div>
                <div class="highlight-box" style="margin-top:20px;">
                    <p><strong>Key Terms for GST Audit in Delhi:</strong></p>
                    <p><strong>GSTR-9:</strong> Annual return consolidating all GSTR-1 and GSTR-3B data. Mandatory for turnover > Rs 2 crore.</p>
<p><strong>GSTR-9C:</strong> Self-certified reconciliation statement between GSTR-9 and audited financials. Mandatory for turnover > Rs 5 crore.</p>
<p><strong>Section 65:</strong> Departmental audit by CGST/DGST officers at taxpayer's premises. Any taxpayer, any time.</p>
<p><strong>Section 66:</strong> Special audit ordered by Commissioner during investigation.</p>
<p><strong>DRC-03:</strong> Voluntary payment of short-paid tax to prevent demand proceedings.</p>
<p><strong>Aggregate Turnover:</strong> PAN-level, all-India computation including all GSTINs.</p>

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
                            <text x="100" y="170" font-size="10" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial, sans-serif">GST Audit in Delhi</text>
                        </svg>
                    </div>
                    <div class="illustration-badge">
                        <span>GST Compliance</span>
                        <strong>GST Audit Delhi</strong>
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
            <h2 class="section-title">Who Needs GST Audit Services in Delhi?</h2>
            <div class="content-text">
                
                <ul>
<li><strong>Turnover > Rs 5 Crore (GSTR-9C Mandatory):</strong> Wholesale traders in Chandni Chowk, manufacturers in Okhla, IT companies in Nehru Place, corporates at Connaught Place. Multi-GSTIN NCR businesses require separate GSTR-9C per GSTIN.</li>
<li><strong>Turnover > Rs 2 Crore (GSTR-9 Mandatory):</strong> Delhi businesses between Rs 2-5 crore must file GSTR-9. Reconciliation workpapers advisable for S.65 audit defence.</li>
<li><strong>ADT-01 Notice Recipients (S.65 Audit):</strong> Any Delhi business can receive departmental audit notice regardless of turnover. Increased since GSTR-9C self-certification.</li>
<li><strong>Businesses Under Investigation (S.66):</strong> If DGGI Delhi or anti-evasion units suspect wrong ITC or incorrect value, Commissioner orders special CA audit.</li>
<li><strong>Multi-GSTIN Delhi NCR Businesses:</strong> GSTINs in Delhi + Haryana (Gurugram) + UP (Noida) - separate GSTR-9/9C per GSTIN with PAN-level aggregate computation.</li>
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
            <h2 class="section-title">GST Audit Services - What Patron Handles</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Service</th><th>What We Do</th></tr></thead>
                    <tbody>
                        <tr><td>GSTR-9 Annual Return</td><td>Consolidation of GSTR-1, 3B, 2B data. Reconciliation of outward/inward supplies, ITC, tax paid. HSN-SAC verification.</td></tr>
<tr><td>GSTR-9C Reconciliation</td><td>Part A: Turnover, tax, ITC reconciliation between GSTR-9 and audited financials. Part B: Certification with observations. Per GSTIN.</td></tr>
<tr><td>ITC Verification</td><td>GSTR-2B vs purchase register. Blocked credit S.17(5). RCM verification. Rule 42/43 reversal for common credit.</td></tr>
<tr><td>GSTR-1 vs 3B Reconciliation</td><td>Invoice-level matching of outward supplies. Under/over-reported supplies identification.</td></tr>
<tr><td>Section 65 Audit Representation</td><td>ADT-01 to ADT-02 full support. Document compilation, officer coordination, reply drafting, demand prevention.</td></tr>
<tr><td>DRC-03 Voluntary Payment</td><td>If discrepancies found during 9C preparation, voluntary payment to prevent S.73/74 demand with interest saving.</td></tr>
<tr><td>Pre-Audit Health Check</td><td>Proactive review before filing season - ITC mismatches, classification errors, RCM, e-way bill gaps.</td></tr>

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
            <h2 class="section-title">6-Step GST Audit Process for Delhi Businesses</h2>
            <p class="section-subtitle" style="text-align:left;max-width:100%;">Patron provides end-to-end GST audit from data compilation to GSTR-9C filing and departmental audit representation.</p>
        </header>
        <div class="steps-container">
            <div class="step-card"><div class="step-content"><span class="step-badge">Step 1</span><h3 class="step-title">Determine Applicability and Compile Data</h3><p class="step-description">Compute PAN-level aggregate turnover. If > Rs 5 crore, GSTR-9C mandatory for every GSTIN. Download GSTR-1, 3B, 2B for full FY from gst.gov.in. Obtain audited financials.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Turnover computed</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Data downloaded</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Multi-GSTIN mapped</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="15" y="10" width="90" height="65" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><line x1="30" y1="28" x2="90" y2="28" stroke="#F5A623" stroke-width="3" stroke-linecap="round"/><line x1="30" y1="42" x2="80" y2="42" stroke="#14365F" stroke-width="1.5" opacity="0.3"/><line x1="30" y1="56" x2="70" y2="56" stroke="#14365F" stroke-width="1.5" opacity="0.3"/></svg></div><span class="illustration-label">Data Ready</span><span class="step-number-large">01</span></div></div></div><div class="step-card"><div class="step-content"><span class="step-badge">Step 2</span><h3 class="step-title">Prepare GSTR-9 Annual Return</h3><p class="step-description">Consolidate all GSTR-1 and GSTR-3B data. Reconcile outward supplies, inward supplies, ITC availed and tax paid across 12 months. HSN-SAC verification. Patron uses automated tools for high-volume matching.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Returns consolidated</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>ITC reconciled</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>HSN verified</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="15" y="10" width="40" height="55" rx="4" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><rect x="65" y="10" width="40" height="55" rx="4" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><text x="35" y="35" font-size="7" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">GSTR-1</text><text x="85" y="35" font-size="7" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">GSTR-3B</text></svg></div><span class="illustration-label">GSTR-9 Ready</span><span class="step-number-large">02</span></div></div></div><div class="step-card"><div class="step-content"><span class="step-badge">Step 3</span><h3 class="step-title">Prepare GSTR-9C Reconciliation</h3><p class="step-description">Reconcile GSTR-9 turnover with audited financials. Explain every difference - unbilled revenue, advances, credit notes, exempt supplies. Reconcile ITC. Report additional liability if any.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Turnover matched</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>ITC reconciled</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Differences explained</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="15" y="15" width="90" height="55" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><line x1="30" y1="30" x2="90" y2="30" stroke="#F5A623" stroke-width="2"/><line x1="30" y1="42" x2="90" y2="42" stroke="#25D366" stroke-width="2"/><text x="60" y="58" font-size="7" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">RECONCILED</text></svg></div><span class="illustration-label">9C Prepared</span><span class="step-number-large">03</span></div></div></div><div class="step-card"><div class="step-content"><span class="step-badge">Step 4</span><h3 class="step-title">Self-Certify and File on GST Portal</h3><p class="step-description">Authorised signatory self-certifies GSTR-9C on gst.gov.in. File before 31 December deadline. Patron prepares the complete 9C - signatory only needs to certify and submit.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Self-certified</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Filed on portal</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Deadline met</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="15" y="15" width="90" height="55" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><path d="M30 35l8 8 16-16" stroke="#25D366" stroke-width="2.5" stroke-linecap="round"/></svg></div><span class="illustration-label">Filed</span><span class="step-number-large">04</span></div></div></div><div class="step-card"><div class="step-content"><span class="step-badge">Step 5</span><h3 class="step-title">Address Discrepancies via DRC-03</h3><p class="step-description">If reconciliation reveals short-payment, file DRC-03 for voluntary payment with interest. Pre-emptive payment prevents S.73/74 demand proceedings and avoids penalty.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Discrepancies found</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>DRC-03 filed</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Demand prevented</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="20" y="15" width="80" height="55" rx="6" fill="#FFF3E0" stroke="#F5A623" stroke-width="1.5"/><text x="60" y="38" font-size="8" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">DRC-03</text><path d="M55 50l4 4 8-8" stroke="#25D366" stroke-width="2" stroke-linecap="round"/></svg></div><span class="illustration-label">Tax Corrected</span><span class="step-number-large">05</span></div></div></div><div class="step-card"><div class="step-content"><span class="step-badge">Step 6</span><h3 class="step-title">Handle S.65 Departmental Audit (if initiated)</h3><p class="step-description">If GST Commissionerate Delhi issues ADT-01, audit is at your premises for 3 months (extendable). Patron provides full representation from ADT-01 through ADT-02 findings and demand prevention.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>ADT-01 handled</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Audit attended</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>ADT-02 managed</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><circle cx="60" cy="45" r="30" fill="#E8F5E9" stroke="#25D366" stroke-width="2"/><path d="M45 45l10 10 20-20" stroke="#25D366" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/></svg></div><span class="illustration-label">Audit Complete</span><span class="step-number-large">06</span></div></div></div>

        </div>
    </div>
</section>

<!-- SECTION 8: DOCUMENTS REQUIRED -->
<section class="content-section" id="documents-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Documents Required for GST Audit</h2>
            <div class="content-text">
                
                <div class="table-responsive-wrapper"><table><thead><tr><th>Document</th><th>Purpose</th></tr></thead><tbody>
<tr><td>Audited Financial Statements</td><td>Balance Sheet, P&L, Cash Flow for the FY</td></tr>
<tr><td>All GSTR-1 Returns</td><td>Monthly/quarterly outward supply data</td></tr>
<tr><td>All GSTR-3B Returns</td><td>Summary returns showing tax liability and ITC</td></tr>
<tr><td>GSTR-2B Statements</td><td>Auto-populated ITC for each period</td></tr>
<tr><td>Purchase and Sales Registers</td><td>Invoice-level records matching GSTR-1/2B</td></tr>
<tr><td>E-Way Bills Register</td><td>Matching with invoice records for goods transport</td></tr>
<tr><td>ITC Register</td><td>Claimed, reversed, ineligible, blocked credits</td></tr>
<tr><td>RCM Records</td><td>Reverse charge payments with ITC claims</td></tr>
<tr><td>Credit/Debit Notes</td><td>All notes with GST treatment</td></tr>
<tr><td>Bank Statements</td><td>Turnover reconciliation - especially for cash-intensive businesses</td></tr>
</tbody></table></div>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 9: CHALLENGES -->
<section class="content-section" id="challenges-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Common GST Audit Challenges in Delhi</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Challenge</th><th>Impact</th><th>How Patron Accounting Solves It</th></tr></thead>
                    <tbody>
                        <tr><td>Multi-GSTIN GSTR-9C Filing</td><td>Delhi NCR businesses with GSTINs in Delhi + Haryana + UP need separate 9C per GSTIN with PAN-level aggregate</td><td>Patron handles PAN-level computation and separate filing for each GSTIN across NCR states</td></tr>
<tr><td>GSTR-1 vs 3B Mismatch</td><td>Chandni Chowk/Lajpat Nagar traders with thousands of invoices have timing and amendment differences</td><td>Patron uses automated reconciliation tools for high-volume invoice matching</td></tr>
<tr><td>Blocked ITC Under S.17(5)</td><td>Delhi companies availing ITC on motor vehicles, food, club memberships - blocked credits unreversed</td><td>Patron identifies blocked credits during reconciliation and advises DRC-03 strategy</td></tr>
<tr><td>Increasing S.65 Audits</td><td>GST Commissionerate Delhi increased departmental audits since self-certification removed CA oversight</td><td>Patron provides in-person representation at Delhi GST offices and demand prevention</td></tr>
<tr><td>RCM Non-Compliance</td><td>Nehru Place IT firms and CP professional services fail to discharge RCM on legal/security/GTA services</td><td>Patron reviews all RCM-applicable transactions and ensures compliance before filing</td></tr>

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
            <h2 class="section-title">GST Audit Service Fees in Delhi 2026</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Fee Component</th><th>Amount</th></tr></thead>
                    <tbody>
                        <tr><td>Patron Accounting Professional Fees</td><td class="table-amount">Starting from INR 9,999 (Exl GST and Govt. Charges)</td></tr>
<tr><td>GSTR-9 Preparation + Filing</td><td class="table-amount">From Rs 4,999 per GSTIN</td></tr>
<tr><td>GSTR-9C Preparation + Filing</td><td class="table-amount">From Rs 9,999 per GSTIN</td></tr>
<tr><td>GSTR-9 + 9C Combined</td><td class="table-amount">From Rs 12,999 per GSTIN</td></tr>
<tr><td>Multi-GSTIN Package (3+)</td><td class="table-amount">From Rs 9,999 per GSTIN</td></tr>
<tr><td>Section 65 Audit Representation</td><td class="table-amount">From Rs 19,999</td></tr>
<tr><td>Pre-Audit Health Check</td><td class="table-amount">From Rs 7,999</td></tr>

                    </tbody>
                </table>
                </div>
                <p style="margin-top:16px;font-size:13px;color:var(--text-muted);font-style:italic;">All fees and charges listed are indicative only and do not constitute a binding offer. Final amounts may vary depending on the volume of work and the complexity involved.</p>
                <p style="margin-top:16px;">Professional service charges for drafting, filing, and representation are separate from the statutory fees. The exact fee depends on the complexity of the case, disputed amount, and number of hearings required. Contact us for a detailed quote.</p>
                <p style="margin-top:16px;"><strong>Get a free GST Audit in Delhi consultation - <a href="tel:+919459456700">Call +91 945 945 6700</a> or <a href="https://wa.me/919459456700?text=Hi%2C%20I%20need%20GST%20audit%20services%20in%20Delhi." target="_blank" rel="noopener">WhatsApp us</a>. No-obligation assessment.</strong></p>
            </div>
        </div>
    </div>
</section>

<!-- SECTION 11: TIMELINE -->
<section class="content-section" id="timeline-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">GST Audit Timeline in Delhi</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Stage</th><th>Estimated Timeline</th></tr></thead>
                    <tbody>
                        <tr><td>Data compilation and download</td><td>3-5 working days</td></tr>
<tr><td>GSTR-9 preparation</td><td>5-10 working days</td></tr>
<tr><td>GSTR-9C reconciliation</td><td>5-10 working days</td></tr>
<tr><td>Self-certification and filing</td><td>1-2 days</td></tr>
<tr><td>DRC-03 filing (if needed)</td><td>1-2 days</td></tr>
<tr><td>Due date</td><td>31 December following the FY</td></tr>

                    </tbody>
                </table>
                </div>
                <div class="highlight-box" style="margin-top:16px;">
                    
                    <p><strong>Recommendation:</strong> Start GSTR-9/9C preparation by October to allow adequate time for reconciliation and discrepancy resolution before the 31 December deadline. Delhi NCR multi-GSTIN businesses should start even earlier.</p>

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
            <h2 class="section-title">Why Choose Patron for GST Audit in Delhi</h2>
        </div>
        <div class="features-grid">
<article class="feature-card"><div class="feature-icon" style="background:var(--orange-light);"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:24px;height:24px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><h3>1,000+ GST Audits Completed</h3><p>High-volume Delhi trading firms, multi-GSTIN NCR operations and complex manufacturing units in Okhla.</p></article>
<article class="feature-card"><div class="feature-icon" style="background:var(--orange-light);"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:24px;height:24px;"><path d="M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 104 0 2 2 0 012-2h1.064M15 20.488V18a2 2 0 012-2h3.064M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><h3>Multi-GSTIN NCR Expertise</h3><p>PAN-level aggregate computation and separate GSTR-9C for Delhi, Haryana, UP GSTINs under same PAN.</p></article>
<article class="feature-card"><div class="feature-icon" style="background:var(--orange-light);"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:24px;height:24px;"><path d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/><path d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/></svg></div><h3>Delhi Office for S.65 Audits</h3><p>In-person representation at Section 65 audits by GST Commissionerate Delhi officers at your premises.</p></article>
<article class="feature-card"><div class="feature-icon" style="background:var(--orange-light);"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:24px;height:24px;"><path d="M13 10V3L4 14h7v7l9-11h-7z"/></svg></div><h3>Automated Reconciliation</h3><p>Technology-driven invoice matching for GSTR-1 vs books, GSTR-2B vs purchases - handling thousands of invoices.</p></article>
</div>
    </div>
</section>

<!-- SECTION 12A: SOCIAL PROOF -->
<section class="content-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Trusted by 10,000+ Businesses Across India</h2>
            <div class="content-text">
                
                <p><strong>10,000+ Businesses Served | 4.9 Google Rating | 1,000+ GST Audits | 15+ Years</strong></p>
<blockquote style="border-left:4px solid var(--orange);padding:16px 20px;margin:20px 0;background:var(--orange-lighter);border-radius:0 8px 8px 0;"><p>"Patron handled our GSTR-9C for three GSTINs. Their reconciliation report caught Rs 1.2 lakh in excess ITC we had missed - saving us from a potential demand."</p><p><strong>- Manufacturing Company, Delhi NCR</strong></p></blockquote>
<p><strong>4-Office Signal:</strong> Pune, Mumbai, Delhi, and Gurugram.</p>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 13: SELF-FILING vs PROFESSIONAL COMPARISON -->
<section class="content-section" id="comparison-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Types of GST Audit - Comparison</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Type</th><th>Section</th><th>Who Initiates</th><th>Threshold</th></tr></thead>
                    <tbody>
                        <tr><td>GSTR-9C Reconciliation</td><td>Section 44</td><td>Taxpayer (self-certified)</td><td>Turnover > Rs 5 crore</td></tr>
<tr><td>Departmental Audit</td><td>Section 65</td><td>GST Commissioner</td><td>Any taxpayer, any turnover</td></tr>
<tr><td>Special Audit</td><td>Section 66</td><td>Commissioner on reference</td><td>During scrutiny/investigation</td></tr>

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
            <h2 class="section-title">Related Services for Delhi Businesses</h2>
            <div class="content-text">
                
                <ul>
<li><a href="/gst-audit">GST Audit (India)</a> - National-level GST audit services</li>
<li><a href="/gst-returns">GST Returns</a> - Monthly/quarterly return filing</li>
<li><a href="/gst-notice">GST Notice Response</a> - Notice handling and representation</li>
<li><a href="/gst-registration">GST Registration</a> - New GSTIN registration</li>
<li><a href="/tax-audit">Tax Audit</a> - Income tax statutory audit</li>
<li><a href="/statutory-audit">Statutory Audit</a> - Company audit compliance</li>
</ul>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 15A: LEGAL FRAMEWORK -->
<section class="content-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Legal Framework for GST Audit</h2>
            <div class="content-text">
                
                <p><strong>CGST Act 2017:</strong> S.2(13) (Audit definition), S.35 (Accounts), S.44 (Annual return), S.65 (Departmental audit), S.66 (Special audit), S.73 (Non-fraud demand), S.74 (Fraud demand).</p>
<p><strong>Key Rules:</strong> Rule 80 (Annual return + reconciliation). CBIC Notification 29/2021 (GSTR-9C self-certification for Rs 5 crore+). Notification 15/2025 (GSTR-9 optional below Rs 2 crore for FY 2024-25).</p>
<p><strong>Forms:</strong> GSTR-9 (Annual Return) | GSTR-9C (Reconciliation) | ADT-01 (S.65 audit notice) | ADT-02 (Audit findings) | DRC-03 (Voluntary payment) | DRC-01 (Show cause).</p>
<p><strong>Penalties:</strong> GSTR-9 late: Rs 200/day, max 0.25% turnover. GSTR-9C non-filing: Rs 25,000. S.73 demand: tax + interest. S.74 fraud: tax + interest + penalty equal to tax.</p>
<p><strong>Delhi-Specific:</strong> Union Territory - CGST + DGST apply. GST Commissionerate Delhi across 5 zones. No state Professional Tax. DGGI Delhi active on S.66 special audits.</p>
<p><strong>Source:</strong> <a href="https://www.gst.gov.in" target="_blank" rel="noopener">GST Portal (gst.gov.in)</a>, CGST Act 2017</p>

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
                    <h2 class="faq-expanded__title">FAQs - GST Audit Services in Delhi</h2>
                    <p class="faq-expanded__lead">Expert answers about GST audit, GSTR-9C reconciliation and departmental audits in Delhi.</p>
                    @include('partials.bigin-form', [
                        'variant'  => 'compact',
                        'service'  => 'GST Audit in Delhi',
                        'city'     => 'Delhi',
                    ])
                </aside>
                <div class="faq-expanded__list">
                    <div class="faq-expanded__item" id="faq-1">
                        <h3 class="faq-expanded__q">Which GST office handles audits in Delhi?</h3>
                        <div class="faq-expanded__a"><p>GST Commissionerate Delhi operates across Central, North, South, East, West zones for S.65 departmental audits. CGST by Central officers, DGST by Delhi government officers. Audits at taxpayer's premises. Patron coordinates across all zones.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-2">
                        <h3 class="faq-expanded__q">Is GST audit by CA still mandatory in 2026?</h3>
                        <div class="faq-expanded__a"><p>No. Mandatory CA audit removed from FY 2020-21. GSTR-9C is self-certified for turnover > Rs 5 crore. But businesses still engage CAs because reconciliation is complex and errors trigger S.73/74 demands.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-3">
                        <h3 class="faq-expanded__q">What is the GSTR-9C threshold?</h3>
                        <div class="faq-expanded__a"><p>Aggregate turnover > Rs 5 crore (PAN-level, all-India). If Delhi + Haryana + UP GSTINs together exceed Rs 5 crore, every GSTIN needs separate GSTR-9C even if individual turnover is below threshold.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-4">
                        <h3 class="faq-expanded__q">What is penalty for not filing GSTR-9C?</h3>
                        <div class="faq-expanded__a"><p>General penalty Rs 25,000. Non-filing increases risk of S.65 departmental audit. If department finds undisclosed discrepancies, S.73 demand (tax + interest) or S.74 (tax + interest + penalty equal to tax for fraud).</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-5">
                        <h3 class="faq-expanded__q">What is Section 65 departmental audit?</h3>
                        <div class="faq-expanded__a"><p>GST officers audit at your premises. ADT-01 initiates, completed in 3 months (extendable 6 months). Findings in ADT-02. If discrepancies found, S.73/74 demand may follow. Patron provides end-to-end representation.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-6">
                        <h3 class="faq-expanded__q">What if discrepancies found during GSTR-9C?</h3>
                        <div class="faq-expanded__a"><p>File DRC-03 for voluntary payment of differential tax with S.50 interest. Pre-emptive payment prevents department demand and avoids penalty. Patron identifies discrepancies and advises optimal DRC-03 strategy.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-7">
                        <h3 class="faq-expanded__q">How does aggregate turnover work for NCR businesses?</h3>
                        <div class="faq-expanded__a"><p>PAN-level all-India computation. Delhi Rs 3 crore + Haryana Rs 1.5 crore + UP Rs 1 crore = Rs 5.5 crore aggregate. All three GSTINs need GSTR-9C even though individual turnovers are below Rs 5 crore.</p></div>
                    </div>
                </div>
            </div>


            <!-- Quick Answers -->
            <div class="highlight-box" style="margin-top:32px;">
                <p><strong>Quick Answers</strong></p>
                <p><strong>GST audit ab mandatory nahi hai kya?</strong> CA se audit mandatory nahi hai FY 2020-21 se. Lekin Rs 5 crore se zyada turnover par GSTR-9C self-certified file karna zaroori hai. S.65 audit kisi bhi taxpayer par ho sakta hai.</p>
<p><strong>GSTR-9C kab tak file karna hai?</strong> 31 December - financial year ke baad.</p>
<p><strong>Multi-GSTIN hai toh?</strong> Har GSTIN ka alag GSTR-9 aur 9C file karna padega. Aggregate turnover PAN level par calculate hota hai.</p>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 18: URGENCY CTA -->
<section class="content-section" style="background: var(--orange-lighter) !important; border-left: 4px solid var(--orange);">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Don't Miss the 31 December GSTR-9C Deadline</h2>
            <div class="content-text">
                
                <p>Missing the GSTR-9C deadline exposes your business to <strong>Rs 25,000 penalty</strong> and increased risk of Section 65 departmental audit. GSTR-9C is your opportunity to identify and correct discrepancies through DRC-03 <strong>before</strong> the department finds them.</p>
<p><strong>Start your GST audit now: <a href="tel:+919459456700">Call +91 945 945 6700</a> or <a href="https://wa.me/919459456700?text=Hi%2C%20I%20need%20GST%20audit%20services%20in%20Delhi." target="_blank" rel="noopener">WhatsApp us</a>.</strong></p>

            </div>
        </div>
    </div>
</section>

<!-- CONCLUSION + CTA BLOCK (Dark) -->
<section class="content-section" style="background: var(--blue) !important;">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title" style="color:#FFFFFF !important;">Get Expert GST Audit Services in Delhi</h2>
            <div class="content-text" style="text-align:left;">
                
                <p style="color:rgba(255,255,255,0.9);">GST audit in Delhi encompasses GSTR-9 preparation, GSTR-9C reconciliation and Section 65 departmental audit representation. With Delhi's concentration of wholesale trading, IT services, manufacturing and multi-GSTIN NCR operations, professional CA assistance is essential for accurate reconciliation and compliance.</p>
<p style="color:rgba(255,255,255,0.9);">Patron's Delhi office at Rohini provides end-to-end GST audit - data compilation, automated reconciliation, GSTR-9C preparation, DRC-03 filing and S.65 representation. 1,000+ GST audits, 15+ years, offices in Pune, Mumbai, Delhi, and Gurugram.</p>

            </div>
            <div style="display:flex;gap:14px;flex-wrap:wrap;margin-top:24px;">
                <a href="tel:+919459456700" style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:var(--orange);color:#fff;border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#128222; Call +91 945 945 6700</a>
                <a href="https://wa.me/919459456700?text=Hi%2C%20I%20need%20GST%20audit%20services%20in%20Delhi." target="_blank" style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:#25D366;color:#fff;border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;" rel="noopener">&#128172; WhatsApp Us</a>
                <a href="mailto:sales@patronaccounting.com?subject=GST%20Audit%20Delhi&body=Hello%2C%0AI%20need%20GST%20audit%20services.%0AThank%20you." style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:transparent;color:#fff;border:2px solid rgba(255,255,255,0.3);border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#9993;&#65039; Email Us</a>
            </div>
            <p style="color:rgba(255,255,255,0.7);font-size:13px;margin-top:16px;">Book a Free Consultation - No Obligation.</p>
        </div>
    </div>
</section>

<!-- GSTAT STATE BENCH CITY PAGES (32 Pages) -->
<section class="content-section" style="padding:48px 32px;background:var(--gray-50);">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title" style="text-align:center;margin-bottom:12px;">GST Audit Services Across India</h2>
            <p style="text-align:center;color:var(--text-muted);font-size:15px;margin-bottom:40px;">Patron provides GST audit services in major cities.</p>
       
            <div class="pa-city-block" style="margin-bottom:40px;"><div class="pa-city-grid">
<a href="/gst-audit/pune" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Pune</div><div class="pa-card-sub">Maharashtra</div></div></a>
<a href="/gst-audit/mumbai" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Mumbai</div><div class="pa-card-sub">Maharashtra</div></div></a>
<div class="pa-city-card" style="opacity:0.6;pointer-events:none;border:2px solid var(--orange);position:relative;"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Delhi</div><div class="pa-card-sub">Delhi NCR</div></div><span style="position:absolute;top:6px;right:8px;font-size:10px;color:var(--orange);font-weight:700;text-transform:uppercase;letter-spacing:0.5px;">You're here</span></div>
<a href="/gst-audit/gurugram" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Gurugram</div><div class="pa-card-sub">Haryana</div></div></a>
</div></div>
<div class="pa-city-block"><div class="pa-block-title">Related Services</div><div class="pa-block-sub">End-to-end GST and audit support for Delhi businesses</div><div class="pa-cross-grid">
<a href="/gst-returns/delhi" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">GST Returns</div><div class="pa-card-sub">Delhi</div></div></a>
<a href="/gst-notice/delhi" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">GST Notice</div><div class="pa-card-sub">Delhi</div></div></a>
<a href="/gst-registration/delhi" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">GST Registration</div><div class="pa-card-sub">Delhi</div></div></a>
<a href="/tax-audit/delhi" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Tax Audit</div><div class="pa-card-sub">Delhi</div></div></a>
<a href="/statutory-audit/delhi" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Statutory Audit</div><div class="pa-card-sub">Delhi</div></div></a>
<a href="/income-tax-return/delhi" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Income Tax Return</div><div class="pa-card-sub">Delhi</div></div></a>
</div></div>
        </div>
    </div>
</section>

<!-- CONTENT FRESHNESS FOOTER -->
<section class="content-section" style="padding:32px;">
    <div class="content-container">
        <div class="text-content" style="font-size:13px;color:var(--text-muted);">
            <p><strong>Content Created:</strong> 07 April 2026 &nbsp;|&nbsp; <strong>Last Updated:</strong> <span id="lastUpdatedFooter">07 April 2026</span> &nbsp;|&nbsp; <strong>Next Review:</strong> 07 April 2027 &nbsp;|&nbsp; <strong>Reviewed By:</strong> CA &amp; CS Team, Patron Accounting LLP</p>
            <p>This page covers GST audit services in Delhi. Reviewed annually when CGST Act provisions or GSTR-9C thresholds change.</p>
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
