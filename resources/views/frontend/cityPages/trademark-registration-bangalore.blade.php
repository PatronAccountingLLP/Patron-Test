
@extends('layouts.service-app')

<!-- External Dependencies (loaded by master layout in production) -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Barlow:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,400&family=DM+Sans:opsz,wght@9..40,400;9..40,500;9..40,600;9..40,700&display=swap" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

@section('meta')
    <title>Trademark Registration in Bangalore – TM-A, Fees &amp; Process</title>
    <meta name="description" content="CA-assisted trademark registration in Bangalore. TM filed in 1-2 days. Serving Electronic City, Whitefield, Koramangala startups. Call +91 945 945 6700.">
    <link rel="canonical" href="/trademark-registration/bangalore">
    <meta name="robots" content="index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1">
    <meta property="og:title" content="Trademark Registration in Bangalore – TM-A, Fees &amp; Process">
    <meta property="og:description" content="CA-assisted trademark registration in Bangalore. TM filed in 1-2 days. Serving Electronic City, Whitefield, Koramangala startups. Call +91 945 945 6700.">
    <meta property="og:url" content="/trademark-registration/bangalore">
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="Patron Accounting">
    <meta property="og:image" content="https://www.patronaccounting.com/images/og-default-square.png">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="1200">
    <meta property="og:image:type" content="image/png">
    <meta property="og:image:secure_url" content="https://www.patronaccounting.com/images/og-default-square.png">
    <meta property="og:image:alt" content="Patron Accounting - partner you can rely on">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Trademark Registration in Bangalore – TM-A, Fees &amp; Process">
    <meta name="twitter:description" content="CA-assisted trademark registration in Bangalore. TM filed in 1-2 days. Serving Electronic City, Whitefield, Koramangala startups. Call +91 945 945 6700.">
    <meta name="twitter:image" content="https://www.patronaccounting.com/images/og-default-square.png">
@endsection

@section('schema')
    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@graph": [
        {
          "@type": "Service",
          "name": "Trademark Registration Services in Bangalore",
          "description": "CA-assisted trademark registration in Bangalore. TM filed in 1-2 days. Serving Electronic City, Whitefield, Koramangala startups. Call +91 945 945 6700.",
          "url": "https://www.patronaccounting.com/trademark-registration/bangalore",
          "serviceType": "Trademark Registration Services in Bangalore",
          "areaServed": {
            "@type": "City",
            "name": "Bangalore"
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
            "url": "https://www.patronaccounting.com/trademark-registration/bangalore",
            "price": "4500"
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
              "name": "Trademark Registration",
              "item": "https://www.patronaccounting.com/trademark-registration"
            },
            {
              "@type": "ListItem",
              "position": 3,
              "name": "Trademark Registration in Bangalore",
              "item": "https://www.patronaccounting.com/trademark-registration/bangalore"
            }
          ]
        },
        {
          "@type": "FAQPage",
          "mainEntity": [
            {
              "@type": "Question",
              "name": "Which Trademark Registry handles Bangalore applications?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "Trademark Registry Chennai at IPO Building, Guindy, Chennai-600032 processes all Karnataka applications. Filing is online through ipindiaonline.gov.in - applications auto-routed to Chennai. No physical visit required."
              }
            },
            {
              "@type": "Question",
              "name": "Can I file a trademark online from Bangalore?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "Yes. 100% online through ipindiaonline.gov.in. Form TM-A filing to objection responses and virtual hearings - all digital. Patron's team handles the complete process remotely."
              }
            },
            {
              "@type": "Question",
              "name": "How much does trademark registration cost in Bangalore?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "Govt fee Rs 4,500/class for individuals, DPIIT startups, MSMEs. Rs 9,000/class for companies/LLPs. Professional fees Rs 3,000-8,000. Fees are per class - multiple classes multiply the cost."
              }
            },
            {
              "@type": "Question",
              "name": "How long does trademark registration take in Bangalore?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "8-12 months for uncontested applications. Includes examination (4-6 months), Trademark Journal publication (4 months opposition window), and certificate issuance. With opposition: 12-18 months."
              }
            },
            {
              "@type": "Question",
              "name": "Which class should a Bangalore SaaS company file under?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "Class 9 for downloadable/installable software. Class 42 for cloud-based SaaS accessed via browser. Many Bangalore IT companies should file both classes for complete protection."
              }
            },
            {
              "@type": "Question",
              "name": "Do DPIIT startups get a fee discount on trademark registration?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "Yes. DPIIT-recognized startups pay Rs 4,500/class instead of Rs 9,000 - a 50% rebate. MSME/Udyam businesses also qualify. Include DPIIT certificate in the application."
              }
            },
            {
              "@type": "Question",
              "name": "Can I use the TM symbol immediately after filing?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "Yes. TM symbol (goods) or SM symbol (services) can be used immediately after filing. The registered R symbol can only be used after the Registration Certificate is issued. Using R before registration is an offence."
              }
            },
            {
              "@type": "Question",
              "name": "Can a Bangalore startup extend trademark protection internationally?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "Yes. India is a Madrid Protocol member. Once you have an Indian application or registration, file an international application through WIPO to extend to 130+ countries. Critical for SaaS companies serving US/EU markets."
              }
            }
          ]
        }
      ]
    }
</script>

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
                        Trademark Registration in Bangalore - Protect Your Brand Identity
                    </h1>

                    <div class="expert-attribution-box">
                        <span class="eab-check"><svg width="16" height="16" viewBox="0 0 24 24" fill="currentColor"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg></span>
                        <span class="eab-title">Reviewed by CA and CS Team, Patron Accounting LLP</span>
                        <span class="eab-meta">
                            <span>ICAI & ICSI Registered</span><span class="eab-sep">|</span>
                            <span>15+ Years Experience</span><span class="eab-sep">|</span>
                            <span>Last Updated: <span id="lastUpdated">15 April 2026</span></span>
                        </span>
                        <a href="#" class="eab-link">Verify Credentials &rarr;</a>
                    </div>

                    <div class="mb-4">
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Documents:</span> PAN, brand logo/name, business registration, address proof</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Fees:</span> Rs 4,500/class (startups/individuals) | Rs 9,000/class (companies)</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Eligibility:</span> Any person or entity claiming to be proprietor of a mark</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Timeline:</span> Filing in 1-2 days; registration 8-12 months (uncontested)</p>
                        </div>
                    </div>

                    <p class="mb-4 fw-bold" style="color: var(--blue); font-size: 15px;">10,000+ Businesses Served | 4.9 Google Rating | 50,000+ Documents Filed</p>

                    <div class="hero-cta">
                        <a href="tel:+919459456700" class="btn-video text-decoration-none">
                            <span class="play-circle"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="width:14px;height:14px;color:#fff"><path d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/></svg></span>
                            Call +91 945 945 6700
                        </a>
                        <a href="mailto:sales@patronaccounting.com" class="btn-sample text-decoration-none">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="width:18px;height:18px;"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,12 2,6"/></svg>
                            Email Us
                        </a>
                        <a href="https://wa.me/919459456700?text=Hello%2C%20I%20just%20visited%20your%20Trademark%20Registration%20in%20Bangalore%20page.%20I%20would%20like%20to%20know%20more%20about%20it." target="_blank" class="btn-sample text-decoration-none" rel="noopener">
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
                                            'service'  => 'Trademark Registration in Bangalore',
                                            'city'     => 'Bangalore',
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
    'ctaText'    => 'Join 10,000+ businesses who trust Patron Accounting',
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
            <a href="#overview-section" class="toc-btn">Overview</a><a href="#what-is-section" class="toc-btn">What is Trademark</a><a href="#who-section" class="toc-btn">Who Needs It</a><a href="#services-section" class="toc-btn">Services</a><a href="#procedure-section" class="toc-btn">Process</a><a href="#documents-section" class="toc-btn">Documents</a><a href="#challenges-section" class="toc-btn">Challenges</a><a href="#fees-section" class="toc-btn">Fees</a><a href="#timeline-section" class="toc-btn">Timeline</a><a href="#benefits-section" class="toc-btn">Why Patron</a><a href="#comparison-section" class="toc-btn">Comparison</a><a href="#faq-section" class="toc-btn">FAQs</a>
        </div>
        <button class="toc-arrow right" id="tocRight">&#10095;</button>
    </div>
</div>

<!-- SECTION 2: OVERVIEW / INTRO + TL;DR -->
<section class="content-section" id="overview-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Trademark Registration in Bangalore - Overview</h2>
            <div class="content-text">
                <div class="highlight-box" style="margin-bottom:20px;">
                    <p><strong>&#128204; TL;DR - Trademark Registration in Bangalore Services at a Glance</strong></p>
                    <p><p>Trademark registration in Bangalore secures exclusive legal rights over your brand name, logo, slogan, or product identity under the Trade Marks Act, 1999. Registration provides pan-India protection for 10 years (renewable indefinitely) and enables legal action against infringers. All Bangalore applications are processed by the Trademark Registry, Chennai.</p></p>
                </div>
                <p><p>Bangalore - India's startup capital with 75,000+ startups and home to Flipkart, Infosys, and Wipro - generates one of the highest volumes of trademark filings nationally. Innovation corridors in Electronic City, Whitefield, and Koramangala produce thousands of new brands requiring protection. For IT/SaaS companies, the critical decision is between Class 9 (software) and Class 42 (SaaS/cloud). Learn more about <a href="/trademark-registration">Trademark Registration across India</a>.</p></p>
                <p><p>DPIIT-recognized startups and MSME-registered businesses get a 50% fee rebate (Rs 4,500 vs Rs 9,000 per class). After trademark registration, consider <a href="/startup-registration">Startup India Registration</a> for the DPIIT rebate and <a href="/gst-registration">GST Registration</a> for business compliance.</p></p>
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
                <h2 class="section-title">What is Trademark Registration?</h2>
                <div class="content-text what-is-definition">
                    
                    <p>Trademark registration is the legal process of securing exclusive rights over a distinctive mark - word, logo, slogan, sound, or shape - by filing under the Trade Marks Act, 1999 with the Trademark Registry, granting pan-India protection for 10 years and the right to use the registered (R) symbol.</p><p>In Bangalore, trademark registration is essential for the city's competitive ecosystem. SaaS companies at Manyata Tech Park, D2C brands at Peenya Industrial Area, and food delivery startups in HSR Layout and Indiranagar depend on trademark protection to differentiate and build brand equity. A registered trademark is also a prerequisite for brand licensing, franchise agreements, and international expansion under the Madrid Protocol.</p><p>Consider filing alongside <a href="/private-limited-company-registration">Company Registration</a> and <a href="/iec-registration">Import Export Code</a> for complete business protection.</p>

                </div>
                <div class="highlight-box" style="margin-top:20px;">
                    <p><strong>Key Terms for Trademark Registration in Bangalore:</strong></p>
                    <ul><li><strong>Nice Classification:</strong> 45 classes (34 goods, 11 services). Bangalore IT: Class 9 (software) and/or Class 42 (SaaS)</li><li><strong>Form TM-A:</strong> Primary application form filed on ipindiaonline.gov.in</li><li><strong>TM Symbol:</strong> Usable immediately after filing. R symbol only after certificate</li><li><strong>Trademark Journal:</strong> Publication for 4-month opposition window</li><li><strong>Madrid Protocol:</strong> International extension to 130+ countries from Indian registration</li><li><strong>DPIIT Rebate:</strong> 50% fee reduction - Rs 4,500 vs Rs 9,000 per class</li></ul>

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
                            <text x="100" y="170" font-size="10" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial, sans-serif">Trademark Registration in Bangalore</text>
                        </svg>
                    </div>
                    <div class="illustration-badge">
                        <span>Brand Protection</span>
                        <strong>TM Registered</strong>
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
            <h2 class="section-title">Who Needs Trademark Registration in Bangalore?</h2>
            <div class="content-text">
                
                <p>Every business using a brand name, logo, or product identity needs trademark registration.</p><ul><li><strong>SaaS companies at Electronic City and Whitefield</strong> building B2B platforms must protect product names (Class 9/42)</li><li><strong>D2C brands from Peenya and Koramangala</strong> need protection against counterfeiting on e-commerce platforms (Class 25/35)</li><li><strong>Fintech startups in HSR Layout</strong> developing payment apps need registration for app name and UI elements</li><li><strong>Food businesses in Indiranagar and Jayanagar</strong> operating cloud kitchens and restaurant chains (Class 43)</li><li><strong>Any person or entity</strong> claiming to be proprietor of a mark under Section 18 of Trade Marks Act</li></ul><p>File on incorporation day to secure the earliest priority date in Bangalore's fast-moving ecosystem.</p>

            </div>
            </div>
        </div>
    </div>
</section>

<!-- SECTION 5: OUR SERVICES -->
<section class="content-section" id="services-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Trademark Registration Services Included</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Service</th><th>What We Do</th></tr></thead>
                    <tbody>
                        <tr><td>Trademark Search</td><td>Comprehensive search on IP India portal to verify mark availability and conflict check in selected class(es).</td></tr><tr><td>Class Selection Advisory</td><td>Expert guidance: Class 9 vs 42 for IT/SaaS, Class 35 for retail, Class 25 for fashion, Class 43 for food.</td></tr><tr><td>Form TM-A Drafting and Filing</td><td>End-to-end e-filing on ipindiaonline.gov.in with correct class, goods/services description, and trademark image.</td></tr><tr><td>DPIIT/MSME Rebate Integration</td><td>50% fee rebate applied for DPIIT-recognized startups and Udyam-registered businesses.</td></tr><tr><td>Objection Response</td><td>Drafting and filing response to examination reports from Trademark Registry Chennai within 30-60 days.</td></tr><tr><td>Opposition Handling</td><td>Representation in opposition proceedings if third party opposes during 4-month publication window.</td></tr><tr><td>Registration Certificate</td><td>Follow-up for final certificate after opposition period closes. R symbol usage enabled.</td></tr><tr><td>Madrid Protocol Filing</td><td>International trademark extension to 130+ countries for Bangalore startups with global ambitions.</td></tr>

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
            <h2 class="section-title">Trademark Registration Process in Bangalore</h2>
            <p class="section-subtitle" style="text-align:left;max-width:100%;">Our CA team handles the complete trademark registration for Bangalore businesses - from search to certificate. Filed online through ipindiaonline.gov.in. Processed by Trademark Registry Chennai.</p>
        </header>
        <div class="steps-container">
            <div class="step-card"><div class="step-content"><span class="step-badge">Step 1</span><h3 class="step-title">Conduct Trademark Search</h3><p class="step-description">Search IP India Trademark Public Search portal to verify your proposed brand name or logo is not already registered or pending in the same class. For Bangalore SaaS companies, search in both Class 9 and Class 42.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Conflict check</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Multi-class search</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><circle cx="50" cy="40" r="20" fill="none" stroke="#14365F" stroke-width="2"/><line x1="64" y1="54" x2="85" y2="75" stroke="#F5A623" stroke-width="3" stroke-linecap="round"/></svg></div><span class="illustration-label">TM Search</span><span class="step-number-large">01</span></div></div></div>
<div class="step-card"><div class="step-content"><span class="step-badge">Step 2</span><h3 class="step-title">Select Nice Classification Class</h3><p class="step-description">Choose the correct class from 45 options. Class 9 for downloadable software, Class 42 for SaaS/cloud, Class 35 for e-commerce, Class 25 for fashion, Class 43 for food services. File all relevant classes.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Class 9 vs 42 advisory</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Multi-class strategy</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="15" y="10" width="90" height="60" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><rect x="25" y="22" width="70" height="8" rx="3" fill="#F5A623" opacity="0.3"/><rect x="25" y="36" width="55" height="6" rx="2" fill="#14365F" opacity="0.15"/><rect x="25" y="48" width="45" height="6" rx="2" fill="#14365F" opacity="0.15"/></svg></div><span class="illustration-label">Classification</span><span class="step-number-large">02</span></div></div></div>
<div class="step-card"><div class="step-content"><span class="step-badge">Step 3</span><h3 class="step-title">Prepare Application (Form TM-A)</h3><p class="step-description">Compile applicant details, trademark image (JPG, min 8cm x 8cm), goods/services description, and proof of use if claiming prior date. Include DPIIT certificate for 50% rebate.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>DPIIT rebate applied</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Document compilation</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="20" y="10" width="80" height="60" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><rect x="35" y="22" width="50" height="8" rx="2" fill="#E8712C" opacity="0.3"/><rect x="35" y="36" width="40" height="5" rx="2" fill="#14365F" opacity="0.15"/><rect x="35" y="46" width="30" height="5" rx="2" fill="#14365F" opacity="0.15"/></svg></div><span class="illustration-label">Application</span><span class="step-number-large">03</span></div></div></div>
<div class="step-card"><div class="step-content"><span class="step-badge">Step 4</span><h3 class="step-title">E-File on IP India Portal</h3><p class="step-description">File Form TM-A on ipindiaonline.gov.in. Pay government fee online. Filing receipt with application number and filing date generated. The filing date establishes priority - critical in Bangalore's competitive ecosystem.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>ipindiaonline.gov.in</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Priority date secured</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="15" y="10" width="90" height="60" rx="8" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><circle cx="90" cy="60" r="10" fill="#E8F5E9" stroke="#25D366" stroke-width="1.2"/><path d="M85 60l3 3 7-7" stroke="#25D366" stroke-width="2" stroke-linecap="round"/></svg></div><span class="illustration-label">E-Filing</span><span class="step-number-large">04</span></div></div></div>
<div class="step-card"><div class="step-content"><span class="step-badge">Step 5</span><h3 class="step-title">Examination by Registry Chennai</h3><p class="step-description">Trademark Registry Chennai examines for distinctiveness, conflicts, and Act compliance. If objections raised, examination report issued. CA responds within 30 days (extendable to 60). Common Bangalore IT objections: descriptiveness and similarity.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>4-6 months examination</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Objection response</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="20" y="10" width="80" height="60" rx="6" fill="#FFF3E0" stroke="#F5A623" stroke-width="1.5"/><circle cx="60" cy="35" r="15" fill="none" stroke="#14365F" stroke-width="1.5"/><path d="M55 35h10M60 30v10" stroke="#14365F" stroke-width="2" stroke-linecap="round"/></svg></div><span class="illustration-label">Examination</span><span class="step-number-large">05</span></div></div></div>
<div class="step-card"><div class="step-content"><span class="step-badge">Step 6</span><h3 class="step-title">Publication, Opposition, and Registration</h3><p class="step-description">Accepted mark published in Trademark Journal for 4 months. If no opposition, Registration Certificate issued. Total 8-12 months uncontested, 12-18 months with opposition. R symbol can now be used.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>4-month publication</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>R symbol enabled</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="25" y="10" width="70" height="55" rx="6" fill="#E8F5E9" stroke="#25D366" stroke-width="1.5"/><path d="M48 32l8 8 16-16" stroke="#25D366" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/><circle cx="60" cy="60" r="10" fill="#FFF3E0" stroke="#F5A623" stroke-width="1.2"/><text x="60" y="64" font-size="10" fill="#E8712C" font-weight="800" text-anchor="middle" font-family="Arial">R</text></svg></div><span class="illustration-label">Registered</span><span class="step-number-large">06</span></div></div></div>

        </div>
    </div>
</section>

<!-- SECTION 8: DOCUMENTS REQUIRED -->
<section class="content-section" id="documents-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Documents Required for Trademark Registration in Bangalore</h2>
            <div class="content-text">
                
                <ul><li><strong>PAN Card:</strong> Of applicant (individual or entity).</li><li><strong>Identity proof:</strong> Aadhaar, Passport, or Voter ID.</li><li><strong>Address proof:</strong> Utility bill or rental agreement for Bangalore business address.</li><li><strong>Trademark representation:</strong> Clear JPG image (min 8cm x 8cm, high resolution).</li><li><strong>Business registration:</strong> COI, LLP Agreement, Partnership Deed, or Udyam certificate.</li><li><strong>DPIIT Startup Certificate:</strong> For 50% fee rebate (Rs 4,500 instead of Rs 9,000/class).</li><li><strong>Proof of prior use:</strong> Invoices, packaging, website screenshots if claiming earlier user date.</li><li><strong>Form TM-48:</strong> Power of Attorney if filing through agent.</li></ul><p><strong>Bangalore-Specific Tip:</strong> SaaS companies at Electronic City and Whitefield should file in both Class 9 and Class 42 if product is available as both downloadable software and cloud-based service. Single class filing creates a protection gap.</p>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 9: CHALLENGES -->
<section class="content-section" id="challenges-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Common Trademark Registration Challenges in Bangalore</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Challenge</th><th>Impact</th><th>How Patron Accounting Solves It</th></tr></thead>
                    <tbody>
                        <tr><td>Wrong Class for IT/SaaS</td><td>Filing Class 9 when product is purely cloud-based (Class 42) leaves service unprotected</td><td>CA advises correct class based on delivery model; dual-class filing for hybrid products</td></tr><tr><td>Descriptive Brand Names</td><td>Registry objects to marks describing product function under Section 9</td><td>CA advises arbitrary/coined names with higher acceptance rate before filing</td></tr><tr><td>Delayed Opposition Response</td><td>Missing 2-month counter-statement deadline abandons the application</td><td>CA monitors all deadlines and files counter-statement within window</td></tr><tr><td>Not Filing on Day One</td><td>Competitor files similar mark first; priority date determines ownership</td><td>Same-day filing recommended alongside company incorporation</td></tr><tr><td>Ignoring International Protection</td><td>Competitor registers similar mark in target country blocking expansion</td><td>Madrid Protocol filing for global Bangalore SaaS companies</td></tr>

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
            <h2 class="section-title">Trademark Registration Fees in Bangalore</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Fee Component</th><th>Amount</th></tr></thead>
                    <tbody>
                        <tr><td>Govt Fee - Individual/Startup/MSME (per class)</td><td>Rs 4,500 (e-filing)</td></tr><tr><td>Govt Fee - Company/LLP (per class)</td><td>Rs 9,000 (e-filing)</td></tr><tr><td>Physical Filing Surcharge</td><td>+Rs 500/class</td></tr><tr><td>Professional Fees (CA/TM agent)</td><td>Rs 3,000 - Rs 8,000</td></tr><tr><td>Objection Response (if needed)</td><td>Rs 3,000 - Rs 5,000 additional</td></tr><tr><td>Total (single class, uncontested)</td><td>Rs 7,500 - Rs 17,000</td></tr><tr><td>Patron Accounting Professional Fees</td><td>INR Govt fee 4,500 + 2,499 (Exl GST and Govt. Charges)</td></tr>

                    </tbody>
                </table>
                </div>
                <p style="margin-top:16px;font-size:13px;color:var(--text-muted);font-style:italic;">All fees and charges listed are indicative only and do not constitute a binding offer. Final amounts may vary depending on the volume of work and the complexity involved.</p>
                <p style="margin-top:16px;">Professional service charges for drafting, filing, and representation are separate from the statutory fees. The exact fee depends on the complexity of the case, disputed amount, and number of hearings required. Contact us for a detailed quote.</p>
                <p style="margin-top:16px;"><strong>Get a free Trademark Registration in Bangalore consultation - <a href="tel:+919459456700">Call +91 945 945 6700</a> or <a href="https://wa.me/919459456700?text=Hello%2C%20I%20just%20visited%20your%20Trademark%20Registration%20in%20Bangalore%20page.%20I%20would%20like%20to%20know%20more%20about%20it." target="_blank" rel="noopener">WhatsApp us</a>. No-obligation assessment.</strong></p>
            </div>
        </div>
    </div>
</section>

<!-- SECTION 11: TIMELINE -->
<section class="content-section" id="timeline-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Trademark Registration Timeline in Bangalore</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Stage</th><th>Estimated Timeline</th></tr></thead>
                    <tbody>
                        <tr><td>Trademark Search</td><td>1 day</td></tr><tr><td>Application Drafting + Filing</td><td>1-2 days</td></tr><tr><td>TM Symbol Usage</td><td>Immediately after filing</td></tr><tr><td>Examination by Registry Chennai</td><td>4-6 months</td></tr><tr><td>Objection Response (if needed)</td><td>30-60 days from notice</td></tr><tr><td>Trademark Journal Publication</td><td>4 months opposition window</td></tr><tr><td>Registration Certificate</td><td>1-2 months after publication</td></tr><tr><td>Total (Uncontested)</td><td>8-12 months</td></tr>

                    </tbody>
                </table>
                </div>
                <div class="highlight-box" style="margin-top:16px;">
                    
                    <p><strong>City Processing Note:</strong> No visit to the Trademark Registry in Chennai is required. Your dedicated CA/expert from Patron's pan-India team handles the entire filing process online through ipindiaonline.gov.in. All communication with the Registry is managed digitally.</p>

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
            <h2 class="section-title">Why Choose Patron for Trademark Registration in Bangalore</h2>
        </div>
        <div class="features-grid"><article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M13 10V3L4 14h7v7l9-11h-7z"/></svg></div><h3 class="feature-title">1-2 Day Filing</h3><p class="feature-text">Application drafted and filed on ipindiaonline.gov.in within 1-2 days. TM symbol usable immediately.</p></article><article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/></svg></div><h3 class="feature-title">IT/SaaS Class Expertise</h3><p class="feature-text">Class 9 vs 42 distinction for Bangalore SaaS ecosystem. Prevents costly reclassification errors.</p></article><article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><h3 class="feature-title">DPIIT 50% Rebate</h3><p class="feature-text">Startup fee rebate integrated - Rs 4,500 instead of Rs 9,000 per class for DPIIT/MSME businesses.</p></article><article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 104 0 2 2 0 012-2h1.064M15 20.488V18a2 2 0 012-2h3.064M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><h3 class="feature-title">Madrid Protocol</h3><p class="feature-text">International trademark extension to 130+ countries for Bangalore startups expanding to US/EU/UK markets.</p></article><article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"/></svg></div><h3 class="feature-title">All 5 Registries</h3><p class="feature-text">4-office infrastructure with experience across Mumbai, Delhi, Kolkata, Chennai, Ahmedabad Registries.</p></article><article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg></div><h3 class="feature-title">End-to-End Protection</h3><p class="feature-text">Search + filing + objection + opposition + certificate + renewal. Complete brand lifecycle managed.</p></article></div>
    </div>
</section>

<!-- SECTION 12A: SOCIAL PROOF -->
<section class="content-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Trusted by 10,000+ Businesses Across India</h2>
            <div class="content-text">
                
                <p><strong>10,000+ Businesses Served | 4.9 Google Rating | 50,000+ Documents Filed | 15+ Years Experience</strong></p><blockquote style="border-left:4px solid var(--orange);padding:16px 20px;background:var(--orange-lighter);border-radius:0 var(--radius-md) var(--radius-md) 0;margin:20px 0;"><p style="font-style:italic;margin-bottom:8px;">"Our trademark was filed and registered within the timeline Patron promised. No surprises."</p><p style="font-weight:700;font-size:13px;color:var(--blue);">- Founder, D2C Brand, Bangalore</p></blockquote><blockquote style="border-left:4px solid var(--orange);padding:16px 20px;background:var(--orange-lighter);border-radius:0 var(--radius-md) var(--radius-md) 0;margin:20px 0;"><p style="font-style:italic;margin-bottom:8px;">"Patron handled our Pvt Ltd registration end-to-end. Zero paperwork hassle."</p><p style="font-weight:700;font-size:13px;color:var(--blue);">- Startup Founder, Pune</p></blockquote>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 13: SELF-FILING vs PROFESSIONAL COMPARISON -->
<section class="content-section" id="comparison-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Patron vs Local IP Firms in Bangalore</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Factor</th><th>Patron Accounting</th><th>Local IP Firm</th></tr></thead>
                    <tbody>
                        <tr><td>Filing Speed</td><td>1-2 days</td><td>5-7 days typical</td></tr><tr><td>Class Advisory</td><td>SaaS/IT-specific Class 9 vs 42 expertise</td><td>Generic class suggestions</td></tr><tr><td>DPIIT Rebate</td><td>50% fee integration for startups</td><td>Often overlooked</td></tr><tr><td>Post-Filing</td><td>Objection + opposition + renewal managed</td><td>Filing only</td></tr><tr><td>International</td><td>Madrid Protocol support for global expansion</td><td>Not offered</td></tr><tr><td>Pricing</td><td>Transparent, upfront</td><td>Variable billing</td></tr>

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
                
                <p>Complete your brand and business protection:</p><ul><li><a href="/trademark-registration"><strong>Trademark Registration India</strong></a> - National overview</li><li><a href="/startup-registration">Startup India Registration</a> - DPIIT for 50% trademark rebate</li><li><a href="/private-limited-company-registration">Pvt Ltd Registration</a> - Company incorporation</li><li><a href="/llp-incorporation">LLP Registration</a> - LLP for startups</li><li><a href="/gst-registration">GST Registration</a> - GSTIN compliance</li><li><a href="/udyam-registration">Udyam Registration</a> - MSME for TM fee rebate</li></ul>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 15A: LEGAL FRAMEWORK -->
<section class="content-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Trademark Registration - Legal Framework</h2>
            <div class="content-text">
                
                <p><strong>Governing Act:</strong> Trade Marks Act, 1999 + Trade Marks Rules, 2017</p><p><strong>Key Sections:</strong> Section 9 (absolute refusal grounds), Section 11 (relative grounds), Section 18 (application), Section 25 (duration/renewal), Section 29 (infringement), Section 103 (criminal penalty)</p><p><strong>Registry:</strong> Trademark Registry, Chennai - IPO Building, Guindy, Chennai-600032 (jurisdiction: Karnataka, TN, AP, Telangana, Kerala)</p><p><strong>Portal:</strong> <a href="https://ipindiaonline.gov.in" target="_blank" rel="noopener">ipindiaonline.gov.in</a> (e-filing) + public search portal</p><p><strong>Fees:</strong> Rs 4,500/class (individuals, DPIIT, MSMEs) | Rs 9,000/class (companies). Renewal: Rs 5,000-10,000 every 10 years.</p><p><strong>Infringement Penalty:</strong> Section 103 - imprisonment 6 months to 3 years, fine Rs 50,000 to Rs 2,00,000.</p>

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
                    <h2 class="faq-expanded__title">FAQs - Trademark Registration in Bangalore</h2>
                    <p class="faq-expanded__lead">Common questions about trademark filing, classes, and brand protection for Bangalore businesses</p>
                    @include('partials.bigin-form', [
                        'variant'  => 'compact',
                        'service'  => 'Trademark Registration in Bangalore',
                        'city'     => 'Bangalore',
                    ])
                </aside>
                <div class="faq-expanded__list">
                    <div class="faq-expanded__item" id="faq-1">
                        <h3 class="faq-expanded__q">Which Trademark Registry handles Bangalore applications?</h3>
                        <div class="faq-expanded__a"><p>Trademark Registry Chennai at IPO Building, Guindy, Chennai-600032 processes all Karnataka applications. Filing is online through ipindiaonline.gov.in - applications auto-routed to Chennai. No physical visit required.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-2">
                        <h3 class="faq-expanded__q">Can I file a trademark online from Bangalore?</h3>
                        <div class="faq-expanded__a"><p>Yes. 100% online through ipindiaonline.gov.in. Form TM-A filing to objection responses and virtual hearings - all digital. Patron's team handles the complete process remotely.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-3">
                        <h3 class="faq-expanded__q">How much does trademark registration cost in Bangalore?</h3>
                        <div class="faq-expanded__a"><p>Govt fee Rs 4,500/class for individuals, DPIIT startups, MSMEs. Rs 9,000/class for companies/LLPs. Professional fees Rs 3,000-8,000. Fees are per class - multiple classes multiply the cost.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-4">
                        <h3 class="faq-expanded__q">How long does trademark registration take in Bangalore?</h3>
                        <div class="faq-expanded__a"><p>8-12 months for uncontested applications. Includes examination (4-6 months), Trademark Journal publication (4 months opposition window), and certificate issuance. With opposition: 12-18 months.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-5">
                        <h3 class="faq-expanded__q">Which class should a Bangalore SaaS company file under?</h3>
                        <div class="faq-expanded__a"><p>Class 9 for downloadable/installable software. Class 42 for cloud-based SaaS accessed via browser. Many Bangalore IT companies should file both classes for complete protection.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-6">
                        <h3 class="faq-expanded__q">Do DPIIT startups get a fee discount on trademark registration?</h3>
                        <div class="faq-expanded__a"><p>Yes. DPIIT-recognized startups pay Rs 4,500/class instead of Rs 9,000 - a 50% rebate. MSME/Udyam businesses also qualify. Include DPIIT certificate in the application.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-7">
                        <h3 class="faq-expanded__q">Can I use the TM symbol immediately after filing?</h3>
                        <div class="faq-expanded__a"><p>Yes. TM symbol (goods) or SM symbol (services) can be used immediately after filing. The registered R symbol can only be used after the Registration Certificate is issued. Using R before registration is an offence.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-8">
                        <h3 class="faq-expanded__q">Can a Bangalore startup extend trademark protection internationally?</h3>
                        <div class="faq-expanded__a"><p>Yes. India is a Madrid Protocol member. Once you have an Indian application or registration, file an international application through WIPO to extend to 130+ countries. Critical for SaaS companies serving US/EU markets.</p></div>
                    </div>
                </div>
            </div>


            <!-- Quick Answers -->
            <div class="highlight-box" style="margin-top:32px;">
                <p><strong>Quick Answers</strong></p>
                <p><strong>Bangalore mein trademark registration kaise karein?</strong> IP India portal par Form TM-A file karke. Brand name/logo ka image, PAN, business registration chahiye. Filing 1-2 din, registration 8-12 mahine.</p><p><strong>Kitna kharcha?</strong> Govt fee Rs 4,500/class (startups) ya Rs 9,000 (companies). CA charge Rs 3,000-8,000.</p><p><strong>Kya TM turant use kar sakte hain?</strong> Haan. Filing ke baad TM symbol use kar sakte hain. R symbol tabhi jab certificate mil jaaye.</p>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 18: URGENCY CTA -->
<section class="content-section" style="background: var(--orange-lighter) !important; border-left: 4px solid var(--orange);">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Protect Your Brand Before Someone Else Files</h2>
            <div class="content-text">
                
                <p>In Bangalore's hyper-competitive ecosystem, every day without trademark filing means your brand is vulnerable. A competitor can file an identical mark - the priority date determines ownership. DPIIT startups filing now save 50% on government fees.</p><p><strong>Get trademark registration from Bangalore. <a href="tel:+919459456700">Call +91 945 945 6700</a> or <a href="https://wa.me/919459456700?text=Hello%2C%20I%20just%20visited%20your%20Trademark%20Registration%20in%20Bangalore%20page.%20I%20would%20like%20to%20know%20more%20about%20it." target="_blank" rel="noopener">WhatsApp us</a>.</strong></p>

            </div>
        </div>
    </div>
</section>

<!-- CONCLUSION + CTA BLOCK (Dark) -->
<section class="content-section" style="background: var(--blue) !important;">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title" style="color:#FFFFFF !important;">Get Trademark Registration in Bangalore - Start Today</h2>
            <div class="content-text" style="text-align:left;">
                
                <p style="color:rgba(255,255,255,0.85);">Trademark registration in Bangalore is essential brand protection for 75,000+ startups, IT companies, D2C brands, and professional services firms. The Trade Marks Act 1999 provides pan-India protection for 10 years. All applications processed by Trademark Registry Chennai.</p><p style="color:rgba(255,255,255,0.85);">Patron Accounting's pan-India CA team handles the complete process - from Class 9 vs 42 advisory to Madrid Protocol international filing - backed by 15+ years and offices in Pune, Mumbai, Delhi, Gurugram.</p><p style="color:rgba(255,255,255,0.85);">Patron Accounting LLP - 10,000+ businesses, 4.9 Google rating, 50,000+ documents filed.</p>

            </div>
            <div style="display:flex;gap:14px;flex-wrap:wrap;margin-top:24px;">
                <a href="tel:+919459456700" style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:var(--orange);color:#fff;border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#128222; Call +91 945 945 6700</a>
                <a href="https://wa.me/919459456700?text=Hello%2C%20I%20just%20visited%20your%20Trademark%20Registration%20in%20Bangalore%20page.%20I%20would%20like%20to%20know%20more%20about%20it." target="_blank" style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:#25D366;color:#fff;border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;" rel="noopener">&#128172; WhatsApp Us</a>
                <a href="mailto:sales@patronaccounting.com?subject=Enquiry%20for%20Trademark%20Registration%20in%20Bangalore&body=Hello%2C%20I%20just%20visited%20your%20Trademark%20Registration%20in%20Bangalore%20page.%20I%20would%20like%20to%20know%20more%20about%20it.%0A%0AThank%20you." style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:transparent;color:#fff;border:2px solid rgba(255,255,255,0.3);border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#9993;&#65039; Email Us</a>
            </div>
            <p style="color:rgba(255,255,255,0.7);font-size:13px;margin-top:16px;">Book a Free Consultation - No Obligation.</p>
        </div>
    </div>
</section>

<!-- GSTAT STATE BENCH CITY PAGES (32 Pages) -->
<section class="content-section" style="padding:48px 32px;background:var(--gray-50);">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title" style="text-align:center;margin-bottom:12px;">Trademark Registration Across Major Cities</h2>
            <p style="text-align:center;color:var(--text-muted);font-size:15px;margin-bottom:40px;">Patron Accounting provides CA-assisted trademark registration in all major cities across India</p>
       
            <div class="pa-city-block" style="margin-bottom:40px;"><div class="pa-city-grid">
<a href="/trademark-registration/pune" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Pune</div><div class="pa-card-sub">Maharashtra</div></div></a>
<a href="/trademark-registration/mumbai" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Mumbai</div><div class="pa-card-sub">Maharashtra</div></div></a>
<a href="/trademark-registration/delhi" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Delhi</div><div class="pa-card-sub">Delhi NCR</div></div></a>
<a href="/trademark-registration/gurugram" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Gurugram</div><div class="pa-card-sub">Haryana</div></div></a>
<div class="pa-city-card" style="opacity:0.6;pointer-events:none;border:2px solid var(--orange);position:relative;"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Bangalore</div><div class="pa-card-sub">Karnataka</div></div><span style="position:absolute;top:6px;right:8px;font-size:10px;color:var(--orange);font-weight:700;text-transform:uppercase;letter-spacing:0.5px;">You're here</span></div>
<a href="/trademark-registration/hyderabad" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Hyderabad</div><div class="pa-card-sub">Telangana</div></div></a>
<a href="/trademark-registration/chennai" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Chennai</div><div class="pa-card-sub">Tamil Nadu</div></div></a>
<a href="/trademark-registration/kolkata" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Kolkata</div><div class="pa-card-sub">West Bengal</div></div></a>
</div></div>
<div class="pa-city-block"><div class="pa-block-title">Related Services</div><div class="pa-block-sub">End-to-end startup and compliance in Bangalore</div><div class="pa-cross-grid">
<a href="/gst-registration/bangalore" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">GST Registration</div><div class="pa-card-sub">Bangalore</div></div></a>
<a href="/private-limited-company-registration/bangalore" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Pvt Ltd Registration</div><div class="pa-card-sub">Bangalore</div></div></a>
<a href="/llp-incorporation/bangalore" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">LLP Registration</div><div class="pa-card-sub">Bangalore</div></div></a>
<a href="/startup-registration/bangalore" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Startup Registration</div><div class="pa-card-sub">Bangalore</div></div></a>
<a href="/udyam-registration/bangalore" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Udyam Registration</div><div class="pa-card-sub">Bangalore</div></div></a>
<a href="/fssai-registration/bangalore" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">FSSAI Registration</div><div class="pa-card-sub">Bangalore</div></div></a>
</div></div>
        </div>
    </div>
</section>

<!-- CONTENT FRESHNESS FOOTER -->
<section class="content-section" style="padding:32px;">
    <div class="content-container">
        <div class="text-content" style="font-size:13px;color:var(--text-muted);">
            <p><strong>Content Created:</strong> 15 April 2026 &nbsp;|&nbsp; <strong>Last Updated:</strong> <span id="lastUpdatedFooter">15 April 2026</span> &nbsp;|&nbsp; <strong>Next Review:</strong> 15 October 2026 &nbsp;|&nbsp; <strong>Reviewed By:</strong> CA &amp; CS Team, Patron Accounting LLP</p>
            <p>This content is reviewed every 6 months by our CA and CS team. Trade Marks Act provisions, fee schedules, and IP India portal updates are verified against ipindiaonline.gov.in.</p>
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
