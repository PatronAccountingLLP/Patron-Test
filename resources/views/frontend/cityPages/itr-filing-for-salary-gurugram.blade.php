
@extends('layouts.service-app')

<!-- External Dependencies (loaded by master layout in production) -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Barlow:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,400&family=DM+Sans:opsz,wght@9..40,400;9..40,500;9..40,600;9..40,700&display=swap" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

@section('meta')
    <title>ITR for Salaried Gurugram - Form 16, ITR-1 & HRA</title>
    <meta name="description" content="CA-assisted salary ITR filing in Gurugram. New vs old regime, HRA, 80C, Form 16, ESOP taxation. Serving Cyber City, Golf Course Road professionals. Call +91 945 945 6700.">
    <link rel="canonical" href="/itr-filing-for-salary/gurugram">
    <meta name="robots" content="index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1">
    <meta property="og:title" content="ITR for Salaried Gurugram - Form 16, ITR-1 & HRA">
    <meta property="og:description" content="CA-assisted salary ITR filing in Gurugram. New vs old regime, HRA, 80C, Form 16, ESOP taxation. Serving Cyber City, Golf Course Road professionals. Call +91 945 945 6700.">
    <meta property="og:url" content="/itr-filing-for-salary/gurugram">
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="Patron Accounting">
    <meta property="og:image" content="https://www.patronaccounting.com/images/og-default-square.png">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="1200">
    <meta property="og:image:type" content="image/png">
    <meta property="og:image:secure_url" content="https://www.patronaccounting.com/images/og-default-square.png">
    <meta property="og:image:alt" content="Patron Accounting - partner you can rely on">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="ITR for Salaried Gurugram - Form 16, ITR-1 & HRA">
    <meta name="twitter:description" content="CA-assisted salary ITR filing in Gurugram. New vs old regime, HRA, 80C, Form 16, ESOP taxation. Serving Cyber City, Golf Course Road professionals. Call +91 945 945 6700.">
    <meta name="twitter:image" content="https://www.patronaccounting.com/images/og-default-square.png">
@endsection

@section('schema')
    <script type="application/ld+json">{
  "@context": "https://schema.org",
  "@graph": [
    {
      "@type": "Service",
      "name": "ITR for Salaried Employees in Gurugram",
      "description": "CA-assisted salary ITR filing in Gurugram. New vs old regime, HRA, 80C, Form 16, ESOP taxation. Serving Cyber City, Golf Course Road professionals. Call +91 945 945 6700.",
      "url": "https://www.patronaccounting.com/itr-filing-for-salary/gurugram",
      "serviceType": "ITR for Salaried Employees in Gurugram",
      "areaServed": {
        "@type": "City",
        "name": "Gurugram",
        "containedInPlace": {
          "@type": "State",
          "name": "Haryana"
        }
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
        "url": "https://www.patronaccounting.com/itr-filing-for-salary/gurugram",
        "priceSpecification": {
          "@type": "PriceSpecification",
          "minPrice": "50",
          "maxPrice": "75000",
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
          "name": "ITR Filing for Salary in India | Expert CA Support",
          "item": "https://www.patronaccounting.com/itr-filing-for-salary"
        },
        {
          "@type": "ListItem",
          "position": 3,
          "name": "ITR for Salaried Employees in Gurugram",
          "item": "https://www.patronaccounting.com/itr-filing-for-salary/gurugram"
        }
      ]
    },
    {
      "@type": "FAQPage",
      "mainEntity": [
        {
          "@type": "Question",
          "name": "Which ITR form for salaried employees?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "ITR-1 (Sahaj) for most salaried employees with income up to Rs 50 lakh and up to 2 house properties (new for AY 2026-27). ITR-2 if income exceeds Rs 50 lakh, or you have capital gains (ESOP/equity/MF/property), or you are an NRI. Patron Accounting identifies the correct form based on your complete income profile."
          }
        },
        {
          "@type": "Question",
          "name": "New regime or old regime for Gurugram employees?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "If combined deductions (80C + 80D + HRA + home loan interest) exceed approximately Rs 3.75-4 lakh, the old regime typically saves more. Gurugram employees paying Rs 30,000+ monthly rent with home loan interest often find the old regime better. For employees with minimal deductions, the new regime wins. Patron provides a personalised comparison."
          }
        },
        {
          "@type": "Question",
          "name": "What is the cost of salary ITR filing in Gurugram?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Professional fees start from Rs 499 for simple ITR-1 up to Rs 4,999 for ITR-2 with ESOP/RSU and capital gains. New vs old regime comparison and AIS reconciliation are included in every filing. Government filing fees are nil."
          }
        },
        {
          "@type": "Question",
          "name": "Is ITR mandatory if employer deducted full TDS?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Yes. ITR filing is mandatory if gross total income exceeds Rs 3 lakh (new regime). Even if TDS covers full tax, filing ITR is required to claim refund of excess TDS, carry forward losses, and maintain a clean financial record. Banks, visa consulates, and loan officers require ITR receipts."
          }
        },
        {
          "@type": "Question",
          "name": "How to claim HRA exemption in Gurugram?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "HRA exemption under Section 10(13A) is available only under the old regime. The exempt amount is the least of: actual HRA received, 50% of basic salary (for Gurugram/NCR as metro), or rent paid minus 10% of basic salary. Rent receipts and landlord PAN (if annual rent > Rs 1 lakh) are required."
          }
        },
        {
          "@type": "Question",
          "name": "What if I changed jobs during the year?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Collect Form 16 from each employer. Provide Form 12B to the new employer for correct TDS. When filing ITR, enter salary from each employer separately. The combined income may push you into a higher slab, creating a tax shortfall payable as self-assessment tax."
          }
        },
        {
          "@type": "Question",
          "name": "What is the standard deduction for 2026?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "For FY 2025-26 (AY 2026-27): Rs 75,000 under the new tax regime (increased from Rs 50,000 in Budget 2024) and Rs 50,000 under the old regime. Automatically applied to salary income without any proof or investment required. Available in both regimes."
          }
        },
        {
          "@type": "Question",
          "name": "How are ESOPs taxed for Gurugram IT employees?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "ESOP perquisite value (FMV on exercise date minus exercise price) is taxed as salary income at slab rates in the year of exercise. The employer includes this in Form 16. When shares are sold, capital gains arise: LTCG at 12.5% (listed shares held > 1 year). This requires ITR-2 with Schedule CG. Quick Answers Salary wale ka ITR kaunse form mein file hota hai? ITR-1 (Sahaj) agar income Rs 50 lakh tak hai aur capital gains nahi hai. ITR-2 agar capital gains, ESOP, ya Rs 50 lakh se zyada income hai. Naya ya purana regime better hai? Agar HRA + 80C + home loan milake Rs 4 lakh+ deductions hain toh purana (old) better hai. Kam deductions hain toh naya (new) better hai. ITR kab file karna hai? 31 July 2026 tak. Late filing par Rs 5,000 penalty aur interest lagta hai."
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
            padding: 20px 0; position: sticky; top:100px; z-index: 50;
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
                        ITR for Salaried Employees in Gurugram: New Regime, Old Regime, and Refund Filing
                    </h1>

                    <div class="expert-attribution-box">
                        <span class="eab-check"><svg width="16" height="16" viewBox="0 0 24 24" fill="currentColor"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg></span>
                        <span class="eab-title">Reviewed by CA and CS Team, Patron Accounting LLP</span>
                        <span class="eab-meta">
                            <span>ICAI & ICSI Registered</span><span class="eab-sep">|</span>
                            <span>15+ Years Experience</span><span class="eab-sep">|</span>
                            <span>Last Updated: <span id="lastUpdated">03 April 2026</span></span>
                        </span>
                        <a href="#" class="eab-link">Verify Credentials &rarr;</a>
                    </div>

                    <div class="mb-4">
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>ITR Form:</span> ITR-1 (income up to Rs 50 lakh, up to 2 house properties) | ITR-2 (higher income / capital gains / NRI)</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Standard Deduction:</span> Rs 75,000 (new regime) | Rs 50,000 (old regime)</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Due Date:</span> 31 July 2026 (AY 2026-27 for FY 2025-26)</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Regime Choice:</span> New Regime: Lower rates, limited deductions | Old Regime: Higher rates, full deductions (80C, HRA, home loan)</p>
                        </div>
                    </div>

                    <p class="mb-4 fw-bold" style="color: var(--blue); font-size: 15px;">Salary ITR filed for thousands of Gurugram professionals. Serving IT, BFSI, MNC, and corporate employees with personalised regime comparison.</p>

                    <div class="hero-cta">
                        <a href="tel:+919459456700" class="btn-video text-decoration-none">
                            <span class="play-circle"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="width:14px;height:14px;color:#fff"><path d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/></svg></span>
                            Call +91 945 945 6700
                        </a>
                        <a href="mailto:sales@patronaccounting.com" class="btn-sample text-decoration-none">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="width:18px;height:18px;"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,12 2,6"/></svg>
                            Email Us
                        </a>
                        <a href="https://wa.me/919459456700?text=Hello%2C%20I%20just%20visited%20your%20ITR%20Filing%20for%20Salary%20in%20Gurugram%20page.%20I%20would%20like%20to%20know%20more%20about%20it." target="_blank" class="btn-sample text-decoration-none" rel="noopener">
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
                                            'service'  => 'ITR for Salaried Employees in Gurugram',
                                            'city'     => 'Gurugram',
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
    'ctaText'    => 'Salary ITR filing with personalised regime comparison, HRA optimisation, and expert guidance from Gurugram.',
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
            <a href="#overview-section" class="toc-btn active">Overview</a><a href="#what-section" class="toc-btn">New vs Old</a><a href="#who-section" class="toc-btn">ITR Form</a><a href="#services-section" class="toc-btn">Services</a><a href="#procedure-section" class="toc-btn">Process</a><a href="#documents-section" class="toc-btn">Documents</a><a href="#challenges-section" class="toc-btn">Challenges</a><a href="#fees-section" class="toc-btn">Fees</a><a href="#timeline-section" class="toc-btn">Timeline</a><a href="#benefits-section" class="toc-btn">Why Patron</a><a href="#comparison-section" class="toc-btn">Comparison</a><a href="#faq-section" class="toc-btn">FAQs</a>
        </div>
        <button class="toc-arrow right" id="tocRight">&#10095;</button>
    </div>
</div>

<!-- SECTION 2: OVERVIEW / INTRO + TL;DR -->
<section class="content-section" id="overview-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Salary ITR Filing in Gurugram: Form 16, Tax Regime Choice, and Deductions</h2>
            <div class="content-text">
                <div class="highlight-box" style="margin-bottom:20px;">
                    <p><strong>&#128204; TL;DR - ITR for Salaried Employees in Gurugram Services at a Glance</strong></p>
                    <p>Every salaried employee in Gurugram whose income exceeds the basic exemption limit (Rs 3 lakh under new regime) must file an ITR by 31 July 2026 for FY 2025-26. The new tax regime is the default with lower slab rates and Rs 75,000 standard deduction, but limited deductions. The old regime allows full deductions under Section 80C (Rs 1.5 lakh), 80D (health insurance), HRA exemption (critical for Gurugram's high-rent market), and home loan interest (Rs 2 lakh under Section 24(b)). Salaried employees with income up to Rs 50 lakh and up to 2 house properties can use the simplified ITR-1. Form 16 from the employer contains all details needed for filing.</p>
                </div>
                <p>Gurugram employs over 2 million salaried professionals across DLF Cyber City IT/BPO companies, Golf Course Road MNC headquarters, DLF Cyber Hub BFSI offices, IMT Manesar manufacturing plants, and the NH-48 corporate corridor. Gurugram's high rental market (Rs 25,000-1,00,000+ per month for 2-3 BHK apartments) makes HRA exemption particularly valuable under the old regime. For a comprehensive overview, refer to our <a href="/itr-for-salary">ITR for Salaried Employees</a> national guide.</p>
                <div class="table-responsive-wrapper"><table><thead><tr><th>Parameter</th><th>Detail</th></tr></thead><tbody>
                        <tr><td>ITR Form</td><td>ITR-1 (income up to Rs 50L, up to 2 house properties) | ITR-2 (higher income, capital gains, NRI)</td></tr>
                        <tr><td>Default Regime</td><td>New tax regime (Section 115BAC) - lower rates, limited deductions</td></tr>
                        <tr><td>Standard Deduction</td><td>Rs 75,000 (new regime) | Rs 50,000 (old regime)</td></tr>
                        <tr><td>Key Old Regime Deductions</td><td>80C: Rs 1.5L | 80D: Rs 25K-1L | HRA: As per formula | 24(b): Rs 2L home loan interest</td></tr>
                        <tr><td>Section 87A Rebate</td><td>Up to Rs 25,000 (new, income up to Rs 7L) | Up to Rs 12,500 (old, income up to Rs 5L)</td></tr>
                        <tr><td>Due Date</td><td>31 July 2026 (AY 2026-27)</td></tr>
                    </tbody></table></div><p</p>
                <p>Haryana does not levy Professional Tax, meaning salary TDS (via Form 16 from employer) is the sole withholding mechanism for Gurugram employees. This simplifies the tax profile and gives Gurugram employees higher effective take-home pay compared to peers in Mumbai, Bengaluru, or Chennai where PT applies. With the Income Tax Department pre-filling ITR data from Form 16, AIS, and 26AS, filing has become significantly faster - but the regime choice and deduction optimisation still require professional analysis.</p>
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
                <h2 class="section-title">New Tax Regime vs Old Tax Regime for Gurugram Employees</h2>
                <div class="content-text what-is-definition">
                    
                    <p><strong>New Tax Regime (Section 115BAC) - Default:</strong> Lower slab rates (nil up to Rs 3L, 5% Rs 3-7L, 10% Rs 7-10L, 15% Rs 10-12L, 20% Rs 12-15L, 30% above Rs 15L). Standard deduction Rs 75,000. Section 87A rebate Rs 25,000 (income up to Rs 7 lakh = zero tax). Most Chapter VI-A deductions and HRA exemption NOT available. Learn more about <a href="/income-tax-return">Income Tax Return filing</a>.</p>
                    <p><strong>Old Tax Regime (opt-out required):</strong> Higher rates (nil up to Rs 2.5L, 5% Rs 2.5-5L, 20% Rs 5-10L, 30% above Rs 10L). Standard deduction Rs 50,000. Full deductions: 80C (Rs 1.5 lakh), 80D (health insurance), 80CCD(1B) (NPS Rs 50K), HRA exemption (Section 10(13A)), home loan interest (Rs 2 lakh under 24(b)), LTA, and more. You may also need <a href="/tax-planning-services">Tax Planning Services</a> for comprehensive optimisation.</p>
                    <p><strong>Gurugram regime decision:</strong> For IT professionals in Cyber City earning Rs 12-25 LPA who claim Rs 1.5 lakh in 80C, Rs 25,000 in 80D, Rs 1.5-3 lakh in HRA (typical rent Rs 30,000-60,000/month), and Rs 2 lakh in home loan interest - the old regime often saves Rs 20,000-80,000. For employees with fewer deductions, the new regime wins. Patron provides a personalised comparison for every Gurugram client.</p>

                </div>
                <div class="highlight-box" style="margin-top:20px;">
                    <p><strong>Key Terms for ITR for Salaried Employees in Gurugram:</strong></p>
                    <p><strong>Section 115BAC:</strong> New tax regime with lower slab rates - default from AY 2024-25. Limited deductions available.</p>
                    <p><strong>Section 80C:</strong> Rs 1.5 lakh deduction for PPF, ELSS, EPF, LIC, tuition fees - available only under old regime.</p>
                    <p><strong>Section 10(13A):</strong> HRA exemption based on actual rent paid, HRA received, and salary - old regime only.</p>
                    <p><strong>Section 24(b):</strong> Home loan interest deduction up to Rs 2 lakh for self-occupied property - old regime only.</p>
                    <p><strong>Form 16:</strong> TDS certificate from employer with salary breakup and tax details. Replaced by Form 130 from April 2026.</p>

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
                            <text x="100" y="170" font-size="10" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial, sans-serif">ITR for Salaried Employees in Gurugram</text>
                        </svg>
                    </div>
                    <div class="illustration-badge">
                        <span>Salary Tax</span>
                        <strong>Gurugram Filing</strong>
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
            <h2 class="section-title">Which ITR Form for Gurugram Salaried Employees?</h2>
            <div class="content-text">
                
                <div class="table-responsive-wrapper"><table><thead><tr><th>Condition</th><th>ITR Form</th><th>Gurugram Context</th></tr></thead><tbody>
                        <tr><td>Salary + interest + up to 2 house properties, income <= Rs 50L</td><td>ITR-1 (Sahaj)</td><td>Most salaried employees</td></tr>
                        <tr><td>Salary + capital gains (equity, MF, property)</td><td>ITR-2</td><td>IT professionals with ESOP/RSU/equity gains</td></tr>
                        <tr><td>Salary > Rs 50 lakh</td><td>ITR-2</td><td>Senior MNC executives on Golf Course Road</td></tr>
                        <tr><td>Salary + ESOP/RSU perquisite + capital gains</td><td>ITR-2</td><td>Cyber City tech employees with stock options</td></tr>
                        <tr><td>Salary + freelance/business income</td><td>ITR-3</td><td>IT employees with side consulting</td></tr>
                    </tbody></table></div>
                <p><strong>AY 2026-27 ITR-1 expansion:</strong> For the first time, salaried employees can report income from up to 2 house properties in ITR-1 (previously limited to 1). This is a major simplification for Gurugram employees who own a flat in the city and have a second property.</p>

            </div>
            </div>
        </div>
    </div>
</section>

<!-- SECTION 5: OUR SERVICES -->
<section class="content-section" id="services-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Salary ITR Filing Services in Gurugram</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Service</th><th>What We Do</th></tr></thead>
                    <tbody>
                        <tr><td>ITR-1 / ITR-2 Filing</td><td>Complete salary ITR preparation with Form 16 validation, AIS reconciliation, regime comparison, and deduction optimisation</td></tr>
                        <tr><td>New vs Old Regime Comparison</td><td>Personalised tax computation under both regimes using actual CTC, HRA, home loan, investments, and insurance</td></tr>
                        <tr><td>HRA Exemption Computation</td><td>Optimal HRA exemption for Gurugram employees based on actual rent, HRA received, and metro city formula (50% of basic)</td></tr>
                        <tr><td>ESOP / RSU Taxation</td><td>Perquisite value computation, RSU vesting taxation, Schedule Salary and Schedule CG reporting in ITR-2</td></tr>
                        <tr><td>Multiple Employer Form 16 Consolidation</td><td>Consolidating salary and TDS from 2-3 Form 16 certificates for job changers with correct slab application</td></tr>
                        <tr><td>Refund Claim Filing</td><td>Filing ITR with deductions to claim excess TDS refund - common when investments not declared to employer</td></tr>
                        <tr><td>Home Loan Interest Deduction</td><td>Section 24(b) computation for self-occupied and let-out property including pre-construction interest</td></tr>
                        <tr><td>AIS/26AS Reconciliation</td><td>Matching salary TDS, bank interest, dividend, and MF data from AIS against ITR to prevent mismatch notices</td></tr>

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
            <h2 class="section-title">Salary ITR Filing Process in Gurugram</h2>
            <p class="section-subtitle" style="text-align:left;max-width:100%;">Our CA team follows a structured 6-step process for accurate salary ITR filing including personalised regime comparison, HRA optimisation, and AIS reconciliation.</p>
        </header>
        <div class="steps-container">
            <div class="step-card"><div class="step-content"><span class="step-badge">Step 1</span><h3 class="step-title">Collect Form 16 and Documents</h3><p class="step-description">Obtain Form 16 from each employer (by 15 June 2026). Download Form 26AS and AIS from incometax.gov.in. Collect bank interest certificates, home loan certificate, investment proofs (80C, 80D), rent receipts for HRA, and other income documentation.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Form 16 collected</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>AIS downloaded</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="15" y="5" width="90" height="70" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><line x1="30" y1="25" x2="90" y2="25" stroke="#F5A623" stroke-width="3" stroke-linecap="round"/><line x1="30" y1="40" x2="80" y2="40" stroke="#14365F" stroke-width="2" stroke-linecap="round" opacity="0.3"/><line x1="30" y1="52" x2="70" y2="52" stroke="#14365F" stroke-width="2" stroke-linecap="round" opacity="0.3"/></svg></div><span class="illustration-label">Documents Ready</span><span class="step-number-large">01</span></div></div></div>
            <div class="step-card"><div class="step-content"><span class="step-badge">Step 2</span><h3 class="step-title">Decide Tax Regime (New vs Old)</h3><p class="step-description">Calculate tax under both regimes. If combined deductions (80C + 80D + HRA + home loan) exceed Rs 3.75-4 lakh, old regime typically saves more. Salaried employees can switch regimes every year without Form 10-IEA.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Both regimes computed</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Best regime selected</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><circle cx="40" cy="40" r="20" fill="#FFF3E0" stroke="#E8712C" stroke-width="1.5"/><circle cx="80" cy="40" r="20" fill="#E8F5E9" stroke="#25D366" stroke-width="1.5"/><text x="40" y="44" font-size="7" fill="#E8712C" font-weight="700" text-anchor="middle" font-family="Arial">NEW</text><text x="80" y="44" font-size="7" fill="#25D366" font-weight="700" text-anchor="middle" font-family="Arial">OLD</text></svg></div><span class="illustration-label">Regime Compared</span><span class="step-number-large">02</span></div></div></div>
            <div class="step-card"><div class="step-content"><span class="step-badge">Step 3</span><h3 class="step-title">Verify Pre-Filled Portal Data</h3><p class="step-description">Portal pre-fills salary, TDS, bank interest, and dividends from Form 16, 26AS, and AIS. Verify each figure against actual records. Common Gurugram mismatches: FD interest from multiple banks, dividend from direct equity.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Pre-fill verified</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Mismatches fixed</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="10" y="15" width="45" height="50" rx="5" fill="#F0F4F8" stroke="#14365F" stroke-width="1.2"/><rect x="65" y="15" width="45" height="50" rx="5" fill="#F0F4F8" stroke="#14365F" stroke-width="1.2"/><circle cx="60" cy="40" r="8" fill="none" stroke="#25D366" stroke-width="1.5"/><path d="M57 40l2 2 4-4" stroke="#25D366" stroke-width="1.5" stroke-linecap="round"/></svg></div><span class="illustration-label">Data Verified</span><span class="step-number-large">03</span></div></div></div>
            <div class="step-card"><div class="step-content"><span class="step-badge">Step 4</span><h3 class="step-title">Complete Income and Deductions</h3><p class="step-description">Enter salary breakup per Form 16 Part B. Claim HRA exemption (old regime) with rent receipts. Enter home loan interest (24(b)). Add bank interest and other income. Claim Chapter VI-A deductions: 80C, 80D, 80CCD(1B), 80E, 80G.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Deductions claimed</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>HRA computed</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="20" y="15" width="80" height="50" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><text x="60" y="35" font-size="14" fill="#E8712C" font-weight="800" text-anchor="middle" font-family="Arial">&#8377;</text><line x1="35" y1="48" x2="85" y2="48" stroke="#14365F" stroke-width="1" opacity="0.3"/></svg></div><span class="illustration-label">Deductions Ready</span><span class="step-number-large">04</span></div></div></div>
            <div class="step-card"><div class="step-content"><span class="step-badge">Step 5</span><h3 class="step-title">Compute Tax and Check Refund</h3><p class="step-description">Portal auto-computes total income, tax, surcharge, and cess. Deducts TDS from Form 16 and advance tax. If TDS exceeds tax payable, a refund is generated. If tax is due, pay self-assessment tax before filing.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Tax computed</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Refund noted</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="15" y="10" width="90" height="65" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><rect x="25" y="20" width="70" height="8" rx="2" fill="#E8712C" opacity="0.3"/><rect x="25" y="33" width="50" height="6" rx="2" fill="#14365F" opacity="0.15"/></svg></div><span class="illustration-label">Tax Computed</span><span class="step-number-large">05</span></div></div></div>
            <div class="step-card"><div class="step-content"><span class="step-badge">Step 6</span><h3 class="step-title">Submit and E-Verify</h3><p class="step-description">File ITR on incometax.gov.in. E-verify immediately using Aadhaar OTP, net banking, or bank account validation. Unverified returns are treated as not filed. Track processing - CPC typically processes salary ITRs within 30-60 days.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>ITR filed</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>E-verified</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="20" y="10" width="80" height="60" rx="8" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><circle cx="60" cy="40" r="18" fill="#E8F5E9" stroke="#25D366" stroke-width="2"/><path d="M52 40l5 5 12-12" stroke="#25D366" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/></svg></div><span class="illustration-label">Filing Complete</span><span class="step-number-large">06</span></div></div></div>

        </div>
    </div>
</section>

<!-- SECTION 8: DOCUMENTS REQUIRED -->
<section class="content-section" id="documents-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Documents Required for Salary ITR Filing in Gurugram</h2>
            <div class="content-text">
                
                <ul><li><strong>Form 16 (Part A + Part B)</strong> - From each employer during the year. Most critical document.</li><li><strong>Form 26AS / AIS</strong> - Downloaded from incometax.gov.in for TDS and income verification.</li><li><strong>Rent Receipts + Lease Agreement</strong> - For HRA exemption under old regime. Landlord PAN required if annual rent > Rs 1 lakh.</li><li><strong>Home Loan Interest Certificate</strong> - From bank/NBFC showing principal and interest breakup.</li><li><strong>Investment Proofs (80C)</strong> - PPF passbook, ELSS statements, LIC premium receipts, tuition fee receipts.</li><li><strong>Health Insurance Premium (80D)</strong> - Premium payment receipts for self, spouse, children, and parents.</li><li><strong>Bank Statements / Interest Certificates</strong> - For savings account and FD interest.</li><li><strong>Capital Gains Statements</strong> - Broker statements for equity/MF capital gains (if filing ITR-2).</li><li><strong>ESOP/RSU Exercise Statements</strong> - From employer/broker for perquisite computation (if applicable).</li></ul>
                <div class="highlight-box" style="margin-top:20px;"><p><strong>Gurugram-specific tip:</strong> IT professionals in DLF Cyber City who change jobs frequently should provide Form 12B (income details from previous employer) to the new employer for correct TDS computation. If not provided, the new employer computes TDS only on their portion, leading to under-deduction and a tax shortfall at ITR filing time.</p></div>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 9: CHALLENGES -->
<section class="content-section" id="challenges-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Common Salary ITR Filing Challenges in Gurugram</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Challenge</th><th>Impact</th><th>How Patron Accounting Solves It</th></tr></thead>
                    <tbody>
                        <tr><td>HRA Exemption for High Gurugram Rents</td><td>Landlord PAN reluctance, 50% basic formula for metro</td><td>HRA optimisation with metro formula, landlord PAN advisory, rent receipt documentation</td></tr>
                        <tr><td>Multiple Form 16 Job Changer</td><td>Combined income pushes to higher slab, TDS shortfall</td><td>Correct consolidation of 2-3 Form 16s with slab recomputation and self-assessment tax</td></tr>
                        <tr><td>ESOP/RSU Perquisite Taxation</td><td>Perquisite not reported in ITR triggers AIS mismatch</td><td>Full ESOP perquisite + subsequent capital gains computation in ITR-2 with Schedule CG</td></tr>
                        <tr><td>AIS Mismatches</td><td>Bank interest, dividends from forgotten accounts/investments</td><td>Complete AIS reconciliation matching every entry against ITR before filing</td></tr>
                        <tr><td>New Regime Default Confusion</td><td>Not opting out loses all deductions permanently for that year</td><td>Proactive regime comparison before filing with explicit opt-out selection when old regime is better</td></tr>

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
            <h2 class="section-title">Salary ITR Filing Fees in Gurugram</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Fee Component</th><th>Amount</th></tr></thead>
                    <tbody>
                        <tr><td>ITR-1 (simple salary)</td><td>Starting from INR 499-999 (Exl GST and Govt. Charges)</td></tr>
                        <tr><td>ITR-1 with HRA + Home Loan + 80C</td><td>Starting from INR 999-1,499 (Exl GST and Govt. Charges)</td></tr>
                        <tr><td>ITR-2 (salary + capital gains)</td><td>Starting from INR 1,499-2,999 (Exl GST and Govt. Charges)</td></tr>
                        <tr><td>ITR-2 (salary + ESOP/RSU)</td><td>Starting from INR 2,999-4,999 (Exl GST and Govt. Charges)</td></tr>
                        <tr><td>Patron Accounting Professional Fees</td><td>Starting from INR 999 (Exl GST and Govt. Charges)</td></tr>
                        <tr><td>New vs Old Regime Comparison</td><td>Included with every ITR</td></tr>
                        <tr><td>Government Filing Fees</td><td>Nil</td></tr>

                    </tbody>
                </table>
                </div>
                <p style="margin-top:16px;font-size:13px;color:var(--text-muted);font-style:italic;">All fees and charges listed are indicative only and do not constitute a binding offer. Final amounts may vary depending on the volume of work and the complexity involved.</p>
                <p style="margin-top:16px;">Professional service charges for drafting, filing, and representation are separate from the statutory fees. The exact fee depends on the complexity of the case, disputed amount, and number of hearings required. Contact us for a detailed quote.</p>
                <p style="margin-top:16px;"><strong>Get a free ITR for Salaried Employees in Gurugram consultation - <a href="tel:+919459456700">Call +91 945 945 6700</a> or <a href="https://wa.me/919459456700?text=Hello%2C%20I%20just%20visited%20your%20ITR%20Filing%20for%20Salary%20in%20Gurugram%20page.%20I%20would%20like%20to%20know%20more%20about%20it." target="_blank" rel="noopener">WhatsApp us</a>. No-obligation assessment.</strong></p>
            </div>
        </div>
    </div>
</section>

<!-- SECTION 11: TIMELINE -->
<section class="content-section" id="timeline-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Salary ITR Filing Timeline - AY 2026-27</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Stage</th><th>Estimated Timeline</th></tr></thead>
                    <tbody>
                        <tr><td>Form 16 from Employer</td><td>15 June 2026 - collect from each employer</td></tr>
                        <tr><td>ITR-1/ITR-2 Filing</td><td>31 July 2026 - no extension expected for salaried</td></tr>
                        <tr><td>Section 87A Rebate Cutoff</td><td>Income up to Rs 7L (new) / Rs 5L (old) - zero tax with rebate</td></tr>
                        <tr><td>Belated Return</td><td>31 December 2026 - Rs 5,000 late fee, loses loss carry-forward</td></tr>
                        <tr><td>Revised Return</td><td>31 December 2026 - if error in original return</td></tr>
                        <tr><td>E-Verification</td><td>30 days from filing - mandatory, unverified = not filed</td></tr>
                        <tr><td>Refund Processing</td><td>30-60 days from filing - CPC Bengaluru</td></tr>

                    </tbody>
                </table>
                </div>
                <div class="highlight-box" style="margin-top:16px;">
                    
                    <p><strong>Critical:</strong> Regime choice must be made before filing. The default is new regime - not opting out loses all Chapter VI-A deductions and HRA exemption permanently for that year. AIS captures salary, interest, dividends, and capital gains - mismatches trigger notices. File early for faster refund processing.</p>

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
            <h2 class="section-title">Why Choose Patron Accounting for Salary ITR in Gurugram?</h2>
        </div>
        <div class="features-grid">
            <article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><h3 class="feature-title">Gurugram Office</h3><p class="feature-text">Golf Course Extension Road - at the centre of Gurugram's salaried workforce. Walk-in service for Cyber City, Golf Course Road, and NH-48 corridor employees.</p></article>
            <article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"/></svg></div><h3 class="feature-title">Regime Optimisation</h3><p class="feature-text">Every salary ITR includes personalised new vs old regime comparison based on actual CTC, HRA, home loan, and investments. We recommend the tax-saving regime.</p></article>
            <article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg></div><h3 class="feature-title">ESOP/RSU Expertise</h3><p class="feature-text">Perquisite computation for stock options from US-listed (Google, Microsoft) and Indian (Flipkart, Razorpay) companies, including FMV and capital gains on sale.</p></article>
            <article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><path d="M12 6v6l4 2"/></svg></div><h3 class="feature-title">2-Day Turnaround</h3><p class="feature-text">Simple salary ITR-1 filed within 2 working days. Complex ITR-2 with capital gains within 5 working days. Refund-eligible returns prioritised for early filing.</p></article>
            <article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M14 2H6a2 2 0 00-2 2v16a2 2 0 002 2h12a2 2 0 002-2V8z"/><path d="M14 2v6h6M16 13H8M16 17H8"/></svg></div><h3 class="feature-title">HRA Optimisation</h3><p class="feature-text">Metro formula computation for Gurugram's high-rent market. Landlord PAN advisory and rent receipt documentation for claims of Rs 2-4 lakh.</p></article>
            <article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M17 21v-2a4 4 0 00-4-4H5a4 4 0 00-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M23 21v-2a4 4 0 00-3-3.87M16 3.13a4 4 0 010 7.75"/></svg></div><h3 class="feature-title">Multi-Employer Filing</h3><p class="feature-text">Correct consolidation of 2-3 Form 16 certificates with slab recomputation for Gurugram's high-attrition IT workforce.</p></article>
        </div>
    </div>
</section>

<!-- SECTION 12A: SOCIAL PROOF -->
<section class="content-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Trusted by 10,000+ Businesses Across India</h2>
            <div class="content-text">
                
                <p><strong>Trust Banner:</strong> 10,000+ Businesses Served | 4.9 Google Rating | 50,000+ Documents Filed | 15+ Years of Practice</p>
                <blockquote style="border-left:3px solid var(--orange);padding:16px 20px;margin:20px 0;background:var(--orange-lighter);border-radius:0 var(--radius-sm) var(--radius-sm) 0;"><p style="font-style:italic;margin-bottom:8px;">"Changed jobs twice. Had 3 Form 16s. Patron consolidated everything, did the regime comparison, and filed ITR-2 with ESOP capital gains. Got Rs 45,000 refund in 28 days."</p><p style="font-weight:700;font-size:14px;margin:0;">- IT Professional, DLF Cyber City</p></blockquote>
                <blockquote style="border-left:3px solid var(--orange);padding:16px 20px;margin:20px 0;background:var(--orange-lighter);border-radius:0 var(--radius-sm) var(--radius-sm) 0;"><p style="font-style:italic;margin-bottom:8px;">"Patron showed me the old regime saves Rs 62,000 more because of my HRA (Rs 35,000/month rent) and home loan interest. I had almost filed under the default new regime and lost all my deductions."</p><p style="font-weight:700;font-size:14px;margin:0;">- Finance Professional, Golf Course Road</p></blockquote>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 13: SELF-FILING vs PROFESSIONAL COMPARISON -->
<section class="content-section" id="comparison-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Patron vs Free Tools / Local CA for Salary ITR in Gurugram</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Factor</th><th>Patron Accounting</th><th>Free Tools / Local CA</th></tr></thead>
                    <tbody>
                        <tr><td>Regime Comparison</td><td>Personalised CTC-based analysis with recommendation</td><td>Generic calculator, no personalisation</td></tr>
                        <tr><td>ESOP/RSU</td><td>Full perquisite + capital gains computation</td><td>Cannot handle stock options</td></tr>
                        <tr><td>Multiple Form 16</td><td>Consolidation with correct slab application</td><td>Manual, error-prone</td></tr>
                        <tr><td>HRA Optimisation</td><td>Metro formula with landlord PAN advisory</td><td>Basic calculation</td></tr>
                        <tr><td>Pricing</td><td>From Rs 499 (simple) to Rs 4,999 (ESOP)</td><td>Free (limited) or variable</td></tr>
                        <tr><td>Refund Speed</td><td>Early filing for faster processing</td><td>Last-day filing, delayed refund</td></tr>

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
            <h2 class="section-title">Related Services for Salary ITR Filing</h2>
            <div class="content-text">
                
                <ul><li><a href="/itr-for-salary">ITR for Salaried Employees (National)</a> - Broader overview across India</li><li><a href="/income-tax-return">Income Tax Return (ITR) Filing</a> - Comprehensive ITR for all income types</li><li><a href="/itr-for-capital-gains">ITR for Capital Gains</a> - For ESOP/equity/MF capital gains</li><li><a href="/tax-planning-services">Tax Planning Services</a> - Strategic tax optimisation</li><li><a href="/itr-for-property-sale">ITR for Property Sale</a> - Property capital gains</li></ul>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 15A: LEGAL FRAMEWORK -->
<section class="content-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Legal and Compliance Framework</h2>
            <div class="content-text">
                
                <p><strong>Governing Law:</strong> Income Tax Act, 1961 (FY 2025-26) | Income Tax Act, 2025 (from FY 2026-27)</p>
                <p><strong>Key Sections:</strong> 192 (TDS on salary) | 115BAC (new tax regime) | 10(13A) (HRA exemption) | 80C/80D/80CCD (deductions) | 24(b) (home loan interest) | 87A (rebate) | 234F (late filing fee)</p>
                <p><strong>ITR Forms:</strong> ITR-1 (Sahaj) | ITR-2 (for capital gains, NRI, income > Rs 50L)</p>
                <p><strong>Form 16:</strong> Part A (employer TDS) + Part B (salary breakup, deductions) | From April 2026: Form 130 (3 parts)</p>
                <p><strong>Portal:</strong> <a href="https://incometax.gov.in" target="_blank" rel="noopener">incometax.gov.in</a></p>
                <p><strong>Penalties:</strong></p>
                <p><strong>Late filing (Section 234F):</strong> Rs 5,000 (Rs 1,000 if income < Rs 5 lakh). Cannot revise after belated due date.</p>
                <p><strong>Wrong regime selection:</strong> Cannot switch from new to old after due date. All deductions lost permanently for that year.</p>
                <p><strong>Haryana State Context:</strong> Haryana does not levy Professional Tax. Gurugram salaried employees have higher effective take-home pay than peers in Mumbai (Rs 2,500/year PT), Bengaluru (Rs 2,400/year PT), or Chennai (varies).</p>

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
                    <h2 class="faq-expanded__title">FAQs - ITR for Salaried Employees in Gurugram</h2>
                    <p class="faq-expanded__lead">Common questions about salary ITR filing, regime choice, HRA exemption, and ESOP taxation for Gurugram professionals.</p>
                    @include('partials.bigin-form', [
                        'variant'  => 'compact',
                        'service'  => 'ITR for Salaried Employees in Gurugram',
                        'city'     => 'Gurugram',
                    ])
                </aside>
                <div class="faq-expanded__list">
                    <div class="faq-expanded__item" id="faq-1">
                        <h3 class="faq-expanded__q">Which ITR form for salaried employees?</h3>
                        <div class="faq-expanded__a"><p>ITR-1 (Sahaj) for most salaried employees with income up to Rs 50 lakh and up to 2 house properties (new for AY 2026-27). ITR-2 if income exceeds Rs 50 lakh, or you have capital gains (ESOP/equity/MF/property), or you are an NRI. Patron Accounting identifies the correct form based on your complete income profile.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-2">
                        <h3 class="faq-expanded__q">New regime or old regime for Gurugram employees?</h3>
                        <div class="faq-expanded__a"><p>If combined deductions (80C + 80D + HRA + home loan interest) exceed approximately Rs 3.75-4 lakh, the old regime typically saves more. Gurugram employees paying Rs 30,000+ monthly rent with home loan interest often find the old regime better. For employees with minimal deductions, the new regime wins. Patron provides a personalised comparison.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-3">
                        <h3 class="faq-expanded__q">What is the cost of salary ITR filing in Gurugram?</h3>
                        <div class="faq-expanded__a"><p>Professional fees start from Rs 499 for simple ITR-1 up to Rs 4,999 for ITR-2 with ESOP/RSU and capital gains. New vs old regime comparison and AIS reconciliation are included in every filing. Government filing fees are nil.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-4">
                        <h3 class="faq-expanded__q">Is ITR mandatory if employer deducted full TDS?</h3>
                        <div class="faq-expanded__a"><p>Yes. ITR filing is mandatory if gross total income exceeds Rs 3 lakh (new regime). Even if TDS covers full tax, filing ITR is required to claim refund of excess TDS, carry forward losses, and maintain a clean financial record. Banks, visa consulates, and loan officers require ITR receipts.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-5">
                        <h3 class="faq-expanded__q">How to claim HRA exemption in Gurugram?</h3>
                        <div class="faq-expanded__a"><p>HRA exemption under Section 10(13A) is available only under the old regime. The exempt amount is the least of: actual HRA received, 50% of basic salary (for Gurugram/NCR as metro), or rent paid minus 10% of basic salary. Rent receipts and landlord PAN (if annual rent > Rs 1 lakh) are required.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-6">
                        <h3 class="faq-expanded__q">What if I changed jobs during the year?</h3>
                        <div class="faq-expanded__a"><p>Collect Form 16 from each employer. Provide Form 12B to the new employer for correct TDS. When filing ITR, enter salary from each employer separately. The combined income may push you into a higher slab, creating a tax shortfall payable as self-assessment tax.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-7">
                        <h3 class="faq-expanded__q">What is the standard deduction for 2026?</h3>
                        <div class="faq-expanded__a"><p>For FY 2025-26 (AY 2026-27): Rs 75,000 under the new tax regime (increased from Rs 50,000 in Budget 2024) and Rs 50,000 under the old regime. Automatically applied to salary income without any proof or investment required. Available in both regimes.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-8">
                        <h3 class="faq-expanded__q">How are ESOPs taxed for Gurugram IT employees?</h3>
                        <div class="faq-expanded__a"><p>ESOP perquisite value (FMV on exercise date minus exercise price) is taxed as salary income at slab rates in the year of exercise. The employer includes this in Form 16. When shares are sold, capital gains arise: LTCG at 12.5% (listed shares held > 1 year). This requires ITR-2 with Schedule CG.</p></div>
                    </div>
                </div>
            </div>


            <!-- Quick Answers -->
            <div class="highlight-box" style="margin-top:32px;">
                <p><strong>Quick Answers</strong></p>
                <p><strong>Salary wale ka ITR kaunse form mein file hota hai?</strong> ITR-1 (Sahaj) agar income Rs 50 lakh tak hai aur capital gains nahi hai. ITR-2 agar capital gains, ESOP, ya Rs 50 lakh se zyada income hai.</p>
                <p><strong>Naya ya purana regime better hai?</strong> Agar HRA + 80C + home loan milake Rs 4 lakh+ deductions hain toh purana (old) better hai. Kam deductions hain toh naya (new) better hai.</p>
                <p><strong>ITR kab file karna hai?</strong> 31 July 2026 tak. Late filing par Rs 5,000 penalty aur interest lagta hai.</p>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 18: URGENCY CTA -->
<section class="content-section" style="background: var(--orange-lighter) !important; border-left: 4px solid var(--orange);">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">File Salary ITR Before 31 July 2026 - Regime Choice Is Critical</h2>
            <div class="content-text">
                
                <p>The ITR filing deadline is 31 July 2026. Regime choice must be made before filing - the default is new regime, and not opting out loses all deductions permanently for that year. ITR-1 now supports 2 house properties. Form 16 is available from 15 June 2026. AIS mismatches trigger notices. ESOP/RSU income requires ITR-2. File early for faster refund processing.</p>
                <p><strong>Get your personalised regime comparison. <a href="tel:+919459456700">Call +91 945 945 6700</a> or <a href="https://wa.me/919459456700?text=Hello%2C%20I%20just%20visited%20your%20ITR%20Filing%20for%20Salary%20in%20Gurugram%20page.%20I%20would%20like%20to%20know%20more%20about%20it." target="_blank" rel="noopener">WhatsApp us</a>.</strong></p>

            </div>
        </div>
    </div>
</section>

<!-- CONCLUSION + CTA BLOCK (Dark) -->
<section class="content-section" style="background: var(--blue) !important;">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title" style="color:#FFFFFF !important;">Get Expert Salary ITR Filing in Gurugram</h2>
            <div class="content-text" style="text-align:left;">
                
                <p style="color:rgba(255,255,255,0.85);">ITR filing for salaried employees in Gurugram involves the critical new vs old regime decision, accurate Form 16 data entry, HRA exemption computation for the city's high-rent market, ESOP/RSU taxation for tech professionals, and AIS reconciliation. Whether you are an IT professional in DLF Cyber City, a BFSI executive on Golf Course Road, or a manufacturing manager in IMT Manesar, the right regime choice can save Rs 20,000-80,000+ in tax.</p>
                <p style="color:rgba(255,255,255,0.85);">Patron Accounting's Gurugram office on Golf Course Extension Road provides CA-assisted salary ITR filing including personalised regime comparison, HRA optimisation, ESOP taxation, multi-employer consolidation, refund claim filing, and AIS reconciliation.</p>
                <p style="color:rgba(255,255,255,0.85);">With 10,000+ businesses served, a 4.9 Google rating, and 50,000+ documents filed, Patron Accounting LLP is a trusted tax filing partner for salaried professionals across Gurugram, NCR, and India.</p>

            </div>
            <div style="display:flex;gap:14px;flex-wrap:wrap;margin-top:24px;">
                <a href="tel:+919459456700" style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:var(--orange);color:#fff;border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#128222; Call +91 945 945 6700</a>
                <a href="https://wa.me/919459456700?text=Hello%2C%20I%20just%20visited%20your%20ITR%20Filing%20for%20Salary%20in%20Gurugram%20page.%20I%20would%20like%20to%20know%20more%20about%20it." target="_blank" style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:#25D366;color:#fff;border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;" rel="noopener">&#128172; WhatsApp Us</a>
                <a href="mailto:sales@patronaccounting.com?subject=Salary%20ITR%20Filing%20Gurugram&body=Hello%2C%20I%20just%20visited%20your%20ITR%20Filing%20for%20Salary%20in%20Gurugram%20page.%20I%20would%20like%20to%20know%20more%20about%20it.%0A%0AThank%20you." style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:transparent;color:#fff;border:2px solid rgba(255,255,255,0.3);border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#9993;&#65039; Email Us</a>
            </div>
            <p style="color:rgba(255,255,255,0.7);font-size:13px;margin-top:16px;">Book a Free Consultation - No Obligation.</p>
        </div>
    </div>
</section>

<!-- GSTAT STATE BENCH CITY PAGES (32 Pages) -->
<section class="content-section" style="padding:48px 32px;background:var(--gray-50);">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title" style="text-align:center;margin-bottom:12px;">ITR for Salaried Employees - Available Cities</h2>
            <p style="text-align:center;color:var(--text-muted);font-size:15px;margin-bottom:40px;">Expert salary ITR filing services across major Indian cities</p>
          
            <div class="pa-city-block" style="margin-bottom:40px;"><div class="pa-block-title">City-Wise Salary ITR Filing</div><div class="pa-block-sub">Select your city for localised salary ITR services</div><div class="pa-city-grid">
                    <a href="/itr-for-salary/pune" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Pune</div><div class="pa-card-sub">Maharashtra</div></div></a>
                    <a href="/itr-for-salary/mumbai" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Mumbai</div><div class="pa-card-sub">Maharashtra</div></div></a>
                    <a href="/itr-for-salary/delhi" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Delhi</div><div class="pa-card-sub">Delhi NCR</div></div></a>
                    <div class="pa-city-card" style="opacity:0.6; pointer-events:none; border:2px solid var(--orange); position:relative;"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Gurugram</div><div class="pa-card-sub">Haryana</div></div><span style="position:absolute; top:6px; right:8px; font-size:10px; color:var(--orange); font-weight:700; text-transform:uppercase; letter-spacing:0.5px;">You're here</span></div>
                </div></div>
            <div class="pa-city-block"><div class="pa-block-title">Related Services in Gurugram</div><div class="pa-block-sub">End-to-end tax and compliance support in Gurugram</div><div class="pa-cross-grid">
                    <a href="/income-tax-return-filing/gurugram" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Income Tax Return Filing</div><div class="pa-card-sub">Gurugram</div></div></a>
                    <a href="/itr-for-capital-gains/gurugram" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">ITR for Capital Gains</div><div class="pa-card-sub">Gurugram</div></div></a>
                    <a href="/tax-planning-services/gurugram" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Tax Planning Services</div><div class="pa-card-sub">Gurugram</div></div></a>
                    <a href="/itr-for-property-sale/gurugram" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">ITR for Property Sale</div><div class="pa-card-sub">Gurugram</div></div></a>
                    <a href="/itr-for-business/gurugram" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">ITR for Business</div><div class="pa-card-sub">Gurugram</div></div></a>
                    <a href="/itr-for-crypto-traders/gurugram" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">ITR for Crypto Traders</div><div class="pa-card-sub">Gurugram</div></div></a>
                </div></div>
        </div>
    </div>
</section>

<!-- CONTENT FRESHNESS FOOTER -->
<section class="content-section" style="padding:32px;">
    <div class="content-container">
        <div class="text-content" style="font-size:13px;color:var(--text-muted);">
            <p><strong>Content Created:</strong> 03 April 2026 &nbsp;|&nbsp; <strong>Last Updated:</strong> <span id="lastUpdatedFooter">03 April 2026</span> &nbsp;|&nbsp; <strong>Next Review:</strong> 03 July 2026 &nbsp;|&nbsp; <strong>Reviewed By:</strong> CA &amp; CS Team, Patron Accounting LLP</p>
            <p>This page on ITR for Salaried Employees in Gurugram is reviewed quarterly. Tax slabs, standard deduction, Section 87A rebate, and ITR form changes are verified against the latest Finance Act.</p>
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
