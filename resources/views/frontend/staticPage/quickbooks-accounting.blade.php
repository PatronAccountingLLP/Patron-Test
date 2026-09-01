
@extends('layouts.service-app')

<!-- External Dependencies (loaded by master layout in production) -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Barlow:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,400&family=DM+Sans:opsz,wght@9..40,400;9..40,500;9..40,600;9..40,700&display=swap" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

@section('meta')
    <title>QuickBooks Accounting Services India - Setup & Migration</title>
    <meta name="description" content="Expert QuickBooks accounting for businesses in India. CA-managed bookkeeping, GST compliance, payroll and MIS on QuickBooks Online. From Rs. 1,500/month.">
    <link rel="canonical" href="/quickbooks-accounting">
    <meta name="robots" content="index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1">
    <meta property="og:title" content="QuickBooks Accounting Services India - Setup & Migration">
    <meta property="og:description" content="Expert QuickBooks accounting for businesses in India. CA-managed bookkeeping, GST compliance, payroll and MIS on QuickBooks Online. From Rs. 1,500/month.">
    <meta property="og:url" content="/quickbooks-accounting">
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="Patron Accounting">
    <meta property="og:image" content="https://www.patronaccounting.com/images/og-default-square.png">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="1200">
    <meta property="og:image:type" content="image/png">
    <meta property="og:image:secure_url" content="https://www.patronaccounting.com/images/og-default-square.png">
    <meta property="og:image:alt" content="Patron Accounting - partner you can rely on">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="QuickBooks Accounting Services India - Setup & Migration">
    <meta name="twitter:description" content="Expert QuickBooks accounting for businesses in India. CA-managed bookkeeping, GST compliance, payroll and MIS on QuickBooks Online. From Rs. 1,500/month.">
    <meta name="twitter:image" content="https://www.patronaccounting.com/images/og-default-square.png">
@endsection

@section('schema')
    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@graph": [
        {
          "@type": "Service",
          "name": "QuickBooks Accounting Services India",
          "description": "Expert QuickBooks accounting for businesses in India. CA-managed bookkeeping, GST compliance, payroll and MIS on QuickBooks Online. From Rs. 1,500/month.",
          "url": "https://www.patronaccounting.com/quickbooks-accounting",
          "serviceType": "QuickBooks Accounting Services India",
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
            "url": "https://www.patronaccounting.com/quickbooks-accounting",
            "price": "4999"
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
              "name": "QuickBooks Accounting Services India",
              "item": "https://www.patronaccounting.com/quickbooks-accounting"
            }
          ]
        },
        {
          "@type": "FAQPage",
          "mainEntity": [
            {
              "@type": "Question",
              "name": "Is QuickBooks available in India in 2026?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "QuickBooks India was fully discontinued by Intuit. New subscriptions were stopped from July 2022 and all subscriber access was removed from July 1, 2023. Indian domestic businesses cannot subscribe to or access QuickBooks India anymore. QuickBooks Online global version is technically accessible in India for accounts linked to foreign entities but requires an international subscription and does not have native India GST filing. Former QuickBooks India users can migrate to Zoho Books or TallyPrime with Patron's assistance."
              }
            },
            {
              "@type": "Question",
              "name": "Can Patron manage my QuickBooks Online account from India?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "Yes. Patron provides accountant-level access management for QuickBooks Online (global version). Our CA team works directly within your QBO account and delivers monthly bookkeeping, GST compliance, TDS entries, payroll journals, bank reconciliation, and financial reports. You retain full owner access to your QuickBooks at all times; Patron is added as an accountant user."
              }
            },
            {
              "@type": "Question",
              "name": "How does QuickBooks Online handle GST in India?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "QuickBooks Online (global version) has a Tax Centre that can be configured for GST with CGST, SGST, IGST, and exempt tax codes. However, it does not have a direct API integration with the GSTN portal for filing GSTR-1, GSTR-3B, or e-invoices. Patron's CA team prepares GST summaries from QBO data each month and files returns via the GSTN portal. For businesses above the Rs 5 crore e-invoicing threshold, Patron advises on third-party IRP workflows compatible with QBO."
              }
            },
            {
              "@type": "Question",
              "name": "What is the best alternative to QuickBooks for Indian businesses?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "Zoho Books is the most recommended alternative for Indian businesses needing full GST compliance with direct GSTN API integration for GSTR-1, GSTR-3B, e-invoicing, and e-way bill. TallyPrime is the dominant choice for manufacturing, trading, and businesses preferring desktop software with deep India compliance. Both are purpose-built for Indian tax requirements in a way that QuickBooks Online (global) is not. Patron can help you migrate to either platform."
              }
            },
            {
              "@type": "Question",
              "name": "How much does QuickBooks Online cost in India?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "QuickBooks Online (global version) is priced in USD: Simple Start at USD 38/month, Essentials at USD 65/month, Plus at USD 99/month, and Advanced at USD 235/month (2026 pricing). At current exchange rates this is approximately Rs 3,200 to Rs 19,800/month. This is the software subscription cost only; Patron's accounting services are additional, starting at Rs 1,500/month."
              }
            },
            {
              "@type": "Question",
              "name": "Can Patron help migrate QuickBooks India data to Zoho Books?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "Yes. Patron provides a complete QuickBooks to Zoho Books or TallyPrime migration service: data export and mapping from QuickBooks, chart of accounts alignment, contacts and opening balances import, GST configuration in the new platform, and trial balance reconciliation post-migration. One-time migration packages start at Rs 4,999. Ongoing accounting on the new platform can be added from Rs 1,500/month. Quick Answers What is QuickBooks accounting? QuickBooks accounting is the use of QuickBooks Online software to record and manage all financial transactions - invoices, expenses, bank feeds, payroll, and tax compliance - through a cloud-based platform accessible from any device. Is QuickBooks still available in India? No. Intuit discontinued all QuickBooks products in India effective April 30, 2023. New subscriptions ended July 2022 and full access was removed from July 1, 2023. Global QBO is accessible for accounts linked to foreign entities. QuickBooks India band ho gaya - ab kya karein? QuickBooks India April 2023 mein band ho gaya. Alternatives mein Zoho Books aur TallyPrime sabse popular hain. Patron Accounting aapka QuickBooks data migrate kar sakta hai Zoho Books ya Tally mein, Rs 4,999 se shuru hokar. Ongoing accounting bhi available hain Rs 1,500/month se."
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
                        QuickBooks Accounting Services in India
                    </h1>

                    <div class="expert-attribution-box">
                        <span class="eab-check"><svg width="16" height="16" viewBox="0 0 24 24" fill="currentColor"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg></span>
                        <span class="eab-title">Reviewed by CA and CS Team, Patron Accounting LLP</span>
                        <span class="eab-meta">
                            <span>ICAI & ICSI Registered</span><span class="eab-sep">|</span>
                            <span>15+ Years Experience</span><span class="eab-sep">|</span>
                            <span>Last Updated: <span id="lastUpdated">15 January 2024</span></span>
                        </span>
                        <a href="/authorhub/ca-sundram-gupta" class="eab-link">Verify Credentials &rarr;</a>
                    </div>

                    <div class="mb-4">
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Complete QBO Bookkeeping:</span> Daily transaction recording, bank reconciliation, AP/AR management, and month-end close by Patron's CA team</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>India Compliance Built In:</span> GST invoicing, GSTR-1, GSTR-3B, TDS entries, and e-invoicing advisory configured within your QBO account</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Monthly Financial Reporting:</span> P and L, balance sheet, cash flow, AR/AP ageing, and custom MIS reports delivered directly from QuickBooks</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Migration Advisory Included:</span> QBO India discontinued April 2023 - we guide migration to Zoho Books or TallyPrime with zero data loss from Rs 4,999</p>
                        </div>
                    </div>

                    <p class="mb-4 fw-bold" style="color: var(--blue); font-size: 15px;">50+ QuickBooks Online accounts managed | 500+ GST and TDS returns filed from QBO data annually | 4.8/5 client rating</p>

                    <div class="hero-cta">
                        <a href="tel:+919459456700" class="btn-video text-decoration-none">
                            <span class="play-circle"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="width:14px;height:14px;color:#fff"><path d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/></svg></span>
                            Call +91 945 945 6700
                        </a>
                        <a href="mailto:sales@patronaccounting.com?subject=Enquiry%20for%20QuickBooks%20Accounting&body=Hello%2C%0A%0AI%20need%20QuickBooks%20accounting%20support.%0A%0AThank%20you." class="btn-sample text-decoration-none">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="width:18px;height:18px;"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,12 2,6"/></svg>
                            Email Us
                        </a>
                        <a href="https://wa.me/919459456700?text=Hi%2C%20I%20need%20help%20with%20QuickBooks%20Accounting%20Services.%20Please%20share%20details." target="_blank" class="btn-sample text-decoration-none">
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
                                            'service'  => 'QuickBooks Accounting',
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
            <a href="#what-section" class="toc-btn">What Is It</a>
            <a href="#who-section" class="toc-btn">Who Needs It</a>
            <a href="#services-section" class="toc-btn">Services</a>
            <a href="#procedure-section" class="toc-btn">Process</a>
            <a href="#documents-section" class="toc-btn">Access Needed</a>
            <a href="#challenges-section" class="toc-btn">Challenges</a>
            <a href="#fees-section" class="toc-btn">Pricing</a>
            <a href="#timeline-section" class="toc-btn">Timeline</a>
            <a href="#benefits-section" class="toc-btn">Benefits</a>
            <a href="#comparison-section" class="toc-btn">QBO vs Zoho vs Tally</a>
            <a href="#faq-section" class="toc-btn">FAQs</a>
        </div>
        <button class="toc-arrow right" id="tocRight">&#10095;</button>
    </div>
</div>

<!-- SECTION 2: OVERVIEW / INTRO + TL;DR -->
<section class="content-section" id="overview-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">QuickBooks Accounting Services - Overview</h2>
            <div class="content-text">
                <div class="highlight-box" style="margin-bottom:20px;">
                    <p><strong>&#128204; TL;DR - QuickBooks Accounting Services at a Glance</strong></p>
                    <p>QuickBooks Online (QBO) is used by 7 million+ businesses globally. Indian subsidiaries of foreign entities, exporters, and CA firms use QBO for international operations. Patron Accounting provides CA-led bookkeeping, GST, TDS, payroll, and reporting within your QBO account. Important: QBO India was discontinued April 30, 2023 - migration to Zoho Books or TallyPrime from Rs 4,999. Ongoing accounting from Rs 1,500/month.</p>
                </div>
                <p>QuickBooks Online (QBO) remains the accounting platform of choice for US, UK, and Australian companies. Indian subsidiaries of foreign entities, exporters with international clients, and CA firms providing outsourced accounting to global businesses all use QuickBooks Online. Patron Accounting provides CA-led accounting, GST compliance, TDS management, payroll, and reporting services within your existing QBO account.</p>
                <p>Important context: Intuit discontinued all QuickBooks products in India effective April 30, 2023. New subscriptions ended July 2022, and access was fully removed from July 1, 2023 (source: quickbooks.intuit.com/in/). If you are a former QBO India user, Patron offers migration services to Zoho Books and TallyPrime. If you use QBO through a US/global subscription, Patron supports your ongoing accounting needs.</p>
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
                <h2 class="section-title">What is QuickBooks Accounting?</h2>
                <div class="content-text what-is-definition">
                    
                    <p>QuickBooks accounting is the use of QuickBooks Online software to record, categorise, and report all financial transactions of a business - invoices, expenses, bank feeds, payroll, and taxes - through a cloud-based platform accessible from any device worldwide.</p>
                    <p>For Indian businesses, QuickBooks Online (global version) requires CA support for GST filing (no native GSTN API), TDS compliance (no native TDS module), and financial statement alignment with Schedule III of the Companies Act 2013. Patron Accounting bridges these gaps with CA-led accounting services delivered within your QBO account.</p>
                    <p>Important: Intuit discontinued all QuickBooks products in India effective April 30, 2023. Former QBO India users can migrate to Zoho Books or TallyPrime with Patron's assistance from Rs 4,999.</p>

                </div>
                <div class="highlight-box" style="margin-top:20px;">
                    <p><strong>Key Terms for QuickBooks Accounting:</strong></p>
                    <ul>
                        <li><strong>QuickBooks Online (QBO):</strong> Cloud-based accounting by Intuit; 7 million+ global subscribers; India-specific version discontinued April 2023</li>
                        <li><strong>Chart of Accounts:</strong> Master list of all accounts in QBO - foundation of reporting and GST categorisation; must align with Schedule III Companies Act 2013</li>
                        <li><strong>Bank Feed:</strong> Automatic import of bank/credit card transactions into QBO for real-time categorisation and reconciliation</li>
                        <li><strong>Accounts Receivable (AR):</strong> Money owed by customers - tracked via invoices and payment records in QuickBooks</li>
                        <li><strong>Accounts Payable (AP):</strong> Money owed to vendors - tracked via bills, purchase orders, and vendor payments in QBO</li>
                        <li><strong>QBO India Discontinuation:</strong> Intuit stopped all India subscriptions April 30, 2023; full access removed July 1, 2023; no new sign-ups from July 2022</li>
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
                            <!-- QBO tag -->
                            <rect x="30" y="120" width="42" height="18" rx="4" fill="#FFF3E0" stroke="#F5A623" stroke-width="1"/>
                            <text x="51" y="132.5" font-size="8" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial, sans-serif">QBO</text>
                            <!-- Label -->
                            <text x="100" y="170" font-size="10" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial, sans-serif">QuickBooks Accounting</text>
                        </svg>
                    </div>
                    <div class="illustration-badge">
                        <span>Cloud Accounting</span>
                        <strong>QuickBooks Online Expert</strong>
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
            <h2 class="section-title">Who Needs QuickBooks Accounting Services in India</h2>
            <div class="content-text">
                
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Business Type</th><th>Why QuickBooks</th><th>Patron's Role</th></tr></thead>
                    <tbody>
                        <tr><td>Indian Subsidiary of US/UK/AU Company</td><td>Parent uses QBO; India entity must maintain books on same platform for consolidated reporting</td><td>CA-led India bookkeeping on QBO with GST and TDS compliance; reports in parent-compatible format</td></tr>
                        <tr><td>Indian Exporters and Importers</td><td>Multi-currency transactions, foreign bank accounts, USD/GBP invoicing - QBO handles natively</td><td>Foreign currency reconciliation, export invoice management, and RBI-compliant FEMA entries</td></tr>
                        <tr><td>US/UK/AU Businesses Outsourcing to India</td><td>40-60% cost savings by outsourcing QBO bookkeeping to India-based CA team</td><td>Dedicated QBO accounting team; month-end close by 7th of following month</td></tr>
                        <tr><td>Startups with US Investors</td><td>US investors require QBO-compatible or GAAP-aligned financial statements</td><td>Monthly QBO bookkeeping, investor-ready P and L, and MIS aligned with GAAP or Ind AS</td></tr>
                        <tr><td>Indian CA/BPO Firms with Global Clients</td><td>India-based QBO accounting support for client entities</td><td>White-label QuickBooks accounting support; dedicated or shared accountant pool</td></tr>
                        <tr><td>Former QuickBooks India Users</td><td>QBO India discontinued April 2023; need migration</td><td>Data migration to Zoho Books or TallyPrime from Rs 4,999; ongoing accounting on new platform</td></tr>
                    </tbody>
                </table>
                </div>

            </div>
            </div>
        </div>
    </div>
</section>

<!-- SECTION 5: OUR SERVICES -->
<section class="content-section" id="services-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">6 Core QuickBooks Accounting Services by Patron</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Service</th><th>What We Do</th></tr></thead>
                    <tbody>
                        <tr><td>Monthly Bookkeeping on QBO</td><td>Day-to-day accounting: bank feed categorisation, vendor bills, customer invoices, bank reconciliation, month-end close by 7th. Deliverable: reconciled trial balance with zero uncleared differences</td></tr>
                        <tr><td>GST Compliance on QuickBooks</td><td>GSTIN setup, CGST/SGST/IGST tax codes, HSN/SAC mapping, compliant invoice templates. Monthly GSTR-1 and GSTR-3B from QBO data filed via GSTN portal. E-invoicing advisory per Notification No. 17/2022-Central Tax</td></tr>
                        <tr><td>TDS Compliance on QuickBooks</td><td>Custom TDS liability accounts in QBO; TDS entries at transaction level; monthly challans; quarterly Form 26Q and 24Q returns; Form 16 and 16A annually</td></tr>
                        <tr><td>AR and AP Management</td><td>Full receivable and payable cycle: invoice tracking, payment recording, vendor bill processing, weekly AR/AP ageing reports</td></tr>
                        <tr><td>Payroll Processing on QBO</td><td>Monthly payroll: salary calculation, PF and ESIC, TDS on salary (Section 192), payslips, payroll journal posting into QBO. PF ECR, ESIC return, quarterly Form 24Q</td></tr>
                        <tr><td>Financial Reporting and MIS</td><td>Monthly P and L, Balance Sheet, Cash Flow, AR/AP Ageing, custom MIS dashboards. Reports formatted per US GAAP or IFRS for companies with US/UK parent entities</td></tr>

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
            <h2 class="section-title">How Patron Delivers QuickBooks Accounting - 6-Step Process</h2>
            <p class="section-subtitle" style="text-align:left;max-width:100%;">From onboarding and QBO access through to monthly report delivery, our structured process ensures complete bookkeeping, GST, TDS, and financial reporting within your QuickBooks Online account.</p>
        </header>
        <div class="steps-container">
            <div class="step-card">
    <div class="step-content"><span class="step-badge">Step 1</span><h3 class="step-title">Onboarding and QuickBooks Access</h3><p class="step-description">Client grants Patron accountant-level access to their QBO account. Discovery call covers business type, transaction volumes, GST registration, TDS applicability, payroll headcount, and reporting requirements.</p>
        <div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> QBO access granted</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Scope confirmed</span></div>
    </div>
    <div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="15" y="10" width="90" height="70" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><line x1="30" y1="30" x2="90" y2="30" stroke="#F5A623" stroke-width="3" stroke-linecap="round"/><line x1="30" y1="45" x2="75" y2="45" stroke="#14365F" stroke-width="2" opacity="0.3" stroke-linecap="round"/><path d="M85 55l5 5 10-10" stroke="#10B981" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"/></svg></div><span class="illustration-label">Onboarded</span><span class="step-number-large">01</span></div></div>
</div>
<div class="step-card">
    <div class="step-content"><span class="step-badge">Step 2</span><h3 class="step-title">Chart of Accounts Review and GST Setup</h3><p class="step-description">Chart of accounts aligned with Schedule III Companies Act 2013. GST tax codes (CGST, SGST, IGST, exempt), TDS liability accounts, and input tax credit accounts configured.</p>
        <div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> CoA aligned to Schedule III</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> GST codes configured</span></div>
    </div>
    <div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="10" y="10" width="45" height="65" rx="4" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><rect x="65" y="10" width="45" height="65" rx="4" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><line x1="20" y1="30" x2="45" y2="30" stroke="#F5A623" stroke-width="2" stroke-linecap="round"/><line x1="75" y1="30" x2="100" y2="30" stroke="#F5A623" stroke-width="2" stroke-linecap="round"/></svg></div><span class="illustration-label">Setup Complete</span><span class="step-number-large">02</span></div></div>
</div>
<div class="step-card">
    <div class="step-content"><span class="step-badge">Step 3</span><h3 class="step-title">Bank Feed Setup and Transaction Categorisation</h3><p class="step-description">All bank and credit card accounts connected to QBO via bank feeds. Multi-currency accounts set up with RBI reference rates for forex gain/loss accounting.</p>
        <div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Bank feeds connected</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Multi-currency configured</span></div>
    </div>
    <div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="20" y="15" width="80" height="55" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><rect x="20" y="15" width="80" height="16" rx="6" fill="#14365F"/><rect x="30" y="38" width="15" height="22" rx="2" fill="#10B981" opacity="0.6"/><rect x="52" y="42" width="15" height="18" rx="2" fill="#F5A623" opacity="0.6"/><rect x="74" y="35" width="15" height="25" rx="2" fill="#10B981" opacity="0.6"/></svg></div><span class="illustration-label">Feeds Active</span><span class="step-number-large">03</span></div></div>
</div>
<div class="step-card">
    <div class="step-content"><span class="step-badge">Step 4</span><h3 class="step-title">Monthly Bookkeeping Cycle</h3><p class="step-description">All income/expense transactions recorded from bank feeds; vendor bills processed; customer invoices reviewed; payroll journals posted; TDS entries made; month-end close by the 7th.</p>
        <div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Books closed by 7th</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Zero uncleared differences</span></div>
    </div>
    <div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="15" y="5" width="90" height="70" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><line x1="30" y1="25" x2="90" y2="25" stroke="#F5A623" stroke-width="2" stroke-linecap="round"/><line x1="30" y1="38" x2="80" y2="38" stroke="#14365F" stroke-width="1.5" opacity="0.3" stroke-linecap="round"/><line x1="30" y1="50" x2="70" y2="50" stroke="#14365F" stroke-width="1.5" opacity="0.3" stroke-linecap="round"/></svg></div><span class="illustration-label">Books Updated</span><span class="step-number-large">04</span></div></div>
</div>
<div class="step-card">
    <div class="step-content"><span class="step-badge">Step 5</span><h3 class="step-title">Compliance Preparation and Filing</h3><p class="step-description">GST data extracted from QBO for GSTR-1 and GSTR-3B. ITC reconciliation against GSTR-2B. TDS challans deposited and quarterly returns filed. Payroll statutory filings completed.</p>
        <div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> GST and TDS filed</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> ITC reconciled</span></div>
    </div>
    <div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="20" y="15" width="80" height="55" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><text x="60" y="48" font-size="12" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">GST+TDS</text><path d="M82 55l5 5 10-10" stroke="#10B981" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"/></svg></div><span class="illustration-label">Compliance Done</span><span class="step-number-large">05</span></div></div>
</div>
<div class="step-card">
    <div class="step-content"><span class="step-badge">Step 6</span><h3 class="step-title">Monthly Report Delivery and Review</h3><p class="step-description">Complete financial package delivered by the 10th: P and L, Balance Sheet, Cash Flow, AR/AP Ageing, GST summary, TDS statement, and custom MIS. 30-minute CA review call.</p>
        <div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Reports by 10th</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> CA review call held</span></div>
    </div>
    <div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="25" y="10" width="70" height="55" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><circle cx="60" cy="37" r="20" fill="#E8F5E9" stroke="#10B981" stroke-width="2"/><path d="M50 37l7 7 14-14" stroke="#10B981" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/></svg></div><span class="illustration-label">Reports Delivered</span><span class="step-number-large">06</span></div></div>
</div>


        </div>
    </div>
</section>

<!-- SECTION 8: DOCUMENTS REQUIRED -->
<section class="content-section" id="documents-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Documents and Access Required for QuickBooks Accounting</h2>
            <div class="content-text">
                
                <ul>
                    <li><strong>QuickBooks Online accountant access:</strong> invite accounting@patronaccounting.com as accountant user</li>
                    <li><strong>Bank account login or bank feed credentials:</strong> for automatic transaction import into QBO</li>
                    <li><strong>GSTIN registration certificate and GST login:</strong> for GST compliance and return filing</li>
                    <li><strong>TAN (Tax Deduction Account Number) and income tax login:</strong> for TDS returns</li>
                    <li><strong>Payroll data:</strong> employee list, salary structure, PF/ESIC registration numbers (if payroll included)</li>
                    <li><strong>Prior year trial balance or audited accounts:</strong> for opening balances setup in QBO</li>
                    <li><strong>Vendor and customer master list with GST numbers:</strong> for chart of accounts alignment</li>
                    <li><strong>FEMA compliance details:</strong> for foreign companies - RBI/FEMA category, ODI/FDI details if applicable</li>
                </ul>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 9: CHALLENGES -->
<section class="content-section" id="challenges-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">5 Common QuickBooks Challenges in India and How Patron Solves Them</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Challenge</th><th>Impact</th><th>How Patron Accounting Solves It</th></tr></thead>
                    <tbody>
                        <tr><td>No native India GST filing in QBO</td><td>GST data must be manually extracted; errors in GSTR-1/3B without CA oversight</td><td>Monthly GST summaries from QBO; returns filed via GSTN portal; ITC reconciliation against GSTR-2B</td></tr>
                        <tr><td>No native TDS module</td><td>TDS deductions miscategorised or missed; penalties under Section 201, Income Tax Act</td><td>Custom TDS liability accounts in QBO; entries at transaction level; quarterly returns and challans filed</td></tr>
                        <tr><td>Multi-currency and FEMA compliance</td><td>Forex gain/loss incorrectly recorded; RBI reporting missed</td><td>RBI reference rate-based forex entries; FEMA-compliant remittance coding; FLA return data from QBO</td></tr>
                        <tr><td>QBO India discontinued - data loss risk</td><td>Former users who did not export data before July 2023 may have lost historical records</td><td>Data reconstruction where possible; migration to Zoho Books or TallyPrime from Rs 4,999</td></tr>
                        <tr><td>Chart of accounts misaligned with Indian law</td><td>Financial statements may not comply with Schedule III Companies Act 2013</td><td>CA-led chart restructuring in QBO to match Schedule III; auditor access for statutory audit</td></tr>

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
            <h2 class="section-title">QuickBooks Accounting - Pricing Plans 2026</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Fee Component</th><th>Amount</th></tr></thead>
                    <tbody>
                        <tr><td>Patron Accounting Professional Fees</td><td>Starting from INR 4,999 (Exl GST and Govt. Charges)</td></tr>
                        <tr><td>Starter - Monthly Bookkeeping</td><td>Rs 1,500/month (bookkeeping, bank reconciliation, P and L, balance sheet; up to 150 transactions/month)</td></tr>
                        <tr><td>Growth - Bookkeeping + GST + TDS</td><td>Rs 3,500/month (Starter + GSTR-1, GSTR-3B, ITC, TDS entries and returns, AR/AP; up to 400 transactions)</td></tr>
                        <tr><td>Business - Full Scope</td><td>Rs 6,500/month (Growth + payroll up to 20 employees, MIS, monthly CA review call, multi-currency; up to 800 transactions)</td></tr>
                        <tr><td>Enterprise</td><td>Custom pricing (multi-entity, transfer pricing, GAAP/IFRS alignment, unlimited transactions, dedicated CA manager)</td></tr>
                        <tr><td>Migration from QBO to Zoho/Tally</td><td>Rs 4,999 one-time (data export, chart mapping, contacts, opening balances, GST config, trial balance reconciliation)</td></tr>

                    </tbody>
                </table>
                </div>
                <p style="margin-top:16px;font-size:13px;color:var(--text-muted);font-style:italic;">All fees and charges listed are indicative only and do not constitute a binding offer. Final amounts may vary depending on the volume of work and the complexity involved.</p>
                <p style="margin-top:16px;">Professional service charges for drafting, filing, and representation are separate from the statutory fees. The exact fee depends on the complexity of the case, disputed amount, and number of hearings required. Contact us for a detailed quote.</p>
                <p style="margin-top:16px;"><strong>Get a free QuickBooks Accounting consultation - <a href="tel:+919459456700">Call +91 945 945 6700</a> or <a href="https://wa.me/919459456700?text=Hi%2C%20I%20am%20interested%20in%20QuickBooks%20Accounting%20from%20Patron%20Accounting.%20Please%20call%20me." target="_blank">WhatsApp us</a>. No-obligation assessment.</strong></p>
            </div>
        </div>
    </div>
</section>

<!-- SECTION 11: TIMELINE -->
<section class="content-section" id="timeline-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">QuickBooks Onboarding Timeline</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Stage</th><th>Estimated Timeline</th></tr></thead>
                    <tbody>
                        <tr><td>Day 1-2</td><td>Discovery call; QuickBooks access review; transaction volume assessment; scope and pricing confirmation</td></tr>
                        <tr><td>Day 3-5</td><td>Chart of accounts review and cleanup; bank feed setup; GST tax code configuration; TDS account setup; opening balances</td></tr>
                        <tr><td>Day 5-7</td><td>First month bookkeeping (historical or current); bank reconciliation; quality review by senior CA</td></tr>
                        <tr><td>Day 7</td><td>Delivery of first monthly financial package - P and L, Balance Sheet, GST summary, initial MIS</td></tr>
                        <tr><td>Ongoing Monthly</td><td>Full bookkeeping cycle; reconciliation; GST/TDS filing; payroll processing; MIS delivery by 10th</td></tr>
                        <tr><td>Monthly Call</td><td>30-minute CA review call to discuss financials, exceptions, and compliance calendar</td></tr>
                        <tr><td>Annually</td><td>Annual accounts finalisation; statutory audit support; income tax return data; FLA return for foreign companies</td></tr>

                    </tbody>
                </table>
                </div>
                <div class="highlight-box" style="margin-top:16px;">
                    
                    <p><strong>Note:</strong> QuickBooks Online subscription is purchased separately from Intuit (global version, priced in USD). Patron provides accounting and compliance services only. Books of account must be preserved for 8 financial years per Section 128(5), Companies Act 2013 - QBO subscription must remain active or data exported before cancellation.</p>

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
            <h2 class="section-title">Why QuickBooks Accounting with Patron</h2>
        </div>
        <div class="features-grid">
            <article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><h3>CA-Led, Not Just Data Entry</h3><p>Qualified CAs interpret your QBO financials and advise - not just categorise transactions. Every monthly close is reviewed by a senior CA before delivery.</p></article>
            <article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg></div><h3>India Compliance Built In</h3><p>GST, TDS, PF, ESIC, Companies Act, and FEMA requirements natively understood and built into every QuickBooks bookkeeping cycle.</p></article>
            <article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M14 2H6a2 2 0 00-2 2v16a2 2 0 002 2h12a2 2 0 002-2V8z"/><path d="M14 2v6h6"/></svg></div><h3>Real-Time QBO Access Always</h3><p>You retain full owner access. Patron works as your accountant within your existing QBO - no parallel systems, no data exports for processing.</p></article>
            <article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8V7m0 10v1M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><h3>Multi-Currency and FEMA-Ready</h3><p>Forex gain/loss entries, RBI reference rates, multi-currency AR/AP, and FLA return preparation for foreign companies.</p></article>
            <article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M17 21v-2a4 4 0 00-4-4H5a4 4 0 00-4 4v2"/><circle cx="9" cy="7" r="4"/></svg></div><h3>Cost-Effective vs In-House</h3><p>QuickBooks accounting from Rs 1,500/month - a fraction of an in-house CA (Rs 30,000-50,000/month minimum in India).</p></article>
            <article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"/></svg></div><h3>Migration Advisory Included</h3><p>If you switch from QuickBooks to Zoho Books or TallyPrime, Patron handles the migration from Rs 4,999 one-time with zero data loss.</p></article>
        </div>
    </div>
</section>

<!-- SECTION 12A: SOCIAL PROOF -->
<section class="content-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">What Our QuickBooks Clients Say</h2>
            <div class="content-text">
                
                <div class="highlight-box">
                    <p><em>50+ QuickBooks Online accounts managed | Serving India, USA, UK, Australia, UAE | 99.9% monthly bank reconciliation accuracy | 500+ GST and TDS returns filed from QBO data annually | 80+ QBO migrations to Zoho/Tally completed | 4.8/5 client rating</em></p>
                </div>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 13: SELF-FILING vs PROFESSIONAL COMPARISON -->
<section class="content-section" id="comparison-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">QuickBooks vs Zoho Books vs TallyPrime - Comparison for India</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Parameter</th><th>QuickBooks Online (Global)</th><th>Zoho Books (India)</th><th>TallyPrime</th></tr></thead>
                    <tbody>
                        <tr><td>India Availability</td><td>Global version accessible; India version discontinued April 2023</td><td>Fully available - designed for India</td><td>Fully available - 80%+ India market share</td></tr>
                        <tr><td>GST Filing</td><td>No direct GSTN API; CA files manually from QBO data</td><td>Direct GSTN API - GSTR-1, 3B, 9, e-way bill</td><td>GSTR-1, 3B, 9, e-way bill, e-invoicing</td></tr>
                        <tr><td>E-Invoicing</td><td>No native IRP; third-party or CA advisory needed</td><td>Built-in IRP integration</td><td>Built-in from TallyPrime 3.0+</td></tr>
                        <tr><td>Cloud Access</td><td>Fully cloud-based; browser and mobile</td><td>Fully cloud-based; browser and mobile</td><td>Desktop-based; TallyPrime Server for cloud</td></tr>
                        <tr><td>Multi-Currency</td><td>Native; 160+ currencies; all paid plans</td><td>Professional plan; fewer currencies</td><td>Available but less automated</td></tr>
                        <tr><td>Global Integrations</td><td>800+ (Shopify, Amazon, Stripe, Salesforce)</td><td>300+ (Zoho suite, Zapier, Stripe)</td><td>Limited third-party; strong India add-ons</td></tr>
                        <tr><td>Best For</td><td>Companies with global ops, US/UK/AU parent entities</td><td>Indian SMEs, GST-heavy domestic businesses</td><td>Manufacturing, trading, desktop-first businesses</td></tr>

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
                
                <p>Patron Accounting also provides these complementary services:</p>
                <ul>
                    <li><a href="/zoho-books-accounting">Zoho Books Accounting</a> - If transitioning from QuickBooks to Zoho Books with full India GST compliance</li>
                    <li><a href="/tally-accounting">Tally Accounting</a> - For businesses evaluating TallyPrime as a QuickBooks alternative</li>
                    <li><a href="/xero-accounting">Xero Accounting</a> - For businesses using Xero, another global cloud platform</li>
                    <li><a href="/migration-from-tally-to-zoho">Migration from Tally to Zoho Books</a> - Data migration from any platform including QuickBooks</li>
                    <li><a href="/gst-returns">GST Returns Filing</a> - Standalone GSTR-1, GSTR-3B, GSTR-9, and GST reconciliation</li>
                    <li><a href="/tds-return-filing-24q">TDS Return Filing</a> - Quarterly TDS returns (Form 26Q, 24Q) and Form 16 issuance</li>
                </ul>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 15A: LEGAL FRAMEWORK -->
<section class="content-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Legal Framework - Books of Accounts and Cloud Accounting under Indian Law</h2>
            <div class="content-text">
                
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Law / Provision</th><th>Key Requirement</th><th>QuickBooks Compliance Impact</th></tr></thead>
                    <tbody>
                        <tr><td>Section 128(1), Companies Act 2013</td><td>Every company must maintain books of account; electronic mode permitted. Penalty: imprisonment up to 1 year or fine Rs 50,000 to Rs 5 lakhs</td><td>QBO satisfies electronic books requirement; accessible in India</td></tr>
                        <tr><td>Rule 3, Companies (Accounts) Rules 2014</td><td>Electronic books must remain accessible in India, in retrievable format, with India-based server backup</td><td>QBO cloud-based with India-accessible servers satisfies this requirement</td></tr>
                        <tr><td>Section 128(5), Companies Act 2013</td><td>Books of account preserved for not less than 8 financial years</td><td>QBO subscription must remain active or data exported before cancellation</td></tr>
                        <tr><td>Section 44AA, Income Tax Act 1961</td><td>Businesses with turnover above Rs 25 lakhs must maintain prescribed books</td><td>QBO generates all prescribed books: cash book, journal, ledger, P and L</td></tr>
                        <tr><td>Section 44AB, Income Tax Act 1961</td><td>Tax audit mandatory for turnover above Rs 1 crore (Rs 10 crore for 95%+ digital)</td><td>QBO provides auditor access login for seamless tax audit review</td></tr>
                        <tr><td><a href="https://www.cbic.gov.in" target="_blank" rel="noopener">CGST Act 2017, Section 35</a></td><td>Registered persons must maintain accounts of inward/outward supply, stock, ITC, and output tax</td><td>QBO is GST-compatible; GSTN filing requires CA support (Patron provides)</td></tr>
                        <tr><td>E-Invoicing (Notification 17/2022-CT)</td><td>Mandatory for turnover above Rs 5 crore effective October 2023</td><td>QBO has no native IRP; Patron advises on compliant e-invoicing workflows</td></tr>
                    </tbody>
                </table>
                </div>

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
                    <h2 class="faq-expanded__title">Frequently Asked Questions - QuickBooks Accounting</h2>
                    <p class="faq-expanded__lead">Get answers about QuickBooks availability in India, QBO India discontinuation, GST handling, alternatives, pricing, and migration to Zoho Books or TallyPrime.</p>
                    @include('partials.bigin-form', [
                        'variant'  => 'compact',
                        'service'  => 'QuickBooks Accounting',
                    ])
                </aside>
                <div class="faq-expanded__list">
                    <div class="faq-expanded__item" id="faq-1">
                        <h3 class="faq-expanded__q">Is QuickBooks available in India in 2026?</h3>
                        <div class="faq-expanded__a"><p>QuickBooks India was fully discontinued by Intuit. New subscriptions were stopped from July 2022 and all subscriber access was removed from July 1, 2023. Indian domestic businesses cannot subscribe to or access QuickBooks India anymore. QuickBooks Online global version is technically accessible in India for accounts linked to foreign entities but requires an international subscription and does not have native India GST filing. Former QuickBooks India users can migrate to Zoho Books or TallyPrime with Patron's assistance.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-2">
                        <h3 class="faq-expanded__q">Can Patron manage my QuickBooks Online account from India?</h3>
                        <div class="faq-expanded__a"><p>Yes. Patron provides accountant-level access management for QuickBooks Online (global version). Our CA team works directly within your QBO account and delivers monthly bookkeeping, GST compliance, TDS entries, payroll journals, bank reconciliation, and financial reports. You retain full owner access to your QuickBooks at all times; Patron is added as an accountant user.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-3">
                        <h3 class="faq-expanded__q">How does QuickBooks Online handle GST in India?</h3>
                        <div class="faq-expanded__a"><p>QuickBooks Online (global version) has a Tax Centre that can be configured for GST with CGST, SGST, IGST, and exempt tax codes. However, it does not have a direct API integration with the GSTN portal for filing GSTR-1, GSTR-3B, or e-invoices. Patron's CA team prepares GST summaries from QBO data each month and files returns via the GSTN portal. For businesses above the Rs 5 crore e-invoicing threshold, Patron advises on third-party IRP workflows compatible with QBO.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-4">
                        <h3 class="faq-expanded__q">What is the best alternative to QuickBooks for Indian businesses?</h3>
                        <div class="faq-expanded__a"><p>Zoho Books is the most recommended alternative for Indian businesses needing full GST compliance with direct GSTN API integration for GSTR-1, GSTR-3B, e-invoicing, and e-way bill. TallyPrime is the dominant choice for manufacturing, trading, and businesses preferring desktop software with deep India compliance. Both are purpose-built for Indian tax requirements in a way that QuickBooks Online (global) is not. Patron can help you migrate to either platform.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-5">
                        <h3 class="faq-expanded__q">How much does QuickBooks Online cost in India?</h3>
                        <div class="faq-expanded__a"><p>QuickBooks Online (global version) is priced in USD: Simple Start at USD 38/month, Essentials at USD 65/month, Plus at USD 99/month, and Advanced at USD 235/month (2026 pricing). At current exchange rates this is approximately Rs 3,200 to Rs 19,800/month. This is the software subscription cost only; Patron's accounting services are additional, starting at Rs 1,500/month.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-6">
                        <h3 class="faq-expanded__q">Can Patron help migrate QuickBooks India data to Zoho Books?</h3>
                        <div class="faq-expanded__a"><p>Yes. Patron provides a complete QuickBooks to Zoho Books or TallyPrime migration service: data export and mapping from QuickBooks, chart of accounts alignment, contacts and opening balances import, GST configuration in the new platform, and trial balance reconciliation post-migration. One-time migration packages start at Rs 4,999. Ongoing accounting on the new platform can be added from Rs 1,500/month.</p></div>
                    </div>
                </div>
            </div>


            <!-- Quick Answers -->
            <div class="highlight-box" style="margin-top:32px;">
                <p><strong>Quick Answers</strong></p>
                <p><strong>What is QuickBooks accounting?</strong><br>QuickBooks accounting is the use of QuickBooks Online software to record and manage all financial transactions - invoices, expenses, bank feeds, payroll, and tax compliance - through a cloud-based platform accessible from any device.</p>
                <p><strong>Is QuickBooks still available in India?</strong><br>No. Intuit discontinued all QuickBooks products in India effective April 30, 2023. New subscriptions ended July 2022 and full access was removed from July 1, 2023. Global QBO is accessible for accounts linked to foreign entities.</p>
                <p><strong>QuickBooks India band ho gaya - ab kya karein?</strong><br>QuickBooks India April 2023 mein band ho gaya. Alternatives mein Zoho Books aur TallyPrime sabse popular hain. Patron Accounting aapka QuickBooks data migrate kar sakta hai Zoho Books ya Tally mein, Rs 4,999 se shuru hokar. Ongoing accounting bhi available hain Rs 1,500/month se.</p>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 18: URGENCY CTA -->
<section class="content-section" style="background: var(--orange-lighter) !important; border-left: 4px solid var(--orange);">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Compliance Deadlines for QuickBooks-Based Businesses</h2>
            <div class="content-text">
                
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Compliance Event</th><th>Deadline</th><th>Action Required in QBO</th></tr></thead>
                    <tbody>
                        <tr><td>GSTR-1 Filing</td><td>11th of following month</td><td>Patron prepares GST summary from QBO and files by due date</td></tr>
                        <tr><td>GSTR-3B Filing</td><td>20th of following month</td><td>ITC reconciliation against GSTR-2B; net GST liability payment</td></tr>
                        <tr><td>TDS Challan Deposit</td><td>7th of following month</td><td>TDS liability entries in QBO; challan deposited by Patron</td></tr>
                        <tr><td>TDS Return (26Q/24Q)</td><td>Quarterly (31 Jul/Oct/Jan/May)</td><td>Quarterly TDS data from QBO; return filed by Patron</td></tr>
                        <tr><td>Income Tax Return (Company)</td><td>31 October (audit) / 31 July (non-audit)</td><td>Annual accounts finalised from QBO; auditor access provided</td></tr>
                        <tr><td>Books Preservation</td><td>8 financial years per Section 128(5)</td><td>QBO subscription must remain active or data exported</td></tr>
                        <tr><td>FLA Return (Foreign Cos.)</td><td>15 July annually to RBI</td><td>Balance sheet data from QBO used to prepare and file FLA return</td></tr>
                    </tbody>
                </table>
                </div>
                <p style="margin-top:16px;"><strong>Need QuickBooks compliance support? <a href="tel:+919459456700">Call +91 945 945 6700</a> or <a href="https://wa.me/919459456700?text=Hi%2C%20I%20need%20help%20with%20QuickBooks%20accounting." target="_blank">WhatsApp us</a> for a free assessment.</strong></p>

            </div>
        </div>
    </div>
</section>

<!-- CONCLUSION + CTA BLOCK (Dark) -->
<section class="content-section" style="background: var(--blue) !important;">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title" style="color:#FFFFFF !important;">Start Your QuickBooks Accounting with Patron Today</h2>
            <div class="content-text" style="text-align:left;">
                
                <p style="color:rgba(255,255,255,0.9);font-size:16px;line-height:1.7;">QuickBooks Online remains the accounting platform of choice for global companies, US/UK/AU parent entities, and Indian businesses with international operations. Its strength is multi-currency handling, 800+ global integrations, and cloud-first design accessible from anywhere. Its limitation in India is the absence of native GSTN API filing and the discontinuation of the India-specific version in April 2023.</p>
                <p style="color:rgba(255,255,255,0.9);font-size:16px;line-height:1.7;">Patron Accounting bridges both gaps: CA-led GST, TDS, and payroll compliance managed alongside your QuickBooks Online account, and migration advisory for businesses moving to Zoho Books or TallyPrime. Whether you need ongoing QBO accounting or help transitioning away from it, Patron's team of qualified CAs delivers the right solution.</p>
                <p style="color:rgba(255,255,255,0.9);font-size:16px;line-height:1.7;"><strong>Monthly accounting from Rs 1,500/month | Migration from Rs 4,999 | 50+ QBO accounts managed | 4.8/5 client rating</strong></p>

            </div>
            <div style="display:flex;gap:14px;flex-wrap:wrap;margin-top:24px;">
                <a href="tel:+919459456700" style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:var(--orange);color:#fff;border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#128222; Call +91 945 945 6700</a>
                <a href="https://wa.me/919459456700?text=Hi%2C%20I%20am%20interested%20in%20QuickBooks%20Accounting%20from%20Patron%20Accounting.%20Please%20call%20me." target="_blank" style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:#25D366;color:#fff;border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#128172; WhatsApp Us</a>
                <a href="mailto:sales@patronaccounting.com?subject=Enquiry%20for%20QuickBooks%20Accounting%20Services&body=Hello%20Patron%20Accounting%20Team%2C%0A%0AI%20am%20interested%20in%20your%20QuickBooks%20Accounting%20services.%0A%0AThank%20you." style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:transparent;color:#fff;border:2px solid rgba(255,255,255,0.3);border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#9993;&#65039; Email Us</a>
            </div>
            <p style="color:rgba(255,255,255,0.7);font-size:13px;margin-top:16px;">Book a Free Consultation - No Obligation.</p>
        </div>
    </div>
</section>

<!-- GSTAT STATE BENCH CITY PAGES (32 Pages) -->
<section class="content-section" style="padding:48px 32px;background:var(--gray-50);">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title" style="text-align:center;margin-bottom:12px;">QuickBooks Accounting Services Across India</h2>
            <p style="text-align:center;color:var(--text-muted);font-size:15px;margin-bottom:40px;">Patron Accounting provides CA-managed QuickBooks Online bookkeeping, GST compliance, and financial reporting across major Indian cities.</p>
      
            <div class="pa-city-block" style="margin-bottom:40px;">
                <div class="pa-city-grid">
                    <a href="/quickbooks-accounting/pune" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Pune</div><div class="pa-card-sub">Maharashtra</div></div></a>
                    <a href="/quickbooks-accounting/mumbai" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Mumbai</div><div class="pa-card-sub">Maharashtra</div></div></a>
                    <a href="/quickbooks-accounting/delhi" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Delhi</div><div class="pa-card-sub">NCR</div></div></a>
                    <a href="/quickbooks-accounting/gurugram" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Gurugram</div><div class="pa-card-sub">Haryana</div></div></a>
                </div>
            </div>
            <div class="pa-city-block">
                <div class="pa-block-title">Related Services</div>
                <div class="pa-block-sub">End-to-end support for QuickBooks Accounting</div>
                <div class="pa-cross-grid">
                    <a href="/zoho-books-accounting" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Zoho Books Accounting</div><div class="pa-card-sub">India</div></div></a>
                    <a href="/tally-accounting" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Tally Accounting</div><div class="pa-card-sub">India</div></div></a>
                    <a href="/xero-accounting" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Xero Accounting</div><div class="pa-card-sub">India</div></div></a>
                    <a href="/gst-returns" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">GST Returns</div><div class="pa-card-sub">India</div></div></a>
                    <a href="/tds-return-filing-24q" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">TDS Return Filing</div><div class="pa-card-sub">India</div></div></a>
                    <a href="/migration-from-tally-to-zoho" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Migration: Tally to Zoho</div><div class="pa-card-sub">India</div></div></a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- CONTENT FRESHNESS FOOTER -->
<section class="content-section" style="padding:32px;">
    <div class="content-container">
        <div class="text-content" style="font-size:13px;color:var(--text-muted);">
            <p><strong>Content Created:</strong> 15 January 2024 &nbsp;|&nbsp; <strong>Last Updated:</strong> <span id="lastUpdatedFooter">15 January 2024</span> &nbsp;|&nbsp; <strong>Next Review:</strong> April 2027 &nbsp;|&nbsp; <strong>Reviewed By:</strong> CA &amp; CS Team, Patron Accounting LLP</p>
            <p>This page is reviewed annually or on Intuit India re-entry announcement, QBO pricing change, or new GST/e-invoicing threshold notification. Next review: April 2027.</p>
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
