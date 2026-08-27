@extends('layouts.service-app')
<!-- External Dependencies (loaded by master layout in production) -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Barlow:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,400&family=DM+Sans:opsz,wght@9..40,400;9..40,500;9..40,600;9..40,700&display=swap" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css"/>

@section('meta')
    <title>ITR-6 Filing for Companies India: Pvt Ltd, OPC, MAT Guide</title>
    <meta name="description" content="ITR-6 filing for companies AY 2026-27. CA-assisted ITR for Pvt Ltd, OPC, MAT, 115BAA, 115BAB, transfer pricing, and 80-IAC startup tax holiday. From Rs 2,999.">
    <link rel="canonical" href="/itr-for-companies">
    <meta name="robots" content="index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1">
    <meta property="og:title" content="ITR-6 Filing for Companies India: Pvt Ltd, OPC, MAT Guide | Patron Accounting">
    <meta property="og:description" content="ITR-6 filing for companies AY 2026-27. CA-assisted ITR for Pvt Ltd, OPC, MAT, 115BAA, 115BAB, transfer pricing, and 80-IAC startup tax holiday. From Rs 2,999.">
    <meta property="og:url" content="/itr-for-companies/">
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="Patron Accounting">
    <meta property="og:image" content="/images/itr-for-companies-og.webp">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="ITR-6 Filing for Companies India: Pvt Ltd, OPC, MAT Guide | Patron Accounting">
    <meta name="twitter:description" content="ITR-6 filing for companies AY 2026-27. CA-assisted ITR for Pvt Ltd, OPC, MAT, 115BAA, 115BAB, transfer pricing, and 80-IAC startup tax holiday. From Rs 2,999.">
    <meta name="twitter:image" content="/images/itr-for-companies-og.webp">
@endsection

@section('schema')
    <script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@graph": [
    {
      "@type": "BreadcrumbList",
      "@id": "https://www.patronaccounting.com/itr-for-companies/#breadcrumb",
      "itemListElement": [
            { "@type": "ListItem", "position": 1, "name": "Home", "item": "https://www.patronaccounting.com/" },
            { "@type": "ListItem", "position": 2, "name": "Income Tax Return Filing", "item": "https://www.patronaccounting.com/income-tax-return" },
            { "@type": "ListItem", "position": 3, "name": "ITR Filing for Companies", "item": "https://www.patronaccounting.com/itr-for-companies" }
          ]
    },
    {
      "@type": "FAQPage",
      "@id": "https://www.patronaccounting.com/itr-for-companies/#faq",
      "datePublished": "2026-05-11T08:00:00+05:30",
      "dateModified": "2026-05-11T08:00:00+05:30",
      "mainEntity": [
        {
          "@type": "Question",
          "name": "What is the due date for ITR-6 filing for AY 2026-27?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "For AY 2026-27, ITR-6 is due 31 October 2026 for companies requiring tax audit under Section 44AB. Companies with international or specified domestic transactions falling under Section 92E transfer pricing have until 30 November 2026. The corresponding tax audit report (Form 3CA-3CD or 3CB-3CD) must be filed by 30 September 2026, one month before the ITR due date. Belated ITR under Section 139(4) is allowed till 31 December 2026 with a Section 234F fee."
          }
        },
        {
          "@type": "Question",
          "name": "Who can file ITR-6 for AY 2026-27?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "ITR-6 is filed by every company under Section 2(17) of the Income Tax Act 1961 - Pvt Ltd, Public Ltd, OPC, foreign companies, and producer companies - except those claiming Section 11 exemption. Charitable trusts, Section 8 companies registered under Section 12A, and religious institutions file ITR-7 instead. Filing is mandatory regardless of profit, loss, or zero revenue. ITR-6 must be e-filed with a valid Director, MD, or CFO DSC."
          }
        },
        {
          "@type": "Question",
          "name": "What is the difference between Section 115BAA and Section 115BAB?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Section 115BAA offers domestic companies a concessional 22 percent basic tax rate with effective 25.168 percent (including 10 percent surcharge and 4 percent cess) and exempts them from MAT under Section 115JB. Section 115BAB applies only to new domestic manufacturing companies set up after 1 October 2019 commencing manufacture before 31 March 2024, with 15 percent basic rate and 17.16 percent effective rate. Both regimes block most Chapter VI-A deductions including Section 80-IAC."
          }
        },
        {
          "@type": "Question",
          "name": "How much does company ITR-6 filing cost with Patron?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Patron Accounting company ITR filing starts at Rs 2,999 for basic Pvt Ltd or OPC with turnover under Rs 5 crore and no transfer pricing. Mid-size Pvt Ltd with Section 115BAA opt-in starts at Rs 9,999. DPIIT startup with Section 80-IAC claim starts at Rs 14,999. Transfer pricing cases with Form 3CEB start at Rs 35,000. NIL ITR for dormant companies is Rs 1,999. Tax audit fees are quoted separately."
          }
        },
        {
          "@type": "Question",
          "name": "How does Section 80-IAC startup tax holiday work?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Section 80-IAC allows DPIIT-recognised Pvt Ltd companies and LLPs to claim 100 percent deduction of profits from eligible business for 3 consecutive AYs out of the first 10 years from incorporation. Eligibility requires Pvt Ltd or LLP structure (not partnership firm), incorporation between 1 April 2016 and 1 April 2030, turnover under Rs 100 crore, and a separate IMB (Inter-Ministerial Board) certificate beyond DPIIT recognition. Only about 3,700 of 207,135 DPIIT-recognised startups hold IMB approval - a 1.8 percent conversion rate."
          }
        },
        {
          "@type": "Question",
          "name": "Can I opt for Section 115BAA and still claim Section 80-IAC?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "No. Section 115BAA explicitly disallows deductions under Sections 80-IA, 80-IAB, 80-IAC, and most Chapter VI-A provisions except Sections 80JJAA and 80M. The election under Section 115BAA is irrevocable once made by filing Form 10-IC. For DPIIT-recognised startups with IMB certification, claiming 80-IAC under standard tax rates is usually more beneficial than 115BAA - run a 10-year projection before electing."
          }
        },
        {
          "@type": "Question",
          "name": "Is MAT applicable to all companies for AY 2026-27?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Minimum Alternate Tax under Section 115JB applies at 15 percent of book profit when regular tax is lower than 15 percent of book profit. MAT does not apply to companies opting for Section 115BAA or Section 115BAB. The excess of MAT over regular tax is available as MAT credit under Section 115JAA for set-off in subsequent years for 15 years. Foreign companies with India PE are also liable for MAT on income attributable to the PE."
          }
        },
        {
          "@type": "Question",
          "name": "Is DSC mandatory for company ITR-6 filing?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Yes. ITR-6 can only be e-filed with a valid Class 2 or Class 3 Digital Signature Certificate of the Managing Director, Director, or CFO. Alternative verification methods such as Aadhaar OTP, net banking EVC, or bank account EVC are not permitted for companies. An expired DSC at the time of filing makes the return invalid. The DSC must match the PAN of the authorised signatory registered with the Income Tax e-filing portal."
          }
        },
        {
          "@type": "Question",
          "name": "Company ka ITR-6 kab tak file karna hai AY 2026-27 ke liye? (When is company ITR-6 due for AY 2026-27)",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "AY 2026-27 ke liye company ITR-6 ki last date 31 October 2026 hai audit cases ke liye (Section 44AB). International ya specified domestic transactions wali companies (transfer pricing Section 92E) ke liye 30 November 2026 hai. Tax audit report (Form 3CA-3CD ya 3CB-3CD) 30 September 2026 tak file karna hai - ITR se ek mahina pehle. Belated ITR Section 139(4) ke under 31 December 2026 tak file kar sakte hain (Rs 5,000 late fee Section 234F ke under). Pvt Ltd company ka basic ITR-6 Rs 2,999 se start hota hai. DSC of Director/MD/CFO mandatory hai - Aadhaar OTP allowed nahi hai companies ke liye. Call +91 945 945 6700."
          }
        }
      ]
    },
    {
      "@type": "Service",
      "@id": "https://www.patronaccounting.com/itr-for-companies/#service",
      "name": "ITR Filing for Companies",
      "url": "https://www.patronaccounting.com/itr-for-companies/",
      "description": "End-to-end CA-assisted ITR-6 filing for domestic and foreign companies under Section 139 of the Income Tax Act 1961 for AY 2026-27. Covers Pvt Ltd, OPC, Public Ltd, foreign company with India PE, producer companies and DPIIT-recognised startups. Includes tax regime selection between standard rates and concessional regimes - Section 115BAA (22 percent), Section 115BAB (15 percent new manufacturing) with Form 10-IC and Form 10-ID filing; MAT computation under Section 115JB with 15-year credit tracking under Section 115JAA; Section 80-IAC startup tax holiday claim with IMB certification co-ordination and 3-year window selection memo; transfer pricing reporting via Form 3CEB and Schedule TPSA under Section 92E; Section 79 shareholding-change test for closely-held loss carry-forward; and 12 months of Section 143(1), 143(2), 142(1) and 148 notice support post-filing.",
      "serviceType": "Company Income Tax Return Filing (ITR-6)",
      "areaServed": {
        "@type": "Country",
        "name": "India",
        "sameAs": "https://en.wikipedia.org/wiki/India"
      },
      "provider": {
        "@id": "https://www.patronaccounting.com/#organization"
      },
      "about": [
        {
          "@type": "Thing",
          "name": "Corporate tax in India",
          "sameAs": "https://en.wikipedia.org/wiki/Corporate_tax_in_India"
        },
        {
          "@type": "Thing",
          "name": "Income tax in India",
          "sameAs": "https://en.wikipedia.org/wiki/Income_tax_in_India"
        },
        {
          "@type": "Thing",
          "name": "Minimum alternate tax",
          "sameAs": "https://en.wikipedia.org/wiki/Minimum_alternate_tax"
        },
        {
          "@type": "Thing",
          "name": "Startup India",
          "sameAs": "https://en.wikipedia.org/wiki/Startup_India"
        }
      ],
      "hasOfferCatalog": {
        "@type": "OfferCatalog",
        "name": "Company ITR-6 Filing Tiers (AY 2026-27)",
        "itemListElement": [
          {
            "@type": "Offer",
            "name": "Pvt Ltd or OPC ITR-6 (turnover under Rs 5 crore)",
            "priceCurrency": "INR",
            "price": "2999",
            "description": "Basic ITR-6 filing with audit coordination, regime arbitrage, MAT computation; no transfer pricing or startup claim"
          },
          {
            "@type": "Offer",
            "name": "NIL ITR-6 for Dormant or Pre-Revenue Company",
            "priceCurrency": "INR",
            "price": "1999",
            "description": "Mandatory NIL filing for companies with zero revenue or losses; preserves company status and avoids Section 234F"
          },
          {
            "@type": "Offer",
            "name": "Pvt Ltd Mid-Size with Section 115BAA opt-in",
            "priceCurrency": "INR",
            "price": "9999",
            "description": "Turnover Rs 5-50 crore; includes Form 10-IC filing, 10-year regime projection, MAT credit reconciliation pre-election"
          },
          {
            "@type": "Offer",
            "name": "DPIIT Startup with Section 80-IAC and IMB",
            "priceCurrency": "INR",
            "price": "14999",
            "description": "DPIIT-recognised Pvt Ltd or LLP with IMB certification claiming 100 percent profit deduction for 3 consecutive AYs out of first 10 years"
          },
          {
            "@type": "Offer",
            "name": "Public Limited Company (turnover Rs 50-500 crore)",
            "priceCurrency": "INR",
            "price": "24999",
            "description": "ITR-6 with Schedule III reconciliation, MAT, regime selection, statutory disclosures"
          },
          {
            "@type": "Offer",
            "name": "Transfer Pricing ITR (Form 3CEB)",
            "priceCurrency": "INR",
            "price": "35000",
            "description": "Companies with international or specified domestic transactions; Form 3CEB co-ordination, Schedule TPSA, master file alignment"
          },
          {
            "@type": "Offer",
            "name": "Foreign Company with India PE",
            "priceCurrency": "INR",
            "price": "45000",
            "description": "Permanent Establishment determination, DTAA relief under Section 90, Form 67, withholding tax reconciliation, MAT on PE income"
          }
        ]
      }
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
    ['name' => 'ITR Filing for Companies', 'url' => '/itr-for-companies'],
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
                        ITR Filing for Companies
                    </h1>

                    <div class="expert-attribution-box">
                        <span class="eab-check"><svg width="16" height="16" viewBox="0 0 24 24" fill="currentColor"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg></span>
                        <span class="eab-title">Reviewed by CA &amp; CS Team &middot; Patron Accounting LLP</span>
                        <span class="eab-meta">
                            <span>ICAI & ICSI Registered</span><span class="eab-sep">|</span>
                            <span>15+ Years Experience</span><span class="eab-sep">|</span>
                            <span>Last Updated: <span id="lastUpdated">11 May 2026</span></span>
                        </span>
                        <a href="/authorhub/ca-sundram-gupta" class="eab-link">Verify Credentials &rarr;</a>
                    </div>

                    <div class="mb-4">
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Documents:</span> Audited financials, tax audit report (Form 3CA/3CB-3CD), GST 9C reconciliation, DSC of Director/MD/CFO</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Fees:</span> From Rs 2,999 for basic Pvt Ltd ITR-6; scales with audit, transfer pricing and 80-IAC startup scope</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Eligibility:</span> All companies under Section 2(17) - Pvt Ltd, Public Ltd, OPC, foreign - mandatory regardless of profit or loss</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Timeline:</span> 7 to 10 working days post audit; due 31 October 2026 for audit cases, 30 November 2026 for transfer pricing</p>
                        </div>
                    </div>

                    <p class="mb-4 fw-bold" style="color: var(--blue); font-size: 15px;">3,000+ Companies Served | 4.9 Google Rating | 50,000+ Filings | 15+ Years</p>

                    <div class="hero-cta">
                        <a href="tel:+919459456700" class="btn-video text-decoration-none">
                            <span class="play-circle"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="width:14px;height:14px;color:#fff"><path d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/></svg></span>
                            Call +91 945 945 6700
                        </a>
                        <a href="mailto:info@patronaccounting.com" class="btn-sample text-decoration-none">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="width:18px;height:18px;"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,12 2,6"/></svg>
                            Email Us
                        </a>
                        <a href="https://wa.me/919459456700?text=Hi%2C%20I%20want%20a%20free%20consultation%20for%20company%20ITR-6%20filing%20AY%202026-27." target="_blank" class="btn-sample text-decoration-none">
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

                                        @include('partials.lead-form', [
                        'deal' => 'Website Enquiry - ITR Filing for Companies',
                        'options' => [
                            ['value' => '', 'label' => 'Select a service', 'selected' => true, 'disabled' => true],
                            ['value' => 'Pvt Ltd ITR-6 Filing', 'label' => 'Pvt Ltd ITR-6 Filing', 'selected' => true, 'disabled' => false],
                            ['value' => 'OPC or Small Company ITR-6', 'label' => 'OPC or Small Company ITR-6', 'selected' => false, 'disabled' => false],
                            ['value' => 'Section 115BAA opt-in (Form 10-IC)', 'label' => 'Section 115BAA opt-in (Form 10-IC)', 'selected' => false, 'disabled' => false],
                            ['value' => 'Section 115BAB Manufacturing (Form 10-ID)', 'label' => 'Section 115BAB Manufacturing (Form 10-ID)', 'selected' => false, 'disabled' => false],
                            ['value' => 'DPIIT Startup with Section 80-IAC claim', 'label' => 'DPIIT Startup with Section 80-IAC claim', 'selected' => false, 'disabled' => false],
                            ['value' => 'Public Limited Company ITR-6', 'label' => 'Public Limited Company ITR-6', 'selected' => false, 'disabled' => false],
                            ['value' => 'Transfer Pricing ITR (Form 3CEB)', 'label' => 'Transfer Pricing ITR (Form 3CEB)', 'selected' => false, 'disabled' => false],
                            ['value' => 'Foreign Company with India PE', 'label' => 'Foreign Company with India PE', 'selected' => false, 'disabled' => false],
                            ['value' => 'NIL ITR-6 (Dormant or Pre-Revenue)', 'label' => 'NIL ITR-6 (Dormant or Pre-Revenue)', 'selected' => false, 'disabled' => false],
                            ['value' => 'Tax Audit under Section 44AB', 'label' => 'Tax Audit under Section 44AB', 'selected' => false, 'disabled' => false],
                            ['value' => 'Income Tax Notice Response', 'label' => 'Income Tax Notice Response', 'selected' => false, 'disabled' => false],
                            ['value' => 'Other', 'label' => 'Other', 'selected' => false, 'disabled' => false],
                        ],
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
<section class="testimonials-section">
    <div class="section-container">
        <div class="section-header">
            <h2>Real Stories from Real People</h2>
            <p>Hear how teams across industries use Patron to save time, cut costs, & stay in control.</p>
        </div>
        <div class="testi-loading" id="testiLoading" style="display:none !important;">
            <div class="spinner"></div>
            Fetching latest Google reviews&hellip;
        </div>
        <div class="testimonial-slider" id="testimonialSlider" style="display:block;">
        <!-- POPULATE: Replace these with real testimonial-card divs.
             Each card follows this structure (quote card):
             <div class="testimonial-card" style="padding:20px;background:#fff;border-radius:12px;box-shadow:0 2px 12px rgba(0,0,0,0.07);margin:0 8px;min-height:220px;display:flex;flex-direction:column;justify-content:space-between;">
                 <div style="color:var(--orange);font-size:28px;line-height:1;margin-bottom:8px;">&ldquo;</div>
                 <div style="font-size:13px;color:var(--text-dark);line-height:1.6;flex:1;">REVIEW TEXT</div>
                 <div style="display:flex;align-items:center;gap:10px;margin-top:16px;">
                     <div style="width:36px;height:36px;border-radius:50%;background:var(--orange);display:flex;align-items:center;justify-content:center;font-weight:700;font-size:13px;color:#fff;flex-shrink:0;">AB</div>
                     <div>
                         <div style="font-weight:700;font-size:13px;color:var(--blue);">Author Name</div>
                         <div style="font-size:12px;color:var(--text-muted);margin-top:2px;">Role / Company</div>
                         <div style="color:var(--orange);font-size:12px;">&#9733;&#9733;&#9733;&#9733;&#9733;</div>
                     </div>
                     <div style="margin-left:auto;font-size:11px;color:var(--text-muted);">2 months ago</div>
                 </div>
             </div>
             For video card pattern, refer to section8-company-registration.html
        -->
        
        <div class="testimonial-card" style="padding:20px;background:#fff;border-radius:12px;box-shadow:0 2px 12px rgba(0,0,0,0.07);margin:0 8px;min-height:220px;display:flex;flex-direction:column;justify-content:space-between;">
            <div style="color:var(--orange);font-size:28px;line-height:1;margin-bottom:8px;">&ldquo;</div>
            <div style="font-size:13px;color:var(--text-dark);line-height:1.6;flex:1;">Our DPIIT SaaS startup was about to opt into 115BAA on auditor advice. Patron ran a 10-year projection showing we'd lose Rs 82 lakh in 80-IAC across the next 3 profitable years. Filed with 80-IAC instead.</div>
            <div style="display:flex;align-items:center;gap:10px;margin-top:16px;">
                <div style="width:36px;height:36px;border-radius:50%;background:var(--orange);display:flex;align-items:center;justify-content:center;font-weight:700;font-size:13px;color:#fff;flex-shrink:0;">RK</div>
                <div>
                    <div style="font-weight:700;font-size:13px;color:var(--blue);">Rohit K.</div>
                    <div style="font-size:12px;color:var(--text-muted);margin-top:2px;">Co-founder, FinTech (Bengaluru)</div>
                    <div style="color:var(--orange);font-size:12px;">&#9733;&#9733;&#9733;&#9733;&#9733;</div>
                </div>
                <div style="margin-left:auto;font-size:11px;color:var(--text-muted);">2 months ago</div>
            </div>
        </div>
        <div class="testimonial-card" style="padding:20px;background:#fff;border-radius:12px;box-shadow:0 2px 12px rgba(0,0,0,0.07);margin:0 8px;min-height:220px;display:flex;flex-direction:column;justify-content:space-between;">
            <div style="color:var(--orange);font-size:28px;line-height:1;margin-bottom:8px;">&ldquo;</div>
            <div style="font-size:13px;color:var(--text-dark);line-height:1.6;flex:1;">Patron managed our ITR-6 for two financial years. MAT computation under Section 115JB, audit coordination, all handled. They identified Rs 23 lakh of MAT credit from 3 years ago that reduced our current liability.</div>
            <div style="display:flex;align-items:center;gap:10px;margin-top:16px;">
                <div style="width:36px;height:36px;border-radius:50%;background:var(--orange);display:flex;align-items:center;justify-content:center;font-weight:700;font-size:13px;color:#fff;flex-shrink:0;">NS</div>
                <div>
                    <div style="font-weight:700;font-size:13px;color:var(--blue);">Nisha S.</div>
                    <div style="font-size:12px;color:var(--text-muted);margin-top:2px;">CFO, Manufacturing Pvt Ltd (Pune)</div>
                    <div style="color:var(--orange);font-size:12px;">&#9733;&#9733;&#9733;&#9733;&#9733;</div>
                </div>
                <div style="margin-left:auto;font-size:11px;color:var(--text-muted);">3 months ago</div>
            </div>
        </div>
        <div class="testimonial-card" style="padding:20px;background:#fff;border-radius:12px;box-shadow:0 2px 12px rgba(0,0,0,0.07);margin:0 8px;min-height:220px;display:flex;flex-direction:column;justify-content:space-between;">
            <div style="color:var(--orange);font-size:28px;line-height:1;margin-bottom:8px;">&ldquo;</div>
            <div style="font-size:13px;color:var(--text-dark);line-height:1.6;flex:1;">Transfer pricing was complex with 3 international transactions across UK, Singapore and USA. Patron co-ordinated Form 3CEB, prepared Schedule TPSA, filed ITR-6 by 25 November - well before the 30 November TP deadline.</div>
            <div style="display:flex;align-items:center;gap:10px;margin-top:16px;">
                <div style="width:36px;height:36px;border-radius:50%;background:var(--orange);display:flex;align-items:center;justify-content:center;font-weight:700;font-size:13px;color:#fff;flex-shrink:0;">AM</div>
                <div>
                    <div style="font-weight:700;font-size:13px;color:var(--blue);">Arvind M.</div>
                    <div style="font-size:12px;color:var(--text-muted);margin-top:2px;">Compliance Head, MNC Sub (Mumbai)</div>
                    <div style="color:var(--orange);font-size:12px;">&#9733;&#9733;&#9733;&#9733;&#9733;</div>
                </div>
                <div style="margin-left:auto;font-size:11px;color:var(--text-muted);">4 months ago</div>
            </div>
        </div>
        <div class="testimonial-card" style="padding:20px;background:#fff;border-radius:12px;box-shadow:0 2px 12px rgba(0,0,0,0.07);margin:0 8px;min-height:220px;display:flex;flex-direction:column;justify-content:space-between;">
            <div style="color:var(--orange);font-size:28px;line-height:1;margin-bottom:8px;">&ldquo;</div>
            <div style="font-size:13px;color:var(--text-dark);line-height:1.6;flex:1;">Our loss-making year had Section 79 shareholding-change risk after a Series A round. Patron documented the carve-outs and preserved Rs 1.2 crore of carry-forward losses. Section 143(3) scrutiny went through clean.</div>
            <div style="display:flex;align-items:center;gap:10px;margin-top:16px;">
                <div style="width:36px;height:36px;border-radius:50%;background:var(--orange);display:flex;align-items:center;justify-content:center;font-weight:700;font-size:13px;color:#fff;flex-shrink:0;">DV</div>
                <div>
                    <div style="font-weight:700;font-size:13px;color:var(--blue);">Divya V.</div>
                    <div style="font-size:12px;color:var(--text-muted);margin-top:2px;">Founder, B2B SaaS (Delhi)</div>
                    <div style="color:var(--orange);font-size:12px;">&#9733;&#9733;&#9733;&#9733;&#9733;</div>
                </div>
                <div style="margin-left:auto;font-size:11px;color:var(--text-muted);">1 month ago</div>
            </div>
        </div>
    </div>
        <div class="reviews-cta" style="margin-top: 16px; display: flex !important;">
            <div class="reviews-cta-content">
                <div class="reviews-cta-icon">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 15a2 2 0 01-2 2H7l-4 4V5a2 2 0 012-2h14a2 2 0 012 2z"/></svg>
                </div>
                <div class="reviews-cta-text">
                    <h3 style="color:#FFFFFF !important;margin-top:0;">Join 10,000+ Satisfied Businesses</h3>
                    <p>Pvt Ltd, OPC, Public Ltd, DPIIT-recognised startups, foreign companies with India PE, transfer pricing cases, loss-making companies with Section 79 risk. 3,000+ company ITRs filed. Zero defective return notices in AY 2025-26 cohort.</p>
                </div>
            </div>
            <a href="tel:+919459456700" class="btn-cta">
                Talk to an Expert
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
            </a>
        </div>
    </div>
</section>

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
            <a href="#what-section" class="toc-btn">What Is ITR-6</a>
            <a href="#who-section" class="toc-btn">Who Must File</a>
            <a href="#services-section" class="toc-btn">Patron Services</a>
            <a href="#process-section" class="toc-btn">7-Step Process</a>
            <a href="#documents-section" class="toc-btn">Documents</a>
            <a href="#challenges-section" class="toc-btn">Common Mistakes</a>
            <a href="#fees-section" class="toc-btn">Fees</a>
            <a href="#timeline-section" class="toc-btn">Timeline</a>
            <a href="#comparison-section" class="toc-btn">80-IAC vs 115BAA</a>
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
            <h2 class="section-title">Company ITR-6 Filing for AY 2026-27</h2>
            <div class="content-text">
                <div class="highlight-box" style="margin-bottom:20px;">
                    <p><strong>&#128204; TL;DR - ITR Filing for Companies Services at a Glance</strong></p>
                    <p>ITR Filing for Companies in India uses Form ITR-6 under Section 139 of the Income Tax Act, 1961. For AY 2026-27, audit cases are due 31 October 2026 and transfer pricing cases 30 November 2026. Tax rates range from 15 percent under Section 115BAB for new manufacturing companies to 22 percent under Section 115BAA and 30 percent under standard rates, with MAT at 15 percent under Section 115JB. The new Income Tax Act 2025 applies from Tax Year 2026-27 returns due in 2027 - existing Sections 115BAA, 115BAB, 80-IAC, 115JB carry forward into the new Act.</p>
                </div>
                <p>ITR Filing for Companies covers every domestic and foreign company incorporated under the Companies Act, 2013 or earlier Companies Act, 1956. Form ITR-6 is mandatory for all companies except those claiming exemption under Section 11 of the Income Tax Act 1961 (charitable trusts and Section 8 companies file ITR-7). Tax regime selection between standard rates and the concessional Section 115BAA (22 percent) or Section 115BAB (15 percent for new manufacturing) regimes determines effective tax outflow, MAT applicability under Section 115JB, and eligibility for deductions including the Section 80-IAC startup tax holiday.</p>
                <p>Patron Accounting has filed 3,000+ company ITRs across Pvt Ltd, OPC, public limited, DPIIT-recognised startups, and foreign company structures with India Permanent Establishment. The firm coordinates statutory audit, tax audit under Section 44AB, MAT computation, transfer pricing under Section 92E with Form 3CEB and Schedule TPSA, and Section 80-IAC year-selection strategy under a single corporate tax engagement. With offices in Pune, Mumbai, Delhi, and Gurugram and 15+ years of corporate compliance practice, every ITR-6 filing comes with 10-year regime projection (Section 115BAA vs Standard + 80-IAC + MAT), MAT credit tracking under Section 115JAA across the 15-year window, and 12 months of post-filing Section 143(1), 143(2), 142(1) and 148 notice support at no extra cost.</p>
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
                <h2 class="section-title">What Is Company ITR-6 Filing</h2>
                <div class="content-text what-is-definition">
                    
                    <p>Company ITR Filing is the annual return filed by a company under Section 139(1) of the Income Tax Act, 1961, declaring total income, tax liability, MAT (Minimum Alternate Tax), and deductions for a financial year. Form ITR-6 is used for all companies except those claiming Section 11 exemption (which file ITR-7 instead).</p>
                    <p>Filing is mandatory for every company defined under Section 2(17) - Pvt Ltd, Public Ltd, OPC, foreign company with Indian source income, producer companies - regardless of whether the company has profit, loss, or zero revenue. There is no exemption threshold for companies under Section 139(1). The return must be e-filed with a valid Digital Signature Certificate (DSC) of a Director, Managing Director, or CFO. Aadhaar OTP, net banking EVC, and bank account EVC are not permitted for company filings.</p>
                    <p>Three corporate tax regimes are available for AY 2026-27. The Standard regime applies a 25 percent rate (if previous year turnover was up to Rs 400 crore) or 30 percent otherwise, with full MAT applicability and all Chapter VI-A deductions available. Section 115BAA offers a concessional 22 percent basic rate (effective 25.168 percent with surcharge and cess) and exempts the company from MAT, but blocks most Chapter VI-A deductions including Section 80-IAC. Section 115BAB offers a 15 percent rate (effective 17.16 percent) but is limited to new domestic manufacturing companies set up after 1 October 2019 and commencing manufacture before 31 March 2024.</p>

                </div>
                <div class="highlight-box" style="margin-top:20px;">
                    <p><strong>Key Terms for ITR Filing for Companies:</strong></p>
                    <p><strong>ITR-6:</strong> Income Tax Return form for companies (not claiming Section 11 exemption). Mandatory e-filing with DSC; cannot be filed with Aadhaar OTP or net banking EVC.</p>
                    <p><strong>Section 115BAA:</strong> Concessional 22 percent tax rate for domestic companies; effective rate 25.168 percent including 10 percent surcharge and 4 percent cess. Filed via Form 10-IC before ITR due date. Election is irrevocable; blocks most Chapter VI-A deductions; exempt from MAT.</p>
                    <p><strong>Section 115BAB:</strong> 15 percent tax rate for new domestic manufacturing companies set up after 1 October 2019 and commencing manufacture before 31 March 2024. Filed via Form 10-ID. Effective rate 17.16 percent.</p>
                    <p><strong>MAT (Minimum Alternate Tax):</strong> 15 percent of book profit under Section 115JB Explanation 1. Does not apply to companies opting for Section 115BAA or Section 115BAB. MAT credit under Section 115JAA carries forward for 15 years for set-off against future normal tax.</p>
                    <p><strong>Section 80-IAC:</strong> 100 percent deduction of profits for 3 consecutive AYs out of the first 10 years from incorporation for eligible DPIIT-recognised startups with IMB certification.</p>
                    <p><strong>Form 3CEB:</strong> Transfer pricing accountant report for international transactions and specified domestic transactions under Section 92E. Due 31 October 2026 for AY 2026-27.</p>
                    <p><strong>Form 10-IC and Form 10-ID:</strong> Statutory regime opt-in forms for Section 115BAA and Section 115BAB respectively. Must be filed before the Section 139(1) ITR due date. One-time, irrevocable election.</p>
                    <p><strong>DPIIT and IMB:</strong> Two separate startup approvals. DPIIT (Department for Promotion of Industry and Internal Trade) recognition makes a startup eligible for various benefits. IMB (Inter-Ministerial Board) certification is a separate, mandatory approval to claim Section 80-IAC tax holiday - only about 1.8 percent of DPIIT-recognised startups hold IMB.</p>

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
                            <text x="100" y="170" font-size="10" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial, sans-serif">ITR Filing for Companies</text>
                        </svg>
                    </div>
                    <div class="illustration-badge">
                        <span>Form</span>
                        <strong>ITR-6</strong>
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
            <h2 class="section-title">Who Must File ITR-6 for AY 2026-27</h2>
            <div class="content-text">
                
                <p>ITR-6 filing is mandatory under Section 139(1) of the Income Tax Act 1961 for AY 2026-27 if any of the following applies. There is no income or turnover threshold for company filings - even zero-revenue and loss-making companies must file.</p>
                <ul>
                    <li><strong>Domestic company:</strong> Pvt Ltd, Public Ltd, OPC incorporated under the Companies Act, 2013 or earlier Companies Act, 1956.</li>
                    <li><strong>Foreign company:</strong> Foreign company with income accruing or deemed to accrue in India under Section 9, including those with a Permanent Establishment (PE) in India.</li>
                    <li><strong>Producer company:</strong> Producer company under Part IXA of the Companies Act, 1956.</li>
                    <li><strong>Zero-revenue or loss-making:</strong> Filing is mandatory even with NIL income or losses; no exemption threshold under Section 139(1). NIL ITR preserves carry-forward rights and company status.</li>
                </ul>
                <p><strong>Section 8 companies and charitable trusts</strong> registered under Section 12A claiming Section 11 exemption file ITR-7 instead of ITR-6.</p>
                <p><strong>Statutory due dates for AY 2026-27:</strong> Tax audit report (Form 3CA-3CD or 3CB-3CD) - 30 September 2026 (one month before ITR). ITR-6 audit cases under Section 44AB - 31 October 2026. ITR-6 transfer pricing cases under Section 92E - 30 November 2026. Form 3CEB (transfer pricing report) - 31 October 2026. Form 10-IC (Section 115BAA opt-in) or Form 10-ID (Section 115BAB opt-in) - before the Section 139(1) ITR due date as a one-time, irrevocable election. Belated ITR-6 under Section 139(4) - 31 December 2026 with Section 234F fee. Revised ITR-6 under Section 139(5) - 31 March 2027. Updated Return (ITR-U) under Section 139(8A) - 31 March 2031 (48 months from end of AY).</p>

            </div>
            </div>
        </div>
    </div>
</section>

<!-- SECTION 5: OUR SERVICES -->
<section class="content-section" id="services-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Patron Company ITR-6 Services</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Service</th><th>What We Do</th></tr></thead>
                    <tbody>
                        
                        <tr><td><strong>Pvt Ltd ITR-6 Filing</strong></td><td>Tax computation under standard rates or Section 115BAA, regime arbitrage memo, MAT credit utilisation under Section 115JAA, schedule-wise validation across 25+ ITR-6 schedules including Schedule BP, Schedule MAT, Schedule CFL, Schedule FA and Schedule TPSA.</td><td>From Rs 2,999</td></tr>
                        <tr><td><strong>OPC and Small Company ITR-6</strong></td><td>Simplified ITR-6 filing for One Person Companies and small companies (paid-up capital up to Rs 4 crore and turnover up to Rs 40 crore per Companies (Amendment) Act, 2020). Reduced disclosure burden under MCA framework.</td><td>From Rs 2,999</td></tr>
                        <tr><td><strong>DPIIT Startup ITR with Section 80-IAC</strong></td><td>100 percent profit deduction claim under Section 80-IAC for 3 consecutive AYs out of first 10 years from incorporation. Strategic regime decision (80-IAC vs Section 115BAA), Form 3CB-3CD audit co-ordination, IMB pre-screen and year-selection memo.</td><td>From Rs 14,999</td></tr>
                        <tr><td><strong>Transfer Pricing ITR Package</strong></td><td>Form 3CEB transfer pricing accountant report under Section 92E, Schedule TPSA reporting, Section 92D master file alignment, CBC report under Section 286 (if group consolidated revenue exceeds Rs 6,400 crore), benchmarking review.</td><td>From Rs 35,000</td></tr>
                        <tr><td><strong>Foreign Company ITR (PE in India)</strong></td><td>Permanent Establishment determination, DTAA relief under Section 90, Form 67 Foreign Tax Credit, withholding tax reconciliation under Sections 195/196A, MAT on PE income under Section 115JB.</td><td>From Rs 45,000</td></tr>
                        <tr><td><strong>Loss-Making Company ITR</strong></td><td>Carry-forward optimisation under Sections 70, 71, 72; Section 79 change-in-shareholding test for closely-held companies; MAT credit tracking; Section 79A start-up loss carry-forward 10-year window for DPIIT startups.</td><td>From Rs 4,999</td></tr>
                        <tr><td><strong>Section 115BAA Opt-In (Form 10-IC)</strong></td><td>10-year tax projection comparing Section 115BAA vs Standard plus MAT credit utilisation. Irrevocable election - one-time analysis before Form 10-IC filing. Includes MAT credit balance reconciliation pre-election.</td><td>From Rs 9,999</td></tr>
                        <tr><td><strong>Public Limited Company ITR-6</strong></td><td>Schedule III reconciliation, dividend distribution under Section 115O legacy framework, IndAS adjustments, statutory disclosures, SEBI LODR compliance interface.</td><td>From Rs 24,999</td></tr>


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
            <h2 class="section-title">7-Step ITR-6 Filing Procedure</h2>
            <p class="section-subtitle" style="text-align:left;max-width:100%;">The Patron workflow runs on the Income Tax e-filing portal with mandatory DSC verification, audit co-ordination, regime arbitrage memo and MAT computation. Each step is owned by a named senior corporate tax CA with documented hand-off, ensuring Form 10-IC/10-ID, Form 3CEB and Form 3CD are filed within their respective statutory windows.</p>
        </div>
        <div class="steps-container">
            
            <div class="step-card">
                <div class="step-content">
                    <span class="step-badge">Step 1</span>
                    <h3 class="step-title">Audit Coordination</h3>
                    <p class="step-description">Receive audited financials (Schedule III balance sheet, P and L, cash flow, notes) and Form 3CD tax audit report from the statutory auditor. Reconcile Form 3CD with books and GST 9C. Tax audit report due 30 September 2026, one month before ITR.</p>
                    <div class="step-highlights">
                        <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Audit reconciled</span>
                        <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> 3CD aligned</span>
                    </div>
                </div>
                <div class="step-visual">
                    <div class="step-illustration">
                        <div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="15" y="5" width="90" height="70" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><line x1="30" y1="22" x2="90" y2="22" stroke="#F5A623" stroke-width="3" stroke-linecap="round"/><line x1="30" y1="38" x2="80" y2="38" stroke="#14365F" stroke-width="2" stroke-linecap="round" opacity="0.3"/><line x1="30" y1="50" x2="85" y2="50" stroke="#14365F" stroke-width="2" stroke-linecap="round" opacity="0.3"/><line x1="30" y1="62" x2="70" y2="62" stroke="#E8712C" stroke-width="2" stroke-linecap="round"/></svg></div>
                        <span class="illustration-label">Audit In</span>
                        <span class="step-number-large">01</span>
                    </div>
                </div>
            </div>
            <div class="step-card">
                <div class="step-content">
                    <span class="step-badge">Step 2</span>
                    <h3 class="step-title">Tax Regime Selection</h3>
                    <p class="step-description">Compute liability under standard rates, Section 115BAA (22 percent) and Section 115BAB (15 percent new manufacturing). Run 10-year projection. File Form 10-IC or Form 10-ID before the Section 139(1) ITR due date if opting for concessional regime - irrevocable election.</p>
                    <div class="step-highlights">
                        <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Regime locked</span>
                        <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Form 10-IC/ID filed</span>
                    </div>
                </div>
                <div class="step-visual">
                    <div class="step-illustration">
                        <div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="15" y="5" width="90" height="70" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><line x1="30" y1="22" x2="90" y2="22" stroke="#F5A623" stroke-width="3" stroke-linecap="round"/><line x1="30" y1="38" x2="80" y2="38" stroke="#14365F" stroke-width="2" stroke-linecap="round" opacity="0.3"/><line x1="30" y1="50" x2="85" y2="50" stroke="#14365F" stroke-width="2" stroke-linecap="round" opacity="0.3"/><line x1="30" y1="62" x2="70" y2="62" stroke="#E8712C" stroke-width="2" stroke-linecap="round"/></svg></div>
                        <span class="illustration-label">Regime</span>
                        <span class="step-number-large">02</span>
                    </div>
                </div>
            </div>
            <div class="step-card">
                <div class="step-content">
                    <span class="step-badge">Step 3</span>
                    <h3 class="step-title">MAT Computation</h3>
                    <p class="step-description">Calculate book profit under Section 115JB Explanation 1. Apply 15 percent MAT rate if it exceeds normal tax. Track MAT credit under Section 115JAA for 15-year set-off window. Not applicable if Section 115BAA or 115BAB opted.</p>
                    <div class="step-highlights">
                        <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> MAT computed</span>
                        <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Credit tracked 15yr</span>
                    </div>
                </div>
                <div class="step-visual">
                    <div class="step-illustration">
                        <div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="15" y="5" width="90" height="70" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><line x1="30" y1="22" x2="90" y2="22" stroke="#F5A623" stroke-width="3" stroke-linecap="round"/><line x1="30" y1="38" x2="80" y2="38" stroke="#14365F" stroke-width="2" stroke-linecap="round" opacity="0.3"/><line x1="30" y1="50" x2="85" y2="50" stroke="#14365F" stroke-width="2" stroke-linecap="round" opacity="0.3"/><line x1="30" y1="62" x2="70" y2="62" stroke="#E8712C" stroke-width="2" stroke-linecap="round"/></svg></div>
                        <span class="illustration-label">MAT</span>
                        <span class="step-number-large">03</span>
                    </div>
                </div>
            </div>
            <div class="step-card">
                <div class="step-content">
                    <span class="step-badge">Step 4</span>
                    <h3 class="step-title">Deductions and 80-IAC Claim</h3>
                    <p class="step-description">For DPIIT-recognised startups with IMB certification, claim 100 percent profit deduction under Section 80-IAC for the elected 3 consecutive AYs out of first 10 years. For others, claim Sections 80G, 80JJAA, 80M as applicable. Section 115BAA or 115BAB opt-in disqualifies 80-IAC.</p>
                    <div class="step-highlights">
                        <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> 80-IAC claimed</span>
                        <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Year selected</span>
                    </div>
                </div>
                <div class="step-visual">
                    <div class="step-illustration">
                        <div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="15" y="5" width="90" height="70" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><line x1="30" y1="22" x2="90" y2="22" stroke="#F5A623" stroke-width="3" stroke-linecap="round"/><line x1="30" y1="38" x2="80" y2="38" stroke="#14365F" stroke-width="2" stroke-linecap="round" opacity="0.3"/><line x1="30" y1="50" x2="85" y2="50" stroke="#14365F" stroke-width="2" stroke-linecap="round" opacity="0.3"/><line x1="30" y1="62" x2="70" y2="62" stroke="#E8712C" stroke-width="2" stroke-linecap="round"/></svg></div>
                        <span class="illustration-label">Deductions</span>
                        <span class="step-number-large">04</span>
                    </div>
                </div>
            </div>
            <div class="step-card">
                <div class="step-content">
                    <span class="step-badge">Step 5</span>
                    <h3 class="step-title">Transfer Pricing Reporting</h3>
                    <p class="step-description">If international or specified domestic transactions exist, complete Form 3CEB accountant report and Schedule TPSA under Section 92E. Maintain Section 92D master file and local file documentation. File CBC report under Section 286 if group consolidated revenue exceeds Rs 6,400 crore.</p>
                    <div class="step-highlights">
                        <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> 3CEB filed</span>
                        <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> TPSA complete</span>
                    </div>
                </div>
                <div class="step-visual">
                    <div class="step-illustration">
                        <div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="15" y="5" width="90" height="70" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><line x1="30" y1="22" x2="90" y2="22" stroke="#F5A623" stroke-width="3" stroke-linecap="round"/><line x1="30" y1="38" x2="80" y2="38" stroke="#14365F" stroke-width="2" stroke-linecap="round" opacity="0.3"/><line x1="30" y1="50" x2="85" y2="50" stroke="#14365F" stroke-width="2" stroke-linecap="round" opacity="0.3"/><line x1="30" y1="62" x2="70" y2="62" stroke="#E8712C" stroke-width="2" stroke-linecap="round"/></svg></div>
                        <span class="illustration-label">TP</span>
                        <span class="step-number-large">05</span>
                    </div>
                </div>
            </div>
            <div class="step-card">
                <div class="step-content">
                    <span class="step-badge">Step 6</span>
                    <h3 class="step-title">ITR-6 Preparation</h3>
                    <p class="step-description">Fill 25+ schedules including Schedule BP (business profession), Schedule MAT, Schedule TPSA, Schedule TR (foreign tax relief), Schedule FA (foreign assets), Schedule CFL (carry-forward losses), Schedule DPM (depreciation), Schedule DOA, Schedule AL.</p>
                    <div class="step-highlights">
                        <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> All schedules done</span>
                        <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Validator passed</span>
                    </div>
                </div>
                <div class="step-visual">
                    <div class="step-illustration">
                        <div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="15" y="5" width="90" height="70" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><line x1="30" y1="22" x2="90" y2="22" stroke="#F5A623" stroke-width="3" stroke-linecap="round"/><line x1="30" y1="38" x2="80" y2="38" stroke="#14365F" stroke-width="2" stroke-linecap="round" opacity="0.3"/><line x1="30" y1="50" x2="85" y2="50" stroke="#14365F" stroke-width="2" stroke-linecap="round" opacity="0.3"/><line x1="30" y1="62" x2="70" y2="62" stroke="#E8712C" stroke-width="2" stroke-linecap="round"/></svg></div>
                        <span class="illustration-label">Prepared</span>
                        <span class="step-number-large">06</span>
                    </div>
                </div>
            </div>
            <div class="step-card">
                <div class="step-content">
                    <span class="step-badge">Step 7</span>
                    <h3 class="step-title">DSC E-Verification and Submission</h3>
                    <p class="step-description">File via Class 2 or Class 3 DSC of Director, MD, or CFO. Aadhaar OTP, net banking and bank account EVC are not permitted for companies. Generate ITR-V acknowledgement with 15-digit acknowledgement number. Refund tracking and Section 143(1) intimation follow-up included.</p>
                    <div class="step-highlights">
                        <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> DSC e-verified</span>
                        <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> ITR-V generated</span>
                    </div>
                </div>
                <div class="step-visual">
                    <div class="step-illustration">
                        <div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="15" y="5" width="90" height="70" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><line x1="30" y1="22" x2="90" y2="22" stroke="#F5A623" stroke-width="3" stroke-linecap="round"/><line x1="30" y1="38" x2="80" y2="38" stroke="#14365F" stroke-width="2" stroke-linecap="round" opacity="0.3"/><line x1="30" y1="50" x2="85" y2="50" stroke="#14365F" stroke-width="2" stroke-linecap="round" opacity="0.3"/><line x1="30" y1="62" x2="70" y2="62" stroke="#E8712C" stroke-width="2" stroke-linecap="round"/></svg></div>
                        <span class="illustration-label">Filed</span>
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
            <h2 class="section-title">Documents Checklist for ITR-6 Filing</h2>
            <div class="content-text">
                
                <p>The Patron document checklist for company ITR-6 is segmented by company type and complexity. Mandatory documents cover audited financials and statutory audit reports; additional documents apply for DPIIT startups, transfer pricing cases and foreign companies.</p>
                <p><strong>Mandatory documents (all companies):</strong></p>
                <ul>
                    <li>Audited financial statements - Balance Sheet, Profit and Loss account, Cash Flow Statement, Notes to Accounts in Schedule III format under the Companies Act 2013.</li>
                    <li>Tax Audit Report - Form 3CA (where statutory audit also applies) or Form 3CB plus Form 3CD with all annexures and disclosures.</li>
                    <li>Form 26AS, Annual Information Statement (AIS), GST 9C reconciliation with audited financials.</li>
                    <li>Bank statements for all operating accounts including foreign currency accounts.</li>
                    <li>Valid Digital Signature Certificate (DSC) - Class 2 or Class 3 - of Director, MD, or CFO; PAN of signatory must match e-filing portal registration.</li>
                    <li>Form 10-IC (if opting Section 115BAA) or Form 10-ID (if opting Section 115BAB) - filed BEFORE the ITR due date as a one-time election.</li>
                    <li>Last 3 years' ITR-6 acknowledgements for carry-forward loss continuity and MAT credit balance.</li>
                </ul>
                <p><strong>Additional for DPIIT startups claiming Section 80-IAC:</strong></p>
                <ul>
                    <li>DPIIT Recognition Certificate (separate from IMB).</li>
                    <li>IMB Certificate (Inter-Ministerial Board approval) - mandatory and separate from DPIIT recognition. Only about 1.8 percent of DPIIT-recognised startups hold IMB approval.</li>
                    <li>Section 80-IAC year-of-claim memo (3 consecutive AYs out of first 10 years - irrevocable choice).</li>
                    <li>Form 3CB-3CD audit report (mandatory for 80-IAC claim regardless of turnover threshold).</li>
                </ul>
                <p><strong>Additional for transfer pricing cases:</strong></p>
                <ul>
                    <li>Form 3CEB transfer pricing accountant report under Section 92E.</li>
                    <li>Section 92D documentation (master file, local file, intercompany agreements).</li>
                    <li>CBC report under Section 286 if group consolidated revenue exceeds Rs 6,400 crore.</li>
                </ul>
                <p><strong>Key Outputs You Receive:</strong> Filed ITR-6 acknowledgement (ITR-V) with DSC e-verification confirmation. Regime comparison sheet (Standard vs Section 115BAA vs Section 115BAB) with chosen-regime justification. MAT computation under Section 115JB with credit carry-forward tracker covering the 15-year window. Form 3CEB transfer pricing report (where applicable). Section 80-IAC deduction working with year-selection memo. Loss carry-forward schedule under Sections 70, 71, 72 with Section 79 shareholding test commentary for closely-held companies.</p>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 9: CHALLENGES -->
<section class="content-section" id="challenges-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Common Company ITR-6 Mistakes and How We Avoid Them</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Challenge</th><th>Impact</th><th>How Patron Accounting Solves It</th></tr></thead>
                    <tbody>
                        
                        <tr><td><strong>Switching to Section 115BAA before exhausting 80-IAC</strong></td><td>Section 115BAA blocks Section 80-IAC, 80-IA, 80-IB deductions. Many founders opt into 115BAA for a 3 percent rate cut and forfeit Rs 30 to 100 lakh of 80-IAC tax holiday. The election is irrevocable.</td><td>Patron runs a 10-year tax projection comparing standard plus 80-IAC plus MAT credit vs 115BAA. Both paths modelled before filing Form 10-IC.</td></tr>
                        <tr><td><strong>MAT credit lost on Section 115BAA opt-in</strong></td><td>Companies with accumulated MAT credit under Section 115JAA lose it when opting for 115BAA. CBDT Circular 29/2019 confirms MAT credit becomes unusable.</td><td>Patron computes MAT credit balance against expected normal tax for the next 5 years before recommending regime switch. Credit utilisation schedule overlaid on regime decision.</td></tr>
                        <tr><td><strong>Transfer pricing errors triggering Section 271AA/271G penalties (up to 2 percent of transaction value)</strong></td><td>Form 3CEB filed late, Schedule TPSA mismatches with the master file, or missing Section 92D documentation triggers penalty up to 2 percent of the transaction value under Sections 271AA and 271G.</td><td>Patron co-ordinates the Section 92E accountant, Form 3CEB filing, Schedule TPSA reporting and Section 92D documentation review end to end.</td></tr>
                        <tr><td><strong>DPIIT startup claiming 80-IAC without IMB certification</strong></td><td>DPIIT recognition alone is NOT sufficient for 80-IAC. The Inter-Ministerial Board (IMB) certificate is a separate, mandatory approval. Only about 3,700 of 207,135 DPIIT-recognised startups hold IMB approval.</td><td>Patron pre-screens IMB application 6 to 9 months before the planned 80-IAC claim year. Filing without IMB certification results in disallowance at Section 143(3) scrutiny.</td></tr>
                        <tr><td><strong>Low-profit year selection for 80-IAC</strong></td><td>Taxpayers choose Year 4, 5, 6 of incorporation for 80-IAC instead of waiting for Year 7, 8, 9 when profits typically peak. The year selection is irrevocable once filed in ITR-6.</td><td>Patron 80-IAC year-selection memo locks in the most tax-efficient 3-year window based on profit projections, board-approved budgets and growth trajectory.</td></tr>
                        <tr><td><strong>Section 79 shareholding test failure for closely-held companies</strong></td><td>Closely-held company carry-forward losses lapse under Section 79 if more than 49 percent of voting power changes hands. Common in VC funding rounds without Section 79 carve-out.</td><td>Patron tracks shareholding changes across funding rounds. Section 79(2) carve-outs (death, gift, amalgamation, demerger, eligible startup ESOP) documented to preserve carry-forward.</td></tr>
                        <tr><td><strong>DSC mismatch or expiry at filing time</strong></td><td>An expired DSC, or DSC issued to a different PAN than the e-filing portal registration, makes ITR-6 invalid. Aadhaar OTP and net banking EVC are not permitted for companies.</td><td>Patron pre-files DSC validity check 30 days before the Section 139(1) due date. DSC-PAN match verified against e-filing portal registration.</td></tr>
                        <tr><td><strong>Schedule FA, Schedule TR, Schedule TPSA omissions</strong></td><td>Companies with foreign subsidiaries or step-down entities frequently miss Schedule FA disclosure. Schedule TR foreign tax credit not co-ordinated with Form 67. Schedule TPSA misaligned with Form 3CEB.</td><td>Patron schedule-completeness checklist covers all 25+ ITR-6 schedules. Foreign asset reconciliation done against consolidation working papers.</td></tr>


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
            <h2 class="section-title">Company ITR-6 Filing Fees (AY 2026-27)</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Fee Component</th><th>Amount</th></tr></thead>
                    <tbody>
                        
                        <tr><td>Pvt Ltd or OPC - turnover under Rs 5 crore, no TP, no startup deduction</td><td>Standard ITR-6 with audit coordination, regime arbitrage, MAT computation, Schedule III reconciliation</td><td class="table-amount">Rs 2,999</td></tr>
                        <tr><td>NIL ITR-6 for dormant company or pre-revenue Pvt Ltd</td><td>Mandatory NIL filing under Section 139(1) for zero-revenue or loss-making companies; preserves carry-forward and company status</td><td class="table-amount">Rs 1,999</td></tr>
                        <tr><td>Pvt Ltd - turnover Rs 5 crore to Rs 50 crore, Section 115BAA opt-in</td><td>Includes Form 10-IC filing, 10-year regime projection, MAT credit reconciliation pre-election</td><td class="table-amount">Rs 9,999</td></tr>
                        <tr><td>Pvt Ltd Startup with Section 80-IAC and IMB certification</td><td>DPIIT plus IMB co-ordination, year-selection memo, Form 3CB-3CD audit, 100 percent profit deduction claim</td><td class="table-amount">Rs 14,999</td></tr>
                        <tr><td>Public Limited Company - turnover Rs 50 crore to Rs 500 crore</td><td>Schedule III reconciliation, statutory disclosures, dividend distribution, IndAS adjustments where applicable</td><td class="table-amount">Rs 24,999</td></tr>
                        <tr><td>Company with international transactions and transfer pricing (Form 3CEB)</td><td>Form 3CEB co-ordination, Schedule TPSA, Section 92D master file alignment, benchmarking review</td><td class="table-amount">Rs 35,000</td></tr>
                        <tr><td>Foreign Company with Permanent Establishment in India</td><td>PE determination, DTAA relief, Form 67 FTC, withholding tax reconciliation, MAT on PE income</td><td class="table-amount">Rs 45,000</td></tr>
                        <tr><td>Tax Audit only (Section 44AB) - quoted separately</td><td>Form 3CA-3CD or 3CB-3CD tax audit report; charged separately from ITR filing fee</td><td class="table-amount">From Rs 15,000</td></tr>
                        <tr><td><strong>Patron Accounting Professional Fees</strong></td><td>Standard starting price for basic Pvt Ltd or OPC ITR-6; transfer pricing study reports and CBC reports quoted separately based on transaction value and complexity</td><td class="table-amount"><strong>Starting from INR 2,999 (Excl. GST and Govt. Charges)</strong></td></tr>


                    </tbody>
                </table>
                </div>
                <p style="margin-top:16px;font-size:13px;color:var(--text-muted);font-style:italic;">All fees and charges listed are indicative only and do not constitute a binding offer. Final amounts may vary depending on the volume of work and the complexity involved.</p>
                <p style="margin-top:16px;">Professional service charges for drafting, filing, and representation are separate from the statutory fees. The exact fee depends on the complexity of the case, disputed amount, and number of hearings required. Contact us for a detailed quote.</p>
                <p style="margin-top:16px;font-size:13px;color:var(--text-muted);font-style:italic;"><strong>Disclaimer:</strong> All fees and charges listed are indicative only and do not constitute a binding offer. Final amounts may vary depending on the volume of work and the complexity involved.</p>
                <p style="margin-top:16px;"><strong>Get a free ITR Filing for Companies consultation - <a href="tel:+919459456700">Call +91 945 945 6700</a> or <a href="https://wa.me/919459456700?text=Hi%2C%20please%20share%20a%20written%20quote%20for%20our%20company%20ITR-6%20filing." target="_blank">WhatsApp us</a>. No-obligation assessment.</strong></p>
            </div>
        </div>
    </div>
</section>

<!-- SECTION 11: TIMELINE -->
<section class="content-section" id="timeline-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Timeline and Statutory Deadlines</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Stage</th><th>Estimated Timeline</th></tr></thead>
                    <tbody>
                        
                        <tr><td><strong>Patron Engagement Turnaround</strong></td><td class="table-amount">&nbsp;</td></tr>
                        <tr><td>Basic Pvt Ltd or OPC ITR-6 (no TP, no audit complications)</td><td class="table-amount">7 to 10 working days post audit</td></tr>
                        <tr><td>Pvt Ltd with Section 115BAA opt-in (includes Form 10-IC filing)</td><td class="table-amount">10 to 14 working days</td></tr>
                        <tr><td>DPIIT startup with Section 80-IAC claim (year-selection memo + IMB validation)</td><td class="table-amount">14 to 21 working days</td></tr>
                        <tr><td>Transfer pricing cases (Form 3CEB, Schedule TPSA, master file co-ordination)</td><td class="table-amount">25 to 40 working days</td></tr>
                        <tr><td>Tax audit parallel track lead time before ITR filing</td><td class="table-amount">4 to 8 weeks</td></tr>
                        <tr><td><strong>Statutory Deadlines AY 2026-27</strong></td><td class="table-amount">&nbsp;</td></tr>
                        <tr><td>Tax audit report (Form 3CA-3CD or 3CB-3CD) under Section 44AB</td><td class="table-amount">30 September 2026</td></tr>
                        <tr><td>Form 3CEB transfer pricing accountant report under Section 92E</td><td class="table-amount">31 October 2026</td></tr>
                        <tr><td>ITR-6 audit cases under Section 44AB</td><td class="table-amount">31 October 2026</td></tr>
                        <tr><td>ITR-6 transfer pricing cases under Section 92E</td><td class="table-amount">30 November 2026</td></tr>
                        <tr><td>Form 10-IC (Section 115BAA opt-in) or Form 10-ID (Section 115BAB opt-in)</td><td class="table-amount">Before Section 139(1) ITR due date</td></tr>
                        <tr><td>Belated ITR-6 under Section 139(4) with Section 234F fee</td><td class="table-amount">31 December 2026</td></tr>
                        <tr><td>Revised ITR-6 under Section 139(5)</td><td class="table-amount">31 March 2027</td></tr>
                        <tr><td>Updated Return (ITR-U) under Section 139(8A)</td><td class="table-amount">31 March 2031</td></tr>


                    </tbody>
                </table>
                </div>
                <div class="highlight-box" style="margin-top:16px;">
                    
                    With the 30 September 2026 tax audit report deadline and 31 October 2026 ITR-6 due date for audit cases, engage Patron Accounting by 31 July 2026 to lock in regime decisions (Form 10-IC or Form 10-ID filing) and avoid year-end audit firm bottlenecks. Late filing triggers Section 234F fee up to Rs 5,000, Section 234A interest at 1 percent per month and prosecution risk under Section 276CC for wilful default. Section 271AA and 271G penalties on transfer pricing reporting failures go up to 2 percent of transaction value.

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
            <h2 class="section-title">Why Patron for Company ITR-6 Filing</h2>
        </div>
        <div class="features-grid">
    <article class="feature-card"><h3>Regime Arbitrage Memo</h3><p>10-year tax projection comparing Standard plus 80-IAC plus MAT credit vs Section 115BAA before Form 10-IC filing. The election is irrevocable - we model both paths.</p></article>
    <article class="feature-card"><h3>MAT Credit Tracking 15-Year Window</h3><p>Section 115JAA MAT credit balance reconciled annually across the 15-year window. Credit utilisation schedule overlaid on regime decision to prevent credit lapse on 115BAA opt-in.</p></article>
    <article class="feature-card"><h3>Transfer Pricing Schedule Preparation</h3><p>Form 3CEB, Schedule TPSA and Section 92D documentation co-ordinated end to end. Avoids Section 271AA and 271G penalty up to 2 percent of transaction value.</p></article>
    <article class="feature-card"><h3>80-IAC Year-Selection Memo</h3><p>DPIIT startup tax holiday window locked in based on profit projections. IMB application pre-screened 6 to 9 months before claim year to avoid Section 143(3) scrutiny disallowance.</p></article>
    <article class="feature-card"><h3>Schedule FA, TR, TPSA Completeness</h3><p>All 25+ ITR-6 schedules audited for completeness. Foreign asset reconciliation against consolidation working papers. Foreign Tax Credit claimed via Form 67 before ITR submission.</p></article>
    <article class="feature-card"><h3>12 Months Post-Filing Notice Support</h3><p>Section 143(1) demand notices, Section 143(2) scrutiny, Section 142(1) enquiry, Section 148 reassessment - all covered by named CA partner for 12 months at no extra cost.</p></article>
</div>
    </div>
</section>

<!-- SECTION 12A: SOCIAL PROOF -->
<section class="content-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Trusted by 3,000+ Companies for ITR-6 Filing</h2>
            <div class="content-text">
                
                <p><strong>3,000+ Companies Served | 4.9 Google Rating | 50,000+ Filings | 15+ Years in Practice</strong></p>
                <p>Our DPIIT-recognised SaaS startup was on the verge of opting into Section 115BAA on the auditor's advice. Patron ran a 10-year projection showing we'd lose Rs 82 lakh in 80-IAC deductions across the next 3 profitable years. They guided us through the IMB certification and we filed ITR-6 with the 80-IAC claim. Saved real money. - Co-founder, FinTech startup, Bengaluru.</p>
                <p>Patron managed our complete ITR-6 for two financial years. From audit coordination to MAT computation under Section 115JB, everything was handled without us chasing anyone. They identified Rs 23 lakh of MAT credit from three years ago that reduced our current year liability. - CFO, mid-size manufacturing Pvt Ltd, Pune.</p>
                <p><strong>Outcome Proof:</strong> Across the AY 2025-26 corporate filing cycle, Patron filed 1,200+ company ITRs with zero defective return notices under Section 139(9), 98 percent on-time submission ahead of the 31 October deadline, and Rs 4.2 crore of MAT credit recovered across the client base.</p>
                <p><strong>With offices in Pune, Mumbai, Delhi and Gurugram, Patron Accounting serves companies across India - both in-person and remotely.</strong></p>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 13: SELF-FILING vs PROFESSIONAL COMPARISON -->
<section class="content-section" id="comparison-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Section 80-IAC vs Section 115BAA - Startup Decision Matrix</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead>
                        <tr>
                            <th>Parameter</th>
                            <th>Section 80-IAC (Standard Rate plus Deduction)</th>
                            <th>Section 115BAA (22 percent Concessional)</th>
                        </tr>
</thead>
                    <tbody>
                        
                        <tr><td><strong>Tax Saving</strong></td><td>100 percent on profits for 3 consecutive AYs out of first 10 years</td><td>22 percent basic rate (vs 25 to 30 percent standard); effective 25.168 percent with surcharge and cess</td></tr>
                        <tr><td><strong>Eligibility</strong></td><td>DPIIT-recognised Pvt Ltd or LLP (not partnership firm) with IMB certification; incorporated 1 April 2016 to 1 April 2030; turnover under Rs 100 crore (Rs 200 crore for Deep Tech)</td><td>All domestic companies; irrevocable election via Form 10-IC</td></tr>
                        <tr><td><strong>Other Chapter VI-A Deductions</strong></td><td>Allowed - Section 80JJAA new employment, Section 80M inter-corporate dividends, others continue</td><td>Most blocked - only Section 80JJAA and 80M survive; Section 80-IAC, 80-IA, 80-IB disallowed</td></tr>
                        <tr><td><strong>MAT Applicability</strong></td><td>Yes - Section 115JB MAT at 15 percent of book profit applies; MAT credit under Section 115JAA accumulates</td><td>Exempt - no MAT applicability; existing MAT credit lapses on opt-in</td></tr>
                        <tr><td><strong>Carry-Forward Losses</strong></td><td>Allowed under Sections 70, 71, 72; DPIIT eligible startups get 10-year carry-forward under Section 79A</td><td>Restricted on opt-in year onwards; pre-opt-in losses survive but post-opt-in carry-forward is limited</td></tr>
                        <tr><td><strong>Approval Process</strong></td><td>DPIIT recognition PLUS IMB certification (two separate approvals); IMB review takes up to 120 days</td><td>Form 10-IC filing only - no external approval needed; one-time election</td></tr>
                        <tr><td><strong>Best For</strong></td><td>Profitable DPIIT-recognised startups with growing revenue trajectory, board-approved profit projections and IMB certification in hand</td><td>Mature companies with stable profits, low Chapter VI-A claims, no startup status, no MAT credit carry-forward</td></tr>
                        <tr><td><strong>10-Year Tax Outcome (Illustrative for Rs 5 cr profit yr 7-9)</strong></td><td>~ Rs 0 tax for 3 chosen years + standard rate other years; net effective rate often 5 to 12 percent across 10 years</td><td>~ Rs 1.26 cr/year tax across all years; 25.168 percent rate applies uniformly</td></tr>


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
            <h2 class="section-title">Adjacent Patron Services</h2>
            <div class="content-text">
                
                <ul>
                    <li><strong><a href="/income-tax-return/">Income Tax Return Filing Master Hub</a></strong> - hub-and-spoke routing across all 7 ITR forms and 14 sub-services including individual ITR, business ITR, capital gains, F and O, crypto, NRI.</li>
                    <li><strong><a href="/tax-audit/">Tax Audit under Section 44AB</a></strong> - mandatory for companies with turnover above Rs 1 crore (Rs 10 crore if 95 percent digital). Form 3CA-3CD or 3CB-3CD preparation. Due 30 September 2026 - one month before ITR-6.</li>
                    <li><strong><a href="/tax-planning-services/">Tax Planning Services</a></strong> - corporate regime selection memo, MAT credit utilisation plan, Section 80-IAC year selection, dividend distribution timing under Section 115O legacy framework.</li>
                    <li><strong><a href="/tds-return/">TDS Return Filing (Form 24Q, 26Q, 27Q, 27EQ)</a></strong> - mandatory quarterly TDS compliance for companies; reconciliation before ITR-6 filing.</li>
                    <li><strong><a href="/income-tax-notice/">Income Tax Notice Response</a></strong> - Section 143(1) demand, Section 143(2) scrutiny, Section 142(1) enquiry, Section 148 reassessment, faceless assessment under Section 144B representation.</li>
                    <li><strong><a href="/itr-for-business/">ITR Filing for Business (ITR-3 and ITR-4)</a></strong> - for proprietors and partnership firms (LLPs file ITR-5).</li>
                </ul>

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
                
                <ul>
                    <li><strong>Income Tax Act, 1961</strong> - governing statute for AY 2026-27 company returns. The new Income Tax Act 2025 applies from 1 April 2026 to Tax Year 2026-27 returns due in 2027 - existing Sections 115BAA, 115BAB, 80-IAC, 115JB carry forward into the new Act. <a href="https://www.incometax.gov.in" target="_blank" rel="noopener">Income Tax Department e-filing portal</a>.</li>
                    <li><strong>Companies Act, 2013</strong> and earlier Companies Act, 1956 - incorporation framework defining companies for ITR-6 purpose.</li>
                    <li><strong>Section 2(17), Income Tax Act 1961</strong> - definition of company; covers Indian company and foreign company.</li>
                    <li><strong>Section 139(1)</strong> - mandatory annual return for all companies regardless of profit, loss, or zero revenue.</li>
                    <li><strong>Section 115BAA</strong> - 22 percent concessional rate for domestic companies (introduced by Taxation Laws (Amendment) Act, 2019); effective 25.168 percent with surcharge and cess; Form 10-IC opt-in.</li>
                    <li><strong>Section 115BAB</strong> - 15 percent rate for new domestic manufacturing companies set up after 1 October 2019 commencing manufacture before 31 March 2024; Form 10-ID opt-in.</li>
                    <li><strong>Section 115JB</strong> - Minimum Alternate Tax at 15 percent of book profit; not applicable to Section 115BAA or 115BAB companies.</li>
                    <li><strong>Section 115JAA</strong> - MAT credit carry-forward for 15 years for set-off against future normal tax.</li>
                    <li><strong>Section 80-IAC</strong> - 100 percent startup tax holiday for 3 consecutive AYs out of first 10 years from incorporation for eligible DPIIT-recognised Pvt Ltd or LLP with IMB certification.</li>
                    <li><strong>Section 79A</strong> - 10-year carry-forward of losses for DPIIT-recognised eligible startups (vs general 8-year rule).</li>
                    <li><strong>Section 44AB</strong> - tax audit threshold for companies (turnover above Rs 1 crore, or Rs 10 crore if 95 percent digital receipts); Form 3CA-3CD or 3CB-3CD.</li>
                    <li><strong>Section 92E</strong> - transfer pricing accountant report (Form 3CEB) for international and specified domestic transactions; due 31 October 2026.</li>
                    <li><strong>Section 92D</strong> - transfer pricing documentation requirements (master file, local file).</li>
                    <li><strong>Section 286</strong> - Country-by-Country (CBC) report for multinational groups with consolidated revenue above Rs 6,400 crore.</li>
                    <li><strong>Section 79</strong> - carry-forward restriction on change in shareholding above 49 percent for closely-held companies; Section 79(2) carve-outs for death, gift, amalgamation, demerger, eligible startup ESOP.</li>
                    <li><strong>Section 144B</strong> - faceless assessment framework for company assessments.</li>
                    <li><strong>Section 234F</strong> - late filing fee Rs 5,000 (Rs 1,000 if total income up to Rs 5 lakh).</li>
                    <li><strong>Section 234A</strong> - interest at 1 percent per month on unpaid tax from due date.</li>
                    <li><strong>Section 234B and 234C</strong> - interest for advance tax default and deferment.</li>
                    <li><strong>Section 270A</strong> - penalty of 50 percent of tax for under-reporting; 200 percent for mis-reporting.</li>
                    <li><strong>Section 271AA and 271G</strong> - transfer pricing documentation and reporting penalties up to 2 percent of transaction value.</li>
                    <li><strong>Section 276CC</strong> - prosecution up to 7 years for wilful non-filing of return.</li>
                    <li><strong>Companies (Amendment) Act, 2020</strong> - revised OPC and small company thresholds (paid-up capital up to Rs 4 crore, turnover up to Rs 40 crore).</li>
                    <li><strong>DPIIT (Department for Promotion of Industry and Internal Trade)</strong> - <a href="https://www.startupindia.gov.in/content/sih/en/startupgov/startup_recognition_page.html" target="_blank" rel="noopener">Startup Recognition framework</a>.</li>
                    <li><strong>Inter-Ministerial Board (IMB) certification</strong> - <a href="https://www.startupindia.gov.in/content/sih/en/form80iac.html" target="_blank" rel="noopener">Section 80-IAC application</a>; separate from DPIIT recognition.</li>
                    <li><strong>Central Board of Direct Taxes (CBDT)</strong> - administrative authority. <a href="https://incometaxindia.gov.in/Pages/communications/notifications.aspx" target="_blank" rel="noopener">CBDT Notifications</a>.</li>
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
                    <p class="faq-expanded__lead">Long-tail answers on ITR-6 filing for companies AY 2026-27 - due dates, who must file, Section 115BAA vs 115BAB, fees, Section 80-IAC startup tax holiday, MAT applicability under Section 115JB and DSC requirements.</p>
                    @include('partials.faq-enquiry-form')
                </aside>
                <div class="faq-expanded__list">
                    <div class="faq-expanded__item" id="faq-1">
                        <h3 class="faq-expanded__q">What is the due date for ITR-6 filing for AY 2026-27?</h3>
                        <div class="faq-expanded__a"><p>For AY 2026-27, ITR-6 is due 31 October 2026 for companies requiring tax audit under Section 44AB. Companies with international or specified domestic transactions falling under Section 92E transfer pricing have until 30 November 2026. The corresponding tax audit report (Form 3CA-3CD or 3CB-3CD) must be filed by 30 September 2026, one month before the ITR due date. Belated ITR under Section 139(4) is allowed till 31 December 2026 with a Section 234F fee.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-2">
                        <h3 class="faq-expanded__q">Who can file ITR-6 for AY 2026-27?</h3>
                        <div class="faq-expanded__a"><p>ITR-6 is filed by every company under Section 2(17) of the Income Tax Act 1961 - Pvt Ltd, Public Ltd, OPC, foreign companies, and producer companies - except those claiming Section 11 exemption. Charitable trusts, Section 8 companies registered under Section 12A, and religious institutions file ITR-7 instead. Filing is mandatory regardless of profit, loss, or zero revenue. ITR-6 must be e-filed with a valid Director, MD, or CFO DSC.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-3">
                        <h3 class="faq-expanded__q">What is the difference between Section 115BAA and Section 115BAB?</h3>
                        <div class="faq-expanded__a"><p>Section 115BAA offers domestic companies a concessional 22 percent basic tax rate with effective 25.168 percent (including 10 percent surcharge and 4 percent cess) and exempts them from MAT under Section 115JB. Section 115BAB applies only to new domestic manufacturing companies set up after 1 October 2019 commencing manufacture before 31 March 2024, with 15 percent basic rate and 17.16 percent effective rate. Both regimes block most Chapter VI-A deductions including Section 80-IAC.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-4">
                        <h3 class="faq-expanded__q">How much does company ITR-6 filing cost with Patron?</h3>
                        <div class="faq-expanded__a"><p>Patron Accounting company ITR filing starts at Rs 2,999 for basic Pvt Ltd or OPC with turnover under Rs 5 crore and no transfer pricing. Mid-size Pvt Ltd with Section 115BAA opt-in starts at Rs 9,999. DPIIT startup with Section 80-IAC claim starts at Rs 14,999. Transfer pricing cases with Form 3CEB start at Rs 35,000. NIL ITR for dormant companies is Rs 1,999. Tax audit fees are quoted separately.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-5">
                        <h3 class="faq-expanded__q">How does Section 80-IAC startup tax holiday work?</h3>
                        <div class="faq-expanded__a"><p>Section 80-IAC allows DPIIT-recognised Pvt Ltd companies and LLPs to claim 100 percent deduction of profits from eligible business for 3 consecutive AYs out of the first 10 years from incorporation. Eligibility requires Pvt Ltd or LLP structure (not partnership firm), incorporation between 1 April 2016 and 1 April 2030, turnover under Rs 100 crore, and a separate IMB (Inter-Ministerial Board) certificate beyond DPIIT recognition. Only about 3,700 of 207,135 DPIIT-recognised startups hold IMB approval - a 1.8 percent conversion rate.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-6">
                        <h3 class="faq-expanded__q">Can I opt for Section 115BAA and still claim Section 80-IAC?</h3>
                        <div class="faq-expanded__a"><p>No. Section 115BAA explicitly disallows deductions under Sections 80-IA, 80-IAB, 80-IAC, and most Chapter VI-A provisions except Sections 80JJAA and 80M. The election under Section 115BAA is irrevocable once made by filing Form 10-IC. For DPIIT-recognised startups with IMB certification, claiming 80-IAC under standard tax rates is usually more beneficial than 115BAA - run a 10-year projection before electing.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-7">
                        <h3 class="faq-expanded__q">Is MAT applicable to all companies for AY 2026-27?</h3>
                        <div class="faq-expanded__a"><p>Minimum Alternate Tax under Section 115JB applies at 15 percent of book profit when regular tax is lower than 15 percent of book profit. MAT does not apply to companies opting for Section 115BAA or Section 115BAB. The excess of MAT over regular tax is available as MAT credit under Section 115JAA for set-off in subsequent years for 15 years. Foreign companies with India PE are also liable for MAT on income attributable to the PE.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-8">
                        <h3 class="faq-expanded__q">Is DSC mandatory for company ITR-6 filing?</h3>
                        <div class="faq-expanded__a"><p>Yes. ITR-6 can only be e-filed with a valid Class 2 or Class 3 Digital Signature Certificate of the Managing Director, Director, or CFO. Alternative verification methods such as Aadhaar OTP, net banking EVC, or bank account EVC are not permitted for companies. An expired DSC at the time of filing makes the return invalid. The DSC must match the PAN of the authorised signatory registered with the Income Tax e-filing portal.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-9">
                        <h3 class="faq-expanded__q">Company ka ITR-6 kab tak file karna hai AY 2026-27 ke liye? (When is company ITR-6 due for AY 2026-27)</h3>
                        <div class="faq-expanded__a"><p>AY 2026-27 ke liye company ITR-6 ki last date 31 October 2026 hai audit cases ke liye (Section 44AB). International ya specified domestic transactions wali companies (transfer pricing Section 92E) ke liye 30 November 2026 hai. Tax audit report (Form 3CA-3CD ya 3CB-3CD) 30 September 2026 tak file karna hai - ITR se ek mahina pehle. Belated ITR Section 139(4) ke under 31 December 2026 tak file kar sakte hain (Rs 5,000 late fee Section 234F ke under). Pvt Ltd company ka basic ITR-6 Rs 2,999 se start hota hai. DSC of Director/MD/CFO mandatory hai - Aadhaar OTP allowed nahi hai companies ke liye. Call +91 945 945 6700.</p></div>
                    </div>
                </div>
            </div>


            <!-- Quick Answers -->
            <div class="highlight-box" style="margin-top:32px;">
                <p><strong>Quick Answers</strong></p>
                <ul>
                    <li><strong>When is ITR-6 due for AY 2026-27?</strong> 31 October 2026 for audit cases under Section 44AB; 30 November 2026 for transfer pricing cases under Section 92E.</li>
                    <li><strong>What is the effective tax rate under Section 115BAA?</strong> 25.168 percent (22 percent basic plus 10 percent surcharge plus 4 percent cess) for domestic companies opting into the concessional regime.</li>
                    <li><strong>What is the effective tax rate under Section 115BAB?</strong> 17.16 percent (15 percent basic plus 10 percent surcharge plus 4 percent cess) for new domestic manufacturing companies.</li>
                    <li><strong>What is the MAT rate for AY 2026-27?</strong> 15 percent of book profit under Section 115JB. Not applicable to companies opting for Section 115BAA or 115BAB.</li>
                    <li><strong>How long is the Section 80-IAC tax holiday?</strong> 100 percent profit deduction for any 3 consecutive AYs out of the first 10 years from incorporation for DPIIT-recognised Pvt Ltd or LLP with IMB certification.</li>
                    <li><strong>What is the tax audit deadline for AY 2026-27?</strong> 30 September 2026 - one month before the 31 October 2026 ITR-6 due date.</li>
                    <li><strong>Is NIL ITR mandatory for dormant companies?</strong> Yes - filing is mandatory regardless of profit, loss, or zero revenue under Section 139(1) for all companies under Section 2(17).</li>
                    <li><strong>What is the MAT credit carry-forward window?</strong> 15 years under Section 115JAA for set-off against future normal tax.</li>
                </ul>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 18: URGENCY CTA -->
<section class="content-section" style="background: var(--orange-lighter) !important; border-left: 4px solid var(--orange);">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">AY 2026-27 ITR-6 Countdown - Engage by 31 July 2026</h2>
            <div class="content-text">
                
                Tax audit report (Form 3CD) due 30 September 2026. ITR-6 due 31 October 2026 for audit cases and 30 November 2026 for transfer pricing cases. Form 10-IC (Section 115BAA opt-in) and Form 10-ID (Section 115BAB) must be filed BEFORE the Section 139(1) due date as a one-time, irrevocable election. Late filing triggers Section 234F fee up to Rs 5,000, Section 234A interest at 1 percent per month and prosecution risk under Section 276CC for wilful default. Transfer pricing reporting failures attract Section 271AA and 271G penalties up to 2 percent of transaction value. Engage Patron Accounting by 31 July 2026 to lock in regime decisions and avoid year-end audit firm bottlenecks. <strong>Call +91 945 945 6700</strong> or <strong>WhatsApp us</strong> for a free 20-minute corporate tax scoping call.

            </div>
        </div>
    </div>
</section>

<!-- CONCLUSION + CTA BLOCK (Dark) -->
<section class="content-section" style="background: var(--blue) !important;">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title" style="color:#FFFFFF !important;">Talk to Patron for AY 2026-27 Company ITR-6 Filing</h2>
            <div class="content-text" style="text-align:left;">
                
                <p>ITR Filing for Companies for AY 2026-27 is the final cycle governed by the Income Tax Act, 1961 before the new Income Tax Act 2025 framework takes effect for Tax Year 2026-27 (the existing Sections 115BAA, 115BAB, 80-IAC, 115JB carry forward into the new Act). Regime decisions made this year - Section 115BAA opt-in via Form 10-IC, Section 115BAB via Form 10-ID, Section 80-IAC year selection, MAT credit utilisation under Section 115JAA - are irrevocable and shape corporate tax outflows for the next decade.</p>
                <p>Patron Accounting handles 3,000+ company ITRs annually across Pvt Ltd, OPC, public limited, DPIIT-recognised startups with IMB certification, and foreign company structures with India Permanent Establishment. The firm co-ordinates statutory audit, Section 44AB tax audit, MAT computation under Section 115JB, transfer pricing under Section 92E with Form 3CEB and Schedule TPSA, and Section 80-IAC strategy under a single corporate tax engagement.</p>
                <p>With offices in Pune, Mumbai, Delhi, and Gurugram and 15+ years of corporate tax practice, the firm filed 1,200+ company ITRs in AY 2025-26 with zero defective return notices and 98 percent on-time submission. Ready to file your AY 2026-27 company ITR-6? <strong>Call CA Sundaram Gupta at +91 945 945 6700</strong> or <strong>WhatsApp us</strong> for a free corporate tax consultation. We respond within 2 hours during business hours.</p>

            </div>
            <div style="display:flex;gap:14px;flex-wrap:wrap;margin-top:24px;">
                <a href="tel:+919459456700" style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:var(--orange);color:#fff;border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#128222; Call +91 945 945 6700</a>
                <a href="https://wa.me/919459456700?text=Hi%2C%20please%20share%20a%20written%20quote%20for%20our%20company%20ITR-6%20filing." target="_blank" style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:#25D366;color:#fff;border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#128172; WhatsApp Us</a>
                <a href="mailto:sales@patronaccounting.com" style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:transparent;color:#fff;border:2px solid rgba(255,255,255,0.3);border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#9993;&#65039; Email Us</a>
            </div>
            <p style="color:rgba(255,255,255,0.7);font-size:13px;margin-top:16px;">Book a Free Consultation - No Obligation.</p>
        </div>
    </div>
</section>

<!-- GSTAT STATE BENCH CITY PAGES (32 Pages) -->
<section class="content-section" style="padding:48px 32px;background:var(--gray-50);">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title" style="text-align:center;margin-bottom:12px;">Pan-India Coverage and Related Patron Services</h2>
            <p style="text-align:center;color:var(--text-muted);font-size:15px;margin-bottom:40px;">Company ITR-6 filing is delivered remotely from our Pune, Mumbai, Delhi and Gurugram offices to corporates across India. The Income Tax e-filing portal is national; registered office location does not constrain the engagement. Explore the master ITR hub and adjacent corporate compliance services below.</p>
            
            
            <div class="pa-cross-block">
                <h3 class="pa-cross-title">Related Patron Services</h3>
                <div class="pa-cross-grid">
                    <a href="/income-tax-return/" class="pa-cross-card">
                        <div class="pa-cross-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div>
                        <div class="pa-cross-text"><strong>ITR Filing Master Hub</strong><span>All 7 ITR forms; routing to 14 sub-services</span></div>
                    </a>
                    <a href="/itr-for-business/" class="pa-cross-card">
                        <div class="pa-cross-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div>
                        <div class="pa-cross-text"><strong>ITR for Business</strong><span>Proprietors, partnership firms (ITR-3/ITR-4)</span></div>
                    </a>
                    <a href="/tax-audit/" class="pa-cross-card">
                        <div class="pa-cross-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div>
                        <div class="pa-cross-text"><strong>Tax Audit Section 44AB</strong><span>Form 3CD; due 30 Sept 2026</span></div>
                    </a>
                    <a href="/tax-planning-services/" class="pa-cross-card">
                        <div class="pa-cross-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div>
                        <div class="pa-cross-text"><strong>Corporate Tax Planning</strong><span>Regime memo, 80-IAC year selection, MAT</span></div>
                    </a>
                    <a href="/tds-return/" class="pa-cross-card">
                        <div class="pa-cross-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div>
                        <div class="pa-cross-text"><strong>TDS Return Filing</strong><span>Quarterly Form 24Q, 26Q, 27Q, 27EQ</span></div>
                    </a>
                    <a href="/income-tax-notice/" class="pa-cross-card">
                        <div class="pa-cross-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div>
                        <div class="pa-cross-text"><strong>Income Tax Notice Response</strong><span>143(1), 143(2), 142(1), 148, faceless 144B</span></div>
                    </a>
                </div>
            </div>

        </div>
    </div>
</section>

<!-- CONTENT FRESHNESS FOOTER -->
<section class="content-section" style="padding:32px;">
    <div class="content-container">
        <div class="text-content" style="font-size:13px;color:var(--text-muted);">
            <p><strong>Content Created:</strong> 11 May 2026 &nbsp;|&nbsp; <strong>Last Updated:</strong> <span id="lastUpdatedFooter">11 May 2026</span> &nbsp;|&nbsp; <strong>Next Review:</strong> 11 November 2026 &nbsp;|&nbsp; <strong>Reviewed By:</strong> CA &amp; CS Team &middot; Patron Accounting LLP</p>
            <p>Tier 1 quarterly review plus post-Budget and post-CBDT/DPIIT notification refresh. Triggers for review: Finance Act amendments affecting corporate tax rates or Section 115BAA/115BAB scope, CBDT notifications on ITR-6 schema, DPIIT notifications on Section 80-IAC eligibility and IMB framework, MAT rate or Section 115JB changes, transfer pricing thresholds and CBC reporting changes under Section 286, Section 79 shareholding-change rules, new Income Tax Act 2025 transitional rules for Tax Year 2026-27 and Section 234F/234A interest rate changes. Sources: Income Tax Department e-filing portal (incometax.gov.in), CBDT notifications (incometaxindia.gov.in), Startup India (startupindia.gov.in), Finance Act 2026 and ICAI Direct Tax Committee publications.</p>
        </div>
    </div>
</section>

<!-- STICKY WHATSAPP BAR -->
<!-- <div class="wa-sticky-bar" id="waBar">
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
</div> -->

@include('layouts.itr-season-strip')
</main>

<!-- External JS Dependencies (loaded by master layout in production) -->


<!-- Google Maps Places Library (for GMB reviews) -->


<!-- To find Place ID: https://developers.google.com/maps/documentation/places/web-service/place-id -->
<script>
(function() {
    // ============================================
    // CONFIGURATION  -  Update these values
    // ============================================
    const CONFIG = {
        googleApiKey: '{{ env("GOOGLE_PLACES_API_KEY") }}',    // Get from Google Cloud Console → APIs & Services → Credentials
        placeId: '{{ env("PATRON_GOOGLE_PLACE_ID") }}',               // Patron Accounting's Google Place ID
        // Fallback static reviews (shown if API fails or key not set)
        fallbackReviews: [
            {
                author_name: "Subhendu Mishra",
                profile_photo_url: "",
                rating: 5,
                text: "I've had an outstanding experience working with my CA - Patron Accounting. Their professionalism, attention to detail, and timely communication made the entire process seamless and stress-free.",
                relative_time_description: "2 months ago"
            },
            {
                author_name: "Rajib Dutta",
                profile_photo_url: "",
                rating: 5,
                text: "I'm glad that I was able to connect with Patron. They took the minimum time to do the calculations based on the details provided by me and were really helpful throughout the process.",
                relative_time_description: "3 months ago"
            },
            {
                author_name: "Nishikant Gurav",
                profile_photo_url: "",
                rating: 5,
                text: "Really a fantastic experience with Patron Accounting especially Shubham, he was extremely great. Knowledgeable person who deserves the 5 star for smooth handling of all documentation.",
                relative_time_description: "1 month ago"
            },
            {
                author_name: "Nikhil Nimbhorkar",
                profile_photo_url: "",
                rating: 5,
                text: "Patron Accounting gives the best service related to all account handling of our firm. I am blessed and extremely happy that Patron Accounting assigned us a dedicated point of contact.",
                relative_time_description: "4 months ago"
            },
            {
                author_name: "Sameer Mehta",
                profile_photo_url: "",
                rating: 5,
                text: "I have called Patron to file ITR for my 5 family members. I worked with Shubham Junjunwala and Amin Jain. It was a smooth process. They understand basics very well and respond promptly.",
                relative_time_description: "2 months ago"
            },
            {
                author_name: "Preeti Singh Rathor",
                profile_photo_url: "",
                rating: 5,
                text: "From the very beginning, their approach has been highly professional, prompt, and solution-oriented. Every interaction reflected their deep knowledge and commitment to helping clients.",
                relative_time_description: "3 months ago"
            },
            {
                author_name: "Anita Gaur",
                profile_photo_url: "",
                rating: 5,
                text: "Very proficient and professional staff. Do fantastic job and instant response. Strongly recommended engaging them for all accounting needs specially for startups and growing businesses.",
                relative_time_description: "5 months ago"
            },
            {
                author_name: "Pankaj Arvikar",
                profile_photo_url: "",
                rating: 5,
                text: "I contacted them to file the ITR. Shubham was the POC for me and he was really very professional and giving prompt responses. Highly recommend them for tax and compliance work.",
                relative_time_description: "1 month ago"
            },
            {
                author_name: "Sunny Ashpal",
                profile_photo_url: "",
                rating: 5,
                text: "Excellent service for company registration and compliance. The team is very responsive and handles everything end to end. A trusted partner for Demandify Media.",
                relative_time_description: "6 months ago",
                role: "Director - Demandify Media",
                hasVideo: true,
                videoUrl: "/storage/testimonials/videos/ffNmUX9RNpnwMXhlJcqIPwnE809y6lIMYuAOpQMf.mp4",
                photoUrl: "/storage/testimonials/jX6mNzoJrohODlJP7Uf7InnBws62qICwmNQG6Wkb.jpg"
            },
            {
                author_name: "Anjanay Srivastava",
                profile_photo_url: "",
                rating: 5,
                text: "Professional and timely service. Patron Accounting handled our company incorporation and compliance with great expertise. Highly recommended for startups.",
                relative_time_description: "4 months ago",
                role: "Founder - Hunarsource Consulting",
                hasVideo: true,
                videoUrl: "/storage/testimonials/videos/LjYtH6V1FWB71lWPo1MS77UCKxowr5l4fbsUGA0n.mp4",
                photoUrl: "/storage/testimonials/K0kApEkgICmMd1lTvTuCPehTlKsiCRso1ixvYPKg.jpg"
            }
        ]
    };

    // ============================================
    // HELPER: Generate star SVGs
    // ============================================
    function starsHTML(rating) {
        let s = '';
        for (let i = 0; i < 5; i++) {
            s += i < rating
                ? '<svg viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg>'
                : '<svg viewBox="0 0 24 24" style="opacity:0.2"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg>';
        }
        return s;
    }

    // ============================================
    // HELPER: Avatar color based on name
    // ============================================
    const avatarColors = ['', 'blue', 'teal', 'purple'];
    function avatarClass(index) {
        return avatarColors[index % avatarColors.length];
    }

    // ============================================
    // RENDER: Build card HTML for a review
    // ============================================
    function buildVideoCard(review) {
        return `
        <div>
            <div class="testi-video-card">
                <div class="testi-video-area" onclick="toggleTestiVideo(this)">
                    <video preload="metadata" poster="${review.photoUrl || ''}">
                        <source src="${review.videoUrl}" type="video/mp4">
                    </video>
                    <div class="testi-play-overlay">
                        <div class="testi-play-btn">
                            <svg viewBox="0 0 24 24" fill="currentColor"><path d="M8 5v14l11-7z"/></svg>
                        </div>
                    </div>
                    <div class="testi-star-badge">${starsHTML(review.rating)}</div>
                </div>
                <div style="padding:16px;display:flex;align-items:center;gap:10px;flex:1;">
                    <div class="testi-avatar">
                        ${review.photoUrl ? `<img src="${review.photoUrl}" alt="${review.author_name}">` : review.author_name.charAt(0)}
                    </div>
                    <div>
                        <div class="testi-name">${review.author_name}</div>
                        ${review.role ? `<div class="testi-role">${review.role}</div>` : ''}
                    </div>
                </div>
            </div>
        </div>`;
    }

    function buildQuoteCard(review, index) {
        const hasPhoto = review.profile_photo_url && review.profile_photo_url !== '';
        const initial = review.author_name ? review.author_name.charAt(0).toUpperCase() : '?';
        const colorClass = avatarClass(index);

        return `
        <div>
            <div class="testi-quote-card">
                <div class="testi-quote-icon">
                    <svg viewBox="0 0 24 24" fill="currentColor"><path d="M14.017 21v-7.391c0-5.704 3.731-9.57 8.983-10.609l.995 2.151c-2.432.917-3.995 3.638-3.995 5.849h4v10h-9.983zm-14.017 0v-7.391c0-5.704 3.748-9.57 9-10.609l.996 2.151c-2.433.917-3.996 3.638-3.996 5.849h3.983v10h-9.983z"/></svg>
                </div>
                <p class="testi-quote-text">${review.text || ''}</p>
                <div class="testi-footer">
                    <div class="testi-author">
                        <div class="testi-avatar ${colorClass}">
                            ${hasPhoto ? `<img src="${review.profile_photo_url}" alt="${review.author_name}">` : initial}
                        </div>
                        <div>
                            <div class="testi-name">${review.author_name}</div>
                            ${review.role ? `<div class="testi-role">${review.role}</div>` : (review.relative_time_description ? `<div class="testi-role">${review.relative_time_description}</div>` : '')}
                        </div>
                    </div>
                    <div class="testi-rating-row">
                        <div class="testi-stars">${starsHTML(review.rating)}</div>
                        <div class="testi-google-badge"><img src="/images/google.png" alt="Google" onerror="this.parentElement.innerHTML='G'"></div>
                    </div>
                </div>
            </div>
        </div>`;
    }

    // ============================================
    // RENDER: Populate slider with reviews
    // ============================================
           function renderReviews(reviews) {
const slider = document.getElementById('testimonialSlider');
const loading = document.getElementById('testiLoading');
let html = '';
reviews.forEach(function(review, i) {
    if (review.hasVideo && review.videoUrl) {
        html += buildVideoCard(review);
    } else {
        html += buildQuoteCard(review, i);
    }
});
// If slider already initialized destroy first
if ($(slider).hasClass('slick-initialized')) {
    $(slider).slick('unslick');
}
slider.innerHTML = html;
slider.style.display = 'block';
if (loading) loading.style.display = 'none';
// Re-initialize slick
initSlick(slider);
}
    function initSlick(slider) {
        if ($(slider).hasClass('slick-initialized')) return;
        $(slider).slick({
            dots: false,
            infinite: true,
            speed: 500,
            slidesToShow: 4,
            slidesToScroll: 1,
            autoplay: true,
            autoplaySpeed: 2500,
            arrows: false,
            cssEase: 'ease-in-out',
            pauseOnHover: true,
            pauseOnFocus: true,
            swipe: true,
            touchMove: true,
            responsive: [
                { breakpoint: 1200, settings: { slidesToShow: 3 } },
                { breakpoint: 900, settings: { slidesToShow: 2 } },
                { breakpoint: 600, settings: { slidesToShow: 1, autoplaySpeed: 3000 } }
            ]
        });
    }

    // ============================================
    // FETCH: Google Places API Reviews
    // ============================================
    function fetchGMBReviews() {
        // If API key not set, use fallback
        if (!CONFIG.googleApiKey || CONFIG.googleApiKey === '') {
            console.log('[Testimonials] No Google API key set  -  using fallback reviews.');
            renderReviews(CONFIG.fallbackReviews);
            return;
        }

        // Google Places API requires server-side proxy due to CORS
        // Option 1: Use Google Maps JS API (requires loading Maps library)
        // Option 2: Use a server-side proxy endpoint
        // Below is the Google Maps JS API approach:

        const script = document.createElement('script');
        script.src = `https://maps.googleapis.com/maps/api/js?key=${CONFIG.googleApiKey}&libraries=places&callback=initGMBReviews`;
        script.async = true;
        script.defer = true;
        script.onerror = function() {
            console.log('[Testimonials] Failed to load Google Maps API  -  using fallback.');
            renderReviews(CONFIG.fallbackReviews);
        };
        document.head.appendChild(script);
    }

    // Global callback for Google Maps JS API
    window.initGMBReviews = function() {
        try {
            const service = new google.maps.places.PlacesService(document.createElement('div'));
            service.getDetails({
                placeId: CONFIG.placeId,
                fields: ['name', 'rating', 'reviews', 'user_ratings_total']
            }, function(place, status) {
                if (status === google.maps.places.PlacesServiceStatus.OK && place.reviews && place.reviews.length > 0) {
                    console.log(`[Testimonials] Fetched ${place.reviews.length} GMB reviews for ${place.name} (${place.rating}★, ${place.user_ratings_total} total)`);

                    // Merge: video testimonials first, then GMB reviews
                    const videoTestimonials = CONFIG.fallbackReviews.filter(r => r.hasVideo);
                    const gmbReviews = place.reviews.map(function(r) {
                        return {
                            author_name: r.author_name,
                            profile_photo_url: r.profile_photo_url,
                            rating: r.rating,
                            text: r.text,
                            relative_time_description: r.relative_time_description
                        };
                    });

                    renderReviews([...videoTestimonials, ...gmbReviews]);
                } else {
                    console.log('[Testimonials] Google Places returned no reviews  -  using fallback.');
                    renderReviews(CONFIG.fallbackReviews);
                }
            });
        } catch (e) {
            console.log('[Testimonials] Error:', e);
            renderReviews(CONFIG.fallbackReviews);
        }
    };

    // ============================================
    // INIT
    // ============================================
    document.addEventListener('DOMContentLoaded', function() {
        // Static cards already rendered  -  init Slick immediately
        const slider = document.getElementById('testimonialSlider');
        if (slider && slider.children.length > 0) {
            if (typeof $ !== 'undefined' && $.fn.slick) {
                initSlick(slider);
            } else {
                window.addEventListener('load', function() {
                    if (typeof $ !== 'undefined' && $.fn.slick) initSlick(slider);
                });
            }
        }
        fetchGMBReviews();
    });
})();

// Video play/pause toggle for testimonial cards
function toggleTestiVideo(area) {
    const video = area.querySelector('video');
    if (!video) return;
    if (video.paused) {
        // Pause all other videos first
        document.querySelectorAll('.testi-video-area video').forEach(function(v) { v.pause(); v.closest('.testi-video-area').classList.remove('playing'); });
        video.play();
        area.classList.add('playing');
    } else {
        video.pause();
        area.classList.remove('playing');
    }
}

</script>

<!-- ============================================
     CONSULTATION FORM  -  Country Dropdown + Validation + Bigin Integration
     ============================================ -->
<script>
// Country Data (46 countries)
var countries = [
    { name: "India", code: "+91", flag: "\u{1F1EE}\u{1F1F3}", iso: "IN" },
    { name: "United States", code: "+1", flag: "\u{1F1FA}\u{1F1F8}", iso: "US" },
    { name: "United Kingdom", code: "+44", flag: "\u{1F1EC}\u{1F1E7}", iso: "GB" },
    { name: "United Arab Emirates", code: "+971", flag: "\u{1F1E6}\u{1F1EA}", iso: "AE" },
    { name: "Saudi Arabia", code: "+966", flag: "\u{1F1F8}\u{1F1E6}", iso: "SA" },
    { name: "Singapore", code: "+65", flag: "\u{1F1F8}\u{1F1EC}", iso: "SG" },
    { name: "Australia", code: "+61", flag: "\u{1F1E6}\u{1F1FA}", iso: "AU" },
    { name: "Canada", code: "+1", flag: "\u{1F1E8}\u{1F1E6}", iso: "CA" },
    { name: "Germany", code: "+49", flag: "\u{1F1E9}\u{1F1EA}", iso: "DE" },
    { name: "France", code: "+33", flag: "\u{1F1EB}\u{1F1F7}", iso: "FR" },
    { name: "Japan", code: "+81", flag: "\u{1F1EF}\u{1F1F5}", iso: "JP" },
    { name: "China", code: "+86", flag: "\u{1F1E8}\u{1F1F3}", iso: "CN" },
    { name: "South Korea", code: "+82", flag: "\u{1F1F0}\u{1F1F7}", iso: "KR" },
    { name: "Brazil", code: "+55", flag: "\u{1F1E7}\u{1F1F7}", iso: "BR" },
    { name: "South Africa", code: "+27", flag: "\u{1F1FF}\u{1F1E6}", iso: "ZA" },
    { name: "Nigeria", code: "+234", flag: "\u{1F1F3}\u{1F1EC}", iso: "NG" },
    { name: "Kenya", code: "+254", flag: "\u{1F1F0}\u{1F1EA}", iso: "KE" },
    { name: "Malaysia", code: "+60", flag: "\u{1F1F2}\u{1F1FE}", iso: "MY" },
    { name: "Indonesia", code: "+62", flag: "\u{1F1EE}\u{1F1E9}", iso: "ID" },
    { name: "Thailand", code: "+66", flag: "\u{1F1F9}\u{1F1ED}", iso: "TH" },
    { name: "Vietnam", code: "+84", flag: "\u{1F1FB}\u{1F1F3}", iso: "VN" },
    { name: "Philippines", code: "+63", flag: "\u{1F1F5}\u{1F1ED}", iso: "PH" },
    { name: "Bangladesh", code: "+880", flag: "\u{1F1E7}\u{1F1E9}", iso: "BD" },
    { name: "Pakistan", code: "+92", flag: "\u{1F1F5}\u{1F1F0}", iso: "PK" },
    { name: "Sri Lanka", code: "+94", flag: "\u{1F1F1}\u{1F1F0}", iso: "LK" },
    { name: "Nepal", code: "+977", flag: "\u{1F1F3}\u{1F1F5}", iso: "NP" },
    { name: "Qatar", code: "+974", flag: "\u{1F1F6}\u{1F1E6}", iso: "QA" },
    { name: "Kuwait", code: "+965", flag: "\u{1F1F0}\u{1F1FC}", iso: "KW" },
    { name: "Bahrain", code: "+973", flag: "\u{1F1E7}\u{1F1ED}", iso: "BH" },
    { name: "Oman", code: "+968", flag: "\u{1F1F4}\u{1F1F2}", iso: "OM" },
    { name: "New Zealand", code: "+64", flag: "\u{1F1F3}\u{1F1FF}", iso: "NZ" },
    { name: "Ireland", code: "+353", flag: "\u{1F1EE}\u{1F1EA}", iso: "IE" },
    { name: "Netherlands", code: "+31", flag: "\u{1F1F3}\u{1F1F1}", iso: "NL" },
    { name: "Italy", code: "+39", flag: "\u{1F1EE}\u{1F1F9}", iso: "IT" },
    { name: "Spain", code: "+34", flag: "\u{1F1EA}\u{1F1F8}", iso: "ES" },
    { name: "Switzerland", code: "+41", flag: "\u{1F1E8}\u{1F1ED}", iso: "CH" },
    { name: "Sweden", code: "+46", flag: "\u{1F1F8}\u{1F1EA}", iso: "SE" },
    { name: "Russia", code: "+7", flag: "\u{1F1F7}\u{1F1FA}", iso: "RU" },
    { name: "Mexico", code: "+52", flag: "\u{1F1F2}\u{1F1FD}", iso: "MX" },
    { name: "Egypt", code: "+20", flag: "\u{1F1EA}\u{1F1EC}", iso: "EG" },
    { name: "Turkey", code: "+90", flag: "\u{1F1F9}\u{1F1F7}", iso: "TR" },
    { name: "Israel", code: "+972", flag: "\u{1F1EE}\u{1F1F1}", iso: "IL" },
    { name: "Hong Kong", code: "+852", flag: "\u{1F1ED}\u{1F1F0}", iso: "HK" },
    { name: "Taiwan", code: "+886", flag: "\u{1F1F9}\u{1F1FC}", iso: "TW" },
    { name: "Myanmar", code: "+95", flag: "\u{1F1F2}\u{1F1F2}", iso: "MM" },
    { name: "Afghanistan", code: "+93", flag: "\u{1F1E6}\u{1F1EB}", iso: "AF" }
];

var selectedCountry = countries[0]; // Default: India

function populateCountries(filter) {
    filter = filter || '';
    var container = document.getElementById('countryOptions');
    if (!container) return;
    container.innerHTML = '';
    var filtered = filter
        ? countries.filter(function(c) { return c.name.toLowerCase().indexOf(filter.toLowerCase()) !== -1 || c.code.indexOf(filter) !== -1; })
        : countries;
    filtered.forEach(function(country) {
        var option = document.createElement('div');
        option.className = 'country-option' + (country.iso === selectedCountry.iso ? ' active' : '');
        option.innerHTML = '<span class="flag-emoji">' + country.flag + '</span><span class="country-name">' + country.name + '</span><span class="dial-code">' + country.code + '</span>';
        option.onclick = function(e) { e.stopPropagation(); selectCountry(country); };
        container.appendChild(option);
    });
}

function selectCountry(country) {
    selectedCountry = country;
    document.getElementById('selectedFlag').textContent = country.flag;
    document.getElementById('selectedCode').textContent = country.code;
    document.getElementById('countryCodeDropdown').classList.remove('open');
    document.getElementById('countrySearchInput').value = '';
    populateCountries();
    document.getElementById('phoneNumberInput').focus();
}

function toggleCountryDropdown(event) {
    event.stopPropagation();
    var dropdown = document.getElementById('countryCodeDropdown');
    var isOpen = dropdown.classList.contains('open');
    if (isOpen) {
        dropdown.classList.remove('open');
    } else {
        dropdown.classList.add('open');
        document.getElementById('countrySearchInput').value = '';
        populateCountries();
        setTimeout(function() { document.getElementById('countrySearchInput').focus(); }, 50);
    }
}

function filterCountries(value) { populateCountries(value); }

// Close dropdown on outside click
document.addEventListener('click', function(e) {
    var dropdown = document.getElementById('countryCodeDropdown');
    if (dropdown && !dropdown.contains(e.target)) { dropdown.classList.remove('open'); }
});
document.addEventListener('keydown', function(e) {
    if (e.key === 'Escape') { document.getElementById('countryCodeDropdown').classList.remove('open'); }
});

// Form Validation
function clearFieldError(fieldObj) {
    fieldObj.classList.remove('input-error');
    var parent = fieldObj.closest('.form-group');
    if (parent) { var errMsg = parent.querySelector('.field-error-msg'); if (errMsg) errMsg.remove(); }
}

function setFieldError(fieldObj, message) {
    fieldObj.classList.add('input-error');
    var parent = fieldObj.closest('.form-group');
    if (parent && !parent.querySelector('.field-error-msg')) {
        var errDiv = document.createElement('div');
        errDiv.className = 'field-error-msg';
        errDiv.textContent = message;
        parent.appendChild(errDiv);
    }
}

// ── Phone Validation ──────────────────────────────────────────
function validatePhone(val, dialCode) {
    val = val.replace(/[\s\-().]/g, '');
    if (!val) {
        return { valid: false, message: 'Phone number is required' };
    }
    if (dialCode === '+91') {
        if (!/^[6-9][0-9]{9}$/.test(val)) {
            if (val.length !== 10) {
                return { valid: false, message: 'Enter a valid 10-digit Indian mobile number' };
            }
            return { valid: false, message: 'Indian mobile numbers must start with 6, 7, 8, or 9' };
        }
        return { valid: true };
    }
    if (!/^[0-9]{7,15}$/.test(val)) {
        return { valid: false, message: 'Enter a valid phone number (7-15 digits)' };
    }
    return { valid: true };
}

function validatePhoneOnBlur(input) {
    var val = input.value.trim();
    var dialCode = (selectedCountry && selectedCountry.code) ? selectedCountry.code : '+91';
    var result = validatePhone(val, dialCode);
    var errorEl = document.getElementById('phoneError');
    var groupEl = document.getElementById('phoneGroup');
    if (val === '') return;
    if (!result.valid) {
        groupEl.classList.add('input-error');
        errorEl.textContent = result.message;
        errorEl.style.display = 'block';
    } else {
        groupEl.classList.remove('input-error');
        errorEl.style.display = 'none';
    }
}
// ─────────────────────────────────────────────────────────────

function validateConsultationForm() {
    var isValid = true;

    var nameField = document.getElementById('consultFullName');
    if (!nameField.value.trim()) { setFieldError(nameField, 'Full name is required'); isValid = false; }

    var phoneInput = document.getElementById('phoneNumberInput');
    var phoneVal = phoneInput.value.trim();
    var phoneResult = validatePhone(phoneInput.value.trim(), selectedCountry ? selectedCountry.code : '+91');
    if (!phoneResult.valid) {
        setFieldError(phoneInput, phoneResult.message);
        document.getElementById('phoneGroup').classList.add('input-error');
        document.getElementById('phoneError').textContent = phoneResult.message;
        document.getElementById('phoneError').style.display = 'block';
        isValid = false;
    } else {
        document.getElementById('phoneGroup').classList.remove('input-error');
        document.getElementById('phoneError').style.display = 'none';
    }

    var cityField = document.getElementById('consultCity');
    if (!cityField.value.trim()) { setFieldError(cityField, 'City is required'); isValid = false; }

    var serviceField = document.getElementById('consultService');
    if (!serviceField.value) { setFieldError(serviceField, 'Please select a service'); isValid = false; }

    if (isValid) {
        document.getElementById('combinedMobileField').value = selectedCountry.code + phoneVal.replace(/[\s\-().]/g, '');
        var serviceName = serviceField.options[serviceField.selectedIndex].text;
        document.getElementById('dealNameField').value = 'Website Enquiry - ' + serviceName;
        document.getElementById('pageSourceField').value = window.location.href;
        var btn = document.getElementById('formSubmitBtn');
        btn.disabled = true;
        btn.textContent = 'Submitting...';
        setTimeout(function() { btn.disabled = false; btn.innerHTML = 'Get Free Quote \u2192'; }, 6000);
    }
    return isValid;
}

// Success state handler (Bigin iframe load)
window.addEventListener('DOMContentLoaded', function() {
    populateCountries();
    // Auto-embed page URL in form
    var pageSourceField = document.getElementById('pageSourceField');
    if (pageSourceField) { pageSourceField.value = window.location.href; }
    var iframe = document.getElementById('hidden208810000001209168Frame');
    if (iframe) {
        iframe.addEventListener('load', function() {
            try {
                var iframeDoc = this.contentWindow.document;
                if (iframeDoc.body && iframeDoc.body.childElementCount !== 0) { showSuccessState(); }
            } catch (error) { showSuccessState(); }
        });
    }
});

function showSuccessState() {
    var formCard = document.getElementById('consultationFormCard');
    if (formCard) {
        formCard.innerHTML =
            '<div class="form-success">' +
                '<div class="form-success-icon">' +
                    '<svg viewBox="0 0 24 24" fill="none" stroke="#10B981" stroke-width="2.5" width="32" height="32"><path d="M5 13l4 4L19 7"/></svg>' +
                '</div>' +
                '<h3>Thank You!</h3>' +
                '<p>Our CA/CS expert will contact you shortly.<br>Check your phone for a call from Patron Accounting.</p>' +
            '</div>';
    }
}
</script>

<script>
// Bigin Mandatory Fields Validation (from Bigin source code)
var mndFields208810000001209168 = new Array('Potential\x20Name','Contacts.Last\x20Name','Contacts.Mobile','Contacts.Mailing\x20City','Contacts.Description');
var fldLangVal208810000001209168 = new Array('Website Enquiry Form','Full Name','Mobile','City','Service Needed');

function checkMandatory208810000001209168() {
    var isReturn = true;
    for(var i = 0; i < mndFields208810000001209168.length; i++) {
        var fieldObj = document.forms['BiginWebToRecordForm208810000001209168'][mndFields208810000001209168[i]];
        if(fieldObj) {
            if(((fieldObj.value).replace(/^\s+|\s+$/g, '')).length == 0) {
                isReturn = false;
            }
        }
    }
    if(isReturn) {
        document.getElementById('formSubmitBtn').disabled = true;
    }
    return isReturn;
}

// Bigin iframe success handler (overrides our custom one above via event delegation)
document.getElementById('hidden208810000001209168Frame').addEventListener('load', function () {
    try {
        var doc = arguments[0].currentTarget.contentWindow.document;
        if(doc.body && doc.body.childElementCount !== 0) {
            showSuccessState();
        }
    } catch (error) {
        showSuccessState();
    }
});
</script>

<!-- Bigin WebForm Script (handles form POST to Bigin servers) -->
<script id='wf_script' src='https://bigin.zoho.in/crm/WebformScriptServlet?rid=2427034fc9b227c6338366d9b8b215a5d00314702d3b6d6eb99eb3530677412d6e830f907e98e80d864e000cb2562843gide400f91af978409c278261bdb7657f2282138d1ec4587de30428ddc1db6fac79'></script>

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
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
@endsection
