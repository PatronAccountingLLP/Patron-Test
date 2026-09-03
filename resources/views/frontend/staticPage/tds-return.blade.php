
@extends('layouts.service-app')

<!-- External Dependencies (loaded by master layout in production) -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Barlow:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,400&family=DM+Sans:opsz,wght@9..40,400;9..40,500;9..40,600;9..40,700&display=swap" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

@section('meta')
    <title>TDS Returns in India - 24Q, 26Q, 27Q & 27EQ Forms Guide</title>
    <meta name="description" content="File TDS returns quarterly - Form 24Q for salary, 26Q for non-salary, 27Q for NRI payments. Expert filing from Rs 1,999 per quarter. Avoid Section 234E penalties.">
    <link rel="canonical" href="/tds-return">
    <meta name="robots" content="index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1">
    <meta property="og:title" content="TDS Returns in India - 24Q, 26Q, 27Q & 27EQ Forms Guide">
    <meta property="og:description" content="File TDS returns quarterly - Form 24Q for salary, 26Q for non-salary, 27Q for NRI payments. Expert filing from Rs 1,999 per quarter. Avoid Section 234E penalties.">
    <meta property="og:url" content="/tds-return">
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="Patron Accounting">
    <meta property="og:image" content="https://www.patronaccounting.com/images/og-default-square.png">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="1200">
    <meta property="og:image:type" content="image/png">
    <meta property="og:image:secure_url" content="https://www.patronaccounting.com/images/og-default-square.png">
    <meta property="og:image:alt" content="Patron Accounting - partner you can rely on">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="TDS Returns in India - 24Q, 26Q, 27Q & 27EQ Forms Guide">
    <meta name="twitter:description" content="File TDS returns quarterly - Form 24Q for salary, 26Q for non-salary, 27Q for NRI payments. Expert filing from Rs 1,999 per quarter. Avoid Section 234E penalties.">
    <meta name="twitter:image" content="https://www.patronaccounting.com/images/og-default-square.png">
@endsection

@section('schema')
    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@graph": [
        {
          "@type": "Service",
          "name": "TDS Return Filing: 24Q 26Q 27Q Guide",
          "description": "File TDS returns quarterly - Form 24Q for salary, 26Q for non-salary, 27Q for NRI payments. Expert filing from Rs 1,999 per quarter. Avoid Section 234E penalties.",
          "url": "https://www.patronaccounting.com/tds-return",
          "serviceType": "TDS Return Filing: 24Q 26Q 27Q Guide",
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
            "url": "https://www.patronaccounting.com/tds-return",
            "priceSpecification": {
              "@type": "PriceSpecification",
              "minPrice": "200",
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
              "name": "TDS Return Filing: 24Q 26Q 27Q Guide",
              "item": "https://www.patronaccounting.com/tds-return"
            }
          ]
        },
        {
          "@type": "FAQPage",
          "mainEntity": [
            {
              "@type": "Question",
              "name": "What are the due dates for filing TDS returns?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "TDS returns are filed quarterly. Forms 24Q, 26Q, 27Q: Q1 (Apr-Jun) by 31st July, Q2 (Jul-Sep) by 31st October, Q3 (Oct-Dec) by 31st January, Q4 (Jan-Mar) by 31st May. Form 27EQ (TCS) has earlier due dates: 15th July, 15th October, 15th January, and 15th May. TDS deposit is due by the 7th of each month."
              }
            },
            {
              "@type": "Question",
              "name": "What is the penalty for late TDS return filing?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "Late filing attracts a mandatory late fee of Rs 200 per day under Section 234E, from the due date until filing date, capped at the total TDS for the quarter. Additionally, penalty of Rs 10,000 to Rs 1,00,000 under Section 271H for returns filed more than one year late or containing incorrect information."
              }
            },
            {
              "@type": "Question",
              "name": "What is the difference between Form 24Q, 26Q, and 27Q?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "Form 24Q reports TDS on salary under Section 192. Form 26Q covers TDS on all non-salary payments to Indian residents (rent, professional fees, contractor payments) under Sections 193-194. Form 27Q is for TDS on payments to non-residents and foreign companies under Section 195. Each is filed separately per quarter."
              }
            },
            {
              "@type": "Question",
              "name": "How is Form 16 generated after filing TDS return?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "Form 16 is generated on TRACES (tdscpc.gov.in) after Form 24Q is processed. Login to TRACES, go to Downloads > Form 16, select FY and quarter, and download certificates. Must be issued to employees by 15th June. Form 16A for non-salary is generated similarly after 26Q/27Q processing."
              }
            },
            {
              "@type": "Question",
              "name": "Can TDS returns be revised or corrected?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "TDS returns cannot be revised in the traditional sense. However, correction statements can be filed on TRACES for challan details, PAN, amounts, or section codes. From 1 April 2025, corrections must be filed within 2 years from the end of the FY. TRACES rejects corrections beyond this window."
              }
            },
            {
              "@type": "Question",
              "name": "What happens if TDS is deducted but not deposited?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "The deductor becomes assessee-in-default under Section 201(1). Interest at 1.5% per month is charged from deduction to deposit (Section 201(1A)). The amount is disallowed as business expense under Section 40(a)(ia). Prosecution under Section 276B with imprisonment up to 7 years for persistent defaults."
              }
            },
            {
              "@type": "Question",
              "name": "TDS return kaise file karte hain online?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "NSDL ki RPU (Return Preparation Utility) download karein. Usme challan details, deductee PAN, TDS amount, aur section code bharein. FVU (File Validation Utility) se validate karein. Income tax portal (incometax.gov.in) par login karke e-Filing > Income Tax Forms mein form select karein, FVU file upload karein, aur DSC ya EVC se verify karein. Patron Accounting - +91 945 945 6700."
              }
            },
            {
              "@type": "Question",
              "name": "Is TDS return required even if no TDS was deducted?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "While no explicit legal mandate exists for nil TDS returns, filing is advisable for TAN holders who have previously filed. Non-filing creates compliance gaps and may trigger notices. The income tax portal allows nil return filing to maintain continuity. Quick Answers Q: TDS deposit due date? A: 7th of the following month (30th April for March). Q: Return due date? A: 31st of the month after the quarter (May for Q4). Q: Late fee? A: Rs 200/day under Section 234E, max = total TDS of quarter. Q: Correction window? A: 2 years from end of FY (effective 1 April 2025). Q: Form 16 due date? A: 15th June following the financial year."
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
                        TDS Return Filing Services - Form 24Q, 26Q, 27Q, 27EQ
                    </h1>

                    <div class="expert-attribution-box">
                        <span class="eab-check"><svg width="16" height="16" viewBox="0 0 24 24" fill="currentColor"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg></span>
                        <span class="eab-title">Reviewed by CA and CS Team, Patron Accounting LLP</span>
                        <span class="eab-meta">
                            <span>ICAI & ICSI Registered</span><span class="eab-sep">|</span>
                            <span>15+ Years Experience</span><span class="eab-sep">|</span>
                            <span>Last Updated: <span id="lastUpdated">11 March 2026</span></span>
                        </span>
                        <a href="/authorhub/ca-sundram-gupta" class="eab-link">Verify Credentials &rarr;</a>
                    </div>

                    <div class="mb-4">
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>TDS Deposit:</span> Due by 7th of following month (30th April for March). Challan ITNS-281. Late deposit: 1.5% per month interest under Section 201(1A).</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Quarterly Returns:</span> Q1: 31 Jul, Q2: 31 Oct, Q3: 31 Jan, Q4: 31 May. Forms 24Q (salary), 26Q (non-salary), 27Q (NRI), 27EQ (TCS).</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Penalties:</span> Late fee: Rs 200/day under Section 234E (max = total TDS). Penalty: Rs 10,000-1,00,000 under Section 271H. Prosecution up to 7 years (276B).</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Starting Fee:</span> Rs 1,999/quarter per TAN (single form). Complete package Rs 9,999/year. New 2-year correction window effective 1 April 2025.</p>
                        </div>
                    </div>

                    <p class="mb-4 fw-bold" style="color: var(--blue); font-size: 15px;">800+ TDS clients. 25,000+ quarterly returns filed. 99%+ on-time rate. 4.9 Google Rating.</p>

                    <div class="hero-cta">
                        <a href="tel:+919459456700" class="btn-video text-decoration-none">
                            <span class="play-circle"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="width:14px;height:14px;color:#fff"><path d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/></svg></span>
                            Call +91 945 945 6700
                        </a>
                        <a href="mailto:sales@patronaccounting.com?subject=TDS%20Return%20Filing%20Enquiry&body=Hello%2C%20I%20just%20visited%20your%20TDS%20Return%20Filing%20page.%20I%20would%20like%20to%20know%20more%20about%20it.%0A%0AThank%20you." class="btn-sample text-decoration-none">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="width:18px;height:18px;"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,12 2,6"/></svg>
                            Email Us
                        </a>
                        <a href="https://wa.me/919459456700?text=Hello%2C%20I%20just%20visited%20your%20TDS%20Return%20Filing%20page.%20I%20would%20like%20to%20know%20more%20about%20it." target="_blank" class="btn-sample text-decoration-none" rel="noopener">
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
                                            'service'  => 'TDS Returns',
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
    'ctaText'    => 'Get TDS returns filed accurately. Forms 24Q, 26Q, 27Q, Form 16 generation, and correction handling from Rs 1,999/quarter.',
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
            <a href="#what-section" class="toc-btn">What Is TDS Return</a>
            <a href="#who-section" class="toc-btn">Who Must File</a>
            <a href="#services-section" class="toc-btn">Our Services</a>
            <a href="#procedure-section" class="toc-btn">7-Step Process</a>
            <a href="#documents-section" class="toc-btn">Documents</a>
            <a href="#challenges-section" class="toc-btn">Challenges</a>
            <a href="#fees-section" class="toc-btn">Fees</a>
            <a href="#timeline-section" class="toc-btn">Timeline</a>
            <a href="#benefits-section" class="toc-btn">Benefits</a>
            <a href="#comparison-section" class="toc-btn">DIY vs Professional</a>
            <a href="#faq-section" class="toc-btn">FAQs</a>
        </div>
        <button class="toc-arrow right" id="tocRight">&#10095;</button>
    </div>
</div>

<!-- SECTION 2: OVERVIEW / INTRO + TL;DR -->
<section class="content-section" id="overview-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">TDS Return Filing - Complete Guide for 2026</h2>
            <div class="content-text">
                <div class="highlight-box" style="margin-bottom:20px;">
                    <p><strong>&#128204; TL;DR - TDS Returns Services at a Glance</strong></p>
                    <p>TDS returns are filed quarterly using Forms 24Q (salary), 26Q (non-salary), 27Q (NRI), and 27EQ (TCS). TDS must be deposited by the 7th of the next month. Returns due by the 31st of the month after the quarter. Late fee: Rs 200/day (Section 234E). Corrections must be filed within 2 years from FY end (effective 1 April 2025).</p>
                </div>
                <p>TDS return filing connects every tax-deducting entity to the Income Tax Department. The data in Forms 24Q, 26Q, and 27Q populates Form 26AS of every deductee, enabling them to claim credit. Errors cascade downstream - incorrect PAN, wrong section codes, or mismatched challans cause Form 16 failures and credit mismatches. With the CBDT enforcing a strict 2-year correction window from FY 2024-25, the margin for error has shrunk dramatically.</p>
                <p><div class="table-responsive-wrapper"><table><thead><tr><th>Parameter</th><th>Details</th></tr></thead><tbody>
<tr><td>Forms</td><td>24Q (salary), 26Q (non-salary), 27Q (NRI), 27EQ (TCS)</td></tr>
<tr><td>TDS Deposit Due</td><td>7th of following month (30th April for March)</td></tr>
<tr><td>Return Due Dates</td><td>Q1: 31 Jul, Q2: 31 Oct, Q3: 31 Jan, Q4: 31 May</td></tr>
<tr><td>Late Fee</td><td>Rs 200/day under Section 234E (max = total TDS)</td></tr>
<tr><td>Penalty</td><td>Rs 10,000 to Rs 1,00,000 under Section 271H</td></tr>
<tr><td>Correction Window</td><td>2 years from end of FY (effective 1 April 2025)</td></tr>
<tr><td>Starting Price</td><td>Rs 1,999/quarter per TAN (Patron Accounting)</td></tr>
</tbody></table></div></p>
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
                <h2 class="section-title">What Is TDS Return Filing?</h2>
                <div class="content-text what-is-definition">
                    
                    <p><strong>TDS return filing</strong> is the mandatory quarterly submission of statements to the Income Tax Department by deductors, reporting details of tax deducted at source, challans used for deposit, and payee information, under <strong>Section 200(3) of the Income Tax Act, 1961</strong>.</p>
<p>TDS returns are the bridge between tax deduction and tax credit. When a deductor files Form 24Q, 26Q, or 27Q, the department processes the data and populates <strong>Form 26AS</strong> of each deductee, enabling them to claim credit while filing ITR. The returns also generate the foundation for <strong>Form 16</strong> (salary) and <strong>Form 16A</strong> (non-salary) through the <a href="https://tdscpc.gov.in" target="_blank" rel="noopener">TRACES portal</a>.</p>

                </div>
                <div class="highlight-box" style="margin-top:20px;">
                    <p><strong>Key Terms for TDS Returns:</strong></p>
                    <p><strong>TAN:</strong> Tax Deduction and Collection Account Number - 10-digit alphanumeric, mandatory for all deductors (Section 203A). Applied via Form 49B.</p>
<p><strong>Challan ITNS-281:</strong> Payment form for depositing TDS/TCS. Contains TAN, assessment year, payment codes, and BSR code. Must match the return data exactly.</p>
<p><strong>TRACES:</strong> TDS Reconciliation Analysis and Correction Enabling System - online portal for viewing returns, downloading Form 16/16A, filing corrections, and tracking status.</p>
<p><strong>Form 26AS:</strong> Annual Tax Statement showing all TDS/TCS credits. Populated from deductor returns. Basis for ITR credit claims.</p>
<p><strong>RPU/FVU:</strong> Return Preparation Utility and File Validation Utility from NSDL for preparing and validating TDS return files.</p>

                </div>
            </div>
            <div class="column-image">
                <div class="illustration-placeholder">
                    <div class="illustration-icon" style="max-width:240px;">
                        <svg viewBox="0 0 200 180" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <!-- TDS Returns -->
                            <rect x="30" y="15" width="140" height="120" rx="8" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/>
                            <rect x="30" y="15" width="140" height="24" rx="8" fill="#14365F"/>
                            <text x="100" y="32" font-size="10" fill="#fff" font-weight="700" text-anchor="middle" font-family="Arial, sans-serif">TDS Returns</text>
                            <!-- Form cards -->
                            <rect x="40" y="48" width="30" height="22" rx="4" fill="#FFF3E0" stroke="#F5A623" stroke-width="1"/>
                            <text x="55" y="62" font-size="6" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">24Q</text>
                            <rect x="75" y="48" width="30" height="22" rx="4" fill="#FFF3E0" stroke="#F5A623" stroke-width="1"/>
                            <text x="90" y="62" font-size="6" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">26Q</text>
                            <rect x="110" y="48" width="30" height="22" rx="4" fill="#FFF3E0" stroke="#F5A623" stroke-width="1"/>
                            <text x="125" y="62" font-size="6" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">27Q</text>
                            <!-- Challan -->
                            <rect x="55" y="78" width="50" height="18" rx="4" fill="#E8F5E9" stroke="#25D366" stroke-width="1"/>
                            <text x="80" y="90" font-size="5" fill="#25D366" font-weight="700" text-anchor="middle" font-family="Arial">ITNS-281</text>
                            <!-- Labels -->
                            <rect x="35" y="104" width="55" height="14" rx="3" fill="#FFF3E0" stroke="#F5A623" stroke-width="0.8"/>
                            <text x="62" y="114" font-size="5" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">By 7th</text>
                            <rect x="100" y="104" width="60" height="14" rx="3" fill="#E8F5E9" stroke="#25D366" stroke-width="0.8"/>
                            <text x="130" y="114" font-size="5" fill="#25D366" font-weight="700" text-anchor="middle" font-family="Arial">Quarterly</text>
                            <!-- Check -->
                            <circle cx="155" cy="28" r="16" fill="#E8F5E9" stroke="#25D366" stroke-width="1.5"/>
                            <path d="M148 28l4 4 9-9" stroke="#25D366" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            <text x="100" y="148" font-size="8" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial, sans-serif">Income Tax Act, 1961</text>
                            <!-- Label -->
                            <text x="100" y="170" font-size="10" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial, sans-serif">TDS Returns</text>
                        </svg>
                    </div>
                    <div class="illustration-badge">
                        <span>Income Tax Act, 1961</span>
                        <strong>Section 200(3) | Quarterly</strong>
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
            <h2 class="section-title">Who Must File TDS Returns?</h2>
            <div class="content-text">
                
                <p><strong>Mandatory for:</strong></p>
<ul>
<li>Every employer deducting TDS on salary (Section 192)</li>
<li>Every person deducting TDS on non-salary payments - rent, professional fees, contractor payments, interest, commission (Sections 193-196)</li>
<li>Every person deducting TDS on payments to non-residents (Section 195-196)</li>
<li>Every person collecting TCS under Section 206C</li>
<li>Government and non-government deductors with valid TAN</li>
</ul>
<div class="table-responsive-wrapper"><table><thead><tr><th>Form</th><th>Purpose</th><th>Sections</th></tr></thead><tbody>
<tr><td>24Q</td><td>TDS on salary</td><td>Section 192</td></tr>
<tr><td>26Q</td><td>TDS on non-salary (residents)</td><td>Sections 193, 194, 194A, 194C, 194H, 194I, 194J</td></tr>
<tr><td>27Q</td><td>TDS on NRI/foreign payments</td><td>Section 195, 196A-196D</td></tr>
<tr><td>27EQ</td><td>Tax Collected at Source</td><td>Section 206C</td></tr>
<tr><td>26QB/QC/QD/QE</td><td>Challan-cum-statements (per transaction)</td><td>Sections 194-IA, 194-IB, 194M, 194S</td></tr>
</tbody></table></div>

            </div>
            </div>
        </div>
    </div>
</section>

<!-- SECTION 5: OUR SERVICES -->
<section class="content-section" id="services-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">6 TDS Return Filing Services by Patron Accounting</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Service</th><th>What We Do</th></tr></thead>
                    <tbody>
                        <tr><td>TDS Computation</td><td>Accurate TDS calculation on each payment type using applicable sections, rates, and thresholds. Handling of lower deduction certificates (Section 197) and nil deduction cases.</td></tr>
<tr><td>Challan Payment (ITNS-281)</td><td>Timely TDS deposit by the 7th of each month via online challan, ensuring correct TAN, assessment year, and payment codes match the return.</td></tr>
<tr><td>Quarterly Return Filing</td><td>Preparation of Forms 24Q, 26Q, 27Q, 27EQ using NSDL RPU, FVU validation, and upload to the income tax e-filing portal with DSC/EVC verification.</td></tr>
<tr><td>Form 16 and 16A Generation</td><td>Download and distribution of TDS certificates from TRACES - Form 16 (salary) by 15th June and Form 16A (non-salary) quarterly after return processing.</td></tr>
<tr><td>Correction Statements</td><td>Filing corrections on TRACES for PAN errors, challan mismatches, amount corrections, and section code changes within the 2-year window (effective 1 April 2025).</td></tr>
<tr><td>TRACES and 26AS Reconciliation</td><td>Matching deductor records with Form 26AS credits of deductees to identify and resolve discrepancies before they trigger notices.</td></tr>

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
            <h2 class="section-title">7-Step TDS Return Filing Process</h2>
            <p class="section-subtitle" style="text-align:left;max-width:100%;">Patron Accounting files TDS returns 5 days before the quarterly deadline with pre-validated FVU files and systematic challan reconciliation.</p>
        </header>
        <div class="steps-container">
            <div class="step-card"><div class="step-content"><span class="step-badge">Step 1</span><h3 class="step-title">Obtain TAN</h3><p class="step-description">Apply for Tax Deduction and Collection Account Number using Form 49B if not already held. TAN is mandatory for all TDS return filings (Section 203A, Income Tax Act, 1961).</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> TAN obtained</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Form 49B filed</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="15" y="10" width="90" height="65" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><rect x="22" y="22" width="70" height="12" rx="3" fill="#FFF3E0" stroke="#F5A623" stroke-width="0.8"/><text x="57" y="31" font-size="6" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">TAN - Form 49B</text><path d="M48 55l8 8 16-16" stroke="#25D366" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg></div><span class="illustration-label">TAN Ready</span><span class="step-number-large">01</span></div></div></div>

<div class="step-card"><div class="step-content"><span class="step-badge">Step 2</span><h3 class="step-title">Deduct TDS at Applicable Rate</h3><p class="step-description">Deduct TDS on each payment per applicable section and rate. Verify PAN of deductee - if PAN unavailable, deduct at higher rate (20% under Section 206AA).</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> TDS deducted</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> PAN verified</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="25" y="15" width="70" height="55" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><rect x="35" y="25" width="50" height="12" rx="3" fill="#FFF3E0" stroke="#F5A623" stroke-width="1"/><text x="60" y="34" font-size="5" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">Sec 192-196</text><circle cx="60" cy="52" r="10" fill="#E8F5E9" stroke="#25D366" stroke-width="1.2"/><path d="M55 52l3 3 7-7" stroke="#25D366" stroke-width="1.5" stroke-linecap="round"/></svg></div><span class="illustration-label">Deducted</span><span class="step-number-large">02</span></div></div></div>

<div class="step-card"><div class="step-content"><span class="step-badge">Step 3</span><h3 class="step-title">Deposit TDS via Challan 281</h3><p class="step-description">Pay deducted TDS by the 7th of the following month using Challan ITNS-281. For March deductions, deadline is 30th April. Government deductors: same day.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Challan paid</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> BSR code noted</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="25" y="15" width="70" height="55" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><rect x="30" y="22" width="55" height="15" rx="3" fill="#E8F5E9" stroke="#25D366" stroke-width="1"/><text x="57" y="33" font-size="6" fill="#25D366" font-weight="700" text-anchor="middle" font-family="Arial">ITNS-281</text><rect x="35" y="45" width="45" height="12" rx="3" fill="#FFF3E0" stroke="#F5A623" stroke-width="0.8"/><text x="57" y="54" font-size="5" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">By 7th</text></svg></div><span class="illustration-label">Deposited</span><span class="step-number-large">03</span></div></div></div>

<div class="step-card"><div class="step-content"><span class="step-badge">Step 4</span><h3 class="step-title">Prepare Return File Using RPU</h3><p class="step-description">Use NSDL Return Preparation Utility (RPU) to create the return file. Enter challan details, deductee PAN, TDS amounts, and section codes. Validate with File Validation Utility (FVU).</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> RPU file ready</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> FVU validated</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="15" y="5" width="90" height="70" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><line x1="30" y1="22" x2="90" y2="22" stroke="#F5A623" stroke-width="3" stroke-linecap="round"/><line x1="30" y1="35" x2="80" y2="35" stroke="#14365F" stroke-width="2" opacity="0.3" stroke-linecap="round"/><line x1="30" y1="45" x2="70" y2="45" stroke="#14365F" stroke-width="2" opacity="0.3" stroke-linecap="round"/><circle cx="85" cy="55" r="10" fill="#E8F5E9" stroke="#25D366" stroke-width="1.2"/><text x="85" y="58" font-size="5" fill="#25D366" font-weight="700" text-anchor="middle" font-family="Arial">FVU</text></svg></div><span class="illustration-label">Prepared</span><span class="step-number-large">04</span></div></div></div>

<div class="step-card"><div class="step-content"><span class="step-badge">Step 5</span><h3 class="step-title">Upload to Income Tax Portal</h3><p class="step-description">Login to incometax.gov.in. Navigate to e-Filing > Income Tax Forms. Select form (24Q/26Q/27Q/27EQ), upload FVU file, and e-verify using DSC or EVC.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Return uploaded</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> E-verified</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="15" y="10" width="90" height="65" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><rect x="20" y="15" width="80" height="8" rx="2" fill="#14365F" opacity="0.8"/><circle cx="25" cy="19" r="2" fill="#FF5F56"/><circle cx="31" cy="19" r="2" fill="#FFBD2E"/><circle cx="37" cy="19" r="2" fill="#27C93F"/><rect x="25" y="30" width="60" height="10" rx="3" fill="#FFF3E0" stroke="#F5A623" stroke-width="0.8"/><text x="55" y="38" font-size="5" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">IT Portal</text><rect x="30" y="50" width="50" height="12" rx="3" fill="#E8F5E9" stroke="#25D366" stroke-width="0.6"/><text x="55" y="59" font-size="5" fill="#25D366" font-weight="700" text-anchor="middle" font-family="Arial">UPLOADED</text></svg></div><span class="illustration-label">Uploaded</span><span class="step-number-large">05</span></div></div></div>

<div class="step-card"><div class="step-content"><span class="step-badge">Step 6</span><h3 class="step-title">Track Status on TRACES</h3><p class="step-description">After successful filing, track return processing status on TRACES (tdscpc.gov.in). Once processed, download Form 16/16A for distribution to deductees.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Status tracked</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Processing done</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="20" y="10" width="80" height="60" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><rect x="30" y="22" width="60" height="15" rx="3" fill="#FFF3E0" stroke="#F5A623" stroke-width="1"/><text x="60" y="33" font-size="6" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">TRACES</text><rect x="35" y="45" width="50" height="15" rx="3" fill="#E8F5E9" stroke="#25D366" stroke-width="0.8"/><text x="60" y="56" font-size="5" fill="#25D366" font-weight="600" text-anchor="middle" font-family="Arial">Processed</text></svg></div><span class="illustration-label">Tracked</span><span class="step-number-large">06</span></div></div></div>

<div class="step-card"><div class="step-content"><span class="step-badge">Step 7</span><h3 class="step-title">Issue Form 16/16A</h3><p class="step-description">Generate and issue Form 16 (salary) by 15th June and Form 16A (non-salary) within 15 days of return filing due date. Certificates downloaded from TRACES with digital signatures.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Form 16 issued</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Certificates sent</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="20" y="10" width="80" height="65" rx="8" fill="#E8F5E9" stroke="#25D366" stroke-width="1.5"/><rect x="28" y="25" width="64" height="20" rx="5" fill="#25D366" opacity="0.15"/><text x="60" y="33" font-size="6" fill="#14365F" font-weight="600" text-anchor="middle" font-family="Arial">Form 16</text><text x="60" y="42" font-size="7" fill="#14365F" font-weight="800" text-anchor="middle" font-family="Arial">ISSUED</text><path d="M52 60l5 5 11-11" stroke="#25D366" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"/></svg></div><span class="illustration-label">Complete</span><span class="step-number-large">07</span></div></div></div>

        </div>
    </div>
</section>

<!-- SECTION 8: DOCUMENTS REQUIRED -->
<section class="content-section" id="documents-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Documents Required for TDS Return Filing</h2>
            <div class="content-text">
                
                <ul>
<li><strong>Valid TAN</strong> (Tax Deduction and Collection Account Number)</li>
<li><strong>PAN details</strong> of all deductees (employees, vendors, landlords, NRIs)</li>
<li><strong>Challan payment receipts</strong> (ITNS-281) with BSR code, serial number, and date</li>
<li><strong>Payroll data:</strong> Salary breakup, investment declarations, Form 12BB (for 24Q)</li>
<li><strong>Vendor payment details:</strong> Invoice amounts, TDS section, rate applied (for 26Q)</li>
<li><strong>NRI payment details:</strong> DTAA applicability, TRC, Form 10F (for 27Q)</li>
<li><strong>Lower deduction certificates</strong> under Section 197 (if any)</li>
<li><strong>Previous quarter</strong> TDS return acknowledgments</li>
<li><strong>NSDL RPU and FVU</strong> software installed</li>
<li><strong>DSC or EVC</strong> for e-verification</li>
</ul>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 9: CHALLENGES -->
<section class="content-section" id="challenges-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">4 Common TDS Return Filing Challenges</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Challenge</th><th>Impact</th><th>How Patron Accounting Solves It</th></tr></thead>
                    <tbody>
                        <tr><td>PAN Mismatch / Invalid PAN</td><td>Incorrect or inactive PAN causes return rejection. Deductee cannot claim credit in 26AS. Higher 20% TDS rate applies (Section 206AA)</td><td>Validate all PANs against income tax database before filing. Use NSDL PAN verification service for bulk validation.</td></tr>
<tr><td>Challan-Return Mismatch</td><td>Mismatches between challan amounts (BSR code, date, amount) and return data cause processing failures and Form 16 generation errors</td><td>Systematic reconciliation of every challan with the return file before upload. Match every challan entry with deductee records.</td></tr>
<tr><td>Section 234E Late Fee</td><td>Rs 200/day accrues from due date until filing, capped at total TDS for the quarter. Can reach lakhs for large deductors</td><td>Calendar reminders for all four quarterly due dates. File at least 5 days before deadline for buffer.</td></tr>
<tr><td>2-Year Correction Window</td><td>From 1 April 2025, TRACES rejects corrections beyond 2 years from FY end. Old errors become permanent</td><td>Review all returns within 6 months of filing and address discrepancies proactively before the window closes.</td></tr>

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
            <h2 class="section-title">TDS Return Filing Fees</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Fee Component</th><th>Amount</th></tr></thead>
                    <tbody>
                        <tr><td>Single Form Filing (24Q or 26Q or 27Q)</td><td class="table-amount">Rs 1,999/quarter/TAN</td></tr>
<tr><td>Two Forms (24Q + 26Q)</td><td class="table-amount">Rs 2,999/quarter</td></tr>
<tr><td>Complete TDS Package (24Q + 26Q + 27Q)</td><td class="table-amount">Rs 3,999/quarter</td></tr>
<tr><td>27EQ (TCS Return)</td><td class="table-amount">Rs 1,999/quarter</td></tr>
<tr><td>Correction Statement</td><td class="table-amount">Rs 999 per correction</td></tr>
<tr><td>Form 16 Generation and Distribution</td><td class="table-amount">Rs 999</td></tr>
<tr><td>TAN Registration (one-time)</td><td class="table-amount">Rs 1,499</td></tr>
<tr><td>Annual TDS Compliance Package</td><td class="table-amount">Rs 9,999/year</td></tr>

                    </tbody>
                </table>
                </div>
                <p style="margin-top:16px;font-size:13px;color:var(--text-muted);font-style:italic;">All fees and charges listed are indicative only and do not constitute a binding offer. Final amounts may vary depending on the volume of work and the complexity involved.</p>
                <p style="margin-top:16px;">Professional service charges for drafting, filing, and representation are separate from the statutory fees. The exact fee depends on the complexity of the case, disputed amount, and number of hearings required. Contact us for a detailed quote.</p>
                <p style="margin-top:16px;"><strong>Get a free TDS Returns consultation - <a href="tel:+919459456700">Call +91 945 945 6700</a> or <a href="https://wa.me/919459456700?text=Hello%2C%20I%20just%20visited%20your%20TDS%20Return%20Filing%20page.%20I%20would%20like%20to%20know%20more%20about%20it." target="_blank" rel="noopener">WhatsApp us</a>. No-obligation assessment.</strong></p>
            </div>
        </div>
    </div>
</section>

<!-- SECTION 11: TIMELINE -->
<section class="content-section" id="timeline-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">TDS Return Filing Timeline</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Stage</th><th>Estimated Timeline</th></tr></thead>
                    <tbody>
                        <tr><td>TDS computation from payroll/vendor data</td><td>1-3 days post quarter-end</td></tr>
<tr><td>Challan payment reconciliation</td><td>1-2 days</td></tr>
<tr><td>Return preparation (RPU + FVU)</td><td>2-3 working days</td></tr>
<tr><td>Upload and e-verification</td><td>1 working day</td></tr>
<tr><td>Form 16/16A from TRACES</td><td>After processing (7-15 days)</td></tr>
<tr><td>Correction filing (if needed)</td><td>Within 2 years of FY end</td></tr>

                    </tbody>
                </table>
                </div>
                <div class="highlight-box" style="margin-top:16px;">
                    
                    <p><strong>Key Deadlines FY 2025-26:</strong> Q1 (Apr-Jun): return by 31 Jul, Q2 (Jul-Sep): 31 Oct, Q3 (Oct-Dec): 31 Jan, Q4 (Jan-Mar): 31 May. TDS deposit by 7th monthly. Form 16 by 15th June. Late fee Rs 200/day (234E). Penalty Rs 10K-1L (271H). Prosecution up to 7 years for non-deposit (276B). Corrections within 2 years from FY end.</p>

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
            <h2 class="section-title">Benefits of Professional TDS Filing</h2>
        </div>
        <div class="features-grid">
    <article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/></svg></div><h3 class="feature-title">Correct Section Mapping</h3><p class="feature-text">Expert identification of 194C vs 194J vs 194H prevents wrong deduction and downstream credit issues in deductee Form 26AS.</p></article>
    <article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M14 2H6a2 2 0 00-2 2v16a2 2 0 002 2h12a2 2 0 002-2V8z"/><path d="M14 2v6h6M16 13H8M16 17H8"/></svg></div><h3 class="feature-title">Zero Challan Mismatches</h3><p class="feature-text">Systematic reconciliation of every ITNS-281 challan with the return file eliminates the most common cause of return rejections.</p></article>
    <article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><h3 class="feature-title">Penalty Avoidance</h3><p class="feature-text">On-time quarterly filing prevents Section 234E late fees (Rs 200/day) and Section 271H penalties (Rs 10,000-1,00,000). 99%+ on-time rate.</p></article>
    <article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M13 10V3L4 14h7v7l9-11h-7z"/></svg></div><h3 class="feature-title">Timely Form 16/16A</h3><p class="feature-text">Quick return processing enables on-time generation and distribution of TDS certificates to employees and vendors from TRACES.</p></article>
    <article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="3" y="11" width="18" height="11" rx="2"/><path d="M7 11V7a5 5 0 0110 0v4"/></svg></div><h3 class="feature-title">Correction Readiness</h3><p class="feature-text">Proactive review and correction within the 2-year window ensures no credits are lost and deductees face no issues during ITR filing.</p></article>
</div>
    </div>
</section>

<!-- SECTION 12A: SOCIAL PROOF -->
<section class="content-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Why Businesses Trust Patron Accounting for TDS</h2>
            <div class="content-text">
                
                <p><strong>800+ TDS Clients</strong> from startups to enterprises with 1,000+ deductees.</p>
<p><strong>25,000+ Quarterly Returns Filed</strong> across Forms 24Q, 26Q, 27Q, and 27EQ.</p>
<p><strong>99%+ On-Time Filing Rate.</strong></p>
<p><strong>4.9 Google Rating</strong> based on verified reviews.</p>
<p><strong>4 Offices:</strong> Pune, Mumbai, Delhi, and Gurugram.</p>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 13: SELF-FILING vs PROFESSIONAL COMPARISON -->
<section class="content-section" id="comparison-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">DIY vs Professional TDS Filing</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Parameter</th><th>DIY / In-House</th><th>Professional (Patron Accounting)</th></tr></thead>
                    <tbody>
                        <tr><td>Section Identification</td><td>Frequent errors (194C vs 194J)</td><td>Expert mapping per payment type</td></tr>
<tr><td>Challan Reconciliation</td><td>Manual, error-prone</td><td>Systematic BSR code matching</td></tr>
<tr><td>Return Preparation</td><td>RPU learning curve</td><td>Pre-validated FVU file upload</td></tr>
<tr><td>Late Fee Risk</td><td>High if deadlines missed</td><td>99%+ on-time filing</td></tr>
<tr><td>Correction Handling</td><td>Often delayed beyond 2-year window</td><td>Proactive review within 6 months</td></tr>
<tr><td>Cost</td><td>Internal time + penalty risk</td><td>Rs 1,999/quarter per TAN</td></tr>

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
            <h2 class="section-title">Related Tax and Compliance Services</h2>
            <div class="content-text">
                
                <ul>
<li><strong><a href="/tds-return-filing-24q">TDS Return Filing (alt)</a></strong> - Alternative landing page for TDS services.</li>
<li><strong><a href="/income-tax-return">Income Tax Return</a></strong> - ITR filing for individuals and businesses.</li>
<li><strong><a href="/tan-registration">TAN Registration</a></strong> - New TAN application.</li>
<li><strong><a href="/payroll-services">Payroll Services</a></strong> - Salary processing with TDS computation.</li>
<li><strong><a href="/income-tax-notice">Income Tax Notice</a></strong> - Response to IT notices.</li>
<li><strong><a href="/itr-for-companies">ITR for Companies</a></strong> - Corporate tax return filing.</li>
</ul>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 15A: LEGAL FRAMEWORK -->
<section class="content-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Legal Framework for TDS Returns</h2>
            <div class="content-text">
                
                <p><strong>Governing Law:</strong> <a href="https://www.incometax.gov.in" target="_blank" rel="noopener">Income Tax Act, 1961</a>.</p>
<p><strong>Key Provisions:</strong></p>
<ul>
<li><strong>Section 200(3):</strong> Obligation to file quarterly TDS statements.</li>
<li><strong>Section 234E:</strong> Late fee Rs 200/day (max = total TDS of quarter).</li>
<li><strong>Section 271H:</strong> Penalty Rs 10,000-1,00,000 for late/incorrect filing.</li>
<li><strong>Section 201(1A):</strong> Interest 1.5% per month for late TDS deposit.</li>
<li><strong>Section 201(1):</strong> Deductor = assessee-in-default for non-deduction.</li>
<li><strong>Section 206AA:</strong> Higher 20% TDS if deductee PAN unavailable.</li>
<li><strong>Section 276B:</strong> Prosecution up to 7 years for non-deposit of TDS.</li>
<li><strong>Section 272A(2):</strong> Rs 100/day penalty for late Form 16.</li>
</ul>
<p><strong>2-Year Correction Rule:</strong> From 1 April 2025, corrections within 2 years of FY end only. Relaxation for FY 2018-19 Q4 to FY 2023-24 Q3 until 31 March 2026.</p>
<p><strong>Portals:</strong> <a href="https://www.incometax.gov.in" target="_blank" rel="noopener">Income Tax Portal</a> | <a href="https://tdscpc.gov.in" target="_blank" rel="noopener">TRACES</a></p>

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
                    <h2 class="faq-expanded__title">Frequently Asked Questions - TDS Returns</h2>
                    <p class="faq-expanded__lead">Answers about TDS due dates, penalties, Form 24Q/26Q/27Q, Form 16, corrections, deposit rules, and nil returns.</p>
                    @include('partials.bigin-form', [
                        'variant'  => 'compact',
                        'service'  => 'TDS Returns',
                    ])
                </aside>
                <div class="faq-expanded__list">
                    <div class="faq-expanded__item" id="faq-1">
                        <h3 class="faq-expanded__q">What are the due dates for filing TDS returns?</h3>
                        <div class="faq-expanded__a"><p>TDS returns are filed quarterly. Forms 24Q, 26Q, 27Q: Q1 (Apr-Jun) by 31st July, Q2 (Jul-Sep) by 31st October, Q3 (Oct-Dec) by 31st January, Q4 (Jan-Mar) by 31st May. Form 27EQ (TCS) has earlier due dates: 15th July, 15th October, 15th January, and 15th May. TDS deposit is due by the 7th of each month.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-2">
                        <h3 class="faq-expanded__q">What is the penalty for late TDS return filing?</h3>
                        <div class="faq-expanded__a"><p>Late filing attracts a mandatory late fee of Rs 200 per day under Section 234E, from the due date until filing date, capped at the total TDS for the quarter. Additionally, penalty of Rs 10,000 to Rs 1,00,000 under Section 271H for returns filed more than one year late or containing incorrect information.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-3">
                        <h3 class="faq-expanded__q">What is the difference between Form 24Q, 26Q, and 27Q?</h3>
                        <div class="faq-expanded__a"><p>Form 24Q reports TDS on salary under Section 192. Form 26Q covers TDS on all non-salary payments to Indian residents (rent, professional fees, contractor payments) under Sections 193-194. Form 27Q is for TDS on payments to non-residents and foreign companies under Section 195. Each is filed separately per quarter.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-4">
                        <h3 class="faq-expanded__q">How is Form 16 generated after filing TDS return?</h3>
                        <div class="faq-expanded__a"><p>Form 16 is generated on TRACES (tdscpc.gov.in) after Form 24Q is processed. Login to TRACES, go to Downloads > Form 16, select FY and quarter, and download certificates. Must be issued to employees by 15th June. Form 16A for non-salary is generated similarly after 26Q/27Q processing.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-5">
                        <h3 class="faq-expanded__q">Can TDS returns be revised or corrected?</h3>
                        <div class="faq-expanded__a"><p>TDS returns cannot be revised in the traditional sense. However, correction statements can be filed on TRACES for challan details, PAN, amounts, or section codes. From 1 April 2025, corrections must be filed within 2 years from the end of the FY. TRACES rejects corrections beyond this window.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-6">
                        <h3 class="faq-expanded__q">What happens if TDS is deducted but not deposited?</h3>
                        <div class="faq-expanded__a"><p>The deductor becomes assessee-in-default under Section 201(1). Interest at 1.5% per month is charged from deduction to deposit (Section 201(1A)). The amount is disallowed as business expense under Section 40(a)(ia). Prosecution under Section 276B with imprisonment up to 7 years for persistent defaults.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-7">
                        <h3 class="faq-expanded__q">TDS return kaise file karte hain online?</h3>
                        <div class="faq-expanded__a"><p>NSDL ki RPU (Return Preparation Utility) download karein. Usme challan details, deductee PAN, TDS amount, aur section code bharein. FVU (File Validation Utility) se validate karein. Income tax portal (incometax.gov.in) par login karke e-Filing > Income Tax Forms mein form select karein, FVU file upload karein, aur DSC ya EVC se verify karein. Patron Accounting - +91 945 945 6700.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-8">
                        <h3 class="faq-expanded__q">Is TDS return required even if no TDS was deducted?</h3>
                        <div class="faq-expanded__a"><p>While no explicit legal mandate exists for nil TDS returns, filing is advisable for TAN holders who have previously filed. Non-filing creates compliance gaps and may trigger notices. The income tax portal allows nil return filing to maintain continuity.</p></div>
                    </div>
                </div>
            </div>


            <!-- Quick Answers -->
            <div class="highlight-box" style="margin-top:32px;">
                <p><strong>Quick Answers</strong></p>
                <p><strong>Q: TDS deposit due date?</strong> A: 7th of the following month (30th April for March).</p>
<p><strong>Q: Return due date?</strong> A: 31st of the month after the quarter (May for Q4).</p>
<p><strong>Q: Late fee?</strong> A: Rs 200/day under Section 234E, max = total TDS of quarter.</p>
<p><strong>Q: Correction window?</strong> A: 2 years from end of FY (effective 1 April 2025).</p>
<p><strong>Q: Form 16 due date?</strong> A: 15th June following the financial year.</p>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 18: URGENCY CTA -->
<section class="content-section" style="background: var(--orange-lighter) !important; border-left: 4px solid var(--orange);">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Rs 200/Day Late Fee Starts from the Due Date</h2>
            <div class="content-text">
                
                <p>TDS late fee under Section 234E accrues at Rs 200/day from the due date until filing - capped at total TDS for the quarter. For large deductors, this reaches lakhs quickly. Additionally, Section 271H imposes Rs 10,000-1,00,000 penalty for returns filed more than one year late.</p>
<p>Non-deposit of TDS after deduction: 1.5% per month interest + prosecution up to 7 years under Section 276B. The 2-year correction window (from 1 April 2025) means old errors become permanent if not fixed in time.</p>
<p><strong>Action:</strong> <a href="tel:+919459456700">Call +91 945 945 6700</a> or <a href="https://wa.me/919459456700?text=Hello%2C%20I%20just%20visited%20your%20TDS%20Return%20Filing%20page.%20I%20would%20like%20to%20know%20more%20about%20it." target="_blank" rel="noopener">WhatsApp us</a> for a free consultation.</p>

            </div>
        </div>
    </div>
</section>

<!-- CONCLUSION + CTA BLOCK (Dark) -->
<section class="content-section" style="background: var(--blue) !important;">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title" style="color:#FFFFFF !important;">Simplify Your TDS Compliance</h2>
            <div class="content-text" style="text-align:left;">
                
                <p style="color:rgba(255,255,255,0.85);font-size:15px;line-height:1.8;">TDS return filing directly impacts the tax credit chain for every deductee in India. Accurate Forms 24Q, 26Q, 27Q ensure proper Form 26AS credits for smooth ITR filing and refund processing.</p>
<p style="color:rgba(255,255,255,0.85);font-size:15px;line-height:1.8;">The consequences of non-compliance are severe - Rs 200/day late fees, Rs 1 lakh penalties, prosecution with imprisonment, and the new 2-year correction deadline. Professional assistance ensures correct section mapping, zero challan mismatches, and timely filing.</p>
<p style="color:rgba(255,255,255,0.85);font-size:15px;line-height:1.8;">Patron Accounting: 800+ TDS clients. 25,000+ quarterly returns. 99%+ on-time rate. Starting from Rs 1,999/quarter.</p>

            </div>
            <div style="display:flex;gap:14px;flex-wrap:wrap;margin-top:24px;">
                <a href="tel:+919459456700" style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:var(--orange);color:#fff;border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#128222; Call +91 945 945 6700</a>
                <a href="https://wa.me/919459456700?text=Hello%2C%20I%20just%20visited%20your%20TDS%20Return%20Filing%20page.%20I%20would%20like%20to%20know%20more%20about%20it." target="_blank" style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:#25D366;color:#fff;border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;" rel="noopener">&#128172; WhatsApp Us</a>
                <a href="mailto:sales@patronaccounting.com?subject=Enquiry%20for%20TDS%20Return%20Filing&body=Hello%2C%20I%20just%20visited%20your%20TDS%20Return%20Filing%20page.%20I%20would%20like%20to%20know%20more%20about%20it.%0A%0AThank%20you." style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:transparent;color:#fff;border:2px solid rgba(255,255,255,0.3);border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#9993;&#65039; Email Us</a>
            </div>
            <p style="color:rgba(255,255,255,0.7);font-size:13px;margin-top:16px;">Book a Free Consultation - No Obligation.</p>
        </div>
    </div>
</section>

<!-- GSTAT STATE BENCH CITY PAGES (32 Pages) -->
<section class="content-section" style="padding:48px 32px;background:var(--gray-50);">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title" style="text-align:center;margin-bottom:12px;">TDS Return Filing Services Across India</h2>
            <p style="text-align:center;color:var(--text-muted);font-size:15px;margin-bottom:40px;">Expert quarterly TDS return filing, challan reconciliation, Form 16 generation, and correction handling across India.</p>
          
            <div class="pa-city-block" style="margin-bottom:40px;"><div class="pa-city-grid"><a href="/tds-return/pune" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Pune</div><div class="pa-card-sub">Maharashtra</div></div></a><a href="/tds-return/mumbai" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Mumbai</div><div class="pa-card-sub">Maharashtra</div></div></a><a href="/tds-return/delhi" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Delhi</div><div class="pa-card-sub">NCR</div></div></a><a href="/tds-return/gurugram" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Gurugram</div><div class="pa-card-sub">Haryana</div></div></a></div></div>
<div class="pa-city-block"><div class="pa-block-title">Related Services</div><div class="pa-block-sub">Tax filing and compliance</div><div class="pa-cross-grid"><a href="/income-tax-return" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Income Tax Return</div><div class="pa-card-sub">India</div></div></a><a href="/tan-registration" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">TAN Registration</div><div class="pa-card-sub">India</div></div></a><a href="/payroll-services" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Payroll Services</div><div class="pa-card-sub">India</div></div></a><a href="/income-tax-notice" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Income Tax Notice</div><div class="pa-card-sub">India</div></div></a><a href="/itr-for-companies" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">ITR for Companies</div><div class="pa-card-sub">India</div></div></a><a href="/tds-return-filing-24q" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">TDS Return Filing</div><div class="pa-card-sub">India</div></div></a></div></div>
        </div>
    </div>
</section>

<!-- CONTENT FRESHNESS FOOTER -->
<section class="content-section" style="padding:32px;">
    <div class="content-container">
        <div class="text-content" style="font-size:13px;color:var(--text-muted);">
            <p><strong>Content Created:</strong> 11 March 2026 &nbsp;|&nbsp; <strong>Last Updated:</strong> <span id="lastUpdatedFooter">11 March 2026</span> &nbsp;|&nbsp; <strong>Next Review:</strong> 11 June 2026 &nbsp;|&nbsp; <strong>Reviewed By:</strong> CA &amp; CS Team, Patron Accounting LLP</p>
            <p>This page is reviewed quarterly. Content aligned with Income Tax Act 1961, CBDT notifications, and TRACES portal updates. Next review: June 2026.</p>
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
