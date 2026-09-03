

@extends('layouts.service-app')

<!-- External Dependencies (loaded by master layout in production) -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Barlow:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,400&family=DM+Sans:opsz,wght@9..40,400;9..40,500;9..40,600;9..40,700&display=swap" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

@section('meta')
    <title>GST Return Filing India - GSTR-1, GSTR-3B, Due Dates & ITC</title>
    <meta name="description" content="GST returns are periodic filings under CGST Act reporting sales, purchases, ITC and tax paid. Know 13 return types, due dates, late fees under Section 47 and filing process. Starts Rs 1,499.">
    <link rel="canonical" href="/gst-returns">
    <meta name="robots" content="index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1">
    <meta property="og:title" content="GST Return Filing India - GSTR-1, GSTR-3B, Due Dates & ITC">
    <meta property="og:description" content="GST returns are periodic filings under CGST Act reporting sales, purchases, ITC and tax paid. Know 13 return types, due dates, late fees under Section 47 and filing process. Starts Rs 1,499.">
    <meta property="og:url" content="/gst-returns">
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="Patron Accounting">
    <meta property="og:image" content="https://www.patronaccounting.com/images/og-default-square.png">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="1200">
    <meta property="og:image:type" content="image/png">
    <meta property="og:image:secure_url" content="https://www.patronaccounting.com/images/og-default-square.png">
    <meta property="og:image:alt" content="Patron Accounting - partner you can rely on">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="GST Return Filing India - GSTR-1, GSTR-3B, Due Dates & ITC">
    <meta name="twitter:description" content="GST returns are periodic filings under CGST Act reporting sales, purchases, ITC and tax paid. Know 13 return types, due dates, late fees under Section 47 and filing process. Starts Rs 1,499.">
    <meta name="twitter:image" content="https://www.patronaccounting.com/images/og-default-square.png">
@endsection

@section('schema')
    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@graph": [
        {
          "@type": "Service",
          "name": "GST Returns: Types, Due Dates and Filing",
          "description": "GST returns are periodic filings under CGST Act reporting sales, purchases, ITC and tax paid. Know 13 return types, due dates, late fees under Section 47 and filing process. Starts Rs 1,499.",
          "url": "https://www.patronaccounting.com/gst-returns",
          "serviceType": "GST Returns: Types, Due Dates and Filing",
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
            "url": "https://www.patronaccounting.com/gst-returns",
            "priceSpecification": {
              "@type": "PriceSpecification",
              "minPrice": "50",
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
              "name": "GST Returns: Types, Due Dates and Filing",
              "item": "https://www.patronaccounting.com/gst-returns"
            }
          ]
        },
        {
          "@type": "FAQPage",
          "mainEntity": [
            {
              "@type": "Question",
              "name": "What is a GST return and who needs to file it?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "A GST return is a periodic document filed by every registered taxpayer under the CGST Act, 2017, declaring sales, purchases, ITC claimed, and net tax liability. Every person with GST registration must file, including Nil returns for zero-transaction periods. Specific forms depend on taxpayer category: regular file GSTR-1/3B, composition file CMP-08/GSTR-4."
              }
            },
            {
              "@type": "Question",
              "name": "What is the difference between GSTR-1 and GSTR-3B?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "GSTR-1 under Section 37 reports all outward supplies with invoice-level B2B data, HSN summary, and export details - it is a reporting return with no tax payment. GSTR-3B under Section 39 is a summary return where total liability is declared, ITC claimed, and net tax paid. GSTR-1 data auto-populates buyers' GSTR-2B for ITC verification."
              }
            },
            {
              "@type": "Question",
              "name": "What is the penalty for late filing?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "Late fee of Rs 50/day CGST + Rs 50/day SGST (Rs 100/day total) under Section 47, capped at Rs 5,000 per Act (Rs 10,000 total) per return. Nil returns: Rs 10/day per Act, capped at Rs 500. Additionally, interest at 18% per annum under Section 50 applies on any unpaid tax. The portal blocks subsequent filings until pending returns are cleared."
              }
            },
            {
              "@type": "Question",
              "name": "What is the QRMP scheme?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "The Quarterly Return Monthly Payment scheme allows taxpayers with turnover up to Rs 5 crore to file GSTR-1 and GSTR-3B quarterly instead of monthly. Tax must still be paid monthly via PMT-06 by the 25th. The Invoice Furnishing Facility (IFF) lets you upload B2B invoices in non-filing months so buyers can claim ITC without waiting."
              }
            },
            {
              "@type": "Question",
              "name": "Can I file a GST return after 3 years?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "From January 2026, no. The GST portal prevents filing returns more than 3 years past the due date. They become permanently unfiled. Audit all pending returns immediately and file any approaching the 3-year window before they become time-barred."
              }
            },
            {
              "@type": "Question",
              "name": "What happens if I do not file?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "Non-filing triggers daily late fees, 18% interest on unpaid tax, blocking of subsequent filings and e-way bills, ITC denial to buyers, best-judgment assessment under Section 62, suspension and cancellation of registration under Section 29, and demand notices under Section 73 or 74A."
              }
            },
            {
              "@type": "Question",
              "name": "How much does a CA charge?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "Fees vary from Rs 1,000 to Rs 5,000/month. At Patron Accounting: monthly GSTR-1 + GSTR-3B from Rs 1,499/month, quarterly QRMP from Rs 2,999/quarter, annual GSTR-9 from Rs 4,999, GSTR-9C from Rs 9,999. Free initial assessment available. Quick Answers What are GST returns? Periodic filings under CGST Act declaring sales, purchases, ITC, and tax. Key returns: GSTR-1 (sales), GSTR-3B (summary + payment), GSTR-9 (annual). GSTR-3B due date? 20th of the following month (monthly). 22nd or 24th for QRMP (state-based). Late fee? Rs 50/day CGST + Rs 50/day SGST (Rs 100/day total), capped at Rs 10,000 per return. 18% interest on unpaid tax. Nil return required? Yes. Mandatory even with zero transactions. Can be filed via SMS."
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
                        GST Returns - Types, Due Dates, Late Fees and How to File Online in 2026
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
                            <p class="mb-0 text-dark benefit-paragraph"><span>Coverage:</span> 13 types of GST returns - GSTR-1, GSTR-3B, GSTR-4, GSTR-5, GSTR-6, GSTR-7, GSTR-8, GSTR-9, GSTR-9C, GSTR-10, GSTR-11, CMP-08, ITC-04</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Due Dates:</span> GSTR-1 by 11th | GSTR-3B by 20th of following month. Annual GSTR-9 by 31st December. Quarterly under QRMP scheme.</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Late Fee:</span> Section 47: Rs 50/day CGST + Rs 50/day SGST (Rs 100/day total), capped at Rs 10,000 per return. Interest 18% p.a. under Section 50.</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Starting Fee:</span> Monthly GSTR-1 + GSTR-3B filing from Rs 1,499/month. 1,200+ GSTINs managed with 99.5% on-time filing rate.</p>
                        </div>
                    </div>

                    <p class="mb-4 fw-bold" style="color: var(--blue); font-size: 15px;">1,200+ GSTINs managed with 99.5% on-time filing rate across manufacturing, trading, IT, and e-commerce</p>

                    <div class="hero-cta">
                        <a href="tel:+919459456700" class="btn-video text-decoration-none">
                            <span class="play-circle"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="width:14px;height:14px;color:#fff"><path d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/></svg></span>
                            Call +91 945 945 6700
                        </a>
                        <a href="mailto:sales@patronaccounting.com?subject=Enquiry%20for%20GST%20Returns&body=Hello%2C%20I%20just%20visited%20your%20GST%20Returns%20page.%20I%20would%20like%20to%20know%20more%20about%20it.%0A%0AThank%20you." class="btn-sample text-decoration-none">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="width:18px;height:18px;"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,12 2,6"/></svg>
                            Email Us
                        </a>
                        <a href="https://wa.me/919459456700?text=Hello%2C%20I%20just%20visited%20your%20GST%20Returns%20page.%20I%20would%20like%20to%20know%20more%20about%20it." target="_blank" class="btn-sample text-decoration-none" rel="noopener">
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
                                            'service'  => 'GST Returns',
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
    'ctaText'    => 'Expert GST return filing - monthly GSTR-1/3B, quarterly QRMP, annual GSTR-9/9C, ITC reconciliation under the CGST Act, 2017.',
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
            <a class="toc-btn" href="#overview-section">Overview</a><a class="toc-btn" href="#what-section">What Is It</a><a class="toc-btn" href="#who-section">Who Must File</a><a class="toc-btn" href="#services-section">Our Services</a><a class="toc-btn" href="#procedure-section">How to File</a><a class="toc-btn" href="#documents-section">Documents</a><a class="toc-btn" href="#challenges-section">Challenges</a><a class="toc-btn" href="#fees-section">Fees</a><a class="toc-btn" href="#timeline-section">Due Dates</a><a class="toc-btn" href="#benefits-section">Benefits</a><a class="toc-btn" href="#comparison-section">All 14 Forms</a><a class="toc-btn" href="#faq-section">FAQs</a>
        </div>
        <button class="toc-arrow right" id="tocRight">&#10095;</button>
    </div>
</div>

<!-- SECTION 2: OVERVIEW / INTRO + TL;DR -->
<section class="content-section" id="overview-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">GST Returns - Complete Overview</h2>
            <div class="content-text">
                <div class="highlight-box" style="margin-bottom:20px;">
                    <p><strong>&#128204; TL;DR - GST Returns Services at a Glance</strong></p>
                    <p>GST returns are mandatory periodic filings under CGST Act declaring sales, purchases, ITC, and tax paid. Regular taxpayers file GSTR-1 (by 11th) and GSTR-3B (by 20th) monthly, plus GSTR-9 annually by 31st December. Late filing attracts Rs 50/day per Act (Section 47) capped at Rs 5,000, plus 18% interest. Professional filing from Rs 1,499/month.</p><div class="table-responsive-wrapper" style="margin-top:16px;"><table><thead><tr><th>Parameter</th><th>Details</th></tr></thead><tbody><tr><td>What are GST Returns</td><td>Periodic filings declaring sales, purchases, ITC, and tax liability under CGST Act, 2017</td></tr><tr><td>Governing Law</td><td>Sections 37, 39, 44, 45, 47, 52 of CGST Act, 2017</td></tr><tr><td>Key Return Forms</td><td>GSTR-1 (sales), GSTR-3B (summary), GSTR-9 (annual), GSTR-4 (composition), CMP-08</td></tr><tr><td>Monthly Due Dates</td><td>GSTR-1 by 11th, GSTR-3B by 20th of following month</td></tr><tr><td>Late Fee (Section 47)</td><td>Rs 50/day CGST + Rs 50/day SGST (Rs 100/day), max Rs 10,000 per return</td></tr><tr><td>Interest on Late Payment</td><td>18% per annum under Section 50 of CGST Act</td></tr><tr><td>Patron Fee</td><td>Starting Rs 1,499/month for GSTR-1 and GSTR-3B filing</td></tr></tbody></table></div><p style="margin-top:0;"></p>
                </div>
                <p>GST returns are periodic filings that every registered taxpayer must submit under the CGST Act, 2017. These declare sales, purchases, ITC claimed, and tax liability. With the GSTN enforcing sequential filing, real-time ledger validations, and a 3-year filing bar from January 2026, timely and accurate filing has become more critical than ever.</p>
                <p>India's GST regime mandates 13 different return forms. Regular taxpayers file 25 returns per year. Missing even one deadline triggers cascading penalties - the portal blocks subsequent filings, late fees accumulate at Rs 100/day, and interest accrues at 18% on unpaid tax. Patron Accounting manages 1,200+ GSTINs from offices in Pune, Mumbai, Delhi, and Gurugram.</p>
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
                <h2 class="section-title">What Is a GST Return?</h2>
                <div class="content-text what-is-definition">
                    
                    <p>A GST return is a periodic document filed by a registered taxpayer under the CGST Act, 2017, declaring outward supplies, inward supplies, input tax credit claimed, and net tax liability for the applicable tax period.</p><p>The two primary returns for regular taxpayers are GSTR-1 (outward supplies under Section 37, due by 11th) and GSTR-3B (summary and tax payment under Section 39, due by 20th). The annual return GSTR-9 (under Section 44) consolidates all monthly/quarterly data.</p><p>From January 2026, the GST portal bars filing returns more than 3 years past the due date. GSTR-3B hard-locking from July 2025 means auto-populated figures cannot be modified without explanation.</p>

                </div>
                <div class="highlight-box" style="margin-top:20px;">
                    <p><strong>Key Terms for GST Returns:</strong></p>
                    <p><strong>GSTR-1</strong> - Monthly/quarterly return under Section 37 reporting all outward supplies with invoice-level B2B details. Auto-populates buyers' GSTR-2B for ITC claims.</p><p><strong>GSTR-3B</strong> - Monthly summary return under Section 39. Declares total liability, claims ITC, pays net tax due. Where actual tax payment happens.</p><p><strong>QRMP Scheme</strong> - Quarterly Return Monthly Payment for turnover up to Rs 5 crore. Quarterly GSTR-1/3B with monthly PMT-06 tax payment.</p><p><strong>3-Year Filing Bar</strong> - From January 2026, returns older than 3 years cannot be filed on the portal. Permanently unfiled.</p>

                </div>
            </div>
            <div class="column-image">
                <div class="illustration-placeholder">
                    <div class="illustration-icon" style="max-width:240px;">
                        <svg viewBox="0 0 200 180" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="30" y="20" width="140" height="95" rx="8" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><rect x="30" y="20" width="140" height="22" rx="8" fill="#14365F"/><text x="100" y="35" font-size="9" fill="#fff" font-weight="700" text-anchor="middle" font-family="Arial, sans-serif">GST RETURNS</text><rect x="45" y="52" width="45" height="16" rx="3" fill="#FFF3E0" stroke="#F5A623" stroke-width="1"/><text x="67" y="63" font-size="6" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">GSTR-1</text><rect x="105" y="52" width="50" height="16" rx="3" fill="#E8F5E9" stroke="#25D366" stroke-width="1"/><text x="130" y="63" font-size="6" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">GSTR-3B</text><rect x="65" y="78" width="70" height="16" rx="3" fill="#F0F4F8" stroke="#14365F" stroke-width="1"/><text x="100" y="89" font-size="6" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">GSTR-9 ANNUAL</text><rect x="25" y="135" width="55" height="18" rx="4" fill="#FFF3E0" stroke="#F5A623" stroke-width="1"/><text x="52" y="147.5" font-size="6" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial, sans-serif">11th + 20th</text><circle cx="165" cy="30" r="16" fill="#E8F5E9" stroke="#25D366" stroke-width="1.5"/><text x="165" y="34" font-size="6" fill="#25D366" font-weight="700" text-anchor="middle" font-family="Arial, sans-serif">1200+</text><text x="100" y="170" font-size="10" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial, sans-serif">GST Return Filing</text></svg>
                    </div>
                    <div class="illustration-badge">
                        <span>CGST Act 2017</span>
                        <strong>GST Return Filing</strong>
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
            <h2 class="section-title">Who Must File GST Returns?</h2>
            <div class="content-text">
                
                <ul><li><strong>Regular Taxpayers:</strong> GSTR-1 and GSTR-3B monthly (or quarterly under QRMP), plus GSTR-9 annually. 25 returns per year for monthly filers.</li><li><strong>Composition Dealers:</strong> CMP-08 quarterly + GSTR-4 annually (5 returns/year). Turnover up to Rs 1.5 crore under Section 10.</li><li><strong>E-Commerce Operators:</strong> GSTR-8 monthly reporting TCS on platform supplies (Amazon, Flipkart, Swiggy)</li><li><strong>TDS Deductors:</strong> GSTR-7 monthly for government departments deducting tax under Section 51</li><li><strong>Input Service Distributors:</strong> GSTR-6 monthly distributing ITC across branches. Mandatory ISD registration from April 2025.</li><li><strong>Non-Resident Taxable Persons:</strong> GSTR-5 monthly for foreign businesses temporarily operating in India</li><li><strong>Cancelled Registrations:</strong> GSTR-10 (final return) within 3 months of cancellation</li></ul><p><strong>Note:</strong> Every registered person must file returns even with zero transactions (Nil return) under Section 39(7).</p>

            </div>
            </div>
        </div>
    </div>
</section>

<!-- SECTION 5: OUR SERVICES -->
<section class="content-section" id="services-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Our GST Return Filing Services</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Service</th><th>What We Do</th></tr></thead>
                    <tbody>
                        <tr><td>Monthly GSTR-1 and GSTR-3B Filing</td><td>Invoice-level sales data upload, ITC reconciliation with GSTR-2B, tax computation, and return submission via DSC or EVC on <a href="https://www.gst.gov.in" target="_blank" rel="noopener">gst.gov.in</a></td></tr><tr><td>Quarterly QRMP Filing</td><td>Quarterly GSTR-1 and GSTR-3B with monthly PMT-06 tax payment and Invoice Furnishing Facility (IFF) support for B2B invoices</td></tr><tr><td>Annual Return (GSTR-9 and GSTR-9C)</td><td>Consolidation of yearly transactions, reconciliation with books, and self-certified reconciliation statement for turnover above Rs 5 crore</td></tr><tr><td>GSTR-2B Reconciliation</td><td>Monthly matching of purchase register with auto-populated GSTR-2B to identify ITC mismatches before GSTR-3B filing</td></tr><tr><td>Composition Scheme Filing</td><td>CMP-08 quarterly payment and GSTR-4 annual return for composition dealers under Section 10</td></tr><tr><td>Remediation and Catch-Up Filing</td><td>Filing pending returns, resolving cascading blocks, and managing late fee payments for multiple pending periods</td></tr>

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
            <h2 class="section-title">How to File GST Returns Online</h2>
            <p class="section-subtitle" style="text-align:left;max-width:100%;">Step-by-step process for filing GSTR-1 and GSTR-3B via the GST portal under Sections 37 and 39 of the CGST Act, 2017.</p>
        </header>
        <div class="steps-container">
            <div class="step-card"><div class="step-content"><span class="step-badge">Step 1</span><h3 class="step-title">Aggregate Invoices</h3><p class="step-description">Collect all sales invoices, purchase bills, credit notes, and debit notes for the tax period. Ensure all e-invoices and e-way bills are accounted for.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> All invoices collected</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> E-invoices verified</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="10" y="10" width="40" height="55" rx="4" fill="#F0F4F8" stroke="#14365F" stroke-width="1.2"/><rect x="40" y="15" width="40" height="55" rx="4" fill="#F0F4F8" stroke="#14365F" stroke-width="1.2"/><rect x="70" y="10" width="40" height="55" rx="4" fill="#F0F4F8" stroke="#14365F" stroke-width="1.2"/></svg></div><span class="illustration-label">Data Ready</span><span class="step-number-large">01</span></div></div></div>
<div class="step-card"><div class="step-content"><span class="step-badge">Step 2</span><h3 class="step-title">Reconcile with GSTR-2B</h3><p class="step-description">Match your purchase register with the auto-generated GSTR-2B available on the 14th of each month. Identify missing credits and follow up with vendors before filing deadline.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> GSTR-2B matched</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Vendor follow-ups done</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="20" y="10" width="80" height="65" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><rect x="30" y="22" width="60" height="8" rx="2" fill="#E8F5E9" stroke="#25D366" stroke-width="0.8"/><rect x="30" y="34" width="60" height="8" rx="2" fill="#FFF3E0" stroke="#F5A623" stroke-width="0.8"/><text x="60" y="29" font-size="5" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">GSTR-2B</text><text x="60" y="41" font-size="5" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">PURCHASE</text></svg></div><span class="illustration-label">ITC Reconciled</span><span class="step-number-large">02</span></div></div></div>
<div class="step-card"><div class="step-content"><span class="step-badge">Step 3</span><h3 class="step-title">Log in to GST Portal</h3><p class="step-description">Log in at www.gst.gov.in using GSTIN and password. Navigate to Services > Returns > Returns Dashboard. Select the return period.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Portal accessed</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Return period selected</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="15" y="10" width="90" height="65" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><rect x="15" y="10" width="90" height="16" rx="6" fill="#14365F"/><text x="60" y="22" font-size="7" fill="#fff" font-weight="700" text-anchor="middle" font-family="Arial">gst.gov.in</text><rect x="30" y="38" width="60" height="10" rx="3" fill="#FFF3E0" stroke="#F5A623" stroke-width="0.8"/></svg></div><span class="illustration-label">Portal Ready</span><span class="step-number-large">03</span></div></div></div>
<div class="step-card"><div class="step-content"><span class="step-badge">Step 4</span><h3 class="step-title">Upload and File GSTR-1</h3><p class="step-description">Upload invoice data - B2B invoices, B2C large and small, exports, credit/debit notes, HSN summary, nil-rated supplies. Review and file using DSC or EVC by the 11th.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> GSTR-1 uploaded</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Filed by 11th</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="15" y="5" width="90" height="75" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><rect x="15" y="5" width="90" height="16" rx="6" fill="#14365F"/><text x="60" y="17" font-size="7" fill="#fff" font-weight="700" text-anchor="middle" font-family="Arial">GSTR-1</text><line x1="28" y1="32" x2="92" y2="32" stroke="#F5A623" stroke-width="2" stroke-linecap="round"/><text x="60" y="50" font-size="6" fill="#14365F" font-weight="600" text-anchor="middle" font-family="Arial">B2B + B2C + HSN</text></svg></div><span class="illustration-label">GSTR-1 Filed</span><span class="step-number-large">04</span></div></div></div>
<div class="step-card"><div class="step-content"><span class="step-badge">Step 5</span><h3 class="step-title">Complete GSTR-3B</h3><p class="step-description">After GSTR-1, navigate to GSTR-3B. System auto-populates liability from GSTR-1 and ITC from GSTR-2B. Validate, adjust for reversals and exempt supplies.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Auto-populated validated</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Adjustments made</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="15" y="5" width="90" height="75" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><rect x="15" y="5" width="90" height="16" rx="6" fill="#14365F"/><text x="60" y="17" font-size="7" fill="#fff" font-weight="700" text-anchor="middle" font-family="Arial">GSTR-3B</text><line x1="28" y1="35" x2="92" y2="35" stroke="#F5A623" stroke-width="2" stroke-linecap="round"/><text x="60" y="52" font-size="6" fill="#14365F" font-weight="600" text-anchor="middle" font-family="Arial">ITC + TAX</text></svg></div><span class="illustration-label">GSTR-3B Ready</span><span class="step-number-large">05</span></div></div></div>
<div class="step-card"><div class="step-content"><span class="step-badge">Step 6</span><h3 class="step-title">Pay Tax and Submit GSTR-3B</h3><p class="step-description">Compute net tax after offsetting ITC. Pay via electronic cash ledger (net banking, NEFT, RTGS). Submit and file GSTR-3B using DSC or EVC by the 20th. Download acknowledgement.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Tax paid</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Filed by 20th</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="20" y="10" width="80" height="65" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><circle cx="60" cy="38" r="18" fill="#E8F5E9" stroke="#25D366" stroke-width="1.5"/><path d="M52 38l5 5 11-11" stroke="#25D366" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"/><text x="60" y="68" font-size="6" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">BY 20TH</text></svg></div><span class="illustration-label">Returns Complete</span><span class="step-number-large">06</span></div></div></div>

        </div>
    </div>
</section>

<!-- SECTION 8: DOCUMENTS REQUIRED -->
<section class="content-section" id="documents-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Documents Required for GST Return Filing</h2>
            <div class="content-text">
                
                <ul><li><strong>All sales invoices</strong> issued during the period (B2B and B2C)</li><li><strong>Purchase invoices</strong> from registered and unregistered suppliers</li><li><strong>Credit notes and debit notes</strong> issued or received</li><li><strong>Bank statements</strong> showing tax payments</li><li><strong>Previous period GSTR-1 and GSTR-3B</strong> filed copies</li><li><strong>GSTR-2B</strong> auto-populated ITC statement (available from 14th)</li><li><strong>E-way bill records</strong> (if applicable)</li><li><strong>HSN-wise summary</strong> of outward and inward supplies</li><li><strong>RCM liability details</strong> for reverse charge supplies</li><li><strong>DSC or registered mobile</strong> for EVC verification</li></ul>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 9: CHALLENGES -->
<section class="content-section" id="challenges-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Common GST Return Filing Challenges</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Challenge</th><th>Impact</th><th>How Patron Accounting Solves It</th></tr></thead>
                    <tbody>
                        <tr><td>GSTR-1 vs GSTR-3B Mismatch</td><td>Discrepancies trigger scrutiny notices from the department</td><td>Run monthly reconciliation before filing. Use GSTR-2B data to cross-verify. File GSTR-1A amendments before GSTR-3B.</td></tr><tr><td>ITC Exceeds GSTR-2B</td><td>Excess ITC claims lead to demand notices and interest</td><td>Reconcile ITC monthly. Reverse excess in next period with interest. Follow up with vendors for missing invoices.</td></tr><tr><td>Cascading Filing Blocks</td><td>Cannot file current month if previous month is pending</td><td>Prioritise clearing oldest pending return. Pay late fees in cash ledger. Engage CA for catch-up filing.</td></tr><tr><td>3-Year Filing Bar (Jan 2026)</td><td>Returns older than 3 years become permanently unfiled</td><td>Audit all pending returns immediately. File any approaching the 3-year window before they become time-barred.</td></tr>

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
            <h2 class="section-title">GST Return Filing Fees</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Fee Component</th><th>Amount</th></tr></thead>
                    <tbody>
                        <tr><td>Monthly GSTR-1 and GSTR-3B Filing</td><td>Starting from INR 1,499/month</td></tr><tr><td>Quarterly QRMP Filing (GSTR-1 + GSTR-3B + PMT-06)</td><td>Rs 2,999/quarter</td></tr><tr><td>Annual Return GSTR-9</td><td>Starting from Rs 4,999</td></tr><tr><td>GSTR-9C Reconciliation (Turnover > Rs 5 Cr)</td><td>Starting from Rs 9,999</td></tr><tr><td>Composition Scheme (CMP-08 + GSTR-4)</td><td>Rs 999/quarter</td></tr><tr><td>Catch-Up Filing (Pending Returns)</td><td>Rs 999/return</td></tr><tr><td>GSTR-2B Monthly Reconciliation</td><td>Rs 499/month</td></tr>

                    </tbody>
                </table>
                </div>
                <p style="margin-top:16px;font-size:13px;color:var(--text-muted);font-style:italic;">All fees and charges listed are indicative only and do not constitute a binding offer. Final amounts may vary depending on the volume of work and the complexity involved.</p>
                <p style="margin-top:16px;">Professional service charges for drafting, filing, and representation are separate from the statutory fees. The exact fee depends on the complexity of the case, disputed amount, and number of hearings required. Contact us for a detailed quote.</p>
                <p style="margin-top:16px;"><strong>Get a free GST Returns consultation - <a href="tel:+919459456700">Call +91 945 945 6700</a> or <a href="https://wa.me/919459456700?text=Hello%2C%20I%20just%20visited%20your%20GST%20Returns%20page.%20I%20would%20like%20to%20know%20more%20about%20it." target="_blank" rel="noopener">WhatsApp us</a>. No-obligation assessment.</strong></p>
            </div>
        </div>
    </div>
</section>

<!-- SECTION 11: TIMELINE -->
<section class="content-section" id="timeline-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">GST Return Due Dates</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Stage</th><th>Estimated Timeline</th></tr></thead>
                    <tbody>
                        <tr><td>GSTR-1 (Monthly)</td><td>11th of next month | Our turnaround: by 9th</td></tr><tr><td>GSTR-1 (Quarterly - QRMP)</td><td>13th of month after quarter | By 11th</td></tr><tr><td>GSTR-3B (Monthly)</td><td>20th of next month | By 18th</td></tr><tr><td>GSTR-3B (Quarterly - QRMP)</td><td>22nd or 24th (state-based) | By 20th/22nd</td></tr><tr><td>CMP-08 (Composition)</td><td>18th of month after quarter | By 15th</td></tr><tr><td>GSTR-9 / GSTR-9C (Annual)</td><td>31st December | By 15th December</td></tr><tr><td>GSTR-4 (Composition Annual)</td><td>30th April | By 20th April</td></tr>

                    </tbody>
                </table>
                </div>
                <div class="highlight-box" style="margin-top:16px;">
                    
                    <p><strong>Critical:</strong> The GST portal blocks subsequent return filing until pending returns with late fees are cleared. From January 2026, returns older than 3 years become permanently unfiled. GSTR-3B hard-locking from July 2025 means auto-populated figures require explanation for modification. File 2-3 days before deadlines to avoid last-minute portal issues.</p>

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
            <h2 class="section-title">Benefits of Professional GST Return Filing</h2>
        </div>
        <div class="features-grid" style="display:grid;grid-template-columns:repeat(3,1fr);gap:24px;"><article class="feature-card" style="background:var(--white);border:1px solid var(--gray-200);border-radius:var(--radius-lg);padding:28px;"><div style="width:48px;height:48px;background:var(--orange-light);border-radius:var(--radius-md);display:flex;align-items:center;justify-content:center;margin-bottom:16px;"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M22 11.08V12a10 10 0 11-5.93-9.14"/><path d="M22 4L12 14.01l-3-3"/></svg></div><h3 style="font-size:17px;font-weight:700;color:var(--blue);margin-bottom:8px;">Accuracy in Data Entry</h3><p style="font-size:14px;color:var(--text-secondary);line-height:1.6;margin:0;">Invoice-level verification reduces GSTR-1 vs GSTR-3B mismatches that trigger scrutiny notices from the department</p></article><article class="feature-card" style="background:var(--white);border:1px solid var(--gray-200);border-radius:var(--radius-lg);padding:28px;"><div style="width:48px;height:48px;background:var(--orange-light);border-radius:var(--radius-md);display:flex;align-items:center;justify-content:center;margin-bottom:16px;"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><line x1="12" y1="1" x2="12" y2="23"/><path d="M17 5H9.5a3.5 3.5 0 000 7h5a3.5 3.5 0 010 7H6"/></svg></div><h3 style="font-size:17px;font-weight:700;color:var(--blue);margin-bottom:8px;">ITC Optimisation</h3><p style="font-size:14px;color:var(--text-secondary);line-height:1.6;margin:0;">Monthly GSTR-2B reconciliation ensures maximum eligible ITC is claimed without exceeding auto-populated limits</p></article><article class="feature-card" style="background:var(--white);border:1px solid var(--gray-200);border-radius:var(--radius-lg);padding:28px;"><div style="width:48px;height:48px;background:var(--orange-light);border-radius:var(--radius-md);display:flex;align-items:center;justify-content:center;margin-bottom:16px;"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><path d="M12 6v6l4 2"/></svg></div><h3 style="font-size:17px;font-weight:700;color:var(--blue);margin-bottom:8px;">On-Time Filing</h3><p style="font-size:14px;color:var(--text-secondary);line-height:1.6;margin:0;">Dedicated CA ensures returns are filed 2-3 days before deadline, eliminating late fees under Section 47 and interest under Section 50</p></article><article class="feature-card" style="background:var(--white);border:1px solid var(--gray-200);border-radius:var(--radius-lg);padding:28px;"><div style="width:48px;height:48px;background:var(--orange-light);border-radius:var(--radius-md);display:flex;align-items:center;justify-content:center;margin-bottom:16px;"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg></div><h3 style="font-size:17px;font-weight:700;color:var(--blue);margin-bottom:8px;">Compliance Continuity</h3><p style="font-size:14px;color:var(--text-secondary);line-height:1.6;margin:0;">No cascading blocks from missed filings - uninterrupted e-way bill generation, ITC flow, and portal access maintained</p></article><article class="feature-card" style="background:var(--white);border:1px solid var(--gray-200);border-radius:var(--radius-lg);padding:28px;"><div style="width:48px;height:48px;background:var(--orange-light);border-radius:var(--radius-md);display:flex;align-items:center;justify-content:center;margin-bottom:16px;"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M14 2H6a2 2 0 00-2 2v16a2 2 0 002 2h12a2 2 0 002-2V8z"/><path d="M14 2v6h6M16 13H8M16 17H8"/></svg></div><h3 style="font-size:17px;font-weight:700;color:var(--blue);margin-bottom:8px;">Penalty Avoidance</h3><p style="font-size:14px;color:var(--text-secondary);line-height:1.6;margin:0;">Proactive identification and correction of discrepancies before they trigger demand notices under Section 73 or 74A</p></article></div>
    </div>
</section>

<!-- SECTION 12A: SOCIAL PROOF -->
<section class="content-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Why Businesses Trust Patron Accounting</h2>
            <div class="content-text">
                
                <p><strong>1,200+ GSTINs managed</strong> across manufacturing, trading, IT services, and e-commerce. <strong>99.5% on-time filing rate</strong> with zero missed deadlines in FY 2025-26. <strong>4.8/5 Google rating</strong> from 200+ verified reviews. Offices in Pune, Mumbai, Delhi, and Gurugram serving clients across all 28 states.</p>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 13: SELF-FILING vs PROFESSIONAL COMPARISON -->
<section class="content-section" id="comparison-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Complete List of GST Return Forms</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Form</th><th>Filed By</th><th>Frequency</th><th>Section</th></tr></thead>
                    <tbody>
                        <tr><td>GSTR-1</td><td>Regular taxpayers</td><td>Monthly (11th) / Quarterly (13th)</td><td>Section 37</td></tr><tr><td>GSTR-1A</td><td>Regular (amendments)</td><td>After GSTR-1, before GSTR-3B</td><td>Section 37</td></tr><tr><td>GSTR-3B</td><td>Regular taxpayers</td><td>Monthly (20th) / Quarterly</td><td>Section 39</td></tr><tr><td>GSTR-4</td><td>Composition dealers</td><td>Annually (30th April)</td><td>Section 44</td></tr><tr><td>GSTR-5</td><td>Non-resident taxable persons</td><td>Monthly (20th)</td><td>Section 45</td></tr><tr><td>GSTR-6</td><td>Input Service Distributors</td><td>Monthly (13th)</td><td>Section 39</td></tr><tr><td>GSTR-7</td><td>TDS deductors</td><td>Monthly (10th)</td><td>Section 51</td></tr><tr><td>GSTR-8</td><td>E-commerce operators (TCS)</td><td>Monthly (10th)</td><td>Section 52</td></tr><tr><td>GSTR-9</td><td>Regular (> Rs 2 Cr)</td><td>Annually (31st Dec)</td><td>Section 44</td></tr><tr><td>GSTR-9C</td><td>Turnover > Rs 5 Cr</td><td>Annually (31st Dec)</td><td>Section 44</td></tr><tr><td>GSTR-10</td><td>Cancelled registrations</td><td>Within 3 months</td><td>Section 45</td></tr><tr><td>CMP-08</td><td>Composition dealers</td><td>Quarterly (18th)</td><td>Rule 62</td></tr>

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
            <h2 class="section-title">Related GST and Compliance Services</h2>
            <div class="content-text">
                
                <ul><li><a href="/gst-registration">GST Registration</a> - For new businesses requiring GSTIN</li><li><a href="/gst-notice">GST Notice</a> - Expert reply assistance for scrutiny and demand notices</li><li><a href="#">GST Cancellation</a> - Voluntary cancellation or revocation</li><li><a href="/gst-annual-returns">GST Annual Return</a> - Dedicated GSTR-9 and GSTR-9C service</li><li><a href="/accounting-services">Bookkeeping Services</a> - Accurate books for error-free returns</li></ul>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 15A: LEGAL FRAMEWORK -->
<section class="content-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Legal Framework - Late Fees and Penalties</h2>
            <div class="content-text">
                
                <div class="table-responsive-wrapper"><table><thead><tr><th>Provision</th><th>Details</th></tr></thead><tbody><tr><td><a href="https://www.gst.gov.in" target="_blank" rel="noopener">Section 47 - Late Fee</a></td><td>Rs 50/day CGST + Rs 50/day SGST (Rs 100/day total), capped at Rs 5,000 per Act (Rs 10,000 total). Nil returns: Rs 10/day per Act, capped at Rs 500.</td></tr><tr><td>Section 50 - Interest</td><td>18% per annum on net tax liability from due date to actual payment date. Calculated daily.</td></tr><tr><td>GSTR-9 Late Fee</td><td>Rs 100/day (Rs 50 CGST + Rs 50 SGST) or 0.25% of turnover in state, whichever is higher.</td></tr><tr><td>3-Year Filing Bar (Jan 2026)</td><td>GST portal prevents filing returns more than 3 years past due date. Returns become permanently unfiled.</td></tr><tr><td>Section 122 - Penalty</td><td>10% of tax due or Rs 10,000 whichever is higher. Fraud: up to 100% of tax due.</td></tr></tbody></table></div><p><strong>Madras HC Ruling (2026):</strong> No double penalty for same delay - department cannot impose both Section 47 late fee and Section 125 general penalty simultaneously.</p><p><strong>Portal:</strong> <a href="https://www.gst.gov.in" target="_blank" rel="noopener">GST Portal</a> | <a href="https://taxinformation.cbic.gov.in" target="_blank" rel="noopener">CBIC</a></p>

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
                    <h2 class="faq-expanded__title">Frequently Asked Questions - GST Returns</h2>
                    <p class="faq-expanded__lead">Expert answers about GST return types, due dates, late fees, QRMP scheme, and the 2026 filing changes.</p>
                    @include('partials.bigin-form', [
                        'variant'  => 'compact',
                        'service'  => 'GST Returns',
                    ])
                </aside>
                <div class="faq-expanded__list">
                    <div class="faq-expanded__item" id="faq-1">
                        <h3 class="faq-expanded__q">What is a GST return and who needs to file it?</h3>
                        <div class="faq-expanded__a"><p>A GST return is a periodic document filed by every registered taxpayer under the CGST Act, 2017, declaring sales, purchases, ITC claimed, and net tax liability. Every person with GST registration must file, including Nil returns for zero-transaction periods. Specific forms depend on taxpayer category: regular file GSTR-1/3B, composition file CMP-08/GSTR-4.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-2">
                        <h3 class="faq-expanded__q">What is the difference between GSTR-1 and GSTR-3B?</h3>
                        <div class="faq-expanded__a"><p>GSTR-1 under Section 37 reports all outward supplies with invoice-level B2B data, HSN summary, and export details - it is a reporting return with no tax payment. GSTR-3B under Section 39 is a summary return where total liability is declared, ITC claimed, and net tax paid. GSTR-1 data auto-populates buyers' GSTR-2B for ITC verification.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-3">
                        <h3 class="faq-expanded__q">What is the penalty for late filing?</h3>
                        <div class="faq-expanded__a"><p>Late fee of Rs 50/day CGST + Rs 50/day SGST (Rs 100/day total) under Section 47, capped at Rs 5,000 per Act (Rs 10,000 total) per return. Nil returns: Rs 10/day per Act, capped at Rs 500. Additionally, interest at 18% per annum under Section 50 applies on any unpaid tax. The portal blocks subsequent filings until pending returns are cleared.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-4">
                        <h3 class="faq-expanded__q">What is the QRMP scheme?</h3>
                        <div class="faq-expanded__a"><p>The Quarterly Return Monthly Payment scheme allows taxpayers with turnover up to Rs 5 crore to file GSTR-1 and GSTR-3B quarterly instead of monthly. Tax must still be paid monthly via PMT-06 by the 25th. The Invoice Furnishing Facility (IFF) lets you upload B2B invoices in non-filing months so buyers can claim ITC without waiting.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-5">
                        <h3 class="faq-expanded__q">Can I file a GST return after 3 years?</h3>
                        <div class="faq-expanded__a"><p>From January 2026, no. The GST portal prevents filing returns more than 3 years past the due date. They become permanently unfiled. Audit all pending returns immediately and file any approaching the 3-year window before they become time-barred.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-6">
                        <h3 class="faq-expanded__q">What happens if I do not file?</h3>
                        <div class="faq-expanded__a"><p>Non-filing triggers daily late fees, 18% interest on unpaid tax, blocking of subsequent filings and e-way bills, ITC denial to buyers, best-judgment assessment under Section 62, suspension and cancellation of registration under Section 29, and demand notices under Section 73 or 74A.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-7">
                        <h3 class="faq-expanded__q">How much does a CA charge?</h3>
                        <div class="faq-expanded__a"><p>Fees vary from Rs 1,000 to Rs 5,000/month. At Patron Accounting: monthly GSTR-1 + GSTR-3B from Rs 1,499/month, quarterly QRMP from Rs 2,999/quarter, annual GSTR-9 from Rs 4,999, GSTR-9C from Rs 9,999. Free initial assessment available.</p></div>
                    </div>
                </div>
            </div>


            <!-- Quick Answers -->
            <div class="highlight-box" style="margin-top:32px;">
                <p><strong>Quick Answers</strong></p>
                <p><strong>What are GST returns?</strong> Periodic filings under CGST Act declaring sales, purchases, ITC, and tax. Key returns: GSTR-1 (sales), GSTR-3B (summary + payment), GSTR-9 (annual).</p><p><strong>GSTR-3B due date?</strong> 20th of the following month (monthly). 22nd or 24th for QRMP (state-based).</p><p><strong>Late fee?</strong> Rs 50/day CGST + Rs 50/day SGST (Rs 100/day total), capped at Rs 10,000 per return. 18% interest on unpaid tax.</p><p><strong>Nil return required?</strong> Yes. Mandatory even with zero transactions. Can be filed via SMS.</p>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 18: URGENCY CTA -->
<section class="content-section" style="background: var(--orange-lighter) !important; border-left: 4px solid var(--orange);">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">File Your GST Returns Before the Deadline</h2>
            <div class="content-text">
                
                <p>From January 2026, GST returns older than 3 years can no longer be filed. If you have pending returns from FY 2022-23 or earlier, they are approaching the permanent filing bar. Every day of delay compounds late fees (Rs 100/day) and interest (18% p.a.). The portal blocks subsequent filings until pending returns are cleared.</p><p><strong>Act now.</strong> <a href="tel:+919459456700">Call +91 945 945 6700</a> or <a href="https://wa.me/919459456700?text=Hello%2C%20I%20just%20visited%20your%20GST%20Returns%20page.%20I%20would%20like%20to%20know%20more%20about%20it." target="_blank" rel="noopener">WhatsApp us</a> for a free GST compliance assessment.</p>

            </div>
        </div>
    </div>
</section>

<!-- CONCLUSION + CTA BLOCK (Dark) -->
<section class="content-section" style="background: var(--blue) !important;">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title" style="color:#FFFFFF !important;">Never Miss a GST Deadline Again</h2>
            <div class="content-text" style="text-align:left;">
                
                <p style="color:rgba(255,255,255,0.9);font-size:15px;line-height:1.7;">GST return filing is the backbone of GST compliance. With 13 return forms, monthly deadlines, and the GSTN's sophisticated data matching, accuracy and timeliness are non-negotiable. The 2026 changes - 3-year filing bar, GSTR-3B hard-locking, and turnover-based late fee slabs - have further raised the compliance bar.</p><p style="color:rgba(255,255,255,0.9);font-size:15px;line-height:1.7;">Patron Accounting manages 1,200+ GSTINs with a 99.5% on-time rate. Monthly GSTR-1/3B filing from Rs 1,499. Offices in Pune, Mumbai, Delhi, and Gurugram serving businesses across India.</p>

            </div>
            <div style="display:flex;gap:14px;flex-wrap:wrap;margin-top:24px;">
                <a href="tel:+919459456700" style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:var(--orange);color:#fff;border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#128222; Call +91 945 945 6700</a>
                <a href="https://wa.me/919459456700?text=Hello%2C%20I%20just%20visited%20your%20GST%20Returns%20page.%20I%20would%20like%20to%20know%20more%20about%20it." target="_blank" style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:#25D366;color:#fff;border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;" rel="noopener">&#128172; WhatsApp Us</a>
                <a href="mailto:sales@patronaccounting.com?subject=Enquiry%20for%20GST%20Return%20Filing&body=Hello%2C%20I%20just%20visited%20your%20GST%20Returns%20page.%20I%20would%20like%20to%20know%20more%20about%20it.%0A%0AThank%20you." style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:transparent;color:#fff;border:2px solid rgba(255,255,255,0.3);border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#9993;&#65039; Email Us</a>
            </div>
            <p style="color:rgba(255,255,255,0.7);font-size:13px;margin-top:16px;">Book a Free Consultation - No Obligation.</p>
        </div>
    </div>
</section>

<!-- GSTAT STATE BENCH CITY PAGES (32 Pages) -->
<section class="content-section" style="padding:48px 32px;background:var(--gray-50);">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title" style="text-align:center;margin-bottom:12px;">GST Return Filing Services Across India</h2>
            <p style="text-align:center;color:var(--text-muted);font-size:15px;margin-bottom:40px;">Patron Accounting files GST returns for businesses in major cities across India.</p>
         
            <div class="pa-city-block" style="margin-bottom:40px;"><p class="pa-block-title">GST Returns by City</p><p class="pa-block-sub">Expert monthly, quarterly, and annual GST filing</p><div class="pa-city-grid"><a href="/gst-returns/pune" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Pune</div><div class="pa-card-sub">Maharashtra</div></div></a><a href="/gst-returns/mumbai" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Mumbai</div><div class="pa-card-sub">Maharashtra</div></div></a><a href="/gst-returns/delhi" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Delhi</div><div class="pa-card-sub">NCR</div></div></a><a href="/gst-returns/gurugram" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Gurugram</div><div class="pa-card-sub">Haryana</div></div></a></div></div><div class="pa-city-block"><p class="pa-block-title">Related GST Services</p><p class="pa-block-sub">Comprehensive GST compliance</p><div class="pa-cross-grid"><a href="/gst-registration" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M14 2H6a2 2 0 00-2 2v16a2 2 0 002 2h12a2 2 0 002-2V8z"/><path d="M14 2v6h6M16 13H8M16 17H8"/></svg></div><div><div class="pa-card-title">GST Registration</div><div class="pa-card-sub">India</div></div></a><a href="/gst-notice" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M14 2H6a2 2 0 00-2 2v16a2 2 0 002 2h12a2 2 0 002-2V8z"/><path d="M14 2v6h6M16 13H8M16 17H8"/></svg></div><div><div class="pa-card-title">GST Notice</div><div class="pa-card-sub">Reply</div></div></a><a href="#" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M14 2H6a2 2 0 00-2 2v16a2 2 0 002 2h12a2 2 0 002-2V8z"/><path d="M14 2v6h6M16 13H8M16 17H8"/></svg></div><div><div class="pa-card-title">GST Cancellation</div><div class="pa-card-sub">Revocation</div></div></a><a href="/gst-annual-returns" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M14 2H6a2 2 0 00-2 2v16a2 2 0 002 2h12a2 2 0 002-2V8z"/><path d="M14 2v6h6M16 13H8M16 17H8"/></svg></div><div><div class="pa-card-title">GST Annual Return</div><div class="pa-card-sub">GSTR-9</div></div></a><a href="/accounting-services" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M14 2H6a2 2 0 00-2 2v16a2 2 0 002 2h12a2 2 0 002-2V8z"/><path d="M14 2v6h6M16 13H8M16 17H8"/></svg></div><div><div class="pa-card-title">Bookkeeping</div><div class="pa-card-sub">India</div></div></a><a href="/gst-returns-for-restaurants-food-businesses" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M14 2H6a2 2 0 00-2 2v16a2 2 0 002 2h12a2 2 0 002-2V8z"/><path d="M14 2v6h6M16 13H8M16 17H8"/></svg></div><div><div class="pa-card-title">GST for Restaurants</div><div class="pa-card-sub">Food Business</div></div></a></div></div>
        </div>
    </div>
</section>

<!-- CONTENT FRESHNESS FOOTER -->
<section class="content-section" style="padding:32px;">
    <div class="content-container">
        <div class="text-content" style="font-size:13px;color:var(--text-muted);">
            <p><strong>Content Created:</strong> March 2026 &nbsp;|&nbsp; <strong>Last Updated:</strong> <span id="lastUpdatedFooter">20 April 2026</span> &nbsp;|&nbsp; <strong>Next Review:</strong> April 2026 &nbsp;|&nbsp; <strong>Reviewed By:</strong> CA &amp; CS Team, Patron Accounting LLP</p>
            <p>This page is reviewed monthly - aligned to GST Council meetings, CBIC notifications, due date extensions, portal changes, and late fee waiver schemes. Next review: April 2026.</p>
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
