
@extends('layouts.service-app')

<!-- External Dependencies (loaded by master layout in production) -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Barlow:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,400&family=DM+Sans:opsz,wght@9..40,400;9..40,500;9..40,600;9..40,700&display=swap" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

@section('meta')
    <title>GST Returns for Freelancers in Delhi – ₹20L Threshold</title>
    <meta name="description" content="GST return filing for freelancers in Delhi. 18% rate. Rs 20 lakh threshold. GSTR-1/3B. ITC on software, co-working. Export LUT. Call +91 945 945 6700.">
    <link rel="canonical" href="/gst-returns-for-freelancers/delhi">
    <meta name="robots" content="index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1">
    <meta property="og:title" content="GST Returns for Freelancers in Delhi – ₹20L Threshold">
    <meta property="og:description" content="GST return filing for freelancers in Delhi. 18% rate. Rs 20 lakh threshold. GSTR-1/3B. ITC on software, co-working. Export LUT. Call +91 945 945 6700.">
    <meta property="og:url" content="/gst-returns-for-freelancers/delhi">
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="Patron Accounting">
    <meta property="og:image" content="https://www.patronaccounting.com/images/og-default-square.png">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="1200">
    <meta property="og:image:type" content="image/png">
    <meta property="og:image:secure_url" content="https://www.patronaccounting.com/images/og-default-square.png">
    <meta property="og:image:alt" content="Patron Accounting - partner you can rely on">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="GST Returns for Freelancers in Delhi – ₹20L Threshold">
    <meta name="twitter:description" content="GST return filing for freelancers in Delhi. 18% rate. Rs 20 lakh threshold. GSTR-1/3B. ITC on software, co-working. Export LUT. Call +91 945 945 6700.">
    <meta name="twitter:image" content="https://www.patronaccounting.com/images/og-default-square.png">
@endsection

@section('schema')
    <script type="application/ld+json">{
  "@context": "https://schema.org",
  "@graph": [
    {
      "@type": "Service",
      "name": "GST Return Filing for Freelancers in Delhi",
      "description": "GST return filing for freelancers in Delhi. 18% rate. Rs 20 lakh threshold. GSTR-1/3B. ITC on software, co-working. Export LUT. Call +91 945 945 6700.",
      "url": "https://www.patronaccounting.com/gst-returns-for-freelancers/delhi",
      "serviceType": "GST Return Filing for Freelancers in Delhi",
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
        "url": "https://www.patronaccounting.com/gst-returns-for-freelancers/delhi",
        "price": "999"
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
          "name": "GST Returns for Freelancers",
          "item": "https://www.patronaccounting.com/gst-returns-for-freelancers"
        },
        {
          "@type": "ListItem",
          "position": 3,
          "name": "GST Returns for Freelancers in Delhi",
          "item": "https://www.patronaccounting.com/gst-returns-for-freelancers/delhi"
        }
      ]
    },
    {
      "@type": "FAQPage",
      "mainEntity": [
        {
          "@type": "Question",
          "name": "Is GST mandatory for freelancers in Delhi?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Mandatory when aggregate turnover at PAN level exceeds Rs 20 lakh. Delhi is normal state. Voluntary registration beneficial for ITC and client credibility."
          }
        },
        {
          "@type": "Question",
          "name": "Can Delhi freelancers claim ITC on software subscriptions?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Yes. GST on Adobe Microsoft 365 Slack Zoom Figma eligible for ITC with proper invoice. Foreign SaaS may require Reverse Charge."
          }
        },
        {
          "@type": "Question",
          "name": "How does export of services work for Delhi freelancers?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Export zero-rated. File LUT Form RFD-11 annually. Five conditions: supplier in India client outside place of supply outside payment in forex services not consumed in India."
          }
        },
        {
          "@type": "Question",
          "name": "Should I choose regular GST or composition scheme?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Regular 18% better for B2B exporters high-expense freelancers. Composition 6% suits B2C local below Rs 50 lakh with low expenses. Most Delhi freelancers benefit from regular due to ITC."
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
                        GST Returns for Freelancers in Delhi: Compliance Made Simple
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
                            <p class="mb-0 text-dark benefit-paragraph"><span>Threshold:</span> Rs 20 lakh aggregate turnover (Delhi - normal state)</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Rate:</span> 18% GST on most professional/freelance services</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Returns:</span> GSTR-1 (11th) + GSTR-3B (20th) monthly - QRMP quarterly option</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Export:</span> Zero-rated with LUT - ITC on software, co-working, equipment</p>
                        </div>
                    </div>

                    <p class="mb-4 fw-bold" style="color: var(--blue); font-size: 15px;">10,000+ Businesses Served | 4.9 Google Rating</p>

                    <div class="hero-cta">
                        <a href="tel:+919459456700" class="btn-video text-decoration-none">
                            <span class="play-circle"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="width:14px;height:14px;color:#fff"><path d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/></svg></span>
                            Call +91 945 945 6700
                        </a>
                        <a href="mailto:sales@patronaccounting.com?subject=Freelancer%20GST%20Enquiry%20-%20Delhi&body=Hello%2C%20I%20just%20visited%20your%20GST%20Returns%20for%20Freelancers%20in%20Delhi%20page.%20I%20would%20like%20to%20know%20more%20about%20it.%0A%0AThank%20you." class="btn-sample text-decoration-none">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="width:18px;height:18px;"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,12 2,6"/></svg>
                            Email Us
                        </a>
                        <a href="https://wa.me/919459456700?text=Hello%2C%20I%20just%20visited%20your%20GST%20Returns%20for%20Freelancers%20in%20Delhi%20page.%20I%20would%20like%20to%20know%20more%20about%20it." target="_blank" class="btn-sample text-decoration-none" rel="noopener">
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
                                            'service'  => 'GST Returns for Freelancers in Delhi',
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
    'ctaText'    => 'Freelancer-friendly GST compliance. From Rs 999/month. ITC maximised.',
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
            <a href="#overview-section" class="toc-btn active">Overview</a><a href="#what-section" class="toc-btn">What Are Freelancer Returns</a><a href="#who-section" class="toc-btn">Who Needs Filing</a><a href="#services-section" class="toc-btn">Services</a><a href="#procedure-section" class="toc-btn">Filing Process</a><a href="#documents-section" class="toc-btn">ITC Expenses</a><a href="#challenges-section" class="toc-btn">Challenges</a><a href="#fees-section" class="toc-btn">Fees</a><a href="#timeline-section" class="toc-btn">Calendar</a><a href="#benefits-section" class="toc-btn">Why Patron</a><a href="#comparison-section" class="toc-btn">Comparison</a><a href="#faq-section" class="toc-btn">FAQs</a>
        </div>
        <button class="toc-arrow right" id="tocRight">&#10095;</button>
    </div>
</div>

<!-- SECTION 2: OVERVIEW / INTRO + TL;DR -->
<section class="content-section" id="overview-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">GST Returns for Freelancers in Delhi: Registration, Filing, and ITC</h2>
            <div class="content-text">
                <div class="highlight-box" style="margin-bottom:20px;">
                    <p><strong>&#128204; TL;DR - GST Returns for Freelancers in Delhi Services at a Glance</strong></p>
                    <p>Delhi freelancers (web developers, designers, consultants, content writers, marketers, photographers) must register for GST when aggregate turnover exceeds Rs 20 lakh. Standard rate is 18%. Registered freelancers file GSTR-1 and GSTR-3B - monthly or quarterly under QRMP (Delhi Category 2, GSTR-3B due 24th). ITC on software subscriptions (Adobe, Microsoft 365), laptop/equipment, co-working space rent, internet, web hosting, and professional services. Export of services to foreign clients is zero-rated - file LUT (Form RFD-11). Nil returns mandatory even with zero income. Patron Accounting files GST returns for Delhi freelancers from our Rohini office.</p>
                </div>
                <p>Delhi has one of India's largest freelancer ecosystems. Web developers and IT consultants in Nehru Place, digital marketing professionals in Connaught Place, content writers across South Delhi, photographers in Saket and Hauz Khas, management consultants in Aerocity, and thousands working from co-working spaces (WeWork, 91springboard, myHQ, Innov8). Learn more about <a href="/gst-returns-for-freelancers">GST Returns for Freelancers across India</a>.</p>
                <p>Patron Accounting's Delhi office provides specialised freelancer GST filing: GSTR-1/3B (monthly or QRMP), ITC optimisation, export compliance with LUT, Nil return management, and integrated <a href="/itr-for-professionals">ITR filing</a>. With freelancer-friendly pricing from Rs 999/month and expertise in both domestic and export <a href="/gst-returns">GST compliance</a>, Patron simplifies compliance for Delhi's independent professionals.</p>
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
                <h2 class="section-title">What Are Freelancer GST Returns: Periodic Compliance for Independent Professionals</h2>
                <div class="content-text what-is-definition">
                    
                    <p>GST return filing for freelancers is the process of reporting outward supplies (services invoiced to clients), claiming input tax credit on business expenses, and paying the net GST liability through periodic filings on the GST portal. Freelancers registered under regular GST file GSTR-1 (detailed outward supply statement) and GSTR-3B (summary return with total liability, ITC claimed, and net tax payment). Those under composition file CMP-08 quarterly and GSTR-4 annually.</p><p>For Delhi freelancers, GST compliance is distinctive: most have few invoices per month (5-30), ITC on business expenses significantly reduces effective tax burden, export services to international clients are zero-rated, and QRMP allows quarterly filing for turnover up to Rs 5 crore.</p><p>However, freelancers face unique challenges: distinguishing domestic from export supplies, correctly applying reverse charge on imported services (foreign SaaS), maintaining proper invoices with GSTIN and SAC codes, filing Nil returns during lean months, and reconciling ITC claims. Patron handles all these for Delhi freelancers, turning GST from a monthly burden into a seamless process.</p>

                </div>
                <div class="highlight-box" style="margin-top:20px;">
                    <p><strong>Key Terms for GST Returns for Freelancers in Delhi:</strong></p>
                    <p><strong>LUT:</strong> Letter of Undertaking (Form RFD-11) filed annually for zero-rated export of services without paying IGST.</p><p><strong>SAC Code:</strong> Services Accounting Code - most freelance services fall under SAC 9983 (professional services) at 18% GST.</p><p><strong>QRMP:</strong> Quarterly Return Monthly Payment for turnover up to Rs 5 crore. Delhi = Category 2 (GSTR-3B due 24th).</p><p><strong>RCM:</strong> Reverse Charge Mechanism on imported services from foreign SaaS platforms (Adobe, Canva, Figma).</p>

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
                            <text x="100" y="170" font-size="10" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial, sans-serif">GST Returns for Freelancers in Delhi</text>
                        </svg>
                    </div>
                    <div class="illustration-badge">
                        <span>Section 37/39 CGST Act</span>
                        <strong>Freelancer GST</strong>
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
            <h2 class="section-title">Who Needs GST Return Filing in Delhi</h2>
            <div class="content-text">
                
                <ul><li><strong>Delhi freelancers with turnover above Rs 20 lakh</strong> - All professional income at PAN level: freelancing, consulting, teaching, part-time work. Mandatory registration and filing.</li><li><strong>Delhi freelancers providing interstate services</strong> - Services to clients in other states (Delhi designer for Mumbai company) constitute interstate supply.</li><li><strong>Delhi freelancers exporting services</strong> - International clients (US, UK, Singapore, UAE). Export is zero-rated but registration and LUT filing required.</li><li><strong>Delhi freelancers importing services (RCM)</strong> - Foreign SaaS platforms (Adobe, Canva, Figma) may trigger Reverse Charge obligations.</li><li><strong>Voluntarily registered Delhi freelancers</strong> - Below threshold but registered for ITC claims and client credibility.</li></ul>

            </div>
            </div>
        </div>
    </div>
</section>

<!-- SECTION 5: OUR SERVICES -->
<section class="content-section" id="services-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Freelancer GST Return Services: What Patron Handles</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Service</th><th>What We Do</th></tr></thead>
                    <tbody>
                        <tr><td>GSTR-1 Preparation and Filing</td><td>Client invoices compiled: B2B (with GSTIN, SAC), B2C, export (zero-rated with LUT), credit notes. Filed by 11th or 13th quarterly.</td></tr><tr><td>GSTR-3B Summary and Tax Payment</td><td>Outward supplies, ITC from GSTR-2B, reverse charge on imports, net tax payable. Filed by 20th or 24th (Delhi QRMP).</td></tr><tr><td>ITC Optimisation</td><td>All eligible ITC identified: software (Adobe, Microsoft 365), laptop/equipment, co-working (WeWork, 91springboard Delhi), internet, hosting, CA fees. Monthly GSTR-2B reconciliation.</td></tr><tr><td>Export of Services + LUT Filing</td><td>Annual LUT (Form RFD-11), correct export reporting in GSTR-1, FIRC/e-BRC documentation, export classification verification.</td></tr><tr><td>Nil Return Filing</td><td>Zero-transaction months filed as Nil GSTR-1 and GSTR-3B. Portal or SMS filing. Prevents cascading blocks.</td></tr><tr><td>Composition Scheme Management</td><td>For freelancers up to Rs 50 lakh (local only): 6% flat rate, CMP-08 quarterly, GSTR-4 annual, Bill of Supply.</td></tr><tr><td>Bundled Tax Compliance</td><td>GST coordinated with <a href="/itr-for-professionals">ITR filing</a>, <a href="/gst-registration">GST registration</a>, and bookkeeping.</td></tr>

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
            <h2 class="section-title">Freelancer GST Filing Process in Delhi: 6 Monthly Steps</h2>
            <p class="section-subtitle" style="text-align:left;max-width:100%;">Delhi freelancers under QRMP have quarterly GSTR-3B by 24th (Category 2). Monthly filers follow 11th/20th schedule. Co-working space rent invoices from Delhi spaces are ITC-eligible.</p>
        </header>
        <div class="steps-container">
            <div class="step-card"><div class="step-content"><span class="step-badge">Step 1</span><h3 class="step-title">Issue GST-Compliant Invoices to Clients</h3><p class="step-description">Every invoice must include: your GSTIN, client name/GSTIN (B2B), sequential invoice number, SAC code, taxable value, 18% GST (domestic) or 0% (export with LUT). For exports, endorse "Supply meant for export under LUT without payment of IGST". Patron provides invoice templates.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>SAC code included</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>LUT endorsement</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="15" y="5" width="90" height="70" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><line x1="30" y1="25" x2="90" y2="25" stroke="#F5A623" stroke-width="3" stroke-linecap="round"/><line x1="30" y1="40" x2="80" y2="40" stroke="#14365F" stroke-width="2" opacity="0.3" stroke-linecap="round"/><line x1="30" y1="52" x2="70" y2="52" stroke="#14365F" stroke-width="2" opacity="0.3" stroke-linecap="round"/></svg></div><span class="illustration-label">Invoice Ready</span><span class="step-number-large">01</span></div></div></div><div class="step-card"><div class="step-content"><span class="step-badge">Step 2</span><h3 class="step-title">Track Business Expenses for ITC</h3><p class="step-description">Maintain records of all GST-paid business expenses: software subscriptions, equipment, co-working invoices, internet bills, hosting charges. Ensure all contain supplier GSTIN and your GSTIN. Only invoices in GSTR-2B are eligible for ITC.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>All expenses tracked</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>GST invoices collected</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="10" y="10" width="35" height="50" rx="4" fill="#F0F4F8" stroke="#14365F" stroke-width="1"/><rect x="25" y="20" width="35" height="50" rx="4" fill="#FFF3E0" stroke="#F5A623" stroke-width="1"/><rect x="40" y="30" width="35" height="50" rx="4" fill="#E8F5E9" stroke="#10B981" stroke-width="1"/></svg></div><span class="illustration-label">Expenses Tracked</span><span class="step-number-large">02</span></div></div></div><div class="step-card"><div class="step-content"><span class="step-badge">Step 3</span><h3 class="step-title">Reconcile ITC with GSTR-2B</h3><p class="step-description">Download GSTR-2B and match with purchase records. Verify eligible ITC, exclude blocked credits (personal expenses, food under S.17(5)), and account for RCM on foreign SaaS. Patron runs monthly reconciliation for every Delhi freelancer.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>GSTR-2B matched</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Blocked credits excluded</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><circle cx="40" cy="40" r="22" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><circle cx="80" cy="40" r="22" fill="#FFF3E0" stroke="#F5A623" stroke-width="1.5"/><path d="M55 40h10" stroke="#10B981" stroke-width="3"/></svg></div><span class="illustration-label">ITC Reconciled</span><span class="step-number-large">03</span></div></div></div><div class="step-card"><div class="step-content"><span class="step-badge">Step 4</span><h3 class="step-title">File GSTR-1 with All Invoices</h3><p class="step-description">Upload outward supply invoices: B2B (client GSTIN-wise), B2C (aggregate), export invoices, credit/debit notes. For QRMP, file IFF in Month 1/2 for B2B clients. Patron files by 8th-9th for comfortable buffer.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Filed by 8th-9th</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Export correctly reported</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="20" y="10" width="80" height="55" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><path d="M60 25L60 45" stroke="#14365F" stroke-width="2" stroke-linecap="round"/><path d="M50 35l10-10 10 10" stroke="#14365F" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/><rect x="40" y="55" width="40" height="10" rx="3" fill="#E8F5E9" stroke="#10B981" stroke-width="1"/></svg></div><span class="illustration-label">GSTR-1 Filed</span><span class="step-number-large">04</span></div></div></div><div class="step-card"><div class="step-content"><span class="step-badge">Step 5</span><h3 class="step-title">File GSTR-3B and Pay Tax</h3><p class="step-description">Enter summary: Table 3.1 (taxable/zero-rated/nil), Table 4 (ITC from GSTR-2B), Table 5 (exempt/reverse charge). Compute net tax: GST collected minus ITC = net payable. Pay via cash ledger if ITC insufficient. Patron files by 17th-18th.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>ITC offset applied</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Tax paid</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="20" y="10" width="80" height="55" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><circle cx="90" cy="15" r="12" fill="#E8F5E9" stroke="#10B981" stroke-width="1.5"/><path d="M85 15l4 4 7-7" stroke="#10B981" stroke-width="2" stroke-linecap="round"/></svg></div><span class="illustration-label">GSTR-3B Filed</span><span class="step-number-large">05</span></div></div></div><div class="step-card"><div class="step-content"><span class="step-badge">Step 6</span><h3 class="step-title">Maintain Records and Plan Ahead</h3><p class="step-description">Download filed returns, archive invoices, plan for quarterly PMT-06 (QRMP), annual LUT renewal (April), and GSTR-9 (if turnover > Rs 2 crore). Patron manages the complete compliance calendar for Delhi freelancers.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>LUT renewal tracked</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Calendar managed</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><circle cx="60" cy="40" r="28" fill="#E8F5E9" stroke="#10B981" stroke-width="2"/><path d="M48 40l8 8 16-16" stroke="#10B981" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/></svg></div><span class="illustration-label">Complete</span><span class="step-number-large">06</span></div></div></div>

        </div>
    </div>
</section>

<!-- SECTION 8: DOCUMENTS REQUIRED -->
<section class="content-section" id="documents-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">ITC-Eligible Expenses for Delhi Freelancers</h2>
            <div class="content-text">
                
                <ul><li><strong>Software Subscriptions</strong> - Adobe Creative Cloud, Microsoft 365, Slack, Zoom, Figma, GitHub - ITC claimable with GST invoice.</li><li><strong>Laptop / Equipment</strong> - MacBook, PC, camera, microphone, monitor, tablet - ITC claimable.</li><li><strong>Co-Working Space Rent</strong> - WeWork CP, 91springboard Okhla, myHQ Nehru Place, Innov8 Delhi - ITC claimable.</li><li><strong>Internet / Phone</strong> - Broadband, mobile data, business phone plan - ITC on business portion.</li><li><strong>Web Hosting / Domains</strong> - AWS, GoDaddy, Google Workspace, Cloudflare - ITC claimable.</li><li><strong>Professional Services</strong> - CA fees, legal consultation, tax filing services - ITC claimable.</li><li><strong>Travel (Business)</strong> - Cab (Ola/Uber GST invoice), train, flight for client meetings - ITC claimable.</li><li><strong>Food / Entertainment</strong> - Meals, personal entertainment - NOT claimable (blocked under S.17(5)).</li></ul>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 9: CHALLENGES -->
<section class="content-section" id="challenges-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Common Freelancer GST Challenges in Delhi: 5 Issues and Solutions</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Challenge</th><th>Impact</th><th>How Patron Accounting Solves It</th></tr></thead>
                    <tbody>
                        <tr><td>Mixing Personal and Business Expenses</td><td>ITC claimed on personal expenses (phone, electricity, vehicle) blocked under Section 17(5)</td><td>Patron ensures only legitimate business expenses are claimed</td></tr><tr><td>Export Classification Errors</td><td>Five conditions for zero-rated export must all be met. INR payment instead of forex disqualifies export</td><td>Patron verifies export classification for every international invoice</td></tr><tr><td>Not Filing LUT</td><td>Export without LUT means paying IGST upfront and waiting months for refund</td><td>LUT (Form RFD-11) filed proactively every April for Delhi exporters</td></tr><tr><td>Skipping Nil Returns</td><td>Zero-income months without filing create sequential blocks and late fee accumulation</td><td>Patron files Nil returns for every month even with zero income</td></tr><tr><td>RCM on Foreign SaaS</td><td>Adobe, Canva, Figma from foreign suppliers may trigger Reverse Charge obligation</td><td>Patron identifies and reports RCM liability for Delhi freelancers</td></tr>

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
            <h2 class="section-title">Freelancer GST Filing Fees in Delhi</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Fee Component</th><th>Amount</th></tr></thead>
                    <tbody>
                        <tr><td>Monthly GSTR-1 + GSTR-3B (up to 10 invoices)</td><td>From INR 999/month</td></tr><tr><td>Monthly GSTR-1 + GSTR-3B (10-30 invoices)</td><td>From INR 1,999/month</td></tr><tr><td>QRMP Quarterly Filing + PMT-06</td><td>From INR 2,499/quarter</td></tr><tr><td>LUT Filing (Annual)</td><td>From INR 999</td></tr><tr><td>GSTR-9 Annual Return</td><td>From INR 4,999</td></tr><tr><td>Bundled GST + ITR Package</td><td>From INR 14,999/year</td></tr><tr><td>Patron Accounting Professional Fees</td><td>Starting from INR 999 (Exl GST and Govt. Charges)</td></tr>

                    </tbody>
                </table>
                </div>
                <p style="margin-top:16px;font-size:13px;color:var(--text-muted);font-style:italic;">All fees and charges listed are indicative only and do not constitute a binding offer. Final amounts may vary depending on the volume of work and the complexity involved.</p>
                <p style="margin-top:16px;">Professional service charges for drafting, filing, and representation are separate from the statutory fees. The exact fee depends on the complexity of the case, disputed amount, and number of hearings required. Contact us for a detailed quote.</p>
                <p style="margin-top:16px;"><strong>Get a free GST Returns for Freelancers in Delhi consultation - <a href="tel:+919459456700">Call +91 945 945 6700</a> or <a href="https://wa.me/919459456700?text=Hello%2C%20I%20just%20visited%20your%20GST%20Returns%20for%20Freelancers%20in%20Delhi%20page.%20I%20would%20like%20to%20know%20more%20about%20it." target="_blank" rel="noopener">WhatsApp us</a>. No-obligation assessment.</strong></p>
            </div>
        </div>
    </div>
</section>

<!-- SECTION 11: TIMELINE -->
<section class="content-section" id="timeline-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Freelancer GST Compliance Calendar (Delhi)</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Stage</th><th>Estimated Timeline</th></tr></thead>
                    <tbody>
                        <tr><td>1st April</td><td>File LUT (Form RFD-11) for export - valid one FY</td></tr><tr><td>11th monthly</td><td>GSTR-1 for monthly filers (all outward supply invoices)</td></tr><tr><td>13th (M1, M2)</td><td>IFF for QRMP filers (B2B invoices for buyer ITC)</td></tr><tr><td>13th (after quarter)</td><td>GSTR-1 for QRMP quarterly filers</td></tr><tr><td>20th monthly</td><td>GSTR-3B for monthly filers (summary + tax payment)</td></tr><tr><td>24th (after quarter)</td><td>GSTR-3B for QRMP Delhi Category 2</td></tr><tr><td>25th monthly</td><td>PMT-06 for QRMP (monthly estimated tax payment)</td></tr><tr><td>31st December</td><td>GSTR-9 annual return (if turnover > Rs 2 crore)</td></tr>

                    </tbody>
                </table>
                </div>
                <div class="highlight-box" style="margin-top:16px;">
                    
                    <p><strong>Important:</strong> Delhi freelancers who export services must file LUT by 1st April every year. Missing LUT means paying IGST on all exports and waiting for refund. Patron files LUT proactively for Delhi export freelancers.</p>

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
            <h2 class="section-title">Why Choose Patron for Freelancer GST in Delhi</h2>
        </div>
        <div class="features-grid"><article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><h3>Freelancer-Specific Expertise</h3><p>Low invoice volume but complex ITC, export services with LUT, composition evaluation, and irregular income Nil returns - all handled.</p></article><article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2"><path d="M12 1v22M5 8h14M5 16h14"/></svg></div><h3>ITC Maximisation</h3><p>Every eligible rupee of ITC on software, co-working, and equipment claimed. Monthly GSTR-2B reconciliation ensures nothing is missed.</p></article><article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><h3>Export + Domestic Dual Compliance</h3><p>Correct segregation between taxable domestic and zero-rated exports in GSTR-1 and GSTR-3B. LUT filed annually.</p></article><article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg></div><h3>Integrated GST + ITR</h3><p>Turnover consistency across GST and income tax. Both filed by Patron for Delhi freelancers in one integrated package.</p></article></div>
    </div>
</section>

<!-- SECTION 12A: SOCIAL PROOF -->
<section class="content-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Trusted by 10,000+ Businesses Across India</h2>
            <div class="content-text">
                
                <p><strong>10,000+ Businesses Served | 4.9 Google Rating | 50,000+ Documents Filed | 15+ Years of Practice</strong></p><p>"Patron files my GST and ITR every month. I just forward my invoices and they handle everything. Haven't paid a single late fee in 3 years." - Freelance Web Developer, Nehru Place, Delhi</p><p><strong>4-Office Signal:</strong> Pune, Mumbai, Delhi, and Gurugram.</p>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 13: SELF-FILING vs PROFESSIONAL COMPARISON -->
<section class="content-section" id="comparison-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Patron vs Self-Filing: Freelancer GST Comparison</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Factor</th><th>Patron Accounting</th><th>Self-Filing</th></tr></thead>
                    <tbody>
                        <tr><td>ITC Identification</td><td>All eligible expenses identified and claimed</td><td>Often miss software, co-working ITC</td></tr><tr><td>Export Compliance</td><td>LUT filed, export invoices correct, FIRC tracked</td><td>LUT often forgotten, IGST paid unnecessarily</td></tr><tr><td>GSTR-2B Reconciliation</td><td>Monthly matching before every GSTR-3B</td><td>Skipped, risking excess ITC notices</td></tr><tr><td>Nil Returns</td><td>Filed for every zero-income month</td><td>Frequently missed, causing blocks</td></tr><tr><td>RCM on Foreign SaaS</td><td>Identified and reported</td><td>Usually unaware of obligation</td></tr><tr><td>Pricing</td><td>From INR 999/month</td><td>Free but high penalty/ITC loss risk</td></tr>

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
            <h2 class="section-title">Related Freelancer and Compliance Services</h2>
            <div class="content-text">
                
                <ul><li><a href="/gst-returns-for-freelancers">GST Returns for Freelancers (India)</a> - National-level freelancer GST compliance.</li><li><a href="/itr-for-professionals">ITR for Freelancers/Professionals</a> - Income tax return filing for freelancers.</li><li><a href="/gst-registration">GST Registration</a> - New GST registration for freelancers.</li><li><a href="/gst-returns">GST Returns</a> - Regular monthly GST return filing.</li><li><a href="/accounting-services">Accounting Services</a> - Bookkeeping and financial management.</li><li><a href="/startup-registration">Startup Registration</a> - Company registration for freelancers transitioning to startups.</li></ul>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 15A: LEGAL FRAMEWORK -->
<section class="content-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Legal Framework: Freelancer GST Under CGST Act 2017</h2>
            <div class="content-text">
                
                <p><strong>Threshold (Delhi):</strong> Rs 20 lakh aggregate turnover at PAN level (normal state).</p><p><strong>GST Rate:</strong> 18% on professional services (SAC 9983).</p><p><strong>Returns:</strong> GSTR-1 (Section 37), GSTR-3B (Section 39). QRMP Delhi Category 2 (GSTR-3B 24th).</p><p><strong>ITC:</strong> Section 16-17. Blocked credits: Section 17(5).</p><p><strong>Export:</strong> Zero-rated. LUT Form RFD-11 annually. FIRC/e-BRC required.</p><p><strong>Composition:</strong> Section 10. Up to Rs 50 lakh services. 6% flat. No ITC. No interstate.</p><p><strong>RCM:</strong> Section 5(3) IGST Act on imported services from foreign suppliers.</p><p><strong>Late Fee:</strong> Rs 50/day per return. Nil: Rs 20/day. Interest 18% p.a.</p><p><strong>3-Year Lock:</strong> From July 2025, GSTR-3B cannot be filed after 3 years from due date.</p><p><strong>Source:</strong> <a href="https://gst.gov.in" target="_blank" rel="noopener">gst.gov.in</a>, <a href="https://cbic.gov.in" target="_blank" rel="noopener">cbic.gov.in</a></p>

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
                    <h2 class="faq-expanded__title">FAQs: GST Returns for Freelancers in Delhi</h2>
                    <p class="faq-expanded__lead">Common questions about freelancer GST registration, ITC, export, and filing in Delhi.</p>
                    @include('partials.bigin-form', [
                        'variant'  => 'compact',
                        'service'  => 'GST Returns for Freelancers in Delhi',
                        'city'     => 'Delhi',
                    ])
                </aside>
                <div class="faq-expanded__list">
                    <div class="faq-expanded__item" id="faq-1">
                        <h3 class="faq-expanded__q">Is GST mandatory for freelancers in Delhi?</h3>
                        <div class="faq-expanded__a"><p>GST registration becomes mandatory when aggregate turnover at PAN level exceeds Rs 20 lakh. Delhi is a normal state so Rs 20 lakh threshold applies. Even below the threshold, voluntary registration is beneficial for ITC claims and client credibility. Patron assesses each Delhi freelancer's registration obligation.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-2">
                        <h3 class="faq-expanded__q">Can Delhi freelancers claim ITC on software subscriptions?</h3>
                        <div class="faq-expanded__a"><p>Yes. GST paid on Adobe Creative Cloud, Microsoft 365, Slack, Zoom, Figma, and other business tools is eligible for ITC with proper GST invoice. For foreign SaaS billed in foreign currency from unregistered suppliers, you may need to pay GST under Reverse Charge and then claim ITC. Patron ensures all eligible software ITC is claimed.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-3">
                        <h3 class="faq-expanded__q">How does export of services work for Delhi freelancers?</h3>
                        <div class="faq-expanded__a"><p>Export of services is zero-rated under GST. If you meet all five conditions (supplier in India, client outside India, place of supply outside, payment in foreign exchange, services not consumed in India), charge 0% GST. File LUT (Form RFD-11) annually to export without IGST. Maintain FIRC/e-BRC. Patron files LUT and manages export compliance.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-4">
                        <h3 class="faq-expanded__q">Should I choose regular GST or composition scheme?</h3>
                        <div class="faq-expanded__a"><p>Regular GST (18%) is better for B2B freelancers, exporters, and those with significant business expenses where ITC is valuable. Composition (6%) suits B2C local freelancers below Rs 50 lakh with minimal expenses. Most Delhi freelancers benefit from regular GST because ITC on software and equipment effectively reduces the rate.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-5">
                        <h3 class="faq-expanded__q">What happens if I miss filing GST returns?</h3>
                        <div class="faq-expanded__a"><p>Late fee Rs 50/day per return, capped at Rs 5,000. Nil: Rs 20/day, max Rs 500. Interest 18% on unpaid tax. Sequential filing block means all subsequent months are also blocked. From July 2025, GSTR-3B cannot be filed after 3 years. Persistent non-filing can lead to GSTIN cancellation.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-6">
                        <h3 class="faq-expanded__q">Do I need to file Nil returns if I had no income?</h3>
                        <div class="faq-expanded__a"><p>Yes. Even with zero income, Nil GSTR-1 and Nil GSTR-3B must be filed. Non-filing creates sequential blocks and attracts Rs 20/day late fee. Nil returns can be filed via SMS. Patron files Nil returns for every inactive month.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-7">
                        <h3 class="faq-expanded__q">Can I use a virtual office for GST registration in Delhi?</h3>
                        <div class="faq-expanded__a"><p>Yes. Virtual office address is accepted for GST registration in Delhi. You need a lease/services agreement from the provider, ownership proof, and consent letter. Many Delhi freelancers use virtual offices in CP or Nehru Place. Patron assists with virtual office registration.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-8">
                        <h3 class="faq-expanded__q">How much does freelancer GST filing cost in Delhi?</h3>
                        <div class="faq-expanded__a"><p>Patron's freelancer filing starts from INR 999/month for up to 10 invoices. QRMP from Rs 2,499/quarter. LUT from Rs 999. Bundled GST + ITR from Rs 14,999/year. Includes ITC reconciliation and Nil returns. Call +91 945 945 6700.</p></div>
                    </div>
                </div>
            </div>


            <!-- Quick Answers -->
            <div class="highlight-box" style="margin-top:32px;">
                <p><strong>Quick Answers</strong></p>
                <p><strong>Freelancer ko GST registration kab karna hota hai?</strong> Jab total income Rs 20 lakh cross kare (PAN level). Delhi normal state hai. Export karte ho toh LUT zaroori hai.</p><p><strong>Software par ITC mil sakta hai?</strong> Haan. Adobe, Microsoft 365, Zoom, Figma - sab par GST invoice ke saath ITC claim ho sakta hai. Co-working rent par bhi.</p><p><strong>Export karte hain toh GST lagta hai?</strong> Nahi - export zero-rated hai. LUT file karo April mein, bina IGST ke export karo. Payment forex mein hona chahiye.</p>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 18: URGENCY CTA -->
<section class="content-section" style="background: var(--orange-lighter) !important; border-left: 4px solid var(--orange);">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Freelancer GST Filing - Start Today, Save Every Month</h2>
            <div class="content-text">
                
                <p>Every Delhi freelancer earning above Rs 20 lakh is obligated to file GST returns. Missing even one month creates sequential blocks with cascading penalties. ITC on software, equipment, and co-working goes unclaimed every month. Exporters without LUT pay IGST unnecessarily. The 3-year filing lock means historical non-filing becomes permanent.</p><p><strong>Contact Patron's Delhi office - <a href="tel:+919459456700">Call +91 945 945 6700</a> or <a href="https://wa.me/919459456700?text=Hello%2C%20I%20just%20visited%20your%20GST%20Returns%20for%20Freelancers%20in%20Delhi%20page.%20I%20would%20like%20to%20know%20more%20about%20it." target="_blank" rel="noopener">WhatsApp us</a>. From Rs 999/month.</strong></p>

            </div>
        </div>
    </div>
</section>

<!-- CONCLUSION + CTA BLOCK (Dark) -->
<section class="content-section" style="background: var(--blue) !important;">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title" style="color:#FFFFFF !important;">Start Freelancer GST Filing in Delhi Today</h2>
            <div class="content-text" style="text-align:left;">
                
                <p style="color:rgba(255,255,255,0.9);">GST return filing for freelancers in Delhi covers domestic service invoicing at 18% with ITC claims, zero-rated export services with LUT, and composition evaluation. Delhi's large freelancer ecosystem spanning IT, design, content, consulting, and professional services requires compliance that is both accurate and affordable.</p><p style="color:rgba(255,255,255,0.9);">Patron Accounting provides specialised GST filing from our Rohini office - GSTR-1/3B, ITC optimisation, export with LUT, Nil returns, GSTR-2B reconciliation, and integrated ITR. From Rs 999/month with 15+ years of practice across Pune, Mumbai, Delhi, and Gurugram.</p><p style="color:rgba(255,255,255,0.7);font-size:13px;">Reviewed by CA & CS Team - Patron Accounting LLP</p>

            </div>
            <div style="display:flex;gap:14px;flex-wrap:wrap;margin-top:24px;">
                <a href="tel:+919459456700" style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:var(--orange);color:#fff;border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#128222; Call +91 945 945 6700</a>
                <a href="https://wa.me/919459456700?text=Hello%2C%20I%20just%20visited%20your%20GST%20Returns%20for%20Freelancers%20in%20Delhi%20page.%20I%20would%20like%20to%20know%20more%20about%20it." target="_blank" style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:#25D366;color:#fff;border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;" rel="noopener">&#128172; WhatsApp Us</a>
                <a href="mailto:sales@patronaccounting.com?subject=Freelancer%20GST%20Enquiry%20-%20Delhi&body=Hello%2C%20I%20just%20visited%20your%20GST%20Returns%20for%20Freelancers%20in%20Delhi%20page.%20I%20would%20like%20to%20know%20more%20about%20it.%0A%0AThank%20you." style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:transparent;color:#fff;border:2px solid rgba(255,255,255,0.3);border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#9993;&#65039; Email Us</a>
            </div>
            <p style="color:rgba(255,255,255,0.7);font-size:13px;margin-top:16px;">Book a Free Consultation - No Obligation.</p>
        </div>
    </div>
</section>

<!-- GSTAT STATE BENCH CITY PAGES (32 Pages) -->
<section class="content-section" style="padding:48px 32px;background:var(--gray-50);">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title" style="text-align:center;margin-bottom:12px;">Freelancer GST Services: Available Across 4 Major Cities</h2>
            <p style="text-align:center;color:var(--text-muted);font-size:15px;margin-bottom:40px;">Professional freelancer GST return filing in Pune, Mumbai, Delhi, and Gurugram.</p>
  
            <div class="pa-city-block" style="margin-bottom:40px;"><div class="pa-city-grid"><a href="/gst-returns-for-freelancers/pune" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Pune</div><div class="pa-card-sub">Maharashtra</div></div></a><a href="/gst-return-filing-for-freelancers/mumbai" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Mumbai</div><div class="pa-card-sub">Maharashtra</div></div></a><div class="pa-city-card" style="opacity:0.6; pointer-events:none; border:2px solid var(--orange); position:relative;"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Delhi</div><div class="pa-card-sub">Delhi NCR</div></div><span style="position:absolute; top:6px; right:8px; font-size:10px; color:var(--orange); font-weight:700; text-transform:uppercase; letter-spacing:0.5px;">You're here</span></div><a href="/gst-returns-for-freelancers/gurugram" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Gurugram</div><div class="pa-card-sub">Haryana</div></div></a></div></div><div class="pa-city-block"><div class="pa-block-title">Related Services in Delhi</div><div class="pa-block-sub">Complete freelancer compliance support</div><div class="pa-cross-grid"><a href="/gst-registration/delhi" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">GST Registration</div><div class="pa-card-sub">Delhi</div></div></a><a href="/gst-returns/delhi" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">GST Returns</div><div class="pa-card-sub">Delhi</div></div></a><a href="/income-tax-return/delhi" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Income Tax Return Filing</div><div class="pa-card-sub">Delhi</div></div></a><a href="/private-limited-company-registration/delhi" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Private Limited Company Registration</div><div class="pa-card-sub">Delhi</div></div></a><a href="/trademark-registration/delhi" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Trademark Registration</div><div class="pa-card-sub">Delhi</div></div></a><a href="/startup-registration/delhi" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Startup Registration</div><div class="pa-card-sub">Delhi</div></div></a></div></div>
        </div>
    </div>
</section>

<!-- CONTENT FRESHNESS FOOTER -->
<section class="content-section" style="padding:32px;">
    <div class="content-container">
        <div class="text-content" style="font-size:13px;color:var(--text-muted);">
            <p><strong>Content Created:</strong> 06 April 2026 &nbsp;|&nbsp; <strong>Last Updated:</strong> <span id="lastUpdatedFooter">06 April 2026</span> &nbsp;|&nbsp; <strong>Next Review:</strong> 06 October 2026 &nbsp;|&nbsp; <strong>Reviewed By:</strong> CA &amp; CS Team, Patron Accounting LLP</p>
            <p>This page is reviewed every 6 months to ensure freelancer GST thresholds, rates, QRMP rules, LUT procedures, and ITC eligibility are current. Verified against gst.gov.in.</p>
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
