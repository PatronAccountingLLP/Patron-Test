

@extends('layouts.service-app')

<!-- External Dependencies (loaded by master layout in production) -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Barlow:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,400&family=DM+Sans:opsz,wght@9..40,400;9..40,500;9..40,600;9..40,700&display=swap" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

@section('meta')
    <title>GST Return Filing for Freelancers - GSTR-1, 3B & Threshold</title>
    <meta name="description" content="Freelancers earning above Rs 20 lakh must file GSTR-1 and GSTR-3B. Know GST return types, export under LUT, ITC claims, penalties and filing process. Starts Rs 1,499.">
    <link rel="canonical" href="/gst-returns-for-freelancers">
    <meta name="robots" content="index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1">
    <meta property="og:title" content="GST Return Filing for Freelancers - GSTR-1, 3B & Threshold">
    <meta property="og:description" content="Freelancers earning above Rs 20 lakh must file GSTR-1 and GSTR-3B. Know GST return types, export under LUT, ITC claims, penalties and filing process. Starts Rs 1,499.">
    <meta property="og:url" content="/gst-returns-for-freelancers">
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="Patron Accounting">
    <meta property="og:image" content="https://www.patronaccounting.com/images/og-default-square.png">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="1200">
    <meta property="og:image:type" content="image/png">
    <meta property="og:image:secure_url" content="https://www.patronaccounting.com/images/og-default-square.png">
    <meta property="og:image:alt" content="Patron Accounting - partner you can rely on">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="GST Return Filing for Freelancers - GSTR-1, 3B & Threshold">
    <meta name="twitter:description" content="Freelancers earning above Rs 20 lakh must file GSTR-1 and GSTR-3B. Know GST return types, export under LUT, ITC claims, penalties and filing process. Starts Rs 1,499.">
    <meta name="twitter:image" content="https://www.patronaccounting.com/images/og-default-square.png">
@endsection

@section('schema')
    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@graph": [
        {
          "@type": "Service",
          "name": "GST Return Filing for Freelancers - GSTR-1, 3B & Threshold",
          "description": "Freelancers earning above Rs 20 lakh must file GSTR-1 and GSTR-3B. Know GST return types, export under LUT, ITC claims, penalties and filing process. Starts Rs 1,499.",
          "url": "https://www.patronaccounting.com/gst-returns-for-freelancers",
          "serviceType": "GST Return Filing for Freelancers - GSTR-1, 3B & Threshold",
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
            "url": "https://www.patronaccounting.com/gst-returns-for-freelancers",
            "priceSpecification": {
              "@type": "PriceSpecification",
              "minPrice": "10",
              "maxPrice": "2499",
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
              "name": "GST Return Filing for Freelancers - GSTR-1, 3B & Threshold",
              "item": "https://www.patronaccounting.com/gst-returns-for-freelancers"
            }
          ]
        },
        {
          "@type": "FAQPage",
          "mainEntity": [
            {
              "@type": "Question",
              "name": "Is GST mandatory for freelancers in India?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "GST registration is mandatory when aggregate annual turnover exceeds Rs 20 lakh (Rs 10 lakh for special category states). Freelancers providing interstate services must register regardless of turnover. Even those below threshold serving foreign clients should register voluntarily for LUT and ITC refunds. Once registered, filing GSTR-1 and GSTR-3B every period is mandatory, including Nil returns."
              }
            },
            {
              "@type": "Question",
              "name": "What GST returns do freelancers need to file?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "GSTR-1 (outward supplies) by the 11th monthly, GSTR-3B (summary with tax payment) by the 20th monthly, and GSTR-9 (annual) by 31st December. QRMP scheme allows quarterly filing for turnover up to Rs 5 crore. Freelancers with exports additionally file LUT (Form RFD-11) annually and may need Form RFD-01 for ITC refund on accumulated credits."
              }
            },
            {
              "@type": "Question",
              "name": "Do freelancers with foreign clients need to pay GST?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "No, if services qualify as export under Section 2(6) IGST Act - all five conditions must be met: supplier in India, recipient outside India, place of supply outside India, payment in convertible forex, different legal entities. File LUT via Form RFD-11 to export without IGST. Without LUT, IGST must be paid and refunded later."
              }
            },
            {
              "@type": "Question",
              "name": "What is LUT and how to file it?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "LUT (Letter of Undertaking) is filed via Form RFD-11 on the GST portal. It allows zero-rated exports without paying IGST upfront. Log in to gst.gov.in, navigate to Services > User Services > Furnish LUT, select the financial year, provide two witness details, and sign. Valid one financial year (April-March). Must be renewed annually."
              }
            },
            {
              "@type": "Question",
              "name": "Can freelancers claim ITC on their expenses?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "Yes. ITC available on software subscriptions (Adobe, Figma, Canva Pro), cloud hosting (AWS, Google Cloud), internet bills, co-working space rent, laptop and equipment, professional services (CA, legal), and marketing tools. Supplier must be GST-registered, invoice reflected in GSTR-2B, and expense used for business. Personal expenses and blocked credits under Section 17(5) are not eligible."
              }
            },
            {
              "@type": "Question",
              "name": "What are the penalties for late filing?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "Late fee of Rs 50/day CGST + Rs 50/day SGST (Rs 100/day total) under Section 47, capped at Rs 10,000 per return. Nil returns: Rs 20/day capped at Rs 1,000. Interest at 18% on unpaid tax under Section 50. Portal blocks subsequent filings. From January 2026, returns older than 3 years cannot be filed at all."
              }
            },
            {
              "@type": "Question",
              "name": "How much does a CA charge for freelancer GST filing?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "Domestic freelancer filing from Rs 1,499/month. Export + LUT filing from Rs 2,499/month. LUT filing Rs 999/year. ITC refund (RFD-01) Rs 2,999 per application. Annual GSTR-9 from Rs 4,999. Free initial assessment available at Patron Accounting."
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
                        GST Returns for Freelancers - Types, Export LUT, ITC and Filing Process
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
                            <p class="mb-0 text-dark benefit-paragraph"><span>Threshold:</span> GST registration mandatory when freelance turnover exceeds Rs 20 lakh (Rs 10 lakh for special category states) under Section 22 CGST Act</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Export Benefits:</span> Export of services to foreign clients is zero-rated under Section 16 IGST Act - file LUT (Form RFD-11) annually to avoid upfront IGST</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>ITC Available:</span> Input Tax Credit on software (Adobe, Figma), internet, co-working space, equipment, and professional services used for freelancing</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Starting Fee:</span> Domestic filing from Rs 1,499/month | Export + LUT from Rs 2,499/month. 500+ freelancer GSTINs managed with 99% on-time rate.</p>
                        </div>
                    </div>

                    <p class="mb-4 fw-bold" style="color: var(--blue); font-size: 15px;">500+ freelancer GSTINs managed across IT, design, content, marketing, and consulting with 99% on-time filing rate</p>

                    <div class="hero-cta">
                        <a href="tel:+919459456700" class="btn-video text-decoration-none">
                            <span class="play-circle"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="width:14px;height:14px;color:#fff"><path d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/></svg></span>
                            Call +91 945 945 6700
                        </a>
                        <a href="mailto:sales@patronaccounting.com?subject=Freelancer%20GST%20Returns&body=Hello%20Patron%20Accounting%2C%0A%0AI%20need%20freelancer%20GST%20help.%0A%0APlease%20get%20in%20touch.%0A%0AThank%20you." class="btn-sample text-decoration-none">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="width:18px;height:18px;"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,12 2,6"/></svg>
                            Email Us
                        </a>
                        <a href="https://wa.me/919459456700?text=Hi%20Patron%20Accounting%2C%20I%20am%20a%20freelancer%20and%20need%20GST%20return%20filing%20help.%20Please%20share%20details." target="_blank" class="btn-sample text-decoration-none">
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
                                            'service'  => 'GST Returns for Freelancers',
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
    'ctaText'    => 'Expert GST filing for freelancers - monthly GSTR-1/3B, LUT for exports, ITC on software expenses, and FIRC documentation.',
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
            <a class="toc-btn" href="#overview-section">Overview</a><a class="toc-btn" href="#what-section">What Is It</a><a class="toc-btn" href="#who-section">Who Must File</a><a class="toc-btn" href="#services-section">Our Services</a><a class="toc-btn" href="#procedure-section">How to File</a><a class="toc-btn" href="#documents-section">Documents</a><a class="toc-btn" href="#challenges-section">Challenges</a><a class="toc-btn" href="#fees-section">Fees</a><a class="toc-btn" href="#timeline-section">Due Dates</a><a class="toc-btn" href="#benefits-section">Benefits</a><a class="toc-btn" href="#comparison-section">DIY vs Professional</a><a class="toc-btn" href="#faq-section">FAQs</a>
        </div>
        <button class="toc-arrow right" id="tocRight">&#10095;</button>
    </div>
</div>

<!-- SECTION 2: OVERVIEW / INTRO + TL;DR -->
<section class="content-section" id="overview-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">GST Returns for Freelancers - Overview</h2>
            <div class="content-text">
                <div class="highlight-box" style="margin-bottom:20px;">
                    <p><strong>&#128204; TL;DR - GST Returns for Freelancers Services at a Glance</strong></p>
                    <p>Freelancers earning above Rs 20 lakh must register for GST and file GSTR-1 (by 11th), GSTR-3B (by 20th) monthly, plus GSTR-9 annually. Domestic services attract 18% GST. Export services to foreign clients are zero-rated if five conditions under Section 2(6) IGST Act are met and LUT is filed. ITC can be claimed on software, internet, and professional expenses. Late filing attracts Rs 50/day per Act under Section 47.</p><div class="table-responsive-wrapper" style="margin-top:16px;"><table><thead><tr><th>Parameter</th><th>Details</th></tr></thead><tbody><tr><td>Registration Threshold</td><td>Rs 20 lakh (Rs 10 lakh special category) under Section 22 CGST Act</td></tr><tr><td>GST Rate (Domestic)</td><td>18% on most freelance services (9% CGST + 9% SGST or 18% IGST interstate)</td></tr><tr><td>GST Rate (Export)</td><td>Zero-rated under Section 16 IGST Act with LUT; or pay IGST and claim refund</td></tr><tr><td>Returns to File</td><td>GSTR-1 (sales), GSTR-3B (summary + payment), GSTR-9 (annual) - 25/year monthly</td></tr><tr><td>LUT Requirement</td><td>Form RFD-11 filed annually on GST portal for zero-rated exports</td></tr><tr><td>Late Fee (Section 47)</td><td>Rs 50/day CGST + Rs 50/day SGST (Rs 100/day), max Rs 10,000 per return</td></tr><tr><td>Patron Fee</td><td>Rs 1,499/month (domestic) | Rs 2,499/month (export + LUT)</td></tr></tbody></table></div><p style="margin-top:0;</p>
                </div>
                <p>India's freelance economy has grown exponentially, with web developers, designers, content writers, consultants, and digital marketers earning substantial income from both Indian and international clients. Under the CGST Act, 2017, freelancers are treated as service providers and must comply with GST registration, invoicing, return filing, and tax payment obligations once their turnover crosses the threshold.</p>
                <p>The complexity increases when freelancers serve foreign clients - qualifying exports as zero-rated under Section 16 of the IGST Act requires meeting all five conditions under Section 2(6), filing LUT via Form RFD-11, and correctly reporting exports in Table 6A of GSTR-1. Patron Accounting manages 500+ freelancer GSTINs from offices in Pune, Mumbai, Delhi, and Gurugram.</p>
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
                <h2 class="section-title">What Are GST Returns for Freelancers?</h2>
                <div class="content-text what-is-definition">
                    
                    <p>GST returns for freelancers are periodic filings under the CGST Act, 2017, where a GST-registered freelancer declares outward supplies (invoices raised to clients), input tax credit claimed on business expenses, and net tax liability for each tax period.</p><p>The two primary returns are GSTR-1 (outward supplies under Section 37, due by 11th) and GSTR-3B (summary and tax payment under Section 39, due by 20th). Freelancers with exports must additionally file LUT (Form RFD-11) annually and report export invoices in Table 6A of GSTR-1.</p><p>From July 2025, GSTR-3B has hard-locking on auto-populated liability fields. From January 2026, returns older than 3 years cannot be filed on the <a href="https://www.gst.gov.in" target="_blank" rel="noopener">GST portal</a>.</p>

                </div>
                <div class="highlight-box" style="margin-top:20px;">
                    <p><strong>Key Terms for GST Returns for Freelancers:</strong></p>
                    <p><strong>LUT (Letter of Undertaking)</strong> - Annual declaration via Form RFD-11 allowing freelancers to export services without paying IGST upfront. Valid one financial year. Renewed each April.</p><p><strong>Zero-Rated Supply</strong> - Exports under Section 16 IGST Act carrying 0% GST while still allowing full ITC claim on business inputs.</p><p><strong>Section 2(6) IGST Act</strong> - Five conditions for export of services: supplier in India, recipient outside India, place of supply outside India, payment in convertible forex, different legal entities.</p><p><strong>SAC Codes</strong> - IT consulting 998314, management consulting 998311, design services 998391, content writing 999612.</p>

                </div>
            </div>
            <div class="column-image">
                <div class="illustration-placeholder">
                    <div class="illustration-icon" style="max-width:240px;">
                        <svg viewBox="0 0 200 180" fill="none" xmlns="http://www.w3.org/2000/svg"><circle cx="100" cy="60" r="40" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><circle cx="100" cy="50" r="12" fill="none" stroke="#14365F" stroke-width="1.5"/><path d="M80 80 C80 65 120 65 120 80" fill="none" stroke="#14365F" stroke-width="1.5"/><rect x="70" y="95" width="60" height="20" rx="4" fill="#E8F5E9" stroke="#25D366" stroke-width="1"/><text x="100" y="108" font-size="7" fill="#25D366" font-weight="700" text-anchor="middle" font-family="Arial, sans-serif">FREELANCER</text><rect x="25" y="130" width="55" height="18" rx="4" fill="#FFF3E0" stroke="#F5A623" stroke-width="1"/><text x="52" y="142.5" font-size="6" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial, sans-serif">LUT + EXPORT</text><rect x="120" y="130" width="55" height="18" rx="4" fill="#E8F5E9" stroke="#25D366" stroke-width="1"/><text x="148" y="142.5" font-size="6" fill="#25D366" font-weight="700" text-anchor="middle" font-family="Arial, sans-serif">18% DOMESTIC</text><circle cx="165" cy="30" r="16" fill="#E8F5E9" stroke="#25D366" stroke-width="1.5"/><text x="165" y="34" font-size="6" fill="#25D366" font-weight="700" text-anchor="middle" font-family="Arial, sans-serif">ITC</text><text x="100" y="170" font-size="9" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial, sans-serif">GST Returns for Freelancers</text></svg>
                    </div>
                    <div class="illustration-badge">
                        <span>CGST + IGST Act</span>
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
            <h2 class="section-title">Which Freelancers Must File GST Returns?</h2>
            <div class="content-text">
                
                <ul><li><strong>Turnover exceeds Rs 20 lakh:</strong> Aggregate annual turnover from all freelance services crosses Rs 20 lakh in most states (Rs 10 lakh for special category states) under Section 22</li><li><strong>Interstate supply:</strong> Freelancers serving clients in other states must register regardless of turnover - a freelancer in Pune serving a Delhi client provides an interstate supply</li><li><strong>Export of services:</strong> Freelancers serving foreign clients must register to file LUT and claim zero-rated benefits, even if turnover is below threshold</li><li><strong>Voluntary registration:</strong> Freelancers below threshold may register under Section 25(3) to claim ITC, issue GST-compliant invoices, or file LUT</li></ul><p><strong>Covered freelancers:</strong> Web developers, graphic designers, content writers, digital marketers, SEO consultants, photographers, video editors, accountants, lawyers, architects, management consultants, data analysts, and all independent service providers.</p>

            </div>
            </div>
        </div>
    </div>
</section>

<!-- SECTION 5: OUR SERVICES -->
<section class="content-section" id="services-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Our GST Filing Services for Freelancers</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Service</th><th>What We Do</th></tr></thead>
                    <tbody>
                        <tr><td>Monthly GSTR-1 and GSTR-3B Filing</td><td>Invoice upload, ITC reconciliation with GSTR-2B, export reporting in Table 6A, and return submission via DSC or EVC on <a href="https://www.gst.gov.in" target="_blank" rel="noopener">gst.gov.in</a></td></tr><tr><td>LUT Filing and Renewal</td><td>Annual Form RFD-11 submission and renewal each April for zero-rated exports without IGST</td></tr><tr><td>ITC Optimisation</td><td>Monthly reconciliation of freelancer business expenses (software, internet, co-working, equipment) against GSTR-2B for maximum eligible ITC</td></tr><tr><td>Export Compliance Support</td><td>Five-condition export verification under Section 2(6) IGST Act, FIRC/e-FIRA documentation, and correct invoice formatting</td></tr><tr><td>Annual Return (GSTR-9)</td><td>Yearly consolidation of all monthly returns with reconciliation against books of accounts</td></tr><tr><td>GST Registration for New Freelancers</td><td>Complete <a href="/gst-registration">registration assistance</a> including PAN, address proof, bank details, and SAC code selection</td></tr>

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
            <h2 class="section-title">How to File GST Returns as a Freelancer</h2>
            <p class="section-subtitle" style="text-align:left;max-width:100%;">Step-by-step process for freelancer GST return filing under Sections 37 and 39 of the CGST Act, with specific guidance for export invoicing.</p>
        </header>
        <div class="steps-container">
            <div class="step-card"><div class="step-content"><span class="step-badge">Step 1</span><h3 class="step-title">Compile All Invoices</h3><p class="step-description">Categorise into domestic B2B (with client GSTIN), domestic B2C, and export invoices (with foreign client details and LUT reference). Ensure all e-invoices are accounted for.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Domestic invoices sorted</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Export invoices with LUT</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="10" y="10" width="40" height="55" rx="4" fill="#F0F4F8" stroke="#14365F" stroke-width="1.2"/><rect x="40" y="15" width="40" height="55" rx="4" fill="#F0F4F8" stroke="#14365F" stroke-width="1.2"/><rect x="70" y="10" width="40" height="55" rx="4" fill="#F0F4F8" stroke="#14365F" stroke-width="1.2"/><text x="30" y="42" font-size="5" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">B2B</text><text x="60" y="47" font-size="5" fill="#F5A623" font-weight="700" text-anchor="middle" font-family="Arial">EXPORT</text><text x="90" y="42" font-size="5" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">B2C</text></svg></div><span class="illustration-label">Invoices Ready</span><span class="step-number-large">01</span></div></div></div>
<div class="step-card"><div class="step-content"><span class="step-badge">Step 2</span><h3 class="step-title">Collect Purchase Invoices for ITC</h3><p class="step-description">Gather purchase invoices for ITC claim: software subscriptions (Adobe, Figma, GitHub), internet bills, co-working space rent, equipment purchases, cloud hosting, and CA/legal fees.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> All expenses collected</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> GST-paid invoices identified</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="20" y="10" width="80" height="65" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><rect x="30" y="22" width="60" height="8" rx="2" fill="#E8F5E9" stroke="#25D366" stroke-width="0.8"/><rect x="30" y="34" width="60" height="8" rx="2" fill="#FFF3E0" stroke="#F5A623" stroke-width="0.8"/><rect x="30" y="46" width="60" height="8" rx="2" fill="#E8F5E9" stroke="#25D366" stroke-width="0.8"/><text x="60" y="29" font-size="4" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">SOFTWARE</text><text x="60" y="41" font-size="4" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">INTERNET</text><text x="60" y="53" font-size="4" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">CO-WORK</text></svg></div><span class="illustration-label">ITC Ready</span><span class="step-number-large">02</span></div></div></div>
<div class="step-card"><div class="step-content"><span class="step-badge">Step 3</span><h3 class="step-title">Reconcile with GSTR-2B</h3><p class="step-description">Match purchase invoices with the auto-populated GSTR-2B available on the 14th of each month. Identify missing credits and follow up with vendors before the filing deadline.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> GSTR-2B matched</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Missing credits flagged</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="20" y="10" width="80" height="65" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><circle cx="55" cy="38" r="15" fill="none" stroke="#F5A623" stroke-width="2"/><line x1="66" y1="48" x2="78" y2="60" stroke="#F5A623" stroke-width="3" stroke-linecap="round"/><text x="60" y="68" font-size="6" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">GSTR-2B</text></svg></div><span class="illustration-label">ITC Reconciled</span><span class="step-number-large">03</span></div></div></div>
<div class="step-card"><div class="step-content"><span class="step-badge">Step 4</span><h3 class="step-title">File GSTR-1 by the 11th</h3><p class="step-description">Upload domestic invoices in Table 4A (B2B) and Table 7 (B2C). Report export invoices in Table 6A with shipping bill details or 'Not Applicable' for services. Mark 'Without Payment of Tax' if LUT is filed.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Table 6A exports reported</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> LUT declaration marked</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="15" y="5" width="90" height="75" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><rect x="15" y="5" width="90" height="16" rx="6" fill="#14365F"/><text x="60" y="17" font-size="7" fill="#fff" font-weight="700" text-anchor="middle" font-family="Arial">GSTR-1</text><text x="40" y="38" font-size="5" fill="#14365F" font-weight="600" text-anchor="middle" font-family="Arial">4A B2B</text><text x="80" y="38" font-size="5" fill="#F5A623" font-weight="700" text-anchor="middle" font-family="Arial">6A Export</text><text x="60" y="55" font-size="5" fill="#14365F" font-weight="600" text-anchor="middle" font-family="Arial">7 B2C</text></svg></div><span class="illustration-label">GSTR-1 Filed</span><span class="step-number-large">04</span></div></div></div>
<div class="step-card"><div class="step-content"><span class="step-badge">Step 5</span><h3 class="step-title">Complete GSTR-3B</h3><p class="step-description">Review auto-populated data from GSTR-1 (liability) and GSTR-2B (ITC). Report exports in Table 3.1(b) for exports with IGST or Table 3.1(d) for zero-rated under LUT. Compute net tax after ITC offset.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Auto-populated validated</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Export tables completed</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="15" y="5" width="90" height="75" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><rect x="15" y="5" width="90" height="16" rx="6" fill="#14365F"/><text x="60" y="17" font-size="7" fill="#fff" font-weight="700" text-anchor="middle" font-family="Arial">GSTR-3B</text><text x="60" y="40" font-size="5" fill="#14365F" font-weight="600" text-anchor="middle" font-family="Arial">3.1(b) Export IGST</text><text x="60" y="55" font-size="5" fill="#F5A623" font-weight="700" text-anchor="middle" font-family="Arial">3.1(d) LUT Zero</text></svg></div><span class="illustration-label">GSTR-3B Ready</span><span class="step-number-large">05</span></div></div></div>
<div class="step-card"><div class="step-content"><span class="step-badge">Step 6</span><h3 class="step-title">Pay Tax, Submit and Claim Refund</h3><p class="step-description">Pay any tax due via electronic cash ledger. Submit GSTR-3B by the 20th using DSC or EVC. For accumulated ITC from exports under LUT, file refund Form RFD-01 with export invoices and FIRC proof.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Tax paid and filed</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> RFD-01 for ITC refund</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="20" y="10" width="80" height="65" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><circle cx="60" cy="38" r="18" fill="#E8F5E9" stroke="#25D366" stroke-width="1.5"/><path d="M52 38l5 5 11-11" stroke="#25D366" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"/><text x="60" y="68" font-size="6" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">BY 20TH</text></svg></div><span class="illustration-label">Complete</span><span class="step-number-large">06</span></div></div></div>

        </div>
    </div>
</section>

<!-- SECTION 8: DOCUMENTS REQUIRED -->
<section class="content-section" id="documents-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Documents Required for Freelancer GST Filing</h2>
            <div class="content-text">
                
                <ul><li><strong>All sales invoices</strong> raised during the period (domestic and export)</li><li><strong>Purchase invoices</strong> for business expenses (software, internet, rent, equipment)</li><li><strong>FIRC or e-FIRA</strong> for each foreign payment received (proof of export proceeds)</li><li><strong>LUT acknowledgement</strong> (Form RFD-11 ARN) for the current financial year</li><li><strong>Bank statements</strong> showing foreign currency receipts converted to INR</li><li><strong>GSTR-2B</strong> auto-populated ITC statement (available from 14th)</li><li><strong>Client contracts or SOWs</strong> for export services (to prove five conditions)</li><li><strong>Previous period GSTR-1 and GSTR-3B</strong> filed copies</li><li><strong>DSC or registered mobile</strong> for EVC verification</li></ul>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 9: CHALLENGES -->
<section class="content-section" id="challenges-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Common Freelancer GST Challenges and Solutions</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Challenge</th><th>Impact</th><th>How Patron Accounting Solves It</th></tr></thead>
                    <tbody>
                        <tr><td>Export Not Qualifying as Zero-Rated</td><td>One of the five conditions under Section 2(6) IGST Act is not met, resulting in 18% GST liability on foreign invoices</td><td>Verify all five conditions before invoicing: supplier in India, recipient outside India, place of supply outside India, payment in convertible forex, different legal entities. Maintain contracts and FIRC/e-FIRA.</td></tr><tr><td>ITC Accumulation with No Domestic Tax</td><td>100% export revenue under LUT means no domestic output tax to offset ITC against</td><td>File ITC refund via Form RFD-01 for accumulated credit. Maintain invoice-level matching with GSTR-2B to avoid refund rejection.</td></tr><tr><td>Export vs Domestic Table Confusion</td><td>Wrong table mapping in GSTR-1 causes misreporting of exports</td><td>Domestic B2B in Table 4A, B2C in Table 7, export invoices in Table 6A with LUT declaration. Use GST software or CA for accurate mapping.</td></tr><tr><td>Forgetting to Renew LUT</td><td>Lapsed LUT means IGST must be charged on export invoices</td><td>File Form RFD-11 as soon as the new FY starts each April. Without LUT, invoices require IGST which must then be refunded.</td></tr>

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
            <h2 class="section-title">GST Return Filing Fees for Freelancers</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Fee Component</th><th>Amount</th></tr></thead>
                    <tbody>
                        <tr><td>Monthly GSTR-1 + GSTR-3B (Domestic)</td><td>Starting from INR 1,499/month</td></tr><tr><td>Monthly GSTR-1 + GSTR-3B (Export + LUT)</td><td>Starting from INR 2,499/month</td></tr><tr><td>Quarterly QRMP Filing</td><td>Rs 2,999/quarter</td></tr><tr><td>LUT Filing and Renewal (Form RFD-11)</td><td>Rs 999/year</td></tr><tr><td>ITC Refund Application (Form RFD-01)</td><td>Rs 2,999 per application</td></tr><tr><td>Annual Return GSTR-9</td><td>Starting from Rs 4,999</td></tr><tr><td>GST Registration for New Freelancers</td><td>Rs 1,999</td></tr>

                    </tbody>
                </table>
                </div>
                <p style="margin-top:16px;font-size:13px;color:var(--text-muted);font-style:italic;">All fees and charges listed are indicative only and do not constitute a binding offer. Final amounts may vary depending on the volume of work and the complexity involved.</p>
                <p style="margin-top:16px;">Professional service charges for drafting, filing, and representation are separate from the statutory fees. The exact fee depends on the complexity of the case, disputed amount, and number of hearings required. Contact us for a detailed quote.</p>
                <p style="margin-top:16px;"><strong>Get a free GST Returns for Freelancers consultation - <a href="tel:+919459456700">Call +91 945 945 6700</a> or <a href="https://wa.me/919459456700?text=Hi%20Patron%20Accounting%2C%20I%20need%20freelancer%20GST%20return%20help.%20Please%20call%20me." target="_blank">WhatsApp us</a>. No-obligation assessment.</strong></p>
            </div>
        </div>
    </div>
</section>

<!-- SECTION 11: TIMELINE -->
<section class="content-section" id="timeline-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Filing Due Dates for Freelancers</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Stage</th><th>Estimated Timeline</th></tr></thead>
                    <tbody>
                        <tr><td>GSTR-1 (Monthly)</td><td>11th of next month | Our turnaround: by 9th</td></tr><tr><td>GSTR-1 (Quarterly - QRMP)</td><td>13th of month after quarter | By 11th</td></tr><tr><td>GSTR-3B (Monthly)</td><td>20th of next month | By 18th</td></tr><tr><td>LUT (Form RFD-11)</td><td>Before first export invoice of FY | Within 1 day</td></tr><tr><td>GSTR-9 (Annual)</td><td>31st December | By 15th December</td></tr><tr><td>RFD-01 (ITC Refund)</td><td>Within 2 years of export | 10-15 working days</td></tr>

                    </tbody>
                </table>
                </div>
                <div class="highlight-box" style="margin-top:16px;">
                    
                    <p><strong>Critical for exporters:</strong> LUT (Form RFD-11) must be renewed at the start of each financial year (April). A lapsed LUT means IGST liability on all export invoices during the gap period. From January 2026, returns older than 3 years cannot be filed. File 2-3 days before deadlines to avoid portal issues.</p>

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
            <h2 class="section-title">Benefits of Professional GST Filing for Freelancers</h2>
        </div>
        <div class="features-grid" style="display:grid;grid-template-columns:repeat(3,1fr);gap:24px;"><article class="feature-card" style="background:var(--white);border:1px solid var(--gray-200);border-radius:var(--radius-lg);padding:28px;"><div style="width:48px;height:48px;background:var(--orange-light);border-radius:var(--radius-md);display:flex;align-items:center;justify-content:center;margin-bottom:16px;"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><path d="M2 12h20M12 2a15.3 15.3 0 014 10 15.3 15.3 0 01-4 10 15.3 15.3 0 01-4-10 15.3 15.3 0 014-10z"/></svg></div><h3 style="font-size:17px;font-weight:700;color:var(--blue);margin-bottom:8px;">Correct Export Classification</h3><p style="font-size:14px;color:var(--text-secondary);line-height:1.6;margin:0;">Ensures every foreign invoice qualifies as zero-rated under Section 2(6) IGST Act, avoiding unexpected 18% GST liability</p></article><article class="feature-card" style="background:var(--white);border:1px solid var(--gray-200);border-radius:var(--radius-lg);padding:28px;"><div style="width:48px;height:48px;background:var(--orange-light);border-radius:var(--radius-md);display:flex;align-items:center;justify-content:center;margin-bottom:16px;"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><line x1="12" y1="1" x2="12" y2="23"/><path d="M17 5H9.5a3.5 3.5 0 000 7h5a3.5 3.5 0 010 7H6"/></svg></div><h3 style="font-size:17px;font-weight:700;color:var(--blue);margin-bottom:8px;">Maximum ITC Recovery</h3><p style="font-size:14px;color:var(--text-secondary);line-height:1.6;margin:0;">Monthly GSTR-2B reconciliation captures all eligible credits on software, cloud hosting, internet, equipment, and professional services</p></article><article class="feature-card" style="background:var(--white);border:1px solid var(--gray-200);border-radius:var(--radius-lg);padding:28px;"><div style="width:48px;height:48px;background:var(--orange-light);border-radius:var(--radius-md);display:flex;align-items:center;justify-content:center;margin-bottom:16px;"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M22 11.08V12a10 10 0 11-5.93-9.14"/><path d="M22 4L12 14.01l-3-3"/></svg></div><h3 style="font-size:17px;font-weight:700;color:var(--blue);margin-bottom:8px;">LUT Compliance</h3><p style="font-size:14px;color:var(--text-secondary);line-height:1.6;margin:0;">Timely annual renewal prevents lapses that would require IGST payment on export invoices. Automatic renewal reminder each April.</p></article><article class="feature-card" style="background:var(--white);border:1px solid var(--gray-200);border-radius:var(--radius-lg);padding:28px;"><div style="width:48px;height:48px;background:var(--orange-light);border-radius:var(--radius-md);display:flex;align-items:center;justify-content:center;margin-bottom:16px;"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M14 2H6a2 2 0 00-2 2v16a2 2 0 002 2h12a2 2 0 002-2V8z"/><path d="M14 2v6h6M16 13H8M16 17H8"/></svg></div><h3 style="font-size:17px;font-weight:700;color:var(--blue);margin-bottom:8px;">FIRC/e-FIRA Management</h3><p style="font-size:14px;color:var(--text-secondary);line-height:1.6;margin:0;">Documentation maintained for every foreign payment - essential for ITC refund applications via Form RFD-01</p></article><article class="feature-card" style="background:var(--white);border:1px solid var(--gray-200);border-radius:var(--radius-lg);padding:28px;"><div style="width:48px;height:48px;background:var(--orange-light);border-radius:var(--radius-md);display:flex;align-items:center;justify-content:center;margin-bottom:16px;"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><path d="M12 6v6l4 2"/></svg></div><h3 style="font-size:17px;font-weight:700;color:var(--blue);margin-bottom:8px;">Zero Late Fees</h3><p style="font-size:14px;color:var(--text-secondary);line-height:1.6;margin:0;">Returns filed 2-3 days before deadline, avoiding Rs 100/day penalties under Section 47 and 18% interest under Section 50</p></article></div>
    </div>
</section>

<!-- SECTION 12A: SOCIAL PROOF -->
<section class="content-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Why Freelancers Trust Patron Accounting</h2>
            <div class="content-text">
                
                <p><strong>500+ freelancer GSTINs managed</strong> across IT, design, content, marketing, and consulting. <strong>99% on-time filing rate</strong> with zero missed deadlines in FY 2025-26. <strong>Rs 2.5 Cr+ ITC refunds processed</strong> for freelancers exporting under LUT. <strong>4.8/5 Google rating</strong> from 200+ reviews. Offices in Pune, Mumbai, Delhi, and Gurugram with dedicated freelancer compliance desk.</p>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 13: SELF-FILING vs PROFESSIONAL COMPARISON -->
<section class="content-section" id="comparison-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">DIY vs Professional GST Filing for Freelancers</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Parameter</th><th>DIY Filing</th><th>CA-Assisted Filing</th></tr></thead>
                    <tbody>
                        <tr><td>Export Classification</td><td>Risk of incorrect table mapping</td><td>Five-condition verification for every invoice</td></tr><tr><td>ITC Claims</td><td>Often missed on cloud/software expenses</td><td>Monthly GSTR-2B reconciliation for all eligible inputs</td></tr><tr><td>LUT Management</td><td>Often forgotten at FY start</td><td>Automatic renewal reminder and filing each April</td></tr><tr><td>FIRC Documentation</td><td>Scattered across bank portals</td><td>Centralised FIRC/e-FIRA tracking per invoice</td></tr><tr><td>Filing Timeliness</td><td>Often last-minute</td><td>Filed 2-3 days before every deadline</td></tr><tr><td>Cost</td><td>Rs 0 (but compliance risk is high)</td><td>Rs 1,499/month onwards</td></tr>

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
            <h2 class="section-title">Related Services for Freelancers</h2>
            <div class="content-text">
                
                <ul><li><a href="/gst-registration">GST Registration</a> - For new freelancers requiring GSTIN</li><li><a href="/gst-returns">GST Returns</a> - Comprehensive guide to all GST return types</li><li><a href="/gst-notice">GST Notice</a> - Expert reply for scrutiny notices</li><li><a href="/income-tax-return">Income Tax Return</a> - ITR filing under Section 44ADA for freelancers</li><li><a href="/accounting-services">Bookkeeping</a> - Monthly bookkeeping for accurate GST data</li></ul>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 15A: LEGAL FRAMEWORK -->
<section class="content-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Legal Framework for Freelancer GST</h2>
            <div class="content-text">
                
                <div class="table-responsive-wrapper"><table><thead><tr><th>Provision</th><th>Key Requirement</th></tr></thead><tbody><tr><td>Section 22 CGST Act</td><td>Registration mandatory when turnover exceeds Rs 20 lakh (Rs 10 lakh special category). Interstate supply requires registration regardless.</td></tr><tr><td><a href="https://www.gst.gov.in" target="_blank" rel="noopener">Section 37 CGST</a></td><td>GSTR-1 reporting all outward supplies by 11th monthly (13th quarterly under QRMP).</td></tr><tr><td>Section 39 CGST</td><td>GSTR-3B summary return with tax payment by 20th. Hard-locking from July 2025.</td></tr><tr><td><a href="https://taxinformation.cbic.gov.in" target="_blank" rel="noopener">Section 2(6) IGST Act</a></td><td>Five conditions for export of services: supplier in India, recipient outside India, place of supply outside India, payment in convertible forex, different legal entities.</td></tr><tr><td>Section 16 IGST Act</td><td>Exports are zero-rated (0% GST, full ITC). Two options: LUT without IGST, or pay IGST and claim refund.</td></tr><tr><td>Section 47 CGST</td><td>Late fee Rs 50/day CGST + Rs 50/day SGST, capped at Rs 5,000 per Act. Nil: Rs 10/day capped at Rs 500.</td></tr></tbody></table></div><p><strong>Composition option:</strong> Freelancers with turnover up to Rs 50 lakh can opt for composition scheme (Notification 2/2019-CTR) paying 6% GST but cannot claim ITC or charge GST to clients.</p>

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
                    <h2 class="faq-expanded__title">Frequently Asked Questions - Freelancer GST Returns</h2>
                    <p class="faq-expanded__lead">Expert answers about GST return filing for freelancers, export LUT, ITC claims, and compliance.</p>
                    @include('partials.bigin-form', [
                        'variant'  => 'compact',
                        'service'  => 'GST Returns for Freelancers',
                    ])
                </aside>
                <div class="faq-expanded__list">
                    <div class="faq-expanded__item" id="faq-1">
                        <h3 class="faq-expanded__q">Is GST mandatory for freelancers in India?</h3>
                        <div class="faq-expanded__a"><p>GST registration is mandatory when aggregate annual turnover exceeds Rs 20 lakh (Rs 10 lakh for special category states). Freelancers providing interstate services must register regardless of turnover. Even those below threshold serving foreign clients should register voluntarily for LUT and ITC refunds. Once registered, filing GSTR-1 and GSTR-3B every period is mandatory, including Nil returns.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-2">
                        <h3 class="faq-expanded__q">What GST returns do freelancers need to file?</h3>
                        <div class="faq-expanded__a"><p>GSTR-1 (outward supplies) by the 11th monthly, GSTR-3B (summary with tax payment) by the 20th monthly, and GSTR-9 (annual) by 31st December. QRMP scheme allows quarterly filing for turnover up to Rs 5 crore. Freelancers with exports additionally file LUT (Form RFD-11) annually and may need Form RFD-01 for ITC refund on accumulated credits.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-3">
                        <h3 class="faq-expanded__q">Do freelancers with foreign clients need to pay GST?</h3>
                        <div class="faq-expanded__a"><p>No, if services qualify as export under Section 2(6) IGST Act - all five conditions must be met: supplier in India, recipient outside India, place of supply outside India, payment in convertible forex, different legal entities. File LUT via Form RFD-11 to export without IGST. Without LUT, IGST must be paid and refunded later.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-4">
                        <h3 class="faq-expanded__q">What is LUT and how to file it?</h3>
                        <div class="faq-expanded__a"><p>LUT (Letter of Undertaking) is filed via Form RFD-11 on the GST portal. It allows zero-rated exports without paying IGST upfront. Log in to gst.gov.in, navigate to Services > User Services > Furnish LUT, select the financial year, provide two witness details, and sign. Valid one financial year (April-March). Must be renewed annually.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-5">
                        <h3 class="faq-expanded__q">Can freelancers claim ITC on their expenses?</h3>
                        <div class="faq-expanded__a"><p>Yes. ITC available on software subscriptions (Adobe, Figma, Canva Pro), cloud hosting (AWS, Google Cloud), internet bills, co-working space rent, laptop and equipment, professional services (CA, legal), and marketing tools. Supplier must be GST-registered, invoice reflected in GSTR-2B, and expense used for business. Personal expenses and blocked credits under Section 17(5) are not eligible.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-6">
                        <h3 class="faq-expanded__q">What are the penalties for late filing?</h3>
                        <div class="faq-expanded__a"><p>Late fee of Rs 50/day CGST + Rs 50/day SGST (Rs 100/day total) under Section 47, capped at Rs 10,000 per return. Nil returns: Rs 20/day capped at Rs 1,000. Interest at 18% on unpaid tax under Section 50. Portal blocks subsequent filings. From January 2026, returns older than 3 years cannot be filed at all.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-7">
                        <h3 class="faq-expanded__q">How much does a CA charge for freelancer GST filing?</h3>
                        <div class="faq-expanded__a"><p>Domestic freelancer filing from Rs 1,499/month. Export + LUT filing from Rs 2,499/month. LUT filing Rs 999/year. ITC refund (RFD-01) Rs 2,999 per application. Annual GSTR-9 from Rs 4,999. Free initial assessment available at Patron Accounting.</p></div>
                    </div>
                </div>
            </div>


            <!-- Quick Answers -->
            <div class="highlight-box" style="margin-top:32px;">
                <p><strong>Quick Answers</strong></p>
                <p><strong>Do freelancers need to file GST?</strong> Yes, every GST-registered freelancer must file GSTR-1 and GSTR-3B every period, plus GSTR-9 annually. Nil returns mandatory even with zero invoices.</p><p><strong>GST rate for freelancers?</strong> 18% domestic. Export services zero-rated (0%) under LUT. Composition scheme: 6% flat on turnover.</p><p><strong>What is LUT?</strong> Letter of Undertaking via Form RFD-11. Filed annually. Allows zero-rated exports without paying IGST upfront while claiming ITC.</p><p><strong>ITC on software?</strong> Yes. Adobe, Figma, AWS, GitHub, internet, co-working, equipment - all eligible if supplier is GST-registered and invoice appears in GSTR-2B.</p>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 18: URGENCY CTA -->
<section class="content-section" style="background: var(--orange-lighter) !important; border-left: 4px solid var(--orange);">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">File Your Freelancer GST Returns On Time</h2>
            <div class="content-text">
                
                <p>From January 2026, the GST portal prevents filing returns older than 3 years. If you have pending returns, they may be approaching the permanent filing bar. Freelancers exporting under LUT must renew Form RFD-11 at the start of each financial year - a lapsed LUT means IGST liability on all export invoices during the gap. Every day adds Rs 100 in late fees plus 18% interest.</p><p><strong>Focus on your freelance work, we handle GST.</strong> <a href="tel:+919459456700">Call +91 945 945 6700</a> or <a href="https://wa.me/919459456700?text=Hi%20Patron%20Accounting%2C%20I%20am%20a%20freelancer%20and%20need%20GST%20return%20filing%20help.%20Please%20share%20details." target="_blank">WhatsApp us</a> for a free assessment.</p>

            </div>
        </div>
    </div>
</section>

<!-- CONCLUSION + CTA BLOCK (Dark) -->
<section class="content-section" style="background: var(--blue) !important;">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title" style="color:#FFFFFF !important;">Focus on Your Freelance Work - We Handle GST</h2>
            <div class="content-text" style="text-align:left;">
                
                <p style="color:rgba(255,255,255,0.9);font-size:15px;line-height:1.7;">GST return filing for freelancers requires nuanced understanding of domestic invoicing, export classification, LUT management, ITC claims, and periodic deadlines. Whether you serve foreign clients under LUT, invoice Indian agencies at 18%, or split revenue between domestic and export, your GST compliance must be precise.</p><p style="color:rgba(255,255,255,0.9);font-size:15px;line-height:1.7;">Patron Accounting manages 500+ freelancer GSTINs with a 99% on-time rate and Rs 2.5 Cr+ ITC refunds processed. Domestic filing from Rs 1,499/month, export + LUT from Rs 2,499/month. Offices in Pune, Mumbai, Delhi, and Gurugram.</p>

            </div>
            <div style="display:flex;gap:14px;flex-wrap:wrap;margin-top:24px;">
                <a href="tel:+919459456700" style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:var(--orange);color:#fff;border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#128222; Call +91 945 945 6700</a>
                <a href="https://wa.me/919459456700?text=Hi%20Patron%20Accounting%2C%20I%20need%20freelancer%20GST%20return%20help.%20Please%20call%20me." target="_blank" style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:#25D366;color:#fff;border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#128172; WhatsApp Us</a>
                <a href="mailto:sales@patronaccounting.com?subject=Freelancer%20GST%20Return%20Filing&body=Hello%20Patron%20Accounting%2C%0A%0AI%20am%20a%20freelancer%20and%20need%20GST%20return%20filing%20help.%0A%0APlease%20get%20in%20touch.%0A%0AThank%20you." style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:transparent;color:#fff;border:2px solid rgba(255,255,255,0.3);border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#9993;&#65039; Email Us</a>
            </div>
            <p style="color:rgba(255,255,255,0.7);font-size:13px;margin-top:16px;">Book a Free Consultation - No Obligation.</p>
        </div>
    </div>
</section>

<!-- GSTAT STATE BENCH CITY PAGES (32 Pages) -->
<section class="content-section" style="padding:48px 32px;background:var(--gray-50);">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title" style="text-align:center;margin-bottom:12px;">Freelancer GST Filing Services Across India</h2>
            <p style="text-align:center;color:var(--text-muted);font-size:15px;margin-bottom:40px;">Patron Accounting files GST returns for freelancers in major cities across India.</p>
           
            <div class="pa-city-block" style="margin-bottom:40px;"><p class="pa-block-title">Freelancer GST Returns by City</p><p class="pa-block-sub">Expert filing with export LUT and ITC support</p><div class="pa-city-grid"><a href="/gst-returns-for-freelancers/pune" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Pune</div><div class="pa-card-sub">Maharashtra</div></div></a><a href="/gst-returns-for-freelancers/delhi" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Delhi</div><div class="pa-card-sub">NCR</div></div></a><a href="/gst-returns-for-freelancers/gurugram" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Gurugram</div><div class="pa-card-sub">Haryana</div></div></a></div></div><div class="pa-city-block"><p class="pa-block-title">Related Freelancer Services</p><p class="pa-block-sub">Complete freelancer compliance</p><div class="pa-cross-grid"><a href="/gst-registration" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M14 2H6a2 2 0 00-2 2v16a2 2 0 002 2h12a2 2 0 002-2V8z"/><path d="M14 2v6h6M16 13H8M16 17H8"/></svg></div><div><div class="pa-card-title">GST Registration</div><div class="pa-card-sub">India</div></div></a><a href="/gst-returns" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M14 2H6a2 2 0 00-2 2v16a2 2 0 002 2h12a2 2 0 002-2V8z"/><path d="M14 2v6h6M16 13H8M16 17H8"/></svg></div><div><div class="pa-card-title">GST Returns</div><div class="pa-card-sub">All Types</div></div></a><a href="/gst-notice" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M14 2H6a2 2 0 00-2 2v16a2 2 0 002 2h12a2 2 0 002-2V8z"/><path d="M14 2v6h6M16 13H8M16 17H8"/></svg></div><div><div class="pa-card-title">GST Notice</div><div class="pa-card-sub">Reply</div></div></a><a href="/income-tax-return" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M14 2H6a2 2 0 00-2 2v16a2 2 0 002 2h12a2 2 0 002-2V8z"/><path d="M14 2v6h6M16 13H8M16 17H8"/></svg></div><div><div class="pa-card-title">Income Tax Return</div><div class="pa-card-sub">44ADA</div></div></a><a href="/accounting-services" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M14 2H6a2 2 0 00-2 2v16a2 2 0 002 2h12a2 2 0 002-2V8z"/><path d="M14 2v6h6M16 13H8M16 17H8"/></svg></div><div><div class="pa-card-title">Bookkeeping</div><div class="pa-card-sub">Monthly</div></div></a><a href="/iec-registration" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M14 2H6a2 2 0 00-2 2v16a2 2 0 002 2h12a2 2 0 002-2V8z"/><path d="M14 2v6h6M16 13H8M16 17H8"/></svg></div><div><div class="pa-card-title">IEC Registration</div><div class="pa-card-sub">Export</div></div></a></div></div>
        </div>
    </div>
</section>

<!-- CONTENT FRESHNESS FOOTER -->
<section class="content-section" style="padding:32px;">
    <div class="content-container">
        <div class="text-content" style="font-size:13px;color:var(--text-muted);">
            <p><strong>Content Created:</strong> March 2026 &nbsp;|&nbsp; <strong>Last Updated:</strong> <span id="lastUpdatedFooter">20 April 2026</span> &nbsp;|&nbsp; <strong>Next Review:</strong> June 2026 &nbsp;|&nbsp; <strong>Reviewed By:</strong> CA &amp; CS Team, Patron Accounting LLP</p>
            <p>This page is reviewed quarterly - aligned to GST Council meetings, CBIC notifications, LUT/export rule changes, and portal updates. Next review: June 2026.</p>
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
