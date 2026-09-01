@extends('layouts.service-app')
<!-- External Dependencies (loaded by master layout in production) -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Barlow:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,400&family=DM+Sans:opsz,wght@9..40,400;9..40,500;9..40,600;9..40,700&display=swap" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

@section('meta')
    <title>Mumbai Ind AS 102 ESOP Share-Based Payment Reports</title>
    <meta name="description" content="ESOP share-based payment accounting for Mumbai BKC and Powai firms under Ind AS 102, with Schedule III notes and RoC Mumbai filings, from INR 24,999.">
    <meta name="keywords" content="ESOP Accounting Ind AS 102 Mumbai, ESOP Accounting Ind AS 102 in Mumbai, ESOP Accounting Ind AS 102 services in Mumbai, ESOP services Mumbai, ESOP Accounting Ind AS 102 cost Mumbai, ESOP Accounting Ind AS 102 consultants Mumbai, CA firm for ESOP Accounting Ind AS 102 Mumbai, ESOP advisory Mumbai">
    <link rel="canonical" href="/esop-accounting-ind-as-102/mumbai">
    <meta name="robots" content="index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1">
    <meta property="og:title" content="Mumbai Ind AS 102 ESOP Share-Based Payment Reports | Patron Accounting">
    <meta property="og:description" content="ESOP share-based payment accounting for Mumbai BKC and Powai firms under Ind AS 102, with Schedule III notes and RoC Mumbai filings, from INR 24,999.">
    <meta property="og:url" content="/esop-accounting-ind-as-102/mumbai">
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="Patron Accounting">
    <meta property="og:image" content="https://www.patronaccounting.com/images/og-default-square.png">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="1200">
    <meta property="og:image:type" content="image/png">
    <meta property="og:image:secure_url" content="https://www.patronaccounting.com/images/og-default-square.png">
    <meta property="og:image:alt" content="Patron Accounting - partner you can rely on">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Mumbai Ind AS 102 ESOP Share-Based Payment Reports | Patron Accounting">
    <meta name="twitter:description" content="ESOP share-based payment accounting for Mumbai BKC and Powai firms under Ind AS 102, with Schedule III notes and RoC Mumbai filings, from INR 24,999.">
    <meta name="twitter:image" content="https://www.patronaccounting.com/images/og-default-square.png">
@endsection

@section('schema')    <script type="application/ld+json">{
  "@context": "https://schema.org",
  "@graph": [
    {
      "@type": "Service",
      "@id": "https://www.patronaccounting.com/esop-accounting-ind-as-102/mumbai#service",
      "name": "ESOP Accounting under Ind AS 102",
      "url": "https://www.patronaccounting.com/esop-accounting-ind-as-102/mumbai",
      "description": "Ind AS 102 ESOP and SAR accounting service for Indian companies - Black-Scholes fair valuation, year-wise expense schedule, equity-settled and cash-settled treatment, forfeiture rate estimation, modification and cancellation accounting, Schedule III note disclosure and Directors' Report Rule 12(9) compliance. Coverage includes ICAI Guidance Note 2020 for non-Ind AS companies.",
      "serviceType": "ESOP Accounting and Audit Support Service",
      "areaServed": {
        "@type": "City",
        "name": "Mumbai",
        "sameAs": "https://en.wikipedia.org/wiki/Mumbai"
      },
      "provider": {
        "@id": "https://www.patronaccounting.com/#organization"
      },
      "about": [
        {
          "@type": "Thing",
          "name": "IFRS 2 Share-based Payment",
          "sameAs": "https://en.wikipedia.org/wiki/IFRS_2"
        },
        {
          "@type": "Thing",
          "name": "Black-Scholes Model",
          "sameAs": "https://en.wikipedia.org/wiki/Black%E2%80%93Scholes_model"
        }
      ],
      "hasOfferCatalog": {
        "@type": "OfferCatalog",
        "name": "ESOP Accounting Service Tiers",
        "itemListElement": [
          {
            "@type": "Offer",
            "name": "Single Scheme Annual ESOP Accounting Run",
            "priceCurrency": "INR",
            "price": "24999",
            "description": "Black-Scholes, year-wise schedule, journal entries and Schedule III disclosure for one scheme with one grant batch"
          }
        ]
      }
    },
    {
      "@type": "BreadcrumbList",
      "@id": "https://www.patronaccounting.com/esop-accounting-ind-as-102/mumbai#breadcrumb",
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
          "name": "ESOP Services",
          "item": "https://www.patronaccounting.com/esop-services"
        },
        {
          "@type": "ListItem",
          "position": 3,
          "name": "ESOP Services in Mumbai",
          "item": "https://www.patronaccounting.com/esop-services/mumbai"
        },
        {
          "@type": "ListItem",
          "position": 4,
          "name": "ESOP Accounting under Ind AS 102",
          "item": "https://www.patronaccounting.com/esop-accounting-ind-as-102/mumbai"
        }
      ]
    },
    {
      "@type": "LocalBusiness",
      "additionalType": "https://schema.org/AccountingService",
      "@id": "https://www.patronaccounting.com/esop-accounting-ind-as-102/mumbai#localbusiness",
      "name": "Patron Accounting LLP - ESOP Accounting Ind As 102, Mumbai",
      "url": "https://www.patronaccounting.com/esop-accounting-ind-as-102/mumbai",
      "telephone": "+91-9459456700",
      "areaServed": {
        "@type": "City",
        "name": "Mumbai"
      },
      "address": {
        "@type": "PostalAddress",
        "addressLocality": "Mumbai",
        "addressRegion": "Maharashtra",
        "addressCountry": "IN"
      },
      "parentOrganization": {
        "@id": "https://www.patronaccounting.com/#organization"
      }
    },
    {
      "@type": "FAQPage",
      "@id": "https://www.patronaccounting.com/esop-accounting-ind-as-102/mumbai#faq",
      "datePublished": "2026-06-24T08:00:00+05:30",
      "dateModified": "2026-06-24T08:00:00+05:30",
      "mainEntity": [
        {
          "@type": "Question",
          "name": "Where do Mumbai companies file ESOP forms and do listed issuers face extra rules?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Mumbai-registered companies file Form MGT-14 and Form PAS-3 with RoC Mumbai for the Maharashtra jurisdiction. Unlisted companies follow the Companies (Share Capital and Debentures) Rules 2014. Listed Mumbai issuers on the BSE or NSE additionally comply with the SEBI (Share Based Employee Benefits and Sweat Equity) Regulations 2021, administered from SEBI's headquarters in BKC. The Ind AS 102 accounting expense recognition is the same underlying number, but listed companies have stricter disclosure and trust-route requirements layered on top."
          }
        },
        {
          "@type": "Question",
          "name": "Do BKC and Lower Parel listed companies have to use the Fair Value Method?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Yes. For Mumbai listed issuers, the SEBI (SBEB and Sweat Equity) Regulations 2021 require the Fair Value Method for ESOP accounting, so the Intrinsic Value Method is effectively unavailable once a BKC or Lower Parel company is listed or has filed its DRHP. The fair value is computed at grant date using Black-Scholes (or Binomial for complex features) under Ind AS 102 and recognised over the vesting period, with the SEBI-mandated disclosures in the Directors' Report and notes to accounts."
          }
        },
        {
          "@type": "Question",
          "name": "How should a Mumbai startup filing a DRHP handle past ESOP accounting?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "An Andheri, Powai or Goregaon SaaS startup filing a DRHP must present restated financials with correct Ind AS 102 share-based payment expense for the back years shown in the offer document. The most common issue is prior reliance on the Intrinsic Value Method with face-value exercise price, which understated the ESOP charge. Patron computes the back-years fair value true-up, restates the ESOP Reserve and prepares the merchant-banker and statutory-auditor working file before the DRHP is finalised."
          }
        },
        {
          "@type": "Question",
          "name": "What is the difference between equity-settled and cash-settled share-based payment?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Equity-settled SBP delivers the company's own equity instruments (ESOPs, RSUs) to the employee on vesting and exercise. The expense is the grant-date fair value, NOT remeasured later, with a credit to ESOP Reserve in equity. Cash-settled SBP (Stock Appreciation Rights, Phantom Stock) pays cash equal to the appreciation in share value. The liability is remeasured at fair value each reporting date until settled, with changes through P and L. The cumulative expense for cash-settled equals the actual cash paid."
          }
        },
        {
          "@type": "Question",
          "name": "How is the ESOP expense recognised in books?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "For equity-settled awards: compute grant-date fair value per option using Black-Scholes, multiply by options expected to vest (after forfeiture estimate), divide by vesting period and recognise straight-line for cliff vesting or per-tranche for graded vesting under Ind AS 102 paragraph 20. Journal entry: Dr ESOP Compensation Expense (P and L) and Cr ESOP Reserve (Equity). True up at each reporting date for service and non-market performance conditions."
          }
        },
        {
          "@type": "Question",
          "name": "How is forfeiture rate estimated under Ind AS 102?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Forfeiture rate is estimated at the grant date based on historical employee attrition data, weighted for the seniority and tenure profile of grantees. The estimate is updated at each reporting date as actual forfeitures crystallise. At vesting date, cumulative expense is trued up to reflect the actual number of options that vested. Service conditions and non-market performance conditions are subject to true-up; market conditions (share price targets) are baked into the grant-date fair value and not adjusted later."
          }
        },
        {
          "@type": "Question",
          "name": "Can a non-Ind AS company use the intrinsic value method for ESOP?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Yes. The ICAI Guidance Note on Accounting for Share-based Payments (September 2020), applicable to non-Ind AS companies under the AS framework, permits both the Fair Value Method and the Intrinsic Value Method. Under Intrinsic Value, the expense equals FMV at grant minus exercise price multiplied by options expected to vest, recognised over the vesting period. For schemes with exercise price equal to face value, this often produces near-zero expense - a known Series A diligence flag. Most growth-stage companies voluntarily adopt the Fair Value Method."
          }
        },
        {
          "@type": "Question",
          "name": "What is modification accounting under Ind AS 102?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "If the company modifies an ESOP grant (extends exercise window, lowers exercise price, accelerates vesting, expands pool to existing grants), Ind AS 102 paragraph 27 requires the company to compute the incremental fair value (modified fair value minus original fair value at modification date) and recognise this incremental expense over the remaining vesting period. The original grant-date fair value continues to be recognised over its original vesting period."
          }
        },
        {
          "@type": "Question",
          "name": "How is ESOP accounting done?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "ESOP accounting is carried out under Ind AS 102. At the grant date, the fair value is computed using Black-Scholes, and the expense is recognised over the vesting period (typically 4 years) - Dr ESOP Expense and Cr ESOP Reserve. For cash-settled SARs, the liability must be remeasured at each reporting date. Non-Ind AS companies follow the ICAI Guidance Note 2020. Listed Mumbai companies must also comply with the SEBI SBEB Regulations 2021. From its Mumbai office, Patron delivers the full schedule and journal entries within 5 to 10 working days. Call +91 945 945 6700."
          }
        }
      ]
    }
  ]
}</script>

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
/* Conclusion + CTA Block (Dark) - force light text against dark navy
           background. Overrides .content-text/strong/p default dark colours. */
        .content-section[style*="var(--blue)"] .section-title,
        .content-section[style*="var(--blue)"] h2 {
            color: #FFFFFF !important;
        }
.content-section[style*="var(--blue)"] .content-text,
        .content-section[style*="var(--blue)"] .content-text p {
            color: rgba(255,255,255,0.92) !important;
        }
.content-section[style*="var(--blue)"] .content-text strong,
        .content-section[style*="var(--blue)"] p strong {
            color: #FFFFFF !important;
            font-weight: 700;
        }
.content-section[style*="var(--blue)"] .content-text a:not([style*="background"]) {
            color: rgba(255,255,255,0.92) !important;
            text-decoration: underline;
        }
/* Process Evidence Screenshot  -  Plan 3.2 */
        .process-screenshot-details { margin-top: 14px; }
#who-section ul li:not(.nav-item) > strong:first-child { flex: 0 0 300px; max-width: 300px; }
@media (max-width: 768px) { section ul li:not(.nav-item) { flex-wrap: wrap; } #who-section ul li:not(.nav-item) > strong:first-child { flex-basis: 100%; max-width: 100%; } }
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
                        ESOP Accounting under Ind AS 102 in Mumbai
                    </h1>

                    <p class="text-dark mb-4" style="font-size:1.05rem;font-weight:500;">For BKC and Lower Parel finance houses, the Andheri-Powai SaaS belt and Goregaon-Vikhroli founders - Black-Scholes valuations and Schedule III notes built for SEBI's home market, filed with RoC Mumbai.</p>

                    <div class="expert-attribution-box">
                        <span class="eab-check"><svg width="16" height="16" viewBox="0 0 24 24" fill="currentColor"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg></span>
                        <span class="eab-title">Reviewed by CA &amp; CS Team &middot; Patron Accounting LLP</span>
                        <span class="eab-meta">
                            <span>ICAI & ICSI Registered</span><span class="eab-sep">|</span>
                            <span>15+ Years Experience</span><span class="eab-sep">|</span>
                            <span>Last Updated: 24 June 2026</span>
                        </span>
                        <a href="/authorhub/ca-sundram-gupta" class="eab-link">Verify Credentials &rarr;</a>
                    </div>

                    <div class="mb-4">
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Deliverables:</span> Black-Scholes fair value report, year-wise expense schedule, journal entries and Schedule III note disclosures</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Fees:</span> From INR 24,999 (Exl GST and Govt. Charges)</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Frameworks:</span> Ind AS 102 for Ind AS companies; ICAI Guidance Note 2020 for AS framework companies</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Timeline:</span> 5 to 10 working days for year-end run; 2 to 3 working days for fresh-grant accounting</p>
                        </div>
                    </div>

                    <p class="mb-4 fw-bold" style="color: var(--blue); font-size: 15px;">10,000+ Businesses Served | 4.9 Google Rating | 15+ Years in Practice</p>

                    <div class="hero-cta">
                        <a href="tel:+919459456700" class="btn-video text-decoration-none">
                            <span class="play-circle"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="width:14px;height:14px;color:#fff"><path d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/></svg></span>
                            Call +91 945 945 6700
                        </a>
                        <a href="mailto:info@patronaccounting.com" class="btn-sample text-decoration-none">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="width:18px;height:18px;"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,12 2,6"/></svg>
                            Email Us
                        </a>
                        <a href="https://wa.me/919459456700?text=Hi%2C%20I%20want%20a%20free%20scoping%20call%20for%20ESOP%20Accounting%20under%20Ind%20AS%20102." target="_blank" class="btn-sample text-decoration-none">
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
                                            'service'  => 'ESOP Accounting',
                                            'city'     => 'Mumbai',
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
    'ctaText'    => 'Ind AS 102 and ICAI Guidance Note 2020 dual coverage. Black-Scholes in-house. Schedule III and Directors\' Report Rule 12(9) drafted to audit standard.',
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
            <a href="#what-section" class="toc-btn">What Is Ind AS 102</a>
            <a href="#who-section" class="toc-btn">Who Applies</a>
            <a href="#services-section" class="toc-btn">Deliverables</a>
            <a href="#process-section" class="toc-btn">7-Step Procedure</a>
            <a href="#documents-section" class="toc-btn">Documents</a>
            <a href="#challenges-section" class="toc-btn">Common Errors</a>
            <a href="#fees-section" class="toc-btn">Fees</a>
            <a href="#timeline-section" class="toc-btn">Timeline</a>
            <a href="#comparison-section" class="toc-btn">Equity vs Cash</a>
            <a href="#legal-section" class="toc-btn">Legal Framework</a>
            <a href="#faq-section" class="toc-btn">FAQs</a>

        </div>
        <button class="toc-arrow right" id="tocRight">&#10095;</button>
    </div>
</div>

<!-- SECTION 2: OVERVIEW / INTRO + TL;DR -->
<section class="content-section" id="overview-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">ESOP Accounting under Ind AS 102 - Overview</h2>
            <div class="content-text">
                <div class="highlight-box" style="margin-bottom:20px;">
                    <p><strong>&#128204; TL;DR - ESOP Accounting Services at a Glance</strong></p>
                    <p>ESOP accounting under Ind AS 102 requires recognising the grant-date fair value of equity-settled options as a compensation expense over the vesting period, with a corresponding credit to an ESOP Reserve under equity. Cash-settled SARs are recognised as a liability remeasured at each reporting date. Non-Ind AS companies follow the ICAI Guidance Note on Accounting for Share-based Payments 2020. The expense is computed via Black-Scholes or Binomial pricing, adjusted for service-based forfeitures and modifications.</p>
                </div>
                <p>No Indian city carries as much share-based payment weight as Mumbai. SEBI's headquarters sits at BKC, the BSE clock tower anchors Dalal Street, and within a few kilometres you have the Lower Parel financial-services towers, the Andheri-Powai SaaS belt feeding off IIT-Bombay deep-tech, and the Goregaon-Vikhroli founder corridor. A repricing at a Powai SaaS firm, a fresh <a href="/esop-vs-rsu/mumbai">RSU tranche</a> at a BKC fintech, or a <a href="/esop-vs-phantom-stock/mumbai">phantom-stock plan</a> at a Lower Parel NBFC each produces a different Ind AS 102 expense - and in this market that number is read by audit committees, analysts and, for listed issuers, the SEBI desk down the road.</p>
                <p>Mechanically, ESOP accounting converts an option grant into a compensation charge spread across the vesting period. Three things decide the treatment: whether the company is on Ind AS or the older AS framework, whether the award is equity-settled (an ESOP or RSU) or cash-settled (a SAR or phantom unit), and - uniquely for Mumbai's listed and DRHP-stage companies - whether the SEBI (SBEB and Sweat Equity) Regulations 2021 layer sits on top. Allotment forms PAS-3 and MGT-14 are filed with RoC Mumbai under the Maharashtra jurisdiction.</p>
                <p>Patron Accounting LLP delivers the Black-Scholes valuation, the year-wise expense schedule, the journal entries and the Schedule III note - either embedded in your statutory audit or as a standalone run. We have run these for Mumbai listed entities, pre-IPO companies preparing a DRHP and unlisted growth firms since 2009, with CA, audit and tax teams under one roof and a Mumbai presence alongside our Pune, Delhi and Gurugram offices.</p>
            </div>
        </div>
    </div>
</section>

<!-- SECTION 3: WHAT IS GSTAT APPEAL FILING -->
<section class="content-section" id="what-section">
    <div class="content-container">
        <div class="two-column">
            <div class="column-content">
                <h2 class="section-title">What Is Ind AS 102 ESOP Accounting</h2>
                <div class="content-text what-is-definition">
                    
                    <p>Take a BKC fintech that grants 1,00,000 stock options to a new product team at an exercise price set to its last fundraise valuation. Ind AS 102 is what tells that company it cannot record zero cost just because cash never changes hands - it must put a fair value on the options at grant date and charge it to the P&amp;L over the vesting period. That is the whole point of the standard: share-based payment is real compensation, and Mumbai's listed and analyst-watched issuers cannot leave it off the income statement.</p>
                    <p>The standard is notified under Section 133 of the Companies Act 2013 read with Rule 4 of the Companies (Indian Accounting Standards) Rules 2015. For equity-settled awards the grant-date fair value is fixed and not remeasured; for cash-settled awards (a Lower Parel NBFC's SARs, say) the liability is remeasured every reporting date until it is paid out. The matching credit goes to an ESOP Reserve in equity or to a liability, and the share-based payment note is usually the line item an Andheri-Powai SaaS company's auditors and <a href="/esop-due-diligence-prep-for-funding-and-ma/mumbai">diligence teams</a> probe hardest.</p>
                    <p>Two routes exist. Mumbai groups with a global parent or an overseas listing benefit from Ind AS 102 being materially converged with IFRS 2 - Share-based Payment, so consolidation runs on one basis. Smaller Goregaon and Vikhroli companies still below the Ind AS net-worth threshold instead apply the ICAI Guidance Note on Accounting for Share-based Payments (September 2020) under the Companies (Accounting Standards) Rules 2006.</p>

                </div>
                <div class="highlight-box" style="margin-top:20px;">
                    <p><strong>Key Terms for ESOP Accounting:</strong></p>
                    <p><strong>Grant Date:</strong> The date on which both parties (company and employee) agree to the share-based payment arrangement. For schemes requiring shareholder approval, grant date is the date approval is obtained.</p>
                    <p><strong>Vesting Date:</strong> The date on which the employee becomes unconditionally entitled to the equity instrument. For service conditions, this is the end of the service period.</p>
                    <p><strong>Fair Value:</strong> The price at which the option could be sold in an arm's-length transaction, determined using a recognised option pricing model such as Black-Scholes or Binomial.</p>
                    <p><strong>Equity-Settled SBP:</strong> Awards settled by issuing the company's own equity instruments. Expense recognised over vesting period with credit to ESOP Reserve in equity.</p>
                    <p><strong>Cash-Settled SBP:</strong> Awards settled by paying cash based on the value of equity instruments. Expense over vesting period with credit to a liability remeasured every reporting date.</p>
                    <p><strong>Forfeiture Rate:</strong> Estimated percentage of granted options expected to forfeit due to attrition before vesting. Service and non-market performance conditions are trued up to actual outcomes.</p>

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
                            <text x="100" y="170" font-size="10" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial, sans-serif">ESOP Accounting</text>
                        </svg>
                    </div>
                    <div class="illustration-badge">
                        <span>Indian Accounting Standard</span>
                        <strong>Ind AS 102</strong>
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
            <h2 class="section-title">Who Must Apply Ind AS 102 for ESOP Accounting</h2>
            <div class="content-text">
                
                <h3>Ind AS Framework (Mandatory)</h3>
                <ul>
                    <li>All listed companies on Indian stock exchanges</li>
                    <li>Unlisted companies with net worth equal to or greater than Rs 250 crore</li>
                    <li>Holding, subsidiary, joint venture or associate companies of the above</li>
                    <li>Voluntary adopters who have notified the choice (the choice is irrevocable)</li>
                </ul>
                <h3>AS Framework with ICAI Guidance Note 2020 (Non-Ind AS Companies)</h3>
                <ul>
                    <li>Unlisted companies with net worth below Rs 250 crore (most Seed and Series A startups)</li>
                    <li>Small companies, One Person Companies and dormant companies</li>
                    <li>Companies following Companies (Accounting Standards) Rules 2006 as amended in 2021</li>
                </ul>
                <p><em>Note: under the AS framework, the ICAI Guidance Note (September 2020) still lets a company pick the Intrinsic Value Method (FMV at grant minus exercise price) - convenient for an early Goregaon startup but a trap once Mumbai's capital markets enter the picture. The moment a BKC or Lower Parel company lists on the BSE or NSE, or even files its DRHP, the SEBI (SBEB and Sweat Equity) Regulations 2021 force the Fair Value Method, and the Intrinsic Value shortcut closes. Andheri and Powai SaaS firms on the IPO track should switch to fair value years ahead of the offer document, not in the final restatement.</em></p>
                <h3>What Triggers a Fresh Ind AS 102 Run in Mumbai</h3>
                <ul>
                    <li>The inaugural grant after scheme approval - opening reserve and grant-date fair value for the first cohort</li>
                    <li>Each fresh tranche as a Powai or Andheri SaaS team scales its hiring through the year</li>
                    <li>A modification - repricing, exercise-window extension or vesting acceleration, common around pre-IPO restructuring</li>
                    <li>A cancellation or settlement that accelerates the unrecognised charge</li>
                    <li>The year-end close feeding the cumulative true-up, Schedule III note and, for listed issuers, the SEBI-mandated disclosures</li>
                    <li>The <a href="/esop-for-pre-ipo/mumbai">DRHP and IPO track</a>, where historical share-based payment accounting is restated and stress-tested by the merchant banker and auditors</li>
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
            <h2 class="section-title">Patron ESOP Accounting Deliverables</h2>
            <div class="content-text">
                <p>For Mumbai's listed issuers, BKC fintechs and Lower Parel financial-services firms, the deliverables below are built to survive both statutory audit and the heavier disclosure bar that comes with being a listed or IPO-track company in SEBI's home market. Each output ties back to a documented, defensible input.</p>
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Service</th><th>What We Do</th></tr></thead>
                    <tbody>
                        
                        <tr><td><strong>Grant-Date Fair Value Computation</strong></td><td>Black-Scholes Option Pricing model run on each grant tranche using underlying share price (FMV from IBBI valuer), exercise price, expected option life, volatility, risk-free rate and dividend yield. Binomial model used where complex features apply.</td><td><span class="badge-included">Included</span></td></tr>
                        <tr><td><strong>Year-Wise Expense Schedule</strong></td><td>Excel-style schedule covering each grant tranche, number of options, fair value per option, total expense, vesting schedule (cliff or graded), forfeiture rate, year-by-year expense recognition and cumulative expense to date.</td><td><span class="badge-included">Included</span></td></tr>
                        <tr><td><strong>Journal Entry Schedule</strong></td><td>Quarterly or annual journal entries. ESOP Compensation Expense (P and L) debit, ESOP Reserve (Equity) credit for equity-settled, or SAR Liability for cash-settled. Forfeiture true-ups and modification entries documented separately.</td><td><span class="badge-included">Included</span></td></tr>
                        <tr><td><strong>Forfeiture Rate Estimation and True-Up</strong></td><td>Historical employee attrition analysis to estimate forfeiture rate; revised at each reporting date based on actual outcomes; true-up of cumulative expense at year-end for service and non-market performance conditions.</td><td><span class="badge-included">Included</span></td></tr>
                        <tr><td><strong>Modification and Cancellation Accounting</strong></td><td>On scheme modification (extension of exercise window, repricing, pool top-up impacting prior grants), Patron computes incremental fair value and recognises it over remaining vesting period. Cancellation accelerates remaining expense.</td><td><span class="badge-addon">Add-on</span></td></tr>
                        <tr><td><strong>Schedule III Disclosure and Directors' Report Note</strong></td><td>Notes to Accounts disclosure under Schedule III; ESOP movement table (outstanding, granted, exercised, lapsed, expired); Directors' Report disclosure under Rule 12(9) of Companies (Share Capital and Debentures) Rules 2014.</td><td><span class="badge-included">Included</span></td></tr>
                        <tr><td><strong>Audit Working Paper File</strong></td><td>Sensitivity analysis on Black-Scholes inputs (volatility, risk-free rate, expected life), source documents index and statutory auditor coordination - audit-ready file for sign-off without rework.</td><td><span class="badge-included">Included</span></td></tr>
                        <tr><td><strong>Ind AS 101 First-Time Adoption (Transition)</strong></td><td>Migration from AS framework with ICAI Guidance Note to Ind AS 102 on crossing the net worth threshold; opening ESOP Reserve restated; prior years reconciled.</td><td><span class="badge-addon">Add-on</span></td></tr>


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
        <div class="section-header" style="text-align:center;margin-bottom:48px;">
            <span class="section-eyebrow">Our Process</span>
            <h2 class="section-title">7-Step ESOP Accounting Procedure</h2>
            <p class="section-subtitle" style="text-align:left;max-width:100%;">Whether you are a Lower Parel NBFC running its first phantom-stock plan or an Andheri SaaS company restating ESOP cost for a DRHP, the seven steps below take you from a raw scheme document to a number your statutory auditor - and, for IPO-track issuers, your BKC merchant banker - can sign without rework. The run follows Ind AS 102 paragraphs 10 to 29 and the ICAI Guidance Note 2020, and closes in 5 to 10 working days.</p>
        </div>
        <div class="steps-container">
            
            <div class="step-card">
                <div class="step-content">
                    <span class="step-badge">Step 1</span>
                    <h3 class="step-title">Data Collection</h3>
                    <p class="step-description">Collect the approved ESOP Scheme document, all Board Resolutions for grants, Form SH-6 Register of Employee Stock Options, IBBI Valuer FMV report and a list of grantees with grant dates, vesting schedules and exercise prices.</p>
                    <div class="step-highlights">
                        <span class="highlight-tag">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>
                            Scheme document
                        </span>
                        <span class="highlight-tag">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>
                            SH-6 register
                        </span>
                    </div>
                </div>
                <div class="step-visual">
                    <div class="step-illustration">
                        <div class="illustration-icon">
                            <svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="15" y="5" width="90" height="70" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><line x1="30" y1="22" x2="90" y2="22" stroke="#F5A623" stroke-width="3" stroke-linecap="round"/><line x1="30" y1="38" x2="80" y2="38" stroke="#14365F" stroke-width="2" stroke-linecap="round" opacity="0.3"/><line x1="30" y1="50" x2="70" y2="50" stroke="#14365F" stroke-width="2" stroke-linecap="round" opacity="0.3"/><line x1="30" y1="62" x2="75" y2="62" stroke="#14365F" stroke-width="2" stroke-linecap="round" opacity="0.3"/></svg>
                        </div>
                        <span class="illustration-label">Documents Ready</span>
                        <span class="step-number-large">01</span>
                    </div>
                </div>
            </div>
            <div class="step-card">
                <div class="step-content">
                    <span class="step-badge">Step 2</span>
                    <h3 class="step-title">Black-Scholes Input Build</h3>
                    <p class="step-description">Compute expected share price volatility from listed peer comparables (typically 30 to 60 percent for Indian SaaS, 25 to 40 percent for B2B), risk-free rate from the RBI G-Sec yield curve matched to option life, expected option life (3 to 6 years) and dividend yield.</p>
                    <div class="step-highlights">
                        <span class="highlight-tag">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>
                            Peer volatility
                        </span>
                        <span class="highlight-tag">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>
                            G-Sec yield curve
                        </span>
                    </div>
                </div>
                <div class="step-visual">
                    <div class="step-illustration">
                        <div class="illustration-icon">
                            <svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="20" y="15" width="80" height="60" rx="4" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><polyline points="30,60 45,40 60,55 75,30 90,38" fill="none" stroke="#E8712C" stroke-width="2.5" stroke-linecap="round"/><circle cx="45" cy="40" r="3" fill="#E8712C"/><circle cx="75" cy="30" r="3" fill="#E8712C"/><line x1="30" y1="70" x2="90" y2="70" stroke="#14365F" stroke-width="0.8"/></svg>
                        </div>
                        <span class="illustration-label">Inputs Built</span>
                        <span class="step-number-large">02</span>
                    </div>
                </div>
            </div>
            <div class="step-card">
                <div class="step-content">
                    <span class="step-badge">Step 3</span>
                    <h3 class="step-title">Fair Value Computation</h3>
                    <p class="step-description">Run Black-Scholes per option for each grant tranche; overlay binomial model where performance conditions or market conditions exist. Document all inputs and the rationale for each parameter. Produce a sensitivity table showing fair value at +/- 10 percent volatility and risk-free rate.</p>
                    <div class="step-highlights">
                        <span class="highlight-tag">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>
                            Per-tranche fair value
                        </span>
                        <span class="highlight-tag">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>
                            Sensitivity table
                        </span>
                    </div>
                </div>
                <div class="step-visual">
                    <div class="step-illustration">
                        <div class="illustration-icon">
                            <svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><circle cx="60" cy="45" r="28" fill="#FFF3E0" stroke="#F5A623" stroke-width="1.5"/><text x="60" y="50" font-size="20" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial, sans-serif">FV</text><path d="M85 70l15 15" stroke="#14365F" stroke-width="3" stroke-linecap="round"/></svg>
                        </div>
                        <span class="illustration-label">Fair Value Set</span>
                        <span class="step-number-large">03</span>
                    </div>
                </div>
            </div>
            <div class="step-card">
                <div class="step-content">
                    <span class="step-badge">Step 4</span>
                    <h3 class="step-title">Vesting Schedule Mapping</h3>
                    <p class="step-description">Map vesting tranches against accounting periods. Straight-line recognition for cliff vesting; graded recognition for tranche-based vesting per Ind AS 102 paragraph 20 (each tranche treated as a separate award). Produce the year-wise expense schedule.</p>
                    <div class="step-highlights">
                        <span class="highlight-tag">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>
                            Cliff or graded
                        </span>
                        <span class="highlight-tag">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>
                            Para 20 tranches
                        </span>
                    </div>
                </div>
                <div class="step-visual">
                    <div class="step-illustration">
                        <div class="illustration-icon">
                            <svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="15" y="20" width="90" height="50" rx="4" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><line x1="40" y1="25" x2="40" y2="65" stroke="#14365F" stroke-width="0.8"/><line x1="60" y1="25" x2="60" y2="65" stroke="#14365F" stroke-width="0.8"/><line x1="80" y1="25" x2="80" y2="65" stroke="#14365F" stroke-width="0.8"/><rect x="18" y="35" width="20" height="8" fill="#E8712C" opacity="0.7"/><rect x="42" y="42" width="16" height="8" fill="#E8712C" opacity="0.6"/><rect x="62" y="48" width="16" height="8" fill="#E8712C" opacity="0.5"/><rect x="82" y="55" width="20" height="8" fill="#E8712C" opacity="0.4"/></svg>
                        </div>
                        <span class="illustration-label">Schedule Mapped</span>
                        <span class="step-number-large">04</span>
                    </div>
                </div>
            </div>
            <div class="step-card">
                <div class="step-content">
                    <span class="step-badge">Step 5</span>
                    <h3 class="step-title">Forfeiture Rate Application</h3>
                    <p class="step-description">Apply the estimated forfeiture rate from historical attrition data, compute expected options to vest and true up at year-end to actual. Service conditions and non-market performance conditions are subject to true-up; market conditions are baked into grant-date fair value.</p>
                    <div class="step-highlights">
                        <span class="highlight-tag">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>
                            Attrition history
                        </span>
                        <span class="highlight-tag">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>
                            Year-end true-up
                        </span>
                    </div>
                </div>
                <div class="step-visual">
                    <div class="step-illustration">
                        <div class="illustration-icon">
                            <svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="20" y="15" width="80" height="60" rx="4" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><circle cx="40" cy="45" r="8" fill="#E8712C" opacity="0.7"/><circle cx="60" cy="45" r="8" fill="#E8712C" opacity="0.7"/><circle cx="80" cy="45" r="8" fill="#C13E3E" opacity="0.7"/><line x1="74" y1="39" x2="86" y2="51" stroke="#fff" stroke-width="2" stroke-linecap="round"/><line x1="86" y1="39" x2="74" y2="51" stroke="#fff" stroke-width="2" stroke-linecap="round"/></svg>
                        </div>
                        <span class="illustration-label">Forfeiture Trued</span>
                        <span class="step-number-large">05</span>
                    </div>
                </div>
            </div>
            <div class="step-card">
                <div class="step-content">
                    <span class="step-badge">Step 6</span>
                    <h3 class="step-title">Journal Entry Generation</h3>
                    <p class="step-description">Generate quarterly and annual journal entries. Dr ESOP Compensation Expense in P and L; Cr ESOP Reserve in Equity for equity-settled awards, or Cr SAR Liability for cash-settled. Pass year-end remeasurement entries for cash-settled liabilities at fair value.</p>
                    <div class="step-highlights">
                        <span class="highlight-tag">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>
                            P and L expense
                        </span>
                        <span class="highlight-tag">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>
                            ESOP Reserve credit
                        </span>
                    </div>
                </div>
                <div class="step-visual">
                    <div class="step-illustration">
                        <div class="illustration-icon">
                            <svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="15" y="5" width="90" height="70" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><text x="22" y="25" font-size="9" fill="#14365F" font-family="Courier New, monospace">Dr</text><line x1="38" y1="22" x2="98" y2="22" stroke="#14365F" stroke-width="1" opacity="0.4"/><text x="22" y="42" font-size="9" fill="#14365F" font-family="Courier New, monospace">Cr</text><line x1="38" y1="39" x2="98" y2="39" stroke="#14365F" stroke-width="1" opacity="0.4"/><line x1="22" y1="55" x2="98" y2="55" stroke="#E8712C" stroke-width="2" stroke-linecap="round"/><text x="22" y="68" font-size="7" fill="#14365F" font-family="Courier New, monospace" opacity="0.6">P&amp;L Entry</text></svg>
                        </div>
                        <span class="illustration-label">Entries Posted</span>
                        <span class="step-number-large">06</span>
                    </div>
                </div>
            </div>
            <div class="step-card">
                <div class="step-content">
                    <span class="step-badge">Step 7</span>
                    <h3 class="step-title">Disclosure and Audit Coordination</h3>
                    <p class="step-description">Draft the Schedule III Notes to Accounts paragraph (Note 14 typically) with ESOP movement table, the Directors' Report Rule 12(9) paragraph and the audit working paper file. Coordinate with the statutory auditor for sign-off without rework.</p>
                    <div class="step-highlights">
                        <span class="highlight-tag">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>
                            Schedule III note
                        </span>
                        <span class="highlight-tag">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>
                            Audit working paper
                        </span>
                    </div>
                </div>
                <div class="step-visual">
                    <div class="step-illustration">
                        <div class="illustration-icon">
                            <svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="15" y="5" width="90" height="70" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><circle cx="92" cy="20" r="14" fill="#E8F5E9" stroke="#25D366" stroke-width="1.5"/><path d="M85 20l5 5 8-8" stroke="#25D366" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" fill="none"/><line x1="25" y1="40" x2="80" y2="40" stroke="#14365F" stroke-width="2" stroke-linecap="round" opacity="0.3"/><line x1="25" y1="52" x2="70" y2="52" stroke="#14365F" stroke-width="2" stroke-linecap="round" opacity="0.3"/><line x1="25" y1="64" x2="75" y2="64" stroke="#14365F" stroke-width="2" stroke-linecap="round" opacity="0.3"/></svg>
                        </div>
                        <span class="illustration-label">Audit Ready</span>
                        <span class="step-number-large">07</span>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

<!-- SECTION 8: DOCUMENTS REQUIRED -->
<section class="content-section" id="documents-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Documents and Data Checklist</h2>
            <div class="content-text">
                <p>In Mumbai the same pack does triple duty: it supports the statutory audit, the Schedule III note, and - for a BKC listed issuer or a Powai company drafting a DRHP - the SEBI disclosure and offer-document trail. So we gather it once. Send whatever the finance and company-secretary teams have to hand; anything missing we reconstruct from the RoC Mumbai registered-office records.</p>
                <ul>
                    <li>Approved ESOP Scheme Document and EGM Special Resolution</li>
                    <li>All Board Resolutions for grant tranches (per quarter or per batch)</li>
                    <li>Form SH-6 Register of Employee Stock Options</li>
                    <li>Grant Letters with vesting schedule, exercise price and expiry per employee</li>
                    <li>IBBI Registered Valuer FMV report (grant-date fair value source)</li>
                    <li>List of grantees with grant date, options granted, vesting tranches and status (active, exited, exercised)</li>
                    <li>Historical employee attrition data for forfeiture rate estimation</li>
                    <li>Last year's audited financials (for opening ESOP Reserve balance)</li>
                    <li>Any modification or cancellation Board Resolutions during the year</li>
                </ul>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 9: CHALLENGES -->
<section class="content-section" id="challenges-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Common ESOP Accounting Errors and How We Fix Them</h2>
            <div class="content-text">
                <p>In a market this close to SEBI, an ESOP error rarely stays quiet. It surfaces in an audit-committee pack at a Lower Parel head office, in an analyst's question on a results call, or as a DRHP comment that stalls a Powai company's listing. The five below are the ones we most often clean up for Mumbai clients before they cost a qualification.</p>
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Challenge</th><th>Impact</th><th>How Patron Accounting Solves It</th></tr></thead>
                    <tbody>
                        
                        <tr><td><strong>Intrinsic Value Method on Face-Value Schemes</strong></td><td>Many Seed-stage startups use the ICAI Guidance Note's Intrinsic Value Method with exercise price equal to face value (Rs 10), producing near-zero compensation expense despite real economic value. Auditor non-disclosure flag triggers Series A diligence reopen.</td><td>Patron computes both Intrinsic Value (for current books) and shadow Fair Value (for diligence) to bridge the gap proactively before the next funding round.</td></tr>
                        <tr><td><strong>Grant Date Confusion</strong></td><td>Founders treat the EGM resolution date as the grant date for all employees. Ind AS 102 defines grant date as the date both parties agree - for new hires, this is the date the grant letter is accepted, not the EGM date.</td><td>Patron tracks each grantee's individual grant date in the SH-6 register and runs separate fair value computations per grant cohort.</td></tr>
                        <tr><td><strong>Cash-Settled SAR Treated as Equity-Settled</strong></td><td>Some schemes hide SAR features (cash payment on exercise window) inside the ESOP document. These are cash-settled SBPs requiring liability accounting with remeasurement at each reporting date.</td><td>Patron reviews the scheme document line by line, classifies each award correctly and applies the right measurement model.</td></tr>
                        <tr><td><strong>Missing Forfeiture True-Up</strong></td><td>Companies estimate forfeiture rate at grant and forget to update. Ind AS 102 paragraph 20 requires updating the estimate at each reporting date and trueing-up cumulative expense at vesting based on actual outcomes.</td><td>Patron's annual run includes the forfeiture true-up working, with revised cumulative expense computation and audit-ready supporting paper.</td></tr>
                        <tr><td><strong>Modification Not Accounted</strong></td><td>Pool top-ups, exercise window extensions or repricing are treated as administrative tweaks. Ind AS 102 paragraph 27 requires recognising incremental fair value over the remaining vesting period.</td><td>Patron computes incremental fair value at modification date and recognises the additional expense alongside the original grant expense.</td></tr>


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
            <h2 class="section-title">ESOP Accounting Fees and Engagement Tiers</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Fee Component</th><th>Amount</th></tr></thead>
                    <tbody>
                        
                        <tr><td>Single Scheme - Single Grant - Annual Run</td><td>Black-Scholes, year-wise schedule, journal entries and Schedule III disclosure for one scheme with one grant batch</td><td class="table-amount">Quoted on scoping call</td></tr>
                        <tr><td>Single Scheme - Multiple Grant Tranches - Annual Run</td><td>Above plus multiple quarterly grants, forfeiture true-up and modifications if applicable</td><td class="table-amount">Quoted on scoping call</td></tr>
                        <tr><td>Multi-Scheme Annual Run (2 to 3 schemes)</td><td>Above plus multi-scheme reconciliation and group consolidation if subsidiary grants exist</td><td class="table-amount">Quoted on scoping call</td></tr>
                        <tr><td>Modification or Cancellation Accounting</td><td>Incremental fair value working plus journal entries and disclosure refresh for one modification event</td><td class="table-amount">Quoted on scoping call</td></tr>
                        <tr><td>Ind AS 101 First-Time Adoption (Transition)</td><td>Migrate from AS framework with ICAI Guidance Note to Ind AS 102; opening balance restatement and prior-year reconciliation</td><td class="table-amount">Quoted on scoping call</td></tr>
                        <tr><td>Bundled with Audit Engagement</td><td>ESOP accounting embedded within the statutory audit deliverable</td><td class="table-amount">Quoted separately</td></tr>
                        <tr><td><strong>Patron Accounting Professional Fees</strong></td><td>Standard starting price for single-scheme annual ESOP accounting run under Ind AS 102 or ICAI Guidance Note 2020</td><td class="table-amount"><strong>From INR 24,999 (Exl GST and Govt. Charges)</strong></td></tr>


                    </tbody>
                </table>
                </div>
                <p style="margin-top:16px;font-size:13px;color:var(--text-muted);font-style:italic;">All fees and charges listed are indicative only and do not constitute a binding offer. Final amounts may vary depending on the volume of work and the complexity involved.</p>
                <p style="margin-top:16px;">Professional service charges for drafting, filing, and representation are separate from the statutory fees. The exact fee depends on the complexity of the case, disputed amount, and number of hearings required. Contact us for a detailed quote.</p>
                <p style="margin-top:16px;font-size:13px;color:var(--text-muted);font-style:italic;"><strong>Disclaimer:</strong> All fees and charges listed are indicative only and do not constitute a binding offer. Final amounts may vary depending on the volume of work and the complexity involved.</p>
                <p style="margin-top:16px;"><strong>Get a free ESOP Accounting consultation - <a href="tel:+919459456700">Call +91 945 945 6700</a> or <a href="https://wa.me/919459456700?text=Hi%2C%20please%20share%20a%20quote%20for%20ESOP%20Accounting%20under%20Ind%20AS%20102." target="_blank">WhatsApp us</a>. No-obligation assessment.</strong></p>
            </div>
        </div>
    </div>
</section>

<!-- SECTION 11: TIMELINE -->
<section class="content-section" id="timeline-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Engagement Timeline</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Stage</th><th>Estimated Timeline</th></tr></thead>
                    <tbody>
                        
                        <tr><td>Data collection from finance and HR teams</td><td class="table-amount">1 to 2 working days</td></tr>
                        <tr><td>Black-Scholes input build (volatility, risk-free, expected life)</td><td class="table-amount">1 working day</td></tr>
                        <tr><td>Fair value computation and grant-wise schedule</td><td class="table-amount">1 to 2 working days</td></tr>
                        <tr><td>Forfeiture rate estimation and true-up working</td><td class="table-amount">1 working day</td></tr>
                        <tr><td>Journal entries and audit working paper file</td><td class="table-amount">1 working day</td></tr>
                        <tr><td>Schedule III note and Directors' Report disclosure draft</td><td class="table-amount">1 working day</td></tr>
                        <tr><td>Review with management and auditor coordination</td><td class="table-amount">1 to 2 working days</td></tr>
                        <tr><td><strong>Total Annual Run</strong></td><td class="table-amount"><strong>5 to 10 working days</strong></td></tr>


                    </tbody>
                </table>
                </div>
                <div class="highlight-box" style="margin-top:16px;">
                    
                    Fresh-grant fair value computation (quarterly grant batches) can be turned around in 2 to 3 working days from the date of data submission. Year-end consolidated run typically aligned to the statutory audit timeline (April to June for March year-end companies).

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
            <h2 class="section-title">Why Engage Patron for ESOP Accounting</h2>
        </div>
        <div class="features-grid">
    <article class="feature-card">
        <h3>Dual Framework Coverage</h3>
        <p>Ind AS 102 and ICAI Guidance Note 2020 dual coverage - one team handles both frameworks, including transition under Ind AS 101 when the company crosses the net worth threshold.</p>
    </article>
    <article class="feature-card">
        <h3>In-House Black-Scholes</h3>
        <p>Black-Scholes and Binomial computations done in-house with documented input rationale - no actuarial pass-through delays. Sensitivity analysis on volatility, risk-free rate and expected life included.</p>
    </article>
    <article class="feature-card">
        <h3>Audit-Ready File</h3>
        <p>Working paper file with full input source documentation - statutory auditor sign-off without rework. Coordinated with IBBI Valuer and SEBI Merchant Banker for input consistency.</p>
    </article>
    <article class="feature-card">
        <h3>Schedule III + Rule 12(9)</h3>
        <p>Notes to Accounts and Directors' Report disclosure drafted to audit standard. ESOP movement table aligned to the audit committee presentation format.</p>
    </article>
    <article class="feature-card">
        <h3>Annual Retainer Calendar</h3>
        <p>Engagement synced to your reporting and, for listed issuers, your SEBI disclosure calendar - no last-minute scramble before the audit committee. Quarterly fresh-grant valuations turned around in 2 to 3 working days.</p>
    </article>
    <article class="feature-card">
        <h3>15+ Years Across MCA, ICAI</h3>
        <p>Experience spans MCA filings, ICAI audit standards, statutory audit and Ind AS conversion engagements. CA, audit and tax teams under one roof.</p>
    </article>
</div>
    </div>
</section>

<!-- SECTION 12A: SOCIAL PROOF -->
<section class="content-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Trusted by Indian Businesses for Statutory Accounting</h2>
            <div class="content-text">
                
                <p><strong>10,000+ Businesses Served | 4.9 Google Rating | 50,000+ Documents Filed | 15+ Years in Practice</strong></p>
                <p>Our Series B investor's diligence team flagged missing share-based payment expense in our books. Patron rebuilt 2 years of ESOP accounting under the ICAI Guidance Note with shadow Fair Value workings, journal entries and a clean Schedule III note. The audit sign-off followed in three weeks. - CFO, B2B SaaS startup (Bengaluru).</p>
                <p>As we crossed the Rs 250 crore net worth threshold and moved from AS framework to Ind AS, Patron ran the Ind AS 101 first-time adoption ESOP transition - opening ESOP Reserve restated, prior years reconciled. Zero adjustments at the audit committee. - Group Controller, growth-stage logistics (Mumbai).</p>
                <p><strong>With offices in Pune, Mumbai, Delhi and Gurugram, Patron Accounting serves businesses across India - both in-person and remotely.</strong></p>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 13: SELF-FILING vs PROFESSIONAL COMPARISON -->
<section class="content-section" id="comparison-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Equity-Settled vs Cash-Settled Share-Based Payment</h2>
            <div class="content-text">
                <p>A Lower Parel NBFC might give equity-settled ESOPs to its senior desk but cash-settled phantom units to dealers it cannot easily put on the cap table; a BKC fintech might run RSUs for engineers and SARs for advisory roles. That mix is common across Mumbai's financial-services and fintech firms, and the two routes diverge sharply on measurement, balance-sheet presentation and - for listed issuers - the SEBI disclosure that follows. The table below lays out exactly where.</p>
                <div class="table-responsive-wrapper">
                <table>
                    <thead>
                        <tr>
                            <th>Parameter</th>
                            <th>Equity-Settled (ESOP / RSU)</th>
                            <th>Cash-Settled (SAR / Phantom)</th>
                        </tr>
</thead>
                    <tbody>
                        
                        <tr><td><strong>Settlement</strong></td><td>Company's own equity shares delivered on exercise</td><td>Cash equal to the appreciation in share value</td></tr>
                        <tr><td><strong>Measurement Date</strong></td><td>Grant date fair value, NOT remeasured</td><td>Remeasured at fair value every reporting date until settled</td></tr>
                        <tr><td><strong>Credit Account</strong></td><td>ESOP Reserve under Equity</td><td>SAR Liability under Other Liabilities</td></tr>
                        <tr><td><strong>P and L Impact</strong></td><td>Compensation expense over vesting period, fixed at grant</td><td>Compensation expense plus remeasurement gains and losses</td></tr>
                        <tr><td><strong>Cumulative Expense</strong></td><td>Equal to grant-date fair value times options vested</td><td>Equal to actual cash paid on settlement</td></tr>
                        <tr><td><strong>Schedule III Presentation</strong></td><td>Reserves and Surplus - ESOP Reserve</td><td>Current or Non-Current Liabilities - SAR Liability</td></tr>
                        <tr><td><strong>Ind AS 102 Paragraphs</strong></td><td>Paragraphs 10 to 29</td><td>Paragraphs 30 to 33D</td></tr>


                    </tbody>
                </table>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- SECTION 14: RELATED SERVICES -->

<!-- SECTION 15A: LEGAL FRAMEWORK -->
<section class="content-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Legal and Accounting Framework</h2>
            <div class="content-text">
                <p>For a Mumbai company the statute stacks in layers: allotment forms go to RoC Mumbai under the Maharashtra jurisdiction, the accounting rests on the Ind AS 102 framework set out below, and any BSE- or NSE-listed issuer carries the SEBI (Share Based Employee Benefits and Sweat Equity) Regulations 2021 on top - administered, fittingly, from SEBI's own BKC headquarters. The core measurement provisions are these.</p>
                <ul>
                    <li><strong>Indian Accounting Standard (Ind AS) 102 - Share-based Payment</strong> - notified under Section 133 of the Companies Act 2013 read with Rule 4 of the Companies (Indian Accounting Standards) Rules 2015. <a href="https://www.mca.gov.in" target="_blank" rel="noopener">Ministry of Corporate Affairs (MCA21)</a>.</li>
                    <li><strong>Ind AS 102 paragraphs 7 to 9</strong> - recognition principle. Goods or services received are recognised when received with a corresponding equity or liability entry.</li>
                    <li><strong>Ind AS 102 paragraphs 10 to 29</strong> - equity-settled SBP. Fair value at grant date NOT remeasured; recognised over vesting period.</li>
                    <li><strong>Ind AS 102 paragraphs 19 to 21</strong> - vesting and non-vesting conditions. Service and non-market performance conditions trued up to actual outcomes; market conditions baked into grant-date fair value.</li>
                    <li><strong>Ind AS 102 paragraphs 26 to 29</strong> - modifications, cancellations and settlements. Incremental fair value over remaining vesting period; cancellation accelerates remaining expense.</li>
                    <li><strong>Ind AS 102 paragraphs 30 to 33D</strong> - cash-settled SBP. Liability remeasured at fair value each reporting date until settled; changes through P and L.</li>
                    <li><strong>Ind AS 102 paragraphs 44 to 52</strong> - disclosure requirements. Description of arrangements, weighted average exercise price, total expense and year-end movement table.</li>
                    <li><strong>Companies (Indian Accounting Standards) Rules 2015</strong> - mandatory Ind AS for listed companies, unlisted companies with net worth equal to or greater than Rs 250 crore, and group entities of the above.</li>
                    <li><strong>Companies (Accounting Standards) Rules 2006 (as amended 2021)</strong> - AS framework for non-Ind AS companies.</li>
                    <li><strong>ICAI Guidance Note on Accounting for Share-based Payments (September 2020)</strong> - for AS framework companies. Permits Fair Value Method or Intrinsic Value Method. <a href="https://www.icai.org" target="_blank" rel="noopener">Institute of Chartered Accountants of India (ICAI)</a>.</li>
                    <li><strong>Schedule III, Companies Act 2013</strong> - presentation of ESOP Reserve under Reserves and Surplus on the balance sheet and Notes to Accounts disclosure.</li>
                    <li><strong>Rule 12(9), Companies (Share Capital and Debentures) Rules 2014</strong> - ESOP disclosure in Directors' Report (options granted, vested, exercised, lapsed, employees benefited).</li>
                    <li><strong>Section 134(3)(c), Companies Act 2013</strong> - statutory requirement for the Directors' Report to include the prescribed disclosures.</li>
                    <li><strong>IFRS 2 - Share-based Payment</strong> - international standard issued by the <a href="https://www.ifrs.org" target="_blank" rel="noopener">IFRS Foundation</a>. Ind AS 102 is materially converged with this.</li>
                </ul>

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
                    <h2 class="faq-expanded__title">Frequently Asked Questions</h2>
                    <p class="faq-expanded__lead">Quick answers on Ind AS 102 applicability, measurement, journal entries, forfeiture and modification accounting.</p>
                    @include('partials.bigin-form', [
                        'variant'  => 'compact',
                        'service'  => 'ESOP Accounting',
                        'city'     => 'Mumbai',
                    ])
                </aside>
                <div class="faq-expanded__list">
                    <div class="faq-expanded__item" id="faq-1">
                        <h3 class="faq-expanded__q">Where do Mumbai companies file ESOP forms and do listed issuers face extra rules?</h3>
                        <div class="faq-expanded__a"><p>Mumbai-registered companies file Form MGT-14 and Form PAS-3 with RoC Mumbai for the Maharashtra jurisdiction. Unlisted companies follow the Companies (Share Capital and Debentures) Rules 2014. Listed Mumbai issuers on the BSE or NSE additionally comply with the SEBI (Share Based Employee Benefits and Sweat Equity) Regulations 2021, administered from SEBI's headquarters in BKC. The Ind AS 102 accounting expense recognition is the same underlying number, but listed companies have stricter disclosure and trust-route requirements layered on top.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-2">
                        <h3 class="faq-expanded__q">Do BKC and Lower Parel listed companies have to use the Fair Value Method?</h3>
                        <div class="faq-expanded__a"><p>Yes. For Mumbai listed issuers, the SEBI (SBEB and Sweat Equity) Regulations 2021 require the Fair Value Method for ESOP accounting, so the Intrinsic Value Method is effectively unavailable once a BKC or Lower Parel company is listed or has filed its DRHP. The fair value is computed at grant date using Black-Scholes (or Binomial for complex features) under Ind AS 102 and recognised over the vesting period, with the SEBI-mandated disclosures in the Directors' Report and notes to accounts.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-3">
                        <h3 class="faq-expanded__q">How should a Mumbai startup filing a DRHP handle past ESOP accounting?</h3>
                        <div class="faq-expanded__a"><p>An Andheri, Powai or Goregaon SaaS startup filing a DRHP must present restated financials with correct Ind AS 102 share-based payment expense for the back years shown in the offer document. The most common issue is prior reliance on the Intrinsic Value Method with face-value exercise price, which understated the ESOP charge. Patron computes the back-years fair value true-up, restates the ESOP Reserve and prepares the merchant-banker and statutory-auditor working file before the DRHP is finalised.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-4">
                        <h3 class="faq-expanded__q">What is the difference between equity-settled and cash-settled share-based payment?</h3>
                        <div class="faq-expanded__a"><p>Equity-settled SBP delivers the company's own equity instruments (ESOPs, RSUs) to the employee on vesting and exercise. The expense is the grant-date fair value, NOT remeasured later, with a credit to ESOP Reserve in equity. Cash-settled SBP (Stock Appreciation Rights, Phantom Stock) pays cash equal to the appreciation in share value. The liability is remeasured at fair value each reporting date until settled, with changes through P and L. The cumulative expense for cash-settled equals the actual cash paid.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-5">
                        <h3 class="faq-expanded__q">How is the ESOP expense recognised in books?</h3>
                        <div class="faq-expanded__a"><p>For equity-settled awards: compute grant-date fair value per option using Black-Scholes, multiply by options expected to vest (after forfeiture estimate), divide by vesting period and recognise straight-line for cliff vesting or per-tranche for graded vesting under Ind AS 102 paragraph 20. Journal entry: Dr ESOP Compensation Expense (P and L) and Cr ESOP Reserve (Equity). True up at each reporting date for service and non-market performance conditions.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-6">
                        <h3 class="faq-expanded__q">How is forfeiture rate estimated under Ind AS 102?</h3>
                        <div class="faq-expanded__a"><p>Forfeiture rate is estimated at the grant date based on historical employee attrition data, weighted for the seniority and tenure profile of grantees. The estimate is updated at each reporting date as actual forfeitures crystallise. At vesting date, cumulative expense is trued up to reflect the actual number of options that vested. Service conditions and non-market performance conditions are subject to true-up; market conditions (share price targets) are baked into the grant-date fair value and not adjusted later.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-7">
                        <h3 class="faq-expanded__q">Can a non-Ind AS company use the intrinsic value method for ESOP?</h3>
                        <div class="faq-expanded__a"><p>Yes. The ICAI Guidance Note on Accounting for Share-based Payments (September 2020), applicable to non-Ind AS companies under the AS framework, permits both the Fair Value Method and the Intrinsic Value Method. Under Intrinsic Value, the expense equals FMV at grant minus exercise price multiplied by options expected to vest, recognised over the vesting period. For schemes with exercise price equal to face value, this often produces near-zero expense - a known Series A diligence flag. Most growth-stage companies voluntarily adopt the Fair Value Method.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-8">
                        <h3 class="faq-expanded__q">What is modification accounting under Ind AS 102?</h3>
                        <div class="faq-expanded__a"><p>If the company modifies an ESOP grant (extends exercise window, lowers exercise price, accelerates vesting, expands pool to existing grants), Ind AS 102 paragraph 27 requires the company to compute the incremental fair value (modified fair value minus original fair value at modification date) and recognise this incremental expense over the remaining vesting period. The original grant-date fair value continues to be recognised over its original vesting period.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-9">
                        <h3 class="faq-expanded__q">How is ESOP accounting done?</h3>
                        <div class="faq-expanded__a"><p>ESOP accounting is carried out under Ind AS 102. At the grant date, the fair value is computed using Black-Scholes, and the expense is recognised over the vesting period (typically 4 years) - Dr ESOP Expense and Cr ESOP Reserve. For cash-settled SARs, the liability must be remeasured at each reporting date. Non-Ind AS companies follow the ICAI Guidance Note 2020. Listed Mumbai companies must also comply with the SEBI SBEB Regulations 2021. From its Mumbai office, Patron delivers the full schedule and journal entries within 5 to 10 working days. Call <a href="tel:+919459456700" style="color:inherit;">+91 945 945 6700</a>.</p></div>
                    </div>
                </div>
            </div>


            <!-- Quick Answers -->
            <div class="highlight-box" style="margin-top:32px;">
                <p><strong>Quick Answers</strong></p>
                <ul>
                    <li><strong>What journal entry is passed at grant?</strong> No entry at grant. Expense is recognised over the vesting period starting from the grant date.</li>
                    <li><strong>Is grant-date fair value remeasured later for equity-settled awards?</strong> No. Equity-settled grant-date fair value is fixed. Cash-settled liability is remeasured each reporting date.</li>
                    <li><strong>What happens to the ESOP Reserve at exercise?</strong> On exercise, the ESOP Reserve balance transfers to Share Capital and Securities Premium against the new share allotment.</li>
                    <li><strong>What if options lapse unexercised after vesting?</strong> The ESOP Reserve is transferred to General Reserve at expiry. No P and L impact post the vesting date.</li>
                    <li><strong>Is Black-Scholes the mandatory valuation model under Ind AS 102?</strong> No single model is mandated; Ind AS 102 paragraph B4 requires a recognised option pricing model. Black-Scholes is most common; Binomial is used for complex features; Monte Carlo for market conditions.</li>
                    <li><strong>When is ESOP expense reversed under Ind AS 102?</strong> On forfeiture before vesting for service conditions and non-market performance conditions, through a true-up reversal of cumulative expense at the reporting date or vesting date.</li>
                </ul>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 18: URGENCY CTA -->
<section class="content-section" style="background: var(--orange-lighter) !important; border-left: 4px solid var(--orange);">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Series A or Audit Coming Up - Get Your ESOP Accounting in Order</h2>
            <div class="content-text">
                
                Missing share-based payment expense in the books is the most common Series A diligence reopen. Wrong classification of SARs as equity-settled is the most common audit qualification. Get a free scoping call with the Patron Ind AS 102 team - we will tell you in 20 minutes what your ESOP accounting actually needs. <strong><a href="tel:+919459456700" style="color:inherit;text-decoration:underline;">Call +91 945 945 6700</a></strong> or <strong><a href="https://wa.me/919459456700?text=Hi%2C%20I%20would%20like%20a%20free%20consultation%20about%20ESOP%20services." target="_blank" rel="noopener" style="color:inherit;text-decoration:underline;">WhatsApp us</a></strong> for a free scoping conversation.

            </div>
        </div>
    </div>
</section>

<!-- CONCLUSION + CTA BLOCK (Dark) -->
<section class="content-section" style="background: var(--blue) !important;">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title" style="color:#FFFFFF !important;">Get Your ESOP Accounting Done Right - Talk to Patron</h2>
            <div class="content-text" style="text-align:left;">
                
                <p style="color:rgba(255,255,255,0.92);">ESOP accounting under Ind AS 102 (or the ICAI Guidance Note 2020 for non-Ind AS companies) is the layer where stock option grants become P and L compensation expense over the vesting period. The mechanics are technical - Black-Scholes inputs, vesting tranches, forfeiture true-ups and modification accounting - but the audit and diligence consequences of getting it wrong are significant.</p>
                <p style="color:rgba(255,255,255,0.92);">Patron Accounting LLP handles ESOP accounting as a focused deliverable or as an embedded module within the statutory audit engagement, with CA, audit and tax teams under one roof. The firm has been advising Indian businesses since 2009 across Pune, Mumbai, Delhi and Gurugram.</p>
                <p style="color:rgba(255,255,255,0.92);"><strong>Call <a href="tel:+919459456700" style="color:inherit;">+91 945 945 6700</a> or <a href="https://wa.me/919459456700?text=Hi%2C%20I%20need%20ESOP%20advisory.%20Please%20share%20details.">WhatsApp us</a></strong> for a free scoping call. Response within 2 hours during business hours.</p>

            </div>
            <div style="display:flex;gap:14px;flex-wrap:wrap;margin-top:24px;">
                <a href="tel:+919459456700" style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:var(--orange);color:#fff;border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#128222; Call +91 945 945 6700</a>
                <a href="https://wa.me/919459456700?text=Hi%2C%20please%20share%20a%20quote%20for%20ESOP%20Accounting%20under%20Ind%20AS%20102." target="_blank" style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:#25D366;color:#fff;border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#128172; WhatsApp Us</a>
                <a href="mailto:sales@patronaccounting.com" style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:transparent;color:#fff;border:2px solid rgba(255,255,255,0.3);border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#9993;&#65039; Email Us</a>
            </div>
            <p style="color:rgba(255,255,255,0.7);font-size:13px;margin-top:16px;">Book a Free Consultation - No Obligation.</p>
        </div>
    </div>
</section>


<!-- RELATED SERVICES -->
<section class="content-section">
    <div class="content-container"><div class="text-content">
        <h2 class="section-title">Related Services</h2>
        <div class="content-text"><p>Start with the national ESOP Accounting Ind AS 102 service, then explore complementary ESOP services across India.</p>
        <ul>
                    <li><strong><a href="/esop-accounting-ind-as-102">ESOP Accounting Ind AS 102 in India</a></strong> - the national parent service</li>
                    <li><strong><a href="/esop-services">ESOP Services Hub</a></strong> - the full ESOP advisory hub - route by stage, scenario or tax</li>
                    <li><strong><a href="/esop-scheme-design">ESOP Scheme Design</a></strong> - design the option pool, vesting schedule and leaver terms</li>
                    <li><strong><a href="/esop-valuation-services">ESOP Valuation Services</a></strong> - Rule 11UA fair-market-value reports for grants and exercises</li>
                    <li><strong><a href="/esop-corporate-filings">ESOP Corporate Filings</a></strong> - MGT-14, PAS-3 and Form SH-6 register filings</li>
                    <li><strong><a href="/esop-perquisite-tax-section-17-2-vi">ESOP Perquisite Tax (Sec 17(2)(vi))</a></strong> - perquisite tax and TDS computation at exercise</li>
        </ul></div>
    </div></div>
</section>

<!-- MORE SERVICES IN CITY -->
<section class="content-section" style="padding:48px 32px;background:var(--gray-50);">
    <div class="content-container"><div class="text-content">
        <h2 class="section-title">More Services in Mumbai</h2>
        <div class="pa-cross-grid"><a href="/esop-services/mumbai" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">ESOP Services Hub</div><div class="pa-card-sub">Mumbai</div></div></a><a href="/esop-scheme-design/mumbai" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">ESOP Scheme Design</div><div class="pa-card-sub">Mumbai</div></div></a><a href="/esop-valuation-services/mumbai" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">ESOP Valuation Services</div><div class="pa-card-sub">Mumbai</div></div></a><a href="/esop-corporate-filings/mumbai" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">ESOP Corporate Filings</div><div class="pa-card-sub">Mumbai</div></div></a><a href="/esop-perquisite-tax-section-17-2-vi/mumbai" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">ESOP Perquisite Tax (Sec 17(2)(vi))</div><div class="pa-card-sub">Mumbai</div></div></a><a href="/esop-management-and-compliance-services/mumbai" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">ESOP Management and Compliance</div><div class="pa-card-sub">Mumbai</div></div></a></div>
    </div></div>
</section>

<!-- SERVICE BY CITY -->
<section class="content-section" style="padding:48px 32px;background:var(--gray-50);">
    <div class="content-container"><div class="text-content">
        <h2 class="section-title">ESOP Accounting Ind AS 102 by City</h2>
        <div class="content-text"><p>Available across our four office cities. You are viewing the Mumbai page.</p></div>
        <div class="pa-city-grid"><a href="/esop-accounting-ind-as-102/pune" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Pune</div><div class="pa-card-sub">Maharashtra</div></div></a><span class="pa-city-card" aria-current="page" style="border-color:var(--orange);background:#FFF7F2;cursor:default;position:relative;"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Mumbai</div><div class="pa-card-sub">Maharashtra</div></div><span style="position:absolute;top:10px;right:12px;font-size:10px;font-weight:700;color:var(--orange);letter-spacing:.04em;">YOU'RE HERE</span></span><a href="/esop-accounting-ind-as-102/delhi" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Delhi</div><div class="pa-card-sub">Delhi NCR</div></div></a><a href="/esop-accounting-ind-as-102/gurugram" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Gurugram</div><div class="pa-card-sub">Haryana</div></div></a></div>
    </div></div>
</section>

<!-- CONTENT FRESHNESS FOOTER -->
<section class="content-section" style="padding:32px;">
    <div class="content-container">
        <div class="text-content" style="font-size:13px;color:var(--text-muted);">
            <p><strong>Content Created:</strong> 24 June 2026 &nbsp;|&nbsp; <strong>Last Updated:</strong> 24 June 2026 &nbsp;|&nbsp; <strong>Next Review:</strong> 24 September 2026 &nbsp;|&nbsp; <strong>Reviewed By:</strong> CA &amp; CS Team &middot; Patron Accounting LLP</p>
            <p>Tier 2 quarterly review. Triggers for review: Ind AS 102 amendments by ICAI or NACAS, ICAI Guidance Note revisions, Companies (Indian Accounting Standards) Rules updates and IFRS 2 amendments adopted into Ind AS. Sources: MCA21 notifications, ICAI announcements and IFRS Foundation updates.</p>
        </div>
    </div>
</section>

<!-- STICKY WHATSAPP BAR -->
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
