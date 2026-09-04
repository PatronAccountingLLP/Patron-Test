
@extends('layouts.service-app')

<!-- External Dependencies (loaded by master layout in production) -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Barlow:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,400&family=DM+Sans:opsz,wght@9..40,400;9..40,500;9..40,600;9..40,700&display=swap" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

@section('meta')
    <title>GST Returns for Restaurants in Delhi – 5% &amp; Composition</title>
    <meta name="description" content="GST returns for restaurants in Delhi. 5% no ITC or 18% with ITC. Section 9(5) Zomato/Swiggy. Cloud kitchen. Composition scheme. Call +91 945 945 6700.">
    <link rel="canonical" href="/gst-returns-for-restaurants-food-businesses/delhi">
    <meta name="robots" content="index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1">
    <meta property="og:title" content="GST Returns for Restaurants in Delhi – 5% &amp; Composition">
    <meta property="og:description" content="GST returns for restaurants in Delhi. 5% no ITC or 18% with ITC. Section 9(5) Zomato/Swiggy. Cloud kitchen. Composition scheme. Call +91 945 945 6700.">
    <meta property="og:url" content="/gst-returns-for-restaurants-food-businesses/delhi">
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="Patron Accounting">
    <meta property="og:image" content="https://www.patronaccounting.com/images/og-default-square.png">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="1200">
    <meta property="og:image:type" content="image/png">
    <meta property="og:image:secure_url" content="https://www.patronaccounting.com/images/og-default-square.png">
    <meta property="og:image:alt" content="Patron Accounting - partner you can rely on">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="GST Returns for Restaurants in Delhi – 5% &amp; Composition">
    <meta name="twitter:description" content="GST returns for restaurants in Delhi. 5% no ITC or 18% with ITC. Section 9(5) Zomato/Swiggy. Cloud kitchen. Composition scheme. Call +91 945 945 6700.">
    <meta name="twitter:image" content="https://www.patronaccounting.com/images/og-default-square.png">
@endsection

@section('schema')
    <script type="application/ld+json">{
  "@context": "https://schema.org",
  "@graph": [
    {
      "@type": "Service",
      "name": "GST Returns for Restaurants and Food Businesses in Delhi",
      "description": "GST returns for restaurants in Delhi. 5% no ITC or 18% with ITC. Section 9(5) Zomato/Swiggy. Cloud kitchen. Composition scheme. Call +91 945 945 6700.",
      "url": "https://www.patronaccounting.com/gst-returns-for-restaurants-food-businesses/delhi",
      "serviceType": "GST Returns for Restaurants and Food Businesses in Delhi",
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
        "url": "https://www.patronaccounting.com/gst-returns-for-restaurants-food-businesses/delhi",
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
          "name": "GST Returns for Restaurants",
          "item": "https://www.patronaccounting.com/gst-returns-for-restaurants-food-businesses"
        },
        {
          "@type": "ListItem",
          "position": 3,
          "name": "GST Returns for Restaurants in Delhi",
          "item": "https://www.patronaccounting.com/gst-returns-for-restaurants-food-businesses/delhi"
        }
      ]
    },
    {
      "@type": "FAQPage",
      "mainEntity": [
        {
          "@type": "Question",
          "name": "What GST rate applies to my Delhi restaurant?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Most standalone restaurants 5% without ITC. Hotel restaurants with room tariff Rs 7500 plus 18% with ITC. Cloud kitchens 5% no ITC. Outdoor catering 18% with ITC. Composition 5% flat up to Rs 1.5 crore."
          }
        },
        {
          "@type": "Question",
          "name": "Can my Delhi restaurant claim ITC?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Only at 18% rate for hotel restaurants and outdoor caterers. Restaurants at 5% cannot claim ITC on any purchases. Many Delhi restaurants mistakenly claim ITC at 5% triggering audit demands."
          }
        },
        {
          "@type": "Question",
          "name": "How does Section 9(5) work for Zomato Swiggy orders?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Platform is deemed supplier pays 5% GST. Restaurant reports in GSTR-3B Table 3.1.1(ii) but does not pay GST on platform orders. Only pays GST on direct sales."
          }
        },
        {
          "@type": "Question",
          "name": "Is alcohol included in restaurant GST?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "No. Alcohol is NOT under GST. State excise applies. Food and alcohol must be bifurcated on bills. Only food portion attracts GST."
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
                        GST Returns for Restaurants in Delhi: Rate, ITC, and Filing Compliance
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
                            <p class="mb-0 text-dark benefit-paragraph"><span>5% GST:</span> Standalone restaurants, cloud kitchens, takeaway - No ITC</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>18% GST:</span> Hotel restaurants (room tariff Rs 7,500+), outdoor catering - ITC available</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Section 9(5):</span> Zomato/Swiggy pays GST as deemed supplier on platform orders</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Composition:</span> Turnover up to Rs 1.5 crore - 5% flat - CMP-08 quarterly</p>
                        </div>
                    </div>

                    <p class="mb-4 fw-bold" style="color: var(--blue); font-size: 15px;">300+ Restaurant Clients | 4.9 Google Rating | 99%+ On-Time Filing</p>

                    <div class="hero-cta">
                        <a href="tel:+919459456700" class="btn-video text-decoration-none">
                            <span class="play-circle"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="width:14px;height:14px;color:#fff"><path d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/></svg></span>
                            Call +91 945 945 6700
                        </a>
                        <a href="mailto:sales@patronaccounting.com?subject=Restaurant%20GST%20Enquiry%20-%20Delhi&body=Hello%2C%20I%20just%20visited%20your%20GST%20Returns%20for%20Restaurants%20Food%20Businesses%20in%20Delhi%20page.%20I%20would%20like%20to%20know%20more%20about%20it.%0A%0AThank%20you." class="btn-sample text-decoration-none">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="width:18px;height:18px;"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,12 2,6"/></svg>
                            Email Us
                        </a>
                        <a href="https://wa.me/919459456700?text=Hello%2C%20I%20just%20visited%20your%20GST%20Returns%20for%20Restaurants%20Food%20Businesses%20in%20Delhi%20page.%20I%20would%20like%20to%20know%20more%20about%20it." target="_blank" class="btn-sample text-decoration-none" rel="noopener">
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
                                            'service'  => 'GST Returns for Restaurants in Delhi',
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
    'ctaText'    => 'Delhi\'s trusted restaurant GST partner. 300+ clients. Zero S.9(5) misreporting.',
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
            <a href="#overview-section" class="toc-btn active">Overview</a><a href="#what-section" class="toc-btn">What Is Restaurant GST</a><a href="#who-section" class="toc-btn">Who Must File</a><a href="#services-section" class="toc-btn">Services</a><a href="#procedure-section" class="toc-btn">Filing Process</a><a href="#documents-section" class="toc-btn">5% vs 18%</a><a href="#challenges-section" class="toc-btn">Challenges</a><a href="#fees-section" class="toc-btn">Fees</a><a href="#timeline-section" class="toc-btn">Calendar</a><a href="#benefits-section" class="toc-btn">Why Patron</a><a href="#comparison-section" class="toc-btn">Comparison</a><a href="#faq-section" class="toc-btn">FAQs</a>
        </div>
        <button class="toc-arrow right" id="tocRight">&#10095;</button>
    </div>
</div>

<!-- SECTION 2: OVERVIEW / INTRO + TL;DR -->
<section class="content-section" id="overview-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">GST Returns for Restaurants and Food Businesses in Delhi</h2>
            <div class="content-text">
                <div class="highlight-box" style="margin-bottom:20px;">
                    <p><strong>&#128204; TL;DR - GST Returns for Restaurants in Delhi Services at a Glance</strong></p>
                    <p>Most standalone Delhi restaurants pay 5% GST without ITC under Notification 46/2017. Hotels with room tariff Rs 7,500+ pay 18% with ITC. Cloud kitchens are 5% no ITC. For Zomato/Swiggy orders, the platform pays GST as deemed supplier under Section 9(5) - restaurants report in GSTR-3B Table 3.1.1(ii) but do not pay GST on those orders. Composition available for turnover up to Rs 1.5 crore (5% flat, CMP-08 quarterly). Alcohol is NOT under GST. Patron manages GST for 300+ restaurant clients from our Delhi office.</p>
                </div>
                <p>Delhi is India's restaurant capital with the highest density of food establishments. From Chandni Chowk's legendary street food to Khan Market's upscale cafes, Hauz Khas Village eateries, Connaught Place dining, Aerocity 5-star hotels, and booming cloud kitchen clusters in Okhla and South Delhi. Delhi has the highest Zomato/Swiggy order volume in India. Learn more about <a href="/gst-returns-for-restaurants-food-businesses">GST Returns for Restaurants across India</a>.</p>
                <p>Patron Accounting's Delhi office provides end-to-end restaurant GST: rate determination, composition evaluation, GSTR-1/3B filing, Section 9(5) platform reconciliation, CMP-08 filing, alcohol bifurcation, POS configuration, and ITC management for 18% restaurants. With integrated <a href="/fssai-returns">FSSAI compliance</a> and <a href="/gst-registration">GST registration</a>, Patron is Delhi's restaurant compliance partner.</p>
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
                <h2 class="section-title">What Is Restaurant GST: Rate Structure and Return Filing</h2>
                <div class="content-text what-is-definition">
                    
                    <p>GST returns for restaurants are periodic filings reporting food and beverage supplies, applicable GST (5% or 18%), ITC (where eligible), and tax payment. The framework has a fundamental fork: standalone restaurants pay 5% without ITC (keeping food affordable), while hotels (room tariff Rs 7,500+) and caterers pay 18% with ITC (higher rate offset by credits).</p><p>Section 9(5) adds another layer for Delhi restaurants on food delivery platforms. When orders come via Zomato/Swiggy, the platform is deemed supplier and pays GST. The restaurant reports in GSTR-3B Table 3.1.1(ii) but does not pay GST on those orders. However, returns must still be filed and platform settlements reconciled.</p><p>For Delhi's diverse food ecosystem - from a Chandni Chowk parathewala under composition, to Khan Market fine-dining at 5%, to an Aerocity 5-star hotel restaurant at 18%, to a South Delhi cloud kitchen on Zomato - the GST treatment, rate, ITC, and return type differ significantly. Patron configures the correct structure for each Delhi food business.</p>

                </div>
                <div class="highlight-box" style="margin-top:20px;">
                    <p><strong>Key Terms for GST Returns for Restaurants in Delhi:</strong></p>
                    <p><strong>Section 9(5):</strong> Zomato/Swiggy deemed supplier for restaurant services. Platform pays GST. Restaurant reports in GSTR-3B 3.1.1(ii).</p><p><strong>Notification 46/2017:</strong> 5% GST without ITC for standalone restaurants, cloud kitchens, takeaway.</p><p><strong>Specified Premises:</strong> Hotels with room tariff Rs 7,500+ where restaurant attracts 18% with ITC.</p><p><strong>Cloud Kitchen:</strong> Delivery-only food facility. 5% no ITC. Section 9(5) for platform orders.</p>

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
                            <text x="100" y="170" font-size="10" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial, sans-serif">GST Returns for Restaurants in Delhi</text>
                        </svg>
                    </div>
                    <div class="illustration-badge">
                        <span>SAC 9963</span>
                        <strong>Restaurant GST</strong>
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
            <h2 class="section-title">Who Must File Restaurant GST Returns in Delhi</h2>
            <div class="content-text">
                
                <ul><li><strong>Standalone Delhi restaurants</strong> (dine-in, takeaway) with turnover above Rs 20 lakh. 5% GST without ITC. Covers CP, Khan Market, Hauz Khas, South Extension, Saket, Lajpat Nagar.</li><li><strong>Delhi hotel restaurants</strong> in hotels with room tariff Rs 7,500+. 18% GST with ITC. Aerocity, Chanakyapuri, central Delhi 5-star hotels.</li><li><strong>Delhi cloud kitchens</strong> (ghost kitchens). 5% no ITC. Primarily through Zomato/Swiggy (S.9(5)). Okhla, Nehru Place, South Delhi clusters.</li><li><strong>Delhi caterers</strong> providing outdoor catering. 18% with ITC. Banquet halls, farmhouses, event venues.</li><li><strong>Small Delhi restaurants under composition</strong> with turnover up to Rs 1.5 crore. 5% flat, no ITC, CMP-08 quarterly.</li></ul>

            </div>
            </div>
        </div>
    </div>
</section>

<!-- SECTION 5: OUR SERVICES -->
<section class="content-section" id="services-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Restaurant GST Return Services: What Patron Handles</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Service</th><th>What We Do</th></tr></thead>
                    <tbody>
                        <tr><td>Rate Determination and Scheme Selection</td><td>Evaluates 5% (no ITC), 18% (ITC for hotels/catering), or composition (5% flat). Analyses turnover, location, ITC potential.</td></tr><tr><td>GSTR-1 Preparation and Filing</td><td>Dine-in B2C, takeaway, B2B corporate/catering invoices, credit notes. HSN/SAC 9963. By 11th or 13th quarterly. E-invoicing for turnover above Rs 5 crore.</td></tr><tr><td>GSTR-3B with Section 9(5) Reporting</td><td>Table 3.1(a) for direct sales, Table 3.1.1(ii) for Zomato/Swiggy orders (no tax payment), Table 4 for ITC (18%). By 20th or 24th Delhi QRMP.</td></tr><tr><td>Section 9(5) Platform Reconciliation</td><td>Zomato/Swiggy settlement reports reconciled with GSTR-1/3B. Platform-reported supplies matched. Commission GST (18%) properly accounted.</td></tr><tr><td>Composition Management (CMP-08 + GSTR-4)</td><td>CMP-08 quarterly by 18th. Turnover monitoring against Rs 1.5 crore. Transition planning to regular scheme when needed.</td></tr><tr><td>Alcohol-Food Bifurcation</td><td>POS configured for food (GST) vs alcohol (excise) split. Correct billing for Delhi restaurants with bar licenses.</td></tr><tr><td>ITC Management (18% Restaurants)</td><td>For hotels/caterers: ITC on ingredients, equipment, rent, utilities, packaging. Monthly GSTR-2B reconciliation.</td></tr>

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
            <h2 class="section-title">Restaurant GST Filing Process in Delhi: 6 Monthly Steps</h2>
            <p class="section-subtitle" style="text-align:left;max-width:100%;">Delhi QRMP quarterly GSTR-3B by 24th (Category 2). Composition by 18th after quarter. Section 9(5) reporting critical given Delhi's highest Zomato/Swiggy volume in India.</p>
        </header>
        <div class="steps-container">
            <div class="step-card"><div class="step-content"><span class="step-badge">Step 1</span><h3 class="step-title">Capture All Sales Data from POS</h3><p class="step-description">Extract monthly data: dine-in B2C, takeaway, B2B corporate/catering invoices, credit notes, and Zomato/Swiggy platform orders. Separate alcohol from food. Patron integrates with Delhi restaurant POS systems.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>POS integrated</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Alcohol separated</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="15" y="5" width="90" height="70" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><line x1="30" y1="25" x2="90" y2="25" stroke="#F5A623" stroke-width="3" stroke-linecap="round"/><line x1="30" y1="40" x2="80" y2="40" stroke="#14365F" stroke-width="2" opacity="0.3" stroke-linecap="round"/></svg></div><span class="illustration-label">Data Captured</span><span class="step-number-large">01</span></div></div></div><div class="step-card"><div class="step-content"><span class="step-badge">Step 2</span><h3 class="step-title">Segregate Section 9(5) Platform Supplies</h3><p class="step-description">Download Zomato/Swiggy settlement reports. Platform orders go in GSTR-3B Table 3.1.1(ii) - no GST payment. Direct sales (dine-in, takeaway, own delivery) in Table 3.1(a). Patron reconciles platform reports.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Platform segregated</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Settlement matched</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="10" y="15" width="45" height="45" rx="4" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><rect x="65" y="15" width="45" height="45" rx="4" fill="#FFF3E0" stroke="#F5A623" stroke-width="1.5"/><text x="32" y="40" font-size="7" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">Direct</text><text x="87" y="40" font-size="7" fill="#F5A623" font-weight="700" text-anchor="middle" font-family="Arial">9(5)</text></svg></div><span class="illustration-label">Segregated</span><span class="step-number-large">02</span></div></div></div><div class="step-card"><div class="step-content"><span class="step-badge">Step 3</span><h3 class="step-title">File GSTR-1 by 11th</h3><p class="step-description">Upload outward supply invoices: B2C aggregate, B2B with GSTIN, credit notes. Section 9(5) in GSTR-1 Table 14. HSN/SAC 9963 for restaurant services. Patron files by 8th-9th.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>HSN 9963</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Filed by 8th-9th</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="20" y="10" width="80" height="55" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><path d="M60 25L60 45" stroke="#14365F" stroke-width="2" stroke-linecap="round"/><path d="M50 35l10-10 10 10" stroke="#14365F" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/><rect x="40" y="55" width="40" height="10" rx="3" fill="#E8F5E9" stroke="#10B981" stroke-width="1"/></svg></div><span class="illustration-label">GSTR-1 Filed</span><span class="step-number-large">03</span></div></div></div><div class="step-card"><div class="step-content"><span class="step-badge">Step 4</span><h3 class="step-title">Reconcile ITC (18% Restaurants Only)</h3><p class="step-description">For Delhi hotel restaurants and caterers at 18%, reconcile purchases (ingredients, equipment, services) with GSTR-2B. Claim eligible ITC. Exclude blocked credits. 5% restaurants skip this step - no ITC available.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>18% only</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>GSTR-2B matched</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><circle cx="40" cy="40" r="22" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><circle cx="80" cy="40" r="22" fill="#FFF3E0" stroke="#F5A623" stroke-width="1.5"/><path d="M55 40h10" stroke="#10B981" stroke-width="3"/></svg></div><span class="illustration-label">ITC Matched</span><span class="step-number-large">04</span></div></div></div><div class="step-card"><div class="step-content"><span class="step-badge">Step 5</span><h3 class="step-title">File GSTR-3B by 20th and Pay Tax</h3><p class="step-description">Summary: Table 3.1(a) direct taxable supplies, Table 3.1.1(ii) Section 9(5) platform (no tax), Table 4 ITC (18% only), net tax. Pay via ITC offset (18%) or cash (5%). Delhi QRMP quarterly by 24th. Patron files by 17th-18th.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>S.9(5) no tax</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Tax paid</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="20" y="10" width="80" height="55" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><circle cx="90" cy="15" r="12" fill="#E8F5E9" stroke="#10B981" stroke-width="1.5"/><path d="M85 15l4 4 7-7" stroke="#10B981" stroke-width="2" stroke-linecap="round"/></svg></div><span class="illustration-label">GSTR-3B Filed</span><span class="step-number-large">05</span></div></div></div><div class="step-card"><div class="step-content"><span class="step-badge">Step 6</span><h3 class="step-title">Reconcile Platforms and Archive</h3><p class="step-description">Cross-check Zomato/Swiggy settlements, commission invoices (18% GST), and TCS certificates with books and GST filings. Archive returns, platform reports, purchase invoices. Monthly reconciliation prevents annual return issues.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Platforms reconciled</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Records archived</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><circle cx="60" cy="40" r="28" fill="#E8F5E9" stroke="#10B981" stroke-width="2"/><path d="M48 40l8 8 16-16" stroke="#10B981" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/></svg></div><span class="illustration-label">Complete</span><span class="step-number-large">06</span></div></div></div>

        </div>
    </div>
</section>

<!-- SECTION 8: DOCUMENTS REQUIRED -->
<section class="content-section" id="documents-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">5% vs 18% GST: Which Rate for Your Delhi Restaurant?</h2>
            <div class="content-text">
                
                <ul><li><strong>5% No ITC</strong> - Standalone restaurants, cloud kitchens, takeaway. Lower headline rate but no credit on inputs. Best for low-margin, high-volume restaurants.</li><li><strong>18% With ITC</strong> - Hotel restaurants (room tariff Rs 7,500+), outdoor catering. Higher rate but ITC on ingredients, equipment, rent, utilities. Best for capital-intensive operations.</li><li><strong>Composition 5% Flat</strong> - Turnover up to Rs 1.5 crore. No ITC, no interstate, no alcohol. Simplest compliance. Best for small dhabas, neighbourhood eateries.</li><li><strong>Key Decision:</strong> If your total input GST exceeds 13% of turnover, 18% with ITC may be more tax-efficient than 5% without ITC. Patron analyses each Delhi restaurant.</li></ul>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 9: CHALLENGES -->
<section class="content-section" id="challenges-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Common Restaurant GST Challenges in Delhi: 5 Issues</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Challenge</th><th>Impact</th><th>How Patron Accounting Solves It</th></tr></thead>
                    <tbody>
                        <tr><td>Claiming ITC at 5% Rate</td><td>Delhi restaurants mistakenly claim ITC on ingredients while at 5% - triggers audit demands requiring reversal with interest</td><td>Patron configures billing software to block ITC claims for 5% restaurants</td></tr><tr><td>Section 9(5) Misreporting</td><td>Zomato/Swiggy orders double-reported (restaurant also pays GST) or not reported at all</td><td>Correct GSTR-3B Table 3.1.1(ii) reporting for every Delhi restaurant</td></tr><tr><td>Alcohol-Food Bifurcation</td><td>Incorrect split between food (GST) and alcohol (excise) leads to over/under payment</td><td>POS system configured for correct bifurcation on every bill</td></tr><tr><td>Composition Scheme Violations</td><td>Interstate services, alcohol, or tax invoices trigger mandatory migration with back-taxes</td><td>Patron monitors compliance and plans transition when approaching limits</td></tr><tr><td>Platform Commission GST</td><td>18% GST on Zomato/Swiggy commission is separate from S.9(5). 5% restaurants cannot claim ITC on it</td><td>Correct treatment of commission GST based on restaurant rate bracket</td></tr>

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
            <h2 class="section-title">Restaurant GST Filing Fees in Delhi</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Fee Component</th><th>Amount</th></tr></thead>
                    <tbody>
                        <tr><td>Standalone Restaurant (5%) Monthly</td><td>From INR 1,999/month</td></tr><tr><td>Hotel Restaurant (18% with ITC) Monthly</td><td>From INR 3,999/month</td></tr><tr><td>Composition (CMP-08 + GSTR-4)</td><td>From INR 1,499/quarter</td></tr><tr><td>Cloud Kitchen GST (Per Brand)</td><td>From INR 2,999/month</td></tr><tr><td>Section 9(5) Platform Reconciliation</td><td>Included</td></tr><tr><td>Alcohol-Food Bifurcation Setup</td><td>From INR 2,999 (one-time)</td></tr><tr><td>Patron Accounting Professional Fees</td><td>Starting from INR 999 (Exl GST and Govt. Charges)</td></tr>

                    </tbody>
                </table>
                </div>
                <p style="margin-top:16px;font-size:13px;color:var(--text-muted);font-style:italic;">All fees and charges listed are indicative only and do not constitute a binding offer. Final amounts may vary depending on the volume of work and the complexity involved.</p>
                <p style="margin-top:16px;">Professional service charges for drafting, filing, and representation are separate from the statutory fees. The exact fee depends on the complexity of the case, disputed amount, and number of hearings required. Contact us for a detailed quote.</p>
                <p style="margin-top:16px;"><strong>Get a free GST Returns for Restaurants in Delhi consultation - <a href="tel:+919459456700">Call +91 945 945 6700</a> or <a href="https://wa.me/919459456700?text=Hello%2C%20I%20just%20visited%20your%20GST%20Returns%20for%20Restaurants%20Food%20Businesses%20in%20Delhi%20page.%20I%20would%20like%20to%20know%20more%20about%20it." target="_blank" rel="noopener">WhatsApp us</a>. No-obligation assessment.</strong></p>
            </div>
        </div>
    </div>
</section>

<!-- SECTION 11: TIMELINE -->
<section class="content-section" id="timeline-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Filing Calendar for Delhi Restaurants</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Stage</th><th>Estimated Timeline</th></tr></thead>
                    <tbody>
                        <tr><td>11th monthly</td><td>GSTR-1 for regular scheme restaurants (monthly filers)</td></tr><tr><td>13th after quarter</td><td>GSTR-1 for QRMP restaurants</td></tr><tr><td>18th after quarter</td><td>CMP-08 for composition scheme restaurants</td></tr><tr><td>20th monthly</td><td>GSTR-3B for regular scheme (monthly filers)</td></tr><tr><td>24th after quarter</td><td>GSTR-3B for QRMP restaurants (Delhi Category 2)</td></tr><tr><td>30th April</td><td>GSTR-4 annual for composition restaurants</td></tr><tr><td>31st December</td><td>GSTR-9 annual (if turnover > Rs 2 crore)</td></tr>

                    </tbody>
                </table>
                </div>
                <div class="highlight-box" style="margin-top:16px;">
                    
                    <p><strong>Important:</strong> Delhi restaurants missing CMP-08 for 2+ consecutive quarters risk composition scheme cancellation. Patron files all returns on time. Section 9(5) reconciliation is critical given Delhi's highest Zomato/Swiggy volume in India.</p>

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
            <h2 class="section-title">Why Choose Patron for Restaurant GST in Delhi</h2>
        </div>
        <div class="features-grid"><article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><h3>300+ Restaurant Clients</h3><p>Standalone eateries to QSR chains, cloud kitchens to 5-star hotel restaurants. Every category of Delhi restaurant GST handled.</p></article><article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2"><path d="M14 2H6a2 2 0 00-2 2v16a2 2 0 002 2h12a2 2 0 002-2V8z"/><path d="M14 2v6h6"/></svg></div><h3>Section 9(5) Accuracy</h3><p>100% accuracy in Zomato/Swiggy platform reporting across all managed Delhi restaurant GSTINs. Zero misreporting.</p></article><article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2"><circle cx="12" cy="12" r="10"/><path d="M12 6v6l4 2"/></svg></div><h3>POS Integration</h3><p>POS systems configured for correct GST: 5%/18% rate, alcohol-food split, HSN codes, tax invoice format, S.9(5) tracking.</p></article><article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg></div><h3>Composition Transition</h3><p>Turnover approaching Rs 1.5 crore? Patron plans composition-to-regular switch 2 months in advance. No compliance gaps.</p></article></div>
    </div>
</section>

<!-- SECTION 12A: SOCIAL PROOF -->
<section class="content-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Trusted by 300+ Restaurant Clients</h2>
            <div class="content-text">
                
                <p><strong>300+ Restaurant Clients | 99%+ On-Time | Zero S.9(5) Misreporting | 4.9 Google Rating</strong></p><p>"We were mistakenly claiming ITC at 5% rate. Patron caught this, corrected GSTR-3B, and reconfigured our billing. Saved us from a demand notice." - Restaurant Owner, Delhi</p><p><strong>4-Office Signal:</strong> Pune, Mumbai, Delhi, and Gurugram.</p>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 13: SELF-FILING vs PROFESSIONAL COMPARISON -->
<section class="content-section" id="comparison-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Composition vs Regular Scheme for Delhi Restaurants</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Parameter</th><th>Composition (5% flat)</th><th>Regular (5%)</th><th>Regular (18%)</th></tr></thead>
                    <tbody>
                        <tr><td>Turnover Limit</td><td>Up to Rs 1.5 crore</td><td>No limit</td><td>Hotels Rs 7,500+ tariff</td></tr><tr><td>ITC</td><td>Not available</td><td>Not available</td><td>Available</td></tr><tr><td>Returns</td><td>CMP-08 quarterly + GSTR-4</td><td>GSTR-1 + GSTR-3B</td><td>GSTR-1 + GSTR-3B</td></tr><tr><td>Interstate</td><td>Not allowed</td><td>Allowed</td><td>Allowed</td></tr><tr><td>Alcohol</td><td>Not allowed</td><td>Allowed (bifurcated)</td><td>Allowed (bifurcated)</td></tr><tr><td>Best For</td><td>Small dhaba, neighbourhood eatery</td><td>Standalone restaurant</td><td>Hotel restaurant, caterer</td></tr>

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
            <h2 class="section-title">Related Restaurant and Compliance Services</h2>
            <div class="content-text">
                
                <ul><li><a href="/gst-returns-for-restaurants-food-businesses">GST Returns for Restaurants (India)</a> - National-level restaurant GST.</li><li><a href="/gst-returns">GST Returns</a> - Regular monthly GST filing.</li><li><a href="/gst-registration">GST Registration</a> - New restaurant GST registration.</li><li><a href="/fssai-returns">FSSAI Returns</a> - Annual FSSAI return filing for food businesses.</li><li><a href="/fssai-registration">FSSAI Registration</a> - Food license registration.</li><li><a href="/shop-act-registration">Shop Act Registration</a> - Establishment registration.</li></ul>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 15A: LEGAL FRAMEWORK -->
<section class="content-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Legal Framework: Restaurant GST Under CGST Act 2017</h2>
            <div class="content-text">
                
                <p><strong>Restaurant Services:</strong> SAC 9963. Notification 46/2017 - 5% without ITC for standalone.</p><p><strong>Specified Premises:</strong> Hotels with room tariff Rs 7,500+ - 18% with ITC.</p><p><strong>Section 9(5):</strong> Platform deemed supplier for restaurant services. Pays GST.</p><p><strong>Cloud Kitchen:</strong> Restaurant service. 5% no ITC. S.9(5) for platform orders.</p><p><strong>Composition:</strong> Section 10. Up to Rs 1.5 crore. 5% flat. CMP-08 by 18th. GSTR-4 by 30 April.</p><p><strong>Alcohol:</strong> NOT under GST. State excise. Must bifurcate on bills.</p><p><strong>Late Fee:</strong> Rs 50/day per return. CMP-08 missed 2+ quarters risks cancellation.</p><p><strong>Source:</strong> <a href="https://gst.gov.in" target="_blank" rel="noopener">gst.gov.in</a>, <a href="https://cbic.gov.in" target="_blank" rel="noopener">cbic.gov.in</a></p>

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
                    <h2 class="faq-expanded__title">FAQs: GST Returns for Restaurants in Delhi</h2>
                    <p class="faq-expanded__lead">Common questions about restaurant GST rates, ITC, Section 9(5), and filing in Delhi.</p>
                    @include('partials.bigin-form', [
                        'variant'  => 'compact',
                        'service'  => 'GST Returns for Restaurants in Delhi',
                        'city'     => 'Delhi',
                    ])
                </aside>
                <div class="faq-expanded__list">
                    <div class="faq-expanded__item" id="faq-1">
                        <h3 class="faq-expanded__q">What GST rate applies to my Delhi restaurant?</h3>
                        <div class="faq-expanded__a"><p>Most standalone restaurants 5% without ITC (Notification 46/2017). Hotels with room tariff Rs 7,500+ pay 18% with ITC. Cloud kitchens 5% no ITC. Outdoor catering 18% with ITC. Composition 5% flat up to Rs 1.5 crore.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-2">
                        <h3 class="faq-expanded__q">Can my Delhi restaurant claim ITC on ingredient purchases?</h3>
                        <div class="faq-expanded__a"><p>Only at 18% rate (hotel restaurants Rs 7,500+ or outdoor caterers). 5% restaurants cannot claim any ITC. Claiming ITC at 5% triggers audit demands requiring reversal with interest.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-3">
                        <h3 class="faq-expanded__q">How does Section 9(5) work for Zomato/Swiggy orders?</h3>
                        <div class="faq-expanded__a"><p>Platform is deemed supplier pays 5% GST. Restaurant reports in GSTR-3B Table 3.1.1(ii) but does not pay GST on platform orders. Only pays GST on direct sales (dine-in, takeaway). Patron reconciles platform settlements.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-4">
                        <h3 class="faq-expanded__q">Can I use composition scheme for my restaurant?</h3>
                        <div class="faq-expanded__a"><p>Yes, if turnover up to Rs 1.5 crore, no alcohol service, no interstate, willing to forego ITC. 5% flat, CMP-08 quarterly, GSTR-4 annually, Bill of Supply. B2B clients cannot claim ITC on your supplies.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-5">
                        <h3 class="faq-expanded__q">Is alcohol included in restaurant GST?</h3>
                        <div class="faq-expanded__a"><p>No. Alcohol is NOT under GST. State excise applies. Food and alcohol must be bifurcated on bills. Only food portion attracts GST.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-6">
                        <h3 class="faq-expanded__q">What returns do Delhi restaurants file?</h3>
                        <div class="faq-expanded__a"><p>Regular: GSTR-1 by 11th/13th + GSTR-3B by 20th/24th. Composition: CMP-08 by 18th + GSTR-4 by 30 April. Annual GSTR-9 if turnover > Rs 2 crore.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-7">
                        <h3 class="faq-expanded__q">How are cloud kitchens taxed in Delhi?</h3>
                        <div class="faq-expanded__a"><p>5% no ITC (treated as restaurant). Section 9(5) applies for Zomato/Swiggy orders - platform pays GST. Cloud kitchen reports in GSTR-3B 3.1.1(ii). For own-app sales, pays 5% directly.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-8">
                        <h3 class="faq-expanded__q">How much does restaurant GST filing cost?</h3>
                        <div class="faq-expanded__a"><p>Patron: standalone (5%) from Rs 1,999/month, hotel (18%) from Rs 3,999/month, composition from Rs 1,499/quarter, cloud kitchen from Rs 2,999/month. S.9(5) reconciliation included. Call +91 945 945 6700.</p></div>
                    </div>
                </div>
            </div>


            <!-- Quick Answers -->
            <div class="highlight-box" style="margin-top:32px;">
                <p><strong>Quick Answers</strong></p>
                <p><strong>Restaurant pe GST kitna lagta hai?</strong> Standalone restaurants pe 5% (ITC nahi). Hotel restaurants (Rs 7,500+ room tariff) pe 18% (ITC milta hai). Cloud kitchen = 5%. Catering = 18%.</p><p><strong>Zomato/Swiggy orders pe GST kaun pay karta hai?</strong> Platform pay karta hai S.9(5) ke under. Restaurant GSTR-3B mein report karta hai but tax nahi deta. Sirf direct sales pe tax.</p><p><strong>Alcohol pe GST lagta hai?</strong> Nahi. Alcohol state excise mein. Bill mein food aur alcohol alag dikhana zaroori.</p>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 18: URGENCY CTA -->
<section class="content-section" style="background: var(--orange-lighter) !important; border-left: 4px solid var(--orange);">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Restaurant GST: Get It Right From Day One</h2>
            <div class="content-text">
                
                <p>Delhi's restaurant industry faces GST at multiple levels: rate determination, ITC eligibility, Section 9(5) reporting for India's highest delivery market, alcohol bifurcation, and composition limits. Incorrect rate, ITC claims at 5%, S.9(5) misreporting, and missed filings trigger demand notices, interest, and penalties.</p><p><strong>Contact Patron's Delhi office - <a href="tel:+919459456700">Call +91 945 945 6700</a> or <a href="https://wa.me/919459456700?text=Hello%2C%20I%20just%20visited%20your%20GST%20Returns%20for%20Restaurants%20Food%20Businesses%20in%20Delhi%20page.%20I%20would%20like%20to%20know%20more%20about%20it." target="_blank" rel="noopener">WhatsApp us</a>.</strong></p>

            </div>
        </div>
    </div>
</section>

<!-- CONCLUSION + CTA BLOCK (Dark) -->
<section class="content-section" style="background: var(--blue) !important;">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title" style="color:#FFFFFF !important;">Start Restaurant GST Compliance in Delhi Today</h2>
            <div class="content-text" style="text-align:left;">
                
                <p style="color:rgba(255,255,255,0.9);">GST returns for Delhi restaurants require precise rate application (5% vs 18%), correct scheme selection, Section 9(5) Zomato/Swiggy reporting, alcohol bifurcation, and timely filing. Delhi's position as India's restaurant capital means every category of GST treatment is represented.</p><p style="color:rgba(255,255,255,0.9);">Patron Accounting provides end-to-end restaurant GST from our Rohini office - rate determination, POS configuration, GSTR-1/3B, S.9(5) reconciliation, CMP-08, ITC management, alcohol bifurcation, and cloud kitchen compliance. 300+ clients, 99%+ on-time, zero S.9(5) misreporting.</p><p style="color:rgba(255,255,255,0.7);font-size:13px;">Reviewed by CA & CS Team - Patron Accounting LLP</p>

            </div>
            <div style="display:flex;gap:14px;flex-wrap:wrap;margin-top:24px;">
                <a href="tel:+919459456700" style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:var(--orange);color:#fff;border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#128222; Call +91 945 945 6700</a>
                <a href="https://wa.me/919459456700?text=Hello%2C%20I%20just%20visited%20your%20GST%20Returns%20for%20Restaurants%20Food%20Businesses%20in%20Delhi%20page.%20I%20would%20like%20to%20know%20more%20about%20it." target="_blank" style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:#25D366;color:#fff;border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;" rel="noopener">&#128172; WhatsApp Us</a>
                <a href="mailto:sales@patronaccounting.com?subject=Restaurant%20GST%20Enquiry%20-%20Delhi&body=Hello%2C%20I%20just%20visited%20your%20GST%20Returns%20for%20Restaurants%20Food%20Businesses%20in%20Delhi%20page.%20I%20would%20like%20to%20know%20more%20about%20it.%0A%0AThank%20you." style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:transparent;color:#fff;border:2px solid rgba(255,255,255,0.3);border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#9993;&#65039; Email Us</a>
            </div>
            <p style="color:rgba(255,255,255,0.7);font-size:13px;margin-top:16px;">Book a Free Consultation - No Obligation.</p>
        </div>
    </div>
</section>

<!-- GSTAT STATE BENCH CITY PAGES (32 Pages) -->
<section class="content-section" style="padding:48px 32px;background:var(--gray-50);">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title" style="text-align:center;margin-bottom:12px;">Restaurant GST Services: Available Across 4 Major Cities</h2>
            <p style="text-align:center;color:var(--text-muted);font-size:15px;margin-bottom:40px;">Professional restaurant GST compliance in Pune, Mumbai, Delhi, and Gurugram.</p>
    
            <div class="pa-city-block" style="margin-bottom:40px;"><div class="pa-city-grid"><a href="/gst-returns-for-restaurants-food-businesses/pune" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Pune</div><div class="pa-card-sub">Maharashtra</div></div></a><a href="/gst-returns-for-restaurants-food-businesses/mumbai" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Mumbai</div><div class="pa-card-sub">Maharashtra</div></div></a><div class="pa-city-card" style="opacity:0.6; pointer-events:none; border:2px solid var(--orange); position:relative;"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Delhi</div><div class="pa-card-sub">Delhi NCR</div></div><span style="position:absolute; top:6px; right:8px; font-size:10px; color:var(--orange); font-weight:700; text-transform:uppercase; letter-spacing:0.5px;">You're here</span></div><a href="/gst-returns-for-restaurants-food-businesses/gurugram" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Gurugram</div><div class="pa-card-sub">Haryana</div></div></a></div></div><div class="pa-city-block"><div class="pa-block-title">Related Services in Delhi</div><div class="pa-block-sub">Complete restaurant compliance support</div><div class="pa-cross-grid"><a href="/gst-registration/delhi" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">GST Registration</div><div class="pa-card-sub">Delhi</div></div></a><a href="/gst-returns/delhi" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">GST Returns</div><div class="pa-card-sub">Delhi</div></div></a><a href="/income-tax-return/delhi" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Income Tax Return Filing</div><div class="pa-card-sub">Delhi</div></div></a><a href="/private-limited-company-registration/delhi" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Private Limited Company Registration</div><div class="pa-card-sub">Delhi</div></div></a><a href="/trademark-registration/delhi" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Trademark Registration</div><div class="pa-card-sub">Delhi</div></div></a><a href="/startup-registration/delhi" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Startup Registration</div><div class="pa-card-sub">Delhi</div></div></a></div></div>
        </div>
    </div>
</section>

<!-- CONTENT FRESHNESS FOOTER -->
<section class="content-section" style="padding:32px;">
    <div class="content-container">
        <div class="text-content" style="font-size:13px;color:var(--text-muted);">
            <p><strong>Content Created:</strong> 06 April 2026 &nbsp;|&nbsp; <strong>Last Updated:</strong> <span id="lastUpdatedFooter">06 April 2026</span> &nbsp;|&nbsp; <strong>Next Review:</strong> 06 October 2026 &nbsp;|&nbsp; <strong>Reviewed By:</strong> CA &amp; CS Team, Patron Accounting LLP</p>
            <p>This page is reviewed every 6 months to ensure restaurant GST rates, ITC rules, Section 9(5) treatment, composition limits, and CBIC notifications are current. Verified against gst.gov.in.</p>
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

<!-- External JS Dependencies (loaded by master layout in production) -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
@endsection
