

@extends('layouts.service-app')

<!-- External Dependencies (loaded by master layout in production) -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Barlow:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,400&family=DM+Sans:opsz,wght@9..40,400;9..40,500;9..40,600;9..40,700&display=swap" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

@section('meta')
    <title>ESIC Return Filing Online - Process, Due Date & Documents</title>
    <meta name="description" content="File ESIC monthly contribution by 15th and half-yearly return (Form 5) by 11 May/12 Nov. Late payment: 12% interest + 5-25% damages. Expert filing.">
    <link rel="canonical" href="/esic-return">
    <meta name="robots" content="index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1">
    <meta property="og:title" content="ESIC Return Filing Online - Process, Due Date & Documents">
    <meta property="og:description" content="File ESIC monthly contribution by 15th and half-yearly return (Form 5) by 11 May/12 Nov. Late payment: 12% interest + 5-25% damages. Expert filing.">
    <meta property="og:url" content="/esic-return">
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="Patron Accounting">
    <meta property="og:image" content="https://www.patronaccounting.com/images/og-default-square.png">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="1200">
    <meta property="og:image:type" content="image/png">
    <meta property="og:image:secure_url" content="https://www.patronaccounting.com/images/og-default-square.png">
    <meta property="og:image:alt" content="Patron Accounting - partner you can rely on">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="ESIC Return Filing Online - Process, Due Date & Documents">
    <meta name="twitter:description" content="File ESIC monthly contribution by 15th and half-yearly return (Form 5) by 11 May/12 Nov. Late payment: 12% interest + 5-25% damages. Expert filing.">
    <meta name="twitter:image" content="https://www.patronaccounting.com/images/og-default-square.png">
@endsection

@section('schema')
    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@graph": [
        {
          "@type": "Service",
          "name": "ESIC Returns in India: Filing Process, Due Dates and Penalty",
          "description": "File ESIC monthly contribution by 15th and half-yearly return (Form 5) by 11 May/12 Nov. Late payment: 12% interest + 5-25% damages. Expert filing.",
          "url": "https://www.patronaccounting.com/esic-return",
          "serviceType": "ESIC Returns in India: Filing Process, Due Dates and Penalty",
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
            "url": "https://www.patronaccounting.com/esic-return",
            "priceSpecification": {
              "@type": "PriceSpecification",
              "minPrice": "999",
              "maxPrice": "5000",
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
              "name": "ESIC Returns in India: Filing Process, Due Dates and Penalty",
              "item": "https://www.patronaccounting.com/esic-return"
            }
          ]
        },
        {
          "@type": "FAQPage",
          "mainEntity": [
            {
              "@type": "Question",
              "name": "What is ESIC return filing?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "ESIC return filing is the process of depositing monthly employer (3.25%) and employee (0.75%) contributions to the ESIC fund by the 15th of each month and filing half-yearly returns (Form 5) by 12 November (Apr-Sep) and 12 May (Oct-Mar). Every ESI-registered employer must file regardless of contribution amount. Even zero-contribution months require a NIL declaration."
              }
            },
            {
              "@type": "Question",
              "name": "What is the due date for ESIC return?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "Monthly contribution: 15th of the following month (e.g., April contribution due by 15 May). Half-yearly return (Form 5): 12 November for April-September period, and 12 May for October-March period. NIL declarations follow the same monthly deadline. Patron Accounting files by the 12th with a 3-day buffer."
              }
            },
            {
              "@type": "Question",
              "name": "ESIC return kaise file kare?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "ESIC return file karne ke liye esic.gov.in par login karo 17-digit employer code se. 'Monthly Contribution' section mein jaao. Employee details verify karo. Contribution data upload karo. Bank details bharo aur payment karo. Challan generate karo aur download karo. Self-certification complete karo. Form 5 ke liye contribution period ke baad portal par bharo aur submit karo. Patron Accounting - +91 945 945 6700."
              }
            },
            {
              "@type": "Question",
              "name": "What is the penalty for late ESIC return filing?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "Late contribution payment attracts 12% per annum interest on the delayed amount. Additionally, damages are levied: 5% (up to 2 months), 10% (2-4 months), 15% (4-6 months), and 25% (over 6 months) under Sections 85A-85E. Non-filing or false returns: imprisonment up to 1 year + Rs 5,000 fine (Section 85). Repeat offenders face up to 2 years."
              }
            },
            {
              "@type": "Question",
              "name": "Do I need to file NIL return if no employees contributed?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "Yes. Even if no employee earned wages in a particular month (all on unpaid leave, temporary closure), the employer must submit a NIL Declaration on the ESIC portal by the 15th. Failure to file NIL returns creates non-compliance gaps on record and can be flagged during ESIC inspections."
              }
            },
            {
              "@type": "Question",
              "name": "ESIC return filing mein kya documents chahiye?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "Monthly filing ke liye: payroll/salary register, attendance records, employee list with wages, bank details, aur previous challan. Half-yearly (Form 5) ke liye: saare 6 mahine ke challans, Form 6 register, wage register, attendance records, accident register (agar koi accident hua ho), aur CA certificate (40+ employees ke liye mandatory). Patron Accounting sab records maintain karta hai."
              }
            },
            {
              "@type": "Question",
              "name": "What is ESIC half-yearly return (Form 5)?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "Form 5 is the half-yearly Return of Contributions reconciling all monthly contributions for a six-month contribution period. Includes employee-wise contribution details, wage records, and workforce changes. Due by 12 November (Apr-Sep) and 12 May (Oct-Mar). For employers with 40+ employees, a Chartered Accountant certificate must accompany the return."
              }
            },
            {
              "@type": "Question",
              "name": "What is the difference between monthly contribution and half-yearly return?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "Monthly contribution is the actual payment of employer (3.25%) + employee (0.75%) to the ESIC fund, due by the 15th of each month. Half-yearly return (Form 5) is a reconciliation return filed twice a year (by 12 Nov and 12 May) summarizing all monthly contributions. Both are mandatory. Monthly is the payment; Form 5 is the verification and reconciliation. Quick Answers Q: Multiple months at once? A: No. Contributions must be paid month-by-month by the 15th. Arrears trigger interest and damages per month. Q: Employee crosses Rs 21,000 mid-period? A: Employee continues covered until the end of that contribution period. Contributions continue on full wages. Q: ESIC vs PF return filing? A: Separate schemes, separate portals, separate rates. ESIC on esic.gov.in; EPF on epfindia.gov.in via ECR. Q: Correct a mistake? A: Written request to regional ESIC office with supporting documents. Better to verify before filing."
              }
            }
          ]
        }
      ]
    }
    </script>
@endsection

@section('content')
@push('styles')
<link rel="stylesheet" href="{{ asset('css/pages-2.css') }}?v=1">
@endpush
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
                        ESIC Returns in India
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
                            <p class="mb-0 text-dark benefit-paragraph"><span>Two Obligations:</span> Monthly Contribution (by 15th of next month) + Half-Yearly Return (Form 5). Both mandatory for every ESI-registered employer.</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Due Dates:</span> Half-Yearly: 12 November (Apr-Sep) | 12 May (Oct-Mar). Monthly: 15th of following month. NIL returns also mandatory.</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Penalties:</span> 12% p.a. interest + 5% to 25% damages on contribution amount. Non-filing: imprisonment up to 1 year + Rs 5,000 fine (Section 85).</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Service Fee:</span> Starting from Rs 999/month. No government fee for portal filing. Contributions (3.25% employer + 0.75% employee) are the statutory payment.</p>
                        </div>
                    </div>

                    <p class="mb-4 fw-bold" style="color: var(--blue); font-size: 15px;">10,000+ businesses served. 50,000+ documents filed. 4.9 Google Rating. 15+ years of practice.</p>

                    <div class="hero-cta">
                        <a href="tel:+919459456700" class="btn-video text-decoration-none">
                            <span class="play-circle"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="width:14px;height:14px;color:#fff"><path d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/></svg></span>
                            Call +91 945 945 6700
                        </a>
                        <a href="mailto:sales@patronaccounting.com?subject=ESIC%20Return%20Filing%20Enquiry&body=Hello%2C%0A%0AI%20need%20ESIC%20return%20filing.%0A%0AThank%20you." class="btn-sample text-decoration-none">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="width:18px;height:18px;"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,12 2,6"/></svg>
                            Email Us
                        </a>
                        <a href="https://wa.me/919459456700?text=Hi%2C%20I%20need%20ESIC%20Return%20Filing.%20Please%20share%20details." target="_blank" class="btn-sample text-decoration-none">
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
                                            'service'  => 'ESIC Returns',
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
    'ctaText'    => 'Never miss an ESIC deadline. Monthly contribution filing + half-yearly Form 5 returns with challan management and inspection readiness.',
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
            <a href="#what-section" class="toc-btn">What Are ESIC Returns</a>
            <a href="#who-section" class="toc-btn">Filing Calendar</a>
            <a href="#services-section" class="toc-btn">Our Services</a>
            <a href="#procedure-section" class="toc-btn">6-Step Process</a>
            <a href="#documents-section" class="toc-btn">Documents</a>
            <a href="#challenges-section" class="toc-btn">Common Mistakes</a>
            <a href="#fees-section" class="toc-btn">Fees</a>
            <a href="#timeline-section" class="toc-btn">Timeline</a>
            <a href="#benefits-section" class="toc-btn">Penalties</a>
            <a href="#comparison-section" class="toc-btn">Monthly vs Half-Yearly</a>
            <a href="#faq-section" class="toc-btn">FAQs</a>
        </div>
        <button class="toc-arrow right" id="tocRight">&#10095;</button>
    </div>
</div>

<!-- SECTION 2: OVERVIEW / INTRO + TL;DR -->
<section class="content-section" id="overview-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">ESIC Returns - Complete Guide for 2026</h2>
            <div class="content-text">
                <div class="highlight-box" style="margin-bottom:20px;">
                    <p><strong>&#128204; TL;DR - ESIC Returns Services at a Glance</strong></p>
                    <p>Every ESI-registered employer has two filing obligations: (1) Monthly Contribution - deposit employer (3.25%) + employee (0.75%) by the 15th via esic.gov.in; (2) Half-Yearly Return (Form 5) - reconciliation due by 12 November (Apr-Sep) and 12 May (Oct-Mar). NIL returns mandatory. Late payment: 12% interest + 5-25% damages. Non-filing: imprisonment up to 1 year + Rs 5,000 fine. CA certificate required for 40+ employee establishments.</p>
                </div>
                <p>ESIC return filing is the ongoing compliance heartbeat for every ESI-registered employer. While registration is one-time, monthly contributions and half-yearly returns continue as long as the establishment employs eligible workers. Missing even a single month's contribution triggers 12% p.a. interest, and sustained default escalates to 25% damages plus prosecution. In 2026, ESIC has enhanced digital infrastructure with mandatory Aadhaar linking and automated verification systems.</p>
                <p><div class="table-responsive-wrapper"><table><thead><tr><th>Parameter</th><th>Details</th></tr></thead><tbody>
<tr><td>Governing Law</td><td>ESI Act, 1948; ESI (General) Regulations, 1950</td></tr>
<tr><td>Monthly Contribution Due</td><td>15th of the following month via <a href="https://esic.gov.in" target="_blank" rel="noopener">esic.gov.in</a></td></tr>
<tr><td>Half-Yearly (Form 5) - Period 1</td><td>Apr 1 to Sep 30 - Due by 12 November</td></tr>
<tr><td>Half-Yearly (Form 5) - Period 2</td><td>Oct 1 to Mar 31 - Due by 12 May</td></tr>
<tr><td>Late Interest</td><td>12% per annum on delayed contribution</td></tr>
<tr><td>Damages</td><td>5% (up to 2 months) to 25% (over 6 months delay)</td></tr>
<tr><td>NIL Return</td><td>Mandatory even if no contributions in a month</td></tr>
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
                <h2 class="section-title">What Are ESIC Returns?</h2>
                <div class="content-text what-is-definition">
                    
                    <p>ESIC Returns refer to two types of compliance filings under the <strong>ESI Act, 1948</strong>:</p>
<p><strong>1. Monthly Contribution Filing:</strong> Calculate employer (3.25%) + employee (0.75%) contributions, deposit to the ESIC fund through <a href="https://esic.gov.in" target="_blank" rel="noopener">esic.gov.in</a> by the 15th of the following month. A challan is generated as proof. NIL declaration required even with zero wages.</p>
<p><strong>2. Half-Yearly Return (Form 5):</strong> Comprehensive reconciliation of all monthly contributions for each six-month period. Includes employee-wise details, wage records, and workforce changes. Due by 12 November (Apr-Sep) and 12 May (Oct-Mar). For 40+ employees, a CA certificate is mandatory.</p>
<p>Form 5 is used by ESIC to verify all monthly contributions, update employee benefit eligibility, and identify discrepancies that may trigger audit or inspection.</p>

                </div>
                <div class="highlight-box" style="margin-top:20px;">
                    <p><strong>Key Terms for ESIC Returns:</strong></p>
                    <p><strong>Contribution Period:</strong> Two six-month periods: Apr 1-Sep 30 (Period 1) and Oct 1-Mar 31 (Period 2). Contributions determine benefit eligibility in the corresponding benefit period.</p>
<p><strong>Benefit Period:</strong> Jan 1-Jun 30 (for Oct-Mar contributions) and Jul 1-Dec 31 (for Apr-Sep contributions).</p>
<p><strong>Form 5:</strong> Half-yearly Return of Contributions filed with employee-wise details. CA certificate required for 40+ employees.</p>
<p><strong>Form 6 (Register):</strong> Official ESIC register recording all employee contributions month-by-month.</p>
<p><strong>Challan:</strong> Payment receipt from ESIC portal. Must be downloaded and retained for inspection.</p>
<p><strong>17-Digit Employer Code:</strong> Unique ID issued at registration. Used as User ID for all ESIC portal transactions.</p>

                </div>
            </div>
            <div class="column-image">
                <div class="illustration-placeholder">
                    <div class="illustration-icon" style="max-width:240px;">
                        <svg viewBox="0 0 200 180" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <!-- ESIC Returns -->
                            <rect x="30" y="15" width="140" height="120" rx="8" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/>
                            <rect x="30" y="15" width="140" height="24" rx="8" fill="#14365F"/>
                            <text x="100" y="32" font-size="9" fill="#fff" font-weight="700" text-anchor="middle" font-family="Arial, sans-serif">ESIC Returns</text>
                            <!-- Calendar icon -->
                            <rect x="50" y="48" width="45" height="40" rx="5" fill="#FFF3E0" stroke="#F5A623" stroke-width="1.2"/>
                            <rect x="50" y="48" width="45" height="12" rx="5" fill="#F5A623" opacity="0.6"/>
                            <text x="72" y="57" font-size="6" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">15th</text>
                            <text x="72" y="72" font-size="8" fill="#14365F" font-weight="800" text-anchor="middle" font-family="Arial">Monthly</text>
                            <text x="72" y="82" font-size="5" fill="#F5A623" font-weight="600" text-anchor="middle" font-family="Arial">3.25+0.75%</text>
                            <!-- Form 5 -->
                            <rect x="110" y="48" width="45" height="40" rx="5" fill="#E8F5E9" stroke="#25D366" stroke-width="1.2"/>
                            <text x="132" y="62" font-size="6" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">Form 5</text>
                            <text x="132" y="75" font-size="5" fill="#25D366" font-weight="600" text-anchor="middle" font-family="Arial">12 Nov</text>
                            <text x="132" y="84" font-size="5" fill="#25D366" font-weight="600" text-anchor="middle" font-family="Arial">12 May</text>
                            <!-- Labels -->
                            <rect x="40" y="100" width="55" height="14" rx="3" fill="#FFF3E0" stroke="#F5A623" stroke-width="0.8"/>
                            <text x="67" y="110" font-size="5.5" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">ESI Act 1948</text>
                            <rect x="105" y="100" width="55" height="14" rx="3" fill="#E8F5E9" stroke="#25D366" stroke-width="0.8"/>
                            <text x="132" y="110" font-size="5" fill="#25D366" font-weight="700" text-anchor="middle" font-family="Arial">Sec 39/85</text>
                            <!-- Check -->
                            <circle cx="155" cy="28" r="16" fill="#E8F5E9" stroke="#25D366" stroke-width="1.5"/>
                            <path d="M148 28l4 4 9-9" stroke="#25D366" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            <text x="100" y="148" font-size="9" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial, sans-serif">ESI Act, 1948</text>
                            <!-- Label -->
                            <text x="100" y="170" font-size="10" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial, sans-serif">ESIC Returns</text>
                        </svg>
                    </div>
                    <div class="illustration-badge">
                        <span>ESI Act, 1948</span>
                        <strong>Monthly + Form 5 Returns</strong>
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
            <h2 class="section-title">ESIC Return Filing Calendar</h2>
            <div class="content-text">
                
                <div class="table-responsive-wrapper"><table><thead><tr><th>Filing Type</th><th>Contribution Period</th><th>Due Date</th><th>Consequence</th></tr></thead><tbody>
<tr><td><strong>Monthly Contribution</strong></td><td>Each calendar month</td><td>15th of following month</td><td>12% interest + 5-25% damages</td></tr>
<tr><td><strong>Half-Yearly (Form 5)</strong></td><td>April 1 - September 30</td><td>12 November</td><td>Penalty + prosecution risk</td></tr>
<tr><td><strong>Half-Yearly (Form 5)</strong></td><td>October 1 - March 31</td><td>12 May</td><td>Penalty + prosecution risk</td></tr>
<tr><td><strong>NIL Declaration</strong></td><td>Any month with no contributions</td><td>15th of following month</td><td>Non-compliance on record</td></tr>
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
            <h2 class="section-title">6 ESIC Return Filing Services by Patron Accounting</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Service</th><th>What We Do</th></tr></thead>
                    <tbody>
                        <tr><td>Monthly Contribution Calculation and Filing</td><td>Computing employer (3.25%) + employee (0.75%) contributions for each employee, filing on ESIC portal, generating challans, ensuring payment by the 15th.</td></tr>
<tr><td>Half-Yearly Return (Form 5)</td><td>Comprehensive reconciliation of all monthly contributions, employee-wise verification, and Form 5 submission by 12 November / 12 May deadlines.</td></tr>
<tr><td>NIL Declaration Filing</td><td>For months with no employee contributions, filing the mandatory NIL declaration to maintain compliance on the ESIC portal.</td></tr>
<tr><td>New Employee Registration + Aadhaar</td><td>Adding new employees within 10 days of joining, generating Insurance Numbers, and linking Aadhaar (mandatory from 2026).</td></tr>
<tr><td>Challan Management and Record Keeping</td><td>Downloading, organizing, and maintaining all monthly challans, Form 5 returns, and Form 6 registers for inspection readiness.</td></tr>
<tr><td>ESIC Inspection Support</td><td>Preparing wage registers, attendance records, Form 6, accident registers (Form 12), and all statutory documents for ESIC inspector visits.</td></tr>

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
            <h2 class="section-title">6-Step ESIC Return Filing Process</h2>
            <p class="section-subtitle" style="text-align:left;max-width:100%;">Patron Accounting targets completing monthly filing by the 12th of each month - 3-day buffer before the 15th deadline.</p>
        </header>
        <div class="steps-container">
            <div class="step-card"><div class="step-content"><span class="step-badge">Step 1</span><h3 class="step-title">Calculate Monthly Contributions</h3><p class="step-description">For each eligible employee (wages up to Rs 21,000/month): Employer contribution = 3.25% of wages; Employee contribution = 0.75% of wages. Include basic, DA, HRA, overtime, fixed allowances. Exclude PF, bonus, gratuity, leave encashment.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Contributions computed</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Wage audit done</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="15" y="10" width="90" height="65" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><rect x="22" y="22" width="30" height="12" rx="3" fill="#FFF3E0" stroke="#F5A623" stroke-width="0.8"/><text x="37" y="31" font-size="5" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">3.25%</text><rect x="57" y="22" width="30" height="12" rx="3" fill="#FFF3E0" stroke="#F5A623" stroke-width="0.8"/><text x="72" y="31" font-size="5" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">0.75%</text><path d="M48 55l8 8 16-16" stroke="#25D366" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg></div><span class="illustration-label">Calculated</span><span class="step-number-large">01</span></div></div></div>

<div class="step-card"><div class="step-content"><span class="step-badge">Step 2</span><h3 class="step-title">Log In to ESIC Portal</h3><p class="step-description">Visit esic.gov.in. Log in using the 17-digit employer code (User ID) and password. Navigate to the 'Monthly Contribution' section on the dashboard.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Portal accessed</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Dashboard open</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="15" y="10" width="90" height="65" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><rect x="20" y="15" width="80" height="8" rx="2" fill="#14365F" opacity="0.8"/><circle cx="25" cy="19" r="2" fill="#FF5F56"/><circle cx="31" cy="19" r="2" fill="#FFBD2E"/><circle cx="37" cy="19" r="2" fill="#27C93F"/><rect x="25" y="30" width="60" height="10" rx="3" fill="#FFF3E0" stroke="#F5A623" stroke-width="0.8"/><text x="55" y="38" font-size="5" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">esic.gov.in</text><rect x="30" y="50" width="50" height="12" rx="3" fill="#E8F5E9" stroke="#25D366" stroke-width="0.6"/><text x="55" y="59" font-size="5" fill="#25D366" font-weight="700" text-anchor="middle" font-family="Arial">LOGGED IN</text></svg></div><span class="illustration-label">Logged In</span><span class="step-number-large">02</span></div></div></div>

<div class="step-card"><div class="step-content"><span class="step-badge">Step 3</span><h3 class="step-title">Verify and Upload Contribution Data</h3><p class="step-description">Verify all employee records (names, insurance numbers, wages, joining/leaving dates). Upload monthly contribution data in prescribed format. Ensure Aadhaar is linked for new employees.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Data uploaded</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Records verified</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="15" y="5" width="90" height="70" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><line x1="30" y1="22" x2="90" y2="22" stroke="#F5A623" stroke-width="3" stroke-linecap="round"/><line x1="30" y1="35" x2="80" y2="35" stroke="#14365F" stroke-width="2" opacity="0.3" stroke-linecap="round"/><line x1="30" y1="45" x2="70" y2="45" stroke="#14365F" stroke-width="2" opacity="0.3" stroke-linecap="round"/><line x1="30" y1="55" x2="75" y2="55" stroke="#14365F" stroke-width="2" opacity="0.3" stroke-linecap="round"/><circle cx="85" cy="15" r="10" fill="#E8F5E9" stroke="#25D366" stroke-width="1.2"/><path d="M80 15l3 3 7-7" stroke="#25D366" stroke-width="1.5" stroke-linecap="round"/></svg></div><span class="illustration-label">Uploaded</span><span class="step-number-large">03</span></div></div></div>

<div class="step-card"><div class="step-content"><span class="step-badge">Step 4</span><h3 class="step-title">Pay Contribution and Generate Challan</h3><p class="step-description">Enter bank details, submit payment (employer + employee combined) via net banking/NEFT. Generate challan from 'List of Actions' > 'Generate Challan'. Download and save.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Payment done</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Challan generated</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="25" y="15" width="70" height="55" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><rect x="35" y="25" width="50" height="12" rx="3" fill="#FFF3E0" stroke="#F5A623" stroke-width="1"/><text x="60" y="34" font-size="6" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">CHALLAN</text><circle cx="60" cy="52" r="10" fill="#E8F5E9" stroke="#25D366" stroke-width="1.2"/><path d="M55 52l3 3 7-7" stroke="#25D366" stroke-width="1.5" stroke-linecap="round"/></svg></div><span class="illustration-label">Challan Done</span><span class="step-number-large">04</span></div></div></div>

<div class="step-card"><div class="step-content"><span class="step-badge">Step 5</span><h3 class="step-title">Self-Certification</h3><p class="step-description">Complete the self-certification by checking the declaration box. For employers with 40+ employees, upload the CA certificate. Submit the return.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Certified</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Submitted</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="25" y="15" width="70" height="55" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><rect x="35" y="25" width="50" height="12" rx="3" fill="#FFF3E0" stroke="#F5A623" stroke-width="1"/><text x="60" y="34" font-size="5" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">CERTIFIED</text><rect x="35" y="45" width="50" height="12" rx="3" fill="#E8F5E9" stroke="#25D366" stroke-width="0.8"/><text x="60" y="54" font-size="5" fill="#25D366" font-weight="700" text-anchor="middle" font-family="Arial">CA (40+)</text></svg></div><span class="illustration-label">Certified</span><span class="step-number-large">05</span></div></div></div>

<div class="step-card"><div class="step-content"><span class="step-badge">Step 6</span><h3 class="step-title">File Half-Yearly Return (Form 5)</h3><p class="step-description">At the end of each contribution period (Sep 30 / Mar 31), compile the half-yearly return reconciling all monthly contributions. File Form 5 by 12 November (Apr-Sep) or 12 May (Oct-Mar). Includes employee-wise details and workforce changes.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Form 5 filed</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Period reconciled</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="20" y="10" width="80" height="65" rx="8" fill="#E8F5E9" stroke="#25D366" stroke-width="1.5"/><rect x="28" y="25" width="64" height="20" rx="5" fill="#25D366" opacity="0.15"/><text x="60" y="33" font-size="6" fill="#14365F" font-weight="600" text-anchor="middle" font-family="Arial">FORM 5</text><text x="60" y="42" font-size="7" fill="#14365F" font-weight="800" text-anchor="middle" font-family="Arial">FILED</text><path d="M52 60l5 5 11-11" stroke="#25D366" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"/></svg></div><span class="illustration-label">Return Filed</span><span class="step-number-large">06</span></div></div></div>

        </div>
    </div>
</section>

<!-- SECTION 8: DOCUMENTS REQUIRED -->
<section class="content-section" id="documents-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Documents Required for ESIC Return Filing</h2>
            <div class="content-text">
                
                <p><strong>For Monthly Filing:</strong></p>
<ul>
<li>Payroll/salary register with employee-wise wage details</li>
<li>Attendance records for the month</li>
<li>List of new joiners and employees who left during the month</li>
<li>Bank details for contribution payment</li>
<li>Previous month's challan (for reference)</li>
</ul>
<p><strong>For Half-Yearly Return (Form 5):</strong></p>
<ul>
<li>All monthly challans for the 6-month period</li>
<li>Form 6 Register (employee-wise contribution record)</li>
<li>Wage register for the entire contribution period</li>
<li>Attendance records for the entire period</li>
<li>Accident register (Form 12) if any workplace accidents</li>
<li>CA certificate (mandatory for employers with 40+ employees)</li>
<li>Details of any Insurance Number changes or corrections</li>
</ul>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 9: CHALLENGES -->
<section class="content-section" id="challenges-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">4 Common Mistakes in ESIC Return Filing</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Challenge</th><th>Impact</th><th>How Patron Accounting Solves It</th></tr></thead>
                    <tbody>
                        <tr><td>Missing the 15th Deadline</td><td>Last-day portal issues, forgotten calendar reminders, payroll data delays cause missed monthly deadlines</td><td>Patron Accounting files contributions by the 12th of each month (3-day buffer) with automated calendar tracking and payroll data audit.</td></tr>
<tr><td>Incorrect Wage Calculation</td><td>Including excluded components (PF, bonus, gratuity) or excluding required ones (basic, DA, HRA, overtime, fixed allowances)</td><td>We audit payroll data before computing contributions, ensuring all wage components are correctly classified per ESI Act definitions.</td></tr>
<tr><td>Not Filing NIL Returns</td><td>Employers skip filing when no employees earned wages (temporary closure, all on unpaid leave), creating compliance gaps</td><td>We file NIL declarations proactively for every month regardless of contribution status to maintain a clean compliance record.</td></tr>
<tr><td>Missing Aadhaar Linking</td><td>From 2026, Insurance Numbers are not generated without valid Aadhaar and mobile verification for new employees</td><td>We ensure Aadhaar linking is completed within 10 days of each new employee joining, before their first contribution filing.</td></tr>

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
            <h2 class="section-title">ESIC Return Filing Fees</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Fee Component</th><th>Amount</th></tr></thead>
                    <tbody>
                        <tr><td>Monthly Contribution Filing</td><td class="table-amount">Rs 999 - Rs 2,999/month (based on employee count)</td></tr>
<tr><td>Half-Yearly Return (Form 5)</td><td class="table-amount">Rs 1,999 - Rs 4,999 per return</td></tr>
<tr><td>Monthly + Half-Yearly Combined (Annual)</td><td class="table-amount">Rs 14,999 - Rs 39,999/year</td></tr>
<tr><td>New Employee Registration + Aadhaar</td><td class="table-amount">Rs 200 - Rs 500 per employee</td></tr>
<tr><td>ESIC Inspection Preparation</td><td class="table-amount">Rs 2,999 - Rs 7,999 per inspection</td></tr>
<tr><td>CA Certificate (40+ employees)</td><td class="table-amount">Rs 2,999 - Rs 5,999</td></tr>
<tr><td>Government Filing Fee</td><td class="table-amount">Nil - no separate fee (contributions are the statutory payment)</td></tr>

                    </tbody>
                </table>
                </div>
                <p style="margin-top:16px;font-size:13px;color:var(--text-muted);font-style:italic;">All fees and charges listed are indicative only and do not constitute a binding offer. Final amounts may vary depending on the volume of work and the complexity involved.</p>
                <p style="margin-top:16px;">Professional service charges for drafting, filing, and representation are separate from the statutory fees. The exact fee depends on the complexity of the case, disputed amount, and number of hearings required. Contact us for a detailed quote.</p>
                <p style="margin-top:16px;"><strong>Get a free ESIC Returns consultation - <a href="tel:+919459456700">Call +91 945 945 6700</a> or <a href="https://wa.me/919459456700?text=Hi%2C%20I%20need%20help%20filing%20ESIC%20returns.%20Please%20call%20me." target="_blank">WhatsApp us</a>. No-obligation assessment.</strong></p>
            </div>
        </div>
    </div>
</section>

<!-- SECTION 11: TIMELINE -->
<section class="content-section" id="timeline-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">ESIC Return Filing Timeline</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Stage</th><th>Estimated Timeline</th></tr></thead>
                    <tbody>
                        <tr><td>Monthly contribution calculation</td><td>1-2 working days after payroll data</td></tr>
<tr><td>Filing on ESIC portal</td><td>Same day</td></tr>
<tr><td>Challan generation</td><td>Immediate after payment</td></tr>
<tr><td>Half-yearly return (Form 5) preparation</td><td>3-5 working days after period ends</td></tr>
<tr><td>Form 5 filing on portal</td><td>Same day after preparation</td></tr>
<tr><td><strong>Monthly cycle target</strong></td><td><strong>Filing by 12th of each month (3-day buffer)</strong></td></tr>

                    </tbody>
                </table>
                </div>
                <div class="highlight-box" style="margin-top:16px;">
                    
                    <p><strong>Important:</strong> Patron Accounting targets completing monthly filing by the 12th - three days before the 15th deadline - to prevent any last-day portal issues. Half-yearly Form 5 is prepared within 5 days of the contribution period ending and filed well ahead of the 12 November / 12 May deadlines.</p>

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
            <h2 class="section-title">Penalties for Late or Non-Filing of ESIC Returns</h2>
        </div>
        <div class="table-responsive-wrapper"><table><thead><tr><th>Violation</th><th>Penalty / Consequence</th><th>Legal Provision</th></tr></thead><tbody>
<tr><td>Late payment of contribution</td><td>12% per annum interest on delayed amount</td><td>ESI (General) Regulations</td></tr>
<tr><td>Delay up to 2 months</td><td>5% damages on contribution amount</td><td>Section 85A</td></tr>
<tr><td>Delay 2-4 months</td><td>10% damages</td><td>Section 85B</td></tr>
<tr><td>Delay 4-6 months</td><td>15% damages</td><td>Section 85C</td></tr>
<tr><td>Delay over 6 months</td><td>25% damages</td><td>Section 85D</td></tr>
<tr><td>Non-filing / false return</td><td>Imprisonment up to 1 year + Rs 5,000 fine</td><td>Section 85</td></tr>
<tr><td>Repeat offence</td><td>Imprisonment up to 2 years + Rs 5,000 fine</td><td>Section 85A (repeat)</td></tr>
<tr><td>Deducting employee share but not depositing</td><td>Prosecution + full recovery + damages</td><td>Section 85(a)</td></tr>
</tbody></table></div>
    </div>
</section>

<!-- SECTION 12A: SOCIAL PROOF -->
<section class="content-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Why 10,000+ Businesses Trust Patron Accounting</h2>
            <div class="content-text">
                
                <p><strong>10,000+ Businesses Served</strong> across India.</p>
<p><strong>50,000+ Documents Filed</strong> on government portals.</p>
<p><strong>4.9 Google Rating</strong> based on verified reviews.</p>
<p><strong>15+ Years of Practice.</strong></p>
<p><strong>4 Offices:</strong> Pune, Mumbai, Delhi, and Gurugram.</p>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 13: SELF-FILING vs PROFESSIONAL COMPARISON -->
<section class="content-section" id="comparison-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Monthly Contribution vs Half-Yearly Return</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Parameter</th><th>Monthly Contribution</th><th>Half-Yearly Return (Form 5)</th></tr></thead>
                    <tbody>
                        <tr><td>Frequency</td><td>Every month</td><td>Twice a year (Apr-Sep and Oct-Mar)</td></tr>
<tr><td>Due Date</td><td>15th of following month</td><td>12 November / 12 May</td></tr>
<tr><td>Purpose</td><td>Pay employer + employee contributions to ESIC fund</td><td>Reconcile all monthly contributions for the period</td></tr>
<tr><td>Filing Method</td><td>ESIC portal > Monthly Contribution section</td><td>ESIC portal > Half-Yearly Return section</td></tr>
<tr><td>Output</td><td>Challan (proof of payment)</td><td>Form 5 return confirmation</td></tr>
<tr><td>NIL Filing</td><td>NIL Declaration required</td><td>Return required even if some months had NIL</td></tr>
<tr><td>CA Certificate</td><td>Self-certification (up to 40 employees)</td><td>Mandatory CA certificate for 40+ employees</td></tr>
<tr><td>Penalty</td><td>12% interest + 5-25% damages</td><td>Prosecution risk + regulatory consequences</td></tr>

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
            <h2 class="section-title">Related ESIC and Payroll Services</h2>
            <div class="content-text">
                
                <ul>
<li><strong><a href="/esic-registration">ESIC Registration</a></strong> - One-time registration for establishments with 10+ employees.</li>
<li><strong><a href="/esic-calculation-and-compliance-services">ESIC Calculation and Compliance</a></strong> - Ongoing computation and compliance management.</li>
<li><strong><a href="/payroll-processing-and-management-services">Payroll Processing</a></strong> - Integrated payroll with ESIC and PF compliance.</li>
<li><strong><a href="/gst-returns">GST Returns</a></strong> - Monthly/quarterly GST return filing.</li>
<li><strong><a href="/private-limited-company-registration">Private Limited Company Registration</a></strong> - Company incorporation with compliance setup.</li>
</ul>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 15A: LEGAL FRAMEWORK -->
<section class="content-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Legal Framework for ESIC Returns</h2>
            <div class="content-text">
                
                <p><strong>Governing Law:</strong> <a href="https://www.indiacode.nic.in" target="_blank" rel="noopener">ESI Act, 1948</a>; ESI (General) Regulations, 1950.</p>
<p><strong>Key Sections:</strong></p>
<ul>
<li><strong>Section 39:</strong> Employer must pay both contributions; deduct employee share; deposit by 15th.</li>
<li><strong>Section 44:</strong> Employer contribution is a business expense deductible under Income Tax Act.</li>
<li><strong>Section 85:</strong> Penalty for non-payment - imprisonment up to 2 years + Rs 5,000 fine.</li>
<li><strong>Section 85(a):</strong> Specific penalty for deducting but not depositing employee contribution.</li>
<li><strong>Sections 85A-85E:</strong> Graduated damages: 5% (2 months), 10% (2-4), 15% (4-6), 25% (6+ months).</li>
<li><strong>Regulation 26:</strong> Half-yearly Return (Form 5) within prescribed period.</li>
</ul>
<p><strong>2026 Updates:</strong> Mandatory Aadhaar linking for all insured persons. Automated verification. CA certificate for 40+ employees.</p>
<p><strong>Portal:</strong> <a href="https://esic.gov.in" target="_blank" rel="noopener">esic.gov.in</a> | <a href="https://labour.gov.in" target="_blank" rel="noopener">Ministry of Labour</a></p>

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
                    <h2 class="faq-expanded__title">Frequently Asked Questions - ESIC Returns</h2>
                    <p class="faq-expanded__lead">Answers about ESIC return filing process, due dates, penalties, NIL returns, Form 5, and documents required.</p>
                    @include('partials.bigin-form', [
                        'variant'  => 'compact',
                        'service'  => 'ESIC Returns',
                    ])
                </aside>
                <div class="faq-expanded__list">
                    <div class="faq-expanded__item" id="faq-1">
                        <h3 class="faq-expanded__q">What is ESIC return filing?</h3>
                        <div class="faq-expanded__a"><p>ESIC return filing is the process of depositing monthly employer (3.25%) and employee (0.75%) contributions to the ESIC fund by the 15th of each month and filing half-yearly returns (Form 5) by 12 November (Apr-Sep) and 12 May (Oct-Mar). Every ESI-registered employer must file regardless of contribution amount. Even zero-contribution months require a NIL declaration.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-2">
                        <h3 class="faq-expanded__q">What is the due date for ESIC return?</h3>
                        <div class="faq-expanded__a"><p>Monthly contribution: 15th of the following month (e.g., April contribution due by 15 May). Half-yearly return (Form 5): 12 November for April-September period, and 12 May for October-March period. NIL declarations follow the same monthly deadline. Patron Accounting files by the 12th with a 3-day buffer.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-3">
                        <h3 class="faq-expanded__q">ESIC return kaise file kare?</h3>
                        <div class="faq-expanded__a"><p>ESIC return file karne ke liye esic.gov.in par login karo 17-digit employer code se. 'Monthly Contribution' section mein jaao. Employee details verify karo. Contribution data upload karo. Bank details bharo aur payment karo. Challan generate karo aur download karo. Self-certification complete karo. Form 5 ke liye contribution period ke baad portal par bharo aur submit karo. Patron Accounting - +91 945 945 6700.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-4">
                        <h3 class="faq-expanded__q">What is the penalty for late ESIC return filing?</h3>
                        <div class="faq-expanded__a"><p>Late contribution payment attracts 12% per annum interest on the delayed amount. Additionally, damages are levied: 5% (up to 2 months), 10% (2-4 months), 15% (4-6 months), and 25% (over 6 months) under Sections 85A-85E. Non-filing or false returns: imprisonment up to 1 year + Rs 5,000 fine (Section 85). Repeat offenders face up to 2 years.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-5">
                        <h3 class="faq-expanded__q">Do I need to file NIL return if no employees contributed?</h3>
                        <div class="faq-expanded__a"><p>Yes. Even if no employee earned wages in a particular month (all on unpaid leave, temporary closure), the employer must submit a NIL Declaration on the ESIC portal by the 15th. Failure to file NIL returns creates non-compliance gaps on record and can be flagged during ESIC inspections.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-6">
                        <h3 class="faq-expanded__q">ESIC return filing mein kya documents chahiye?</h3>
                        <div class="faq-expanded__a"><p>Monthly filing ke liye: payroll/salary register, attendance records, employee list with wages, bank details, aur previous challan. Half-yearly (Form 5) ke liye: saare 6 mahine ke challans, Form 6 register, wage register, attendance records, accident register (agar koi accident hua ho), aur CA certificate (40+ employees ke liye mandatory). Patron Accounting sab records maintain karta hai.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-7">
                        <h3 class="faq-expanded__q">What is ESIC half-yearly return (Form 5)?</h3>
                        <div class="faq-expanded__a"><p>Form 5 is the half-yearly Return of Contributions reconciling all monthly contributions for a six-month contribution period. Includes employee-wise contribution details, wage records, and workforce changes. Due by 12 November (Apr-Sep) and 12 May (Oct-Mar). For employers with 40+ employees, a Chartered Accountant certificate must accompany the return.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-8">
                        <h3 class="faq-expanded__q">What is the difference between monthly contribution and half-yearly return?</h3>
                        <div class="faq-expanded__a"><p>Monthly contribution is the actual payment of employer (3.25%) + employee (0.75%) to the ESIC fund, due by the 15th of each month. Half-yearly return (Form 5) is a reconciliation return filed twice a year (by 12 Nov and 12 May) summarizing all monthly contributions. Both are mandatory. Monthly is the payment; Form 5 is the verification and reconciliation.</p></div>
                    </div>
                </div>
            </div>


            <!-- Quick Answers -->
            <div class="highlight-box" style="margin-top:32px;">
                <p><strong>Quick Answers</strong></p>
                <p><strong>Q: Multiple months at once?</strong> A: No. Contributions must be paid month-by-month by the 15th. Arrears trigger interest and damages per month.</p>
<p><strong>Q: Employee crosses Rs 21,000 mid-period?</strong> A: Employee continues covered until the end of that contribution period. Contributions continue on full wages.</p>
<p><strong>Q: ESIC vs PF return filing?</strong> A: Separate schemes, separate portals, separate rates. ESIC on esic.gov.in; EPF on epfindia.gov.in via ECR.</p>
<p><strong>Q: Correct a mistake?</strong> A: Written request to regional ESIC office with supporting documents. Better to verify before filing.</p>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 18: URGENCY CTA -->
<section class="content-section" style="background: var(--orange-lighter) !important; border-left: 4px solid var(--orange);">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Missing the 15th Costs 12% Interest + Damages - File Today</h2>
            <div class="content-text">
                
                <p>Every day past the 15th triggers automatic 12% per annum interest. Sustained default escalates to 25% damages. Deducting employee's share but not depositing attracts prosecution under Section 85(a). NIL returns are mandatory even with zero contributions.</p>
<p>ESIC's automated verification systems flag discrepancies in real-time. Non-compliance shows up during inspections and affects your establishment's regulatory record.</p>
<p><strong>Action:</strong> <a href="tel:+919459456700">Call +91 945 945 6700</a> or <a href="https://wa.me/919459456700?text=Hi%2C%20I%20need%20ESIC%20Return%20Filing.%20Please%20call%20me." target="_blank" rel="noopener">WhatsApp us</a> for a free consultation.</p>

            </div>
        </div>
    </div>
</section>

<!-- CONCLUSION + CTA BLOCK (Dark) -->
<section class="content-section" style="background: var(--blue) !important;">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title" style="color:#FFFFFF !important;">File Your ESIC Returns On Time - Every Month</h2>
            <div class="content-text" style="text-align:left;">
                
                <p style="color:rgba(255,255,255,0.85);font-size:15px;line-height:1.8;">ESIC Return Filing - monthly contributions by the 15th and half-yearly Form 5 by 12 November/12 May - is the ongoing compliance backbone for every ESI-registered employer. Penalties escalate from 12% interest to 25% damages to prosecution.</p>
<p style="color:rgba(255,255,255,0.85);font-size:15px;line-height:1.8;">2026 enhancements (mandatory Aadhaar linking, automated verification, CA certificate for 40+ employees) make professional compliance support more important than ever.</p>
<p style="color:rgba(255,255,255,0.85);font-size:15px;line-height:1.8;">Patron Accounting handles end-to-end ESIC filing - monthly contributions, Form 5, NIL declarations, Aadhaar linking, and inspection readiness. 15+ years. 10,000+ businesses. Starting from Rs 999/month.</p>

            </div>
            <div style="display:flex;gap:14px;flex-wrap:wrap;margin-top:24px;">
                <a href="tel:+919459456700" style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:var(--orange);color:#fff;border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#128222; Call +91 945 945 6700</a>
                <a href="https://wa.me/919459456700?text=Hi%2C%20I%20need%20help%20filing%20ESIC%20returns.%20Please%20call%20me." target="_blank" style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:#25D366;color:#fff;border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#128172; WhatsApp Us</a>
                <a href="mailto:sales@patronaccounting.com?subject=Enquiry%20for%20ESIC%20Return%20Filing&body=Hello%2C%0A%0AI%20need%20ESIC%20return%20filing%20services.%0A%0AThank%20you." style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:transparent;color:#fff;border:2px solid rgba(255,255,255,0.3);border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#9993;&#65039; Email Us</a>
            </div>
            <p style="color:rgba(255,255,255,0.7);font-size:13px;margin-top:16px;">Book a Free Consultation - No Obligation.</p>
        </div>
    </div>
</section>

<!-- GSTAT STATE BENCH CITY PAGES (32 Pages) -->
<section class="content-section" style="padding:48px 32px;background:var(--gray-50);">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title" style="text-align:center;margin-bottom:12px;">ESIC Return Filing Services Across India</h2>
            <p style="text-align:center;color:var(--text-muted);font-size:15px;margin-bottom:40px;">Expert monthly contribution filing and half-yearly Form 5 returns with challan management and inspection readiness.</p>
            
            <div class="pa-city-block" style="margin-bottom:40px;"><div class="pa-city-grid"><a href="/esic-return/pune" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Pune</div><div class="pa-card-sub">Maharashtra</div></div></a><a href="/esic-return/mumbai" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Mumbai</div><div class="pa-card-sub">Maharashtra</div></div></a><a href="/esic-return/delhi" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Delhi</div><div class="pa-card-sub">NCR</div></div></a><a href="/esic-return/gurugram" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Gurugram</div><div class="pa-card-sub">Haryana</div></div></a></div></div>
<div class="pa-city-block"><div class="pa-block-title">Related Services</div><div class="pa-block-sub">Complete payroll and compliance</div><div class="pa-cross-grid"><a href="/esic-registration" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">ESIC Registration</div><div class="pa-card-sub">India</div></div></a><a href="/esic-calculation-and-compliance-services" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">ESIC Compliance</div><div class="pa-card-sub">India</div></div></a><a href="/payroll-processing-and-management-services" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Payroll Services</div><div class="pa-card-sub">India</div></div></a><a href="/pf-return" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">PF Returns</div><div class="pa-card-sub">India</div></div></a><a href="/gst-returns" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">GST Returns</div><div class="pa-card-sub">India</div></div></a><a href="/private-limited-company-registration" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Pvt Ltd Registration</div><div class="pa-card-sub">India</div></div></a></div></div>
        </div>
    </div>
</section>

<!-- CONTENT FRESHNESS FOOTER -->
<section class="content-section" style="padding:32px;">
    <div class="content-container">
        <div class="text-content" style="font-size:13px;color:var(--text-muted);">
            <p><strong>Content Created:</strong> 10 March 2026 &nbsp;|&nbsp; <strong>Last Updated:</strong> <span id="lastUpdatedFooter">10 March 2026</span> &nbsp;|&nbsp; <strong>Next Review:</strong> 10 September 2026 &nbsp;|&nbsp; <strong>Reviewed By:</strong> CA &amp; CS Team, Patron Accounting LLP</p>
            <p>This page is reviewed every 6 months. Content aligned with the ESI Act 1948, ESI (General) Regulations 1950, and current ESIC portal procedures. Next review: September 2026.</p>
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
