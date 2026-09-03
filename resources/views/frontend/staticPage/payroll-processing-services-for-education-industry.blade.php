
@extends('layouts.service-app')

<!-- External Dependencies (loaded by master layout in production) -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Barlow:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,400&family=DM+Sans:opsz,wght@9..40,400;9..40,500;9..40,600;9..40,700&display=swap" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

@section('meta')
    <title>Education Industry Payroll Services - PF, PT, TDS & ESI</title>
    <meta name="description" content="Payroll services for schools and colleges in India - PF, ESI, TDS, teacher salary structures, guest faculty, and statutory filings. From Rs 5,000/month.">
    <link rel="canonical" href="/payroll-processing-services-for-education-industry">
    <meta name="robots" content="index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1">
    <meta property="og:title" content="Education Industry Payroll Services - PF, PT, TDS & ESI">
    <meta property="og:description" content="Payroll services for schools and colleges in India - PF, ESI, TDS, teacher salary structures, guest faculty, and statutory filings. From Rs 5,000/month.">
    <meta property="og:url" content="/payroll-processing-services-for-education-industry">
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="Patron Accounting">
    <meta property="og:image" content="https://www.patronaccounting.com/images/og-default-square.png">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="1200">
    <meta property="og:image:type" content="image/png">
    <meta property="og:image:secure_url" content="https://www.patronaccounting.com/images/og-default-square.png">
    <meta property="og:image:alt" content="Patron Accounting - partner you can rely on">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Education Industry Payroll Services - PF, PT, TDS & ESI">
    <meta name="twitter:description" content="Payroll services for schools and colleges in India - PF, ESI, TDS, teacher salary structures, guest faculty, and statutory filings. From Rs 5,000/month.">
    <meta name="twitter:image" content="https://www.patronaccounting.com/images/og-default-square.png">
@endsection

@section('schema')
    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@graph": [
        {
          "@type": "Service",
          "name": "Payroll for Schools and Colleges",
          "description": "Payroll services for schools and colleges in India - PF, ESI, TDS, teacher salary structures, guest faculty, and statutory filings. From Rs 5,000/month.",
          "url": "https://www.patronaccounting.com/payroll-processing-services-for-education-industry",
          "serviceType": "Payroll for Schools and Colleges",
          "areaServed": {
            "@type": "Country",
            "name": "India"
          },
          "provider": {
            "@type": "Organization",
            "name": "Patron Accounting LLP",
            "url": "https://www.patronaccounting.com/",
            "logo": "https://www.patronaccounting.com/images/site-logo.svg"
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
              "name": "Payroll for Schools and Colleges",
              "item": "https://www.patronaccounting.com/payroll-processing-services-for-education-industry"
            }
          ]
        },
        {
          "@type": "FAQPage",
          "mainEntity": [
            {
              "@type": "Question",
              "name": "Is PF mandatory for private schools and colleges in India?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "Yes. Any educational institution - private school, college, coaching institute, or university - employing 20 or more persons is mandatorily covered under the Employees Provident Funds and Miscellaneous Provisions Act 1952 per Section 1(3)(a). Both employee (12% of Basic+DA) and employer (12% of Basic+DA, with 8.33% to EPS capped at Rs 15,000 basic + 3.67% to EPF) contributions are mandatory. Monthly ECR filing and contribution deposit by the 15th of each month are required. Private schools and colleges cannot exempt themselves merely because they are educational or charitable."
              }
            },
            {
              "@type": "Question",
              "name": "How should guest faculty honorarium be treated for TDS purposes?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "Guest faculty paid session-wise honorarium are typically not in an employer-employee relationship. Their payments are treated as professional fees and TDS is applicable under Section 194J of the Income Tax Act at 10%, when aggregate payment to a single guest faculty member exceeds Rs 30,000 per financial year. Institutions must track per-faculty cumulative payments, deduct TDS once the threshold is crossed, deposit by the 7th of following month, file Form 26Q quarterly, and issue Form 16A to each guest faculty member."
              }
            },
            {
              "@type": "Question",
              "name": "What is the impact of the 8th Pay Commission on school and college payroll?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "The 8th Central Pay Commission has been approved by Union Cabinet and is expected to implement revised pay scales effective January 1, 2026. Central government school employees (KVS, NVS, DSSSB) and UGC-affiliated college faculty will be directly impacted. Industry analysis projects a 25-34% salary hike with a fitment factor in the range of 2.28 to 3.0. Institutions must prepare for revised basic pay, DA merger if DA crosses 50% threshold, revised HRA, arrear computation, and TDS recalculation on arrear income."
              }
            },
            {
              "@type": "Question",
              "name": "Does ESI apply to teachers earning above Rs 21,000 per month?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "ESI is applicable only to employees whose gross wages are Rs 21,000 per month or below. Teachers earning above Rs 21,000 are exempt from ESI. However, if a teacher's salary falls below Rs 21,000 (new hire or part-time), ESI becomes mandatory. When salary crosses Rs 21,000 mid-year, ESI exemption takes effect from the next contribution period (April 1 or October 1)."
              }
            },
            {
              "@type": "Question",
              "name": "What statutory registers must schools maintain under November 2025 Labour Code changes?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "Under consolidated Labour Codes from November 2025, educational institutions must maintain digital registers: attendance register, wage register with all components and deductions, muster roll, EPF register (Form 3A and 6A), ESI register (Form 6), salary slips, and leave records. These must be maintained for minimum 7 years and available for inspection by labour authorities, EPF officers, or ESI inspectors at any time without advance notice."
              }
            },
            {
              "@type": "Question",
              "name": "How is HRA exemption calculated for teachers?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "HRA exemption under Section 10(13A) is the least of: (a) actual HRA received, (b) 50% of basic salary for metro cities or 40% for non-metro, and (c) actual rent paid minus 10% of basic salary. Teachers must submit rent receipts. For those opting for the new tax regime under Section 115BAC, HRA exemption is not available."
              }
            },
            {
              "@type": "Question",
              "name": "Can a school or college pay salary in cash?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "Under the Payment of Wages Act 1936, wages may be paid in cash, cheque, or bank transfer. However, the Code on Wages 2019 encourages or mandates bank transfer above certain thresholds. Cash payment without TDS deduction creates liability under Section 201. Best practice and increasingly a regulatory requirement is bank transfer with proper salary slips."
              }
            },
            {
              "@type": "Question",
              "name": "What bonus is payable to school and college employees?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "The Payment of Bonus Act 1965 applies to establishments with 20+ persons where employees draw wages up to Rs 21,000/month. Minimum bonus is 8.33% of annual wages payable within 8 months of year-end. Maximum bonus is 20% of annual wages. Many private schools and colleges qualify. Government schools may have different structures under state service rules. Quick Answers When must PF be deposited? By the 15th of each month for the previous month's contributions. ECR filed monthly on EPFO Unified Portal. What is Form 16A? TDS certificate issued to guest faculty paid under Section 194J. Must be issued within 15 days from due date of quarterly TDS return. School payroll kaise manage karein? School ka payroll manage karne ke liye PF, ESI, TDS sab statutory deductions sahi se calculate karna zaroori hai. Guest faculty ka TDS Section 194J ke under hota hai. Patron Accounting Rs 5,000/month se complete education payroll handle karta hai."
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
                        Payroll Services for Schools and Colleges in India
                    </h1>

                    <div class="expert-attribution-box">
                        <span class="eab-check"><svg width="16" height="16" viewBox="0 0 24 24" fill="currentColor"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg></span>
                        <span class="eab-title">Reviewed by CA and CS Team, Patron Accounting LLP</span>
                        <span class="eab-meta">
                            <span>ICAI & ICSI Registered</span><span class="eab-sep">|</span>
                            <span>15+ Years Experience</span><span class="eab-sep">|</span>
                            <span>Last Updated: <span id="lastUpdated">01 January 2024</span></span>
                        </span>
                        <a href="/authorhub/ca-sundram-gupta" class="eab-link">Verify Credentials &rarr;</a>
                    </div>

                    <div class="mb-4">
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>PF and ESI Compliance:</span> PF (12% employee + 12% employer) and ESI registration and monthly compliance for teaching and non-teaching staff</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>TDS Processing:</span> Section 192 TDS on salary, Section 194J for guest faculty honorarium, Form 24Q quarterly, Form 16 by June 15</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Multi-Category Payroll:</span> Permanent teachers, contractual faculty, guest lecturers, and part-time staff processed under a single managed service</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>8th Pay Commission Ready:</span> 7th CPC salary structure processing (PRT, TGT, PGT) with readiness for 8th Pay Commission revisions effective January 2026</p>
                        </div>
                    </div>

                    <p class="mb-4 fw-bold" style="color: var(--blue); font-size: 15px;">Trusted by 100+ educational institutions across India | 5,000+ employees under managed payroll | 4.9 star rating</p>

                    <div class="hero-cta">
                        <a href="tel:+919459456700" class="btn-video text-decoration-none">
                            <span class="play-circle"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="width:14px;height:14px;color:#fff"><path d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/></svg></span>
                            Call +91 945 945 6700
                        </a>
                        <a href="mailto:sales@patronaccounting.com?subject=Enquiry%20for%20Education%20Payroll&body=Hello%2C%20I%20just%20visited%20your%20Education%20Payroll%20page.%20I%20would%20like%20to%20know%20more%20about%20it.%0A%0AThank%20you." class="btn-sample text-decoration-none">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="width:18px;height:18px;"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,12 2,6"/></svg>
                            Email Us
                        </a>
                        <a href="https://wa.me/919459456700?text=Hello%2C%20I%20just%20visited%20your%20Education%20Payroll%20page.%20I%20would%20like%20to%20know%20more%20about%20it." target="_blank" class="btn-sample text-decoration-none" rel="noopener">
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
                                            'service'  => 'Education Sector Payroll',
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
    'ctaText'    => 'Get expert CA-managed education payroll for your school or college from Patron Accounting.',
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
            <a href="#overview-section" class="toc-btn active">Overview</a><a href="#what-section" class="toc-btn">What Is It</a><a href="#who-section" class="toc-btn">Who Needs It</a><a href="#services-section" class="toc-btn">Services</a><a href="#procedure-section" class="toc-btn">Process</a><a href="#documents-section" class="toc-btn">Documents</a><a href="#challenges-section" class="toc-btn">Challenges</a><a href="#fees-section" class="toc-btn">Fees</a><a href="#timeline-section" class="toc-btn">Deadlines</a><a href="#benefits-section" class="toc-btn">Why Us</a><a href="#comparison-section" class="toc-btn">In-House vs Us</a><a href="#faq-section" class="toc-btn">FAQs</a>
        </div>
        <button class="toc-arrow right" id="tocRight">&#10095;</button>
    </div>
</div>

<!-- SECTION 2: OVERVIEW / INTRO + TL;DR -->
<section class="content-section" id="overview-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Education Payroll Services - Overview</h2>
            <div class="content-text">
                <div class="highlight-box" style="margin-bottom:20px;">
                    <p><strong>&#128204; TL;DR - Education Sector Payroll Services at a Glance</strong></p>
                    <p>Educational institutions employ a uniquely diverse workforce: permanent teachers, non-teaching staff, contractual faculty, guest lecturers, and part-time employees. PF mandatory for 20+ employees (12%+12%). ESI for workers earning up to Rs 21,000/month (10+ employees). TDS Section 192 on salary; Section 194J at 10% on guest faculty above Rs 30,000/year. 8th Pay Commission expected January 2026. Salary by 7th of month. Patron Accounting provides CA-managed education payroll from Rs 5,000/month.</p>
                </div>
                <p>Educational institutions - schools, colleges, universities, and coaching institutes - employ a uniquely diverse workforce: permanent teachers and professors, non-teaching administrative staff, contractual faculty on fixed-term appointments, guest lecturers paid per session, and part-time employees. Each category carries distinct payroll treatment and separate compliance obligations.</p>
                <p>Managing all these simultaneously - across academic calendars, mid-year appointments, and state-specific professional tax rules - makes education sector payroll among the most complex to administer correctly. With the 8th Pay Commission expected January 2026 and November 2025 Labour Code digital register mandates, the compliance burden has never been higher.</p>
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
                <h2 class="section-title">What is Payroll Management for Educational Institutions?</h2>
                <div class="content-text what-is-definition">
                    
                    <p>Payroll management for schools and colleges is the structured monthly process of calculating gross salary for all employee categories (permanent, contractual, guest faculty, administrative staff), applying statutory deductions (PF, ESI, TDS, Professional Tax), generating payslips, disbursing net salary, and filing all compliance returns within prescribed deadlines under Indian labour, social security, and income tax law.</p><p>The education sector's payroll complexity arises from multiple employment categories with different statutory applicability, 7th CPC/UGC pay scales, academic calendar vs financial year mismatches, and state-specific professional tax rules across school branches.</p><p>Key categories: Permanent teaching staff (full PF+ESI+TDS), contractual faculty (TDS Section 192), guest lecturers (Section 194J at 10% above Rs 30,000/year), and part-time staff (assessed per employment nature).</p>

                </div>
                <div class="highlight-box" style="margin-top:20px;">
                    <p><strong>Key Terms for Education Sector Payroll:</strong></p>
                    <ul><li><strong>EPF Act 1952:</strong> Mandatory for 20+ employees; 12% employee + 12% employer of Basic+DA; deposit by 15th; interest 12% p.a. for delay</li><li><strong>ESI Act 1948:</strong> 10+ employees; workers earning up to Rs 21,000/month; 0.75% employee + 3.25% employer; deposit by 15th</li><li><strong>Section 192 TDS:</strong> TDS on salary for all employees at applicable income tax slab rate; Form 24Q quarterly</li><li><strong>Section 194J TDS:</strong> 10% TDS on guest faculty honorarium when aggregate exceeds Rs 30,000/year per person; Form 26Q quarterly</li><li><strong>8th Pay Commission:</strong> Approved by Union Cabinet; expected January 1, 2026; 25-34% salary revision projected for central teachers</li><li><strong>Code on Wages 2019:</strong> Basic pay must be at least 50% of CTC; salary by 7th of following month; active November 2025</li></ul>

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
                            <!-- EDU tag -->
                            <rect x="30" y="120" width="42" height="18" rx="4" fill="#FFF3E0" stroke="#F5A623" stroke-width="1"/>
                            <text x="51" y="132.5" font-size="8" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial, sans-serif">EDU</text>
                            <!-- Label -->
                            <text x="100" y="170" font-size="10" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial, sans-serif">Education Sector Payroll</text>
                        </svg>
                    </div>
                    <div class="illustration-badge">
                        <span>Education Specialist</span>
                        <strong>School and College Payroll Expert</strong>
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
            <h2 class="section-title">Who Needs Professional Payroll Services for Education</h2>
            <div class="content-text">
                
                <ul><li>Private schools (CBSE, ICSE, State Board): teaching/non-teaching staff, mid-year recruitment, summer vacation pay, state-specific PT</li><li>Colleges and universities (private and aided): UGC pay scales, 8th Pay Commission, large part-time/guest faculty rosters</li><li>Coaching institutes and tuition centres: contract faculty paid per session; Section 194J tracking; EPF triggered at 20+ employees</li><li>International schools: multi-currency payroll for expatriate faculty, FEMA compliance, DTAA-based TDS optimisation</li><li>Government-aided institutions: UGC-mandated pay scales, state government grant-linked salary, dual payroll (grant-funded vs self-funded posts)</li></ul><div class="table-responsive-wrapper" style="margin-top:20px;"><table><thead><tr><th>Statutory Requirement</th><th>Applicable When</th><th>Registration Authority</th></tr></thead><tbody><tr><td>EPF Registration</td><td>20 or more employees [Section 1(3), EPF Act 1952]</td><td>EPFO</td></tr><tr><td>ESI Registration</td><td>10+ employees; any earning below Rs 21,000/month [Section 2(12), ESI Act 1948]</td><td>ESIC</td></tr><tr><td>TAN (Tax Deduction Number)</td><td>Any institution deducting TDS [Section 203A, IT Act 1961]</td><td>Income Tax Department</td></tr><tr><td>Professional Tax</td><td>Any employee in applicable states</td><td>State Revenue Department</td></tr><tr><td>Gratuity</td><td>10 or more employees [Payment of Gratuity Act, 1972]</td><td>Labour Department</td></tr></tbody></table></div>

            </div>
            </div>
        </div>
    </div>
</section>

<!-- SECTION 5: OUR SERVICES -->
<section class="content-section" id="services-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">6 Core Payroll Services for Educational Institutions</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Service</th><th>What We Do</th></tr></thead>
                    <tbody>
                        <tr><td>Employee Categorization and Salary Structure Design</td><td>Map all staff into permanent, contractual, guest, part-time. CTC compliant with Code on Wages 2019 (50% basic). Align with 7th CPC/UGC pay scales. 8th Pay Commission readiness.</td></tr><tr><td>Monthly Payroll Processing</td><td>Gross salary for all categories, EPF (12% of Basic+DA), ESI (0.75% of gross up to Rs 21,000), Professional Tax (state-specific), TDS (Section 192). Itemised payslips for every employee.</td></tr><tr><td>PF and ESI Registration and Compliance</td><td>EPFO registration and UAN generation, monthly ECR filing, ESIC registration and monthly returns, contributions by 15th of each month.</td></tr><tr><td>TDS Compliance (Salary and Honorarium)</td><td>Section 192 for salaried staff, Section 194J for guest faculty professional fees, Form 24Q quarterly, Form 26Q quarterly, Form 16 by June 15.</td></tr><tr><td>Statutory Register Maintenance</td><td>Wage registers, attendance records, PF registers, muster rolls, digital records per November 2025 Labour Code mandates (7-year retention).</td></tr><tr><td>Annual Payroll Audit and Compliance Review</td><td>Year-end TDS reconciliation, PF/ESI reconciliation, gratuity provisioning, bonus computation (Payment of Bonus Act 1965), inspection readiness report.</td></tr>

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
            <h2 class="section-title">How We Process Education Sector Payroll - 10 Steps</h2>
            <p class="section-subtitle" style="text-align:left;max-width:100%;">From employee categorisation and salary structure design through to year-end compliance and labour inspection readiness.</p>
        </header>
        <div class="steps-container">
            <div class="step-card"><div class="step-content"><span class="step-badge">Step 1</span><h3 class="step-title">Employee Data Collection and Categorization</h3><p class="step-description">Collect PAN, Aadhaar, UAN, bank details, contracts. Classify as permanent, contractual, guest, or part-time. Verify salary components against Code on Wages 2019 (50% basic rule).</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Staff categorised</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Data validated</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="15" y="10" width="90" height="70" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><line x1="30" y1="30" x2="90" y2="30" stroke="#F5A623" stroke-width="3" stroke-linecap="round"/><path d="M85 55l5 5 10-10" stroke="#10B981" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"/></svg></div><span class="illustration-label">Categorised</span><span class="step-number-large">01</span></div></div></div>
<div class="step-card"><div class="step-content"><span class="step-badge">Step 2</span><h3 class="step-title">Salary Structure Finalisation</h3><p class="step-description">CTC breakdowns per category: Basic, DA, HRA, LTA, Medical, Special. Align with 7th CPC/UGC pay scales. Flag 8th Pay Commission pending revisions.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> CTC structures designed</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> 7th CPC aligned</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="10" y="10" width="45" height="65" rx="4" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><rect x="65" y="10" width="45" height="65" rx="4" fill="#FFF3E0" stroke="#F5A623" stroke-width="1.5"/><line x1="55" y1="42" x2="65" y2="42" stroke="#F5A623" stroke-width="2" stroke-linecap="round"/></svg></div><span class="illustration-label">Structures Set</span><span class="step-number-large">02</span></div></div></div>
<div class="step-card"><div class="step-content"><span class="step-badge">Step 3</span><h3 class="step-title">Statutory Registration</h3><p class="step-description">Register with EPFO (Establishment Code), ESIC (Employer Code), and Income Tax Department (TAN). Professional Tax in applicable states.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> All registrations complete</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> TAN obtained</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="20" y="15" width="80" height="55" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><text x="60" y="48" font-size="11" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">REG</text><path d="M82 55l5 5 10-10" stroke="#10B981" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"/></svg></div><span class="illustration-label">Registered</span><span class="step-number-large">03</span></div></div></div>
<div class="step-card"><div class="step-content"><span class="step-badge">Step 4</span><h3 class="step-title">Monthly Payroll Inputs</h3><p class="step-description">Attendance data, leave records, mid-month joinings/exits, guest lecture session counts, variable pay components.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Attendance compiled</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Guest sessions counted</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="20" y="15" width="80" height="55" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><rect x="30" y="35" width="15" height="25" rx="2" fill="#F5A623" opacity="0.6"/><rect x="52" y="40" width="15" height="20" rx="2" fill="#10B981" opacity="0.6"/><rect x="74" y="32" width="15" height="28" rx="2" fill="#F5A623" opacity="0.6"/></svg></div><span class="illustration-label">Inputs Ready</span><span class="step-number-large">04</span></div></div></div>
<div class="step-card"><div class="step-content"><span class="step-badge">Step 5</span><h3 class="step-title">Gross to Net Computation</h3><p class="step-description">EPF 12%, ESI 0.75%, PT per state, TDS Section 192 per projected annual income and tax regime. Net take-home calculated.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> All deductions applied</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Net pay computed</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="15" y="5" width="90" height="70" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><line x1="30" y1="25" x2="90" y2="25" stroke="#F5A623" stroke-width="2" stroke-linecap="round"/><line x1="30" y1="38" x2="80" y2="38" stroke="#14365F" stroke-width="1.5" opacity="0.3"/><line x1="30" y1="50" x2="70" y2="50" stroke="#14365F" stroke-width="1.5" opacity="0.3"/></svg></div><span class="illustration-label">Computed</span><span class="step-number-large">05</span></div></div></div>
<div class="step-card"><div class="step-content"><span class="step-badge">Step 6</span><h3 class="step-title">Payslip Generation and Salary Disbursement</h3><p class="step-description">Detailed payslips with all components. Bank salary upload file. Disbursement by 7th per Payment of Wages Act.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Payslips generated</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Salary by 7th</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="20" y="15" width="80" height="55" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><text x="60" y="48" font-size="12" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">PAY</text><path d="M82 55l5 5 10-10" stroke="#10B981" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"/></svg></div><span class="illustration-label">Paid</span><span class="step-number-large">06</span></div></div></div>
<div class="step-card"><div class="step-content"><span class="step-badge">Step 7</span><h3 class="step-title">Statutory Contributions Deposit</h3><p class="step-description">EPF and ESI by 15th. TDS challan by 7th. Professional Tax per state due date.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> PF/ESI by 15th</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> TDS by 7th</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><circle cx="60" cy="42" r="25" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><text x="60" y="38" font-size="8" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">EPF</text><text x="60" y="49" font-size="9" fill="#F5A623" font-weight="600" text-anchor="middle" font-family="Arial">ESI+TDS</text></svg></div><span class="illustration-label">Deposited</span><span class="step-number-large">07</span></div></div></div>
<div class="step-card"><div class="step-content"><span class="step-badge">Step 8</span><h3 class="step-title">Monthly Return Filing</h3><p class="step-description">EPF ECR monthly. ESI return half-yearly. Form 24Q quarterly. State PT returns per schedule.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> ECR filed monthly</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Returns on schedule</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="15" y="10" width="45" height="60" rx="4" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><rect x="65" y="10" width="45" height="60" rx="4" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><line x1="22" y1="30" x2="52" y2="30" stroke="#F5A623" stroke-width="2" stroke-linecap="round"/><line x1="72" y1="30" x2="102" y2="30" stroke="#F5A623" stroke-width="2" stroke-linecap="round"/></svg></div><span class="illustration-label">Filed</span><span class="step-number-large">08</span></div></div></div>
<div class="step-card"><div class="step-content"><span class="step-badge">Step 9</span><h3 class="step-title">Form 16 and Year-End Compliance</h3><p class="step-description">Form 16 by June 15. TDS vs Form 26AS reconciliation. Gratuity provision. Bonus under Payment of Bonus Act 1965.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Form 16 issued</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Gratuity provisioned</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="25" y="10" width="70" height="55" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><circle cx="60" cy="37" r="20" fill="#E8F5E9" stroke="#10B981" stroke-width="2"/><path d="M50 37l7 7 14-14" stroke="#10B981" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/></svg></div><span class="illustration-label">Year Complete</span><span class="step-number-large">09</span></div></div></div>
<div class="step-card"><div class="step-content"><span class="step-badge">Step 10</span><h3 class="step-title">Labour Inspection Readiness</h3><p class="step-description">Digital wage registers, attendance logs, salary slips, PF/ESI registers, muster rolls maintained for 7 years per November 2025 Labour Code mandates.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> All registers maintained</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> 7-year retention</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><circle cx="60" cy="45" r="28" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><line x1="60" y1="25" x2="60" y2="45" stroke="#14365F" stroke-width="2"/><line x1="60" y1="45" x2="78" y2="45" stroke="#F5A623" stroke-width="2"/><circle cx="60" cy="45" r="3" fill="#14365F"/></svg></div><span class="illustration-label">Audit Ready</span><span class="step-number-large">10</span></div></div></div>


        </div>
    </div>
</section>

<!-- SECTION 8: DOCUMENTS REQUIRED -->
<section class="content-section" id="documents-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Documents Required for Education Payroll Setup</h2>
            <div class="content-text">
                
                <ul><li>Certificate of Registration (Society/Trust/Section 8 Company as applicable)</li><li>PAN of institution and TAN (Tax Deduction Account Number)</li><li>EPFO Establishment Code and ESIC Employer Code (if already registered)</li><li>Appointment letters and employment contracts for all staff categories</li><li>PAN, Aadhaar, bank account details, and UAN for all employees</li><li>Current salary structure and pay scale commitments (7th CPC/UGC scales)</li><li>State Professional Tax Registration Certificate (where applicable)</li><li>Previous payroll records, Form 16 copies, and TDS challans (for migration)</li><li>Guest faculty engagement letters showing session-wise remuneration or monthly honorarium</li></ul>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 9: CHALLENGES -->
<section class="content-section" id="challenges-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">4 Payroll Challenges Specific to Educational Institutions</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Challenge</th><th>Impact</th><th>How Patron Accounting Solves It</th></tr></thead>
                    <tbody>
                        <tr><td>Multiple employment categories with different statutory applicability</td><td>Permanent (PF+ESI+TDS), contract (Section 192 or 194J), guest (Section 194J only), part-time - all need different payroll treatment in single run</td><td>Category-wise payroll matrix with separate computation rules; CA reviews engagement letters for correct Section 192 vs 194J classification</td></tr><tr><td>8th Pay Commission revision readiness</td><td>25-34% projected salary revision for central teachers (KVS, NVS) and UGC colleges; arrear calculations and TDS recomputation needed</td><td>Pre-built 8th CPC revision templates; revised basic pay, DA adjustments, and arrear payouts computed within same payroll cycle</td></tr><tr><td>Guest faculty honorarium TDS classification errors</td><td>Aggregate annual payments crossing Rs 30,000 per guest requires 10% TDS under Section 194J; non-deduction attracts Section 201 interest and penalties</td><td>Real-time per-faculty cumulative payment tracking; automatic TDS flagging at threshold; Form 26Q and Form 16A issued on time</td></tr><tr><td>Academic calendar vs financial year mismatch</td><td>Mid-year increments, summer vacation pay, and bonus cycles create TDS estimation challenges</td><td>Monthly TDS re-estimation based on projected annual income; prospective adjustment when salaries change mid-year</td></tr>

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
            <h2 class="section-title">Education Payroll Service Fees 2026</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Fee Component</th><th>Amount</th></tr></thead>
                    <tbody>
                        <tr><td>Patron Accounting Professional Fees</td><td>Starting from INR 149 per employee (Exl GST and Govt. Charges)</td></tr><tr><td>Basic Payroll (Up to 25 employees)</td><td>Rs 5,000 - Rs 8,000/month (payslips, PF, ESI, TDS, PT)</td></tr><tr><td>Standard Payroll (26-100 employees)</td><td>Rs 8,000 - Rs 15,000/month (all statutory deductions, returns, payslips)</td></tr><tr><td>Full-Service Payroll (100-300 employees)</td><td>Rs 15,000 - Rs 30,000/month (complete payroll, all filings, Form 16, registers)</td></tr><tr><td>Guest Faculty TDS Management</td><td>Rs 2,000 - Rs 5,000/month (Section 194J tracking, Form 26Q, TDS certificates)</td></tr><tr><td>8th Pay Commission Revision</td><td>Rs 8,000 - Rs 20,000 one-time (arrear computation, revised payroll, TDS recalculation)</td></tr><tr><td>Payroll Audit and Compliance Review</td><td>Rs 5,000 - Rs 15,000/year (annual reconciliation, inspection readiness)</td></tr>

                    </tbody>
                </table>
                </div>
                <p style="margin-top:16px;font-size:13px;color:var(--text-muted);font-style:italic;">All fees and charges listed are indicative only and do not constitute a binding offer. Final amounts may vary depending on the volume of work and the complexity involved.</p>
                <p style="margin-top:16px;">Professional service charges for drafting, filing, and representation are separate from the statutory fees. The exact fee depends on the complexity of the case, disputed amount, and number of hearings required. Contact us for a detailed quote.</p>
                <p style="margin-top:16px;"><strong>Get a free Education Sector Payroll consultation - <a href="tel:+919459456700">Call +91 945 945 6700</a> or <a href="https://wa.me/919459456700?text=Hello%2C%20I%20just%20visited%20your%20Education%20Payroll%20page.%20I%20would%20like%20to%20know%20more%20about%20it." target="_blank" rel="noopener">WhatsApp us</a>. No-obligation assessment.</strong></p>
            </div>
        </div>
    </div>
</section>

<!-- SECTION 11: TIMELINE -->
<section class="content-section" id="timeline-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Payroll Compliance Deadlines for Educational Institutions</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Stage</th><th>Estimated Timeline</th></tr></thead>
                    <tbody>
                        <tr><td>15th of each month</td><td>PF and ESI contribution deposit (interest 12% p.a. + damages under Section 14B EPF Act for delay)</td></tr><tr><td>7th of each month</td><td>TDS deposit on salaries (interest 1.5%/month under Section 201A) and guest faculty (Section 194J)</td></tr><tr><td>31 Jul / 31 Oct / 31 Jan / 31 May</td><td>Form 24Q (salary TDS) and Form 26Q (non-salary TDS including 194J) quarterly returns (Rs 200/day under Section 234E)</td></tr><tr><td>By June 15</td><td>Form 16 issued to all employees (penalty Rs 100/day under Section 272A)</td></tr><tr><td>May 11 / Nov 11</td><td>ESI half-yearly return (Form 5) - ESIC penalties and prosecution for non-filing</td></tr><tr><td>By 7th/10th of month</td><td>Salary payment to staff (Payment of Wages Act; 7th for under 1,000 employees, 10th for 1,000+)</td></tr>

                    </tbody>
                </table>
                </div>
                <div class="highlight-box" style="margin-top:16px;">
                    
                    <p><strong>Critical:</strong> 8th Pay Commission expected January 2026 - all affected institutions must prepare payroll systems for revised basic pay, DA merger, arrear computation, and TDS recalculation. November 2025 Labour Code mandates digital statutory registers maintained for 7 years. Patron Accounting manages all deadline calendars with advance alerts.</p>

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
            <h2 class="section-title">Why Educational Institutions Trust Patron Accounting</h2>
        </div>
        <div class="features-grid"><article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><h3>Sector-Specific Expertise</h3><p>Our CA team understands UGC pay scales, 7th CPC structures, 8th Pay Commission revisions, and education trust vs Section 8 vs society governance differences.</p></article><article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg></div><h3>Multi-Category Accuracy</h3><p>Correctly distinguishing permanent (Section 192) from guest faculty (Section 194J) prevents audit exposure. We get this right by design.</p></article><article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M14 2H6a2 2 0 00-2 2v16a2 2 0 002 2h12a2 2 0 002-2V8z"/><path d="M14 2v6h6"/></svg></div><h3>Regulatory Currency</h3><p>Budget 2026-27 tax changes, 8th Pay Commission, November 2025 Labour Code digital mandates, and state PT changes - all tracked and implemented.</p></article><article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M17 21v-2a4 4 0 00-4-4H5a4 4 0 00-4 4v2"/><circle cx="9" cy="7" r="4"/></svg></div><h3>Inspection Readiness</h3><p>All statutory registers in audit-ready digital format per November 2025 requirements. EPF, ESIC, and labour inspectors can visit unannounced.</p></article><article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8V7m0 10v1M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><h3>Peace of Mind for Management</h3><p>School principals and college administrators focus on academic outcomes, not payroll compliance. Our fully managed service takes complete ownership.</p></article><article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"/></svg></div><h3>8th Pay Commission Ready</h3><p>Pre-built revision templates for immediate implementation once fitment factors are notified. Arrear computation and TDS recalculation in the same cycle.</p></article></div>
    </div>
</section>

<!-- SECTION 12A: SOCIAL PROOF -->
<section class="content-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">What Our Education Clients Say</h2>
            <div class="content-text">
                
                <div class="highlight-box"><p><em>100+ educational institutions served | 5,000+ employees under managed payroll | 15+ years experience | CBSE schools, private colleges, coaching institutes, government-aided institutions | 4 offices: Pune, Mumbai, Bangalore, Delhi NCR | 4.9 star rating</em></p></div>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 13: SELF-FILING vs PROFESSIONAL COMPARISON -->
<section class="content-section" id="comparison-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">In-House Payroll vs Patron Accounting Managed Payroll</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Parameter</th><th>Patron Accounting</th><th>In-House Administration</th></tr></thead>
                    <tbody>
                        <tr><td>Guest Faculty TDS</td><td>Tracked per payee; Form 26Q filed on time</td><td>Often missed; Section 194J threshold not tracked</td></tr><tr><td>8th Pay Commission Readiness</td><td>Pre-built templates ready for immediate implementation</td><td>Needs complete system rebuild</td></tr><tr><td>PF/ESI Deposit Deadlines</td><td>Never delayed - 15th deposit guaranteed</td><td>Frequently delayed; attracts interest</td></tr><tr><td>State PT Compliance</td><td>All applicable states monitored and filed</td><td>State updates often missed</td></tr><tr><td>TDS Recalculation on Mid-Year Salary Change</td><td>Monthly re-estimation prevents year-end surprises</td><td>Often re-done wrong; shortfall at year-end</td></tr><tr><td>Labour Inspection Readiness</td><td>All digital registers maintained for 7 years</td><td>Registers often incomplete</td></tr><tr><td>Form 16 by June 15</td><td>Issued on time every year</td><td>Frequently late</td></tr>

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
            <h2 class="section-title">Related Services for Educational Institutions</h2>
            <div class="content-text">
                
                <p>Patron Accounting also provides these complementary services for educational institutions:</p><ul><li><a href="/accounting-services-for-education-industry">Education Sector Accounting</a> - Complete accounting services for schools, colleges, and educational trusts</li><li><a href="/gst-registration">GST Registration</a> - Advisory on GST exemptions for educational services and taxable commercial activities</li><li><a href="/income-tax-return">Income Tax Filing</a> - Section 10(23C) exemption filing, Form 10B audit, 80G and 12A registration</li><li><a href="/tds-return-filing-24q">TDS Return Filing</a> - Form 24Q quarterly for salary TDS; Form 26Q for guest faculty Section 194J</li><li><a href="/payroll-services">Payroll Services (All Sectors)</a> - Generic payroll services for businesses across all industries</li><li><a href="/section8-company-registration">Section 8 Company Registration</a> - For not-for-profit educational institution incorporation</li></ul>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 15A: LEGAL FRAMEWORK -->
<section class="content-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Legal and Regulatory Framework for Education Sector Payroll</h2>
            <div class="content-text">
                
                <div class="table-responsive-wrapper"><table><thead><tr><th>Act / Code</th><th>Key Provision</th><th>Education Sector Impact</th></tr></thead><tbody><tr><td><a href="https://www.epfindia.gov.in" target="_blank" rel="noopener">EPF and MP Act, 1952</a></td><td>20+ employees mandatory; 12% employee + 12% employer of Basic+DA; deposit by 15th; penalty: 12% interest + damages up to 25%</td><td>All schools/colleges with 20+ staff; monthly ECR filing</td></tr><tr><td><a href="https://www.esic.gov.in" target="_blank" rel="noopener">ESI Act, 1948</a></td><td>10+ employees; workers earning up to Rs 21,000/month; 0.75% employee + 3.25% employer; deposit by 15th</td><td>Non-teaching staff and lower-paid teachers; half-yearly returns</td></tr><tr><td><a href="https://www.incometax.gov.in" target="_blank" rel="noopener">Income Tax Act, 1961</a></td><td>Section 192: TDS on salary; Section 194J: 10% TDS on guest faculty above Rs 30,000/year; Form 24Q/26Q quarterly; Form 16 by June 15</td><td>All salaried staff and guest faculty payments</td></tr><tr><td>Payment of Wages Act, 1936 / Code on Wages 2019</td><td>Salary by 7th of following month (under 1,000 employees); basic wages at least 50% of CTC</td><td>All educational institutions; CTC restructuring required</td></tr><tr><td>Payment of Gratuity Act, 1972</td><td>15/26 x last drawn salary x years; after 5 years continuous service; fixed-term proportionate after 2018 amendment</td><td>All institutions with 10+ employees; provision in annual accounts</td></tr><tr><td>Payment of Bonus Act, 1965</td><td>Minimum 8.33% of annual wages for 20+ employees where wages up to Rs 21,000/month; payable within 8 months of year-end</td><td>Private schools and colleges qualifying under the Act</td></tr></tbody></table></div>

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
                    <h2 class="faq-expanded__title">Frequently Asked Questions - Education Sector Payroll</h2>
                    <p class="faq-expanded__lead">Get answers about PF for schools, guest faculty TDS, 8th Pay Commission impact, ESI applicability, statutory registers, HRA exemption, and bonus for education staff.</p>
                    @include('partials.bigin-form', [
                        'variant'  => 'compact',
                        'service'  => 'Education Sector Payroll',
                    ])
                </aside>
                <div class="faq-expanded__list">
                    <div class="faq-expanded__item" id="faq-1">
                        <h3 class="faq-expanded__q">Is PF mandatory for private schools and colleges in India?</h3>
                        <div class="faq-expanded__a"><p>Yes. Any educational institution - private school, college, coaching institute, or university - employing 20 or more persons is mandatorily covered under the Employees Provident Funds and Miscellaneous Provisions Act 1952 per Section 1(3)(a). Both employee (12% of Basic+DA) and employer (12% of Basic+DA, with 8.33% to EPS capped at Rs 15,000 basic + 3.67% to EPF) contributions are mandatory. Monthly ECR filing and contribution deposit by the 15th of each month are required. Private schools and colleges cannot exempt themselves merely because they are educational or charitable.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-2">
                        <h3 class="faq-expanded__q">How should guest faculty honorarium be treated for TDS purposes?</h3>
                        <div class="faq-expanded__a"><p>Guest faculty paid session-wise honorarium are typically not in an employer-employee relationship. Their payments are treated as professional fees and TDS is applicable under Section 194J of the Income Tax Act at 10%, when aggregate payment to a single guest faculty member exceeds Rs 30,000 per financial year. Institutions must track per-faculty cumulative payments, deduct TDS once the threshold is crossed, deposit by the 7th of following month, file Form 26Q quarterly, and issue Form 16A to each guest faculty member.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-3">
                        <h3 class="faq-expanded__q">What is the impact of the 8th Pay Commission on school and college payroll?</h3>
                        <div class="faq-expanded__a"><p>The 8th Central Pay Commission has been approved by Union Cabinet and is expected to implement revised pay scales effective January 1, 2026. Central government school employees (KVS, NVS, DSSSB) and UGC-affiliated college faculty will be directly impacted. Industry analysis projects a 25-34% salary hike with a fitment factor in the range of 2.28 to 3.0. Institutions must prepare for revised basic pay, DA merger if DA crosses 50% threshold, revised HRA, arrear computation, and TDS recalculation on arrear income.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-4">
                        <h3 class="faq-expanded__q">Does ESI apply to teachers earning above Rs 21,000 per month?</h3>
                        <div class="faq-expanded__a"><p>ESI is applicable only to employees whose gross wages are Rs 21,000 per month or below. Teachers earning above Rs 21,000 are exempt from ESI. However, if a teacher's salary falls below Rs 21,000 (new hire or part-time), ESI becomes mandatory. When salary crosses Rs 21,000 mid-year, ESI exemption takes effect from the next contribution period (April 1 or October 1).</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-5">
                        <h3 class="faq-expanded__q">What statutory registers must schools maintain under November 2025 Labour Code changes?</h3>
                        <div class="faq-expanded__a"><p>Under consolidated Labour Codes from November 2025, educational institutions must maintain digital registers: attendance register, wage register with all components and deductions, muster roll, EPF register (Form 3A and 6A), ESI register (Form 6), salary slips, and leave records. These must be maintained for minimum 7 years and available for inspection by labour authorities, EPF officers, or ESI inspectors at any time without advance notice.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-6">
                        <h3 class="faq-expanded__q">How is HRA exemption calculated for teachers?</h3>
                        <div class="faq-expanded__a"><p>HRA exemption under Section 10(13A) is the least of: (a) actual HRA received, (b) 50% of basic salary for metro cities or 40% for non-metro, and (c) actual rent paid minus 10% of basic salary. Teachers must submit rent receipts. For those opting for the new tax regime under Section 115BAC, HRA exemption is not available.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-7">
                        <h3 class="faq-expanded__q">Can a school or college pay salary in cash?</h3>
                        <div class="faq-expanded__a"><p>Under the Payment of Wages Act 1936, wages may be paid in cash, cheque, or bank transfer. However, the Code on Wages 2019 encourages or mandates bank transfer above certain thresholds. Cash payment without TDS deduction creates liability under Section 201. Best practice and increasingly a regulatory requirement is bank transfer with proper salary slips.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-8">
                        <h3 class="faq-expanded__q">What bonus is payable to school and college employees?</h3>
                        <div class="faq-expanded__a"><p>The Payment of Bonus Act 1965 applies to establishments with 20+ persons where employees draw wages up to Rs 21,000/month. Minimum bonus is 8.33% of annual wages payable within 8 months of year-end. Maximum bonus is 20% of annual wages. Many private schools and colleges qualify. Government schools may have different structures under state service rules.</p></div>
                    </div>
                </div>
            </div>


            <!-- Quick Answers -->
            <div class="highlight-box" style="margin-top:32px;">
                <p><strong>Quick Answers</strong></p>
                <p><strong>When must PF be deposited?</strong><br>By the 15th of each month for the previous month's contributions. ECR filed monthly on EPFO Unified Portal.</p><p><strong>What is Form 16A?</strong><br>TDS certificate issued to guest faculty paid under Section 194J. Must be issued within 15 days from due date of quarterly TDS return.</p><p><strong>School payroll kaise manage karein?</strong><br>School ka payroll manage karne ke liye PF, ESI, TDS sab statutory deductions sahi se calculate karna zaroori hai. Guest faculty ka TDS Section 194J ke under hota hai. Patron Accounting Rs 5,000/month se complete education payroll handle karta hai.</p>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 18: URGENCY CTA -->
<section class="content-section" style="background: var(--orange-lighter) !important; border-left: 4px solid var(--orange);">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">8th Pay Commission - Payroll Revision Readiness</h2>
            <div class="content-text">
                
                <p>The 8th Central Pay Commission has been approved by Union Cabinet with implementation expected from January 1, 2026. Impact on education payroll:</p><ul><li>Central government school employees (KVS, NVS, DSSSB) and UGC-affiliated faculty directly impacted</li><li>Projected 25-34% salary hike with fitment factor 2.28 to 3.0</li><li>Revised basic pay calculation with potential DA merger if DA crosses 50%</li><li>Arrear computation from January 2026 to actual implementation date</li><li>TDS recalculation on arrear income - must be processed correctly to avoid year-end shortfalls</li></ul><p style="margin-top:16px;"><strong>Prepare your payroll for 8th CPC now - <a href="tel:+919459456700">Call +91 945 945 6700</a> or <a href="https://wa.me/919459456700?text=Hello%2C%20I%20just%20visited%20your%20Education%20Payroll%20page.%20I%20would%20like%20to%20know%20more%20about%20it." target="_blank" rel="noopener">WhatsApp us</a> for a free compliance assessment.</strong></p>

            </div>
        </div>
    </div>
</section>

<!-- CONCLUSION + CTA BLOCK (Dark) -->
<section class="content-section" style="background: var(--blue) !important;">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title" style="color:#FFFFFF !important;">Start Your Education Payroll Compliance Today</h2>
            <div class="content-text" style="text-align:left;">
                
                <p style="color:rgba(255,255,255,0.9);font-size:16px;line-height:1.7;">Schools and colleges are trustees of public trust with fiduciary obligations, yet payroll compliance failures in education are surprisingly common: guest faculty TDS missed, PF registration delayed beyond the 20-employee threshold, ESI not tracked when staff cross the Rs 21,000 threshold, and Form 16 issued late.</p><p style="color:rgba(255,255,255,0.9);font-size:16px;line-height:1.7;">With the 8th Pay Commission expected January 2026, new digital record-keeping mandates under November 2025 Labour Codes, and tighter TDS enforcement, the compliance burden has never been higher. Patron Accounting's CA team brings sector-specific knowledge, regulatory currency, and disciplined execution.</p><p style="color:rgba(255,255,255,0.9);font-size:16px;line-height:1.7;"><strong>100+ educational institutions served | 5,000+ employees managed | 15+ years | Starting from Rs 5,000/month | 8th CPC Ready</strong></p>

            </div>
            <div style="display:flex;gap:14px;flex-wrap:wrap;margin-top:24px;">
                <a href="tel:+919459456700" style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:var(--orange);color:#fff;border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#128222; Call +91 945 945 6700</a>
                <a href="https://wa.me/919459456700?text=Hello%2C%20I%20just%20visited%20your%20Education%20Payroll%20page.%20I%20would%20like%20to%20know%20more%20about%20it." target="_blank" style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:#25D366;color:#fff;border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;" rel="noopener">&#128172; WhatsApp Us</a>
                <a href="mailto:sales@patronaccounting.com?subject=Enquiry%20for%20Education%20Payroll%20Services&body=Hello%2C%20I%20just%20visited%20your%20Education%20Payroll%20page.%20I%20would%20like%20to%20know%20more%20about%20it.%0A%0AThank%20you." style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:transparent;color:#fff;border:2px solid rgba(255,255,255,0.3);border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#9993;&#65039; Email Us</a>
            </div>
            <p style="color:rgba(255,255,255,0.7);font-size:13px;margin-top:16px;">Book a Free Consultation - No Obligation.</p>
        </div>
    </div>
</section>

<!-- GSTAT STATE BENCH CITY PAGES (32 Pages) -->
<section class="content-section" style="padding:48px 32px;background:var(--gray-50);">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title" style="text-align:center;margin-bottom:12px;">Education Payroll Services Across India</h2>
            <p style="text-align:center;color:var(--text-muted);font-size:15px;margin-bottom:40px;">Patron Accounting provides payroll for schools, colleges, and universities across major Indian cities.</p>
          
            <div class="pa-city-block" style="margin-bottom:40px;"><div class="pa-city-grid"><a href="/payroll-processing-services-for-education-industry/pune" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Pune</div><div class="pa-card-sub">Maharashtra</div></div></a><a href="/payroll-processing-services-for-education-industry/mumbai" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Mumbai</div><div class="pa-card-sub">Maharashtra</div></div></a><a href="/payroll-processing-services-for-education-industry/gurugram" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Gurugram</div><div class="pa-card-sub">Haryana</div></div></a></div></div><div class="pa-city-block"><div class="pa-block-title">Related Services</div><div class="pa-block-sub">End-to-end support for Education Payroll</div><div class="pa-cross-grid"><a href="/accounting-services-for-education-industry" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Education Accounting</div><div class="pa-card-sub">India</div></div></a><a href="/gst-registration" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">GST Registration</div><div class="pa-card-sub">India</div></div></a><a href="/income-tax-return" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Income Tax Return</div><div class="pa-card-sub">India</div></div></a><a href="/tds-return-filing-24q" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">TDS Return Filing</div><div class="pa-card-sub">India</div></div></a><a href="/payroll-services" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Payroll Services</div><div class="pa-card-sub">India</div></div></a><a href="/section8-company-registration" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Section 8 Registration</div><div class="pa-card-sub">India</div></div></a></div></div>
        </div>
    </div>
</section>

<!-- CONTENT FRESHNESS FOOTER -->
<section class="content-section" style="padding:32px;">
    <div class="content-container">
        <div class="text-content" style="font-size:13px;color:var(--text-muted);">
            <p><strong>Content Created:</strong> 01 January 2024 &nbsp;|&nbsp; <strong>Last Updated:</strong> <span id="lastUpdatedFooter">01 January 2024</span> &nbsp;|&nbsp; <strong>Next Review:</strong> June 2026 &nbsp;|&nbsp; <strong>Reviewed By:</strong> CA &amp; CS Team, Patron Accounting LLP</p>
            <p>This page is reviewed every 3 months. Freshness Tier: HIGH - 8th Pay Commission expected Jan 2026, November 2025 Labour Codes, Finance Act 2025 TDS changes. Next review: June 2026.</p>
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
