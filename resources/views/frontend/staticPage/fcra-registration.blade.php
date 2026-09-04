
@extends('layouts.service-app')

<!-- External Dependencies (loaded by master layout in production) -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Barlow:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,400&family=DM+Sans:opsz,wght@9..40,400;9..40,500;9..40,600;9..40,700&display=swap" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

@section('meta')
    <title>FCRA Registration for NGOs - Process, Documents & MHA Rules</title>
    <meta name="description" content="Register under the Foreign Contribution Regulation Act, 2010 to receive foreign donations. Fee Rs 10,000 (registration) or Rs 5,000 (prior permission). Valid 5 years. SBI FCRA account mandatory.">
    <link rel="canonical" href="/fcra-registration">
    <meta name="robots" content="index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1">
    <meta property="og:title" content="FCRA Registration for NGOs - Process, Documents & MHA Rules">
    <meta property="og:description" content="Register under the Foreign Contribution Regulation Act, 2010 to receive foreign donations. Fee Rs 10,000 (registration) or Rs 5,000 (prior permission). Valid 5 years. SBI FCRA account mandatory.">
    <meta property="og:url" content="/fcra-registration">
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="Patron Accounting">
    <meta property="og:image" content="https://www.patronaccounting.com/images/og-default-square.png">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="1200">
    <meta property="og:image:type" content="image/png">
    <meta property="og:image:secure_url" content="https://www.patronaccounting.com/images/og-default-square.png">
    <meta property="og:image:alt" content="Patron Accounting - partner you can rely on">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="FCRA Registration for NGOs - Process, Documents & MHA Rules">
    <meta name="twitter:description" content="Register under the Foreign Contribution Regulation Act, 2010 to receive foreign donations. Fee Rs 10,000 (registration) or Rs 5,000 (prior permission). Valid 5 years. SBI FCRA account mandatory.">
    <meta name="twitter:image" content="https://www.patronaccounting.com/images/og-default-square.png">
@endsection

@section('schema')
    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@graph": [
        {
          "@type": "Service",
          "name": "FCRA Registration in India: Process, Fees and Compliance",
          "description": "Register under the Foreign Contribution Regulation Act, 2010 to receive foreign donations. Fee Rs 10,000 (registration) or Rs 5,000 (prior permission). Valid 5 years. SBI FCRA account mandatory.",
          "url": "https://www.patronaccounting.com/fcra-registration",
          "serviceType": "FCRA Registration in India: Process, Fees and Compliance",
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
            "url": "https://www.patronaccounting.com/fcra-registration",
            "priceSpecification": {
              "@type": "PriceSpecification",
              "minPrice": "500",
              "maxPrice": "10000",
              "priceCurrency": "INR"
            }
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
              "name": "FCRA Registration in India: Process, Fees and Compliance",
              "item": "https://www.patronaccounting.com/fcra-registration"
            }
          ]
        },
        {
          "@type": "FAQPage",
          "mainEntity": [
            {
              "@type": "Question",
              "name": "What is FCRA registration?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "FCRA registration is the approval granted by the Ministry of Home Affairs under Section 6(1) of the Foreign Contribution (Regulation) Act, 2010 that allows Indian organisations (trusts, societies, Section 8 companies) to legally receive foreign contributions. Without it, receiving foreign contributions is illegal and punishable with fines up to Rs 10 lakh and imprisonment up to 5 years. Valid for 5 years with annual compliance requirements."
              }
            },
            {
              "@type": "Question",
              "name": "What is the fee for FCRA registration?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "The government fee for full FCRA registration (Form FC-3A) is Rs 10,000, paid online through the FCRA portal. For Prior Permission (Form FC-3), the fee is Rs 5,000. Renewal fee is Rs 500 (Form FC-3C). Professional fees for eligibility assessment, NGO Darpan registration, SBI account coordination, and MHA liaison are additional."
              }
            },
            {
              "@type": "Question",
              "name": "What is the SBI FCRA account requirement?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "Since the 2020 FCRA Amendment, all foreign contributions must first be received in a designated FCRA account at SBI New Delhi Main Branch, 11 Sansad Marg, New Delhi 110001 (IFSC: SBIN0000691). No other bank can receive foreign contributions directly. The organisation can transfer funds to a separate utilisation account at any scheduled bank."
              }
            },
            {
              "@type": "Question",
              "name": "How long does FCRA registration take?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "The total process takes 6 to 24 months. Document preparation and SBI account opening take 2-4 weeks. After filing Form FC-3A, the MHA scrutiny and IB inquiry phase takes 4-6 months but can extend to 12-24 months in complex cases. Prompt response to MHA queries is critical for faster approval."
              }
            },
            {
              "@type": "Question",
              "name": "What are the penalties for FCRA violations?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "Section 35 prescribes penalties including: fine of Rs 1 lakh to Rs 10 lakh, or imprisonment up to 5 years, or both. Specific violations include receiving foreign contributions without registration, misutilisation, failure to file annual returns, exceeding the 20% admin cap, and sub-granting without approval. MHA can also suspend or cancel registration and freeze bank accounts."
              }
            },
            {
              "@type": "Question",
              "name": "What is the difference between registration and prior permission?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "Registration under Section 6(1) is for established organisations (3+ years existence) allowing ongoing receipt from any foreign source. Prior Permission under Section 11 is for newer organisations or specific one-time donations from a specific donor for a specific project. Registration costs Rs 10,000 while Prior Permission costs Rs 5,000. Quick Answers Can individuals receive foreign contributions? Only with prior permission from MHA under Section 11. FCRA registration is for organisations, not individuals. Can political parties get FCRA? No. Political parties, legislature members, judges, and government servants are prohibited from receiving foreign contributions (Section 3). Is 12A/80G needed before FCRA? Not legally required, but strongly recommended. Most foreign donors require 12A/80G as evidence of tax-exempt charitable status. Can I transfer FCRA funds to another NGO? No. The 2020 Amendment prohibits sub-granting (Section 7). What is the 20% administrative cap? Administrative expenses cannot exceed 20% of total foreign contribution received per year (Section 8(1)(b))."
              }
            }
          ]
        }
      ]
    }
    </script>
@endsection

@section('content')
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
                        FCRA Registration in India
                    </h1>

                    <div class="expert-attribution-box">
                        <span class="eab-check"><svg width="16" height="16" viewBox="0 0 24 24" fill="currentColor"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg></span>
                        <span class="eab-title">Reviewed by CA and CS Team, Patron Accounting LLP</span>
                        <span class="eab-meta">
                            <span>ICAI & ICSI Registered</span><span class="eab-sep">|</span>
                            <span>15+ Years Experience</span><span class="eab-sep">|</span>
                            <span>Last Updated: <span id="lastUpdated">10 March 2026</span></span>
                        </span>
                        <a href="/authorhub/ca-sundram-gupta" class="eab-link">Verify Credentials &rarr;</a>
                    </div>

                    <div class="mb-4">
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>For:</span> NGOs, Trusts, Societies, and Section 8 Companies receiving foreign contributions - donations, grants, and funds from foreign sources</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Fees:</span> Rs 10,000 (Registration via Form FC-3A) | Rs 5,000 (Prior Permission via Form FC-3) - paid online on fcraonline.nic.in</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Validity:</span> 5 years from the date of grant. Renewable via Form FC-3C (fee Rs 500) - apply 6 months before expiry</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Authority:</span> Ministry of Home Affairs (MHA), Government of India. All foreign contributions received through designated SBI FCRA account at New Delhi Main Branch</p>
                        </div>
                    </div>

                    <p class="mb-4 fw-bold" style="color: var(--blue); font-size: 15px;">Trusted by 10,000+ businesses and NGOs across India for FCRA and non-profit compliance services</p>

                    <div class="hero-cta">
                        <a href="tel:+919459456700" class="btn-video text-decoration-none">
                            <span class="play-circle"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="width:14px;height:14px;color:#fff"><path d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/></svg></span>
                            Call +91 945 945 6700
                        </a>
                        <a href="mailto:sales@patronaccounting.com?subject=Enquiry%20for%20FCRA%20Registration&body=Hello%2C%20I%20just%20visited%20your%20FCRA%20Registration%20page.%20I%20would%20like%20to%20know%20more%20about%20it.%0A%0AThank%20you." class="btn-sample text-decoration-none">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="width:18px;height:18px;"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,12 2,6"/></svg>
                            Email Us
                        </a>
                        <a href="https://wa.me/919459456700?text=Hello%2C%20I%20just%20visited%20your%20FCRA%20Registration%20page.%20I%20would%20like%20to%20know%20more%20about%20it." target="_blank" class="btn-sample text-decoration-none" rel="noopener">
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
                                            'service'  => 'FCRA Registration',
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
    'ctaText'    => 'Expert FCRA registration - eligibility assessment, SBI account coordination, Form FC-3A filing, and MHA liaison under the FCRA, 2010.',
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
            <a class="toc-btn" href="#overview-section">Overview</a><a class="toc-btn" href="#what-section">What Is It</a><a class="toc-btn" href="#who-section">Who Needs It</a><a class="toc-btn" href="#services-section">Our Services</a><a class="toc-btn" href="#procedure-section">7-Step Process</a><a class="toc-btn" href="#documents-section">Documents</a><a class="toc-btn" href="#challenges-section">Challenges</a><a class="toc-btn" href="#fees-section">Fees</a><a class="toc-btn" href="#timeline-section">Timeline</a><a class="toc-btn" href="#benefits-section">Benefits</a><a class="toc-btn" href="#comparison-section">Registration vs Prior Permission</a><a class="toc-btn" href="#faq-section">FAQs</a>
        </div>
        <button class="toc-arrow right" id="tocRight">&#10095;</button>
    </div>
</div>

<!-- SECTION 2: OVERVIEW / INTRO + TL;DR -->
<section class="content-section" id="overview-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">FCRA Registration - Complete Overview</h2>
            <div class="content-text">
                <div class="highlight-box" style="margin-bottom:20px;">
                    <p><strong>&#128204; TL;DR - FCRA Registration Services at a Glance</strong></p>
                    <p>FCRA registration under Section 6(1) of the Foreign Contribution (Regulation) Act, 2010 is mandatory for any NGO, trust, society, or Section 8 company that wishes to receive foreign contributions. Fee is Rs 10,000 for full registration (Form FC-3A) or Rs 5,000 for prior permission (Form FC-3). Valid for 5 years. All foreign contributions must be received through a designated SBI FCRA account at the <a href="https://fcraonline.nic.in" target="_blank" rel="noopener">New Delhi Main Branch</a>.</p><div class="table-responsive-wrapper" style="margin-top:16px;"><table><thead><tr><th>Parameter</th><th>Details</th></tr></thead><tbody><tr><td>Governing Law</td><td>Foreign Contribution (Regulation) Act, 2010 (as amended 2020) + FCRR, 2011</td></tr><tr><td>Registration Fee</td><td>Rs 10,000 (Form FC-3A) | Rs 5,000 (Prior Permission - Form FC-3)</td></tr><tr><td>Validity</td><td>5 years from grant. Renewal via Form FC-3C (Rs 500) - apply 6 months before expiry.</td></tr><tr><td>Eligibility</td><td>3+ years existence, Rs 10-15 lakh spent on objectives in last 3 years, NGO Darpan ID mandatory</td></tr><tr><td>Designated Bank</td><td>SBI FCRA Account at New Delhi Main Branch, 11 Sansad Marg (mandatory since 2020)</td></tr><tr><td>Annual Compliance</td><td>Form FC-4 by 31 December + Quarterly Intimation + Max 20% administrative expenses</td></tr><tr><td>Authority</td><td>Ministry of Home Affairs (MHA). Portal: fcraonline.nic.in</td></tr></tbody></table></div><p style="margin-top:0;</p>
                </div>
                <p>FCRA registration is the gateway for Indian non-profit organisations to legally receive foreign contributions - donations, grants, and funds from foreign sources. The <a href="https://fcraonline.nic.in" target="_blank" rel="noopener">Foreign Contribution (Regulation) Act, 2010</a>, administered by the Ministry of Home Affairs, regulates the acceptance and utilisation of foreign contributions to ensure they are used for legitimate purposes.</p>
                <p>The 2020 FCRA Amendment introduced significant changes: mandatory SBI FCRA account at the New Delhi Main Branch, prohibition on sub-granting, cap of 20% on administrative expenses, and Aadhaar requirement for key functionaries. Patron Accounting provides end-to-end FCRA registration services from offices in Pune, Mumbai, Delhi, and Gurugram.</p>
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
                <h2 class="section-title">What Is FCRA Registration?</h2>
                <div class="content-text what-is-definition">
                    
                    <p>FCRA registration is the formal approval granted by the Ministry of Home Affairs (MHA) under Section 6(1) of the Foreign Contribution (Regulation) Act, 2010 that authorises an Indian organisation to receive foreign contributions.</p><p>There are two modes: (1) Registration (Section 6(1)) - for organisations existing 3+ years with demonstrated activity, allowing ongoing receipt from any foreign source, valid 5 years; and (2) Prior Permission (Section 11) - for newer organisations or one-time foreign contribution from a specific donor, also valid 5 years but limited in scope.</p><p>Both require filing on the <a href="https://fcraonline.nic.in" target="_blank" rel="noopener">FCRA online portal</a> and opening a designated SBI FCRA account at the New Delhi Main Branch, 11 Sansad Marg.</p>

                </div>
                <div class="highlight-box" style="margin-top:20px;">
                    <p><strong>Key Terms for FCRA Registration:</strong></p>
                    <p><strong>Foreign Contribution</strong> - Any donation, delivery, or transfer of currency, securities, or articles from a foreign source (Section 2(1)(h)).</p><p><strong>SBI FCRA Account</strong> - Designated account at SBI New Delhi Main Branch, 11 Sansad Marg (IFSC: SBIN0000691). All foreign contributions must first be received here (mandatory since 2020 Amendment).</p><p><strong>Form FC-3A</strong> - Application for FCRA Registration (Section 6(1)). Fee: Rs 10,000. Form FC-3 for Prior Permission (Rs 5,000).</p><p><strong>20% Administrative Cap</strong> - Since 2020 Amendment, administrative expenses cannot exceed 20% of total foreign contribution received (Section 8(1)(b)).</p>

                </div>
            </div>
            <div class="column-image">
                <div class="illustration-placeholder">
                    <div class="illustration-icon" style="max-width:240px;">
                        <svg viewBox="0 0 200 180" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M100 15L45 42V95C45 135 100 165 100 165C100 165 155 135 155 95V42L100 15Z" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><text x="100" y="60" font-size="14" fill="#14365F" font-weight="800" text-anchor="middle" font-family="Arial, sans-serif">FCRA</text><text x="100" y="78" font-size="9" fill="#F5A623" font-weight="700" text-anchor="middle" font-family="Arial, sans-serif">2010</text><circle cx="100" cy="105" r="14" fill="#E8F5E9" stroke="#25D366" stroke-width="1.5"/><path d="M93 105l4 4 9-9" stroke="#25D366" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"/><rect x="25" y="130" width="55" height="18" rx="4" fill="#FFF3E0" stroke="#F5A623" stroke-width="1"/><text x="52" y="142.5" font-size="7" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial, sans-serif">Sec 6(1)</text><circle cx="165" cy="30" r="16" fill="#E8F5E9" stroke="#25D366" stroke-width="1.5"/><text x="165" y="34" font-size="7" fill="#25D366" font-weight="700" text-anchor="middle" font-family="Arial, sans-serif">MHA</text><text x="100" y="170" font-size="10" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial, sans-serif">FCRA Registration</text></svg>
                    </div>
                    <div class="illustration-badge">
                        <span>FCRA 2010</span>
                        <strong>FCRA Registration</strong>
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
            <h2 class="section-title">Who Needs FCRA Registration?</h2>
            <div class="content-text">
                
                <ul><li><strong>Charitable Trusts:</strong> Trusts registered under the Indian Trusts Act, 1882 receiving foreign donations for charitable work</li><li><strong>Societies:</strong> Registered under the Societies Registration Act, 1860 engaged in social, educational, cultural activities with foreign funding needs</li><li><strong>Section 8 Companies:</strong> Non-profit companies under Section 8 of the Companies Act, 2013 seeking foreign contributions</li><li><strong>Religious Organisations:</strong> Temples, mosques, churches, gurudwaras receiving foreign donations for religious or charitable activities</li><li><strong>Educational Institutions:</strong> Schools, colleges, universities funded by foreign grants and scholarships</li><li><strong>Healthcare NGOs:</strong> Organisations running hospitals or public health programmes with foreign foundation funding</li></ul>

            </div>
            </div>
        </div>
    </div>
</section>

<!-- SECTION 5: OUR SERVICES -->
<section class="content-section" id="services-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Our FCRA Registration Services</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Service</th><th>What We Do</th></tr></thead>
                    <tbody>
                        <tr><td>Eligibility Assessment</td><td>Evaluate whether your organisation meets the 3-year existence requirement, Rs 10-15 lakh expenditure threshold, and other criteria for registration vs prior permission</td></tr><tr><td>NGO Darpan Registration</td><td>Register on the <a href="https://ngodarpan.gov.in" target="_blank" rel="noopener">NITI Aayog NGO Darpan portal</a> to obtain the unique ID mandatory for FCRA application</td></tr><tr><td>SBI FCRA Account Opening</td><td>Coordinate with SBI New Delhi Main Branch (Sansad Marg) to open your designated FCRA account - a prerequisite for application</td></tr><tr><td>Form FC-3A / FC-3 Filing</td><td>Complete application on fcraonline.nic.in including organisation details, governing body information, 3-year audited financials, and activity reports</td></tr><tr><td>MHA Liaison and Query Response</td><td>Handle all queries from the Ministry of Home Affairs during scrutiny, prepare responses to show-cause notices, and coordinate with the FCRA division</td></tr><tr><td>Post-Registration Compliance</td><td>Annual Form FC-4 filing by 31 December, quarterly intimation, 20% admin cap monitoring, and 5-year renewal management (Form FC-3C)</td></tr>

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
            <h2 class="section-title">7-Step FCRA Registration Process</h2>
            <p class="section-subtitle" style="text-align:left;max-width:100%;">Patron Accounting guides you through the complete FCRA registration process - from eligibility verification to MHA certificate under the FCRA, 2010.</p>
        </header>
        <div class="steps-container">
            <div class="step-card"><div class="step-content"><span class="step-badge">Step 1</span><h3 class="step-title">Verify Eligibility</h3><p class="step-description">Confirm your organisation is registered as trust/society/Section 8 company, has been in existence for at least 3 years, and has spent Rs 10-15 lakh on its objectives in the last 3 years (excluding administrative expenses).</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> 3-year existence confirmed</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Expenditure threshold met</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="20" y="10" width="80" height="65" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><rect x="30" y="22" width="60" height="8" rx="2" fill="#E8F5E9" stroke="#25D366" stroke-width="0.8"/><rect x="30" y="34" width="60" height="8" rx="2" fill="#E8F5E9" stroke="#25D366" stroke-width="0.8"/><text x="60" y="29" font-size="5" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">3 YRS</text><text x="60" y="41" font-size="5" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">Rs 10-15L</text></svg></div><span class="illustration-label">Eligible</span><span class="step-number-large">01</span></div></div></div>
<div class="step-card"><div class="step-content"><span class="step-badge">Step 2</span><h3 class="step-title">Register on NGO Darpan</h3><p class="step-description">Create an account on ngodarpan.gov.in and obtain a unique NGO Darpan ID. This is a mandatory prerequisite for FCRA registration application.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Darpan ID obtained</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> NITI Aayog registered</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="15" y="10" width="90" height="65" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><rect x="15" y="10" width="90" height="16" rx="6" fill="#14365F"/><text x="60" y="22" font-size="7" fill="#fff" font-weight="700" text-anchor="middle" font-family="Arial">NGO DARPAN</text><rect x="30" y="40" width="60" height="10" rx="3" fill="#FFF3E0" stroke="#F5A623" stroke-width="0.8"/><text x="60" y="48" font-size="5" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">UNIQUE ID</text></svg></div><span class="illustration-label">Darpan Ready</span><span class="step-number-large">02</span></div></div></div>
<div class="step-card"><div class="step-content"><span class="step-badge">Step 3</span><h3 class="step-title">Open SBI FCRA Account</h3><p class="step-description">Open a designated FCRA bank account at the State Bank of India, New Delhi Main Branch, 11 Sansad Marg, New Delhi 110001 (IFSC: SBIN0000691). Mandatory under the 2020 FCRA Amendment.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> SBI account opened</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> IFSC SBIN0000691</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="15" y="15" width="90" height="55" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><rect x="15" y="15" width="90" height="15" rx="6" fill="#14365F"/><text x="60" y="26" font-size="7" fill="#fff" font-weight="700" text-anchor="middle" font-family="Arial">SBI FCRA A/C</text><text x="60" y="50" font-size="6" fill="#14365F" font-weight="600" text-anchor="middle" font-family="Arial">Sansad Marg, Delhi</text><text x="60" y="62" font-size="5" fill="#F5A623" font-weight="700" text-anchor="middle" font-family="Arial">SBIN0000691</text></svg></div><span class="illustration-label">Account Ready</span><span class="step-number-large">03</span></div></div></div>
<div class="step-card"><div class="step-content"><span class="step-badge">Step 4</span><h3 class="step-title">Register on FCRA Portal</h3><p class="step-description">Create an account on fcraonline.nic.in. Aadhaar-linked login is required for all key functionaries. Obtain login credentials.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Portal account created</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Aadhaar linked</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="15" y="10" width="90" height="65" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><rect x="15" y="10" width="90" height="16" rx="6" fill="#14365F"/><text x="60" y="22" font-size="6" fill="#fff" font-weight="700" text-anchor="middle" font-family="Arial">fcraonline.nic.in</text><rect x="30" y="38" width="60" height="10" rx="3" fill="#FFF3E0" stroke="#F5A623" stroke-width="0.8"/></svg></div><span class="illustration-label">Portal Ready</span><span class="step-number-large">04</span></div></div></div>
<div class="step-card"><div class="step-content"><span class="step-badge">Step 5</span><h3 class="step-title">File Form FC-3A</h3><p class="step-description">Fill Form FC-3A online with: organisation details, registration number, PAN, governing body details (Aadhaar/PAN), 3-year activity reports, 3-year audited financials, SBI FCRA account details. Pay Rs 10,000 fee.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Form FC-3A submitted</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Rs 10,000 fee paid</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="15" y="5" width="90" height="75" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><rect x="15" y="5" width="90" height="16" rx="6" fill="#14365F"/><text x="60" y="17" font-size="7" fill="#fff" font-weight="700" text-anchor="middle" font-family="Arial">FORM FC-3A</text><line x1="28" y1="32" x2="92" y2="32" stroke="#F5A623" stroke-width="2" stroke-linecap="round"/><line x1="28" y1="44" x2="80" y2="44" stroke="#14365F" stroke-width="1.5" opacity="0.3" stroke-linecap="round"/><line x1="28" y1="54" x2="70" y2="54" stroke="#14365F" stroke-width="1.5" opacity="0.3" stroke-linecap="round"/></svg></div><span class="illustration-label">Application Filed</span><span class="step-number-large">05</span></div></div></div>
<div class="step-card"><div class="step-content"><span class="step-badge">Step 6</span><h3 class="step-title">MHA Scrutiny and Field Inquiry</h3><p class="step-description">The Ministry of Home Affairs scrutinises the application. MHA may conduct field inquiry through the Intelligence Bureau (IB) to verify activities and credentials. This takes 4-6 months (can extend to 12-24 months).</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> MHA review in progress</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> IB inquiry conducted</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="15" y="10" width="90" height="65" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><circle cx="55" cy="38" r="18" fill="none" stroke="#F5A623" stroke-width="2"/><line x1="68" y1="50" x2="82" y2="64" stroke="#F5A623" stroke-width="3" stroke-linecap="round"/><text x="60" y="80" font-size="6" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">MHA + IB INQUIRY</text></svg></div><span class="illustration-label">Under Review</span><span class="step-number-large">06</span></div></div></div>
<div class="step-card"><div class="step-content"><span class="step-badge">Step 7</span><h3 class="step-title">FCRA Certificate Granted</h3><p class="step-description">Upon satisfactory verification, MHA grants the FCRA registration certificate valid for 5 years. Download from the portal. Begin receiving foreign contributions through the SBI FCRA account.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Certificate granted</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> 5-year validity</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="20" y="10" width="80" height="65" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><circle cx="60" cy="38" r="18" fill="#E8F5E9" stroke="#25D366" stroke-width="1.5"/><path d="M52 38l5 5 11-11" stroke="#25D366" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"/><text x="60" y="68" font-size="7" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">5 YEARS</text></svg></div><span class="illustration-label">FCRA Registered</span><span class="step-number-large">07</span></div></div></div>

        </div>
    </div>
</section>

<!-- SECTION 8: DOCUMENTS REQUIRED -->
<section class="content-section" id="documents-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Documents Required for FCRA Registration</h2>
            <div class="content-text">
                
                <ul><li><strong>Registration Certificate / Trust Deed:</strong> Self-certified copy of society registration, trust deed, or Section 8 incorporation certificate</li><li><strong>MOA / AOA / Rules:</strong> Memorandum, Articles, or Rules showing aims and objects of the organisation</li><li><strong>3-Year Activity Reports:</strong> Detailed reports for last 3 financial years demonstrating work on stated objectives</li><li><strong>3-Year Audited Accounts:</strong> CA-audited financial statements (Assets & Liabilities, Income & Expenditure, Receipts & Payments) showing minimum Rs 10-15 lakh expenditure</li><li><strong>PAN Card:</strong> PAN of the organisation</li><li><strong>Governing Body Details:</strong> Names, addresses, Aadhaar, PAN, and photographs of all office-bearers/trustees/directors. Affidavit of no foreign ties.</li><li><strong>SBI FCRA Account Details:</strong> Account number and IFSC of designated FCRA account at SBI New Delhi Main Branch</li><li><strong>NGO Darpan ID:</strong> Unique ID from NITI Aayog NGO Darpan portal</li></ul>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 9: CHALLENGES -->
<section class="content-section" id="challenges-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Common FCRA Registration Challenges and Solutions</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Challenge</th><th>Impact</th><th>How Patron Accounting Solves It</th></tr></thead>
                    <tbody>
                        <tr><td>3-Year Existence Not Met</td><td>New organisations cannot get full registration under Section 6(1), blocking their access to foreign funding</td><td>Apply for Prior Permission (Form FC-3, Rs 5,000) from a specific donor for a specific project. Convert to full registration after 3 years of operation.</td></tr><tr><td>Rs 10-15 Lakh Expenditure Threshold</td><td>Many small NGOs have not spent enough on objectives in the last 3 years to meet the eligibility criteria</td><td>Expenditure includes capital investment in assets (land, building, equipment) if the Chief Functionary gives an undertaking for FCRA use only</td></tr><tr><td>SBI FCRA Account Opening Delays</td><td>SBI New Delhi Main Branch processes high volumes of FCRA account requests, causing delays of 2-3 weeks</td><td>We coordinate directly with the branch and ensure all documentation is complete for faster account opening</td></tr><tr><td>MHA Queries During Scrutiny</td><td>MHA may raise queries about activities, governing body, or financial records during the 4-6 month scrutiny period</td><td>We prepare comprehensive responses with supporting evidence and maintain ongoing liaison with the FCRA division at MHA</td></tr>

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
            <h2 class="section-title">FCRA Registration Fees</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Fee Component</th><th>Amount</th></tr></thead>
                    <tbody>
                        <tr><td>FCRA Registration (Section 6(1)) - Form FC-3A</td><td>Rs 10,000</td></tr><tr><td>Prior Permission (Section 11) - Form FC-3</td><td>Rs 5,000</td></tr><tr><td>Renewal (Section 16) - Form FC-3C</td><td>Rs 500</td></tr><tr><td>Change in Designated Bank Account - Form FC-6</td><td>Nil</td></tr><tr><td>Patron Accounting Professional Fees (Registration)</td><td>Starting from INR 14,999 (Exl GST and Govt. Charges)</td></tr>

                    </tbody>
                </table>
                </div>
                <p style="margin-top:16px;font-size:13px;color:var(--text-muted);font-style:italic;">All fees and charges listed are indicative only and do not constitute a binding offer. Final amounts may vary depending on the volume of work and the complexity involved.</p>
                <p style="margin-top:16px;">Professional service charges for drafting, filing, and representation are separate from the statutory fees. The exact fee depends on the complexity of the case, disputed amount, and number of hearings required. Contact us for a detailed quote.</p>
                <p style="margin-top:16px;"><strong>Get a free FCRA Registration consultation - <a href="tel:+919459456700">Call +91 945 945 6700</a> or <a href="https://wa.me/919459456700?text=Hello%2C%20I%20just%20visited%20your%20FCRA%20Registration%20page.%20I%20would%20like%20to%20know%20more%20about%20it." target="_blank" rel="noopener">WhatsApp us</a>. No-obligation assessment.</strong></p>
            </div>
        </div>
    </div>
</section>

<!-- SECTION 11: TIMELINE -->
<section class="content-section" id="timeline-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">FCRA Registration Timeline</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Stage</th><th>Estimated Timeline</th></tr></thead>
                    <tbody>
                        <tr><td>NGO Darpan Registration</td><td>3-7 days</td></tr><tr><td>SBI FCRA Account Opening</td><td>7-21 days</td></tr><tr><td>Application Preparation</td><td>5-10 days</td></tr><tr><td>Form FC-3A Filing</td><td>1 day</td></tr><tr><td>MHA Scrutiny + IB Inquiry</td><td>4-6 months (can extend to 12-24 months)</td></tr><tr><td>Total End-to-End</td><td>6-24 months</td></tr>

                    </tbody>
                </table>
                </div>
                <div class="highlight-box" style="margin-top:16px;">
                    
                    <p><strong>Important:</strong> The MHA scrutiny phase is the longest and least predictable part. Prompt response to MHA queries speeds up approval. Renewal must be filed 6 months before expiry via Form FC-3C (fee Rs 500). MHA has been issuing periodic extensions for pending renewals - check the FCRA portal for current status.</p>

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
            <h2 class="section-title">Benefits of Professional FCRA Registration</h2>
        </div>
        <div class="features-grid" style="display:grid;grid-template-columns:repeat(3,1fr);gap:24px;"><article class="feature-card" style="background:var(--white);border:1px solid var(--gray-200);border-radius:var(--radius-lg);padding:28px;"><div style="width:48px;height:48px;background:var(--orange-light);border-radius:var(--radius-md);display:flex;align-items:center;justify-content:center;margin-bottom:16px;"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="11" cy="11" r="8"/><path d="M21 21l-4.35-4.35"/></svg></div><h3 style="font-size:17px;font-weight:700;color:var(--blue);margin-bottom:8px;">Eligibility Pre-Check</h3><p style="font-size:14px;color:var(--text-secondary);line-height:1.6;margin:0;">Thorough assessment before filing prevents rejection and wasted fees - we verify 3-year existence, expenditure threshold, and governing body compliance</p></article><article class="feature-card" style="background:var(--white);border:1px solid var(--gray-200);border-radius:var(--radius-lg);padding:28px;"><div style="width:48px;height:48px;background:var(--orange-light);border-radius:var(--radius-md);display:flex;align-items:center;justify-content:center;margin-bottom:16px;"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M14 2H6a2 2 0 00-2 2v16a2 2 0 002 2h12a2 2 0 002-2V8z"/><path d="M14 2v6h6M16 13H8"/></svg></div><h3 style="font-size:17px;font-weight:700;color:var(--blue);margin-bottom:8px;">Documentation Excellence</h3><p style="font-size:14px;color:var(--text-secondary);line-height:1.6;margin:0;">Professionally prepared 3-year activity reports and audited financials that meet MHA scrutiny standards</p></article><article class="feature-card" style="background:var(--white);border:1px solid var(--gray-200);border-radius:var(--radius-lg);padding:28px;"><div style="width:48px;height:48px;background:var(--orange-light);border-radius:var(--radius-md);display:flex;align-items:center;justify-content:center;margin-bottom:16px;"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="2" y="5" width="20" height="14" rx="2"/><line x1="2" y1="10" x2="22" y2="10"/></svg></div><h3 style="font-size:17px;font-weight:700;color:var(--blue);margin-bottom:8px;">SBI Account Coordination</h3><p style="font-size:14px;color:var(--text-secondary);line-height:1.6;margin:0;">Direct liaison with SBI New Delhi Main Branch for faster FCRA account opening - often the bottleneck in the process</p></article><article class="feature-card" style="background:var(--white);border:1px solid var(--gray-200);border-radius:var(--radius-lg);padding:28px;"><div style="width:48px;height:48px;background:var(--orange-light);border-radius:var(--radius-md);display:flex;align-items:center;justify-content:center;margin-bottom:16px;"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg></div><h3 style="font-size:17px;font-weight:700;color:var(--blue);margin-bottom:8px;">MHA Query Handling</h3><p style="font-size:14px;color:var(--text-secondary);line-height:1.6;margin:0;">Experienced response to MHA queries and IB verification processes - critical for approval within the 4-6 month target</p></article><article class="feature-card" style="background:var(--white);border:1px solid var(--gray-200);border-radius:var(--radius-lg);padding:28px;"><div style="width:48px;height:48px;background:var(--orange-light);border-radius:var(--radius-md);display:flex;align-items:center;justify-content:center;margin-bottom:16px;"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M22 11.08V12a10 10 0 11-5.93-9.14"/><path d="M22 4L12 14.01l-3-3"/></svg></div><h3 style="font-size:17px;font-weight:700;color:var(--blue);margin-bottom:8px;">Compliance Lifecycle</h3><p style="font-size:14px;color:var(--text-secondary);line-height:1.6;margin:0;">Post-registration Form FC-4 filing, quarterly intimation, 20% admin cap monitoring, and 5-year renewal management</p></article></div>
    </div>
</section>

<!-- SECTION 12A: SOCIAL PROOF -->
<section class="content-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Why 10,000+ Businesses Trust Patron Accounting</h2>
            <div class="content-text">
                
                <p><strong>10,000+ businesses</strong> including NGOs, charitable trusts, and Section 8 companies trust Patron Accounting for FCRA and non-profit compliance. With <strong>15+ years of experience</strong>, a <strong>4.9-star Google rating</strong>, and <strong>50,000+ documents filed</strong>, our CA and CS team delivers reliable FCRA registration and compliance.</p><p>Offices in Pune, Mumbai, Delhi, and Gurugram.</p>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 13: SELF-FILING vs PROFESSIONAL COMPARISON -->
<section class="content-section" id="comparison-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">FCRA Registration vs Prior Permission</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Parameter</th><th>Registration (Section 6(1))</th><th>Prior Permission (Section 11)</th></tr></thead>
                    <tbody>
                        <tr><td>Eligibility</td><td>Min 3 years existence + Rs 10-15L expenditure</td><td>Any registered org + specific donor commitment</td></tr><tr><td>Fee</td><td>Rs 10,000</td><td>Rs 5,000</td></tr><tr><td>Scope</td><td>Any foreign source, any amount, ongoing</td><td>Specific donor, specific amount, specific project</td></tr><tr><td>Validity</td><td>5 years (renewable)</td><td>5 years or project completion</td></tr><tr><td>Best For</td><td>Established NGOs with regular foreign funding</td><td>New NGOs, one-time projects, first-time donors</td></tr><tr><td>Form</td><td>Form FC-3A</td><td>Form FC-3</td></tr>

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
            <h2 class="section-title">Related NGO and Registration Services</h2>
            <div class="content-text">
                
                <ul><li><a href="/ngo-registration">NGO Registration</a> - Register your trust, society, or Section 8 company</li><li><a href="/section8-company-registration">Section 8 Company Registration</a> - Non-profit company incorporation</li><li><a href="#">12A/80G Registration</a> - Tax exemption for NGO + donor deduction</li><li><a href="/ngo-and-non-profit-accounting-services">NGO Accounting Services</a> - Compliance accounting for non-profits</li><li><a href="/payroll-services-for-ngonon-profit-industry">Payroll for NGO</a> - Employee payroll management for non-profits</li></ul>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 15A: LEGAL FRAMEWORK -->
<section class="content-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Legal Framework for FCRA Registration</h2>
            <div class="content-text">
                
                <div class="table-responsive-wrapper"><table><thead><tr><th>Section</th><th>Key Provision</th></tr></thead><tbody><tr><td><a href="https://fcraonline.nic.in" target="_blank" rel="noopener">Section 6(1)</a></td><td>Registration for receiving foreign contributions. Organisation must exist 3+ years with demonstrated charitable activity</td></tr><tr><td>Section 11</td><td>Prior Permission route for newer organisations. Requires specific donor commitment letter</td></tr><tr><td>Section 17</td><td>All foreign contributions must be received only in the designated SBI FCRA account</td></tr><tr><td>Section 8(1)(b)</td><td>Administrative expenses cannot exceed 20% of total foreign contribution (post-2020 Amendment)</td></tr><tr><td>Section 12</td><td>Annual returns (Form FC-4) by 31 December with details of all contributions received and utilised</td></tr><tr><td>Section 35</td><td>Penalties: fine Rs 1 lakh to Rs 10 lakh, or imprisonment up to 5 years, or both</td></tr><tr><td>Section 16</td><td>Renewal 6 months before expiry via Form FC-3C (fee Rs 500)</td></tr><tr><td>2020 Amendment</td><td>Mandatory SBI account, prohibition on sub-granting, 20% admin cap, Aadhaar requirement</td></tr></tbody></table></div><p><strong>Regulatory Authority:</strong> Ministry of Home Affairs (MHA), Government of India. Portal: <a href="https://fcraonline.nic.in" target="_blank" rel="noopener">fcraonline.nic.in</a></p>

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
                    <h2 class="faq-expanded__title">Frequently Asked Questions - FCRA Registration</h2>
                    <p class="faq-expanded__lead">Expert answers to common questions about FCRA registration, foreign contributions, and compliance in India.</p>
                    @include('partials.bigin-form', [
                        'variant'  => 'compact',
                        'service'  => 'FCRA Registration',
                    ])
                </aside>
                <div class="faq-expanded__list">
                    <div class="faq-expanded__item" id="faq-1">
                        <h3 class="faq-expanded__q">What is FCRA registration?</h3>
                        <div class="faq-expanded__a"><p>FCRA registration is the approval granted by the Ministry of Home Affairs under Section 6(1) of the Foreign Contribution (Regulation) Act, 2010 that allows Indian organisations (trusts, societies, Section 8 companies) to legally receive foreign contributions. Without it, receiving foreign contributions is illegal and punishable with fines up to Rs 10 lakh and imprisonment up to 5 years. Valid for 5 years with annual compliance requirements.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-2">
                        <h3 class="faq-expanded__q">What is the fee for FCRA registration?</h3>
                        <div class="faq-expanded__a"><p>The government fee for full FCRA registration (Form FC-3A) is Rs 10,000, paid online through the FCRA portal. For Prior Permission (Form FC-3), the fee is Rs 5,000. Renewal fee is Rs 500 (Form FC-3C). Professional fees for eligibility assessment, NGO Darpan registration, SBI account coordination, and MHA liaison are additional.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-3">
                        <h3 class="faq-expanded__q">What is the SBI FCRA account requirement?</h3>
                        <div class="faq-expanded__a"><p>Since the 2020 FCRA Amendment, all foreign contributions must first be received in a designated FCRA account at SBI New Delhi Main Branch, 11 Sansad Marg, New Delhi 110001 (IFSC: SBIN0000691). No other bank can receive foreign contributions directly. The organisation can transfer funds to a separate utilisation account at any scheduled bank.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-4">
                        <h3 class="faq-expanded__q">How long does FCRA registration take?</h3>
                        <div class="faq-expanded__a"><p>The total process takes 6 to 24 months. Document preparation and SBI account opening take 2-4 weeks. After filing Form FC-3A, the MHA scrutiny and IB inquiry phase takes 4-6 months but can extend to 12-24 months in complex cases. Prompt response to MHA queries is critical for faster approval.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-5">
                        <h3 class="faq-expanded__q">What are the penalties for FCRA violations?</h3>
                        <div class="faq-expanded__a"><p>Section 35 prescribes penalties including: fine of Rs 1 lakh to Rs 10 lakh, or imprisonment up to 5 years, or both. Specific violations include receiving foreign contributions without registration, misutilisation, failure to file annual returns, exceeding the 20% admin cap, and sub-granting without approval. MHA can also suspend or cancel registration and freeze bank accounts.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-6">
                        <h3 class="faq-expanded__q">What is the difference between registration and prior permission?</h3>
                        <div class="faq-expanded__a"><p>Registration under Section 6(1) is for established organisations (3+ years existence) allowing ongoing receipt from any foreign source. Prior Permission under Section 11 is for newer organisations or specific one-time donations from a specific donor for a specific project. Registration costs Rs 10,000 while Prior Permission costs Rs 5,000.</p></div>
                    </div>
                </div>
            </div>


            <!-- Quick Answers -->
            <div class="highlight-box" style="margin-top:32px;">
                <p><strong>Quick Answers</strong></p>
                <p><strong>Can individuals receive foreign contributions?</strong> Only with prior permission from MHA under Section 11. FCRA registration is for organisations, not individuals.</p><p><strong>Can political parties get FCRA?</strong> No. Political parties, legislature members, judges, and government servants are prohibited from receiving foreign contributions (Section 3).</p><p><strong>Is 12A/80G needed before FCRA?</strong> Not legally required, but strongly recommended. Most foreign donors require 12A/80G as evidence of tax-exempt charitable status.</p><p><strong>Can I transfer FCRA funds to another NGO?</strong> No. The 2020 Amendment prohibits sub-granting (Section 7).</p><p><strong>What is the 20% administrative cap?</strong> Administrative expenses cannot exceed 20% of total foreign contribution received per year (Section 8(1)(b)).</p>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 18: URGENCY CTA -->
<section class="content-section" style="background: var(--orange-lighter) !important; border-left: 4px solid var(--orange);">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Start Your FCRA Registration Today</h2>
            <div class="content-text">
                
                <p>Receiving foreign contributions without valid FCRA registration is a criminal offence punishable with fines up to Rs 10 lakh and imprisonment up to 5 years. The application process takes 6-24 months - start now to ensure registration is in place before your foreign donor commits funds.</p><p><strong>Don't delay.</strong> <a href="tel:+919459456700">Call +91 945 945 6700</a> or <a href="https://wa.me/919459456700?text=Hello%2C%20I%20just%20visited%20your%20FCRA%20Registration%20page.%20I%20would%20like%20to%20know%20more%20about%20it." target="_blank" rel="noopener">WhatsApp us</a> for a free eligibility assessment.</p>

            </div>
        </div>
    </div>
</section>

<!-- CONCLUSION + CTA BLOCK (Dark) -->
<section class="content-section" style="background: var(--blue) !important;">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title" style="color:#FFFFFF !important;">Get Your FCRA Registration - Receive Foreign Contributions Legally</h2>
            <div class="content-text" style="text-align:left;">
                
                <p style="color:rgba(255,255,255,0.9);font-size:15px;line-height:1.7;">FCRA registration is the essential legal requirement for any Indian non-profit receiving foreign contributions. Governed by the FCRA, 2010 and significantly amended in 2020, the process requires eligibility assessment, NGO Darpan registration, SBI FCRA account opening, and patience during the 6-24 month MHA scrutiny.</p><p style="color:rgba(255,255,255,0.9);font-size:15px;line-height:1.7;">Patron Accounting provides end-to-end FCRA registration services including Form FC-3A filing, MHA query handling, and post-registration compliance management. With offices in Pune, Mumbai, Delhi, and Gurugram and 15+ years of experience, we ensure your organisation achieves FCRA registration with full compliance.</p>

            </div>
            <div style="display:flex;gap:14px;flex-wrap:wrap;margin-top:24px;">
                <a href="tel:+919459456700" style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:var(--orange);color:#fff;border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#128222; Call +91 945 945 6700</a>
                <a href="https://wa.me/919459456700?text=Hello%2C%20I%20just%20visited%20your%20FCRA%20Registration%20page.%20I%20would%20like%20to%20know%20more%20about%20it." target="_blank" style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:#25D366;color:#fff;border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;" rel="noopener">&#128172; WhatsApp Us</a>
                <a href="mailto:sales@patronaccounting.com?subject=Enquiry%20for%20FCRA%20Registration&body=Hello%2C%20I%20just%20visited%20your%20FCRA%20Registration%20page.%20I%20would%20like%20to%20know%20more%20about%20it.%0A%0AThank%20you." style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:transparent;color:#fff;border:2px solid rgba(255,255,255,0.3);border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#9993;&#65039; Email Us</a>
            </div>
            <p style="color:rgba(255,255,255,0.7);font-size:13px;margin-top:16px;">Book a Free Consultation - No Obligation.</p>
        </div>
    </div>
</section>

<!-- GSTAT STATE BENCH CITY PAGES (32 Pages) -->
<section class="content-section" style="padding:48px 32px;background:var(--gray-50);">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title" style="text-align:center;margin-bottom:12px;">FCRA Registration Services Across India</h2>
            <p style="text-align:center;color:var(--text-muted);font-size:15px;margin-bottom:40px;">Patron Accounting provides FCRA registration for NGOs and non-profits in major cities across India.</p>
          
            <div class="pa-city-block" style="margin-bottom:40px;"><p class="pa-block-title">FCRA Registration by City</p><p class="pa-block-sub">Expert FCRA registration with MHA liaison</p><div class="pa-city-grid"><a href="/fcra-registration/pune" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Pune</div><div class="pa-card-sub">Maharashtra</div></div></a><a href="/fcra-registration/mumbai" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Mumbai</div><div class="pa-card-sub">Maharashtra</div></div></a><a href="/fcra-registration/delhi" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Delhi</div><div class="pa-card-sub">NCR</div></div></a><a href="/fcra-registration/gurugram" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Gurugram</div><div class="pa-card-sub">Haryana</div></div></a></div></div><div class="pa-city-block"><p class="pa-block-title">Related NGO Services</p><p class="pa-block-sub">Comprehensive non-profit compliance</p><div class="pa-cross-grid"><a href="/ngo-registration" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M14 2H6a2 2 0 00-2 2v16a2 2 0 002 2h12a2 2 0 002-2V8z"/><path d="M14 2v6h6M16 13H8M16 17H8"/></svg></div><div><div class="pa-card-title">NGO Registration</div><div class="pa-card-sub">India</div></div></a><a href="/section8-company-registration" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M14 2H6a2 2 0 00-2 2v16a2 2 0 002 2h12a2 2 0 002-2V8z"/><path d="M14 2v6h6M16 13H8M16 17H8"/></svg></div><div><div class="pa-card-title">Section 8 Company</div><div class="pa-card-sub">India</div></div></a><a href="#" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M14 2H6a2 2 0 00-2 2v16a2 2 0 002 2h12a2 2 0 002-2V8z"/><path d="M14 2v6h6M16 13H8M16 17H8"/></svg></div><div><div class="pa-card-title">12A/80G Registration</div><div class="pa-card-sub">India</div></div></a><a href="/ngo-and-non-profit-accounting-services" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M14 2H6a2 2 0 00-2 2v16a2 2 0 002 2h12a2 2 0 002-2V8z"/><path d="M14 2v6h6M16 13H8M16 17H8"/></svg></div><div><div class="pa-card-title">NGO Accounting</div><div class="pa-card-sub">India</div></div></a><a href="/payroll-services-for-ngonon-profit-industry" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M14 2H6a2 2 0 00-2 2v16a2 2 0 002 2h12a2 2 0 002-2V8z"/><path d="M14 2v6h6M16 13H8M16 17H8"/></svg></div><div><div class="pa-card-title">Payroll for NGO</div><div class="pa-card-sub">India</div></div></a></div></div>
        </div>
    </div>
</section>

<!-- CONTENT FRESHNESS FOOTER -->
<section class="content-section" style="padding:32px;">
    <div class="content-container">
        <div class="text-content" style="font-size:13px;color:var(--text-muted);">
            <p><strong>Content Created:</strong> 10 March 2026 &nbsp;|&nbsp; <strong>Last Updated:</strong> <span id="lastUpdatedFooter">10 March 2026</span> &nbsp;|&nbsp; <strong>Next Review:</strong> 10 June 2026 &nbsp;|&nbsp; <strong>Reviewed By:</strong> CA &amp; CS Team, Patron Accounting LLP</p>
            <p>This page is reviewed quarterly - aligned to MHA circulars, FCRA extensions, amendment notifications, and compliance deadline changes. Next review: June 2026.</p>
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
     CONSULTATION FORM  -  Country Dropdown + Validation + Bigin Integration
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
