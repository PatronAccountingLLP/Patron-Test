
@extends('layouts.service-app')

<!-- External Dependencies (loaded by master layout in production) -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Barlow:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,400&family=DM+Sans:opsz,wght@9..40,400;9..40,500;9..40,600;9..40,700&display=swap" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

@section('meta')
    <title>12A &amp; 80G Registration in Kolkata – Form 10A &amp; NGO Tax</title>
    <meta name="description" content="CA-assisted 80G registration in Kolkata. Donor tax deductions for NGOs. Form 10A filing, donation certificates. Call +91 945 945 6700.">
    <link rel="canonical" href="/registration-for-12a-80g-certificate/kolkata">
    <meta name="robots" content="index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1">
    <meta property="og:title" content="12A &amp; 80G Registration in Kolkata – Form 10A &amp; NGO Tax">
    <meta property="og:description" content="CA-assisted 80G registration in Kolkata. Donor tax deductions for NGOs. Form 10A filing, donation certificates. Call +91 945 945 6700.">
    <meta property="og:url" content="/registration-for-12a-80g-certificate/kolkata">
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="Patron Accounting">
    <meta property="og:image" content="https://www.patronaccounting.com/images/og-default-square.png">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="1200">
    <meta property="og:image:type" content="image/png">
    <meta property="og:image:secure_url" content="https://www.patronaccounting.com/images/og-default-square.png">
    <meta property="og:image:alt" content="Patron Accounting - partner you can rely on">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="12A &amp; 80G Registration in Kolkata – Form 10A &amp; NGO Tax">
    <meta name="twitter:description" content="CA-assisted 80G registration in Kolkata. Donor tax deductions for NGOs. Form 10A filing, donation certificates. Call +91 945 945 6700.">
    <meta name="twitter:image" content="https://www.patronaccounting.com/images/og-default-square.png">
@endsection

@section('schema')
    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@graph": [
        {
          "@type": "Service",
          "name": "80G Registration Services in Kolkata",
          "description": "CA-assisted 80G registration in Kolkata. Donor tax deductions for NGOs. Form 10A filing, donation certificates. Call +91 945 945 6700.",
          "url": "https://www.patronaccounting.com/registration-for-12a-80g-certificate/kolkata",
          "serviceType": "80G Registration Services in Kolkata",
          "areaServed": {
            "@type": "City",
            "name": "Kolkata"
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
            "url": "https://www.patronaccounting.com/registration-for-12a-80g-certificate/kolkata",
            "price": "3000"
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
              "name": "80G Registration",
              "item": "https://www.patronaccounting.com/80g-registration"
            },
            {
              "@type": "ListItem",
              "position": 3,
              "name": "80G Registration in Kolkata",
              "item": "https://www.patronaccounting.com/registration-for-12a-80g-certificate/kolkata"
            }
          ]
        },
        {
          "@type": "FAQPage",
          "mainEntity": [
            {
              "@type": "Question",
              "name": "Which IT office handles 80G for Kolkata NGOs?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "The Principal Commissioner of Income Tax (Exemptions), Kolkata handles all 80G applications for West Bengal NGOs. Applications are filed online through the IT e-filing portal."
              }
            },
            {
              "@type": "Question",
              "name": "Can I apply for 80G online from Kolkata?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "Yes. Form 10A (provisional) and Form 10AB (regular) are filed 100% online through the IT e-filing portal. No physical visit required."
              }
            },
            {
              "@type": "Question",
              "name": "What is the cost of 80G registration in Kolkata?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "No government fee. Professional fees start from Rs 5,999 for provisional 80G including eligibility check, filing, and donation receipt setup."
              }
            },
            {
              "@type": "Question",
              "name": "How much deduction do donors get under 80G?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "Most Kolkata NGOs qualify for 50% deduction with 10% qualifying limit. Donors contributing Rs 1 lakh get Rs 50,000 deduction. Cash above Rs 2,000 does not qualify."
              }
            },
            {
              "@type": "Question",
              "name": "Is 12A registration needed before applying for 80G?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "Yes. 12A registration is a mandatory prerequisite for 80G. The IT e-filing portal requires a valid 12A URN before accepting the 80G application."
              }
            },
            {
              "@type": "Question",
              "name": "What is Form 10BD and Form 10BE?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "Form 10BD is the annual statement of all donations received, filed by May 31. Form 10BE is the individual certificate issued to each donor by May 31. Non-filing of 10BD attracts Rs 200 per day penalty."
              }
            },
            {
              "@type": "Question",
              "name": "How long does 80G registration take in Kolkata?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "Provisional 80G (Form 10A) is processed within 1 month. Regular 80G (Form 10AB) takes 1 to 6 months depending on PCIT review."
              }
            },
            {
              "@type": "Question",
              "name": "Can a Durga Puja committee in Kolkata get 80G?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "Yes, if the committee is registered as a trust or society under the WB Societies Registration Act, 1961 and has obtained 12A registration."
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
                        80G Registration in Kolkata - CA-Assisted Donor Tax Deductions for NGOs
                    </h1>

                    <div class="expert-attribution-box">
                        <span class="eab-check"><svg width="16" height="16" viewBox="0 0 24 24" fill="currentColor"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg></span>
                        <span class="eab-title">Reviewed by CA and CS Team, Patron Accounting LLP</span>
                        <span class="eab-meta">
                            <span>ICAI & ICSI Registered</span><span class="eab-sep">|</span>
                            <span>15+ Years Experience</span><span class="eab-sep">|</span>
                            <span>Last Updated: <span id="lastUpdated">08 April 2026</span></span>
                        </span>
                        <a href="#" class="eab-link">Verify Credentials &rarr;</a>
                    </div>

                    <div class="mb-4">
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Documents:</span> 12A certificate, PAN, registration certificate, financials, donor list</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Fees:</span> Starting Rs 5,999 (no government fee)</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Eligibility:</span> 12A-registered trusts, societies, Section 8 companies</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Timeline:</span> Provisional: 7-15 days | Regular: 1-6 months</p>
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
                        <a href="https://wa.me/919459456700?text=Hello%2C%20I%20just%20visited%20your%2080G%20Registration%20in%20Kolkata%20page.%20I%20would%20like%20to%20know%20more%20about%20it." target="_blank" class="btn-sample text-decoration-none" rel="noopener">
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
                                            'service'  => '80G Registration Kolkata',
                                            'city'     => 'Kolkata',
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
            <a href="#overview-section" class="toc-btn">Overview</a>
                <a href="#what-is-section" class="toc-btn">What is 80G</a>
                <a href="#who-section" class="toc-btn">Who Needs It</a>
                <a href="#services-section" class="toc-btn">Services</a>
                <a href="#procedure-section" class="toc-btn">Process</a>
                <a href="#documents-section" class="toc-btn">Documents</a>
                <a href="#challenges-section" class="toc-btn">Challenges</a>
                <a href="#fees-section" class="toc-btn">Fees</a>
                <a href="#timeline-section" class="toc-btn">Timeline</a>
                <a href="#benefits-section" class="toc-btn">Benefits</a>
                <a href="#comparison-section" class="toc-btn">Comparison</a>
                <a href="#faq-section" class="toc-btn">FAQs</a>
        </div>
        <button class="toc-arrow right" id="tocRight">&#10095;</button>
    </div>
</div>

<!-- SECTION 2: OVERVIEW / INTRO + TL;DR -->
<section class="content-section" id="overview-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">80G Registration in Kolkata - Overview</h2>
            <div class="content-text">
                <div class="highlight-box" style="margin-bottom:20px;">
                    <p><strong>&#128204; TL;DR - 80G Registration in Kolkata Services at a Glance</strong></p>
                    <p><p>80G registration in Kolkata enables NGOs to provide tax deduction benefits to their donors under Section 80G of the Income Tax Act, 1961. When a donor contributes to an 80G-registered organisation, they can claim 50% or 100% of the donation as a deduction from their taxable income. 80G is filed through the IT e-filing portal with the PCIT (Exemptions), Kolkata. 12A registration is a mandatory prerequisite.</p></p>
                </div>
                <p><p>For Kolkata NGOs, 80G registration is the key to unlocking a sustainable donor base. IT companies in Salt Lake Sector V and New Town with CSR budgets, BFSI firms in Dalhousie channelling philanthropic contributions, high-net-worth individuals along Park Street and Ballygunge making personal donations, and community members contributing to Durga Puja committees - all of these donors are more likely to give (and give more) when they can claim a tax deduction under Section 80G. Learn more about <a href="/80g-registration">80G Registration across India</a>.</p></p>
                <p><p>The Principal Commissioner of Income Tax (Exemptions), Kolkata processes all 80G applications for West Bengal. Post the Finance Act, 2020, new NGOs receive provisional 80G (3 years) via Form 10A, and existing NGOs must renew every 5 years via Form 10AB. Annual compliance includes filing Form 10BD (statement of donations) and issuing Form 10BE (donation certificate) to each donor by May 31. A CA-managed service ensures the 80G application is approved, donation receipts are correctly formatted, and annual compliance is maintained. After 80G registration, you may also need <a href="/income-tax-return">Income Tax Return filing</a> and <a href="/statutory-audit">Statutory Audit</a> services.</p></p>
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
                <h2 class="section-title">What is 80G Registration?</h2>
                <div class="content-text what-is-definition">
                    
                    <p>80G registration is the process of obtaining certification under Section 80G of the Income Tax Act, 1961 that enables donors to claim tax deduction on donations made to the registered charitable trust, society, or Section 8 company.</p>
                <p>Section 80G provides that any person - individual, HUF, company, or firm - making a donation to an approved institution can deduct a portion of the donation from their gross total income while computing taxable income. The deduction is either 50% or 100% of the donated amount, depending on the category of the institution and the nature of the fund. For most charitable organisations, donors get 50% deduction subject to a qualifying limit of 10% of their adjusted gross total income.</p>
                <p>For Kolkata NGOs - whether an education foundation in Jadavpur seeking corporate CSR contributions from Salt Lake IT companies, a healthcare trust near EM Bypass attracting donations from pharmaceutical firms in Dalhousie, a Sundarbans conservation society receiving contributions from environmentally conscious HNIs in Park Street and Ballygunge, or a Durga Puja committee soliciting community donations across North and South Kolkata - 80G registration directly impacts fundraising capacity. Donors are significantly more willing to contribute when they know the donation reduces their tax liability.</p>
                <p>80G registration requires 12A registration as a prerequisite. Without 12A, the NGO cannot apply for 80G. Together, 12A (income tax exemption for the NGO) and 80G (tax deduction for donors) form the twin pillars of NGO financial sustainability.</p>

                </div>
                <div class="highlight-box" style="margin-top:20px;">
                    <p><strong>Key Terms for 80G Registration in Kolkata:</strong></p>
                    <ul>
                    <li><strong>Section 80G:</strong> Provision under the Income Tax Act allowing donors to claim deductions on charitable donations</li>
                    <li><strong>Form 10A:</strong> Application for provisional 80G registration (new NGOs, valid 3 years)</li>
                    <li><strong>Form 10AB:</strong> Application for regular/renewal 80G registration (valid 5 years)</li>
                    <li><strong>Form 10BD:</strong> Annual statement of donations received, due May 31</li>
                    <li><strong>Form 10BE:</strong> Individual donation certificate issued to each donor, due May 31</li>
                    <li><strong>PCIT (Exemptions):</strong> Principal Commissioner of Income Tax (Exemptions), Kolkata - the approving authority</li>
                    <li><strong>URN:</strong> 16-digit Unique Registration Number issued with the 80G certificate</li>
                    <li><strong>Qualifying Limit:</strong> 10% of adjusted gross total income - maximum donation eligible for 80G deduction</li>
                </ul>

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
                            <text x="100" y="170" font-size="10" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial, sans-serif">80G Registration in Kolkata</text>
                        </svg>
                    </div>
                    <div class="illustration-badge">
                        <span>Tax Benefit</span>
                        <strong>80G Certificate</strong>
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
            <h2 class="section-title">Who Needs 80G Registration in Kolkata?</h2>
            <div class="content-text">
                
                <p>Every 12A-registered charitable trust, society, and Section 8 company in Kolkata that receives or plans to receive donations should apply for 80G registration. Without 80G, the NGO loses its competitive edge in attracting donors.</p>
                <ul>
                    <li><strong>Education NGOs</strong> in Jadavpur, South Kolkata, and Gariahat need 80G to attract individual donors and corporate CSR teams from Salt Lake Sector V IT companies</li>
                    <li><strong>Healthcare organisations</strong> near EM Bypass and Salt Lake need 80G to receive donations from pharmaceutical companies, hospital chains, and individual doctors</li>
                    <li><strong>Environmental groups</strong> working on Sundarbans conservation need 80G to attract domestic donors (for foreign donations, FCRA is separately required)</li>
                    <li><strong>Durga Puja committees</strong> across Kolkata - from Bhowanipore and Deshapriya Park to Howrah and Dum Dum - benefit from 80G when they receive high-value donations</li>
                    <li><strong>Cultural societies</strong> on College Street and Park Street organising literary festivals and Bengali heritage programmes need 80G for corporate sponsorship</li>
                    <li><strong>Section 8 companies</strong> established as CSR implementation arms of Kolkata corporates must have 80G to issue tax-deductible donation receipts</li>
                </ul>
                <p>CSR-1 registration on the MCA portal (for receiving CSR funds under Section 135) is also recommended alongside 80G for complete donor readiness.</p>

            </div>
            </div>
        </div>
    </div>
</section>

<!-- SECTION 5: OUR SERVICES -->
<section class="content-section" id="services-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">80G Registration Services Included</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Service</th><th>What We Do</th></tr></thead>
                    <tbody>
                        <tr><td>80G Provisional Registration (Form 10A)</td><td>For newly incorporated 12A-registered NGOs. Filed on the IT e-filing portal. Provisional 80G granted within 1 month with 16-digit URN. Valid for 3 years.</td></tr>
                        <tr><td>80G Regular Registration (Form 10AB)</td><td>For NGOs with provisional 80G nearing expiry or existing NGOs requiring renewal. Filed 6 months before expiry. PCIT (Exemptions), Kolkata reviews activities and financials. Valid for 5 years.</td></tr>
                        <tr><td>80G Deduction Category Assessment</td><td>CA determines whether the Kolkata NGO qualifies for 100% deduction without limit, 100% with qualifying limit, 50% without limit, or 50% with qualifying limit.</td></tr>
                        <tr><td>Donation Receipt System Setup</td><td>80G donation receipt format with all mandatory fields: donor name, PAN, amount, date, payment mode, 80G registration number, validity period, and unique receipt number.</td></tr>
                        <tr><td>Form 10BD Filing (Annual)</td><td>Annual statement of all donations received during the financial year. Filed on the IT e-filing portal by May 31. Non-filing attracts Rs 200 per day penalty under Section 271K.</td></tr>
                        <tr><td>Form 10BE Issuance</td><td>Certificate issued to each donor by May 31 confirming donation details and 80G registration. Donors use this to claim deduction in their ITR.</td></tr>
                        <tr><td>PCIT Query Resolution</td><td>The CA drafts detailed responses to PCIT (Exemptions), Kolkata queries with programme documentation specific to Kolkata activities.</td></tr>
                        <tr><td>NITI Aayog DARPAN Registration</td><td>Increasingly required for 80G applicants. The CA files DARPAN alongside 80G.</td></tr>
                        <tr><td>80G Renewal Management</td><td>Automated reminders 6 months before expiry. Form 10AB filed with updated financials, activity report, and donation utilisation summary.</td></tr>

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
            <h2 class="section-title">80G Registration Process in Kolkata</h2>
            <p class="section-subtitle" style="text-align:left;max-width:100%;">Our CA team handles the complete 80G registration process for Kolkata NGOs - from eligibility check to annual compliance. No visit to the PCIT (Exemptions), Kolkata office is required.</p>
        </header>
        <div class="steps-container">
            <div class="step-card">
    <div class="step-content">
        <span class="step-badge">Step 1</span>
        <h3 class="step-title">Confirm 12A Registration and Eligibility</h3>
        <p class="step-description">The CA verifies that the Kolkata NGO has a valid 12A registration with the PCIT (Exemptions), Kolkata. The CA also confirms Section 80G(5) conditions: income applied for charitable purposes, no private benefit to trustees, and regular accounts maintained.</p>
        <div class="step-highlights">
            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>12A verification</span>
            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Section 80G(5) compliance check</span>
        </div>
    </div>
    <div class="step-visual">
        <div class="step-illustration">
            <div class="illustration-icon">
                <svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <rect x="20" y="10" width="80" height="60" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/>
                    <circle cx="60" cy="35" r="15" fill="#E8F5E9" stroke="#25D366" stroke-width="1.5"/>
                    <path d="M52 35l5 5 11-11" stroke="#25D366" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"/>
                    <line x1="30" y1="60" x2="90" y2="60" stroke="#14365F" stroke-width="1" opacity="0.3"/>
                </svg>
            </div>
            <span class="illustration-label">12A Check</span>
            <span class="step-number-large">01</span>
        </div>
    </div>
</div>

<div class="step-card">
    <div class="step-content">
        <span class="step-badge">Step 2</span>
        <h3 class="step-title">Prepare Documents and Donor Records</h3>
        <p class="step-description">The CA collects 12A certificate, PAN, NGO registration document (trust deed, society certificate from Registrar of Societies WB, or COI from RoC Kolkata), audited financial statements, activity report, donor list, bank statements, and NITI Aayog DARPAN ID.</p>
        <div class="step-highlights">
            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Complete document checklist</span>
            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Donation utilisation statement</span>
        </div>
    </div>
    <div class="step-visual">
        <div class="step-illustration">
            <div class="illustration-icon">
                <svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <rect x="15" y="5" width="90" height="70" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/>
                    <line x1="30" y1="25" x2="90" y2="25" stroke="#F5A623" stroke-width="3" stroke-linecap="round"/>
                    <line x1="30" y1="40" x2="80" y2="40" stroke="#14365F" stroke-width="2" stroke-linecap="round" opacity="0.3"/>
                    <line x1="30" y1="52" x2="70" y2="52" stroke="#14365F" stroke-width="2" stroke-linecap="round" opacity="0.3"/>
                </svg>
            </div>
            <span class="illustration-label">Documents</span>
            <span class="step-number-large">02</span>
        </div>
    </div>
</div>

<div class="step-card">
    <div class="step-content">
        <span class="step-badge">Step 3</span>
        <h3 class="step-title">File Form 10A for Provisional 80G</h3>
        <p class="step-description">For newly incorporated Kolkata NGOs with provisional 12A, Form 10A is filed online on the IT e-filing portal. The PCIT (Exemptions), Kolkata processes provisional 80G within 1 month, issuing a 16-digit URN in Form 10AC. Valid for 3 years.</p>
        <div class="step-highlights">
            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>100% online filing</span>
            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>No government fee</span>
        </div>
    </div>
    <div class="step-visual">
        <div class="step-illustration">
            <div class="illustration-icon">
                <svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <rect x="25" y="15" width="70" height="55" rx="8" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/>
                    <rect x="35" y="25" width="50" height="8" rx="2" fill="#E8712C" opacity="0.3"/>
                    <rect x="35" y="38" width="40" height="6" rx="2" fill="#14365F" opacity="0.15"/>
                    <rect x="35" y="50" width="30" height="6" rx="2" fill="#14365F" opacity="0.15"/>
                    <circle cx="85" cy="60" r="12" fill="#E8F5E9" stroke="#25D366" stroke-width="1.2"/>
                    <path d="M80 60l3 3 7-7" stroke="#25D366" stroke-width="2" stroke-linecap="round"/>
                </svg>
            </div>
            <span class="illustration-label">Form 10A</span>
            <span class="step-number-large">03</span>
        </div>
    </div>
</div>

<div class="step-card">
    <div class="step-content">
        <span class="step-badge">Step 4</span>
        <h3 class="step-title">File Form 10AB for Regular 80G</h3>
        <p class="step-description">For NGOs with provisional 80G nearing expiry, Form 10AB is filed 6 months before expiry. Requires 3 years of audited financials, donation register, and activity documentation. The PCIT conducts a thorough review.</p>
        <div class="step-highlights">
            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>PCIT query resolution</span>
            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Valid for 5 years</span>
        </div>
    </div>
    <div class="step-visual">
        <div class="step-illustration">
            <div class="illustration-icon">
                <svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <rect x="20" y="10" width="80" height="65" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/>
                    <circle cx="60" cy="30" r="10" fill="#FFF3E0" stroke="#F5A623" stroke-width="1.2"/>
                    <text x="60" y="34" font-size="10" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">10AB</text>
                    <line x1="35" y1="50" x2="85" y2="50" stroke="#14365F" stroke-width="1" opacity="0.2"/>
                    <line x1="35" y1="60" x2="75" y2="60" stroke="#14365F" stroke-width="1" opacity="0.2"/>
                </svg>
            </div>
            <span class="illustration-label">Form 10AB</span>
            <span class="step-number-large">04</span>
        </div>
    </div>
</div>

<div class="step-card">
    <div class="step-content">
        <span class="step-badge">Step 5</span>
        <h3 class="step-title">Receive 80G Certificate and Set Up Donation System</h3>
        <p class="step-description">Upon approval, the PCIT issues the 80G certificate with a 16-digit URN. The CA sets up the donation receipt system with all mandatory fields including donor PAN, payment mode verification, and 80G registration details.</p>
        <div class="step-highlights">
            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>16-digit URN certificate</span>
            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Receipt system setup</span>
        </div>
    </div>
    <div class="step-visual">
        <div class="step-illustration">
            <div class="illustration-icon">
                <svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <rect x="25" y="10" width="70" height="55" rx="6" fill="#E8F5E9" stroke="#25D366" stroke-width="1.5"/>
                    <path d="M48 35l8 8 16-16" stroke="#25D366" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/>
                    <rect x="30" y="55" width="60" height="15" rx="3" fill="#FFF3E0" stroke="#F5A623" stroke-width="1"/>
                    <text x="60" y="65" font-size="7" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">80G CERTIFICATE</text>
                </svg>
            </div>
            <span class="illustration-label">80G URN</span>
            <span class="step-number-large">05</span>
        </div>
    </div>
</div>

<div class="step-card">
    <div class="step-content">
        <span class="step-badge">Step 6</span>
        <h3 class="step-title">Annual Compliance - Form 10BD, Form 10BE, and Renewal</h3>
        <p class="step-description">Every financial year, the CA files Form 10BD (statement of all donations received) by May 31 and issues Form 10BE to each donor. The renewal Form 10AB is filed 6 months before expiry to ensure zero gap in 80G coverage.</p>
        <div class="step-highlights">
            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>10BD/10BE by May 31</span>
            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Proactive renewal</span>
        </div>
    </div>
    <div class="step-visual">
        <div class="step-illustration">
            <div class="illustration-icon">
                <svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <rect x="25" y="10" width="70" height="55" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/>
                    <circle cx="60" cy="35" r="18" fill="none" stroke="#E8712C" stroke-width="2"/>
                    <line x1="60" y1="22" x2="60" y2="35" stroke="#14365F" stroke-width="2" stroke-linecap="round"/>
                    <line x1="60" y1="35" x2="70" y2="40" stroke="#E8712C" stroke-width="2" stroke-linecap="round"/>
                    <text x="60" y="72" font-size="8" fill="#14365F" font-weight="600" text-anchor="middle" font-family="Arial">MAY 31</text>
                </svg>
            </div>
            <span class="illustration-label">Annual Filing</span>
            <span class="step-number-large">06</span>
        </div>
    </div>
</div>

        </div>
    </div>
</section>

<!-- SECTION 8: DOCUMENTS REQUIRED -->
<section class="content-section" id="documents-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Documents Required for 80G Registration in Kolkata</h2>
            <div class="content-text">
                
                <ul>
                    <li><strong>12A Registration Certificate:</strong> Mandatory prerequisite. Self-certified copy with URN.</li>
                    <li><strong>PAN Card of the NGO:</strong> The NGO's own PAN (not the founder's personal PAN).</li>
                    <li><strong>Registration Certificate:</strong> Trust Deed (trusts), Society Registration Certificate from Registrar of Societies WB (societies), COI from RoC Kolkata (Section 8 companies).</li>
                    <li><strong>Memorandum of Association / Trust Deed:</strong> With charitable objects qualifying under Section 2(15) of the IT Act.</li>
                    <li><strong>Audited Financial Statements (last 3 years):</strong> Required for regular 80G (Form 10AB). Shows income, expenditure, and fund utilisation.</li>
                    <li><strong>Donation Register / Donor List:</strong> List of donors with names, PAN, amounts, dates, and payment modes.</li>
                    <li><strong>Activity Report:</strong> Detailed description of how donations were utilised for charitable activities in Kolkata.</li>
                    <li><strong>NITI Aayog DARPAN ID:</strong> Unique ID from <a href="https://ngodarpan.gov.in" target="_blank" rel="noopener">ngodarpan.gov.in</a>. Increasingly required by PCIT.</li>
                    <li><strong>Bank Statements:</strong> Last 6-12 months showing donation receipts and programme expenditure.</li>
                    <li><strong>Self-Declaration:</strong> No portion of income/assets benefits any specific religious community; no private benefit to trustees/directors.</li>
                </ul>
                <p><strong>Kolkata-Specific Tip:</strong> For Kolkata NGOs receiving corporate CSR donations from IT companies in Salt Lake Sector V, include CSR agreement copies and fund utilisation certificates in the 80G application. The PCIT (Exemptions), Kolkata views structured CSR donor documentation favourably during regular 80G review.</p>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 9: CHALLENGES -->
<section class="content-section" id="challenges-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Common 80G Registration Challenges in Kolkata</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Challenge</th><th>Impact</th><th>How Patron Accounting Solves It</th></tr></thead>
                    <tbody>
                        <tr><td>Applying Without 12A</td><td>IT e-filing portal rejects 80G without valid 12A URN</td><td>CA ensures 12A is in place before initiating 80G application</td></tr>
                        <tr><td>Cash Donation Limit Confusion</td><td>Cash donations above Rs 2,000 do not qualify for 80G deduction</td><td>CA advises donors to use cheque, NEFT, or UPI for amounts above Rs 2,000</td></tr>
                        <tr><td>Form 10BD/10BE Non-Filing</td><td>Rs 200 per day penalty under Section 271K; donors cannot claim deductions</td><td>Patron files 10BD/10BE annually as part of the compliance package</td></tr>
                        <tr><td>Incorrect Deduction Category</td><td>Donors face ITR filing problems if NGO communicates wrong percentage</td><td>CA determines correct 80G category and prepares donor communication templates</td></tr>
                        <tr><td>80G Renewal Gaps</td><td>Donors cannot claim deductions during gap period</td><td>CA tracks expiry dates and files renewal 6 months in advance</td></tr>

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
            <h2 class="section-title">80G Registration Fees in Kolkata</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Fee Component</th><th>Amount</th></tr></thead>
                    <tbody>
                        <tr><td>Government Fee (Form 10A / 10AB)</td><td>Nil - No government fee for 80G filing</td></tr>
                        <tr><td>80G Provisional (Form 10A) - Professional Fee</td><td>Rs 5,999 - Rs 8,000</td></tr>
                        <tr><td>80G Regular (Form 10AB) - Professional Fee</td><td>Rs 8,000 - Rs 15,000</td></tr>
                        <tr><td>Donation Receipt System Setup</td><td>Rs 2,000 - Rs 3,000</td></tr>
                        <tr><td>Form 10BD + 10BE Annual Filing</td><td>Rs 3,000 - Rs 5,000 per year</td></tr>
                        <tr><td>80G Renewal (Form 10AB)</td><td>Rs 8,000 - Rs 12,000</td></tr>
                        <tr><td>Patron Accounting Professional Fees</td><td>INR 7,499 (Exl GST and Govt. Charges)</td></tr>

                    </tbody>
                </table>
                </div>
                <p style="margin-top:16px;font-size:13px;color:var(--text-muted);font-style:italic;">All fees and charges listed are indicative only and do not constitute a binding offer. Final amounts may vary depending on the volume of work and the complexity involved.</p>
                <p style="margin-top:16px;">Professional service charges for drafting, filing, and representation are separate from the statutory fees. The exact fee depends on the complexity of the case, disputed amount, and number of hearings required. Contact us for a detailed quote.</p>
                <p style="margin-top:16px;"><strong>Get a free 80G Registration in Kolkata consultation - <a href="tel:+919459456700">Call +91 945 945 6700</a> or <a href="https://wa.me/919459456700?text=Hello%2C%20I%20just%20visited%20your%2080G%20Registration%20in%20Kolkata%20page.%20I%20would%20like%20to%20know%20more%20about%20it." target="_blank" rel="noopener">WhatsApp us</a>. No-obligation assessment.</strong></p>
            </div>
        </div>
    </div>
</section>

<!-- SECTION 11: TIMELINE -->
<section class="content-section" id="timeline-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">80G Registration Timeline in Kolkata</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Stage</th><th>Estimated Timeline</th></tr></thead>
                    <tbody>
                        <tr><td>12A Verification + Document Prep</td><td>3-10 days (depending on provisional/regular)</td></tr>
                        <tr><td>Portal Filing (Form 10A/10AB)</td><td>Day 5-15</td></tr>
                        <tr><td>PCIT Processing (Provisional)</td><td>Within 1 month (auto-approval)</td></tr>
                        <tr><td>PCIT Processing (Regular)</td><td>1-6 months (detailed review)</td></tr>
                        <tr><td>Certificate Issuance</td><td>Within 1 month (provisional) / After PCIT approval (regular)</td></tr>
                        <tr><td>Donation System Setup</td><td>Day 30-35 (post-certificate)</td></tr>
                        <tr><td>Total - Provisional (New NGO)</td><td>7-35 working days</td></tr>
                        <tr><td>Total - Regular (Existing/Renewal)</td><td>1-6 months</td></tr>

                    </tbody>
                </table>
                </div>
                <div class="highlight-box" style="margin-top:16px;">
                    
                    <p><strong>City Processing Note:</strong> No visit to the PCIT (Exemptions), Kolkata office is required. Form 10A and Form 10AB are filed entirely online. Your dedicated CA/expert from Patron's pan-India team handles all filings, donation system setup, and annual Form 10BD/10BE compliance.</p>

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
            <h2 class="section-title">Why Choose Patron for 80G Registration in Kolkata</h2>
        </div>
        <div class="features-grid">
            <article class="feature-card">
                <div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/></svg></div>
                <h3 class="feature-title">CA-Managed Filing</h3>
                <p class="feature-text">Dedicated CA handles Form 10A/10AB filing, PCIT query resolution, and all documentation for Kolkata NGOs.</p>
            </article>
            <article class="feature-card">
                <div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div>
                <h3 class="feature-title">Deduction Category Assessment</h3>
                <p class="feature-text">CA determines correct 50%/100% deduction category and prepares donor communication templates to avoid ITR issues.</p>
            </article>
            <article class="feature-card">
                <div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2"/></svg></div>
                <h3 class="feature-title">Donation Receipt System</h3>
                <p class="feature-text">Complete receipt setup with all mandatory fields per Section 80G(5) - donor PAN, payment mode, registration number, validity.</p>
            </article>
            <article class="feature-card">
                <div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/></svg></div>
                <h3 class="feature-title">Annual 10BD/10BE Compliance</h3>
                <p class="feature-text">Form 10BD and 10BE filed annually by May 31. Rs 200/day penalty avoided. Donors receive certificates for ITR deductions.</p>
            </article>
            <article class="feature-card">
                <div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M4 4v5h.582m15.356 2A8.001 8.001 0 004.582 9m0 0H9m11 11v-5h-.581m0 0a8.003 8.003 0 01-15.357-2m15.357 2H15"/></svg></div>
                <h3 class="feature-title">Proactive Renewal</h3>
                <p class="feature-text">Automated reminders 6 months before expiry. Form 10AB filed with updated financials to ensure zero gap in 80G coverage.</p>
            </article>
            <article class="feature-card">
                <div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/><path d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/></svg></div>
                <h3 class="feature-title">Pan-India CA Team for Kolkata</h3>
                <p class="feature-text">Your file is handled by a CA familiar with PCIT (Exemptions), Kolkata. 10,000+ organisations served, 4.9 Google rating.</p>
            </article>
        </div>
    </div>
</section>

<!-- SECTION 12A: SOCIAL PROOF -->
<section class="content-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Trusted by 10,000+ Businesses Across India</h2>
            <div class="content-text">
                
                <p><strong>10,000+ Businesses Served | 4.9 Google Rating | 50,000+ Documents Filed | 15+ Years Experience</strong></p>
                <p>With offices in Pune, Mumbai, Delhi, and Gurugram, Patron serves Kolkata NGOs through its pan-India CA team.</p>
                <blockquote style="border-left:4px solid var(--orange);padding:16px 20px;background:var(--orange-lighter);border-radius:0 var(--radius-md) var(--radius-md) 0;margin:20px 0;">
                    <p style="font-style:italic;margin-bottom:8px;">"Patron handled our Pvt Ltd registration end-to-end. Zero paperwork hassle."</p>
                    <p style="font-weight:700;font-size:13px;color:var(--blue);">- Startup Founder, Pune</p>
                </blockquote>
                <blockquote style="border-left:4px solid var(--orange);padding:16px 20px;background:var(--orange-lighter);border-radius:0 var(--radius-md) var(--radius-md) 0;margin:20px 0;">
                    <p style="font-style:italic;margin-bottom:8px;">"We were facing ROC non-compliance notices. Patron sorted everything in 2 weeks."</p>
                    <p style="font-weight:700;font-size:13px;color:var(--blue);">- Director, Delhi</p>
                </blockquote>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 13: SELF-FILING vs PROFESSIONAL COMPARISON -->
<section class="content-section" id="comparison-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Patron vs NGO Consultants for 80G in Kolkata</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Factor</th><th>Patron Accounting</th><th>Typical NGO Consultant</th></tr></thead>
                    <tbody>
                        <tr><td>Service Model</td><td>CA-managed - files 80G, sets up donation system, handles 10BD/10BE annually</td><td>Files 80G form; no donation compliance support</td></tr>
                        <tr><td>Deduction Category</td><td>CA determines correct 50%/100% category; prepares donor communication templates</td><td>Often leaves category determination to the NGO</td></tr>
                        <tr><td>Form 10BD/10BE</td><td>Filed annually by May 31 as part of managed service; Rs 200/day penalty avoided</td><td>Not included; NGOs often unaware of requirement</td></tr>
                        <tr><td>Donation Receipt Design</td><td>CA designs receipt with all mandatory fields per Section 80G(5)</td><td>Generic template; may miss PAN or payment mode fields</td></tr>
                        <tr><td>Renewal Tracking</td><td>Automated reminders 6 months ahead; Form 10AB filed proactively</td><td>Client responsible; often gaps in 80G coverage</td></tr>
                        <tr><td>Track Record</td><td>10,000+ organisations; 4 offices; 15+ years</td><td>Limited non-profit compliance experience</td></tr>

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
                
                <p>Complete your NGO compliance with these related services:</p>
                <ul>
                    <li><a href="/80g-registration"><strong>80G Registration in India</strong></a> - National-level 80G registration overview and process</li>
                    
                    <li><a href="/ngo-registration">NGO Registration</a> - Trust, society, and Section 8 company registration</li>
                    <li>Society Registration - Society registration under state Acts</li>
                    <li><a href="/section8-company-registration">Section 8 Company Registration</a> - Non-profit company formation</li>
                    <li><a href="/income-tax-return">Income Tax Return Filing</a> - ITR filing for NGOs and trusts</li>
                    <li><a href="/statutory-audit">Statutory Audit</a> - Mandatory audit services for NGOs</li>
                </ul>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 15A: LEGAL FRAMEWORK -->
<section class="content-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">80G Registration - Legal and Compliance Framework</h2>
            <div class="content-text">
                
                <p><strong>Governing Sections:</strong> Section 80G IT Act - deduction for donations; Section 80G(5) - conditions for approval; Section 80G(5D) - cash donation limit Rs 2,000; Finance Act, 2020 - provisional/regular regime</p>
                <p><strong>Key Forms:</strong> Form 10A (provisional 80G); Form 10AB (regular/renewal); Form 10AC (provisional order); Form 10AD (regular order); Form 10BD (annual donation statement - due May 31); Form 10BE (donation certificate to each donor - due May 31)</p>
                <p><strong>Portal:</strong> IT e-filing portal - <a href="https://www.incometax.gov.in" target="_blank" rel="noopener">incometax.gov.in</a></p>
                <p><strong>Authority:</strong> Principal Commissioner of Income Tax (Exemptions), Kolkata</p>
                <p><strong>Section 80G(5) Conditions:</strong> (a) Income not applied for personal benefit of any trustee/director; (b) Institution maintained regular accounts; (c) If religious institution - expenditure for religious purposes only up to 5% of total income; (d) Institution registered under 12A; (e) No part of income enures directly or indirectly for the benefit of any person</p>
                <p><strong>Cash Donation Rule:</strong> Section 80G(5D) - Donations made in cash exceeding Rs 2,000 do not qualify for 80G deduction. Donors must contribute via cheque, bank transfer, NEFT, RTGS, or UPI for amounts above Rs 2,000.</p>
                <p><strong>Penalties:</strong> Non-filing Form 10BD: Rs 200 per day under Section 271K. Non-issuance of Form 10BE: donor cannot claim deduction; NGO reputation loss. Non-renewal: donors' deductions for interim period become invalid.</p>
                <p><strong>Validity:</strong> Provisional: 3 years. Regular: 5 years. Renewal: Form 10AB filed 6 months before expiry.</p>

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
                    <h2 class="faq-expanded__title">FAQs - 80G Registration in Kolkata</h2>
                    <p class="faq-expanded__lead">Common questions about 80G registration for Kolkata NGOs, trusts, and Section 8 companies</p>
                    @include('partials.bigin-form', [
                        'variant'  => 'compact',
                        'service'  => '80G Registration Kolkata',
                        'city'     => 'Kolkata',
                    ])
                </aside>
                <div class="faq-expanded__list">
                    <div class="faq-expanded__item" id="faq-1">
                        <h3 class="faq-expanded__q">Which IT office handles 80G registration for Kolkata NGOs?</h3>
                        <div class="faq-expanded__a"><p>The Principal Commissioner of Income Tax (Exemptions), Kolkata processes all 80G applications for West Bengal NGOs. Applications are filed online through the IT e-filing portal (incometax.gov.in). Patron's CA team files Form 10A/10AB and resolves all PCIT queries.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-2">
                        <h3 class="faq-expanded__q">Can I apply for 80G online from Kolkata?</h3>
                        <div class="faq-expanded__a"><p>Yes. 80G registration is filed 100% online through the IT e-filing portal. Form 10A (provisional) and Form 10AB (regular) are submitted digitally. No physical visit to the PCIT office is required. Patron's dedicated CA handles the complete process.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-3">
                        <h3 class="faq-expanded__q">What is the cost of 80G registration in Kolkata?</h3>
                        <div class="faq-expanded__a"><p>No government fee for filing. Professional fees for provisional 80G start from Rs 5,999 including eligibility verification, Form 10A filing, and donation receipt system setup. Regular 80G with financials review costs Rs 8,000-15,000. Call +91 945 945 6700 for a quote.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-4">
                        <h3 class="faq-expanded__q">How long does 80G registration take in Kolkata?</h3>
                        <div class="faq-expanded__a"><p>Provisional 80G (Form 10A) is processed within 1 month by the PCIT. Regular 80G (Form 10AB) takes 1 to 6 months depending on PCIT review. The CA files query-proof applications to minimise processing time.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-5">
                        <h3 class="faq-expanded__q">Is 12A registration needed before applying for 80G?</h3>
                        <div class="faq-expanded__a"><p>Yes. 12A registration is a mandatory prerequisite for 80G. The IT e-filing portal requires a valid 12A URN before accepting the 80G application. New NGOs can file 12A and 80G provisional applications simultaneously.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-6">
                        <h3 class="faq-expanded__q">How much tax deduction do donors get under 80G?</h3>
                        <div class="faq-expanded__a"><p>Most Kolkata NGOs qualify for Category (iv) - donors get 50% deduction subject to a qualifying limit of 10% of their adjusted gross total income. Some government-notified funds and institutions qualify for 100% deduction. Cash donations above Rs 2,000 do not qualify.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-7">
                        <h3 class="faq-expanded__q">What is Form 10BD and Form 10BE?</h3>
                        <div class="faq-expanded__a"><p>Form 10BD is the annual statement of all donations received, filed on the IT e-filing portal by May 31. Form 10BE is the individual certificate issued to each donor by May 31, which donors use to claim 80G deduction in their ITR. Non-filing of 10BD attracts Rs 200 per day penalty.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-8">
                        <h3 class="faq-expanded__q">Can a Durga Puja committee in Kolkata get 80G?</h3>
                        <div class="faq-expanded__a"><p>Yes, if the Durga Puja committee is registered as a trust or society (under the WB Societies Registration Act, 1961) and has obtained 12A registration. 80G allows community donors to claim tax deductions on their contributions. The committee must ensure donations above Rs 2,000 are received via cheque/UPI and proper 80G receipts are issued.</p></div>
                    </div>
                </div>
            </div>


            <!-- Quick Answers -->
            <div class="highlight-box" style="margin-top:32px;">
                <p><strong>Quick Answers</strong></p>
                <p><strong>80G registration kya hai?</strong> 80G registration IT Act ke under NGO ko yeh power deta hai ki uske donors apne income tax mein deduction claim kar sakein. Jab koi 80G-registered NGO ko donate karta hai, toh uspe 50% ya 100% tax deduction milta hai.</p>
                <p><strong>80G ke bina kya hoga?</strong> Bina 80G ke donors ko koi tax deduction nahi milega. Isse NGO ko kam donations milenge kyunki donors ko incentive nahi hoga.</p>
                <p><strong>Kolkata mein 80G kaise apply karein?</strong> Patron Accounting se sampark karein - +91 945 945 6700. CA IT e-filing portal pe Form 10A file karta hai. 12A pehle zaroori hai.</p>
                <p><strong>Cash donation pe 80G milta hai kya?</strong> Rs 2,000 tak cash donation pe 80G milta hai. Usse upar ke cash donations pe 80G deduction nahi milta. Cheque, NEFT, UPI se donate karein.</p>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 18: URGENCY CTA -->
<section class="content-section" style="background: var(--orange-lighter) !important; border-left: 4px solid var(--orange);">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Don't Delay Your 80G Registration</h2>
            <div class="content-text">
                
                <p>Without 80G, donors to your Kolkata NGO cannot claim tax deductions - directly reducing your fundraising potential. New NGOs should file for provisional 80G immediately after obtaining 12A to start issuing tax-deductible receipts from the first donation.</p>
                <p>Form 10BD must be filed by May 31 every year - non-filing attracts Rs 200 per day penalty under Section 271K. Form 10BE (donation certificate) must be issued to each donor by May 31 for them to claim deductions in their ITR.</p>
                <p>Existing Kolkata NGOs with pre-2021 80G must renew under the new 5-year regime. Late renewal creates a gap during which donations are not tax-deductible - damaging donor relationships and fundraising.</p>
                <p><strong>Get 80G registration done from Kolkata with Patron's pan-India CA team. <a href="tel:+919459456700">Call +91 945 945 6700</a> or <a href="https://wa.me/919459456700?text=Hello%2C%20I%20just%20visited%20your%2080G%20Registration%20in%20Kolkata%20page.%20I%20would%20like%20to%20know%20more%20about%20it." target="_blank" rel="noopener">WhatsApp us</a>.</strong></p>

            </div>
        </div>
    </div>
</section>

<!-- CONCLUSION + CTA BLOCK (Dark) -->
<section class="content-section" style="background: var(--blue) !important;">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title" style="color:#FFFFFF !important;">Get 80G Registration in Kolkata - Start Today</h2>
            <div class="content-text" style="text-align:left;">
                
                <p style="color:rgba(255,255,255,0.85);">80G registration in Kolkata enables NGOs to provide tax deduction benefits to donors under Section 80G of the Income Tax Act, 1961. This is the single most important credential for unlocking sustainable fundraising from individual donors, corporate CSR teams, and community contributors in Kolkata.</p>
                <p style="color:rgba(255,255,255,0.85);">Kolkata NGOs across education, healthcare, environment, culture, and community welfare benefit from CA-managed 80G registration that covers Form 10A/10AB filing, PCIT query resolution, donation receipt system setup, and mandatory annual Form 10BD/10BE compliance.</p>
                <p style="color:rgba(255,255,255,0.85);">Patron Accounting LLP is a multi-office CA firm with 15+ years of practice, 10,000+ businesses served, and a 4.9 Google rating. The firm's pan-India CA team delivers 80G registration for Kolkata NGOs through a digital-first model - combining non-profit tax expertise with donor-ready compliance systems.</p>

            </div>
            <div style="display:flex;gap:14px;flex-wrap:wrap;margin-top:24px;">
                <a href="tel:+919459456700" style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:var(--orange);color:#fff;border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#128222; Call +91 945 945 6700</a>
                <a href="https://wa.me/919459456700?text=Hello%2C%20I%20just%20visited%20your%2080G%20Registration%20in%20Kolkata%20page.%20I%20would%20like%20to%20know%20more%20about%20it." target="_blank" style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:#25D366;color:#fff;border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;" rel="noopener">&#128172; WhatsApp Us</a>
                <a href="mailto:sales@patronaccounting.com?subject=Enquiry%20for%2080G%20Registration%20in%20Kolkata&body=Hello%2C%20I%20just%20visited%20your%2080G%20Registration%20in%20Kolkata%20page.%20I%20would%20like%20to%20know%20more%20about%20it.%0A%0AThank%20you." style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:transparent;color:#fff;border:2px solid rgba(255,255,255,0.3);border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#9993;&#65039; Email Us</a>
            </div>
            <p style="color:rgba(255,255,255,0.7);font-size:13px;margin-top:16px;">Book a Free Consultation - No Obligation.</p>
        </div>
    </div>
</section>

<!-- GSTAT STATE BENCH CITY PAGES (32 Pages) -->
<section class="content-section" style="padding:48px 32px;background:var(--gray-50);">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title" style="text-align:center;margin-bottom:12px;">80G Registration Across Major Cities</h2>
            <p style="text-align:center;color:var(--text-muted);font-size:15px;margin-bottom:40px;">Patron Accounting provides CA-assisted 80G registration services in all major cities across India</p>
       
            <div class="pa-city-block" style="margin-bottom:40px;">
                        <div class="pa-city-grid">
                            <a href="/80g-registration/pune" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Pune</div><div class="pa-card-sub">Maharashtra</div></div></a>
                            <a href="/80g-registration/mumbai" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Mumbai</div><div class="pa-card-sub">Maharashtra</div></div></a>
                            <a href="/80g-registration/delhi" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Delhi</div><div class="pa-card-sub">Delhi NCR</div></div></a>
                            <a href="/80g-registration/gurugram" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Gurugram</div><div class="pa-card-sub">Haryana</div></div></a>
                            <div class="pa-city-card" style="opacity:0.6; pointer-events:none; border:2px solid var(--orange); position:relative;"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Kolkata</div><div class="pa-card-sub">West Bengal</div></div><span style="position:absolute; top:6px; right:8px; font-size:10px; color:var(--orange); font-weight:700; text-transform:uppercase; letter-spacing:0.5px;">You're here</span></div>
                        </div>
                    </div>
                    <div class="pa-city-block">
                        <div class="pa-block-title">Related Services</div>
                        <div class="pa-block-sub">End-to-end NGO compliance support in Kolkata</div>
                        <div class="pa-cross-grid">
                            <a href="/ngo-registration/kolkata" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">NGO Registration</div><div class="pa-card-sub">Kolkata</div></div></a>
                            <a href="/section8-company-registration/kolkata" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Section 8 Company Registration</div><div class="pa-card-sub">Kolkata</div></div></a>
                            <a href="/private-limited-company-registration/kolkata" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Private Limited Company Registration</div><div class="pa-card-sub">Kolkata</div></div></a>
                            <a href="/trademark-registration/kolkata" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Trademark Registration</div><div class="pa-card-sub">Kolkata</div></div></a>
                            <a href="/gst-registration/kolkata" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">GST Registration</div><div class="pa-card-sub">Kolkata</div></div></a>
                        </div>
                    </div>
        </div>
    </div>
</section>

<!-- CONTENT FRESHNESS FOOTER -->
<section class="content-section" style="padding:32px;">
    <div class="content-container">
        <div class="text-content" style="font-size:13px;color:var(--text-muted);">
            <p><strong>Content Created:</strong> 08 April 2026 &nbsp;|&nbsp; <strong>Last Updated:</strong> <span id="lastUpdatedFooter">08 April 2026</span> &nbsp;|&nbsp; <strong>Next Review:</strong> 08 October 2026 &nbsp;|&nbsp; <strong>Reviewed By:</strong> CA &amp; CS Team, Patron Accounting LLP</p>
            <p>This content is reviewed by our CA and CS team every 6 months. Statutory fees and compliance deadlines are verified against the Income Tax e-filing portal and updated on the published date shown above.</p>
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
