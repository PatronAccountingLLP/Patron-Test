
@extends('layouts.service-app')

<!-- External Dependencies (loaded by master layout in production) -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Barlow:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,400&family=DM+Sans:opsz,wght@9..40,400;9..40,500;9..40,600;9..40,700&display=swap" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

@section('meta')
    <title>ITR Filing for Influencers - Income Sources, TDS & ITR-3</title>
    <meta name="description" content="File ITR for social media influencers in India. Brand deals, freebies under Section 194R, YouTube AdSense, profession code 16021. From Rs. 1,499.">
    <link rel="canonical" href="/itr-for-influencers">
    <meta name="robots" content="index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1">
    <meta property="og:title" content="ITR Filing for Influencers - Income Sources, TDS & ITR-3">
    <meta property="og:description" content="File ITR for social media influencers in India. Brand deals, freebies under Section 194R, YouTube AdSense, profession code 16021. From Rs. 1,499.">
    <meta property="og:url" content="/itr-for-influencers">
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="Patron Accounting">
    <meta property="og:image" content="https://www.patronaccounting.com/images/og-default-square.png">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="1200">
    <meta property="og:image:type" content="image/png">
    <meta property="og:image:secure_url" content="https://www.patronaccounting.com/images/og-default-square.png">
    <meta property="og:image:alt" content="Patron Accounting - partner you can rely on">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="ITR Filing for Influencers - Income Sources, TDS & ITR-3">
    <meta name="twitter:description" content="File ITR for social media influencers in India. Brand deals, freebies under Section 194R, YouTube AdSense, profession code 16021. From Rs. 1,499.">
    <meta name="twitter:image" content="https://www.patronaccounting.com/images/og-default-square.png">
@endsection

@section('schema')
    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@graph": [
        {
          "@type": "Service",
          "name": "ITR for Influencers: CA Filing",
          "description": "File ITR for social media influencers in India. Brand deals, freebies under Section 194R, YouTube AdSense, profession code 16021. From Rs. 1,499.",
          "url": "https://www.patronaccounting.com/itr-for-influencers",
          "serviceType": "ITR for Influencers: CA Filing",
          "areaServed": {
            "@type": "Country",
            "name": "India"
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
            "url": "https://www.patronaccounting.com/itr-for-influencers",
            "priceSpecification": {
              "@type": "PriceSpecification",
              "minPrice": "1499",
              "maxPrice": "30000",
              "priceCurrency": "INR"
            }
          }
        },
        {
          "@type": "BreadcrumbList",
          "itemListElement": [
            { "@type": "ListItem", "position": 1, "name": "Home", "item": "https://www.patronaccounting.com/" },
            { "@type": "ListItem", "position": 2, "name": "Income Tax Return Filing", "item": "https://www.patronaccounting.com/income-tax-return" },
            { "@type": "ListItem", "position": 3, "name": "ITR for Influencers", "item": "https://www.patronaccounting.com/itr-for-influencers" }
          ]
        },
        {
          "@type": "FAQPage",
          "mainEntity": [
            {
              "@type": "Question",
              "name": "Which ITR form should a social media influencer use?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "ITR-3 if maintaining books under regular scheme, or ITR-4 for Section 44AD presumptive. Profession code 16021 must be selected from AY 2025-26. ITR-1 and ITR-2 cannot be used. Important: Section 44ADA (50% presumptive for specified professions) does NOT apply to influencers as social media is not listed in Rule 6F. Only Section 44AD (8%/6%) is available."
              }
            },
            {
              "@type": "Question",
              "name": "Do influencers pay tax on free products and gifts from brands?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "Yes. Under Section 28(iv), FMV of any benefit received in business is taxable PGBP income. Brands deduct 10% TDS under Section 194R if aggregate freebies exceed Rs 20,000/year. The FMV must be declared in ITR and TDS claimed as credit. Exception: products returned to brand after promotion are not taxable."
              }
            },
            {
              "@type": "Question",
              "name": "What is profession code 16021 and is it mandatory?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "Profession code 16021 is the Income Tax Department's dedicated code for Social Media Influencer from AY 2025-26 in ITR-3. It must be selected under Nature of Business or Profession. Currently removed from ITR-4. Tax experts recommend filing ITR-3 with code 16021 until CBDT clarifies ITR-4 eligibility."
              }
            },
            {
              "@type": "Question",
              "name": "Do influencers need to register for GST?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "GST registration is mandatory when annual turnover exceeds Rs 20 lakh (Rs 10 lakh in special category states). Domestic brand deals attract 18% GST. YouTube AdSense paid by Google Asia Pacific qualifies as export of services - zero-rated. LUT must be filed each year before first foreign receipt. Input Tax Credit on equipment claimable."
              }
            },
            {
              "@type": "Question",
              "name": "Can influencers deduct equipment and creation expenses?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "Yes. Under Section 37(1), all expenses wholly for business are deductible: cameras, microphones, lighting, editing software (Adobe, Final Cut Pro), internet, travel for shoots, studio rental, and proportionate home office. Depreciation on hardware under Section 32. Only available in ITR-3 - not under ITR-4 presumptive."
              }
            },
            {
              "@type": "Question",
              "name": "How is YouTube AdSense income taxed for Indian influencers?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "AdSense is PGBP income taxed at slab rates. Payments from Google Asia Pacific (Singapore) qualify as export of services under GST (zero-rated, LUT required). If Google withheld U.S. tax, claim relief under India-U.S. DTAA by filing Form 67 before or with ITR. Report all foreign receipts in Schedule FSI. Quick Answers Which ITR form? ITR-3 with profession code 16021. ITR-4 only under Section 44AD. 44ADA does NOT apply. Tax on freebies? Yes. FMV taxable under Section 28(iv). Brand deducts 10% TDS under 194R if > Rs 20,000/year. GST mandatory? Above Rs 20 lakh turnover. 18% domestic. YouTube AdSense = zero-rated export (LUT required). Due date? 31 Jul 2026 (non-audit). 31 Oct 2026 (audit)."
              }
            }
          ]
        }
      ]
    }
    </script>
@endsection

@section('content')

<div class="breadcrumb-wrap" style="max-width:1200px;margin:0 auto;padding:6px 20px 0;">
@include('partials.breadcrumbs', ['items' => [
    ['name' => 'Home', 'url' => '/'],
    ['name' => 'Income Tax Return Filing', 'url' => '/income-tax-return'],
    ['name' => 'ITR for Influencers', 'url' => '/itr-for-influencers'],
]])
</div>

@include('partials.page-css', ['file' => 'css/site.css'])
<style>
/* Amount column  -  right-align only on tables with .table-amount class */
        .table-amount td:last-child { color: var(--text-secondary); font-size: 14px; font-weight: 500; }
/* ============================================
           EXPERT ATTRIBUTION BOX (E-E-A-T)  -  Plan 3.1
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
           TOC NAVIGATION  -  Plan 2.2
           ============================================ */
        .toc-section {
            background: var(--gray-50); border-bottom: 1px solid var(--gray-200);
            padding: 20px 0; position: sticky; top: 100px; z-index: 50;
        }
/* Process Evidence Screenshot  -  Plan 3.2 */
        .process-screenshot-details { margin-top: 14px; }
</style>
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
                        ITR for Influencers - Expert CA Filing for Instagram, YouTube and Brand Deal Income India
                    </h1>

                    <div class="expert-attribution-box">
                        <span class="eab-check"><svg width="16" height="16" viewBox="0 0 24 24" fill="currentColor"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg></span>
                        <span class="eab-title">Reviewed by CA and CS Team, Patron Accounting LLP</span>
                        <span class="eab-meta">
                            <span>ICAI & ICSI Registered</span><span class="eab-sep">|</span>
                            <span>15+ Years Experience</span><span class="eab-sep">|</span>
                            <span>Last Updated: <span id="lastUpdated">20 April 2026</span></span>
                        </span>
                        <a href="/authorhub/ca-sundram-gupta" class="eab-link">Verify Credentials &rarr;</a>
                    </div>

                    <div class="mb-4">
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Profession Code:</span> Code 16021 (Social Media Influencer) mandatory from AY 2025-26 in ITR-3. Wrong code or form results in defective return notice.</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Freebie TDS:</span> Section 194R: 10% TDS on freebies, gifted phones, trips, barter products when aggregate exceeds Rs 20,000/year. Taxable as business income.</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Brand Deal TDS:</span> Section 194J: 10% TDS on brand deal payments above Rs 30,000. Claimable as credit against slab-rate income tax in ITR.</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Starting Fee:</span> From Rs 1,499 for influencer ITR. 5,000+ clients annually. YouTube AdSense DTAA, GST LUT, and advance tax planning included.</p>
                        </div>
                    </div>

                    <p class="mb-4 fw-bold" style="color: var(--blue); font-size: 15px;">5,000+ clients annually including YouTubers, Instagram creators, and brand ambassadors with 4.9/5 Google rating from 1,200+ reviews</p>

                    <div class="hero-cta">
                        <a href="tel:+919459456700" class="btn-video text-decoration-none">
                            <span class="play-circle"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="width:14px;height:14px;color:#fff"><path d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/></svg></span>
                            Call +91 945 945 6700
                        </a>
                        <a href="mailto:sales@patronaccounting.com?subject=Influencer%20ITR%20Help&body=Hello%2C%20I%20just%20visited%20your%20ITR%20for%20Influencers%20page.%20I%20would%20like%20to%20know%20more%20about%20it.%0A%0AThank%20you." class="btn-sample text-decoration-none">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="width:18px;height:18px;"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,12 2,6"/></svg>
                            Email Us
                        </a>
                        <a href="https://wa.me/919459456700?text=Hello%2C%20I%20just%20visited%20your%20ITR%20for%20Influencers%20page.%20I%20would%20like%20to%20know%20more%20about%20it." target="_blank" class="btn-sample text-decoration-none" rel="noopener">
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
                                            'service'  => 'ITR for Influencers',
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
    'ctaText'    => 'Expert influencer ITR - profession code 16021, Section 194R freebie audit, brand deal TDS, YouTube AdSense DTAA, and GST LUT filing.',
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
            <a class="toc-btn" href="#overview-section">Overview</a><a class="toc-btn" href="#what-section">How Taxed</a><a class="toc-btn" href="#who-section">Who Must File</a><a class="toc-btn" href="#services-section">Our Services</a><a class="toc-btn" href="#procedure-section">9-Step Process</a><a class="toc-btn" href="#documents-section">Documents</a><a class="toc-btn" href="#challenges-section">Challenges</a><a class="toc-btn" href="#fees-section">Fees</a><a class="toc-btn" href="#timeline-section">Deadlines</a><a class="toc-btn" href="#benefits-section">Why CA Filing</a><a class="toc-btn" href="#comparison-section">DIY vs Patron</a><a class="toc-btn" href="#faq-section">FAQs</a>
        </div>
        <button class="toc-arrow right" id="tocRight">&#10095;</button>
    </div>
</div>

<!-- SECTION 2: OVERVIEW / INTRO + TL;DR -->
<section class="content-section" id="overview-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">ITR for Influencers - Overview</h2>
            <div class="content-text">
                <div class="highlight-box" style="margin-bottom:20px;">
                    <p><strong>&#128204; TL;DR - ITR for Influencers Services at a Glance</strong></p>
                    <p>Influencer income is classified as PGBP and taxed at slab rates. Profession code 16021 is mandatory from AY 2025-26 in ITR-3. Freebies above Rs 20,000 are taxable under Section 194R (10% TDS by brand). Section 44ADA does NOT apply - only Section 44AD (8%/6%) for presumptive. GST mandatory above Rs 20 lakh. YouTube AdSense is export of services. CA-assisted from Rs 1,499.</p><div class="table-responsive-wrapper" style="margin-top:16px;"><table><thead><tr><th>Parameter</th><th>Details</th></tr></thead><tbody><tr><td>Income Classification</td><td>PGBP - taxed at individual slab rates (old or new regime)</td></tr><tr><td>Profession Code</td><td>16021 (Social Media Influencer) - mandatory from AY 2025-26 in ITR-3</td></tr><tr><td>ITR Form</td><td>ITR-3 (regular with books) or ITR-4 (Sec 44AD presumptive only - 44ADA NOT applicable)</td></tr><tr><td>TDS on Brand Deals</td><td>Sec 194J: 10% above Rs 30,000 | Sec 194C: 2% contractual</td></tr><tr><td>TDS on Freebies (Sec 194R)</td><td>10% on FMV of gifts, gadgets, travel when aggregate > Rs 20,000/year</td></tr><tr><td>GST Obligation</td><td>Mandatory above Rs 20 lakh turnover. 18% domestic. YouTube AdSense = zero-rated export.</td></tr><tr><td>Due Date AY 2026-27</td><td>31 Jul 2026 (non-audit) | 31 Oct 2026 (audit) | From Rs 1,499</td></tr></tbody></table></div><p style="margin-top:0;</p>
                </div>
                <p>India's influencer market is expected to cross Rs 3,000 crore by 2026. From AY 2025-26, all influencers must use profession code 16021 in ITR-3. Income from brand deals, sponsored posts, YouTube AdSense, affiliate marketing, and merchandise is classified as PGBP. Free products and sponsored travel above Rs 20,000/year are taxable under Section 194R - introduced specifically to close the freebie reporting gap in the creator economy.</p>
                <p>Filing the wrong ITR form (ITR-1 or ITR-2 instead of ITR-3) results in a defective return notice. Section 44ADA does NOT apply to influencers as social media is not a 'specified profession' under Rule 6F. Patron Accounting handles multi-stream income, Section 194R freebie auditing, YouTube AdSense DTAA, and GST LUT from offices in Pune, Mumbai, Delhi, and Hyderabad.</p>
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
                <h2 class="section-title">What Is ITR for Influencers?</h2>
                <div class="content-text what-is-definition">
                    
                    <p>ITR for influencers is the process of reporting all income from social media activity - brand deals, AdSense, freebies, affiliate commissions, and digital products - under PGBP in ITR-3 or ITR-4 using profession code 16021.</p><p>Income is classified as business/professional income under Section 28 read with Section 37(1) of the <a href="https://www.incometax.gov.in" target="_blank" rel="noopener">Income Tax Act, 1961</a>. Free products and barter arrangements are taxable at fair market value under Section 28(iv). Brands deduct 10% TDS under Section 194R on freebies exceeding Rs 20,000/year.</p><p>The Income Tax Department accesses detailed transaction data through AIS and Form 26AS - every brand payment and Section 194R freebie TDS entry is visible, making non-reporting a high-risk strategy.</p>

                </div>
                <div class="highlight-box" style="margin-top:20px;">
                    <p><strong>Key Terms for ITR for Influencers:</strong></p>
                    <p><strong>Profession Code 16021</strong> - Dedicated code for Social Media Influencer from AY 2025-26 in ITR-3. Currently removed from ITR-4. Using generic codes when 16021 is available can be flagged.</p><p><strong>Section 194R</strong> - 10% TDS by brands on FMV of freebies, gifted products, travel, and barter perquisites when aggregate exceeds Rs 20,000/year. Finance Act 2022, effective 1 July 2022.</p><p><strong>Section 44AD</strong> - Presumptive taxation: 8% cash / 6% digital of gross receipts as income. Available for influencers with turnover under Rs 3 crore. Section 44ADA (50% for professionals) does NOT apply.</p><p><strong>Form 67</strong> - Required to claim foreign tax credit for YouTube AdSense U.S. withholding under India-U.S. DTAA. File before or with ITR.</p>

                </div>
            </div>
            <div class="column-image">
                <div class="illustration-placeholder">
                    <div class="illustration-icon" style="max-width:240px;">
                        <svg viewBox="0 0 200 180" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="30" y="20" width="140" height="90" rx="8" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><rect x="30" y="20" width="140" height="22" rx="8" fill="#14365F"/><text x="100" y="35" font-size="9" fill="#fff" font-weight="700" text-anchor="middle" font-family="Arial, sans-serif">INFLUENCER ITR</text><rect x="42" y="52" width="50" height="16" rx="3" fill="#FFF3E0" stroke="#F5A623" stroke-width="1"/><text x="67" y="63" font-size="5" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">CODE 16021</text><rect x="100" y="52" width="50" height="16" rx="3" fill="#E8F5E9" stroke="#25D366" stroke-width="1"/><text x="125" y="63" font-size="5" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">Sec 194R</text><rect x="55" y="78" width="90" height="16" rx="3" fill="#F0F4F8" stroke="#14365F" stroke-width="1"/><text x="100" y="89" font-size="5" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">BRAND + ADSENSE + BARTER</text><rect x="25" y="130" width="55" height="18" rx="4" fill="#FFF3E0" stroke="#F5A623" stroke-width="1"/><text x="52" y="142.5" font-size="6" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial, sans-serif">PGBP</text><circle cx="165" cy="30" r="16" fill="#E8F5E9" stroke="#25D366" stroke-width="1.5"/><text x="165" y="34" font-size="6" fill="#25D366" font-weight="700" text-anchor="middle" font-family="Arial, sans-serif">5K+</text><text x="100" y="168" font-size="9" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial, sans-serif">Influencer ITR Filing</text></svg>
                    </div>
                    <div class="illustration-badge">
                        <span>Code 16021</span>
                        <strong>Influencer ITR</strong>
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
            <h2 class="section-title">Who Must File ITR as an Influencer?</h2>
            <div class="content-text">
                
                <ul><li><strong>Brand Sponsorships:</strong> Paid promotions and endorsements on Instagram, YouTube, Facebook, X, LinkedIn, Snapchat</li><li><strong>YouTube AdSense:</strong> Revenue from YouTube Partner Program - export of services under GST if paid in foreign currency</li><li><strong>Affiliate Commissions:</strong> Amazon Associates, Flipkart, Meesho, and international programs</li><li><strong>Freebies and Barter:</strong> Gifted gadgets, clothing, cosmetics, travel - taxable at FMV under Section 28(iv) / 194R</li><li><strong>Online Coaching:</strong> Paid webinars, digital courses on Teachable, Thinkific</li><li><strong>Merchandise Sales:</strong> Print-on-demand, physical products leveraging influencer brand</li><li><strong>Fan Platform Income:</strong> Patreon, Buy Me a Coffee, YouTube Super Chats</li></ul><p><strong>Key:</strong> Even one brand deal or sponsored post in FY 2025-26 requires ITR-3 with profession code 16021. ITR-1 and ITR-2 are NOT permitted for any business/professional income.</p>

            </div>
            </div>
        </div>
    </div>
</section>

<!-- SECTION 5: OUR SERVICES -->
<section class="content-section" id="services-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Influencer ITR Filing Services</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Service</th><th>What We Do</th></tr></thead>
                    <tbody>
                        <tr><td>Multi-Stream Income Consolidation</td><td>Brand deals, AdSense, affiliate income, freebies, coaching, and merchandise from all platforms reconciled into single auditable PGBP income statement</td></tr><tr><td>Profession Code 16021 Filing</td><td>ITR-3 with correct Social Media Influencer code, or ITR-4 under Section 44AD where eligible. Avoids defective return notices.</td></tr><tr><td>Section 194R Freebie Reconciliation</td><td>FMV of all gifted products and barter perquisites identified, declared as PGBP income, and Form 26AS TDS credits matched</td></tr><tr><td>Business Expense Deductions</td><td>Cameras, laptops, microphones, editing software, internet, travel, studio, home office claimed under Section 37(1)</td></tr><tr><td>YouTube AdSense DTAA</td><td>Form 67 filing for India-U.S. DTAA credit. GST LUT for zero-rated export of services. Schedule FSI for foreign receipts.</td></tr><tr><td>GST and Advance Tax</td><td>GST registration, GSTR-1/3B filing, LUT for exports. Quarterly advance tax computation to prevent Section 234B/234C interest.</td></tr>

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
            <h2 class="section-title">How to File ITR for Influencers - 9-Step Process</h2>
            <p class="section-subtitle" style="text-align:left;max-width:100%;">Structured process covering income collection, freebie audit, AIS reconciliation, expense deduction, profession code selection, and e-filing.</p>
        </header>
        <div class="steps-container">
            <div class="step-card"><div class="step-content"><span class="step-badge">Step 1</span><h3 class="step-title">Collect All Income Records</h3><p class="step-description">Download payout reports from YouTube Studio (AdSense), brand deal invoices, affiliate program statements (Amazon, Flipkart), coaching platform payouts, and ambassador contracts for FY 2025-26.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> All platforms covered</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> FY 2025-26 complete</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="10" y="10" width="40" height="55" rx="4" fill="#F0F4F8" stroke="#14365F" stroke-width="1.2"/><rect x="40" y="15" width="40" height="55" rx="4" fill="#F0F4F8" stroke="#14365F" stroke-width="1.2"/><rect x="70" y="10" width="40" height="55" rx="4" fill="#F0F4F8" stroke="#14365F" stroke-width="1.2"/></svg></div><span class="illustration-label">Income Collected</span><span class="step-number-large">01</span></div></div></div>
<div class="step-card"><div class="step-content"><span class="step-badge">Step 2</span><h3 class="step-title">Compile Freebie and Barter Inventory</h3><p class="step-description">List every gifted product, sponsored trip, and barter arrangement. Determine FMV on receipt date. Verify whether brand deducted 10% TDS under Section 194R and check Form 26AS for credits.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> FMV valued</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> 194R TDS checked</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="20" y="10" width="80" height="65" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><text x="60" y="32" font-size="6" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">FREEBIE</text><text x="60" y="48" font-size="5" fill="#F5A623" font-weight="700" text-anchor="middle" font-family="Arial">FMV + 194R</text></svg></div><span class="illustration-label">Freebies Audited</span><span class="step-number-large">02</span></div></div></div>
<div class="step-card"><div class="step-content"><span class="step-badge">Step 3</span><h3 class="step-title">Download AIS and Reconcile TDS</h3><p class="step-description">Cross-check all TDS entries under Sections 194J, 194C, and 194R in AIS against your income records. Any discrepancy must be resolved before filing to avoid automatic mismatch notices.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> AIS matched</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Discrepancies resolved</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="15" y="5" width="90" height="75" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><rect x="15" y="5" width="90" height="16" rx="6" fill="#14365F"/><text x="60" y="17" font-size="7" fill="#fff" font-weight="700" text-anchor="middle" font-family="Arial">AIS</text><text x="60" y="42" font-size="5" fill="#14365F" font-weight="600" text-anchor="middle" font-family="Arial">194J + 194R</text></svg></div><span class="illustration-label">TDS Reconciled</span><span class="step-number-large">03</span></div></div></div>
<div class="step-card"><div class="step-content"><span class="step-badge">Step 4</span><h3 class="step-title">Compile Business Expenses</h3><p class="step-description">Maintain bills for cameras, laptops, microphones, lighting, editing software, internet, travel for shoots, studio rental, and home office. Deductible under Section 37(1) of the IT Act.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> All receipts gathered</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Sec 37(1) applied</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="20" y="10" width="80" height="65" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><text x="60" y="35" font-size="5" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">Sec 37(1)</text><text x="60" y="52" font-size="4" fill="#F5A623" font-weight="700" text-anchor="middle" font-family="Arial">CAMERA + SOFTWARE</text></svg></div><span class="illustration-label">Expenses Compiled</span><span class="step-number-large">04</span></div></div></div>
<div class="step-card"><div class="step-content"><span class="step-badge">Step 5</span><h3 class="step-title">Select ITR Form and Profession Code 16021</h3><p class="step-description">ITR-3 for regular scheme with books, ITR-4 only for Section 44AD presumptive. Select profession code 16021 (Social Media Influencer) in Nature of Business field. Mandatory from AY 2025-26.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Correct form selected</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Code 16021 applied</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="25" y="15" width="70" height="55" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><circle cx="60" cy="38" r="14" fill="#FFF3E0" stroke="#F5A623" stroke-width="1.5"/><text x="60" y="42" font-size="6" fill="#C05E10" font-weight="800" text-anchor="middle" font-family="Arial">16021</text></svg></div><span class="illustration-label">Form Ready</span><span class="step-number-large">05</span></div></div></div>
<div class="step-card"><div class="step-content"><span class="step-badge">Step 6</span><h3 class="step-title">File ITR and E-Verify</h3><p class="step-description">Compute PGBP income (cash + FMV freebies minus expenses). Handle AdSense via Form 67 DTAA and GST LUT. File on incometax.gov.in. E-verify within 30 days via Aadhaar OTP or net banking.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> ITR filed</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> E-verified</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="20" y="10" width="80" height="65" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><circle cx="60" cy="38" r="18" fill="#E8F5E9" stroke="#25D366" stroke-width="1.5"/><path d="M52 38l5 5 11-11" stroke="#25D366" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"/><text x="60" y="68" font-size="6" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">E-VERIFIED</text></svg></div><span class="illustration-label">ITR Filed</span><span class="step-number-large">06</span></div></div></div>

        </div>
    </div>
</section>

<!-- SECTION 8: DOCUMENTS REQUIRED -->
<section class="content-section" id="documents-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Documents Required for Influencer ITR</h2>
            <div class="content-text">
                
                <ul><li><strong>YouTube Studio earnings report</strong> - monthly AdSense statements for full FY</li><li><strong>Brand deal invoices</strong> and payment confirmations with Form 16A for TDS</li><li><strong>Affiliate program statements</strong> (Amazon Associates, Flipkart, etc.)</li><li><strong>Freebie inventory:</strong> Product name, brand, date received, FMV, Section 194R Form 16A</li><li><strong>Expense receipts:</strong> Cameras, laptops, microphones, software, internet, travel, studio</li><li><strong>Form 26AS and AIS</strong> from incometax.gov.in</li><li><strong>Advance tax challans</strong> (Form 280) if paid during FY</li><li><strong>Previous year ITR</strong> acknowledgement and computation</li><li><strong>GST returns</strong> if registered (GSTR-1, GSTR-3B)</li></ul>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 9: CHALLENGES -->
<section class="content-section" id="challenges-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Common Influencer ITR Challenges</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Challenge</th><th>Impact</th><th>How Patron Accounting Solves It</th></tr></thead>
                    <tbody>
                        <tr><td>Undeclared Freebies</td><td>Most common cause of notices - gifted products treated as personal. Form 26AS TDS mismatch goes unnoticed.</td><td>Patron conducts structured freebie audit. Every retained product declared at FMV. Section 194R TDS reconciled in Form 26AS.</td></tr><tr><td>Wrong ITR Form</td><td>Filing ITR-1 or ITR-2 with brand deal income triggers defective return notice from CPC under Section 139(9)</td><td>ITR-3 or ITR-4 selected based on turnover, books status, and expense profile. Code 16021 applied.</td></tr><tr><td>44ADA Claimed Incorrectly</td><td>Influencers claiming 50% presumptive under Section 44ADA when it does NOT apply (not a specified profession)</td><td>Patron correctly applies Section 44AD (8%/6%) for eligible influencers. Evaluates actual vs presumptive.</td></tr><tr><td>YouTube AdSense DTAA Missed</td><td>Form 67 not filed. Google U.S. withholding tax not recovered. IGST incorrectly paid on foreign AdSense.</td><td>Form 67 filed for DTAA credit. GST LUT filed annually. AdSense classified as zero-rated export of services.</td></tr>

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
            <h2 class="section-title">Influencer ITR Filing Fees</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Fee Component</th><th>Amount</th></tr></thead>
                    <tbody>
                        <tr><td>ITR-4 (Presumptive, single stream)</td><td>Starting from INR 1,499</td></tr><tr><td>ITR-3 with books (single platform)</td><td>Rs 2,499</td></tr><tr><td>ITR-3 Multi-Platform + Section 194R</td><td>Rs 3,499</td></tr><tr><td>ITR-3 + GST Returns (GSTR-1 + 3B + 9)</td><td>Rs 4,999</td></tr><tr><td>ITR-3 + Foreign Income (AdSense DTAA) + Form 67</td><td>Rs 3,999</td></tr><tr><td>Advance Tax Planning (Annual)</td><td>Rs 2,999</td></tr>

                    </tbody>
                </table>
                </div>
                <p style="margin-top:16px;font-size:13px;color:var(--text-muted);font-style:italic;">All fees and charges listed are indicative only and do not constitute a binding offer. Final amounts may vary depending on the volume of work and the complexity involved.</p>
                <p style="margin-top:16px;">Professional service charges for drafting, filing, and representation are separate from the statutory fees. The exact fee depends on the complexity of the case, disputed amount, and number of hearings required. Contact us for a detailed quote.</p>
                <p style="margin-top:16px;"><strong>Get a free ITR for Influencers consultation - <a href="tel:+919459456700">Call +91 945 945 6700</a> or <a href="https://wa.me/919459456700?text=Hello%2C%20I%20just%20visited%20your%20ITR%20for%20Influencers%20page.%20I%20would%20like%20to%20know%20more%20about%20it." target="_blank" rel="noopener">WhatsApp us</a>. No-obligation assessment.</strong></p>
            </div>
        </div>
    </div>
</section>

<!-- SECTION 11: TIMELINE -->
<section class="content-section" id="timeline-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Key Deadlines for Influencers FY 2025-26</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Stage</th><th>Estimated Timeline</th></tr></thead>
                    <tbody>
                        <tr><td>ITR Due Date (Non-Audit)</td><td>31 July 2026 | Late fee Rs 5,000 under Section 234F</td></tr><tr><td>ITR Due Date (Tax Audit)</td><td>31 October 2026 | Receipts above Rs 50 lakh (non-digital) or Rs 1 crore (digital)</td></tr><tr><td>Advance Tax Q1</td><td>15 June 2025 - 15% of estimated tax</td></tr><tr><td>Advance Tax Q2</td><td>15 September 2025 - 45% cumulative</td></tr><tr><td>Advance Tax Q3</td><td>15 December 2025 - 75% cumulative</td></tr><tr><td>Advance Tax Q4</td><td>15 March 2026 - 100% of estimated tax</td></tr>

                    </tbody>
                </table>
                </div>
                <div class="highlight-box" style="margin-top:16px;">
                    
                    <p><strong>Critical:</strong> Section 194R TDS entries from brands are already visible to the ITD in Form 26AS. If ITR shows no corresponding PGBP income, automatic mismatch notice is generated. Profession code 16021 makes ITD tracking more precise from AY 2025-26. Download AIS before June 2026 and reconcile all entries.</p>

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
            <h2 class="section-title">Why Professional CA Filing Matters for Influencers</h2>
        </div>
        <div class="features-grid" style="display:grid;grid-template-columns:repeat(3,1fr);gap:24px;"><article class="feature-card" style="background:var(--white);border:1px solid var(--gray-200);border-radius:var(--radius-lg);padding:28px;"><div style="width:48px;height:48px;background:var(--orange-light);border-radius:var(--radius-md);display:flex;align-items:center;justify-content:center;margin-bottom:16px;"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M22 11.08V12a10 10 0 11-5.93-9.14"/><path d="M22 4L12 14.01l-3-3"/></svg></div><h3 style="font-size:17px;font-weight:700;color:var(--blue);margin-bottom:8px;">Profession Code 16021 Accuracy</h3><p style="font-size:14px;color:var(--text-secondary);line-height:1.6;margin:0;">Many self-filers use generic codes. From AY 2025-26, ITD cross-references AIS against declared code - wrong codes trigger compliance notices.</p></article><article class="feature-card" style="background:var(--white);border:1px solid var(--gray-200);border-radius:var(--radius-lg);padding:28px;"><div style="width:48px;height:48px;background:var(--orange-light);border-radius:var(--radius-md);display:flex;align-items:center;justify-content:center;margin-bottom:16px;"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M14 2H6a2 2 0 00-2 2v16a2 2 0 002 2h12a2 2 0 002-2V8z"/><path d="M14 2v6h6M16 13H8M16 17H8"/></svg></div><h3 style="font-size:17px;font-weight:700;color:var(--blue);margin-bottom:8px;">Freebie and Barter Audit</h3><p style="font-size:14px;color:var(--text-secondary);line-height:1.6;margin:0;">Section 194R requires declaration of all retained products at FMV. TDS in Form 26AS must match ITR. Patron audits every freebie.</p></article><article class="feature-card" style="background:var(--white);border:1px solid var(--gray-200);border-radius:var(--radius-lg);padding:28px;"><div style="width:48px;height:48px;background:var(--orange-light);border-radius:var(--radius-md);display:flex;align-items:center;justify-content:center;margin-bottom:16px;"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><line x1="12" y1="1" x2="12" y2="23"/><path d="M17 5H9.5a3.5 3.5 0 000 7h5a3.5 3.5 0 010 7H6"/></svg></div><h3 style="font-size:17px;font-weight:700;color:var(--blue);margin-bottom:8px;">Expense Maximisation</h3><p style="font-size:14px;color:var(--text-secondary);line-height:1.6;margin:0;">Section 37(1) allows all direct content creation costs. Patron evaluates whether actual deductions exceed presumptive 6-8% before recommending method.</p></article><article class="feature-card" style="background:var(--white);border:1px solid var(--gray-200);border-radius:var(--radius-lg);padding:28px;"><div style="width:48px;height:48px;background:var(--orange-light);border-radius:var(--radius-md);display:flex;align-items:center;justify-content:center;margin-bottom:16px;"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><path d="M2 12h20M12 2a15.3 15.3 0 014 10 15.3 15.3 0 01-4 10 15.3 15.3 0 01-4-10 15.3 15.3 0 014-10z"/></svg></div><h3 style="font-size:17px;font-weight:700;color:var(--blue);margin-bottom:8px;">YouTube AdSense DTAA</h3><p style="font-size:14px;color:var(--text-secondary);line-height:1.6;margin:0;">Form 67 filed for India-U.S. credit. GST LUT filed annually. AdSense correctly classified as zero-rated export of services.</p></article><article class="feature-card" style="background:var(--white);border:1px solid var(--gray-200);border-radius:var(--radius-lg);padding:28px;"><div style="width:48px;height:48px;background:var(--orange-light);border-radius:var(--radius-md);display:flex;align-items:center;justify-content:center;margin-bottom:16px;"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><path d="M12 6v6l4 2"/></svg></div><h3 style="font-size:17px;font-weight:700;color:var(--blue);margin-bottom:8px;">Advance Tax Prevention</h3><p style="font-size:14px;color:var(--text-secondary);line-height:1.6;margin:0;">Quarterly computation and payment reminders eliminate Section 234B/234C interest that many influencers discover only at filing time.</p></article></div>
    </div>
</section>

<!-- SECTION 12A: SOCIAL PROOF -->
<section class="content-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Why Influencers Choose Patron Accounting</h2>
            <div class="content-text">
                
                <p><strong>4.9/5 from 1,200+ verified Google reviews.</strong> 5,000+ clients annually from offices in Pune, Mumbai, Delhi, and Hyderabad. Dedicated team with expertise in profession code 16021, Section 194R freebie reporting, and GST LUT for YouTubers. Filing ITRs for Instagram influencers, YouTubers, podcast hosts, and nano to mega creators across all income levels.</p>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 13: SELF-FILING vs PROFESSIONAL COMPARISON -->
<section class="content-section" id="comparison-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">DIY Filing vs Patron Accounting</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Parameter</th><th>DIY Filing</th><th>Patron Accounting</th></tr></thead>
                    <tbody>
                        <tr><td>Profession Code</td><td>Often blank or generic code; 16021 missed</td><td>Code 16021 applied for every influencer from AY 2025-26</td></tr><tr><td>Freebie Income</td><td>Frequently undeclared; Form 26AS TDS mismatch unnoticed</td><td>Structured freebie audit; every product declared at FMV; 194R reconciled</td></tr><tr><td>ITR Form Selection</td><td>ITR-1/ITR-2 used incorrectly; defective return follows</td><td>ITR-3 or ITR-4 based on turnover, books, and expense profile</td></tr><tr><td>Expense Deductions</td><td>Only obvious expenses; studio travel, home office, depreciation missed</td><td>All Section 37(1) deductions; actual vs presumptive compared before filing</td></tr><tr><td>YouTube AdSense DTAA</td><td>Form 67 not filed; U.S. tax not recovered; IGST incorrectly paid</td><td>Form 67 filed; GST LUT annually; AdSense as zero-rated export</td></tr><tr><td>Advance Tax</td><td>Not paid; Section 234B/234C interest discovered too late</td><td>Quarterly computation; reminders before each due date</td></tr><tr><td>AIS Reconciliation</td><td>Often skipped; discrepancies trigger automatic notices</td><td>Mandatory pre-filing reconciliation; every 194J/194R entry matched</td></tr>

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
            <h2 class="section-title">Related Tax Filing Services</h2>
            <div class="content-text">
                
                <ul><li><a href="/income-tax-return">Income Tax Return</a> - Complete ITR for salary, house property, and capital gains alongside influencer PGBP</li><li><a href="/itr-for-capital-gains">ITR for Capital Gains</a> - If you also earned capital gains from mutual funds, shares, or property</li><li><a href="/income-tax-notice">Income Tax Notice</a> - Expert CA support for undisclosed freebie income or AIS mismatch notices</li></ul>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 15A: LEGAL FRAMEWORK -->
<section class="content-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Legal Framework - Influencer Taxation India</h2>
            <div class="content-text">
                
                <div class="table-responsive-wrapper"><table><thead><tr><th>Provision</th><th>Details</th></tr></thead><tbody><tr><td><a href="https://www.incometax.gov.in" target="_blank" rel="noopener">Section 28 + 37(1)</a></td><td>All influencer income classified as PGBP. Expenses wholly for business deductible.</td></tr><tr><td>Section 28(iv)</td><td>Value of any benefit/perquisite in course of business is taxable. Basis for taxing freebies and barter.</td></tr><tr><td>Section 194R (Finance Act 2022)</td><td>10% TDS by brand on FMV of freebies when aggregate > Rs 20,000/year. Effective 1 July 2022.</td></tr><tr><td>Section 194J</td><td>10% TDS on brand deal payments above Rs 30,000. Form 16A issued. Claimable as credit.</td></tr><tr><td>Section 44AD</td><td>Presumptive: 8% cash / 6% digital of gross receipts. Turnover up to Rs 3 crore. Section 44ADA does NOT apply to influencers (not in Rule 6F).</td></tr><tr><td>GST (Section 22 CGST Act)</td><td>Mandatory above Rs 20 lakh. 18% on domestic brand deals. YouTube AdSense = zero-rated export. LUT required.</td></tr></tbody></table></div><p><strong>Profession Code 16021:</strong> Dedicated code for Social Media Influencer from AY 2025-26 in ITR-3. Currently removed from ITR-4. Tax experts recommend ITR-3 with code 16021 until CBDT clarifies ITR-4 eligibility.</p>

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
                    <h2 class="faq-expanded__title">Frequently Asked Questions - Influencer ITR</h2>
                    <p class="faq-expanded__lead">Expert answers about influencer taxation, profession code 16021, Section 194R freebies, YouTube AdSense DTAA, and GST obligations.</p>
                    @include('partials.bigin-form', [
                        'variant'  => 'compact',
                        'service'  => 'ITR for Influencers',
                    ])
                </aside>
                <div class="faq-expanded__list">
                    <div class="faq-expanded__item" id="faq-1">
                        <h3 class="faq-expanded__q">Which ITR form should a social media influencer use?</h3>
                        <div class="faq-expanded__a"><p>ITR-3 if maintaining books under regular scheme, or ITR-4 for Section 44AD presumptive. Profession code 16021 must be selected from AY 2025-26. ITR-1 and ITR-2 cannot be used. Important: Section 44ADA (50% presumptive for specified professions) does NOT apply to influencers as social media is not listed in Rule 6F. Only Section 44AD (8%/6%) is available.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-2">
                        <h3 class="faq-expanded__q">Do influencers pay tax on free products and gifts from brands?</h3>
                        <div class="faq-expanded__a"><p>Yes. Under Section 28(iv), FMV of any benefit received in business is taxable PGBP income. Brands deduct 10% TDS under Section 194R if aggregate freebies exceed Rs 20,000/year. The FMV must be declared in ITR and TDS claimed as credit. Exception: products returned to brand after promotion are not taxable.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-3">
                        <h3 class="faq-expanded__q">What is profession code 16021 and is it mandatory?</h3>
                        <div class="faq-expanded__a"><p>Profession code 16021 is the Income Tax Department's dedicated code for Social Media Influencer from AY 2025-26 in ITR-3. It must be selected under Nature of Business or Profession. Currently removed from ITR-4. Tax experts recommend filing ITR-3 with code 16021 until CBDT clarifies ITR-4 eligibility.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-4">
                        <h3 class="faq-expanded__q">Do influencers need to register for GST?</h3>
                        <div class="faq-expanded__a"><p>GST registration is mandatory when annual turnover exceeds Rs 20 lakh (Rs 10 lakh in special category states). Domestic brand deals attract 18% GST. YouTube AdSense paid by Google Asia Pacific qualifies as export of services - zero-rated. LUT must be filed each year before first foreign receipt. Input Tax Credit on equipment claimable.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-5">
                        <h3 class="faq-expanded__q">Can influencers deduct equipment and creation expenses?</h3>
                        <div class="faq-expanded__a"><p>Yes. Under Section 37(1), all expenses wholly for business are deductible: cameras, microphones, lighting, editing software (Adobe, Final Cut Pro), internet, travel for shoots, studio rental, and proportionate home office. Depreciation on hardware under Section 32. Only available in ITR-3 - not under ITR-4 presumptive.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-6">
                        <h3 class="faq-expanded__q">How is YouTube AdSense income taxed for Indian influencers?</h3>
                        <div class="faq-expanded__a"><p>AdSense is PGBP income taxed at slab rates. Payments from Google Asia Pacific (Singapore) qualify as export of services under GST (zero-rated, LUT required). If Google withheld U.S. tax, claim relief under India-U.S. DTAA by filing Form 67 before or with ITR. Report all foreign receipts in Schedule FSI.</p></div>
                    </div>
                </div>
            </div>


            <!-- Quick Answers -->
            <div class="highlight-box" style="margin-top:32px;">
                <p><strong>Quick Answers</strong></p>
                <p><strong>Which ITR form?</strong> ITR-3 with profession code 16021. ITR-4 only under Section 44AD. 44ADA does NOT apply.</p><p><strong>Tax on freebies?</strong> Yes. FMV taxable under Section 28(iv). Brand deducts 10% TDS under 194R if > Rs 20,000/year.</p><p><strong>GST mandatory?</strong> Above Rs 20 lakh turnover. 18% domestic. YouTube AdSense = zero-rated export (LUT required).</p><p><strong>Due date?</strong> 31 Jul 2026 (non-audit). 31 Oct 2026 (audit).</p>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 18: URGENCY CTA -->
<section class="content-section" style="background: var(--orange-lighter) !important; border-left: 4px solid var(--orange);">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">File Your Influencer ITR Before the Deadline</h2>
            <div class="content-text">
                
                <p>Section 194R TDS entries are already visible to the Income Tax Department. If your ITR shows no corresponding PGBP income for freebies, an automatic mismatch notice is generated. Profession code 16021 makes tracking more precise from AY 2025-26. Filing ITR-1 or ITR-2 results in defective return. Missing advance tax triggers 1% monthly interest.</p><p><strong>Start now.</strong> <a href="tel:+919459456700">Call +91 945 945 6700</a> or <a href="https://wa.me/919459456700?text=Hello%2C%20I%20just%20visited%20your%20ITR%20for%20Influencers%20page.%20I%20would%20like%20to%20know%20more%20about%20it." target="_blank" rel="noopener">WhatsApp us</a> for expert influencer ITR filing from Rs 1,499.</p>

            </div>
        </div>
    </div>
</section>

<!-- CONCLUSION + CTA BLOCK (Dark) -->
<section class="content-section" style="background: var(--blue) !important;">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title" style="color:#FFFFFF !important;">File Your Influencer ITR with Expert CA Support</h2>
            <div class="content-text" style="text-align:left;">
                
                <p style="color:rgba(255,255,255,0.9);font-size:15px;line-height:1.7;">Profession code 16021, Section 194R freebie enforcement, and AIS cross-checking have made influencer ITR one of the most compliance-intensive individual tax scenarios. Influencers who file ITR-1 or ignore freebie income face automatic mismatch notices, defective returns, and penalties under Section 270A.</p><p style="color:rgba(255,255,255,0.9);font-size:15px;line-height:1.7;">Patron Accounting brings together income classification, freebie auditing, GST LUT, advance tax planning, and multi-stream reconciliation. From Rs 1,499. Offices in Pune, Mumbai, Delhi, and Hyderabad.</p>

            </div>
            <div style="display:flex;gap:14px;flex-wrap:wrap;margin-top:24px;">
                <a href="tel:+919459456700" style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:var(--orange);color:#fff;border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#128222; Call +91 945 945 6700</a>
                <a href="https://wa.me/919459456700?text=Hello%2C%20I%20just%20visited%20your%20ITR%20for%20Influencers%20page.%20I%20would%20like%20to%20know%20more%20about%20it." target="_blank" style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:#25D366;color:#fff;border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;" rel="noopener">&#128172; WhatsApp Us</a>
                <a href="mailto:sales@patronaccounting.com?subject=Influencer%20ITR%20Filing&body=Hello%2C%20I%20just%20visited%20your%20ITR%20for%20Influencers%20page.%20I%20would%20like%20to%20know%20more%20about%20it.%0A%0AThank%20you." style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:transparent;color:#fff;border:2px solid rgba(255,255,255,0.3);border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#9993;&#65039; Email Us</a>
            </div>
            <p style="color:rgba(255,255,255,0.7);font-size:13px;margin-top:16px;">Book a Free Consultation - No Obligation.</p>
        </div>
    </div>
</section>

<!-- GSTAT STATE BENCH CITY PAGES (32 Pages) -->
<section class="content-section" style="padding:48px 32px;background:var(--gray-50);">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title" style="text-align:center;margin-bottom:12px;">Influencer ITR Filing Across India</h2>
            <p style="text-align:center;color:var(--text-muted);font-size:15px;margin-bottom:40px;">Patron Accounting files ITR for influencers and content creators in major cities.</p>
          
            <div class="pa-city-block" style="margin-bottom:40px;"><p class="pa-block-title">Influencer ITR by City</p><p class="pa-block-sub">Brand deals, freebies, AdSense, and GST compliance</p><div class="pa-city-grid"><a href="/itr-for-influencers/pune" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Pune</div><div class="pa-card-sub">Maharashtra</div></div></a><a href="/itr-for-influencers/mumbai" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Mumbai</div><div class="pa-card-sub">Maharashtra</div></div></a><a href="/itr-for-influencers/delhi" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Delhi</div><div class="pa-card-sub">NCR</div></div></a><a href="/itr-for-influencers/gurugram" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Gurugram</div><div class="pa-card-sub">Haryana</div></div></a></div></div><div class="pa-city-block"><p class="pa-block-title">Related Creator Services</p><p class="pa-block-sub">Complete influencer compliance</p><div class="pa-cross-grid"><a href="/income-tax-return" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M14 2H6a2 2 0 00-2 2v16a2 2 0 002 2h12a2 2 0 002-2V8z"/><path d="M14 2v6h6M16 13H8M16 17H8"/></svg></div><div><div class="pa-card-title">Income Tax Return</div><div class="pa-card-sub">All Categories</div></div></a><a href="/itr-for-capital-gains" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M14 2H6a2 2 0 00-2 2v16a2 2 0 002 2h12a2 2 0 002-2V8z"/><path d="M14 2v6h6M16 13H8M16 17H8"/></svg></div><div><div class="pa-card-title">ITR Capital Gains</div><div class="pa-card-sub">Investments</div></div></a><a href="/income-tax-notice" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M14 2H6a2 2 0 00-2 2v16a2 2 0 002 2h12a2 2 0 002-2V8z"/><path d="M14 2v6h6M16 13H8M16 17H8"/></svg></div><div><div class="pa-card-title">Tax Notice</div><div class="pa-card-sub">Response</div></div></a><a href="/gst-registration" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M14 2H6a2 2 0 00-2 2v16a2 2 0 002 2h12a2 2 0 002-2V8z"/><path d="M14 2v6h6M16 13H8M16 17H8"/></svg></div><div><div class="pa-card-title">GST Registration</div><div class="pa-card-sub">India</div></div></a><a href="/gst-returns" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M14 2H6a2 2 0 00-2 2v16a2 2 0 002 2h12a2 2 0 002-2V8z"/><path d="M14 2v6h6M16 13H8M16 17H8"/></svg></div><div><div class="pa-card-title">GST Returns</div><div class="pa-card-sub">Monthly</div></div></a><a href="/itr-for-crypto-traders" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M14 2H6a2 2 0 00-2 2v16a2 2 0 002 2h12a2 2 0 002-2V8z"/><path d="M14 2v6h6M16 13H8M16 17H8"/></svg></div><div><div class="pa-card-title">Crypto ITR</div><div class="pa-card-sub">VDA</div></div></a></div></div>
        </div>
    </div>
</section>

<!-- CONTENT FRESHNESS FOOTER -->
<section class="content-section" style="padding:32px;">
    <div class="content-container">
        <div class="text-content" style="font-size:13px;color:var(--text-muted);">
            <p><strong>Content Created:</strong> March 2026 &nbsp;|&nbsp; <strong>Last Updated:</strong> <span id="lastUpdatedFooter">20 April 2026</span> &nbsp;|&nbsp; <strong>Next Review:</strong> July 2026 &nbsp;|&nbsp; <strong>Reviewed By:</strong> CA &amp; CS Team, Patron Accounting LLP</p>
            <p>This page is reviewed before each filing season. Profession code 16021, Section 194R, GST thresholds, and presumptive limits updated per CBDT notifications and Union Budget. Next review: July 2026.</p>
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
