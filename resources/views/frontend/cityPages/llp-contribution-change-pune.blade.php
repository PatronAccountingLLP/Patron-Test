
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
    <title>LLP Capital Contribution in Pune - Form 3 & Deed</title>
    <meta name="description" content="CA/CS-assisted LLP contribution change in Pune. Capital increase/decrease, supplementary agreement, Form 3, Maharashtra stamp duty, audit threshold. Serving Hinjewadi, Kharadi LLPs. Call +91 945 945 6700.">
    <link rel="canonical" href="/llp-contribution-change/pune">
    <meta name="robots" content="index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1">
    <meta property="og:title" content="LLP Capital Contribution in Pune - Form 3 & Deed">
    <meta property="og:description" content="CA/CS-assisted LLP contribution change in Pune. Capital increase/decrease, supplementary agreement, Form 3, Maharashtra stamp duty, audit threshold. Serving Hinjewadi, Kharadi LLPs. Call +91 945 945 6700.">
    <meta property="og:url" content="/llp-contribution-change/pune">
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="Patron Accounting">
    <meta property="og:image" content="https://www.patronaccounting.com/images/og-default-square.png">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="1200">
    <meta property="og:image:type" content="image/png">
    <meta property="og:image:secure_url" content="https://www.patronaccounting.com/images/og-default-square.png">
    <meta property="og:image:alt" content="Patron Accounting - partner you can rely on">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="LLP Capital Contribution in Pune - Form 3 & Deed">
    <meta name="twitter:description" content="CA/CS-assisted LLP contribution change in Pune. Capital increase/decrease, supplementary agreement, Form 3, Maharashtra stamp duty, audit threshold. Serving Hinjewadi, Kharadi LLPs. Call +91 945 945 6700.">
    <meta name="twitter:image" content="https://www.patronaccounting.com/images/og-default-square.png">
@endsection

@section('schema')
    <script type="application/ld+json">{
  "@context": "https://schema.org",
  "@graph": [
    {
      "@type": "Service",
      "name": "LLP Contribution Change in Pune",
      "description": "CA/CS-assisted LLP contribution change in Pune. Capital increase/decrease, supplementary agreement, Form 3, Maharashtra stamp duty, audit threshold. Serving Hinjewadi, Kharadi LLPs. Call +91 945 945 6700.",
      "url": "https://www.patronaccounting.com/llp-contribution-change/pune",
      "serviceType": "LLP Contribution Change in Pune",
      "areaServed": {
        "@type": "City",
        "name": "Pune",
        "containedInPlace": {
          "@type": "State",
          "name": "Maharashtra"
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
        "url": "https://www.patronaccounting.com/llp-contribution-change/pune",
        "price": "25"
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
          "name": "LLP Contribution Change in India Guide",
          "item": "https://www.patronaccounting.com/llp-contribution-change"
        },
        {
          "@type": "ListItem",
          "position": 3,
          "name": "LLP Contribution Change in Pune",
          "item": "https://www.patronaccounting.com/llp-contribution-change/pune"
        }
      ]
    },
    {
      "@type": "FAQPage",
      "mainEntity": [
        {
          "@type": "Question",
          "name": "How to change capital contribution in an LLP?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Pass partner resolution approving the change. Draft and execute Supplementary LLP Agreement on proper Maharashtra stamp paper (differential duty for increases). Deposit/withdraw funds. File Form 3 with ROC Pune via MCA V3 within 30 days. Update books of accounts to reflect revised partner capital accounts. Patron manages the complete process."
          }
        },
        {
          "@type": "Question",
          "name": "Is stamp duty required for LLP agreement amendment in Maharashtra?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Yes. For capital increases, differential stamp duty is payable per the Maharashtra Stamp Act. Maximum cap typically Rs 10,000 (verify current schedule). For decreases, nominal Rs 100 stamp paper suffices. ROC does not refund fees on reduced contributions. Patron calculates exact duty for every Pune LLP."
          }
        },
        {
          "@type": "Question",
          "name": "Does contribution change affect profit sharing ratio?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Not automatically. Capital contribution and profit-sharing ratio are separate unless the LLP Agreement explicitly links them. If partners want to change both, the supplementary agreement must expressly state the revised ratio. Many LLP agreements keep capital and PSR as independent clauses. Patron clarifies this with every client."
          }
        },
        {
          "@type": "Question",
          "name": "What is the penalty for late Form 3 filing?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Rs 100 per day from the due date (30 days after supplementary agreement execution) until actual filing. No maximum cap. A 6-month delay costs approximately Rs 18,000. Applies regardless of LLP size or turnover. Patron files Form 3 within the first week of agreement execution."
          }
        },
        {
          "@type": "Question",
          "name": "Can contribution be in non-cash form?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Yes. Partners can contribute tangible assets (property, equipment) or intangible (IP, goodwill). Non-cash must be valued by registered valuer - practicing CA, Cost Accountant or Government-authorized valuer. Monetary value must be disclosed to all partners and recorded in capital account."
          }
        },
        {
          "@type": "Question",
          "name": "What happens if contribution crosses Rs 25 lakh?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Total partner contribution crossing Rs 25 lakh triggers mandatory CA audit under Section 34(3) of the LLP Act, regardless of turnover. Audit must be completed before filing Form 8 (due 30 October). This adds compliance cost and timeline requirements. Patron advises on audit implications before processing any change."
          }
        },
        {
          "@type": "Question",
          "name": "Is there a minimum capital requirement for LLP?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "No. The LLP Act does not prescribe any minimum capital or contribution amount. An LLP can be formed and operated with any capital, including as low as Rs 1,000. This flexibility to adjust capital freely through contribution changes makes LLPs popular among Pune professionals and startups."
          }
        },
        {
          "@type": "Question",
          "name": "How do I decrease LLP contribution?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Identical process: partner resolution, Supplementary Agreement (on nominal Rs 100 stamp paper - no differential duty for decreases), return excess capital to partner from LLP bank account, file Form 3 within 30 days. ROC does not refund filing fee difference. If decrease brings total below Rs 25 lakh, mandatory audit may no longer apply. Quick Answers LLP ka capital kaise badhayein? Partners ki meeting mein resolution > Supplementary agreement Maharashtra stamp paper par > Form 3 MCA V3 par 30 din mein > Bank mein deposit > Books update. Rs 25 lakh se zyada = mandatory audit. Pune mein stamp duty lagta hai? Haan. Increase par differential duty. Decrease par Rs 100. Maximum cap typically Rs 10,000. Penalty kya hai? Late Form 3: Rs 100/day, koi cap nahi. 6 mahine = Rs 18,000."
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
                        LLP Contribution Change in Pune: Expert CA/CS-Assisted Capital Amendment
                    </h1>

                    <div class="expert-attribution-box">
                        <span class="eab-check"><svg width="16" height="16" viewBox="0 0 24 24" fill="currentColor"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg></span>
                        <span class="eab-title">Reviewed by CA and CS Team, Patron Accounting LLP</span>
                        <span class="eab-meta">
                            <span>ICAI & ICSI Registered</span><span class="eab-sep">|</span>
                            <span>15+ Years Experience</span><span class="eab-sep">|</span>
                            <span>Last Updated: <span id="lastUpdated">23 March 2026</span></span>
                        </span>
                        <a href="#" class="eab-link">Verify Credentials &rarr;</a>
                    </div>

                    <div class="mb-4">
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Increase Capital:</span> Partner resolution + Supplementary LLP Agreement + Form 3 with ROC within 30 days</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Decrease Capital:</span> Partner resolution + Supplementary Agreement + Form 3 (no refund of filing fees from ROC)</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Stamp Duty:</span> Maharashtra stamp duty payable on increase; executed on proper non-judicial stamp paper</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Audit Trigger:</span> Contribution crossing Rs 25 lakh triggers mandatory CA audit for the LLP</p>
                        </div>
                    </div>

                    <p class="mb-4 fw-bold" style="color: var(--blue); font-size: 15px;">10,000+ Businesses Served | 4.9 Google Rating</p>

                    <div class="hero-cta">
                        <a href="tel:+919459456700" class="btn-video text-decoration-none">
                            <span class="play-circle"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="width:14px;height:14px;color:#fff"><path d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/></svg></span>
                            Call +91 945 945 6700
                        </a>
                        <a href="mailto:sales@patronaccounting.com" class="btn-sample text-decoration-none">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="width:18px;height:18px;"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,12 2,6"/></svg>
                            Email Us
                        </a>
                        <a href="https://wa.me/919459456700?text=Hello%2C%20I%20just%20visited%20your%20LLP%20Contribution%20Change%20in%20Pune%20page.%20I%20would%20like%20to%20know%20more%20about%20it." target="_blank" class="btn-sample text-decoration-none" rel="noopener">
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
                                            'service'  => 'LLP Contribution Change in Pune',
                                            'city'     => 'Pune',
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
    'ctaText'    => 'Get expert LLP contribution change for your Pune LLP today.',
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
            <a href="#overview-section" class="toc-btn active">Overview</a><a href="#what-section" class="toc-btn">What Is It</a><a href="#who-section" class="toc-btn">Who Needs It</a><a href="#services-section" class="toc-btn">Services</a><a href="#procedure-section" class="toc-btn">Process</a><a href="#documents-section" class="toc-btn">Documents</a><a href="#challenges-section" class="toc-btn">Challenges</a><a href="#fees-section" class="toc-btn">Fees</a><a href="#timeline-section" class="toc-btn">Timeline</a><a href="#benefits-section" class="toc-btn">Why Patron</a><a href="#comparison-section" class="toc-btn">Patron vs Others</a><a href="#faq-section" class="toc-btn">FAQs</a>
        </div>
        <button class="toc-arrow right" id="tocRight">&#10095;</button>
    </div>
</div>

<!-- SECTION 2: OVERVIEW / INTRO + TL;DR -->
<section class="content-section" id="overview-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">LLP Contribution Change in Pune - Overview</h2>
            <div class="content-text">
                <div class="highlight-box" style="margin-bottom:20px;">
                    <p><strong>&#128204; TL;DR - LLP Contribution Change in Pune Services at a Glance</strong></p>
                    <p>LLP contribution change is governed by Section 23(2) of the LLP Act, 2008 read with Rule 21(1). Process: partner resolution, Supplementary LLP Agreement on Maharashtra stamp paper (differential duty on increases), Form 3 with ROC within 30 days. Non-cash contributions need registered valuer. If total contribution crosses Rs 25 lakh, mandatory CA audit is triggered. Profit-sharing ratio does NOT automatically change with contribution unless explicitly stated.</p>
                </div>
                <p>Pune's LLP ecosystem drives frequent contribution changes. IT consulting LLPs in Hinjewadi and Kharadi scale operations. Professional services LLPs in Shivajinagar and Koregaon Park add partners. Trading LLPs in Baner and Wakad expand. Manufacturing LLPs in Pimpri-Chinchwad restructure post-conversion. Learn more about <a href="/llp-contribution-change">LLP Contribution Change across India</a>.</p>
                <p>ROC Pune at Shivajinagar processes Form 3 via <a href="https://www.mca.gov.in" target="_blank" rel="noopener">MCA V3 portal</a>. Maharashtra stamp duty via IGR Maharashtra e-stamping. Related: <a href="/pvt-llp-compliance/pune">LLP Compliance in Pune</a> and <a href="#">LLP Registration</a>.</p>
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
                <h2 class="section-title">What Is LLP Contribution Change?</h2>
                <div class="content-text what-is-definition">
                    
                    <p>LLP contribution change is the formal process of altering capital contributed by partners. Under the LLP Act, there is <strong>no statutory minimum or maximum capital</strong> - LLPs can adjust freely, but every change must follow prescribed procedure.</p><p>Contributions can be <strong>tangible</strong> (cash, property, assets) or <strong>intangible</strong> (services, expertise). Non-cash contributions must be valued by a <strong>registered valuer</strong>. Critical: if total contribution crosses <strong>Rs 25 lakh</strong>, mandatory CA audit is triggered under Section 34(3). Related: <a href="/statutory-audit">Statutory Audit</a> and <a href="/accounting-services">Accounting Services</a>.</p>

                </div>
                <div class="highlight-box" style="margin-top:20px;">
                    <p><strong>Key Terms for LLP Contribution Change in Pune:</strong></p>
                    <ul><li><strong>Section 23(2):</strong> Partner obligation to contribute as per LLP Agreement. Amendment requires supplementary agreement.</li><li><strong>Form 3:</strong> Filed with ROC within 30 days of supplementary agreement. Late fee: Rs 100/day (no cap).</li><li><strong>Rs 25 Lakh Threshold:</strong> S.34(3) mandatory CA audit if total contribution exceeds this, regardless of turnover.</li><li><strong>Maharashtra Stamp Duty:</strong> Differential duty on increases; nominal Rs 100 for decreases. Max cap applies.</li><li><strong>Profit-Sharing Ratio:</strong> NOT automatically linked to capital unless LLP Agreement explicitly provides.</li><li><strong>Form 8 / Form 11:</strong> Annual filings must reflect updated contribution amounts.</li></ul>

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
                            <!-- LLP tag -->
                            <rect x="30" y="120" width="42" height="18" rx="4" fill="#FFF3E0" stroke="#F5A623" stroke-width="1"/>
                            <text x="51" y="132.5" font-size="8" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial, sans-serif">LLP</text>
                            <!-- Label -->
                            <text x="100" y="170" font-size="10" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial, sans-serif">LLP Contribution Change in Pune</text>
                        </svg>
                    </div>
                    <div class="illustration-badge">
                        <span>Form 3 + Stamp Duty</span>
                        <strong>Increase | Decrease | Rs 25L Audit</strong>
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
            <h2 class="section-title">Who Needs LLP Contribution Change in Pune?</h2>
            <div class="content-text">
                
                <p><strong>IT Consulting LLPs Scaling (Hinjewadi, Kharadi):</strong> Starting with minimal capital, needing working capital for payroll, infrastructure and larger client projects. Related: <a href="/gst-returns/pune">GST Returns in Pune</a>.</p><p><strong>Professional Services LLPs Adding Partners (Shivajinagar, Koregaon Park):</strong> CA/CS/law firms adjusting contributions when onboarding new partners or restructuring existing ratios. Related: <a href="#">Company Registration in Pune</a>.</p><p><strong>Trading + Manufacturing LLPs (Baner, Wakad, Pimpri-Chinchwad):</strong> Capital for inventory, warehouse, expansion. Partnerships converted to LLPs restructuring capital. Related: <a href="#">Income Tax Returns in Pune</a>.</p><p><strong>LLPs Approaching Audit Threshold + Decreasing Capital:</strong> Near Rs 25 lakh must plan carefully. LLPs reducing operations or returning excess capital. Related: <a href="/payroll-services/pune">Payroll Services in Pune</a>.</p>

            </div>
            </div>
        </div>
    </div>
</section>

<!-- SECTION 5: OUR SERVICES -->
<section class="content-section" id="services-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">LLP Contribution Change Services in Pune</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Service</th><th>What We Do</th></tr></thead>
                    <tbody>
                        <tr><td>Capital Increase / Decrease Processing</td><td>Partner resolution, supplementary LLP agreement drafting, Maharashtra stamp duty calculation and payment, Form 3 filing with ROC Pune within 30 days, books update. Related: <a href="/legal-drafting/pune">Legal Drafting in Pune</a>.</td></tr><tr><td>Supplementary Agreement + Stamp Duty</td><td>Comprehensive amendment reflecting revised capital, individual contributions, profit-sharing (if changed). Executed on proper Maharashtra stamp paper via IGR e-stamping or franking.</td></tr><tr><td>Registered Valuer + Non-Cash Contributions</td><td>For property, equipment, IP contributions: valuation by practicing CA, Cost Accountant or authorized valuer. Monetary value disclosed to all partners.</td></tr><tr><td>Audit Threshold Impact Analysis</td><td>Assessing whether change crosses Rs 25 lakh. Advisory on mandatory CA audit implications, Form 8 timeline and compliance costs.</td></tr><tr><td>Form 3/4 Filing + Form 8/11 Alignment</td><td>Form 3 within 30 days. Form 4 if new partner introduced. Reconciliation with subsequent Form 8 (30 Oct) and Form 11 (30 May). Related: <a href="/pvt-llp-compliance/pune">LLP Compliance in Pune</a> and <a href="/gst-registration/pune">GST Registration in Pune</a>.</td></tr>

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
            <h2 class="section-title">LLP Contribution Change Process in Pune</h2>
            <p class="section-subtitle" style="text-align:left;max-width:100%;">Our Pune CA/CS team manages the complete contribution change - from agreement review through Form 3 filing and audit threshold advisory.</p>
        </header>
        <div class="steps-container">
            <div class="step-card"><div class="step-content"><span class="step-badge">Step 1</span><h3 class="step-title">Review LLP Agreement and Determine the Change</h3><p class="step-description">Examine existing LLP Agreement capital clauses and restrictions. Determine: amount of increase/decrease, which partners contribute/withdraw, whether profit-sharing ratio will change, whether a new partner is being introduced. For Pune IT LLPs in Hinjewadi and Kharadi, Patron advises on optimal structure considering the Rs 25 lakh audit threshold and growth trajectory.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Agreement reviewed</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Change structure determined</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="20" y="8" width="80" height="60" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><text x="60" y="25" font-size="6" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">LLP Agmt</text><text x="60" y="42" font-size="5" fill="#E8712C" font-weight="600" text-anchor="middle" font-family="Arial">Capital Clause</text><text x="60" y="78" font-size="6" fill="#14365F" font-weight="600" text-anchor="middle" font-family="Arial">Review + Plan</text></svg></div><span class="illustration-label">Planned</span><span class="step-number-large">01</span></div></div></div>
<div class="step-card"><div class="step-content"><span class="step-badge">Step 2</span><h3 class="step-title">Obtain Partner Approval (Resolution)</h3><p class="step-description">Conduct partner meeting and pass resolution approving: new total capital, revised individual contributions, mode (cash/non-cash), authorization for supplementary agreement and Form 3 filing. For non-cash contributions, also authorize registered valuer engagement. All partners sign the resolution. Patron drafts the resolution and manages the meeting.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Resolution passed by all partners</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Authorization granted</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="20" y="8" width="80" height="60" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><text x="60" y="22" font-size="6" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">Partners</text><text x="60" y="38" font-size="6" fill="#E8712C" font-weight="600" text-anchor="middle" font-family="Arial">Resolution</text><text x="60" y="78" font-size="6" fill="#14365F" font-weight="600" text-anchor="middle" font-family="Arial">Approve Change</text></svg></div><span class="illustration-label">Approved</span><span class="step-number-large">02</span></div></div></div>
<div class="step-card"><div class="step-content"><span class="step-badge">Step 3</span><h3 class="step-title">Draft and Execute Supplementary LLP Agreement</h3><p class="step-description">Prepare amendment reflecting revised capital, individual shares, effective date and any consequential changes. Execute on proper Maharashtra non-judicial stamp paper. For increases: differential stamp duty payable. For decreases: nominal Rs 100 stamp paper. Signed by all partners, witnessed and notarized. Patron drafts and coordinates IGR Maharashtra e-stamping or franking.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Supplementary agreement executed</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Maharashtra stamp duty paid</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="15" y="5" width="90" height="70" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><text x="60" y="22" font-size="5" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">Supplementary</text><text x="60" y="38" font-size="6" fill="#E8712C" font-weight="600" text-anchor="middle" font-family="Arial">Agreement</text><text x="60" y="52" font-size="5" fill="#14365F" font-weight="600" text-anchor="middle" font-family="Arial">MH Stamp Duty</text><text x="60" y="85" font-size="6" fill="#14365F" font-weight="600" text-anchor="middle" font-family="Arial">Draft + Execute</text></svg></div><span class="illustration-label">Executed</span><span class="step-number-large">03</span></div></div></div>
<div class="step-card"><div class="step-content"><span class="step-badge">Step 4</span><h3 class="step-title">Value Non-Cash Contributions (If Applicable)</h3><p class="step-description">If contributing property, equipment, vehicles, IP or goodwill, engage registered valuer (practicing CA, Cost Accountant or authorized valuer). Valuation report states fair market value. Monetary value disclosed to all partners and recorded in capital account. For Pimpri-Chinchwad manufacturing LLPs contributing machinery, Patron coordinates the valuer.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Valuation report obtained</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Value disclosed to partners</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="20" y="8" width="80" height="60" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><text x="60" y="25" font-size="6" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">Valuation</text><text x="60" y="42" font-size="5" fill="#E8712C" font-weight="600" text-anchor="middle" font-family="Arial">Registered Valuer</text><text x="60" y="78" font-size="6" fill="#14365F" font-weight="600" text-anchor="middle" font-family="Arial">Non-Cash Only</text></svg></div><span class="illustration-label">Valued</span><span class="step-number-large">04</span></div></div></div>
<div class="step-card"><div class="step-content"><span class="step-badge">Step 5</span><h3 class="step-title">File Form 3 with ROC Pune Within 30 Days</h3><p class="step-description">File LLP Form 3 on MCA V3 portal within 30 days of executing supplementary agreement. Includes: LLP details, nature of amendment, revised contributions and PSR, effective date. Attach executed supplementary agreement. If new partner: also file Form 4. DSC of designated partners required. Patron files and tracks ROC Pune approval.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Form 3 filed within 30 days</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>ROC Pune processing initiated</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="20" y="8" width="80" height="60" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><text x="60" y="22" font-size="7" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">Form 3</text><text x="60" y="40" font-size="6" fill="#E8712C" font-weight="600" text-anchor="middle" font-family="Arial">30 Days</text><text x="60" y="55" font-size="5" fill="#14365F" font-weight="600" text-anchor="middle" font-family="Arial">MCA V3</text><text x="60" y="78" font-size="6" fill="#14365F" font-weight="600" text-anchor="middle" font-family="Arial">File with ROC</text></svg></div><span class="illustration-label">Filed</span><span class="step-number-large">05</span></div></div></div>
<div class="step-card"><div class="step-content"><span class="step-badge">Step 6</span><h3 class="step-title">Update Books of Accounts and Plan Compliance Impact</h3><p class="step-description">Adjust each partner's capital account (credit for increase, debit for decrease). Record bank transaction. Update trial balance. If crossing Rs 25 lakh: arrange mandatory CA audit before Form 8 (30 October). Ensure revised amounts match in subsequent Form 11 (30 May) and Form 8. Patron updates books and ensures Form 8/11 alignment.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Books of accounts updated</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Audit threshold assessed</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="25" y="10" width="70" height="50" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><circle cx="60" cy="30" r="12" fill="#E8F5E9" stroke="#25D366" stroke-width="2"/><path d="M55 30l4 4 8-8" stroke="#25D366" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"/><text x="60" y="78" font-size="6" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">Books Updated</text></svg></div><span class="illustration-label">Complete</span><span class="step-number-large">06</span></div></div></div>


        </div>
    </div>
</section>

<!-- SECTION 8: DOCUMENTS REQUIRED -->
<section class="content-section" id="documents-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Documents Required for LLP Contribution Change in Pune</h2>
            <div class="content-text">
                
                <ul><li><strong>Existing LLP Agreement:</strong> To review capital clause and amendment provisions.</li><li><strong>Partner Resolution:</strong> Approving contribution change; signed by all partners.</li><li><strong>Supplementary LLP Agreement:</strong> On proper Maharashtra stamp paper; all partners sign; witnessed and notarized.</li><li><strong>Bank Statement:</strong> Showing capital deposit (increase) or withdrawal (decrease).</li><li><strong>Stamp Paper / E-Stamp:</strong> Differential duty for increase; nominal for decrease.</li><li><strong>Registered Valuer Report:</strong> For non-cash contributions; CA/CMA/authorized valuer.</li><li><strong>Form 3:</strong> Filed on MCA V3; DSC of designated partners.</li><li><strong>Form 4:</strong> If new partner introduced alongside capital change.</li><li><strong>PAN Cards + DSC:</strong> Of all contributing/withdrawing partners and designated partners.</li></ul><div class="highlight-box" style="margin-top:16px;"><p><strong>Pune-specific tip:</strong> Maharashtra stamp duty on LLP agreements is based on contribution amount. For increases, differential duty (new total minus previous) must be paid. Maximum cap typically Rs 10,000. For decreases, no refund - use Rs 100 stamp paper. Patron calculates exact duty for every Pune LLP.</p></div>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 9: CHALLENGES -->
<section class="content-section" id="challenges-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Common LLP Contribution Change Challenges in Pune</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Challenge</th><th>Impact</th><th>How Patron Accounting Solves It</th></tr></thead>
                    <tbody>
                        <tr><td>Stamp Duty Miscalculation (Maharashtra)</td><td>Insufficient stamp paper renders agreement inadmissible under Maharashtra Stamp Act</td><td>Patron calculates exact differential duty per current Maharashtra schedule before executing</td></tr><tr><td>Audit Threshold Crossed Unknowingly</td><td>Crossing Rs 25 lakh triggers mandatory CA audit - affects Form 8 filing and annual costs</td><td>Patron conducts threshold impact analysis before every contribution change</td></tr><tr><td>Form 3 Late Filing</td><td>Rs 100/day penalty with no cap. 6-month delay = Rs 18,000 in penalties</td><td>Patron files Form 3 within first week of agreement execution</td></tr><tr><td>Profit-Sharing Ratio Confusion</td><td>Capital change does NOT automatically change PSR unless explicitly stated in agreement</td><td>Patron clarifies distinction and drafts supplementary agreement accordingly</td></tr>

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
            <h2 class="section-title">LLP Contribution Change Fees in Pune</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Fee Component</th><th>Amount</th></tr></thead>
                    <tbody>
                        <tr><td>Capital Increase (Complete)</td><td>Patron Rs 5,000-15,000 + stamp duty + govt fees</td></tr><tr><td>Capital Decrease (Complete)</td><td>Patron Rs 5,000-12,000 + govt fees</td></tr><tr><td>Supplementary Agreement Drafting</td><td>Patron Rs 3,000-10,000 (incl. stamp duty advisory)</td></tr><tr><td>Registered Valuer Report (Non-Cash)</td><td>Rs 5,000-20,000</td></tr><tr><td>Form 3 Filing Only</td><td>Patron Rs 2,000-5,000 + MCA fees</td></tr><tr><td>Audit Threshold Impact Analysis</td><td>Patron Rs 2,000-5,000</td></tr><tr><td>Books of Accounts Update</td><td>Patron Rs 2,000-5,000</td></tr><tr><td>Complete Change + Compliance Package</td><td>Patron Rs 10,000-25,000</td></tr>

                    </tbody>
                </table>
                </div>
                <p style="margin-top:16px;font-size:13px;color:var(--text-muted);font-style:italic;">All fees and charges listed are indicative only and do not constitute a binding offer. Final amounts may vary depending on the volume of work and the complexity involved.</p>
                <p style="margin-top:16px;">Professional service charges for drafting, filing, and representation are separate from the statutory fees. The exact fee depends on the complexity of the case, disputed amount, and number of hearings required. Contact us for a detailed quote.</p>
                <p style="margin-top:16px;"><strong>Get a free LLP Contribution Change in Pune consultation - <a href="tel:+919459456700">Call +91 945 945 6700</a> or <a href="https://wa.me/919459456700?text=Hello%2C%20I%20just%20visited%20your%20LLP%20Contribution%20Change%20in%20Pune%20page.%20I%20would%20like%20to%20know%20more%20about%20it." target="_blank" rel="noopener">WhatsApp us</a>. No-obligation assessment.</strong></p>
            </div>
        </div>
    </div>
</section>

<!-- SECTION 11: TIMELINE -->
<section class="content-section" id="timeline-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">LLP Contribution Change Timeline</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Stage</th><th>Estimated Timeline</th></tr></thead>
                    <tbody>
                        <tr><td>Review LLP Agreement + determine change</td><td>Day 1-2</td></tr><tr><td>Partner meeting + resolution</td><td>Day 3-5</td></tr><tr><td>Draft supplementary agreement</td><td>Day 5-10</td></tr><tr><td>Maharashtra stamp duty payment + execution</td><td>Day 10-15</td></tr><tr><td>Registered valuer (if non-cash)</td><td>Day 5-15 (parallel)</td></tr><tr><td>Bank capital deposit/withdrawal</td><td>Day 10-15</td></tr><tr><td>Form 3 filing on MCA V3</td><td>Within 30 days of execution</td></tr><tr><td>ROC Pune processing</td><td>7-15 working days</td></tr>

                    </tbody>
                </table>
                </div>
                <div class="highlight-box" style="margin-top:16px;">
                    
                    <p><strong>Total: 15-25 days</strong> for standard cash contribution change. Non-cash may take longer for valuation. Form 3 late filing: Rs 100/day (no cap). Patron manages all deadlines from RTC Silver, Wagholi. Maharashtra stamp duty via IGR e-stamping or franking.</p>

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
            <h2 class="section-title">Why Choose Patron for LLP Contribution Change in Pune?</h2>
        </div>
        <div class="features-grid"><article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><h3 class="feature-title">Pune Office + LLP Experience</h3><p class="feature-text">RTC Silver, Wagholi. Patron itself is an LLP - understands contribution changes from firsthand experience. Serving Hinjewadi, Kharadi, Baner, Koregaon Park, Pimpri-Chinchwad.</p></article><article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M14 2H6a2 2 0 00-2 2v16a2 2 0 002 2h12a2 2 0 002-2V8z"/><path d="M14 2v6h6M16 13H8M16 17H8"/></svg></div><h3 class="feature-title">Maharashtra Stamp Duty Integration</h3><p class="feature-text">Exact differential stamp duty per Maharashtra Stamp Act schedule. Coordinates IGR e-stamping or franking for every supplementary agreement.</p></article><article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M13 2L3 14h9l-1 8 10-12h-9l1-8z"/></svg></div><h3 class="feature-title">Audit Threshold Advisory</h3><p class="feature-text">Assesses Rs 25 lakh contribution threshold impact before processing any change. Ensures clients understand mandatory audit implications.</p></article><article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><h3 class="feature-title">Form 8/11 Alignment</h3><p class="feature-text">Contribution changes reconciled with subsequent annual filings to prevent data mismatches and ROC queries.</p></article></div>
    </div>
</section>

<!-- SECTION 12A: SOCIAL PROOF -->
<section class="content-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Trusted by 10,000+ Businesses Across India</h2>
            <div class="content-text">
                
                <p><strong>10,000+ Businesses | 4.9 Google Rating | 50,000+ Docs Filed | 15+ Years</strong></p><blockquote style="border-left:3px solid var(--orange);padding-left:16px;margin:16px 0;font-style:italic;color:var(--text-secondary);">"Our GST filing is always on time since we moved to Patron. Their team is thorough and proactive." - CFO, Manufacturing, Maharashtra</blockquote><p>With offices in Pune, Mumbai, Delhi and Gurugram, Patron serves LLPs across India.</p>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 13: SELF-FILING vs PROFESSIONAL COMPARISON -->
<section class="content-section" id="comparison-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Patron vs Local CA Firms in Pune</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Factor</th><th>Patron Accounting</th><th>Typical Local Consultant</th></tr></thead>
                    <tbody>
                        <tr><td>Supplementary Agreement</td><td>Professionally drafted + stamp duty compliant</td><td>Template-based; stamp duty often wrong</td></tr><tr><td>Stamp Duty (Maharashtra)</td><td>Exact differential calculation + e-stamping</td><td>Client manages separately</td></tr><tr><td>Audit Threshold Analysis</td><td>Pre-change assessment of Rs 25L impact</td><td>Not advised</td></tr><tr><td>Form 3 Filing</td><td>Filed within first week</td><td>Often delayed</td></tr><tr><td>Form 8/11 Alignment</td><td>Reconciled at annual filing</td><td>Mismatch discovered later</td></tr><tr><td>Non-Cash Valuation</td><td>Registered valuer coordinated</td><td>Client arranges separately</td></tr>

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
                
                <p>For Pune LLPs needing related compliance:</p><ul><li><a href="/pvt-llp-compliance/pune">LLP Compliance in Pune</a></li><li><a href="#">LLP Registration</a></li><li><a href="/accounting-services">Accounting Services</a></li><li><a href="/statutory-audit">Statutory Audit</a></li><li><a href="/gst-registration/pune">GST Registration in Pune</a></li><li><a href="#">Income Tax Returns in Pune</a></li></ul>

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
                
                <p><strong>Section 23(2), LLP Act 2008:</strong> Partner obligation to contribute per LLP Agreement. Amendment requires supplementary agreement.</p><p><strong>Rule 21(1), LLP Rules 2009:</strong> Form 3 within 30 days of amendment. Late: Rs 100/day (no cap).</p><p><strong>Section 34(3):</strong> Mandatory CA audit if turnover >Rs 40 lakh OR contribution >Rs 25 lakh.</p><p><strong>Maharashtra Stamp Act:</strong> Stamp duty on LLP agreements based on contribution amount. Differential on increases. Max cap applies.</p><p><strong>No Minimum Capital:</strong> LLP can operate with any capital. No statutory minimum or maximum.</p><p><strong>Non-Cash:</strong> Valued by registered valuer (CA/CMA/authorized). Disclosed to all partners.</p><p><strong>Profit-Sharing:</strong> NOT automatically linked to capital unless agreement explicitly provides.</p><p><strong>Portal:</strong> <a href="https://www.mca.gov.in" target="_blank" rel="noopener">MCA V3 - mca.gov.in</a> | IGR Maharashtra for e-stamping.</p><p><strong>ROC Pune:</strong> Registrar of Companies, Shivajinagar.</p>

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
                    <h2 class="faq-expanded__title">FAQs - LLP Contribution Change in Pune</h2>
                    <p class="faq-expanded__lead">Find answers to the most common questions about LLP contribution change in Pune.</p>
                    @include('partials.bigin-form', [
                        'variant'  => 'compact',
                        'service'  => 'LLP Contribution Change in Pune',
                        'city'     => 'Pune',
                    ])
                </aside>
                <div class="faq-expanded__list">
                    <div class="faq-expanded__item" id="faq-1">
                        <h3 class="faq-expanded__q">How to change capital contribution in an LLP?</h3>
                        <div class="faq-expanded__a"><p>Pass partner resolution approving the change. Draft and execute Supplementary LLP Agreement on proper Maharashtra stamp paper (differential duty for increases). Deposit/withdraw funds. File Form 3 with ROC Pune via MCA V3 within 30 days. Update books of accounts to reflect revised partner capital accounts. Patron manages the complete process.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-2">
                        <h3 class="faq-expanded__q">Is stamp duty required for LLP agreement amendment in Maharashtra?</h3>
                        <div class="faq-expanded__a"><p>Yes. For capital increases, differential stamp duty is payable per the Maharashtra Stamp Act. Maximum cap typically Rs 10,000 (verify current schedule). For decreases, nominal Rs 100 stamp paper suffices. ROC does not refund fees on reduced contributions. Patron calculates exact duty for every Pune LLP.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-3">
                        <h3 class="faq-expanded__q">Does contribution change affect profit sharing ratio?</h3>
                        <div class="faq-expanded__a"><p>Not automatically. Capital contribution and profit-sharing ratio are separate unless the LLP Agreement explicitly links them. If partners want to change both, the supplementary agreement must expressly state the revised ratio. Many LLP agreements keep capital and PSR as independent clauses. Patron clarifies this with every client.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-4">
                        <h3 class="faq-expanded__q">What is the penalty for late Form 3 filing?</h3>
                        <div class="faq-expanded__a"><p>Rs 100 per day from the due date (30 days after supplementary agreement execution) until actual filing. No maximum cap. A 6-month delay costs approximately Rs 18,000. Applies regardless of LLP size or turnover. Patron files Form 3 within the first week of agreement execution.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-5">
                        <h3 class="faq-expanded__q">Can contribution be in non-cash form?</h3>
                        <div class="faq-expanded__a"><p>Yes. Partners can contribute tangible assets (property, equipment) or intangible (IP, goodwill). Non-cash must be valued by registered valuer - practicing CA, Cost Accountant or Government-authorized valuer. Monetary value must be disclosed to all partners and recorded in capital account.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-6">
                        <h3 class="faq-expanded__q">What happens if contribution crosses Rs 25 lakh?</h3>
                        <div class="faq-expanded__a"><p>Total partner contribution crossing Rs 25 lakh triggers mandatory CA audit under Section 34(3) of the LLP Act, regardless of turnover. Audit must be completed before filing Form 8 (due 30 October). This adds compliance cost and timeline requirements. Patron advises on audit implications before processing any change.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-7">
                        <h3 class="faq-expanded__q">Is there a minimum capital requirement for LLP?</h3>
                        <div class="faq-expanded__a"><p>No. The LLP Act does not prescribe any minimum capital or contribution amount. An LLP can be formed and operated with any capital, including as low as Rs 1,000. This flexibility to adjust capital freely through contribution changes makes LLPs popular among Pune professionals and startups.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-8">
                        <h3 class="faq-expanded__q">How do I decrease LLP contribution?</h3>
                        <div class="faq-expanded__a"><p>Identical process: partner resolution, Supplementary Agreement (on nominal Rs 100 stamp paper - no differential duty for decreases), return excess capital to partner from LLP bank account, file Form 3 within 30 days. ROC does not refund filing fee difference. If decrease brings total below Rs 25 lakh, mandatory audit may no longer apply.</p></div>
                    </div>
                </div>
            </div>


            <!-- Quick Answers -->
            <div class="highlight-box" style="margin-top:32px;">
                <p><strong>Quick Answers</strong></p>
                <p><strong>LLP ka capital kaise badhayein?</strong> Partners ki meeting mein resolution > Supplementary agreement Maharashtra stamp paper par > Form 3 MCA V3 par 30 din mein > Bank mein deposit > Books update. Rs 25 lakh se zyada = mandatory audit.</p><p><strong>Pune mein stamp duty lagta hai?</strong> Haan. Increase par differential duty. Decrease par Rs 100. Maximum cap typically Rs 10,000.</p><p><strong>Penalty kya hai?</strong> Late Form 3: Rs 100/day, koi cap nahi. 6 mahine = Rs 18,000.</p>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 18: URGENCY CTA -->
<section class="content-section" style="background: var(--orange-lighter) !important; border-left: 4px solid var(--orange);">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Changing LLP Capital? File Form 3 Within 30 Days</h2>
            <div class="content-text">
                
                <p>Form 3 deadline is <strong>30 days</strong> from supplementary agreement execution - Rs 100/day penalty with no cap. Maharashtra stamp duty must be paid <strong>before execution</strong> - insufficiently stamped agreements attract up to <strong>10x penalty</strong>. If crossing <strong>Rs 25 lakh</strong>, plan for mandatory CA audit 3-4 months before Form 8 deadline (30 October). Form 8 and Form 11 must reflect updated capital - mismatches trigger ROC queries.</p><p><strong>Change capital now - <a href="tel:+919459456700">Call +91 945 945 6700</a> or <a href="https://wa.me/919459456700?text=Hello%2C%20I%20just%20visited%20your%20LLP%20Contribution%20Change%20in%20Pune%20page.%20I%20would%20like%20to%20know%20more%20about%20it." target="_blank" rel="noopener">WhatsApp us</a>. Free consultation.</strong></p>

            </div>
        </div>
    </div>
</section>

<!-- CONCLUSION + CTA BLOCK (Dark) -->
<section class="content-section" style="background: var(--blue) !important;">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title" style="color:#FFFFFF !important;">LLP Contribution Change in Pune - Properly Executed, Fully Compliant</h2>
            <div class="content-text" style="text-align:left;">
                
                <p style="color:rgba(255,255,255,0.85);font-size:16px;line-height:1.7;">LLP contribution change requires partner approval, supplementary agreement with Maharashtra stamp duty, Form 3 within 30 days, and books update. Pune's LLP ecosystem drives frequent changes: IT consulting (Hinjewadi/Kharadi), professional services (Shivajinagar/Koregaon Park), trading (Baner/Wakad), manufacturing (Pimpri-Chinchwad).</p><p style="color:rgba(255,255,255,0.85);font-size:16px;line-height:1.7;">Patron Accounting, itself an LLP, provides end-to-end services from resolution through Form 3, Maharashtra stamp duty, registered valuer coordination, audit threshold advisory and annual filing alignment from its Pune office at RTC Silver, Wagholi.</p><p style="color:rgba(255,255,255,0.85);font-size:16px;line-height:1.7;">With 15+ years LLP practice, 10,000+ businesses served and a 4.9 Google rating, Patron serves LLPs across Pune, Mumbai, Delhi and Gurugram.</p>

            </div>
            <div style="display:flex;gap:14px;flex-wrap:wrap;margin-top:24px;">
                <a href="tel:+919459456700" style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:var(--orange);color:#fff;border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#128222; Call +91 945 945 6700</a>
                <a href="https://wa.me/919459456700?text=Hello%2C%20I%20just%20visited%20your%20LLP%20Contribution%20Change%20in%20Pune%20page.%20I%20would%20like%20to%20know%20more%20about%20it." target="_blank" style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:#25D366;color:#fff;border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;" rel="noopener">&#128172; WhatsApp Us</a>
                <a href="mailto:sales@patronaccounting.com?subject=Enquiry%20for%20LLP%20Contribution%20Change%20in%20Pune&body=Hello%2C%20I%20just%20visited%20your%20LLP%20Contribution%20Change%20in%20Pune%20page.%20I%20would%20like%20to%20know%20more%20about%20it.%0A%0AThank%20you." style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:transparent;color:#fff;border:2px solid rgba(255,255,255,0.3);border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#9993;&#65039; Email Us</a>
            </div>
            <p style="color:rgba(255,255,255,0.7);font-size:13px;margin-top:16px;">Book a Free Consultation - No Obligation.</p>
        </div>
    </div>
</section>

<!-- GSTAT STATE BENCH CITY PAGES (32 Pages) -->
<section class="content-section" style="padding:48px 32px;background:var(--gray-50);">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title" style="text-align:center;margin-bottom:12px;">LLP Contribution Change Across India</h2>
            <p style="text-align:center;color:var(--text-muted);font-size:15px;margin-bottom:40px;">Expert LLP capital amendment services in all major cities</p>
          
            <div class="pa-city-block" style="margin-bottom:40px;"><div class="pa-city-grid"><div class="pa-city-card" style="opacity:0.6;pointer-events:none;border:2px solid var(--orange);position:relative;"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Pune</div><div class="pa-card-sub">Maharashtra</div></div><span style="position:absolute;top:6px;right:8px;font-size:10px;color:var(--orange);font-weight:700;text-transform:uppercase;letter-spacing:0.5px;">You're here</span></div><a href="/llp-contribution-change/mumbai" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Mumbai</div><div class="pa-card-sub">Maharashtra</div></div></a><a href="/llp-contribution-change/delhi" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Delhi</div><div class="pa-card-sub">Delhi NCR</div></div></a><a href="/llp-contribution-change/gurugram" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Gurugram</div><div class="pa-card-sub">Haryana</div></div></a><a href="#" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Bangalore</div><div class="pa-card-sub">Karnataka</div></div></a><a href="#" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Hyderabad</div><div class="pa-card-sub">Telangana</div></div></a><a href="#" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Chennai</div><div class="pa-card-sub">Tamil Nadu</div></div></a><a href="#" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Kolkata</div><div class="pa-card-sub">West Bengal</div></div></a></div></div><div class="pa-city-block"><div class="pa-block-title">Related Services in Pune</div><div class="pa-block-sub">End-to-end LLP and business compliance in Pune</div><div class="pa-cross-grid"><a href="/pvt-llp-compliance/pune" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">LLP Compliance</div><div class="pa-card-sub">Pune</div></div></a><a href="#" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">LLP Registration</div><div class="pa-card-sub">Pune</div></div></a><a href="/gst-returns/pune" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">GST Returns</div><div class="pa-card-sub">Pune</div></div></a><a href="#" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Income Tax Returns</div><div class="pa-card-sub">Pune</div></div></a><a href="/gst-registration/pune" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">GST Registration</div><div class="pa-card-sub">Pune</div></div></a><a href="/startup-registration/pune" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Startup Registration</div><div class="pa-card-sub">Pune</div></div></a></div></div>
        </div>
    </div>
</section>

<!-- CONTENT FRESHNESS FOOTER -->
<section class="content-section" style="padding:32px;">
    <div class="content-container">
        <div class="text-content" style="font-size:13px;color:var(--text-muted);">
            <p><strong>Content Created:</strong> 23 March 2026 &nbsp;|&nbsp; <strong>Last Updated:</strong> <span id="lastUpdatedFooter">23 March 2026</span> &nbsp;|&nbsp; <strong>Next Review:</strong> 23 September 2026 &nbsp;|&nbsp; <strong>Reviewed By:</strong> CA &amp; CS Team, Patron Accounting LLP</p>
            <p>This page is reviewed semi-annually to reflect Maharashtra stamp duty rate changes, LLP audit threshold updates, MCA V3 form updates and LLP Rules amendments. Last review: March 2026. Next review: September 2026.</p>
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
