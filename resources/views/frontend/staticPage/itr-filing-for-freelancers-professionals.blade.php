
@extends('layouts.service-app')

<!-- External Dependencies (loaded by master layout in production) -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Barlow:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,400&family=DM+Sans:opsz,wght@9..40,400;9..40,500;9..40,600;9..40,700&display=swap" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

@section('meta')
    <title>ITR for Freelancers & Professionals - 44ADA, ITR-4 & TDS</title>
    <meta name="description" content="File ITR-3 or ITR-4 for freelance and professional income in 2026. Expert CA support for 44ADA, TDS refund, and tax audit. Starting from Rs. 1,499.">
    <link rel="canonical" href="/itr-for-professionals">
    <meta name="robots" content="index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1">
    <meta property="og:title" content="ITR for Freelancers & Professionals - 44ADA, ITR-4 & TDS">
    <meta property="og:description" content="File ITR-3 or ITR-4 for freelance and professional income in 2026. Expert CA support for 44ADA, TDS refund, and tax audit. Starting from Rs. 1,499.">
    <meta property="og:url" content="/itr-for-professionals">
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="Patron Accounting">
    <meta property="og:image" content="https://www.patronaccounting.com/images/og-default-square.png">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="1200">
    <meta property="og:image:type" content="image/png">
    <meta property="og:image:secure_url" content="https://www.patronaccounting.com/images/og-default-square.png">
    <meta property="og:image:alt" content="Patron Accounting - partner you can rely on">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="ITR for Freelancers & Professionals - 44ADA, ITR-4 & TDS">
    <meta name="twitter:description" content="File ITR-3 or ITR-4 for freelance and professional income in 2026. Expert CA support for 44ADA, TDS refund, and tax audit. Starting from Rs. 1,499.">
    <meta name="twitter:image" content="https://www.patronaccounting.com/images/og-default-square.png">
@endsection

@section('schema')
    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@graph": [
        {
          "@type": "Service",
          "name": "ITR for Professionals: CA Filing",
          "description": "File ITR-3 or ITR-4 for freelance and professional income in 2026. Expert CA support for 44ADA, TDS refund, and tax audit. Starting from Rs. 1,499.",
          "url": "https://www.patronaccounting.com/itr-for-professionals",
          "serviceType": "ITR for Professionals: CA Filing",
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
            "url": "https://www.patronaccounting.com/itr-for-professionals",
            "priceSpecification": {
              "@type": "PriceSpecification",
              "minPrice": "75",
              "maxPrice": "50000",
              "priceCurrency": "INR"
            }
          }
        },
        {
          "@type": "BreadcrumbList",
          "itemListElement": [
            { "@type": "ListItem", "position": 1, "name": "Home", "item": "https://www.patronaccounting.com/" },
            { "@type": "ListItem", "position": 2, "name": "Income Tax Return Filing", "item": "https://www.patronaccounting.com/income-tax-return" },
            { "@type": "ListItem", "position": 3, "name": "ITR for Professionals", "item": "https://www.patronaccounting.com/itr-for-professionals" }
          ]
        },
        {
          "@type": "FAQPage",
          "mainEntity": [
            {
              "@type": "Question",
              "name": "Which ITR form should a freelancer file in India?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "File ITR-4 if opting for Section 44ADA presumptive taxation (gross receipts up to Rs 50 lakh, or Rs 75 lakh with 95%+ digital receipts). ITR-4 requires only gross receipts and 50% taxable income - no expense details. If not using 44ADA or receipts exceed limits, file ITR-3 with regular books of accounts. ITR-1 and ITR-2 are incorrect for professional income and trigger defective return notices."
              }
            },
            {
              "@type": "Question",
              "name": "What is Section 44ADA and who can use it?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "Presumptive taxation scheme for specified professionals under Section 44AA(1): doctors, lawyers, architects, engineers, CAs, technical consultants, interior decorators, movie artists, and authorised representatives. Declare 50% of gross receipts as taxable income - no books, no audit required. Chapter VI-A deductions (80C, 80D) still available. No 5-year lock-in unlike Section 44AD for businesses."
              }
            },
            {
              "@type": "Question",
              "name": "Do freelancers need to pay advance tax?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "Yes, if estimated tax liability exceeds Rs 10,000 after TDS credit. Regular professionals: four quarterly installments (15 Jun, 15 Sep, 15 Dec, 15 Mar). Section 44ADA users: 100% in ONE single installment by 15 March - a significant cash flow advantage (11 months free from advance tax compliance). Failure attracts interest under Sections 234B and 234C."
              }
            },
            {
              "@type": "Question",
              "name": "Is TDS deducted on payments to freelancers?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "Yes. Clients deduct 10% TDS under Section 194J on payments exceeding Rs 50,000/year per client (threshold increased from Rs 30,000 effective FY 2025-26). TDS appears in Form 26AS and is claimed as tax credit in ITR, reducing balance payable. International clients do not deduct TDS - full gross income must still be declared."
              }
            },
            {
              "@type": "Question",
              "name": "Should freelancers register for GST?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "Mandatory when gross receipts exceed Rs 20 lakh/year (Rs 10 lakh for NE and hill states). Most professional services attract 18% GST. Medical services by doctors are exempt. Freelancers serving foreign clients (Upwork, Fiverr, direct) should register and file LUT (Letter of Undertaking) annually for zero-rated export of services."
              }
            },
            {
              "@type": "Question",
              "name": "Can a salaried person use Section 44ADA for freelance income?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "Yes, if the freelance profession qualifies as specified under Section 44AA(1) and receipts are within limits. However, they must file ITR-3 (not ITR-1 or ITR-2) to report both salary and professional income. Form 10-IEA needed if opting out of new tax regime. No 5-year lock-in, so they can opt in/out of 44ADA each year."
              }
            },
            {
              "@type": "Question",
              "name": "Freelancer ka ITR kaise file kare aur kya documents chahiye?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "Freelancer ko ITR-4 (Section 44ADA ke saath) ya ITR-3 (regular books ke saath) file karni hoti hai. Documents: client payment summary, bank statements, Form 26AS, AIS, Form 16A certificates, aur agar foreign income hai toh FIRA. 44ADA mein 50% income declare karte hain, koi expense details nahi chahiye. Patron Accounting Rs 1,499 se shuru. Call: +91 945 945 6700. Quick Answers Q: ITR form for freelancers? A: ITR-4 (Section 44ADA) or ITR-3 (regular books). Never ITR-1 or ITR-2. Q: Section 44ADA income? A: 50% of gross receipts. Limit Rs 75 lakh (95%+ digital) or Rs 50 lakh standard. Q: Advance tax under 44ADA? A: ONE installment by 15 March. Not quarterly. 11-month cash flow advantage. Q: TDS on professional payments? A: 10% under Section 194J above Rs 50,000/year (FY 2025-26 threshold). Q: GST for freelancers? A: Mandatory above Rs 20 lakh. 18% GST. Medical exempt. LUT for foreign exports."
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
    ['name' => 'ITR for Professionals', 'url' => '/itr-filing-for-freelancers-professionals'],
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
                        Income Tax Return (ITR) Filing for Professionals and Freelancers in India
                    </h1>

                    <div class="expert-attribution-box">
                        <span class="eab-check"><svg width="16" height="16" viewBox="0 0 24 24" fill="currentColor"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg></span>
                        <span class="eab-title">Reviewed by CA and CS Team, Patron Accounting LLP</span>
                        <span class="eab-meta">
                            <span>ICAI & ICSI Registered</span><span class="eab-sep">|</span>
                            <span>15+ Years Experience</span><span class="eab-sep">|</span>
                            <span>Last Updated: <span id="lastUpdated">01 March 2026</span></span>
                        </span>
                        <a href="/authorhub/ca-sundram-gupta" class="eab-link">Verify Credentials &rarr;</a>
                    </div>

                    <div class="mb-4">
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>PGBP Income:</span> Professional/freelance income taxed under Profits and Gains from Business or Profession at individual slab rates. Eligible for expense deductions or Section 44ADA presumptive taxation.</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Section 44ADA:</span> Declare 50% of gross receipts as taxable income. No detailed books. No audit. Limit Rs 75 lakh (95%+ digital receipts). No 5-year lock-in. Chapter VI-A deductions still available.</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>TDS (Sec 194J):</span> Clients deduct 10% TDS on payments above Rs 50,000/year (FY 2025-26 increased threshold). Filing ITR is the only way to claim TDS credit and recover excess deductions.</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Starting Fee:</span> From Rs 1,499 for ITR-3/ITR-4. Due: 31 Aug 2026 (non-audit) / 31 Oct 2026 (audit). Tax audit report by 30 Sep 2026. Section 87A rebate applicable under new regime.</p>
                        </div>
                    </div>

                    <p class="mb-4 fw-bold" style="color: var(--blue); font-size: 15px;">10,000+ professional ITRs filed. 4.9/5 Google Rating. 500+ reviews. 100% defect-free returns. Pune, Mumbai, Delhi, Gurugram.</p>

                    <div class="hero-cta">
                        <a href="tel:+919459456700" class="btn-video text-decoration-none">
                            <span class="play-circle"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="width:14px;height:14px;color:#fff"><path d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/></svg></span>
                            Call +91 945 945 6700
                        </a>
                        <a href="mailto:sales@patronaccounting.com?subject=Professional%20ITR%20Enquiry&body=Hello%2C%20I%20just%20visited%20your%20Professional%20ITR%20page.%20I%20would%20like%20to%20know%20more%20about%20it.%0A%0AThank%20you." class="btn-sample text-decoration-none">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="width:18px;height:18px;"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,12 2,6"/></svg>
                            Email Us
                        </a>
                        <a href="https://wa.me/919459456700?text=Hello%2C%20I%20just%20visited%20your%20Professional%20ITR%20page.%20I%20would%20like%20to%20know%20more%20about%20it." target="_blank" class="btn-sample text-decoration-none" rel="noopener">
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
                                            'service'  => 'Professional ITR',
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
    'ctaText'    => 'File your professional or freelancer ITR with expert CA support. Section 44ADA, TDS reconciliation, foreign income from Rs 1,499.',
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
            <a href="#what-section" class="toc-btn">Income Classification</a>
            <a href="#who-section" class="toc-btn">Section 44ADA</a>
            <a href="#services-section" class="toc-btn">Our Services</a>
            <a href="#procedure-section" class="toc-btn">10-Step Process</a>
            <a href="#documents-section" class="toc-btn">Documents</a>
            <a href="#challenges-section" class="toc-btn">Common Mistakes</a>
            <a href="#fees-section" class="toc-btn">Fees</a>
            <a href="#timeline-section" class="toc-btn">Due Dates</a>
            <a href="#benefits-section" class="toc-btn">Why Patron</a>
            <a href="#comparison-section" class="toc-btn">Patron vs DIY</a>
            <a href="#faq-section" class="toc-btn">FAQs</a>
        </div>
        <button class="toc-arrow right" id="tocRight">&#10095;</button>
    </div>
</div>

<!-- SECTION 2: OVERVIEW / INTRO + TL;DR -->
<section class="content-section" id="overview-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">ITR for Professionals and Freelancers - Guide for AY 2026-27</h2>
            <div class="content-text">
                <div class="highlight-box" style="margin-bottom:20px;">
                    <p><strong>&#128204; TL;DR - Professional ITR Services at a Glance</strong></p>
                    <p>Professional/freelance income is taxed under PGBP at slab rates. Section 44ADA: declare 50% of gross receipts as income (limit Rs 75 lakh with 95%+ digital). ITR-4 for 44ADA; ITR-3 for regular books. TDS: 10% under Section 194J (Rs 50,000 threshold FY 2025-26). Due: 31 Aug 2026 (non-audit) / 31 Oct 2026 (audit). GST: mandatory above Rs 20 lakh. Starts Rs 1,499.</p>
                </div>
                <p>India's professional and freelance economy spans doctors, CAs, lawyers, architects, engineers, content writers, designers, developers, and YouTube creators. The Income Tax Act provides a specific framework - reporting under PGBP, claiming expenses or using Section 44ADA presumptive taxation. Using ITR-1 or ITR-2 for professional income results in defective return notices. Clients deduct 10% TDS under Section 194J above Rs 50,000/year - filing ITR is the only way to claim credit.</p>
                <p><div class="table-responsive-wrapper"><table><thead><tr><th>Parameter</th><th>Details</th></tr></thead><tbody>
<tr><td>How is professional income taxed?</td><td>Under PGBP at individual slab rates. Eligible for expense deductions or Section 44ADA</td></tr>
<tr><td>ITR Form</td><td>ITR-4 (Section 44ADA, receipts within Rs 75L/50L) or ITR-3 (regular books/audit)</td></tr>
<tr><td>Section 44ADA</td><td>50% of gross receipts = taxable income. No books. No audit. No 5-year lock-in. Chapter VI-A available</td></tr>
<tr><td>Specified Professionals</td><td>Legal, Medical, Engineering, Architecture, Accountancy, Technical Consultancy, Interior Decoration, Movie Artists</td></tr>
<tr><td>TDS (Section 194J)</td><td>10% on payments above Rs 50,000/year (increased FY 2025-26). Credit in Form 26AS</td></tr>
<tr><td>GST Threshold</td><td>Rs 20 lakh (Rs 10 lakh NE states). 18% on most services. Medical exempt. LUT for exports</td></tr>
<tr><td>Patron Fee</td><td>Starting from Rs 1,499</td></tr>
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
                <h2 class="section-title">How Professional and Freelance Income Is Classified</h2>
                <div class="content-text what-is-definition">
                    
                    <p>The <strong>Income Tax Act, 1961</strong> treats income earned through professional practice or freelancing as <strong>Profits and Gains from Business or Profession (PGBP)</strong>. This covers all self-employment income - doctors, lawyers, architects, content writers, software developers, designers, and consultants.</p>
<p>Unlike salary where employer deducts TDS and provides Form 16, professionals must self-report income, calculate expenses or opt for presumptive taxation, and file the appropriate ITR form. Professional income allows <strong>expense deductions</strong> before computing taxable income - or alternatively, <strong>Section 44ADA</strong> lets you declare 50% of receipts as income without tracking expenses.</p>

                </div>
                <div class="highlight-box" style="margin-top:20px;">
                    <p><strong>Key Terms for Professional ITR:</strong></p>
                    <p><strong>PGBP:</strong> Profits and Gains from Business or Profession - the income head under which all professional/freelance income is taxed at individual slab rates.</p>
<p><strong>Section 44ADA:</strong> Presumptive taxation for specified professionals. 50% of gross receipts = taxable income. Limit Rs 75 lakh (95%+ digital) or Rs 50 lakh (standard). No books, no audit, no 5-year lock-in.</p>
<p><strong>Section 194J:</strong> 10% TDS on professional service payments above Rs 50,000/year per client (FY 2025-26 threshold). Credit in Form 26AS.</p>
<p><strong>Section 87A Rebate:</strong> Applicable to professionals under new tax regime - income up to Rs 12 lakh (with Rs 60,000 rebate) effectively tax-free for FY 2025-26.</p>
<p><strong>FIRA:</strong> Foreign Inward Remittance Advice - bank-issued certificate for foreign currency receipts. Required for international freelancers.</p>

                </div>
            </div>
            <div class="column-image">
                <div class="illustration-placeholder">
                    <div class="illustration-icon" style="max-width:240px;">
                        <svg viewBox="0 0 200 180" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <!-- Professional ITR -->
                            <rect x="30" y="15" width="140" height="120" rx="8" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/>
                            <rect x="30" y="15" width="140" height="24" rx="8" fill="#14365F"/>
                            <text x="100" y="32" font-size="9" fill="#fff" font-weight="700" text-anchor="middle" font-family="Arial, sans-serif">Professional ITR</text>
                            <!-- 44ADA card -->
                            <rect x="45" y="48" width="55" height="28" rx="5" fill="#FFF3E0" stroke="#F5A623" stroke-width="1.2"/>
                            <text x="72" y="60" font-size="6" fill="#14365F" font-weight="600" text-anchor="middle" font-family="Arial">Sec 44ADA</text>
                            <text x="72" y="72" font-size="9" fill="#F5A623" font-weight="800" text-anchor="middle" font-family="Arial">50%</text>
                            <!-- ITR forms -->
                            <rect x="110" y="48" width="50" height="13" rx="3" fill="#E8F5E9" stroke="#25D366" stroke-width="0.8"/>
                            <text x="135" y="58" font-size="5" fill="#25D366" font-weight="700" text-anchor="middle" font-family="Arial">ITR-4</text>
                            <rect x="110" y="64" width="50" height="13" rx="3" fill="#FFF3E0" stroke="#F5A623" stroke-width="0.8"/>
                            <text x="135" y="74" font-size="5" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">ITR-3</text>
                            <!-- TDS badge -->
                            <rect x="40" y="86" width="55" height="18" rx="4" fill="#E8F5E9" stroke="#25D366" stroke-width="1"/>
                            <text x="67" y="98" font-size="5" fill="#25D366" font-weight="700" text-anchor="middle" font-family="Arial">10% TDS 194J</text>
                            <!-- No lock-in badge -->
                            <rect x="105" y="86" width="55" height="18" rx="4" fill="#FFF3E0" stroke="#F5A623" stroke-width="0.8"/>
                            <text x="132" y="98" font-size="5" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">No Lock-In</text>
                            <!-- Labels -->
                            <rect x="35" y="112" width="55" height="14" rx="3" fill="#FFF3E0" stroke="#F5A623" stroke-width="0.8"/>
                            <text x="62" y="122" font-size="5" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">31 Aug 2026</text>
                            <rect x="100" y="112" width="60" height="14" rx="3" fill="#E8F5E9" stroke="#25D366" stroke-width="0.8"/>
                            <text x="130" y="122" font-size="5" fill="#25D366" font-weight="700" text-anchor="middle" font-family="Arial">PGBP Slab</text>
                            <!-- Check -->
                            <circle cx="155" cy="28" r="16" fill="#E8F5E9" stroke="#25D366" stroke-width="1.5"/>
                            <path d="M148 28l4 4 9-9" stroke="#25D366" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            <text x="100" y="148" font-size="8" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial, sans-serif">Income Tax Act, 1961</text>
                            <!-- Label -->
                            <text x="100" y="170" font-size="10" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial, sans-serif">Professional ITR</text>
                        </svg>
                    </div>
                    <div class="illustration-badge">
                        <span>Income Tax Act, 1961</span>
                        <strong>Sec 44ADA | ITR-3 / ITR-4</strong>
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
            <h2 class="section-title">Section 44ADA: Who Qualifies and How It Works</h2>
            <div class="content-text">
                
                <p><strong>Eligible Specified Professions (Section 44AA(1)):</strong></p>
<div class="table-responsive-wrapper"><table><thead><tr><th>Category</th><th>Examples</th></tr></thead><tbody>
<tr><td>Legal</td><td>Advocates, barristers, solicitors, tax consultants practising law</td></tr>
<tr><td>Medical</td><td>Doctors (MBBS, BDS, BAMS, BHMS), physiotherapists</td></tr>
<tr><td>Engineering / Architecture</td><td>Civil, mechanical, electrical engineers; architects</td></tr>
<tr><td>Accountancy</td><td>CAs, CMAs, Company Secretaries</td></tr>
<tr><td>Technical Consultancy</td><td>IT consultants, software developers, project management consultants</td></tr>
<tr><td>Interior Decoration</td><td>Interior designers and decorators</td></tr>
<tr><td>Movie Artists</td><td>Actors, directors, producers, cinematographers, music directors</td></tr>
<tr><td>Authorised Representatives</td><td>Persons representing others before tribunals for fee</td></tr>
</tbody></table></div>
<p><strong>NOT eligible:</strong> Non-specified consultants (fashion designers, recruitment, event managers), NRIs, HUFs, LLPs, and professionals with receipts exceeding Rs 75 lakh.</p>
<p><strong>How it works:</strong> Declare 50% of gross receipts as taxable income. Remaining 50% deemed to cover all expenses. Chapter VI-A deductions (80C, 80D) still available. No detailed books. No audit. Advance tax: ONE installment by 15 March. No 5-year lock-in (unlike Section 44AD for businesses).</p>

            </div>
            </div>
        </div>
    </div>
</section>

<!-- SECTION 5: OUR SERVICES -->
<section class="content-section" id="services-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Professional ITR Filing Services by Patron Accounting</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Service</th><th>What We Do</th></tr></thead>
                    <tbody>
                        <tr><td>Section 44ADA Eligibility Verification</td><td>Profession-by-profession analysis to confirm specified status under Section 44AA(1). Prevents incorrect filings and CPC defective return notices.</td></tr>
<tr><td>Tax Regime and Scheme Comparison</td><td>Full computation under Old Regime (with expense deductions + Chapter VI-A) vs New Regime. Section 44ADA presumptive vs regular books comparison to minimize tax.</td></tr>
<tr><td>TDS Reconciliation (Form 26AS + AIS)</td><td>Complete pre-filing match of Section 194J TDS credits against invoices. Mismatches flagged to clients for correction before filing.</td></tr>
<tr><td>Foreign Income and FIRA Handling</td><td>INR conversion at SBI TT buying rate (Rule 115) per receipt date. FIRA verification. Schedule FSI for foreign income. GST LUT filing for zero-rated export services.</td></tr>
<tr><td>Tax Audit Coordination (Section 44AB)</td><td>Form 3CB and 3CD filing with UDIN before 30 Sep 2026 for professionals with gross receipts above Rs 75 lakh. Full audit-ITR data consistency.</td></tr>
<tr><td>Salaried + Freelance Combined ITR-3</td><td>Full Form 16 integration with PGBP income. Salary in Schedule S, professional income in Schedule BP. Form 10-IEA for regime opt-out.</td></tr>

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
            <h2 class="section-title">10-Step Professional ITR Filing Process</h2>
            <p class="section-subtitle" style="text-align:left;max-width:100%;">End-to-end: from Section 44ADA eligibility verification and TDS reconciliation to tax regime comparison and e-verified ITR filing.</p>
        </header>
        <div class="steps-container">
            <div class="step-card"><div class="step-content"><span class="step-badge">Step 1</span><h3 class="step-title">Document Collection</h3><p class="step-description">Share client payment summary, bank statements, Form 26AS, AIS, Form 16A certificates, FIRA documents for foreign income. Our CA reconciles all income sources against AIS data.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Income reconciled</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> AIS matched</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="15" y="5" width="90" height="70" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><line x1="30" y1="22" x2="90" y2="22" stroke="#F5A623" stroke-width="3" stroke-linecap="round"/><line x1="30" y1="35" x2="80" y2="35" stroke="#14365F" stroke-width="2" opacity="0.3"/><line x1="30" y1="45" x2="70" y2="45" stroke="#14365F" stroke-width="2" opacity="0.3"/><circle cx="85" cy="55" r="10" fill="#E8F5E9" stroke="#25D366" stroke-width="1.2"/><path d="M80 55l3 3 7-7" stroke="#25D366" stroke-width="1.5" stroke-linecap="round"/></svg></div><span class="illustration-label">Collected</span><span class="step-number-large">01</span></div></div></div>

<div class="step-card"><div class="step-content"><span class="step-badge">Step 2</span><h3 class="step-title">Section 44ADA Eligibility</h3><p class="step-description">Analyse the nature of your services and verify whether your profession qualifies as specified under Section 44AA(1). Check gross receipt limits (Rs 50 lakh or Rs 75 lakh based on digital receipt percentage).</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Profession verified</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Limits checked</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="25" y="15" width="70" height="55" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><rect x="30" y="22" width="55" height="15" rx="3" fill="#FFF3E0" stroke="#F5A623" stroke-width="1"/><text x="57" y="33" font-size="6" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">Sec 44ADA</text><path d="M48 50l8 8 16-16" stroke="#25D366" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg></div><span class="illustration-label">Verified</span><span class="step-number-large">02</span></div></div></div>

<div class="step-card"><div class="step-content"><span class="step-badge">Step 3</span><h3 class="step-title">Tax Regime Comparison</h3><p class="step-description">Compute taxable income under Old Regime (expense deductions + Chapter VI-A) and New Regime. Compare 44ADA presumptive vs regular books to find the lowest tax option.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Regimes compared</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Best option found</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="15" y="10" width="90" height="65" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><rect x="20" y="20" width="35" height="12" rx="3" fill="#FFF3E0" stroke="#F5A623" stroke-width="0.8"/><text x="37" y="29" font-size="5" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">Old</text><rect x="60" y="20" width="35" height="12" rx="3" fill="#E8F5E9" stroke="#25D366" stroke-width="0.8"/><text x="77" y="29" font-size="5" fill="#25D366" font-weight="700" text-anchor="middle" font-family="Arial">New</text><path d="M48 55l8 8 16-16" stroke="#25D366" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg></div><span class="illustration-label">Compared</span><span class="step-number-large">03</span></div></div></div>

<div class="step-card"><div class="step-content"><span class="step-badge">Step 4</span><h3 class="step-title">TDS Reconciliation</h3><p class="step-description">All TDS credits in Form 26AS and AIS matched against invoices and payment receipts. Mismatches flagged to clients for correction before filing to avoid processing delays.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> 26AS matched</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Credits verified</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="25" y="15" width="70" height="55" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><rect x="35" y="25" width="50" height="12" rx="3" fill="#FFF3E0" stroke="#F5A623" stroke-width="1"/><text x="60" y="34" font-size="6" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">26AS</text><circle cx="60" cy="52" r="10" fill="#E8F5E9" stroke="#25D366" stroke-width="1.2"/><path d="M55 52l3 3 7-7" stroke="#25D366" stroke-width="1.5" stroke-linecap="round"/></svg></div><span class="illustration-label">Reconciled</span><span class="step-number-large">04</span></div></div></div>

<div class="step-card"><div class="step-content"><span class="step-badge">Step 5</span><h3 class="step-title">Foreign Income Handling</h3><p class="step-description">Convert foreign currency receipts to INR at SBI TT buying rates per receipt date (Rule 115). Verify FIRA documentation. Schedule FSI for foreign income. GST LUT for exports.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> FIRA verified</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> FX converted</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="25" y="15" width="70" height="55" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><rect x="30" y="22" width="55" height="15" rx="3" fill="#E8F5E9" stroke="#25D366" stroke-width="1"/><text x="57" y="33" font-size="5" fill="#25D366" font-weight="700" text-anchor="middle" font-family="Arial">FIRA + LUT</text><rect x="35" y="45" width="45" height="12" rx="3" fill="#FFF3E0" stroke="#F5A623" stroke-width="0.8"/><text x="57" y="54" font-size="5" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">Rule 115</text></svg></div><span class="illustration-label">Converted</span><span class="step-number-large">05</span></div></div></div>

<div class="step-card"><div class="step-content"><span class="step-badge">Step 6</span><h3 class="step-title">Advance Tax Check</h3><p class="step-description">Verify whether advance tax was paid as required. Compute interest under Sections 234B and 234C for any shortfall. 44ADA users: single installment by 15 March.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Advance tax checked</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Interest computed</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="20" y="10" width="80" height="60" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><rect x="30" y="22" width="60" height="15" rx="3" fill="#FFF3E0" stroke="#F5A623" stroke-width="1"/><text x="60" y="33" font-size="5" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">234B / 234C</text><rect x="35" y="45" width="50" height="15" rx="3" fill="#E8F5E9" stroke="#25D366" stroke-width="0.8"/><text x="60" y="56" font-size="5" fill="#25D366" font-weight="600" text-anchor="middle" font-family="Arial">Verified</text></svg></div><span class="illustration-label">Checked</span><span class="step-number-large">06</span></div></div></div>

<div class="step-card"><div class="step-content"><span class="step-badge">Step 7</span><h3 class="step-title">ITR-3 or ITR-4 Preparation</h3><p class="step-description">Correct form selected. ITR-4: gross receipts and 50% presumptive income entered. ITR-3: full P&L with income, expenses, depreciation, and profit prepared.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Form prepared</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> P&L completed</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="15" y="10" width="90" height="65" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><rect x="20" y="15" width="80" height="8" rx="2" fill="#14365F" opacity="0.8"/><text x="60" y="21" font-size="5" fill="#fff" font-weight="700" text-anchor="middle" font-family="Arial">ITR-3 / ITR-4</text><line x1="25" y1="30" x2="90" y2="30" stroke="#14365F" stroke-width="2" opacity="0.3"/><rect x="30" y="55" width="50" height="10" rx="3" fill="#E8F5E9" stroke="#25D366" stroke-width="0.6"/><text x="55" y="63" font-size="5" fill="#25D366" font-weight="700" text-anchor="middle" font-family="Arial">PREPARED</text></svg></div><span class="illustration-label">Prepared</span><span class="step-number-large">07</span></div></div></div>

<div class="step-card"><div class="step-content"><span class="step-badge">Step 8</span><h3 class="step-title">Chapter VI-A Deductions</h3><p class="step-description">All eligible deductions claimed and verified: 80C, 80D, 80CCD, 80G, 80TTA/80TTB against investment proofs and payment receipts.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Deductions claimed</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Proofs verified</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="25" y="15" width="70" height="55" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><rect x="35" y="25" width="50" height="12" rx="3" fill="#FFF3E0" stroke="#F5A623" stroke-width="1"/><text x="60" y="34" font-size="5" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">Ch VI-A</text><rect x="35" y="45" width="50" height="12" rx="3" fill="#E8F5E9" stroke="#25D366" stroke-width="0.8"/><text x="60" y="54" font-size="5" fill="#25D366" font-weight="700" text-anchor="middle" font-family="Arial">CLAIMED</text></svg></div><span class="illustration-label">Claimed</span><span class="step-number-large">08</span></div></div></div>

<div class="step-card"><div class="step-content"><span class="step-badge">Step 9</span><h3 class="step-title">Tax Computation and Review</h3><p class="step-description">Final tax liability, TDS credit, advance tax credit, and any self-assessment tax payable computed. Presented for your review before filing.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Tax computed</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Client approved</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="20" y="10" width="80" height="60" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><rect x="30" y="22" width="60" height="15" rx="3" fill="#FFF3E0" stroke="#F5A623" stroke-width="1"/><text x="60" y="33" font-size="6" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">TAX SUMMARY</text><rect x="35" y="45" width="50" height="15" rx="3" fill="#E8F5E9" stroke="#25D366" stroke-width="0.8"/><text x="60" y="56" font-size="5" fill="#25D366" font-weight="600" text-anchor="middle" font-family="Arial">APPROVED</text></svg></div><span class="illustration-label">Approved</span><span class="step-number-large">09</span></div></div></div>

<div class="step-card"><div class="step-content"><span class="step-badge">Step 10</span><h3 class="step-title">E-Filing and Acknowledgment</h3><p class="step-description">ITR filed on income tax portal. E-verification completed via Aadhaar OTP or net banking. ITR-V acknowledgment shared within 24 hours of filing.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> ITR filed</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> E-verified</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="20" y="10" width="80" height="65" rx="8" fill="#E8F5E9" stroke="#25D366" stroke-width="1.5"/><rect x="28" y="25" width="64" height="20" rx="5" fill="#25D366" opacity="0.15"/><text x="60" y="33" font-size="6" fill="#14365F" font-weight="600" text-anchor="middle" font-family="Arial">ITR</text><text x="60" y="42" font-size="7" fill="#14365F" font-weight="800" text-anchor="middle" font-family="Arial">FILED</text><path d="M52 60l5 5 11-11" stroke="#25D366" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"/></svg></div><span class="illustration-label">Complete</span><span class="step-number-large">10</span></div></div></div>

        </div>
    </div>
</section>

<!-- SECTION 8: DOCUMENTS REQUIRED -->
<section class="content-section" id="documents-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Documents Required for Professional ITR Filing</h2>
            <div class="content-text">
                
                <p><strong>Income Documents:</strong></p>
<ul>
<li>Invoice register or client-wise payment summary for FY 2025-26</li>
<li>Bank statements for all accounts (April 2025 to March 2026)</li>
<li><strong>Form 26AS</strong> from incometaxindia.gov.in (TDS credits)</li>
<li><strong>AIS and TIS</strong> from income tax portal</li>
<li><strong>Form 16A</strong> certificates from each client who deducted TDS</li>
<li><strong>FIRA</strong> certificates for payments from foreign clients</li>
</ul>
<p><strong>Expense Documents (ITR-3 with regular books):</strong></p>
<ul>
<li>Office rent receipts, utility bills, software subscriptions</li>
<li>Asset purchase invoices for depreciation (laptops, equipment)</li>
<li>Professional subscription receipts (journals, memberships)</li>
</ul>
<p><strong>Personal and Compliance:</strong> PAN, Aadhaar, advance tax challans (Form 280), previous year ITR, Form 10-IEA (if opting out of new regime).</p>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 9: CHALLENGES -->
<section class="content-section" id="challenges-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Common Mistakes Professionals and Freelancers Make</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Challenge</th><th>Impact</th><th>How Patron Accounting Solves It</th></tr></thead>
                    <tbody>
                        <tr><td>Filing ITR-1 or ITR-2 with Freelance Income</td><td>Incorrect form results in defective return notice under Section 139(9) from CPC</td><td>CA selects correct form: ITR-4 (Section 44ADA) or ITR-3 (regular books). Zero CPC defective notices.</td></tr>
<tr><td>Assuming 44ADA Works for All Consultants</td><td>Only SPECIFIED professions under Section 44AA(1) qualify. Fashion designers, recruitment consultants may not qualify</td><td>Profession-by-profession analysis before recommending 44ADA. Prevents incorrect scheme selection.</td></tr>
<tr><td>Not Reporting Foreign Client Income</td><td>All income regardless of source must be reported. Form 26AS non-appearance does not mean exemption</td><td>Full foreign income reporting with FIRA-based conversion at SBI TT buying rate per Rule 115.</td></tr>
<tr><td>Missing Section 194J Threshold Change</td><td>FY 2025-26: TDS applies only above Rs 50,000/year (earlier Rs 30,000). Affects cash flow planning</td><td>Updated threshold applied. TDS reconciliation with Form 26AS ensures full credit claimed.</td></tr>
<tr><td>Claiming Expenses Under Section 44ADA</td><td>Under 44ADA, all expenses deemed covered by 50% exemption. No individual expense claims permitted</td><td>Clear 44ADA vs regular books comparison. Correct scheme applied based on actual expense ratio.</td></tr>

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
            <h2 class="section-title">Professional ITR Filing Fees</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Fee Component</th><th>Amount</th></tr></thead>
                    <tbody>
                        <tr><td>Professional ITR-4 (Section 44ADA presumptive)</td><td class="table-amount">Starting Rs 1,499</td></tr>
<tr><td>Freelancer ITR-3 with regular books</td><td class="table-amount">Starting Rs 2,499</td></tr>
<tr><td>Salaried + freelance combined ITR-3</td><td class="table-amount">Starting Rs 2,999</td></tr>
<tr><td>International freelancer (FIRA + foreign income)</td><td class="table-amount">Starting Rs 3,499</td></tr>
<tr><td>Professional ITR-3 with tax audit</td><td class="table-amount">Starting Rs 4,999</td></tr>
<tr><td>GST registration + LUT filing (add-on)</td><td class="table-amount">Starting Rs 1,999</td></tr>

                    </tbody>
                </table>
                </div>
                <p style="margin-top:16px;font-size:13px;color:var(--text-muted);font-style:italic;">All fees and charges listed are indicative only and do not constitute a binding offer. Final amounts may vary depending on the volume of work and the complexity involved.</p>
                <p style="margin-top:16px;">Professional service charges for drafting, filing, and representation are separate from the statutory fees. The exact fee depends on the complexity of the case, disputed amount, and number of hearings required. Contact us for a detailed quote.</p>
                <p style="margin-top:16px;"><strong>Get a free Professional ITR consultation - <a href="tel:+919459456700">Call +91 945 945 6700</a> or <a href="https://wa.me/919459456700?text=Hello%2C%20I%20just%20visited%20your%20Professional%20ITR%20page.%20I%20would%20like%20to%20know%20more%20about%20it." target="_blank" rel="noopener">WhatsApp us</a>. No-obligation assessment.</strong></p>
            </div>
        </div>
    </div>
</section>

<!-- SECTION 11: TIMELINE -->
<section class="content-section" id="timeline-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Professional ITR Due Dates - AY 2026-27</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Stage</th><th>Estimated Timeline</th></tr></thead>
                    <tbody>
                        <tr><td>Advance Tax (regular professionals)</td><td>15 Jun (15%), 15 Sep (45%), 15 Dec (75%), 15 Mar (100%)</td></tr>
<tr><td>Advance Tax (Section 44ADA users)</td><td>100% in ONE installment by 15 March 2026</td></tr>
<tr><td>Tax Audit Report (Form 3CB/3CD)</td><td>30 September 2026</td></tr>
<tr><td><strong>ITR-3/ITR-4 (non-audit)</strong></td><td><strong>31 August 2026</strong></td></tr>
<tr><td>ITR-3 (with tax audit)</td><td>31 October 2026</td></tr>
<tr><td>Belated Return</td><td>31 December 2026 (late fee + loss carry-forward forfeited)</td></tr>

                    </tbody>
                </table>
                </div>
                <div class="highlight-box" style="margin-top:16px;">
                    
                    <p><strong>Key:</strong> 31 Aug 2026 for non-audit professional ITR. 31 Oct 2026 if tax audit applies. Tax audit report by 30 Sep 2026. Late fee: Rs 5,000 (Section 234F). Belated returns forfeit loss carry-forward. Section 44ADA advance tax: single installment by 15 March (11-month cash flow advantage). Penalty for non-audit compliance: 0.5% of receipts or Rs 1.5 lakh (Section 271B).</p>

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
            <h2 class="section-title">Why Choose Patron Accounting for Professional ITR</h2>
        </div>
        <div class="features-grid">
    <article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/></svg></div><h3 class="feature-title">44ADA Eligibility Verification</h3><p class="feature-text">Profession-by-profession analysis confirms specified status under Section 44AA(1) before recommending presumptive scheme. Prevents incorrect filings.</p></article>
    <article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M14 2H6a2 2 0 00-2 2v16a2 2 0 002 2h12a2 2 0 002-2V8z"/><path d="M14 2v6h6M16 13H8M16 17H8"/></svg></div><h3 class="feature-title">Foreign Income and FIRA</h3><p class="feature-text">Rule 115 SBI TT buying rate conversion, FIRA verification, Schedule FSI, and GST LUT filing for international freelancers.</p></article>
    <article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><h3 class="feature-title">Tax Regime Comparison</h3><p class="feature-text">Detailed Old vs New regime computation including 44ADA presumptive vs regular books. Section 87A rebate correctly applied under new regime.</p></article>
    <article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M13 10V3L4 14h7v7l9-11h-7z"/></svg></div><h3 class="feature-title">Salaried + Freelance ITR-3</h3><p class="feature-text">Full Form 16 integration with PGBP income in single return. Salary in Schedule S, professional income in Schedule BP. Form 10-IEA managed.</p></article>
    <article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="3" y="11" width="18" height="11" rx="2"/><path d="M7 11V7a5 5 0 0110 0v4"/></svg></div><h3 class="feature-title">Post-Filing Support</h3><p class="feature-text">Section 143(1) intimation handling, AIS reconciliation notices, defective return rectifications, and tax audit coordination included.</p></article>
</div>
    </div>
</section>

<!-- SECTION 12A: SOCIAL PROOF -->
<section class="content-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Why 10,000+ Professionals Trust Patron Accounting</h2>
            <div class="content-text">
                
                <p><strong>10,000+ Professional ITRs Filed</strong> - ITR-3 and ITR-4 for professionals, consultants, and freelancers.</p>
<p><strong>4.9/5 Google Rating</strong> from 500+ verified reviews.</p>
<p><strong>15+ Years</strong> handling Section 44ADA, TDS reconciliation, and professional income taxation.</p>
<p><strong>100% Defect-Free Returns</strong> - zero CPC defective notices on professional ITR filings.</p>
<p><strong>4 Offices:</strong> Pune, Mumbai, Delhi, and Gurugram.</p>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 13: SELF-FILING vs PROFESSIONAL COMPARISON -->
<section class="content-section" id="comparison-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Patron Accounting vs Self-Filing vs Generic Portals</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Feature</th><th>Patron Accounting</th><th>Self-Filing</th><th>Generic Portals</th></tr></thead>
                    <tbody>
                        <tr><td>44ADA Eligibility</td><td>Profession-by-profession analysis</td><td>High risk of incorrect self-assessment</td><td>Automated but may misclassify</td></tr>
<tr><td>44ADA vs Regular Books</td><td>Full tax scenario comparison</td><td>Requires own calculations</td><td>Premium plans only</td></tr>
<tr><td>Foreign Income + FIRA</td><td>Rule 115 conversion, LUT filing</td><td>Complex, error-prone</td><td>Limited international support</td></tr>
<tr><td>TDS Reconciliation</td><td>Complete pre-filing match</td><td>Risk of missed mismatches</td><td>Automated on most</td></tr>
<tr><td>Tax Audit Coordination</td><td>Full Form 3CB/3CD included</td><td>Not possible without CA</td><td>Charged separately</td></tr>
<tr><td>Salaried + Freelance</td><td>Full Form 16 integration</td><td>Manageable but easy to miss</td><td>Supported</td></tr>
<tr><td>Post-Filing Support</td><td>Included in service</td><td>Self-managed</td><td>Charged separately</td></tr>
<tr><td>Starting Price</td><td>From Rs 1,499</td><td>Free (knowledge risk)</td><td>Rs 999-4,999+</td></tr>

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
<li><strong><a href="/income-tax-return">Income Tax Return</a></strong> - Complete ITR services for all entities.</li>
<li><strong><a href="/itr-for-business">ITR for Business</a></strong> - Proprietorship and partnership ITR filing.</li>
<li><strong><a href="/itr-for-fno-trader">ITR for F&O Traders</a></strong> - F&O trading income ITR.</li>
<li><strong><a href="/internal-audit">Internal Audit</a></strong> - Tax audit and compliance services.</li>
<li><strong><a href="/gst-registration">GST Registration</a></strong> - GST registration for professionals.</li>
</ul>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 15A: LEGAL FRAMEWORK -->
<section class="content-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Legal Framework for Professional ITR</h2>
            <div class="content-text">
                
                <p><strong>Governing Law:</strong> <a href="https://www.incometax.gov.in" target="_blank" rel="noopener">Income Tax Act, 1961</a>.</p>
<ul>
<li><strong>Section 44ADA:</strong> Presumptive taxation - 50% of gross receipts. Limit Rs 75 lakh (95%+ digital) / Rs 50 lakh. No books, no audit, no lock-in.</li>
<li><strong>Section 44AA(1):</strong> Defines specified professions eligible for 44ADA.</li>
<li><strong>Section 44AB:</strong> Tax audit mandatory when receipts exceed Rs 75 lakh. Form 3CB + 3CD.</li>
<li><strong>Section 194J:</strong> 10% TDS on professional payments above Rs 50,000/year (FY 2025-26).</li>
<li><strong>Section 87A:</strong> Rebate under new regime - income up to Rs 12 lakh effectively tax-free.</li>
<li><strong>Section 234F:</strong> Late fee Rs 5,000 after due date. Rs 1,000 if income below Rs 5 lakh.</li>
<li><strong>Section 271B:</strong> Audit penalty 0.5% of receipts or Rs 1.5 lakh.</li>
</ul>
<p><strong>Due dates:</strong> 31 Aug 2026 (non-audit) / 31 Oct 2026 (audit). Audit report: 30 Sep 2026.</p>
<p><strong>GST:</strong> Rs 20 lakh threshold. 18% on most services. Medical exempt. LUT for exports.</p>
<p><strong>Portal:</strong> <a href="https://www.incometax.gov.in" target="_blank" rel="noopener">incometax.gov.in</a></p>

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
                    <h2 class="faq-expanded__title">Frequently Asked Questions - Professional ITR</h2>
                    <p class="faq-expanded__lead">Answers about ITR form selection, Section 44ADA eligibility, advance tax, TDS, GST, salaried + freelance, and required documents.</p>
                    @include('partials.bigin-form', [
                        'variant'  => 'compact',
                        'service'  => 'Professional ITR',
                    ])
                </aside>
                <div class="faq-expanded__list">
                    <div class="faq-expanded__item" id="faq-1">
                        <h3 class="faq-expanded__q">Which ITR form should a freelancer file in India?</h3>
                        <div class="faq-expanded__a"><p>File ITR-4 if opting for Section 44ADA presumptive taxation (gross receipts up to Rs 50 lakh, or Rs 75 lakh with 95%+ digital receipts). ITR-4 requires only gross receipts and 50% taxable income - no expense details. If not using 44ADA or receipts exceed limits, file ITR-3 with regular books of accounts. ITR-1 and ITR-2 are incorrect for professional income and trigger defective return notices.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-2">
                        <h3 class="faq-expanded__q">What is Section 44ADA and who can use it?</h3>
                        <div class="faq-expanded__a"><p>Presumptive taxation scheme for specified professionals under Section 44AA(1): doctors, lawyers, architects, engineers, CAs, technical consultants, interior decorators, movie artists, and authorised representatives. Declare 50% of gross receipts as taxable income - no books, no audit required. Chapter VI-A deductions (80C, 80D) still available. No 5-year lock-in unlike Section 44AD for businesses.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-3">
                        <h3 class="faq-expanded__q">Do freelancers need to pay advance tax?</h3>
                        <div class="faq-expanded__a"><p>Yes, if estimated tax liability exceeds Rs 10,000 after TDS credit. Regular professionals: four quarterly installments (15 Jun, 15 Sep, 15 Dec, 15 Mar). Section 44ADA users: 100% in ONE single installment by 15 March - a significant cash flow advantage (11 months free from advance tax compliance). Failure attracts interest under Sections 234B and 234C.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-4">
                        <h3 class="faq-expanded__q">Is TDS deducted on payments to freelancers?</h3>
                        <div class="faq-expanded__a"><p>Yes. Clients deduct 10% TDS under Section 194J on payments exceeding Rs 50,000/year per client (threshold increased from Rs 30,000 effective FY 2025-26). TDS appears in Form 26AS and is claimed as tax credit in ITR, reducing balance payable. International clients do not deduct TDS - full gross income must still be declared.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-5">
                        <h3 class="faq-expanded__q">Should freelancers register for GST?</h3>
                        <div class="faq-expanded__a"><p>Mandatory when gross receipts exceed Rs 20 lakh/year (Rs 10 lakh for NE and hill states). Most professional services attract 18% GST. Medical services by doctors are exempt. Freelancers serving foreign clients (Upwork, Fiverr, direct) should register and file LUT (Letter of Undertaking) annually for zero-rated export of services.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-6">
                        <h3 class="faq-expanded__q">Can a salaried person use Section 44ADA for freelance income?</h3>
                        <div class="faq-expanded__a"><p>Yes, if the freelance profession qualifies as specified under Section 44AA(1) and receipts are within limits. However, they must file ITR-3 (not ITR-1 or ITR-2) to report both salary and professional income. Form 10-IEA needed if opting out of new tax regime. No 5-year lock-in, so they can opt in/out of 44ADA each year.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-7">
                        <h3 class="faq-expanded__q">Freelancer ka ITR kaise file kare aur kya documents chahiye?</h3>
                        <div class="faq-expanded__a"><p>Freelancer ko ITR-4 (Section 44ADA ke saath) ya ITR-3 (regular books ke saath) file karni hoti hai. Documents: client payment summary, bank statements, Form 26AS, AIS, Form 16A certificates, aur agar foreign income hai toh FIRA. 44ADA mein 50% income declare karte hain, koi expense details nahi chahiye. Patron Accounting Rs 1,499 se shuru. Call: +91 945 945 6700.</p></div>
                    </div>
                </div>
            </div>


            <!-- Quick Answers -->
            <div class="highlight-box" style="margin-top:32px;">
                <p><strong>Quick Answers</strong></p>
                <p><strong>Q: ITR form for freelancers?</strong> A: ITR-4 (Section 44ADA) or ITR-3 (regular books). Never ITR-1 or ITR-2.</p>
<p><strong>Q: Section 44ADA income?</strong> A: 50% of gross receipts. Limit Rs 75 lakh (95%+ digital) or Rs 50 lakh standard.</p>
<p><strong>Q: Advance tax under 44ADA?</strong> A: ONE installment by 15 March. Not quarterly. 11-month cash flow advantage.</p>
<p><strong>Q: TDS on professional payments?</strong> A: 10% under Section 194J above Rs 50,000/year (FY 2025-26 threshold).</p>
<p><strong>Q: GST for freelancers?</strong> A: Mandatory above Rs 20 lakh. 18% GST. Medical exempt. LUT for foreign exports.</p>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 18: URGENCY CTA -->
<section class="content-section" style="background: var(--orange-lighter) !important; border-left: 4px solid var(--orange);">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Due Date: 31 August 2026 (Non-Audit) / 31 October 2026 (Audit)</h2>
            <div class="content-text">
                
                <p>Professional ITR due 31 August 2026 for non-audit cases. Tax audit (receipts above Rs 75 lakh): report by 30 September, ITR by 31 October 2026. Late fee: Rs 5,000 under Section 234F. Belated returns forfeit loss carry-forward rights. Audit penalty: 0.5% of receipts or Rs 1.5 lakh (Section 271B).</p>
<p>Section 44ADA advance tax: pay 100% by 15 March 2026 in one installment. Interest under 234B/234C for shortfall. AIS-ITR mismatches trigger Section 143(1) scrutiny.</p>
<p><strong>Action:</strong> <a href="tel:+919459456700">Call +91 945 945 6700</a> or <a href="https://wa.me/919459456700?text=Hello%2C%20I%20just%20visited%20your%20Professional%20ITR%20page.%20I%20would%20like%20to%20know%20more%20about%20it." target="_blank" rel="noopener">WhatsApp us</a> for a free consultation.</p>

            </div>
        </div>
    </div>
</section>

<!-- CONCLUSION + CTA BLOCK (Dark) -->
<section class="content-section" style="background: var(--blue) !important;">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title" style="color:#FFFFFF !important;">File Your Professional ITR with Expert CA Support</h2>
            <div class="content-text" style="text-align:left;">
                
                <p style="color:rgba(255,255,255,0.85);font-size:15px;line-height:1.8;">Professional and freelance ITR filing requires correct form selection (ITR-3 vs ITR-4), Section 44ADA eligibility verification, TDS reconciliation, and foreign income handling. The wrong form triggers defective return notices.</p>
<p style="color:rgba(255,255,255,0.85);font-size:15px;line-height:1.8;">Patron Accounting handles every dimension - 44ADA analysis, regime comparison, FIRA conversion, audit coordination, and salaried-plus-freelance combined returns.</p>
<p style="color:rgba(255,255,255,0.85);font-size:15px;line-height:1.8;">10,000+ professional ITRs filed. 4.9/5 Google Rating. 100% defect-free. Pune, Mumbai, Delhi, Gurugram. From Rs 1,499.</p>

            </div>
            <div style="display:flex;gap:14px;flex-wrap:wrap;margin-top:24px;">
                <a href="tel:+919459456700" style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:var(--orange);color:#fff;border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#128222; Call +91 945 945 6700</a>
                <a href="https://wa.me/919459456700?text=Hello%2C%20I%20just%20visited%20your%20Professional%20ITR%20page.%20I%20would%20like%20to%20know%20more%20about%20it." target="_blank" style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:#25D366;color:#fff;border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;" rel="noopener">&#128172; WhatsApp Us</a>
                <a href="mailto:sales@patronaccounting.com?subject=Enquiry%20for%20Professional%20ITR&body=Hello%2C%20I%20just%20visited%20your%20Professional%20ITR%20page.%20I%20would%20like%20to%20know%20more%20about%20it.%0A%0AThank%20you." style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:transparent;color:#fff;border:2px solid rgba(255,255,255,0.3);border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#9993;&#65039; Email Us</a>
            </div>
            <p style="color:rgba(255,255,255,0.7);font-size:13px;margin-top:16px;">Book a Free Consultation - No Obligation.</p>
        </div>
    </div>
</section>

<!-- GSTAT STATE BENCH CITY PAGES (32 Pages) -->
<section class="content-section" style="padding:48px 32px;background:var(--gray-50);">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title" style="text-align:center;margin-bottom:12px;">Professional ITR Filing Across India</h2>
            <p style="text-align:center;color:var(--text-muted);font-size:15px;margin-bottom:40px;">Expert CA-assisted ITR-3 and ITR-4 filing for professionals and freelancers with Section 44ADA and TDS reconciliation.</p>
     
            <div class="pa-city-block" style="margin-bottom:40px;"><div class="pa-city-grid"><a href="/itr-filing-for-freelancers-professionals/mumbai" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Mumbai</div><div class="pa-card-sub">Maharashtra</div></div></a><a href="/itr-filing-for-freelancers-professionals/delhi" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Delhi</div><div class="pa-card-sub">NCR</div></div></a><a href="/itr-filing-for-freelancers-professionals/gurugram" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Gurugram</div><div class="pa-card-sub">Haryana</div></div></a></div></div>
<div class="pa-city-block"><div class="pa-block-title">Related Services</div><div class="pa-block-sub">Tax filing and compliance</div><div class="pa-cross-grid"><a href="/income-tax-return" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Income Tax Return</div><div class="pa-card-sub">India</div></div></a><a href="/itr-for-business" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">ITR for Business</div><div class="pa-card-sub">India</div></div></a><a href="/itr-for-fno-trader" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">ITR for F and O</div><div class="pa-card-sub">India</div></div></a><a href="/internal-audit" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Internal Audit</div><div class="pa-card-sub">India</div></div></a><a href="/gst-registration" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">GST Registration</div><div class="pa-card-sub">India</div></div></a><a href="/income-tax-notice" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Income Tax Notice</div><div class="pa-card-sub">India</div></div></a></div></div>
        </div>
    </div>
</section>

<!-- CONTENT FRESHNESS FOOTER -->
<section class="content-section" style="padding:32px;">
    <div class="content-container">
        <div class="text-content" style="font-size:13px;color:var(--text-muted);">
            <p><strong>Content Created:</strong> 01 March 2026 &nbsp;|&nbsp; <strong>Last Updated:</strong> <span id="lastUpdatedFooter">01 March 2026</span> &nbsp;|&nbsp; <strong>Next Review:</strong> April 2027 (next AY) &nbsp;|&nbsp; <strong>Reviewed By:</strong> CA &amp; CS Team, Patron Accounting LLP</p>
            <p>This page covers ITR-3 and ITR-4 for FY 2025-26 (AY 2026-27). Section 44ADA, TDS thresholds, due dates per IT Act 1961 as amended by Finance Act 2024/2025. Verify at incometaxindia.gov.in.</p>
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
