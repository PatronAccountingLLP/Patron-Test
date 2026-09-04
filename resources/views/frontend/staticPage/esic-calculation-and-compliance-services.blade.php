@extends('layouts.service-app')

<!-- External Dependencies (loaded by master layout in production) -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Barlow:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,400&family=DM+Sans:opsz,wght@9..40,400;9..40,500;9..40,600;9..40,700&display=swap" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

@section('meta')
    <title>ESIC Calculation & Compliance - Contribution, Returns & ESI</title>
    <meta name="description" content="ESIC calculation: Employee 0.75% + Employer 3.25% on wages up to Rs 21,000. Monthly deposit by 15th. Half-yearly returns. Expert CA team handles compliance.">
    <link rel="canonical" href="/esic-calculation-and-compliance-services">
    <meta name="robots" content="index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1">
    <meta property="og:title" content="ESIC Calculation & Compliance - Contribution, Returns & ESI">
    <meta property="og:description" content="ESIC calculation: Employee 0.75% + Employer 3.25% on wages up to Rs 21,000. Monthly deposit by 15th. Half-yearly returns. Expert CA team handles compliance.">
    <meta property="og:url" content="/esic-calculation-and-compliance-services">
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="Patron Accounting">
    <meta property="og:image" content="https://www.patronaccounting.com/images/og-default-square.png">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="1200">
    <meta property="og:image:type" content="image/png">
    <meta property="og:image:secure_url" content="https://www.patronaccounting.com/images/og-default-square.png">
    <meta property="og:image:alt" content="Patron Accounting - partner you can rely on">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="ESIC Calculation & Compliance - Contribution, Returns & ESI">
    <meta name="twitter:description" content="ESIC calculation: Employee 0.75% + Employer 3.25% on wages up to Rs 21,000. Monthly deposit by 15th. Half-yearly returns. Expert CA team handles compliance.">
    <meta name="twitter:image" content="https://www.patronaccounting.com/images/og-default-square.png">
@endsection

@section('schema')
    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@graph": [
        {
          "@type": "Service",
          "name": "ESIC Calculation & Compliance: Rates & Process",
          "description": "ESIC calculation: Employee 0.75% + Employer 3.25% on wages up to Rs 21,000. Monthly deposit by 15th. Half-yearly returns. Expert CA team handles compliance.",
          "url": "https://www.patronaccounting.com/esic-calculation-and-compliance-services",
          "serviceType": "ESIC Calculation & Compliance: Rates & Process",
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
            "url": "https://www.patronaccounting.com/esic-calculation-and-compliance-services",
            "priceSpecification": {
              "@type": "PriceSpecification",
              "minPrice": "21000",
              "maxPrice": "25000",
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
              "name": "ESIC Calculation & Compliance: Rates & Process",
              "item": "https://www.patronaccounting.com/esic-calculation-and-compliance-services"
            }
          ]
        },
        {
          "@type": "FAQPage",
          "mainEntity": [
            {
              "@type": "Question",
              "name": "How is ESI calculated from salary?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "ESI is calculated on the employee's gross monthly wages (not CTC or basic salary alone). The employee contributes 0.75% and the employer contributes 3.25% of the gross wages, making a total of 4%. Gross wages include basic pay, DA, HRA, city compensatory allowance, regular incentives, and other regular cash payments. Overtime, annual bonus, employer's PF/ESI contribution, gratuity, and leave encashment are excluded. For example, on a gross wage of Rs 18,000: employee pays Rs 135 (0.75%) and employer pays Rs 585 (3.25%), total Rs 720."
              }
            },
            {
              "@type": "Question",
              "name": "What is the ESI wage ceiling?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "The current ESI wage ceiling is Rs 21,000 per month gross salary. Employees earning more than Rs 21,000 per month are not covered under ESI. For persons with disability, the ceiling is Rs 25,000 per month. If an employee's wages exceed Rs 21,000 during a contribution period (April-September or October-March) due to an increment, ESI continues to be deducted until the end of that contribution period."
              }
            },
            {
              "@type": "Question",
              "name": "What is the deadline for depositing ESI contributions?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "The employer must deposit both the employee's and employer's ESI contributions within 15 days of the last day of the calendar month in which the contributions fall due. For example, contributions for the month of April must be deposited by 15 May. Payment can be made online through the ESIC portal or at designated branches of SBI and other authorized banks. Late payment attracts simple interest at 12% per annum for each day of delay."
              }
            },
            {
              "@type": "Question",
              "name": "ESI calculation kaise kare?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "ESI calculation karne ke liye employee ki gross salary lo (basic + DA + HRA + allowances). Employee ka 0.75% aur employer ka 3.25% contribution hota hai. Total 4% hota hai. Jaise ki salary Rs 15,000 hai toh employee ka Rs 112.50 aur employer ka Rs 487.50, total Rs 600. Ye amount har mahine 15 tarikh se pehle ESIC portal par deposit karna hota hai. Patron Accounting se madad lo - +91 945 945 6700 ."
              }
            },
            {
              "@type": "Question",
              "name": "What happens if ESI contribution is not paid on time?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "Late payment of ESI contributions attracts simple interest at 12% per annum on the amount due for each day of delay under Section 39(5)(a) of the ESI Act. Section 85 provides for criminal prosecution with imprisonment up to 2 years and/or fine of Rs 5,000. The Income Tax Act also disallows employer's ESI contribution deposited after the due date as a business expense, increasing taxable income."
              }
            },
            {
              "@type": "Question",
              "name": "When are ESI half-yearly returns due?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "ESI half-yearly returns must be filed through the ESIC portal: for the April to September contribution period, the return is due by 11 November; for the October to March contribution period, the return is due by 11 May. The return consolidates all monthly contribution data, employee details, wages, and payment information for the 6-month period."
              }
            },
            {
              "@type": "Question",
              "name": "ESI mein kitna paisa katta hai salary se?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "ESI mein employee ki salary se 0.75% katta hai aur employer 3.25% deta hai. Total 4% hota hai gross salary par. Ye tab lagta hai jab salary Rs 21,000 se kam ho aur company mein 10 ya zyada log kaam karte hon. Jis employee ki daily average salary Rs 176 ya kam hai, uska employee share nahi katta but employer ka share lagta hai."
              }
            },
            {
              "@type": "Question",
              "name": "Are contract workers covered under ESI?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "Yes. Contract workers and casual employees working in establishments covered under the ESI Act are also eligible for ESI coverage if they earn wages up to Rs 21,000 per month. The principal employer is responsible for ensuring that contractors deduct and deposit ESI contributions for their contract workers. If the contractor fails, the principal employer becomes liable. Quick Answers Is ESI calculated on CTC or gross salary? ESI is calculated on gross wages (total monthly earnings), not on CTC. Employer's contributions to PF/ESI included in CTC are excluded from the wage calculation. What is the minimum number of employees for ESI? 10 employees (in most states). Some states may have different thresholds as notified. Can an employee opt out of ESI? No. ESI coverage is statutory and mandatory for all eligible employees. Neither the employer nor the employee can opt out. Does ESI apply to the IT sector? Yes. The ESI scheme applies to all establishments including IT companies if they employ 10+ employees and have employees earning up to Rs 21,000/month."
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
                        ESIC Calculation and Compliance Services in India
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
                            <p class="mb-0 text-dark benefit-paragraph"><span>Employee Contribution:</span> 0.75% of gross wages (w.e.f. 01.07.2019)</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Employer Contribution:</span> 3.25% of gross wages | Total ESI = 4% of wages</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Wage Ceiling:</span> Rs 21,000 per month (Rs 25,000 for persons with disability)</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Deposit Deadline:</span> Within 15 days of the last day of the calendar month | Returns: 11 Nov & 11 May</p>
                        </div>
                    </div>

                    <p class="mb-4 fw-bold" style="color: var(--blue); font-size: 15px;">10,000+ Businesses Served | 4.9 Google Rating | Starting from INR 999/mo</p>

                    <div class="hero-cta">
                        <a href="tel:+919459456700" class="btn-video text-decoration-none">
                            <span class="play-circle"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="width:14px;height:14px;color:#fff"><path d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/></svg></span>
                            Call +91 945 945 6700
                        </a>
                        <a href="mailto:sales@patronaccounting.com" class="btn-sample text-decoration-none">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="width:18px;height:18px;"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,12 2,6"/></svg>
                            Email Us
                        </a>
                        <a href="https://wa.me/919459456700?text=Hello%2C%20I%20just%20visited%20your%20ESIC%20Compliance%20Services%20page.%20I%20would%20like%20to%20know%20more%20about%20it." target="_blank" class="btn-sample text-decoration-none" rel="noopener">
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
                                            'service'  => 'ESIC Calculation and Compliance',
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
    'ctaText'    => 'Get expert ESIC calculation, challan deposit, and return filing - starting from Rs 999/month.',
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
            <a href="#overview-section" class="toc-btn active">Overview</a>
            <a href="#what-section" class="toc-btn">What Is It?</a>
            <a href="#who-section" class="toc-btn">ESI Formula</a>
            <a href="#services-section" class="toc-btn">Our Services</a>
            <a href="#procedure-section" class="toc-btn">7-Step Process</a>
            <a href="#documents-section" class="toc-btn">Wage Components</a>
            <a href="#challenges-section" class="toc-btn">Challenges</a>
            <a href="#fees-section" class="toc-btn">Rates & Penalties</a>
            <a href="#timeline-section" class="toc-btn">Calendar</a>
            <a href="#benefits-section" class="toc-btn">ESI Benefits</a>
            <a href="#comparison-section" class="toc-btn">ESIC vs PF</a>
            <a href="#faq-section" class="toc-btn">FAQs</a>
        </div>
        <button class="toc-arrow right" id="tocRight">&#10095;</button>
    </div>
</div>

<!-- SECTION 2: OVERVIEW / INTRO + TL;DR -->
<section class="content-section" id="overview-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">ESIC Calculation and Compliance - Complete Guide 2026</h2>
            <div class="content-text">
                <div class="highlight-box" style="margin-bottom:20px;">
                    <p><strong>&#128204; TL;DR - ESIC Calculation and Compliance Services at a Glance</strong></p>
                    <p>ESIC (Employees' State Insurance Corporation) Calculation and Compliance involves the accurate computation, timely deposit, and periodic filing of ESI contributions under the Employees' State Insurance Act, 1948. The employee contributes 0.75% and the employer contributes 3.25% of the employee's wages (total 4%), applicable to employees earning up to Rs 21,000 per month in establishments with 10 or more employees. Contributions must be deposited within 15 days of the end of each calendar month, and half-yearly returns must be filed by 11 November (for April-September) and 11 May (for October-March).</p>
                </div>
                <p>The ESI scheme is the largest integrated social insurance scheme for employees in India, providing comprehensive social security including medical care, sickness benefits, maternity benefits, disability benefits, dependants' benefits, and funeral expenses.</p>
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Parameter</th><th>Details</th></tr></thead>
                    <tbody>
                        <tr><td>Governing Law</td><td>Employees' State Insurance Act, 1948</td></tr>
                        <tr><td>Administered By</td><td>ESIC under Ministry of Labour & Employment</td></tr>
                        <tr><td>Employee Contribution</td><td>0.75% of wages (w.e.f. 01.07.2019)</td></tr>
                        <tr><td>Employer Contribution</td><td>3.25% of wages (w.e.f. 01.07.2019)</td></tr>
                        <tr><td>Wage Ceiling</td><td>Rs 21,000/month gross (Rs 25,000 for persons with disability)</td></tr>
                        <tr><td>Deposit Deadline</td><td>Within 15 days of the last day of the calendar month</td></tr>
                        <tr><td>Return Filing</td><td>Half-yearly: 11 Nov (Apr-Sep) | 11 May (Oct-Mar)</td></tr>
                    </tbody>
                </table>
                </div>
                <p></p>
                <p>For employers, accurate ESI calculation is critical because errors in wage computation, incorrect inclusion/exclusion of allowances, missed deadlines, or wrong employee coverage determinations lead to penalties including 12% per annum interest on delayed contributions, prosecution with imprisonment up to 2 years, and fines of Rs 5,000. Patron Accounting's CA team handles the complete ESIC compliance cycle from offices in Pune, Mumbai, Delhi, and Gurugram. Keywords: <em>ESI calculation formula, ESIC contribution rate, ESI deduction from salary, ESIC compliance, ESI return filing, ESI calculation kaise kare, ESIC payment deadline, employer ESI contribution</em>.</p>
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
                <h2 class="section-title">What Is ESIC Calculation and Compliance?</h2>
                <div class="content-text what-is-definition">
                    
                    <p>ESIC calculation refers to the process of computing the monthly ESI contributions for each eligible employee based on their wages, applying the prescribed percentage rates (0.75% employee + 3.25% employer = 4% total), and ensuring accurate deduction and deposit. ESIC compliance encompasses the complete lifecycle of obligations: accurate calculation, timely deposit by the 15th of the following month, proper employee registration and IP (Insured Person) number generation, half-yearly return filing, and maintenance of wage and contribution records.</p>
                    <p>The ESI scheme operates on a contribution period and benefit period cycle. There are two contribution periods of 6 months each: April to September and October to March. The corresponding benefit periods are: contributions paid during April-September entitle benefits from January to June of the following year, and contributions during October-March entitle benefits from July to December.</p>
                    <p>If an employee's wages exceed Rs 21,000 during a contribution period (due to increment or bonus), ESI continues to be deducted until that contribution period ends. The employee and their family remain eligible for benefits during the corresponding benefit period. The scheme is administered by ESIC through its portal at <a href="https://esic.gov.in" target="_blank" rel="noopener">esic.gov.in</a>.</p>

                </div>
                <div class="highlight-box" style="margin-top:20px;">
                    <p><strong>Key Terms for ESIC Calculation and Compliance:</strong></p>
                    <ul>
                        <li><strong>Wages (for ESI Calculation):</strong> Includes basic pay, dearness allowance, HRA, city compensatory allowance, incentives (if paid regularly), food/tiffin/lunch allowance. Excludes: overtime earnings, annual bonus, employer's PF/ESI contribution, gratuity, retrenchment compensation, and encashment of leave.</li>
                        <li><strong>Contribution Period:</strong> Two half-yearly periods: April 1 to September 30, and October 1 to March 31. Contributions are calculated and deposited monthly but the coverage cycle operates on these 6-month periods.</li>
                        <li><strong>Benefit Period:</strong> The 6-month period during which an insured person is entitled to ESI benefits based on contributions paid during the corresponding contribution period.</li>
                        <li><strong>IP Number (Insured Person Number):</strong> A unique identification number allotted to each employee covered under ESI. Required for availing medical and cash benefits.</li>
                        <li><strong>Pehchan Card:</strong> The ESI identity card issued to each insured person and their family members. Required for availing medical benefits at ESIC hospitals and dispensaries.</li>
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
                            <text x="100" y="170" font-size="10" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial, sans-serif">ESIC Calculation and Compliance</text>
                        </svg>
                    </div>
                    <div class="illustration-badge">
                        <span>ESIC</span>
                        <strong>Compliance Service</strong>
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
            <h2 class="section-title">ESI Contribution Calculation Formula and Example</h2>
            <div class="content-text">
                
                <p><strong>ESI Calculation Formula:</strong></p>
                <ul>
                    <li><strong>Employee's ESI Contribution</strong> = Gross Wages x 0.75%</li>
                    <li><strong>Employer's ESI Contribution</strong> = Gross Wages x 3.25%</li>
                    <li><strong>Total ESI Contribution</strong> = Gross Wages x 4% (Employee + Employer)</li>
                </ul>
                <p><strong>Example:</strong> Employee with monthly gross wages of Rs 18,000:</p>
                <div class="table-responsive-wrapper">
                <table class="table-amount">
                    <thead><tr><th>Component</th><th>Rate</th><th>Amount</th></tr></thead>
                    <tbody>
                        <tr><td>Employee Contribution</td><td>0.75% of Rs 18,000</td><td>Rs 135</td></tr>
                        <tr><td>Employer Contribution</td><td>3.25% of Rs 18,000</td><td>Rs 585</td></tr>
                        <tr><td>Total ESI Contribution</td><td>4% of Rs 18,000</td><td>Rs 720</td></tr>
                    </tbody>
                </table>
                </div>
                <p><strong>Important Rules:</strong></p>
                <ul>
                    <li>Employees earning a daily average wage of up to Rs 176 are exempt from paying their share, but the employer must still pay the employer's share (3.25%)</li>
                    <li>ESI is calculated on gross wages (total earnings), not on basic salary alone</li>
                    <li>If wages exceed Rs 21,000 during a contribution period (e.g., due to increment), ESI continues until the end of that contribution period</li>
                    <li>Fractional amounts in ESI calculation are rounded to the nearest rupee</li>
                </ul>

            </div>
            </div>
        </div>
    </div>
</section>

<!-- SECTION 5: OUR SERVICES -->
<section class="content-section" id="services-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Patron Accounting ESIC Compliance Services</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Service</th><th>What We Do</th></tr></thead>
                    <tbody>
                        <tr><td>Monthly ESI Calculation</td><td>Accurate computation of employee and employer ESI contributions for every eligible employee based on wages, including proper inclusion/exclusion of allowances as per the ESI Act</td></tr>
                        <tr><td>Monthly Challan Generation and Deposit</td><td>Generation of monthly contribution challans through the <a href="https://esic.gov.in" target="_blank" rel="noopener">ESIC portal</a>, payment processing within the 15-day deadline, and documentation of deposit confirmations</td></tr>
                        <tr><td>Half-Yearly Return Filing</td><td>Preparation and filing of ESI returns for both contribution periods within statutory deadlines. See: <a href="/esic-return">ESIC Returns</a></td></tr>
                        <tr><td>Employee Registration and IP Number</td><td>Registration of new employees on the ESIC portal, generation of IP numbers, and Pehchan card coordination for all covered employees and family members</td></tr>
                        <tr><td>ESIC Registration (New Establishments)</td><td>Initial registration of establishments with ESIC for employers meeting the 10+ employee threshold. See: <a href="/esic-registration">ESIC Registration</a></td></tr>
                        <tr><td>Integrated Payroll with ESI Compliance</td><td>End-to-end payroll processing with automatic ESI calculation, deduction, challan generation, and return filing. See: <a href="/payroll-processing-and-management-services">Payroll Services</a></td></tr>

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
            <h2 class="section-title">7-Step ESIC Monthly Compliance Process</h2>
            <p class="section-subtitle" style="text-align:left;max-width:100%;">Follow this step-by-step process for monthly ESIC calculation, contribution deposit, and half-yearly return filing. Patron Accounting handles the entire compliance cycle for your establishment.</p>
        </header>
        <div class="steps-container">
            <div class="step-card"><div class="step-content"><span class="step-badge">Step 1</span><h3 class="step-title">Identify Covered Employees</h3><p class="step-description">Determine which employees are covered under ESI for the current month: all employees with gross monthly wages up to Rs 21,000 (Rs 25,000 for persons with disability) in an establishment with 10 or more employees. Include new joiners and exclude employees whose wages have permanently exceeded the ceiling from the beginning of a new contribution period.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Coverage roster updated</span>
                <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> New joiners included</span>
                </div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><circle cx="40" cy="30" r="12" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><circle cx="70" cy="30" r="12" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><circle cx="55" cy="55" r="12" fill="#FFF3E0" stroke="#F5A623" stroke-width="1.5"/><path d="M30 65c0-8 5-15 10-15M65 65c0-8 5-15 10-15M43 80c0-8 5-15 12-15" stroke="#14365F" stroke-width="1.5" fill="none"/></svg></div><span class="illustration-label">Roster Ready</span><span class="step-number-large">01</span></div></div></div>
<div class="step-card"><div class="step-content"><span class="step-badge">Step 2</span><h3 class="step-title">Compute Gross Wages for Each Employee</h3><p class="step-description">Calculate gross wages for each covered employee, including: basic pay, dearness allowance, HRA, city compensatory allowance, regular incentives, food/tiffin allowance, and other regular cash payments. Exclude: overtime, annual bonus, employer's PF/ESI contribution, gratuity, and leave encashment.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> All wage components mapped</span>
                <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Exclusions applied correctly</span>
                </div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="20" y="10" width="80" height="65" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><text x="60" y="32" font-size="9" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">GROSS</text><text x="60" y="48" font-size="14" fill="#F5A623" font-weight="800" text-anchor="middle" font-family="Arial">Rs 18,000</text><line x1="35" y1="58" x2="85" y2="58" stroke="#14365F" stroke-width="1.5" opacity="0.3"/></svg></div><span class="illustration-label">Wages Computed</span><span class="step-number-large">02</span></div></div></div>
<div class="step-card"><div class="step-content"><span class="step-badge">Step 3</span><h3 class="step-title">Apply ESI Contribution Rates</h3><p class="step-description">Calculate employee contribution at 0.75% of gross wages and employer contribution at 3.25% of gross wages for each covered employee. For employees with daily average wages up to Rs 176, the employee share is nil but the employer must still contribute 3.25%.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> 0.75% employee calculated</span>
                <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> 3.25% employer calculated</span>
                </div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="10" y="15" width="45" height="55" rx="6" fill="#E8F5E9" stroke="#25D366" stroke-width="1.2"/><text x="32" y="38" font-size="9" fill="#14365F" font-weight="600" text-anchor="middle" font-family="Arial">0.75%</text><text x="32" y="52" font-size="7" fill="#25D366" font-weight="600" text-anchor="middle" font-family="Arial">EMPLOYEE</text><rect x="65" y="15" width="45" height="55" rx="6" fill="#FFF3E0" stroke="#F5A623" stroke-width="1.2"/><text x="87" y="38" font-size="9" fill="#14365F" font-weight="600" text-anchor="middle" font-family="Arial">3.25%</text><text x="87" y="52" font-size="7" fill="#F5A623" font-weight="600" text-anchor="middle" font-family="Arial">EMPLOYER</text></svg></div><span class="illustration-label">Rates Applied</span><span class="step-number-large">03</span></div></div></div>
<div class="step-card"><div class="step-content"><span class="step-badge">Step 4</span><h3 class="step-title">File Monthly Contribution on ESIC Portal</h3><p class="step-description">Login to the <a href="https://esic.gov.in" target="_blank" rel="noopener">ESIC portal</a> using the employer's credentials. Navigate to 'File Monthly Contributions'. Enter the month, year, and contribution details for each employee. Review and submit.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Portal login complete</span>
                <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Contribution details filed</span>
                </div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="20" y="10" width="80" height="60" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><rect x="35" y="35" width="50" height="25" rx="4" fill="#FFF3E0" stroke="#F5A623" stroke-width="1"/><text x="60" y="51" font-size="8" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">esic.gov.in</text><path d="M55 28l5-8 5 8" stroke="#14365F" stroke-width="2" fill="none"/></svg></div><span class="illustration-label">Filed Online</span><span class="step-number-large">04</span></div></div></div>
<div class="step-card"><div class="step-content"><span class="step-badge">Step 5</span><h3 class="step-title">Generate Challan and Make Payment</h3><p class="step-description">After filing monthly contributions, generate the challan from the ESIC portal. Pay the total contribution (employee + employer share for all covered employees) online or at designated SBI/authorized bank branches within 15 days of the last day of the calendar month.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Challan generated</span>
                <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Payment within 15 days</span>
                </div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="20" y="10" width="80" height="55" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><circle cx="45" cy="38" r="14" fill="#FFF3E0" stroke="#F5A623" stroke-width="1.2"/><text x="45" y="42" font-size="10" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">Rs</text><path d="M70 30l5 5 10-10" stroke="#25D366" stroke-width="2.5" stroke-linecap="round"/></svg></div><span class="illustration-label">Payment Done</span><span class="step-number-large">05</span></div></div></div>
<div class="step-card"><div class="step-content"><span class="step-badge">Step 6</span><h3 class="step-title">Download and Archive Payment Confirmation</h3><p class="step-description">Download the payment confirmation and challan for record-keeping. Maintain month-wise contribution records for inspection by ESIC officers. These records are required for half-yearly return filing and audit purposes.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Confirmation downloaded</span>
                <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Records archived</span>
                </div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="15" y="5" width="40" height="55" rx="4" fill="#F0F4F8" stroke="#14365F" stroke-width="1.2"/><rect x="45" y="15" width="40" height="55" rx="4" fill="#E8F5E9" stroke="#25D366" stroke-width="1.2"/><rect x="75" y="10" width="35" height="55" rx="4" fill="#FFF3E0" stroke="#F5A623" stroke-width="1.2"/><path d="M60 30v15M55 40l5 5 5-5" stroke="#25D366" stroke-width="2" stroke-linecap="round"/></svg></div><span class="illustration-label">Records Saved</span><span class="step-number-large">06</span></div></div></div>
<div class="step-card"><div class="step-content"><span class="step-badge">Step 7</span><h3 class="step-title">File Half-Yearly Return</h3><p class="step-description">At the end of each contribution period, compile the half-yearly return consolidating all monthly contributions, employee details, wages, and contribution amounts. File by 11 November (for April-September period) and 11 May (for October-March period). Filed through the ESIC portal.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Return compiled</span>
                <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Filed before deadline</span>
                </div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><circle cx="60" cy="40" r="30" fill="#E8F5E9" stroke="#25D366" stroke-width="2"/><path d="M45 40l10 10 20-20" stroke="#25D366" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/></svg></div><span class="illustration-label">Return Filed</span><span class="step-number-large">07</span></div></div></div>


        </div>
    </div>
</section>

<!-- SECTION 8: DOCUMENTS REQUIRED -->
<section class="content-section" id="documents-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Components Included and Excluded in ESI Wages</h2>
            <div class="content-text">
                
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Included in Wages (ESI Applicable)</th><th>Excluded from Wages (ESI Not Applicable)</th></tr></thead>
                    <tbody>
                        <tr><td>Basic Pay</td><td>Overtime Earnings</td></tr>
                        <tr><td>Dearness Allowance (DA)</td><td>Annual Bonus (not linked to production)</td></tr>
                        <tr><td>House Rent Allowance (HRA)</td><td>Employer's PF/ESI Contribution</td></tr>
                        <tr><td>City Compensatory Allowance</td><td>Gratuity</td></tr>
                        <tr><td>Incentives (regular/recurring)</td><td>Retrenchment Compensation</td></tr>
                        <tr><td>Food/Tiffin/Lunch Allowance (conditions apply)</td><td>Leave Encashment</td></tr>
                        <tr><td>Night Shift Allowance</td><td>Conveyance Allowance (for duty)</td></tr>
                        <tr><td>Uniform Allowance (cash)</td><td>Washing Allowance</td></tr>
                        <tr><td>Commission (regular)</td><td>Benefits in Kind (certain conditions)</td></tr>
                    </tbody>
                </table>
                </div>
                <p>ESI is calculated on gross wages (total monthly earnings), not on CTC. Employer's contributions to PF/ESI included in CTC are excluded from the wage calculation for ESI purposes.</p>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 9: CHALLENGES -->
<section class="content-section" id="challenges-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">4 Common ESIC Compliance Challenges and How We Solve Them</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Challenge</th><th>Impact</th><th>How Patron Accounting Solves It</th></tr></thead>
                    <tbody>
                        <tr><td>Incorrect Wage Computation for ESI</td><td>Under-payment of contributions; ESIC detects during inspection resulting in arrears plus 12% interest</td><td>Patron Accounting ensures every wage component is correctly classified as per the ESI Act definition - no incorrect exclusions of HRA, incentives, or food allowances</td></tr>
                        <tr><td>Managing Mid-Period Salary Changes</td><td>Incorrect stopping of ESI deductions when salary crosses Rs 21,000 during a contribution period creates compliance gaps</td><td>Our system tracks contribution periods and applies the continuation rule automatically - ESI continues until the contribution period ends</td></tr>
                        <tr><td>Missing the 15-Day Deposit Deadline</td><td>12% per annum interest for each day of delay; prosecution under Section 85; income tax disallowance</td><td>We maintain a compliance calendar with automated reminders and process payments well before the deadline</td></tr>
                        <tr><td>Employee Coverage Determination for Variable Workforce</td><td>Incorrect coverage of contract, part-time, and variable-wage employees; principal employer liability for contractor workers</td><td>Our team maintains a dynamic employee roster with real-time wage tracking to ensure accurate coverage each month</td></tr>

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
            <h2 class="section-title">ESI Contribution Rates, Penalties, and Professional Charges</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Fee Component</th><th>Amount</th></tr></thead>
                    <tbody>
                        <tr><td>Employee Contribution</td><td>0.75% of gross wages</td></tr>
                        <tr><td>Employer Contribution</td><td>3.25% of gross wages</td></tr>
                        <tr><td>Total Contribution</td><td>4% of gross wages</td></tr>
                        <tr><td>Wage Ceiling (General)</td><td>Rs 21,000 per month</td></tr>
                        <tr><td>Wage Ceiling (Persons with Disability)</td><td>Rs 25,000 per month</td></tr>
                        <tr><td>Employee Exemption Threshold</td><td>Daily average wage up to Rs 176 (employee exempt; employer still contributes)</td></tr>
                        <tr><td>Late Payment Interest</td><td>12% per annum (simple interest) on delayed contributions</td></tr>
                        <tr><td>Criminal Penalty</td><td>Imprisonment up to 2 years and/or fine of Rs 5,000</td></tr>
                        <tr><td>Patron Accounting Professional Fees</td><td>Starting from INR 999/mo (Exl GST and Govt. Charges)</td></tr>

                    </tbody>
                </table>
                </div>
                <p style="margin-top:16px;font-size:13px;color:var(--text-muted);font-style:italic;">All fees and charges listed are indicative only and do not constitute a binding offer. Final amounts may vary depending on the volume of work and the complexity involved.</p>
                <p style="margin-top:16px;">Professional service charges for drafting, filing, and representation are separate from the statutory fees. The exact fee depends on the complexity of the case, disputed amount, and number of hearings required. Contact us for a detailed quote.</p>
                <p style="margin-top:16px;"><strong>Get a free ESIC Calculation and Compliance consultation - <a href="tel:+919459456700">Call +91 945 945 6700</a> or <a href="https://wa.me/919459456700?text=Hello%2C%20I%20just%20visited%20your%20ESIC%20Compliance%20Services%20page.%20I%20would%20like%20to%20know%20more%20about%20it." target="_blank" rel="noopener">WhatsApp us</a>. No-obligation assessment.</strong></p>
            </div>
        </div>
    </div>
</section>

<!-- SECTION 11: TIMELINE -->
<section class="content-section" id="timeline-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">ESI Compliance Calendar 2026</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Stage</th><th>Estimated Timeline</th></tr></thead>
                    <tbody>
                        <tr><td>Monthly ESI Contribution Deposit</td><td>15th of the following month (e.g., April wages by 15 May)</td></tr>
                        <tr><td>Half-Yearly Return (April-September)</td><td>11 November</td></tr>
                        <tr><td>Half-Yearly Return (October-March)</td><td>11 May</td></tr>
                        <tr><td>New Employee Registration</td><td>Within 10 days of joining</td></tr>
                        <tr><td>Accident Report</td><td>Within 24 hours of occurrence</td></tr>
                        <tr><td>Contribution Period 1</td><td>1 April to 30 September</td></tr>
                        <tr><td>Benefit Period 1 (from CP1 contributions)</td><td>1 January to 30 June (following year)</td></tr>
                        <tr><td>Contribution Period 2</td><td>1 October to 31 March</td></tr>
                        <tr><td>Benefit Period 2 (from CP2 contributions)</td><td>1 July to 31 December</td></tr>

                    </tbody>
                </table>
                </div>
                <div class="highlight-box" style="margin-top:16px;">
                    
                    <p><strong>Critical:</strong> Late deposit of ESI contributions attracts simple interest at 12% per annum for each day of delay under Section 39(5)(a). Income Tax Act also disallows employer ESI contribution deposited after the due date. Patron Accounting maintains automated compliance calendars and processes payments well before deadlines.</p>

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
            <h2 class="section-title">6 Benefits Under the ESI Scheme for Employees</h2>
        </div>
        <div class="features-grid">
<article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M22 12h-4l-3 9L9 3l-3 9H2"/></svg></div><h3 class="feature-title">Medical Benefit</h3><p class="feature-text">Complete medical care for the insured employee and their family at ESIC hospitals, dispensaries, and empaneled hospitals. Covers outpatient, inpatient, specialist consultations, diagnostics, medicines, and surgeries.</p></article>
<article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M14 2H6a2 2 0 00-2 2v16a2 2 0 002 2h12a2 2 0 002-2V8z"/><path d="M14 2v6h6M12 18v-6M9 15h6"/></svg></div><h3 class="feature-title">Sickness Benefit</h3><p class="feature-text">Cash compensation at 70% of wages for up to 91 days per year during certified illness. Extended sickness benefit at 80% of wages for up to 2 years for specified long-term diseases.</p></article>
<article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 21v-2a4 4 0 00-4-4H8a4 4 0 00-4 4v2"/><circle cx="12" cy="7" r="4"/></svg></div><h3 class="feature-title">Maternity Benefit</h3><p class="feature-text">Full wages (100%) for up to 26 weeks for maternity leave including 6 weeks of post-natal care. Additional medical bonus and nursing allowance as prescribed.</p></article>
<article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg></div><h3 class="feature-title">Disablement Benefit</h3><p class="feature-text">Temporary disablement benefit at 90% of wages during disability due to employment injury. Permanent disablement benefit at 90% of wages paid monthly for life based on extent of loss of earning capacity.</p></article>
<article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M17 21v-2a4 4 0 00-4-4H5a4 4 0 00-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M23 21v-2a4 4 0 00-3-3.87M16 3.13a4 4 0 010 7.75"/></svg></div><h3 class="feature-title">Dependants' Benefit</h3><p class="feature-text">In case of death of an insured employee due to employment injury, 90% of wages is paid to dependants (widow/widower, children) every month for life.</p></article>
<article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 1v22M17 5H9.5a3.5 3.5 0 000 7h5a3.5 3.5 0 010 7H6"/></svg></div><h3 class="feature-title">Funeral Expenses</h3><p class="feature-text">A lump sum of Rs 15,000 is paid to the person who incurs the expenditure on the funeral of the deceased insured person.</p></article>
</div>
    </div>
</section>

<!-- SECTION 12A: SOCIAL PROOF -->
<section class="content-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Why 10,000+ Businesses Trust Patron Accounting</h2>
            <div class="content-text">
                
                <p><strong>Trust Banner:</strong> 10,000+ Businesses Served | 4.9 Google Rating | 50,000+ Documents Filed | 15+ Years Experience</p>
                <p>With offices in Pune, Mumbai, Delhi, and Gurugram, Patron Accounting serves employers across India with integrated ESI, PF, and payroll compliance. Our CA team ensures zero-penalty compliance month after month.</p>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 13: SELF-FILING vs PROFESSIONAL COMPARISON -->
<section class="content-section" id="comparison-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">ESIC Compliance vs PF Compliance - Key Differences</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Parameter</th><th>ESIC Compliance</th><th>PF (EPF) Compliance</th></tr></thead>
                    <tbody>
                        <tr><td>Governing Act</td><td>ESI Act, 1948</td><td>EPF & MP Act, 1952</td></tr>
                        <tr><td>Employee Threshold</td><td>10 or more employees</td><td>20 or more employees</td></tr>
                        <tr><td>Wage Ceiling</td><td>Rs 21,000/month (gross)</td><td>Rs 15,000/month (basic + DA)</td></tr>
                        <tr><td>Employee Contribution</td><td>0.75% of gross wages</td><td>12% of basic + DA</td></tr>
                        <tr><td>Employer Contribution</td><td>3.25% of gross wages</td><td>13% of basic + DA</td></tr>
                        <tr><td>Total Contribution</td><td>4%</td><td>25%</td></tr>
                        <tr><td>Deposit Deadline</td><td>15th of following month</td><td>15th of following month</td></tr>
                        <tr><td>Return Filing</td><td>Half-yearly (11 Nov / 11 May)</td><td>Monthly ECR + Annual</td></tr>
                        <tr><td>Benefits</td><td>Medical, sickness, maternity, disability, funeral</td><td>Retirement savings, pension, life insurance</td></tr>
                        <tr><td>Penalty for Delay</td><td>12% p.a. interest + imprisonment up to 2 years</td><td>12% p.a. interest + damages up to 100% + imprisonment up to 3 years</td></tr>
                        <tr><td>Portal</td><td><a href="https://esic.gov.in" target="_blank" rel="noopener">esic.gov.in</a></td><td>epfindia.gov.in</td></tr>

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
            <h2 class="section-title">Related Compliance Services by Patron Accounting</h2>
            <div class="content-text">
                
                <ul>
                    <li><a href="/esic-registration">ESIC Registration</a> - Initial registration for new establishments with 10+ employees</li>
                    <li><a href="/esic-return">ESIC Returns</a> - Half-yearly ESI return filing</li>
                    <li><a href="/pf-registration">PF Registration</a> - Provident Fund registration for establishments</li>
                    <li><a href="/pf-return">PF Returns</a> - Monthly ECR and PF compliance</li>
                    <li><a href="/payroll-processing-and-management-services">Payroll Services</a> - Integrated payroll with ESIC/PF compliance</li>
                </ul>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 15A: LEGAL FRAMEWORK -->
<section class="content-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Legal and Compliance Framework for ESIC</h2>
            <div class="content-text">
                
                <p><strong>Governing Law:</strong> <a href="https://www.indiacode.nic.in" target="_blank" rel="noopener">Employees' State Insurance Act, 1948</a>; ESI (Central) Rules, 1950; ESI (General) Regulations, 1950.</p>
                <p><strong>Key Provisions:</strong></p>
                <ul>
                    <li><strong>Section 1(5):</strong> Applicability to establishments with 10 or more persons (as notified)</li>
                    <li><strong>Section 2(9):</strong> Definition of 'employee' - covers all persons employed for wages in connection with the establishment</li>
                    <li><strong>Section 2(22):</strong> Definition of 'wages' - all remuneration paid in cash, with specified exclusions</li>
                    <li><strong>Section 39:</strong> Contribution by employer and employee at prescribed rates (0.75% + 3.25% = 4%)</li>
                    <li><strong>Section 44:</strong> Employer to pay contributions within 15 days of last day of calendar month</li>
                    <li><strong>Section 39(5)(a):</strong> Interest at 12% per annum on amounts due but not paid</li>
                    <li><strong>Section 85:</strong> Penalty for non-payment/late payment - imprisonment up to 2 years and/or fine of Rs 5,000</li>
                    <li><strong>Regulation 31:</strong> Return of contributions to be filed by employer in prescribed form and within prescribed time</li>
                </ul>
                <p><strong>Income Tax Impact:</strong> Under the Income Tax Act, employer's ESI contribution deposited after the due date (15th of the following month) is disallowed as a business expenditure, creating additional taxable income. Timely deposit is critical for both ESI Act compliance and income tax optimization.</p>
                <p><strong>Regulatory Authority:</strong> Employees' State Insurance Corporation (ESIC) under Ministry of Labour & Employment. Portal: <a href="https://esic.gov.in" target="_blank" rel="noopener">https://esic.gov.in</a></p>

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
                    <h2 class="faq-expanded__title">Frequently Asked Questions About ESIC Calculation and Compliance</h2>
                    <p class="faq-expanded__lead">Find answers to common questions about ESI calculation, contribution rates, wage ceiling, deposit deadlines, benefits, and compliance requirements.</p>
                    @include('partials.bigin-form', [
                        'variant'  => 'compact',
                        'service'  => 'ESIC Calculation and Compliance',
                    ])
                </aside>
                <div class="faq-expanded__list">
                    <div class="faq-expanded__item" id="faq-1">
                        <h3 class="faq-expanded__q">How is ESI calculated from salary?</h3>
                        <div class="faq-expanded__a"><p>ESI is calculated on the employee's gross monthly wages (not CTC or basic salary alone). The employee contributes 0.75% and the employer contributes 3.25% of the gross wages, making a total of 4%. Gross wages include basic pay, DA, HRA, city compensatory allowance, regular incentives, and other regular cash payments. Overtime, annual bonus, employer's PF/ESI contribution, gratuity, and leave encashment are excluded. For example, on a gross wage of Rs 18,000: employee pays Rs 135 (0.75%) and employer pays Rs 585 (3.25%), total Rs 720.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-2">
                        <h3 class="faq-expanded__q">What is the ESI wage ceiling?</h3>
                        <div class="faq-expanded__a"><p>The current ESI wage ceiling is Rs 21,000 per month gross salary. Employees earning more than Rs 21,000 per month are not covered under ESI. For persons with disability, the ceiling is Rs 25,000 per month. If an employee's wages exceed Rs 21,000 during a contribution period (April-September or October-March) due to an increment, ESI continues to be deducted until the end of that contribution period.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-3">
                        <h3 class="faq-expanded__q">What is the deadline for depositing ESI contributions?</h3>
                        <div class="faq-expanded__a"><p>The employer must deposit both the employee's and employer's ESI contributions within 15 days of the last day of the calendar month in which the contributions fall due. For example, contributions for the month of April must be deposited by 15 May. Payment can be made online through the ESIC portal or at designated branches of SBI and other authorized banks. Late payment attracts simple interest at 12% per annum for each day of delay.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-4">
                        <h3 class="faq-expanded__q">ESI calculation kaise kare?</h3>
                        <div class="faq-expanded__a"><p>ESI calculation karne ke liye employee ki gross salary lo (basic + DA + HRA + allowances). Employee ka 0.75% aur employer ka 3.25% contribution hota hai. Total 4% hota hai. Jaise ki salary Rs 15,000 hai toh employee ka Rs 112.50 aur employer ka Rs 487.50, total Rs 600. Ye amount har mahine 15 tarikh se pehle ESIC portal par deposit karna hota hai. Patron Accounting se madad lo - <a href="tel:+919459456700">+91 945 945 6700</a>.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-5">
                        <h3 class="faq-expanded__q">What happens if ESI contribution is not paid on time?</h3>
                        <div class="faq-expanded__a"><p>Late payment of ESI contributions attracts simple interest at 12% per annum on the amount due for each day of delay under Section 39(5)(a) of the ESI Act. Section 85 provides for criminal prosecution with imprisonment up to 2 years and/or fine of Rs 5,000. The Income Tax Act also disallows employer's ESI contribution deposited after the due date as a business expense, increasing taxable income.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-6">
                        <h3 class="faq-expanded__q">When are ESI half-yearly returns due?</h3>
                        <div class="faq-expanded__a"><p>ESI half-yearly returns must be filed through the ESIC portal: for the April to September contribution period, the return is due by 11 November; for the October to March contribution period, the return is due by 11 May. The return consolidates all monthly contribution data, employee details, wages, and payment information for the 6-month period.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-7">
                        <h3 class="faq-expanded__q">ESI mein kitna paisa katta hai salary se?</h3>
                        <div class="faq-expanded__a"><p>ESI mein employee ki salary se 0.75% katta hai aur employer 3.25% deta hai. Total 4% hota hai gross salary par. Ye tab lagta hai jab salary Rs 21,000 se kam ho aur company mein 10 ya zyada log kaam karte hon. Jis employee ki daily average salary Rs 176 ya kam hai, uska employee share nahi katta but employer ka share lagta hai.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-8">
                        <h3 class="faq-expanded__q">Are contract workers covered under ESI?</h3>
                        <div class="faq-expanded__a"><p>Yes. Contract workers and casual employees working in establishments covered under the ESI Act are also eligible for ESI coverage if they earn wages up to Rs 21,000 per month. The principal employer is responsible for ensuring that contractors deduct and deposit ESI contributions for their contract workers. If the contractor fails, the principal employer becomes liable.</p></div>
                    </div>
                </div>
            </div>


            <!-- Quick Answers -->
            <div class="highlight-box" style="margin-top:32px;">
                <p><strong>Quick Answers</strong></p>
                <p><strong>Is ESI calculated on CTC or gross salary?</strong> ESI is calculated on gross wages (total monthly earnings), not on CTC. Employer's contributions to PF/ESI included in CTC are excluded from the wage calculation.</p>
                <p><strong>What is the minimum number of employees for ESI?</strong> 10 employees (in most states). Some states may have different thresholds as notified.</p>
                <p><strong>Can an employee opt out of ESI?</strong> No. ESI coverage is statutory and mandatory for all eligible employees. Neither the employer nor the employee can opt out.</p>
                <p><strong>Does ESI apply to the IT sector?</strong> Yes. The ESI scheme applies to all establishments including IT companies if they employ 10+ employees and have employees earning up to Rs 21,000/month.</p>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 18: URGENCY CTA -->
<section class="content-section" style="background: var(--orange-lighter) !important; border-left: 4px solid var(--orange);">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Get ESIC Compliance Support - Avoid Penalties and Interest</h2>
            <div class="content-text">
                
                <p>Every month of non-compliance adds 12% per annum interest on delayed ESI contributions. Criminal prosecution under Section 85 can result in imprisonment up to 2 years. Income tax disallowance of late-deposited employer ESI contributions further increases your tax liability. Don't let compliance gaps accumulate.</p>
                <p><strong>Get expert ESIC compliance support today.</strong> <a href="tel:+919459456700">Call +91 945 945 6700</a> or <a href="https://wa.me/919459456700?text=Hello%2C%20I%20just%20visited%20your%20ESIC%20Compliance%20Services%20page.%20I%20would%20like%20to%20know%20more%20about%20it." target="_blank" rel="noopener">WhatsApp us</a> for a free assessment. Starting from just Rs 999/month.</p>

            </div>
        </div>
    </div>
</section>

<!-- CONCLUSION + CTA BLOCK (Dark) -->
<section class="content-section" style="background: var(--blue) !important;">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title" style="color:#FFFFFF !important;">Expert ESIC Calculation and Compliance Services - Patron Accounting</h2>
            <div class="content-text" style="text-align:left;">
                
                <p style="color:rgba(255,255,255,0.85);font-size:16px;line-height:1.7;">ESIC Calculation and Compliance is a critical ongoing obligation for every employer covered under the ESI Act, 1948. Accurate calculation (0.75% employee + 3.25% employer on gross wages up to Rs 21,000), timely monthly deposit (by the 15th of the following month), and half-yearly return filing (11 November and 11 May) are the three pillars of ESI compliance.</p>
                <p style="color:rgba(255,255,255,0.85);font-size:16px;line-height:1.7;">Patron Accounting's CA team handles the complete ESIC compliance cycle: monthly calculation, challan generation, deposit, employee registration, half-yearly returns, and integrated payroll processing. With offices in Pune, Mumbai, Delhi, and Gurugram, and 15+ years of experience, we ensure zero-penalty compliance for employers across India.</p>

            </div>
            <div style="display:flex;gap:14px;flex-wrap:wrap;margin-top:24px;">
                <a href="tel:+919459456700" style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:var(--orange);color:#fff;border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#128222; Call +91 945 945 6700</a>
                <a href="https://wa.me/919459456700?text=Hello%2C%20I%20just%20visited%20your%20ESIC%20Compliance%20Services%20page.%20I%20would%20like%20to%20know%20more%20about%20it." target="_blank" style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:#25D366;color:#fff;border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;" rel="noopener">&#128172; WhatsApp Us</a>
                <a href="mailto:sales@patronaccounting.com?subject=Enquiry%20for%20ESIC%20Compliance%20Services&body=Hello%2C%20I%20just%20visited%20your%20ESIC%20Compliance%20Services%20page.%20I%20would%20like%20to%20know%20more%20about%20it.%0A%0AThank%20you." style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:transparent;color:#fff;border:2px solid rgba(255,255,255,0.3);border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#9993;&#65039; Email Us</a>
            </div>
            <p style="color:rgba(255,255,255,0.7);font-size:13px;margin-top:16px;">Book a Free Consultation - No Obligation.</p>
        </div>
    </div>
</section>

<!-- GSTAT STATE BENCH CITY PAGES (32 Pages) -->
<section class="content-section" style="padding:48px 32px;background:var(--gray-50);">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title" style="text-align:center;margin-bottom:12px;">ESIC Compliance Services Across India</h2>
            <p style="text-align:center;color:var(--text-muted);font-size:15px;margin-bottom:40px;">Get expert ESIC calculation and compliance support in your city.</p>

            <div class="pa-city-block" style="margin-bottom:40px;"><div class="pa-block-title">City-Wise Services</div><div class="pa-block-sub">ESIC compliance in major cities</div>
<div class="pa-city-grid">
<a href="/esic-calculation-and-compliance-services/pune" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Pune</div><div class="pa-card-sub">Maharashtra</div></div></a>
<a href="/esic-calculation-and-compliance-services/mumbai" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Mumbai</div><div class="pa-card-sub">Maharashtra</div></div></a>
<a href="/esic-calculation-and-compliance-services/delhi" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Delhi</div><div class="pa-card-sub">NCR</div></div></a>
<a href="/esic-calculation-and-compliance-services/gurugram" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Gurugram</div><div class="pa-card-sub">Haryana</div></div></a>
</div></div>
<div class="pa-city-block"><div class="pa-block-title">Related Compliance Services</div><div class="pa-block-sub">End-to-end labour compliance support</div>
<div class="pa-cross-grid">
<a href="/esic-registration" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">ESIC Registration</div><div class="pa-card-sub">India</div></div></a>
<a href="/esic-return" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">ESIC Returns</div><div class="pa-card-sub">India</div></div></a>
<a href="/pf-registration" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">PF Registration</div><div class="pa-card-sub">India</div></div></a>
<a href="/pf-return" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">PF Returns</div><div class="pa-card-sub">India</div></div></a>
<a href="/payroll-processing-and-management-services" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Payroll Services</div><div class="pa-card-sub">India</div></div></a>
<a href="/payroll-services" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Payroll Overview</div><div class="pa-card-sub">India</div></div></a>
</div></div>
        </div>
    </div>
</section>

<!-- CONTENT FRESHNESS FOOTER -->
<section class="content-section" style="padding:32px;">
    <div class="content-container">
        <div class="text-content" style="font-size:13px;color:var(--text-muted);">
            <p><strong>Content Created:</strong> 10 March 2026 &nbsp;|&nbsp; <strong>Last Updated:</strong> <span id="lastUpdatedFooter">10 March 2026</span> &nbsp;|&nbsp; <strong>Next Review:</strong> 10 September 2026 &nbsp;|&nbsp; <strong>Reviewed By:</strong> CA &amp; CS Team, Patron Accounting LLP</p>
            <p>This page is reviewed on an annual cycle (Tier 1 freshness). Review triggers include: ESIC contribution rate revision, wage ceiling change, return deadline change, ESI Act amendment, ESIC portal update, new benefit notification.</p>
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
     CONSULTATION FORM - Country Dropdown + Validation + Bigin Integration
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
